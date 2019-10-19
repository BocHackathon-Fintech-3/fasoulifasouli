<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserContributions extends Model
{
    protected $table = 'user_contributions';
    protected $primaryKey = 'title';
    public $incrementing = false;

    // We don't use timestamps in our tables for now. Might reconsider later
    public $timestamps = false;
}
