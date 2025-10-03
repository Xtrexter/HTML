<?php

$tekerleme = 'Bir berber bir berbere:

    "Bre berber gel beraber,

    Bir berber dükkanı açalım. '

    . str_repeat('x', 50) . 

    'berber" demiş.'; 

echo strpos($tekerleme, 'berber'); 

?>