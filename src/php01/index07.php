<?php

$people = array(
    'person1' => 'Taro',
    'person2' => 'Jiro',
    'Person3' => 'Saburo'

);

foreach ($people as $person => $name) {
    print $person . "は" . $name . "です" . '<br />';
}