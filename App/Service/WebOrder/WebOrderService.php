<?php

/*
 * Here comes the text of your license
 * Each line should be prefixed with  * 
 */

namespace App\Service\WebOrder;

use App\Repository\WebOrder\WebOrderRepositoryInterface;


class WebOrderService implements WebOrderServiceInterface {
    
    /**
     * 
     * @var WebOrderRepositoryInterface
     */
    
    
    private $webOrderRepository;
    public function __construct(WebOrderRepositoryInterface $webOrderRepository) {
        $this->webOrderRepository = $webOrderRepository;
    }

    public function addOrder($formData) {
        $dir = '/srv/http/uploaded-orders/';
        $fileName = $formData['file']['name'];
        move_uploaded_file($formData['file']['tmp_name'], $dir.$fileName);
        $orderName = substr($fileName,0,-5);
        
        $this->webOrderRepository->insert($orderName);
        
        echo 'File '. $fileName . ' was uploaded!';
        
        
    }

    public function getAllByDate($date) {
        $orderDate = '%'.$date. '%';
        return  $this->webOrderRepository->findAllByDate($orderDate);
        
    }

}
