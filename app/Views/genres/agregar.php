<?=$header?>
    <!-- Formulario para agregar género -->
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ingresar datos de género</h5>
            <p class="card-text">
                <form method="post" action="<?=site_url('Genres/guardar')?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Nombre:</label>
                        <input id="name" class="form-control" type="text" name="name">
                    </div>
                    <button class="btn btn-success" type="submit">Agregar</button>
                    <a href="<?=base_url('Genres/listar')?>" class="btn btn-info">Regresar</a>
                </form>
            </p>
        </div>
    </div>
<?=$footer?>