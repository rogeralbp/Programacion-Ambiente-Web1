<?php

namespace Models {
    class Venta
    {
        private $connection;
        public function __construct($connection)
        {
            $this->connection = $connection;
        }

        public function reporteVentas($email, $fecha_inicio, $fecha_fin)
        {
            $sql = "SELECT u.email, SUM(v.monto) as monto
                    FROM usuarios u, ventas v
                    WHERE u.id = v.usuario_id";
            $params = [];
            if ($email) {
                $params['u.email ILIKE $' . (count($params) + 1)] = "%$email%";
            }
            if ($fecha_inicio) {
                $params['v.fecha >= $' . (count($params) + 1)] = $fecha_inicio;
            }
            if ($fecha_fin) {
                $params['v.fecha <= $' . (count($params) + 1)] = $fecha_fin;
            }
            if ($params) {
                $sql .= " AND " . join(' AND ', array_keys($params));
            }
            $sql .= " GROUP BY u.email";
            return $this->connection->runQuery($sql, array_values($params));
        }
    }
}
