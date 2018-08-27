<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $guarded = [];

    /**
     * Get the medicine of this order
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function medicines()
    {
        return $this->belongsToMany(Medicine::class)
            ->withPivot('quantity');
    }
}
