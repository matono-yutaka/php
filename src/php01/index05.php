<?php
$a=5;
if($a===5){echo"＄aは5です";}

?>


<?php
$a = 5;

if ($a = 5) {
echo "\$aは5です";
}
?>

<br/>

<?php
$a=7;
if($a==5 ){
}else{echo "\$aは5以外です";
// 偽の時に実行される処理
}
?>


<?php
$a = 7;

if ($a === 5) {
echo "\$aは5です";
}else{
echo "\$aは7です";
}
?>

<br/>

<?php
$people="Saburo";
switch("Saburo"){case "Saburo":echo"三郎です";}

?>

<?php
$people = "Saburo";

switch ($people) {
case "Taro":
echo "太郎です";

case "Jiro":
echo "次郎です";

case "Saburo":
echo "三郎です";
}
?>


<?php
$a=7;

$result = ($a=7) ? "TRUE" : "FALSE";
echo$result;
