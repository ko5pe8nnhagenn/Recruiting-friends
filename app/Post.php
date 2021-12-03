<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
    'title',
    'body',
     'user_id',
     'category_id'];
    
        public function getPaginateByLimit(int $limit_count = 5)
    {
          return $this::with('user')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    //Userに対するリレーション

//「1対多」の関係なので単数系に
        public function user()
    {
        return $this->belongsTo('App\User');
    }
    
        public function category()
    {
        return $this->belongsTo('App\Category');
    }
}




