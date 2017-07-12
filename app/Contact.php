<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
	/*
	$table->string('firstname');
            $table->string('lastname');
            $table->string('phone');
            $table->string('mobile');
            $table->string('email');
            $table->string('address');
            $table->text('bio');
	*/
	protected $fillable = ['firstname','lastname','phone','mobile','email','address','bio'];
    public function letter()
    {
    	return $this->belongsTo(Card::class);
    }
}
