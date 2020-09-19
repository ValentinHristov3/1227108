<?php
echo "Hello";
$username ="ValentinHristov3";
echo $username;
echo 'My name is $username <br>';
$age = 22;
echo $age;
$istrue = true;
echo $istrue;
$usernameArray= ["Alex" ,"Blake"];
echo $usernameArray[0];
$usernameAsocArray = ["username"=>"Valentin" , "age"=>22];
echo $usernameAsocArray["username"];
echo $usernameAsocArray["age"];
for($i=0;$i<2;$i++)
{
    echo $usernameArray[$i];
}
foreach($usernameAsocArray as $key=>$item)
{
    echo $key." ".$item."<br>";
}
