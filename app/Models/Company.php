<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table = 'companies';
    protected $primaryKey = 'Num_com';
    public $timestamps = true;
    protected $fillable = ['ActiP_com'];

    public function soldiers()
    {
        return $this->hasMany(Soldier::class, 'Num_com1');
    }

    public function barracks()
    {
        return $this->belongsToMany(Barrack::class, 'barrack_company', 'Num_com2', 'Cod_c1');
    }
}

