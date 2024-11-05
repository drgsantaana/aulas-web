<!-- ##############################
Nome: Daniel Reis
Curso: Engenharia de Computação - IFMG - Campus Bambui
Descrição: 0 Componentes HTML - Introducao aos componentes HTML
############################## -->

<!DOCTYPE html>
<html lang="ptbr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/html5.svg" type="image/svg">
    <title>0 CONTROLES HTML</title>

    <style>
        div {

            display: flex;
            width: 100dvw;
            align-items: center;
            justify-content: center;
            margin: 8px;
        }
    </style>


</head>

<body>
    <div>
        <table border="1px" cellspacing="4px" cellpadding="5px">
            <tr>
                <td>
                    &ccedil;
                </td>
                <td> cedil </td>
            </tr>
            <tr>
                <td>&atilde;</td>
                <td>tilde</td>
            </tr>
            <tr>
                <td>&acirc;</td>
                <td>circ</td>
            </tr>
            <tr>
                <td>&aacute;</td>
                <td>acute</td>
            </tr>
        </table>
    </div>
    <div>
        <!-- formulario de cliente -->

        <form name="frmCadastro" action="processa.php" method="post" enctype="multipart/form-data">
            <!-- componente escondido -->
            <input type="hidden" name="hddCodigo" value="123456" />
            <table border="1px" cellspacing="4px" cellpadding="5px">
                <tr>
                    <td colspan="2">Cadastro de cliente</td>
                </tr>
                <!-- componente text -->
                <tr>
                    <td width="15%">Codigo:</td>
                    <td>
                        <input type="text" name="txtCodigo" value="098765" readonly="true">
                    </td>
                </tr>
                <!-- componente text -->
                <tr>
                    <td width="15%">Nome:</td>
                    <td>
                        <input type="text" id="txtNome" name="txtNome" placeholder="Nome Completo" size="100" value="" maxlength="80">
                    </td>
                </tr>
                <!-- componente password -->
                <tr>
                    <td width="15%">Senha:</td>
                    <td><input type="password" name="txtSenha" value="coxinha123" maxlength="10" disabled="true"></td>
                </tr>
                <!-- componente email -->
                <tr>
                    <td width="15%">Email:</td>
                    <td><input type="email" name="txtEmail" placeholder="email@exemplo.com.br" size="100" maxlength="100"></td>
                </tr>
                <!-- componente data -->
                <tr>
                    <td width="15%">Data de Nascimento:</td>
                    <td><input type="date" name="txtDataNasc"></td>
                </tr>
                <!-- componente arquivo -->
                <tr>
                    <td>Envie sua foto:</td>
                    <td><input type="file" name="txtArquivo"></td>
                </tr>
                <!-- componente radio -->
                <tr>
                    <td width="15%">Renda:</td>
                    <td>
                        <input type="radio" name="rdbRenda" id="rdbMenosQueUmSalario" value="1" checked="true">
                        <label for="rdbMenosQueUmSalario">Menos que um salario minimo</label>
                        <input type="radio" name="rdbRenda" id="rsbUmSalario" value="2">
                        <label for="rdbUmSalario">Um salario minimo</label>
                        <input type="radio" name="rdbRenda" id="rdbMaisQueUmSalario">
                        <label for="rdbMaisQueUmSalario">Mais quue um salario minimo</label>

                    </td>
                </tr>
                <!-- componente de checkbox -->
                <tr>
                    <td width="15%">
                        Quais seu estilo de musicas favoritas
                    </td>
                    <td>
                        <input type="checkbox" name="chkLofi" value="lofi"> Lofi
                        <br>
                        <input type="checkbox" name="chkRock" value="Rock"> Rock
                        <br>
                        <input type="checkbox" name="chkSamba" value="Samba"> Samba
                        <br>
                        <input type="checkbox" name="chkPagode" value="Pagote"> Pagode

                    </td>
                </tr>
                <!-- componente de textarea -->
                <tr>
                    <td>Digite sua mensagem</td>
                    <td><textarea name="txtMensagem" cols="60" rows="5"></textarea></td>
                </tr>
                <!-- componente select como dropbox -->
                <tr>
                    <td>Voce gosta Refrigerante?</td>
                    <td>
                        <select name="slcRefrigerante" size="1">
                            <option value="1" selected="true">Pouco</option>
                            <option value="2">Maromeno</option>
                            <option value="3">Muito</option>
                        </select>
                    </td>
                </tr>
                <!-- componente select como listox simples -->
                <tr>
                    <td>Qual sua faixa etaria?</td>
                    <td>
                        <select name="slcFaixaEtaria" size="4">
                            <option value="1">Menos que 18</option>
                            <option value="2">Entre 18 e 50</option>
                            <option value="3">Mais que 50</option>
                            <option value="4" selected="true">Nao desejo informar minha idade</option>
                        </select>
                    </td>
                </tr>

                <!-- componente de controle select como groupbox -->
                <tr>
                    <td>Selecione os itens para sua lista de compras:</td>
                    <td><select name="slcListaDeCompras[]" multiple="true" size="9">
                            <optgroup label="Alimentos">
                                <option value="Biscoito"> Biscoito</option>
                                <option value="Bolacha"> Bolacha</option>
                            </optgroup>
                            <optgroup label="Higiene">
                                <option value="Pasta de dente">Pasta de dente</option>
                                <option value="Creme Dental">Creme dental</option>
                            </optgroup>
                            <optgroup label="Besteiras">
                                <option value="Chips">Chips</option>
                                <option value="Salgadinho">Salgadinho</option>
                            </optgroup>
                        </select></td>
                </tr>
                <!-- componente radio button com fielstet -->
                <tr>
                    <td>
                        Nos dois grupos selecione a sua disciplina predileta
                    </td>
                    <td>
                        <fieldset>
                            <legend>Ensino medio</legend>
                            <input type="radio" name="rdbMedio" id="rdbMatematica" value="matematica">
                            <label for="rdbMatematica">Matematica</label>
                            <input type="radio" name="rdbMedio" id="rdbPortugues" value="portugues">
                            <label for="rdbMatematica">Portugues</label>
                        </fieldset>
                        <fieldset>
                            <legend>Ensino tecnico</legend>
                            <input type="radio" name="rdbTecnico" id="rdbAlgoritimos" value="algoritimos">
                            <label for="rdbMatematica">Algoritimos</label>
                            <input type="radio" name="rdbTecnico" id="rdbWeb1" value="web 1">
                            <label for="rdbMatematica">Web 1</label>
                        </fieldset>
                    </td>
                </tr>




                <!--componente de  botoes -->
                <tr>
                    <td colspan="2" align="center">
                        <input type="reset" value="Limpar" id="btnLimpar" name="btnLimpar">
                        <input type="submit" value="Salvar" id="btnSalvar" name="btnSalvar">
                    </td>
                </tr>

            </table>
        </form>
    </div>
</body>

</html>