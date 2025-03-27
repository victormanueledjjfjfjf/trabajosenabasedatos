<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ServiceSoldier extends Pivot
{
    use HasFactory;

    protected $table = 'service_soldier';
    public $timestamps = false;
}

