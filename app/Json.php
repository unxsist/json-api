<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Webpatser\Uuid\Uuid;

class Json extends Model
{
    public $incrementing = false;
    protected $table = 'json';

    protected static function boot()
    {
        static::creating(function($json) {
            $json->{$json->getKeyName()} = Uuid::generate()->string;
            $json->ip = $_SERVER['REMOTE_ADDR'];
        });
    }
}
