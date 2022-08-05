<?php


/**
 * Base class that represents a row from the 'exec_litige' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonExecLitige extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonExecLitigePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonExecLitigePeer
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
     * The value for the numero field.
     * @var        string
     */
    protected $numero;

    /**
     * The value for the id_contrat field.
     * @var        int
     */
    protected $id_contrat;

    /**
     * The value for the id_contractant field.
     * @var        int
     */
    protected $id_contractant;

    /**
     * The value for the statut field.
     * @var        int
     */
    protected $statut;

    /**
     * The value for the date_declaration field.
     * @var        string
     */
    protected $date_declaration;

    /**
     * The value for the date_validation field.
     * @var        string
     */
    protected $date_validation;

    /**
     * The value for the id_agent_validation field.
     * @var        int
     */
    protected $id_agent_validation;

    /**
     * The value for the date_rejet field.
     * @var        string
     */
    protected $date_rejet;

    /**
     * The value for the id_agent_rejet field.
     * @var        int
     */
    protected $id_agent_rejet;

    /**
     * The value for the commentaire field.
     * @var        string
     */
    protected $commentaire;

    /**
     * The value for the id_agent_crea field.
     * @var        int
     */
    protected $id_agent_crea;

    /**
     * The value for the date_crea field.
     * @var        string
     */
    protected $date_crea;

    /**
     * The value for the cloture field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $cloture;

    /**
     * The value for the etat field.
     * @var        boolean
     */
    protected $etat;

    /**
     * The value for the decision field.
     * @var        string
     */
    protected $decision;

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
        $this->cloture = false;
    }

    /**
     * Initializes internal state of BaseCommonExecLitige object.
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
     * Get the [numero] column value.
     * 
     * @return string
     */
    public function getNumero()
    {

        return $this->numero;
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
     * Get the [id_contractant] column value.
     * 
     * @return int
     */
    public function getIdContractant()
    {

        return $this->id_contractant;
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
     * Get the [optionally formatted] temporal [date_declaration] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateDeclaration($format = 'Y-m-d H:i:s')
    {
        if ($this->date_declaration === null) {
            return null;
        }

        if ($this->date_declaration === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_declaration);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_declaration, true), $x);
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
     * Get the [optionally formatted] temporal [date_validation] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateValidation($format = 'Y-m-d H:i:s')
    {
        if ($this->date_validation === null) {
            return null;
        }

        if ($this->date_validation === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_validation);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_validation, true), $x);
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
     * Get the [id_agent_validation] column value.
     * 
     * @return int
     */
    public function getIdAgentValidation()
    {

        return $this->id_agent_validation;
    }

    /**
     * Get the [optionally formatted] temporal [date_rejet] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateRejet($format = 'Y-m-d H:i:s')
    {
        if ($this->date_rejet === null) {
            return null;
        }

        if ($this->date_rejet === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_rejet);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_rejet, true), $x);
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
     * Get the [id_agent_rejet] column value.
     * 
     * @return int
     */
    public function getIdAgentRejet()
    {

        return $this->id_agent_rejet;
    }

    /**
     * Get the [commentaire] column value.
     * 
     * @return string
     */
    public function getCommentaire()
    {

        return $this->commentaire;
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
     * Get the [cloture] column value.
     * 
     * @return boolean
     */
    public function getCloture()
    {

        return $this->cloture;
    }

    /**
     * Get the [etat] column value.
     * 
     * @return boolean
     */
    public function getEtat()
    {

        return $this->etat;
    }

    /**
     * Get the [decision] column value.
     * 
     * @return string
     */
    public function getDecision()
    {

        return $this->decision;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonExecLitige The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonExecLitigePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [numero] column.
     * 
     * @param string $v new value
     * @return CommonExecLitige The current object (for fluent API support)
     */
    public function setNumero($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->numero !== $v) {
            $this->numero = $v;
            $this->modifiedColumns[] = CommonExecLitigePeer::NUMERO;
        }


        return $this;
    } // setNumero()

    /**
     * Set the value of [id_contrat] column.
     * 
     * @param int $v new value
     * @return CommonExecLitige The current object (for fluent API support)
     */
    public function setIdContrat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_contrat !== $v) {
            $this->id_contrat = $v;
            $this->modifiedColumns[] = CommonExecLitigePeer::ID_CONTRAT;
        }


        return $this;
    } // setIdContrat()

    /**
     * Set the value of [id_contractant] column.
     * 
     * @param int $v new value
     * @return CommonExecLitige The current object (for fluent API support)
     */
    public function setIdContractant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_contractant !== $v) {
            $this->id_contractant = $v;
            $this->modifiedColumns[] = CommonExecLitigePeer::ID_CONTRACTANT;
        }


        return $this;
    } // setIdContractant()

    /**
     * Set the value of [statut] column.
     * 
     * @param int $v new value
     * @return CommonExecLitige The current object (for fluent API support)
     */
    public function setStatut($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->statut !== $v) {
            $this->statut = $v;
            $this->modifiedColumns[] = CommonExecLitigePeer::STATUT;
        }


        return $this;
    } // setStatut()

    /**
     * Sets the value of [date_declaration] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecLitige The current object (for fluent API support)
     */
    public function setDateDeclaration($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_declaration !== null || $dt !== null) {
            $currentDateAsString = ($this->date_declaration !== null && $tmpDt = new DateTime($this->date_declaration)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_declaration = $newDateAsString;
                $this->modifiedColumns[] = CommonExecLitigePeer::DATE_DECLARATION;
            }
        } // if either are not null


        return $this;
    } // setDateDeclaration()

    /**
     * Sets the value of [date_validation] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecLitige The current object (for fluent API support)
     */
    public function setDateValidation($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_validation !== null || $dt !== null) {
            $currentDateAsString = ($this->date_validation !== null && $tmpDt = new DateTime($this->date_validation)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_validation = $newDateAsString;
                $this->modifiedColumns[] = CommonExecLitigePeer::DATE_VALIDATION;
            }
        } // if either are not null


        return $this;
    } // setDateValidation()

    /**
     * Set the value of [id_agent_validation] column.
     * 
     * @param int $v new value
     * @return CommonExecLitige The current object (for fluent API support)
     */
    public function setIdAgentValidation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_validation !== $v) {
            $this->id_agent_validation = $v;
            $this->modifiedColumns[] = CommonExecLitigePeer::ID_AGENT_VALIDATION;
        }


        return $this;
    } // setIdAgentValidation()

    /**
     * Sets the value of [date_rejet] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecLitige The current object (for fluent API support)
     */
    public function setDateRejet($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_rejet !== null || $dt !== null) {
            $currentDateAsString = ($this->date_rejet !== null && $tmpDt = new DateTime($this->date_rejet)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_rejet = $newDateAsString;
                $this->modifiedColumns[] = CommonExecLitigePeer::DATE_REJET;
            }
        } // if either are not null


        return $this;
    } // setDateRejet()

    /**
     * Set the value of [id_agent_rejet] column.
     * 
     * @param int $v new value
     * @return CommonExecLitige The current object (for fluent API support)
     */
    public function setIdAgentRejet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_rejet !== $v) {
            $this->id_agent_rejet = $v;
            $this->modifiedColumns[] = CommonExecLitigePeer::ID_AGENT_REJET;
        }


        return $this;
    } // setIdAgentRejet()

    /**
     * Set the value of [commentaire] column.
     * 
     * @param string $v new value
     * @return CommonExecLitige The current object (for fluent API support)
     */
    public function setCommentaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commentaire !== $v) {
            $this->commentaire = $v;
            $this->modifiedColumns[] = CommonExecLitigePeer::COMMENTAIRE;
        }


        return $this;
    } // setCommentaire()

    /**
     * Set the value of [id_agent_crea] column.
     * 
     * @param int $v new value
     * @return CommonExecLitige The current object (for fluent API support)
     */
    public function setIdAgentCrea($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_crea !== $v) {
            $this->id_agent_crea = $v;
            $this->modifiedColumns[] = CommonExecLitigePeer::ID_AGENT_CREA;
        }


        return $this;
    } // setIdAgentCrea()

    /**
     * Sets the value of [date_crea] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecLitige The current object (for fluent API support)
     */
    public function setDateCrea($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_crea !== null || $dt !== null) {
            $currentDateAsString = ($this->date_crea !== null && $tmpDt = new DateTime($this->date_crea)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_crea = $newDateAsString;
                $this->modifiedColumns[] = CommonExecLitigePeer::DATE_CREA;
            }
        } // if either are not null


        return $this;
    } // setDateCrea()

    /**
     * Sets the value of the [cloture] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * 
     * @param boolean|integer|string $v The new value
     * @return CommonExecLitige The current object (for fluent API support)
     */
    public function setCloture($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->cloture !== $v) {
            $this->cloture = $v;
            $this->modifiedColumns[] = CommonExecLitigePeer::CLOTURE;
        }


        return $this;
    } // setCloture()

    /**
     * Sets the value of the [etat] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * 
     * @param boolean|integer|string $v The new value
     * @return CommonExecLitige The current object (for fluent API support)
     */
    public function setEtat($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->etat !== $v) {
            $this->etat = $v;
            $this->modifiedColumns[] = CommonExecLitigePeer::ETAT;
        }


        return $this;
    } // setEtat()

    /**
     * Set the value of [decision] column.
     * 
     * @param string $v new value
     * @return CommonExecLitige The current object (for fluent API support)
     */
    public function setDecision($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->decision !== $v) {
            $this->decision = $v;
            $this->modifiedColumns[] = CommonExecLitigePeer::DECISION;
        }


        return $this;
    } // setDecision()

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
            if ($this->cloture !== false) {
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
            $this->numero = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->id_contrat = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->id_contractant = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->statut = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->date_declaration = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->date_validation = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->id_agent_validation = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->date_rejet = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->id_agent_rejet = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->commentaire = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->id_agent_crea = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->date_crea = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->cloture = ($row[$startcol + 13] !== null) ? (boolean) $row[$startcol + 13] : null;
            $this->etat = ($row[$startcol + 14] !== null) ? (boolean) $row[$startcol + 14] : null;
            $this->decision = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 16; // 16 = CommonExecLitigePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonExecLitige object", $e);
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
            $con = Propel::getConnection(CommonExecLitigePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonExecLitigePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonExecLitigePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonExecLitigeQuery::create()
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
            $con = Propel::getConnection(CommonExecLitigePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonExecLitigePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonExecLitigePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonExecLitigePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonExecLitigePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonExecLitigePeer::NUMERO)) {
            $modifiedColumns[':p' . $index++]  = '`numero`';
        }
        if ($this->isColumnModified(CommonExecLitigePeer::ID_CONTRAT)) {
            $modifiedColumns[':p' . $index++]  = '`id_contrat`';
        }
        if ($this->isColumnModified(CommonExecLitigePeer::ID_CONTRACTANT)) {
            $modifiedColumns[':p' . $index++]  = '`id_contractant`';
        }
        if ($this->isColumnModified(CommonExecLitigePeer::STATUT)) {
            $modifiedColumns[':p' . $index++]  = '`statut`';
        }
        if ($this->isColumnModified(CommonExecLitigePeer::DATE_DECLARATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_declaration`';
        }
        if ($this->isColumnModified(CommonExecLitigePeer::DATE_VALIDATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_validation`';
        }
        if ($this->isColumnModified(CommonExecLitigePeer::ID_AGENT_VALIDATION)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent_validation`';
        }
        if ($this->isColumnModified(CommonExecLitigePeer::DATE_REJET)) {
            $modifiedColumns[':p' . $index++]  = '`date_rejet`';
        }
        if ($this->isColumnModified(CommonExecLitigePeer::ID_AGENT_REJET)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent_rejet`';
        }
        if ($this->isColumnModified(CommonExecLitigePeer::COMMENTAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`commentaire`';
        }
        if ($this->isColumnModified(CommonExecLitigePeer::ID_AGENT_CREA)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent_crea`';
        }
        if ($this->isColumnModified(CommonExecLitigePeer::DATE_CREA)) {
            $modifiedColumns[':p' . $index++]  = '`date_crea`';
        }
        if ($this->isColumnModified(CommonExecLitigePeer::CLOTURE)) {
            $modifiedColumns[':p' . $index++]  = '`cloture`';
        }
        if ($this->isColumnModified(CommonExecLitigePeer::ETAT)) {
            $modifiedColumns[':p' . $index++]  = '`etat`';
        }
        if ($this->isColumnModified(CommonExecLitigePeer::DECISION)) {
            $modifiedColumns[':p' . $index++]  = '`decision`';
        }

        $sql = sprintf(
            'INSERT INTO `exec_litige` (%s) VALUES (%s)',
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
                    case '`numero`':						
                        $stmt->bindValue($identifier, $this->numero, PDO::PARAM_STR);
                        break;
                    case '`id_contrat`':						
                        $stmt->bindValue($identifier, $this->id_contrat, PDO::PARAM_INT);
                        break;
                    case '`id_contractant`':						
                        $stmt->bindValue($identifier, $this->id_contractant, PDO::PARAM_INT);
                        break;
                    case '`statut`':						
                        $stmt->bindValue($identifier, $this->statut, PDO::PARAM_INT);
                        break;
                    case '`date_declaration`':						
                        $stmt->bindValue($identifier, $this->date_declaration, PDO::PARAM_STR);
                        break;
                    case '`date_validation`':						
                        $stmt->bindValue($identifier, $this->date_validation, PDO::PARAM_STR);
                        break;
                    case '`id_agent_validation`':						
                        $stmt->bindValue($identifier, $this->id_agent_validation, PDO::PARAM_INT);
                        break;
                    case '`date_rejet`':						
                        $stmt->bindValue($identifier, $this->date_rejet, PDO::PARAM_STR);
                        break;
                    case '`id_agent_rejet`':						
                        $stmt->bindValue($identifier, $this->id_agent_rejet, PDO::PARAM_INT);
                        break;
                    case '`commentaire`':						
                        $stmt->bindValue($identifier, $this->commentaire, PDO::PARAM_STR);
                        break;
                    case '`id_agent_crea`':						
                        $stmt->bindValue($identifier, $this->id_agent_crea, PDO::PARAM_INT);
                        break;
                    case '`date_crea`':						
                        $stmt->bindValue($identifier, $this->date_crea, PDO::PARAM_STR);
                        break;
                    case '`cloture`':
                        $stmt->bindValue($identifier, (int) $this->cloture, PDO::PARAM_INT);
                        break;
                    case '`etat`':
                        $stmt->bindValue($identifier, (int) $this->etat, PDO::PARAM_INT);
                        break;
                    case '`decision`':						
                        $stmt->bindValue($identifier, $this->decision, PDO::PARAM_STR);
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


            if (($retval = CommonExecLitigePeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonExecLitigePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getNumero();
                break;
            case 2:
                return $this->getIdContrat();
                break;
            case 3:
                return $this->getIdContractant();
                break;
            case 4:
                return $this->getStatut();
                break;
            case 5:
                return $this->getDateDeclaration();
                break;
            case 6:
                return $this->getDateValidation();
                break;
            case 7:
                return $this->getIdAgentValidation();
                break;
            case 8:
                return $this->getDateRejet();
                break;
            case 9:
                return $this->getIdAgentRejet();
                break;
            case 10:
                return $this->getCommentaire();
                break;
            case 11:
                return $this->getIdAgentCrea();
                break;
            case 12:
                return $this->getDateCrea();
                break;
            case 13:
                return $this->getCloture();
                break;
            case 14:
                return $this->getEtat();
                break;
            case 15:
                return $this->getDecision();
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
        if (isset($alreadyDumpedObjects['CommonExecLitige'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonExecLitige'][$this->getPrimaryKey()] = true;
        $keys = CommonExecLitigePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getNumero(),
            $keys[2] => $this->getIdContrat(),
            $keys[3] => $this->getIdContractant(),
            $keys[4] => $this->getStatut(),
            $keys[5] => $this->getDateDeclaration(),
            $keys[6] => $this->getDateValidation(),
            $keys[7] => $this->getIdAgentValidation(),
            $keys[8] => $this->getDateRejet(),
            $keys[9] => $this->getIdAgentRejet(),
            $keys[10] => $this->getCommentaire(),
            $keys[11] => $this->getIdAgentCrea(),
            $keys[12] => $this->getDateCrea(),
            $keys[13] => $this->getCloture(),
            $keys[14] => $this->getEtat(),
            $keys[15] => $this->getDecision(),
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
        $pos = CommonExecLitigePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setNumero($value);
                break;
            case 2:
                $this->setIdContrat($value);
                break;
            case 3:
                $this->setIdContractant($value);
                break;
            case 4:
                $this->setStatut($value);
                break;
            case 5:
                $this->setDateDeclaration($value);
                break;
            case 6:
                $this->setDateValidation($value);
                break;
            case 7:
                $this->setIdAgentValidation($value);
                break;
            case 8:
                $this->setDateRejet($value);
                break;
            case 9:
                $this->setIdAgentRejet($value);
                break;
            case 10:
                $this->setCommentaire($value);
                break;
            case 11:
                $this->setIdAgentCrea($value);
                break;
            case 12:
                $this->setDateCrea($value);
                break;
            case 13:
                $this->setCloture($value);
                break;
            case 14:
                $this->setEtat($value);
                break;
            case 15:
                $this->setDecision($value);
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
        $keys = CommonExecLitigePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setNumero($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdContrat($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdContractant($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setStatut($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setDateDeclaration($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setDateValidation($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setIdAgentValidation($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setDateRejet($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setIdAgentRejet($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setCommentaire($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setIdAgentCrea($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setDateCrea($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setCloture($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setEtat($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setDecision($arr[$keys[15]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonExecLitigePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonExecLitigePeer::ID)) $criteria->add(CommonExecLitigePeer::ID, $this->id);
        if ($this->isColumnModified(CommonExecLitigePeer::NUMERO)) $criteria->add(CommonExecLitigePeer::NUMERO, $this->numero);
        if ($this->isColumnModified(CommonExecLitigePeer::ID_CONTRAT)) $criteria->add(CommonExecLitigePeer::ID_CONTRAT, $this->id_contrat);
        if ($this->isColumnModified(CommonExecLitigePeer::ID_CONTRACTANT)) $criteria->add(CommonExecLitigePeer::ID_CONTRACTANT, $this->id_contractant);
        if ($this->isColumnModified(CommonExecLitigePeer::STATUT)) $criteria->add(CommonExecLitigePeer::STATUT, $this->statut);
        if ($this->isColumnModified(CommonExecLitigePeer::DATE_DECLARATION)) $criteria->add(CommonExecLitigePeer::DATE_DECLARATION, $this->date_declaration);
        if ($this->isColumnModified(CommonExecLitigePeer::DATE_VALIDATION)) $criteria->add(CommonExecLitigePeer::DATE_VALIDATION, $this->date_validation);
        if ($this->isColumnModified(CommonExecLitigePeer::ID_AGENT_VALIDATION)) $criteria->add(CommonExecLitigePeer::ID_AGENT_VALIDATION, $this->id_agent_validation);
        if ($this->isColumnModified(CommonExecLitigePeer::DATE_REJET)) $criteria->add(CommonExecLitigePeer::DATE_REJET, $this->date_rejet);
        if ($this->isColumnModified(CommonExecLitigePeer::ID_AGENT_REJET)) $criteria->add(CommonExecLitigePeer::ID_AGENT_REJET, $this->id_agent_rejet);
        if ($this->isColumnModified(CommonExecLitigePeer::COMMENTAIRE)) $criteria->add(CommonExecLitigePeer::COMMENTAIRE, $this->commentaire);
        if ($this->isColumnModified(CommonExecLitigePeer::ID_AGENT_CREA)) $criteria->add(CommonExecLitigePeer::ID_AGENT_CREA, $this->id_agent_crea);
        if ($this->isColumnModified(CommonExecLitigePeer::DATE_CREA)) $criteria->add(CommonExecLitigePeer::DATE_CREA, $this->date_crea);
        if ($this->isColumnModified(CommonExecLitigePeer::CLOTURE)) $criteria->add(CommonExecLitigePeer::CLOTURE, $this->cloture);
        if ($this->isColumnModified(CommonExecLitigePeer::ETAT)) $criteria->add(CommonExecLitigePeer::ETAT, $this->etat);
        if ($this->isColumnModified(CommonExecLitigePeer::DECISION)) $criteria->add(CommonExecLitigePeer::DECISION, $this->decision);

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
        $criteria = new Criteria(CommonExecLitigePeer::DATABASE_NAME);
        $criteria->add(CommonExecLitigePeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonExecLitige (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setNumero($this->getNumero());
        $copyObj->setIdContrat($this->getIdContrat());
        $copyObj->setIdContractant($this->getIdContractant());
        $copyObj->setStatut($this->getStatut());
        $copyObj->setDateDeclaration($this->getDateDeclaration());
        $copyObj->setDateValidation($this->getDateValidation());
        $copyObj->setIdAgentValidation($this->getIdAgentValidation());
        $copyObj->setDateRejet($this->getDateRejet());
        $copyObj->setIdAgentRejet($this->getIdAgentRejet());
        $copyObj->setCommentaire($this->getCommentaire());
        $copyObj->setIdAgentCrea($this->getIdAgentCrea());
        $copyObj->setDateCrea($this->getDateCrea());
        $copyObj->setCloture($this->getCloture());
        $copyObj->setEtat($this->getEtat());
        $copyObj->setDecision($this->getDecision());
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
     * @return CommonExecLitige Clone of current object.
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
     * @return CommonExecLitigePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonExecLitigePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->numero = null;
        $this->id_contrat = null;
        $this->id_contractant = null;
        $this->statut = null;
        $this->date_declaration = null;
        $this->date_validation = null;
        $this->id_agent_validation = null;
        $this->date_rejet = null;
        $this->id_agent_rejet = null;
        $this->commentaire = null;
        $this->id_agent_crea = null;
        $this->date_crea = null;
        $this->cloture = null;
        $this->etat = null;
        $this->decision = null;
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
        return (string) $this->exportTo(CommonExecLitigePeer::DEFAULT_STRING_FORMAT);
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
