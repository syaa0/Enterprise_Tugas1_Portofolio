<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Work extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama', 'keterangan', 'foto',
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
