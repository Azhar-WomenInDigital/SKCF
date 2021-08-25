<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['member_name', 'member_img', 'tw_link', 'f_link', 'inst_link', 'li_link', 'status'];
}
