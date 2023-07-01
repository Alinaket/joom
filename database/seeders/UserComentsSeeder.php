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
            ['product_id'=>1,'avatar'=>"https://avatars.joomcdn.net/0b18c3bdf2b842463f354dcb6c5a80775025fc08_100_100.jpeg",'name'=>"Наталка Т.",'data'=>"10 квітня", 'coment'=>"Дуже прикольний чохол, гарної якості. Довго йшов. Поки дійшов телефон продала🙈" , 'img'=>"", 'marks'=>5],
            ['product_id'=>6,'avatar'=>"https://avatars.joomcdn.net/090f85b61e4908dcedcaa8fd5e0c5b6432be6879_original.jpeg",'name'=>"Любовь Удод",'data'=>"7 січня", 'coment'=>"Найкращій з усіх що я замовляла, і колір і якість! Дякую за швидку доставку. Рекомендую і продавця і товар. Товар повністю відповідає фото" , 'img'=>"", 'marks'=>4],
            ['product_id'=>5,'avatar'=>"https://avatars.joomcdn.net/16714c73dcf5f12558a258287059c2017a931da3_100_100.jpeg",'name'=>"Мар'яна Смага",'data'=>"25 лютого", 'coment'=>"Чехлом донька задоволена.Цілком відповідає опису і фото магазину. Хоча думаю, що космонавт довго не протримається, якось так не дуже тримається" , 'img'=>"", 'marks'=>3],
            ['product_id'=>3,'avatar'=>"https://avatars.joomcdn.net/719ca871507d186fc8a2bc57a8d3cc4cc8ce2cbf_100_100.jpeg",'name'=>"Валерія Шикалова",'data'=>"25 лютого", 'coment'=>"Дуже класні, замовляла одразу в двох кольорах На дотик якісні, добре упаковані. Доставка близько місяца до Львова" , 'img'=>"", 'marks'=>4],
            ['product_id'=>3,'avatar'=>"",'name'=>"Покупець Joom",'data'=>"4 лютого", 'coment'=>"Чохол підійшов, доставка менше місяця. Досить тонкий силікон. Загалом якістю задоволена" , 'img'=>"", 'marks'=>1],
            ['product_id'=>1,'avatar'=>"",'name'=>"Оксана Дрмбровская",'data'=>"22 травня", 'coment'=>"Чохол дуже крутий,м'який,виглядає дуже бомбезно,рекомендую однозначно." , 'img'=>"", 'marks'=>1],
            ['product_id'=>4,'avatar'=>"https://avatars.joomcdn.net/9a1c8bf248cc5554282be91703957d445527a5e7_100_100.jpeg",'name'=>"Victoria Vitalievna",'data'=>"18 березня", 'coment'=>"Дуже класний та стильний чохол. Шикарно зроблений на свої гроші. Гарно прилягає до телефону,приємний на дотик Дуже задоволена,все як на фото. Продавця рекомендую." , 'img'=>"", 'marks'=>1],
            ['product_id'=>6,'avatar'=>"",'name'=>"Покупець Joom",'data'=>"19 січня", 'coment'=>"Чехол прийшов рівно за місяць. Дууууже сподобався. Буду ще замовляти. Дякую" , 'img'=>"", 'marks'=>2],
            ['product_id'=>11,'avatar'=>"https://avatars.joomcdn.net/262baf6f9c760ab76e05772c8bd96f4069b18714_100_100.jpeg", 'data'=>"30 лютий", 'name'=>"Dariia Hnatenko", 'coment'=>"Однозначно рекомендую товар і продавця. Окуляри дуже хорошої якості, ризинка регулюється з обох сторін. Матеріал - пластик, але на вид не відрізниш від металу. Був невеликий дефект, але це не критично." , 'img'=>"", 'marks'=>2],
            ['product_id'=>11,'avatar'=>"https://avatars.joomcdn.net/5a499a98aba51657c06bb29ec6456b8e99c4d4f1_100_100.jpeg",'data'=>"9 липень",'name'=>"Enjoy Chan", 'coment'=>"Отличные , без дефектов. Сквозь линзу ничего не видно кстати !" , 'img'=>"", 'marks'=>2],
            ['product_id'=>11,'avatar'=>"https://avatars.joomcdn.net/55a3859f0753a2015c171306361620914609f36c_original.jpeg", 'data'=>"25 грудня",'name'=>"Иван Кукушкин", 'coment'=>"Очень не хватает мягких накладок. А так, вполне прикольные очки" , 'img'=>"", 'marks'=>2],
            ['product_id'=>11,'avatar'=>"https://avatars.joomcdn.net/aad1bb0760b474d6bea41c23f6255ad5d88bfcce_200_200.jpeg",'data'=>"5 листопада",'name'=>"Татьяна Андрушевич", 'coment'=>"Несмотря, что это пластики. Сделано очень качественно, смотрятся как настоящие. Царапин и недочётов нет. Резинка с фиксатором целы и работают." , 'img'=>"", 'marks'=>2],
            ['product_id'=>11,'avatar'=>"https://avatars.joomcdn.net/889ab316b5585a609f05791c262aca95b9a7c674_100_98.jpeg", 'data'=>"12 жовтня",'name'=>"Olga Fesay", 'coment'=>"Довольно интересные очки в стиле стимпанк. Взяла дочке для квестов и фотосессий. Не удержалась и тоже примерила.) Очки пластиковые, резинка регулируется. Линзы откручиваются. Стекла в очках достаточно темные, все в них смотрится в зеленых тонах. Не знаю как насчет использования их в качестве солнечных (все таки уф-фильтров в них явно нет), но для различных косплеев самое то! Продавец прислал их в мягком пакете, обернутыми упаковкой с пупырками. Все целое, не царапанное. Продавца и очки рекомендую. Спасибо Joom и продавцу!" , 'img'=>"", 'marks'=>2],
            ['product_id'=>11,'avatar'=>"https://avatars.joomcdn.net/d956816995dab504709374b1eece23f5ed0e416b_289e1de0be5a8d461502e4cb4f9128d30f235e4e_100_100.jpeg", 'data'=>"15 травня",'name'=>"Біловол Анна", 'coment'=>"Имба, шикарные" , 'img'=>"", 'marks'=>2],
//            ['product_id'=>11,'avatar'=>"",'name'=>"", 'coment'=>"" , 'img'=>"", 'marks'=>2],
        ]);
    }
}
