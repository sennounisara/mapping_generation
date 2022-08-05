<?php


/**
 * Base class that represents a row from the 'Echange' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonEchange extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonEchangePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonEchangePeer
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
     * The value for the objet field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $objet;

    /**
     * The value for the corps field.
     * @var        string
     */
    protected $corps;

    /**
     * The value for the expediteur field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $expediteur;

    /**
     * The value for the id_createur field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_createur;

    /**
     * The value for the ref_consultation field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $ref_consultation;

    /**
     * The value for the option_envoi field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $option_envoi;

    /**
     * The value for the date_message field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $date_message;

    /**
     * The value for the format field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $format;

    /**
     * The value for the id_action_declencheur field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_action_declencheur;

    /**
     * The value for the status field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $status;

    /**
     * The value for the service_id field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $service_id;

    /**
     * The value for the email_expediteur field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $email_expediteur;

    /**
     * The value for the id_type_message field.
     * @var        int
     */
    protected $id_type_message;

    /**
     * The value for the destinataires_retraits field.
     * @var        string
     */
    protected $destinataires_retraits;

    /**
     * The value for the destinataires_questions field.
     * @var        string
     */
    protected $destinataires_questions;

    /**
     * The value for the destinataires_depots field.
     * @var        string
     */
    protected $destinataires_depots;

    /**
     * The value for the destinataires_bd_fournisseurs field.
     * @var        string
     */
    protected $destinataires_bd_fournisseurs;

    /**
     * The value for the destinataires_libres field.
     * @var        string
     */
    protected $destinataires_libres;

    /**
     * The value for the page_source field.
     * @var        string
     */
    protected $page_source;

    /**
     * The value for the destinataires field.
     * @var        string
     */
    protected $destinataires;

    /**
     * The value for the destinataire_visioconference field.
     * @var        string
     */
    protected $destinataire_visioconference;

    /**
     * @var        PropelObjectCollection|CommonEchangeDestinataire[] Collection to store aggregation of CommonEchangeDestinataire objects.
     */
    protected $collCommonEchangeDestinataires;
    protected $collCommonEchangeDestinatairesPartial;

    /**
     * @var        PropelObjectCollection|CommonEchangePieceJointe[] Collection to store aggregation of CommonEchangePieceJointe objects.
     */
    protected $collCommonEchangePieceJointes;
    protected $collCommonEchangePieceJointesPartial;

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
    protected $commonEchangeDestinatairesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonEchangePieceJointesScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->objet = '';
        $this->expediteur = '';
        $this->id_createur = 0;
        $this->ref_consultation = 0;
        $this->option_envoi = 0;
        $this->date_message = '';
        $this->format = 0;
        $this->id_action_declencheur = 0;
        $this->status = 0;
        $this->service_id = 0;
        $this->email_expediteur = '';
    }

    /**
     * Initializes internal state of BaseCommonEchange object.
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
     * Get the [objet] column value.
     * 
     * @return string
     */
    public function getObjet()
    {

        return $this->objet;
    }

    /**
     * Get the [corps] column value.
     * 
     * @return string
     */
    public function getCorps()
    {

        return $this->corps;
    }

    /**
     * Get the [expediteur] column value.
     * 
     * @return string
     */
    public function getExpediteur()
    {

        return $this->expediteur;
    }

    /**
     * Get the [id_createur] column value.
     * 
     * @return int
     */
    public function getIdCreateur()
    {

        return $this->id_createur;
    }

    /**
     * Get the [ref_consultation] column value.
     * 
     * @return int
     */
    public function getRefConsultation()
    {

        return $this->ref_consultation;
    }

    /**
     * Get the [option_envoi] column value.
     * 
     * @return int
     */
    public function getOptionEnvoi()
    {

        return $this->option_envoi;
    }

    /**
     * Get the [date_message] column value.
     * 
     * @return string
     */
    public function getDateMessage()
    {

        return $this->date_message;
    }

    /**
     * Get the [format] column value.
     * 
     * @return int
     */
    public function getFormat()
    {

        return $this->format;
    }

    /**
     * Get the [id_action_declencheur] column value.
     * 
     * @return int
     */
    public function getIdActionDeclencheur()
    {

        return $this->id_action_declencheur;
    }

    /**
     * Get the [status] column value.
     * 
     * @return int
     */
    public function getStatus()
    {

        return $this->status;
    }

    /**
     * Get the [service_id] column value.
     * 
     * @return int
     */
    public function getServiceId()
    {

        return $this->service_id;
    }

    /**
     * Get the [email_expediteur] column value.
     * 
     * @return string
     */
    public function getEmailExpediteur()
    {

        return $this->email_expediteur;
    }

    /**
     * Get the [id_type_message] column value.
     * 
     * @return int
     */
    public function getIdTypeMessage()
    {

        return $this->id_type_message;
    }

    /**
     * Get the [destinataires_retraits] column value.
     * 
     * @return string
     */
    public function getDestinatairesRetraits()
    {

        return $this->destinataires_retraits;
    }

    /**
     * Get the [destinataires_questions] column value.
     * 
     * @return string
     */
    public function getDestinatairesQuestions()
    {

        return $this->destinataires_questions;
    }

    /**
     * Get the [destinataires_depots] column value.
     * 
     * @return string
     */
    public function getDestinatairesDepots()
    {

        return $this->destinataires_depots;
    }

    /**
     * Get the [destinataires_bd_fournisseurs] column value.
     * 
     * @return string
     */
    public function getDestinatairesBdFournisseurs()
    {

        return $this->destinataires_bd_fournisseurs;
    }

    /**
     * Get the [destinataires_libres] column value.
     * 
     * @return string
     */
    public function getDestinatairesLibres()
    {

        return $this->destinataires_libres;
    }

    /**
     * Get the [page_source] column value.
     * 
     * @return string
     */
    public function getPageSource()
    {

        return $this->page_source;
    }

    /**
     * Get the [destinataires] column value.
     * 
     * @return string
     */
    public function getDestinataires()
    {

        return $this->destinataires;
    }

    /**
     * Get the [destinataire_visioconference] column value.
     * 
     * @return string
     */
    public function getDestinataireVisioconference()
    {

        return $this->destinataire_visioconference;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonEchange The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonEchangePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonEchange The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonEchangePeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [objet] column.
     * 
     * @param string $v new value
     * @return CommonEchange The current object (for fluent API support)
     */
    public function setObjet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->objet !== $v) {
            $this->objet = $v;
            $this->modifiedColumns[] = CommonEchangePeer::OBJET;
        }


        return $this;
    } // setObjet()

    /**
     * Set the value of [corps] column.
     * 
     * @param string $v new value
     * @return CommonEchange The current object (for fluent API support)
     */
    public function setCorps($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->corps !== $v) {
            $this->corps = $v;
            $this->modifiedColumns[] = CommonEchangePeer::CORPS;
        }


        return $this;
    } // setCorps()

    /**
     * Set the value of [expediteur] column.
     * 
     * @param string $v new value
     * @return CommonEchange The current object (for fluent API support)
     */
    public function setExpediteur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->expediteur !== $v) {
            $this->expediteur = $v;
            $this->modifiedColumns[] = CommonEchangePeer::EXPEDITEUR;
        }


        return $this;
    } // setExpediteur()

    /**
     * Set the value of [id_createur] column.
     * 
     * @param int $v new value
     * @return CommonEchange The current object (for fluent API support)
     */
    public function setIdCreateur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_createur !== $v) {
            $this->id_createur = $v;
            $this->modifiedColumns[] = CommonEchangePeer::ID_CREATEUR;
        }


        return $this;
    } // setIdCreateur()

    /**
     * Set the value of [ref_consultation] column.
     * 
     * @param int $v new value
     * @return CommonEchange The current object (for fluent API support)
     */
    public function setRefConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ref_consultation !== $v) {
            $this->ref_consultation = $v;
            $this->modifiedColumns[] = CommonEchangePeer::REF_CONSULTATION;
        }


        return $this;
    } // setRefConsultation()

    /**
     * Set the value of [option_envoi] column.
     * 
     * @param int $v new value
     * @return CommonEchange The current object (for fluent API support)
     */
    public function setOptionEnvoi($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->option_envoi !== $v) {
            $this->option_envoi = $v;
            $this->modifiedColumns[] = CommonEchangePeer::OPTION_ENVOI;
        }


        return $this;
    } // setOptionEnvoi()

    /**
     * Set the value of [date_message] column.
     * 
     * @param string $v new value
     * @return CommonEchange The current object (for fluent API support)
     */
    public function setDateMessage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_message !== $v) {
            $this->date_message = $v;
            $this->modifiedColumns[] = CommonEchangePeer::DATE_MESSAGE;
        }


        return $this;
    } // setDateMessage()

    /**
     * Set the value of [format] column.
     * 
     * @param int $v new value
     * @return CommonEchange The current object (for fluent API support)
     */
    public function setFormat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->format !== $v) {
            $this->format = $v;
            $this->modifiedColumns[] = CommonEchangePeer::FORMAT;
        }


        return $this;
    } // setFormat()

    /**
     * Set the value of [id_action_declencheur] column.
     * 
     * @param int $v new value
     * @return CommonEchange The current object (for fluent API support)
     */
    public function setIdActionDeclencheur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_action_declencheur !== $v) {
            $this->id_action_declencheur = $v;
            $this->modifiedColumns[] = CommonEchangePeer::ID_ACTION_DECLENCHEUR;
        }


        return $this;
    } // setIdActionDeclencheur()

    /**
     * Set the value of [status] column.
     * 
     * @param int $v new value
     * @return CommonEchange The current object (for fluent API support)
     */
    public function setStatus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->status !== $v) {
            $this->status = $v;
            $this->modifiedColumns[] = CommonEchangePeer::STATUS;
        }


        return $this;
    } // setStatus()

    /**
     * Set the value of [service_id] column.
     * 
     * @param int $v new value
     * @return CommonEchange The current object (for fluent API support)
     */
    public function setServiceId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->service_id !== $v) {
            $this->service_id = $v;
            $this->modifiedColumns[] = CommonEchangePeer::SERVICE_ID;
        }


        return $this;
    } // setServiceId()

    /**
     * Set the value of [email_expediteur] column.
     * 
     * @param string $v new value
     * @return CommonEchange The current object (for fluent API support)
     */
    public function setEmailExpediteur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->email_expediteur !== $v) {
            $this->email_expediteur = $v;
            $this->modifiedColumns[] = CommonEchangePeer::EMAIL_EXPEDITEUR;
        }


        return $this;
    } // setEmailExpediteur()

    /**
     * Set the value of [id_type_message] column.
     * 
     * @param int $v new value
     * @return CommonEchange The current object (for fluent API support)
     */
    public function setIdTypeMessage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_type_message !== $v) {
            $this->id_type_message = $v;
            $this->modifiedColumns[] = CommonEchangePeer::ID_TYPE_MESSAGE;
        }


        return $this;
    } // setIdTypeMessage()

    /**
     * Set the value of [destinataires_retraits] column.
     * 
     * @param string $v new value
     * @return CommonEchange The current object (for fluent API support)
     */
    public function setDestinatairesRetraits($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->destinataires_retraits !== $v) {
            $this->destinataires_retraits = $v;
            $this->modifiedColumns[] = CommonEchangePeer::DESTINATAIRES_RETRAITS;
        }


        return $this;
    } // setDestinatairesRetraits()

    /**
     * Set the value of [destinataires_questions] column.
     * 
     * @param string $v new value
     * @return CommonEchange The current object (for fluent API support)
     */
    public function setDestinatairesQuestions($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->destinataires_questions !== $v) {
            $this->destinataires_questions = $v;
            $this->modifiedColumns[] = CommonEchangePeer::DESTINATAIRES_QUESTIONS;
        }


        return $this;
    } // setDestinatairesQuestions()

    /**
     * Set the value of [destinataires_depots] column.
     * 
     * @param string $v new value
     * @return CommonEchange The current object (for fluent API support)
     */
    public function setDestinatairesDepots($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->destinataires_depots !== $v) {
            $this->destinataires_depots = $v;
            $this->modifiedColumns[] = CommonEchangePeer::DESTINATAIRES_DEPOTS;
        }


        return $this;
    } // setDestinatairesDepots()

    /**
     * Set the value of [destinataires_bd_fournisseurs] column.
     * 
     * @param string $v new value
     * @return CommonEchange The current object (for fluent API support)
     */
    public function setDestinatairesBdFournisseurs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->destinataires_bd_fournisseurs !== $v) {
            $this->destinataires_bd_fournisseurs = $v;
            $this->modifiedColumns[] = CommonEchangePeer::DESTINATAIRES_BD_FOURNISSEURS;
        }


        return $this;
    } // setDestinatairesBdFournisseurs()

    /**
     * Set the value of [destinataires_libres] column.
     * 
     * @param string $v new value
     * @return CommonEchange The current object (for fluent API support)
     */
    public function setDestinatairesLibres($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->destinataires_libres !== $v) {
            $this->destinataires_libres = $v;
            $this->modifiedColumns[] = CommonEchangePeer::DESTINATAIRES_LIBRES;
        }


        return $this;
    } // setDestinatairesLibres()

    /**
     * Set the value of [page_source] column.
     * 
     * @param string $v new value
     * @return CommonEchange The current object (for fluent API support)
     */
    public function setPageSource($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->page_source !== $v) {
            $this->page_source = $v;
            $this->modifiedColumns[] = CommonEchangePeer::PAGE_SOURCE;
        }


        return $this;
    } // setPageSource()

    /**
     * Set the value of [destinataires] column.
     * 
     * @param string $v new value
     * @return CommonEchange The current object (for fluent API support)
     */
    public function setDestinataires($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->destinataires !== $v) {
            $this->destinataires = $v;
            $this->modifiedColumns[] = CommonEchangePeer::DESTINATAIRES;
        }


        return $this;
    } // setDestinataires()

    /**
     * Set the value of [destinataire_visioconference] column.
     * 
     * @param string $v new value
     * @return CommonEchange The current object (for fluent API support)
     */
    public function setDestinataireVisioconference($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->destinataire_visioconference !== $v) {
            $this->destinataire_visioconference = $v;
            $this->modifiedColumns[] = CommonEchangePeer::DESTINATAIRE_VISIOCONFERENCE;
        }


        return $this;
    } // setDestinataireVisioconference()

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
            if ($this->objet !== '') {
                return false;
            }

            if ($this->expediteur !== '') {
                return false;
            }

            if ($this->id_createur !== 0) {
                return false;
            }

            if ($this->ref_consultation !== 0) {
                return false;
            }

            if ($this->option_envoi !== 0) {
                return false;
            }

            if ($this->date_message !== '') {
                return false;
            }

            if ($this->format !== 0) {
                return false;
            }

            if ($this->id_action_declencheur !== 0) {
                return false;
            }

            if ($this->status !== 0) {
                return false;
            }

            if ($this->service_id !== 0) {
                return false;
            }

            if ($this->email_expediteur !== '') {
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
            $this->objet = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->corps = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->expediteur = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->id_createur = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->ref_consultation = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->option_envoi = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->date_message = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->format = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->id_action_declencheur = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->status = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->service_id = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->email_expediteur = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->id_type_message = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->destinataires_retraits = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->destinataires_questions = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->destinataires_depots = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->destinataires_bd_fournisseurs = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->destinataires_libres = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->page_source = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->destinataires = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->destinataire_visioconference = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 23; // 23 = CommonEchangePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonEchange object", $e);
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
            $con = Propel::getConnection(CommonEchangePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonEchangePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collCommonEchangeDestinataires = null;

            $this->collCommonEchangePieceJointes = null;

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
            $con = Propel::getConnection(CommonEchangePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonEchangeQuery::create()
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
            $con = Propel::getConnection(CommonEchangePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonEchangePeer::addInstanceToPool($this);
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

            if ($this->commonEchangeDestinatairesScheduledForDeletion !== null) {
                if (!$this->commonEchangeDestinatairesScheduledForDeletion->isEmpty()) {
                    //the foreign key is flagged as `CASCADE`, so we delete the items
                    CommonEchangeDestinataireQuery::create()
                        ->filterByPrimaryKeys($this->commonEchangeDestinatairesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->commonEchangeDestinatairesScheduledForDeletion = null;
                }
            }

            if ($this->collCommonEchangeDestinataires !== null) {
                foreach ($this->collCommonEchangeDestinataires as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonEchangePieceJointesScheduledForDeletion !== null) {
                if (!$this->commonEchangePieceJointesScheduledForDeletion->isEmpty()) {
                    //the foreign key is flagged as `CASCADE`, so we delete the items
                    CommonEchangePieceJointeQuery::create()
                        ->filterByPrimaryKeys($this->commonEchangePieceJointesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->commonEchangePieceJointesScheduledForDeletion = null;
                }
            }

            if ($this->collCommonEchangePieceJointes !== null) {
                foreach ($this->collCommonEchangePieceJointes as $referrerFK) {
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

        $this->modifiedColumns[] = CommonEchangePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonEchangePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonEchangePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonEchangePeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonEchangePeer::OBJET)) {
            $modifiedColumns[':p' . $index++]  = '`objet`';
        }
        if ($this->isColumnModified(CommonEchangePeer::CORPS)) {
            $modifiedColumns[':p' . $index++]  = '`corps`';
        }
        if ($this->isColumnModified(CommonEchangePeer::EXPEDITEUR)) {
            $modifiedColumns[':p' . $index++]  = '`expediteur`';
        }
        if ($this->isColumnModified(CommonEchangePeer::ID_CREATEUR)) {
            $modifiedColumns[':p' . $index++]  = '`id_createur`';
        }
        if ($this->isColumnModified(CommonEchangePeer::REF_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`ref_consultation`';
        }
        if ($this->isColumnModified(CommonEchangePeer::OPTION_ENVOI)) {
            $modifiedColumns[':p' . $index++]  = '`option_envoi`';
        }
        if ($this->isColumnModified(CommonEchangePeer::DATE_MESSAGE)) {
            $modifiedColumns[':p' . $index++]  = '`date_message`';
        }
        if ($this->isColumnModified(CommonEchangePeer::FORMAT)) {
            $modifiedColumns[':p' . $index++]  = '`format`';
        }
        if ($this->isColumnModified(CommonEchangePeer::ID_ACTION_DECLENCHEUR)) {
            $modifiedColumns[':p' . $index++]  = '`id_action_declencheur`';
        }
        if ($this->isColumnModified(CommonEchangePeer::STATUS)) {
            $modifiedColumns[':p' . $index++]  = '`status`';
        }
        if ($this->isColumnModified(CommonEchangePeer::SERVICE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`service_id`';
        }
        if ($this->isColumnModified(CommonEchangePeer::EMAIL_EXPEDITEUR)) {
            $modifiedColumns[':p' . $index++]  = '`email_expediteur`';
        }
        if ($this->isColumnModified(CommonEchangePeer::ID_TYPE_MESSAGE)) {
            $modifiedColumns[':p' . $index++]  = '`id_type_message`';
        }
        if ($this->isColumnModified(CommonEchangePeer::DESTINATAIRES_RETRAITS)) {
            $modifiedColumns[':p' . $index++]  = '`destinataires_retraits`';
        }
        if ($this->isColumnModified(CommonEchangePeer::DESTINATAIRES_QUESTIONS)) {
            $modifiedColumns[':p' . $index++]  = '`destinataires_questions`';
        }
        if ($this->isColumnModified(CommonEchangePeer::DESTINATAIRES_DEPOTS)) {
            $modifiedColumns[':p' . $index++]  = '`destinataires_depots`';
        }
        if ($this->isColumnModified(CommonEchangePeer::DESTINATAIRES_BD_FOURNISSEURS)) {
            $modifiedColumns[':p' . $index++]  = '`destinataires_bd_fournisseurs`';
        }
        if ($this->isColumnModified(CommonEchangePeer::DESTINATAIRES_LIBRES)) {
            $modifiedColumns[':p' . $index++]  = '`destinataires_libres`';
        }
        if ($this->isColumnModified(CommonEchangePeer::PAGE_SOURCE)) {
            $modifiedColumns[':p' . $index++]  = '`page_source`';
        }
        if ($this->isColumnModified(CommonEchangePeer::DESTINATAIRES)) {
            $modifiedColumns[':p' . $index++]  = '`destinataires`';
        }
        if ($this->isColumnModified(CommonEchangePeer::DESTINATAIRE_VISIOCONFERENCE)) {
            $modifiedColumns[':p' . $index++]  = '`destinataire_visioconference`';
        }

        $sql = sprintf(
            'INSERT INTO `Echange` (%s) VALUES (%s)',
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
                    case '`objet`':						
                        $stmt->bindValue($identifier, $this->objet, PDO::PARAM_STR);
                        break;
                    case '`corps`':						
                        $stmt->bindValue($identifier, $this->corps, PDO::PARAM_STR);
                        break;
                    case '`expediteur`':						
                        $stmt->bindValue($identifier, $this->expediteur, PDO::PARAM_STR);
                        break;
                    case '`id_createur`':						
                        $stmt->bindValue($identifier, $this->id_createur, PDO::PARAM_INT);
                        break;
                    case '`ref_consultation`':						
                        $stmt->bindValue($identifier, $this->ref_consultation, PDO::PARAM_INT);
                        break;
                    case '`option_envoi`':						
                        $stmt->bindValue($identifier, $this->option_envoi, PDO::PARAM_INT);
                        break;
                    case '`date_message`':						
                        $stmt->bindValue($identifier, $this->date_message, PDO::PARAM_STR);
                        break;
                    case '`format`':						
                        $stmt->bindValue($identifier, $this->format, PDO::PARAM_INT);
                        break;
                    case '`id_action_declencheur`':						
                        $stmt->bindValue($identifier, $this->id_action_declencheur, PDO::PARAM_INT);
                        break;
                    case '`status`':						
                        $stmt->bindValue($identifier, $this->status, PDO::PARAM_INT);
                        break;
                    case '`service_id`':						
                        $stmt->bindValue($identifier, $this->service_id, PDO::PARAM_INT);
                        break;
                    case '`email_expediteur`':						
                        $stmt->bindValue($identifier, $this->email_expediteur, PDO::PARAM_STR);
                        break;
                    case '`id_type_message`':						
                        $stmt->bindValue($identifier, $this->id_type_message, PDO::PARAM_INT);
                        break;
                    case '`destinataires_retraits`':						
                        $stmt->bindValue($identifier, $this->destinataires_retraits, PDO::PARAM_STR);
                        break;
                    case '`destinataires_questions`':						
                        $stmt->bindValue($identifier, $this->destinataires_questions, PDO::PARAM_STR);
                        break;
                    case '`destinataires_depots`':						
                        $stmt->bindValue($identifier, $this->destinataires_depots, PDO::PARAM_STR);
                        break;
                    case '`destinataires_bd_fournisseurs`':						
                        $stmt->bindValue($identifier, $this->destinataires_bd_fournisseurs, PDO::PARAM_STR);
                        break;
                    case '`destinataires_libres`':						
                        $stmt->bindValue($identifier, $this->destinataires_libres, PDO::PARAM_STR);
                        break;
                    case '`page_source`':						
                        $stmt->bindValue($identifier, $this->page_source, PDO::PARAM_STR);
                        break;
                    case '`destinataires`':						
                        $stmt->bindValue($identifier, $this->destinataires, PDO::PARAM_STR);
                        break;
                    case '`destinataire_visioconference`':						
                        $stmt->bindValue($identifier, $this->destinataire_visioconference, PDO::PARAM_STR);
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


            if (($retval = CommonEchangePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCommonEchangeDestinataires !== null) {
                    foreach ($this->collCommonEchangeDestinataires as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonEchangePieceJointes !== null) {
                    foreach ($this->collCommonEchangePieceJointes as $referrerFK) {
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
        $pos = CommonEchangePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getObjet();
                break;
            case 3:
                return $this->getCorps();
                break;
            case 4:
                return $this->getExpediteur();
                break;
            case 5:
                return $this->getIdCreateur();
                break;
            case 6:
                return $this->getRefConsultation();
                break;
            case 7:
                return $this->getOptionEnvoi();
                break;
            case 8:
                return $this->getDateMessage();
                break;
            case 9:
                return $this->getFormat();
                break;
            case 10:
                return $this->getIdActionDeclencheur();
                break;
            case 11:
                return $this->getStatus();
                break;
            case 12:
                return $this->getServiceId();
                break;
            case 13:
                return $this->getEmailExpediteur();
                break;
            case 14:
                return $this->getIdTypeMessage();
                break;
            case 15:
                return $this->getDestinatairesRetraits();
                break;
            case 16:
                return $this->getDestinatairesQuestions();
                break;
            case 17:
                return $this->getDestinatairesDepots();
                break;
            case 18:
                return $this->getDestinatairesBdFournisseurs();
                break;
            case 19:
                return $this->getDestinatairesLibres();
                break;
            case 20:
                return $this->getPageSource();
                break;
            case 21:
                return $this->getDestinataires();
                break;
            case 22:
                return $this->getDestinataireVisioconference();
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
        if (isset($alreadyDumpedObjects['CommonEchange'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonEchange'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonEchangePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getObjet(),
            $keys[3] => $this->getCorps(),
            $keys[4] => $this->getExpediteur(),
            $keys[5] => $this->getIdCreateur(),
            $keys[6] => $this->getRefConsultation(),
            $keys[7] => $this->getOptionEnvoi(),
            $keys[8] => $this->getDateMessage(),
            $keys[9] => $this->getFormat(),
            $keys[10] => $this->getIdActionDeclencheur(),
            $keys[11] => $this->getStatus(),
            $keys[12] => $this->getServiceId(),
            $keys[13] => $this->getEmailExpediteur(),
            $keys[14] => $this->getIdTypeMessage(),
            $keys[15] => $this->getDestinatairesRetraits(),
            $keys[16] => $this->getDestinatairesQuestions(),
            $keys[17] => $this->getDestinatairesDepots(),
            $keys[18] => $this->getDestinatairesBdFournisseurs(),
            $keys[19] => $this->getDestinatairesLibres(),
            $keys[20] => $this->getPageSource(),
            $keys[21] => $this->getDestinataires(),
            $keys[22] => $this->getDestinataireVisioconference(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->collCommonEchangeDestinataires) {
                $result['CommonEchangeDestinataires'] = $this->collCommonEchangeDestinataires->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonEchangePieceJointes) {
                $result['CommonEchangePieceJointes'] = $this->collCommonEchangePieceJointes->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CommonEchangePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setObjet($value);
                break;
            case 3:
                $this->setCorps($value);
                break;
            case 4:
                $this->setExpediteur($value);
                break;
            case 5:
                $this->setIdCreateur($value);
                break;
            case 6:
                $this->setRefConsultation($value);
                break;
            case 7:
                $this->setOptionEnvoi($value);
                break;
            case 8:
                $this->setDateMessage($value);
                break;
            case 9:
                $this->setFormat($value);
                break;
            case 10:
                $this->setIdActionDeclencheur($value);
                break;
            case 11:
                $this->setStatus($value);
                break;
            case 12:
                $this->setServiceId($value);
                break;
            case 13:
                $this->setEmailExpediteur($value);
                break;
            case 14:
                $this->setIdTypeMessage($value);
                break;
            case 15:
                $this->setDestinatairesRetraits($value);
                break;
            case 16:
                $this->setDestinatairesQuestions($value);
                break;
            case 17:
                $this->setDestinatairesDepots($value);
                break;
            case 18:
                $this->setDestinatairesBdFournisseurs($value);
                break;
            case 19:
                $this->setDestinatairesLibres($value);
                break;
            case 20:
                $this->setPageSource($value);
                break;
            case 21:
                $this->setDestinataires($value);
                break;
            case 22:
                $this->setDestinataireVisioconference($value);
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
        $keys = CommonEchangePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setObjet($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setCorps($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setExpediteur($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIdCreateur($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setRefConsultation($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setOptionEnvoi($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setDateMessage($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setFormat($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setIdActionDeclencheur($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setStatus($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setServiceId($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setEmailExpediteur($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setIdTypeMessage($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setDestinatairesRetraits($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setDestinatairesQuestions($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setDestinatairesDepots($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setDestinatairesBdFournisseurs($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setDestinatairesLibres($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setPageSource($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setDestinataires($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setDestinataireVisioconference($arr[$keys[22]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonEchangePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonEchangePeer::ID)) $criteria->add(CommonEchangePeer::ID, $this->id);
        if ($this->isColumnModified(CommonEchangePeer::ORGANISME)) $criteria->add(CommonEchangePeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonEchangePeer::OBJET)) $criteria->add(CommonEchangePeer::OBJET, $this->objet);
        if ($this->isColumnModified(CommonEchangePeer::CORPS)) $criteria->add(CommonEchangePeer::CORPS, $this->corps);
        if ($this->isColumnModified(CommonEchangePeer::EXPEDITEUR)) $criteria->add(CommonEchangePeer::EXPEDITEUR, $this->expediteur);
        if ($this->isColumnModified(CommonEchangePeer::ID_CREATEUR)) $criteria->add(CommonEchangePeer::ID_CREATEUR, $this->id_createur);
        if ($this->isColumnModified(CommonEchangePeer::REF_CONSULTATION)) $criteria->add(CommonEchangePeer::REF_CONSULTATION, $this->ref_consultation);
        if ($this->isColumnModified(CommonEchangePeer::OPTION_ENVOI)) $criteria->add(CommonEchangePeer::OPTION_ENVOI, $this->option_envoi);
        if ($this->isColumnModified(CommonEchangePeer::DATE_MESSAGE)) $criteria->add(CommonEchangePeer::DATE_MESSAGE, $this->date_message);
        if ($this->isColumnModified(CommonEchangePeer::FORMAT)) $criteria->add(CommonEchangePeer::FORMAT, $this->format);
        if ($this->isColumnModified(CommonEchangePeer::ID_ACTION_DECLENCHEUR)) $criteria->add(CommonEchangePeer::ID_ACTION_DECLENCHEUR, $this->id_action_declencheur);
        if ($this->isColumnModified(CommonEchangePeer::STATUS)) $criteria->add(CommonEchangePeer::STATUS, $this->status);
        if ($this->isColumnModified(CommonEchangePeer::SERVICE_ID)) $criteria->add(CommonEchangePeer::SERVICE_ID, $this->service_id);
        if ($this->isColumnModified(CommonEchangePeer::EMAIL_EXPEDITEUR)) $criteria->add(CommonEchangePeer::EMAIL_EXPEDITEUR, $this->email_expediteur);
        if ($this->isColumnModified(CommonEchangePeer::ID_TYPE_MESSAGE)) $criteria->add(CommonEchangePeer::ID_TYPE_MESSAGE, $this->id_type_message);
        if ($this->isColumnModified(CommonEchangePeer::DESTINATAIRES_RETRAITS)) $criteria->add(CommonEchangePeer::DESTINATAIRES_RETRAITS, $this->destinataires_retraits);
        if ($this->isColumnModified(CommonEchangePeer::DESTINATAIRES_QUESTIONS)) $criteria->add(CommonEchangePeer::DESTINATAIRES_QUESTIONS, $this->destinataires_questions);
        if ($this->isColumnModified(CommonEchangePeer::DESTINATAIRES_DEPOTS)) $criteria->add(CommonEchangePeer::DESTINATAIRES_DEPOTS, $this->destinataires_depots);
        if ($this->isColumnModified(CommonEchangePeer::DESTINATAIRES_BD_FOURNISSEURS)) $criteria->add(CommonEchangePeer::DESTINATAIRES_BD_FOURNISSEURS, $this->destinataires_bd_fournisseurs);
        if ($this->isColumnModified(CommonEchangePeer::DESTINATAIRES_LIBRES)) $criteria->add(CommonEchangePeer::DESTINATAIRES_LIBRES, $this->destinataires_libres);
        if ($this->isColumnModified(CommonEchangePeer::PAGE_SOURCE)) $criteria->add(CommonEchangePeer::PAGE_SOURCE, $this->page_source);
        if ($this->isColumnModified(CommonEchangePeer::DESTINATAIRES)) $criteria->add(CommonEchangePeer::DESTINATAIRES, $this->destinataires);
        if ($this->isColumnModified(CommonEchangePeer::DESTINATAIRE_VISIOCONFERENCE)) $criteria->add(CommonEchangePeer::DESTINATAIRE_VISIOCONFERENCE, $this->destinataire_visioconference);

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
        $criteria = new Criteria(CommonEchangePeer::DATABASE_NAME);
        $criteria->add(CommonEchangePeer::ID, $this->id);
        $criteria->add(CommonEchangePeer::ORGANISME, $this->organisme);

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
     * @param object $copyObj An object of CommonEchange (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setObjet($this->getObjet());
        $copyObj->setCorps($this->getCorps());
        $copyObj->setExpediteur($this->getExpediteur());
        $copyObj->setIdCreateur($this->getIdCreateur());
        $copyObj->setRefConsultation($this->getRefConsultation());
        $copyObj->setOptionEnvoi($this->getOptionEnvoi());
        $copyObj->setDateMessage($this->getDateMessage());
        $copyObj->setFormat($this->getFormat());
        $copyObj->setIdActionDeclencheur($this->getIdActionDeclencheur());
        $copyObj->setStatus($this->getStatus());
        $copyObj->setServiceId($this->getServiceId());
        $copyObj->setEmailExpediteur($this->getEmailExpediteur());
        $copyObj->setIdTypeMessage($this->getIdTypeMessage());
        $copyObj->setDestinatairesRetraits($this->getDestinatairesRetraits());
        $copyObj->setDestinatairesQuestions($this->getDestinatairesQuestions());
        $copyObj->setDestinatairesDepots($this->getDestinatairesDepots());
        $copyObj->setDestinatairesBdFournisseurs($this->getDestinatairesBdFournisseurs());
        $copyObj->setDestinatairesLibres($this->getDestinatairesLibres());
        $copyObj->setPageSource($this->getPageSource());
        $copyObj->setDestinataires($this->getDestinataires());
        $copyObj->setDestinataireVisioconference($this->getDestinataireVisioconference());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCommonEchangeDestinataires() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonEchangeDestinataire($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonEchangePieceJointes() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonEchangePieceJointe($relObj->copy($deepCopy));
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
     * @return CommonEchange Clone of current object.
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
     * @return CommonEchangePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonEchangePeer();
        }

        return self::$peer;
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
        if ('CommonEchangeDestinataire' == $relationName) {
            $this->initCommonEchangeDestinataires();
        }
        if ('CommonEchangePieceJointe' == $relationName) {
            $this->initCommonEchangePieceJointes();
        }
    }

    /**
     * Clears out the collCommonEchangeDestinataires collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonEchange The current object (for fluent API support)
     * @see        addCommonEchangeDestinataires()
     */
    public function clearCommonEchangeDestinataires()
    {
        $this->collCommonEchangeDestinataires = null; // important to set this to null since that means it is uninitialized
        $this->collCommonEchangeDestinatairesPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonEchangeDestinataires collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonEchangeDestinataires($v = true)
    {
        $this->collCommonEchangeDestinatairesPartial = $v;
    }

    /**
     * Initializes the collCommonEchangeDestinataires collection.
     *
     * By default this just sets the collCommonEchangeDestinataires collection to an empty array (like clearcollCommonEchangeDestinataires());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonEchangeDestinataires($overrideExisting = true)
    {
        if (null !== $this->collCommonEchangeDestinataires && !$overrideExisting) {
            return;
        }
        $this->collCommonEchangeDestinataires = new PropelObjectCollection();
        $this->collCommonEchangeDestinataires->setModel('CommonEchangeDestinataire');
    }

    /**
     * Gets an array of CommonEchangeDestinataire objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonEchange is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonEchangeDestinataire[] List of CommonEchangeDestinataire objects
     * @throws PropelException
     */
    public function getCommonEchangeDestinataires($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonEchangeDestinatairesPartial && !$this->isNew();
        if (null === $this->collCommonEchangeDestinataires || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonEchangeDestinataires) {
                // return empty collection
                $this->initCommonEchangeDestinataires();
            } else {
                $collCommonEchangeDestinataires = CommonEchangeDestinataireQuery::create(null, $criteria)
                    ->filterByCommonEchange($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonEchangeDestinatairesPartial && count($collCommonEchangeDestinataires)) {
                      $this->initCommonEchangeDestinataires(false);

                      foreach ($collCommonEchangeDestinataires as $obj) {
                        if (false == $this->collCommonEchangeDestinataires->contains($obj)) {
                          $this->collCommonEchangeDestinataires->append($obj);
                        }
                      }

                      $this->collCommonEchangeDestinatairesPartial = true;
                    }

                    $collCommonEchangeDestinataires->getInternalIterator()->rewind();

                    return $collCommonEchangeDestinataires;
                }

                if ($partial && $this->collCommonEchangeDestinataires) {
                    foreach ($this->collCommonEchangeDestinataires as $obj) {
                        if ($obj->isNew()) {
                            $collCommonEchangeDestinataires[] = $obj;
                        }
                    }
                }

                $this->collCommonEchangeDestinataires = $collCommonEchangeDestinataires;
                $this->collCommonEchangeDestinatairesPartial = false;
            }
        }

        return $this->collCommonEchangeDestinataires;
    }

    /**
     * Sets a collection of CommonEchangeDestinataire objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonEchangeDestinataires A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonEchange The current object (for fluent API support)
     */
    public function setCommonEchangeDestinataires(PropelCollection $commonEchangeDestinataires, PropelPDO $con = null)
    {
        $commonEchangeDestinatairesToDelete = $this->getCommonEchangeDestinataires(new Criteria(), $con)->diff($commonEchangeDestinataires);


        $this->commonEchangeDestinatairesScheduledForDeletion = $commonEchangeDestinatairesToDelete;

        foreach ($commonEchangeDestinatairesToDelete as $commonEchangeDestinataireRemoved) {
            $commonEchangeDestinataireRemoved->setCommonEchange(null);
        }

        $this->collCommonEchangeDestinataires = null;
        foreach ($commonEchangeDestinataires as $commonEchangeDestinataire) {
            $this->addCommonEchangeDestinataire($commonEchangeDestinataire);
        }

        $this->collCommonEchangeDestinataires = $commonEchangeDestinataires;
        $this->collCommonEchangeDestinatairesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonEchangeDestinataire objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonEchangeDestinataire objects.
     * @throws PropelException
     */
    public function countCommonEchangeDestinataires(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonEchangeDestinatairesPartial && !$this->isNew();
        if (null === $this->collCommonEchangeDestinataires || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonEchangeDestinataires) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonEchangeDestinataires());
            }
            $query = CommonEchangeDestinataireQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonEchange($this)
                ->count($con);
        }

        return count($this->collCommonEchangeDestinataires);
    }

    /**
     * Method called to associate a CommonEchangeDestinataire object to this object
     * through the CommonEchangeDestinataire foreign key attribute.
     *
     * @param   CommonEchangeDestinataire $l CommonEchangeDestinataire
     * @return CommonEchange The current object (for fluent API support)
     */
    public function addCommonEchangeDestinataire(CommonEchangeDestinataire $l)
    {
        if ($this->collCommonEchangeDestinataires === null) {
            $this->initCommonEchangeDestinataires();
            $this->collCommonEchangeDestinatairesPartial = true;
        }
        if (!in_array($l, $this->collCommonEchangeDestinataires->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonEchangeDestinataire($l);
        }

        return $this;
    }

    /**
     * @param	CommonEchangeDestinataire $commonEchangeDestinataire The commonEchangeDestinataire object to add.
     */
    protected function doAddCommonEchangeDestinataire($commonEchangeDestinataire)
    {
        $this->collCommonEchangeDestinataires[]= $commonEchangeDestinataire;
        $commonEchangeDestinataire->setCommonEchange($this);
    }

    /**
     * @param	CommonEchangeDestinataire $commonEchangeDestinataire The commonEchangeDestinataire object to remove.
     * @return CommonEchange The current object (for fluent API support)
     */
    public function removeCommonEchangeDestinataire($commonEchangeDestinataire)
    {
        if ($this->getCommonEchangeDestinataires()->contains($commonEchangeDestinataire)) {
            $this->collCommonEchangeDestinataires->remove($this->collCommonEchangeDestinataires->search($commonEchangeDestinataire));
            if (null === $this->commonEchangeDestinatairesScheduledForDeletion) {
                $this->commonEchangeDestinatairesScheduledForDeletion = clone $this->collCommonEchangeDestinataires;
                $this->commonEchangeDestinatairesScheduledForDeletion->clear();
            }
            $this->commonEchangeDestinatairesScheduledForDeletion[]= clone $commonEchangeDestinataire;
            $commonEchangeDestinataire->setCommonEchange(null);
        }

        return $this;
    }

    /**
     * Clears out the collCommonEchangePieceJointes collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonEchange The current object (for fluent API support)
     * @see        addCommonEchangePieceJointes()
     */
    public function clearCommonEchangePieceJointes()
    {
        $this->collCommonEchangePieceJointes = null; // important to set this to null since that means it is uninitialized
        $this->collCommonEchangePieceJointesPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonEchangePieceJointes collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonEchangePieceJointes($v = true)
    {
        $this->collCommonEchangePieceJointesPartial = $v;
    }

    /**
     * Initializes the collCommonEchangePieceJointes collection.
     *
     * By default this just sets the collCommonEchangePieceJointes collection to an empty array (like clearcollCommonEchangePieceJointes());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonEchangePieceJointes($overrideExisting = true)
    {
        if (null !== $this->collCommonEchangePieceJointes && !$overrideExisting) {
            return;
        }
        $this->collCommonEchangePieceJointes = new PropelObjectCollection();
        $this->collCommonEchangePieceJointes->setModel('CommonEchangePieceJointe');
    }

    /**
     * Gets an array of CommonEchangePieceJointe objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonEchange is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonEchangePieceJointe[] List of CommonEchangePieceJointe objects
     * @throws PropelException
     */
    public function getCommonEchangePieceJointes($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonEchangePieceJointesPartial && !$this->isNew();
        if (null === $this->collCommonEchangePieceJointes || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonEchangePieceJointes) {
                // return empty collection
                $this->initCommonEchangePieceJointes();
            } else {
                $collCommonEchangePieceJointes = CommonEchangePieceJointeQuery::create(null, $criteria)
                    ->filterByCommonEchange($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonEchangePieceJointesPartial && count($collCommonEchangePieceJointes)) {
                      $this->initCommonEchangePieceJointes(false);

                      foreach ($collCommonEchangePieceJointes as $obj) {
                        if (false == $this->collCommonEchangePieceJointes->contains($obj)) {
                          $this->collCommonEchangePieceJointes->append($obj);
                        }
                      }

                      $this->collCommonEchangePieceJointesPartial = true;
                    }

                    $collCommonEchangePieceJointes->getInternalIterator()->rewind();

                    return $collCommonEchangePieceJointes;
                }

                if ($partial && $this->collCommonEchangePieceJointes) {
                    foreach ($this->collCommonEchangePieceJointes as $obj) {
                        if ($obj->isNew()) {
                            $collCommonEchangePieceJointes[] = $obj;
                        }
                    }
                }

                $this->collCommonEchangePieceJointes = $collCommonEchangePieceJointes;
                $this->collCommonEchangePieceJointesPartial = false;
            }
        }

        return $this->collCommonEchangePieceJointes;
    }

    /**
     * Sets a collection of CommonEchangePieceJointe objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonEchangePieceJointes A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonEchange The current object (for fluent API support)
     */
    public function setCommonEchangePieceJointes(PropelCollection $commonEchangePieceJointes, PropelPDO $con = null)
    {
        $commonEchangePieceJointesToDelete = $this->getCommonEchangePieceJointes(new Criteria(), $con)->diff($commonEchangePieceJointes);


        $this->commonEchangePieceJointesScheduledForDeletion = $commonEchangePieceJointesToDelete;

        foreach ($commonEchangePieceJointesToDelete as $commonEchangePieceJointeRemoved) {
            $commonEchangePieceJointeRemoved->setCommonEchange(null);
        }

        $this->collCommonEchangePieceJointes = null;
        foreach ($commonEchangePieceJointes as $commonEchangePieceJointe) {
            $this->addCommonEchangePieceJointe($commonEchangePieceJointe);
        }

        $this->collCommonEchangePieceJointes = $commonEchangePieceJointes;
        $this->collCommonEchangePieceJointesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonEchangePieceJointe objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonEchangePieceJointe objects.
     * @throws PropelException
     */
    public function countCommonEchangePieceJointes(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonEchangePieceJointesPartial && !$this->isNew();
        if (null === $this->collCommonEchangePieceJointes || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonEchangePieceJointes) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonEchangePieceJointes());
            }
            $query = CommonEchangePieceJointeQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonEchange($this)
                ->count($con);
        }

        return count($this->collCommonEchangePieceJointes);
    }

    /**
     * Method called to associate a CommonEchangePieceJointe object to this object
     * through the CommonEchangePieceJointe foreign key attribute.
     *
     * @param   CommonEchangePieceJointe $l CommonEchangePieceJointe
     * @return CommonEchange The current object (for fluent API support)
     */
    public function addCommonEchangePieceJointe(CommonEchangePieceJointe $l)
    {
        if ($this->collCommonEchangePieceJointes === null) {
            $this->initCommonEchangePieceJointes();
            $this->collCommonEchangePieceJointesPartial = true;
        }
        if (!in_array($l, $this->collCommonEchangePieceJointes->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonEchangePieceJointe($l);
        }

        return $this;
    }

    /**
     * @param	CommonEchangePieceJointe $commonEchangePieceJointe The commonEchangePieceJointe object to add.
     */
    protected function doAddCommonEchangePieceJointe($commonEchangePieceJointe)
    {
        $this->collCommonEchangePieceJointes[]= $commonEchangePieceJointe;
        $commonEchangePieceJointe->setCommonEchange($this);
    }

    /**
     * @param	CommonEchangePieceJointe $commonEchangePieceJointe The commonEchangePieceJointe object to remove.
     * @return CommonEchange The current object (for fluent API support)
     */
    public function removeCommonEchangePieceJointe($commonEchangePieceJointe)
    {
        if ($this->getCommonEchangePieceJointes()->contains($commonEchangePieceJointe)) {
            $this->collCommonEchangePieceJointes->remove($this->collCommonEchangePieceJointes->search($commonEchangePieceJointe));
            if (null === $this->commonEchangePieceJointesScheduledForDeletion) {
                $this->commonEchangePieceJointesScheduledForDeletion = clone $this->collCommonEchangePieceJointes;
                $this->commonEchangePieceJointesScheduledForDeletion->clear();
            }
            $this->commonEchangePieceJointesScheduledForDeletion[]= clone $commonEchangePieceJointe;
            $commonEchangePieceJointe->setCommonEchange(null);
        }

        return $this;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->organisme = null;
        $this->objet = null;
        $this->corps = null;
        $this->expediteur = null;
        $this->id_createur = null;
        $this->ref_consultation = null;
        $this->option_envoi = null;
        $this->date_message = null;
        $this->format = null;
        $this->id_action_declencheur = null;
        $this->status = null;
        $this->service_id = null;
        $this->email_expediteur = null;
        $this->id_type_message = null;
        $this->destinataires_retraits = null;
        $this->destinataires_questions = null;
        $this->destinataires_depots = null;
        $this->destinataires_bd_fournisseurs = null;
        $this->destinataires_libres = null;
        $this->page_source = null;
        $this->destinataires = null;
        $this->destinataire_visioconference = null;
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
            if ($this->collCommonEchangeDestinataires) {
                foreach ($this->collCommonEchangeDestinataires as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonEchangePieceJointes) {
                foreach ($this->collCommonEchangePieceJointes as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCommonEchangeDestinataires instanceof PropelCollection) {
            $this->collCommonEchangeDestinataires->clearIterator();
        }
        $this->collCommonEchangeDestinataires = null;
        if ($this->collCommonEchangePieceJointes instanceof PropelCollection) {
            $this->collCommonEchangePieceJointes->clearIterator();
        }
        $this->collCommonEchangePieceJointes = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonEchangePeer::DEFAULT_STRING_FORMAT);
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
