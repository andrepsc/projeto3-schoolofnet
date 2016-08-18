<?php

require_once 'conexaoDB.php';
echo "<pre>Executando Fixture</pre> <br>";
$conn = conexaoDB();
echo "Removendo Tabela";
$conn->query("DROP TABLE IF EXISTS teste;");
echo " ok \n";

echo "<pre>Criando Tabela</pre><br>";
$conn->query("CREATE TABLE teste(
        id INT NOT NULL AUTO_INCREMENT,
        nome VARCHAR(7) CHARACTER SET 'utf-8' NULL,
        PRIMARY KEY (id));");
echo " ok \n";

echo "<pre>Inserindo dados</pre><br>";
for($x = 0;$x <= 9;$x++) {
$nome = "Teste {$x}";
$smt = $conn ->prepare(
        "INSERT INTO teste (nome) VALUE (:nome);");    
$smt->bindParam(":nome",$nome);
$smt->execute();
}
echo " ok \n";
echo "concluido \n";


