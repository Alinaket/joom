@extends("layouts.app_head")
@section("content")
    <div class="content">
        <div class="banner">
            <div class="arrow_left arrow">
                <span><i class="fa-solid fa-circle-chevron-left"></i></span>
            </div>
            <div class="cardList">
                <div class="card black">
                    <div class="text">
                        <h3>Хіти Joom</h3>
                        <p>Акція тижня</p>
                    </div>
                    <div class="img">
                        <img src="https://upload.joomcdn.net/7646264cef353d157fe3f93ea8606370e1749cdf_original.png"
                             alt="">
                    </div>
                </div>
                {{--            <div class="card pink">--}}
                {{--                <div class="text">--}}
                {{--                    <h3>Сезонне взуття</h3>--}}
                {{--                    <p>Муркотливі знижки</p>--}}
                {{--                </div>--}}
                {{--                <div class="img">--}}
                {{--                    <img src="https://upload.joomcdn.net/a48bc99d073832a3d9169a42fe35b9a70f61280a_original.png" alt="">--}}
                {{--                </div>--}}
                {{--            </div>--}}
                {{--            <div class="card dark_blue">--}}
                {{--                <div class="text">--}}
                {{--                    <h3>Все для Великодня</h3>--}}
                {{--                    <p>Готуємось до свят</p>--}}
                {{--                </div>--}}
                {{--                <div class="img">--}}
                {{--                    <img src="https://upload.joomcdn.net/c7fe94bddff069a0145f7807ec60b2633f21769e_original.png" alt="">--}}
                {{--                </div>--}}
                {{--            </div>--}}
                {{--            <div class="card dark_blue">--}}
                {{--                <div class="text">--}}
                {{--                    <h3>Приходимо до форми</h3>--}}
                {{--                    <p>До пляжного сезону</p>--}}
                {{--                </div>--}}
                {{--                <div class="img">--}}
                {{--                    <img src="https://upload.joomcdn.net/c7fe94bddff069a0145f7807ec60b2633f21769e_original.png" alt="">--}}
                {{--                </div>--}}
                {{--            </div>--}}
                {{--            <div class="card light_blue">--}}
                {{--                <div class="text">--}}
                {{--                    <h3>Рай для садівників</h3>--}}
                {{--                    <p>Саджаємо, удобрюємо, підстригаємо</p>--}}
                {{--                </div>--}}
                {{--                <div class="img">--}}
                {{--                    <img src="https://upload.joomcdn.net/05f4e980b973a4f34425fd8c1d26d7c3bb8be31c_original.png" alt="">--}}
                {{--                </div>--}}
                {{--            </div>--}}
            </div>
            <div class="arrow_right arrow">
                <span><i class="fa-solid fa-circle-chevron-right"></i></span>
            </div>
        </div>
        <div class="interest">
            <div class="title">
                <a href="#"><h2>Дрібниці для дому</h2></a>
                <a href="#"><p>Усі товари <span><i class="fa-solid fa-chevron-right"></i></span></p></a>
            </div>
            <div class="cardList cardList_all">

                @foreach($products as $item)
                    <a class="card" href="{{route("profile.product_joom", ["product_id"=>$item->id])}}">
                        <div class="img">
                            <img src="{{$item->img}}" alt="">
                        </div>
                        <div class="text">
                            <div class="sale">
                                <p>-<span>{{$item->sale}}</span>%</p>
                            </div>
                            <div class="price">
                                <p><span>{{$item->price}}</span>грн</p>
                                <em><span>{{$item->sale_price}}</span>грн</em>
                            </div>
{{--                            <em>Хід продажів</em>--}}
                            <div class="marks">
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                            </div>
                            <div class="discript">
                                <p>{{$item->name}}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    <div class="action_week">
        <div class="title">
            <h2>Акція тижня</h2>
        </div>
        <div class="cardList cardList_banner">
            <div class="card yellow">
                <div class="text">
                    <h3>Кращі пропозиції</h3>
                    <p>Муркотливі знижки</p>
                </div>
                <div class="img">
                    <img src="https://upload.joomcdn.net/21660b5aae4b92f30932617cdc93d915a71ced12_original.jpeg" alt="">
                </div>
            </div>
            <div class="card pink">
                <div class="text">
                    <h3>Товари до 300 ₴</h3>
                    <p>Муркотливі знижки</p>
                </div>
                <div class="img">
                    <img src="https://upload.joomcdn.net/08ad316e72e418338a197b04f26bee6e0b911e23_original.jpeg" alt="">
                </div>
            </div>
            <div class="card pink">
                <div class="text">
                    <h3>Все для автомобіля</h3>
                    <p>Муркотливі знижки</p>
                </div>
                <div class="img">
                    <img src="https://upload.joomcdn.net/0a68db60efd14fb9c6f68625a72513fea2bd1af6_original.jpeg" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="info_sale">
        <div class="box">
            <div class="img_left">
                <div class="box_img_left">
                    <img src="https://upload.joomcdn.net/c72f256c071e2d473d6f5492a3d771414f7ed0fc_original.png" alt="">
                    <div class="text">
                        <h3>Няв-товари</h3>
                        <p>Муркотиливі знижки</p>
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="title">
                    <a href=""><h2>Найцікавіше</h2></a>
                    <a href="#"><p>Усі товари <span><i class="fa-solid fa-chevron-right"></i></span></p></a>
                </div>
                <div class="cardList cardList_all">
                    @foreach($interesting as $item)
                        <a class="card" href="{{route("profile.product_joom", ["product_id"=>$item->id])}}">
                            <div class="img">
                                <img src="{{$item->img}}" alt="">
                            </div>
                            <div class="text">
                                <div class="sale">
                                    <p>-<span>{{$item->sale}}</span>%</p>
                                </div>
                                <div class="price">
                                    <p><span>{{$item->price}}</span>грн</p>
                                    <em><span>{{$item->sale_price}}</span>грн</em>
                                </div>
                                {{--                            <em>Хід продажів</em>--}}
                                <div class="marks">
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                </div>
                                <div class="discript">
                                    <p>{{$item->name}}</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="container_banners">
            <div class="cardList cardList_banner">
                <div class="card red">
                    <div class="text">
                        <h3>Одяг та аксесуари</h3>
                        <p>З привабливими знижками</p>
                    </div>
                    <div class="img">
                        <img
                            src="https://resources.joomcdn.net/promotions/merchant/5e3c2518efa3711429d923fe_bannerImage.png"
                            alt="">
                    </div>
                </div>
                <div class="card white">
                    <div class="text">
                        <h3>Затишний дім</h3>
                        <p>І кухня в ньому</p>
                    </div>
                    <div class="img">
                        <img
                            src="https://resources.joomcdn.net/promotions/merchant/5e84be13efa37114ec490c57_bannerImage.png"
                            alt="">
                    </div>
                </div>
                <div class="card white">
                    <div class="text">
                        <h3>Знижки на гаджети </h3>
                        <p>Для будь-якого випадку</p>
                    </div>
                    <div class="img">
                        <img
                            src="https://resources.joomcdn.net/promotions/merchant/607416f0d3e49614d1abafff_bannerImage.png"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="health">
        <div class="title">
            <a href="#"><h2>Для краси та здоров'я</h2></a>
            <a href="#"><p>Усі товари <span><i class="fa-solid fa-chevron-right"></i></span></p></a>
        </div>
        <div class="cardList cardList_all">
            @foreach($products as $item)
                <a class="card" href="{{route("profile.product_joom", ["product_id"=>$item->id])}}">
                    <div class="img">
                        <img src="{{$item->img}}" alt="">
                    </div>
                    <div class="text">
                        <div class="sale">
                            <p>-<span>{{$item->sale}}</span>%</p>
                        </div>
                        <div class="price">
                            <p><span>{{$item->price}}</span>грн</p>
                            <em><span>{{$item->sale_price}}</span>грн</em>
                        </div>
                        {{--                            <em>Хід продажів</em>--}}
                        <div class="marks">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                        </div>
                        <div class="discript">
                            <p>{{$item->name}}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
    <div class="banners_country">
        <div class="title">
            <h2>Товари з різних країн</h2>
        </div>
        <div class="cardList cardList_banner">
            <div class="card">
                <div class="text">
                    <h3>На товари з Кореї</h3>
                    <p>Краще зі всього світу</p>
                </div>
                <div class="img">
                    <img src="https://upload.joomcdn.net/e0d04bd4b205e2475883400c6f40be5d342ce9b8_original.jpeg" alt="">
                </div>
            </div>
            <div class="card">
                <div class="text">
                    <h3>Товари з Туреччини</h3>
                    <p>Краще зі всього світу</p>
                </div>
                <div class="img">
                    <img src="https://upload.joomcdn.net/079b6606bae241cbc9b61dfeb640d42e6e9079b2_original.jpeg" alt="">
                </div>
            </div>
            <div class="card">
                <div class="text">
                    <h3>Товари з Польщі</h3>
                    <p>Краще зі всього світу</p>
                </div>
                <div class="img">
                    <img src="https://upload.joomcdn.net/70bfa7c9ecf35385f2c466af5259b631ca0d41d1_original.jpeg" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="for_you">
        <div class="title">
            <h2>Кращі товари спеціально для вас</h2>
        </div>
        <div class="cardList cardList_all">
            @foreach($products_all as $item)
                <a class="card" href="{{route("profile.product_joom", ["product_id"=>$item->id])}}">
                    <div class="img">
                        <img src="{{$item->img}}" alt="">
                    </div>
                    <div class="text">
                        <div class="sale">
                            <p>-<span>{{$item->sale}}</span>%</p>
                        </div>
                        <div class="price">
                            <p><span>{{$item->price}}</span>грн</p>
                            <em><span>{{$item->sale_price}}</span>грн</em>
                        </div>
                        {{--                            <em>Хід продажів</em>--}}
                        <div class="marks">
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                            <span><i class="fa-solid fa-star"></i></span>
                        </div>
                        <div class="discript">
                            <p>{{$item->name}}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        <div class="button_see">
            <button>Показати ще</button>
        </div>
    </div>
@stop
