<?php

namespace Thabetrighi\Zoom;

use Thabetrighi\Zoom\Support\Model;

class AuthenticationOption extends Model
{
    protected $insertResource = 'Thabetrighi\Zoom\Requests\StoreAuthenticationOption';
    protected $updateResource = 'Thabetrighi\Zoom\Requests\UpdateAuthenticationOption';
}
