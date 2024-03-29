<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="js/javascript.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel=stylesheet href="stylesheet.css" type="text/css"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <style type="text/css"> </style>
    <link rel="icon" href="imatges/logo2.png" type="image/icon">
    <title> BCTech </title>
</head>

<header>
    <?php include_once __DIR__.'/controlador/controlador_header.php'; ?>
</header>

<div id="PAGINA_MODIFICADA" style="text-indent: 40px">

    <header class="titolsPagines">
        <b> Mi Carro </b>
    </header>

    <button  id="vaciarCarro" style="cursor: pointer"><a href="index.php?accio=buidarCarro"> Vaciar Carro </a></button>

    <?php
    $total = 0;
    if(!empty($_SESSION['productes_carro'])){
        $SESSIO_COMPLETA = $_SESSION['productes_carro'];
        $SESSIO_COMPLETA = explode('/', $SESSIO_COMPLETA);
        $i=0;
        $max = 0;
        while($i < sizeof($SESSIO_COMPLETA)-1){
            if($max < $SESSIO_COMPLETA[$i]){
                $max = $SESSIO_COMPLETA[$i];
            }
            if(empty($productes[$SESSIO_COMPLETA[$i]])){
                $productes[$SESSIO_COMPLETA[$i]] = 1;
            }else{
                $productes[$SESSIO_COMPLETA[$i]]++;
            }
            $i++;
        }

        $i=0;

        while($i < $max + 1){
            if(!empty($productes[$i])){
                $id_producte = $i;
                include __DIR__.'/controlador/controlador_carro.php';
                ?>
                </br>
                <?php
            }
            $i++;
        }
    }
    ?>
    <section id="totalMiCarro">
        <button>
            <h2> <b> Total: </b> </h2> <h3 id="#TOTAL" style="display: inline"> <?php echo $total; ?> </h3><h3 style="display: inline"> € </h3>
        </button>
    </section>

    <section  class="boton2" >
        <a <?php
        if(!empty($_SESSION['user_id'])){
            echo 'href="index.php?accio=finalitzarComanda/"';
        }
        else{
            echo 'href="index.php?accio=login/"';
        }
        ?>><?php
            if(!empty($_SESSION['user_id'])){
                echo 'Finalizar Pedido';
            }
            else{
                echo 'Inicia sesión para finalizar el pedido';
            }
            ?>
        </a>
    </section>
</div>

<footer>
    <?php include_once __DIR__.'/controlador/controlador_footer.php'; ?>
</footer>

</body>

</html>