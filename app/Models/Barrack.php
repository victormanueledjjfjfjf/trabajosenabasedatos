<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barrack extends Model
{
    use HasFactory;

    protected $table = 'barracks';
    protected $primaryKey = 'Cod_c';
    public $timestamps = true;
    protected $fillable = ['Nom_c', 'Ubic_c'];

    public function soldiers()
    {
        return $this->hasMany(Soldier::class, 'Cod_c2');
    }

    public function companies()
    {
        return $this->belongsToMany(Company::class, 'barrack_company', 'Cod_c1', 'Num_com2');
    }
}

