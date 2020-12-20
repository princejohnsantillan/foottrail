<?php

use Illuminate\Database\Migrations\Migration;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class SetupRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $user_role = Role::create(['name' => 'user']);
        $provider_role = Role::create(['name' => 'provider']);
        $scan = Permission::create(['name' => 'scan qr code']);

        $user_role->givePermissionTo($scan);
        $scan->assignRole($provider_role);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
