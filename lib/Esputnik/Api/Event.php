<?php

namespace Esputnik\Api;

use Esputnik\Exception\RuntimeException;
use Esputnik\Model\Event as EventModel;

class Event extends AbstractApi
{
    public function add(EventModel $event)
    {
        return $this->post('event/', $contact);
        //throw new RuntimeException('This method is not realized yet');
    }
}
