<?php

namespace App\Http\Services\OrderServices;

class ApproveOrderService extends OrderService
{
    public function approve($invoiceId, $amount)
    {
        $orderInfo = $this->repository->approvePayedOrder($invoiceId, $amount);
        if ($orderInfo) {
            $result = [];
            $result['user_id'] = $orderInfo->user_id;
            $result['course_id'] = $orderInfo->course_id;
            $result['promo_code'] = $orderInfo->promo_code;
            return $result;
        }
        return false;
    }
}
