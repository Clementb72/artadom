<?php

namespace ContainerAvx4qBY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegistryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored..service_locator.91mXXE0.Doctrine\Bundle\DoctrineBundle\Registry' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    public static function do($container, $lazyLoad = true)
    {
        throw new RuntimeException('Cannot autowire service ".service_locator.91mXXE0": it references class "Doctrine\\Bundle\\DoctrineBundle\\Registry" but no such service exists. Try changing the type-hint to "Doctrine\\Persistence\\ManagerRegistry" instead.');
    }
}
