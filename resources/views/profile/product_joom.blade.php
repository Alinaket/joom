@extends("layouts.app_head")
@section("content")
    <link rel="stylesheet" href="{{asset("css/product_joom.css")}}">
    <link rel="stylesheet" href="{{asset("css/joom_heder.css")}}">
    <div class="link_list">
        <a href="">Головна</a>
        <a href="">Каталог</a>
        @foreach($category_link as $item)
            <a href="">{{$item->name}}</a>
        @endforeach
    </div>
    <div class="header_top">
        <div class="container_header">
            <div class="img">
                <img src="https://img.joomcdn.net/9ee41c925b4a44058d8871a4cb4a0c98d7e8a1a9_original.jpeg" alt="">
                <div class="info_header">
                    <h4>Сонцезахисні окуляри Vintage стімпанк окуляри зварювання панк окуляри Косплей</h4>
                    <div class="em">
                        <em class="red"><span><i class="fa-solid fa-star"></i></span> 4,7</em>
                        <em>91% <span>рекомендують</span></em>
                        <em>30000 <span>покупок</span></em>
                    </div>
                </div>
            </div>
            <div class="price">
                <h2>від <span>164</span> грн</h2>
                <span class="sale_price">449 грн</span>
                <div class="container_buyer">
                    <p class="black">В кошик</p>
                    <p>Придбати зараз</p>
                </div>
            </div>
        </div>
    </div>
    <div class="all_container">
        <div class="box_1">
            <div class="all_img_product">
                <div class="mini_img">
                    <div class="arrow_gallery gallery_top" onclick="scroll_button(0)">
                        <span><i class="fa-solid fa-chevron-up"></i></span>
                    </div>
                    <div class="list_wrapper">
                        <div class="list_img">
                            @foreach($gallery as $item)
                                <div class="img">
                                    <img src="{{$item->img}}" alt="">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="arrow_gallery gallery_down">
                        <span><i class="fa-solid fa-chevron-down"></i></span>
                    </div>
                </div>
                <div class="title_img">
                    <img src="{{$product->img}}" alt="">
                </div>
            </div>
            <div class="reviews">
                <div class="title">
                    <h3>Відгуки<span>1500</span></h3>
                    <div class="marks">
                        <ul>
                            <li class="black">Всі</li>
                            <li><span class="margin"><i class="fa-solid fa-image"></i></span>198</li>
                            <li><span class="margin"><i class="fa-regular fa-message"></i></span>298</li>
                            <li><span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span> 1000+
                            </li>

                            <li><span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span> 141
                            </li>
                            <li><span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span> 66
                            </li>
                            <li><span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span> 21
                            </li>
                            <li>
                                <span><i class="fa-solid fa-star"></i></span> 61
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="comments">
                    <div class="cardList">
                        @foreach($comments as $item)
                            <div class="card">
                                <div class="info_user">
                                    <div class="img_profile">
                                        <img
                                            src="{{$item->avatar}}"
                                            alt="">
                                        <div class="text">
                                            <div class="box3">
                                                <h4 class="name">{{$item->name}}</h4>
                                                <p class="data">{{$item->data}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box4">
                                        <div class="stars">
                                            @for($i=0; $i<$item->marks; $i++)
                                                <span><i class="fa-solid fa-star"></i></span>
                                            @endfor
                                        </div>
                                        <p class="goods">Redmi Note 8 | Фіолетовий</p>
                                    </div>
                                </div>
                                <p class="response">{{$item->coment}}</p>
                                <div class="img_products">
                                    @foreach($img_comments as $item_img )
                                        @if($item_img->comment_id == $item->id)
                                            <div class="img">
                                                <img
                                                    src="{{asset($item_img->img)}}"
                                                    alt="">
                                            </div>
                                        @endif
                                    @endforeach

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
        <div class="box_2">
            <div class="title">
                <div class="info_product">
                    <h1>{{$product->name}}</h1>
                    <div class="em">
                        <em class="red"><span><i class="fa-solid fa-star"></i></span>{{$item->star}}</em>
                        <em><span>91</span>% рекомендують</em>
                        <em>більше<span> 3000 </span>покупок</em>
                    </div>
                </div>
                <div class="container_icon">
                    <span><i class="fa-regular fa-heart"></i></span>
                    <span><i class="fa-solid fa-link"></i></span>
                </div>
            </div>
            <div class="price">
                <div class="container_price">
                    <h2>від {{round($product->price-$product->price/$product->sale)}} грн <span class="sale_price"> {{$product->price}}грн</span>
                    </h2>
                    @if($count_sale)
                        <p><span class="sale_day">{{$count_sale}}</span> Sale 🔥</p>
                    @endif

                </div>
                <div class="container_buyer">
                    <p class="black">В кошик</p>
                    <p>Придбати зараз</p>
                </div>
            </div>
            <div class="delivery">
                <p><span><i class="fa-solid fa-calendar-days"></i></span>Доставка від 16 днів</p>
                <div class="delivery_sale">
                    <span><i class="fa-solid fa-percent"></i></span>
                    <div class="text">
                        <p>Знижка від 30%</p>
                        <em>Ви заощадите від 96 ₴</em>
                    </div>
                </div>
            </div>
            @if(count($color))
                <div class="color_product">
                    <h3>Колір</h3>
                    <ul>
                        @foreach($color as $item)
                            <li>
                                <div class="img img_border">
                                    <img src="{{$item->color}}"
                                         alt="">
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(count($fonts))
                <div class="size_product">
                    <h3>Розмір<span></span></h3>
                    <ul>
                        @foreach( $fonts as $item)
                            <li>{{$item->font}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="shop">
                <div class="shop_info">
                    <div class="img">
                        <img src="https://avatars.joomcdn.net/b7423bf07ad556d1a9561acad8d28b955e2d199b_original.jpeg"
                             alt="">
                    </div>
                    <div class="text text_shop">
                        <h4>honglilai</h4>
                        <div class="text">
                            <em><span class="red_star"><i class="fa-solid fa-star"></i></span>4,6 / 9 000+</em>
                            <em>150+ товарів</em>
                            <em><span><i class="fa-solid fa-circle-info"></i></span>Інформація про продавця</em>
                        </div>
                    </div>
                </div>
                <div class="arrow_product">
                    <span><i class="fa-solid fa-chevron-right"></i></span>
                </div>
            </div>
            <div class="info_shop">
                <h3>Опис</h3>
                <ul>
                    <li>Тип : Бампер</li>
                    <li>Дизайн : Рівнина..</li>
                </ul>
                <div class="all_description">
                    <em class="red_em">Подивитись повний опис</em>
                    <em class="underline">Знайшли неточність?</em>
                </div>
            </div>
            <div class="guarantee">
                <h3>Гарантія</h3>
                <p><span><i class="fa-solid fa-box"></i></span>Повернемо гроші, якщо товар не доставлять протягом 105
                    днів після оплати. У вас є 2 тижні для подачі заявки на повернення — до 119-го дня.</p>
                <p><span><i class="fa-solid fa-shield"></i></span>Товар не відповідає опису? Напишіть нам протягом 30
                    днів після отримання!</p>
                <p><span><i class="fa-brands fa-cc-discover"></i></span>У разі скасування гроші надійдуть на рахунок
                    протягом 14 днів.</p>
            </div>
        </div>
    </div>
    <div class="other_product">
        <h3>Схожі товари</h3>
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

    <div class="all_info_product">
        <h4>Для корпусу iPhone 3D Astronaut складаний чохол-тримач стійки для iPhone 13 12 11 Pro Max XS Max 7 8 Plus
            Покриття об'єктива захист кришки — купити
            товар онлайн з безкоштовною доставкою по всьому світу!</h4>
        <ul>
            <li>- Доступні кольори: Чорний, Рожевий, Синій, Зелений, Фіолетовий, Білий</li>
            <li>- Якісні матеріали:</li>
            <li>- Якісні фото та реальні відгуки покупців.</li>
            <li>- Великий розмірний ряд: Samsung Galaxy S21 Plus, Xiaomi Note 10, iPhone SE 2020, Huawei P Smart 2020,
                Huawei P30, Redmi Note 10S, Redmi Note 8T, Samsung Galaxy A51 4G, iPhone 13 PRO MAX, iPhone 7 Plus / 8
                Plus, Huawei P40 Lite 4G, Samsung Note 10 Lite, Samsung Galaxy S20 Plus, Samsung Galaxy S21 Ultra,
                Xiaomi Note 10 Lite, Huawei P Smart 2019, Huawei P30 PRO, Samsung Galaxy A52, Samsung Note 10 Plus 5G,
                Xiaomi Mi 9, iPhone 6 / 6S, iPhone 7 / 8, Huawei P20, Redmi Note 10 PRO, Samsung Galaxy S21, Xiaomi 11
                PRO, iPhone 11, iPhone 13, Huawei P40, Huawei P40 PRO, Redmi Note 8, Redmi Note 8 PRO, Samsung Galaxy
                A51 5G, iPhone XR, Huawei Mate 30 PRO, Redmi Note 9, Samsung Galaxy A32 5G, iPhone 13 Mini, iPhone 13
                PRO, Samsung S10 Lite 2020, Xiaomi 11 Ultra, Redmi 9A, Redmi Note 9 PRO, Samsung Galaxy A12, Samsung
                Galaxy A32 4G, Samsung Galaxy A71 4G, Huawei Mate 30, Huawei P20 Lite, Samsung Galaxy A50, Samsung Note
                20 Ultra, Samsung Galaxy A22 5G, Samsung Galaxy A31, Samsung Galaxy A72, Samsung Galaxy Note 10 5G,
                Xiaomi Mi CC9, Huawei P40 Lite 5G, Redmi 9C, Xiaomi 11, iPhone 11 PRO, iPhone 11 PRO MAX, Huawei Mate 30
                Lite, Samsung Galaxy A22 4G, Xiaomi 10, Xiaomi 10T PRO, Redmi 9, Samsung Note 10 Plus, Xiaomi 11 Lite,
                iPhone X / XS, Xiaomi 10 Lite, iPhone 12, iPhone 12 PRO, Huawei P30 Lite, Samsung Galaxy Note 20,
                Samsung Galaxy S10 Plus, Samsung Galaxy S20 FE, Samsung Galaxy S20 Ultra, iPhone 12 PRO MAX, Samsung
                Galaxy Note 10, iPhone 12 Mini, Huawei P20 PRO, Redmi 8, Redmi Note 10 PRO MAX, Redmi Note 9S, Samsung
                Galaxy S10, Xiaomi 10T Lite, iPhone 6 Plus / 6S Plus, Huawei P Smart 2021, Redmi Note 10 4G, Redmi Note
                9 PRO MAX, Samsung Galaxy S20, Samsung Galaxy S21 FE, Redmi 8A, iPhone XS MAX
            </li>
        </ul>
    </div>
@stop
@section("script")
    <script src="{{asset("js/img_product.js")}}"></script>
@stop





