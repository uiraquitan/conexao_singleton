<?php

include_once "./conection.php";

class crud
{

    protected $atributos;

    public function __construct()
    {
    }

    public function __set($atributo, $value)
    {
        $this->atributos[$atributo] = $value;
    }

    public function __get($atributo)
    {
        return $this->atributos[$atributo];
    }

    public function find(int $id)
    {


        try {
            $stmt = Connection::getInstance()->prepare("select * from user where id = :id");
            $stmt->bindValue(":id", $id, PDO::PARAM_INT);

            if ($stmt->execute()) {
                return $stmt->fetchObject(__CLASS__);
            } else {
                echo "Erro ao retornar dados";
            }
        } catch (PDOException $e) {
            echo "Erro:" . $e->getMessage();
        }
    }


    // public function insert();

}
