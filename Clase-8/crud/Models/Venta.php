<?php

namespace Models {
    class Venta
    {
        private $connection;
        public function __construct($connection)
        {
            $this->connection = $connection;
        }

        public function find($id)
        {
            return $this->connection->runQuery('SELECT * FROM vehiculos WHERE id = $1', [$id])[0];
        }
   
        public function read()
        {
            return $this->connection->runQuery('SELECT email , monto FROM ventas AS v JOIN usuarios AS u ON v.usuario_id = u.id ORDER BY monto');
        }

        public function filterDate($f1 , $f2)
        {
            return $this->connection->runQuery('SELECT email,monto FROM ventas AS v JOIN usuarios AS u ON v.usuario_id = u.id WHERE (fecha > $1 AND fecha < $2) AND email LIKE %gmail.com ORDER BY monto',[$f1,$f2]);
        }
     
    }
}
