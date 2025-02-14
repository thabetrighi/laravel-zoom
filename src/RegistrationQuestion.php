<?php

namespace Thabetrighi\Zoom;

use Thabetrighi\Zoom\Support\Model;

class RegistrationQuestion extends Model
{
    protected $insertResource = 'Thabetrighi\Zoom\Requests\UpdateRegistrationQuestion';

    protected $endPoint = 'meetings/{meeting:id}/registrants/questions';

    protected $allowedMethods = ['get', 'patch'];

    protected $createMethod = 'patch';

    protected $apiMultipleDataField = '';

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function customQuestions()
    {
        return $this->hasMany(CustomQuestion::class);
    }
}
