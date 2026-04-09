<div class="ui container">
    <div class="ui stackable grid">
        <div class="row">
            <div class="twelve wide column">
                <div class="ui grid">
                    <div class="row">
                        <div class="eight wide column">
                            <h1 class="ui header">Parametros sistema</h1>
                        </div>
                        <div class="eight wide right aligned column">
                            <form class="ui form" method="post" action="/parametro_sistema/nuevo">
                                <button class="ui primary button">Agregar</button>
                            </form>
                        </div>
                    </div>
                </div>

                <table class="ui very basic striped unstackable table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Valor</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($parametros_sistema as $parametros_sistema_item): ?>
                        <tr>
                            <td>
                                <h4 class="ui image header">
                                    <div class="content">
                                        <a href="<?=site_url('parametro_sistema/detalle/')?><?=$parametros_sistema_item['id_parametro_sistema']?>"><?= $parametros_sistema_item['nom_parametro_sistema'] ?></a>
                                    </div>
                                </h4>
                            </td>
                            <td>
                                <h4 class="ui image header">
                                    <div class="content">
                                        <?= $parametros_sistema_item['valor'] ?>
                                    </div>
                                </h4>
                            </td>
                            <td>
                                <?php
                                    $item_eliminar = 'Parametro: ' . $parametros_sistema_item['nom_parametro_sistema'] ;
                                    $action = site_url("parametro_sistema/eliminar/") . $parametros_sistema_item['id_parametro_sistema'];
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
