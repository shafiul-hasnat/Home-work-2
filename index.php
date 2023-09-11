<?php
// marks shit Start
$marks = 101;

echo '<h4>Mark shit</h4>';

if($marks >=80 && $marks <=100){
    echo 'you got A+';
}elseif($marks >=70 && $marks <=80) {
    echo 'you got A';
}elseif($marks >= 60 && $marks <=70) {
    echo 'you  got A-';
}elseif($marks >=50 && $marks <=60) {
    echo 'you got B';
}elseif($marks >=40 && $marks <=50) {
    echo 'you got C';
}elseif($marks >=33 && $marks <=40) {
    echo 'you passed';
}elseif($marks >= 0 && $marks <=33) {
    echo 'you failed';
}else{
    echo 'invailed input';
}


// marks shit end
  

// Grade start

echo '<h4>Grade</h4>';




$grade = 'A';



if($grade == 'A+') {
    echo 'you got 80 - 100';
}elseif($grade == 'A') {
    echo 'you got 70 - 80';
}elseif($grade == 'A-') {
    echo 'you got 50 - 60';
}elseif($grade == 'B') {
    echo 'you got 40 - 50';
}elseif($grade == 'C') {
    echo 'you got 33 - 40';
}elseif($grade == 'D') {
    echo 'you got 0 - 33';
}elseif($grade == 'F') {
    echo 'you Failed';
}else{
    echo 'invailed input';
}

// Grade end

echo '<br>';


// login panel start


echo '<h4>Login panel</h4>';
function test($userEmail,$userPass) {
    
    $email = 'hasnatm7@gmail.com';
    $pass  = 1234567;

    if($email == $userEmail){
        if($pass == $userPass) {
            echo 'welcome to Dashbord';
        }else{
            echo 'your pass is wrong';
        }

    }else{
        echo 'your email is wrong';
    }
}

test('hasnatm7@gmail.com',123456);

//  login panel end



// numnber choice start

echo '<h4>Number choice</h4>';

echo '<br>';


$a = 200;
$b = 30;
$c = 40;


if($a > $b && $a > $c) {
   echo 'A geter then B and C';
}elseif($b > $a && $b > $c) {
   echo 'B geter than A and C';
}else{
    echo 'C geter than A and B';
}

// number choice end
echo '<br>';
echo '<h4>Number choice</h4>';
// number chack start

$num = 45451;

if(is_numeric($num)) {
    echo 'This is number';
}else{
    echo 'invailed input';
}

// number chack end

// integer start
echo '<h4>Integer</h4>';
$text = 5648;

var_dump(is_int($text));

// integer end
echo '<br>';
echo '<h4>Driving Lisnce</h4>';
// driving lisence age start

$age = 100;

if($age >=18 && $age <=50){
    echo 'you got driving LC';
}else{
    echo 'you don`t take Lc';
}

// driving lisence age end