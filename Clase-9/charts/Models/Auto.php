<?php

namespace Models {
    class Auto
    {
        private $connection;
        public function __construct($connection)
        {
            $this->connection = $connection;
        }

        public function create($marca, $modelo)
        {
            $this->connection->runStatement('INSERT INTO autos(marca, modelo) VALUES ($1, $2)', [$marca, $modelo]);
        }

        public function update($id, $marca, $modelo)
        {
            $this->connection->runStatement('UPDATE autos SET marca=$2, modelo=$3 WHERE id = $1', [$id, $marca, $modelo]);
        }

        public function read()
        {
            return $this->connection->runQuery('SELECT * FROM autos ORDER BY id');
        }

        public function delete($id)
        {
            $this->connection->runStatement('DELETE FROM autos WHERE id = $1', [$id]);
        }

    }
}
