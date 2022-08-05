<?php


/**
 * Base class that represents a row from the 'AVIS' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonAVIS extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonAVISPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonAVISPeer
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
     * The value for the consultation_ref field.
     * @var        int
     */
    protected $consultation_ref;

    /**
     * The value for the avis field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $avis;

    /**
     * The value for the intitule_avis field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $intitule_avis;

    /**
     * The value for the nom_avis field.
     * @var        string
     */
    protected $nom_avis;

    /**
     * The value for the statut field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $statut;

    /**
     * The value for the nom_fichier field.
     * @var        string
     */
    protected $nom_fichier;

    /**
     * The value for the horodatage field.
     * @var        resource
     */
    protected $horodatage;

    /**
     * The value for the untrusteddate field.
     * Note: this column has a database default value of: NULL
     * @var        string
     */
    protected $untrusteddate;

    /**
     * The value for the agent_id field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $agent_id;

    /**
     * The value for the avis_telechargeable field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $avis_telechargeable;

    /**
     * The value for the url field.
     * @var        string
     */
    protected $url;

    /**
     * The value for the type field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $type;

    /**
     * The value for the date_creation field.
     * @var        string
     */
    protected $date_creation;

    /**
     * The value for the date_pub field.
     * @var        string
     */
    protected $date_pub;

    /**
     * The value for the type_doc_genere field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $type_doc_genere;

    /**
     * The value for the langue field.
     * @var        string
     */
    protected $langue;

    /**
     * The value for the type_avis_pub field.
     * @var        int
     */
    protected $type_avis_pub;

    /**
     * @var        CommonConsultation
     */
    protected $aCommonConsultation;

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
        $this->avis = 0;
        $this->intitule_avis = 0;
        $this->statut = '0';
        $this->untrusteddate = NULL;
        $this->agent_id = 0;
        $this->avis_telechargeable = 0;
        $this->type = '0';
        $this->type_doc_genere = 0;
    }

    /**
     * Initializes internal state of BaseCommonAVIS object.
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
     * Get the [consultation_ref] column value.
     * 
     * @return int
     */
    public function getConsultationRef()
    {

        return $this->consultation_ref;
    }

    /**
     * Get the [avis] column value.
     * 
     * @return int
     */
    public function getAvis()
    {

        return $this->avis;
    }

    /**
     * Get the [intitule_avis] column value.
     * 
     * @return int
     */
    public function getIntituleAvis()
    {

        return $this->intitule_avis;
    }

    /**
     * Get the [nom_avis] column value.
     * 
     * @return string
     */
    public function getNomAvis()
    {

        return $this->nom_avis;
    }

    /**
     * Get the [statut] column value.
     * 
     * @return string
     */
    public function getStatut()
    {

        return $this->statut;
    }

    /**
     * Get the [nom_fichier] column value.
     * 
     * @return string
     */
    public function getNomFichier()
    {

        return $this->nom_fichier;
    }

    /**
     * Get the [horodatage] column value.
     * 
     * @return resource
     */
    public function getHorodatage()
    {

        return $this->horodatage;
    }

    /**
     * Get the [optionally formatted] temporal [untrusteddate] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getUntrusteddate($format = 'Y-m-d H:i:s')
    {
        if ($this->untrusteddate === null) {
            return null;
        }

        if ($this->untrusteddate === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->untrusteddate);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->untrusteddate, true), $x);
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
     * Get the [agent_id] column value.
     * 
     * @return int
     */
    public function getAgentId()
    {

        return $this->agent_id;
    }

    /**
     * Get the [avis_telechargeable] column value.
     * 
     * @return int
     */
    public function getAvisTelechargeable()
    {

        return $this->avis_telechargeable;
    }

    /**
     * Get the [url] column value.
     * 
     * @return string
     */
    public function getUrl()
    {

        return $this->url;
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
     * Get the [date_creation] column value.
     * 
     * @return string
     */
    public function getDateCreation()
    {

        return $this->date_creation;
    }

    /**
     * Get the [date_pub] column value.
     * 
     * @return string
     */
    public function getDatePub()
    {

        return $this->date_pub;
    }

    /**
     * Get the [type_doc_genere] column value.
     * 
     * @return int
     */
    public function getTypeDocGenere()
    {

        return $this->type_doc_genere;
    }

    /**
     * Get the [langue] column value.
     * 
     * @return string
     */
    public function getLangue()
    {

        return $this->langue;
    }

    /**
     * Get the [type_avis_pub] column value.
     * 
     * @return int
     */
    public function getTypeAvisPub()
    {

        return $this->type_avis_pub;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonAVIS The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonAVISPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonAVIS The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonAVISPeer::ORGANISME;
        }

        if ($this->aCommonConsultation !== null && $this->aCommonConsultation->getOrganisme() !== $v) {
            $this->aCommonConsultation = null;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [consultation_ref] column.
     * 
     * @param int $v new value
     * @return CommonAVIS The current object (for fluent API support)
     */
    public function setConsultationRef($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->consultation_ref !== $v) {
            $this->consultation_ref = $v;
            $this->modifiedColumns[] = CommonAVISPeer::CONSULTATION_REF;
        }

        if ($this->aCommonConsultation !== null && $this->aCommonConsultation->getReference() !== $v) {
            $this->aCommonConsultation = null;
        }


        return $this;
    } // setConsultationRef()

    /**
     * Set the value of [avis] column.
     * 
     * @param int $v new value
     * @return CommonAVIS The current object (for fluent API support)
     */
    public function setAvis($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->avis !== $v) {
            $this->avis = $v;
            $this->modifiedColumns[] = CommonAVISPeer::AVIS;
        }


        return $this;
    } // setAvis()

    /**
     * Set the value of [intitule_avis] column.
     * 
     * @param int $v new value
     * @return CommonAVIS The current object (for fluent API support)
     */
    public function setIntituleAvis($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->intitule_avis !== $v) {
            $this->intitule_avis = $v;
            $this->modifiedColumns[] = CommonAVISPeer::INTITULE_AVIS;
        }


        return $this;
    } // setIntituleAvis()

    /**
     * Set the value of [nom_avis] column.
     * 
     * @param string $v new value
     * @return CommonAVIS The current object (for fluent API support)
     */
    public function setNomAvis($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_avis !== $v) {
            $this->nom_avis = $v;
            $this->modifiedColumns[] = CommonAVISPeer::NOM_AVIS;
        }


        return $this;
    } // setNomAvis()

    /**
     * Set the value of [statut] column.
     * 
     * @param string $v new value
     * @return CommonAVIS The current object (for fluent API support)
     */
    public function setStatut($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->statut !== $v) {
            $this->statut = $v;
            $this->modifiedColumns[] = CommonAVISPeer::STATUT;
        }


        return $this;
    } // setStatut()

    /**
     * Set the value of [nom_fichier] column.
     * 
     * @param string $v new value
     * @return CommonAVIS The current object (for fluent API support)
     */
    public function setNomFichier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_fichier !== $v) {
            $this->nom_fichier = $v;
            $this->modifiedColumns[] = CommonAVISPeer::NOM_FICHIER;
        }


        return $this;
    } // setNomFichier()

    /**
     * Set the value of [horodatage] column.
     * 
     * @param resource $v new value
     * @return CommonAVIS The current object (for fluent API support)
     */
    public function setHorodatage($v)
    {
        // Because BLOB columns are streams in PDO we have to assume that they are
        // always modified when a new value is passed in.  For example, the contents
        // of the stream itself may have changed externally.
        if (!is_resource($v) && $v !== null) {
            $this->horodatage = fopen('php://memory', 'r+');
            fwrite($this->horodatage, $v);
            rewind($this->horodatage);
        } else { // it's already a stream
            $this->horodatage = $v;
        }
        $this->modifiedColumns[] = CommonAVISPeer::HORODATAGE;


        return $this;
    } // setHorodatage()

    /**
     * Sets the value of [untrusteddate] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonAVIS The current object (for fluent API support)
     */
    public function setUntrusteddate($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->untrusteddate !== null || $dt !== null) {
            $currentDateAsString = ($this->untrusteddate !== null && $tmpDt = new DateTime($this->untrusteddate)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ( ($currentDateAsString !== $newDateAsString) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
                 ) {
                $this->untrusteddate = $newDateAsString;
                $this->modifiedColumns[] = CommonAVISPeer::UNTRUSTEDDATE;
            }
        } // if either are not null


        return $this;
    } // setUntrusteddate()

    /**
     * Set the value of [agent_id] column.
     * 
     * @param int $v new value
     * @return CommonAVIS The current object (for fluent API support)
     */
    public function setAgentId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->agent_id !== $v) {
            $this->agent_id = $v;
            $this->modifiedColumns[] = CommonAVISPeer::AGENT_ID;
        }


        return $this;
    } // setAgentId()

    /**
     * Set the value of [avis_telechargeable] column.
     * 
     * @param int $v new value
     * @return CommonAVIS The current object (for fluent API support)
     */
    public function setAvisTelechargeable($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->avis_telechargeable !== $v) {
            $this->avis_telechargeable = $v;
            $this->modifiedColumns[] = CommonAVISPeer::AVIS_TELECHARGEABLE;
        }


        return $this;
    } // setAvisTelechargeable()

    /**
     * Set the value of [url] column.
     * 
     * @param string $v new value
     * @return CommonAVIS The current object (for fluent API support)
     */
    public function setUrl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->url !== $v) {
            $this->url = $v;
            $this->modifiedColumns[] = CommonAVISPeer::URL;
        }


        return $this;
    } // setUrl()

    /**
     * Set the value of [type] column.
     * 
     * @param string $v new value
     * @return CommonAVIS The current object (for fluent API support)
     */
    public function setType($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type !== $v) {
            $this->type = $v;
            $this->modifiedColumns[] = CommonAVISPeer::TYPE;
        }


        return $this;
    } // setType()

    /**
     * Set the value of [date_creation] column.
     * 
     * @param string $v new value
     * @return CommonAVIS The current object (for fluent API support)
     */
    public function setDateCreation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_creation !== $v) {
            $this->date_creation = $v;
            $this->modifiedColumns[] = CommonAVISPeer::DATE_CREATION;
        }


        return $this;
    } // setDateCreation()

    /**
     * Set the value of [date_pub] column.
     * 
     * @param string $v new value
     * @return CommonAVIS The current object (for fluent API support)
     */
    public function setDatePub($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_pub !== $v) {
            $this->date_pub = $v;
            $this->modifiedColumns[] = CommonAVISPeer::DATE_PUB;
        }


        return $this;
    } // setDatePub()

    /**
     * Set the value of [type_doc_genere] column.
     * 
     * @param int $v new value
     * @return CommonAVIS The current object (for fluent API support)
     */
    public function setTypeDocGenere($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type_doc_genere !== $v) {
            $this->type_doc_genere = $v;
            $this->modifiedColumns[] = CommonAVISPeer::TYPE_DOC_GENERE;
        }


        return $this;
    } // setTypeDocGenere()

    /**
     * Set the value of [langue] column.
     * 
     * @param string $v new value
     * @return CommonAVIS The current object (for fluent API support)
     */
    public function setLangue($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->langue !== $v) {
            $this->langue = $v;
            $this->modifiedColumns[] = CommonAVISPeer::LANGUE;
        }


        return $this;
    } // setLangue()

    /**
     * Set the value of [type_avis_pub] column.
     * 
     * @param int $v new value
     * @return CommonAVIS The current object (for fluent API support)
     */
    public function setTypeAvisPub($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type_avis_pub !== $v) {
            $this->type_avis_pub = $v;
            $this->modifiedColumns[] = CommonAVISPeer::TYPE_AVIS_PUB;
        }


        return $this;
    } // setTypeAvisPub()

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
            if ($this->avis !== 0) {
                return false;
            }

            if ($this->intitule_avis !== 0) {
                return false;
            }

            if ($this->statut !== '0') {
                return false;
            }

            if ($this->untrusteddate !== NULL) {
                return false;
            }

            if ($this->agent_id !== 0) {
                return false;
            }

            if ($this->avis_telechargeable !== 0) {
                return false;
            }

            if ($this->type !== '0') {
                return false;
            }

            if ($this->type_doc_genere !== 0) {
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
            $this->consultation_ref = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->avis = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->intitule_avis = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->nom_avis = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->statut = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->nom_fichier = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            if ($row[$startcol + 8] !== null) {
                $this->horodatage = fopen('php://memory', 'r+');
                fwrite($this->horodatage, $row[$startcol + 8]);
                rewind($this->horodatage);
            } else {
                $this->horodatage = null;
            }
            $this->untrusteddate = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->agent_id = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->avis_telechargeable = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->url = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->type = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->date_creation = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->date_pub = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->type_doc_genere = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->langue = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->type_avis_pub = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 19; // 19 = CommonAVISPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonAVIS object", $e);
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

        if ($this->aCommonConsultation !== null && $this->organisme !== $this->aCommonConsultation->getOrganisme()) {
            $this->aCommonConsultation = null;
        }
        if ($this->aCommonConsultation !== null && $this->consultation_ref !== $this->aCommonConsultation->getReference()) {
            $this->aCommonConsultation = null;
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
            $con = Propel::getConnection(CommonAVISPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonAVISPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonConsultation = null;
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
            $con = Propel::getConnection(CommonAVISPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonAVISQuery::create()
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
            $con = Propel::getConnection(CommonAVISPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonAVISPeer::addInstanceToPool($this);
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

            if ($this->aCommonConsultation !== null) {
                if ($this->aCommonConsultation->isModified() || $this->aCommonConsultation->isNew()) {
                    $affectedRows += $this->aCommonConsultation->save($con);
                }
                $this->setCommonConsultation($this->aCommonConsultation);
            }

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                // Rewind the horodatage LOB column, since PDO does not rewind after inserting value.
                if ($this->horodatage !== null && is_resource($this->horodatage)) {
                    rewind($this->horodatage);
                }

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

        $this->modifiedColumns[] = CommonAVISPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonAVISPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonAVISPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonAVISPeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonAVISPeer::CONSULTATION_REF)) {
            $modifiedColumns[':p' . $index++]  = '`consultation_ref`';
        }
        if ($this->isColumnModified(CommonAVISPeer::AVIS)) {
            $modifiedColumns[':p' . $index++]  = '`avis`';
        }
        if ($this->isColumnModified(CommonAVISPeer::INTITULE_AVIS)) {
            $modifiedColumns[':p' . $index++]  = '`intitule_avis`';
        }
        if ($this->isColumnModified(CommonAVISPeer::NOM_AVIS)) {
            $modifiedColumns[':p' . $index++]  = '`nom_avis`';
        }
        if ($this->isColumnModified(CommonAVISPeer::STATUT)) {
            $modifiedColumns[':p' . $index++]  = '`statut`';
        }
        if ($this->isColumnModified(CommonAVISPeer::NOM_FICHIER)) {
            $modifiedColumns[':p' . $index++]  = '`nom_fichier`';
        }
        if ($this->isColumnModified(CommonAVISPeer::HORODATAGE)) {
            $modifiedColumns[':p' . $index++]  = '`horodatage`';
        }
        if ($this->isColumnModified(CommonAVISPeer::UNTRUSTEDDATE)) {
            $modifiedColumns[':p' . $index++]  = '`untrusteddate`';
        }
        if ($this->isColumnModified(CommonAVISPeer::AGENT_ID)) {
            $modifiedColumns[':p' . $index++]  = '`agent_id`';
        }
        if ($this->isColumnModified(CommonAVISPeer::AVIS_TELECHARGEABLE)) {
            $modifiedColumns[':p' . $index++]  = '`avis_telechargeable`';
        }
        if ($this->isColumnModified(CommonAVISPeer::URL)) {
            $modifiedColumns[':p' . $index++]  = '`url`';
        }
        if ($this->isColumnModified(CommonAVISPeer::TYPE)) {
            $modifiedColumns[':p' . $index++]  = '`type`';
        }
        if ($this->isColumnModified(CommonAVISPeer::DATE_CREATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_creation`';
        }
        if ($this->isColumnModified(CommonAVISPeer::DATE_PUB)) {
            $modifiedColumns[':p' . $index++]  = '`date_pub`';
        }
        if ($this->isColumnModified(CommonAVISPeer::TYPE_DOC_GENERE)) {
            $modifiedColumns[':p' . $index++]  = '`type_doc_genere`';
        }
        if ($this->isColumnModified(CommonAVISPeer::LANGUE)) {
            $modifiedColumns[':p' . $index++]  = '`langue`';
        }
        if ($this->isColumnModified(CommonAVISPeer::TYPE_AVIS_PUB)) {
            $modifiedColumns[':p' . $index++]  = '`type_avis_pub`';
        }

        $sql = sprintf(
            'INSERT INTO `AVIS` (%s) VALUES (%s)',
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
                    case '`consultation_ref`':						
                        $stmt->bindValue($identifier, $this->consultation_ref, PDO::PARAM_INT);
                        break;
                    case '`avis`':						
                        $stmt->bindValue($identifier, $this->avis, PDO::PARAM_INT);
                        break;
                    case '`intitule_avis`':						
                        $stmt->bindValue($identifier, $this->intitule_avis, PDO::PARAM_INT);
                        break;
                    case '`nom_avis`':						
                        $stmt->bindValue($identifier, $this->nom_avis, PDO::PARAM_STR);
                        break;
                    case '`statut`':						
                        $stmt->bindValue($identifier, $this->statut, PDO::PARAM_STR);
                        break;
                    case '`nom_fichier`':						
                        $stmt->bindValue($identifier, $this->nom_fichier, PDO::PARAM_STR);
                        break;
                    case '`horodatage`':						
                        if (is_resource($this->horodatage)) {
                            rewind($this->horodatage);
                        }
                        $stmt->bindValue($identifier, $this->horodatage, PDO::PARAM_LOB);
                        break;
                    case '`untrusteddate`':						
                        $stmt->bindValue($identifier, $this->untrusteddate, PDO::PARAM_STR);
                        break;
                    case '`agent_id`':						
                        $stmt->bindValue($identifier, $this->agent_id, PDO::PARAM_INT);
                        break;
                    case '`avis_telechargeable`':						
                        $stmt->bindValue($identifier, $this->avis_telechargeable, PDO::PARAM_INT);
                        break;
                    case '`url`':						
                        $stmt->bindValue($identifier, $this->url, PDO::PARAM_STR);
                        break;
                    case '`type`':						
                        $stmt->bindValue($identifier, $this->type, PDO::PARAM_STR);
                        break;
                    case '`date_creation`':						
                        $stmt->bindValue($identifier, $this->date_creation, PDO::PARAM_STR);
                        break;
                    case '`date_pub`':						
                        $stmt->bindValue($identifier, $this->date_pub, PDO::PARAM_STR);
                        break;
                    case '`type_doc_genere`':						
                        $stmt->bindValue($identifier, $this->type_doc_genere, PDO::PARAM_INT);
                        break;
                    case '`langue`':						
                        $stmt->bindValue($identifier, $this->langue, PDO::PARAM_STR);
                        break;
                    case '`type_avis_pub`':						
                        $stmt->bindValue($identifier, $this->type_avis_pub, PDO::PARAM_INT);
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

            if ($this->aCommonConsultation !== null) {
                if (!$this->aCommonConsultation->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonConsultation->getValidationFailures());
                }
            }


            if (($retval = CommonAVISPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonAVISPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getConsultationRef();
                break;
            case 3:
                return $this->getAvis();
                break;
            case 4:
                return $this->getIntituleAvis();
                break;
            case 5:
                return $this->getNomAvis();
                break;
            case 6:
                return $this->getStatut();
                break;
            case 7:
                return $this->getNomFichier();
                break;
            case 8:
                return $this->getHorodatage();
                break;
            case 9:
                return $this->getUntrusteddate();
                break;
            case 10:
                return $this->getAgentId();
                break;
            case 11:
                return $this->getAvisTelechargeable();
                break;
            case 12:
                return $this->getUrl();
                break;
            case 13:
                return $this->getType();
                break;
            case 14:
                return $this->getDateCreation();
                break;
            case 15:
                return $this->getDatePub();
                break;
            case 16:
                return $this->getTypeDocGenere();
                break;
            case 17:
                return $this->getLangue();
                break;
            case 18:
                return $this->getTypeAvisPub();
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
        if (isset($alreadyDumpedObjects['CommonAVIS'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonAVIS'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonAVISPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getConsultationRef(),
            $keys[3] => $this->getAvis(),
            $keys[4] => $this->getIntituleAvis(),
            $keys[5] => $this->getNomAvis(),
            $keys[6] => $this->getStatut(),
            $keys[7] => $this->getNomFichier(),
            $keys[8] => $this->getHorodatage(),
            $keys[9] => $this->getUntrusteddate(),
            $keys[10] => $this->getAgentId(),
            $keys[11] => $this->getAvisTelechargeable(),
            $keys[12] => $this->getUrl(),
            $keys[13] => $this->getType(),
            $keys[14] => $this->getDateCreation(),
            $keys[15] => $this->getDatePub(),
            $keys[16] => $this->getTypeDocGenere(),
            $keys[17] => $this->getLangue(),
            $keys[18] => $this->getTypeAvisPub(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonConsultation) {
                $result['CommonConsultation'] = $this->aCommonConsultation->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = CommonAVISPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setConsultationRef($value);
                break;
            case 3:
                $this->setAvis($value);
                break;
            case 4:
                $this->setIntituleAvis($value);
                break;
            case 5:
                $this->setNomAvis($value);
                break;
            case 6:
                $this->setStatut($value);
                break;
            case 7:
                $this->setNomFichier($value);
                break;
            case 8:
                $this->setHorodatage($value);
                break;
            case 9:
                $this->setUntrusteddate($value);
                break;
            case 10:
                $this->setAgentId($value);
                break;
            case 11:
                $this->setAvisTelechargeable($value);
                break;
            case 12:
                $this->setUrl($value);
                break;
            case 13:
                $this->setType($value);
                break;
            case 14:
                $this->setDateCreation($value);
                break;
            case 15:
                $this->setDatePub($value);
                break;
            case 16:
                $this->setTypeDocGenere($value);
                break;
            case 17:
                $this->setLangue($value);
                break;
            case 18:
                $this->setTypeAvisPub($value);
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
        $keys = CommonAVISPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setConsultationRef($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setAvis($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIntituleAvis($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setNomAvis($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setStatut($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setNomFichier($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setHorodatage($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setUntrusteddate($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setAgentId($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setAvisTelechargeable($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setUrl($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setType($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setDateCreation($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setDatePub($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setTypeDocGenere($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setLangue($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setTypeAvisPub($arr[$keys[18]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonAVISPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonAVISPeer::ID)) $criteria->add(CommonAVISPeer::ID, $this->id);
        if ($this->isColumnModified(CommonAVISPeer::ORGANISME)) $criteria->add(CommonAVISPeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonAVISPeer::CONSULTATION_REF)) $criteria->add(CommonAVISPeer::CONSULTATION_REF, $this->consultation_ref);
        if ($this->isColumnModified(CommonAVISPeer::AVIS)) $criteria->add(CommonAVISPeer::AVIS, $this->avis);
        if ($this->isColumnModified(CommonAVISPeer::INTITULE_AVIS)) $criteria->add(CommonAVISPeer::INTITULE_AVIS, $this->intitule_avis);
        if ($this->isColumnModified(CommonAVISPeer::NOM_AVIS)) $criteria->add(CommonAVISPeer::NOM_AVIS, $this->nom_avis);
        if ($this->isColumnModified(CommonAVISPeer::STATUT)) $criteria->add(CommonAVISPeer::STATUT, $this->statut);
        if ($this->isColumnModified(CommonAVISPeer::NOM_FICHIER)) $criteria->add(CommonAVISPeer::NOM_FICHIER, $this->nom_fichier);
        if ($this->isColumnModified(CommonAVISPeer::HORODATAGE)) $criteria->add(CommonAVISPeer::HORODATAGE, $this->horodatage);
        if ($this->isColumnModified(CommonAVISPeer::UNTRUSTEDDATE)) $criteria->add(CommonAVISPeer::UNTRUSTEDDATE, $this->untrusteddate);
        if ($this->isColumnModified(CommonAVISPeer::AGENT_ID)) $criteria->add(CommonAVISPeer::AGENT_ID, $this->agent_id);
        if ($this->isColumnModified(CommonAVISPeer::AVIS_TELECHARGEABLE)) $criteria->add(CommonAVISPeer::AVIS_TELECHARGEABLE, $this->avis_telechargeable);
        if ($this->isColumnModified(CommonAVISPeer::URL)) $criteria->add(CommonAVISPeer::URL, $this->url);
        if ($this->isColumnModified(CommonAVISPeer::TYPE)) $criteria->add(CommonAVISPeer::TYPE, $this->type);
        if ($this->isColumnModified(CommonAVISPeer::DATE_CREATION)) $criteria->add(CommonAVISPeer::DATE_CREATION, $this->date_creation);
        if ($this->isColumnModified(CommonAVISPeer::DATE_PUB)) $criteria->add(CommonAVISPeer::DATE_PUB, $this->date_pub);
        if ($this->isColumnModified(CommonAVISPeer::TYPE_DOC_GENERE)) $criteria->add(CommonAVISPeer::TYPE_DOC_GENERE, $this->type_doc_genere);
        if ($this->isColumnModified(CommonAVISPeer::LANGUE)) $criteria->add(CommonAVISPeer::LANGUE, $this->langue);
        if ($this->isColumnModified(CommonAVISPeer::TYPE_AVIS_PUB)) $criteria->add(CommonAVISPeer::TYPE_AVIS_PUB, $this->type_avis_pub);

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
        $criteria = new Criteria(CommonAVISPeer::DATABASE_NAME);
        $criteria->add(CommonAVISPeer::ID, $this->id);
        $criteria->add(CommonAVISPeer::ORGANISME, $this->organisme);

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
     * @param object $copyObj An object of CommonAVIS (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setConsultationRef($this->getConsultationRef());
        $copyObj->setAvis($this->getAvis());
        $copyObj->setIntituleAvis($this->getIntituleAvis());
        $copyObj->setNomAvis($this->getNomAvis());
        $copyObj->setStatut($this->getStatut());
        $copyObj->setNomFichier($this->getNomFichier());
        $copyObj->setHorodatage($this->getHorodatage());
        $copyObj->setUntrusteddate($this->getUntrusteddate());
        $copyObj->setAgentId($this->getAgentId());
        $copyObj->setAvisTelechargeable($this->getAvisTelechargeable());
        $copyObj->setUrl($this->getUrl());
        $copyObj->setType($this->getType());
        $copyObj->setDateCreation($this->getDateCreation());
        $copyObj->setDatePub($this->getDatePub());
        $copyObj->setTypeDocGenere($this->getTypeDocGenere());
        $copyObj->setLangue($this->getLangue());
        $copyObj->setTypeAvisPub($this->getTypeAvisPub());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

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
     * @return CommonAVIS Clone of current object.
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
     * @return CommonAVISPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonAVISPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonConsultation object.
     *
     * @param   CommonConsultation $v
     * @return CommonAVIS The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonConsultation(CommonConsultation $v = null)
    {
        if ($v === null) {
            $this->setOrganisme(NULL);
        } else {
            $this->setOrganisme($v->getOrganisme());
        }

        if ($v === null) {
            $this->setConsultationRef(NULL);
        } else {
            $this->setConsultationRef($v->getReference());
        }

        $this->aCommonConsultation = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonConsultation object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonAVIS($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonConsultation object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonConsultation The associated CommonConsultation object.
     * @throws PropelException
     */
    public function getCommonConsultation(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonConsultation === null && (($this->organisme !== "" && $this->organisme !== null) && $this->consultation_ref !== null) && $doQuery) {
            $this->aCommonConsultation = CommonConsultationQuery::create()->findPk(array($this->consultation_ref, $this->organisme), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonConsultation->addCommonAVISs($this);
             */
        }

        return $this->aCommonConsultation;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->organisme = null;
        $this->consultation_ref = null;
        $this->avis = null;
        $this->intitule_avis = null;
        $this->nom_avis = null;
        $this->statut = null;
        $this->nom_fichier = null;
        $this->horodatage = null;
        $this->untrusteddate = null;
        $this->agent_id = null;
        $this->avis_telechargeable = null;
        $this->url = null;
        $this->type = null;
        $this->date_creation = null;
        $this->date_pub = null;
        $this->type_doc_genere = null;
        $this->langue = null;
        $this->type_avis_pub = null;
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
            if ($this->aCommonConsultation instanceof Persistent) {
              $this->aCommonConsultation->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aCommonConsultation = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonAVISPeer::DEFAULT_STRING_FORMAT);
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
