<?php

namespace App\Http\Repositories\OrderRepository;

use App\Http\Repositories\Repository;
use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class OrderRepository extends Repository
{
    public function __construct(Order $model)
    {
        parent::__construct($model);
    }

    public function getByInvoiceId(string $invoiceId)
    {
        return $this->model->where('invoice_id', $invoiceId)->first();
    }

    public function createNew(array $data)
    {
        try {
            return $this->model->create($data);
        } catch (\Exception $e) {
            Log::error('Проблема с сохранением заказа: ' . $e->getMessage());
            return false;
        }
    }

    public function approvePayedOrder(string $invoiceId, string $amount)
    {
        $model = $this->model->where('invoice_id', $invoiceId)->first();
        if ($model->price == $amount) {
            $model->is_payed = true;
            $model->save();
            return $model;
        }
        return false;
    }
}
