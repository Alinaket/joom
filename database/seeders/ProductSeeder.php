<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('truncate table products ');
        DB::table('products')->insert([
            ['img'=>"https://img.joomcdn.net/ab2d7a9009cf99645b284a738a72ac807c3118ae_original.jpeg", 'sale'=>"60",'price'=>"1 685", 'price_sale'=>"674", 'star'=>"4,6",'name'=>" Корейська особистість Пари Тапочки на відкритій товстій підошві Капці Без ковзання Тапочки на товстій підошві Чоловічі босоніжки мода тапочки чоловічі великі36-45Казальні босоніжки"],
            ['img'=>"https://img.joomcdn.net/952465d52acdfb4ce21e5aaa4467c5dc5299df2a_original.jpeg", 'sale'=>"70",'price'=>"570", 'price_sale'=>"171", 'star'=>"4,7",'name'=>" На день народження Різдвяний подарунок Тварина лялька плюшева моделювання плюшевий сплячий кіт зі звуком дитяч",],
            ['img'=>"https://img.joomcdn.net/f878344af4957e897ffd1f4ea3899449d800b904_original.jpeg", 'sale'=>"31",'price'=>"237", 'price_sale'=>"159", 'star'=>"4,7",'name'=>"Для корпусу iPhone 3D Astronaut складаний чохол-тримач стійки для",],
            ['img'=>"https://img.joomcdn.net/6c0ccc2a55c87e044ade226aa7aab894cbfbf73e_original.jpeg", 'sale'=>"35",'price'=>"2 070", 'price_sale'=>"1 340", 'star'=>"4.8",'name'=>"PC Ігрова гарнітура дівчата Рожеве котяче вухо Дротові стерео",],
            ['img'=>"https://img.joomcdn.net/be9b0309c3e57ed2897d8e0ed702833bdeafcddb_original.jpeg", 'sale'=>"61",'price'=>"1 772,50 ", 'price_sale'=>"696 ", 'star'=>"4,3",'name'=>"Професійна світлодіодна світлова ігрова гарнітура для комп'ютерни",],
            ['img'=>"https://img.joomcdn.net/727e150286c838da1d846199a9d7546fed52d812_original.jpeg", 'sale'=>"71",'price'=>"190", 'price_sale'=>"56", 'star'=>"4,6",'name'=>"Титан нержавіюча сталь ланцюга лічильник кільце для чоловіків Синій Золотий чорний панк-рок кільця",],
            ['img'=>"https://img.joomcdn.net/bddc5c052dcb58fde860b59ce7ea2463b89fd966_original.jpeg", 'sale'=>"60",'price'=>"635", 'price_sale'=>"254", 'star'=>"4,6",'name'=>"Жінки футболки Аніме Мій герой Академії Shoto Todoroki друк Tshirt Літо",],
            ['img'=>"https://img.joomcdn.net/637bac8bba99ef30c2f45614d7a802c6a1810044_original.jpeg", 'sale'=>"70",'price'=>"293,33", 'price_sale'=>"88", 'star'=>"4,8",'name'=>"Вбивця акрилових демонів Кімецу Но Яйба Танджіру Аніме Крапля Сережки",],
            ['img'=>"https://img.joomcdn.net/31ccdffc2dd0b6cd2cb39abc647ff715fbd76efe_original.jpeg", 'sale'=>"60",'price'=>"2 330", 'price_sale'=>"932", 'star'=>"",'name'=>"Книга Ванітаса 1773 Аніме-фігура Тематичне дослідження фігурки Ванітас",],
            ['img'=>"https://img.joomcdn.net/303f1da325a50b59fd242d43674ec89737e2e712_original.jpeg", 'sale'=>"40",'price'=>"1 016", 'price_sale'=>"590", 'star'=>"5",'name'=>"Aosiwig Хеллоуїн Відьма Капелюх дорослий в'яже в'язання гачком",],


            ['img'=>"https://img.joomcdn.net/2d2d09154670abe9e66de6ff6d6477d2e3203e69_original.jpeg", 'sale'=>"69",'price'=>"451", 'price_sale'=>"150 ", 'star'=>"4.7",'name'=>"Сонцезахисні окуляри Vintage стімпанк окуляри зварювання панк окуляри Косплей",],
            ['img'=>"https://img.joomcdn.net/eb008b9e4848ce377b195d2520220c58cc9c79c2_original.jpeg", 'sale'=>"70",'price'=>"183,33", 'price_sale'=>"55", 'star'=>"4.4",'name'=>"Висока якість браслети з нержавіючої сталі для чоловіків порожній колір панк приборка",],
            ['img'=>"https://img.joomcdn.net/01a20a845e0d4da2176bd332f72225540561c474_original.jpeg", 'sale'=>"63",'price'=>"230", 'price_sale'=>"205", 'star'=>"4.5",'name'=>"A6S Pro TWS навушники Bluetooth 5.0 Бездротова музика навушники",],
            ['img'=>"https://img.joomcdn.net/1791c2953af47e9287cf080402aa1e0a9847ddb2_original.jpeg", 'sale'=>"2",'price'=>"179", 'price_sale'=>"175", 'star'=>"4.7",'name'=>"Міні-відкритий ніж Нержавіюча сталь Подорож Орел Кіготь у формі кемпінгу Інструмент виживання",],
            ['img'=>"https://img.joomcdn.net/a4aacf498fc3ee1c0ae1e65ac163d83bd3b256f2_original.jpeg", 'sale'=>"71",'price'=>"485", 'price_sale'=>"175", 'star'=>"4,8",'name'=>"5Pairs Жіночі весна і літо Нові короткі бавовняні шкарпетки Японський солодкий повсякде",],
//            ['img'=>"", 'sale'=>"",'price'=>"", 'price_sale'=>"", 'star'=>"",'name'=>"",],
//            ['img'=>"", 'sale'=>"",'price'=>"", 'price_sale'=>"", 'star'=>"",'name'=>"",],
//            ['img'=>"", 'sale'=>"",'price'=>"", 'price_sale'=>"", 'star'=>"",'name'=>"",],
//            ['img'=>"", 'sale'=>"",'price'=>"", 'price_sale'=>"", 'star'=>"",'name'=>"",],
//            ['img'=>"", 'sale'=>"",'price'=>"", 'price_sale'=>"", 'star'=>"",'name'=>"",],
//
//
//            ['img'=>"", 'sale'=>"",'price'=>"", 'price_sale'=>"", 'star'=>"",'name'=>"",],

        ]);
    }
}
