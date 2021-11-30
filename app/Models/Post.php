<?php

namespace App\Models;

 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\softDeletes;

class Post extends Model {

    use SoftDeletes;

    protected $guard = ['user_id'];



   
    }



    

    



