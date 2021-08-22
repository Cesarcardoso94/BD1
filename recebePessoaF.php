<?php include_once "connectionBD.php";?>
<html>
<body>
<?php
$Pnome = $_POST['Pnome'];
$Mnome = $_POST['Mnome'];
$CPF = $_POST['CPF'];
$Sexo = $_POST['Sexo'];
$Endereco = $_POST['Endereco'];
$Idade = $_POST['Idade'];
$dataNascimento = $_POST['dataNascimento'];
$dataP = explode('/', $dataNascimento);
$dataNascimento = $dataP[2].'-'.$dataP[1].'-'.$dataP[0];


$conn2 = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);

mysqli_select_db($conn2, '$dbname');
$sql = "INSERT INTO  pessoas (Pnome ,Mnome,CPF , Sexo, Endereco, Idade,dataNascimento) VALUES ('$Pnome','$Mnome','$CPF', '$Sexo', '$Endereco', '$Idade', '$dataNascimento')";
    if(mysqli_query($conn2, $sql)){
        echo "<script>alert('Dados salvos'); window.location = 'cadFuncionario.html';</script>";
}

    else{
        echo "Deu erro: " .$sql . "<br>" . mysqli_error($conn2);
    }
mysqli_close($conn2);



?>;
</body>

