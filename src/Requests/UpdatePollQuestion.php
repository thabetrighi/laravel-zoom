<?php

namespace Thabetrighi\Zoom\Requests;

use MacsiDigital\API\Support\PersistResource;

class UpdatePollQuestion extends PersistResource
{
    protected $persistAttributes = [
        'name' => 'nullable|string',
        'type' => 'nullable|in:single,multiple',
        'answers' => 'nullable|array',
    ];
}
