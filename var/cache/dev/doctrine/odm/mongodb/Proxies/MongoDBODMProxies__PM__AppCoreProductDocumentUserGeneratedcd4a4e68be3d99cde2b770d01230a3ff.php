<?php

namespace MongoDBODMProxies\__PM__\App\Core\Product\Document\User;

class Generatedcd4a4e68be3d99cde2b770d01230a3ff extends \App\Core\Product\Document\User implements \ProxyManager\Proxy\GhostObjectInterface
{
    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer2a85a = null;

    /**
     * @var bool tracks initialization status - true while the object is initializing
     */
    private $initializationTracker0db13 = false;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesf975e = [
        
    ];

    /**
     * @var array[][] visibility and default value of defined properties, indexed by
     * property name and class name
     */
    private static $privateProperties50afd = [
        
    ];

    /**
     * @var string[][] declaring class name of defined protected properties, indexed by
     * property name
     */
    private static $protectedProperties9e9ab = [
        'name' => 'App\\Core\\Product\\Document\\User',
        'first_name' => 'App\\Core\\Product\\Document\\User',
        'last_name' => 'App\\Core\\Product\\Document\\User',
        'email' => 'App\\Core\\Product\\Document\\User',
        'birthdate' => 'App\\Core\\Product\\Document\\User',
        'rating' => 'App\\Core\\Product\\Document\\User',
        'age' => 'App\\Core\\Product\\Document\\User',
        'city_id' => 'App\\Core\\Product\\Document\\User',
        'reg_date' => 'App\\Core\\Product\\Document\\User',
        'phone' => 'App\\Core\\Product\\Document\\User',
        'roles' => 'App\\Core\\Product\\Document\\User',
        'createdAt' => 'App\\Core\\Common\\Document\\AbstractDocument',
        'updatedAt' => 'App\\Core\\Common\\Document\\AbstractDocument',
    ];

    private static $signaturecd4a4e68be3d99cde2b770d01230a3ff = 'YTo0OntzOjk6ImNsYXNzTmFtZSI7czozMDoiQXBwXENvcmVcUHJvZHVjdFxEb2N1bWVudFxVc2VyIjtzOjc6ImZhY3RvcnkiO3M6NDQ6IlByb3h5TWFuYWdlclxGYWN0b3J5XExhenlMb2FkaW5nR2hvc3RGYWN0b3J5IjtzOjE5OiJwcm94eU1hbmFnZXJWZXJzaW9uIjtzOjQ3OiJ2MS4wLjVAMDA2YWE1ZDMyZjg4N2E0ZGI0MzUzYjEzYjViNTA5NTYxM2UwNjExZiI7czoxMjoicHJveHlPcHRpb25zIjthOjE6e3M6MTc6InNraXBwZWRQcm9wZXJ0aWVzIjthOjE6e2k6MDtzOjU6IgAqAGlkIjt9fX0=';

    /**
     * Triggers initialization logic for this ghost object
     *
     * @param string  $methodName
     * @param mixed[] $parameters
     *
     * @return mixed
     */
    private function callInitializer81b00($methodName, array $parameters)
    {
        if ($this->initializationTracker0db13 || ! $this->initializer2a85a) {
            return;
        }

        $this->initializationTracker0db13 = true;

        $this->name = NULL;
        $this->first_name = NULL;
        $this->last_name = NULL;
        $this->birthdate = NULL;
        $this->rating = NULL;
        $this->age = NULL;
        $this->city_id = NULL;
        $this->reg_date = NULL;
        $this->phone = NULL;
        $this->roles = array (
        );
        $this->createdAt = NULL;
        $this->updatedAt = NULL;


        $properties = [
            '' . "\0" . '*' . "\0" . 'name' => & $this->name,
            '' . "\0" . '*' . "\0" . 'first_name' => & $this->first_name,
            '' . "\0" . '*' . "\0" . 'last_name' => & $this->last_name,
            '' . "\0" . '*' . "\0" . 'birthdate' => & $this->birthdate,
            '' . "\0" . '*' . "\0" . 'rating' => & $this->rating,
            '' . "\0" . '*' . "\0" . 'age' => & $this->age,
            '' . "\0" . '*' . "\0" . 'city_id' => & $this->city_id,
            '' . "\0" . '*' . "\0" . 'reg_date' => & $this->reg_date,
            '' . "\0" . '*' . "\0" . 'phone' => & $this->phone,
            '' . "\0" . '*' . "\0" . 'roles' => & $this->roles,
            '' . "\0" . '*' . "\0" . 'createdAt' => & $this->createdAt,
            '' . "\0" . '*' . "\0" . 'updatedAt' => & $this->updatedAt,
        ];



        $result = $this->initializer2a85a->__invoke($this, $methodName, $parameters, $this->initializer2a85a, $properties);
        $this->initializationTracker0db13 = false;

        return $result;
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

        unset($instance->name, $instance->first_name, $instance->last_name, $instance->email, $instance->birthdate, $instance->rating, $instance->age, $instance->city_id, $instance->reg_date, $instance->phone, $instance->roles, $instance->createdAt, $instance->updatedAt);

        $instance->initializer2a85a = $initializer;

        return $instance;
    }

    public function & __get($name)
    {
        $this->initializer2a85a && ! $this->initializationTracker0db13 && $this->callInitializer81b00('__get', array('name' => $name));

        if (isset(self::$publicPropertiesf975e[$name])) {
            return $this->$name;
        }

        if (isset(self::$protectedProperties9e9ab[$name])) {
            if ($this->initializationTracker0db13) {
                return $this->$name;
            }

            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedProperties9e9ab[$name];

            if ($object instanceof $expectedType) {
                return $this->$name;
            }

            $class = isset($caller['class']) ? $caller['class'] : '';

            if ($class === $expectedType || is_subclass_of($class, $expectedType) || $class === 'ReflectionProperty') {
                return $this->$name;
            }
        } elseif (isset(self::$privateProperties50afd[$name])) {
            // check private property access via same class
            $callers = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller  = isset($callers[1]) ? $callers[1] : [];
            $class   = isset($caller['class']) ? $caller['class'] : '';

            static $accessorCache = [];

            if (isset(self::$privateProperties50afd[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function & ($instance) use ($name) {
                        return $instance->$name;
                    }, null, $class);

                return $accessor($this);
            }

            if ($this->initializationTracker0db13 || 'ReflectionProperty' === $class) {
                $tmpClass = key(self::$privateProperties50afd[$name]);
                $cacheKey = $tmpClass . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function & ($instance) use ($name) {
                        return $instance->$name;
                    }, null, $tmpClass);

                return $accessor($this);
            }
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this;

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

        $targetObject = $realInstanceReflection->newInstanceWithoutConstructor();
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
        $this->initializer2a85a && $this->callInitializer81b00('__set', array('name' => $name, 'value' => $value));

        if (isset(self::$publicPropertiesf975e[$name])) {
            return ($this->$name = $value);
        }

        if (isset(self::$protectedProperties9e9ab[$name])) {
            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedProperties9e9ab[$name];

            if ($object instanceof $expectedType) {
                return ($this->$name = $value);
            }

            $class = isset($caller['class']) ? $caller['class'] : '';

            if ($class === $expectedType || is_subclass_of($class, $expectedType) || $class === 'ReflectionProperty') {
                return ($this->$name = $value);
            }
        } elseif (isset(self::$privateProperties50afd[$name])) {
            // check private property access via same class
            $callers = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller  = isset($callers[1]) ? $callers[1] : [];
            $class   = isset($caller['class']) ? $caller['class'] : '';

            static $accessorCache = [];

            if (isset(self::$privateProperties50afd[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance, $value) use ($name) {
                        return ($instance->$name = $value);
                    }, null, $class);

                return $accessor($this, $value);
            }

            if ('ReflectionProperty' === $class) {
                $tmpClass = key(self::$privateProperties50afd[$name]);
                $cacheKey = $tmpClass . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance, $value) use ($name) {
                        return ($instance->$name = $value);
                    }, null, $tmpClass);

                return $accessor($this, $value);
            }
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $realInstanceReflection->newInstanceWithoutConstructor();
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
        $this->initializer2a85a && $this->callInitializer81b00('__isset', array('name' => $name));

        if (isset(self::$publicPropertiesf975e[$name])) {
            return isset($this->$name);
        }

        if (isset(self::$protectedProperties9e9ab[$name])) {
            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedProperties9e9ab[$name];

            if ($object instanceof $expectedType) {
                return isset($this->$name);
            }

            $class = isset($caller['class']) ? $caller['class'] : '';

            if ($class === $expectedType || is_subclass_of($class, $expectedType)) {
                return isset($this->$name);
            }
        } else {
            // check private property access via same class
            $callers = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller  = isset($callers[1]) ? $callers[1] : [];
            $class   = isset($caller['class']) ? $caller['class'] : '';

            static $accessorCache = [];

            if (isset(self::$privateProperties50afd[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance) use ($name) {
                        return isset($instance->$name);
                    }, null, $class);

                return $accessor($this);
            }

            if ('ReflectionProperty' === $class) {
                $tmpClass = key(self::$privateProperties50afd[$name]);
                $cacheKey = $tmpClass . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance) use ($name) {
                        return isset($instance->$name);
                    }, null, $tmpClass);

                return $accessor($this);
            }
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this;

            return isset($targetObject->$name);
        }

        $targetObject = $realInstanceReflection->newInstanceWithoutConstructor();
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
        $this->initializer2a85a && $this->callInitializer81b00('__unset', array('name' => $name));

        if (isset(self::$publicPropertiesf975e[$name])) {
            unset($this->$name);

            return;
        }

        if (isset(self::$protectedProperties9e9ab[$name])) {
            // check protected property access via compatible class
            $callers      = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller       = isset($callers[1]) ? $callers[1] : [];
            $object       = isset($caller['object']) ? $caller['object'] : '';
            $expectedType = self::$protectedProperties9e9ab[$name];

            if ($object instanceof $expectedType) {
                unset($this->$name);

                return;
            }

            $class = isset($caller['class']) ? $caller['class'] : '';

            if ($class === $expectedType || is_subclass_of($class, $expectedType) || $class === 'ReflectionProperty') {
                unset($this->$name);

                return;
            }
        } elseif (isset(self::$privateProperties50afd[$name])) {
            // check private property access via same class
            $callers = debug_backtrace(\DEBUG_BACKTRACE_PROVIDE_OBJECT, 2);
            $caller  = isset($callers[1]) ? $callers[1] : [];
            $class   = isset($caller['class']) ? $caller['class'] : '';

            static $accessorCache = [];

            if (isset(self::$privateProperties50afd[$name][$class])) {
                $cacheKey = $class . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance) use ($name) {
                        unset($instance->$name);
                    }, null, $class);

                return $accessor($this);
            }

            if ('ReflectionProperty' === $class) {
                $tmpClass = key(self::$privateProperties50afd[$name]);
                $cacheKey = $tmpClass . '#' . $name;
                $accessor = isset($accessorCache[$cacheKey])
                    ? $accessorCache[$cacheKey]
                    : $accessorCache[$cacheKey] = \Closure::bind(static function ($instance) use ($name) {
                        unset($instance->$name);
                    }, null, $tmpClass);

                return $accessor($this);
            }
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $realInstanceReflection->newInstanceWithoutConstructor();
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
        $this->initializer2a85a && $this->callInitializer81b00('__clone', []);
    }

    public function __sleep()
    {
        $this->initializer2a85a && $this->callInitializer81b00('__sleep', []);

        return array_keys((array) $this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer2a85a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer2a85a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer2a85a && $this->callInitializer81b00('initializeProxy', []);
    }

    public function isProxyInitialized() : bool
    {
        return ! $this->initializer2a85a;
    }
}
