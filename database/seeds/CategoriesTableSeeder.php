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
                'created_at' => '2020-08-21 21:01:21',
                'id' => 1,
                'name' => 'Electronics',
                'parent_id' => NULL,
                'updated_at' => '2020-08-21 21:01:21',
            ),
            1 => 
            array (
                'created_at' => '2020-08-21 21:01:56',
                'id' => 2,
                'name' => 'Vehicles',
                'parent_id' => NULL,
                'updated_at' => '2020-08-21 21:01:56',
            ),
            2 => 
            array (
                'created_at' => '2020-08-21 21:02:29',
                'id' => 3,
                'name' => 'Building & Land',
                'parent_id' => NULL,
                'updated_at' => '2020-08-21 21:02:29',
            ),
            3 => 
            array (
                'created_at' => NULL,
                'id' => 4,
                'name' => 'House Equipments',
                'parent_id' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'created_at' => NULL,
                'id' => 5,
                'name' => 'Services',
                'parent_id' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'created_at' => NULL,
                'id' => 6,
                'name' => 'Phone',
                'parent_id' => 1,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'created_at' => NULL,
                'id' => 7,
                'name' => 'Computer',
                'parent_id' => 1,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'created_at' => NULL,
                'id' => 8,
                'name' => 'TV',
                'parent_id' => 1,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'created_at' => NULL,
                'id' => 9,
                'name' => 'Tablet',
                'parent_id' => 1,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'created_at' => NULL,
                'id' => 10,
                'name' => 'Cars',
                'parent_id' => 2,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'created_at' => NULL,
                'id' => 11,
                'name' => 'Trucks',
                'parent_id' => 2,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'created_at' => NULL,
                'id' => 12,
                'name' => 'Motorcycles',
                'parent_id' => 2,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'created_at' => NULL,
                'id' => 13,
                'name' => 'Apartment',
                'parent_id' => 3,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'created_at' => NULL,
                'id' => 14,
                'name' => 'House',
                'parent_id' => 3,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'created_at' => NULL,
                'id' => 15,
                'name' => 'Land',
                'parent_id' => 3,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'created_at' => NULL,
                'id' => 16,
                'name' => 'Furniture',
                'parent_id' => 4,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'created_at' => NULL,
                'id' => 17,
                'name' => 'Desk & Chair',
                'parent_id' => 16,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'created_at' => NULL,
                'id' => 18,
                'name' => 'Sofa',
                'parent_id' => 16,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}