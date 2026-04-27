<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Support\Data;

use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Contracts\Container\CircularDependencyException;
use Illuminate\Database\Eloquent\Model;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataPipeline;
use Spatie\LaravelData\Lazy;

abstract class DataResource extends Data implements DataResourceContract
{
    public Lazy|array $authorization;

    /** @var array<string> */
    public static array $authorizations;

    public static function pipeline(): DataPipeline
    {
        return parent::pipeline()->firstThrough(ResolveAuthorizationsPipe::class);
    }

    public static function getAuthorizations(): array
    {
        return static::$authorizations ?? [];
    }

    public function withoutAuthorizations(): static
    {
        return $this->excludePermanently('authorization');
    }

    /**
     * @throws CircularDependencyException
     * @throws BindingResolutionException
     */
    protected static function resolveAuthorizationArray(Model $model): array
    {
        return resolve(AuthorizationArrayResolver::class)->resolve($model, static::class);
    }
}
