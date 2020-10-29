<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$product = new FieldsBuilder('product', ['label' => 'Produkt']);

$product
    ->addFields(get_field_partial('components.title'))
    ->addTextarea('desc', ['rows' => 2, 'new_lines' => 'br', 'label' => 'Opis'])
    ->addRepeater('boxes', ['layout' => 'block', 'label' => 'boxy'])
      ->addText('title', ['label' => 'Tytuł'])
      ->addText('icon', ['label' => 'ikona'])
      ->addTextarea('desc', ['rows' => 4, 'new_lines' => 'br', 'label' => 'Opis'])
    ->endRepeater()
    ->addRepeater('products', ['layout' => 'block', 'label' => 'Produkty'])
      ->addText('name', ['label' => 'Nazwa produktu'])
      ->addText('price', ['label' => 'Cena'])
      ->addImage('image', ['label' => 'Zdjęcie'])
      ->addLink('link', ['label' => 'Link']);

return $product;