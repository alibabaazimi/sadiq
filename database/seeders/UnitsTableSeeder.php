<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UnitsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('units')->delete();
        
        \DB::table('units')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Pieces',
                'created_at' => '2020-08-21 20:53:13',
                'updated_at' => '2020-08-21 20:53:13',
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'Units',
                'created_at' => '2020-08-21 20:53:30',
                'updated_at' => '2020-08-21 20:53:30',
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'Meter',
                'created_at' => '2020-08-21 20:53:50',
                'updated_at' => '2020-08-21 20:53:50',
            ),
        ));
    }
}
