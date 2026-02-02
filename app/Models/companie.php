<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class companie extends Model
{
    protected $fillable = ['user_id','name','description','logo'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function jobOffers()
    {
        return $this->hasMany(job_offer::class);
    }
}
