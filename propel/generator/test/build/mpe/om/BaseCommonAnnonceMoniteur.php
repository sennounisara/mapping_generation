<?php


/**
 * Base class that represents a row from the 'AnnonceMoniteur' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonAnnonceMoniteur extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonAnnonceMoniteurPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonAnnonceMoniteurPeer
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
     * The value for the date_envoi field.
     * Note: this column has a database default value of: '0000-00-00 00:00:00'
     * @var        string
     */
    protected $date_envoi;

    /**
     * The value for the type_moniteur field.
     * @var        string
     */
    protected $type_moniteur;

    /**
     * The value for the statut_xml field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $statut_xml;

    /**
     * The value for the date_creation field.
     * Note: this column has a database default value of: NULL
     * @var        string
     */
    protected $date_creation;

    /**
     * The value for the statut_web field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $statut_web;

    /**
     * The value for the statut_arg field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $statut_arg;

    /**
     * The value for the statut_usn field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $statut_usn;

    /**
     * The value for the statut_01i field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $statut_01i;

    /**
     * The value for the datepub field.
     * @var        string
     */
    protected $datepub;

    /**
     * The value for the num_annonce field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $num_annonce;

    /**
     * The value for the message_error field.
     * @var        string
     */
    protected $message_error;

    /**
     * The value for the timestamp field.
     * @var        resource
     */
    protected $timestamp;

    /**
     * The value for the nom_timestamp field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $nom_timestamp;

    /**
     * The value for the xml_moniteur field.
     * @var        string
     */
    protected $xml_moniteur;

    /**
     * The value for the id_annonce_boamp field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_annonce_boamp;

    /**
     * The value for the date_maj field.
     * Note: this column has a database default value of: '0000-00-00 00:00:00'
     * @var        string
     */
    protected $date_maj;

    /**
     * The value for the id_form_xml field.
     * @var        int
     */
    protected $id_form_xml;

    /**
     * The value for the accuse_reception field.
     * @var        string
     */
    protected $accuse_reception;

    /**
     * The value for the id_destination_form_xml field.
     * @var        int
     */
    protected $id_destination_form_xml;

    /**
     * The value for the statut_destinataire field.
     * @var        string
     */
    protected $statut_destinataire;

    /**
     * The value for the commentaire field.
     * @var        string
     */
    protected $commentaire;

    /**
     * @var        CommonReferentielDestinationFormXml
     */
    protected $aCommonReferentielDestinationFormXml;

    /**
     * @var        CommonReferentielFormXml
     */
    protected $aCommonReferentielFormXml;

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
        $this->date_envoi = '0000-00-00 00:00:00';
        $this->statut_xml = '0';
        $this->date_creation = NULL;
        $this->statut_web = '0';
        $this->statut_arg = '0';
        $this->statut_usn = '0';
        $this->statut_01i = '0';
        $this->num_annonce = 0;
        $this->nom_timestamp = '';
        $this->id_annonce_boamp = 0;
        $this->date_maj = '0000-00-00 00:00:00';
    }

    /**
     * Initializes internal state of BaseCommonAnnonceMoniteur object.
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
     * Get the [date_envoi] column value.
     * 
     * @return string
     */
    public function getDateEnvoi()
    {

        return $this->date_envoi;
    }

    /**
     * Get the [type_moniteur] column value.
     * 
     * @return string
     */
    public function getTypeMoniteur()
    {

        return $this->type_moniteur;
    }

    /**
     * Get the [statut_xml] column value.
     * 
     * @return string
     */
    public function getStatutXml()
    {

        return $this->statut_xml;
    }

    /**
     * Get the [optionally formatted] temporal [date_creation] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateCreation($format = null)
    {
        if ($this->date_creation === null) {
            return null;
        }

        if ($this->date_creation === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_creation);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_creation, true), $x);
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
     * Get the [statut_web] column value.
     * 
     * @return string
     */
    public function getStatutWeb()
    {

        return $this->statut_web;
    }

    /**
     * Get the [statut_arg] column value.
     * 
     * @return string
     */
    public function getStatutArg()
    {

        return $this->statut_arg;
    }

    /**
     * Get the [statut_usn] column value.
     * 
     * @return string
     */
    public function getStatutUsn()
    {

        return $this->statut_usn;
    }

    /**
     * Get the [statut_01i] column value.
     * 
     * @return string
     */
    public function getStatut01i()
    {

        return $this->statut_01i;
    }

    /**
     * Get the [datepub] column value.
     * 
     * @return string
     */
    public function getDatepub()
    {

        return $this->datepub;
    }

    /**
     * Get the [num_annonce] column value.
     * 
     * @return int
     */
    public function getNumAnnonce()
    {

        return $this->num_annonce;
    }

    /**
     * Get the [message_error] column value.
     * 
     * @return string
     */
    public function getMessageError()
    {

        return $this->message_error;
    }

    /**
     * Get the [timestamp] column value.
     * 
     * @return resource
     */
    public function getTimestamp()
    {

        return $this->timestamp;
    }

    /**
     * Get the [nom_timestamp] column value.
     * 
     * @return string
     */
    public function getNomTimestamp()
    {

        return $this->nom_timestamp;
    }

    /**
     * Get the [xml_moniteur] column value.
     * 
     * @return string
     */
    public function getXmlMoniteur()
    {

        return $this->xml_moniteur;
    }

    /**
     * Get the [id_annonce_boamp] column value.
     * 
     * @return int
     */
    public function getIdAnnonceBoamp()
    {

        return $this->id_annonce_boamp;
    }

    /**
     * Get the [date_maj] column value.
     * 
     * @return string
     */
    public function getDateMaj()
    {

        return $this->date_maj;
    }

    /**
     * Get the [id_form_xml] column value.
     * 
     * @return int
     */
    public function getIdFormXml()
    {

        return $this->id_form_xml;
    }

    /**
     * Get the [accuse_reception] column value.
     * 
     * @return string
     */
    public function getAccuseReception()
    {

        return $this->accuse_reception;
    }

    /**
     * Get the [id_destination_form_xml] column value.
     * 
     * @return int
     */
    public function getIdDestinationFormXml()
    {

        return $this->id_destination_form_xml;
    }

    /**
     * Get the [statut_destinataire] column value.
     * 
     * @return string
     */
    public function getStatutDestinataire()
    {

        return $this->statut_destinataire;
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
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonAnnonceMoniteur The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonAnnonceMoniteurPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonAnnonceMoniteur The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonAnnonceMoniteurPeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [date_envoi] column.
     * 
     * @param string $v new value
     * @return CommonAnnonceMoniteur The current object (for fluent API support)
     */
    public function setDateEnvoi($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_envoi !== $v) {
            $this->date_envoi = $v;
            $this->modifiedColumns[] = CommonAnnonceMoniteurPeer::DATE_ENVOI;
        }


        return $this;
    } // setDateEnvoi()

    /**
     * Set the value of [type_moniteur] column.
     * 
     * @param string $v new value
     * @return CommonAnnonceMoniteur The current object (for fluent API support)
     */
    public function setTypeMoniteur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_moniteur !== $v) {
            $this->type_moniteur = $v;
            $this->modifiedColumns[] = CommonAnnonceMoniteurPeer::TYPE_MONITEUR;
        }


        return $this;
    } // setTypeMoniteur()

    /**
     * Set the value of [statut_xml] column.
     * 
     * @param string $v new value
     * @return CommonAnnonceMoniteur The current object (for fluent API support)
     */
    public function setStatutXml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->statut_xml !== $v) {
            $this->statut_xml = $v;
            $this->modifiedColumns[] = CommonAnnonceMoniteurPeer::STATUT_XML;
        }


        return $this;
    } // setStatutXml()

    /**
     * Sets the value of [date_creation] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonAnnonceMoniteur The current object (for fluent API support)
     */
    public function setDateCreation($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_creation !== null || $dt !== null) {
            $currentDateAsString = ($this->date_creation !== null && $tmpDt = new DateTime($this->date_creation)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ( ($currentDateAsString !== $newDateAsString) // normalized values don't match
                || ($dt->format('Y-m-d') === NULL) // or the entered value matches the default
                 ) {
                $this->date_creation = $newDateAsString;
                $this->modifiedColumns[] = CommonAnnonceMoniteurPeer::DATE_CREATION;
            }
        } // if either are not null


        return $this;
    } // setDateCreation()

    /**
     * Set the value of [statut_web] column.
     * 
     * @param string $v new value
     * @return CommonAnnonceMoniteur The current object (for fluent API support)
     */
    public function setStatutWeb($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->statut_web !== $v) {
            $this->statut_web = $v;
            $this->modifiedColumns[] = CommonAnnonceMoniteurPeer::STATUT_WEB;
        }


        return $this;
    } // setStatutWeb()

    /**
     * Set the value of [statut_arg] column.
     * 
     * @param string $v new value
     * @return CommonAnnonceMoniteur The current object (for fluent API support)
     */
    public function setStatutArg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->statut_arg !== $v) {
            $this->statut_arg = $v;
            $this->modifiedColumns[] = CommonAnnonceMoniteurPeer::STATUT_ARG;
        }


        return $this;
    } // setStatutArg()

    /**
     * Set the value of [statut_usn] column.
     * 
     * @param string $v new value
     * @return CommonAnnonceMoniteur The current object (for fluent API support)
     */
    public function setStatutUsn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->statut_usn !== $v) {
            $this->statut_usn = $v;
            $this->modifiedColumns[] = CommonAnnonceMoniteurPeer::STATUT_USN;
        }


        return $this;
    } // setStatutUsn()

    /**
     * Set the value of [statut_01i] column.
     * 
     * @param string $v new value
     * @return CommonAnnonceMoniteur The current object (for fluent API support)
     */
    public function setStatut01i($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->statut_01i !== $v) {
            $this->statut_01i = $v;
            $this->modifiedColumns[] = CommonAnnonceMoniteurPeer::STATUT_01I;
        }


        return $this;
    } // setStatut01i()

    /**
     * Set the value of [datepub] column.
     * 
     * @param string $v new value
     * @return CommonAnnonceMoniteur The current object (for fluent API support)
     */
    public function setDatepub($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->datepub !== $v) {
            $this->datepub = $v;
            $this->modifiedColumns[] = CommonAnnonceMoniteurPeer::DATEPUB;
        }


        return $this;
    } // setDatepub()

    /**
     * Set the value of [num_annonce] column.
     * 
     * @param int $v new value
     * @return CommonAnnonceMoniteur The current object (for fluent API support)
     */
    public function setNumAnnonce($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->num_annonce !== $v) {
            $this->num_annonce = $v;
            $this->modifiedColumns[] = CommonAnnonceMoniteurPeer::NUM_ANNONCE;
        }


        return $this;
    } // setNumAnnonce()

    /**
     * Set the value of [message_error] column.
     * 
     * @param string $v new value
     * @return CommonAnnonceMoniteur The current object (for fluent API support)
     */
    public function setMessageError($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->message_error !== $v) {
            $this->message_error = $v;
            $this->modifiedColumns[] = CommonAnnonceMoniteurPeer::MESSAGE_ERROR;
        }


        return $this;
    } // setMessageError()

    /**
     * Set the value of [timestamp] column.
     * 
     * @param resource $v new value
     * @return CommonAnnonceMoniteur The current object (for fluent API support)
     */
    public function setTimestamp($v)
    {
        // Because BLOB columns are streams in PDO we have to assume that they are
        // always modified when a new value is passed in.  For example, the contents
        // of the stream itself may have changed externally.
        if (!is_resource($v) && $v !== null) {
            $this->timestamp = fopen('php://memory', 'r+');
            fwrite($this->timestamp, $v);
            rewind($this->timestamp);
        } else { // it's already a stream
            $this->timestamp = $v;
        }
        $this->modifiedColumns[] = CommonAnnonceMoniteurPeer::TIMESTAMP;


        return $this;
    } // setTimestamp()

    /**
     * Set the value of [nom_timestamp] column.
     * 
     * @param string $v new value
     * @return CommonAnnonceMoniteur The current object (for fluent API support)
     */
    public function setNomTimestamp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_timestamp !== $v) {
            $this->nom_timestamp = $v;
            $this->modifiedColumns[] = CommonAnnonceMoniteurPeer::NOM_TIMESTAMP;
        }


        return $this;
    } // setNomTimestamp()

    /**
     * Set the value of [xml_moniteur] column.
     * 
     * @param string $v new value
     * @return CommonAnnonceMoniteur The current object (for fluent API support)
     */
    public function setXmlMoniteur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->xml_moniteur !== $v) {
            $this->xml_moniteur = $v;
            $this->modifiedColumns[] = CommonAnnonceMoniteurPeer::XML_MONITEUR;
        }


        return $this;
    } // setXmlMoniteur()

    /**
     * Set the value of [id_annonce_boamp] column.
     * 
     * @param int $v new value
     * @return CommonAnnonceMoniteur The current object (for fluent API support)
     */
    public function setIdAnnonceBoamp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_annonce_boamp !== $v) {
            $this->id_annonce_boamp = $v;
            $this->modifiedColumns[] = CommonAnnonceMoniteurPeer::ID_ANNONCE_BOAMP;
        }


        return $this;
    } // setIdAnnonceBoamp()

    /**
     * Set the value of [date_maj] column.
     * 
     * @param string $v new value
     * @return CommonAnnonceMoniteur The current object (for fluent API support)
     */
    public function setDateMaj($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_maj !== $v) {
            $this->date_maj = $v;
            $this->modifiedColumns[] = CommonAnnonceMoniteurPeer::DATE_MAJ;
        }


        return $this;
    } // setDateMaj()

    /**
     * Set the value of [id_form_xml] column.
     * 
     * @param int $v new value
     * @return CommonAnnonceMoniteur The current object (for fluent API support)
     */
    public function setIdFormXml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_form_xml !== $v) {
            $this->id_form_xml = $v;
            $this->modifiedColumns[] = CommonAnnonceMoniteurPeer::ID_FORM_XML;
        }

        if ($this->aCommonReferentielFormXml !== null && $this->aCommonReferentielFormXml->getId() !== $v) {
            $this->aCommonReferentielFormXml = null;
        }


        return $this;
    } // setIdFormXml()

    /**
     * Set the value of [accuse_reception] column.
     * 
     * @param string $v new value
     * @return CommonAnnonceMoniteur The current object (for fluent API support)
     */
    public function setAccuseReception($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->accuse_reception !== $v) {
            $this->accuse_reception = $v;
            $this->modifiedColumns[] = CommonAnnonceMoniteurPeer::ACCUSE_RECEPTION;
        }


        return $this;
    } // setAccuseReception()

    /**
     * Set the value of [id_destination_form_xml] column.
     * 
     * @param int $v new value
     * @return CommonAnnonceMoniteur The current object (for fluent API support)
     */
    public function setIdDestinationFormXml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_destination_form_xml !== $v) {
            $this->id_destination_form_xml = $v;
            $this->modifiedColumns[] = CommonAnnonceMoniteurPeer::ID_DESTINATION_FORM_XML;
        }

        if ($this->aCommonReferentielDestinationFormXml !== null && $this->aCommonReferentielDestinationFormXml->getId() !== $v) {
            $this->aCommonReferentielDestinationFormXml = null;
        }


        return $this;
    } // setIdDestinationFormXml()

    /**
     * Set the value of [statut_destinataire] column.
     * 
     * @param string $v new value
     * @return CommonAnnonceMoniteur The current object (for fluent API support)
     */
    public function setStatutDestinataire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->statut_destinataire !== $v) {
            $this->statut_destinataire = $v;
            $this->modifiedColumns[] = CommonAnnonceMoniteurPeer::STATUT_DESTINATAIRE;
        }


        return $this;
    } // setStatutDestinataire()

    /**
     * Set the value of [commentaire] column.
     * 
     * @param string $v new value
     * @return CommonAnnonceMoniteur The current object (for fluent API support)
     */
    public function setCommentaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commentaire !== $v) {
            $this->commentaire = $v;
            $this->modifiedColumns[] = CommonAnnonceMoniteurPeer::COMMENTAIRE;
        }


        return $this;
    } // setCommentaire()

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
            if ($this->date_envoi !== '0000-00-00 00:00:00') {
                return false;
            }

            if ($this->statut_xml !== '0') {
                return false;
            }

            if ($this->date_creation !== NULL) {
                return false;
            }

            if ($this->statut_web !== '0') {
                return false;
            }

            if ($this->statut_arg !== '0') {
                return false;
            }

            if ($this->statut_usn !== '0') {
                return false;
            }

            if ($this->statut_01i !== '0') {
                return false;
            }

            if ($this->num_annonce !== 0) {
                return false;
            }

            if ($this->nom_timestamp !== '') {
                return false;
            }

            if ($this->id_annonce_boamp !== 0) {
                return false;
            }

            if ($this->date_maj !== '0000-00-00 00:00:00') {
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
            $this->date_envoi = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->type_moniteur = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->statut_xml = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->date_creation = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->statut_web = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->statut_arg = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->statut_usn = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->statut_01i = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->datepub = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->num_annonce = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->message_error = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            if ($row[$startcol + 13] !== null) {
                $this->timestamp = fopen('php://memory', 'r+');
                fwrite($this->timestamp, $row[$startcol + 13]);
                rewind($this->timestamp);
            } else {
                $this->timestamp = null;
            }
            $this->nom_timestamp = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->xml_moniteur = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->id_annonce_boamp = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->date_maj = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->id_form_xml = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->accuse_reception = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->id_destination_form_xml = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->statut_destinataire = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->commentaire = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 23; // 23 = CommonAnnonceMoniteurPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonAnnonceMoniteur object", $e);
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

        if ($this->aCommonReferentielFormXml !== null && $this->id_form_xml !== $this->aCommonReferentielFormXml->getId()) {
            $this->aCommonReferentielFormXml = null;
        }
        if ($this->aCommonReferentielDestinationFormXml !== null && $this->id_destination_form_xml !== $this->aCommonReferentielDestinationFormXml->getId()) {
            $this->aCommonReferentielDestinationFormXml = null;
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
            $con = Propel::getConnection(CommonAnnonceMoniteurPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonAnnonceMoniteurPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonReferentielDestinationFormXml = null;
            $this->aCommonReferentielFormXml = null;
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
            $con = Propel::getConnection(CommonAnnonceMoniteurPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonAnnonceMoniteurQuery::create()
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
            $con = Propel::getConnection(CommonAnnonceMoniteurPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonAnnonceMoniteurPeer::addInstanceToPool($this);
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

            if ($this->aCommonReferentielDestinationFormXml !== null) {
                if ($this->aCommonReferentielDestinationFormXml->isModified() || $this->aCommonReferentielDestinationFormXml->isNew()) {
                    $affectedRows += $this->aCommonReferentielDestinationFormXml->save($con);
                }
                $this->setCommonReferentielDestinationFormXml($this->aCommonReferentielDestinationFormXml);
            }

            if ($this->aCommonReferentielFormXml !== null) {
                if ($this->aCommonReferentielFormXml->isModified() || $this->aCommonReferentielFormXml->isNew()) {
                    $affectedRows += $this->aCommonReferentielFormXml->save($con);
                }
                $this->setCommonReferentielFormXml($this->aCommonReferentielFormXml);
            }

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                // Rewind the timestamp LOB column, since PDO does not rewind after inserting value.
                if ($this->timestamp !== null && is_resource($this->timestamp)) {
                    rewind($this->timestamp);
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

        $this->modifiedColumns[] = CommonAnnonceMoniteurPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonAnnonceMoniteurPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonAnnonceMoniteurPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonAnnonceMoniteurPeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonAnnonceMoniteurPeer::DATE_ENVOI)) {
            $modifiedColumns[':p' . $index++]  = '`date_envoi`';
        }
        if ($this->isColumnModified(CommonAnnonceMoniteurPeer::TYPE_MONITEUR)) {
            $modifiedColumns[':p' . $index++]  = '`type_moniteur`';
        }
        if ($this->isColumnModified(CommonAnnonceMoniteurPeer::STATUT_XML)) {
            $modifiedColumns[':p' . $index++]  = '`statut_xml`';
        }
        if ($this->isColumnModified(CommonAnnonceMoniteurPeer::DATE_CREATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_creation`';
        }
        if ($this->isColumnModified(CommonAnnonceMoniteurPeer::STATUT_WEB)) {
            $modifiedColumns[':p' . $index++]  = '`statut_web`';
        }
        if ($this->isColumnModified(CommonAnnonceMoniteurPeer::STATUT_ARG)) {
            $modifiedColumns[':p' . $index++]  = '`statut_arg`';
        }
        if ($this->isColumnModified(CommonAnnonceMoniteurPeer::STATUT_USN)) {
            $modifiedColumns[':p' . $index++]  = '`statut_usn`';
        }
        if ($this->isColumnModified(CommonAnnonceMoniteurPeer::STATUT_01I)) {
            $modifiedColumns[':p' . $index++]  = '`statut_01i`';
        }
        if ($this->isColumnModified(CommonAnnonceMoniteurPeer::DATEPUB)) {
            $modifiedColumns[':p' . $index++]  = '`datepub`';
        }
        if ($this->isColumnModified(CommonAnnonceMoniteurPeer::NUM_ANNONCE)) {
            $modifiedColumns[':p' . $index++]  = '`num_annonce`';
        }
        if ($this->isColumnModified(CommonAnnonceMoniteurPeer::MESSAGE_ERROR)) {
            $modifiedColumns[':p' . $index++]  = '`message_error`';
        }
        if ($this->isColumnModified(CommonAnnonceMoniteurPeer::TIMESTAMP)) {
            $modifiedColumns[':p' . $index++]  = '`timestamp`';
        }
        if ($this->isColumnModified(CommonAnnonceMoniteurPeer::NOM_TIMESTAMP)) {
            $modifiedColumns[':p' . $index++]  = '`nom_timestamp`';
        }
        if ($this->isColumnModified(CommonAnnonceMoniteurPeer::XML_MONITEUR)) {
            $modifiedColumns[':p' . $index++]  = '`xml_moniteur`';
        }
        if ($this->isColumnModified(CommonAnnonceMoniteurPeer::ID_ANNONCE_BOAMP)) {
            $modifiedColumns[':p' . $index++]  = '`id_annonce_boamp`';
        }
        if ($this->isColumnModified(CommonAnnonceMoniteurPeer::DATE_MAJ)) {
            $modifiedColumns[':p' . $index++]  = '`date_maj`';
        }
        if ($this->isColumnModified(CommonAnnonceMoniteurPeer::ID_FORM_XML)) {
            $modifiedColumns[':p' . $index++]  = '`id_form_xml`';
        }
        if ($this->isColumnModified(CommonAnnonceMoniteurPeer::ACCUSE_RECEPTION)) {
            $modifiedColumns[':p' . $index++]  = '`accuse_reception`';
        }
        if ($this->isColumnModified(CommonAnnonceMoniteurPeer::ID_DESTINATION_FORM_XML)) {
            $modifiedColumns[':p' . $index++]  = '`id_destination_form_xml`';
        }
        if ($this->isColumnModified(CommonAnnonceMoniteurPeer::STATUT_DESTINATAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`statut_destinataire`';
        }
        if ($this->isColumnModified(CommonAnnonceMoniteurPeer::COMMENTAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`commentaire`';
        }

        $sql = sprintf(
            'INSERT INTO `AnnonceMoniteur` (%s) VALUES (%s)',
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
                    case '`date_envoi`':						
                        $stmt->bindValue($identifier, $this->date_envoi, PDO::PARAM_STR);
                        break;
                    case '`type_moniteur`':						
                        $stmt->bindValue($identifier, $this->type_moniteur, PDO::PARAM_STR);
                        break;
                    case '`statut_xml`':						
                        $stmt->bindValue($identifier, $this->statut_xml, PDO::PARAM_STR);
                        break;
                    case '`date_creation`':						
                        $stmt->bindValue($identifier, $this->date_creation, PDO::PARAM_STR);
                        break;
                    case '`statut_web`':						
                        $stmt->bindValue($identifier, $this->statut_web, PDO::PARAM_STR);
                        break;
                    case '`statut_arg`':						
                        $stmt->bindValue($identifier, $this->statut_arg, PDO::PARAM_STR);
                        break;
                    case '`statut_usn`':						
                        $stmt->bindValue($identifier, $this->statut_usn, PDO::PARAM_STR);
                        break;
                    case '`statut_01i`':						
                        $stmt->bindValue($identifier, $this->statut_01i, PDO::PARAM_STR);
                        break;
                    case '`datepub`':						
                        $stmt->bindValue($identifier, $this->datepub, PDO::PARAM_STR);
                        break;
                    case '`num_annonce`':						
                        $stmt->bindValue($identifier, $this->num_annonce, PDO::PARAM_INT);
                        break;
                    case '`message_error`':						
                        $stmt->bindValue($identifier, $this->message_error, PDO::PARAM_STR);
                        break;
                    case '`timestamp`':						
                        if (is_resource($this->timestamp)) {
                            rewind($this->timestamp);
                        }
                        $stmt->bindValue($identifier, $this->timestamp, PDO::PARAM_LOB);
                        break;
                    case '`nom_timestamp`':						
                        $stmt->bindValue($identifier, $this->nom_timestamp, PDO::PARAM_STR);
                        break;
                    case '`xml_moniteur`':						
                        $stmt->bindValue($identifier, $this->xml_moniteur, PDO::PARAM_STR);
                        break;
                    case '`id_annonce_boamp`':						
                        $stmt->bindValue($identifier, $this->id_annonce_boamp, PDO::PARAM_INT);
                        break;
                    case '`date_maj`':						
                        $stmt->bindValue($identifier, $this->date_maj, PDO::PARAM_STR);
                        break;
                    case '`id_form_xml`':						
                        $stmt->bindValue($identifier, $this->id_form_xml, PDO::PARAM_INT);
                        break;
                    case '`accuse_reception`':						
                        $stmt->bindValue($identifier, $this->accuse_reception, PDO::PARAM_STR);
                        break;
                    case '`id_destination_form_xml`':						
                        $stmt->bindValue($identifier, $this->id_destination_form_xml, PDO::PARAM_INT);
                        break;
                    case '`statut_destinataire`':						
                        $stmt->bindValue($identifier, $this->statut_destinataire, PDO::PARAM_STR);
                        break;
                    case '`commentaire`':						
                        $stmt->bindValue($identifier, $this->commentaire, PDO::PARAM_STR);
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

            if ($this->aCommonReferentielDestinationFormXml !== null) {
                if (!$this->aCommonReferentielDestinationFormXml->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonReferentielDestinationFormXml->getValidationFailures());
                }
            }

            if ($this->aCommonReferentielFormXml !== null) {
                if (!$this->aCommonReferentielFormXml->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonReferentielFormXml->getValidationFailures());
                }
            }


            if (($retval = CommonAnnonceMoniteurPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonAnnonceMoniteurPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getDateEnvoi();
                break;
            case 3:
                return $this->getTypeMoniteur();
                break;
            case 4:
                return $this->getStatutXml();
                break;
            case 5:
                return $this->getDateCreation();
                break;
            case 6:
                return $this->getStatutWeb();
                break;
            case 7:
                return $this->getStatutArg();
                break;
            case 8:
                return $this->getStatutUsn();
                break;
            case 9:
                return $this->getStatut01i();
                break;
            case 10:
                return $this->getDatepub();
                break;
            case 11:
                return $this->getNumAnnonce();
                break;
            case 12:
                return $this->getMessageError();
                break;
            case 13:
                return $this->getTimestamp();
                break;
            case 14:
                return $this->getNomTimestamp();
                break;
            case 15:
                return $this->getXmlMoniteur();
                break;
            case 16:
                return $this->getIdAnnonceBoamp();
                break;
            case 17:
                return $this->getDateMaj();
                break;
            case 18:
                return $this->getIdFormXml();
                break;
            case 19:
                return $this->getAccuseReception();
                break;
            case 20:
                return $this->getIdDestinationFormXml();
                break;
            case 21:
                return $this->getStatutDestinataire();
                break;
            case 22:
                return $this->getCommentaire();
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
        if (isset($alreadyDumpedObjects['CommonAnnonceMoniteur'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonAnnonceMoniteur'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonAnnonceMoniteurPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getDateEnvoi(),
            $keys[3] => $this->getTypeMoniteur(),
            $keys[4] => $this->getStatutXml(),
            $keys[5] => $this->getDateCreation(),
            $keys[6] => $this->getStatutWeb(),
            $keys[7] => $this->getStatutArg(),
            $keys[8] => $this->getStatutUsn(),
            $keys[9] => $this->getStatut01i(),
            $keys[10] => $this->getDatepub(),
            $keys[11] => $this->getNumAnnonce(),
            $keys[12] => $this->getMessageError(),
            $keys[13] => $this->getTimestamp(),
            $keys[14] => $this->getNomTimestamp(),
            $keys[15] => $this->getXmlMoniteur(),
            $keys[16] => $this->getIdAnnonceBoamp(),
            $keys[17] => $this->getDateMaj(),
            $keys[18] => $this->getIdFormXml(),
            $keys[19] => $this->getAccuseReception(),
            $keys[20] => $this->getIdDestinationFormXml(),
            $keys[21] => $this->getStatutDestinataire(),
            $keys[22] => $this->getCommentaire(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonReferentielDestinationFormXml) {
                $result['CommonReferentielDestinationFormXml'] = $this->aCommonReferentielDestinationFormXml->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonReferentielFormXml) {
                $result['CommonReferentielFormXml'] = $this->aCommonReferentielFormXml->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = CommonAnnonceMoniteurPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setDateEnvoi($value);
                break;
            case 3:
                $this->setTypeMoniteur($value);
                break;
            case 4:
                $this->setStatutXml($value);
                break;
            case 5:
                $this->setDateCreation($value);
                break;
            case 6:
                $this->setStatutWeb($value);
                break;
            case 7:
                $this->setStatutArg($value);
                break;
            case 8:
                $this->setStatutUsn($value);
                break;
            case 9:
                $this->setStatut01i($value);
                break;
            case 10:
                $this->setDatepub($value);
                break;
            case 11:
                $this->setNumAnnonce($value);
                break;
            case 12:
                $this->setMessageError($value);
                break;
            case 13:
                $this->setTimestamp($value);
                break;
            case 14:
                $this->setNomTimestamp($value);
                break;
            case 15:
                $this->setXmlMoniteur($value);
                break;
            case 16:
                $this->setIdAnnonceBoamp($value);
                break;
            case 17:
                $this->setDateMaj($value);
                break;
            case 18:
                $this->setIdFormXml($value);
                break;
            case 19:
                $this->setAccuseReception($value);
                break;
            case 20:
                $this->setIdDestinationFormXml($value);
                break;
            case 21:
                $this->setStatutDestinataire($value);
                break;
            case 22:
                $this->setCommentaire($value);
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
        $keys = CommonAnnonceMoniteurPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setDateEnvoi($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setTypeMoniteur($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setStatutXml($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setDateCreation($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setStatutWeb($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setStatutArg($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setStatutUsn($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setStatut01i($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setDatepub($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setNumAnnonce($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setMessageError($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setTimestamp($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setNomTimestamp($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setXmlMoniteur($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setIdAnnonceBoamp($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setDateMaj($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setIdFormXml($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setAccuseReception($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setIdDestinationFormXml($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setStatutDestinataire($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setCommentaire($arr[$keys[22]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonAnnonceMoniteurPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonAnnonceMoniteurPeer::ID)) $criteria->add(CommonAnnonceMoniteurPeer::ID, $this->id);
        if ($this->isColumnModified(CommonAnnonceMoniteurPeer::ORGANISME)) $criteria->add(CommonAnnonceMoniteurPeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonAnnonceMoniteurPeer::DATE_ENVOI)) $criteria->add(CommonAnnonceMoniteurPeer::DATE_ENVOI, $this->date_envoi);
        if ($this->isColumnModified(CommonAnnonceMoniteurPeer::TYPE_MONITEUR)) $criteria->add(CommonAnnonceMoniteurPeer::TYPE_MONITEUR, $this->type_moniteur);
        if ($this->isColumnModified(CommonAnnonceMoniteurPeer::STATUT_XML)) $criteria->add(CommonAnnonceMoniteurPeer::STATUT_XML, $this->statut_xml);
        if ($this->isColumnModified(CommonAnnonceMoniteurPeer::DATE_CREATION)) $criteria->add(CommonAnnonceMoniteurPeer::DATE_CREATION, $this->date_creation);
        if ($this->isColumnModified(CommonAnnonceMoniteurPeer::STATUT_WEB)) $criteria->add(CommonAnnonceMoniteurPeer::STATUT_WEB, $this->statut_web);
        if ($this->isColumnModified(CommonAnnonceMoniteurPeer::STATUT_ARG)) $criteria->add(CommonAnnonceMoniteurPeer::STATUT_ARG, $this->statut_arg);
        if ($this->isColumnModified(CommonAnnonceMoniteurPeer::STATUT_USN)) $criteria->add(CommonAnnonceMoniteurPeer::STATUT_USN, $this->statut_usn);
        if ($this->isColumnModified(CommonAnnonceMoniteurPeer::STATUT_01I)) $criteria->add(CommonAnnonceMoniteurPeer::STATUT_01I, $this->statut_01i);
        if ($this->isColumnModified(CommonAnnonceMoniteurPeer::DATEPUB)) $criteria->add(CommonAnnonceMoniteurPeer::DATEPUB, $this->datepub);
        if ($this->isColumnModified(CommonAnnonceMoniteurPeer::NUM_ANNONCE)) $criteria->add(CommonAnnonceMoniteurPeer::NUM_ANNONCE, $this->num_annonce);
        if ($this->isColumnModified(CommonAnnonceMoniteurPeer::MESSAGE_ERROR)) $criteria->add(CommonAnnonceMoniteurPeer::MESSAGE_ERROR, $this->message_error);
        if ($this->isColumnModified(CommonAnnonceMoniteurPeer::TIMESTAMP)) $criteria->add(CommonAnnonceMoniteurPeer::TIMESTAMP, $this->timestamp);
        if ($this->isColumnModified(CommonAnnonceMoniteurPeer::NOM_TIMESTAMP)) $criteria->add(CommonAnnonceMoniteurPeer::NOM_TIMESTAMP, $this->nom_timestamp);
        if ($this->isColumnModified(CommonAnnonceMoniteurPeer::XML_MONITEUR)) $criteria->add(CommonAnnonceMoniteurPeer::XML_MONITEUR, $this->xml_moniteur);
        if ($this->isColumnModified(CommonAnnonceMoniteurPeer::ID_ANNONCE_BOAMP)) $criteria->add(CommonAnnonceMoniteurPeer::ID_ANNONCE_BOAMP, $this->id_annonce_boamp);
        if ($this->isColumnModified(CommonAnnonceMoniteurPeer::DATE_MAJ)) $criteria->add(CommonAnnonceMoniteurPeer::DATE_MAJ, $this->date_maj);
        if ($this->isColumnModified(CommonAnnonceMoniteurPeer::ID_FORM_XML)) $criteria->add(CommonAnnonceMoniteurPeer::ID_FORM_XML, $this->id_form_xml);
        if ($this->isColumnModified(CommonAnnonceMoniteurPeer::ACCUSE_RECEPTION)) $criteria->add(CommonAnnonceMoniteurPeer::ACCUSE_RECEPTION, $this->accuse_reception);
        if ($this->isColumnModified(CommonAnnonceMoniteurPeer::ID_DESTINATION_FORM_XML)) $criteria->add(CommonAnnonceMoniteurPeer::ID_DESTINATION_FORM_XML, $this->id_destination_form_xml);
        if ($this->isColumnModified(CommonAnnonceMoniteurPeer::STATUT_DESTINATAIRE)) $criteria->add(CommonAnnonceMoniteurPeer::STATUT_DESTINATAIRE, $this->statut_destinataire);
        if ($this->isColumnModified(CommonAnnonceMoniteurPeer::COMMENTAIRE)) $criteria->add(CommonAnnonceMoniteurPeer::COMMENTAIRE, $this->commentaire);

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
        $criteria = new Criteria(CommonAnnonceMoniteurPeer::DATABASE_NAME);
        $criteria->add(CommonAnnonceMoniteurPeer::ID, $this->id);
        $criteria->add(CommonAnnonceMoniteurPeer::ORGANISME, $this->organisme);

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
     * @param object $copyObj An object of CommonAnnonceMoniteur (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setDateEnvoi($this->getDateEnvoi());
        $copyObj->setTypeMoniteur($this->getTypeMoniteur());
        $copyObj->setStatutXml($this->getStatutXml());
        $copyObj->setDateCreation($this->getDateCreation());
        $copyObj->setStatutWeb($this->getStatutWeb());
        $copyObj->setStatutArg($this->getStatutArg());
        $copyObj->setStatutUsn($this->getStatutUsn());
        $copyObj->setStatut01i($this->getStatut01i());
        $copyObj->setDatepub($this->getDatepub());
        $copyObj->setNumAnnonce($this->getNumAnnonce());
        $copyObj->setMessageError($this->getMessageError());
        $copyObj->setTimestamp($this->getTimestamp());
        $copyObj->setNomTimestamp($this->getNomTimestamp());
        $copyObj->setXmlMoniteur($this->getXmlMoniteur());
        $copyObj->setIdAnnonceBoamp($this->getIdAnnonceBoamp());
        $copyObj->setDateMaj($this->getDateMaj());
        $copyObj->setIdFormXml($this->getIdFormXml());
        $copyObj->setAccuseReception($this->getAccuseReception());
        $copyObj->setIdDestinationFormXml($this->getIdDestinationFormXml());
        $copyObj->setStatutDestinataire($this->getStatutDestinataire());
        $copyObj->setCommentaire($this->getCommentaire());

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
     * @return CommonAnnonceMoniteur Clone of current object.
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
     * @return CommonAnnonceMoniteurPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonAnnonceMoniteurPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonReferentielDestinationFormXml object.
     *
     * @param   CommonReferentielDestinationFormXml $v
     * @return CommonAnnonceMoniteur The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonReferentielDestinationFormXml(CommonReferentielDestinationFormXml $v = null)
    {
        if ($v === null) {
            $this->setIdDestinationFormXml(NULL);
        } else {
            $this->setIdDestinationFormXml($v->getId());
        }

        $this->aCommonReferentielDestinationFormXml = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonReferentielDestinationFormXml object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonAnnonceMoniteur($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonReferentielDestinationFormXml object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonReferentielDestinationFormXml The associated CommonReferentielDestinationFormXml object.
     * @throws PropelException
     */
    public function getCommonReferentielDestinationFormXml(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonReferentielDestinationFormXml === null && ($this->id_destination_form_xml !== null) && $doQuery) {
            $this->aCommonReferentielDestinationFormXml = CommonReferentielDestinationFormXmlQuery::create()
                ->filterByCommonAnnonceMoniteur($this) // here
                ->findOne($con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonReferentielDestinationFormXml->addCommonAnnonceMoniteurs($this);
             */
        }

        return $this->aCommonReferentielDestinationFormXml;
    }

    /**
     * Declares an association between this object and a CommonReferentielFormXml object.
     *
     * @param   CommonReferentielFormXml $v
     * @return CommonAnnonceMoniteur The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonReferentielFormXml(CommonReferentielFormXml $v = null)
    {
        if ($v === null) {
            $this->setIdFormXml(NULL);
        } else {
            $this->setIdFormXml($v->getId());
        }

        $this->aCommonReferentielFormXml = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonReferentielFormXml object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonAnnonceMoniteur($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonReferentielFormXml object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonReferentielFormXml The associated CommonReferentielFormXml object.
     * @throws PropelException
     */
    public function getCommonReferentielFormXml(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonReferentielFormXml === null && ($this->id_form_xml !== null) && $doQuery) {
            $this->aCommonReferentielFormXml = CommonReferentielFormXmlQuery::create()
                ->filterByCommonAnnonceMoniteur($this) // here
                ->findOne($con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonReferentielFormXml->addCommonAnnonceMoniteurs($this);
             */
        }

        return $this->aCommonReferentielFormXml;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->organisme = null;
        $this->date_envoi = null;
        $this->type_moniteur = null;
        $this->statut_xml = null;
        $this->date_creation = null;
        $this->statut_web = null;
        $this->statut_arg = null;
        $this->statut_usn = null;
        $this->statut_01i = null;
        $this->datepub = null;
        $this->num_annonce = null;
        $this->message_error = null;
        $this->timestamp = null;
        $this->nom_timestamp = null;
        $this->xml_moniteur = null;
        $this->id_annonce_boamp = null;
        $this->date_maj = null;
        $this->id_form_xml = null;
        $this->accuse_reception = null;
        $this->id_destination_form_xml = null;
        $this->statut_destinataire = null;
        $this->commentaire = null;
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
            if ($this->aCommonReferentielDestinationFormXml instanceof Persistent) {
              $this->aCommonReferentielDestinationFormXml->clearAllReferences($deep);
            }
            if ($this->aCommonReferentielFormXml instanceof Persistent) {
              $this->aCommonReferentielFormXml->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aCommonReferentielDestinationFormXml = null;
        $this->aCommonReferentielFormXml = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonAnnonceMoniteurPeer::DEFAULT_STRING_FORMAT);
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
