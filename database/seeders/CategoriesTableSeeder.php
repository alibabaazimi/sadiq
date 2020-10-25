<?php

namespace Database\Seeders;

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
        
        \DB::table('categories')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Electronics',
                'name_fa' => null,
                'name_se' => null,
                'parent_id' => null,
                'created_at' => '2020-08-21 21:01:21',
                'updated_at' => '2020-08-21 21:01:21',
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'Vehicles',
                'name_fa' => null,
                'name_se' => null,
                'parent_id' => null,
                'created_at' => '2020-08-21 21:01:56',
                'updated_at' => '2020-08-21 21:01:56',
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'Building & Land',
                'name_fa' => null,
                'name_se' => null,
                'parent_id' => null,
                'created_at' => '2020-08-21 21:02:29',
                'updated_at' => '2020-08-21 21:02:29',
            ),
            3 =>
            array(
                'id' => 4,
                'name' => 'House Equipments',
                'name_fa' => null,
                'name_se' => null,
                'parent_id' => null,
                'created_at' => null,
                'updated_at' => null,
            ),
            4 =>
            array(
                'id' => 5,
                'name' => 'Services',
                'name_fa' => null,
                'name_se' => null,
                'parent_id' => null,
                'created_at' => null,
                'updated_at' => null,
            ),
            5 =>
            array(
                'id' => 6,
                'name' => 'Phone',
                'name_fa' => null,
                'name_se' => null,
                'parent_id' => 1,
                'created_at' => null,
                'updated_at' => null,
            ),
            6 =>
            array(
                'id' => 7,
                'name' => 'Computer',
                'name_fa' => null,
                'name_se' => null,
                'parent_id' => 1,
                'created_at' => null,
                'updated_at' => null,
            ),
            7 =>
            array(
                'id' => 8,
                'name' => 'TV',
                'name_fa' => null,
                'name_se' => null,
                'parent_id' => 1,
                'created_at' => null,
                'updated_at' => null,
            ),
            8 =>
            array(
                'id' => 9,
                'name' => 'Tablet',
                'name_fa' => null,
                'name_se' => null,
                'parent_id' => 1,
                'created_at' => null,
                'updated_at' => null,
            ),
            9 =>
            array(
                'id' => 10,
                'name' => 'Cars',
                'name_fa' => null,
                'name_se' => null,
                'parent_id' => 2,
                'created_at' => null,
                'updated_at' => null,
            ),
            10 =>
            array(
                'id' => 11,
                'name' => 'Trucks',
                'name_fa' => null,
                'name_se' => null,
                'parent_id' => 2,
                'created_at' => null,
                'updated_at' => null,
            ),
            11 =>
            array(
                'id' => 12,
                'name' => 'Motorcycles',
                'name_fa' => null,
                'name_se' => null,
                'parent_id' => 2,
                'created_at' => null,
                'updated_at' => null,
            ),
            12 =>
            array(
                'id' => 13,
                'name' => 'Apartment',
                'name_fa' => null,
                'name_se' => null,
                'parent_id' => 3,
                'created_at' => null,
                'updated_at' => null,
            ),
            13 =>
            array(
                'id' => 14,
                'name' => 'House',
                'name_fa' => null,
                'name_se' => null,
                'parent_id' => 3,
                'created_at' => null,
                'updated_at' => null,
            ),
            14 =>
            array(
                'id' => 15,
                'name' => 'Land',
                'name_fa' => null,
                'name_se' => null,
                'parent_id' => 3,
                'created_at' => null,
                'updated_at' => null,
            ),
            15 =>
            array(
                'id' => 16,
                'name' => 'Furniture',
                'name_fa' => null,
                'name_se' => null,
                'parent_id' => 4,
                'created_at' => null,
                'updated_at' => null,
            ),
            16 =>
            array(
                'id' => 17,
                'name' => 'Desk & Chair',
                'name_fa' => null,
                'name_se' => null,
                'parent_id' => 16,
                'created_at' => null,
                'updated_at' => null,
            ),
            17 =>
            array(
                'id' => 18,
                'name' => 'Sofa',
                'name_fa' => null,
                'name_se' => null,
                'parent_id' => 16,
                'created_at' => null,
                'updated_at' => null,
            ),
        ));
    }
}
