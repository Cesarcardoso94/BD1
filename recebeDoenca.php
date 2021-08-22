<?php include_once "connectionBD.php";?>
<html>
<body>
<?php
$gravidade = $_POST['gravidade'];
$idDoenca = $_POST['idDoenca'];
$sintomas = $_POST['sintomas'];
$nCientifico = $_POST['nCientifico'];

$conn1 = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);

mysqli_select_db($conn1, '$dbname');
$sql = "INSERT INTO  doença (gravidade ,idDoenca, sintomas ,nCientifico) VALUES ('$gravidade','$idDoenca','$sintomas' ,'$nCientifico')";
    if(mysqli_query($conn1, $sql)){
        echo "<script>alert('Dados salvos'); window.location = 'doencaV.php';</script>";
}

    else{
        echo "Deu erro: " .$sql . "<br>" . mysqli_error($conn1);
    }
mysqli_close($conn1);



?>;
</body>

