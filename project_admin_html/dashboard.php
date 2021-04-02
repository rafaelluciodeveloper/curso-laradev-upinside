<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">

    <link rel="stylesheet" href="assets/css/reset.css"/>
    <link rel="stylesheet" href="assets/js/datatables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="assets/js/datatables/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="assets/js/select2/css/select2.min.css">
    <link rel="stylesheet" href="assets/css/boot.css"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="icon" type="image/png" href="assets/images/favicon.png"/>

    <title>UpAdmin - Site Control</title>
</head>
<body>

<div class="ajax_load">
    <div class="ajax_load_box">
        <div class="ajax_load_box_circle"></div>
        <p class="ajax_load_box_title">Aguarde, carregando...</p>
    </div>
</div>

<div class="ajax_response"></div>

<div class="dash">
    <aside class="dash_sidebar">
        <article class="dash_sidebar_user">
            <img class="dash_sidebar_user_thumb" src="assets/images/avatar.jpg" alt="" title=""/>

            <h1 class="dash_sidebar_user_name">
                <a href="">Gustavo Web</a>
            </h1>
        </article>

        <ul class="dash_sidebar_nav">
            <li class="dash_sidebar_nav_item active">
                <a class="icon-tachometer" href="dashboard.php?app=dashboard/index">Dashboard</a>
            </li>
            <li class="dash_sidebar_nav_item"><a class="icon-users" href="dashboard.php?app=users/index">Clientes</a>
                <ul class="dash_sidebar_nav_submenu">
                    <li class=""><a href="dashboard.php?app=users/index">Ver Todos</a></li>
                    <li class=""><a href="dashboard.php?app=companies/index">Empresas</a></li>
                    <li class=""><a href="dashboard.php?app=users/team">Time</a></li>
                    <li class=""><a href="dashboard.php?app=users/create">Criar Novo</a></li>
                </ul>
            </li>
            <li class="dash_sidebar_nav_item"><a class="icon-home" href="dashboard.php?app=properties/index">Imóveis</a>
                <ul class="dash_sidebar_nav_submenu">
                    <li class=""><a href="dashboard.php?app=properties/index">Ver Todos</a></li>
                    <li class=""><a href="dashboard.php?app=properties/create">Criar Novo</a></li>
                </ul>
            </li>
            <li class="dash_sidebar_nav_item"><a class="icon-file-text" href="dashboard.php?app=contracts/index">Contratos</a>
                <ul class="dash_sidebar_nav_submenu">
                    <li class=""><a href="dashboard.php?app=contracts/index">Ver Todos</a></li>
                    <li class=""><a href="dashboard.php?app=contracts/create">Criar Novo</a></li>
                </ul>
            </li>
            <li class="dash_sidebar_nav_item"><a class="icon-reply" href="">Ver Site</a></li>
            <li class="dash_sidebar_nav_item"><a class="icon-sign-out on_mobile" href="" target="_blank">Sair</a></li>
        </ul>

    </aside>

    <section class="dash_content">

        <div class="dash_userbar">
            <div class="dash_userbar_box">
                <div class="dash_userbar_box_content">
                    <span class="icon-align-justify icon-notext mobile_menu transition btn btn-green"></span>
                    <h1 class="transition">
                        <i class="icon-imob text-orange"></i><a href="">Up<b>Admin</b></a>
                    </h1>
                    <div class="dash_userbar_box_bar no_mobile">
                        <a class="text-red icon-sign-out" href="">Sair</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="dash_content_box">
            <?php
            $getApp = filter_input(INPUT_GET, "app", FILTER_SANITIZE_STRIPPED);
            if (!$getApp) {
                require __DIR__ . "/dashboard/index.php";
            } elseif (file_exists(__DIR__ . "/{$getApp}.php")) {
                require __DIR__ . "/{$getApp}.php";
            } else {
                echo "
                    <div class='not_found'>
                        <p class='not_found_icon icon-link-broken icon-notext'></p>
                        <h4>Oops, não foi encontrado!</h4>
                        <p>Você tentou acessar uma APP ou Widget que não existe ou não está disponível. Favor use o menu para navegar no sistema</p>
                    </div>
                ";
            }
            ?>
        </div>
    </section>
</div>


<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/tinymce/tinymce.min.js"></script>
<script src="assets/js/datatables/js/jquery.dataTables.min.js"></script>
<script src="assets/js/datatables/js/dataTables.responsive.min.js"></script>
<script src="assets/js/select2/js/select2.min.js"></script>
<script src="assets/js/select2/js/i18n/pt-BR.js"></script>
<script src="assets/js/jquery.form.js"></script>
<script src="assets/js/jquery.mask.js"></script>
<script src="assets/js/scripts.js"></script>

</body>
</html>