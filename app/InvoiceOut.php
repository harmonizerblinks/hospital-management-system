<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoiceOut extends Model
{
    public function patientout()
    {
    	return $this->belongsTo('App\Patientout');
    }

    public function marketing()
    {
    	return $this->belongsTo('App\Marketing');
    }

    public function village()
    {
    	return $this->belongsTo('App\Village');
    }
}