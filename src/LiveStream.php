<?php

namespace Thabetrighi\Zoom;

use Thabetrighi\Zoom\Support\Model;

class LiveStream extends Model
{
    protected $endPoint = 'meetings/{meeting:id}/livestream';

    protected $allowedMethods = ['put'];

    protected $apiMultipleDataField = '';
}
