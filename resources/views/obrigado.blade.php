@@extends('layouts.master')
<?php
    $tituloDaPagina = "Mensagem Enviada | Braindev";

    if($_REQUEST && isset($_REQUEST)):
        if(isset($_REQUEST["nome"])) { $nome = $_REQUEST["nome"]; }
        if(isset($_REQUEST["email"])) { $email = $_REQUEST["email"]; }
        if(isset($_REQUEST["mensagem"])) { $mensagem = $_REQUEST["mensagem"]; }
        
    endif;

?>
    <main class="container my-5">

        <?php if( $_REQUEST && isset($_REQUEST) ): ?>
            
            <article>
                <h2>Obrigado! Os seguintes dados foram recebidos:</h2>
                <table class="table table-bordered my-5">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">email</th>
                            <th scope="col">Mensagem</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row" rowspan="2"><?= $nome ?></th>
                            <td><?= $email ?></td>
                        </tr>
                        <tr>
                            <td colspan="6" class="text-left pl-3"><?= $mensagem ?></td>
                        </tr>
                    </tbody>
                </table>
                <?php if(!isset($aceite)): ?>
                    <small class="bg-danger text-white p-3">Os termos do site não foram aceitos</small>
                <?php else: ?>
                    <small class="bg-success text-white p-3">Os termos do site foram aceitos</small>
                <?php endif; ?>
            </article>

        <?php else: ?>
        
            <article class="alert alert-warning col-6 mx-auto" role="alert">
                <p><b>Ops... parece que nenhum dado foi recebido!</b></p>
                <p>Por favor, preencha o formulário de <a href="contato.php" title="Acessar o formulário de contato" rel="next">Contato</a>.</p>
                <p>Se você acabou de preencher o formulário, foi direcionado para essa página e está vendo essa mensagem...<br/>deve ter algum erro no seu código! Nesse caso... bora debugar! hehehe</p>
            </article>

        <?php endif; ?>
    </main>
