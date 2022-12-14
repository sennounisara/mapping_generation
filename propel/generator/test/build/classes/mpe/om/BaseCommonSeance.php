<?php


/**
 * Base class that represents a row from the 'seance' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonSeance extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonSeancePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonSeancePeer
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
     * The value for the consultation_ref field.
     * @var        int
     */
    protected $consultation_ref;

    /**
     * The value for the organisme field.
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the report field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $report;

    /**
     * The value for the date field.
     * @var        string
     */
    protected $date;

    /**
     * The value for the type field.
     * @var        string
     */
    protected $type;

    /**
     * The value for the ouverture_env_candidature field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $ouverture_env_candidature;

    /**
     * The value for the ouverture_env_offre_technique field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $ouverture_env_offre_technique;

    /**
     * The value for the ouverture_env_offre_financiere field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $ouverture_env_offre_financiere;

    /**
     * The value for the jugement_env1_administratif field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $jugement_env1_administratif;

    /**
     * The value for the jugement_env1_technique field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $jugement_env1_technique;

    /**
     * The value for the jugement_env1_echantillon field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $jugement_env1_echantillon;

    /**
     * The value for the jugement_offre_technique field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $jugement_offre_technique;

    /**
     * The value for the jugement_offre_financiere field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $jugement_offre_financiere;

    /**
     * The value for the justificatif field.
     * @var        string
     */
    protected $justificatif;

    /**
     * The value for the statut field.
     * Note: this column has a database default value of: 1
     * @var        int
     */
    protected $statut;

    /**
     * The value for the id_blob_pv field.
     * @var        int
     */
    protected $id_blob_pv;

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
        $this->report = '0';
        $this->ouverture_env_candidature = '0';
        $this->ouverture_env_offre_technique = '0';
        $this->ouverture_env_offre_financiere = '0';
        $this->jugement_env1_administratif = '0';
        $this->jugement_env1_technique = '0';
        $this->jugement_env1_echantillon = '0';
        $this->jugement_offre_technique = '0';
        $this->jugement_offre_financiere = '0';
        $this->statut = 1;
    }

    /**
     * Initializes internal state of BaseCommonSeance object.
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
     * Get the [consultation_ref] column value.
     * 
     * @return int
     */
    public function getConsultationRef()
    {

        return $this->consultation_ref;
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
     * Get the [report] column value.
     * 
     * @return string
     */
    public function getReport()
    {

        return $this->report;
    }

    /**
     * Get the [optionally formatted] temporal [date] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDate($format = 'Y-m-d H:i:s')
    {
        if ($this->date === null) {
            return null;
        }

        if ($this->date === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date, true), $x);
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
     * Get the [type] column value.
     * 
     * @return string
     */
    public function getType()
    {

        return $this->type;
    }

    /**
     * Get the [ouverture_env_candidature] column value.
     * 
     * @return string
     */
    public function getOuvertureEnvCandidature()
    {

        return $this->ouverture_env_candidature;
    }

    /**
     * Get the [ouverture_env_offre_technique] column value.
     * 
     * @return string
     */
    public function getOuvertureEnvOffreTechnique()
    {

        return $this->ouverture_env_offre_technique;
    }

    /**
     * Get the [ouverture_env_offre_financiere] column value.
     * 
     * @return string
     */
    public function getOuvertureEnvOffreFinanciere()
    {

        return $this->ouverture_env_offre_financiere;
    }

    /**
     * Get the [jugement_env1_administratif] column value.
     * 
     * @return string
     */
    public function getJugementEnv1Administratif()
    {

        return $this->jugement_env1_administratif;
    }

    /**
     * Get the [jugement_env1_technique] column value.
     * 
     * @return string
     */
    public function getJugementEnv1Technique()
    {

        return $this->jugement_env1_technique;
    }

    /**
     * Get the [jugement_env1_echantillon] column value.
     * 
     * @return string
     */
    public function getJugementEnv1Echantillon()
    {

        return $this->jugement_env1_echantillon;
    }

    /**
     * Get the [jugement_offre_technique] column value.
     * 
     * @return string
     */
    public function getJugementOffreTechnique()
    {

        return $this->jugement_offre_technique;
    }

    /**
     * Get the [jugement_offre_financiere] column value.
     * 
     * @return string
     */
    public function getJugementOffreFinanciere()
    {

        return $this->jugement_offre_financiere;
    }

    /**
     * Get the [justificatif] column value.
     * 
     * @return string
     */
    public function getJustificatif()
    {

        return $this->justificatif;
    }

    /**
     * Get the [statut] column value.
     * 
     * @return int
     */
    public function getStatut()
    {

        return $this->statut;
    }

    /**
     * Get the [id_blob_pv] column value.
     * 
     * @return int
     */
    public function getIdBlobPv()
    {

        return $this->id_blob_pv;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonSeance The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonSeancePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [consultation_ref] column.
     * 
     * @param int $v new value
     * @return CommonSeance The current object (for fluent API support)
     */
    public function setConsultationRef($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->consultation_ref !== $v) {
            $this->consultation_ref = $v;
            $this->modifiedColumns[] = CommonSeancePeer::CONSULTATION_REF;
        }


        return $this;
    } // setConsultationRef()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonSeance The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonSeancePeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [report] column.
     * 
     * @param string $v new value
     * @return CommonSeance The current object (for fluent API support)
     */
    public function setReport($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->report !== $v) {
            $this->report = $v;
            $this->modifiedColumns[] = CommonSeancePeer::REPORT;
        }


        return $this;
    } // setReport()

    /**
     * Sets the value of [date] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonSeance The current object (for fluent API support)
     */
    public function setDate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date !== null || $dt !== null) {
            $currentDateAsString = ($this->date !== null && $tmpDt = new DateTime($this->date)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date = $newDateAsString;
                $this->modifiedColumns[] = CommonSeancePeer::DATE;
            }
        } // if either are not null


        return $this;
    } // setDate()

    /**
     * Set the value of [type] column.
     * 
     * @param string $v new value
     * @return CommonSeance The current object (for fluent API support)
     */
    public function setType($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type !== $v) {
            $this->type = $v;
            $this->modifiedColumns[] = CommonSeancePeer::TYPE;
        }


        return $this;
    } // setType()

    /**
     * Set the value of [ouverture_env_candidature] column.
     * 
     * @param string $v new value
     * @return CommonSeance The current object (for fluent API support)
     */
    public function setOuvertureEnvCandidature($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ouverture_env_candidature !== $v) {
            $this->ouverture_env_candidature = $v;
            $this->modifiedColumns[] = CommonSeancePeer::OUVERTURE_ENV_CANDIDATURE;
        }


        return $this;
    } // setOuvertureEnvCandidature()

    /**
     * Set the value of [ouverture_env_offre_technique] column.
     * 
     * @param string $v new value
     * @return CommonSeance The current object (for fluent API support)
     */
    public function setOuvertureEnvOffreTechnique($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ouverture_env_offre_technique !== $v) {
            $this->ouverture_env_offre_technique = $v;
            $this->modifiedColumns[] = CommonSeancePeer::OUVERTURE_ENV_OFFRE_TECHNIQUE;
        }


        return $this;
    } // setOuvertureEnvOffreTechnique()

    /**
     * Set the value of [ouverture_env_offre_financiere] column.
     * 
     * @param string $v new value
     * @return CommonSeance The current object (for fluent API support)
     */
    public function setOuvertureEnvOffreFinanciere($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ouverture_env_offre_financiere !== $v) {
            $this->ouverture_env_offre_financiere = $v;
            $this->modifiedColumns[] = CommonSeancePeer::OUVERTURE_ENV_OFFRE_FINANCIERE;
        }


        return $this;
    } // setOuvertureEnvOffreFinanciere()

    /**
     * Set the value of [jugement_env1_administratif] column.
     * 
     * @param string $v new value
     * @return CommonSeance The current object (for fluent API support)
     */
    public function setJugementEnv1Administratif($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->jugement_env1_administratif !== $v) {
            $this->jugement_env1_administratif = $v;
            $this->modifiedColumns[] = CommonSeancePeer::JUGEMENT_ENV1_ADMINISTRATIF;
        }


        return $this;
    } // setJugementEnv1Administratif()

    /**
     * Set the value of [jugement_env1_technique] column.
     * 
     * @param string $v new value
     * @return CommonSeance The current object (for fluent API support)
     */
    public function setJugementEnv1Technique($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->jugement_env1_technique !== $v) {
            $this->jugement_env1_technique = $v;
            $this->modifiedColumns[] = CommonSeancePeer::JUGEMENT_ENV1_TECHNIQUE;
        }


        return $this;
    } // setJugementEnv1Technique()

    /**
     * Set the value of [jugement_env1_echantillon] column.
     * 
     * @param string $v new value
     * @return CommonSeance The current object (for fluent API support)
     */
    public function setJugementEnv1Echantillon($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->jugement_env1_echantillon !== $v) {
            $this->jugement_env1_echantillon = $v;
            $this->modifiedColumns[] = CommonSeancePeer::JUGEMENT_ENV1_ECHANTILLON;
        }


        return $this;
    } // setJugementEnv1Echantillon()

    /**
     * Set the value of [jugement_offre_technique] column.
     * 
     * @param string $v new value
     * @return CommonSeance The current object (for fluent API support)
     */
    public function setJugementOffreTechnique($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->jugement_offre_technique !== $v) {
            $this->jugement_offre_technique = $v;
            $this->modifiedColumns[] = CommonSeancePeer::JUGEMENT_OFFRE_TECHNIQUE;
        }


        return $this;
    } // setJugementOffreTechnique()

    /**
     * Set the value of [jugement_offre_financiere] column.
     * 
     * @param string $v new value
     * @return CommonSeance The current object (for fluent API support)
     */
    public function setJugementOffreFinanciere($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->jugement_offre_financiere !== $v) {
            $this->jugement_offre_financiere = $v;
            $this->modifiedColumns[] = CommonSeancePeer::JUGEMENT_OFFRE_FINANCIERE;
        }


        return $this;
    } // setJugementOffreFinanciere()

    /**
     * Set the value of [justificatif] column.
     * 
     * @param string $v new value
     * @return CommonSeance The current object (for fluent API support)
     */
    public function setJustificatif($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->justificatif !== $v) {
            $this->justificatif = $v;
            $this->modifiedColumns[] = CommonSeancePeer::JUSTIFICATIF;
        }


        return $this;
    } // setJustificatif()

    /**
     * Set the value of [statut] column.
     * 
     * @param int $v new value
     * @return CommonSeance The current object (for fluent API support)
     */
    public function setStatut($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->statut !== $v) {
            $this->statut = $v;
            $this->modifiedColumns[] = CommonSeancePeer::STATUT;
        }


        return $this;
    } // setStatut()

    /**
     * Set the value of [id_blob_pv] column.
     * 
     * @param int $v new value
     * @return CommonSeance The current object (for fluent API support)
     */
    public function setIdBlobPv($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_blob_pv !== $v) {
            $this->id_blob_pv = $v;
            $this->modifiedColumns[] = CommonSeancePeer::ID_BLOB_PV;
        }


        return $this;
    } // setIdBlobPv()

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
            if ($this->report !== '0') {
                return false;
            }

            if ($this->ouverture_env_candidature !== '0') {
                return false;
            }

            if ($this->ouverture_env_offre_technique !== '0') {
                return false;
            }

            if ($this->ouverture_env_offre_financiere !== '0') {
                return false;
            }

            if ($this->jugement_env1_administratif !== '0') {
                return false;
            }

            if ($this->jugement_env1_technique !== '0') {
                return false;
            }

            if ($this->jugement_env1_echantillon !== '0') {
                return false;
            }

            if ($this->jugement_offre_technique !== '0') {
                return false;
            }

            if ($this->jugement_offre_financiere !== '0') {
                return false;
            }

            if ($this->statut !== 1) {
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
            $this->consultation_ref = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->organisme = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->report = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->date = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->type = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->ouverture_env_candidature = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->ouverture_env_offre_technique = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->ouverture_env_offre_financiere = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->jugement_env1_administratif = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->jugement_env1_technique = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->jugement_env1_echantillon = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->jugement_offre_technique = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->jugement_offre_financiere = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->justificatif = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->statut = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->id_blob_pv = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 17; // 17 = CommonSeancePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonSeance object", $e);
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
            $con = Propel::getConnection(CommonSeancePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonSeancePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonSeancePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonSeanceQuery::create()
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
            $con = Propel::getConnection(CommonSeancePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonSeancePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonSeancePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonSeancePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonSeancePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonSeancePeer::CONSULTATION_REF)) {
            $modifiedColumns[':p' . $index++]  = '`consultation_ref`';
        }
        if ($this->isColumnModified(CommonSeancePeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonSeancePeer::REPORT)) {
            $modifiedColumns[':p' . $index++]  = '`report`';
        }
        if ($this->isColumnModified(CommonSeancePeer::DATE)) {
            $modifiedColumns[':p' . $index++]  = '`date`';
        }
        if ($this->isColumnModified(CommonSeancePeer::TYPE)) {
            $modifiedColumns[':p' . $index++]  = '`type`';
        }
        if ($this->isColumnModified(CommonSeancePeer::OUVERTURE_ENV_CANDIDATURE)) {
            $modifiedColumns[':p' . $index++]  = '`ouverture_env_candidature`';
        }
        if ($this->isColumnModified(CommonSeancePeer::OUVERTURE_ENV_OFFRE_TECHNIQUE)) {
            $modifiedColumns[':p' . $index++]  = '`ouverture_env_offre_technique`';
        }
        if ($this->isColumnModified(CommonSeancePeer::OUVERTURE_ENV_OFFRE_FINANCIERE)) {
            $modifiedColumns[':p' . $index++]  = '`ouverture_env_offre_financiere`';
        }
        if ($this->isColumnModified(CommonSeancePeer::JUGEMENT_ENV1_ADMINISTRATIF)) {
            $modifiedColumns[':p' . $index++]  = '`jugement_env1_administratif`';
        }
        if ($this->isColumnModified(CommonSeancePeer::JUGEMENT_ENV1_TECHNIQUE)) {
            $modifiedColumns[':p' . $index++]  = '`jugement_env1_technique`';
        }
        if ($this->isColumnModified(CommonSeancePeer::JUGEMENT_ENV1_ECHANTILLON)) {
            $modifiedColumns[':p' . $index++]  = '`jugement_env1_echantillon`';
        }
        if ($this->isColumnModified(CommonSeancePeer::JUGEMENT_OFFRE_TECHNIQUE)) {
            $modifiedColumns[':p' . $index++]  = '`jugement_offre_technique`';
        }
        if ($this->isColumnModified(CommonSeancePeer::JUGEMENT_OFFRE_FINANCIERE)) {
            $modifiedColumns[':p' . $index++]  = '`jugement_offre_financiere`';
        }
        if ($this->isColumnModified(CommonSeancePeer::JUSTIFICATIF)) {
            $modifiedColumns[':p' . $index++]  = '`justificatif`';
        }
        if ($this->isColumnModified(CommonSeancePeer::STATUT)) {
            $modifiedColumns[':p' . $index++]  = '`statut`';
        }
        if ($this->isColumnModified(CommonSeancePeer::ID_BLOB_PV)) {
            $modifiedColumns[':p' . $index++]  = '`id_blob_pv`';
        }

        $sql = sprintf(
            'INSERT INTO `seance` (%s) VALUES (%s)',
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
                    case '`consultation_ref`':						
                        $stmt->bindValue($identifier, $this->consultation_ref, PDO::PARAM_INT);
                        break;
                    case '`organisme`':						
                        $stmt->bindValue($identifier, $this->organisme, PDO::PARAM_STR);
                        break;
                    case '`report`':						
                        $stmt->bindValue($identifier, $this->report, PDO::PARAM_STR);
                        break;
                    case '`date`':						
                        $stmt->bindValue($identifier, $this->date, PDO::PARAM_STR);
                        break;
                    case '`type`':						
                        $stmt->bindValue($identifier, $this->type, PDO::PARAM_STR);
                        break;
                    case '`ouverture_env_candidature`':						
                        $stmt->bindValue($identifier, $this->ouverture_env_candidature, PDO::PARAM_STR);
                        break;
                    case '`ouverture_env_offre_technique`':						
                        $stmt->bindValue($identifier, $this->ouverture_env_offre_technique, PDO::PARAM_STR);
                        break;
                    case '`ouverture_env_offre_financiere`':						
                        $stmt->bindValue($identifier, $this->ouverture_env_offre_financiere, PDO::PARAM_STR);
                        break;
                    case '`jugement_env1_administratif`':						
                        $stmt->bindValue($identifier, $this->jugement_env1_administratif, PDO::PARAM_STR);
                        break;
                    case '`jugement_env1_technique`':						
                        $stmt->bindValue($identifier, $this->jugement_env1_technique, PDO::PARAM_STR);
                        break;
                    case '`jugement_env1_echantillon`':						
                        $stmt->bindValue($identifier, $this->jugement_env1_echantillon, PDO::PARAM_STR);
                        break;
                    case '`jugement_offre_technique`':						
                        $stmt->bindValue($identifier, $this->jugement_offre_technique, PDO::PARAM_STR);
                        break;
                    case '`jugement_offre_financiere`':						
                        $stmt->bindValue($identifier, $this->jugement_offre_financiere, PDO::PARAM_STR);
                        break;
                    case '`justificatif`':						
                        $stmt->bindValue($identifier, $this->justificatif, PDO::PARAM_STR);
                        break;
                    case '`statut`':						
                        $stmt->bindValue($identifier, $this->statut, PDO::PARAM_INT);
                        break;
                    case '`id_blob_pv`':						
                        $stmt->bindValue($identifier, $this->id_blob_pv, PDO::PARAM_INT);
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


            if (($retval = CommonSeancePeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonSeancePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getConsultationRef();
                break;
            case 2:
                return $this->getOrganisme();
                break;
            case 3:
                return $this->getReport();
                break;
            case 4:
                return $this->getDate();
                break;
            case 5:
                return $this->getType();
                break;
            case 6:
                return $this->getOuvertureEnvCandidature();
                break;
            case 7:
                return $this->getOuvertureEnvOffreTechnique();
                break;
            case 8:
                return $this->getOuvertureEnvOffreFinanciere();
                break;
            case 9:
                return $this->getJugementEnv1Administratif();
                break;
            case 10:
                return $this->getJugementEnv1Technique();
                break;
            case 11:
                return $this->getJugementEnv1Echantillon();
                break;
            case 12:
                return $this->getJugementOffreTechnique();
                break;
            case 13:
                return $this->getJugementOffreFinanciere();
                break;
            case 14:
                return $this->getJustificatif();
                break;
            case 15:
                return $this->getStatut();
                break;
            case 16:
                return $this->getIdBlobPv();
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
        if (isset($alreadyDumpedObjects['CommonSeance'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonSeance'][$this->getPrimaryKey()] = true;
        $keys = CommonSeancePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getConsultationRef(),
            $keys[2] => $this->getOrganisme(),
            $keys[3] => $this->getReport(),
            $keys[4] => $this->getDate(),
            $keys[5] => $this->getType(),
            $keys[6] => $this->getOuvertureEnvCandidature(),
            $keys[7] => $this->getOuvertureEnvOffreTechnique(),
            $keys[8] => $this->getOuvertureEnvOffreFinanciere(),
            $keys[9] => $this->getJugementEnv1Administratif(),
            $keys[10] => $this->getJugementEnv1Technique(),
            $keys[11] => $this->getJugementEnv1Echantillon(),
            $keys[12] => $this->getJugementOffreTechnique(),
            $keys[13] => $this->getJugementOffreFinanciere(),
            $keys[14] => $this->getJustificatif(),
            $keys[15] => $this->getStatut(),
            $keys[16] => $this->getIdBlobPv(),
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
        $pos = CommonSeancePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setConsultationRef($value);
                break;
            case 2:
                $this->setOrganisme($value);
                break;
            case 3:
                $this->setReport($value);
                break;
            case 4:
                $this->setDate($value);
                break;
            case 5:
                $this->setType($value);
                break;
            case 6:
                $this->setOuvertureEnvCandidature($value);
                break;
            case 7:
                $this->setOuvertureEnvOffreTechnique($value);
                break;
            case 8:
                $this->setOuvertureEnvOffreFinanciere($value);
                break;
            case 9:
                $this->setJugementEnv1Administratif($value);
                break;
            case 10:
                $this->setJugementEnv1Technique($value);
                break;
            case 11:
                $this->setJugementEnv1Echantillon($value);
                break;
            case 12:
                $this->setJugementOffreTechnique($value);
                break;
            case 13:
                $this->setJugementOffreFinanciere($value);
                break;
            case 14:
                $this->setJustificatif($value);
                break;
            case 15:
                $this->setStatut($value);
                break;
            case 16:
                $this->setIdBlobPv($value);
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
        $keys = CommonSeancePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setConsultationRef($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setOrganisme($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setReport($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setDate($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setType($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setOuvertureEnvCandidature($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setOuvertureEnvOffreTechnique($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setOuvertureEnvOffreFinanciere($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setJugementEnv1Administratif($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setJugementEnv1Technique($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setJugementEnv1Echantillon($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setJugementOffreTechnique($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setJugementOffreFinanciere($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setJustificatif($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setStatut($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setIdBlobPv($arr[$keys[16]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonSeancePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonSeancePeer::ID)) $criteria->add(CommonSeancePeer::ID, $this->id);
        if ($this->isColumnModified(CommonSeancePeer::CONSULTATION_REF)) $criteria->add(CommonSeancePeer::CONSULTATION_REF, $this->consultation_ref);
        if ($this->isColumnModified(CommonSeancePeer::ORGANISME)) $criteria->add(CommonSeancePeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonSeancePeer::REPORT)) $criteria->add(CommonSeancePeer::REPORT, $this->report);
        if ($this->isColumnModified(CommonSeancePeer::DATE)) $criteria->add(CommonSeancePeer::DATE, $this->date);
        if ($this->isColumnModified(CommonSeancePeer::TYPE)) $criteria->add(CommonSeancePeer::TYPE, $this->type);
        if ($this->isColumnModified(CommonSeancePeer::OUVERTURE_ENV_CANDIDATURE)) $criteria->add(CommonSeancePeer::OUVERTURE_ENV_CANDIDATURE, $this->ouverture_env_candidature);
        if ($this->isColumnModified(CommonSeancePeer::OUVERTURE_ENV_OFFRE_TECHNIQUE)) $criteria->add(CommonSeancePeer::OUVERTURE_ENV_OFFRE_TECHNIQUE, $this->ouverture_env_offre_technique);
        if ($this->isColumnModified(CommonSeancePeer::OUVERTURE_ENV_OFFRE_FINANCIERE)) $criteria->add(CommonSeancePeer::OUVERTURE_ENV_OFFRE_FINANCIERE, $this->ouverture_env_offre_financiere);
        if ($this->isColumnModified(CommonSeancePeer::JUGEMENT_ENV1_ADMINISTRATIF)) $criteria->add(CommonSeancePeer::JUGEMENT_ENV1_ADMINISTRATIF, $this->jugement_env1_administratif);
        if ($this->isColumnModified(CommonSeancePeer::JUGEMENT_ENV1_TECHNIQUE)) $criteria->add(CommonSeancePeer::JUGEMENT_ENV1_TECHNIQUE, $this->jugement_env1_technique);
        if ($this->isColumnModified(CommonSeancePeer::JUGEMENT_ENV1_ECHANTILLON)) $criteria->add(CommonSeancePeer::JUGEMENT_ENV1_ECHANTILLON, $this->jugement_env1_echantillon);
        if ($this->isColumnModified(CommonSeancePeer::JUGEMENT_OFFRE_TECHNIQUE)) $criteria->add(CommonSeancePeer::JUGEMENT_OFFRE_TECHNIQUE, $this->jugement_offre_technique);
        if ($this->isColumnModified(CommonSeancePeer::JUGEMENT_OFFRE_FINANCIERE)) $criteria->add(CommonSeancePeer::JUGEMENT_OFFRE_FINANCIERE, $this->jugement_offre_financiere);
        if ($this->isColumnModified(CommonSeancePeer::JUSTIFICATIF)) $criteria->add(CommonSeancePeer::JUSTIFICATIF, $this->justificatif);
        if ($this->isColumnModified(CommonSeancePeer::STATUT)) $criteria->add(CommonSeancePeer::STATUT, $this->statut);
        if ($this->isColumnModified(CommonSeancePeer::ID_BLOB_PV)) $criteria->add(CommonSeancePeer::ID_BLOB_PV, $this->id_blob_pv);

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
        $criteria = new Criteria(CommonSeancePeer::DATABASE_NAME);
        $criteria->add(CommonSeancePeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonSeance (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setConsultationRef($this->getConsultationRef());
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setReport($this->getReport());
        $copyObj->setDate($this->getDate());
        $copyObj->setType($this->getType());
        $copyObj->setOuvertureEnvCandidature($this->getOuvertureEnvCandidature());
        $copyObj->setOuvertureEnvOffreTechnique($this->getOuvertureEnvOffreTechnique());
        $copyObj->setOuvertureEnvOffreFinanciere($this->getOuvertureEnvOffreFinanciere());
        $copyObj->setJugementEnv1Administratif($this->getJugementEnv1Administratif());
        $copyObj->setJugementEnv1Technique($this->getJugementEnv1Technique());
        $copyObj->setJugementEnv1Echantillon($this->getJugementEnv1Echantillon());
        $copyObj->setJugementOffreTechnique($this->getJugementOffreTechnique());
        $copyObj->setJugementOffreFinanciere($this->getJugementOffreFinanciere());
        $copyObj->setJustificatif($this->getJustificatif());
        $copyObj->setStatut($this->getStatut());
        $copyObj->setIdBlobPv($this->getIdBlobPv());
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
     * @return CommonSeance Clone of current object.
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
     * @return CommonSeancePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonSeancePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->consultation_ref = null;
        $this->organisme = null;
        $this->report = null;
        $this->date = null;
        $this->type = null;
        $this->ouverture_env_candidature = null;
        $this->ouverture_env_offre_technique = null;
        $this->ouverture_env_offre_financiere = null;
        $this->jugement_env1_administratif = null;
        $this->jugement_env1_technique = null;
        $this->jugement_env1_echantillon = null;
        $this->jugement_offre_technique = null;
        $this->jugement_offre_financiere = null;
        $this->justificatif = null;
        $this->statut = null;
        $this->id_blob_pv = null;
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
        return (string) $this->exportTo(CommonSeancePeer::DEFAULT_STRING_FORMAT);
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
