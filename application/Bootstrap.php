<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

 protected function _initRoutes()
    {
        $fctlr  = Zend_Controller_Front::getInstance();
        $router = $fctlr->getRouter();
        $router->addDefaultRoutes();
        $routespath = APPLICATION_PATH."/configs/routes.xml";
        $routerConfig = new Zend_Config_Xml($routespath);
        $router->addConfig($routerConfig->routes);
    }
}

