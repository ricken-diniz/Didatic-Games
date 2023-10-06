<?php
if(!hasUser()){
    header('Location: /');
}
?>
<!-- form de edição -->
<div id='us01' class="modal">
    <form class='modal-content' id='form-action' action="" method="POST">
        <div class="container">
            <h1>Editar</h1>
            <hr>
            <label id='form-label' for="argumento"></label>
            <input id='form-atb' type="hidden" name="atributo" value="">
            <input id='form-id' type="hidden" name="id" value="">
            <input type="text" name="argumento" placeholder="Digite o novo campo" required>

            <div class="clearfix">
                <button type="submit" class="signupbtn">Salvar</button>
                <button type='button' onclick='closeWindow("us01")'>Cancelar</button>
            </div>
        </div>
    </form>
</div>
<div id='us02' class='modal'>
    <form style='margin: 15%;width:auto' class='modal-content' action='/usuarios/editprofile/delete' method='POST'>
        <div class="container">
            <h1>Tem certeza?</h1>
            <hr>
            <input id='inpt-del' type='hidden' name='id' value=''>
            <button type='submit'>Excluir perfil</button>
            <button type='button' onclick='closeWindow("us02")'>Cancelar</button>
        </div>
    </form>
</div>
<div style='flex-direction:row;' class='content'>
    <div class='user-menu'>
        <ul>
            <li><button onclick='openEditProfile()'>Editar perfil</button></li>
            <li><button onclick='openEditItems()'>Editar atividades</button></li>
        </ul>
    </div>
    <div id='user-content'>
        <!-- informações do usuário -->
            <?php
                $model = new Usuario(connection());    
                $data = $model->findOnly('ID',$_SESSION['id']);
                $param_nome = '"/usuarios/editprofile/edit","Digite o novo nome:","usu_nome",';
                $param_email = '"/usuarios/editprofile/edit","Digite o novo email:","usu_email",';
                $param_password = '"/usuarios/editprofile/edit","Digite a nova senha:","usu_senha",';
                    echo "
                    <h1>Dados do Usuário</h1>
                    <hr><h4>Nome: </h4>".$data['usu_nome']."
                    <button onclick='editProfile($param_nome".$data['usu_id'].")'>Editar nome</button>".
                    "<h4>Email: </h4>".$data['usu_email']."
                    <button onclick='editProfile($param_email".$data['usu_id'].")'>Editar email</button>".
                    "<h4>Senha: </h4>Sem suporte para exibição!
                    <button onclick='editProfile($param_password".$data['usu_id'].")'>Editar senha</button></br></br>
                    <button onclick='deleteProfile(".$data['usu_id'].")'>Excluir perfil</button>";
            ?>
    </div>
    <div id='user-items' style='display:none;'>
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
</div>

<script>
    function deleteProfile(id){
        document.getElementById('us02').style.display = 'block';
        document.getElementById('inpt-del').value = id;

    }
    function closeWindow(id){
        document.getElementById(id).style.display = "none";
    }
    function openWindow(id){
        document.getElementById(id).style.display = "block";
    }
    function editProfile(uri,title,atb,id){
        document.getElementById('us01').style.display = 'block';
        document.getElementById('form-action').action = uri;
        document.getElementById('form-label').innerHTML = title;
        document.getElementById('form-atb').value = atb;
        document.getElementById('form-id').value = id;
    }
    function openEditProfile(){
        document.getElementById('user-content').style.display = "block";
        document.getElementById('user-items').style.display = "none";
    }
    function openEditItems(){
        document.getElementById('user-content').style.display = "none";
        document.getElementById('user-items').style.display = "block";
    }
</script>