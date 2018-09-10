<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'admin_index' => array(array(), array('_controller' => 'App\\Controller\\Admin\\AdminController::index'), array(), array(array('text', '/admin/')), array(), array()),
        'admin_acumular_atendimentos' => array(array(), array('_controller' => 'App\\Controller\\Admin\\AdminController::acumularAtendimentos'), array(), array(array('text', '/admin/acumular_atendimentos')), array(), array()),
        'admin_limpar_atendimentos' => array(array(), array('_controller' => 'App\\Controller\\Admin\\AdminController::limparAtendimentos'), array(), array(array('text', '/admin/limpar_atendimentos')), array(), array()),
        'admin_api_index' => array(array(), array('_controller' => 'App\\Controller\\Admin\\ApiController::index'), array(), array(array('text', '/admin/api/')), array(), array()),
        'admin_api_clients' => array(array(), array('_controller' => 'App\\Controller\\Admin\\ApiController::oauthClients'), array(), array(array('text', '/admin/api/oauth-clients')), array(), array()),
        'admin_api_newclient' => array(array(), array('_controller' => 'App\\Controller\\Admin\\ApiController::newOauthClient'), array(), array(array('text', '/admin/api/oauth-clients')), array(), array()),
        'admin_api_removeclient' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\ApiController::removeOauthClient'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/api/oauth-clients')), array(), array()),
        'admin_departamentos_index' => array(array(), array('_controller' => 'App\\Controller\\Admin\\DepartamentoController::index'), array(), array(array('text', '/admin/departamentos/')), array(), array()),
        'admin_departamentos_new' => array(array(), array('_controller' => 'App\\Controller\\Admin\\DepartamentoController::form'), array(), array(array('text', '/admin/departamentos/new')), array(), array()),
        'admin_departamentos_edit' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\DepartamentoController::form'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/departamentos')), array(), array()),
        'admin_departamentos_delete' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\DepartamentoController::delete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/departamentos')), array(), array()),
        'admin_locais_index' => array(array(), array('_controller' => 'App\\Controller\\Admin\\LocaisController::index'), array(), array(array('text', '/admin/locais/')), array(), array()),
        'admin_locais_new' => array(array(), array('_controller' => 'App\\Controller\\Admin\\LocaisController::form'), array(), array(array('text', '/admin/locais/new')), array(), array()),
        'admin_locais_edit' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\LocaisController::form'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/locais')), array(), array()),
        'admin_locais_delete' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\LocaisController::delete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/locais')), array(), array()),
        'admin_modulos_index' => array(array(), array('_controller' => 'App\\Controller\\Admin\\ModulosController::index'), array(), array(array('text', '/admin/modulos/')), array(), array()),
        'admin_modulos_update' => array(array(), array('_controller' => 'App\\Controller\\Admin\\ModulosController::update'), array(), array(array('text', '/admin/modulos/update')), array(), array()),
        'admin_perfis_index' => array(array(), array('_controller' => 'App\\Controller\\Admin\\PerfisController::index'), array(), array(array('text', '/admin/perfis/')), array(), array()),
        'admin_perfis_new' => array(array(), array('_controller' => 'App\\Controller\\Admin\\PerfisController::form'), array(), array(array('text', '/admin/perfis/new')), array(), array()),
        'admin_perfis_edit' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\PerfisController::form'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/perfis')), array(), array()),
        'admin_perfis_delete' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\PerfisController::delete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/perfis')), array(), array()),
        'admin_prioridades_index' => array(array(), array('_controller' => 'App\\Controller\\Admin\\PrioridadesController::index'), array(), array(array('text', '/admin/prioridades/')), array(), array()),
        'admin_prioridades_new' => array(array(), array('_controller' => 'App\\Controller\\Admin\\PrioridadesController::form'), array(), array(array('text', '/admin/prioridades/new')), array(), array()),
        'admin_prioridades_edit' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\PrioridadesController::form'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/prioridades')), array(), array()),
        'admin_prioridades_delete' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\PrioridadesController::delete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/prioridades')), array(), array()),
        'admin_servicos_index' => array(array(), array('_controller' => 'App\\Controller\\Admin\\ServicosController::index'), array(), array(array('text', '/admin/servicos/')), array(), array()),
        'admin_servicos_new' => array(array(), array('_controller' => 'App\\Controller\\Admin\\ServicosController::form'), array(), array(array('text', '/admin/servicos/new')), array(), array()),
        'admin_servicos_edit' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\ServicosController::form'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/servicos')), array(), array()),
        'admin_servicos_delete' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\ServicosController::delete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/servicos')), array(), array()),
        'admin_unidades_index' => array(array(), array('_controller' => 'App\\Controller\\Admin\\UnidadesController::index'), array(), array(array('text', '/admin/unidades/')), array(), array()),
        'admin_unidades_new' => array(array(), array('_controller' => 'App\\Controller\\Admin\\UnidadesController::form'), array(), array(array('text', '/admin/unidades/new')), array(), array()),
        'admin_unidades_edit' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\UnidadesController::form'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/unidades')), array(), array()),
        'admin_unidades_delete' => array(array('id'), array('_controller' => 'App\\Controller\\Admin\\UnidadesController::delete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/admin/unidades')), array(), array()),
        'app_api_agendamentos_post' => array(array(), array('_controller' => 'App\\Controller\\Api\\AgendamentosController::post'), array(), array(array('text', '/api/agendamentos')), array(), array()),
        'app_api_agendamentos_doget' => array(array('id'), array('_controller' => 'App\\Controller\\Api\\AgendamentosController::doGet'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/api/agendamentos')), array(), array()),
        'app_api_agendamentos_dofind' => array(array(), array('_controller' => 'App\\Controller\\Api\\AgendamentosController::doFind'), array(), array(array('text', '/api/agendamentos')), array(), array()),
        'app_api_atendimentos_doget' => array(array('id'), array('_controller' => 'App\\Controller\\Api\\AtendimentosController::doGet'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/api/atendimentos')), array(), array()),
        'app_api_atendimentos_dofind' => array(array(), array('_controller' => 'App\\Controller\\Api\\AtendimentosController::doFind'), array(), array(array('text', '/api/atendimentos')), array(), array()),
        'app_api_atendimentoshistorico_doget' => array(array('id'), array('_controller' => 'App\\Controller\\Api\\AtendimentosHistoricoController::doGet'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/api/atendimentoshistorico')), array(), array()),
        'app_api_atendimentoshistorico_dofind' => array(array(), array('_controller' => 'App\\Controller\\Api\\AtendimentosHistoricoController::doFind'), array(), array(array('text', '/api/atendimentoshistorico')), array(), array()),
        'app_api_default_index' => array(array(), array('_controller' => 'App\\Controller\\Api\\DefaultController::index'), array(), array(array('text', '/api')), array(), array()),
        'app_api_default_index_1' => array(array(), array('_controller' => 'App\\Controller\\Api\\DefaultController::index'), array(), array(array('text', '/api/')), array(), array()),
        'app_api_departamentos_doget' => array(array('id'), array('_controller' => 'App\\Controller\\Api\\DepartamentosController::doGet'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/api/departamentos')), array(), array()),
        'app_api_departamentos_dofind' => array(array(), array('_controller' => 'App\\Controller\\Api\\DepartamentosController::doFind'), array(), array(array('text', '/api/departamentos')), array(), array()),
        'app_api_departamentos_dopost' => array(array(), array('_controller' => 'App\\Controller\\Api\\DepartamentosController::doPost'), array(), array(array('text', '/api/departamentos')), array(), array()),
        'app_api_departamentos_doput' => array(array('id'), array('_controller' => 'App\\Controller\\Api\\DepartamentosController::doPut'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/api/departamentos')), array(), array()),
        'app_api_departamentos_dodelete' => array(array('id'), array('_controller' => 'App\\Controller\\Api\\DepartamentosController::doDelete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/api/departamentos')), array(), array()),
        'app_api_filas_atendimentosusuario' => array(array('unidadeId'), array('_controller' => 'App\\Controller\\Api\\FilasController::atendimentosUsuario'), array(), array(array('variable', '/', '[^/]++', 'unidadeId'), array('text', '/api/filas')), array(), array()),
        'app_api_filas_alterastatus' => array(array(), array('_controller' => 'App\\Controller\\Api\\FilasController::alteraStatus'), array(), array(array('text', '/api/filas')), array(), array()),
        'app_api_locais_doget' => array(array('id'), array('_controller' => 'App\\Controller\\Api\\LocaisController::doGet'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/api/locais')), array(), array()),
        'app_api_locais_dofind' => array(array(), array('_controller' => 'App\\Controller\\Api\\LocaisController::doFind'), array(), array(array('text', '/api/locais')), array(), array()),
        'app_api_locais_dopost' => array(array(), array('_controller' => 'App\\Controller\\Api\\LocaisController::doPost'), array(), array(array('text', '/api/locais')), array(), array()),
        'app_api_locais_doput' => array(array('id'), array('_controller' => 'App\\Controller\\Api\\LocaisController::doPut'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/api/locais')), array(), array()),
        'app_api_locais_dodelete' => array(array('id'), array('_controller' => 'App\\Controller\\Api\\LocaisController::doDelete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/api/locais')), array(), array()),
        'app_api_painel_painel' => array(array('id'), array('_controller' => 'App\\Controller\\Api\\PainelController::painel'), array(), array(array('text', '/painel'), array('variable', '/', '[^/]++', 'id'), array('text', '/api/unidades')), array(), array()),
        'app_api_prioridades_doget' => array(array('id'), array('_controller' => 'App\\Controller\\Api\\PrioridadesController::doGet'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/api/prioridades')), array(), array()),
        'app_api_prioridades_dofind' => array(array(), array('_controller' => 'App\\Controller\\Api\\PrioridadesController::doFind'), array(), array(array('text', '/api/prioridades')), array(), array()),
        'app_api_prioridades_dopost' => array(array(), array('_controller' => 'App\\Controller\\Api\\PrioridadesController::doPost'), array(), array(array('text', '/api/prioridades')), array(), array()),
        'app_api_prioridades_doput' => array(array('id'), array('_controller' => 'App\\Controller\\Api\\PrioridadesController::doPut'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/api/prioridades')), array(), array()),
        'app_api_prioridades_dodelete' => array(array('id'), array('_controller' => 'App\\Controller\\Api\\PrioridadesController::doDelete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/api/prioridades')), array(), array()),
        'app_api_servicos_doget' => array(array('id'), array('_controller' => 'App\\Controller\\Api\\ServicosController::doGet'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/api/servicos')), array(), array()),
        'app_api_servicos_dofind' => array(array(), array('_controller' => 'App\\Controller\\Api\\ServicosController::doFind'), array(), array(array('text', '/api/servicos')), array(), array()),
        'app_api_servicos_dopost' => array(array(), array('_controller' => 'App\\Controller\\Api\\ServicosController::doPost'), array(), array(array('text', '/api/servicos')), array(), array()),
        'app_api_servicos_doput' => array(array('id'), array('_controller' => 'App\\Controller\\Api\\ServicosController::doPut'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/api/servicos')), array(), array()),
        'app_api_servicos_dodelete' => array(array('id'), array('_controller' => 'App\\Controller\\Api\\ServicosController::doDelete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/api/servicos')), array(), array()),
        'app_api_triagem_imprimir' => array(array('id'), array('_controller' => 'App\\Controller\\Api\\TriagemController::imprimir'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/api/print')), array(), array()),
        'app_api_triagem_distribui' => array(array(), array('_controller' => 'App\\Controller\\Api\\TriagemController::distribui'), array(), array(array('text', '/api/distribui')), array(), array()),
        'app_api_unidades_servicos' => array(array('id'), array('_controller' => 'App\\Controller\\Api\\UnidadesController::servicos'), array(), array(array('text', '/servicos'), array('variable', '/', '[^/]++', 'id'), array('text', '/api/unidades')), array(), array()),
        'app_api_unidades_atendimentos' => array(array('id'), array('_controller' => 'App\\Controller\\Api\\UnidadesController::atendimentos'), array(), array(array('text', '/atendimentos'), array('variable', '/', '[^/]++', 'id'), array('text', '/api/unidades')), array(), array()),
        'app_api_unidades_doget' => array(array('id'), array('_controller' => 'App\\Controller\\Api\\UnidadesController::doGet'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/api/unidades')), array(), array()),
        'app_api_unidades_dofind' => array(array(), array('_controller' => 'App\\Controller\\Api\\UnidadesController::doFind'), array(), array(array('text', '/api/unidades')), array(), array()),
        'app_api_unidades_dopost' => array(array(), array('_controller' => 'App\\Controller\\Api\\UnidadesController::doPost'), array(), array(array('text', '/api/unidades')), array(), array()),
        'app_api_unidades_doput' => array(array('id'), array('_controller' => 'App\\Controller\\Api\\UnidadesController::doPut'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/api/unidades')), array(), array()),
        'app_api_unidades_dodelete' => array(array('id'), array('_controller' => 'App\\Controller\\Api\\UnidadesController::doDelete'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/api/unidades')), array(), array()),
        'app_api_usuarios_doget' => array(array('id'), array('_controller' => 'App\\Controller\\Api\\UsuariosController::doGet'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/api/usuarios')), array(), array()),
        'app_api_usuarios_dofind' => array(array(), array('_controller' => 'App\\Controller\\Api\\UsuariosController::doFind'), array(), array(array('text', '/api/usuarios')), array(), array()),
        'home' => array(array(), array('_controller' => 'App\\Controller\\DefaultController::index'), array(), array(array('text', '/')), array(), array()),
        'about' => array(array(), array('_controller' => 'App\\Controller\\DefaultController::about'), array(), array(array('text', '/about')), array(), array()),
        'app_default_unidades' => array(array(), array('_controller' => 'App\\Controller\\DefaultController::unidades'), array(), array(array('text', '/unidades')), array(), array()),
        'app_default_setunidade' => array(array('id'), array('_controller' => 'App\\Controller\\DefaultController::setUnidade'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/set_unidade')), array(), array()),
        'app_default_menu' => array(array(), array('_controller' => 'App\\Controller\\DefaultController::menu'), array(), array(array('text', '/menu')), array(), array()),
        'profile_index' => array(array(), array('_controller' => 'App\\Controller\\ProfileController::index'), array(), array(array('text', '/profile/')), array(), array()),
        'profile_update' => array(array(), array('_controller' => 'App\\Controller\\ProfileController::update'), array(), array(array('text', '/profile/')), array(), array()),
        'app_profile_password' => array(array(), array('_controller' => 'App\\Controller\\ProfileController::password'), array(), array(array('text', '/profile/password')), array(), array()),
        'app_security_login' => array(array(), array('_controller' => 'App\\Controller\\SecurityController::login'), array(), array(array('text', '/login')), array(), array()),
        '_twig_error_test' => array(array('code', '_format'), array('_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code' => '\\d+'), array(array('variable', '.', '[^/]++', '_format'), array('variable', '/', '\\d+', 'code'), array('text', '/_error')), array(), array()),
        '_wdt' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::toolbarAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_wdt')), array(), array()),
        '_profiler_home' => array(array(), array('_controller' => 'web_profiler.controller.profiler::homeAction'), array(), array(array('text', '/_profiler/')), array(), array()),
        '_profiler_search' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchAction'), array(), array(array('text', '/_profiler/search')), array(), array()),
        '_profiler_search_bar' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchBarAction'), array(), array(array('text', '/_profiler/search_bar')), array(), array()),
        '_profiler_phpinfo' => array(array(), array('_controller' => 'web_profiler.controller.profiler::phpinfoAction'), array(), array(array('text', '/_profiler/phpinfo')), array(), array()),
        '_profiler_search_results' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array(), array(array('text', '/search/results'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_open_file' => array(array(), array('_controller' => 'web_profiler.controller.profiler::openAction'), array(), array(array('text', '/_profiler/open')), array(), array()),
        '_profiler' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::panelAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_router' => array(array('token'), array('_controller' => 'web_profiler.controller.router::panelAction'), array(), array(array('text', '/router'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::showAction'), array(), array(array('text', '/exception'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception_css' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::cssAction'), array(), array(array('text', '/exception.css'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        'login_check' => array(array(), array(), array(), array(array('text', '/login_check')), array(), array()),
        'logout' => array(array(), array(), array(), array(array('text', '/logout')), array(), array()),
        'novosga_settings_index' => array(array(), array('_controller' => 'Novosga\\SettingsBundle\\Controller\\DefaultController::index'), array(), array(array('text', '/novosga.settings/')), array(), array()),
        'novosga_settings_servicos' => array(array(), array('_controller' => 'Novosga\\SettingsBundle\\Controller\\DefaultController::servicos'), array(), array(array('text', '/novosga.settings/servicos')), array(), array()),
        'novosga_settings_servicos_unidade' => array(array(), array('_controller' => 'Novosga\\SettingsBundle\\Controller\\DefaultController::servicosUnidade'), array(), array(array('text', '/novosga.settings/servicos_unidade')), array(), array()),
        'novosga_settings_add_servico_unidade' => array(array(), array('_controller' => 'Novosga\\SettingsBundle\\Controller\\DefaultController::addServico'), array(), array(array('text', '/novosga.settings/servicos_unidade')), array(), array()),
        'novosga_settings_remove_servico_unidade' => array(array('id'), array('_controller' => 'Novosga\\SettingsBundle\\Controller\\DefaultController::removeServicoUnidade'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/novosga.settings/servicos_unidade')), array(), array()),
        'novosga_settings_update_servicos_unidade' => array(array('id'), array('_controller' => 'Novosga\\SettingsBundle\\Controller\\DefaultController::updateServico'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/novosga.settings/servicos_unidade')), array(), array()),
        'novosga_settings_contadores' => array(array(), array('_controller' => 'Novosga\\SettingsBundle\\Controller\\DefaultController::contadores'), array(), array(array('text', '/novosga.settings/contadores')), array(), array()),
        'novosga_settings_update_impressao' => array(array(), array('_controller' => 'Novosga\\SettingsBundle\\Controller\\DefaultController::updateImpressao'), array(), array(array('text', '/novosga.settings/update_impressao')), array(), array()),
        'novosga_settings_reiniciar_contador' => array(array('id'), array('_controller' => 'Novosga\\SettingsBundle\\Controller\\DefaultController::reiniciarContador'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/novosga.settings/reiniciar')), array(), array()),
        'novosga_settings_limpar_dados' => array(array(), array('_controller' => 'Novosga\\SettingsBundle\\Controller\\DefaultController::limparDados'), array(), array(array('text', '/novosga.settings/limpar')), array(), array()),
        'novosga_settings_acumular_atendimentos' => array(array(), array('_controller' => 'Novosga\\SettingsBundle\\Controller\\DefaultController::reiniciar'), array(), array(array('text', '/novosga.settings/acumular_atendimentos')), array(), array()),
        'novosga_settings_add_servico_usuario' => array(array('usuarioId', 'servicoId'), array('_controller' => 'Novosga\\SettingsBundle\\Controller\\DefaultController::addServicoUsuario'), array(), array(array('variable', '/', '[^/]++', 'servicoId'), array('variable', '/', '[^/]++', 'usuarioId'), array('text', '/novosga.settings/servico_usuario')), array(), array()),
        'novosga_settings_remove_servico_usuario' => array(array('usuarioId', 'servicoId'), array('_controller' => 'Novosga\\SettingsBundle\\Controller\\DefaultController::removeServicoUsuario'), array(), array(array('variable', '/', '[^/]++', 'servicoId'), array('variable', '/', '[^/]++', 'usuarioId'), array('text', '/novosga.settings/servico_usuario')), array(), array()),
        'novosga_settings_update_servico_usuario' => array(array('usuarioId', 'servicoId'), array('_controller' => 'Novosga\\SettingsBundle\\Controller\\DefaultController::updateServicoUsuario'), array(), array(array('variable', '/', '[^/]++', 'servicoId'), array('variable', '/', '[^/]++', 'usuarioId'), array('text', '/novosga.settings/servico_usuario')), array(), array()),
        'novosga_settings_update_usuario' => array(array('id'), array('_controller' => 'Novosga\\SettingsBundle\\Controller\\DefaultController::updateUsuario'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/novosga.settings/usuario')), array(), array()),
        'novosga_triage_index' => array(array(), array('_controller' => 'Novosga\\TriageBundle\\Controller\\DefaultController::index'), array(), array(array('text', '/novosga.triage/')), array(), array()),
        'novosga_triage_print' => array(array('id'), array('_controller' => 'Novosga\\TriageBundle\\Controller\\DefaultController::imprimir'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/novosga.triage/imprimir')), array(), array()),
        'novosga_triage_ajax_update' => array(array(), array('_controller' => 'Novosga\\TriageBundle\\Controller\\DefaultController::ajaxUpdate'), array(), array(array('text', '/novosga.triage/ajax_update')), array(), array()),
        'novosga_triage_servico_info' => array(array(), array('_controller' => 'Novosga\\TriageBundle\\Controller\\DefaultController::servicoInfo'), array(), array(array('text', '/novosga.triage/servico_info')), array(), array()),
        'novosga_triage_distribui_senha' => array(array(), array('_controller' => 'Novosga\\TriageBundle\\Controller\\DefaultController::distribuiSenha'), array(), array(array('text', '/novosga.triage/distribui_senha')), array(), array()),
        'novosga_triage_distribui_agendamento' => array(array('id'), array('_controller' => 'Novosga\\TriageBundle\\Controller\\DefaultController::distribuiSenhaAgendamento'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/novosga.triage/distribui_agendamento')), array(), array()),
        'novosga_triage_consulta_senha' => array(array(), array('_controller' => 'Novosga\\TriageBundle\\Controller\\DefaultController::consultaSenha'), array(), array(array('text', '/novosga.triage/consulta_senha')), array(), array()),
        'novosga_triage_clientes' => array(array(), array('_controller' => 'Novosga\\TriageBundle\\Controller\\DefaultController::clientes'), array(), array(array('text', '/novosga.triage/clientes')), array(), array()),
        'novosga_triage_atendamentos' => array(array('id'), array('_controller' => 'Novosga\\TriageBundle\\Controller\\DefaultController::agendamentos'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/novosga.triage/agendamentos')), array(), array()),
        'novosga_monitor_index' => array(array(), array('_controller' => 'Novosga\\MonitorBundle\\Controller\\DefaultController::index'), array(), array(array('text', '/novosga.monitor/')), array(), array()),
        'novosga_monitor_ajaxupdate' => array(array(), array('_controller' => 'Novosga\\MonitorBundle\\Controller\\DefaultController::ajaxUpdate'), array(), array(array('text', '/novosga.monitor/ajax_update')), array(), array()),
        'novosga_monitor_infosenha' => array(array('id'), array('_controller' => 'Novosga\\MonitorBundle\\Controller\\DefaultController::infoSenha'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/novosga.monitor/info_senha')), array(), array()),
        'novosga_monitor_buscar' => array(array(), array('_controller' => 'Novosga\\MonitorBundle\\Controller\\DefaultController::buscar'), array(), array(array('text', '/novosga.monitor/buscar')), array(), array()),
        'novosga_monitor_transferir' => array(array('id'), array('_controller' => 'Novosga\\MonitorBundle\\Controller\\DefaultController::transferir'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/novosga.monitor/transferir')), array(), array()),
        'novosga_monitor_reativar' => array(array('id'), array('_controller' => 'Novosga\\MonitorBundle\\Controller\\DefaultController::reativar'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/novosga.monitor/reativar')), array(), array()),
        'novosga_monitor_cancelar' => array(array('id'), array('_controller' => 'Novosga\\MonitorBundle\\Controller\\DefaultController::cancelar'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/novosga.monitor/cancelar')), array(), array()),
        'novosga_reports_index' => array(array(), array('_controller' => 'Novosga\\ReportsBundle\\Controller\\DefaultController::index'), array(), array(array('text', '/novosga.reports/')), array(), array()),
        'novosga_reports_chart' => array(array(), array('_controller' => 'Novosga\\ReportsBundle\\Controller\\DefaultController::chart'), array(), array(array('text', '/novosga.reports/chart')), array(), array()),
        'novosga_reports_report' => array(array(), array('_controller' => 'Novosga\\ReportsBundle\\Controller\\DefaultController::report'), array(), array(array('text', '/novosga.reports/report')), array(), array()),
        'novosga_users_index' => array(array(), array('_controller' => 'Novosga\\UsersBundle\\Controller\\DefaultController::index'), array(), array(array('text', '/novosga.users/')), array(), array()),
        'novosga_users_new' => array(array(), array('_controller' => 'Novosga\\UsersBundle\\Controller\\DefaultController::form'), array(), array(array('text', '/novosga.users/new')), array(), array()),
        'novosga_users_edit' => array(array('id'), array('_controller' => 'Novosga\\UsersBundle\\Controller\\DefaultController::form'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'id'), array('text', '/novosga.users')), array(), array()),
        'novosga_users_default_novalotacao' => array(array(), array('_controller' => 'Novosga\\UsersBundle\\Controller\\DefaultController::novaLotacao'), array(), array(array('text', '/novosga.users/novalotacao')), array(), array()),
        'novosga_users_default_perfis' => array(array('id'), array('_controller' => 'Novosga\\UsersBundle\\Controller\\DefaultController::perfis'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/novosga.users/perfis')), array(), array()),
        'novosga_users_default_unidades' => array(array(), array('_controller' => 'Novosga\\UsersBundle\\Controller\\DefaultController::unidades'), array(), array(array('text', '/novosga.users/unidades')), array(), array()),
        'novosga_users_password' => array(array('id'), array('_controller' => 'Novosga\\UsersBundle\\Controller\\DefaultController::password'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/novosga.users/password')), array(), array()),
        'novosga_attendance_index' => array(array(), array('_controller' => 'Novosga\\AttendanceBundle\\Controller\\DefaultController::index'), array(), array(array('text', '/novosga.attendance/')), array(), array()),
        'novosga_attendance_setlocal' => array(array(), array('_controller' => 'Novosga\\AttendanceBundle\\Controller\\DefaultController::setLocal'), array(), array(array('text', '/novosga.attendance/set_local')), array(), array()),
        'novosga_attendance_ajaxupdate' => array(array(), array('_controller' => 'Novosga\\AttendanceBundle\\Controller\\DefaultController::ajaxUpdate'), array(), array(array('text', '/novosga.attendance/ajax_update')), array(), array()),
        'novosga_attendance_chamar' => array(array(), array('_controller' => 'Novosga\\AttendanceBundle\\Controller\\DefaultController::chamar'), array(), array(array('text', '/novosga.attendance/chamar')), array(), array()),
        'novosga_attendance_iniciar' => array(array(), array('_controller' => 'Novosga\\AttendanceBundle\\Controller\\DefaultController::iniciar'), array(), array(array('text', '/novosga.attendance/iniciar')), array(), array()),
        'novosga_attendance_naocompareceu' => array(array(), array('_controller' => 'Novosga\\AttendanceBundle\\Controller\\DefaultController::naoCompareceu'), array(), array(array('text', '/novosga.attendance/nao_compareceu')), array(), array()),
        'novosga_attendance_encerrar' => array(array(), array('_controller' => 'Novosga\\AttendanceBundle\\Controller\\DefaultController::encerrar'), array(), array(array('text', '/novosga.attendance/encerrar')), array(), array()),
        'novosga_attendance_redirecionar' => array(array(), array('_controller' => 'Novosga\\AttendanceBundle\\Controller\\DefaultController::redirecionar'), array(), array(array('text', '/novosga.attendance/redirecionar')), array(), array()),
        'novosga_attendance_infosenha' => array(array('id'), array('_controller' => 'Novosga\\AttendanceBundle\\Controller\\DefaultController::infoSenha'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/novosga.attendance/info_senha')), array(), array()),
        'novosga_attendance_consultasenha' => array(array(), array('_controller' => 'Novosga\\AttendanceBundle\\Controller\\DefaultController::consultaSenha'), array(), array(array('text', '/novosga.attendance/consulta_senha')), array(), array()),
        'novosga_attendance_usuarios' => array(array('id'), array('_controller' => 'Novosga\\AttendanceBundle\\Controller\\DefaultController::usuarios'), array(), array(array('variable', '/', '[^/]++', 'id'), array('text', '/novosga.attendance/usuarios')), array(), array()),
        'fos_oauth_server_token' => array(array(), array('_controller' => 'fos_oauth_server.controller.token:tokenAction', 'route' => 'fos_oauth_server_token'), array(), array(array('text', '/api/token')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && (self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
            unset($parameters['_locale']);
            $name .= '.'.$locale;
        } elseif (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
