@extends("layouts.app_head")
@section("content")
    <style>
        .link_list a:after{
            content: " /";
        }
        .link_list a:last-child:after{
            content: " ";
        }
    </style>
<div class="link_list">
    <a href="">Головна</a>
    <a href="">Каталог</a>
    @foreach($category_link as $item)

        <a href="">{{$item->name}}</a>
    @endforeach
</div>
<div class="box_1">
    <div class="all_img">
        <div class="list_img">
            <div class="img">
                <img src="https://img.joomcdn.net/f878344af4957e897ffd1f4ea3899449d800b904_original.jpeg" alt="">
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
                <img src="	https://img.joomcdn.net/39e717afa464f6a39785334e576f6dc6e35716b6_100_100.jpeg" alt="">
            </div>
        </div>
        <div class="title_img">
            <img src="https://img.joomcdn.net/f878344af4957e897ffd1f4ea3899449d800b904_200_200.jpeg" alt="">
        </div>
    </div>
    <div class="reviews">
        <div class="title">
            <h3>Відгуки<span>1500</span></h3>
            <div class="marks">
                <ul>
                    <li class="black">Всі</li>
                    <li><span><i class="fa-solid fa-image"></i></span>198</li>
                    <li><span><i class="fa-regular fa-message"></i></span>298</li>
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
                <div class="card">
                    <div class="img_profil">
                        <img src="https://avatars.joomcdn.net/0b18c3bdf2b842463f354dcb6c5a80775025fc08_100_100.jpeg"
                             alt="">
                    </div>
                    <div class="text">
                        <div class="box3">
                            <h4 class="name">Наталка Т.</h4>
                            <p class="data">10 квітня</p>
                        </div>
                        <div class="box4">
                                <span class="stars">
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span></span>
                            <p class="goods">Redmi Note 8 | Фіолетовий</p>
                        </div>
                    </div>
                    <p class="response">Дуже прикольний чохол, гарної якості. Довго йшов. Поки дійшов телефон
                        продала🙈</p>
                    <div class="img_products">
                        <div class="img">
                            <img src="https://ugc.joomcdn.net/5cb61791b5aec6989e71fbf39a88824110c9713b_75_100.jpeg"
                                 alt="">
                        </div>
                        <div class="img">
                            <img src="https://ugc.joomcdn.net/0560923deb5be1515a07c4c574483ecf868fff4e_75_100.jpeg"
                                 alt="">
                        </div>
                        <div class="img">
                            <img src="https://ugc.joomcdn.net/a3517b164c0ebe84fa5aceb2ba68c426098da61a_75_100.jpeg"
                                 alt="">
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="img_profil">
                        <img src="https://avatars.joomcdn.net/0b18c3bdf2b842463f354dcb6c5a80775025fc08_100_100.jpeg"
                             alt="">
                    </div>
                    <div class="text">
                        <div class="box3">
                            <h4 class="name">Наталка Т.</h4>
                            <p class="data">10 квітня</p>
                        </div>
                        <div class="box4">
                                <span class="stars">
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span></span>
                            <p class="goods">Redmi Note 8 | Фіолетовий</p>
                        </div>
                    </div>
                    <p class="response">Дуже прикольний чохол, гарної якості. Довго йшов. Поки дійшов телефон
                        продала🙈</p>
                    <div class="img_products">
                        <div class="img">
                            <img src="https://ugc.joomcdn.net/5cb61791b5aec6989e71fbf39a88824110c9713b_75_100.jpeg"
                                 alt="">
                        </div>
                        <div class="img">
                            <img src="https://ugc.joomcdn.net/0560923deb5be1515a07c4c574483ecf868fff4e_75_100.jpeg"
                                 alt="">
                        </div>
                        <div class="img">
                            <img src="https://ugc.joomcdn.net/a3517b164c0ebe84fa5aceb2ba68c426098da61a_75_100.jpeg"
                                 alt="">
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="img_profil">
                        <img src="https://avatars.joomcdn.net/0b18c3bdf2b842463f354dcb6c5a80775025fc08_100_100.jpeg"
                             alt="">
                    </div>
                    <div class="text">
                        <div class="box3">
                            <h4 class="name">Наталка Т.</h4>
                            <p class="data">10 квітня</p>
                        </div>
                        <div class="box4">
                                <span class="stars">
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span></span>
                            <p class="goods">Redmi Note 8 | Фіолетовий</p>
                        </div>
                    </div>
                    <p class="response">Дуже прикольний чохол, гарної якості. Довго йшов. Поки дійшов телефон
                        продала🙈</p>
                    <div class="img_products">
                        <div class="img">
                            <img src="https://ugc.joomcdn.net/5cb61791b5aec6989e71fbf39a88824110c9713b_75_100.jpeg"
                                 alt="">
                        </div>
                        <div class="img">
                            <img src="https://ugc.joomcdn.net/0560923deb5be1515a07c4c574483ecf868fff4e_75_100.jpeg"
                                 alt="">
                        </div>
                        <div class="img">
                            <img src="https://ugc.joomcdn.net/a3517b164c0ebe84fa5aceb2ba68c426098da61a_75_100.jpeg"
                                 alt="">
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="img_profil">
                        <img src="https://avatars.joomcdn.net/0b18c3bdf2b842463f354dcb6c5a80775025fc08_100_100.jpeg"
                             alt="">
                    </div>
                    <div class="text">
                        <div class="box3">
                            <h4 class="name">Наталка Т.</h4>
                            <p class="data">10 квітня</p>
                        </div>
                        <div class="box4">
                                <span class="stars">
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span></span>
                            <p class="goods">Redmi Note 8 | Фіолетовий</p>
                        </div>
                    </div>
                    <p class="response">Дуже прикольний чохол, гарної якості. Довго йшов. Поки дійшов телефон
                        продала🙈</p>
                    <div class="img_products">
                        <div class="img">
                            <img src="https://ugc.joomcdn.net/5cb61791b5aec6989e71fbf39a88824110c9713b_75_100.jpeg"
                                 alt="">
                        </div>
                        <div class="img">
                            <img src="https://ugc.joomcdn.net/0560923deb5be1515a07c4c574483ecf868fff4e_75_100.jpeg"
                                 alt="">
                        </div>
                        <div class="img">
                            <img src="https://ugc.joomcdn.net/a3517b164c0ebe84fa5aceb2ba68c426098da61a_75_100.jpeg"
                                 alt="">
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="img_profil">
                        <img src="https://avatars.joomcdn.net/0b18c3bdf2b842463f354dcb6c5a80775025fc08_100_100.jpeg"
                             alt="">
                    </div>
                    <div class="text">
                        <div class="box3">
                            <h4 class="name">Наталка Т.</h4>
                            <p class="data">10 квітня</p>
                        </div>
                        <div class="box4">
                                <span class="stars">
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span></span>
                            <p class="goods">Redmi Note 8 | Фіолетовий</p>
                        </div>
                    </div>
                    <p class="response">Дуже прикольний чохол, гарної якості. Довго йшов. Поки дійшов телефон
                        продала🙈</p>
                    <div class="img_products">
                        <div class="img">
                            <img src="https://ugc.joomcdn.net/5cb61791b5aec6989e71fbf39a88824110c9713b_75_100.jpeg"
                                 alt="">
                        </div>
                        <div class="img">
                            <img src="https://ugc.joomcdn.net/0560923deb5be1515a07c4c574483ecf868fff4e_75_100.jpeg"
                                 alt="">
                        </div>
                        <div class="img">
                            <img src="https://ugc.joomcdn.net/a3517b164c0ebe84fa5aceb2ba68c426098da61a_75_100.jpeg"
                                 alt="">
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="img_profil">
                        <img src="https://avatars.joomcdn.net/0b18c3bdf2b842463f354dcb6c5a80775025fc08_100_100.jpeg"
                             alt="">
                    </div>
                    <div class="text">
                        <div class="box3">
                            <h4 class="name">Наталка Т.</h4>
                            <p class="data">10 квітня</p>
                        </div>
                        <div class="box4">
                                <span class="stars">
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span></span>
                            <p class="goods">Redmi Note 8 | Фіолетовий</p>
                        </div>
                    </div>
                    <p class="response">Дуже прикольний чохол, гарної якості. Довго йшов. Поки дійшов телефон
                        продала🙈</p>
                    <div class="img_products">
                        <div class="img">
                            <img src="https://ugc.joomcdn.net/5cb61791b5aec6989e71fbf39a88824110c9713b_75_100.jpeg"
                                 alt="">
                        </div>
                        <div class="img">
                            <img src="https://ugc.joomcdn.net/0560923deb5be1515a07c4c574483ecf868fff4e_75_100.jpeg"
                                 alt="">
                        </div>
                        <div class="img">
                            <img src="https://ugc.joomcdn.net/a3517b164c0ebe84fa5aceb2ba68c426098da61a_75_100.jpeg"
                                 alt="">
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="img_profil">
                        <img src="https://avatars.joomcdn.net/0b18c3bdf2b842463f354dcb6c5a80775025fc08_100_100.jpeg"
                             alt="">
                    </div>
                    <div class="text">
                        <div class="box3">
                            <h4 class="name">Наталка Т.</h4>
                            <p class="data">10 квітня</p>
                        </div>
                        <div class="box4">
                                <span class="stars">
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span></span>
                            <p class="goods">Redmi Note 8 | Фіолетовий</p>
                        </div>
                    </div>
                    <p class="response">Дуже прикольний чохол, гарної якості. Довго йшов. Поки дійшов телефон
                        продала🙈</p>
                    <div class="img_products">
                        <div class="img">
                            <img src="https://ugc.joomcdn.net/5cb61791b5aec6989e71fbf39a88824110c9713b_75_100.jpeg"
                                 alt="">
                        </div>
                        <div class="img">
                            <img src="https://ugc.joomcdn.net/0560923deb5be1515a07c4c574483ecf868fff4e_75_100.jpeg"
                                 alt="">
                        </div>
                        <div class="img">
                            <img src="https://ugc.joomcdn.net/a3517b164c0ebe84fa5aceb2ba68c426098da61a_75_100.jpeg"
                                 alt="">
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="img_profil">
                        <img src="https://avatars.joomcdn.net/0b18c3bdf2b842463f354dcb6c5a80775025fc08_100_100.jpeg"
                             alt="">
                    </div>
                    <div class="text">
                        <div class="box3">
                            <h4 class="name">Наталка Т.</h4>
                            <p class="data">10 квітня</p>
                        </div>
                        <div class="box4">
                                <span class="stars">
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span></span>
                            <p class="goods">Redmi Note 8 | Фіолетовий</p>
                        </div>
                    </div>
                    <p class="response">Дуже прикольний чохол, гарної якості. Довго йшов. Поки дійшов телефон
                        продала🙈</p>
                    <div class="img_products">
                        <div class="img">
                            <img src="https://ugc.joomcdn.net/5cb61791b5aec6989e71fbf39a88824110c9713b_75_100.jpeg"
                                 alt="">
                        </div>
                        <div class="img">
                            <img src="https://ugc.joomcdn.net/0560923deb5be1515a07c4c574483ecf868fff4e_75_100.jpeg"
                                 alt="">
                        </div>
                        <div class="img">
                            <img src="https://ugc.joomcdn.net/a3517b164c0ebe84fa5aceb2ba68c426098da61a_75_100.jpeg"
                                 alt="">
                        </div>

                    </div>
                </div>
                <div class="card">
                    <div class="img_profil">
                        <img src="https://avatars.joomcdn.net/0b18c3bdf2b842463f354dcb6c5a80775025fc08_100_100.jpeg"
                             alt="">
                    </div>
                    <div class="text">
                        <div class="box3">
                            <h4 class="name">Наталка Т.</h4>
                            <p class="data">10 квітня</p>
                        </div>
                        <div class="box4">
                                <span class="stars">
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span>
                                    <span><i class="fa-solid fa-star"></i></span></span>
                            <p class="goods">Redmi Note 8 | Фіолетовий</p>
                        </div>
                    </div>
                    <p class="response">Дуже прикольний чохол, гарної якості. Довго йшов. Поки дійшов телефон
                        продала🙈</p>
                    <div class="img_products">
                        <div class="img">
                            <img src="https://ugc.joomcdn.net/5cb61791b5aec6989e71fbf39a88824110c9713b_75_100.jpeg"
                                 alt="">
                        </div>
                        <div class="img">
                            <img src="https://ugc.joomcdn.net/0560923deb5be1515a07c4c574483ecf868fff4e_75_100.jpeg"
                                 alt="">
                        </div>
                        <div class="img">
                            <img src="https://ugc.joomcdn.net/a3517b164c0ebe84fa5aceb2ba68c426098da61a_75_100.jpeg"
                                 alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="box_2">
    <div class="title">
        <h1>Для корпусу iPhone 3D Astronaut складаний чохол-тримач стійки для iPhone 13 12 11 Pro Max XS Max 7 8
            Plus
            Покриття об'єктива захист кришки</h1>
        <div class="container">
                <span class="stars">
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                    <span><i class="fa-solid fa-star"></i></span>
                <em>4,7</em>
                </span>
            <p>1500+ відгуків</p>
            <p><span><i class="fa-regular fa-heart"></i></span>У вибране</p>
            <p><span><i class="fa-solid fa-link"></i></span>Поширити</p>
        </div>
    </div>
</div>

</div>
@stop
