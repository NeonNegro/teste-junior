<?php

use App\Entities\User;
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
        
      factory(User::class, 10)->create(); // create 10 products
        // $this->call(UsersTableSeeder::class);
    }
}
