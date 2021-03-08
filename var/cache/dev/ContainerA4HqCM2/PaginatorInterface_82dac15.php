<?php

namespace ContainerA4HqCM2;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
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

    public function paginate($target, int $page = 1, int $limit = 10, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        if ($this->valueHolder4382c === $returnValue = $this->valueHolder4382c->paginate($target, $page, $limit, $options)) {
            return $this;
        }

        return $returnValue;
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

        $instance->initializer693aa = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder4382c) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder4382c = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer693aa && ($this->initializer693aa->__invoke($valueHolder4382c, $this, '__get', ['name' => $name], $this->initializer693aa) || 1) && $this->valueHolder4382c = $valueHolder4382c;

        if (isset(self::$publicProperties0e744[$name])) {
            return $this->valueHolder4382c->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
