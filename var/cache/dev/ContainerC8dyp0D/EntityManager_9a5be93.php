<?php

namespace ContainerC8dyp0D;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf3b87 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer4f050 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese7a25 = [
        
    ];

    public function getConnection()
    {
        $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, 'getConnection', array(), $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;

        return $this->valueHolderf3b87->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, 'getMetadataFactory', array(), $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;

        return $this->valueHolderf3b87->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, 'getExpressionBuilder', array(), $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;

        return $this->valueHolderf3b87->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, 'beginTransaction', array(), $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;

        return $this->valueHolderf3b87->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, 'getCache', array(), $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;

        return $this->valueHolderf3b87->getCache();
    }

    public function transactional($func)
    {
        $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, 'transactional', array('func' => $func), $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;

        return $this->valueHolderf3b87->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, 'wrapInTransaction', array('func' => $func), $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;

        return $this->valueHolderf3b87->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, 'commit', array(), $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;

        return $this->valueHolderf3b87->commit();
    }

    public function rollback()
    {
        $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, 'rollback', array(), $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;

        return $this->valueHolderf3b87->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, 'getClassMetadata', array('className' => $className), $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;

        return $this->valueHolderf3b87->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, 'createQuery', array('dql' => $dql), $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;

        return $this->valueHolderf3b87->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, 'createNamedQuery', array('name' => $name), $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;

        return $this->valueHolderf3b87->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;

        return $this->valueHolderf3b87->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;

        return $this->valueHolderf3b87->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, 'createQueryBuilder', array(), $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;

        return $this->valueHolderf3b87->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, 'flush', array('entity' => $entity), $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;

        return $this->valueHolderf3b87->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;

        return $this->valueHolderf3b87->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;

        return $this->valueHolderf3b87->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;

        return $this->valueHolderf3b87->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, 'clear', array('entityName' => $entityName), $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;

        return $this->valueHolderf3b87->clear($entityName);
    }

    public function close()
    {
        $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, 'close', array(), $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;

        return $this->valueHolderf3b87->close();
    }

    public function persist($entity)
    {
        $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, 'persist', array('entity' => $entity), $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;

        return $this->valueHolderf3b87->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, 'remove', array('entity' => $entity), $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;

        return $this->valueHolderf3b87->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, 'refresh', array('entity' => $entity), $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;

        return $this->valueHolderf3b87->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, 'detach', array('entity' => $entity), $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;

        return $this->valueHolderf3b87->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, 'merge', array('entity' => $entity), $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;

        return $this->valueHolderf3b87->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;

        return $this->valueHolderf3b87->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;

        return $this->valueHolderf3b87->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;

        return $this->valueHolderf3b87->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, 'contains', array('entity' => $entity), $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;

        return $this->valueHolderf3b87->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, 'getEventManager', array(), $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;

        return $this->valueHolderf3b87->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, 'getConfiguration', array(), $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;

        return $this->valueHolderf3b87->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, 'isOpen', array(), $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;

        return $this->valueHolderf3b87->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, 'getUnitOfWork', array(), $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;

        return $this->valueHolderf3b87->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;

        return $this->valueHolderf3b87->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;

        return $this->valueHolderf3b87->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, 'getProxyFactory', array(), $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;

        return $this->valueHolderf3b87->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, 'initializeObject', array('obj' => $obj), $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;

        return $this->valueHolderf3b87->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, 'getFilters', array(), $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;

        return $this->valueHolderf3b87->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, 'isFiltersStateClean', array(), $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;

        return $this->valueHolderf3b87->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, 'hasFilters', array(), $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;

        return $this->valueHolderf3b87->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer4f050 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf3b87) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf3b87 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf3b87->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, '__get', ['name' => $name], $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;

        if (isset(self::$publicPropertiese7a25[$name])) {
            return $this->valueHolderf3b87->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf3b87;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf3b87;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf3b87;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf3b87;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, '__isset', array('name' => $name), $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf3b87;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf3b87;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, '__unset', array('name' => $name), $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf3b87;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf3b87;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, '__clone', array(), $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;

        $this->valueHolderf3b87 = clone $this->valueHolderf3b87;
    }

    public function __sleep()
    {
        $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, '__sleep', array(), $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;

        return array('valueHolderf3b87');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4f050 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4f050;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer4f050 && ($this->initializer4f050->__invoke($valueHolderf3b87, $this, 'initializeProxy', array(), $this->initializer4f050) || 1) && $this->valueHolderf3b87 = $valueHolderf3b87;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf3b87;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf3b87;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
