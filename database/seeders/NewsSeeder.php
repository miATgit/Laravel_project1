<?php

namespace Database\Seeders;

use Faker\Factory;
use Faker\Provider\ru_RU\Address;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert($this->getData());
    }

    private function getData() {
        $faker = Factory::create('ru_Ru');
        $data = [];
        for ($i=0; $i<=10; $i++) {
            $data[] = [
                'title'=>$faker->sentence(rand(3, 6)),
                'text' => $faker->realText(rand(200,500)),
                'image' => storage_path('default.jpg'),
                'category_id' => '1',
                'category_name' => 'Спорт'
            ];
        }
        return $data;
    }
}
