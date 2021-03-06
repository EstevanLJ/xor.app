<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class URL extends Model
{
    protected $table = 'urls';
    
    protected $fillable = [
        'full', 'short', 'description'
    ];

    public function getShortUrl() {
        return URL::to('/'.$this->short);
    }
}
