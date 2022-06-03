<?php
$numbers = [1, 44, 55, 22];
$fruits = array('apple', 'orange', 'pear');

print_r($numbers);
var_dump($numbers);

echo $fruits[1];

$colors = [
  1 => 'red',
  4 => 'blue',
  6 => 'green'
];

echo $colors[4];

$hex = [
  'red' => '#f00',
  'blue' => '#0f0',
  'green' => '#00f'
];

echo $hex['blue'];

$person = [
  'firstname' => 'Brad',
  'lastname' => 'Traversy',
  'email' => 'brad@gmail.com'
];

echo $person['firstname'];

$people = [
  [
    'firstname' => 'Brad',
    'lastname' => 'Traversy',
    'email' => 'brad@gmail.com'
  ],
  [
    'firstname' => 'John',
    'lastname' => 'Doe',
    'email' => 'john@gmail.com'
  ],
  [
    'firstname' => 'Jane',
    'lastname' => 'Doe',
    'email' => 'jane@gmail.com'
  ]
  ];

  echo $people[1]['email'];

  var_dump(json_encode($people));
  // var_dump(json_decode($people));

?>