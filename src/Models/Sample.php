<?php

namespace ProcessMaker\Package\PpsFoxleyInventory\Models;

use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    protected $table = 'sample_skeleton';

    protected $fillable = [
        'id', 'name', 'status'
    ];
}