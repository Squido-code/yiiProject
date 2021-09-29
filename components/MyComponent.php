<?php

namespace app\components;

class MyComponent extends \yii\base\Component
{
    public function init()
    {
        echo "Componente inicializado";
    }

    public function saludo()
    {
        return "hola a todos";
    }
}