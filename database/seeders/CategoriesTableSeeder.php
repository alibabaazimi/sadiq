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
                'created_at' => '2020-08-21 21:01:21',
                'id' => 1,
                'name' => 'Electronics',
                'parent_id' => null,
                'updated_at' => '2020-08-21 21:01:21',
            ),
            1 =>
            array(
                'created_at' => '2020-08-21 21:01:56',
                'id' => 2,
                'name' => 'Vehicles',
                'parent_id' => null,
                'updated_at' => '2020-08-21 21:01:56',
            ),
            2 =>
            array(
                'created_at' => '2020-08-21 21:02:29',
                'id' => 3,
                'name' => 'Building & Land',
                'parent_id' => null,
                'updated_at' => '2020-08-21 21:02:29',
            ),
            3 =>
            array(
                'created_at' => null,
                'id' => 4,
                'name' => 'House Equipments',
                'parent_id' => null,
                'updated_at' => null,
            ),
            4 =>
            array(
                'created_at' => null,
                'id' => 5,
                'name' => 'Services',
                'parent_id' => null,
                'updated_at' => null,
            ),
            5 =>
            array(
                'created_at' => null,
                'id' => 6,
                'name' => 'Phone',
                'parent_id' => 1,
                'updated_at' => null,
            ),
            6 =>
            array(
                'created_at' => null,
                'id' => 7,
                'name' => 'Computer',
                'parent_id' => 1,
                'updated_at' => null,
            ),
            7 =>
            array(
                'created_at' => null,
                'id' => 8,
                'name' => 'TV',
                'parent_id' => 1,
                'updated_at' => null,
            ),
            8 =>
            array(
                'created_at' => null,
                'id' => 9,
                'name' => 'Tablet',
                'parent_id' => 1,
                'updated_at' => null,
            ),
            9 =>
            array(
                'created_at' => null,
                'id' => 10,
                'name' => 'Cars',
                'parent_id' => 2,
                'updated_at' => null,
            ),
            10 =>
            array(
                'created_at' => null,
                'id' => 11,
                'name' => 'Trucks',
                'parent_id' => 2,
                'updated_at' => null,
            ),
            11 =>
            array(
                'created_at' => null,
                'id' => 12,
                'name' => 'Motorcycles',
                'parent_id' => 2,
                'updated_at' => null,
            ),
            12 =>
            array(
                'created_at' => null,
                'id' => 13,
                'name' => 'Apartment',
                'parent_id' => 3,
                'updated_at' => null,
            ),
            13 =>
            array(
                'created_at' => null,
                'id' => 14,
                'name' => 'House',
                'parent_id' => 3,
                'updated_at' => null,
            ),
            14 =>
            array(
                'created_at' => null,
                'id' => 15,
                'name' => 'Land',
                'parent_id' => 3,
                'updated_at' => null,
            ),
            15 =>
            array(
                'created_at' => null,
                'id' => 16,
                'name' => 'Furniture',
                'parent_id' => 4,
                'updated_at' => null,
            ),
            16 =>
            array(
                'created_at' => null,
                'id' => 17,
                'name' => 'Desk & Chair',
                'parent_id' => 16,
                'updated_at' => null,
            ),
            17 =>
            array(
                'created_at' => null,
                'id' => 18,
                'name' => 'Sofa',
                'parent_id' => 16,
                'updated_at' => null,
            ),
        ));
    }
}
