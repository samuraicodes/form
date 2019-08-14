<?php

require_once 'database.php';

if(!empty($_POST))
{
    $name = stripslashes($_POST['name']);
    $surname = stripslashes($_POST['surname']);

    if($name != "" && $surname != "")
    {
        if(!empty($_POST['menu']))
        {
            $total = 0;

            foreach ($_POST['menu'] as $selected) {
                $price = (float) $selected;
                $total += $price;
            }

            echo "Name: ".$name."<br/>";
            echo "Surname: ".$surname."<br/>";
            echo "Total to pay: " .$total. "<br/>";
            $dbPost= $db->query("insert into bill(name,surname,total)values('".$name."','".$surname."','" .$total."')");
        }
        else 
        {
            echo "Please select your products";
        }
        
    }
    else
    {
        echo "Please enter your name and surname";
    }
}

?>