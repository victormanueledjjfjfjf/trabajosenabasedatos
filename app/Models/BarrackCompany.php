<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class BarrackCompany extends Pivot
{
    use HasFactory;

    protected $table = 'barrack_company';
    public $timestamps = false;
}

