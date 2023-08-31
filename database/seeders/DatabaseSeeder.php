<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      $permissions = [
        'view logs',
        'view accounts',
        'create accounts',
        'update accounts',
        'delete accounts',
        'view shops',
        'create shops',
        'update shops',
        'delete shops',
        'view categories',
        'create categories',
        'update categories',
        'delete categories',
        'view products',
        'create products',
        'update products',
        'delete products',
        'view checkouts',
        'create checkouts',
        'update checkouts',
        'delete checkouts',
        'view carts',
        'create carts',
        'update carts',
        'delete carts',
        
      ];
      foreach ($permissions as $permission){
        Permission::create([
            'name' => $permission,
            'guard_name' => 'api'
        ]);
      }
    }
}
