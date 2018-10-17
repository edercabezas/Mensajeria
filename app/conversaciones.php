<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class conversaciones extends Model
{
	protected $appends = ['contact_name','contact_image'];

		 public function getContactNameAttribute()
		 {
		 		//->first(['name'])me devuelve solo la columna
	 		return $this->contact()->first(['name'])->name;
		 } 

		  public function getContactImageAttribute()
		 {
		 		//->first(['name'])me devuelve solo la columna
	 		return '/users/' . $this->contact()->first(['image'])->image;
		 } 


	 public function contact(){

	 	return $this->belongsTo(User::class);
	 }

}
