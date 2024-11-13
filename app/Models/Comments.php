<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Comments extends Model
{
    use HasFactory;


    protected $fillable = ['users_id', 'posts_id', 'author', 'content'];

    public function posts()
    {
        return $this->belongsTo(User::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function likes()
    {
        return $this->hasMany(LikesComments::class)
                    ->where(function ($query) {
                        if(auth()->check()) {
                            $query->where('user_id', auth()->user()->id);
                        }
                    });
    }

}
