@extends("layouts.app_head")
@section("content")
    <link rel="stylesheet" href="{{asset("css/cart.css")}}">
    <div class="cart">
        <span class="em">Головна</span>
        <h3>Мій кошик</h3>
        <div class="container">
            <div class="my_product">
                <div class="discount">
                    <div class="icon">
                        <span><i class="fa-solid fa-bolt"></i></span>
                    </div>
                    <div class="text">
                        <div class="box_hr">
                            <p>Ще <span>2</span> товари до отримання знижки</p>
                            <div class="dont_know">
                                <div class="hr hr_active"></div>
                                <div class="hr"></div>
                                <div class="hr"></div>
                            </div>
                        </div>
                        <div class="arrow">
                            <span><i class="fa-solid fa-chevron-right"></i></span>
                        </div>
                    </div>

                </div>
                <div class="list">
                    <div class="check_box">
                        <input type="checkbox">
                        <em>Вибрати всі</em>
                    </div>
                    <div class="delete">
                        <p><span class="icon"><i class="fa-solid fa-trash-can"></i></span>Видалити
                            вибрані(<span>1</span>)</p>
                    </div>
                </div>
                <div class="cardList">
                    @foreach( $cart as $item)
                        <div class="card">
                            <div class="check_box">
                                <input type="checkbox">
                            </div>
                            <div class="img">
                                <img src="{{$item->img}}" alt="">
                            </div>
                            <div class="text">

                                <div class="info">
                                    <a href="{{route("profile.product_joom", ["product_id"=>$item->id])}}">{{$item->name}}</a>
                                </div>
                                <div class="size">
                                    <p>Білий, S</p>
                                </div>
                                <div class="delivery">
                                    <p>Доставка: 15‑25 днів</p>
                                    <div class="quantity">
                                        <span class="minus">-</span>
                                        <span class="number">1</span>
                                        <span class="plus">+</span>
                                        <div class="icon">
                                            <span><i class="fa-solid fa-trash-can"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="price">
                                <h4><span>{{$item->price}} грн</span></h4>
                                <div class="sale">
                                    <p><span><i class="fa-solid fa-bolt"></i></span> 267 ₴ <em>з кошиком від 3
                                            товарів</em></p>
                                </div>
                                {{--                                <em>Sale 🔥</em>--}}
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
            <div class="buy">
                <div class="container_buy">
                    <div class="title">
                        <h4>Ваш кошик</h4>
                    </div>
                    <forma>
                        <div class="input">
                            <input type="text" placeholder="Промокод на знижку">
                            <p class="button">Застосувати</p>
                        </div>

                    </forma>
                    <div class="button">
                        <button>Придбати за <span>306</span>грн</button>
                    </div>
                    <div class="conditions">
                        <p>Продовжуючи, ви погоджуєтеся з <a href="#">Умовами використання</a> та <a href="#">Політикою
                                конфіденційності</a></p>
                    </div>
                </div>
                <div class="payment">
                    <h4>Ми приймаємо</h4>
                    <div class="img">
                        <img src="https://resources.joomcdn.net/payments/brands/paypal_v2.png" alt="">
                        <img src="https://resources.joomcdn.net/payments/brands/visa_v3.png" alt="">
                        <img src="https://resources.joomcdn.net/payments/brands/mastercard_v3.png" alt="">
                        <img src="https://resources.joomcdn.net/payments/brands/maestro_v3.png" alt="">
                        <img src="https://resources.joomcdn.net/payments/brands/applepay.png" alt="">
                        <img src="https://resources.joomcdn.net/payments/brands/googlepay.png" alt="">
                    </div>
                    <p>Купувати на сайті Joom безпечно <span><i class="fa-solid fa-lock"></i></span></p>
                </div>
                <div class="visa">
                    <h4>Visa Secure</h4>
                    <div class="payment_card">
                        <div class="img">
                            <img src="https://web-client.joomcdn.net/web-client/98b13ee8b2e75270df8e.svg" alt="">
                        </div>
                        <p>Payment Card Security Standard</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
