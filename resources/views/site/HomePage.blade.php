@extends('layouts.site.app')

@section('content')

    <!-- Hero Section Begin -->
    <x-hero-home-page />
    <!-- Hero Section End -->



    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">

            <div class="row product__filter">

                @foreach ($produtos as $produto)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                        <div class="product__item sale">
                            <div class="product__item__pic set-bg" @if ($produto['photo'])
                                data-setbg="{{asset('storage/uploads/products/' . $produto['photo']['file_name'])}}">
                            @else
                                data-setbg="{{asset('storage/uploads/products/')}}">
                            @endif

                                <span class="label">Venda</span>
                                <ul class="product__hover">
                                    <li>
                                        <a href="#">
                                            <img src="{{asset('site/img/icon/heart.png')}}" alt="{{ $produto->name }}">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{asset('site/img/icon/compare.png')}}" alt="{{ $produto->name }}">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="{{asset('site/img/icon/search.png')}}" alt="{{ $produto->name }}">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6>{{ $produto->name }}</h6>
                                <a href="{{route('product.show', ['id' => $produto->id, 'model' => $produto->name])}}"
                                    class="add-cart">Ver
                                    detalhes</a>

                                <h5>AO {{ number_format($produto->price, 2, ',', '.') }}</h5>
                                <div class="product__color__select">
                                    <label for="pc-7">
                                        <input type="radio" id="pc-7">
                                    </label>
                                    <label class="active black" for="pc-8">
                                        <input type="radio" id="pc-8">
                                    </label>
                                    <label class="grey" for="pc-9">
                                        <input type="radio" id="pc-9">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    </section>
    <!-- Product Section End -->

    <!-- Categories Section Begin -->
    <section class="categories spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="categories__text">
                        <h2>Promoção <br /> <span>em</span> <br /> Acessórios</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories__hot__deal">
                        <img src="{{asset('site/img/product-sale.png')}}" alt="">
                        <div class="hot__deal__sticker">
                            <span>Vendas</span>
                            <h5>AO 5.000</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="categories__deal__countdown">
                        <span>Ideal para Saídas</span>
                        <h2>Multicores</h2>
                        <div class="categories__deal__countdown__timer" id="countdown">
                            <div class="cd-item">
                                <span>3</span>
                                <p>Days</p>
                            </div>
                            <div class="cd-item">
                                <span>1</span>
                                <p>Hours</p>
                            </div>
                            <div class="cd-item">
                                <span>50</span>
                                <p>Minutes</p>
                            </div>
                            <div class="cd-item">
                                <span>18</span>
                                <p>Seconds</p>
                            </div>
                        </div>
                        <a href="#" class="primary-btn">Compre agora</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Últimas Novdade</span>
                        <h2>Nova Tendência de Moda</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="{{asset('site/img/blog/blog-2.jpg')}}"></div>
                        <div class="blog__item__text">

                            <h5>As Melhores Tendências de Moda</h5>
                            <a href="{{route('site.shop')}}">Ver Mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="{{asset('site/img/blog/blog-4.jpg')}}"></div>
                        <div class="blog__item__text">

                            <h5>
                                Os Melhores Looks da noite Fria
                            </h5>
                            <a href="{{route('site.shop')}}">Ver Mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="{{asset('site/img/blog/blog-5.jpg')}}"></div>
                        <div class="blog__item__text">
                            <h5>As Melhores Tendências de Moda</h5>
                            <a href="{{route('site.shop')}}">Ver Mais</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->
@endsection