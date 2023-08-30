<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ZakatProduktif extends Model
{
    use HasFactory, SoftDeletes, Uuids;
    protected $table = "zakat_produktif";
    protected $primaryKey = "id";
    protected $dates = ['delete_at'];
    protected $fillable = [
        'name',
        'description',
        'business',
        'amount',
        'thumbnail_id',
        'type_id',
        'admin_id',
        'mustahik_id',
        'amil_id',
    ];
    public function amil()
    {
        return $this->hasOne(User::class, "id", "amil_id");
    }
}