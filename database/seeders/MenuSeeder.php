<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    public function run()
    {
        // === Menu 1: Artikel ===
        $artikel = Menu::create([
            'nama_menu'          => 'Artikel',
            'permission_group_id'=> 7, 
            'icon'               => 'ri-article-line',
            'status'             => '1',
            'sort'               => '1',
        ]);

        Menu::create([
            'menu_id'            => $artikel->id,
            'nama_menu'          => 'Daftar Artikel',
            'permission_group_id'=> 7,
            'icon'               => 'ri-file-list-3-line',
            'href'               => '/artikel',
            'status'             => '1',
            'sort'               => '1',
        ]);

        Menu::create([
            'menu_id'            => $artikel->id,
            'nama_menu'          => 'Tambah Artikel',
            'permission_group_id'=> 7,
            'icon'               => 'ri-file-add-line',
            'href'               => '/artikel/create',
            'status'             => '1',
            'sort'               => '2',
        ]);

        // === Menu 2: Setting ===
        $setting = Menu::create([
            'nama_menu'          => 'Setting',
            'permission_group_id'=> 8,
            'icon'               => 'ri-settings-3-line',
            'status'             => '1',
            'sort'               => '2',
        ]);

        // Submenu User Management
        $userManagement = Menu::create([
            'menu_id'            => $setting->id,
            'nama_menu'          => 'User Management',
            'permission_group_id'=> 8,
            'status'             => '1',
            'sort'               => '1',
        ]);

        // Level 3 dari User Management
        Menu::create([
            'menu_id'            => $userManagement->id,
            'nama_menu'          => 'Users',
            'permission_group_id'=> 1,
            'icon'               => 'ri-user-line',
            'href'               => '/user',
            'status'             => '1',
            'sort'               => '1',
        ]);

        Menu::create([
            'menu_id'            => $userManagement->id,
            'nama_menu'          => 'Permission Group',
            'permission_group_id'=> 8,
            'icon'               => 'ri-group-line',
            'href'               => '/settings/permission-groups',
            'status'             => '1',
            'sort'               => '2',
        ]);

        Menu::create([
            'menu_id'            => $userManagement->id,
            'nama_menu'          => 'Permissions',
            'permission_group_id'=> 8,
            'icon'               => 'ri-key-2-line',
            'href'               => '/settings/permissions',
            'status'             => '1',
            'sort'               => '3',
        ]);

        Menu::create([
            'menu_id'            => $userManagement->id,
            'nama_menu'          => 'Roles',
            'permission_group_id'=> 8,
            'icon'               => 'ri-shield-user-line',
            'href'               => '/settings/roles',
            'status'             => '1',
            'sort'               => '4',
        ]);

        // Submenu Web Setting (langsung di bawah Setting)
        Menu::create([
            'menu_id'            => $setting->id,
            'nama_menu'          => 'Web Setting',
            'permission_group_id'=> 8,
            'icon'               => 'ri-global-line',
            'href'               => '/settings/web',
            'status'             => '1',
            'sort'               => '2',
        ]);
    }
}