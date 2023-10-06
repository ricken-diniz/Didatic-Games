<?php
if (!hasAdm()) {
    header('Location: /');
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link rel="stylesheet" href="/../../static/css/style.css">

</head>
    <body>
        <!-- Cadastrar USER -->
        <div id='us01' class="modal">
            <form class="modal-content" action="/adm/users/registrar" method="POST">
                <div class="container">
                    <h1>Cadastrar novo Usuário</h1>
                    <p>Por favor, preencha os dados.</p>
                    <hr>
                    <label for="nome"><b>Nome</b></label>
                    <input type="text" placeholder="Insira o nome" name="nome" required>

                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Insira o email" name="email" required>

                    <label for="senha"><b>Senha</b></label>
                    <input type="password" placeholder="Insira a senha" name="senha" required>

                    <div class="clearfix">
                        <button type="submit" class="signupbtn">Registrar</button>
                        <button type='button' onclick="closeWindow('us01')" class="signupbtn">Voltar</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- Cadastrar CARD -->
        <div id='car01' class="modal">
            <form class="modal-content" action="/adm/cards/registrar" method="POST">
                <div class="container">
                    <h1>Cadastrar novo Card</h1>
                    <p>Por favor, preencha os dados.</p>
                    <hr>
                    <label for="titulo"><b>Titulo</b></label>
                    <input type="text" placeholder="Insira o titulo" name="titulo" required>

                    <label for="resumo"><b>Resumo</b></label>
                    <input type="text" placeholder="Insira o resumo" name="resumo" required>

                    <label for="acessibilidade"><b>Acessibilidade</b></label>
                    <input type="text" placeholder="Insira a acessibilidade" name="acessibilidade" required>

                    <label for="necessidade"><b>Necessidade</b></label>
                    <input type="text" placeholder="Insira a necessidade" name="necessidade" required>

                    <label for="classificação"><b>Classificação</b></label>
                    <input type="text" placeholder="Insira a classificação" name="classificação" required>

                    <label for="plataforma"><b>Plataforma</b></label>
                    <input type="text" placeholder="Insira o plataforma" name="plataforma" required>

                    <label for="link"><b>Link</b></label>
                    <input type="text" placeholder="Insira a link" name="link" required>

                    <div class="clearfix">
                        <button type="submit" class="signupbtn">Registrar</button>
                        <button type='button' onclick="closeWindow('car01')" class="signupbtn">Voltar</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- Editar CARD -> seleciona atributo e em seguida o valor -->
        <div id='car02' class="modal">
            <form class="modal-content" action="/adm/cards/editar" method="POST">
                <div class="container">
                    <h1>Editar Card</h1>
                    <p>Por favor, preencha os dados.</p>
                    <hr>
                    <label for="atributo"><b>Insira o atributo</b></label>
                    <select name="atributo" required>
                        <option value="car_titulo">titulo</option>
                        <option value="car_resumo">resumo</option>
                        <option value="car_acessibilidade">acessibilidade</option>
                        <option value="car_necessidade">necessidade</option>
                        <option value="car_classificacao">classificação</option>
                        <option value="car_plataforma">plataforma</option>
                        <option value="car_link">link</option>
                    </select>

                    <label for="argumento"><b>Argumento</b></label>
                    <input type="text" placeholder="Insira o argumento" name="argumento" required>

                    <input id='editInput' type='hidden' name='id' value=''>

                    <div class="clearfix">
                        <button type="submit" class="signupbtn">Registrar</button>
                        <button type='button' onclick="closeWindow('car02')" class="signupbtn">Voltar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="nav-menu">
        <div class="nav-bar">
            <div class="menu">
                <p>Painel de Administração de Entidades</p>
            </div>
            <div class='menu'>
                <a href='/'>Sair</a>
            </div>
        </div>
    </div>
    <div class='content'>
        <h2 style='padding:none'>Usuários:</h2>
        <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Senha</th>
            <th><button onclick="openWindow('us01')">Create</button></th>
        </tr>
            <?php
                $model = new Usuario(connection());    
                $data = $model->findAll();
                foreach ($data as $user) {
                    echo "<tr><td>".$user['usu_id']."</td><td>".$user['usu_nome']."</td><td>".$user['usu_email']."</td><td>".$user['usu_senha']."</td><td>
                    <form action='/adm/users/delete' method='POST'>
                    <input type='hidden' name='id' value='".$user['usu_id']."'>
                    <button type='submit'>Delete</button>
                    </form>
                    </td>";
                }
            ?>
        </table>
        <h2 style='padding:none'>Cards:</h2>
        <table>
        <tr>
            <th>Id</th>
            <th>Titulo</th>
            <th>Resumo</th>
            <th>Acessibilidade</th>
            <th>Necessidade</th>
            <th>Classificação</th>
            <th>Plataforma</th>
            <th>Link</th>
            <th><button onclick="openWindow('car01')">Create</button></th>
        </tr>
        <?php
            $model2 = new Card(connection());    
            $data2 = $model2->findAll();
            foreach ($data2 as $card) {
                $windowId = '"car02"';
                echo "<tr><td>".$card['car_id']."</td><td>".$card['car_titulo']."</td><td>".$card['car_resumo']."</td><td>".$card['car_acessibilidade']."</td><td>".$card['car_necessidade']."</td><td>".$card['car_classificacao']."</td><td>".$card['car_plataforma']."</td><td>".$card['car_link']."</td><td>
                <form action='/adm/cards/delete' method='POST'>
                <input type='hidden' name='id' value='".$card['car_id']."'>
                <button type='submit'>Delete</button>
                <button type='button' onclick='openEditWindow($windowId,".$card['car_id'].")'>Edit</button>
                </form></td>";
            }
        ?>
        </table>
        <h2 style='padding:none'>Avaliações:</h2>
        <table>
        <tr>
            <th>Id</th>
            <th>Nota</th>
            <th>Descrição</th>
            <th>ID Usuário</th>
            <th>ID Card</th>
        </tr>
        <?php
            // arrumar o button de delete
            $model3 = new Avaliação(connection());    
            $data3 = $model3->findAll();
            foreach ($data3 as $ava) {
                echo "<tr><td>".$ava['ava_id']."</td><td>".$ava['ava_nota']."</td><td>".$ava['ava_descricao']."</td><td>".$ava['ava_usu_id']."</td><td>".$ava['ava_car_id']."</td><td>
                <form action='/adm/evaluations/delete' method='POST'>
                <input type='hidden' name='id' value='".$ava['ava_id']."'>
                <button type='submit'>Delete</button>
                </form></td>";
            }
        ?>
        </table>
        <h2 style='padding:none'>Progressos:</h2>
        <table>
        <tr>
            <th>Id</th>
            <th>Descrição</th>
            <th>Validação</th>
            <th>ID Usuário</th>
            <th>ID Card</th>
        </tr>
        <?php
            // arrumar o button de delete e criar o de validar progressão
            $model4 = new Progresso(connection());    
            $data4 = $model4->findAll();
            foreach ($data4 as $pro) {
                echo "<tr><td>".$pro['pro_id']."</td><td>".$pro['pro_descricao']."</td><td>".$pro['pro_validacao']."</td><td>".$pro['pro_usu_id']."</td><td>".$pro['pro_car_id']."</td><td>
                <form action='/adm/progress/delete' method='POST'>
                <input type='hidden' name='id' value='".$pro['pro_id']."'>
                <button type='submit'>Delete</button>
                </form></td><td>
                <form action='/adm/progress/validate' method='POST'>
                <input type='hidden' name='id' value='".$pro['pro_id']."'>
                <button type='submit'>Validate</button>
                </form></td>";
            }
        ?>
        </table>
        <h2 style='padding:none'>Sugestões:</h2>
        <table>
        <tr>
            <th>Id</th>
            <th>Descrição</th>
            <th>ID Usuário</th>
        </tr>
        <?php
            // arrumar o button de delete
            $model5 = new Sugestão(connection());    
            $data5 = $model5->findAll();
            foreach ($data5 as $sug) {
                echo "<tr><td>".$sug['sug_id']."</td><td>".$sug['sug_descricao']."</td><td>".$sug['sug_usu_id']."</td><td>
                <form action='/adm/suggestions/delete' method='POST'>
                <input type='hidden' name='id' value='".$sug['sug_id']."'>
                <button type='submit'>Delete</button>
                </form></td>";
            }
        ?>
        </table>
    </div>
    <script>
        function openWindow(id){
            document.getElementById(id).style.display = "block";
        }
        function openEditWindow(id,cardId){
            document.getElementById(id).style.display = "block";
            document.getElementById('editInput').value = cardId;
        }
        function closeWindow(id){
            document.getElementById(id).style.display = "none";
        }
    </script>
</body>
</html>