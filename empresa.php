<?php
require_once 'conexaoDB.php';
include_once 'topo.php';
?>
<div id="content">
    <?php 
    $conn = conexaoDB();
    $select = "SELECT * FROM teste";
  $prepara = $conn->prepare($select);
  $prepara->execute(); 
  $registros = $prepara->fetchAll(PDO::FETCH_ASSOC); 
   foreach ($registros as $registro) {
    echo $registro['nome'];
}
    ?>
</div>
<?php
include_once 'footer.php';
?>
