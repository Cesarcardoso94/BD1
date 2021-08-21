<?php include_once "connectionBD.php";?>
<html>
<body>
<?php
$idLeito = $_POST['idLeito'];
$status = $_POST['status'];
$tipoL = $_POST['tipoL'];

//////recebe data////
$dataLiberacao = $_POST['dataLiberacao'];
$dataP = explode('/', $dataLiberacao);
$dataLiberacao = $dataP[2].'-'.$dataP[1].'-'.$dataP[0];
/////////////////////////////

$Paciente_CPF = $_POST['Paciente_CPF'];


$conn1 = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);

mysqli_select_db($conn1, '$dbname');
$sql = "INSERT INTO  leitos (idLeito ,status, tipoL ,dataLiberacao, Paciente_CPF) VALUES ('$idLeito','$status','$tipoL','$dataLiberacao', '$Paciente_CPF')";
    if(mysqli_query($conn1, $sql)){
        echo "<script>alert('Dados salvos'); window.location = 'cadDoenca.html';</script>";
}

    else{
        echo "Deu erro: " .$sql . "<br>" . mysqli_error($conn1);
    }
mysqli_close($conn1);



?>;
</body>

