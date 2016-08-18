<html>
    <head>
        <meta charset="UTF-8">
        <title>School of Net - Site a Jato</title>
    </head>
    <body>
        <div id="estrutura">
      
            <?php 
            include_once "topo.php";             
            $rota = parse_url('http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
            function salvaRota($caminho) {
             if ($caminho['path'] != "/" && $caminho['path'] != '/index.php') {
                   $arquivo = str_replace('/','',$caminho['path']);
                   $arquivo = $arquivo.".php";
                
                   if(file_exists($arquivo)){ // se o arquivo existe,faz a requisição
                       require_once $arquivo;
                   }
                   else { // caso contrário exibe o codigo de erro
                       echo "<pre>Arquivo Não Encontrado erro 404</pre>";
                   }
                   
                   }
                   }
                   
               ?>
            <div id="content">
                <div>
                    <?php 
                      
                   salvaRota($rota); 
                    ?>
                </div>     
                Conteudo do Site
            </div>
          
        </div>
        <?php
      include_once "footer.php";
        ?>
