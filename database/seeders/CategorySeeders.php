<?php

namespace Database\Seeders;

use App\Models\BlogCategory;
use Illuminate\Database\Seeder;

class CategorySeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'football',
            ],

            [
                'name' => 'Drama',
            ],

            [
                'name' => 'Soccer',
            ],

            [
                'name' => 'Tennis',
            ],
        ];

       foreach ($data as $category){
           BlogCategory::updateOrCreate([
               'name' => $category ['name']
           ] , $category);
       }
    }
}
