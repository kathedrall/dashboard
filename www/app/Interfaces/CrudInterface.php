<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Interfaces;

/**
 *
 * @author samuel
 */
interface CrudInterface
{
    
    public function find(int $id);
    public function list();
    public function new(object $object);
    public function edit(object $object, Int $id = null);
    public function del(Int $id = null);
}
