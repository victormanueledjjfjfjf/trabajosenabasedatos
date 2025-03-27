<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Corp extends Model
{
    use HasFactory;

    protected $table = 'corps';
    protected $primaryKey = 'Cod_ce';
    public $timestamps = true;
    protected $fillable = ['Denom_ce'];

    public function soldiers()
    {
        return $this->hasMany(Soldier::class, 'Cod_ce1');
    }
}

