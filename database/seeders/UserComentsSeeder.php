<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * @method static ordeBy(\Illuminate\Contracts\Database\Query\Expression $raw)
 * @method static where(\Illuminate\Contracts\Database\Query\Expression $raw)
 * @method static orderBy(\Illuminate\Contracts\Database\Query\Expression $raw)
 */
class UserComentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('truncate table user_coment');
        DB::table('user_coment')->insert([
            ['avatar'=>"https://avatars.joomcdn.net/0b18c3bdf2b842463f354dcb6c5a80775025fc08_100_100.jpeg",'name'=>"Наталка Т.",'data'=>"10 квітня", 'coment'=>"Дуже прикольний чохол, гарної якості. Довго йшов. Поки дійшов телефон продала🙈" , 'img'=>"", 'marks'=>5],
            ['avatar'=>"https://avatars.joomcdn.net/090f85b61e4908dcedcaa8fd5e0c5b6432be6879_original.jpeg",'name'=>"Любовь Удод",'data'=>"7 січня", 'coment'=>"Найкращій з усіх що я замовляла, і колір і якість! Дякую за швидку доставку. Рекомендую і продавця і товар. Товар повністю відповідає фото" , 'img'=>"", 'marks'=>4],
            ['avatar'=>"https://avatars.joomcdn.net/16714c73dcf5f12558a258287059c2017a931da3_100_100.jpeg",'name'=>"Мар'яна Смага",'data'=>"25 лютого", 'coment'=>"Чехлом донька задоволена.Цілком відповідає опису і фото магазину. Хоча думаю, що космонавт довго не протримається, якось так не дуже тримається" , 'img'=>"", 'marks'=>3],
            ['avatar'=>"https://avatars.joomcdn.net/719ca871507d186fc8a2bc57a8d3cc4cc8ce2cbf_100_100.jpeg",'name'=>"Валерія Шикалова",'data'=>"25 лютого", 'coment'=>"Дуже класні, замовляла одразу в двох кольорах На дотик якісні, добре упаковані. Доставка близько місяца до Львова" , 'img'=>"", 'marks'=>4],
            ['avatar'=>"",'name'=>"Покупець Joom",'data'=>"4 лютого", 'coment'=>"Чохол підійшов, доставка менше місяця. Досить тонкий силікон. Загалом якістю задоволена" , 'img'=>"", 'marks'=>1],
            ['avatar'=>"",'name'=>"Оксана Дрмбровская",'data'=>"22 травня", 'coment'=>"Чохол дуже крутий,м'який,виглядає дуже бомбезно,рекомендую однозначно." , 'img'=>"", 'marks'=>1],
            ['avatar'=>"https://avatars.joomcdn.net/9a1c8bf248cc5554282be91703957d445527a5e7_100_100.jpeg",'name'=>"Victoria Vitalievna",'data'=>"18 березня", 'coment'=>"Дуже класний та стильний чохол. Шикарно зроблений на свої гроші. Гарно прилягає до телефону,приємний на дотик Дуже задоволена,все як на фото. Продавця рекомендую." , 'img'=>"", 'marks'=>1],
            ['avatar'=>"",'name'=>"Покупець Joom",'data'=>"19 січня", 'coment'=>"Чехол прийшов рівно за місяць. Дууууже сподобався. Буду ще замовляти. Дякую" , 'img'=>"", 'marks'=>2],
        ]);
    }
}
