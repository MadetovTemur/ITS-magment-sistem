<?php 

namespace App\Database;

use App\Models\MessageModel;

class DataBaze
{
    
    private \PDO $pdo;
    
    public readonly MessageModel $Message;

    /**
     * Class constructor.
     */
    public function __construct()
    {   
        $this->connect();
        $this->conModels();
    }

    public function query(string $sql):array|false|int
    {
        
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    private function connect(): void
    {   
        try {
            $this->pdo = new \PDO("mysql:host=localhost;dbname=its;charset=utf8", 'root',  '');
            // $this->pdo->setAttribute(, [PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION]); 
        }catch(\PDOException $ex) {
            // getenv(varname)
            exit($ex->getMessage());
        }
     
    }

    private function conModels():void 
    {
        $this->Message = new MessageModel($this);
        // $this->Message->select();
    }

    private function first() {
        $where = '';

        if (count($conditions) > 0) {
            $where = 'WHERE '.implode(' AND ', array_map(fn ($field) => "$field = :$field", array_keys($conditions)));
        }

        $sql = "SELECT * FROM $table $where LIMIT 1";

        $stmt = $this->pdo->prepare($sql);

        $stmt->execute($conditions);

        $result = $stmt->fetch(\PDO::FETCH_ASSOC);

        return $result ?: null;
    }

    
}