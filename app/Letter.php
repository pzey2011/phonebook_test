<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Letter extends Model
{
    protected $fillable = ['name'];#error fixed! body->name
    public function contacts()
    {
    	return $this->hasMany(Contact::class);
    }
}
