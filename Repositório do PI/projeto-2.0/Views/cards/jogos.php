<div class='content primary-content'>

    <!-- Cadastrar AVALIAÇÃO -->
    <div id='evaluationForm' class="modal">
        <form class="modal-content" action="/cards/evaluation" method="POST">
            <div class="container">
                <h1>Realizar avaliação</h1>
                <p>Por favor, faça sua avaliação.</p>
                <hr>
                <label for="avaliacao"><b>Avaliação (escala de 0 a 10):</b></label>
                <input type="range" min="0" max="10" step="0.5" name='avaliacao'><br/>
                <label for="descricao"><b>Descricao:</b></label>
                <input type="text" placeholder="Insira a descrição (opcional)" name="descricao">

                <input id='cardInput' type="hidden" name="car_id" value='' required>
                <input id='userInput' type="hidden" name="usu_id" value='' required>

                <div class="clearfix">
                    <button type="submit" class="signupbtn">Avaliar</button>
                    <button type='button' onclick="closeWindow('evaluationForm')" class="signupbtn">Voltar</button>
                </div>
            </div>
        </form>
    </div>
    <br><br><br><br><br>

    <h1>Lista de Jogos para se divertir!</h1>
    <hr>
    <?php
        
        $model = new Card(connection());  
        $evaluations = new Avaliação(connection());    
        $data = $model->findAll();
        if (isset($_SESSION['id'])) {
            $id = $_SESSION['id'];
        } else {
            $id = null;
        }
        foreach ($data as $card) {
            $nota = $model->findEvaluation($card['car_id']);
            $notaUser = $evaluations->findEvaluation($card['car_id'],$id);
            if($notaUser){
                $avaliacao = "Sua avaliação: ".$notaUser['ava_nota']."</h4><h4>Descrição da sua avaliação: ".$notaUser['ava_descricao'];
            } elseif (!isset($id)) {
                $avaliacao = 'Faça seu login para saber a nota';
            } else {
                $avaliacao = 'Sua nota: Não avaliado';
            }
            $link = '"'.$card['car_link'].'"';
            echo "<div class=''>
            <h2><a style='color:black;text-shadow:1px 2px 1px grey;' href='".$card['car_link']."' target='_blank'>".$card['car_titulo']."</a></h2>
            <h3>Nota: ".$nota['avg(ava_nota)']."</h3>
            <h4>Descrição: </h4><p>".$card['car_resumo']."</p>
            <h4>Acessibilidade: ".$card['car_acessibilidade']."</h4>
            <h4>Plataformas: ".$card['car_plataforma']."</h4>
            <h4>Necessidades: ".$card['car_necessidade']."</h4>
            <h4>Classificação: ".$card['car_classificacao']."</h4>
            <h4>".$avaliacao."</h4>
            <button type='button' onclick='evaluationsWindow(".$card['car_id'].",$id)'>Avaliar</button>
            <button type='button' onclick='buttonRedirect(".$link.")'>Visitar Jogo</button>
            </div>";
        }

    ?>
</div>