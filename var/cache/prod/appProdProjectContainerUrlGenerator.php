<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'trax_user_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Trax\\UserBundle\\Controller\\UserController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trax_user_portlet' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Trax\\UserBundle\\Controller\\UserController::portletAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/portlet',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trax_user_trainer' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Trax\\UserBundle\\Controller\\UserController::trainerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/trainer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trax_user_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Trax\\UserBundle\\Controller\\UserController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trax_user_userFunction' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Trax\\UserBundle\\Controller\\UserController::userFunctionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/userFunction',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trax_user_traineelist' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Trax\\UserBundle\\Controller\\UserController::traineelistAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/traineelist',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trax_user_maptraniee' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Trax\\UserBundle\\Controller\\UserController::maptranieeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/maptraniee',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trax_user_mappedtranieelist' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Trax\\UserBundle\\Controller\\UserController::mappedtranieelistAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/mappedtranieelist',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trax_user_modulemaster' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Trax\\UserBundle\\Controller\\UserController::modulemasterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/modulemaster',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trax_user_submodulemaster' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Trax\\UserBundle\\Controller\\UserController::submodulemasterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/submodulemaster',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trax_user_submodulemasterlist' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Trax\\UserBundle\\Controller\\UserController::submodulemasterlistAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/submodulemasterlist',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trax_user_mapmodule' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Trax\\UserBundle\\Controller\\UserController::mapmoduleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/mapmodule',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trax_user_mappingmodulelist' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Trax\\UserBundle\\Controller\\UserController::mappingmodulelistAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/mappingmodulelist',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trax_user_modulemasterlist' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Trax\\UserBundle\\Controller\\UserController::modulemasterlistAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/modulemasterlist',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trax_user_mapmoduletouser' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Trax\\UserBundle\\Controller\\UserController::mapmoduletouserAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/mapmoduletouser',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trax_user_trainingCalendar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Trax\\UserBundle\\Controller\\UserController::trainingCalendarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/trainingCalendar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trax_user_maptrainerbatch' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Trax\\UserBundle\\Controller\\UserController::maptrainerbatchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/maptrainerbatch',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trax_user_maptrainerprogram' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Trax\\UserBundle\\Controller\\UserController::maptrainerprogramAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/maptrainerprogram',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trax_user_maptrainingschedule' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Trax\\UserBundle\\Controller\\UserController::maptrainingscheduleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/maptrainingschedule',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trax_user_trainingbatch' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Trax\\UserBundle\\Controller\\UserController::trainingbatchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/trainingbatch',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trax_user_trainingprogram' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Trax\\UserBundle\\Controller\\UserController::trainingprogramAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/trainingprogram',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trax_user_trainingschedule' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Trax\\UserBundle\\Controller\\UserController::trainingscheduleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/trainingschedule',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trax_user_mapmodulelist' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Trax\\UserBundle\\Controller\\UserController::mapmodulelistAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/mapmodulelist',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trax_admin_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Trax\\AdminBundle\\Controller\\AdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/manage/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trax_admin_getFunction' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Trax\\AdminBundle\\Controller\\AdminController::getFunctionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/manage/getFunction',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trax_admin_adminMaster' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Trax\\AdminBundle\\Controller\\AdminController::adminMasterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/manage/adminMaster',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trax_admin_LoadModalContent' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Trax\\AdminBundle\\Controller\\AdminController::LoadModalContentAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/manage/LoadModalContent',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trax_admin_dataTableMaster' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Trax\\AdminBundle\\Controller\\AdminController::dataTableMasterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/manage/dataTableMaster',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trax_admin_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Trax\\AdminBundle\\Controller\\AdminController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/manage/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trax_admin_InsertAdminMaster' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Trax\\AdminBundle\\Controller\\AdminController::InsertAdminMasterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/manage/InsertAdminMaster',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trax_admin_BasicMaster' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Trax\\AdminBundle\\Controller\\AdminController::BasicMasterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/manage/BasicMaster',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trax_admin_addEmployeeMaster' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Trax\\AdminBundle\\Controller\\AdminController::addEmployeeMasterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/manage/addEmployeeMaster',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'trax_admin_MapModule' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Trax\\AdminBundle\\Controller\\AdminController::MapModuleAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/manage/MapModule',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
