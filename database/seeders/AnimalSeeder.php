<?php

namespace Database\Seeders;

use App\Models\Animal;
use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Animal::create([
            'category_id' => 1,
            'name' => 'Angelhead lizard',
            'description' => 'This is a dummy description for Angelhead lizard.',
            'image' => 'animals/angelhead_lizard.jpg',
            'price' => 85000,
            'quantity' => 27,
            'rating' => 4.9
        ]);
        Animal::create([
            'category_id' => 3,
            'name' => 'Dumpy frog',
            'description' => 'This is a dummy description for Dumpy frog. This animal reminds me exactly of your mom - big, fat, ugly, never does anything, and never showers.',
            'image' => 'animals/dumpy_frog.jpg',
            'price' => 120000,
            'quantity' => 1,
            'rating' => 5
        ]);
        Animal::create([
            'category_id' => 4,
            'name' => 'Baby leaf insect',
            'description' => 'Serangga unik berbentuk daun yang sangat lucu! Dijual ukuran baby -+3 cm. Makan daun jambu biji. Perawatan mudah, aman, tidak beracun. Pemeliharaan simple banget!',
            'image' => 'animals/baby_leaf_insect.jpg',
            'price' => 100000,
            'quantity' => 10,
            'rating' => 5
        ]);
        Animal::create([
            'category_id' => 2,
            'name' => 'Whitelined gecko',
            'description' => 'White lined gecko (gekko vittatus) merupakan gecko unik yg berasal dari Halmahera. Gecko ini memiliki keunikan dimana adanya garis putih tegas sepanjang dorsal mereka. Gecko ini dapat berubah warna menjadi coklat tua jika dalam kondisi stress, warna akan kembali menguning jika sudah nyaman. Ukuran gecko ini -+ 15 cm. Gecko ini memakan jangkrik, kecoa dubia, kecoa turki, ulat hongkong. Karakternya jumpy, dan gecko ini memiliki kemampuan untuk menempel pada kaca.',
            'image' => 'animals/whitelined_gecko.jpg',
            'price' => 120000,
            'quantity' => 2,
            'rating' => 5
        ]);
        Animal::create([
            'category_id' => 1,
            'name' => 'Legless lizard',
            'description' => 'This is a dummy description for legless lizard.',
            'image' => 'animals/legless_lizard.jpg',
            'price' => 350000,
            'quantity' => 2,
            'rating' => 5
        ]);
        Animal::create([
            'category_id' => 4,
            'name' => 'Asian forest scorpion',
            'description' => 'size juve - adult. low venom',
            'image' => 'animals/asianforest_scorpion.jpg',
            'price' => 30000,
            'quantity' => 2,
            'rating' => 5
        ]);
        Animal::create([
            'category_id' => 1,
            'name' => 'The pondering chameleon',
            'description' => 'This chameleon reads minds. If you hold it on your finger, it will be stunned for 5 seconds because your mind is too stupid for it to handle.',
            'image' => 'animals/pondering_chameleon.jpg',
            'price' => 3000000,
            'quantity' => 100,
            'rating' => 3
        ]);
    }
}
