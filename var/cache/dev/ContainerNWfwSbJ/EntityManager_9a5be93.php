<?php

namespace ContainerNWfwSbJ;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc7b85 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2f3dc = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties76b82 = [
        
    ];

    public function getConnection()
    {
        $this->initializer2f3dc && ($this->initializer2f3dc->__invoke($valueHolderc7b85, $this, 'getConnection', array(), $this->initializer2f3dc) || 1) && $this->valueHolderc7b85 = $valueHolderc7b85;

        return $this->valueHolderc7b85->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer2f3dc && ($this->initializer2f3dc->__invoke($valueHolderc7b85, $this, 'getMetadataFactory', array(), $this->initializer2f3dc) || 1) && $this->valueHolderc7b85 = $valueHolderc7b85;

        return $this->valueHolderc7b85->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer2f3dc && ($this->initializer2f3dc->__invoke($valueHolderc7b85, $this, 'getExpressionBuilder', array(), $this->initializer2f3dc) || 1) && $this->valueHolderc7b85 = $valueHolderc7b85;

        return $this->valueHolderc7b85->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer2f3dc && ($this->initializer2f3dc->__invoke($valueHolderc7b85, $this, 'beginTransaction', array(), $this->initializer2f3dc) || 1) && $this->valueHolderc7b85 = $valueHolderc7b85;

        return $this->valueHolderc7b85->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer2f3dc && ($this->initializer2f3dc->__invoke($valueHolderc7b85, $this, 'getCache', array(), $this->initializer2f3dc) || 1) && $this->valueHolderc7b85 = $valueHolderc7b85;

        return $this->valueHolderc7b85->getCache();
    }

    public function transactional($func)
    {
        $this->initializer2f3dc && ($this->initializer2f3dc->__invoke($valueHolderc7b85, $this, 'transactional', array('func' => $func), $this->initializer2f3dc) || 1) && $this->valueHolderc7b85 = $valueHolderc7b85;

        return $this->valueHolderc7b85->transactional($func);
    }

    public function commit()
    {
        $this->initializer2f3dc && ($this->initializer2f3dc->__invoke($valueHolderc7b85, $this, 'commit', array(), $this->initializer2f3dc) || 1) && $this->valueHolderc7b85 = $valueHolderc7b85;

        return $this->valueHolderc7b85->commit();
    }

    public function rollback()
    {
        $this->initializer2f3dc && ($this->initializer2f3dc->__invoke($valueHolderc7b85, $this, 'rollback', array(), $this->initializer2f3dc) || 1) && $this->valueHolderc7b85 = $valueHolderc7b85;

        return $this->valueHolderc7b85->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer2f3dc && ($this->initializer2f3dc->__invoke($valueHolderc7b85, $this, 'getClassMetadata', array('className' => $className), $this->initializer2f3dc) || 1) && $this->valueHolderc7b85 = $valueHolderc7b85;

        return $this->valueHolderc7b85->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer2f3dc && ($this->initializer2f3dc->__invoke($valueHolderc7b85, $this, 'createQuery', array('dql' => $dql), $this->initializer2f3dc) || 1) && $this->valueHolderc7b85 = $valueHolderc7b85;

        return $this->valueHolderc7b85->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer2f3dc && ($this->initializer2f3dc->__invoke($valueHolderc7b85, $this, 'createNamedQuery', array('name' => $name), $this->initializer2f3dc) || 1) && $this->valueHolderc7b85 = $valueHolderc7b85;

        return $this->valueHolderc7b85->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer2f3dc && ($this->initializer2f3dc->__invoke($valueHolderc7b85, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer2f3dc) || 1) && $this->valueHolderc7b85 = $valueHolderc7b85;

        return $this->valueHolderc7b85->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer2f3dc && ($this->initializer2f3dc->__invoke($valueHolderc7b85, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer2f3dc) || 1) && $this->valueHolderc7b85 = $valueHolderc7b85;

        return $this->valueHolderc7b85->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer2f3dc && ($this->initializer2f3dc->__invoke($valueHolderc7b85, $this, 'createQueryBuilder', array(), $this->initializer2f3dc) || 1) && $this->valueHolderc7b85 = $valueHolderc7b85;

        return $this->valueHolderc7b85->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer2f3dc && ($this->initializer2f3dc->__invoke($valueHolderc7b85, $this, 'flush', array('entity' => $entity), $this->initializer2f3dc) || 1) && $this->valueHolderc7b85 = $valueHolderc7b85;

        return $this->valueHolderc7b85->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer2f3dc && ($this->initializer2f3dc->__invoke($valueHolderc7b85, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2f3dc) || 1) && $this->valueHolderc7b85 = $valueHolderc7b85;

        return $this->valueHolderc7b85->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer2f3dc && ($this->initializer2f3dc->__invoke($valueHolderc7b85, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer2f3dc) || 1) && $this->valueHolderc7b85 = $valueHolderc7b85;

        return $this->valueHolderc7b85->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer2f3dc && ($this->initializer2f3dc->__invoke($valueHolderc7b85, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer2f3dc) || 1) && $this->valueHolderc7b85 = $valueHolderc7b85;

        return $this->valueHolderc7b85->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer2f3dc && ($this->initializer2f3dc->__invoke($valueHolderc7b85, $this, 'clear', array('entityName' => $entityName), $this->initializer2f3dc) || 1) && $this->valueHolderc7b85 = $valueHolderc7b85;

        return $this->valueHolderc7b85->clear($entityName);
    }

    public function close()
    {
        $this->initializer2f3dc && ($this->initializer2f3dc->__invoke($valueHolderc7b85, $this, 'close', array(), $this->initializer2f3dc) || 1) && $this->valueHolderc7b85 = $valueHolderc7b85;

        return $this->valueHolderc7b85->close();
    }

    public function persist($entity)
    {
        $this->initializer2f3dc && ($this->initializer2f3dc->__invoke($valueHolderc7b85, $this, 'persist', array('entity' => $entity), $this->initializer2f3dc) || 1) && $this->valueHolderc7b85 = $valueHolderc7b85;

        return $this->valueHolderc7b85->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer2f3dc && ($this->initializer2f3dc->__invoke($valueHolderc7b85, $this, 'remove', array('entity' => $entity), $this->initializer2f3dc) || 1) && $this->valueHolderc7b85 = $valueHolderc7b85;

        return $this->valueHolderc7b85->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer2f3dc && ($this->initializer2f3dc->__invoke($valueHolderc7b85, $this, 'refresh', array('entity' => $entity), $this->initializer2f3dc) || 1) && $this->valueHolderc7b85 = $valueHolderc7b85;

        return $this->valueHolderc7b85->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer2f3dc && ($this->initializer2f3dc->__invoke($valueHolderc7b85, $this, 'detach', array('entity' => $entity), $this->initializer2f3dc) || 1) && $this->valueHolderc7b85 = $valueHolderc7b85;

        return $this->valueHolderc7b85->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer2f3dc && ($this->initializer2f3dc->__invoke($valueHolderc7b85, $this, 'merge', array('entity' => $entity), $this->initializer2f3dc) || 1) && $this->valueHolderc7b85 = $valueHolderc7b85;

        return $this->valueHolderc7b85->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer2f3dc && ($this->initializer2f3dc->__invoke($valueHolderc7b85, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer2f3dc) || 1) && $this->valueHolderc7b85 = $valueHolderc7b85;

        return $this->valueHolderc7b85->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer2f3dc && ($this->initializer2f3dc->__invoke($valueHolderc7b85, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer2f3dc) || 1) && $this->valueHolderc7b85 = $valueHolderc7b85;

        return $this->valueHolderc7b85->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer2f3dc && ($this->initializer2f3dc->__invoke($valueHolderc7b85, $this, 'getRepository', array('entityName' => $entityName), $this->initializer2f3dc) || 1) && $this->valueHolderc7b85 = $valueHolderc7b85;

        return $this->valueHolderc7b85->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer2f3dc && ($this->initializer2f3dc->__invoke($valueHolderc7b85, $this, 'contains', array('entity' => $entity), $this->initializer2f3dc) || 1) && $this->valueHolderc7b85 = $valueHolderc7b85;

        return $this->valueHolderc7b85->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer2f3dc && ($this->initializer2f3dc->__invoke($valueHolderc7b85, $this, 'getEventManager', array(), $this->initializer2f3dc) || 1) && $this->valueHolderc7b85 = $valueHolderc7b85;

        return $this->valueHolderc7b85->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer2f3dc && ($this->initializer2f3dc->__invoke($valueHolderc7b85, $this, 'getConfiguration', array(), $this->initializer2f3dc) || 1) && $this->valueHolderc7b85 = $valueHolderc7b85;

        return $this->valueHolderc7b85->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer2f3dc && ($this->initializer2f3dc->__invoke($valueHolderc7b85, $this, 'isOpen', array(), $this->initializer2f3dc) || 1) && $this->valueHolderc7b85 = $valueHolderc7b85;

        return $this->valueHolderc7b85->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer2f3dc && ($this->initializer2f3dc->__invoke($valueHolderc7b85, $this, 'getUnitOfWork', array(), $this->initializer2f3dc) || 1) && $this->valueHolderc7b85 = $valueHolderc7b85;

        return $this->valueHolderc7b85->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer2f3dc && ($this->initializer2f3dc->__invoke($valueHolderc7b85, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2f3dc) || 1) && $this->valueHolderc7b85 = $valueHolderc7b85;

        return $this->valueHolderc7b85->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer2f3dc && ($this->initializer2f3dc->__invoke($valueHolderc7b85, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer2f3dc) || 1) && $this->valueHolderc7b85 = $valueHolderc7b85;

        return $this->valueHolderc7b85->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer2f3dc && ($this->initializer2f3dc->__invoke($valueHolderc7b85, $this, 'getProxyFactory', array(), $this->initializer2f3dc) || 1) && $this->valueHolderc7b85 = $valueHolderc7b85;

        return $this->valueHolderc7b85->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer2f3dc && ($this->initializer2f3dc->__invoke($valueHolderc7b85, $this, 'initializeObject', array('obj' => $obj), $this->initializer2f3dc) || 1) && $this->valueHolderc7b85 = $valueHolderc7b85;

        return $this->valueHolderc7b85->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer2f3dc && ($this->initializer2f3dc->__invoke($valueHolderc7b85, $this, 'getFilters', array(), $this->initializer2f3dc) || 1) && $this->valueHolderc7b85 = $valueHolderc7b85;

        return $this->valueHolderc7b85->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer2f3dc && ($this->initializer2f3dc->__invoke($valueHolderc7b85, $this, 'isFiltersStateClean', array(), $this->initializer2f3dc) || 1) && $this->valueHolderc7b85 = $valueHolderc7b85;

        return $this->valueHolderc7b85->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer2f3dc && ($this->initializer2f3dc->__invoke($valueHolderc7b85, $this, 'hasFilters', array(), $this->initializer2f3dc) || 1) && $this->valueHolderc7b85 = $valueHolderc7b85;

        return $this->valueHolderc7b85->hasFilters();
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

        $instance->initializer2f3dc = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc7b85) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc7b85 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc7b85->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer2f3dc && ($this->initializer2f3dc->__invoke($valueHolderc7b85, $this, '__get', ['name' => $name], $this->initializer2f3dc) || 1) && $this->valueHolderc7b85 = $valueHolderc7b85;

        if (isset(self::$publicProperties76b82[$name])) {
            return $this->valueHolderc7b85->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc7b85;

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

        $targetObject = $this->valueHolderc7b85;
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
        $this->initializer2f3dc && ($this->initializer2f3dc->__invoke($valueHolderc7b85, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer2f3dc) || 1) && $this->valueHolderc7b85 = $valueHolderc7b85;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc7b85;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc7b85;
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
        $this->initializer2f3dc && ($this->initializer2f3dc->__invoke($valueHolderc7b85, $this, '__isset', array('name' => $name), $this->initializer2f3dc) || 1) && $this->valueHolderc7b85 = $valueHolderc7b85;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc7b85;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc7b85;
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
        $this->initializer2f3dc && ($this->initializer2f3dc->__invoke($valueHolderc7b85, $this, '__unset', array('name' => $name), $this->initializer2f3dc) || 1) && $this->valueHolderc7b85 = $valueHolderc7b85;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc7b85;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc7b85;
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
        $this->initializer2f3dc && ($this->initializer2f3dc->__invoke($valueHolderc7b85, $this, '__clone', array(), $this->initializer2f3dc) || 1) && $this->valueHolderc7b85 = $valueHolderc7b85;

        $this->valueHolderc7b85 = clone $this->valueHolderc7b85;
    }

    public function __sleep()
    {
        $this->initializer2f3dc && ($this->initializer2f3dc->__invoke($valueHolderc7b85, $this, '__sleep', array(), $this->initializer2f3dc) || 1) && $this->valueHolderc7b85 = $valueHolderc7b85;

        return array('valueHolderc7b85');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2f3dc = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2f3dc;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2f3dc && ($this->initializer2f3dc->__invoke($valueHolderc7b85, $this, 'initializeProxy', array(), $this->initializer2f3dc) || 1) && $this->valueHolderc7b85 = $valueHolderc7b85;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc7b85;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc7b85;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
