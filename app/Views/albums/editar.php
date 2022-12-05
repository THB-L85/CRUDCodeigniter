<?=$header?>
    Formulario para editar
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ingresar datos de album</h5>
            <p class="card-text">
                <form method="post" action="<?=site_url('Albumes/actualizar')?>" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?=$albums['id']?>">
                    <div class="form-group">
                        <label for="name">Nombre:</label>
                        <input id="name" value="<?=$albums['name']?>" class="form-control" type="text" name="name">
                    </div>
                    <div class="form-group">
                        <label for="author">Autor:</label>
                        <input id="author" value="<?=$albums['author']?>" class="form-control" type="text" name="author">
                    </div>
                    <div class="form-group">
                        <label for="genre_id">ID Genero:</label>
                        <input id="genre_id" value="<?=$albums['genre_id']?>" class="form-control" type="text" name="genre_id">
                    </div>
                    <button class="btn btn-success" type="submit">Modificar</button>
                    <a href="<?=base_url('Albumes/listar')?>" class="btn btn-info">Regresar</a>
                </form>
            </p>
        </div>
    </div>
<?=$footer?>