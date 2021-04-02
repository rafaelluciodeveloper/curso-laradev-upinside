<section class="dash_content_app">

    <header class="dash_content_app_header">
        <h2 class="icon-search">Filtro</h2>

        <div class="dash_content_app_header_actions">
            <nav class="dash_content_app_breadcrumb">
                <ul>
                    <li><a href="">Dashboard</a></li>
                    <li class="separator icon-angle-right icon-notext"></li>
                    <li><a href="">Clientes</a></li>
                    <li class="separator icon-angle-right icon-notext"></li>
                    <li><a href="">Empresas</a></li>
                    <li class="separator icon-angle-right icon-notext"></li>
                    <li><a href="" class="text-orange">Filtro</a></li>
                </ul>
            </nav>

            <a href="dashboard.php?app=companies/create" class="btn btn-orange icon-building-o ml-1">Criar Empresa</a>
            <button class="btn btn-green icon-search icon-notext ml-1 search_open"></button>
        </div>
    </header>

    <?php include('filter.php'); ?>

    <div class="dash_content_app_box">
        <div class="dash_content_app_box_stage">
            <table id="dataTable" class="nowrap hover stripe" width="100" style="width: 100% !important;">
                <thead>
                <tr>
                    <th>Razão Social</th>
                    <th>Nome Fantasia</th>
                    <th>CNPJ</th>
                    <th>IE</th>
                    <th>Responsável</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><a href="" class="text-orange">UpInside Treinamentos LTDA</a></td>
                    <td>UpInside Treinamentos</td>
                    <td>12.345.678/0001-00</td>
                    <td>123123</td>
                    <td><a href="" class="text-orange">Robson V. Leite</a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>