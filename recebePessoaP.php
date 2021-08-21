<?php include_once "connectionBD.php";?>
<html>
<body>
<?php
$Pnome = $_POST['Pnome'];
$Mnome = $_POST['Mnome'];
$Idade = $_POST['Idade'];
$Telefone = $_POST['Telefone'];
$CPF = $_POST['CPF'];
$sexo = $_POST['sexo'];
$Endereco = $_POST['Endereco'];


// Algoritmo para BD aceitar a data.
$dataNascimento = $_POST['dataNascimento'];
$dataP = explode('/', $dataNascimento);
$dataNascimento = $dataP[2].'-'.$dataP[1].'-'.$dataP[0];
//

$conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);

mysqli_select_db($conn, '$dbname');
$sql = "INSERT INTO  pessoa (Pnome ,Mnome ,Idade,Telefone ,CPF , sexo,  Endereco,  dataNascimento) VALUES ('$Pnome','$Mnome','$telefone' ,'$CPF', '$sexo', '$Endereco', '$dataNascimento')";
    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Dados salvos'); window.location = 'cadPessoaP.html';</script>";
}

    else{
        echo "Deu erro: " .$sql . "<br>" . mysqli_error($conn);
    }
mysqli_close($conn);



?>;
</body>

