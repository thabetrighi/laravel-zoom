<?php

namespace Thabetrighi\Zoom\Support;

use MacsiDigital\API\Support\ApiResource;

class Model extends ApiResource
{
    protected $apiDataField = '';

    protected $dateFormat = \DateTime::ATOM;
}
