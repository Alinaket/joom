<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/recet.css")}}">
    <link rel="stylesheet" href="{{asset("css/joom_heder.css")}}">
    <title>Document</title>
</head>
<body>
<div class="nav_container">
    <div class="country">
        <div class="language">
            <img src="https://cdn.webshopapp.com/shops/94414/files/52440074/flag-of-ukraine.jpg" alt="">
            <em>Українська<span><i class="fa-solid fa-caret-down"></i></span></em>
        </div>
        <div class="currency">
            <em>UAH<span><i class="fa-solid fa-caret-down"></i></span></em>
        </div>
    </div>
    <div class="help">
        <ul>
            <li><a href="#">Підтримка</a></li>
            <li><a href="#">Доставка</a></li>
            <li><a href="#">Гарантія</a></li>
            <li class="coupon">У вас є купон!</li>
        </ul>
    </div>
</div>
<div class="header">
    <div class="logo">
        <a href="#"><img src="https://logovectordl.com/wp-content/uploads/2019/11/joom-logo-vector.png" alt=""></a>
    </div>
    <div class="box_input">
        <div class="input">
            <form action="">
                <label for="">
                    <input type="text" placeholder="Пошук">
                </label>
            </form>
        </div>
        <div class="button_input">
            <button>Знайти</button>
        </div>
    </div>
    <div class="users">
        <ul>
            <li><a href="#"><span><i class="fa-solid fa-bell"></i></span>Сповіщення</a> <span class="message">1</span>
            </li>
            <li><a href="#"><span><i class="fa-regular fa-user"></i></span>Увійти</a></li>
            <li><a href="#"><span><i class="fa-solid fa-box-archive"></i></span>Мої замовлення</a></li>
            <li><a href="#"><span><i class="fa-solid fa-cart-shopping"></i></span>Кошик</a></li>
        </ul>
    </div>
</div>
<div class="categories">
    <ul>
        <li class="category"><span><i class="fa-solid fa-bars"></i></span> Всі категорії</li>
        {{--        <li class=""><span><i class="fa-regular fa-circle"></i></span>Крутити колесо!</li>--}}
        <li class="reviews_users"><span><i class="fa-regular fa-window-restore"></i></span>Огляди від користувачів</li>
        <li>Жіноча мода</li>
        <li>Електроніка</li>
        <li>Товари для дому</li>
        <li>Краса</li>
        <li>Здоров'я</li>
        <li>Чоловіча мода</li>
        <li>Автомобілі та мотоцикли</li>
        <li>Спорт та відпочинок</li>
        <li>Будівництво та ремонт</li>
        <li>Взуття</li>
        <li>Прикраси та біжутерія</li>
        <li>Годинники</li>
        <li>Дитячі товари</li>
        <li>Сумки та валізи</li>
        <li>Хобі та творчість</li>
        <li>Xiaomi</li>
    </ul>
</div>
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
                    <img src="https://upload.joomcdn.net/7646264cef353d157fe3f93ea8606370e1749cdf_original.png" alt="">
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
            <div class="card">
                <div class="img">
                    <img src="https://img.joomcdn.net/b6f375215a59629e6c3b9ac365478494e1216586_200_200.jpeg" alt="">
                    <div class="sale_time">
                        <p>Sale 🔥 <span>24:44:17</span></p>
                    </div>
                </div>
                <div class="text">
                    <div class="sale">
                        <p>-50%</p>
                    </div>
                    <div class="price">
                        <p><span>1077</span>грн</p>
                        <em><span>2077</span>грн</em>
                    </div>
                    {{--                    <em>Хід продажів</em>--}}
                    <div class="marks">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <div class="discript">
                        <p><span>Суцільний колір Non-slip Диван Кришка Потовщення м'який</span>...</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="https://img.joomcdn.net/b6f375215a59629e6c3b9ac365478494e1216586_200_200.jpeg" alt="">
                    <div class="sale_time">
                        <p>Sale 🔥 <span>24:44:17</span></p>
                    </div>
                </div>
                <div class="text">
                    <div class="sale">
                        <p>-50%</p>
                    </div>
                    <div class="price">
                        <p><span>1077</span>грн</p>
                        <em><span>2077</span>грн</em>
                    </div>
                    {{--                    <em>Хід продажів</em>--}}
                    <div class="marks">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <div class="discript">
                        <p><span>Суцільний колір Non-slip Диван Кришка Потовщення м'який</span>...</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="https://img.joomcdn.net/b6f375215a59629e6c3b9ac365478494e1216586_200_200.jpeg" alt="">
                    <div class="sale_time">
                        <p>Sale 🔥 <span>24:44:17</span></p>
                    </div>
                </div>
                <div class="text">
                    <div class="sale">
                        <p>-50%</p>
                    </div>
                    <div class="price">
                        <p><span>1077</span>грн</p>
                        <em><span>2077</span>грн</em>
                    </div>
                    {{--                    <em>Хід продажів</em>--}}
                    <div class="marks">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <div class="discript">
                        <p><span>Суцільний колір Non-slip Диван Кришка Потовщення м'який</span>...</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="https://img.joomcdn.net/b6f375215a59629e6c3b9ac365478494e1216586_200_200.jpeg" alt="">
                    <div class="sale_time">
                        <p>Sale 🔥 <span>24:44:17</span></p>
                    </div>
                </div>
                <div class="text">
                    <div class="sale">
                        <p>-50%</p>
                    </div>
                    <div class="price">
                        <p><span>1077</span>грн</p>
                        <em><span>2077</span>грн</em>
                    </div>
                    {{--                    <em>Хід продажів</em>--}}
                    <div class="marks">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <div class="discript">
                        <p><span>Суцільний колір Non-slip Диван Кришка Потовщення м'який</span>...</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="https://img.joomcdn.net/b6f375215a59629e6c3b9ac365478494e1216586_200_200.jpeg" alt="">
                    <div class="sale_time">
                        <p>Sale 🔥 <span>24:44:17</span></p>
                    </div>
                </div>
                <div class="text">
                    <div class="sale">
                        <p>-50%</p>
                    </div>
                    <div class="price">
                        <p><span>1077</span>грн</p>
                        <em><span>2077</span>грн</em>
                    </div>
                    {{--                    <em>Хід продажів</em>--}}
                    <div class="marks">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <div class="discript">
                        <p><span>Суцільний колір Non-slip Диван Кришка Потовщення м'який</span>...</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="https://img.joomcdn.net/b6f375215a59629e6c3b9ac365478494e1216586_200_200.jpeg" alt="">
                    <div class="sale_time">
                        <p>Sale 🔥 <span>24:44:17</span></p>
                    </div>
                </div>
                <div class="text">
                    <div class="sale">
                        <p>-50%</p>
                    </div>
                    <div class="price">
                        <p><span>1077</span>грн</p>
                        <em><span>2077</span>грн</em>
                    </div>
                    {{--                    <em>Хід продажів</em>--}}
                    <div class="marks">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <div class="discript">
                        <p><span>Суцільний колір Non-slip Диван Кришка Потовщення м'який</span>...</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="action_week">
        <div class="title">
            <h2>Акція тижня</h2>
        </div>
        <div class="arrow arrow_left_action">
            <span><i class="fa-solid fa-circle-chevron-left"></i></span>
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
        <div class="arrow arrow_right_action">
            <span><i class="fa-solid fa-circle-chevron-right"></i></span>
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
                    <a href="#"><p>Усі товари <span><i class="fa-solid fa-arrow-right"></i></span></p></a>
                </div>
                <div class="cardList cardList_all">
                    <div class="card">
                        <div class="img">
                            <img src="https://img.joomcdn.net/b6f375215a59629e6c3b9ac365478494e1216586_200_200.jpeg"
                                 alt="">
                            <div class="sale_time">
                                <p>Sale 🔥 <span>24:44:17</span></p>
                            </div>
                        </div>
                        <div class="text">
                            <div class="sale">
                                <p>-50%</p>
                            </div>
                            <div class="price">
                                <p><span>1077</span>грн</p>
                                <em><span>2077</span>грн</em>
                            </div>
                            {{--                    <em>Хід продажів</em>--}}
                            <div class="marks">
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                            </div>
                            <div class="discript">
                                <p><span>Суцільний колір Non-slip Диван Кришка Потовщення м'який</span>...</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img">
                            <img src="https://img.joomcdn.net/b6f375215a59629e6c3b9ac365478494e1216586_200_200.jpeg"
                                 alt="">
                            <div class="sale_time">
                                <p>Sale 🔥 <span>24:44:17</span></p>
                            </div>
                        </div>
                        <div class="text">
                            <div class="sale">
                                <p>-50%</p>
                            </div>
                            <div class="price">
                                <p><span>1077</span>грн</p>
                                <em><span>2077</span>грн</em>
                            </div>
                            {{--                    <em>Хід продажів</em>--}}
                            <div class="marks">
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                            </div>
                            <div class="discript">
                                <p><span>Суцільний колір Non-slip Диван Кришка Потовщення м'який</span>...</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img">
                            <img src="https://img.joomcdn.net/b6f375215a59629e6c3b9ac365478494e1216586_200_200.jpeg"
                                 alt="">
                            <div class="sale_time">
                                <p>Sale 🔥 <span>24:44:17</span></p>
                            </div>
                        </div>
                        <div class="text">
                            <div class="sale">
                                <p>-50%</p>
                            </div>
                            <div class="price">
                                <p><span>1077</span>грн</p>
                                <em><span>2077</span>грн</em>
                            </div>
                            {{--                    <em>Хід продажів</em>--}}
                            <div class="marks">
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                            </div>
                            <div class="discript">
                                <p><span>Суцільний колір Non-slip Диван Кришка Потовщення м'який</span>...</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img">
                            <img src="https://img.joomcdn.net/b6f375215a59629e6c3b9ac365478494e1216586_200_200.jpeg"
                                 alt="">
                            <div class="sale_time">
                                <p>Sale 🔥 <span>24:44:17</span></p>
                            </div>
                        </div>
                        <div class="text">
                            <div class="sale">
                                <p>-50%</p>
                            </div>
                            <div class="price">
                                <p><span>1077</span>грн</p>
                                <em><span>2077</span>грн</em>
                            </div>
                            {{--                    <em>Хід продажів</em>--}}
                            <div class="marks">
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                            </div>
                            <div class="discript">
                                <p><span>Суцільний колір Non-slip Диван Кришка Потовщення м'який</span>...</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img">
                            <img src="https://img.joomcdn.net/b6f375215a59629e6c3b9ac365478494e1216586_200_200.jpeg"
                                 alt="">
                            <div class="sale_time">
                                <p>Sale 🔥 <span>24:44:17</span></p>
                            </div>
                        </div>
                        <div class="text">
                            <div class="sale">
                                <p>-50%</p>
                            </div>
                            <div class="price">
                                <p><span>1077</span>грн</p>
                                <em><span>2077</span>грн</em>
                            </div>
                            {{--                    <em>Хід продажів</em>--}}
                            <div class="marks">
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                            </div>
                            <div class="discript">
                                <p><span>Суцільний колір Non-slip Диван Кришка Потовщення м'який</span>...</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img">
                            <img src="https://img.joomcdn.net/b6f375215a59629e6c3b9ac365478494e1216586_200_200.jpeg"
                                 alt="">
                            <div class="sale_time">
                                <p>Sale 🔥 <span>24:44:17</span></p>
                            </div>
                        </div>
                        <div class="text">
                            <div class="sale">
                                <p>-50%</p>
                            </div>
                            <div class="price">
                                <p><span>1077</span>грн</p>
                                <em><span>2077</span>грн</em>
                            </div>
                            {{--                    <em>Хід продажів</em>--}}
                            <div class="marks">
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                            </div>
                            <div class="discript">
                                <p><span>Суцільний колір Non-slip Диван Кришка Потовщення м'який</span>...</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img">
                            <img src="https://img.joomcdn.net/b6f375215a59629e6c3b9ac365478494e1216586_200_200.jpeg"
                                 alt="">
                            <div class="sale_time">
                                <p>Sale 🔥 <span>24:44:17</span></p>
                            </div>
                        </div>
                        <div class="text">
                            <div class="sale">
                                <p>-50%</p>
                            </div>
                            <div class="price">
                                <p><span>1077</span>грн</p>
                                <em><span>2077</span>грн</em>
                            </div>
                            {{--                    <em>Хід продажів</em>--}}
                            <div class="marks">
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                            </div>
                            <div class="discript">
                                <p><span>Суцільний колір Non-slip Диван Кришка Потовщення м'який</span>...</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="img">
                            <img src="https://img.joomcdn.net/b6f375215a59629e6c3b9ac365478494e1216586_200_200.jpeg"
                                 alt="">
                            <div class="sale_time">
                                <p>Sale 🔥 <span>24:44:17</span></p>
                            </div>
                        </div>
                        <div class="text">
                            <div class="sale">
                                <p>-50%</p>
                            </div>
                            <div class="price">
                                <p><span>1077</span>грн</p>
                                <em><span>2077</span>грн</em>
                            </div>
                            {{--                    <em>Хід продажів</em>--}}
                            <div class="marks">
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                                <span><i class="fa-solid fa-star"></i></span>
                            </div>
                            <div class="discript">
                                <p><span>Суцільний колір Non-slip Диван Кришка Потовщення м'який</span>...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container_banners">
            <div class="arrow arrow_left_action">
                <span><i class="fa-solid fa-circle-chevron-left"></i></span>
            </div>
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
            <div class="arrow arrow_right_action">
                <span><i class="fa-solid fa-circle-chevron-right"></i></span>
            </div>
        </div>
    </div>
    <div class="health">
        <div class="title">
            <a href="#"><h2>Для краси та здоров'я</h2></a>
            <a href="#"><p>Усі товари <span><i class="fa-solid fa-arrow-right"></i></span></p></a>
        </div>
        <div class="cardList cardList_all">
            <div class="card">
                <div class="img">
                    <img src="https://img.joomcdn.net/b6f375215a59629e6c3b9ac365478494e1216586_200_200.jpeg" alt="">
                    <div class="sale_time">
                        <p>Sale 🔥 <span>24:44:17</span></p>
                    </div>
                </div>
                <div class="text">
                    <div class="sale">
                        <p>-50%</p>
                    </div>
                    <div class="price">
                        <p><span>1077</span>грн</p>
                        <em><span>2077</span>грн</em>
                    </div>
                    {{--                    <em>Хід продажів</em>--}}
                    <div class="marks">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <div class="discript">
                        <p><span>Суцільний колір Non-slip Диван Кришка Потовщення м'який</span>...</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="https://img.joomcdn.net/b6f375215a59629e6c3b9ac365478494e1216586_200_200.jpeg" alt="">
                    <div class="sale_time">
                        <p>Sale 🔥 <span>24:44:17</span></p>
                    </div>
                </div>
                <div class="text">
                    <div class="sale">
                        <p>-50%</p>
                    </div>
                    <div class="price">
                        <p><span>1077</span>грн</p>
                        <em><span>2077</span>грн</em>
                    </div>
                    {{--                    <em>Хід продажів</em>--}}
                    <div class="marks">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <div class="discript">
                        <p><span>Суцільний колір Non-slip Диван Кришка Потовщення м'який</span>...</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="https://img.joomcdn.net/b6f375215a59629e6c3b9ac365478494e1216586_200_200.jpeg" alt="">
                    <div class="sale_time">
                        <p>Sale 🔥 <span>24:44:17</span></p>
                    </div>
                </div>
                <div class="text">
                    <div class="sale">
                        <p>-50%</p>
                    </div>
                    <div class="price">
                        <p><span>1077</span>грн</p>
                        <em><span>2077</span>грн</em>
                    </div>
                    {{--                    <em>Хід продажів</em>--}}
                    <div class="marks">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <div class="discript">
                        <p><span>Суцільний колір Non-slip Диван Кришка Потовщення м'який</span>...</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="https://img.joomcdn.net/b6f375215a59629e6c3b9ac365478494e1216586_200_200.jpeg" alt="">
                    <div class="sale_time">
                        <p>Sale 🔥 <span>24:44:17</span></p>
                    </div>
                </div>
                <div class="text">
                    <div class="sale">
                        <p>-50%</p>
                    </div>
                    <div class="price">
                        <p><span>1077</span>грн</p>
                        <em><span>2077</span>грн</em>
                    </div>
                    {{--                    <em>Хід продажів</em>--}}
                    <div class="marks">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <div class="discript">
                        <p><span>Суцільний колір Non-slip Диван Кришка Потовщення м'який</span>...</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="https://img.joomcdn.net/b6f375215a59629e6c3b9ac365478494e1216586_200_200.jpeg" alt="">
                    <div class="sale_time">
                        <p>Sale 🔥 <span>24:44:17</span></p>
                    </div>
                </div>
                <div class="text">
                    <div class="sale">
                        <p>-50%</p>
                    </div>
                    <div class="price">
                        <p><span>1077</span>грн</p>
                        <em><span>2077</span>грн</em>
                    </div>
                    {{--                    <em>Хід продажів</em>--}}
                    <div class="marks">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <div class="discript">
                        <p><span>Суцільний колір Non-slip Диван Кришка Потовщення м'який</span>...</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="https://img.joomcdn.net/b6f375215a59629e6c3b9ac365478494e1216586_200_200.jpeg" alt="">
                    <div class="sale_time">
                        <p>Sale 🔥 <span>24:44:17</span></p>
                    </div>
                </div>
                <div class="text">
                    <div class="sale">
                        <p>-50%</p>
                    </div>
                    <div class="price">
                        <p><span>1077</span>грн</p>
                        <em><span>2077</span>грн</em>
                    </div>
                    {{--                    <em>Хід продажів</em>--}}
                    <div class="marks">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <div class="discript">
                        <p><span>Суцільний колір Non-slip Диван Кришка Потовщення м'який</span>...</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="banners_country">
        <div class="title">
            <h2>Товари з різних країн</h2>
        </div>
        <div class="arrow arrow_left_banner">
            <span><i class="fa-solid fa-circle-chevron-left"></i></span>
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
        <div class="arrow arrow_right">
            <span><i class="fa-solid fa-circle-chevron-right"></i></span>
        </div>
    </div>
    <div class="for_you">
        <div class="title">
            <h2>Кращі товари спеціально для вас</h2>
        </div>
        <div class="cardList cardList_all">
            <div class="card">
                <div class="img">
                    <img src="https://img.joomcdn.net/b6f375215a59629e6c3b9ac365478494e1216586_200_200.jpeg" alt="">
                    <div class="sale_time">
                        <p>Sale 🔥 <span>24:44:17</span></p>
                    </div>
                </div>
                <div class="text">
                    <div class="sale">
                        <p>-50%</p>
                    </div>
                    <div class="price">
                        <p><span>1077</span>грн</p>
                        <em><span>2077</span>грн</em>
                    </div>
                    {{--                    <em>Хід продажів</em>--}}
                    <div class="marks">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <div class="discript">
                        <p><span>Суцільний колір Non-slip Диван Кришка Потовщення м'який</span>...</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="https://img.joomcdn.net/b6f375215a59629e6c3b9ac365478494e1216586_200_200.jpeg" alt="">
                    <div class="sale_time">
                        <p>Sale 🔥 <span>24:44:17</span></p>
                    </div>
                </div>
                <div class="text">
                    <div class="sale">
                        <p>-50%</p>
                    </div>
                    <div class="price">
                        <p><span>1077</span>грн</p>
                        <em><span>2077</span>грн</em>
                    </div>
                    {{--                    <em>Хід продажів</em>--}}
                    <div class="marks">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <div class="discript">
                        <p><span>Суцільний колір Non-slip Диван Кришка Потовщення м'який</span>...</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="https://img.joomcdn.net/b6f375215a59629e6c3b9ac365478494e1216586_200_200.jpeg" alt="">
                    <div class="sale_time">
                        <p>Sale 🔥 <span>24:44:17</span></p>
                    </div>
                </div>
                <div class="text">
                    <div class="sale">
                        <p>-50%</p>
                    </div>
                    <div class="price">
                        <p><span>1077</span>грн</p>
                        <em><span>2077</span>грн</em>
                    </div>
                    {{--                    <em>Хід продажів</em>--}}
                    <div class="marks">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <div class="discript">
                        <p><span>Суцільний колір Non-slip Диван Кришка Потовщення м'який</span>...</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="https://img.joomcdn.net/b6f375215a59629e6c3b9ac365478494e1216586_200_200.jpeg" alt="">
                    <div class="sale_time">
                        <p>Sale 🔥 <span>24:44:17</span></p>
                    </div>
                </div>
                <div class="text">
                    <div class="sale">
                        <p>-50%</p>
                    </div>
                    <div class="price">
                        <p><span>1077</span>грн</p>
                        <em><span>2077</span>грн</em>
                    </div>
                    {{--                    <em>Хід продажів</em>--}}
                    <div class="marks">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <div class="discript">
                        <p><span>Суцільний колір Non-slip Диван Кришка Потовщення м'який</span>...</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="https://img.joomcdn.net/b6f375215a59629e6c3b9ac365478494e1216586_200_200.jpeg" alt="">
                    <div class="sale_time">
                        <p>Sale 🔥 <span>24:44:17</span></p>
                    </div>
                </div>
                <div class="text">
                    <div class="sale">
                        <p>-50%</p>
                    </div>
                    <div class="price">
                        <p><span>1077</span>грн</p>
                        <em><span>2077</span>грн</em>
                    </div>
                    {{--                    <em>Хід продажів</em>--}}
                    <div class="marks">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <div class="discript">
                        <p><span>Суцільний колір Non-slip Диван Кришка Потовщення м'який</span>...</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="https://img.joomcdn.net/b6f375215a59629e6c3b9ac365478494e1216586_200_200.jpeg" alt="">
                    <div class="sale_time">
                        <p>Sale 🔥 <span>24:44:17</span></p>
                    </div>
                </div>
                <div class="text">
                    <div class="sale">
                        <p>-50%</p>
                    </div>
                    <div class="price">
                        <p><span>1077</span>грн</p>
                        <em><span>2077</span>грн</em>
                    </div>
                    {{--                    <em>Хід продажів</em>--}}
                    <div class="marks">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <div class="discript">
                        <p><span>Суцільний колір Non-slip Диван Кришка Потовщення м'який</span>...</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="https://img.joomcdn.net/b6f375215a59629e6c3b9ac365478494e1216586_200_200.jpeg" alt="">
                    <div class="sale_time">
                        <p>Sale 🔥 <span>24:44:17</span></p>
                    </div>
                </div>
                <div class="text">
                    <div class="sale">
                        <p>-50%</p>
                    </div>
                    <div class="price">
                        <p><span>1077</span>грн</p>
                        <em><span>2077</span>грн</em>
                    </div>
                    {{--                    <em>Хід продажів</em>--}}
                    <div class="marks">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <div class="discript">
                        <p><span>Суцільний колір Non-slip Диван Кришка Потовщення м'який</span>...</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="https://img.joomcdn.net/b6f375215a59629e6c3b9ac365478494e1216586_200_200.jpeg" alt="">
                    <div class="sale_time">
                        <p>Sale 🔥 <span>24:44:17</span></p>
                    </div>
                </div>
                <div class="text">
                    <div class="sale">
                        <p>-50%</p>
                    </div>
                    <div class="price">
                        <p><span>1077</span>грн</p>
                        <em><span>2077</span>грн</em>
                    </div>
                    {{--                    <em>Хід продажів</em>--}}
                    <div class="marks">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <div class="discript">
                        <p><span>Суцільний колір Non-slip Диван Кришка Потовщення м'який</span>...</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="https://img.joomcdn.net/b6f375215a59629e6c3b9ac365478494e1216586_200_200.jpeg" alt="">
                    <div class="sale_time">
                        <p>Sale 🔥 <span>24:44:17</span></p>
                    </div>
                </div>
                <div class="text">
                    <div class="sale">
                        <p>-50%</p>
                    </div>
                    <div class="price">
                        <p><span>1077</span>грн</p>
                        <em><span>2077</span>грн</em>
                    </div>
                    {{--                    <em>Хід продажів</em>--}}
                    <div class="marks">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <div class="discript">
                        <p><span>Суцільний колір Non-slip Диван Кришка Потовщення м'який</span>...</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="https://img.joomcdn.net/b6f375215a59629e6c3b9ac365478494e1216586_200_200.jpeg" alt="">
                    <div class="sale_time">
                        <p>Sale 🔥 <span>24:44:17</span></p>
                    </div>
                </div>
                <div class="text">
                    <div class="sale">
                        <p>-50%</p>
                    </div>
                    <div class="price">
                        <p><span>1077</span>грн</p>
                        <em><span>2077</span>грн</em>
                    </div>
                    {{--                    <em>Хід продажів</em>--}}
                    <div class="marks">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <div class="discript">
                        <p><span>Суцільний колір Non-slip Диван Кришка Потовщення м'який</span>...</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="https://img.joomcdn.net/b6f375215a59629e6c3b9ac365478494e1216586_200_200.jpeg" alt="">
                    <div class="sale_time">
                        <p>Sale 🔥 <span>24:44:17</span></p>
                    </div>
                </div>
                <div class="text">
                    <div class="sale">
                        <p>-50%</p>
                    </div>
                    <div class="price">
                        <p><span>1077</span>грн</p>
                        <em><span>2077</span>грн</em>
                    </div>
                    {{--                    <em>Хід продажів</em>--}}
                    <div class="marks">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <div class="discript">
                        <p><span>Суцільний колір Non-slip Диван Кришка Потовщення м'який</span>...</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="https://img.joomcdn.net/b6f375215a59629e6c3b9ac365478494e1216586_200_200.jpeg" alt="">
                    <div class="sale_time">
                        <p>Sale 🔥 <span>24:44:17</span></p>
                    </div>
                </div>
                <div class="text">
                    <div class="sale">
                        <p>-50%</p>
                    </div>
                    <div class="price">
                        <p><span>1077</span>грн</p>
                        <em><span>2077</span>грн</em>
                    </div>
                    {{--                    <em>Хід продажів</em>--}}
                    <div class="marks">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <div class="discript">
                        <p><span>Суцільний колір Non-slip Диван Кришка Потовщення м'який</span>...</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="https://img.joomcdn.net/b6f375215a59629e6c3b9ac365478494e1216586_200_200.jpeg" alt="">
                    <div class="sale_time">
                        <p>Sale 🔥 <span>24:44:17</span></p>
                    </div>
                </div>
                <div class="text">
                    <div class="sale">
                        <p>-50%</p>
                    </div>
                    <div class="price">
                        <p><span>1077</span>грн</p>
                        <em><span>2077</span>грн</em>
                    </div>
                    {{--                    <em>Хід продажів</em>--}}
                    <div class="marks">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <div class="discript">
                        <p><span>Суцільний колір Non-slip Диван Кришка Потовщення м'який</span>...</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="https://img.joomcdn.net/b6f375215a59629e6c3b9ac365478494e1216586_200_200.jpeg" alt="">
                    <div class="sale_time">
                        <p>Sale 🔥 <span>24:44:17</span></p>
                    </div>
                </div>
                <div class="text">
                    <div class="sale">
                        <p>-50%</p>
                    </div>
                    <div class="price">
                        <p><span>1077</span>грн</p>
                        <em><span>2077</span>грн</em>
                    </div>
                    {{--                    <em>Хід продажів</em>--}}
                    <div class="marks">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <div class="discript">
                        <p><span>Суцільний колір Non-slip Диван Кришка Потовщення м'який</span>...</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="https://img.joomcdn.net/b6f375215a59629e6c3b9ac365478494e1216586_200_200.jpeg" alt="">
                    <div class="sale_time">
                        <p>Sale 🔥 <span>24:44:17</span></p>
                    </div>
                </div>
                <div class="text">
                    <div class="sale">
                        <p>-50%</p>
                    </div>
                    <div class="price">
                        <p><span>1077</span>грн</p>
                        <em><span>2077</span>грн</em>
                    </div>
                    {{--                    <em>Хід продажів</em>--}}
                    <div class="marks">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <div class="discript">
                        <p><span>Суцільний колір Non-slip Диван Кришка Потовщення м'який</span>...</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="https://img.joomcdn.net/b6f375215a59629e6c3b9ac365478494e1216586_200_200.jpeg" alt="">
                    <div class="sale_time">
                        <p>Sale 🔥 <span>24:44:17</span></p>
                    </div>
                </div>
                <div class="text">
                    <div class="sale">
                        <p>-50%</p>
                    </div>
                    <div class="price">
                        <p><span>1077</span>грн</p>
                        <em><span>2077</span>грн</em>
                    </div>
                    {{--                    <em>Хід продажів</em>--}}
                    <div class="marks">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <div class="discript">
                        <p><span>Суцільний колір Non-slip Диван Кришка Потовщення м'який</span>...</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="https://img.joomcdn.net/b6f375215a59629e6c3b9ac365478494e1216586_200_200.jpeg" alt="">
                    <div class="sale_time">
                        <p>Sale 🔥 <span>24:44:17</span></p>
                    </div>
                </div>
                <div class="text">
                    <div class="sale">
                        <p>-50%</p>
                    </div>
                    <div class="price">
                        <p><span>1077</span>грн</p>
                        <em><span>2077</span>грн</em>
                    </div>
                    {{--                    <em>Хід продажів</em>--}}
                    <div class="marks">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <div class="discript">
                        <p><span>Суцільний колір Non-slip Диван Кришка Потовщення м'який</span>...</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="img">
                    <img src="https://img.joomcdn.net/b6f375215a59629e6c3b9ac365478494e1216586_200_200.jpeg" alt="">
                    <div class="sale_time">
                        <p>Sale 🔥 <span>24:44:17</span></p>
                    </div>
                </div>
                <div class="text">
                    <div class="sale">
                        <p>-50%</p>
                    </div>
                    <div class="price">
                        <p><span>1077</span>грн</p>
                        <em><span>2077</span>грн</em>
                    </div>
                    {{--                    <em>Хід продажів</em>--}}
                    <div class="marks">
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                        <span><i class="fa-solid fa-star"></i></span>
                    </div>
                    <div class="discript">
                        <p><span>Суцільний колір Non-slip Диван Кришка Потовщення м'який</span>...</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="button_see">
            <button>Показати ще</button>
        </div>
    </div>
</div>
</div>
<div class="info">
    <div class="hr"></div>
    <div class="footer">
        <ul>
            <li class="black">Покупцям</li>
            <li><a href="#">Каталог</a></li>
            <li><a href="#">Підтримка</a></li>
            <li><a href="#">Політики конфіденційності</a></li>
            <li><a href="#">Умови використання</a></li>
            <li><a href="#">Спеціальні можливості</a></li>
            <li><a href="#">Популярні статті на Joom </a></li>
            <li><a href="#">Популярні запити на Joom </a></li>
        </ul>
        <ul>
            <li class="black">Партнерам</li>
            <li>Стати продавцем</li>
            <li>Умови використання</li>
        </ul>
        <ul>
            <li class="black">Компанія</li>
            <li>Про компанію</li>
            <li>Правовласникам</li>
            <li class="black">Компанії Joom Group</li>
            <li>Joom logistics</li>
            <li>Joompay</li>
            <li>Onfy</li>
        </ul>
        <ul>
            <li class="black">Наш додаток</li>
            <li class="none"><img
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/51/Download_on_the_App_Store_Badge_IT_RGB_blk.svg/1200px-Download_on_the_App_Store_Badge_IT_RGB_blk.svg.png"
                    alt=""></li>
            <li class="none"><img src="https://upload.wikimedia.org/wikipedia/commons/5/5f/Google_Play_Store_badge_IT.svg" alt="">
            </li>
            <li class="none"><img
                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAZoAAAB7CAMAAAB6t7bCAAAA81BMVEUAAADIDy7////FxcXBwcGcnJyPj4/R0dG4uLgiIiLNDy/5+fnf39/29va+vr4mAwmWlpZtbW2NCiAUAgSBCh5mZmYPDw8vLy/l5eXw8PDc3NzGAB7GACNcXFzCDyxQUFCBgYE4ODitra3FABOkpKTGABs/Pz+SkpItLS0aGhp6enqIiIjEAAcUFBRISEhycnLbfIbjl6Hx09XorLPUUWLvwce2DipdBxVxCRpQBhKeDCT78PGrDSfeg44ZAQXLHTj44+bQPlHrtLrhjpjVXWs/BQ4xBAvNKkPbcoDxy9DTS1/Xanb66u3fipRcBxUoAwk6BA1AMYJLAAATvUlEQVR4nO2dCXvauBaGjQSYYOySdgCzFTBLCCSQpWnTZjJp08w0adq58/9/zZV0JEveDaGBzPh7njZ4lXReLUeyLGvIK6NZ0XWMcT7Tc4lYW9dbdtNHAmnqhtnClmXB2ZmeUcTkxPC6bUSgaeoEC8ZWyXEK1WKmZ1Nh5DglCsjKt4wwNC3Kxen3GnUt07PrcNI9IHgsbAfQmGQvrk62HcP/tOpdh5Qc3YemSYqMM9h23DLV8qSIeNBQMv1tRysTUX2E81hBYxIy+9uOVCZQVZQbhgZnZHZIBWy1BJqWhefbjk8mKQdbTUBjEg9g27HJpKgBzQ1Bo1s4c5p3Sn1s2RSNYeHCtuOSyaN6Pq9TNBULL7Ydl0xezbFlEjR63smGZnZME2xVCBoLF7cdk0w+1R1So2lNC3e3HZNMfhUwRpqd+Wc7qBm2DK2SL+1tOyKZ/OqSXqdGvIBtxyNTQIsMza6KuGh2hmYn1bAIGpwWzauPHy5/e51Sv11++Pgq1W0LVaG5djiqFoS7OK8W+iT3sMMHfWWv94Ff78DSdVyoiW24oFqcidOWbgCeK8mNiPczqyoqzHxRqxWwrlsHPbHdLbCLQP1CtZEqgWtpauUr6dC8ufz0NldeUbm3ny7/SLy1nKZQ0TQdoSbsrpEd+8Sw7pwSGBu3EaopFy9a4rjN4bkXIB0sp8sAlEGPehOhpaZV1BksCHsitnRnH+mc6YiO0ovD5NKe9su0V8rrGsajpPP+/EQNvYbIZZ/+TLi5tIxOYkT+wIAesYtF/uzLw3TTh2YOVGCmA3SclQtM5nli3zaXTckfe+d+eQxRUu8NYVI0SDw+aT0HmoTBzVef1uMi6HyKLzm0dDQGVFOyVSSb1ILECiY9Sixtkz8Di+yn9Y0HzYzajj0DrFELLpULtCrZUaI/CBpnyu7vqQkZGo3ubZBLTHb8UDnu0LzCitncJD/ZtQwN4oB3AM3Ht08Aw+DkPsbdH3mT2GL1ysJvaS3PSpUHTcPw1i+G54IR/4FFOfQK0DD13FpUqibIEk1MHg7NLxANbRfQfHwaF9CHmACIDdSBoh5DpQsLuJauQTFS0dBM7Gb0Ba/S3AtozUb/rodGF7eh6vM4kgCLJs8z20fz1xOLDFdMg+NDQ9NfoTXVlG25lu5CqVDRkN+KB6ND1nYvmD+l1ExEqQWZ0A6RqM0IJpMN1G8dzfuNoCm/jw7B6zlpzGhuoy4tXQXLK2gW3qqwCsXKvaDCwRE01ZBg49EseZHjwhD4iDoBLV7TbRvN5WYKTa58GRkEdUh1qhYn1EWKjyosvcczroKm5jUfOdMYyAuwaLDJD5vdX++rwcajGTFX3lUBzqAVmjbgxXzbaN5uhkwu9zYyCOm7ipTqSNqfWLo569aov8TqEQXNjDf8XLTGmwAhjHXp8Urn2ZPOeDQlt7VnOlDQUE4U/pbRfNhQoSHFJtITIDartKhsXmoWvlIjeiXMEF40aqmpuaWG95J4v52gabL7V/pqsCuhqapo6KWjraP5tDk0n6LCCLQ10EPn7QO1NO0X2g64BQoaWvEdy8t4+0xLTatlyjKyVlsz8u5yoKBwNOBEbhfNm8j6rN2O2D+OZBMViN9DI/VFa1908ljTcbjouSNXChrqRSlzTrn5oK3pybuu5aEtVb/c9QU5GhpUa8toPkYVmpvT01A2ndPzqEvKUf6zDw2tzibCE1YcLi6f86zUOtxP4BeQGqkJk1HWQjNAalkTHWCBho7v9PWtoon2zwx0FFporlAnCs1vEYH40LRYBqUlok8349AUVO+Z9j8bygVN0Ztfu8uJ1I0mDwN8elKojGcZ3oxE8zoKzfAKhZaab1c/Imq6XPl1RCDe3smBtALzfUPQuCDp6LG4tipGJ8UFXdFpXA8NLSg2NG+aJbw9Fw13+7aI5veoQjO8QI8hxaPziC4iG5vfIwKhzpTF3gQuHbOKBHrhvLYKQdPir6byHhBe9npz+mzAN7JDR45plUasWIH74573RnFo2Dgrcmq9bqHpjklLNLSbtZtoOtfoYhjcPb5F11EVWmTPRvZrmqw6483HPgw1h6ARzjTZ6iqD+iX3OriANgj0XrJf43nSk4SGP3AAcSASDRzdHpo376PMnCsb6Fugtit/M4ybyEtyEaFIA7RoVjWEM0b7I9MYNAzh4Qh2NN25dPKCJdhUojGUSV31RDTaoATgbUdcp6BhjdH20PwRjWZ8ji4CjsDwFp1H1meRaAYNoanG/uM6HjQGx/R/z2PeqXu2eC426Na6C+noKhfQs0gi3St8NxqITlHdF4a814TceyJnHe815COdY3K/XzgfOQHNq5hhmvEV+umr0oYn6Cqm0OTe/LqE/Pv0BDSddwideNgM7xG6i2xpMjSr6QlocuMThM7Lrqvc7pwidB1TnWVoVtJT0OTG9wb6cXIzbHc67eHNyWeE7kOctgzNenoSmlz7ywNCVw+n19enD1cIPXyJLTMZmpX0NDS5cvvuQjimF3ftuHYmQ7OinoiGOAPjm+8np6cn33PjJDAZmpX0ZDS06HTapLVJcWKGZhVtAk16ZWhWUIZmZ5Wh2VllaHZWGZoETXvLYlXd3C8WnufF1wxNrPagyyY2j2HzF77vpIa9e2jqTBtMo6JGb382m9UW0+RTmQCNOw2xbv6n0fSaNtXmK429pbIUrI1naQycoVFV8jzw3ZgGjom8MvTkZRMzNKpEtt5kKjWtYKAQJT4+fgloymP2XKZDB8o6MFrGp2nCFt8HZ7XHZfKPiZ1eXgFNX5itlnxuerXCwIgZhDF6AWjK727pZM3O/e1jp3N9S6c5tc/Pv1Amd7fX7Vzn5+092VeGs77e3g3PQdcdsvWunB6N+0IyTj43raZy1k2lNBqNHB3KUCnxyheApnOCPg/ZVKbT9vACUQBHCL0jNI7OkPGN0ECfx4QcQl/KuTJC3494BfIwHJ6hk05qNAvZFGzMAMei9bflyq+Dqu2baB2ql4HmbMhm0fjQlL+TqJ6OczcER5kcQT/bDOPRFfp6cn19fdchaO7To3Fo0k3G9WBTaRRznXyJ7DqH4ecreiFojtrtowAasnGBfhBoDwTQmET7rD18QF/bBM23o6OjDjljJTQs7VV7k44Ab72MdRqvl4Hmx/XXrz/P/Gi+IdShtmfF6h49XKEvbYS+5Qiai9vb85vcamhmLOkTeDs/sr6Z7vf7tePwY4Nlv++9sJnSraj3yG37S4/XlgpNvTsj8YnsiPVm/eU6MNOj4fKiITXc+RGh0s7dGOjbBbq/QCf3tO4jaIiuVkWjQ3HpsaDy6pGuYZqmQeM5A3fLkPOX5+wY7aUUoVkxS9IWfHZswnoiM8f9po+hy4VqUqBZcp/CUFoyrUhjZNIs0mUxckjS6B5TfdFNO2DxjlqEJj2aK+pwfSZUxi6a753cFbq/e7wiv8je6ys0fEQPbNYzQXP9+HiXWw3NQrQJkNPrgUOWNlX8YJEoqLKKWk+Z/+zaCVy+sGmzUsqkaCZbGD8RzcJWLmu679ZBfujDWyaITd2GSBrqeh+V2OK8SlszHrO2hs2oLbe/IHQz/skjdTHsPLI/Nz9IHqKOG6nZhuN2p7wSGqjIeiJF6lt+A7ZH73lMyB1sqAZHS88xnqQGbMX7FCggbsEkNDPfZTXP/iJ9IYWJMJuaApcQ5LbIJnUND41COP1yd0ZgdT6jW1qYCKXODanCHjvDW+owMzT374iI25YeDXtbhr0SDkO8alYHI/kHWyDewMT/DTgwUxU2IlomLlFq5JBBUw01Eo3IDGZTRIyXG3jTt+BmpGM3EKVGg/wXWdOu0a+hc86Zvrfv0Q/a5T96QOdjUqMh0ve8Q4yE6NdcHa2AZp/nNU2sk6U0yXvSaqXi3BKmYDP4a+4x25kXhZ3Z2kPspSXvCgAhoivP6IX93mRRG/GIF5VQo9BMeaCzqba3DxWtraakxGos02425T6lu9byp9GrtGgez27HtJ9/RruP7euzz2e3Xzrt8zP2Mk3n7uyhTf5jb3denNG+//jhjOliTE66S4kGeDBXB2oEdURAWP+AtUB7fI0z1qEXaExovwe8/mfNDfxOWO+t21q6jwmm/J0QME8sGt1TDiBL9DU1RvR94YZ2DNVjUzlBE1V0dBdhnTE08qfdYSNjfJP8bbun8KE1PobWhhG1VGimCo46ZF6lU8iLjPuCDOQ581AaoiX810NTpprzjA3YKz4gwaqmWDQT70F4TQ3KZ1eQUasrx5vdoKoNe2ue32+HRp6h7uVL9lj+iENSZZvBU08d1Jo//3GHeeBettJXk3SZu2PRlHxRBNP3lMh5Dc9bHuF3tnwJ8muX0ECB96RDcQS8RnJPp1UVoFHaE94wzcRlKUbLFI1kfo9FAwVbdjX3JVKOxleP2vIEcWtdi9QOoel6U6Muq0gVQFNy64cAGp4jq1oQTQmWXAHZyqpaUtADYa1YHJqJP1RoPCyZFn87UlVpVN3cE6EdQgPNqNtrK7iWBwXQyIQG0WAXM/IRVpZIRZ5ehjbt1vaJaou+DDkODZxm6q4gP7B1KLryp6I6BAobFeV3qHYHTd1n3ymrL6SvGUAzdy8IonHcDAzWkGMoEWh6ju32mYx0aA5QqGLQ8MBn8s5WjEF2Bw2ktNmqcPFPIbsNaQAN+Ne00giigeaCDsLJFkm1jg/NoXdvOjSFcDQsGhFolC4BlPm4NnB30NjhKXXr6wg04aVGovH3wXVkMKloDv2DDKnQODERjkDDy7Cb3NjnHjuDphueUJmxAmiKrtGDaMBF4EsxCWt4VFDQ8Fxhj+bdXnd5kE+HBu5saXteHcrUBNFAl2AmXIbY4fD11w1YRzERsaLQCEcggEb6CUE0UEHRypB3IAOu2EiiAcZyetV+OjRVT/S8ikLTFddA9R37gbqkhVCeCw10pXllIwQm4yMCATR5t2QE0VRE7hSNTaD/oKDxj+Us06GZB0KVikIDYZncuw85rppk3TVq1lH06ps8nVZjoohPhOGOQAANmIm6xQE0UF3A2OcovNhINDxXyCVSUqLhVXDoHN1INBBsbS/F7IdENBtb3zGXK0et7KSJPqLvqRKkg48I+NHwgbM9LQQN1DXQyPLh4abPhBINH3eQw3UpKzTepoeaLhINBFZgQRiD4HFFa6+Htg6aqPXQQoZlmA4h8V1pCAVNSxowgAYsyBtZXmya3vkzfjSGHHBROruxaPjTh7BRsEg0UNXqDvs/0hxM668iuAaaqFUEhUcVcFh0aSQ/mpGCzY+G91LEOCJ3wAzPGKdE0zCUDCDvrKCRz848dR8vt7b6nJz/jkbDfA6T3SdmkIaFve7am+ugiVy7/hiSHHBY+PNdlt89RtorKfYTI8883zc4GTdNA9FtafUHzHSHg6WlPA5uqpfvi/4VuzXv8RAXAcoGbFocAZ9pas54gZwuMa+To9EM3CepZsK03vVXrF0DTWQsZO/RJ8XIwryleb+IubFNIMWzr6E7835VdOyV7lxXPli2W3qrIh9V9+lhh9+sNC9asuML1PkkEVtvqjBsna1IPXGtrFuOpVc4RS0OjRyOiBukodqJdZ65AULe27CklVGIeCVUCzlkqjOSJv55A0JsbG3q2wklEloCx93LirQcnGEen3/WhohrHBr3mqSJcc+5OvrfUWHwWS8hR7oyFSHWF81DCJqKz/txgqcQz2AElZh3Ks4SXG8ow27BAIpyhgL/wFTw3ZCujHd4v4VfYkaanGsnvikAdgt1WGz3UMAGJbeuDqIJpmdQ8p1iWDLbKhbWp3xaEncX3Uxe8gaVF/bz3hUntTXuu12Jn6fbiS9xjByq0FHYGTs0OhYe2tLivfuq4rNyN2AOTZCB52F3IgAc3nIYrdKBr1QV2SHbgWqLhilMMmGVqol5n7VhGb4wDnjLR5o6t187KdFbhHcpeU0Q36nRUn2/ZjO9zrj+ZipB8umvY/8Mf8V5Pkyc/R99QrTHdBy7GX/XgPiH9xLPS4Hm1SbI5N7+lT7yoZJoAgqOoe2yoI6OKNmK0nwr7c9NoIn9jl0a/VvQQONlJL99n+oLg38++QuDb5M+zZmsfwmaQ2grEz+Emva7nG9eP+27nNGDZ+n170BTh06rmWJZhLRfs/3f69y6X7PNvX5qM8P0wtHU5726tlf1zKiOF6BJ9XnuD6/fr/oR6Nzb96/jPsi5il44moHa+0kYcwatgIbqn78/XF7+lkqXlx/+/ucJafHrhaNRx3Ts+FdKuNiX0/XUaLaoF45Gmfugp+sENSzLfkFowmc7Bqaj76DcpSrs5B4NaIJfCpr8aF7rhY9uLKxRv7Z4nlfG19Vet1qyrFIxdhKNRwtsNbVK3kq7QFimZ1OXorEtnB5mpmdSH1tIa1p4o+soZdqEChgjDVl4YwvCZNqQ6qRbQ9Do+dIv/LJUpnVEHTSChjQ2v/B7bJnWURFbJkFjWMmjaJmeVcd5Up8RNKiVFZsd0xzTR+0EjZnPJ692mOn5NMF59g1qxIrNppfvzbS+iHvG5qew4SmcxwlzcDM9n0bYYlN8GBpSpWVsdkWEDMy/hUHdppXP6rSd0J6DLf6CiFiZh5SbUuanbV1LLMqMiwaZmBScUS8bF9ii9vZLOG+5i1jK6cStvIWxc9CdPM/HczKpqk8X+wWLgFE+GKLM9DZ1i5QcjNmU3VEh0zOJzvoukWJBwVQkDuSZhG9UCB0rT4UzPZuYwYndde+iI4H3I5p2S9f1bcf2vyVdb1XswIIs/we6LOlrg4kVDAAAAABJRU5ErkJggg=="
                    alt=""></li>
        </ul>
    </div>
    <div class="hr"></div>
    <div class="bottom_bar">
        <p>© <span>2023</span> SIA Joom (Latvia)</p>
        <div class="link">
            <p>Цей сайт захищений reCAPTCHA та Google <span><a href="https://policies.google.com/privacy">Політика конфіденційності</a></span>
                <span><a href="https://policies.google.com/terms">Умови використання</a></span> </p>
{{--            <a href="https://policies.google.com/privacy">Політика конфіденційності</a>--}}
{{--            <a href="https://policies.google.com/terms">Умови використання</a>--}}
        </div>
    </div>
</div>
<script src="https://kit.fontawesome.com/1e05c9e939.js" crossorigin="anonymous"></script>
</body>
</html>
