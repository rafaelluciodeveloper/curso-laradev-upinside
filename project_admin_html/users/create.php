<section class="dash_content_app">

    <header class="dash_content_app_header">
        <h2 class="icon-user-plus">Novo Cliente</h2>

        <div class="dash_content_app_header_actions">
            <nav class="dash_content_app_breadcrumb">
                <ul>
                    <li><a href="">Dashboard</a></li>
                    <li class="separator icon-angle-right icon-notext"></li>
                    <li><a href="">Clientes</a></li>
                    <li class="separator icon-angle-right icon-notext"></li>
                    <li><a href="" class="text-orange">Novo Cliente</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="dash_content_app_box">
        <div class="nav">
            <ul class="nav_tabs">
                <li class="nav_tabs_item">
                    <a href="#data" class="nav_tabs_item_link active">Dados Cadastrais</a>
                </li>
                <li class="nav_tabs_item">
                    <a href="#complementary" class="nav_tabs_item_link">Dados Complementares</a>
                </li>
                <li class="nav_tabs_item">
                    <a href="#realties" class="nav_tabs_item_link">Imóveis</a>
                </li>
                <li class="nav_tabs_item">
                    <a href="#management" class="nav_tabs_item_link">Administrativo</a>
                </li>
            </ul>

            <form class="app_form" action="" method="post" enctype="multipart/form-data">
                <div class="nav_tabs_content">
                    <div id="data">
                        <div class="label_gc">
                            <span class="legend">Perfil:</span>
                            <label class="label">
                                <input type="checkbox" name="lessor"><span>Locatário</span>
                            </label>

                            <label class="label">
                                <input type="checkbox" name="lessee"><span>Locador</span>
                            </label>
                        </div>

                        <label class="label">
                            <span class="legend">*Nome:</span>
                            <input type="text" name="name" placeholder="Nome Completo" value=""/>
                        </label>

                        <div class="label_g2">
                            <label class="label">
                                <span class="legend">*Genero:</span>
                                <select name="genre">
                                    <option value="male">Masculino</option>
                                    <option value="female">Feminino</option>
                                    <option value="other">Outros</option>
                                </select>
                            </label>

                            <label class="label">
                                <span class="legend">*CPF:</span>
                                <input type="tel" class="mask-doc" name="document" placeholder="CPF do Cliente"
                                       value=""/>
                            </label>
                        </div>

                        <div class="label_g2">
                            <label class="label">
                                <span class="legend">*RG:</span>
                                <input type="text" name="document_secondary" placeholder="RG do Cliente"
                                       value=""/>
                            </label>

                            <label class="label">
                                <span class="legend">Órgão Expedidor:</span>
                                <input type="text" name="document_secondary_complement" placeholder="Expedição"
                                       value=""/>
                            </label>
                        </div>

                        <div class="label_g2">
                            <label class="label">
                                <span class="legend">*Data de Nascimento:</span>
                                <input type="tel" name="date_of_birth" class="mask-date"
                                       placeholder="Data de Nascimento" value=""/>
                            </label>

                            <label class="label">
                                <span class="legend">*Naturalidade:</span>
                                <input type="text" name="place_of_birth" placeholder="Cidade de Nascimento"
                                       value=""/>
                            </label>
                        </div>

                        <div class="label_g2">
                            <label class="label">
                                <span class="legend">*Estado Civil:</span>
                                <select name="civil_status">
                                    <optgroup label="Cônjuge Obrigatório">
                                        <option value="married">Casado</option>
                                        <option value="separated">Separado</option>
                                    </optgroup>
                                    <optgroup label="Cônjuge não Obrigatório">
                                        <option value="single">Solteiro</option>
                                        <option value="divorced">Divorciado</option>
                                        <option value="widower">Viúvo</option>
                                    </optgroup>
                                </select>
                            </label>

                            <label class="label">
                                <span class="legend">Foto</span>
                                <input type="file" name="cover">
                            </label>
                        </div>

                        <div class="app_collapse mt-2">
                            <div class="app_collapse_header collapse">
                                <h3>Renda</h3>
                                <span class="icon-plus-circle icon-notext"></span>
                            </div>

                            <div class="app_collapse_content d-none">
                                <div class="label_g2">
                                    <label class="label">
                                        <span class="legend">*Profissão:</span>
                                        <input type="text" name="occupation" placeholder="Profissão do Cliente"
                                               value=""/>
                                    </label>

                                    <label class="label">
                                        <span class="legend">*Renda:</span>
                                        <input type="tel" name="income" class="mask-money"
                                               placeholder="Valores em Reais" value=""/>
                                    </label>
                                </div>

                                <label class="label">
                                    <span class="legend">*Empresa:</span>
                                    <input type="text" name="company_work" placeholder="Contratante"
                                           value=""/>
                                </label>
                            </div>
                        </div>

                        <div class="app_collapse mt-2">
                            <div class="app_collapse_header collapse">
                                <h3>Endereço</h3>
                                <span class="icon-plus-circle icon-notext"></span>
                            </div>

                            <div class="app_collapse_content d-none">
                                <div class="label_g2">
                                    <label class="label">
                                        <span class="legend">*CEP:</span>
                                        <input type="tel" name="zipcode" class="mask-zipcode zip_code_search"
                                               placeholder="Digite o CEP" value=""/>
                                    </label>
                                </div>

                                <label class="label">
                                    <span class="legend">*Endereço:</span>
                                    <input type="text" name="street" class="street"
                                           placeholder="Endereço Completo" value=""/>
                                </label>

                                <div class="label_g2">
                                    <label class="label">
                                        <span class="legend">*Número:</span>
                                        <input type="text" name="number" placeholder="Número do Endereço"
                                               value=""/>
                                    </label>

                                    <label class="label">
                                        <span class="legend">Complemento:</span>
                                        <input type="text" name="complement" placeholder="Completo (Opcional)"
                                               value=""/>
                                    </label>
                                </div>

                                <label class="label">
                                    <span class="legend">*Bairro:</span>
                                    <input type="text" name="neighborhood" class="neighborhood"
                                           placeholder="Bairro" value=""/>
                                </label>

                                <div class="label_g2">
                                    <label class="label">
                                        <span class="legend">*Estado:</span>
                                        <input type="text" name="state" class="state" placeholder="Estado"
                                               value=""/>
                                    </label>

                                    <label class="label">
                                        <span class="legend">*Cidade:</span>
                                        <input type="text" name="city" class="city" placeholder="Cidade"
                                               value=""/>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="app_collapse mt-2">
                            <div class="app_collapse_header collapse">
                                <h3>Contato</h3>
                                <span class="icon-plus-circle icon-notext"></span>
                            </div>

                            <div class="app_collapse_content d-none">
                                <div class="label_g2">
                                    <label class="label">
                                        <span class="legend">Residencial:</span>
                                        <input type="tel" name="telephone" class="mask-phone"
                                               placeholder="Número do Telefonce com DDD" value=""/>
                                    </label>

                                    <label class="label">
                                        <span class="legend">*Celular:</span>
                                        <input type="tel" name="cell" class="mask-cell"
                                               placeholder="Número do Telefonce com DDD" value=""/>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="app_collapse mt-2">
                            <div class="app_collapse_header collapse">
                                <h3>Acesso</h3>
                                <span class="icon-plus-circle icon-notext"></span>
                            </div>

                            <div class="app_collapse_content d-none">
                                <div class="label_g2">
                                    <label class="label">
                                        <span class="legend">*E-mail:</span>
                                        <input type="email" name="email" placeholder="Melhor e-mail"
                                               value=""/>
                                    </label>

                                    <label class="label">
                                        <span class="legend">Senha:</span>
                                        <input type="password" name="password" placeholder="Senha de acesso"
                                               value=""/>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="complementary" class="d-none">
                        <div class="app_collapse">
                            <div class="app_collapse_header collapse">
                                <h3>Cônjuge</h3>
                                <span class="icon-plus-circle icon-notext"></span>
                            </div>

                            <div class="app_collapse_content d-none content_spouse">

                                <label class="label">
                                    <span class="legend">Tipo de Comunhão:</span>
                                    <select name="type_of_communion" class="select2">
                                        <option value="Comunhão Universal de Ben">Comunhão Universal de Bens</option>
                                        <option value="Comunhão Parcial de Bens">Comunhão Parcial de Bens</option>
                                        <option value="Separação Total de Bens">Separação Total de Bens</option>
                                        <option value="Participação Final de Aquestos">Participação Final de Aquestos
                                        </option>
                                    </select>
                                </label>

                                <label class="label">
                                    <span class="legend">Nome:</span>
                                    <input type="text" name="spouse_name" placeholder="Nome do Cônjuge"
                                           value=""/>
                                </label>

                                <div class="label_g2">
                                    <label class="label">
                                        <span class="legend">Genero:</span>
                                        <select name="spouse_genre">
                                            <option value="male">Masculino</option>
                                            <option value="female">Feminino</option>
                                            <option value="other">Outros</option>
                                        </select>
                                    </label>

                                    <label class="label">
                                        <span class="legend">CPF:</span>
                                        <input type="text" class="mask-doc" name="spouse_document"
                                               placeholder="CPF do Cliente" value=""/>
                                    </label>
                                </div>

                                <div class="label_g2">
                                    <label class="label">
                                        <span class="legend">RG:</span>
                                        <input type="text" name="spouse_document_secondary"
                                               placeholder="RG do Cliente" value=""/>
                                    </label>

                                    <label class="label">
                                        <span class="legend">Órgão Expedidor:</span>
                                        <input type="text" name="spouse_document_secondary_complement"
                                               placeholder="Expedição" value=""/>
                                    </label>
                                </div>

                                <div class="label_g2">
                                    <label class="label">
                                        <span class="legend">Data de Nascimento:</span>
                                        <input type="tel" class="mask-date" name="spouse_date_of_birth"
                                               placeholder="Data de Nascimento" value=""/>
                                    </label>

                                    <label class="label">
                                        <span class="legend">Naturalidade:</span>
                                        <input type="text" name="spouse_place_of_birth"
                                               placeholder="Cidade de Nascimento" value=""/>
                                    </label>
                                </div>

                                <div class="label_g2">
                                    <label class="label">
                                        <span class="legend">Profissão:</span>
                                        <input type="text" name="spouse_occupation"
                                               placeholder="Profissão do Cliente" value=""/>
                                    </label>

                                    <label class="label">
                                        <span class="legend">Renda:</span>
                                        <input type="text" class="mask-money" name="spouse_income"
                                               placeholder="Valores em Reais" value=""/>
                                    </label>
                                </div>

                                <label class="label">
                                    <span class="legend">Empresa:</span>
                                    <input type="text" name="spouse_company_work" placeholder="Contratante"
                                           value=""/>
                                </label>
                            </div>
                        </div>

                        <div class="app_collapse mt-2">
                            <div class="app_collapse_header collapse">
                                <h3>Empresa</h3>
                                <span class="icon-minus-circle icon-notext"></span>
                            </div>

                            <div class="app_collapse_content">

                                <div class="companies_list">
                                    <div class="no-content mb-2">Não foram encontrados registros!</div>

                                    <div class="companies_list_item mb-2">
                                        <p><b>Razão Social:</b> UpInside Treinamentos LTDA</p>
                                        <p><b>Nome Fantasia:</b> UpInside Treinamentos</p>
                                        <p><b>CNPJ:</b> 12.3456.789/0001-12 - <b>Inscrição Estadual:</b>1231423421</p>
                                        <p><b>Endereço:</b> Rodovia Dr. Antônio Luiz de Moura Gonzaga, 3339 Bloco A Sala
                                            208</p>
                                        <p><b>CEP:</b> 88048-301 <b>Bairro:</b> Campeche <b>Cidade/Estado:</b>
                                            Florianópolis/SC</p>
                                    </div>
                                </div>

                                <p class="text-right">
                                    <a href="javascript:void(0)" class="btn btn-green btn-disabled icon-building-o">Cadastrar
                                        Nova Empresa</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div id="realties" class="d-none">
                        <div class="app_collapse">
                            <div class="app_collapse_header collapse">
                                <h3>Locador</h3>
                                <span class="icon-minus-circle icon-notext"></span>
                            </div>

                            <div class="app_collapse_content">
                                <div id="realties">
                                    <div class="realty_list">
                                        <div class="realty_list_item mb-1">
                                            <div class="realty_list_item_actions_stats">
                                                <img src="assets/images/realty.jpeg" alt="">
                                                <ul>
                                                    <li>Venda: R$ 450.000,00</li>
                                                    <li>Aluguel: R$ 2.000,00</li>
                                                </ul>
                                            </div>

                                            <div class="realty_list_item_content">
                                                <h4>Casa Residencial - Campeche</h4>

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
                                                        <span class="realty_list_item_description_content">150m&sup2;</span>
                                                    </div>
                                                </div>

                                                <div class="realty_list_item_card">
                                                    <div class="realty_list_item_card_image">
                                                        <span class="icon-realty-bed"></span>
                                                    </div>
                                                    <div class="realty_list_item_card_content">
                                                        <span class="realty_list_item_description_title">Domitórios:</span>
                                                        <span class="realty_list_item_description_content">4 Quartos<br><span>Sendo 2 suítes</span></span>
                                                    </div>
                                                </div>

                                                <div class="realty_list_item_card">
                                                    <div class="realty_list_item_card_image">
                                                        <span class="icon-realty-garage"></span>
                                                    </div>
                                                    <div class="realty_list_item_card_content">
                                                        <span class="realty_list_item_description_title">Garagem:</span>
                                                        <span class="realty_list_item_description_content">4 Vagas<br><span>Sendo 2 cobertas</span></span>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="realty_list_item_actions">
                                                <ul>
                                                    <li class="icon-eye">1234 Visualizações</li>
                                                </ul>
                                                <div>
                                                    <a href="" class="btn btn-blue icon-eye">Visualizar Imóvel</a>
                                                    <a href="" class="btn btn-green icon-pencil-square-o">Editar
                                                        Imóvel</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="no-content">Não foram encontrados registros!</div>
                                </div>
                            </div>
                        </div>

                        <div class="app_collapse mt-3">
                            <div class="app_collapse_header collapse">
                                <h3>Locatário</h3>
                                <span class="icon-minus-circle icon-notext"></span>
                            </div>

                            <div class="app_collapse_content">
                                <div id="realties">
                                    <div class="no-content">Não foram encontrados registros!</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="management" class="d-none">
                        <div class="label_gc">
                            <span class="legend">Conceder:</span>
                            <label class="label">
                                <input type="checkbox" name="admin"><span>Administrativo</span>
                            </label>

                            <label class="label">
                                <input type="checkbox" name="client"><span>Cliente</span>
                            </label>
                        </div>
                    </div>
                </div>

                <div class="text-right mt-2">
                    <button class="btn btn-large btn-green icon-check-square-o" type="submit">Salvar Alterações
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>