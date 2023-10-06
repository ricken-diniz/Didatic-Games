<div class="content">
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
                <p> Agradeço desde já por estar prestigiando nosso projeto. Em suma, trata-se de um Projeto Integrador responsável pela conclusão de nosso ensino técnico. Nossa equipe é composta por alunos e orientadores, que estão dando tudo de si para trazer
                    o melhor desempenho!</p>
            </div>

        </div>
    </div>
        <div class='developers'>
            <div id="about-title">
                <h2>Nossos Desenvolvedores!</h2>
                <hr>
            </div>
            <?php

                $model = new Desenvolvedor(connection());  
                $data = $model->findAll();
                foreach ($data as $developer) {
                    echo "<div class=''>
                    <h3>".$developer['des_nome']."</h3>
                    <h4>Idade: ".$developer['des_idade']."</h4>
                    <h4>Cidade: ".$developer['des_endereco']."</h4>
                    <h4>Biografia: ".$developer['des_descricao']."</h4>
                    </div></br>";
                }

            ?>
        </div>
</div>