<?php namespace App;
use Laracasts\Flash\Flash;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

	protected $table = 'tags';
        protected $fillable = ['name'];
        
        public function articles(){
            return $this->belongsToMany('App\Article')->withTimestamps();
            
        }
        
        public function scopeName($query,$name)
         {
         if($name != ""){
         $query->where('name',"LIKE","%$name%");
          }
	}


}
