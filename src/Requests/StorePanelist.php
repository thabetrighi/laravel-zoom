<?php

namespace Thabetrighi\Zoom\Requests;

use MacsiDigital\API\Support\PersistResource;

class StorePanelist extends PersistResource
{
    protected $persistAttributes = [
        "email" => "nullable|email",
        "name" => "required|string|max:64",
    ];
}
