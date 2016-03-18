<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredients extends Model
{
    protected $table = 'ingredients';
    protected $fillable = ['id', 'recipe_id', 'unit','qty'];

}
?>