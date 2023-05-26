<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('truncate table categories');
        DB::table('categories')->insert([
            ['parent_id'=>0, 'name'=>"Жіноча мода",'img'=>"https://static2.issaplus.com/wa-data/public/photos/20/45/4520/4520.970.jpg" ],
            ['parent_id'=>1, 'name'=>"Одяг",'img'=>"https://ua.all.biz/img/ua/catalog/23329679.jpeg"],


            ['parent_id'=>2, 'name'=>"Сукні",'img'=>"https://vovk.com/magazine/wp-content/uploads/2021/08/011534_2-1-683x1024.jpg"],
            ['parent_id'=>3, 'name'=>"Сукні",'img'=>"https://i.pinimg.com/564x/c7/0b/00/c70b008f7efec8822abffeeb36361bd2.jpg"],
            ['parent_id'=>3, 'name'=>"Вечірні сукні",'img'=>"https://i.pinimg.com/564x/09/9f/aa/099faaf148fcd6bc5b508152e9b118b9.jpg"],
            ['parent_id'=>4, 'name'=>"Сарафани",'img'=>"https://i.pinimg.com/564x/fc/16/8f/fc168fd800e567a2f7b63ca01c44e1f4.jpg"],
            ['parent_id'=>4, 'name'=>"Сукні на весілля",'img'=>"https://i.pinimg.com/564x/40/f7/1f/40f71f2482d41172e9f3ac75e8f0239e.jpg"],
            ['parent_id'=>3, 'name'=>"Весільні сукні",'img'=>"https://i.pinimg.com/564x/a5/96/c9/a596c97cb337bf03b23eddd1d6906500.jpg"],
            ['parent_id'=>3, 'name'=>"Сукні дружки нареченої",'img'=>"https://i.pinimg.com/564x/ff/73/14/ff7314d4f5ee7191144c8813420b3744.jpg"],

            ['parent_id'=>2, 'name'=>"Штани та брюки",'img'=>"https://i.pinimg.com/564x/f0/48/3b/f0483b3d56bbecca6016cd8e570f03f3.jpg"],
            ['parent_id'=>10, 'name'=>"Штани",'img'=>"https://i.pinimg.com/564x/23/28/dd/2328ddf4ef400c7fd23a183e325c5f39.jpg"],
            ['parent_id'=>10, 'name'=>"Легінси та лосини",'img'=>""],
            ['parent_id'=>10, 'name'=>"Джинси",'img'=>"https://i.pinimg.com/564x/8f/fe/c7/8ffec7f82e01c42826118e2f2c33d11a.jpg"],
            ['parent_id'=>10, 'name'=>"Шорти",'img'=>"https://i.pinimg.com/564x/46/bb/fe/46bbfe9784c30172629c2431e47c2c14.jpg"],
            ['parent_id'=>10, 'name'=>"Спортивні штани",'img'=>"https://i.pinimg.com/564x/12/c0/3f/12c03fd51100e2f3c1b17882afae7a81.jpg"],
            ['parent_id'=>10, 'name'=>"Джогери",'img'=>"https://i.pinimg.com/564x/be/e5/3f/bee53fadf4ac5f97ea7e6b3ed636cc21.jpg"],
            ['parent_id'=>10, 'name'=>"Штани та капрі",'img'=>"https://i.pinimg.com/736x/28/31/0b/28310b0c89f02514abdfc07b56567124.jpg"],
            ['parent_id'=>10, 'name'=>"Кюлоти",'img'=>"https://i.pinimg.com/564x/99/72/ad/9972addfb8bb93761c662b973e90cdcc.jpg"],

            ['parent_id'=>2, 'name'=>"Футболки та топи",'img'=>"https://i.pinimg.com/564x/12/a8/56/12a856a441f6ad549aba169f0ca8feb8.jpg"],
            ['parent_id'=>19, 'name'=>"Футболки та лонгсліви",'img'=>"https://i.pinimg.com/564x/71/db/7b/71db7b481699180a9facca8b7c5b5eba.jpg"],
            ['parent_id'=>19, 'name'=>"Майки та топи",'img'=>"https://i.pinimg.com/564x/23/99/d8/2399d874b47f4025dc90b065f826a8d9.jpg"],
            ['parent_id'=>19, 'name'=>"Боді",'img'=>""],
            ['parent_id'=>19, 'name'=>"Футболки-поло",'img'=>"https://i.pinimg.com/564x/e0/9e/77/e09e7722cc62c55e3299bdc6427e5bd2.jpg"],
            ['parent_id'=>19, 'name'=>"Корсетні топи",'img'=>""],

            ['parent_id'=>2, 'name'=>"Спортивний одяг",'img'=>""],
            ['parent_id'=>25, 'name'=>"Легінси та лосини",'img'=>""],
            ['parent_id'=>25, 'name'=>"Спортивні костюми",'img'=>""],
            ['parent_id'=>25, 'name'=>"Спортивні топи",'img'=>""],
            ['parent_id'=>25, 'name'=>"Спортивні штани",'img'=>""],
            ['parent_id'=>25, 'name'=>"Термобілизна",'img'=>""],

            ['parent_id'=>2, 'name'=>"Блузки та сорочки",'img'=>""],

            ['parent_id'=>2, 'name'=>"Теплий одяг",'img'=>""],
            ['parent_id'=>32, 'name'=>"Толстовки та світшоти",'img'=>""],
            ['parent_id'=>32, 'name'=>"Пуловери і лонгсліви",'img'=>""],
            ['parent_id'=>32, 'name'=>"Светри",'img'=>""],
            ['parent_id'=>32, 'name'=>"Кардигани",'img'=>""],
            ['parent_id'=>32, 'name'=>"Трикотажні жилети",'img'=>""],
            ['parent_id'=>32, 'name'=>"Пончо",'img'=>""],

            ['parent_id'=>2, 'name'=>"Костюми та комбінезони",'img'=>""],
            ['parent_id'=>39, 'name'=>"Комбінезони",'img'=>""],
            ['parent_id'=>39, 'name'=>"Костюми зі штанами та шортами",'img'=>""],
            ['parent_id'=>39, 'name'=>"Костюми зі спідницями",'img'=>""],
            ['parent_id'=>39, 'name'=>"Ділові костюми",'img'=>""],
            ['parent_id'=>39, 'name'=>"Костюми з сукнями",'img'=>""],


            ['parent_id'=>2, 'name'=>"Верхній одяг",'img'=>""],
            ['parent_id'=>45, 'name'=>"Куртки",'img'=>""],
            ['parent_id'=>45, 'name'=>"Пуховики та парки",'img'=>""],
            ['parent_id'=>45, 'name'=>"Вітровки",'img'=>""],
            ['parent_id'=>45, 'name'=>"Пальта",'img'=>""],
            ['parent_id'=>45, 'name'=>"Плащі",'img'=>""],
            ['parent_id'=>45, 'name'=>"Жилети",'img'=>""],
            ['parent_id'=>45, 'name'=>"Верхній одяг з хутра",'img'=>""],
            ['parent_id'=>45, 'name'=>"Джинсові куртки",'img'=>""],
            ['parent_id'=>45, 'name'=>"Верхній одяг зі шкіри",'img'=>""],

            ['parent_id'=>2, 'name'=>"Одяг для дому та сну",'img'=>""],
            ['parent_id'=>55, 'name'=>"Піжами та комплекти для сну",'img'=>""],
            ['parent_id'=>55, 'name'=>"Нічні сорочки та пеньюари",'img'=>""],
            ['parent_id'=>55, 'name'=>"Халати та домашні костюми",'img'=>""],
            ['parent_id'=>55, 'name'=>"Халати",'img'=>""],

            ['parent_id'=>2, 'name'=>"Шкарпетки, панчохи, колготки",'img'=>""],
            ['parent_id'=>60, 'name'=>"Колготки",'img'=>""],
            ['parent_id'=>60, 'name'=>"Шкарпетки",'img'=>""],
            ['parent_id'=>60, 'name'=>"Панчохи",'img'=>""],
            ['parent_id'=>60, 'name'=>"Сліди і підслідники",'img'=>""],
            ['parent_id'=>60, 'name'=>"Гетри, гольфи та гамаші",'img'=>""],

            ['parent_id'=>2, 'name'=>"Спідниці",'img'=>""],
            ['parent_id'=>2, 'name'=>"Джинси",'img'=>""],
            ['parent_id'=>2, 'name'=>"Шорти",'img'=>""],
            ['parent_id'=>2, 'name'=>"Піджаки",'img'=>""],

            ['parent_id'=>69, 'name'=>"Сукні та костюми",'img'=>""],
            ['parent_id'=>70, 'name'=>"Сукні",'img'=>""],
            ['parent_id'=>70, 'name'=>"Костюми та комплекти",'img'=>""],

            ['parent_id'=>69, 'name'=>"Брюки",'img'=>""],
            ['parent_id'=>73, 'name'=>"Джинси",'img'=>""],
            ['parent_id'=>73, 'name'=>"Штани і бриджі",'img'=>""],
            ['parent_id'=>73, 'name'=>"Леґінси",'img'=>""],
            ['parent_id'=>73, 'name'=>"Шорти",'img'=>""],

            ['parent_id'=>69, 'name'=>"Топи та кофти",'img'=>""],
            ['parent_id'=>78, 'name'=>"Толстовки",'img'=>""],
            ['parent_id'=>78, 'name'=>"Блузки та сорочки",'img'=>""],
            ['parent_id'=>78, 'name'=>"Футболки",'img'=>""],
            ['parent_id'=>78, 'name'=>"Майки",'img'=>""],
            ['parent_id'=>78, 'name'=>"Светри",'img'=>""],


            ['parent_id'=>2, 'name'=>"Аксесуари",'img'=>"" ],
            ['parent_id'=>84, 'name'=>"Прикраси та біжутерія",'img'=>"" ],
            ['parent_id'=>84, 'name'=>"Сережки",'img'=>"" ],
            ['parent_id'=>86, 'name'=>"Висячі сережки",'img'=>"" ],
            ['parent_id'=>86, 'name'=>"Сережки гвоздики",'img'=>"" ],
            ['parent_id'=>86, 'name'=>"Сережки кільця",'img'=>"" ],
            ['parent_id'=>86, 'name'=>"Кафи",'img'=>"" ],
            ['parent_id'=>86, 'name'=>"Сережки-кліпси",'img'=>"" ],
            ['parent_id'=>86, 'name'=>"Сережки-магніти",'img'=>"" ],

            ['parent_id'=>84, 'name'=>"Каблучки",'img'=>"" ],
            ['parent_id'=>93, 'name'=>"Жіночі каблучки",'img'=>"" ],
            ['parent_id'=>93, 'name'=>"Чоловічі каблучки",'img'=>"" ],
            ['parent_id'=>93, 'name'=>"Унісекс каблучки",'img'=>"" ],
            ['parent_id'=>93, 'name'=>"Весільні каблучки",'img'=>"" ],
            ['parent_id'=>93, 'name'=>"Обручки",'img'=>"" ],


            ['parent_id'=>84, 'name'=>"Намиста і підвіски",'img'=>"" ],
            ['parent_id'=>99, 'name'=>"Намиста та кольє",'img'=>"" ],
            ['parent_id'=>99, 'name'=>"Кулони та підвіски",'img'=>"" ],
            ['parent_id'=>99, 'name'=>"Ланцюжки на шию",'img'=>"" ],
            ['parent_id'=>99, 'name'=>"Чокери",'img'=>"" ],
            ['parent_id'=>99, 'name'=>"Ланцюжки для чоловіків",'img'=>"" ],
            ['parent_id'=>99, 'name'=>"Аксесуари на комір",'img'=>"" ],

            ['parent_id'=>84, 'name'=>"Браслети",'img'=>"" ],
            ['parent_id'=>106, 'name'=>"Чоловічі браслети",'img'=>"" ],
            ['parent_id'=>106, 'name'=>"Багатоскладові браслети",'img'=>"" ],
            ['parent_id'=>106, 'name'=>"Браслети-ланцюги",'img'=>"" ],
            ['parent_id'=>106, 'name'=>"Плетені та кручені браслети",'img'=>"" ],
            ['parent_id'=>106, 'name'=>"Манжетні браслети",'img'=>"" ],
            ['parent_id'=>106, 'name'=>"Браслети на ногу",'img'=>"" ],
            ['parent_id'=>106, 'name'=>"Браслети-шарми",'img'=>"" ],

            ['parent_id'=>84, 'name'=>"Брошки і прикраси на тіло",'img'=>"" ],
            ['parent_id'=>84, 'name'=>"Набори ювелірних виробів",'img'=>"" ],

            ['parent_id'=>84, 'name'=>"Пірсинг",'img'=>"" ],
            ['parent_id'=>116, 'name'=>"Пірсинг на тілі",'img'=>"" ],
            ['parent_id'=>116, 'name'=>"Пірсинг вух",'img'=>"" ],
            ['parent_id'=>116, 'name'=>"Тунелі",'img'=>"" ],

            ['parent_id'=>84, 'name'=>"Прикраси на весілля та заручення",'img'=>"" ],
            ['parent_id'=>120, 'name'=>"Весільні каблучки",'img'=>"" ],
            ['parent_id'=>120, 'name'=>"Обручки",'img'=>"" ],
            ['parent_id'=>120, 'name'=>"Ювелірні прикраси для наречених",'img'=>"" ],

            ['parent_id'=>84, 'name'=>"Прикраси для волосся",'img'=>"" ],
            ['parent_id'=>84, 'name'=>"Амулети",'img'=>"" ],
            ['parent_id'=>84, 'name'=>"Запонки, затискачі",'img'=>"" ],

            ['parent_id'=>2, 'name'=>"Окуляри та аксесуари",'img'=>"" ],
            ['parent_id'=>127, 'name'=>"Окуляри для читання",'img'=>"" ],
            ['parent_id'=>127, 'name'=>"Сонцезахисні окуляри",'img'=>"" ],
            ['parent_id'=>127, 'name'=>"Аксесуари для окулярів",'img'=>"" ],

            ['parent_id'=>2, 'name'=>"Годинники та аксесуари",'img'=>"" ],
            ['parent_id'=>131, 'name'=>"Годинники",'img'=>"" ],
            ['parent_id'=>132, 'name'=>"Кварцові",'img'=>"" ],
            ['parent_id'=>132, 'name'=>"Електронні",'img'=>"" ],
            ['parent_id'=>132, 'name'=>"Годинники-браслети",'img'=>"" ],
            ['parent_id'=>132, 'name'=>"Механічні",'img'=>"" ],
            ['parent_id'=>132, 'name'=>"Кишенькові годинники та годинники на ла",'img'=>"" ],
            ['parent_id'=>132, 'name'=>"Спортивні",'img'=>"" ],
            ['parent_id'=>132, 'name'=>"Парні годинники для закоханих",'img'=>"" ],

            ['parent_id'=>131, 'name'=>"Аксесуари для годинників",'img'=>"" ],
            ['parent_id'=>140, 'name'=>"Ремінці для годинників",'img'=>"" ],
            ['parent_id'=>140, 'name'=>"Інструменти та комплекти для ремонту",'img'=>"" ],
            ['parent_id'=>140, 'name'=>"Батарейки",'img'=>"" ],
            ['parent_id'=>140, 'name'=>"Футляри",'img'=>"" ],
            ['parent_id'=>140, 'name'=>"Циферблати",'img'=>"" ],
            ['parent_id'=>140, 'name'=>"Ланцюжки для кишенькових годинників",'img'=>"" ],

            ['parent_id'=>131, 'name'=>"Брендові годинники",'img'=>"" ],

            ['parent_id'=>2, 'name'=>"Аксесуари для волосся",'img'=>"" ],
            ['parent_id'=>148, 'name'=>"Шпильки",'img'=>"" ],
            ['parent_id'=>148, 'name'=>"Прикраси",'img'=>"" ],
            ['parent_id'=>148, 'name'=>"Резинки",'img'=>"" ],
            ['parent_id'=>148, 'name'=>"Пов'язки",'img'=>"" ],
            ['parent_id'=>148, 'name'=>"Обідки",'img'=>"" ],
            ['parent_id'=>148, 'name'=>"Гребені",'img'=>"" ],

            ['parent_id'=>2, 'name'=>"Ремені та пояси",'img'=>"" ],
            ['parent_id'=>155, 'name'=>"Ремені та пояси",'img'=>"" ],
            ['parent_id'=>155, 'name'=>"Портупеї",'img'=>"" ],
            ['parent_id'=>155, 'name'=>"Підтяжки",'img'=>"" ],

            ['parent_id'=>2, 'name'=>"Головні убори",'img'=>"" ],
            ['parent_id'=>159, 'name'=>"Панами, кепки, козирки",'img'=>"" ],
            ['parent_id'=>160, 'name'=>"Кепі",'img'=>"" ],
            ['parent_id'=>160, 'name'=>"Панами",'img'=>"" ],
            ['parent_id'=>160, 'name'=>"Бандани",'img'=>"" ],
            ['parent_id'=>160, 'name'=>"Козирки",'img'=>"" ],


            ['parent_id'=>159, 'name'=>"В'язані та тканинні шапки",'img'=>"" ],

            ['parent_id'=>159, 'name'=>"Капелюхи",'img'=>"" ],
            ['parent_id'=>166, 'name'=>"Літні капелюхи",'img'=>"" ],
            ['parent_id'=>166, 'name'=>"Фетрові капелюхи",'img'=>"" ],
            ['parent_id'=>166, 'name'=>"Ковбойські капелюхи",'img'=>"" ],

            ['parent_id'=>159, 'name'=>"Берети і кепі",'img'=>"" ],
            ['parent_id'=>159, 'name'=>"Набори шарфів, шапок та рукавичок",'img'=>"" ],
            ['parent_id'=>159, 'name'=>"Шапки-вушанки",'img'=>"" ],
            ['parent_id'=>159, 'name'=>"Теплі навушники",'img'=>"" ],

            ['parent_id'=>2, 'name'=>"Шарфи та хустки",'img'=>"" ],
            ['parent_id'=>174, 'name'=>"Шарфи та хустки",'img'=>"" ],
            ['parent_id'=>174, 'name'=>"Мусульманські хустки",'img'=>"" ],
            ['parent_id'=>174, 'name'=>"Жіночі краватки ",'img'=>"" ],
            ['parent_id'=>174, 'name'=>"Набори шарфів, шапок та рукавичок",'img'=>"" ],

            ['parent_id'=>2, 'name'=>"Весільні аксесуари",'img'=>"" ],
            ['parent_id'=>197, 'name'=>"Прикраси на весілля та заручення",'img'=>"" ],
            ['parent_id'=>180, 'name'=>"Весільні каблучки",'img'=>"" ],
            ['parent_id'=>180, 'name'=>"Обручки",'img'=>"" ],
            ['parent_id'=>180, 'name'=>"Ювелірні прикраси для наречених",'img'=>"" ],
            ['parent_id'=>180, 'name'=>"Ювелірні прикраси для наречених",'img'=>"" ],

            ['parent_id'=>197, 'name'=>"Прикрашання весіль",'img'=>"" ],
            ['parent_id'=>197, 'name'=>"Пояси для наречених",'img'=>"" ],
            ['parent_id'=>197, 'name'=>"Нижня спідниця",'img'=>"" ],
            ['parent_id'=>197, 'name'=>"Весільні рукавички",'img'=>"" ],
            ['parent_id'=>197, 'name'=>"Весільні прикраси для машин",'img'=>"" ],
            ['parent_id'=>197, 'name'=>"Весільні кошики",'img'=>"" ],
            ['parent_id'=>197, 'name'=>"Весільні букети",'img'=>"" ],
            ['parent_id'=>197, 'name'=>"Весільні підв'язки",'img'=>"" ],
            ['parent_id'=>197, 'name'=>"Весільні подушки",'img'=>"" ],
            ['parent_id'=>197, 'name'=>"Пелюстки троянд для весіль",'img'=>"" ],
            ['parent_id'=>197, 'name'=>"Бутоньєрки",'img'=>"" ],
            ['parent_id'=>197, 'name'=>"Весільні капелюшки",'img'=>"" ],
            ['parent_id'=>197, 'name'=>"Фата",'img'=>"" ],
            ['parent_id'=>197, 'name'=>"Весільні парасольки",'img'=>"" ],

            ['parent_id'=>2, 'name'=>"Рукавички та рукавиці",'img'=>"" ],
            ['parent_id'=>199, 'name'=>"Рукавички, рукавиці та мітенки",'img'=>"" ],
            ['parent_id'=>199, 'name'=>"Набори шарфів, шапок та рукавичок",'img'=>"" ],

            ['parent_id'=>2, 'name'=>"Зонти та дощовики",'img'=>"" ],
            ['parent_id'=>202, 'name'=>"Парасольки",'img'=>"" ],
            ['parent_id'=>202, 'name'=>"Дощовики",'img'=>"" ],

            ['parent_id'=>2, 'name'=>"Віяла",'img'=>"" ],
            ['parent_id'=>2, 'name'=>"Fashion-маски",'img'=>"" ],


            ['parent_id'=>1, 'name'=>"Великі розміри",'img'=>"" ],

            ['parent_id'=>1, 'name'=>"Взуття",'img'=>"" ],
            ['parent_id'=>2, 'name'=>"Кросівки",'img'=>"" ],
            ['parent_id'=>2, 'name'=>"Сандалі та в'єтнамки",'img'=>"" ],
            ['parent_id'=>2, 'name'=>"Босоніжки",'img'=>"" ],
            ['parent_id'=>2, 'name'=>"Аксесуари для взуття",'img'=>"" ],
//            ['parent_id'=>3, 'name'=>"",'img'=>"" ],

//            ['parent_id'=>2, 'name'=>"",'img'=>"" ],
//            ['parent_id'=>2, 'name'=>"",'img'=>"" ],
            ['parent_id'=>1, 'name'=>"Сумки і гаманці",'img'=>"" ],
            ['parent_id'=>1, 'name'=>"Догляд за одягом",'img'=>"" ],
            ['parent_id'=>1, 'name'=>"Косплей",'img'=>"" ],
            ['parent_id'=>1, 'name'=>"Одяг на весілля",'img'=>"" ],
            ['parent_id'=>1, 'name'=>"Мусульманський гардероб",'img'=>"" ],





            ['parent_id'=>0, 'name'=>"Чоловіча мода",'img'=>"" ],
            ['parent_id'=>218, 'name'=>"Одяг",'img'=>"" ],
            ['parent_id'=>219, 'name'=>"Футболки і майки",'img'=>"" ],
            ['parent_id'=>220, 'name'=>"Футболки",'img'=>"" ],
            ['parent_id'=>220, 'name'=>"Поло",'img'=>"" ],
            ['parent_id'=>220, 'name'=>"Майки",'img'=>"" ],

            ['parent_id'=>219, 'name'=>"Штани та брюки",'img'=>"" ],
            ['parent_id'=>224, 'name'=>"Штани і бриджі",'img'=>"" ],
            ['parent_id'=>224, 'name'=>"Спортивні штани",'img'=>"" ],
            ['parent_id'=>224, 'name'=>"Джинси",'img'=>"" ],
            ['parent_id'=>224, 'name'=>"Шорти",'img'=>"" ],
            ['parent_id'=>224, 'name'=>"Комплекти шорти та верх",'img'=>"" ],
            ['parent_id'=>224, 'name'=>"Чоловічі комбінезони та ромпери",'img'=>"" ],

            ['parent_id'=>219, 'name'=>"Пальта і куртки",'img'=>"" ],
            ['parent_id'=>231, 'name'=>"Куртки",'img'=>"" ],
            ['parent_id'=>231, 'name'=>"Вітровки",'img'=>"" ],
            ['parent_id'=>231, 'name'=>"Пальта",'img'=>"" ],
            ['parent_id'=>231, 'name'=>"Шкіряні та замшеві куртки",'img'=>"" ],
            ['parent_id'=>231, 'name'=>"Пуховики та парки",'img'=>"" ],
            ['parent_id'=>231, 'name'=>"Плащі",'img'=>"" ],

            ['parent_id'=>219, 'name'=>"Спортивні костюми",'img'=>"" ],

            ['parent_id'=>219, 'name'=>"Светри та толстовки",'img'=>"" ],
            ['parent_id'=>239, 'name'=>"Толстовки і кофти",'img'=>"" ],
            ['parent_id'=>239, 'name'=>"Пуловери",'img'=>"" ],
            ['parent_id'=>239, 'name'=>"Чоловічі кардігани",'img'=>"" ],
            ['parent_id'=>239, 'name'=>"Трикотажні жилети",'img'=>"" ],

            ['parent_id'=>219, 'name'=>"Сорочки",'img'=>"" ],
            ['parent_id'=>244, 'name'=>"Повсякденні сорочки",'img'=>"" ],
            ['parent_id'=>244, 'name'=>"Сорочки з коротким рукавом",'img'=>"" ],
            ['parent_id'=>244, 'name'=>"Ділові сорочки",'img'=>"" ],

            ['parent_id'=>219, 'name'=>"Костюми та блейзери",'img'=>"" ],
            ['parent_id'=>248, 'name'=>"Жилети",'img'=>"" ],
            ['parent_id'=>248, 'name'=>"Костюми",'img'=>"" ],
            ['parent_id'=>248, 'name'=>"Піджаки",'img'=>"" ],
            ['parent_id'=>248, 'name'=>"Штани для костюма",'img'=>"" ],

            ['parent_id'=>219, 'name'=>"Плавки",'img'=>"" ],

            ['parent_id'=>219, 'name'=>"Одяг для сну і відпочинку",'img'=>"" ],
            ['parent_id'=>254, 'name'=>"Халати",'img'=>"" ],
            ['parent_id'=>254, 'name'=>"Піжамні комплекти",'img'=>"" ],
            ['parent_id'=>254, 'name'=>"Штани і шорти для сну",'img'=>"" ],

            ['parent_id'=>219, 'name'=>"Мусульманській одяг для чоловіків",'img'=>"" ],

            ['parent_id'=>218, 'name'=>"Взуття",'img'=>"" ],
            ['parent_id'=>256, 'name'=>"Кросівки",'img'=>"" ],
            ['parent_id'=>256, 'name'=>"Аксесуари для взуття",'img'=>"" ],
            ['parent_id'=>256, 'name'=>"Сандалі та в'єтнамки",'img'=>"" ],
            ['parent_id'=>256, 'name'=>"Напівчеревики",'img'=>"" ],
            ['parent_id'=>256, 'name'=>"Чоботи й черевики",'img'=>"" ],
            ['parent_id'=>256, 'name'=>"Мокасини та лофери",'img'=>"" ],
            ['parent_id'=>256, 'name'=>"Домашні капці",'img'=>"" ],
            ['parent_id'=>256, 'name'=>"Туфлі",'img'=>"" ],
            ['parent_id'=>256, 'name'=>"Кеди та сліпони",'img'=>"" ],
            ['parent_id'=>256, 'name'=>"Лофери",'img'=>"" ],


            ['parent_id'=>218, 'name'=>"Аксессуари",'img'=>"" ],
            ['parent_id'=>270, 'name'=>"Годинники та аксесуари",'img'=>"" ],
            ['parent_id'=>270, 'name'=>"Окуляри та аксесуари",'img'=>"" ],
            ['parent_id'=>270, 'name'=>"Головні убори",'img'=>"" ],
            ['parent_id'=>270, 'name'=>"Прикраси",'img'=>"" ],
            ['parent_id'=>270, 'name'=>"Монетниці та брелоки",'img'=>"" ],
            ['parent_id'=>270, 'name'=>"Ремені та пояси",'img'=>"" ],
            ['parent_id'=>270, 'name'=>"Шкарпетки",'img'=>"" ],
            ['parent_id'=>270, 'name'=>"Зонти та дощовики",'img'=>"" ],
            ['parent_id'=>270, 'name'=>"Підтяжки",'img'=>"" ],
            ['parent_id'=>270, 'name'=>"Рукавички та рукавиці",'img'=>"" ],
            ['parent_id'=>270, 'name'=>"Краватки та метелики",'img'=>"" ],
            ['parent_id'=>270, 'name'=>"Шарфи та хустки",'img'=>"" ],
            ['parent_id'=>270, 'name'=>"Fashion-маски",'img'=>"" ],
            ['parent_id'=>270, 'name'=>"Запонки, затискачі",'img'=>"" ],
            ['parent_id'=>270, 'name'=>"Вкладиші для комірців",'img'=>"" ],

            ['parent_id'=>218, 'name'=>"Сумки",'img'=>"" ],
            ['parent_id'=>286, 'name'=>"Сумки через плече",'img'=>"" ],
            ['parent_id'=>286, 'name'=>"Гаманці",'img'=>"" ],
            ['parent_id'=>286, 'name'=>"Чоловічі рюкзаки",'img'=>"" ],
            ['parent_id'=>286, 'name'=>"Сумки на пояс",'img'=>"" ],
            ['parent_id'=>286, 'name'=>"Аксесуари та запасні частини",'img'=>"" ],
            ['parent_id'=>286, 'name'=>"Портфелі",'img'=>"" ],
            ['parent_id'=>286, 'name'=>"Чоловічі сумки",'img'=>"" ],

            ['parent_id'=>218, 'name'=>"Одяг великих розмірів",'img'=>"" ],

            ['parent_id'=>218, 'name'=>"Догляд за одягом",'img'=>"" ],
            ['parent_id'=>295, 'name'=>"Машинки для видалення ковтунців",'img'=>"" ],
            ['parent_id'=>295, 'name'=>"Липкі ролики та щітки для чищення одягу",'img'=>"" ],
            ['parent_id'=>295, 'name'=>"Вішалки для одягу",'img'=>"" ],
            ['parent_id'=>295, 'name'=>"Дошки для складання одягу",'img'=>"" ],
        ]);
    }
}
