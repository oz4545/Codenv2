<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'user';

    public function achievements()
    {
        return $this->hasMany(Achievement::class);
    }

    public function progress()
    {
        return $this->hasOne(Progress::class);
    }

    public function rankings()
    {
        return $this->hasOne(Ranking::class);
    }

    public function statistics()
    {
        return $this->hasOne(Statistic::class);
    }
}
