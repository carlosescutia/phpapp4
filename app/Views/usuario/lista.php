<div class="ui container">
    <div class="ui mini vertical segment">
        <h1 class="ui header">Usuarios</h1>
        <table class="ui very basic table">
            <thead>
                <tr>
                    <th>Items:</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuarios_item): ?>
                <tr>
                    <td>
                        <h4 class="ui image header">
                            <i class="circular user icon"></i>
                            <div class="content">
                                <a href="<?=base_url()?>usuario/detalle/<?=$usuarios_item['id_usuario']?>"><?= $usuarios_item['nom_usuario'] ?></a>
                                <div class="sub header"><?=$usuarios_item['id_rol']?></div>
                            </div>
                        </h4>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
