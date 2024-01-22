<?php

namespace Keerill\LaravelJsonFormatter\Events;

use Laravel\Octane\Events\WorkerErrorOccurred;
use Psr\Log\LoggerInterface;

final class LoggingWorkerErrorOccurred
{
    public function __construct(
        protected LoggerInterface $logger
    ) {
    }

    public function handle(WorkerErrorOccurred $event): void
    {
        $this->logger->debug(
            "Worker error: {$event->exception->getMessage()}",
            ['exception' => $event->exception, 'name' => 'worker-event']
        );
    }
}
