<?php

namespace Keerill\LaravelJsonFormatter;

use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use Keerill\LaravelJsonFormatter\Events\LoggingWorkerErrorOccurred;
use Keerill\LaravelJsonFormatter\Events\LoggingWorkerStarted;
use Keerill\LaravelJsonFormatter\Events\LoggingWorkerStopped;
use Laravel\Octane\Events\WorkerErrorOccurred;
use Laravel\Octane\Events\WorkerStarting;
use Laravel\Octane\Events\WorkerStopping;

final class LaravelJsonFormatterServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->booting(function () {
            Event::listen(WorkerStarting::class, LoggingWorkerStarted::class);
            Event::listen(WorkerStopping::class, LoggingWorkerStopped::class);
            Event::listen(WorkerErrorOccurred::class, LoggingWorkerErrorOccurred::class);
        });
    }
}
