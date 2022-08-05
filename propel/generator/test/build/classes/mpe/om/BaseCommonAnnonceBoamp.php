<?php


/**
 * Base class that represents a row from the 'AnnonceBoamp' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonAnnonceBoamp extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonAnnonceBoampPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonAnnonceBoampPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_boamp field.
     * @var        int
     */
    protected $id_boamp;

    /**
     * The value for the organisme field.
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the consultation_ref field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $consultation_ref;

    /**
     * The value for the envoi_boamp field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $envoi_boamp;

    /**
     * The value for the date_envoi field.
     * Note: this column has a database default value of: '0000-00-00 00:00:00'
     * @var        string
     */
    protected $date_envoi;

    /**
     * The value for the ann_xml field.
     * @var        resource
     */
    protected $ann_xml;

    /**
     * The value for the ann_pdf field.
     * @var        resource
     */
    protected $ann_pdf;

    /**
     * The value for the ann_form_values field.
     * @var        resource
     */
    protected $ann_form_values;

    /**
     * The value for the ann_error field.
     * @var        string
     */
    protected $ann_error;

    /**
     * The value for the type_boamp field.
     * @var        string
     */
    protected $type_boamp;

    /**
     * The value for the type_ann field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $type_ann;

    /**
     * The value for the datepub field.
     * Note: this column has a database default value of: '0000-00-00'
     * @var        string
     */
    protected $datepub;

    /**
     * The value for the num_ann field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $num_ann;

    /**
     * The value for the parution field.
     * @var        string
     */
    protected $parution;

    /**
     * The value for the id_jo field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $id_jo;

    /**
     * The value for the erreurs field.
     * @var        string
     */
    protected $erreurs;

    /**
     * The value for the nom_fichier_xml field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $nom_fichier_xml;

    /**
     * The value for the envoi_joue field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $envoi_joue;

    /**
     * The value for the mapa field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $mapa;

    /**
     * The value for the implique_sad field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $implique_sad;

    /**
     * The value for the date_maj field.
     * @var        string
     */
    protected $date_maj;

    /**
     * The value for the id_destination_form_xml field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_destination_form_xml;

    /**
     * The value for the id_form_xml field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_form_xml;

    /**
     * The value for the id_type_xml field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_type_xml;

    /**
     * The value for the statut_destinataire field.
     * @var        string
     */
    protected $statut_destinataire;

    /**
     * The value for the accuse_reception field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $accuse_reception;

    /**
     * The value for the lien field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $lien;

    /**
     * The value for the lien_boamp field.
     * @var        string
     */
    protected $lien_boamp;

    /**
     * The value for the lien_pdf field.
     * @var        string
     */
    protected $lien_pdf;

    /**
     * @var        CommonConsultation
     */
    protected $aCommonConsultationRelatedByOrganismeConsultationRef;

    /**
     * @var        CommonConsultation
     */
    protected $aCommonConsultationRelatedByConsultationRef;

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
        $this->consultation_ref = 0;
        $this->envoi_boamp = 0;
        $this->date_envoi = '0000-00-00 00:00:00';
        $this->type_ann = 0;
        $this->datepub = '0000-00-00';
        $this->num_ann = 0;
        $this->id_jo = '';
        $this->nom_fichier_xml = '';
        $this->envoi_joue = '0';
        $this->mapa = '0';
        $this->implique_sad = '0';
        $this->id_destination_form_xml = 0;
        $this->id_form_xml = 0;
        $this->id_type_xml = 0;
        $this->accuse_reception = '';
        $this->lien = '';
    }

    /**
     * Initializes internal state of BaseCommonAnnonceBoamp object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_boamp] column value.
     * 
     * @return int
     */
    public function getIdBoamp()
    {

        return $this->id_boamp;
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
     * Get the [envoi_boamp] column value.
     * 
     * @return int
     */
    public function getEnvoiBoamp()
    {

        return $this->envoi_boamp;
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
     * Get the [ann_xml] column value.
     * 
     * @return resource
     */
    public function getAnnXml()
    {

        return $this->ann_xml;
    }

    /**
     * Get the [ann_pdf] column value.
     * 
     * @return resource
     */
    public function getAnnPdf()
    {

        return $this->ann_pdf;
    }

    /**
     * Get the [ann_form_values] column value.
     * 
     * @return resource
     */
    public function getAnnFormValues()
    {

        return $this->ann_form_values;
    }

    /**
     * Get the [ann_error] column value.
     * 
     * @return string
     */
    public function getAnnError()
    {

        return $this->ann_error;
    }

    /**
     * Get the [type_boamp] column value.
     * 
     * @return string
     */
    public function getTypeBoamp()
    {

        return $this->type_boamp;
    }

    /**
     * Get the [type_ann] column value.
     * 
     * @return int
     */
    public function getTypeAnn()
    {

        return $this->type_ann;
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
     * Get the [num_ann] column value.
     * 
     * @return int
     */
    public function getNumAnn()
    {

        return $this->num_ann;
    }

    /**
     * Get the [parution] column value.
     * 
     * @return string
     */
    public function getParution()
    {

        return $this->parution;
    }

    /**
     * Get the [id_jo] column value.
     * 
     * @return string
     */
    public function getIdJo()
    {

        return $this->id_jo;
    }

    /**
     * Get the [erreurs] column value.
     * 
     * @return string
     */
    public function getErreurs()
    {

        return $this->erreurs;
    }

    /**
     * Get the [nom_fichier_xml] column value.
     * 
     * @return string
     */
    public function getNomFichierXml()
    {

        return $this->nom_fichier_xml;
    }

    /**
     * Get the [envoi_joue] column value.
     * 
     * @return string
     */
    public function getEnvoiJoue()
    {

        return $this->envoi_joue;
    }

    /**
     * Get the [mapa] column value.
     * 
     * @return string
     */
    public function getMapa()
    {

        return $this->mapa;
    }

    /**
     * Get the [implique_sad] column value.
     * 
     * @return string
     */
    public function getImpliqueSad()
    {

        return $this->implique_sad;
    }

    /**
     * Get the [optionally formatted] temporal [date_maj] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateMaj($format = 'Y-m-d H:i:s')
    {
        if ($this->date_maj === null) {
            return null;
        }

        if ($this->date_maj === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_maj);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_maj, true), $x);
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
     * Get the [id_destination_form_xml] column value.
     * 
     * @return int
     */
    public function getIdDestinationFormXml()
    {

        return $this->id_destination_form_xml;
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
     * Get the [id_type_xml] column value.
     * 
     * @return int
     */
    public function getIdTypeXml()
    {

        return $this->id_type_xml;
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
     * Get the [accuse_reception] column value.
     * 
     * @return string
     */
    public function getAccuseReception()
    {

        return $this->accuse_reception;
    }

    /**
     * Get the [lien] column value.
     * 
     * @return string
     */
    public function getLien()
    {

        return $this->lien;
    }

    /**
     * Get the [lien_boamp] column value.
     * 
     * @return string
     */
    public function getLienBoamp()
    {

        return $this->lien_boamp;
    }

    /**
     * Get the [lien_pdf] column value.
     * 
     * @return string
     */
    public function getLienPdf()
    {

        return $this->lien_pdf;
    }

    /**
     * Set the value of [id_boamp] column.
     * 
     * @param int $v new value
     * @return CommonAnnonceBoamp The current object (for fluent API support)
     */
    public function setIdBoamp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_boamp !== $v) {
            $this->id_boamp = $v;
            $this->modifiedColumns[] = CommonAnnonceBoampPeer::ID_BOAMP;
        }


        return $this;
    } // setIdBoamp()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonAnnonceBoamp The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonAnnonceBoampPeer::ORGANISME;
        }

        if ($this->aCommonConsultationRelatedByOrganismeConsultationRef !== null && $this->aCommonConsultationRelatedByOrganismeConsultationRef->getOrganisme() !== $v) {
            $this->aCommonConsultationRelatedByOrganismeConsultationRef = null;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [consultation_ref] column.
     * 
     * @param int $v new value
     * @return CommonAnnonceBoamp The current object (for fluent API support)
     */
    public function setConsultationRef($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->consultation_ref !== $v) {
            $this->consultation_ref = $v;
            $this->modifiedColumns[] = CommonAnnonceBoampPeer::CONSULTATION_REF;
        }

        if ($this->aCommonConsultationRelatedByOrganismeConsultationRef !== null && $this->aCommonConsultationRelatedByOrganismeConsultationRef->getReference() !== $v) {
            $this->aCommonConsultationRelatedByOrganismeConsultationRef = null;
        }

        if ($this->aCommonConsultationRelatedByConsultationRef !== null && $this->aCommonConsultationRelatedByConsultationRef->getReference() !== $v) {
            $this->aCommonConsultationRelatedByConsultationRef = null;
        }


        return $this;
    } // setConsultationRef()

    /**
     * Set the value of [envoi_boamp] column.
     * 
     * @param int $v new value
     * @return CommonAnnonceBoamp The current object (for fluent API support)
     */
    public function setEnvoiBoamp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->envoi_boamp !== $v) {
            $this->envoi_boamp = $v;
            $this->modifiedColumns[] = CommonAnnonceBoampPeer::ENVOI_BOAMP;
        }


        return $this;
    } // setEnvoiBoamp()

    /**
     * Set the value of [date_envoi] column.
     * 
     * @param string $v new value
     * @return CommonAnnonceBoamp The current object (for fluent API support)
     */
    public function setDateEnvoi($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_envoi !== $v) {
            $this->date_envoi = $v;
            $this->modifiedColumns[] = CommonAnnonceBoampPeer::DATE_ENVOI;
        }


        return $this;
    } // setDateEnvoi()

    /**
     * Set the value of [ann_xml] column.
     * 
     * @param resource $v new value
     * @return CommonAnnonceBoamp The current object (for fluent API support)
     */
    public function setAnnXml($v)
    {
        // Because BLOB columns are streams in PDO we have to assume that they are
        // always modified when a new value is passed in.  For example, the contents
        // of the stream itself may have changed externally.
        if (!is_resource($v) && $v !== null) {
            $this->ann_xml = fopen('php://memory', 'r+');
            fwrite($this->ann_xml, $v);
            rewind($this->ann_xml);
        } else { // it's already a stream
            $this->ann_xml = $v;
        }
        $this->modifiedColumns[] = CommonAnnonceBoampPeer::ANN_XML;


        return $this;
    } // setAnnXml()

    /**
     * Set the value of [ann_pdf] column.
     * 
     * @param resource $v new value
     * @return CommonAnnonceBoamp The current object (for fluent API support)
     */
    public function setAnnPdf($v)
    {
        // Because BLOB columns are streams in PDO we have to assume that they are
        // always modified when a new value is passed in.  For example, the contents
        // of the stream itself may have changed externally.
        if (!is_resource($v) && $v !== null) {
            $this->ann_pdf = fopen('php://memory', 'r+');
            fwrite($this->ann_pdf, $v);
            rewind($this->ann_pdf);
        } else { // it's already a stream
            $this->ann_pdf = $v;
        }
        $this->modifiedColumns[] = CommonAnnonceBoampPeer::ANN_PDF;


        return $this;
    } // setAnnPdf()

    /**
     * Set the value of [ann_form_values] column.
     * 
     * @param resource $v new value
     * @return CommonAnnonceBoamp The current object (for fluent API support)
     */
    public function setAnnFormValues($v)
    {
        // Because BLOB columns are streams in PDO we have to assume that they are
        // always modified when a new value is passed in.  For example, the contents
        // of the stream itself may have changed externally.
        if (!is_resource($v) && $v !== null) {
            $this->ann_form_values = fopen('php://memory', 'r+');
            fwrite($this->ann_form_values, $v);
            rewind($this->ann_form_values);
        } else { // it's already a stream
            $this->ann_form_values = $v;
        }
        $this->modifiedColumns[] = CommonAnnonceBoampPeer::ANN_FORM_VALUES;


        return $this;
    } // setAnnFormValues()

    /**
     * Set the value of [ann_error] column.
     * 
     * @param string $v new value
     * @return CommonAnnonceBoamp The current object (for fluent API support)
     */
    public function setAnnError($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ann_error !== $v) {
            $this->ann_error = $v;
            $this->modifiedColumns[] = CommonAnnonceBoampPeer::ANN_ERROR;
        }


        return $this;
    } // setAnnError()

    /**
     * Set the value of [type_boamp] column.
     * 
     * @param string $v new value
     * @return CommonAnnonceBoamp The current object (for fluent API support)
     */
    public function setTypeBoamp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_boamp !== $v) {
            $this->type_boamp = $v;
            $this->modifiedColumns[] = CommonAnnonceBoampPeer::TYPE_BOAMP;
        }


        return $this;
    } // setTypeBoamp()

    /**
     * Set the value of [type_ann] column.
     * 
     * @param int $v new value
     * @return CommonAnnonceBoamp The current object (for fluent API support)
     */
    public function setTypeAnn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type_ann !== $v) {
            $this->type_ann = $v;
            $this->modifiedColumns[] = CommonAnnonceBoampPeer::TYPE_ANN;
        }


        return $this;
    } // setTypeAnn()

    /**
     * Set the value of [datepub] column.
     * 
     * @param string $v new value
     * @return CommonAnnonceBoamp The current object (for fluent API support)
     */
    public function setDatepub($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->datepub !== $v) {
            $this->datepub = $v;
            $this->modifiedColumns[] = CommonAnnonceBoampPeer::DATEPUB;
        }


        return $this;
    } // setDatepub()

    /**
     * Set the value of [num_ann] column.
     * 
     * @param int $v new value
     * @return CommonAnnonceBoamp The current object (for fluent API support)
     */
    public function setNumAnn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->num_ann !== $v) {
            $this->num_ann = $v;
            $this->modifiedColumns[] = CommonAnnonceBoampPeer::NUM_ANN;
        }


        return $this;
    } // setNumAnn()

    /**
     * Set the value of [parution] column.
     * 
     * @param string $v new value
     * @return CommonAnnonceBoamp The current object (for fluent API support)
     */
    public function setParution($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->parution !== $v) {
            $this->parution = $v;
            $this->modifiedColumns[] = CommonAnnonceBoampPeer::PARUTION;
        }


        return $this;
    } // setParution()

    /**
     * Set the value of [id_jo] column.
     * 
     * @param string $v new value
     * @return CommonAnnonceBoamp The current object (for fluent API support)
     */
    public function setIdJo($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->id_jo !== $v) {
            $this->id_jo = $v;
            $this->modifiedColumns[] = CommonAnnonceBoampPeer::ID_JO;
        }


        return $this;
    } // setIdJo()

    /**
     * Set the value of [erreurs] column.
     * 
     * @param string $v new value
     * @return CommonAnnonceBoamp The current object (for fluent API support)
     */
    public function setErreurs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->erreurs !== $v) {
            $this->erreurs = $v;
            $this->modifiedColumns[] = CommonAnnonceBoampPeer::ERREURS;
        }


        return $this;
    } // setErreurs()

    /**
     * Set the value of [nom_fichier_xml] column.
     * 
     * @param string $v new value
     * @return CommonAnnonceBoamp The current object (for fluent API support)
     */
    public function setNomFichierXml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_fichier_xml !== $v) {
            $this->nom_fichier_xml = $v;
            $this->modifiedColumns[] = CommonAnnonceBoampPeer::NOM_FICHIER_XML;
        }


        return $this;
    } // setNomFichierXml()

    /**
     * Set the value of [envoi_joue] column.
     * 
     * @param string $v new value
     * @return CommonAnnonceBoamp The current object (for fluent API support)
     */
    public function setEnvoiJoue($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->envoi_joue !== $v) {
            $this->envoi_joue = $v;
            $this->modifiedColumns[] = CommonAnnonceBoampPeer::ENVOI_JOUE;
        }


        return $this;
    } // setEnvoiJoue()

    /**
     * Set the value of [mapa] column.
     * 
     * @param string $v new value
     * @return CommonAnnonceBoamp The current object (for fluent API support)
     */
    public function setMapa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mapa !== $v) {
            $this->mapa = $v;
            $this->modifiedColumns[] = CommonAnnonceBoampPeer::MAPA;
        }


        return $this;
    } // setMapa()

    /**
     * Set the value of [implique_sad] column.
     * 
     * @param string $v new value
     * @return CommonAnnonceBoamp The current object (for fluent API support)
     */
    public function setImpliqueSad($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->implique_sad !== $v) {
            $this->implique_sad = $v;
            $this->modifiedColumns[] = CommonAnnonceBoampPeer::IMPLIQUE_SAD;
        }


        return $this;
    } // setImpliqueSad()

    /**
     * Sets the value of [date_maj] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonAnnonceBoamp The current object (for fluent API support)
     */
    public function setDateMaj($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_maj !== null || $dt !== null) {
            $currentDateAsString = ($this->date_maj !== null && $tmpDt = new DateTime($this->date_maj)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_maj = $newDateAsString;
                $this->modifiedColumns[] = CommonAnnonceBoampPeer::DATE_MAJ;
            }
        } // if either are not null


        return $this;
    } // setDateMaj()

    /**
     * Set the value of [id_destination_form_xml] column.
     * 
     * @param int $v new value
     * @return CommonAnnonceBoamp The current object (for fluent API support)
     */
    public function setIdDestinationFormXml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_destination_form_xml !== $v) {
            $this->id_destination_form_xml = $v;
            $this->modifiedColumns[] = CommonAnnonceBoampPeer::ID_DESTINATION_FORM_XML;
        }


        return $this;
    } // setIdDestinationFormXml()

    /**
     * Set the value of [id_form_xml] column.
     * 
     * @param int $v new value
     * @return CommonAnnonceBoamp The current object (for fluent API support)
     */
    public function setIdFormXml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_form_xml !== $v) {
            $this->id_form_xml = $v;
            $this->modifiedColumns[] = CommonAnnonceBoampPeer::ID_FORM_XML;
        }


        return $this;
    } // setIdFormXml()

    /**
     * Set the value of [id_type_xml] column.
     * 
     * @param int $v new value
     * @return CommonAnnonceBoamp The current object (for fluent API support)
     */
    public function setIdTypeXml($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_type_xml !== $v) {
            $this->id_type_xml = $v;
            $this->modifiedColumns[] = CommonAnnonceBoampPeer::ID_TYPE_XML;
        }


        return $this;
    } // setIdTypeXml()

    /**
     * Set the value of [statut_destinataire] column.
     * 
     * @param string $v new value
     * @return CommonAnnonceBoamp The current object (for fluent API support)
     */
    public function setStatutDestinataire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->statut_destinataire !== $v) {
            $this->statut_destinataire = $v;
            $this->modifiedColumns[] = CommonAnnonceBoampPeer::STATUT_DESTINATAIRE;
        }


        return $this;
    } // setStatutDestinataire()

    /**
     * Set the value of [accuse_reception] column.
     * 
     * @param string $v new value
     * @return CommonAnnonceBoamp The current object (for fluent API support)
     */
    public function setAccuseReception($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->accuse_reception !== $v) {
            $this->accuse_reception = $v;
            $this->modifiedColumns[] = CommonAnnonceBoampPeer::ACCUSE_RECEPTION;
        }


        return $this;
    } // setAccuseReception()

    /**
     * Set the value of [lien] column.
     * 
     * @param string $v new value
     * @return CommonAnnonceBoamp The current object (for fluent API support)
     */
    public function setLien($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lien !== $v) {
            $this->lien = $v;
            $this->modifiedColumns[] = CommonAnnonceBoampPeer::LIEN;
        }


        return $this;
    } // setLien()

    /**
     * Set the value of [lien_boamp] column.
     * 
     * @param string $v new value
     * @return CommonAnnonceBoamp The current object (for fluent API support)
     */
    public function setLienBoamp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lien_boamp !== $v) {
            $this->lien_boamp = $v;
            $this->modifiedColumns[] = CommonAnnonceBoampPeer::LIEN_BOAMP;
        }


        return $this;
    } // setLienBoamp()

    /**
     * Set the value of [lien_pdf] column.
     * 
     * @param string $v new value
     * @return CommonAnnonceBoamp The current object (for fluent API support)
     */
    public function setLienPdf($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lien_pdf !== $v) {
            $this->lien_pdf = $v;
            $this->modifiedColumns[] = CommonAnnonceBoampPeer::LIEN_PDF;
        }


        return $this;
    } // setLienPdf()

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
            if ($this->consultation_ref !== 0) {
                return false;
            }

            if ($this->envoi_boamp !== 0) {
                return false;
            }

            if ($this->date_envoi !== '0000-00-00 00:00:00') {
                return false;
            }

            if ($this->type_ann !== 0) {
                return false;
            }

            if ($this->datepub !== '0000-00-00') {
                return false;
            }

            if ($this->num_ann !== 0) {
                return false;
            }

            if ($this->id_jo !== '') {
                return false;
            }

            if ($this->nom_fichier_xml !== '') {
                return false;
            }

            if ($this->envoi_joue !== '0') {
                return false;
            }

            if ($this->mapa !== '0') {
                return false;
            }

            if ($this->implique_sad !== '0') {
                return false;
            }

            if ($this->id_destination_form_xml !== 0) {
                return false;
            }

            if ($this->id_form_xml !== 0) {
                return false;
            }

            if ($this->id_type_xml !== 0) {
                return false;
            }

            if ($this->accuse_reception !== '') {
                return false;
            }

            if ($this->lien !== '') {
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

            $this->id_boamp = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->organisme = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->consultation_ref = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->envoi_boamp = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->date_envoi = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            if ($row[$startcol + 5] !== null) {
                $this->ann_xml = fopen('php://memory', 'r+');
                fwrite($this->ann_xml, $row[$startcol + 5]);
                rewind($this->ann_xml);
            } else {
                $this->ann_xml = null;
            }
            if ($row[$startcol + 6] !== null) {
                $this->ann_pdf = fopen('php://memory', 'r+');
                fwrite($this->ann_pdf, $row[$startcol + 6]);
                rewind($this->ann_pdf);
            } else {
                $this->ann_pdf = null;
            }
            if ($row[$startcol + 7] !== null) {
                $this->ann_form_values = fopen('php://memory', 'r+');
                fwrite($this->ann_form_values, $row[$startcol + 7]);
                rewind($this->ann_form_values);
            } else {
                $this->ann_form_values = null;
            }
            $this->ann_error = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->type_boamp = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->type_ann = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->datepub = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->num_ann = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->parution = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->id_jo = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->erreurs = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->nom_fichier_xml = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->envoi_joue = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->mapa = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->implique_sad = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->date_maj = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->id_destination_form_xml = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->id_form_xml = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
            $this->id_type_xml = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
            $this->statut_destinataire = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->accuse_reception = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->lien = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->lien_boamp = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->lien_pdf = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 29; // 29 = CommonAnnonceBoampPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonAnnonceBoamp object", $e);
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

        if ($this->aCommonConsultationRelatedByOrganismeConsultationRef !== null && $this->organisme !== $this->aCommonConsultationRelatedByOrganismeConsultationRef->getOrganisme()) {
            $this->aCommonConsultationRelatedByOrganismeConsultationRef = null;
        }
        if ($this->aCommonConsultationRelatedByOrganismeConsultationRef !== null && $this->consultation_ref !== $this->aCommonConsultationRelatedByOrganismeConsultationRef->getReference()) {
            $this->aCommonConsultationRelatedByOrganismeConsultationRef = null;
        }
        if ($this->aCommonConsultationRelatedByConsultationRef !== null && $this->consultation_ref !== $this->aCommonConsultationRelatedByConsultationRef->getReference()) {
            $this->aCommonConsultationRelatedByConsultationRef = null;
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
            $con = Propel::getConnection(CommonAnnonceBoampPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonAnnonceBoampPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonConsultationRelatedByOrganismeConsultationRef = null;
            $this->aCommonConsultationRelatedByConsultationRef = null;
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
            $con = Propel::getConnection(CommonAnnonceBoampPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonAnnonceBoampQuery::create()
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
            $con = Propel::getConnection(CommonAnnonceBoampPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonAnnonceBoampPeer::addInstanceToPool($this);
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

            if ($this->aCommonConsultationRelatedByOrganismeConsultationRef !== null) {
                if ($this->aCommonConsultationRelatedByOrganismeConsultationRef->isModified() || $this->aCommonConsultationRelatedByOrganismeConsultationRef->isNew()) {
                    $affectedRows += $this->aCommonConsultationRelatedByOrganismeConsultationRef->save($con);
                }
                $this->setCommonConsultationRelatedByOrganismeConsultationRef($this->aCommonConsultationRelatedByOrganismeConsultationRef);
            }

            if ($this->aCommonConsultationRelatedByConsultationRef !== null) {
                if ($this->aCommonConsultationRelatedByConsultationRef->isModified() || $this->aCommonConsultationRelatedByConsultationRef->isNew()) {
                    $affectedRows += $this->aCommonConsultationRelatedByConsultationRef->save($con);
                }
                $this->setCommonConsultationRelatedByConsultationRef($this->aCommonConsultationRelatedByConsultationRef);
            }

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                } else {
                    $this->doUpdate($con);
                }
                $affectedRows += 1;
                // Rewind the ann_xml LOB column, since PDO does not rewind after inserting value.
                if ($this->ann_xml !== null && is_resource($this->ann_xml)) {
                    rewind($this->ann_xml);
                }

                // Rewind the ann_pdf LOB column, since PDO does not rewind after inserting value.
                if ($this->ann_pdf !== null && is_resource($this->ann_pdf)) {
                    rewind($this->ann_pdf);
                }

                // Rewind the ann_form_values LOB column, since PDO does not rewind after inserting value.
                if ($this->ann_form_values !== null && is_resource($this->ann_form_values)) {
                    rewind($this->ann_form_values);
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

        $this->modifiedColumns[] = CommonAnnonceBoampPeer::ID_BOAMP;
        if (null !== $this->id_boamp) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonAnnonceBoampPeer::ID_BOAMP . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonAnnonceBoampPeer::ID_BOAMP)) {
            $modifiedColumns[':p' . $index++]  = '`id_boamp`';
        }
        if ($this->isColumnModified(CommonAnnonceBoampPeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonAnnonceBoampPeer::CONSULTATION_REF)) {
            $modifiedColumns[':p' . $index++]  = '`consultation_ref`';
        }
        if ($this->isColumnModified(CommonAnnonceBoampPeer::ENVOI_BOAMP)) {
            $modifiedColumns[':p' . $index++]  = '`envoi_boamp`';
        }
        if ($this->isColumnModified(CommonAnnonceBoampPeer::DATE_ENVOI)) {
            $modifiedColumns[':p' . $index++]  = '`date_envoi`';
        }
        if ($this->isColumnModified(CommonAnnonceBoampPeer::ANN_XML)) {
            $modifiedColumns[':p' . $index++]  = '`ann_xml`';
        }
        if ($this->isColumnModified(CommonAnnonceBoampPeer::ANN_PDF)) {
            $modifiedColumns[':p' . $index++]  = '`ann_pdf`';
        }
        if ($this->isColumnModified(CommonAnnonceBoampPeer::ANN_FORM_VALUES)) {
            $modifiedColumns[':p' . $index++]  = '`ann_form_values`';
        }
        if ($this->isColumnModified(CommonAnnonceBoampPeer::ANN_ERROR)) {
            $modifiedColumns[':p' . $index++]  = '`ann_error`';
        }
        if ($this->isColumnModified(CommonAnnonceBoampPeer::TYPE_BOAMP)) {
            $modifiedColumns[':p' . $index++]  = '`type_boamp`';
        }
        if ($this->isColumnModified(CommonAnnonceBoampPeer::TYPE_ANN)) {
            $modifiedColumns[':p' . $index++]  = '`type_ann`';
        }
        if ($this->isColumnModified(CommonAnnonceBoampPeer::DATEPUB)) {
            $modifiedColumns[':p' . $index++]  = '`datepub`';
        }
        if ($this->isColumnModified(CommonAnnonceBoampPeer::NUM_ANN)) {
            $modifiedColumns[':p' . $index++]  = '`num_ann`';
        }
        if ($this->isColumnModified(CommonAnnonceBoampPeer::PARUTION)) {
            $modifiedColumns[':p' . $index++]  = '`parution`';
        }
        if ($this->isColumnModified(CommonAnnonceBoampPeer::ID_JO)) {
            $modifiedColumns[':p' . $index++]  = '`id_jo`';
        }
        if ($this->isColumnModified(CommonAnnonceBoampPeer::ERREURS)) {
            $modifiedColumns[':p' . $index++]  = '`erreurs`';
        }
        if ($this->isColumnModified(CommonAnnonceBoampPeer::NOM_FICHIER_XML)) {
            $modifiedColumns[':p' . $index++]  = '`nom_fichier_xml`';
        }
        if ($this->isColumnModified(CommonAnnonceBoampPeer::ENVOI_JOUE)) {
            $modifiedColumns[':p' . $index++]  = '`envoi_joue`';
        }
        if ($this->isColumnModified(CommonAnnonceBoampPeer::MAPA)) {
            $modifiedColumns[':p' . $index++]  = '`mapa`';
        }
        if ($this->isColumnModified(CommonAnnonceBoampPeer::IMPLIQUE_SAD)) {
            $modifiedColumns[':p' . $index++]  = '`implique_SAD`';
        }
        if ($this->isColumnModified(CommonAnnonceBoampPeer::DATE_MAJ)) {
            $modifiedColumns[':p' . $index++]  = '`date_maj`';
        }
        if ($this->isColumnModified(CommonAnnonceBoampPeer::ID_DESTINATION_FORM_XML)) {
            $modifiedColumns[':p' . $index++]  = '`id_destination_form_xml`';
        }
        if ($this->isColumnModified(CommonAnnonceBoampPeer::ID_FORM_XML)) {
            $modifiedColumns[':p' . $index++]  = '`id_form_xml`';
        }
        if ($this->isColumnModified(CommonAnnonceBoampPeer::ID_TYPE_XML)) {
            $modifiedColumns[':p' . $index++]  = '`id_type_xml`';
        }
        if ($this->isColumnModified(CommonAnnonceBoampPeer::STATUT_DESTINATAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`statut_destinataire`';
        }
        if ($this->isColumnModified(CommonAnnonceBoampPeer::ACCUSE_RECEPTION)) {
            $modifiedColumns[':p' . $index++]  = '`accuse_reception`';
        }
        if ($this->isColumnModified(CommonAnnonceBoampPeer::LIEN)) {
            $modifiedColumns[':p' . $index++]  = '`lien`';
        }
        if ($this->isColumnModified(CommonAnnonceBoampPeer::LIEN_BOAMP)) {
            $modifiedColumns[':p' . $index++]  = '`lien_boamp`';
        }
        if ($this->isColumnModified(CommonAnnonceBoampPeer::LIEN_PDF)) {
            $modifiedColumns[':p' . $index++]  = '`lien_pdf`';
        }

        $sql = sprintf(
            'INSERT INTO `AnnonceBoamp` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_boamp`':						
                        $stmt->bindValue($identifier, $this->id_boamp, PDO::PARAM_INT);
                        break;
                    case '`organisme`':						
                        $stmt->bindValue($identifier, $this->organisme, PDO::PARAM_STR);
                        break;
                    case '`consultation_ref`':						
                        $stmt->bindValue($identifier, $this->consultation_ref, PDO::PARAM_INT);
                        break;
                    case '`envoi_boamp`':						
                        $stmt->bindValue($identifier, $this->envoi_boamp, PDO::PARAM_INT);
                        break;
                    case '`date_envoi`':						
                        $stmt->bindValue($identifier, $this->date_envoi, PDO::PARAM_STR);
                        break;
                    case '`ann_xml`':						
                        if (is_resource($this->ann_xml)) {
                            rewind($this->ann_xml);
                        }
                        $stmt->bindValue($identifier, $this->ann_xml, PDO::PARAM_LOB);
                        break;
                    case '`ann_pdf`':						
                        if (is_resource($this->ann_pdf)) {
                            rewind($this->ann_pdf);
                        }
                        $stmt->bindValue($identifier, $this->ann_pdf, PDO::PARAM_LOB);
                        break;
                    case '`ann_form_values`':						
                        if (is_resource($this->ann_form_values)) {
                            rewind($this->ann_form_values);
                        }
                        $stmt->bindValue($identifier, $this->ann_form_values, PDO::PARAM_LOB);
                        break;
                    case '`ann_error`':						
                        $stmt->bindValue($identifier, $this->ann_error, PDO::PARAM_STR);
                        break;
                    case '`type_boamp`':						
                        $stmt->bindValue($identifier, $this->type_boamp, PDO::PARAM_STR);
                        break;
                    case '`type_ann`':						
                        $stmt->bindValue($identifier, $this->type_ann, PDO::PARAM_INT);
                        break;
                    case '`datepub`':						
                        $stmt->bindValue($identifier, $this->datepub, PDO::PARAM_STR);
                        break;
                    case '`num_ann`':						
                        $stmt->bindValue($identifier, $this->num_ann, PDO::PARAM_INT);
                        break;
                    case '`parution`':						
                        $stmt->bindValue($identifier, $this->parution, PDO::PARAM_STR);
                        break;
                    case '`id_jo`':						
                        $stmt->bindValue($identifier, $this->id_jo, PDO::PARAM_STR);
                        break;
                    case '`erreurs`':						
                        $stmt->bindValue($identifier, $this->erreurs, PDO::PARAM_STR);
                        break;
                    case '`nom_fichier_xml`':						
                        $stmt->bindValue($identifier, $this->nom_fichier_xml, PDO::PARAM_STR);
                        break;
                    case '`envoi_joue`':						
                        $stmt->bindValue($identifier, $this->envoi_joue, PDO::PARAM_STR);
                        break;
                    case '`mapa`':						
                        $stmt->bindValue($identifier, $this->mapa, PDO::PARAM_STR);
                        break;
                    case '`implique_SAD`':						
                        $stmt->bindValue($identifier, $this->implique_sad, PDO::PARAM_STR);
                        break;
                    case '`date_maj`':						
                        $stmt->bindValue($identifier, $this->date_maj, PDO::PARAM_STR);
                        break;
                    case '`id_destination_form_xml`':						
                        $stmt->bindValue($identifier, $this->id_destination_form_xml, PDO::PARAM_INT);
                        break;
                    case '`id_form_xml`':						
                        $stmt->bindValue($identifier, $this->id_form_xml, PDO::PARAM_INT);
                        break;
                    case '`id_type_xml`':						
                        $stmt->bindValue($identifier, $this->id_type_xml, PDO::PARAM_INT);
                        break;
                    case '`statut_destinataire`':						
                        $stmt->bindValue($identifier, $this->statut_destinataire, PDO::PARAM_STR);
                        break;
                    case '`accuse_reception`':						
                        $stmt->bindValue($identifier, $this->accuse_reception, PDO::PARAM_STR);
                        break;
                    case '`lien`':						
                        $stmt->bindValue($identifier, $this->lien, PDO::PARAM_STR);
                        break;
                    case '`lien_boamp`':						
                        $stmt->bindValue($identifier, $this->lien_boamp, PDO::PARAM_STR);
                        break;
                    case '`lien_pdf`':						
                        $stmt->bindValue($identifier, $this->lien_pdf, PDO::PARAM_STR);
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
        $this->setIdBoamp($pk);

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

            if ($this->aCommonConsultationRelatedByOrganismeConsultationRef !== null) {
                if (!$this->aCommonConsultationRelatedByOrganismeConsultationRef->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonConsultationRelatedByOrganismeConsultationRef->getValidationFailures());
                }
            }

            if ($this->aCommonConsultationRelatedByConsultationRef !== null) {
                if (!$this->aCommonConsultationRelatedByConsultationRef->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonConsultationRelatedByConsultationRef->getValidationFailures());
                }
            }


            if (($retval = CommonAnnonceBoampPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonAnnonceBoampPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdBoamp();
                break;
            case 1:
                return $this->getOrganisme();
                break;
            case 2:
                return $this->getConsultationRef();
                break;
            case 3:
                return $this->getEnvoiBoamp();
                break;
            case 4:
                return $this->getDateEnvoi();
                break;
            case 5:
                return $this->getAnnXml();
                break;
            case 6:
                return $this->getAnnPdf();
                break;
            case 7:
                return $this->getAnnFormValues();
                break;
            case 8:
                return $this->getAnnError();
                break;
            case 9:
                return $this->getTypeBoamp();
                break;
            case 10:
                return $this->getTypeAnn();
                break;
            case 11:
                return $this->getDatepub();
                break;
            case 12:
                return $this->getNumAnn();
                break;
            case 13:
                return $this->getParution();
                break;
            case 14:
                return $this->getIdJo();
                break;
            case 15:
                return $this->getErreurs();
                break;
            case 16:
                return $this->getNomFichierXml();
                break;
            case 17:
                return $this->getEnvoiJoue();
                break;
            case 18:
                return $this->getMapa();
                break;
            case 19:
                return $this->getImpliqueSad();
                break;
            case 20:
                return $this->getDateMaj();
                break;
            case 21:
                return $this->getIdDestinationFormXml();
                break;
            case 22:
                return $this->getIdFormXml();
                break;
            case 23:
                return $this->getIdTypeXml();
                break;
            case 24:
                return $this->getStatutDestinataire();
                break;
            case 25:
                return $this->getAccuseReception();
                break;
            case 26:
                return $this->getLien();
                break;
            case 27:
                return $this->getLienBoamp();
                break;
            case 28:
                return $this->getLienPdf();
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
        if (isset($alreadyDumpedObjects['CommonAnnonceBoamp'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonAnnonceBoamp'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonAnnonceBoampPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdBoamp(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getConsultationRef(),
            $keys[3] => $this->getEnvoiBoamp(),
            $keys[4] => $this->getDateEnvoi(),
            $keys[5] => $this->getAnnXml(),
            $keys[6] => $this->getAnnPdf(),
            $keys[7] => $this->getAnnFormValues(),
            $keys[8] => $this->getAnnError(),
            $keys[9] => $this->getTypeBoamp(),
            $keys[10] => $this->getTypeAnn(),
            $keys[11] => $this->getDatepub(),
            $keys[12] => $this->getNumAnn(),
            $keys[13] => $this->getParution(),
            $keys[14] => $this->getIdJo(),
            $keys[15] => $this->getErreurs(),
            $keys[16] => $this->getNomFichierXml(),
            $keys[17] => $this->getEnvoiJoue(),
            $keys[18] => $this->getMapa(),
            $keys[19] => $this->getImpliqueSad(),
            $keys[20] => $this->getDateMaj(),
            $keys[21] => $this->getIdDestinationFormXml(),
            $keys[22] => $this->getIdFormXml(),
            $keys[23] => $this->getIdTypeXml(),
            $keys[24] => $this->getStatutDestinataire(),
            $keys[25] => $this->getAccuseReception(),
            $keys[26] => $this->getLien(),
            $keys[27] => $this->getLienBoamp(),
            $keys[28] => $this->getLienPdf(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonConsultationRelatedByOrganismeConsultationRef) {
                $result['CommonConsultationRelatedByOrganismeConsultationRef'] = $this->aCommonConsultationRelatedByOrganismeConsultationRef->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aCommonConsultationRelatedByConsultationRef) {
                $result['CommonConsultationRelatedByConsultationRef'] = $this->aCommonConsultationRelatedByConsultationRef->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = CommonAnnonceBoampPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdBoamp($value);
                break;
            case 1:
                $this->setOrganisme($value);
                break;
            case 2:
                $this->setConsultationRef($value);
                break;
            case 3:
                $this->setEnvoiBoamp($value);
                break;
            case 4:
                $this->setDateEnvoi($value);
                break;
            case 5:
                $this->setAnnXml($value);
                break;
            case 6:
                $this->setAnnPdf($value);
                break;
            case 7:
                $this->setAnnFormValues($value);
                break;
            case 8:
                $this->setAnnError($value);
                break;
            case 9:
                $this->setTypeBoamp($value);
                break;
            case 10:
                $this->setTypeAnn($value);
                break;
            case 11:
                $this->setDatepub($value);
                break;
            case 12:
                $this->setNumAnn($value);
                break;
            case 13:
                $this->setParution($value);
                break;
            case 14:
                $this->setIdJo($value);
                break;
            case 15:
                $this->setErreurs($value);
                break;
            case 16:
                $this->setNomFichierXml($value);
                break;
            case 17:
                $this->setEnvoiJoue($value);
                break;
            case 18:
                $this->setMapa($value);
                break;
            case 19:
                $this->setImpliqueSad($value);
                break;
            case 20:
                $this->setDateMaj($value);
                break;
            case 21:
                $this->setIdDestinationFormXml($value);
                break;
            case 22:
                $this->setIdFormXml($value);
                break;
            case 23:
                $this->setIdTypeXml($value);
                break;
            case 24:
                $this->setStatutDestinataire($value);
                break;
            case 25:
                $this->setAccuseReception($value);
                break;
            case 26:
                $this->setLien($value);
                break;
            case 27:
                $this->setLienBoamp($value);
                break;
            case 28:
                $this->setLienPdf($value);
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
        $keys = CommonAnnonceBoampPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdBoamp($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setConsultationRef($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setEnvoiBoamp($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setDateEnvoi($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setAnnXml($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setAnnPdf($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setAnnFormValues($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setAnnError($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setTypeBoamp($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setTypeAnn($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setDatepub($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setNumAnn($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setParution($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setIdJo($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setErreurs($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setNomFichierXml($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setEnvoiJoue($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setMapa($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setImpliqueSad($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setDateMaj($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setIdDestinationFormXml($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setIdFormXml($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setIdTypeXml($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setStatutDestinataire($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setAccuseReception($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setLien($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setLienBoamp($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setLienPdf($arr[$keys[28]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonAnnonceBoampPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonAnnonceBoampPeer::ID_BOAMP)) $criteria->add(CommonAnnonceBoampPeer::ID_BOAMP, $this->id_boamp);
        if ($this->isColumnModified(CommonAnnonceBoampPeer::ORGANISME)) $criteria->add(CommonAnnonceBoampPeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonAnnonceBoampPeer::CONSULTATION_REF)) $criteria->add(CommonAnnonceBoampPeer::CONSULTATION_REF, $this->consultation_ref);
        if ($this->isColumnModified(CommonAnnonceBoampPeer::ENVOI_BOAMP)) $criteria->add(CommonAnnonceBoampPeer::ENVOI_BOAMP, $this->envoi_boamp);
        if ($this->isColumnModified(CommonAnnonceBoampPeer::DATE_ENVOI)) $criteria->add(CommonAnnonceBoampPeer::DATE_ENVOI, $this->date_envoi);
        if ($this->isColumnModified(CommonAnnonceBoampPeer::ANN_XML)) $criteria->add(CommonAnnonceBoampPeer::ANN_XML, $this->ann_xml);
        if ($this->isColumnModified(CommonAnnonceBoampPeer::ANN_PDF)) $criteria->add(CommonAnnonceBoampPeer::ANN_PDF, $this->ann_pdf);
        if ($this->isColumnModified(CommonAnnonceBoampPeer::ANN_FORM_VALUES)) $criteria->add(CommonAnnonceBoampPeer::ANN_FORM_VALUES, $this->ann_form_values);
        if ($this->isColumnModified(CommonAnnonceBoampPeer::ANN_ERROR)) $criteria->add(CommonAnnonceBoampPeer::ANN_ERROR, $this->ann_error);
        if ($this->isColumnModified(CommonAnnonceBoampPeer::TYPE_BOAMP)) $criteria->add(CommonAnnonceBoampPeer::TYPE_BOAMP, $this->type_boamp);
        if ($this->isColumnModified(CommonAnnonceBoampPeer::TYPE_ANN)) $criteria->add(CommonAnnonceBoampPeer::TYPE_ANN, $this->type_ann);
        if ($this->isColumnModified(CommonAnnonceBoampPeer::DATEPUB)) $criteria->add(CommonAnnonceBoampPeer::DATEPUB, $this->datepub);
        if ($this->isColumnModified(CommonAnnonceBoampPeer::NUM_ANN)) $criteria->add(CommonAnnonceBoampPeer::NUM_ANN, $this->num_ann);
        if ($this->isColumnModified(CommonAnnonceBoampPeer::PARUTION)) $criteria->add(CommonAnnonceBoampPeer::PARUTION, $this->parution);
        if ($this->isColumnModified(CommonAnnonceBoampPeer::ID_JO)) $criteria->add(CommonAnnonceBoampPeer::ID_JO, $this->id_jo);
        if ($this->isColumnModified(CommonAnnonceBoampPeer::ERREURS)) $criteria->add(CommonAnnonceBoampPeer::ERREURS, $this->erreurs);
        if ($this->isColumnModified(CommonAnnonceBoampPeer::NOM_FICHIER_XML)) $criteria->add(CommonAnnonceBoampPeer::NOM_FICHIER_XML, $this->nom_fichier_xml);
        if ($this->isColumnModified(CommonAnnonceBoampPeer::ENVOI_JOUE)) $criteria->add(CommonAnnonceBoampPeer::ENVOI_JOUE, $this->envoi_joue);
        if ($this->isColumnModified(CommonAnnonceBoampPeer::MAPA)) $criteria->add(CommonAnnonceBoampPeer::MAPA, $this->mapa);
        if ($this->isColumnModified(CommonAnnonceBoampPeer::IMPLIQUE_SAD)) $criteria->add(CommonAnnonceBoampPeer::IMPLIQUE_SAD, $this->implique_sad);
        if ($this->isColumnModified(CommonAnnonceBoampPeer::DATE_MAJ)) $criteria->add(CommonAnnonceBoampPeer::DATE_MAJ, $this->date_maj);
        if ($this->isColumnModified(CommonAnnonceBoampPeer::ID_DESTINATION_FORM_XML)) $criteria->add(CommonAnnonceBoampPeer::ID_DESTINATION_FORM_XML, $this->id_destination_form_xml);
        if ($this->isColumnModified(CommonAnnonceBoampPeer::ID_FORM_XML)) $criteria->add(CommonAnnonceBoampPeer::ID_FORM_XML, $this->id_form_xml);
        if ($this->isColumnModified(CommonAnnonceBoampPeer::ID_TYPE_XML)) $criteria->add(CommonAnnonceBoampPeer::ID_TYPE_XML, $this->id_type_xml);
        if ($this->isColumnModified(CommonAnnonceBoampPeer::STATUT_DESTINATAIRE)) $criteria->add(CommonAnnonceBoampPeer::STATUT_DESTINATAIRE, $this->statut_destinataire);
        if ($this->isColumnModified(CommonAnnonceBoampPeer::ACCUSE_RECEPTION)) $criteria->add(CommonAnnonceBoampPeer::ACCUSE_RECEPTION, $this->accuse_reception);
        if ($this->isColumnModified(CommonAnnonceBoampPeer::LIEN)) $criteria->add(CommonAnnonceBoampPeer::LIEN, $this->lien);
        if ($this->isColumnModified(CommonAnnonceBoampPeer::LIEN_BOAMP)) $criteria->add(CommonAnnonceBoampPeer::LIEN_BOAMP, $this->lien_boamp);
        if ($this->isColumnModified(CommonAnnonceBoampPeer::LIEN_PDF)) $criteria->add(CommonAnnonceBoampPeer::LIEN_PDF, $this->lien_pdf);

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
        $criteria = new Criteria(CommonAnnonceBoampPeer::DATABASE_NAME);
        $criteria->add(CommonAnnonceBoampPeer::ID_BOAMP, $this->id_boamp);
        $criteria->add(CommonAnnonceBoampPeer::ORGANISME, $this->organisme);

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
        $pks[0] = $this->getIdBoamp();
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
        $this->setIdBoamp($keys[0]);
        $this->setOrganisme($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getIdBoamp()) && (null === $this->getOrganisme());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonAnnonceBoamp (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setConsultationRef($this->getConsultationRef());
        $copyObj->setEnvoiBoamp($this->getEnvoiBoamp());
        $copyObj->setDateEnvoi($this->getDateEnvoi());
        $copyObj->setAnnXml($this->getAnnXml());
        $copyObj->setAnnPdf($this->getAnnPdf());
        $copyObj->setAnnFormValues($this->getAnnFormValues());
        $copyObj->setAnnError($this->getAnnError());
        $copyObj->setTypeBoamp($this->getTypeBoamp());
        $copyObj->setTypeAnn($this->getTypeAnn());
        $copyObj->setDatepub($this->getDatepub());
        $copyObj->setNumAnn($this->getNumAnn());
        $copyObj->setParution($this->getParution());
        $copyObj->setIdJo($this->getIdJo());
        $copyObj->setErreurs($this->getErreurs());
        $copyObj->setNomFichierXml($this->getNomFichierXml());
        $copyObj->setEnvoiJoue($this->getEnvoiJoue());
        $copyObj->setMapa($this->getMapa());
        $copyObj->setImpliqueSad($this->getImpliqueSad());
        $copyObj->setDateMaj($this->getDateMaj());
        $copyObj->setIdDestinationFormXml($this->getIdDestinationFormXml());
        $copyObj->setIdFormXml($this->getIdFormXml());
        $copyObj->setIdTypeXml($this->getIdTypeXml());
        $copyObj->setStatutDestinataire($this->getStatutDestinataire());
        $copyObj->setAccuseReception($this->getAccuseReception());
        $copyObj->setLien($this->getLien());
        $copyObj->setLienBoamp($this->getLienBoamp());
        $copyObj->setLienPdf($this->getLienPdf());

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
            $copyObj->setIdBoamp(NULL); // this is a auto-increment column, so set to default value
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
     * @return CommonAnnonceBoamp Clone of current object.
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
     * @return CommonAnnonceBoampPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonAnnonceBoampPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonConsultation object.
     *
     * @param   CommonConsultation $v
     * @return CommonAnnonceBoamp The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonConsultationRelatedByOrganismeConsultationRef(CommonConsultation $v = null)
    {
        if ($v === null) {
            $this->setOrganisme(NULL);
        } else {
            $this->setOrganisme($v->getOrganisme());
        }

        if ($v === null) {
            $this->setConsultationRef(0);
        } else {
            $this->setConsultationRef($v->getReference());
        }

        $this->aCommonConsultationRelatedByOrganismeConsultationRef = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonConsultation object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonAnnonceBoampRelatedByOrganismeConsultationRef($this);
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
    public function getCommonConsultationRelatedByOrganismeConsultationRef(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonConsultationRelatedByOrganismeConsultationRef === null && (($this->organisme !== "" && $this->organisme !== null) && $this->consultation_ref !== null) && $doQuery) {
            $this->aCommonConsultationRelatedByOrganismeConsultationRef = CommonConsultationQuery::create()->findPk(array($this->consultation_ref, $this->organisme), $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonConsultationRelatedByOrganismeConsultationRef->addCommonAnnonceBoampsRelatedByOrganismeConsultationRef($this);
             */
        }

        return $this->aCommonConsultationRelatedByOrganismeConsultationRef;
    }

    /**
     * Declares an association between this object and a CommonConsultation object.
     *
     * @param   CommonConsultation $v
     * @return CommonAnnonceBoamp The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonConsultationRelatedByConsultationRef(CommonConsultation $v = null)
    {
        if ($v === null) {
            $this->setConsultationRef(0);
        } else {
            $this->setConsultationRef($v->getReference());
        }

        $this->aCommonConsultationRelatedByConsultationRef = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonConsultation object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonAnnonceBoampRelatedByConsultationRef($this);
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
    public function getCommonConsultationRelatedByConsultationRef(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonConsultationRelatedByConsultationRef === null && ($this->consultation_ref !== null) && $doQuery) {
            $this->aCommonConsultationRelatedByConsultationRef = CommonConsultationQuery::create()
                ->filterByCommonAnnonceBoampRelatedByConsultationRef($this) // here
                ->findOne($con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonConsultationRelatedByConsultationRef->addCommonAnnonceBoampsRelatedByConsultationRef($this);
             */
        }

        return $this->aCommonConsultationRelatedByConsultationRef;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_boamp = null;
        $this->organisme = null;
        $this->consultation_ref = null;
        $this->envoi_boamp = null;
        $this->date_envoi = null;
        $this->ann_xml = null;
        $this->ann_pdf = null;
        $this->ann_form_values = null;
        $this->ann_error = null;
        $this->type_boamp = null;
        $this->type_ann = null;
        $this->datepub = null;
        $this->num_ann = null;
        $this->parution = null;
        $this->id_jo = null;
        $this->erreurs = null;
        $this->nom_fichier_xml = null;
        $this->envoi_joue = null;
        $this->mapa = null;
        $this->implique_sad = null;
        $this->date_maj = null;
        $this->id_destination_form_xml = null;
        $this->id_form_xml = null;
        $this->id_type_xml = null;
        $this->statut_destinataire = null;
        $this->accuse_reception = null;
        $this->lien = null;
        $this->lien_boamp = null;
        $this->lien_pdf = null;
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
            if ($this->aCommonConsultationRelatedByOrganismeConsultationRef instanceof Persistent) {
              $this->aCommonConsultationRelatedByOrganismeConsultationRef->clearAllReferences($deep);
            }
            if ($this->aCommonConsultationRelatedByConsultationRef instanceof Persistent) {
              $this->aCommonConsultationRelatedByConsultationRef->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        $this->aCommonConsultationRelatedByOrganismeConsultationRef = null;
        $this->aCommonConsultationRelatedByConsultationRef = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonAnnonceBoampPeer::DEFAULT_STRING_FORMAT);
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
