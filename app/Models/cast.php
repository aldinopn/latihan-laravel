<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class cast extends Model
{
   public function alldata()
   {
    return DB::table('cast')->get();
   }

   public function show($id)
   {
    return DB::table('cast')->where('id', $id)->first();
   }
}
