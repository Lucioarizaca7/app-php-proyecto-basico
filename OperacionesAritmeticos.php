<?php

class OperacionesAritmeticos extends Padre
{
    public function saludar(){
        echo "OPERADORES ARITMETICOS: ";
    }

    public function funcionString()
    {
        echo <<<'EOT'
    <pre>
        Suma: + (símbolo más)
        Resta: - (símbolo menos)
        Multiplicación: * (símbolo asterisco)
        División: / (símbolo barra inclinada)
        Porcentaje: % (símbolo porcentaje)
        Potencia: ^ (símbolo acento circunflejo) 
    </pre>

    EOT;
    }
}
