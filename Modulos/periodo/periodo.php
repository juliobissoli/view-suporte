<html>
<title>Suporte 1</title>
<link rel="shortcut icon" HREF="../../imagens/logo_title.png"/>
<header>
  <meta charset="utf-8">
  <?php include("../../base_header.php") ?>
  <link href="../../css/conta.css", rel="stylesheet">
  <!-- <script type="text/javascript" src="/js/base.js"></script> -->
  <script type="text/javascript" src="/js/conta.js"></script>



</header>

<?php include("../../base.php"); ?>
        <div class="conta_area_eventos">



          <div class="titulo_add">
              Periodos
          </div>
          <!-- exibir confirmação da eicao pu adicao de conta -->
          <div class="resultado_validacao">
            <div class="caixa_mensagem_positiva">
              <div class="icone_mensagem"><i class="far fa-check-circle"></i></div>
              <div class="texto_mensagem">
                    Deu Bom....!
              </div>
            </div>
          </div>

          <div class="duas-caixa">
            <div class="caixa-direita busca-contas">
                <div class="dropdown busca">
                  <div class="titulo_input">
                    Buscar:
                  </div>
                <div class="janela busca_janela" >
                    <input type="text" placeholder=' Busque por "periodo"' name="" value="">
                    <div class="busca_janela_expandido expandido">
                      <a>1</a>
                      <a>2</a>
                    </div>
                </div>
                <div class="btn_icone btn btn_dropdown" id="busca_janela_expandido"><button class="btn" type="button" name="button"><i class="fas fa-search"></i></button></button></div>
              </div>
              <!-- <div class="filtro">
                <div class="titulo_input">
                    Staus :
                </div>

                <select class="btn ls-custom-select">
                  <option value="volvo"> Ativo</option>
                  <option value="saab"> Inativo</option>
                  <option value="audi"> Todos</option>
                </select>
              </div> -->


            </div>

            <div class="caixa-esquerda btn_add_conta">
                <a href="view_periodo_add.php" class="btn">Adicionar</a>
            </div>
          </div>





          <table class="tabela">
              <tr>
                <th class="codgo_conta"> ID </th>
                <th class="codgo_conta"> Descrição </th>
                <th class="codgo_conta"> Início </th>
                <th class="codgo_conta"> Fim </th>
                <th class="codgo_conta"> Ação </th>


              </tr>
              <div class="linha_tabela">
                <tr>
                  <td class="codgo_conta" id="id_conta">52</td>
                  <td class="codgo_conta">2016/1</td>
                  <td class="codgo_conta">03/03/2016</td>
                  <td class="codgo_conta">03/07/2016</td>
                <td class="acao_conta">
                  <div class="btn_icone"><a href="view_periodo_edita.php" class="btn-primary"><i class="far fa-edit"></i>Editar </i></a></div>
                  <div class="btn_icone"><a href="#" id="52" class="btn-danger remover_conta "> <i class="fas fa-trash-alt"></i> Remover</a></div>
                </td>
                <td class="seta_baixo 52" id="52">
                  <label class="bt_abre_descricao" id="52" for="bt_abre_descricao"><i class="fas fa-angle-down"></i></label></td>
                </td>
                  <!-- <bottom>&#8897;</botton></td> -->
                </tr>
                <tr>
                    <td  colspan="6">
                      <div class="descrica_conta" id="52_descrica_conta">
                      </div>
                    </td>
                </tr>
            </div>

            <div class="linha_tabela">
              <div class="linha_tabela">
                <tr>
                  <td class="codgo_conta" id="id_conta">53</td>
                  <td class="codgo_conta">2016/2</td>
                  <td class="codgo_conta">08/08/2016</td>
                  <td class="codgo_conta">25/12/2016</td>
                <td class="acao_conta">
                  <div class="btn_icone"><a href="view_periodo_edita.php" class="btn-primary"><i class="far fa-edit"></i>Editar </i></a></div>
                  <div class="btn_icone"><a href="#" id="52" class="btn-danger remover_conta "> <i class="fas fa-trash-alt"></i> Remover</a></div>
                </td>
                <td class="seta_baixo 53" id="53">
                  <label class="bt_abre_descricao" id="53" for="bt_abre_descricao"><i class="fas fa-angle-down"></i></label></td>
                </td>
                  <!-- <bottom>&#8897;</botton></td> -->
                </tr>
                <tr>
                    <td  colspan="6">
                      <div class="descrica_conta" id="53_descrica_conta">
                      </div>
                    </td>
                </tr>
            </div>

          </table>


<!-- ++++++++++++++++++++++ paginacao--------->

          <div class="alinha_espasado">
            <div class="titulo_input">
              Pagina 1 de 133 pagians.
            </div>
            <div id="demo"  class="paginacao pagination">

                          <a class="btn_icone"><i class="fas fa-angle-double-left"></i></a>
                          <a href="/conta?pagina=1" class="btn_icone  pag_atual">1</a>
                          <a href="/conta?pagina=2" class="btn_icone">2</a>
                          <a href="/conta?pagina=3" class="btn_icone">3</a>
                          <a class="btn_icone"><i class="fas fa-angle-double-right"></i></a>
            </div>

            <div class="dropdown dropdown_paginacao">
              Ir para pagina:
            <div class="janela paginacao_janela " >
                <input type="text" placeholder='lab' name="" value="1" id="paginacao_janela_expandido">
                <div class="paginacao_janela_expandido expandido" >
                  <a>1</a>
                  <a>2</a>
                </div>
            </div>
            <div class="btn_icone btn btn_dropdown" id="paginacao_janela_expandido"><button class="btn" type="button" name="button">Ir</button></div>
            </div>

          </div>


          </div>

<?php include("../../base_fim.php"); ?>
</html>
