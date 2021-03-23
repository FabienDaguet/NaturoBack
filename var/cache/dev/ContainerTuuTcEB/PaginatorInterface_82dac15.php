<?php

namespace ContainerTuuTcEB;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
     */
    private $valueHolder08b43 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer42bb0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3e1c0 = [
        
    ];

    public function paginate($target, int $page = 1, int $limit = 10, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer42bb0 && ($this->initializer42bb0->__invoke($valueHolder08b43, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer42bb0) || 1) && $this->valueHolder08b43 = $valueHolder08b43;

        if ($this->valueHolder08b43 === $returnValue = $this->valueHolder08b43->paginate($target, $page, $limit, $options)) {
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

        $instance->initializer42bb0 = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolder08b43) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolder08b43 = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer42bb0 && ($this->initializer42bb0->__invoke($valueHolder08b43, $this, '__get', ['name' => $name], $this->initializer42bb0) || 1) && $this->valueHolder08b43 = $valueHolder08b43;

        if (isset(self::$publicProperties3e1c0[$name])) {
            return $this->valueHolder08b43->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder08b43;

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

        $targetObject = $this->valueHolder08b43;
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
        $this->initializer42bb0 && ($this->initializer42bb0->__invoke($valueHolder08b43, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer42bb0) || 1) && $this->valueHolder08b43 = $valueHolder08b43;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder08b43;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder08b43;
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
        $this->initializer42bb0 && ($this->initializer42bb0->__invoke($valueHolder08b43, $this, '__isset', array('name' => $name), $this->initializer42bb0) || 1) && $this->valueHolder08b43 = $valueHolder08b43;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder08b43;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder08b43;
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
        $this->initializer42bb0 && ($this->initializer42bb0->__invoke($valueHolder08b43, $this, '__unset', array('name' => $name), $this->initializer42bb0) || 1) && $this->valueHolder08b43 = $valueHolder08b43;

        $realInstanceReflection = new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder08b43;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder08b43;
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
        $this->initializer42bb0 && ($this->initializer42bb0->__invoke($valueHolder08b43, $this, '__clone', array(), $this->initializer42bb0) || 1) && $this->valueHolder08b43 = $valueHolder08b43;

        $this->valueHolder08b43 = clone $this->valueHolder08b43;
    }

    public function __sleep()
    {
        $this->initializer42bb0 && ($this->initializer42bb0->__invoke($valueHolder08b43, $this, '__sleep', array(), $this->initializer42bb0) || 1) && $this->valueHolder08b43 = $valueHolder08b43;

        return array('valueHolder08b43');
    }

    public function __wakeup()
    {
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer42bb0 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer42bb0;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer42bb0 && ($this->initializer42bb0->__invoke($valueHolder08b43, $this, 'initializeProxy', array(), $this->initializer42bb0) || 1) && $this->valueHolder08b43 = $valueHolder08b43;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder08b43;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder08b43;
    }
}

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
