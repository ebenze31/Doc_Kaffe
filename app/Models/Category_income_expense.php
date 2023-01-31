<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category_income_expense extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'category_income_expenses';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'icon'];

    
}
