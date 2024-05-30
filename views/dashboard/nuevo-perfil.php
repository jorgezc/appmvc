<?php include_once __DIR__ . '/header-dashboard.php'; ?>


<div class="contenedor-sm">
    
    <div class="contenedor-nueva-ocurrencia">
        <a class="agregar-ocurrencia" href="/perfil">
            Volver
        </a>
        
    </div>
    <?php include_once __DIR__ .'/../templates/alertas.php'; ?>



    <form class="formulario" method="POST" action="/nuevo-perfil" enctype="multipart/form-data">
        <fieldset>
            <legend>Información Personal</legend>
            <div class="campo">
                <label for="nombre">Nombre</label>
                <input 
                    type="text"
                    id="nombre"
                    name="nombre"
                    placeholder="Nombre"
                    value="<?php echo $nombre->nombre ?? ''; ?>"
                >
            </div>

            <div class="campo">
                <label for="apellido">Apellido</label>
                <input 
                    type="text"
                    id="apellido"
                    name="apellido"
                    placeholder="Apellido"
                    value="<?php echo $apellido->apellido ?? ''; ?>"
                >
            </div>
        </fieldset>


        <input class="boton" type="submit" value="Registrar" >

    </form>
</div>



<?php include_once __DIR__ . '/footer-dashboard.php'; ?>