<?php

namespace App\Http\Repositories\PromoCodeRepository;

use App\Http\Repositories\Repository;
use App\Models\PromoCode;
use Illuminate\Database\Eloquent\Model;

class PromoCodeRepository extends Repository
{
    /**
     * @var PromoCode
     */
    protected $model;

    public function __construct(PromoCode $model)
    {
        parent::__construct($model);
    }

    public function findByTitle(string $title)
    {
        return $this->model->where('title', $title)->first();
    }

    public function deactivateByTitle(string $title)
    {
        $model = $this->findByTitle($title);
        if (empty($model)) return false;
        $model->is_active = false;
        try {
            $model->save();
            return $model;
        } catch (\Exception $e) {
            return false;
        }
    }
}
