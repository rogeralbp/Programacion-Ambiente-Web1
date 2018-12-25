<?php

class Validator
{
    public static function validate($value)
    {
        return ($value) ? '' : 'requerido';
    }
    
}
