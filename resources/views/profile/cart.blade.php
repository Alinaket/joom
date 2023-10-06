@extends("layouts.app_head")
@section("content")
    <style>
        h3, p, span{
            font-family: "Segoe UI Semibold";
            color: #1a202c;
        }
        h3{
            font-size: 30px;
        }
        img{
            width: 100px;
            height: auto;
        }
        li{
            display: grid;
            grid-template-columns: auto 1fr;
        }
    </style>
<h3>Мій кошик</h3>
    <div class="container">
        <div class="my_product">
            <div class="discount">
            <div class="icon"><i class="fa-solid fa-bolt"></i></div>
                <div class="text">
                    <p>Ще <span>2</span> товари до отримання знижки</p>
                    <div class="box_hr">
                        <div class="hr hr_active"></div>
                        <div class="hr"></div>
                        <div class="hr"></div>
                    </div>
                </div>
                <div class="arrow"><i class="fa-solid fa-chevron-right"></i></div>
            </div>
            <div class="list">
                <div class="check_box">
                    <input type="checkbox">
                </div>
                <div class="delete">
                    <p><span class="icon"><i class="fa-solid fa-trash-can"></i></span>Видалити вибрані(<span>1</span>)</p>
                </div>
            </div>
            <div class="cardList">
                @foreach( $cart as $item)
                <div class="card">
                    <div class="img">
                        <img src="{{$item->img}}" alt="">
                    </div>
                    <div class="text">
                        <div class="info">
                            <p>{{$item->name}}</p>
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
                    <div class="prise">
                        <p><span>{{$item->prise}}</span></p>
                        <div class="sale">
                            <p><span><i class="fa-solid fa-bolt"></i></span> 267 ₴ <span>з кошиком від 3 товарів</span></p>
                        </div>
                        <em>Sale 🔥</em>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
        <div class="buy">
            <div class="title">
                <h3>Ваш кошик</h3>
            </div>
            <forma>
                <input type="text" placeholder="Промокод на знижку">
                <p class="button">Застосувати</p>
            </forma>
            <div class="button">
                <button>Придбати за <span>306</span>грн</button>
            </div>
            <div class="conditions">
                <p>Продовжуючи, ви погоджуєтеся з <a href="#">Умовами використання</a> та <a href="#">Політикою конфіденційності</a></p>
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
            <em>Купувати на сайті Joom безпечно <span><i class="fa-solid fa-lock"></i></span></em>
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


@stop
