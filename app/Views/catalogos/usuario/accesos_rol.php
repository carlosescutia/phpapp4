<div class="ui secondary segment">
    <h4 class="ui header">Accesos del rol</h4>
    <div class="ui bulleted list">
        <?php foreach ($accesos_sistema_rol as $accesos_sistema_rol_item): ?>
        <div class="item">
            <div class="content">
                <div class="header"><?= $accesos_sistema_rol_item['nom_opcion_sistema'] ?></div>
                <div class="description"><?=$accesos_sistema_rol_item['cod_opcion_sistema']?></div>
            </div>
        </div>
        <?php endforeach ?>
    </div>
</div>
