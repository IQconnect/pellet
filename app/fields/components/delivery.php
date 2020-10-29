<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$delivery = new FieldsBuilder('delivery', ['label' => 'Dostawa']);

$delivery
    ->addFields(get_field_partial('components.title'))
    ->addTextarea('desc', ['rows' => 4, 'new_lines' => 'br', 'label' => 'Opis'])
    ->addImage('image', ['label' => 'Zdjęcie']);

return $delivery;