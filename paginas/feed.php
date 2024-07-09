<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feed</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght@20..48,400..700" />
</head>
<body>

    <?php 
        require_once "../classes/Postagem.php";
        require_once "../config/banco.php";
        include_once "../header.php";
    ?>

    <main>
        <div class="social-card-container">

                <?php 

                       $postagens = pegarPostagens();
                       
                       for ($i=0; $i < count($postagens) ; $i++){
                        $p = $postagens[$i];
                        $qtd = quantidadeDeComentarios($p->cod);
                        Postagem::gerarPostCard($p->cod, $p->imagem, $p->nome, $p->texto_post, $p->post_img, $p->likes, $qtd);
                        
                       }
                       //echo var_dump($lista);

                       

                    // Gerar um card de postagem
                    //Postagem::gerarPostCard(5, "prof-4.jpg", "Eduardo Henrique", "Bom Dia", "img-4.jpg", 2, 5);
                    
                ?>

                


        </div>
    </main>

</body>
</html>