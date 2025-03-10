<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Artisan;
use Spatie\Permission\Models\Permission;
use App\Interfaces\PermissionRepositoryInterface;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private PermissionRepositoryInterface $permissionRepository;
    
    public function __construct(PermissionRepositoryInterface $permissionRepository)
    {
    $this->permissionRepository = $permissionRepository;
    }

    public function run(): void
    {
        echo "Seeder User start ... \n";

        Artisan::call('cache:forget spatie.permission.cache');
        Artisan::call('cache:clear');
        Schema::disableForeignKeyConstraints();

        $default_user_value = [
            'email_verified_at' => now(),
            'password' => bycrypt('password'),
            'remember_token' => Str::random(10),
        ];

        DB::beginTransaction();
        try {
        
            // Creat User
            $super_admin = User::create(array_merge([
                'email' => 'super@admin.com',
                'name' => 'Super Admin',
            ], $default_user_value));
            // add other users here

            // Creat Role
            $role_super_admin = Role::firstOrCreate(['name' => 'Super Admin']);
            // add other roles here


            // Array Permission to Role
            $arr_super_admin = $this->permissionRepository->superAdminPermission();
            // add other array permission here

            // Assign Role to User
            $super_admin->assignRole('Super Admin');
            // add other user role here

            // Assign Permissions to Role
            echo "Sync Permission \n";
            $role_super_admin->syncPermissions($arr_super_admin);
            // add other role permission here

            DB::commit();
        } catch (\Throwable $th){
            DB::rollback();

            echo "Error on seeder " . $th->getMessage();
            echo "\n";
        }
            Schema::enableForeignKeyConstraints();

            echo "Seeder User Complete. Thanks ... \n";
    }
}
