<?php

namespace ContainerA4HqCM2;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4382c = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer693aa = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties0e744 = [
        
    ];

    public function getConnection()
    {
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, 'getConnection', array(), $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        return $this->valueHolder4382c->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, 'getMetadataFactory', array(), $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        return $this->valueHolder4382c->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, 'getExpressionBuilder', array(), $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        return $this->valueHolder4382c->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, 'beginTransaction', array(), $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        return $this->valueHolder4382c->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, 'getCache', array(), $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        return $this->valueHolder4382c->getCache();
    }

    public function transactional($func)
    {
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, 'transactional', array('func' => $func), $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        return $this->valueHolder4382c->transactional($func);
    }

    public function commit()
    {
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, 'commit', array(), $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        return $this->valueHolder4382c->commit();
    }

    public function rollback()
    {
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, 'rollback', array(), $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        return $this->valueHolder4382c->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, 'getClassMetadata', array('className' => $className), $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        return $this->valueHolder4382c->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, 'createQuery', array('dql' => $dql), $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        return $this->valueHolder4382c->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, 'createNamedQuery', array('name' => $name), $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        return $this->valueHolder4382c->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        return $this->valueHolder4382c->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        return $this->valueHolder4382c->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, 'createQueryBuilder', array(), $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        return $this->valueHolder4382c->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, 'flush', array('entity' => $entity), $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        return $this->valueHolder4382c->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        return $this->valueHolder4382c->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        return $this->valueHolder4382c->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        return $this->valueHolder4382c->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, 'clear', array('entityName' => $entityName), $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        return $this->valueHolder4382c->clear($entityName);
    }

    public function close()
    {
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, 'close', array(), $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        return $this->valueHolder4382c->close();
    }

    public function persist($entity)
    {
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, 'persist', array('entity' => $entity), $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        return $this->valueHolder4382c->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, 'remove', array('entity' => $entity), $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        return $this->valueHolder4382c->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, 'refresh', array('entity' => $entity), $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        return $this->valueHolder4382c->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, 'detach', array('entity' => $entity), $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        return $this->valueHolder4382c->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, 'merge', array('entity' => $entity), $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        return $this->valueHolder4382c->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        return $this->valueHolder4382c->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        return $this->valueHolder4382c->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, 'getRepository', array('entityName' => $entityName), $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        return $this->valueHolder4382c->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, 'contains', array('entity' => $entity), $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        return $this->valueHolder4382c->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, 'getEventManager', array(), $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        return $this->valueHolder4382c->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, 'getConfiguration', array(), $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        return $this->valueHolder4382c->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, 'isOpen', array(), $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        return $this->valueHolder4382c->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, 'getUnitOfWork', array(), $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        return $this->valueHolder4382c->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        return $this->valueHolder4382c->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        return $this->valueHolder4382c->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, 'getProxyFactory', array(), $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        return $this->valueHolder4382c->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, 'initializeObject', array('obj' => $obj), $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        return $this->valueHolder4382c->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, 'getFilters', array(), $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        return $this->valueHolder4382c->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, 'isFiltersStateClean', array(), $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        return $this->valueHolder4382c->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, 'hasFilters', array(), $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        return $this->valueHolder4382c->hasFilters();
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

        $instance->initializer693aa = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder4382c) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4382c = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder4382c->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, '__get', ['name' => $name], $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        if (isset(self::$publicProperties0e744[$name])) {
            return $this->valueHolder4382c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4382c;

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

        $targetObject = $this->valueHolder4382c;
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
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4382c;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder4382c;
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
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, '__isset', array('name' => $name), $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4382c;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder4382c;
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
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, '__unset', array('name' => $name), $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4382c;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder4382c;
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
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, '__clone', array(), $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        $this->valueHolder4382c = clone $this->valueHolder4382c;
    }

    public function __sleep()
    {
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, '__sleep', array(), $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        return array('valueHolder4382c');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer693aa = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer693aa;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, 'initializeProxy', array(), $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4382c;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4382c;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
