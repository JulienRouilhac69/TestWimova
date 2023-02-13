<?php

namespace ContainerLeVJD5I;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Command_UserPasswordHashService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.command.user_password_hash' shared service.
     *
     * @return \Symfony\Component\PasswordHasher\Command\UserPasswordHashCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'password-hasher'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'UserPasswordHashCommand.php';

        $container->privates['security.command.user_password_hash'] = $instance = new \Symfony\Component\PasswordHasher\Command\UserPasswordHashCommand(($container->privates['security.password_hasher_factory'] ?? $container->load('getSecurity_PasswordHasherFactoryService')), [0 => 'Symfony\\Component\\Security\\Core\\User\\PasswordAuthenticatedUserInterface']);

        $instance->setName('security:hash-password');
        $instance->setDescription('Hash a user password');

        return $instance;
    }
}
