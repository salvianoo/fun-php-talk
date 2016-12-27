<?php

function Pessoa(name='Salviano') {
    return array(
        'getName' => function() use ($name) {
            return $name;
        },
        // Not working
        'setName' => function($new_name) use ($name) {
            $name = $new_name;
        }
    );
}

$pessoa = Pessoa();
echo $pessoa['getName'](); //Salviano

$pessoa->setName('Ted');

echo $pessoa['getName']();  //Salviano ??
