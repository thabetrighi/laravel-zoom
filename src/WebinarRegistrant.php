<?php

namespace Thabetrighi\Zoom;

use Thabetrighi\Zoom\Support\Model;

class WebinarRegistrant extends Model
{
    protected $insertResource = 'Thabetrighi\Zoom\Requests\StoreRegistrant';

    protected $endPoint = 'webinars/{webinar:id}/registrants';

    protected $allowedMethods = ['find', 'get', 'post', 'put', 'delete'];

    protected $apiMultipleDataField = 'registrants';

    public function getApiMultipleDataField()
    {
        return $this->apiMultipleDataField;
    }

    public function customQuestions()
    {
        return $this->hasMany(CustomQuestion::class);
    }


    public function beforeQuery($query)
    {
        if (isset($this->occurrence_id)) {
            $query->addQuery('occurrence_id', $this->occurrence_id);
        }
    }

    public function beforeInsert($query)
    {
        if (isset($this->occurrence_id)) {
            $query->addQuery('occurrence_id', $this->occurrence_id);
        }
    }

    protected function updateAction($action)
    {
        if ($this->exists()) {
            if (isset($this->occurrence_id)) {
                return $this->newQuery()->sendRequest('put', ['webinars/'.$this->webinar_id.'/registrants/status', ['action' => $action, 'registrants' => [['id' => $this->id, 'email' => $this->email]]], ['occurrence_id' => $this->occurrence_id]])->successful();
            } else {
                return $this->newQuery()->sendRequest('put', ['webinars/'.$this->webinar_id.'/registrants/status', ['action' => $action, 'registrants' => [['id' => $this->id, 'email' => $this->email]]]])->successful();
            }
        }
    }

    public function approve()
    {
        return $this->updateAction('approve');
    }

    public function deny()
    {
        return $this->updateAction('deny');
    }

    public function cancel()
    {
        return $this->updateAction('cancel');
    }
}
