<?php


/**
 * Base class that represents a row from the 'Telechargement' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTelechargement extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonTelechargementPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonTelechargementPeer
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
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the consultation_ref field.
     * @var        int
     */
    protected $consultation_ref;

    /**
     * The value for the datetelechargement field.
     * Note: this column has a database default value of: NULL
     * @var        string
     */
    protected $datetelechargement;

    /**
     * The value for the tirage_plan field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $tirage_plan;

    /**
     * The value for the id_inscrit field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_inscrit;

    /**
     * The value for the id_entreprise field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_entreprise;

    /**
     * The value for the support field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $support;

    /**
     * The value for the nom field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $nom;

    /**
     * The value for the adresse field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adresse;

    /**
     * The value for the email field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $email;

    /**
     * The value for the entreprise field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $entreprise;

    /**
     * The value for the codepostal field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $codepostal;

    /**
     * The value for the ville field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $ville;

    /**
     * The value for the pays field.
     * @var        string
     */
    protected $pays;

    /**
     * The value for the telephone field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $telephone;

    /**
     * The value for the siret field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $siret;

    /**
     * The value for the fax field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $fax;

    /**
     * The value for the lots field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $lots;

    /**
     * The value for the sirenetranger field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $sirenetranger;

    /**
     * The value for the adresse2 field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $adresse2;

    /**
     * The value for the prenom field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $prenom;

    /**
     * The value for the noms_fichiers_dce field.
     * @var        string
     */
    protected $noms_fichiers_dce;

    /**
     * The value for the observation field.
     * @var        string
     */
    protected $observation;

    /**
     * The value for the acronyme_pays field.
     * @var        string
     */
    protected $acronyme_pays;

    /**
     * The value for the ifu field.
     * @var        string
     */
    protected $ifu;

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
        $this->organisme = '';
        $this->datetelechargement = NULL;
        $this->tirage_plan = 0;
        $this->id_inscrit = 0;
        $this->id_entreprise = 0;
        $this->support = '1';
        $this->nom = '';
        $this->adresse = '';
        $this->email = '';
        $this->entreprise = '';
        $this->codepostal = '0';
        $this->ville = '';
        $this->telephone = '';
        $this->siret = '';
        $this->fax = '';
        $this->lots = '';
        $this->sirenetranger = '0';
        $this->adresse2 = '0';
        $this->prenom = '';
    }

    /**
     * Initializes internal state of BaseCommonTelechargement object.
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
     * Get the [optionally formatted] temporal [datetelechargement] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDatetelechargement($format = 'Y-m-d H:i:s')
    {
        if ($this->datetelechargement === null) {
            return null;
        }

        if ($this->datetelechargement === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->datetelechargement);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->datetelechargement, true), $x);
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
     * Get the [tirage_plan] column value.
     * 
     * @return int
     */
    public function getTiragePlan()
    {

        return $this->tirage_plan;
    }

    /**
     * Get the [id_inscrit] column value.
     * 
     * @return int
     */
    public function getIdInscrit()
    {

        return $this->id_inscrit;
    }

    /**
     * Get the [id_entreprise] column value.
     * 
     * @return int
     */
    public function getIdEntreprise()
    {

        return $this->id_entreprise;
    }

    /**
     * Get the [support] column value.
     * 
     * @return string
     */
    public function getSupport()
    {

        return $this->support;
    }

    /**
     * Get the [nom] column value.
     * 
     * @return string
     */
    public function getNom()
    {

        return $this->nom;
    }

    /**
     * Get the [adresse] column value.
     * 
     * @return string
     */
    public function getAdresse()
    {

        return $this->adresse;
    }

    /**
     * Get the [email] column value.
     * 
     * @return string
     */
    public function getEmail()
    {

        return $this->email;
    }

    /**
     * Get the [entreprise] column value.
     * 
     * @return string
     */
    public function getEntreprise()
    {

        return $this->entreprise;
    }

    /**
     * Get the [codepostal] column value.
     * 
     * @return string
     */
    public function getCodepostal()
    {

        return $this->codepostal;
    }

    /**
     * Get the [ville] column value.
     * 
     * @return string
     */
    public function getVille()
    {

        return $this->ville;
    }

    /**
     * Get the [pays] column value.
     * 
     * @return string
     */
    public function getPays()
    {

        return $this->pays;
    }

    /**
     * Get the [telephone] column value.
     * 
     * @return string
     */
    public function getTelephone()
    {

        return $this->telephone;
    }

    /**
     * Get the [siret] column value.
     * 
     * @return string
     */
    public function getSiret()
    {

        return $this->siret;
    }

    /**
     * Get the [fax] column value.
     * 
     * @return string
     */
    public function getFax()
    {

        return $this->fax;
    }

    /**
     * Get the [lots] column value.
     * 
     * @return string
     */
    public function getLots()
    {

        return $this->lots;
    }

    /**
     * Get the [sirenetranger] column value.
     * 
     * @return string
     */
    public function getSirenetranger()
    {

        return $this->sirenetranger;
    }

    /**
     * Get the [adresse2] column value.
     * 
     * @return string
     */
    public function getAdresse2()
    {

        return $this->adresse2;
    }

    /**
     * Get the [prenom] column value.
     * 
     * @return string
     */
    public function getPrenom()
    {

        return $this->prenom;
    }

    /**
     * Get the [noms_fichiers_dce] column value.
     * 
     * @return string
     */
    public function getNomsFichiersDce()
    {

        return $this->noms_fichiers_dce;
    }

    /**
     * Get the [observation] column value.
     * 
     * @return string
     */
    public function getObservation()
    {

        return $this->observation;
    }

    /**
     * Get the [acronyme_pays] column value.
     * 
     * @return string
     */
    public function getAcronymePays()
    {

        return $this->acronyme_pays;
    }

    /**
     * Get the [ifu] column value.
     * 
     * @return string
     */
    public function getIfu()
    {

        return $this->ifu;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonTelechargement The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonTelechargementPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonTelechargement The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonTelechargementPeer::ORGANISME;
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
     * @return CommonTelechargement The current object (for fluent API support)
     */
    public function setConsultationRef($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->consultation_ref !== $v) {
            $this->consultation_ref = $v;
            $this->modifiedColumns[] = CommonTelechargementPeer::CONSULTATION_REF;
        }

        if ($this->aCommonConsultation !== null && $this->aCommonConsultation->getReference() !== $v) {
            $this->aCommonConsultation = null;
        }


        return $this;
    } // setConsultationRef()

    /**
     * Sets the value of [datetelechargement] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonTelechargement The current object (for fluent API support)
     */
    public function setDatetelechargement($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->datetelechargement !== null || $dt !== null) {
            $currentDateAsString = ($this->datetelechargement !== null && $tmpDt = new DateTime($this->datetelechargement)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ( ($currentDateAsString !== $newDateAsString) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
                 ) {
                $this->datetelechargement = $newDateAsString;
                $this->modifiedColumns[] = CommonTelechargementPeer::DATETELECHARGEMENT;
            }
        } // if either are not null


        return $this;
    } // setDatetelechargement()

    /**
     * Set the value of [tirage_plan] column.
     * 
     * @param int $v new value
     * @return CommonTelechargement The current object (for fluent API support)
     */
    public function setTiragePlan($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tirage_plan !== $v) {
            $this->tirage_plan = $v;
            $this->modifiedColumns[] = CommonTelechargementPeer::TIRAGE_PLAN;
        }


        return $this;
    } // setTiragePlan()

    /**
     * Set the value of [id_inscrit] column.
     * 
     * @param int $v new value
     * @return CommonTelechargement The current object (for fluent API support)
     */
    public function setIdInscrit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_inscrit !== $v) {
            $this->id_inscrit = $v;
            $this->modifiedColumns[] = CommonTelechargementPeer::ID_INSCRIT;
        }


        return $this;
    } // setIdInscrit()

    /**
     * Set the value of [id_entreprise] column.
     * 
     * @param int $v new value
     * @return CommonTelechargement The current object (for fluent API support)
     */
    public function setIdEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_entreprise !== $v) {
            $this->id_entreprise = $v;
            $this->modifiedColumns[] = CommonTelechargementPeer::ID_ENTREPRISE;
        }


        return $this;
    } // setIdEntreprise()

    /**
     * Set the value of [support] column.
     * 
     * @param string $v new value
     * @return CommonTelechargement The current object (for fluent API support)
     */
    public function setSupport($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->support !== $v) {
            $this->support = $v;
            $this->modifiedColumns[] = CommonTelechargementPeer::SUPPORT;
        }


        return $this;
    } // setSupport()

    /**
     * Set the value of [nom] column.
     * 
     * @param string $v new value
     * @return CommonTelechargement The current object (for fluent API support)
     */
    public function setNom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom !== $v) {
            $this->nom = $v;
            $this->modifiedColumns[] = CommonTelechargementPeer::NOM;
        }


        return $this;
    } // setNom()

    /**
     * Set the value of [adresse] column.
     * 
     * @param string $v new value
     * @return CommonTelechargement The current object (for fluent API support)
     */
    public function setAdresse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse !== $v) {
            $this->adresse = $v;
            $this->modifiedColumns[] = CommonTelechargementPeer::ADRESSE;
        }


        return $this;
    } // setAdresse()

    /**
     * Set the value of [email] column.
     * 
     * @param string $v new value
     * @return CommonTelechargement The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[] = CommonTelechargementPeer::EMAIL;
        }


        return $this;
    } // setEmail()

    /**
     * Set the value of [entreprise] column.
     * 
     * @param string $v new value
     * @return CommonTelechargement The current object (for fluent API support)
     */
    public function setEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->entreprise !== $v) {
            $this->entreprise = $v;
            $this->modifiedColumns[] = CommonTelechargementPeer::ENTREPRISE;
        }


        return $this;
    } // setEntreprise()

    /**
     * Set the value of [codepostal] column.
     * 
     * @param string $v new value
     * @return CommonTelechargement The current object (for fluent API support)
     */
    public function setCodepostal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->codepostal !== $v) {
            $this->codepostal = $v;
            $this->modifiedColumns[] = CommonTelechargementPeer::CODEPOSTAL;
        }


        return $this;
    } // setCodepostal()

    /**
     * Set the value of [ville] column.
     * 
     * @param string $v new value
     * @return CommonTelechargement The current object (for fluent API support)
     */
    public function setVille($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ville !== $v) {
            $this->ville = $v;
            $this->modifiedColumns[] = CommonTelechargementPeer::VILLE;
        }


        return $this;
    } // setVille()

    /**
     * Set the value of [pays] column.
     * 
     * @param string $v new value
     * @return CommonTelechargement The current object (for fluent API support)
     */
    public function setPays($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pays !== $v) {
            $this->pays = $v;
            $this->modifiedColumns[] = CommonTelechargementPeer::PAYS;
        }


        return $this;
    } // setPays()

    /**
     * Set the value of [telephone] column.
     * 
     * @param string $v new value
     * @return CommonTelechargement The current object (for fluent API support)
     */
    public function setTelephone($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->telephone !== $v) {
            $this->telephone = $v;
            $this->modifiedColumns[] = CommonTelechargementPeer::TELEPHONE;
        }


        return $this;
    } // setTelephone()

    /**
     * Set the value of [siret] column.
     * 
     * @param string $v new value
     * @return CommonTelechargement The current object (for fluent API support)
     */
    public function setSiret($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->siret !== $v) {
            $this->siret = $v;
            $this->modifiedColumns[] = CommonTelechargementPeer::SIRET;
        }


        return $this;
    } // setSiret()

    /**
     * Set the value of [fax] column.
     * 
     * @param string $v new value
     * @return CommonTelechargement The current object (for fluent API support)
     */
    public function setFax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fax !== $v) {
            $this->fax = $v;
            $this->modifiedColumns[] = CommonTelechargementPeer::FAX;
        }


        return $this;
    } // setFax()

    /**
     * Set the value of [lots] column.
     * 
     * @param string $v new value
     * @return CommonTelechargement The current object (for fluent API support)
     */
    public function setLots($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lots !== $v) {
            $this->lots = $v;
            $this->modifiedColumns[] = CommonTelechargementPeer::LOTS;
        }


        return $this;
    } // setLots()

    /**
     * Set the value of [sirenetranger] column.
     * 
     * @param string $v new value
     * @return CommonTelechargement The current object (for fluent API support)
     */
    public function setSirenetranger($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sirenetranger !== $v) {
            $this->sirenetranger = $v;
            $this->modifiedColumns[] = CommonTelechargementPeer::SIRENETRANGER;
        }


        return $this;
    } // setSirenetranger()

    /**
     * Set the value of [adresse2] column.
     * 
     * @param string $v new value
     * @return CommonTelechargement The current object (for fluent API support)
     */
    public function setAdresse2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse2 !== $v) {
            $this->adresse2 = $v;
            $this->modifiedColumns[] = CommonTelechargementPeer::ADRESSE2;
        }


        return $this;
    } // setAdresse2()

    /**
     * Set the value of [prenom] column.
     * 
     * @param string $v new value
     * @return CommonTelechargement The current object (for fluent API support)
     */
    public function setPrenom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prenom !== $v) {
            $this->prenom = $v;
            $this->modifiedColumns[] = CommonTelechargementPeer::PRENOM;
        }


        return $this;
    } // setPrenom()

    /**
     * Set the value of [noms_fichiers_dce] column.
     * 
     * @param string $v new value
     * @return CommonTelechargement The current object (for fluent API support)
     */
    public function setNomsFichiersDce($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->noms_fichiers_dce !== $v) {
            $this->noms_fichiers_dce = $v;
            $this->modifiedColumns[] = CommonTelechargementPeer::NOMS_FICHIERS_DCE;
        }


        return $this;
    } // setNomsFichiersDce()

    /**
     * Set the value of [observation] column.
     * 
     * @param string $v new value
     * @return CommonTelechargement The current object (for fluent API support)
     */
    public function setObservation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->observation !== $v) {
            $this->observation = $v;
            $this->modifiedColumns[] = CommonTelechargementPeer::OBSERVATION;
        }


        return $this;
    } // setObservation()

    /**
     * Set the value of [acronyme_pays] column.
     * 
     * @param string $v new value
     * @return CommonTelechargement The current object (for fluent API support)
     */
    public function setAcronymePays($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->acronyme_pays !== $v) {
            $this->acronyme_pays = $v;
            $this->modifiedColumns[] = CommonTelechargementPeer::ACRONYME_PAYS;
        }


        return $this;
    } // setAcronymePays()

    /**
     * Set the value of [ifu] column.
     * 
     * @param string $v new value
     * @return CommonTelechargement The current object (for fluent API support)
     */
    public function setIfu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ifu !== $v) {
            $this->ifu = $v;
            $this->modifiedColumns[] = CommonTelechargementPeer::IFU;
        }


        return $this;
    } // setIfu()

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
            if ($this->organisme !== '') {
                return false;
            }

            if ($this->datetelechargement !== NULL) {
                return false;
            }

            if ($this->tirage_plan !== 0) {
                return false;
            }

            if ($this->id_inscrit !== 0) {
                return false;
            }

            if ($this->id_entreprise !== 0) {
                return false;
            }

            if ($this->support !== '1') {
                return false;
            }

            if ($this->nom !== '') {
                return false;
            }

            if ($this->adresse !== '') {
                return false;
            }

            if ($this->email !== '') {
                return false;
            }

            if ($this->entreprise !== '') {
                return false;
            }

            if ($this->codepostal !== '0') {
                return false;
            }

            if ($this->ville !== '') {
                return false;
            }

            if ($this->telephone !== '') {
                return false;
            }

            if ($this->siret !== '') {
                return false;
            }

            if ($this->fax !== '') {
                return false;
            }

            if ($this->lots !== '') {
                return false;
            }

            if ($this->sirenetranger !== '0') {
                return false;
            }

            if ($this->adresse2 !== '0') {
                return false;
            }

            if ($this->prenom !== '') {
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
            $this->datetelechargement = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->tirage_plan = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->id_inscrit = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->id_entreprise = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->support = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->nom = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->adresse = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->email = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->entreprise = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->codepostal = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->ville = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->pays = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->telephone = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->siret = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->fax = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->lots = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->sirenetranger = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->adresse2 = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->prenom = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->noms_fichiers_dce = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->observation = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->acronyme_pays = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->ifu = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 26; // 26 = CommonTelechargementPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonTelechargement object", $e);
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
            $con = Propel::getConnection(CommonTelechargementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonTelechargementPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonTelechargementPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonTelechargementQuery::create()
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
            $con = Propel::getConnection(CommonTelechargementPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonTelechargementPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonTelechargementPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonTelechargementPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonTelechargementPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonTelechargementPeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonTelechargementPeer::CONSULTATION_REF)) {
            $modifiedColumns[':p' . $index++]  = '`consultation_ref`';
        }
        if ($this->isColumnModified(CommonTelechargementPeer::DATETELECHARGEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`datetelechargement`';
        }
        if ($this->isColumnModified(CommonTelechargementPeer::TIRAGE_PLAN)) {
            $modifiedColumns[':p' . $index++]  = '`tirage_plan`';
        }
        if ($this->isColumnModified(CommonTelechargementPeer::ID_INSCRIT)) {
            $modifiedColumns[':p' . $index++]  = '`id_inscrit`';
        }
        if ($this->isColumnModified(CommonTelechargementPeer::ID_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`id_entreprise`';
        }
        if ($this->isColumnModified(CommonTelechargementPeer::SUPPORT)) {
            $modifiedColumns[':p' . $index++]  = '`support`';
        }
        if ($this->isColumnModified(CommonTelechargementPeer::NOM)) {
            $modifiedColumns[':p' . $index++]  = '`nom`';
        }
        if ($this->isColumnModified(CommonTelechargementPeer::ADRESSE)) {
            $modifiedColumns[':p' . $index++]  = '`adresse`';
        }
        if ($this->isColumnModified(CommonTelechargementPeer::EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`email`';
        }
        if ($this->isColumnModified(CommonTelechargementPeer::ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`entreprise`';
        }
        if ($this->isColumnModified(CommonTelechargementPeer::CODEPOSTAL)) {
            $modifiedColumns[':p' . $index++]  = '`codepostal`';
        }
        if ($this->isColumnModified(CommonTelechargementPeer::VILLE)) {
            $modifiedColumns[':p' . $index++]  = '`ville`';
        }
        if ($this->isColumnModified(CommonTelechargementPeer::PAYS)) {
            $modifiedColumns[':p' . $index++]  = '`pays`';
        }
        if ($this->isColumnModified(CommonTelechargementPeer::TELEPHONE)) {
            $modifiedColumns[':p' . $index++]  = '`telephone`';
        }
        if ($this->isColumnModified(CommonTelechargementPeer::SIRET)) {
            $modifiedColumns[':p' . $index++]  = '`siret`';
        }
        if ($this->isColumnModified(CommonTelechargementPeer::FAX)) {
            $modifiedColumns[':p' . $index++]  = '`fax`';
        }
        if ($this->isColumnModified(CommonTelechargementPeer::LOTS)) {
            $modifiedColumns[':p' . $index++]  = '`lots`';
        }
        if ($this->isColumnModified(CommonTelechargementPeer::SIRENETRANGER)) {
            $modifiedColumns[':p' . $index++]  = '`sirenEtranger`';
        }
        if ($this->isColumnModified(CommonTelechargementPeer::ADRESSE2)) {
            $modifiedColumns[':p' . $index++]  = '`adresse2`';
        }
        if ($this->isColumnModified(CommonTelechargementPeer::PRENOM)) {
            $modifiedColumns[':p' . $index++]  = '`prenom`';
        }
        if ($this->isColumnModified(CommonTelechargementPeer::NOMS_FICHIERS_DCE)) {
            $modifiedColumns[':p' . $index++]  = '`noms_fichiers_dce`';
        }
        if ($this->isColumnModified(CommonTelechargementPeer::OBSERVATION)) {
            $modifiedColumns[':p' . $index++]  = '`Observation`';
        }
        if ($this->isColumnModified(CommonTelechargementPeer::ACRONYME_PAYS)) {
            $modifiedColumns[':p' . $index++]  = '`acronyme_pays`';
        }
        if ($this->isColumnModified(CommonTelechargementPeer::IFU)) {
            $modifiedColumns[':p' . $index++]  = '`ifu`';
        }

        $sql = sprintf(
            'INSERT INTO `Telechargement` (%s) VALUES (%s)',
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
                    case '`datetelechargement`':						
                        $stmt->bindValue($identifier, $this->datetelechargement, PDO::PARAM_STR);
                        break;
                    case '`tirage_plan`':						
                        $stmt->bindValue($identifier, $this->tirage_plan, PDO::PARAM_INT);
                        break;
                    case '`id_inscrit`':						
                        $stmt->bindValue($identifier, $this->id_inscrit, PDO::PARAM_INT);
                        break;
                    case '`id_entreprise`':						
                        $stmt->bindValue($identifier, $this->id_entreprise, PDO::PARAM_INT);
                        break;
                    case '`support`':						
                        $stmt->bindValue($identifier, $this->support, PDO::PARAM_STR);
                        break;
                    case '`nom`':						
                        $stmt->bindValue($identifier, $this->nom, PDO::PARAM_STR);
                        break;
                    case '`adresse`':						
                        $stmt->bindValue($identifier, $this->adresse, PDO::PARAM_STR);
                        break;
                    case '`email`':						
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                    case '`entreprise`':						
                        $stmt->bindValue($identifier, $this->entreprise, PDO::PARAM_STR);
                        break;
                    case '`codepostal`':						
                        $stmt->bindValue($identifier, $this->codepostal, PDO::PARAM_STR);
                        break;
                    case '`ville`':						
                        $stmt->bindValue($identifier, $this->ville, PDO::PARAM_STR);
                        break;
                    case '`pays`':						
                        $stmt->bindValue($identifier, $this->pays, PDO::PARAM_STR);
                        break;
                    case '`telephone`':						
                        $stmt->bindValue($identifier, $this->telephone, PDO::PARAM_STR);
                        break;
                    case '`siret`':						
                        $stmt->bindValue($identifier, $this->siret, PDO::PARAM_STR);
                        break;
                    case '`fax`':						
                        $stmt->bindValue($identifier, $this->fax, PDO::PARAM_STR);
                        break;
                    case '`lots`':						
                        $stmt->bindValue($identifier, $this->lots, PDO::PARAM_STR);
                        break;
                    case '`sirenEtranger`':						
                        $stmt->bindValue($identifier, $this->sirenetranger, PDO::PARAM_STR);
                        break;
                    case '`adresse2`':						
                        $stmt->bindValue($identifier, $this->adresse2, PDO::PARAM_STR);
                        break;
                    case '`prenom`':						
                        $stmt->bindValue($identifier, $this->prenom, PDO::PARAM_STR);
                        break;
                    case '`noms_fichiers_dce`':						
                        $stmt->bindValue($identifier, $this->noms_fichiers_dce, PDO::PARAM_STR);
                        break;
                    case '`Observation`':						
                        $stmt->bindValue($identifier, $this->observation, PDO::PARAM_STR);
                        break;
                    case '`acronyme_pays`':						
                        $stmt->bindValue($identifier, $this->acronyme_pays, PDO::PARAM_STR);
                        break;
                    case '`ifu`':						
                        $stmt->bindValue($identifier, $this->ifu, PDO::PARAM_STR);
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


            if (($retval = CommonTelechargementPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonTelechargementPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getDatetelechargement();
                break;
            case 4:
                return $this->getTiragePlan();
                break;
            case 5:
                return $this->getIdInscrit();
                break;
            case 6:
                return $this->getIdEntreprise();
                break;
            case 7:
                return $this->getSupport();
                break;
            case 8:
                return $this->getNom();
                break;
            case 9:
                return $this->getAdresse();
                break;
            case 10:
                return $this->getEmail();
                break;
            case 11:
                return $this->getEntreprise();
                break;
            case 12:
                return $this->getCodepostal();
                break;
            case 13:
                return $this->getVille();
                break;
            case 14:
                return $this->getPays();
                break;
            case 15:
                return $this->getTelephone();
                break;
            case 16:
                return $this->getSiret();
                break;
            case 17:
                return $this->getFax();
                break;
            case 18:
                return $this->getLots();
                break;
            case 19:
                return $this->getSirenetranger();
                break;
            case 20:
                return $this->getAdresse2();
                break;
            case 21:
                return $this->getPrenom();
                break;
            case 22:
                return $this->getNomsFichiersDce();
                break;
            case 23:
                return $this->getObservation();
                break;
            case 24:
                return $this->getAcronymePays();
                break;
            case 25:
                return $this->getIfu();
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
        if (isset($alreadyDumpedObjects['CommonTelechargement'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonTelechargement'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonTelechargementPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getConsultationRef(),
            $keys[3] => $this->getDatetelechargement(),
            $keys[4] => $this->getTiragePlan(),
            $keys[5] => $this->getIdInscrit(),
            $keys[6] => $this->getIdEntreprise(),
            $keys[7] => $this->getSupport(),
            $keys[8] => $this->getNom(),
            $keys[9] => $this->getAdresse(),
            $keys[10] => $this->getEmail(),
            $keys[11] => $this->getEntreprise(),
            $keys[12] => $this->getCodepostal(),
            $keys[13] => $this->getVille(),
            $keys[14] => $this->getPays(),
            $keys[15] => $this->getTelephone(),
            $keys[16] => $this->getSiret(),
            $keys[17] => $this->getFax(),
            $keys[18] => $this->getLots(),
            $keys[19] => $this->getSirenetranger(),
            $keys[20] => $this->getAdresse2(),
            $keys[21] => $this->getPrenom(),
            $keys[22] => $this->getNomsFichiersDce(),
            $keys[23] => $this->getObservation(),
            $keys[24] => $this->getAcronymePays(),
            $keys[25] => $this->getIfu(),
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
        $pos = CommonTelechargementPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setDatetelechargement($value);
                break;
            case 4:
                $this->setTiragePlan($value);
                break;
            case 5:
                $this->setIdInscrit($value);
                break;
            case 6:
                $this->setIdEntreprise($value);
                break;
            case 7:
                $this->setSupport($value);
                break;
            case 8:
                $this->setNom($value);
                break;
            case 9:
                $this->setAdresse($value);
                break;
            case 10:
                $this->setEmail($value);
                break;
            case 11:
                $this->setEntreprise($value);
                break;
            case 12:
                $this->setCodepostal($value);
                break;
            case 13:
                $this->setVille($value);
                break;
            case 14:
                $this->setPays($value);
                break;
            case 15:
                $this->setTelephone($value);
                break;
            case 16:
                $this->setSiret($value);
                break;
            case 17:
                $this->setFax($value);
                break;
            case 18:
                $this->setLots($value);
                break;
            case 19:
                $this->setSirenetranger($value);
                break;
            case 20:
                $this->setAdresse2($value);
                break;
            case 21:
                $this->setPrenom($value);
                break;
            case 22:
                $this->setNomsFichiersDce($value);
                break;
            case 23:
                $this->setObservation($value);
                break;
            case 24:
                $this->setAcronymePays($value);
                break;
            case 25:
                $this->setIfu($value);
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
        $keys = CommonTelechargementPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setConsultationRef($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDatetelechargement($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setTiragePlan($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIdInscrit($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setIdEntreprise($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setSupport($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setNom($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setAdresse($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setEmail($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setEntreprise($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setCodepostal($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setVille($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setPays($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setTelephone($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setSiret($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setFax($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setLots($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setSirenetranger($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setAdresse2($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setPrenom($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setNomsFichiersDce($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setObservation($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setAcronymePays($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setIfu($arr[$keys[25]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonTelechargementPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonTelechargementPeer::ID)) $criteria->add(CommonTelechargementPeer::ID, $this->id);
        if ($this->isColumnModified(CommonTelechargementPeer::ORGANISME)) $criteria->add(CommonTelechargementPeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonTelechargementPeer::CONSULTATION_REF)) $criteria->add(CommonTelechargementPeer::CONSULTATION_REF, $this->consultation_ref);
        if ($this->isColumnModified(CommonTelechargementPeer::DATETELECHARGEMENT)) $criteria->add(CommonTelechargementPeer::DATETELECHARGEMENT, $this->datetelechargement);
        if ($this->isColumnModified(CommonTelechargementPeer::TIRAGE_PLAN)) $criteria->add(CommonTelechargementPeer::TIRAGE_PLAN, $this->tirage_plan);
        if ($this->isColumnModified(CommonTelechargementPeer::ID_INSCRIT)) $criteria->add(CommonTelechargementPeer::ID_INSCRIT, $this->id_inscrit);
        if ($this->isColumnModified(CommonTelechargementPeer::ID_ENTREPRISE)) $criteria->add(CommonTelechargementPeer::ID_ENTREPRISE, $this->id_entreprise);
        if ($this->isColumnModified(CommonTelechargementPeer::SUPPORT)) $criteria->add(CommonTelechargementPeer::SUPPORT, $this->support);
        if ($this->isColumnModified(CommonTelechargementPeer::NOM)) $criteria->add(CommonTelechargementPeer::NOM, $this->nom);
        if ($this->isColumnModified(CommonTelechargementPeer::ADRESSE)) $criteria->add(CommonTelechargementPeer::ADRESSE, $this->adresse);
        if ($this->isColumnModified(CommonTelechargementPeer::EMAIL)) $criteria->add(CommonTelechargementPeer::EMAIL, $this->email);
        if ($this->isColumnModified(CommonTelechargementPeer::ENTREPRISE)) $criteria->add(CommonTelechargementPeer::ENTREPRISE, $this->entreprise);
        if ($this->isColumnModified(CommonTelechargementPeer::CODEPOSTAL)) $criteria->add(CommonTelechargementPeer::CODEPOSTAL, $this->codepostal);
        if ($this->isColumnModified(CommonTelechargementPeer::VILLE)) $criteria->add(CommonTelechargementPeer::VILLE, $this->ville);
        if ($this->isColumnModified(CommonTelechargementPeer::PAYS)) $criteria->add(CommonTelechargementPeer::PAYS, $this->pays);
        if ($this->isColumnModified(CommonTelechargementPeer::TELEPHONE)) $criteria->add(CommonTelechargementPeer::TELEPHONE, $this->telephone);
        if ($this->isColumnModified(CommonTelechargementPeer::SIRET)) $criteria->add(CommonTelechargementPeer::SIRET, $this->siret);
        if ($this->isColumnModified(CommonTelechargementPeer::FAX)) $criteria->add(CommonTelechargementPeer::FAX, $this->fax);
        if ($this->isColumnModified(CommonTelechargementPeer::LOTS)) $criteria->add(CommonTelechargementPeer::LOTS, $this->lots);
        if ($this->isColumnModified(CommonTelechargementPeer::SIRENETRANGER)) $criteria->add(CommonTelechargementPeer::SIRENETRANGER, $this->sirenetranger);
        if ($this->isColumnModified(CommonTelechargementPeer::ADRESSE2)) $criteria->add(CommonTelechargementPeer::ADRESSE2, $this->adresse2);
        if ($this->isColumnModified(CommonTelechargementPeer::PRENOM)) $criteria->add(CommonTelechargementPeer::PRENOM, $this->prenom);
        if ($this->isColumnModified(CommonTelechargementPeer::NOMS_FICHIERS_DCE)) $criteria->add(CommonTelechargementPeer::NOMS_FICHIERS_DCE, $this->noms_fichiers_dce);
        if ($this->isColumnModified(CommonTelechargementPeer::OBSERVATION)) $criteria->add(CommonTelechargementPeer::OBSERVATION, $this->observation);
        if ($this->isColumnModified(CommonTelechargementPeer::ACRONYME_PAYS)) $criteria->add(CommonTelechargementPeer::ACRONYME_PAYS, $this->acronyme_pays);
        if ($this->isColumnModified(CommonTelechargementPeer::IFU)) $criteria->add(CommonTelechargementPeer::IFU, $this->ifu);

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
        $criteria = new Criteria(CommonTelechargementPeer::DATABASE_NAME);
        $criteria->add(CommonTelechargementPeer::ID, $this->id);
        $criteria->add(CommonTelechargementPeer::ORGANISME, $this->organisme);

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
     * @param object $copyObj An object of CommonTelechargement (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setConsultationRef($this->getConsultationRef());
        $copyObj->setDatetelechargement($this->getDatetelechargement());
        $copyObj->setTiragePlan($this->getTiragePlan());
        $copyObj->setIdInscrit($this->getIdInscrit());
        $copyObj->setIdEntreprise($this->getIdEntreprise());
        $copyObj->setSupport($this->getSupport());
        $copyObj->setNom($this->getNom());
        $copyObj->setAdresse($this->getAdresse());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setEntreprise($this->getEntreprise());
        $copyObj->setCodepostal($this->getCodepostal());
        $copyObj->setVille($this->getVille());
        $copyObj->setPays($this->getPays());
        $copyObj->setTelephone($this->getTelephone());
        $copyObj->setSiret($this->getSiret());
        $copyObj->setFax($this->getFax());
        $copyObj->setLots($this->getLots());
        $copyObj->setSirenetranger($this->getSirenetranger());
        $copyObj->setAdresse2($this->getAdresse2());
        $copyObj->setPrenom($this->getPrenom());
        $copyObj->setNomsFichiersDce($this->getNomsFichiersDce());
        $copyObj->setObservation($this->getObservation());
        $copyObj->setAcronymePays($this->getAcronymePays());
        $copyObj->setIfu($this->getIfu());

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
     * @return CommonTelechargement Clone of current object.
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
     * @return CommonTelechargementPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonTelechargementPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonConsultation object.
     *
     * @param   CommonConsultation $v
     * @return CommonTelechargement The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonConsultation(CommonConsultation $v = null)
    {
        if ($v === null) {
            $this->setOrganisme('');
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
            $v->addCommonTelechargement($this);
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
                $this->aCommonConsultation->addCommonTelechargements($this);
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
        $this->datetelechargement = null;
        $this->tirage_plan = null;
        $this->id_inscrit = null;
        $this->id_entreprise = null;
        $this->support = null;
        $this->nom = null;
        $this->adresse = null;
        $this->email = null;
        $this->entreprise = null;
        $this->codepostal = null;
        $this->ville = null;
        $this->pays = null;
        $this->telephone = null;
        $this->siret = null;
        $this->fax = null;
        $this->lots = null;
        $this->sirenetranger = null;
        $this->adresse2 = null;
        $this->prenom = null;
        $this->noms_fichiers_dce = null;
        $this->observation = null;
        $this->acronyme_pays = null;
        $this->ifu = null;
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
        return (string) $this->exportTo(CommonTelechargementPeer::DEFAULT_STRING_FORMAT);
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
