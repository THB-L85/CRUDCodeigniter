<?=$header?>
<br/>
<a href="<?=base_url('Albumes/agregar')?>" class="btn btn-success" type="button">Agregar album</a>
<a href="../Home" class="btn btn-info">Regresar</a>
<br/>
<br/>
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Album</th>
                    <th>Autor</th>
                    <th>ID Género</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($albums as $album): ?>
                    <tr>
                        <td><?=$album['id']; ?></td>
                        <td><?=$album['name']; ?></td>
                        <td><?=$album['author']; ?></td>
                        <td><?=$album['genre_id']; ?></td>
                        <td>
                            <a href="<?=base_url('Albumes/editar/'.$album['id']);?>" class="btn btn-info" type="button">Editar</a>
                            <a href="<?=base_url('Albumes/borrar/'.$album['id']);?>" class="btn btn-danger" type="button">Borrar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
<?=$footer?>
