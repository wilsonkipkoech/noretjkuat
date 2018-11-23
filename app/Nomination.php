<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nomination extends Model
{
    //
    protected $fillable= ['chair','vice-chair','treasurer','secretary','organizing-secretary','mission-cordinator','prayer-secretary','family-cordinator'];
}
