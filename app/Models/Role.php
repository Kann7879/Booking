<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role as SpatieRole;
use App\Models\PermissionGroup;
use App\Models\Permission;

class Role extends Model
{
    protected $fillable = ['name', 'guard_name', 'permission_group_id'];

}
