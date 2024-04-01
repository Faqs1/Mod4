<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    /* The `use HasFactory;` statement in the `Employee` model is a trait that provides factory support
    for the model. This trait is used to generate model factories for testing purposes. It allows
    you to easily create model instances with predefined attributes for testing or seeding the
    database. The `HasFactory` trait is part of Laravel's Eloquent ORM and is commonly used in
    Laravel applications for generating model factories. */
    use HasFactory;
    public function Position(){
        /* The `return ->belongsTo(Position::class);` statement in the `Employee` model is
        defining a relationship between the `Employee` model and the `Position` model in Laravel's
        Eloquent ORM. */
        return $this->belongsTo(Position::class);
    }
}
