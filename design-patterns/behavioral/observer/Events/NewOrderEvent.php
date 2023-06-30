<?php

namespace Event;

use Interfaces\Event;

class NewOrderEvent implements Event
{
    private $name = 'New order';
    private $message = 'The order has been received!';

    public function getName()
    {
        return $this->name;
    }

    public function getMessage()
    {
        return $this->message;
    }
}
