<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Causes extends Model
{
    protected $table = 'causes';
    protected $primaryKey = 'title';

    public $incrementing = false;

    // We don't use timestamps in our tables for now. Might reconsider later
    public $timestamps = false;
}
