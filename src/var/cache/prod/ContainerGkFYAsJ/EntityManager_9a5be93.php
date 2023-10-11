<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder7bf1e = null;
    private $initializerd77c7 = null;
    private static $publicProperties0f820 = [
        
    ];
    public function getConnection()
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'getConnection', array(), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'getMetadataFactory', array(), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'getExpressionBuilder', array(), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'beginTransaction', array(), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'getCache', array(), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->getCache();
    }
    public function transactional($func)
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'transactional', array('func' => $func), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'commit', array(), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->commit();
    }
    public function rollback()
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'rollback', array(), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'getClassMetadata', array('className' => $className), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'createQuery', array('dql' => $dql), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'createNamedQuery', array('name' => $name), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'createQueryBuilder', array(), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'flush', array('entity' => $entity), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'clear', array('entityName' => $entityName), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->clear($entityName);
    }
    public function close()
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'close', array(), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->close();
    }
    public function persist($entity)
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'persist', array('entity' => $entity), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'remove', array('entity' => $entity), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'refresh', array('entity' => $entity), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'detach', array('entity' => $entity), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'merge', array('entity' => $entity), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'contains', array('entity' => $entity), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'getEventManager', array(), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'getConfiguration', array(), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'isOpen', array(), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'getUnitOfWork', array(), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'getProxyFactory', array(), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'initializeObject', array('obj' => $obj), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'getFilters', array(), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'isFiltersStateClean', array(), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, 'hasFilters', array(), $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        return $this->valueHolder7bf1e->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerd77c7 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder7bf1e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7bf1e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder7bf1e->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerd77c7 && ($this->initializerd77c7->__invoke($valueHolder7bf1e, $this, '__get', ['name' => $name], $this->initializerd77c7) || 1) && $this->valueHolder7bf1e = $valueHolder7bf1e;
        if (isset(self::$publicProperties0f820[$name])) {
            return $this->valueHolder7bf1e->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
