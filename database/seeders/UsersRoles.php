<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Roles;
use App\Models\Permissions;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersRoles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("SET foreign_key_checks=0");
        DB::table('roles_user')->truncate();
        DB::table('permissions_roles')->truncate();
        Permissions::truncate();
        Roles::truncate();
        DB::statement("SET foreign_key_checks=1");

        $useradmin= User::where('email','critijo@gmail.com')->first();
        if ($useradmin) {
            $useradmin->delete();
        }
        $useradmin= User::create([
           'name'               => 'Christopher',
           'email'              => 'critijo@gmail.com',
           'password'           =>  Hash::make('chacao14397'),
        ]);
        
        //rol admin
        $rolsadmin=Roles::create([
            'name' => 'Super Administrator',
            'description' => 'Support',
            'full_access' => 'yes'
        ]);
        
        //table role_user
        $useradmin->roles()->sync([ $rolsadmin->id ]);
   
   
        //permission
        $permission_all = [];
   
           
        //permission role
        $permission = Permissions::create([
            'name' => 'List role',
            'slug' => 'roles.index',
            'description' => 'A user can list role',
        ]);
   
        $permission_all[] = $permission->id;
                
        $permission = Permissions::create([
            'name' => 'Show role',
            'slug' => 'roles.show',
            'description' => 'A user can see role',
        ]);
   
        $permission_all[] = $permission->id;
                
        $permission = Permissions::create([
            'name' => 'Create role',
            'slug' => 'roles.create',
            'description' => 'A user can create role',
        ]);
   
        $permission_all[] = $permission->id;
                
        $permission = Permissions::create([
            'name' => 'Edit role',
            'slug' => 'roles.edit',
            'description' => 'A user can edit role',
        ]);
   
        $permission_all[] = $permission->id;
                
        $permission = Permissions::create([
            'name' => 'Destroy role',
            'slug' => 'roles.destroy',
            'description' => 'A user can destroy role',
        ]);
   
        $permission_all[] = $permission->id;
    
       //table permission_role
       $rolsadmin->permissions()->sync( $permission_all);
    }
}
