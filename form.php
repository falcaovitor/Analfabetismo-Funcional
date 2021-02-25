
<html>

<title>conexão</title>

<body>

<?php
$servidor="localhost";
$usuario="root";
$senha="";
$banco="analfabetismoFuncional";
//conexão mysql
$conexao=mysqli_connect($servidor, $usuario, $senha, $banco) or die("banco de dados não encontrado");
?>
<?php
$nome=$_POST['nome'];
$email=$_POST['email'];
$cidade=$_POST['cidade'];
$idade=$_POST['idade'];
$mensagem=$_POST['mensagem'];



//inserir no banco
$inserir=mysqli_query($conexao, "INSERT into usuario
	(nome, email, cidade, idade, mensagem) 
	values('$nome','$email','$cidade','$idade','$mensagem')");

echo "<script>alert ('Obrigado pela sua opinião');</script>";
echo "<script> location.href='index.html'</script>";
?>

</body>
</html>










