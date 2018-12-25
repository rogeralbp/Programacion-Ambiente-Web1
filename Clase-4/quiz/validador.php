<?php

/**
 *
 */
class Validador
{
    public static function validar($variable)
    {
        $valor = $_REQUEST[$variable];
        if (isset($valor)) {
            return ($valor) ? '' : '(requerido)';
        }
        return '';
    }
}
