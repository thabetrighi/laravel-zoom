<?php

namespace Thabetrighi\Zoom;

use Thabetrighi\Zoom\Support\Model;

class File extends Model
{
    protected $endPoint = '/past_webinars/{webinar:uuid}/files';

    protected $allowedMethods = ['get'];

    protected $apiMultipleDataField = 'in_meeting_files';
}
