<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PermissionGroup;

class Menu extends Model
{
    use hasFactory;
    protected $fillable = [
        'menu_id', 'nama_menu', 'icon', 'permission_group_id', 'href', 'status', 'sort'
    ];

    public function children()
    {
        return $this->hasMany(Menu::class, 'menu_id')->orderBy('sort');
    }

    public function parent()
    {
        return $this->belongsTo(Menu::class, 'menu_id');
    }
    public function permissionGroup()
    {
        return $this->belongsTo(PermissionGroup::class, 'permission_group_id');
    }
    
}
