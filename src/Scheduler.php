<?php

namespace Thabetrighi\Zoom;

use Thabetrighi\Zoom\Support\Model;

class Scheduler extends Model
{
    protected $insertResource = 'Thabetrighi\Zoom\Requests\StoreScheduler';
    protected $updateResource = 'Thabetrighi\Zoom\Requests\UpdateScheduler';
    
    protected $endPoint = 'users/{user_id}/schedulers';

    protected $allowedMethods = ['get', 'delete'];

    protected $apiMultipleDataField = 'schedulers';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getApiMultipleDataField()
    {
        return $this->apiMultipleDataField;
    }
}
