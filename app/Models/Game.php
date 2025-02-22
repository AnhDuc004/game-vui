<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'dice_results',
        'result',
        'is_completed',
        'start_time',
        'end_time'
    ];

    protected $casts = [
        'dice_results' => 'array',
        'is_completed' => 'boolean',
        'start_time' => 'datetime',
        'end_time' => 'datetime'
    ];

    public function bets()
    {
        return $this->hasMany(Bet::class);
    }
}