@if($aboutus->image)
        @php
            $images = explode(',', $aboutus->image); // Memecah gambar yang dipisahkan koma
        @endphp
        <div class="swiper-container" style="width: 100vw; margin: 0; padding: 0;">
            <div class="swiper-wrapper">
                @foreach($images as $image)
                    <div class="swiper-slide d-flex justify-content-center align-items-center" style="background-color: #f8f8f8; border-radius: 0;">
                        <img src="{{ asset('storage/' . $image) }}" alt="About Us Image" class="img-fluid" style="max-height: 400px; width: 100%; object-fit: cover;">
                    </div>
                @endforeach
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    @endif
<section class="product">
    <!-- Gambar berada di atas -->


    <div class="container mt-3 text-center">
        <h1>{{ $aboutus->title }}</h1>
        <br>
        <p>{{ $aboutus->description }}</p>
        <p><strong>Tanggal: </strong> {{ $aboutus->date }}</p>

        <!-- Lokasi dan Jam Operasional Section -->
        <section id="lokasi" class="section fade-in mt-5">
            <h2>Kunjungi Kami</h2>
            <p>Jl. Pramuka No.4, Lembah Sari, Kec. Rumbai Pesisir, Kota Pekanbaru, Riau 28262</p>
            <p>Jam Operasional: Senin-Minggu: 10.00 - 22.00</p>

            <!-- Peta Lokasi -->
            <div class="map-container" style="margin-top: 20px; margin-bottom: 50px;">
                <h4>Lokasi Kami</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.621233435821!2d101.4456255755122!3d0.5694973994249456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5ad8ab6814c95%3A0xacc12702024b8871!2sNun%20Coffee!5e0!3m2!1sen!2sid!4v1734283974978!5m2!1sen!2sid"
                    width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

            @if(auth()->user() && auth()->user()->role === 'admin')
                <div class="d-flex justify">
                    <a href="{{ route('aboutus.edit', $aboutus->id) }}" class="btn btn-primary mt-2 mb-5">Edit</a>
                </div>
            @endif
        </section>
    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const swiper = new Swiper('.swiper-container', {
            loop: true, // Slide akan berulang
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 5000, // Durasi antar slide (ms)
                disableOnInteraction: false,
            },
        });
    });
</script>
