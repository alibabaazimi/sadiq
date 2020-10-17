<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DealTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('deal_types')->delete();
        
        \DB::table('deal_types')->insert(array(
            0 =>
            array(
                'created_at' => null,
                'id' => 1,
                'name' => 'For Sale',
                'updated_at' => null,
            ),
            1 =>
            array(
                'created_at' => null,
                'id' => 2,
                'name' => 'Want Buy',
                'updated_at' => null,
            ),
            2 =>
            array(
                'created_at' => null,
                'id' => 3,
                'name' => 'Exchange',
                'updated_at' => null,
            ),
            3 =>
            array(
                'created_at' => null,
                'id' => 4,
                'name' => 'Rent',
                'updated_at' => null,
            ),
        ));
    }
}
