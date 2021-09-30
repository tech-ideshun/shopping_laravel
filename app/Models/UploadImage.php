<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadImage extends Model
{
    use HasFactory;
    protected $table = "images";
    protected $fillable = ["file_name","file_path","product_id"];

// public function product(){
//     return $this->belongsTo('App\Models\Product');
// }

}
