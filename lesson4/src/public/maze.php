<?php
header("Content-type: text/html;charset=utf-8");

$maze = [
  [1, 1, 1, 1, 0, 1, 1, 1, 1, 1 ],
  [1, 1, 0, 0, 0, 1, 0, 1, 1, 1 ],
  [1, 1, 0, 1, 1, 0, 0, 1, 0, 1 ],
  [1, 0, 0, 0, 0, 0, 1, 1, 0, 1 ],
  [1, 1, 1, 1, 0, 1, 0, 0, 0, 1 ],
  [1, 0, 1, 0, 0, 1, 0, 1, 1, 1 ],
  [1, 0, 0, 0, 1, 1, 0, 0, 0, 1 ],
  [1, 0, 1, 1, 1, 1, 0, 1, 0, 1 ],
  [1, 0, 0, 0, 0, 0, 0, 1, 0, 1 ],
  [1, 1, 1, 1, 0, 1, 1, 1, 1, 1 ]
];

$messages = [

];

$directions = ['up','left','down','right'];

$position = [9,4]; //y, x
$direction = 0;

while($position[0] != 0 && $position !=4){
//for($i = 0;$i < 5; $i++ ){
    echo "</div>";
    echo "начало хода. y: {$position[0]} x: {$position[1]} направление: $directions[$direction]<br>";
    if(checkRight($position, $direction)){
        if(checkFwrd($position,$direction)){
            echo "впереди стена, повернусь влево.<br>";
            turnLeft($direction);
            echo "Выполнено направление: {$directions [$direction]}<br>";
        }else{
            echo "впереди свободно, делаю шаг <br>";
            doStep($position,$direction);
            echo "шан сделан y: {$position[0]} x: {$position[1]} направление: $directions[$direction]<br>";
        }
    }else{
        echo "Справа проход повернуться на право и сделать шаг<br>";
        turnRight($direction);
        doStep($position,$direction);
        echo "Выполнено y: {$position[0]} x: {$position[1]} направление: $directions[$direction]<br>";
    }
    echo "-----------------------<br><br>";
    drawMase($position);
    echo "</div>";
}

function doStep(&$position,&$direction){
    switch ($direction){
        case 0 :
            $position[0]--;
            break;
        case 2:
            $position[0]++;
            break;
        case 1;
            $position[1]--;
            break;
        case 3:
           $position[1]++;
            break;
    }
    return false;
}

function turnLeft(&$direction){
    if($direction == 3)
        $direction = 0;
    else
        $direction++;
}

function turnRight(&$direction){
    if($direction == 0)
        $direction = 3;
    else
        $direction--;
}

function checkFwrd($position,$direction){
    global $maze;
    switch($direction){
        case 0 :    //up
            return (bool) $maze[$position[0] - 1 ][$position[1]];
            break;
        case 2: //down
            return (bool) $maze[$position[0] + 1 ][$position[1]];
            break;
        case 1; //left
            return (bool) $maze[$position[0]][$position[1] - 1];
            break;
        case 3: //right
            return (bool) $maze[$position[0]][$position[1] + 1];
            break;
    }
    return false;
}

//Проверяем стену()
function checkRight($position, $direction){  //y,x
    global $maze;
    switch ($direction){
        case 0 :    //up
            return (bool) $maze[$position[0]][$position[1] + 1 ];
            break;
        case 2: //down
            return (bool) $maze[$position[0]][$position[1] -1 ];
            break;
        case 1; //left
            return (bool) $maze[$position[0] - 1 ][$position[1]];
            break;
        case 3: //right
            return (bool) $maze[$position[0] + 1][$position[1]];
            break;
    }
    return false;
}

function drawMase($position){
    global $maze;
    global $directions;
    global $direction;
    $classes = ['hall','wall'];
    echo "<table>";
    foreach ($maze as $y => $item) {
        echo "<tr>";
        foreach($item as $x => $i){
            $current = '';
            if($y == $position[0] && $x == $position[1])
                $current = "current {$directions[$direction]}";
            echo "<td class='{$classes[$i]} $current '></td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}


?>
<style>
    td{
        padding: 0;
        width: 20px;
        height: 20px;
        border: 1px solid black;
    }
    .wall{
        background-color: #0A246A;
    }

    .current{
        background-color: #b94a48;
        position: relative;
        overflow: hidden;
    }

    .current:after {
        content: '';
        position: absolute;
        left: 0px;
        bottom: 0px;
        border: 10px solid transparent;
    }

    .current.up:after{
        border-bottom: 10px solid #ecf053;
    }

    .current.down:after{
        border-top: 10px solid #ecf053;
    }

    .current.left:after{
        border-right: 10px solid #ecf053;
    }

    .current.right:after{
        border-left: 10px solid #ecf053;
    }
</style>
