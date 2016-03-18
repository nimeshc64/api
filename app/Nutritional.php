<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Nutritional extends Model
{
    protected $table = 'nutritional';
    protected $fillable = ['id', 'recipe_id','user_id','nutrient','amount','dri_dv'];

}
?>