<?php

namespace App;

use App\Models\Language;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Helpers {
    static function toSelect(array $a, string $k, string $v)
     {
         $temp = [];

         foreach($a as $e){
             $i = get_object_vars($e);
             $temp[$i[$k]] =  $i[$v];
         }

         return $temp;
     }
}
