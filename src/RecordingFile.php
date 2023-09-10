<?php

namespace Thabetrighi\Zoom;

use Thabetrighi\Zoom\Support\Model;

class RecordingFile extends Model
{
    public function recording()
    {
        return $this->belongsTo(Recording::class);
    }
}
