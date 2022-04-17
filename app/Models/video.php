<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Hekmatinasser\Verta\Verta;


class video extends Model
{
    use HasFactory;

    protected $fillable=['name','url','slug','description','length','thumbnail','category_id'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getLengthInHumanAttribute()
    {
        return gmdate('i:s',$this->length) ;
    }

    public function getCreatedAtAttribute($value)
    {
        return (new Verta($value))->formatDifference();
    }


    public function relatedPosts()
    {
        return $this->category->getRandomVideos()->except($this->id);
    }

    public function category()
    {
        return $this->belongsTo(category::class);
    }

    public function getCategoryNameAttribute()
    {
        return $this->category?->name;
    }
}