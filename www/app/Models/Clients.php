<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

/**
 * Description of Clients
 *
 * @author samuel
 */
class Clients extends Model
{
    protected $table = 'tbldlients';
    
    protected $fillable = [
        'id',
        'uuid',
        'firstname',
        'lastname',
        'companyname',
        'email',
        'address1',
        'address2',
        'city',
        'state',
        'postcode',
        'country',
        'phonenumber',
    ];
    
    
    public function customer()
    {
        return $this->belongsToMany('App\Model\Customer', 'id_tbclient', 'id');
    }
}
