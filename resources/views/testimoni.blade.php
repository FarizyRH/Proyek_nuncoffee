<x-app-layout>
    <div class="max-w-7xl mx-auto p-6">
        <!-- Header -->
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800">
                Segelas Kebahagiaan, Seteguk Kenyamanan
            </h1>
            <p class="text-gray-600 mt-2">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </p>
        </div>

        <!-- Testimoni Section -->
        <div class="mb-8">
            <h2 class="text-xl font-semibold text-gray-800">Kolaborasi Sukses Kami:</h2>
            <div class="mt-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="testimoni-table-body">
                <!-- Testimoni items will be loaded here -->
            </div>
        </div>

        <!-- Add Testimoni Button -->
        <div class="text-center mt-8">
            <button class="px-6 py-2 bg-orange-500 text-black font-medium rounded-lg hover:bg-orange-600 transition" id="btn-tambah">
                Tambah Testimoni
            </button>
        </div>
    </div>

    <!-- Modal untuk Input Testimoni -->
    <div class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden" id="testimoniModal">
        <div class="bg-white w-full max-w-md p-6 rounded-lg shadow-lg">
            <form id="testimoniForm">
                <h2 class="text-xl font-semibold mb-4" id="testimoniModalLabel">Tambah Testimoni</h2>
                <input type="hidden" id="testimoni_id" name="testimoni_id">
                <div class="mb-4">
                    <label for="nama" class="block text-gray-700">Nama</label>
                    <input type="text" id="nama" name="nama" class="w-full px-4 py-2 border rounded-md" required>
                </div>
                <div class="mb-4">
                    <label for="isi_testimoni" class="block text-gray-700">Isi Testimoni</label>
                    <textarea id="isi_testimoni" name="isi_testimoni" class="w-full px-4 py-2 border rounded-md" rows="3" required></textarea>
                </div>
                <div class="mb-4">
                    <label for="gambar" class="block text-gray-700">Gambar</label>
                    <input type="file" id="gambar" name="gambar" class="w-full px-4 py-2 border rounded-md">
                </div>
                <div class="flex justify-end space-x-2">
                    <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded" id="btn-close">Tutup</button>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded" id="btn-save">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function() {
        // Load data
        loadData();

        // Show modal untuk tambah testimoni
        $('#btn-tambah').click(function() {
            $('#testimoni_id').val('');
            $('#testimoniForm')[0].reset();
            $('#testimoniModalLabel').text('Tambah Testimoni');
            $('#testimoniModal').removeClass('hidden');
        });

        // Tutup modal
        $('#btn-close').click(function() {
            $('#testimoniModal').addClass('hidden');
        });

        // Simpan testimoni (tambah atau update)
        $('#testimoniForm').on('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(this);
            const id = $('#testimoni_id').val();
            if(id){
                formData.append('_method', 'PUT');  // Mengubah method request ke PUT jika testimoni sudah ada di database
            }
            const url = id ? `/api/testimoni/${id}` : '/api/testimoni';
            const method = id ? 'POST' : 'POST';

            $.ajax({
                url: url,
                type: method,
                data: formData,
                processData: false,
                contentType: false,
                success: function(data) {
                    $('#testimoniModal').addClass('hidden');
                    loadData();
                },
                error: function(xhr) {
                    alert('Terjadi kesalahan!');
                }
            });
        });

        // Load data ke tabel
        function loadData() {
            $.ajax({
                url: '/api/testimoni',
                type: 'GET',
                success: function(data) {
                    let rows = '';
                    data.forEach(function(testimoni) {
                        rows += `
                            <div class="bg-white p-6 rounded-lg shadow-lg border border-gray-200">
                                <h3 class="text-lg font-bold text-gray-800">
                                    ${testimoni.nama}
                                </h3>
                                <p class="text-sm text-gray-500">
                                    ${testimoni.user.name} - ${new Date(testimoni.created_at).toLocaleDateString()}
                                </p>
                                <p class="mt-2 text-gray-700">
                                    ${testimoni.isi_testimoni}
                                </p>

                                <div class="mt-2">
                                    ${testimoni.gambar ? `<img src="${window.location.origin}/storage/${testimoni.gambar}" class="w-24 h-auto" />` : ''}
                                </div>

                                <button class="bg-yellow-500 hover:bg-yellow-700 text-white px-4 py-2 rounded btn-edit" data-id="${testimoni.id}">Edit</button>
                                <button class="bg-red-500 hover:bg-red-700 text-white px-4 py-2 rounded btn-delete" data-id="${testimoni.id}">Hapus</button>
                            </div>
                        `;
                    });
                    $('#testimoni-table-body').html(rows);
                },
                error: function(xhr) {
                    alert('Terjadi kesalahan saat memuat data!');
                }
            });
        }

        // Edit testimoni
        $(document).on('click', '.btn-edit', function() {
            const id = $(this).data('id');
            $.ajax({
                url: `/api/testimoni/${id}`,
                type: 'GET',
                success: function(data) {
                    $('#testimoni_id').val(data.id);
                    $('#nama').val(data.nama);
                    $('#isi_testimoni').val(data.isi_testimoni);
                    $('#testimoniModalLabel').text('Edit Testimoni');
                    $('#testimoniModal').removeClass('hidden');
                },
                error: function(xhr) {
                    alert('Terjadi kesalahan saat memuat data!');
                }
            });
        });

        // Hapus testimoni
        $(document).on('click', '.btn-delete', function() {
            const id = $(this).data('id');
            if (confirm('Apakah Anda yakin ingin menghapus testimoni ini?')) {
                $.ajax({
                    url: `/api/testimoni/${id}`,
                    type: 'DELETE',
                    success: function(data) {
                        loadData();
                    },
                    error: function(xhr) {
                        alert('Terjadi kesalahan saat menghapus data!');
                    }
                });
            }
        });
    });
    </script>
</x-app-layout>
