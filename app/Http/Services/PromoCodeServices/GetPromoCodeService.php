<?php

namespace App\Http\Services\PromoCodeServices;

class GetPromoCodeService extends PromoCodeService
{
    public function findByTitle(string $title)
    {
        return $this->repository->findByTitle($title);
    }
}
