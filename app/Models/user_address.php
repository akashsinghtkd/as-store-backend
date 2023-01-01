<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_address extends Model
{
    use HasFactory;

    /**
     * This function is use for get the user data.
     *
     * @return User
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}