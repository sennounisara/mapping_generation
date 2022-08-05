<?php


/**
 * Base class that represents a row from the 'exec_reception' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonExecReception extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonExecReceptionPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonExecReceptionPeer
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
     * The value for the intitule field.
     * @var        string
     */
    protected $intitule;

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
     * The value for the date_reception field.
     * @var        string
     */
    protected $date_reception;

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
     * The value for the origine_piece field.
     * @var        int
     */
    protected $origine_piece;

    /**
     * The value for the numero_workflow field.
     * @var        string
     */
    protected $numero_workflow;

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
     * The value for the motif_rejet field.
     * @var        string
     */
    protected $motif_rejet;

    /**
     * The value for the origine field.
     * @var        boolean
     */
    protected $origine;

    /**
     * The value for the id_facture field.
     * @var        int
     */
    protected $id_facture;

    /**
     * The value for the id_pv_reception field.
     * @var        int
     */
    protected $id_pv_reception;

    /**
     * The value for the accepte field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $accepte;

    /**
     * @var        CommonExecFacture
     */
    protected $aCommonExecFacture;

    /**
     * @var        PropelObjectCollection|CommonExecLitigeReception[] Collection to store aggregation of CommonExecLitigeReception objects.
     */
    protected $collCommonExecLitigeReceptionsRelatedByIdReception;
    protected $collCommonExecLitigeReceptionsRelatedByIdReceptionPartial;

    /**
     * @var        PropelObjectCollection|CommonExecLitigeReception[] Collection to store aggregation of CommonExecLitigeReception objects.
     */
    protected $collCommonExecLitigeReceptionsRelatedByIdReception;
    protected $collCommonExecLitigeReceptionsRelatedByIdReceptionPartial;

    /**
     * @var        PropelObjectCollection|CommonExecReceptionPrix[] Collection to store aggregation of CommonExecReceptionPrix objects.
     */
    protected $collCommonExecReceptionPrixs;
    protected $collCommonExecReceptionPrixsPartial;

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
    protected $commonExecLitigeReceptionsRelatedByIdReceptionScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecLitigeReceptionsRelatedByIdReceptionScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecReceptionPrixsScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->accepte = false;
    }

    /**
     * Initializes internal state of BaseCommonExecReception object.
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
     * Get the [intitule] column value.
     * 
     * @return string
     */
    public function getIntitule()
    {

        return $this->intitule;
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
     * Get the [optionally formatted] temporal [date_reception] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateReception($format = 'Y-m-d H:i:s')
    {
        if ($this->date_reception === null) {
            return null;
        }

        if ($this->date_reception === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_reception);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_reception, true), $x);
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
     * Get the [origine_piece] column value.
     * 
     * @return int
     */
    public function getOriginePiece()
    {

        return $this->origine_piece;
    }

    /**
     * Get the [numero_workflow] column value.
     * 
     * @return string
     */
    public function getNumeroWorkflow()
    {

        return $this->numero_workflow;
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
     * Get the [motif_rejet] column value.
     * 
     * @return string
     */
    public function getMotifRejet()
    {

        return $this->motif_rejet;
    }

    /**
     * Get the [origine] column value.
     * 
     * @return boolean
     */
    public function getOrigine()
    {

        return $this->origine;
    }

    /**
     * Get the [id_facture] column value.
     * 
     * @return int
     */
    public function getIdFacture()
    {

        return $this->id_facture;
    }

    /**
     * Get the [id_pv_reception] column value.
     * 
     * @return int
     */
    public function getIdPvReception()
    {

        return $this->id_pv_reception;
    }

    /**
     * Get the [accepte] column value.
     * 
     * @return boolean
     */
    public function getAccepte()
    {

        return $this->accepte;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonExecReception The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonExecReceptionPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [intitule] column.
     * 
     * @param string $v new value
     * @return CommonExecReception The current object (for fluent API support)
     */
    public function setIntitule($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->intitule !== $v) {
            $this->intitule = $v;
            $this->modifiedColumns[] = CommonExecReceptionPeer::INTITULE;
        }


        return $this;
    } // setIntitule()

    /**
     * Set the value of [numero] column.
     * 
     * @param string $v new value
     * @return CommonExecReception The current object (for fluent API support)
     */
    public function setNumero($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->numero !== $v) {
            $this->numero = $v;
            $this->modifiedColumns[] = CommonExecReceptionPeer::NUMERO;
        }


        return $this;
    } // setNumero()

    /**
     * Set the value of [id_contrat] column.
     * 
     * @param int $v new value
     * @return CommonExecReception The current object (for fluent API support)
     */
    public function setIdContrat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_contrat !== $v) {
            $this->id_contrat = $v;
            $this->modifiedColumns[] = CommonExecReceptionPeer::ID_CONTRAT;
        }


        return $this;
    } // setIdContrat()

    /**
     * Set the value of [id_contractant] column.
     * 
     * @param int $v new value
     * @return CommonExecReception The current object (for fluent API support)
     */
    public function setIdContractant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_contractant !== $v) {
            $this->id_contractant = $v;
            $this->modifiedColumns[] = CommonExecReceptionPeer::ID_CONTRACTANT;
        }


        return $this;
    } // setIdContractant()

    /**
     * Set the value of [statut] column.
     * 
     * @param int $v new value
     * @return CommonExecReception The current object (for fluent API support)
     */
    public function setStatut($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->statut !== $v) {
            $this->statut = $v;
            $this->modifiedColumns[] = CommonExecReceptionPeer::STATUT;
        }


        return $this;
    } // setStatut()

    /**
     * Sets the value of [date_reception] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecReception The current object (for fluent API support)
     */
    public function setDateReception($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_reception !== null || $dt !== null) {
            $currentDateAsString = ($this->date_reception !== null && $tmpDt = new DateTime($this->date_reception)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_reception = $newDateAsString;
                $this->modifiedColumns[] = CommonExecReceptionPeer::DATE_RECEPTION;
            }
        } // if either are not null


        return $this;
    } // setDateReception()

    /**
     * Sets the value of [date_validation] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecReception The current object (for fluent API support)
     */
    public function setDateValidation($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_validation !== null || $dt !== null) {
            $currentDateAsString = ($this->date_validation !== null && $tmpDt = new DateTime($this->date_validation)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_validation = $newDateAsString;
                $this->modifiedColumns[] = CommonExecReceptionPeer::DATE_VALIDATION;
            }
        } // if either are not null


        return $this;
    } // setDateValidation()

    /**
     * Set the value of [id_agent_validation] column.
     * 
     * @param int $v new value
     * @return CommonExecReception The current object (for fluent API support)
     */
    public function setIdAgentValidation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_validation !== $v) {
            $this->id_agent_validation = $v;
            $this->modifiedColumns[] = CommonExecReceptionPeer::ID_AGENT_VALIDATION;
        }


        return $this;
    } // setIdAgentValidation()

    /**
     * Sets the value of [date_rejet] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecReception The current object (for fluent API support)
     */
    public function setDateRejet($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_rejet !== null || $dt !== null) {
            $currentDateAsString = ($this->date_rejet !== null && $tmpDt = new DateTime($this->date_rejet)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_rejet = $newDateAsString;
                $this->modifiedColumns[] = CommonExecReceptionPeer::DATE_REJET;
            }
        } // if either are not null


        return $this;
    } // setDateRejet()

    /**
     * Set the value of [id_agent_rejet] column.
     * 
     * @param int $v new value
     * @return CommonExecReception The current object (for fluent API support)
     */
    public function setIdAgentRejet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_rejet !== $v) {
            $this->id_agent_rejet = $v;
            $this->modifiedColumns[] = CommonExecReceptionPeer::ID_AGENT_REJET;
        }


        return $this;
    } // setIdAgentRejet()

    /**
     * Set the value of [commentaire] column.
     * 
     * @param string $v new value
     * @return CommonExecReception The current object (for fluent API support)
     */
    public function setCommentaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commentaire !== $v) {
            $this->commentaire = $v;
            $this->modifiedColumns[] = CommonExecReceptionPeer::COMMENTAIRE;
        }


        return $this;
    } // setCommentaire()

    /**
     * Set the value of [origine_piece] column.
     * 
     * @param int $v new value
     * @return CommonExecReception The current object (for fluent API support)
     */
    public function setOriginePiece($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->origine_piece !== $v) {
            $this->origine_piece = $v;
            $this->modifiedColumns[] = CommonExecReceptionPeer::ORIGINE_PIECE;
        }


        return $this;
    } // setOriginePiece()

    /**
     * Set the value of [numero_workflow] column.
     * 
     * @param string $v new value
     * @return CommonExecReception The current object (for fluent API support)
     */
    public function setNumeroWorkflow($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->numero_workflow !== $v) {
            $this->numero_workflow = $v;
            $this->modifiedColumns[] = CommonExecReceptionPeer::NUMERO_WORKFLOW;
        }


        return $this;
    } // setNumeroWorkflow()

    /**
     * Set the value of [id_agent_crea] column.
     * 
     * @param int $v new value
     * @return CommonExecReception The current object (for fluent API support)
     */
    public function setIdAgentCrea($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_crea !== $v) {
            $this->id_agent_crea = $v;
            $this->modifiedColumns[] = CommonExecReceptionPeer::ID_AGENT_CREA;
        }


        return $this;
    } // setIdAgentCrea()

    /**
     * Sets the value of [date_crea] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonExecReception The current object (for fluent API support)
     */
    public function setDateCrea($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_crea !== null || $dt !== null) {
            $currentDateAsString = ($this->date_crea !== null && $tmpDt = new DateTime($this->date_crea)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_crea = $newDateAsString;
                $this->modifiedColumns[] = CommonExecReceptionPeer::DATE_CREA;
            }
        } // if either are not null


        return $this;
    } // setDateCrea()

    /**
     * Set the value of [motif_rejet] column.
     * 
     * @param string $v new value
     * @return CommonExecReception The current object (for fluent API support)
     */
    public function setMotifRejet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->motif_rejet !== $v) {
            $this->motif_rejet = $v;
            $this->modifiedColumns[] = CommonExecReceptionPeer::MOTIF_REJET;
        }


        return $this;
    } // setMotifRejet()

    /**
     * Sets the value of the [origine] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * 
     * @param boolean|integer|string $v The new value
     * @return CommonExecReception The current object (for fluent API support)
     */
    public function setOrigine($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->origine !== $v) {
            $this->origine = $v;
            $this->modifiedColumns[] = CommonExecReceptionPeer::ORIGINE;
        }


        return $this;
    } // setOrigine()

    /**
     * Set the value of [id_facture] column.
     * 
     * @param int $v new value
     * @return CommonExecReception The current object (for fluent API support)
     */
    public function setIdFacture($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_facture !== $v) {
            $this->id_facture = $v;
            $this->modifiedColumns[] = CommonExecReceptionPeer::ID_FACTURE;
        }

        if ($this->aCommonExecFacture !== null && $this->aCommonExecFacture->getId() !== $v) {
            $this->aCommonExecFacture = null;
        }


        return $this;
    } // setIdFacture()

    /**
     * Set the value of [id_pv_reception] column.
     * 
     * @param int $v new value
     * @return CommonExecReception The current object (for fluent API support)
     */
    public function setIdPvReception($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_pv_reception !== $v) {
            $this->id_pv_reception = $v;
            $this->modifiedColumns[] = CommonExecReceptionPeer::ID_PV_RECEPTION;
        }


        return $this;
    } // setIdPvReception()

    /**
     * Sets the value of the [accepte] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * 
     * @param boolean|integer|string $v The new value
     * @return CommonExecReception The current object (for fluent API support)
     */
    public function setAccepte($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->accepte !== $v) {
            $this->accepte = $v;
            $this->modifiedColumns[] = CommonExecReceptionPeer::ACCEPTE;
        }


        return $this;
    } // setAccepte()

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
            if ($this->accepte !== false) {
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
            $this->intitule = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->numero = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->id_contrat = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->id_contractant = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->statut = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->date_reception = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->date_validation = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->id_agent_validation = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->date_rejet = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->id_agent_rejet = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->commentaire = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->origine_piece = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->numero_workflow = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->id_agent_crea = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->date_crea = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->motif_rejet = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->origine = ($row[$startcol + 17] !== null) ? (boolean) $row[$startcol + 17] : null;
            $this->id_facture = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->id_pv_reception = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
            $this->accepte = ($row[$startcol + 20] !== null) ? (boolean) $row[$startcol + 20] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 21; // 21 = CommonExecReceptionPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonExecReception object", $e);
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

        if ($this->aCommonExecFacture !== null && $this->id_facture !== $this->aCommonExecFacture->getId()) {
            $this->aCommonExecFacture = null;
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
            $con = Propel::getConnection(CommonExecReceptionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonExecReceptionPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonExecFacture = null;
            $this->collCommonExecLitigeReceptionsRelatedByIdReception = null;

            $this->collCommonExecLitigeReceptionsRelatedByIdReception = null;

            $this->collCommonExecReceptionPrixs = null;

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
            $con = Propel::getConnection(CommonExecReceptionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonExecReceptionQuery::create()
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
            $con = Propel::getConnection(CommonExecReceptionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonExecReceptionPeer::addInstanceToPool($this);
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

            if ($this->aCommonExecFacture !== null) {
                if ($this->aCommonExecFacture->isModified() || $this->aCommonExecFacture->isNew()) {
                    $affectedRows += $this->aCommonExecFacture->save($con);
                }
                $this->setCommonExecFacture($this->aCommonExecFacture);
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

            if ($this->commonExecLitigeReceptionsRelatedByIdReceptionScheduledForDeletion !== null) {
                if (!$this->commonExecLitigeReceptionsRelatedByIdReceptionScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecLitigeReceptionsRelatedByIdReceptionScheduledForDeletion as $commonExecLitigeReceptionRelatedByIdReception) {
                        // need to save related object because we set the relation to null
                        $commonExecLitigeReceptionRelatedByIdReception->save($con);
                    }
                    $this->commonExecLitigeReceptionsRelatedByIdReceptionScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecLitigeReceptionsRelatedByIdReception !== null) {
                foreach ($this->collCommonExecLitigeReceptionsRelatedByIdReception as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecLitigeReceptionsRelatedByIdReceptionScheduledForDeletion !== null) {
                if (!$this->commonExecLitigeReceptionsRelatedByIdReceptionScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecLitigeReceptionsRelatedByIdReceptionScheduledForDeletion as $commonExecLitigeReceptionRelatedByIdReception) {
                        // need to save related object because we set the relation to null
                        $commonExecLitigeReceptionRelatedByIdReception->save($con);
                    }
                    $this->commonExecLitigeReceptionsRelatedByIdReceptionScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecLitigeReceptionsRelatedByIdReception !== null) {
                foreach ($this->collCommonExecLitigeReceptionsRelatedByIdReception as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecReceptionPrixsScheduledForDeletion !== null) {
                if (!$this->commonExecReceptionPrixsScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecReceptionPrixsScheduledForDeletion as $commonExecReceptionPrix) {
                        // need to save related object because we set the relation to null
                        $commonExecReceptionPrix->save($con);
                    }
                    $this->commonExecReceptionPrixsScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecReceptionPrixs !== null) {
                foreach ($this->collCommonExecReceptionPrixs as $referrerFK) {
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

        $this->modifiedColumns[] = CommonExecReceptionPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonExecReceptionPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonExecReceptionPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonExecReceptionPeer::INTITULE)) {
            $modifiedColumns[':p' . $index++]  = '`intitule`';
        }
        if ($this->isColumnModified(CommonExecReceptionPeer::NUMERO)) {
            $modifiedColumns[':p' . $index++]  = '`numero`';
        }
        if ($this->isColumnModified(CommonExecReceptionPeer::ID_CONTRAT)) {
            $modifiedColumns[':p' . $index++]  = '`id_contrat`';
        }
        if ($this->isColumnModified(CommonExecReceptionPeer::ID_CONTRACTANT)) {
            $modifiedColumns[':p' . $index++]  = '`id_contractant`';
        }
        if ($this->isColumnModified(CommonExecReceptionPeer::STATUT)) {
            $modifiedColumns[':p' . $index++]  = '`statut`';
        }
        if ($this->isColumnModified(CommonExecReceptionPeer::DATE_RECEPTION)) {
            $modifiedColumns[':p' . $index++]  = '`date_reception`';
        }
        if ($this->isColumnModified(CommonExecReceptionPeer::DATE_VALIDATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_validation`';
        }
        if ($this->isColumnModified(CommonExecReceptionPeer::ID_AGENT_VALIDATION)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent_validation`';
        }
        if ($this->isColumnModified(CommonExecReceptionPeer::DATE_REJET)) {
            $modifiedColumns[':p' . $index++]  = '`date_rejet`';
        }
        if ($this->isColumnModified(CommonExecReceptionPeer::ID_AGENT_REJET)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent_rejet`';
        }
        if ($this->isColumnModified(CommonExecReceptionPeer::COMMENTAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`commentaire`';
        }
        if ($this->isColumnModified(CommonExecReceptionPeer::ORIGINE_PIECE)) {
            $modifiedColumns[':p' . $index++]  = '`origine_piece`';
        }
        if ($this->isColumnModified(CommonExecReceptionPeer::NUMERO_WORKFLOW)) {
            $modifiedColumns[':p' . $index++]  = '`numero_workflow`';
        }
        if ($this->isColumnModified(CommonExecReceptionPeer::ID_AGENT_CREA)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent_crea`';
        }
        if ($this->isColumnModified(CommonExecReceptionPeer::DATE_CREA)) {
            $modifiedColumns[':p' . $index++]  = '`date_crea`';
        }
        if ($this->isColumnModified(CommonExecReceptionPeer::MOTIF_REJET)) {
            $modifiedColumns[':p' . $index++]  = '`motif_rejet`';
        }
        if ($this->isColumnModified(CommonExecReceptionPeer::ORIGINE)) {
            $modifiedColumns[':p' . $index++]  = '`origine`';
        }
        if ($this->isColumnModified(CommonExecReceptionPeer::ID_FACTURE)) {
            $modifiedColumns[':p' . $index++]  = '`id_facture`';
        }
        if ($this->isColumnModified(CommonExecReceptionPeer::ID_PV_RECEPTION)) {
            $modifiedColumns[':p' . $index++]  = '`id_pv_reception`';
        }
        if ($this->isColumnModified(CommonExecReceptionPeer::ACCEPTE)) {
            $modifiedColumns[':p' . $index++]  = '`accepte`';
        }

        $sql = sprintf(
            'INSERT INTO `exec_reception` (%s) VALUES (%s)',
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
                    case '`intitule`':						
                        $stmt->bindValue($identifier, $this->intitule, PDO::PARAM_STR);
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
                    case '`date_reception`':						
                        $stmt->bindValue($identifier, $this->date_reception, PDO::PARAM_STR);
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
                    case '`origine_piece`':						
                        $stmt->bindValue($identifier, $this->origine_piece, PDO::PARAM_INT);
                        break;
                    case '`numero_workflow`':						
                        $stmt->bindValue($identifier, $this->numero_workflow, PDO::PARAM_STR);
                        break;
                    case '`id_agent_crea`':						
                        $stmt->bindValue($identifier, $this->id_agent_crea, PDO::PARAM_INT);
                        break;
                    case '`date_crea`':						
                        $stmt->bindValue($identifier, $this->date_crea, PDO::PARAM_STR);
                        break;
                    case '`motif_rejet`':						
                        $stmt->bindValue($identifier, $this->motif_rejet, PDO::PARAM_STR);
                        break;
                    case '`origine`':
                        $stmt->bindValue($identifier, (int) $this->origine, PDO::PARAM_INT);
                        break;
                    case '`id_facture`':						
                        $stmt->bindValue($identifier, $this->id_facture, PDO::PARAM_INT);
                        break;
                    case '`id_pv_reception`':						
                        $stmt->bindValue($identifier, $this->id_pv_reception, PDO::PARAM_INT);
                        break;
                    case '`accepte`':
                        $stmt->bindValue($identifier, (int) $this->accepte, PDO::PARAM_INT);
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

            if ($this->aCommonExecFacture !== null) {
                if (!$this->aCommonExecFacture->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonExecFacture->getValidationFailures());
                }
            }


            if (($retval = CommonExecReceptionPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCommonExecLitigeReceptionsRelatedByIdReception !== null) {
                    foreach ($this->collCommonExecLitigeReceptionsRelatedByIdReception as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecLitigeReceptionsRelatedByIdReception !== null) {
                    foreach ($this->collCommonExecLitigeReceptionsRelatedByIdReception as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecReceptionPrixs !== null) {
                    foreach ($this->collCommonExecReceptionPrixs as $referrerFK) {
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
        $pos = CommonExecReceptionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIntitule();
                break;
            case 2:
                return $this->getNumero();
                break;
            case 3:
                return $this->getIdContrat();
                break;
            case 4:
                return $this->getIdContractant();
                break;
            case 5:
                return $this->getStatut();
                break;
            case 6:
                return $this->getDateReception();
                break;
            case 7:
                return $this->getDateValidation();
                break;
            case 8:
                return $this->getIdAgentValidation();
                break;
            case 9:
                return $this->getDateRejet();
                break;
            case 10:
                return $this->getIdAgentRejet();
                break;
            case 11:
                return $this->getCommentaire();
                break;
            case 12:
                return $this->getOriginePiece();
                break;
            case 13:
                return $this->getNumeroWorkflow();
                break;
            case 14:
                return $this->getIdAgentCrea();
                break;
            case 15:
                return $this->getDateCrea();
                break;
            case 16:
                return $this->getMotifRejet();
                break;
            case 17:
                return $this->getOrigine();
                break;
            case 18:
                return $this->getIdFacture();
                break;
            case 19:
                return $this->getIdPvReception();
                break;
            case 20:
                return $this->getAccepte();
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
        if (isset($alreadyDumpedObjects['CommonExecReception'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonExecReception'][$this->getPrimaryKey()] = true;
        $keys = CommonExecReceptionPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getIntitule(),
            $keys[2] => $this->getNumero(),
            $keys[3] => $this->getIdContrat(),
            $keys[4] => $this->getIdContractant(),
            $keys[5] => $this->getStatut(),
            $keys[6] => $this->getDateReception(),
            $keys[7] => $this->getDateValidation(),
            $keys[8] => $this->getIdAgentValidation(),
            $keys[9] => $this->getDateRejet(),
            $keys[10] => $this->getIdAgentRejet(),
            $keys[11] => $this->getCommentaire(),
            $keys[12] => $this->getOriginePiece(),
            $keys[13] => $this->getNumeroWorkflow(),
            $keys[14] => $this->getIdAgentCrea(),
            $keys[15] => $this->getDateCrea(),
            $keys[16] => $this->getMotifRejet(),
            $keys[17] => $this->getOrigine(),
            $keys[18] => $this->getIdFacture(),
            $keys[19] => $this->getIdPvReception(),
            $keys[20] => $this->getAccepte(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonExecFacture) {
                $result['CommonExecFacture'] = $this->aCommonExecFacture->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCommonExecLitigeReceptionsRelatedByIdReception) {
                $result['CommonExecLitigeReceptionsRelatedByIdReception'] = $this->collCommonExecLitigeReceptionsRelatedByIdReception->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecLitigeReceptionsRelatedByIdReception) {
                $result['CommonExecLitigeReceptionsRelatedByIdReception'] = $this->collCommonExecLitigeReceptionsRelatedByIdReception->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecReceptionPrixs) {
                $result['CommonExecReceptionPrixs'] = $this->collCommonExecReceptionPrixs->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CommonExecReceptionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIntitule($value);
                break;
            case 2:
                $this->setNumero($value);
                break;
            case 3:
                $this->setIdContrat($value);
                break;
            case 4:
                $this->setIdContractant($value);
                break;
            case 5:
                $this->setStatut($value);
                break;
            case 6:
                $this->setDateReception($value);
                break;
            case 7:
                $this->setDateValidation($value);
                break;
            case 8:
                $this->setIdAgentValidation($value);
                break;
            case 9:
                $this->setDateRejet($value);
                break;
            case 10:
                $this->setIdAgentRejet($value);
                break;
            case 11:
                $this->setCommentaire($value);
                break;
            case 12:
                $this->setOriginePiece($value);
                break;
            case 13:
                $this->setNumeroWorkflow($value);
                break;
            case 14:
                $this->setIdAgentCrea($value);
                break;
            case 15:
                $this->setDateCrea($value);
                break;
            case 16:
                $this->setMotifRejet($value);
                break;
            case 17:
                $this->setOrigine($value);
                break;
            case 18:
                $this->setIdFacture($value);
                break;
            case 19:
                $this->setIdPvReception($value);
                break;
            case 20:
                $this->setAccepte($value);
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
        $keys = CommonExecReceptionPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIntitule($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setNumero($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdContrat($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdContractant($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setStatut($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setDateReception($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setDateValidation($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setIdAgentValidation($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setDateRejet($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setIdAgentRejet($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setCommentaire($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setOriginePiece($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setNumeroWorkflow($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setIdAgentCrea($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setDateCrea($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setMotifRejet($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setOrigine($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setIdFacture($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setIdPvReception($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setAccepte($arr[$keys[20]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonExecReceptionPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonExecReceptionPeer::ID)) $criteria->add(CommonExecReceptionPeer::ID, $this->id);
        if ($this->isColumnModified(CommonExecReceptionPeer::INTITULE)) $criteria->add(CommonExecReceptionPeer::INTITULE, $this->intitule);
        if ($this->isColumnModified(CommonExecReceptionPeer::NUMERO)) $criteria->add(CommonExecReceptionPeer::NUMERO, $this->numero);
        if ($this->isColumnModified(CommonExecReceptionPeer::ID_CONTRAT)) $criteria->add(CommonExecReceptionPeer::ID_CONTRAT, $this->id_contrat);
        if ($this->isColumnModified(CommonExecReceptionPeer::ID_CONTRACTANT)) $criteria->add(CommonExecReceptionPeer::ID_CONTRACTANT, $this->id_contractant);
        if ($this->isColumnModified(CommonExecReceptionPeer::STATUT)) $criteria->add(CommonExecReceptionPeer::STATUT, $this->statut);
        if ($this->isColumnModified(CommonExecReceptionPeer::DATE_RECEPTION)) $criteria->add(CommonExecReceptionPeer::DATE_RECEPTION, $this->date_reception);
        if ($this->isColumnModified(CommonExecReceptionPeer::DATE_VALIDATION)) $criteria->add(CommonExecReceptionPeer::DATE_VALIDATION, $this->date_validation);
        if ($this->isColumnModified(CommonExecReceptionPeer::ID_AGENT_VALIDATION)) $criteria->add(CommonExecReceptionPeer::ID_AGENT_VALIDATION, $this->id_agent_validation);
        if ($this->isColumnModified(CommonExecReceptionPeer::DATE_REJET)) $criteria->add(CommonExecReceptionPeer::DATE_REJET, $this->date_rejet);
        if ($this->isColumnModified(CommonExecReceptionPeer::ID_AGENT_REJET)) $criteria->add(CommonExecReceptionPeer::ID_AGENT_REJET, $this->id_agent_rejet);
        if ($this->isColumnModified(CommonExecReceptionPeer::COMMENTAIRE)) $criteria->add(CommonExecReceptionPeer::COMMENTAIRE, $this->commentaire);
        if ($this->isColumnModified(CommonExecReceptionPeer::ORIGINE_PIECE)) $criteria->add(CommonExecReceptionPeer::ORIGINE_PIECE, $this->origine_piece);
        if ($this->isColumnModified(CommonExecReceptionPeer::NUMERO_WORKFLOW)) $criteria->add(CommonExecReceptionPeer::NUMERO_WORKFLOW, $this->numero_workflow);
        if ($this->isColumnModified(CommonExecReceptionPeer::ID_AGENT_CREA)) $criteria->add(CommonExecReceptionPeer::ID_AGENT_CREA, $this->id_agent_crea);
        if ($this->isColumnModified(CommonExecReceptionPeer::DATE_CREA)) $criteria->add(CommonExecReceptionPeer::DATE_CREA, $this->date_crea);
        if ($this->isColumnModified(CommonExecReceptionPeer::MOTIF_REJET)) $criteria->add(CommonExecReceptionPeer::MOTIF_REJET, $this->motif_rejet);
        if ($this->isColumnModified(CommonExecReceptionPeer::ORIGINE)) $criteria->add(CommonExecReceptionPeer::ORIGINE, $this->origine);
        if ($this->isColumnModified(CommonExecReceptionPeer::ID_FACTURE)) $criteria->add(CommonExecReceptionPeer::ID_FACTURE, $this->id_facture);
        if ($this->isColumnModified(CommonExecReceptionPeer::ID_PV_RECEPTION)) $criteria->add(CommonExecReceptionPeer::ID_PV_RECEPTION, $this->id_pv_reception);
        if ($this->isColumnModified(CommonExecReceptionPeer::ACCEPTE)) $criteria->add(CommonExecReceptionPeer::ACCEPTE, $this->accepte);

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
        $criteria = new Criteria(CommonExecReceptionPeer::DATABASE_NAME);
        $criteria->add(CommonExecReceptionPeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonExecReception (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIntitule($this->getIntitule());
        $copyObj->setNumero($this->getNumero());
        $copyObj->setIdContrat($this->getIdContrat());
        $copyObj->setIdContractant($this->getIdContractant());
        $copyObj->setStatut($this->getStatut());
        $copyObj->setDateReception($this->getDateReception());
        $copyObj->setDateValidation($this->getDateValidation());
        $copyObj->setIdAgentValidation($this->getIdAgentValidation());
        $copyObj->setDateRejet($this->getDateRejet());
        $copyObj->setIdAgentRejet($this->getIdAgentRejet());
        $copyObj->setCommentaire($this->getCommentaire());
        $copyObj->setOriginePiece($this->getOriginePiece());
        $copyObj->setNumeroWorkflow($this->getNumeroWorkflow());
        $copyObj->setIdAgentCrea($this->getIdAgentCrea());
        $copyObj->setDateCrea($this->getDateCrea());
        $copyObj->setMotifRejet($this->getMotifRejet());
        $copyObj->setOrigine($this->getOrigine());
        $copyObj->setIdFacture($this->getIdFacture());
        $copyObj->setIdPvReception($this->getIdPvReception());
        $copyObj->setAccepte($this->getAccepte());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCommonExecLitigeReceptionsRelatedByIdReception() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecLitigeReceptionRelatedByIdReception($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecLitigeReceptionsRelatedByIdReception() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecLitigeReceptionRelatedByIdReception($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecReceptionPrixs() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecReceptionPrix($relObj->copy($deepCopy));
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
     * @return CommonExecReception Clone of current object.
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
     * @return CommonExecReceptionPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonExecReceptionPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonExecFacture object.
     *
     * @param   CommonExecFacture $v
     * @return CommonExecReception The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonExecFacture(CommonExecFacture $v = null)
    {
        if ($v === null) {
            $this->setIdFacture(NULL);
        } else {
            $this->setIdFacture($v->getId());
        }

        $this->aCommonExecFacture = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonExecFacture object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonExecReception($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonExecFacture object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonExecFacture The associated CommonExecFacture object.
     * @throws PropelException
     */
    public function getCommonExecFacture(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonExecFacture === null && ($this->id_facture !== null) && $doQuery) {
            $this->aCommonExecFacture = CommonExecFactureQuery::create()->findPk($this->id_facture, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonExecFacture->addCommonExecReceptions($this);
             */
        }

        return $this->aCommonExecFacture;
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
        if ('CommonExecLitigeReceptionRelatedByIdReception' == $relationName) {
            $this->initCommonExecLitigeReceptionsRelatedByIdReception();
        }
        if ('CommonExecLitigeReceptionRelatedByIdReception' == $relationName) {
            $this->initCommonExecLitigeReceptionsRelatedByIdReception();
        }
        if ('CommonExecReceptionPrix' == $relationName) {
            $this->initCommonExecReceptionPrixs();
        }
    }

    /**
     * Clears out the collCommonExecLitigeReceptionsRelatedByIdReception collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonExecReception The current object (for fluent API support)
     * @see        addCommonExecLitigeReceptionsRelatedByIdReception()
     */
    public function clearCommonExecLitigeReceptionsRelatedByIdReception()
    {
        $this->collCommonExecLitigeReceptionsRelatedByIdReception = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecLitigeReceptionsRelatedByIdReceptionPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecLitigeReceptionsRelatedByIdReception collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecLitigeReceptionsRelatedByIdReception($v = true)
    {
        $this->collCommonExecLitigeReceptionsRelatedByIdReceptionPartial = $v;
    }

    /**
     * Initializes the collCommonExecLitigeReceptionsRelatedByIdReception collection.
     *
     * By default this just sets the collCommonExecLitigeReceptionsRelatedByIdReception collection to an empty array (like clearcollCommonExecLitigeReceptionsRelatedByIdReception());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecLitigeReceptionsRelatedByIdReception($overrideExisting = true)
    {
        if (null !== $this->collCommonExecLitigeReceptionsRelatedByIdReception && !$overrideExisting) {
            return;
        }
        $this->collCommonExecLitigeReceptionsRelatedByIdReception = new PropelObjectCollection();
        $this->collCommonExecLitigeReceptionsRelatedByIdReception->setModel('CommonExecLitigeReception');
    }

    /**
     * Gets an array of CommonExecLitigeReception objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonExecReception is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecLitigeReception[] List of CommonExecLitigeReception objects
     * @throws PropelException
     */
    public function getCommonExecLitigeReceptionsRelatedByIdReception($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecLitigeReceptionsRelatedByIdReceptionPartial && !$this->isNew();
        if (null === $this->collCommonExecLitigeReceptionsRelatedByIdReception || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecLitigeReceptionsRelatedByIdReception) {
                // return empty collection
                $this->initCommonExecLitigeReceptionsRelatedByIdReception();
            } else {
                $collCommonExecLitigeReceptionsRelatedByIdReception = CommonExecLitigeReceptionQuery::create(null, $criteria)
                    ->filterByCommonExecReceptionRelatedByIdReception($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecLitigeReceptionsRelatedByIdReceptionPartial && count($collCommonExecLitigeReceptionsRelatedByIdReception)) {
                      $this->initCommonExecLitigeReceptionsRelatedByIdReception(false);

                      foreach ($collCommonExecLitigeReceptionsRelatedByIdReception as $obj) {
                        if (false == $this->collCommonExecLitigeReceptionsRelatedByIdReception->contains($obj)) {
                          $this->collCommonExecLitigeReceptionsRelatedByIdReception->append($obj);
                        }
                      }

                      $this->collCommonExecLitigeReceptionsRelatedByIdReceptionPartial = true;
                    }

                    $collCommonExecLitigeReceptionsRelatedByIdReception->getInternalIterator()->rewind();

                    return $collCommonExecLitigeReceptionsRelatedByIdReception;
                }

                if ($partial && $this->collCommonExecLitigeReceptionsRelatedByIdReception) {
                    foreach ($this->collCommonExecLitigeReceptionsRelatedByIdReception as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecLitigeReceptionsRelatedByIdReception[] = $obj;
                        }
                    }
                }

                $this->collCommonExecLitigeReceptionsRelatedByIdReception = $collCommonExecLitigeReceptionsRelatedByIdReception;
                $this->collCommonExecLitigeReceptionsRelatedByIdReceptionPartial = false;
            }
        }

        return $this->collCommonExecLitigeReceptionsRelatedByIdReception;
    }

    /**
     * Sets a collection of CommonExecLitigeReceptionRelatedByIdReception objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecLitigeReceptionsRelatedByIdReception A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonExecReception The current object (for fluent API support)
     */
    public function setCommonExecLitigeReceptionsRelatedByIdReception(PropelCollection $commonExecLitigeReceptionsRelatedByIdReception, PropelPDO $con = null)
    {
        $commonExecLitigeReceptionsRelatedByIdReceptionToDelete = $this->getCommonExecLitigeReceptionsRelatedByIdReception(new Criteria(), $con)->diff($commonExecLitigeReceptionsRelatedByIdReception);


        $this->commonExecLitigeReceptionsRelatedByIdReceptionScheduledForDeletion = $commonExecLitigeReceptionsRelatedByIdReceptionToDelete;

        foreach ($commonExecLitigeReceptionsRelatedByIdReceptionToDelete as $commonExecLitigeReceptionRelatedByIdReceptionRemoved) {
            $commonExecLitigeReceptionRelatedByIdReceptionRemoved->setCommonExecReceptionRelatedByIdReception(null);
        }

        $this->collCommonExecLitigeReceptionsRelatedByIdReception = null;
        foreach ($commonExecLitigeReceptionsRelatedByIdReception as $commonExecLitigeReceptionRelatedByIdReception) {
            $this->addCommonExecLitigeReceptionRelatedByIdReception($commonExecLitigeReceptionRelatedByIdReception);
        }

        $this->collCommonExecLitigeReceptionsRelatedByIdReception = $commonExecLitigeReceptionsRelatedByIdReception;
        $this->collCommonExecLitigeReceptionsRelatedByIdReceptionPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecLitigeReception objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecLitigeReception objects.
     * @throws PropelException
     */
    public function countCommonExecLitigeReceptionsRelatedByIdReception(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecLitigeReceptionsRelatedByIdReceptionPartial && !$this->isNew();
        if (null === $this->collCommonExecLitigeReceptionsRelatedByIdReception || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecLitigeReceptionsRelatedByIdReception) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecLitigeReceptionsRelatedByIdReception());
            }
            $query = CommonExecLitigeReceptionQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonExecReceptionRelatedByIdReception($this)
                ->count($con);
        }

        return count($this->collCommonExecLitigeReceptionsRelatedByIdReception);
    }

    /**
     * Method called to associate a CommonExecLitigeReception object to this object
     * through the CommonExecLitigeReception foreign key attribute.
     *
     * @param   CommonExecLitigeReception $l CommonExecLitigeReception
     * @return CommonExecReception The current object (for fluent API support)
     */
    public function addCommonExecLitigeReceptionRelatedByIdReception(CommonExecLitigeReception $l)
    {
        if ($this->collCommonExecLitigeReceptionsRelatedByIdReception === null) {
            $this->initCommonExecLitigeReceptionsRelatedByIdReception();
            $this->collCommonExecLitigeReceptionsRelatedByIdReceptionPartial = true;
        }
        if (!in_array($l, $this->collCommonExecLitigeReceptionsRelatedByIdReception->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecLitigeReceptionRelatedByIdReception($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecLitigeReceptionRelatedByIdReception $commonExecLitigeReceptionRelatedByIdReception The commonExecLitigeReceptionRelatedByIdReception object to add.
     */
    protected function doAddCommonExecLitigeReceptionRelatedByIdReception($commonExecLitigeReceptionRelatedByIdReception)
    {
        $this->collCommonExecLitigeReceptionsRelatedByIdReception[]= $commonExecLitigeReceptionRelatedByIdReception;
        $commonExecLitigeReceptionRelatedByIdReception->setCommonExecReceptionRelatedByIdReception($this);
    }

    /**
     * @param	CommonExecLitigeReceptionRelatedByIdReception $commonExecLitigeReceptionRelatedByIdReception The commonExecLitigeReceptionRelatedByIdReception object to remove.
     * @return CommonExecReception The current object (for fluent API support)
     */
    public function removeCommonExecLitigeReceptionRelatedByIdReception($commonExecLitigeReceptionRelatedByIdReception)
    {
        if ($this->getCommonExecLitigeReceptionsRelatedByIdReception()->contains($commonExecLitigeReceptionRelatedByIdReception)) {
            $this->collCommonExecLitigeReceptionsRelatedByIdReception->remove($this->collCommonExecLitigeReceptionsRelatedByIdReception->search($commonExecLitigeReceptionRelatedByIdReception));
            if (null === $this->commonExecLitigeReceptionsRelatedByIdReceptionScheduledForDeletion) {
                $this->commonExecLitigeReceptionsRelatedByIdReceptionScheduledForDeletion = clone $this->collCommonExecLitigeReceptionsRelatedByIdReception;
                $this->commonExecLitigeReceptionsRelatedByIdReceptionScheduledForDeletion->clear();
            }
            $this->commonExecLitigeReceptionsRelatedByIdReceptionScheduledForDeletion[]= clone $commonExecLitigeReceptionRelatedByIdReception;
            $commonExecLitigeReceptionRelatedByIdReception->setCommonExecReceptionRelatedByIdReception(null);
        }

        return $this;
    }

    /**
     * Clears out the collCommonExecLitigeReceptionsRelatedByIdReception collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonExecReception The current object (for fluent API support)
     * @see        addCommonExecLitigeReceptionsRelatedByIdReception()
     */
    public function clearCommonExecLitigeReceptionsRelatedByIdReception()
    {
        $this->collCommonExecLitigeReceptionsRelatedByIdReception = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecLitigeReceptionsRelatedByIdReceptionPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecLitigeReceptionsRelatedByIdReception collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecLitigeReceptionsRelatedByIdReception($v = true)
    {
        $this->collCommonExecLitigeReceptionsRelatedByIdReceptionPartial = $v;
    }

    /**
     * Initializes the collCommonExecLitigeReceptionsRelatedByIdReception collection.
     *
     * By default this just sets the collCommonExecLitigeReceptionsRelatedByIdReception collection to an empty array (like clearcollCommonExecLitigeReceptionsRelatedByIdReception());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecLitigeReceptionsRelatedByIdReception($overrideExisting = true)
    {
        if (null !== $this->collCommonExecLitigeReceptionsRelatedByIdReception && !$overrideExisting) {
            return;
        }
        $this->collCommonExecLitigeReceptionsRelatedByIdReception = new PropelObjectCollection();
        $this->collCommonExecLitigeReceptionsRelatedByIdReception->setModel('CommonExecLitigeReception');
    }

    /**
     * Gets an array of CommonExecLitigeReception objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonExecReception is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecLitigeReception[] List of CommonExecLitigeReception objects
     * @throws PropelException
     */
    public function getCommonExecLitigeReceptionsRelatedByIdReception($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecLitigeReceptionsRelatedByIdReceptionPartial && !$this->isNew();
        if (null === $this->collCommonExecLitigeReceptionsRelatedByIdReception || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecLitigeReceptionsRelatedByIdReception) {
                // return empty collection
                $this->initCommonExecLitigeReceptionsRelatedByIdReception();
            } else {
                $collCommonExecLitigeReceptionsRelatedByIdReception = CommonExecLitigeReceptionQuery::create(null, $criteria)
                    ->filterByCommonExecReceptionRelatedByIdReception($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecLitigeReceptionsRelatedByIdReceptionPartial && count($collCommonExecLitigeReceptionsRelatedByIdReception)) {
                      $this->initCommonExecLitigeReceptionsRelatedByIdReception(false);

                      foreach ($collCommonExecLitigeReceptionsRelatedByIdReception as $obj) {
                        if (false == $this->collCommonExecLitigeReceptionsRelatedByIdReception->contains($obj)) {
                          $this->collCommonExecLitigeReceptionsRelatedByIdReception->append($obj);
                        }
                      }

                      $this->collCommonExecLitigeReceptionsRelatedByIdReceptionPartial = true;
                    }

                    $collCommonExecLitigeReceptionsRelatedByIdReception->getInternalIterator()->rewind();

                    return $collCommonExecLitigeReceptionsRelatedByIdReception;
                }

                if ($partial && $this->collCommonExecLitigeReceptionsRelatedByIdReception) {
                    foreach ($this->collCommonExecLitigeReceptionsRelatedByIdReception as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecLitigeReceptionsRelatedByIdReception[] = $obj;
                        }
                    }
                }

                $this->collCommonExecLitigeReceptionsRelatedByIdReception = $collCommonExecLitigeReceptionsRelatedByIdReception;
                $this->collCommonExecLitigeReceptionsRelatedByIdReceptionPartial = false;
            }
        }

        return $this->collCommonExecLitigeReceptionsRelatedByIdReception;
    }

    /**
     * Sets a collection of CommonExecLitigeReceptionRelatedByIdReception objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecLitigeReceptionsRelatedByIdReception A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonExecReception The current object (for fluent API support)
     */
    public function setCommonExecLitigeReceptionsRelatedByIdReception(PropelCollection $commonExecLitigeReceptionsRelatedByIdReception, PropelPDO $con = null)
    {
        $commonExecLitigeReceptionsRelatedByIdReceptionToDelete = $this->getCommonExecLitigeReceptionsRelatedByIdReception(new Criteria(), $con)->diff($commonExecLitigeReceptionsRelatedByIdReception);


        $this->commonExecLitigeReceptionsRelatedByIdReceptionScheduledForDeletion = $commonExecLitigeReceptionsRelatedByIdReceptionToDelete;

        foreach ($commonExecLitigeReceptionsRelatedByIdReceptionToDelete as $commonExecLitigeReceptionRelatedByIdReceptionRemoved) {
            $commonExecLitigeReceptionRelatedByIdReceptionRemoved->setCommonExecReceptionRelatedByIdReception(null);
        }

        $this->collCommonExecLitigeReceptionsRelatedByIdReception = null;
        foreach ($commonExecLitigeReceptionsRelatedByIdReception as $commonExecLitigeReceptionRelatedByIdReception) {
            $this->addCommonExecLitigeReceptionRelatedByIdReception($commonExecLitigeReceptionRelatedByIdReception);
        }

        $this->collCommonExecLitigeReceptionsRelatedByIdReception = $commonExecLitigeReceptionsRelatedByIdReception;
        $this->collCommonExecLitigeReceptionsRelatedByIdReceptionPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecLitigeReception objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecLitigeReception objects.
     * @throws PropelException
     */
    public function countCommonExecLitigeReceptionsRelatedByIdReception(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecLitigeReceptionsRelatedByIdReceptionPartial && !$this->isNew();
        if (null === $this->collCommonExecLitigeReceptionsRelatedByIdReception || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecLitigeReceptionsRelatedByIdReception) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecLitigeReceptionsRelatedByIdReception());
            }
            $query = CommonExecLitigeReceptionQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonExecReceptionRelatedByIdReception($this)
                ->count($con);
        }

        return count($this->collCommonExecLitigeReceptionsRelatedByIdReception);
    }

    /**
     * Method called to associate a CommonExecLitigeReception object to this object
     * through the CommonExecLitigeReception foreign key attribute.
     *
     * @param   CommonExecLitigeReception $l CommonExecLitigeReception
     * @return CommonExecReception The current object (for fluent API support)
     */
    public function addCommonExecLitigeReceptionRelatedByIdReception(CommonExecLitigeReception $l)
    {
        if ($this->collCommonExecLitigeReceptionsRelatedByIdReception === null) {
            $this->initCommonExecLitigeReceptionsRelatedByIdReception();
            $this->collCommonExecLitigeReceptionsRelatedByIdReceptionPartial = true;
        }
        if (!in_array($l, $this->collCommonExecLitigeReceptionsRelatedByIdReception->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecLitigeReceptionRelatedByIdReception($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecLitigeReceptionRelatedByIdReception $commonExecLitigeReceptionRelatedByIdReception The commonExecLitigeReceptionRelatedByIdReception object to add.
     */
    protected function doAddCommonExecLitigeReceptionRelatedByIdReception($commonExecLitigeReceptionRelatedByIdReception)
    {
        $this->collCommonExecLitigeReceptionsRelatedByIdReception[]= $commonExecLitigeReceptionRelatedByIdReception;
        $commonExecLitigeReceptionRelatedByIdReception->setCommonExecReceptionRelatedByIdReception($this);
    }

    /**
     * @param	CommonExecLitigeReceptionRelatedByIdReception $commonExecLitigeReceptionRelatedByIdReception The commonExecLitigeReceptionRelatedByIdReception object to remove.
     * @return CommonExecReception The current object (for fluent API support)
     */
    public function removeCommonExecLitigeReceptionRelatedByIdReception($commonExecLitigeReceptionRelatedByIdReception)
    {
        if ($this->getCommonExecLitigeReceptionsRelatedByIdReception()->contains($commonExecLitigeReceptionRelatedByIdReception)) {
            $this->collCommonExecLitigeReceptionsRelatedByIdReception->remove($this->collCommonExecLitigeReceptionsRelatedByIdReception->search($commonExecLitigeReceptionRelatedByIdReception));
            if (null === $this->commonExecLitigeReceptionsRelatedByIdReceptionScheduledForDeletion) {
                $this->commonExecLitigeReceptionsRelatedByIdReceptionScheduledForDeletion = clone $this->collCommonExecLitigeReceptionsRelatedByIdReception;
                $this->commonExecLitigeReceptionsRelatedByIdReceptionScheduledForDeletion->clear();
            }
            $this->commonExecLitigeReceptionsRelatedByIdReceptionScheduledForDeletion[]= clone $commonExecLitigeReceptionRelatedByIdReception;
            $commonExecLitigeReceptionRelatedByIdReception->setCommonExecReceptionRelatedByIdReception(null);
        }

        return $this;
    }

    /**
     * Clears out the collCommonExecReceptionPrixs collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonExecReception The current object (for fluent API support)
     * @see        addCommonExecReceptionPrixs()
     */
    public function clearCommonExecReceptionPrixs()
    {
        $this->collCommonExecReceptionPrixs = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecReceptionPrixsPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecReceptionPrixs collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecReceptionPrixs($v = true)
    {
        $this->collCommonExecReceptionPrixsPartial = $v;
    }

    /**
     * Initializes the collCommonExecReceptionPrixs collection.
     *
     * By default this just sets the collCommonExecReceptionPrixs collection to an empty array (like clearcollCommonExecReceptionPrixs());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecReceptionPrixs($overrideExisting = true)
    {
        if (null !== $this->collCommonExecReceptionPrixs && !$overrideExisting) {
            return;
        }
        $this->collCommonExecReceptionPrixs = new PropelObjectCollection();
        $this->collCommonExecReceptionPrixs->setModel('CommonExecReceptionPrix');
    }

    /**
     * Gets an array of CommonExecReceptionPrix objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonExecReception is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecReceptionPrix[] List of CommonExecReceptionPrix objects
     * @throws PropelException
     */
    public function getCommonExecReceptionPrixs($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecReceptionPrixsPartial && !$this->isNew();
        if (null === $this->collCommonExecReceptionPrixs || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecReceptionPrixs) {
                // return empty collection
                $this->initCommonExecReceptionPrixs();
            } else {
                $collCommonExecReceptionPrixs = CommonExecReceptionPrixQuery::create(null, $criteria)
                    ->filterByCommonExecReception($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecReceptionPrixsPartial && count($collCommonExecReceptionPrixs)) {
                      $this->initCommonExecReceptionPrixs(false);

                      foreach ($collCommonExecReceptionPrixs as $obj) {
                        if (false == $this->collCommonExecReceptionPrixs->contains($obj)) {
                          $this->collCommonExecReceptionPrixs->append($obj);
                        }
                      }

                      $this->collCommonExecReceptionPrixsPartial = true;
                    }

                    $collCommonExecReceptionPrixs->getInternalIterator()->rewind();

                    return $collCommonExecReceptionPrixs;
                }

                if ($partial && $this->collCommonExecReceptionPrixs) {
                    foreach ($this->collCommonExecReceptionPrixs as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecReceptionPrixs[] = $obj;
                        }
                    }
                }

                $this->collCommonExecReceptionPrixs = $collCommonExecReceptionPrixs;
                $this->collCommonExecReceptionPrixsPartial = false;
            }
        }

        return $this->collCommonExecReceptionPrixs;
    }

    /**
     * Sets a collection of CommonExecReceptionPrix objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecReceptionPrixs A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonExecReception The current object (for fluent API support)
     */
    public function setCommonExecReceptionPrixs(PropelCollection $commonExecReceptionPrixs, PropelPDO $con = null)
    {
        $commonExecReceptionPrixsToDelete = $this->getCommonExecReceptionPrixs(new Criteria(), $con)->diff($commonExecReceptionPrixs);


        $this->commonExecReceptionPrixsScheduledForDeletion = $commonExecReceptionPrixsToDelete;

        foreach ($commonExecReceptionPrixsToDelete as $commonExecReceptionPrixRemoved) {
            $commonExecReceptionPrixRemoved->setCommonExecReception(null);
        }

        $this->collCommonExecReceptionPrixs = null;
        foreach ($commonExecReceptionPrixs as $commonExecReceptionPrix) {
            $this->addCommonExecReceptionPrix($commonExecReceptionPrix);
        }

        $this->collCommonExecReceptionPrixs = $commonExecReceptionPrixs;
        $this->collCommonExecReceptionPrixsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecReceptionPrix objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecReceptionPrix objects.
     * @throws PropelException
     */
    public function countCommonExecReceptionPrixs(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecReceptionPrixsPartial && !$this->isNew();
        if (null === $this->collCommonExecReceptionPrixs || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecReceptionPrixs) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecReceptionPrixs());
            }
            $query = CommonExecReceptionPrixQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonExecReception($this)
                ->count($con);
        }

        return count($this->collCommonExecReceptionPrixs);
    }

    /**
     * Method called to associate a CommonExecReceptionPrix object to this object
     * through the CommonExecReceptionPrix foreign key attribute.
     *
     * @param   CommonExecReceptionPrix $l CommonExecReceptionPrix
     * @return CommonExecReception The current object (for fluent API support)
     */
    public function addCommonExecReceptionPrix(CommonExecReceptionPrix $l)
    {
        if ($this->collCommonExecReceptionPrixs === null) {
            $this->initCommonExecReceptionPrixs();
            $this->collCommonExecReceptionPrixsPartial = true;
        }
        if (!in_array($l, $this->collCommonExecReceptionPrixs->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecReceptionPrix($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecReceptionPrix $commonExecReceptionPrix The commonExecReceptionPrix object to add.
     */
    protected function doAddCommonExecReceptionPrix($commonExecReceptionPrix)
    {
        $this->collCommonExecReceptionPrixs[]= $commonExecReceptionPrix;
        $commonExecReceptionPrix->setCommonExecReception($this);
    }

    /**
     * @param	CommonExecReceptionPrix $commonExecReceptionPrix The commonExecReceptionPrix object to remove.
     * @return CommonExecReception The current object (for fluent API support)
     */
    public function removeCommonExecReceptionPrix($commonExecReceptionPrix)
    {
        if ($this->getCommonExecReceptionPrixs()->contains($commonExecReceptionPrix)) {
            $this->collCommonExecReceptionPrixs->remove($this->collCommonExecReceptionPrixs->search($commonExecReceptionPrix));
            if (null === $this->commonExecReceptionPrixsScheduledForDeletion) {
                $this->commonExecReceptionPrixsScheduledForDeletion = clone $this->collCommonExecReceptionPrixs;
                $this->commonExecReceptionPrixsScheduledForDeletion->clear();
            }
            $this->commonExecReceptionPrixsScheduledForDeletion[]= clone $commonExecReceptionPrix;
            $commonExecReceptionPrix->setCommonExecReception(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonExecReception is new, it will return
     * an empty collection; or if this CommonExecReception has previously
     * been saved, it will retrieve related CommonExecReceptionPrixs from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonExecReception.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecReceptionPrix[] List of CommonExecReceptionPrix objects
     */
    public function getCommonExecReceptionPrixsJoinCommonExecPrix($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecReceptionPrixQuery::create(null, $criteria);
        $query->joinWith('CommonExecPrix', $join_behavior);

        return $this->getCommonExecReceptionPrixs($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->intitule = null;
        $this->numero = null;
        $this->id_contrat = null;
        $this->id_contractant = null;
        $this->statut = null;
        $this->date_reception = null;
        $this->date_validation = null;
        $this->id_agent_validation = null;
        $this->date_rejet = null;
        $this->id_agent_rejet = null;
        $this->commentaire = null;
        $this->origine_piece = null;
        $this->numero_workflow = null;
        $this->id_agent_crea = null;
        $this->date_crea = null;
        $this->motif_rejet = null;
        $this->origine = null;
        $this->id_facture = null;
        $this->id_pv_reception = null;
        $this->accepte = null;
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
            if ($this->collCommonExecLitigeReceptionsRelatedByIdReception) {
                foreach ($this->collCommonExecLitigeReceptionsRelatedByIdReception as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecLitigeReceptionsRelatedByIdReception) {
                foreach ($this->collCommonExecLitigeReceptionsRelatedByIdReception as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecReceptionPrixs) {
                foreach ($this->collCommonExecReceptionPrixs as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aCommonExecFacture instanceof Persistent) {
              $this->aCommonExecFacture->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCommonExecLitigeReceptionsRelatedByIdReception instanceof PropelCollection) {
            $this->collCommonExecLitigeReceptionsRelatedByIdReception->clearIterator();
        }
        $this->collCommonExecLitigeReceptionsRelatedByIdReception = null;
        if ($this->collCommonExecLitigeReceptionsRelatedByIdReception instanceof PropelCollection) {
            $this->collCommonExecLitigeReceptionsRelatedByIdReception->clearIterator();
        }
        $this->collCommonExecLitigeReceptionsRelatedByIdReception = null;
        if ($this->collCommonExecReceptionPrixs instanceof PropelCollection) {
            $this->collCommonExecReceptionPrixs->clearIterator();
        }
        $this->collCommonExecReceptionPrixs = null;
        $this->aCommonExecFacture = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonExecReceptionPeer::DEFAULT_STRING_FORMAT);
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
