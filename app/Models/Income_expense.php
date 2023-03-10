<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Income_expense extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'income_expenses';

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
    protected $fillable = ['title', 'detail', 'category', 'type', 'img', 'price_per_piece', 'amount','total_price','transportation_costs'];

    
}
