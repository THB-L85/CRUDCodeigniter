<?=$header?>
<br/>
<a href="<?=base_url('Genres/agregar')?>" class="btn btn-success" type="button">Agregar género</a>
<a href="../Home" class="btn btn-info">Regresar</a>
<br/>
<br/>
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>ID</th>
                    <th>Genre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($genres as $genre): ?>
                    <tr>
                        <td><?=$genre['id']; ?></td>
                        <td><?=$genre['name']; ?></td>
                        <td>
                            <a href="<?=base_url('Genres/editar/'.$genre['id']);?>" class="btn btn-info" type="button">Editar</a> 
                            <a href="<?=base_url('Genres/borrar/'.$genre['id']);?>" class="btn btn-danger" type="button">Borrar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
<?=$footer?>