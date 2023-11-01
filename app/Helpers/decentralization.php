<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

function getPermissions($user)
{
    $keys = [];
    foreach ($user->roles as $role) {
        foreach ($role->permissions as $permission) {
            $keys[] = $permission->permission_key;
        }
    }
    return $keys;
}

function getPermissionKeys($user)
{
    $string = "SELECT permissions.permission_key  
    FROM permissions WHERE permissions.id  
        IN (SELECT permission_id FROM role_permission WHERE role_id 
            IN (SELECT role_id FROM user_role WHERE user_id =" . $user->id . "))";
    $permissions = DB::select($string);
    $array = [];
    foreach ($permissions as $permission) {
        $array[] = $permission->permission_key;
    }
    return $array;
}
