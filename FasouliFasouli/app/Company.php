<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //
    protected $table = 'companies';
    protected $primaryKey = 'name';
    public $incrementing = false;

    // We don't use timestamps in our tables for now. Might reconsider later
    public $timestamps = false;
}
