<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Card extends Model
{

    protected $fillable = ['name'];

    public $timestamps  = false;

    /**
     * return the notes that owns card
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notes()
    {
        return $this->hasMany(Note::class, 'card_id', 'id');
    }
}
