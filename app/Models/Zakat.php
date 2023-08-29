<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\Uuids;


class Zakat extends Model
{
    use HasFactory, SoftDeletes, Uuids;
    protected $table = "zakat";
    protected $primaryKey = "id";
    protected $dates = ['delete_at'];
    protected $fillable = [
        'name',
        'description',
        'amount',
        'id_thumbnail',
        'type_id',
        'admin_id',
        'partner_id',
    ];
}
