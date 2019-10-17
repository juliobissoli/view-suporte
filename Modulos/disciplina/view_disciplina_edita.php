<html>
<title>Suporte 1</title>
<link rel="shortcut icon" HREF="/imagens/logo_title.png"/>
<header>
  <meta charset="utf-8">
  <?php include("../../base_header.php") ?>

  <link href="/css/conta.css", rel="stylesheet">
  <!-- <script type="text/javascript" src="/js/base.js"></script> -->
  <script type="text/javascript" src="/js/conta.js"></script>
</header>


<?php include("../../base.php") ?>

        <form action="/conta/salvar" method="post">
          <section class="add_conta">
            <div class="titulo_add">
                Editar Disciplina
            </div>

            <div class="formulario">
              <input type="hidden" name="operacao" value="adicao">
              <input type="hidden" name="id" value="0">
              <label for="">Nome:
              <input type="text" name="nome" value="" size="45" required="">
              </label>

              <label>Login:
                <input class="indisponivel" type="text" name="login" value="" size="45" required="">
              </label>

              <label for="">Email contato:
                <input type="email" name="mail_contato" value="" size="45" required="">
              </label>

              <label>Email institucional:
                <input class="indisponivel" type="email" name="mail_institucional" value="" size="45" required="">
              </label>
              <label for="">Telefone:
                <input type="tel" name="telefone" value="" size="17" pattern="^\d{2}-\d{5}-\d{4}$" required="">
              </label>
              <input type="radio" name="entidade" value="0" onchange="alteraTipoConta('aluno')" checked=""> Aluno
              <input type="radio" name="entidade" value="1" onchange="alteraTipoConta('servidor')"> Servidor
              <input type="radio" name="entidade" value="2" onchange="alteraTipoConta('professor')"> Professor

              <input  id="bt_instituicao"type="radio" name="entidade" value="3" onchange="alteraTipoConta('instituicao')"> Instituição

              <div id="aluno" name="herdado" ></div>
              <div id="servidor" name="herdado" ></div>
              <div id="professor" name="herdado" ></div>
              <div class="pesquisa" id="instituicao" name="herdado">
                <div class="duas-caixa">
                  <div class="caixa-direita responsavel_pesquisa">
                    <!-- dropdow -->
                    <div class="dropdown dropdown_responsavel_pesquisa">
                      <label>
                        Reservas:
                        <div class="janela responsavel_pesquisa_janela btn_dropdown" id="responsavel_pesquisa_janela_expandido">
                            <input type="text" placeholder='lab' name="" value="1">
                            <div class="responsavel_pesquisa_janela_expandido expandido" >
                              <a>1</a>
                              <a>2</a>
                            </div>
                        </div>
                      </label>
                    </div>

                  </div>
                  <div class="caixa-esquerda responsavel_id">
                    <label>
                      ID:
                      <input class="indisponivel" type="text" id="id_responsavel" name="id_responsavel" value="0" size="5">
                    </label>
                  </div>
                </div>


                  <!-- <input type="text" id="entidade_responsavel" name="entidade_responsavel" value="0" size="5" hidden="true">
                  <ul class="resultados">
                  </ul>
                  <br> -->
              </div>
            </div>

            <div class="permissoes">
              <h3>Permissões</h3>
              <input type="checkbox" name="conta" value="conta"> Conta<br>
              <input type="checkbox" name="orientacao" value="orientacao"> Orientação<br>
              <input type="checkbox" name="virtualizadora" value="virtualizadora"> Virtualizadora<br>
              <input type="checkbox" name="projeto" value="projeto"> Projeto<br>
              <input type="checkbox" name="localizacao" value="localizacao"> Localização<br>
              <input type="checkbox" name="aula" value="aula"> Aula<br>
              <input type="checkbox" name="vm" value="vm"> VM<br>
              <input type="checkbox" name="ip" value="ip"> IP<br>
              <input type="checkbox" name="labgrad" value="labgrad"> Labgrad<br>
              <input type="checkbox" name="laboratorio" value="laboratorio"> Laboratório<br>
              <input type="checkbox" name="vinculo" value="vinculo"> Vínculo<br>
              <input type="checkbox" name="banco_dados" value="banco_dados"> Banco de dados<br>
              <input type="checkbox" name="relacionamento" value="relacionamento"> Relacionamento<br><br>

            </div>
            <div class="caixa_mensagem">
              Status atual: Ativo/Inativo...<br>
              Conta Cadastrada em: 01/01/1990<br>
              Data de alteração: 01/01/1990<br>
            </div>

            <div class="resultado_validacao">
              <div class="caixa_mensagem_negativa">
                <div class="icone_mensagem"><i class="far fa-times-circle"></i></div>
                <div class="texto_mensagem">

                </div>
              </div>
            </div>

            <div class="btn_salvar">
              <input class="btn" type="submit" name="submit" value="Salvar" id="btn_salvar">
            </div>

          </section>
        </form>
      </div>

  </div>
  </div>

</html>
