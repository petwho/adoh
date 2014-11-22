<?php

class DatabaseSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Eloquent::unguard();

    $this->call('UserTableSeeder');
    $this->call('GalleriesTableSeeder');
    $this->call('PostsTableSeeder');
    $this->call('ArticlesTableSeeder');
    $this->command->info('All tables seeded!');
  }

}

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
          'username' => 'trankhanh',
          'email' => 'trankhanh.tk.tk@gmail.com',
          'password' => Hash::make('abcdabcd')));
    }

}

class GalleriesTableSeeder extends Seeder {

  public function run()
  {
    DB::table('galleries')->delete();

    DB::table('galleries')->insert(array(
      array(
        'id' => 1,
        'title' => 'Graphic Gallery',
        'subtitle' => 'Graphic.',
        'summary' => 'Graphic Lorem ipsum Excepteur velit dolor sit eiusmod magna sunt sed dolor dolore laborum Duis id id sed minim laboris in ea nostrud.',
        'content' => 'Lorem ipsum Ullamco consequat amet laboris enim aute enim officia commodo aliquip in ad esse dolor nulla reprehenderit fugiat nostrud esse nulla eu laborum dolor anim velit anim ullamco dolor sint id dolor anim exercitation.<br>Lorem ipsum Exercitation sit quis dolore aliqua sed dolor amet ut fugiat reprehenderit officia exercitation elit culpa dolor dolor aute eu deserunt consectetur in nulla minim minim deserunt qui sit veniam ad fugiat aliqua non in veniam Duis ea eu exercitation qui consequat laborum ut id eu reprehenderit ea quis et adipisicing officia labore ad ex aliqua eiusmod irure eiusmod id dolore dolor sunt qui Excepteur enim irure officia amet amet mollit dolore ut dolor in qui sunt pariatur ea non culpa irure exercitation velit sit eiusmod do in nulla ut aliqua aliquip cupidatat esse esse eiusmod qui tempor culpa mollit amet aliquip Duis deserunt quis ad nulla dolor deserunt qui veniam mollit aute ea proident consectetur dolor elit nulla incididunt aliqua dolor non dolore ad adipisicing reprehenderit nisi irure amet velit ut commodo magna ullamco aute tempor in eu in ut adipisicing id voluptate ut Excepteur ea aliquip nulla voluptate eu exercitation Ut est cillum magna dolor do cillum proident laboris ullamco id ad eu nisi pariatur in dolor dolor irure Ut incididunt proident non eiusmod esse Duis Ut sed eiusmod sit pariatur laboris esse fugiat dolore Excepteur in aute anim pariatur laborum tempor ut velit labore reprehenderit velit labore aliqua dolor ut laboris ullamco ullamco aute amet esse est irure qui esse in sed commodo nulla esse aliqua eiusmod esse et et do labore nulla ut esse ullamco.<br>Lorem ipsum Est eiusmod fugiat aliqua adipisicing dolore deserunt reprehenderit amet veniam elit Duis officia in Ut ex velit magna consequat in dolor amet.',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ),
      array(
        'id' => 2,
        'title' => 'Interior Gallery',
        'subtitle' => 'Lorem ipsum Interior.',
        'summary' => 'Interior Lorem ipsum Et magna ullamco voluptate voluptate eiusmod ex Excepteur velit incididunt.',
        'content' => 'Lorem ipsum Amet Excepteur anim ad cupidatat ad dolore anim adipisicing occaecat tempor exercitation sit irure ad Duis in in enim mollit occaecat eu elit cupidatat culpa commodo dolore est deserunt ex laborum ullamco deserunt et.<br>Lorem ipsum Eu officia cupidatat amet laborum velit commodo officia reprehenderit in est sed dolore ut anim Ut fugiat incididunt voluptate qui culpa nostrud qui dolore ex irure enim dolor nisi qui aliquip aute voluptate eu eu veniam ut ex ut aliquip sunt laboris cupidatat amet adipisicing sed aute mollit Duis velit in dolore dolor aute officia est aliqua nulla magna et mollit non incididunt id dolore officia amet cupidatat ut anim aliquip tempor nulla veniam irure cillum aliquip in enim consectetur veniam sed tempor voluptate dolore ea tempor ex sint velit Ut sit Excepteur aliquip reprehenderit laborum commodo esse reprehenderit aliquip nulla pariatur eiusmod ullamco laborum proident minim nulla officia deserunt consectetur in mollit incididunt quis incididunt in reprehenderit exercitation sint officia incididunt cupidatat dolore dolore aute Ut laboris ad tempor quis in irure ut laborum minim sint ex sunt reprehenderit ea Duis laboris fugiat occaecat officia tempor ex adipisicing magna commodo eu deserunt do ullamco aliquip minim dolor ad exercitation enim laboris mollit laborum ut incididunt Duis labore Excepteur enim eiusmod ad deserunt tempor occaecat proident ut et amet esse officia consequat do elit laboris magna occaecat in deserunt exercitation nisi ea laboris in voluptate sint pariatur Duis eu nisi velit deserunt ut consectetur sit consectetur est officia aliqua anim esse in Excepteur pariatur in ullamco Duis reprehenderit aliquip sint esse ullamco id irure tempor laborum fugiat occaecat occaecat elit reprehenderit labore.<br>Lorem ipsum In pariatur consectetur reprehenderit in nostrud cupidatat sint consequat veniam fugiat esse qui aute elit nulla sed nostrud in ea labore magna et sint.',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ),
      array(
        'id' => 3,
        'title' => 'Pallet Gallery',
        'subtitle' => 'Lorem ipsum Pallet.',
        'summary' => 'Pallet Lorem ipsum Sunt ut in eiusmod non labore dolore velit ex elit in in eu anim.',
        'content' => 'Lorem ipsum Sunt ut Ut culpa commodo ex Excepteur ut occaecat consequat cupidatat amet mollit et culpa voluptate ut nostrud aute ad dolor qui pariatur dolor consequat enim pariatur quis et ex.<br>Lorem ipsum Sed anim et consectetur aliqua velit commodo aliqua ex est ad adipisicing irure nisi consectetur nisi ut veniam pariatur Duis anim Excepteur tempor dolor Ut commodo sit anim in dolor dolor dolore laborum incididunt nulla ut tempor adipisicing Duis qui non fugiat culpa laboris dolor culpa aute veniam aliquip aute labore aliquip dolor fugiat est fugiat quis nulla magna dolore in consectetur aliquip consequat et laboris deserunt velit id Excepteur est veniam magna velit aliqua magna ut tempor fugiat dolor sunt ad mollit ex id Ut in eu minim dolore esse adipisicing ullamco enim ut eiusmod deserunt sed non occaecat sed enim dolor qui proident laboris et dolor nulla irure in ad cupidatat esse id ea cupidatat magna dolore proident qui do adipisicing ea est ea officia ut non eu ex consectetur sint esse non dolore enim minim Excepteur deserunt sint.<br>Lorem ipsum Commodo nostrud est eu Ut ea sed mollit adipisicing labore aute exercitation deserunt ad in dolore ad Ut officia cillum Duis in Ut.',
        'created_at' => date('Y-m-d H:i:s'),
        'updated_at' => date('Y-m-d H:i:s')
      ),
    ));
  }
}


class PostsTableSeeder extends Seeder {

  public function run()
  {
    DB::table('posts')->delete();

    for($i = 1; $i < 6; $i++) {
      Post::create([
        'id' => $i,
        'gallery_id' => 1,
        'title' => 'Graphic ipsum Fugiat anim voluptate dolore ' . $i . '.',
        'content' => 'Lorem ipsum Nostrud adipisicing elit officia eiusmod officia ex amet sunt quis enim officia veniam qui aliquip sunt pariatur do.<br>Lorem ipsum Exercitation mollit esse sed amet sed aute magna aliquip aliquip tempor velit ut ea non deserunt nulla commodo in irure in ea cupidatat labore Duis tempor occaecat in dolore exercitation commodo incididunt id aute id.<br>Lorem ipsum Irure nostrud culpa magna fugiat sed eiusmod tempor ut consequat aliqua esse culpa labore aliqua in id sed aute aliqua incididunt.<br>Lorem ipsum Eu consectetur occaecat dolore commodo nisi reprehenderit eiusmod consequat in sunt enim in pariatur nostrud magna dolor eiusmod Excepteur minim amet sunt deserunt cillum cupidatat exercitation voluptate dolor magna quis adipisicing anim laborum non ut culpa reprehenderit pariatur in aliqua aliquip ad est non ut eiusmod dolore sunt labore incididunt labore laborum nulla aliquip consectetur id dolor occaecat consectetur exercitation veniam sunt proident Excepteur proident qui laborum incididunt exercitation fugiat in Duis ex in commodo ullamco minim voluptate ad commodo cillum sunt sint qui incididunt pariatur anim et velit nostrud dolore Duis occaecat dolor nulla sit non voluptate dolor do laboris ad incididunt adipisicing magna deserunt ea nisi in adipisicing do dolore eiusmod veniam exercitation id nostrud ut officia ut non eiusmod dolore aliqua irure proident veniam quis voluptate voluptate adipisicing pariatur amet sed sed enim adipisicing Duis anim fugiat incididunt aliqua elit Excepteur non dolor est cillum eiusmod est incididunt aliqua aliqua irure exercitation id in incididunt voluptate cupidatat id reprehenderit dolore ut sint eiusmod pariatur sunt in in veniam reprehenderit cillum labore sed sint qui elit anim non ut qui in laborum mollit commodo nostrud adipisicing dolore dolore reprehenderit ullamco aliqua deserunt exercitation Ut occaecat sit.',
        'summary' => 'The key to driving this engagement is to ensure that we value design in the right way, not simply as a template, theme or color scheme but as a support system for key content. We can use design to make a website unique and more memorable. We do this by laying the foundation of a good impression, enabling smooth and meaningful consumption, and encouraging engagement with the content. All three of these areas are opportunities to drive a user experience that is in harmony with our content.',
        'image' => "/images/posts/img_0".$i.".jpg"
      ]);
    }

    for($i = 1; $i < 6; $i++) {
      Post::create([
        'id' => $i + 5,
        'gallery_id' => 2,
        'title' => 'Interior ipsum Fugiat anim voluptate dolore ' . $i . '.',
        'content' => 'Lorem ipsum Duis adipisicing minim esse qui commodo dolore elit amet officia dolor culpa sunt deserunt in incididunt anim irure.<br>Lorem ipsum Aliquip dolor pariatur laborum labore commodo ullamco et reprehenderit nisi sit mollit esse velit dolore ut velit quis qui ad non proident eiusmod Duis.<br>Lorem ipsum Commodo sed ut consequat ex anim in ad Ut exercitation mollit fugiat incididunt labore sed consequat dolor aliquip esse in proident elit ad do ut laboris labore laborum.<br>Lorem ipsum Cupidatat consequat proident dolore ut in ea pariatur quis non tempor velit amet culpa anim ea quis ut officia irure in commodo aliquip deserunt dolor officia dolore labore eu laborum irure sint ut veniam exercitation eu dolore sunt est dolore sit officia velit voluptate Excepteur culpa enim sint veniam aliquip sint mollit mollit incididunt nulla pariatur ad ullamco dolor amet incididunt nostrud Excepteur pariatur ullamco Duis non qui ea anim voluptate aute esse in sint occaecat proident sint commodo cupidatat nulla et ea dolor eu nulla do in adipisicing ut ex do minim culpa exercitation dolore ut quis aliqua reprehenderit pariatur proident id irure dolore consequat dolor in sunt est dolor cillum id incididunt eu reprehenderit qui occaecat et amet in in ut reprehenderit in sit amet commodo sunt do consectetur dolore Ut occaecat fugiat ut tempor veniam ut sunt enim fugiat velit ut non do nisi ad proident cupidatat velit est cillum cupidatat qui adipisicing commodo ad Duis voluptate velit id Ut laboris irure fugiat incididunt ea sit ex in voluptate nisi ex occaecat officia nisi esse ea in fugiat amet consectetur ea in officia cillum eiusmod id nisi labore aliqua elit tempor occaecat aliquip aliqua mollit reprehenderit consectetur est exercitation ad Ut velit nostrud in in voluptate commodo enim labore aliqua sint ex labore sint in ex non laboris ullamco officia Ut irure sed occaecat velit sunt ut consequat ad ad amet officia cillum magna ut qui sint aute labore deserunt in.',
        'summary' => 'Lorem ipsum Occaecat fugiat amet quis dolore id eu in labore velit eiusmod in exercitation laborum id ad ullamco Duis eu culpa irure aliquip ut sit reprehenderit reprehenderit anim exercitation non elit culpa occaecat eiusmod cupidatat occaecat dolore sint ut ullamco exercitation ad sunt Excepteur esse minim aliqua qui reprehenderit culpa ut esse ut sit eiusmod amet eiusmod aliquip in cillum et enim qui veniam in sed amet officia mollit in ea enim eu sit cupidatat Ut ut officia voluptate cupidatat fugiat veniam et quis sit in aliqua sed reprehenderit anim eu nostrud cillum ad magna sed id proident non incididunt dolor eu labore dolor dolore aute aliqua laboris officia pariatur cillum fugiat officia eiusmod anim laboris ad proident consectetur aliqua et sit mollit in cillum Excepteur in officia cupidatat tempor non ut ex veniam dolor irure dolore anim reprehenderit ea ut laboris voluptate nostrud quis non deserunt mollit aliquip reprehenderit enim aliquip id do non sint nulla in elit in eiusmod voluptate fugiat nostrud fugiat aliquip proident do ut cupidatat qui minim sunt non deserunt non sunt officia in exercitation incididunt esse elit culpa elit sunt eiusmod voluptate labore consectetur elit eiusmod Ut nulla et eiusmod aliquip ut est do amet proident commodo ex tempor incididunt id est nisi in enim Duis amet Excepteur irure aliquip culpa aute veniam dolore qui ea aliqua ea magna fugiat.',
        'image' => "/images/posts/img_0".$i.".jpg"
      ]);
    }

    for($i = 1; $i < 6; $i++) {
      Post::create([
        'id' => $i + 10,
        'gallery_id' => 3,
        'title' => 'Pallet ipsum Fugiat anim voluptate dolore ' . $i . '.',
        'content' => 'Lorem ipsum Aute dolore adipisicing Duis dolore ut incididunt officia in culpa Duis.<br>Lorem ipsum Aliquip est reprehenderit consequat nisi irure incididunt est nisi voluptate magna velit ex ea in veniam officia sint enim est cillum ad esse amet voluptate Excepteur laborum ex aliquip.<br>Lorem ipsum Ea ea tempor laborum ex aliquip fugiat nisi ut consectetur aute eiusmod esse Excepteur id proident in enim ea ullamco veniam.<br>Lorem ipsum Ea ad qui in qui incididunt ullamco laborum et id Duis sit fugiat adipisicing deserunt pariatur eiusmod Duis ut mollit voluptate voluptate sit Duis cillum aute eu reprehenderit ex labore amet ea commodo fugiat nisi ut anim consectetur cupidatat dolore dolor fugiat esse Ut ut Ut mollit eu tempor occaecat sed nisi incididunt ex et consequat enim est qui cupidatat qui irure qui dolor amet qui minim cillum ut dolore nostrud Duis veniam nulla tempor fugiat quis nostrud commodo aute dolore proident esse esse laborum et in aliquip dolore aute consectetur sed veniam sit consequat id pariatur occaecat commodo ut ut occaecat aliquip est in minim eiusmod in in irure exercitation dolore adipisicing Duis dolore sed mollit fugiat cillum do dolor Ut est eiusmod voluptate nulla tempor id consectetur non eu cillum enim cillum ea sit esse sit ut pariatur fugiat nostrud nisi in nostrud minim quis ex veniam ut cillum dolor quis Ut elit ex quis minim occaecat amet dolore irure non qui in exercitation dolor sed reprehenderit tempor in eu Ut officia quis consectetur amet aliquip elit dolore adipisicing dolor in ullamco eu consectetur dolore anim aliquip sed minim consequat in labore qui esse velit enim consequat velit Excepteur adipisicing sed dolor in Excepteur sit sit fugiat sed consectetur veniam nisi in consectetur adipisicing culpa do eu quis fugiat est Duis cillum ut Ut dolore quis occaecat ea ea aliqua quis dolore minim et.',
        'summary' => 'Lorem ipsum Occaecat fugiat amet quis dolore id eu in labore velit eiusmod in exercitation laborum id ad ullamco Duis eu culpa irure aliquip ut sit reprehenderit reprehenderit anim exercitation non elit culpa occaecat eiusmod cupidatat occaecat dolore sint ut ullamco exercitation ad sunt Excepteur esse minim aliqua qui reprehenderit culpa ut esse ut sit eiusmod amet eiusmod aliquip in cillum et enim qui veniam in sed amet officia mollit in ea enim eu sit cupidatat Ut ut officia voluptate cupidatat fugiat veniam et quis sit in aliqua sed reprehenderit anim eu nostrud cillum ad magna sed id proident non incididunt dolor eu labore dolor dolore aute aliqua laboris officia pariatur cillum fugiat officia eiusmod anim laboris ad proident consectetur aliqua et sit mollit in cillum Excepteur in officia cupidatat tempor non ut ex veniam dolor irure dolore anim reprehenderit ea ut laboris voluptate nostrud quis non deserunt mollit aliquip reprehenderit enim aliquip id do non sint nulla in elit in eiusmod voluptate fugiat nostrud fugiat aliquip proident do ut cupidatat qui minim sunt non deserunt non sunt officia in exercitation incididunt esse elit culpa elit sunt eiusmod voluptate labore consectetur elit eiusmod Ut nulla et eiusmod aliquip ut est do amet proident commodo ex tempor incididunt id est nisi in enim Duis amet Excepteur irure aliquip culpa aute veniam dolore qui ea aliqua ea magna fugiat.',
        'image' => "/images/posts/img_0".$i.".jpg"
      ]);
    }
  }

}

class ArticlesTableSeeder extends Seeder {

  public function run()
  {
    DB::table('articles')->delete();

    for($i = 1; $i < 8; $i++) {
      Article::create([
        'id' => $i,
        'gallery_id' => 1,
        'title' => 'About us'.$i,
        'subtitle' => 'Lorem Ipsum '.$i,
        'content' => 'Lorem ipsum Laboris deserunt anim eu sunt quis reprehenderit non mollit labore id Ut elit in dolore laborum occaecat anim dolore nisi adipisicing est enim aliquip exercitation pariatur eiusmod velit est enim aute aute cupidatat aliquip non in id dolor nisi quis tempor officia est adipisicing ut labore elit non quis enim dolore aliqua ut aute sunt commodo deserunt eiusmod exercitation dolore consectetur nisi nulla tempor esse enim veniam irure officia cupidatat sint magna elit proident cillum fugiat eu ullamco magna quis eiusmod qui nisi fugiat eiusmod aliquip id elit in dolor ex tempor fugiat ad Excepteur magna aute dolor in commodo nisi in dolor in nostrud fugiat cillum nisi veniam esse laboris cupidatat exercitation aliquip adipisicing ut minim eu ad ut sunt tempor ullamco magna ullamco dolore elit ad est dolor eiusmod nostrud sit pariatur dolor qui cupidatat labore irure proident irure labore Excepteur nostrud do est nulla amet nisi occaecat nulla consequat Excepteur Ut laborum commodo eu qui esse tempor reprehenderit commodo laboris adipisicing in quis deserunt sit Ut reprehenderit dolor dolore elit nulla qui sed id aute in commodo qui non et sit Excepteur culpa consectetur eiusmod irure dolor ea ad do esse veniam nostrud nisi aute Excepteur in mollit commodo Duis ut in aliquip sunt fugiat exercitation dolor in do ut voluptate laboris esse sit enim mollit deserunt laboris Duis ad ut minim esse.<p>Lorem ipsum Adipisicing irure ea velit laborum non consequat nisi culpa cupidatat deserunt nisi laborum commodo tempor elit Ut dolore mollit pariatur sunt voluptate in sunt pariatur officia aute dolore esse eu voluptate sed est quis voluptate exercitation in non reprehenderit nostrud ut Duis pariatur irure Duis non et Excepteur eu adipisicing in incididunt sunt in et enim sint qui fugiat Excepteur occaecat qui culpa consequat quis occaecat quis deserunt magna esse dolor ad voluptate ad do reprehenderit dolore minim ut nostrud esse commodo laboris ea mollit qui laboris pariatur nostrud magna dolore sint elit ex ea ut elit mollit consequat nisi dolor eu amet Excepteur esse ea ut nisi nostrud velit Duis eiusmod nisi ullamco nostrud proident consectetur dolore non nisi irure laboris enim minim in amet aute sunt dolore nostrud culpa in sed in ullamco elit esse mollit dolor ut reprehenderit ad laboris ut Duis non culpa ea irure quis reprehenderit dolor exercitation veniam commodo est in aute fugiat in commodo eiusmod anim elit Duis elit ad magna exercitation ea eu dolor quis sit ullamco consectetur laborum id do tempor officia mollit irure aliqua dolore aliqua adipisicing dolor dolore cillum qui consectetur in ad non irure officia ex ut Ut sed deserunt adipisicing reprehenderit ut id dolor qui Duis incididunt mollit elit in magna qui velit commodo.',
        'summary' => 'Lorem ipsum Officia ad exercitation ex eu est dolore in enim minim eu sed Ut cupidatat enim esse est ut Ut est nostrud qui sunt velit est dolor occaecat commodo consectetur incididunt.',
        'image' => "/assets/big-image-0".$i.".jpg",
        'thumb' => "/assets/".$i.".jpg",
      ]);
    }

    for($i = 1; $i < 8; $i++) {
      Article::create([
        'id' => $i + 7,
        'gallery_id' => 2,
        'title' => 'About us'.$i,
        'subtitle' => 'Lorem Ipsum '.$i,
        'content' => 'Lorem ipsum In quis ea id proident Ut sit adipisicing incididunt dolor ad minim elit nostrud anim sint do sit fugiat elit dolore velit nisi cupidatat voluptate laborum adipisicing consectetur in id labore ut aliqua officia dolore Ut quis velit consequat est sit id consequat mollit deserunt consequat pariatur et pariatur exercitation in laboris nisi aliqua velit laboris dolore adipisicing non ut laboris reprehenderit dolore commodo non ex eiusmod ullamco occaecat aliquip dolor eiusmod quis id et ut ex anim Ut aliqua laborum et elit id laboris officia aliquip Duis ullamco magna esse minim in eiusmod officia officia laborum ut mollit laborum esse ea dolore enim sunt exercitation ex dolore tempor qui culpa esse enim eiusmod consectetur exercitation enim sit proident nisi adipisicing minim nisi minim id exercitation dolor non elit mollit dolor et velit id id mollit est labore incididunt amet officia enim Duis fugiat elit pariatur Duis irure Ut amet aliquip commodo dolore velit laborum laborum dolore amet laboris irure adipisicing minim sunt do cillum in reprehenderit deserunt enim magna in aliqua dolore sint esse ullamco do dolore sed ut non sint veniam voluptate minim in laboris deserunt dolore commodo Excepteur irure dolore dolor voluptate magna eu incididunt Excepteur labore mollit do reprehenderit quis incididunt Duis ea consectetur in nulla cillum veniam dolore enim dolor incididunt qui dolor sint voluptate aute aute adipisicing elit tempor veniam ut dolor tempor commodo labore do incididunt incididunt qui.<p>Lorem ipsum Ullamco sunt nulla Duis dolor amet ad dolor aliquip incididunt proident sint dolore aliqua dolore commodo amet et occaecat officia nisi aliqua amet Excepteur consequat ullamco aliqua nisi deserunt fugiat incididunt aute deserunt pariatur dolore exercitation in et sunt dolor dolor consequat ullamco in est amet exercitation occaecat eu do ut Excepteur nulla consectetur adipisicing deserunt Duis ullamco anim laboris aliquip Duis ex velit dolore tempor elit consequat pariatur laborum proident Excepteur voluptate deserunt Ut labore veniam laborum occaecat proident aute ex irure commodo proident ad id incididunt esse exercitation ut adipisicing ullamco nostrud Duis sunt cillum Excepteur laborum adipisicing veniam do irure anim fugiat dolore consectetur do in dolor elit sit fugiat eu culpa anim eu enim enim anim et dolore in consectetur dolore consequat cupidatat cillum esse magna voluptate Duis cupidatat in elit in veniam voluptate sit incididunt pariatur sunt veniam Ut eu cillum eu proident elit deserunt dolor aliqua do mollit laborum magna dolor fugiat officia enim dolore consectetur in ea deserunt magna ullamco nostrud reprehenderit dolor nostrud velit reprehenderit incididunt proident proident est aliquip nulla eu reprehenderit irure eiusmod laboris magna adipisicing est nostrud est eiusmod sit Duis cillum id ut dolor magna Excepteur enim proident cupidatat consectetur voluptate elit sint officia et aute officia eu sint amet aliqua aute do adipisicing sint sint ullamco nulla aliquip consectetur non.',
        'summary' => 'Lorem ipsum Ut aliqua in laboris ad nostrud labore dolore in voluptate dolore consectetur voluptate mollit dolor nisi voluptate ut sed mollit officia Ut voluptate ut qui et Excepteur in magna aliquip esse sed ad qui sint laboris enim culpa minim.',
        'image' => "/assets/big-image-0".$i.".jpg",
        'thumb' => "/assets/".$i.".jpg",
      ]);
    }

    for($i = 1; $i < 8; $i++) {
      Article::create([
        'id' => $i + 14,
        'gallery_id' => 3,
        'title' => 'About us'.$i,
        'subtitle' => 'Lorem Ipsumipsum Amet '.$i,
        'content' => 'Lorem ipsum Anim irure tempor sed in ullamco veniam reprehenderit consectetur amet dolore ut dolor aute ut et proident aute dolor amet non magna laboris quis ut sit do ex fugiat nisi consequat qui dolore reprehenderit eu dolor eiusmod elit tempor Excepteur qui consequat consequat do id fugiat mollit incididunt qui eiusmod esse incididunt enim laboris culpa in dolore sed do anim consectetur eu id qui pariatur consequat minim sunt ut pariatur qui sit voluptate ex labore aliqua id deserunt qui incididunt eiusmod consectetur qui voluptate Excepteur amet in enim nostrud esse est minim officia laborum reprehenderit nulla in et elit esse anim ut consequat dolor eiusmod dolor ad fugiat culpa et dolore nulla anim in consequat in elit deserunt irure aliquip voluptate dolor laborum Duis in velit consectetur qui fugiat nulla pariatur ex deserunt commodo exercitation Excepteur eiusmod culpa do incididunt dolor deserunt consequat aliquip ut esse aute aliquip dolor adipisicing dolore elit est labore sint deserunt veniam nulla mollit dolore qui velit magna fugiat Excepteur sed veniam ut magna adipisicing non cupidatat laboris pariatur irure adipisicing non in aute non ad amet dolore Excepteur eu eu velit id Duis reprehenderit Ut et et incididunt minim velit consequat sint dolore laboris Duis proident.<p>Lorem ipsum Proident Duis Excepteur esse in cillum pariatur in minim ea consectetur in nulla aute magna laborum cillum occaecat irure nostrud eiusmod eiusmod sunt ad Duis magna commodo in enim sint mollit dolor veniam sed laborum voluptate qui Excepteur est ex aliqua sunt velit aliqua culpa velit amet pariatur occaecat sint consequat laborum proident in cupidatat consectetur ut velit reprehenderit ut ut dolor in voluptate proident deserunt non nostrud id aute elit mollit sit dolore cupidatat qui nisi amet Ut velit Excepteur non nostrud sed anim nulla quis laborum reprehenderit aute qui sunt Excepteur magna cupidatat aute occaecat aliquip ea quis in velit labore in est ex quis eiusmod irure ut laborum nulla veniam laboris laborum nostrud elit cupidatat ea sit incididunt ea ex magna quis velit anim cillum nisi aliqua tempor nostrud cillum minim occaecat nostrud Duis cupidatat ut fugiat non nulla magna incididunt minim velit non labore anim dolor ut enim Ut aliquip nisi irure voluptate labore aute mollit esse mollit sed commodo in in irure elit commodo dolore proident laboris incididunt consequat magna proident do labore est cillum quis aliquip eiusmod sit nostrud cillum Excepteur dolor tempor ut dolore aliquip ad aute aliqua Excepteur occaecat adipisicing enim Duis mollit laboris sed labore sint anim amet do laborum dolore culpa dolor reprehenderit mollit ex reprehenderit elit Ut incididunt elit sint ut deserunt eiusmod minim irure nisi mollit sint eu sint ullamco commodo nulla eu ullamco cillum in mollit sit minim amet dolore.',
        'summary' => 'Lorem ipsum Do Excepteur ex enim ut ullamco voluptate sed sint veniam proident do in eu voluptate fugiat elit tempor non labore nostrud.',
        'image' => "/assets/big-image-0".$i.".jpg",
        'thumb' => "/assets/".$i.".jpg",
      ]);
    }
  }
}