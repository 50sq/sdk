<?php

declare(strict_types=1);

namespace FiftySq\Sdk;

use FiftySq\Sdk\Resources\AccountResource;
use FiftySq\Sdk\Resources\AdminResource;
use FiftySq\Sdk\Resources\AlbumResource;
use FiftySq\Sdk\Resources\AuthResource;
use FiftySq\Sdk\Resources\CartResource;
use FiftySq\Sdk\Resources\ClientResource;
use FiftySq\Sdk\Resources\DeviceResource;
use FiftySq\Sdk\Resources\FavoriteResource;
use FiftySq\Sdk\Resources\GalleryResource;
use FiftySq\Sdk\Resources\OrderResource;
use FiftySq\Sdk\Resources\ProofResource;
use FiftySq\Sdk\Resources\TagResource;
use FiftySq\Sdk\Resources\UploadResource;
use FiftySq\Sdk\Resources\UserResource;
use Saloon\Contracts\Authenticator;
use Saloon\Http\Auth\TokenAuthenticator;
use Saloon\Http\Connector;
use Saloon\Traits\Plugins\AcceptsJson;

class FiftySqConnector extends Connector
{
    use AcceptsJson;

    public function __construct(
        private readonly string $baseUrl,
        private readonly string $token,
        private ?string $accountId = null,
    ) {}

    public function resolveBaseUrl(): string
    {
        return rtrim($this->baseUrl, '/').'/api/v1';
    }

    protected function defaultAuth(): Authenticator
    {
        return new TokenAuthenticator($this->token);
    }

    protected function defaultHeaders(): array
    {
        $headers = [];

        if ($this->accountId !== null) {
            $headers['X-50SQ-ACCOUNT'] = $this->accountId;
        }

        return $headers;
    }

    public function setAccountId(string $accountId): static
    {
        $this->accountId = $accountId;

        return $this;
    }

    public function auth(): AuthResource
    {
        return new AuthResource($this);
    }

    public function galleries(): GalleryResource
    {
        return new GalleryResource($this);
    }

    public function accounts(): AccountResource
    {
        return new AccountResource($this);
    }

    public function user(): UserResource
    {
        return new UserResource($this);
    }

    public function orders(): OrderResource
    {
        return new OrderResource($this);
    }

    public function favorites(): FavoriteResource
    {
        return new FavoriteResource($this);
    }

    public function tags(): TagResource
    {
        return new TagResource($this);
    }

    public function cart(): CartResource
    {
        return new CartResource($this);
    }

    public function uploads(): UploadResource
    {
        return new UploadResource($this);
    }

    public function devices(): DeviceResource
    {
        return new DeviceResource($this);
    }

    public function albums(): AlbumResource
    {
        return new AlbumResource($this);
    }

    public function client(): ClientResource
    {
        return new ClientResource($this);
    }

    public function proofs(): ProofResource
    {
        return new ProofResource($this);
    }

    public function admin(): AdminResource
    {
        return new AdminResource($this);
    }
}
