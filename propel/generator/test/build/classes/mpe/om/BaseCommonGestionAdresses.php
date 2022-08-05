<?php


/**
 * Base class that represents a row from the 'gestion_adresses' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonGestionAdresses extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonGestionAdressesPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonGestionAdressesPeer
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
     * The value for the id_service field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_service;

    /**
     * The value for the id_agent field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_agent;

    /**
     * The value for the nom_agent field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $nom_agent;

    /**
     * The value for the prenom_agent field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $prenom_agent;

    /**
     * The value for the adresse_depot_offres field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adresse_depot_offres;

    /**
     * The value for the adresse_retrais_dossiers field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adresse_retrais_dossiers;

    /**
     * The value for the lieu_ouverture_plis field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $lieu_ouverture_plis;

    /**
     * The value for the adresse_depot_offres_fr field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adresse_depot_offres_fr;

    /**
     * The value for the adresse_retrais_dossiers_fr field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adresse_retrais_dossiers_fr;

    /**
     * The value for the lieu_ouverture_plis_fr field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $lieu_ouverture_plis_fr;

    /**
     * The value for the adresse_depot_offres_ar field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adresse_depot_offres_ar;

    /**
     * The value for the adresse_retrais_dossiers_ar field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adresse_retrais_dossiers_ar;

    /**
     * The value for the lieu_ouverture_plis_ar field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $lieu_ouverture_plis_ar;

    /**
     * The value for the adresse_depot_offres_en field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adresse_depot_offres_en;

    /**
     * The value for the adresse_depot_offres_es field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adresse_depot_offres_es;

    /**
     * The value for the adresse_depot_offres_su field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adresse_depot_offres_su;

    /**
     * The value for the adresse_depot_offres_du field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adresse_depot_offres_du;

    /**
     * The value for the adresse_depot_offres_cz field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adresse_depot_offres_cz;

    /**
     * The value for the adresse_retrais_dossiers_en field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adresse_retrais_dossiers_en;

    /**
     * The value for the adresse_retrais_dossiers_es field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adresse_retrais_dossiers_es;

    /**
     * The value for the adresse_retrais_dossiers_su field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adresse_retrais_dossiers_su;

    /**
     * The value for the adresse_retrais_dossiers_du field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adresse_retrais_dossiers_du;

    /**
     * The value for the adresse_retrais_dossiers_cz field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adresse_retrais_dossiers_cz;

    /**
     * The value for the lieu_ouverture_plis_en field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $lieu_ouverture_plis_en;

    /**
     * The value for the lieu_ouverture_plis_es field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $lieu_ouverture_plis_es;

    /**
     * The value for the lieu_ouverture_plis_su field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $lieu_ouverture_plis_su;

    /**
     * The value for the lieu_ouverture_plis_du field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $lieu_ouverture_plis_du;

    /**
     * The value for the lieu_ouverture_plis_cz field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $lieu_ouverture_plis_cz;

    /**
     * The value for the adresse_depot_offres_it field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adresse_depot_offres_it;

    /**
     * The value for the adresse_retrais_dossiers_it field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adresse_retrais_dossiers_it;

    /**
     * The value for the lieu_ouverture_plis_it field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $lieu_ouverture_plis_it;

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
        $this->id_service = 0;
        $this->id_agent = 0;
        $this->nom_agent = '';
        $this->prenom_agent = '';
        $this->adresse_depot_offres = '';
        $this->adresse_retrais_dossiers = '';
        $this->lieu_ouverture_plis = '';
        $this->adresse_depot_offres_fr = '';
        $this->adresse_retrais_dossiers_fr = '';
        $this->lieu_ouverture_plis_fr = '';
        $this->adresse_depot_offres_ar = '';
        $this->adresse_retrais_dossiers_ar = '';
        $this->lieu_ouverture_plis_ar = '';
        $this->adresse_depot_offres_en = '';
        $this->adresse_depot_offres_es = '';
        $this->adresse_depot_offres_su = '';
        $this->adresse_depot_offres_du = '';
        $this->adresse_depot_offres_cz = '';
        $this->adresse_retrais_dossiers_en = '';
        $this->adresse_retrais_dossiers_es = '';
        $this->adresse_retrais_dossiers_su = '';
        $this->adresse_retrais_dossiers_du = '';
        $this->adresse_retrais_dossiers_cz = '';
        $this->lieu_ouverture_plis_en = '';
        $this->lieu_ouverture_plis_es = '';
        $this->lieu_ouverture_plis_su = '';
        $this->lieu_ouverture_plis_du = '';
        $this->lieu_ouverture_plis_cz = '';
        $this->adresse_depot_offres_it = '';
        $this->adresse_retrais_dossiers_it = '';
        $this->lieu_ouverture_plis_it = '';
    }

    /**
     * Initializes internal state of BaseCommonGestionAdresses object.
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
     * Get the [id_service] column value.
     * 
     * @return int
     */
    public function getIdService()
    {

        return $this->id_service;
    }

    /**
     * Get the [id_agent] column value.
     * 
     * @return int
     */
    public function getIdAgent()
    {

        return $this->id_agent;
    }

    /**
     * Get the [nom_agent] column value.
     * 
     * @return string
     */
    public function getNomAgent()
    {

        return $this->nom_agent;
    }

    /**
     * Get the [prenom_agent] column value.
     * 
     * @return string
     */
    public function getPrenomAgent()
    {

        return $this->prenom_agent;
    }

    /**
     * Get the [adresse_depot_offres] column value.
     * 
     * @return string
     */
    public function getAdresseDepotOffres()
    {

        return $this->adresse_depot_offres;
    }

    /**
     * Get the [adresse_retrais_dossiers] column value.
     * 
     * @return string
     */
    public function getAdresseRetraisDossiers()
    {

        return $this->adresse_retrais_dossiers;
    }

    /**
     * Get the [lieu_ouverture_plis] column value.
     * 
     * @return string
     */
    public function getLieuOuverturePlis()
    {

        return $this->lieu_ouverture_plis;
    }

    /**
     * Get the [adresse_depot_offres_fr] column value.
     * 
     * @return string
     */
    public function getAdresseDepotOffresFr()
    {

        return $this->adresse_depot_offres_fr;
    }

    /**
     * Get the [adresse_retrais_dossiers_fr] column value.
     * 
     * @return string
     */
    public function getAdresseRetraisDossiersFr()
    {

        return $this->adresse_retrais_dossiers_fr;
    }

    /**
     * Get the [lieu_ouverture_plis_fr] column value.
     * 
     * @return string
     */
    public function getLieuOuverturePlisFr()
    {

        return $this->lieu_ouverture_plis_fr;
    }

    /**
     * Get the [adresse_depot_offres_ar] column value.
     * 
     * @return string
     */
    public function getAdresseDepotOffresAr()
    {

        return $this->adresse_depot_offres_ar;
    }

    /**
     * Get the [adresse_retrais_dossiers_ar] column value.
     * 
     * @return string
     */
    public function getAdresseRetraisDossiersAr()
    {

        return $this->adresse_retrais_dossiers_ar;
    }

    /**
     * Get the [lieu_ouverture_plis_ar] column value.
     * 
     * @return string
     */
    public function getLieuOuverturePlisAr()
    {

        return $this->lieu_ouverture_plis_ar;
    }

    /**
     * Get the [adresse_depot_offres_en] column value.
     * 
     * @return string
     */
    public function getAdresseDepotOffresEn()
    {

        return $this->adresse_depot_offres_en;
    }

    /**
     * Get the [adresse_depot_offres_es] column value.
     * 
     * @return string
     */
    public function getAdresseDepotOffresEs()
    {

        return $this->adresse_depot_offres_es;
    }

    /**
     * Get the [adresse_depot_offres_su] column value.
     * 
     * @return string
     */
    public function getAdresseDepotOffresSu()
    {

        return $this->adresse_depot_offres_su;
    }

    /**
     * Get the [adresse_depot_offres_du] column value.
     * 
     * @return string
     */
    public function getAdresseDepotOffresDu()
    {

        return $this->adresse_depot_offres_du;
    }

    /**
     * Get the [adresse_depot_offres_cz] column value.
     * 
     * @return string
     */
    public function getAdresseDepotOffresCz()
    {

        return $this->adresse_depot_offres_cz;
    }

    /**
     * Get the [adresse_retrais_dossiers_en] column value.
     * 
     * @return string
     */
    public function getAdresseRetraisDossiersEn()
    {

        return $this->adresse_retrais_dossiers_en;
    }

    /**
     * Get the [adresse_retrais_dossiers_es] column value.
     * 
     * @return string
     */
    public function getAdresseRetraisDossiersEs()
    {

        return $this->adresse_retrais_dossiers_es;
    }

    /**
     * Get the [adresse_retrais_dossiers_su] column value.
     * 
     * @return string
     */
    public function getAdresseRetraisDossiersSu()
    {

        return $this->adresse_retrais_dossiers_su;
    }

    /**
     * Get the [adresse_retrais_dossiers_du] column value.
     * 
     * @return string
     */
    public function getAdresseRetraisDossiersDu()
    {

        return $this->adresse_retrais_dossiers_du;
    }

    /**
     * Get the [adresse_retrais_dossiers_cz] column value.
     * 
     * @return string
     */
    public function getAdresseRetraisDossiersCz()
    {

        return $this->adresse_retrais_dossiers_cz;
    }

    /**
     * Get the [lieu_ouverture_plis_en] column value.
     * 
     * @return string
     */
    public function getLieuOuverturePlisEn()
    {

        return $this->lieu_ouverture_plis_en;
    }

    /**
     * Get the [lieu_ouverture_plis_es] column value.
     * 
     * @return string
     */
    public function getLieuOuverturePlisEs()
    {

        return $this->lieu_ouverture_plis_es;
    }

    /**
     * Get the [lieu_ouverture_plis_su] column value.
     * 
     * @return string
     */
    public function getLieuOuverturePlisSu()
    {

        return $this->lieu_ouverture_plis_su;
    }

    /**
     * Get the [lieu_ouverture_plis_du] column value.
     * 
     * @return string
     */
    public function getLieuOuverturePlisDu()
    {

        return $this->lieu_ouverture_plis_du;
    }

    /**
     * Get the [lieu_ouverture_plis_cz] column value.
     * 
     * @return string
     */
    public function getLieuOuverturePlisCz()
    {

        return $this->lieu_ouverture_plis_cz;
    }

    /**
     * Get the [adresse_depot_offres_it] column value.
     * 
     * @return string
     */
    public function getAdresseDepotOffresIt()
    {

        return $this->adresse_depot_offres_it;
    }

    /**
     * Get the [adresse_retrais_dossiers_it] column value.
     * 
     * @return string
     */
    public function getAdresseRetraisDossiersIt()
    {

        return $this->adresse_retrais_dossiers_it;
    }

    /**
     * Get the [lieu_ouverture_plis_it] column value.
     * 
     * @return string
     */
    public function getLieuOuverturePlisIt()
    {

        return $this->lieu_ouverture_plis_it;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonGestionAdresses The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonGestionAdressesPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonGestionAdresses The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonGestionAdressesPeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [id_service] column.
     * 
     * @param int $v new value
     * @return CommonGestionAdresses The current object (for fluent API support)
     */
    public function setIdService($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_service !== $v) {
            $this->id_service = $v;
            $this->modifiedColumns[] = CommonGestionAdressesPeer::ID_SERVICE;
        }


        return $this;
    } // setIdService()

    /**
     * Set the value of [id_agent] column.
     * 
     * @param int $v new value
     * @return CommonGestionAdresses The current object (for fluent API support)
     */
    public function setIdAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent !== $v) {
            $this->id_agent = $v;
            $this->modifiedColumns[] = CommonGestionAdressesPeer::ID_AGENT;
        }


        return $this;
    } // setIdAgent()

    /**
     * Set the value of [nom_agent] column.
     * 
     * @param string $v new value
     * @return CommonGestionAdresses The current object (for fluent API support)
     */
    public function setNomAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_agent !== $v) {
            $this->nom_agent = $v;
            $this->modifiedColumns[] = CommonGestionAdressesPeer::NOM_AGENT;
        }


        return $this;
    } // setNomAgent()

    /**
     * Set the value of [prenom_agent] column.
     * 
     * @param string $v new value
     * @return CommonGestionAdresses The current object (for fluent API support)
     */
    public function setPrenomAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prenom_agent !== $v) {
            $this->prenom_agent = $v;
            $this->modifiedColumns[] = CommonGestionAdressesPeer::PRENOM_AGENT;
        }


        return $this;
    } // setPrenomAgent()

    /**
     * Set the value of [adresse_depot_offres] column.
     * 
     * @param string $v new value
     * @return CommonGestionAdresses The current object (for fluent API support)
     */
    public function setAdresseDepotOffres($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_depot_offres !== $v) {
            $this->adresse_depot_offres = $v;
            $this->modifiedColumns[] = CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES;
        }


        return $this;
    } // setAdresseDepotOffres()

    /**
     * Set the value of [adresse_retrais_dossiers] column.
     * 
     * @param string $v new value
     * @return CommonGestionAdresses The current object (for fluent API support)
     */
    public function setAdresseRetraisDossiers($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_retrais_dossiers !== $v) {
            $this->adresse_retrais_dossiers = $v;
            $this->modifiedColumns[] = CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS;
        }


        return $this;
    } // setAdresseRetraisDossiers()

    /**
     * Set the value of [lieu_ouverture_plis] column.
     * 
     * @param string $v new value
     * @return CommonGestionAdresses The current object (for fluent API support)
     */
    public function setLieuOuverturePlis($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lieu_ouverture_plis !== $v) {
            $this->lieu_ouverture_plis = $v;
            $this->modifiedColumns[] = CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS;
        }


        return $this;
    } // setLieuOuverturePlis()

    /**
     * Set the value of [adresse_depot_offres_fr] column.
     * 
     * @param string $v new value
     * @return CommonGestionAdresses The current object (for fluent API support)
     */
    public function setAdresseDepotOffresFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_depot_offres_fr !== $v) {
            $this->adresse_depot_offres_fr = $v;
            $this->modifiedColumns[] = CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_FR;
        }


        return $this;
    } // setAdresseDepotOffresFr()

    /**
     * Set the value of [adresse_retrais_dossiers_fr] column.
     * 
     * @param string $v new value
     * @return CommonGestionAdresses The current object (for fluent API support)
     */
    public function setAdresseRetraisDossiersFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_retrais_dossiers_fr !== $v) {
            $this->adresse_retrais_dossiers_fr = $v;
            $this->modifiedColumns[] = CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_FR;
        }


        return $this;
    } // setAdresseRetraisDossiersFr()

    /**
     * Set the value of [lieu_ouverture_plis_fr] column.
     * 
     * @param string $v new value
     * @return CommonGestionAdresses The current object (for fluent API support)
     */
    public function setLieuOuverturePlisFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lieu_ouverture_plis_fr !== $v) {
            $this->lieu_ouverture_plis_fr = $v;
            $this->modifiedColumns[] = CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_FR;
        }


        return $this;
    } // setLieuOuverturePlisFr()

    /**
     * Set the value of [adresse_depot_offres_ar] column.
     * 
     * @param string $v new value
     * @return CommonGestionAdresses The current object (for fluent API support)
     */
    public function setAdresseDepotOffresAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_depot_offres_ar !== $v) {
            $this->adresse_depot_offres_ar = $v;
            $this->modifiedColumns[] = CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_AR;
        }


        return $this;
    } // setAdresseDepotOffresAr()

    /**
     * Set the value of [adresse_retrais_dossiers_ar] column.
     * 
     * @param string $v new value
     * @return CommonGestionAdresses The current object (for fluent API support)
     */
    public function setAdresseRetraisDossiersAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_retrais_dossiers_ar !== $v) {
            $this->adresse_retrais_dossiers_ar = $v;
            $this->modifiedColumns[] = CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_AR;
        }


        return $this;
    } // setAdresseRetraisDossiersAr()

    /**
     * Set the value of [lieu_ouverture_plis_ar] column.
     * 
     * @param string $v new value
     * @return CommonGestionAdresses The current object (for fluent API support)
     */
    public function setLieuOuverturePlisAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lieu_ouverture_plis_ar !== $v) {
            $this->lieu_ouverture_plis_ar = $v;
            $this->modifiedColumns[] = CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_AR;
        }


        return $this;
    } // setLieuOuverturePlisAr()

    /**
     * Set the value of [adresse_depot_offres_en] column.
     * 
     * @param string $v new value
     * @return CommonGestionAdresses The current object (for fluent API support)
     */
    public function setAdresseDepotOffresEn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_depot_offres_en !== $v) {
            $this->adresse_depot_offres_en = $v;
            $this->modifiedColumns[] = CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_EN;
        }


        return $this;
    } // setAdresseDepotOffresEn()

    /**
     * Set the value of [adresse_depot_offres_es] column.
     * 
     * @param string $v new value
     * @return CommonGestionAdresses The current object (for fluent API support)
     */
    public function setAdresseDepotOffresEs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_depot_offres_es !== $v) {
            $this->adresse_depot_offres_es = $v;
            $this->modifiedColumns[] = CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_ES;
        }


        return $this;
    } // setAdresseDepotOffresEs()

    /**
     * Set the value of [adresse_depot_offres_su] column.
     * 
     * @param string $v new value
     * @return CommonGestionAdresses The current object (for fluent API support)
     */
    public function setAdresseDepotOffresSu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_depot_offres_su !== $v) {
            $this->adresse_depot_offres_su = $v;
            $this->modifiedColumns[] = CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_SU;
        }


        return $this;
    } // setAdresseDepotOffresSu()

    /**
     * Set the value of [adresse_depot_offres_du] column.
     * 
     * @param string $v new value
     * @return CommonGestionAdresses The current object (for fluent API support)
     */
    public function setAdresseDepotOffresDu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_depot_offres_du !== $v) {
            $this->adresse_depot_offres_du = $v;
            $this->modifiedColumns[] = CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_DU;
        }


        return $this;
    } // setAdresseDepotOffresDu()

    /**
     * Set the value of [adresse_depot_offres_cz] column.
     * 
     * @param string $v new value
     * @return CommonGestionAdresses The current object (for fluent API support)
     */
    public function setAdresseDepotOffresCz($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_depot_offres_cz !== $v) {
            $this->adresse_depot_offres_cz = $v;
            $this->modifiedColumns[] = CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_CZ;
        }


        return $this;
    } // setAdresseDepotOffresCz()

    /**
     * Set the value of [adresse_retrais_dossiers_en] column.
     * 
     * @param string $v new value
     * @return CommonGestionAdresses The current object (for fluent API support)
     */
    public function setAdresseRetraisDossiersEn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_retrais_dossiers_en !== $v) {
            $this->adresse_retrais_dossiers_en = $v;
            $this->modifiedColumns[] = CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_EN;
        }


        return $this;
    } // setAdresseRetraisDossiersEn()

    /**
     * Set the value of [adresse_retrais_dossiers_es] column.
     * 
     * @param string $v new value
     * @return CommonGestionAdresses The current object (for fluent API support)
     */
    public function setAdresseRetraisDossiersEs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_retrais_dossiers_es !== $v) {
            $this->adresse_retrais_dossiers_es = $v;
            $this->modifiedColumns[] = CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_ES;
        }


        return $this;
    } // setAdresseRetraisDossiersEs()

    /**
     * Set the value of [adresse_retrais_dossiers_su] column.
     * 
     * @param string $v new value
     * @return CommonGestionAdresses The current object (for fluent API support)
     */
    public function setAdresseRetraisDossiersSu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_retrais_dossiers_su !== $v) {
            $this->adresse_retrais_dossiers_su = $v;
            $this->modifiedColumns[] = CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_SU;
        }


        return $this;
    } // setAdresseRetraisDossiersSu()

    /**
     * Set the value of [adresse_retrais_dossiers_du] column.
     * 
     * @param string $v new value
     * @return CommonGestionAdresses The current object (for fluent API support)
     */
    public function setAdresseRetraisDossiersDu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_retrais_dossiers_du !== $v) {
            $this->adresse_retrais_dossiers_du = $v;
            $this->modifiedColumns[] = CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_DU;
        }


        return $this;
    } // setAdresseRetraisDossiersDu()

    /**
     * Set the value of [adresse_retrais_dossiers_cz] column.
     * 
     * @param string $v new value
     * @return CommonGestionAdresses The current object (for fluent API support)
     */
    public function setAdresseRetraisDossiersCz($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_retrais_dossiers_cz !== $v) {
            $this->adresse_retrais_dossiers_cz = $v;
            $this->modifiedColumns[] = CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_CZ;
        }


        return $this;
    } // setAdresseRetraisDossiersCz()

    /**
     * Set the value of [lieu_ouverture_plis_en] column.
     * 
     * @param string $v new value
     * @return CommonGestionAdresses The current object (for fluent API support)
     */
    public function setLieuOuverturePlisEn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lieu_ouverture_plis_en !== $v) {
            $this->lieu_ouverture_plis_en = $v;
            $this->modifiedColumns[] = CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_EN;
        }


        return $this;
    } // setLieuOuverturePlisEn()

    /**
     * Set the value of [lieu_ouverture_plis_es] column.
     * 
     * @param string $v new value
     * @return CommonGestionAdresses The current object (for fluent API support)
     */
    public function setLieuOuverturePlisEs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lieu_ouverture_plis_es !== $v) {
            $this->lieu_ouverture_plis_es = $v;
            $this->modifiedColumns[] = CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_ES;
        }


        return $this;
    } // setLieuOuverturePlisEs()

    /**
     * Set the value of [lieu_ouverture_plis_su] column.
     * 
     * @param string $v new value
     * @return CommonGestionAdresses The current object (for fluent API support)
     */
    public function setLieuOuverturePlisSu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lieu_ouverture_plis_su !== $v) {
            $this->lieu_ouverture_plis_su = $v;
            $this->modifiedColumns[] = CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_SU;
        }


        return $this;
    } // setLieuOuverturePlisSu()

    /**
     * Set the value of [lieu_ouverture_plis_du] column.
     * 
     * @param string $v new value
     * @return CommonGestionAdresses The current object (for fluent API support)
     */
    public function setLieuOuverturePlisDu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lieu_ouverture_plis_du !== $v) {
            $this->lieu_ouverture_plis_du = $v;
            $this->modifiedColumns[] = CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_DU;
        }


        return $this;
    } // setLieuOuverturePlisDu()

    /**
     * Set the value of [lieu_ouverture_plis_cz] column.
     * 
     * @param string $v new value
     * @return CommonGestionAdresses The current object (for fluent API support)
     */
    public function setLieuOuverturePlisCz($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lieu_ouverture_plis_cz !== $v) {
            $this->lieu_ouverture_plis_cz = $v;
            $this->modifiedColumns[] = CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_CZ;
        }


        return $this;
    } // setLieuOuverturePlisCz()

    /**
     * Set the value of [adresse_depot_offres_it] column.
     * 
     * @param string $v new value
     * @return CommonGestionAdresses The current object (for fluent API support)
     */
    public function setAdresseDepotOffresIt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_depot_offres_it !== $v) {
            $this->adresse_depot_offres_it = $v;
            $this->modifiedColumns[] = CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_IT;
        }


        return $this;
    } // setAdresseDepotOffresIt()

    /**
     * Set the value of [adresse_retrais_dossiers_it] column.
     * 
     * @param string $v new value
     * @return CommonGestionAdresses The current object (for fluent API support)
     */
    public function setAdresseRetraisDossiersIt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_retrais_dossiers_it !== $v) {
            $this->adresse_retrais_dossiers_it = $v;
            $this->modifiedColumns[] = CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_IT;
        }


        return $this;
    } // setAdresseRetraisDossiersIt()

    /**
     * Set the value of [lieu_ouverture_plis_it] column.
     * 
     * @param string $v new value
     * @return CommonGestionAdresses The current object (for fluent API support)
     */
    public function setLieuOuverturePlisIt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lieu_ouverture_plis_it !== $v) {
            $this->lieu_ouverture_plis_it = $v;
            $this->modifiedColumns[] = CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_IT;
        }


        return $this;
    } // setLieuOuverturePlisIt()

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

            if ($this->id_service !== 0) {
                return false;
            }

            if ($this->id_agent !== 0) {
                return false;
            }

            if ($this->nom_agent !== '') {
                return false;
            }

            if ($this->prenom_agent !== '') {
                return false;
            }

            if ($this->adresse_depot_offres !== '') {
                return false;
            }

            if ($this->adresse_retrais_dossiers !== '') {
                return false;
            }

            if ($this->lieu_ouverture_plis !== '') {
                return false;
            }

            if ($this->adresse_depot_offres_fr !== '') {
                return false;
            }

            if ($this->adresse_retrais_dossiers_fr !== '') {
                return false;
            }

            if ($this->lieu_ouverture_plis_fr !== '') {
                return false;
            }

            if ($this->adresse_depot_offres_ar !== '') {
                return false;
            }

            if ($this->adresse_retrais_dossiers_ar !== '') {
                return false;
            }

            if ($this->lieu_ouverture_plis_ar !== '') {
                return false;
            }

            if ($this->adresse_depot_offres_en !== '') {
                return false;
            }

            if ($this->adresse_depot_offres_es !== '') {
                return false;
            }

            if ($this->adresse_depot_offres_su !== '') {
                return false;
            }

            if ($this->adresse_depot_offres_du !== '') {
                return false;
            }

            if ($this->adresse_depot_offres_cz !== '') {
                return false;
            }

            if ($this->adresse_retrais_dossiers_en !== '') {
                return false;
            }

            if ($this->adresse_retrais_dossiers_es !== '') {
                return false;
            }

            if ($this->adresse_retrais_dossiers_su !== '') {
                return false;
            }

            if ($this->adresse_retrais_dossiers_du !== '') {
                return false;
            }

            if ($this->adresse_retrais_dossiers_cz !== '') {
                return false;
            }

            if ($this->lieu_ouverture_plis_en !== '') {
                return false;
            }

            if ($this->lieu_ouverture_plis_es !== '') {
                return false;
            }

            if ($this->lieu_ouverture_plis_su !== '') {
                return false;
            }

            if ($this->lieu_ouverture_plis_du !== '') {
                return false;
            }

            if ($this->lieu_ouverture_plis_cz !== '') {
                return false;
            }

            if ($this->adresse_depot_offres_it !== '') {
                return false;
            }

            if ($this->adresse_retrais_dossiers_it !== '') {
                return false;
            }

            if ($this->lieu_ouverture_plis_it !== '') {
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
            $this->id_service = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->id_agent = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->nom_agent = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->prenom_agent = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->adresse_depot_offres = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->adresse_retrais_dossiers = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->lieu_ouverture_plis = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->adresse_depot_offres_fr = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->adresse_retrais_dossiers_fr = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->lieu_ouverture_plis_fr = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->adresse_depot_offres_ar = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->adresse_retrais_dossiers_ar = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->lieu_ouverture_plis_ar = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->adresse_depot_offres_en = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->adresse_depot_offres_es = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->adresse_depot_offres_su = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->adresse_depot_offres_du = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->adresse_depot_offres_cz = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->adresse_retrais_dossiers_en = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->adresse_retrais_dossiers_es = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->adresse_retrais_dossiers_su = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->adresse_retrais_dossiers_du = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->adresse_retrais_dossiers_cz = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->lieu_ouverture_plis_en = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->lieu_ouverture_plis_es = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->lieu_ouverture_plis_su = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->lieu_ouverture_plis_du = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->lieu_ouverture_plis_cz = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->adresse_depot_offres_it = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->adresse_retrais_dossiers_it = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->lieu_ouverture_plis_it = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 33; // 33 = CommonGestionAdressesPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonGestionAdresses object", $e);
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
            $con = Propel::getConnection(CommonGestionAdressesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonGestionAdressesPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonGestionAdressesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonGestionAdressesQuery::create()
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
            $con = Propel::getConnection(CommonGestionAdressesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonGestionAdressesPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonGestionAdressesPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonGestionAdressesPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonGestionAdressesPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonGestionAdressesPeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonGestionAdressesPeer::ID_SERVICE)) {
            $modifiedColumns[':p' . $index++]  = '`id_service`';
        }
        if ($this->isColumnModified(CommonGestionAdressesPeer::ID_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent`';
        }
        if ($this->isColumnModified(CommonGestionAdressesPeer::NOM_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`nom_agent`';
        }
        if ($this->isColumnModified(CommonGestionAdressesPeer::PRENOM_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`prenom_agent`';
        }
        if ($this->isColumnModified(CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_depot_offres`';
        }
        if ($this->isColumnModified(CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_retrais_dossiers`';
        }
        if ($this->isColumnModified(CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS)) {
            $modifiedColumns[':p' . $index++]  = '`lieu_ouverture_plis`';
        }
        if ($this->isColumnModified(CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_FR)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_depot_offres_fr`';
        }
        if ($this->isColumnModified(CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_FR)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_retrais_dossiers_fr`';
        }
        if ($this->isColumnModified(CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_FR)) {
            $modifiedColumns[':p' . $index++]  = '`lieu_ouverture_plis_fr`';
        }
        if ($this->isColumnModified(CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_AR)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_depot_offres_ar`';
        }
        if ($this->isColumnModified(CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_AR)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_retrais_dossiers_ar`';
        }
        if ($this->isColumnModified(CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_AR)) {
            $modifiedColumns[':p' . $index++]  = '`lieu_ouverture_plis_ar`';
        }
        if ($this->isColumnModified(CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_EN)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_depot_offres_en`';
        }
        if ($this->isColumnModified(CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_ES)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_depot_offres_es`';
        }
        if ($this->isColumnModified(CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_SU)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_depot_offres_su`';
        }
        if ($this->isColumnModified(CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_DU)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_depot_offres_du`';
        }
        if ($this->isColumnModified(CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_CZ)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_depot_offres_cz`';
        }
        if ($this->isColumnModified(CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_EN)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_retrais_dossiers_en`';
        }
        if ($this->isColumnModified(CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_ES)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_retrais_dossiers_es`';
        }
        if ($this->isColumnModified(CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_SU)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_retrais_dossiers_su`';
        }
        if ($this->isColumnModified(CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_DU)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_retrais_dossiers_du`';
        }
        if ($this->isColumnModified(CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_CZ)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_retrais_dossiers_cz`';
        }
        if ($this->isColumnModified(CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_EN)) {
            $modifiedColumns[':p' . $index++]  = '`lieu_ouverture_plis_en`';
        }
        if ($this->isColumnModified(CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_ES)) {
            $modifiedColumns[':p' . $index++]  = '`lieu_ouverture_plis_es`';
        }
        if ($this->isColumnModified(CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_SU)) {
            $modifiedColumns[':p' . $index++]  = '`lieu_ouverture_plis_su`';
        }
        if ($this->isColumnModified(CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_DU)) {
            $modifiedColumns[':p' . $index++]  = '`lieu_ouverture_plis_du`';
        }
        if ($this->isColumnModified(CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_CZ)) {
            $modifiedColumns[':p' . $index++]  = '`lieu_ouverture_plis_cz`';
        }
        if ($this->isColumnModified(CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_IT)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_depot_offres_it`';
        }
        if ($this->isColumnModified(CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_IT)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_retrais_dossiers_it`';
        }
        if ($this->isColumnModified(CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_IT)) {
            $modifiedColumns[':p' . $index++]  = '`lieu_ouverture_plis_it`';
        }

        $sql = sprintf(
            'INSERT INTO `gestion_adresses` (%s) VALUES (%s)',
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
                    case '`id_service`':						
                        $stmt->bindValue($identifier, $this->id_service, PDO::PARAM_INT);
                        break;
                    case '`id_agent`':						
                        $stmt->bindValue($identifier, $this->id_agent, PDO::PARAM_INT);
                        break;
                    case '`nom_agent`':						
                        $stmt->bindValue($identifier, $this->nom_agent, PDO::PARAM_STR);
                        break;
                    case '`prenom_agent`':						
                        $stmt->bindValue($identifier, $this->prenom_agent, PDO::PARAM_STR);
                        break;
                    case '`adresse_depot_offres`':						
                        $stmt->bindValue($identifier, $this->adresse_depot_offres, PDO::PARAM_STR);
                        break;
                    case '`adresse_retrais_dossiers`':						
                        $stmt->bindValue($identifier, $this->adresse_retrais_dossiers, PDO::PARAM_STR);
                        break;
                    case '`lieu_ouverture_plis`':						
                        $stmt->bindValue($identifier, $this->lieu_ouverture_plis, PDO::PARAM_STR);
                        break;
                    case '`adresse_depot_offres_fr`':						
                        $stmt->bindValue($identifier, $this->adresse_depot_offres_fr, PDO::PARAM_STR);
                        break;
                    case '`adresse_retrais_dossiers_fr`':						
                        $stmt->bindValue($identifier, $this->adresse_retrais_dossiers_fr, PDO::PARAM_STR);
                        break;
                    case '`lieu_ouverture_plis_fr`':						
                        $stmt->bindValue($identifier, $this->lieu_ouverture_plis_fr, PDO::PARAM_STR);
                        break;
                    case '`adresse_depot_offres_ar`':						
                        $stmt->bindValue($identifier, $this->adresse_depot_offres_ar, PDO::PARAM_STR);
                        break;
                    case '`adresse_retrais_dossiers_ar`':						
                        $stmt->bindValue($identifier, $this->adresse_retrais_dossiers_ar, PDO::PARAM_STR);
                        break;
                    case '`lieu_ouverture_plis_ar`':						
                        $stmt->bindValue($identifier, $this->lieu_ouverture_plis_ar, PDO::PARAM_STR);
                        break;
                    case '`adresse_depot_offres_en`':						
                        $stmt->bindValue($identifier, $this->adresse_depot_offres_en, PDO::PARAM_STR);
                        break;
                    case '`adresse_depot_offres_es`':						
                        $stmt->bindValue($identifier, $this->adresse_depot_offres_es, PDO::PARAM_STR);
                        break;
                    case '`adresse_depot_offres_su`':						
                        $stmt->bindValue($identifier, $this->adresse_depot_offres_su, PDO::PARAM_STR);
                        break;
                    case '`adresse_depot_offres_du`':						
                        $stmt->bindValue($identifier, $this->adresse_depot_offres_du, PDO::PARAM_STR);
                        break;
                    case '`adresse_depot_offres_cz`':						
                        $stmt->bindValue($identifier, $this->adresse_depot_offres_cz, PDO::PARAM_STR);
                        break;
                    case '`adresse_retrais_dossiers_en`':						
                        $stmt->bindValue($identifier, $this->adresse_retrais_dossiers_en, PDO::PARAM_STR);
                        break;
                    case '`adresse_retrais_dossiers_es`':						
                        $stmt->bindValue($identifier, $this->adresse_retrais_dossiers_es, PDO::PARAM_STR);
                        break;
                    case '`adresse_retrais_dossiers_su`':						
                        $stmt->bindValue($identifier, $this->adresse_retrais_dossiers_su, PDO::PARAM_STR);
                        break;
                    case '`adresse_retrais_dossiers_du`':						
                        $stmt->bindValue($identifier, $this->adresse_retrais_dossiers_du, PDO::PARAM_STR);
                        break;
                    case '`adresse_retrais_dossiers_cz`':						
                        $stmt->bindValue($identifier, $this->adresse_retrais_dossiers_cz, PDO::PARAM_STR);
                        break;
                    case '`lieu_ouverture_plis_en`':						
                        $stmt->bindValue($identifier, $this->lieu_ouverture_plis_en, PDO::PARAM_STR);
                        break;
                    case '`lieu_ouverture_plis_es`':						
                        $stmt->bindValue($identifier, $this->lieu_ouverture_plis_es, PDO::PARAM_STR);
                        break;
                    case '`lieu_ouverture_plis_su`':						
                        $stmt->bindValue($identifier, $this->lieu_ouverture_plis_su, PDO::PARAM_STR);
                        break;
                    case '`lieu_ouverture_plis_du`':						
                        $stmt->bindValue($identifier, $this->lieu_ouverture_plis_du, PDO::PARAM_STR);
                        break;
                    case '`lieu_ouverture_plis_cz`':						
                        $stmt->bindValue($identifier, $this->lieu_ouverture_plis_cz, PDO::PARAM_STR);
                        break;
                    case '`adresse_depot_offres_it`':						
                        $stmt->bindValue($identifier, $this->adresse_depot_offres_it, PDO::PARAM_STR);
                        break;
                    case '`adresse_retrais_dossiers_it`':						
                        $stmt->bindValue($identifier, $this->adresse_retrais_dossiers_it, PDO::PARAM_STR);
                        break;
                    case '`lieu_ouverture_plis_it`':						
                        $stmt->bindValue($identifier, $this->lieu_ouverture_plis_it, PDO::PARAM_STR);
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


            if (($retval = CommonGestionAdressesPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonGestionAdressesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdService();
                break;
            case 3:
                return $this->getIdAgent();
                break;
            case 4:
                return $this->getNomAgent();
                break;
            case 5:
                return $this->getPrenomAgent();
                break;
            case 6:
                return $this->getAdresseDepotOffres();
                break;
            case 7:
                return $this->getAdresseRetraisDossiers();
                break;
            case 8:
                return $this->getLieuOuverturePlis();
                break;
            case 9:
                return $this->getAdresseDepotOffresFr();
                break;
            case 10:
                return $this->getAdresseRetraisDossiersFr();
                break;
            case 11:
                return $this->getLieuOuverturePlisFr();
                break;
            case 12:
                return $this->getAdresseDepotOffresAr();
                break;
            case 13:
                return $this->getAdresseRetraisDossiersAr();
                break;
            case 14:
                return $this->getLieuOuverturePlisAr();
                break;
            case 15:
                return $this->getAdresseDepotOffresEn();
                break;
            case 16:
                return $this->getAdresseDepotOffresEs();
                break;
            case 17:
                return $this->getAdresseDepotOffresSu();
                break;
            case 18:
                return $this->getAdresseDepotOffresDu();
                break;
            case 19:
                return $this->getAdresseDepotOffresCz();
                break;
            case 20:
                return $this->getAdresseRetraisDossiersEn();
                break;
            case 21:
                return $this->getAdresseRetraisDossiersEs();
                break;
            case 22:
                return $this->getAdresseRetraisDossiersSu();
                break;
            case 23:
                return $this->getAdresseRetraisDossiersDu();
                break;
            case 24:
                return $this->getAdresseRetraisDossiersCz();
                break;
            case 25:
                return $this->getLieuOuverturePlisEn();
                break;
            case 26:
                return $this->getLieuOuverturePlisEs();
                break;
            case 27:
                return $this->getLieuOuverturePlisSu();
                break;
            case 28:
                return $this->getLieuOuverturePlisDu();
                break;
            case 29:
                return $this->getLieuOuverturePlisCz();
                break;
            case 30:
                return $this->getAdresseDepotOffresIt();
                break;
            case 31:
                return $this->getAdresseRetraisDossiersIt();
                break;
            case 32:
                return $this->getLieuOuverturePlisIt();
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
        if (isset($alreadyDumpedObjects['CommonGestionAdresses'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonGestionAdresses'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonGestionAdressesPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getIdService(),
            $keys[3] => $this->getIdAgent(),
            $keys[4] => $this->getNomAgent(),
            $keys[5] => $this->getPrenomAgent(),
            $keys[6] => $this->getAdresseDepotOffres(),
            $keys[7] => $this->getAdresseRetraisDossiers(),
            $keys[8] => $this->getLieuOuverturePlis(),
            $keys[9] => $this->getAdresseDepotOffresFr(),
            $keys[10] => $this->getAdresseRetraisDossiersFr(),
            $keys[11] => $this->getLieuOuverturePlisFr(),
            $keys[12] => $this->getAdresseDepotOffresAr(),
            $keys[13] => $this->getAdresseRetraisDossiersAr(),
            $keys[14] => $this->getLieuOuverturePlisAr(),
            $keys[15] => $this->getAdresseDepotOffresEn(),
            $keys[16] => $this->getAdresseDepotOffresEs(),
            $keys[17] => $this->getAdresseDepotOffresSu(),
            $keys[18] => $this->getAdresseDepotOffresDu(),
            $keys[19] => $this->getAdresseDepotOffresCz(),
            $keys[20] => $this->getAdresseRetraisDossiersEn(),
            $keys[21] => $this->getAdresseRetraisDossiersEs(),
            $keys[22] => $this->getAdresseRetraisDossiersSu(),
            $keys[23] => $this->getAdresseRetraisDossiersDu(),
            $keys[24] => $this->getAdresseRetraisDossiersCz(),
            $keys[25] => $this->getLieuOuverturePlisEn(),
            $keys[26] => $this->getLieuOuverturePlisEs(),
            $keys[27] => $this->getLieuOuverturePlisSu(),
            $keys[28] => $this->getLieuOuverturePlisDu(),
            $keys[29] => $this->getLieuOuverturePlisCz(),
            $keys[30] => $this->getAdresseDepotOffresIt(),
            $keys[31] => $this->getAdresseRetraisDossiersIt(),
            $keys[32] => $this->getLieuOuverturePlisIt(),
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
        $pos = CommonGestionAdressesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdService($value);
                break;
            case 3:
                $this->setIdAgent($value);
                break;
            case 4:
                $this->setNomAgent($value);
                break;
            case 5:
                $this->setPrenomAgent($value);
                break;
            case 6:
                $this->setAdresseDepotOffres($value);
                break;
            case 7:
                $this->setAdresseRetraisDossiers($value);
                break;
            case 8:
                $this->setLieuOuverturePlis($value);
                break;
            case 9:
                $this->setAdresseDepotOffresFr($value);
                break;
            case 10:
                $this->setAdresseRetraisDossiersFr($value);
                break;
            case 11:
                $this->setLieuOuverturePlisFr($value);
                break;
            case 12:
                $this->setAdresseDepotOffresAr($value);
                break;
            case 13:
                $this->setAdresseRetraisDossiersAr($value);
                break;
            case 14:
                $this->setLieuOuverturePlisAr($value);
                break;
            case 15:
                $this->setAdresseDepotOffresEn($value);
                break;
            case 16:
                $this->setAdresseDepotOffresEs($value);
                break;
            case 17:
                $this->setAdresseDepotOffresSu($value);
                break;
            case 18:
                $this->setAdresseDepotOffresDu($value);
                break;
            case 19:
                $this->setAdresseDepotOffresCz($value);
                break;
            case 20:
                $this->setAdresseRetraisDossiersEn($value);
                break;
            case 21:
                $this->setAdresseRetraisDossiersEs($value);
                break;
            case 22:
                $this->setAdresseRetraisDossiersSu($value);
                break;
            case 23:
                $this->setAdresseRetraisDossiersDu($value);
                break;
            case 24:
                $this->setAdresseRetraisDossiersCz($value);
                break;
            case 25:
                $this->setLieuOuverturePlisEn($value);
                break;
            case 26:
                $this->setLieuOuverturePlisEs($value);
                break;
            case 27:
                $this->setLieuOuverturePlisSu($value);
                break;
            case 28:
                $this->setLieuOuverturePlisDu($value);
                break;
            case 29:
                $this->setLieuOuverturePlisCz($value);
                break;
            case 30:
                $this->setAdresseDepotOffresIt($value);
                break;
            case 31:
                $this->setAdresseRetraisDossiersIt($value);
                break;
            case 32:
                $this->setLieuOuverturePlisIt($value);
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
        $keys = CommonGestionAdressesPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdService($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdAgent($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setNomAgent($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setPrenomAgent($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setAdresseDepotOffres($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setAdresseRetraisDossiers($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setLieuOuverturePlis($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setAdresseDepotOffresFr($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setAdresseRetraisDossiersFr($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setLieuOuverturePlisFr($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setAdresseDepotOffresAr($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setAdresseRetraisDossiersAr($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setLieuOuverturePlisAr($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setAdresseDepotOffresEn($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setAdresseDepotOffresEs($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setAdresseDepotOffresSu($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setAdresseDepotOffresDu($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setAdresseDepotOffresCz($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setAdresseRetraisDossiersEn($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setAdresseRetraisDossiersEs($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setAdresseRetraisDossiersSu($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setAdresseRetraisDossiersDu($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setAdresseRetraisDossiersCz($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setLieuOuverturePlisEn($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setLieuOuverturePlisEs($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setLieuOuverturePlisSu($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setLieuOuverturePlisDu($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setLieuOuverturePlisCz($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setAdresseDepotOffresIt($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setAdresseRetraisDossiersIt($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setLieuOuverturePlisIt($arr[$keys[32]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonGestionAdressesPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonGestionAdressesPeer::ID)) $criteria->add(CommonGestionAdressesPeer::ID, $this->id);
        if ($this->isColumnModified(CommonGestionAdressesPeer::ORGANISME)) $criteria->add(CommonGestionAdressesPeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonGestionAdressesPeer::ID_SERVICE)) $criteria->add(CommonGestionAdressesPeer::ID_SERVICE, $this->id_service);
        if ($this->isColumnModified(CommonGestionAdressesPeer::ID_AGENT)) $criteria->add(CommonGestionAdressesPeer::ID_AGENT, $this->id_agent);
        if ($this->isColumnModified(CommonGestionAdressesPeer::NOM_AGENT)) $criteria->add(CommonGestionAdressesPeer::NOM_AGENT, $this->nom_agent);
        if ($this->isColumnModified(CommonGestionAdressesPeer::PRENOM_AGENT)) $criteria->add(CommonGestionAdressesPeer::PRENOM_AGENT, $this->prenom_agent);
        if ($this->isColumnModified(CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES)) $criteria->add(CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES, $this->adresse_depot_offres);
        if ($this->isColumnModified(CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS)) $criteria->add(CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS, $this->adresse_retrais_dossiers);
        if ($this->isColumnModified(CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS)) $criteria->add(CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS, $this->lieu_ouverture_plis);
        if ($this->isColumnModified(CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_FR)) $criteria->add(CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_FR, $this->adresse_depot_offres_fr);
        if ($this->isColumnModified(CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_FR)) $criteria->add(CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_FR, $this->adresse_retrais_dossiers_fr);
        if ($this->isColumnModified(CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_FR)) $criteria->add(CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_FR, $this->lieu_ouverture_plis_fr);
        if ($this->isColumnModified(CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_AR)) $criteria->add(CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_AR, $this->adresse_depot_offres_ar);
        if ($this->isColumnModified(CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_AR)) $criteria->add(CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_AR, $this->adresse_retrais_dossiers_ar);
        if ($this->isColumnModified(CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_AR)) $criteria->add(CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_AR, $this->lieu_ouverture_plis_ar);
        if ($this->isColumnModified(CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_EN)) $criteria->add(CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_EN, $this->adresse_depot_offres_en);
        if ($this->isColumnModified(CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_ES)) $criteria->add(CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_ES, $this->adresse_depot_offres_es);
        if ($this->isColumnModified(CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_SU)) $criteria->add(CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_SU, $this->adresse_depot_offres_su);
        if ($this->isColumnModified(CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_DU)) $criteria->add(CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_DU, $this->adresse_depot_offres_du);
        if ($this->isColumnModified(CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_CZ)) $criteria->add(CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_CZ, $this->adresse_depot_offres_cz);
        if ($this->isColumnModified(CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_EN)) $criteria->add(CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_EN, $this->adresse_retrais_dossiers_en);
        if ($this->isColumnModified(CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_ES)) $criteria->add(CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_ES, $this->adresse_retrais_dossiers_es);
        if ($this->isColumnModified(CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_SU)) $criteria->add(CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_SU, $this->adresse_retrais_dossiers_su);
        if ($this->isColumnModified(CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_DU)) $criteria->add(CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_DU, $this->adresse_retrais_dossiers_du);
        if ($this->isColumnModified(CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_CZ)) $criteria->add(CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_CZ, $this->adresse_retrais_dossiers_cz);
        if ($this->isColumnModified(CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_EN)) $criteria->add(CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_EN, $this->lieu_ouverture_plis_en);
        if ($this->isColumnModified(CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_ES)) $criteria->add(CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_ES, $this->lieu_ouverture_plis_es);
        if ($this->isColumnModified(CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_SU)) $criteria->add(CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_SU, $this->lieu_ouverture_plis_su);
        if ($this->isColumnModified(CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_DU)) $criteria->add(CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_DU, $this->lieu_ouverture_plis_du);
        if ($this->isColumnModified(CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_CZ)) $criteria->add(CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_CZ, $this->lieu_ouverture_plis_cz);
        if ($this->isColumnModified(CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_IT)) $criteria->add(CommonGestionAdressesPeer::ADRESSE_DEPOT_OFFRES_IT, $this->adresse_depot_offres_it);
        if ($this->isColumnModified(CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_IT)) $criteria->add(CommonGestionAdressesPeer::ADRESSE_RETRAIS_DOSSIERS_IT, $this->adresse_retrais_dossiers_it);
        if ($this->isColumnModified(CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_IT)) $criteria->add(CommonGestionAdressesPeer::LIEU_OUVERTURE_PLIS_IT, $this->lieu_ouverture_plis_it);

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
        $criteria = new Criteria(CommonGestionAdressesPeer::DATABASE_NAME);
        $criteria->add(CommonGestionAdressesPeer::ID, $this->id);
        $criteria->add(CommonGestionAdressesPeer::ORGANISME, $this->organisme);

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
     * @param object $copyObj An object of CommonGestionAdresses (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setIdService($this->getIdService());
        $copyObj->setIdAgent($this->getIdAgent());
        $copyObj->setNomAgent($this->getNomAgent());
        $copyObj->setPrenomAgent($this->getPrenomAgent());
        $copyObj->setAdresseDepotOffres($this->getAdresseDepotOffres());
        $copyObj->setAdresseRetraisDossiers($this->getAdresseRetraisDossiers());
        $copyObj->setLieuOuverturePlis($this->getLieuOuverturePlis());
        $copyObj->setAdresseDepotOffresFr($this->getAdresseDepotOffresFr());
        $copyObj->setAdresseRetraisDossiersFr($this->getAdresseRetraisDossiersFr());
        $copyObj->setLieuOuverturePlisFr($this->getLieuOuverturePlisFr());
        $copyObj->setAdresseDepotOffresAr($this->getAdresseDepotOffresAr());
        $copyObj->setAdresseRetraisDossiersAr($this->getAdresseRetraisDossiersAr());
        $copyObj->setLieuOuverturePlisAr($this->getLieuOuverturePlisAr());
        $copyObj->setAdresseDepotOffresEn($this->getAdresseDepotOffresEn());
        $copyObj->setAdresseDepotOffresEs($this->getAdresseDepotOffresEs());
        $copyObj->setAdresseDepotOffresSu($this->getAdresseDepotOffresSu());
        $copyObj->setAdresseDepotOffresDu($this->getAdresseDepotOffresDu());
        $copyObj->setAdresseDepotOffresCz($this->getAdresseDepotOffresCz());
        $copyObj->setAdresseRetraisDossiersEn($this->getAdresseRetraisDossiersEn());
        $copyObj->setAdresseRetraisDossiersEs($this->getAdresseRetraisDossiersEs());
        $copyObj->setAdresseRetraisDossiersSu($this->getAdresseRetraisDossiersSu());
        $copyObj->setAdresseRetraisDossiersDu($this->getAdresseRetraisDossiersDu());
        $copyObj->setAdresseRetraisDossiersCz($this->getAdresseRetraisDossiersCz());
        $copyObj->setLieuOuverturePlisEn($this->getLieuOuverturePlisEn());
        $copyObj->setLieuOuverturePlisEs($this->getLieuOuverturePlisEs());
        $copyObj->setLieuOuverturePlisSu($this->getLieuOuverturePlisSu());
        $copyObj->setLieuOuverturePlisDu($this->getLieuOuverturePlisDu());
        $copyObj->setLieuOuverturePlisCz($this->getLieuOuverturePlisCz());
        $copyObj->setAdresseDepotOffresIt($this->getAdresseDepotOffresIt());
        $copyObj->setAdresseRetraisDossiersIt($this->getAdresseRetraisDossiersIt());
        $copyObj->setLieuOuverturePlisIt($this->getLieuOuverturePlisIt());
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
     * @return CommonGestionAdresses Clone of current object.
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
     * @return CommonGestionAdressesPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonGestionAdressesPeer();
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
        $this->id_service = null;
        $this->id_agent = null;
        $this->nom_agent = null;
        $this->prenom_agent = null;
        $this->adresse_depot_offres = null;
        $this->adresse_retrais_dossiers = null;
        $this->lieu_ouverture_plis = null;
        $this->adresse_depot_offres_fr = null;
        $this->adresse_retrais_dossiers_fr = null;
        $this->lieu_ouverture_plis_fr = null;
        $this->adresse_depot_offres_ar = null;
        $this->adresse_retrais_dossiers_ar = null;
        $this->lieu_ouverture_plis_ar = null;
        $this->adresse_depot_offres_en = null;
        $this->adresse_depot_offres_es = null;
        $this->adresse_depot_offres_su = null;
        $this->adresse_depot_offres_du = null;
        $this->adresse_depot_offres_cz = null;
        $this->adresse_retrais_dossiers_en = null;
        $this->adresse_retrais_dossiers_es = null;
        $this->adresse_retrais_dossiers_su = null;
        $this->adresse_retrais_dossiers_du = null;
        $this->adresse_retrais_dossiers_cz = null;
        $this->lieu_ouverture_plis_en = null;
        $this->lieu_ouverture_plis_es = null;
        $this->lieu_ouverture_plis_su = null;
        $this->lieu_ouverture_plis_du = null;
        $this->lieu_ouverture_plis_cz = null;
        $this->adresse_depot_offres_it = null;
        $this->adresse_retrais_dossiers_it = null;
        $this->lieu_ouverture_plis_it = null;
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
        return (string) $this->exportTo(CommonGestionAdressesPeer::DEFAULT_STRING_FORMAT);
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
