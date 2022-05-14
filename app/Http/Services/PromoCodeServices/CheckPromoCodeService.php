<?php

namespace App\Http\Services\PromoCodeServices;

use App\Models\PromoCode;
use Carbon\Carbon;

class CheckPromoCodeService extends PromoCodeService
{
    public function check(PromoCode $promoCode)
    {
        if ($this->checkActive($promoCode)) {
            return $this->checkDate($promoCode);
        }
        return false;
    }

    public function checkDate(PromoCode $promoCode)
    {
        if (empty($promoCode)) return false;
        $promoCodeDay = Carbon::createFromFormat('Y-m-d', $promoCode->last_date);
        $now = Carbon::now();
        if ($promoCodeDay>$now) return true;
        return false;
    }

    public function checkActive(PromoCode $promoCode)
    {
        if (empty($promoCode)) return false;
        if ($promoCode->is_active) return true;
        return false;
    }
}
