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

            ['parent_id'=>2, 'name'=>"Спортивний одяг",'img'=>"https://i.pinimg.com/564x/a1/d6/da/a1d6dad172bae0d2c6aa7cdad4b4d096.jpg"],
            ['parent_id'=>25, 'name'=>"Легінси та лосини",'img'=>""],
            ['parent_id'=>25, 'name'=>"Спортивні костюми",'img'=>"https://i.pinimg.com/564x/e0/03/75/e00375abe0b89d32a7fb14ec4b526042.jpg"],
            ['parent_id'=>25, 'name'=>"Спортивні топи",'img'=>""],
            ['parent_id'=>25, 'name'=>"Спортивні штани",'img'=>"https://i.pinimg.com/564x/e2/e2/76/e2e276e7ebabdf9f2a7482ce131bef39.jpg"],
            ['parent_id'=>25, 'name'=>"Термобілизна",'img'=>""],

            ['parent_id'=>2, 'name'=>"Блузки та сорочки",'img'=>"https://i.pinimg.com/564x/cf/3c/ee/cf3ceeecdbfbab9461eb0e3d85a289c9.jpg"],

            ['parent_id'=>2, 'name'=>"Теплий одяг",'img'=>"https://i.pinimg.com/564x/a4/9a/41/a49a418f134f545aa748e5e2d51aacad.jpg"],
            ['parent_id'=>32, 'name'=>"Толстовки та світшоти",'img'=>"https://i.pinimg.com/564x/0b/fb/d2/0bfbd2928cab00ca7483be352b90ba2d.jpg"],
            ['parent_id'=>32, 'name'=>"Пуловери і лонгсліви",'img'=>"https://i.pinimg.com/564x/6a/68/fe/6a68fee2f5fca07c09bf2d50435f02e1.jpg"],
            ['parent_id'=>32, 'name'=>"Светри",'img'=>"https://i.pinimg.com/564x/d1/59/0a/d1590ab841d14bddb1f134eca0b41608.jpg"],
            ['parent_id'=>32, 'name'=>"Кардигани",'img'=>"https://i.pinimg.com/564x/41/dd/b8/41ddb8ccbe0dc489fdce597529ed5dbc.jpg"],
            ['parent_id'=>32, 'name'=>"Трикотажні жилети",'img'=>"https://i.pinimg.com/564x/9b/de/74/9bde74445afe6782040227b3251cdb15.jpg"],
            ['parent_id'=>32, 'name'=>"Пончо",'img'=>""],

            ['parent_id'=>2, 'name'=>"Костюми та комбінезони",'img'=>"https://i.pinimg.com/564x/0a/33/67/0a33671b6f322f0cd0b5015b0fd7f06f.jpg"],
            ['parent_id'=>39, 'name'=>"Комбінезони",'img'=>"https://i.pinimg.com/564x/cf/64/ee/cf64ee30286198d4e32898b40ff58ccd.jpg"],
            ['parent_id'=>39, 'name'=>"Костюми зі штанами та шортами",'img'=>"https://i.pinimg.com/564x/fa/37/36/fa373681319200917dd26055fee6c858.jpg"],
            ['parent_id'=>39, 'name'=>"Костюми зі спідницями",'img'=>"https://i.pinimg.com/564x/3d/44/73/3d4473287b5eb1c9651faa086a49ed73.jpg"],
            ['parent_id'=>39, 'name'=>"Ділові костюми",'img'=>"https://i.pinimg.com/564x/2a/15/a3/2a15a319793d7f94ddafaba09a20df9f.jpg"],
            ['parent_id'=>39, 'name'=>"Костюми з сукнями",'img'=>""],


            ['parent_id'=>2, 'name'=>"Верхній одяг",'img'=>"https://i.pinimg.com/564x/5c/c6/09/5cc609ee729b771fffb93378a512aaf9.jpg"],
            ['parent_id'=>45, 'name'=>"Куртки",'img'=>"https://i.pinimg.com/736x/8b/89/7a/8b897a444f33522a8afc34fdbe866366.jpg"],
            ['parent_id'=>45, 'name'=>"Пуховики та парки",'img'=>"https://i.pinimg.com/564x/0e/57/0c/0e570c3925a5dde5f3d44a549de763ec.jpg"],
            ['parent_id'=>45, 'name'=>"Вітровки",'img'=>"https://i.pinimg.com/564x/70/6a/dd/706add1c8ec449d33f88d0d6d6c7e7cd.jpg"],
            ['parent_id'=>45, 'name'=>"Пальта",'img'=>"https://i.pinimg.com/564x/da/73/97/da7397b6a5f78bf123dc8ee4405ea385.jpg"],
            ['parent_id'=>45, 'name'=>"Плащі",'img'=>"https://i.pinimg.com/736x/95/b3/e4/95b3e44790855861c4eb870de6d24f22.jpg"],
            ['parent_id'=>45, 'name'=>"Жилети",'img'=>"https://i.pinimg.com/564x/88/e8/e5/88e8e506415e432f69bbb2efa874b0b3.jpg"],
            ['parent_id'=>45, 'name'=>"Верхній одяг з хутра",'img'=>"https://i.pinimg.com/564x/0c/98/37/0c9837a1901bef238314cdf185830c8e.jpg"],
            ['parent_id'=>45, 'name'=>"Джинсові куртки",'img'=>"https://i.pinimg.com/564x/36/34/83/363483f7fb974b7108de65ff6e773a36.jpg"],
            ['parent_id'=>45, 'name'=>"Верхній одяг зі шкіри",'img'=>"https://i.pinimg.com/564x/dc/1d/cd/dc1dcd98572434029ef170c4b25126cf.jpg"],

            ['parent_id'=>2, 'name'=>"Одяг для дому та сну",'img'=>"https://i.pinimg.com/564x/09/c0/10/09c01004f4c70abc146eded60647df99.jpg"],
            ['parent_id'=>55, 'name'=>"Піжами та комплекти для сну",'img'=>"https://i.pinimg.com/564x/e0/45/b1/e045b1966c2003e0244cb39c1b5a3d4f.jpg"],
            ['parent_id'=>55, 'name'=>"Нічні сорочки та пеньюари",'img'=>"https://i.pinimg.com/564x/8d/09/98/8d0998f6d1958e9ac3204c15ce0ee41b.jpg"],
            ['parent_id'=>55, 'name'=>"Халати та домашні костюми",'img'=>"https://i.pinimg.com/564x/3b/42/9e/3b429e4a8725bcd44893fd138196cc54.jpg"],
            ['parent_id'=>55, 'name'=>"Халати",'img'=>"https://i.pinimg.com/564x/d4/c7/43/d4c74310ea95946877793ce55c6e11fd.jpg"],

            ['parent_id'=>2, 'name'=>"Шкарпетки, панчохи, колготки",'img'=>"https://i.pinimg.com/564x/51/57/8e/51578ec0890ed9206205190da298e2b5.jpg"],
            ['parent_id'=>60, 'name'=>"Колготки",'img'=>""],
            ['parent_id'=>60, 'name'=>"Шкарпетки",'img'=>"https://i.pinimg.com/564x/20/91/ad/2091ad33c9048fdd90a2f006b1ae97d9.jpg"],
            ['parent_id'=>60, 'name'=>"Панчохи",'img'=>""],
            ['parent_id'=>60, 'name'=>"Сліди і підслідники",'img'=>""],
            ['parent_id'=>60, 'name'=>"Гетри, гольфи та гамаші",'img'=>""],

            ['parent_id'=>2, 'name'=>"Спідниці",'img'=>"https://i.pinimg.com/564x/59/d5/3e/59d53e6a304caa9c734653fa3ba05859.jpg"],
            ['parent_id'=>2, 'name'=>"Джинси",'img'=>"https://i.pinimg.com/564x/72/a6/1c/72a61ca58fa365a0e36b7759720dfea6.jpg"],
            ['parent_id'=>2, 'name'=>"Шорти",'img'=>"https://i.pinimg.com/564x/a1/a5/3d/a1a53d6bc452e8a1ef86fda5f44f1bdb.jpg"],
            ['parent_id'=>2, 'name'=>"Піджаки",'img'=>"https://i.pinimg.com/564x/e6/d5/58/e6d55810137416c986958e708745ab89.jpg"],

            ['parent_id'=>69, 'name'=>"Сукні та костюми",'img'=>"https://i.pinimg.com/736x/ed/bd/a3/edbda3ca4e17f192a222913c9e9d5358.jpg"],
            ['parent_id'=>70, 'name'=>"Сукні",'img'=>"https://i.pinimg.com/564x/64/52/8f/64528f2601e2ae5ff55dc738ded84695.jpg"],
            ['parent_id'=>70, 'name'=>"Костюми та комплекти",'img'=>"https://i.pinimg.com/564x/67/37/76/67377631826881ed630801babd95e84e.jpg"],

            ['parent_id'=>69, 'name'=>"",'img'=>""],
            ['parent_id'=>73, 'name'=>"",'img'=>""],
            ['parent_id'=>73, 'name'=>"",'img'=>""],
            ['parent_id'=>73, 'name'=>"",'img'=>""],
            ['parent_id'=>73, 'name'=>"",'img'=>""],
            ['parent_id'=>69, 'name'=>"",'img'=>""],
            ['parent_id'=>78, 'name'=>"",'img'=>""],
            ['parent_id'=>78, 'name'=>"",'img'=>""],
            ['parent_id'=>78, 'name'=>"",'img'=>""],
            ['parent_id'=>78, 'name'=>"",'img'=>""],
            ['parent_id'=>78, 'name'=>"",'img'=>""],


            ['parent_id'=>2, 'name'=>"Аксесуари",'img'=>"https://i.pinimg.com/564x/6a/1c/64/6a1c6454c4acf1232dfe81debc8648d0.jpg" ],
            ['parent_id'=>84, 'name'=>"Прикраси та біжутерія",'img'=>"https://i.pinimg.com/564x/6a/d9/1f/6ad91f7e7d431b9913cda6aa8d46a7b7.jpg" ],
            ['parent_id'=>84, 'name'=>"Сережки",'img'=>"https://i.pinimg.com/564x/2a/c9/07/2ac907d5f0d398755021ba7bf9dd5bb4.jpg" ],
            ['parent_id'=>86, 'name'=>"Висячі сережки",'img'=>"https://i.pinimg.com/564x/5f/cc/5f/5fcc5f8b73c20f70c9180b9c59c5b399.jpg" ],
            ['parent_id'=>86, 'name'=>"Сережки гвоздики",'img'=>"https://i.pinimg.com/736x/85/13/7a/85137a503e57bc920cdd85477e46288d.jpg" ],
            ['parent_id'=>86, 'name'=>"Сережки кільця",'img'=>"https://i.pinimg.com/564x/59/93/ee/5993eede1a31a0430e1f88ff37a06fcb.jpg" ],
            ['parent_id'=>86, 'name'=>"Кафи",'img'=>"https://i.pinimg.com/564x/c3/d7/d5/c3d7d5104cb2f4ebdea6ecf25fa9adeb.jpg" ],
            ['parent_id'=>86, 'name'=>"Сережки-кліпси",'img'=>"https://i.pinimg.com/564x/5c/06/24/5c062416d98738519359c08b9c122616.jpg" ],
            ['parent_id'=>86, 'name'=>"Сережки-магніти",'img'=>"" ],

            ['parent_id'=>84, 'name'=>"Каблучки",'img'=>"https://i.pinimg.com/564x/24/9a/26/249a2644e58c8084648028f744b47e9a.jpg" ],
            ['parent_id'=>93, 'name'=>"Жіночі каблучки",'img'=>"https://i.pinimg.com/564x/39/11/14/39111403ff7ae0128fef378988371949.jpg" ],
            ['parent_id'=>93, 'name'=>"Чоловічі каблучки",'img'=>"https://i.pinimg.com/564x/ca/fb/74/cafb742b4863017b3926ceee76adaf70.jpg" ],
            ['parent_id'=>93, 'name'=>"Унісекс каблучки",'img'=>"https://content2.rozetka.com.ua/goods/images/big/192769507.jpg" ],
            ['parent_id'=>93, 'name'=>"Весільні каблучки",'img'=>"https://i.pinimg.com/564x/3a/2d/16/3a2d1630717e1007a12b09dfe426a217.jpg" ],
            ['parent_id'=>93, 'name'=>"Обручки",'img'=>"https://i.pinimg.com/564x/d0/0f/b7/d00fb75a97bbaf1821258c24d69caa05.jpg" ],


            ['parent_id'=>84, 'name'=>"Намиста і підвіски",'img'=>"https://i.pinimg.com/564x/fe/73/15/fe7315a9a8aa53c5ac583610185ad0cd.jpg" ],
            ['parent_id'=>99, 'name'=>"Намиста та кольє",'img'=>"https://i.pinimg.com/564x/a3/45/ff/a345ff2f7c47dec3985c7e05b3c2fb57.jpg" ],
            ['parent_id'=>99, 'name'=>"Кулони та підвіски",'img'=>"https://i.pinimg.com/564x/a0/ff/1e/a0ff1efbf649c7265ad0256377402c0e.jpg" ],
            ['parent_id'=>99, 'name'=>"Ланцюжки на шию",'img'=>"" ],
            ['parent_id'=>99, 'name'=>"Чокери",'img'=>"https://i.pinimg.com/564x/00/be/53/00be53a04c144a91978f6d3cec0316b0.jpg" ],
            ['parent_id'=>99, 'name'=>"Ланцюжки для чоловіків",'img'=>"" ],
            ['parent_id'=>99, 'name'=>"Аксесуари на комір",'img'=>"https://i.pinimg.com/564x/3b/66/5d/3b665d82e300d97ff4f132744558b345.jpg" ],

            ['parent_id'=>84, 'name'=>"Браслети",'img'=>"https://i.pinimg.com/736x/36/d0/98/36d0980fc5c071fc1857e61017fd4861.jpg" ],
            ['parent_id'=>106, 'name'=>"Чоловічі браслети",'img'=>"https://i.pinimg.com/564x/ff/ce/8b/ffce8b7175e0eeacb4799cf37bff79d6.jpg" ],
            ['parent_id'=>106, 'name'=>"Багатоскладові браслети",'img'=>"https://i.pinimg.com/564x/f7/5a/a7/f75aa7a23f2f99fc195a78de523f644d.jpg" ],
            ['parent_id'=>106, 'name'=>"Браслети-ланцюги",'img'=>"https://i.pinimg.com/564x/e3/db/2c/e3db2cda55a06ce17894bf42eb788385.jpg" ],
            ['parent_id'=>106, 'name'=>"Плетені та кручені браслети",'img'=>"https://i.pinimg.com/736x/e6/19/4d/e6194d2efdf32217529fded2ce90923a.jpg" ],
            ['parent_id'=>106, 'name'=>"Манжетні браслети",'img'=>"https://i.pinimg.com/564x/ee/5e/03/ee5e03cf0878e3d9f73e4c2bcdd6df40.jpg" ],
            ['parent_id'=>106, 'name'=>"Браслети на ногу",'img'=>"https://i.pinimg.com/564x/b9/f2/b9/b9f2b9f906e5698f7bf85b07de015ef8.jpg" ],
            ['parent_id'=>106, 'name'=>"Браслети-шарми",'img'=>"https://i.pinimg.com/564x/00/59/ff/0059ffe3b44c34ee103e69d3368811a5.jpg" ],

            ['parent_id'=>84, 'name'=>"Брошки і прикраси на тіло",'img'=>"https://i.pinimg.com/564x/7d/10/a0/7d10a0e95f1961765b6fb499608fde7d.jpg" ],
            ['parent_id'=>84, 'name'=>"Набори ювелірних виробів",'img'=>"https://i.pinimg.com/564x/9d/1a/d4/9d1ad4b14bd75b1bebcdf08697c10523.jpg" ],

            ['parent_id'=>84, 'name'=>"Пірсинг",'img'=>"https://i.pinimg.com/564x/3d/13/36/3d133633de75ac3394f4aaad9765cf83.jpg" ],
            ['parent_id'=>116, 'name'=>"Пірсинг на тілі",'img'=>"https://i.pinimg.com/564x/61/8a/35/618a35c557f4cadf4f2d88c158fb604a.jpg" ],
            ['parent_id'=>116, 'name'=>"Пірсинг вух",'img'=>"https://i.pinimg.com/564x/3b/af/3f/3baf3f145dcf488945500ceecf221866.jpg" ],
            ['parent_id'=>116, 'name'=>"Тунелі",'img'=>"https://i.pinimg.com/564x/71/64/d9/7164d9940e2b47bc89349ac46d21d5dd.jpg" ],

            ['parent_id'=>84, 'name'=>"Прикраси на весілля та заручення",'img'=>"https://i.pinimg.com/564x/23/b6/fe/23b6fe5528e96e410ab5db61cfc46a5e.jpg" ],
            ['parent_id'=>120, 'name'=>"Весільні каблучки",'img'=>"https://i.pinimg.com/564x/1a/f0/6d/1af06d9b7dd0622b5329ef5005e7cbee.jpg" ],
            ['parent_id'=>120, 'name'=>"Обручки",'img'=>"https://i.pinimg.com/564x/50/be/26/50be26771850a48652bbdcbd57fee36c.jpg" ],
            ['parent_id'=>120, 'name'=>"Ювелірні прикраси для наречених",'img'=>"https://i.pinimg.com/564x/59/29/25/592925f8b1952802843a82be14088d6b.jpg" ],

            ['parent_id'=>84, 'name'=>"Прикраси для волосся",'img'=>"https://i.pinimg.com/564x/d2/71/29/d271298dea0da73b6b24d8aaf5f9012d.jpg" ],
            ['parent_id'=>84, 'name'=>"Амулети",'img'=>"https://i.pinimg.com/564x/92/6b/53/926b5327554483050890f63b95bd7c98.jpg" ],
            ['parent_id'=>84, 'name'=>"Запонки, затискачі",'img'=>"https://i.pinimg.com/564x/b2/c8/7f/b2c87f98129a83b12a3037788acecf53.jpg" ],

            ['parent_id'=>2, 'name'=>"Окуляри та аксесуари",'img'=>"https://i.pinimg.com/564x/5a/a4/65/5aa465a17e70877d819555bc8c94b6c5.jpg" ],
            ['parent_id'=>127, 'name'=>"Окуляри для читання",'img'=>"https://optika.lviv.ua/wp-content/uploads/2020/02/chy-mozhna-okulyary-dlya-chytannya-nosyty-postijno.jpg" ],
            ['parent_id'=>127, 'name'=>"Сонцезахисні окуляри",'img'=>"https://i.pinimg.com/736x/bd/62/57/bd62576de37a8893589d329dd2437567.jpg" ],
            ['parent_id'=>127, 'name'=>"Аксесуари для окулярів",'img'=>"https://i.pinimg.com/564x/de/f3/6d/def36df604f84186104026611464e963.jpg" ],

            ['parent_id'=>2, 'name'=>"Годинники та аксесуари",'img'=>"https://i.pinimg.com/564x/b8/10/fb/b810fb48b47b7caa8f0f1c42223149a5.jpg" ],
            ['parent_id'=>131, 'name'=>"Годинники",'img'=>"https://i.pinimg.com/564x/ad/f0/18/adf0187342051cb2e28d28c0175d3ec3.jpg" ],
            ['parent_id'=>132, 'name'=>"Кварцові",'img'=>"https://i.pinimg.com/564x/0f/c6/ec/0fc6ecf4121c370440dbc6dd89363ce3.jpg" ],
            ['parent_id'=>132, 'name'=>"Електронні",'img'=>"https://appleroom.ua/wa-data/public/shop/products/96/40/14096/images/27241/27241.750.png" ],
            ['parent_id'=>132, 'name'=>"Годинники-браслети",'img'=>"https://i.pinimg.com/564x/c2/a8/3c/c2a83c986f5443888e69a4b028bfc09e.jpg" ],
            ['parent_id'=>132, 'name'=>"Механічні",'img'=>"https://cdn.27.ua/sc--media--prod/default/90/9d/41/909d4189-cbe8-4577-a055-13fea918bd14.jpg" ],
            ['parent_id'=>132, 'name'=>"Кишенькові годинники",'img'=>"https://fs1.secunda.com.ua/content/news/a10853/GetFile.jpg" ],
            ['parent_id'=>132, 'name'=>"Спортивні",'img'=>"https://i.pinimg.com/564x/b3/ea/b7/b3eab72a16704a2e29fc0a8859bcfd72.jpg" ],
            ['parent_id'=>132, 'name'=>"Парні годинники для закоханих",'img'=>"https://i.pinimg.com/564x/e4/df/df/e4dfdf5e19efc0091bc211210a27fa83.jpg" ],

            ['parent_id'=>131, 'name'=>"Аксесуари для годинників",'img'=>"https://style-time.net/content/images/24/500x500l80mc0/88231695081086.webp" ],
            ['parent_id'=>140, 'name'=>"Ремінці для годинників",'img'=>"https://content.rozetka.com.ua/goods/images/big/267280582.jpg" ],
            ['parent_id'=>140, 'name'=>"Інструменти та комплекти для ремонту",'img'=>"https://content1.rozetka.com.ua/goods/images/big/229587354.jpg" ],
            ['parent_id'=>140, 'name'=>"Батарейки",'img'=>"https://i.pinimg.com/564x/b4/ed/8a/b4ed8a793bc624ab56452176595665dd.jpg" ],
            ['parent_id'=>140, 'name'=>"Футляри",'img'=>"https://alegria.com.ua/content/images/50/900x675l80mc0/futlyar-dlya-chasov-salvadore-pb-3620-3.bl-62064066323692.webp" ],
            ['parent_id'=>140, 'name'=>"Циферблати",'img'=>"https://i.pinimg.com/564x/93/dc/d2/93dcd2181e268159a4846cceef64d734.jpg" ],
            ['parent_id'=>140, 'name'=>"Ланцюжки для кишенькових годинників",'img'=>"https://st.violity.com/auction/big/auctions/13/86/62/3/138662371.jpg" ],

            ['parent_id'=>131, 'name'=>"Брендові годинники",'img'=>"https://i.pinimg.com/564x/28/bc/8c/28bc8cd4ed9467f7dd436ac784a23f25.jpg" ],

            ['parent_id'=>2, 'name'=>"Аксесуари для волосся",'img'=>"https://i.pinimg.com/564x/d9/49/49/d9494959b217cb0fd9f7ae1b17f2667e.jpg" ],
            ['parent_id'=>148, 'name'=>"Шпильки",'img'=>"https://i.pinimg.com/564x/ed/4b/31/ed4b316eef48c25eef7786442ce25201.jpg" ],
            ['parent_id'=>148, 'name'=>"Прикраси",'img'=>"https://i.pinimg.com/564x/23/8a/90/238a90242200d68a31c44c801a24bcec.jpg" ],
            ['parent_id'=>148, 'name'=>"Резинки",'img'=>"https://i.pinimg.com/564x/44/e9/d6/44e9d6853ff139de593aa320b4966459.jpg" ],
            ['parent_id'=>148, 'name'=>"Пов'язки",'img'=>"https://i.pinimg.com/564x/7c/cc/aa/7cccaa8c3669287e6eb9c5a0734b8774.jpg" ],
            ['parent_id'=>148, 'name'=>"Обідки",'img'=>"https://i.pinimg.com/564x/cd/83/1d/cd831d28e902a1adb7d47027fcf74e1e.jpg" ],
            ['parent_id'=>148, 'name'=>"Гребені",'img'=>"https://i.pinimg.com/564x/43/ca/d9/43cad9ca354bbc37caaa976ef448ef56.jpg" ],

            ['parent_id'=>2, 'name'=>"Ремені та пояси",'img'=>"https://i.pinimg.com/564x/8a/47/f2/8a47f2309bc161e07074d30e8810c16f.jpg" ],
            ['parent_id'=>155, 'name'=>"Ремені та пояси",'img'=>"https://i.pinimg.com/564x/23/5a/18/235a18a7b854305680ba600554a58a33.jpg" ],
            ['parent_id'=>155, 'name'=>"Портупеї",'img'=>"" ],
            ['parent_id'=>155, 'name'=>"Підтяжки",'img'=>"https://i.pinimg.com/564x/86/8d/40/868d40aa2941c9fb542782ec4c2af81e.jpg" ],

            ['parent_id'=>2, 'name'=>"Головні убори",'img'=>"https://i.pinimg.com/564x/35/e0/d1/35e0d10415f4402f0fa9d7b840838baf.jpg" ],
            ['parent_id'=>159, 'name'=>"Панами, кепки, козирки",'img'=>"https://i.pinimg.com/564x/cf/62/50/cf625017398338adafcad053cc0ebfe5.jpg" ],
            ['parent_id'=>160, 'name'=>"Кепі",'img'=>"https://i.pinimg.com/564x/e4/3b/69/e43b69564d155a310c1dbd7c79c0a9eb.jpg" ],
            ['parent_id'=>160, 'name'=>"Панами",'img'=>"https://i.pinimg.com/564x/a5/61/48/a56148fbfda3236adfb4fb52b166bc25.jpg" ],
            ['parent_id'=>160, 'name'=>"Бандани",'img'=>"https://i.pinimg.com/736x/09/b0/20/09b0209983b2390d89da8a30b1b53139.jpg" ],
            ['parent_id'=>160, 'name'=>"Козирки",'img'=>"https://i.pinimg.com/564x/27/58/0a/27580a4a0bd15ce5d12d132d802a2fcd.jpg" ],


            ['parent_id'=>159, 'name'=>"В'язані та тканинні шапки",'img'=>"https://i.pinimg.com/564x/d7/22/99/d7229907fbf1e1d41041249c6f9783ff.jpg" ],

            ['parent_id'=>159, 'name'=>"Капелюхи",'img'=>"https://i.pinimg.com/564x/df/fd/96/dffd96e3b4b93700a4e631a8204c4676.jpg" ],
            ['parent_id'=>166, 'name'=>"Літні капелюхи",'img'=>"https://i.pinimg.com/564x/42/59/d7/4259d79e24c06aba03434fe6518f20d8.jpg" ],
            ['parent_id'=>166, 'name'=>"Фетрові капелюхи",'img'=>"https://i.pinimg.com/564x/04/ef/2f/04ef2f036616f10571e587eda9a644d1.jpg" ],
            ['parent_id'=>166, 'name'=>"Ковбойські капелюхи",'img'=>"https://i.pinimg.com/236x/ab/d1/97/abd1977c714fb79d944c4144f5c3147c.jpg" ],

            ['parent_id'=>159, 'name'=>"Берети і кепі",'img'=>"https://i.pinimg.com/564x/06/cc/66/06cc66e59686bd765cc0e0b8f3784167.jpg" ],
            ['parent_id'=>159, 'name'=>"Набори шарфів, шапок та рукавичок",'img'=>"https://i.pinimg.com/564x/8b/7c/bd/8b7cbd692602b65ba1528f1bd2b2c717.jpg" ],
            ['parent_id'=>159, 'name'=>"Шапки-вушанки",'img'=>"https://i.pinimg.com/564x/0e/b6/95/0eb695008d3974f6f5d58834b45db9b8.jpg" ],
            ['parent_id'=>159, 'name'=>"Теплі навушники",'img'=>"https://i.pinimg.com/564x/68/ae/a3/68aea3f96ac19ae15249b393b7fbd722.jpg" ],

            ['parent_id'=>2, 'name'=>"Шарфи та хустки",'img'=>"https://i.pinimg.com/564x/2a/29/b0/2a29b02f77753313af99d99bcb79e69d.jpg" ],
            ['parent_id'=>174, 'name'=>"Шарфи та хустки",'img'=>"https://i.pinimg.com/564x/b4/2a/80/b42a8038b29e49a54be4dc3fa0b945dc.jpg" ],
            ['parent_id'=>174, 'name'=>"Мусульманські хустки",'img'=>"https://ichef.bbci.co.uk/news/640/cpsprodpb/11416/production/_93887607_72e7131e-5504-42d2-9d54-f5e87d717646.jpg" ],
            ['parent_id'=>174, 'name'=>"Жіночі краватки",'img'=>"https://i.pinimg.com/564x/36/c7/ec/36c7ecb27f7668f222218720562e29a5.jpg" ],
            ['parent_id'=>174, 'name'=>"Набори шарфів, шапок та рукавичок",'img'=>"https://ireland.apollo.olxcdn.com/v1/files/vu4hhm1oab0u2-UA/image;s=1080x959" ],

            ['parent_id'=>2, 'name'=>"Весільні аксесуари",'img'=>"https://i.pinimg.com/736x/e0/f5/41/e0f5417f99de465f241b106711b33a72.jpg" ],
            ['parent_id'=>197, 'name'=>"Прикраси на весілля та заручення",'img'=>"" ],
            ['parent_id'=>180, 'name'=>"Весільні каблучки",'img'=>"https://i.pinimg.com/564x/e1/cb/95/e1cb95727be2dbb5a69c571086c18ebc.jpg" ],
            ['parent_id'=>180, 'name'=>"Обручки",'img'=>"https://i.pinimg.com/564x/c4/dd/f3/c4ddf36284f461143ccbe6aeececa33c.jpg" ],
            ['parent_id'=>180, 'name'=>"Ювелірні прикраси для наречених",'img'=>"https://i.pinimg.com/564x/59/29/25/592925f8b1952802843a82be14088d6b.jpg" ],
            ['parent_id'=>180, 'name'=>"Ювелірні прикраси для наречених",'img'=>"" ],

            ['parent_id'=>197, 'name'=>"Прикрашання весіль",'img'=>"https://i.pinimg.com/564x/7b/db/76/7bdb76f32cf67bafc22dd2097177ea75.jpg" ],
            ['parent_id'=>197, 'name'=>"Пояси для наречених",'img'=>"https://i.pinimg.com/564x/82/eb/51/82eb514e3da33c0432503d44e437e834.jpg" ],
            ['parent_id'=>197, 'name'=>"Нижня спідниця",'img'=>"https://i.pinimg.com/564x/49/a7/5e/49a75e8365112fc8a327c797ab54b7ad.jpg" ],
            ['parent_id'=>197, 'name'=>"Весільні рукавички",'img'=>"https://i.pinimg.com/564x/7a/48/5d/7a485d7d08b8b7e585d56e3d29b42919.jpg" ],
            ['parent_id'=>197, 'name'=>"Весільні прикраси для машин",'img'=>"https://i.pinimg.com/564x/5e/40/a8/5e40a8007c11641fc86dc2345c18cbd0.jpg" ],
            ['parent_id'=>197, 'name'=>"Весільні кошики",'img'=>"https://i.pinimg.com/564x/61/08/13/610813318569eb56dbb42c1a7d829a17.jpg" ],
            ['parent_id'=>197, 'name'=>"Весільні букети",'img'=>"https://i.pinimg.com/564x/22/6a/5e/226a5e4d057cb518272228bc03bd9e8e.jpg" ],
            ['parent_id'=>197, 'name'=>"Весільні підв'язки",'img'=>"https://i.pinimg.com/564x/e4/92/ba/e492ba3bba2d0299ed2e358fdd8fa4b0.jpg" ],
            ['parent_id'=>197, 'name'=>"Весільні подушки",'img'=>"https://i.pinimg.com/564x/83/73/09/83730990ce044e188a6c9f173ac2cb5f.jpg" ],
            ['parent_id'=>197, 'name'=>"Пелюстки троянд для весіль",'img'=>"https://i.pinimg.com/564x/84/9f/77/849f77890b2d57ea8ed3e789fae062dd.jpg" ],
            ['parent_id'=>197, 'name'=>"Бутоньєрки",'img'=>"https://i.pinimg.com/564x/a4/fc/39/a4fc39c1a06be2a421243aa934e2dbd5.jpg" ],
            ['parent_id'=>197, 'name'=>"Весільні капелюшки",'img'=>"https://i.pinimg.com/564x/5f/e3/3c/5fe33c500ff5959eff99bda63ad1d952.jpg" ],
            ['parent_id'=>197, 'name'=>"Фата",'img'=>"https://i.pinimg.com/564x/ea/21/d4/ea21d4e91b3072c1a551aaac4a6654b1.jpg" ],
            ['parent_id'=>197, 'name'=>"Весільні парасольки",'img'=>"https://ua.all.biz/img/ua/catalog/1302243.jpg" ],

            ['parent_id'=>2, 'name'=>"Рукавички та рукавиці",'img'=>"https://i.pinimg.com/564x/99/55/be/9955be1104c44df42d2aece9dd7f850d.jpg" ],
            ['parent_id'=>199, 'name'=>"Рукавички, рукавиці та мітенки",'img'=>"https://i.pinimg.com/564x/8b/38/21/8b3821be4d3b03b98017d608a1708c50.jpg" ],
            ['parent_id'=>199, 'name'=>"Набори шарфів, шапок та рукавичок",'img'=>"https://i.pinimg.com/564x/f7/e9/2e/f7e92edee79aadadc76baa94de02b560.jpg" ],

            ['parent_id'=>2, 'name'=>"Зонти та дощовики",'img'=>"https://i.pinimg.com/564x/e8/c4/46/e8c44618607172efc81d553b9a6ce5e7.jpg" ],
            ['parent_id'=>202, 'name'=>"Парасольки",'img'=>"https://i.pinimg.com/564x/8c/a1/17/8ca1171395cda62978a9d4cd6de6d472.jpg" ],
            ['parent_id'=>202, 'name'=>"Дощовики",'img'=>"https://i.pinimg.com/564x/4e/9f/3b/4e9f3b9441939e5c7b5ea8885fc37633.jpg" ],

            ['parent_id'=>2, 'name'=>"Віяла",'img'=>"https://i.pinimg.com/564x/af/c3/7c/afc37c42b7ff96d32856a993f862c798.jpg" ],
            ['parent_id'=>2, 'name'=>"Fashion-маски",'img'=>"https://i.pinimg.com/564x/31/be/c4/31bec4c55e7bdf87079c4d2a30c4bc94.jpg" ],


            ['parent_id'=>1, 'name'=>"Великі розміри",'img'=>"" ],

            ['parent_id'=>1, 'name'=>"Взуття",'img'=>"https://i.pinimg.com/564x/06/4c/d0/064cd0005b75b5f30ef76f1430ba8948.jpg" ],
            ['parent_id'=>2, 'name'=>"Кросівки",'img'=>"https://i.pinimg.com/564x/af/da/bd/afdabda8f35bf5ec67cffd64256c6556.jpg" ],
            ['parent_id'=>2, 'name'=>"Сандалі та в'єтнамки",'img'=>"https://i.pinimg.com/564x/e7/06/71/e70671a50b260c9528babb1a53b8c521.jpg" ],
            ['parent_id'=>2, 'name'=>"Босоніжки",'img'=>"https://i.pinimg.com/564x/60/6f/9d/606f9d3a071d2ed1c7eb427109478236.jpg" ],
            ['parent_id'=>2, 'name'=>"Аксесуари для взуття",'img'=>"https://i.pinimg.com/564x/4d/4c/de/4d4cdef42b136dfbdf4c8d365f306c05.jpg" ],
//            ['parent_id'=>3, 'name'=>"",'img'=>"" ],

//            ['parent_id'=>2, 'name'=>"",'img'=>"" ],
//            ['parent_id'=>2, 'name'=>"",'img'=>"" ],
            ['parent_id'=>1, 'name'=>"Сумки і гаманці",'img'=>"https://i.pinimg.com/564x/ff/2b/0a/ff2b0a4686283180a1b829c88c08b8e9.jpg" ],
            ['parent_id'=>1, 'name'=>"Догляд за одягом",'img'=>"" ],
            ['parent_id'=>1, 'name'=>"Косплей",'img'=>"https://i.pinimg.com/564x/65/49/9b/65499bf3c35c2e27001568438d6d0d6d.jpg" ],
            ['parent_id'=>1, 'name'=>"Одяг на весілля",'img'=>"https://i.pinimg.com/564x/d0/b4/18/d0b41873bd95d1eaca16c2835482115d.jpg" ],
            ['parent_id'=>1, 'name'=>"Мусульманський гардероб",'img'=>"https://i.pinimg.com/564x/f1/db/82/f1db8286e3fc96c3912043bb1ecfa5f7.jpg" ],





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
