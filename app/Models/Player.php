<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'tid',
        'postition',
        'nationality',
        'age',
        'year',
        'gender'
    ];
    
    public function team()
    {
        return $this->belongsTo('App\Models\Team', 'tid', 'id');
    }
    public function scopeSenior($query)
    {
        $query->where('year', '>', 4)->orderBy('year', 'asc');
    }
}
