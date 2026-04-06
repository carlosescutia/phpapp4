<?php

if ( ! function_exists('has_permission_and') )
{
    /*
     * Devuelve verdadero si el usuario cuenta con todos los permisos
     */
    function has_permission_and($permisos_requeridos, $permisos_usuario)
    {
        $diferencia = array_diff($permisos_requeridos, $permisos_usuario);
        if (empty($diferencia)) {
            return true;
        } else {
            return false;
        }
    }
}

if ( ! function_exists('has_permission_or') )
{
    /*
     * Devuelve verdadero si el usuario cuenta con alguno de los permisos
     */
    function has_permission_or($permisos_requeridos, $permisos_usuario)
    {
        $comunes = array_intersect($permisos_requeridos, $permisos_usuario);
        if (empty($comunes)) {
            return false;
        } else {
            return true;
        }
    }
}
