<?php
include_once("conexao.php");
global $conn;
$sql = "SELECT * FROM alunos";

$result = mysqli_query($conn,$sql);

while ($row=$result->fetch_assoc())
   echo $row["nome"]."<br>";

?>