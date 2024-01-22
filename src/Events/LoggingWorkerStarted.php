<?php

namespace Keerill\LaravelJsonFormatter\Events;

use Laravel\Octane\Events\WorkerStarting;
use Psr\Log\LoggerInterface;

final class LoggingWorkerStarted
{
    public function __construct(
        protected LoggerInterface $logger
    ) {
    }

    public function handle(WorkerStarting $event): void
    {
        $this->logger->debug('Worker started', ['name' => 'worker-event']);
    }
}
