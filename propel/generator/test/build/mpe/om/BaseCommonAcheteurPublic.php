<?php


/**
 * Base class that represents a row from the 'AcheteurPublic' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonAcheteurPublic extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonAcheteurPublicPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonAcheteurPublicPeer
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
     * The value for the denomination field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $denomination;

    /**
     * The value for the prm field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $prm;

    /**
     * The value for the adresse field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adresse;

    /**
     * The value for the cp field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $cp;

    /**
     * The value for the ville field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $ville;

    /**
     * The value for the dept field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $dept;

    /**
     * The value for the type_org field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $type_org;

    /**
     * The value for the telephone field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $telephone;

    /**
     * The value for the fax field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $fax;

    /**
     * The value for the mail field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $mail;

    /**
     * The value for the url field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $url;

    /**
     * The value for the url_acheteur field.
     * @var        string
     */
    protected $url_acheteur;

    /**
     * The value for the facture_numero field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $facture_numero;

    /**
     * The value for the facture_code field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $facture_code;

    /**
     * The value for the facture_denomination field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $facture_denomination;

    /**
     * The value for the facturation_service field.
     * @var        string
     */
    protected $facturation_service;

    /**
     * The value for the facture_adresse field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $facture_adresse;

    /**
     * The value for the facture_cp field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $facture_cp;

    /**
     * The value for the facture_ville field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $facture_ville;

    /**
     * The value for the facture_pays field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $facture_pays;

    /**
     * The value for the id_aapc field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_aapc;

    /**
     * The value for the boamp_login field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $boamp_login;

    /**
     * The value for the boamp_password field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $boamp_password;

    /**
     * The value for the boamp_mail field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $boamp_mail;

    /**
     * The value for the boamp_target field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $boamp_target;

    /**
     * The value for the default_form_values field.
     * @var        string
     */
    protected $default_form_values;

    /**
     * The value for the defaut_form_am_boamp field.
     * @var        string
     */
    protected $defaut_form_am_boamp;

    /**
     * The value for the defaut_form_am_boamp_joue field.
     * @var        string
     */
    protected $defaut_form_am_boamp_joue;

    /**
     * The value for the defaut_form_mapa_boamp field.
     * @var        string
     */
    protected $defaut_form_mapa_boamp;

    /**
     * The value for the defaut_form_aconcours field.
     * @var        string
     */
    protected $defaut_form_aconcours;

    /**
     * The value for the defaut_form_as_boamp_joue field.
     * @var        string
     */
    protected $defaut_form_as_boamp_joue;

    /**
     * The value for the defaut_form_aa_boamp field.
     * @var        string
     */
    protected $defaut_form_aa_boamp;

    /**
     * The value for the defaut_form_ar_mapa_boamp field.
     * @var        string
     */
    protected $defaut_form_ar_mapa_boamp;

    /**
     * The value for the defaut_form_05_boamp field.
     * @var        string
     */
    protected $defaut_form_05_boamp;

    /**
     * The value for the defaut_form_rect field.
     * @var        string
     */
    protected $defaut_form_rect;

    /**
     * The value for the defaut_form_aa_boamp_joue field.
     * @var        string
     */
    protected $defaut_form_aa_boamp_joue;

    /**
     * The value for the id_service field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_service;

    /**
     * The value for the livraison_service field.
     * @var        string
     */
    protected $livraison_service;

    /**
     * The value for the livraison_adresse field.
     * @var        string
     */
    protected $livraison_adresse;

    /**
     * The value for the livraison_code_postal field.
     * @var        string
     */
    protected $livraison_code_postal;

    /**
     * The value for the livraison_ville field.
     * @var        string
     */
    protected $livraison_ville;

    /**
     * The value for the livraison_pays field.
     * @var        string
     */
    protected $livraison_pays;

    /**
     * The value for the type_pouvoir_activite field.
     * @var        string
     */
    protected $type_pouvoir_activite;

    /**
     * The value for the code_nuts field.
     * @var        string
     */
    protected $code_nuts;

    /**
     * The value for the modalites_financement field.
     * @var        string
     */
    protected $modalites_financement;

    /**
     * The value for the moniteur_provenance field.
     * Note: this column has a database default value of: 90
     * @var        int
     */
    protected $moniteur_provenance;

    /**
     * The value for the code_acces_logiciel field.
     * Note: this column has a database default value of: 'Y8YG-69WD-4421-4G28'
     * @var        string
     */
    protected $code_acces_logiciel;

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
        $this->denomination = '';
        $this->prm = '';
        $this->adresse = '';
        $this->cp = '';
        $this->ville = '';
        $this->dept = '';
        $this->type_org = '';
        $this->telephone = '';
        $this->fax = '';
        $this->mail = '';
        $this->url = '';
        $this->facture_numero = '';
        $this->facture_code = '';
        $this->facture_denomination = '';
        $this->facture_adresse = '';
        $this->facture_cp = '';
        $this->facture_ville = '';
        $this->facture_pays = '';
        $this->id_aapc = 0;
        $this->boamp_login = '';
        $this->boamp_password = '';
        $this->boamp_mail = '';
        $this->boamp_target = '0';
        $this->id_service = 0;
        $this->moniteur_provenance = 90;
        $this->code_acces_logiciel = 'Y8YG-69WD-4421-4G28';
    }

    /**
     * Initializes internal state of BaseCommonAcheteurPublic object.
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
     * Get the [denomination] column value.
     * 
     * @return string
     */
    public function getDenomination()
    {

        return $this->denomination;
    }

    /**
     * Get the [prm] column value.
     * 
     * @return string
     */
    public function getPrm()
    {

        return $this->prm;
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
     * Get the [dept] column value.
     * 
     * @return string
     */
    public function getDept()
    {

        return $this->dept;
    }

    /**
     * Get the [type_org] column value.
     * 
     * @return string
     */
    public function getTypeOrg()
    {

        return $this->type_org;
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
     * Get the [fax] column value.
     * 
     * @return string
     */
    public function getFax()
    {

        return $this->fax;
    }

    /**
     * Get the [mail] column value.
     * 
     * @return string
     */
    public function getMail()
    {

        return $this->mail;
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
     * Get the [url_acheteur] column value.
     * 
     * @return string
     */
    public function getUrlAcheteur()
    {

        return $this->url_acheteur;
    }

    /**
     * Get the [facture_numero] column value.
     * 
     * @return string
     */
    public function getFactureNumero()
    {

        return $this->facture_numero;
    }

    /**
     * Get the [facture_code] column value.
     * 
     * @return string
     */
    public function getFactureCode()
    {

        return $this->facture_code;
    }

    /**
     * Get the [facture_denomination] column value.
     * 
     * @return string
     */
    public function getFactureDenomination()
    {

        return $this->facture_denomination;
    }

    /**
     * Get the [facturation_service] column value.
     * 
     * @return string
     */
    public function getFacturationService()
    {

        return $this->facturation_service;
    }

    /**
     * Get the [facture_adresse] column value.
     * 
     * @return string
     */
    public function getFactureAdresse()
    {

        return $this->facture_adresse;
    }

    /**
     * Get the [facture_cp] column value.
     * 
     * @return string
     */
    public function getFactureCp()
    {

        return $this->facture_cp;
    }

    /**
     * Get the [facture_ville] column value.
     * 
     * @return string
     */
    public function getFactureVille()
    {

        return $this->facture_ville;
    }

    /**
     * Get the [facture_pays] column value.
     * 
     * @return string
     */
    public function getFacturePays()
    {

        return $this->facture_pays;
    }

    /**
     * Get the [id_aapc] column value.
     * 
     * @return int
     */
    public function getIdAapc()
    {

        return $this->id_aapc;
    }

    /**
     * Get the [boamp_login] column value.
     * 
     * @return string
     */
    public function getBoampLogin()
    {

        return $this->boamp_login;
    }

    /**
     * Get the [boamp_password] column value.
     * 
     * @return string
     */
    public function getBoampPassword()
    {

        return $this->boamp_password;
    }

    /**
     * Get the [boamp_mail] column value.
     * 
     * @return string
     */
    public function getBoampMail()
    {

        return $this->boamp_mail;
    }

    /**
     * Get the [boamp_target] column value.
     * 
     * @return string
     */
    public function getBoampTarget()
    {

        return $this->boamp_target;
    }

    /**
     * Get the [default_form_values] column value.
     * 
     * @return string
     */
    public function getDefaultFormValues()
    {

        return $this->default_form_values;
    }

    /**
     * Get the [defaut_form_am_boamp] column value.
     * 
     * @return string
     */
    public function getDefautFormAmBoamp()
    {

        return $this->defaut_form_am_boamp;
    }

    /**
     * Get the [defaut_form_am_boamp_joue] column value.
     * 
     * @return string
     */
    public function getDefautFormAmBoampJoue()
    {

        return $this->defaut_form_am_boamp_joue;
    }

    /**
     * Get the [defaut_form_mapa_boamp] column value.
     * 
     * @return string
     */
    public function getDefautFormMapaBoamp()
    {

        return $this->defaut_form_mapa_boamp;
    }

    /**
     * Get the [defaut_form_aconcours] column value.
     * 
     * @return string
     */
    public function getDefautFormAconcours()
    {

        return $this->defaut_form_aconcours;
    }

    /**
     * Get the [defaut_form_as_boamp_joue] column value.
     * 
     * @return string
     */
    public function getDefautFormAsBoampJoue()
    {

        return $this->defaut_form_as_boamp_joue;
    }

    /**
     * Get the [defaut_form_aa_boamp] column value.
     * 
     * @return string
     */
    public function getDefautFormAaBoamp()
    {

        return $this->defaut_form_aa_boamp;
    }

    /**
     * Get the [defaut_form_ar_mapa_boamp] column value.
     * 
     * @return string
     */
    public function getDefautFormArMapaBoamp()
    {

        return $this->defaut_form_ar_mapa_boamp;
    }

    /**
     * Get the [defaut_form_05_boamp] column value.
     * 
     * @return string
     */
    public function getDefautForm05Boamp()
    {

        return $this->defaut_form_05_boamp;
    }

    /**
     * Get the [defaut_form_rect] column value.
     * 
     * @return string
     */
    public function getDefautFormRect()
    {

        return $this->defaut_form_rect;
    }

    /**
     * Get the [defaut_form_aa_boamp_joue] column value.
     * 
     * @return string
     */
    public function getDefautFormAaBoampJoue()
    {

        return $this->defaut_form_aa_boamp_joue;
    }

    /**
     * Get the [id_service] column value.
     * 
     * @return int
     */
    public function getIdService()
    {

        return $this->id_service;
    }

    /**
     * Get the [livraison_service] column value.
     * 
     * @return string
     */
    public function getLivraisonService()
    {

        return $this->livraison_service;
    }

    /**
     * Get the [livraison_adresse] column value.
     * 
     * @return string
     */
    public function getLivraisonAdresse()
    {

        return $this->livraison_adresse;
    }

    /**
     * Get the [livraison_code_postal] column value.
     * 
     * @return string
     */
    public function getLivraisonCodePostal()
    {

        return $this->livraison_code_postal;
    }

    /**
     * Get the [livraison_ville] column value.
     * 
     * @return string
     */
    public function getLivraisonVille()
    {

        return $this->livraison_ville;
    }

    /**
     * Get the [livraison_pays] column value.
     * 
     * @return string
     */
    public function getLivraisonPays()
    {

        return $this->livraison_pays;
    }

    /**
     * Get the [type_pouvoir_activite] column value.
     * 
     * @return string
     */
    public function getTypePouvoirActivite()
    {

        return $this->type_pouvoir_activite;
    }

    /**
     * Get the [code_nuts] column value.
     * 
     * @return string
     */
    public function getCodeNuts()
    {

        return $this->code_nuts;
    }

    /**
     * Get the [modalites_financement] column value.
     * 
     * @return string
     */
    public function getModalitesFinancement()
    {

        return $this->modalites_financement;
    }

    /**
     * Get the [moniteur_provenance] column value.
     * 
     * @return int
     */
    public function getMoniteurProvenance()
    {

        return $this->moniteur_provenance;
    }

    /**
     * Get the [code_acces_logiciel] column value.
     * 
     * @return string
     */
    public function getCodeAccesLogiciel()
    {

        return $this->code_acces_logiciel;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [denomination] column.
     * 
     * @param string $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setDenomination($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->denomination !== $v) {
            $this->denomination = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::DENOMINATION;
        }


        return $this;
    } // setDenomination()

    /**
     * Set the value of [prm] column.
     * 
     * @param string $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setPrm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prm !== $v) {
            $this->prm = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::PRM;
        }


        return $this;
    } // setPrm()

    /**
     * Set the value of [adresse] column.
     * 
     * @param string $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setAdresse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse !== $v) {
            $this->adresse = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::ADRESSE;
        }


        return $this;
    } // setAdresse()

    /**
     * Set the value of [cp] column.
     * 
     * @param string $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setCp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cp !== $v) {
            $this->cp = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::CP;
        }


        return $this;
    } // setCp()

    /**
     * Set the value of [ville] column.
     * 
     * @param string $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setVille($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ville !== $v) {
            $this->ville = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::VILLE;
        }


        return $this;
    } // setVille()

    /**
     * Set the value of [dept] column.
     * 
     * @param string $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setDept($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->dept !== $v) {
            $this->dept = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::DEPT;
        }


        return $this;
    } // setDept()

    /**
     * Set the value of [type_org] column.
     * 
     * @param string $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setTypeOrg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_org !== $v) {
            $this->type_org = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::TYPE_ORG;
        }


        return $this;
    } // setTypeOrg()

    /**
     * Set the value of [telephone] column.
     * 
     * @param string $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setTelephone($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->telephone !== $v) {
            $this->telephone = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::TELEPHONE;
        }


        return $this;
    } // setTelephone()

    /**
     * Set the value of [fax] column.
     * 
     * @param string $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setFax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fax !== $v) {
            $this->fax = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::FAX;
        }


        return $this;
    } // setFax()

    /**
     * Set the value of [mail] column.
     * 
     * @param string $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setMail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mail !== $v) {
            $this->mail = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::MAIL;
        }


        return $this;
    } // setMail()

    /**
     * Set the value of [url] column.
     * 
     * @param string $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setUrl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->url !== $v) {
            $this->url = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::URL;
        }


        return $this;
    } // setUrl()

    /**
     * Set the value of [url_acheteur] column.
     * 
     * @param string $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setUrlAcheteur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->url_acheteur !== $v) {
            $this->url_acheteur = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::URL_ACHETEUR;
        }


        return $this;
    } // setUrlAcheteur()

    /**
     * Set the value of [facture_numero] column.
     * 
     * @param string $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setFactureNumero($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->facture_numero !== $v) {
            $this->facture_numero = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::FACTURE_NUMERO;
        }


        return $this;
    } // setFactureNumero()

    /**
     * Set the value of [facture_code] column.
     * 
     * @param string $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setFactureCode($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->facture_code !== $v) {
            $this->facture_code = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::FACTURE_CODE;
        }


        return $this;
    } // setFactureCode()

    /**
     * Set the value of [facture_denomination] column.
     * 
     * @param string $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setFactureDenomination($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->facture_denomination !== $v) {
            $this->facture_denomination = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::FACTURE_DENOMINATION;
        }


        return $this;
    } // setFactureDenomination()

    /**
     * Set the value of [facturation_service] column.
     * 
     * @param string $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setFacturationService($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->facturation_service !== $v) {
            $this->facturation_service = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::FACTURATION_SERVICE;
        }


        return $this;
    } // setFacturationService()

    /**
     * Set the value of [facture_adresse] column.
     * 
     * @param string $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setFactureAdresse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->facture_adresse !== $v) {
            $this->facture_adresse = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::FACTURE_ADRESSE;
        }


        return $this;
    } // setFactureAdresse()

    /**
     * Set the value of [facture_cp] column.
     * 
     * @param string $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setFactureCp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->facture_cp !== $v) {
            $this->facture_cp = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::FACTURE_CP;
        }


        return $this;
    } // setFactureCp()

    /**
     * Set the value of [facture_ville] column.
     * 
     * @param string $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setFactureVille($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->facture_ville !== $v) {
            $this->facture_ville = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::FACTURE_VILLE;
        }


        return $this;
    } // setFactureVille()

    /**
     * Set the value of [facture_pays] column.
     * 
     * @param string $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setFacturePays($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->facture_pays !== $v) {
            $this->facture_pays = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::FACTURE_PAYS;
        }


        return $this;
    } // setFacturePays()

    /**
     * Set the value of [id_aapc] column.
     * 
     * @param int $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setIdAapc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_aapc !== $v) {
            $this->id_aapc = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::ID_AAPC;
        }


        return $this;
    } // setIdAapc()

    /**
     * Set the value of [boamp_login] column.
     * 
     * @param string $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setBoampLogin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->boamp_login !== $v) {
            $this->boamp_login = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::BOAMP_LOGIN;
        }


        return $this;
    } // setBoampLogin()

    /**
     * Set the value of [boamp_password] column.
     * 
     * @param string $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setBoampPassword($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->boamp_password !== $v) {
            $this->boamp_password = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::BOAMP_PASSWORD;
        }


        return $this;
    } // setBoampPassword()

    /**
     * Set the value of [boamp_mail] column.
     * 
     * @param string $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setBoampMail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->boamp_mail !== $v) {
            $this->boamp_mail = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::BOAMP_MAIL;
        }


        return $this;
    } // setBoampMail()

    /**
     * Set the value of [boamp_target] column.
     * 
     * @param string $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setBoampTarget($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->boamp_target !== $v) {
            $this->boamp_target = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::BOAMP_TARGET;
        }


        return $this;
    } // setBoampTarget()

    /**
     * Set the value of [default_form_values] column.
     * 
     * @param string $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setDefaultFormValues($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->default_form_values !== $v) {
            $this->default_form_values = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::DEFAULT_FORM_VALUES;
        }


        return $this;
    } // setDefaultFormValues()

    /**
     * Set the value of [defaut_form_am_boamp] column.
     * 
     * @param string $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setDefautFormAmBoamp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->defaut_form_am_boamp !== $v) {
            $this->defaut_form_am_boamp = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::DEFAUT_FORM_AM_BOAMP;
        }


        return $this;
    } // setDefautFormAmBoamp()

    /**
     * Set the value of [defaut_form_am_boamp_joue] column.
     * 
     * @param string $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setDefautFormAmBoampJoue($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->defaut_form_am_boamp_joue !== $v) {
            $this->defaut_form_am_boamp_joue = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::DEFAUT_FORM_AM_BOAMP_JOUE;
        }


        return $this;
    } // setDefautFormAmBoampJoue()

    /**
     * Set the value of [defaut_form_mapa_boamp] column.
     * 
     * @param string $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setDefautFormMapaBoamp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->defaut_form_mapa_boamp !== $v) {
            $this->defaut_form_mapa_boamp = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::DEFAUT_FORM_MAPA_BOAMP;
        }


        return $this;
    } // setDefautFormMapaBoamp()

    /**
     * Set the value of [defaut_form_aconcours] column.
     * 
     * @param string $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setDefautFormAconcours($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->defaut_form_aconcours !== $v) {
            $this->defaut_form_aconcours = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::DEFAUT_FORM_ACONCOURS;
        }


        return $this;
    } // setDefautFormAconcours()

    /**
     * Set the value of [defaut_form_as_boamp_joue] column.
     * 
     * @param string $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setDefautFormAsBoampJoue($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->defaut_form_as_boamp_joue !== $v) {
            $this->defaut_form_as_boamp_joue = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::DEFAUT_FORM_AS_BOAMP_JOUE;
        }


        return $this;
    } // setDefautFormAsBoampJoue()

    /**
     * Set the value of [defaut_form_aa_boamp] column.
     * 
     * @param string $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setDefautFormAaBoamp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->defaut_form_aa_boamp !== $v) {
            $this->defaut_form_aa_boamp = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::DEFAUT_FORM_AA_BOAMP;
        }


        return $this;
    } // setDefautFormAaBoamp()

    /**
     * Set the value of [defaut_form_ar_mapa_boamp] column.
     * 
     * @param string $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setDefautFormArMapaBoamp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->defaut_form_ar_mapa_boamp !== $v) {
            $this->defaut_form_ar_mapa_boamp = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::DEFAUT_FORM_AR_MAPA_BOAMP;
        }


        return $this;
    } // setDefautFormArMapaBoamp()

    /**
     * Set the value of [defaut_form_05_boamp] column.
     * 
     * @param string $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setDefautForm05Boamp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->defaut_form_05_boamp !== $v) {
            $this->defaut_form_05_boamp = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::DEFAUT_FORM_05_BOAMP;
        }


        return $this;
    } // setDefautForm05Boamp()

    /**
     * Set the value of [defaut_form_rect] column.
     * 
     * @param string $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setDefautFormRect($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->defaut_form_rect !== $v) {
            $this->defaut_form_rect = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::DEFAUT_FORM_RECT;
        }


        return $this;
    } // setDefautFormRect()

    /**
     * Set the value of [defaut_form_aa_boamp_joue] column.
     * 
     * @param string $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setDefautFormAaBoampJoue($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->defaut_form_aa_boamp_joue !== $v) {
            $this->defaut_form_aa_boamp_joue = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::DEFAUT_FORM_AA_BOAMP_JOUE;
        }


        return $this;
    } // setDefautFormAaBoampJoue()

    /**
     * Set the value of [id_service] column.
     * 
     * @param int $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setIdService($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_service !== $v) {
            $this->id_service = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::ID_SERVICE;
        }


        return $this;
    } // setIdService()

    /**
     * Set the value of [livraison_service] column.
     * 
     * @param string $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setLivraisonService($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->livraison_service !== $v) {
            $this->livraison_service = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::LIVRAISON_SERVICE;
        }


        return $this;
    } // setLivraisonService()

    /**
     * Set the value of [livraison_adresse] column.
     * 
     * @param string $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setLivraisonAdresse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->livraison_adresse !== $v) {
            $this->livraison_adresse = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::LIVRAISON_ADRESSE;
        }


        return $this;
    } // setLivraisonAdresse()

    /**
     * Set the value of [livraison_code_postal] column.
     * 
     * @param string $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setLivraisonCodePostal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->livraison_code_postal !== $v) {
            $this->livraison_code_postal = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::LIVRAISON_CODE_POSTAL;
        }


        return $this;
    } // setLivraisonCodePostal()

    /**
     * Set the value of [livraison_ville] column.
     * 
     * @param string $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setLivraisonVille($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->livraison_ville !== $v) {
            $this->livraison_ville = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::LIVRAISON_VILLE;
        }


        return $this;
    } // setLivraisonVille()

    /**
     * Set the value of [livraison_pays] column.
     * 
     * @param string $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setLivraisonPays($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->livraison_pays !== $v) {
            $this->livraison_pays = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::LIVRAISON_PAYS;
        }


        return $this;
    } // setLivraisonPays()

    /**
     * Set the value of [type_pouvoir_activite] column.
     * 
     * @param string $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setTypePouvoirActivite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_pouvoir_activite !== $v) {
            $this->type_pouvoir_activite = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::TYPE_POUVOIR_ACTIVITE;
        }


        return $this;
    } // setTypePouvoirActivite()

    /**
     * Set the value of [code_nuts] column.
     * 
     * @param string $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setCodeNuts($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code_nuts !== $v) {
            $this->code_nuts = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::CODE_NUTS;
        }


        return $this;
    } // setCodeNuts()

    /**
     * Set the value of [modalites_financement] column.
     * 
     * @param string $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setModalitesFinancement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->modalites_financement !== $v) {
            $this->modalites_financement = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::MODALITES_FINANCEMENT;
        }


        return $this;
    } // setModalitesFinancement()

    /**
     * Set the value of [moniteur_provenance] column.
     * 
     * @param int $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setMoniteurProvenance($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->moniteur_provenance !== $v) {
            $this->moniteur_provenance = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::MONITEUR_PROVENANCE;
        }


        return $this;
    } // setMoniteurProvenance()

    /**
     * Set the value of [code_acces_logiciel] column.
     * 
     * @param string $v new value
     * @return CommonAcheteurPublic The current object (for fluent API support)
     */
    public function setCodeAccesLogiciel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code_acces_logiciel !== $v) {
            $this->code_acces_logiciel = $v;
            $this->modifiedColumns[] = CommonAcheteurPublicPeer::CODE_ACCES_LOGICIEL;
        }


        return $this;
    } // setCodeAccesLogiciel()

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

            if ($this->denomination !== '') {
                return false;
            }

            if ($this->prm !== '') {
                return false;
            }

            if ($this->adresse !== '') {
                return false;
            }

            if ($this->cp !== '') {
                return false;
            }

            if ($this->ville !== '') {
                return false;
            }

            if ($this->dept !== '') {
                return false;
            }

            if ($this->type_org !== '') {
                return false;
            }

            if ($this->telephone !== '') {
                return false;
            }

            if ($this->fax !== '') {
                return false;
            }

            if ($this->mail !== '') {
                return false;
            }

            if ($this->url !== '') {
                return false;
            }

            if ($this->facture_numero !== '') {
                return false;
            }

            if ($this->facture_code !== '') {
                return false;
            }

            if ($this->facture_denomination !== '') {
                return false;
            }

            if ($this->facture_adresse !== '') {
                return false;
            }

            if ($this->facture_cp !== '') {
                return false;
            }

            if ($this->facture_ville !== '') {
                return false;
            }

            if ($this->facture_pays !== '') {
                return false;
            }

            if ($this->id_aapc !== 0) {
                return false;
            }

            if ($this->boamp_login !== '') {
                return false;
            }

            if ($this->boamp_password !== '') {
                return false;
            }

            if ($this->boamp_mail !== '') {
                return false;
            }

            if ($this->boamp_target !== '0') {
                return false;
            }

            if ($this->id_service !== 0) {
                return false;
            }

            if ($this->moniteur_provenance !== 90) {
                return false;
            }

            if ($this->code_acces_logiciel !== 'Y8YG-69WD-4421-4G28') {
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
            $this->denomination = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->prm = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->adresse = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->cp = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->ville = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->dept = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->type_org = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->telephone = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->fax = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->mail = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->url = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->url_acheteur = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->facture_numero = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->facture_code = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->facture_denomination = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->facturation_service = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->facture_adresse = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->facture_cp = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->facture_ville = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->facture_pays = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->id_aapc = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
            $this->boamp_login = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->boamp_password = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->boamp_mail = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->boamp_target = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->default_form_values = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->defaut_form_am_boamp = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->defaut_form_am_boamp_joue = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->defaut_form_mapa_boamp = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->defaut_form_aconcours = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->defaut_form_as_boamp_joue = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->defaut_form_aa_boamp = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->defaut_form_ar_mapa_boamp = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->defaut_form_05_boamp = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->defaut_form_rect = ($row[$startcol + 36] !== null) ? (string) $row[$startcol + 36] : null;
            $this->defaut_form_aa_boamp_joue = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->id_service = ($row[$startcol + 38] !== null) ? (int) $row[$startcol + 38] : null;
            $this->livraison_service = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->livraison_adresse = ($row[$startcol + 40] !== null) ? (string) $row[$startcol + 40] : null;
            $this->livraison_code_postal = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->livraison_ville = ($row[$startcol + 42] !== null) ? (string) $row[$startcol + 42] : null;
            $this->livraison_pays = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
            $this->type_pouvoir_activite = ($row[$startcol + 44] !== null) ? (string) $row[$startcol + 44] : null;
            $this->code_nuts = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
            $this->modalites_financement = ($row[$startcol + 46] !== null) ? (string) $row[$startcol + 46] : null;
            $this->moniteur_provenance = ($row[$startcol + 47] !== null) ? (int) $row[$startcol + 47] : null;
            $this->code_acces_logiciel = ($row[$startcol + 48] !== null) ? (string) $row[$startcol + 48] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 49; // 49 = CommonAcheteurPublicPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonAcheteurPublic object", $e);
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
            $con = Propel::getConnection(CommonAcheteurPublicPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonAcheteurPublicPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonAcheteurPublicPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonAcheteurPublicQuery::create()
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
            $con = Propel::getConnection(CommonAcheteurPublicPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonAcheteurPublicPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonAcheteurPublicPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonAcheteurPublicPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonAcheteurPublicPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::DENOMINATION)) {
            $modifiedColumns[':p' . $index++]  = '`denomination`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::PRM)) {
            $modifiedColumns[':p' . $index++]  = '`prm`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::ADRESSE)) {
            $modifiedColumns[':p' . $index++]  = '`adresse`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::CP)) {
            $modifiedColumns[':p' . $index++]  = '`cp`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::VILLE)) {
            $modifiedColumns[':p' . $index++]  = '`ville`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::DEPT)) {
            $modifiedColumns[':p' . $index++]  = '`dept`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::TYPE_ORG)) {
            $modifiedColumns[':p' . $index++]  = '`type_org`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::TELEPHONE)) {
            $modifiedColumns[':p' . $index++]  = '`telephone`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::FAX)) {
            $modifiedColumns[':p' . $index++]  = '`fax`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::MAIL)) {
            $modifiedColumns[':p' . $index++]  = '`mail`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::URL)) {
            $modifiedColumns[':p' . $index++]  = '`url`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::URL_ACHETEUR)) {
            $modifiedColumns[':p' . $index++]  = '`url_acheteur`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::FACTURE_NUMERO)) {
            $modifiedColumns[':p' . $index++]  = '`facture_numero`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::FACTURE_CODE)) {
            $modifiedColumns[':p' . $index++]  = '`facture_code`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::FACTURE_DENOMINATION)) {
            $modifiedColumns[':p' . $index++]  = '`facture_denomination`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::FACTURATION_SERVICE)) {
            $modifiedColumns[':p' . $index++]  = '`facturation_service`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::FACTURE_ADRESSE)) {
            $modifiedColumns[':p' . $index++]  = '`facture_adresse`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::FACTURE_CP)) {
            $modifiedColumns[':p' . $index++]  = '`facture_cp`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::FACTURE_VILLE)) {
            $modifiedColumns[':p' . $index++]  = '`facture_ville`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::FACTURE_PAYS)) {
            $modifiedColumns[':p' . $index++]  = '`facture_pays`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::ID_AAPC)) {
            $modifiedColumns[':p' . $index++]  = '`id_aapc`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::BOAMP_LOGIN)) {
            $modifiedColumns[':p' . $index++]  = '`boamp_login`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::BOAMP_PASSWORD)) {
            $modifiedColumns[':p' . $index++]  = '`boamp_password`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::BOAMP_MAIL)) {
            $modifiedColumns[':p' . $index++]  = '`boamp_mail`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::BOAMP_TARGET)) {
            $modifiedColumns[':p' . $index++]  = '`boamp_target`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::DEFAULT_FORM_VALUES)) {
            $modifiedColumns[':p' . $index++]  = '`default_form_values`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::DEFAUT_FORM_AM_BOAMP)) {
            $modifiedColumns[':p' . $index++]  = '`defaut_form_am_boamp`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::DEFAUT_FORM_AM_BOAMP_JOUE)) {
            $modifiedColumns[':p' . $index++]  = '`defaut_form_am_boamp_joue`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::DEFAUT_FORM_MAPA_BOAMP)) {
            $modifiedColumns[':p' . $index++]  = '`defaut_form_mapa_boamp`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::DEFAUT_FORM_ACONCOURS)) {
            $modifiedColumns[':p' . $index++]  = '`defaut_form_aconcours`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::DEFAUT_FORM_AS_BOAMP_JOUE)) {
            $modifiedColumns[':p' . $index++]  = '`defaut_form_as_boamp_joue`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::DEFAUT_FORM_AA_BOAMP)) {
            $modifiedColumns[':p' . $index++]  = '`defaut_form_aa_boamp`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::DEFAUT_FORM_AR_MAPA_BOAMP)) {
            $modifiedColumns[':p' . $index++]  = '`defaut_form_ar_mapa_boamp`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::DEFAUT_FORM_05_BOAMP)) {
            $modifiedColumns[':p' . $index++]  = '`defaut_form_05_boamp`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::DEFAUT_FORM_RECT)) {
            $modifiedColumns[':p' . $index++]  = '`defaut_form_rect`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::DEFAUT_FORM_AA_BOAMP_JOUE)) {
            $modifiedColumns[':p' . $index++]  = '`defaut_form_aa_boamp_joue`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::ID_SERVICE)) {
            $modifiedColumns[':p' . $index++]  = '`id_service`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::LIVRAISON_SERVICE)) {
            $modifiedColumns[':p' . $index++]  = '`livraison_service`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::LIVRAISON_ADRESSE)) {
            $modifiedColumns[':p' . $index++]  = '`livraison_adresse`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::LIVRAISON_CODE_POSTAL)) {
            $modifiedColumns[':p' . $index++]  = '`livraison_code_postal`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::LIVRAISON_VILLE)) {
            $modifiedColumns[':p' . $index++]  = '`livraison_ville`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::LIVRAISON_PAYS)) {
            $modifiedColumns[':p' . $index++]  = '`livraison_pays`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::TYPE_POUVOIR_ACTIVITE)) {
            $modifiedColumns[':p' . $index++]  = '`type_pouvoir_activite`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::CODE_NUTS)) {
            $modifiedColumns[':p' . $index++]  = '`code_nuts`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::MODALITES_FINANCEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`modalites_financement`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::MONITEUR_PROVENANCE)) {
            $modifiedColumns[':p' . $index++]  = '`moniteur_provenance`';
        }
        if ($this->isColumnModified(CommonAcheteurPublicPeer::CODE_ACCES_LOGICIEL)) {
            $modifiedColumns[':p' . $index++]  = '`code_acces_logiciel`';
        }

        $sql = sprintf(
            'INSERT INTO `AcheteurPublic` (%s) VALUES (%s)',
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
                    case '`denomination`':						
                        $stmt->bindValue($identifier, $this->denomination, PDO::PARAM_STR);
                        break;
                    case '`prm`':						
                        $stmt->bindValue($identifier, $this->prm, PDO::PARAM_STR);
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
                    case '`dept`':						
                        $stmt->bindValue($identifier, $this->dept, PDO::PARAM_STR);
                        break;
                    case '`type_org`':						
                        $stmt->bindValue($identifier, $this->type_org, PDO::PARAM_STR);
                        break;
                    case '`telephone`':						
                        $stmt->bindValue($identifier, $this->telephone, PDO::PARAM_STR);
                        break;
                    case '`fax`':						
                        $stmt->bindValue($identifier, $this->fax, PDO::PARAM_STR);
                        break;
                    case '`mail`':						
                        $stmt->bindValue($identifier, $this->mail, PDO::PARAM_STR);
                        break;
                    case '`url`':						
                        $stmt->bindValue($identifier, $this->url, PDO::PARAM_STR);
                        break;
                    case '`url_acheteur`':						
                        $stmt->bindValue($identifier, $this->url_acheteur, PDO::PARAM_STR);
                        break;
                    case '`facture_numero`':						
                        $stmt->bindValue($identifier, $this->facture_numero, PDO::PARAM_STR);
                        break;
                    case '`facture_code`':						
                        $stmt->bindValue($identifier, $this->facture_code, PDO::PARAM_STR);
                        break;
                    case '`facture_denomination`':						
                        $stmt->bindValue($identifier, $this->facture_denomination, PDO::PARAM_STR);
                        break;
                    case '`facturation_service`':						
                        $stmt->bindValue($identifier, $this->facturation_service, PDO::PARAM_STR);
                        break;
                    case '`facture_adresse`':						
                        $stmt->bindValue($identifier, $this->facture_adresse, PDO::PARAM_STR);
                        break;
                    case '`facture_cp`':						
                        $stmt->bindValue($identifier, $this->facture_cp, PDO::PARAM_STR);
                        break;
                    case '`facture_ville`':						
                        $stmt->bindValue($identifier, $this->facture_ville, PDO::PARAM_STR);
                        break;
                    case '`facture_pays`':						
                        $stmt->bindValue($identifier, $this->facture_pays, PDO::PARAM_STR);
                        break;
                    case '`id_aapc`':						
                        $stmt->bindValue($identifier, $this->id_aapc, PDO::PARAM_INT);
                        break;
                    case '`boamp_login`':						
                        $stmt->bindValue($identifier, $this->boamp_login, PDO::PARAM_STR);
                        break;
                    case '`boamp_password`':						
                        $stmt->bindValue($identifier, $this->boamp_password, PDO::PARAM_STR);
                        break;
                    case '`boamp_mail`':						
                        $stmt->bindValue($identifier, $this->boamp_mail, PDO::PARAM_STR);
                        break;
                    case '`boamp_target`':						
                        $stmt->bindValue($identifier, $this->boamp_target, PDO::PARAM_STR);
                        break;
                    case '`default_form_values`':						
                        $stmt->bindValue($identifier, $this->default_form_values, PDO::PARAM_STR);
                        break;
                    case '`defaut_form_am_boamp`':						
                        $stmt->bindValue($identifier, $this->defaut_form_am_boamp, PDO::PARAM_STR);
                        break;
                    case '`defaut_form_am_boamp_joue`':						
                        $stmt->bindValue($identifier, $this->defaut_form_am_boamp_joue, PDO::PARAM_STR);
                        break;
                    case '`defaut_form_mapa_boamp`':						
                        $stmt->bindValue($identifier, $this->defaut_form_mapa_boamp, PDO::PARAM_STR);
                        break;
                    case '`defaut_form_aconcours`':						
                        $stmt->bindValue($identifier, $this->defaut_form_aconcours, PDO::PARAM_STR);
                        break;
                    case '`defaut_form_as_boamp_joue`':						
                        $stmt->bindValue($identifier, $this->defaut_form_as_boamp_joue, PDO::PARAM_STR);
                        break;
                    case '`defaut_form_aa_boamp`':						
                        $stmt->bindValue($identifier, $this->defaut_form_aa_boamp, PDO::PARAM_STR);
                        break;
                    case '`defaut_form_ar_mapa_boamp`':						
                        $stmt->bindValue($identifier, $this->defaut_form_ar_mapa_boamp, PDO::PARAM_STR);
                        break;
                    case '`defaut_form_05_boamp`':						
                        $stmt->bindValue($identifier, $this->defaut_form_05_boamp, PDO::PARAM_STR);
                        break;
                    case '`defaut_form_rect`':						
                        $stmt->bindValue($identifier, $this->defaut_form_rect, PDO::PARAM_STR);
                        break;
                    case '`defaut_form_aa_boamp_joue`':						
                        $stmt->bindValue($identifier, $this->defaut_form_aa_boamp_joue, PDO::PARAM_STR);
                        break;
                    case '`id_service`':						
                        $stmt->bindValue($identifier, $this->id_service, PDO::PARAM_INT);
                        break;
                    case '`livraison_service`':						
                        $stmt->bindValue($identifier, $this->livraison_service, PDO::PARAM_STR);
                        break;
                    case '`livraison_adresse`':						
                        $stmt->bindValue($identifier, $this->livraison_adresse, PDO::PARAM_STR);
                        break;
                    case '`livraison_code_postal`':						
                        $stmt->bindValue($identifier, $this->livraison_code_postal, PDO::PARAM_STR);
                        break;
                    case '`livraison_ville`':						
                        $stmt->bindValue($identifier, $this->livraison_ville, PDO::PARAM_STR);
                        break;
                    case '`livraison_pays`':						
                        $stmt->bindValue($identifier, $this->livraison_pays, PDO::PARAM_STR);
                        break;
                    case '`type_pouvoir_activite`':						
                        $stmt->bindValue($identifier, $this->type_pouvoir_activite, PDO::PARAM_STR);
                        break;
                    case '`code_nuts`':						
                        $stmt->bindValue($identifier, $this->code_nuts, PDO::PARAM_STR);
                        break;
                    case '`modalites_financement`':						
                        $stmt->bindValue($identifier, $this->modalites_financement, PDO::PARAM_STR);
                        break;
                    case '`moniteur_provenance`':						
                        $stmt->bindValue($identifier, $this->moniteur_provenance, PDO::PARAM_INT);
                        break;
                    case '`code_acces_logiciel`':						
                        $stmt->bindValue($identifier, $this->code_acces_logiciel, PDO::PARAM_STR);
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


            if (($retval = CommonAcheteurPublicPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonAcheteurPublicPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getDenomination();
                break;
            case 3:
                return $this->getPrm();
                break;
            case 4:
                return $this->getAdresse();
                break;
            case 5:
                return $this->getCp();
                break;
            case 6:
                return $this->getVille();
                break;
            case 7:
                return $this->getDept();
                break;
            case 8:
                return $this->getTypeOrg();
                break;
            case 9:
                return $this->getTelephone();
                break;
            case 10:
                return $this->getFax();
                break;
            case 11:
                return $this->getMail();
                break;
            case 12:
                return $this->getUrl();
                break;
            case 13:
                return $this->getUrlAcheteur();
                break;
            case 14:
                return $this->getFactureNumero();
                break;
            case 15:
                return $this->getFactureCode();
                break;
            case 16:
                return $this->getFactureDenomination();
                break;
            case 17:
                return $this->getFacturationService();
                break;
            case 18:
                return $this->getFactureAdresse();
                break;
            case 19:
                return $this->getFactureCp();
                break;
            case 20:
                return $this->getFactureVille();
                break;
            case 21:
                return $this->getFacturePays();
                break;
            case 22:
                return $this->getIdAapc();
                break;
            case 23:
                return $this->getBoampLogin();
                break;
            case 24:
                return $this->getBoampPassword();
                break;
            case 25:
                return $this->getBoampMail();
                break;
            case 26:
                return $this->getBoampTarget();
                break;
            case 27:
                return $this->getDefaultFormValues();
                break;
            case 28:
                return $this->getDefautFormAmBoamp();
                break;
            case 29:
                return $this->getDefautFormAmBoampJoue();
                break;
            case 30:
                return $this->getDefautFormMapaBoamp();
                break;
            case 31:
                return $this->getDefautFormAconcours();
                break;
            case 32:
                return $this->getDefautFormAsBoampJoue();
                break;
            case 33:
                return $this->getDefautFormAaBoamp();
                break;
            case 34:
                return $this->getDefautFormArMapaBoamp();
                break;
            case 35:
                return $this->getDefautForm05Boamp();
                break;
            case 36:
                return $this->getDefautFormRect();
                break;
            case 37:
                return $this->getDefautFormAaBoampJoue();
                break;
            case 38:
                return $this->getIdService();
                break;
            case 39:
                return $this->getLivraisonService();
                break;
            case 40:
                return $this->getLivraisonAdresse();
                break;
            case 41:
                return $this->getLivraisonCodePostal();
                break;
            case 42:
                return $this->getLivraisonVille();
                break;
            case 43:
                return $this->getLivraisonPays();
                break;
            case 44:
                return $this->getTypePouvoirActivite();
                break;
            case 45:
                return $this->getCodeNuts();
                break;
            case 46:
                return $this->getModalitesFinancement();
                break;
            case 47:
                return $this->getMoniteurProvenance();
                break;
            case 48:
                return $this->getCodeAccesLogiciel();
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
        if (isset($alreadyDumpedObjects['CommonAcheteurPublic'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonAcheteurPublic'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonAcheteurPublicPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getDenomination(),
            $keys[3] => $this->getPrm(),
            $keys[4] => $this->getAdresse(),
            $keys[5] => $this->getCp(),
            $keys[6] => $this->getVille(),
            $keys[7] => $this->getDept(),
            $keys[8] => $this->getTypeOrg(),
            $keys[9] => $this->getTelephone(),
            $keys[10] => $this->getFax(),
            $keys[11] => $this->getMail(),
            $keys[12] => $this->getUrl(),
            $keys[13] => $this->getUrlAcheteur(),
            $keys[14] => $this->getFactureNumero(),
            $keys[15] => $this->getFactureCode(),
            $keys[16] => $this->getFactureDenomination(),
            $keys[17] => $this->getFacturationService(),
            $keys[18] => $this->getFactureAdresse(),
            $keys[19] => $this->getFactureCp(),
            $keys[20] => $this->getFactureVille(),
            $keys[21] => $this->getFacturePays(),
            $keys[22] => $this->getIdAapc(),
            $keys[23] => $this->getBoampLogin(),
            $keys[24] => $this->getBoampPassword(),
            $keys[25] => $this->getBoampMail(),
            $keys[26] => $this->getBoampTarget(),
            $keys[27] => $this->getDefaultFormValues(),
            $keys[28] => $this->getDefautFormAmBoamp(),
            $keys[29] => $this->getDefautFormAmBoampJoue(),
            $keys[30] => $this->getDefautFormMapaBoamp(),
            $keys[31] => $this->getDefautFormAconcours(),
            $keys[32] => $this->getDefautFormAsBoampJoue(),
            $keys[33] => $this->getDefautFormAaBoamp(),
            $keys[34] => $this->getDefautFormArMapaBoamp(),
            $keys[35] => $this->getDefautForm05Boamp(),
            $keys[36] => $this->getDefautFormRect(),
            $keys[37] => $this->getDefautFormAaBoampJoue(),
            $keys[38] => $this->getIdService(),
            $keys[39] => $this->getLivraisonService(),
            $keys[40] => $this->getLivraisonAdresse(),
            $keys[41] => $this->getLivraisonCodePostal(),
            $keys[42] => $this->getLivraisonVille(),
            $keys[43] => $this->getLivraisonPays(),
            $keys[44] => $this->getTypePouvoirActivite(),
            $keys[45] => $this->getCodeNuts(),
            $keys[46] => $this->getModalitesFinancement(),
            $keys[47] => $this->getMoniteurProvenance(),
            $keys[48] => $this->getCodeAccesLogiciel(),
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
        $pos = CommonAcheteurPublicPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setDenomination($value);
                break;
            case 3:
                $this->setPrm($value);
                break;
            case 4:
                $this->setAdresse($value);
                break;
            case 5:
                $this->setCp($value);
                break;
            case 6:
                $this->setVille($value);
                break;
            case 7:
                $this->setDept($value);
                break;
            case 8:
                $this->setTypeOrg($value);
                break;
            case 9:
                $this->setTelephone($value);
                break;
            case 10:
                $this->setFax($value);
                break;
            case 11:
                $this->setMail($value);
                break;
            case 12:
                $this->setUrl($value);
                break;
            case 13:
                $this->setUrlAcheteur($value);
                break;
            case 14:
                $this->setFactureNumero($value);
                break;
            case 15:
                $this->setFactureCode($value);
                break;
            case 16:
                $this->setFactureDenomination($value);
                break;
            case 17:
                $this->setFacturationService($value);
                break;
            case 18:
                $this->setFactureAdresse($value);
                break;
            case 19:
                $this->setFactureCp($value);
                break;
            case 20:
                $this->setFactureVille($value);
                break;
            case 21:
                $this->setFacturePays($value);
                break;
            case 22:
                $this->setIdAapc($value);
                break;
            case 23:
                $this->setBoampLogin($value);
                break;
            case 24:
                $this->setBoampPassword($value);
                break;
            case 25:
                $this->setBoampMail($value);
                break;
            case 26:
                $this->setBoampTarget($value);
                break;
            case 27:
                $this->setDefaultFormValues($value);
                break;
            case 28:
                $this->setDefautFormAmBoamp($value);
                break;
            case 29:
                $this->setDefautFormAmBoampJoue($value);
                break;
            case 30:
                $this->setDefautFormMapaBoamp($value);
                break;
            case 31:
                $this->setDefautFormAconcours($value);
                break;
            case 32:
                $this->setDefautFormAsBoampJoue($value);
                break;
            case 33:
                $this->setDefautFormAaBoamp($value);
                break;
            case 34:
                $this->setDefautFormArMapaBoamp($value);
                break;
            case 35:
                $this->setDefautForm05Boamp($value);
                break;
            case 36:
                $this->setDefautFormRect($value);
                break;
            case 37:
                $this->setDefautFormAaBoampJoue($value);
                break;
            case 38:
                $this->setIdService($value);
                break;
            case 39:
                $this->setLivraisonService($value);
                break;
            case 40:
                $this->setLivraisonAdresse($value);
                break;
            case 41:
                $this->setLivraisonCodePostal($value);
                break;
            case 42:
                $this->setLivraisonVille($value);
                break;
            case 43:
                $this->setLivraisonPays($value);
                break;
            case 44:
                $this->setTypePouvoirActivite($value);
                break;
            case 45:
                $this->setCodeNuts($value);
                break;
            case 46:
                $this->setModalitesFinancement($value);
                break;
            case 47:
                $this->setMoniteurProvenance($value);
                break;
            case 48:
                $this->setCodeAccesLogiciel($value);
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
        $keys = CommonAcheteurPublicPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setDenomination($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setPrm($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setAdresse($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setCp($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setVille($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setDept($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setTypeOrg($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setTelephone($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setFax($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setMail($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setUrl($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setUrlAcheteur($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setFactureNumero($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setFactureCode($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setFactureDenomination($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setFacturationService($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setFactureAdresse($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setFactureCp($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setFactureVille($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setFacturePays($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setIdAapc($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setBoampLogin($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setBoampPassword($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setBoampMail($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setBoampTarget($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setDefaultFormValues($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setDefautFormAmBoamp($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setDefautFormAmBoampJoue($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setDefautFormMapaBoamp($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setDefautFormAconcours($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setDefautFormAsBoampJoue($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setDefautFormAaBoamp($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setDefautFormArMapaBoamp($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setDefautForm05Boamp($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setDefautFormRect($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setDefautFormAaBoampJoue($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setIdService($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setLivraisonService($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setLivraisonAdresse($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setLivraisonCodePostal($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setLivraisonVille($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setLivraisonPays($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setTypePouvoirActivite($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setCodeNuts($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setModalitesFinancement($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setMoniteurProvenance($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setCodeAccesLogiciel($arr[$keys[48]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonAcheteurPublicPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonAcheteurPublicPeer::ID)) $criteria->add(CommonAcheteurPublicPeer::ID, $this->id);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::ORGANISME)) $criteria->add(CommonAcheteurPublicPeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::DENOMINATION)) $criteria->add(CommonAcheteurPublicPeer::DENOMINATION, $this->denomination);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::PRM)) $criteria->add(CommonAcheteurPublicPeer::PRM, $this->prm);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::ADRESSE)) $criteria->add(CommonAcheteurPublicPeer::ADRESSE, $this->adresse);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::CP)) $criteria->add(CommonAcheteurPublicPeer::CP, $this->cp);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::VILLE)) $criteria->add(CommonAcheteurPublicPeer::VILLE, $this->ville);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::DEPT)) $criteria->add(CommonAcheteurPublicPeer::DEPT, $this->dept);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::TYPE_ORG)) $criteria->add(CommonAcheteurPublicPeer::TYPE_ORG, $this->type_org);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::TELEPHONE)) $criteria->add(CommonAcheteurPublicPeer::TELEPHONE, $this->telephone);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::FAX)) $criteria->add(CommonAcheteurPublicPeer::FAX, $this->fax);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::MAIL)) $criteria->add(CommonAcheteurPublicPeer::MAIL, $this->mail);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::URL)) $criteria->add(CommonAcheteurPublicPeer::URL, $this->url);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::URL_ACHETEUR)) $criteria->add(CommonAcheteurPublicPeer::URL_ACHETEUR, $this->url_acheteur);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::FACTURE_NUMERO)) $criteria->add(CommonAcheteurPublicPeer::FACTURE_NUMERO, $this->facture_numero);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::FACTURE_CODE)) $criteria->add(CommonAcheteurPublicPeer::FACTURE_CODE, $this->facture_code);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::FACTURE_DENOMINATION)) $criteria->add(CommonAcheteurPublicPeer::FACTURE_DENOMINATION, $this->facture_denomination);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::FACTURATION_SERVICE)) $criteria->add(CommonAcheteurPublicPeer::FACTURATION_SERVICE, $this->facturation_service);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::FACTURE_ADRESSE)) $criteria->add(CommonAcheteurPublicPeer::FACTURE_ADRESSE, $this->facture_adresse);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::FACTURE_CP)) $criteria->add(CommonAcheteurPublicPeer::FACTURE_CP, $this->facture_cp);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::FACTURE_VILLE)) $criteria->add(CommonAcheteurPublicPeer::FACTURE_VILLE, $this->facture_ville);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::FACTURE_PAYS)) $criteria->add(CommonAcheteurPublicPeer::FACTURE_PAYS, $this->facture_pays);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::ID_AAPC)) $criteria->add(CommonAcheteurPublicPeer::ID_AAPC, $this->id_aapc);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::BOAMP_LOGIN)) $criteria->add(CommonAcheteurPublicPeer::BOAMP_LOGIN, $this->boamp_login);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::BOAMP_PASSWORD)) $criteria->add(CommonAcheteurPublicPeer::BOAMP_PASSWORD, $this->boamp_password);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::BOAMP_MAIL)) $criteria->add(CommonAcheteurPublicPeer::BOAMP_MAIL, $this->boamp_mail);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::BOAMP_TARGET)) $criteria->add(CommonAcheteurPublicPeer::BOAMP_TARGET, $this->boamp_target);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::DEFAULT_FORM_VALUES)) $criteria->add(CommonAcheteurPublicPeer::DEFAULT_FORM_VALUES, $this->default_form_values);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::DEFAUT_FORM_AM_BOAMP)) $criteria->add(CommonAcheteurPublicPeer::DEFAUT_FORM_AM_BOAMP, $this->defaut_form_am_boamp);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::DEFAUT_FORM_AM_BOAMP_JOUE)) $criteria->add(CommonAcheteurPublicPeer::DEFAUT_FORM_AM_BOAMP_JOUE, $this->defaut_form_am_boamp_joue);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::DEFAUT_FORM_MAPA_BOAMP)) $criteria->add(CommonAcheteurPublicPeer::DEFAUT_FORM_MAPA_BOAMP, $this->defaut_form_mapa_boamp);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::DEFAUT_FORM_ACONCOURS)) $criteria->add(CommonAcheteurPublicPeer::DEFAUT_FORM_ACONCOURS, $this->defaut_form_aconcours);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::DEFAUT_FORM_AS_BOAMP_JOUE)) $criteria->add(CommonAcheteurPublicPeer::DEFAUT_FORM_AS_BOAMP_JOUE, $this->defaut_form_as_boamp_joue);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::DEFAUT_FORM_AA_BOAMP)) $criteria->add(CommonAcheteurPublicPeer::DEFAUT_FORM_AA_BOAMP, $this->defaut_form_aa_boamp);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::DEFAUT_FORM_AR_MAPA_BOAMP)) $criteria->add(CommonAcheteurPublicPeer::DEFAUT_FORM_AR_MAPA_BOAMP, $this->defaut_form_ar_mapa_boamp);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::DEFAUT_FORM_05_BOAMP)) $criteria->add(CommonAcheteurPublicPeer::DEFAUT_FORM_05_BOAMP, $this->defaut_form_05_boamp);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::DEFAUT_FORM_RECT)) $criteria->add(CommonAcheteurPublicPeer::DEFAUT_FORM_RECT, $this->defaut_form_rect);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::DEFAUT_FORM_AA_BOAMP_JOUE)) $criteria->add(CommonAcheteurPublicPeer::DEFAUT_FORM_AA_BOAMP_JOUE, $this->defaut_form_aa_boamp_joue);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::ID_SERVICE)) $criteria->add(CommonAcheteurPublicPeer::ID_SERVICE, $this->id_service);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::LIVRAISON_SERVICE)) $criteria->add(CommonAcheteurPublicPeer::LIVRAISON_SERVICE, $this->livraison_service);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::LIVRAISON_ADRESSE)) $criteria->add(CommonAcheteurPublicPeer::LIVRAISON_ADRESSE, $this->livraison_adresse);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::LIVRAISON_CODE_POSTAL)) $criteria->add(CommonAcheteurPublicPeer::LIVRAISON_CODE_POSTAL, $this->livraison_code_postal);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::LIVRAISON_VILLE)) $criteria->add(CommonAcheteurPublicPeer::LIVRAISON_VILLE, $this->livraison_ville);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::LIVRAISON_PAYS)) $criteria->add(CommonAcheteurPublicPeer::LIVRAISON_PAYS, $this->livraison_pays);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::TYPE_POUVOIR_ACTIVITE)) $criteria->add(CommonAcheteurPublicPeer::TYPE_POUVOIR_ACTIVITE, $this->type_pouvoir_activite);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::CODE_NUTS)) $criteria->add(CommonAcheteurPublicPeer::CODE_NUTS, $this->code_nuts);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::MODALITES_FINANCEMENT)) $criteria->add(CommonAcheteurPublicPeer::MODALITES_FINANCEMENT, $this->modalites_financement);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::MONITEUR_PROVENANCE)) $criteria->add(CommonAcheteurPublicPeer::MONITEUR_PROVENANCE, $this->moniteur_provenance);
        if ($this->isColumnModified(CommonAcheteurPublicPeer::CODE_ACCES_LOGICIEL)) $criteria->add(CommonAcheteurPublicPeer::CODE_ACCES_LOGICIEL, $this->code_acces_logiciel);

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
        $criteria = new Criteria(CommonAcheteurPublicPeer::DATABASE_NAME);
        $criteria->add(CommonAcheteurPublicPeer::ID, $this->id);
        $criteria->add(CommonAcheteurPublicPeer::ORGANISME, $this->organisme);

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
     * @param object $copyObj An object of CommonAcheteurPublic (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setDenomination($this->getDenomination());
        $copyObj->setPrm($this->getPrm());
        $copyObj->setAdresse($this->getAdresse());
        $copyObj->setCp($this->getCp());
        $copyObj->setVille($this->getVille());
        $copyObj->setDept($this->getDept());
        $copyObj->setTypeOrg($this->getTypeOrg());
        $copyObj->setTelephone($this->getTelephone());
        $copyObj->setFax($this->getFax());
        $copyObj->setMail($this->getMail());
        $copyObj->setUrl($this->getUrl());
        $copyObj->setUrlAcheteur($this->getUrlAcheteur());
        $copyObj->setFactureNumero($this->getFactureNumero());
        $copyObj->setFactureCode($this->getFactureCode());
        $copyObj->setFactureDenomination($this->getFactureDenomination());
        $copyObj->setFacturationService($this->getFacturationService());
        $copyObj->setFactureAdresse($this->getFactureAdresse());
        $copyObj->setFactureCp($this->getFactureCp());
        $copyObj->setFactureVille($this->getFactureVille());
        $copyObj->setFacturePays($this->getFacturePays());
        $copyObj->setIdAapc($this->getIdAapc());
        $copyObj->setBoampLogin($this->getBoampLogin());
        $copyObj->setBoampPassword($this->getBoampPassword());
        $copyObj->setBoampMail($this->getBoampMail());
        $copyObj->setBoampTarget($this->getBoampTarget());
        $copyObj->setDefaultFormValues($this->getDefaultFormValues());
        $copyObj->setDefautFormAmBoamp($this->getDefautFormAmBoamp());
        $copyObj->setDefautFormAmBoampJoue($this->getDefautFormAmBoampJoue());
        $copyObj->setDefautFormMapaBoamp($this->getDefautFormMapaBoamp());
        $copyObj->setDefautFormAconcours($this->getDefautFormAconcours());
        $copyObj->setDefautFormAsBoampJoue($this->getDefautFormAsBoampJoue());
        $copyObj->setDefautFormAaBoamp($this->getDefautFormAaBoamp());
        $copyObj->setDefautFormArMapaBoamp($this->getDefautFormArMapaBoamp());
        $copyObj->setDefautForm05Boamp($this->getDefautForm05Boamp());
        $copyObj->setDefautFormRect($this->getDefautFormRect());
        $copyObj->setDefautFormAaBoampJoue($this->getDefautFormAaBoampJoue());
        $copyObj->setIdService($this->getIdService());
        $copyObj->setLivraisonService($this->getLivraisonService());
        $copyObj->setLivraisonAdresse($this->getLivraisonAdresse());
        $copyObj->setLivraisonCodePostal($this->getLivraisonCodePostal());
        $copyObj->setLivraisonVille($this->getLivraisonVille());
        $copyObj->setLivraisonPays($this->getLivraisonPays());
        $copyObj->setTypePouvoirActivite($this->getTypePouvoirActivite());
        $copyObj->setCodeNuts($this->getCodeNuts());
        $copyObj->setModalitesFinancement($this->getModalitesFinancement());
        $copyObj->setMoniteurProvenance($this->getMoniteurProvenance());
        $copyObj->setCodeAccesLogiciel($this->getCodeAccesLogiciel());
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
     * @return CommonAcheteurPublic Clone of current object.
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
     * @return CommonAcheteurPublicPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonAcheteurPublicPeer();
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
        $this->denomination = null;
        $this->prm = null;
        $this->adresse = null;
        $this->cp = null;
        $this->ville = null;
        $this->dept = null;
        $this->type_org = null;
        $this->telephone = null;
        $this->fax = null;
        $this->mail = null;
        $this->url = null;
        $this->url_acheteur = null;
        $this->facture_numero = null;
        $this->facture_code = null;
        $this->facture_denomination = null;
        $this->facturation_service = null;
        $this->facture_adresse = null;
        $this->facture_cp = null;
        $this->facture_ville = null;
        $this->facture_pays = null;
        $this->id_aapc = null;
        $this->boamp_login = null;
        $this->boamp_password = null;
        $this->boamp_mail = null;
        $this->boamp_target = null;
        $this->default_form_values = null;
        $this->defaut_form_am_boamp = null;
        $this->defaut_form_am_boamp_joue = null;
        $this->defaut_form_mapa_boamp = null;
        $this->defaut_form_aconcours = null;
        $this->defaut_form_as_boamp_joue = null;
        $this->defaut_form_aa_boamp = null;
        $this->defaut_form_ar_mapa_boamp = null;
        $this->defaut_form_05_boamp = null;
        $this->defaut_form_rect = null;
        $this->defaut_form_aa_boamp_joue = null;
        $this->id_service = null;
        $this->livraison_service = null;
        $this->livraison_adresse = null;
        $this->livraison_code_postal = null;
        $this->livraison_ville = null;
        $this->livraison_pays = null;
        $this->type_pouvoir_activite = null;
        $this->code_nuts = null;
        $this->modalites_financement = null;
        $this->moniteur_provenance = null;
        $this->code_acces_logiciel = null;
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
        return (string) $this->exportTo(CommonAcheteurPublicPeer::DEFAULT_STRING_FORMAT);
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
