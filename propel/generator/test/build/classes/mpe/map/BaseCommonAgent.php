<?php


/**
 * Base class that represents a row from the 'Agent' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonAgent extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonAgentPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonAgentPeer
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
     * The value for the login field.
     * @var        string
     */
    protected $login;

    /**
     * The value for the email field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $email;

    /**
     * The value for the mdp field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $mdp;

    /**
     * The value for the certificat field.
     * @var        string
     */
    protected $certificat;

    /**
     * The value for the nom field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $nom;

    /**
     * The value for the prenom field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $prenom;

    /**
     * The value for the tentatives_mdp field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $tentatives_mdp;

    /**
     * The value for the organisme field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the service_id field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $service_id;

    /**
     * The value for the recevoir_mail field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $recevoir_mail;

    /**
     * The value for the elu field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $elu;

    /**
     * The value for the nom_fonction field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $nom_fonction;

    /**
     * The value for the num_tel field.
     * @var        string
     */
    protected $num_tel;

    /**
     * The value for the num_fax field.
     * @var        string
     */
    protected $num_fax;

    /**
     * The value for the type_comm field.
     * Note: this column has a database default value of: '2'
     * @var        string
     */
    protected $type_comm;

    /**
     * The value for the adr_postale field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adr_postale;

    /**
     * The value for the civilite field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $civilite;

    /**
     * The value for the alerte_reponse_electronique field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $alerte_reponse_electronique;

    /**
     * The value for the alerte_reception_mainlevee field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $alerte_reception_mainlevee;

    /**
     * The value for the alerte_cloture_consultation field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $alerte_cloture_consultation;

    /**
     * The value for the alerte_reception_message field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $alerte_reception_message;

    /**
     * The value for the alerte_publication_boamp field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $alerte_publication_boamp;

    /**
     * The value for the alerte_echec_publication_boamp field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $alerte_echec_publication_boamp;

    /**
     * The value for the alerte_creation_modification_agent field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $alerte_creation_modification_agent;

    /**
     * The value for the date_creation field.
     * @var        string
     */
    protected $date_creation;

    /**
     * The value for the date_modification field.
     * @var        string
     */
    protected $date_modification;

    /**
     * The value for the id_initial field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_initial;

    /**
     * The value for the id_profil_socle_externe field.
     * @var        int
     */
    protected $id_profil_socle_externe;

    /**
     * The value for the lieu_execution field.
     * @var        string
     */
    protected $lieu_execution;

    /**
     * The value for the alerte_question_entreprise field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $alerte_question_entreprise;

    /**
     * The value for the actif field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $actif;

    /**
     * The value for the codes_nuts field.
     * @var        string
     */
    protected $codes_nuts;

    /**
     * The value for the num_certificat field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $num_certificat;

    /**
     * The value for the alerte_validation_consultation field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $alerte_validation_consultation;

    /**
     * The value for the alerte_chorus field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $alerte_chorus;

    /**
     * The value for the password field.
     * @var        string
     */
    protected $password;

    /**
     * The value for the code_theme field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $code_theme;

    /**
     * The value for the tentative_recup_mdp field.
     * @var        int
     */
    protected $tentative_recup_mdp;

    /**
     * The value for the date_tentative_recup_mdp field.
     * @var        string
     */
    protected $date_tentative_recup_mdp;

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
        $this->email = '';
        $this->mdp = '';
        $this->nom = '';
        $this->prenom = '';
        $this->tentatives_mdp = 0;
        $this->organisme = '';
        $this->service_id = 0;
        $this->recevoir_mail = '0';
        $this->elu = '0';
        $this->nom_fonction = '';
        $this->type_comm = '2';
        $this->adr_postale = '';
        $this->civilite = '';
        $this->alerte_reponse_electronique = '0';
        $this->alerte_reception_mainlevee = '0';
        $this->alerte_cloture_consultation = '0';
        $this->alerte_reception_message = '0';
        $this->alerte_publication_boamp = '0';
        $this->alerte_echec_publication_boamp = '0';
        $this->alerte_creation_modification_agent = '0';
        $this->id_initial = 0;
        $this->alerte_question_entreprise = '0';
        $this->actif = '1';
        $this->num_certificat = '';
        $this->alerte_validation_consultation = '0';
        $this->alerte_chorus = '0';
        $this->code_theme = '0';
    }

    /**
     * Initializes internal state of BaseCommonAgent object.
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
     * Get the [login] column value.
     * 
     * @return string
     */
    public function getLogin()
    {

        return $this->login;
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
     * Get the [mdp] column value.
     * 
     * @return string
     */
    public function getMdp()
    {

        return $this->mdp;
    }

    /**
     * Get the [certificat] column value.
     * 
     * @return string
     */
    public function getCertificat()
    {

        return $this->certificat;
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
     * Get the [prenom] column value.
     * 
     * @return string
     */
    public function getPrenom()
    {

        return $this->prenom;
    }

    /**
     * Get the [tentatives_mdp] column value.
     * 
     * @return int
     */
    public function getTentativesMdp()
    {

        return $this->tentatives_mdp;
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
     * Get the [service_id] column value.
     * 
     * @return int
     */
    public function getServiceId()
    {

        return $this->service_id;
    }

    /**
     * Get the [recevoir_mail] column value.
     * 
     * @return string
     */
    public function getRecevoirMail()
    {

        return $this->recevoir_mail;
    }

    /**
     * Get the [elu] column value.
     * 
     * @return string
     */
    public function getElu()
    {

        return $this->elu;
    }

    /**
     * Get the [nom_fonction] column value.
     * 
     * @return string
     */
    public function getNomFonction()
    {

        return $this->nom_fonction;
    }

    /**
     * Get the [num_tel] column value.
     * 
     * @return string
     */
    public function getNumTel()
    {

        return $this->num_tel;
    }

    /**
     * Get the [num_fax] column value.
     * 
     * @return string
     */
    public function getNumFax()
    {

        return $this->num_fax;
    }

    /**
     * Get the [type_comm] column value.
     * 
     * @return string
     */
    public function getTypeComm()
    {

        return $this->type_comm;
    }

    /**
     * Get the [adr_postale] column value.
     * 
     * @return string
     */
    public function getAdrPostale()
    {

        return $this->adr_postale;
    }

    /**
     * Get the [civilite] column value.
     * 
     * @return string
     */
    public function getCivilite()
    {

        return $this->civilite;
    }

    /**
     * Get the [alerte_reponse_electronique] column value.
     * 
     * @return string
     */
    public function getAlerteReponseElectronique()
    {

        return $this->alerte_reponse_electronique;
    }

    /**
     * Get the [alerte_reception_mainlevee] column value.
     * 
     * @return string
     */
    public function getAlerteReceptionMainlevee()
    {

        return $this->alerte_reception_mainlevee;
    }

    /**
     * Get the [alerte_cloture_consultation] column value.
     * 
     * @return string
     */
    public function getAlerteClotureConsultation()
    {

        return $this->alerte_cloture_consultation;
    }

    /**
     * Get the [alerte_reception_message] column value.
     * 
     * @return string
     */
    public function getAlerteReceptionMessage()
    {

        return $this->alerte_reception_message;
    }

    /**
     * Get the [alerte_publication_boamp] column value.
     * 
     * @return string
     */
    public function getAlertePublicationBoamp()
    {

        return $this->alerte_publication_boamp;
    }

    /**
     * Get the [alerte_echec_publication_boamp] column value.
     * 
     * @return string
     */
    public function getAlerteEchecPublicationBoamp()
    {

        return $this->alerte_echec_publication_boamp;
    }

    /**
     * Get the [alerte_creation_modification_agent] column value.
     * 
     * @return string
     */
    public function getAlerteCreationModificationAgent()
    {

        return $this->alerte_creation_modification_agent;
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
     * Get the [date_modification] column value.
     * 
     * @return string
     */
    public function getDateModification()
    {

        return $this->date_modification;
    }

    /**
     * Get the [id_initial] column value.
     * 
     * @return int
     */
    public function getIdInitial()
    {

        return $this->id_initial;
    }

    /**
     * Get the [id_profil_socle_externe] column value.
     * 
     * @return int
     */
    public function getIdProfilSocleExterne()
    {

        return $this->id_profil_socle_externe;
    }

    /**
     * Get the [lieu_execution] column value.
     * 
     * @return string
     */
    public function getLieuExecution()
    {

        return $this->lieu_execution;
    }

    /**
     * Get the [alerte_question_entreprise] column value.
     * 
     * @return string
     */
    public function getAlerteQuestionEntreprise()
    {

        return $this->alerte_question_entreprise;
    }

    /**
     * Get the [actif] column value.
     * 
     * @return string
     */
    public function getActif()
    {

        return $this->actif;
    }

    /**
     * Get the [codes_nuts] column value.
     * 
     * @return string
     */
    public function getCodesNuts()
    {

        return $this->codes_nuts;
    }

    /**
     * Get the [num_certificat] column value.
     * 
     * @return string
     */
    public function getNumCertificat()
    {

        return $this->num_certificat;
    }

    /**
     * Get the [alerte_validation_consultation] column value.
     * 
     * @return string
     */
    public function getAlerteValidationConsultation()
    {

        return $this->alerte_validation_consultation;
    }

    /**
     * Get the [alerte_chorus] column value.
     * 
     * @return string
     */
    public function getAlerteChorus()
    {

        return $this->alerte_chorus;
    }

    /**
     * Get the [password] column value.
     * 
     * @return string
     */
    public function getPassword()
    {

        return $this->password;
    }

    /**
     * Get the [code_theme] column value.
     * 
     * @return string
     */
    public function getCodeTheme()
    {

        return $this->code_theme;
    }

    /**
     * Get the [tentative_recup_mdp] column value.
     * 
     * @return int
     */
    public function getTentativeRecupMdp()
    {

        return $this->tentative_recup_mdp;
    }

    /**
     * Get the [optionally formatted] temporal [date_tentative_recup_mdp] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateTentativeRecupMdp($format = 'Y-m-d H:i:s')
    {
        if ($this->date_tentative_recup_mdp === null) {
            return null;
        }

        if ($this->date_tentative_recup_mdp === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_tentative_recup_mdp);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_tentative_recup_mdp, true), $x);
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
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonAgentPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [login] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setLogin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->login !== $v) {
            $this->login = $v;
            $this->modifiedColumns[] = CommonAgentPeer::LOGIN;
        }


        return $this;
    } // setLogin()

    /**
     * Set the value of [email] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[] = CommonAgentPeer::EMAIL;
        }


        return $this;
    } // setEmail()

    /**
     * Set the value of [mdp] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setMdp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mdp !== $v) {
            $this->mdp = $v;
            $this->modifiedColumns[] = CommonAgentPeer::MDP;
        }


        return $this;
    } // setMdp()

    /**
     * Set the value of [certificat] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setCertificat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->certificat !== $v) {
            $this->certificat = $v;
            $this->modifiedColumns[] = CommonAgentPeer::CERTIFICAT;
        }


        return $this;
    } // setCertificat()

    /**
     * Set the value of [nom] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setNom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom !== $v) {
            $this->nom = $v;
            $this->modifiedColumns[] = CommonAgentPeer::NOM;
        }


        return $this;
    } // setNom()

    /**
     * Set the value of [prenom] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setPrenom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prenom !== $v) {
            $this->prenom = $v;
            $this->modifiedColumns[] = CommonAgentPeer::PRENOM;
        }


        return $this;
    } // setPrenom()

    /**
     * Set the value of [tentatives_mdp] column.
     * 
     * @param int $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setTentativesMdp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tentatives_mdp !== $v) {
            $this->tentatives_mdp = $v;
            $this->modifiedColumns[] = CommonAgentPeer::TENTATIVES_MDP;
        }


        return $this;
    } // setTentativesMdp()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonAgentPeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [service_id] column.
     * 
     * @param int $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setServiceId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->service_id !== $v) {
            $this->service_id = $v;
            $this->modifiedColumns[] = CommonAgentPeer::SERVICE_ID;
        }


        return $this;
    } // setServiceId()

    /**
     * Set the value of [recevoir_mail] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setRecevoirMail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->recevoir_mail !== $v) {
            $this->recevoir_mail = $v;
            $this->modifiedColumns[] = CommonAgentPeer::RECEVOIR_MAIL;
        }


        return $this;
    } // setRecevoirMail()

    /**
     * Set the value of [elu] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setElu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->elu !== $v) {
            $this->elu = $v;
            $this->modifiedColumns[] = CommonAgentPeer::ELU;
        }


        return $this;
    } // setElu()

    /**
     * Set the value of [nom_fonction] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setNomFonction($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_fonction !== $v) {
            $this->nom_fonction = $v;
            $this->modifiedColumns[] = CommonAgentPeer::NOM_FONCTION;
        }


        return $this;
    } // setNomFonction()

    /**
     * Set the value of [num_tel] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setNumTel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->num_tel !== $v) {
            $this->num_tel = $v;
            $this->modifiedColumns[] = CommonAgentPeer::NUM_TEL;
        }


        return $this;
    } // setNumTel()

    /**
     * Set the value of [num_fax] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setNumFax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->num_fax !== $v) {
            $this->num_fax = $v;
            $this->modifiedColumns[] = CommonAgentPeer::NUM_FAX;
        }


        return $this;
    } // setNumFax()

    /**
     * Set the value of [type_comm] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setTypeComm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_comm !== $v) {
            $this->type_comm = $v;
            $this->modifiedColumns[] = CommonAgentPeer::TYPE_COMM;
        }


        return $this;
    } // setTypeComm()

    /**
     * Set the value of [adr_postale] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setAdrPostale($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adr_postale !== $v) {
            $this->adr_postale = $v;
            $this->modifiedColumns[] = CommonAgentPeer::ADR_POSTALE;
        }


        return $this;
    } // setAdrPostale()

    /**
     * Set the value of [civilite] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setCivilite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->civilite !== $v) {
            $this->civilite = $v;
            $this->modifiedColumns[] = CommonAgentPeer::CIVILITE;
        }


        return $this;
    } // setCivilite()

    /**
     * Set the value of [alerte_reponse_electronique] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setAlerteReponseElectronique($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->alerte_reponse_electronique !== $v) {
            $this->alerte_reponse_electronique = $v;
            $this->modifiedColumns[] = CommonAgentPeer::ALERTE_REPONSE_ELECTRONIQUE;
        }


        return $this;
    } // setAlerteReponseElectronique()

    /**
     * Set the value of [alerte_reception_mainlevee] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setAlerteReceptionMainlevee($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->alerte_reception_mainlevee !== $v) {
            $this->alerte_reception_mainlevee = $v;
            $this->modifiedColumns[] = CommonAgentPeer::ALERTE_RECEPTION_MAINLEVEE;
        }


        return $this;
    } // setAlerteReceptionMainlevee()

    /**
     * Set the value of [alerte_cloture_consultation] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setAlerteClotureConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->alerte_cloture_consultation !== $v) {
            $this->alerte_cloture_consultation = $v;
            $this->modifiedColumns[] = CommonAgentPeer::ALERTE_CLOTURE_CONSULTATION;
        }


        return $this;
    } // setAlerteClotureConsultation()

    /**
     * Set the value of [alerte_reception_message] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setAlerteReceptionMessage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->alerte_reception_message !== $v) {
            $this->alerte_reception_message = $v;
            $this->modifiedColumns[] = CommonAgentPeer::ALERTE_RECEPTION_MESSAGE;
        }


        return $this;
    } // setAlerteReceptionMessage()

    /**
     * Set the value of [alerte_publication_boamp] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setAlertePublicationBoamp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->alerte_publication_boamp !== $v) {
            $this->alerte_publication_boamp = $v;
            $this->modifiedColumns[] = CommonAgentPeer::ALERTE_PUBLICATION_BOAMP;
        }


        return $this;
    } // setAlertePublicationBoamp()

    /**
     * Set the value of [alerte_echec_publication_boamp] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setAlerteEchecPublicationBoamp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->alerte_echec_publication_boamp !== $v) {
            $this->alerte_echec_publication_boamp = $v;
            $this->modifiedColumns[] = CommonAgentPeer::ALERTE_ECHEC_PUBLICATION_BOAMP;
        }


        return $this;
    } // setAlerteEchecPublicationBoamp()

    /**
     * Set the value of [alerte_creation_modification_agent] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setAlerteCreationModificationAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->alerte_creation_modification_agent !== $v) {
            $this->alerte_creation_modification_agent = $v;
            $this->modifiedColumns[] = CommonAgentPeer::ALERTE_CREATION_MODIFICATION_AGENT;
        }


        return $this;
    } // setAlerteCreationModificationAgent()

    /**
     * Set the value of [date_creation] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setDateCreation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_creation !== $v) {
            $this->date_creation = $v;
            $this->modifiedColumns[] = CommonAgentPeer::DATE_CREATION;
        }


        return $this;
    } // setDateCreation()

    /**
     * Set the value of [date_modification] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setDateModification($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_modification !== $v) {
            $this->date_modification = $v;
            $this->modifiedColumns[] = CommonAgentPeer::DATE_MODIFICATION;
        }


        return $this;
    } // setDateModification()

    /**
     * Set the value of [id_initial] column.
     * 
     * @param int $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setIdInitial($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_initial !== $v) {
            $this->id_initial = $v;
            $this->modifiedColumns[] = CommonAgentPeer::ID_INITIAL;
        }


        return $this;
    } // setIdInitial()

    /**
     * Set the value of [id_profil_socle_externe] column.
     * 
     * @param int $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setIdProfilSocleExterne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_profil_socle_externe !== $v) {
            $this->id_profil_socle_externe = $v;
            $this->modifiedColumns[] = CommonAgentPeer::ID_PROFIL_SOCLE_EXTERNE;
        }


        return $this;
    } // setIdProfilSocleExterne()

    /**
     * Set the value of [lieu_execution] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setLieuExecution($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lieu_execution !== $v) {
            $this->lieu_execution = $v;
            $this->modifiedColumns[] = CommonAgentPeer::LIEU_EXECUTION;
        }


        return $this;
    } // setLieuExecution()

    /**
     * Set the value of [alerte_question_entreprise] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setAlerteQuestionEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->alerte_question_entreprise !== $v) {
            $this->alerte_question_entreprise = $v;
            $this->modifiedColumns[] = CommonAgentPeer::ALERTE_QUESTION_ENTREPRISE;
        }


        return $this;
    } // setAlerteQuestionEntreprise()

    /**
     * Set the value of [actif] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setActif($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->actif !== $v) {
            $this->actif = $v;
            $this->modifiedColumns[] = CommonAgentPeer::ACTIF;
        }


        return $this;
    } // setActif()

    /**
     * Set the value of [codes_nuts] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setCodesNuts($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->codes_nuts !== $v) {
            $this->codes_nuts = $v;
            $this->modifiedColumns[] = CommonAgentPeer::CODES_NUTS;
        }


        return $this;
    } // setCodesNuts()

    /**
     * Set the value of [num_certificat] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setNumCertificat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->num_certificat !== $v) {
            $this->num_certificat = $v;
            $this->modifiedColumns[] = CommonAgentPeer::NUM_CERTIFICAT;
        }


        return $this;
    } // setNumCertificat()

    /**
     * Set the value of [alerte_validation_consultation] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setAlerteValidationConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->alerte_validation_consultation !== $v) {
            $this->alerte_validation_consultation = $v;
            $this->modifiedColumns[] = CommonAgentPeer::ALERTE_VALIDATION_CONSULTATION;
        }


        return $this;
    } // setAlerteValidationConsultation()

    /**
     * Set the value of [alerte_chorus] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setAlerteChorus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->alerte_chorus !== $v) {
            $this->alerte_chorus = $v;
            $this->modifiedColumns[] = CommonAgentPeer::ALERTE_CHORUS;
        }


        return $this;
    } // setAlerteChorus()

    /**
     * Set the value of [password] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setPassword($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->password !== $v) {
            $this->password = $v;
            $this->modifiedColumns[] = CommonAgentPeer::PASSWORD;
        }


        return $this;
    } // setPassword()

    /**
     * Set the value of [code_theme] column.
     * 
     * @param string $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setCodeTheme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code_theme !== $v) {
            $this->code_theme = $v;
            $this->modifiedColumns[] = CommonAgentPeer::CODE_THEME;
        }


        return $this;
    } // setCodeTheme()

    /**
     * Set the value of [tentative_recup_mdp] column.
     * 
     * @param int $v new value
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setTentativeRecupMdp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tentative_recup_mdp !== $v) {
            $this->tentative_recup_mdp = $v;
            $this->modifiedColumns[] = CommonAgentPeer::TENTATIVE_RECUP_MDP;
        }


        return $this;
    } // setTentativeRecupMdp()

    /**
     * Sets the value of [date_tentative_recup_mdp] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonAgent The current object (for fluent API support)
     */
    public function setDateTentativeRecupMdp($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_tentative_recup_mdp !== null || $dt !== null) {
            $currentDateAsString = ($this->date_tentative_recup_mdp !== null && $tmpDt = new DateTime($this->date_tentative_recup_mdp)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_tentative_recup_mdp = $newDateAsString;
                $this->modifiedColumns[] = CommonAgentPeer::DATE_TENTATIVE_RECUP_MDP;
            }
        } // if either are not null


        return $this;
    } // setDateTentativeRecupMdp()

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
            if ($this->email !== '') {
                return false;
            }

            if ($this->mdp !== '') {
                return false;
            }

            if ($this->nom !== '') {
                return false;
            }

            if ($this->prenom !== '') {
                return false;
            }

            if ($this->tentatives_mdp !== 0) {
                return false;
            }

            if ($this->organisme !== '') {
                return false;
            }

            if ($this->service_id !== 0) {
                return false;
            }

            if ($this->recevoir_mail !== '0') {
                return false;
            }

            if ($this->elu !== '0') {
                return false;
            }

            if ($this->nom_fonction !== '') {
                return false;
            }

            if ($this->type_comm !== '2') {
                return false;
            }

            if ($this->adr_postale !== '') {
                return false;
            }

            if ($this->civilite !== '') {
                return false;
            }

            if ($this->alerte_reponse_electronique !== '0') {
                return false;
            }

            if ($this->alerte_reception_mainlevee !== '0') {
                return false;
            }

            if ($this->alerte_cloture_consultation !== '0') {
                return false;
            }

            if ($this->alerte_reception_message !== '0') {
                return false;
            }

            if ($this->alerte_publication_boamp !== '0') {
                return false;
            }

            if ($this->alerte_echec_publication_boamp !== '0') {
                return false;
            }

            if ($this->alerte_creation_modification_agent !== '0') {
                return false;
            }

            if ($this->id_initial !== 0) {
                return false;
            }

            if ($this->alerte_question_entreprise !== '0') {
                return false;
            }

            if ($this->actif !== '1') {
                return false;
            }

            if ($this->num_certificat !== '') {
                return false;
            }

            if ($this->alerte_validation_consultation !== '0') {
                return false;
            }

            if ($this->alerte_chorus !== '0') {
                return false;
            }

            if ($this->code_theme !== '0') {
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
            $this->login = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->email = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->mdp = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->certificat = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->nom = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->prenom = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->tentatives_mdp = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
            $this->organisme = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->service_id = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->recevoir_mail = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->elu = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->nom_fonction = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->num_tel = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->num_fax = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->type_comm = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->adr_postale = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->civilite = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->alerte_reponse_electronique = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->alerte_reception_mainlevee = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->alerte_cloture_consultation = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->alerte_reception_message = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->alerte_publication_boamp = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->alerte_echec_publication_boamp = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->alerte_creation_modification_agent = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->date_creation = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->date_modification = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->id_initial = ($row[$startcol + 27] !== null) ? (int) $row[$startcol + 27] : null;
            $this->id_profil_socle_externe = ($row[$startcol + 28] !== null) ? (int) $row[$startcol + 28] : null;
            $this->lieu_execution = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->alerte_question_entreprise = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->actif = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->codes_nuts = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->num_certificat = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->alerte_validation_consultation = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->alerte_chorus = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->password = ($row[$startcol + 36] !== null) ? (string) $row[$startcol + 36] : null;
            $this->code_theme = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->tentative_recup_mdp = ($row[$startcol + 38] !== null) ? (int) $row[$startcol + 38] : null;
            $this->date_tentative_recup_mdp = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 40; // 40 = CommonAgentPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonAgent object", $e);
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
            $con = Propel::getConnection(CommonAgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonAgentPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonAgentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonAgentQuery::create()
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
            $con = Propel::getConnection(CommonAgentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonAgentPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonAgentPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonAgentPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonAgentPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonAgentPeer::LOGIN)) {
            $modifiedColumns[':p' . $index++]  = '`login`';
        }
        if ($this->isColumnModified(CommonAgentPeer::EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`email`';
        }
        if ($this->isColumnModified(CommonAgentPeer::MDP)) {
            $modifiedColumns[':p' . $index++]  = '`mdp`';
        }
        if ($this->isColumnModified(CommonAgentPeer::CERTIFICAT)) {
            $modifiedColumns[':p' . $index++]  = '`certificat`';
        }
        if ($this->isColumnModified(CommonAgentPeer::NOM)) {
            $modifiedColumns[':p' . $index++]  = '`nom`';
        }
        if ($this->isColumnModified(CommonAgentPeer::PRENOM)) {
            $modifiedColumns[':p' . $index++]  = '`prenom`';
        }
        if ($this->isColumnModified(CommonAgentPeer::TENTATIVES_MDP)) {
            $modifiedColumns[':p' . $index++]  = '`tentatives_mdp`';
        }
        if ($this->isColumnModified(CommonAgentPeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonAgentPeer::SERVICE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`service_id`';
        }
        if ($this->isColumnModified(CommonAgentPeer::RECEVOIR_MAIL)) {
            $modifiedColumns[':p' . $index++]  = '`RECEVOIR_MAIL`';
        }
        if ($this->isColumnModified(CommonAgentPeer::ELU)) {
            $modifiedColumns[':p' . $index++]  = '`elu`';
        }
        if ($this->isColumnModified(CommonAgentPeer::NOM_FONCTION)) {
            $modifiedColumns[':p' . $index++]  = '`nom_fonction`';
        }
        if ($this->isColumnModified(CommonAgentPeer::NUM_TEL)) {
            $modifiedColumns[':p' . $index++]  = '`num_tel`';
        }
        if ($this->isColumnModified(CommonAgentPeer::NUM_FAX)) {
            $modifiedColumns[':p' . $index++]  = '`num_fax`';
        }
        if ($this->isColumnModified(CommonAgentPeer::TYPE_COMM)) {
            $modifiedColumns[':p' . $index++]  = '`type_comm`';
        }
        if ($this->isColumnModified(CommonAgentPeer::ADR_POSTALE)) {
            $modifiedColumns[':p' . $index++]  = '`adr_postale`';
        }
        if ($this->isColumnModified(CommonAgentPeer::CIVILITE)) {
            $modifiedColumns[':p' . $index++]  = '`civilite`';
        }
        if ($this->isColumnModified(CommonAgentPeer::ALERTE_REPONSE_ELECTRONIQUE)) {
            $modifiedColumns[':p' . $index++]  = '`alerte_reponse_electronique`';
        }
        if ($this->isColumnModified(CommonAgentPeer::ALERTE_RECEPTION_MAINLEVEE)) {
            $modifiedColumns[':p' . $index++]  = '`alerte_reception_mainlevee`';
        }
        if ($this->isColumnModified(CommonAgentPeer::ALERTE_CLOTURE_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`alerte_cloture_consultation`';
        }
        if ($this->isColumnModified(CommonAgentPeer::ALERTE_RECEPTION_MESSAGE)) {
            $modifiedColumns[':p' . $index++]  = '`alerte_reception_message`';
        }
        if ($this->isColumnModified(CommonAgentPeer::ALERTE_PUBLICATION_BOAMP)) {
            $modifiedColumns[':p' . $index++]  = '`alerte_publication_boamp`';
        }
        if ($this->isColumnModified(CommonAgentPeer::ALERTE_ECHEC_PUBLICATION_BOAMP)) {
            $modifiedColumns[':p' . $index++]  = '`alerte_echec_publication_boamp`';
        }
        if ($this->isColumnModified(CommonAgentPeer::ALERTE_CREATION_MODIFICATION_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`alerte_creation_modification_agent`';
        }
        if ($this->isColumnModified(CommonAgentPeer::DATE_CREATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_creation`';
        }
        if ($this->isColumnModified(CommonAgentPeer::DATE_MODIFICATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_modification`';
        }
        if ($this->isColumnModified(CommonAgentPeer::ID_INITIAL)) {
            $modifiedColumns[':p' . $index++]  = '`id_initial`';
        }
        if ($this->isColumnModified(CommonAgentPeer::ID_PROFIL_SOCLE_EXTERNE)) {
            $modifiedColumns[':p' . $index++]  = '`id_profil_socle_externe`';
        }
        if ($this->isColumnModified(CommonAgentPeer::LIEU_EXECUTION)) {
            $modifiedColumns[':p' . $index++]  = '`lieu_execution`';
        }
        if ($this->isColumnModified(CommonAgentPeer::ALERTE_QUESTION_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`alerte_question_entreprise`';
        }
        if ($this->isColumnModified(CommonAgentPeer::ACTIF)) {
            $modifiedColumns[':p' . $index++]  = '`actif`';
        }
        if ($this->isColumnModified(CommonAgentPeer::CODES_NUTS)) {
            $modifiedColumns[':p' . $index++]  = '`codes_nuts`';
        }
        if ($this->isColumnModified(CommonAgentPeer::NUM_CERTIFICAT)) {
            $modifiedColumns[':p' . $index++]  = '`num_certificat`';
        }
        if ($this->isColumnModified(CommonAgentPeer::ALERTE_VALIDATION_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`alerte_validation_consultation`';
        }
        if ($this->isColumnModified(CommonAgentPeer::ALERTE_CHORUS)) {
            $modifiedColumns[':p' . $index++]  = '`alerte_chorus`';
        }
        if ($this->isColumnModified(CommonAgentPeer::PASSWORD)) {
            $modifiedColumns[':p' . $index++]  = '`password`';
        }
        if ($this->isColumnModified(CommonAgentPeer::CODE_THEME)) {
            $modifiedColumns[':p' . $index++]  = '`code_theme`';
        }
        if ($this->isColumnModified(CommonAgentPeer::TENTATIVE_RECUP_MDP)) {
            $modifiedColumns[':p' . $index++]  = '`tentative_recup_mdp`';
        }
        if ($this->isColumnModified(CommonAgentPeer::DATE_TENTATIVE_RECUP_MDP)) {
            $modifiedColumns[':p' . $index++]  = '`date_tentative_recup_mdp`';
        }

        $sql = sprintf(
            'INSERT INTO `Agent` (%s) VALUES (%s)',
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
                    case '`login`':						
                        $stmt->bindValue($identifier, $this->login, PDO::PARAM_STR);
                        break;
                    case '`email`':						
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                    case '`mdp`':						
                        $stmt->bindValue($identifier, $this->mdp, PDO::PARAM_STR);
                        break;
                    case '`certificat`':						
                        $stmt->bindValue($identifier, $this->certificat, PDO::PARAM_STR);
                        break;
                    case '`nom`':						
                        $stmt->bindValue($identifier, $this->nom, PDO::PARAM_STR);
                        break;
                    case '`prenom`':						
                        $stmt->bindValue($identifier, $this->prenom, PDO::PARAM_STR);
                        break;
                    case '`tentatives_mdp`':						
                        $stmt->bindValue($identifier, $this->tentatives_mdp, PDO::PARAM_INT);
                        break;
                    case '`organisme`':						
                        $stmt->bindValue($identifier, $this->organisme, PDO::PARAM_STR);
                        break;
                    case '`service_id`':						
                        $stmt->bindValue($identifier, $this->service_id, PDO::PARAM_INT);
                        break;
                    case '`RECEVOIR_MAIL`':						
                        $stmt->bindValue($identifier, $this->recevoir_mail, PDO::PARAM_STR);
                        break;
                    case '`elu`':						
                        $stmt->bindValue($identifier, $this->elu, PDO::PARAM_STR);
                        break;
                    case '`nom_fonction`':						
                        $stmt->bindValue($identifier, $this->nom_fonction, PDO::PARAM_STR);
                        break;
                    case '`num_tel`':						
                        $stmt->bindValue($identifier, $this->num_tel, PDO::PARAM_STR);
                        break;
                    case '`num_fax`':						
                        $stmt->bindValue($identifier, $this->num_fax, PDO::PARAM_STR);
                        break;
                    case '`type_comm`':						
                        $stmt->bindValue($identifier, $this->type_comm, PDO::PARAM_STR);
                        break;
                    case '`adr_postale`':						
                        $stmt->bindValue($identifier, $this->adr_postale, PDO::PARAM_STR);
                        break;
                    case '`civilite`':						
                        $stmt->bindValue($identifier, $this->civilite, PDO::PARAM_STR);
                        break;
                    case '`alerte_reponse_electronique`':						
                        $stmt->bindValue($identifier, $this->alerte_reponse_electronique, PDO::PARAM_STR);
                        break;
                    case '`alerte_reception_mainlevee`':						
                        $stmt->bindValue($identifier, $this->alerte_reception_mainlevee, PDO::PARAM_STR);
                        break;
                    case '`alerte_cloture_consultation`':						
                        $stmt->bindValue($identifier, $this->alerte_cloture_consultation, PDO::PARAM_STR);
                        break;
                    case '`alerte_reception_message`':						
                        $stmt->bindValue($identifier, $this->alerte_reception_message, PDO::PARAM_STR);
                        break;
                    case '`alerte_publication_boamp`':						
                        $stmt->bindValue($identifier, $this->alerte_publication_boamp, PDO::PARAM_STR);
                        break;
                    case '`alerte_echec_publication_boamp`':						
                        $stmt->bindValue($identifier, $this->alerte_echec_publication_boamp, PDO::PARAM_STR);
                        break;
                    case '`alerte_creation_modification_agent`':						
                        $stmt->bindValue($identifier, $this->alerte_creation_modification_agent, PDO::PARAM_STR);
                        break;
                    case '`date_creation`':						
                        $stmt->bindValue($identifier, $this->date_creation, PDO::PARAM_STR);
                        break;
                    case '`date_modification`':						
                        $stmt->bindValue($identifier, $this->date_modification, PDO::PARAM_STR);
                        break;
                    case '`id_initial`':						
                        $stmt->bindValue($identifier, $this->id_initial, PDO::PARAM_INT);
                        break;
                    case '`id_profil_socle_externe`':						
                        $stmt->bindValue($identifier, $this->id_profil_socle_externe, PDO::PARAM_INT);
                        break;
                    case '`lieu_execution`':						
                        $stmt->bindValue($identifier, $this->lieu_execution, PDO::PARAM_STR);
                        break;
                    case '`alerte_question_entreprise`':						
                        $stmt->bindValue($identifier, $this->alerte_question_entreprise, PDO::PARAM_STR);
                        break;
                    case '`actif`':						
                        $stmt->bindValue($identifier, $this->actif, PDO::PARAM_STR);
                        break;
                    case '`codes_nuts`':						
                        $stmt->bindValue($identifier, $this->codes_nuts, PDO::PARAM_STR);
                        break;
                    case '`num_certificat`':						
                        $stmt->bindValue($identifier, $this->num_certificat, PDO::PARAM_STR);
                        break;
                    case '`alerte_validation_consultation`':						
                        $stmt->bindValue($identifier, $this->alerte_validation_consultation, PDO::PARAM_STR);
                        break;
                    case '`alerte_chorus`':						
                        $stmt->bindValue($identifier, $this->alerte_chorus, PDO::PARAM_STR);
                        break;
                    case '`password`':						
                        $stmt->bindValue($identifier, $this->password, PDO::PARAM_STR);
                        break;
                    case '`code_theme`':						
                        $stmt->bindValue($identifier, $this->code_theme, PDO::PARAM_STR);
                        break;
                    case '`tentative_recup_mdp`':						
                        $stmt->bindValue($identifier, $this->tentative_recup_mdp, PDO::PARAM_INT);
                        break;
                    case '`date_tentative_recup_mdp`':						
                        $stmt->bindValue($identifier, $this->date_tentative_recup_mdp, PDO::PARAM_STR);
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


            if (($retval = CommonAgentPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonAgentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getLogin();
                break;
            case 2:
                return $this->getEmail();
                break;
            case 3:
                return $this->getMdp();
                break;
            case 4:
                return $this->getCertificat();
                break;
            case 5:
                return $this->getNom();
                break;
            case 6:
                return $this->getPrenom();
                break;
            case 7:
                return $this->getTentativesMdp();
                break;
            case 8:
                return $this->getOrganisme();
                break;
            case 9:
                return $this->getServiceId();
                break;
            case 10:
                return $this->getRecevoirMail();
                break;
            case 11:
                return $this->getElu();
                break;
            case 12:
                return $this->getNomFonction();
                break;
            case 13:
                return $this->getNumTel();
                break;
            case 14:
                return $this->getNumFax();
                break;
            case 15:
                return $this->getTypeComm();
                break;
            case 16:
                return $this->getAdrPostale();
                break;
            case 17:
                return $this->getCivilite();
                break;
            case 18:
                return $this->getAlerteReponseElectronique();
                break;
            case 19:
                return $this->getAlerteReceptionMainlevee();
                break;
            case 20:
                return $this->getAlerteClotureConsultation();
                break;
            case 21:
                return $this->getAlerteReceptionMessage();
                break;
            case 22:
                return $this->getAlertePublicationBoamp();
                break;
            case 23:
                return $this->getAlerteEchecPublicationBoamp();
                break;
            case 24:
                return $this->getAlerteCreationModificationAgent();
                break;
            case 25:
                return $this->getDateCreation();
                break;
            case 26:
                return $this->getDateModification();
                break;
            case 27:
                return $this->getIdInitial();
                break;
            case 28:
                return $this->getIdProfilSocleExterne();
                break;
            case 29:
                return $this->getLieuExecution();
                break;
            case 30:
                return $this->getAlerteQuestionEntreprise();
                break;
            case 31:
                return $this->getActif();
                break;
            case 32:
                return $this->getCodesNuts();
                break;
            case 33:
                return $this->getNumCertificat();
                break;
            case 34:
                return $this->getAlerteValidationConsultation();
                break;
            case 35:
                return $this->getAlerteChorus();
                break;
            case 36:
                return $this->getPassword();
                break;
            case 37:
                return $this->getCodeTheme();
                break;
            case 38:
                return $this->getTentativeRecupMdp();
                break;
            case 39:
                return $this->getDateTentativeRecupMdp();
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
        if (isset($alreadyDumpedObjects['CommonAgent'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonAgent'][$this->getPrimaryKey()] = true;
        $keys = CommonAgentPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getLogin(),
            $keys[2] => $this->getEmail(),
            $keys[3] => $this->getMdp(),
            $keys[4] => $this->getCertificat(),
            $keys[5] => $this->getNom(),
            $keys[6] => $this->getPrenom(),
            $keys[7] => $this->getTentativesMdp(),
            $keys[8] => $this->getOrganisme(),
            $keys[9] => $this->getServiceId(),
            $keys[10] => $this->getRecevoirMail(),
            $keys[11] => $this->getElu(),
            $keys[12] => $this->getNomFonction(),
            $keys[13] => $this->getNumTel(),
            $keys[14] => $this->getNumFax(),
            $keys[15] => $this->getTypeComm(),
            $keys[16] => $this->getAdrPostale(),
            $keys[17] => $this->getCivilite(),
            $keys[18] => $this->getAlerteReponseElectronique(),
            $keys[19] => $this->getAlerteReceptionMainlevee(),
            $keys[20] => $this->getAlerteClotureConsultation(),
            $keys[21] => $this->getAlerteReceptionMessage(),
            $keys[22] => $this->getAlertePublicationBoamp(),
            $keys[23] => $this->getAlerteEchecPublicationBoamp(),
            $keys[24] => $this->getAlerteCreationModificationAgent(),
            $keys[25] => $this->getDateCreation(),
            $keys[26] => $this->getDateModification(),
            $keys[27] => $this->getIdInitial(),
            $keys[28] => $this->getIdProfilSocleExterne(),
            $keys[29] => $this->getLieuExecution(),
            $keys[30] => $this->getAlerteQuestionEntreprise(),
            $keys[31] => $this->getActif(),
            $keys[32] => $this->getCodesNuts(),
            $keys[33] => $this->getNumCertificat(),
            $keys[34] => $this->getAlerteValidationConsultation(),
            $keys[35] => $this->getAlerteChorus(),
            $keys[36] => $this->getPassword(),
            $keys[37] => $this->getCodeTheme(),
            $keys[38] => $this->getTentativeRecupMdp(),
            $keys[39] => $this->getDateTentativeRecupMdp(),
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
        $pos = CommonAgentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setLogin($value);
                break;
            case 2:
                $this->setEmail($value);
                break;
            case 3:
                $this->setMdp($value);
                break;
            case 4:
                $this->setCertificat($value);
                break;
            case 5:
                $this->setNom($value);
                break;
            case 6:
                $this->setPrenom($value);
                break;
            case 7:
                $this->setTentativesMdp($value);
                break;
            case 8:
                $this->setOrganisme($value);
                break;
            case 9:
                $this->setServiceId($value);
                break;
            case 10:
                $this->setRecevoirMail($value);
                break;
            case 11:
                $this->setElu($value);
                break;
            case 12:
                $this->setNomFonction($value);
                break;
            case 13:
                $this->setNumTel($value);
                break;
            case 14:
                $this->setNumFax($value);
                break;
            case 15:
                $this->setTypeComm($value);
                break;
            case 16:
                $this->setAdrPostale($value);
                break;
            case 17:
                $this->setCivilite($value);
                break;
            case 18:
                $this->setAlerteReponseElectronique($value);
                break;
            case 19:
                $this->setAlerteReceptionMainlevee($value);
                break;
            case 20:
                $this->setAlerteClotureConsultation($value);
                break;
            case 21:
                $this->setAlerteReceptionMessage($value);
                break;
            case 22:
                $this->setAlertePublicationBoamp($value);
                break;
            case 23:
                $this->setAlerteEchecPublicationBoamp($value);
                break;
            case 24:
                $this->setAlerteCreationModificationAgent($value);
                break;
            case 25:
                $this->setDateCreation($value);
                break;
            case 26:
                $this->setDateModification($value);
                break;
            case 27:
                $this->setIdInitial($value);
                break;
            case 28:
                $this->setIdProfilSocleExterne($value);
                break;
            case 29:
                $this->setLieuExecution($value);
                break;
            case 30:
                $this->setAlerteQuestionEntreprise($value);
                break;
            case 31:
                $this->setActif($value);
                break;
            case 32:
                $this->setCodesNuts($value);
                break;
            case 33:
                $this->setNumCertificat($value);
                break;
            case 34:
                $this->setAlerteValidationConsultation($value);
                break;
            case 35:
                $this->setAlerteChorus($value);
                break;
            case 36:
                $this->setPassword($value);
                break;
            case 37:
                $this->setCodeTheme($value);
                break;
            case 38:
                $this->setTentativeRecupMdp($value);
                break;
            case 39:
                $this->setDateTentativeRecupMdp($value);
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
        $keys = CommonAgentPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setLogin($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setEmail($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setMdp($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCertificat($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setNom($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setPrenom($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setTentativesMdp($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setOrganisme($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setServiceId($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setRecevoirMail($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setElu($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setNomFonction($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setNumTel($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setNumFax($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setTypeComm($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setAdrPostale($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setCivilite($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setAlerteReponseElectronique($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setAlerteReceptionMainlevee($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setAlerteClotureConsultation($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setAlerteReceptionMessage($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setAlertePublicationBoamp($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setAlerteEchecPublicationBoamp($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setAlerteCreationModificationAgent($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setDateCreation($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setDateModification($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setIdInitial($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setIdProfilSocleExterne($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setLieuExecution($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setAlerteQuestionEntreprise($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setActif($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setCodesNuts($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setNumCertificat($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setAlerteValidationConsultation($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setAlerteChorus($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setPassword($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setCodeTheme($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setTentativeRecupMdp($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setDateTentativeRecupMdp($arr[$keys[39]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonAgentPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonAgentPeer::ID)) $criteria->add(CommonAgentPeer::ID, $this->id);
        if ($this->isColumnModified(CommonAgentPeer::LOGIN)) $criteria->add(CommonAgentPeer::LOGIN, $this->login);
        if ($this->isColumnModified(CommonAgentPeer::EMAIL)) $criteria->add(CommonAgentPeer::EMAIL, $this->email);
        if ($this->isColumnModified(CommonAgentPeer::MDP)) $criteria->add(CommonAgentPeer::MDP, $this->mdp);
        if ($this->isColumnModified(CommonAgentPeer::CERTIFICAT)) $criteria->add(CommonAgentPeer::CERTIFICAT, $this->certificat);
        if ($this->isColumnModified(CommonAgentPeer::NOM)) $criteria->add(CommonAgentPeer::NOM, $this->nom);
        if ($this->isColumnModified(CommonAgentPeer::PRENOM)) $criteria->add(CommonAgentPeer::PRENOM, $this->prenom);
        if ($this->isColumnModified(CommonAgentPeer::TENTATIVES_MDP)) $criteria->add(CommonAgentPeer::TENTATIVES_MDP, $this->tentatives_mdp);
        if ($this->isColumnModified(CommonAgentPeer::ORGANISME)) $criteria->add(CommonAgentPeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonAgentPeer::SERVICE_ID)) $criteria->add(CommonAgentPeer::SERVICE_ID, $this->service_id);
        if ($this->isColumnModified(CommonAgentPeer::RECEVOIR_MAIL)) $criteria->add(CommonAgentPeer::RECEVOIR_MAIL, $this->recevoir_mail);
        if ($this->isColumnModified(CommonAgentPeer::ELU)) $criteria->add(CommonAgentPeer::ELU, $this->elu);
        if ($this->isColumnModified(CommonAgentPeer::NOM_FONCTION)) $criteria->add(CommonAgentPeer::NOM_FONCTION, $this->nom_fonction);
        if ($this->isColumnModified(CommonAgentPeer::NUM_TEL)) $criteria->add(CommonAgentPeer::NUM_TEL, $this->num_tel);
        if ($this->isColumnModified(CommonAgentPeer::NUM_FAX)) $criteria->add(CommonAgentPeer::NUM_FAX, $this->num_fax);
        if ($this->isColumnModified(CommonAgentPeer::TYPE_COMM)) $criteria->add(CommonAgentPeer::TYPE_COMM, $this->type_comm);
        if ($this->isColumnModified(CommonAgentPeer::ADR_POSTALE)) $criteria->add(CommonAgentPeer::ADR_POSTALE, $this->adr_postale);
        if ($this->isColumnModified(CommonAgentPeer::CIVILITE)) $criteria->add(CommonAgentPeer::CIVILITE, $this->civilite);
        if ($this->isColumnModified(CommonAgentPeer::ALERTE_REPONSE_ELECTRONIQUE)) $criteria->add(CommonAgentPeer::ALERTE_REPONSE_ELECTRONIQUE, $this->alerte_reponse_electronique);
        if ($this->isColumnModified(CommonAgentPeer::ALERTE_RECEPTION_MAINLEVEE)) $criteria->add(CommonAgentPeer::ALERTE_RECEPTION_MAINLEVEE, $this->alerte_reception_mainlevee);
        if ($this->isColumnModified(CommonAgentPeer::ALERTE_CLOTURE_CONSULTATION)) $criteria->add(CommonAgentPeer::ALERTE_CLOTURE_CONSULTATION, $this->alerte_cloture_consultation);
        if ($this->isColumnModified(CommonAgentPeer::ALERTE_RECEPTION_MESSAGE)) $criteria->add(CommonAgentPeer::ALERTE_RECEPTION_MESSAGE, $this->alerte_reception_message);
        if ($this->isColumnModified(CommonAgentPeer::ALERTE_PUBLICATION_BOAMP)) $criteria->add(CommonAgentPeer::ALERTE_PUBLICATION_BOAMP, $this->alerte_publication_boamp);
        if ($this->isColumnModified(CommonAgentPeer::ALERTE_ECHEC_PUBLICATION_BOAMP)) $criteria->add(CommonAgentPeer::ALERTE_ECHEC_PUBLICATION_BOAMP, $this->alerte_echec_publication_boamp);
        if ($this->isColumnModified(CommonAgentPeer::ALERTE_CREATION_MODIFICATION_AGENT)) $criteria->add(CommonAgentPeer::ALERTE_CREATION_MODIFICATION_AGENT, $this->alerte_creation_modification_agent);
        if ($this->isColumnModified(CommonAgentPeer::DATE_CREATION)) $criteria->add(CommonAgentPeer::DATE_CREATION, $this->date_creation);
        if ($this->isColumnModified(CommonAgentPeer::DATE_MODIFICATION)) $criteria->add(CommonAgentPeer::DATE_MODIFICATION, $this->date_modification);
        if ($this->isColumnModified(CommonAgentPeer::ID_INITIAL)) $criteria->add(CommonAgentPeer::ID_INITIAL, $this->id_initial);
        if ($this->isColumnModified(CommonAgentPeer::ID_PROFIL_SOCLE_EXTERNE)) $criteria->add(CommonAgentPeer::ID_PROFIL_SOCLE_EXTERNE, $this->id_profil_socle_externe);
        if ($this->isColumnModified(CommonAgentPeer::LIEU_EXECUTION)) $criteria->add(CommonAgentPeer::LIEU_EXECUTION, $this->lieu_execution);
        if ($this->isColumnModified(CommonAgentPeer::ALERTE_QUESTION_ENTREPRISE)) $criteria->add(CommonAgentPeer::ALERTE_QUESTION_ENTREPRISE, $this->alerte_question_entreprise);
        if ($this->isColumnModified(CommonAgentPeer::ACTIF)) $criteria->add(CommonAgentPeer::ACTIF, $this->actif);
        if ($this->isColumnModified(CommonAgentPeer::CODES_NUTS)) $criteria->add(CommonAgentPeer::CODES_NUTS, $this->codes_nuts);
        if ($this->isColumnModified(CommonAgentPeer::NUM_CERTIFICAT)) $criteria->add(CommonAgentPeer::NUM_CERTIFICAT, $this->num_certificat);
        if ($this->isColumnModified(CommonAgentPeer::ALERTE_VALIDATION_CONSULTATION)) $criteria->add(CommonAgentPeer::ALERTE_VALIDATION_CONSULTATION, $this->alerte_validation_consultation);
        if ($this->isColumnModified(CommonAgentPeer::ALERTE_CHORUS)) $criteria->add(CommonAgentPeer::ALERTE_CHORUS, $this->alerte_chorus);
        if ($this->isColumnModified(CommonAgentPeer::PASSWORD)) $criteria->add(CommonAgentPeer::PASSWORD, $this->password);
        if ($this->isColumnModified(CommonAgentPeer::CODE_THEME)) $criteria->add(CommonAgentPeer::CODE_THEME, $this->code_theme);
        if ($this->isColumnModified(CommonAgentPeer::TENTATIVE_RECUP_MDP)) $criteria->add(CommonAgentPeer::TENTATIVE_RECUP_MDP, $this->tentative_recup_mdp);
        if ($this->isColumnModified(CommonAgentPeer::DATE_TENTATIVE_RECUP_MDP)) $criteria->add(CommonAgentPeer::DATE_TENTATIVE_RECUP_MDP, $this->date_tentative_recup_mdp);

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
        $criteria = new Criteria(CommonAgentPeer::DATABASE_NAME);
        $criteria->add(CommonAgentPeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonAgent (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setLogin($this->getLogin());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setMdp($this->getMdp());
        $copyObj->setCertificat($this->getCertificat());
        $copyObj->setNom($this->getNom());
        $copyObj->setPrenom($this->getPrenom());
        $copyObj->setTentativesMdp($this->getTentativesMdp());
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setServiceId($this->getServiceId());
        $copyObj->setRecevoirMail($this->getRecevoirMail());
        $copyObj->setElu($this->getElu());
        $copyObj->setNomFonction($this->getNomFonction());
        $copyObj->setNumTel($this->getNumTel());
        $copyObj->setNumFax($this->getNumFax());
        $copyObj->setTypeComm($this->getTypeComm());
        $copyObj->setAdrPostale($this->getAdrPostale());
        $copyObj->setCivilite($this->getCivilite());
        $copyObj->setAlerteReponseElectronique($this->getAlerteReponseElectronique());
        $copyObj->setAlerteReceptionMainlevee($this->getAlerteReceptionMainlevee());
        $copyObj->setAlerteClotureConsultation($this->getAlerteClotureConsultation());
        $copyObj->setAlerteReceptionMessage($this->getAlerteReceptionMessage());
        $copyObj->setAlertePublicationBoamp($this->getAlertePublicationBoamp());
        $copyObj->setAlerteEchecPublicationBoamp($this->getAlerteEchecPublicationBoamp());
        $copyObj->setAlerteCreationModificationAgent($this->getAlerteCreationModificationAgent());
        $copyObj->setDateCreation($this->getDateCreation());
        $copyObj->setDateModification($this->getDateModification());
        $copyObj->setIdInitial($this->getIdInitial());
        $copyObj->setIdProfilSocleExterne($this->getIdProfilSocleExterne());
        $copyObj->setLieuExecution($this->getLieuExecution());
        $copyObj->setAlerteQuestionEntreprise($this->getAlerteQuestionEntreprise());
        $copyObj->setActif($this->getActif());
        $copyObj->setCodesNuts($this->getCodesNuts());
        $copyObj->setNumCertificat($this->getNumCertificat());
        $copyObj->setAlerteValidationConsultation($this->getAlerteValidationConsultation());
        $copyObj->setAlerteChorus($this->getAlerteChorus());
        $copyObj->setPassword($this->getPassword());
        $copyObj->setCodeTheme($this->getCodeTheme());
        $copyObj->setTentativeRecupMdp($this->getTentativeRecupMdp());
        $copyObj->setDateTentativeRecupMdp($this->getDateTentativeRecupMdp());
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
     * @return CommonAgent Clone of current object.
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
     * @return CommonAgentPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonAgentPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->login = null;
        $this->email = null;
        $this->mdp = null;
        $this->certificat = null;
        $this->nom = null;
        $this->prenom = null;
        $this->tentatives_mdp = null;
        $this->organisme = null;
        $this->service_id = null;
        $this->recevoir_mail = null;
        $this->elu = null;
        $this->nom_fonction = null;
        $this->num_tel = null;
        $this->num_fax = null;
        $this->type_comm = null;
        $this->adr_postale = null;
        $this->civilite = null;
        $this->alerte_reponse_electronique = null;
        $this->alerte_reception_mainlevee = null;
        $this->alerte_cloture_consultation = null;
        $this->alerte_reception_message = null;
        $this->alerte_publication_boamp = null;
        $this->alerte_echec_publication_boamp = null;
        $this->alerte_creation_modification_agent = null;
        $this->date_creation = null;
        $this->date_modification = null;
        $this->id_initial = null;
        $this->id_profil_socle_externe = null;
        $this->lieu_execution = null;
        $this->alerte_question_entreprise = null;
        $this->actif = null;
        $this->codes_nuts = null;
        $this->num_certificat = null;
        $this->alerte_validation_consultation = null;
        $this->alerte_chorus = null;
        $this->password = null;
        $this->code_theme = null;
        $this->tentative_recup_mdp = null;
        $this->date_tentative_recup_mdp = null;
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
        return (string) $this->exportTo(CommonAgentPeer::DEFAULT_STRING_FORMAT);
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
