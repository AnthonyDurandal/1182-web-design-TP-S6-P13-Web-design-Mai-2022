<?php

namespace ContainerJwxM59j;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderec6f8 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializeraed37 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesfb114 = [
        
    ];

    public function getConnection()
    {
        $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, 'getConnection', array(), $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;

        return $this->valueHolderec6f8->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, 'getMetadataFactory', array(), $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;

        return $this->valueHolderec6f8->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, 'getExpressionBuilder', array(), $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;

        return $this->valueHolderec6f8->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, 'beginTransaction', array(), $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;

        return $this->valueHolderec6f8->beginTransaction();
    }

    public function getCache()
    {
        $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, 'getCache', array(), $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;

        return $this->valueHolderec6f8->getCache();
    }

    public function transactional($func)
    {
        $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, 'transactional', array('func' => $func), $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;

        return $this->valueHolderec6f8->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, 'wrapInTransaction', array('func' => $func), $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;

        return $this->valueHolderec6f8->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, 'commit', array(), $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;

        return $this->valueHolderec6f8->commit();
    }

    public function rollback()
    {
        $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, 'rollback', array(), $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;

        return $this->valueHolderec6f8->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, 'getClassMetadata', array('className' => $className), $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;

        return $this->valueHolderec6f8->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, 'createQuery', array('dql' => $dql), $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;

        return $this->valueHolderec6f8->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, 'createNamedQuery', array('name' => $name), $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;

        return $this->valueHolderec6f8->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;

        return $this->valueHolderec6f8->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;

        return $this->valueHolderec6f8->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, 'createQueryBuilder', array(), $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;

        return $this->valueHolderec6f8->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, 'flush', array('entity' => $entity), $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;

        return $this->valueHolderec6f8->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;

        return $this->valueHolderec6f8->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;

        return $this->valueHolderec6f8->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;

        return $this->valueHolderec6f8->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, 'clear', array('entityName' => $entityName), $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;

        return $this->valueHolderec6f8->clear($entityName);
    }

    public function close()
    {
        $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, 'close', array(), $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;

        return $this->valueHolderec6f8->close();
    }

    public function persist($entity)
    {
        $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, 'persist', array('entity' => $entity), $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;

        return $this->valueHolderec6f8->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, 'remove', array('entity' => $entity), $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;

        return $this->valueHolderec6f8->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, 'refresh', array('entity' => $entity), $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;

        return $this->valueHolderec6f8->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, 'detach', array('entity' => $entity), $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;

        return $this->valueHolderec6f8->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, 'merge', array('entity' => $entity), $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;

        return $this->valueHolderec6f8->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;

        return $this->valueHolderec6f8->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;

        return $this->valueHolderec6f8->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, 'getRepository', array('entityName' => $entityName), $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;

        return $this->valueHolderec6f8->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, 'contains', array('entity' => $entity), $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;

        return $this->valueHolderec6f8->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, 'getEventManager', array(), $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;

        return $this->valueHolderec6f8->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, 'getConfiguration', array(), $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;

        return $this->valueHolderec6f8->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, 'isOpen', array(), $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;

        return $this->valueHolderec6f8->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, 'getUnitOfWork', array(), $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;

        return $this->valueHolderec6f8->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;

        return $this->valueHolderec6f8->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;

        return $this->valueHolderec6f8->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, 'getProxyFactory', array(), $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;

        return $this->valueHolderec6f8->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, 'initializeObject', array('obj' => $obj), $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;

        return $this->valueHolderec6f8->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, 'getFilters', array(), $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;

        return $this->valueHolderec6f8->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, 'isFiltersStateClean', array(), $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;

        return $this->valueHolderec6f8->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, 'hasFilters', array(), $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;

        return $this->valueHolderec6f8->hasFilters();
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

        $instance->initializeraed37 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderec6f8) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderec6f8 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderec6f8->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, '__get', ['name' => $name], $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;

        if (isset(self::$publicPropertiesfb114[$name])) {
            return $this->valueHolderec6f8->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec6f8;

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

        $targetObject = $this->valueHolderec6f8;
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
        $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, '__set', array('name' => $name, 'value' => $value), $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec6f8;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderec6f8;
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
        $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, '__isset', array('name' => $name), $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec6f8;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderec6f8;
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
        $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, '__unset', array('name' => $name), $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderec6f8;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderec6f8;
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
        $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, '__clone', array(), $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;

        $this->valueHolderec6f8 = clone $this->valueHolderec6f8;
    }

    public function __sleep()
    {
        $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, '__sleep', array(), $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;

        return array('valueHolderec6f8');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializeraed37 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializeraed37;
    }

    public function initializeProxy() : bool
    {
        return $this->initializeraed37 && ($this->initializeraed37->__invoke($valueHolderec6f8, $this, 'initializeProxy', array(), $this->initializeraed37) || 1) && $this->valueHolderec6f8 = $valueHolderec6f8;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderec6f8;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderec6f8;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
