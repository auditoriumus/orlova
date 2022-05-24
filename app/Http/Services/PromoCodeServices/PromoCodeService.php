<?php

namespace App\Http\Services\PromoCodeServices;

use App\Http\Repositories\PromoCodeRepository\PromoCodeRepository;
use App\Http\Services\Service;

class PromoCodeService extends Service
{
    /**
     * @var PromoCodeRepository
     */
    protected $repository;

    public function __construct(PromoCodeRepository $repository)
    {
        parent::__construct($repository);
    }
}
