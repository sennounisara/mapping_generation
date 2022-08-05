<?php


/**
 * Base class that represents a row from the 'backup_Ordre_Du_Jour' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonBackupOrdreDuJour extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonBackupOrdreDuJourPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonBackupOrdreDuJourPeer
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
     * The value for the organisme field.
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the id_commission field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_commission;

    /**
     * The value for the ref_consultation field.
     * @var        string
     */
    protected $ref_consultation;

    /**
     * The value for the ref_libre field.
     * @var        string
     */
    protected $ref_libre;

    /**
     * The value for the id_etape field.
     * @var        int
     */
    protected $id_etape;

    /**
     * The value for the intitule_ordre_du_jour field.
     * @var        string
     */
    protected $intitule_ordre_du_jour;

    /**
     * The value for the lots_odj_libre field.
     * @var        string
     */
    protected $lots_odj_libre;

    /**
     * The value for the id_type_procedure field.
     * @var        int
     */
    protected $id_type_procedure;

    /**
     * The value for the type_procedure_libre field.
     * @var        string
     */
    protected $type_procedure_libre;

    /**
     * The value for the date_cloture field.
     * @var        string
     */
    protected $date_cloture;

    /**
     * The value for the type_env field.
     * @var        int
     */
    protected $type_env;

    /**
     * The value for the sous_pli field.
     * @var        int
     */
    protected $sous_pli;

    /**
     * The value for the heure field.
     * Note: this column has a database default value of: '00'
     * @var        string
     */
    protected $heure;

    /**
     * The value for the etape_consultation field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $etape_consultation;

    /**
     * The value for the type_consultation field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $type_consultation;

    /**
     * The value for the minutes field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $minutes;

    /**
     * The value for the service field.
     * @var        string
     */
    protected $service;

    /**
     * The value for the id_service field.
     * @var        int
     */
    protected $id_service;

    /**
     * The value for the date_debut field.
     * @var        string
     */
    protected $date_debut;

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
        $this->id_commission = 0;
        $this->heure = '00';
        $this->etape_consultation = '';
        $this->type_consultation = '';
        $this->minutes = '';
    }

    /**
     * Initializes internal state of BaseCommonBackupOrdreDuJour object.
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
     * Get the [organisme] column value.
     * 
     * @return string
     */
    public function getOrganisme()
    {

        return $this->organisme;
    }

    /**
     * Get the [id_commission] column value.
     * 
     * @return int
     */
    public function getIdCommission()
    {

        return $this->id_commission;
    }

    /**
     * Get the [ref_consultation] column value.
     * 
     * @return string
     */
    public function getRefConsultation()
    {

        return $this->ref_consultation;
    }

    /**
     * Get the [ref_libre] column value.
     * 
     * @return string
     */
    public function getRefLibre()
    {

        return $this->ref_libre;
    }

    /**
     * Get the [id_etape] column value.
     * 
     * @return int
     */
    public function getIdEtape()
    {

        return $this->id_etape;
    }

    /**
     * Get the [intitule_ordre_du_jour] column value.
     * 
     * @return string
     */
    public function getIntituleOrdreDuJour()
    {

        return $this->intitule_ordre_du_jour;
    }

    /**
     * Get the [lots_odj_libre] column value.
     * 
     * @return string
     */
    public function getLotsOdjLibre()
    {

        return $this->lots_odj_libre;
    }

    /**
     * Get the [id_type_procedure] column value.
     * 
     * @return int
     */
    public function getIdTypeProcedure()
    {

        return $this->id_type_procedure;
    }

    /**
     * Get the [type_procedure_libre] column value.
     * 
     * @return string
     */
    public function getTypeProcedureLibre()
    {

        return $this->type_procedure_libre;
    }

    /**
     * Get the [optionally formatted] temporal [date_cloture] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateCloture($format = 'Y-m-d H:i:s')
    {
        if ($this->date_cloture === null) {
            return null;
        }

        if ($this->date_cloture === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_cloture);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_cloture, true), $x);
        }

        if ($format === null) {
            // Because propel.useDateTimeClass is true, we return a DateTime object.
            return $dt;
        }

        if (strpos($format, '%') !== false) {
            return strftime($format, $dt->format('U'));
        }

        return $dt->format($format);
        
    }

    /**
     * Get the [type_env] column value.
     * 
     * @return int
     */
    public function getTypeEnv()
    {

        return $this->type_env;
    }

    /**
     * Get the [sous_pli] column value.
     * 
     * @return int
     */
    public function getSousPli()
    {

        return $this->sous_pli;
    }

    /**
     * Get the [heure] column value.
     * 
     * @return string
     */
    public function getHeure()
    {

        return $this->heure;
    }

    /**
     * Get the [etape_consultation] column value.
     * 
     * @return string
     */
    public function getEtapeConsultation()
    {

        return $this->etape_consultation;
    }

    /**
     * Get the [type_consultation] column value.
     * 
     * @return string
     */
    public function getTypeConsultation()
    {

        return $this->type_consultation;
    }

    /**
     * Get the [minutes] column value.
     * 
     * @return string
     */
    public function getMinutes()
    {

        return $this->minutes;
    }

    /**
     * Get the [service] column value.
     * 
     * @return string
     */
    public function getService()
    {

        return $this->service;
    }

    /**
     * Get the [id_service] column value.
     * 
     * @return int
     */
    public function getIdService()
    {

        return $this->id_service;
    }

    /**
     * Get the [date_debut] column value.
     * 
     * @return string
     */
    public function getDateDebut()
    {

        return $this->date_debut;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonBackupOrdreDuJour The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonBackupOrdreDuJourPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonBackupOrdreDuJour The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonBackupOrdreDuJourPeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [id_commission] column.
     * 
     * @param int $v new value
     * @return CommonBackupOrdreDuJour The current object (for fluent API support)
     */
    public function setIdCommission($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_commission !== $v) {
            $this->id_commission = $v;
            $this->modifiedColumns[] = CommonBackupOrdreDuJourPeer::ID_COMMISSION;
        }


        return $this;
    } // setIdCommission()

    /**
     * Set the value of [ref_consultation] column.
     * 
     * @param string $v new value
     * @return CommonBackupOrdreDuJour The current object (for fluent API support)
     */
    public function setRefConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ref_consultation !== $v) {
            $this->ref_consultation = $v;
            $this->modifiedColumns[] = CommonBackupOrdreDuJourPeer::REF_CONSULTATION;
        }


        return $this;
    } // setRefConsultation()

    /**
     * Set the value of [ref_libre] column.
     * 
     * @param string $v new value
     * @return CommonBackupOrdreDuJour The current object (for fluent API support)
     */
    public function setRefLibre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ref_libre !== $v) {
            $this->ref_libre = $v;
            $this->modifiedColumns[] = CommonBackupOrdreDuJourPeer::REF_LIBRE;
        }


        return $this;
    } // setRefLibre()

    /**
     * Set the value of [id_etape] column.
     * 
     * @param int $v new value
     * @return CommonBackupOrdreDuJour The current object (for fluent API support)
     */
    public function setIdEtape($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_etape !== $v) {
            $this->id_etape = $v;
            $this->modifiedColumns[] = CommonBackupOrdreDuJourPeer::ID_ETAPE;
        }


        return $this;
    } // setIdEtape()

    /**
     * Set the value of [intitule_ordre_du_jour] column.
     * 
     * @param string $v new value
     * @return CommonBackupOrdreDuJour The current object (for fluent API support)
     */
    public function setIntituleOrdreDuJour($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->intitule_ordre_du_jour !== $v) {
            $this->intitule_ordre_du_jour = $v;
            $this->modifiedColumns[] = CommonBackupOrdreDuJourPeer::INTITULE_ORDRE_DU_JOUR;
        }


        return $this;
    } // setIntituleOrdreDuJour()

    /**
     * Set the value of [lots_odj_libre] column.
     * 
     * @param string $v new value
     * @return CommonBackupOrdreDuJour The current object (for fluent API support)
     */
    public function setLotsOdjLibre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lots_odj_libre !== $v) {
            $this->lots_odj_libre = $v;
            $this->modifiedColumns[] = CommonBackupOrdreDuJourPeer::LOTS_ODJ_LIBRE;
        }


        return $this;
    } // setLotsOdjLibre()

    /**
     * Set the value of [id_type_procedure] column.
     * 
     * @param int $v new value
     * @return CommonBackupOrdreDuJour The current object (for fluent API support)
     */
    public function setIdTypeProcedure($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_type_procedure !== $v) {
            $this->id_type_procedure = $v;
            $this->modifiedColumns[] = CommonBackupOrdreDuJourPeer::ID_TYPE_PROCEDURE;
        }


        return $this;
    } // setIdTypeProcedure()

    /**
     * Set the value of [type_procedure_libre] column.
     * 
     * @param string $v new value
     * @return CommonBackupOrdreDuJour The current object (for fluent API support)
     */
    public function setTypeProcedureLibre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_procedure_libre !== $v) {
            $this->type_procedure_libre = $v;
            $this->modifiedColumns[] = CommonBackupOrdreDuJourPeer::TYPE_PROCEDURE_LIBRE;
        }


        return $this;
    } // setTypeProcedureLibre()

    /**
     * Sets the value of [date_cloture] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonBackupOrdreDuJour The current object (for fluent API support)
     */
    public function setDateCloture($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_cloture !== null || $dt !== null) {
            $currentDateAsString = ($this->date_cloture !== null && $tmpDt = new DateTime($this->date_cloture)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_cloture = $newDateAsString;
                $this->modifiedColumns[] = CommonBackupOrdreDuJourPeer::DATE_CLOTURE;
            }
        } // if either are not null


        return $this;
    } // setDateCloture()

    /**
     * Set the value of [type_env] column.
     * 
     * @param int $v new value
     * @return CommonBackupOrdreDuJour The current object (for fluent API support)
     */
    public function setTypeEnv($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type_env !== $v) {
            $this->type_env = $v;
            $this->modifiedColumns[] = CommonBackupOrdreDuJourPeer::TYPE_ENV;
        }


        return $this;
    } // setTypeEnv()

    /**
     * Set the value of [sous_pli] column.
     * 
     * @param int $v new value
     * @return CommonBackupOrdreDuJour The current object (for fluent API support)
     */
    public function setSousPli($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->sous_pli !== $v) {
            $this->sous_pli = $v;
            $this->modifiedColumns[] = CommonBackupOrdreDuJourPeer::SOUS_PLI;
        }


        return $this;
    } // setSousPli()

    /**
     * Set the value of [heure] column.
     * 
     * @param string $v new value
     * @return CommonBackupOrdreDuJour The current object (for fluent API support)
     */
    public function setHeure($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->heure !== $v) {
            $this->heure = $v;
            $this->modifiedColumns[] = CommonBackupOrdreDuJourPeer::HEURE;
        }


        return $this;
    } // setHeure()

    /**
     * Set the value of [etape_consultation] column.
     * 
     * @param string $v new value
     * @return CommonBackupOrdreDuJour The current object (for fluent API support)
     */
    public function setEtapeConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->etape_consultation !== $v) {
            $this->etape_consultation = $v;
            $this->modifiedColumns[] = CommonBackupOrdreDuJourPeer::ETAPE_CONSULTATION;
        }


        return $this;
    } // setEtapeConsultation()

    /**
     * Set the value of [type_consultation] column.
     * 
     * @param string $v new value
     * @return CommonBackupOrdreDuJour The current object (for fluent API support)
     */
    public function setTypeConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_consultation !== $v) {
            $this->type_consultation = $v;
            $this->modifiedColumns[] = CommonBackupOrdreDuJourPeer::TYPE_CONSULTATION;
        }


        return $this;
    } // setTypeConsultation()

    /**
     * Set the value of [minutes] column.
     * 
     * @param string $v new value
     * @return CommonBackupOrdreDuJour The current object (for fluent API support)
     */
    public function setMinutes($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->minutes !== $v) {
            $this->minutes = $v;
            $this->modifiedColumns[] = CommonBackupOrdreDuJourPeer::MINUTES;
        }


        return $this;
    } // setMinutes()

    /**
     * Set the value of [service] column.
     * 
     * @param string $v new value
     * @return CommonBackupOrdreDuJour The current object (for fluent API support)
     */
    public function setService($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->service !== $v) {
            $this->service = $v;
            $this->modifiedColumns[] = CommonBackupOrdreDuJourPeer::SERVICE;
        }


        return $this;
    } // setService()

    /**
     * Set the value of [id_service] column.
     * 
     * @param int $v new value
     * @return CommonBackupOrdreDuJour The current object (for fluent API support)
     */
    public function setIdService($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_service !== $v) {
            $this->id_service = $v;
            $this->modifiedColumns[] = CommonBackupOrdreDuJourPeer::ID_SERVICE;
        }


        return $this;
    } // setIdService()

    /**
     * Set the value of [date_debut] column.
     * 
     * @param string $v new value
     * @return CommonBackupOrdreDuJour The current object (for fluent API support)
     */
    public function setDateDebut($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_debut !== $v) {
            $this->date_debut = $v;
            $this->modifiedColumns[] = CommonBackupOrdreDuJourPeer::DATE_DEBUT;
        }


        return $this;
    } // setDateDebut()

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
            if ($this->id_commission !== 0) {
                return false;
            }

            if ($this->heure !== '00') {
                return false;
            }

            if ($this->etape_consultation !== '') {
                return false;
            }

            if ($this->type_consultation !== '') {
                return false;
            }

            if ($this->minutes !== '') {
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
            $this->organisme = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->id_commission = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->ref_consultation = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->ref_libre = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->id_etape = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->intitule_ordre_du_jour = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->lots_odj_libre = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->id_type_procedure = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->type_procedure_libre = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->date_cloture = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->type_env = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->sous_pli = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->heure = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->etape_consultation = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->type_consultation = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->minutes = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->service = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->id_service = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->date_debut = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 20; // 20 = CommonBackupOrdreDuJourPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonBackupOrdreDuJour object", $e);
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
            $con = Propel::getConnection(CommonBackupOrdreDuJourPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonBackupOrdreDuJourPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonBackupOrdreDuJourPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonBackupOrdreDuJourQuery::create()
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
            $con = Propel::getConnection(CommonBackupOrdreDuJourPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonBackupOrdreDuJourPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonBackupOrdreDuJourPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonBackupOrdreDuJourPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonBackupOrdreDuJourPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonBackupOrdreDuJourPeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonBackupOrdreDuJourPeer::ID_COMMISSION)) {
            $modifiedColumns[':p' . $index++]  = '`id_commission`';
        }
        if ($this->isColumnModified(CommonBackupOrdreDuJourPeer::REF_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`ref_consultation`';
        }
        if ($this->isColumnModified(CommonBackupOrdreDuJourPeer::REF_LIBRE)) {
            $modifiedColumns[':p' . $index++]  = '`ref_libre`';
        }
        if ($this->isColumnModified(CommonBackupOrdreDuJourPeer::ID_ETAPE)) {
            $modifiedColumns[':p' . $index++]  = '`id_etape`';
        }
        if ($this->isColumnModified(CommonBackupOrdreDuJourPeer::INTITULE_ORDRE_DU_JOUR)) {
            $modifiedColumns[':p' . $index++]  = '`intitule_ordre_du_jour`';
        }
        if ($this->isColumnModified(CommonBackupOrdreDuJourPeer::LOTS_ODJ_LIBRE)) {
            $modifiedColumns[':p' . $index++]  = '`lots_odj_libre`';
        }
        if ($this->isColumnModified(CommonBackupOrdreDuJourPeer::ID_TYPE_PROCEDURE)) {
            $modifiedColumns[':p' . $index++]  = '`id_type_procedure`';
        }
        if ($this->isColumnModified(CommonBackupOrdreDuJourPeer::TYPE_PROCEDURE_LIBRE)) {
            $modifiedColumns[':p' . $index++]  = '`type_procedure_libre`';
        }
        if ($this->isColumnModified(CommonBackupOrdreDuJourPeer::DATE_CLOTURE)) {
            $modifiedColumns[':p' . $index++]  = '`date_cloture`';
        }
        if ($this->isColumnModified(CommonBackupOrdreDuJourPeer::TYPE_ENV)) {
            $modifiedColumns[':p' . $index++]  = '`type_env`';
        }
        if ($this->isColumnModified(CommonBackupOrdreDuJourPeer::SOUS_PLI)) {
            $modifiedColumns[':p' . $index++]  = '`sous_pli`';
        }
        if ($this->isColumnModified(CommonBackupOrdreDuJourPeer::HEURE)) {
            $modifiedColumns[':p' . $index++]  = '`heure`';
        }
        if ($this->isColumnModified(CommonBackupOrdreDuJourPeer::ETAPE_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`etape_consultation`';
        }
        if ($this->isColumnModified(CommonBackupOrdreDuJourPeer::TYPE_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`type_consultation`';
        }
        if ($this->isColumnModified(CommonBackupOrdreDuJourPeer::MINUTES)) {
            $modifiedColumns[':p' . $index++]  = '`minutes`';
        }
        if ($this->isColumnModified(CommonBackupOrdreDuJourPeer::SERVICE)) {
            $modifiedColumns[':p' . $index++]  = '`service`';
        }
        if ($this->isColumnModified(CommonBackupOrdreDuJourPeer::ID_SERVICE)) {
            $modifiedColumns[':p' . $index++]  = '`id_service`';
        }
        if ($this->isColumnModified(CommonBackupOrdreDuJourPeer::DATE_DEBUT)) {
            $modifiedColumns[':p' . $index++]  = '`date_debut`';
        }

        $sql = sprintf(
            'INSERT INTO `backup_Ordre_Du_Jour` (%s) VALUES (%s)',
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
                    case '`organisme`':						
                        $stmt->bindValue($identifier, $this->organisme, PDO::PARAM_STR);
                        break;
                    case '`id_commission`':						
                        $stmt->bindValue($identifier, $this->id_commission, PDO::PARAM_INT);
                        break;
                    case '`ref_consultation`':						
                        $stmt->bindValue($identifier, $this->ref_consultation, PDO::PARAM_STR);
                        break;
                    case '`ref_libre`':						
                        $stmt->bindValue($identifier, $this->ref_libre, PDO::PARAM_STR);
                        break;
                    case '`id_etape`':						
                        $stmt->bindValue($identifier, $this->id_etape, PDO::PARAM_INT);
                        break;
                    case '`intitule_ordre_du_jour`':						
                        $stmt->bindValue($identifier, $this->intitule_ordre_du_jour, PDO::PARAM_STR);
                        break;
                    case '`lots_odj_libre`':						
                        $stmt->bindValue($identifier, $this->lots_odj_libre, PDO::PARAM_STR);
                        break;
                    case '`id_type_procedure`':						
                        $stmt->bindValue($identifier, $this->id_type_procedure, PDO::PARAM_INT);
                        break;
                    case '`type_procedure_libre`':						
                        $stmt->bindValue($identifier, $this->type_procedure_libre, PDO::PARAM_STR);
                        break;
                    case '`date_cloture`':						
                        $stmt->bindValue($identifier, $this->date_cloture, PDO::PARAM_STR);
                        break;
                    case '`type_env`':						
                        $stmt->bindValue($identifier, $this->type_env, PDO::PARAM_INT);
                        break;
                    case '`sous_pli`':						
                        $stmt->bindValue($identifier, $this->sous_pli, PDO::PARAM_INT);
                        break;
                    case '`heure`':						
                        $stmt->bindValue($identifier, $this->heure, PDO::PARAM_STR);
                        break;
                    case '`etape_consultation`':						
                        $stmt->bindValue($identifier, $this->etape_consultation, PDO::PARAM_STR);
                        break;
                    case '`type_consultation`':						
                        $stmt->bindValue($identifier, $this->type_consultation, PDO::PARAM_STR);
                        break;
                    case '`minutes`':						
                        $stmt->bindValue($identifier, $this->minutes, PDO::PARAM_STR);
                        break;
                    case '`service`':						
                        $stmt->bindValue($identifier, $this->service, PDO::PARAM_STR);
                        break;
                    case '`id_service`':						
                        $stmt->bindValue($identifier, $this->id_service, PDO::PARAM_INT);
                        break;
                    case '`date_debut`':						
                        $stmt->bindValue($identifier, $this->date_debut, PDO::PARAM_STR);
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


            if (($retval = CommonBackupOrdreDuJourPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonBackupOrdreDuJourPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getOrganisme();
                break;
            case 2:
                return $this->getIdCommission();
                break;
            case 3:
                return $this->getRefConsultation();
                break;
            case 4:
                return $this->getRefLibre();
                break;
            case 5:
                return $this->getIdEtape();
                break;
            case 6:
                return $this->getIntituleOrdreDuJour();
                break;
            case 7:
                return $this->getLotsOdjLibre();
                break;
            case 8:
                return $this->getIdTypeProcedure();
                break;
            case 9:
                return $this->getTypeProcedureLibre();
                break;
            case 10:
                return $this->getDateCloture();
                break;
            case 11:
                return $this->getTypeEnv();
                break;
            case 12:
                return $this->getSousPli();
                break;
            case 13:
                return $this->getHeure();
                break;
            case 14:
                return $this->getEtapeConsultation();
                break;
            case 15:
                return $this->getTypeConsultation();
                break;
            case 16:
                return $this->getMinutes();
                break;
            case 17:
                return $this->getService();
                break;
            case 18:
                return $this->getIdService();
                break;
            case 19:
                return $this->getDateDebut();
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
        if (isset($alreadyDumpedObjects['CommonBackupOrdreDuJour'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonBackupOrdreDuJour'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonBackupOrdreDuJourPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getIdCommission(),
            $keys[3] => $this->getRefConsultation(),
            $keys[4] => $this->getRefLibre(),
            $keys[5] => $this->getIdEtape(),
            $keys[6] => $this->getIntituleOrdreDuJour(),
            $keys[7] => $this->getLotsOdjLibre(),
            $keys[8] => $this->getIdTypeProcedure(),
            $keys[9] => $this->getTypeProcedureLibre(),
            $keys[10] => $this->getDateCloture(),
            $keys[11] => $this->getTypeEnv(),
            $keys[12] => $this->getSousPli(),
            $keys[13] => $this->getHeure(),
            $keys[14] => $this->getEtapeConsultation(),
            $keys[15] => $this->getTypeConsultation(),
            $keys[16] => $this->getMinutes(),
            $keys[17] => $this->getService(),
            $keys[18] => $this->getIdService(),
            $keys[19] => $this->getDateDebut(),
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
        $pos = CommonBackupOrdreDuJourPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setOrganisme($value);
                break;
            case 2:
                $this->setIdCommission($value);
                break;
            case 3:
                $this->setRefConsultation($value);
                break;
            case 4:
                $this->setRefLibre($value);
                break;
            case 5:
                $this->setIdEtape($value);
                break;
            case 6:
                $this->setIntituleOrdreDuJour($value);
                break;
            case 7:
                $this->setLotsOdjLibre($value);
                break;
            case 8:
                $this->setIdTypeProcedure($value);
                break;
            case 9:
                $this->setTypeProcedureLibre($value);
                break;
            case 10:
                $this->setDateCloture($value);
                break;
            case 11:
                $this->setTypeEnv($value);
                break;
            case 12:
                $this->setSousPli($value);
                break;
            case 13:
                $this->setHeure($value);
                break;
            case 14:
                $this->setEtapeConsultation($value);
                break;
            case 15:
                $this->setTypeConsultation($value);
                break;
            case 16:
                $this->setMinutes($value);
                break;
            case 17:
                $this->setService($value);
                break;
            case 18:
                $this->setIdService($value);
                break;
            case 19:
                $this->setDateDebut($value);
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
        $keys = CommonBackupOrdreDuJourPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdCommission($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setRefConsultation($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setRefLibre($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIdEtape($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIntituleOrdreDuJour($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setLotsOdjLibre($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setIdTypeProcedure($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setTypeProcedureLibre($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setDateCloture($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setTypeEnv($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setSousPli($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setHeure($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setEtapeConsultation($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setTypeConsultation($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setMinutes($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setService($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setIdService($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setDateDebut($arr[$keys[19]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonBackupOrdreDuJourPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonBackupOrdreDuJourPeer::ID)) $criteria->add(CommonBackupOrdreDuJourPeer::ID, $this->id);
        if ($this->isColumnModified(CommonBackupOrdreDuJourPeer::ORGANISME)) $criteria->add(CommonBackupOrdreDuJourPeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonBackupOrdreDuJourPeer::ID_COMMISSION)) $criteria->add(CommonBackupOrdreDuJourPeer::ID_COMMISSION, $this->id_commission);
        if ($this->isColumnModified(CommonBackupOrdreDuJourPeer::REF_CONSULTATION)) $criteria->add(CommonBackupOrdreDuJourPeer::REF_CONSULTATION, $this->ref_consultation);
        if ($this->isColumnModified(CommonBackupOrdreDuJourPeer::REF_LIBRE)) $criteria->add(CommonBackupOrdreDuJourPeer::REF_LIBRE, $this->ref_libre);
        if ($this->isColumnModified(CommonBackupOrdreDuJourPeer::ID_ETAPE)) $criteria->add(CommonBackupOrdreDuJourPeer::ID_ETAPE, $this->id_etape);
        if ($this->isColumnModified(CommonBackupOrdreDuJourPeer::INTITULE_ORDRE_DU_JOUR)) $criteria->add(CommonBackupOrdreDuJourPeer::INTITULE_ORDRE_DU_JOUR, $this->intitule_ordre_du_jour);
        if ($this->isColumnModified(CommonBackupOrdreDuJourPeer::LOTS_ODJ_LIBRE)) $criteria->add(CommonBackupOrdreDuJourPeer::LOTS_ODJ_LIBRE, $this->lots_odj_libre);
        if ($this->isColumnModified(CommonBackupOrdreDuJourPeer::ID_TYPE_PROCEDURE)) $criteria->add(CommonBackupOrdreDuJourPeer::ID_TYPE_PROCEDURE, $this->id_type_procedure);
        if ($this->isColumnModified(CommonBackupOrdreDuJourPeer::TYPE_PROCEDURE_LIBRE)) $criteria->add(CommonBackupOrdreDuJourPeer::TYPE_PROCEDURE_LIBRE, $this->type_procedure_libre);
        if ($this->isColumnModified(CommonBackupOrdreDuJourPeer::DATE_CLOTURE)) $criteria->add(CommonBackupOrdreDuJourPeer::DATE_CLOTURE, $this->date_cloture);
        if ($this->isColumnModified(CommonBackupOrdreDuJourPeer::TYPE_ENV)) $criteria->add(CommonBackupOrdreDuJourPeer::TYPE_ENV, $this->type_env);
        if ($this->isColumnModified(CommonBackupOrdreDuJourPeer::SOUS_PLI)) $criteria->add(CommonBackupOrdreDuJourPeer::SOUS_PLI, $this->sous_pli);
        if ($this->isColumnModified(CommonBackupOrdreDuJourPeer::HEURE)) $criteria->add(CommonBackupOrdreDuJourPeer::HEURE, $this->heure);
        if ($this->isColumnModified(CommonBackupOrdreDuJourPeer::ETAPE_CONSULTATION)) $criteria->add(CommonBackupOrdreDuJourPeer::ETAPE_CONSULTATION, $this->etape_consultation);
        if ($this->isColumnModified(CommonBackupOrdreDuJourPeer::TYPE_CONSULTATION)) $criteria->add(CommonBackupOrdreDuJourPeer::TYPE_CONSULTATION, $this->type_consultation);
        if ($this->isColumnModified(CommonBackupOrdreDuJourPeer::MINUTES)) $criteria->add(CommonBackupOrdreDuJourPeer::MINUTES, $this->minutes);
        if ($this->isColumnModified(CommonBackupOrdreDuJourPeer::SERVICE)) $criteria->add(CommonBackupOrdreDuJourPeer::SERVICE, $this->service);
        if ($this->isColumnModified(CommonBackupOrdreDuJourPeer::ID_SERVICE)) $criteria->add(CommonBackupOrdreDuJourPeer::ID_SERVICE, $this->id_service);
        if ($this->isColumnModified(CommonBackupOrdreDuJourPeer::DATE_DEBUT)) $criteria->add(CommonBackupOrdreDuJourPeer::DATE_DEBUT, $this->date_debut);

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
        $criteria = new Criteria(CommonBackupOrdreDuJourPeer::DATABASE_NAME);
        $criteria->add(CommonBackupOrdreDuJourPeer::ID, $this->id);
        $criteria->add(CommonBackupOrdreDuJourPeer::ORGANISME, $this->organisme);

        return $criteria;
    }

    /**
     * Returns the composite primary key for this object.
     * The array elements will be in same order as specified in XML.
     * @return array
     */
    public function getPrimaryKey()
    {
        $pks = array();
        $pks[0] = $this->getId();
        $pks[1] = $this->getOrganisme();

        return $pks;
    }

    /**
     * Set the [composite] primary key.
     *
     * @param array $keys The elements of the composite key (order must match the order in XML file).
     * @return void
     */
    public function setPrimaryKey($keys)
    {
        $this->setId($keys[0]);
        $this->setOrganisme($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getId()) && (null === $this->getOrganisme());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonBackupOrdreDuJour (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setIdCommission($this->getIdCommission());
        $copyObj->setRefConsultation($this->getRefConsultation());
        $copyObj->setRefLibre($this->getRefLibre());
        $copyObj->setIdEtape($this->getIdEtape());
        $copyObj->setIntituleOrdreDuJour($this->getIntituleOrdreDuJour());
        $copyObj->setLotsOdjLibre($this->getLotsOdjLibre());
        $copyObj->setIdTypeProcedure($this->getIdTypeProcedure());
        $copyObj->setTypeProcedureLibre($this->getTypeProcedureLibre());
        $copyObj->setDateCloture($this->getDateCloture());
        $copyObj->setTypeEnv($this->getTypeEnv());
        $copyObj->setSousPli($this->getSousPli());
        $copyObj->setHeure($this->getHeure());
        $copyObj->setEtapeConsultation($this->getEtapeConsultation());
        $copyObj->setTypeConsultation($this->getTypeConsultation());
        $copyObj->setMinutes($this->getMinutes());
        $copyObj->setService($this->getService());
        $copyObj->setIdService($this->getIdService());
        $copyObj->setDateDebut($this->getDateDebut());
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
     * @return CommonBackupOrdreDuJour Clone of current object.
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
     * @return CommonBackupOrdreDuJourPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonBackupOrdreDuJourPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->organisme = null;
        $this->id_commission = null;
        $this->ref_consultation = null;
        $this->ref_libre = null;
        $this->id_etape = null;
        $this->intitule_ordre_du_jour = null;
        $this->lots_odj_libre = null;
        $this->id_type_procedure = null;
        $this->type_procedure_libre = null;
        $this->date_cloture = null;
        $this->type_env = null;
        $this->sous_pli = null;
        $this->heure = null;
        $this->etape_consultation = null;
        $this->type_consultation = null;
        $this->minutes = null;
        $this->service = null;
        $this->id_service = null;
        $this->date_debut = null;
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
        return (string) $this->exportTo(CommonBackupOrdreDuJourPeer::DEFAULT_STRING_FORMAT);
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
