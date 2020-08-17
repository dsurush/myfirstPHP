
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Umedjon</title>
</head>
<body>
<?php

function power ($a){
    return $a * $a;
}
function error_msg ($err_str)
{
    echo "<b>0шибка!<br>Причина: Bы ввели отрицательное число</b>";
}
error_msg("Bы ввели отрицательное число");
echo "<br> Ответ:".power(2);
echo "<br>";
$phones = array("apple"=>"iPhone5",
    "samsumg"=>"Samsung Galaxy III",
    "nokia" => "Nokia N9",
    "sony" => "Sony XPeria Z3");

foreach($phones as $key=>$value)
    echo "$value <br />";

$tablets = array("lenovo" => "Lenovo IdeaTab A3500",
    "samsung" => "Samsung Galaxy Tab 4",
    "apple" => "Apple iPad Air");
asort($tablets);

echo "<ul>";
foreach ($tablets as $key => $value)
{
    echo "<li>$key : $value</li>";
}
echo "</ul><br>";
$login = "Не известно";
$password = "Не известно";
if (isset($_POST['login'])) $login = $_POST['login'];
if (isset($_POST['password'])) $password = $_POST['password'];

echo "Ваш логин: $login  <br> Ваш пароль: $password";

require "form.php";

?>

</body>
</html>