<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>02POO</title>
    </head>
    <body>
        <?php
            require_once 'Caneta.php';
            
            $c1 = new Caneta;
            $c1->modelo = "Bic";
            $c1->cor = "Azul";
            $c1->ponta = 0.5;
            $c1->carga = 90;
            $c1->tampada = true;
            
            $c1->destampar();
            
            $c1->rabiscar();
            
            print_r($c1);
            echo '</br>';
            $c2 = new Caneta();
            $c2->modelo = "Bic";
            $c2->cor = "Vermelha";
            $c2->ponta = 1.0;
            $c2->carga = 50;
            $c2->tampar();
            
            print_r($c2);
            
        ?>
    </body>
</html>
