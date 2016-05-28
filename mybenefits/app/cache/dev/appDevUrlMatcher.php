<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/013fc53')) {
                // _assetic_013fc53
                if ($pathinfo === '/js/013fc53.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '013fc53',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_013fc53',);
                }

                // _assetic_013fc53_0
                if ($pathinfo === '/js/013fc53_msm_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '013fc53',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_013fc53_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/f64d978')) {
                // _assetic_f64d978
                if ($pathinfo === '/js/f64d978.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f64d978',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_f64d978',);
                }

                // _assetic_f64d978_0
                if ($pathinfo === '/js/f64d978_admin_msm_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f64d978',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_f64d978_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/6198dea')) {
                // _assetic_6198dea
                if ($pathinfo === '/js/6198dea.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6198dea',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_6198dea',);
                }

                // _assetic_6198dea_0
                if ($pathinfo === '/js/6198dea_publisher_msm_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6198dea',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_6198dea_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/7cb5394')) {
            // _assetic_7cb5394
            if ($pathinfo === '/css/7cb5394.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '7cb5394',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_7cb5394',);
            }

            if (0 === strpos($pathinfo, '/css/7cb5394_')) {
                // _assetic_7cb5394_0
                if ($pathinfo === '/css/7cb5394_msm_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7cb5394',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_7cb5394_0',);
                }

                // _assetic_7cb5394_1
                if ($pathinfo === '/css/7cb5394_styles_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '7cb5394',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_7cb5394_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/4fd3fa8')) {
            // _assetic_4fd3fa8
            if ($pathinfo === '/js/4fd3fa8.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '4fd3fa8',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_4fd3fa8',);
            }

            if (0 === strpos($pathinfo, '/js/4fd3fa8_')) {
                // _assetic_4fd3fa8_0
                if ($pathinfo === '/js/4fd3fa8_script_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '4fd3fa8',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_4fd3fa8_0',);
                }

                // _assetic_4fd3fa8_1
                if ($pathinfo === '/js/4fd3fa8_videojs.playlist_2.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '4fd3fa8',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_4fd3fa8_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        // msm_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'msm_homepage');
            }

            return array (  '_controller' => 'msmBundle\\Controller\\DefaultController::indexAction',  '_route' => 'msm_homepage',);
        }

        if (0 === strpos($pathinfo, '/create-session')) {
            // create_session1
            if ($pathinfo === '/create-session') {
                return array (  '_controller' => 'msmBundle\\Controller\\msmSessionController::createSessionAction',  'apiKey' => 44516932,  'apiSecret' => '6aa54cb99b694d28b3b0257db7e1b1a5e25aa19e',  '_route' => 'create_session1',);
            }

            // create_session_beta
            if ($pathinfo === '/create-session-beta') {
                return array (  '_controller' => 'msmBundle\\Controller\\msmSessionController::createBetaSessionAction',  'apiKey' => 44516932,  'apiSecret' => '6aa54cb99b694d28b3b0257db7e1b1a5e25aa19e',  '_route' => 'create_session_beta',);
            }

        }

        // list_sessions_admin
        if ($pathinfo === '/admin-list-sessions') {
            return array (  '_controller' => 'msmBundle\\Controller\\msmSessionController::listSessionsAdminAction',  '_route' => 'list_sessions_admin',);
        }

        if (0 === strpos($pathinfo, '/list-')) {
            // list_users
            if ($pathinfo === '/list-users') {
                return array (  '_controller' => 'msmBundle\\Controller\\msmSessionController::listUsersAction',  '_route' => 'list_users',);
            }

            // list_files
            if ($pathinfo === '/list-files') {
                return array (  '_controller' => 'msmBundle\\Controller\\msmSessionController::listFilesAction',  '_route' => 'list_files',);
            }

        }

        // upload_photo
        if ($pathinfo === '/upload-photo') {
            return array (  '_controller' => 'msmBundle\\Controller\\msmSessionController::uploadPhotoAction',  '_route' => 'upload_photo',);
        }

        // list_sessions
        if ($pathinfo === '/list-sessions') {
            return array (  '_controller' => 'msmBundle\\Controller\\msmSessionController::listSessionsAction',  '_route' => 'list_sessions',);
        }

        // msm_session
        if ($pathinfo === '/msm-session') {
            return array (  '_controller' => 'msmBundle\\Controller\\msmSessionController::msmSessionAction',  '_route' => 'msm_session',);
        }

        // create_token
        if (0 === strpos($pathinfo, '/create-token') && preg_match('#^/create\\-token/(?P<name>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'create_token')), array (  '_controller' => 'msmBundle\\Controller\\msmSessionController::createTokenAction',  'apiKey' => 44516932,  'apiSecret' => '6aa54cb99b694d28b3b0257db7e1b1a5e25aa19e',));
        }

        if (0 === strpos($pathinfo, '/admin-token')) {
            // admin_token
            if (preg_match('#^/admin\\-token/(?P<name>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_token')), array (  '_controller' => 'msmBundle\\Controller\\msmSessionController::adminTokenAction',  'apiKey' => 44516932,  'apiSecret' => '6aa54cb99b694d28b3b0257db7e1b1a5e25aa19e',));
            }

            // admin_token_beta
            if (0 === strpos($pathinfo, '/admin-token-beta') && preg_match('#^/admin\\-token\\-beta/(?P<name>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_token_beta')), array (  '_controller' => 'msmBundle\\Controller\\msmSessionController::adminTokenBetaAction',  'apiKey' => 44516932,  'apiSecret' => '6aa54cb99b694d28b3b0257db7e1b1a5e25aa19e',));
            }

        }

        // publisher_token
        if (0 === strpos($pathinfo, '/publisher-token') && preg_match('#^/publisher\\-token/(?P<name>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'publisher_token')), array (  '_controller' => 'msmBundle\\Controller\\msmSessionController::createPublisherTokenAction',  'apiKey' => 44516932,  'apiSecret' => '6aa54cb99b694d28b3b0257db7e1b1a5e25aa19e',));
        }

        if (0 === strpos($pathinfo, '/c')) {
            // create_archive
            if (0 === strpos($pathinfo, '/create-archive') && preg_match('#^/create\\-archive/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'create_archive')), array (  '_controller' => 'msmBundle\\Controller\\msmSessionController::createArchiveAction',  'apiKey' => 44516932,  'apiSecret' => '6aa54cb99b694d28b3b0257db7e1b1a5e25aa19e',));
            }

            // close_archive
            if (0 === strpos($pathinfo, '/close-archives') && preg_match('#^/close\\-archives/(?P<archiveid>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'close_archive')), array (  '_controller' => 'msmBundle\\Controller\\msmSessionController::closeArchivesAction',  'apiKey' => 44516932,  'apiSecret' => '6aa54cb99b694d28b3b0257db7e1b1a5e25aa19e',));
            }

        }

        // list_archives
        if (0 === strpos($pathinfo, '/list-archives') && preg_match('#^/list\\-archives/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_archives')), array (  '_controller' => 'msmBundle\\Controller\\msmSessionController::listArchivesAction',  'apiKey' => 44516932,  'apiSecret' => '6aa54cb99b694d28b3b0257db7e1b1a5e25aa19e',));
        }

        // watch_archive
        if (0 === strpos($pathinfo, '/watch-archive') && preg_match('#^/watch\\-archive/(?P<archiveid>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'watch_archive')), array (  '_controller' => 'msmBundle\\Controller\\msmSessionController::watchArchiveAction',));
        }

        if (0 === strpos($pathinfo, '/create-token-ios')) {
            // ios_token
            if (preg_match('#^/create\\-token\\-ios/(?P<name>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ios_token')), array (  '_controller' => 'msmBundle\\Controller\\msmSessionController::iosTokenAction',  'apiKey' => 44516932,  'apiSecret' => '6aa54cb99b694d28b3b0257db7e1b1a5e25aa19e',));
            }

            // aios_token
            if (0 === strpos($pathinfo, '/create-token-ios-a') && preg_match('#^/create\\-token\\-ios\\-a/(?P<name>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'aios_token')), array (  '_controller' => 'msmBundle\\Controller\\msmSessionController::AiosTokenAction',  'apiKey' => 44516932,  'apiSecret' => '6aa54cb99b694d28b3b0257db7e1b1a5e25aa19e',));
            }

        }

        // delete_session
        if (0 === strpos($pathinfo, '/delete-session') && preg_match('#^/delete\\-session/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_session')), array (  '_controller' => 'msmBundle\\Controller\\msmSessionController::deleteSessionAction',  'requirements' =>   array (    'id' => '\\d+',  ),));
        }

        // update_session
        if (0 === strpos($pathinfo, '/update-session') && preg_match('#^/update\\-session/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'update_session')), array (  '_controller' => 'msmBundle\\Controller\\msmSessionController::updateSessionAction',  'requirements' =>   array (    'id' => '\\d+',  ),));
        }

        // listwebinar
        if ($pathinfo === '/list-webinar') {
            return array (  '_controller' => 'msmBundle\\Controller\\webinarController::listwebinarAction',  '_route' => 'listwebinar',);
        }

        // createwebinar
        if ($pathinfo === '/create-webinar') {
            return array (  '_controller' => 'msmBundle\\Controller\\webinarController::createwebinarAction',  '_route' => 'createwebinar',);
        }

        // viewwebinar
        if (0 === strpos($pathinfo, '/view-webinar') && preg_match('#^/view\\-webinar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'viewwebinar')), array (  '_controller' => 'msmBundle\\Controller\\webinarController::viewwebinarAction',  'requirements' =>   array (    'id' => '\\d+',  ),));
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
