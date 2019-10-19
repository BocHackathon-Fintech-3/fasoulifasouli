<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FasouliUser extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'code';
    public $incrementing = false;

    // We don't use timestamps in our tables for now. Might reconsider later
    public $timestamps = false;
}
