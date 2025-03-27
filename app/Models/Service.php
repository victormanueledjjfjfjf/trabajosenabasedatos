<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $table = 'services';
    protected $primaryKey = 'Cod_ser';
    public $timestamps = true;
    protected $fillable = ['Acti_ser'];

    public function soldiers()
    {
        return $this->belongsToMany(Soldier::class, 'service_soldier', 'Cod_ser1', 'Cod_s1')->withPivot('Fecha');
    }
}

