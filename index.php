<?php
$server = 'localhost';
$userName = "root";
$pwd = "";
$db = "econ1";

$conn = mysqli_connect($server, $userName, $pwd, $db);
if ($conn) {
    echo "Connected to the $db database successfully";
    global $conn;
}
else {
    echo "Error : Not connected to the $db database";
}

// recuperer une ligne dans user
$result1 = mysqli_query($conn, "SELECT * FROM user WHERE ID =2");

//AVEC FETCH ROW : TABLEAU INDEXE
$data1 = mysqli_fetch_row($result1);

echo "</br>";
echo "Premier fetch";
echo "</br>";
echo "</br>";
var_dump($result1);
echo "</br>";
echo "</br>";
var_dump($data1);



$result2 = mysqli_query($conn, "SELECT * FROM user WHERE ID =1");
//avec fetch assoc tableau associatif
$data2 = mysqli_fetch_assoc($result2);


echo "</br>";
echo "Second fetch";
echo "</br>";
echo "</br>";
var_dump($result2);
echo "</br>";
echo "</br>";
var_dump($data2);




//Recuperer une seule ligne mais en choisissant l'ordre des colonnes
$result3 = mysqli_query($conn, "SELECT user_name, email, id FROM user WHERE id =1");

$data3 = mysqli_fetch_assoc($result3);


echo "</br>";
echo "</br>";
echo "Troisieme fetch";
echo "</br>";
echo "</br>";
var_dump($result3);
echo "</br>";
echo "</br>";
var_dump($data3);





?>