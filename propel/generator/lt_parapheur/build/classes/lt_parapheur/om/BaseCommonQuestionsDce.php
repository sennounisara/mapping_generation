<?php


/**
 * Base class that represents a row from the 'questions_dce' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonQuestionsDce extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonQuestionsDcePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonQuestionsDcePeer
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
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $consultation_ref;

    /**
     * The value for the date_depot field.
     * Note: this column has a database default value of: NULL
     * @var        string
     */
    protected $date_depot;

    /**
     * The value for the email field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $email;

    /**
     * The value for the nom field.
     * @var        string
     */
    protected $nom;

    /**
     * The value for the entreprise field.
     * @var        string
     */
    protected $entreprise;

    /**
     * The value for the adresse field.
     * @var        string
     */
    protected $adresse;

    /**
     * The value for the cp field.
     * @var        string
     */
    protected $cp;

    /**
     * The value for the ville field.
     * @var        string
     */
    protected $ville;

    /**
     * The value for the tel field.
     * @var        string
     */
    protected $tel;

    /**
     * The value for the fax field.
     * @var        string
     */
    protected $fax;

    /**
     * The value for the question field.
     * @var        string
     */
    protected $question;

    /**
     * The value for the statut field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $statut;

    /**
     * The value for the date_reponse field.
     * Note: this column has a database default value of: NULL
     * @var        string
     */
    protected $date_reponse;

    /**
     * The value for the personne_repondu field.
     * @var        string
     */
    protected $personne_repondu;

    /**
     * The value for the type_depot field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $type_depot;

    /**
     * The value for the pays field.
     * @var        string
     */
    protected $pays;

    /**
     * The value for the observation field.
     * @var        string
     */
    protected $observation;

    /**
     * The value for the siret field.
     * @var        string
     */
    protected $siret;

    /**
     * The value for the identifiant_national field.
     * @var        string
     */
    protected $identifiant_national;

    /**
     * The value for the acronyme_pays field.
     * @var        string
     */
    protected $acronyme_pays;

    /**
     * The value for the adresse2 field.
     * @var        string
     */
    protected $adresse2;

    /**
     * The value for the id_fichier field.
     * @var        int
     */
    protected $id_fichier;

    /**
     * The value for the nom_fichier field.
     * @var        string
     */
    protected $nom_fichier;

    /**
     * The value for the prenom field.
     * @var        string
     */
    protected $prenom;

    /**
     * The value for the siret_etranger field.
     * @var        string
     */
    protected $siret_etranger;

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
     * The value for the ifu field.
     * @var        string
     */
    protected $ifu;

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
        $this->consultation_ref = 0;
        $this->date_depot = NULL;
        $this->email = '';
        $this->statut = 0;
        $this->date_reponse = NULL;
        $this->type_depot = '1';
        $this->id_inscrit = 0;
        $this->id_entreprise = 0;
    }

    /**
     * Initializes internal state of BaseCommonQuestionsDce object.
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
     * Get the [optionally formatted] temporal [date_depot] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateDepot($format = 'Y-m-d H:i:s')
    {
        if ($this->date_depot === null) {
            return null;
        }

        if ($this->date_depot === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_depot);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_depot, true), $x);
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
     * Get the [email] column value.
     * 
     * @return string
     */
    public function getEmail()
    {

        return $this->email;
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
     * Get the [entreprise] column value.
     * 
     * @return string
     */
    public function getEntreprise()
    {

        return $this->entreprise;
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
     * Get the [cp] column value.
     * 
     * @return string
     */
    public function getCp()
    {

        return $this->cp;
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
     * Get the [tel] column value.
     * 
     * @return string
     */
    public function getTel()
    {

        return $this->tel;
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
     * Get the [question] column value.
     * 
     * @return string
     */
    public function getQuestion()
    {

        return $this->question;
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
     * Get the [optionally formatted] temporal [date_reponse] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateReponse($format = null)
    {
        if ($this->date_reponse === null) {
            return null;
        }

        if ($this->date_reponse === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_reponse);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_reponse, true), $x);
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
     * Get the [personne_repondu] column value.
     * 
     * @return string
     */
    public function getPersonneRepondu()
    {

        return $this->personne_repondu;
    }

    /**
     * Get the [type_depot] column value.
     * 
     * @return string
     */
    public function getTypeDepot()
    {

        return $this->type_depot;
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
     * Get the [observation] column value.
     * 
     * @return string
     */
    public function getObservation()
    {

        return $this->observation;
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
     * Get the [identifiant_national] column value.
     * 
     * @return string
     */
    public function getIdentifiantNational()
    {

        return $this->identifiant_national;
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
     * Get the [adresse2] column value.
     * 
     * @return string
     */
    public function getAdresse2()
    {

        return $this->adresse2;
    }

    /**
     * Get the [id_fichier] column value.
     * 
     * @return int
     */
    public function getIdFichier()
    {

        return $this->id_fichier;
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
     * Get the [prenom] column value.
     * 
     * @return string
     */
    public function getPrenom()
    {

        return $this->prenom;
    }

    /**
     * Get the [siret_etranger] column value.
     * 
     * @return string
     */
    public function getSiretEtranger()
    {

        return $this->siret_etranger;
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
     * @return CommonQuestionsDce The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonQuestionsDcePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonQuestionsDce The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonQuestionsDcePeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [consultation_ref] column.
     * 
     * @param int $v new value
     * @return CommonQuestionsDce The current object (for fluent API support)
     */
    public function setConsultationRef($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->consultation_ref !== $v) {
            $this->consultation_ref = $v;
            $this->modifiedColumns[] = CommonQuestionsDcePeer::CONSULTATION_REF;
        }


        return $this;
    } // setConsultationRef()

    /**
     * Sets the value of [date_depot] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonQuestionsDce The current object (for fluent API support)
     */
    public function setDateDepot($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_depot !== null || $dt !== null) {
            $currentDateAsString = ($this->date_depot !== null && $tmpDt = new DateTime($this->date_depot)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ( ($currentDateAsString !== $newDateAsString) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
                 ) {
                $this->date_depot = $newDateAsString;
                $this->modifiedColumns[] = CommonQuestionsDcePeer::DATE_DEPOT;
            }
        } // if either are not null


        return $this;
    } // setDateDepot()

    /**
     * Set the value of [email] column.
     * 
     * @param string $v new value
     * @return CommonQuestionsDce The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[] = CommonQuestionsDcePeer::EMAIL;
        }


        return $this;
    } // setEmail()

    /**
     * Set the value of [nom] column.
     * 
     * @param string $v new value
     * @return CommonQuestionsDce The current object (for fluent API support)
     */
    public function setNom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom !== $v) {
            $this->nom = $v;
            $this->modifiedColumns[] = CommonQuestionsDcePeer::NOM;
        }


        return $this;
    } // setNom()

    /**
     * Set the value of [entreprise] column.
     * 
     * @param string $v new value
     * @return CommonQuestionsDce The current object (for fluent API support)
     */
    public function setEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->entreprise !== $v) {
            $this->entreprise = $v;
            $this->modifiedColumns[] = CommonQuestionsDcePeer::ENTREPRISE;
        }


        return $this;
    } // setEntreprise()

    /**
     * Set the value of [adresse] column.
     * 
     * @param string $v new value
     * @return CommonQuestionsDce The current object (for fluent API support)
     */
    public function setAdresse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse !== $v) {
            $this->adresse = $v;
            $this->modifiedColumns[] = CommonQuestionsDcePeer::ADRESSE;
        }


        return $this;
    } // setAdresse()

    /**
     * Set the value of [cp] column.
     * 
     * @param string $v new value
     * @return CommonQuestionsDce The current object (for fluent API support)
     */
    public function setCp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cp !== $v) {
            $this->cp = $v;
            $this->modifiedColumns[] = CommonQuestionsDcePeer::CP;
        }


        return $this;
    } // setCp()

    /**
     * Set the value of [ville] column.
     * 
     * @param string $v new value
     * @return CommonQuestionsDce The current object (for fluent API support)
     */
    public function setVille($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ville !== $v) {
            $this->ville = $v;
            $this->modifiedColumns[] = CommonQuestionsDcePeer::VILLE;
        }


        return $this;
    } // setVille()

    /**
     * Set the value of [tel] column.
     * 
     * @param string $v new value
     * @return CommonQuestionsDce The current object (for fluent API support)
     */
    public function setTel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->tel !== $v) {
            $this->tel = $v;
            $this->modifiedColumns[] = CommonQuestionsDcePeer::TEL;
        }


        return $this;
    } // setTel()

    /**
     * Set the value of [fax] column.
     * 
     * @param string $v new value
     * @return CommonQuestionsDce The current object (for fluent API support)
     */
    public function setFax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fax !== $v) {
            $this->fax = $v;
            $this->modifiedColumns[] = CommonQuestionsDcePeer::FAX;
        }


        return $this;
    } // setFax()

    /**
     * Set the value of [question] column.
     * 
     * @param string $v new value
     * @return CommonQuestionsDce The current object (for fluent API support)
     */
    public function setQuestion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->question !== $v) {
            $this->question = $v;
            $this->modifiedColumns[] = CommonQuestionsDcePeer::QUESTION;
        }


        return $this;
    } // setQuestion()

    /**
     * Set the value of [statut] column.
     * 
     * @param int $v new value
     * @return CommonQuestionsDce The current object (for fluent API support)
     */
    public function setStatut($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->statut !== $v) {
            $this->statut = $v;
            $this->modifiedColumns[] = CommonQuestionsDcePeer::STATUT;
        }


        return $this;
    } // setStatut()

    /**
     * Sets the value of [date_reponse] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonQuestionsDce The current object (for fluent API support)
     */
    public function setDateReponse($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_reponse !== null || $dt !== null) {
            $currentDateAsString = ($this->date_reponse !== null && $tmpDt = new DateTime($this->date_reponse)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ( ($currentDateAsString !== $newDateAsString) // normalized values don't match
                || ($dt->format('Y-m-d') === NULL) // or the entered value matches the default
                 ) {
                $this->date_reponse = $newDateAsString;
                $this->modifiedColumns[] = CommonQuestionsDcePeer::DATE_REPONSE;
            }
        } // if either are not null


        return $this;
    } // setDateReponse()

    /**
     * Set the value of [personne_repondu] column.
     * 
     * @param string $v new value
     * @return CommonQuestionsDce The current object (for fluent API support)
     */
    public function setPersonneRepondu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->personne_repondu !== $v) {
            $this->personne_repondu = $v;
            $this->modifiedColumns[] = CommonQuestionsDcePeer::PERSONNE_REPONDU;
        }


        return $this;
    } // setPersonneRepondu()

    /**
     * Set the value of [type_depot] column.
     * 
     * @param string $v new value
     * @return CommonQuestionsDce The current object (for fluent API support)
     */
    public function setTypeDepot($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_depot !== $v) {
            $this->type_depot = $v;
            $this->modifiedColumns[] = CommonQuestionsDcePeer::TYPE_DEPOT;
        }


        return $this;
    } // setTypeDepot()

    /**
     * Set the value of [pays] column.
     * 
     * @param string $v new value
     * @return CommonQuestionsDce The current object (for fluent API support)
     */
    public function setPays($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pays !== $v) {
            $this->pays = $v;
            $this->modifiedColumns[] = CommonQuestionsDcePeer::PAYS;
        }


        return $this;
    } // setPays()

    /**
     * Set the value of [observation] column.
     * 
     * @param string $v new value
     * @return CommonQuestionsDce The current object (for fluent API support)
     */
    public function setObservation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->observation !== $v) {
            $this->observation = $v;
            $this->modifiedColumns[] = CommonQuestionsDcePeer::OBSERVATION;
        }


        return $this;
    } // setObservation()

    /**
     * Set the value of [siret] column.
     * 
     * @param string $v new value
     * @return CommonQuestionsDce The current object (for fluent API support)
     */
    public function setSiret($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->siret !== $v) {
            $this->siret = $v;
            $this->modifiedColumns[] = CommonQuestionsDcePeer::SIRET;
        }


        return $this;
    } // setSiret()

    /**
     * Set the value of [identifiant_national] column.
     * 
     * @param string $v new value
     * @return CommonQuestionsDce The current object (for fluent API support)
     */
    public function setIdentifiantNational($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->identifiant_national !== $v) {
            $this->identifiant_national = $v;
            $this->modifiedColumns[] = CommonQuestionsDcePeer::IDENTIFIANT_NATIONAL;
        }


        return $this;
    } // setIdentifiantNational()

    /**
     * Set the value of [acronyme_pays] column.
     * 
     * @param string $v new value
     * @return CommonQuestionsDce The current object (for fluent API support)
     */
    public function setAcronymePays($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->acronyme_pays !== $v) {
            $this->acronyme_pays = $v;
            $this->modifiedColumns[] = CommonQuestionsDcePeer::ACRONYME_PAYS;
        }


        return $this;
    } // setAcronymePays()

    /**
     * Set the value of [adresse2] column.
     * 
     * @param string $v new value
     * @return CommonQuestionsDce The current object (for fluent API support)
     */
    public function setAdresse2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse2 !== $v) {
            $this->adresse2 = $v;
            $this->modifiedColumns[] = CommonQuestionsDcePeer::ADRESSE2;
        }


        return $this;
    } // setAdresse2()

    /**
     * Set the value of [id_fichier] column.
     * 
     * @param int $v new value
     * @return CommonQuestionsDce The current object (for fluent API support)
     */
    public function setIdFichier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_fichier !== $v) {
            $this->id_fichier = $v;
            $this->modifiedColumns[] = CommonQuestionsDcePeer::ID_FICHIER;
        }


        return $this;
    } // setIdFichier()

    /**
     * Set the value of [nom_fichier] column.
     * 
     * @param string $v new value
     * @return CommonQuestionsDce The current object (for fluent API support)
     */
    public function setNomFichier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_fichier !== $v) {
            $this->nom_fichier = $v;
            $this->modifiedColumns[] = CommonQuestionsDcePeer::NOM_FICHIER;
        }


        return $this;
    } // setNomFichier()

    /**
     * Set the value of [prenom] column.
     * 
     * @param string $v new value
     * @return CommonQuestionsDce The current object (for fluent API support)
     */
    public function setPrenom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prenom !== $v) {
            $this->prenom = $v;
            $this->modifiedColumns[] = CommonQuestionsDcePeer::PRENOM;
        }


        return $this;
    } // setPrenom()

    /**
     * Set the value of [siret_etranger] column.
     * 
     * @param string $v new value
     * @return CommonQuestionsDce The current object (for fluent API support)
     */
    public function setSiretEtranger($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->siret_etranger !== $v) {
            $this->siret_etranger = $v;
            $this->modifiedColumns[] = CommonQuestionsDcePeer::SIRET_ETRANGER;
        }


        return $this;
    } // setSiretEtranger()

    /**
     * Set the value of [id_inscrit] column.
     * 
     * @param int $v new value
     * @return CommonQuestionsDce The current object (for fluent API support)
     */
    public function setIdInscrit($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_inscrit !== $v) {
            $this->id_inscrit = $v;
            $this->modifiedColumns[] = CommonQuestionsDcePeer::ID_INSCRIT;
        }


        return $this;
    } // setIdInscrit()

    /**
     * Set the value of [id_entreprise] column.
     * 
     * @param int $v new value
     * @return CommonQuestionsDce The current object (for fluent API support)
     */
    public function setIdEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_entreprise !== $v) {
            $this->id_entreprise = $v;
            $this->modifiedColumns[] = CommonQuestionsDcePeer::ID_ENTREPRISE;
        }


        return $this;
    } // setIdEntreprise()

    /**
     * Set the value of [ifu] column.
     * 
     * @param string $v new value
     * @return CommonQuestionsDce The current object (for fluent API support)
     */
    public function setIfu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ifu !== $v) {
            $this->ifu = $v;
            $this->modifiedColumns[] = CommonQuestionsDcePeer::IFU;
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

            if ($this->consultation_ref !== 0) {
                return false;
            }

            if ($this->date_depot !== NULL) {
                return false;
            }

            if ($this->email !== '') {
                return false;
            }

            if ($this->statut !== 0) {
                return false;
            }

            if ($this->date_reponse !== NULL) {
                return false;
            }

            if ($this->type_depot !== '1') {
                return false;
            }

            if ($this->id_inscrit !== 0) {
                return false;
            }

            if ($this->id_entreprise !== 0) {
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
            $this->date_depot = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->email = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->nom = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->entreprise = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->adresse = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->cp = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->ville = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->tel = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->fax = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->question = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->statut = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->date_reponse = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->personne_repondu = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->type_depot = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->pays = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->observation = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->siret = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->identifiant_national = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->acronyme_pays = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->adresse2 = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->id_fichier = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
            $this->nom_fichier = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->prenom = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->siret_etranger = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->id_inscrit = ($row[$startcol + 27] !== null) ? (int) $row[$startcol + 27] : null;
            $this->id_entreprise = ($row[$startcol + 28] !== null) ? (int) $row[$startcol + 28] : null;
            $this->ifu = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 30; // 30 = CommonQuestionsDcePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonQuestionsDce object", $e);
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
            $con = Propel::getConnection(CommonQuestionsDcePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonQuestionsDcePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonQuestionsDcePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonQuestionsDceQuery::create()
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
            $con = Propel::getConnection(CommonQuestionsDcePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonQuestionsDcePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonQuestionsDcePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonQuestionsDcePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonQuestionsDcePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonQuestionsDcePeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonQuestionsDcePeer::CONSULTATION_REF)) {
            $modifiedColumns[':p' . $index++]  = '`consultation_ref`';
        }
        if ($this->isColumnModified(CommonQuestionsDcePeer::DATE_DEPOT)) {
            $modifiedColumns[':p' . $index++]  = '`date_depot`';
        }
        if ($this->isColumnModified(CommonQuestionsDcePeer::EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`email`';
        }
        if ($this->isColumnModified(CommonQuestionsDcePeer::NOM)) {
            $modifiedColumns[':p' . $index++]  = '`nom`';
        }
        if ($this->isColumnModified(CommonQuestionsDcePeer::ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`entreprise`';
        }
        if ($this->isColumnModified(CommonQuestionsDcePeer::ADRESSE)) {
            $modifiedColumns[':p' . $index++]  = '`adresse`';
        }
        if ($this->isColumnModified(CommonQuestionsDcePeer::CP)) {
            $modifiedColumns[':p' . $index++]  = '`cp`';
        }
        if ($this->isColumnModified(CommonQuestionsDcePeer::VILLE)) {
            $modifiedColumns[':p' . $index++]  = '`ville`';
        }
        if ($this->isColumnModified(CommonQuestionsDcePeer::TEL)) {
            $modifiedColumns[':p' . $index++]  = '`tel`';
        }
        if ($this->isColumnModified(CommonQuestionsDcePeer::FAX)) {
            $modifiedColumns[':p' . $index++]  = '`fax`';
        }
        if ($this->isColumnModified(CommonQuestionsDcePeer::QUESTION)) {
            $modifiedColumns[':p' . $index++]  = '`question`';
        }
        if ($this->isColumnModified(CommonQuestionsDcePeer::STATUT)) {
            $modifiedColumns[':p' . $index++]  = '`statut`';
        }
        if ($this->isColumnModified(CommonQuestionsDcePeer::DATE_REPONSE)) {
            $modifiedColumns[':p' . $index++]  = '`date_reponse`';
        }
        if ($this->isColumnModified(CommonQuestionsDcePeer::PERSONNE_REPONDU)) {
            $modifiedColumns[':p' . $index++]  = '`personne_repondu`';
        }
        if ($this->isColumnModified(CommonQuestionsDcePeer::TYPE_DEPOT)) {
            $modifiedColumns[':p' . $index++]  = '`type_depot`';
        }
        if ($this->isColumnModified(CommonQuestionsDcePeer::PAYS)) {
            $modifiedColumns[':p' . $index++]  = '`pays`';
        }
        if ($this->isColumnModified(CommonQuestionsDcePeer::OBSERVATION)) {
            $modifiedColumns[':p' . $index++]  = '`Observation`';
        }
        if ($this->isColumnModified(CommonQuestionsDcePeer::SIRET)) {
            $modifiedColumns[':p' . $index++]  = '`siret`';
        }
        if ($this->isColumnModified(CommonQuestionsDcePeer::IDENTIFIANT_NATIONAL)) {
            $modifiedColumns[':p' . $index++]  = '`identifiant_national`';
        }
        if ($this->isColumnModified(CommonQuestionsDcePeer::ACRONYME_PAYS)) {
            $modifiedColumns[':p' . $index++]  = '`acronyme_pays`';
        }
        if ($this->isColumnModified(CommonQuestionsDcePeer::ADRESSE2)) {
            $modifiedColumns[':p' . $index++]  = '`adresse2`';
        }
        if ($this->isColumnModified(CommonQuestionsDcePeer::ID_FICHIER)) {
            $modifiedColumns[':p' . $index++]  = '`id_fichier`';
        }
        if ($this->isColumnModified(CommonQuestionsDcePeer::NOM_FICHIER)) {
            $modifiedColumns[':p' . $index++]  = '`nom_fichier`';
        }
        if ($this->isColumnModified(CommonQuestionsDcePeer::PRENOM)) {
            $modifiedColumns[':p' . $index++]  = '`prenom`';
        }
        if ($this->isColumnModified(CommonQuestionsDcePeer::SIRET_ETRANGER)) {
            $modifiedColumns[':p' . $index++]  = '`siret_etranger`';
        }
        if ($this->isColumnModified(CommonQuestionsDcePeer::ID_INSCRIT)) {
            $modifiedColumns[':p' . $index++]  = '`id_inscrit`';
        }
        if ($this->isColumnModified(CommonQuestionsDcePeer::ID_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`id_entreprise`';
        }
        if ($this->isColumnModified(CommonQuestionsDcePeer::IFU)) {
            $modifiedColumns[':p' . $index++]  = '`ifu`';
        }

        $sql = sprintf(
            'INSERT INTO `questions_dce` (%s) VALUES (%s)',
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
                    case '`date_depot`':						
                        $stmt->bindValue($identifier, $this->date_depot, PDO::PARAM_STR);
                        break;
                    case '`email`':						
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                    case '`nom`':						
                        $stmt->bindValue($identifier, $this->nom, PDO::PARAM_STR);
                        break;
                    case '`entreprise`':						
                        $stmt->bindValue($identifier, $this->entreprise, PDO::PARAM_STR);
                        break;
                    case '`adresse`':						
                        $stmt->bindValue($identifier, $this->adresse, PDO::PARAM_STR);
                        break;
                    case '`cp`':						
                        $stmt->bindValue($identifier, $this->cp, PDO::PARAM_STR);
                        break;
                    case '`ville`':						
                        $stmt->bindValue($identifier, $this->ville, PDO::PARAM_STR);
                        break;
                    case '`tel`':						
                        $stmt->bindValue($identifier, $this->tel, PDO::PARAM_STR);
                        break;
                    case '`fax`':						
                        $stmt->bindValue($identifier, $this->fax, PDO::PARAM_STR);
                        break;
                    case '`question`':						
                        $stmt->bindValue($identifier, $this->question, PDO::PARAM_STR);
                        break;
                    case '`statut`':						
                        $stmt->bindValue($identifier, $this->statut, PDO::PARAM_INT);
                        break;
                    case '`date_reponse`':						
                        $stmt->bindValue($identifier, $this->date_reponse, PDO::PARAM_STR);
                        break;
                    case '`personne_repondu`':						
                        $stmt->bindValue($identifier, $this->personne_repondu, PDO::PARAM_STR);
                        break;
                    case '`type_depot`':						
                        $stmt->bindValue($identifier, $this->type_depot, PDO::PARAM_STR);
                        break;
                    case '`pays`':						
                        $stmt->bindValue($identifier, $this->pays, PDO::PARAM_STR);
                        break;
                    case '`Observation`':						
                        $stmt->bindValue($identifier, $this->observation, PDO::PARAM_STR);
                        break;
                    case '`siret`':						
                        $stmt->bindValue($identifier, $this->siret, PDO::PARAM_STR);
                        break;
                    case '`identifiant_national`':						
                        $stmt->bindValue($identifier, $this->identifiant_national, PDO::PARAM_STR);
                        break;
                    case '`acronyme_pays`':						
                        $stmt->bindValue($identifier, $this->acronyme_pays, PDO::PARAM_STR);
                        break;
                    case '`adresse2`':						
                        $stmt->bindValue($identifier, $this->adresse2, PDO::PARAM_STR);
                        break;
                    case '`id_fichier`':						
                        $stmt->bindValue($identifier, $this->id_fichier, PDO::PARAM_INT);
                        break;
                    case '`nom_fichier`':						
                        $stmt->bindValue($identifier, $this->nom_fichier, PDO::PARAM_STR);
                        break;
                    case '`prenom`':						
                        $stmt->bindValue($identifier, $this->prenom, PDO::PARAM_STR);
                        break;
                    case '`siret_etranger`':						
                        $stmt->bindValue($identifier, $this->siret_etranger, PDO::PARAM_STR);
                        break;
                    case '`id_inscrit`':						
                        $stmt->bindValue($identifier, $this->id_inscrit, PDO::PARAM_INT);
                        break;
                    case '`id_entreprise`':						
                        $stmt->bindValue($identifier, $this->id_entreprise, PDO::PARAM_INT);
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


            if (($retval = CommonQuestionsDcePeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonQuestionsDcePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getDateDepot();
                break;
            case 4:
                return $this->getEmail();
                break;
            case 5:
                return $this->getNom();
                break;
            case 6:
                return $this->getEntreprise();
                break;
            case 7:
                return $this->getAdresse();
                break;
            case 8:
                return $this->getCp();
                break;
            case 9:
                return $this->getVille();
                break;
            case 10:
                return $this->getTel();
                break;
            case 11:
                return $this->getFax();
                break;
            case 12:
                return $this->getQuestion();
                break;
            case 13:
                return $this->getStatut();
                break;
            case 14:
                return $this->getDateReponse();
                break;
            case 15:
                return $this->getPersonneRepondu();
                break;
            case 16:
                return $this->getTypeDepot();
                break;
            case 17:
                return $this->getPays();
                break;
            case 18:
                return $this->getObservation();
                break;
            case 19:
                return $this->getSiret();
                break;
            case 20:
                return $this->getIdentifiantNational();
                break;
            case 21:
                return $this->getAcronymePays();
                break;
            case 22:
                return $this->getAdresse2();
                break;
            case 23:
                return $this->getIdFichier();
                break;
            case 24:
                return $this->getNomFichier();
                break;
            case 25:
                return $this->getPrenom();
                break;
            case 26:
                return $this->getSiretEtranger();
                break;
            case 27:
                return $this->getIdInscrit();
                break;
            case 28:
                return $this->getIdEntreprise();
                break;
            case 29:
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
     *
     * @return array an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
    {
        if (isset($alreadyDumpedObjects['CommonQuestionsDce'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonQuestionsDce'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonQuestionsDcePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getConsultationRef(),
            $keys[3] => $this->getDateDepot(),
            $keys[4] => $this->getEmail(),
            $keys[5] => $this->getNom(),
            $keys[6] => $this->getEntreprise(),
            $keys[7] => $this->getAdresse(),
            $keys[8] => $this->getCp(),
            $keys[9] => $this->getVille(),
            $keys[10] => $this->getTel(),
            $keys[11] => $this->getFax(),
            $keys[12] => $this->getQuestion(),
            $keys[13] => $this->getStatut(),
            $keys[14] => $this->getDateReponse(),
            $keys[15] => $this->getPersonneRepondu(),
            $keys[16] => $this->getTypeDepot(),
            $keys[17] => $this->getPays(),
            $keys[18] => $this->getObservation(),
            $keys[19] => $this->getSiret(),
            $keys[20] => $this->getIdentifiantNational(),
            $keys[21] => $this->getAcronymePays(),
            $keys[22] => $this->getAdresse2(),
            $keys[23] => $this->getIdFichier(),
            $keys[24] => $this->getNomFichier(),
            $keys[25] => $this->getPrenom(),
            $keys[26] => $this->getSiretEtranger(),
            $keys[27] => $this->getIdInscrit(),
            $keys[28] => $this->getIdEntreprise(),
            $keys[29] => $this->getIfu(),
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
        $pos = CommonQuestionsDcePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setDateDepot($value);
                break;
            case 4:
                $this->setEmail($value);
                break;
            case 5:
                $this->setNom($value);
                break;
            case 6:
                $this->setEntreprise($value);
                break;
            case 7:
                $this->setAdresse($value);
                break;
            case 8:
                $this->setCp($value);
                break;
            case 9:
                $this->setVille($value);
                break;
            case 10:
                $this->setTel($value);
                break;
            case 11:
                $this->setFax($value);
                break;
            case 12:
                $this->setQuestion($value);
                break;
            case 13:
                $this->setStatut($value);
                break;
            case 14:
                $this->setDateReponse($value);
                break;
            case 15:
                $this->setPersonneRepondu($value);
                break;
            case 16:
                $this->setTypeDepot($value);
                break;
            case 17:
                $this->setPays($value);
                break;
            case 18:
                $this->setObservation($value);
                break;
            case 19:
                $this->setSiret($value);
                break;
            case 20:
                $this->setIdentifiantNational($value);
                break;
            case 21:
                $this->setAcronymePays($value);
                break;
            case 22:
                $this->setAdresse2($value);
                break;
            case 23:
                $this->setIdFichier($value);
                break;
            case 24:
                $this->setNomFichier($value);
                break;
            case 25:
                $this->setPrenom($value);
                break;
            case 26:
                $this->setSiretEtranger($value);
                break;
            case 27:
                $this->setIdInscrit($value);
                break;
            case 28:
                $this->setIdEntreprise($value);
                break;
            case 29:
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
        $keys = CommonQuestionsDcePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setConsultationRef($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDateDepot($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setEmail($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setNom($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setEntreprise($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setAdresse($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setCp($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setVille($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setTel($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setFax($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setQuestion($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setStatut($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setDateReponse($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setPersonneRepondu($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setTypeDepot($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setPays($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setObservation($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setSiret($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setIdentifiantNational($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setAcronymePays($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setAdresse2($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setIdFichier($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setNomFichier($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setPrenom($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setSiretEtranger($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setIdInscrit($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setIdEntreprise($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setIfu($arr[$keys[29]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonQuestionsDcePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonQuestionsDcePeer::ID)) $criteria->add(CommonQuestionsDcePeer::ID, $this->id);
        if ($this->isColumnModified(CommonQuestionsDcePeer::ORGANISME)) $criteria->add(CommonQuestionsDcePeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonQuestionsDcePeer::CONSULTATION_REF)) $criteria->add(CommonQuestionsDcePeer::CONSULTATION_REF, $this->consultation_ref);
        if ($this->isColumnModified(CommonQuestionsDcePeer::DATE_DEPOT)) $criteria->add(CommonQuestionsDcePeer::DATE_DEPOT, $this->date_depot);
        if ($this->isColumnModified(CommonQuestionsDcePeer::EMAIL)) $criteria->add(CommonQuestionsDcePeer::EMAIL, $this->email);
        if ($this->isColumnModified(CommonQuestionsDcePeer::NOM)) $criteria->add(CommonQuestionsDcePeer::NOM, $this->nom);
        if ($this->isColumnModified(CommonQuestionsDcePeer::ENTREPRISE)) $criteria->add(CommonQuestionsDcePeer::ENTREPRISE, $this->entreprise);
        if ($this->isColumnModified(CommonQuestionsDcePeer::ADRESSE)) $criteria->add(CommonQuestionsDcePeer::ADRESSE, $this->adresse);
        if ($this->isColumnModified(CommonQuestionsDcePeer::CP)) $criteria->add(CommonQuestionsDcePeer::CP, $this->cp);
        if ($this->isColumnModified(CommonQuestionsDcePeer::VILLE)) $criteria->add(CommonQuestionsDcePeer::VILLE, $this->ville);
        if ($this->isColumnModified(CommonQuestionsDcePeer::TEL)) $criteria->add(CommonQuestionsDcePeer::TEL, $this->tel);
        if ($this->isColumnModified(CommonQuestionsDcePeer::FAX)) $criteria->add(CommonQuestionsDcePeer::FAX, $this->fax);
        if ($this->isColumnModified(CommonQuestionsDcePeer::QUESTION)) $criteria->add(CommonQuestionsDcePeer::QUESTION, $this->question);
        if ($this->isColumnModified(CommonQuestionsDcePeer::STATUT)) $criteria->add(CommonQuestionsDcePeer::STATUT, $this->statut);
        if ($this->isColumnModified(CommonQuestionsDcePeer::DATE_REPONSE)) $criteria->add(CommonQuestionsDcePeer::DATE_REPONSE, $this->date_reponse);
        if ($this->isColumnModified(CommonQuestionsDcePeer::PERSONNE_REPONDU)) $criteria->add(CommonQuestionsDcePeer::PERSONNE_REPONDU, $this->personne_repondu);
        if ($this->isColumnModified(CommonQuestionsDcePeer::TYPE_DEPOT)) $criteria->add(CommonQuestionsDcePeer::TYPE_DEPOT, $this->type_depot);
        if ($this->isColumnModified(CommonQuestionsDcePeer::PAYS)) $criteria->add(CommonQuestionsDcePeer::PAYS, $this->pays);
        if ($this->isColumnModified(CommonQuestionsDcePeer::OBSERVATION)) $criteria->add(CommonQuestionsDcePeer::OBSERVATION, $this->observation);
        if ($this->isColumnModified(CommonQuestionsDcePeer::SIRET)) $criteria->add(CommonQuestionsDcePeer::SIRET, $this->siret);
        if ($this->isColumnModified(CommonQuestionsDcePeer::IDENTIFIANT_NATIONAL)) $criteria->add(CommonQuestionsDcePeer::IDENTIFIANT_NATIONAL, $this->identifiant_national);
        if ($this->isColumnModified(CommonQuestionsDcePeer::ACRONYME_PAYS)) $criteria->add(CommonQuestionsDcePeer::ACRONYME_PAYS, $this->acronyme_pays);
        if ($this->isColumnModified(CommonQuestionsDcePeer::ADRESSE2)) $criteria->add(CommonQuestionsDcePeer::ADRESSE2, $this->adresse2);
        if ($this->isColumnModified(CommonQuestionsDcePeer::ID_FICHIER)) $criteria->add(CommonQuestionsDcePeer::ID_FICHIER, $this->id_fichier);
        if ($this->isColumnModified(CommonQuestionsDcePeer::NOM_FICHIER)) $criteria->add(CommonQuestionsDcePeer::NOM_FICHIER, $this->nom_fichier);
        if ($this->isColumnModified(CommonQuestionsDcePeer::PRENOM)) $criteria->add(CommonQuestionsDcePeer::PRENOM, $this->prenom);
        if ($this->isColumnModified(CommonQuestionsDcePeer::SIRET_ETRANGER)) $criteria->add(CommonQuestionsDcePeer::SIRET_ETRANGER, $this->siret_etranger);
        if ($this->isColumnModified(CommonQuestionsDcePeer::ID_INSCRIT)) $criteria->add(CommonQuestionsDcePeer::ID_INSCRIT, $this->id_inscrit);
        if ($this->isColumnModified(CommonQuestionsDcePeer::ID_ENTREPRISE)) $criteria->add(CommonQuestionsDcePeer::ID_ENTREPRISE, $this->id_entreprise);
        if ($this->isColumnModified(CommonQuestionsDcePeer::IFU)) $criteria->add(CommonQuestionsDcePeer::IFU, $this->ifu);

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
        $criteria = new Criteria(CommonQuestionsDcePeer::DATABASE_NAME);
        $criteria->add(CommonQuestionsDcePeer::ID, $this->id);
        $criteria->add(CommonQuestionsDcePeer::ORGANISME, $this->organisme);

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
     * @param object $copyObj An object of CommonQuestionsDce (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setConsultationRef($this->getConsultationRef());
        $copyObj->setDateDepot($this->getDateDepot());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setNom($this->getNom());
        $copyObj->setEntreprise($this->getEntreprise());
        $copyObj->setAdresse($this->getAdresse());
        $copyObj->setCp($this->getCp());
        $copyObj->setVille($this->getVille());
        $copyObj->setTel($this->getTel());
        $copyObj->setFax($this->getFax());
        $copyObj->setQuestion($this->getQuestion());
        $copyObj->setStatut($this->getStatut());
        $copyObj->setDateReponse($this->getDateReponse());
        $copyObj->setPersonneRepondu($this->getPersonneRepondu());
        $copyObj->setTypeDepot($this->getTypeDepot());
        $copyObj->setPays($this->getPays());
        $copyObj->setObservation($this->getObservation());
        $copyObj->setSiret($this->getSiret());
        $copyObj->setIdentifiantNational($this->getIdentifiantNational());
        $copyObj->setAcronymePays($this->getAcronymePays());
        $copyObj->setAdresse2($this->getAdresse2());
        $copyObj->setIdFichier($this->getIdFichier());
        $copyObj->setNomFichier($this->getNomFichier());
        $copyObj->setPrenom($this->getPrenom());
        $copyObj->setSiretEtranger($this->getSiretEtranger());
        $copyObj->setIdInscrit($this->getIdInscrit());
        $copyObj->setIdEntreprise($this->getIdEntreprise());
        $copyObj->setIfu($this->getIfu());
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
     * @return CommonQuestionsDce Clone of current object.
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
     * @return CommonQuestionsDcePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonQuestionsDcePeer();
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
        $this->consultation_ref = null;
        $this->date_depot = null;
        $this->email = null;
        $this->nom = null;
        $this->entreprise = null;
        $this->adresse = null;
        $this->cp = null;
        $this->ville = null;
        $this->tel = null;
        $this->fax = null;
        $this->question = null;
        $this->statut = null;
        $this->date_reponse = null;
        $this->personne_repondu = null;
        $this->type_depot = null;
        $this->pays = null;
        $this->observation = null;
        $this->siret = null;
        $this->identifiant_national = null;
        $this->acronyme_pays = null;
        $this->adresse2 = null;
        $this->id_fichier = null;
        $this->nom_fichier = null;
        $this->prenom = null;
        $this->siret_etranger = null;
        $this->id_inscrit = null;
        $this->id_entreprise = null;
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
        return (string) $this->exportTo(CommonQuestionsDcePeer::DEFAULT_STRING_FORMAT);
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
