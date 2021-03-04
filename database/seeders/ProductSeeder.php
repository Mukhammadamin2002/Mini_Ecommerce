<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
			[
	        	'name'=> 'Samsung mobile',
	        	'price' => '200',
	        	'description' => 'A smartphone with high quality',
	        	'category' => 'mobile',
	        	'gallery' => "https://www.pexels.com/photo/black-samsung-android-smartphone-on-top-of-brown-wooden-tablke-214487/"
        	],
        	[
	        	'name'=> 'Samsung TV',
	        	'price' => '300',
	        	'description' => 'A TV with high quality, Perfect Looklikes',
	        	'category' => 'TV',
	        	'gallery' => "https://www.pexels.com/photo/interior-of-bedroom-with-bed-and-tv-6297080/"
        	],
        	[
	        	'name'=> 'Sony Fs5',
	        	'price' => '100',
	        	'description' => 'Easy To control',
	        	'category' => 'Gadget',
	        	'gallery' => "https://www.pexels.com/photo/white-and-black-sony-ps-4-game-controller-3945657/"
        	],
        	[
	        	'name'=> 'Huawei Laptop',
	        	'price' => '800',
	        	'description' => 'Comfortable to bring High quality',
	        	'category' => 'computer',
	        	'gallery' => "https://www.pexels.com/photo/semi-opened-laptop-computer-turned-on-on-table-2047905/"
        	]
        ]);
    }
}
