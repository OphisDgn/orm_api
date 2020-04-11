<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
  public $timestamps = false;

  public function employee() {
    return $this->belongsTo('App\Employee', 'emp_no');
  }
    
}
