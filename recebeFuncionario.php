<?php include_once "connectionBD.php";?>
<html>
<body>
<?php
$Cargo = $_POST['Cargo'];
$funcionarioCPF= $_POST['funcionarioCPF'];
$HTrabalhada = $_POST['HTrabalhada'];
$Matricula= $_POST['Matricula'];

$conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);

mysqli_select_db($conn, '$dbname');
$sql = "INSERT INTO  funcionario (Cargo,funcionarioCPF,HTrabalhada,Matricula) VALUES ('$Cargo','$funcionarioCPF','$HTrabalhada','$Matricula')";
    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Dados salvos'); window.location = 'cadPaciente.html';</script>";
}

    else{
        echo "Deu erro: " .$sql . "<br>" . mysqli_error($conn);
    }
mysqli_close($conn);



?>;
</body>

