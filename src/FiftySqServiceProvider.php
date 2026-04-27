<?php

declare(strict_types=1);

namespace FiftySq\Sdk;

use Illuminate\Support\ServiceProvider;

class FiftySqServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->singleton(FiftySqConnector::class, function () {
            return new FiftySqConnector(
                baseUrl: config('services.fiftysq.base_url', ''),
                token: config('services.fiftysq.token', ''),
                accountId: config('services.fiftysq.account_id'),
            );
        });
    }
}
