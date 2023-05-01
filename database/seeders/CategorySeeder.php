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
            ['parent_id'=>0, 'name'=>"Жіноча мода",'img'=>"https://upload.joomcdn.net/87473bdc9ece32e07f00c4ff477ae11d6d1fa111_46_46.png" ],
            ['parent_id'=>1, 'name'=>"Одяг",'img'=>""],


            ['parent_id'=>2, 'name'=>"Сукні",'img'=>""],
            ['parent_id'=>2, 'name'=>"Сукні",'img'=>""],
            ['parent_id'=>2, 'name'=>"Вечірні сукні",'img'=>""],
            ['parent_id'=>2, 'name'=>"Сарафани",'img'=>""],
            ['parent_id'=>2, 'name'=>"Сукні на весілля",'img'=>""],
            ['parent_id'=>2, 'name'=>"Весільні сукні",'img'=>""],
            ['parent_id'=>2, 'name'=>"Сукні дружки нареченої",'img'=>""],

            ['parent_id'=>2, 'name'=>"Штани та брюки",'img'=>""],
            ['parent_id'=>10, 'name'=>"Штани",'img'=>""],
            ['parent_id'=>10, 'name'=>"Легінси та лосини",'img'=>""],
            ['parent_id'=>10, 'name'=>"Джинси",'img'=>""],
            ['parent_id'=>10, 'name'=>"Шорти",'img'=>""],
            ['parent_id'=>10, 'name'=>"Спортивні штани",'img'=>""],
            ['parent_id'=>10, 'name'=>"Джогери",'img'=>""],
            ['parent_id'=>10, 'name'=>"Штани та капрі",'img'=>""],
            ['parent_id'=>10, 'name'=>"Кюлоти",'img'=>""],

            ['parent_id'=>2, 'name'=>"Футболки та топи",'img'=>""],
            ['parent_id'=>19, 'name'=>"Футболки та лонгсліви",'img'=>""],
            ['parent_id'=>19, 'name'=>"Майки та топи",'img'=>""],
            ['parent_id'=>19, 'name'=>"Боді",'img'=>""],
            ['parent_id'=>19, 'name'=>"Футболки-поло",'img'=>""],
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



//            ['parent_id'=>0, 'name'=>"",'img'=>"" ],
//            ['parent_id'=>0, 'name'=>"",'img'=>"" ],
//            ['parent_id'=>0, 'name'=>"",'img'=>"" ],
//            ['parent_id'=>0, 'name'=>"",'img'=>"" ],
        ]);
    }
}
