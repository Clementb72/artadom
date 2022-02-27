<?php

namespace ContainerPMw78hQ;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6ffab = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerd8f23 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesa2498 = [
        
    ];

    public function getConnection()
    {
        $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, 'getConnection', array(), $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;

        return $this->valueHolder6ffab->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, 'getMetadataFactory', array(), $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;

        return $this->valueHolder6ffab->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, 'getExpressionBuilder', array(), $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;

        return $this->valueHolder6ffab->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, 'beginTransaction', array(), $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;

        return $this->valueHolder6ffab->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, 'getCache', array(), $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;

        return $this->valueHolder6ffab->getCache();
    }

    public function transactional($func)
    {
        $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, 'transactional', array('func' => $func), $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;

        return $this->valueHolder6ffab->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;

        return $this->valueHolder6ffab->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, 'commit', array(), $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;

        return $this->valueHolder6ffab->commit();
    }

    public function rollback()
    {
        $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, 'rollback', array(), $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;

        return $this->valueHolder6ffab->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, 'getClassMetadata', array('className' => $className), $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;

        return $this->valueHolder6ffab->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, 'createQuery', array('dql' => $dql), $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;

        return $this->valueHolder6ffab->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, 'createNamedQuery', array('name' => $name), $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;

        return $this->valueHolder6ffab->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;

        return $this->valueHolder6ffab->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;

        return $this->valueHolder6ffab->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, 'createQueryBuilder', array(), $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;

        return $this->valueHolder6ffab->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, 'flush', array('entity' => $entity), $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;

        return $this->valueHolder6ffab->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;

        return $this->valueHolder6ffab->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;

        return $this->valueHolder6ffab->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;

        return $this->valueHolder6ffab->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, 'clear', array('entityName' => $entityName), $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;

        return $this->valueHolder6ffab->clear($entityName);
    }

    public function close()
    {
        $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, 'close', array(), $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;

        return $this->valueHolder6ffab->close();
    }

    public function persist($entity)
    {
        $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, 'persist', array('entity' => $entity), $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;

        return $this->valueHolder6ffab->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, 'remove', array('entity' => $entity), $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;

        return $this->valueHolder6ffab->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, 'refresh', array('entity' => $entity), $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;

        return $this->valueHolder6ffab->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, 'detach', array('entity' => $entity), $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;

        return $this->valueHolder6ffab->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, 'merge', array('entity' => $entity), $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;

        return $this->valueHolder6ffab->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;

        return $this->valueHolder6ffab->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;

        return $this->valueHolder6ffab->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;

        return $this->valueHolder6ffab->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, 'contains', array('entity' => $entity), $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;

        return $this->valueHolder6ffab->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, 'getEventManager', array(), $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;

        return $this->valueHolder6ffab->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, 'getConfiguration', array(), $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;

        return $this->valueHolder6ffab->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, 'isOpen', array(), $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;

        return $this->valueHolder6ffab->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, 'getUnitOfWork', array(), $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;

        return $this->valueHolder6ffab->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;

        return $this->valueHolder6ffab->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;

        return $this->valueHolder6ffab->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, 'getProxyFactory', array(), $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;

        return $this->valueHolder6ffab->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, 'initializeObject', array('obj' => $obj), $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;

        return $this->valueHolder6ffab->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, 'getFilters', array(), $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;

        return $this->valueHolder6ffab->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, 'isFiltersStateClean', array(), $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;

        return $this->valueHolder6ffab->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, 'hasFilters', array(), $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;

        return $this->valueHolder6ffab->hasFilters();
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

        $instance->initializerd8f23 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder6ffab) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6ffab = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6ffab->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, '__get', ['name' => $name], $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;

        if (isset(self::$publicPropertiesa2498[$name])) {
            return $this->valueHolder6ffab->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6ffab;

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

        $targetObject = $this->valueHolder6ffab;
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
        $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6ffab;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6ffab;
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
        $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, '__isset', array('name' => $name), $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6ffab;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6ffab;
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
        $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, '__unset', array('name' => $name), $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6ffab;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6ffab;
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
        $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, '__clone', array(), $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;

        $this->valueHolder6ffab = clone $this->valueHolder6ffab;
    }

    public function __sleep()
    {
        $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, '__sleep', array(), $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;

        return array('valueHolder6ffab');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd8f23 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd8f23;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerd8f23 && ($this->initializerd8f23->__invoke($valueHolder6ffab, $this, 'initializeProxy', array(), $this->initializerd8f23) || 1) && $this->valueHolder6ffab = $valueHolder6ffab;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6ffab;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6ffab;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
