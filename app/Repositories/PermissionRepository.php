<?php

namespace App\Repositories;

use App\Interfaces\PermissionRepositoryInterface;

class PermissionRepository implements PermissionRepositoryInterface
{
    public function getAllPermissions()
    {
        return \Spatie\Permission\Models\Permission::all();
    }

    // add other methods here
    
}