<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'guard_name'];

    const ROLE_SUPER_ADMIN = 1;
    const ROLE_ADMIN = 2;
    const ROLE_MANAGER = 3;
    const ROLE_EDITOR = 4;
    const ROLE_MEMBER = 5;

    public static function getRoles()
    {
        return [
            self::ROLE_SUPER_ADMIN => 'Super Admin',
            self::ROLE_ADMIN => 'Admin',
            self::ROLE_MANAGER => 'Project Manager',
            self::ROLE_EDITOR => 'Editor',
            self::ROLE_MEMBER => 'Member',
        ];
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
