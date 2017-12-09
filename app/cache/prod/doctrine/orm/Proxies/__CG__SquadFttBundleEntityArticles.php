<?php

namespace Proxies\__CG__\Squad\FttBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Articles extends \Squad\FttBundle\Entity\Articles implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Squad\\FttBundle\\Entity\\Articles' . "\0" . 'idArticle', '' . "\0" . 'Squad\\FttBundle\\Entity\\Articles' . "\0" . 'libelleArticle', '' . "\0" . 'Squad\\FttBundle\\Entity\\Articles' . "\0" . 'prix', '' . "\0" . 'Squad\\FttBundle\\Entity\\Articles' . "\0" . 'description', '' . "\0" . 'Squad\\FttBundle\\Entity\\Articles' . "\0" . 'pathArticle', '' . "\0" . 'Squad\\FttBundle\\Entity\\Articles' . "\0" . 'etatArticle', '' . "\0" . 'Squad\\FttBundle\\Entity\\Articles' . "\0" . 'userUser', '' . "\0" . 'Squad\\FttBundle\\Entity\\Articles' . "\0" . 'file'];
        }

        return ['__isInitialized__', '' . "\0" . 'Squad\\FttBundle\\Entity\\Articles' . "\0" . 'idArticle', '' . "\0" . 'Squad\\FttBundle\\Entity\\Articles' . "\0" . 'libelleArticle', '' . "\0" . 'Squad\\FttBundle\\Entity\\Articles' . "\0" . 'prix', '' . "\0" . 'Squad\\FttBundle\\Entity\\Articles' . "\0" . 'description', '' . "\0" . 'Squad\\FttBundle\\Entity\\Articles' . "\0" . 'pathArticle', '' . "\0" . 'Squad\\FttBundle\\Entity\\Articles' . "\0" . 'etatArticle', '' . "\0" . 'Squad\\FttBundle\\Entity\\Articles' . "\0" . 'userUser', '' . "\0" . 'Squad\\FttBundle\\Entity\\Articles' . "\0" . 'file'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Articles $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getIdArticle()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdArticle();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdArticle', []);

        return parent::getIdArticle();
    }

    /**
     * {@inheritDoc}
     */
    public function getLibelleArticle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLibelleArticle', []);

        return parent::getLibelleArticle();
    }

    /**
     * {@inheritDoc}
     */
    public function getPrix()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrix', []);

        return parent::getPrix();
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function getPathArticle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPathArticle', []);

        return parent::getPathArticle();
    }

    /**
     * {@inheritDoc}
     */
    public function getEtatArticle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtatArticle', []);

        return parent::getEtatArticle();
    }

    /**
     * {@inheritDoc}
     */
    public function getUserUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserUser', []);

        return parent::getUserUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdArticle($idArticle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdArticle', [$idArticle]);

        return parent::setIdArticle($idArticle);
    }

    /**
     * {@inheritDoc}
     */
    public function setLibelleArticle($libelleArticle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLibelleArticle', [$libelleArticle]);

        return parent::setLibelleArticle($libelleArticle);
    }

    /**
     * {@inheritDoc}
     */
    public function setPrix($prix)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrix', [$prix]);

        return parent::setPrix($prix);
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function setPathArticle($pathArticle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPathArticle', [$pathArticle]);

        return parent::setPathArticle($pathArticle);
    }

    /**
     * {@inheritDoc}
     */
    public function setEtatArticle($etatArticle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtatArticle', [$etatArticle]);

        return parent::setEtatArticle($etatArticle);
    }

    /**
     * {@inheritDoc}
     */
    public function setUserUser($userUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserUser', [$userUser]);

        return parent::setUserUser($userUser);
    }

    /**
     * {@inheritDoc}
     */
    public function setFile(\Symfony\Component\HttpFoundation\File\UploadedFile $file = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFile', [$file]);

        return parent::setFile($file);
    }

    /**
     * {@inheritDoc}
     */
    public function getFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFile', []);

        return parent::getFile();
    }

    /**
     * {@inheritDoc}
     */
    public function getAbsolutePath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAbsolutePath', []);

        return parent::getAbsolutePath();
    }

    /**
     * {@inheritDoc}
     */
    public function getWebPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWebPath', []);

        return parent::getWebPath();
    }

    /**
     * {@inheritDoc}
     */
    public function upload()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'upload', []);

        return parent::upload();
    }

}