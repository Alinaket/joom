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

    <div class="all_container">
        <div class="box_1">
            <div class="all_img_product">
                <div class="list_img">
                    <div class="img img_border">
                        <img src="https://img.joomcdn.net/f878344af4957e897ffd1f4ea3899449d800b904_original.jpeg"
                             alt="">
                    </div>
                    <div class="img">
                        <img src="https://img.joomcdn.net/9718ca91c6e258d2890e1e645c9a763572220040_100_100.jpeg" alt="">
                    </div>
                    <div class="img">
                        <img src="https://img.joomcdn.net/e7d8d3e6765e3d9e1905d16daee2d53e6fcd05da_100_100.jpeg" alt="">
                    </div>
                    <div class="img">
                        <img src="	https://img.joomcdn.net/0e78713201fa14b87f8426a876c0e3ce97db6c57_original.jpeg"
                             alt="">
                    </div>
                    <div class="img">
                        <img src="	https://img.joomcdn.net/332ac0c26f43d61599bd49eb15132788dc7c4965_original.jpeg"
                             alt="">
                    </div>
                    <div class="img">
                        <img src="	https://img.joomcdn.net/39e717afa464f6a39785334e576f6dc6e35716b6_100_100.jpeg"
                             alt="">
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
                    <h2>від {{round($product->price-$product->price/$product->sale)}} грн <span class="sale_price"> {{$product->price}}грн</span></h2>
                    @if(true)
                        <p><span class="sale_day"> дні</span> Sale 🔥</p>
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
            <div class="color_product">
                <h3>Колір</h3>
                <ul>
                    <li><img
                            src="https://celes.club/uploads/posts/2022-11/1667276263_1-celes-club-p-temno-serii-fon-oboi-instagram-1.jpg"
                            alt=""></li>
                    <li><img
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSy92k8i8BqjpzusUTBH-yGILktHibRysr3BXa5bScX_WNAQgQljum8GIrlpL5HOuO3v1g&usqp=CAU"
                            alt=""></li>
                    <li><img src="https://upload.wikimedia.org/wikipedia/commons/e/e4/Color-blue.JPG" alt=""></li>
                    <li><img
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/04/Flag_of_Libya_%281977%E2%80%932011%29.svg/300px-Flag_of_Libya_%281977%E2%80%932011%29.svg.png"
                            alt=""></li>
                    <li><img
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Purple_website.svg/1200px-Purple_website.svg.png"
                            alt=""></li>
                    <li><img
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/70/Solid_white.svg/2048px-Solid_white.svg.png"
                            alt=""></li>
                </ul>
            </div>
            <div class="size_product">
                <h3>Розмір<span></span></h3>
                <ul>
                    @foreach($item as $fonts)
                        <li>{{$item->font}}</li>
                    @endforeach

{{--                    <li>Huawei Mate 30 Lite</li>--}}
{{--                    <li>Huawei Mate 30 PRO</li>--}}
{{--                    <li>Huawei P20</li>--}}
{{--                    <li>Huawei P20 Lite</li>--}}
{{--                    <li>Huawei P20 PRO</li>--}}
{{--                    <li>Huawei P30</li>--}}
{{--                    <li>Huawei P30 Lite</li>--}}
{{--                    <li>Huawei P30 PRO</li>--}}
{{--                    <li>Huawei P40</li>--}}
{{--                    <li>Huawei P40 Lite 4G</li>--}}
{{--                    <li>Huawei P40 Lite 5G</li>--}}
{{--                    <li>Huawei P40 PRO</li>--}}
{{--                    <li>Huawei P Smart 2019</li>--}}
{{--                    <li>Huawei P Smart 2020</li>--}}
{{--                    <li>Huawei P Smart 2021</li>--}}
{{--                    <li>iPhone 6 / 6S</li>--}}
{{--                    <li>iPhone 6 Plus / 6S Plus</li>--}}
{{--                    <li>iPhone SE 2020</li>--}}
{{--                    <li>iPhone 7 / 8</li>--}}
{{--                    <li>iPhone 7 Plus / 8 Plus</li>--}}
{{--                    <li>iPhone X / XS</li>--}}
{{--                    <li>iPhone XR</li>--}}
{{--                    <li>iPhone XS MAX</li>--}}
{{--                    <li>iPhone 11</li>--}}
{{--                    <li>iPhone 11 PRO</li>--}}
{{--                    <li>iPhone 11 PRO MAX</li>--}}
{{--                    <li>iPhone 12</li>--}}
{{--                    <li>iPhone 12 Mini</li>--}}
{{--                    <li>iPhone 12 PRO</li>--}}
                </ul>
            </div>
            <div class="shop">
                <div class="shop_info">
                    <div class="img">
                        <img src="https://avatars.joomcdn.net/b7423bf07ad556d1a9561acad8d28b955e2d199b_original.jpeg"
                             alt="">
                    </div>
                    <div class="text">
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
                    <em>Знайшли неточність?</em>
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
                <div class="card">
                    <div class="img">
                        <img src="{{$item->img}}" alt="">
                                                <div class="sale_time">
                                                    <p>Sale 🔥 <span>24:44:17</span></p>
                                                </div>
                    </div>
                    <div class="text">
                        <div class="sale">
                            <p>-<span>{{$item->sale}}</span>%</p>
                        </div>
                        <div class="price">
                            <p><span>{{$item->price}}</span>грн</p>
                            <em><span>{{$item->sale_price}}</span>грн</em>
                        </div>
                        <em>Хід продажів</em>
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
                </div>
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





