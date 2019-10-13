<?php

namespace App\Controllers;

use App\Helpers\InputHelper as Input;
use App\Repository\InvoiceRepository as Invoice;


class InvoiceController extends BaseController
{
    private $invoice;
    private $list;
    private $objectMap;


    public function list()
    {
        $listCustomers = new Invoice();
        $listComboCustomers = $listCustomers->listCustomes();
        $dataComboListCustomers = [];
        foreach ($listComboCustomers as $list) {           
            $dataComboListCustomers[] = $list->toArray();
        }

        $this->setvar('comboListCustomers', $dataComboListCustomers);
        $this->render('invoice.html');
    }

    public function print()
    {

    }

    
}