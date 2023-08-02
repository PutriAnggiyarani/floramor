<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //seeder untuk role
        Role::create([
            'role_name' => 'admin',
        ]);

        Role::create([
            'role_name' => 'user',
        ]);

        //seeder untuk user
        User::create([
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'role_id' => 1,
        ]);

        User::create([
            'username' => 'user1',
            'email' => 'user1@user.com',
            'password' => bcrypt('user'),
            'role_id' => 2,
        ]);

        //seeder untuk kategori
        Category::create([
            'name' => 'Flowers Box',
            'image' => 'box.jpg',
            'banner' => '1.png',
        ]);

        Category::create([
            'name' => 'Fresh Flowers',
            'image' => 'fresh.jpg',
            'banner' => '3.png',
        ]);

        Category::create([
            'name' => 'Artificial Flowers',
            'image' => 'arti.jpeg',
            'banner' => '4.png',
        ]);

        Category::create([
            'name' => 'Hand Bouquet',
            'image' => 'hand.jpg',
            'banner' => '2.png',
        ]);

        Category::create([
            'name' => 'Standing Flowers',
            'image' => 'standing.jpeg',
            'banner' => '6.png',
        ]);

        Category::create([
            'name' => 'Gift & Hampers',
            'image' => 'gift.jpg',
            'banner' => '5.png',
        ]);

        Product::create([
            'name' => 'Colorful Dusty Blue',
            'price' => '450000',
            'description' => 'Colorful Dusty Blue adalah bunga dengan kelopak berwarna biru muda yang lembut dan kalem. Namun, yang membuatnya istimewa adalah sentuhan warna-warni lainnya yang tersebar di antara kelopaknya, seperti nuansa pink, ungu, dan kuning yang memberikan kesan berwarna-warni dan mempesona. Bunga ini memiliki bentuk yang indah dan elegan, dengan bunga-bunga yang membentuk rangkaian yang anggun dan menyenangkan mata. Colorful Dusty Blue adalah simbol kecantikan yang halus namun menarik, dan bisa menjadi daya tarik luar biasa dalam taman atau rangkaian bunga.',
            'image' => 'cdb1.jpg',
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'Water Peach Sunset',
            'price' => '550000',
            'description' => '"Water Peach Sunset" menggambarkan suasana pemandangan matahari terbenam di sekitar air, dengan warna langit yang cantik dan mengingatkan pada warna kulit buah persik yang matang, menciptakan pemandangan yang menenangkan dan estetis.  dengan pilihan warna bunga yang kalem dan dominan berwarna putih dan warna seperti buah peach.',
            'image' => 'wps2.jpg',
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'Soft Chiffon',
            'price' => '350000',
            'description' => 'Soft Chiffon adalah bunga dengan kelopak yang tampak lembut dan elegan, menyerupai kain chiffon yang terkenal karena kehalusannya. Bunga ini mungkin memiliki kelopak tipis dan transparan, memberikan kesan ringan dan anggun. Warna bunga Soft Chiffon kemungkinan berada dalam spektrum yang lembut dan menenangkan, seperti nuansa pastel seperti mawar muda, putih krem, lavender pucat, atau kuning lembut.
            Bentuk bunga Soft Chiffon bisa bervariasi, mungkin memiliki kelopak yang mengembang dengan sedikit lapisan yang memberi kesan bertekstur dan bergaya. Aromanya mungkin juga lembut dan menyenangkan, menyebarkan keharuman yang menyegarkan dan menenangkan.',
            'image' => 'sc3.jpg',
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'Pastel Taffy',
            'price' => '300000',
            'description' => ' Pastel Taffy adalah kumpulan bunga yang menakjubkan dengan sentuhan warna-warna pastel yang lembut dan anggun, mengingatkan pada manisnya permen taffy. Dalam karangan bunga ini, berbagai jenis bunga yang indah seperti mawar, lili, dan anyelir dipilih dengan hati-hati untuk menciptakan harmoni warna.  Bentuk bunga yang elegan dan daun yang menghiasi karangan memberikan dimensi dan tekstur yang menarik. Rangkaian bunga yang beraneka ragam diatur dengan indah, menciptakan kesan kesan yang lapang dan alami. Bunga Pastel Taffy cocok untuk berbagai kesempatan, seperti hadiah ulang tahun, pernikahan, atau sebagai ungkapan kasih sayang dan apresiasi. Keindahan dan kelembutan warna-warna pastelnya akan membuat setiap penerima terpesona oleh keindahannya. Ketika Anda menyajikan Bunga Pastel Taffy, aroma harum bunga dan manisnya warna pastel akan menyebar di sekitar, menciptakan suasana yang menyenangkan dan riang. Kehadiran karangan bunga ini akan menambah kesan romantis dan indah pada setiap acara.',
            'image' => 'pt4.jpg',
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'Snowie Blue',
            'price' => '450000',
            'description' => 'Snowie Blue adalah bunga dengan kelopak berwarna biru yang menarik, mirip dengan warna salju yang lembut. Warna biru pada bunga ini bisa bervariasi, mulai dari biru langit yang cerah hingga biru muda yang lembut dan segar. Bunga ini mungkin memiliki bentuk dan ukuran yang bervariasi, tergantung pada jenisnya.
            Daya tarik dari bunga Snowie Blue adalah warnanya yang khas dan menarik, yang membuatnya menjadi sorotan di taman atau rangkaian bunga. Bunga ini mungkin memiliki aroma yang menyegarkan, dan kehadirannya dapat memberikan nuansa kesegaran dan keindahan alami di sekitar tempat tumbuhnya.',
            'image' => 'sb5.jpg',
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'Purple Heather',
            'price' => '550000',
            'description' => 'Purple Heather" mengacu pada bunga dari tanaman Erica cinerea, yang dikenal karena warna ungu yang mencolok dan kecantikan alaminya. sejenis bunga yang menawan dengan warna ungu yang memukau dan daya tarik alami. Bunga ini berasal dari tanaman Erica cinerea, yang tumbuh subur di padang rumput, bukit berangin, dan lereng pegunungan di berbagai wilayah. Karangan bunga ini terdiri dari rangkaian bunga kecil berwarna ungu, yang muncul dalam kelompok yang kompak dan elegan. Setiap bunga memiliki bentuk tabung dan kelopak kecil yang mengelilinginya, memberikan sentuhan keanggunan yang khas. Ketika berbunga, heather ungu menciptakan lanskap yang indah dengan warna-warna merona yang berpadu dengan cantik. Bunga-bunga ungu yang menyebar di antara dedaunan hijau memberikan kontras yang menarik, menghadirkan pesona dan pesan kedamaian. Bunga Purple Heather sering digunakan sebagai karangan bunga atau dekorasi dalam berbagai acara, seperti pernikahan, pesta, atau acara khusus lainnya. Bunga Purple Heather adalah simbol keanggunan, ketenangan, dan daya tarik alam yang tak tergantikan. Dengan kecantikannya yang menawan dan warna ungunya yang mencolok, bunga ini akan menjadi sorotan dan menyenangkan hati siapa pun yang melihatnya.',
            'image' => 'ph6.jpg',
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'Mini Rose Rogue',
            'price' => '600000',
            'description' => 'Mini Rose Rouge" mengacu pada varietas mawar mini yang memiliki warna merah gelap atau merah tua yang indah.  bunga mawar mini yang menakjubkan dengan warna merah gelap atau merah tua yang menggoda hati. Meskipun ukurannya kecil, keindahannya tidak dapat diabaikan. Setiap bunga mawar mini ini memiliki kelopak yang padat dan bentuk yang sempurna, menciptakan pesona tersendiri dalam ukuran yang kompak. . Bunga ini menyiratkan keberanian, cinta yang mendalam, dan hasrat yang membara. Warna merahnya yang intens dan berkilauan memancarkan kehangatan dan emosi yang mendalam. Meskipun mawar mini ini kecil, namun aroma yang dihasilkannya cukup kuat dan memikat. Ketika Anda memasukinya, Anda akan disambut oleh wangi harumnya yang manis dan mempesona, menciptakan suasana yang memikat dan menggugah perasaan.  pilihan yang sempurna untuk ungkapan cinta dan romansa. Karangan bunga ini sering dipilih sebagai hadiah untuk orang yang dikasihi dalam momen-momen spesial seperti hari Valentine, ulang tahun pasangan, atau perayaan hari pernikahan.',
            'image' => 'mrr7.jpg',
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'Frost Porcelain',
            'price' => '750000',
            'description' => 'Frost Porcelain adalah bunga yang menampilkan kombinasi warna dan tekstur yang menyerupai porselen yang dingin dan embun beku yang menawan. Warna bunga ini mungkin dominan dengan nuansa putih atau biru muda pucat, mencerminkan kehalusan porselen.
            Kelopak bunga Frost Porcelain mungkin tampak lembut dengan lapisan tipis yang menyerupai embun beku atau kristal. Bentuk bunga ini mungkin elegan dan menarik, menciptakan kesan yang anggun dan menakjubkan.
            Bunga Frost Porcelain juga mungkin memiliki aroma yang menyegarkan dan menyenangkan, memberikan suasana kesegaran dan ketenangan di sekitar tempatnya berbunga.',
            'image' => 'fp8.jpg',
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'Blush Lemonade',
            'price' => '250000',
            'description' => 'Blush Lemonade adalah bunga yang menonjol dengan nuansa warna cerah dan segar, seperti yang terlihat pada minuman lemonade yang menyegarkan. Warna dominan pada bunga ini kemungkinan berada dalam spektrum kuning lemon atau kuning muda, dengan sentuhan ringan warna merah muda atau blush pada kelopak atau bagian-bagian tertentu.
            Kelopak bunga Blush Lemonade mungkin memiliki bentuk dan tekstur yang menarik, menciptakan kesan lembut dan indah seperti kelopak yang terlihat seperti terbuat dari porselen atau kertas tipis yang transparan.
            Bunga ini juga mungkin menyebarkan aroma yang menyenangkan dan menyegarkan, memberikan kesan keceriaan dan kehangatan di sekitar tempatnya berbunga.',
            'image' => 'bl9.jpg',
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'Daisy Crepe',
            'price' => '450000',
            'description' => 'Daisy Crepe adalah bunga dengan kelopak yang menyerupai kain crepe, yang memberikan kesan unik dan menarik pada permukaannya. Kelopak bunga ini mungkin memiliki tekstur halus dan berkerut yang mirip dengan tekstur kain crepe, memberikan tambahan dimensi visual pada bunga tersebut.
            Warna dominan pada bunga Daisy Crepe kemungkinan berada dalam spektrum putih atau kuning cerah, mengingat bunga daisy umumnya memiliki kelopak berwarna cerah dan menonjolkan pusat berwarna kuning.
            Bentuk bunga ini mungkin seperti bunga daisy pada umumnya, dengan kelopak yang membentuk lingkaran di sekitar pusat bunga.',
            'image' => 'dc10.jpg',
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'Blue Indranila',
            'price' => '500000',
            'description' => '"blue indranila" merupakan bunga dengan nuansa biru yang indah, ada beberapa bunga yang dikenal karena warna biru atau nuansa indigo pada kelopaknya. terdapat beberapa bunga yang memiliki warna biru yang lembt, yang terdiri dari Bunga iris memiliki kelopak yang cantik dengan warna biru atau ungu, dan terdapat beberapa varietas yang disebut "indigo iris." Delphinium, Bunga delphinium memiliki rangkaian kelopak dengan warna biru terang hingga indigo. Hydrangea, Beberapa jenis hydrangea memiliki kelopak dengan warna biru atau nuansa ungu. Bluebell atau kelat biru memiliki kelopak berwarna biru cerah yang indah dan tumbuh di hutan-hutan atau tempat yang teduh. Balloon Flower (Platycodon grandiflorus), Bunga ini memiliki kelopak biru indigo yang membentuk bentuk seperti balon ketika mekar sepenuhnya.  bunga ini snagat cocok dalam nuansa pernikahan atau diberikan sebagai hadiah bagi seseorang yang disayang. aroma bunga ini sangat lembut sehingga dapat memberikan perasaan relax bagi seeorang yang mencium wangi bunga blue indranila',
            'image' => 'bi11.jpg',
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'Beauty Coral',
            'price' => '350000',
            'description' => '"Bunga Beauty Coral" mengacu pada jenis bunga dengan warna dan keindahan yang mirip dengan warna koral atau coral (terumbu karang).  sejenis bunga yang menakjubkan dengan warna yang mencolok dan mempesona, mirip dengan warna koral atau coral di terumbu karang. Bunga ini memiliki kelopak yang elegan dengan warna koral yang cerah dan berkilauan, menciptakan tampilan yang menyegarkan dan menawan. Bentuk dan tekstur kelopak bunga Beauty Coral memberikan kesan yang anggun dan indah. Kecantikannya yang unik dan keunikan warnanya membuatnya menjadi sorotan dalam taman atau ruang dalam. Ketika bunga Beauty Coral mekar sepenuhnya, kelopak-kelopaknya membentuk rangkaian bunga yang indah dan padat. Warna koralnya yang terang dan cerah mencuri perhatian dan menambah keceriaan di sekitarnya. Aroma lembut yang dihasilkan oleh bunga ini menambah kesan kesegaran dan kenyamanan. Ketika Anda berada di dekatnya, Anda akan disambut oleh aroma harum yang menenangkan dan menyegarkan. Bunga Beauty Coral sering digunakan sebagai karangan bunga atau dekorasi dalam berbagai acara, seperti pernikahan, pesta, atau acara khusus lainnya. Keindahannya yang mencolok dan warnanya yang koral yang mengesankan akan meninggalkan kesan yang tak terlupakan pada setiap orang yang melihatnya. Bunga Beauty Coral adalah simbol keanggunan, keindahan alam, dan keceriaan. Dalam warna koralnya yang mencolok dan pesona yang unik, bunga ini menawarkan keindahan alami yang luar biasa dan menjadi hadiah yang sempurna untuk menyampaikan kasih sayang dan apresiasi."',
            'image' => 'bc12.jpg',
            'category_id' => 1,
        ]);

        Product::create([
            'name' => 'Clementine Clover',
            'price' => '150000',
            'description' => '"Bunga Clementine adalah jenis bunga yang menawan dengan warna oranye cerah dan aroma manis yang menggoda. Bunga ini mirip dengan warna buah clementine, memberikan kesan segar dan ceria di sekitarnya. Kelopaknya yang elegan dan padat menciptakan tampilan yang indah dan menarik. Ketika bunga Clementine mekar sepenuhnya, kelopak-kelopaknya membentuk rangkaian bunga yang cantik dan mengagumkan. Aroma manisnya yang menguar menambah kesan menyegarkan dan menyenangkan di udara sekitarnya. Bunga Clementine sering digunakan sebagai hadiah untuk menyampaikan kebahagiaan dan keceriaan kepada orang yang dikasihi. Bunga Clover adalah jenis bunga kecil yang umumnya dikenal karena kelopaknya yang berbentuk seperti daun tiga daun (trifoliate).  Bunga Clover tumbuh dalam padang rumput dan lapangan, menciptakan lanskap yang indah dengan kehadirannya yang melimpah. Kelopaknya yang kecil dan daun tiga daun memberikan kesan alami dan ramah. Bunga Clover sering dianggap sebagai simbol keberuntungan dan keberlimpahan, dan kadang-kadang juga diasosiasikan dengan cinta dan persahabatan.',
            'image' => 'Fresh Flowers/1.jpg',
            'category_id' => 2,
        ]);

        Product::create([
            'name' => 'Rose Diantha',
            'price' => '250000',
            'description' => '"Rose Diantha"  terdiri dari  bunga mawar dan bunga Dianthus (bunga karangan). Keduanya adalah bunga yang indah dan sering dipilih sebagai hadiah atau dekorasi karena keindahan dan keharumannya. Bunga Mawar adalah simbol cinta dan keindahan yang sudah dikenal secara luas. Bunga ini memiliki beragam warna dan varietas, termasuk merah, merah muda, putih, kuning, oranye, dan banyak lagi. Mawar sering diasosiasikan dengan keanggunan dan romansa. Kelopak mawar yang indah dan bentuk yang sempurna menciptakan pesona dan daya tarik yang tak terbantahkan. Aroma harum mawar menambah kesan romantis dan memikat setiap hati yang menciumnya. Bunga mawar sering digunakan sebagai hadiah untuk menyatakan cinta, rasa terima kasih, atau penghargaan kepada seseorang yang istimewa. Mawar juga sering digunakan sebagai dekorasi dalam acara-acara pernikahan, acara khusus, dan momen penting lainnya. Bunga Dianthus, atau sering juga disebut bunga karangan, adalah bunga yang anggun dan indah dengan kelopak yang bergerigi. Bunga ini terkenal karena keharumannya yang manis dan warna-warnanya yang mencolok, termasuk merah muda, putih, merah, ungu, dan sebagainya. Kelopak bunga Dianthus yang bergerigi memberikan kesan elegan dan istimewa. Aroma manis yang dihasilkan oleh bunga ini menambah kesan menyegarkan dan menenangkan di sekitarnya. Bunga Dianthus sering digunakan sebagai hadiah untuk berbagai kesempatan, seperti hari jadi, ulang tahun, atau sebagai ungkapan simpati. Bunga ini juga sering ditemukan dalam karangan bunga dan dekorasi, menambah sentuhan indah dan mempesona pada berbagai acara dan perayaan.',
            'image' => 'Fresh Flowers/2.jpg',
            'category_id' => 2,
        ]);

        Product::create([
            'name' => 'Flora Yellow Fuchsia',
            'price' => '350000',
            'description' => 'Flora Yellow Fuchsia" adalah jenis bunga yang umum dan dikenal karena memiliki bentuk yang menarik dengan kelopak yang bergantung dan berbentuk lonceng. Bunga fuchsia sering memiliki warna yang mencolok dan kontras, seperti warna merah muda atau ungu cerah dengan aksen putih atau hijau. Kombinasi warna ini menciptakan daya tarik visual yang menonjol.
            Jika "Flora Yellow Fuchsia" adalah spesies bunga atau variasi yang baru atau tidak umum, deskripsi pastinya akan tergantung pada karakteristik dan atribut khusus dari bunga tersebut.',
            'image' => 'Fresh Flowers/3.jpg',
            'category_id' => 2,
        ]);

        Product::create([
            'name' => 'Pink Heather',
            'price' => '300000',
            'description' => 'Bunga Pink Heather adalah bunga yang cantik dan anggun dengan kelopak yang berwarna merah muda atau pink yang cerah. Bunga ini berasal dari tanaman Erica carnea atau Erica cinerea yang tumbuh subur di wilayah pegunungan, padang rumput, atau dataran tinggi. Karangan bunga ini terdiri dari rangkaian bunga kecil dengan kelopak berwarna merah muda yang menawan. Setiap bunga memiliki bentuk tabung dan kelopak kecil yang teratur, menciptakan kesan keanggunan dan kelembutan. Ketika musim bunga tiba, Pink Heather mekar dengan indah, menciptakan lanskap yang memesona dengan warna-warna merona yang berpadu dengan indah. Bunga-bunga merah muda ini menyebar di antara dedaunan hijau yang menambah kesan menyegarkan dan mempesona. Selain keindahannya, Pink Heather juga memberikan aroma yang lembut dan menenangkan. Aroma harum yang dihasilkan oleh bunga ini menambah kesan kesegaran dan kenyamanan di sekitarnya. Bunga Pink Heather sering digunakan dalam taman, lanskap, dan taman pot untuk memberikan sentuhan keindahan yang anggun. Karangan bunga ini juga sering dijadikan dekorasi dalam pernikahan, acara khusus, atau sebagai hadiah simpati dan kasih sayang.',
            'image' => 'Fresh Flowers/4.jpg',
            'category_id' => 2,
        ]);

        Product::create([
            'name' => 'Hyacinth',
            'price' => '450000',
            'description' => 'Bunga Hyacinth (Hyacinthus orientalis) adalah bunga yang indah dan harum yang berasal dari keluarga Asparagaceae. Bunga ini sangat populer karena keharumannya yang khas dan bunga-bunga yang padat dan bergaris-garis yang indah. Berikut adalah deskripsi umum tentang bunga Hyacinth:
            Bunga Hyacinth memiliki kelopak yang padat dan terbuka dengan bentuk seperti lonceng. Kelopak bunga ini terdiri dari bunga-bunga kecil yang membentuk bunga majemuk di atas batang tegak.
            Warna bunga Hyacinth sangat bervariasi dan mencakup berbagai pilihan, termasuk ungu, biru, merah muda, putih, kuning, oranye, dan campuran warna-warna tersebut.
            Aroma bunga Hyacinth sangat kuat dan menyenangkan. Keharumannya yang khas dapat memenuhi udara di sekitarnya, sehingga menjadikannya pilihan yang populer untuk mengisi ruangan dengan wangi yang menyegarkan.',
            'image' => 'Fresh Flowers/5.jpg',
            'category_id' => 2,
        ]);

        Product::create([
            'name' => 'Ivy Lavender',
            'price' => '550000',
            'description' => 'Bunga Ivy Lavender adalah bunga yang indah dengan kelopak berwarna ungu atau lavender yang lembut dan menawan. Bunga ini terinspirasi oleh bentuk dan pola dedaunan tanaman ivy (lidah mertua), yang menyajikan tampilan yang menarik dan unik. Setiap kelopak bunga Ivy Lavender memiliki nuansa warna yang mencolok dan menggoda. Warna ungu atau lavendernya menciptakan kesan yang anggun dan menyejukkan, memberikan pesona romantis dan lembut. Bentuk dan susunan bunga Ivy Lavender sering kali menyiratkan keindahan alami yang elegan. Ketika Ivy Lavender mekar, kelopaknya menutupi tangkai bunga dan menciptakan penampilan yang padat dan memikat. Aroma harumnya yang khas menambah kesan menyegarkan dan menenangkan. Bunga Ivy Lavender sering digunakan sebagai dekorasi dalam berbagai acara, seperti pernikahan, pesta, atau acara perayaan lainnya. Keindahannya yang mencolok dan warna-warnanya yang lembut akan memberikan sentuhan elegan dan romantis pada setiap momen penting. Bunga ini juga sering dipilih sebagai hadiah untuk menyatakan cinta, apresiasi, atau ungkapan kasih sayang. Ivy Lavender adalah simbol keanggunan, kelembutan, dan ketenangan yang tak ternilai.',
            'image' => 'Fresh Flowers/6.jpg',
            'category_id' => 2,
        ]);

        Product::create([
            'name' => 'Rose Rouge',
            'price' => '600000',
            'description' => 'Bunga Rose Rouge adalah bunga mawar yang mempesona dengan warna merah yang mendalam dan mencolok. Mawar merah dikenal sebagai simbol cinta, gairah, dan keindahan yang abadi, dan Rose Rouge tidak terkecuali. Setiap kelopak bunga Rose Rouge memiliki warna merah yang mengesankan, menambah daya tarik dan pesona yang tak tertandingi. Bentuk dan tekstur kelopak yang sempurna menciptakan tampilan yang anggun dan menarik. Agar lebih menarik, ditambahkan beberapa sentuhan warna dari bunga lain untuk menambah nuansa yang ceria tetapi lembut sekaligus. Ketika mekar sepenuhnya, bunga Rose Rouge membentuk rangkaian yang padat dan indah. Aroma harumnya yang khas menambah kesan romantis dan mewah. Bunga Rose Rouge sering menjadi pilihan yang populer untuk menyatakan cinta, keinginan, dan hasrat yang mendalam. Bunga ini sering digunakan sebagai hadiah untuk orang yang dikasihi pada momen-momen istimewa seperti Hari Valentine, perayaan ulang tahun, atau momen romantis lainnya. Bunga Rose Rouge juga sering digunakan sebagai dekorasi dalam pernikahan, acara perayaan, atau acara-acara khusus lainnya. Keindahannya yang mencolok dan warna merahnya yang kuat menciptakan suasana yang romantis dan berkesan.',
            'image' => 'Fresh Flowers/7.jpg',
            'category_id' => 2,
        ]);

        Product::create([
            'name' => 'Marguerite Orchid',
            'price' => '750000',
            'description' => 'Marguerite: Marguerite (Chrysanthemum frutescens) adalah bunga anggota keluarga tanaman Chrysanthemum yang dikenal karena kelopaknya yang indah dan berwarna cerah. Bunga ini memiliki kelopak yang mirip dengan bunga daisy, dengan warna utama putih atau kuning muda. Mereka biasanya memiliki pusat berwarna kuning yang mencolok. Marguerite adalah bunga yang tahan lama, dan mekar sepanjang musim panas hingga musim gugur.

            Orchid: Orchid (Orchidaceae) adalah keluarga besar dan beragam dari tanaman berbunga eksotis. Mereka memiliki berbagai bentuk dan warna, dan termasuk salah satu kelompok bunga paling menarik dan dihargai di dunia. Orchid dikenal karena keindahan dan keragaman bentuknya, dan mereka sering dikaitkan dengan keanggunan dan keindahan alami.',
            'image' => 'Fresh Flowers/8.jpg',
            'category_id' => 2,
        ]);

        Product::create([
            'name' => 'Zetta Willow',
            'price' => '250000',
            'description' => 'Bunga Zetta adalah bunga yang langka dan eksotis dengan kelopak yang berbentuk unik dan luar biasa. Bunga ini memiliki nuansa warna yang cerah dan lembut, dengan perpaduan warna yang menarik dan beragam. Bentuk dan struktur kelopak bunga Zetta yang tak terduga menciptakan tampilan yang menarik dan memikat. Bunga ini mengundang perhatian dan pesona dengan keindahannya yang luar biasa. Bunga Willow adalah bunga yang menakjubkan dengan kelopak yang lembut dan menyerupai dahan pohon willow. Bunga ini dikenal karena kelopaknya yang panjang dan berwarna putih atau merah muda yang indah.
            Bentuk kelopak bunga Willow yang berjuntai-juntai menciptakan tampilan yang anggun dan menawan, mirip dengan cabang-cabang pohon willow yang bergoyang di angin. Perpaduan warna putih atau merah muda memberikan nuansa kelembutan dan kesegaran. Bunga Willow sering digunakan dalam karangan bunga dan dekorasi karena keindahannya yang unik dan daya tariknya yang menonjol. Bunga ini menambah pesona romantis dan elegan dalam berbagai acara dan momen istimewa. sangat cocok untuk pemberian bagi seseorang yang disayang seperti pasangan atau ibu.',
            'image' => 'Fresh Flowers/9.jpg',
            'category_id' => 2,
        ]);

        Product::create([
            'name' => 'Tansy Sekar',
            'price' => '450000',
            'description' => 'Bunga Tansy adalah tanaman herbal yang menakjubkan dengan kelopak kuning keemasan yang mencolok. Tanaman ini tumbuh subur di berbagai kondisi tanah dan sering ditemukan di padang rumput, tepi jalan, atau area terbuka lainnya. Kelopak bunga Tansy yang berwarna kuning cerah dan kecil memberikan kesan alami dan ramah. Aroma harumnya yang khas memiliki nuansa yang menyegarkan dan bervariasi dari manis hingga sedikit pahit. Tansy sering digunakan dalam pengobatan tradisional sebagai ramuan herbal untuk berbagai tujuan, seperti mengusir serangga, mengatasi masalah pencernaan, atau mengurangi rasa nyeri. Bunga Tansy juga memiliki nilai ekologi, karena menarik banyak serangga seperti lebah dan kupu-kupu. Selain itu, dedaunan Tansy juga sering digunakan sebagai pengusir serangga alami. kemudan dipadukan dengan bunga. dari keluarga Asteraceae sering memiliki bentuk kelopak yang khas, seperti kelopak tabung yang padat di bagian tengah dan kelopak bunga yang berbentuk lidah atau petal yang menyerupai daun. Warna bunga ini juga sangat bervariasi, mencakup berbagai warna seperti putih, kuning, merah, oranye, dan ungu. Bunga-bunga sekar sering dianggap sebagai simbol keindahan, kesuburan, dan kegembiraan. Mereka sering digunakan sebagai hadiah atau dekorasi dalam berbagai acara perayaan dan momen bahagia.',
            'image' => 'Fresh Flowers/10.jpg',
            'category_id' => 2,
        ]);

        Product::create([
            'name' => 'Campanula Champion Pro White',
            'price' => '500000',
            'description' => 'Bunga Campanula Champion Pro White adalah varietas dari tanaman Campanula yang sangat menarik. Campanula, juga dikenal sebagai "bellflower," adalah kelompok tanaman berbunga dalam keluarga Campanulaceae. Berikut adalah deskripsi tentang bunga Campanula Champion Pro White:

            Campanula Champion Pro White memiliki kelopak yang menyerupai lonceng kecil, dengan warna putih murni yang mencolok dan elegan. Kelopak bunga ini menyatu membentuk bunga majemuk yang indah dan menarik, memberikan kesan keanggunan pada tanaman ini.
            
            Bunga ini memiliki batang yang tegak dan daun hijau yang membingkai bunga dengan cantiknya. Tinggi tanaman Campanula Champion Pro White bisa mencapai sekitar 30-40 cm, membuatnya cocok untuk ditanam di taman, pot, atau bahkan sebagai bunga potong dalam rangkaian bunga.',
            'image' => 'Fresh Flowers/13.jpg',
            'category_id' => 2,
        ]);

        Product::create([
            'name' => 'Lily of The Valley',
            'price' => '350000',
            'description' => '"Bunga Lily of the Valley" adalah bunga yang cantik dan beraroma manis, yang dikenal karena kelopaknya yang kecil dan lonjong serta warnanya yang putih murni. bunga ini memiliki kelopak kecil berbentuk lonjong yang tumbuh dalam kelompok kecil, memberikan kesan yang anggun dan halus sehingga terlihat memukau dengan kecantikan dan aroma manisnya.  Warna putih murni pada kelopak bunga Lily of the Valley melambangkan kesucian dan kepolosan. Bentuk dan susunan bunga ini menciptakan tampilan yang elegan dan lembut. Bunga Lily of the Valley mekar pada musim semi, menciptakan lanskap yang memesona dengan kelopaknya yang berlimpah. Ketika mekar sepenuhnya, aroma manis bunga ini menguar di sekitarnya, menciptakan suasana yang segar dan menyenangkan. Bunga ini juga menjadi pilihan yang populer dalam pernikahan dan acara-acara istimewa lainnya, menambah pesona romantis dan elegan. Selain keindahannya, Lily of the Valley memiliki makna simbolik dalam berbagai budaya. Di beberapa tempat, bunga ini melambangkan kebahagiaan, kegembiraan, dan harapan baru. Di tempat lain, Lily of the Valley dipercaya sebagai simbol kesuburan dan cinta yang tulus.',
            'image' => 'Fresh Flowers/15.jpg',
            'category_id' => 2,
        ]);

        Product::create([
            'name' => 'Wisteria Flower',
            'price' => '150000',
            'description' => 'Bunga Wisteria (Wisteria spp.) adalah bunga yang sangat indah dan populer yang tumbuh sebagai tanaman memanjat atau merambat. Bunga ini berasal dari keluarga Fabaceae dan memiliki bunga yang menyerupai kelopak yang padat dan bergugus-gugus panjang yang menggantung dari batangnya. Berikut adalah deskripsi tentang bunga Wisteria:

            Bunga Wisteria memiliki kelopak yang sangat mencolok dan menarik, dengan berbagai pilihan warna yang mencakup ungu, biru, merah muda, putih, atau campuran warna-warna tersebut. Warna yang paling umum adalah ungu dan biru.
            Bunga Wisteria biasanya berbentuk panjang, menyerupai seperti tangkai gugus kacang polong yang besar dan padat. Gugus bunga ini tumbuh di atas tanaman memanjat, menciptakan tampilan yang menakjubkan ketika mekar.
            Bunga Wisteria biasanya mekar di musim semi hingga awal musim panas, tergantung pada varietasnya dan iklim tumbuhnya.
            Selain keindahannya, bunga Wisteria juga menghadirkan aroma yang lembut dan menyenangkan, yang membuatnya menjadi pilihan yang populer untuk mengisi udara di sekitarnya dengan harum yang menyegarkan.
            
            ',
            'image' => 'Artificial Flowers/21.jpg',
            'category_id' => 3,
        ]);

        Product::create([
            'name' => 'Bunch Artificial Flower',
            'price' => '250000',
            'description' => 'Bunga Bunch Artificial Flower adalah kumpulan bunga tiruan yang dirancang untuk menampilkan keindahan dan kemiripan dengan bunga asli. Bunga tiruan ini dibuat dengan berbagai bahan seperti kain, plastik, busa, atau bahan-bahan lain yang mampu meniru tampilan bunga asli dengan baik. Kumpulan bunga artifisial ini terdiri dari berbagai jenis bunga, daun, dan tangkai yang diatur secara harmonis untuk menciptakan tampilan yang menarik dan realistis. Meskipun tiruan, bunga-bunga ini sering memiliki detail dan tekstur yang rumit sehingga terlihat nyata. Salah satu keuntungan dari bunga bunch artificial adalah bahwa mereka tidak membutuhkan perawatan khusus seperti bunga hidup, dan mereka akan tetap cantik dan segar tanpa perlu disiram atau dipotong. Bunga Bunch Artificial Flower sering digunakan sebagai dekorasi dalam berbagai acara dan tempat, seperti pernikahan, pesta, kantor, rumah, dan lainnya. Kumpulan bunga ini menambahkan sentuhan keindahan dan keceriaan pada setiap ruangan atau acara. Tersedia dalam berbagai warna, bentuk, dan gaya, bunga artificial flower menyediakan pilihan yang luas untuk memenuhi selera dan tema dekorasi yang berbeda. Beberapa bunga tiruan bahkan dirancang untuk meniru aroma bunga asli, menambah pengalaman sensorik yang lebih lengkap. Bunga Bunch Artificial Flower adalah pilihan praktis dan estetis untuk menyajikan keindahan alam tanpa repot merawat bunga hidup. Bunga tiruan ini memberikan kesan menyegarkan dan menyenangkan, menjadikan mereka pilihan yang populer dalam dunia dekorasi dan hiasan',
            'image' => 'Artificial Flowers/17.jpg',
            'category_id' => 3,
        ]);

        Product::create([
            'name' => 'Branch Artificial Flower',
            'price' => '350000',
            'description' => 'Branch Artificial Flower" mengacu pada cabang bunga palsu atau tiruan yang sering digunakan dalam dekorasi dan hiasan. Sebagai bunga tiruan atau buatan, mereka dibuat untuk menyerupai bunga asli, namun terbuat dari bahan sintetis atau material lainnya. Berikut adalah deskripsi umum tentang bunga cabang buatan:

            Bunga Branch Artificial Flower umumnya terbuat dari bahan-bahan seperti kain, plastik, busa, atau bahan sintetis lainnya. Mereka dirancang untuk meniru bentuk, warna, dan tekstur bunga asli.
            Cabang bunga buatan ini biasanya memiliki berbagai macam bunga atau tunas yang tumbuh dari satu batang, mirip dengan percabangan pohon atau semak. Ini memberi tampilan yang lebih alami dan lebih lengkap.
            Bunga cabang buatan ini hadir dalam berbagai jenis, termasuk bunga mawar, bunga lily, bunga sakura, dan banyak lagi. Beberapa varietas mungkin dirancang dengan tambahan hiasan seperti daun, ranting, atau hiasan lain untuk memberikan kesan lebih realistis.',
            'image' => 'Artificial Flowers/16.jpg',
            'category_id' => 3,
        ]);

        Product::create([
            'name' => 'Cherry Blossom',
            'price' => '300000',
            'description' => '"Bunga Cherry Blossom" atau "bunga sakura" adalah bunga yang sangat indah dan populer, yang tumbuh pada pohon-pohon ceri atau cherry (Prunus serrulata atau Prunus avium). Bunga ini terkenal karena kecantikan dan keanggunannya, dan sering dianggap sebagai simbol keindahan alam dan kehidupan yang singkat. "Bunga Cherry Blossom adalah bunga yang menakjubkan dan memukau dengan kelopaknya yang lembut dan halus. Bunga ini tumbuh dalam kelompok yang padat dan mencolok di pohon-pohon cherry pada musim semi. Bunga Cherry Blossom adalah simbol keindahan yang singkat dan kehidupan yang berharga. Karena masa mekar bunga ini yang terbatas, Cherry Blossom sering dianggap sebagai perwujudan dari keindahan yang lembut dan momen yang tak terulang. Maka dari itu, produk ini dibuat secara artificial agar bertahan lama dan tidak bertahan sebentar saja.',
            'image' => 'Artificial Flowers/13.jpg',
            'category_id' => 3,
        ]);

        Product::create([
            'name' => 'Polyester Faux',
            'price' => '450000',
            'description' => '"Bunga Polyester Faux adalah bunga tiruan atau palsu yang dibuat dengan menggunakan bahan serat polyester. Bunga ini dirancang dan dibuat untuk meniru tampilan dan bentuk bunga asli, tetapi sebenarnya terbuat dari bahan sintetis.

            Bunga Polyester Faux dapat memiliki berbagai bentuk dan warna, meniru berbagai jenis bunga alami seperti mawar, lily, tulip, dan lain-lain. Mereka sering ditemukan dalam berbagai macam rangkaian bunga buatan atau digunakan dalam dekorasi rumah, acara pernikahan, atau dekorasi acara lainnya.
            Keuntungan menggunakan bunga Polyester Faux adalah karena bahan serat polyester tahan lama, tidak mudah layu, dan tidak memerlukan perawatan khusus seperti bunga asli. Bunga ini juga bisa digunakan berulang kali untuk berbagai kesempatan, serta tidak mengeluarkan aroma tertentu atau mengundang serangga penyerbuk.
            Bunga Polyester Faux adalah pilihan yang populer untuk dekorasi dan hiasan karena kemudahan perawatannya dan kemampuannya untuk memberikan tampilan yang cantik dan menarik pada berbagai acara dan ruangan. Dengan berbagai bentuk dan warna yang tersedia, bunga ini memberikan fleksibilitas dalam menciptakan dekorasi yang sesuai dengan gaya dan tema yang diinginkan."',
            'image' => 'Artificial Flowers/20.jpg',
            'category_id' => 3,
        ]);

        Product::create([
            'name' => 'Pink Bonsai',
            'price' => '550000',
            'description' => '"Bunga Pink Bonsai" mengacu pada bonsai yang memiliki bunga berwarna pink, yang tumbuh pada pohon miniatur yang dirawat dengan teliti. karya seni hidup yang memukau, menggabungkan keindahan bonsai dengan pesona warna pink yang menawan. Bonsai ini merupakan karya unik yang menciptakan harmoni antara seni pertumbuhan tanaman dan kecantikan alam. Pohon miniatur dalam Bunga Pink Bonsai dirawat dengan penuh kesabaran dan keahlian untuk mencapai bentuk dan struktur yang indah. Dedikasi terhadap teknik bonsai menciptakan pohon kecil yang serupa dengan pohon alaminya, dengan cabang, batang, dan akar yang halus dan proporsional. Puncak keindahan Bunga Pink Bonsai adalah mekar bunga pink yang menghiasi cabang-cabangnya. Bunga-bunga ini memberikan warna yang cerah dan mencolok, menciptakan pemandangan yang mengesankan dan mempesona. Bunga Pink Bonsai sering dijadikan sebagai dekorasi interior yang menarik perhatian. Bonsai ini menciptakan atmosfer yang tenang dan harmonis, menghadirkan keindahan alam dalam ruang dalam. Bonsai ini juga sering dihargai sebagai hadiah yang istimewa, mewakili perpaduan antara keahlian tangan manusia dan keindahan alam. Bunga Pink Bonsai adalah simbol keanggunan, ketekunan, dan keindahan yang timeless, yang akan memberikan kesan mendalam pada setiap orang yang melihatnya.',
            'image' => 'Artificial Flowers/3.jpg',
            'category_id' => 3,
        ]);

        Product::create([
            'name' => 'Tiny Rose',
            'price' => '600000',
            'description' => 'Bunga Tiny Rose, seperti namanya, adalah varietas bunga mawar yang memiliki ukuran yang kecil dan kompak. Deskripsi tentang bunga Tiny Rose sebagai berikut:

            Bunga Tiny Rose memiliki kelopak yang mungil dan padat, dengan diameter bunga yang lebih kecil dari ukuran bunga mawar biasa. Mereka dapat memiliki diameter bunga sekitar 1 hingga 2 sentimeter atau bahkan lebih kecil.
            Warna bunga Tiny Rose bervariasi dan mencakup berbagai pilihan, seperti merah, merah muda, putih, ungu, kuning, atau campuran warna-warna tersebut. Karena ukurannya yang kecil, bunga ini sering tumbuh dalam jumlah yang banyak dan menghasilkan penampilan yang menggemaskan dan menarik.
            Batang bunga Tiny Rose biasanya pendek dan tangkainya padat dengan daun hijau yang mengelilingi bunga. Daunnya yang kecil dan padat juga menambah kesan keindahan pada bunga ini.
            Bunga Tiny Rose biasanya mekar dalam kelompok yang menggugah selera, menciptakan tampilan yang indah dan menawan pada tanaman.',
            'image' => 'Artificial Flowers/4.jpg',
            'category_id' => 3,
        ]);

        Product::create([
            'name' => 'White Cassia Iris',
            'price' => '750000',
            'description' => '"Bunga White Cassia adalah bunga yang anggun dan cantik dengan kelopak berwarna putih yang mencolok. Cassia adalah sejenis tanaman berbunga yang termasuk dalam keluarga Fabaceae. Bunga ini dikenal karena kelopaknya yang panjang dan ramping, yang terbuka dengan elegan ketika mekar sepenuhnya. Bunga White Cassia memiliki rangkaian bunga yang indah dan anggun, dengan kelopak yang tersusun dalam susunan yang teratur.  "Bunga Iris adalah bunga yang menawan dengan kelopak yang unik dan berwarna-warni. Iris adalah genus tanaman berbunga yang mengandung berbagai spesies dengan beragam warna dan bentuk kelopak. Bunga Iris juga memiliki makna simbolik yang mendalam dalam berbagai budaya, termasuk keindahan, keberuntungan, dan harapan baru. Keanggunan dan keunikan bunga Iris menjadikannya pilihan yang populer dalam lanskap taman dan karangan bunga dekoratif. Maka dari itu, sangat cocok sebagai hiasan rumah atau dekorasi karena bersifat plastik dan awet saat digunakan dalam jangka panjang.',
            'image' => 'Artificial Flowers/10.jpg',
            'category_id' => 3,
        ]);

        Product::create([
            'name' => 'Amaryllis',
            'price' => '250000',
            'description' => '"Bunga Amaryllis" adalah bunga yang menakjubkan dengan kelopak yang besar, berwarna-warni, dan seringkali memiliki corong tengah yang mencolok. Bentuk kelopak Amaryllis yang menggembung ke luar menciptakan tampilan yang dramatis dan indah. Bunga Amaryllis sering dikaitkan dengan makna simbolik yang kuat, termasuk keindahan yang mempesona, keberuntungan, dan kebangkitan. Bunga ini sering diberikan sebagai hadiah istimewa untuk menyampaikan penghargaan, cinta, atau harapan baru. "Bunga Amaryllis" adalah lambang keindahan alam yang mempesona dan kekuatan untuk tumbuh dan mekar di tengah tantangan. Dengan kelopak yang besar, warna yang mencolok, dan simbolik yang kuat, bunga Amaryllis menyimpan pesona yang tak terlupakan dan menyentuh hati siapa pun yang beruntung melihatnya. Maka dari itu, bunga ini dibuat dengan plastik agar dapat selalu menemani pemiliknya dalam jangka sangat panjang.',
            'image' => 'Artificial Flowers/7.jpg',
            'category_id' => 3,
        ]);

        Product::create([
            'name' => 'Azrina Blossom',
            'price' => '450000',
            'description' => '"Azrina Blossom" terdiri dari bunga mawar mini yang lucu dan imut serta memiliki warna pink pastel, oranye pastel, dan putih. Bunga ini sangat indah dan unik yang diberi nuansa bermekaran. Bunga ini sangat cocok ketika diberikan kepada seseorang atau sekedar dekorasi pernikahan atau ulang tahun yang mengangkat tema bunga',
            'image' => 'Artificial Flowers/6.jpg',
            'category_id' => 3,
        ]);

        Product::create([
            'name' => 'Aiyana Calyta',
            'price' => '500000',
            'description' => '"Aiyana Calyta" memiliki warna bunga yang kalem dan dominan putih. akan tetapi diberi beberapa hiasan tambahan seperti dedaunan ilalang dan dedaunan buatan yang memiliki warna yang berbeda dari bunga. dedaunan ini biasanya memiliki warna hijau, orange, cream, dan lainnya. alasan memakai dedaunan yang warna mencolok agar warna putih dari bunga terlihat suci dan elegan. Bunga ini sangat cocok untuk hiasan dirumah atau sebagai bouquet bunga untuk dibawa sang pengantin wanita.',
            'image' => 'Artificial Flowers/8.webp',
            'category_id' => 3,
        ]);

        Product::create([
            'name' => 'Danica Eshal',
            'price' => '350000',
            'description' => 'Bunga Danica Eshal adalah bunga lily putih yang di padukan dengan dedaunan, sehingga memiliki  kombinasi keindahan dan elegansi yang menakjubkan. bunga lily melambangkan keindahan, kepolosan, kesucian, kemurnian, dan keagungan. maka dari itu sangat cocok sebagai hiasan di rumah untuk menambah estetika pada ruangan. tidak hanya itu, warna nya yang putih dapat memnberi kesan yang lembut dan suci sehingga membawa suasana ruangan lebih elegan.',
            'image' => 'Artificial Flowers/1.jpg',
            'category_id' => 3,
        ]);

        Product::create([
            'name' => 'Dahlia Bundle Bouquet',
            'price' => '150000',
            'description' => '"Dahlia Bundle Bouquet" adalah kumpulan atau bunga rangkaian dahlia yang indah dan menarik yang diatur dalam satu rangkaian atau ikatan. Dahlia adalah bunga yang berasal dari Meksiko dan Amerika Tengah, dan dikenal karena kelopak besar dan beraneka warna yang mencolok. Berikut adalah deskripsi tentang "Dahlia Bundle Bouquet":

            Dahlia Bundle Bouquet terdiri dari beberapa bunga dahlia yang dipotong dan diikat bersama dengan tangkai atau pita. Kumpulan ini biasanya mencakup beberapa varietas dahlia yang berbeda dalam berbagai warna dan ukuran.
            Bunga dahlia dalam Dahlia Bundle Bouquet memiliki kelopak besar dan berbentuk seperti bunga daisy yang padat. Warna kelopak bunga ini sangat bervariasi dan mencakup pilihan yang indah seperti merah, merah muda, putih, kuning, ungu, oranye, dan berbagai campuran warna-warna lainnya.
            Kombinasi warna dan bentuk kelopak yang berbeda memberikan keindahan visual dan keanggunan pada rangkaian bunga ini. Dahlia Bundle Bouquet menciptakan tampilan yang mencolok dan menarik, cocok untuk berbagai acara atau dekorasi dalam rumah atau acara-acara khusus.',
            'image' => 'Hand Bouquet/Dahlia Bundle Bouquet.jpg',
            'category_id' => 4,
        ]);

        Product::create([
            'name' => 'Daisy Flower Bouquet',
            'price' => '250000',
            'description' => 'Bunga Daisy Flower Bouquet adalah rangkaian bunga daisy yang indah dan menyegarkan yang diatur dengan apik dalam satu ikatan atau rangkaian. Daisy adalah bunga yang sangat populer dan dikenal karena kesederhanaan dan keindahannya. Berikut adalah deskripsi tentang "Daisy Flower Bouquet":

            Bunga Daisy Flower Bouquet terdiri dari sejumlah bunga daisy yang dipotong dan diikat bersama dengan tangkai atau pita. Kumpulan ini biasanya mencakup beberapa bunga daisy dalam berbagai ukuran dan warna.
            Bunga daisy memiliki kelopak yang lebar dengan pusat berwarna kuning mencolok. Warnanya yang khas, seperti putih atau merah muda dengan pusat kuning, menciptakan tampilan yang menyenangkan dan ceria.
            Bunga daisy memiliki bentuk yang menyerupai matahari, dengan kelopak yang melebar dan terbuka seperti sinar matahari yang bersinar. Kombinasi bentuk kelopak yang unik dan warna yang mencolok membuat bunga daisy menjadi salah satu favorit dalam rangkaian bunga.',
            'image' => 'Hand Bouquet/Daisy Flower Bouquet.jpg',
            'category_id' => 4,
        ]);

        Product::create([
            'name' => 'Dusty Blue and White Bouquet',
            'price' => '350000',
            'description' => 'Bunga Dusty Blue and White Bouquet adalah rangkaian bunga yang indah dan elegan yang terdiri dari bunga berwarna biru pudar dan putih. Kombinasi warna ini menciptakan tampilan yang menenangkan, anggun, dan memikat. Berikut adalah deskripsi tentang "Dusty Blue and White Bouquet":

            Bunga Dusty Blue and White Bouquet terdiri dari sejumlah bunga dengan nuansa biru pudar atau dusty blue dan bunga putih yang dipotong dan diikat bersama dengan tangkai atau pita. Kombinasi warna biru pudar dan putih menciptakan tampilan yang lembut dan anggun.
            Warna biru pudar atau dusty blue adalah warna biru muda yang agak redup, memberikan sentuhan kesan vintage atau romantis pada rangkaian bunga. Sementara itu, bunga putih memberikan kesan kesucian dan keanggunan.
            Bunga Dusty Blue and White Bouquet biasanya dihiasi dengan daun hijau atau dedaunan lainnya, yang menambah nuansa alami dan keindahan pada rangkaian bunga.
            Bunga-bunga yang biasa digunakan dalam Dusty Blue and White Bouquet antara lain bunga mawar, bunga mawar ranunculus, bunga hydrangea, dan bunga delphinium. Selain itu, bunga gypsophila (bunga babys breath) juga sering digunakan sebagai pengisi yang memberikan tampilan ringan dan anggun pada rangkaian.',
            'image' => 'Hand Bouquet/Dusty Blue and White Bouquet.jpg',
            'category_id' => 4,
        ]);

        Product::create([
            'name' => 'Eucalyptus Rose Bouquet',
            'price' => '300000',
            'description' => 'Eucalyptus Rose Bouquet adalah rangkaian bunga yang indah dan menarik yang terdiri dari bunga mawar yang dipadukan dengan daun eukaliptus. Ini adalah kombinasi yang populer dalam rangkaian bunga karena kesan keanggunan dan kesegaran yang ditambahkan oleh daun eukaliptus. Berikut adalah deskripsi tentang "Eucalyptus Rose Bouquet":

            Eucalyptus Rose Bouquet terdiri dari beberapa batang bunga mawar yang dipotong dengan hati-hati dan diatur bersama dengan daun eukaliptus. Daun eukaliptus yang hijau dan aromatik biasanya digunakan sebagai pengisi untuk mengisi celah antara bunga mawar, memberikan dimensi tambahan dan kesan yang segar pada rangkaian.
            Bunga mawar yang sering digunakan dalam Eucalyptus Rose Bouquet biasanya memiliki kelopak yang lebar dan padat, dengan berbagai pilihan warna yang mencakup merah, merah muda, putih, kuning, ungu, dan berbagai campuran warna lainnya. Bunga mawar memberikan keindahan yang khas dan memikat pada rangkaian.
            Daun eukaliptus memiliki bentuk dan tekstur yang unik, dengan warna hijau yang menyegarkan dan aroma yang harum. Penggunaan daun ini dalam rangkaian bunga menambah sentuhan alami dan keanggunan pada tampilan bouquet.',
            'image' => 'Hand Bouquet/Eucalyptus Rose Bouquet.jpg',
            'category_id' => 4,
        ]);

        Product::create([
            'name' => 'Lily Bouquet',
            'price' => '450000',
            'description' => 'Lily Bouquet adalah rangkaian bunga yang indah dan elegan yang terdiri dari bunga-bunga lily. Lily adalah bunga yang sangat populer dan dikenal karena keindahan dan keharumannya yang khas. Berikut adalah deskripsi tentang "Lily Bouquet":

            Lily Bouquet terdiri dari beberapa batang bunga lily yang dipotong dengan hati-hati dan diatur bersama dengan tangkai atau pita. Kumpulan ini biasanya mencakup beberapa varietas lily dalam berbagai ukuran, warna, dan bentuk.
            Bunga lily memiliki kelopak yang lebar dan menyerupai lonceng dengan pusat yang mencolok dan serbuk sari yang menonjol. Warna kelopak bunga ini sangat bervariasi dan mencakup pilihan yang indah seperti putih, merah muda, kuning, oranye, ungu, dan campuran warna-warna lainnya.
            Lily Bouquet biasanya dihiasi dengan dedaunan hijau yang menambah nuansa alami dan keindahan pada rangkaian bunga.
            Lily adalah simbol keindahan, kemurnian, dan keanggunan, menjadikannya pilihan populer untuk berbagai kesempatan termasuk pernikahan, acara spesial, atau sebagai hadiah romantis.
            Lily Bouquet biasanya diatur dalam bentuk yang elegan dan terstruktur, menciptakan tampilan yang indah dan anggun.',
            'image' => 'Hand Bouquet/Lily Bouquet.jpg',
            'category_id' => 4,
        ]);

        Product::create([
            'name' => 'Lisianthus Bouquet',
            'price' => '550000',
            'description' => 'Lisianthus Bouquet adalah rangkaian bunga yang indah dan anggun yang terdiri dari bunga-bunga lisianthus. Lisianthus adalah bunga yang populer karena bentuknya yang elegan dan kelopaknya yang lembut seperti kertas. Berikut adalah deskripsi tentang "Lisianthus Bouquet":

            Lisianthus Bouquet terdiri dari beberapa batang bunga lisianthus yang dipotong dengan hati-hati dan diatur bersama dengan tangkai atau pita. Kumpulan ini biasanya mencakup beberapa varietas lisianthus dalam berbagai warna seperti putih, merah muda, ungu, biru, kuning, dan campuran warna lainnya.
            Bunga lisianthus memiliki kelopak yang tipis dan lembut, menyerupai bunga mawar yang padat dan bergugus-gugus. Kelopaknya yang lembut seperti kertas memberikan kesan keanggunan dan kehalusan pada rangkaian bunga.
            Lisianthus Bouquet biasanya dihiasi dengan dedaunan hijau atau daun eukaliptus sebagai pengisi, yang menambah dimensi dan kesegaran pada rangkaian.
            Bouquet ini biasanya diatur dalam bentuk yang elegan dan terstruktur, menciptakan tampilan yang indah dan menarik.',
            'image' => 'Hand Bouquet/Lisianthus Bouquet.jpg',
            'category_id' => 4,
        ]);

        Product::create([
            'name' => 'Lovely Lavender Bouquet',
            'price' => '600000',
            'description' => 'Lovely Lavender Bouquet adalah rangkaian bunga yang cantik dan menawan yang terdiri dari bunga-bunga berwarna lavender atau ungu lembut. Lavender adalah warna yang khas, menenangkan, dan menarik perhatian. Berikut adalah deskripsi tentang "Lovely Lavender Bouquet":

            Lovely Lavender Bouquet terdiri dari beberapa batang bunga dengan nuansa lavender atau ungu lembut yang dipotong dengan hati-hati dan diatur bersama dengan tangkai atau pita. Kumpulan ini biasanya mencakup beberapa varietas bunga dengan warna lavender, seperti mawar lavender, lisianthus lavender, atau bunga hortensia ungu.
            Bunga-bunga dengan warna lavender memberikan tampilan yang elegan dan menenangkan pada rangkaian bunga. Warna ini sering dikaitkan dengan rasa keanggunan, kelembutan, dan kemewahan.
            Lovely Lavender Bouquet biasanya dihiasi dengan dedaunan hijau sebagai pengisi, yang menambah dimensi dan kesegaran pada rangkaian.
            Bouquet ini biasanya diatur dalam bentuk yang indah dan harmonis, menciptakan tampilan yang menawan dan mempesona.',
            'image' => 'Hand Bouquet/Lovely Lavender Bouquet.jpg',
            'category_id' => 4,
        ]);

        Product::create([
            'name' => 'Purple Lavender Bouquet',
            'price' => '750000',
            'description' => 'Purple Lavender Bouquet adalah rangkaian bunga yang menakjubkan dan menarik yang terdiri dari bunga-bunga dengan warna ungu yang mirip dengan warna bunga lavender. Lavender adalah tanaman dengan bunga kecil berwarna ungu yang sangat harum dan sering digunakan untuk keperluan aromaterapi dan pengobatan herbal. Berikut adalah deskripsi tentang "Purple Lavender Bouquet":

            Purple Lavender Bouquet terdiri dari beberapa batang bunga dengan nuansa ungu yang mirip dengan warna bunga lavender, seperti bunga mawar ungu, lisianthus ungu, atau bunga hortensia ungu. Bunga-bunga ini dipotong dengan hati-hati dan diatur bersama dengan tangkai atau pita.
            Warna ungu dalam Purple Lavender Bouquet menciptakan tampilan yang anggun, misterius, dan menawan. Ungu sering dikaitkan dengan rasa kemewahan, kekuatan, dan kelembutan.
            Bouquet ini biasanya dihiasi dengan dedaunan hijau sebagai pengisi, yang menambah dimensi dan kesegaran pada rangkaian.
            Purple Lavender Bouquet sering diatur dalam bentuk yang indah dan simetris, menciptakan tampilan yang mempesona dan memikat.',
            'image' => 'Hand Bouquet/Purple Lavender Bouquet.jpg',
            'category_id' => 4,
        ]);

        Product::create([
            'name' => 'Rose Bouquet',
            'price' => '250000',
            'description' => 'Rose Bouquet adalah rangkaian bunga yang indah dan klasik yang terdiri dari bunga-bunga mawar. Bunga mawar adalah salah satu jenis bunga paling populer di dunia, dikenal karena keindahan dan aroma khasnya. Berikut adalah deskripsi tentang "Rose Bouquet":

            Rose Bouquet terdiri dari beberapa batang bunga mawar yang dipotong dengan hati-hati dan diatur bersama dengan tangkai atau pita. Kumpulan ini biasanya mencakup beberapa varietas mawar dalam berbagai warna seperti merah, merah muda, putih, kuning, ungu, oranye, dan campuran warna lainnya.
            Bunga mawar memiliki kelopak yang lebar dan padat, dengan bentuk yang khas seperti lonceng yang mekar. Setiap varietas mawar memiliki bentuk dan tekstur kelopak yang unik.
            Rose Bouquet biasanya dihiasi dengan dedaunan hijau sebagai pengisi, yang menambah dimensi dan kesegaran pada rangkaian bunga.
            Bouquet ini biasanya diatur dalam bentuk yang indah dan simetris, menciptakan tampilan yang elegan dan menawan.
            Bunga mawar adalah simbol cinta, kecantikan, dan kelembutan, menjadikan Rose Bouquet pilihan yang populer untuk berbagai kesempatan termasuk pernikahan, acara-acara spesial, atau sebagai hadiah romantis.',
            'image' => 'Hand Bouquet/Rose Bouquet.jpg',
            'category_id' => 4,
        ]);

        Product::create([
            'name' => 'Rose Kubhis Bouquet',
            'price' => '450000',
            'description' => 'Rose Kubhis Bouquet adalah rangkaian bunga yang unik dan artistik yang menggabungkan bunga mawar dengan elemen kubhis atau potongan-potongan kain yang menarik. Deskripsi "Kubhis" mungkin merujuk pada bentuk dan tekstur kubis, atau bisa juga merupakan kata yang tidak baku atau khayalan yang menggambarkan kombinasi yang menarik dan tidak biasa.
            Dalam Rose Kubhis Bouquet, bunga mawar dengan kelopak lebar dan padat memberikan tampilan yang indah dan klasik, sementara potongan-potongan kubhis atau kain menambah dimensi dan keunikan pada rangkaian bunga.
            Bouquet ini mungkin memiliki warna dan tekstur yang beragam, mencakup berbagai warna mawar seperti merah, merah muda, putih, ungu, kuning, dan lainnya, serta elemen kubhis dalam berbagai warna atau pola.
            Rose Kubhis Bouquet diatur secara kreatif dan simetris, menciptakan tampilan yang artistik dan mencolok. Penggunaan kubhis memberikan sentuhan desain yang unik dan menambah nuansa artistik pada rangkaian.',
            'image' => 'Hand Bouquet/Rose Kubhis Bouquet.jpg',
            'category_id' => 4,
        ]);

        Product::create([
            'name' => 'Blue Magenta',
            'price' => '500000',
            'description' => '"Blue Magenta Bouquet" adalah rangkaian bunga yang indah dan menarik yang terdiri dari bunga-bunga dengan warna biru dan magenta. Ini adalah kombinasi warna yang mencolok dan memberikan tampilan yang menarik dan segar. Berikut adalah deskripsi tentang "Blue Magenta Bouquet":

            Blue Magenta Bouquet terdiri dari beberapa batang bunga dengan nuansa biru dan magenta yang dipotong dengan hati-hati dan diatur bersama dengan tangkai atau pita. Kumpulan ini mencakup beberapa varietas bunga dengan warna biru dan magenta, seperti mawar biru, mawar magenta, lisianthus biru, lisianthus magenta, atau bunga hortensia dengan warna yang sesuai.
            Warna biru dalam bouquet memberikan perasaan ketenangan, kedalaman, dan keseimbangan, sementara warna magenta memberikan nuansa yang cerah dan penuh gairah. Kombinasi ini menciptakan tampilan yang dinamis dan mencolok.
            Blue Magenta Bouquet biasanya dihiasi dengan dedaunan hijau sebagai pengisi, yang menambah dimensi dan kesegaran pada rangkaian bunga.
            Bouquet ini biasanya diatur dalam bentuk yang indah dan harmonis, menciptakan tampilan yang menarik dan memukau.',
            'image' => 'Hand Bouquet/Blue Magenta.jpeg',
            'category_id' => 4,
        ]);

        Product::create([
            'name' => 'Statice Lemonium Bouquet',
            'price' => '350000',
            'description' => '"Statice Lemonium Bouquet" adalah rangkaian bunga yang menarik yang terdiri dari bunga-bunga statice lemonium. Statice lemonium, juga dikenal sebagai statis atau bunga musim panas, adalah bunga yang populer dalam aransemen bunga karena warna-warna cerah dan tekstur kering yang tahan lama. Berikut adalah deskripsi tentang "Statice Lemonium Bouquet":

            Statice Lemonium Bouquet terdiri dari beberapa batang bunga statice lemonium yang dipotong dengan hati-hati dan diatur bersama dengan tangkai atau pita. Bunga statice lemonium memiliki kelopak kecil dan kompak yang membentuk tampilan menarik dan padat pada rangkaian bunga.
            Bunga statice lemonium sering hadir dalam berbagai warna cerah seperti kuning, merah muda, ungu, biru, putih, atau campuran warna lainnya. Namun, dalam "Statice Lemonium Bouquet", warna utama yang digunakan adalah kuning lemon atau nuansa cerah lainnya.
            Statice lemonium memiliki tekstur yang kering dan tahan lama, sehingga bouquet ini juga cocok untuk pengeringan bunga atau sebagai dekorasi kering setelah layu.
            Statice Lemonium Bouquet biasanya dihiasi dengan dedaunan hijau atau dedaunan kering lainnya sebagai pengisi, yang menambah dimensi dan kesegaran pada rangkaian.',
            'image' => 'Hand Bouquet/Statice Lemonium Bouquet.jpg',
            'category_id' => 4,
        ]);

        Product::create([
            'name' => 'Chrome Modern Rectangle Stand Metal Geometric Vase',
            'price' => '150000',
            'description' => 'Standing Flower dari Chrome Modern Rectangle Stand Metal Geometric Vase adalah sebuah rangkaian bunga yang ditempatkan pada sebuah vas geometris dari logam berwarna chrome, dengan bentuk segi empat panjang yang modern. Vas ini dirancang secara khusus untuk memberikan tampilan kontemporer dan elegan pada dekorasi bunga. Rangkaian bunga ini mungkin terdiri dari bunga-bunga yang indah dan beraneka warna, seperti mawar, lily, tulip, atau bunga-bunga lainnya yang sesuai dengan tema dan preferensi dekorasi. Bunga-bunga tersebut akan ditempatkan dengan hati-hati pada posisi dan tinggi yang tepat untuk memberikan tampilan yang harmonis. Vas geometris chrome yang berdiri kokoh akan menambah sentuhan modern dan gaya pada tatanan bunga tersebut. Bentuk segi empat panjang memberikan kesan minimalis dan elegan, serta memberikan kontras yang menarik dengan keindahan bunga-bunga yang diatur di dalamnya.

            Standing Flower dari Chrome Modern Rectangle Stand Metal Geometric Vase adalah pilihan ideal untuk acara-acara khusus, pernikahan, pesta, atau dekorasi interior dalam ruangan. Tampilannya yang cantik dan bergaya akan menarik perhatian dan memberikan kesan yang tak terlupakan pada siapa pun yang melihatnya. Vas geometris logam berwarna chrome juga memberikan daya tahan dan kekuatan untuk menopang rangkaian bunga dengan stabil, sehingga memastikan bahwa tatanan bunga tersebut tetap indah dan menarik sepanjang acara atau periode waktu tertentu. Dengan kombinasi antara kecantikan bunga-bunga dan kesan modern dari vas geometris chrome, Standing Flower dari Chrome Modern Rectangle Stand Metal Geometric Vase akan menjadi pusat perhatian yang elegan dan mempesona dalam setiap acara atau ruangan dekoratif.',
            'image' => 'Standing Flowers/Chrome.jpg',
            'category_id' => 5,
        ]);

        Product::create([
            'name' => 'Elegant White and Green Flowers',
            'price' => '250000',
            'description' => 'Standing Flower dari Elegant White and Green Flowers adalah rangkaian bunga berdiri yang anggun, terdiri dari bunga-bunga berwarna putih dan hijau yang memukau. Kombinasi warna putih dan hijau memberikan tampilan yang segar, lembut, dan elegan. Rangkaian bunga ini mungkin terdiri dari berbagai jenis bunga, seperti mawar putih, lily putih, anyelir putih, bunga krisan, atau bunga-bunga hijau seperti eucalyptus, daun salam, atau bunga-bunga hijau lainnya. Bunga-bunga putih dan hijau ini dipilih dengan cermat untuk menciptakan harmoni dan kontras yang menakjubkan. Bunga-bunga putih melambangkan kesucian, kepolosan, dan keanggunan, sementara bunga-bunga hijau melambangkan kehidupan, keseimbangan, dan kesegaran. Kombinasi keduanya menciptakan tampilan yang menggabungkan keanggunan dengan kesegaran, menciptakan kesan yang menenangkan dan mempesona.Standing Flower ini menjadi pilihan yang tepat untuk memberikan sentuhan keindahan alam dan estetika dalam acara atau lingkungan apapun.',
            'image' => 'Standing Flowers/Elegant.jpg',
            'category_id' => 5,
        ]);

        Product::create([
            'name' => 'Gold Flower Stand Floral',
            'price' => '350000',
            'description' => 'Standing Flower dari Gold Flower Stand Floral adalah rangkaian bunga berdiri yang mewah dan megah, dipasang di atas sebuah rangkaian berdiri yang terbuat dari logam berwarna emas. Tampilan ini menyajikan kombinasi elegan antara kecantikan bunga dengan kilauan mewah dari rangkaian emas. Rangkaian bunga ini mungkin terdiri dari berbagai jenis bunga yang indah, seperti mawar, lily, tulip, atau bunga-bunga eksotis lainnya yang sesuai dengan tema dan preferensi dekorasi. Bunga-bunga ini akan ditempatkan dengan cermat pada posisi dan tinggi yang tepat untuk menciptakan tatanan yang harmonis dan mempesona. Rangkaian berdiri yang terbuat dari logam berwarna emas memberikan sentuhan elegan dan mewah pada tampilan bunga ini. Kilauan emas yang memantulkan cahaya menciptakan nuansa kemewahan dan keanggunan yang tidak terlupakan. Standing Flower dari Gold Flower Stand Floral cocok untuk acara-acara khusus, seperti pernikahan, resepsi, acara formal, atau dekorasi dalam ruangan yang menghendaki tampilan mewah dan glamor. Tampilan ini akan menjadi pusat perhatian dalam acara atau ruangan, mencuri perhatian dengan pesona yang megah.',
            'image' => 'Standing Flowers/Gold.jpg',
            'category_id' => 5,
        ]);

        Product::create([
            'name' => 'Grand Event Centerpiece with Crystals',
            'price' => '300000',
            'description' => 'Standing Flower dari Grand Event Centerpiece with Crystals adalah rangkaian bunga berdiri yang megah dan mewah, dihiasi dengan kristal-kristal yang mengkilap. Tampilan ini dirancang khusus untuk menjadi pusat perhatian dalam acara besar dan istimewa. Rangkaian bunga ini mungkin terdiri dari berbagai jenis bunga yang indah dan elegan, seperti mawar, lily, orkid, atau bunga-bunga eksotis lainnya. Bunga-bunga ini akan ditempatkan dengan penuh ketelitian pada posisi dan tinggi yang tepat untuk menciptakan tatanan yang spektakuler dan mempesona. Tidak hanya bunga yang indah, tetapi juga kristal-kristal yang dipasang dengan cermat pada rangkaian ini. Kilauan kristal-kristal yang menghadirkan cahaya seperti permata akan menambah sentuhan kemewahan dan gemerlap pada tampilan bunga ini. tanding Flower dari Grand Event Centerpiece with Crystals adalah pilihan sempurna untuk acara-acara mewah seperti pernikahan, gala, acara perusahaan, atau acara formal lainnya.',
            'image' => 'Standing Flowers/Grand.jpg',
            'category_id' => 5,
        ]);

        Product::create([
            'name' => 'Industrial Romantic NYC',
            'price' => '450000',
            'description' => 'Standing Flower dari Industrial Romantic NYC adalah rangkaian bunga berdiri yang mencerminkan perpaduan antara suasana industri modern dan nuansa romantis kota New York City (NYC). Tampilannya menggabungkan sentuhan urban dan elegan yang unik, menciptakan suasana yang menarik dan berbeda. Rangkaian bunga ini mungkin terdiri dari bunga-bunga berwarna-warni yang indah, seperti mawar, lily, bunga krisan, bunga matahari, atau bunga-bunga eksotis lainnya yang sesuai dengan tema dan karakteristik dekorasi. Standing Flower dari Industrial Romantic NYC dipasangkan dengan elemen tambahan yang menggambarkan suasana industri, seperti rangkaian berdiri yang terbuat dari logam atau bahan lain dengan tampilan yang kasar dan kokoh, atau tambahan dekorasi yang mengandung unsur-unsur industri seperti pipa-pipa, rantai, atau aksen logam lainnya. Selain itu, bunga dan rangkaian tersebut juga dihiasi dengan sentuhan romantisme yang khas dari NYC, mungkin dengan tambahan hiasan seperti pita sutra yang lembut, kain lace yang anggun, atau elemen dekorasi lainnya yang menciptakan nuansa romantis dan elegan. Standing Flower dari Industrial Romantic NYC adalah pilihan yang tepat untuk acara-acara tema kota atau urban, acara pernikahan yang menggabungkan elemen modern dan romantis, atau dekorasi interior yang menggambarkan suasana perkotaan yang menawan.',
            'image' => 'Standing Flowers/Industrial.jpg',
            'category_id' => 5,
        ]);

        Product::create([
            'name' => 'Metal Floor Column Stand Geometric Centerpiece',
            'price' => '550000',
            'description' => 'Standing Flower dari Metal Floor Column Stand Geometric Centerpiece adalah rangkaian bunga berdiri yang unik dan modern, dipasang di atas sebuah kolom berdiri yang terbuat dari logam dengan desain geometris. Tampilan ini menciptakan kesan kontemporer dan elegan pada dekorasi bunga. Rangkaian bunga ini mungkin terdiri dari berbagai jenis bunga yang indah, seperti mawar, lily, bunga poppy atau bunga-bunga eksotis lainnya yang sesuai dengan tema dan preferensi dekorasi. Bunga-bunga ini akan ditempatkan secara artistik dan proporsional pada kolom berdiri dengan desain geometris, menciptakan tatanan yang menarik dan simetris. Standing Flower dari Metal Floor Column Stand Geometric Centerpiece adalah pilihan ideal untuk acara-acara dengan tema modern atau urban, acara pernikahan yang menggabungkan gaya kontemporer, atau dekorasi interior yang mencari tampilan yang inovatif. Tampilannya yang unik dan artistik mencerminkan keindahan alam yang dipadukan dengan sentuhan industrial, menciptakan kesan harmoni yang menarik perhatian. Standing Flower ini akan menjadi pusat perhatian dalam acara atau ruangan, memberikan tampilan yang elegan dan mempesona bagi semua orang yang melihatnya.',
            'image' => 'Standing Flowers/Metal.jpg',
            'category_id' => 5,
        ]);

        Product::create([
            'name' => 'Neo Classic Stand',
            'price' => '600000',
            'description' => 'Standing Flower dari Neo Classic Stand adalah rangkaian bunga berdiri yang mengusung gaya neo klasik yang elegan dan anggun. Tampilan ini menggabungkan elemen klasik dengan sentuhan modern, menciptakan kesan yang mencolok dan memukau. Rangkaian bunga ini mungkin terdiri dari bunga-bunga yang indah dan beraneka warna, seperti mawar, lily, tulip, bunga krisan, atau bunga-bunga eksotis lainnya yang sesuai dengan tema dan karakteristik dekorasi. Bunga-bunga ini akan ditempatkan dengan hati-hati pada posisi dan tinggi yang tepat, mengikuti gaya dan estetika neo klasik. Berbentuk berdiri kokoh dan mungkin terbuat dari material berkualitas tinggi, seperti marmer, logam, atau kayu dengan ukiran klasik yang rumit. Stand ini menambah sentuhan klasik yang elegan dan memberikan sorotan pada rangkaian bunga. Standing Flower dari Neo Classic Stand adalah pilihan ideal untuk acara-acara formal, pernikahan mewah, atau dekorasi interior yang mencari kesan klasik yang mewah. Tampilan ini akan memberikan nuansa kemewahan dan keanggunan yang tak terlupakan',
            'image' => 'Standing Flowers/Neo.jpg',
            'category_id' => 5,
        ]);

        Product::create([
            'name' => 'Peach White Rose Stand Flower',
            'price' => '750000',
            'description' => 'Standing Flower dari Peach White Rose Stand Flower adalah rangkaian bunga berdiri yang menampilkan kombinasi warna merona peach dan putih murni, dengan fokus pada keindahan dan elegansi mawar. Tampilan ini menghadirkan kesan yang lembut, anggun, dan romantis. Rangkaian bunga ini terdiri dari mawar dengan warna peach yang hangat dan mawar putih yang mewakili kesucian dan kepolosan. Kedua warna ini saling melengkapi, menciptakan harmoni yang indah pada tampilan. Standing Flower ini dapat disusun dalam rangkaian kolom berdiri atau di atas sebuah vas yang dirancang secara khusus, memberikan tampilan yang kokoh dan stabil. Posisi setiap bunga dipilih dengan hati-hati untuk menciptakan kesan simetris yang menawan. Peach White Rose Stand Flower adalah pilihan ideal untuk berbagai acara, termasuk pernikahan, pesta, acara romantis, atau dekorasi interior dalam ruangan. Tampilannya yang elegan dan lembut akan mencuri perhatian dan menciptakan atmosfer yang memikat.',
            'image' => 'Standing Flowers/Peach.jpg',
            'category_id' => 5,
        ]);

        Product::create([
            'name' => 'Rectangular Matte Black Metal Wedding',
            'price' => '250000',
            'description' => 'Standing Flower dari Rectangular Matte Black Metal Wedding adalah rangkaian bunga berdiri yang dipasang di atas rangkaian berdiri berbentuk persegi panjang dengan warna hitam matte. Tampilan ini menggabungkan gaya modern dengan kesan elegan, menciptakan tatanan yang menarik dan kontemporer. Rangkaian bunga ini mungkin terdiri dari berbagai jenis bunga yang indah dan sesuai dengan tema pernikahan, seperti mawar, lily, tulip, atau bunga-bunga eksotis lainnya. Bunga-bunga ini akan ditempatkan dengan cermat pada posisi dan tinggi yang tepat, menciptakan tampilan yang harmonis dan estetis. Rangkaian berdiri berbentuk persegi panjang dengan warna hitam matte memberikan sentuhan modern dan elegan pada tampilan ini. Warna hitam matte menciptakan kontras yang menarik dengan keindahan warna bunga, dan bentuk persegi panjang memberikan kesan minimalis dan kontemporer. Standing Flower dari Rectangular Matte Black Metal Wedding adalah pilihan yang sempurna untuk dekorasi pernikahan dengan tema modern atau urban. Tampilan ini akan menjadi fokus perhatian dalam acara pernikahan, menciptakan tatanan yang menarik dan mengesankan bagi para tamu. Dengan perpaduan antara keindahan bunga-bunga yang indah dan rangkaian berdiri hitam matte yang modern, Standing Flower ini akan menciptakan suasana yang elegan dan inovatif dalam pernikahan.',
            'image' => 'Standing Flowers/Rectangular.jpg',
            'category_id' => 5,
        ]);

        Product::create([
            'name' => 'Rod Metal Centerpiece Stand',
            'price' => '450000',
            'description' => 'Standing Flower dari Rod Metal Centerpiece Stand adalah rangkaian bunga berdiri yang menampilkan vas atau rangkaian berdiri dengan warna merah mencolok dari logam. Tampilan ini menciptakan kesan yang mencolok dan berani, menambah semangat dan daya tarik pada dekorasi bunga. Rangkaian bunga ini mungkin terdiri dari berbagai jenis bunga yang berwarna-warni dan menarik, seperti mawar merah, lily oranye, anyelir kuning, atau bunga-bunga eksotis lainnya yang sesuai dengan tema dan preferensi dekorasi. Bunga-bunga ini akan ditempatkan dengan artistik dan hati-hati pada posisi dan tinggi yang tepat, menciptakan tatanan yang menarik dan simetris. Vas atau rangkaian berdiri berwarna merah mencolok dari logam memberikan sentuhan berani dan bersemangat pada tampilan ini. Warna merah yang mencolok menciptakan kontras yang menarik dengan keindahan bunga dan menarik perhatian para tamu. Standing Flower dari Red Metal Centerpiece Stand adalah pilihan ideal untuk acara-acara yang ingin menonjolkan tema bersemangat, seperti pesta, acara meriah, atau dekorasi interior yang mencari tampilan yang mencolok. Tampilan ini mencerminkan semangat dan gairah, dan akan menjadi pusat perhatian dalam acara atau ruangan. Standing Flower ini akan memberikan pesona dan daya tarik yang kuat bagi semua orang yang melihatnya, menciptakan kesan yang tak terlupakan dan penuh semangat.',
            'image' => 'Standing Flowers/Rod.jpg',
            'category_id' => 5,
        ]);

        Product::create([
            'name' => 'Tiered Gold Hoop Pillar Stand',
            'price' => '500000',
            'description' => 'Standing Flower dari Tiered Gold Hoop Pillar Stand adalah rangkaian bunga berdiri yang dipasang di atas rangkaian berdiri bertingkat dengan desain cincin emas. Tampilan ini mengusung gaya yang mewah, anggun, dan modern. Rangkaian bunga ini mungkin terdiri dari berbagai jenis bunga yang indah dan elegan, seperti mawar, lily, tulip, atau bunga-bunga eksotis lainnya yang sesuai dengan tema dan karakteristik dekorasi. Bunga-bunga ini akan ditempatkan dengan cermat pada masing-masing tingkat cincin emas, menciptakan tatanan yang menarik dan simetris. Tiered Gold Hoop Pillar Stand adalah elemen penting dalam tampilan ini. Rangkaian berdiri bertingkat dengan desain cincin emas memberikan sentuhan mewah dan modern pada tampilan bunga ini. Desainnya yang elegan dan struktural menciptakan tampilan yang unik dan menarik. Standing Flower dari Tiered Gold Hoop Pillar Stand adalah pilihan ideal untuk acara-acara mewah seperti pernikahan, acara formal, gala, atau dekorasi interior dengan gaya yang mencari kesan mewah dan eksklusif.',
            'image' => 'Standing Flowers/Tiered.jpg',
            'category_id' => 5,
        ]);

        Product::create([
            'name' => 'White Metal Flower Stand',
            'price' => '350000',
            'description' => 'Standing Flower dari White Metal Flower Stand adalah rangkaian bunga berdiri yang dipasang di atas rangkaian berdiri berwarna putih dari logam. Tampilan ini menghadirkan kesan yang bersih, anggun, dan elegan. Rangkaian bunga ini mungkin terdiri dari berbagai jenis bunga yang indah dan beraneka warna, seperti mawar putih, lily putih, anyelir putih, bunga krisan, atau bunga-bunga eksotis lainnya yang sesuai dengan tema dan preferensi dekorasi. Bunga-bunga ini akan ditempatkan dengan hati-hati pada posisi dan tinggi yang tepat, menciptakan tatanan yang harmonis dan estetis. Standing Flower dari White Metal Flower Stand dengan warna putih pada rangkaian berdiri memberikan sentuhan yang bersih dan elegan pada tampilan ini. Warna putih mencerminkan kesucian, kepolosan, dan kesempurnaan, menciptakan suasana yang menenangkan dan anggun. Standing Flower ini cocok untuk berbagai acara, termasuk pernikahan, resepsi, acara formal, atau dekorasi interior dalam ruangan. Tampilannya yang elegan dan lembut akan mencuri perhatian dan menciptakan suasana yang memikat. Dengan kombinasi keindahan bunga-bunga yang indah dan rangkaian berdiri berwarna putih yang anggun, Standing Flower dari White Metal Flower Stand akan menciptakan suasana yang elegan dan menawan dalam acara atau ruangan. Keanggunan dan kesan bersih tampilan ini akan meninggalkan kesan yang tak terlupakan bagi semua orang yang melihatnya.',
            'image' => 'Standing Flowers/White.jpg',
            'category_id' => 5,
        ]);

        Product::create([
            'name' => 'Acrilic Gift Box',
            'price' => '150000',
            'description' => '"Acrylic Gift Box" adalah kotak hadiah yang terbuat dari bahan akrilik. Akrilik adalah jenis plastik yang transparan, keras, dan tahan lama, yang sering digunakan untuk membuat berbagai produk seperti kotak hadiah, bingkai foto, display, dan lain-lain. Berikut adalah deskripsi tentang "Acrylic Gift Box":

            Acrylic Gift Box adalah kotak hadiah yang terbuat dari lembaran akrilik transparan yang dipotong dan dijalin menjadi sebuah kotak. Bentuk kotaknya dapat bervariasi, seperti kotak persegi panjang, kotak kubus, atau bentuk lain yang sesuai.
            Bahan akrilik memberikan kesan yang elegan dan modern pada kotak hadiah. Transparansinya memungkinkan penerima hadiah untuk melihat isi kotak dari luar, menambah nilai estetika dan keindahan pada kemasan.
            Acrylic Gift Box sering digunakan untuk mengemas hadiah-hadiah istimewa seperti perhiasan, barang-barang mewah, atau koleksi barang berharga lainnya. Tampilan kotak yang eksklusif dan mengkilap menambah kesan mewah pada hadiah.
            Kotak hadiah akrilik biasanya dilengkapi dengan penutup atau tutup yang bisa dibuka dan ditutup dengan mudah, sehingga hadiah di dalamnya tetap aman dan terjaga kerahasiaannya.
            Bentuk dan ukuran Acrylic Gift Box dapat disesuaikan sesuai dengan preferensi dan kebutuhan. Banyak desain kotak hadiah akrilik yang dilengkapi dengan hiasan seperti pita, perekat, atau cetakan khusus untuk menambah sentuhan personal pada kemasan.
            Acrylic Gift Box juga sering digunakan dalam acara-acara pernikahan, pesta, atau acara khusus lainnya sebagai bagian dari hantaran atau souvenir.',
            'image' => 'Gift and Hampers/Acrilic.jpg',
            'category_id' => 6,
        ]);

        Product::create([
            'name' => 'Boxed Artificial Flower',
            'price' => '250000',
            'description' => '"Boxed Artificial Flower" adalah rangkaian bunga buatan yang disusun dan diatur dengan rapi dalam sebuah kotak atau wadah khusus. Bunga buatan, juga dikenal sebagai bunga palsu atau artificial flower, adalah bunga yang dibuat dari bahan sintetis seperti plastik, kain, atau bahan-bahan lainnya. Rangkaian bunga buatan ini disusun dan ditempatkan di dalam kotak atau wadah untuk memberikan kesan yang cantik dan tampilan yang rapi. Berikut adalah deskripsi tentang "Boxed Artificial Flower":

            Boxed Artificial Flower terdiri dari beberapa batang bunga buatan yang terbuat dari bahan sintetis yang berkualitas tinggi. Bunga buatan ini didesain untuk menyerupai bunga asli dalam bentuk, warna, dan tekstur sehingga menciptakan tampilan yang indah dan realistis.
            Bunga buatan ini bisa berbentuk mawar, lily, tulip, bunga matahari, dan berbagai jenis bunga lainnya. Bunga-bunga ini biasanya dipotong dengan hati-hati dan diatur dalam susunan yang menarik dan harmonis.
            Boxed Artificial Flower sering ditempatkan di dalam kotak atau wadah khusus yang dirancang dengan gaya yang sesuai dengan tampilan dan tema bunga. Kotak ini dapat terbuat dari akrilik, kaca, kertas, atau bahan lainnya, yang memberikan tampilan yang elegan dan modern.',
            'image' => 'Gift and Hampers/Boxed.jpg',
            'category_id' => 6,
        ]);

        Product::create([
            'name' => 'Envelope Gift Box',
            'price' => '350000',
            'description' => '"Envelope Gift Box" adalah kotak hadiah yang dirancang dengan bentuk mirip amplop (envelope). Kotak ini biasanya terbuat dari kertas atau bahan karton dan memiliki bentuk datar yang menyerupai amplop. Envelope Gift Box sering digunakan untuk mengemas kartu ucapan, uang, atau hadiah kecil lainnya dengan cara yang unik dan kreatif. Berikut adalah deskripsi tentang "Envelope Gift Box":

            Envelope Gift Box memiliki bentuk yang datar dan menyerupai amplop asli. Kotak ini dirancang dengan lipatan-lipatan yang mengikuti bentuk amplop, termasuk bagian yang dilipat ke atas dan sisi yang dilipat ke dalam untuk menutup kotak.
            Kotak hadiah ini sering terbuat dari kertas dengan berbagai pilihan warna dan pola yang menarik. Bahan karton atau kertas yang digunakan biasanya cukup kuat untuk menopang isi kotak dan memberikan perlindungan pada hadiah di dalamnya.
            Envelope Gift Box sering digunakan untuk mengemas kartu ucapan atau uang sebagai bagian dari hadiah spesial. Bungkus yang unik dan menarik menambah nilai estetika pada hadiah dan memberikan kesan yang kreatif.',
            'image' => 'Gift and Hampers/Envelope.jpg',
            'category_id' => 6,
        ]);

        Product::create([
            'name' => 'Galaxy Rose Forever Preserved Eternal Roses',
            'price' => '300000',
            'description' => '"Galaxy Rose Forever Preserved Eternal Roses" adalah rangkaian bunga mawar abadi yang dipreservasi dengan teknik khusus sehingga tetap tampak segar dan indah selamanya. Galaxy Rose mengacu pada nama varietas mawar yang memiliki kelopak dengan tampilan unik seperti galaksi atau langit malam, seringkali dengan warna-warna yang mencolok seperti biru, ungu, atau campuran warna lain yang menyerupai galaksi.
            Roses Forever Preserved Eternal Roses merujuk pada fakta bahwa bunga mawar ini diawetkan dengan metode tertentu yang memungkinkan mereka tetap segar dan indah tanpa memudar selama jangka waktu yang lama, bahkan bertahun-tahun.
            Deskripsi "Galaxy Rose Forever Preserved Eternal Roses":
            Galaxy Rose Forever Preserved Eternal Roses adalah rangkaian bunga mawar yang indah dan istimewa yang terdiri dari bunga mawar varietas Galaxy Rose. Mawar-mawar ini memiliki kelopak yang menarik dengan tampilan seperti galaksi yang memukau, menciptakan kesan yang unik dan mengagumkan.
            Bunga mawar ini dipreservasi dengan teknik khusus yang mengawetkan bunga secara alami, sehingga mereka tetap segar dan indah selamanya. Proses pengawetan ini memastikan bahwa mawar tidak perlu dirawat seperti bunga segar biasa, sehingga menjadi hadiah yang tahan lama dan praktis.',
            'image' => 'Gift and Hampers/Galaxy.jpg',
            'category_id' => 6,
        ]);

        Product::create([
            'name' => 'Gucci Flowers Box',
            'price' => '450000',
            'description' => 'Gift & Hampers dari Gucci Flowers Box adalah paket hadiah mewah yang terdiri dari sebuah kotak berisi bunga-bunga indah dan didalam flower box tersebut brisikan barang eksklusif dari merek terkenal Gucci. Tampilan hadiah ini mencerminkan gaya yang elegan, mewah, dan bergaya. Dalam kotak hadiah ini, Anda akan menemukan rangkaian bunga yang dipilih dengan hati-hati dari bunga-bunga berkualitas tinggi, seperti mawar, lily, atau bunga-bunga eksotis lainnya. Setiap bunga mungkin dirangkai dengan indah untuk menciptakan tatanan yang menakjubkan dan estetis. Kotak hadiah ini dibalut dengan gaya khas Gucci, mungkin dengan desain yang elegan, logo merek, atau elemen dekoratif khas Gucci lainnya. Tampilan ini menambah pesona dan keeksklusifan pada hadiah yang diberikan. Gift & Hampers dari Gucci Flowers Box adalah pilihan ideal untuk acara-acara khusus, seperti pernikahan, ulang tahun, perayaan, atau sebagai hadiah istimewa untuk orang terkasih. Tampilan hadiah yang mewah dan eksklusif ini akan mencuri perhatian dan memberikan kesan yang tak terlupakan bagi penerima hadiah.',
            'image' => 'Gift and Hampers/Gucci.jpg',
            'category_id' => 6,
        ]);

        Product::create([
            'name' => 'Lovely Gift Box',
            'price' => '550000',
            'description' => '"Lovely Gift Box" adalah kotak hadiah yang dirancang dengan sentuhan yang indah dan menarik untuk memberikan kesan yang istimewa pada hadiah yang dikemas di dalamnya. "Lovely" dalam konteks ini mengacu pada keindahan, kelembutan, dan perasaan yang menyenangkan yang ingin diungkapkan melalui hadiah.

            Deskripsi "Lovely Gift Box":
            
            Lovely Gift Box adalah kotak hadiah yang dirancang dengan desain yang indah dan menarik. Kotak ini mungkin terbuat dari kertas atau bahan karton yang berkualitas tinggi dan dipilih dengan cermat untuk memberikan kesan yang mewah dan eksklusif.
            Kotak hadiah ini sering dihiasi dengan elemen dekoratif seperti pita, stiker, bunga buatan, atau hiasan lainnya yang menambah sentuhan kecantikan dan kelembutan pada kemasan.
            "Lovey Gift Box" sering digunakan untuk mengemas berbagai jenis hadiah, seperti perhiasan, aksesori, parfum, hadiah kecil, atau barang-barang berharga lainnya. Bentuk dan ukuran kotak disesuaikan dengan ukuran dan jenis hadiah yang dimasukkan di dalamnya.
            Warna kotak hadiah "Lovely Gift Box" sering berkisar pada nuansa lembut dan cerah seperti merah muda, putih, krem, atau warna pastel lain yang memberikan kesan yang hangat dan menyenangkan',
            'image' => 'Gift and Hampers/Lovely.jpg',
            'category_id' => 6,
        ]);

        Product::create([
            'name' => 'Luna Flowers Hampers',
            'price' => '600000',
            'description' => '"Luna Flowers Hampers" adalah kumpulan bunga dan rangkaian hadiah yang dikemas dengan indah dalam satu wadah atau keranjang, yang didesain dan diatur dengan tema atau inspirasi dari bulan (Luna). Hampers ini biasanya berisi bunga-bunga segar, bunga kering, atau kombinasi dari keduanya, serta elemen hadiah lainnya seperti cokelat, parfum, permen, boneka, atau item lainnya yang cocok dengan tema dan suasana bulan.

            Deskripsi "Luna Flowers Hampers":
            
            Luna Flowers Hampers adalah kumpulan bunga dan hadiah yang diatur secara khusus dengan tema yang terinspirasi dari bulan (Luna). Hampers ini mencakup berbagai macam bunga, termasuk bunga segar dan bunga kering, yang dipilih dengan cermat untuk menciptakan tampilan yang indah dan menawan.
            Bunga-bunga segar yang digunakan dalam Luna Flowers Hampers mungkin mencakup mawar, lily, tulip, bunga matahari, atau jenis bunga lainnya yang memberikan kesan cantik dan segar. Sementara bunga kering seperti statice, babys breath, atau lavender mungkin digunakan untuk menambah dimensi dan tekstur pada rangkaian bunga.
            Hampers ini juga berisi elemen hadiah lainnya seperti cokelat, permen, parfum, aksesori, atau barang-barang kecil lainnya yang sesuai dengan tema bulan dan memberikan nuansa romantis atau magis.',
            'image' => 'Gift and Hampers/Luna.jpg',
            'category_id' => 6,
        ]);

        Product::create([
            'name' => 'Luxury Flower Gift Box',
            'price' => '750000',
            'description' => '"Luxury Flower Gift Box" adalah kotak hadiah mewah yang dirancang secara eksklusif untuk mengemas rangkaian bunga indah dan istimewa. Kotak hadiah ini mencerminkan tingkat keanggunan dan kemewahan yang tinggi, dan sering digunakan untuk menghadirkan hadiah yang spesial dan berkelas.

            Deskripsi "Luxury Flower Gift Box":
            
            Luxury Flower Gift Box adalah kotak hadiah eksklusif yang dirancang dengan sentuhan mewah. Kotak ini terbuat dari bahan berkualitas tinggi, seperti bahan karton mewah, akrilik, atau bahan lain yang memberikan kesan elegan dan mewah.
            Kotak hadiah ini sering dihiasi dengan desain yang artistik dan detail yang indah, seperti embel-embel emas, pita satin, atau hiasan kristal, yang menambah sentuhan kemewahan pada tampilan kotak.
            Rangkaian bunga dalam "Luxury Flower Gift Box" biasanya terdiri dari bunga-bunga mewah dan langka, seperti mawar premium, lily eksklusif, peony, atau bunga eksotis lainnya. Bunga-bunga ini dipotong dengan hati-hati dan diatur secara indah untuk menciptakan tampilan yang spektakuler.
            Bunga-bunga dalam "Luxury Flower Gift Box" sering dihiasi dengan dedaunan hijau yang mewah atau bunga kering yang menambah dimensi dan elegansi pada rangkaian.',
            'image' => 'Gift and Hampers/Luxury.jpg',
            'category_id' => 6,
        ]);

        Product::create([
            'name' => 'Peony Round Box',
            'price' => '250000',
            'description' => '"Peony Round Box" adalah kotak berbentuk bulat yang dirancang khusus untuk mengemas rangkaian bunga peony. Peony adalah jenis bunga yang indah dan elegan, dan sering dianggap sebagai simbol keindahan, cinta, dan kemakmuran. Peony Round Box mencerminkan keanggunan dan kesan estetika yang tinggi, serta menjadi pilihan yang populer untuk menghadirkan hadiah bunga yang istimewa.

            Deskripsi "Peony Round Box":
            
            Peony Round Box adalah kotak khusus berbentuk bulat yang dirancang dengan elegan untuk mengemas rangkaian bunga peony. Kotak ini dapat terbuat dari bahan karton berkualitas tinggi atau bahan akrilik yang transparan, yang memberikan kesan mewah dan cantik pada kemasan.
            Rangkaian bunga peony dalam "Peony Round Box" biasanya disusun dengan hati-hati dan diatur dengan penuh perhatian untuk menciptakan tampilan yang menarik dan harmonis.
            Peony adalah bunga yang indah dan anggun, dan memiliki kelopak besar yang lembut dan beraneka warna seperti merah muda, putih, merah, kuning, atau ungu. Bunga peony ini sering dihiasi dengan dedaunan hijau atau elemen dekoratif lainnya untuk menambah dimensi dan elegansi pada rangkaian.
            Kotak berbentuk bulat memberikan tampilan yang unik dan menarik pada kemasan, dan membuat "Peony Round Box" menjadi hadiah yang istimewa dan berkesan',
            'image' => 'Gift and Hampers/Peony.jpg',
            'category_id' => 6,
        ]);

        Product::create([
            'name' => 'Purple Rose Soap Gift Box',
            'price' => '450000',
            'description' => '"Purple Rose Soap Gift Box" adalah kotak hadiah berisi sabun bunga mawar berwarna ungu. Sabun ini dirancang untuk menyerupai bunga mawar dengan tekstur dan bentuk yang indah, dan berwarna ungu untuk memberikan kesan yang cantik dan menarik. Kotak hadiah ini menghadirkan gabungan antara kecantikan bunga mawar dan manfaat sabun yang menyegarkan dan membersihkan kulit.

            Deskripsi "Purple Rose Soap Gift Box":
            
            Purple Rose Soap Gift Box adalah kotak hadiah yang berisi sabun bunga mawar berwarna ungu. Sabun ini dirancang dengan rapi untuk menyerupai bentuk dan tampilan bunga mawar yang indah, menciptakan tampilan yang cantik dan menarik.
            Sabun bunga mawar dalam "Purple Rose Soap Gift Box" biasanya terbuat dari bahan-bahan berkualitas tinggi, seperti bahan sabun alami, dan diwarnai dengan pewarna alami atau pewarna aman yang sesuai dengan warna ungu.
            Warna ungu sering dikaitkan dengan keanggunan, kemewahan, dan kesan magis, dan memberikan tampilan yang cantik dan menarik pada sabun bunga mawar ini.
            Sabun bunga mawar ini tidak hanya indah secara visual, tetapi juga dapat digunakan sebagai sabun untuk membersihkan dan menyegarkan kulit. Banyak sabun bunga mawar mengandung minyak alami atau bahan lain yang bermanfaat bagi kulit.
            Kotak hadiah ini memberikan kesan eksklusif dan spesial, menjadikannya pilihan yang menarik sebagai hadiah untuk orang tersayang, teman, atau kerabat.',
            'image' => 'Gift and Hampers/Purplr.jpg',
            'category_id' => 6,
        ]);

        Product::create([
            'name' => 'Rose Gift Box',
            'price' => '500000',
            'description' => '"Rose Gift Box" adalah kotak hadiah berisi rangkaian bunga mawar yang dirancang secara khusus untuk memberikan kesan indah dan istimewa pada penerima. Kotak hadiah ini mengemas rangkaian bunga mawar dengan rapi dan estetis, menciptakan hadiah yang berkesan dan menyampaikan perasaan cinta, perhatian, atau penghargaan kepada orang yang menerimanya.

            Deskripsi "Rose Gift Box":
            
            Rose Gift Box adalah kotak hadiah yang berisi rangkaian bunga mawar yang cantik dan anggun. Rangkaian bunga mawar ini dipilih dengan hati-hati, dipotong dengan rapi, dan diatur dengan penuh perhatian untuk menciptakan tampilan yang menarik dan indah.
            Bunga mawar dalam "Rose Gift Box" bisa berwarna merah, merah muda, putih, kuning, atau berbagai warna lainnya, sesuai dengan preferensi atau tema yang diinginkan oleh pengirim hadiah.
            Kotak hadiah ini sering dihiasi dengan pita, perekat, atau elemen dekoratif lainnya yang menambah sentuhan estetika pada kemasan.
            "Rose Gift Box" sering dipilih sebagai hadiah khusus untuk acara-acara romantis seperti hari Valentine, ulang tahun pasangan, atau momen-momen istimewa dalam hubungan.',
            'image' => 'Gift and Hampers/rgb.jpg',
            'category_id' => 6,
        ]);

        Product::create([
            'name' => 'Rose Sakura Gift Box',
            'price' => '350000',
            'description' => '"Rose Sakura Gift Box" adalah kotak hadiah yang berisi rangkaian bunga mawar dan bunga sakura yang dirancang khusus untuk memberikan kesan yang indah dan anggun. Kombinasi bunga mawar dan bunga sakura menciptakan hadiah yang unik dan menarik, menggabungkan simbol-simbol cinta dan keindahan dari kedua jenis bunga tersebut.

            Deskripsi "Rose Sakura Gift Box":
            
            Rose Sakura Gift Box adalah kotak hadiah yang berisi rangkaian bunga mawar dan bunga sakura yang indah dan anggun. Rangkaian bunga ini dipilih dengan cermat, dipotong dengan rapi, dan diatur dengan penuh perhatian untuk menciptakan tampilan yang menarik dan harmonis.
            Bunga mawar dalam "Rose Sakura Gift Box" mungkin berwarna merah, merah muda, putih, kuning, atau warna lainnya, sesuai dengan preferensi atau tema yang diinginkan oleh pengirim hadiah. Bunga mawar sering dianggap sebagai simbol cinta dan keindahan.
            Bunga sakura, atau bunga ceri Jepang, adalah simbol keindahan, kehidupan, dan keindahan singkat. Bunga sakura yang lembut dan anggun sering dikaitkan dengan momen-momen yang berharga dan momen-momen singkat dalam kehidupan.
            Kombinasi bunga mawar dan bunga sakura dalam "Rose Sakura Gift Box" menciptakan tampilan yang unik dan menarik, menghadirkan keindahan dan kelembutan dari kedua jenis bunga tersebut',
            'image' => 'Gift and Hampers/rsgb.jpg',
            'category_id' => 6,
        ]);
    }
}
