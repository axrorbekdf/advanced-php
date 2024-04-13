<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaGroup extends Model
{
    use HasFactory;

    protected $fillable = [
        'media_group_id',
        'files',
        'message_id',
    ];

    protected $casts = [
        'files' => 'json'
    ];
}
