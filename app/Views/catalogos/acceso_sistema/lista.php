<div class="ui container">
    <div class="ui stackable grid">
        <div class="row">
            <div class="twelve wide column">
                <div class="ui grid">
                    <div class="row">
                        <div class="eight wide column">
                            <h1 class="ui header">Accesos sistema</h1>
                        </div>
                        <div class="eight wide right aligned column">
                            <form class="ui form" method="post" action="/acceso_sistema/nuevo">
                                <button class="ui primary button">Agregar</button>
                            </form>
                        </div>
                    </div>
                </div>

                <table id="tbl_accesos" class="ui very basic striped unstackable table">
                    <thead>
                        <tr>
                            <th>Rol</th>
                            <th>Acceso</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($accesos_sistema as $accesos_sistema_item): ?>
                        <tr>
                            <td>
                                <h4 class="ui header">
                                    <div class="content">
                                        <?= $accesos_sistema_item['nom_rol'] ?>
                                        <div class="sub header"><?=$accesos_sistema_item['id_rol']?></div>
                                    </div>
                                </h4>
                            </td>
                            <td>
                                <h4 class="ui header">
                                    <div class="content">
                                        <?= $accesos_sistema_item['nom_opcion_sistema'] ?>
                                        <div class="sub header"><?=$accesos_sistema_item['cod_opcion_sistema']?></div>
                                    </div>
                                </h4>
                            </td>
                            <td>
                                <?php
                                    $item_eliminar = 'Acceso: ' . $accesos_sistema_item['id_rol'] . ' ' . $accesos_sistema_item['cod_opcion_sistema'] ;
                                    $action = site_url("acceso_sistema/eliminar/") . $accesos_sistema_item['id_acceso_sistema'];
                                ?>
                                <a href="#" onclick="confirm_delete('<?=$item_eliminar?>','<?=$action?>')" ><span class="ui red text"><i class="icon times circle outline"></span></i></a>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="ui basic segment">
                <a class="ui basic button" href="<?= site_url('catalogos') ?>">Volver</a>
            </div>
        </div>

    </div>
</div>

<script type="text/javascript">
$(document).ready( function () {
    $('#tbl_accesos').DataTable( {
        language: {
            url: '<?=base_url()?>assets/js/es-MX.json',
        },
    });
});
</script>
