<?php


/**
 * Base class that represents a row from the 'exec_phase' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonExecPhase extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonExecPhasePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonExecPhasePeer
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
     * The value for the id_contrat field.
     * @var        int
     */
    protected $id_contrat;

    /**
     * The value for the numero field.
     * @var        string
     */
    protected $numero;

    /**
     * The value for the intitule field.
     * @var        string
     */
    protected $intitule;

    /**
     * The value for the delai field.
     * @var        double
     */
    protected $delai;

    /**
     * The value for the unite_delai field.
     * @var        int
     */
    protected $unite_delai;

    /**
     * The value for the date_crea field.
     * @var        string
     */
    protected $date_crea;

    /**
     * The value for the id_agent_crea field.
     * @var        int
     */
    protected $id_agent_crea;

    /**
     * The value for the date_modif field.
     * @var        string
     */
    protected $date_modif;

    /**
     * The value for the id_agent_modif field.
     * @var        int
     */
    protected $id_agent_modif;

    /**
     * The value for the delai_reel field.
     * @var        double
     */
    protected $delai_reel;

    /**
     * The value for the depassement field.
     * @var        double
     */
    protected $depassement;

    /**
     * The value for the date_maj_delai_reel field.
     * @var        string
     */
    protected $date_maj_delai_reel;

    /**
     * The value for the delai_differe field.
     * @var        double
     */
    protected $delai_differe;

    /**
     * The value for the unite_delai_differe field.
     * @var        int
     */
    protected $unite_delai_differe;

    /**
     * The value for the date_debut field.
     * @var        string
     */
    protected $date_debut;

    /**
     * The value for the statut field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $statut;

    /**
     * @var        CommonExecContrat
     */
    protected $aCommonExecContrat;

    /**
     * @var        PropelObjectCollection|CommonExecEvenement[] Collection to store aggregation of CommonExecEvenement objects.
     */
    protected $collCommonExecEvenements;
    protected $collCommonExecEvenementsPartial;

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
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecEvenementsScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->statut = 0;
    }

    /**
     * Initializes internal state of BaseCommonExecPhase object.
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
     * Get the [id_contrat] column value.
     * 
     * @return int
     */
    public function getIdContrat()
    {

        return $this->id_contrat;
    }

    /**
     * Get the [numero] column value.
     * 
     * @return string
     */
    public function getNumero()
    {

        return $this->numero;
    }

    /**
     * Get the [intitule] column value.
     * 
     * @return string
     */
    public function getIntitule()
    {

        return $this->intitule;
    }

    /**
     * Get the [delai] column value.
     * 
     * @return double
     */
    public function getDelai()
    {

        return $this->delai;
    }

    /**
     * Get the [unite_delai] column value.
     * 
     * @return int
     */
    public function getUniteDelai()
    {

        return $this->unite_delai;
    }

    /**
     * Get the [optionally formatted] temporal [date_crea] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateCrea($format = 'Y-m-d H:i:s')
    {
        if ($this->date_crea === null) {
            return null;
        }

        if ($this->date_crea === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_crea);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_crea, true), $x);
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
     * Get the [id_agent_crea] column value.
     * 
     * @return int
     */
    public function getIdAgentCrea()
    {

        return $this->id_agent_crea;
    }

    /**
     * Get the [optionally formatted] temporal [date_modif] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateModif($format = 'Y-m-d H:i:s')
    {
        if ($this->date_modif === null) {
            return null;
        }

        if ($this->date_modif === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_modif);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_modif, true), $x);
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
     * Get the [id_agent_modif] column value.
     * 
     * @return int
     */
    public function getIdAgentModif()
    {

        return $this->id_agent_modif;
    }

    /**
     * Get the [delai_reel] column value.
     * 
     * @return double
     */
    public function getDelaiReel()
    {

        return $this->delai_reel;
    }

    /**
     * Get the [depassement] column value.
     * 
     * @return double
     */
    public function getDepassement()
    {

        return $this->depassement;
    }

    /**
     * Get the [optionally formatted] temporal [date_maj_delai_reel] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateMajDelaiReel($format = 'Y-m-d H:i:s')
    {
        if ($this->date_maj_delai_reel === null) {
            return null;
        }

        if ($this->date_maj_delai_reel === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_maj_delai_reel);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_maj_delai_reel, true), $x);
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
     * Get the [delai_differe] column value.
     * 
     * @return double
     */
    public function getDelaiDiffere()
    {

        return $this->delai_differe;
    }

    /**
     * Get the [unite_delai_differe] column value.
     * 
     * @return int
     */
    public function getUniteDelaiDiffere()
    {

        return $this->unite_delai_differe;
    }

    /**
     * Get the [optionally formatted] temporal [date_debut] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateDebut($format = 'Y-m-d H:i:s')
    {
        if ($this->date_debut === null) {
            return null;
        }

        if ($this->date_debut === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_debut);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_debut, true), $x);
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
     * Get the [statut] column value.
     * 
     * @return int
     */
    public function getStatut()
    {

        return $this->statut;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonExecPhase The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonExecPhasePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [id_contrat] column.
     * 
     * @param int $v new value
     * @return CommonExecPhase The current object (for fluent API support)
     */
    public function setIdContrat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_contrat !== $v) {
            $this->id_contrat = $v;
            $this->modifiedColumns[] = CommonExecPhasePeer::ID_CONTRAT;
        }

        if ($this->aCommonExecContrat !== null && $this->aCommonExecContrat->getIdContrat() !== $v) {
            $this->aCommonExecContrat = null;
        }


        return $this;
    } // setIdContrat()

    /**
     * Set the value of [numero] column.
     * 
     * @param string $v new value
     * @return CommonExecPhase The current object (for fluent API support)
     */
    public function setNumero($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->numero !== $v) {
            $this->numero = $v;
            $this->modifiedColumns[] = CommonExecPhasePeer::NUMERO;
        }


        return $this;
    } // setNumero()

    /**
     * Set the value of [intitule] column.
     * 
     * @param string $v new value
     * @return CommonExecPhase The current object (for fluent API support)
     */
    public function setIntitule($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->intitule !== $v) {
            $this->intitule = $v;
            $this->modifiedColumns[] = CommonExecPhasePeer::INTITULE;
        }


        return $this;
    } // setIntitule()

    /**
     * Set the value of [delai] column.
     * 
     * @param double $v new value
     * @return CommonExecPhase The current object (for fluent API support)
     */
    public function setDelai($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->delai !== $v) {
            $this->delai = $v;
            $this->modifiedColumns[] = CommonExecPhasePeer::DELAI;
        }


        return $this;
    } // setDelai()

    /**
     * Set the value of [unite_delai] column.
     * 
     * @param int $v new value
     * @return CommonExecPhase The current object (for fluent API support)
     */
    public function setUniteDelai($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->unite_delai !== $v) {
            $this->unite_delai = $v;
            $this->modifiedColumns[] = CommonExecPhasePeer::UNITE_DELAI;
        }


        return $this;
    } // setUniteDelai()

    /**
     * Sets the value of [date_crea] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecPhase The current object (for fluent API support)
     */
    public function setDateCrea($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_crea !== null || $dt !== null) {
            $currentDateAsString = ($this->date_crea !== null && $tmpDt = new DateTime($this->date_crea)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_crea = $newDateAsString;
                $this->modifiedColumns[] = CommonExecPhasePeer::DATE_CREA;
            }
        } // if either are not null


        return $this;
    } // setDateCrea()

    /**
     * Set the value of [id_agent_crea] column.
     * 
     * @param int $v new value
     * @return CommonExecPhase The current object (for fluent API support)
     */
    public function setIdAgentCrea($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_crea !== $v) {
            $this->id_agent_crea = $v;
            $this->modifiedColumns[] = CommonExecPhasePeer::ID_AGENT_CREA;
        }


        return $this;
    } // setIdAgentCrea()

    /**
     * Sets the value of [date_modif] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecPhase The current object (for fluent API support)
     */
    public function setDateModif($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_modif !== null || $dt !== null) {
            $currentDateAsString = ($this->date_modif !== null && $tmpDt = new DateTime($this->date_modif)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_modif = $newDateAsString;
                $this->modifiedColumns[] = CommonExecPhasePeer::DATE_MODIF;
            }
        } // if either are not null


        return $this;
    } // setDateModif()

    /**
     * Set the value of [id_agent_modif] column.
     * 
     * @param int $v new value
     * @return CommonExecPhase The current object (for fluent API support)
     */
    public function setIdAgentModif($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_modif !== $v) {
            $this->id_agent_modif = $v;
            $this->modifiedColumns[] = CommonExecPhasePeer::ID_AGENT_MODIF;
        }


        return $this;
    } // setIdAgentModif()

    /**
     * Set the value of [delai_reel] column.
     * 
     * @param double $v new value
     * @return CommonExecPhase The current object (for fluent API support)
     */
    public function setDelaiReel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->delai_reel !== $v) {
            $this->delai_reel = $v;
            $this->modifiedColumns[] = CommonExecPhasePeer::DELAI_REEL;
        }


        return $this;
    } // setDelaiReel()

    /**
     * Set the value of [depassement] column.
     * 
     * @param double $v new value
     * @return CommonExecPhase The current object (for fluent API support)
     */
    public function setDepassement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->depassement !== $v) {
            $this->depassement = $v;
            $this->modifiedColumns[] = CommonExecPhasePeer::DEPASSEMENT;
        }


        return $this;
    } // setDepassement()

    /**
     * Sets the value of [date_maj_delai_reel] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecPhase The current object (for fluent API support)
     */
    public function setDateMajDelaiReel($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_maj_delai_reel !== null || $dt !== null) {
            $currentDateAsString = ($this->date_maj_delai_reel !== null && $tmpDt = new DateTime($this->date_maj_delai_reel)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_maj_delai_reel = $newDateAsString;
                $this->modifiedColumns[] = CommonExecPhasePeer::DATE_MAJ_DELAI_REEL;
            }
        } // if either are not null


        return $this;
    } // setDateMajDelaiReel()

    /**
     * Set the value of [delai_differe] column.
     * 
     * @param double $v new value
     * @return CommonExecPhase The current object (for fluent API support)
     */
    public function setDelaiDiffere($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (double) $v;
        }

        if ($this->delai_differe !== $v) {
            $this->delai_differe = $v;
            $this->modifiedColumns[] = CommonExecPhasePeer::DELAI_DIFFERE;
        }


        return $this;
    } // setDelaiDiffere()

    /**
     * Set the value of [unite_delai_differe] column.
     * 
     * @param int $v new value
     * @return CommonExecPhase The current object (for fluent API support)
     */
    public function setUniteDelaiDiffere($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->unite_delai_differe !== $v) {
            $this->unite_delai_differe = $v;
            $this->modifiedColumns[] = CommonExecPhasePeer::UNITE_DELAI_DIFFERE;
        }


        return $this;
    } // setUniteDelaiDiffere()

    /**
     * Sets the value of [date_debut] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecPhase The current object (for fluent API support)
     */
    public function setDateDebut($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_debut !== null || $dt !== null) {
            $currentDateAsString = ($this->date_debut !== null && $tmpDt = new DateTime($this->date_debut)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_debut = $newDateAsString;
                $this->modifiedColumns[] = CommonExecPhasePeer::DATE_DEBUT;
            }
        } // if either are not null


        return $this;
    } // setDateDebut()

    /**
     * Set the value of [statut] column.
     * 
     * @param int $v new value
     * @return CommonExecPhase The current object (for fluent API support)
     */
    public function setStatut($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->statut !== $v) {
            $this->statut = $v;
            $this->modifiedColumns[] = CommonExecPhasePeer::STATUT;
        }


        return $this;
    } // setStatut()

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
            if ($this->statut !== 0) {
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
            $this->id_contrat = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->numero = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->intitule = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->delai = ($row[$startcol + 4] !== null) ? (double) $row[$startcol + 4] : null;
            $this->unite_delai = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->date_crea = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->id_agent_crea = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->date_modif = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->id_agent_modif = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->delai_reel = ($row[$startcol + 10] !== null) ? (double) $row[$startcol + 10] : null;
            $this->depassement = ($row[$startcol + 11] !== null) ? (double) $row[$startcol + 11] : null;
            $this->date_maj_delai_reel = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->delai_differe = ($row[$startcol + 13] !== null) ? (double) $row[$startcol + 13] : null;
            $this->unite_delai_differe = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->date_debut = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->statut = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 17; // 17 = CommonExecPhasePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonExecPhase object", $e);
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

        if ($this->aCommonExecContrat !== null && $this->id_contrat !== $this->aCommonExecContrat->getIdContrat()) {
            $this->aCommonExecContrat = null;
        }
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
            $con = Propel::getConnection(CommonExecPhasePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonExecPhasePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonExecContrat = null;
            $this->collCommonExecEvenements = null;

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
            $con = Propel::getConnection(CommonExecPhasePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonExecPhaseQuery::create()
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
            $con = Propel::getConnection(CommonExecPhasePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonExecPhasePeer::addInstanceToPool($this);
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

            // We call the save method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aCommonExecContrat !== null) {
                if ($this->aCommonExecContrat->isModified() || $this->aCommonExecContrat->isNew()) {
                    $affectedRows += $this->aCommonExecContrat->save($con);
                }
                $this->setCommonExecContrat($this->aCommonExecContrat);
            }

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

            if ($this->commonExecEvenementsScheduledForDeletion !== null) {
                if (!$this->commonExecEvenementsScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecEvenementsScheduledForDeletion as $commonExecEvenement) {
                        // need to save related object because we set the relation to null
                        $commonExecEvenement->save($con);
                    }
                    $this->commonExecEvenementsScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecEvenements !== null) {
                foreach ($this->collCommonExecEvenements as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
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

        $this->modifiedColumns[] = CommonExecPhasePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonExecPhasePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonExecPhasePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonExecPhasePeer::ID_CONTRAT)) {
            $modifiedColumns[':p' . $index++]  = '`id_contrat`';
        }
        if ($this->isColumnModified(CommonExecPhasePeer::NUMERO)) {
            $modifiedColumns[':p' . $index++]  = '`numero`';
        }
        if ($this->isColumnModified(CommonExecPhasePeer::INTITULE)) {
            $modifiedColumns[':p' . $index++]  = '`intitule`';
        }
        if ($this->isColumnModified(CommonExecPhasePeer::DELAI)) {
            $modifiedColumns[':p' . $index++]  = '`delai`';
        }
        if ($this->isColumnModified(CommonExecPhasePeer::UNITE_DELAI)) {
            $modifiedColumns[':p' . $index++]  = '`unite_delai`';
        }
        if ($this->isColumnModified(CommonExecPhasePeer::DATE_CREA)) {
            $modifiedColumns[':p' . $index++]  = '`date_crea`';
        }
        if ($this->isColumnModified(CommonExecPhasePeer::ID_AGENT_CREA)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent_crea`';
        }
        if ($this->isColumnModified(CommonExecPhasePeer::DATE_MODIF)) {
            $modifiedColumns[':p' . $index++]  = '`date_modif`';
        }
        if ($this->isColumnModified(CommonExecPhasePeer::ID_AGENT_MODIF)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent_modif`';
        }
        if ($this->isColumnModified(CommonExecPhasePeer::DELAI_REEL)) {
            $modifiedColumns[':p' . $index++]  = '`delai_reel`';
        }
        if ($this->isColumnModified(CommonExecPhasePeer::DEPASSEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`depassement`';
        }
        if ($this->isColumnModified(CommonExecPhasePeer::DATE_MAJ_DELAI_REEL)) {
            $modifiedColumns[':p' . $index++]  = '`date_maj_delai_reel`';
        }
        if ($this->isColumnModified(CommonExecPhasePeer::DELAI_DIFFERE)) {
            $modifiedColumns[':p' . $index++]  = '`delai_differe`';
        }
        if ($this->isColumnModified(CommonExecPhasePeer::UNITE_DELAI_DIFFERE)) {
            $modifiedColumns[':p' . $index++]  = '`unite_delai_differe`';
        }
        if ($this->isColumnModified(CommonExecPhasePeer::DATE_DEBUT)) {
            $modifiedColumns[':p' . $index++]  = '`date_debut`';
        }
        if ($this->isColumnModified(CommonExecPhasePeer::STATUT)) {
            $modifiedColumns[':p' . $index++]  = '`statut`';
        }

        $sql = sprintf(
            'INSERT INTO `exec_phase` (%s) VALUES (%s)',
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
                    case '`id_contrat`':						
                        $stmt->bindValue($identifier, $this->id_contrat, PDO::PARAM_INT);
                        break;
                    case '`numero`':						
                        $stmt->bindValue($identifier, $this->numero, PDO::PARAM_STR);
                        break;
                    case '`intitule`':						
                        $stmt->bindValue($identifier, $this->intitule, PDO::PARAM_STR);
                        break;
                    case '`delai`':						
                        $stmt->bindValue($identifier, $this->delai, PDO::PARAM_STR);
                        break;
                    case '`unite_delai`':						
                        $stmt->bindValue($identifier, $this->unite_delai, PDO::PARAM_INT);
                        break;
                    case '`date_crea`':						
                        $stmt->bindValue($identifier, $this->date_crea, PDO::PARAM_STR);
                        break;
                    case '`id_agent_crea`':						
                        $stmt->bindValue($identifier, $this->id_agent_crea, PDO::PARAM_INT);
                        break;
                    case '`date_modif`':						
                        $stmt->bindValue($identifier, $this->date_modif, PDO::PARAM_STR);
                        break;
                    case '`id_agent_modif`':						
                        $stmt->bindValue($identifier, $this->id_agent_modif, PDO::PARAM_INT);
                        break;
                    case '`delai_reel`':						
                        $stmt->bindValue($identifier, $this->delai_reel, PDO::PARAM_STR);
                        break;
                    case '`depassement`':						
                        $stmt->bindValue($identifier, $this->depassement, PDO::PARAM_STR);
                        break;
                    case '`date_maj_delai_reel`':						
                        $stmt->bindValue($identifier, $this->date_maj_delai_reel, PDO::PARAM_STR);
                        break;
                    case '`delai_differe`':						
                        $stmt->bindValue($identifier, $this->delai_differe, PDO::PARAM_STR);
                        break;
                    case '`unite_delai_differe`':						
                        $stmt->bindValue($identifier, $this->unite_delai_differe, PDO::PARAM_INT);
                        break;
                    case '`date_debut`':						
                        $stmt->bindValue($identifier, $this->date_debut, PDO::PARAM_STR);
                        break;
                    case '`statut`':						
                        $stmt->bindValue($identifier, $this->statut, PDO::PARAM_INT);
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


            // We call the validate method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aCommonExecContrat !== null) {
                if (!$this->aCommonExecContrat->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonExecContrat->getValidationFailures());
                }
            }


            if (($retval = CommonExecPhasePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCommonExecEvenements !== null) {
                    foreach ($this->collCommonExecEvenements as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
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
        $pos = CommonExecPhasePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdContrat();
                break;
            case 2:
                return $this->getNumero();
                break;
            case 3:
                return $this->getIntitule();
                break;
            case 4:
                return $this->getDelai();
                break;
            case 5:
                return $this->getUniteDelai();
                break;
            case 6:
                return $this->getDateCrea();
                break;
            case 7:
                return $this->getIdAgentCrea();
                break;
            case 8:
                return $this->getDateModif();
                break;
            case 9:
                return $this->getIdAgentModif();
                break;
            case 10:
                return $this->getDelaiReel();
                break;
            case 11:
                return $this->getDepassement();
                break;
            case 12:
                return $this->getDateMajDelaiReel();
                break;
            case 13:
                return $this->getDelaiDiffere();
                break;
            case 14:
                return $this->getUniteDelaiDiffere();
                break;
            case 15:
                return $this->getDateDebut();
                break;
            case 16:
                return $this->getStatut();
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
     * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
    {
        if (isset($alreadyDumpedObjects['CommonExecPhase'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonExecPhase'][$this->getPrimaryKey()] = true;
        $keys = CommonExecPhasePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getIdContrat(),
            $keys[2] => $this->getNumero(),
            $keys[3] => $this->getIntitule(),
            $keys[4] => $this->getDelai(),
            $keys[5] => $this->getUniteDelai(),
            $keys[6] => $this->getDateCrea(),
            $keys[7] => $this->getIdAgentCrea(),
            $keys[8] => $this->getDateModif(),
            $keys[9] => $this->getIdAgentModif(),
            $keys[10] => $this->getDelaiReel(),
            $keys[11] => $this->getDepassement(),
            $keys[12] => $this->getDateMajDelaiReel(),
            $keys[13] => $this->getDelaiDiffere(),
            $keys[14] => $this->getUniteDelaiDiffere(),
            $keys[15] => $this->getDateDebut(),
            $keys[16] => $this->getStatut(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonExecContrat) {
                $result['CommonExecContrat'] = $this->aCommonExecContrat->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCommonExecEvenements) {
                $result['CommonExecEvenements'] = $this->collCommonExecEvenements->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
        }

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
        $pos = CommonExecPhasePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdContrat($value);
                break;
            case 2:
                $this->setNumero($value);
                break;
            case 3:
                $this->setIntitule($value);
                break;
            case 4:
                $this->setDelai($value);
                break;
            case 5:
                $this->setUniteDelai($value);
                break;
            case 6:
                $this->setDateCrea($value);
                break;
            case 7:
                $this->setIdAgentCrea($value);
                break;
            case 8:
                $this->setDateModif($value);
                break;
            case 9:
                $this->setIdAgentModif($value);
                break;
            case 10:
                $this->setDelaiReel($value);
                break;
            case 11:
                $this->setDepassement($value);
                break;
            case 12:
                $this->setDateMajDelaiReel($value);
                break;
            case 13:
                $this->setDelaiDiffere($value);
                break;
            case 14:
                $this->setUniteDelaiDiffere($value);
                break;
            case 15:
                $this->setDateDebut($value);
                break;
            case 16:
                $this->setStatut($value);
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
        $keys = CommonExecPhasePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdContrat($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setNumero($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIntitule($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setDelai($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setUniteDelai($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setDateCrea($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setIdAgentCrea($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setDateModif($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setIdAgentModif($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setDelaiReel($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDepassement($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setDateMajDelaiReel($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setDelaiDiffere($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setUniteDelaiDiffere($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setDateDebut($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setStatut($arr[$keys[16]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonExecPhasePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonExecPhasePeer::ID)) $criteria->add(CommonExecPhasePeer::ID, $this->id);
        if ($this->isColumnModified(CommonExecPhasePeer::ID_CONTRAT)) $criteria->add(CommonExecPhasePeer::ID_CONTRAT, $this->id_contrat);
        if ($this->isColumnModified(CommonExecPhasePeer::NUMERO)) $criteria->add(CommonExecPhasePeer::NUMERO, $this->numero);
        if ($this->isColumnModified(CommonExecPhasePeer::INTITULE)) $criteria->add(CommonExecPhasePeer::INTITULE, $this->intitule);
        if ($this->isColumnModified(CommonExecPhasePeer::DELAI)) $criteria->add(CommonExecPhasePeer::DELAI, $this->delai);
        if ($this->isColumnModified(CommonExecPhasePeer::UNITE_DELAI)) $criteria->add(CommonExecPhasePeer::UNITE_DELAI, $this->unite_delai);
        if ($this->isColumnModified(CommonExecPhasePeer::DATE_CREA)) $criteria->add(CommonExecPhasePeer::DATE_CREA, $this->date_crea);
        if ($this->isColumnModified(CommonExecPhasePeer::ID_AGENT_CREA)) $criteria->add(CommonExecPhasePeer::ID_AGENT_CREA, $this->id_agent_crea);
        if ($this->isColumnModified(CommonExecPhasePeer::DATE_MODIF)) $criteria->add(CommonExecPhasePeer::DATE_MODIF, $this->date_modif);
        if ($this->isColumnModified(CommonExecPhasePeer::ID_AGENT_MODIF)) $criteria->add(CommonExecPhasePeer::ID_AGENT_MODIF, $this->id_agent_modif);
        if ($this->isColumnModified(CommonExecPhasePeer::DELAI_REEL)) $criteria->add(CommonExecPhasePeer::DELAI_REEL, $this->delai_reel);
        if ($this->isColumnModified(CommonExecPhasePeer::DEPASSEMENT)) $criteria->add(CommonExecPhasePeer::DEPASSEMENT, $this->depassement);
        if ($this->isColumnModified(CommonExecPhasePeer::DATE_MAJ_DELAI_REEL)) $criteria->add(CommonExecPhasePeer::DATE_MAJ_DELAI_REEL, $this->date_maj_delai_reel);
        if ($this->isColumnModified(CommonExecPhasePeer::DELAI_DIFFERE)) $criteria->add(CommonExecPhasePeer::DELAI_DIFFERE, $this->delai_differe);
        if ($this->isColumnModified(CommonExecPhasePeer::UNITE_DELAI_DIFFERE)) $criteria->add(CommonExecPhasePeer::UNITE_DELAI_DIFFERE, $this->unite_delai_differe);
        if ($this->isColumnModified(CommonExecPhasePeer::DATE_DEBUT)) $criteria->add(CommonExecPhasePeer::DATE_DEBUT, $this->date_debut);
        if ($this->isColumnModified(CommonExecPhasePeer::STATUT)) $criteria->add(CommonExecPhasePeer::STATUT, $this->statut);

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
        $criteria = new Criteria(CommonExecPhasePeer::DATABASE_NAME);
        $criteria->add(CommonExecPhasePeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonExecPhase (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdContrat($this->getIdContrat());
        $copyObj->setNumero($this->getNumero());
        $copyObj->setIntitule($this->getIntitule());
        $copyObj->setDelai($this->getDelai());
        $copyObj->setUniteDelai($this->getUniteDelai());
        $copyObj->setDateCrea($this->getDateCrea());
        $copyObj->setIdAgentCrea($this->getIdAgentCrea());
        $copyObj->setDateModif($this->getDateModif());
        $copyObj->setIdAgentModif($this->getIdAgentModif());
        $copyObj->setDelaiReel($this->getDelaiReel());
        $copyObj->setDepassement($this->getDepassement());
        $copyObj->setDateMajDelaiReel($this->getDateMajDelaiReel());
        $copyObj->setDelaiDiffere($this->getDelaiDiffere());
        $copyObj->setUniteDelaiDiffere($this->getUniteDelaiDiffere());
        $copyObj->setDateDebut($this->getDateDebut());
        $copyObj->setStatut($this->getStatut());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCommonExecEvenements() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecEvenement($relObj->copy($deepCopy));
                }
            }

            //unflag object copy
            $this->startCopy = false;
        } // if ($deepCopy)

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
     * @return CommonExecPhase Clone of current object.
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
     * @return CommonExecPhasePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonExecPhasePeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonExecContrat object.
     *
     * @param   CommonExecContrat $v
     * @return CommonExecPhase The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonExecContrat(CommonExecContrat $v = null)
    {
        if ($v === null) {
            $this->setIdContrat(NULL);
        } else {
            $this->setIdContrat($v->getIdContrat());
        }

        $this->aCommonExecContrat = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonExecContrat object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonExecPhase($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonExecContrat object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonExecContrat The associated CommonExecContrat object.
     * @throws PropelException
     */
    public function getCommonExecContrat(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonExecContrat === null && ($this->id_contrat !== null) && $doQuery) {
            $this->aCommonExecContrat = CommonExecContratQuery::create()->findPk($this->id_contrat, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonExecContrat->addCommonExecPhases($this);
             */
        }

        return $this->aCommonExecContrat;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName)
    {
        if ('CommonExecEvenement' == $relationName) {
            $this->initCommonExecEvenements();
        }
    }

    /**
     * Clears out the collCommonExecEvenements collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonExecPhase The current object (for fluent API support)
     * @see        addCommonExecEvenements()
     */
    public function clearCommonExecEvenements()
    {
        $this->collCommonExecEvenements = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecEvenementsPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecEvenements collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecEvenements($v = true)
    {
        $this->collCommonExecEvenementsPartial = $v;
    }

    /**
     * Initializes the collCommonExecEvenements collection.
     *
     * By default this just sets the collCommonExecEvenements collection to an empty array (like clearcollCommonExecEvenements());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecEvenements($overrideExisting = true)
    {
        if (null !== $this->collCommonExecEvenements && !$overrideExisting) {
            return;
        }
        $this->collCommonExecEvenements = new PropelObjectCollection();
        $this->collCommonExecEvenements->setModel('CommonExecEvenement');
    }

    /**
     * Gets an array of CommonExecEvenement objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonExecPhase is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecEvenement[] List of CommonExecEvenement objects
     * @throws PropelException
     */
    public function getCommonExecEvenements($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecEvenementsPartial && !$this->isNew();
        if (null === $this->collCommonExecEvenements || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecEvenements) {
                // return empty collection
                $this->initCommonExecEvenements();
            } else {
                $collCommonExecEvenements = CommonExecEvenementQuery::create(null, $criteria)
                    ->filterByCommonExecPhase($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecEvenementsPartial && count($collCommonExecEvenements)) {
                      $this->initCommonExecEvenements(false);

                      foreach ($collCommonExecEvenements as $obj) {
                        if (false == $this->collCommonExecEvenements->contains($obj)) {
                          $this->collCommonExecEvenements->append($obj);
                        }
                      }

                      $this->collCommonExecEvenementsPartial = true;
                    }

                    $collCommonExecEvenements->getInternalIterator()->rewind();

                    return $collCommonExecEvenements;
                }

                if ($partial && $this->collCommonExecEvenements) {
                    foreach ($this->collCommonExecEvenements as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecEvenements[] = $obj;
                        }
                    }
                }

                $this->collCommonExecEvenements = $collCommonExecEvenements;
                $this->collCommonExecEvenementsPartial = false;
            }
        }

        return $this->collCommonExecEvenements;
    }

    /**
     * Sets a collection of CommonExecEvenement objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecEvenements A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonExecPhase The current object (for fluent API support)
     */
    public function setCommonExecEvenements(PropelCollection $commonExecEvenements, PropelPDO $con = null)
    {
        $commonExecEvenementsToDelete = $this->getCommonExecEvenements(new Criteria(), $con)->diff($commonExecEvenements);


        $this->commonExecEvenementsScheduledForDeletion = $commonExecEvenementsToDelete;

        foreach ($commonExecEvenementsToDelete as $commonExecEvenementRemoved) {
            $commonExecEvenementRemoved->setCommonExecPhase(null);
        }

        $this->collCommonExecEvenements = null;
        foreach ($commonExecEvenements as $commonExecEvenement) {
            $this->addCommonExecEvenement($commonExecEvenement);
        }

        $this->collCommonExecEvenements = $commonExecEvenements;
        $this->collCommonExecEvenementsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecEvenement objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecEvenement objects.
     * @throws PropelException
     */
    public function countCommonExecEvenements(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecEvenementsPartial && !$this->isNew();
        if (null === $this->collCommonExecEvenements || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecEvenements) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecEvenements());
            }
            $query = CommonExecEvenementQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonExecPhase($this)
                ->count($con);
        }

        return count($this->collCommonExecEvenements);
    }

    /**
     * Method called to associate a CommonExecEvenement object to this object
     * through the CommonExecEvenement foreign key attribute.
     *
     * @param   CommonExecEvenement $l CommonExecEvenement
     * @return CommonExecPhase The current object (for fluent API support)
     */
    public function addCommonExecEvenement(CommonExecEvenement $l)
    {
        if ($this->collCommonExecEvenements === null) {
            $this->initCommonExecEvenements();
            $this->collCommonExecEvenementsPartial = true;
        }
        if (!in_array($l, $this->collCommonExecEvenements->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecEvenement($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecEvenement $commonExecEvenement The commonExecEvenement object to add.
     */
    protected function doAddCommonExecEvenement($commonExecEvenement)
    {
        $this->collCommonExecEvenements[]= $commonExecEvenement;
        $commonExecEvenement->setCommonExecPhase($this);
    }

    /**
     * @param	CommonExecEvenement $commonExecEvenement The commonExecEvenement object to remove.
     * @return CommonExecPhase The current object (for fluent API support)
     */
    public function removeCommonExecEvenement($commonExecEvenement)
    {
        if ($this->getCommonExecEvenements()->contains($commonExecEvenement)) {
            $this->collCommonExecEvenements->remove($this->collCommonExecEvenements->search($commonExecEvenement));
            if (null === $this->commonExecEvenementsScheduledForDeletion) {
                $this->commonExecEvenementsScheduledForDeletion = clone $this->collCommonExecEvenements;
                $this->commonExecEvenementsScheduledForDeletion->clear();
            }
            $this->commonExecEvenementsScheduledForDeletion[]= $commonExecEvenement;
            $commonExecEvenement->setCommonExecPhase(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecPhase is new, it will return
     * an empty collection; or if this CommonExecPhase has previously
     * been saved, it will retrieve related CommonExecEvenements from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecPhase.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecEvenement[] List of CommonExecEvenement objects
     */
    public function getCommonExecEvenementsJoinCommonExecContractant($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecEvenementQuery::create(null, $criteria);
        $query->joinWith('CommonExecContractant', $join_behavior);

        return $this->getCommonExecEvenements($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecPhase is new, it will return
     * an empty collection; or if this CommonExecPhase has previously
     * been saved, it will retrieve related CommonExecEvenements from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecPhase.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecEvenement[] List of CommonExecEvenement objects
     */
    public function getCommonExecEvenementsJoinCommonExecContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecEvenementQuery::create(null, $criteria);
        $query->joinWith('CommonExecContrat', $join_behavior);

        return $this->getCommonExecEvenements($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecPhase is new, it will return
     * an empty collection; or if this CommonExecPhase has previously
     * been saved, it will retrieve related CommonExecEvenements from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecPhase.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecEvenement[] List of CommonExecEvenement objects
     */
    public function getCommonExecEvenementsJoinCommonExecTypeEvenement($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecEvenementQuery::create(null, $criteria);
        $query->joinWith('CommonExecTypeEvenement', $join_behavior);

        return $this->getCommonExecEvenements($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->id_contrat = null;
        $this->numero = null;
        $this->intitule = null;
        $this->delai = null;
        $this->unite_delai = null;
        $this->date_crea = null;
        $this->id_agent_crea = null;
        $this->date_modif = null;
        $this->id_agent_modif = null;
        $this->delai_reel = null;
        $this->depassement = null;
        $this->date_maj_delai_reel = null;
        $this->delai_differe = null;
        $this->unite_delai_differe = null;
        $this->date_debut = null;
        $this->statut = null;
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
            if ($this->collCommonExecEvenements) {
                foreach ($this->collCommonExecEvenements as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aCommonExecContrat instanceof Persistent) {
              $this->aCommonExecContrat->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCommonExecEvenements instanceof PropelCollection) {
            $this->collCommonExecEvenements->clearIterator();
        }
        $this->collCommonExecEvenements = null;
        $this->aCommonExecContrat = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonExecPhasePeer::DEFAULT_STRING_FORMAT);
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
