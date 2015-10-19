<?php
sleep(1);
$conn = new PDO('mysql:host=localhost;dbname=exemplo', 'root', '');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$conn->exec('SET NAMES UTF8');


$valor = $_POST['valor'];
$id_comentario = $_POST['id_comentario'];

$sqlAtualiza = "UPDATE `comentarios` SET status = ? WHERE id = ?";
$prepare = $conn->prepare($sqlAtualiza);
$prepare->execute([$valor,$id_comentario]);
if($prepare->rowCount()>0):
    echo 'atualizou';
else:
    echo 'erro';
endif;

