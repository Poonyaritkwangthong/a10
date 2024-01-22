<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Fesh milk 500ML',
                'price' => 250,
                'description' => 'lorem ipsum',
                'image' => 'https://cdn.pixabay.com/photo/2016/12/06/18/27/milk-1887234__340.jpg'
            ],
            [
                'name' => '20 EGGS',
                'price' => 6,
                'description' => 'lorem ipsum',
                'image' => 'https://cdn.pixabay.com/photo/2016/07/23/15/24/egg-1536990__340.jpg'
            ],
            [
                'name' => 'WINE 700ML',
                'price' => 50,
                'description' => 'lorem ipsum',
                'image' => 'https://cdn.pixabay.com/photo/2015/11/07/12/00/alcohol-1031713__340.png'
            ],
            [
                'name' => 'SPEAKER',
                'price' => 12,
                'description' => 'lorem ipsum',
                'image' => 'https://cdn.pixabay.com/photo/2017/01/06/17/49/honey-1958464__340.jpg'
            ],
            [
                'name' => 'CAT',
                'price' => 25,
                'description' => 'this is a cat',
                'image' => 'https://i.pinimg.com/736x/b9/c4/7e/b9c47ef70bff06613d397abfce02c6e7.jpg'
            ],
            [
                'name' => 'CAT1',
                'price' => 22,
                'description' => 'this is a cat',
                'image' => 'https://www.the-sun.com/wp-content/uploads/sites/6/2023/10/www-instagram-com-monkeycatluna-hl-851711797.jpg'
            ],
            [
                'name' => 'CAT2',
                'price' => 25,
                'description' => 'this is a cat',
                'image' => 'https://m.media-amazon.com/images/I/51y8GUVKJoL._AC_UF894,1000_QL80_.jpg'
            ],
            [
                'name' => 'CAT3',
                'price' => 25,
                'description' => 'this is a cat',
                'image' => 'https://i1.sndcdn.com/artworks-0Rj4CAM00YL5lTQs-6qlZeQ-t500x500.jpg'
            ],
            [
                'name' => 'CAT4',
                'price' => 20,
                'description' => 'this is a cat',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcmn3gt6xA9NXNzhKLuO2nvfk7VWoWKmwn2Y_wPjSuEOUymo_v568Qo-bIawpdLnv_Jvs&usqp=CAU'
            ],
            [
                'name' => 'CAT5',
                'price' => 19,
                'description' => 'this is a cat',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQLmPMjUuenVRv_xu35WX4QLudYmNjgAOZfs5-2RuV42Glxp-M-Rhp8Cr27uziFSUI8FFI&usqp=CAU'
            ],
        ];
        Product::insert($products);
    }
}