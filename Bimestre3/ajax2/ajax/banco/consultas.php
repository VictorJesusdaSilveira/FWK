<?php
/** @var PDO|null $con */

$con = null;

try {
    $con = new PDO("mysql:host=localhost;dbname=sistema_teste", "root", "bancodedados");
} catch (PDOException $e) {
    print $e->getMessage();
    
}
$sql = "SELECT count(*) FROM usuarios WHERE email = :mail";
$stmt = $con->prepare($sql);
$stmt->bindParam(':mail', $_GET['email']);
$stmt->execute();
$resultado = $stmt->fetchColumn();

if($resultado > 0){
    print "Já existe este e-mail";
}else{
    print "E-mail disponível";
}
?>