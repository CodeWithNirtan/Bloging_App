<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Post extends Model
{
    use HasFactory;
    
    Protected $fillables = [
        "title",
        "body",
        "poster",
        "user_id",
        "category"
    ];
    
    
    
    
    
    public function Users()
    {
        return $this->belongTo(User::class);
    }
}


