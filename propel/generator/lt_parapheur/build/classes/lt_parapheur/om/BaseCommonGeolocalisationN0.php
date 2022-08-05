<?php


/**
 * Base class that represents a row from the 'GeolocalisationN0' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonGeolocalisationN0 extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonGeolocalisationN0Peer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonGeolocalisationN0Peer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id field.
     * @var        int
     */
    protected $id;

    /**
     * The value for the denomination field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $denomination;

    /**
     * The value for the denomination_fr field.
     * @var        string
     */
    protected $denomination_fr;

    /**
     * The value for the denomination_en field.
     * @var        string
     */
    protected $denomination_en;

    /**
     * The value for the denomination_es field.
     * @var        string
     */
    protected $denomination_es;

    /**
     * The value for the type field.
     * @var        int
     */
    protected $type;

    /**
     * The value for the libelle_selectionner field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $libelle_selectionner;

    /**
     * The value for the libelle_selectionner_fr field.
     * @var        string
     */
    protected $libelle_selectionner_fr;

    /**
     * The value for the libelle_selectionner_en field.
     * @var        string
     */
    protected $libelle_selectionner_en;

    /**
     * The value for the libelle_selectionner_es field.
     * @var        string
     */
    protected $libelle_selectionner_es;

    /**
     * The value for the libelle_tous field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $libelle_tous;

    /**
     * The value for the libelle_tous_fr field.
     * @var        string
     */
    protected $libelle_tous_fr;

    /**
     * The value for the libelle_tous_en field.
     * @var        string
     */
    protected $libelle_tous_en;

    /**
     * The value for the libelle_tous_es field.
     * @var        string
     */
    protected $libelle_tous_es;

    /**
     * The value for the libelle_aucun field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $libelle_aucun;

    /**
     * The value for the libelle_aucun_fr field.
     * @var        string
     */
    protected $libelle_aucun_fr;

    /**
     * The value for the libelle_aucun_en field.
     * @var        string
     */
    protected $libelle_aucun_en;

    /**
     * The value for the libelle_aucun_es field.
     * @var        string
     */
    protected $libelle_aucun_es;

    /**
     * The value for the denomination_ar field.
     * @var        string
     */
    protected $denomination_ar;

    /**
     * The value for the libelle_selectionner_ar field.
     * @var        string
     */
    protected $libelle_selectionner_ar;

    /**
     * The value for the libelle_tous_ar field.
     * @var        string
     */
    protected $libelle_tous_ar;

    /**
     * The value for the libelle_aucun_ar field.
     * @var        string
     */
    protected $libelle_aucun_ar;

    /**
     * The value for the denomination_su field.
     * @var        string
     */
    protected $denomination_su;

    /**
     * The value for the libelle_selectionner_su field.
     * @var        string
     */
    protected $libelle_selectionner_su;

    /**
     * The value for the libelle_tous_su field.
     * @var        string
     */
    protected $libelle_tous_su;

    /**
     * The value for the libelle_aucun_su field.
     * @var        string
     */
    protected $libelle_aucun_su;

    /**
     * The value for the denomination_du field.
     * @var        string
     */
    protected $denomination_du;

    /**
     * The value for the libelle_selectionner_du field.
     * @var        string
     */
    protected $libelle_selectionner_du;

    /**
     * The value for the libelle_tous_du field.
     * @var        string
     */
    protected $libelle_tous_du;

    /**
     * The value for the libelle_aucun_du field.
     * @var        string
     */
    protected $libelle_aucun_du;

    /**
     * The value for the denomination_cz field.
     * @var        string
     */
    protected $denomination_cz;

    /**
     * The value for the libelle_selectionner_cz field.
     * @var        string
     */
    protected $libelle_selectionner_cz;

    /**
     * The value for the libelle_tous_cz field.
     * @var        string
     */
    protected $libelle_tous_cz;

    /**
     * The value for the libelle_aucun_cz field.
     * @var        string
     */
    protected $libelle_aucun_cz;

    /**
     * The value for the denomination_it field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $denomination_it;

    /**
     * The value for the libelle_selectionner_it field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $libelle_selectionner_it;

    /**
     * The value for the libelle_tous_it field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $libelle_tous_it;

    /**
     * The value for the libelle_aucun_it field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $libelle_aucun_it;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInSave = false;

    /**
     * Flag to prevent endless validation loop, if this object is referenced
     * by another object which falls in this transaction.
     * @var        boolean
     */
    protected $alreadyInValidation = false;

    /**
     * Flag to prevent endless clearAllReferences($deep=true) loop, if this object is referenced
     * @var        boolean
     */
    protected $alreadyInClearAllReferencesDeep = false;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->denomination = '';
        $this->libelle_selectionner = '';
        $this->libelle_tous = '';
        $this->libelle_aucun = '';
        $this->denomination_it = '';
        $this->libelle_selectionner_it = '';
        $this->libelle_tous_it = '';
        $this->libelle_aucun_it = '';
    }

    /**
     * Initializes internal state of BaseCommonGeolocalisationN0 object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id] column value.
     * 
     * @return int
     */
    public function getId()
    {

        return $this->id;
    }

    /**
     * Get the [denomination] column value.
     * 
     * @return string
     */
    public function getDenomination()
    {

        return $this->denomination;
    }

    /**
     * Get the [denomination_fr] column value.
     * 
     * @return string
     */
    public function getDenominationFr()
    {

        return $this->denomination_fr;
    }

    /**
     * Get the [denomination_en] column value.
     * 
     * @return string
     */
    public function getDenominationEn()
    {

        return $this->denomination_en;
    }

    /**
     * Get the [denomination_es] column value.
     * 
     * @return string
     */
    public function getDenominationEs()
    {

        return $this->denomination_es;
    }

    /**
     * Get the [type] column value.
     * 
     * @return int
     */
    public function getType()
    {

        return $this->type;
    }

    /**
     * Get the [libelle_selectionner] column value.
     * 
     * @return string
     */
    public function getLibelleSelectionner()
    {

        return $this->libelle_selectionner;
    }

    /**
     * Get the [libelle_selectionner_fr] column value.
     * 
     * @return string
     */
    public function getLibelleSelectionnerFr()
    {

        return $this->libelle_selectionner_fr;
    }

    /**
     * Get the [libelle_selectionner_en] column value.
     * 
     * @return string
     */
    public function getLibelleSelectionnerEn()
    {

        return $this->libelle_selectionner_en;
    }

    /**
     * Get the [libelle_selectionner_es] column value.
     * 
     * @return string
     */
    public function getLibelleSelectionnerEs()
    {

        return $this->libelle_selectionner_es;
    }

    /**
     * Get the [libelle_tous] column value.
     * 
     * @return string
     */
    public function getLibelleTous()
    {

        return $this->libelle_tous;
    }

    /**
     * Get the [libelle_tous_fr] column value.
     * 
     * @return string
     */
    public function getLibelleTousFr()
    {

        return $this->libelle_tous_fr;
    }

    /**
     * Get the [libelle_tous_en] column value.
     * 
     * @return string
     */
    public function getLibelleTousEn()
    {

        return $this->libelle_tous_en;
    }

    /**
     * Get the [libelle_tous_es] column value.
     * 
     * @return string
     */
    public function getLibelleTousEs()
    {

        return $this->libelle_tous_es;
    }

    /**
     * Get the [libelle_aucun] column value.
     * 
     * @return string
     */
    public function getLibelleAucun()
    {

        return $this->libelle_aucun;
    }

    /**
     * Get the [libelle_aucun_fr] column value.
     * 
     * @return string
     */
    public function getLibelleAucunFr()
    {

        return $this->libelle_aucun_fr;
    }

    /**
     * Get the [libelle_aucun_en] column value.
     * 
     * @return string
     */
    public function getLibelleAucunEn()
    {

        return $this->libelle_aucun_en;
    }

    /**
     * Get the [libelle_aucun_es] column value.
     * 
     * @return string
     */
    public function getLibelleAucunEs()
    {

        return $this->libelle_aucun_es;
    }

    /**
     * Get the [denomination_ar] column value.
     * 
     * @return string
     */
    public function getDenominationAr()
    {

        return $this->denomination_ar;
    }

    /**
     * Get the [libelle_selectionner_ar] column value.
     * 
     * @return string
     */
    public function getLibelleSelectionnerAr()
    {

        return $this->libelle_selectionner_ar;
    }

    /**
     * Get the [libelle_tous_ar] column value.
     * 
     * @return string
     */
    public function getLibelleTousAr()
    {

        return $this->libelle_tous_ar;
    }

    /**
     * Get the [libelle_aucun_ar] column value.
     * 
     * @return string
     */
    public function getLibelleAucunAr()
    {

        return $this->libelle_aucun_ar;
    }

    /**
     * Get the [denomination_su] column value.
     * 
     * @return string
     */
    public function getDenominationSu()
    {

        return $this->denomination_su;
    }

    /**
     * Get the [libelle_selectionner_su] column value.
     * 
     * @return string
     */
    public function getLibelleSelectionnerSu()
    {

        return $this->libelle_selectionner_su;
    }

    /**
     * Get the [libelle_tous_su] column value.
     * 
     * @return string
     */
    public function getLibelleTousSu()
    {

        return $this->libelle_tous_su;
    }

    /**
     * Get the [libelle_aucun_su] column value.
     * 
     * @return string
     */
    public function getLibelleAucunSu()
    {

        return $this->libelle_aucun_su;
    }

    /**
     * Get the [denomination_du] column value.
     * 
     * @return string
     */
    public function getDenominationDu()
    {

        return $this->denomination_du;
    }

    /**
     * Get the [libelle_selectionner_du] column value.
     * 
     * @return string
     */
    public function getLibelleSelectionnerDu()
    {

        return $this->libelle_selectionner_du;
    }

    /**
     * Get the [libelle_tous_du] column value.
     * 
     * @return string
     */
    public function getLibelleTousDu()
    {

        return $this->libelle_tous_du;
    }

    /**
     * Get the [libelle_aucun_du] column value.
     * 
     * @return string
     */
    public function getLibelleAucunDu()
    {

        return $this->libelle_aucun_du;
    }

    /**
     * Get the [denomination_cz] column value.
     * 
     * @return string
     */
    public function getDenominationCz()
    {

        return $this->denomination_cz;
    }

    /**
     * Get the [libelle_selectionner_cz] column value.
     * 
     * @return string
     */
    public function getLibelleSelectionnerCz()
    {

        return $this->libelle_selectionner_cz;
    }

    /**
     * Get the [libelle_tous_cz] column value.
     * 
     * @return string
     */
    public function getLibelleTousCz()
    {

        return $this->libelle_tous_cz;
    }

    /**
     * Get the [libelle_aucun_cz] column value.
     * 
     * @return string
     */
    public function getLibelleAucunCz()
    {

        return $this->libelle_aucun_cz;
    }

    /**
     * Get the [denomination_it] column value.
     * 
     * @return string
     */
    public function getDenominationIt()
    {

        return $this->denomination_it;
    }

    /**
     * Get the [libelle_selectionner_it] column value.
     * 
     * @return string
     */
    public function getLibelleSelectionnerIt()
    {

        return $this->libelle_selectionner_it;
    }

    /**
     * Get the [libelle_tous_it] column value.
     * 
     * @return string
     */
    public function getLibelleTousIt()
    {

        return $this->libelle_tous_it;
    }

    /**
     * Get the [libelle_aucun_it] column value.
     * 
     * @return string
     */
    public function getLibelleAucunIt()
    {

        return $this->libelle_aucun_it;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonGeolocalisationN0 The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN0Peer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [denomination] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN0 The current object (for fluent API support)
     */
    public function setDenomination($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->denomination !== $v) {
            $this->denomination = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN0Peer::DENOMINATION;
        }


        return $this;
    } // setDenomination()

    /**
     * Set the value of [denomination_fr] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN0 The current object (for fluent API support)
     */
    public function setDenominationFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->denomination_fr !== $v) {
            $this->denomination_fr = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN0Peer::DENOMINATION_FR;
        }


        return $this;
    } // setDenominationFr()

    /**
     * Set the value of [denomination_en] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN0 The current object (for fluent API support)
     */
    public function setDenominationEn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->denomination_en !== $v) {
            $this->denomination_en = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN0Peer::DENOMINATION_EN;
        }


        return $this;
    } // setDenominationEn()

    /**
     * Set the value of [denomination_es] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN0 The current object (for fluent API support)
     */
    public function setDenominationEs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->denomination_es !== $v) {
            $this->denomination_es = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN0Peer::DENOMINATION_ES;
        }


        return $this;
    } // setDenominationEs()

    /**
     * Set the value of [type] column.
     * 
     * @param int $v new value
     * @return CommonGeolocalisationN0 The current object (for fluent API support)
     */
    public function setType($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type !== $v) {
            $this->type = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN0Peer::TYPE;
        }


        return $this;
    } // setType()

    /**
     * Set the value of [libelle_selectionner] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN0 The current object (for fluent API support)
     */
    public function setLibelleSelectionner($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_selectionner !== $v) {
            $this->libelle_selectionner = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER;
        }


        return $this;
    } // setLibelleSelectionner()

    /**
     * Set the value of [libelle_selectionner_fr] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN0 The current object (for fluent API support)
     */
    public function setLibelleSelectionnerFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_selectionner_fr !== $v) {
            $this->libelle_selectionner_fr = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_FR;
        }


        return $this;
    } // setLibelleSelectionnerFr()

    /**
     * Set the value of [libelle_selectionner_en] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN0 The current object (for fluent API support)
     */
    public function setLibelleSelectionnerEn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_selectionner_en !== $v) {
            $this->libelle_selectionner_en = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_EN;
        }


        return $this;
    } // setLibelleSelectionnerEn()

    /**
     * Set the value of [libelle_selectionner_es] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN0 The current object (for fluent API support)
     */
    public function setLibelleSelectionnerEs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_selectionner_es !== $v) {
            $this->libelle_selectionner_es = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_ES;
        }


        return $this;
    } // setLibelleSelectionnerEs()

    /**
     * Set the value of [libelle_tous] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN0 The current object (for fluent API support)
     */
    public function setLibelleTous($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_tous !== $v) {
            $this->libelle_tous = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN0Peer::LIBELLE_TOUS;
        }


        return $this;
    } // setLibelleTous()

    /**
     * Set the value of [libelle_tous_fr] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN0 The current object (for fluent API support)
     */
    public function setLibelleTousFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_tous_fr !== $v) {
            $this->libelle_tous_fr = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN0Peer::LIBELLE_TOUS_FR;
        }


        return $this;
    } // setLibelleTousFr()

    /**
     * Set the value of [libelle_tous_en] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN0 The current object (for fluent API support)
     */
    public function setLibelleTousEn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_tous_en !== $v) {
            $this->libelle_tous_en = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN0Peer::LIBELLE_TOUS_EN;
        }


        return $this;
    } // setLibelleTousEn()

    /**
     * Set the value of [libelle_tous_es] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN0 The current object (for fluent API support)
     */
    public function setLibelleTousEs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_tous_es !== $v) {
            $this->libelle_tous_es = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN0Peer::LIBELLE_TOUS_ES;
        }


        return $this;
    } // setLibelleTousEs()

    /**
     * Set the value of [libelle_aucun] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN0 The current object (for fluent API support)
     */
    public function setLibelleAucun($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_aucun !== $v) {
            $this->libelle_aucun = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN0Peer::LIBELLE_AUCUN;
        }


        return $this;
    } // setLibelleAucun()

    /**
     * Set the value of [libelle_aucun_fr] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN0 The current object (for fluent API support)
     */
    public function setLibelleAucunFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_aucun_fr !== $v) {
            $this->libelle_aucun_fr = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN0Peer::LIBELLE_AUCUN_FR;
        }


        return $this;
    } // setLibelleAucunFr()

    /**
     * Set the value of [libelle_aucun_en] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN0 The current object (for fluent API support)
     */
    public function setLibelleAucunEn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_aucun_en !== $v) {
            $this->libelle_aucun_en = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN0Peer::LIBELLE_AUCUN_EN;
        }


        return $this;
    } // setLibelleAucunEn()

    /**
     * Set the value of [libelle_aucun_es] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN0 The current object (for fluent API support)
     */
    public function setLibelleAucunEs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_aucun_es !== $v) {
            $this->libelle_aucun_es = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN0Peer::LIBELLE_AUCUN_ES;
        }


        return $this;
    } // setLibelleAucunEs()

    /**
     * Set the value of [denomination_ar] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN0 The current object (for fluent API support)
     */
    public function setDenominationAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->denomination_ar !== $v) {
            $this->denomination_ar = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN0Peer::DENOMINATION_AR;
        }


        return $this;
    } // setDenominationAr()

    /**
     * Set the value of [libelle_selectionner_ar] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN0 The current object (for fluent API support)
     */
    public function setLibelleSelectionnerAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_selectionner_ar !== $v) {
            $this->libelle_selectionner_ar = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_AR;
        }


        return $this;
    } // setLibelleSelectionnerAr()

    /**
     * Set the value of [libelle_tous_ar] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN0 The current object (for fluent API support)
     */
    public function setLibelleTousAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_tous_ar !== $v) {
            $this->libelle_tous_ar = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN0Peer::LIBELLE_TOUS_AR;
        }


        return $this;
    } // setLibelleTousAr()

    /**
     * Set the value of [libelle_aucun_ar] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN0 The current object (for fluent API support)
     */
    public function setLibelleAucunAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_aucun_ar !== $v) {
            $this->libelle_aucun_ar = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN0Peer::LIBELLE_AUCUN_AR;
        }


        return $this;
    } // setLibelleAucunAr()

    /**
     * Set the value of [denomination_su] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN0 The current object (for fluent API support)
     */
    public function setDenominationSu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->denomination_su !== $v) {
            $this->denomination_su = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN0Peer::DENOMINATION_SU;
        }


        return $this;
    } // setDenominationSu()

    /**
     * Set the value of [libelle_selectionner_su] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN0 The current object (for fluent API support)
     */
    public function setLibelleSelectionnerSu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_selectionner_su !== $v) {
            $this->libelle_selectionner_su = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_SU;
        }


        return $this;
    } // setLibelleSelectionnerSu()

    /**
     * Set the value of [libelle_tous_su] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN0 The current object (for fluent API support)
     */
    public function setLibelleTousSu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_tous_su !== $v) {
            $this->libelle_tous_su = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN0Peer::LIBELLE_TOUS_SU;
        }


        return $this;
    } // setLibelleTousSu()

    /**
     * Set the value of [libelle_aucun_su] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN0 The current object (for fluent API support)
     */
    public function setLibelleAucunSu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_aucun_su !== $v) {
            $this->libelle_aucun_su = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN0Peer::LIBELLE_AUCUN_SU;
        }


        return $this;
    } // setLibelleAucunSu()

    /**
     * Set the value of [denomination_du] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN0 The current object (for fluent API support)
     */
    public function setDenominationDu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->denomination_du !== $v) {
            $this->denomination_du = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN0Peer::DENOMINATION_DU;
        }


        return $this;
    } // setDenominationDu()

    /**
     * Set the value of [libelle_selectionner_du] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN0 The current object (for fluent API support)
     */
    public function setLibelleSelectionnerDu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_selectionner_du !== $v) {
            $this->libelle_selectionner_du = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_DU;
        }


        return $this;
    } // setLibelleSelectionnerDu()

    /**
     * Set the value of [libelle_tous_du] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN0 The current object (for fluent API support)
     */
    public function setLibelleTousDu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_tous_du !== $v) {
            $this->libelle_tous_du = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN0Peer::LIBELLE_TOUS_DU;
        }


        return $this;
    } // setLibelleTousDu()

    /**
     * Set the value of [libelle_aucun_du] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN0 The current object (for fluent API support)
     */
    public function setLibelleAucunDu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_aucun_du !== $v) {
            $this->libelle_aucun_du = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN0Peer::LIBELLE_AUCUN_DU;
        }


        return $this;
    } // setLibelleAucunDu()

    /**
     * Set the value of [denomination_cz] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN0 The current object (for fluent API support)
     */
    public function setDenominationCz($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->denomination_cz !== $v) {
            $this->denomination_cz = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN0Peer::DENOMINATION_CZ;
        }


        return $this;
    } // setDenominationCz()

    /**
     * Set the value of [libelle_selectionner_cz] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN0 The current object (for fluent API support)
     */
    public function setLibelleSelectionnerCz($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_selectionner_cz !== $v) {
            $this->libelle_selectionner_cz = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_CZ;
        }


        return $this;
    } // setLibelleSelectionnerCz()

    /**
     * Set the value of [libelle_tous_cz] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN0 The current object (for fluent API support)
     */
    public function setLibelleTousCz($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_tous_cz !== $v) {
            $this->libelle_tous_cz = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN0Peer::LIBELLE_TOUS_CZ;
        }


        return $this;
    } // setLibelleTousCz()

    /**
     * Set the value of [libelle_aucun_cz] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN0 The current object (for fluent API support)
     */
    public function setLibelleAucunCz($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_aucun_cz !== $v) {
            $this->libelle_aucun_cz = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN0Peer::LIBELLE_AUCUN_CZ;
        }


        return $this;
    } // setLibelleAucunCz()

    /**
     * Set the value of [denomination_it] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN0 The current object (for fluent API support)
     */
    public function setDenominationIt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->denomination_it !== $v) {
            $this->denomination_it = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN0Peer::DENOMINATION_IT;
        }


        return $this;
    } // setDenominationIt()

    /**
     * Set the value of [libelle_selectionner_it] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN0 The current object (for fluent API support)
     */
    public function setLibelleSelectionnerIt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_selectionner_it !== $v) {
            $this->libelle_selectionner_it = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_IT;
        }


        return $this;
    } // setLibelleSelectionnerIt()

    /**
     * Set the value of [libelle_tous_it] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN0 The current object (for fluent API support)
     */
    public function setLibelleTousIt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_tous_it !== $v) {
            $this->libelle_tous_it = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN0Peer::LIBELLE_TOUS_IT;
        }


        return $this;
    } // setLibelleTousIt()

    /**
     * Set the value of [libelle_aucun_it] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN0 The current object (for fluent API support)
     */
    public function setLibelleAucunIt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_aucun_it !== $v) {
            $this->libelle_aucun_it = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN0Peer::LIBELLE_AUCUN_IT;
        }


        return $this;
    } // setLibelleAucunIt()

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return boolean Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues()
    {
            if ($this->denomination !== '') {
                return false;
            }

            if ($this->libelle_selectionner !== '') {
                return false;
            }

            if ($this->libelle_tous !== '') {
                return false;
            }

            if ($this->libelle_aucun !== '') {
                return false;
            }

            if ($this->denomination_it !== '') {
                return false;
            }

            if ($this->libelle_selectionner_it !== '') {
                return false;
            }

            if ($this->libelle_tous_it !== '') {
                return false;
            }

            if ($this->libelle_aucun_it !== '') {
                return false;
            }

        // otherwise, everything was equal, so return true
        return true;
    } // hasOnlyDefaultValues()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param boolean $rehydrate Whether this object is being re-hydrated from the database.
     * @return int             next starting column
     * @throws PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate($row, $startcol = 0, $rehydrate = false)
    {
        try {

            $this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->denomination = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->denomination_fr = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->denomination_en = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->denomination_es = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->type = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->libelle_selectionner = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->libelle_selectionner_fr = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->libelle_selectionner_en = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->libelle_selectionner_es = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->libelle_tous = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->libelle_tous_fr = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->libelle_tous_en = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->libelle_tous_es = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->libelle_aucun = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->libelle_aucun_fr = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->libelle_aucun_en = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->libelle_aucun_es = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->denomination_ar = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->libelle_selectionner_ar = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->libelle_tous_ar = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->libelle_aucun_ar = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->denomination_su = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->libelle_selectionner_su = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->libelle_tous_su = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->libelle_aucun_su = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->denomination_du = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->libelle_selectionner_du = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->libelle_tous_du = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->libelle_aucun_du = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->denomination_cz = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->libelle_selectionner_cz = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->libelle_tous_cz = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->libelle_aucun_cz = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->denomination_it = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->libelle_selectionner_it = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->libelle_tous_it = ($row[$startcol + 36] !== null) ? (string) $row[$startcol + 36] : null;
            $this->libelle_aucun_it = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 38; // 38 = CommonGeolocalisationN0Peer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonGeolocalisationN0 object", $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws PropelException
     */
    public function ensureConsistency()
    {

    } // ensureConsistency

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param boolean $deep (optional) Whether to also de-associated any related objects.
     * @param PropelPDO $con (optional) The PropelPDO connection to use.
     * @return void
     * @throws PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload($deep = false, PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonGeolocalisationN0Peer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonGeolocalisationN0Peer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param PropelPDO $con
     * @return void
     * @throws PropelException
     * @throws Exception
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonGeolocalisationN0Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonGeolocalisationN0Query::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                $con->commit();
                $this->setDeleted(true);
            } else {
                $con->commit();
            }
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @throws Exception
     * @see        doSave()
     */
    public function save(PropelPDO $con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonGeolocalisationN0Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        $isInsert = $this->isNew();
        try {
            $ret = $this->preSave($con);
            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                CommonGeolocalisationN0Peer::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }
            $con->commit();

            return $affectedRows;
        } catch (Exception $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param PropelPDO $con
     * @return int             The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws PropelException
     * @see        save()
     */
    protected function doSave(PropelPDO $con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                $this->resetModified();
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    } // doSave()

    /**
     * Insert the row in the database.
     *
     * @param PropelPDO $con
     *
     * @throws PropelException
     * @see        doSave()
     */
    protected function doInsert(PropelPDO $con)
    {
        $modifiedColumns = array();
        $index = 0;

        $this->modifiedColumns[] = CommonGeolocalisationN0Peer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonGeolocalisationN0Peer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::DENOMINATION)) {
            $modifiedColumns[':p' . $index++]  = '`denomination`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::DENOMINATION_FR)) {
            $modifiedColumns[':p' . $index++]  = '`denomination_fr`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::DENOMINATION_EN)) {
            $modifiedColumns[':p' . $index++]  = '`denomination_en`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::DENOMINATION_ES)) {
            $modifiedColumns[':p' . $index++]  = '`denomination_es`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::TYPE)) {
            $modifiedColumns[':p' . $index++]  = '`type`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_selectionner`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_FR)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_selectionner_fr`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_EN)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_selectionner_en`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_ES)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_selectionner_es`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_TOUS)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_tous`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_TOUS_FR)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_tous_fr`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_TOUS_EN)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_tous_en`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_TOUS_ES)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_tous_es`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_AUCUN)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_Aucun`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_AUCUN_FR)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_Aucun_fr`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_AUCUN_EN)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_Aucun_en`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_AUCUN_ES)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_Aucun_es`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::DENOMINATION_AR)) {
            $modifiedColumns[':p' . $index++]  = '`denomination_ar`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_AR)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_selectionner_ar`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_TOUS_AR)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_tous_ar`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_AUCUN_AR)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_Aucun_ar`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::DENOMINATION_SU)) {
            $modifiedColumns[':p' . $index++]  = '`denomination_su`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_SU)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_selectionner_su`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_TOUS_SU)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_tous_su`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_AUCUN_SU)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_Aucun_su`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::DENOMINATION_DU)) {
            $modifiedColumns[':p' . $index++]  = '`denomination_du`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_DU)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_selectionner_du`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_TOUS_DU)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_tous_du`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_AUCUN_DU)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_Aucun_du`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::DENOMINATION_CZ)) {
            $modifiedColumns[':p' . $index++]  = '`denomination_cz`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_CZ)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_selectionner_cz`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_TOUS_CZ)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_tous_cz`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_AUCUN_CZ)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_Aucun_cz`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::DENOMINATION_IT)) {
            $modifiedColumns[':p' . $index++]  = '`denomination_it`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_IT)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_selectionner_it`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_TOUS_IT)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_tous_it`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_AUCUN_IT)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_Aucun_it`';
        }

        $sql = sprintf(
            'INSERT INTO `GeolocalisationN0` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id`':						
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case '`denomination`':						
                        $stmt->bindValue($identifier, $this->denomination, PDO::PARAM_STR);
                        break;
                    case '`denomination_fr`':						
                        $stmt->bindValue($identifier, $this->denomination_fr, PDO::PARAM_STR);
                        break;
                    case '`denomination_en`':						
                        $stmt->bindValue($identifier, $this->denomination_en, PDO::PARAM_STR);
                        break;
                    case '`denomination_es`':						
                        $stmt->bindValue($identifier, $this->denomination_es, PDO::PARAM_STR);
                        break;
                    case '`type`':						
                        $stmt->bindValue($identifier, $this->type, PDO::PARAM_INT);
                        break;
                    case '`libelle_selectionner`':						
                        $stmt->bindValue($identifier, $this->libelle_selectionner, PDO::PARAM_STR);
                        break;
                    case '`libelle_selectionner_fr`':						
                        $stmt->bindValue($identifier, $this->libelle_selectionner_fr, PDO::PARAM_STR);
                        break;
                    case '`libelle_selectionner_en`':						
                        $stmt->bindValue($identifier, $this->libelle_selectionner_en, PDO::PARAM_STR);
                        break;
                    case '`libelle_selectionner_es`':						
                        $stmt->bindValue($identifier, $this->libelle_selectionner_es, PDO::PARAM_STR);
                        break;
                    case '`libelle_tous`':						
                        $stmt->bindValue($identifier, $this->libelle_tous, PDO::PARAM_STR);
                        break;
                    case '`libelle_tous_fr`':						
                        $stmt->bindValue($identifier, $this->libelle_tous_fr, PDO::PARAM_STR);
                        break;
                    case '`libelle_tous_en`':						
                        $stmt->bindValue($identifier, $this->libelle_tous_en, PDO::PARAM_STR);
                        break;
                    case '`libelle_tous_es`':						
                        $stmt->bindValue($identifier, $this->libelle_tous_es, PDO::PARAM_STR);
                        break;
                    case '`libelle_Aucun`':						
                        $stmt->bindValue($identifier, $this->libelle_aucun, PDO::PARAM_STR);
                        break;
                    case '`libelle_Aucun_fr`':						
                        $stmt->bindValue($identifier, $this->libelle_aucun_fr, PDO::PARAM_STR);
                        break;
                    case '`libelle_Aucun_en`':						
                        $stmt->bindValue($identifier, $this->libelle_aucun_en, PDO::PARAM_STR);
                        break;
                    case '`libelle_Aucun_es`':						
                        $stmt->bindValue($identifier, $this->libelle_aucun_es, PDO::PARAM_STR);
                        break;
                    case '`denomination_ar`':						
                        $stmt->bindValue($identifier, $this->denomination_ar, PDO::PARAM_STR);
                        break;
                    case '`libelle_selectionner_ar`':						
                        $stmt->bindValue($identifier, $this->libelle_selectionner_ar, PDO::PARAM_STR);
                        break;
                    case '`libelle_tous_ar`':						
                        $stmt->bindValue($identifier, $this->libelle_tous_ar, PDO::PARAM_STR);
                        break;
                    case '`libelle_Aucun_ar`':						
                        $stmt->bindValue($identifier, $this->libelle_aucun_ar, PDO::PARAM_STR);
                        break;
                    case '`denomination_su`':						
                        $stmt->bindValue($identifier, $this->denomination_su, PDO::PARAM_STR);
                        break;
                    case '`libelle_selectionner_su`':						
                        $stmt->bindValue($identifier, $this->libelle_selectionner_su, PDO::PARAM_STR);
                        break;
                    case '`libelle_tous_su`':						
                        $stmt->bindValue($identifier, $this->libelle_tous_su, PDO::PARAM_STR);
                        break;
                    case '`libelle_Aucun_su`':						
                        $stmt->bindValue($identifier, $this->libelle_aucun_su, PDO::PARAM_STR);
                        break;
                    case '`denomination_du`':						
                        $stmt->bindValue($identifier, $this->denomination_du, PDO::PARAM_STR);
                        break;
                    case '`libelle_selectionner_du`':						
                        $stmt->bindValue($identifier, $this->libelle_selectionner_du, PDO::PARAM_STR);
                        break;
                    case '`libelle_tous_du`':						
                        $stmt->bindValue($identifier, $this->libelle_tous_du, PDO::PARAM_STR);
                        break;
                    case '`libelle_Aucun_du`':						
                        $stmt->bindValue($identifier, $this->libelle_aucun_du, PDO::PARAM_STR);
                        break;
                    case '`denomination_cz`':						
                        $stmt->bindValue($identifier, $this->denomination_cz, PDO::PARAM_STR);
                        break;
                    case '`libelle_selectionner_cz`':						
                        $stmt->bindValue($identifier, $this->libelle_selectionner_cz, PDO::PARAM_STR);
                        break;
                    case '`libelle_tous_cz`':						
                        $stmt->bindValue($identifier, $this->libelle_tous_cz, PDO::PARAM_STR);
                        break;
                    case '`libelle_Aucun_cz`':						
                        $stmt->bindValue($identifier, $this->libelle_aucun_cz, PDO::PARAM_STR);
                        break;
                    case '`denomination_it`':						
                        $stmt->bindValue($identifier, $this->denomination_it, PDO::PARAM_STR);
                        break;
                    case '`libelle_selectionner_it`':						
                        $stmt->bindValue($identifier, $this->libelle_selectionner_it, PDO::PARAM_STR);
                        break;
                    case '`libelle_tous_it`':						
                        $stmt->bindValue($identifier, $this->libelle_tous_it, PDO::PARAM_STR);
                        break;
                    case '`libelle_Aucun_it`':						
                        $stmt->bindValue($identifier, $this->libelle_aucun_it, PDO::PARAM_STR);
                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), $e);
        }

        try {
            $pk = $con->lastInsertId();
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', $e);
        }
        $this->setId($pk);

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param PropelPDO $con
     *
     * @see        doSave()
     */
    protected function doUpdate(PropelPDO $con)
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();
        BasePeer::doUpdate($selectCriteria, $valuesCriteria, $con);
    }

    /**
     * Array of ValidationFailed objects.
     * @var        array ValidationFailed[]
     */
    protected $validationFailures = array();

    /**
     * Gets any ValidationFailed objects that resulted from last call to validate().
     *
     *
     * @return array ValidationFailed[]
     * @see        validate()
     */
    public function getValidationFailures()
    {
        return $this->validationFailures;
    }

    /**
     * Validates the objects modified field values and all objects related to this table.
     *
     * If $columns is either a column name or an array of column names
     * only those columns are validated.
     *
     * @param mixed $columns Column name or an array of column names.
     * @return boolean Whether all columns pass validation.
     * @see        doValidate()
     * @see        getValidationFailures()
     */
    public function validate($columns = null)
    {
        $res = $this->doValidate($columns);
        if ($res === true) {
            $this->validationFailures = array();

            return true;
        }

        $this->validationFailures = $res;

        return false;
    }

    /**
     * This function performs the validation work for complex object models.
     *
     * In addition to checking the current object, all related objects will
     * also be validated.  If all pass then <code>true</code> is returned; otherwise
     * an aggregated array of ValidationFailed objects will be returned.
     *
     * @param array $columns Array of column names to validate.
     * @return mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objects otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            if (($retval = CommonGeolocalisationN0Peer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }



            $this->alreadyInValidation = false;
        }

        return (!empty($failureMap) ? $failureMap : true);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *               one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *               BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *               Defaults to BasePeer::TYPE_PHPNAME
     * @return mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = CommonGeolocalisationN0Peer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition($pos)
    {
        switch ($pos) {
            case 0:
                return $this->getId();
                break;
            case 1:
                return $this->getDenomination();
                break;
            case 2:
                return $this->getDenominationFr();
                break;
            case 3:
                return $this->getDenominationEn();
                break;
            case 4:
                return $this->getDenominationEs();
                break;
            case 5:
                return $this->getType();
                break;
            case 6:
                return $this->getLibelleSelectionner();
                break;
            case 7:
                return $this->getLibelleSelectionnerFr();
                break;
            case 8:
                return $this->getLibelleSelectionnerEn();
                break;
            case 9:
                return $this->getLibelleSelectionnerEs();
                break;
            case 10:
                return $this->getLibelleTous();
                break;
            case 11:
                return $this->getLibelleTousFr();
                break;
            case 12:
                return $this->getLibelleTousEn();
                break;
            case 13:
                return $this->getLibelleTousEs();
                break;
            case 14:
                return $this->getLibelleAucun();
                break;
            case 15:
                return $this->getLibelleAucunFr();
                break;
            case 16:
                return $this->getLibelleAucunEn();
                break;
            case 17:
                return $this->getLibelleAucunEs();
                break;
            case 18:
                return $this->getDenominationAr();
                break;
            case 19:
                return $this->getLibelleSelectionnerAr();
                break;
            case 20:
                return $this->getLibelleTousAr();
                break;
            case 21:
                return $this->getLibelleAucunAr();
                break;
            case 22:
                return $this->getDenominationSu();
                break;
            case 23:
                return $this->getLibelleSelectionnerSu();
                break;
            case 24:
                return $this->getLibelleTousSu();
                break;
            case 25:
                return $this->getLibelleAucunSu();
                break;
            case 26:
                return $this->getDenominationDu();
                break;
            case 27:
                return $this->getLibelleSelectionnerDu();
                break;
            case 28:
                return $this->getLibelleTousDu();
                break;
            case 29:
                return $this->getLibelleAucunDu();
                break;
            case 30:
                return $this->getDenominationCz();
                break;
            case 31:
                return $this->getLibelleSelectionnerCz();
                break;
            case 32:
                return $this->getLibelleTousCz();
                break;
            case 33:
                return $this->getLibelleAucunCz();
                break;
            case 34:
                return $this->getDenominationIt();
                break;
            case 35:
                return $this->getLibelleSelectionnerIt();
                break;
            case 36:
                return $this->getLibelleTousIt();
                break;
            case 37:
                return $this->getLibelleAucunIt();
                break;
            default:
                return null;
                break;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                    Defaults to BasePeer::TYPE_PHPNAME.
     * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to true.
     * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
    {
        if (isset($alreadyDumpedObjects['CommonGeolocalisationN0'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonGeolocalisationN0'][$this->getPrimaryKey()] = true;
        $keys = CommonGeolocalisationN0Peer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getDenomination(),
            $keys[2] => $this->getDenominationFr(),
            $keys[3] => $this->getDenominationEn(),
            $keys[4] => $this->getDenominationEs(),
            $keys[5] => $this->getType(),
            $keys[6] => $this->getLibelleSelectionner(),
            $keys[7] => $this->getLibelleSelectionnerFr(),
            $keys[8] => $this->getLibelleSelectionnerEn(),
            $keys[9] => $this->getLibelleSelectionnerEs(),
            $keys[10] => $this->getLibelleTous(),
            $keys[11] => $this->getLibelleTousFr(),
            $keys[12] => $this->getLibelleTousEn(),
            $keys[13] => $this->getLibelleTousEs(),
            $keys[14] => $this->getLibelleAucun(),
            $keys[15] => $this->getLibelleAucunFr(),
            $keys[16] => $this->getLibelleAucunEn(),
            $keys[17] => $this->getLibelleAucunEs(),
            $keys[18] => $this->getDenominationAr(),
            $keys[19] => $this->getLibelleSelectionnerAr(),
            $keys[20] => $this->getLibelleTousAr(),
            $keys[21] => $this->getLibelleAucunAr(),
            $keys[22] => $this->getDenominationSu(),
            $keys[23] => $this->getLibelleSelectionnerSu(),
            $keys[24] => $this->getLibelleTousSu(),
            $keys[25] => $this->getLibelleAucunSu(),
            $keys[26] => $this->getDenominationDu(),
            $keys[27] => $this->getLibelleSelectionnerDu(),
            $keys[28] => $this->getLibelleTousDu(),
            $keys[29] => $this->getLibelleAucunDu(),
            $keys[30] => $this->getDenominationCz(),
            $keys[31] => $this->getLibelleSelectionnerCz(),
            $keys[32] => $this->getLibelleTousCz(),
            $keys[33] => $this->getLibelleAucunCz(),
            $keys[34] => $this->getDenominationIt(),
            $keys[35] => $this->getLibelleSelectionnerIt(),
            $keys[36] => $this->getLibelleTousIt(),
            $keys[37] => $this->getLibelleAucunIt(),
        );

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name peer name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     *                     Defaults to BasePeer::TYPE_PHPNAME
     * @return void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = CommonGeolocalisationN0Peer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

        $this->setByPosition($pos, $value);
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return void
     */
    public function setByPosition($pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setId($value);
                break;
            case 1:
                $this->setDenomination($value);
                break;
            case 2:
                $this->setDenominationFr($value);
                break;
            case 3:
                $this->setDenominationEn($value);
                break;
            case 4:
                $this->setDenominationEs($value);
                break;
            case 5:
                $this->setType($value);
                break;
            case 6:
                $this->setLibelleSelectionner($value);
                break;
            case 7:
                $this->setLibelleSelectionnerFr($value);
                break;
            case 8:
                $this->setLibelleSelectionnerEn($value);
                break;
            case 9:
                $this->setLibelleSelectionnerEs($value);
                break;
            case 10:
                $this->setLibelleTous($value);
                break;
            case 11:
                $this->setLibelleTousFr($value);
                break;
            case 12:
                $this->setLibelleTousEn($value);
                break;
            case 13:
                $this->setLibelleTousEs($value);
                break;
            case 14:
                $this->setLibelleAucun($value);
                break;
            case 15:
                $this->setLibelleAucunFr($value);
                break;
            case 16:
                $this->setLibelleAucunEn($value);
                break;
            case 17:
                $this->setLibelleAucunEs($value);
                break;
            case 18:
                $this->setDenominationAr($value);
                break;
            case 19:
                $this->setLibelleSelectionnerAr($value);
                break;
            case 20:
                $this->setLibelleTousAr($value);
                break;
            case 21:
                $this->setLibelleAucunAr($value);
                break;
            case 22:
                $this->setDenominationSu($value);
                break;
            case 23:
                $this->setLibelleSelectionnerSu($value);
                break;
            case 24:
                $this->setLibelleTousSu($value);
                break;
            case 25:
                $this->setLibelleAucunSu($value);
                break;
            case 26:
                $this->setDenominationDu($value);
                break;
            case 27:
                $this->setLibelleSelectionnerDu($value);
                break;
            case 28:
                $this->setLibelleTousDu($value);
                break;
            case 29:
                $this->setLibelleAucunDu($value);
                break;
            case 30:
                $this->setDenominationCz($value);
                break;
            case 31:
                $this->setLibelleSelectionnerCz($value);
                break;
            case 32:
                $this->setLibelleTousCz($value);
                break;
            case 33:
                $this->setLibelleAucunCz($value);
                break;
            case 34:
                $this->setDenominationIt($value);
                break;
            case 35:
                $this->setLibelleSelectionnerIt($value);
                break;
            case 36:
                $this->setLibelleTousIt($value);
                break;
            case 37:
                $this->setLibelleAucunIt($value);
                break;
        } // switch()
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
     * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
     * The default key type is the column's BasePeer::TYPE_PHPNAME
     *
     * @param array  $arr     An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = CommonGeolocalisationN0Peer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setDenomination($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setDenominationFr($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDenominationEn($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setDenominationEs($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setType($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setLibelleSelectionner($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setLibelleSelectionnerFr($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setLibelleSelectionnerEn($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setLibelleSelectionnerEs($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setLibelleTous($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setLibelleTousFr($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setLibelleTousEn($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setLibelleTousEs($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setLibelleAucun($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setLibelleAucunFr($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setLibelleAucunEn($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setLibelleAucunEs($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setDenominationAr($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setLibelleSelectionnerAr($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setLibelleTousAr($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setLibelleAucunAr($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setDenominationSu($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setLibelleSelectionnerSu($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setLibelleTousSu($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setLibelleAucunSu($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setDenominationDu($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setLibelleSelectionnerDu($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setLibelleTousDu($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setLibelleAucunDu($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setDenominationCz($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setLibelleSelectionnerCz($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setLibelleTousCz($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setLibelleAucunCz($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setDenominationIt($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setLibelleSelectionnerIt($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setLibelleTousIt($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setLibelleAucunIt($arr[$keys[37]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonGeolocalisationN0Peer::DATABASE_NAME);

        if ($this->isColumnModified(CommonGeolocalisationN0Peer::ID)) $criteria->add(CommonGeolocalisationN0Peer::ID, $this->id);
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::DENOMINATION)) $criteria->add(CommonGeolocalisationN0Peer::DENOMINATION, $this->denomination);
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::DENOMINATION_FR)) $criteria->add(CommonGeolocalisationN0Peer::DENOMINATION_FR, $this->denomination_fr);
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::DENOMINATION_EN)) $criteria->add(CommonGeolocalisationN0Peer::DENOMINATION_EN, $this->denomination_en);
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::DENOMINATION_ES)) $criteria->add(CommonGeolocalisationN0Peer::DENOMINATION_ES, $this->denomination_es);
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::TYPE)) $criteria->add(CommonGeolocalisationN0Peer::TYPE, $this->type);
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER)) $criteria->add(CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER, $this->libelle_selectionner);
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_FR)) $criteria->add(CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_FR, $this->libelle_selectionner_fr);
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_EN)) $criteria->add(CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_EN, $this->libelle_selectionner_en);
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_ES)) $criteria->add(CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_ES, $this->libelle_selectionner_es);
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_TOUS)) $criteria->add(CommonGeolocalisationN0Peer::LIBELLE_TOUS, $this->libelle_tous);
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_TOUS_FR)) $criteria->add(CommonGeolocalisationN0Peer::LIBELLE_TOUS_FR, $this->libelle_tous_fr);
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_TOUS_EN)) $criteria->add(CommonGeolocalisationN0Peer::LIBELLE_TOUS_EN, $this->libelle_tous_en);
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_TOUS_ES)) $criteria->add(CommonGeolocalisationN0Peer::LIBELLE_TOUS_ES, $this->libelle_tous_es);
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_AUCUN)) $criteria->add(CommonGeolocalisationN0Peer::LIBELLE_AUCUN, $this->libelle_aucun);
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_AUCUN_FR)) $criteria->add(CommonGeolocalisationN0Peer::LIBELLE_AUCUN_FR, $this->libelle_aucun_fr);
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_AUCUN_EN)) $criteria->add(CommonGeolocalisationN0Peer::LIBELLE_AUCUN_EN, $this->libelle_aucun_en);
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_AUCUN_ES)) $criteria->add(CommonGeolocalisationN0Peer::LIBELLE_AUCUN_ES, $this->libelle_aucun_es);
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::DENOMINATION_AR)) $criteria->add(CommonGeolocalisationN0Peer::DENOMINATION_AR, $this->denomination_ar);
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_AR)) $criteria->add(CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_AR, $this->libelle_selectionner_ar);
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_TOUS_AR)) $criteria->add(CommonGeolocalisationN0Peer::LIBELLE_TOUS_AR, $this->libelle_tous_ar);
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_AUCUN_AR)) $criteria->add(CommonGeolocalisationN0Peer::LIBELLE_AUCUN_AR, $this->libelle_aucun_ar);
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::DENOMINATION_SU)) $criteria->add(CommonGeolocalisationN0Peer::DENOMINATION_SU, $this->denomination_su);
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_SU)) $criteria->add(CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_SU, $this->libelle_selectionner_su);
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_TOUS_SU)) $criteria->add(CommonGeolocalisationN0Peer::LIBELLE_TOUS_SU, $this->libelle_tous_su);
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_AUCUN_SU)) $criteria->add(CommonGeolocalisationN0Peer::LIBELLE_AUCUN_SU, $this->libelle_aucun_su);
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::DENOMINATION_DU)) $criteria->add(CommonGeolocalisationN0Peer::DENOMINATION_DU, $this->denomination_du);
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_DU)) $criteria->add(CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_DU, $this->libelle_selectionner_du);
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_TOUS_DU)) $criteria->add(CommonGeolocalisationN0Peer::LIBELLE_TOUS_DU, $this->libelle_tous_du);
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_AUCUN_DU)) $criteria->add(CommonGeolocalisationN0Peer::LIBELLE_AUCUN_DU, $this->libelle_aucun_du);
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::DENOMINATION_CZ)) $criteria->add(CommonGeolocalisationN0Peer::DENOMINATION_CZ, $this->denomination_cz);
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_CZ)) $criteria->add(CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_CZ, $this->libelle_selectionner_cz);
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_TOUS_CZ)) $criteria->add(CommonGeolocalisationN0Peer::LIBELLE_TOUS_CZ, $this->libelle_tous_cz);
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_AUCUN_CZ)) $criteria->add(CommonGeolocalisationN0Peer::LIBELLE_AUCUN_CZ, $this->libelle_aucun_cz);
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::DENOMINATION_IT)) $criteria->add(CommonGeolocalisationN0Peer::DENOMINATION_IT, $this->denomination_it);
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_IT)) $criteria->add(CommonGeolocalisationN0Peer::LIBELLE_SELECTIONNER_IT, $this->libelle_selectionner_it);
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_TOUS_IT)) $criteria->add(CommonGeolocalisationN0Peer::LIBELLE_TOUS_IT, $this->libelle_tous_it);
        if ($this->isColumnModified(CommonGeolocalisationN0Peer::LIBELLE_AUCUN_IT)) $criteria->add(CommonGeolocalisationN0Peer::LIBELLE_AUCUN_IT, $this->libelle_aucun_it);

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether or not they have been modified.
     *
     * @return Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria()
    {
        $criteria = new Criteria(CommonGeolocalisationN0Peer::DATABASE_NAME);
        $criteria->add(CommonGeolocalisationN0Peer::ID, $this->id);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getId();
    }

    /**
     * Generic method to set the primary key (id column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setId($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getId();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonGeolocalisationN0 (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setDenomination($this->getDenomination());
        $copyObj->setDenominationFr($this->getDenominationFr());
        $copyObj->setDenominationEn($this->getDenominationEn());
        $copyObj->setDenominationEs($this->getDenominationEs());
        $copyObj->setType($this->getType());
        $copyObj->setLibelleSelectionner($this->getLibelleSelectionner());
        $copyObj->setLibelleSelectionnerFr($this->getLibelleSelectionnerFr());
        $copyObj->setLibelleSelectionnerEn($this->getLibelleSelectionnerEn());
        $copyObj->setLibelleSelectionnerEs($this->getLibelleSelectionnerEs());
        $copyObj->setLibelleTous($this->getLibelleTous());
        $copyObj->setLibelleTousFr($this->getLibelleTousFr());
        $copyObj->setLibelleTousEn($this->getLibelleTousEn());
        $copyObj->setLibelleTousEs($this->getLibelleTousEs());
        $copyObj->setLibelleAucun($this->getLibelleAucun());
        $copyObj->setLibelleAucunFr($this->getLibelleAucunFr());
        $copyObj->setLibelleAucunEn($this->getLibelleAucunEn());
        $copyObj->setLibelleAucunEs($this->getLibelleAucunEs());
        $copyObj->setDenominationAr($this->getDenominationAr());
        $copyObj->setLibelleSelectionnerAr($this->getLibelleSelectionnerAr());
        $copyObj->setLibelleTousAr($this->getLibelleTousAr());
        $copyObj->setLibelleAucunAr($this->getLibelleAucunAr());
        $copyObj->setDenominationSu($this->getDenominationSu());
        $copyObj->setLibelleSelectionnerSu($this->getLibelleSelectionnerSu());
        $copyObj->setLibelleTousSu($this->getLibelleTousSu());
        $copyObj->setLibelleAucunSu($this->getLibelleAucunSu());
        $copyObj->setDenominationDu($this->getDenominationDu());
        $copyObj->setLibelleSelectionnerDu($this->getLibelleSelectionnerDu());
        $copyObj->setLibelleTousDu($this->getLibelleTousDu());
        $copyObj->setLibelleAucunDu($this->getLibelleAucunDu());
        $copyObj->setDenominationCz($this->getDenominationCz());
        $copyObj->setLibelleSelectionnerCz($this->getLibelleSelectionnerCz());
        $copyObj->setLibelleTousCz($this->getLibelleTousCz());
        $copyObj->setLibelleAucunCz($this->getLibelleAucunCz());
        $copyObj->setDenominationIt($this->getDenominationIt());
        $copyObj->setLibelleSelectionnerIt($this->getLibelleSelectionnerIt());
        $copyObj->setLibelleTousIt($this->getLibelleTousIt());
        $copyObj->setLibelleAucunIt($this->getLibelleAucunIt());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setId(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return CommonGeolocalisationN0 Clone of current object.
     * @throws PropelException
     */
    public function copy($deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }

    /**
     * Returns a peer instance associated with this om.
     *
     * Since Peer classes are not to have any instance attributes, this method returns the
     * same instance for all member of this class. The method could therefore
     * be static, but this would prevent one from overriding the behavior.
     *
     * @return CommonGeolocalisationN0Peer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonGeolocalisationN0Peer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->denomination = null;
        $this->denomination_fr = null;
        $this->denomination_en = null;
        $this->denomination_es = null;
        $this->type = null;
        $this->libelle_selectionner = null;
        $this->libelle_selectionner_fr = null;
        $this->libelle_selectionner_en = null;
        $this->libelle_selectionner_es = null;
        $this->libelle_tous = null;
        $this->libelle_tous_fr = null;
        $this->libelle_tous_en = null;
        $this->libelle_tous_es = null;
        $this->libelle_aucun = null;
        $this->libelle_aucun_fr = null;
        $this->libelle_aucun_en = null;
        $this->libelle_aucun_es = null;
        $this->denomination_ar = null;
        $this->libelle_selectionner_ar = null;
        $this->libelle_tous_ar = null;
        $this->libelle_aucun_ar = null;
        $this->denomination_su = null;
        $this->libelle_selectionner_su = null;
        $this->libelle_tous_su = null;
        $this->libelle_aucun_su = null;
        $this->denomination_du = null;
        $this->libelle_selectionner_du = null;
        $this->libelle_tous_du = null;
        $this->libelle_aucun_du = null;
        $this->denomination_cz = null;
        $this->libelle_selectionner_cz = null;
        $this->libelle_tous_cz = null;
        $this->libelle_aucun_cz = null;
        $this->denomination_it = null;
        $this->libelle_selectionner_it = null;
        $this->libelle_tous_it = null;
        $this->libelle_aucun_it = null;
        $this->alreadyInSave = false;
        $this->alreadyInValidation = false;
        $this->alreadyInClearAllReferencesDeep = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);
    }

    /**
     * Resets all references to other model objects or collections of model objects.
     *
     * This method is a user-space workaround for PHP's inability to garbage collect
     * objects with circular references (even in PHP 5.3). This is currently necessary
     * when using Propel in certain daemon or large-volume/high-memory operations.
     *
     * @param boolean $deep Whether to also clear the references on all referrer objects.
     */
    public function clearAllReferences($deep = false)
    {
        if ($deep && !$this->alreadyInClearAllReferencesDeep) {
            $this->alreadyInClearAllReferencesDeep = true;

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonGeolocalisationN0Peer::DEFAULT_STRING_FORMAT);
    }

    /**
     * return true is the object is in saving state
     *
     * @return boolean
     */
    public function isAlreadyInSave()
    {
        return $this->alreadyInSave;
    }

}
