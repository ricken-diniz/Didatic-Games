    <div class="content primary-content">

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
        
        <div class="portal central-block">
            <div class="portal-element central-block">
                <h1>Bem vindo ao DidaticGames!</h1>
                <p>Descubra diversos jogos educativos para se divertir e aprender</p>
            </div>
        </div>
        <hr style='border: 1px solid #bdbdbd;'>
        <div class="content-games central-block">
            <h1>Jogos</h1>
            <div class="games central-block">
                <div class="carrossel">
                    <div class="manual-navigation">
                        <?php
                            $model = new Card(connection());    
                            $data = $model->findAll();
                            $i = 1;
                            foreach ($data as $card) {
                                if($i>6){
                                    break;
                                }
                                $str = '"'.$i.'"';
                                echo "<input type='radio' id='radio_1' onclick='a($str)'></input>";
                                $i++;
                            }
                        ?>
                    </div>
                        <?php
                            $model = new Card(connection());  
                            $evaluations = new Avaliação(connection());    
                            $data = $model->findAll();
                            $class_index = 1;
                            $i = 1;
                            if (isset($_SESSION['id'])) {
                                $id = $_SESSION['id'];
                            } else {
                                $id = null;
                            }
                            foreach ($data as $card) {
                                $class_background = "bgclass$class_index";
                                $nota = $model->findEvaluation($card['car_id']);
                                $notaUser = $evaluations->findEvaluation($card['car_id'],$id);
                                if($notaUser){
                                    $avaliacao = "Sua avaliação: ".$notaUser['ava_nota'];
                                } elseif (!isset($id)) {
                                    $avaliacao = 'Faça seu login para saber a avaliação';
                                } else {
                                    $avaliacao = 'Sua avaliação: Não avaliado';
                                }
                                if($i>6){
                                    break;
                                }
                                $str = 'r'.$i;
                                if($i!=1){
                                    echo "<div class='game fade exit $class_background' id='$str'>
                                    <h1><a href='".$card['car_link']."'>".$card['car_titulo']."</a></h1>
                                    <h3>Nota: ".$nota['avg(ava_nota)']."</h3></br>
                                    <p>".$card['car_resumo']."</p>
                                    <a href='/jogos'>Ver mais...</a>
                                    <button type='button' onclick='evaluationsWindow(".$card['car_id'].",$id)'>Avaliar</button>
                                    <h3>".$avaliacao."</h3></br>
                                    </div>";
                                } else {
                                    echo "<div class='game $class_background' id='$str'>
                                    <h1><a href='".$card['car_link']."'>".$card['car_titulo']."</a></h1>
                                    <h3>Nota: ".$nota['avg(ava_nota)']."</h3></br>
                                    <p>".$card['car_resumo']."</p>
                                    <a href='/jogos'>Ver mais...</a>
                                    <button type='button' onclick='evaluationsWindow(".$card['car_id'].",$id)'>Avaliar</button>
                                    <h3>".$avaliacao."</h3></br>
                                    </div>";
                                }
                                $i++;
                                $class_index++;
                                if($class_index > 3){
                                    $class_index = 1;
                                }
                            }
                        ?>
                </div>
            </div>
        </div>
        <div class="about central-block">
            <div class="about-image">
                <img src="../static/img/quimic.jpg" alt="">
            </div>
            <div class="about-description">
                <div id="about-title">
                    <h2>Sobre nós...</h2>
                </div>
                <div id="about-text">
                    <p>Olá caro visitante!</p>
                    <p> Este projeto tem como objetivo o âmbito acadêmico, funcionando como uma biblioteca que busca trazer jogos educativos para o nosso públicos.</p>
                    <p> Agradeço desde já por estar prestigiando nosso projeto. Em suma, trata-se de um Projeto Integrador responsável pela conclusão de nosso ensino técnico. Nossa equipe é composta por alunos e orientadores, que estão dando tudo de si para
                        trazer o melhor desempenho!</p>
                </div>

            </div>
        </div>
    </div>
    <script>
    </script>