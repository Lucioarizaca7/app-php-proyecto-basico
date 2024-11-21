<?php
class Ciclos extends Padre
{

    public function funcionString()
    {
        echo <<<'EOT'
    <pre>
        Los ciclos en PHP, también conocidos como estructuras repetitivas o bucles, son estructuras que determinan el flujo de ejecución de los códigos y permiten repetir un bloque de código varias veces: 
        
        While
        Permite ejecutar un bloque de código mientras una condición sea verdadera. 
        
        Do-while
        Es similar a while, pero garantiza que el bloque de código se ejecute al menos una vez. 
        
        For
        Es una estructura iterativa similar a while, pero con una forma de programarlo diferente. 
        Otros ciclos en PHP son: Para cada, Recursión. 
        Las estructuras repetitivas son útiles para automatizar tareas, iterar sobre datos, procesar grandes cantidades de datos o realizar una tarea específica varias veces. 
    </pre>

    EOT;
    }
}