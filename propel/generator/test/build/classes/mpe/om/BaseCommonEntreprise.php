<?php


/**
 * Base class that represents a row from the 'entreprise' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonEntreprise extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonEntreprisePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonEntreprisePeer
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
     * The value for the admin_id field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $admin_id;

    /**
     * The value for the siren field.
     * @var        string
     */
    protected $siren;

    /**
     * The value for the repmetiers field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $repmetiers;

    /**
     * The value for the nom field.
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
     * The value for the codepostal field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $codepostal;

    /**
     * The value for the villeadresse field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $villeadresse;

    /**
     * The value for the paysadresse field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $paysadresse;

    /**
     * The value for the email field.
     * @var        string
     */
    protected $email;

    /**
     * The value for the taille field.
     * @var        int
     */
    protected $taille;

    /**
     * The value for the formejuridique field.
     * @var        string
     */
    protected $formejuridique;

    /**
     * The value for the villeenregistrement field.
     * @var        string
     */
    protected $villeenregistrement;

    /**
     * The value for the motifnonindnum field.
     * @var        int
     */
    protected $motifnonindnum;

    /**
     * The value for the ordreprofouagrement field.
     * @var        string
     */
    protected $ordreprofouagrement;

    /**
     * The value for the dateconstsociete field.
     * @var        string
     */
    protected $dateconstsociete;

    /**
     * The value for the nomorginscription field.
     * @var        string
     */
    protected $nomorginscription;

    /**
     * The value for the adrorginscription field.
     * @var        string
     */
    protected $adrorginscription;

    /**
     * The value for the dateconstassoc field.
     * @var        string
     */
    protected $dateconstassoc;

    /**
     * The value for the dateconstassocetrangere field.
     * @var        string
     */
    protected $dateconstassocetrangere;

    /**
     * The value for the nompersonnepublique field.
     * @var        string
     */
    protected $nompersonnepublique;

    /**
     * The value for the nationalite field.
     * @var        string
     */
    protected $nationalite;

    /**
     * The value for the redressement field.
     * @var        int
     */
    protected $redressement;

    /**
     * The value for the paysenregistrement field.
     * @var        string
     */
    protected $paysenregistrement;

    /**
     * The value for the sirenetranger field.
     * @var        string
     */
    protected $sirenetranger;

    /**
     * The value for the numassoetrangere field.
     * @var        string
     */
    protected $numassoetrangere;

    /**
     * The value for the debutexerciceglob1 field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $debutexerciceglob1;

    /**
     * The value for the finexerciceglob1 field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $finexerciceglob1;

    /**
     * The value for the debutexerciceglob2 field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $debutexerciceglob2;

    /**
     * The value for the finexerciceglob2 field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $finexerciceglob2;

    /**
     * The value for the debutexerciceglob3 field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $debutexerciceglob3;

    /**
     * The value for the finexerciceglob3 field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $finexerciceglob3;

    /**
     * The value for the ventesglob1 field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $ventesglob1;

    /**
     * The value for the ventesglob2 field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $ventesglob2;

    /**
     * The value for the ventesglob3 field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $ventesglob3;

    /**
     * The value for the biensglob1 field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $biensglob1;

    /**
     * The value for the biensglob2 field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $biensglob2;

    /**
     * The value for the biensglob3 field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $biensglob3;

    /**
     * The value for the servicesglob1 field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $servicesglob1;

    /**
     * The value for the servicesglob2 field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $servicesglob2;

    /**
     * The value for the servicesglob3 field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $servicesglob3;

    /**
     * The value for the totalglob1 field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $totalglob1;

    /**
     * The value for the totalglob2 field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $totalglob2;

    /**
     * The value for the totalglob3 field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $totalglob3;

    /**
     * The value for the codeape field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $codeape;

    /**
     * The value for the origine_compte field.
     * @var        string
     */
    protected $origine_compte;

    /**
     * The value for the telephone field.
     * @var        string
     */
    protected $telephone;

    /**
     * The value for the fax field.
     * @var        string
     */
    protected $fax;

    /**
     * The value for the site_internet field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $site_internet;

    /**
     * The value for the description_activite field.
     * @var        string
     */
    protected $description_activite;

    /**
     * The value for the activite_domaine_defense field.
     * @var        string
     */
    protected $activite_domaine_defense;

    /**
     * The value for the annee_cloture_exercice1 field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $annee_cloture_exercice1;

    /**
     * The value for the annee_cloture_exercice2 field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $annee_cloture_exercice2;

    /**
     * The value for the annee_cloture_exercice3 field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $annee_cloture_exercice3;

    /**
     * The value for the effectif_moyen1 field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $effectif_moyen1;

    /**
     * The value for the effectif_moyen2 field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $effectif_moyen2;

    /**
     * The value for the effectif_moyen3 field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $effectif_moyen3;

    /**
     * The value for the effectif_encadrement1 field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $effectif_encadrement1;

    /**
     * The value for the effectif_encadrement2 field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $effectif_encadrement2;

    /**
     * The value for the effectif_encadrement3 field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $effectif_encadrement3;

    /**
     * The value for the pme1 field.
     * @var        string
     */
    protected $pme1;

    /**
     * The value for the pme2 field.
     * @var        string
     */
    protected $pme2;

    /**
     * The value for the pme3 field.
     * @var        string
     */
    protected $pme3;

    /**
     * The value for the adresse2 field.
     * @var        string
     */
    protected $adresse2;

    /**
     * The value for the nicsiege field.
     * @var        string
     */
    protected $nicsiege;

    /**
     * The value for the acronyme_pays field.
     * @var        string
     */
    protected $acronyme_pays;

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
     * The value for the region field.
     * @var        string
     */
    protected $region;

    /**
     * The value for the province field.
     * @var        string
     */
    protected $province;

    /**
     * The value for the telephone2 field.
     * @var        string
     */
    protected $telephone2;

    /**
     * The value for the telephone3 field.
     * @var        string
     */
    protected $telephone3;

    /**
     * The value for the cnss field.
     * @var        string
     */
    protected $cnss;

    /**
     * The value for the rc_num field.
     * @var        string
     */
    protected $rc_num;

    /**
     * The value for the rc_ville field.
     * @var        string
     */
    protected $rc_ville;

    /**
     * The value for the domaines_activites field.
     * @var        string
     */
    protected $domaines_activites;

    /**
     * The value for the num_tax field.
     * @var        string
     */
    protected $num_tax;

    /**
     * The value for the documents_commerciaux field.
     * @var        int
     */
    protected $documents_commerciaux;

    /**
     * The value for the intitule_documents_commerciaux field.
     * @var        string
     */
    protected $intitule_documents_commerciaux;

    /**
     * The value for the taille_documents_commerciaux field.
     * @var        string
     */
    protected $taille_documents_commerciaux;

    /**
     * The value for the qualification field.
     * @var        string
     */
    protected $qualification;

    /**
     * The value for the agrement field.
     * @var        string
     */
    protected $agrement;

    /**
     * The value for the moyens_technique field.
     * @var        string
     */
    protected $moyens_technique;

    /**
     * The value for the moyens_humains field.
     * @var        string
     */
    protected $moyens_humains;

    /**
     * The value for the compte_actif field.
     * Note: this column has a database default value of: 1
     * @var        int
     */
    protected $compte_actif;

    /**
     * The value for the capital_social field.
     * @var        string
     */
    protected $capital_social;

    /**
     * The value for the ifu field.
     * @var        string
     */
    protected $ifu;

    /**
     * The value for the id_agent_createur field.
     * @var        int
     */
    protected $id_agent_createur;

    /**
     * The value for the nom_agent field.
     * @var        string
     */
    protected $nom_agent;

    /**
     * The value for the prenom_agent field.
     * @var        string
     */
    protected $prenom_agent;

    /**
     * The value for the adresses_electroniques field.
     * @var        string
     */
    protected $adresses_electroniques;

    /**
     * The value for the visible_bourse field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $visible_bourse;

    /**
     * The value for the type_collaboration field.
     * @var        string
     */
    protected $type_collaboration;

    /**
     * The value for the entreprise_ea field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $entreprise_ea;

    /**
     * The value for the entreprise_siae field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $entreprise_siae;

    /**
     * The value for the type_entreprise field.
     * @var        string
     */
    protected $type_entreprise;

    /**
     * The value for the note field.
     * @var        int
     */
    protected $note;

    /**
     * The value for the code_cpv field.
     * @var        string
     */
    protected $code_cpv;

    /**
     * The value for the statut_referencement field.
     * @var        int
     */
    protected $statut_referencement;

    /**
     * The value for the taille_entreprise field.
     * @var        int
     */
    protected $taille_entreprise;

    /**
     * The value for the identifiant_fiscale field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $identifiant_fiscale;

    /**
     * The value for the valide field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $valide;

    /**
     * The value for the guid field.
     * @var        string
     */
    protected $guid;

    /**
     * The value for the geo_id field.
     * @var        string
     */
    protected $geo_id;

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
        $this->admin_id = 0;
        $this->repmetiers = '';
        $this->adresse = '';
        $this->codepostal = '';
        $this->villeadresse = '';
        $this->paysadresse = '';
        $this->debutexerciceglob1 = '';
        $this->finexerciceglob1 = '';
        $this->debutexerciceglob2 = '';
        $this->finexerciceglob2 = '';
        $this->debutexerciceglob3 = '';
        $this->finexerciceglob3 = '';
        $this->ventesglob1 = '';
        $this->ventesglob2 = '';
        $this->ventesglob3 = '';
        $this->biensglob1 = '';
        $this->biensglob2 = '';
        $this->biensglob3 = '';
        $this->servicesglob1 = '';
        $this->servicesglob2 = '';
        $this->servicesglob3 = '';
        $this->totalglob1 = '';
        $this->totalglob2 = '';
        $this->totalglob3 = '';
        $this->codeape = '';
        $this->site_internet = '';
        $this->annee_cloture_exercice1 = '';
        $this->annee_cloture_exercice2 = '';
        $this->annee_cloture_exercice3 = '';
        $this->effectif_moyen1 = 0;
        $this->effectif_moyen2 = 0;
        $this->effectif_moyen3 = 0;
        $this->effectif_encadrement1 = 0;
        $this->effectif_encadrement2 = 0;
        $this->effectif_encadrement3 = 0;
        $this->id_initial = 0;
        $this->compte_actif = 1;
        $this->visible_bourse = '0';
        $this->entreprise_ea = '0';
        $this->entreprise_siae = '0';
        $this->identifiant_fiscale = '';
        $this->valide = false;
    }

    /**
     * Initializes internal state of BaseCommonEntreprise object.
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
     * Get the [admin_id] column value.
     * 
     * @return int
     */
    public function getAdminId()
    {

        return $this->admin_id;
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
     * Get the [repmetiers] column value.
     * 
     * @return string
     */
    public function getRepmetiers()
    {

        return $this->repmetiers;
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
     * Get the [codepostal] column value.
     * 
     * @return string
     */
    public function getCodepostal()
    {

        return $this->codepostal;
    }

    /**
     * Get the [villeadresse] column value.
     * 
     * @return string
     */
    public function getVilleadresse()
    {

        return $this->villeadresse;
    }

    /**
     * Get the [paysadresse] column value.
     * 
     * @return string
     */
    public function getPaysadresse()
    {

        return $this->paysadresse;
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
     * Get the [taille] column value.
     * 
     * @return int
     */
    public function getTaille()
    {

        return $this->taille;
    }

    /**
     * Get the [formejuridique] column value.
     * 
     * @return string
     */
    public function getFormejuridique()
    {

        return $this->formejuridique;
    }

    /**
     * Get the [villeenregistrement] column value.
     * 
     * @return string
     */
    public function getVilleenregistrement()
    {

        return $this->villeenregistrement;
    }

    /**
     * Get the [motifnonindnum] column value.
     * 
     * @return int
     */
    public function getMotifnonindnum()
    {

        return $this->motifnonindnum;
    }

    /**
     * Get the [ordreprofouagrement] column value.
     * 
     * @return string
     */
    public function getOrdreprofouagrement()
    {

        return $this->ordreprofouagrement;
    }

    /**
     * Get the [optionally formatted] temporal [dateconstsociete] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateconstsociete($format = null)
    {
        if ($this->dateconstsociete === null) {
            return null;
        }

        if ($this->dateconstsociete === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->dateconstsociete);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->dateconstsociete, true), $x);
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
     * Get the [nomorginscription] column value.
     * 
     * @return string
     */
    public function getNomorginscription()
    {

        return $this->nomorginscription;
    }

    /**
     * Get the [adrorginscription] column value.
     * 
     * @return string
     */
    public function getAdrorginscription()
    {

        return $this->adrorginscription;
    }

    /**
     * Get the [optionally formatted] temporal [dateconstassoc] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateconstassoc($format = null)
    {
        if ($this->dateconstassoc === null) {
            return null;
        }

        if ($this->dateconstassoc === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->dateconstassoc);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->dateconstassoc, true), $x);
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
     * Get the [optionally formatted] temporal [dateconstassocetrangere] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateconstassocetrangere($format = null)
    {
        if ($this->dateconstassocetrangere === null) {
            return null;
        }

        if ($this->dateconstassocetrangere === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->dateconstassocetrangere);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->dateconstassocetrangere, true), $x);
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
     * Get the [nompersonnepublique] column value.
     * 
     * @return string
     */
    public function getNompersonnepublique()
    {

        return $this->nompersonnepublique;
    }

    /**
     * Get the [nationalite] column value.
     * 
     * @return string
     */
    public function getNationalite()
    {

        return $this->nationalite;
    }

    /**
     * Get the [redressement] column value.
     * 
     * @return int
     */
    public function getRedressement()
    {

        return $this->redressement;
    }

    /**
     * Get the [paysenregistrement] column value.
     * 
     * @return string
     */
    public function getPaysenregistrement()
    {

        return $this->paysenregistrement;
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
     * Get the [numassoetrangere] column value.
     * 
     * @return string
     */
    public function getNumassoetrangere()
    {

        return $this->numassoetrangere;
    }

    /**
     * Get the [debutexerciceglob1] column value.
     * 
     * @return string
     */
    public function getDebutexerciceglob1()
    {

        return $this->debutexerciceglob1;
    }

    /**
     * Get the [finexerciceglob1] column value.
     * 
     * @return string
     */
    public function getFinexerciceglob1()
    {

        return $this->finexerciceglob1;
    }

    /**
     * Get the [debutexerciceglob2] column value.
     * 
     * @return string
     */
    public function getDebutexerciceglob2()
    {

        return $this->debutexerciceglob2;
    }

    /**
     * Get the [finexerciceglob2] column value.
     * 
     * @return string
     */
    public function getFinexerciceglob2()
    {

        return $this->finexerciceglob2;
    }

    /**
     * Get the [debutexerciceglob3] column value.
     * 
     * @return string
     */
    public function getDebutexerciceglob3()
    {

        return $this->debutexerciceglob3;
    }

    /**
     * Get the [finexerciceglob3] column value.
     * 
     * @return string
     */
    public function getFinexerciceglob3()
    {

        return $this->finexerciceglob3;
    }

    /**
     * Get the [ventesglob1] column value.
     * 
     * @return string
     */
    public function getVentesglob1()
    {

        return $this->ventesglob1;
    }

    /**
     * Get the [ventesglob2] column value.
     * 
     * @return string
     */
    public function getVentesglob2()
    {

        return $this->ventesglob2;
    }

    /**
     * Get the [ventesglob3] column value.
     * 
     * @return string
     */
    public function getVentesglob3()
    {

        return $this->ventesglob3;
    }

    /**
     * Get the [biensglob1] column value.
     * 
     * @return string
     */
    public function getBiensglob1()
    {

        return $this->biensglob1;
    }

    /**
     * Get the [biensglob2] column value.
     * 
     * @return string
     */
    public function getBiensglob2()
    {

        return $this->biensglob2;
    }

    /**
     * Get the [biensglob3] column value.
     * 
     * @return string
     */
    public function getBiensglob3()
    {

        return $this->biensglob3;
    }

    /**
     * Get the [servicesglob1] column value.
     * 
     * @return string
     */
    public function getServicesglob1()
    {

        return $this->servicesglob1;
    }

    /**
     * Get the [servicesglob2] column value.
     * 
     * @return string
     */
    public function getServicesglob2()
    {

        return $this->servicesglob2;
    }

    /**
     * Get the [servicesglob3] column value.
     * 
     * @return string
     */
    public function getServicesglob3()
    {

        return $this->servicesglob3;
    }

    /**
     * Get the [totalglob1] column value.
     * 
     * @return string
     */
    public function getTotalglob1()
    {

        return $this->totalglob1;
    }

    /**
     * Get the [totalglob2] column value.
     * 
     * @return string
     */
    public function getTotalglob2()
    {

        return $this->totalglob2;
    }

    /**
     * Get the [totalglob3] column value.
     * 
     * @return string
     */
    public function getTotalglob3()
    {

        return $this->totalglob3;
    }

    /**
     * Get the [codeape] column value.
     * 
     * @return string
     */
    public function getCodeape()
    {

        return $this->codeape;
    }

    /**
     * Get the [origine_compte] column value.
     * 
     * @return string
     */
    public function getOrigineCompte()
    {

        return $this->origine_compte;
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
     * Get the [site_internet] column value.
     * 
     * @return string
     */
    public function getSiteInternet()
    {

        return $this->site_internet;
    }

    /**
     * Get the [description_activite] column value.
     * 
     * @return string
     */
    public function getDescriptionActivite()
    {

        return $this->description_activite;
    }

    /**
     * Get the [activite_domaine_defense] column value.
     * 
     * @return string
     */
    public function getActiviteDomaineDefense()
    {

        return $this->activite_domaine_defense;
    }

    /**
     * Get the [annee_cloture_exercice1] column value.
     * 
     * @return string
     */
    public function getAnneeClotureExercice1()
    {

        return $this->annee_cloture_exercice1;
    }

    /**
     * Get the [annee_cloture_exercice2] column value.
     * 
     * @return string
     */
    public function getAnneeClotureExercice2()
    {

        return $this->annee_cloture_exercice2;
    }

    /**
     * Get the [annee_cloture_exercice3] column value.
     * 
     * @return string
     */
    public function getAnneeClotureExercice3()
    {

        return $this->annee_cloture_exercice3;
    }

    /**
     * Get the [effectif_moyen1] column value.
     * 
     * @return int
     */
    public function getEffectifMoyen1()
    {

        return $this->effectif_moyen1;
    }

    /**
     * Get the [effectif_moyen2] column value.
     * 
     * @return int
     */
    public function getEffectifMoyen2()
    {

        return $this->effectif_moyen2;
    }

    /**
     * Get the [effectif_moyen3] column value.
     * 
     * @return int
     */
    public function getEffectifMoyen3()
    {

        return $this->effectif_moyen3;
    }

    /**
     * Get the [effectif_encadrement1] column value.
     * 
     * @return int
     */
    public function getEffectifEncadrement1()
    {

        return $this->effectif_encadrement1;
    }

    /**
     * Get the [effectif_encadrement2] column value.
     * 
     * @return int
     */
    public function getEffectifEncadrement2()
    {

        return $this->effectif_encadrement2;
    }

    /**
     * Get the [effectif_encadrement3] column value.
     * 
     * @return int
     */
    public function getEffectifEncadrement3()
    {

        return $this->effectif_encadrement3;
    }

    /**
     * Get the [pme1] column value.
     * 
     * @return string
     */
    public function getPme1()
    {

        return $this->pme1;
    }

    /**
     * Get the [pme2] column value.
     * 
     * @return string
     */
    public function getPme2()
    {

        return $this->pme2;
    }

    /**
     * Get the [pme3] column value.
     * 
     * @return string
     */
    public function getPme3()
    {

        return $this->pme3;
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
     * Get the [nicsiege] column value.
     * 
     * @return string
     */
    public function getNicsiege()
    {

        return $this->nicsiege;
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
     * Get the [region] column value.
     * 
     * @return string
     */
    public function getRegion()
    {

        return $this->region;
    }

    /**
     * Get the [province] column value.
     * 
     * @return string
     */
    public function getProvince()
    {

        return $this->province;
    }

    /**
     * Get the [telephone2] column value.
     * 
     * @return string
     */
    public function getTelephone2()
    {

        return $this->telephone2;
    }

    /**
     * Get the [telephone3] column value.
     * 
     * @return string
     */
    public function getTelephone3()
    {

        return $this->telephone3;
    }

    /**
     * Get the [cnss] column value.
     * 
     * @return string
     */
    public function getCnss()
    {

        return $this->cnss;
    }

    /**
     * Get the [rc_num] column value.
     * 
     * @return string
     */
    public function getRcNum()
    {

        return $this->rc_num;
    }

    /**
     * Get the [rc_ville] column value.
     * 
     * @return string
     */
    public function getRcVille()
    {

        return $this->rc_ville;
    }

    /**
     * Get the [domaines_activites] column value.
     * 
     * @return string
     */
    public function getDomainesActivites()
    {

        return $this->domaines_activites;
    }

    /**
     * Get the [num_tax] column value.
     * 
     * @return string
     */
    public function getNumTax()
    {

        return $this->num_tax;
    }

    /**
     * Get the [documents_commerciaux] column value.
     * 
     * @return int
     */
    public function getDocumentsCommerciaux()
    {

        return $this->documents_commerciaux;
    }

    /**
     * Get the [intitule_documents_commerciaux] column value.
     * 
     * @return string
     */
    public function getIntituleDocumentsCommerciaux()
    {

        return $this->intitule_documents_commerciaux;
    }

    /**
     * Get the [taille_documents_commerciaux] column value.
     * 
     * @return string
     */
    public function getTailleDocumentsCommerciaux()
    {

        return $this->taille_documents_commerciaux;
    }

    /**
     * Get the [qualification] column value.
     * 
     * @return string
     */
    public function getQualification()
    {

        return $this->qualification;
    }

    /**
     * Get the [agrement] column value.
     * 
     * @return string
     */
    public function getAgrement()
    {

        return $this->agrement;
    }

    /**
     * Get the [moyens_technique] column value.
     * 
     * @return string
     */
    public function getMoyensTechnique()
    {

        return $this->moyens_technique;
    }

    /**
     * Get the [moyens_humains] column value.
     * 
     * @return string
     */
    public function getMoyensHumains()
    {

        return $this->moyens_humains;
    }

    /**
     * Get the [compte_actif] column value.
     * 
     * @return int
     */
    public function getCompteActif()
    {

        return $this->compte_actif;
    }

    /**
     * Get the [capital_social] column value.
     * 
     * @return string
     */
    public function getCapitalSocial()
    {

        return $this->capital_social;
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
     * Get the [id_agent_createur] column value.
     * 
     * @return int
     */
    public function getIdAgentCreateur()
    {

        return $this->id_agent_createur;
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
     * Get the [adresses_electroniques] column value.
     * 
     * @return string
     */
    public function getAdressesElectroniques()
    {

        return $this->adresses_electroniques;
    }

    /**
     * Get the [visible_bourse] column value.
     * 
     * @return string
     */
    public function getVisibleBourse()
    {

        return $this->visible_bourse;
    }

    /**
     * Get the [type_collaboration] column value.
     * 
     * @return string
     */
    public function getTypeCollaboration()
    {

        return $this->type_collaboration;
    }

    /**
     * Get the [entreprise_ea] column value.
     * 
     * @return string
     */
    public function getEntrepriseEa()
    {

        return $this->entreprise_ea;
    }

    /**
     * Get the [entreprise_siae] column value.
     * 
     * @return string
     */
    public function getEntrepriseSiae()
    {

        return $this->entreprise_siae;
    }

    /**
     * Get the [type_entreprise] column value.
     * 
     * @return string
     */
    public function getTypeEntreprise()
    {

        return $this->type_entreprise;
    }

    /**
     * Get the [note] column value.
     * 
     * @return int
     */
    public function getNote()
    {

        return $this->note;
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
     * Get the [statut_referencement] column value.
     * 
     * @return int
     */
    public function getStatutReferencement()
    {

        return $this->statut_referencement;
    }

    /**
     * Get the [taille_entreprise] column value.
     * 
     * @return int
     */
    public function getTailleEntreprise()
    {

        return $this->taille_entreprise;
    }

    /**
     * Get the [identifiant_fiscale] column value.
     * 
     * @return string
     */
    public function getIdentifiantFiscale()
    {

        return $this->identifiant_fiscale;
    }

    /**
     * Get the [valide] column value.
     * 
     * @return boolean
     */
    public function getValide()
    {

        return $this->valide;
    }

    /**
     * Get the [guid] column value.
     * 
     * @return string
     */
    public function getGuid()
    {

        return $this->guid;
    }

    /**
     * Get the [geo_id] column value.
     * 
     * @return string
     */
    public function getGeoId()
    {

        return $this->geo_id;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [admin_id] column.
     * 
     * @param int $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setAdminId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->admin_id !== $v) {
            $this->admin_id = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::ADMIN_ID;
        }


        return $this;
    } // setAdminId()

    /**
     * Set the value of [siren] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setSiren($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->siren !== $v) {
            $this->siren = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::SIREN;
        }


        return $this;
    } // setSiren()

    /**
     * Set the value of [repmetiers] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setRepmetiers($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->repmetiers !== $v) {
            $this->repmetiers = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::REPMETIERS;
        }


        return $this;
    } // setRepmetiers()

    /**
     * Set the value of [nom] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setNom($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom !== $v) {
            $this->nom = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::NOM;
        }


        return $this;
    } // setNom()

    /**
     * Set the value of [adresse] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setAdresse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse !== $v) {
            $this->adresse = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::ADRESSE;
        }


        return $this;
    } // setAdresse()

    /**
     * Set the value of [codepostal] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setCodepostal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->codepostal !== $v) {
            $this->codepostal = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::CODEPOSTAL;
        }


        return $this;
    } // setCodepostal()

    /**
     * Set the value of [villeadresse] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setVilleadresse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->villeadresse !== $v) {
            $this->villeadresse = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::VILLEADRESSE;
        }


        return $this;
    } // setVilleadresse()

    /**
     * Set the value of [paysadresse] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setPaysadresse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->paysadresse !== $v) {
            $this->paysadresse = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::PAYSADRESSE;
        }


        return $this;
    } // setPaysadresse()

    /**
     * Set the value of [email] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::EMAIL;
        }


        return $this;
    } // setEmail()

    /**
     * Set the value of [taille] column.
     * 
     * @param int $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setTaille($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->taille !== $v) {
            $this->taille = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::TAILLE;
        }


        return $this;
    } // setTaille()

    /**
     * Set the value of [formejuridique] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setFormejuridique($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->formejuridique !== $v) {
            $this->formejuridique = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::FORMEJURIDIQUE;
        }


        return $this;
    } // setFormejuridique()

    /**
     * Set the value of [villeenregistrement] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setVilleenregistrement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->villeenregistrement !== $v) {
            $this->villeenregistrement = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::VILLEENREGISTREMENT;
        }


        return $this;
    } // setVilleenregistrement()

    /**
     * Set the value of [motifnonindnum] column.
     * 
     * @param int $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setMotifnonindnum($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->motifnonindnum !== $v) {
            $this->motifnonindnum = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::MOTIFNONINDNUM;
        }


        return $this;
    } // setMotifnonindnum()

    /**
     * Set the value of [ordreprofouagrement] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setOrdreprofouagrement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ordreprofouagrement !== $v) {
            $this->ordreprofouagrement = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::ORDREPROFOUAGREMENT;
        }


        return $this;
    } // setOrdreprofouagrement()

    /**
     * Sets the value of [dateconstsociete] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setDateconstsociete($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateconstsociete !== null || $dt !== null) {
            $currentDateAsString = ($this->dateconstsociete !== null && $tmpDt = new DateTime($this->dateconstsociete)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateconstsociete = $newDateAsString;
                $this->modifiedColumns[] = CommonEntreprisePeer::DATECONSTSOCIETE;
            }
        } // if either are not null


        return $this;
    } // setDateconstsociete()

    /**
     * Set the value of [nomorginscription] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setNomorginscription($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nomorginscription !== $v) {
            $this->nomorginscription = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::NOMORGINSCRIPTION;
        }


        return $this;
    } // setNomorginscription()

    /**
     * Set the value of [adrorginscription] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setAdrorginscription($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adrorginscription !== $v) {
            $this->adrorginscription = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::ADRORGINSCRIPTION;
        }


        return $this;
    } // setAdrorginscription()

    /**
     * Sets the value of [dateconstassoc] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setDateconstassoc($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateconstassoc !== null || $dt !== null) {
            $currentDateAsString = ($this->dateconstassoc !== null && $tmpDt = new DateTime($this->dateconstassoc)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateconstassoc = $newDateAsString;
                $this->modifiedColumns[] = CommonEntreprisePeer::DATECONSTASSOC;
            }
        } // if either are not null


        return $this;
    } // setDateconstassoc()

    /**
     * Sets the value of [dateconstassocetrangere] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setDateconstassocetrangere($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->dateconstassocetrangere !== null || $dt !== null) {
            $currentDateAsString = ($this->dateconstassocetrangere !== null && $tmpDt = new DateTime($this->dateconstassocetrangere)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->dateconstassocetrangere = $newDateAsString;
                $this->modifiedColumns[] = CommonEntreprisePeer::DATECONSTASSOCETRANGERE;
            }
        } // if either are not null


        return $this;
    } // setDateconstassocetrangere()

    /**
     * Set the value of [nompersonnepublique] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setNompersonnepublique($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nompersonnepublique !== $v) {
            $this->nompersonnepublique = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::NOMPERSONNEPUBLIQUE;
        }


        return $this;
    } // setNompersonnepublique()

    /**
     * Set the value of [nationalite] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setNationalite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nationalite !== $v) {
            $this->nationalite = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::NATIONALITE;
        }


        return $this;
    } // setNationalite()

    /**
     * Set the value of [redressement] column.
     * 
     * @param int $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setRedressement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->redressement !== $v) {
            $this->redressement = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::REDRESSEMENT;
        }


        return $this;
    } // setRedressement()

    /**
     * Set the value of [paysenregistrement] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setPaysenregistrement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->paysenregistrement !== $v) {
            $this->paysenregistrement = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::PAYSENREGISTREMENT;
        }


        return $this;
    } // setPaysenregistrement()

    /**
     * Set the value of [sirenetranger] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setSirenetranger($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sirenetranger !== $v) {
            $this->sirenetranger = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::SIRENETRANGER;
        }


        return $this;
    } // setSirenetranger()

    /**
     * Set the value of [numassoetrangere] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setNumassoetrangere($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->numassoetrangere !== $v) {
            $this->numassoetrangere = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::NUMASSOETRANGERE;
        }


        return $this;
    } // setNumassoetrangere()

    /**
     * Set the value of [debutexerciceglob1] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setDebutexerciceglob1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->debutexerciceglob1 !== $v) {
            $this->debutexerciceglob1 = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::DEBUTEXERCICEGLOB1;
        }


        return $this;
    } // setDebutexerciceglob1()

    /**
     * Set the value of [finexerciceglob1] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setFinexerciceglob1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->finexerciceglob1 !== $v) {
            $this->finexerciceglob1 = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::FINEXERCICEGLOB1;
        }


        return $this;
    } // setFinexerciceglob1()

    /**
     * Set the value of [debutexerciceglob2] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setDebutexerciceglob2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->debutexerciceglob2 !== $v) {
            $this->debutexerciceglob2 = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::DEBUTEXERCICEGLOB2;
        }


        return $this;
    } // setDebutexerciceglob2()

    /**
     * Set the value of [finexerciceglob2] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setFinexerciceglob2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->finexerciceglob2 !== $v) {
            $this->finexerciceglob2 = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::FINEXERCICEGLOB2;
        }


        return $this;
    } // setFinexerciceglob2()

    /**
     * Set the value of [debutexerciceglob3] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setDebutexerciceglob3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->debutexerciceglob3 !== $v) {
            $this->debutexerciceglob3 = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::DEBUTEXERCICEGLOB3;
        }


        return $this;
    } // setDebutexerciceglob3()

    /**
     * Set the value of [finexerciceglob3] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setFinexerciceglob3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->finexerciceglob3 !== $v) {
            $this->finexerciceglob3 = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::FINEXERCICEGLOB3;
        }


        return $this;
    } // setFinexerciceglob3()

    /**
     * Set the value of [ventesglob1] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setVentesglob1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ventesglob1 !== $v) {
            $this->ventesglob1 = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::VENTESGLOB1;
        }


        return $this;
    } // setVentesglob1()

    /**
     * Set the value of [ventesglob2] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setVentesglob2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ventesglob2 !== $v) {
            $this->ventesglob2 = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::VENTESGLOB2;
        }


        return $this;
    } // setVentesglob2()

    /**
     * Set the value of [ventesglob3] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setVentesglob3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ventesglob3 !== $v) {
            $this->ventesglob3 = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::VENTESGLOB3;
        }


        return $this;
    } // setVentesglob3()

    /**
     * Set the value of [biensglob1] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setBiensglob1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->biensglob1 !== $v) {
            $this->biensglob1 = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::BIENSGLOB1;
        }


        return $this;
    } // setBiensglob1()

    /**
     * Set the value of [biensglob2] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setBiensglob2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->biensglob2 !== $v) {
            $this->biensglob2 = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::BIENSGLOB2;
        }


        return $this;
    } // setBiensglob2()

    /**
     * Set the value of [biensglob3] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setBiensglob3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->biensglob3 !== $v) {
            $this->biensglob3 = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::BIENSGLOB3;
        }


        return $this;
    } // setBiensglob3()

    /**
     * Set the value of [servicesglob1] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setServicesglob1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->servicesglob1 !== $v) {
            $this->servicesglob1 = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::SERVICESGLOB1;
        }


        return $this;
    } // setServicesglob1()

    /**
     * Set the value of [servicesglob2] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setServicesglob2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->servicesglob2 !== $v) {
            $this->servicesglob2 = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::SERVICESGLOB2;
        }


        return $this;
    } // setServicesglob2()

    /**
     * Set the value of [servicesglob3] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setServicesglob3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->servicesglob3 !== $v) {
            $this->servicesglob3 = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::SERVICESGLOB3;
        }


        return $this;
    } // setServicesglob3()

    /**
     * Set the value of [totalglob1] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setTotalglob1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->totalglob1 !== $v) {
            $this->totalglob1 = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::TOTALGLOB1;
        }


        return $this;
    } // setTotalglob1()

    /**
     * Set the value of [totalglob2] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setTotalglob2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->totalglob2 !== $v) {
            $this->totalglob2 = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::TOTALGLOB2;
        }


        return $this;
    } // setTotalglob2()

    /**
     * Set the value of [totalglob3] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setTotalglob3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->totalglob3 !== $v) {
            $this->totalglob3 = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::TOTALGLOB3;
        }


        return $this;
    } // setTotalglob3()

    /**
     * Set the value of [codeape] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setCodeape($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->codeape !== $v) {
            $this->codeape = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::CODEAPE;
        }


        return $this;
    } // setCodeape()

    /**
     * Set the value of [origine_compte] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setOrigineCompte($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->origine_compte !== $v) {
            $this->origine_compte = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::ORIGINE_COMPTE;
        }


        return $this;
    } // setOrigineCompte()

    /**
     * Set the value of [telephone] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setTelephone($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->telephone !== $v) {
            $this->telephone = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::TELEPHONE;
        }


        return $this;
    } // setTelephone()

    /**
     * Set the value of [fax] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setFax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->fax !== $v) {
            $this->fax = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::FAX;
        }


        return $this;
    } // setFax()

    /**
     * Set the value of [site_internet] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setSiteInternet($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->site_internet !== $v) {
            $this->site_internet = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::SITE_INTERNET;
        }


        return $this;
    } // setSiteInternet()

    /**
     * Set the value of [description_activite] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setDescriptionActivite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->description_activite !== $v) {
            $this->description_activite = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::DESCRIPTION_ACTIVITE;
        }


        return $this;
    } // setDescriptionActivite()

    /**
     * Set the value of [activite_domaine_defense] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setActiviteDomaineDefense($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->activite_domaine_defense !== $v) {
            $this->activite_domaine_defense = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::ACTIVITE_DOMAINE_DEFENSE;
        }


        return $this;
    } // setActiviteDomaineDefense()

    /**
     * Set the value of [annee_cloture_exercice1] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setAnneeClotureExercice1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->annee_cloture_exercice1 !== $v) {
            $this->annee_cloture_exercice1 = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::ANNEE_CLOTURE_EXERCICE1;
        }


        return $this;
    } // setAnneeClotureExercice1()

    /**
     * Set the value of [annee_cloture_exercice2] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setAnneeClotureExercice2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->annee_cloture_exercice2 !== $v) {
            $this->annee_cloture_exercice2 = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::ANNEE_CLOTURE_EXERCICE2;
        }


        return $this;
    } // setAnneeClotureExercice2()

    /**
     * Set the value of [annee_cloture_exercice3] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setAnneeClotureExercice3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->annee_cloture_exercice3 !== $v) {
            $this->annee_cloture_exercice3 = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::ANNEE_CLOTURE_EXERCICE3;
        }


        return $this;
    } // setAnneeClotureExercice3()

    /**
     * Set the value of [effectif_moyen1] column.
     * 
     * @param int $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setEffectifMoyen1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->effectif_moyen1 !== $v) {
            $this->effectif_moyen1 = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::EFFECTIF_MOYEN1;
        }


        return $this;
    } // setEffectifMoyen1()

    /**
     * Set the value of [effectif_moyen2] column.
     * 
     * @param int $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setEffectifMoyen2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->effectif_moyen2 !== $v) {
            $this->effectif_moyen2 = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::EFFECTIF_MOYEN2;
        }


        return $this;
    } // setEffectifMoyen2()

    /**
     * Set the value of [effectif_moyen3] column.
     * 
     * @param int $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setEffectifMoyen3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->effectif_moyen3 !== $v) {
            $this->effectif_moyen3 = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::EFFECTIF_MOYEN3;
        }


        return $this;
    } // setEffectifMoyen3()

    /**
     * Set the value of [effectif_encadrement1] column.
     * 
     * @param int $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setEffectifEncadrement1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->effectif_encadrement1 !== $v) {
            $this->effectif_encadrement1 = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::EFFECTIF_ENCADREMENT1;
        }


        return $this;
    } // setEffectifEncadrement1()

    /**
     * Set the value of [effectif_encadrement2] column.
     * 
     * @param int $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setEffectifEncadrement2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->effectif_encadrement2 !== $v) {
            $this->effectif_encadrement2 = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::EFFECTIF_ENCADREMENT2;
        }


        return $this;
    } // setEffectifEncadrement2()

    /**
     * Set the value of [effectif_encadrement3] column.
     * 
     * @param int $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setEffectifEncadrement3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->effectif_encadrement3 !== $v) {
            $this->effectif_encadrement3 = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::EFFECTIF_ENCADREMENT3;
        }


        return $this;
    } // setEffectifEncadrement3()

    /**
     * Set the value of [pme1] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setPme1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pme1 !== $v) {
            $this->pme1 = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::PME1;
        }


        return $this;
    } // setPme1()

    /**
     * Set the value of [pme2] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setPme2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pme2 !== $v) {
            $this->pme2 = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::PME2;
        }


        return $this;
    } // setPme2()

    /**
     * Set the value of [pme3] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setPme3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pme3 !== $v) {
            $this->pme3 = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::PME3;
        }


        return $this;
    } // setPme3()

    /**
     * Set the value of [adresse2] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setAdresse2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse2 !== $v) {
            $this->adresse2 = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::ADRESSE2;
        }


        return $this;
    } // setAdresse2()

    /**
     * Set the value of [nicsiege] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setNicsiege($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nicsiege !== $v) {
            $this->nicsiege = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::NICSIEGE;
        }


        return $this;
    } // setNicsiege()

    /**
     * Set the value of [acronyme_pays] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setAcronymePays($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->acronyme_pays !== $v) {
            $this->acronyme_pays = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::ACRONYME_PAYS;
        }


        return $this;
    } // setAcronymePays()

    /**
     * Set the value of [date_creation] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setDateCreation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_creation !== $v) {
            $this->date_creation = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::DATE_CREATION;
        }


        return $this;
    } // setDateCreation()

    /**
     * Set the value of [date_modification] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setDateModification($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_modification !== $v) {
            $this->date_modification = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::DATE_MODIFICATION;
        }


        return $this;
    } // setDateModification()

    /**
     * Set the value of [id_initial] column.
     * 
     * @param int $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setIdInitial($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_initial !== $v) {
            $this->id_initial = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::ID_INITIAL;
        }


        return $this;
    } // setIdInitial()

    /**
     * Set the value of [region] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setRegion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->region !== $v) {
            $this->region = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::REGION;
        }


        return $this;
    } // setRegion()

    /**
     * Set the value of [province] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setProvince($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->province !== $v) {
            $this->province = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::PROVINCE;
        }


        return $this;
    } // setProvince()

    /**
     * Set the value of [telephone2] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setTelephone2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->telephone2 !== $v) {
            $this->telephone2 = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::TELEPHONE2;
        }


        return $this;
    } // setTelephone2()

    /**
     * Set the value of [telephone3] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setTelephone3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->telephone3 !== $v) {
            $this->telephone3 = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::TELEPHONE3;
        }


        return $this;
    } // setTelephone3()

    /**
     * Set the value of [cnss] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setCnss($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cnss !== $v) {
            $this->cnss = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::CNSS;
        }


        return $this;
    } // setCnss()

    /**
     * Set the value of [rc_num] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setRcNum($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->rc_num !== $v) {
            $this->rc_num = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::RC_NUM;
        }


        return $this;
    } // setRcNum()

    /**
     * Set the value of [rc_ville] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setRcVille($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->rc_ville !== $v) {
            $this->rc_ville = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::RC_VILLE;
        }


        return $this;
    } // setRcVille()

    /**
     * Set the value of [domaines_activites] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setDomainesActivites($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->domaines_activites !== $v) {
            $this->domaines_activites = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::DOMAINES_ACTIVITES;
        }


        return $this;
    } // setDomainesActivites()

    /**
     * Set the value of [num_tax] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setNumTax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->num_tax !== $v) {
            $this->num_tax = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::NUM_TAX;
        }


        return $this;
    } // setNumTax()

    /**
     * Set the value of [documents_commerciaux] column.
     * 
     * @param int $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setDocumentsCommerciaux($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->documents_commerciaux !== $v) {
            $this->documents_commerciaux = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::DOCUMENTS_COMMERCIAUX;
        }


        return $this;
    } // setDocumentsCommerciaux()

    /**
     * Set the value of [intitule_documents_commerciaux] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setIntituleDocumentsCommerciaux($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->intitule_documents_commerciaux !== $v) {
            $this->intitule_documents_commerciaux = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::INTITULE_DOCUMENTS_COMMERCIAUX;
        }


        return $this;
    } // setIntituleDocumentsCommerciaux()

    /**
     * Set the value of [taille_documents_commerciaux] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setTailleDocumentsCommerciaux($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->taille_documents_commerciaux !== $v) {
            $this->taille_documents_commerciaux = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::TAILLE_DOCUMENTS_COMMERCIAUX;
        }


        return $this;
    } // setTailleDocumentsCommerciaux()

    /**
     * Set the value of [qualification] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setQualification($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->qualification !== $v) {
            $this->qualification = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::QUALIFICATION;
        }


        return $this;
    } // setQualification()

    /**
     * Set the value of [agrement] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setAgrement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->agrement !== $v) {
            $this->agrement = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::AGREMENT;
        }


        return $this;
    } // setAgrement()

    /**
     * Set the value of [moyens_technique] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setMoyensTechnique($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->moyens_technique !== $v) {
            $this->moyens_technique = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::MOYENS_TECHNIQUE;
        }


        return $this;
    } // setMoyensTechnique()

    /**
     * Set the value of [moyens_humains] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setMoyensHumains($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->moyens_humains !== $v) {
            $this->moyens_humains = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::MOYENS_HUMAINS;
        }


        return $this;
    } // setMoyensHumains()

    /**
     * Set the value of [compte_actif] column.
     * 
     * @param int $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setCompteActif($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->compte_actif !== $v) {
            $this->compte_actif = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::COMPTE_ACTIF;
        }


        return $this;
    } // setCompteActif()

    /**
     * Set the value of [capital_social] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setCapitalSocial($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->capital_social !== $v) {
            $this->capital_social = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::CAPITAL_SOCIAL;
        }


        return $this;
    } // setCapitalSocial()

    /**
     * Set the value of [ifu] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setIfu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ifu !== $v) {
            $this->ifu = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::IFU;
        }


        return $this;
    } // setIfu()

    /**
     * Set the value of [id_agent_createur] column.
     * 
     * @param int $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setIdAgentCreateur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_createur !== $v) {
            $this->id_agent_createur = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::ID_AGENT_CREATEUR;
        }


        return $this;
    } // setIdAgentCreateur()

    /**
     * Set the value of [nom_agent] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setNomAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_agent !== $v) {
            $this->nom_agent = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::NOM_AGENT;
        }


        return $this;
    } // setNomAgent()

    /**
     * Set the value of [prenom_agent] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setPrenomAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prenom_agent !== $v) {
            $this->prenom_agent = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::PRENOM_AGENT;
        }


        return $this;
    } // setPrenomAgent()

    /**
     * Set the value of [adresses_electroniques] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setAdressesElectroniques($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresses_electroniques !== $v) {
            $this->adresses_electroniques = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::ADRESSES_ELECTRONIQUES;
        }


        return $this;
    } // setAdressesElectroniques()

    /**
     * Set the value of [visible_bourse] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setVisibleBourse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->visible_bourse !== $v) {
            $this->visible_bourse = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::VISIBLE_BOURSE;
        }


        return $this;
    } // setVisibleBourse()

    /**
     * Set the value of [type_collaboration] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setTypeCollaboration($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_collaboration !== $v) {
            $this->type_collaboration = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::TYPE_COLLABORATION;
        }


        return $this;
    } // setTypeCollaboration()

    /**
     * Set the value of [entreprise_ea] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setEntrepriseEa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->entreprise_ea !== $v) {
            $this->entreprise_ea = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::ENTREPRISE_EA;
        }


        return $this;
    } // setEntrepriseEa()

    /**
     * Set the value of [entreprise_siae] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setEntrepriseSiae($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->entreprise_siae !== $v) {
            $this->entreprise_siae = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::ENTREPRISE_SIAE;
        }


        return $this;
    } // setEntrepriseSiae()

    /**
     * Set the value of [type_entreprise] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setTypeEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_entreprise !== $v) {
            $this->type_entreprise = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::TYPE_ENTREPRISE;
        }


        return $this;
    } // setTypeEntreprise()

    /**
     * Set the value of [note] column.
     * 
     * @param int $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setNote($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->note !== $v) {
            $this->note = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::NOTE;
        }


        return $this;
    } // setNote()

    /**
     * Set the value of [code_cpv] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setCodeCpv($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code_cpv !== $v) {
            $this->code_cpv = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::CODE_CPV;
        }


        return $this;
    } // setCodeCpv()

    /**
     * Set the value of [statut_referencement] column.
     * 
     * @param int $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setStatutReferencement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->statut_referencement !== $v) {
            $this->statut_referencement = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::STATUT_REFERENCEMENT;
        }


        return $this;
    } // setStatutReferencement()

    /**
     * Set the value of [taille_entreprise] column.
     * 
     * @param int $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setTailleEntreprise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->taille_entreprise !== $v) {
            $this->taille_entreprise = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::TAILLE_ENTREPRISE;
        }


        return $this;
    } // setTailleEntreprise()

    /**
     * Set the value of [identifiant_fiscale] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setIdentifiantFiscale($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->identifiant_fiscale !== $v) {
            $this->identifiant_fiscale = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::IDENTIFIANT_FISCALE;
        }


        return $this;
    } // setIdentifiantFiscale()

    /**
     * Sets the value of the [valide] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * 
     * @param boolean|integer|string $v The new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setValide($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->valide !== $v) {
            $this->valide = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::VALIDE;
        }


        return $this;
    } // setValide()

    /**
     * Set the value of [guid] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setGuid($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->guid !== $v) {
            $this->guid = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::GUID;
        }


        return $this;
    } // setGuid()

    /**
     * Set the value of [geo_id] column.
     * 
     * @param string $v new value
     * @return CommonEntreprise The current object (for fluent API support)
     */
    public function setGeoId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->geo_id !== $v) {
            $this->geo_id = $v;
            $this->modifiedColumns[] = CommonEntreprisePeer::GEO_ID;
        }


        return $this;
    } // setGeoId()

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
            if ($this->admin_id !== 0) {
                return false;
            }

            if ($this->repmetiers !== '') {
                return false;
            }

            if ($this->adresse !== '') {
                return false;
            }

            if ($this->codepostal !== '') {
                return false;
            }

            if ($this->villeadresse !== '') {
                return false;
            }

            if ($this->paysadresse !== '') {
                return false;
            }

            if ($this->debutexerciceglob1 !== '') {
                return false;
            }

            if ($this->finexerciceglob1 !== '') {
                return false;
            }

            if ($this->debutexerciceglob2 !== '') {
                return false;
            }

            if ($this->finexerciceglob2 !== '') {
                return false;
            }

            if ($this->debutexerciceglob3 !== '') {
                return false;
            }

            if ($this->finexerciceglob3 !== '') {
                return false;
            }

            if ($this->ventesglob1 !== '') {
                return false;
            }

            if ($this->ventesglob2 !== '') {
                return false;
            }

            if ($this->ventesglob3 !== '') {
                return false;
            }

            if ($this->biensglob1 !== '') {
                return false;
            }

            if ($this->biensglob2 !== '') {
                return false;
            }

            if ($this->biensglob3 !== '') {
                return false;
            }

            if ($this->servicesglob1 !== '') {
                return false;
            }

            if ($this->servicesglob2 !== '') {
                return false;
            }

            if ($this->servicesglob3 !== '') {
                return false;
            }

            if ($this->totalglob1 !== '') {
                return false;
            }

            if ($this->totalglob2 !== '') {
                return false;
            }

            if ($this->totalglob3 !== '') {
                return false;
            }

            if ($this->codeape !== '') {
                return false;
            }

            if ($this->site_internet !== '') {
                return false;
            }

            if ($this->annee_cloture_exercice1 !== '') {
                return false;
            }

            if ($this->annee_cloture_exercice2 !== '') {
                return false;
            }

            if ($this->annee_cloture_exercice3 !== '') {
                return false;
            }

            if ($this->effectif_moyen1 !== 0) {
                return false;
            }

            if ($this->effectif_moyen2 !== 0) {
                return false;
            }

            if ($this->effectif_moyen3 !== 0) {
                return false;
            }

            if ($this->effectif_encadrement1 !== 0) {
                return false;
            }

            if ($this->effectif_encadrement2 !== 0) {
                return false;
            }

            if ($this->effectif_encadrement3 !== 0) {
                return false;
            }

            if ($this->id_initial !== 0) {
                return false;
            }

            if ($this->compte_actif !== 1) {
                return false;
            }

            if ($this->visible_bourse !== '0') {
                return false;
            }

            if ($this->entreprise_ea !== '0') {
                return false;
            }

            if ($this->entreprise_siae !== '0') {
                return false;
            }

            if ($this->identifiant_fiscale !== '') {
                return false;
            }

            if ($this->valide !== false) {
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
            $this->admin_id = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->siren = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
            $this->repmetiers = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->nom = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->adresse = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->codepostal = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->villeadresse = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->paysadresse = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->email = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->taille = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
            $this->formejuridique = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->villeenregistrement = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->motifnonindnum = ($row[$startcol + 13] !== null) ? (int) $row[$startcol + 13] : null;
            $this->ordreprofouagrement = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->dateconstsociete = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->nomorginscription = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->adrorginscription = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->dateconstassoc = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->dateconstassocetrangere = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->nompersonnepublique = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->nationalite = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->redressement = ($row[$startcol + 22] !== null) ? (int) $row[$startcol + 22] : null;
            $this->paysenregistrement = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->sirenetranger = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->numassoetrangere = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->debutexerciceglob1 = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->finexerciceglob1 = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->debutexerciceglob2 = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->finexerciceglob2 = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->debutexerciceglob3 = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->finexerciceglob3 = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->ventesglob1 = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->ventesglob2 = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->ventesglob3 = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->biensglob1 = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->biensglob2 = ($row[$startcol + 36] !== null) ? (string) $row[$startcol + 36] : null;
            $this->biensglob3 = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->servicesglob1 = ($row[$startcol + 38] !== null) ? (string) $row[$startcol + 38] : null;
            $this->servicesglob2 = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->servicesglob3 = ($row[$startcol + 40] !== null) ? (string) $row[$startcol + 40] : null;
            $this->totalglob1 = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->totalglob2 = ($row[$startcol + 42] !== null) ? (string) $row[$startcol + 42] : null;
            $this->totalglob3 = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
            $this->codeape = ($row[$startcol + 44] !== null) ? (string) $row[$startcol + 44] : null;
            $this->origine_compte = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
            $this->telephone = ($row[$startcol + 46] !== null) ? (string) $row[$startcol + 46] : null;
            $this->fax = ($row[$startcol + 47] !== null) ? (string) $row[$startcol + 47] : null;
            $this->site_internet = ($row[$startcol + 48] !== null) ? (string) $row[$startcol + 48] : null;
            $this->description_activite = ($row[$startcol + 49] !== null) ? (string) $row[$startcol + 49] : null;
            $this->activite_domaine_defense = ($row[$startcol + 50] !== null) ? (string) $row[$startcol + 50] : null;
            $this->annee_cloture_exercice1 = ($row[$startcol + 51] !== null) ? (string) $row[$startcol + 51] : null;
            $this->annee_cloture_exercice2 = ($row[$startcol + 52] !== null) ? (string) $row[$startcol + 52] : null;
            $this->annee_cloture_exercice3 = ($row[$startcol + 53] !== null) ? (string) $row[$startcol + 53] : null;
            $this->effectif_moyen1 = ($row[$startcol + 54] !== null) ? (int) $row[$startcol + 54] : null;
            $this->effectif_moyen2 = ($row[$startcol + 55] !== null) ? (int) $row[$startcol + 55] : null;
            $this->effectif_moyen3 = ($row[$startcol + 56] !== null) ? (int) $row[$startcol + 56] : null;
            $this->effectif_encadrement1 = ($row[$startcol + 57] !== null) ? (int) $row[$startcol + 57] : null;
            $this->effectif_encadrement2 = ($row[$startcol + 58] !== null) ? (int) $row[$startcol + 58] : null;
            $this->effectif_encadrement3 = ($row[$startcol + 59] !== null) ? (int) $row[$startcol + 59] : null;
            $this->pme1 = ($row[$startcol + 60] !== null) ? (string) $row[$startcol + 60] : null;
            $this->pme2 = ($row[$startcol + 61] !== null) ? (string) $row[$startcol + 61] : null;
            $this->pme3 = ($row[$startcol + 62] !== null) ? (string) $row[$startcol + 62] : null;
            $this->adresse2 = ($row[$startcol + 63] !== null) ? (string) $row[$startcol + 63] : null;
            $this->nicsiege = ($row[$startcol + 64] !== null) ? (string) $row[$startcol + 64] : null;
            $this->acronyme_pays = ($row[$startcol + 65] !== null) ? (string) $row[$startcol + 65] : null;
            $this->date_creation = ($row[$startcol + 66] !== null) ? (string) $row[$startcol + 66] : null;
            $this->date_modification = ($row[$startcol + 67] !== null) ? (string) $row[$startcol + 67] : null;
            $this->id_initial = ($row[$startcol + 68] !== null) ? (int) $row[$startcol + 68] : null;
            $this->region = ($row[$startcol + 69] !== null) ? (string) $row[$startcol + 69] : null;
            $this->province = ($row[$startcol + 70] !== null) ? (string) $row[$startcol + 70] : null;
            $this->telephone2 = ($row[$startcol + 71] !== null) ? (string) $row[$startcol + 71] : null;
            $this->telephone3 = ($row[$startcol + 72] !== null) ? (string) $row[$startcol + 72] : null;
            $this->cnss = ($row[$startcol + 73] !== null) ? (string) $row[$startcol + 73] : null;
            $this->rc_num = ($row[$startcol + 74] !== null) ? (string) $row[$startcol + 74] : null;
            $this->rc_ville = ($row[$startcol + 75] !== null) ? (string) $row[$startcol + 75] : null;
            $this->domaines_activites = ($row[$startcol + 76] !== null) ? (string) $row[$startcol + 76] : null;
            $this->num_tax = ($row[$startcol + 77] !== null) ? (string) $row[$startcol + 77] : null;
            $this->documents_commerciaux = ($row[$startcol + 78] !== null) ? (int) $row[$startcol + 78] : null;
            $this->intitule_documents_commerciaux = ($row[$startcol + 79] !== null) ? (string) $row[$startcol + 79] : null;
            $this->taille_documents_commerciaux = ($row[$startcol + 80] !== null) ? (string) $row[$startcol + 80] : null;
            $this->qualification = ($row[$startcol + 81] !== null) ? (string) $row[$startcol + 81] : null;
            $this->agrement = ($row[$startcol + 82] !== null) ? (string) $row[$startcol + 82] : null;
            $this->moyens_technique = ($row[$startcol + 83] !== null) ? (string) $row[$startcol + 83] : null;
            $this->moyens_humains = ($row[$startcol + 84] !== null) ? (string) $row[$startcol + 84] : null;
            $this->compte_actif = ($row[$startcol + 85] !== null) ? (int) $row[$startcol + 85] : null;
            $this->capital_social = ($row[$startcol + 86] !== null) ? (string) $row[$startcol + 86] : null;
            $this->ifu = ($row[$startcol + 87] !== null) ? (string) $row[$startcol + 87] : null;
            $this->id_agent_createur = ($row[$startcol + 88] !== null) ? (int) $row[$startcol + 88] : null;
            $this->nom_agent = ($row[$startcol + 89] !== null) ? (string) $row[$startcol + 89] : null;
            $this->prenom_agent = ($row[$startcol + 90] !== null) ? (string) $row[$startcol + 90] : null;
            $this->adresses_electroniques = ($row[$startcol + 91] !== null) ? (string) $row[$startcol + 91] : null;
            $this->visible_bourse = ($row[$startcol + 92] !== null) ? (string) $row[$startcol + 92] : null;
            $this->type_collaboration = ($row[$startcol + 93] !== null) ? (string) $row[$startcol + 93] : null;
            $this->entreprise_ea = ($row[$startcol + 94] !== null) ? (string) $row[$startcol + 94] : null;
            $this->entreprise_siae = ($row[$startcol + 95] !== null) ? (string) $row[$startcol + 95] : null;
            $this->type_entreprise = ($row[$startcol + 96] !== null) ? (string) $row[$startcol + 96] : null;
            $this->note = ($row[$startcol + 97] !== null) ? (int) $row[$startcol + 97] : null;
            $this->code_cpv = ($row[$startcol + 98] !== null) ? (string) $row[$startcol + 98] : null;
            $this->statut_referencement = ($row[$startcol + 99] !== null) ? (int) $row[$startcol + 99] : null;
            $this->taille_entreprise = ($row[$startcol + 100] !== null) ? (int) $row[$startcol + 100] : null;
            $this->identifiant_fiscale = ($row[$startcol + 101] !== null) ? (string) $row[$startcol + 101] : null;
            $this->valide = ($row[$startcol + 102] !== null) ? (boolean) $row[$startcol + 102] : null;
            $this->guid = ($row[$startcol + 103] !== null) ? (string) $row[$startcol + 103] : null;
            $this->geo_id = ($row[$startcol + 104] !== null) ? (string) $row[$startcol + 104] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 105; // 105 = CommonEntreprisePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonEntreprise object", $e);
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
            $con = Propel::getConnection(CommonEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonEntreprisePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonEntrepriseQuery::create()
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
            $con = Propel::getConnection(CommonEntreprisePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonEntreprisePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonEntreprisePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonEntreprisePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonEntreprisePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::ADMIN_ID)) {
            $modifiedColumns[':p' . $index++]  = '`admin_id`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::SIREN)) {
            $modifiedColumns[':p' . $index++]  = '`siren`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::REPMETIERS)) {
            $modifiedColumns[':p' . $index++]  = '`repmetiers`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::NOM)) {
            $modifiedColumns[':p' . $index++]  = '`nom`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::ADRESSE)) {
            $modifiedColumns[':p' . $index++]  = '`adresse`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::CODEPOSTAL)) {
            $modifiedColumns[':p' . $index++]  = '`codepostal`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::VILLEADRESSE)) {
            $modifiedColumns[':p' . $index++]  = '`villeadresse`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::PAYSADRESSE)) {
            $modifiedColumns[':p' . $index++]  = '`paysadresse`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`email`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::TAILLE)) {
            $modifiedColumns[':p' . $index++]  = '`taille`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::FORMEJURIDIQUE)) {
            $modifiedColumns[':p' . $index++]  = '`formejuridique`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::VILLEENREGISTREMENT)) {
            $modifiedColumns[':p' . $index++]  = '`villeenregistrement`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::MOTIFNONINDNUM)) {
            $modifiedColumns[':p' . $index++]  = '`motifNonIndNum`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::ORDREPROFOUAGREMENT)) {
            $modifiedColumns[':p' . $index++]  = '`ordreProfOuAgrement`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::DATECONSTSOCIETE)) {
            $modifiedColumns[':p' . $index++]  = '`dateConstSociete`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::NOMORGINSCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = '`nomOrgInscription`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::ADRORGINSCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = '`adrOrgInscription`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::DATECONSTASSOC)) {
            $modifiedColumns[':p' . $index++]  = '`dateConstAssoc`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::DATECONSTASSOCETRANGERE)) {
            $modifiedColumns[':p' . $index++]  = '`dateConstAssocEtrangere`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::NOMPERSONNEPUBLIQUE)) {
            $modifiedColumns[':p' . $index++]  = '`nomPersonnePublique`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::NATIONALITE)) {
            $modifiedColumns[':p' . $index++]  = '`nationalite`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::REDRESSEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`redressement`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::PAYSENREGISTREMENT)) {
            $modifiedColumns[':p' . $index++]  = '`paysenregistrement`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::SIRENETRANGER)) {
            $modifiedColumns[':p' . $index++]  = '`sirenEtranger`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::NUMASSOETRANGERE)) {
            $modifiedColumns[':p' . $index++]  = '`numAssoEtrangere`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::DEBUTEXERCICEGLOB1)) {
            $modifiedColumns[':p' . $index++]  = '`debutExerciceGlob1`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::FINEXERCICEGLOB1)) {
            $modifiedColumns[':p' . $index++]  = '`finExerciceGlob1`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::DEBUTEXERCICEGLOB2)) {
            $modifiedColumns[':p' . $index++]  = '`debutExerciceGlob2`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::FINEXERCICEGLOB2)) {
            $modifiedColumns[':p' . $index++]  = '`finExerciceGlob2`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::DEBUTEXERCICEGLOB3)) {
            $modifiedColumns[':p' . $index++]  = '`debutExerciceGlob3`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::FINEXERCICEGLOB3)) {
            $modifiedColumns[':p' . $index++]  = '`finExerciceGlob3`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::VENTESGLOB1)) {
            $modifiedColumns[':p' . $index++]  = '`ventesGlob1`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::VENTESGLOB2)) {
            $modifiedColumns[':p' . $index++]  = '`ventesGlob2`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::VENTESGLOB3)) {
            $modifiedColumns[':p' . $index++]  = '`ventesGlob3`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::BIENSGLOB1)) {
            $modifiedColumns[':p' . $index++]  = '`biensGlob1`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::BIENSGLOB2)) {
            $modifiedColumns[':p' . $index++]  = '`biensGlob2`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::BIENSGLOB3)) {
            $modifiedColumns[':p' . $index++]  = '`biensGlob3`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::SERVICESGLOB1)) {
            $modifiedColumns[':p' . $index++]  = '`servicesGlob1`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::SERVICESGLOB2)) {
            $modifiedColumns[':p' . $index++]  = '`servicesGlob2`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::SERVICESGLOB3)) {
            $modifiedColumns[':p' . $index++]  = '`servicesGlob3`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::TOTALGLOB1)) {
            $modifiedColumns[':p' . $index++]  = '`totalGlob1`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::TOTALGLOB2)) {
            $modifiedColumns[':p' . $index++]  = '`totalGlob2`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::TOTALGLOB3)) {
            $modifiedColumns[':p' . $index++]  = '`totalGlob3`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::CODEAPE)) {
            $modifiedColumns[':p' . $index++]  = '`codeape`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::ORIGINE_COMPTE)) {
            $modifiedColumns[':p' . $index++]  = '`origine_compte`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::TELEPHONE)) {
            $modifiedColumns[':p' . $index++]  = '`telephone`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::FAX)) {
            $modifiedColumns[':p' . $index++]  = '`fax`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::SITE_INTERNET)) {
            $modifiedColumns[':p' . $index++]  = '`site_internet`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::DESCRIPTION_ACTIVITE)) {
            $modifiedColumns[':p' . $index++]  = '`description_activite`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::ACTIVITE_DOMAINE_DEFENSE)) {
            $modifiedColumns[':p' . $index++]  = '`activite_domaine_defense`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::ANNEE_CLOTURE_EXERCICE1)) {
            $modifiedColumns[':p' . $index++]  = '`annee_cloture_exercice1`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::ANNEE_CLOTURE_EXERCICE2)) {
            $modifiedColumns[':p' . $index++]  = '`annee_cloture_exercice2`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::ANNEE_CLOTURE_EXERCICE3)) {
            $modifiedColumns[':p' . $index++]  = '`annee_cloture_exercice3`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::EFFECTIF_MOYEN1)) {
            $modifiedColumns[':p' . $index++]  = '`effectif_moyen1`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::EFFECTIF_MOYEN2)) {
            $modifiedColumns[':p' . $index++]  = '`effectif_moyen2`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::EFFECTIF_MOYEN3)) {
            $modifiedColumns[':p' . $index++]  = '`effectif_moyen3`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::EFFECTIF_ENCADREMENT1)) {
            $modifiedColumns[':p' . $index++]  = '`effectif_encadrement1`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::EFFECTIF_ENCADREMENT2)) {
            $modifiedColumns[':p' . $index++]  = '`effectif_encadrement2`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::EFFECTIF_ENCADREMENT3)) {
            $modifiedColumns[':p' . $index++]  = '`effectif_encadrement3`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::PME1)) {
            $modifiedColumns[':p' . $index++]  = '`pme1`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::PME2)) {
            $modifiedColumns[':p' . $index++]  = '`pme2`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::PME3)) {
            $modifiedColumns[':p' . $index++]  = '`pme3`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::ADRESSE2)) {
            $modifiedColumns[':p' . $index++]  = '`adresse2`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::NICSIEGE)) {
            $modifiedColumns[':p' . $index++]  = '`nicSiege`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::ACRONYME_PAYS)) {
            $modifiedColumns[':p' . $index++]  = '`acronyme_pays`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::DATE_CREATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_creation`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::DATE_MODIFICATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_modification`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::ID_INITIAL)) {
            $modifiedColumns[':p' . $index++]  = '`id_initial`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::REGION)) {
            $modifiedColumns[':p' . $index++]  = '`region`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::PROVINCE)) {
            $modifiedColumns[':p' . $index++]  = '`province`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::TELEPHONE2)) {
            $modifiedColumns[':p' . $index++]  = '`telephone2`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::TELEPHONE3)) {
            $modifiedColumns[':p' . $index++]  = '`telephone3`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::CNSS)) {
            $modifiedColumns[':p' . $index++]  = '`cnss`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::RC_NUM)) {
            $modifiedColumns[':p' . $index++]  = '`rc_num`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::RC_VILLE)) {
            $modifiedColumns[':p' . $index++]  = '`rc_ville`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::DOMAINES_ACTIVITES)) {
            $modifiedColumns[':p' . $index++]  = '`domaines_activites`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::NUM_TAX)) {
            $modifiedColumns[':p' . $index++]  = '`num_tax`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::DOCUMENTS_COMMERCIAUX)) {
            $modifiedColumns[':p' . $index++]  = '`documents_commerciaux`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::INTITULE_DOCUMENTS_COMMERCIAUX)) {
            $modifiedColumns[':p' . $index++]  = '`intitule_documents_commerciaux`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::TAILLE_DOCUMENTS_COMMERCIAUX)) {
            $modifiedColumns[':p' . $index++]  = '`taille_documents_commerciaux`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::QUALIFICATION)) {
            $modifiedColumns[':p' . $index++]  = '`qualification`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::AGREMENT)) {
            $modifiedColumns[':p' . $index++]  = '`agrement`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::MOYENS_TECHNIQUE)) {
            $modifiedColumns[':p' . $index++]  = '`moyens_technique`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::MOYENS_HUMAINS)) {
            $modifiedColumns[':p' . $index++]  = '`moyens_humains`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::COMPTE_ACTIF)) {
            $modifiedColumns[':p' . $index++]  = '`compte_actif`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::CAPITAL_SOCIAL)) {
            $modifiedColumns[':p' . $index++]  = '`capital_social`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::IFU)) {
            $modifiedColumns[':p' . $index++]  = '`ifu`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::ID_AGENT_CREATEUR)) {
            $modifiedColumns[':p' . $index++]  = '`id_agent_createur`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::NOM_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`nom_agent`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::PRENOM_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`prenom_agent`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::ADRESSES_ELECTRONIQUES)) {
            $modifiedColumns[':p' . $index++]  = '`adresses_electroniques`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::VISIBLE_BOURSE)) {
            $modifiedColumns[':p' . $index++]  = '`visible_bourse`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::TYPE_COLLABORATION)) {
            $modifiedColumns[':p' . $index++]  = '`type_collaboration`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::ENTREPRISE_EA)) {
            $modifiedColumns[':p' . $index++]  = '`entreprise_EA`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::ENTREPRISE_SIAE)) {
            $modifiedColumns[':p' . $index++]  = '`entreprise_SIAE`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::TYPE_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`type_entreprise`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::NOTE)) {
            $modifiedColumns[':p' . $index++]  = '`note`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::CODE_CPV)) {
            $modifiedColumns[':p' . $index++]  = '`code_cpv`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::STATUT_REFERENCEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`statut_referencement`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::TAILLE_ENTREPRISE)) {
            $modifiedColumns[':p' . $index++]  = '`taille_entreprise`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::IDENTIFIANT_FISCALE)) {
            $modifiedColumns[':p' . $index++]  = '`identifiant_fiscale`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::VALIDE)) {
            $modifiedColumns[':p' . $index++]  = '`valide`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::GUID)) {
            $modifiedColumns[':p' . $index++]  = '`guid`';
        }
        if ($this->isColumnModified(CommonEntreprisePeer::GEO_ID)) {
            $modifiedColumns[':p' . $index++]  = '`geo_id`';
        }

        $sql = sprintf(
            'INSERT INTO `entreprise` (%s) VALUES (%s)',
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
                    case '`admin_id`':						
                        $stmt->bindValue($identifier, $this->admin_id, PDO::PARAM_INT);
                        break;
                    case '`siren`':						
                        $stmt->bindValue($identifier, $this->siren, PDO::PARAM_STR);
                        break;
                    case '`repmetiers`':						
                        $stmt->bindValue($identifier, $this->repmetiers, PDO::PARAM_STR);
                        break;
                    case '`nom`':						
                        $stmt->bindValue($identifier, $this->nom, PDO::PARAM_STR);
                        break;
                    case '`adresse`':						
                        $stmt->bindValue($identifier, $this->adresse, PDO::PARAM_STR);
                        break;
                    case '`codepostal`':						
                        $stmt->bindValue($identifier, $this->codepostal, PDO::PARAM_STR);
                        break;
                    case '`villeadresse`':						
                        $stmt->bindValue($identifier, $this->villeadresse, PDO::PARAM_STR);
                        break;
                    case '`paysadresse`':						
                        $stmt->bindValue($identifier, $this->paysadresse, PDO::PARAM_STR);
                        break;
                    case '`email`':						
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                    case '`taille`':						
                        $stmt->bindValue($identifier, $this->taille, PDO::PARAM_INT);
                        break;
                    case '`formejuridique`':						
                        $stmt->bindValue($identifier, $this->formejuridique, PDO::PARAM_STR);
                        break;
                    case '`villeenregistrement`':						
                        $stmt->bindValue($identifier, $this->villeenregistrement, PDO::PARAM_STR);
                        break;
                    case '`motifNonIndNum`':						
                        $stmt->bindValue($identifier, $this->motifnonindnum, PDO::PARAM_INT);
                        break;
                    case '`ordreProfOuAgrement`':						
                        $stmt->bindValue($identifier, $this->ordreprofouagrement, PDO::PARAM_STR);
                        break;
                    case '`dateConstSociete`':						
                        $stmt->bindValue($identifier, $this->dateconstsociete, PDO::PARAM_STR);
                        break;
                    case '`nomOrgInscription`':						
                        $stmt->bindValue($identifier, $this->nomorginscription, PDO::PARAM_STR);
                        break;
                    case '`adrOrgInscription`':						
                        $stmt->bindValue($identifier, $this->adrorginscription, PDO::PARAM_STR);
                        break;
                    case '`dateConstAssoc`':						
                        $stmt->bindValue($identifier, $this->dateconstassoc, PDO::PARAM_STR);
                        break;
                    case '`dateConstAssocEtrangere`':						
                        $stmt->bindValue($identifier, $this->dateconstassocetrangere, PDO::PARAM_STR);
                        break;
                    case '`nomPersonnePublique`':						
                        $stmt->bindValue($identifier, $this->nompersonnepublique, PDO::PARAM_STR);
                        break;
                    case '`nationalite`':						
                        $stmt->bindValue($identifier, $this->nationalite, PDO::PARAM_STR);
                        break;
                    case '`redressement`':						
                        $stmt->bindValue($identifier, $this->redressement, PDO::PARAM_INT);
                        break;
                    case '`paysenregistrement`':						
                        $stmt->bindValue($identifier, $this->paysenregistrement, PDO::PARAM_STR);
                        break;
                    case '`sirenEtranger`':						
                        $stmt->bindValue($identifier, $this->sirenetranger, PDO::PARAM_STR);
                        break;
                    case '`numAssoEtrangere`':						
                        $stmt->bindValue($identifier, $this->numassoetrangere, PDO::PARAM_STR);
                        break;
                    case '`debutExerciceGlob1`':						
                        $stmt->bindValue($identifier, $this->debutexerciceglob1, PDO::PARAM_STR);
                        break;
                    case '`finExerciceGlob1`':						
                        $stmt->bindValue($identifier, $this->finexerciceglob1, PDO::PARAM_STR);
                        break;
                    case '`debutExerciceGlob2`':						
                        $stmt->bindValue($identifier, $this->debutexerciceglob2, PDO::PARAM_STR);
                        break;
                    case '`finExerciceGlob2`':						
                        $stmt->bindValue($identifier, $this->finexerciceglob2, PDO::PARAM_STR);
                        break;
                    case '`debutExerciceGlob3`':						
                        $stmt->bindValue($identifier, $this->debutexerciceglob3, PDO::PARAM_STR);
                        break;
                    case '`finExerciceGlob3`':						
                        $stmt->bindValue($identifier, $this->finexerciceglob3, PDO::PARAM_STR);
                        break;
                    case '`ventesGlob1`':						
                        $stmt->bindValue($identifier, $this->ventesglob1, PDO::PARAM_STR);
                        break;
                    case '`ventesGlob2`':						
                        $stmt->bindValue($identifier, $this->ventesglob2, PDO::PARAM_STR);
                        break;
                    case '`ventesGlob3`':						
                        $stmt->bindValue($identifier, $this->ventesglob3, PDO::PARAM_STR);
                        break;
                    case '`biensGlob1`':						
                        $stmt->bindValue($identifier, $this->biensglob1, PDO::PARAM_STR);
                        break;
                    case '`biensGlob2`':						
                        $stmt->bindValue($identifier, $this->biensglob2, PDO::PARAM_STR);
                        break;
                    case '`biensGlob3`':						
                        $stmt->bindValue($identifier, $this->biensglob3, PDO::PARAM_STR);
                        break;
                    case '`servicesGlob1`':						
                        $stmt->bindValue($identifier, $this->servicesglob1, PDO::PARAM_STR);
                        break;
                    case '`servicesGlob2`':						
                        $stmt->bindValue($identifier, $this->servicesglob2, PDO::PARAM_STR);
                        break;
                    case '`servicesGlob3`':						
                        $stmt->bindValue($identifier, $this->servicesglob3, PDO::PARAM_STR);
                        break;
                    case '`totalGlob1`':						
                        $stmt->bindValue($identifier, $this->totalglob1, PDO::PARAM_STR);
                        break;
                    case '`totalGlob2`':						
                        $stmt->bindValue($identifier, $this->totalglob2, PDO::PARAM_STR);
                        break;
                    case '`totalGlob3`':						
                        $stmt->bindValue($identifier, $this->totalglob3, PDO::PARAM_STR);
                        break;
                    case '`codeape`':						
                        $stmt->bindValue($identifier, $this->codeape, PDO::PARAM_STR);
                        break;
                    case '`origine_compte`':						
                        $stmt->bindValue($identifier, $this->origine_compte, PDO::PARAM_STR);
                        break;
                    case '`telephone`':						
                        $stmt->bindValue($identifier, $this->telephone, PDO::PARAM_STR);
                        break;
                    case '`fax`':						
                        $stmt->bindValue($identifier, $this->fax, PDO::PARAM_STR);
                        break;
                    case '`site_internet`':						
                        $stmt->bindValue($identifier, $this->site_internet, PDO::PARAM_STR);
                        break;
                    case '`description_activite`':						
                        $stmt->bindValue($identifier, $this->description_activite, PDO::PARAM_STR);
                        break;
                    case '`activite_domaine_defense`':						
                        $stmt->bindValue($identifier, $this->activite_domaine_defense, PDO::PARAM_STR);
                        break;
                    case '`annee_cloture_exercice1`':						
                        $stmt->bindValue($identifier, $this->annee_cloture_exercice1, PDO::PARAM_STR);
                        break;
                    case '`annee_cloture_exercice2`':						
                        $stmt->bindValue($identifier, $this->annee_cloture_exercice2, PDO::PARAM_STR);
                        break;
                    case '`annee_cloture_exercice3`':						
                        $stmt->bindValue($identifier, $this->annee_cloture_exercice3, PDO::PARAM_STR);
                        break;
                    case '`effectif_moyen1`':						
                        $stmt->bindValue($identifier, $this->effectif_moyen1, PDO::PARAM_INT);
                        break;
                    case '`effectif_moyen2`':						
                        $stmt->bindValue($identifier, $this->effectif_moyen2, PDO::PARAM_INT);
                        break;
                    case '`effectif_moyen3`':						
                        $stmt->bindValue($identifier, $this->effectif_moyen3, PDO::PARAM_INT);
                        break;
                    case '`effectif_encadrement1`':						
                        $stmt->bindValue($identifier, $this->effectif_encadrement1, PDO::PARAM_INT);
                        break;
                    case '`effectif_encadrement2`':						
                        $stmt->bindValue($identifier, $this->effectif_encadrement2, PDO::PARAM_INT);
                        break;
                    case '`effectif_encadrement3`':						
                        $stmt->bindValue($identifier, $this->effectif_encadrement3, PDO::PARAM_INT);
                        break;
                    case '`pme1`':						
                        $stmt->bindValue($identifier, $this->pme1, PDO::PARAM_STR);
                        break;
                    case '`pme2`':						
                        $stmt->bindValue($identifier, $this->pme2, PDO::PARAM_STR);
                        break;
                    case '`pme3`':						
                        $stmt->bindValue($identifier, $this->pme3, PDO::PARAM_STR);
                        break;
                    case '`adresse2`':						
                        $stmt->bindValue($identifier, $this->adresse2, PDO::PARAM_STR);
                        break;
                    case '`nicSiege`':						
                        $stmt->bindValue($identifier, $this->nicsiege, PDO::PARAM_STR);
                        break;
                    case '`acronyme_pays`':						
                        $stmt->bindValue($identifier, $this->acronyme_pays, PDO::PARAM_STR);
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
                    case '`region`':						
                        $stmt->bindValue($identifier, $this->region, PDO::PARAM_STR);
                        break;
                    case '`province`':						
                        $stmt->bindValue($identifier, $this->province, PDO::PARAM_STR);
                        break;
                    case '`telephone2`':						
                        $stmt->bindValue($identifier, $this->telephone2, PDO::PARAM_STR);
                        break;
                    case '`telephone3`':						
                        $stmt->bindValue($identifier, $this->telephone3, PDO::PARAM_STR);
                        break;
                    case '`cnss`':						
                        $stmt->bindValue($identifier, $this->cnss, PDO::PARAM_STR);
                        break;
                    case '`rc_num`':						
                        $stmt->bindValue($identifier, $this->rc_num, PDO::PARAM_STR);
                        break;
                    case '`rc_ville`':						
                        $stmt->bindValue($identifier, $this->rc_ville, PDO::PARAM_STR);
                        break;
                    case '`domaines_activites`':						
                        $stmt->bindValue($identifier, $this->domaines_activites, PDO::PARAM_STR);
                        break;
                    case '`num_tax`':						
                        $stmt->bindValue($identifier, $this->num_tax, PDO::PARAM_STR);
                        break;
                    case '`documents_commerciaux`':						
                        $stmt->bindValue($identifier, $this->documents_commerciaux, PDO::PARAM_INT);
                        break;
                    case '`intitule_documents_commerciaux`':						
                        $stmt->bindValue($identifier, $this->intitule_documents_commerciaux, PDO::PARAM_STR);
                        break;
                    case '`taille_documents_commerciaux`':						
                        $stmt->bindValue($identifier, $this->taille_documents_commerciaux, PDO::PARAM_STR);
                        break;
                    case '`qualification`':						
                        $stmt->bindValue($identifier, $this->qualification, PDO::PARAM_STR);
                        break;
                    case '`agrement`':						
                        $stmt->bindValue($identifier, $this->agrement, PDO::PARAM_STR);
                        break;
                    case '`moyens_technique`':						
                        $stmt->bindValue($identifier, $this->moyens_technique, PDO::PARAM_STR);
                        break;
                    case '`moyens_humains`':						
                        $stmt->bindValue($identifier, $this->moyens_humains, PDO::PARAM_STR);
                        break;
                    case '`compte_actif`':						
                        $stmt->bindValue($identifier, $this->compte_actif, PDO::PARAM_INT);
                        break;
                    case '`capital_social`':						
                        $stmt->bindValue($identifier, $this->capital_social, PDO::PARAM_STR);
                        break;
                    case '`ifu`':						
                        $stmt->bindValue($identifier, $this->ifu, PDO::PARAM_STR);
                        break;
                    case '`id_agent_createur`':						
                        $stmt->bindValue($identifier, $this->id_agent_createur, PDO::PARAM_INT);
                        break;
                    case '`nom_agent`':						
                        $stmt->bindValue($identifier, $this->nom_agent, PDO::PARAM_STR);
                        break;
                    case '`prenom_agent`':						
                        $stmt->bindValue($identifier, $this->prenom_agent, PDO::PARAM_STR);
                        break;
                    case '`adresses_electroniques`':						
                        $stmt->bindValue($identifier, $this->adresses_electroniques, PDO::PARAM_STR);
                        break;
                    case '`visible_bourse`':						
                        $stmt->bindValue($identifier, $this->visible_bourse, PDO::PARAM_STR);
                        break;
                    case '`type_collaboration`':						
                        $stmt->bindValue($identifier, $this->type_collaboration, PDO::PARAM_STR);
                        break;
                    case '`entreprise_EA`':						
                        $stmt->bindValue($identifier, $this->entreprise_ea, PDO::PARAM_STR);
                        break;
                    case '`entreprise_SIAE`':						
                        $stmt->bindValue($identifier, $this->entreprise_siae, PDO::PARAM_STR);
                        break;
                    case '`type_entreprise`':						
                        $stmt->bindValue($identifier, $this->type_entreprise, PDO::PARAM_STR);
                        break;
                    case '`note`':						
                        $stmt->bindValue($identifier, $this->note, PDO::PARAM_INT);
                        break;
                    case '`code_cpv`':						
                        $stmt->bindValue($identifier, $this->code_cpv, PDO::PARAM_STR);
                        break;
                    case '`statut_referencement`':						
                        $stmt->bindValue($identifier, $this->statut_referencement, PDO::PARAM_INT);
                        break;
                    case '`taille_entreprise`':						
                        $stmt->bindValue($identifier, $this->taille_entreprise, PDO::PARAM_INT);
                        break;
                    case '`identifiant_fiscale`':						
                        $stmt->bindValue($identifier, $this->identifiant_fiscale, PDO::PARAM_STR);
                        break;
                    case '`valide`':
                        $stmt->bindValue($identifier, (int) $this->valide, PDO::PARAM_INT);
                        break;
                    case '`guid`':						
                        $stmt->bindValue($identifier, $this->guid, PDO::PARAM_STR);
                        break;
                    case '`geo_id`':						
                        $stmt->bindValue($identifier, $this->geo_id, PDO::PARAM_STR);
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


            if (($retval = CommonEntreprisePeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonEntreprisePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getAdminId();
                break;
            case 2:
                return $this->getSiren();
                break;
            case 3:
                return $this->getRepmetiers();
                break;
            case 4:
                return $this->getNom();
                break;
            case 5:
                return $this->getAdresse();
                break;
            case 6:
                return $this->getCodepostal();
                break;
            case 7:
                return $this->getVilleadresse();
                break;
            case 8:
                return $this->getPaysadresse();
                break;
            case 9:
                return $this->getEmail();
                break;
            case 10:
                return $this->getTaille();
                break;
            case 11:
                return $this->getFormejuridique();
                break;
            case 12:
                return $this->getVilleenregistrement();
                break;
            case 13:
                return $this->getMotifnonindnum();
                break;
            case 14:
                return $this->getOrdreprofouagrement();
                break;
            case 15:
                return $this->getDateconstsociete();
                break;
            case 16:
                return $this->getNomorginscription();
                break;
            case 17:
                return $this->getAdrorginscription();
                break;
            case 18:
                return $this->getDateconstassoc();
                break;
            case 19:
                return $this->getDateconstassocetrangere();
                break;
            case 20:
                return $this->getNompersonnepublique();
                break;
            case 21:
                return $this->getNationalite();
                break;
            case 22:
                return $this->getRedressement();
                break;
            case 23:
                return $this->getPaysenregistrement();
                break;
            case 24:
                return $this->getSirenetranger();
                break;
            case 25:
                return $this->getNumassoetrangere();
                break;
            case 26:
                return $this->getDebutexerciceglob1();
                break;
            case 27:
                return $this->getFinexerciceglob1();
                break;
            case 28:
                return $this->getDebutexerciceglob2();
                break;
            case 29:
                return $this->getFinexerciceglob2();
                break;
            case 30:
                return $this->getDebutexerciceglob3();
                break;
            case 31:
                return $this->getFinexerciceglob3();
                break;
            case 32:
                return $this->getVentesglob1();
                break;
            case 33:
                return $this->getVentesglob2();
                break;
            case 34:
                return $this->getVentesglob3();
                break;
            case 35:
                return $this->getBiensglob1();
                break;
            case 36:
                return $this->getBiensglob2();
                break;
            case 37:
                return $this->getBiensglob3();
                break;
            case 38:
                return $this->getServicesglob1();
                break;
            case 39:
                return $this->getServicesglob2();
                break;
            case 40:
                return $this->getServicesglob3();
                break;
            case 41:
                return $this->getTotalglob1();
                break;
            case 42:
                return $this->getTotalglob2();
                break;
            case 43:
                return $this->getTotalglob3();
                break;
            case 44:
                return $this->getCodeape();
                break;
            case 45:
                return $this->getOrigineCompte();
                break;
            case 46:
                return $this->getTelephone();
                break;
            case 47:
                return $this->getFax();
                break;
            case 48:
                return $this->getSiteInternet();
                break;
            case 49:
                return $this->getDescriptionActivite();
                break;
            case 50:
                return $this->getActiviteDomaineDefense();
                break;
            case 51:
                return $this->getAnneeClotureExercice1();
                break;
            case 52:
                return $this->getAnneeClotureExercice2();
                break;
            case 53:
                return $this->getAnneeClotureExercice3();
                break;
            case 54:
                return $this->getEffectifMoyen1();
                break;
            case 55:
                return $this->getEffectifMoyen2();
                break;
            case 56:
                return $this->getEffectifMoyen3();
                break;
            case 57:
                return $this->getEffectifEncadrement1();
                break;
            case 58:
                return $this->getEffectifEncadrement2();
                break;
            case 59:
                return $this->getEffectifEncadrement3();
                break;
            case 60:
                return $this->getPme1();
                break;
            case 61:
                return $this->getPme2();
                break;
            case 62:
                return $this->getPme3();
                break;
            case 63:
                return $this->getAdresse2();
                break;
            case 64:
                return $this->getNicsiege();
                break;
            case 65:
                return $this->getAcronymePays();
                break;
            case 66:
                return $this->getDateCreation();
                break;
            case 67:
                return $this->getDateModification();
                break;
            case 68:
                return $this->getIdInitial();
                break;
            case 69:
                return $this->getRegion();
                break;
            case 70:
                return $this->getProvince();
                break;
            case 71:
                return $this->getTelephone2();
                break;
            case 72:
                return $this->getTelephone3();
                break;
            case 73:
                return $this->getCnss();
                break;
            case 74:
                return $this->getRcNum();
                break;
            case 75:
                return $this->getRcVille();
                break;
            case 76:
                return $this->getDomainesActivites();
                break;
            case 77:
                return $this->getNumTax();
                break;
            case 78:
                return $this->getDocumentsCommerciaux();
                break;
            case 79:
                return $this->getIntituleDocumentsCommerciaux();
                break;
            case 80:
                return $this->getTailleDocumentsCommerciaux();
                break;
            case 81:
                return $this->getQualification();
                break;
            case 82:
                return $this->getAgrement();
                break;
            case 83:
                return $this->getMoyensTechnique();
                break;
            case 84:
                return $this->getMoyensHumains();
                break;
            case 85:
                return $this->getCompteActif();
                break;
            case 86:
                return $this->getCapitalSocial();
                break;
            case 87:
                return $this->getIfu();
                break;
            case 88:
                return $this->getIdAgentCreateur();
                break;
            case 89:
                return $this->getNomAgent();
                break;
            case 90:
                return $this->getPrenomAgent();
                break;
            case 91:
                return $this->getAdressesElectroniques();
                break;
            case 92:
                return $this->getVisibleBourse();
                break;
            case 93:
                return $this->getTypeCollaboration();
                break;
            case 94:
                return $this->getEntrepriseEa();
                break;
            case 95:
                return $this->getEntrepriseSiae();
                break;
            case 96:
                return $this->getTypeEntreprise();
                break;
            case 97:
                return $this->getNote();
                break;
            case 98:
                return $this->getCodeCpv();
                break;
            case 99:
                return $this->getStatutReferencement();
                break;
            case 100:
                return $this->getTailleEntreprise();
                break;
            case 101:
                return $this->getIdentifiantFiscale();
                break;
            case 102:
                return $this->getValide();
                break;
            case 103:
                return $this->getGuid();
                break;
            case 104:
                return $this->getGeoId();
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
        if (isset($alreadyDumpedObjects['CommonEntreprise'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonEntreprise'][$this->getPrimaryKey()] = true;
        $keys = CommonEntreprisePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getAdminId(),
            $keys[2] => $this->getSiren(),
            $keys[3] => $this->getRepmetiers(),
            $keys[4] => $this->getNom(),
            $keys[5] => $this->getAdresse(),
            $keys[6] => $this->getCodepostal(),
            $keys[7] => $this->getVilleadresse(),
            $keys[8] => $this->getPaysadresse(),
            $keys[9] => $this->getEmail(),
            $keys[10] => $this->getTaille(),
            $keys[11] => $this->getFormejuridique(),
            $keys[12] => $this->getVilleenregistrement(),
            $keys[13] => $this->getMotifnonindnum(),
            $keys[14] => $this->getOrdreprofouagrement(),
            $keys[15] => $this->getDateconstsociete(),
            $keys[16] => $this->getNomorginscription(),
            $keys[17] => $this->getAdrorginscription(),
            $keys[18] => $this->getDateconstassoc(),
            $keys[19] => $this->getDateconstassocetrangere(),
            $keys[20] => $this->getNompersonnepublique(),
            $keys[21] => $this->getNationalite(),
            $keys[22] => $this->getRedressement(),
            $keys[23] => $this->getPaysenregistrement(),
            $keys[24] => $this->getSirenetranger(),
            $keys[25] => $this->getNumassoetrangere(),
            $keys[26] => $this->getDebutexerciceglob1(),
            $keys[27] => $this->getFinexerciceglob1(),
            $keys[28] => $this->getDebutexerciceglob2(),
            $keys[29] => $this->getFinexerciceglob2(),
            $keys[30] => $this->getDebutexerciceglob3(),
            $keys[31] => $this->getFinexerciceglob3(),
            $keys[32] => $this->getVentesglob1(),
            $keys[33] => $this->getVentesglob2(),
            $keys[34] => $this->getVentesglob3(),
            $keys[35] => $this->getBiensglob1(),
            $keys[36] => $this->getBiensglob2(),
            $keys[37] => $this->getBiensglob3(),
            $keys[38] => $this->getServicesglob1(),
            $keys[39] => $this->getServicesglob2(),
            $keys[40] => $this->getServicesglob3(),
            $keys[41] => $this->getTotalglob1(),
            $keys[42] => $this->getTotalglob2(),
            $keys[43] => $this->getTotalglob3(),
            $keys[44] => $this->getCodeape(),
            $keys[45] => $this->getOrigineCompte(),
            $keys[46] => $this->getTelephone(),
            $keys[47] => $this->getFax(),
            $keys[48] => $this->getSiteInternet(),
            $keys[49] => $this->getDescriptionActivite(),
            $keys[50] => $this->getActiviteDomaineDefense(),
            $keys[51] => $this->getAnneeClotureExercice1(),
            $keys[52] => $this->getAnneeClotureExercice2(),
            $keys[53] => $this->getAnneeClotureExercice3(),
            $keys[54] => $this->getEffectifMoyen1(),
            $keys[55] => $this->getEffectifMoyen2(),
            $keys[56] => $this->getEffectifMoyen3(),
            $keys[57] => $this->getEffectifEncadrement1(),
            $keys[58] => $this->getEffectifEncadrement2(),
            $keys[59] => $this->getEffectifEncadrement3(),
            $keys[60] => $this->getPme1(),
            $keys[61] => $this->getPme2(),
            $keys[62] => $this->getPme3(),
            $keys[63] => $this->getAdresse2(),
            $keys[64] => $this->getNicsiege(),
            $keys[65] => $this->getAcronymePays(),
            $keys[66] => $this->getDateCreation(),
            $keys[67] => $this->getDateModification(),
            $keys[68] => $this->getIdInitial(),
            $keys[69] => $this->getRegion(),
            $keys[70] => $this->getProvince(),
            $keys[71] => $this->getTelephone2(),
            $keys[72] => $this->getTelephone3(),
            $keys[73] => $this->getCnss(),
            $keys[74] => $this->getRcNum(),
            $keys[75] => $this->getRcVille(),
            $keys[76] => $this->getDomainesActivites(),
            $keys[77] => $this->getNumTax(),
            $keys[78] => $this->getDocumentsCommerciaux(),
            $keys[79] => $this->getIntituleDocumentsCommerciaux(),
            $keys[80] => $this->getTailleDocumentsCommerciaux(),
            $keys[81] => $this->getQualification(),
            $keys[82] => $this->getAgrement(),
            $keys[83] => $this->getMoyensTechnique(),
            $keys[84] => $this->getMoyensHumains(),
            $keys[85] => $this->getCompteActif(),
            $keys[86] => $this->getCapitalSocial(),
            $keys[87] => $this->getIfu(),
            $keys[88] => $this->getIdAgentCreateur(),
            $keys[89] => $this->getNomAgent(),
            $keys[90] => $this->getPrenomAgent(),
            $keys[91] => $this->getAdressesElectroniques(),
            $keys[92] => $this->getVisibleBourse(),
            $keys[93] => $this->getTypeCollaboration(),
            $keys[94] => $this->getEntrepriseEa(),
            $keys[95] => $this->getEntrepriseSiae(),
            $keys[96] => $this->getTypeEntreprise(),
            $keys[97] => $this->getNote(),
            $keys[98] => $this->getCodeCpv(),
            $keys[99] => $this->getStatutReferencement(),
            $keys[100] => $this->getTailleEntreprise(),
            $keys[101] => $this->getIdentifiantFiscale(),
            $keys[102] => $this->getValide(),
            $keys[103] => $this->getGuid(),
            $keys[104] => $this->getGeoId(),
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
        $pos = CommonEntreprisePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setAdminId($value);
                break;
            case 2:
                $this->setSiren($value);
                break;
            case 3:
                $this->setRepmetiers($value);
                break;
            case 4:
                $this->setNom($value);
                break;
            case 5:
                $this->setAdresse($value);
                break;
            case 6:
                $this->setCodepostal($value);
                break;
            case 7:
                $this->setVilleadresse($value);
                break;
            case 8:
                $this->setPaysadresse($value);
                break;
            case 9:
                $this->setEmail($value);
                break;
            case 10:
                $this->setTaille($value);
                break;
            case 11:
                $this->setFormejuridique($value);
                break;
            case 12:
                $this->setVilleenregistrement($value);
                break;
            case 13:
                $this->setMotifnonindnum($value);
                break;
            case 14:
                $this->setOrdreprofouagrement($value);
                break;
            case 15:
                $this->setDateconstsociete($value);
                break;
            case 16:
                $this->setNomorginscription($value);
                break;
            case 17:
                $this->setAdrorginscription($value);
                break;
            case 18:
                $this->setDateconstassoc($value);
                break;
            case 19:
                $this->setDateconstassocetrangere($value);
                break;
            case 20:
                $this->setNompersonnepublique($value);
                break;
            case 21:
                $this->setNationalite($value);
                break;
            case 22:
                $this->setRedressement($value);
                break;
            case 23:
                $this->setPaysenregistrement($value);
                break;
            case 24:
                $this->setSirenetranger($value);
                break;
            case 25:
                $this->setNumassoetrangere($value);
                break;
            case 26:
                $this->setDebutexerciceglob1($value);
                break;
            case 27:
                $this->setFinexerciceglob1($value);
                break;
            case 28:
                $this->setDebutexerciceglob2($value);
                break;
            case 29:
                $this->setFinexerciceglob2($value);
                break;
            case 30:
                $this->setDebutexerciceglob3($value);
                break;
            case 31:
                $this->setFinexerciceglob3($value);
                break;
            case 32:
                $this->setVentesglob1($value);
                break;
            case 33:
                $this->setVentesglob2($value);
                break;
            case 34:
                $this->setVentesglob3($value);
                break;
            case 35:
                $this->setBiensglob1($value);
                break;
            case 36:
                $this->setBiensglob2($value);
                break;
            case 37:
                $this->setBiensglob3($value);
                break;
            case 38:
                $this->setServicesglob1($value);
                break;
            case 39:
                $this->setServicesglob2($value);
                break;
            case 40:
                $this->setServicesglob3($value);
                break;
            case 41:
                $this->setTotalglob1($value);
                break;
            case 42:
                $this->setTotalglob2($value);
                break;
            case 43:
                $this->setTotalglob3($value);
                break;
            case 44:
                $this->setCodeape($value);
                break;
            case 45:
                $this->setOrigineCompte($value);
                break;
            case 46:
                $this->setTelephone($value);
                break;
            case 47:
                $this->setFax($value);
                break;
            case 48:
                $this->setSiteInternet($value);
                break;
            case 49:
                $this->setDescriptionActivite($value);
                break;
            case 50:
                $this->setActiviteDomaineDefense($value);
                break;
            case 51:
                $this->setAnneeClotureExercice1($value);
                break;
            case 52:
                $this->setAnneeClotureExercice2($value);
                break;
            case 53:
                $this->setAnneeClotureExercice3($value);
                break;
            case 54:
                $this->setEffectifMoyen1($value);
                break;
            case 55:
                $this->setEffectifMoyen2($value);
                break;
            case 56:
                $this->setEffectifMoyen3($value);
                break;
            case 57:
                $this->setEffectifEncadrement1($value);
                break;
            case 58:
                $this->setEffectifEncadrement2($value);
                break;
            case 59:
                $this->setEffectifEncadrement3($value);
                break;
            case 60:
                $this->setPme1($value);
                break;
            case 61:
                $this->setPme2($value);
                break;
            case 62:
                $this->setPme3($value);
                break;
            case 63:
                $this->setAdresse2($value);
                break;
            case 64:
                $this->setNicsiege($value);
                break;
            case 65:
                $this->setAcronymePays($value);
                break;
            case 66:
                $this->setDateCreation($value);
                break;
            case 67:
                $this->setDateModification($value);
                break;
            case 68:
                $this->setIdInitial($value);
                break;
            case 69:
                $this->setRegion($value);
                break;
            case 70:
                $this->setProvince($value);
                break;
            case 71:
                $this->setTelephone2($value);
                break;
            case 72:
                $this->setTelephone3($value);
                break;
            case 73:
                $this->setCnss($value);
                break;
            case 74:
                $this->setRcNum($value);
                break;
            case 75:
                $this->setRcVille($value);
                break;
            case 76:
                $this->setDomainesActivites($value);
                break;
            case 77:
                $this->setNumTax($value);
                break;
            case 78:
                $this->setDocumentsCommerciaux($value);
                break;
            case 79:
                $this->setIntituleDocumentsCommerciaux($value);
                break;
            case 80:
                $this->setTailleDocumentsCommerciaux($value);
                break;
            case 81:
                $this->setQualification($value);
                break;
            case 82:
                $this->setAgrement($value);
                break;
            case 83:
                $this->setMoyensTechnique($value);
                break;
            case 84:
                $this->setMoyensHumains($value);
                break;
            case 85:
                $this->setCompteActif($value);
                break;
            case 86:
                $this->setCapitalSocial($value);
                break;
            case 87:
                $this->setIfu($value);
                break;
            case 88:
                $this->setIdAgentCreateur($value);
                break;
            case 89:
                $this->setNomAgent($value);
                break;
            case 90:
                $this->setPrenomAgent($value);
                break;
            case 91:
                $this->setAdressesElectroniques($value);
                break;
            case 92:
                $this->setVisibleBourse($value);
                break;
            case 93:
                $this->setTypeCollaboration($value);
                break;
            case 94:
                $this->setEntrepriseEa($value);
                break;
            case 95:
                $this->setEntrepriseSiae($value);
                break;
            case 96:
                $this->setTypeEntreprise($value);
                break;
            case 97:
                $this->setNote($value);
                break;
            case 98:
                $this->setCodeCpv($value);
                break;
            case 99:
                $this->setStatutReferencement($value);
                break;
            case 100:
                $this->setTailleEntreprise($value);
                break;
            case 101:
                $this->setIdentifiantFiscale($value);
                break;
            case 102:
                $this->setValide($value);
                break;
            case 103:
                $this->setGuid($value);
                break;
            case 104:
                $this->setGeoId($value);
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
        $keys = CommonEntreprisePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setAdminId($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setSiren($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setRepmetiers($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setNom($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setAdresse($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setCodepostal($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setVilleadresse($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setPaysadresse($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setEmail($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setTaille($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setFormejuridique($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setVilleenregistrement($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setMotifnonindnum($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setOrdreprofouagrement($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setDateconstsociete($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setNomorginscription($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setAdrorginscription($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setDateconstassoc($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setDateconstassocetrangere($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setNompersonnepublique($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setNationalite($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setRedressement($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setPaysenregistrement($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setSirenetranger($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setNumassoetrangere($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setDebutexerciceglob1($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setFinexerciceglob1($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setDebutexerciceglob2($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setFinexerciceglob2($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setDebutexerciceglob3($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setFinexerciceglob3($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setVentesglob1($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setVentesglob2($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setVentesglob3($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setBiensglob1($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setBiensglob2($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setBiensglob3($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setServicesglob1($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setServicesglob2($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setServicesglob3($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setTotalglob1($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setTotalglob2($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setTotalglob3($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setCodeape($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setOrigineCompte($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setTelephone($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setFax($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setSiteInternet($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setDescriptionActivite($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setActiviteDomaineDefense($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setAnneeClotureExercice1($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setAnneeClotureExercice2($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setAnneeClotureExercice3($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setEffectifMoyen1($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setEffectifMoyen2($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setEffectifMoyen3($arr[$keys[56]]);
        if (array_key_exists($keys[57], $arr)) $this->setEffectifEncadrement1($arr[$keys[57]]);
        if (array_key_exists($keys[58], $arr)) $this->setEffectifEncadrement2($arr[$keys[58]]);
        if (array_key_exists($keys[59], $arr)) $this->setEffectifEncadrement3($arr[$keys[59]]);
        if (array_key_exists($keys[60], $arr)) $this->setPme1($arr[$keys[60]]);
        if (array_key_exists($keys[61], $arr)) $this->setPme2($arr[$keys[61]]);
        if (array_key_exists($keys[62], $arr)) $this->setPme3($arr[$keys[62]]);
        if (array_key_exists($keys[63], $arr)) $this->setAdresse2($arr[$keys[63]]);
        if (array_key_exists($keys[64], $arr)) $this->setNicsiege($arr[$keys[64]]);
        if (array_key_exists($keys[65], $arr)) $this->setAcronymePays($arr[$keys[65]]);
        if (array_key_exists($keys[66], $arr)) $this->setDateCreation($arr[$keys[66]]);
        if (array_key_exists($keys[67], $arr)) $this->setDateModification($arr[$keys[67]]);
        if (array_key_exists($keys[68], $arr)) $this->setIdInitial($arr[$keys[68]]);
        if (array_key_exists($keys[69], $arr)) $this->setRegion($arr[$keys[69]]);
        if (array_key_exists($keys[70], $arr)) $this->setProvince($arr[$keys[70]]);
        if (array_key_exists($keys[71], $arr)) $this->setTelephone2($arr[$keys[71]]);
        if (array_key_exists($keys[72], $arr)) $this->setTelephone3($arr[$keys[72]]);
        if (array_key_exists($keys[73], $arr)) $this->setCnss($arr[$keys[73]]);
        if (array_key_exists($keys[74], $arr)) $this->setRcNum($arr[$keys[74]]);
        if (array_key_exists($keys[75], $arr)) $this->setRcVille($arr[$keys[75]]);
        if (array_key_exists($keys[76], $arr)) $this->setDomainesActivites($arr[$keys[76]]);
        if (array_key_exists($keys[77], $arr)) $this->setNumTax($arr[$keys[77]]);
        if (array_key_exists($keys[78], $arr)) $this->setDocumentsCommerciaux($arr[$keys[78]]);
        if (array_key_exists($keys[79], $arr)) $this->setIntituleDocumentsCommerciaux($arr[$keys[79]]);
        if (array_key_exists($keys[80], $arr)) $this->setTailleDocumentsCommerciaux($arr[$keys[80]]);
        if (array_key_exists($keys[81], $arr)) $this->setQualification($arr[$keys[81]]);
        if (array_key_exists($keys[82], $arr)) $this->setAgrement($arr[$keys[82]]);
        if (array_key_exists($keys[83], $arr)) $this->setMoyensTechnique($arr[$keys[83]]);
        if (array_key_exists($keys[84], $arr)) $this->setMoyensHumains($arr[$keys[84]]);
        if (array_key_exists($keys[85], $arr)) $this->setCompteActif($arr[$keys[85]]);
        if (array_key_exists($keys[86], $arr)) $this->setCapitalSocial($arr[$keys[86]]);
        if (array_key_exists($keys[87], $arr)) $this->setIfu($arr[$keys[87]]);
        if (array_key_exists($keys[88], $arr)) $this->setIdAgentCreateur($arr[$keys[88]]);
        if (array_key_exists($keys[89], $arr)) $this->setNomAgent($arr[$keys[89]]);
        if (array_key_exists($keys[90], $arr)) $this->setPrenomAgent($arr[$keys[90]]);
        if (array_key_exists($keys[91], $arr)) $this->setAdressesElectroniques($arr[$keys[91]]);
        if (array_key_exists($keys[92], $arr)) $this->setVisibleBourse($arr[$keys[92]]);
        if (array_key_exists($keys[93], $arr)) $this->setTypeCollaboration($arr[$keys[93]]);
        if (array_key_exists($keys[94], $arr)) $this->setEntrepriseEa($arr[$keys[94]]);
        if (array_key_exists($keys[95], $arr)) $this->setEntrepriseSiae($arr[$keys[95]]);
        if (array_key_exists($keys[96], $arr)) $this->setTypeEntreprise($arr[$keys[96]]);
        if (array_key_exists($keys[97], $arr)) $this->setNote($arr[$keys[97]]);
        if (array_key_exists($keys[98], $arr)) $this->setCodeCpv($arr[$keys[98]]);
        if (array_key_exists($keys[99], $arr)) $this->setStatutReferencement($arr[$keys[99]]);
        if (array_key_exists($keys[100], $arr)) $this->setTailleEntreprise($arr[$keys[100]]);
        if (array_key_exists($keys[101], $arr)) $this->setIdentifiantFiscale($arr[$keys[101]]);
        if (array_key_exists($keys[102], $arr)) $this->setValide($arr[$keys[102]]);
        if (array_key_exists($keys[103], $arr)) $this->setGuid($arr[$keys[103]]);
        if (array_key_exists($keys[104], $arr)) $this->setGeoId($arr[$keys[104]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonEntreprisePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonEntreprisePeer::ID)) $criteria->add(CommonEntreprisePeer::ID, $this->id);
        if ($this->isColumnModified(CommonEntreprisePeer::ADMIN_ID)) $criteria->add(CommonEntreprisePeer::ADMIN_ID, $this->admin_id);
        if ($this->isColumnModified(CommonEntreprisePeer::SIREN)) $criteria->add(CommonEntreprisePeer::SIREN, $this->siren);
        if ($this->isColumnModified(CommonEntreprisePeer::REPMETIERS)) $criteria->add(CommonEntreprisePeer::REPMETIERS, $this->repmetiers);
        if ($this->isColumnModified(CommonEntreprisePeer::NOM)) $criteria->add(CommonEntreprisePeer::NOM, $this->nom);
        if ($this->isColumnModified(CommonEntreprisePeer::ADRESSE)) $criteria->add(CommonEntreprisePeer::ADRESSE, $this->adresse);
        if ($this->isColumnModified(CommonEntreprisePeer::CODEPOSTAL)) $criteria->add(CommonEntreprisePeer::CODEPOSTAL, $this->codepostal);
        if ($this->isColumnModified(CommonEntreprisePeer::VILLEADRESSE)) $criteria->add(CommonEntreprisePeer::VILLEADRESSE, $this->villeadresse);
        if ($this->isColumnModified(CommonEntreprisePeer::PAYSADRESSE)) $criteria->add(CommonEntreprisePeer::PAYSADRESSE, $this->paysadresse);
        if ($this->isColumnModified(CommonEntreprisePeer::EMAIL)) $criteria->add(CommonEntreprisePeer::EMAIL, $this->email);
        if ($this->isColumnModified(CommonEntreprisePeer::TAILLE)) $criteria->add(CommonEntreprisePeer::TAILLE, $this->taille);
        if ($this->isColumnModified(CommonEntreprisePeer::FORMEJURIDIQUE)) $criteria->add(CommonEntreprisePeer::FORMEJURIDIQUE, $this->formejuridique);
        if ($this->isColumnModified(CommonEntreprisePeer::VILLEENREGISTREMENT)) $criteria->add(CommonEntreprisePeer::VILLEENREGISTREMENT, $this->villeenregistrement);
        if ($this->isColumnModified(CommonEntreprisePeer::MOTIFNONINDNUM)) $criteria->add(CommonEntreprisePeer::MOTIFNONINDNUM, $this->motifnonindnum);
        if ($this->isColumnModified(CommonEntreprisePeer::ORDREPROFOUAGREMENT)) $criteria->add(CommonEntreprisePeer::ORDREPROFOUAGREMENT, $this->ordreprofouagrement);
        if ($this->isColumnModified(CommonEntreprisePeer::DATECONSTSOCIETE)) $criteria->add(CommonEntreprisePeer::DATECONSTSOCIETE, $this->dateconstsociete);
        if ($this->isColumnModified(CommonEntreprisePeer::NOMORGINSCRIPTION)) $criteria->add(CommonEntreprisePeer::NOMORGINSCRIPTION, $this->nomorginscription);
        if ($this->isColumnModified(CommonEntreprisePeer::ADRORGINSCRIPTION)) $criteria->add(CommonEntreprisePeer::ADRORGINSCRIPTION, $this->adrorginscription);
        if ($this->isColumnModified(CommonEntreprisePeer::DATECONSTASSOC)) $criteria->add(CommonEntreprisePeer::DATECONSTASSOC, $this->dateconstassoc);
        if ($this->isColumnModified(CommonEntreprisePeer::DATECONSTASSOCETRANGERE)) $criteria->add(CommonEntreprisePeer::DATECONSTASSOCETRANGERE, $this->dateconstassocetrangere);
        if ($this->isColumnModified(CommonEntreprisePeer::NOMPERSONNEPUBLIQUE)) $criteria->add(CommonEntreprisePeer::NOMPERSONNEPUBLIQUE, $this->nompersonnepublique);
        if ($this->isColumnModified(CommonEntreprisePeer::NATIONALITE)) $criteria->add(CommonEntreprisePeer::NATIONALITE, $this->nationalite);
        if ($this->isColumnModified(CommonEntreprisePeer::REDRESSEMENT)) $criteria->add(CommonEntreprisePeer::REDRESSEMENT, $this->redressement);
        if ($this->isColumnModified(CommonEntreprisePeer::PAYSENREGISTREMENT)) $criteria->add(CommonEntreprisePeer::PAYSENREGISTREMENT, $this->paysenregistrement);
        if ($this->isColumnModified(CommonEntreprisePeer::SIRENETRANGER)) $criteria->add(CommonEntreprisePeer::SIRENETRANGER, $this->sirenetranger);
        if ($this->isColumnModified(CommonEntreprisePeer::NUMASSOETRANGERE)) $criteria->add(CommonEntreprisePeer::NUMASSOETRANGERE, $this->numassoetrangere);
        if ($this->isColumnModified(CommonEntreprisePeer::DEBUTEXERCICEGLOB1)) $criteria->add(CommonEntreprisePeer::DEBUTEXERCICEGLOB1, $this->debutexerciceglob1);
        if ($this->isColumnModified(CommonEntreprisePeer::FINEXERCICEGLOB1)) $criteria->add(CommonEntreprisePeer::FINEXERCICEGLOB1, $this->finexerciceglob1);
        if ($this->isColumnModified(CommonEntreprisePeer::DEBUTEXERCICEGLOB2)) $criteria->add(CommonEntreprisePeer::DEBUTEXERCICEGLOB2, $this->debutexerciceglob2);
        if ($this->isColumnModified(CommonEntreprisePeer::FINEXERCICEGLOB2)) $criteria->add(CommonEntreprisePeer::FINEXERCICEGLOB2, $this->finexerciceglob2);
        if ($this->isColumnModified(CommonEntreprisePeer::DEBUTEXERCICEGLOB3)) $criteria->add(CommonEntreprisePeer::DEBUTEXERCICEGLOB3, $this->debutexerciceglob3);
        if ($this->isColumnModified(CommonEntreprisePeer::FINEXERCICEGLOB3)) $criteria->add(CommonEntreprisePeer::FINEXERCICEGLOB3, $this->finexerciceglob3);
        if ($this->isColumnModified(CommonEntreprisePeer::VENTESGLOB1)) $criteria->add(CommonEntreprisePeer::VENTESGLOB1, $this->ventesglob1);
        if ($this->isColumnModified(CommonEntreprisePeer::VENTESGLOB2)) $criteria->add(CommonEntreprisePeer::VENTESGLOB2, $this->ventesglob2);
        if ($this->isColumnModified(CommonEntreprisePeer::VENTESGLOB3)) $criteria->add(CommonEntreprisePeer::VENTESGLOB3, $this->ventesglob3);
        if ($this->isColumnModified(CommonEntreprisePeer::BIENSGLOB1)) $criteria->add(CommonEntreprisePeer::BIENSGLOB1, $this->biensglob1);
        if ($this->isColumnModified(CommonEntreprisePeer::BIENSGLOB2)) $criteria->add(CommonEntreprisePeer::BIENSGLOB2, $this->biensglob2);
        if ($this->isColumnModified(CommonEntreprisePeer::BIENSGLOB3)) $criteria->add(CommonEntreprisePeer::BIENSGLOB3, $this->biensglob3);
        if ($this->isColumnModified(CommonEntreprisePeer::SERVICESGLOB1)) $criteria->add(CommonEntreprisePeer::SERVICESGLOB1, $this->servicesglob1);
        if ($this->isColumnModified(CommonEntreprisePeer::SERVICESGLOB2)) $criteria->add(CommonEntreprisePeer::SERVICESGLOB2, $this->servicesglob2);
        if ($this->isColumnModified(CommonEntreprisePeer::SERVICESGLOB3)) $criteria->add(CommonEntreprisePeer::SERVICESGLOB3, $this->servicesglob3);
        if ($this->isColumnModified(CommonEntreprisePeer::TOTALGLOB1)) $criteria->add(CommonEntreprisePeer::TOTALGLOB1, $this->totalglob1);
        if ($this->isColumnModified(CommonEntreprisePeer::TOTALGLOB2)) $criteria->add(CommonEntreprisePeer::TOTALGLOB2, $this->totalglob2);
        if ($this->isColumnModified(CommonEntreprisePeer::TOTALGLOB3)) $criteria->add(CommonEntreprisePeer::TOTALGLOB3, $this->totalglob3);
        if ($this->isColumnModified(CommonEntreprisePeer::CODEAPE)) $criteria->add(CommonEntreprisePeer::CODEAPE, $this->codeape);
        if ($this->isColumnModified(CommonEntreprisePeer::ORIGINE_COMPTE)) $criteria->add(CommonEntreprisePeer::ORIGINE_COMPTE, $this->origine_compte);
        if ($this->isColumnModified(CommonEntreprisePeer::TELEPHONE)) $criteria->add(CommonEntreprisePeer::TELEPHONE, $this->telephone);
        if ($this->isColumnModified(CommonEntreprisePeer::FAX)) $criteria->add(CommonEntreprisePeer::FAX, $this->fax);
        if ($this->isColumnModified(CommonEntreprisePeer::SITE_INTERNET)) $criteria->add(CommonEntreprisePeer::SITE_INTERNET, $this->site_internet);
        if ($this->isColumnModified(CommonEntreprisePeer::DESCRIPTION_ACTIVITE)) $criteria->add(CommonEntreprisePeer::DESCRIPTION_ACTIVITE, $this->description_activite);
        if ($this->isColumnModified(CommonEntreprisePeer::ACTIVITE_DOMAINE_DEFENSE)) $criteria->add(CommonEntreprisePeer::ACTIVITE_DOMAINE_DEFENSE, $this->activite_domaine_defense);
        if ($this->isColumnModified(CommonEntreprisePeer::ANNEE_CLOTURE_EXERCICE1)) $criteria->add(CommonEntreprisePeer::ANNEE_CLOTURE_EXERCICE1, $this->annee_cloture_exercice1);
        if ($this->isColumnModified(CommonEntreprisePeer::ANNEE_CLOTURE_EXERCICE2)) $criteria->add(CommonEntreprisePeer::ANNEE_CLOTURE_EXERCICE2, $this->annee_cloture_exercice2);
        if ($this->isColumnModified(CommonEntreprisePeer::ANNEE_CLOTURE_EXERCICE3)) $criteria->add(CommonEntreprisePeer::ANNEE_CLOTURE_EXERCICE3, $this->annee_cloture_exercice3);
        if ($this->isColumnModified(CommonEntreprisePeer::EFFECTIF_MOYEN1)) $criteria->add(CommonEntreprisePeer::EFFECTIF_MOYEN1, $this->effectif_moyen1);
        if ($this->isColumnModified(CommonEntreprisePeer::EFFECTIF_MOYEN2)) $criteria->add(CommonEntreprisePeer::EFFECTIF_MOYEN2, $this->effectif_moyen2);
        if ($this->isColumnModified(CommonEntreprisePeer::EFFECTIF_MOYEN3)) $criteria->add(CommonEntreprisePeer::EFFECTIF_MOYEN3, $this->effectif_moyen3);
        if ($this->isColumnModified(CommonEntreprisePeer::EFFECTIF_ENCADREMENT1)) $criteria->add(CommonEntreprisePeer::EFFECTIF_ENCADREMENT1, $this->effectif_encadrement1);
        if ($this->isColumnModified(CommonEntreprisePeer::EFFECTIF_ENCADREMENT2)) $criteria->add(CommonEntreprisePeer::EFFECTIF_ENCADREMENT2, $this->effectif_encadrement2);
        if ($this->isColumnModified(CommonEntreprisePeer::EFFECTIF_ENCADREMENT3)) $criteria->add(CommonEntreprisePeer::EFFECTIF_ENCADREMENT3, $this->effectif_encadrement3);
        if ($this->isColumnModified(CommonEntreprisePeer::PME1)) $criteria->add(CommonEntreprisePeer::PME1, $this->pme1);
        if ($this->isColumnModified(CommonEntreprisePeer::PME2)) $criteria->add(CommonEntreprisePeer::PME2, $this->pme2);
        if ($this->isColumnModified(CommonEntreprisePeer::PME3)) $criteria->add(CommonEntreprisePeer::PME3, $this->pme3);
        if ($this->isColumnModified(CommonEntreprisePeer::ADRESSE2)) $criteria->add(CommonEntreprisePeer::ADRESSE2, $this->adresse2);
        if ($this->isColumnModified(CommonEntreprisePeer::NICSIEGE)) $criteria->add(CommonEntreprisePeer::NICSIEGE, $this->nicsiege);
        if ($this->isColumnModified(CommonEntreprisePeer::ACRONYME_PAYS)) $criteria->add(CommonEntreprisePeer::ACRONYME_PAYS, $this->acronyme_pays);
        if ($this->isColumnModified(CommonEntreprisePeer::DATE_CREATION)) $criteria->add(CommonEntreprisePeer::DATE_CREATION, $this->date_creation);
        if ($this->isColumnModified(CommonEntreprisePeer::DATE_MODIFICATION)) $criteria->add(CommonEntreprisePeer::DATE_MODIFICATION, $this->date_modification);
        if ($this->isColumnModified(CommonEntreprisePeer::ID_INITIAL)) $criteria->add(CommonEntreprisePeer::ID_INITIAL, $this->id_initial);
        if ($this->isColumnModified(CommonEntreprisePeer::REGION)) $criteria->add(CommonEntreprisePeer::REGION, $this->region);
        if ($this->isColumnModified(CommonEntreprisePeer::PROVINCE)) $criteria->add(CommonEntreprisePeer::PROVINCE, $this->province);
        if ($this->isColumnModified(CommonEntreprisePeer::TELEPHONE2)) $criteria->add(CommonEntreprisePeer::TELEPHONE2, $this->telephone2);
        if ($this->isColumnModified(CommonEntreprisePeer::TELEPHONE3)) $criteria->add(CommonEntreprisePeer::TELEPHONE3, $this->telephone3);
        if ($this->isColumnModified(CommonEntreprisePeer::CNSS)) $criteria->add(CommonEntreprisePeer::CNSS, $this->cnss);
        if ($this->isColumnModified(CommonEntreprisePeer::RC_NUM)) $criteria->add(CommonEntreprisePeer::RC_NUM, $this->rc_num);
        if ($this->isColumnModified(CommonEntreprisePeer::RC_VILLE)) $criteria->add(CommonEntreprisePeer::RC_VILLE, $this->rc_ville);
        if ($this->isColumnModified(CommonEntreprisePeer::DOMAINES_ACTIVITES)) $criteria->add(CommonEntreprisePeer::DOMAINES_ACTIVITES, $this->domaines_activites);
        if ($this->isColumnModified(CommonEntreprisePeer::NUM_TAX)) $criteria->add(CommonEntreprisePeer::NUM_TAX, $this->num_tax);
        if ($this->isColumnModified(CommonEntreprisePeer::DOCUMENTS_COMMERCIAUX)) $criteria->add(CommonEntreprisePeer::DOCUMENTS_COMMERCIAUX, $this->documents_commerciaux);
        if ($this->isColumnModified(CommonEntreprisePeer::INTITULE_DOCUMENTS_COMMERCIAUX)) $criteria->add(CommonEntreprisePeer::INTITULE_DOCUMENTS_COMMERCIAUX, $this->intitule_documents_commerciaux);
        if ($this->isColumnModified(CommonEntreprisePeer::TAILLE_DOCUMENTS_COMMERCIAUX)) $criteria->add(CommonEntreprisePeer::TAILLE_DOCUMENTS_COMMERCIAUX, $this->taille_documents_commerciaux);
        if ($this->isColumnModified(CommonEntreprisePeer::QUALIFICATION)) $criteria->add(CommonEntreprisePeer::QUALIFICATION, $this->qualification);
        if ($this->isColumnModified(CommonEntreprisePeer::AGREMENT)) $criteria->add(CommonEntreprisePeer::AGREMENT, $this->agrement);
        if ($this->isColumnModified(CommonEntreprisePeer::MOYENS_TECHNIQUE)) $criteria->add(CommonEntreprisePeer::MOYENS_TECHNIQUE, $this->moyens_technique);
        if ($this->isColumnModified(CommonEntreprisePeer::MOYENS_HUMAINS)) $criteria->add(CommonEntreprisePeer::MOYENS_HUMAINS, $this->moyens_humains);
        if ($this->isColumnModified(CommonEntreprisePeer::COMPTE_ACTIF)) $criteria->add(CommonEntreprisePeer::COMPTE_ACTIF, $this->compte_actif);
        if ($this->isColumnModified(CommonEntreprisePeer::CAPITAL_SOCIAL)) $criteria->add(CommonEntreprisePeer::CAPITAL_SOCIAL, $this->capital_social);
        if ($this->isColumnModified(CommonEntreprisePeer::IFU)) $criteria->add(CommonEntreprisePeer::IFU, $this->ifu);
        if ($this->isColumnModified(CommonEntreprisePeer::ID_AGENT_CREATEUR)) $criteria->add(CommonEntreprisePeer::ID_AGENT_CREATEUR, $this->id_agent_createur);
        if ($this->isColumnModified(CommonEntreprisePeer::NOM_AGENT)) $criteria->add(CommonEntreprisePeer::NOM_AGENT, $this->nom_agent);
        if ($this->isColumnModified(CommonEntreprisePeer::PRENOM_AGENT)) $criteria->add(CommonEntreprisePeer::PRENOM_AGENT, $this->prenom_agent);
        if ($this->isColumnModified(CommonEntreprisePeer::ADRESSES_ELECTRONIQUES)) $criteria->add(CommonEntreprisePeer::ADRESSES_ELECTRONIQUES, $this->adresses_electroniques);
        if ($this->isColumnModified(CommonEntreprisePeer::VISIBLE_BOURSE)) $criteria->add(CommonEntreprisePeer::VISIBLE_BOURSE, $this->visible_bourse);
        if ($this->isColumnModified(CommonEntreprisePeer::TYPE_COLLABORATION)) $criteria->add(CommonEntreprisePeer::TYPE_COLLABORATION, $this->type_collaboration);
        if ($this->isColumnModified(CommonEntreprisePeer::ENTREPRISE_EA)) $criteria->add(CommonEntreprisePeer::ENTREPRISE_EA, $this->entreprise_ea);
        if ($this->isColumnModified(CommonEntreprisePeer::ENTREPRISE_SIAE)) $criteria->add(CommonEntreprisePeer::ENTREPRISE_SIAE, $this->entreprise_siae);
        if ($this->isColumnModified(CommonEntreprisePeer::TYPE_ENTREPRISE)) $criteria->add(CommonEntreprisePeer::TYPE_ENTREPRISE, $this->type_entreprise);
        if ($this->isColumnModified(CommonEntreprisePeer::NOTE)) $criteria->add(CommonEntreprisePeer::NOTE, $this->note);
        if ($this->isColumnModified(CommonEntreprisePeer::CODE_CPV)) $criteria->add(CommonEntreprisePeer::CODE_CPV, $this->code_cpv);
        if ($this->isColumnModified(CommonEntreprisePeer::STATUT_REFERENCEMENT)) $criteria->add(CommonEntreprisePeer::STATUT_REFERENCEMENT, $this->statut_referencement);
        if ($this->isColumnModified(CommonEntreprisePeer::TAILLE_ENTREPRISE)) $criteria->add(CommonEntreprisePeer::TAILLE_ENTREPRISE, $this->taille_entreprise);
        if ($this->isColumnModified(CommonEntreprisePeer::IDENTIFIANT_FISCALE)) $criteria->add(CommonEntreprisePeer::IDENTIFIANT_FISCALE, $this->identifiant_fiscale);
        if ($this->isColumnModified(CommonEntreprisePeer::VALIDE)) $criteria->add(CommonEntreprisePeer::VALIDE, $this->valide);
        if ($this->isColumnModified(CommonEntreprisePeer::GUID)) $criteria->add(CommonEntreprisePeer::GUID, $this->guid);
        if ($this->isColumnModified(CommonEntreprisePeer::GEO_ID)) $criteria->add(CommonEntreprisePeer::GEO_ID, $this->geo_id);

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
        $criteria = new Criteria(CommonEntreprisePeer::DATABASE_NAME);
        $criteria->add(CommonEntreprisePeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonEntreprise (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setAdminId($this->getAdminId());
        $copyObj->setSiren($this->getSiren());
        $copyObj->setRepmetiers($this->getRepmetiers());
        $copyObj->setNom($this->getNom());
        $copyObj->setAdresse($this->getAdresse());
        $copyObj->setCodepostal($this->getCodepostal());
        $copyObj->setVilleadresse($this->getVilleadresse());
        $copyObj->setPaysadresse($this->getPaysadresse());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setTaille($this->getTaille());
        $copyObj->setFormejuridique($this->getFormejuridique());
        $copyObj->setVilleenregistrement($this->getVilleenregistrement());
        $copyObj->setMotifnonindnum($this->getMotifnonindnum());
        $copyObj->setOrdreprofouagrement($this->getOrdreprofouagrement());
        $copyObj->setDateconstsociete($this->getDateconstsociete());
        $copyObj->setNomorginscription($this->getNomorginscription());
        $copyObj->setAdrorginscription($this->getAdrorginscription());
        $copyObj->setDateconstassoc($this->getDateconstassoc());
        $copyObj->setDateconstassocetrangere($this->getDateconstassocetrangere());
        $copyObj->setNompersonnepublique($this->getNompersonnepublique());
        $copyObj->setNationalite($this->getNationalite());
        $copyObj->setRedressement($this->getRedressement());
        $copyObj->setPaysenregistrement($this->getPaysenregistrement());
        $copyObj->setSirenetranger($this->getSirenetranger());
        $copyObj->setNumassoetrangere($this->getNumassoetrangere());
        $copyObj->setDebutexerciceglob1($this->getDebutexerciceglob1());
        $copyObj->setFinexerciceglob1($this->getFinexerciceglob1());
        $copyObj->setDebutexerciceglob2($this->getDebutexerciceglob2());
        $copyObj->setFinexerciceglob2($this->getFinexerciceglob2());
        $copyObj->setDebutexerciceglob3($this->getDebutexerciceglob3());
        $copyObj->setFinexerciceglob3($this->getFinexerciceglob3());
        $copyObj->setVentesglob1($this->getVentesglob1());
        $copyObj->setVentesglob2($this->getVentesglob2());
        $copyObj->setVentesglob3($this->getVentesglob3());
        $copyObj->setBiensglob1($this->getBiensglob1());
        $copyObj->setBiensglob2($this->getBiensglob2());
        $copyObj->setBiensglob3($this->getBiensglob3());
        $copyObj->setServicesglob1($this->getServicesglob1());
        $copyObj->setServicesglob2($this->getServicesglob2());
        $copyObj->setServicesglob3($this->getServicesglob3());
        $copyObj->setTotalglob1($this->getTotalglob1());
        $copyObj->setTotalglob2($this->getTotalglob2());
        $copyObj->setTotalglob3($this->getTotalglob3());
        $copyObj->setCodeape($this->getCodeape());
        $copyObj->setOrigineCompte($this->getOrigineCompte());
        $copyObj->setTelephone($this->getTelephone());
        $copyObj->setFax($this->getFax());
        $copyObj->setSiteInternet($this->getSiteInternet());
        $copyObj->setDescriptionActivite($this->getDescriptionActivite());
        $copyObj->setActiviteDomaineDefense($this->getActiviteDomaineDefense());
        $copyObj->setAnneeClotureExercice1($this->getAnneeClotureExercice1());
        $copyObj->setAnneeClotureExercice2($this->getAnneeClotureExercice2());
        $copyObj->setAnneeClotureExercice3($this->getAnneeClotureExercice3());
        $copyObj->setEffectifMoyen1($this->getEffectifMoyen1());
        $copyObj->setEffectifMoyen2($this->getEffectifMoyen2());
        $copyObj->setEffectifMoyen3($this->getEffectifMoyen3());
        $copyObj->setEffectifEncadrement1($this->getEffectifEncadrement1());
        $copyObj->setEffectifEncadrement2($this->getEffectifEncadrement2());
        $copyObj->setEffectifEncadrement3($this->getEffectifEncadrement3());
        $copyObj->setPme1($this->getPme1());
        $copyObj->setPme2($this->getPme2());
        $copyObj->setPme3($this->getPme3());
        $copyObj->setAdresse2($this->getAdresse2());
        $copyObj->setNicsiege($this->getNicsiege());
        $copyObj->setAcronymePays($this->getAcronymePays());
        $copyObj->setDateCreation($this->getDateCreation());
        $copyObj->setDateModification($this->getDateModification());
        $copyObj->setIdInitial($this->getIdInitial());
        $copyObj->setRegion($this->getRegion());
        $copyObj->setProvince($this->getProvince());
        $copyObj->setTelephone2($this->getTelephone2());
        $copyObj->setTelephone3($this->getTelephone3());
        $copyObj->setCnss($this->getCnss());
        $copyObj->setRcNum($this->getRcNum());
        $copyObj->setRcVille($this->getRcVille());
        $copyObj->setDomainesActivites($this->getDomainesActivites());
        $copyObj->setNumTax($this->getNumTax());
        $copyObj->setDocumentsCommerciaux($this->getDocumentsCommerciaux());
        $copyObj->setIntituleDocumentsCommerciaux($this->getIntituleDocumentsCommerciaux());
        $copyObj->setTailleDocumentsCommerciaux($this->getTailleDocumentsCommerciaux());
        $copyObj->setQualification($this->getQualification());
        $copyObj->setAgrement($this->getAgrement());
        $copyObj->setMoyensTechnique($this->getMoyensTechnique());
        $copyObj->setMoyensHumains($this->getMoyensHumains());
        $copyObj->setCompteActif($this->getCompteActif());
        $copyObj->setCapitalSocial($this->getCapitalSocial());
        $copyObj->setIfu($this->getIfu());
        $copyObj->setIdAgentCreateur($this->getIdAgentCreateur());
        $copyObj->setNomAgent($this->getNomAgent());
        $copyObj->setPrenomAgent($this->getPrenomAgent());
        $copyObj->setAdressesElectroniques($this->getAdressesElectroniques());
        $copyObj->setVisibleBourse($this->getVisibleBourse());
        $copyObj->setTypeCollaboration($this->getTypeCollaboration());
        $copyObj->setEntrepriseEa($this->getEntrepriseEa());
        $copyObj->setEntrepriseSiae($this->getEntrepriseSiae());
        $copyObj->setTypeEntreprise($this->getTypeEntreprise());
        $copyObj->setNote($this->getNote());
        $copyObj->setCodeCpv($this->getCodeCpv());
        $copyObj->setStatutReferencement($this->getStatutReferencement());
        $copyObj->setTailleEntreprise($this->getTailleEntreprise());
        $copyObj->setIdentifiantFiscale($this->getIdentifiantFiscale());
        $copyObj->setValide($this->getValide());
        $copyObj->setGuid($this->getGuid());
        $copyObj->setGeoId($this->getGeoId());
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
     * @return CommonEntreprise Clone of current object.
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
     * @return CommonEntreprisePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonEntreprisePeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->admin_id = null;
        $this->siren = null;
        $this->repmetiers = null;
        $this->nom = null;
        $this->adresse = null;
        $this->codepostal = null;
        $this->villeadresse = null;
        $this->paysadresse = null;
        $this->email = null;
        $this->taille = null;
        $this->formejuridique = null;
        $this->villeenregistrement = null;
        $this->motifnonindnum = null;
        $this->ordreprofouagrement = null;
        $this->dateconstsociete = null;
        $this->nomorginscription = null;
        $this->adrorginscription = null;
        $this->dateconstassoc = null;
        $this->dateconstassocetrangere = null;
        $this->nompersonnepublique = null;
        $this->nationalite = null;
        $this->redressement = null;
        $this->paysenregistrement = null;
        $this->sirenetranger = null;
        $this->numassoetrangere = null;
        $this->debutexerciceglob1 = null;
        $this->finexerciceglob1 = null;
        $this->debutexerciceglob2 = null;
        $this->finexerciceglob2 = null;
        $this->debutexerciceglob3 = null;
        $this->finexerciceglob3 = null;
        $this->ventesglob1 = null;
        $this->ventesglob2 = null;
        $this->ventesglob3 = null;
        $this->biensglob1 = null;
        $this->biensglob2 = null;
        $this->biensglob3 = null;
        $this->servicesglob1 = null;
        $this->servicesglob2 = null;
        $this->servicesglob3 = null;
        $this->totalglob1 = null;
        $this->totalglob2 = null;
        $this->totalglob3 = null;
        $this->codeape = null;
        $this->origine_compte = null;
        $this->telephone = null;
        $this->fax = null;
        $this->site_internet = null;
        $this->description_activite = null;
        $this->activite_domaine_defense = null;
        $this->annee_cloture_exercice1 = null;
        $this->annee_cloture_exercice2 = null;
        $this->annee_cloture_exercice3 = null;
        $this->effectif_moyen1 = null;
        $this->effectif_moyen2 = null;
        $this->effectif_moyen3 = null;
        $this->effectif_encadrement1 = null;
        $this->effectif_encadrement2 = null;
        $this->effectif_encadrement3 = null;
        $this->pme1 = null;
        $this->pme2 = null;
        $this->pme3 = null;
        $this->adresse2 = null;
        $this->nicsiege = null;
        $this->acronyme_pays = null;
        $this->date_creation = null;
        $this->date_modification = null;
        $this->id_initial = null;
        $this->region = null;
        $this->province = null;
        $this->telephone2 = null;
        $this->telephone3 = null;
        $this->cnss = null;
        $this->rc_num = null;
        $this->rc_ville = null;
        $this->domaines_activites = null;
        $this->num_tax = null;
        $this->documents_commerciaux = null;
        $this->intitule_documents_commerciaux = null;
        $this->taille_documents_commerciaux = null;
        $this->qualification = null;
        $this->agrement = null;
        $this->moyens_technique = null;
        $this->moyens_humains = null;
        $this->compte_actif = null;
        $this->capital_social = null;
        $this->ifu = null;
        $this->id_agent_createur = null;
        $this->nom_agent = null;
        $this->prenom_agent = null;
        $this->adresses_electroniques = null;
        $this->visible_bourse = null;
        $this->type_collaboration = null;
        $this->entreprise_ea = null;
        $this->entreprise_siae = null;
        $this->type_entreprise = null;
        $this->note = null;
        $this->code_cpv = null;
        $this->statut_referencement = null;
        $this->taille_entreprise = null;
        $this->identifiant_fiscale = null;
        $this->valide = null;
        $this->guid = null;
        $this->geo_id = null;
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
        return (string) $this->exportTo(CommonEntreprisePeer::DEFAULT_STRING_FORMAT);
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
