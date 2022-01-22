<?php

namespace App\Service\WebOrder;


interface WebOrderServiceInterface {
    function addOrder($formData);
    
    function getAllByDate($date);



}
