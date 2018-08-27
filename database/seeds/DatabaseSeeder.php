<?php

use App\Medicine;
use App\Order;
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
        // $this->call(UsersTableSeeder::class);
        if(Medicine::count() == 0) $this->call('MedicineSeeder');
        if(Order::count() == 0) $this->call('OrderSeeder');
    }
}


class MedicineSeeder extends Seeder
{

    public function run()
    {
        factory(Medicine::class, 100)->create();
    }
}


class OrderSeeder extends Seeder
{

    public function run()
    {
        factory(Order::class, 30)->create();
    }
}
