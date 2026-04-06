<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <link rel="icon" href="<?=base_url()?>favicon.png"/>

        <!-- semantic-ui -->
        <script src="<?=base_url()?>assets/js/jquery.min.js"></script>
        <link href="<?=base_url()?>assets/css/semantic.min.css" rel="stylesheet"/>
        <script src="<?=base_url()?>assets/js/semantic.min.js"></script>

        <style type="text/css">
        body {
            background-color: #DADADA;
        }
        body > .grid {
            height: 80%;
        }
        .image {
            margin-top: -100px;
        }
        .column {
            max-width: 450px;
        }
        </style>
    </head>
    <body>
        <div class="ui middle aligned center aligned grid">
            <div class="column">
                <h2 class="ui teal image header">
                    <img src="/assets/img/logotipo.png" class="image">
                    <div class="content">
                        Inicie sesión
                    </div>
                </h2>
                <?php if ($error): ?>
                <div class="ui negative message">
                    <p><?php echo $error ?></p>
                </div>
                <?php endif ?>
                <form class="ui large form" method="post" action="<?= site_url('post_login') ?>">
                    <div class="ui stacked segment">
                        <div class="field">
                            <div class="ui left icon input">
                                <i class="user icon"></i>
                                <input type="text" name="nom_login" placeholder="Usuario">
                            </div>
                        </div>
                        <div class="field">
                            <div class="ui left icon input">
                                <i class="lock icon"></i>
                                <input type="password" name="password" placeholder="Contraseña">
                            </div>
                        </div>
                        <button class="ui fluid large teal button" type="submit">Iniciar sesión</button>
                    </div>

                    <div class="ui error message"></div>

                </form>

                <div class="ui message">
                    (c) 2026
                </div>
            </div>
        </div>
    </body>
</html>
