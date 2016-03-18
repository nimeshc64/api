<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Directions extends Model
{
    protected $table = 'directions';
    protected $fillable = ['id', 'recipe_id', 'steps'];

}
?>