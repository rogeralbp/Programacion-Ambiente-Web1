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

        public function create($marca, $modelo,$kilometraje)
        {
            $this->connection->runStatement('INSERT INTO vehiculos(marca,modelo,kilometraje) VALUES ($1, $2,$3)',   
                [$marca, $modelo,$kilometraje]);
        }

        public function update($id, $marca, $modelo,$kilometraje)
        {
            $this->connection->runStatement('UPDATE vehiculos SET marca=$2, modelo=$3, kilometraje=$4 WHERE id = $1', [$id, $marca, $modelo, $kilometraje]);
        }

        public function read()
        {
            return $this->connection->runQuery('SELECT * FROM vehiculos ORDER BY id');
        }

        public function delete($id)
        {
            $this->connection->runStatement('DELETE FROM vehiculos WHERE id = $1', [$id]);
        }

        public function filter($marca, $modelo, $valor1, $valor2)
        {
            return $this->connection->runQuery('SELECT * FROM vehiculos WHERE marca =$1 AND modelo = $2 AND kilometraje > $3 AND kilometraje < $4',[$marca, $modelo, $valor1, $valor2]);
        }
    }
}
