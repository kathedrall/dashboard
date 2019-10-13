<?php

namespace App\Controllers;

use App\Helpers\InputHelper as Input;

class InvoiceController extends BaseController
{
    private $invoice;
    private $list;
    private $objectMap;


    public function list()
    {
        $this->render('invoice.html');
    }

    public function print()
    {

    }

    
}