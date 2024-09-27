<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LevelModel extends Model
{
   
   public function barang():hasMany
   {
    return $this->hasMany(BarangModel::class, 'barang_id' , 'barang_id');
   }
   
   
   
   
   
   
   
   
   
   
   
   // public function user():BelongsTo
    //{
      //  return $this->belongsTo(UserModel::class);
    //}
}