<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soldier extends Model
{
    use HasFactory;

    protected $table = 'soldiers';
    protected $primaryKey = 'Cod_s';
    public $timestamps = true;
    protected $fillable = ['Nom_s', 'Apell_s', 'Grado_s', 'Cod_ce1', 'Num_com1', 'Cod_c2'];

    public function services()
    {
        return $this->belongsToMany(Service::class, 'service_soldier', 'Cod_s1', 'Cod_ser1')->withPivot('Fecha');
    }

    public function corp()
    {
        return $this->belongsTo(Corp::class, 'Cod_ce1');
    }

    public function company()
    {
        return $this->belongsTo(Company::class, 'Num_com1');
    }

    public function barrack()
    {
        return $this->belongsTo(Barrack::class, 'Cod_c2');
    }
}

