<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1;$i<=100;$i++){
            DB::table('category')->insert([
                'id'=>rand(1,201),
                'title'=> Str::random(10),
                'active'=> (boolean::true),
                'code'=> Str::random(100),
                'created_at' => now(),
                'id'=>rand(1,201)
            ]);
            }
    }
}
