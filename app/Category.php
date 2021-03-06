<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // category_id isn't fillable
    protected $guarded = ['category_id'];

    // set category_id as the primary key
    protected $primaryKey = 'category_id';

    /**
     * Get the stuff that use this category
     */
    public function stuff() {
        return $this->hasMany(Stuff::class, 'category_id');
    }
}
