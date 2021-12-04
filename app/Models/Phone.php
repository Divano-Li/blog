<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $rule
 */
class Phone extends Model
{
    public function user(){
        return $this -> belongsTo('App\Models\User');
    }
}
