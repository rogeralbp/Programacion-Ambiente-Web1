<?php

namespace Models {
    class Vehiculo
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

        public function create($marca, $modelo)
        {
            $this->connection->runStatement('INSERT INTO vehiculos(marca, modelo) VALUES ($1, $2)', [$marca, $modelo]);
        }

        public function update($id, $marca, $modelo)
        {
            $this->connection->runStatement('UPDATE vehiculos SET marca=$2, modelo=$3 WHERE id = $1', [$id, $marca, $modelo]);
        }

        public function read()
        {
            return $this->connection->runQuery('SELECT * FROM vehiculos ORDER BY id');
        }

        public function delete($id)
        {
            $this->connection->runStatement('DELETE FROM vehiculos WHERE id = $1', [$id]);
        }
    }
}
