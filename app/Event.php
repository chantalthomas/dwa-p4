<?php
/**
 * Created by PhpStorm.
 * User: chantalthomas
 * Date: 12/8/18
 * Time: 7:45 AM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //protected $fillable = ['title', 'description', 'start_date','end_date'];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}