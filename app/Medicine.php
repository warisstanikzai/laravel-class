<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{

    protected $guarded = [];

    /**
     * Get the medicine orders
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
