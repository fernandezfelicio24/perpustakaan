<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded = [];


        public function author(){
            return $this->belongsTo(Author::class);
        }

        public function getCover(){
            if(substr($this->cover,0,5)== "https"){
                return $this->cover;
            }
            if($this->cover){
                return asset($this->cover);
            }else {
                return 'https://via.placeholder.com/150x200.png?text=No+Cover';
            }

        
        }
        public function borrowed(){
        
        return $this->belongsToMany(User::class, 'borrow_history')->withTimeStamps();
            
        }

        public function scopeIsStillBorrow($query, $bookid){

            return $query->where('books.id',$bookid)
                        ->where('returned_at', null)
                        ->count()> 0 ;
        }

}
