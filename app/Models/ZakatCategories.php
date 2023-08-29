<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\Uuids;


class ZakatCategories extends Model
{
    use HasFactory, SoftDeletes, Uuids;
    protected $table = "zakat_categories";
    protected $primaryKey = "id";
    protected $dates = ['delete_at'];
    protected $fillable = [
        'categories',
    ];

}
