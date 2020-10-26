<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Reset cached roles and permissions
      app()[PermissionRegistrar::class]->forgetCachedPermissions();

      // create permissions
      Permission::create(['name' => 'create recipes']);
      Permission::create(['name' => 'edit recipes']);
      Permission::create(['name' => 'delete recipes']);
      Permission::create(['name' => 'publish recipes']);
      Permission::create(['name' => 'unpublish recipes']);

      // create roles and assign existing permissions
      $cook = Role::create(['name' => 'cook']);
      $cook->givePermissionTo('create recipes');
      $cook->givePermissionTo('edit recipes');
      $cook->givePermissionTo('delete recipes');

      $admin = Role::create(['name' => 'admin']);
      $admin->givePermissionTo('publish recipes');
      $admin->givePermissionTo('unpublish recipes');

      $super = Role::create(['name' => 'super-admin']);
      // gets all permissions via Gate::before rule; see AuthServiceProvider

      // create demo users
      $user = Factory(App\User::class)->create([
        'name' => 'cook',
        'email' => 'user@erodotou.com',
        'password' => '$2y$10$djQcgjHnU6Vqc.45egjeWuGo.W9nMFu/5m3q1uF8pZOhE4.4Knwc6',
      ]);
      $user->assignRole($cook);

      $user = Factory(App\User::class)->create([
        'name' => 'Admin',
        'email' => 'kypros@erodotou.com',
        'password' => '$2y$10$djQcgjHnU6Vqc.45egjeWuGo.W9nMFu/5m3q1uF8pZOhE4.4Knwc6',
      ]);
      $user->assignRole($admin);

      $user = Factory(App\User::class)->create([
        'name' => 'cherosoullis',
        'email' => 'cherosoullis@hotmail.com',
        'password' => '$2y$10$djQcgjHnU6Vqc.45egjeWuGo.W9nMFu/5m3q1uF8pZOhE4.4Knwc6',
      ]);
      $user->assignRole($super);
    }
}
