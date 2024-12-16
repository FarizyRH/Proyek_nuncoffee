<section class="product">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-12">
                <div class="product__items">
                    <div class="product__all">
                        <div class="row">
                            @foreach ($items as $item)
                                <div class="col-xl-4 col-lg-4 col-md-6">
                                    <div class="product__all-single">
                                        <div class="product__all-img">
                                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}">
                                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}">
                                        </div>
                                        <h4 class="gallery__all-title">{{ $item->title }}</h4>
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
