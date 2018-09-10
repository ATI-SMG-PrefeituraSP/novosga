<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = $allowSchemes = array();
        if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
            return $ret;
        }
        if ($allow) {
            throw new MethodNotAllowedException(array_keys($allow));
        }
        if (!in_array($this->context->getMethod(), array('HEAD', 'GET'), true)) {
            // no-op
        } elseif ($allowSchemes) {
            redirect_scheme:
            $scheme = $this->context->getScheme();
            $this->context->setScheme(key($allowSchemes));
            try {
                if ($ret = $this->doMatch($pathinfo)) {
                    return $this->redirect($pathinfo, $ret['_route'], $this->context->getScheme()) + $ret;
                }
            } finally {
                $this->context->setScheme($scheme);
            }
        } elseif ('/' !== $pathinfo) {
            $pathinfo = '/' !== $pathinfo[-1] ? $pathinfo.'/' : substr($pathinfo, 0, -1);
            if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
                return $this->redirect($pathinfo, $ret['_route']) + $ret;
            }
            if ($allowSchemes) {
                goto redirect_scheme;
            }
        }

        throw new ResourceNotFoundException();
    }

    private function doMatch(string $rawPathinfo, array &$allow = array(), array &$allowSchemes = array()): ?array
    {
        $allow = $allowSchemes = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        switch ($pathinfo) {
            case '/admin/api/oauth-clients':
                // admin_api_clients
                $ret = array('_route' => 'admin_api_clients', '_controller' => 'App\\Controller\\Admin\\ApiController::oauthClients');
                if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                    $allow += $a;
                    goto not_admin_api_clients;
                }

                return $ret;
                not_admin_api_clients:
                // admin_api_newclient
                $ret = array('_route' => 'admin_api_newclient', '_controller' => 'App\\Controller\\Admin\\ApiController::newOauthClient');
                if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                    $allow += $a;
                    goto not_admin_api_newclient;
                }

                return $ret;
                not_admin_api_newclient:
                break;
            case '/api/agendamentos':
                // app_api_agendamentos_post
                $ret = array('_route' => 'app_api_agendamentos_post', '_controller' => 'App\\Controller\\Api\\AgendamentosController::post');
                if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                    $allow += $a;
                    goto not_app_api_agendamentos_post;
                }

                return $ret;
                not_app_api_agendamentos_post:
                // app_api_agendamentos_dofind
                $ret = array('_route' => 'app_api_agendamentos_dofind', '_controller' => 'App\\Controller\\Api\\AgendamentosController::doFind');
                if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                    $allow += $a;
                    goto not_app_api_agendamentos_dofind;
                }

                return $ret;
                not_app_api_agendamentos_dofind:
                break;
            case '/api/departamentos':
                // app_api_departamentos_dofind
                $ret = array('_route' => 'app_api_departamentos_dofind', '_controller' => 'App\\Controller\\Api\\DepartamentosController::doFind');
                if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                    $allow += $a;
                    goto not_app_api_departamentos_dofind;
                }

                return $ret;
                not_app_api_departamentos_dofind:
                // app_api_departamentos_dopost
                $ret = array('_route' => 'app_api_departamentos_dopost', '_controller' => 'App\\Controller\\Api\\DepartamentosController::doPost');
                if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                    $allow += $a;
                    goto not_app_api_departamentos_dopost;
                }

                return $ret;
                not_app_api_departamentos_dopost:
                break;
            case '/api/locais':
                // app_api_locais_dofind
                $ret = array('_route' => 'app_api_locais_dofind', '_controller' => 'App\\Controller\\Api\\LocaisController::doFind');
                if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                    $allow += $a;
                    goto not_app_api_locais_dofind;
                }

                return $ret;
                not_app_api_locais_dofind:
                // app_api_locais_dopost
                $ret = array('_route' => 'app_api_locais_dopost', '_controller' => 'App\\Controller\\Api\\LocaisController::doPost');
                if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                    $allow += $a;
                    goto not_app_api_locais_dopost;
                }

                return $ret;
                not_app_api_locais_dopost:
                break;
            case '/api/prioridades':
                // app_api_prioridades_dofind
                $ret = array('_route' => 'app_api_prioridades_dofind', '_controller' => 'App\\Controller\\Api\\PrioridadesController::doFind');
                if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                    $allow += $a;
                    goto not_app_api_prioridades_dofind;
                }

                return $ret;
                not_app_api_prioridades_dofind:
                // app_api_prioridades_dopost
                $ret = array('_route' => 'app_api_prioridades_dopost', '_controller' => 'App\\Controller\\Api\\PrioridadesController::doPost');
                if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                    $allow += $a;
                    goto not_app_api_prioridades_dopost;
                }

                return $ret;
                not_app_api_prioridades_dopost:
                break;
            case '/api/servicos':
                // app_api_servicos_dofind
                $ret = array('_route' => 'app_api_servicos_dofind', '_controller' => 'App\\Controller\\Api\\ServicosController::doFind');
                if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                    $allow += $a;
                    goto not_app_api_servicos_dofind;
                }

                return $ret;
                not_app_api_servicos_dofind:
                // app_api_servicos_dopost
                $ret = array('_route' => 'app_api_servicos_dopost', '_controller' => 'App\\Controller\\Api\\ServicosController::doPost');
                if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                    $allow += $a;
                    goto not_app_api_servicos_dopost;
                }

                return $ret;
                not_app_api_servicos_dopost:
                break;
            case '/api/unidades':
                // app_api_unidades_dofind
                $ret = array('_route' => 'app_api_unidades_dofind', '_controller' => 'App\\Controller\\Api\\UnidadesController::doFind');
                if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                    $allow += $a;
                    goto not_app_api_unidades_dofind;
                }

                return $ret;
                not_app_api_unidades_dofind:
                // app_api_unidades_dopost
                $ret = array('_route' => 'app_api_unidades_dopost', '_controller' => 'App\\Controller\\Api\\UnidadesController::doPost');
                if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                    $allow += $a;
                    goto not_app_api_unidades_dopost;
                }

                return $ret;
                not_app_api_unidades_dopost:
                break;
            case '/profile/':
                // profile_index
                $ret = array('_route' => 'profile_index', '_controller' => 'App\\Controller\\ProfileController::index');
                if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                    $allow += $a;
                    goto not_profile_index;
                }

                return $ret;
                not_profile_index:
                // profile_update
                $ret = array('_route' => 'profile_update', '_controller' => 'App\\Controller\\ProfileController::update');
                if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                    $allow += $a;
                    goto not_profile_update;
                }

                return $ret;
                not_profile_update:
                break;
            case '/novosga.settings/servicos_unidade':
                // novosga_settings_servicos_unidade
                $ret = array('_route' => 'novosga_settings_servicos_unidade', '_controller' => 'Novosga\\SettingsBundle\\Controller\\DefaultController::servicosUnidade');
                if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                    $allow += $a;
                    goto not_novosga_settings_servicos_unidade;
                }

                return $ret;
                not_novosga_settings_servicos_unidade:
                // novosga_settings_add_servico_unidade
                $ret = array('_route' => 'novosga_settings_add_servico_unidade', '_controller' => 'Novosga\\SettingsBundle\\Controller\\DefaultController::addServico');
                if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                    $allow += $a;
                    goto not_novosga_settings_add_servico_unidade;
                }

                return $ret;
                not_novosga_settings_add_servico_unidade:
                break;
            default:
                $routes = array(
                    '/admin/' => array(array('_route' => 'admin_index', '_controller' => 'App\\Controller\\Admin\\AdminController::index'), null, null, null),
                    '/admin/acumular_atendimentos' => array(array('_route' => 'admin_acumular_atendimentos', '_controller' => 'App\\Controller\\Admin\\AdminController::acumularAtendimentos'), null, array('POST' => 0), null),
                    '/admin/limpar_atendimentos' => array(array('_route' => 'admin_limpar_atendimentos', '_controller' => 'App\\Controller\\Admin\\AdminController::limparAtendimentos'), null, array('POST' => 0), null),
                    '/admin/api/' => array(array('_route' => 'admin_api_index', '_controller' => 'App\\Controller\\Admin\\ApiController::index'), null, null, null),
                    '/admin/departamentos/' => array(array('_route' => 'admin_departamentos_index', '_controller' => 'App\\Controller\\Admin\\DepartamentoController::index'), null, null, null),
                    '/admin/departamentos/new' => array(array('_route' => 'admin_departamentos_new', '_controller' => 'App\\Controller\\Admin\\DepartamentoController::form'), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/locais/' => array(array('_route' => 'admin_locais_index', '_controller' => 'App\\Controller\\Admin\\LocaisController::index'), null, null, null),
                    '/admin/locais/new' => array(array('_route' => 'admin_locais_new', '_controller' => 'App\\Controller\\Admin\\LocaisController::form'), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/modulos/' => array(array('_route' => 'admin_modulos_index', '_controller' => 'App\\Controller\\Admin\\ModulosController::index'), null, null, null),
                    '/admin/modulos/update' => array(array('_route' => 'admin_modulos_update', '_controller' => 'App\\Controller\\Admin\\ModulosController::update'), null, null, null),
                    '/admin/perfis/' => array(array('_route' => 'admin_perfis_index', '_controller' => 'App\\Controller\\Admin\\PerfisController::index'), null, null, null),
                    '/admin/perfis/new' => array(array('_route' => 'admin_perfis_new', '_controller' => 'App\\Controller\\Admin\\PerfisController::form'), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/prioridades/' => array(array('_route' => 'admin_prioridades_index', '_controller' => 'App\\Controller\\Admin\\PrioridadesController::index'), null, null, null),
                    '/admin/prioridades/new' => array(array('_route' => 'admin_prioridades_new', '_controller' => 'App\\Controller\\Admin\\PrioridadesController::form'), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/servicos/' => array(array('_route' => 'admin_servicos_index', '_controller' => 'App\\Controller\\Admin\\ServicosController::index'), null, array('GET' => 0), null),
                    '/admin/servicos/new' => array(array('_route' => 'admin_servicos_new', '_controller' => 'App\\Controller\\Admin\\ServicosController::form'), null, array('GET' => 0, 'POST' => 1), null),
                    '/admin/unidades/' => array(array('_route' => 'admin_unidades_index', '_controller' => 'App\\Controller\\Admin\\UnidadesController::index'), null, null, null),
                    '/admin/unidades/new' => array(array('_route' => 'admin_unidades_new', '_controller' => 'App\\Controller\\Admin\\UnidadesController::form'), null, array('GET' => 0, 'POST' => 1), null),
                    '/api/atendimentos' => array(array('_route' => 'app_api_atendimentos_dofind', '_controller' => 'App\\Controller\\Api\\AtendimentosController::doFind'), null, array('GET' => 0), null),
                    '/api/atendimentoshistorico' => array(array('_route' => 'app_api_atendimentoshistorico_dofind', '_controller' => 'App\\Controller\\Api\\AtendimentosHistoricoController::doFind'), null, array('GET' => 0), null),
                    '/api' => array(array('_route' => 'app_api_default_index', '_controller' => 'App\\Controller\\Api\\DefaultController::index'), null, null, null),
                    '/api/' => array(array('_route' => 'app_api_default_index_1', '_controller' => 'App\\Controller\\Api\\DefaultController::index'), null, null, null),
                    '/api/filas' => array(array('_route' => 'app_api_filas_alterastatus', '_controller' => 'App\\Controller\\Api\\FilasController::alteraStatus'), null, array('PUT' => 0), null),
                    '/api/distribui' => array(array('_route' => 'app_api_triagem_distribui', '_controller' => 'App\\Controller\\Api\\TriagemController::distribui'), null, array('POST' => 0), null),
                    '/api/usuarios' => array(array('_route' => 'app_api_usuarios_dofind', '_controller' => 'App\\Controller\\Api\\UsuariosController::doFind'), null, array('GET' => 0), null),
                    '/' => array(array('_route' => 'home', '_controller' => 'App\\Controller\\DefaultController::index'), null, null, null),
                    '/about' => array(array('_route' => 'about', '_controller' => 'App\\Controller\\DefaultController::about'), null, null, null),
                    '/unidades' => array(array('_route' => 'app_default_unidades', '_controller' => 'App\\Controller\\DefaultController::unidades'), null, array('GET' => 0), null),
                    '/menu' => array(array('_route' => 'app_default_menu', '_controller' => 'App\\Controller\\DefaultController::menu'), null, array('GET' => 0), null),
                    '/profile/password' => array(array('_route' => 'app_profile_password', '_controller' => 'App\\Controller\\ProfileController::password'), null, array('POST' => 0), null),
                    '/login' => array(array('_route' => 'app_security_login', '_controller' => 'App\\Controller\\SecurityController::login'), null, null, null),
                    '/_profiler/' => array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null),
                    '/_profiler/search' => array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null),
                    '/_profiler/search_bar' => array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null),
                    '/_profiler/phpinfo' => array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null),
                    '/_profiler/open' => array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null),
                    '/login_check' => array(array('_route' => 'login_check'), null, null, null),
                    '/logout' => array(array('_route' => 'logout'), null, null, null),
                    '/novosga.settings/' => array(array('_route' => 'novosga_settings_index', '_controller' => 'Novosga\\SettingsBundle\\Controller\\DefaultController::index'), null, array('GET' => 0), null),
                    '/novosga.settings/servicos' => array(array('_route' => 'novosga_settings_servicos', '_controller' => 'Novosga\\SettingsBundle\\Controller\\DefaultController::servicos'), null, array('GET' => 0), null),
                    '/novosga.settings/contadores' => array(array('_route' => 'novosga_settings_contadores', '_controller' => 'Novosga\\SettingsBundle\\Controller\\DefaultController::contadores'), null, array('GET' => 0), null),
                    '/novosga.settings/update_impressao' => array(array('_route' => 'novosga_settings_update_impressao', '_controller' => 'Novosga\\SettingsBundle\\Controller\\DefaultController::updateImpressao'), null, array('POST' => 0), null),
                    '/novosga.settings/limpar' => array(array('_route' => 'novosga_settings_limpar_dados', '_controller' => 'Novosga\\SettingsBundle\\Controller\\DefaultController::limparDados'), null, array('POST' => 0), null),
                    '/novosga.settings/acumular_atendimentos' => array(array('_route' => 'novosga_settings_acumular_atendimentos', '_controller' => 'Novosga\\SettingsBundle\\Controller\\DefaultController::reiniciar'), null, array('POST' => 0), null),
                    '/novosga.triage/' => array(array('_route' => 'novosga_triage_index', '_controller' => 'Novosga\\TriageBundle\\Controller\\DefaultController::index'), null, array('GET' => 0), null),
                    '/novosga.triage/ajax_update' => array(array('_route' => 'novosga_triage_ajax_update', '_controller' => 'Novosga\\TriageBundle\\Controller\\DefaultController::ajaxUpdate'), null, array('GET' => 0), null),
                    '/novosga.triage/servico_info' => array(array('_route' => 'novosga_triage_servico_info', '_controller' => 'Novosga\\TriageBundle\\Controller\\DefaultController::servicoInfo'), null, array('GET' => 0), null),
                    '/novosga.triage/distribui_senha' => array(array('_route' => 'novosga_triage_distribui_senha', '_controller' => 'Novosga\\TriageBundle\\Controller\\DefaultController::distribuiSenha'), null, array('POST' => 0), null),
                    '/novosga.triage/consulta_senha' => array(array('_route' => 'novosga_triage_consulta_senha', '_controller' => 'Novosga\\TriageBundle\\Controller\\DefaultController::consultaSenha'), null, array('GET' => 0), null),
                    '/novosga.triage/clientes' => array(array('_route' => 'novosga_triage_clientes', '_controller' => 'Novosga\\TriageBundle\\Controller\\DefaultController::clientes'), null, array('GET' => 0), null),
                    '/novosga.monitor/' => array(array('_route' => 'novosga_monitor_index', '_controller' => 'Novosga\\MonitorBundle\\Controller\\DefaultController::index'), null, array('GET' => 0), null),
                    '/novosga.monitor/ajax_update' => array(array('_route' => 'novosga_monitor_ajaxupdate', '_controller' => 'Novosga\\MonitorBundle\\Controller\\DefaultController::ajaxUpdate'), null, array('GET' => 0), null),
                    '/novosga.monitor/buscar' => array(array('_route' => 'novosga_monitor_buscar', '_controller' => 'Novosga\\MonitorBundle\\Controller\\DefaultController::buscar'), null, array('GET' => 0), null),
                    '/novosga.reports/' => array(array('_route' => 'novosga_reports_index', '_controller' => 'Novosga\\ReportsBundle\\Controller\\DefaultController::index'), null, array('GET' => 0), null),
                    '/novosga.reports/chart' => array(array('_route' => 'novosga_reports_chart', '_controller' => 'Novosga\\ReportsBundle\\Controller\\DefaultController::chart'), null, array('POST' => 0), null),
                    '/novosga.reports/report' => array(array('_route' => 'novosga_reports_report', '_controller' => 'Novosga\\ReportsBundle\\Controller\\DefaultController::report'), null, array('GET' => 0), null),
                    '/novosga.users/' => array(array('_route' => 'novosga_users_index', '_controller' => 'Novosga\\UsersBundle\\Controller\\DefaultController::index'), null, array('GET' => 0), null),
                    '/novosga.users/new' => array(array('_route' => 'novosga_users_new', '_controller' => 'Novosga\\UsersBundle\\Controller\\DefaultController::form'), null, array('GET' => 0, 'POST' => 1), null),
                    '/novosga.users/novalotacao' => array(array('_route' => 'novosga_users_default_novalotacao', '_controller' => 'Novosga\\UsersBundle\\Controller\\DefaultController::novaLotacao'), null, array('GET' => 0), null),
                    '/novosga.users/unidades' => array(array('_route' => 'novosga_users_default_unidades', '_controller' => 'Novosga\\UsersBundle\\Controller\\DefaultController::unidades'), null, array('GET' => 0), null),
                    '/novosga.attendance/' => array(array('_route' => 'novosga_attendance_index', '_controller' => 'Novosga\\AttendanceBundle\\Controller\\DefaultController::index'), null, array('GET' => 0), null),
                    '/novosga.attendance/set_local' => array(array('_route' => 'novosga_attendance_setlocal', '_controller' => 'Novosga\\AttendanceBundle\\Controller\\DefaultController::setLocal'), null, array('POST' => 0), null),
                    '/novosga.attendance/ajax_update' => array(array('_route' => 'novosga_attendance_ajaxupdate', '_controller' => 'Novosga\\AttendanceBundle\\Controller\\DefaultController::ajaxUpdate'), null, array('GET' => 0), null),
                    '/novosga.attendance/chamar' => array(array('_route' => 'novosga_attendance_chamar', '_controller' => 'Novosga\\AttendanceBundle\\Controller\\DefaultController::chamar'), null, array('POST' => 0), null),
                    '/novosga.attendance/iniciar' => array(array('_route' => 'novosga_attendance_iniciar', '_controller' => 'Novosga\\AttendanceBundle\\Controller\\DefaultController::iniciar'), null, array('POST' => 0), null),
                    '/novosga.attendance/nao_compareceu' => array(array('_route' => 'novosga_attendance_naocompareceu', '_controller' => 'Novosga\\AttendanceBundle\\Controller\\DefaultController::naoCompareceu'), null, array('POST' => 0), null),
                    '/novosga.attendance/encerrar' => array(array('_route' => 'novosga_attendance_encerrar', '_controller' => 'Novosga\\AttendanceBundle\\Controller\\DefaultController::encerrar'), null, array('POST' => 0), null),
                    '/novosga.attendance/redirecionar' => array(array('_route' => 'novosga_attendance_redirecionar', '_controller' => 'Novosga\\AttendanceBundle\\Controller\\DefaultController::redirecionar'), null, array('POST' => 0), null),
                    '/novosga.attendance/consulta_senha' => array(array('_route' => 'novosga_attendance_consultasenha', '_controller' => 'Novosga\\AttendanceBundle\\Controller\\DefaultController::consultaSenha'), null, array('GET' => 0), null),
                    '/api/token' => array(array('_route' => 'fos_oauth_server_token', '_controller' => 'fos_oauth_server.controller.token:tokenAction', 'route' => 'fos_oauth_server_token'), null, null, null),
                );

                if (!isset($routes[$pathinfo])) {
                    break;
                }
                list($ret, $requiredHost, $requiredMethods, $requiredSchemes) = $routes[$pathinfo];

                $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                    if ($hasRequiredScheme) {
                        $allow += $requiredMethods;
                    }
                    break;
                }
                if (!$hasRequiredScheme) {
                    $allowSchemes += $requiredSchemes;
                    break;
                }

                return $ret;
        }

        $matchedPathinfo = $pathinfo;
        $regexList = array(
            0 => '{^(?'
                    .'|/a(?'
                        .'|dmin/(?'
                            .'|api/oauth\\-clients/([^/]++)(*:47)'
                            .'|departamentos/([^/]++)(?'
                                .'|(*:79)'
                            .')'
                            .'|locais/([^/]++)(?'
                                .'|(*:105)'
                            .')'
                            .'|p(?'
                                .'|erfis/([^/]++)(?'
                                    .'|(*:135)'
                                .')'
                                .'|rioridades/([^/]++)(?'
                                    .'|(*:166)'
                                .')'
                            .')'
                            .'|servicos/([^/]++)(?'
                                .'|(*:196)'
                            .')'
                            .'|unidades/([^/]++)(?'
                                .'|(*:225)'
                            .')'
                        .')'
                        .'|pi/(?'
                            .'|a(?'
                                .'|gendamentos/([^/]++)(*:265)'
                                .'|tendimentos(?'
                                    .'|/([^/]++)(*:296)'
                                    .'|historico/([^/]++)(*:322)'
                                .')'
                            .')'
                            .'|departamentos/([^/]++)(?'
                                .'|(*:357)'
                            .')'
                            .'|filas/([^/]++)(*:380)'
                            .'|locais/([^/]++)(?'
                                .'|(*:406)'
                            .')'
                            .'|u(?'
                                .'|nidades/([^/]++)(?'
                                    .'|/(?'
                                        .'|painel(*:448)'
                                        .'|servicos(*:464)'
                                        .'|atendimentos(*:484)'
                                    .')'
                                    .'|(*:493)'
                                .')'
                                .'|suarios/([^/]++)(*:518)'
                            .')'
                            .'|pri(?'
                                .'|oridades/([^/]++)(?'
                                    .'|(*:553)'
                                .')'
                                .'|nt/([^/]++)(*:573)'
                            .')'
                            .'|servicos/([^/]++)(?'
                                .'|(*:602)'
                            .')'
                        .')'
                    .')'
                    .'|/set_unidade/([^/]++)(*:634)'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:673)'
                        .'|wdt/([^/]++)(*:693)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:739)'
                                .'|router(*:753)'
                                .'|exception(?'
                                    .'|(*:773)'
                                    .'|\\.css(*:786)'
                                .')'
                            .')'
                            .'|(*:796)'
                        .')'
                    .')'
                    .'|/novosga\\.(?'
                        .'|settings/(?'
                            .'|servico(?'
                                .'|s_unidade/([^/]++)(?'
                                    .'|(*:862)'
                                .')'
                                .'|_usuario/([^/]++)/([^/]++)(?'
                                    .'|(*:900)'
                                .')'
                            .')'
                            .'|reiniciar/([^/]++)(*:928)'
                            .'|usuario/([^/]++)(*:952)'
                        .')'
                        .'|triage/(?'
                            .'|imprimir/([^/]++)(*:988)'
                            .'|distribui_agendamento/([^/]++)(*:1026)'
                            .'|agendamentos/([^/]++)(*:1056)'
                        .')'
                        .'|monitor/(?'
                            .'|info_senha/([^/]++)(*:1096)'
                            .'|transferir/([^/]++)(*:1124)'
                            .'|reativar/([^/]++)(*:1150)'
                            .'|cancelar/([^/]++)(*:1176)'
                        .')'
                        .'|users/(?'
                            .'|([^/]++)/edit(*:1208)'
                            .'|p(?'
                                .'|erfis/([^/]++)(*:1235)'
                                .'|assword/([^/]++)(*:1260)'
                            .')'
                        .')'
                        .'|attendance/(?'
                            .'|info_senha/([^/]++)(*:1304)'
                            .'|usuarios/([^/]++)(*:1330)'
                        .')'
                    .')'
                .')$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    case 79:
                        $matches = array('id' => $matches[1] ?? null);

                        // admin_departamentos_edit
                        $ret = $this->mergeDefaults(array('_route' => 'admin_departamentos_edit') + $matches, array('_controller' => 'App\\Controller\\Admin\\DepartamentoController::form'));
                        if (!isset(($a = array('GET' => 0, 'POST' => 1))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_admin_departamentos_edit;
                        }

                        return $ret;
                        not_admin_departamentos_edit:

                        // admin_departamentos_delete
                        $ret = $this->mergeDefaults(array('_route' => 'admin_departamentos_delete') + $matches, array('_controller' => 'App\\Controller\\Admin\\DepartamentoController::delete'));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_admin_departamentos_delete;
                        }

                        return $ret;
                        not_admin_departamentos_delete:

                        break;
                    case 105:
                        $matches = array('id' => $matches[1] ?? null);

                        // admin_locais_edit
                        $ret = $this->mergeDefaults(array('_route' => 'admin_locais_edit') + $matches, array('_controller' => 'App\\Controller\\Admin\\LocaisController::form'));
                        if (!isset(($a = array('GET' => 0, 'POST' => 1))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_admin_locais_edit;
                        }

                        return $ret;
                        not_admin_locais_edit:

                        // admin_locais_delete
                        $ret = $this->mergeDefaults(array('_route' => 'admin_locais_delete') + $matches, array('_controller' => 'App\\Controller\\Admin\\LocaisController::delete'));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_admin_locais_delete;
                        }

                        return $ret;
                        not_admin_locais_delete:

                        break;
                    case 135:
                        $matches = array('id' => $matches[1] ?? null);

                        // admin_perfis_edit
                        $ret = $this->mergeDefaults(array('_route' => 'admin_perfis_edit') + $matches, array('_controller' => 'App\\Controller\\Admin\\PerfisController::form'));
                        if (!isset(($a = array('GET' => 0, 'POST' => 1))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_admin_perfis_edit;
                        }

                        return $ret;
                        not_admin_perfis_edit:

                        // admin_perfis_delete
                        $ret = $this->mergeDefaults(array('_route' => 'admin_perfis_delete') + $matches, array('_controller' => 'App\\Controller\\Admin\\PerfisController::delete'));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_admin_perfis_delete;
                        }

                        return $ret;
                        not_admin_perfis_delete:

                        break;
                    case 166:
                        $matches = array('id' => $matches[1] ?? null);

                        // admin_prioridades_edit
                        $ret = $this->mergeDefaults(array('_route' => 'admin_prioridades_edit') + $matches, array('_controller' => 'App\\Controller\\Admin\\PrioridadesController::form'));
                        if (!isset(($a = array('GET' => 0, 'POST' => 1))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_admin_prioridades_edit;
                        }

                        return $ret;
                        not_admin_prioridades_edit:

                        // admin_prioridades_delete
                        $ret = $this->mergeDefaults(array('_route' => 'admin_prioridades_delete') + $matches, array('_controller' => 'App\\Controller\\Admin\\PrioridadesController::delete'));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_admin_prioridades_delete;
                        }

                        return $ret;
                        not_admin_prioridades_delete:

                        break;
                    case 196:
                        $matches = array('id' => $matches[1] ?? null);

                        // admin_servicos_edit
                        $ret = $this->mergeDefaults(array('_route' => 'admin_servicos_edit') + $matches, array('_controller' => 'App\\Controller\\Admin\\ServicosController::form'));
                        if (!isset(($a = array('GET' => 0, 'POST' => 1))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_admin_servicos_edit;
                        }

                        return $ret;
                        not_admin_servicos_edit:

                        // admin_servicos_delete
                        $ret = $this->mergeDefaults(array('_route' => 'admin_servicos_delete') + $matches, array('_controller' => 'App\\Controller\\Admin\\ServicosController::delete'));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_admin_servicos_delete;
                        }

                        return $ret;
                        not_admin_servicos_delete:

                        break;
                    case 225:
                        $matches = array('id' => $matches[1] ?? null);

                        // admin_unidades_edit
                        $ret = $this->mergeDefaults(array('_route' => 'admin_unidades_edit') + $matches, array('_controller' => 'App\\Controller\\Admin\\UnidadesController::form'));
                        if (!isset(($a = array('GET' => 0, 'POST' => 1))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_admin_unidades_edit;
                        }

                        return $ret;
                        not_admin_unidades_edit:

                        // admin_unidades_delete
                        $ret = $this->mergeDefaults(array('_route' => 'admin_unidades_delete') + $matches, array('_controller' => 'App\\Controller\\Admin\\UnidadesController::delete'));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_admin_unidades_delete;
                        }

                        return $ret;
                        not_admin_unidades_delete:

                        break;
                    case 357:
                        $matches = array('id' => $matches[1] ?? null);

                        // app_api_departamentos_doget
                        $ret = $this->mergeDefaults(array('_route' => 'app_api_departamentos_doget') + $matches, array('_controller' => 'App\\Controller\\Api\\DepartamentosController::doGet'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_app_api_departamentos_doget;
                        }

                        return $ret;
                        not_app_api_departamentos_doget:

                        // app_api_departamentos_doput
                        $ret = $this->mergeDefaults(array('_route' => 'app_api_departamentos_doput') + $matches, array('_controller' => 'App\\Controller\\Api\\DepartamentosController::doPut'));
                        if (!isset(($a = array('PUT' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_app_api_departamentos_doput;
                        }

                        return $ret;
                        not_app_api_departamentos_doput:

                        // app_api_departamentos_dodelete
                        $ret = $this->mergeDefaults(array('_route' => 'app_api_departamentos_dodelete') + $matches, array('_controller' => 'App\\Controller\\Api\\DepartamentosController::doDelete'));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_app_api_departamentos_dodelete;
                        }

                        return $ret;
                        not_app_api_departamentos_dodelete:

                        break;
                    case 406:
                        $matches = array('id' => $matches[1] ?? null);

                        // app_api_locais_doget
                        $ret = $this->mergeDefaults(array('_route' => 'app_api_locais_doget') + $matches, array('_controller' => 'App\\Controller\\Api\\LocaisController::doGet'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_app_api_locais_doget;
                        }

                        return $ret;
                        not_app_api_locais_doget:

                        // app_api_locais_doput
                        $ret = $this->mergeDefaults(array('_route' => 'app_api_locais_doput') + $matches, array('_controller' => 'App\\Controller\\Api\\LocaisController::doPut'));
                        if (!isset(($a = array('PUT' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_app_api_locais_doput;
                        }

                        return $ret;
                        not_app_api_locais_doput:

                        // app_api_locais_dodelete
                        $ret = $this->mergeDefaults(array('_route' => 'app_api_locais_dodelete') + $matches, array('_controller' => 'App\\Controller\\Api\\LocaisController::doDelete'));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_app_api_locais_dodelete;
                        }

                        return $ret;
                        not_app_api_locais_dodelete:

                        break;
                    case 493:
                        $matches = array('id' => $matches[1] ?? null);

                        // app_api_unidades_doget
                        $ret = $this->mergeDefaults(array('_route' => 'app_api_unidades_doget') + $matches, array('_controller' => 'App\\Controller\\Api\\UnidadesController::doGet'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_app_api_unidades_doget;
                        }

                        return $ret;
                        not_app_api_unidades_doget:

                        // app_api_unidades_doput
                        $ret = $this->mergeDefaults(array('_route' => 'app_api_unidades_doput') + $matches, array('_controller' => 'App\\Controller\\Api\\UnidadesController::doPut'));
                        if (!isset(($a = array('PUT' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_app_api_unidades_doput;
                        }

                        return $ret;
                        not_app_api_unidades_doput:

                        // app_api_unidades_dodelete
                        $ret = $this->mergeDefaults(array('_route' => 'app_api_unidades_dodelete') + $matches, array('_controller' => 'App\\Controller\\Api\\UnidadesController::doDelete'));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_app_api_unidades_dodelete;
                        }

                        return $ret;
                        not_app_api_unidades_dodelete:

                        break;
                    case 553:
                        $matches = array('id' => $matches[1] ?? null);

                        // app_api_prioridades_doget
                        $ret = $this->mergeDefaults(array('_route' => 'app_api_prioridades_doget') + $matches, array('_controller' => 'App\\Controller\\Api\\PrioridadesController::doGet'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_app_api_prioridades_doget;
                        }

                        return $ret;
                        not_app_api_prioridades_doget:

                        // app_api_prioridades_doput
                        $ret = $this->mergeDefaults(array('_route' => 'app_api_prioridades_doput') + $matches, array('_controller' => 'App\\Controller\\Api\\PrioridadesController::doPut'));
                        if (!isset(($a = array('PUT' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_app_api_prioridades_doput;
                        }

                        return $ret;
                        not_app_api_prioridades_doput:

                        // app_api_prioridades_dodelete
                        $ret = $this->mergeDefaults(array('_route' => 'app_api_prioridades_dodelete') + $matches, array('_controller' => 'App\\Controller\\Api\\PrioridadesController::doDelete'));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_app_api_prioridades_dodelete;
                        }

                        return $ret;
                        not_app_api_prioridades_dodelete:

                        break;
                    case 602:
                        $matches = array('id' => $matches[1] ?? null);

                        // app_api_servicos_doget
                        $ret = $this->mergeDefaults(array('_route' => 'app_api_servicos_doget') + $matches, array('_controller' => 'App\\Controller\\Api\\ServicosController::doGet'));
                        if (!isset(($a = array('GET' => 0))[$canonicalMethod])) {
                            $allow += $a;
                            goto not_app_api_servicos_doget;
                        }

                        return $ret;
                        not_app_api_servicos_doget:

                        // app_api_servicos_doput
                        $ret = $this->mergeDefaults(array('_route' => 'app_api_servicos_doput') + $matches, array('_controller' => 'App\\Controller\\Api\\ServicosController::doPut'));
                        if (!isset(($a = array('PUT' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_app_api_servicos_doput;
                        }

                        return $ret;
                        not_app_api_servicos_doput:

                        // app_api_servicos_dodelete
                        $ret = $this->mergeDefaults(array('_route' => 'app_api_servicos_dodelete') + $matches, array('_controller' => 'App\\Controller\\Api\\ServicosController::doDelete'));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_app_api_servicos_dodelete;
                        }

                        return $ret;
                        not_app_api_servicos_dodelete:

                        break;
                    case 862:
                        $matches = array('id' => $matches[1] ?? null);

                        // novosga_settings_remove_servico_unidade
                        $ret = $this->mergeDefaults(array('_route' => 'novosga_settings_remove_servico_unidade') + $matches, array('_controller' => 'Novosga\\SettingsBundle\\Controller\\DefaultController::removeServicoUnidade'));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_novosga_settings_remove_servico_unidade;
                        }

                        return $ret;
                        not_novosga_settings_remove_servico_unidade:

                        // novosga_settings_update_servicos_unidade
                        $ret = $this->mergeDefaults(array('_route' => 'novosga_settings_update_servicos_unidade') + $matches, array('_controller' => 'Novosga\\SettingsBundle\\Controller\\DefaultController::updateServico'));
                        if (!isset(($a = array('PUT' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_novosga_settings_update_servicos_unidade;
                        }

                        return $ret;
                        not_novosga_settings_update_servicos_unidade:

                        break;
                    case 900:
                        $matches = array('usuarioId' => $matches[1] ?? null, 'servicoId' => $matches[2] ?? null);

                        // novosga_settings_add_servico_usuario
                        $ret = $this->mergeDefaults(array('_route' => 'novosga_settings_add_servico_usuario') + $matches, array('_controller' => 'Novosga\\SettingsBundle\\Controller\\DefaultController::addServicoUsuario'));
                        if (!isset(($a = array('POST' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_novosga_settings_add_servico_usuario;
                        }

                        return $ret;
                        not_novosga_settings_add_servico_usuario:

                        // novosga_settings_remove_servico_usuario
                        $ret = $this->mergeDefaults(array('_route' => 'novosga_settings_remove_servico_usuario') + $matches, array('_controller' => 'Novosga\\SettingsBundle\\Controller\\DefaultController::removeServicoUsuario'));
                        if (!isset(($a = array('DELETE' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_novosga_settings_remove_servico_usuario;
                        }

                        return $ret;
                        not_novosga_settings_remove_servico_usuario:

                        // novosga_settings_update_servico_usuario
                        $ret = $this->mergeDefaults(array('_route' => 'novosga_settings_update_servico_usuario') + $matches, array('_controller' => 'Novosga\\SettingsBundle\\Controller\\DefaultController::updateServicoUsuario'));
                        if (!isset(($a = array('PUT' => 0))[$requestMethod])) {
                            $allow += $a;
                            goto not_novosga_settings_update_servico_usuario;
                        }

                        return $ret;
                        not_novosga_settings_update_servico_usuario:

                        break;
                    default:
                        $routes = array(
                            47 => array(array('_route' => 'admin_api_removeclient', '_controller' => 'App\\Controller\\Admin\\ApiController::removeOauthClient'), array('id'), array('DELETE' => 0), null),
                            265 => array(array('_route' => 'app_api_agendamentos_doget', '_controller' => 'App\\Controller\\Api\\AgendamentosController::doGet'), array('id'), array('GET' => 0), null),
                            296 => array(array('_route' => 'app_api_atendimentos_doget', '_controller' => 'App\\Controller\\Api\\AtendimentosController::doGet'), array('id'), array('GET' => 0), null),
                            322 => array(array('_route' => 'app_api_atendimentoshistorico_doget', '_controller' => 'App\\Controller\\Api\\AtendimentosHistoricoController::doGet'), array('id'), array('GET' => 0), null),
                            380 => array(array('_route' => 'app_api_filas_atendimentosusuario', '_controller' => 'App\\Controller\\Api\\FilasController::atendimentosUsuario'), array('unidadeId'), array('GET' => 0), null),
                            448 => array(array('_route' => 'app_api_painel_painel', '_controller' => 'App\\Controller\\Api\\PainelController::painel'), array('id'), array('GET' => 0), null),
                            464 => array(array('_route' => 'app_api_unidades_servicos', '_controller' => 'App\\Controller\\Api\\UnidadesController::servicos'), array('id'), array('GET' => 0), null),
                            484 => array(array('_route' => 'app_api_unidades_atendimentos', '_controller' => 'App\\Controller\\Api\\UnidadesController::atendimentos'), array('id'), array('GET' => 0), null),
                            518 => array(array('_route' => 'app_api_usuarios_doget', '_controller' => 'App\\Controller\\Api\\UsuariosController::doGet'), array('id'), array('GET' => 0), null),
                            573 => array(array('_route' => 'app_api_triagem_imprimir', '_controller' => 'App\\Controller\\Api\\TriagemController::imprimir'), array('id'), array('GET' => 0), null),
                            634 => array(array('_route' => 'app_default_setunidade', '_controller' => 'App\\Controller\\DefaultController::setUnidade'), array('id'), array('POST' => 0), null),
                            673 => array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null),
                            693 => array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null),
                            739 => array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null),
                            753 => array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null),
                            773 => array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null),
                            786 => array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null),
                            796 => array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null),
                            928 => array(array('_route' => 'novosga_settings_reiniciar_contador', '_controller' => 'Novosga\\SettingsBundle\\Controller\\DefaultController::reiniciarContador'), array('id'), array('POST' => 0), null),
                            952 => array(array('_route' => 'novosga_settings_update_usuario', '_controller' => 'Novosga\\SettingsBundle\\Controller\\DefaultController::updateUsuario'), array('id'), array('PUT' => 0), null),
                            988 => array(array('_route' => 'novosga_triage_print', '_controller' => 'Novosga\\TriageBundle\\Controller\\DefaultController::imprimir'), array('id'), array('GET' => 0), null),
                            1026 => array(array('_route' => 'novosga_triage_distribui_agendamento', '_controller' => 'Novosga\\TriageBundle\\Controller\\DefaultController::distribuiSenhaAgendamento'), array('id'), array('POST' => 0), null),
                            1056 => array(array('_route' => 'novosga_triage_atendamentos', '_controller' => 'Novosga\\TriageBundle\\Controller\\DefaultController::agendamentos'), array('id'), array('GET' => 0), null),
                            1096 => array(array('_route' => 'novosga_monitor_infosenha', '_controller' => 'Novosga\\MonitorBundle\\Controller\\DefaultController::infoSenha'), array('id'), array('GET' => 0), null),
                            1124 => array(array('_route' => 'novosga_monitor_transferir', '_controller' => 'Novosga\\MonitorBundle\\Controller\\DefaultController::transferir'), array('id'), array('POST' => 0), null),
                            1150 => array(array('_route' => 'novosga_monitor_reativar', '_controller' => 'Novosga\\MonitorBundle\\Controller\\DefaultController::reativar'), array('id'), array('POST' => 0), null),
                            1176 => array(array('_route' => 'novosga_monitor_cancelar', '_controller' => 'Novosga\\MonitorBundle\\Controller\\DefaultController::cancelar'), array('id'), array('POST' => 0), null),
                            1208 => array(array('_route' => 'novosga_users_edit', '_controller' => 'Novosga\\UsersBundle\\Controller\\DefaultController::form'), array('id'), array('GET' => 0, 'POST' => 1), null),
                            1235 => array(array('_route' => 'novosga_users_default_perfis', '_controller' => 'Novosga\\UsersBundle\\Controller\\DefaultController::perfis'), array('id'), array('GET' => 0), null),
                            1260 => array(array('_route' => 'novosga_users_password', '_controller' => 'Novosga\\UsersBundle\\Controller\\DefaultController::password'), array('id'), array('POST' => 0), null),
                            1304 => array(array('_route' => 'novosga_attendance_infosenha', '_controller' => 'Novosga\\AttendanceBundle\\Controller\\DefaultController::infoSenha'), array('id'), array('GET' => 0), null),
                            1330 => array(array('_route' => 'novosga_attendance_usuarios', '_controller' => 'Novosga\\AttendanceBundle\\Controller\\DefaultController::usuarios'), array('id'), array('GET' => 0), null),
                        );

                        list($ret, $vars, $requiredMethods, $requiredSchemes) = $routes[$m];

                        foreach ($vars as $i => $v) {
                            if (isset($matches[1 + $i])) {
                                $ret[$v] = $matches[1 + $i];
                            }
                        }

                        $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                        if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                            if ($hasRequiredScheme) {
                                $allow += $requiredMethods;
                            }
                            break;
                        }
                        if (!$hasRequiredScheme) {
                            $allowSchemes += $requiredSchemes;
                            break;
                        }

                        return $ret;
                }

                if (1330 === $m) {
                    break;
                }
                $regex = substr_replace($regex, 'F', $m - $offset, 1 + strlen($m));
                $offset += strlen($m);
            }
        }
        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        return null;
    }
}
