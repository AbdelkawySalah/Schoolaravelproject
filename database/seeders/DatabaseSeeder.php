<?php
use Illuminate\Support\Facades\DB;
namespace Database\Seeders;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){
        $this->call(BloodTableSeeder1::class);
        $this->call(NationalitiesTableSeeder::class);
        $this->call(ReligionaTableSeeder::class);


    }

    
}
