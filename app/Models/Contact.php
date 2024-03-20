<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'title',
        'email',
        'phone',
        'tgl_lahir',
        'ig',
        'github',
        'foto',
    ];

    protected static function boot()
    {
        parent::boot();
        static::updating(function ($model){
            if($model->isDirty('foto') && ($model->getOriginal('foto') !==null)){
                Storage::disk('public')->delete($model->getOriginal('foto'));
            }

        });
    }
}
