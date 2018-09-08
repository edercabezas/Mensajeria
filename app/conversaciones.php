<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class conversaciones extends Model
{
	protected $appends = ['contact_name'];

		 public function getContactNameAttribute()
		 {
		 		//->first(['name'])me devuelve solo la columna
	 		return $this->contact()->first(['name'])->name;
		 } 

	 public function contact(){

	 	return $this->belongsTo(User::class);
	 }

}
