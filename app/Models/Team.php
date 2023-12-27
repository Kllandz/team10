<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'team',
        'year',
        'division',
        'rank',
        'rate',
        'pastrate',
        'games',
        'founded'
    ];

    public function players()
    {
        return $this->hasMany('App\Models\Player','tid');
    }
    public function delete()
    {
        $this->players()->delete();
        return parent::delete();
    } 
    public function scopeRank($query, $rank)
    {
        $query->where('rank', '=', $rank);
    }
}
