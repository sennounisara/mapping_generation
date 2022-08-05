<?php


/**
 * Base class that represents a row from the 'Inscrit' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonInscrit extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonInscritPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonInscritPeer
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
     * The value for the entreprise_id field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $entreprise_id;

    /**
     * The value for the login field.
     * @var        string
     */
    protected $login;

    /**
     * The value for the mdp field.
     * @var        string
     */
    protected $mdp;

    /**
     * The value for the num_cert field.
     * @var        string
     */
    protected $num_cert;

    /**
     * The value for the cert field.
     * @var        string
     */
    protected $cert;

    /**
     * The value for the civilite field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $civilite;

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
     * The value for the adresse field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adresse;

    /**
     * The value for the codepostal field.
     * Note: this column has a database default value of: ''
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
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $pays;

    /**
     * The value for the email field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $email;

    /**
     * The value for the telephone field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $telephone;

    /**
     * The value for the categorie field.
     * @var        string
     */
    protected $categorie;

    /**
     * The value for the motstitreresume field.
     * @var        string
     */
    protected $motstitreresume;

    /**
     * The value for the periode field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $periode;

    /**
     * The value for the siret field.
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
     * The value for the code_cpv field.
     * @var        string
     */
    protected $code_cpv;

    /**
     * The value for the id_langue field.
     * @var        int
     */
    protected $id_langue;

    /**
     * The value for the profil field.
     * Note: this column has a database default value of: 1
     * @var        int
     */
    protected $profil;

    /**
     * The value for the adresse2 field.
     * @var        string
     */
    protected $adresse2;

    /**
     * The value for the bloque field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $bloque;

    /**
     * The value for the id_initial field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_initial;

    /**
     * The value for the inscrit_annuaire_defense field.
     * @var        string
     */
    protected $inscrit_annuaire_defense;

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
     * The value for the tentatives_mdp field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $tentatives_mdp;

    /**
     * The value for the uid field.
     * @var        string
     */
    protected $uid;

    /**
     * @var        CommonEntreprise
     */
    protected $aCommonEntreprise;

    /**
     * @var        PropelObjectCollection|CommonCertificatsEntreprises[] Collection to store aggregation of CommonCertificatsEntreprises objects.
     */
    protected $collCommonCertificatsEntreprisess;
    protected $collCommonCertificatsEntreprisessPartial;

    /**
     * @var        PropelObjectCollection|CommonInscritSub[] Collection to store aggregation of CommonInscritSub objects.
     */
    protected $collCommonInscritSubs;
    protected $collCommonInscritSubsPartial;

    /**
     * @var        PropelObjectCollection|CommonPanierEntreprise[] Collection to store aggregation of CommonPanierEntreprise objects.
     */
    protected $collCommonPanierEntreprises;
    protected $collCommonPanierEntreprisesPartial;

    /**
     * @var        PropelObjectCollection|CommonExecInscritContrat[] Collection to store aggregation of CommonExecInscritContrat objects.
     */
    protected $collCommonExecInscritContrats;
    protected $collCommonExecInscritContratsPartial;

    /**
     * @var        PropelObjectCollection|CommonFacture[] Collection to store aggregation of CommonFacture objects.
     */
    protected $collCommonFactures;
    protected $collCommonFacturesPartial;

    /**
     * @var        PropelObjectCollection|CommonTReponseElecFormulaire[] Collection to store aggregation of CommonTReponseElecFormulaire objects.
     */
    protected $collCommonTReponseElecFormulaires;
    protected $collCommonTReponseElecFormulairesPartial;

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
    protected $commonCertificatsEntreprisessScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonInscritSubsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonPanierEntreprisesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonExecInscritContratsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonFacturesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonTReponseElecFormulairesScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->entreprise_id = 0;
        $this->civilite = false;
        $this->nom = '';
        $this->prenom = '';
        $this->adresse = '';
        $this->codepostal = '';
        $this->ville = '';
        $this->pays = '';
        $this->email = '';
        $this->telephone = '';
        $this->periode = 0;
        $this->fax = '';
        $this->profil = 1;
        $this->bloque = '0';
        $this->id_initial = 0;
        $this->tentatives_mdp = 0;
    }

    /**
     * Initializes internal state of BaseCommonInscrit object.
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
     * Get the [entreprise_id] column value.
     * 
     * @return int
     */
    public function getEntrepriseId()
    {

        return $this->entreprise_id;
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
     * Get the [mdp] column value.
     * 
     * @return string
     */
    public function getMdp()
    {

        return $this->mdp;
    }

    /**
     * Get the [num_cert] column value.
     * 
     * @return string
     */
    public function getNumCert()
    {

        return $this->num_cert;
    }

    /**
     * Get the [cert] column value.
     * 
     * @return string
     */
    public function getCert()
    {

        return $this->cert;
    }

    /**
     * Get the [civilite] column value.
     * 
     * @return boolean
     */
    public function getCivilite()
    {

        return $this->civilite;
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
     * Get the [adresse] column value.
     * 
     * @return string
     */
    public function getAdresse()
    {

        return $this->adresse;
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
     * Get the [email] column value.
     * 
     * @return string
     */
    public function getEmail()
    {

        return $this->email;
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
     * Get the [categorie] column value.
     * 
     * @return string
     */
    public function getCategorie()
    {

        return $this->categorie;
    }

    /**
     * Get the [motstitreresume] column value.
     * 
     * @return string
     */
    public function getMotstitreresume()
    {

        return $this->motstitreresume;
    }

    /**
     * Get the [periode] column value.
     * 
     * @return int
     */
    public function getPeriode()
    {

        return $this->periode;
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
     * Get the [code_cpv] column value.
     * 
     * @return string
     */
    public function getCodeCpv()
    {

        return $this->code_cpv;
    }

    /**
     * Get the [id_langue] column value.
     * 
     * @return int
     */
    public function getIdLangue()
    {

        return $this->id_langue;
    }

    /**
     * Get the [profil] column value.
     * 
     * @return int
     */
    public function getProfil()
    {

        return $this->profil;
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
     * Get the [bloque] column value.
     * 
     * @return string
     */
    public function getBloque()
    {

        return $this->bloque;
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
     * Get the [inscrit_annuaire_defense] column value.
     * 
     * @return string
     */
    public function getInscritAnnuaireDefense()
    {

        return $this->inscrit_annuaire_defense;
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
     * Get the [tentatives_mdp] column value.
     * 
     * @return int
     */
    public function getTentativesMdp()
    {

        return $this->tentatives_mdp;
    }

    /**
     * Get the [uid] column value.
     * 
     * @return string
     */
    public function getUid()
    {

        return $this->uid;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonInscritPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [entreprise_id] column.
     * 
     * @param int $v new value
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function setEntrepriseId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->entreprise_id !== $v) {
            $this->entreprise_id = $v;
            $this->modifiedColumns[] = CommonInscritPeer::ENTREPRISE_ID;
        }

        if ($this->aCommonEntreprise !== null && $this->aCommonEntreprise->getId() !== $v) {
            $this->aCommonEntreprise = null;
        }


        return $this;
    } // setEntrepriseId()

    /**
     * Set the value of [login] column.
     * 
     * @param string $v new value
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function setLogin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->login !== $v) {
            $this->login = $v;
            $this->modifiedColumns[] = CommonInscritPeer::LOGIN;
        }


        return $this;
    } // setLogin()

    /**
     * Set the value of [mdp] column.
     * 
     * @param string $v new value
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function setMdp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mdp !== $v) {
            $this->mdp = $v;
            $this->modifiedColumns[] = CommonInscritPeer::MDP;
        }


        return $this;
    } // setMdp()

    /**
     * Set the value of [num_cert] column.
     * 
     * @param string $v new value
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function setNumCert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->num_cert !== $v) {
            $this->num_cert = $v;
            $this->modifiedColumns[] = CommonInscritPeer::NUM_CERT;
        }


        return $this;
    } // setNumCert()

    /**
     * Set the value of [cert] column.
     * 
     * @param string $v new value
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function setCert($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cert !== $v) {
            $this->cert = $v;
            $this->modifiedColumns[] = CommonInscritPeer::CERT;
        }


        return $this;
    } // setCert()

    /**
     * Sets the value of the [civilite] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * 
     * @param boolean|integer|string $v The new value
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function setCivilite($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->civilite !== $v) {
            $this->civilite = $v;
            $this->modifiedColumns[] = CommonInscritPeer::CIVILITE;
        }


        return $this;
    } // setCivilite()

    /**
     * Set the value of [nom] column.
     * 
     * @param string $v new value
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function setNom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom !== $v) {
            $this->nom = $v;
            $this->modifiedColumns[] = CommonInscritPeer::NOM;
        }


        return $this;
    } // setNom()

    /**
     * Set the value of [prenom] column.
     * 
     * @param string $v new value
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function setPrenom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prenom !== $v) {
            $this->prenom = $v;
            $this->modifiedColumns[] = CommonInscritPeer::PRENOM;
        }


        return $this;
    } // setPrenom()

    /**
     * Set the value of [adresse] column.
     * 
     * @param string $v new value
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function setAdresse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse !== $v) {
            $this->adresse = $v;
            $this->modifiedColumns[] = CommonInscritPeer::ADRESSE;
        }


        return $this;
    } // setAdresse()

    /**
     * Set the value of [codepostal] column.
     * 
     * @param string $v new value
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function setCodepostal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->codepostal !== $v) {
            $this->codepostal = $v;
            $this->modifiedColumns[] = CommonInscritPeer::CODEPOSTAL;
        }


        return $this;
    } // setCodepostal()

    /**
     * Set the value of [ville] column.
     * 
     * @param string $v new value
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function setVille($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ville !== $v) {
            $this->ville = $v;
            $this->modifiedColumns[] = CommonInscritPeer::VILLE;
        }


        return $this;
    } // setVille()

    /**
     * Set the value of [pays] column.
     * 
     * @param string $v new value
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function setPays($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pays !== $v) {
            $this->pays = $v;
            $this->modifiedColumns[] = CommonInscritPeer::PAYS;
        }


        return $this;
    } // setPays()

    /**
     * Set the value of [email] column.
     * 
     * @param string $v new value
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[] = CommonInscritPeer::EMAIL;
        }


        return $this;
    } // setEmail()

    /**
     * Set the value of [telephone] column.
     * 
     * @param string $v new value
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function setTelephone($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->telephone !== $v) {
            $this->telephone = $v;
            $this->modifiedColumns[] = CommonInscritPeer::TELEPHONE;
        }


        return $this;
    } // setTelephone()

    /**
     * Set the value of [categorie] column.
     * 
     * @param string $v new value
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function setCategorie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->categorie !== $v) {
            $this->categorie = $v;
            $this->modifiedColumns[] = CommonInscritPeer::CATEGORIE;
        }


        return $this;
    } // setCategorie()

    /**
     * Set the value of [motstitreresume] column.
     * 
     * @param string $v new value
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function setMotstitreresume($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->motstitreresume !== $v) {
            $this->motstitreresume = $v;
            $this->modifiedColumns[] = CommonInscritPeer::MOTSTITRERESUME;
        }


        return $this;
    } // setMotstitreresume()

    /**
     * Set the value of [periode] column.
     * 
     * @param int $v new value
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function setPeriode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->periode !== $v) {
            $this->periode = $v;
            $this->modifiedColumns[] = CommonInscritPeer::PERIODE;
        }


        return $this;
    } // setPeriode()

    /**
     * Set the value of [siret] column.
     * 
     * @param string $v new value
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function setSiret($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->siret !== $v) {
            $this->siret = $v;
            $this->modifiedColumns[] = CommonInscritPeer::SIRET;
        }


        return $this;
    } // setSiret()

    /**
     * Set the value of [fax] column.
     * 
     * @param string $v new value
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function setFax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fax !== $v) {
            $this->fax = $v;
            $this->modifiedColumns[] = CommonInscritPeer::FAX;
        }


        return $this;
    } // setFax()

    /**
     * Set the value of [code_cpv] column.
     * 
     * @param string $v new value
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function setCodeCpv($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code_cpv !== $v) {
            $this->code_cpv = $v;
            $this->modifiedColumns[] = CommonInscritPeer::CODE_CPV;
        }


        return $this;
    } // setCodeCpv()

    /**
     * Set the value of [id_langue] column.
     * 
     * @param int $v new value
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function setIdLangue($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_langue !== $v) {
            $this->id_langue = $v;
            $this->modifiedColumns[] = CommonInscritPeer::ID_LANGUE;
        }


        return $this;
    } // setIdLangue()

    /**
     * Set the value of [profil] column.
     * 
     * @param int $v new value
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function setProfil($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->profil !== $v) {
            $this->profil = $v;
            $this->modifiedColumns[] = CommonInscritPeer::PROFIL;
        }


        return $this;
    } // setProfil()

    /**
     * Set the value of [adresse2] column.
     * 
     * @param string $v new value
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function setAdresse2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse2 !== $v) {
            $this->adresse2 = $v;
            $this->modifiedColumns[] = CommonInscritPeer::ADRESSE2;
        }


        return $this;
    } // setAdresse2()

    /**
     * Set the value of [bloque] column.
     * 
     * @param string $v new value
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function setBloque($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->bloque !== $v) {
            $this->bloque = $v;
            $this->modifiedColumns[] = CommonInscritPeer::BLOQUE;
        }


        return $this;
    } // setBloque()

    /**
     * Set the value of [id_initial] column.
     * 
     * @param int $v new value
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function setIdInitial($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_initial !== $v) {
            $this->id_initial = $v;
            $this->modifiedColumns[] = CommonInscritPeer::ID_INITIAL;
        }


        return $this;
    } // setIdInitial()

    /**
     * Set the value of [inscrit_annuaire_defense] column.
     * 
     * @param string $v new value
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function setInscritAnnuaireDefense($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->inscrit_annuaire_defense !== $v) {
            $this->inscrit_annuaire_defense = $v;
            $this->modifiedColumns[] = CommonInscritPeer::INSCRIT_ANNUAIRE_DEFENSE;
        }


        return $this;
    } // setInscritAnnuaireDefense()

    /**
     * Set the value of [date_creation] column.
     * 
     * @param string $v new value
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function setDateCreation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_creation !== $v) {
            $this->date_creation = $v;
            $this->modifiedColumns[] = CommonInscritPeer::DATE_CREATION;
        }


        return $this;
    } // setDateCreation()

    /**
     * Set the value of [date_modification] column.
     * 
     * @param string $v new value
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function setDateModification($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_modification !== $v) {
            $this->date_modification = $v;
            $this->modifiedColumns[] = CommonInscritPeer::DATE_MODIFICATION;
        }


        return $this;
    } // setDateModification()

    /**
     * Set the value of [tentatives_mdp] column.
     * 
     * @param int $v new value
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function setTentativesMdp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->tentatives_mdp !== $v) {
            $this->tentatives_mdp = $v;
            $this->modifiedColumns[] = CommonInscritPeer::TENTATIVES_MDP;
        }


        return $this;
    } // setTentativesMdp()

    /**
     * Set the value of [uid] column.
     * 
     * @param string $v new value
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function setUid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->uid !== $v) {
            $this->uid = $v;
            $this->modifiedColumns[] = CommonInscritPeer::UID;
        }


        return $this;
    } // setUid()

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
            if ($this->entreprise_id !== 0) {
                return false;
            }

            if ($this->civilite !== false) {
                return false;
            }

            if ($this->nom !== '') {
                return false;
            }

            if ($this->prenom !== '') {
                return false;
            }

            if ($this->adresse !== '') {
                return false;
            }

            if ($this->codepostal !== '') {
                return false;
            }

            if ($this->ville !== '') {
                return false;
            }

            if ($this->pays !== '') {
                return false;
            }

            if ($this->email !== '') {
                return false;
            }

            if ($this->telephone !== '') {
                return false;
            }

            if ($this->periode !== 0) {
                return false;
            }

            if ($this->fax !== '') {
                return false;
            }

            if ($this->profil !== 1) {
                return false;
            }

            if ($this->bloque !== '0') {
                return false;
            }

            if ($this->id_initial !== 0) {
                return false;
            }

            if ($this->tentatives_mdp !== 0) {
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
            $this->entreprise_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->login = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->mdp = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->num_cert = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->cert = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->civilite = ($row[$startcol + 6] !== null) ? (boolean) $row[$startcol + 6] : null;
            $this->nom = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->prenom = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->adresse = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->codepostal = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->ville = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->pays = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->email = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->telephone = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->categorie = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->motstitreresume = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->periode = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->siret = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->fax = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->code_cpv = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->id_langue = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->profil = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
            $this->adresse2 = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->bloque = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->id_initial = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
            $this->inscrit_annuaire_defense = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->date_creation = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->date_modification = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->tentatives_mdp = ($row[$startcol + 29] !== null) ? (int) $row[$startcol + 29] : null;
            $this->uid = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 31; // 31 = CommonInscritPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonInscrit object", $e);
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

        if ($this->aCommonEntreprise !== null && $this->entreprise_id !== $this->aCommonEntreprise->getId()) {
            $this->aCommonEntreprise = null;
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
            $con = Propel::getConnection(CommonInscritPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonInscritPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aCommonEntreprise = null;
            $this->collCommonCertificatsEntreprisess = null;

            $this->collCommonInscritSubs = null;

            $this->collCommonPanierEntreprises = null;

            $this->collCommonExecInscritContrats = null;

            $this->collCommonFactures = null;

            $this->collCommonTReponseElecFormulaires = null;

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
            $con = Propel::getConnection(CommonInscritPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonInscritQuery::create()
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
            $con = Propel::getConnection(CommonInscritPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonInscritPeer::addInstanceToPool($this);
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

            if ($this->aCommonEntreprise !== null) {
                if ($this->aCommonEntreprise->isModified() || $this->aCommonEntreprise->isNew()) {
                    $affectedRows += $this->aCommonEntreprise->save($con);
                }
                $this->setCommonEntreprise($this->aCommonEntreprise);
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

            if ($this->commonCertificatsEntreprisessScheduledForDeletion !== null) {
                if (!$this->commonCertificatsEntreprisessScheduledForDeletion->isEmpty()) {
                    //the foreign key is flagged as `CASCADE`, so we delete the items
                    CommonCertificatsEntreprisesQuery::create()
                        ->filterByPrimaryKeys($this->commonCertificatsEntreprisessScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->commonCertificatsEntreprisessScheduledForDeletion = null;
                }
            }

            if ($this->collCommonCertificatsEntreprisess !== null) {
                foreach ($this->collCommonCertificatsEntreprisess as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonInscritSubsScheduledForDeletion !== null) {
                if (!$this->commonInscritSubsScheduledForDeletion->isEmpty()) {
                    //the foreign key is flagged as `CASCADE`, so we delete the items
                    CommonInscritSubQuery::create()
                        ->filterByPrimaryKeys($this->commonInscritSubsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->commonInscritSubsScheduledForDeletion = null;
                }
            }

            if ($this->collCommonInscritSubs !== null) {
                foreach ($this->collCommonInscritSubs as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonPanierEntreprisesScheduledForDeletion !== null) {
                if (!$this->commonPanierEntreprisesScheduledForDeletion->isEmpty()) {
                    //the foreign key is flagged as `CASCADE`, so we delete the items
                    CommonPanierEntrepriseQuery::create()
                        ->filterByPrimaryKeys($this->commonPanierEntreprisesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->commonPanierEntreprisesScheduledForDeletion = null;
                }
            }

            if ($this->collCommonPanierEntreprises !== null) {
                foreach ($this->collCommonPanierEntreprises as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonExecInscritContratsScheduledForDeletion !== null) {
                if (!$this->commonExecInscritContratsScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonExecInscritContratsScheduledForDeletion as $commonExecInscritContrat) {
                        // need to save related object because we set the relation to null
                        $commonExecInscritContrat->save($con);
                    }
                    $this->commonExecInscritContratsScheduledForDeletion = null;
                }
            }

            if ($this->collCommonExecInscritContrats !== null) {
                foreach ($this->collCommonExecInscritContrats as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonFacturesScheduledForDeletion !== null) {
                if (!$this->commonFacturesScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonFacturesScheduledForDeletion as $commonFacture) {
                        // need to save related object because we set the relation to null
                        $commonFacture->save($con);
                    }
                    $this->commonFacturesScheduledForDeletion = null;
                }
            }

            if ($this->collCommonFactures !== null) {
                foreach ($this->collCommonFactures as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonTReponseElecFormulairesScheduledForDeletion !== null) {
                if (!$this->commonTReponseElecFormulairesScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonTReponseElecFormulairesScheduledForDeletion as $commonTReponseElecFormulaire) {
                        // need to save related object because we set the relation to null
                        $commonTReponseElecFormulaire->save($con);
                    }
                    $this->commonTReponseElecFormulairesScheduledForDeletion = null;
                }
            }

            if ($this->collCommonTReponseElecFormulaires !== null) {
                foreach ($this->collCommonTReponseElecFormulaires as $referrerFK) {
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

        $this->modifiedColumns[] = CommonInscritPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonInscritPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonInscritPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonInscritPeer::ENTREPRISE_ID)) {
            $modifiedColumns[':p' . $index++]  = '`entreprise_id`';
        }
        if ($this->isColumnModified(CommonInscritPeer::LOGIN)) {
            $modifiedColumns[':p' . $index++]  = '`login`';
        }
        if ($this->isColumnModified(CommonInscritPeer::MDP)) {
            $modifiedColumns[':p' . $index++]  = '`mdp`';
        }
        if ($this->isColumnModified(CommonInscritPeer::NUM_CERT)) {
            $modifiedColumns[':p' . $index++]  = '`num_cert`';
        }
        if ($this->isColumnModified(CommonInscritPeer::CERT)) {
            $modifiedColumns[':p' . $index++]  = '`cert`';
        }
        if ($this->isColumnModified(CommonInscritPeer::CIVILITE)) {
            $modifiedColumns[':p' . $index++]  = '`civilite`';
        }
        if ($this->isColumnModified(CommonInscritPeer::NOM)) {
            $modifiedColumns[':p' . $index++]  = '`nom`';
        }
        if ($this->isColumnModified(CommonInscritPeer::PRENOM)) {
            $modifiedColumns[':p' . $index++]  = '`prenom`';
        }
        if ($this->isColumnModified(CommonInscritPeer::ADRESSE)) {
            $modifiedColumns[':p' . $index++]  = '`adresse`';
        }
        if ($this->isColumnModified(CommonInscritPeer::CODEPOSTAL)) {
            $modifiedColumns[':p' . $index++]  = '`codepostal`';
        }
        if ($this->isColumnModified(CommonInscritPeer::VILLE)) {
            $modifiedColumns[':p' . $index++]  = '`ville`';
        }
        if ($this->isColumnModified(CommonInscritPeer::PAYS)) {
            $modifiedColumns[':p' . $index++]  = '`pays`';
        }
        if ($this->isColumnModified(CommonInscritPeer::EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`email`';
        }
        if ($this->isColumnModified(CommonInscritPeer::TELEPHONE)) {
            $modifiedColumns[':p' . $index++]  = '`telephone`';
        }
        if ($this->isColumnModified(CommonInscritPeer::CATEGORIE)) {
            $modifiedColumns[':p' . $index++]  = '`categorie`';
        }
        if ($this->isColumnModified(CommonInscritPeer::MOTSTITRERESUME)) {
            $modifiedColumns[':p' . $index++]  = '`motstitreresume`';
        }
        if ($this->isColumnModified(CommonInscritPeer::PERIODE)) {
            $modifiedColumns[':p' . $index++]  = '`periode`';
        }
        if ($this->isColumnModified(CommonInscritPeer::SIRET)) {
            $modifiedColumns[':p' . $index++]  = '`siret`';
        }
        if ($this->isColumnModified(CommonInscritPeer::FAX)) {
            $modifiedColumns[':p' . $index++]  = '`fax`';
        }
        if ($this->isColumnModified(CommonInscritPeer::CODE_CPV)) {
            $modifiedColumns[':p' . $index++]  = '`code_cpv`';
        }
        if ($this->isColumnModified(CommonInscritPeer::ID_LANGUE)) {
            $modifiedColumns[':p' . $index++]  = '`id_langue`';
        }
        if ($this->isColumnModified(CommonInscritPeer::PROFIL)) {
            $modifiedColumns[':p' . $index++]  = '`profil`';
        }
        if ($this->isColumnModified(CommonInscritPeer::ADRESSE2)) {
            $modifiedColumns[':p' . $index++]  = '`adresse2`';
        }
        if ($this->isColumnModified(CommonInscritPeer::BLOQUE)) {
            $modifiedColumns[':p' . $index++]  = '`bloque`';
        }
        if ($this->isColumnModified(CommonInscritPeer::ID_INITIAL)) {
            $modifiedColumns[':p' . $index++]  = '`id_initial`';
        }
        if ($this->isColumnModified(CommonInscritPeer::INSCRIT_ANNUAIRE_DEFENSE)) {
            $modifiedColumns[':p' . $index++]  = '`inscrit_annuaire_defense`';
        }
        if ($this->isColumnModified(CommonInscritPeer::DATE_CREATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_creation`';
        }
        if ($this->isColumnModified(CommonInscritPeer::DATE_MODIFICATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_modification`';
        }
        if ($this->isColumnModified(CommonInscritPeer::TENTATIVES_MDP)) {
            $modifiedColumns[':p' . $index++]  = '`tentatives_mdp`';
        }
        if ($this->isColumnModified(CommonInscritPeer::UID)) {
            $modifiedColumns[':p' . $index++]  = '`uid`';
        }

        $sql = sprintf(
            'INSERT INTO `Inscrit` (%s) VALUES (%s)',
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
                    case '`entreprise_id`':						
                        $stmt->bindValue($identifier, $this->entreprise_id, PDO::PARAM_INT);
                        break;
                    case '`login`':						
                        $stmt->bindValue($identifier, $this->login, PDO::PARAM_STR);
                        break;
                    case '`mdp`':						
                        $stmt->bindValue($identifier, $this->mdp, PDO::PARAM_STR);
                        break;
                    case '`num_cert`':						
                        $stmt->bindValue($identifier, $this->num_cert, PDO::PARAM_STR);
                        break;
                    case '`cert`':						
                        $stmt->bindValue($identifier, $this->cert, PDO::PARAM_STR);
                        break;
                    case '`civilite`':
                        $stmt->bindValue($identifier, (int) $this->civilite, PDO::PARAM_INT);
                        break;
                    case '`nom`':						
                        $stmt->bindValue($identifier, $this->nom, PDO::PARAM_STR);
                        break;
                    case '`prenom`':						
                        $stmt->bindValue($identifier, $this->prenom, PDO::PARAM_STR);
                        break;
                    case '`adresse`':						
                        $stmt->bindValue($identifier, $this->adresse, PDO::PARAM_STR);
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
                    case '`email`':						
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                    case '`telephone`':						
                        $stmt->bindValue($identifier, $this->telephone, PDO::PARAM_STR);
                        break;
                    case '`categorie`':						
                        $stmt->bindValue($identifier, $this->categorie, PDO::PARAM_STR);
                        break;
                    case '`motstitreresume`':						
                        $stmt->bindValue($identifier, $this->motstitreresume, PDO::PARAM_STR);
                        break;
                    case '`periode`':						
                        $stmt->bindValue($identifier, $this->periode, PDO::PARAM_INT);
                        break;
                    case '`siret`':						
                        $stmt->bindValue($identifier, $this->siret, PDO::PARAM_STR);
                        break;
                    case '`fax`':						
                        $stmt->bindValue($identifier, $this->fax, PDO::PARAM_STR);
                        break;
                    case '`code_cpv`':						
                        $stmt->bindValue($identifier, $this->code_cpv, PDO::PARAM_STR);
                        break;
                    case '`id_langue`':						
                        $stmt->bindValue($identifier, $this->id_langue, PDO::PARAM_INT);
                        break;
                    case '`profil`':						
                        $stmt->bindValue($identifier, $this->profil, PDO::PARAM_INT);
                        break;
                    case '`adresse2`':						
                        $stmt->bindValue($identifier, $this->adresse2, PDO::PARAM_STR);
                        break;
                    case '`bloque`':						
                        $stmt->bindValue($identifier, $this->bloque, PDO::PARAM_STR);
                        break;
                    case '`id_initial`':						
                        $stmt->bindValue($identifier, $this->id_initial, PDO::PARAM_INT);
                        break;
                    case '`inscrit_annuaire_defense`':						
                        $stmt->bindValue($identifier, $this->inscrit_annuaire_defense, PDO::PARAM_STR);
                        break;
                    case '`date_creation`':						
                        $stmt->bindValue($identifier, $this->date_creation, PDO::PARAM_STR);
                        break;
                    case '`date_modification`':						
                        $stmt->bindValue($identifier, $this->date_modification, PDO::PARAM_STR);
                        break;
                    case '`tentatives_mdp`':						
                        $stmt->bindValue($identifier, $this->tentatives_mdp, PDO::PARAM_INT);
                        break;
                    case '`uid`':						
                        $stmt->bindValue($identifier, $this->uid, PDO::PARAM_STR);
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

            if ($this->aCommonEntreprise !== null) {
                if (!$this->aCommonEntreprise->validate($columns)) {
                    $failureMap = array_merge($failureMap, $this->aCommonEntreprise->getValidationFailures());
                }
            }


            if (($retval = CommonInscritPeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCommonCertificatsEntreprisess !== null) {
                    foreach ($this->collCommonCertificatsEntreprisess as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonInscritSubs !== null) {
                    foreach ($this->collCommonInscritSubs as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonPanierEntreprises !== null) {
                    foreach ($this->collCommonPanierEntreprises as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonExecInscritContrats !== null) {
                    foreach ($this->collCommonExecInscritContrats as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonFactures !== null) {
                    foreach ($this->collCommonFactures as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonTReponseElecFormulaires !== null) {
                    foreach ($this->collCommonTReponseElecFormulaires as $referrerFK) {
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
        $pos = CommonInscritPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getEntrepriseId();
                break;
            case 2:
                return $this->getLogin();
                break;
            case 3:
                return $this->getMdp();
                break;
            case 4:
                return $this->getNumCert();
                break;
            case 5:
                return $this->getCert();
                break;
            case 6:
                return $this->getCivilite();
                break;
            case 7:
                return $this->getNom();
                break;
            case 8:
                return $this->getPrenom();
                break;
            case 9:
                return $this->getAdresse();
                break;
            case 10:
                return $this->getCodepostal();
                break;
            case 11:
                return $this->getVille();
                break;
            case 12:
                return $this->getPays();
                break;
            case 13:
                return $this->getEmail();
                break;
            case 14:
                return $this->getTelephone();
                break;
            case 15:
                return $this->getCategorie();
                break;
            case 16:
                return $this->getMotstitreresume();
                break;
            case 17:
                return $this->getPeriode();
                break;
            case 18:
                return $this->getSiret();
                break;
            case 19:
                return $this->getFax();
                break;
            case 20:
                return $this->getCodeCpv();
                break;
            case 21:
                return $this->getIdLangue();
                break;
            case 22:
                return $this->getProfil();
                break;
            case 23:
                return $this->getAdresse2();
                break;
            case 24:
                return $this->getBloque();
                break;
            case 25:
                return $this->getIdInitial();
                break;
            case 26:
                return $this->getInscritAnnuaireDefense();
                break;
            case 27:
                return $this->getDateCreation();
                break;
            case 28:
                return $this->getDateModification();
                break;
            case 29:
                return $this->getTentativesMdp();
                break;
            case 30:
                return $this->getUid();
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
        if (isset($alreadyDumpedObjects['CommonInscrit'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonInscrit'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonInscritPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getEntrepriseId(),
            $keys[2] => $this->getLogin(),
            $keys[3] => $this->getMdp(),
            $keys[4] => $this->getNumCert(),
            $keys[5] => $this->getCert(),
            $keys[6] => $this->getCivilite(),
            $keys[7] => $this->getNom(),
            $keys[8] => $this->getPrenom(),
            $keys[9] => $this->getAdresse(),
            $keys[10] => $this->getCodepostal(),
            $keys[11] => $this->getVille(),
            $keys[12] => $this->getPays(),
            $keys[13] => $this->getEmail(),
            $keys[14] => $this->getTelephone(),
            $keys[15] => $this->getCategorie(),
            $keys[16] => $this->getMotstitreresume(),
            $keys[17] => $this->getPeriode(),
            $keys[18] => $this->getSiret(),
            $keys[19] => $this->getFax(),
            $keys[20] => $this->getCodeCpv(),
            $keys[21] => $this->getIdLangue(),
            $keys[22] => $this->getProfil(),
            $keys[23] => $this->getAdresse2(),
            $keys[24] => $this->getBloque(),
            $keys[25] => $this->getIdInitial(),
            $keys[26] => $this->getInscritAnnuaireDefense(),
            $keys[27] => $this->getDateCreation(),
            $keys[28] => $this->getDateModification(),
            $keys[29] => $this->getTentativesMdp(),
            $keys[30] => $this->getUid(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->aCommonEntreprise) {
                $result['CommonEntreprise'] = $this->aCommonEntreprise->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->collCommonCertificatsEntreprisess) {
                $result['CommonCertificatsEntreprisess'] = $this->collCommonCertificatsEntreprisess->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonInscritSubs) {
                $result['CommonInscritSubs'] = $this->collCommonInscritSubs->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonPanierEntreprises) {
                $result['CommonPanierEntreprises'] = $this->collCommonPanierEntreprises->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonExecInscritContrats) {
                $result['CommonExecInscritContrats'] = $this->collCommonExecInscritContrats->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonFactures) {
                $result['CommonFactures'] = $this->collCommonFactures->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonTReponseElecFormulaires) {
                $result['CommonTReponseElecFormulaires'] = $this->collCommonTReponseElecFormulaires->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CommonInscritPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setEntrepriseId($value);
                break;
            case 2:
                $this->setLogin($value);
                break;
            case 3:
                $this->setMdp($value);
                break;
            case 4:
                $this->setNumCert($value);
                break;
            case 5:
                $this->setCert($value);
                break;
            case 6:
                $this->setCivilite($value);
                break;
            case 7:
                $this->setNom($value);
                break;
            case 8:
                $this->setPrenom($value);
                break;
            case 9:
                $this->setAdresse($value);
                break;
            case 10:
                $this->setCodepostal($value);
                break;
            case 11:
                $this->setVille($value);
                break;
            case 12:
                $this->setPays($value);
                break;
            case 13:
                $this->setEmail($value);
                break;
            case 14:
                $this->setTelephone($value);
                break;
            case 15:
                $this->setCategorie($value);
                break;
            case 16:
                $this->setMotstitreresume($value);
                break;
            case 17:
                $this->setPeriode($value);
                break;
            case 18:
                $this->setSiret($value);
                break;
            case 19:
                $this->setFax($value);
                break;
            case 20:
                $this->setCodeCpv($value);
                break;
            case 21:
                $this->setIdLangue($value);
                break;
            case 22:
                $this->setProfil($value);
                break;
            case 23:
                $this->setAdresse2($value);
                break;
            case 24:
                $this->setBloque($value);
                break;
            case 25:
                $this->setIdInitial($value);
                break;
            case 26:
                $this->setInscritAnnuaireDefense($value);
                break;
            case 27:
                $this->setDateCreation($value);
                break;
            case 28:
                $this->setDateModification($value);
                break;
            case 29:
                $this->setTentativesMdp($value);
                break;
            case 30:
                $this->setUid($value);
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
        $keys = CommonInscritPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setEntrepriseId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setLogin($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setMdp($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setNumCert($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setCert($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setCivilite($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setNom($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setPrenom($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setAdresse($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setCodepostal($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setVille($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setPays($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setEmail($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setTelephone($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setCategorie($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setMotstitreresume($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setPeriode($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setSiret($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setFax($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setCodeCpv($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setIdLangue($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setProfil($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setAdresse2($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setBloque($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setIdInitial($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setInscritAnnuaireDefense($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setDateCreation($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setDateModification($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setTentativesMdp($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setUid($arr[$keys[30]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonInscritPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonInscritPeer::ID)) $criteria->add(CommonInscritPeer::ID, $this->id);
        if ($this->isColumnModified(CommonInscritPeer::ENTREPRISE_ID)) $criteria->add(CommonInscritPeer::ENTREPRISE_ID, $this->entreprise_id);
        if ($this->isColumnModified(CommonInscritPeer::LOGIN)) $criteria->add(CommonInscritPeer::LOGIN, $this->login);
        if ($this->isColumnModified(CommonInscritPeer::MDP)) $criteria->add(CommonInscritPeer::MDP, $this->mdp);
        if ($this->isColumnModified(CommonInscritPeer::NUM_CERT)) $criteria->add(CommonInscritPeer::NUM_CERT, $this->num_cert);
        if ($this->isColumnModified(CommonInscritPeer::CERT)) $criteria->add(CommonInscritPeer::CERT, $this->cert);
        if ($this->isColumnModified(CommonInscritPeer::CIVILITE)) $criteria->add(CommonInscritPeer::CIVILITE, $this->civilite);
        if ($this->isColumnModified(CommonInscritPeer::NOM)) $criteria->add(CommonInscritPeer::NOM, $this->nom);
        if ($this->isColumnModified(CommonInscritPeer::PRENOM)) $criteria->add(CommonInscritPeer::PRENOM, $this->prenom);
        if ($this->isColumnModified(CommonInscritPeer::ADRESSE)) $criteria->add(CommonInscritPeer::ADRESSE, $this->adresse);
        if ($this->isColumnModified(CommonInscritPeer::CODEPOSTAL)) $criteria->add(CommonInscritPeer::CODEPOSTAL, $this->codepostal);
        if ($this->isColumnModified(CommonInscritPeer::VILLE)) $criteria->add(CommonInscritPeer::VILLE, $this->ville);
        if ($this->isColumnModified(CommonInscritPeer::PAYS)) $criteria->add(CommonInscritPeer::PAYS, $this->pays);
        if ($this->isColumnModified(CommonInscritPeer::EMAIL)) $criteria->add(CommonInscritPeer::EMAIL, $this->email);
        if ($this->isColumnModified(CommonInscritPeer::TELEPHONE)) $criteria->add(CommonInscritPeer::TELEPHONE, $this->telephone);
        if ($this->isColumnModified(CommonInscritPeer::CATEGORIE)) $criteria->add(CommonInscritPeer::CATEGORIE, $this->categorie);
        if ($this->isColumnModified(CommonInscritPeer::MOTSTITRERESUME)) $criteria->add(CommonInscritPeer::MOTSTITRERESUME, $this->motstitreresume);
        if ($this->isColumnModified(CommonInscritPeer::PERIODE)) $criteria->add(CommonInscritPeer::PERIODE, $this->periode);
        if ($this->isColumnModified(CommonInscritPeer::SIRET)) $criteria->add(CommonInscritPeer::SIRET, $this->siret);
        if ($this->isColumnModified(CommonInscritPeer::FAX)) $criteria->add(CommonInscritPeer::FAX, $this->fax);
        if ($this->isColumnModified(CommonInscritPeer::CODE_CPV)) $criteria->add(CommonInscritPeer::CODE_CPV, $this->code_cpv);
        if ($this->isColumnModified(CommonInscritPeer::ID_LANGUE)) $criteria->add(CommonInscritPeer::ID_LANGUE, $this->id_langue);
        if ($this->isColumnModified(CommonInscritPeer::PROFIL)) $criteria->add(CommonInscritPeer::PROFIL, $this->profil);
        if ($this->isColumnModified(CommonInscritPeer::ADRESSE2)) $criteria->add(CommonInscritPeer::ADRESSE2, $this->adresse2);
        if ($this->isColumnModified(CommonInscritPeer::BLOQUE)) $criteria->add(CommonInscritPeer::BLOQUE, $this->bloque);
        if ($this->isColumnModified(CommonInscritPeer::ID_INITIAL)) $criteria->add(CommonInscritPeer::ID_INITIAL, $this->id_initial);
        if ($this->isColumnModified(CommonInscritPeer::INSCRIT_ANNUAIRE_DEFENSE)) $criteria->add(CommonInscritPeer::INSCRIT_ANNUAIRE_DEFENSE, $this->inscrit_annuaire_defense);
        if ($this->isColumnModified(CommonInscritPeer::DATE_CREATION)) $criteria->add(CommonInscritPeer::DATE_CREATION, $this->date_creation);
        if ($this->isColumnModified(CommonInscritPeer::DATE_MODIFICATION)) $criteria->add(CommonInscritPeer::DATE_MODIFICATION, $this->date_modification);
        if ($this->isColumnModified(CommonInscritPeer::TENTATIVES_MDP)) $criteria->add(CommonInscritPeer::TENTATIVES_MDP, $this->tentatives_mdp);
        if ($this->isColumnModified(CommonInscritPeer::UID)) $criteria->add(CommonInscritPeer::UID, $this->uid);

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
        $criteria = new Criteria(CommonInscritPeer::DATABASE_NAME);
        $criteria->add(CommonInscritPeer::ID, $this->id);
        $criteria->add(CommonInscritPeer::ENTREPRISE_ID, $this->entreprise_id);

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
        $pks[1] = $this->getEntrepriseId();

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
        $this->setEntrepriseId($keys[1]);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return (null === $this->getId()) && (null === $this->getEntrepriseId());
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonInscrit (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setEntrepriseId($this->getEntrepriseId());
        $copyObj->setLogin($this->getLogin());
        $copyObj->setMdp($this->getMdp());
        $copyObj->setNumCert($this->getNumCert());
        $copyObj->setCert($this->getCert());
        $copyObj->setCivilite($this->getCivilite());
        $copyObj->setNom($this->getNom());
        $copyObj->setPrenom($this->getPrenom());
        $copyObj->setAdresse($this->getAdresse());
        $copyObj->setCodepostal($this->getCodepostal());
        $copyObj->setVille($this->getVille());
        $copyObj->setPays($this->getPays());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setTelephone($this->getTelephone());
        $copyObj->setCategorie($this->getCategorie());
        $copyObj->setMotstitreresume($this->getMotstitreresume());
        $copyObj->setPeriode($this->getPeriode());
        $copyObj->setSiret($this->getSiret());
        $copyObj->setFax($this->getFax());
        $copyObj->setCodeCpv($this->getCodeCpv());
        $copyObj->setIdLangue($this->getIdLangue());
        $copyObj->setProfil($this->getProfil());
        $copyObj->setAdresse2($this->getAdresse2());
        $copyObj->setBloque($this->getBloque());
        $copyObj->setIdInitial($this->getIdInitial());
        $copyObj->setInscritAnnuaireDefense($this->getInscritAnnuaireDefense());
        $copyObj->setDateCreation($this->getDateCreation());
        $copyObj->setDateModification($this->getDateModification());
        $copyObj->setTentativesMdp($this->getTentativesMdp());
        $copyObj->setUid($this->getUid());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCommonCertificatsEntreprisess() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonCertificatsEntreprises($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonInscritSubs() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonInscritSub($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonPanierEntreprises() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonPanierEntreprise($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonExecInscritContrats() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonExecInscritContrat($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonFactures() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonFacture($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonTReponseElecFormulaires() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonTReponseElecFormulaire($relObj->copy($deepCopy));
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
     * @return CommonInscrit Clone of current object.
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
     * @return CommonInscritPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonInscritPeer();
        }

        return self::$peer;
    }

    /**
     * Declares an association between this object and a CommonEntreprise object.
     *
     * @param   CommonEntreprise $v
     * @return CommonInscrit The current object (for fluent API support)
     * @throws PropelException
     */
    public function setCommonEntreprise(CommonEntreprise $v = null)
    {
        if ($v === null) {
            $this->setEntrepriseId(0);
        } else {
            $this->setEntrepriseId($v->getId());
        }

        $this->aCommonEntreprise = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the CommonEntreprise object, it will not be re-added.
        if ($v !== null) {
            $v->addCommonInscrit($this);
        }


        return $this;
    }


    /**
     * Get the associated CommonEntreprise object
     *
     * @param PropelPDO $con Optional Connection object.
     * @param $doQuery Executes a query to get the object if required
     * @return CommonEntreprise The associated CommonEntreprise object.
     * @throws PropelException
     */
    public function getCommonEntreprise(PropelPDO $con = null, $doQuery = true)
    {
        if ($this->aCommonEntreprise === null && ($this->entreprise_id !== null) && $doQuery) {
            $this->aCommonEntreprise = CommonEntrepriseQuery::create()->findPk($this->entreprise_id, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aCommonEntreprise->addCommonInscrits($this);
             */
        }

        return $this->aCommonEntreprise;
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
        if ('CommonCertificatsEntreprises' == $relationName) {
            $this->initCommonCertificatsEntreprisess();
        }
        if ('CommonInscritSub' == $relationName) {
            $this->initCommonInscritSubs();
        }
        if ('CommonPanierEntreprise' == $relationName) {
            $this->initCommonPanierEntreprises();
        }
        if ('CommonExecInscritContrat' == $relationName) {
            $this->initCommonExecInscritContrats();
        }
        if ('CommonFacture' == $relationName) {
            $this->initCommonFactures();
        }
        if ('CommonTReponseElecFormulaire' == $relationName) {
            $this->initCommonTReponseElecFormulaires();
        }
    }

    /**
     * Clears out the collCommonCertificatsEntreprisess collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonInscrit The current object (for fluent API support)
     * @see        addCommonCertificatsEntreprisess()
     */
    public function clearCommonCertificatsEntreprisess()
    {
        $this->collCommonCertificatsEntreprisess = null; // important to set this to null since that means it is uninitialized
        $this->collCommonCertificatsEntreprisessPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonCertificatsEntreprisess collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonCertificatsEntreprisess($v = true)
    {
        $this->collCommonCertificatsEntreprisessPartial = $v;
    }

    /**
     * Initializes the collCommonCertificatsEntreprisess collection.
     *
     * By default this just sets the collCommonCertificatsEntreprisess collection to an empty array (like clearcollCommonCertificatsEntreprisess());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonCertificatsEntreprisess($overrideExisting = true)
    {
        if (null !== $this->collCommonCertificatsEntreprisess && !$overrideExisting) {
            return;
        }
        $this->collCommonCertificatsEntreprisess = new PropelObjectCollection();
        $this->collCommonCertificatsEntreprisess->setModel('CommonCertificatsEntreprises');
    }

    /**
     * Gets an array of CommonCertificatsEntreprises objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonInscrit is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonCertificatsEntreprises[] List of CommonCertificatsEntreprises objects
     * @throws PropelException
     */
    public function getCommonCertificatsEntreprisess($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonCertificatsEntreprisessPartial && !$this->isNew();
        if (null === $this->collCommonCertificatsEntreprisess || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonCertificatsEntreprisess) {
                // return empty collection
                $this->initCommonCertificatsEntreprisess();
            } else {
                $collCommonCertificatsEntreprisess = CommonCertificatsEntreprisesQuery::create(null, $criteria)
                    ->filterByCommonInscrit($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonCertificatsEntreprisessPartial && count($collCommonCertificatsEntreprisess)) {
                      $this->initCommonCertificatsEntreprisess(false);

                      foreach ($collCommonCertificatsEntreprisess as $obj) {
                        if (false == $this->collCommonCertificatsEntreprisess->contains($obj)) {
                          $this->collCommonCertificatsEntreprisess->append($obj);
                        }
                      }

                      $this->collCommonCertificatsEntreprisessPartial = true;
                    }

                    $collCommonCertificatsEntreprisess->getInternalIterator()->rewind();

                    return $collCommonCertificatsEntreprisess;
                }

                if ($partial && $this->collCommonCertificatsEntreprisess) {
                    foreach ($this->collCommonCertificatsEntreprisess as $obj) {
                        if ($obj->isNew()) {
                            $collCommonCertificatsEntreprisess[] = $obj;
                        }
                    }
                }

                $this->collCommonCertificatsEntreprisess = $collCommonCertificatsEntreprisess;
                $this->collCommonCertificatsEntreprisessPartial = false;
            }
        }

        return $this->collCommonCertificatsEntreprisess;
    }

    /**
     * Sets a collection of CommonCertificatsEntreprises objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonCertificatsEntreprisess A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function setCommonCertificatsEntreprisess(PropelCollection $commonCertificatsEntreprisess, PropelPDO $con = null)
    {
        $commonCertificatsEntreprisessToDelete = $this->getCommonCertificatsEntreprisess(new Criteria(), $con)->diff($commonCertificatsEntreprisess);


        $this->commonCertificatsEntreprisessScheduledForDeletion = $commonCertificatsEntreprisessToDelete;

        foreach ($commonCertificatsEntreprisessToDelete as $commonCertificatsEntreprisesRemoved) {
            $commonCertificatsEntreprisesRemoved->setCommonInscrit(null);
        }

        $this->collCommonCertificatsEntreprisess = null;
        foreach ($commonCertificatsEntreprisess as $commonCertificatsEntreprises) {
            $this->addCommonCertificatsEntreprises($commonCertificatsEntreprises);
        }

        $this->collCommonCertificatsEntreprisess = $commonCertificatsEntreprisess;
        $this->collCommonCertificatsEntreprisessPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonCertificatsEntreprises objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonCertificatsEntreprises objects.
     * @throws PropelException
     */
    public function countCommonCertificatsEntreprisess(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonCertificatsEntreprisessPartial && !$this->isNew();
        if (null === $this->collCommonCertificatsEntreprisess || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonCertificatsEntreprisess) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonCertificatsEntreprisess());
            }
            $query = CommonCertificatsEntreprisesQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonInscrit($this)
                ->count($con);
        }

        return count($this->collCommonCertificatsEntreprisess);
    }

    /**
     * Method called to associate a CommonCertificatsEntreprises object to this object
     * through the CommonCertificatsEntreprises foreign key attribute.
     *
     * @param   CommonCertificatsEntreprises $l CommonCertificatsEntreprises
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function addCommonCertificatsEntreprises(CommonCertificatsEntreprises $l)
    {
        if ($this->collCommonCertificatsEntreprisess === null) {
            $this->initCommonCertificatsEntreprisess();
            $this->collCommonCertificatsEntreprisessPartial = true;
        }
        if (!in_array($l, $this->collCommonCertificatsEntreprisess->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonCertificatsEntreprises($l);
        }

        return $this;
    }

    /**
     * @param	CommonCertificatsEntreprises $commonCertificatsEntreprises The commonCertificatsEntreprises object to add.
     */
    protected function doAddCommonCertificatsEntreprises($commonCertificatsEntreprises)
    {
        $this->collCommonCertificatsEntreprisess[]= $commonCertificatsEntreprises;
        $commonCertificatsEntreprises->setCommonInscrit($this);
    }

    /**
     * @param	CommonCertificatsEntreprises $commonCertificatsEntreprises The commonCertificatsEntreprises object to remove.
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function removeCommonCertificatsEntreprises($commonCertificatsEntreprises)
    {
        if ($this->getCommonCertificatsEntreprisess()->contains($commonCertificatsEntreprises)) {
            $this->collCommonCertificatsEntreprisess->remove($this->collCommonCertificatsEntreprisess->search($commonCertificatsEntreprises));
            if (null === $this->commonCertificatsEntreprisessScheduledForDeletion) {
                $this->commonCertificatsEntreprisessScheduledForDeletion = clone $this->collCommonCertificatsEntreprisess;
                $this->commonCertificatsEntreprisessScheduledForDeletion->clear();
            }
            $this->commonCertificatsEntreprisessScheduledForDeletion[]= clone $commonCertificatsEntreprises;
            $commonCertificatsEntreprises->setCommonInscrit(null);
        }

        return $this;
    }

    /**
     * Clears out the collCommonInscritSubs collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonInscrit The current object (for fluent API support)
     * @see        addCommonInscritSubs()
     */
    public function clearCommonInscritSubs()
    {
        $this->collCommonInscritSubs = null; // important to set this to null since that means it is uninitialized
        $this->collCommonInscritSubsPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonInscritSubs collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonInscritSubs($v = true)
    {
        $this->collCommonInscritSubsPartial = $v;
    }

    /**
     * Initializes the collCommonInscritSubs collection.
     *
     * By default this just sets the collCommonInscritSubs collection to an empty array (like clearcollCommonInscritSubs());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonInscritSubs($overrideExisting = true)
    {
        if (null !== $this->collCommonInscritSubs && !$overrideExisting) {
            return;
        }
        $this->collCommonInscritSubs = new PropelObjectCollection();
        $this->collCommonInscritSubs->setModel('CommonInscritSub');
    }

    /**
     * Gets an array of CommonInscritSub objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonInscrit is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonInscritSub[] List of CommonInscritSub objects
     * @throws PropelException
     */
    public function getCommonInscritSubs($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonInscritSubsPartial && !$this->isNew();
        if (null === $this->collCommonInscritSubs || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonInscritSubs) {
                // return empty collection
                $this->initCommonInscritSubs();
            } else {
                $collCommonInscritSubs = CommonInscritSubQuery::create(null, $criteria)
                    ->filterByCommonInscrit($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonInscritSubsPartial && count($collCommonInscritSubs)) {
                      $this->initCommonInscritSubs(false);

                      foreach ($collCommonInscritSubs as $obj) {
                        if (false == $this->collCommonInscritSubs->contains($obj)) {
                          $this->collCommonInscritSubs->append($obj);
                        }
                      }

                      $this->collCommonInscritSubsPartial = true;
                    }

                    $collCommonInscritSubs->getInternalIterator()->rewind();

                    return $collCommonInscritSubs;
                }

                if ($partial && $this->collCommonInscritSubs) {
                    foreach ($this->collCommonInscritSubs as $obj) {
                        if ($obj->isNew()) {
                            $collCommonInscritSubs[] = $obj;
                        }
                    }
                }

                $this->collCommonInscritSubs = $collCommonInscritSubs;
                $this->collCommonInscritSubsPartial = false;
            }
        }

        return $this->collCommonInscritSubs;
    }

    /**
     * Sets a collection of CommonInscritSub objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonInscritSubs A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function setCommonInscritSubs(PropelCollection $commonInscritSubs, PropelPDO $con = null)
    {
        $commonInscritSubsToDelete = $this->getCommonInscritSubs(new Criteria(), $con)->diff($commonInscritSubs);


        $this->commonInscritSubsScheduledForDeletion = $commonInscritSubsToDelete;

        foreach ($commonInscritSubsToDelete as $commonInscritSubRemoved) {
            $commonInscritSubRemoved->setCommonInscrit(null);
        }

        $this->collCommonInscritSubs = null;
        foreach ($commonInscritSubs as $commonInscritSub) {
            $this->addCommonInscritSub($commonInscritSub);
        }

        $this->collCommonInscritSubs = $commonInscritSubs;
        $this->collCommonInscritSubsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonInscritSub objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonInscritSub objects.
     * @throws PropelException
     */
    public function countCommonInscritSubs(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonInscritSubsPartial && !$this->isNew();
        if (null === $this->collCommonInscritSubs || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonInscritSubs) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonInscritSubs());
            }
            $query = CommonInscritSubQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonInscrit($this)
                ->count($con);
        }

        return count($this->collCommonInscritSubs);
    }

    /**
     * Method called to associate a CommonInscritSub object to this object
     * through the CommonInscritSub foreign key attribute.
     *
     * @param   CommonInscritSub $l CommonInscritSub
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function addCommonInscritSub(CommonInscritSub $l)
    {
        if ($this->collCommonInscritSubs === null) {
            $this->initCommonInscritSubs();
            $this->collCommonInscritSubsPartial = true;
        }
        if (!in_array($l, $this->collCommonInscritSubs->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonInscritSub($l);
        }

        return $this;
    }

    /**
     * @param	CommonInscritSub $commonInscritSub The commonInscritSub object to add.
     */
    protected function doAddCommonInscritSub($commonInscritSub)
    {
        $this->collCommonInscritSubs[]= $commonInscritSub;
        $commonInscritSub->setCommonInscrit($this);
    }

    /**
     * @param	CommonInscritSub $commonInscritSub The commonInscritSub object to remove.
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function removeCommonInscritSub($commonInscritSub)
    {
        if ($this->getCommonInscritSubs()->contains($commonInscritSub)) {
            $this->collCommonInscritSubs->remove($this->collCommonInscritSubs->search($commonInscritSub));
            if (null === $this->commonInscritSubsScheduledForDeletion) {
                $this->commonInscritSubsScheduledForDeletion = clone $this->collCommonInscritSubs;
                $this->commonInscritSubsScheduledForDeletion->clear();
            }
            $this->commonInscritSubsScheduledForDeletion[]= clone $commonInscritSub;
            $commonInscritSub->setCommonInscrit(null);
        }

        return $this;
    }

    /**
     * Clears out the collCommonPanierEntreprises collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonInscrit The current object (for fluent API support)
     * @see        addCommonPanierEntreprises()
     */
    public function clearCommonPanierEntreprises()
    {
        $this->collCommonPanierEntreprises = null; // important to set this to null since that means it is uninitialized
        $this->collCommonPanierEntreprisesPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonPanierEntreprises collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonPanierEntreprises($v = true)
    {
        $this->collCommonPanierEntreprisesPartial = $v;
    }

    /**
     * Initializes the collCommonPanierEntreprises collection.
     *
     * By default this just sets the collCommonPanierEntreprises collection to an empty array (like clearcollCommonPanierEntreprises());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonPanierEntreprises($overrideExisting = true)
    {
        if (null !== $this->collCommonPanierEntreprises && !$overrideExisting) {
            return;
        }
        $this->collCommonPanierEntreprises = new PropelObjectCollection();
        $this->collCommonPanierEntreprises->setModel('CommonPanierEntreprise');
    }

    /**
     * Gets an array of CommonPanierEntreprise objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonInscrit is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonPanierEntreprise[] List of CommonPanierEntreprise objects
     * @throws PropelException
     */
    public function getCommonPanierEntreprises($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonPanierEntreprisesPartial && !$this->isNew();
        if (null === $this->collCommonPanierEntreprises || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonPanierEntreprises) {
                // return empty collection
                $this->initCommonPanierEntreprises();
            } else {
                $collCommonPanierEntreprises = CommonPanierEntrepriseQuery::create(null, $criteria)
                    ->filterByCommonInscrit($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonPanierEntreprisesPartial && count($collCommonPanierEntreprises)) {
                      $this->initCommonPanierEntreprises(false);

                      foreach ($collCommonPanierEntreprises as $obj) {
                        if (false == $this->collCommonPanierEntreprises->contains($obj)) {
                          $this->collCommonPanierEntreprises->append($obj);
                        }
                      }

                      $this->collCommonPanierEntreprisesPartial = true;
                    }

                    $collCommonPanierEntreprises->getInternalIterator()->rewind();

                    return $collCommonPanierEntreprises;
                }

                if ($partial && $this->collCommonPanierEntreprises) {
                    foreach ($this->collCommonPanierEntreprises as $obj) {
                        if ($obj->isNew()) {
                            $collCommonPanierEntreprises[] = $obj;
                        }
                    }
                }

                $this->collCommonPanierEntreprises = $collCommonPanierEntreprises;
                $this->collCommonPanierEntreprisesPartial = false;
            }
        }

        return $this->collCommonPanierEntreprises;
    }

    /**
     * Sets a collection of CommonPanierEntreprise objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonPanierEntreprises A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function setCommonPanierEntreprises(PropelCollection $commonPanierEntreprises, PropelPDO $con = null)
    {
        $commonPanierEntreprisesToDelete = $this->getCommonPanierEntreprises(new Criteria(), $con)->diff($commonPanierEntreprises);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->commonPanierEntreprisesScheduledForDeletion = clone $commonPanierEntreprisesToDelete;

        foreach ($commonPanierEntreprisesToDelete as $commonPanierEntrepriseRemoved) {
            $commonPanierEntrepriseRemoved->setCommonInscrit(null);
        }

        $this->collCommonPanierEntreprises = null;
        foreach ($commonPanierEntreprises as $commonPanierEntreprise) {
            $this->addCommonPanierEntreprise($commonPanierEntreprise);
        }

        $this->collCommonPanierEntreprises = $commonPanierEntreprises;
        $this->collCommonPanierEntreprisesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonPanierEntreprise objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonPanierEntreprise objects.
     * @throws PropelException
     */
    public function countCommonPanierEntreprises(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonPanierEntreprisesPartial && !$this->isNew();
        if (null === $this->collCommonPanierEntreprises || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonPanierEntreprises) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonPanierEntreprises());
            }
            $query = CommonPanierEntrepriseQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonInscrit($this)
                ->count($con);
        }

        return count($this->collCommonPanierEntreprises);
    }

    /**
     * Method called to associate a CommonPanierEntreprise object to this object
     * through the CommonPanierEntreprise foreign key attribute.
     *
     * @param   CommonPanierEntreprise $l CommonPanierEntreprise
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function addCommonPanierEntreprise(CommonPanierEntreprise $l)
    {
        if ($this->collCommonPanierEntreprises === null) {
            $this->initCommonPanierEntreprises();
            $this->collCommonPanierEntreprisesPartial = true;
        }
        if (!in_array($l, $this->collCommonPanierEntreprises->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonPanierEntreprise($l);
        }

        return $this;
    }

    /**
     * @param	CommonPanierEntreprise $commonPanierEntreprise The commonPanierEntreprise object to add.
     */
    protected function doAddCommonPanierEntreprise($commonPanierEntreprise)
    {
        $this->collCommonPanierEntreprises[]= $commonPanierEntreprise;
        $commonPanierEntreprise->setCommonInscrit($this);
    }

    /**
     * @param	CommonPanierEntreprise $commonPanierEntreprise The commonPanierEntreprise object to remove.
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function removeCommonPanierEntreprise($commonPanierEntreprise)
    {
        if ($this->getCommonPanierEntreprises()->contains($commonPanierEntreprise)) {
            $this->collCommonPanierEntreprises->remove($this->collCommonPanierEntreprises->search($commonPanierEntreprise));
            if (null === $this->commonPanierEntreprisesScheduledForDeletion) {
                $this->commonPanierEntreprisesScheduledForDeletion = clone $this->collCommonPanierEntreprises;
                $this->commonPanierEntreprisesScheduledForDeletion->clear();
            }
            $this->commonPanierEntreprisesScheduledForDeletion[]= clone $commonPanierEntreprise;
            $commonPanierEntreprise->setCommonInscrit(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonInscrit is new, it will return
     * an empty collection; or if this CommonInscrit has previously
     * been saved, it will retrieve related CommonPanierEntreprises from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonInscrit.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonPanierEntreprise[] List of CommonPanierEntreprise objects
     */
    public function getCommonPanierEntreprisesJoinCommonEntreprise($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonPanierEntrepriseQuery::create(null, $criteria);
        $query->joinWith('CommonEntreprise', $join_behavior);

        return $this->getCommonPanierEntreprises($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonInscrit is new, it will return
     * an empty collection; or if this CommonInscrit has previously
     * been saved, it will retrieve related CommonPanierEntreprises from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonInscrit.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonPanierEntreprise[] List of CommonPanierEntreprise objects
     */
    public function getCommonPanierEntreprisesJoinCommonConsultation($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonPanierEntrepriseQuery::create(null, $criteria);
        $query->joinWith('CommonConsultation', $join_behavior);

        return $this->getCommonPanierEntreprises($query, $con);
    }

    /**
     * Clears out the collCommonExecInscritContrats collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonInscrit The current object (for fluent API support)
     * @see        addCommonExecInscritContrats()
     */
    public function clearCommonExecInscritContrats()
    {
        $this->collCommonExecInscritContrats = null; // important to set this to null since that means it is uninitialized
        $this->collCommonExecInscritContratsPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonExecInscritContrats collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonExecInscritContrats($v = true)
    {
        $this->collCommonExecInscritContratsPartial = $v;
    }

    /**
     * Initializes the collCommonExecInscritContrats collection.
     *
     * By default this just sets the collCommonExecInscritContrats collection to an empty array (like clearcollCommonExecInscritContrats());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonExecInscritContrats($overrideExisting = true)
    {
        if (null !== $this->collCommonExecInscritContrats && !$overrideExisting) {
            return;
        }
        $this->collCommonExecInscritContrats = new PropelObjectCollection();
        $this->collCommonExecInscritContrats->setModel('CommonExecInscritContrat');
    }

    /**
     * Gets an array of CommonExecInscritContrat objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonInscrit is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonExecInscritContrat[] List of CommonExecInscritContrat objects
     * @throws PropelException
     */
    public function getCommonExecInscritContrats($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecInscritContratsPartial && !$this->isNew();
        if (null === $this->collCommonExecInscritContrats || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonExecInscritContrats) {
                // return empty collection
                $this->initCommonExecInscritContrats();
            } else {
                $collCommonExecInscritContrats = CommonExecInscritContratQuery::create(null, $criteria)
                    ->filterByCommonInscrit($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonExecInscritContratsPartial && count($collCommonExecInscritContrats)) {
                      $this->initCommonExecInscritContrats(false);

                      foreach ($collCommonExecInscritContrats as $obj) {
                        if (false == $this->collCommonExecInscritContrats->contains($obj)) {
                          $this->collCommonExecInscritContrats->append($obj);
                        }
                      }

                      $this->collCommonExecInscritContratsPartial = true;
                    }

                    $collCommonExecInscritContrats->getInternalIterator()->rewind();

                    return $collCommonExecInscritContrats;
                }

                if ($partial && $this->collCommonExecInscritContrats) {
                    foreach ($this->collCommonExecInscritContrats as $obj) {
                        if ($obj->isNew()) {
                            $collCommonExecInscritContrats[] = $obj;
                        }
                    }
                }

                $this->collCommonExecInscritContrats = $collCommonExecInscritContrats;
                $this->collCommonExecInscritContratsPartial = false;
            }
        }

        return $this->collCommonExecInscritContrats;
    }

    /**
     * Sets a collection of CommonExecInscritContrat objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonExecInscritContrats A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function setCommonExecInscritContrats(PropelCollection $commonExecInscritContrats, PropelPDO $con = null)
    {
        $commonExecInscritContratsToDelete = $this->getCommonExecInscritContrats(new Criteria(), $con)->diff($commonExecInscritContrats);


        $this->commonExecInscritContratsScheduledForDeletion = $commonExecInscritContratsToDelete;

        foreach ($commonExecInscritContratsToDelete as $commonExecInscritContratRemoved) {
            $commonExecInscritContratRemoved->setCommonInscrit(null);
        }

        $this->collCommonExecInscritContrats = null;
        foreach ($commonExecInscritContrats as $commonExecInscritContrat) {
            $this->addCommonExecInscritContrat($commonExecInscritContrat);
        }

        $this->collCommonExecInscritContrats = $commonExecInscritContrats;
        $this->collCommonExecInscritContratsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonExecInscritContrat objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonExecInscritContrat objects.
     * @throws PropelException
     */
    public function countCommonExecInscritContrats(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonExecInscritContratsPartial && !$this->isNew();
        if (null === $this->collCommonExecInscritContrats || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonExecInscritContrats) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonExecInscritContrats());
            }
            $query = CommonExecInscritContratQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonInscrit($this)
                ->count($con);
        }

        return count($this->collCommonExecInscritContrats);
    }

    /**
     * Method called to associate a CommonExecInscritContrat object to this object
     * through the CommonExecInscritContrat foreign key attribute.
     *
     * @param   CommonExecInscritContrat $l CommonExecInscritContrat
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function addCommonExecInscritContrat(CommonExecInscritContrat $l)
    {
        if ($this->collCommonExecInscritContrats === null) {
            $this->initCommonExecInscritContrats();
            $this->collCommonExecInscritContratsPartial = true;
        }
        if (!in_array($l, $this->collCommonExecInscritContrats->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonExecInscritContrat($l);
        }

        return $this;
    }

    /**
     * @param	CommonExecInscritContrat $commonExecInscritContrat The commonExecInscritContrat object to add.
     */
    protected function doAddCommonExecInscritContrat($commonExecInscritContrat)
    {
        $this->collCommonExecInscritContrats[]= $commonExecInscritContrat;
        $commonExecInscritContrat->setCommonInscrit($this);
    }

    /**
     * @param	CommonExecInscritContrat $commonExecInscritContrat The commonExecInscritContrat object to remove.
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function removeCommonExecInscritContrat($commonExecInscritContrat)
    {
        if ($this->getCommonExecInscritContrats()->contains($commonExecInscritContrat)) {
            $this->collCommonExecInscritContrats->remove($this->collCommonExecInscritContrats->search($commonExecInscritContrat));
            if (null === $this->commonExecInscritContratsScheduledForDeletion) {
                $this->commonExecInscritContratsScheduledForDeletion = clone $this->collCommonExecInscritContrats;
                $this->commonExecInscritContratsScheduledForDeletion->clear();
            }
            $this->commonExecInscritContratsScheduledForDeletion[]= clone $commonExecInscritContrat;
            $commonExecInscritContrat->setCommonInscrit(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonInscrit is new, it will return
     * an empty collection; or if this CommonInscrit has previously
     * been saved, it will retrieve related CommonExecInscritContrats from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonInscrit.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecInscritContrat[] List of CommonExecInscritContrat objects
     */
    public function getCommonExecInscritContratsJoinCommonExecContractant($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecInscritContratQuery::create(null, $criteria);
        $query->joinWith('CommonExecContractant', $join_behavior);

        return $this->getCommonExecInscritContrats($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonInscrit is new, it will return
     * an empty collection; or if this CommonInscrit has previously
     * been saved, it will retrieve related CommonExecInscritContrats from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonInscrit.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecInscritContrat[] List of CommonExecInscritContrat objects
     */
    public function getCommonExecInscritContratsJoinCommonExecContrat($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecInscritContratQuery::create(null, $criteria);
        $query->joinWith('CommonExecContrat', $join_behavior);

        return $this->getCommonExecInscritContrats($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonInscrit is new, it will return
     * an empty collection; or if this CommonInscrit has previously
     * been saved, it will retrieve related CommonExecInscritContrats from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonInscrit.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonExecInscritContrat[] List of CommonExecInscritContrat objects
     */
    public function getCommonExecInscritContratsJoinCommonEntreprise($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonExecInscritContratQuery::create(null, $criteria);
        $query->joinWith('CommonEntreprise', $join_behavior);

        return $this->getCommonExecInscritContrats($query, $con);
    }

    /**
     * Clears out the collCommonFactures collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonInscrit The current object (for fluent API support)
     * @see        addCommonFactures()
     */
    public function clearCommonFactures()
    {
        $this->collCommonFactures = null; // important to set this to null since that means it is uninitialized
        $this->collCommonFacturesPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonFactures collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonFactures($v = true)
    {
        $this->collCommonFacturesPartial = $v;
    }

    /**
     * Initializes the collCommonFactures collection.
     *
     * By default this just sets the collCommonFactures collection to an empty array (like clearcollCommonFactures());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonFactures($overrideExisting = true)
    {
        if (null !== $this->collCommonFactures && !$overrideExisting) {
            return;
        }
        $this->collCommonFactures = new PropelObjectCollection();
        $this->collCommonFactures->setModel('CommonFacture');
    }

    /**
     * Gets an array of CommonFacture objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonInscrit is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonFacture[] List of CommonFacture objects
     * @throws PropelException
     */
    public function getCommonFactures($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonFacturesPartial && !$this->isNew();
        if (null === $this->collCommonFactures || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonFactures) {
                // return empty collection
                $this->initCommonFactures();
            } else {
                $collCommonFactures = CommonFactureQuery::create(null, $criteria)
                    ->filterByCommonInscrit($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonFacturesPartial && count($collCommonFactures)) {
                      $this->initCommonFactures(false);

                      foreach ($collCommonFactures as $obj) {
                        if (false == $this->collCommonFactures->contains($obj)) {
                          $this->collCommonFactures->append($obj);
                        }
                      }

                      $this->collCommonFacturesPartial = true;
                    }

                    $collCommonFactures->getInternalIterator()->rewind();

                    return $collCommonFactures;
                }

                if ($partial && $this->collCommonFactures) {
                    foreach ($this->collCommonFactures as $obj) {
                        if ($obj->isNew()) {
                            $collCommonFactures[] = $obj;
                        }
                    }
                }

                $this->collCommonFactures = $collCommonFactures;
                $this->collCommonFacturesPartial = false;
            }
        }

        return $this->collCommonFactures;
    }

    /**
     * Sets a collection of CommonFacture objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonFactures A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function setCommonFactures(PropelCollection $commonFactures, PropelPDO $con = null)
    {
        $commonFacturesToDelete = $this->getCommonFactures(new Criteria(), $con)->diff($commonFactures);


        $this->commonFacturesScheduledForDeletion = $commonFacturesToDelete;

        foreach ($commonFacturesToDelete as $commonFactureRemoved) {
            $commonFactureRemoved->setCommonInscrit(null);
        }

        $this->collCommonFactures = null;
        foreach ($commonFactures as $commonFacture) {
            $this->addCommonFacture($commonFacture);
        }

        $this->collCommonFactures = $commonFactures;
        $this->collCommonFacturesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonFacture objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonFacture objects.
     * @throws PropelException
     */
    public function countCommonFactures(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonFacturesPartial && !$this->isNew();
        if (null === $this->collCommonFactures || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonFactures) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonFactures());
            }
            $query = CommonFactureQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonInscrit($this)
                ->count($con);
        }

        return count($this->collCommonFactures);
    }

    /**
     * Method called to associate a CommonFacture object to this object
     * through the CommonFacture foreign key attribute.
     *
     * @param   CommonFacture $l CommonFacture
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function addCommonFacture(CommonFacture $l)
    {
        if ($this->collCommonFactures === null) {
            $this->initCommonFactures();
            $this->collCommonFacturesPartial = true;
        }
        if (!in_array($l, $this->collCommonFactures->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonFacture($l);
        }

        return $this;
    }

    /**
     * @param	CommonFacture $commonFacture The commonFacture object to add.
     */
    protected function doAddCommonFacture($commonFacture)
    {
        $this->collCommonFactures[]= $commonFacture;
        $commonFacture->setCommonInscrit($this);
    }

    /**
     * @param	CommonFacture $commonFacture The commonFacture object to remove.
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function removeCommonFacture($commonFacture)
    {
        if ($this->getCommonFactures()->contains($commonFacture)) {
            $this->collCommonFactures->remove($this->collCommonFactures->search($commonFacture));
            if (null === $this->commonFacturesScheduledForDeletion) {
                $this->commonFacturesScheduledForDeletion = clone $this->collCommonFactures;
                $this->commonFacturesScheduledForDeletion->clear();
            }
            $this->commonFacturesScheduledForDeletion[]= clone $commonFacture;
            $commonFacture->setCommonInscrit(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonInscrit is new, it will return
     * an empty collection; or if this CommonInscrit has previously
     * been saved, it will retrieve related CommonFactures from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonInscrit.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonFacture[] List of CommonFacture objects
     */
    public function getCommonFacturesJoinCommonTypeFacture($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonFactureQuery::create(null, $criteria);
        $query->joinWith('CommonTypeFacture', $join_behavior);

        return $this->getCommonFactures($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonInscrit is new, it will return
     * an empty collection; or if this CommonInscrit has previously
     * been saved, it will retrieve related CommonFactures from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonInscrit.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonFacture[] List of CommonFacture objects
     */
    public function getCommonFacturesJoinCommonSousTypeFacture($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonFactureQuery::create(null, $criteria);
        $query->joinWith('CommonSousTypeFacture', $join_behavior);

        return $this->getCommonFactures($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonInscrit is new, it will return
     * an empty collection; or if this CommonInscrit has previously
     * been saved, it will retrieve related CommonFactures from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonInscrit.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonFacture[] List of CommonFacture objects
     */
    public function getCommonFacturesJoinCommonEntreprise($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonFactureQuery::create(null, $criteria);
        $query->joinWith('CommonEntreprise', $join_behavior);

        return $this->getCommonFactures($query, $con);
    }

    /**
     * Clears out the collCommonTReponseElecFormulaires collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonInscrit The current object (for fluent API support)
     * @see        addCommonTReponseElecFormulaires()
     */
    public function clearCommonTReponseElecFormulaires()
    {
        $this->collCommonTReponseElecFormulaires = null; // important to set this to null since that means it is uninitialized
        $this->collCommonTReponseElecFormulairesPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonTReponseElecFormulaires collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonTReponseElecFormulaires($v = true)
    {
        $this->collCommonTReponseElecFormulairesPartial = $v;
    }

    /**
     * Initializes the collCommonTReponseElecFormulaires collection.
     *
     * By default this just sets the collCommonTReponseElecFormulaires collection to an empty array (like clearcollCommonTReponseElecFormulaires());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonTReponseElecFormulaires($overrideExisting = true)
    {
        if (null !== $this->collCommonTReponseElecFormulaires && !$overrideExisting) {
            return;
        }
        $this->collCommonTReponseElecFormulaires = new PropelObjectCollection();
        $this->collCommonTReponseElecFormulaires->setModel('CommonTReponseElecFormulaire');
    }

    /**
     * Gets an array of CommonTReponseElecFormulaire objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonInscrit is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonTReponseElecFormulaire[] List of CommonTReponseElecFormulaire objects
     * @throws PropelException
     */
    public function getCommonTReponseElecFormulaires($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonTReponseElecFormulairesPartial && !$this->isNew();
        if (null === $this->collCommonTReponseElecFormulaires || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonTReponseElecFormulaires) {
                // return empty collection
                $this->initCommonTReponseElecFormulaires();
            } else {
                $collCommonTReponseElecFormulaires = CommonTReponseElecFormulaireQuery::create(null, $criteria)
                    ->filterByCommonInscrit($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonTReponseElecFormulairesPartial && count($collCommonTReponseElecFormulaires)) {
                      $this->initCommonTReponseElecFormulaires(false);

                      foreach ($collCommonTReponseElecFormulaires as $obj) {
                        if (false == $this->collCommonTReponseElecFormulaires->contains($obj)) {
                          $this->collCommonTReponseElecFormulaires->append($obj);
                        }
                      }

                      $this->collCommonTReponseElecFormulairesPartial = true;
                    }

                    $collCommonTReponseElecFormulaires->getInternalIterator()->rewind();

                    return $collCommonTReponseElecFormulaires;
                }

                if ($partial && $this->collCommonTReponseElecFormulaires) {
                    foreach ($this->collCommonTReponseElecFormulaires as $obj) {
                        if ($obj->isNew()) {
                            $collCommonTReponseElecFormulaires[] = $obj;
                        }
                    }
                }

                $this->collCommonTReponseElecFormulaires = $collCommonTReponseElecFormulaires;
                $this->collCommonTReponseElecFormulairesPartial = false;
            }
        }

        return $this->collCommonTReponseElecFormulaires;
    }

    /**
     * Sets a collection of CommonTReponseElecFormulaire objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonTReponseElecFormulaires A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function setCommonTReponseElecFormulaires(PropelCollection $commonTReponseElecFormulaires, PropelPDO $con = null)
    {
        $commonTReponseElecFormulairesToDelete = $this->getCommonTReponseElecFormulaires(new Criteria(), $con)->diff($commonTReponseElecFormulaires);


        $this->commonTReponseElecFormulairesScheduledForDeletion = $commonTReponseElecFormulairesToDelete;

        foreach ($commonTReponseElecFormulairesToDelete as $commonTReponseElecFormulaireRemoved) {
            $commonTReponseElecFormulaireRemoved->setCommonInscrit(null);
        }

        $this->collCommonTReponseElecFormulaires = null;
        foreach ($commonTReponseElecFormulaires as $commonTReponseElecFormulaire) {
            $this->addCommonTReponseElecFormulaire($commonTReponseElecFormulaire);
        }

        $this->collCommonTReponseElecFormulaires = $commonTReponseElecFormulaires;
        $this->collCommonTReponseElecFormulairesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonTReponseElecFormulaire objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonTReponseElecFormulaire objects.
     * @throws PropelException
     */
    public function countCommonTReponseElecFormulaires(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonTReponseElecFormulairesPartial && !$this->isNew();
        if (null === $this->collCommonTReponseElecFormulaires || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonTReponseElecFormulaires) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonTReponseElecFormulaires());
            }
            $query = CommonTReponseElecFormulaireQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonInscrit($this)
                ->count($con);
        }

        return count($this->collCommonTReponseElecFormulaires);
    }

    /**
     * Method called to associate a CommonTReponseElecFormulaire object to this object
     * through the CommonTReponseElecFormulaire foreign key attribute.
     *
     * @param   CommonTReponseElecFormulaire $l CommonTReponseElecFormulaire
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function addCommonTReponseElecFormulaire(CommonTReponseElecFormulaire $l)
    {
        if ($this->collCommonTReponseElecFormulaires === null) {
            $this->initCommonTReponseElecFormulaires();
            $this->collCommonTReponseElecFormulairesPartial = true;
        }
        if (!in_array($l, $this->collCommonTReponseElecFormulaires->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonTReponseElecFormulaire($l);
        }

        return $this;
    }

    /**
     * @param	CommonTReponseElecFormulaire $commonTReponseElecFormulaire The commonTReponseElecFormulaire object to add.
     */
    protected function doAddCommonTReponseElecFormulaire($commonTReponseElecFormulaire)
    {
        $this->collCommonTReponseElecFormulaires[]= $commonTReponseElecFormulaire;
        $commonTReponseElecFormulaire->setCommonInscrit($this);
    }

    /**
     * @param	CommonTReponseElecFormulaire $commonTReponseElecFormulaire The commonTReponseElecFormulaire object to remove.
     * @return CommonInscrit The current object (for fluent API support)
     */
    public function removeCommonTReponseElecFormulaire($commonTReponseElecFormulaire)
    {
        if ($this->getCommonTReponseElecFormulaires()->contains($commonTReponseElecFormulaire)) {
            $this->collCommonTReponseElecFormulaires->remove($this->collCommonTReponseElecFormulaires->search($commonTReponseElecFormulaire));
            if (null === $this->commonTReponseElecFormulairesScheduledForDeletion) {
                $this->commonTReponseElecFormulairesScheduledForDeletion = clone $this->collCommonTReponseElecFormulaires;
                $this->commonTReponseElecFormulairesScheduledForDeletion->clear();
            }
            $this->commonTReponseElecFormulairesScheduledForDeletion[]= clone $commonTReponseElecFormulaire;
            $commonTReponseElecFormulaire->setCommonInscrit(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonInscrit is new, it will return
     * an empty collection; or if this CommonInscrit has previously
     * been saved, it will retrieve related CommonTReponseElecFormulaires from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonInscrit.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonTReponseElecFormulaire[] List of CommonTReponseElecFormulaire objects
     */
    public function getCommonTReponseElecFormulairesJoinCommonEntreprise($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonTReponseElecFormulaireQuery::create(null, $criteria);
        $query->joinWith('CommonEntreprise', $join_behavior);

        return $this->getCommonTReponseElecFormulaires($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonInscrit is new, it will return
     * an empty collection; or if this CommonInscrit has previously
     * been saved, it will retrieve related CommonTReponseElecFormulaires from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonInscrit.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonTReponseElecFormulaire[] List of CommonTReponseElecFormulaire objects
     */
    public function getCommonTReponseElecFormulairesJoinCommonConsultation($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonTReponseElecFormulaireQuery::create(null, $criteria);
        $query->joinWith('CommonConsultation', $join_behavior);

        return $this->getCommonTReponseElecFormulaires($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->entreprise_id = null;
        $this->login = null;
        $this->mdp = null;
        $this->num_cert = null;
        $this->cert = null;
        $this->civilite = null;
        $this->nom = null;
        $this->prenom = null;
        $this->adresse = null;
        $this->codepostal = null;
        $this->ville = null;
        $this->pays = null;
        $this->email = null;
        $this->telephone = null;
        $this->categorie = null;
        $this->motstitreresume = null;
        $this->periode = null;
        $this->siret = null;
        $this->fax = null;
        $this->code_cpv = null;
        $this->id_langue = null;
        $this->profil = null;
        $this->adresse2 = null;
        $this->bloque = null;
        $this->id_initial = null;
        $this->inscrit_annuaire_defense = null;
        $this->date_creation = null;
        $this->date_modification = null;
        $this->tentatives_mdp = null;
        $this->uid = null;
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
            if ($this->collCommonCertificatsEntreprisess) {
                foreach ($this->collCommonCertificatsEntreprisess as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonInscritSubs) {
                foreach ($this->collCommonInscritSubs as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonPanierEntreprises) {
                foreach ($this->collCommonPanierEntreprises as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonExecInscritContrats) {
                foreach ($this->collCommonExecInscritContrats as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonFactures) {
                foreach ($this->collCommonFactures as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonTReponseElecFormulaires) {
                foreach ($this->collCommonTReponseElecFormulaires as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->aCommonEntreprise instanceof Persistent) {
              $this->aCommonEntreprise->clearAllReferences($deep);
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCommonCertificatsEntreprisess instanceof PropelCollection) {
            $this->collCommonCertificatsEntreprisess->clearIterator();
        }
        $this->collCommonCertificatsEntreprisess = null;
        if ($this->collCommonInscritSubs instanceof PropelCollection) {
            $this->collCommonInscritSubs->clearIterator();
        }
        $this->collCommonInscritSubs = null;
        if ($this->collCommonPanierEntreprises instanceof PropelCollection) {
            $this->collCommonPanierEntreprises->clearIterator();
        }
        $this->collCommonPanierEntreprises = null;
        if ($this->collCommonExecInscritContrats instanceof PropelCollection) {
            $this->collCommonExecInscritContrats->clearIterator();
        }
        $this->collCommonExecInscritContrats = null;
        if ($this->collCommonFactures instanceof PropelCollection) {
            $this->collCommonFactures->clearIterator();
        }
        $this->collCommonFactures = null;
        if ($this->collCommonTReponseElecFormulaires instanceof PropelCollection) {
            $this->collCommonTReponseElecFormulaires->clearIterator();
        }
        $this->collCommonTReponseElecFormulaires = null;
        $this->aCommonEntreprise = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonInscritPeer::DEFAULT_STRING_FORMAT);
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
