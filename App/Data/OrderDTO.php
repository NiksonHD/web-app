<?php

namespace App\Data;

class OrderDTO {

    private const BON_MIN_LENGTH = 1;
    private const BON_MAX_LENGTH = 13;
    private const EAN_MAX_LENGTH = 13;
    private const EAN_MIN_LENGTH = 6;

    /**
     * 
     * @var string
     */
    private $id;

    /**
     * 
     * @var string
     */
    private $orderNumber;

    /**
     * 
     * @var string
     */
    
    private $recordDate;
    
    public function getRecordDate(): string {
        return $this->recordDate;
    }

    public function setRecordDate(string $recordDate): OrderDTO {
        return $this;
    }

        

    public function getId(): string {
        return $this->id;
    }

    public function getOrderNumber(): string {
        return $this->orderNumber;
    }

    public function setId(string $id): OrderDTO {
        return $this;
    }

    public function setOrderNumber(string $orderNumber): OrderDTO {
        return $this;
    }

}
