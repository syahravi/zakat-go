<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\Uuids;

class File extends Model
{
    use HasFactory, Uuids, SoftDeletes;
    protected $table = "files";

    protected $primaryKey = 'id';
    protected $dates = ['delete_at'];

    protected $fillable = [
        'name',
        'filename',
        'extension',
        'path',
    ];
}
