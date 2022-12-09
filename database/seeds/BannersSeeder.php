<?php

use Illuminate\Database\Seeder;

class BannersSeeder extends Seeder
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
                'id'=>rand(1,201),
                'title'=> Str::random(10),
                'active'=> (boolean::true),
                'active_start' => now(),
                'active_stop' => now() + 30,
                'url'=> 'http://'.Str::random(100),
                'file_link'=> 'ftp://'.Str::random(100)
            ]);
            }
    }
}
