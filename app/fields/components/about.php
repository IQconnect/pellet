<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$about = new FieldsBuilder('about', ['label' => 'O firmie']);

$about
    ->addFields(get_field_partial('components.title'))
    ->addTextarea('desc', ['rows' => 4, 'new_lines' => 'br', 'label' => 'Opis'])
    ->addImage('image', ['label' => 'Zdjęcie'])
    ->addLink('link', ['label' => 'Link']);

return $about;