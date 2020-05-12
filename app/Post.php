<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    public function appData() {
        $table = DB::table('app-data')->select()
    }
}
