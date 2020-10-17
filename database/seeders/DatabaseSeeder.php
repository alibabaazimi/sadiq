<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(UnitsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(OauthClientsTableSeeder::class);
        $this->call(CarBrandsTableSeeder::class);
        $this->call(DeviceProcessorsTableSeeder::class);
        $this->call(DealTypesTableSeeder::class);
        $this->call(ColorsTableSeeder::class);
        $this->call(CurrenciesTableSeeder::class);
        $this->call(DeviceBrandsTableSeeder::class);
    }
}
