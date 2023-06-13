<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;


class File extends Model
{
    use SoftDeletes;

    protected $table = 'files';

    protected $fillable = ['filename', 'fileable_id', 'fileable_type'];

    public function fileable(): MorphTo
    {
        return $this->morphTo();
    }

}
