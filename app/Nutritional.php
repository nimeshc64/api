<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Nutritional extends Model
{
    protected $table = 'ingredients';
    protected $fillable = ['id', 'recipe_id', 'amount','dri_dv'];

}
?>