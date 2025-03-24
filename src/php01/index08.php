
<?php
$people = [
  [
    "first_name" => "Taro",
    "age" => 25,
    "gender" => "men"
  ],
  [
    "first_name" => "Jiro",
    "age" => 20,
    "gender" => "男性"
  ],
  [
    "first_name" => "Hanako",
    "age" => 16,
    "gender" => "women"
  ]
];

var_dump($people);
?>
<br/>







<?php

$people = [
  ['Taro', 25, 'men'],
  ['Jiro', 20, 'men'],
  ['hanako', 16, 'women']
];

foreach ($people as $person) {
  echo $person[0] . '(' . $person[1] . '歳' . $person[2] . ')'. '<br />';
}
?>

<?php
$people = [
  'person1' => 'taro',
  'person2' => 'jiro',
];
var_dump($people);
?>

<?php
$people = array('Taro', 'Jiro', 'Saburo');

foreach ($people as $person) {
  echo $person;
  echo '<br />';
}
?>

