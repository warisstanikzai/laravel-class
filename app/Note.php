<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Note extends Model
{

    protected $guarded = [];

    /**
     * return the note card
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function card()
    {
        return $this->belongsTo(Card::class, 'card_id', 'id');
    }
}
