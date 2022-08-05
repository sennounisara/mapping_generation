<?php


/**
 * Base class that represents a row from the 'Service' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonService extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonServicePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonServicePeer
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
     * The value for the type_service field.
     * Note: this column has a database default value of: '2'
     * @var        string
     */
    protected $type_service;

    /**
     * The value for the libelle field.
     * @var        string
     */
    protected $libelle;

    /**
     * The value for the sigle field.
     * @var        string
     */
    protected $sigle;

    /**
     * The value for the adresse field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adresse;

    /**
     * The value for the adresse_suite field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adresse_suite;

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
     * The value for the pays field.
     * @var        string
     */
    protected $pays;

    /**
     * The value for the id_initial field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_initial;

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
     * The value for the siren field.
     * @var        string
     */
    protected $siren;

    /**
     * The value for the complement field.
     * @var        string
     */
    protected $complement;

    /**
     * The value for the libelle_ar field.
     * @var        string
     */
    protected $libelle_ar;

    /**
     * The value for the adresse_ar field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adresse_ar;

    /**
     * The value for the adresse_suite_ar field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adresse_suite_ar;

    /**
     * The value for the ville_ar field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $ville_ar;

    /**
     * The value for the pays_ar field.
     * @var        string
     */
    protected $pays_ar;

    /**
     * The value for the libelle_fr field.
     * @var        string
     */
    protected $libelle_fr;

    /**
     * The value for the adresse_fr field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adresse_fr;

    /**
     * The value for the adresse_suite_fr field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adresse_suite_fr;

    /**
     * The value for the ville_fr field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $ville_fr;

    /**
     * The value for the pays_fr field.
     * @var        string
     */
    protected $pays_fr;

    /**
     * The value for the libelle_es field.
     * @var        string
     */
    protected $libelle_es;

    /**
     * The value for the adresse_es field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adresse_es;

    /**
     * The value for the adresse_suite_es field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adresse_suite_es;

    /**
     * The value for the ville_es field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $ville_es;

    /**
     * The value for the pays_es field.
     * @var        string
     */
    protected $pays_es;

    /**
     * The value for the libelle_en field.
     * @var        string
     */
    protected $libelle_en;

    /**
     * The value for the adresse_en field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adresse_en;

    /**
     * The value for the adresse_suite_en field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adresse_suite_en;

    /**
     * The value for the ville_en field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $ville_en;

    /**
     * The value for the pays_en field.
     * @var        string
     */
    protected $pays_en;

    /**
     * The value for the libelle_su field.
     * @var        string
     */
    protected $libelle_su;

    /**
     * The value for the adresse_su field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adresse_su;

    /**
     * The value for the adresse_suite_su field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adresse_suite_su;

    /**
     * The value for the ville_su field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $ville_su;

    /**
     * The value for the pays_su field.
     * @var        string
     */
    protected $pays_su;

    /**
     * The value for the libelle_du field.
     * @var        string
     */
    protected $libelle_du;

    /**
     * The value for the adresse_du field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adresse_du;

    /**
     * The value for the adresse_suite_du field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adresse_suite_du;

    /**
     * The value for the ville_du field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $ville_du;

    /**
     * The value for the pays_du field.
     * @var        string
     */
    protected $pays_du;

    /**
     * The value for the libelle_cz field.
     * @var        string
     */
    protected $libelle_cz;

    /**
     * The value for the adresse_cz field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adresse_cz;

    /**
     * The value for the adresse_suite_cz field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adresse_suite_cz;

    /**
     * The value for the ville_cz field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $ville_cz;

    /**
     * The value for the pays_cz field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $pays_cz;

    /**
     * The value for the libelle_it field.
     * @var        string
     */
    protected $libelle_it;

    /**
     * The value for the adresse_it field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adresse_it;

    /**
     * The value for the adresse_suite_it field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adresse_suite_it;

    /**
     * The value for the ville_it field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $ville_it;

    /**
     * The value for the pays_it field.
     * @var        string
     */
    protected $pays_it;

    /**
     * The value for the chemin_complet field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $chemin_complet;

    /**
     * The value for the chemin_complet_fr field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $chemin_complet_fr;

    /**
     * The value for the chemin_complet_en field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $chemin_complet_en;

    /**
     * The value for the chemin_complet_es field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $chemin_complet_es;

    /**
     * The value for the chemin_complet_su field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $chemin_complet_su;

    /**
     * The value for the chemin_complet_du field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $chemin_complet_du;

    /**
     * The value for the chemin_complet_cz field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $chemin_complet_cz;

    /**
     * The value for the chemin_complet_ar field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $chemin_complet_ar;

    /**
     * The value for the chemin_complet_it field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $chemin_complet_it;

    /**
     * The value for the nom_service_archiveur field.
     * @var        string
     */
    protected $nom_service_archiveur;

    /**
     * The value for the identifiant_service_archiveur field.
     * @var        string
     */
    protected $identifiant_service_archiveur;

    /**
     * The value for the affichage_service field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $affichage_service;

    /**
     * The value for the activation_fuseau_horaire field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $activation_fuseau_horaire;

    /**
     * The value for the decalage_horaire field.
     * @var        string
     */
    protected $decalage_horaire;

    /**
     * The value for the lieu_residence field.
     * @var        string
     */
    protected $lieu_residence;

    /**
     * The value for the alerte field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $alerte;

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
        $this->type_service = '2';
        $this->adresse = '';
        $this->adresse_suite = '';
        $this->cp = '';
        $this->ville = '';
        $this->telephone = '';
        $this->fax = '';
        $this->mail = '';
        $this->id_initial = 0;
        $this->adresse_ar = '';
        $this->adresse_suite_ar = '';
        $this->ville_ar = '';
        $this->adresse_fr = '';
        $this->adresse_suite_fr = '';
        $this->ville_fr = '';
        $this->adresse_es = '';
        $this->adresse_suite_es = '';
        $this->ville_es = '';
        $this->adresse_en = '';
        $this->adresse_suite_en = '';
        $this->ville_en = '';
        $this->adresse_su = '';
        $this->adresse_suite_su = '';
        $this->ville_su = '';
        $this->adresse_du = '';
        $this->adresse_suite_du = '';
        $this->ville_du = '';
        $this->adresse_cz = '';
        $this->adresse_suite_cz = '';
        $this->ville_cz = '';
        $this->pays_cz = '';
        $this->adresse_it = '';
        $this->adresse_suite_it = '';
        $this->ville_it = '';
        $this->chemin_complet = '';
        $this->chemin_complet_fr = '';
        $this->chemin_complet_en = '';
        $this->chemin_complet_es = '';
        $this->chemin_complet_su = '';
        $this->chemin_complet_du = '';
        $this->chemin_complet_cz = '';
        $this->chemin_complet_ar = '';
        $this->chemin_complet_it = '';
        $this->affichage_service = '1';
        $this->activation_fuseau_horaire = '0';
        $this->alerte = '0';
    }

    /**
     * Initializes internal state of BaseCommonService object.
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
     * Get the [type_service] column value.
     * 
     * @return string
     */
    public function getTypeService()
    {

        return $this->type_service;
    }

    /**
     * Get the [libelle] column value.
     * 
     * @return string
     */
    public function getLibelle()
    {

        return $this->libelle;
    }

    /**
     * Get the [sigle] column value.
     * 
     * @return string
     */
    public function getSigle()
    {

        return $this->sigle;
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
     * Get the [adresse_suite] column value.
     * 
     * @return string
     */
    public function getAdresseSuite()
    {

        return $this->adresse_suite;
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
     * Get the [pays] column value.
     * 
     * @return string
     */
    public function getPays()
    {

        return $this->pays;
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
     * Get the [siren] column value.
     * 
     * @return string
     */
    public function getSiren()
    {

        return $this->siren;
    }

    /**
     * Get the [complement] column value.
     * 
     * @return string
     */
    public function getComplement()
    {

        return $this->complement;
    }

    /**
     * Get the [libelle_ar] column value.
     * 
     * @return string
     */
    public function getLibelleAr()
    {

        return $this->libelle_ar;
    }

    /**
     * Get the [adresse_ar] column value.
     * 
     * @return string
     */
    public function getAdresseAr()
    {

        return $this->adresse_ar;
    }

    /**
     * Get the [adresse_suite_ar] column value.
     * 
     * @return string
     */
    public function getAdresseSuiteAr()
    {

        return $this->adresse_suite_ar;
    }

    /**
     * Get the [ville_ar] column value.
     * 
     * @return string
     */
    public function getVilleAr()
    {

        return $this->ville_ar;
    }

    /**
     * Get the [pays_ar] column value.
     * 
     * @return string
     */
    public function getPaysAr()
    {

        return $this->pays_ar;
    }

    /**
     * Get the [libelle_fr] column value.
     * 
     * @return string
     */
    public function getLibelleFr()
    {

        return $this->libelle_fr;
    }

    /**
     * Get the [adresse_fr] column value.
     * 
     * @return string
     */
    public function getAdresseFr()
    {

        return $this->adresse_fr;
    }

    /**
     * Get the [adresse_suite_fr] column value.
     * 
     * @return string
     */
    public function getAdresseSuiteFr()
    {

        return $this->adresse_suite_fr;
    }

    /**
     * Get the [ville_fr] column value.
     * 
     * @return string
     */
    public function getVilleFr()
    {

        return $this->ville_fr;
    }

    /**
     * Get the [pays_fr] column value.
     * 
     * @return string
     */
    public function getPaysFr()
    {

        return $this->pays_fr;
    }

    /**
     * Get the [libelle_es] column value.
     * 
     * @return string
     */
    public function getLibelleEs()
    {

        return $this->libelle_es;
    }

    /**
     * Get the [adresse_es] column value.
     * 
     * @return string
     */
    public function getAdresseEs()
    {

        return $this->adresse_es;
    }

    /**
     * Get the [adresse_suite_es] column value.
     * 
     * @return string
     */
    public function getAdresseSuiteEs()
    {

        return $this->adresse_suite_es;
    }

    /**
     * Get the [ville_es] column value.
     * 
     * @return string
     */
    public function getVilleEs()
    {

        return $this->ville_es;
    }

    /**
     * Get the [pays_es] column value.
     * 
     * @return string
     */
    public function getPaysEs()
    {

        return $this->pays_es;
    }

    /**
     * Get the [libelle_en] column value.
     * 
     * @return string
     */
    public function getLibelleEn()
    {

        return $this->libelle_en;
    }

    /**
     * Get the [adresse_en] column value.
     * 
     * @return string
     */
    public function getAdresseEn()
    {

        return $this->adresse_en;
    }

    /**
     * Get the [adresse_suite_en] column value.
     * 
     * @return string
     */
    public function getAdresseSuiteEn()
    {

        return $this->adresse_suite_en;
    }

    /**
     * Get the [ville_en] column value.
     * 
     * @return string
     */
    public function getVilleEn()
    {

        return $this->ville_en;
    }

    /**
     * Get the [pays_en] column value.
     * 
     * @return string
     */
    public function getPaysEn()
    {

        return $this->pays_en;
    }

    /**
     * Get the [libelle_su] column value.
     * 
     * @return string
     */
    public function getLibelleSu()
    {

        return $this->libelle_su;
    }

    /**
     * Get the [adresse_su] column value.
     * 
     * @return string
     */
    public function getAdresseSu()
    {

        return $this->adresse_su;
    }

    /**
     * Get the [adresse_suite_su] column value.
     * 
     * @return string
     */
    public function getAdresseSuiteSu()
    {

        return $this->adresse_suite_su;
    }

    /**
     * Get the [ville_su] column value.
     * 
     * @return string
     */
    public function getVilleSu()
    {

        return $this->ville_su;
    }

    /**
     * Get the [pays_su] column value.
     * 
     * @return string
     */
    public function getPaysSu()
    {

        return $this->pays_su;
    }

    /**
     * Get the [libelle_du] column value.
     * 
     * @return string
     */
    public function getLibelleDu()
    {

        return $this->libelle_du;
    }

    /**
     * Get the [adresse_du] column value.
     * 
     * @return string
     */
    public function getAdresseDu()
    {

        return $this->adresse_du;
    }

    /**
     * Get the [adresse_suite_du] column value.
     * 
     * @return string
     */
    public function getAdresseSuiteDu()
    {

        return $this->adresse_suite_du;
    }

    /**
     * Get the [ville_du] column value.
     * 
     * @return string
     */
    public function getVilleDu()
    {

        return $this->ville_du;
    }

    /**
     * Get the [pays_du] column value.
     * 
     * @return string
     */
    public function getPaysDu()
    {

        return $this->pays_du;
    }

    /**
     * Get the [libelle_cz] column value.
     * 
     * @return string
     */
    public function getLibelleCz()
    {

        return $this->libelle_cz;
    }

    /**
     * Get the [adresse_cz] column value.
     * 
     * @return string
     */
    public function getAdresseCz()
    {

        return $this->adresse_cz;
    }

    /**
     * Get the [adresse_suite_cz] column value.
     * 
     * @return string
     */
    public function getAdresseSuiteCz()
    {

        return $this->adresse_suite_cz;
    }

    /**
     * Get the [ville_cz] column value.
     * 
     * @return string
     */
    public function getVilleCz()
    {

        return $this->ville_cz;
    }

    /**
     * Get the [pays_cz] column value.
     * 
     * @return string
     */
    public function getPaysCz()
    {

        return $this->pays_cz;
    }

    /**
     * Get the [libelle_it] column value.
     * 
     * @return string
     */
    public function getLibelleIt()
    {

        return $this->libelle_it;
    }

    /**
     * Get the [adresse_it] column value.
     * 
     * @return string
     */
    public function getAdresseIt()
    {

        return $this->adresse_it;
    }

    /**
     * Get the [adresse_suite_it] column value.
     * 
     * @return string
     */
    public function getAdresseSuiteIt()
    {

        return $this->adresse_suite_it;
    }

    /**
     * Get the [ville_it] column value.
     * 
     * @return string
     */
    public function getVilleIt()
    {

        return $this->ville_it;
    }

    /**
     * Get the [pays_it] column value.
     * 
     * @return string
     */
    public function getPaysIt()
    {

        return $this->pays_it;
    }

    /**
     * Get the [chemin_complet] column value.
     * 
     * @return string
     */
    public function getCheminComplet()
    {

        return $this->chemin_complet;
    }

    /**
     * Get the [chemin_complet_fr] column value.
     * 
     * @return string
     */
    public function getCheminCompletFr()
    {

        return $this->chemin_complet_fr;
    }

    /**
     * Get the [chemin_complet_en] column value.
     * 
     * @return string
     */
    public function getCheminCompletEn()
    {

        return $this->chemin_complet_en;
    }

    /**
     * Get the [chemin_complet_es] column value.
     * 
     * @return string
     */
    public function getCheminCompletEs()
    {

        return $this->chemin_complet_es;
    }

    /**
     * Get the [chemin_complet_su] column value.
     * 
     * @return string
     */
    public function getCheminCompletSu()
    {

        return $this->chemin_complet_su;
    }

    /**
     * Get the [chemin_complet_du] column value.
     * 
     * @return string
     */
    public function getCheminCompletDu()
    {

        return $this->chemin_complet_du;
    }

    /**
     * Get the [chemin_complet_cz] column value.
     * 
     * @return string
     */
    public function getCheminCompletCz()
    {

        return $this->chemin_complet_cz;
    }

    /**
     * Get the [chemin_complet_ar] column value.
     * 
     * @return string
     */
    public function getCheminCompletAr()
    {

        return $this->chemin_complet_ar;
    }

    /**
     * Get the [chemin_complet_it] column value.
     * 
     * @return string
     */
    public function getCheminCompletIt()
    {

        return $this->chemin_complet_it;
    }

    /**
     * Get the [nom_service_archiveur] column value.
     * 
     * @return string
     */
    public function getNomServiceArchiveur()
    {

        return $this->nom_service_archiveur;
    }

    /**
     * Get the [identifiant_service_archiveur] column value.
     * 
     * @return string
     */
    public function getIdentifiantServiceArchiveur()
    {

        return $this->identifiant_service_archiveur;
    }

    /**
     * Get the [affichage_service] column value.
     * 
     * @return string
     */
    public function getAffichageService()
    {

        return $this->affichage_service;
    }

    /**
     * Get the [activation_fuseau_horaire] column value.
     * 
     * @return string
     */
    public function getActivationFuseauHoraire()
    {

        return $this->activation_fuseau_horaire;
    }

    /**
     * Get the [decalage_horaire] column value.
     * 
     * @return string
     */
    public function getDecalageHoraire()
    {

        return $this->decalage_horaire;
    }

    /**
     * Get the [lieu_residence] column value.
     * 
     * @return string
     */
    public function getLieuResidence()
    {

        return $this->lieu_residence;
    }

    /**
     * Get the [alerte] column value.
     * 
     * @return string
     */
    public function getAlerte()
    {

        return $this->alerte;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonServicePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonServicePeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [type_service] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setTypeService($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_service !== $v) {
            $this->type_service = $v;
            $this->modifiedColumns[] = CommonServicePeer::TYPE_SERVICE;
        }


        return $this;
    } // setTypeService()

    /**
     * Set the value of [libelle] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setLibelle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle !== $v) {
            $this->libelle = $v;
            $this->modifiedColumns[] = CommonServicePeer::LIBELLE;
        }


        return $this;
    } // setLibelle()

    /**
     * Set the value of [sigle] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setSigle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sigle !== $v) {
            $this->sigle = $v;
            $this->modifiedColumns[] = CommonServicePeer::SIGLE;
        }


        return $this;
    } // setSigle()

    /**
     * Set the value of [adresse] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setAdresse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse !== $v) {
            $this->adresse = $v;
            $this->modifiedColumns[] = CommonServicePeer::ADRESSE;
        }


        return $this;
    } // setAdresse()

    /**
     * Set the value of [adresse_suite] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setAdresseSuite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_suite !== $v) {
            $this->adresse_suite = $v;
            $this->modifiedColumns[] = CommonServicePeer::ADRESSE_SUITE;
        }


        return $this;
    } // setAdresseSuite()

    /**
     * Set the value of [cp] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setCp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cp !== $v) {
            $this->cp = $v;
            $this->modifiedColumns[] = CommonServicePeer::CP;
        }


        return $this;
    } // setCp()

    /**
     * Set the value of [ville] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setVille($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ville !== $v) {
            $this->ville = $v;
            $this->modifiedColumns[] = CommonServicePeer::VILLE;
        }


        return $this;
    } // setVille()

    /**
     * Set the value of [telephone] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setTelephone($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->telephone !== $v) {
            $this->telephone = $v;
            $this->modifiedColumns[] = CommonServicePeer::TELEPHONE;
        }


        return $this;
    } // setTelephone()

    /**
     * Set the value of [fax] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setFax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fax !== $v) {
            $this->fax = $v;
            $this->modifiedColumns[] = CommonServicePeer::FAX;
        }


        return $this;
    } // setFax()

    /**
     * Set the value of [mail] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setMail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->mail !== $v) {
            $this->mail = $v;
            $this->modifiedColumns[] = CommonServicePeer::MAIL;
        }


        return $this;
    } // setMail()

    /**
     * Set the value of [pays] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setPays($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pays !== $v) {
            $this->pays = $v;
            $this->modifiedColumns[] = CommonServicePeer::PAYS;
        }


        return $this;
    } // setPays()

    /**
     * Set the value of [id_initial] column.
     * 
     * @param int $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setIdInitial($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_initial !== $v) {
            $this->id_initial = $v;
            $this->modifiedColumns[] = CommonServicePeer::ID_INITIAL;
        }


        return $this;
    } // setIdInitial()

    /**
     * Set the value of [date_creation] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setDateCreation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_creation !== $v) {
            $this->date_creation = $v;
            $this->modifiedColumns[] = CommonServicePeer::DATE_CREATION;
        }


        return $this;
    } // setDateCreation()

    /**
     * Set the value of [date_modification] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setDateModification($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_modification !== $v) {
            $this->date_modification = $v;
            $this->modifiedColumns[] = CommonServicePeer::DATE_MODIFICATION;
        }


        return $this;
    } // setDateModification()

    /**
     * Set the value of [siren] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setSiren($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->siren !== $v) {
            $this->siren = $v;
            $this->modifiedColumns[] = CommonServicePeer::SIREN;
        }


        return $this;
    } // setSiren()

    /**
     * Set the value of [complement] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setComplement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->complement !== $v) {
            $this->complement = $v;
            $this->modifiedColumns[] = CommonServicePeer::COMPLEMENT;
        }


        return $this;
    } // setComplement()

    /**
     * Set the value of [libelle_ar] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setLibelleAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_ar !== $v) {
            $this->libelle_ar = $v;
            $this->modifiedColumns[] = CommonServicePeer::LIBELLE_AR;
        }


        return $this;
    } // setLibelleAr()

    /**
     * Set the value of [adresse_ar] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setAdresseAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_ar !== $v) {
            $this->adresse_ar = $v;
            $this->modifiedColumns[] = CommonServicePeer::ADRESSE_AR;
        }


        return $this;
    } // setAdresseAr()

    /**
     * Set the value of [adresse_suite_ar] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setAdresseSuiteAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_suite_ar !== $v) {
            $this->adresse_suite_ar = $v;
            $this->modifiedColumns[] = CommonServicePeer::ADRESSE_SUITE_AR;
        }


        return $this;
    } // setAdresseSuiteAr()

    /**
     * Set the value of [ville_ar] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setVilleAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ville_ar !== $v) {
            $this->ville_ar = $v;
            $this->modifiedColumns[] = CommonServicePeer::VILLE_AR;
        }


        return $this;
    } // setVilleAr()

    /**
     * Set the value of [pays_ar] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setPaysAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pays_ar !== $v) {
            $this->pays_ar = $v;
            $this->modifiedColumns[] = CommonServicePeer::PAYS_AR;
        }


        return $this;
    } // setPaysAr()

    /**
     * Set the value of [libelle_fr] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setLibelleFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_fr !== $v) {
            $this->libelle_fr = $v;
            $this->modifiedColumns[] = CommonServicePeer::LIBELLE_FR;
        }


        return $this;
    } // setLibelleFr()

    /**
     * Set the value of [adresse_fr] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setAdresseFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_fr !== $v) {
            $this->adresse_fr = $v;
            $this->modifiedColumns[] = CommonServicePeer::ADRESSE_FR;
        }


        return $this;
    } // setAdresseFr()

    /**
     * Set the value of [adresse_suite_fr] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setAdresseSuiteFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_suite_fr !== $v) {
            $this->adresse_suite_fr = $v;
            $this->modifiedColumns[] = CommonServicePeer::ADRESSE_SUITE_FR;
        }


        return $this;
    } // setAdresseSuiteFr()

    /**
     * Set the value of [ville_fr] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setVilleFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ville_fr !== $v) {
            $this->ville_fr = $v;
            $this->modifiedColumns[] = CommonServicePeer::VILLE_FR;
        }


        return $this;
    } // setVilleFr()

    /**
     * Set the value of [pays_fr] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setPaysFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pays_fr !== $v) {
            $this->pays_fr = $v;
            $this->modifiedColumns[] = CommonServicePeer::PAYS_FR;
        }


        return $this;
    } // setPaysFr()

    /**
     * Set the value of [libelle_es] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setLibelleEs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_es !== $v) {
            $this->libelle_es = $v;
            $this->modifiedColumns[] = CommonServicePeer::LIBELLE_ES;
        }


        return $this;
    } // setLibelleEs()

    /**
     * Set the value of [adresse_es] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setAdresseEs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_es !== $v) {
            $this->adresse_es = $v;
            $this->modifiedColumns[] = CommonServicePeer::ADRESSE_ES;
        }


        return $this;
    } // setAdresseEs()

    /**
     * Set the value of [adresse_suite_es] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setAdresseSuiteEs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_suite_es !== $v) {
            $this->adresse_suite_es = $v;
            $this->modifiedColumns[] = CommonServicePeer::ADRESSE_SUITE_ES;
        }


        return $this;
    } // setAdresseSuiteEs()

    /**
     * Set the value of [ville_es] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setVilleEs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ville_es !== $v) {
            $this->ville_es = $v;
            $this->modifiedColumns[] = CommonServicePeer::VILLE_ES;
        }


        return $this;
    } // setVilleEs()

    /**
     * Set the value of [pays_es] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setPaysEs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pays_es !== $v) {
            $this->pays_es = $v;
            $this->modifiedColumns[] = CommonServicePeer::PAYS_ES;
        }


        return $this;
    } // setPaysEs()

    /**
     * Set the value of [libelle_en] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setLibelleEn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_en !== $v) {
            $this->libelle_en = $v;
            $this->modifiedColumns[] = CommonServicePeer::LIBELLE_EN;
        }


        return $this;
    } // setLibelleEn()

    /**
     * Set the value of [adresse_en] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setAdresseEn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_en !== $v) {
            $this->adresse_en = $v;
            $this->modifiedColumns[] = CommonServicePeer::ADRESSE_EN;
        }


        return $this;
    } // setAdresseEn()

    /**
     * Set the value of [adresse_suite_en] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setAdresseSuiteEn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_suite_en !== $v) {
            $this->adresse_suite_en = $v;
            $this->modifiedColumns[] = CommonServicePeer::ADRESSE_SUITE_EN;
        }


        return $this;
    } // setAdresseSuiteEn()

    /**
     * Set the value of [ville_en] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setVilleEn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ville_en !== $v) {
            $this->ville_en = $v;
            $this->modifiedColumns[] = CommonServicePeer::VILLE_EN;
        }


        return $this;
    } // setVilleEn()

    /**
     * Set the value of [pays_en] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setPaysEn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pays_en !== $v) {
            $this->pays_en = $v;
            $this->modifiedColumns[] = CommonServicePeer::PAYS_EN;
        }


        return $this;
    } // setPaysEn()

    /**
     * Set the value of [libelle_su] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setLibelleSu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_su !== $v) {
            $this->libelle_su = $v;
            $this->modifiedColumns[] = CommonServicePeer::LIBELLE_SU;
        }


        return $this;
    } // setLibelleSu()

    /**
     * Set the value of [adresse_su] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setAdresseSu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_su !== $v) {
            $this->adresse_su = $v;
            $this->modifiedColumns[] = CommonServicePeer::ADRESSE_SU;
        }


        return $this;
    } // setAdresseSu()

    /**
     * Set the value of [adresse_suite_su] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setAdresseSuiteSu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_suite_su !== $v) {
            $this->adresse_suite_su = $v;
            $this->modifiedColumns[] = CommonServicePeer::ADRESSE_SUITE_SU;
        }


        return $this;
    } // setAdresseSuiteSu()

    /**
     * Set the value of [ville_su] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setVilleSu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ville_su !== $v) {
            $this->ville_su = $v;
            $this->modifiedColumns[] = CommonServicePeer::VILLE_SU;
        }


        return $this;
    } // setVilleSu()

    /**
     * Set the value of [pays_su] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setPaysSu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pays_su !== $v) {
            $this->pays_su = $v;
            $this->modifiedColumns[] = CommonServicePeer::PAYS_SU;
        }


        return $this;
    } // setPaysSu()

    /**
     * Set the value of [libelle_du] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setLibelleDu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_du !== $v) {
            $this->libelle_du = $v;
            $this->modifiedColumns[] = CommonServicePeer::LIBELLE_DU;
        }


        return $this;
    } // setLibelleDu()

    /**
     * Set the value of [adresse_du] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setAdresseDu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_du !== $v) {
            $this->adresse_du = $v;
            $this->modifiedColumns[] = CommonServicePeer::ADRESSE_DU;
        }


        return $this;
    } // setAdresseDu()

    /**
     * Set the value of [adresse_suite_du] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setAdresseSuiteDu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_suite_du !== $v) {
            $this->adresse_suite_du = $v;
            $this->modifiedColumns[] = CommonServicePeer::ADRESSE_SUITE_DU;
        }


        return $this;
    } // setAdresseSuiteDu()

    /**
     * Set the value of [ville_du] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setVilleDu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ville_du !== $v) {
            $this->ville_du = $v;
            $this->modifiedColumns[] = CommonServicePeer::VILLE_DU;
        }


        return $this;
    } // setVilleDu()

    /**
     * Set the value of [pays_du] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setPaysDu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pays_du !== $v) {
            $this->pays_du = $v;
            $this->modifiedColumns[] = CommonServicePeer::PAYS_DU;
        }


        return $this;
    } // setPaysDu()

    /**
     * Set the value of [libelle_cz] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setLibelleCz($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_cz !== $v) {
            $this->libelle_cz = $v;
            $this->modifiedColumns[] = CommonServicePeer::LIBELLE_CZ;
        }


        return $this;
    } // setLibelleCz()

    /**
     * Set the value of [adresse_cz] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setAdresseCz($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_cz !== $v) {
            $this->adresse_cz = $v;
            $this->modifiedColumns[] = CommonServicePeer::ADRESSE_CZ;
        }


        return $this;
    } // setAdresseCz()

    /**
     * Set the value of [adresse_suite_cz] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setAdresseSuiteCz($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_suite_cz !== $v) {
            $this->adresse_suite_cz = $v;
            $this->modifiedColumns[] = CommonServicePeer::ADRESSE_SUITE_CZ;
        }


        return $this;
    } // setAdresseSuiteCz()

    /**
     * Set the value of [ville_cz] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setVilleCz($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ville_cz !== $v) {
            $this->ville_cz = $v;
            $this->modifiedColumns[] = CommonServicePeer::VILLE_CZ;
        }


        return $this;
    } // setVilleCz()

    /**
     * Set the value of [pays_cz] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setPaysCz($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pays_cz !== $v) {
            $this->pays_cz = $v;
            $this->modifiedColumns[] = CommonServicePeer::PAYS_CZ;
        }


        return $this;
    } // setPaysCz()

    /**
     * Set the value of [libelle_it] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setLibelleIt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_it !== $v) {
            $this->libelle_it = $v;
            $this->modifiedColumns[] = CommonServicePeer::LIBELLE_IT;
        }


        return $this;
    } // setLibelleIt()

    /**
     * Set the value of [adresse_it] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setAdresseIt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_it !== $v) {
            $this->adresse_it = $v;
            $this->modifiedColumns[] = CommonServicePeer::ADRESSE_IT;
        }


        return $this;
    } // setAdresseIt()

    /**
     * Set the value of [adresse_suite_it] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setAdresseSuiteIt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_suite_it !== $v) {
            $this->adresse_suite_it = $v;
            $this->modifiedColumns[] = CommonServicePeer::ADRESSE_SUITE_IT;
        }


        return $this;
    } // setAdresseSuiteIt()

    /**
     * Set the value of [ville_it] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setVilleIt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ville_it !== $v) {
            $this->ville_it = $v;
            $this->modifiedColumns[] = CommonServicePeer::VILLE_IT;
        }


        return $this;
    } // setVilleIt()

    /**
     * Set the value of [pays_it] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setPaysIt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pays_it !== $v) {
            $this->pays_it = $v;
            $this->modifiedColumns[] = CommonServicePeer::PAYS_IT;
        }


        return $this;
    } // setPaysIt()

    /**
     * Set the value of [chemin_complet] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setCheminComplet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->chemin_complet !== $v) {
            $this->chemin_complet = $v;
            $this->modifiedColumns[] = CommonServicePeer::CHEMIN_COMPLET;
        }


        return $this;
    } // setCheminComplet()

    /**
     * Set the value of [chemin_complet_fr] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setCheminCompletFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->chemin_complet_fr !== $v) {
            $this->chemin_complet_fr = $v;
            $this->modifiedColumns[] = CommonServicePeer::CHEMIN_COMPLET_FR;
        }


        return $this;
    } // setCheminCompletFr()

    /**
     * Set the value of [chemin_complet_en] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setCheminCompletEn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->chemin_complet_en !== $v) {
            $this->chemin_complet_en = $v;
            $this->modifiedColumns[] = CommonServicePeer::CHEMIN_COMPLET_EN;
        }


        return $this;
    } // setCheminCompletEn()

    /**
     * Set the value of [chemin_complet_es] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setCheminCompletEs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->chemin_complet_es !== $v) {
            $this->chemin_complet_es = $v;
            $this->modifiedColumns[] = CommonServicePeer::CHEMIN_COMPLET_ES;
        }


        return $this;
    } // setCheminCompletEs()

    /**
     * Set the value of [chemin_complet_su] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setCheminCompletSu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->chemin_complet_su !== $v) {
            $this->chemin_complet_su = $v;
            $this->modifiedColumns[] = CommonServicePeer::CHEMIN_COMPLET_SU;
        }


        return $this;
    } // setCheminCompletSu()

    /**
     * Set the value of [chemin_complet_du] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setCheminCompletDu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->chemin_complet_du !== $v) {
            $this->chemin_complet_du = $v;
            $this->modifiedColumns[] = CommonServicePeer::CHEMIN_COMPLET_DU;
        }


        return $this;
    } // setCheminCompletDu()

    /**
     * Set the value of [chemin_complet_cz] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setCheminCompletCz($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->chemin_complet_cz !== $v) {
            $this->chemin_complet_cz = $v;
            $this->modifiedColumns[] = CommonServicePeer::CHEMIN_COMPLET_CZ;
        }


        return $this;
    } // setCheminCompletCz()

    /**
     * Set the value of [chemin_complet_ar] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setCheminCompletAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->chemin_complet_ar !== $v) {
            $this->chemin_complet_ar = $v;
            $this->modifiedColumns[] = CommonServicePeer::CHEMIN_COMPLET_AR;
        }


        return $this;
    } // setCheminCompletAr()

    /**
     * Set the value of [chemin_complet_it] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setCheminCompletIt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->chemin_complet_it !== $v) {
            $this->chemin_complet_it = $v;
            $this->modifiedColumns[] = CommonServicePeer::CHEMIN_COMPLET_IT;
        }


        return $this;
    } // setCheminCompletIt()

    /**
     * Set the value of [nom_service_archiveur] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setNomServiceArchiveur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_service_archiveur !== $v) {
            $this->nom_service_archiveur = $v;
            $this->modifiedColumns[] = CommonServicePeer::NOM_SERVICE_ARCHIVEUR;
        }


        return $this;
    } // setNomServiceArchiveur()

    /**
     * Set the value of [identifiant_service_archiveur] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setIdentifiantServiceArchiveur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->identifiant_service_archiveur !== $v) {
            $this->identifiant_service_archiveur = $v;
            $this->modifiedColumns[] = CommonServicePeer::IDENTIFIANT_SERVICE_ARCHIVEUR;
        }


        return $this;
    } // setIdentifiantServiceArchiveur()

    /**
     * Set the value of [affichage_service] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setAffichageService($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->affichage_service !== $v) {
            $this->affichage_service = $v;
            $this->modifiedColumns[] = CommonServicePeer::AFFICHAGE_SERVICE;
        }


        return $this;
    } // setAffichageService()

    /**
     * Set the value of [activation_fuseau_horaire] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setActivationFuseauHoraire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->activation_fuseau_horaire !== $v) {
            $this->activation_fuseau_horaire = $v;
            $this->modifiedColumns[] = CommonServicePeer::ACTIVATION_FUSEAU_HORAIRE;
        }


        return $this;
    } // setActivationFuseauHoraire()

    /**
     * Set the value of [decalage_horaire] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setDecalageHoraire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->decalage_horaire !== $v) {
            $this->decalage_horaire = $v;
            $this->modifiedColumns[] = CommonServicePeer::DECALAGE_HORAIRE;
        }


        return $this;
    } // setDecalageHoraire()

    /**
     * Set the value of [lieu_residence] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setLieuResidence($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lieu_residence !== $v) {
            $this->lieu_residence = $v;
            $this->modifiedColumns[] = CommonServicePeer::LIEU_RESIDENCE;
        }


        return $this;
    } // setLieuResidence()

    /**
     * Set the value of [alerte] column.
     * 
     * @param string $v new value
     * @return CommonService The current object (for fluent API support)
     */
    public function setAlerte($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->alerte !== $v) {
            $this->alerte = $v;
            $this->modifiedColumns[] = CommonServicePeer::ALERTE;
        }


        return $this;
    } // setAlerte()

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

            if ($this->type_service !== '2') {
                return false;
            }

            if ($this->adresse !== '') {
                return false;
            }

            if ($this->adresse_suite !== '') {
                return false;
            }

            if ($this->cp !== '') {
                return false;
            }

            if ($this->ville !== '') {
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

            if ($this->id_initial !== 0) {
                return false;
            }

            if ($this->adresse_ar !== '') {
                return false;
            }

            if ($this->adresse_suite_ar !== '') {
                return false;
            }

            if ($this->ville_ar !== '') {
                return false;
            }

            if ($this->adresse_fr !== '') {
                return false;
            }

            if ($this->adresse_suite_fr !== '') {
                return false;
            }

            if ($this->ville_fr !== '') {
                return false;
            }

            if ($this->adresse_es !== '') {
                return false;
            }

            if ($this->adresse_suite_es !== '') {
                return false;
            }

            if ($this->ville_es !== '') {
                return false;
            }

            if ($this->adresse_en !== '') {
                return false;
            }

            if ($this->adresse_suite_en !== '') {
                return false;
            }

            if ($this->ville_en !== '') {
                return false;
            }

            if ($this->adresse_su !== '') {
                return false;
            }

            if ($this->adresse_suite_su !== '') {
                return false;
            }

            if ($this->ville_su !== '') {
                return false;
            }

            if ($this->adresse_du !== '') {
                return false;
            }

            if ($this->adresse_suite_du !== '') {
                return false;
            }

            if ($this->ville_du !== '') {
                return false;
            }

            if ($this->adresse_cz !== '') {
                return false;
            }

            if ($this->adresse_suite_cz !== '') {
                return false;
            }

            if ($this->ville_cz !== '') {
                return false;
            }

            if ($this->pays_cz !== '') {
                return false;
            }

            if ($this->adresse_it !== '') {
                return false;
            }

            if ($this->adresse_suite_it !== '') {
                return false;
            }

            if ($this->ville_it !== '') {
                return false;
            }

            if ($this->chemin_complet !== '') {
                return false;
            }

            if ($this->chemin_complet_fr !== '') {
                return false;
            }

            if ($this->chemin_complet_en !== '') {
                return false;
            }

            if ($this->chemin_complet_es !== '') {
                return false;
            }

            if ($this->chemin_complet_su !== '') {
                return false;
            }

            if ($this->chemin_complet_du !== '') {
                return false;
            }

            if ($this->chemin_complet_cz !== '') {
                return false;
            }

            if ($this->chemin_complet_ar !== '') {
                return false;
            }

            if ($this->chemin_complet_it !== '') {
                return false;
            }

            if ($this->affichage_service !== '1') {
                return false;
            }

            if ($this->activation_fuseau_horaire !== '0') {
                return false;
            }

            if ($this->alerte !== '0') {
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
            $this->type_service = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->libelle = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->sigle = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->adresse = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->adresse_suite = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->cp = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->ville = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->telephone = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->fax = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->mail = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->pays = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->id_initial = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->date_creation = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->date_modification = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->siren = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->complement = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->libelle_ar = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->adresse_ar = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->adresse_suite_ar = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->ville_ar = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->pays_ar = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->libelle_fr = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->adresse_fr = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->adresse_suite_fr = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->ville_fr = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->pays_fr = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->libelle_es = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->adresse_es = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->adresse_suite_es = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->ville_es = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->pays_es = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->libelle_en = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->adresse_en = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->adresse_suite_en = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->ville_en = ($row[$startcol + 36] !== null) ? (string) $row[$startcol + 36] : null;
            $this->pays_en = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->libelle_su = ($row[$startcol + 38] !== null) ? (string) $row[$startcol + 38] : null;
            $this->adresse_su = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->adresse_suite_su = ($row[$startcol + 40] !== null) ? (string) $row[$startcol + 40] : null;
            $this->ville_su = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->pays_su = ($row[$startcol + 42] !== null) ? (string) $row[$startcol + 42] : null;
            $this->libelle_du = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
            $this->adresse_du = ($row[$startcol + 44] !== null) ? (string) $row[$startcol + 44] : null;
            $this->adresse_suite_du = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
            $this->ville_du = ($row[$startcol + 46] !== null) ? (string) $row[$startcol + 46] : null;
            $this->pays_du = ($row[$startcol + 47] !== null) ? (string) $row[$startcol + 47] : null;
            $this->libelle_cz = ($row[$startcol + 48] !== null) ? (string) $row[$startcol + 48] : null;
            $this->adresse_cz = ($row[$startcol + 49] !== null) ? (string) $row[$startcol + 49] : null;
            $this->adresse_suite_cz = ($row[$startcol + 50] !== null) ? (string) $row[$startcol + 50] : null;
            $this->ville_cz = ($row[$startcol + 51] !== null) ? (string) $row[$startcol + 51] : null;
            $this->pays_cz = ($row[$startcol + 52] !== null) ? (string) $row[$startcol + 52] : null;
            $this->libelle_it = ($row[$startcol + 53] !== null) ? (string) $row[$startcol + 53] : null;
            $this->adresse_it = ($row[$startcol + 54] !== null) ? (string) $row[$startcol + 54] : null;
            $this->adresse_suite_it = ($row[$startcol + 55] !== null) ? (string) $row[$startcol + 55] : null;
            $this->ville_it = ($row[$startcol + 56] !== null) ? (string) $row[$startcol + 56] : null;
            $this->pays_it = ($row[$startcol + 57] !== null) ? (string) $row[$startcol + 57] : null;
            $this->chemin_complet = ($row[$startcol + 58] !== null) ? (string) $row[$startcol + 58] : null;
            $this->chemin_complet_fr = ($row[$startcol + 59] !== null) ? (string) $row[$startcol + 59] : null;
            $this->chemin_complet_en = ($row[$startcol + 60] !== null) ? (string) $row[$startcol + 60] : null;
            $this->chemin_complet_es = ($row[$startcol + 61] !== null) ? (string) $row[$startcol + 61] : null;
            $this->chemin_complet_su = ($row[$startcol + 62] !== null) ? (string) $row[$startcol + 62] : null;
            $this->chemin_complet_du = ($row[$startcol + 63] !== null) ? (string) $row[$startcol + 63] : null;
            $this->chemin_complet_cz = ($row[$startcol + 64] !== null) ? (string) $row[$startcol + 64] : null;
            $this->chemin_complet_ar = ($row[$startcol + 65] !== null) ? (string) $row[$startcol + 65] : null;
            $this->chemin_complet_it = ($row[$startcol + 66] !== null) ? (string) $row[$startcol + 66] : null;
            $this->nom_service_archiveur = ($row[$startcol + 67] !== null) ? (string) $row[$startcol + 67] : null;
            $this->identifiant_service_archiveur = ($row[$startcol + 68] !== null) ? (string) $row[$startcol + 68] : null;
            $this->affichage_service = ($row[$startcol + 69] !== null) ? (string) $row[$startcol + 69] : null;
            $this->activation_fuseau_horaire = ($row[$startcol + 70] !== null) ? (string) $row[$startcol + 70] : null;
            $this->decalage_horaire = ($row[$startcol + 71] !== null) ? (string) $row[$startcol + 71] : null;
            $this->lieu_residence = ($row[$startcol + 72] !== null) ? (string) $row[$startcol + 72] : null;
            $this->alerte = ($row[$startcol + 73] !== null) ? (string) $row[$startcol + 73] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 74; // 74 = CommonServicePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonService object", $e);
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
            $con = Propel::getConnection(CommonServicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonServicePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonServicePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonServiceQuery::create()
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
            $con = Propel::getConnection(CommonServicePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonServicePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonServicePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonServicePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonServicePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonServicePeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonServicePeer::TYPE_SERVICE)) {
            $modifiedColumns[':p' . $index++]  = '`type_service`';
        }
        if ($this->isColumnModified(CommonServicePeer::LIBELLE)) {
            $modifiedColumns[':p' . $index++]  = '`libelle`';
        }
        if ($this->isColumnModified(CommonServicePeer::SIGLE)) {
            $modifiedColumns[':p' . $index++]  = '`sigle`';
        }
        if ($this->isColumnModified(CommonServicePeer::ADRESSE)) {
            $modifiedColumns[':p' . $index++]  = '`adresse`';
        }
        if ($this->isColumnModified(CommonServicePeer::ADRESSE_SUITE)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_suite`';
        }
        if ($this->isColumnModified(CommonServicePeer::CP)) {
            $modifiedColumns[':p' . $index++]  = '`cp`';
        }
        if ($this->isColumnModified(CommonServicePeer::VILLE)) {
            $modifiedColumns[':p' . $index++]  = '`ville`';
        }
        if ($this->isColumnModified(CommonServicePeer::TELEPHONE)) {
            $modifiedColumns[':p' . $index++]  = '`telephone`';
        }
        if ($this->isColumnModified(CommonServicePeer::FAX)) {
            $modifiedColumns[':p' . $index++]  = '`fax`';
        }
        if ($this->isColumnModified(CommonServicePeer::MAIL)) {
            $modifiedColumns[':p' . $index++]  = '`mail`';
        }
        if ($this->isColumnModified(CommonServicePeer::PAYS)) {
            $modifiedColumns[':p' . $index++]  = '`pays`';
        }
        if ($this->isColumnModified(CommonServicePeer::ID_INITIAL)) {
            $modifiedColumns[':p' . $index++]  = '`id_initial`';
        }
        if ($this->isColumnModified(CommonServicePeer::DATE_CREATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_creation`';
        }
        if ($this->isColumnModified(CommonServicePeer::DATE_MODIFICATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_modification`';
        }
        if ($this->isColumnModified(CommonServicePeer::SIREN)) {
            $modifiedColumns[':p' . $index++]  = '`siren`';
        }
        if ($this->isColumnModified(CommonServicePeer::COMPLEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`complement`';
        }
        if ($this->isColumnModified(CommonServicePeer::LIBELLE_AR)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_ar`';
        }
        if ($this->isColumnModified(CommonServicePeer::ADRESSE_AR)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_ar`';
        }
        if ($this->isColumnModified(CommonServicePeer::ADRESSE_SUITE_AR)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_suite_ar`';
        }
        if ($this->isColumnModified(CommonServicePeer::VILLE_AR)) {
            $modifiedColumns[':p' . $index++]  = '`ville_ar`';
        }
        if ($this->isColumnModified(CommonServicePeer::PAYS_AR)) {
            $modifiedColumns[':p' . $index++]  = '`pays_ar`';
        }
        if ($this->isColumnModified(CommonServicePeer::LIBELLE_FR)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_fr`';
        }
        if ($this->isColumnModified(CommonServicePeer::ADRESSE_FR)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_fr`';
        }
        if ($this->isColumnModified(CommonServicePeer::ADRESSE_SUITE_FR)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_suite_fr`';
        }
        if ($this->isColumnModified(CommonServicePeer::VILLE_FR)) {
            $modifiedColumns[':p' . $index++]  = '`ville_fr`';
        }
        if ($this->isColumnModified(CommonServicePeer::PAYS_FR)) {
            $modifiedColumns[':p' . $index++]  = '`pays_fr`';
        }
        if ($this->isColumnModified(CommonServicePeer::LIBELLE_ES)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_es`';
        }
        if ($this->isColumnModified(CommonServicePeer::ADRESSE_ES)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_es`';
        }
        if ($this->isColumnModified(CommonServicePeer::ADRESSE_SUITE_ES)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_suite_es`';
        }
        if ($this->isColumnModified(CommonServicePeer::VILLE_ES)) {
            $modifiedColumns[':p' . $index++]  = '`ville_es`';
        }
        if ($this->isColumnModified(CommonServicePeer::PAYS_ES)) {
            $modifiedColumns[':p' . $index++]  = '`pays_es`';
        }
        if ($this->isColumnModified(CommonServicePeer::LIBELLE_EN)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_en`';
        }
        if ($this->isColumnModified(CommonServicePeer::ADRESSE_EN)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_en`';
        }
        if ($this->isColumnModified(CommonServicePeer::ADRESSE_SUITE_EN)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_suite_en`';
        }
        if ($this->isColumnModified(CommonServicePeer::VILLE_EN)) {
            $modifiedColumns[':p' . $index++]  = '`ville_en`';
        }
        if ($this->isColumnModified(CommonServicePeer::PAYS_EN)) {
            $modifiedColumns[':p' . $index++]  = '`pays_en`';
        }
        if ($this->isColumnModified(CommonServicePeer::LIBELLE_SU)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_su`';
        }
        if ($this->isColumnModified(CommonServicePeer::ADRESSE_SU)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_su`';
        }
        if ($this->isColumnModified(CommonServicePeer::ADRESSE_SUITE_SU)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_suite_su`';
        }
        if ($this->isColumnModified(CommonServicePeer::VILLE_SU)) {
            $modifiedColumns[':p' . $index++]  = '`ville_su`';
        }
        if ($this->isColumnModified(CommonServicePeer::PAYS_SU)) {
            $modifiedColumns[':p' . $index++]  = '`pays_su`';
        }
        if ($this->isColumnModified(CommonServicePeer::LIBELLE_DU)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_du`';
        }
        if ($this->isColumnModified(CommonServicePeer::ADRESSE_DU)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_du`';
        }
        if ($this->isColumnModified(CommonServicePeer::ADRESSE_SUITE_DU)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_suite_du`';
        }
        if ($this->isColumnModified(CommonServicePeer::VILLE_DU)) {
            $modifiedColumns[':p' . $index++]  = '`ville_du`';
        }
        if ($this->isColumnModified(CommonServicePeer::PAYS_DU)) {
            $modifiedColumns[':p' . $index++]  = '`pays_du`';
        }
        if ($this->isColumnModified(CommonServicePeer::LIBELLE_CZ)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_cz`';
        }
        if ($this->isColumnModified(CommonServicePeer::ADRESSE_CZ)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_cz`';
        }
        if ($this->isColumnModified(CommonServicePeer::ADRESSE_SUITE_CZ)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_suite_cz`';
        }
        if ($this->isColumnModified(CommonServicePeer::VILLE_CZ)) {
            $modifiedColumns[':p' . $index++]  = '`ville_cz`';
        }
        if ($this->isColumnModified(CommonServicePeer::PAYS_CZ)) {
            $modifiedColumns[':p' . $index++]  = '`pays_cz`';
        }
        if ($this->isColumnModified(CommonServicePeer::LIBELLE_IT)) {
            $modifiedColumns[':p' . $index++]  = '`libelle_it`';
        }
        if ($this->isColumnModified(CommonServicePeer::ADRESSE_IT)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_it`';
        }
        if ($this->isColumnModified(CommonServicePeer::ADRESSE_SUITE_IT)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_suite_it`';
        }
        if ($this->isColumnModified(CommonServicePeer::VILLE_IT)) {
            $modifiedColumns[':p' . $index++]  = '`ville_it`';
        }
        if ($this->isColumnModified(CommonServicePeer::PAYS_IT)) {
            $modifiedColumns[':p' . $index++]  = '`pays_it`';
        }
        if ($this->isColumnModified(CommonServicePeer::CHEMIN_COMPLET)) {
            $modifiedColumns[':p' . $index++]  = '`chemin_complet`';
        }
        if ($this->isColumnModified(CommonServicePeer::CHEMIN_COMPLET_FR)) {
            $modifiedColumns[':p' . $index++]  = '`chemin_complet_fr`';
        }
        if ($this->isColumnModified(CommonServicePeer::CHEMIN_COMPLET_EN)) {
            $modifiedColumns[':p' . $index++]  = '`chemin_complet_en`';
        }
        if ($this->isColumnModified(CommonServicePeer::CHEMIN_COMPLET_ES)) {
            $modifiedColumns[':p' . $index++]  = '`chemin_complet_es`';
        }
        if ($this->isColumnModified(CommonServicePeer::CHEMIN_COMPLET_SU)) {
            $modifiedColumns[':p' . $index++]  = '`chemin_complet_su`';
        }
        if ($this->isColumnModified(CommonServicePeer::CHEMIN_COMPLET_DU)) {
            $modifiedColumns[':p' . $index++]  = '`chemin_complet_du`';
        }
        if ($this->isColumnModified(CommonServicePeer::CHEMIN_COMPLET_CZ)) {
            $modifiedColumns[':p' . $index++]  = '`chemin_complet_cz`';
        }
        if ($this->isColumnModified(CommonServicePeer::CHEMIN_COMPLET_AR)) {
            $modifiedColumns[':p' . $index++]  = '`chemin_complet_ar`';
        }
        if ($this->isColumnModified(CommonServicePeer::CHEMIN_COMPLET_IT)) {
            $modifiedColumns[':p' . $index++]  = '`chemin_complet_it`';
        }
        if ($this->isColumnModified(CommonServicePeer::NOM_SERVICE_ARCHIVEUR)) {
            $modifiedColumns[':p' . $index++]  = '`nom_service_archiveur`';
        }
        if ($this->isColumnModified(CommonServicePeer::IDENTIFIANT_SERVICE_ARCHIVEUR)) {
            $modifiedColumns[':p' . $index++]  = '`identifiant_service_archiveur`';
        }
        if ($this->isColumnModified(CommonServicePeer::AFFICHAGE_SERVICE)) {
            $modifiedColumns[':p' . $index++]  = '`affichage_service`';
        }
        if ($this->isColumnModified(CommonServicePeer::ACTIVATION_FUSEAU_HORAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`activation_fuseau_horaire`';
        }
        if ($this->isColumnModified(CommonServicePeer::DECALAGE_HORAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`decalage_horaire`';
        }
        if ($this->isColumnModified(CommonServicePeer::LIEU_RESIDENCE)) {
            $modifiedColumns[':p' . $index++]  = '`lieu_residence`';
        }
        if ($this->isColumnModified(CommonServicePeer::ALERTE)) {
            $modifiedColumns[':p' . $index++]  = '`alerte`';
        }

        $sql = sprintf(
            'INSERT INTO `Service` (%s) VALUES (%s)',
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
                    case '`type_service`':						
                        $stmt->bindValue($identifier, $this->type_service, PDO::PARAM_STR);
                        break;
                    case '`libelle`':						
                        $stmt->bindValue($identifier, $this->libelle, PDO::PARAM_STR);
                        break;
                    case '`sigle`':						
                        $stmt->bindValue($identifier, $this->sigle, PDO::PARAM_STR);
                        break;
                    case '`adresse`':						
                        $stmt->bindValue($identifier, $this->adresse, PDO::PARAM_STR);
                        break;
                    case '`adresse_suite`':						
                        $stmt->bindValue($identifier, $this->adresse_suite, PDO::PARAM_STR);
                        break;
                    case '`cp`':						
                        $stmt->bindValue($identifier, $this->cp, PDO::PARAM_STR);
                        break;
                    case '`ville`':						
                        $stmt->bindValue($identifier, $this->ville, PDO::PARAM_STR);
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
                    case '`pays`':						
                        $stmt->bindValue($identifier, $this->pays, PDO::PARAM_STR);
                        break;
                    case '`id_initial`':						
                        $stmt->bindValue($identifier, $this->id_initial, PDO::PARAM_INT);
                        break;
                    case '`date_creation`':						
                        $stmt->bindValue($identifier, $this->date_creation, PDO::PARAM_STR);
                        break;
                    case '`date_modification`':						
                        $stmt->bindValue($identifier, $this->date_modification, PDO::PARAM_STR);
                        break;
                    case '`siren`':						
                        $stmt->bindValue($identifier, $this->siren, PDO::PARAM_STR);
                        break;
                    case '`complement`':						
                        $stmt->bindValue($identifier, $this->complement, PDO::PARAM_STR);
                        break;
                    case '`libelle_ar`':						
                        $stmt->bindValue($identifier, $this->libelle_ar, PDO::PARAM_STR);
                        break;
                    case '`adresse_ar`':						
                        $stmt->bindValue($identifier, $this->adresse_ar, PDO::PARAM_STR);
                        break;
                    case '`adresse_suite_ar`':						
                        $stmt->bindValue($identifier, $this->adresse_suite_ar, PDO::PARAM_STR);
                        break;
                    case '`ville_ar`':						
                        $stmt->bindValue($identifier, $this->ville_ar, PDO::PARAM_STR);
                        break;
                    case '`pays_ar`':						
                        $stmt->bindValue($identifier, $this->pays_ar, PDO::PARAM_STR);
                        break;
                    case '`libelle_fr`':						
                        $stmt->bindValue($identifier, $this->libelle_fr, PDO::PARAM_STR);
                        break;
                    case '`adresse_fr`':						
                        $stmt->bindValue($identifier, $this->adresse_fr, PDO::PARAM_STR);
                        break;
                    case '`adresse_suite_fr`':						
                        $stmt->bindValue($identifier, $this->adresse_suite_fr, PDO::PARAM_STR);
                        break;
                    case '`ville_fr`':						
                        $stmt->bindValue($identifier, $this->ville_fr, PDO::PARAM_STR);
                        break;
                    case '`pays_fr`':						
                        $stmt->bindValue($identifier, $this->pays_fr, PDO::PARAM_STR);
                        break;
                    case '`libelle_es`':						
                        $stmt->bindValue($identifier, $this->libelle_es, PDO::PARAM_STR);
                        break;
                    case '`adresse_es`':						
                        $stmt->bindValue($identifier, $this->adresse_es, PDO::PARAM_STR);
                        break;
                    case '`adresse_suite_es`':						
                        $stmt->bindValue($identifier, $this->adresse_suite_es, PDO::PARAM_STR);
                        break;
                    case '`ville_es`':						
                        $stmt->bindValue($identifier, $this->ville_es, PDO::PARAM_STR);
                        break;
                    case '`pays_es`':						
                        $stmt->bindValue($identifier, $this->pays_es, PDO::PARAM_STR);
                        break;
                    case '`libelle_en`':						
                        $stmt->bindValue($identifier, $this->libelle_en, PDO::PARAM_STR);
                        break;
                    case '`adresse_en`':						
                        $stmt->bindValue($identifier, $this->adresse_en, PDO::PARAM_STR);
                        break;
                    case '`adresse_suite_en`':						
                        $stmt->bindValue($identifier, $this->adresse_suite_en, PDO::PARAM_STR);
                        break;
                    case '`ville_en`':						
                        $stmt->bindValue($identifier, $this->ville_en, PDO::PARAM_STR);
                        break;
                    case '`pays_en`':						
                        $stmt->bindValue($identifier, $this->pays_en, PDO::PARAM_STR);
                        break;
                    case '`libelle_su`':						
                        $stmt->bindValue($identifier, $this->libelle_su, PDO::PARAM_STR);
                        break;
                    case '`adresse_su`':						
                        $stmt->bindValue($identifier, $this->adresse_su, PDO::PARAM_STR);
                        break;
                    case '`adresse_suite_su`':						
                        $stmt->bindValue($identifier, $this->adresse_suite_su, PDO::PARAM_STR);
                        break;
                    case '`ville_su`':						
                        $stmt->bindValue($identifier, $this->ville_su, PDO::PARAM_STR);
                        break;
                    case '`pays_su`':						
                        $stmt->bindValue($identifier, $this->pays_su, PDO::PARAM_STR);
                        break;
                    case '`libelle_du`':						
                        $stmt->bindValue($identifier, $this->libelle_du, PDO::PARAM_STR);
                        break;
                    case '`adresse_du`':						
                        $stmt->bindValue($identifier, $this->adresse_du, PDO::PARAM_STR);
                        break;
                    case '`adresse_suite_du`':						
                        $stmt->bindValue($identifier, $this->adresse_suite_du, PDO::PARAM_STR);
                        break;
                    case '`ville_du`':						
                        $stmt->bindValue($identifier, $this->ville_du, PDO::PARAM_STR);
                        break;
                    case '`pays_du`':						
                        $stmt->bindValue($identifier, $this->pays_du, PDO::PARAM_STR);
                        break;
                    case '`libelle_cz`':						
                        $stmt->bindValue($identifier, $this->libelle_cz, PDO::PARAM_STR);
                        break;
                    case '`adresse_cz`':						
                        $stmt->bindValue($identifier, $this->adresse_cz, PDO::PARAM_STR);
                        break;
                    case '`adresse_suite_cz`':						
                        $stmt->bindValue($identifier, $this->adresse_suite_cz, PDO::PARAM_STR);
                        break;
                    case '`ville_cz`':						
                        $stmt->bindValue($identifier, $this->ville_cz, PDO::PARAM_STR);
                        break;
                    case '`pays_cz`':						
                        $stmt->bindValue($identifier, $this->pays_cz, PDO::PARAM_STR);
                        break;
                    case '`libelle_it`':						
                        $stmt->bindValue($identifier, $this->libelle_it, PDO::PARAM_STR);
                        break;
                    case '`adresse_it`':						
                        $stmt->bindValue($identifier, $this->adresse_it, PDO::PARAM_STR);
                        break;
                    case '`adresse_suite_it`':						
                        $stmt->bindValue($identifier, $this->adresse_suite_it, PDO::PARAM_STR);
                        break;
                    case '`ville_it`':						
                        $stmt->bindValue($identifier, $this->ville_it, PDO::PARAM_STR);
                        break;
                    case '`pays_it`':						
                        $stmt->bindValue($identifier, $this->pays_it, PDO::PARAM_STR);
                        break;
                    case '`chemin_complet`':						
                        $stmt->bindValue($identifier, $this->chemin_complet, PDO::PARAM_STR);
                        break;
                    case '`chemin_complet_fr`':						
                        $stmt->bindValue($identifier, $this->chemin_complet_fr, PDO::PARAM_STR);
                        break;
                    case '`chemin_complet_en`':						
                        $stmt->bindValue($identifier, $this->chemin_complet_en, PDO::PARAM_STR);
                        break;
                    case '`chemin_complet_es`':						
                        $stmt->bindValue($identifier, $this->chemin_complet_es, PDO::PARAM_STR);
                        break;
                    case '`chemin_complet_su`':						
                        $stmt->bindValue($identifier, $this->chemin_complet_su, PDO::PARAM_STR);
                        break;
                    case '`chemin_complet_du`':						
                        $stmt->bindValue($identifier, $this->chemin_complet_du, PDO::PARAM_STR);
                        break;
                    case '`chemin_complet_cz`':						
                        $stmt->bindValue($identifier, $this->chemin_complet_cz, PDO::PARAM_STR);
                        break;
                    case '`chemin_complet_ar`':						
                        $stmt->bindValue($identifier, $this->chemin_complet_ar, PDO::PARAM_STR);
                        break;
                    case '`chemin_complet_it`':						
                        $stmt->bindValue($identifier, $this->chemin_complet_it, PDO::PARAM_STR);
                        break;
                    case '`nom_service_archiveur`':						
                        $stmt->bindValue($identifier, $this->nom_service_archiveur, PDO::PARAM_STR);
                        break;
                    case '`identifiant_service_archiveur`':						
                        $stmt->bindValue($identifier, $this->identifiant_service_archiveur, PDO::PARAM_STR);
                        break;
                    case '`affichage_service`':						
                        $stmt->bindValue($identifier, $this->affichage_service, PDO::PARAM_STR);
                        break;
                    case '`activation_fuseau_horaire`':						
                        $stmt->bindValue($identifier, $this->activation_fuseau_horaire, PDO::PARAM_STR);
                        break;
                    case '`decalage_horaire`':						
                        $stmt->bindValue($identifier, $this->decalage_horaire, PDO::PARAM_STR);
                        break;
                    case '`lieu_residence`':						
                        $stmt->bindValue($identifier, $this->lieu_residence, PDO::PARAM_STR);
                        break;
                    case '`alerte`':						
                        $stmt->bindValue($identifier, $this->alerte, PDO::PARAM_STR);
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


            if (($retval = CommonServicePeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonServicePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getTypeService();
                break;
            case 3:
                return $this->getLibelle();
                break;
            case 4:
                return $this->getSigle();
                break;
            case 5:
                return $this->getAdresse();
                break;
            case 6:
                return $this->getAdresseSuite();
                break;
            case 7:
                return $this->getCp();
                break;
            case 8:
                return $this->getVille();
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
                return $this->getPays();
                break;
            case 13:
                return $this->getIdInitial();
                break;
            case 14:
                return $this->getDateCreation();
                break;
            case 15:
                return $this->getDateModification();
                break;
            case 16:
                return $this->getSiren();
                break;
            case 17:
                return $this->getComplement();
                break;
            case 18:
                return $this->getLibelleAr();
                break;
            case 19:
                return $this->getAdresseAr();
                break;
            case 20:
                return $this->getAdresseSuiteAr();
                break;
            case 21:
                return $this->getVilleAr();
                break;
            case 22:
                return $this->getPaysAr();
                break;
            case 23:
                return $this->getLibelleFr();
                break;
            case 24:
                return $this->getAdresseFr();
                break;
            case 25:
                return $this->getAdresseSuiteFr();
                break;
            case 26:
                return $this->getVilleFr();
                break;
            case 27:
                return $this->getPaysFr();
                break;
            case 28:
                return $this->getLibelleEs();
                break;
            case 29:
                return $this->getAdresseEs();
                break;
            case 30:
                return $this->getAdresseSuiteEs();
                break;
            case 31:
                return $this->getVilleEs();
                break;
            case 32:
                return $this->getPaysEs();
                break;
            case 33:
                return $this->getLibelleEn();
                break;
            case 34:
                return $this->getAdresseEn();
                break;
            case 35:
                return $this->getAdresseSuiteEn();
                break;
            case 36:
                return $this->getVilleEn();
                break;
            case 37:
                return $this->getPaysEn();
                break;
            case 38:
                return $this->getLibelleSu();
                break;
            case 39:
                return $this->getAdresseSu();
                break;
            case 40:
                return $this->getAdresseSuiteSu();
                break;
            case 41:
                return $this->getVilleSu();
                break;
            case 42:
                return $this->getPaysSu();
                break;
            case 43:
                return $this->getLibelleDu();
                break;
            case 44:
                return $this->getAdresseDu();
                break;
            case 45:
                return $this->getAdresseSuiteDu();
                break;
            case 46:
                return $this->getVilleDu();
                break;
            case 47:
                return $this->getPaysDu();
                break;
            case 48:
                return $this->getLibelleCz();
                break;
            case 49:
                return $this->getAdresseCz();
                break;
            case 50:
                return $this->getAdresseSuiteCz();
                break;
            case 51:
                return $this->getVilleCz();
                break;
            case 52:
                return $this->getPaysCz();
                break;
            case 53:
                return $this->getLibelleIt();
                break;
            case 54:
                return $this->getAdresseIt();
                break;
            case 55:
                return $this->getAdresseSuiteIt();
                break;
            case 56:
                return $this->getVilleIt();
                break;
            case 57:
                return $this->getPaysIt();
                break;
            case 58:
                return $this->getCheminComplet();
                break;
            case 59:
                return $this->getCheminCompletFr();
                break;
            case 60:
                return $this->getCheminCompletEn();
                break;
            case 61:
                return $this->getCheminCompletEs();
                break;
            case 62:
                return $this->getCheminCompletSu();
                break;
            case 63:
                return $this->getCheminCompletDu();
                break;
            case 64:
                return $this->getCheminCompletCz();
                break;
            case 65:
                return $this->getCheminCompletAr();
                break;
            case 66:
                return $this->getCheminCompletIt();
                break;
            case 67:
                return $this->getNomServiceArchiveur();
                break;
            case 68:
                return $this->getIdentifiantServiceArchiveur();
                break;
            case 69:
                return $this->getAffichageService();
                break;
            case 70:
                return $this->getActivationFuseauHoraire();
                break;
            case 71:
                return $this->getDecalageHoraire();
                break;
            case 72:
                return $this->getLieuResidence();
                break;
            case 73:
                return $this->getAlerte();
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
        if (isset($alreadyDumpedObjects['CommonService'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonService'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonServicePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getTypeService(),
            $keys[3] => $this->getLibelle(),
            $keys[4] => $this->getSigle(),
            $keys[5] => $this->getAdresse(),
            $keys[6] => $this->getAdresseSuite(),
            $keys[7] => $this->getCp(),
            $keys[8] => $this->getVille(),
            $keys[9] => $this->getTelephone(),
            $keys[10] => $this->getFax(),
            $keys[11] => $this->getMail(),
            $keys[12] => $this->getPays(),
            $keys[13] => $this->getIdInitial(),
            $keys[14] => $this->getDateCreation(),
            $keys[15] => $this->getDateModification(),
            $keys[16] => $this->getSiren(),
            $keys[17] => $this->getComplement(),
            $keys[18] => $this->getLibelleAr(),
            $keys[19] => $this->getAdresseAr(),
            $keys[20] => $this->getAdresseSuiteAr(),
            $keys[21] => $this->getVilleAr(),
            $keys[22] => $this->getPaysAr(),
            $keys[23] => $this->getLibelleFr(),
            $keys[24] => $this->getAdresseFr(),
            $keys[25] => $this->getAdresseSuiteFr(),
            $keys[26] => $this->getVilleFr(),
            $keys[27] => $this->getPaysFr(),
            $keys[28] => $this->getLibelleEs(),
            $keys[29] => $this->getAdresseEs(),
            $keys[30] => $this->getAdresseSuiteEs(),
            $keys[31] => $this->getVilleEs(),
            $keys[32] => $this->getPaysEs(),
            $keys[33] => $this->getLibelleEn(),
            $keys[34] => $this->getAdresseEn(),
            $keys[35] => $this->getAdresseSuiteEn(),
            $keys[36] => $this->getVilleEn(),
            $keys[37] => $this->getPaysEn(),
            $keys[38] => $this->getLibelleSu(),
            $keys[39] => $this->getAdresseSu(),
            $keys[40] => $this->getAdresseSuiteSu(),
            $keys[41] => $this->getVilleSu(),
            $keys[42] => $this->getPaysSu(),
            $keys[43] => $this->getLibelleDu(),
            $keys[44] => $this->getAdresseDu(),
            $keys[45] => $this->getAdresseSuiteDu(),
            $keys[46] => $this->getVilleDu(),
            $keys[47] => $this->getPaysDu(),
            $keys[48] => $this->getLibelleCz(),
            $keys[49] => $this->getAdresseCz(),
            $keys[50] => $this->getAdresseSuiteCz(),
            $keys[51] => $this->getVilleCz(),
            $keys[52] => $this->getPaysCz(),
            $keys[53] => $this->getLibelleIt(),
            $keys[54] => $this->getAdresseIt(),
            $keys[55] => $this->getAdresseSuiteIt(),
            $keys[56] => $this->getVilleIt(),
            $keys[57] => $this->getPaysIt(),
            $keys[58] => $this->getCheminComplet(),
            $keys[59] => $this->getCheminCompletFr(),
            $keys[60] => $this->getCheminCompletEn(),
            $keys[61] => $this->getCheminCompletEs(),
            $keys[62] => $this->getCheminCompletSu(),
            $keys[63] => $this->getCheminCompletDu(),
            $keys[64] => $this->getCheminCompletCz(),
            $keys[65] => $this->getCheminCompletAr(),
            $keys[66] => $this->getCheminCompletIt(),
            $keys[67] => $this->getNomServiceArchiveur(),
            $keys[68] => $this->getIdentifiantServiceArchiveur(),
            $keys[69] => $this->getAffichageService(),
            $keys[70] => $this->getActivationFuseauHoraire(),
            $keys[71] => $this->getDecalageHoraire(),
            $keys[72] => $this->getLieuResidence(),
            $keys[73] => $this->getAlerte(),
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
        $pos = CommonServicePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setTypeService($value);
                break;
            case 3:
                $this->setLibelle($value);
                break;
            case 4:
                $this->setSigle($value);
                break;
            case 5:
                $this->setAdresse($value);
                break;
            case 6:
                $this->setAdresseSuite($value);
                break;
            case 7:
                $this->setCp($value);
                break;
            case 8:
                $this->setVille($value);
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
                $this->setPays($value);
                break;
            case 13:
                $this->setIdInitial($value);
                break;
            case 14:
                $this->setDateCreation($value);
                break;
            case 15:
                $this->setDateModification($value);
                break;
            case 16:
                $this->setSiren($value);
                break;
            case 17:
                $this->setComplement($value);
                break;
            case 18:
                $this->setLibelleAr($value);
                break;
            case 19:
                $this->setAdresseAr($value);
                break;
            case 20:
                $this->setAdresseSuiteAr($value);
                break;
            case 21:
                $this->setVilleAr($value);
                break;
            case 22:
                $this->setPaysAr($value);
                break;
            case 23:
                $this->setLibelleFr($value);
                break;
            case 24:
                $this->setAdresseFr($value);
                break;
            case 25:
                $this->setAdresseSuiteFr($value);
                break;
            case 26:
                $this->setVilleFr($value);
                break;
            case 27:
                $this->setPaysFr($value);
                break;
            case 28:
                $this->setLibelleEs($value);
                break;
            case 29:
                $this->setAdresseEs($value);
                break;
            case 30:
                $this->setAdresseSuiteEs($value);
                break;
            case 31:
                $this->setVilleEs($value);
                break;
            case 32:
                $this->setPaysEs($value);
                break;
            case 33:
                $this->setLibelleEn($value);
                break;
            case 34:
                $this->setAdresseEn($value);
                break;
            case 35:
                $this->setAdresseSuiteEn($value);
                break;
            case 36:
                $this->setVilleEn($value);
                break;
            case 37:
                $this->setPaysEn($value);
                break;
            case 38:
                $this->setLibelleSu($value);
                break;
            case 39:
                $this->setAdresseSu($value);
                break;
            case 40:
                $this->setAdresseSuiteSu($value);
                break;
            case 41:
                $this->setVilleSu($value);
                break;
            case 42:
                $this->setPaysSu($value);
                break;
            case 43:
                $this->setLibelleDu($value);
                break;
            case 44:
                $this->setAdresseDu($value);
                break;
            case 45:
                $this->setAdresseSuiteDu($value);
                break;
            case 46:
                $this->setVilleDu($value);
                break;
            case 47:
                $this->setPaysDu($value);
                break;
            case 48:
                $this->setLibelleCz($value);
                break;
            case 49:
                $this->setAdresseCz($value);
                break;
            case 50:
                $this->setAdresseSuiteCz($value);
                break;
            case 51:
                $this->setVilleCz($value);
                break;
            case 52:
                $this->setPaysCz($value);
                break;
            case 53:
                $this->setLibelleIt($value);
                break;
            case 54:
                $this->setAdresseIt($value);
                break;
            case 55:
                $this->setAdresseSuiteIt($value);
                break;
            case 56:
                $this->setVilleIt($value);
                break;
            case 57:
                $this->setPaysIt($value);
                break;
            case 58:
                $this->setCheminComplet($value);
                break;
            case 59:
                $this->setCheminCompletFr($value);
                break;
            case 60:
                $this->setCheminCompletEn($value);
                break;
            case 61:
                $this->setCheminCompletEs($value);
                break;
            case 62:
                $this->setCheminCompletSu($value);
                break;
            case 63:
                $this->setCheminCompletDu($value);
                break;
            case 64:
                $this->setCheminCompletCz($value);
                break;
            case 65:
                $this->setCheminCompletAr($value);
                break;
            case 66:
                $this->setCheminCompletIt($value);
                break;
            case 67:
                $this->setNomServiceArchiveur($value);
                break;
            case 68:
                $this->setIdentifiantServiceArchiveur($value);
                break;
            case 69:
                $this->setAffichageService($value);
                break;
            case 70:
                $this->setActivationFuseauHoraire($value);
                break;
            case 71:
                $this->setDecalageHoraire($value);
                break;
            case 72:
                $this->setLieuResidence($value);
                break;
            case 73:
                $this->setAlerte($value);
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
        $keys = CommonServicePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setTypeService($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setLibelle($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setSigle($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setAdresse($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setAdresseSuite($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setCp($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setVille($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setTelephone($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setFax($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setMail($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setPays($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setIdInitial($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setDateCreation($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setDateModification($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setSiren($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setComplement($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setLibelleAr($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setAdresseAr($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setAdresseSuiteAr($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setVilleAr($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setPaysAr($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setLibelleFr($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setAdresseFr($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setAdresseSuiteFr($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setVilleFr($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setPaysFr($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setLibelleEs($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setAdresseEs($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setAdresseSuiteEs($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setVilleEs($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setPaysEs($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setLibelleEn($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setAdresseEn($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setAdresseSuiteEn($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setVilleEn($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setPaysEn($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setLibelleSu($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setAdresseSu($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setAdresseSuiteSu($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setVilleSu($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setPaysSu($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setLibelleDu($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setAdresseDu($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setAdresseSuiteDu($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setVilleDu($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setPaysDu($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setLibelleCz($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setAdresseCz($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setAdresseSuiteCz($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setVilleCz($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setPaysCz($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setLibelleIt($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setAdresseIt($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setAdresseSuiteIt($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setVilleIt($arr[$keys[56]]);
        if (array_key_exists($keys[57], $arr)) $this->setPaysIt($arr[$keys[57]]);
        if (array_key_exists($keys[58], $arr)) $this->setCheminComplet($arr[$keys[58]]);
        if (array_key_exists($keys[59], $arr)) $this->setCheminCompletFr($arr[$keys[59]]);
        if (array_key_exists($keys[60], $arr)) $this->setCheminCompletEn($arr[$keys[60]]);
        if (array_key_exists($keys[61], $arr)) $this->setCheminCompletEs($arr[$keys[61]]);
        if (array_key_exists($keys[62], $arr)) $this->setCheminCompletSu($arr[$keys[62]]);
        if (array_key_exists($keys[63], $arr)) $this->setCheminCompletDu($arr[$keys[63]]);
        if (array_key_exists($keys[64], $arr)) $this->setCheminCompletCz($arr[$keys[64]]);
        if (array_key_exists($keys[65], $arr)) $this->setCheminCompletAr($arr[$keys[65]]);
        if (array_key_exists($keys[66], $arr)) $this->setCheminCompletIt($arr[$keys[66]]);
        if (array_key_exists($keys[67], $arr)) $this->setNomServiceArchiveur($arr[$keys[67]]);
        if (array_key_exists($keys[68], $arr)) $this->setIdentifiantServiceArchiveur($arr[$keys[68]]);
        if (array_key_exists($keys[69], $arr)) $this->setAffichageService($arr[$keys[69]]);
        if (array_key_exists($keys[70], $arr)) $this->setActivationFuseauHoraire($arr[$keys[70]]);
        if (array_key_exists($keys[71], $arr)) $this->setDecalageHoraire($arr[$keys[71]]);
        if (array_key_exists($keys[72], $arr)) $this->setLieuResidence($arr[$keys[72]]);
        if (array_key_exists($keys[73], $arr)) $this->setAlerte($arr[$keys[73]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonServicePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonServicePeer::ID)) $criteria->add(CommonServicePeer::ID, $this->id);
        if ($this->isColumnModified(CommonServicePeer::ORGANISME)) $criteria->add(CommonServicePeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonServicePeer::TYPE_SERVICE)) $criteria->add(CommonServicePeer::TYPE_SERVICE, $this->type_service);
        if ($this->isColumnModified(CommonServicePeer::LIBELLE)) $criteria->add(CommonServicePeer::LIBELLE, $this->libelle);
        if ($this->isColumnModified(CommonServicePeer::SIGLE)) $criteria->add(CommonServicePeer::SIGLE, $this->sigle);
        if ($this->isColumnModified(CommonServicePeer::ADRESSE)) $criteria->add(CommonServicePeer::ADRESSE, $this->adresse);
        if ($this->isColumnModified(CommonServicePeer::ADRESSE_SUITE)) $criteria->add(CommonServicePeer::ADRESSE_SUITE, $this->adresse_suite);
        if ($this->isColumnModified(CommonServicePeer::CP)) $criteria->add(CommonServicePeer::CP, $this->cp);
        if ($this->isColumnModified(CommonServicePeer::VILLE)) $criteria->add(CommonServicePeer::VILLE, $this->ville);
        if ($this->isColumnModified(CommonServicePeer::TELEPHONE)) $criteria->add(CommonServicePeer::TELEPHONE, $this->telephone);
        if ($this->isColumnModified(CommonServicePeer::FAX)) $criteria->add(CommonServicePeer::FAX, $this->fax);
        if ($this->isColumnModified(CommonServicePeer::MAIL)) $criteria->add(CommonServicePeer::MAIL, $this->mail);
        if ($this->isColumnModified(CommonServicePeer::PAYS)) $criteria->add(CommonServicePeer::PAYS, $this->pays);
        if ($this->isColumnModified(CommonServicePeer::ID_INITIAL)) $criteria->add(CommonServicePeer::ID_INITIAL, $this->id_initial);
        if ($this->isColumnModified(CommonServicePeer::DATE_CREATION)) $criteria->add(CommonServicePeer::DATE_CREATION, $this->date_creation);
        if ($this->isColumnModified(CommonServicePeer::DATE_MODIFICATION)) $criteria->add(CommonServicePeer::DATE_MODIFICATION, $this->date_modification);
        if ($this->isColumnModified(CommonServicePeer::SIREN)) $criteria->add(CommonServicePeer::SIREN, $this->siren);
        if ($this->isColumnModified(CommonServicePeer::COMPLEMENT)) $criteria->add(CommonServicePeer::COMPLEMENT, $this->complement);
        if ($this->isColumnModified(CommonServicePeer::LIBELLE_AR)) $criteria->add(CommonServicePeer::LIBELLE_AR, $this->libelle_ar);
        if ($this->isColumnModified(CommonServicePeer::ADRESSE_AR)) $criteria->add(CommonServicePeer::ADRESSE_AR, $this->adresse_ar);
        if ($this->isColumnModified(CommonServicePeer::ADRESSE_SUITE_AR)) $criteria->add(CommonServicePeer::ADRESSE_SUITE_AR, $this->adresse_suite_ar);
        if ($this->isColumnModified(CommonServicePeer::VILLE_AR)) $criteria->add(CommonServicePeer::VILLE_AR, $this->ville_ar);
        if ($this->isColumnModified(CommonServicePeer::PAYS_AR)) $criteria->add(CommonServicePeer::PAYS_AR, $this->pays_ar);
        if ($this->isColumnModified(CommonServicePeer::LIBELLE_FR)) $criteria->add(CommonServicePeer::LIBELLE_FR, $this->libelle_fr);
        if ($this->isColumnModified(CommonServicePeer::ADRESSE_FR)) $criteria->add(CommonServicePeer::ADRESSE_FR, $this->adresse_fr);
        if ($this->isColumnModified(CommonServicePeer::ADRESSE_SUITE_FR)) $criteria->add(CommonServicePeer::ADRESSE_SUITE_FR, $this->adresse_suite_fr);
        if ($this->isColumnModified(CommonServicePeer::VILLE_FR)) $criteria->add(CommonServicePeer::VILLE_FR, $this->ville_fr);
        if ($this->isColumnModified(CommonServicePeer::PAYS_FR)) $criteria->add(CommonServicePeer::PAYS_FR, $this->pays_fr);
        if ($this->isColumnModified(CommonServicePeer::LIBELLE_ES)) $criteria->add(CommonServicePeer::LIBELLE_ES, $this->libelle_es);
        if ($this->isColumnModified(CommonServicePeer::ADRESSE_ES)) $criteria->add(CommonServicePeer::ADRESSE_ES, $this->adresse_es);
        if ($this->isColumnModified(CommonServicePeer::ADRESSE_SUITE_ES)) $criteria->add(CommonServicePeer::ADRESSE_SUITE_ES, $this->adresse_suite_es);
        if ($this->isColumnModified(CommonServicePeer::VILLE_ES)) $criteria->add(CommonServicePeer::VILLE_ES, $this->ville_es);
        if ($this->isColumnModified(CommonServicePeer::PAYS_ES)) $criteria->add(CommonServicePeer::PAYS_ES, $this->pays_es);
        if ($this->isColumnModified(CommonServicePeer::LIBELLE_EN)) $criteria->add(CommonServicePeer::LIBELLE_EN, $this->libelle_en);
        if ($this->isColumnModified(CommonServicePeer::ADRESSE_EN)) $criteria->add(CommonServicePeer::ADRESSE_EN, $this->adresse_en);
        if ($this->isColumnModified(CommonServicePeer::ADRESSE_SUITE_EN)) $criteria->add(CommonServicePeer::ADRESSE_SUITE_EN, $this->adresse_suite_en);
        if ($this->isColumnModified(CommonServicePeer::VILLE_EN)) $criteria->add(CommonServicePeer::VILLE_EN, $this->ville_en);
        if ($this->isColumnModified(CommonServicePeer::PAYS_EN)) $criteria->add(CommonServicePeer::PAYS_EN, $this->pays_en);
        if ($this->isColumnModified(CommonServicePeer::LIBELLE_SU)) $criteria->add(CommonServicePeer::LIBELLE_SU, $this->libelle_su);
        if ($this->isColumnModified(CommonServicePeer::ADRESSE_SU)) $criteria->add(CommonServicePeer::ADRESSE_SU, $this->adresse_su);
        if ($this->isColumnModified(CommonServicePeer::ADRESSE_SUITE_SU)) $criteria->add(CommonServicePeer::ADRESSE_SUITE_SU, $this->adresse_suite_su);
        if ($this->isColumnModified(CommonServicePeer::VILLE_SU)) $criteria->add(CommonServicePeer::VILLE_SU, $this->ville_su);
        if ($this->isColumnModified(CommonServicePeer::PAYS_SU)) $criteria->add(CommonServicePeer::PAYS_SU, $this->pays_su);
        if ($this->isColumnModified(CommonServicePeer::LIBELLE_DU)) $criteria->add(CommonServicePeer::LIBELLE_DU, $this->libelle_du);
        if ($this->isColumnModified(CommonServicePeer::ADRESSE_DU)) $criteria->add(CommonServicePeer::ADRESSE_DU, $this->adresse_du);
        if ($this->isColumnModified(CommonServicePeer::ADRESSE_SUITE_DU)) $criteria->add(CommonServicePeer::ADRESSE_SUITE_DU, $this->adresse_suite_du);
        if ($this->isColumnModified(CommonServicePeer::VILLE_DU)) $criteria->add(CommonServicePeer::VILLE_DU, $this->ville_du);
        if ($this->isColumnModified(CommonServicePeer::PAYS_DU)) $criteria->add(CommonServicePeer::PAYS_DU, $this->pays_du);
        if ($this->isColumnModified(CommonServicePeer::LIBELLE_CZ)) $criteria->add(CommonServicePeer::LIBELLE_CZ, $this->libelle_cz);
        if ($this->isColumnModified(CommonServicePeer::ADRESSE_CZ)) $criteria->add(CommonServicePeer::ADRESSE_CZ, $this->adresse_cz);
        if ($this->isColumnModified(CommonServicePeer::ADRESSE_SUITE_CZ)) $criteria->add(CommonServicePeer::ADRESSE_SUITE_CZ, $this->adresse_suite_cz);
        if ($this->isColumnModified(CommonServicePeer::VILLE_CZ)) $criteria->add(CommonServicePeer::VILLE_CZ, $this->ville_cz);
        if ($this->isColumnModified(CommonServicePeer::PAYS_CZ)) $criteria->add(CommonServicePeer::PAYS_CZ, $this->pays_cz);
        if ($this->isColumnModified(CommonServicePeer::LIBELLE_IT)) $criteria->add(CommonServicePeer::LIBELLE_IT, $this->libelle_it);
        if ($this->isColumnModified(CommonServicePeer::ADRESSE_IT)) $criteria->add(CommonServicePeer::ADRESSE_IT, $this->adresse_it);
        if ($this->isColumnModified(CommonServicePeer::ADRESSE_SUITE_IT)) $criteria->add(CommonServicePeer::ADRESSE_SUITE_IT, $this->adresse_suite_it);
        if ($this->isColumnModified(CommonServicePeer::VILLE_IT)) $criteria->add(CommonServicePeer::VILLE_IT, $this->ville_it);
        if ($this->isColumnModified(CommonServicePeer::PAYS_IT)) $criteria->add(CommonServicePeer::PAYS_IT, $this->pays_it);
        if ($this->isColumnModified(CommonServicePeer::CHEMIN_COMPLET)) $criteria->add(CommonServicePeer::CHEMIN_COMPLET, $this->chemin_complet);
        if ($this->isColumnModified(CommonServicePeer::CHEMIN_COMPLET_FR)) $criteria->add(CommonServicePeer::CHEMIN_COMPLET_FR, $this->chemin_complet_fr);
        if ($this->isColumnModified(CommonServicePeer::CHEMIN_COMPLET_EN)) $criteria->add(CommonServicePeer::CHEMIN_COMPLET_EN, $this->chemin_complet_en);
        if ($this->isColumnModified(CommonServicePeer::CHEMIN_COMPLET_ES)) $criteria->add(CommonServicePeer::CHEMIN_COMPLET_ES, $this->chemin_complet_es);
        if ($this->isColumnModified(CommonServicePeer::CHEMIN_COMPLET_SU)) $criteria->add(CommonServicePeer::CHEMIN_COMPLET_SU, $this->chemin_complet_su);
        if ($this->isColumnModified(CommonServicePeer::CHEMIN_COMPLET_DU)) $criteria->add(CommonServicePeer::CHEMIN_COMPLET_DU, $this->chemin_complet_du);
        if ($this->isColumnModified(CommonServicePeer::CHEMIN_COMPLET_CZ)) $criteria->add(CommonServicePeer::CHEMIN_COMPLET_CZ, $this->chemin_complet_cz);
        if ($this->isColumnModified(CommonServicePeer::CHEMIN_COMPLET_AR)) $criteria->add(CommonServicePeer::CHEMIN_COMPLET_AR, $this->chemin_complet_ar);
        if ($this->isColumnModified(CommonServicePeer::CHEMIN_COMPLET_IT)) $criteria->add(CommonServicePeer::CHEMIN_COMPLET_IT, $this->chemin_complet_it);
        if ($this->isColumnModified(CommonServicePeer::NOM_SERVICE_ARCHIVEUR)) $criteria->add(CommonServicePeer::NOM_SERVICE_ARCHIVEUR, $this->nom_service_archiveur);
        if ($this->isColumnModified(CommonServicePeer::IDENTIFIANT_SERVICE_ARCHIVEUR)) $criteria->add(CommonServicePeer::IDENTIFIANT_SERVICE_ARCHIVEUR, $this->identifiant_service_archiveur);
        if ($this->isColumnModified(CommonServicePeer::AFFICHAGE_SERVICE)) $criteria->add(CommonServicePeer::AFFICHAGE_SERVICE, $this->affichage_service);
        if ($this->isColumnModified(CommonServicePeer::ACTIVATION_FUSEAU_HORAIRE)) $criteria->add(CommonServicePeer::ACTIVATION_FUSEAU_HORAIRE, $this->activation_fuseau_horaire);
        if ($this->isColumnModified(CommonServicePeer::DECALAGE_HORAIRE)) $criteria->add(CommonServicePeer::DECALAGE_HORAIRE, $this->decalage_horaire);
        if ($this->isColumnModified(CommonServicePeer::LIEU_RESIDENCE)) $criteria->add(CommonServicePeer::LIEU_RESIDENCE, $this->lieu_residence);
        if ($this->isColumnModified(CommonServicePeer::ALERTE)) $criteria->add(CommonServicePeer::ALERTE, $this->alerte);

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
        $criteria = new Criteria(CommonServicePeer::DATABASE_NAME);
        $criteria->add(CommonServicePeer::ID, $this->id);
        $criteria->add(CommonServicePeer::ORGANISME, $this->organisme);

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
     * @param object $copyObj An object of CommonService (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setTypeService($this->getTypeService());
        $copyObj->setLibelle($this->getLibelle());
        $copyObj->setSigle($this->getSigle());
        $copyObj->setAdresse($this->getAdresse());
        $copyObj->setAdresseSuite($this->getAdresseSuite());
        $copyObj->setCp($this->getCp());
        $copyObj->setVille($this->getVille());
        $copyObj->setTelephone($this->getTelephone());
        $copyObj->setFax($this->getFax());
        $copyObj->setMail($this->getMail());
        $copyObj->setPays($this->getPays());
        $copyObj->setIdInitial($this->getIdInitial());
        $copyObj->setDateCreation($this->getDateCreation());
        $copyObj->setDateModification($this->getDateModification());
        $copyObj->setSiren($this->getSiren());
        $copyObj->setComplement($this->getComplement());
        $copyObj->setLibelleAr($this->getLibelleAr());
        $copyObj->setAdresseAr($this->getAdresseAr());
        $copyObj->setAdresseSuiteAr($this->getAdresseSuiteAr());
        $copyObj->setVilleAr($this->getVilleAr());
        $copyObj->setPaysAr($this->getPaysAr());
        $copyObj->setLibelleFr($this->getLibelleFr());
        $copyObj->setAdresseFr($this->getAdresseFr());
        $copyObj->setAdresseSuiteFr($this->getAdresseSuiteFr());
        $copyObj->setVilleFr($this->getVilleFr());
        $copyObj->setPaysFr($this->getPaysFr());
        $copyObj->setLibelleEs($this->getLibelleEs());
        $copyObj->setAdresseEs($this->getAdresseEs());
        $copyObj->setAdresseSuiteEs($this->getAdresseSuiteEs());
        $copyObj->setVilleEs($this->getVilleEs());
        $copyObj->setPaysEs($this->getPaysEs());
        $copyObj->setLibelleEn($this->getLibelleEn());
        $copyObj->setAdresseEn($this->getAdresseEn());
        $copyObj->setAdresseSuiteEn($this->getAdresseSuiteEn());
        $copyObj->setVilleEn($this->getVilleEn());
        $copyObj->setPaysEn($this->getPaysEn());
        $copyObj->setLibelleSu($this->getLibelleSu());
        $copyObj->setAdresseSu($this->getAdresseSu());
        $copyObj->setAdresseSuiteSu($this->getAdresseSuiteSu());
        $copyObj->setVilleSu($this->getVilleSu());
        $copyObj->setPaysSu($this->getPaysSu());
        $copyObj->setLibelleDu($this->getLibelleDu());
        $copyObj->setAdresseDu($this->getAdresseDu());
        $copyObj->setAdresseSuiteDu($this->getAdresseSuiteDu());
        $copyObj->setVilleDu($this->getVilleDu());
        $copyObj->setPaysDu($this->getPaysDu());
        $copyObj->setLibelleCz($this->getLibelleCz());
        $copyObj->setAdresseCz($this->getAdresseCz());
        $copyObj->setAdresseSuiteCz($this->getAdresseSuiteCz());
        $copyObj->setVilleCz($this->getVilleCz());
        $copyObj->setPaysCz($this->getPaysCz());
        $copyObj->setLibelleIt($this->getLibelleIt());
        $copyObj->setAdresseIt($this->getAdresseIt());
        $copyObj->setAdresseSuiteIt($this->getAdresseSuiteIt());
        $copyObj->setVilleIt($this->getVilleIt());
        $copyObj->setPaysIt($this->getPaysIt());
        $copyObj->setCheminComplet($this->getCheminComplet());
        $copyObj->setCheminCompletFr($this->getCheminCompletFr());
        $copyObj->setCheminCompletEn($this->getCheminCompletEn());
        $copyObj->setCheminCompletEs($this->getCheminCompletEs());
        $copyObj->setCheminCompletSu($this->getCheminCompletSu());
        $copyObj->setCheminCompletDu($this->getCheminCompletDu());
        $copyObj->setCheminCompletCz($this->getCheminCompletCz());
        $copyObj->setCheminCompletAr($this->getCheminCompletAr());
        $copyObj->setCheminCompletIt($this->getCheminCompletIt());
        $copyObj->setNomServiceArchiveur($this->getNomServiceArchiveur());
        $copyObj->setIdentifiantServiceArchiveur($this->getIdentifiantServiceArchiveur());
        $copyObj->setAffichageService($this->getAffichageService());
        $copyObj->setActivationFuseauHoraire($this->getActivationFuseauHoraire());
        $copyObj->setDecalageHoraire($this->getDecalageHoraire());
        $copyObj->setLieuResidence($this->getLieuResidence());
        $copyObj->setAlerte($this->getAlerte());
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
     * @return CommonService Clone of current object.
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
     * @return CommonServicePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonServicePeer();
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
        $this->type_service = null;
        $this->libelle = null;
        $this->sigle = null;
        $this->adresse = null;
        $this->adresse_suite = null;
        $this->cp = null;
        $this->ville = null;
        $this->telephone = null;
        $this->fax = null;
        $this->mail = null;
        $this->pays = null;
        $this->id_initial = null;
        $this->date_creation = null;
        $this->date_modification = null;
        $this->siren = null;
        $this->complement = null;
        $this->libelle_ar = null;
        $this->adresse_ar = null;
        $this->adresse_suite_ar = null;
        $this->ville_ar = null;
        $this->pays_ar = null;
        $this->libelle_fr = null;
        $this->adresse_fr = null;
        $this->adresse_suite_fr = null;
        $this->ville_fr = null;
        $this->pays_fr = null;
        $this->libelle_es = null;
        $this->adresse_es = null;
        $this->adresse_suite_es = null;
        $this->ville_es = null;
        $this->pays_es = null;
        $this->libelle_en = null;
        $this->adresse_en = null;
        $this->adresse_suite_en = null;
        $this->ville_en = null;
        $this->pays_en = null;
        $this->libelle_su = null;
        $this->adresse_su = null;
        $this->adresse_suite_su = null;
        $this->ville_su = null;
        $this->pays_su = null;
        $this->libelle_du = null;
        $this->adresse_du = null;
        $this->adresse_suite_du = null;
        $this->ville_du = null;
        $this->pays_du = null;
        $this->libelle_cz = null;
        $this->adresse_cz = null;
        $this->adresse_suite_cz = null;
        $this->ville_cz = null;
        $this->pays_cz = null;
        $this->libelle_it = null;
        $this->adresse_it = null;
        $this->adresse_suite_it = null;
        $this->ville_it = null;
        $this->pays_it = null;
        $this->chemin_complet = null;
        $this->chemin_complet_fr = null;
        $this->chemin_complet_en = null;
        $this->chemin_complet_es = null;
        $this->chemin_complet_su = null;
        $this->chemin_complet_du = null;
        $this->chemin_complet_cz = null;
        $this->chemin_complet_ar = null;
        $this->chemin_complet_it = null;
        $this->nom_service_archiveur = null;
        $this->identifiant_service_archiveur = null;
        $this->affichage_service = null;
        $this->activation_fuseau_horaire = null;
        $this->decalage_horaire = null;
        $this->lieu_residence = null;
        $this->alerte = null;
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
        return (string) $this->exportTo(CommonServicePeer::DEFAULT_STRING_FORMAT);
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
