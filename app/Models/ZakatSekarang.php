<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\Uuids;


class ZakatSekarang extends Model
{
    use HasFactory, SoftDeletes, Uuids;
    protected $table = "zakat";
    protected $primaryKey = "id";
    protected $dates = ['delete_at'];
    protected $fillable = [
        'name',
        'description',
        'amount',
        'thumbnail_id',
        'type_id',
        'admin_id',
        'mustahik_id',
        'amil_id',
    ];
}
