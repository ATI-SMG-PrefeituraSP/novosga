<?php
use \core\SGA;

// desabilita o proximo, para liberar so testar o banco
$session = SGA::getContext()->getSession();
$session->set(InstallView::ERROR, true);

$data = $session->get(InstallData::SESSION_KEY);
if (!$data) {
    $data = new InstallData();
}
$data->database['db_type'] = $session->get('adapter');
$session->set(InstallData::SESSION_KEY, $data);

$builder = new TemplateBuilder();

?>
<div id="step_3">
    <fieldset>
        <legend>Banco de Dados</legend>
        <?php
            echo $builder->success(array(
                'id' => 'db_test_success',
                'style' => 'display:none'
            ));
            echo $builder->error(array(
                'id' => 'db_test_error',
                'style' => 'display:none'
            ));
        ?>
        <div class="field">
            <label>Tipo:</label>
            <abbr class="db-type" title="<?php echo _('Escolhido no passo 1') ?>"><?php echo InstallData::$dbTypes[$data->database['db_type']]['rdms']; ?></abbr>
        </div>
        <div class="field">
            <label>Host:</label>
            <input type="text" id="db_host" name="db_host" value="" onchange="SGA.Install.onChangeData()" />
        </div>
        <div class="field">
            <label>Porta:</label>
            <input type="text" id="db_port" name="db_port" value="" onchange="SGA.Install.onChangeData()" />
        </div>
        <div class="field">
            <label>Usuário:</label>
            <input type="text" id="db_user" name="db_user" onchange="SGA.Install.onChangeData()" />
        </div>
        <div class="field">
            <label>Senha:</label>
            <input type="password" id="db_pass" name="db_pass" onchange="SGA.Install.onChangeData()" />
        </div>
        <div class="field">
            <label>Database:</label>
            <input type="text" id="db_name" name="db_name" onchange="SGA.Install.onChangeData()" />
        </div>
    </fieldset>
    <script type="text/javascript">
        <?php
            // lendo dados da sessao
            foreach ($data->database as $field => $message) {
                echo 'SGA.Install.dbData.' . $field . ' = "' . $data->database[$field] . '"; ';
            }
        ?>
        SGA.Install.loadDatabaseData();
    </script>
</div>
<div>
    <?php
        echo $builder->highlight(
            $builder->icon('ui-icon-alert') .
            '<strong>Atenção:</strong> O banco de dados especificado na instalação será criado automaticamente, se não existir. Caso exista, será recriado e todos os dados existentes no banco antigo serão PERMANENTEMENTE PERDIDOS.'
        );
    ?>
</div>
<div>
    <p class="alert">É necessário testar o banco antes de prosseguir.
    <?php 
        echo $builder->button(array(
            'id' => 'btn_test_db',
            'label' => 'Testar',
            'onclick' => 'SGA.Install.testDB()',
            'title' => 'Clique para testar a conexão com o Banco de Dados.'
        ));;
    ?></p>
</div>