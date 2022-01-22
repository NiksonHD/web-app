<?php

namespace App\Http\Weborders;

use App\Http\HttpHandlerAbstract;
use App\Service\WebOrder\WebOrderServiceInterface;

class WebOrderHttpHandler extends HttpHandlerAbstract{


    function upload(WebOrderServiceInterface $webOrderService, $formData){
        $webOrderService->addOrder($formData);
        
    }
    
    function showOrders(WebOrderServiceInterface $webOrderService, $formData){
        $date = '';
        $date = $formData['date'];
            if ($date == '') {
                $date = date("Y-m-d");
            }
        
        $webOrders = $webOrderService->getAllByDate($date);
        $this->render('web_orders/show_orders', ['webOrders' => $webOrders], ['error' => null]);
        
    }
    
}
