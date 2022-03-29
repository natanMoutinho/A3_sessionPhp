<?php

    class Connection {
        private $con;     
        // construtor da classe   
        function __construct() {
            try {
                $this->con = new PDO ("mysql:host=localhost;dbname=logsys", "logsysuser", "#logsysuser");
                // configurando o modo de exibicao de erros. Neste caso, excecoes serao levantadas
                $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo ($e->getMessage());        
            }
        }

        function login($user,$pass) {
            try {
                $arr = [];
                if ($this->con) {
                    $stmt = $this->con->prepare("SELECT * FROM usuario WHERE login = ? AND senha = ?");            
                    $stmt->bindParam(1 , $user);
                    $stmt->bindParam(2 , $pass);
                    $stmt->execute();
                    $arr = $stmt->fetchAll(PDO::FETCH_ASSOC);                    
                    return $arr;
                }
                $stmt = null;                            
            } catch (Exception $e) {
                echo ($e->getMessage());        
            }            
        }
    }

?>
