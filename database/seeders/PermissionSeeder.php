<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        echo "Permission Seeder started\n";

        Artisan::call('cache:forget spatie.permission.cache');
        Artisan::call('cache:clear');
        Schema::disableForeignKeyConstraints();

        //Dashboards
        Permission::firstOrCreate(['name' => 'backend']);
        Permission::firstOrCreate(['name' => 'cms']);

        
        // add other permissions here


        Schema::enableForeignKeyConstraints();
        echo "Seeder Permission Complete. Thanks ... \n";
    }
}
