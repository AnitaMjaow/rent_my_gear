<?php

namespace App;
use App\Admin;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
     protected $fillabe=['name', 'descraption', 'rent_price', 'user_id', 'category_id', 'city_id'];
    public function images(){
        return $this->hasMany(Image::class);
    }
    public function bookning(){
   return $this->hasMany(Bookning::class);
}
public function category(){
   return $this->hasMany(Category::class);
}
public function city(){
   return $this->hasMany(City::class);
}
public function user(){
   return $this->belongsTo(User::class);
}
public function delete(){
	$this->images()->delete();
	return parent::delete();

}
}

