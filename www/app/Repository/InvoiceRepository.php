<?php

namespace App\Repository;

use App\Models\CustomerUser;
use App\Helpers\SessionHelper as Session;

class InvoiceRepository
{
    protected $collection;
    private $package;
    private $query;

    public function __construct()
    {
        $this->collection = new CustomerUser();
    }

    public function listCustomes(): \Ds\Vector
    {

        $this->query = $this->collection
            ->where('customer_user.id_user', Session::get('id'))
            ->rightJoin('customer', 'customer.id', '=', 'customer_user.id_customer')
            ->select(
                'customer.first_name',
                'customer.last_name',
                'customer.id'
            )
            ->get();

        $this->package = new \Ds\Vector();

        foreach ($this->query as $data) {
            $this->package->push(new \Ds\Map(
                [
                    "id" => $data->id,
                    "name" => $data->first_name . ' ' . $data->last_name
                ]
            ));
        }
        return $this->package;
    }
}
