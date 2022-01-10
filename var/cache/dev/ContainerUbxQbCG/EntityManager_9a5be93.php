<?php

namespace ContainerUbxQbCG;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5b363 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer0f4e9 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1612a = [
        
    ];

    public function getConnection()
    {
        $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, 'getConnection', array(), $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;

        return $this->valueHolder5b363->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, 'getMetadataFactory', array(), $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;

        return $this->valueHolder5b363->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, 'getExpressionBuilder', array(), $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;

        return $this->valueHolder5b363->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, 'beginTransaction', array(), $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;

        return $this->valueHolder5b363->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, 'getCache', array(), $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;

        return $this->valueHolder5b363->getCache();
    }

    public function transactional($func)
    {
        $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, 'transactional', array('func' => $func), $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;

        return $this->valueHolder5b363->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, 'wrapInTransaction', array('func' => $func), $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;

        return $this->valueHolder5b363->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, 'commit', array(), $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;

        return $this->valueHolder5b363->commit();
    }

    public function rollback()
    {
        $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, 'rollback', array(), $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;

        return $this->valueHolder5b363->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, 'getClassMetadata', array('className' => $className), $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;

        return $this->valueHolder5b363->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, 'createQuery', array('dql' => $dql), $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;

        return $this->valueHolder5b363->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, 'createNamedQuery', array('name' => $name), $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;

        return $this->valueHolder5b363->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;

        return $this->valueHolder5b363->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;

        return $this->valueHolder5b363->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, 'createQueryBuilder', array(), $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;

        return $this->valueHolder5b363->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, 'flush', array('entity' => $entity), $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;

        return $this->valueHolder5b363->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;

        return $this->valueHolder5b363->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;

        return $this->valueHolder5b363->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;

        return $this->valueHolder5b363->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, 'clear', array('entityName' => $entityName), $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;

        return $this->valueHolder5b363->clear($entityName);
    }

    public function close()
    {
        $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, 'close', array(), $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;

        return $this->valueHolder5b363->close();
    }

    public function persist($entity)
    {
        $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, 'persist', array('entity' => $entity), $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;

        return $this->valueHolder5b363->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, 'remove', array('entity' => $entity), $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;

        return $this->valueHolder5b363->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, 'refresh', array('entity' => $entity), $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;

        return $this->valueHolder5b363->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, 'detach', array('entity' => $entity), $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;

        return $this->valueHolder5b363->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, 'merge', array('entity' => $entity), $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;

        return $this->valueHolder5b363->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;

        return $this->valueHolder5b363->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;

        return $this->valueHolder5b363->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, 'getRepository', array('entityName' => $entityName), $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;

        return $this->valueHolder5b363->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, 'contains', array('entity' => $entity), $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;

        return $this->valueHolder5b363->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, 'getEventManager', array(), $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;

        return $this->valueHolder5b363->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, 'getConfiguration', array(), $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;

        return $this->valueHolder5b363->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, 'isOpen', array(), $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;

        return $this->valueHolder5b363->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, 'getUnitOfWork', array(), $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;

        return $this->valueHolder5b363->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;

        return $this->valueHolder5b363->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;

        return $this->valueHolder5b363->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, 'getProxyFactory', array(), $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;

        return $this->valueHolder5b363->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, 'initializeObject', array('obj' => $obj), $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;

        return $this->valueHolder5b363->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, 'getFilters', array(), $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;

        return $this->valueHolder5b363->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, 'isFiltersStateClean', array(), $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;

        return $this->valueHolder5b363->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, 'hasFilters', array(), $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;

        return $this->valueHolder5b363->hasFilters();
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

        $instance->initializer0f4e9 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5b363) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5b363 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5b363->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, '__get', ['name' => $name], $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;

        if (isset(self::$publicProperties1612a[$name])) {
            return $this->valueHolder5b363->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5b363;

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

        $targetObject = $this->valueHolder5b363;
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
        $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5b363;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5b363;
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
        $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, '__isset', array('name' => $name), $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5b363;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5b363;
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
        $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, '__unset', array('name' => $name), $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5b363;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5b363;
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
        $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, '__clone', array(), $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;

        $this->valueHolder5b363 = clone $this->valueHolder5b363;
    }

    public function __sleep()
    {
        $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, '__sleep', array(), $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;

        return array('valueHolder5b363');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0f4e9 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0f4e9;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer0f4e9 && ($this->initializer0f4e9->__invoke($valueHolder5b363, $this, 'initializeProxy', array(), $this->initializer0f4e9) || 1) && $this->valueHolder5b363 = $valueHolder5b363;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5b363;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5b363;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
