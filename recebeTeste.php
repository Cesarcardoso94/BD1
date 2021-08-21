<?php include_once "connectionBD.php";?>
<html>
<body>
<?php
$idTeste = $_POST['idTeste'];
$tipo = $_POST['tipo'];

/////recebe data/////
$data = $_POST['data'];
$dataP = explode('/', $data);
$data = $dataP[2].'-'.$dataP[1].'-'.$dataP[0];
////////////////////////////////

$resultado = $_POST['resultado'];
$DDoenca = $_POST['DDoenca'];
$pacienteSUS = $_POST['pacienteSUS'];


$conn1 = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);

mysqli_select_db($conn1, '$dbname');
$sql = "INSERT INTO  teste (idTeste ,tipo, data ,resultado) VALUES ('$idTeste','$tipo','$data','$resultado')";
    if(mysqli_query($conn1, $sql)){
        echo "<script>alert('Dados salvos'); window.location = 'cadDoenca.html';</script>";
}

    else{
        echo "Deu erro: " .$sql . "<br>" . mysqli_error($conn1);
    }
mysqli_close($conn1);



?>;
</body>

