<?php

namespace Database\Seeders;

use App\Models\Destination;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name'=> 'admin',
            'email'=>'admin@gmail.com',
            'role'=> 1,
            'password'=>'$2y$10$rHdEE7Ky8InC55ylJ4X.xOjJCKiDiFVpXXzUrRCOPaoqtNnvnxwGO',
        ]);

        User::create([
            'name'=> 'mario',
            'email'=>'mario@gmail.com',
            'role'=> 2,
            'password'=>'$2y$10$rHdEE7Ky8InC55ylJ4X.xOjJCKiDiFVpXXzUrRCOPaoqtNnvnxwGO',
        ]);

        Destination::create([
            'name'=> 'Pancuran 7',
            'address'=>'Desa ketenger',
            'description'=>'Apa yang membuat obyek wisata ini begitu terkenal? Pusat pesonanya berada di bebatuan di bawah pancuran yang berjumlah 7 pipa. Ini sebabnya obyek wisata ini memiliki nama Pancuran Pitu. Pancuran Pitu memiliki bebatuan unik yang terbentuk karena dialiri air belerang. Bebatuan inilah yang menjadi incaran para wisatawan untuk berfoto di batu ini.

            Ada yang mengatakan bahwa air yang berasal dari pancuran dapat mengobati berbagai macam penyakit Kulit. Selain menjadi salah satu pemandian unik dengan air belerang, bebatuan di bawah pipa juga menjadi daya tarik tersendiri. Air belerang yang terus mengaliri bebatuan itulah yang membuatnya berubah warna menjadi coklat muda yang indah.
            
            Untuk akses menuju lokasi wisata tersebut sebenarnya ada dua cara, yang pertama melewati jalan setapak dan anak tangga di dalam Taman Rekreasi Baturaden ke arah puncak bukit dan cara kedua dengan menggunakan arah putar balik melewati area hutan hingga tiba di pintu masuk wisata.',
            'price'=> 10000,
            'video'=>'https://www.youtube.com/embed/e1WTo7D2LHI',
            'image'=>'/image-wisata/pancuran7.jpg',
        ]);

        Destination::create([
            'name'=> 'Baturaden Adventure Forest',
            'address'=>'Desa ketenger',
            'description'=>'Apa yang membuat obyek wisata ini begitu terkenal? Pusat pesonanya berada di bebatuan di bawah pancuran yang berjumlah 7 pipa. Ini sebabnya obyek wisata ini memiliki nama Pancuran Pitu. Pancuran Pitu memiliki bebatuan unik yang terbentuk karena dialiri air belerang. Bebatuan inilah yang menjadi incaran para wisatawan untuk berfoto di batu ini.

            Ada yang mengatakan bahwa air yang berasal dari pancuran dapat mengobati berbagai macam penyakit Kulit. Selain menjadi salah satu pemandian unik dengan air belerang, bebatuan di bawah pipa juga menjadi daya tarik tersendiri. Air belerang yang terus mengaliri bebatuan itulah yang membuatnya berubah warna menjadi coklat muda yang indah.
            
            Untuk akses menuju lokasi wisata tersebut sebenarnya ada dua cara, yang pertama melewati jalan setapak dan anak tangga di dalam Taman Rekreasi Baturaden ke arah puncak bukit dan cara kedua dengan menggunakan arah putar balik melewati area hutan hingga tiba di pintu masuk wisata.',
            'price'=> 400000,
            'video'=>'https://www.youtube.com/embed/OVsAT9Fun5w',
            'image'=>'/image-wisata/baturraden.jpg',
        ]);


        Destination::create([
            'name'=> 'Curug Bayan',
            'address'=>'Desa ketenger',
            'description'=>'Berlokasi di Ketenger, curug ini sering kali disebut dengan nama Curug Gede. Salah satu hal yang istimewa dari curug ini, yaitu adanya sebuah penginapan yang dibangun pas menghadap curug ini. Menghasilkan pemandangan bak penginapan luar negeri dengan taman beserta air terjunnya yang indah.

            Karena letaknya yang tidak terlalu masuk ke dalam hutan membuat wisata ini sangat mudah dijangkau. Selain itu, air terjunnya juga tidak terlalu tinggi dan kolam yang dangkal. Satu keistimewaannya lagi adalah curug ini bertingkat sehingga membuatnya terlihat sangat cantik ketika air terjun mengalir ke bawah bebatuan yang membentuk anak tangga.',
            'price'=> 5000,
            'video'=>'https://www.youtube.com/embed/gFNTcr4uvd8',
            'image'=>'/image-wisata/CurugBayan.jpg'
        ]);
    }
}
