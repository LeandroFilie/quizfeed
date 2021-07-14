<div class="modal fade " id="alterarDados" tabindex="-1" role="dialog" aria-labelledby="important-msg-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title">Alterar Dados</h4>
        </div>
        <div class="modal-body modal-form">
            <input type="text" name="nome_completo_modal" id="nome_completo_modal" placeholder="Nome Completo" />
            <input type="text" name="nome_usuario_modal" id="nome_usuario_modal" placeholder="Nome de Usuário" />
            <input type="text" name="email_modal" id="email_modal" placeholder="E-mail" />
        </div>
        <div class="modal-footer">
            <button class="data-user-action-cancel" data-dismiss="modal">Cancelar</button>
            <?php
                if($_SESSION["permissao"] == 2){
                    echo '<button class="data-user-action-save salvar">Salvar</button>';
                }   
            ?>
        </div>
        </div>
    </div>
</div>

<div class="modal fade " id="excluirConta" tabindex="-1" role="dialog" aria-labelledby="important-msg-label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title">Excluir Conta</h4>
        </div>
        <div class="modal-body">
            <p class="modal-text">Tem certeza que deseja excluir a conta?</p>
        </div>
        <div class="modal-footer">
            <button class="data-user-action-cancel" data-dismiss="modal">Não</button>
            <button class="data-user-action-save remover">Sim</button>
        </div>
        </div>
    </div>
</div>