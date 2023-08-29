<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Muzaki extends Model
{
    use HasFactory, Uuids, SoftDeletes;
    protected $table = "muzaki";

    protected $primaryKey = 'id';
    protected $dates = ['delete_at'];

    protected $fillable = [
        'amount',
        'muzaki_id',
        'zakat_id',
    ];
}
