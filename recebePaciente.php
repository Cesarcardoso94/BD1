<?php include_once "connectionBD.php";?>
<html>
<body>
<?php
$idDoenca = $_POST['idDoenca'];
$Pessoa_CPF = $_POST['Pessoa_CPF'];
$NSUS= $_POST['NSUS'];
$fatoresRisco = $_POST['fatoresRisco'];
$situacao= $_POST['situacao'];

$conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);

mysqli_select_db($conn, '$dbname');
$sql = "INSERT INTO  paciente (idDoenca,Pessoa_CPF,NSUS,fatoresRisco,situacao) VALUES ('$idDoenca','$Pessoa_CPF','$NSUS','$fatoresRisco','$situacao')";
    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Dados salvos'); window.location = 'cadPaciente.html';</script>";
}

    else{
        echo "Deu erro: " .$sql . "<br>" . mysqli_error($conn);
    }
mysqli_close($conn);



?>;
</body>

