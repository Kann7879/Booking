<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settingAdmin = Menu::create([
            'nama_menu' => 'Setting Admin',
            'permission_group_id' => 1,
            'icon' => 'settings',
            'status' => '1',
            'sort' => '1',
        ]);

        $userManagement = Menu::create([
            'menu_id' => $settingAdmin->id,
            'permission_group_id' => 1,
            'nama_menu' => 'User Management',
            'status' => '1',
            'sort' => '2',
        ]);

        Menu::create([
            'menu_id' => $userManagement->id,
            'nama_menu' => 'Users',
            'permission_group_id' => 1,
            'href' => '/user',
            'status' => '1',
            'sort' => '1',
        ]);

    }
}
