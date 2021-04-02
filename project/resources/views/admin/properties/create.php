<section class="dash_content_app">

    <header class="dash_content_app_header">
        <h2 class="icon-search">Cadastrar Novo Imóvel</h2>

        <div class="dash_content_app_header_actions">
            <nav class="dash_content_app_breadcrumb">
                <ul>
                    <li><a href="">Dashboard</a></li>
                    <li class="separator icon-angle-right icon-notext"></li>
                    <li><a href="">Imóveis</a></li>
                    <li class="separator icon-angle-right icon-notext"></li>
                    <li><a href="" class="text-orange">Cadastrar Imóvel</a></li>
                </ul>
            </nav>

            <button class="btn btn-green icon-search icon-notext ml-1 search_open"></button>
        </div>
    </header>

    <?php include('filter.php'); ?>

    <div class="dash_content_app_box">

        <div class="nav">
            <ul class="nav_tabs">
                <li class="nav_tabs_item">
                    <a href="#data" class="nav_tabs_item_link active">Dados Cadastrais</a>
                </li>
                <li class="nav_tabs_item">
                    <a href="#structure" class="nav_tabs_item_link">Estrutura</a>
                </li>
                <li class="nav_tabs_item">
                    <a href="#images" class="nav_tabs_item_link">Imagens</a>
                </li>
            </ul>

            <form action="" method="post" class="app_form" enctype="multipart/form-data">

                <div class="nav_tabs_content">
                    <div id="data">
                        <div class="label_gc">
                            <span class="legend">Finalidade:</span>
                            <label class="label">
                                <input type="checkbox" name="sale"><span>Venda</span>
                            </label>

                            <label class="label">
                                <input type="checkbox" name="rent"><span>Locação</span>
                            </label>
                        </div>

                        <div class="label_g2">
                            <label class="label">
                                <span class="legend">Categoria:</span>
                                <select name="category" class="select2">
                                    <option value="residential_property">Imóvel Residencial</option>
                                    <option value="commercial_industrial">Comercial/Industrial</option>
                                    <option value="terrain">Terreno</option>
                                </select>
                            </label>

                            <label class="label">
                                <span class="legend">Tipo:</span>
                                <select name="type" class="select2">
                                    <optgroup label="Imóvel Residencial">
                                        <option value="home">Casa</option>
                                        <option value="roof">Cobertura</option>
                                        <option value="apartment">Apartamento</option>
                                        <option value="studio">Studio</option>
                                        <option value="kitnet">Kitnet</option>
                                    </optgroup>
                                    <optgroup label="Comercial/Industrial">
                                        <option value="commercial_room">Sala Comercial</option>
                                        <option value="deposit_shed">Depósito/Galpão</option>
                                        <option value="commercial_point">Ponto Comercial</option>
                                    </optgroup>
                                    <optgroup label="Terreno">
                                        <option value="terrain">Terreno</option>
                                    </optgroup>
                                </select>
                            </label>
                        </div>

                        <label class="label">
                            <span class="legend">Proprietário:</span>
                            <select name="user" class="select2">
                                <option value="">Nome (documento)</option>
                            </select>
                        </label>

                        <div class="app_collapse">
                            <div class="app_collapse_header mt-2 collapse">
                                <h3>Precificação e Valores</h3>
                                <span class="icon-plus-circle icon-notext"></span>
                            </div>

                            <div class="app_collapse_content d-none">
                                <div class="label_g2">
                                    <label class="label">
                                        <span class="legend">Valor de Venda:</span>
                                        <input type="tel" name="sale_price" class="mask-money" value=""/>
                                    </label>

                                    <label class="label">
                                        <span class="legend">Valor de Locação:</span>
                                        <input type="tel" name="rent_price" class="mask-money" value=""/>
                                    </label>
                                </div>

                                <div class="label_g2">
                                    <label class="label">
                                        <span class="legend">IPTU:</span>
                                        <input type="tel" name="tribute" class="mask-money" value=""/>
                                    </label>

                                    <label class="label">
                                        <span class="legend">Condomínio:</span>
                                        <input type="tel" name="condominium" class="mask-money" value=""/>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="app_collapse">
                            <div class="app_collapse_header mt-2 collapse">
                                <h3>Características</h3>
                                <span class="icon-plus-circle icon-notext"></span>
                            </div>

                            <div class="app_collapse_content d-none">
                                <label class="label">
                                    <span class="legend">Descrição do Imóvel:</span>
                                    <textarea name="description" cols="30" rows="10" class="mce"></textarea>
                                </label>

                                <div class="label_g4">
                                    <label class="label">
                                        <span class="legend">Dormitórios:</span>
                                        <input type="tel" name="bedrooms" placeholder="Quantidade de Dormitórios" value=""/>
                                    </label>

                                    <label class="label">
                                        <span class="legend">Suítes:</span>
                                        <input type="tel" name="suites" placeholder="Quantidade de Suítes" value=""/>
                                    </label>

                                    <label class="label">
                                        <span class="legend">Banheiros:</span>
                                        <input type="tel" name="bathrooms" placeholder="Quantidade de Banheiros" value=""/>
                                    </label>

                                    <label class="label">
                                        <span class="legend">Salas:</span>
                                        <input type="tel" name="rooms" placeholder="Quantidade de Salas" value=""/>
                                    </label>
                                </div>

                                <div class="label_g4">
                                    <label class="label">
                                        <span class="legend">Garagem:</span>
                                        <input type="tel" name="garage" placeholder="Quantidade de Garagem" value=""/>
                                    </label>

                                    <label class="label">
                                        <span class="legend">Garagem Coberta:</span>
                                        <input type="tel" name="garage_covered" placeholder="Quantidade de Garagem Coberta" value=""/>
                                    </label>

                                    <label class="label">
                                        <span class="legend">Área Total:</span>
                                        <input type="tel" name="area_total" placeholder="Quantidade de M&sup2;" value=""/>
                                    </label>

                                    <label class="label">
                                        <span class="legend">Área Útil:</span>
                                        <input type="tel" name="area_util" placeholder="Quantidade de M&sup2;" value=""/>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="app_collapse">
                            <div class="app_collapse_header mt-2 collapse">
                                <h3>Endereço</h3>
                                <span class="icon-plus-circle icon-notext"></span>
                            </div>

                            <div class="app_collapse_content d-none">
                                <div class="label_g2">
                                    <label class="label">
                                        <span class="legend">CEP:</span>
                                        <input type="text" name="zipcode" class="zip_code_search" placeholder="Digite o CEP" value=""/>
                                    </label>
                                </div>

                                <label class="label">
                                    <span class="legend">Endereço:</span>
                                    <input type="text" name="street" class="street" placeholder="Endereço Completo" value=""/>
                                </label>

                                <div class="label_g2">
                                    <label class="label">
                                        <span class="legend">Número:</span>
                                        <input type="text" name="number" placeholder="Número do Endereço" value=""/>
                                    </label>

                                    <label class="label">
                                        <span class="legend">Complemento:</span>
                                        <input type="text" name="complement" placeholder="Completo (Opcional)" value=""/>
                                    </label>
                                </div>

                                <label class="label">
                                    <span class="legend">Bairro:</span>
                                    <input type="text" name="neighborhood" class="neighborhood" placeholder="Bairro" value=""/>
                                </label>

                                <div class="label_g2">
                                    <label class="label">
                                        <span class="legend">Estado:</span>
                                        <input type="text" name="state" class="state" placeholder="Estado" value=""/>
                                    </label>

                                    <label class="label">
                                        <span class="legend">Cidade:</span>
                                        <input type="text" name="city" class="city" placeholder="Cidade" value=""/>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="structure" class="d-none">
                        <h3 class="mb-2">Estrutura</h3>
                        <div class="label_g5">
                            <div>
                                <label class="label">
                                    <input type="checkbox" name="air_conditioning"><span>Ar Condicionado</span>
                                </label>
                            </div>
                            <div>
                                <label class="label">
                                    <input type="checkbox" name="bar"><span>Bar</span>
                                </label>
                            </div>
                            <div>
                                <label class="label">
                                    <input type="checkbox" name="library"><span>Biblioteca</span>
                                </label>
                            </div>

                            <div>
                                <label class="label">
                                    <input type="checkbox" name="barbecue_grill"><span>Churrasqueira</span>
                                </label>
                            </div>

                            <div>
                                <label class="label">
                                    <input type="checkbox" name="american_kitchen"><span>Cozinha Americana</span>
                                </label>
                            </div>

                            <div>
                                <label class="label">
                                    <input type="checkbox" name="fitted_kitchen"><span>Cozinha Planejada</span>
                                </label>
                            </div>
                            <div>
                                <label class="label">
                                    <input type="checkbox" name="pantry"><span>Despensa</span>
                                </label>
                            </div>

                            <div>
                                <label class="label">
                                    <input type="checkbox" name="edicule"><span>Edícula</span>
                                </label>
                            </div>

                            <div>
                                <label class="label">
                                    <input type="checkbox" name="office"><span>Escritório</span>
                                </label>
                            </div>
                            <div>
                                <label class="label">
                                    <input type="checkbox" name="bathtub"><span>Banheira</span>
                                </label>
                            </div>
                            <div>
                                <label class="label">
                                    <input type="checkbox" name="fireplace"><span>Lareira</span>
                                </label>
                            </div>
                            <div>
                                <label class="label">
                                    <input type="checkbox" name="lavatory"><span>Lavabo</span>
                                </label>
                            </div>
                            <div>
                                <label class="label">
                                    <input type="checkbox" name="furnished"><span>Mobiliado</span>
                                </label>
                            </div>
                            <div>
                                <label class="label">
                                    <input type="checkbox" name="pool"><span>Piscina</span>
                                </label>
                            </div>
                            <div>
                                <label class="label">
                                    <input type="checkbox" name="steam_room"><span>Sauna</span>
                                </label>
                            </div>
                            <div>
                                <label class="label">
                                    <input type="checkbox" name="view_of_the_sea"><span>Vista para o Mar</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div id="images" class="d-none">
                        <label class="label">
                            <span class="legend">Imagens</span>
                            <input type="file" name="files[]" multiple>
                        </label>

                        <div class="content_image"></div>
                    </div>
                </div>

                <div class="text-right mt-2">
                    <button class="btn btn-large btn-green icon-check-square-o">Criar Imóvel</button>
                </div>
            </form>
        </div>
    </div>
</section>

<script>
    $(function () {
        $('input[name="files[]"]').change(function (files) {

            $('.content_image').text('');

            $.each(files.target.files, function (key, value) {
                var reader = new FileReader();
                reader.onload = function (value) {
                    $('.content_image').append(
                        '<div class="property_image_item">' +
                        '<div class="embed radius" ' +
                        'style="background-image: url(' + value.target.result + '); background-size: cover; background-position: center center;">' +
                        '</div>' +
                        '</div>');
                };
                reader.readAsDataURL(value);
            });
        });
    });
</script>