<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ColorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('colors')->delete();
        
        \DB::table('colors')->insert(array(
            0 =>
            array(
                'created_at' => null,
                'id' => 1,
                'name' => 'Yellow',
                'updated_at' => null,
            ),
            1 =>
            array(
                'created_at' => null,
                'id' => 2,
                'name' => 'Black',
                'updated_at' => null,
            ),
            2 =>
            array(
                'created_at' => null,
                'id' => 3,
                'name' => 'Blue',
                'updated_at' => null,
            ),
            3 =>
            array(
                'created_at' => null,
                'id' => 4,
                'name' => 'White',
                'updated_at' => null,
            ),
            4 =>
            array(
                'created_at' => null,
                'id' => 5,
                'name' => 'Orange',
                'updated_at' => null,
            ),
            5 =>
            array(
                'created_at' => null,
                'id' => 6,
                'name' => 'Gold',
                'updated_at' => null,
            ),
            6 =>
            array(
                'created_at' => null,
                'id' => 7,
                'name' => 'Green',
                'updated_at' => null,
            ),
            7 =>
            array(
                'created_at' => null,
                'id' => 8,
                'name' => 'Pink',
                'updated_at' => null,
            ),
            8 =>
            array(
                'created_at' => null,
                'id' => 9,
                'name' => 'Brown',
                'updated_at' => null,
            ),
        ));
    }
}
