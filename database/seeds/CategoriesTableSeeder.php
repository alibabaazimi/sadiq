<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Electronics',
                'parent_id' => NULL,
                'created_at' => '2020-08-21 21:01:21',
                'updated_at' => '2020-08-21 21:01:21',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Vehicles',
                'parent_id' => NULL,
                'created_at' => '2020-08-21 21:01:56',
                'updated_at' => '2020-08-21 21:01:56',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'TV',
                'parent_id' => 1,
                'created_at' => '2020-08-21 21:02:29',
                'updated_at' => '2020-08-21 21:02:29',
            ),
        ));
        
        
    }
}