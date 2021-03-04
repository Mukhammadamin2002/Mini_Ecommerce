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
	        	'gallery' => "https://hosty.xxx/i/bee20b4a9dd348f6e07722b0148d5b8eb9263335.jpg"
        	],
        	[
	        	'name'=> 'Samsung TV',
	        	'price' => '300',
	        	'description' => 'A TV with high quality, Perfect Looklikes',
	        	'category' => 'TV',
	        	'gallery' => "https://hosty.xxx/i/193e094c6d7ffd675edd764f55068bf4b094ba54.jpg"
        	],
        	[
	        	'name'=> 'Sony Fs5',
	        	'price' => '100',
	        	'description' => 'Easy To control',
	        	'category' => 'Gadget',
	        	'gallery' => "https://hosty.xxx/i/6e6feb665c756cdd0a7e66cc805a30665d67fcbb.jpg"
        	],
        	[
	        	'name'=> 'Huawei Laptop',
	        	'price' => '800',
	        	'description' => 'Comfortable to bring High quality',
	        	'category' => 'computer',
	        	'gallery' => "https://hosty.xxx/i/332773313e93d0c21fda05661aaab498414b5d1f.jpg"
        	]
        ]);
    }
}
