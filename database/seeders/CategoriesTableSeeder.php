<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Кольца', 'code' => 'rings', 'description' => ''],
            ['name' => 'Браслеты', 'code' => 'bracelet', 'description' => ''],
            ['name' => 'Серьги', 'code' => 'earrings', 'description' => ''],
        ]);
    }
}
