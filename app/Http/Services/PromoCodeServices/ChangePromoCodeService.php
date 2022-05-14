<?php

namespace App\Http\Services\PromoCodeServices;

class ChangePromoCodeService extends PromoCodeService
{
    public function deactivateByTitle(string $title)
    {
        return $this->repository->deactivateByTitle($title);
    }
}
