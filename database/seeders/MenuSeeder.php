<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    public function run()
    {
        // === Menu 1: Artikel (Permission Group 7) ===
        $artikel = Menu::create([
            'nama_menu'          => 'Artikel',
            'permission_group_id'=> 7, // harus sesuai dengan permission group 'Article'
            'icon'               => 'ri-article-line',
            'status'             => '1',
            'sort'               => '1',
        ]);

        // Submenu Artikel
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

        // === Menu 2: Setting (Permission Group 8) ===
        $setting = Menu::create([
            'nama_menu'          => 'Setting',
            'permission_group_id'=> 8, // harus sesuai dengan permission group 'Setting'
            'icon'               => 'ri-settings-3-line',
            'status'             => '1',
            'sort'               => '2',
        ]);

        // Submenu Setting
        Menu::create([
            'menu_id'            => $setting->id,
            'nama_menu'          => 'User Management',
            'permission_group_id'=> 8,
            'icon'               => 'ri-user-settings-line',
            'href'               => '/settings/users',
            'status'             => '1',
            'sort'               => '1',
        ]);

        Menu::create([
            'menu_id'            => $setting->id,
            'nama_menu'          => 'Roles & Permissions',
            'permission_group_id'=> 8,
            'icon'               => 'ri-shield-user-line',
            'href'               => '/settings/roles',
            'status'             => '1',
            'sort'               => '2',
        ]);
    }
}
