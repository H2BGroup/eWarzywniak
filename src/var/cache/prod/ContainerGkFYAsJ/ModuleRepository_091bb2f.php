<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder7bf1e = null;
    private $initializerd77c7 = null;
    private static $publicProperties0f820 = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'getList', array(), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'getInstalledModules', array(), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'getMustBeConfiguredModules', array(), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'getUpgradableModules', array(), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'getModule', array('moduleName' => $moduleName), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'setActionUrls', array('collection' => $collection), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializerd77c7 = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolder7bf1e) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder7bf1e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolder7bf1e->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, '__get', ['name' => $name], $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        if (isset(self::$publicProperties0f820[$name])) {
            return $this->valueHolder7bf1e->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7bf1e;
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
        $targetObject = $this->valueHolder7bf1e;
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
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7bf1e;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder7bf1e;
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
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, '__isset', array('name' => $name), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7bf1e;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder7bf1e;
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
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, '__unset', array('name' => $name), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7bf1e;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder7bf1e;
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
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, '__clone', array(), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        $this->valueHolder7bf1e = clone $this->valueHolder7bf1e;
    }
    public function __sleep()
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, '__sleep', array(), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return array('valueHolder7bf1e');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd77c7 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd77c7;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'initializeProxy', array(), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7bf1e;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7bf1e;
    }
}
