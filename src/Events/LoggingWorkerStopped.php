<?php

namespace Keerill\LaravelJsonFormatter\Events;

use Laravel\Octane\Events\WorkerStopping;
use Psr\Log\LoggerInterface;

final class LoggingWorkerStopped
{
    public function __construct(
        protected LoggerInterface $logger
    ) {
    }

    public function handle(WorkerStopping $event): void
    {
        $this->logger->debug('Worker stopped', ['name' => 'worker-event']);
    }
}
