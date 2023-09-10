<?php

namespace Thabetrighi\Zoom;

use Thabetrighi\Zoom\Support\Model;

class MeetingSetting extends Model
{
    public function globalDialInNumbers()
    {
        return $this->hasMany(GlobalDialInNumber::class);
    }

    public function globalDialInCountries()
    {
        return $this->hasMany(GlobalDialInCountry::class);
    }
}
