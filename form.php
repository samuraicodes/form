<?php

require_once 'database.php';

if(!empty($_POST))
{
    $name = stripslashes($_POST['name']);
    $surname = stripslashes($_POST['surname']);

    if($name != "" && $surname != "")
    {
        echo "Name: ".$name."<br/>";
        echo "Surname: ".$surname."<br/>";
        $dbPost= $db->query("insert into person(name,surname)values('".$name."','".$surname."')");
    }
    else
    {
        echo "Please enter the required data";

    }
}

?>