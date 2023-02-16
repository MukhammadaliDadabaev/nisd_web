<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'user_id',
        'category_id',
        'content',
        'status',
        'lang',
        'image',
        'public_date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
