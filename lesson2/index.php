<?php
header("Content-type: text/html; charset=utf-8");
/*
define("ROLE_ADMIN", 0);
define("ROLE_MODERATOR", 1);
define("ROLE_USER", 2);

$role = ROLE_MODERATOR;

if ($role == ROLE_ADMIN) {
    echo "Панель администратора<br>";
} else if ($role == ROLE_MODERATOR) {
    echo "Панель модератора<br>";
} else {
    echo "Зарегистрируйтесь на сайте<br>";
}

switch($role){
    case ROLE_ADMIN:
        echo "Панель администратора<br>";
        break;
    case ROLE_MODERATOR:
        echo "Панель модератора<br>";
        break;
    default:
        echo "Зарегистрируйтесь на сайте<br>";
}

echo "Это сайт";
/*
$access = null;
if($role == ROLE_ADMIN){
    $access = 11111;
}else{
    $access = 22222;
}
$access = ($role == ROLE_ADMIN) ? 11111 : 2222;
#-----------------------------------------------------
if($role){
    $access = $role;
}else{
    $access = 'default';
}
$access = ($role) ?: 'default';
#-----------------------------------------------------
if(isset($role)){
    $access = $role;
}else{
    $access = 'default';
}
$access = ($role) ?? 'default';

*/
/*
$x = 2;
$y = 5;
echo display($x, $y, calcAvrg($x, $y));

$x = 7;
$y = 3;
echo display($x, $y, calcAvrg($x, $y));

$x = 'rrr';
$y = 1;
echo display($x, $y, calcAvrg($x, $y));

function calcAvrg(int $par1, int $par2): int
{
    if (is_numeric($par1) && is_numeric($par2)) {
        return ($par1 + $par2) / 2;
    }
    return false;
}

function display($par1, $par2, $res)
{
    if ($res === true) {
        return "исходные значения: $par1 и $par2. Результат: $res<br>";
    }
    return "неправильные аргументы!<br>";
}

//5! = 5 * 4 * 3 * 2 * 1; 5 * 4!; 4 * 3;

/*
function fact($x){
    if($x == 1){
        return 1;
    }
    return $x * fact($x - 1);
}

var_dump(fact(5));*/

$x = 10;
var_dump(getData(function ($data) use ($x) {
    return $data + $x;
}));


//function getData($callback = null){
//    $data = 5;
//    if($callback) {
//        return $callback($data);
//    }
//    return $data;
//}


?>