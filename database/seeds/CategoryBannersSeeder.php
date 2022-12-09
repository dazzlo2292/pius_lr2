<?php

use Illuminate\Database\Seeder;

class CategoryBannersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1;$i<=100;$i++){
            DB::table('banners')->insert([
                'category_id'=>rand(1,201),
                'banners_id'=>rand(1,201)
            ]);
        }
    }
}

