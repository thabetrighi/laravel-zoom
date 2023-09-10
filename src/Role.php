<?php

namespace Thabetrighi\Zoom;

use Thabetrighi\Zoom\Support\Model;

class Role extends Model
{
    protected $insertResource = 'Thabetrighi\Zoom\Requests\StoreRole';
    protected $updateResource = 'Thabetrighi\Zoom\Requests\UpdateRole';
    
    protected $endPoint = 'roles';

    protected $allowedMethods = ['find', 'get', 'post', 'patch', 'delete'];

    protected $apiDataField = '';

    protected $apiMultipleDataField = 'roles';

    public function members()
    {
        return $this->hasMany(User::class, 'members');
    }

    public function giveRoleTo($user)
    {
    }

    public function removeRoleFrom($user)
    {
    }
}
