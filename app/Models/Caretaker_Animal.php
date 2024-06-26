<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//Generated By PlantUML Command
class Caretaker_Animal extends Model
{
    protected $fillable = [
        'caretaker_id',
        'animal_id',
    ];

    public function caretaker()
    {
        return $this->belongsTo(Caretaker::class, 'caretaker_id');
    }

    public function animal()
    {
        return $this->belongsTo(Animal::class, 'animal_id');
    }
}
