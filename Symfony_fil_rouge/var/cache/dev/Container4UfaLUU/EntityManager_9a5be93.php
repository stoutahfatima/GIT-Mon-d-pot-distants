<?php

namespace Container4UfaLUU;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder92d93 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera1cc6 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties20613 = [
        
    ];

    public function getConnection()
    {
        $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, 'getConnection', array(), $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;

        return $this->valueHolder92d93->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, 'getMetadataFactory', array(), $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;

        return $this->valueHolder92d93->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, 'getExpressionBuilder', array(), $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;

        return $this->valueHolder92d93->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, 'beginTransaction', array(), $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;

        return $this->valueHolder92d93->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, 'getCache', array(), $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;

        return $this->valueHolder92d93->getCache();
    }

    public function transactional($func)
    {
        $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, 'transactional', array('func' => $func), $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;

        return $this->valueHolder92d93->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, 'wrapInTransaction', array('func' => $func), $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;

        return $this->valueHolder92d93->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, 'commit', array(), $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;

        return $this->valueHolder92d93->commit();
    }

    public function rollback()
    {
        $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, 'rollback', array(), $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;

        return $this->valueHolder92d93->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, 'getClassMetadata', array('className' => $className), $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;

        return $this->valueHolder92d93->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, 'createQuery', array('dql' => $dql), $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;

        return $this->valueHolder92d93->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, 'createNamedQuery', array('name' => $name), $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;

        return $this->valueHolder92d93->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;

        return $this->valueHolder92d93->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;

        return $this->valueHolder92d93->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, 'createQueryBuilder', array(), $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;

        return $this->valueHolder92d93->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, 'flush', array('entity' => $entity), $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;

        return $this->valueHolder92d93->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;

        return $this->valueHolder92d93->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;

        return $this->valueHolder92d93->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;

        return $this->valueHolder92d93->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, 'clear', array('entityName' => $entityName), $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;

        return $this->valueHolder92d93->clear($entityName);
    }

    public function close()
    {
        $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, 'close', array(), $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;

        return $this->valueHolder92d93->close();
    }

    public function persist($entity)
    {
        $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, 'persist', array('entity' => $entity), $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;

        return $this->valueHolder92d93->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, 'remove', array('entity' => $entity), $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;

        return $this->valueHolder92d93->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, 'refresh', array('entity' => $entity), $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;

        return $this->valueHolder92d93->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, 'detach', array('entity' => $entity), $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;

        return $this->valueHolder92d93->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, 'merge', array('entity' => $entity), $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;

        return $this->valueHolder92d93->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;

        return $this->valueHolder92d93->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;

        return $this->valueHolder92d93->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, 'getRepository', array('entityName' => $entityName), $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;

        return $this->valueHolder92d93->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, 'contains', array('entity' => $entity), $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;

        return $this->valueHolder92d93->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, 'getEventManager', array(), $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;

        return $this->valueHolder92d93->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, 'getConfiguration', array(), $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;

        return $this->valueHolder92d93->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, 'isOpen', array(), $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;

        return $this->valueHolder92d93->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, 'getUnitOfWork', array(), $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;

        return $this->valueHolder92d93->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;

        return $this->valueHolder92d93->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;

        return $this->valueHolder92d93->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, 'getProxyFactory', array(), $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;

        return $this->valueHolder92d93->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, 'initializeObject', array('obj' => $obj), $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;

        return $this->valueHolder92d93->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, 'getFilters', array(), $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;

        return $this->valueHolder92d93->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, 'isFiltersStateClean', array(), $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;

        return $this->valueHolder92d93->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, 'hasFilters', array(), $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;

        return $this->valueHolder92d93->hasFilters();
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

        $instance->initializera1cc6 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder92d93) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder92d93 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder92d93->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, '__get', ['name' => $name], $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;

        if (isset(self::$publicProperties20613[$name])) {
            return $this->valueHolder92d93->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder92d93;

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

        $targetObject = $this->valueHolder92d93;
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
        $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder92d93;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder92d93;
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
        $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, '__isset', array('name' => $name), $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder92d93;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder92d93;
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
        $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, '__unset', array('name' => $name), $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder92d93;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder92d93;
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
        $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, '__clone', array(), $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;

        $this->valueHolder92d93 = clone $this->valueHolder92d93;
    }

    public function __sleep()
    {
        $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, '__sleep', array(), $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;

        return array('valueHolder92d93');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera1cc6 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera1cc6;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera1cc6 && ($this->initializera1cc6->__invoke($valueHolder92d93, $this, 'initializeProxy', array(), $this->initializera1cc6) || 1) && $this->valueHolder92d93 = $valueHolder92d93;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder92d93;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder92d93;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
