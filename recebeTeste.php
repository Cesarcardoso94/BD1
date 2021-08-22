<?php include_once "connectionBD.php";?>
<html>
<body>
<?php
$idTeste = $_POST['idTeste'];
/////recebe data/////
$data = $_POST['data'];
$dataP = explode('/', $data);
$data = $dataP[2].'-'.$dataP[1].'-'.$dataP[0];
////
$resultado = $_POST['resultado'];
$DDoenca = $_POST['DDoenca'];
$pacienteCPF = $_POST['pacienteCPF'];


$conn1 = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);

mysqli_select_db($conn1, '$dbname');
$sql = "INSERT INTO  teste (idTeste, data ,resultado, DDoenca, pacienteCPF) VALUES ('$idTeste','$data','$resultado', '$DDoenca', '$pacienteCPF')";
    if(mysqli_query($conn1, $sql)){
        echo "<script>alert('Dados salvos'); window.location = 'testesV.php';</script>";
}

    else{
        echo "Deu erro: " .$sql . "<br>" . mysqli_error($conn1);
    }
mysqli_close($conn1);



?>;
</body>

