<?php

namespace Thabetrighi\Zoom;

use Thabetrighi\Zoom\Support\Model;

class Absentees extends Model
{
    protected $endPoint = '/past_webinars/{webinar:uuid}/absentees';

    protected $allowedMethods = ['get'];

    protected $apiMultipleDataField = 'absentees';
}
