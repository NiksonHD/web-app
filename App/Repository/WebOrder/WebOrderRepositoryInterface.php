<?php


namespace App\Repository\WebOrder;


interface WebOrderRepositoryInterface {
    function insert($orderName);
    
    
    function findAllByDate($date);
    



}
