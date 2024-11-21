<?php
class OperacionesconArray extends Padre
{
    public function funcionString()
    {
        echo <<<'EOT'
        <pre>
            1.- array — Crea un array
            2.- array_all — Checks if all array elements satisfy a callback function
            3.- array_any — Checks if at least one array element satisfies a callback function
            4.- array_change_key_case — Cambia a mayúsculas o minúsculas todas las claves en un array
            5.- array_chunk — Divide un array en fragmentos
            6.- array_column — Devuelve los valores de una sola columna del array de entrada
            7.- array_combine — Crea un nuevo array, usando una matriz para las claves y otra para sus valores
            8.- array_count_values — Cuenta todos los valores de un array
            9.- array_diff — Calcula la diferencia entre arrays
            10.- array_diff_assoc — Calcula la diferencia entre arrays con un chequeo adicional de índices
            11.- array_diff_key — Calcula la diferencia entre arrays empleando las claves para la comparación
            12.- array_diff_uassoc — Calcula la diferencia entre arrays con un chequeo adicional de índices que se realiza por una función de devolución de llamada suministrada por el usuario
            13.- array_diff_ukey — Calcula la diferencia entre arrays usando una función de devolución de llamada en las keys para comparación
            14.- array_fill — Llena un array con valores
            15.- array_fill_keys — Llena un array con valores, especificando las keys
            16.- array_filter — Filtra elementos de un array usando una función de devolución de llamada
            17.- array_find — Returns the first element satisfying a callback function
            18.- array_find_key — Returns the key of the first element satisfying a callback function
            19.- array_flip — Intercambia todas las claves de un array con sus valores asociados
        </pre>
 
     EOT;
    }
}
