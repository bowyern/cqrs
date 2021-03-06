<?php

namespace ArtisanSdk\CQRS\Tests\Fakes\Commands;

use ArtisanSdk\Contract\Queueable as Contract;
use ArtisanSdk\CQRS\Concerns\Queues;

class Queueable extends Command implements Contract
{
    use Queues;

    public function __construct()
    {
        $this->queue = 'default';
        $this->connection = 'default';
        $this->delay = 10;
    }
}
