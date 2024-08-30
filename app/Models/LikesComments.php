<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LikesComments extends Model
{
    use HasFactory;

    protected $fillable = [ 'user_id', 'comments_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
