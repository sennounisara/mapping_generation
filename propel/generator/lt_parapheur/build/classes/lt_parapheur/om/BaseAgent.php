<?php


/**
 * Base class that represents a row from the 'agent' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseAgent extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'AgentPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        AgentPeer
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
     * The value for the id_entite field.
     * @var        int
     */
    protected $id_entite;

    /**
     * The value for the id_commune field.
     * @var        int
     */
    protected $id_commune;

    /**
     * The value for the id_profil_agent field.
     * @var        int
     */
    protected $id_profil_agent;

    /**
     * The value for the login_agent field.
     * @var        string
     */
    protected $login_agent;

    /**
     * The value for the mot_de_passe_agent field.
     * @var        string
     */
    protected $mot_de_passe_agent;

    /**
     * The value for the salt_agent field.
     * @var        string
     */
    protected $salt_agent;

    /**
     * The value for the nom_agent_fr field.
     * @var        string
     */
    protected $nom_agent_fr;

    /**
     * The value for the prenom_agent_fr field.
     * @var        string
     */
    protected $prenom_agent_fr;

    /**
     * The value for the nom_agent_ar field.
     * @var        string
     */
    protected $nom_agent_ar;

    /**
     * The value for the prenom_agent_ar field.
     * @var        string
     */
    protected $prenom_agent_ar;

    /**
     * The value for the email_agent field.
     * @var        string
     */
    protected $email_agent;

    /**
     * The value for the tel_agent field.
     * @var        string
     */
    protected $tel_agent;

    /**
     * The value for the fax_agent field.
     * @var        string
     */
    protected $fax_agent;

    /**
     * The value for the etat_agent field.
     * @var        string
     */
    protected $etat_agent;

    /**
     * The value for the super_agent field.
     * @var        string
     */
    protected $super_agent;

    /**
     * The value for the etat_alerte field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $etat_alerte;

    /**
     * The value for the type_alerte field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $type_alerte;

    /**
     * The value for the signataire field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $signataire;

    /**
     * The value for the date_dernier_acces field.
     * @var        string
     */
    protected $date_dernier_acces;

    /**
     * The value for the id_socle field.
     * @var        int
     */
    protected $id_socle;

    /**
     * The value for the centre_appel field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $centre_appel;

    /**
     * The value for the identifiant_agent_ca field.
     * @var        string
     */
    protected $identifiant_agent_ca;

    /**
     * The value for the type_affectation field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $type_affectation;

    /**
     * The value for the id_pj_signature field.
     * @var        int
     */
    protected $id_pj_signature;

    /**
     * The value for the id_pj_signature_paraphe field.
     * @var        int
     */
    protected $id_pj_signature_paraphe;

    /**
     * The value for the certificat field.
     * @var        string
     */
    protected $certificat;

    /**
     * The value for the identifiant_certificat field.
     * @var        string
     */
    protected $identifiant_certificat;

    /**
     * The value for the jeton_validation field.
     * @var        string
     */
    protected $jeton_validation;

    /**
     * The value for the filigrane field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $filigrane;

    /**
     * The value for the id_version field.
     * @var        int
     */
    protected $id_version;

    /**
     * The value for the version_lu field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $version_lu;

    /**
     * The value for the tentative_mdp field.
     * @var        int
     */
    protected $tentative_mdp;

    /**
     * The value for the date_blocage field.
     * @var        string
     */
    protected $date_blocage;

    /**
     * @var        PropelObjectCollection|TAgentTicket[] Collection to store aggregation of TAgentTicket objects.
     */
    protected $collTAgentTickets;
    protected $collTAgentTicketsPartial;

    /**
     * @var        PropelObjectCollection|TChatbot[] Collection to store aggregation of TChatbot objects.
     */
    protected $collTChatbots;
    protected $collTChatbotsPartial;

    /**
     * @var        PropelObjectCollection|THistoriqueConsultation[] Collection to store aggregation of THistoriqueConsultation objects.
     */
    protected $collTHistoriqueConsultations;
    protected $collTHistoriqueConsultationsPartial;

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
    protected $tAgentTicketsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $tChatbotsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $tHistoriqueConsultationsScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->etat_alerte = '0';
        $this->type_alerte = '0';
        $this->signataire = '0';
        $this->centre_appel = '0';
        $this->type_affectation = '0';
        $this->filigrane = '0';
        $this->version_lu = '0';
    }

    /**
     * Initializes internal state of BaseAgent object.
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
     * Get the [id_entite] column value.
     * 
     * @return int
     */
    public function getIdEntite()
    {

        return $this->id_entite;
    }

    /**
     * Get the [id_commune] column value.
     * 
     * @return int
     */
    public function getIdCommune()
    {

        return $this->id_commune;
    }

    /**
     * Get the [id_profil_agent] column value.
     * 
     * @return int
     */
    public function getIdProfilAgent()
    {

        return $this->id_profil_agent;
    }

    /**
     * Get the [login_agent] column value.
     * 
     * @return string
     */
    public function getLoginAgent()
    {

        return $this->login_agent;
    }

    /**
     * Get the [mot_de_passe_agent] column value.
     * 
     * @return string
     */
    public function getMotDePasseAgent()
    {

        return $this->mot_de_passe_agent;
    }

    /**
     * Get the [salt_agent] column value.
     * 
     * @return string
     */
    public function getSaltAgent()
    {

        return $this->salt_agent;
    }

    /**
     * Get the [nom_agent_fr] column value.
     * 
     * @return string
     */
    public function getNomAgentFr()
    {

        return $this->nom_agent_fr;
    }

    /**
     * Get the [prenom_agent_fr] column value.
     * 
     * @return string
     */
    public function getPrenomAgentFr()
    {

        return $this->prenom_agent_fr;
    }

    /**
     * Get the [nom_agent_ar] column value.
     * 
     * @return string
     */
    public function getNomAgentAr()
    {

        return $this->nom_agent_ar;
    }

    /**
     * Get the [prenom_agent_ar] column value.
     * 
     * @return string
     */
    public function getPrenomAgentAr()
    {

        return $this->prenom_agent_ar;
    }

    /**
     * Get the [email_agent] column value.
     * 
     * @return string
     */
    public function getEmailAgent()
    {

        return $this->email_agent;
    }

    /**
     * Get the [tel_agent] column value.
     * 
     * @return string
     */
    public function getTelAgent()
    {

        return $this->tel_agent;
    }

    /**
     * Get the [fax_agent] column value.
     * 
     * @return string
     */
    public function getFaxAgent()
    {

        return $this->fax_agent;
    }

    /**
     * Get the [etat_agent] column value.
     * 
     * @return string
     */
    public function getEtatAgent()
    {

        return $this->etat_agent;
    }

    /**
     * Get the [super_agent] column value.
     * 
     * @return string
     */
    public function getSuperAgent()
    {

        return $this->super_agent;
    }

    /**
     * Get the [etat_alerte] column value.
     * 
     * @return string
     */
    public function getEtatAlerte()
    {

        return $this->etat_alerte;
    }

    /**
     * Get the [type_alerte] column value.
     * 
     * @return string
     */
    public function getTypeAlerte()
    {

        return $this->type_alerte;
    }

    /**
     * Get the [signataire] column value.
     * 
     * @return string
     */
    public function getSignataire()
    {

        return $this->signataire;
    }

    /**
     * Get the [optionally formatted] temporal [date_dernier_acces] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateDernierAcces($format = 'Y-m-d H:i:s')
    {
        if ($this->date_dernier_acces === null) {
            return null;
        }

        if ($this->date_dernier_acces === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_dernier_acces);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_dernier_acces, true), $x);
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
     * Get the [id_socle] column value.
     * 
     * @return int
     */
    public function getIdSocle()
    {

        return $this->id_socle;
    }

    /**
     * Get the [centre_appel] column value.
     * 
     * @return string
     */
    public function getCentreAppel()
    {

        return $this->centre_appel;
    }

    /**
     * Get the [identifiant_agent_ca] column value.
     * 
     * @return string
     */
    public function getIdentifiantAgentCa()
    {

        return $this->identifiant_agent_ca;
    }

    /**
     * Get the [type_affectation] column value.
     * 
     * @return string
     */
    public function getTypeAffectation()
    {

        return $this->type_affectation;
    }

    /**
     * Get the [id_pj_signature] column value.
     * 
     * @return int
     */
    public function getIdPjSignature()
    {

        return $this->id_pj_signature;
    }

    /**
     * Get the [id_pj_signature_paraphe] column value.
     * 
     * @return int
     */
    public function getIdPjSignatureParaphe()
    {

        return $this->id_pj_signature_paraphe;
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
     * Get the [identifiant_certificat] column value.
     * 
     * @return string
     */
    public function getIdentifiantCertificat()
    {

        return $this->identifiant_certificat;
    }

    /**
     * Get the [jeton_validation] column value.
     * 
     * @return string
     */
    public function getJetonValidation()
    {

        return $this->jeton_validation;
    }

    /**
     * Get the [filigrane] column value.
     * 
     * @return string
     */
    public function getFiligrane()
    {

        return $this->filigrane;
    }

    /**
     * Get the [id_version] column value.
     * 
     * @return int
     */
    public function getIdVersion()
    {

        return $this->id_version;
    }

    /**
     * Get the [version_lu] column value.
     * 
     * @return string
     */
    public function getVersionLu()
    {

        return $this->version_lu;
    }

    /**
     * Get the [tentative_mdp] column value.
     * 
     * @return int
     */
    public function getTentativeMdp()
    {

        return $this->tentative_mdp;
    }

    /**
     * Get the [optionally formatted] temporal [date_blocage] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateBlocage($format = 'Y-m-d H:i:s')
    {
        if ($this->date_blocage === null) {
            return null;
        }

        if ($this->date_blocage === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_blocage);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_blocage, true), $x);
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
     * @return Agent The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = AgentPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [id_entite] column.
     * 
     * @param int $v new value
     * @return Agent The current object (for fluent API support)
     */
    public function setIdEntite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_entite !== $v) {
            $this->id_entite = $v;
            $this->modifiedColumns[] = AgentPeer::ID_ENTITE;
        }


        return $this;
    } // setIdEntite()

    /**
     * Set the value of [id_commune] column.
     * 
     * @param int $v new value
     * @return Agent The current object (for fluent API support)
     */
    public function setIdCommune($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_commune !== $v) {
            $this->id_commune = $v;
            $this->modifiedColumns[] = AgentPeer::ID_COMMUNE;
        }


        return $this;
    } // setIdCommune()

    /**
     * Set the value of [id_profil_agent] column.
     * 
     * @param int $v new value
     * @return Agent The current object (for fluent API support)
     */
    public function setIdProfilAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_profil_agent !== $v) {
            $this->id_profil_agent = $v;
            $this->modifiedColumns[] = AgentPeer::ID_PROFIL_AGENT;
        }


        return $this;
    } // setIdProfilAgent()

    /**
     * Set the value of [login_agent] column.
     * 
     * @param string $v new value
     * @return Agent The current object (for fluent API support)
     */
    public function setLoginAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->login_agent !== $v) {
            $this->login_agent = $v;
            $this->modifiedColumns[] = AgentPeer::LOGIN_AGENT;
        }


        return $this;
    } // setLoginAgent()

    /**
     * Set the value of [mot_de_passe_agent] column.
     * 
     * @param string $v new value
     * @return Agent The current object (for fluent API support)
     */
    public function setMotDePasseAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mot_de_passe_agent !== $v) {
            $this->mot_de_passe_agent = $v;
            $this->modifiedColumns[] = AgentPeer::MOT_DE_PASSE_AGENT;
        }


        return $this;
    } // setMotDePasseAgent()

    /**
     * Set the value of [salt_agent] column.
     * 
     * @param string $v new value
     * @return Agent The current object (for fluent API support)
     */
    public function setSaltAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->salt_agent !== $v) {
            $this->salt_agent = $v;
            $this->modifiedColumns[] = AgentPeer::SALT_AGENT;
        }


        return $this;
    } // setSaltAgent()

    /**
     * Set the value of [nom_agent_fr] column.
     * 
     * @param string $v new value
     * @return Agent The current object (for fluent API support)
     */
    public function setNomAgentFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_agent_fr !== $v) {
            $this->nom_agent_fr = $v;
            $this->modifiedColumns[] = AgentPeer::NOM_AGENT_FR;
        }


        return $this;
    } // setNomAgentFr()

    /**
     * Set the value of [prenom_agent_fr] column.
     * 
     * @param string $v new value
     * @return Agent The current object (for fluent API support)
     */
    public function setPrenomAgentFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prenom_agent_fr !== $v) {
            $this->prenom_agent_fr = $v;
            $this->modifiedColumns[] = AgentPeer::PRENOM_AGENT_FR;
        }


        return $this;
    } // setPrenomAgentFr()

    /**
     * Set the value of [nom_agent_ar] column.
     * 
     * @param string $v new value
     * @return Agent The current object (for fluent API support)
     */
    public function setNomAgentAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_agent_ar !== $v) {
            $this->nom_agent_ar = $v;
            $this->modifiedColumns[] = AgentPeer::NOM_AGENT_AR;
        }


        return $this;
    } // setNomAgentAr()

    /**
     * Set the value of [prenom_agent_ar] column.
     * 
     * @param string $v new value
     * @return Agent The current object (for fluent API support)
     */
    public function setPrenomAgentAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prenom_agent_ar !== $v) {
            $this->prenom_agent_ar = $v;
            $this->modifiedColumns[] = AgentPeer::PRENOM_AGENT_AR;
        }


        return $this;
    } // setPrenomAgentAr()

    /**
     * Set the value of [email_agent] column.
     * 
     * @param string $v new value
     * @return Agent The current object (for fluent API support)
     */
    public function setEmailAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->email_agent !== $v) {
            $this->email_agent = $v;
            $this->modifiedColumns[] = AgentPeer::EMAIL_AGENT;
        }


        return $this;
    } // setEmailAgent()

    /**
     * Set the value of [tel_agent] column.
     * 
     * @param string $v new value
     * @return Agent The current object (for fluent API support)
     */
    public function setTelAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->tel_agent !== $v) {
            $this->tel_agent = $v;
            $this->modifiedColumns[] = AgentPeer::TEL_AGENT;
        }


        return $this;
    } // setTelAgent()

    /**
     * Set the value of [fax_agent] column.
     * 
     * @param string $v new value
     * @return Agent The current object (for fluent API support)
     */
    public function setFaxAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fax_agent !== $v) {
            $this->fax_agent = $v;
            $this->modifiedColumns[] = AgentPeer::FAX_AGENT;
        }


        return $this;
    } // setFaxAgent()

    /**
     * Set the value of [etat_agent] column.
     * 
     * @param string $v new value
     * @return Agent The current object (for fluent API support)
     */
    public function setEtatAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->etat_agent !== $v) {
            $this->etat_agent = $v;
            $this->modifiedColumns[] = AgentPeer::ETAT_AGENT;
        }


        return $this;
    } // setEtatAgent()

    /**
     * Set the value of [super_agent] column.
     * 
     * @param string $v new value
     * @return Agent The current object (for fluent API support)
     */
    public function setSuperAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->super_agent !== $v) {
            $this->super_agent = $v;
            $this->modifiedColumns[] = AgentPeer::SUPER_AGENT;
        }


        return $this;
    } // setSuperAgent()

    /**
     * Set the value of [etat_alerte] column.
     * 
     * @param string $v new value
     * @return Agent The current object (for fluent API support)
     */
    public function setEtatAlerte($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->etat_alerte !== $v) {
            $this->etat_alerte = $v;
            $this->modifiedColumns[] = AgentPeer::ETAT_ALERTE;
        }


        return $this;
    } // setEtatAlerte()

    /**
     * Set the value of [type_alerte] column.
     * 
     * @param string $v new value
     * @return Agent The current object (for fluent API support)
     */
    public function setTypeAlerte($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_alerte !== $v) {
            $this->type_alerte = $v;
            $this->modifiedColumns[] = AgentPeer::TYPE_ALERTE;
        }


        return $this;
    } // setTypeAlerte()

    /**
     * Set the value of [signataire] column.
     * 
     * @param string $v new value
     * @return Agent The current object (for fluent API support)
     */
    public function setSignataire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->signataire !== $v) {
            $this->signataire = $v;
            $this->modifiedColumns[] = AgentPeer::SIGNATAIRE;
        }


        return $this;
    } // setSignataire()

    /**
     * Sets the value of [date_dernier_acces] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Agent The current object (for fluent API support)
     */
    public function setDateDernierAcces($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_dernier_acces !== null || $dt !== null) {
            $currentDateAsString = ($this->date_dernier_acces !== null && $tmpDt = new DateTime($this->date_dernier_acces)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_dernier_acces = $newDateAsString;
                $this->modifiedColumns[] = AgentPeer::DATE_DERNIER_ACCES;
            }
        } // if either are not null


        return $this;
    } // setDateDernierAcces()

    /**
     * Set the value of [id_socle] column.
     * 
     * @param int $v new value
     * @return Agent The current object (for fluent API support)
     */
    public function setIdSocle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_socle !== $v) {
            $this->id_socle = $v;
            $this->modifiedColumns[] = AgentPeer::ID_SOCLE;
        }


        return $this;
    } // setIdSocle()

    /**
     * Set the value of [centre_appel] column.
     * 
     * @param string $v new value
     * @return Agent The current object (for fluent API support)
     */
    public function setCentreAppel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->centre_appel !== $v) {
            $this->centre_appel = $v;
            $this->modifiedColumns[] = AgentPeer::CENTRE_APPEL;
        }


        return $this;
    } // setCentreAppel()

    /**
     * Set the value of [identifiant_agent_ca] column.
     * 
     * @param string $v new value
     * @return Agent The current object (for fluent API support)
     */
    public function setIdentifiantAgentCa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->identifiant_agent_ca !== $v) {
            $this->identifiant_agent_ca = $v;
            $this->modifiedColumns[] = AgentPeer::IDENTIFIANT_AGENT_CA;
        }


        return $this;
    } // setIdentifiantAgentCa()

    /**
     * Set the value of [type_affectation] column.
     * 
     * @param string $v new value
     * @return Agent The current object (for fluent API support)
     */
    public function setTypeAffectation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_affectation !== $v) {
            $this->type_affectation = $v;
            $this->modifiedColumns[] = AgentPeer::TYPE_AFFECTATION;
        }


        return $this;
    } // setTypeAffectation()

    /**
     * Set the value of [id_pj_signature] column.
     * 
     * @param int $v new value
     * @return Agent The current object (for fluent API support)
     */
    public function setIdPjSignature($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_pj_signature !== $v) {
            $this->id_pj_signature = $v;
            $this->modifiedColumns[] = AgentPeer::ID_PJ_SIGNATURE;
        }


        return $this;
    } // setIdPjSignature()

    /**
     * Set the value of [id_pj_signature_paraphe] column.
     * 
     * @param int $v new value
     * @return Agent The current object (for fluent API support)
     */
    public function setIdPjSignatureParaphe($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_pj_signature_paraphe !== $v) {
            $this->id_pj_signature_paraphe = $v;
            $this->modifiedColumns[] = AgentPeer::ID_PJ_SIGNATURE_PARAPHE;
        }


        return $this;
    } // setIdPjSignatureParaphe()

    /**
     * Set the value of [certificat] column.
     * 
     * @param string $v new value
     * @return Agent The current object (for fluent API support)
     */
    public function setCertificat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->certificat !== $v) {
            $this->certificat = $v;
            $this->modifiedColumns[] = AgentPeer::CERTIFICAT;
        }


        return $this;
    } // setCertificat()

    /**
     * Set the value of [identifiant_certificat] column.
     * 
     * @param string $v new value
     * @return Agent The current object (for fluent API support)
     */
    public function setIdentifiantCertificat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->identifiant_certificat !== $v) {
            $this->identifiant_certificat = $v;
            $this->modifiedColumns[] = AgentPeer::IDENTIFIANT_CERTIFICAT;
        }


        return $this;
    } // setIdentifiantCertificat()

    /**
     * Set the value of [jeton_validation] column.
     * 
     * @param string $v new value
     * @return Agent The current object (for fluent API support)
     */
    public function setJetonValidation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->jeton_validation !== $v) {
            $this->jeton_validation = $v;
            $this->modifiedColumns[] = AgentPeer::JETON_VALIDATION;
        }


        return $this;
    } // setJetonValidation()

    /**
     * Set the value of [filigrane] column.
     * 
     * @param string $v new value
     * @return Agent The current object (for fluent API support)
     */
    public function setFiligrane($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->filigrane !== $v) {
            $this->filigrane = $v;
            $this->modifiedColumns[] = AgentPeer::FILIGRANE;
        }


        return $this;
    } // setFiligrane()

    /**
     * Set the value of [id_version] column.
     * 
     * @param int $v new value
     * @return Agent The current object (for fluent API support)
     */
    public function setIdVersion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_version !== $v) {
            $this->id_version = $v;
            $this->modifiedColumns[] = AgentPeer::ID_VERSION;
        }


        return $this;
    } // setIdVersion()

    /**
     * Set the value of [version_lu] column.
     * 
     * @param string $v new value
     * @return Agent The current object (for fluent API support)
     */
    public function setVersionLu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->version_lu !== $v) {
            $this->version_lu = $v;
            $this->modifiedColumns[] = AgentPeer::VERSION_LU;
        }


        return $this;
    } // setVersionLu()

    /**
     * Set the value of [tentative_mdp] column.
     * 
     * @param int $v new value
     * @return Agent The current object (for fluent API support)
     */
    public function setTentativeMdp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tentative_mdp !== $v) {
            $this->tentative_mdp = $v;
            $this->modifiedColumns[] = AgentPeer::TENTATIVE_MDP;
        }


        return $this;
    } // setTentativeMdp()

    /**
     * Sets the value of [date_blocage] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Agent The current object (for fluent API support)
     */
    public function setDateBlocage($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_blocage !== null || $dt !== null) {
            $currentDateAsString = ($this->date_blocage !== null && $tmpDt = new DateTime($this->date_blocage)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_blocage = $newDateAsString;
                $this->modifiedColumns[] = AgentPeer::DATE_BLOCAGE;
            }
        } // if either are not null


        return $this;
    } // setDateBlocage()

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
            if ($this->etat_alerte !== '0') {
                return false;
            }

            if ($this->type_alerte !== '0') {
                return false;
            }

            if ($this->signataire !== '0') {
                return false;
            }

            if ($this->centre_appel !== '0') {
                return false;
            }

            if ($this->type_affectation !== '0') {
                return false;
            }

            if ($this->filigrane !== '0') {
                return false;
            }

            if ($this->version_lu !== '0') {
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
            $this->id_entite = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->id_commune = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->id_profil_agent = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->login_agent = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->mot_de_passe_agent = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->salt_agent = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->nom_agent_fr = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->prenom_agent_fr = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->nom_agent_ar = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->prenom_agent_ar = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->email_agent = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->tel_agent = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->fax_agent = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->etat_agent = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->super_agent = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->etat_alerte = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->type_alerte = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->signataire = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->date_dernier_acces = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->id_socle = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
            $this->centre_appel = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->identifiant_agent_ca = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->type_affectation = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->id_pj_signature = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
            $this->id_pj_signature_paraphe = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
            $this->certificat = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->identifiant_certificat = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->jeton_validation = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->filigrane = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->id_version = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
            $this->version_lu = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->tentative_mdp = ($row[$startcol + 32] !== null) ? (int) $row[$startcol + 32] : null;
            $this->date_blocage = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 34; // 34 = AgentPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Agent object", $e);
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
            $con = Propel::getConnection(AgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = AgentPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collTAgentTickets = null;

            $this->collTChatbots = null;

            $this->collTHistoriqueConsultations = null;

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
            $con = Propel::getConnection(AgentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = AgentQuery::create()
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
            $con = Propel::getConnection(AgentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                AgentPeer::addInstanceToPool($this);
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

            if ($this->tAgentTicketsScheduledForDeletion !== null) {
                if (!$this->tAgentTicketsScheduledForDeletion->isEmpty()) {
                    foreach ($this->tAgentTicketsScheduledForDeletion as $tAgentTicket) {
                        // need to save related object because we set the relation to null
                        $tAgentTicket->save($con);
                    }
                    $this->tAgentTicketsScheduledForDeletion = null;
                }
            }

            if ($this->collTAgentTickets !== null) {
                foreach ($this->collTAgentTickets as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->tChatbotsScheduledForDeletion !== null) {
                if (!$this->tChatbotsScheduledForDeletion->isEmpty()) {
                    foreach ($this->tChatbotsScheduledForDeletion as $tChatbot) {
                        // need to save related object because we set the relation to null
                        $tChatbot->save($con);
                    }
                    $this->tChatbotsScheduledForDeletion = null;
                }
            }

            if ($this->collTChatbots !== null) {
                foreach ($this->collTChatbots as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->tHistoriqueConsultationsScheduledForDeletion !== null) {
                if (!$this->tHistoriqueConsultationsScheduledForDeletion->isEmpty()) {
                    foreach ($this->tHistoriqueConsultationsScheduledForDeletion as $tHistoriqueConsultation) {
                        // need to save related object because we set the relation to null
                        $tHistoriqueConsultation->save($con);
                    }
                    $this->tHistoriqueConsultationsScheduledForDeletion = null;
                }
            }

            if ($this->collTHistoriqueConsultations !== null) {
                foreach ($this->collTHistoriqueConsultations as $referrerFK) {
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

        $this->modifiedColumns[] = AgentPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . AgentPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(AgentPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`ID`';
        }
        if ($this->isColumnModified(AgentPeer::ID_ENTITE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ENTITE`';
        }
        if ($this->isColumnModified(AgentPeer::ID_COMMUNE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_COMMUNE`';
        }
        if ($this->isColumnModified(AgentPeer::ID_PROFIL_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`ID_PROFIL_AGENT`';
        }
        if ($this->isColumnModified(AgentPeer::LOGIN_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`LOGIN_AGENT`';
        }
        if ($this->isColumnModified(AgentPeer::MOT_DE_PASSE_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`MOT_DE_PASSE_AGENT`';
        }
        if ($this->isColumnModified(AgentPeer::SALT_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`SALT_AGENT`';
        }
        if ($this->isColumnModified(AgentPeer::NOM_AGENT_FR)) {
            $modifiedColumns[':p' . $index++]  = '`NOM_AGENT_FR`';
        }
        if ($this->isColumnModified(AgentPeer::PRENOM_AGENT_FR)) {
            $modifiedColumns[':p' . $index++]  = '`PRENOM_AGENT_FR`';
        }
        if ($this->isColumnModified(AgentPeer::NOM_AGENT_AR)) {
            $modifiedColumns[':p' . $index++]  = '`NOM_AGENT_AR`';
        }
        if ($this->isColumnModified(AgentPeer::PRENOM_AGENT_AR)) {
            $modifiedColumns[':p' . $index++]  = '`PRENOM_AGENT_AR`';
        }
        if ($this->isColumnModified(AgentPeer::EMAIL_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`EMAIL_AGENT`';
        }
        if ($this->isColumnModified(AgentPeer::TEL_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`TEL_AGENT`';
        }
        if ($this->isColumnModified(AgentPeer::FAX_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`FAX_AGENT`';
        }
        if ($this->isColumnModified(AgentPeer::ETAT_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`ETAT_AGENT`';
        }
        if ($this->isColumnModified(AgentPeer::SUPER_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`SUPER_AGENT`';
        }
        if ($this->isColumnModified(AgentPeer::ETAT_ALERTE)) {
            $modifiedColumns[':p' . $index++]  = '`ETAT_ALERTE`';
        }
        if ($this->isColumnModified(AgentPeer::TYPE_ALERTE)) {
            $modifiedColumns[':p' . $index++]  = '`TYPE_ALERTE`';
        }
        if ($this->isColumnModified(AgentPeer::SIGNATAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`SIGNATAIRE`';
        }
        if ($this->isColumnModified(AgentPeer::DATE_DERNIER_ACCES)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_DERNIER_ACCES`';
        }
        if ($this->isColumnModified(AgentPeer::ID_SOCLE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_SOCLE`';
        }
        if ($this->isColumnModified(AgentPeer::CENTRE_APPEL)) {
            $modifiedColumns[':p' . $index++]  = '`CENTRE_APPEL`';
        }
        if ($this->isColumnModified(AgentPeer::IDENTIFIANT_AGENT_CA)) {
            $modifiedColumns[':p' . $index++]  = '`IDENTIFIANT_AGENT_CA`';
        }
        if ($this->isColumnModified(AgentPeer::TYPE_AFFECTATION)) {
            $modifiedColumns[':p' . $index++]  = '`TYPE_AFFECTATION`';
        }
        if ($this->isColumnModified(AgentPeer::ID_PJ_SIGNATURE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_PJ_SIGNATURE`';
        }
        if ($this->isColumnModified(AgentPeer::ID_PJ_SIGNATURE_PARAPHE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_PJ_SIGNATURE_PARAPHE`';
        }
        if ($this->isColumnModified(AgentPeer::CERTIFICAT)) {
            $modifiedColumns[':p' . $index++]  = '`CERTIFICAT`';
        }
        if ($this->isColumnModified(AgentPeer::IDENTIFIANT_CERTIFICAT)) {
            $modifiedColumns[':p' . $index++]  = '`IDENTIFIANT_CERTIFICAT`';
        }
        if ($this->isColumnModified(AgentPeer::JETON_VALIDATION)) {
            $modifiedColumns[':p' . $index++]  = '`JETON_VALIDATION`';
        }
        if ($this->isColumnModified(AgentPeer::FILIGRANE)) {
            $modifiedColumns[':p' . $index++]  = '`FILIGRANE`';
        }
        if ($this->isColumnModified(AgentPeer::ID_VERSION)) {
            $modifiedColumns[':p' . $index++]  = '`ID_VERSION`';
        }
        if ($this->isColumnModified(AgentPeer::VERSION_LU)) {
            $modifiedColumns[':p' . $index++]  = '`VERSION_LU`';
        }
        if ($this->isColumnModified(AgentPeer::TENTATIVE_MDP)) {
            $modifiedColumns[':p' . $index++]  = '`TENTATIVE_MDP`';
        }
        if ($this->isColumnModified(AgentPeer::DATE_BLOCAGE)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_BLOCAGE`';
        }

        $sql = sprintf(
            'INSERT INTO `agent` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`ID`':						
                        $stmt->bindValue($identifier, $this->id, PDO::PARAM_INT);
                        break;
                    case '`ID_ENTITE`':						
                        $stmt->bindValue($identifier, $this->id_entite, PDO::PARAM_INT);
                        break;
                    case '`ID_COMMUNE`':						
                        $stmt->bindValue($identifier, $this->id_commune, PDO::PARAM_INT);
                        break;
                    case '`ID_PROFIL_AGENT`':						
                        $stmt->bindValue($identifier, $this->id_profil_agent, PDO::PARAM_INT);
                        break;
                    case '`LOGIN_AGENT`':						
                        $stmt->bindValue($identifier, $this->login_agent, PDO::PARAM_STR);
                        break;
                    case '`MOT_DE_PASSE_AGENT`':						
                        $stmt->bindValue($identifier, $this->mot_de_passe_agent, PDO::PARAM_STR);
                        break;
                    case '`SALT_AGENT`':						
                        $stmt->bindValue($identifier, $this->salt_agent, PDO::PARAM_STR);
                        break;
                    case '`NOM_AGENT_FR`':						
                        $stmt->bindValue($identifier, $this->nom_agent_fr, PDO::PARAM_STR);
                        break;
                    case '`PRENOM_AGENT_FR`':						
                        $stmt->bindValue($identifier, $this->prenom_agent_fr, PDO::PARAM_STR);
                        break;
                    case '`NOM_AGENT_AR`':						
                        $stmt->bindValue($identifier, $this->nom_agent_ar, PDO::PARAM_STR);
                        break;
                    case '`PRENOM_AGENT_AR`':						
                        $stmt->bindValue($identifier, $this->prenom_agent_ar, PDO::PARAM_STR);
                        break;
                    case '`EMAIL_AGENT`':						
                        $stmt->bindValue($identifier, $this->email_agent, PDO::PARAM_STR);
                        break;
                    case '`TEL_AGENT`':						
                        $stmt->bindValue($identifier, $this->tel_agent, PDO::PARAM_STR);
                        break;
                    case '`FAX_AGENT`':						
                        $stmt->bindValue($identifier, $this->fax_agent, PDO::PARAM_STR);
                        break;
                    case '`ETAT_AGENT`':						
                        $stmt->bindValue($identifier, $this->etat_agent, PDO::PARAM_STR);
                        break;
                    case '`SUPER_AGENT`':						
                        $stmt->bindValue($identifier, $this->super_agent, PDO::PARAM_STR);
                        break;
                    case '`ETAT_ALERTE`':						
                        $stmt->bindValue($identifier, $this->etat_alerte, PDO::PARAM_STR);
                        break;
                    case '`TYPE_ALERTE`':						
                        $stmt->bindValue($identifier, $this->type_alerte, PDO::PARAM_STR);
                        break;
                    case '`SIGNATAIRE`':						
                        $stmt->bindValue($identifier, $this->signataire, PDO::PARAM_STR);
                        break;
                    case '`DATE_DERNIER_ACCES`':						
                        $stmt->bindValue($identifier, $this->date_dernier_acces, PDO::PARAM_STR);
                        break;
                    case '`ID_SOCLE`':						
                        $stmt->bindValue($identifier, $this->id_socle, PDO::PARAM_INT);
                        break;
                    case '`CENTRE_APPEL`':						
                        $stmt->bindValue($identifier, $this->centre_appel, PDO::PARAM_STR);
                        break;
                    case '`IDENTIFIANT_AGENT_CA`':						
                        $stmt->bindValue($identifier, $this->identifiant_agent_ca, PDO::PARAM_STR);
                        break;
                    case '`TYPE_AFFECTATION`':						
                        $stmt->bindValue($identifier, $this->type_affectation, PDO::PARAM_STR);
                        break;
                    case '`ID_PJ_SIGNATURE`':						
                        $stmt->bindValue($identifier, $this->id_pj_signature, PDO::PARAM_INT);
                        break;
                    case '`ID_PJ_SIGNATURE_PARAPHE`':						
                        $stmt->bindValue($identifier, $this->id_pj_signature_paraphe, PDO::PARAM_INT);
                        break;
                    case '`CERTIFICAT`':						
                        $stmt->bindValue($identifier, $this->certificat, PDO::PARAM_STR);
                        break;
                    case '`IDENTIFIANT_CERTIFICAT`':						
                        $stmt->bindValue($identifier, $this->identifiant_certificat, PDO::PARAM_STR);
                        break;
                    case '`JETON_VALIDATION`':						
                        $stmt->bindValue($identifier, $this->jeton_validation, PDO::PARAM_STR);
                        break;
                    case '`FILIGRANE`':						
                        $stmt->bindValue($identifier, $this->filigrane, PDO::PARAM_STR);
                        break;
                    case '`ID_VERSION`':						
                        $stmt->bindValue($identifier, $this->id_version, PDO::PARAM_INT);
                        break;
                    case '`VERSION_LU`':						
                        $stmt->bindValue($identifier, $this->version_lu, PDO::PARAM_STR);
                        break;
                    case '`TENTATIVE_MDP`':						
                        $stmt->bindValue($identifier, $this->tentative_mdp, PDO::PARAM_INT);
                        break;
                    case '`DATE_BLOCAGE`':						
                        $stmt->bindValue($identifier, $this->date_blocage, PDO::PARAM_STR);
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


            if (($retval = AgentPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collTAgentTickets !== null) {
                    foreach ($this->collTAgentTickets as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collTChatbots !== null) {
                    foreach ($this->collTChatbots as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collTHistoriqueConsultations !== null) {
                    foreach ($this->collTHistoriqueConsultations as $referrerFK) {
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
        $pos = AgentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdEntite();
                break;
            case 2:
                return $this->getIdCommune();
                break;
            case 3:
                return $this->getIdProfilAgent();
                break;
            case 4:
                return $this->getLoginAgent();
                break;
            case 5:
                return $this->getMotDePasseAgent();
                break;
            case 6:
                return $this->getSaltAgent();
                break;
            case 7:
                return $this->getNomAgentFr();
                break;
            case 8:
                return $this->getPrenomAgentFr();
                break;
            case 9:
                return $this->getNomAgentAr();
                break;
            case 10:
                return $this->getPrenomAgentAr();
                break;
            case 11:
                return $this->getEmailAgent();
                break;
            case 12:
                return $this->getTelAgent();
                break;
            case 13:
                return $this->getFaxAgent();
                break;
            case 14:
                return $this->getEtatAgent();
                break;
            case 15:
                return $this->getSuperAgent();
                break;
            case 16:
                return $this->getEtatAlerte();
                break;
            case 17:
                return $this->getTypeAlerte();
                break;
            case 18:
                return $this->getSignataire();
                break;
            case 19:
                return $this->getDateDernierAcces();
                break;
            case 20:
                return $this->getIdSocle();
                break;
            case 21:
                return $this->getCentreAppel();
                break;
            case 22:
                return $this->getIdentifiantAgentCa();
                break;
            case 23:
                return $this->getTypeAffectation();
                break;
            case 24:
                return $this->getIdPjSignature();
                break;
            case 25:
                return $this->getIdPjSignatureParaphe();
                break;
            case 26:
                return $this->getCertificat();
                break;
            case 27:
                return $this->getIdentifiantCertificat();
                break;
            case 28:
                return $this->getJetonValidation();
                break;
            case 29:
                return $this->getFiligrane();
                break;
            case 30:
                return $this->getIdVersion();
                break;
            case 31:
                return $this->getVersionLu();
                break;
            case 32:
                return $this->getTentativeMdp();
                break;
            case 33:
                return $this->getDateBlocage();
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
        if (isset($alreadyDumpedObjects['Agent'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Agent'][$this->getPrimaryKey()] = true;
        $keys = AgentPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getIdEntite(),
            $keys[2] => $this->getIdCommune(),
            $keys[3] => $this->getIdProfilAgent(),
            $keys[4] => $this->getLoginAgent(),
            $keys[5] => $this->getMotDePasseAgent(),
            $keys[6] => $this->getSaltAgent(),
            $keys[7] => $this->getNomAgentFr(),
            $keys[8] => $this->getPrenomAgentFr(),
            $keys[9] => $this->getNomAgentAr(),
            $keys[10] => $this->getPrenomAgentAr(),
            $keys[11] => $this->getEmailAgent(),
            $keys[12] => $this->getTelAgent(),
            $keys[13] => $this->getFaxAgent(),
            $keys[14] => $this->getEtatAgent(),
            $keys[15] => $this->getSuperAgent(),
            $keys[16] => $this->getEtatAlerte(),
            $keys[17] => $this->getTypeAlerte(),
            $keys[18] => $this->getSignataire(),
            $keys[19] => $this->getDateDernierAcces(),
            $keys[20] => $this->getIdSocle(),
            $keys[21] => $this->getCentreAppel(),
            $keys[22] => $this->getIdentifiantAgentCa(),
            $keys[23] => $this->getTypeAffectation(),
            $keys[24] => $this->getIdPjSignature(),
            $keys[25] => $this->getIdPjSignatureParaphe(),
            $keys[26] => $this->getCertificat(),
            $keys[27] => $this->getIdentifiantCertificat(),
            $keys[28] => $this->getJetonValidation(),
            $keys[29] => $this->getFiligrane(),
            $keys[30] => $this->getIdVersion(),
            $keys[31] => $this->getVersionLu(),
            $keys[32] => $this->getTentativeMdp(),
            $keys[33] => $this->getDateBlocage(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->collTAgentTickets) {
                $result['TAgentTickets'] = $this->collTAgentTickets->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collTChatbots) {
                $result['TChatbots'] = $this->collTChatbots->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collTHistoriqueConsultations) {
                $result['THistoriqueConsultations'] = $this->collTHistoriqueConsultations->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = AgentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdEntite($value);
                break;
            case 2:
                $this->setIdCommune($value);
                break;
            case 3:
                $this->setIdProfilAgent($value);
                break;
            case 4:
                $this->setLoginAgent($value);
                break;
            case 5:
                $this->setMotDePasseAgent($value);
                break;
            case 6:
                $this->setSaltAgent($value);
                break;
            case 7:
                $this->setNomAgentFr($value);
                break;
            case 8:
                $this->setPrenomAgentFr($value);
                break;
            case 9:
                $this->setNomAgentAr($value);
                break;
            case 10:
                $this->setPrenomAgentAr($value);
                break;
            case 11:
                $this->setEmailAgent($value);
                break;
            case 12:
                $this->setTelAgent($value);
                break;
            case 13:
                $this->setFaxAgent($value);
                break;
            case 14:
                $this->setEtatAgent($value);
                break;
            case 15:
                $this->setSuperAgent($value);
                break;
            case 16:
                $this->setEtatAlerte($value);
                break;
            case 17:
                $this->setTypeAlerte($value);
                break;
            case 18:
                $this->setSignataire($value);
                break;
            case 19:
                $this->setDateDernierAcces($value);
                break;
            case 20:
                $this->setIdSocle($value);
                break;
            case 21:
                $this->setCentreAppel($value);
                break;
            case 22:
                $this->setIdentifiantAgentCa($value);
                break;
            case 23:
                $this->setTypeAffectation($value);
                break;
            case 24:
                $this->setIdPjSignature($value);
                break;
            case 25:
                $this->setIdPjSignatureParaphe($value);
                break;
            case 26:
                $this->setCertificat($value);
                break;
            case 27:
                $this->setIdentifiantCertificat($value);
                break;
            case 28:
                $this->setJetonValidation($value);
                break;
            case 29:
                $this->setFiligrane($value);
                break;
            case 30:
                $this->setIdVersion($value);
                break;
            case 31:
                $this->setVersionLu($value);
                break;
            case 32:
                $this->setTentativeMdp($value);
                break;
            case 33:
                $this->setDateBlocage($value);
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
        $keys = AgentPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdEntite($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdCommune($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdProfilAgent($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setLoginAgent($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setMotDePasseAgent($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setSaltAgent($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setNomAgentFr($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setPrenomAgentFr($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setNomAgentAr($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setPrenomAgentAr($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setEmailAgent($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setTelAgent($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setFaxAgent($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setEtatAgent($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setSuperAgent($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setEtatAlerte($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setTypeAlerte($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setSignataire($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setDateDernierAcces($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setIdSocle($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setCentreAppel($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setIdentifiantAgentCa($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setTypeAffectation($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setIdPjSignature($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setIdPjSignatureParaphe($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setCertificat($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setIdentifiantCertificat($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setJetonValidation($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setFiligrane($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setIdVersion($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setVersionLu($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setTentativeMdp($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setDateBlocage($arr[$keys[33]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(AgentPeer::DATABASE_NAME);

        if ($this->isColumnModified(AgentPeer::ID)) $criteria->add(AgentPeer::ID, $this->id);
        if ($this->isColumnModified(AgentPeer::ID_ENTITE)) $criteria->add(AgentPeer::ID_ENTITE, $this->id_entite);
        if ($this->isColumnModified(AgentPeer::ID_COMMUNE)) $criteria->add(AgentPeer::ID_COMMUNE, $this->id_commune);
        if ($this->isColumnModified(AgentPeer::ID_PROFIL_AGENT)) $criteria->add(AgentPeer::ID_PROFIL_AGENT, $this->id_profil_agent);
        if ($this->isColumnModified(AgentPeer::LOGIN_AGENT)) $criteria->add(AgentPeer::LOGIN_AGENT, $this->login_agent);
        if ($this->isColumnModified(AgentPeer::MOT_DE_PASSE_AGENT)) $criteria->add(AgentPeer::MOT_DE_PASSE_AGENT, $this->mot_de_passe_agent);
        if ($this->isColumnModified(AgentPeer::SALT_AGENT)) $criteria->add(AgentPeer::SALT_AGENT, $this->salt_agent);
        if ($this->isColumnModified(AgentPeer::NOM_AGENT_FR)) $criteria->add(AgentPeer::NOM_AGENT_FR, $this->nom_agent_fr);
        if ($this->isColumnModified(AgentPeer::PRENOM_AGENT_FR)) $criteria->add(AgentPeer::PRENOM_AGENT_FR, $this->prenom_agent_fr);
        if ($this->isColumnModified(AgentPeer::NOM_AGENT_AR)) $criteria->add(AgentPeer::NOM_AGENT_AR, $this->nom_agent_ar);
        if ($this->isColumnModified(AgentPeer::PRENOM_AGENT_AR)) $criteria->add(AgentPeer::PRENOM_AGENT_AR, $this->prenom_agent_ar);
        if ($this->isColumnModified(AgentPeer::EMAIL_AGENT)) $criteria->add(AgentPeer::EMAIL_AGENT, $this->email_agent);
        if ($this->isColumnModified(AgentPeer::TEL_AGENT)) $criteria->add(AgentPeer::TEL_AGENT, $this->tel_agent);
        if ($this->isColumnModified(AgentPeer::FAX_AGENT)) $criteria->add(AgentPeer::FAX_AGENT, $this->fax_agent);
        if ($this->isColumnModified(AgentPeer::ETAT_AGENT)) $criteria->add(AgentPeer::ETAT_AGENT, $this->etat_agent);
        if ($this->isColumnModified(AgentPeer::SUPER_AGENT)) $criteria->add(AgentPeer::SUPER_AGENT, $this->super_agent);
        if ($this->isColumnModified(AgentPeer::ETAT_ALERTE)) $criteria->add(AgentPeer::ETAT_ALERTE, $this->etat_alerte);
        if ($this->isColumnModified(AgentPeer::TYPE_ALERTE)) $criteria->add(AgentPeer::TYPE_ALERTE, $this->type_alerte);
        if ($this->isColumnModified(AgentPeer::SIGNATAIRE)) $criteria->add(AgentPeer::SIGNATAIRE, $this->signataire);
        if ($this->isColumnModified(AgentPeer::DATE_DERNIER_ACCES)) $criteria->add(AgentPeer::DATE_DERNIER_ACCES, $this->date_dernier_acces);
        if ($this->isColumnModified(AgentPeer::ID_SOCLE)) $criteria->add(AgentPeer::ID_SOCLE, $this->id_socle);
        if ($this->isColumnModified(AgentPeer::CENTRE_APPEL)) $criteria->add(AgentPeer::CENTRE_APPEL, $this->centre_appel);
        if ($this->isColumnModified(AgentPeer::IDENTIFIANT_AGENT_CA)) $criteria->add(AgentPeer::IDENTIFIANT_AGENT_CA, $this->identifiant_agent_ca);
        if ($this->isColumnModified(AgentPeer::TYPE_AFFECTATION)) $criteria->add(AgentPeer::TYPE_AFFECTATION, $this->type_affectation);
        if ($this->isColumnModified(AgentPeer::ID_PJ_SIGNATURE)) $criteria->add(AgentPeer::ID_PJ_SIGNATURE, $this->id_pj_signature);
        if ($this->isColumnModified(AgentPeer::ID_PJ_SIGNATURE_PARAPHE)) $criteria->add(AgentPeer::ID_PJ_SIGNATURE_PARAPHE, $this->id_pj_signature_paraphe);
        if ($this->isColumnModified(AgentPeer::CERTIFICAT)) $criteria->add(AgentPeer::CERTIFICAT, $this->certificat);
        if ($this->isColumnModified(AgentPeer::IDENTIFIANT_CERTIFICAT)) $criteria->add(AgentPeer::IDENTIFIANT_CERTIFICAT, $this->identifiant_certificat);
        if ($this->isColumnModified(AgentPeer::JETON_VALIDATION)) $criteria->add(AgentPeer::JETON_VALIDATION, $this->jeton_validation);
        if ($this->isColumnModified(AgentPeer::FILIGRANE)) $criteria->add(AgentPeer::FILIGRANE, $this->filigrane);
        if ($this->isColumnModified(AgentPeer::ID_VERSION)) $criteria->add(AgentPeer::ID_VERSION, $this->id_version);
        if ($this->isColumnModified(AgentPeer::VERSION_LU)) $criteria->add(AgentPeer::VERSION_LU, $this->version_lu);
        if ($this->isColumnModified(AgentPeer::TENTATIVE_MDP)) $criteria->add(AgentPeer::TENTATIVE_MDP, $this->tentative_mdp);
        if ($this->isColumnModified(AgentPeer::DATE_BLOCAGE)) $criteria->add(AgentPeer::DATE_BLOCAGE, $this->date_blocage);

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
        $criteria = new Criteria(AgentPeer::DATABASE_NAME);
        $criteria->add(AgentPeer::ID, $this->id);

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
     * @param object $copyObj An object of Agent (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdEntite($this->getIdEntite());
        $copyObj->setIdCommune($this->getIdCommune());
        $copyObj->setIdProfilAgent($this->getIdProfilAgent());
        $copyObj->setLoginAgent($this->getLoginAgent());
        $copyObj->setMotDePasseAgent($this->getMotDePasseAgent());
        $copyObj->setSaltAgent($this->getSaltAgent());
        $copyObj->setNomAgentFr($this->getNomAgentFr());
        $copyObj->setPrenomAgentFr($this->getPrenomAgentFr());
        $copyObj->setNomAgentAr($this->getNomAgentAr());
        $copyObj->setPrenomAgentAr($this->getPrenomAgentAr());
        $copyObj->setEmailAgent($this->getEmailAgent());
        $copyObj->setTelAgent($this->getTelAgent());
        $copyObj->setFaxAgent($this->getFaxAgent());
        $copyObj->setEtatAgent($this->getEtatAgent());
        $copyObj->setSuperAgent($this->getSuperAgent());
        $copyObj->setEtatAlerte($this->getEtatAlerte());
        $copyObj->setTypeAlerte($this->getTypeAlerte());
        $copyObj->setSignataire($this->getSignataire());
        $copyObj->setDateDernierAcces($this->getDateDernierAcces());
        $copyObj->setIdSocle($this->getIdSocle());
        $copyObj->setCentreAppel($this->getCentreAppel());
        $copyObj->setIdentifiantAgentCa($this->getIdentifiantAgentCa());
        $copyObj->setTypeAffectation($this->getTypeAffectation());
        $copyObj->setIdPjSignature($this->getIdPjSignature());
        $copyObj->setIdPjSignatureParaphe($this->getIdPjSignatureParaphe());
        $copyObj->setCertificat($this->getCertificat());
        $copyObj->setIdentifiantCertificat($this->getIdentifiantCertificat());
        $copyObj->setJetonValidation($this->getJetonValidation());
        $copyObj->setFiligrane($this->getFiligrane());
        $copyObj->setIdVersion($this->getIdVersion());
        $copyObj->setVersionLu($this->getVersionLu());
        $copyObj->setTentativeMdp($this->getTentativeMdp());
        $copyObj->setDateBlocage($this->getDateBlocage());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getTAgentTickets() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addTAgentTicket($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getTChatbots() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addTChatbot($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getTHistoriqueConsultations() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addTHistoriqueConsultation($relObj->copy($deepCopy));
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
     * @return Agent Clone of current object.
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
     * @return AgentPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new AgentPeer();
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
        if ('TAgentTicket' == $relationName) {
            $this->initTAgentTickets();
        }
        if ('TChatbot' == $relationName) {
            $this->initTChatbots();
        }
        if ('THistoriqueConsultation' == $relationName) {
            $this->initTHistoriqueConsultations();
        }
    }

    /**
     * Clears out the collTAgentTickets collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Agent The current object (for fluent API support)
     * @see        addTAgentTickets()
     */
    public function clearTAgentTickets()
    {
        $this->collTAgentTickets = null; // important to set this to null since that means it is uninitialized
        $this->collTAgentTicketsPartial = null;

        return $this;
    }

    /**
     * reset is the collTAgentTickets collection loaded partially
     *
     * @return void
     */
    public function resetPartialTAgentTickets($v = true)
    {
        $this->collTAgentTicketsPartial = $v;
    }

    /**
     * Initializes the collTAgentTickets collection.
     *
     * By default this just sets the collTAgentTickets collection to an empty array (like clearcollTAgentTickets());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initTAgentTickets($overrideExisting = true)
    {
        if (null !== $this->collTAgentTickets && !$overrideExisting) {
            return;
        }
        $this->collTAgentTickets = new PropelObjectCollection();
        $this->collTAgentTickets->setModel('TAgentTicket');
    }

    /**
     * Gets an array of TAgentTicket objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Agent is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|TAgentTicket[] List of TAgentTicket objects
     * @throws PropelException
     */
    public function getTAgentTickets($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collTAgentTicketsPartial && !$this->isNew();
        if (null === $this->collTAgentTickets || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collTAgentTickets) {
                // return empty collection
                $this->initTAgentTickets();
            } else {
                $collTAgentTickets = TAgentTicketQuery::create(null, $criteria)
                    ->filterByAgent($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collTAgentTicketsPartial && count($collTAgentTickets)) {
                      $this->initTAgentTickets(false);

                      foreach ($collTAgentTickets as $obj) {
                        if (false == $this->collTAgentTickets->contains($obj)) {
                          $this->collTAgentTickets->append($obj);
                        }
                      }

                      $this->collTAgentTicketsPartial = true;
                    }

                    $collTAgentTickets->getInternalIterator()->rewind();

                    return $collTAgentTickets;
                }

                if ($partial && $this->collTAgentTickets) {
                    foreach ($this->collTAgentTickets as $obj) {
                        if ($obj->isNew()) {
                            $collTAgentTickets[] = $obj;
                        }
                    }
                }

                $this->collTAgentTickets = $collTAgentTickets;
                $this->collTAgentTicketsPartial = false;
            }
        }

        return $this->collTAgentTickets;
    }

    /**
     * Sets a collection of TAgentTicket objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $tAgentTickets A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Agent The current object (for fluent API support)
     */
    public function setTAgentTickets(PropelCollection $tAgentTickets, PropelPDO $con = null)
    {
        $tAgentTicketsToDelete = $this->getTAgentTickets(new Criteria(), $con)->diff($tAgentTickets);


        $this->tAgentTicketsScheduledForDeletion = $tAgentTicketsToDelete;

        foreach ($tAgentTicketsToDelete as $tAgentTicketRemoved) {
            $tAgentTicketRemoved->setAgent(null);
        }

        $this->collTAgentTickets = null;
        foreach ($tAgentTickets as $tAgentTicket) {
            $this->addTAgentTicket($tAgentTicket);
        }

        $this->collTAgentTickets = $tAgentTickets;
        $this->collTAgentTicketsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related TAgentTicket objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related TAgentTicket objects.
     * @throws PropelException
     */
    public function countTAgentTickets(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collTAgentTicketsPartial && !$this->isNew();
        if (null === $this->collTAgentTickets || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collTAgentTickets) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getTAgentTickets());
            }
            $query = TAgentTicketQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByAgent($this)
                ->count($con);
        }

        return count($this->collTAgentTickets);
    }

    /**
     * Method called to associate a TAgentTicket object to this object
     * through the TAgentTicket foreign key attribute.
     *
     * @param   TAgentTicket $l TAgentTicket
     * @return Agent The current object (for fluent API support)
     */
    public function addTAgentTicket(TAgentTicket $l)
    {
        if ($this->collTAgentTickets === null) {
            $this->initTAgentTickets();
            $this->collTAgentTicketsPartial = true;
        }
        if (!in_array($l, $this->collTAgentTickets->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddTAgentTicket($l);
        }

        return $this;
    }

    /**
     * @param	TAgentTicket $tAgentTicket The tAgentTicket object to add.
     */
    protected function doAddTAgentTicket($tAgentTicket)
    {
        $this->collTAgentTickets[]= $tAgentTicket;
        $tAgentTicket->setAgent($this);
    }

    /**
     * @param	TAgentTicket $tAgentTicket The tAgentTicket object to remove.
     * @return Agent The current object (for fluent API support)
     */
    public function removeTAgentTicket($tAgentTicket)
    {
        if ($this->getTAgentTickets()->contains($tAgentTicket)) {
            $this->collTAgentTickets->remove($this->collTAgentTickets->search($tAgentTicket));
            if (null === $this->tAgentTicketsScheduledForDeletion) {
                $this->tAgentTicketsScheduledForDeletion = clone $this->collTAgentTickets;
                $this->tAgentTicketsScheduledForDeletion->clear();
            }
            $this->tAgentTicketsScheduledForDeletion[]= clone $tAgentTicket;
            $tAgentTicket->setAgent(null);
        }

        return $this;
    }

    /**
     * Clears out the collTChatbots collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Agent The current object (for fluent API support)
     * @see        addTChatbots()
     */
    public function clearTChatbots()
    {
        $this->collTChatbots = null; // important to set this to null since that means it is uninitialized
        $this->collTChatbotsPartial = null;

        return $this;
    }

    /**
     * reset is the collTChatbots collection loaded partially
     *
     * @return void
     */
    public function resetPartialTChatbots($v = true)
    {
        $this->collTChatbotsPartial = $v;
    }

    /**
     * Initializes the collTChatbots collection.
     *
     * By default this just sets the collTChatbots collection to an empty array (like clearcollTChatbots());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initTChatbots($overrideExisting = true)
    {
        if (null !== $this->collTChatbots && !$overrideExisting) {
            return;
        }
        $this->collTChatbots = new PropelObjectCollection();
        $this->collTChatbots->setModel('TChatbot');
    }

    /**
     * Gets an array of TChatbot objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Agent is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|TChatbot[] List of TChatbot objects
     * @throws PropelException
     */
    public function getTChatbots($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collTChatbotsPartial && !$this->isNew();
        if (null === $this->collTChatbots || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collTChatbots) {
                // return empty collection
                $this->initTChatbots();
            } else {
                $collTChatbots = TChatbotQuery::create(null, $criteria)
                    ->filterByAgent($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collTChatbotsPartial && count($collTChatbots)) {
                      $this->initTChatbots(false);

                      foreach ($collTChatbots as $obj) {
                        if (false == $this->collTChatbots->contains($obj)) {
                          $this->collTChatbots->append($obj);
                        }
                      }

                      $this->collTChatbotsPartial = true;
                    }

                    $collTChatbots->getInternalIterator()->rewind();

                    return $collTChatbots;
                }

                if ($partial && $this->collTChatbots) {
                    foreach ($this->collTChatbots as $obj) {
                        if ($obj->isNew()) {
                            $collTChatbots[] = $obj;
                        }
                    }
                }

                $this->collTChatbots = $collTChatbots;
                $this->collTChatbotsPartial = false;
            }
        }

        return $this->collTChatbots;
    }

    /**
     * Sets a collection of TChatbot objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $tChatbots A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Agent The current object (for fluent API support)
     */
    public function setTChatbots(PropelCollection $tChatbots, PropelPDO $con = null)
    {
        $tChatbotsToDelete = $this->getTChatbots(new Criteria(), $con)->diff($tChatbots);


        $this->tChatbotsScheduledForDeletion = $tChatbotsToDelete;

        foreach ($tChatbotsToDelete as $tChatbotRemoved) {
            $tChatbotRemoved->setAgent(null);
        }

        $this->collTChatbots = null;
        foreach ($tChatbots as $tChatbot) {
            $this->addTChatbot($tChatbot);
        }

        $this->collTChatbots = $tChatbots;
        $this->collTChatbotsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related TChatbot objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related TChatbot objects.
     * @throws PropelException
     */
    public function countTChatbots(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collTChatbotsPartial && !$this->isNew();
        if (null === $this->collTChatbots || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collTChatbots) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getTChatbots());
            }
            $query = TChatbotQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByAgent($this)
                ->count($con);
        }

        return count($this->collTChatbots);
    }

    /**
     * Method called to associate a TChatbot object to this object
     * through the TChatbot foreign key attribute.
     *
     * @param   TChatbot $l TChatbot
     * @return Agent The current object (for fluent API support)
     */
    public function addTChatbot(TChatbot $l)
    {
        if ($this->collTChatbots === null) {
            $this->initTChatbots();
            $this->collTChatbotsPartial = true;
        }
        if (!in_array($l, $this->collTChatbots->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddTChatbot($l);
        }

        return $this;
    }

    /**
     * @param	TChatbot $tChatbot The tChatbot object to add.
     */
    protected function doAddTChatbot($tChatbot)
    {
        $this->collTChatbots[]= $tChatbot;
        $tChatbot->setAgent($this);
    }

    /**
     * @param	TChatbot $tChatbot The tChatbot object to remove.
     * @return Agent The current object (for fluent API support)
     */
    public function removeTChatbot($tChatbot)
    {
        if ($this->getTChatbots()->contains($tChatbot)) {
            $this->collTChatbots->remove($this->collTChatbots->search($tChatbot));
            if (null === $this->tChatbotsScheduledForDeletion) {
                $this->tChatbotsScheduledForDeletion = clone $this->collTChatbots;
                $this->tChatbotsScheduledForDeletion->clear();
            }
            $this->tChatbotsScheduledForDeletion[]= clone $tChatbot;
            $tChatbot->setAgent(null);
        }

        return $this;
    }

    /**
     * Clears out the collTHistoriqueConsultations collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Agent The current object (for fluent API support)
     * @see        addTHistoriqueConsultations()
     */
    public function clearTHistoriqueConsultations()
    {
        $this->collTHistoriqueConsultations = null; // important to set this to null since that means it is uninitialized
        $this->collTHistoriqueConsultationsPartial = null;

        return $this;
    }

    /**
     * reset is the collTHistoriqueConsultations collection loaded partially
     *
     * @return void
     */
    public function resetPartialTHistoriqueConsultations($v = true)
    {
        $this->collTHistoriqueConsultationsPartial = $v;
    }

    /**
     * Initializes the collTHistoriqueConsultations collection.
     *
     * By default this just sets the collTHistoriqueConsultations collection to an empty array (like clearcollTHistoriqueConsultations());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initTHistoriqueConsultations($overrideExisting = true)
    {
        if (null !== $this->collTHistoriqueConsultations && !$overrideExisting) {
            return;
        }
        $this->collTHistoriqueConsultations = new PropelObjectCollection();
        $this->collTHistoriqueConsultations->setModel('THistoriqueConsultation');
    }

    /**
     * Gets an array of THistoriqueConsultation objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this Agent is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|THistoriqueConsultation[] List of THistoriqueConsultation objects
     * @throws PropelException
     */
    public function getTHistoriqueConsultations($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collTHistoriqueConsultationsPartial && !$this->isNew();
        if (null === $this->collTHistoriqueConsultations || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collTHistoriqueConsultations) {
                // return empty collection
                $this->initTHistoriqueConsultations();
            } else {
                $collTHistoriqueConsultations = THistoriqueConsultationQuery::create(null, $criteria)
                    ->filterByAgent($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collTHistoriqueConsultationsPartial && count($collTHistoriqueConsultations)) {
                      $this->initTHistoriqueConsultations(false);

                      foreach ($collTHistoriqueConsultations as $obj) {
                        if (false == $this->collTHistoriqueConsultations->contains($obj)) {
                          $this->collTHistoriqueConsultations->append($obj);
                        }
                      }

                      $this->collTHistoriqueConsultationsPartial = true;
                    }

                    $collTHistoriqueConsultations->getInternalIterator()->rewind();

                    return $collTHistoriqueConsultations;
                }

                if ($partial && $this->collTHistoriqueConsultations) {
                    foreach ($this->collTHistoriqueConsultations as $obj) {
                        if ($obj->isNew()) {
                            $collTHistoriqueConsultations[] = $obj;
                        }
                    }
                }

                $this->collTHistoriqueConsultations = $collTHistoriqueConsultations;
                $this->collTHistoriqueConsultationsPartial = false;
            }
        }

        return $this->collTHistoriqueConsultations;
    }

    /**
     * Sets a collection of THistoriqueConsultation objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $tHistoriqueConsultations A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return Agent The current object (for fluent API support)
     */
    public function setTHistoriqueConsultations(PropelCollection $tHistoriqueConsultations, PropelPDO $con = null)
    {
        $tHistoriqueConsultationsToDelete = $this->getTHistoriqueConsultations(new Criteria(), $con)->diff($tHistoriqueConsultations);


        $this->tHistoriqueConsultationsScheduledForDeletion = $tHistoriqueConsultationsToDelete;

        foreach ($tHistoriqueConsultationsToDelete as $tHistoriqueConsultationRemoved) {
            $tHistoriqueConsultationRemoved->setAgent(null);
        }

        $this->collTHistoriqueConsultations = null;
        foreach ($tHistoriqueConsultations as $tHistoriqueConsultation) {
            $this->addTHistoriqueConsultation($tHistoriqueConsultation);
        }

        $this->collTHistoriqueConsultations = $tHistoriqueConsultations;
        $this->collTHistoriqueConsultationsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related THistoriqueConsultation objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related THistoriqueConsultation objects.
     * @throws PropelException
     */
    public function countTHistoriqueConsultations(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collTHistoriqueConsultationsPartial && !$this->isNew();
        if (null === $this->collTHistoriqueConsultations || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collTHistoriqueConsultations) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getTHistoriqueConsultations());
            }
            $query = THistoriqueConsultationQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByAgent($this)
                ->count($con);
        }

        return count($this->collTHistoriqueConsultations);
    }

    /**
     * Method called to associate a THistoriqueConsultation object to this object
     * through the THistoriqueConsultation foreign key attribute.
     *
     * @param   THistoriqueConsultation $l THistoriqueConsultation
     * @return Agent The current object (for fluent API support)
     */
    public function addTHistoriqueConsultation(THistoriqueConsultation $l)
    {
        if ($this->collTHistoriqueConsultations === null) {
            $this->initTHistoriqueConsultations();
            $this->collTHistoriqueConsultationsPartial = true;
        }
        if (!in_array($l, $this->collTHistoriqueConsultations->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddTHistoriqueConsultation($l);
        }

        return $this;
    }

    /**
     * @param	THistoriqueConsultation $tHistoriqueConsultation The tHistoriqueConsultation object to add.
     */
    protected function doAddTHistoriqueConsultation($tHistoriqueConsultation)
    {
        $this->collTHistoriqueConsultations[]= $tHistoriqueConsultation;
        $tHistoriqueConsultation->setAgent($this);
    }

    /**
     * @param	THistoriqueConsultation $tHistoriqueConsultation The tHistoriqueConsultation object to remove.
     * @return Agent The current object (for fluent API support)
     */
    public function removeTHistoriqueConsultation($tHistoriqueConsultation)
    {
        if ($this->getTHistoriqueConsultations()->contains($tHistoriqueConsultation)) {
            $this->collTHistoriqueConsultations->remove($this->collTHistoriqueConsultations->search($tHistoriqueConsultation));
            if (null === $this->tHistoriqueConsultationsScheduledForDeletion) {
                $this->tHistoriqueConsultationsScheduledForDeletion = clone $this->collTHistoriqueConsultations;
                $this->tHistoriqueConsultationsScheduledForDeletion->clear();
            }
            $this->tHistoriqueConsultationsScheduledForDeletion[]= clone $tHistoriqueConsultation;
            $tHistoriqueConsultation->setAgent(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Agent is new, it will return
     * an empty collection; or if this Agent has previously
     * been saved, it will retrieve related THistoriqueConsultations from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Agent.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|THistoriqueConsultation[] List of THistoriqueConsultation objects
     */
    public function getTHistoriqueConsultationsJoinDemande($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = THistoriqueConsultationQuery::create(null, $criteria);
        $query->joinWith('Demande', $join_behavior);

        return $this->getTHistoriqueConsultations($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->id_entite = null;
        $this->id_commune = null;
        $this->id_profil_agent = null;
        $this->login_agent = null;
        $this->mot_de_passe_agent = null;
        $this->salt_agent = null;
        $this->nom_agent_fr = null;
        $this->prenom_agent_fr = null;
        $this->nom_agent_ar = null;
        $this->prenom_agent_ar = null;
        $this->email_agent = null;
        $this->tel_agent = null;
        $this->fax_agent = null;
        $this->etat_agent = null;
        $this->super_agent = null;
        $this->etat_alerte = null;
        $this->type_alerte = null;
        $this->signataire = null;
        $this->date_dernier_acces = null;
        $this->id_socle = null;
        $this->centre_appel = null;
        $this->identifiant_agent_ca = null;
        $this->type_affectation = null;
        $this->id_pj_signature = null;
        $this->id_pj_signature_paraphe = null;
        $this->certificat = null;
        $this->identifiant_certificat = null;
        $this->jeton_validation = null;
        $this->filigrane = null;
        $this->id_version = null;
        $this->version_lu = null;
        $this->tentative_mdp = null;
        $this->date_blocage = null;
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
            if ($this->collTAgentTickets) {
                foreach ($this->collTAgentTickets as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collTChatbots) {
                foreach ($this->collTChatbots as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collTHistoriqueConsultations) {
                foreach ($this->collTHistoriqueConsultations as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collTAgentTickets instanceof PropelCollection) {
            $this->collTAgentTickets->clearIterator();
        }
        $this->collTAgentTickets = null;
        if ($this->collTChatbots instanceof PropelCollection) {
            $this->collTChatbots->clearIterator();
        }
        $this->collTChatbots = null;
        if ($this->collTHistoriqueConsultations instanceof PropelCollection) {
            $this->collTHistoriqueConsultations->clearIterator();
        }
        $this->collTHistoriqueConsultations = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(AgentPeer::DEFAULT_STRING_FORMAT);
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
