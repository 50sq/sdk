<?php

declare(strict_types=1);

namespace FiftySq\Sdk\Resources\Admin;

use FiftySq\Sdk\Requests\Admin\Portfolio\CreateItemRequest;
use FiftySq\Sdk\Requests\Admin\Portfolio\CreateNavItemRequest;
use FiftySq\Sdk\Requests\Admin\Portfolio\CreatePageRequest;
use FiftySq\Sdk\Requests\Admin\Portfolio\CreateSectionRequest;
use FiftySq\Sdk\Requests\Admin\Portfolio\DeleteItemRequest;
use FiftySq\Sdk\Requests\Admin\Portfolio\DeleteNavItemRequest;
use FiftySq\Sdk\Requests\Admin\Portfolio\DeletePageRequest;
use FiftySq\Sdk\Requests\Admin\Portfolio\DeleteSectionRequest;
use FiftySq\Sdk\Requests\Admin\Portfolio\GetPageRequest;
use FiftySq\Sdk\Requests\Admin\Portfolio\GetPortfolioRequest;
use FiftySq\Sdk\Requests\Admin\Portfolio\ReorderItemsRequest;
use FiftySq\Sdk\Requests\Admin\Portfolio\ReorderNavItemsRequest;
use FiftySq\Sdk\Requests\Admin\Portfolio\ReorderSectionsRequest;
use FiftySq\Sdk\Requests\Admin\Portfolio\ToggleSectionRequest;
use FiftySq\Sdk\Requests\Admin\Portfolio\UpdateItemRequest;
use FiftySq\Sdk\Requests\Admin\Portfolio\UpdateNavItemRequest;
use FiftySq\Sdk\Requests\Admin\Portfolio\UpdatePageRequest;
use FiftySq\Sdk\Requests\Admin\Portfolio\UpdatePageSharingRequest;
use FiftySq\Sdk\Requests\Admin\Portfolio\UpdatePortfolioSettingsRequest;
use FiftySq\Sdk\Requests\Admin\Portfolio\UpdateSectionRequest;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class AdminPortfolioResource extends BaseResource
{
    public function get(): Response
    {
        return $this->connector->send(new GetPortfolioRequest);
    }

    public function updateSettings(array $data): Response
    {
        return $this->connector->send(new UpdatePortfolioSettingsRequest($data));
    }

    public function getPage(string $uid): Response
    {
        return $this->connector->send(new GetPageRequest($uid));
    }

    public function createPage(array $data): Response
    {
        return $this->connector->send(new CreatePageRequest($data));
    }

    public function updatePage(string $uid, array $data): Response
    {
        return $this->connector->send(new UpdatePageRequest($uid, $data));
    }

    public function deletePage(string $uid): Response
    {
        return $this->connector->send(new DeletePageRequest($uid));
    }

    public function updatePageSharing(string $uid, array $data): Response
    {
        return $this->connector->send(new UpdatePageSharingRequest($uid, $data));
    }

    public function createSection(string $type, string $pageUid): Response
    {
        return $this->connector->send(new CreateSectionRequest($type, $pageUid));
    }

    public function updateSection(string $uid, array $data): Response
    {
        return $this->connector->send(new UpdateSectionRequest($uid, $data));
    }

    public function deleteSection(string $uid): Response
    {
        return $this->connector->send(new DeleteSectionRequest($uid));
    }

    public function toggleSection(string $uid): Response
    {
        return $this->connector->send(new ToggleSectionRequest($uid));
    }

    public function reorderSections(array $sections): Response
    {
        return $this->connector->send(new ReorderSectionsRequest($sections));
    }

    public function createItem(array $data): Response
    {
        return $this->connector->send(new CreateItemRequest($data));
    }

    public function updateItem(string $uid, array $data): Response
    {
        return $this->connector->send(new UpdateItemRequest($uid, $data));
    }

    public function deleteItem(string $uid): Response
    {
        return $this->connector->send(new DeleteItemRequest($uid));
    }

    public function reorderItems(array $items): Response
    {
        return $this->connector->send(new ReorderItemsRequest($items));
    }

    public function createNavItem(array $data): Response
    {
        return $this->connector->send(new CreateNavItemRequest($data));
    }

    public function updateNavItem(string $uid, array $data): Response
    {
        return $this->connector->send(new UpdateNavItemRequest($uid, $data));
    }

    public function deleteNavItem(string $uid): Response
    {
        return $this->connector->send(new DeleteNavItemRequest($uid));
    }

    public function reorderNavItems(array $items): Response
    {
        return $this->connector->send(new ReorderNavItemsRequest($items));
    }
}
