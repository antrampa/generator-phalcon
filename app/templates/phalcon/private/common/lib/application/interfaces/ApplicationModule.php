<?php

namespace <%= project.namespace %>\Application\Interfaces;

use \Phalcon\Mvc\ModuleDefinitionInterface,
	\Phalcon\Mvc\User\Module as UserModule;

/**
 * Abstract application module base class
 */
abstract class ApplicationModule
	extends UserModule
	implements ModuleDefinitionInterface,
		ConfigurationInitable,
		CustomerConfigurationInitable
{

}
