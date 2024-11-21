<?php
class Condicionales extends Padre
{
    public function funcionString()
    {
        echo <<<'EOT'
    <pre>
            La estructura más simple es el if:

            PHP
            if (condición) {
                // Código a ejecutar si la condición es verdadera
            }
            

            Si quieres ejecutar un bloque de código alternativo cuando la condición es falsa, puedes usar else:

            PHP
            if (condición) {
                // Código a ejecutar si la condición es verdadera
            } else {
                // Código a ejecutar si la condición es falsa 1    
            1.
            github.com
            github.com

            }
            

            Para evaluar múltiples condiciones, puedes utilizar elseif:

            PHP
            if (condición1) {
                // Código si condición1 es verdadera
            } elseif (condición2) {
                // Código si condición1 es falsa y condición2 es verdadera
            } else {
                // Código si ninguna condición es verdadera
            }
           

            Ejemplos:

            PHP
            // Ejemplo 1: Verificar si un número es par
            $numero = 10;
            if ($numero % 2 == 0) {
                echo "El número es par";
            } else {
                echo "El número es impar";
            }

            // Ejemplo 2: Crear un menú simple
            echo "Elige una opción:\n";
            echo "1. Opción 1\n";
            echo "2. Opción 2\n";

            $opcion = readline();

            if ($opcion == 1) {
                echo "Seleccionaste la opción 1";
            } elseif ($opcion == 2) {
                echo "Seleccionaste la opción 2";
            } else {
                echo "Opción inválida";
            }
            

            Operadores de comparación:

            ==: Igual a
            !=: Diferente de
            <: Menor que
            >: Mayor que
            <=: Menor o igual que
            >=: Mayor o igual que
            Operadores lógicos:

            &&: Y (ambas condiciones deben ser verdaderas)
            ||: O (al menos una condición debe ser verdadera)
            !: No (niega una condición)
    </pre>

    EOT;
    }
}