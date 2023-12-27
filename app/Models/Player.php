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
    public function scopeGender($query, $gender)
    {
        $query->where('gender', '=', $gender )->orderBy('id', 'asc');
    }
    public function scopeAllPostitions($query)
    { 
        return $query->select('postition')->groupBy('postition');
    }

    public function scopePostition($query, $pos)
    {
        return $query->where('postition', '=', $pos);
    }    
}
