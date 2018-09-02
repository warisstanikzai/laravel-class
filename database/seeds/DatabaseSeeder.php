<?php

use App\Medicine;
use App\Order;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        if(Permission::count() == 0) $this->call(PermissionTableSeeder::class);
        if(Role::count() == 0) $this->call(RoleTableSeeder::class);
        $this->call(UsersTableSeeder::class);
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
