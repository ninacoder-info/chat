<?php

namespace NiNaCoder\Chat;

use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    protected $tablePrefix = 'chat_';
}
