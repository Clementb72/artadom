<?php

namespace ContainerDAWu3yx;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder66489 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer426c5 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2b4ad = [
        
    ];

    public function getConnection()
    {
        $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, 'getConnection', array(), $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;

        return $this->valueHolder66489->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, 'getMetadataFactory', array(), $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;

        return $this->valueHolder66489->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, 'getExpressionBuilder', array(), $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;

        return $this->valueHolder66489->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, 'beginTransaction', array(), $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;

        return $this->valueHolder66489->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, 'getCache', array(), $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;

        return $this->valueHolder66489->getCache();
    }

    public function transactional($func)
    {
        $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, 'transactional', array('func' => $func), $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;

        return $this->valueHolder66489->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, 'wrapInTransaction', array('func' => $func), $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;

        return $this->valueHolder66489->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, 'commit', array(), $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;

        return $this->valueHolder66489->commit();
    }

    public function rollback()
    {
        $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, 'rollback', array(), $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;

        return $this->valueHolder66489->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, 'getClassMetadata', array('className' => $className), $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;

        return $this->valueHolder66489->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, 'createQuery', array('dql' => $dql), $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;

        return $this->valueHolder66489->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, 'createNamedQuery', array('name' => $name), $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;

        return $this->valueHolder66489->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;

        return $this->valueHolder66489->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;

        return $this->valueHolder66489->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, 'createQueryBuilder', array(), $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;

        return $this->valueHolder66489->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, 'flush', array('entity' => $entity), $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;

        return $this->valueHolder66489->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;

        return $this->valueHolder66489->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;

        return $this->valueHolder66489->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;

        return $this->valueHolder66489->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, 'clear', array('entityName' => $entityName), $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;

        return $this->valueHolder66489->clear($entityName);
    }

    public function close()
    {
        $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, 'close', array(), $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;

        return $this->valueHolder66489->close();
    }

    public function persist($entity)
    {
        $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, 'persist', array('entity' => $entity), $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;

        return $this->valueHolder66489->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, 'remove', array('entity' => $entity), $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;

        return $this->valueHolder66489->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, 'refresh', array('entity' => $entity), $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;

        return $this->valueHolder66489->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, 'detach', array('entity' => $entity), $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;

        return $this->valueHolder66489->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, 'merge', array('entity' => $entity), $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;

        return $this->valueHolder66489->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;

        return $this->valueHolder66489->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;

        return $this->valueHolder66489->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, 'getRepository', array('entityName' => $entityName), $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;

        return $this->valueHolder66489->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, 'contains', array('entity' => $entity), $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;

        return $this->valueHolder66489->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, 'getEventManager', array(), $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;

        return $this->valueHolder66489->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, 'getConfiguration', array(), $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;

        return $this->valueHolder66489->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, 'isOpen', array(), $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;

        return $this->valueHolder66489->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, 'getUnitOfWork', array(), $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;

        return $this->valueHolder66489->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;

        return $this->valueHolder66489->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;

        return $this->valueHolder66489->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, 'getProxyFactory', array(), $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;

        return $this->valueHolder66489->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, 'initializeObject', array('obj' => $obj), $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;

        return $this->valueHolder66489->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, 'getFilters', array(), $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;

        return $this->valueHolder66489->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, 'isFiltersStateClean', array(), $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;

        return $this->valueHolder66489->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, 'hasFilters', array(), $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;

        return $this->valueHolder66489->hasFilters();
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

        $instance->initializer426c5 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder66489) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder66489 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder66489->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, '__get', ['name' => $name], $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;

        if (isset(self::$publicProperties2b4ad[$name])) {
            return $this->valueHolder66489->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder66489;

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

        $targetObject = $this->valueHolder66489;
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
        $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder66489;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder66489;
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
        $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, '__isset', array('name' => $name), $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder66489;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder66489;
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
        $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, '__unset', array('name' => $name), $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder66489;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder66489;
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
        $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, '__clone', array(), $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;

        $this->valueHolder66489 = clone $this->valueHolder66489;
    }

    public function __sleep()
    {
        $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, '__sleep', array(), $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;

        return array('valueHolder66489');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer426c5 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer426c5;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer426c5 && ($this->initializer426c5->__invoke($valueHolder66489, $this, 'initializeProxy', array(), $this->initializer426c5) || 1) && $this->valueHolder66489 = $valueHolder66489;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder66489;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder66489;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
