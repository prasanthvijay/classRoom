<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // trax_user_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'trax_user_homepage');
            }

            return array (  '_controller' => 'Trax\\UserBundle\\Controller\\UserController::indexAction',  '_route' => 'trax_user_homepage',);
        }

        // trax_user_portlet
        if ($pathinfo === '/portlet') {
            return array (  '_controller' => 'Trax\\UserBundle\\Controller\\UserController::portletAction',  '_route' => 'trax_user_portlet',);
        }

        // trax_user_trainer
        if ($pathinfo === '/trainer') {
            return array (  '_controller' => 'Trax\\UserBundle\\Controller\\UserController::trainerAction',  '_route' => 'trax_user_trainer',);
        }

        // trax_user_logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'Trax\\UserBundle\\Controller\\UserController::logoutAction',  '_route' => 'trax_user_logout',);
        }

        // trax_user_userFunction
        if ($pathinfo === '/userFunction') {
            return array (  '_controller' => 'Trax\\UserBundle\\Controller\\UserController::userFunctionAction',  '_route' => 'trax_user_userFunction',);
        }

        // trax_user_traineelist
        if ($pathinfo === '/traineelist') {
            return array (  '_controller' => 'Trax\\UserBundle\\Controller\\UserController::traineelistAction',  '_route' => 'trax_user_traineelist',);
        }

        if (0 === strpos($pathinfo, '/m')) {
            if (0 === strpos($pathinfo, '/map')) {
                // trax_user_maptraniee
                if ($pathinfo === '/maptraniee') {
                    return array (  '_controller' => 'Trax\\UserBundle\\Controller\\UserController::maptranieeAction',  '_route' => 'trax_user_maptraniee',);
                }

                // trax_user_mappedtranieelist
                if ($pathinfo === '/mappedtranieelist') {
                    return array (  '_controller' => 'Trax\\UserBundle\\Controller\\UserController::mappedtranieelistAction',  '_route' => 'trax_user_mappedtranieelist',);
                }

            }

            // trax_user_modulemaster
            if ($pathinfo === '/modulemaster') {
                return array (  '_controller' => 'Trax\\UserBundle\\Controller\\UserController::modulemasterAction',  '_route' => 'trax_user_modulemaster',);
            }

        }

        if (0 === strpos($pathinfo, '/submodulemaster')) {
            // trax_user_submodulemaster
            if ($pathinfo === '/submodulemaster') {
                return array (  '_controller' => 'Trax\\UserBundle\\Controller\\UserController::submodulemasterAction',  '_route' => 'trax_user_submodulemaster',);
            }

            // trax_user_submodulemasterlist
            if ($pathinfo === '/submodulemasterlist') {
                return array (  '_controller' => 'Trax\\UserBundle\\Controller\\UserController::submodulemasterlistAction',  '_route' => 'trax_user_submodulemasterlist',);
            }

        }

        if (0 === strpos($pathinfo, '/m')) {
            if (0 === strpos($pathinfo, '/map')) {
                // trax_user_mapmodule
                if ($pathinfo === '/mapmodule') {
                    return array (  '_controller' => 'Trax\\UserBundle\\Controller\\UserController::mapmoduleAction',  '_route' => 'trax_user_mapmodule',);
                }

                // trax_user_mappingmodulelist
                if ($pathinfo === '/mappingmodulelist') {
                    return array (  '_controller' => 'Trax\\UserBundle\\Controller\\UserController::mappingmodulelistAction',  '_route' => 'trax_user_mappingmodulelist',);
                }

            }

            // trax_user_modulemasterlist
            if ($pathinfo === '/modulemasterlist') {
                return array (  '_controller' => 'Trax\\UserBundle\\Controller\\UserController::modulemasterlistAction',  '_route' => 'trax_user_modulemasterlist',);
            }

            // trax_user_mapmoduletouser
            if ($pathinfo === '/mapmoduletouser') {
                return array (  '_controller' => 'Trax\\UserBundle\\Controller\\UserController::mapmoduletouserAction',  '_route' => 'trax_user_mapmoduletouser',);
            }

        }

        // trax_user_trainingCalendar
        if ($pathinfo === '/trainingCalendar') {
            return array (  '_controller' => 'Trax\\UserBundle\\Controller\\UserController::trainingCalendarAction',  '_route' => 'trax_user_trainingCalendar',);
        }

        if (0 === strpos($pathinfo, '/maptrain')) {
            if (0 === strpos($pathinfo, '/maptrainer')) {
                // trax_user_maptrainerbatch
                if ($pathinfo === '/maptrainerbatch') {
                    return array (  '_controller' => 'Trax\\UserBundle\\Controller\\UserController::maptrainerbatchAction',  '_route' => 'trax_user_maptrainerbatch',);
                }

                // trax_user_maptrainerprogram
                if ($pathinfo === '/maptrainerprogram') {
                    return array (  '_controller' => 'Trax\\UserBundle\\Controller\\UserController::maptrainerprogramAction',  '_route' => 'trax_user_maptrainerprogram',);
                }

            }

            // trax_user_maptrainingschedule
            if ($pathinfo === '/maptrainingschedule') {
                return array (  '_controller' => 'Trax\\UserBundle\\Controller\\UserController::maptrainingscheduleAction',  '_route' => 'trax_user_maptrainingschedule',);
            }

        }

        if (0 === strpos($pathinfo, '/training')) {
            // trax_user_trainingbatch
            if ($pathinfo === '/trainingbatch') {
                return array (  '_controller' => 'Trax\\UserBundle\\Controller\\UserController::trainingbatchAction',  '_route' => 'trax_user_trainingbatch',);
            }

            // trax_user_trainingprogram
            if ($pathinfo === '/trainingprogram') {
                return array (  '_controller' => 'Trax\\UserBundle\\Controller\\UserController::trainingprogramAction',  '_route' => 'trax_user_trainingprogram',);
            }

            // trax_user_trainingschedule
            if ($pathinfo === '/trainingschedule') {
                return array (  '_controller' => 'Trax\\UserBundle\\Controller\\UserController::trainingscheduleAction',  '_route' => 'trax_user_trainingschedule',);
            }

        }

        if (0 === strpos($pathinfo, '/ma')) {
            // trax_user_mapmodulelist
            if ($pathinfo === '/mapmodulelist') {
                return array (  '_controller' => 'Trax\\UserBundle\\Controller\\UserController::mapmodulelistAction',  '_route' => 'trax_user_mapmodulelist',);
            }

            if (0 === strpos($pathinfo, '/manage')) {
                // trax_admin_homepage
                if (rtrim($pathinfo, '/') === '/manage') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'trax_admin_homepage');
                    }

                    return array (  '_controller' => 'Trax\\AdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'trax_admin_homepage',);
                }

                // trax_admin_getFunction
                if ($pathinfo === '/manage/getFunction') {
                    return array (  '_controller' => 'Trax\\AdminBundle\\Controller\\AdminController::getFunctionAction',  '_route' => 'trax_admin_getFunction',);
                }

                // trax_admin_adminMaster
                if ($pathinfo === '/manage/adminMaster') {
                    return array (  '_controller' => 'Trax\\AdminBundle\\Controller\\AdminController::adminMasterAction',  '_route' => 'trax_admin_adminMaster',);
                }

                // trax_admin_LoadModalContent
                if ($pathinfo === '/manage/LoadModalContent') {
                    return array (  '_controller' => 'Trax\\AdminBundle\\Controller\\AdminController::LoadModalContentAction',  '_route' => 'trax_admin_LoadModalContent',);
                }

                // trax_admin_dataTableMaster
                if ($pathinfo === '/manage/dataTableMaster') {
                    return array (  '_controller' => 'Trax\\AdminBundle\\Controller\\AdminController::dataTableMasterAction',  '_route' => 'trax_admin_dataTableMaster',);
                }

                // trax_admin_logout
                if ($pathinfo === '/manage/logout') {
                    return array (  '_controller' => 'Trax\\AdminBundle\\Controller\\AdminController::logoutAction',  '_route' => 'trax_admin_logout',);
                }

                // trax_admin_InsertAdminMaster
                if ($pathinfo === '/manage/InsertAdminMaster') {
                    return array (  '_controller' => 'Trax\\AdminBundle\\Controller\\AdminController::InsertAdminMasterAction',  '_route' => 'trax_admin_InsertAdminMaster',);
                }

                // trax_admin_BasicMaster
                if ($pathinfo === '/manage/BasicMaster') {
                    return array (  '_controller' => 'Trax\\AdminBundle\\Controller\\AdminController::BasicMasterAction',  '_route' => 'trax_admin_BasicMaster',);
                }

                // trax_admin_addEmployeeMaster
                if ($pathinfo === '/manage/addEmployeeMaster') {
                    return array (  '_controller' => 'Trax\\AdminBundle\\Controller\\AdminController::addEmployeeMasterAction',  '_route' => 'trax_admin_addEmployeeMaster',);
                }

                // trax_admin_MapModule
                if ($pathinfo === '/manage/MapModule') {
                    return array (  '_controller' => 'Trax\\AdminBundle\\Controller\\AdminController::MapModuleAction',  '_route' => 'trax_admin_MapModule',);
                }

            }

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
