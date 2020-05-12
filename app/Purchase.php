<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{

    public function appData() {
        $table = DB::table('Purchase')->select();
    }
}
