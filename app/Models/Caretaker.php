<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//Generated By PlantUML Command
class Caretaker extends Model
{
    protected $fillable = [
        'name',
        'specialty',
        'years_of_experience',
        'contact_number',
    ];

    public function caretaker_animals()
    {
        return $this->hasMany(Caretaker_Animal::class,'caretaker_id');
    }
}
