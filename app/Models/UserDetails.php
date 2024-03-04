<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    use HasFactory;

    // Specify the table associated with the model
    protected $table = 'users_details';
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id', 'user_id', 'address', 'jersey_number', 'base_price', 'player_type', 'batting_skills', 'bowling_skills', 'played_frequency', 'profile_link', 'created_by', 'updated_by', 'deleted_by'
    ];
}
