<?php

require_once('functions/functions.php');
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

// recuperer toutes les lignes de la table user

// avec fetch assoc
$result4 = mysqli_query($conn, "SELECT user_name, email, id FROM user");

$data4 = [];
$i = 0;
while ($rangeeData = mysqli_fetch_assoc($result4)) {
    $data4[$i] = $rangeeData;
    $i++;


    echo "</br>";
    echo "</br>";
    echo "Nom de l'usager :" . $rangeeData["user_name"] . "</br>";
    echo "Courriel :" . $rangeeData["email"] . "</br>";

};

echo "</br>";
echo "</br>";
echo "Quatrieme fetch";
echo "</br>";
echo "</br>";
echo "Mon array aura : " . mysqli_num_rows($result4) . "lignes.";
echo "</br>";
echo "</br>";
var_dump($result4);
echo "</br>";
echo "</br>";
var_dump($data4);


$result6 = mysqli_query($conn, "SELECT * FROM user");

$data6 = [];
$i = 0;
while ($rangeeData = mysqli_fetch_row($result6)) {
    $data6[$i] = $rangeeData;
    $i++;


    echo "</br>";
    echo "</br>";
    echo "Nom de l'usager :" . $rangeeData[1] . "</br>";
    echo "Courriel :" . $rangeeData[2] . "</br>";

};

echo "</br>";
echo "</br>";
echo "Sixieme fetch";
echo "</br>";
echo "</br>";
echo "Mon array aura : " . mysqli_num_rows($result6) . "lignes.";
echo "</br>";
echo "</br>";
var_dump($result6);
echo "</br>";
echo "</br>";
var_dump($data6);

?>