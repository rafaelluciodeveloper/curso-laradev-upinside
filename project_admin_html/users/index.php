<section class="dash_content_app">

    <header class="dash_content_app_header">
        <h2 class="icon-search">Filtro</h2>

        <div class="dash_content_app_header_actions">
            <nav class="dash_content_app_breadcrumb">
                <ul>
                    <li><a href="">Dashboard</a></li>
                    <li class="separator icon-angle-right icon-notext"></li>
                    <li><a href="" class="text-orange">Clientes</a></li>
                </ul>
            </nav>

            <a href="dashboard.php?app=users/create" class="btn btn-orange icon-user ml-1">Criar Cliente</a>
            <button class="btn btn-green icon-search icon-notext ml-1 search_open"></button>
        </div>
    </header>

    <?php include('filter.php'); ?>

    <div class="dash_content_app_box">
        <div class="dash_content_app_box_stage">
            <table id="dataTable" class="nowrap stripe" width="100" style="width: 100% !important;">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nome Completo</th>
                    <th>CPF</th>
                    <th>E-mail</th>
                    <th>Nascimento</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td><a href="" class="text-orange">Gustavo Web</a></td>
                    <td>123.456.789-00</td>
                    <td><a href="" class="text-orange">gustavo@upinside.com.br</a></td>
                    <td>28/10/1992</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>