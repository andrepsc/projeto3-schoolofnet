<?php
include_once 'topo.php';
?>
<?php 
//$flag = $_POST["submit"];
if(isset($_POST["submit"]) || $_POST["submit"]) {
	echo "Dados enviados com sucesso, abaixo seguem os dados que você enviou : <br>";
	echo "Nome : ".$_POST['nome']."<br>";
	echo "Email : ".$_POST['email']."<br>";
	echo "Assunto : ".$_POST['assunto']."<br>";
	echo "Mensagem : ".$_POST['mensagem']."<br>";
} else {
?>
<div id="content">
<form class="form-horizontal" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<label>Nome</label> : <input type="text" name="nome"> <br>
<label>Email</label> : <input type="email" name="email"> <br>
<label>Assunto</label> : <input type="text" name="assunto"> <br>
<label>Mensagem</label> : <textarea  name="mensagem"> </textarea><br>
<input type="submit" value="Enviar" name="submit">
</form>
</div>
<?php 
}
?>
<?php
include_once 'footer.php';
?>
