<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Http\Traits\UUID;

class Team extends Model
{
    use HasFactory, UUID, SoftDeletes;

    // Specify the table associated with the model
    protected $table = 'teams';
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id', 'team_name', 'total_balance', 'slogan', 'jerseys', 'created_by', 'updated_by', 'deleted_by'
    ];
}
