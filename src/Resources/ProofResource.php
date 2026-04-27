<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Resources;

use FiftySq\Sdk\Requests\Proofs\GetProofRequest;
use FiftySq\Sdk\Requests\Proofs\ListProofsRequest;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class ProofResource extends BaseResource
{
    public function list(): Response
    {
        return $this->connector->send(new ListProofsRequest);
    }

    public function get(string $galleryUid): Response
    {
        return $this->connector->send(new GetProofRequest($galleryUid));
    }
}
