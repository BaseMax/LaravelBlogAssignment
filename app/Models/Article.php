<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(App\Models\User::class);
    }

    protected $fillable = [
        "user_id",
        "content",
        "author",
        "title"
    ];
}
