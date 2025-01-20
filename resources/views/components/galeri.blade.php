<section class="product">
    <div class="container">
        <h1 class="mb-4 text-center">Galeri Kami</h1>
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="product__items">
                    <div class="product__all">
                        <div class="row">
                            @foreach ($items as $item)
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="product__all-single">
                                        <div class="product__all-img">
                                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="w-full h-auto object-cover">
                                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="w-full h-auto object-cover">
                                        </div>

                                        <h4 class="gallery__all-title p-1">{{ $item->title }}</h4>
                                        <p class="text-muted mb-3 p-1" style="font-size: 0.9rem;">
                                            Dibuat: {{ $item->timespan }}
                                        </p>
                                        <span class="hover-btn hover-bx"></span>
                                        <span class="hover-btn hover-bx2"></span>
                                        <span class="hover-btn hover-bx3"></span>
                                        <span class="hover-btn hover-bx4"></span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
