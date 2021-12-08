<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plants')->insert([
            [
                //DATA 1
                'category_id'=>2,
                'name'=>'Philodendron',
                'image'=>'Philodendron-image',
                'price'=>10000,
                'stock'=>5,
                'description'=> 'Daun tiruan yang seperti hidup tetap terlihat segar dan cantik sepanjang tahun'
            ],
            [
                //DATA 2
                'category_id'=>1,
                'name'=>'Aglaonema',
                'image'=>'Aglaonema-image',
                'price'=>15000,
                'stock'=>5,
                'description'=> 'Artifi potted plant dengan pot,3 set, in/outdoor green/red, 6 cm'
            ],
            [
                //DATA 3
                'category_id'=>1,
                'name'=>'Rhizopus Oryzae',
                'image'=>'Rhizopus Oryzae-image',
                'price'=>15000,
                'stock'=>5,
                'description'=> 'Tanaman kecil cantik dan mungil, berbau tempe dan berwarna hijau gelap'
            ],
            [
                //DATA 4
                'category_id'=>1,
                'name'=>'Plantaetasia',
                'image'=>'Plantaetasia-image',
                'price'=>15000,
                'stock'=>5,
                'description'=> 'Tanaman hias cocok untuk difoto di ruangan gelap dengan intensitas cahaya 4x lipat dari biasanya'
            ],
            [
                //DATA 5
                'category_id'=>1,
                'name'=>'Baby Aglonema',
                'image'=>'Baby Aglonema-image',
                'price'=>15000,
                'stock'=>5,
                'description'=> 'Tanaman hias. Cocok untuk diletakkan didalam ruangan.Peka terhadap kekeringan.Peka terhadap perubahan suhu.'
            ],
            [
                //DATA 6
                'category_id'=>1,
                'name'=>'Mini Cactus',
                'image'=>'Mini Cactus-image',
                'price'=>15000,
                'stock'=>5,
                'description'=> 'Tanaman hias. Cocok untuk diletakkan didalam ruangan'
            ],
            [
                //DATA 7
                'category_id'=>2,
                'name'=>'Brokolinase Planita',
                'image'=>'Brokolinase Planita-image',
                'price'=>10000,
                'stock'=>5,
                'description'=> 'Tanaman mini yang cocok menemani hati yang gundah'
            ],
            [
                //DATA 8
                'category_id'=>2,
                'name'=>'Brokolinase Planita',
                'image'=>'Brokolinase Planita-image',
                'price'=>10000,
                'stock'=>5,
                'description'=> 'Tanaman mini yang cocok menemani hati yang gundah'
            ],
            [
                //DATA 9
                'category_id'=>1,
                'name'=>'Brodisilase Multikontradiksae',
                'image'=>'Brodisilase Multikontradiksae-image',
                'price'=>15000,
                'stock'=>5,
                'description'=> 'Daun hijau kekuning-kuningan cocok untuk dijadikan teman bicara disaat kesepian'
            ],
            [
                //DATA 10
                'category_id'=>2,
                'name'=>'Mugo',
                'image'=>'Mugo-image',
                'price'=>10000,
                'stock'=>5,
                'description'=> 'Tanaman Tiruan Untuk Dekorasi Pemandangan.100% baru, dapat diterapkan di rumah, hotel, taman, kafe, pesta dan sebagainya. Sukulen itu indah. Dibuat dengan baik dan berwarna cerah, terlihat dan menyentuh seperti nyata'
            ],
            [
                //DATA 11
                'category_id'=>2,
                'name'=>'lovenberi nimalkaiser',
                'image'=>'lovenberi nimalkaiser-image',
                'price'=>10000,
                'stock'=>5,
                'description'=> 'Bentuknya mungil kecil dan perlu kasih sayang'
            ],
            [
                //DATA 12
                'category_id'=>1,
                'name'=>'Pultimotori',
                'image'=>'Pultimotori-image',
                'price'=>15000,
                'stock'=>5,
                'description'=> 'Tanaman berbentuk lancip seperti omongan tajam kamu kepadaku'
            ]
        ]);
    }
}
