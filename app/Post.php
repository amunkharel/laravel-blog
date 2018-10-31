<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function getFeaturedAttribute($featured)
    {
        return asset($featured);
    }

    protected $fillable = [
        'title', 'content', 'featured', 'category_id' , 'slug'];
    protected $table = 'Posts';
    protected $dates = ['deleted_at'];

}
