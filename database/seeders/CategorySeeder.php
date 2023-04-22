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

            ['parent_id'=>2, 'name'=>"Спідня білизна та аксесуари",'img'=>""],
            ['parent_id'=>3, 'name'=>"Трусики",'img'=>""],
            ['parent_id'=>4, 'name'=>"Бікіні",'img'=>""],
            ['parent_id'=>4, 'name'=>"Стринги",'img'=>""],
            ['parent_id'=>4, 'name'=>"Шортики",'img'=>""],

            ['parent_id'=>3, 'name'=>"Бюстгальтери і аксесуари",'img'=>""],
            ['parent_id'=>4, 'name'=>"Звичайні бюстгальтери",'img'=>""],
            ['parent_id'=>4, 'name'=>"Пуш-ап",'img'=>""],
            ['parent_id'=>4, 'name'=>"Топи",'img'=>""],
            ['parent_id'=>4, 'name'=>"Бралетт",'img'=>""],
            ['parent_id'=>4, 'name'=>"Бюст'є та корсети",'img'=>""],
            ['parent_id'=>4, 'name'=>"Аксесуари",'img'=>""],
            ['parent_id'=>5, 'name'=>"Вставки для об'єму",'img'=>""],
            ['parent_id'=>5, 'name'=>"Подовжувачі спинки",'img'=>""],
            ['parent_id'=>5, 'name'=>"Силіконові накладки",'img'=>""],
            ['parent_id'=>5, 'name'=>"Клейка стрічка для грудей",'img'=>""],
            ['parent_id'=>4, 'name'=>"Бюстгальтери-неведимки",'img'=>""],
            ['parent_id'=>4, 'name'=>"Бюстгальтери без бретельок",'img'=>""],

            ['parent_id'=>3, 'name'=>"Комплекти",'img'=>""],

            ['parent_id'=>3, 'name'=>"Корегувальна білизна",'img'=>""],
            ['parent_id'=>4, 'name'=>"Трусики та шорти",'img'=>""],
            ['parent_id'=>4, 'name'=>"Корсажі та паски",'img'=>""],
            ['parent_id'=>4, 'name'=>"Боді та комбінації",'img'=>""],
            ['parent_id'=>4, 'name'=>"Леґінси",'img'=>""],
            ['parent_id'=>4, 'name'=>"Майки та топи",'img'=>""],

            ['parent_id'=>3, 'name'=>"Підв'язки та пояси",'img'=>""],
            ['parent_id'=>3, 'name'=>"Корсети",'img'=>""],
            ['parent_id'=>3, 'name'=>"Органайзери та сумки",'img'=>""],
            ['parent_id'=>3, 'name'=>"Термобілизна",'img'=>""],


            ['parent_id'=>2, 'name'=>"Сукні",'img'=>""],
            ['parent_id'=>3, 'name'=>"Сукні",'img'=>""],
            ['parent_id'=>3, 'name'=>"Вечірні сукні",'img'=>""],
            ['parent_id'=>3, 'name'=>"Сарафани",'img'=>""],

            ['parent_id'=>3, 'name'=>"Сукні на весілля",'img'=>""],
            ['parent_id'=>4, 'name'=>"Весільні сукні",'img'=>""],
            ['parent_id'=>4, 'name'=>"Сукні дружки нареченої",'img'=>""],

            ['parent_id'=>2, 'name'=>"Штани та брюки",'img'=>""],
            ['parent_id'=>3, 'name'=>"Штани",'img'=>""],
            ['parent_id'=>3, 'name'=>"Легінси та лосини",'img'=>""],
            ['parent_id'=>3, 'name'=>"Джинси",'img'=>""],
            ['parent_id'=>3, 'name'=>"Шорти",'img'=>""],
            ['parent_id'=>3, 'name'=>"Спортивні штани",'img'=>""],
            ['parent_id'=>3, 'name'=>"Джогери",'img'=>""],
            ['parent_id'=>3, 'name'=>"Штани та капрі",'img'=>""],
            ['parent_id'=>3, 'name'=>"Кюлоти",'img'=>""],

            ['parent_id'=>2, 'name'=>"Футболки та топи",'img'=>""],
            ['parent_id'=>3, 'name'=>"Футболки та лонгсліви",'img'=>""],
            ['parent_id'=>3, 'name'=>"Майки та топи",'img'=>""],
            ['parent_id'=>3, 'name'=>"Боді",'img'=>""],
            ['parent_id'=>3, 'name'=>"Футболки-поло",'img'=>""],
            ['parent_id'=>3, 'name'=>"Корсетні топи",'img'=>""],

            ['parent_id'=>2, 'name'=>"Спортивний одяг",'img'=>""],
            ['parent_id'=>3, 'name'=>"Легінси та лосини",'img'=>""],
            ['parent_id'=>3, 'name'=>"Спортивні костюми",'img'=>""],
            ['parent_id'=>3, 'name'=>"Спортивні топи",'img'=>""],
            ['parent_id'=>3, 'name'=>"Спортивні штани",'img'=>""],
            ['parent_id'=>3, 'name'=>"Термобілизна",'img'=>""],

            ['parent_id'=>2, 'name'=>"Блузки та сорочки",'img'=>""],

            ['parent_id'=>2, 'name'=>"Купальники та парео",'img'=>""],
            ['parent_id'=>3, 'name'=>"Злиті купальники",'img'=>""],
            ['parent_id'=>3, 'name'=>"Бікіні",'img'=>""],
            ['parent_id'=>3, 'name'=>"Накидки та парео",'img'=>""],
            ['parent_id'=>3, 'name'=>"Роздільні купальники",'img'=>""],
            ['parent_id'=>3, 'name'=>"Танкіні",'img'=>""],
            ['parent_id'=>3, 'name'=>"Плавки",'img'=>""],
            ['parent_id'=>3, 'name'=>"Топи",'img'=>""],
            ['parent_id'=>3, 'name'=>"Мусульманські купальники",'img'=>""],
            ['parent_id'=>3, 'name'=>"Купальники для вагітних",'img'=>""],

            ['parent_id'=>2, 'name'=>"Теплий одяг",'img'=>""],
            ['parent_id'=>3, 'name'=>"Толстовки та світшоти",'img'=>""],
            ['parent_id'=>3, 'name'=>"Пуловери і лонгсліви",'img'=>""],
            ['parent_id'=>3, 'name'=>"Светри",'img'=>""],
            ['parent_id'=>3, 'name'=>"Кардигани",'img'=>""],
            ['parent_id'=>3, 'name'=>"Трикотажні жилети",'img'=>""],
            ['parent_id'=>3, 'name'=>"Пончо",'img'=>""],

            ['parent_id'=>2, 'name'=>"Костюми та комбінезони",'img'=>""],
            ['parent_id'=>3, 'name'=>"Комбінезони",'img'=>""],
            ['parent_id'=>3, 'name'=>"Костюми зі штанами та шортами",'img'=>""],
            ['parent_id'=>3, 'name'=>"Костюми зі спідницями",'img'=>""],
            ['parent_id'=>3, 'name'=>"Ділові костюми",'img'=>""],
            ['parent_id'=>3, 'name'=>"Костюми з сукнями",'img'=>""],


            ['parent_id'=>2, 'name'=>"Верхній одяг",'img'=>""],
            ['parent_id'=>3, 'name'=>"Куртки",'img'=>""],
            ['parent_id'=>3, 'name'=>"Пуховики та парки",'img'=>""],
            ['parent_id'=>3, 'name'=>"Вітровки",'img'=>""],
            ['parent_id'=>3, 'name'=>"Пальта",'img'=>""],
            ['parent_id'=>3, 'name'=>"Плащі",'img'=>""],
            ['parent_id'=>3, 'name'=>"Жилети",'img'=>""],
            ['parent_id'=>3, 'name'=>"Верхній одяг з хутра",'img'=>""],
            ['parent_id'=>3, 'name'=>"Джинсові куртки",'img'=>""],
            ['parent_id'=>3, 'name'=>"Верхній одяг зі шкіри",'img'=>""],

            ['parent_id'=>2, 'name'=>"Одяг для дому та сну",'img'=>""],
            ['parent_id'=>3, 'name'=>"Піжами та комплекти для сну",'img'=>""],
            ['parent_id'=>3, 'name'=>"Нічні сорочки та пеньюари",'img'=>""],
            ['parent_id'=>3, 'name'=>"Халати та домашні костюми",'img'=>""],
            ['parent_id'=>3, 'name'=>"Халати",'img'=>""],

            ['parent_id'=>2, 'name'=>"Шкарпетки, панчохи, колготки",'img'=>""],
            ['parent_id'=>3, 'name'=>"Колготки",'img'=>""],
            ['parent_id'=>3, 'name'=>"Шкарпетки",'img'=>""],
            ['parent_id'=>3, 'name'=>"Панчохи",'img'=>""],
            ['parent_id'=>3, 'name'=>"Сліди і підслідники",'img'=>""],
            ['parent_id'=>3, 'name'=>"Гетри, гольфи та гамаші",'img'=>""],

            ['parent_id'=>2, 'name'=>"Спідниці",'img'=>""],
            ['parent_id'=>2, 'name'=>"Джинси",'img'=>""],
            ['parent_id'=>2, 'name'=>"Шорти",'img'=>""],
            ['parent_id'=>2, 'name'=>"Піджаки",'img'=>""],

            ['parent_id'=>2, 'name'=>"Одяг для вагітних",'img'=>""],
            ['parent_id'=>3, 'name'=>"Спідня білизна",'img'=>""],
            ['parent_id'=>4, 'name'=>"Бюстгальтери",'img'=>""],
            ['parent_id'=>4, 'name'=>"Одяг для сну",'img'=>""],
            ['parent_id'=>4, 'name'=>"Коригувальна та підтримувальна білизна",'img'=>""],
            ['parent_id'=>4, 'name'=>"Колготки і панчохи",'img'=>""],
            ['parent_id'=>4, 'name'=>"Трусики",'img'=>""],

            ['parent_id'=>3, 'name'=>"Сукні та костюми",'img'=>""],
            ['parent_id'=>4, 'name'=>"Сукні",'img'=>""],
            ['parent_id'=>4, 'name'=>"Костюми та комплекти",'img'=>""],

            ['parent_id'=>3, 'name'=>"Купальники для вагітних",'img'=>""],
            ['parent_id'=>3, 'name'=>"Брюки",'img'=>""],
            ['parent_id'=>4, 'name'=>"Джинси",'img'=>""],
            ['parent_id'=>4, 'name'=>"Штани і бриджі",'img'=>""],
            ['parent_id'=>4, 'name'=>"Леґінси",'img'=>""],
            ['parent_id'=>4, 'name'=>"Шорти",'img'=>""],

            ['parent_id'=>3, 'name'=>"Топи та кофти",'img'=>""],
            ['parent_id'=>4, 'name'=>"Толстовки",'img'=>""],
            ['parent_id'=>4, 'name'=>"Блузки та сорочки",'img'=>""],
            ['parent_id'=>4, 'name'=>"Футболки",'img'=>""],
            ['parent_id'=>4, 'name'=>"Майки",'img'=>""],
            ['parent_id'=>4, 'name'=>"Светри",'img'=>""],


            ['parent_id'=>1, 'name'=>"Аксесуари",'img'=>"" ],
            ['parent_id'=>2, 'name'=>"Прикраси та біжутерія",'img'=>"" ],
            ['parent_id'=>3, 'name'=>"Сережки",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Висячі сережки",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Сережки гвоздики",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Сережки кільця",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Кафи",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Сережки-кліпси",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Сережки-магніти",'img'=>"" ],


            ['parent_id'=>3, 'name'=>"Каблучки",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Жіночі каблучки",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Чоловічі каблучки",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Унісекс каблучки",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Весільні каблучки",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Обручки",'img'=>"" ],


            ['parent_id'=>3, 'name'=>"Намиста і підвіски",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Намиста та кольє",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Кулони та підвіски",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Ланцюжки на шию",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Чокери",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Ланцюжки для чоловіків",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Аксесуари на комір",'img'=>"" ],

            ['parent_id'=>3, 'name'=>"Браслети",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Чоловічі браслети",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Багатоскладові браслети",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Браслети-ланцюги",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Плетені та кручені браслети",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Манжетні браслети",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Браслети на ногу",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Браслети-шарми",'img'=>"" ],

            ['parent_id'=>3, 'name'=>"Брошки і прикраси на тіло",'img'=>"" ],
            ['parent_id'=>3, 'name'=>"Набори ювелірних виробів",'img'=>"" ],

            ['parent_id'=>3, 'name'=>"Пірсинг",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Пірсинг на тілі",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Пірсинг вух",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Тунелі",'img'=>"" ],

            ['parent_id'=>3, 'name'=>"Прикраси на весілля та заручення",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Весільні каблучки",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Обручки",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Ювелірні прикраси для наречених",'img'=>"" ],

            ['parent_id'=>3, 'name'=>"Прикраси для волосся",'img'=>"" ],
            ['parent_id'=>3, 'name'=>"Амулети",'img'=>"" ],
            ['parent_id'=>3, 'name'=>"Запонки, затискачі",'img'=>"" ],

            ['parent_id'=>2, 'name'=>"Окуляри та аксесуари",'img'=>"" ],
            ['parent_id'=>3, 'name'=>"Окуляри для читання",'img'=>"" ],
            ['parent_id'=>3, 'name'=>"Сонцезахисні окуляри",'img'=>"" ],
            ['parent_id'=>3, 'name'=>"Аксесуари для окулярів",'img'=>"" ],

            ['parent_id'=>2, 'name'=>"Годинники та аксесуари",'img'=>"" ],
            ['parent_id'=>3, 'name'=>"Годинники",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Кварцові",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Електронні",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Годинники-браслети",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Механічні",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Кишенькові годинники та годинники на ла",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Спортивні",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Парні годинники для закоханих",'img'=>"" ],

            ['parent_id'=>3, 'name'=>"Аксесуари для годинників",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Ремінці для годинників",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Інструменти та комплекти для ремонту",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Батарейки",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Футляри",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Циферблати",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Ланцюжки для кишенькових годинників",'img'=>"" ],

            ['parent_id'=>3, 'name'=>"Брендові годинники",'img'=>"" ],

            ['parent_id'=>2, 'name'=>"Аксесуари для волосся",'img'=>"" ],
            ['parent_id'=>3, 'name'=>"Шпильки",'img'=>"" ],
            ['parent_id'=>3, 'name'=>"Прикраси",'img'=>"" ],
            ['parent_id'=>3, 'name'=>"Резинки",'img'=>"" ],
            ['parent_id'=>3, 'name'=>"Пов'язки",'img'=>"" ],
            ['parent_id'=>3, 'name'=>"Обідки",'img'=>"" ],
            ['parent_id'=>3, 'name'=>"Гребені",'img'=>"" ],

            ['parent_id'=>2, 'name'=>"Ремені та пояси",'img'=>"" ],
            ['parent_id'=>3, 'name'=>"Ремені та пояси",'img'=>"" ],
            ['parent_id'=>3, 'name'=>"Портупеї",'img'=>"" ],
            ['parent_id'=>3, 'name'=>"Підтяжки",'img'=>"" ],

            ['parent_id'=>2, 'name'=>"Головні убори",'img'=>"" ],
            ['parent_id'=>3, 'name'=>"Панами, кепки, козирки",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Кепі",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Панами",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Бандани",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Козирки",'img'=>"" ],


            ['parent_id'=>3, 'name'=>"В'язані та тканинні шапки",'img'=>"" ],

            ['parent_id'=>3, 'name'=>"Капелюхи",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Літні капелюхи",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Фетрові капелюхи",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Ковбойські капелюхи",'img'=>"" ],

            ['parent_id'=>3, 'name'=>"Берети і кепі",'img'=>"" ],
            ['parent_id'=>3, 'name'=>"Набори шарфів, шапок та рукавичок",'img'=>"" ],
            ['parent_id'=>3, 'name'=>"Шапки-вушанки",'img'=>"" ],
            ['parent_id'=>3, 'name'=>"Теплі навушники",'img'=>"" ],

            ['parent_id'=>2, 'name'=>"Шарфи та хустки",'img'=>"" ],
            ['parent_id'=>3, 'name'=>"Шарфи та хустки",'img'=>"" ],
            ['parent_id'=>3, 'name'=>"Мусульманські хустки",'img'=>"" ],
            ['parent_id'=>3, 'name'=>"Жіночі краватки ",'img'=>"" ],
            ['parent_id'=>3, 'name'=>"Набори шарфів, шапок та рукавичок",'img'=>"" ],

            ['parent_id'=>2, 'name'=>"Весільні аксесуари",'img'=>"" ],
            ['parent_id'=>3, 'name'=>"Прикраси на весілля та заручення",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Весільні каблучки",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Обручки",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Ювелірні прикраси для наречених",'img'=>"" ],
            ['parent_id'=>4, 'name'=>"Ювелірні прикраси для наречених",'img'=>"" ],

            ['parent_id'=>3, 'name'=>"Прикрашання весіль",'img'=>"" ],
            ['parent_id'=>3, 'name'=>"Пояси для наречених",'img'=>"" ],
            ['parent_id'=>3, 'name'=>"Нижня спідниця",'img'=>"" ],
            ['parent_id'=>3, 'name'=>"Весільні рукавички",'img'=>"" ],
            ['parent_id'=>3, 'name'=>"Весільні прикраси для машин",'img'=>"" ],
            ['parent_id'=>3, 'name'=>"Весільні кошики",'img'=>"" ],
            ['parent_id'=>3, 'name'=>"Весільні букети",'img'=>"" ],
            ['parent_id'=>3, 'name'=>"Весільні підв'язки",'img'=>"" ],
            ['parent_id'=>3, 'name'=>"Весільні подушки",'img'=>"" ],
            ['parent_id'=>3, 'name'=>"Пелюстки троянд для весіль",'img'=>"" ],
            ['parent_id'=>3, 'name'=>"Бутоньєрки",'img'=>"" ],
            ['parent_id'=>3, 'name'=>"Весільні капелюшки",'img'=>"" ],
            ['parent_id'=>3, 'name'=>"Фата",'img'=>"" ],
            ['parent_id'=>3, 'name'=>"Весільні парасольки",'img'=>"" ],

            ['parent_id'=>2, 'name'=>"Рукавички та рукавиці",'img'=>"" ],
            ['parent_id'=>3, 'name'=>"Рукавички, рукавиці та мітенки",'img'=>"" ],
            ['parent_id'=>3, 'name'=>"Набори шарфів, шапок та рукавичок",'img'=>"" ],

            ['parent_id'=>2, 'name'=>"Зонти та дощовики",'img'=>"" ],
            ['parent_id'=>3, 'name'=>"Парасольки",'img'=>"" ],
            ['parent_id'=>3, 'name'=>"Дощовики",'img'=>"" ],

            ['parent_id'=>2, 'name'=>"Віяла",'img'=>"" ],
            ['parent_id'=>2, 'name'=>"Fashion-маски",'img'=>"" ],


            ['parent_id'=>1, 'name'=>"Великі розміри",'img'=>"" ],

            ['parent_id'=>1, 'name'=>"Взуття",'img'=>"" ],
            ['parent_id'=>2, 'name'=>"Кросівки",'img'=>"" ],
            ['parent_id'=>2, 'name'=>"Сандалі та в'єтнамки",'img'=>"" ],
            ['parent_id'=>2, 'name'=>"Босоніжки",'img'=>"" ],
            ['parent_id'=>2, 'name'=>"Аксесуари для взуття",'img'=>"" ],
            ['parent_id'=>3, 'name'=>"",'img'=>"" ],

            ['parent_id'=>2, 'name'=>"",'img'=>"" ],
            ['parent_id'=>2, 'name'=>"",'img'=>"" ],
            ['parent_id'=>1, 'name'=>"Сумки і гаманці",'img'=>"" ],
            ['parent_id'=>1, 'name'=>"Догляд за одягом",'img'=>"" ],
            ['parent_id'=>1, 'name'=>"Косплей",'img'=>"" ],
            ['parent_id'=>1, 'name'=>"Одяг на весілля",'img'=>"" ],
            ['parent_id'=>1, 'name'=>"Мусульманський гардероб",'img'=>"" ],



//            ['parent_id'=>0, 'name'=>"",'img'=>"" ],
//            ['parent_id'=>0, 'name'=>"",'img'=>"" ],
//            ['parent_id'=>0, 'name'=>"",'img'=>"" ],
//            ['parent_id'=>0, 'name'=>"",'img'=>"" ],
//            ['parent_id'=>0, 'name'=>"",'img'=>"" ],
        ]);
    }
}
