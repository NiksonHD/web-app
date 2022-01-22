<?php



namespace App\Repository\WebOrder;

use App\Data\DatabaseAbstract;
use Database\DatabaseInterface;


class WebOrderRepository extends DatabaseAbstract implements WebOrderRepositoryInterface{
    /**
     * 
     * @var DatabaseInterface
     */
    protected $db;
    public function getDb(): DatabaseInterface {
        return $this->db;
    }

    public function setDb(DatabaseInterface $db): void {
        $this->db = $db;
    }

        public function findAllByDate($date) {
           return $this->db->query("SELECT id, name as  orderNumber, record_date as recordDate from web_orders WHERE record_date like ?"
                    )->execute([$date])
                    ->fetch(\App\Data\OrderDTO::class);
        
    }

    public function insert($orderName) {
       return $this->db->query("INSERT INTO web_orders(name) VALUES(?)"
                )->execute([$orderName]);
                
    }

}
