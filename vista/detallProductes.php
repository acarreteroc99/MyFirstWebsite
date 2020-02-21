
<div id="box_grande_detallProductes">
    <?php foreach($producte as $fila){ ?>
        <div style="order: 1; flex-basis: 50%" id="box_imatge_detallProductes">

            <img width="200px" height="200px" src="<?php echo $fila['Imagen'] ?>" />
        </div>
        <div style="order: 2; flex-basis: 50%">
            <header>
                <i>
                    <b>
                        <h1> <?php echo $fila['Nom_Producte']; ?> </h1>
                    </b>
                </i>
            </header>

            <section>
                <i>
                    <h3> Precio: <?php echo $fila["Preu"]; ?> </h3>
                </i>
            </section>
            <br /> <br />

            <section>
                <p> <?php echo $fila["Descripcio"]; ?> </p>
            </section>
            <section style="cursor: pointer" onclick="afegirProducte(<?php echo $fila["ID_Producte"]?>)" class="boton2" > Añadir al Carro </section>
            <div id="#AFEGIT"></div>

        </div>
    <?php } ?>
</div>
