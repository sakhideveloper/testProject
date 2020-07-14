<?php

use Illuminate\Database\Seeder;
use App\Customers;
class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $Customers = factory(Customers::class, 1000100)->create();
    }
}
