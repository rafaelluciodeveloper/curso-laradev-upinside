<section class="dash_content_app">

    <header class="dash_content_app_header">
        <h2 class="icon-search">Filtro</h2>

        <div class="dash_content_app_header_actions">
            <nav class="dash_content_app_breadcrumb">
                <ul>
                    <li><a href="">Dashboard</a></li>
                    <li class="separator icon-angle-right icon-notext"></li>
                    <li><a href="">Imóveis</a></li>
                    <li class="separator icon-angle-right icon-notext"></li>
                    <li><a href="" class="text-orange">Filtro</a></li>
                </ul>
            </nav>

            <a href="dashboard.php?app=properties/create" class="btn btn-orange icon-home ml-1">Criar Imóvel</a>
            <button class="btn btn-green icon-search icon-notext ml-1 search_open"></button>
        </div>
    </header>

    <?php include('filter.php'); ?>

    <div class="dash_content_app_box">
        <div class="dash_content_app_box_stage">
            <div class="realty_list">
                    <div class="realty_list_item mt-1 mb-1">
                        <div class="realty_list_item_actions_stats">
                            <img src="assets/images/realty.jpeg" alt="">
                            <ul>
                                <li>Venda: R$ 1.000,00</li>
                                <li>Aluguel: R$ 1.000,00</li>
                            </ul>
                        </div>

                        <div class="realty_list_item_content">
                            <h4>#1 Casa Residencial - Campeche</h4>

                            <div class="realty_list_item_card">
                                <div class="realty_list_item_card_image">
                                    <span class="icon-realty-location"></span>
                                </div>
                                <div class="realty_list_item_card_content">
                                    <span class="realty_list_item_description_title">Bairro:</span>
                                    <span class="realty_list_item_description_content">Campeche</span>
                                </div>
                            </div>

                            <div class="realty_list_item_card">
                                <div class="realty_list_item_card_image">
                                    <span class="icon-realty-util-area"></span>
                                </div>
                                <div class="realty_list_item_card_content">
                                    <span class="realty_list_item_description_title">Área Útil:</span>
                                    <span class="realty_list_item_description_content">300 m&sup2;</span>
                                </div>
                            </div>

                            <div class="realty_list_item_card">
                                <div class="realty_list_item_card_image">
                                    <span class="icon-realty-bed"></span>
                                </div>
                                <div class="realty_list_item_card_content">
                                    <span class="realty_list_item_description_title">Domitórios:</span>
                                    <span class="realty_list_item_description_content">2 Quartos<br><span>Sendo 1 suítes</span></span>
                                </div>
                            </div>

                            <div class="realty_list_item_card">
                                <div class="realty_list_item_card_image">
                                    <span class="icon-realty-garage"></span>
                                </div>
                                <div class="realty_list_item_card_content">
                                    <span class="realty_list_item_description_title">Garagem:</span>
                                    <span class="realty_list_item_description_content">2 Vagas<br><span>Sendo 1 cobertas</span></span>
                                </div>
                            </div>

                        </div>

                        <div class="realty_list_item_actions">
                            <ul>
                                <li class="icon-eye">1234 Visualizações</li>
                            </ul>
                            <div>
                                <a href="" class="btn btn-blue icon-eye">Visualizar Imóvel</a>
                                <a href="" class="btn btn-green icon-pencil-square-o">Editar Imóvel</a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>