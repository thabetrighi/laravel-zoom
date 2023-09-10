<?php

namespace Thabetrighi\Zoom;

use Thabetrighi\Zoom\Support\Model;

class Account extends Model
{
    // API included but its not open to the majority of API Users
    protected $insertResource = 'Thabetrighi\Zoom\Requests\StoreAccount';
    protected $updateResource = 'Thabetrighi\Zoom\Requests\UpdateAccount';
    
    protected $endPoint = 'accounts';

    protected $allowedMethods = ['get', 'post', 'delete'];

    protected $apiDataField = '';

    protected $apiMultipleDataField = 'accounts';
}
