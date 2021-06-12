<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Products;

use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        //
        DB::table('products')->insert([
        	'name' => 'Harina Pan',
            'price' => '4000',
            'weight' => '4',
            'type' => 'physical',

        ]);
        Products::factory()->count(3)->create();
        

    }
}
