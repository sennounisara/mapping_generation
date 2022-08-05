<?php


/**
 * Base class that represents a row from the 'GeolocalisationN1' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonGeolocalisationN1 extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonGeolocalisationN1Peer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonGeolocalisationN1Peer
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
     * The value for the id_geolocalisationn0 field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_geolocalisationn0;

    /**
     * The value for the actif field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $actif;

    /**
     * The value for the denomination1 field.
     * @var        string
     */
    protected $denomination1;

    /**
     * The value for the denomination2 field.
     * @var        string
     */
    protected $denomination2;

    /**
     * The value for the denomination1_ar field.
     * @var        string
     */
    protected $denomination1_ar;

    /**
     * The value for the denomination2_ar field.
     * @var        string
     */
    protected $denomination2_ar;

    /**
     * The value for the denomination1_fr field.
     * @var        string
     */
    protected $denomination1_fr;

    /**
     * The value for the denomination2_fr field.
     * @var        string
     */
    protected $denomination2_fr;

    /**
     * The value for the denomination1_en field.
     * @var        string
     */
    protected $denomination1_en;

    /**
     * The value for the denomination2_en field.
     * @var        string
     */
    protected $denomination2_en;

    /**
     * The value for the denomination1_es field.
     * @var        string
     */
    protected $denomination1_es;

    /**
     * The value for the denomination2_es field.
     * @var        string
     */
    protected $denomination2_es;

    /**
     * The value for the denomination1_su field.
     * @var        string
     */
    protected $denomination1_su;

    /**
     * The value for the denomination2_su field.
     * @var        string
     */
    protected $denomination2_su;

    /**
     * The value for the denomination1_du field.
     * @var        string
     */
    protected $denomination1_du;

    /**
     * The value for the denomination2_du field.
     * @var        string
     */
    protected $denomination2_du;

    /**
     * The value for the denomination1_cz field.
     * @var        string
     */
    protected $denomination1_cz;

    /**
     * The value for the denomination2_cz field.
     * @var        string
     */
    protected $denomination2_cz;

    /**
     * The value for the denomination1_it field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $denomination1_it;

    /**
     * The value for the denomination2_it field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $denomination2_it;

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
        $this->id_geolocalisationn0 = 0;
        $this->actif = '1';
        $this->denomination1_it = '';
        $this->denomination2_it = '';
    }

    /**
     * Initializes internal state of BaseCommonGeolocalisationN1 object.
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
     * Get the [id_geolocalisationn0] column value.
     * 
     * @return int
     */
    public function getIdGeolocalisationn0()
    {

        return $this->id_geolocalisationn0;
    }

    /**
     * Get the [actif] column value.
     * 
     * @return string
     */
    public function getActif()
    {

        return $this->actif;
    }

    /**
     * Get the [denomination1] column value.
     * 
     * @return string
     */
    public function getDenomination1()
    {

        return $this->denomination1;
    }

    /**
     * Get the [denomination2] column value.
     * 
     * @return string
     */
    public function getDenomination2()
    {

        return $this->denomination2;
    }

    /**
     * Get the [denomination1_ar] column value.
     * 
     * @return string
     */
    public function getDenomination1Ar()
    {

        return $this->denomination1_ar;
    }

    /**
     * Get the [denomination2_ar] column value.
     * 
     * @return string
     */
    public function getDenomination2Ar()
    {

        return $this->denomination2_ar;
    }

    /**
     * Get the [denomination1_fr] column value.
     * 
     * @return string
     */
    public function getDenomination1Fr()
    {

        return $this->denomination1_fr;
    }

    /**
     * Get the [denomination2_fr] column value.
     * 
     * @return string
     */
    public function getDenomination2Fr()
    {

        return $this->denomination2_fr;
    }

    /**
     * Get the [denomination1_en] column value.
     * 
     * @return string
     */
    public function getDenomination1En()
    {

        return $this->denomination1_en;
    }

    /**
     * Get the [denomination2_en] column value.
     * 
     * @return string
     */
    public function getDenomination2En()
    {

        return $this->denomination2_en;
    }

    /**
     * Get the [denomination1_es] column value.
     * 
     * @return string
     */
    public function getDenomination1Es()
    {

        return $this->denomination1_es;
    }

    /**
     * Get the [denomination2_es] column value.
     * 
     * @return string
     */
    public function getDenomination2Es()
    {

        return $this->denomination2_es;
    }

    /**
     * Get the [denomination1_su] column value.
     * 
     * @return string
     */
    public function getDenomination1Su()
    {

        return $this->denomination1_su;
    }

    /**
     * Get the [denomination2_su] column value.
     * 
     * @return string
     */
    public function getDenomination2Su()
    {

        return $this->denomination2_su;
    }

    /**
     * Get the [denomination1_du] column value.
     * 
     * @return string
     */
    public function getDenomination1Du()
    {

        return $this->denomination1_du;
    }

    /**
     * Get the [denomination2_du] column value.
     * 
     * @return string
     */
    public function getDenomination2Du()
    {

        return $this->denomination2_du;
    }

    /**
     * Get the [denomination1_cz] column value.
     * 
     * @return string
     */
    public function getDenomination1Cz()
    {

        return $this->denomination1_cz;
    }

    /**
     * Get the [denomination2_cz] column value.
     * 
     * @return string
     */
    public function getDenomination2Cz()
    {

        return $this->denomination2_cz;
    }

    /**
     * Get the [denomination1_it] column value.
     * 
     * @return string
     */
    public function getDenomination1It()
    {

        return $this->denomination1_it;
    }

    /**
     * Get the [denomination2_it] column value.
     * 
     * @return string
     */
    public function getDenomination2It()
    {

        return $this->denomination2_it;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonGeolocalisationN1 The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN1Peer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [id_geolocalisationn0] column.
     * 
     * @param int $v new value
     * @return CommonGeolocalisationN1 The current object (for fluent API support)
     */
    public function setIdGeolocalisationn0($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_geolocalisationn0 !== $v) {
            $this->id_geolocalisationn0 = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN1Peer::ID_GEOLOCALISATIONN0;
        }


        return $this;
    } // setIdGeolocalisationn0()

    /**
     * Set the value of [actif] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN1 The current object (for fluent API support)
     */
    public function setActif($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->actif !== $v) {
            $this->actif = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN1Peer::ACTIF;
        }


        return $this;
    } // setActif()

    /**
     * Set the value of [denomination1] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN1 The current object (for fluent API support)
     */
    public function setDenomination1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->denomination1 !== $v) {
            $this->denomination1 = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN1Peer::DENOMINATION1;
        }


        return $this;
    } // setDenomination1()

    /**
     * Set the value of [denomination2] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN1 The current object (for fluent API support)
     */
    public function setDenomination2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->denomination2 !== $v) {
            $this->denomination2 = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN1Peer::DENOMINATION2;
        }


        return $this;
    } // setDenomination2()

    /**
     * Set the value of [denomination1_ar] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN1 The current object (for fluent API support)
     */
    public function setDenomination1Ar($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->denomination1_ar !== $v) {
            $this->denomination1_ar = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN1Peer::DENOMINATION1_AR;
        }


        return $this;
    } // setDenomination1Ar()

    /**
     * Set the value of [denomination2_ar] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN1 The current object (for fluent API support)
     */
    public function setDenomination2Ar($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->denomination2_ar !== $v) {
            $this->denomination2_ar = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN1Peer::DENOMINATION2_AR;
        }


        return $this;
    } // setDenomination2Ar()

    /**
     * Set the value of [denomination1_fr] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN1 The current object (for fluent API support)
     */
    public function setDenomination1Fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->denomination1_fr !== $v) {
            $this->denomination1_fr = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN1Peer::DENOMINATION1_FR;
        }


        return $this;
    } // setDenomination1Fr()

    /**
     * Set the value of [denomination2_fr] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN1 The current object (for fluent API support)
     */
    public function setDenomination2Fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->denomination2_fr !== $v) {
            $this->denomination2_fr = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN1Peer::DENOMINATION2_FR;
        }


        return $this;
    } // setDenomination2Fr()

    /**
     * Set the value of [denomination1_en] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN1 The current object (for fluent API support)
     */
    public function setDenomination1En($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->denomination1_en !== $v) {
            $this->denomination1_en = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN1Peer::DENOMINATION1_EN;
        }


        return $this;
    } // setDenomination1En()

    /**
     * Set the value of [denomination2_en] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN1 The current object (for fluent API support)
     */
    public function setDenomination2En($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->denomination2_en !== $v) {
            $this->denomination2_en = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN1Peer::DENOMINATION2_EN;
        }


        return $this;
    } // setDenomination2En()

    /**
     * Set the value of [denomination1_es] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN1 The current object (for fluent API support)
     */
    public function setDenomination1Es($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->denomination1_es !== $v) {
            $this->denomination1_es = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN1Peer::DENOMINATION1_ES;
        }


        return $this;
    } // setDenomination1Es()

    /**
     * Set the value of [denomination2_es] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN1 The current object (for fluent API support)
     */
    public function setDenomination2Es($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->denomination2_es !== $v) {
            $this->denomination2_es = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN1Peer::DENOMINATION2_ES;
        }


        return $this;
    } // setDenomination2Es()

    /**
     * Set the value of [denomination1_su] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN1 The current object (for fluent API support)
     */
    public function setDenomination1Su($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->denomination1_su !== $v) {
            $this->denomination1_su = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN1Peer::DENOMINATION1_SU;
        }


        return $this;
    } // setDenomination1Su()

    /**
     * Set the value of [denomination2_su] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN1 The current object (for fluent API support)
     */
    public function setDenomination2Su($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->denomination2_su !== $v) {
            $this->denomination2_su = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN1Peer::DENOMINATION2_SU;
        }


        return $this;
    } // setDenomination2Su()

    /**
     * Set the value of [denomination1_du] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN1 The current object (for fluent API support)
     */
    public function setDenomination1Du($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->denomination1_du !== $v) {
            $this->denomination1_du = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN1Peer::DENOMINATION1_DU;
        }


        return $this;
    } // setDenomination1Du()

    /**
     * Set the value of [denomination2_du] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN1 The current object (for fluent API support)
     */
    public function setDenomination2Du($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->denomination2_du !== $v) {
            $this->denomination2_du = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN1Peer::DENOMINATION2_DU;
        }


        return $this;
    } // setDenomination2Du()

    /**
     * Set the value of [denomination1_cz] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN1 The current object (for fluent API support)
     */
    public function setDenomination1Cz($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->denomination1_cz !== $v) {
            $this->denomination1_cz = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN1Peer::DENOMINATION1_CZ;
        }


        return $this;
    } // setDenomination1Cz()

    /**
     * Set the value of [denomination2_cz] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN1 The current object (for fluent API support)
     */
    public function setDenomination2Cz($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->denomination2_cz !== $v) {
            $this->denomination2_cz = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN1Peer::DENOMINATION2_CZ;
        }


        return $this;
    } // setDenomination2Cz()

    /**
     * Set the value of [denomination1_it] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN1 The current object (for fluent API support)
     */
    public function setDenomination1It($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->denomination1_it !== $v) {
            $this->denomination1_it = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN1Peer::DENOMINATION1_IT;
        }


        return $this;
    } // setDenomination1It()

    /**
     * Set the value of [denomination2_it] column.
     * 
     * @param string $v new value
     * @return CommonGeolocalisationN1 The current object (for fluent API support)
     */
    public function setDenomination2It($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->denomination2_it !== $v) {
            $this->denomination2_it = $v;
            $this->modifiedColumns[] = CommonGeolocalisationN1Peer::DENOMINATION2_IT;
        }


        return $this;
    } // setDenomination2It()

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
            if ($this->id_geolocalisationn0 !== 0) {
                return false;
            }

            if ($this->actif !== '1') {
                return false;
            }

            if ($this->denomination1_it !== '') {
                return false;
            }

            if ($this->denomination2_it !== '') {
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
            $this->id_geolocalisationn0 = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->actif = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->denomination1 = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->denomination2 = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->denomination1_ar = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->denomination2_ar = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->denomination1_fr = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->denomination2_fr = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->denomination1_en = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->denomination2_en = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->denomination1_es = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->denomination2_es = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->denomination1_su = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->denomination2_su = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->denomination1_du = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->denomination2_du = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->denomination1_cz = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->denomination2_cz = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->denomination1_it = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->denomination2_it = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 21; // 21 = CommonGeolocalisationN1Peer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonGeolocalisationN1 object", $e);
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
            $con = Propel::getConnection(CommonGeolocalisationN1Peer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonGeolocalisationN1Peer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonGeolocalisationN1Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonGeolocalisationN1Query::create()
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
            $con = Propel::getConnection(CommonGeolocalisationN1Peer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonGeolocalisationN1Peer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonGeolocalisationN1Peer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonGeolocalisationN1Peer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonGeolocalisationN1Peer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN1Peer::ID_GEOLOCALISATIONN0)) {
            $modifiedColumns[':p' . $index++]  = '`id_geolocalisationN0`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN1Peer::ACTIF)) {
            $modifiedColumns[':p' . $index++]  = '`actif`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN1Peer::DENOMINATION1)) {
            $modifiedColumns[':p' . $index++]  = '`denomination1`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN1Peer::DENOMINATION2)) {
            $modifiedColumns[':p' . $index++]  = '`denomination2`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN1Peer::DENOMINATION1_AR)) {
            $modifiedColumns[':p' . $index++]  = '`denomination1_ar`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN1Peer::DENOMINATION2_AR)) {
            $modifiedColumns[':p' . $index++]  = '`denomination2_ar`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN1Peer::DENOMINATION1_FR)) {
            $modifiedColumns[':p' . $index++]  = '`denomination1_fr`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN1Peer::DENOMINATION2_FR)) {
            $modifiedColumns[':p' . $index++]  = '`denomination2_fr`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN1Peer::DENOMINATION1_EN)) {
            $modifiedColumns[':p' . $index++]  = '`denomination1_en`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN1Peer::DENOMINATION2_EN)) {
            $modifiedColumns[':p' . $index++]  = '`denomination2_en`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN1Peer::DENOMINATION1_ES)) {
            $modifiedColumns[':p' . $index++]  = '`denomination1_es`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN1Peer::DENOMINATION2_ES)) {
            $modifiedColumns[':p' . $index++]  = '`denomination2_es`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN1Peer::DENOMINATION1_SU)) {
            $modifiedColumns[':p' . $index++]  = '`denomination1_su`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN1Peer::DENOMINATION2_SU)) {
            $modifiedColumns[':p' . $index++]  = '`denomination2_su`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN1Peer::DENOMINATION1_DU)) {
            $modifiedColumns[':p' . $index++]  = '`denomination1_du`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN1Peer::DENOMINATION2_DU)) {
            $modifiedColumns[':p' . $index++]  = '`denomination2_du`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN1Peer::DENOMINATION1_CZ)) {
            $modifiedColumns[':p' . $index++]  = '`denomination1_cz`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN1Peer::DENOMINATION2_CZ)) {
            $modifiedColumns[':p' . $index++]  = '`denomination2_cz`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN1Peer::DENOMINATION1_IT)) {
            $modifiedColumns[':p' . $index++]  = '`denomination1_it`';
        }
        if ($this->isColumnModified(CommonGeolocalisationN1Peer::DENOMINATION2_IT)) {
            $modifiedColumns[':p' . $index++]  = '`denomination2_it`';
        }

        $sql = sprintf(
            'INSERT INTO `GeolocalisationN1` (%s) VALUES (%s)',
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
                    case '`id_geolocalisationN0`':						
                        $stmt->bindValue($identifier, $this->id_geolocalisationn0, PDO::PARAM_INT);
                        break;
                    case '`actif`':						
                        $stmt->bindValue($identifier, $this->actif, PDO::PARAM_STR);
                        break;
                    case '`denomination1`':						
                        $stmt->bindValue($identifier, $this->denomination1, PDO::PARAM_STR);
                        break;
                    case '`denomination2`':						
                        $stmt->bindValue($identifier, $this->denomination2, PDO::PARAM_STR);
                        break;
                    case '`denomination1_ar`':						
                        $stmt->bindValue($identifier, $this->denomination1_ar, PDO::PARAM_STR);
                        break;
                    case '`denomination2_ar`':						
                        $stmt->bindValue($identifier, $this->denomination2_ar, PDO::PARAM_STR);
                        break;
                    case '`denomination1_fr`':						
                        $stmt->bindValue($identifier, $this->denomination1_fr, PDO::PARAM_STR);
                        break;
                    case '`denomination2_fr`':						
                        $stmt->bindValue($identifier, $this->denomination2_fr, PDO::PARAM_STR);
                        break;
                    case '`denomination1_en`':						
                        $stmt->bindValue($identifier, $this->denomination1_en, PDO::PARAM_STR);
                        break;
                    case '`denomination2_en`':						
                        $stmt->bindValue($identifier, $this->denomination2_en, PDO::PARAM_STR);
                        break;
                    case '`denomination1_es`':						
                        $stmt->bindValue($identifier, $this->denomination1_es, PDO::PARAM_STR);
                        break;
                    case '`denomination2_es`':						
                        $stmt->bindValue($identifier, $this->denomination2_es, PDO::PARAM_STR);
                        break;
                    case '`denomination1_su`':						
                        $stmt->bindValue($identifier, $this->denomination1_su, PDO::PARAM_STR);
                        break;
                    case '`denomination2_su`':						
                        $stmt->bindValue($identifier, $this->denomination2_su, PDO::PARAM_STR);
                        break;
                    case '`denomination1_du`':						
                        $stmt->bindValue($identifier, $this->denomination1_du, PDO::PARAM_STR);
                        break;
                    case '`denomination2_du`':						
                        $stmt->bindValue($identifier, $this->denomination2_du, PDO::PARAM_STR);
                        break;
                    case '`denomination1_cz`':						
                        $stmt->bindValue($identifier, $this->denomination1_cz, PDO::PARAM_STR);
                        break;
                    case '`denomination2_cz`':						
                        $stmt->bindValue($identifier, $this->denomination2_cz, PDO::PARAM_STR);
                        break;
                    case '`denomination1_it`':						
                        $stmt->bindValue($identifier, $this->denomination1_it, PDO::PARAM_STR);
                        break;
                    case '`denomination2_it`':						
                        $stmt->bindValue($identifier, $this->denomination2_it, PDO::PARAM_STR);
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


            if (($retval = CommonGeolocalisationN1Peer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonGeolocalisationN1Peer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdGeolocalisationn0();
                break;
            case 2:
                return $this->getActif();
                break;
            case 3:
                return $this->getDenomination1();
                break;
            case 4:
                return $this->getDenomination2();
                break;
            case 5:
                return $this->getDenomination1Ar();
                break;
            case 6:
                return $this->getDenomination2Ar();
                break;
            case 7:
                return $this->getDenomination1Fr();
                break;
            case 8:
                return $this->getDenomination2Fr();
                break;
            case 9:
                return $this->getDenomination1En();
                break;
            case 10:
                return $this->getDenomination2En();
                break;
            case 11:
                return $this->getDenomination1Es();
                break;
            case 12:
                return $this->getDenomination2Es();
                break;
            case 13:
                return $this->getDenomination1Su();
                break;
            case 14:
                return $this->getDenomination2Su();
                break;
            case 15:
                return $this->getDenomination1Du();
                break;
            case 16:
                return $this->getDenomination2Du();
                break;
            case 17:
                return $this->getDenomination1Cz();
                break;
            case 18:
                return $this->getDenomination2Cz();
                break;
            case 19:
                return $this->getDenomination1It();
                break;
            case 20:
                return $this->getDenomination2It();
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
        if (isset($alreadyDumpedObjects['CommonGeolocalisationN1'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonGeolocalisationN1'][$this->getPrimaryKey()] = true;
        $keys = CommonGeolocalisationN1Peer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getIdGeolocalisationn0(),
            $keys[2] => $this->getActif(),
            $keys[3] => $this->getDenomination1(),
            $keys[4] => $this->getDenomination2(),
            $keys[5] => $this->getDenomination1Ar(),
            $keys[6] => $this->getDenomination2Ar(),
            $keys[7] => $this->getDenomination1Fr(),
            $keys[8] => $this->getDenomination2Fr(),
            $keys[9] => $this->getDenomination1En(),
            $keys[10] => $this->getDenomination2En(),
            $keys[11] => $this->getDenomination1Es(),
            $keys[12] => $this->getDenomination2Es(),
            $keys[13] => $this->getDenomination1Su(),
            $keys[14] => $this->getDenomination2Su(),
            $keys[15] => $this->getDenomination1Du(),
            $keys[16] => $this->getDenomination2Du(),
            $keys[17] => $this->getDenomination1Cz(),
            $keys[18] => $this->getDenomination2Cz(),
            $keys[19] => $this->getDenomination1It(),
            $keys[20] => $this->getDenomination2It(),
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
        $pos = CommonGeolocalisationN1Peer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdGeolocalisationn0($value);
                break;
            case 2:
                $this->setActif($value);
                break;
            case 3:
                $this->setDenomination1($value);
                break;
            case 4:
                $this->setDenomination2($value);
                break;
            case 5:
                $this->setDenomination1Ar($value);
                break;
            case 6:
                $this->setDenomination2Ar($value);
                break;
            case 7:
                $this->setDenomination1Fr($value);
                break;
            case 8:
                $this->setDenomination2Fr($value);
                break;
            case 9:
                $this->setDenomination1En($value);
                break;
            case 10:
                $this->setDenomination2En($value);
                break;
            case 11:
                $this->setDenomination1Es($value);
                break;
            case 12:
                $this->setDenomination2Es($value);
                break;
            case 13:
                $this->setDenomination1Su($value);
                break;
            case 14:
                $this->setDenomination2Su($value);
                break;
            case 15:
                $this->setDenomination1Du($value);
                break;
            case 16:
                $this->setDenomination2Du($value);
                break;
            case 17:
                $this->setDenomination1Cz($value);
                break;
            case 18:
                $this->setDenomination2Cz($value);
                break;
            case 19:
                $this->setDenomination1It($value);
                break;
            case 20:
                $this->setDenomination2It($value);
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
        $keys = CommonGeolocalisationN1Peer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdGeolocalisationn0($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setActif($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDenomination1($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setDenomination2($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setDenomination1Ar($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setDenomination2Ar($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setDenomination1Fr($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setDenomination2Fr($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setDenomination1En($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setDenomination2En($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDenomination1Es($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setDenomination2Es($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setDenomination1Su($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setDenomination2Su($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setDenomination1Du($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setDenomination2Du($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setDenomination1Cz($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setDenomination2Cz($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setDenomination1It($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setDenomination2It($arr[$keys[20]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonGeolocalisationN1Peer::DATABASE_NAME);

        if ($this->isColumnModified(CommonGeolocalisationN1Peer::ID)) $criteria->add(CommonGeolocalisationN1Peer::ID, $this->id);
        if ($this->isColumnModified(CommonGeolocalisationN1Peer::ID_GEOLOCALISATIONN0)) $criteria->add(CommonGeolocalisationN1Peer::ID_GEOLOCALISATIONN0, $this->id_geolocalisationn0);
        if ($this->isColumnModified(CommonGeolocalisationN1Peer::ACTIF)) $criteria->add(CommonGeolocalisationN1Peer::ACTIF, $this->actif);
        if ($this->isColumnModified(CommonGeolocalisationN1Peer::DENOMINATION1)) $criteria->add(CommonGeolocalisationN1Peer::DENOMINATION1, $this->denomination1);
        if ($this->isColumnModified(CommonGeolocalisationN1Peer::DENOMINATION2)) $criteria->add(CommonGeolocalisationN1Peer::DENOMINATION2, $this->denomination2);
        if ($this->isColumnModified(CommonGeolocalisationN1Peer::DENOMINATION1_AR)) $criteria->add(CommonGeolocalisationN1Peer::DENOMINATION1_AR, $this->denomination1_ar);
        if ($this->isColumnModified(CommonGeolocalisationN1Peer::DENOMINATION2_AR)) $criteria->add(CommonGeolocalisationN1Peer::DENOMINATION2_AR, $this->denomination2_ar);
        if ($this->isColumnModified(CommonGeolocalisationN1Peer::DENOMINATION1_FR)) $criteria->add(CommonGeolocalisationN1Peer::DENOMINATION1_FR, $this->denomination1_fr);
        if ($this->isColumnModified(CommonGeolocalisationN1Peer::DENOMINATION2_FR)) $criteria->add(CommonGeolocalisationN1Peer::DENOMINATION2_FR, $this->denomination2_fr);
        if ($this->isColumnModified(CommonGeolocalisationN1Peer::DENOMINATION1_EN)) $criteria->add(CommonGeolocalisationN1Peer::DENOMINATION1_EN, $this->denomination1_en);
        if ($this->isColumnModified(CommonGeolocalisationN1Peer::DENOMINATION2_EN)) $criteria->add(CommonGeolocalisationN1Peer::DENOMINATION2_EN, $this->denomination2_en);
        if ($this->isColumnModified(CommonGeolocalisationN1Peer::DENOMINATION1_ES)) $criteria->add(CommonGeolocalisationN1Peer::DENOMINATION1_ES, $this->denomination1_es);
        if ($this->isColumnModified(CommonGeolocalisationN1Peer::DENOMINATION2_ES)) $criteria->add(CommonGeolocalisationN1Peer::DENOMINATION2_ES, $this->denomination2_es);
        if ($this->isColumnModified(CommonGeolocalisationN1Peer::DENOMINATION1_SU)) $criteria->add(CommonGeolocalisationN1Peer::DENOMINATION1_SU, $this->denomination1_su);
        if ($this->isColumnModified(CommonGeolocalisationN1Peer::DENOMINATION2_SU)) $criteria->add(CommonGeolocalisationN1Peer::DENOMINATION2_SU, $this->denomination2_su);
        if ($this->isColumnModified(CommonGeolocalisationN1Peer::DENOMINATION1_DU)) $criteria->add(CommonGeolocalisationN1Peer::DENOMINATION1_DU, $this->denomination1_du);
        if ($this->isColumnModified(CommonGeolocalisationN1Peer::DENOMINATION2_DU)) $criteria->add(CommonGeolocalisationN1Peer::DENOMINATION2_DU, $this->denomination2_du);
        if ($this->isColumnModified(CommonGeolocalisationN1Peer::DENOMINATION1_CZ)) $criteria->add(CommonGeolocalisationN1Peer::DENOMINATION1_CZ, $this->denomination1_cz);
        if ($this->isColumnModified(CommonGeolocalisationN1Peer::DENOMINATION2_CZ)) $criteria->add(CommonGeolocalisationN1Peer::DENOMINATION2_CZ, $this->denomination2_cz);
        if ($this->isColumnModified(CommonGeolocalisationN1Peer::DENOMINATION1_IT)) $criteria->add(CommonGeolocalisationN1Peer::DENOMINATION1_IT, $this->denomination1_it);
        if ($this->isColumnModified(CommonGeolocalisationN1Peer::DENOMINATION2_IT)) $criteria->add(CommonGeolocalisationN1Peer::DENOMINATION2_IT, $this->denomination2_it);

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
        $criteria = new Criteria(CommonGeolocalisationN1Peer::DATABASE_NAME);
        $criteria->add(CommonGeolocalisationN1Peer::ID, $this->id);

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
     * @param object $copyObj An object of CommonGeolocalisationN1 (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdGeolocalisationn0($this->getIdGeolocalisationn0());
        $copyObj->setActif($this->getActif());
        $copyObj->setDenomination1($this->getDenomination1());
        $copyObj->setDenomination2($this->getDenomination2());
        $copyObj->setDenomination1Ar($this->getDenomination1Ar());
        $copyObj->setDenomination2Ar($this->getDenomination2Ar());
        $copyObj->setDenomination1Fr($this->getDenomination1Fr());
        $copyObj->setDenomination2Fr($this->getDenomination2Fr());
        $copyObj->setDenomination1En($this->getDenomination1En());
        $copyObj->setDenomination2En($this->getDenomination2En());
        $copyObj->setDenomination1Es($this->getDenomination1Es());
        $copyObj->setDenomination2Es($this->getDenomination2Es());
        $copyObj->setDenomination1Su($this->getDenomination1Su());
        $copyObj->setDenomination2Su($this->getDenomination2Su());
        $copyObj->setDenomination1Du($this->getDenomination1Du());
        $copyObj->setDenomination2Du($this->getDenomination2Du());
        $copyObj->setDenomination1Cz($this->getDenomination1Cz());
        $copyObj->setDenomination2Cz($this->getDenomination2Cz());
        $copyObj->setDenomination1It($this->getDenomination1It());
        $copyObj->setDenomination2It($this->getDenomination2It());
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
     * @return CommonGeolocalisationN1 Clone of current object.
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
     * @return CommonGeolocalisationN1Peer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonGeolocalisationN1Peer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->id_geolocalisationn0 = null;
        $this->actif = null;
        $this->denomination1 = null;
        $this->denomination2 = null;
        $this->denomination1_ar = null;
        $this->denomination2_ar = null;
        $this->denomination1_fr = null;
        $this->denomination2_fr = null;
        $this->denomination1_en = null;
        $this->denomination2_en = null;
        $this->denomination1_es = null;
        $this->denomination2_es = null;
        $this->denomination1_su = null;
        $this->denomination2_su = null;
        $this->denomination1_du = null;
        $this->denomination2_du = null;
        $this->denomination1_cz = null;
        $this->denomination2_cz = null;
        $this->denomination1_it = null;
        $this->denomination2_it = null;
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
        return (string) $this->exportTo(CommonGeolocalisationN1Peer::DEFAULT_STRING_FORMAT);
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
