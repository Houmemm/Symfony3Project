<?php

namespace Proxies\__CG__\Squad\FttBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Evenement extends \Squad\FttBundle\Entity\Evenement implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Squad\\FttBundle\\Entity\\Evenement' . "\0" . 'idEvenement', '' . "\0" . 'Squad\\FttBundle\\Entity\\Evenement' . "\0" . 'libelleEvenement', '' . "\0" . 'Squad\\FttBundle\\Entity\\Evenement' . "\0" . 'dateDebut', '' . "\0" . 'Squad\\FttBundle\\Entity\\Evenement' . "\0" . 'dateFin', '' . "\0" . 'Squad\\FttBundle\\Entity\\Evenement' . "\0" . 'type', '' . "\0" . 'Squad\\FttBundle\\Entity\\Evenement' . "\0" . 'site', '' . "\0" . 'Squad\\FttBundle\\Entity\\Evenement' . "\0" . 'nbreJoueur', '' . "\0" . 'Squad\\FttBundle\\Entity\\Evenement' . "\0" . 'imageEve', '' . "\0" . 'Squad\\FttBundle\\Entity\\Evenement' . "\0" . 'statut'];
        }

        return ['__isInitialized__', '' . "\0" . 'Squad\\FttBundle\\Entity\\Evenement' . "\0" . 'idEvenement', '' . "\0" . 'Squad\\FttBundle\\Entity\\Evenement' . "\0" . 'libelleEvenement', '' . "\0" . 'Squad\\FttBundle\\Entity\\Evenement' . "\0" . 'dateDebut', '' . "\0" . 'Squad\\FttBundle\\Entity\\Evenement' . "\0" . 'dateFin', '' . "\0" . 'Squad\\FttBundle\\Entity\\Evenement' . "\0" . 'type', '' . "\0" . 'Squad\\FttBundle\\Entity\\Evenement' . "\0" . 'site', '' . "\0" . 'Squad\\FttBundle\\Entity\\Evenement' . "\0" . 'nbreJoueur', '' . "\0" . 'Squad\\FttBundle\\Entity\\Evenement' . "\0" . 'imageEve', '' . "\0" . 'Squad\\FttBundle\\Entity\\Evenement' . "\0" . 'statut'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Evenement $proxy) {
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
    public function getId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getIdEvenement()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdEvenement();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdEvenement', []);

        return parent::getIdEvenement();
    }

    /**
     * {@inheritDoc}
     */
    public function getLibelleEvenement()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLibelleEvenement', []);

        return parent::getLibelleEvenement();
    }

    /**
     * {@inheritDoc}
     */
    public function getDateDebut()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateDebut', []);

        return parent::getDateDebut();
    }

    /**
     * {@inheritDoc}
     */
    public function getDateFin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateFin', []);

        return parent::getDateFin();
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function getSite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSite', []);

        return parent::getSite();
    }

    /**
     * {@inheritDoc}
     */
    public function getNbreJoueur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbreJoueur', []);

        return parent::getNbreJoueur();
    }

    /**
     * {@inheritDoc}
     */
    public function getImageEve()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageEve', []);

        return parent::getImageEve();
    }

    /**
     * {@inheritDoc}
     */
    public function getStatut()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStatut', []);

        return parent::getStatut();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdEvenement($idEvenement)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdEvenement', [$idEvenement]);

        return parent::setIdEvenement($idEvenement);
    }

    /**
     * {@inheritDoc}
     */
    public function setLibelleEvenement($libelleEvenement)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLibelleEvenement', [$libelleEvenement]);

        return parent::setLibelleEvenement($libelleEvenement);
    }

    /**
     * {@inheritDoc}
     */
    public function setDateDebut(\DateTime $dateDebut)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateDebut', [$dateDebut]);

        return parent::setDateDebut($dateDebut);
    }

    /**
     * {@inheritDoc}
     */
    public function setDateFin(\DateTime $dateFin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateFin', [$dateFin]);

        return parent::setDateFin($dateFin);
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function setSite($site)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSite', [$site]);

        return parent::setSite($site);
    }

    /**
     * {@inheritDoc}
     */
    public function setNbreJoueur($nbreJoueur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbreJoueur', [$nbreJoueur]);

        return parent::setNbreJoueur($nbreJoueur);
    }

    /**
     * {@inheritDoc}
     */
    public function setImageEve($imageEve)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageEve', [$imageEve]);

        return parent::setImageEve($imageEve);
    }

    /**
     * {@inheritDoc}
     */
    public function setStatut($statut)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStatut', [$statut]);

        return parent::setStatut($statut);
    }

}
