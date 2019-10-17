<html>
<title>Suporte 1</title>
<link rel="shortcut icon" HREF="../../imagens/logo_title.png"/>
<header>
  <?php include("../../base_header.php") ?>
  <!-- <link href="../../css/aula.css", rel="stylesheet"> -->
    <link href="../../css/horario.css", rel="stylesheet">
  <!-- <script type="text/javascript" src="/js/base.js"></script> -->
  <script type="text/javascript" src="../../js/horarios.js"></script>

</header>

<?php include("../../base.php") ?>
        <div class="modulo_area_eventos">
          <div class="titulo_add">
              Horaríos
          </div>

            <div class="alinha_espasado">
              <div class="dropdown disciplina">

              <div class="titulo_input">
                 Disciplina:
              </div>
                <div class="janela disciplina_janela" >
                  <input id="inpt_disciplina" class="inpt_dropdouw" type="text" placeholder='Nome da disciplina' name="" value="">
                  <div class="disciplina_janela_expandido expandido">
                    <a>Disciplina com none grande</a>
                    <a>Disciplina com none grande</a>
                  </div>
                </div>

              <div class="btn_icone btn btn_dropdown" id="disciplina_janela_expandido" for="btn_dropdown"><button class="btn" type="button" name="button"><i class="fas fa-angle-down"></i></button></div>
              <!-- <button type="button" name="button" class="btn btn_disciplna">Disciplina   <i class="fas fa-angle-down"></i></button> -->

              </div>

              <div class="dropdown periodo">
              <div class="titulo_input">
                   Período:
              </div>
              <div class="janela periodo_janela">
                  <input id="inpt_periodo" class="inpt_dropdouw" type="text" placeholder='Periodo' name="" value="">
                  <div class="periodo_janela_expandido down_comum expandido">
                    <a>1</a>
                    <a>2</a>
                  </div>
              </div>

              <div class="btn_icone btn btn_dropdown" id="periodo_janela_expandido"><button class="btn" type="button" name="button"><i class="fas fa-angle-down"></i></button></div>
              <!-- <button type="button" name="button" class="btn btn_disciplna">Disciplina   <i class="fas fa-angle-down"></i></button> -->

              </div>

              <div class="dropdown professor">
                <div class="titulo_input">
                    Professor:
                </div>

              <div class="janela professor_janela " >
                  <input id="inpt_professor" class="inpt_dropdouw" type="text" placeholder='Nome o Professor' name="" value="">
                  <div class="professor_janela_expandido down_comum expandido">
                    <a>1</a>
                    <a>2</a>
                  </div>
              </div>

              <div class="btn_icone btn btn_dropdown" id="professor_janela_expandido"><button class="btn" type="button" name="button"><i class="fas fa-angle-down"></i></button></div>
              <!-- <button type="button" name="button" class="btn btn_disciplna">Disciplina   <i class="fas fa-angle-down"></i></button> -->

              </div>

              <div class="caixa-esquerda btn_add_conta">
                  <a href="/view_conta_add.php" class="btn">Adicionar</a>
              </div>

        </div>


          <table class="tabela" id="tabela_marcacao_aula">

          </table>


          <!-- <div class="caixa-esquerda btn_add_conta">
              <a href="/view_conta_add.php" class="btn">Adicionar</a>
          </div> -->


        </div>
        </div>
      </div>

  </div>
  </div>

</html>
