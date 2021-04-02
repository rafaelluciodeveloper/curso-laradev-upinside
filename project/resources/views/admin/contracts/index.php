<section class="dash_content_app">

    <header class="dash_content_app_header">
        <h2 class="icon-search">Filtro</h2>

        <div class="dash_content_app_header_actions">
            <nav class="dash_content_app_breadcrumb">
                <ul>
                    <li><a href="">Dashboard</a></li>
                    <li class="separator icon-angle-right icon-notext"></li>
                    <li><a href="">Contratos</a></li>
                    <li class="separator icon-angle-right icon-notext"></li>
                    <li><a href="" class="text-orange">Filtro</a></li>
                </ul>
            </nav>

            <a href="dashboard.php?app=contracts/create" class="btn btn-orange icon-file-text ml-1">Criar Contrato</a>
            <button class="btn btn-green icon-search icon-notext ml-1 search_open"></button>
        </div>
    </header>

    <?php include('filter.php'); ?>

    <div class="dash_content_app_box">
        <div class="dash_content_app_box_stage">
            <table id="dataTable" class="nowrap hover stripe" width="100" style="width: 100% !important;">
                <thead>
                <tr>
                    <th>Locador</th>
                    <th>Locatário</th>
                    <th>Negócio</th>
                    <th>Início</th>
                    <th>Vigência</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><a href="" class="text-orange">Robson V. Leite</a></td>
                    <td><a href="" class="text-orange">Gustavo Web</a></td>
                    <td>Locação</td>
                    <td><?= date('d/m/Y'); ?></td>
                    <td>12 meses</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>