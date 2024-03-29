
<!-- En clickar sobre el nombre del usuario en la página principal, nos redirige a una página generada por el código de este documento -->

<header class="titolsPagines" >
    <br />
    <b> Perfil del usuario </b>
</header>

<section id="detallUsuariPage">
    <div>
        <?php $filesPublicPath ='../fotosPerfil/';?>
        <?php foreach ($dades as $fila) { ?>
            <form action="../controlador/cambiosPerfil.php" method="POST" enctype="multipart/form-data" onSubmit="return validarConfirmacion(this)">
                <div>
                    <div id="userProfilePic">
                        <img src="<?php echo $filesPublicPath.$fila['fotoPerfil']?>"/>
                        <h6> Si lo desea, canvie su foto de perfil... </h6>
                        <input type="file" name="fotoPerfil" />
                    </div>

                    <hr />
                    <br />

                        <label> <b> Nombre:</b> </label> <input name="nombre" type="text" class="dataBoxCP" value="<?php echo $fila['Nom_Usuari']; ?>" >
                        <br />

                    <br />

                        <label>  <b> Apellido 1: </b> </label> <input name="apellido1" type="text" class="dataBoxCP" value="<?php echo $fila['Cognom1']; ?>" >
                        <br />

                    <br />

                        <label> <b> Apellido 2: </b>  </label><input name="apellido2" type="text" class="dataBoxCP" value="<?php echo $fila['Cognom2']; ?>" >
                        <br />

                    <br />

                        <label> <b> Correo Electrónico: </b> </label> <input name="email" type="email" class="dataBoxCP"  value="<?php echo $fila['Email']; ?>" >
                        <br />

                    <br />

                        <label> <b> Dirección: </b> </label> <input name="adreca" type="text" class="dataBoxCP" value="<?php echo $fila['Adreça']; ?>" >
                        <br />

                    <br />

                        <label> <b> Población: </b> </label> <input name="poblacio" type="text" class="dataBoxCP" value="<?php echo $fila['Poblacio']; ?>" >
                        <br />

                    <br />

                        <label> <b> Código Postal: </b> </label> <input name="codiPostal" type="text" class="dataBoxCP" value="<?php echo $fila['Codi_Postal']; ?>" >
                        <br />

                    <hr />

                        <label> <b> Usuario: </b> </label> <input name="usuari" type="text" class="dataBoxCP"  value="<?php echo $fila['usuari']; ?>" >
                        <br>
                        <br>
                        <span class="boton1" onclick="showCanvi()"> Cambiar Contraseña </span>
                    <br>
                    <br>
                    <div id="#canviContrasenya" style="display: none">
                        <br />

                        <label> <b> Contraseña: </b> </label> <input name="password" class="dataBoxCP" type="password">
                        <br />

                        <br />
                        <label> <b> Confirmación Contraseña: </b> </label> <input name="password2" class="dataBoxCP" type="password">
                        <br />

                        <br />
                    </div>
                    <input type="hidden" id="#boolContrasenya" name="boolContrasenya" value="NO">
                    <div>
                        <input type="submit" id="guardarCambios" name="GuardarCambios" class="boton1" value="Guardar Cambios">
                        <span></span>
                        <input type="reset" class="boton1" value="Cancelar">
                    </div>
                    <br />

                </div>
            </form>
        <?php } ?>
    </div>
</section>