<aside class="col-md-4 col-xs-12">
        <div class="property-query-area clearfix">
          <div class="col-md-12">
            <h3 class="text-uppercase bottom20 top15">Pesquisa</h3>
          </div>
          <form class="callus">
            <div class="single-query form-group col-sm-12">
              <input type="text" id="keyImovel" class="keyword-input" placeholder="Palavras-Chave">
            </div>
            <div class="single-query form-group col-sm-12">
              <div class="intro">
                <select id="bairroImovel">
                  <option value="-1" selected="selected">Localização</option>
                  <?php
                    $imovel->showBairros(false);
                  ?>
                </select>
              </div>
            </div>
            <div class="single-query form-group col-sm-12">
              <div class="intro">
                <select id="tipoImovel">
                  <option value="-1" selected="selected">Tipo</option>
                  <?php
                    $imovel->showTipos(false);
                  ?>
                </select>
              </div>
            </div>
            <div class="search-2 col-sm-12">
              <div class="row">
                <div class="col-sm-6">
                  <div class="single-query form-group">
                    <div class="intro">
                      <select id="quartosMin">
                        <option class="active" value="-1">Quartos (Min)</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5+</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="single-query form-group">
                    <div class="intro">
                      <select id="quartosMax">
                        <option class="active" value="-1">Quartos (Max)</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5+</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="row">
                <div class="col-sm-6">
                  <div class="single-query form-group">
                    <input type="text" id="areaMin" class="keyword-input" placeholder="Min Área">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="single-query form-group">
                    <input type="text" id="areaMax" class="keyword-input" placeholder="Max Área">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 bottom10">
              <div class="single-query-slider">
                <label><strong>Preço:</strong></label>
                <div class="price text-right">
                  <span>R$</span>
                  <div class="leftLabel"></div>
                  <span>até R$</span>
                  <div class="rightLabel"></div>
                </div>
                <div data-range_min="0" data-range_max="2000000" data-cur_min="0" data-cur_max="2000000" class="nstSlider">
                  <div class="bar"></div>
                  <div class="leftGrip"></div>
                  <div class="rightGrip"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 bottom10" style="margin-top: 10px">
              <div class="single-query-slider">
              <label><strong>Ordenar por:</strong></label>
                <div class="intro">
                  <select id="order-price">
                    <option class="active" value="1">Maior Preço</option>
                    <option value="2">Menor Preço</option>
                    <option value="3">Maior Área</option>
                    <option value="4">Menor Área</option>
                  </select>
                </div>
              </div>            
            </div>
            <div class="col-sm-12 form-group">
              <button type="button" class="btn-blue border_radius" onclick="searchAjax('page')">Pesquisar</button>
            </div>
          </form>
          <div class="col-sm-12">
            <div class="group-button-search">
              <a data-toggle="collapse" href=".search-propertie-filters" class="more-filter bottom15">
                <i class="fa fa-plus text-1" aria-hidden="true"></i><i class="fa fa-minus text-2 hide" aria-hidden="true"></i>
                <div class="text-1">Mais opções de pesquisa</div>
                <div class="text-2 hide">Menos opções de pesquisa</div>
              </a>
            </div>
          </div>
          <div class="search-propertie-filters collapse">
              <div class="col-sm-12">
                  <div class="search-propertie-filters">
                    <div class="container-2">
                      <div id="imovel-caracter" class="row">
                              <?php
                                $imovel->showCaracter();
                              ?>        
                      </div>
                    </div>
                  </div>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h3 class="bottom40 margin40">Imóveis Recentes</h3>
          </div>
        </div>

        <?php
              Imovel::listImoveisRecents();

        ?>
      </aside>