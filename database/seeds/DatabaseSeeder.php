<?php

use Illuminate\Database\Seeder;
use App\Poblacio;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
       Poblacio::unguard();
       $this->call(apiTableSeeder::class);
       Poblacio::reguard();
    }
}
