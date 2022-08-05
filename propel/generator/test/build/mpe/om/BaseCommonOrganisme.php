<?php


/**
 * Base class that represents a row from the 'Organisme' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonOrganisme extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonOrganismePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonOrganismePeer
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
     * The value for the acronyme field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $acronyme;

    /**
     * The value for the type_article_org field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $type_article_org;

    /**
     * The value for the denomination_org field.
     * @var        string
     */
    protected $denomination_org;

    /**
     * The value for the categorie_insee field.
     * @var        string
     */
    protected $categorie_insee;

    /**
     * The value for the description_org field.
     * @var        string
     */
    protected $description_org;

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
     * The value for the email field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $email;

    /**
     * The value for the url field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $url;

    /**
     * The value for the id_attrib_file field.
     * @var        string
     */
    protected $id_attrib_file;

    /**
     * The value for the attrib_file field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $attrib_file;

    /**
     * The value for the date_creation field.
     * Note: this column has a database default value of: NULL
     * @var        string
     */
    protected $date_creation;

    /**
     * The value for the active field.
     * Note: this column has a database default value of: '1'
     * @var        string
     */
    protected $active;

    /**
     * The value for the id_client_anm field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $id_client_anm;

    /**
     * The value for the status field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $status;

    /**
     * The value for the signataire_cao field.
     * @var        string
     */
    protected $signataire_cao;

    /**
     * The value for the offset field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $offset;

    /**
     * The value for the sigle field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $sigle;

    /**
     * The value for the adresse2 field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adresse2;

    /**
     * The value for the tel field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $tel;

    /**
     * The value for the telecopie field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $telecopie;

    /**
     * The value for the pays field.
     * @var        string
     */
    protected $pays;

    /**
     * The value for the affichage_entite field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $affichage_entite;

    /**
     * The value for the id_initial field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_initial;

    /**
     * The value for the denomination_org_ar field.
     * @var        string
     */
    protected $denomination_org_ar;

    /**
     * The value for the description_org_ar field.
     * @var        string
     */
    protected $description_org_ar;

    /**
     * The value for the adresse_ar field.
     * @var        string
     */
    protected $adresse_ar;

    /**
     * The value for the ville_ar field.
     * @var        string
     */
    protected $ville_ar;

    /**
     * The value for the adresse2_ar field.
     * @var        string
     */
    protected $adresse2_ar;

    /**
     * The value for the pays_ar field.
     * @var        string
     */
    protected $pays_ar;

    /**
     * The value for the denomination_org_fr field.
     * @var        string
     */
    protected $denomination_org_fr;

    /**
     * The value for the description_org_fr field.
     * @var        string
     */
    protected $description_org_fr;

    /**
     * The value for the adresse_fr field.
     * @var        string
     */
    protected $adresse_fr;

    /**
     * The value for the ville_fr field.
     * @var        string
     */
    protected $ville_fr;

    /**
     * The value for the adresse2_fr field.
     * @var        string
     */
    protected $adresse2_fr;

    /**
     * The value for the pays_fr field.
     * @var        string
     */
    protected $pays_fr;

    /**
     * The value for the denomination_org_es field.
     * @var        string
     */
    protected $denomination_org_es;

    /**
     * The value for the description_org_es field.
     * @var        string
     */
    protected $description_org_es;

    /**
     * The value for the adresse_es field.
     * @var        string
     */
    protected $adresse_es;

    /**
     * The value for the ville_es field.
     * @var        string
     */
    protected $ville_es;

    /**
     * The value for the adresse2_es field.
     * @var        string
     */
    protected $adresse2_es;

    /**
     * The value for the pays_es field.
     * @var        string
     */
    protected $pays_es;

    /**
     * The value for the denomination_org_en field.
     * @var        string
     */
    protected $denomination_org_en;

    /**
     * The value for the description_org_en field.
     * @var        string
     */
    protected $description_org_en;

    /**
     * The value for the adresse_en field.
     * @var        string
     */
    protected $adresse_en;

    /**
     * The value for the ville_en field.
     * @var        string
     */
    protected $ville_en;

    /**
     * The value for the adresse2_en field.
     * @var        string
     */
    protected $adresse2_en;

    /**
     * The value for the pays_en field.
     * @var        string
     */
    protected $pays_en;

    /**
     * The value for the denomination_org_su field.
     * @var        string
     */
    protected $denomination_org_su;

    /**
     * The value for the description_org_su field.
     * @var        string
     */
    protected $description_org_su;

    /**
     * The value for the adresse_su field.
     * @var        string
     */
    protected $adresse_su;

    /**
     * The value for the ville_su field.
     * @var        string
     */
    protected $ville_su;

    /**
     * The value for the adresse2_su field.
     * @var        string
     */
    protected $adresse2_su;

    /**
     * The value for the pays_su field.
     * @var        string
     */
    protected $pays_su;

    /**
     * The value for the denomination_org_du field.
     * @var        string
     */
    protected $denomination_org_du;

    /**
     * The value for the description_org_du field.
     * @var        string
     */
    protected $description_org_du;

    /**
     * The value for the adresse_du field.
     * @var        string
     */
    protected $adresse_du;

    /**
     * The value for the ville_du field.
     * @var        string
     */
    protected $ville_du;

    /**
     * The value for the adresse2_du field.
     * @var        string
     */
    protected $adresse2_du;

    /**
     * The value for the pays_du field.
     * @var        string
     */
    protected $pays_du;

    /**
     * The value for the denomination_org_cz field.
     * @var        string
     */
    protected $denomination_org_cz;

    /**
     * The value for the description_org_cz field.
     * @var        string
     */
    protected $description_org_cz;

    /**
     * The value for the adresse_cz field.
     * @var        string
     */
    protected $adresse_cz;

    /**
     * The value for the ville_cz field.
     * @var        string
     */
    protected $ville_cz;

    /**
     * The value for the adresse2_cz field.
     * @var        string
     */
    protected $adresse2_cz;

    /**
     * The value for the pays_cz field.
     * @var        string
     */
    protected $pays_cz;

    /**
     * The value for the denomination_org_it field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $denomination_org_it;

    /**
     * The value for the description_org_it field.
     * @var        string
     */
    protected $description_org_it;

    /**
     * The value for the adresse_it field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adresse_it;

    /**
     * The value for the ville_it field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $ville_it;

    /**
     * The value for the adresse2_it field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $adresse2_it;

    /**
     * The value for the pays_it field.
     * Note: this column has a database default value of: ''
     * @var        string
     */
    protected $pays_it;

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
     * The value for the activation_fuseau_horaire field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $activation_fuseau_horaire;

    /**
     * The value for the alerte field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $alerte;

    /**
     * The value for the ordre field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $ordre;

    /**
     * The value for the url_interface_anm field.
     * @var        string
     */
    protected $url_interface_anm;

    /**
     * @var        PropelObjectCollection|CommonAdministrateur[] Collection to store aggregation of CommonAdministrateur objects.
     */
    protected $collCommonAdministrateurs;
    protected $collCommonAdministrateursPartial;

    /**
     * @var        PropelObjectCollection|CommonAffiliationService[] Collection to store aggregation of CommonAffiliationService objects.
     */
    protected $collCommonAffiliationServices;
    protected $collCommonAffiliationServicesPartial;

    /**
     * @var        PropelObjectCollection|CommonAgent[] Collection to store aggregation of CommonAgent objects.
     */
    protected $collCommonAgents;
    protected $collCommonAgentsPartial;

    /**
     * @var        PropelObjectCollection|CommonDAConsultation[] Collection to store aggregation of CommonDAConsultation objects.
     */
    protected $collCommonDAConsultations;
    protected $collCommonDAConsultationsPartial;

    /**
     * @var        PropelObjectCollection|CommonOrganismeServiceMetier[] Collection to store aggregation of CommonOrganismeServiceMetier objects.
     */
    protected $collCommonOrganismeServiceMetiers;
    protected $collCommonOrganismeServiceMetiersPartial;

    /**
     * @var        PropelObjectCollection|CommonParametrageEnchere[] Collection to store aggregation of CommonParametrageEnchere objects.
     */
    protected $collCommonParametrageEncheres;
    protected $collCommonParametrageEncheresPartial;

    /**
     * @var        PropelObjectCollection|CommonRPA[] Collection to store aggregation of CommonRPA objects.
     */
    protected $collCommonRPAs;
    protected $collCommonRPAsPartial;

    /**
     * @var        PropelObjectCollection|CommonConsultation[] Collection to store aggregation of CommonConsultation objects.
     */
    protected $collCommonConsultations;
    protected $collCommonConsultationsPartial;

    /**
     * @var        PropelObjectCollection|CommonDemandeAchatParCatalogue[] Collection to store aggregation of CommonDemandeAchatParCatalogue objects.
     */
    protected $collCommonDemandeAchatParCatalogues;
    protected $collCommonDemandeAchatParCataloguesPartial;

    /**
     * @var        PropelObjectCollection|CommonDestinataireMiseDisposition[] Collection to store aggregation of CommonDestinataireMiseDisposition objects.
     */
    protected $collCommonDestinataireMiseDispositions;
    protected $collCommonDestinataireMiseDispositionsPartial;

    /**
     * @var        PropelObjectCollection|CommonTCAOCommissionConsultation[] Collection to store aggregation of CommonTCAOCommissionConsultation objects.
     */
    protected $collCommonTCAOCommissionConsultations;
    protected $collCommonTCAOCommissionConsultationsPartial;

    /**
     * @var        PropelObjectCollection|CommonTCAOOrdreDePassage[] Collection to store aggregation of CommonTCAOOrdreDePassage objects.
     */
    protected $collCommonTCAOOrdreDePassages;
    protected $collCommonTCAOOrdreDePassagesPartial;

    /**
     * @var        PropelObjectCollection|CommonTCAOSeanceInvite[] Collection to store aggregation of CommonTCAOSeanceInvite objects.
     */
    protected $collCommonTCAOSeanceInvites;
    protected $collCommonTCAOSeanceInvitesPartial;

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
    protected $commonAdministrateursScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonAffiliationServicesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonAgentsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonDAConsultationsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonOrganismeServiceMetiersScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonParametrageEncheresScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonRPAsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonConsultationsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonDemandeAchatParCataloguesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonDestinataireMiseDispositionsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonTCAOCommissionConsultationsScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonTCAOOrdreDePassagesScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var		PropelObjectCollection
     */
    protected $commonTCAOSeanceInvitesScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->acronyme = '';
        $this->type_article_org = 0;
        $this->adresse = '';
        $this->cp = '';
        $this->ville = '';
        $this->email = '';
        $this->url = '';
        $this->attrib_file = '';
        $this->date_creation = NULL;
        $this->active = '1';
        $this->id_client_anm = '0';
        $this->status = '0';
        $this->offset = '0';
        $this->sigle = '';
        $this->adresse2 = '';
        $this->tel = '';
        $this->telecopie = '';
        $this->affichage_entite = '';
        $this->id_initial = 0;
        $this->denomination_org_it = '';
        $this->adresse_it = '';
        $this->ville_it = '';
        $this->adresse2_it = '';
        $this->pays_it = '';
        $this->moniteur_provenance = 90;
        $this->code_acces_logiciel = 'Y8YG-69WD-4421-4G28';
        $this->activation_fuseau_horaire = '0';
        $this->alerte = '0';
        $this->ordre = 0;
    }

    /**
     * Initializes internal state of BaseCommonOrganisme object.
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
     * Get the [acronyme] column value.
     * 
     * @return string
     */
    public function getAcronyme()
    {

        return $this->acronyme;
    }

    /**
     * Get the [type_article_org] column value.
     * 
     * @return int
     */
    public function getTypeArticleOrg()
    {

        return $this->type_article_org;
    }

    /**
     * Get the [denomination_org] column value.
     * 
     * @return string
     */
    public function getDenominationOrg()
    {

        return $this->denomination_org;
    }

    /**
     * Get the [categorie_insee] column value.
     * 
     * @return string
     */
    public function getCategorieInsee()
    {

        return $this->categorie_insee;
    }

    /**
     * Get the [description_org] column value.
     * 
     * @return string
     */
    public function getDescriptionOrg()
    {

        return $this->description_org;
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
     * Get the [email] column value.
     * 
     * @return string
     */
    public function getEmail()
    {

        return $this->email;
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
     * Get the [id_attrib_file] column value.
     * 
     * @return string
     */
    public function getIdAttribFile()
    {

        return $this->id_attrib_file;
    }

    /**
     * Get the [attrib_file] column value.
     * 
     * @return string
     */
    public function getAttribFile()
    {

        return $this->attrib_file;
    }

    /**
     * Get the [optionally formatted] temporal [date_creation] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateCreation($format = 'Y-m-d H:i:s')
    {
        if ($this->date_creation === null) {
            return null;
        }

        if ($this->date_creation === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_creation);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_creation, true), $x);
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
     * Get the [active] column value.
     * 
     * @return string
     */
    public function getActive()
    {

        return $this->active;
    }

    /**
     * Get the [id_client_anm] column value.
     * 
     * @return string
     */
    public function getIdClientAnm()
    {

        return $this->id_client_anm;
    }

    /**
     * Get the [status] column value.
     * 
     * @return string
     */
    public function getStatus()
    {

        return $this->status;
    }

    /**
     * Get the [signataire_cao] column value.
     * 
     * @return string
     */
    public function getSignataireCao()
    {

        return $this->signataire_cao;
    }

    /**
     * Get the [offset] column value.
     * 
     * @return string
     */
    public function getOffset()
    {

        return $this->offset;
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
     * Get the [adresse2] column value.
     * 
     * @return string
     */
    public function getAdresse2()
    {

        return $this->adresse2;
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
     * Get the [telecopie] column value.
     * 
     * @return string
     */
    public function getTelecopie()
    {

        return $this->telecopie;
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
     * Get the [affichage_entite] column value.
     * 
     * @return string
     */
    public function getAffichageEntite()
    {

        return $this->affichage_entite;
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
     * Get the [denomination_org_ar] column value.
     * 
     * @return string
     */
    public function getDenominationOrgAr()
    {

        return $this->denomination_org_ar;
    }

    /**
     * Get the [description_org_ar] column value.
     * 
     * @return string
     */
    public function getDescriptionOrgAr()
    {

        return $this->description_org_ar;
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
     * Get the [ville_ar] column value.
     * 
     * @return string
     */
    public function getVilleAr()
    {

        return $this->ville_ar;
    }

    /**
     * Get the [adresse2_ar] column value.
     * 
     * @return string
     */
    public function getAdresse2Ar()
    {

        return $this->adresse2_ar;
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
     * Get the [denomination_org_fr] column value.
     * 
     * @return string
     */
    public function getDenominationOrgFr()
    {

        return $this->denomination_org_fr;
    }

    /**
     * Get the [description_org_fr] column value.
     * 
     * @return string
     */
    public function getDescriptionOrgFr()
    {

        return $this->description_org_fr;
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
     * Get the [ville_fr] column value.
     * 
     * @return string
     */
    public function getVilleFr()
    {

        return $this->ville_fr;
    }

    /**
     * Get the [adresse2_fr] column value.
     * 
     * @return string
     */
    public function getAdresse2Fr()
    {

        return $this->adresse2_fr;
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
     * Get the [denomination_org_es] column value.
     * 
     * @return string
     */
    public function getDenominationOrgEs()
    {

        return $this->denomination_org_es;
    }

    /**
     * Get the [description_org_es] column value.
     * 
     * @return string
     */
    public function getDescriptionOrgEs()
    {

        return $this->description_org_es;
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
     * Get the [ville_es] column value.
     * 
     * @return string
     */
    public function getVilleEs()
    {

        return $this->ville_es;
    }

    /**
     * Get the [adresse2_es] column value.
     * 
     * @return string
     */
    public function getAdresse2Es()
    {

        return $this->adresse2_es;
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
     * Get the [denomination_org_en] column value.
     * 
     * @return string
     */
    public function getDenominationOrgEn()
    {

        return $this->denomination_org_en;
    }

    /**
     * Get the [description_org_en] column value.
     * 
     * @return string
     */
    public function getDescriptionOrgEn()
    {

        return $this->description_org_en;
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
     * Get the [ville_en] column value.
     * 
     * @return string
     */
    public function getVilleEn()
    {

        return $this->ville_en;
    }

    /**
     * Get the [adresse2_en] column value.
     * 
     * @return string
     */
    public function getAdresse2En()
    {

        return $this->adresse2_en;
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
     * Get the [denomination_org_su] column value.
     * 
     * @return string
     */
    public function getDenominationOrgSu()
    {

        return $this->denomination_org_su;
    }

    /**
     * Get the [description_org_su] column value.
     * 
     * @return string
     */
    public function getDescriptionOrgSu()
    {

        return $this->description_org_su;
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
     * Get the [ville_su] column value.
     * 
     * @return string
     */
    public function getVilleSu()
    {

        return $this->ville_su;
    }

    /**
     * Get the [adresse2_su] column value.
     * 
     * @return string
     */
    public function getAdresse2Su()
    {

        return $this->adresse2_su;
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
     * Get the [denomination_org_du] column value.
     * 
     * @return string
     */
    public function getDenominationOrgDu()
    {

        return $this->denomination_org_du;
    }

    /**
     * Get the [description_org_du] column value.
     * 
     * @return string
     */
    public function getDescriptionOrgDu()
    {

        return $this->description_org_du;
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
     * Get the [ville_du] column value.
     * 
     * @return string
     */
    public function getVilleDu()
    {

        return $this->ville_du;
    }

    /**
     * Get the [adresse2_du] column value.
     * 
     * @return string
     */
    public function getAdresse2Du()
    {

        return $this->adresse2_du;
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
     * Get the [denomination_org_cz] column value.
     * 
     * @return string
     */
    public function getDenominationOrgCz()
    {

        return $this->denomination_org_cz;
    }

    /**
     * Get the [description_org_cz] column value.
     * 
     * @return string
     */
    public function getDescriptionOrgCz()
    {

        return $this->description_org_cz;
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
     * Get the [ville_cz] column value.
     * 
     * @return string
     */
    public function getVilleCz()
    {

        return $this->ville_cz;
    }

    /**
     * Get the [adresse2_cz] column value.
     * 
     * @return string
     */
    public function getAdresse2Cz()
    {

        return $this->adresse2_cz;
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
     * Get the [denomination_org_it] column value.
     * 
     * @return string
     */
    public function getDenominationOrgIt()
    {

        return $this->denomination_org_it;
    }

    /**
     * Get the [description_org_it] column value.
     * 
     * @return string
     */
    public function getDescriptionOrgIt()
    {

        return $this->description_org_it;
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
     * Get the [ville_it] column value.
     * 
     * @return string
     */
    public function getVilleIt()
    {

        return $this->ville_it;
    }

    /**
     * Get the [adresse2_it] column value.
     * 
     * @return string
     */
    public function getAdresse2It()
    {

        return $this->adresse2_it;
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
     * Get the [activation_fuseau_horaire] column value.
     * 
     * @return string
     */
    public function getActivationFuseauHoraire()
    {

        return $this->activation_fuseau_horaire;
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
     * Get the [ordre] column value.
     * 
     * @return int
     */
    public function getOrdre()
    {

        return $this->ordre;
    }

    /**
     * Get the [url_interface_anm] column value.
     * 
     * @return string
     */
    public function getUrlInterfaceAnm()
    {

        return $this->url_interface_anm;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [acronyme] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setAcronyme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->acronyme !== $v) {
            $this->acronyme = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::ACRONYME;
        }


        return $this;
    } // setAcronyme()

    /**
     * Set the value of [type_article_org] column.
     * 
     * @param int $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setTypeArticleOrg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type_article_org !== $v) {
            $this->type_article_org = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::TYPE_ARTICLE_ORG;
        }


        return $this;
    } // setTypeArticleOrg()

    /**
     * Set the value of [denomination_org] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setDenominationOrg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->denomination_org !== $v) {
            $this->denomination_org = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::DENOMINATION_ORG;
        }


        return $this;
    } // setDenominationOrg()

    /**
     * Set the value of [categorie_insee] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setCategorieInsee($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->categorie_insee !== $v) {
            $this->categorie_insee = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::CATEGORIE_INSEE;
        }


        return $this;
    } // setCategorieInsee()

    /**
     * Set the value of [description_org] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setDescriptionOrg($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->description_org !== $v) {
            $this->description_org = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::DESCRIPTION_ORG;
        }


        return $this;
    } // setDescriptionOrg()

    /**
     * Set the value of [adresse] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setAdresse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse !== $v) {
            $this->adresse = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::ADRESSE;
        }


        return $this;
    } // setAdresse()

    /**
     * Set the value of [cp] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setCp($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cp !== $v) {
            $this->cp = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::CP;
        }


        return $this;
    } // setCp()

    /**
     * Set the value of [ville] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setVille($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ville !== $v) {
            $this->ville = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::VILLE;
        }


        return $this;
    } // setVille()

    /**
     * Set the value of [email] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setEmail($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->email !== $v) {
            $this->email = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::EMAIL;
        }


        return $this;
    } // setEmail()

    /**
     * Set the value of [url] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setUrl($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->url !== $v) {
            $this->url = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::URL;
        }


        return $this;
    } // setUrl()

    /**
     * Set the value of [id_attrib_file] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setIdAttribFile($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->id_attrib_file !== $v) {
            $this->id_attrib_file = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::ID_ATTRIB_FILE;
        }


        return $this;
    } // setIdAttribFile()

    /**
     * Set the value of [attrib_file] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setAttribFile($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->attrib_file !== $v) {
            $this->attrib_file = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::ATTRIB_FILE;
        }


        return $this;
    } // setAttribFile()

    /**
     * Sets the value of [date_creation] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setDateCreation($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_creation !== null || $dt !== null) {
            $currentDateAsString = ($this->date_creation !== null && $tmpDt = new DateTime($this->date_creation)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ( ($currentDateAsString !== $newDateAsString) // normalized values don't match
                || ($dt->format('Y-m-d H:i:s') === NULL) // or the entered value matches the default
                 ) {
                $this->date_creation = $newDateAsString;
                $this->modifiedColumns[] = CommonOrganismePeer::DATE_CREATION;
            }
        } // if either are not null


        return $this;
    } // setDateCreation()

    /**
     * Set the value of [active] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setActive($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->active !== $v) {
            $this->active = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::ACTIVE;
        }


        return $this;
    } // setActive()

    /**
     * Set the value of [id_client_anm] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setIdClientAnm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->id_client_anm !== $v) {
            $this->id_client_anm = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::ID_CLIENT_ANM;
        }


        return $this;
    } // setIdClientAnm()

    /**
     * Set the value of [status] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setStatus($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->status !== $v) {
            $this->status = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::STATUS;
        }


        return $this;
    } // setStatus()

    /**
     * Set the value of [signataire_cao] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setSignataireCao($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->signataire_cao !== $v) {
            $this->signataire_cao = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::SIGNATAIRE_CAO;
        }


        return $this;
    } // setSignataireCao()

    /**
     * Set the value of [offset] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setOffset($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->offset !== $v) {
            $this->offset = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::OFFSET;
        }


        return $this;
    } // setOffset()

    /**
     * Set the value of [sigle] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setSigle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->sigle !== $v) {
            $this->sigle = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::SIGLE;
        }


        return $this;
    } // setSigle()

    /**
     * Set the value of [adresse2] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setAdresse2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse2 !== $v) {
            $this->adresse2 = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::ADRESSE2;
        }


        return $this;
    } // setAdresse2()

    /**
     * Set the value of [tel] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setTel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->tel !== $v) {
            $this->tel = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::TEL;
        }


        return $this;
    } // setTel()

    /**
     * Set the value of [telecopie] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setTelecopie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->telecopie !== $v) {
            $this->telecopie = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::TELECOPIE;
        }


        return $this;
    } // setTelecopie()

    /**
     * Set the value of [pays] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setPays($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pays !== $v) {
            $this->pays = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::PAYS;
        }


        return $this;
    } // setPays()

    /**
     * Set the value of [affichage_entite] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setAffichageEntite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->affichage_entite !== $v) {
            $this->affichage_entite = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::AFFICHAGE_ENTITE;
        }


        return $this;
    } // setAffichageEntite()

    /**
     * Set the value of [id_initial] column.
     * 
     * @param int $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setIdInitial($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_initial !== $v) {
            $this->id_initial = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::ID_INITIAL;
        }


        return $this;
    } // setIdInitial()

    /**
     * Set the value of [denomination_org_ar] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setDenominationOrgAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->denomination_org_ar !== $v) {
            $this->denomination_org_ar = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::DENOMINATION_ORG_AR;
        }


        return $this;
    } // setDenominationOrgAr()

    /**
     * Set the value of [description_org_ar] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setDescriptionOrgAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->description_org_ar !== $v) {
            $this->description_org_ar = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::DESCRIPTION_ORG_AR;
        }


        return $this;
    } // setDescriptionOrgAr()

    /**
     * Set the value of [adresse_ar] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setAdresseAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_ar !== $v) {
            $this->adresse_ar = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::ADRESSE_AR;
        }


        return $this;
    } // setAdresseAr()

    /**
     * Set the value of [ville_ar] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setVilleAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ville_ar !== $v) {
            $this->ville_ar = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::VILLE_AR;
        }


        return $this;
    } // setVilleAr()

    /**
     * Set the value of [adresse2_ar] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setAdresse2Ar($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse2_ar !== $v) {
            $this->adresse2_ar = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::ADRESSE2_AR;
        }


        return $this;
    } // setAdresse2Ar()

    /**
     * Set the value of [pays_ar] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setPaysAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pays_ar !== $v) {
            $this->pays_ar = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::PAYS_AR;
        }


        return $this;
    } // setPaysAr()

    /**
     * Set the value of [denomination_org_fr] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setDenominationOrgFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->denomination_org_fr !== $v) {
            $this->denomination_org_fr = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::DENOMINATION_ORG_FR;
        }


        return $this;
    } // setDenominationOrgFr()

    /**
     * Set the value of [description_org_fr] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setDescriptionOrgFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->description_org_fr !== $v) {
            $this->description_org_fr = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::DESCRIPTION_ORG_FR;
        }


        return $this;
    } // setDescriptionOrgFr()

    /**
     * Set the value of [adresse_fr] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setAdresseFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_fr !== $v) {
            $this->adresse_fr = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::ADRESSE_FR;
        }


        return $this;
    } // setAdresseFr()

    /**
     * Set the value of [ville_fr] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setVilleFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ville_fr !== $v) {
            $this->ville_fr = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::VILLE_FR;
        }


        return $this;
    } // setVilleFr()

    /**
     * Set the value of [adresse2_fr] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setAdresse2Fr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse2_fr !== $v) {
            $this->adresse2_fr = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::ADRESSE2_FR;
        }


        return $this;
    } // setAdresse2Fr()

    /**
     * Set the value of [pays_fr] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setPaysFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pays_fr !== $v) {
            $this->pays_fr = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::PAYS_FR;
        }


        return $this;
    } // setPaysFr()

    /**
     * Set the value of [denomination_org_es] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setDenominationOrgEs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->denomination_org_es !== $v) {
            $this->denomination_org_es = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::DENOMINATION_ORG_ES;
        }


        return $this;
    } // setDenominationOrgEs()

    /**
     * Set the value of [description_org_es] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setDescriptionOrgEs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->description_org_es !== $v) {
            $this->description_org_es = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::DESCRIPTION_ORG_ES;
        }


        return $this;
    } // setDescriptionOrgEs()

    /**
     * Set the value of [adresse_es] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setAdresseEs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_es !== $v) {
            $this->adresse_es = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::ADRESSE_ES;
        }


        return $this;
    } // setAdresseEs()

    /**
     * Set the value of [ville_es] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setVilleEs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ville_es !== $v) {
            $this->ville_es = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::VILLE_ES;
        }


        return $this;
    } // setVilleEs()

    /**
     * Set the value of [adresse2_es] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setAdresse2Es($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse2_es !== $v) {
            $this->adresse2_es = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::ADRESSE2_ES;
        }


        return $this;
    } // setAdresse2Es()

    /**
     * Set the value of [pays_es] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setPaysEs($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pays_es !== $v) {
            $this->pays_es = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::PAYS_ES;
        }


        return $this;
    } // setPaysEs()

    /**
     * Set the value of [denomination_org_en] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setDenominationOrgEn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->denomination_org_en !== $v) {
            $this->denomination_org_en = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::DENOMINATION_ORG_EN;
        }


        return $this;
    } // setDenominationOrgEn()

    /**
     * Set the value of [description_org_en] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setDescriptionOrgEn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->description_org_en !== $v) {
            $this->description_org_en = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::DESCRIPTION_ORG_EN;
        }


        return $this;
    } // setDescriptionOrgEn()

    /**
     * Set the value of [adresse_en] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setAdresseEn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_en !== $v) {
            $this->adresse_en = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::ADRESSE_EN;
        }


        return $this;
    } // setAdresseEn()

    /**
     * Set the value of [ville_en] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setVilleEn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ville_en !== $v) {
            $this->ville_en = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::VILLE_EN;
        }


        return $this;
    } // setVilleEn()

    /**
     * Set the value of [adresse2_en] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setAdresse2En($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse2_en !== $v) {
            $this->adresse2_en = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::ADRESSE2_EN;
        }


        return $this;
    } // setAdresse2En()

    /**
     * Set the value of [pays_en] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setPaysEn($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pays_en !== $v) {
            $this->pays_en = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::PAYS_EN;
        }


        return $this;
    } // setPaysEn()

    /**
     * Set the value of [denomination_org_su] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setDenominationOrgSu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->denomination_org_su !== $v) {
            $this->denomination_org_su = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::DENOMINATION_ORG_SU;
        }


        return $this;
    } // setDenominationOrgSu()

    /**
     * Set the value of [description_org_su] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setDescriptionOrgSu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->description_org_su !== $v) {
            $this->description_org_su = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::DESCRIPTION_ORG_SU;
        }


        return $this;
    } // setDescriptionOrgSu()

    /**
     * Set the value of [adresse_su] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setAdresseSu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_su !== $v) {
            $this->adresse_su = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::ADRESSE_SU;
        }


        return $this;
    } // setAdresseSu()

    /**
     * Set the value of [ville_su] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setVilleSu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ville_su !== $v) {
            $this->ville_su = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::VILLE_SU;
        }


        return $this;
    } // setVilleSu()

    /**
     * Set the value of [adresse2_su] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setAdresse2Su($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse2_su !== $v) {
            $this->adresse2_su = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::ADRESSE2_SU;
        }


        return $this;
    } // setAdresse2Su()

    /**
     * Set the value of [pays_su] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setPaysSu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pays_su !== $v) {
            $this->pays_su = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::PAYS_SU;
        }


        return $this;
    } // setPaysSu()

    /**
     * Set the value of [denomination_org_du] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setDenominationOrgDu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->denomination_org_du !== $v) {
            $this->denomination_org_du = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::DENOMINATION_ORG_DU;
        }


        return $this;
    } // setDenominationOrgDu()

    /**
     * Set the value of [description_org_du] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setDescriptionOrgDu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->description_org_du !== $v) {
            $this->description_org_du = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::DESCRIPTION_ORG_DU;
        }


        return $this;
    } // setDescriptionOrgDu()

    /**
     * Set the value of [adresse_du] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setAdresseDu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_du !== $v) {
            $this->adresse_du = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::ADRESSE_DU;
        }


        return $this;
    } // setAdresseDu()

    /**
     * Set the value of [ville_du] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setVilleDu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ville_du !== $v) {
            $this->ville_du = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::VILLE_DU;
        }


        return $this;
    } // setVilleDu()

    /**
     * Set the value of [adresse2_du] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setAdresse2Du($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse2_du !== $v) {
            $this->adresse2_du = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::ADRESSE2_DU;
        }


        return $this;
    } // setAdresse2Du()

    /**
     * Set the value of [pays_du] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setPaysDu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pays_du !== $v) {
            $this->pays_du = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::PAYS_DU;
        }


        return $this;
    } // setPaysDu()

    /**
     * Set the value of [denomination_org_cz] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setDenominationOrgCz($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->denomination_org_cz !== $v) {
            $this->denomination_org_cz = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::DENOMINATION_ORG_CZ;
        }


        return $this;
    } // setDenominationOrgCz()

    /**
     * Set the value of [description_org_cz] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setDescriptionOrgCz($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->description_org_cz !== $v) {
            $this->description_org_cz = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::DESCRIPTION_ORG_CZ;
        }


        return $this;
    } // setDescriptionOrgCz()

    /**
     * Set the value of [adresse_cz] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setAdresseCz($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_cz !== $v) {
            $this->adresse_cz = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::ADRESSE_CZ;
        }


        return $this;
    } // setAdresseCz()

    /**
     * Set the value of [ville_cz] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setVilleCz($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ville_cz !== $v) {
            $this->ville_cz = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::VILLE_CZ;
        }


        return $this;
    } // setVilleCz()

    /**
     * Set the value of [adresse2_cz] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setAdresse2Cz($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse2_cz !== $v) {
            $this->adresse2_cz = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::ADRESSE2_CZ;
        }


        return $this;
    } // setAdresse2Cz()

    /**
     * Set the value of [pays_cz] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setPaysCz($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pays_cz !== $v) {
            $this->pays_cz = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::PAYS_CZ;
        }


        return $this;
    } // setPaysCz()

    /**
     * Set the value of [denomination_org_it] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setDenominationOrgIt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->denomination_org_it !== $v) {
            $this->denomination_org_it = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::DENOMINATION_ORG_IT;
        }


        return $this;
    } // setDenominationOrgIt()

    /**
     * Set the value of [description_org_it] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setDescriptionOrgIt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->description_org_it !== $v) {
            $this->description_org_it = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::DESCRIPTION_ORG_IT;
        }


        return $this;
    } // setDescriptionOrgIt()

    /**
     * Set the value of [adresse_it] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setAdresseIt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_it !== $v) {
            $this->adresse_it = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::ADRESSE_IT;
        }


        return $this;
    } // setAdresseIt()

    /**
     * Set the value of [ville_it] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setVilleIt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ville_it !== $v) {
            $this->ville_it = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::VILLE_IT;
        }


        return $this;
    } // setVilleIt()

    /**
     * Set the value of [adresse2_it] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setAdresse2It($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse2_it !== $v) {
            $this->adresse2_it = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::ADRESSE2_IT;
        }


        return $this;
    } // setAdresse2It()

    /**
     * Set the value of [pays_it] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setPaysIt($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pays_it !== $v) {
            $this->pays_it = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::PAYS_IT;
        }


        return $this;
    } // setPaysIt()

    /**
     * Set the value of [siren] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setSiren($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->siren !== $v) {
            $this->siren = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::SIREN;
        }


        return $this;
    } // setSiren()

    /**
     * Set the value of [complement] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setComplement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->complement !== $v) {
            $this->complement = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::COMPLEMENT;
        }


        return $this;
    } // setComplement()

    /**
     * Set the value of [moniteur_provenance] column.
     * 
     * @param int $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setMoniteurProvenance($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->moniteur_provenance !== $v) {
            $this->moniteur_provenance = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::MONITEUR_PROVENANCE;
        }


        return $this;
    } // setMoniteurProvenance()

    /**
     * Set the value of [code_acces_logiciel] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setCodeAccesLogiciel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code_acces_logiciel !== $v) {
            $this->code_acces_logiciel = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::CODE_ACCES_LOGICIEL;
        }


        return $this;
    } // setCodeAccesLogiciel()

    /**
     * Set the value of [decalage_horaire] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setDecalageHoraire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->decalage_horaire !== $v) {
            $this->decalage_horaire = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::DECALAGE_HORAIRE;
        }


        return $this;
    } // setDecalageHoraire()

    /**
     * Set the value of [lieu_residence] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setLieuResidence($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lieu_residence !== $v) {
            $this->lieu_residence = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::LIEU_RESIDENCE;
        }


        return $this;
    } // setLieuResidence()

    /**
     * Set the value of [activation_fuseau_horaire] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setActivationFuseauHoraire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->activation_fuseau_horaire !== $v) {
            $this->activation_fuseau_horaire = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::ACTIVATION_FUSEAU_HORAIRE;
        }


        return $this;
    } // setActivationFuseauHoraire()

    /**
     * Set the value of [alerte] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setAlerte($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->alerte !== $v) {
            $this->alerte = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::ALERTE;
        }


        return $this;
    } // setAlerte()

    /**
     * Set the value of [ordre] column.
     * 
     * @param int $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setOrdre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ordre !== $v) {
            $this->ordre = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::ORDRE;
        }


        return $this;
    } // setOrdre()

    /**
     * Set the value of [url_interface_anm] column.
     * 
     * @param string $v new value
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setUrlInterfaceAnm($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->url_interface_anm !== $v) {
            $this->url_interface_anm = $v;
            $this->modifiedColumns[] = CommonOrganismePeer::URL_INTERFACE_ANM;
        }


        return $this;
    } // setUrlInterfaceAnm()

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
            if ($this->acronyme !== '') {
                return false;
            }

            if ($this->type_article_org !== 0) {
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

            if ($this->email !== '') {
                return false;
            }

            if ($this->url !== '') {
                return false;
            }

            if ($this->attrib_file !== '') {
                return false;
            }

            if ($this->date_creation !== NULL) {
                return false;
            }

            if ($this->active !== '1') {
                return false;
            }

            if ($this->id_client_anm !== '0') {
                return false;
            }

            if ($this->status !== '0') {
                return false;
            }

            if ($this->offset !== '0') {
                return false;
            }

            if ($this->sigle !== '') {
                return false;
            }

            if ($this->adresse2 !== '') {
                return false;
            }

            if ($this->tel !== '') {
                return false;
            }

            if ($this->telecopie !== '') {
                return false;
            }

            if ($this->affichage_entite !== '') {
                return false;
            }

            if ($this->id_initial !== 0) {
                return false;
            }

            if ($this->denomination_org_it !== '') {
                return false;
            }

            if ($this->adresse_it !== '') {
                return false;
            }

            if ($this->ville_it !== '') {
                return false;
            }

            if ($this->adresse2_it !== '') {
                return false;
            }

            if ($this->pays_it !== '') {
                return false;
            }

            if ($this->moniteur_provenance !== 90) {
                return false;
            }

            if ($this->code_acces_logiciel !== 'Y8YG-69WD-4421-4G28') {
                return false;
            }

            if ($this->activation_fuseau_horaire !== '0') {
                return false;
            }

            if ($this->alerte !== '0') {
                return false;
            }

            if ($this->ordre !== 0) {
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
            $this->acronyme = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
            $this->type_article_org = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->denomination_org = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
            $this->categorie_insee = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->description_org = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
            $this->adresse = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->cp = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->ville = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->email = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->url = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->id_attrib_file = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->attrib_file = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->date_creation = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->active = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->id_client_anm = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->status = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->signataire_cao = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->offset = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->sigle = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->adresse2 = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->tel = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->telecopie = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->pays = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->affichage_entite = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->id_initial = ($row[$startcol + 25] !== null) ? (int) $row[$startcol + 25] : null;
            $this->denomination_org_ar = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->description_org_ar = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->adresse_ar = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->ville_ar = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->adresse2_ar = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->pays_ar = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->denomination_org_fr = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->description_org_fr = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->adresse_fr = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->ville_fr = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->adresse2_fr = ($row[$startcol + 36] !== null) ? (string) $row[$startcol + 36] : null;
            $this->pays_fr = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->denomination_org_es = ($row[$startcol + 38] !== null) ? (string) $row[$startcol + 38] : null;
            $this->description_org_es = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->adresse_es = ($row[$startcol + 40] !== null) ? (string) $row[$startcol + 40] : null;
            $this->ville_es = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->adresse2_es = ($row[$startcol + 42] !== null) ? (string) $row[$startcol + 42] : null;
            $this->pays_es = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
            $this->denomination_org_en = ($row[$startcol + 44] !== null) ? (string) $row[$startcol + 44] : null;
            $this->description_org_en = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
            $this->adresse_en = ($row[$startcol + 46] !== null) ? (string) $row[$startcol + 46] : null;
            $this->ville_en = ($row[$startcol + 47] !== null) ? (string) $row[$startcol + 47] : null;
            $this->adresse2_en = ($row[$startcol + 48] !== null) ? (string) $row[$startcol + 48] : null;
            $this->pays_en = ($row[$startcol + 49] !== null) ? (string) $row[$startcol + 49] : null;
            $this->denomination_org_su = ($row[$startcol + 50] !== null) ? (string) $row[$startcol + 50] : null;
            $this->description_org_su = ($row[$startcol + 51] !== null) ? (string) $row[$startcol + 51] : null;
            $this->adresse_su = ($row[$startcol + 52] !== null) ? (string) $row[$startcol + 52] : null;
            $this->ville_su = ($row[$startcol + 53] !== null) ? (string) $row[$startcol + 53] : null;
            $this->adresse2_su = ($row[$startcol + 54] !== null) ? (string) $row[$startcol + 54] : null;
            $this->pays_su = ($row[$startcol + 55] !== null) ? (string) $row[$startcol + 55] : null;
            $this->denomination_org_du = ($row[$startcol + 56] !== null) ? (string) $row[$startcol + 56] : null;
            $this->description_org_du = ($row[$startcol + 57] !== null) ? (string) $row[$startcol + 57] : null;
            $this->adresse_du = ($row[$startcol + 58] !== null) ? (string) $row[$startcol + 58] : null;
            $this->ville_du = ($row[$startcol + 59] !== null) ? (string) $row[$startcol + 59] : null;
            $this->adresse2_du = ($row[$startcol + 60] !== null) ? (string) $row[$startcol + 60] : null;
            $this->pays_du = ($row[$startcol + 61] !== null) ? (string) $row[$startcol + 61] : null;
            $this->denomination_org_cz = ($row[$startcol + 62] !== null) ? (string) $row[$startcol + 62] : null;
            $this->description_org_cz = ($row[$startcol + 63] !== null) ? (string) $row[$startcol + 63] : null;
            $this->adresse_cz = ($row[$startcol + 64] !== null) ? (string) $row[$startcol + 64] : null;
            $this->ville_cz = ($row[$startcol + 65] !== null) ? (string) $row[$startcol + 65] : null;
            $this->adresse2_cz = ($row[$startcol + 66] !== null) ? (string) $row[$startcol + 66] : null;
            $this->pays_cz = ($row[$startcol + 67] !== null) ? (string) $row[$startcol + 67] : null;
            $this->denomination_org_it = ($row[$startcol + 68] !== null) ? (string) $row[$startcol + 68] : null;
            $this->description_org_it = ($row[$startcol + 69] !== null) ? (string) $row[$startcol + 69] : null;
            $this->adresse_it = ($row[$startcol + 70] !== null) ? (string) $row[$startcol + 70] : null;
            $this->ville_it = ($row[$startcol + 71] !== null) ? (string) $row[$startcol + 71] : null;
            $this->adresse2_it = ($row[$startcol + 72] !== null) ? (string) $row[$startcol + 72] : null;
            $this->pays_it = ($row[$startcol + 73] !== null) ? (string) $row[$startcol + 73] : null;
            $this->siren = ($row[$startcol + 74] !== null) ? (string) $row[$startcol + 74] : null;
            $this->complement = ($row[$startcol + 75] !== null) ? (string) $row[$startcol + 75] : null;
            $this->moniteur_provenance = ($row[$startcol + 76] !== null) ? (int) $row[$startcol + 76] : null;
            $this->code_acces_logiciel = ($row[$startcol + 77] !== null) ? (string) $row[$startcol + 77] : null;
            $this->decalage_horaire = ($row[$startcol + 78] !== null) ? (string) $row[$startcol + 78] : null;
            $this->lieu_residence = ($row[$startcol + 79] !== null) ? (string) $row[$startcol + 79] : null;
            $this->activation_fuseau_horaire = ($row[$startcol + 80] !== null) ? (string) $row[$startcol + 80] : null;
            $this->alerte = ($row[$startcol + 81] !== null) ? (string) $row[$startcol + 81] : null;
            $this->ordre = ($row[$startcol + 82] !== null) ? (int) $row[$startcol + 82] : null;
            $this->url_interface_anm = ($row[$startcol + 83] !== null) ? (string) $row[$startcol + 83] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 84; // 84 = CommonOrganismePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonOrganisme object", $e);
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
            $con = Propel::getConnection(CommonOrganismePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonOrganismePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collCommonAdministrateurs = null;

            $this->collCommonAffiliationServices = null;

            $this->collCommonAgents = null;

            $this->collCommonDAConsultations = null;

            $this->collCommonOrganismeServiceMetiers = null;

            $this->collCommonParametrageEncheres = null;

            $this->collCommonRPAs = null;

            $this->collCommonConsultations = null;

            $this->collCommonDemandeAchatParCatalogues = null;

            $this->collCommonDestinataireMiseDispositions = null;

            $this->collCommonTCAOCommissionConsultations = null;

            $this->collCommonTCAOOrdreDePassages = null;

            $this->collCommonTCAOSeanceInvites = null;

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
            $con = Propel::getConnection(CommonOrganismePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonOrganismeQuery::create()
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
            $con = Propel::getConnection(CommonOrganismePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonOrganismePeer::addInstanceToPool($this);
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

            if ($this->commonAdministrateursScheduledForDeletion !== null) {
                if (!$this->commonAdministrateursScheduledForDeletion->isEmpty()) {
                    //the foreign key is flagged as `CASCADE`, so we delete the items
                    CommonAdministrateurQuery::create()
                        ->filterByPrimaryKeys($this->commonAdministrateursScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->commonAdministrateursScheduledForDeletion = null;
                }
            }

            if ($this->collCommonAdministrateurs !== null) {
                foreach ($this->collCommonAdministrateurs as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonAffiliationServicesScheduledForDeletion !== null) {
                if (!$this->commonAffiliationServicesScheduledForDeletion->isEmpty()) {
                    //the foreign key is flagged as `CASCADE`, so we delete the items
                    CommonAffiliationServiceQuery::create()
                        ->filterByPrimaryKeys($this->commonAffiliationServicesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->commonAffiliationServicesScheduledForDeletion = null;
                }
            }

            if ($this->collCommonAffiliationServices !== null) {
                foreach ($this->collCommonAffiliationServices as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonAgentsScheduledForDeletion !== null) {
                if (!$this->commonAgentsScheduledForDeletion->isEmpty()) {
                    //the foreign key is flagged as `CASCADE`, so we delete the items
                    CommonAgentQuery::create()
                        ->filterByPrimaryKeys($this->commonAgentsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->commonAgentsScheduledForDeletion = null;
                }
            }

            if ($this->collCommonAgents !== null) {
                foreach ($this->collCommonAgents as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonDAConsultationsScheduledForDeletion !== null) {
                if (!$this->commonDAConsultationsScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonDAConsultationsScheduledForDeletion as $commonDAConsultation) {
                        // need to save related object because we set the relation to null
                        $commonDAConsultation->save($con);
                    }
                    $this->commonDAConsultationsScheduledForDeletion = null;
                }
            }

            if ($this->collCommonDAConsultations !== null) {
                foreach ($this->collCommonDAConsultations as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonOrganismeServiceMetiersScheduledForDeletion !== null) {
                if (!$this->commonOrganismeServiceMetiersScheduledForDeletion->isEmpty()) {
                    //the foreign key is flagged as `CASCADE`, so we delete the items
                    CommonOrganismeServiceMetierQuery::create()
                        ->filterByPrimaryKeys($this->commonOrganismeServiceMetiersScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->commonOrganismeServiceMetiersScheduledForDeletion = null;
                }
            }

            if ($this->collCommonOrganismeServiceMetiers !== null) {
                foreach ($this->collCommonOrganismeServiceMetiers as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonParametrageEncheresScheduledForDeletion !== null) {
                if (!$this->commonParametrageEncheresScheduledForDeletion->isEmpty()) {
                    //the foreign key is flagged as `CASCADE`, so we delete the items
                    CommonParametrageEnchereQuery::create()
                        ->filterByPrimaryKeys($this->commonParametrageEncheresScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->commonParametrageEncheresScheduledForDeletion = null;
                }
            }

            if ($this->collCommonParametrageEncheres !== null) {
                foreach ($this->collCommonParametrageEncheres as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonRPAsScheduledForDeletion !== null) {
                if (!$this->commonRPAsScheduledForDeletion->isEmpty()) {
                    //the foreign key is flagged as `CASCADE`, so we delete the items
                    CommonRPAQuery::create()
                        ->filterByPrimaryKeys($this->commonRPAsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->commonRPAsScheduledForDeletion = null;
                }
            }

            if ($this->collCommonRPAs !== null) {
                foreach ($this->collCommonRPAs as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonConsultationsScheduledForDeletion !== null) {
                if (!$this->commonConsultationsScheduledForDeletion->isEmpty()) {
                    //the foreign key is flagged as `CASCADE`, so we delete the items
                    CommonConsultationQuery::create()
                        ->filterByPrimaryKeys($this->commonConsultationsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->commonConsultationsScheduledForDeletion = null;
                }
            }

            if ($this->collCommonConsultations !== null) {
                foreach ($this->collCommonConsultations as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonDemandeAchatParCataloguesScheduledForDeletion !== null) {
                if (!$this->commonDemandeAchatParCataloguesScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonDemandeAchatParCataloguesScheduledForDeletion as $commonDemandeAchatParCatalogue) {
                        // need to save related object because we set the relation to null
                        $commonDemandeAchatParCatalogue->save($con);
                    }
                    $this->commonDemandeAchatParCataloguesScheduledForDeletion = null;
                }
            }

            if ($this->collCommonDemandeAchatParCatalogues !== null) {
                foreach ($this->collCommonDemandeAchatParCatalogues as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonDestinataireMiseDispositionsScheduledForDeletion !== null) {
                if (!$this->commonDestinataireMiseDispositionsScheduledForDeletion->isEmpty()) {
                    //the foreign key is flagged as `CASCADE`, so we delete the items
                    CommonDestinataireMiseDispositionQuery::create()
                        ->filterByPrimaryKeys($this->commonDestinataireMiseDispositionsScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->commonDestinataireMiseDispositionsScheduledForDeletion = null;
                }
            }

            if ($this->collCommonDestinataireMiseDispositions !== null) {
                foreach ($this->collCommonDestinataireMiseDispositions as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonTCAOCommissionConsultationsScheduledForDeletion !== null) {
                if (!$this->commonTCAOCommissionConsultationsScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonTCAOCommissionConsultationsScheduledForDeletion as $commonTCAOCommissionConsultation) {
                        // need to save related object because we set the relation to null
                        $commonTCAOCommissionConsultation->save($con);
                    }
                    $this->commonTCAOCommissionConsultationsScheduledForDeletion = null;
                }
            }

            if ($this->collCommonTCAOCommissionConsultations !== null) {
                foreach ($this->collCommonTCAOCommissionConsultations as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonTCAOOrdreDePassagesScheduledForDeletion !== null) {
                if (!$this->commonTCAOOrdreDePassagesScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonTCAOOrdreDePassagesScheduledForDeletion as $commonTCAOOrdreDePassage) {
                        // need to save related object because we set the relation to null
                        $commonTCAOOrdreDePassage->save($con);
                    }
                    $this->commonTCAOOrdreDePassagesScheduledForDeletion = null;
                }
            }

            if ($this->collCommonTCAOOrdreDePassages !== null) {
                foreach ($this->collCommonTCAOOrdreDePassages as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->commonTCAOSeanceInvitesScheduledForDeletion !== null) {
                if (!$this->commonTCAOSeanceInvitesScheduledForDeletion->isEmpty()) {
                    foreach ($this->commonTCAOSeanceInvitesScheduledForDeletion as $commonTCAOSeanceInvite) {
                        // need to save related object because we set the relation to null
                        $commonTCAOSeanceInvite->save($con);
                    }
                    $this->commonTCAOSeanceInvitesScheduledForDeletion = null;
                }
            }

            if ($this->collCommonTCAOSeanceInvites !== null) {
                foreach ($this->collCommonTCAOSeanceInvites as $referrerFK) {
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

        $this->modifiedColumns[] = CommonOrganismePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonOrganismePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonOrganismePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::ACRONYME)) {
            $modifiedColumns[':p' . $index++]  = '`acronyme`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::TYPE_ARTICLE_ORG)) {
            $modifiedColumns[':p' . $index++]  = '`type_article_org`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::DENOMINATION_ORG)) {
            $modifiedColumns[':p' . $index++]  = '`denomination_org`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::CATEGORIE_INSEE)) {
            $modifiedColumns[':p' . $index++]  = '`categorie_insee`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::DESCRIPTION_ORG)) {
            $modifiedColumns[':p' . $index++]  = '`description_org`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::ADRESSE)) {
            $modifiedColumns[':p' . $index++]  = '`adresse`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::CP)) {
            $modifiedColumns[':p' . $index++]  = '`cp`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::VILLE)) {
            $modifiedColumns[':p' . $index++]  = '`ville`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::EMAIL)) {
            $modifiedColumns[':p' . $index++]  = '`email`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::URL)) {
            $modifiedColumns[':p' . $index++]  = '`url`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::ID_ATTRIB_FILE)) {
            $modifiedColumns[':p' . $index++]  = '`id_attrib_file`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::ATTRIB_FILE)) {
            $modifiedColumns[':p' . $index++]  = '`attrib_file`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::DATE_CREATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_creation`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::ACTIVE)) {
            $modifiedColumns[':p' . $index++]  = '`active`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::ID_CLIENT_ANM)) {
            $modifiedColumns[':p' . $index++]  = '`id_client_ANM`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::STATUS)) {
            $modifiedColumns[':p' . $index++]  = '`status`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::SIGNATAIRE_CAO)) {
            $modifiedColumns[':p' . $index++]  = '`signataire_cao`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::OFFSET)) {
            $modifiedColumns[':p' . $index++]  = '`offset`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::SIGLE)) {
            $modifiedColumns[':p' . $index++]  = '`sigle`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::ADRESSE2)) {
            $modifiedColumns[':p' . $index++]  = '`adresse2`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::TEL)) {
            $modifiedColumns[':p' . $index++]  = '`tel`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::TELECOPIE)) {
            $modifiedColumns[':p' . $index++]  = '`telecopie`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::PAYS)) {
            $modifiedColumns[':p' . $index++]  = '`pays`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::AFFICHAGE_ENTITE)) {
            $modifiedColumns[':p' . $index++]  = '`affichage_entite`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::ID_INITIAL)) {
            $modifiedColumns[':p' . $index++]  = '`id_initial`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::DENOMINATION_ORG_AR)) {
            $modifiedColumns[':p' . $index++]  = '`denomination_org_ar`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::DESCRIPTION_ORG_AR)) {
            $modifiedColumns[':p' . $index++]  = '`description_org_ar`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::ADRESSE_AR)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_ar`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::VILLE_AR)) {
            $modifiedColumns[':p' . $index++]  = '`ville_ar`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::ADRESSE2_AR)) {
            $modifiedColumns[':p' . $index++]  = '`adresse2_ar`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::PAYS_AR)) {
            $modifiedColumns[':p' . $index++]  = '`pays_ar`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::DENOMINATION_ORG_FR)) {
            $modifiedColumns[':p' . $index++]  = '`denomination_org_fr`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::DESCRIPTION_ORG_FR)) {
            $modifiedColumns[':p' . $index++]  = '`description_org_fr`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::ADRESSE_FR)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_fr`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::VILLE_FR)) {
            $modifiedColumns[':p' . $index++]  = '`ville_fr`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::ADRESSE2_FR)) {
            $modifiedColumns[':p' . $index++]  = '`adresse2_fr`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::PAYS_FR)) {
            $modifiedColumns[':p' . $index++]  = '`pays_fr`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::DENOMINATION_ORG_ES)) {
            $modifiedColumns[':p' . $index++]  = '`denomination_org_es`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::DESCRIPTION_ORG_ES)) {
            $modifiedColumns[':p' . $index++]  = '`description_org_es`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::ADRESSE_ES)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_es`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::VILLE_ES)) {
            $modifiedColumns[':p' . $index++]  = '`ville_es`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::ADRESSE2_ES)) {
            $modifiedColumns[':p' . $index++]  = '`adresse2_es`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::PAYS_ES)) {
            $modifiedColumns[':p' . $index++]  = '`pays_es`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::DENOMINATION_ORG_EN)) {
            $modifiedColumns[':p' . $index++]  = '`denomination_org_en`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::DESCRIPTION_ORG_EN)) {
            $modifiedColumns[':p' . $index++]  = '`description_org_en`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::ADRESSE_EN)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_en`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::VILLE_EN)) {
            $modifiedColumns[':p' . $index++]  = '`ville_en`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::ADRESSE2_EN)) {
            $modifiedColumns[':p' . $index++]  = '`adresse2_en`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::PAYS_EN)) {
            $modifiedColumns[':p' . $index++]  = '`pays_en`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::DENOMINATION_ORG_SU)) {
            $modifiedColumns[':p' . $index++]  = '`denomination_org_su`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::DESCRIPTION_ORG_SU)) {
            $modifiedColumns[':p' . $index++]  = '`description_org_su`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::ADRESSE_SU)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_su`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::VILLE_SU)) {
            $modifiedColumns[':p' . $index++]  = '`ville_su`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::ADRESSE2_SU)) {
            $modifiedColumns[':p' . $index++]  = '`adresse2_su`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::PAYS_SU)) {
            $modifiedColumns[':p' . $index++]  = '`pays_su`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::DENOMINATION_ORG_DU)) {
            $modifiedColumns[':p' . $index++]  = '`denomination_org_du`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::DESCRIPTION_ORG_DU)) {
            $modifiedColumns[':p' . $index++]  = '`description_org_du`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::ADRESSE_DU)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_du`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::VILLE_DU)) {
            $modifiedColumns[':p' . $index++]  = '`ville_du`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::ADRESSE2_DU)) {
            $modifiedColumns[':p' . $index++]  = '`adresse2_du`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::PAYS_DU)) {
            $modifiedColumns[':p' . $index++]  = '`pays_du`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::DENOMINATION_ORG_CZ)) {
            $modifiedColumns[':p' . $index++]  = '`denomination_org_cz`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::DESCRIPTION_ORG_CZ)) {
            $modifiedColumns[':p' . $index++]  = '`description_org_cz`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::ADRESSE_CZ)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_cz`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::VILLE_CZ)) {
            $modifiedColumns[':p' . $index++]  = '`ville_cz`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::ADRESSE2_CZ)) {
            $modifiedColumns[':p' . $index++]  = '`adresse2_cz`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::PAYS_CZ)) {
            $modifiedColumns[':p' . $index++]  = '`pays_cz`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::DENOMINATION_ORG_IT)) {
            $modifiedColumns[':p' . $index++]  = '`denomination_org_it`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::DESCRIPTION_ORG_IT)) {
            $modifiedColumns[':p' . $index++]  = '`description_org_it`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::ADRESSE_IT)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_it`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::VILLE_IT)) {
            $modifiedColumns[':p' . $index++]  = '`ville_it`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::ADRESSE2_IT)) {
            $modifiedColumns[':p' . $index++]  = '`adresse2_it`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::PAYS_IT)) {
            $modifiedColumns[':p' . $index++]  = '`pays_it`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::SIREN)) {
            $modifiedColumns[':p' . $index++]  = '`siren`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::COMPLEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`complement`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::MONITEUR_PROVENANCE)) {
            $modifiedColumns[':p' . $index++]  = '`moniteur_provenance`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::CODE_ACCES_LOGICIEL)) {
            $modifiedColumns[':p' . $index++]  = '`code_acces_logiciel`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::DECALAGE_HORAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`decalage_horaire`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::LIEU_RESIDENCE)) {
            $modifiedColumns[':p' . $index++]  = '`lieu_residence`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::ACTIVATION_FUSEAU_HORAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`activation_fuseau_horaire`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::ALERTE)) {
            $modifiedColumns[':p' . $index++]  = '`alerte`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::ORDRE)) {
            $modifiedColumns[':p' . $index++]  = '`ordre`';
        }
        if ($this->isColumnModified(CommonOrganismePeer::URL_INTERFACE_ANM)) {
            $modifiedColumns[':p' . $index++]  = '`URL_INTERFACE_ANM`';
        }

        $sql = sprintf(
            'INSERT INTO `Organisme` (%s) VALUES (%s)',
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
                    case '`acronyme`':						
                        $stmt->bindValue($identifier, $this->acronyme, PDO::PARAM_STR);
                        break;
                    case '`type_article_org`':						
                        $stmt->bindValue($identifier, $this->type_article_org, PDO::PARAM_INT);
                        break;
                    case '`denomination_org`':						
                        $stmt->bindValue($identifier, $this->denomination_org, PDO::PARAM_STR);
                        break;
                    case '`categorie_insee`':						
                        $stmt->bindValue($identifier, $this->categorie_insee, PDO::PARAM_STR);
                        break;
                    case '`description_org`':						
                        $stmt->bindValue($identifier, $this->description_org, PDO::PARAM_STR);
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
                    case '`email`':						
                        $stmt->bindValue($identifier, $this->email, PDO::PARAM_STR);
                        break;
                    case '`url`':						
                        $stmt->bindValue($identifier, $this->url, PDO::PARAM_STR);
                        break;
                    case '`id_attrib_file`':						
                        $stmt->bindValue($identifier, $this->id_attrib_file, PDO::PARAM_STR);
                        break;
                    case '`attrib_file`':						
                        $stmt->bindValue($identifier, $this->attrib_file, PDO::PARAM_STR);
                        break;
                    case '`date_creation`':						
                        $stmt->bindValue($identifier, $this->date_creation, PDO::PARAM_STR);
                        break;
                    case '`active`':						
                        $stmt->bindValue($identifier, $this->active, PDO::PARAM_STR);
                        break;
                    case '`id_client_ANM`':						
                        $stmt->bindValue($identifier, $this->id_client_anm, PDO::PARAM_STR);
                        break;
                    case '`status`':						
                        $stmt->bindValue($identifier, $this->status, PDO::PARAM_STR);
                        break;
                    case '`signataire_cao`':						
                        $stmt->bindValue($identifier, $this->signataire_cao, PDO::PARAM_STR);
                        break;
                    case '`offset`':						
                        $stmt->bindValue($identifier, $this->offset, PDO::PARAM_STR);
                        break;
                    case '`sigle`':						
                        $stmt->bindValue($identifier, $this->sigle, PDO::PARAM_STR);
                        break;
                    case '`adresse2`':						
                        $stmt->bindValue($identifier, $this->adresse2, PDO::PARAM_STR);
                        break;
                    case '`tel`':						
                        $stmt->bindValue($identifier, $this->tel, PDO::PARAM_STR);
                        break;
                    case '`telecopie`':						
                        $stmt->bindValue($identifier, $this->telecopie, PDO::PARAM_STR);
                        break;
                    case '`pays`':						
                        $stmt->bindValue($identifier, $this->pays, PDO::PARAM_STR);
                        break;
                    case '`affichage_entite`':						
                        $stmt->bindValue($identifier, $this->affichage_entite, PDO::PARAM_STR);
                        break;
                    case '`id_initial`':						
                        $stmt->bindValue($identifier, $this->id_initial, PDO::PARAM_INT);
                        break;
                    case '`denomination_org_ar`':						
                        $stmt->bindValue($identifier, $this->denomination_org_ar, PDO::PARAM_STR);
                        break;
                    case '`description_org_ar`':						
                        $stmt->bindValue($identifier, $this->description_org_ar, PDO::PARAM_STR);
                        break;
                    case '`adresse_ar`':						
                        $stmt->bindValue($identifier, $this->adresse_ar, PDO::PARAM_STR);
                        break;
                    case '`ville_ar`':						
                        $stmt->bindValue($identifier, $this->ville_ar, PDO::PARAM_STR);
                        break;
                    case '`adresse2_ar`':						
                        $stmt->bindValue($identifier, $this->adresse2_ar, PDO::PARAM_STR);
                        break;
                    case '`pays_ar`':						
                        $stmt->bindValue($identifier, $this->pays_ar, PDO::PARAM_STR);
                        break;
                    case '`denomination_org_fr`':						
                        $stmt->bindValue($identifier, $this->denomination_org_fr, PDO::PARAM_STR);
                        break;
                    case '`description_org_fr`':						
                        $stmt->bindValue($identifier, $this->description_org_fr, PDO::PARAM_STR);
                        break;
                    case '`adresse_fr`':						
                        $stmt->bindValue($identifier, $this->adresse_fr, PDO::PARAM_STR);
                        break;
                    case '`ville_fr`':						
                        $stmt->bindValue($identifier, $this->ville_fr, PDO::PARAM_STR);
                        break;
                    case '`adresse2_fr`':						
                        $stmt->bindValue($identifier, $this->adresse2_fr, PDO::PARAM_STR);
                        break;
                    case '`pays_fr`':						
                        $stmt->bindValue($identifier, $this->pays_fr, PDO::PARAM_STR);
                        break;
                    case '`denomination_org_es`':						
                        $stmt->bindValue($identifier, $this->denomination_org_es, PDO::PARAM_STR);
                        break;
                    case '`description_org_es`':						
                        $stmt->bindValue($identifier, $this->description_org_es, PDO::PARAM_STR);
                        break;
                    case '`adresse_es`':						
                        $stmt->bindValue($identifier, $this->adresse_es, PDO::PARAM_STR);
                        break;
                    case '`ville_es`':						
                        $stmt->bindValue($identifier, $this->ville_es, PDO::PARAM_STR);
                        break;
                    case '`adresse2_es`':						
                        $stmt->bindValue($identifier, $this->adresse2_es, PDO::PARAM_STR);
                        break;
                    case '`pays_es`':						
                        $stmt->bindValue($identifier, $this->pays_es, PDO::PARAM_STR);
                        break;
                    case '`denomination_org_en`':						
                        $stmt->bindValue($identifier, $this->denomination_org_en, PDO::PARAM_STR);
                        break;
                    case '`description_org_en`':						
                        $stmt->bindValue($identifier, $this->description_org_en, PDO::PARAM_STR);
                        break;
                    case '`adresse_en`':						
                        $stmt->bindValue($identifier, $this->adresse_en, PDO::PARAM_STR);
                        break;
                    case '`ville_en`':						
                        $stmt->bindValue($identifier, $this->ville_en, PDO::PARAM_STR);
                        break;
                    case '`adresse2_en`':						
                        $stmt->bindValue($identifier, $this->adresse2_en, PDO::PARAM_STR);
                        break;
                    case '`pays_en`':						
                        $stmt->bindValue($identifier, $this->pays_en, PDO::PARAM_STR);
                        break;
                    case '`denomination_org_su`':						
                        $stmt->bindValue($identifier, $this->denomination_org_su, PDO::PARAM_STR);
                        break;
                    case '`description_org_su`':						
                        $stmt->bindValue($identifier, $this->description_org_su, PDO::PARAM_STR);
                        break;
                    case '`adresse_su`':						
                        $stmt->bindValue($identifier, $this->adresse_su, PDO::PARAM_STR);
                        break;
                    case '`ville_su`':						
                        $stmt->bindValue($identifier, $this->ville_su, PDO::PARAM_STR);
                        break;
                    case '`adresse2_su`':						
                        $stmt->bindValue($identifier, $this->adresse2_su, PDO::PARAM_STR);
                        break;
                    case '`pays_su`':						
                        $stmt->bindValue($identifier, $this->pays_su, PDO::PARAM_STR);
                        break;
                    case '`denomination_org_du`':						
                        $stmt->bindValue($identifier, $this->denomination_org_du, PDO::PARAM_STR);
                        break;
                    case '`description_org_du`':						
                        $stmt->bindValue($identifier, $this->description_org_du, PDO::PARAM_STR);
                        break;
                    case '`adresse_du`':						
                        $stmt->bindValue($identifier, $this->adresse_du, PDO::PARAM_STR);
                        break;
                    case '`ville_du`':						
                        $stmt->bindValue($identifier, $this->ville_du, PDO::PARAM_STR);
                        break;
                    case '`adresse2_du`':						
                        $stmt->bindValue($identifier, $this->adresse2_du, PDO::PARAM_STR);
                        break;
                    case '`pays_du`':						
                        $stmt->bindValue($identifier, $this->pays_du, PDO::PARAM_STR);
                        break;
                    case '`denomination_org_cz`':						
                        $stmt->bindValue($identifier, $this->denomination_org_cz, PDO::PARAM_STR);
                        break;
                    case '`description_org_cz`':						
                        $stmt->bindValue($identifier, $this->description_org_cz, PDO::PARAM_STR);
                        break;
                    case '`adresse_cz`':						
                        $stmt->bindValue($identifier, $this->adresse_cz, PDO::PARAM_STR);
                        break;
                    case '`ville_cz`':						
                        $stmt->bindValue($identifier, $this->ville_cz, PDO::PARAM_STR);
                        break;
                    case '`adresse2_cz`':						
                        $stmt->bindValue($identifier, $this->adresse2_cz, PDO::PARAM_STR);
                        break;
                    case '`pays_cz`':						
                        $stmt->bindValue($identifier, $this->pays_cz, PDO::PARAM_STR);
                        break;
                    case '`denomination_org_it`':						
                        $stmt->bindValue($identifier, $this->denomination_org_it, PDO::PARAM_STR);
                        break;
                    case '`description_org_it`':						
                        $stmt->bindValue($identifier, $this->description_org_it, PDO::PARAM_STR);
                        break;
                    case '`adresse_it`':						
                        $stmt->bindValue($identifier, $this->adresse_it, PDO::PARAM_STR);
                        break;
                    case '`ville_it`':						
                        $stmt->bindValue($identifier, $this->ville_it, PDO::PARAM_STR);
                        break;
                    case '`adresse2_it`':						
                        $stmt->bindValue($identifier, $this->adresse2_it, PDO::PARAM_STR);
                        break;
                    case '`pays_it`':						
                        $stmt->bindValue($identifier, $this->pays_it, PDO::PARAM_STR);
                        break;
                    case '`siren`':						
                        $stmt->bindValue($identifier, $this->siren, PDO::PARAM_STR);
                        break;
                    case '`complement`':						
                        $stmt->bindValue($identifier, $this->complement, PDO::PARAM_STR);
                        break;
                    case '`moniteur_provenance`':						
                        $stmt->bindValue($identifier, $this->moniteur_provenance, PDO::PARAM_INT);
                        break;
                    case '`code_acces_logiciel`':						
                        $stmt->bindValue($identifier, $this->code_acces_logiciel, PDO::PARAM_STR);
                        break;
                    case '`decalage_horaire`':						
                        $stmt->bindValue($identifier, $this->decalage_horaire, PDO::PARAM_STR);
                        break;
                    case '`lieu_residence`':						
                        $stmt->bindValue($identifier, $this->lieu_residence, PDO::PARAM_STR);
                        break;
                    case '`activation_fuseau_horaire`':						
                        $stmt->bindValue($identifier, $this->activation_fuseau_horaire, PDO::PARAM_STR);
                        break;
                    case '`alerte`':						
                        $stmt->bindValue($identifier, $this->alerte, PDO::PARAM_STR);
                        break;
                    case '`ordre`':						
                        $stmt->bindValue($identifier, $this->ordre, PDO::PARAM_INT);
                        break;
                    case '`URL_INTERFACE_ANM`':						
                        $stmt->bindValue($identifier, $this->url_interface_anm, PDO::PARAM_STR);
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


            if (($retval = CommonOrganismePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
            }


                if ($this->collCommonAdministrateurs !== null) {
                    foreach ($this->collCommonAdministrateurs as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonAffiliationServices !== null) {
                    foreach ($this->collCommonAffiliationServices as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonAgents !== null) {
                    foreach ($this->collCommonAgents as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonDAConsultations !== null) {
                    foreach ($this->collCommonDAConsultations as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonOrganismeServiceMetiers !== null) {
                    foreach ($this->collCommonOrganismeServiceMetiers as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonParametrageEncheres !== null) {
                    foreach ($this->collCommonParametrageEncheres as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonRPAs !== null) {
                    foreach ($this->collCommonRPAs as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonConsultations !== null) {
                    foreach ($this->collCommonConsultations as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonDemandeAchatParCatalogues !== null) {
                    foreach ($this->collCommonDemandeAchatParCatalogues as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonDestinataireMiseDispositions !== null) {
                    foreach ($this->collCommonDestinataireMiseDispositions as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonTCAOCommissionConsultations !== null) {
                    foreach ($this->collCommonTCAOCommissionConsultations as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonTCAOOrdreDePassages !== null) {
                    foreach ($this->collCommonTCAOOrdreDePassages as $referrerFK) {
                        if (!$referrerFK->validate($columns)) {
                            $failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
                        }
                    }
                }

                if ($this->collCommonTCAOSeanceInvites !== null) {
                    foreach ($this->collCommonTCAOSeanceInvites as $referrerFK) {
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
        $pos = CommonOrganismePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getAcronyme();
                break;
            case 2:
                return $this->getTypeArticleOrg();
                break;
            case 3:
                return $this->getDenominationOrg();
                break;
            case 4:
                return $this->getCategorieInsee();
                break;
            case 5:
                return $this->getDescriptionOrg();
                break;
            case 6:
                return $this->getAdresse();
                break;
            case 7:
                return $this->getCp();
                break;
            case 8:
                return $this->getVille();
                break;
            case 9:
                return $this->getEmail();
                break;
            case 10:
                return $this->getUrl();
                break;
            case 11:
                return $this->getIdAttribFile();
                break;
            case 12:
                return $this->getAttribFile();
                break;
            case 13:
                return $this->getDateCreation();
                break;
            case 14:
                return $this->getActive();
                break;
            case 15:
                return $this->getIdClientAnm();
                break;
            case 16:
                return $this->getStatus();
                break;
            case 17:
                return $this->getSignataireCao();
                break;
            case 18:
                return $this->getOffset();
                break;
            case 19:
                return $this->getSigle();
                break;
            case 20:
                return $this->getAdresse2();
                break;
            case 21:
                return $this->getTel();
                break;
            case 22:
                return $this->getTelecopie();
                break;
            case 23:
                return $this->getPays();
                break;
            case 24:
                return $this->getAffichageEntite();
                break;
            case 25:
                return $this->getIdInitial();
                break;
            case 26:
                return $this->getDenominationOrgAr();
                break;
            case 27:
                return $this->getDescriptionOrgAr();
                break;
            case 28:
                return $this->getAdresseAr();
                break;
            case 29:
                return $this->getVilleAr();
                break;
            case 30:
                return $this->getAdresse2Ar();
                break;
            case 31:
                return $this->getPaysAr();
                break;
            case 32:
                return $this->getDenominationOrgFr();
                break;
            case 33:
                return $this->getDescriptionOrgFr();
                break;
            case 34:
                return $this->getAdresseFr();
                break;
            case 35:
                return $this->getVilleFr();
                break;
            case 36:
                return $this->getAdresse2Fr();
                break;
            case 37:
                return $this->getPaysFr();
                break;
            case 38:
                return $this->getDenominationOrgEs();
                break;
            case 39:
                return $this->getDescriptionOrgEs();
                break;
            case 40:
                return $this->getAdresseEs();
                break;
            case 41:
                return $this->getVilleEs();
                break;
            case 42:
                return $this->getAdresse2Es();
                break;
            case 43:
                return $this->getPaysEs();
                break;
            case 44:
                return $this->getDenominationOrgEn();
                break;
            case 45:
                return $this->getDescriptionOrgEn();
                break;
            case 46:
                return $this->getAdresseEn();
                break;
            case 47:
                return $this->getVilleEn();
                break;
            case 48:
                return $this->getAdresse2En();
                break;
            case 49:
                return $this->getPaysEn();
                break;
            case 50:
                return $this->getDenominationOrgSu();
                break;
            case 51:
                return $this->getDescriptionOrgSu();
                break;
            case 52:
                return $this->getAdresseSu();
                break;
            case 53:
                return $this->getVilleSu();
                break;
            case 54:
                return $this->getAdresse2Su();
                break;
            case 55:
                return $this->getPaysSu();
                break;
            case 56:
                return $this->getDenominationOrgDu();
                break;
            case 57:
                return $this->getDescriptionOrgDu();
                break;
            case 58:
                return $this->getAdresseDu();
                break;
            case 59:
                return $this->getVilleDu();
                break;
            case 60:
                return $this->getAdresse2Du();
                break;
            case 61:
                return $this->getPaysDu();
                break;
            case 62:
                return $this->getDenominationOrgCz();
                break;
            case 63:
                return $this->getDescriptionOrgCz();
                break;
            case 64:
                return $this->getAdresseCz();
                break;
            case 65:
                return $this->getVilleCz();
                break;
            case 66:
                return $this->getAdresse2Cz();
                break;
            case 67:
                return $this->getPaysCz();
                break;
            case 68:
                return $this->getDenominationOrgIt();
                break;
            case 69:
                return $this->getDescriptionOrgIt();
                break;
            case 70:
                return $this->getAdresseIt();
                break;
            case 71:
                return $this->getVilleIt();
                break;
            case 72:
                return $this->getAdresse2It();
                break;
            case 73:
                return $this->getPaysIt();
                break;
            case 74:
                return $this->getSiren();
                break;
            case 75:
                return $this->getComplement();
                break;
            case 76:
                return $this->getMoniteurProvenance();
                break;
            case 77:
                return $this->getCodeAccesLogiciel();
                break;
            case 78:
                return $this->getDecalageHoraire();
                break;
            case 79:
                return $this->getLieuResidence();
                break;
            case 80:
                return $this->getActivationFuseauHoraire();
                break;
            case 81:
                return $this->getAlerte();
                break;
            case 82:
                return $this->getOrdre();
                break;
            case 83:
                return $this->getUrlInterfaceAnm();
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
        if (isset($alreadyDumpedObjects['CommonOrganisme'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonOrganisme'][$this->getPrimaryKey()] = true;
        $keys = CommonOrganismePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getAcronyme(),
            $keys[2] => $this->getTypeArticleOrg(),
            $keys[3] => $this->getDenominationOrg(),
            $keys[4] => $this->getCategorieInsee(),
            $keys[5] => $this->getDescriptionOrg(),
            $keys[6] => $this->getAdresse(),
            $keys[7] => $this->getCp(),
            $keys[8] => $this->getVille(),
            $keys[9] => $this->getEmail(),
            $keys[10] => $this->getUrl(),
            $keys[11] => $this->getIdAttribFile(),
            $keys[12] => $this->getAttribFile(),
            $keys[13] => $this->getDateCreation(),
            $keys[14] => $this->getActive(),
            $keys[15] => $this->getIdClientAnm(),
            $keys[16] => $this->getStatus(),
            $keys[17] => $this->getSignataireCao(),
            $keys[18] => $this->getOffset(),
            $keys[19] => $this->getSigle(),
            $keys[20] => $this->getAdresse2(),
            $keys[21] => $this->getTel(),
            $keys[22] => $this->getTelecopie(),
            $keys[23] => $this->getPays(),
            $keys[24] => $this->getAffichageEntite(),
            $keys[25] => $this->getIdInitial(),
            $keys[26] => $this->getDenominationOrgAr(),
            $keys[27] => $this->getDescriptionOrgAr(),
            $keys[28] => $this->getAdresseAr(),
            $keys[29] => $this->getVilleAr(),
            $keys[30] => $this->getAdresse2Ar(),
            $keys[31] => $this->getPaysAr(),
            $keys[32] => $this->getDenominationOrgFr(),
            $keys[33] => $this->getDescriptionOrgFr(),
            $keys[34] => $this->getAdresseFr(),
            $keys[35] => $this->getVilleFr(),
            $keys[36] => $this->getAdresse2Fr(),
            $keys[37] => $this->getPaysFr(),
            $keys[38] => $this->getDenominationOrgEs(),
            $keys[39] => $this->getDescriptionOrgEs(),
            $keys[40] => $this->getAdresseEs(),
            $keys[41] => $this->getVilleEs(),
            $keys[42] => $this->getAdresse2Es(),
            $keys[43] => $this->getPaysEs(),
            $keys[44] => $this->getDenominationOrgEn(),
            $keys[45] => $this->getDescriptionOrgEn(),
            $keys[46] => $this->getAdresseEn(),
            $keys[47] => $this->getVilleEn(),
            $keys[48] => $this->getAdresse2En(),
            $keys[49] => $this->getPaysEn(),
            $keys[50] => $this->getDenominationOrgSu(),
            $keys[51] => $this->getDescriptionOrgSu(),
            $keys[52] => $this->getAdresseSu(),
            $keys[53] => $this->getVilleSu(),
            $keys[54] => $this->getAdresse2Su(),
            $keys[55] => $this->getPaysSu(),
            $keys[56] => $this->getDenominationOrgDu(),
            $keys[57] => $this->getDescriptionOrgDu(),
            $keys[58] => $this->getAdresseDu(),
            $keys[59] => $this->getVilleDu(),
            $keys[60] => $this->getAdresse2Du(),
            $keys[61] => $this->getPaysDu(),
            $keys[62] => $this->getDenominationOrgCz(),
            $keys[63] => $this->getDescriptionOrgCz(),
            $keys[64] => $this->getAdresseCz(),
            $keys[65] => $this->getVilleCz(),
            $keys[66] => $this->getAdresse2Cz(),
            $keys[67] => $this->getPaysCz(),
            $keys[68] => $this->getDenominationOrgIt(),
            $keys[69] => $this->getDescriptionOrgIt(),
            $keys[70] => $this->getAdresseIt(),
            $keys[71] => $this->getVilleIt(),
            $keys[72] => $this->getAdresse2It(),
            $keys[73] => $this->getPaysIt(),
            $keys[74] => $this->getSiren(),
            $keys[75] => $this->getComplement(),
            $keys[76] => $this->getMoniteurProvenance(),
            $keys[77] => $this->getCodeAccesLogiciel(),
            $keys[78] => $this->getDecalageHoraire(),
            $keys[79] => $this->getLieuResidence(),
            $keys[80] => $this->getActivationFuseauHoraire(),
            $keys[81] => $this->getAlerte(),
            $keys[82] => $this->getOrdre(),
            $keys[83] => $this->getUrlInterfaceAnm(),
        );
        if ($includeForeignObjects) {
            if (null !== $this->collCommonAdministrateurs) {
                $result['CommonAdministrateurs'] = $this->collCommonAdministrateurs->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonAffiliationServices) {
                $result['CommonAffiliationServices'] = $this->collCommonAffiliationServices->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonAgents) {
                $result['CommonAgents'] = $this->collCommonAgents->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonDAConsultations) {
                $result['CommonDAConsultations'] = $this->collCommonDAConsultations->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonOrganismeServiceMetiers) {
                $result['CommonOrganismeServiceMetiers'] = $this->collCommonOrganismeServiceMetiers->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonParametrageEncheres) {
                $result['CommonParametrageEncheres'] = $this->collCommonParametrageEncheres->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonRPAs) {
                $result['CommonRPAs'] = $this->collCommonRPAs->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonConsultations) {
                $result['CommonConsultations'] = $this->collCommonConsultations->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonDemandeAchatParCatalogues) {
                $result['CommonDemandeAchatParCatalogues'] = $this->collCommonDemandeAchatParCatalogues->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonDestinataireMiseDispositions) {
                $result['CommonDestinataireMiseDispositions'] = $this->collCommonDestinataireMiseDispositions->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonTCAOCommissionConsultations) {
                $result['CommonTCAOCommissionConsultations'] = $this->collCommonTCAOCommissionConsultations->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonTCAOOrdreDePassages) {
                $result['CommonTCAOOrdreDePassages'] = $this->collCommonTCAOOrdreDePassages->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collCommonTCAOSeanceInvites) {
                $result['CommonTCAOSeanceInvites'] = $this->collCommonTCAOSeanceInvites->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = CommonOrganismePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setAcronyme($value);
                break;
            case 2:
                $this->setTypeArticleOrg($value);
                break;
            case 3:
                $this->setDenominationOrg($value);
                break;
            case 4:
                $this->setCategorieInsee($value);
                break;
            case 5:
                $this->setDescriptionOrg($value);
                break;
            case 6:
                $this->setAdresse($value);
                break;
            case 7:
                $this->setCp($value);
                break;
            case 8:
                $this->setVille($value);
                break;
            case 9:
                $this->setEmail($value);
                break;
            case 10:
                $this->setUrl($value);
                break;
            case 11:
                $this->setIdAttribFile($value);
                break;
            case 12:
                $this->setAttribFile($value);
                break;
            case 13:
                $this->setDateCreation($value);
                break;
            case 14:
                $this->setActive($value);
                break;
            case 15:
                $this->setIdClientAnm($value);
                break;
            case 16:
                $this->setStatus($value);
                break;
            case 17:
                $this->setSignataireCao($value);
                break;
            case 18:
                $this->setOffset($value);
                break;
            case 19:
                $this->setSigle($value);
                break;
            case 20:
                $this->setAdresse2($value);
                break;
            case 21:
                $this->setTel($value);
                break;
            case 22:
                $this->setTelecopie($value);
                break;
            case 23:
                $this->setPays($value);
                break;
            case 24:
                $this->setAffichageEntite($value);
                break;
            case 25:
                $this->setIdInitial($value);
                break;
            case 26:
                $this->setDenominationOrgAr($value);
                break;
            case 27:
                $this->setDescriptionOrgAr($value);
                break;
            case 28:
                $this->setAdresseAr($value);
                break;
            case 29:
                $this->setVilleAr($value);
                break;
            case 30:
                $this->setAdresse2Ar($value);
                break;
            case 31:
                $this->setPaysAr($value);
                break;
            case 32:
                $this->setDenominationOrgFr($value);
                break;
            case 33:
                $this->setDescriptionOrgFr($value);
                break;
            case 34:
                $this->setAdresseFr($value);
                break;
            case 35:
                $this->setVilleFr($value);
                break;
            case 36:
                $this->setAdresse2Fr($value);
                break;
            case 37:
                $this->setPaysFr($value);
                break;
            case 38:
                $this->setDenominationOrgEs($value);
                break;
            case 39:
                $this->setDescriptionOrgEs($value);
                break;
            case 40:
                $this->setAdresseEs($value);
                break;
            case 41:
                $this->setVilleEs($value);
                break;
            case 42:
                $this->setAdresse2Es($value);
                break;
            case 43:
                $this->setPaysEs($value);
                break;
            case 44:
                $this->setDenominationOrgEn($value);
                break;
            case 45:
                $this->setDescriptionOrgEn($value);
                break;
            case 46:
                $this->setAdresseEn($value);
                break;
            case 47:
                $this->setVilleEn($value);
                break;
            case 48:
                $this->setAdresse2En($value);
                break;
            case 49:
                $this->setPaysEn($value);
                break;
            case 50:
                $this->setDenominationOrgSu($value);
                break;
            case 51:
                $this->setDescriptionOrgSu($value);
                break;
            case 52:
                $this->setAdresseSu($value);
                break;
            case 53:
                $this->setVilleSu($value);
                break;
            case 54:
                $this->setAdresse2Su($value);
                break;
            case 55:
                $this->setPaysSu($value);
                break;
            case 56:
                $this->setDenominationOrgDu($value);
                break;
            case 57:
                $this->setDescriptionOrgDu($value);
                break;
            case 58:
                $this->setAdresseDu($value);
                break;
            case 59:
                $this->setVilleDu($value);
                break;
            case 60:
                $this->setAdresse2Du($value);
                break;
            case 61:
                $this->setPaysDu($value);
                break;
            case 62:
                $this->setDenominationOrgCz($value);
                break;
            case 63:
                $this->setDescriptionOrgCz($value);
                break;
            case 64:
                $this->setAdresseCz($value);
                break;
            case 65:
                $this->setVilleCz($value);
                break;
            case 66:
                $this->setAdresse2Cz($value);
                break;
            case 67:
                $this->setPaysCz($value);
                break;
            case 68:
                $this->setDenominationOrgIt($value);
                break;
            case 69:
                $this->setDescriptionOrgIt($value);
                break;
            case 70:
                $this->setAdresseIt($value);
                break;
            case 71:
                $this->setVilleIt($value);
                break;
            case 72:
                $this->setAdresse2It($value);
                break;
            case 73:
                $this->setPaysIt($value);
                break;
            case 74:
                $this->setSiren($value);
                break;
            case 75:
                $this->setComplement($value);
                break;
            case 76:
                $this->setMoniteurProvenance($value);
                break;
            case 77:
                $this->setCodeAccesLogiciel($value);
                break;
            case 78:
                $this->setDecalageHoraire($value);
                break;
            case 79:
                $this->setLieuResidence($value);
                break;
            case 80:
                $this->setActivationFuseauHoraire($value);
                break;
            case 81:
                $this->setAlerte($value);
                break;
            case 82:
                $this->setOrdre($value);
                break;
            case 83:
                $this->setUrlInterfaceAnm($value);
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
        $keys = CommonOrganismePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setAcronyme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setTypeArticleOrg($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setDenominationOrg($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setCategorieInsee($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setDescriptionOrg($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setAdresse($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setCp($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setVille($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setEmail($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setUrl($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setIdAttribFile($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setAttribFile($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setDateCreation($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setActive($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setIdClientAnm($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setStatus($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setSignataireCao($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setOffset($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setSigle($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setAdresse2($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setTel($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setTelecopie($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setPays($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setAffichageEntite($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setIdInitial($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setDenominationOrgAr($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setDescriptionOrgAr($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setAdresseAr($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setVilleAr($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setAdresse2Ar($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setPaysAr($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setDenominationOrgFr($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setDescriptionOrgFr($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setAdresseFr($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setVilleFr($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setAdresse2Fr($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setPaysFr($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setDenominationOrgEs($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setDescriptionOrgEs($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setAdresseEs($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setVilleEs($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setAdresse2Es($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setPaysEs($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setDenominationOrgEn($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setDescriptionOrgEn($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setAdresseEn($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setVilleEn($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setAdresse2En($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setPaysEn($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setDenominationOrgSu($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setDescriptionOrgSu($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setAdresseSu($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setVilleSu($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setAdresse2Su($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setPaysSu($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setDenominationOrgDu($arr[$keys[56]]);
        if (array_key_exists($keys[57], $arr)) $this->setDescriptionOrgDu($arr[$keys[57]]);
        if (array_key_exists($keys[58], $arr)) $this->setAdresseDu($arr[$keys[58]]);
        if (array_key_exists($keys[59], $arr)) $this->setVilleDu($arr[$keys[59]]);
        if (array_key_exists($keys[60], $arr)) $this->setAdresse2Du($arr[$keys[60]]);
        if (array_key_exists($keys[61], $arr)) $this->setPaysDu($arr[$keys[61]]);
        if (array_key_exists($keys[62], $arr)) $this->setDenominationOrgCz($arr[$keys[62]]);
        if (array_key_exists($keys[63], $arr)) $this->setDescriptionOrgCz($arr[$keys[63]]);
        if (array_key_exists($keys[64], $arr)) $this->setAdresseCz($arr[$keys[64]]);
        if (array_key_exists($keys[65], $arr)) $this->setVilleCz($arr[$keys[65]]);
        if (array_key_exists($keys[66], $arr)) $this->setAdresse2Cz($arr[$keys[66]]);
        if (array_key_exists($keys[67], $arr)) $this->setPaysCz($arr[$keys[67]]);
        if (array_key_exists($keys[68], $arr)) $this->setDenominationOrgIt($arr[$keys[68]]);
        if (array_key_exists($keys[69], $arr)) $this->setDescriptionOrgIt($arr[$keys[69]]);
        if (array_key_exists($keys[70], $arr)) $this->setAdresseIt($arr[$keys[70]]);
        if (array_key_exists($keys[71], $arr)) $this->setVilleIt($arr[$keys[71]]);
        if (array_key_exists($keys[72], $arr)) $this->setAdresse2It($arr[$keys[72]]);
        if (array_key_exists($keys[73], $arr)) $this->setPaysIt($arr[$keys[73]]);
        if (array_key_exists($keys[74], $arr)) $this->setSiren($arr[$keys[74]]);
        if (array_key_exists($keys[75], $arr)) $this->setComplement($arr[$keys[75]]);
        if (array_key_exists($keys[76], $arr)) $this->setMoniteurProvenance($arr[$keys[76]]);
        if (array_key_exists($keys[77], $arr)) $this->setCodeAccesLogiciel($arr[$keys[77]]);
        if (array_key_exists($keys[78], $arr)) $this->setDecalageHoraire($arr[$keys[78]]);
        if (array_key_exists($keys[79], $arr)) $this->setLieuResidence($arr[$keys[79]]);
        if (array_key_exists($keys[80], $arr)) $this->setActivationFuseauHoraire($arr[$keys[80]]);
        if (array_key_exists($keys[81], $arr)) $this->setAlerte($arr[$keys[81]]);
        if (array_key_exists($keys[82], $arr)) $this->setOrdre($arr[$keys[82]]);
        if (array_key_exists($keys[83], $arr)) $this->setUrlInterfaceAnm($arr[$keys[83]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonOrganismePeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonOrganismePeer::ID)) $criteria->add(CommonOrganismePeer::ID, $this->id);
        if ($this->isColumnModified(CommonOrganismePeer::ACRONYME)) $criteria->add(CommonOrganismePeer::ACRONYME, $this->acronyme);
        if ($this->isColumnModified(CommonOrganismePeer::TYPE_ARTICLE_ORG)) $criteria->add(CommonOrganismePeer::TYPE_ARTICLE_ORG, $this->type_article_org);
        if ($this->isColumnModified(CommonOrganismePeer::DENOMINATION_ORG)) $criteria->add(CommonOrganismePeer::DENOMINATION_ORG, $this->denomination_org);
        if ($this->isColumnModified(CommonOrganismePeer::CATEGORIE_INSEE)) $criteria->add(CommonOrganismePeer::CATEGORIE_INSEE, $this->categorie_insee);
        if ($this->isColumnModified(CommonOrganismePeer::DESCRIPTION_ORG)) $criteria->add(CommonOrganismePeer::DESCRIPTION_ORG, $this->description_org);
        if ($this->isColumnModified(CommonOrganismePeer::ADRESSE)) $criteria->add(CommonOrganismePeer::ADRESSE, $this->adresse);
        if ($this->isColumnModified(CommonOrganismePeer::CP)) $criteria->add(CommonOrganismePeer::CP, $this->cp);
        if ($this->isColumnModified(CommonOrganismePeer::VILLE)) $criteria->add(CommonOrganismePeer::VILLE, $this->ville);
        if ($this->isColumnModified(CommonOrganismePeer::EMAIL)) $criteria->add(CommonOrganismePeer::EMAIL, $this->email);
        if ($this->isColumnModified(CommonOrganismePeer::URL)) $criteria->add(CommonOrganismePeer::URL, $this->url);
        if ($this->isColumnModified(CommonOrganismePeer::ID_ATTRIB_FILE)) $criteria->add(CommonOrganismePeer::ID_ATTRIB_FILE, $this->id_attrib_file);
        if ($this->isColumnModified(CommonOrganismePeer::ATTRIB_FILE)) $criteria->add(CommonOrganismePeer::ATTRIB_FILE, $this->attrib_file);
        if ($this->isColumnModified(CommonOrganismePeer::DATE_CREATION)) $criteria->add(CommonOrganismePeer::DATE_CREATION, $this->date_creation);
        if ($this->isColumnModified(CommonOrganismePeer::ACTIVE)) $criteria->add(CommonOrganismePeer::ACTIVE, $this->active);
        if ($this->isColumnModified(CommonOrganismePeer::ID_CLIENT_ANM)) $criteria->add(CommonOrganismePeer::ID_CLIENT_ANM, $this->id_client_anm);
        if ($this->isColumnModified(CommonOrganismePeer::STATUS)) $criteria->add(CommonOrganismePeer::STATUS, $this->status);
        if ($this->isColumnModified(CommonOrganismePeer::SIGNATAIRE_CAO)) $criteria->add(CommonOrganismePeer::SIGNATAIRE_CAO, $this->signataire_cao);
        if ($this->isColumnModified(CommonOrganismePeer::OFFSET)) $criteria->add(CommonOrganismePeer::OFFSET, $this->offset);
        if ($this->isColumnModified(CommonOrganismePeer::SIGLE)) $criteria->add(CommonOrganismePeer::SIGLE, $this->sigle);
        if ($this->isColumnModified(CommonOrganismePeer::ADRESSE2)) $criteria->add(CommonOrganismePeer::ADRESSE2, $this->adresse2);
        if ($this->isColumnModified(CommonOrganismePeer::TEL)) $criteria->add(CommonOrganismePeer::TEL, $this->tel);
        if ($this->isColumnModified(CommonOrganismePeer::TELECOPIE)) $criteria->add(CommonOrganismePeer::TELECOPIE, $this->telecopie);
        if ($this->isColumnModified(CommonOrganismePeer::PAYS)) $criteria->add(CommonOrganismePeer::PAYS, $this->pays);
        if ($this->isColumnModified(CommonOrganismePeer::AFFICHAGE_ENTITE)) $criteria->add(CommonOrganismePeer::AFFICHAGE_ENTITE, $this->affichage_entite);
        if ($this->isColumnModified(CommonOrganismePeer::ID_INITIAL)) $criteria->add(CommonOrganismePeer::ID_INITIAL, $this->id_initial);
        if ($this->isColumnModified(CommonOrganismePeer::DENOMINATION_ORG_AR)) $criteria->add(CommonOrganismePeer::DENOMINATION_ORG_AR, $this->denomination_org_ar);
        if ($this->isColumnModified(CommonOrganismePeer::DESCRIPTION_ORG_AR)) $criteria->add(CommonOrganismePeer::DESCRIPTION_ORG_AR, $this->description_org_ar);
        if ($this->isColumnModified(CommonOrganismePeer::ADRESSE_AR)) $criteria->add(CommonOrganismePeer::ADRESSE_AR, $this->adresse_ar);
        if ($this->isColumnModified(CommonOrganismePeer::VILLE_AR)) $criteria->add(CommonOrganismePeer::VILLE_AR, $this->ville_ar);
        if ($this->isColumnModified(CommonOrganismePeer::ADRESSE2_AR)) $criteria->add(CommonOrganismePeer::ADRESSE2_AR, $this->adresse2_ar);
        if ($this->isColumnModified(CommonOrganismePeer::PAYS_AR)) $criteria->add(CommonOrganismePeer::PAYS_AR, $this->pays_ar);
        if ($this->isColumnModified(CommonOrganismePeer::DENOMINATION_ORG_FR)) $criteria->add(CommonOrganismePeer::DENOMINATION_ORG_FR, $this->denomination_org_fr);
        if ($this->isColumnModified(CommonOrganismePeer::DESCRIPTION_ORG_FR)) $criteria->add(CommonOrganismePeer::DESCRIPTION_ORG_FR, $this->description_org_fr);
        if ($this->isColumnModified(CommonOrganismePeer::ADRESSE_FR)) $criteria->add(CommonOrganismePeer::ADRESSE_FR, $this->adresse_fr);
        if ($this->isColumnModified(CommonOrganismePeer::VILLE_FR)) $criteria->add(CommonOrganismePeer::VILLE_FR, $this->ville_fr);
        if ($this->isColumnModified(CommonOrganismePeer::ADRESSE2_FR)) $criteria->add(CommonOrganismePeer::ADRESSE2_FR, $this->adresse2_fr);
        if ($this->isColumnModified(CommonOrganismePeer::PAYS_FR)) $criteria->add(CommonOrganismePeer::PAYS_FR, $this->pays_fr);
        if ($this->isColumnModified(CommonOrganismePeer::DENOMINATION_ORG_ES)) $criteria->add(CommonOrganismePeer::DENOMINATION_ORG_ES, $this->denomination_org_es);
        if ($this->isColumnModified(CommonOrganismePeer::DESCRIPTION_ORG_ES)) $criteria->add(CommonOrganismePeer::DESCRIPTION_ORG_ES, $this->description_org_es);
        if ($this->isColumnModified(CommonOrganismePeer::ADRESSE_ES)) $criteria->add(CommonOrganismePeer::ADRESSE_ES, $this->adresse_es);
        if ($this->isColumnModified(CommonOrganismePeer::VILLE_ES)) $criteria->add(CommonOrganismePeer::VILLE_ES, $this->ville_es);
        if ($this->isColumnModified(CommonOrganismePeer::ADRESSE2_ES)) $criteria->add(CommonOrganismePeer::ADRESSE2_ES, $this->adresse2_es);
        if ($this->isColumnModified(CommonOrganismePeer::PAYS_ES)) $criteria->add(CommonOrganismePeer::PAYS_ES, $this->pays_es);
        if ($this->isColumnModified(CommonOrganismePeer::DENOMINATION_ORG_EN)) $criteria->add(CommonOrganismePeer::DENOMINATION_ORG_EN, $this->denomination_org_en);
        if ($this->isColumnModified(CommonOrganismePeer::DESCRIPTION_ORG_EN)) $criteria->add(CommonOrganismePeer::DESCRIPTION_ORG_EN, $this->description_org_en);
        if ($this->isColumnModified(CommonOrganismePeer::ADRESSE_EN)) $criteria->add(CommonOrganismePeer::ADRESSE_EN, $this->adresse_en);
        if ($this->isColumnModified(CommonOrganismePeer::VILLE_EN)) $criteria->add(CommonOrganismePeer::VILLE_EN, $this->ville_en);
        if ($this->isColumnModified(CommonOrganismePeer::ADRESSE2_EN)) $criteria->add(CommonOrganismePeer::ADRESSE2_EN, $this->adresse2_en);
        if ($this->isColumnModified(CommonOrganismePeer::PAYS_EN)) $criteria->add(CommonOrganismePeer::PAYS_EN, $this->pays_en);
        if ($this->isColumnModified(CommonOrganismePeer::DENOMINATION_ORG_SU)) $criteria->add(CommonOrganismePeer::DENOMINATION_ORG_SU, $this->denomination_org_su);
        if ($this->isColumnModified(CommonOrganismePeer::DESCRIPTION_ORG_SU)) $criteria->add(CommonOrganismePeer::DESCRIPTION_ORG_SU, $this->description_org_su);
        if ($this->isColumnModified(CommonOrganismePeer::ADRESSE_SU)) $criteria->add(CommonOrganismePeer::ADRESSE_SU, $this->adresse_su);
        if ($this->isColumnModified(CommonOrganismePeer::VILLE_SU)) $criteria->add(CommonOrganismePeer::VILLE_SU, $this->ville_su);
        if ($this->isColumnModified(CommonOrganismePeer::ADRESSE2_SU)) $criteria->add(CommonOrganismePeer::ADRESSE2_SU, $this->adresse2_su);
        if ($this->isColumnModified(CommonOrganismePeer::PAYS_SU)) $criteria->add(CommonOrganismePeer::PAYS_SU, $this->pays_su);
        if ($this->isColumnModified(CommonOrganismePeer::DENOMINATION_ORG_DU)) $criteria->add(CommonOrganismePeer::DENOMINATION_ORG_DU, $this->denomination_org_du);
        if ($this->isColumnModified(CommonOrganismePeer::DESCRIPTION_ORG_DU)) $criteria->add(CommonOrganismePeer::DESCRIPTION_ORG_DU, $this->description_org_du);
        if ($this->isColumnModified(CommonOrganismePeer::ADRESSE_DU)) $criteria->add(CommonOrganismePeer::ADRESSE_DU, $this->adresse_du);
        if ($this->isColumnModified(CommonOrganismePeer::VILLE_DU)) $criteria->add(CommonOrganismePeer::VILLE_DU, $this->ville_du);
        if ($this->isColumnModified(CommonOrganismePeer::ADRESSE2_DU)) $criteria->add(CommonOrganismePeer::ADRESSE2_DU, $this->adresse2_du);
        if ($this->isColumnModified(CommonOrganismePeer::PAYS_DU)) $criteria->add(CommonOrganismePeer::PAYS_DU, $this->pays_du);
        if ($this->isColumnModified(CommonOrganismePeer::DENOMINATION_ORG_CZ)) $criteria->add(CommonOrganismePeer::DENOMINATION_ORG_CZ, $this->denomination_org_cz);
        if ($this->isColumnModified(CommonOrganismePeer::DESCRIPTION_ORG_CZ)) $criteria->add(CommonOrganismePeer::DESCRIPTION_ORG_CZ, $this->description_org_cz);
        if ($this->isColumnModified(CommonOrganismePeer::ADRESSE_CZ)) $criteria->add(CommonOrganismePeer::ADRESSE_CZ, $this->adresse_cz);
        if ($this->isColumnModified(CommonOrganismePeer::VILLE_CZ)) $criteria->add(CommonOrganismePeer::VILLE_CZ, $this->ville_cz);
        if ($this->isColumnModified(CommonOrganismePeer::ADRESSE2_CZ)) $criteria->add(CommonOrganismePeer::ADRESSE2_CZ, $this->adresse2_cz);
        if ($this->isColumnModified(CommonOrganismePeer::PAYS_CZ)) $criteria->add(CommonOrganismePeer::PAYS_CZ, $this->pays_cz);
        if ($this->isColumnModified(CommonOrganismePeer::DENOMINATION_ORG_IT)) $criteria->add(CommonOrganismePeer::DENOMINATION_ORG_IT, $this->denomination_org_it);
        if ($this->isColumnModified(CommonOrganismePeer::DESCRIPTION_ORG_IT)) $criteria->add(CommonOrganismePeer::DESCRIPTION_ORG_IT, $this->description_org_it);
        if ($this->isColumnModified(CommonOrganismePeer::ADRESSE_IT)) $criteria->add(CommonOrganismePeer::ADRESSE_IT, $this->adresse_it);
        if ($this->isColumnModified(CommonOrganismePeer::VILLE_IT)) $criteria->add(CommonOrganismePeer::VILLE_IT, $this->ville_it);
        if ($this->isColumnModified(CommonOrganismePeer::ADRESSE2_IT)) $criteria->add(CommonOrganismePeer::ADRESSE2_IT, $this->adresse2_it);
        if ($this->isColumnModified(CommonOrganismePeer::PAYS_IT)) $criteria->add(CommonOrganismePeer::PAYS_IT, $this->pays_it);
        if ($this->isColumnModified(CommonOrganismePeer::SIREN)) $criteria->add(CommonOrganismePeer::SIREN, $this->siren);
        if ($this->isColumnModified(CommonOrganismePeer::COMPLEMENT)) $criteria->add(CommonOrganismePeer::COMPLEMENT, $this->complement);
        if ($this->isColumnModified(CommonOrganismePeer::MONITEUR_PROVENANCE)) $criteria->add(CommonOrganismePeer::MONITEUR_PROVENANCE, $this->moniteur_provenance);
        if ($this->isColumnModified(CommonOrganismePeer::CODE_ACCES_LOGICIEL)) $criteria->add(CommonOrganismePeer::CODE_ACCES_LOGICIEL, $this->code_acces_logiciel);
        if ($this->isColumnModified(CommonOrganismePeer::DECALAGE_HORAIRE)) $criteria->add(CommonOrganismePeer::DECALAGE_HORAIRE, $this->decalage_horaire);
        if ($this->isColumnModified(CommonOrganismePeer::LIEU_RESIDENCE)) $criteria->add(CommonOrganismePeer::LIEU_RESIDENCE, $this->lieu_residence);
        if ($this->isColumnModified(CommonOrganismePeer::ACTIVATION_FUSEAU_HORAIRE)) $criteria->add(CommonOrganismePeer::ACTIVATION_FUSEAU_HORAIRE, $this->activation_fuseau_horaire);
        if ($this->isColumnModified(CommonOrganismePeer::ALERTE)) $criteria->add(CommonOrganismePeer::ALERTE, $this->alerte);
        if ($this->isColumnModified(CommonOrganismePeer::ORDRE)) $criteria->add(CommonOrganismePeer::ORDRE, $this->ordre);
        if ($this->isColumnModified(CommonOrganismePeer::URL_INTERFACE_ANM)) $criteria->add(CommonOrganismePeer::URL_INTERFACE_ANM, $this->url_interface_anm);

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
        $criteria = new Criteria(CommonOrganismePeer::DATABASE_NAME);
        $criteria->add(CommonOrganismePeer::ID, $this->id);

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
     * @param object $copyObj An object of CommonOrganisme (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setAcronyme($this->getAcronyme());
        $copyObj->setTypeArticleOrg($this->getTypeArticleOrg());
        $copyObj->setDenominationOrg($this->getDenominationOrg());
        $copyObj->setCategorieInsee($this->getCategorieInsee());
        $copyObj->setDescriptionOrg($this->getDescriptionOrg());
        $copyObj->setAdresse($this->getAdresse());
        $copyObj->setCp($this->getCp());
        $copyObj->setVille($this->getVille());
        $copyObj->setEmail($this->getEmail());
        $copyObj->setUrl($this->getUrl());
        $copyObj->setIdAttribFile($this->getIdAttribFile());
        $copyObj->setAttribFile($this->getAttribFile());
        $copyObj->setDateCreation($this->getDateCreation());
        $copyObj->setActive($this->getActive());
        $copyObj->setIdClientAnm($this->getIdClientAnm());
        $copyObj->setStatus($this->getStatus());
        $copyObj->setSignataireCao($this->getSignataireCao());
        $copyObj->setOffset($this->getOffset());
        $copyObj->setSigle($this->getSigle());
        $copyObj->setAdresse2($this->getAdresse2());
        $copyObj->setTel($this->getTel());
        $copyObj->setTelecopie($this->getTelecopie());
        $copyObj->setPays($this->getPays());
        $copyObj->setAffichageEntite($this->getAffichageEntite());
        $copyObj->setIdInitial($this->getIdInitial());
        $copyObj->setDenominationOrgAr($this->getDenominationOrgAr());
        $copyObj->setDescriptionOrgAr($this->getDescriptionOrgAr());
        $copyObj->setAdresseAr($this->getAdresseAr());
        $copyObj->setVilleAr($this->getVilleAr());
        $copyObj->setAdresse2Ar($this->getAdresse2Ar());
        $copyObj->setPaysAr($this->getPaysAr());
        $copyObj->setDenominationOrgFr($this->getDenominationOrgFr());
        $copyObj->setDescriptionOrgFr($this->getDescriptionOrgFr());
        $copyObj->setAdresseFr($this->getAdresseFr());
        $copyObj->setVilleFr($this->getVilleFr());
        $copyObj->setAdresse2Fr($this->getAdresse2Fr());
        $copyObj->setPaysFr($this->getPaysFr());
        $copyObj->setDenominationOrgEs($this->getDenominationOrgEs());
        $copyObj->setDescriptionOrgEs($this->getDescriptionOrgEs());
        $copyObj->setAdresseEs($this->getAdresseEs());
        $copyObj->setVilleEs($this->getVilleEs());
        $copyObj->setAdresse2Es($this->getAdresse2Es());
        $copyObj->setPaysEs($this->getPaysEs());
        $copyObj->setDenominationOrgEn($this->getDenominationOrgEn());
        $copyObj->setDescriptionOrgEn($this->getDescriptionOrgEn());
        $copyObj->setAdresseEn($this->getAdresseEn());
        $copyObj->setVilleEn($this->getVilleEn());
        $copyObj->setAdresse2En($this->getAdresse2En());
        $copyObj->setPaysEn($this->getPaysEn());
        $copyObj->setDenominationOrgSu($this->getDenominationOrgSu());
        $copyObj->setDescriptionOrgSu($this->getDescriptionOrgSu());
        $copyObj->setAdresseSu($this->getAdresseSu());
        $copyObj->setVilleSu($this->getVilleSu());
        $copyObj->setAdresse2Su($this->getAdresse2Su());
        $copyObj->setPaysSu($this->getPaysSu());
        $copyObj->setDenominationOrgDu($this->getDenominationOrgDu());
        $copyObj->setDescriptionOrgDu($this->getDescriptionOrgDu());
        $copyObj->setAdresseDu($this->getAdresseDu());
        $copyObj->setVilleDu($this->getVilleDu());
        $copyObj->setAdresse2Du($this->getAdresse2Du());
        $copyObj->setPaysDu($this->getPaysDu());
        $copyObj->setDenominationOrgCz($this->getDenominationOrgCz());
        $copyObj->setDescriptionOrgCz($this->getDescriptionOrgCz());
        $copyObj->setAdresseCz($this->getAdresseCz());
        $copyObj->setVilleCz($this->getVilleCz());
        $copyObj->setAdresse2Cz($this->getAdresse2Cz());
        $copyObj->setPaysCz($this->getPaysCz());
        $copyObj->setDenominationOrgIt($this->getDenominationOrgIt());
        $copyObj->setDescriptionOrgIt($this->getDescriptionOrgIt());
        $copyObj->setAdresseIt($this->getAdresseIt());
        $copyObj->setVilleIt($this->getVilleIt());
        $copyObj->setAdresse2It($this->getAdresse2It());
        $copyObj->setPaysIt($this->getPaysIt());
        $copyObj->setSiren($this->getSiren());
        $copyObj->setComplement($this->getComplement());
        $copyObj->setMoniteurProvenance($this->getMoniteurProvenance());
        $copyObj->setCodeAccesLogiciel($this->getCodeAccesLogiciel());
        $copyObj->setDecalageHoraire($this->getDecalageHoraire());
        $copyObj->setLieuResidence($this->getLieuResidence());
        $copyObj->setActivationFuseauHoraire($this->getActivationFuseauHoraire());
        $copyObj->setAlerte($this->getAlerte());
        $copyObj->setOrdre($this->getOrdre());
        $copyObj->setUrlInterfaceAnm($this->getUrlInterfaceAnm());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

            foreach ($this->getCommonAdministrateurs() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonAdministrateur($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonAffiliationServices() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonAffiliationService($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonAgents() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonAgent($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonDAConsultations() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonDAConsultation($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonOrganismeServiceMetiers() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonOrganismeServiceMetier($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonParametrageEncheres() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonParametrageEnchere($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonRPAs() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonRPA($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonConsultations() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonConsultation($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonDemandeAchatParCatalogues() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonDemandeAchatParCatalogue($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonDestinataireMiseDispositions() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonDestinataireMiseDisposition($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonTCAOCommissionConsultations() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonTCAOCommissionConsultation($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonTCAOOrdreDePassages() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonTCAOOrdreDePassage($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getCommonTCAOSeanceInvites() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addCommonTCAOSeanceInvite($relObj->copy($deepCopy));
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
     * @return CommonOrganisme Clone of current object.
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
     * @return CommonOrganismePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonOrganismePeer();
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
        if ('CommonAdministrateur' == $relationName) {
            $this->initCommonAdministrateurs();
        }
        if ('CommonAffiliationService' == $relationName) {
            $this->initCommonAffiliationServices();
        }
        if ('CommonAgent' == $relationName) {
            $this->initCommonAgents();
        }
        if ('CommonDAConsultation' == $relationName) {
            $this->initCommonDAConsultations();
        }
        if ('CommonOrganismeServiceMetier' == $relationName) {
            $this->initCommonOrganismeServiceMetiers();
        }
        if ('CommonParametrageEnchere' == $relationName) {
            $this->initCommonParametrageEncheres();
        }
        if ('CommonRPA' == $relationName) {
            $this->initCommonRPAs();
        }
        if ('CommonConsultation' == $relationName) {
            $this->initCommonConsultations();
        }
        if ('CommonDemandeAchatParCatalogue' == $relationName) {
            $this->initCommonDemandeAchatParCatalogues();
        }
        if ('CommonDestinataireMiseDisposition' == $relationName) {
            $this->initCommonDestinataireMiseDispositions();
        }
        if ('CommonTCAOCommissionConsultation' == $relationName) {
            $this->initCommonTCAOCommissionConsultations();
        }
        if ('CommonTCAOOrdreDePassage' == $relationName) {
            $this->initCommonTCAOOrdreDePassages();
        }
        if ('CommonTCAOSeanceInvite' == $relationName) {
            $this->initCommonTCAOSeanceInvites();
        }
    }

    /**
     * Clears out the collCommonAdministrateurs collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonOrganisme The current object (for fluent API support)
     * @see        addCommonAdministrateurs()
     */
    public function clearCommonAdministrateurs()
    {
        $this->collCommonAdministrateurs = null; // important to set this to null since that means it is uninitialized
        $this->collCommonAdministrateursPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonAdministrateurs collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonAdministrateurs($v = true)
    {
        $this->collCommonAdministrateursPartial = $v;
    }

    /**
     * Initializes the collCommonAdministrateurs collection.
     *
     * By default this just sets the collCommonAdministrateurs collection to an empty array (like clearcollCommonAdministrateurs());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonAdministrateurs($overrideExisting = true)
    {
        if (null !== $this->collCommonAdministrateurs && !$overrideExisting) {
            return;
        }
        $this->collCommonAdministrateurs = new PropelObjectCollection();
        $this->collCommonAdministrateurs->setModel('CommonAdministrateur');
    }

    /**
     * Gets an array of CommonAdministrateur objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonOrganisme is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonAdministrateur[] List of CommonAdministrateur objects
     * @throws PropelException
     */
    public function getCommonAdministrateurs($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonAdministrateursPartial && !$this->isNew();
        if (null === $this->collCommonAdministrateurs || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonAdministrateurs) {
                // return empty collection
                $this->initCommonAdministrateurs();
            } else {
                $collCommonAdministrateurs = CommonAdministrateurQuery::create(null, $criteria)
                    ->filterByCommonOrganisme($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonAdministrateursPartial && count($collCommonAdministrateurs)) {
                      $this->initCommonAdministrateurs(false);

                      foreach ($collCommonAdministrateurs as $obj) {
                        if (false == $this->collCommonAdministrateurs->contains($obj)) {
                          $this->collCommonAdministrateurs->append($obj);
                        }
                      }

                      $this->collCommonAdministrateursPartial = true;
                    }

                    $collCommonAdministrateurs->getInternalIterator()->rewind();

                    return $collCommonAdministrateurs;
                }

                if ($partial && $this->collCommonAdministrateurs) {
                    foreach ($this->collCommonAdministrateurs as $obj) {
                        if ($obj->isNew()) {
                            $collCommonAdministrateurs[] = $obj;
                        }
                    }
                }

                $this->collCommonAdministrateurs = $collCommonAdministrateurs;
                $this->collCommonAdministrateursPartial = false;
            }
        }

        return $this->collCommonAdministrateurs;
    }

    /**
     * Sets a collection of CommonAdministrateur objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonAdministrateurs A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setCommonAdministrateurs(PropelCollection $commonAdministrateurs, PropelPDO $con = null)
    {
        $commonAdministrateursToDelete = $this->getCommonAdministrateurs(new Criteria(), $con)->diff($commonAdministrateurs);


        $this->commonAdministrateursScheduledForDeletion = $commonAdministrateursToDelete;

        foreach ($commonAdministrateursToDelete as $commonAdministrateurRemoved) {
            $commonAdministrateurRemoved->setCommonOrganisme(null);
        }

        $this->collCommonAdministrateurs = null;
        foreach ($commonAdministrateurs as $commonAdministrateur) {
            $this->addCommonAdministrateur($commonAdministrateur);
        }

        $this->collCommonAdministrateurs = $commonAdministrateurs;
        $this->collCommonAdministrateursPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonAdministrateur objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonAdministrateur objects.
     * @throws PropelException
     */
    public function countCommonAdministrateurs(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonAdministrateursPartial && !$this->isNew();
        if (null === $this->collCommonAdministrateurs || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonAdministrateurs) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonAdministrateurs());
            }
            $query = CommonAdministrateurQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonOrganisme($this)
                ->count($con);
        }

        return count($this->collCommonAdministrateurs);
    }

    /**
     * Method called to associate a CommonAdministrateur object to this object
     * through the CommonAdministrateur foreign key attribute.
     *
     * @param   CommonAdministrateur $l CommonAdministrateur
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function addCommonAdministrateur(CommonAdministrateur $l)
    {
        if ($this->collCommonAdministrateurs === null) {
            $this->initCommonAdministrateurs();
            $this->collCommonAdministrateursPartial = true;
        }
        if (!in_array($l, $this->collCommonAdministrateurs->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonAdministrateur($l);
        }

        return $this;
    }

    /**
     * @param	CommonAdministrateur $commonAdministrateur The commonAdministrateur object to add.
     */
    protected function doAddCommonAdministrateur($commonAdministrateur)
    {
        $this->collCommonAdministrateurs[]= $commonAdministrateur;
        $commonAdministrateur->setCommonOrganisme($this);
    }

    /**
     * @param	CommonAdministrateur $commonAdministrateur The commonAdministrateur object to remove.
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function removeCommonAdministrateur($commonAdministrateur)
    {
        if ($this->getCommonAdministrateurs()->contains($commonAdministrateur)) {
            $this->collCommonAdministrateurs->remove($this->collCommonAdministrateurs->search($commonAdministrateur));
            if (null === $this->commonAdministrateursScheduledForDeletion) {
                $this->commonAdministrateursScheduledForDeletion = clone $this->collCommonAdministrateurs;
                $this->commonAdministrateursScheduledForDeletion->clear();
            }
            $this->commonAdministrateursScheduledForDeletion[]= $commonAdministrateur;
            $commonAdministrateur->setCommonOrganisme(null);
        }

        return $this;
    }

    /**
     * Clears out the collCommonAffiliationServices collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonOrganisme The current object (for fluent API support)
     * @see        addCommonAffiliationServices()
     */
    public function clearCommonAffiliationServices()
    {
        $this->collCommonAffiliationServices = null; // important to set this to null since that means it is uninitialized
        $this->collCommonAffiliationServicesPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonAffiliationServices collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonAffiliationServices($v = true)
    {
        $this->collCommonAffiliationServicesPartial = $v;
    }

    /**
     * Initializes the collCommonAffiliationServices collection.
     *
     * By default this just sets the collCommonAffiliationServices collection to an empty array (like clearcollCommonAffiliationServices());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonAffiliationServices($overrideExisting = true)
    {
        if (null !== $this->collCommonAffiliationServices && !$overrideExisting) {
            return;
        }
        $this->collCommonAffiliationServices = new PropelObjectCollection();
        $this->collCommonAffiliationServices->setModel('CommonAffiliationService');
    }

    /**
     * Gets an array of CommonAffiliationService objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonOrganisme is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonAffiliationService[] List of CommonAffiliationService objects
     * @throws PropelException
     */
    public function getCommonAffiliationServices($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonAffiliationServicesPartial && !$this->isNew();
        if (null === $this->collCommonAffiliationServices || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonAffiliationServices) {
                // return empty collection
                $this->initCommonAffiliationServices();
            } else {
                $collCommonAffiliationServices = CommonAffiliationServiceQuery::create(null, $criteria)
                    ->filterByCommonOrganisme($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonAffiliationServicesPartial && count($collCommonAffiliationServices)) {
                      $this->initCommonAffiliationServices(false);

                      foreach ($collCommonAffiliationServices as $obj) {
                        if (false == $this->collCommonAffiliationServices->contains($obj)) {
                          $this->collCommonAffiliationServices->append($obj);
                        }
                      }

                      $this->collCommonAffiliationServicesPartial = true;
                    }

                    $collCommonAffiliationServices->getInternalIterator()->rewind();

                    return $collCommonAffiliationServices;
                }

                if ($partial && $this->collCommonAffiliationServices) {
                    foreach ($this->collCommonAffiliationServices as $obj) {
                        if ($obj->isNew()) {
                            $collCommonAffiliationServices[] = $obj;
                        }
                    }
                }

                $this->collCommonAffiliationServices = $collCommonAffiliationServices;
                $this->collCommonAffiliationServicesPartial = false;
            }
        }

        return $this->collCommonAffiliationServices;
    }

    /**
     * Sets a collection of CommonAffiliationService objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonAffiliationServices A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setCommonAffiliationServices(PropelCollection $commonAffiliationServices, PropelPDO $con = null)
    {
        $commonAffiliationServicesToDelete = $this->getCommonAffiliationServices(new Criteria(), $con)->diff($commonAffiliationServices);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->commonAffiliationServicesScheduledForDeletion = clone $commonAffiliationServicesToDelete;

        foreach ($commonAffiliationServicesToDelete as $commonAffiliationServiceRemoved) {
            $commonAffiliationServiceRemoved->setCommonOrganisme(null);
        }

        $this->collCommonAffiliationServices = null;
        foreach ($commonAffiliationServices as $commonAffiliationService) {
            $this->addCommonAffiliationService($commonAffiliationService);
        }

        $this->collCommonAffiliationServices = $commonAffiliationServices;
        $this->collCommonAffiliationServicesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonAffiliationService objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonAffiliationService objects.
     * @throws PropelException
     */
    public function countCommonAffiliationServices(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonAffiliationServicesPartial && !$this->isNew();
        if (null === $this->collCommonAffiliationServices || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonAffiliationServices) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonAffiliationServices());
            }
            $query = CommonAffiliationServiceQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonOrganisme($this)
                ->count($con);
        }

        return count($this->collCommonAffiliationServices);
    }

    /**
     * Method called to associate a CommonAffiliationService object to this object
     * through the CommonAffiliationService foreign key attribute.
     *
     * @param   CommonAffiliationService $l CommonAffiliationService
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function addCommonAffiliationService(CommonAffiliationService $l)
    {
        if ($this->collCommonAffiliationServices === null) {
            $this->initCommonAffiliationServices();
            $this->collCommonAffiliationServicesPartial = true;
        }
        if (!in_array($l, $this->collCommonAffiliationServices->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonAffiliationService($l);
        }

        return $this;
    }

    /**
     * @param	CommonAffiliationService $commonAffiliationService The commonAffiliationService object to add.
     */
    protected function doAddCommonAffiliationService($commonAffiliationService)
    {
        $this->collCommonAffiliationServices[]= $commonAffiliationService;
        $commonAffiliationService->setCommonOrganisme($this);
    }

    /**
     * @param	CommonAffiliationService $commonAffiliationService The commonAffiliationService object to remove.
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function removeCommonAffiliationService($commonAffiliationService)
    {
        if ($this->getCommonAffiliationServices()->contains($commonAffiliationService)) {
            $this->collCommonAffiliationServices->remove($this->collCommonAffiliationServices->search($commonAffiliationService));
            if (null === $this->commonAffiliationServicesScheduledForDeletion) {
                $this->commonAffiliationServicesScheduledForDeletion = clone $this->collCommonAffiliationServices;
                $this->commonAffiliationServicesScheduledForDeletion->clear();
            }
            $this->commonAffiliationServicesScheduledForDeletion[]= clone $commonAffiliationService;
            $commonAffiliationService->setCommonOrganisme(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonOrganisme is new, it will return
     * an empty collection; or if this CommonOrganisme has previously
     * been saved, it will retrieve related CommonAffiliationServices from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonOrganisme.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonAffiliationService[] List of CommonAffiliationService objects
     */
    public function getCommonAffiliationServicesJoinCommonServiceRelatedByIdPoleOrganisme($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonAffiliationServiceQuery::create(null, $criteria);
        $query->joinWith('CommonServiceRelatedByIdPoleOrganisme', $join_behavior);

        return $this->getCommonAffiliationServices($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonOrganisme is new, it will return
     * an empty collection; or if this CommonOrganisme has previously
     * been saved, it will retrieve related CommonAffiliationServices from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonOrganisme.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonAffiliationService[] List of CommonAffiliationService objects
     */
    public function getCommonAffiliationServicesJoinCommonServiceRelatedByIdServiceOrganisme($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonAffiliationServiceQuery::create(null, $criteria);
        $query->joinWith('CommonServiceRelatedByIdServiceOrganisme', $join_behavior);

        return $this->getCommonAffiliationServices($query, $con);
    }

    /**
     * Clears out the collCommonAgents collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonOrganisme The current object (for fluent API support)
     * @see        addCommonAgents()
     */
    public function clearCommonAgents()
    {
        $this->collCommonAgents = null; // important to set this to null since that means it is uninitialized
        $this->collCommonAgentsPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonAgents collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonAgents($v = true)
    {
        $this->collCommonAgentsPartial = $v;
    }

    /**
     * Initializes the collCommonAgents collection.
     *
     * By default this just sets the collCommonAgents collection to an empty array (like clearcollCommonAgents());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonAgents($overrideExisting = true)
    {
        if (null !== $this->collCommonAgents && !$overrideExisting) {
            return;
        }
        $this->collCommonAgents = new PropelObjectCollection();
        $this->collCommonAgents->setModel('CommonAgent');
    }

    /**
     * Gets an array of CommonAgent objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonOrganisme is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonAgent[] List of CommonAgent objects
     * @throws PropelException
     */
    public function getCommonAgents($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonAgentsPartial && !$this->isNew();
        if (null === $this->collCommonAgents || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonAgents) {
                // return empty collection
                $this->initCommonAgents();
            } else {
                $collCommonAgents = CommonAgentQuery::create(null, $criteria)
                    ->filterByCommonOrganisme($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonAgentsPartial && count($collCommonAgents)) {
                      $this->initCommonAgents(false);

                      foreach ($collCommonAgents as $obj) {
                        if (false == $this->collCommonAgents->contains($obj)) {
                          $this->collCommonAgents->append($obj);
                        }
                      }

                      $this->collCommonAgentsPartial = true;
                    }

                    $collCommonAgents->getInternalIterator()->rewind();

                    return $collCommonAgents;
                }

                if ($partial && $this->collCommonAgents) {
                    foreach ($this->collCommonAgents as $obj) {
                        if ($obj->isNew()) {
                            $collCommonAgents[] = $obj;
                        }
                    }
                }

                $this->collCommonAgents = $collCommonAgents;
                $this->collCommonAgentsPartial = false;
            }
        }

        return $this->collCommonAgents;
    }

    /**
     * Sets a collection of CommonAgent objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonAgents A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setCommonAgents(PropelCollection $commonAgents, PropelPDO $con = null)
    {
        $commonAgentsToDelete = $this->getCommonAgents(new Criteria(), $con)->diff($commonAgents);


        $this->commonAgentsScheduledForDeletion = $commonAgentsToDelete;

        foreach ($commonAgentsToDelete as $commonAgentRemoved) {
            $commonAgentRemoved->setCommonOrganisme(null);
        }

        $this->collCommonAgents = null;
        foreach ($commonAgents as $commonAgent) {
            $this->addCommonAgent($commonAgent);
        }

        $this->collCommonAgents = $commonAgents;
        $this->collCommonAgentsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonAgent objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonAgent objects.
     * @throws PropelException
     */
    public function countCommonAgents(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonAgentsPartial && !$this->isNew();
        if (null === $this->collCommonAgents || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonAgents) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonAgents());
            }
            $query = CommonAgentQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonOrganisme($this)
                ->count($con);
        }

        return count($this->collCommonAgents);
    }

    /**
     * Method called to associate a CommonAgent object to this object
     * through the CommonAgent foreign key attribute.
     *
     * @param   CommonAgent $l CommonAgent
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function addCommonAgent(CommonAgent $l)
    {
        if ($this->collCommonAgents === null) {
            $this->initCommonAgents();
            $this->collCommonAgentsPartial = true;
        }
        if (!in_array($l, $this->collCommonAgents->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonAgent($l);
        }

        return $this;
    }

    /**
     * @param	CommonAgent $commonAgent The commonAgent object to add.
     */
    protected function doAddCommonAgent($commonAgent)
    {
        $this->collCommonAgents[]= $commonAgent;
        $commonAgent->setCommonOrganisme($this);
    }

    /**
     * @param	CommonAgent $commonAgent The commonAgent object to remove.
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function removeCommonAgent($commonAgent)
    {
        if ($this->getCommonAgents()->contains($commonAgent)) {
            $this->collCommonAgents->remove($this->collCommonAgents->search($commonAgent));
            if (null === $this->commonAgentsScheduledForDeletion) {
                $this->commonAgentsScheduledForDeletion = clone $this->collCommonAgents;
                $this->commonAgentsScheduledForDeletion->clear();
            }
            $this->commonAgentsScheduledForDeletion[]= clone $commonAgent;
            $commonAgent->setCommonOrganisme(null);
        }

        return $this;
    }

    /**
     * Clears out the collCommonDAConsultations collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonOrganisme The current object (for fluent API support)
     * @see        addCommonDAConsultations()
     */
    public function clearCommonDAConsultations()
    {
        $this->collCommonDAConsultations = null; // important to set this to null since that means it is uninitialized
        $this->collCommonDAConsultationsPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonDAConsultations collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonDAConsultations($v = true)
    {
        $this->collCommonDAConsultationsPartial = $v;
    }

    /**
     * Initializes the collCommonDAConsultations collection.
     *
     * By default this just sets the collCommonDAConsultations collection to an empty array (like clearcollCommonDAConsultations());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonDAConsultations($overrideExisting = true)
    {
        if (null !== $this->collCommonDAConsultations && !$overrideExisting) {
            return;
        }
        $this->collCommonDAConsultations = new PropelObjectCollection();
        $this->collCommonDAConsultations->setModel('CommonDAConsultation');
    }

    /**
     * Gets an array of CommonDAConsultation objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonOrganisme is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonDAConsultation[] List of CommonDAConsultation objects
     * @throws PropelException
     */
    public function getCommonDAConsultations($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonDAConsultationsPartial && !$this->isNew();
        if (null === $this->collCommonDAConsultations || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonDAConsultations) {
                // return empty collection
                $this->initCommonDAConsultations();
            } else {
                $collCommonDAConsultations = CommonDAConsultationQuery::create(null, $criteria)
                    ->filterByCommonOrganisme($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonDAConsultationsPartial && count($collCommonDAConsultations)) {
                      $this->initCommonDAConsultations(false);

                      foreach ($collCommonDAConsultations as $obj) {
                        if (false == $this->collCommonDAConsultations->contains($obj)) {
                          $this->collCommonDAConsultations->append($obj);
                        }
                      }

                      $this->collCommonDAConsultationsPartial = true;
                    }

                    $collCommonDAConsultations->getInternalIterator()->rewind();

                    return $collCommonDAConsultations;
                }

                if ($partial && $this->collCommonDAConsultations) {
                    foreach ($this->collCommonDAConsultations as $obj) {
                        if ($obj->isNew()) {
                            $collCommonDAConsultations[] = $obj;
                        }
                    }
                }

                $this->collCommonDAConsultations = $collCommonDAConsultations;
                $this->collCommonDAConsultationsPartial = false;
            }
        }

        return $this->collCommonDAConsultations;
    }

    /**
     * Sets a collection of CommonDAConsultation objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonDAConsultations A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setCommonDAConsultations(PropelCollection $commonDAConsultations, PropelPDO $con = null)
    {
        $commonDAConsultationsToDelete = $this->getCommonDAConsultations(new Criteria(), $con)->diff($commonDAConsultations);


        $this->commonDAConsultationsScheduledForDeletion = $commonDAConsultationsToDelete;

        foreach ($commonDAConsultationsToDelete as $commonDAConsultationRemoved) {
            $commonDAConsultationRemoved->setCommonOrganisme(null);
        }

        $this->collCommonDAConsultations = null;
        foreach ($commonDAConsultations as $commonDAConsultation) {
            $this->addCommonDAConsultation($commonDAConsultation);
        }

        $this->collCommonDAConsultations = $commonDAConsultations;
        $this->collCommonDAConsultationsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonDAConsultation objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonDAConsultation objects.
     * @throws PropelException
     */
    public function countCommonDAConsultations(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonDAConsultationsPartial && !$this->isNew();
        if (null === $this->collCommonDAConsultations || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonDAConsultations) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonDAConsultations());
            }
            $query = CommonDAConsultationQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonOrganisme($this)
                ->count($con);
        }

        return count($this->collCommonDAConsultations);
    }

    /**
     * Method called to associate a CommonDAConsultation object to this object
     * through the CommonDAConsultation foreign key attribute.
     *
     * @param   CommonDAConsultation $l CommonDAConsultation
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function addCommonDAConsultation(CommonDAConsultation $l)
    {
        if ($this->collCommonDAConsultations === null) {
            $this->initCommonDAConsultations();
            $this->collCommonDAConsultationsPartial = true;
        }
        if (!in_array($l, $this->collCommonDAConsultations->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonDAConsultation($l);
        }

        return $this;
    }

    /**
     * @param	CommonDAConsultation $commonDAConsultation The commonDAConsultation object to add.
     */
    protected function doAddCommonDAConsultation($commonDAConsultation)
    {
        $this->collCommonDAConsultations[]= $commonDAConsultation;
        $commonDAConsultation->setCommonOrganisme($this);
    }

    /**
     * @param	CommonDAConsultation $commonDAConsultation The commonDAConsultation object to remove.
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function removeCommonDAConsultation($commonDAConsultation)
    {
        if ($this->getCommonDAConsultations()->contains($commonDAConsultation)) {
            $this->collCommonDAConsultations->remove($this->collCommonDAConsultations->search($commonDAConsultation));
            if (null === $this->commonDAConsultationsScheduledForDeletion) {
                $this->commonDAConsultationsScheduledForDeletion = clone $this->collCommonDAConsultations;
                $this->commonDAConsultationsScheduledForDeletion->clear();
            }
            $this->commonDAConsultationsScheduledForDeletion[]= $commonDAConsultation;
            $commonDAConsultation->setCommonOrganisme(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonOrganisme is new, it will return
     * an empty collection; or if this CommonOrganisme has previously
     * been saved, it will retrieve related CommonDAConsultations from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonOrganisme.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonDAConsultation[] List of CommonDAConsultation objects
     */
    public function getCommonDAConsultationsJoinCommonConsultation($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonDAConsultationQuery::create(null, $criteria);
        $query->joinWith('CommonConsultation', $join_behavior);

        return $this->getCommonDAConsultations($query, $con);
    }

    /**
     * Clears out the collCommonOrganismeServiceMetiers collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonOrganisme The current object (for fluent API support)
     * @see        addCommonOrganismeServiceMetiers()
     */
    public function clearCommonOrganismeServiceMetiers()
    {
        $this->collCommonOrganismeServiceMetiers = null; // important to set this to null since that means it is uninitialized
        $this->collCommonOrganismeServiceMetiersPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonOrganismeServiceMetiers collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonOrganismeServiceMetiers($v = true)
    {
        $this->collCommonOrganismeServiceMetiersPartial = $v;
    }

    /**
     * Initializes the collCommonOrganismeServiceMetiers collection.
     *
     * By default this just sets the collCommonOrganismeServiceMetiers collection to an empty array (like clearcollCommonOrganismeServiceMetiers());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonOrganismeServiceMetiers($overrideExisting = true)
    {
        if (null !== $this->collCommonOrganismeServiceMetiers && !$overrideExisting) {
            return;
        }
        $this->collCommonOrganismeServiceMetiers = new PropelObjectCollection();
        $this->collCommonOrganismeServiceMetiers->setModel('CommonOrganismeServiceMetier');
    }

    /**
     * Gets an array of CommonOrganismeServiceMetier objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonOrganisme is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonOrganismeServiceMetier[] List of CommonOrganismeServiceMetier objects
     * @throws PropelException
     */
    public function getCommonOrganismeServiceMetiers($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonOrganismeServiceMetiersPartial && !$this->isNew();
        if (null === $this->collCommonOrganismeServiceMetiers || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonOrganismeServiceMetiers) {
                // return empty collection
                $this->initCommonOrganismeServiceMetiers();
            } else {
                $collCommonOrganismeServiceMetiers = CommonOrganismeServiceMetierQuery::create(null, $criteria)
                    ->filterByCommonOrganisme($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonOrganismeServiceMetiersPartial && count($collCommonOrganismeServiceMetiers)) {
                      $this->initCommonOrganismeServiceMetiers(false);

                      foreach ($collCommonOrganismeServiceMetiers as $obj) {
                        if (false == $this->collCommonOrganismeServiceMetiers->contains($obj)) {
                          $this->collCommonOrganismeServiceMetiers->append($obj);
                        }
                      }

                      $this->collCommonOrganismeServiceMetiersPartial = true;
                    }

                    $collCommonOrganismeServiceMetiers->getInternalIterator()->rewind();

                    return $collCommonOrganismeServiceMetiers;
                }

                if ($partial && $this->collCommonOrganismeServiceMetiers) {
                    foreach ($this->collCommonOrganismeServiceMetiers as $obj) {
                        if ($obj->isNew()) {
                            $collCommonOrganismeServiceMetiers[] = $obj;
                        }
                    }
                }

                $this->collCommonOrganismeServiceMetiers = $collCommonOrganismeServiceMetiers;
                $this->collCommonOrganismeServiceMetiersPartial = false;
            }
        }

        return $this->collCommonOrganismeServiceMetiers;
    }

    /**
     * Sets a collection of CommonOrganismeServiceMetier objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonOrganismeServiceMetiers A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setCommonOrganismeServiceMetiers(PropelCollection $commonOrganismeServiceMetiers, PropelPDO $con = null)
    {
        $commonOrganismeServiceMetiersToDelete = $this->getCommonOrganismeServiceMetiers(new Criteria(), $con)->diff($commonOrganismeServiceMetiers);


        $this->commonOrganismeServiceMetiersScheduledForDeletion = $commonOrganismeServiceMetiersToDelete;

        foreach ($commonOrganismeServiceMetiersToDelete as $commonOrganismeServiceMetierRemoved) {
            $commonOrganismeServiceMetierRemoved->setCommonOrganisme(null);
        }

        $this->collCommonOrganismeServiceMetiers = null;
        foreach ($commonOrganismeServiceMetiers as $commonOrganismeServiceMetier) {
            $this->addCommonOrganismeServiceMetier($commonOrganismeServiceMetier);
        }

        $this->collCommonOrganismeServiceMetiers = $commonOrganismeServiceMetiers;
        $this->collCommonOrganismeServiceMetiersPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonOrganismeServiceMetier objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonOrganismeServiceMetier objects.
     * @throws PropelException
     */
    public function countCommonOrganismeServiceMetiers(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonOrganismeServiceMetiersPartial && !$this->isNew();
        if (null === $this->collCommonOrganismeServiceMetiers || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonOrganismeServiceMetiers) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonOrganismeServiceMetiers());
            }
            $query = CommonOrganismeServiceMetierQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonOrganisme($this)
                ->count($con);
        }

        return count($this->collCommonOrganismeServiceMetiers);
    }

    /**
     * Method called to associate a CommonOrganismeServiceMetier object to this object
     * through the CommonOrganismeServiceMetier foreign key attribute.
     *
     * @param   CommonOrganismeServiceMetier $l CommonOrganismeServiceMetier
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function addCommonOrganismeServiceMetier(CommonOrganismeServiceMetier $l)
    {
        if ($this->collCommonOrganismeServiceMetiers === null) {
            $this->initCommonOrganismeServiceMetiers();
            $this->collCommonOrganismeServiceMetiersPartial = true;
        }
        if (!in_array($l, $this->collCommonOrganismeServiceMetiers->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonOrganismeServiceMetier($l);
        }

        return $this;
    }

    /**
     * @param	CommonOrganismeServiceMetier $commonOrganismeServiceMetier The commonOrganismeServiceMetier object to add.
     */
    protected function doAddCommonOrganismeServiceMetier($commonOrganismeServiceMetier)
    {
        $this->collCommonOrganismeServiceMetiers[]= $commonOrganismeServiceMetier;
        $commonOrganismeServiceMetier->setCommonOrganisme($this);
    }

    /**
     * @param	CommonOrganismeServiceMetier $commonOrganismeServiceMetier The commonOrganismeServiceMetier object to remove.
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function removeCommonOrganismeServiceMetier($commonOrganismeServiceMetier)
    {
        if ($this->getCommonOrganismeServiceMetiers()->contains($commonOrganismeServiceMetier)) {
            $this->collCommonOrganismeServiceMetiers->remove($this->collCommonOrganismeServiceMetiers->search($commonOrganismeServiceMetier));
            if (null === $this->commonOrganismeServiceMetiersScheduledForDeletion) {
                $this->commonOrganismeServiceMetiersScheduledForDeletion = clone $this->collCommonOrganismeServiceMetiers;
                $this->commonOrganismeServiceMetiersScheduledForDeletion->clear();
            }
            $this->commonOrganismeServiceMetiersScheduledForDeletion[]= clone $commonOrganismeServiceMetier;
            $commonOrganismeServiceMetier->setCommonOrganisme(null);
        }

        return $this;
    }

    /**
     * Clears out the collCommonParametrageEncheres collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonOrganisme The current object (for fluent API support)
     * @see        addCommonParametrageEncheres()
     */
    public function clearCommonParametrageEncheres()
    {
        $this->collCommonParametrageEncheres = null; // important to set this to null since that means it is uninitialized
        $this->collCommonParametrageEncheresPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonParametrageEncheres collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonParametrageEncheres($v = true)
    {
        $this->collCommonParametrageEncheresPartial = $v;
    }

    /**
     * Initializes the collCommonParametrageEncheres collection.
     *
     * By default this just sets the collCommonParametrageEncheres collection to an empty array (like clearcollCommonParametrageEncheres());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonParametrageEncheres($overrideExisting = true)
    {
        if (null !== $this->collCommonParametrageEncheres && !$overrideExisting) {
            return;
        }
        $this->collCommonParametrageEncheres = new PropelObjectCollection();
        $this->collCommonParametrageEncheres->setModel('CommonParametrageEnchere');
    }

    /**
     * Gets an array of CommonParametrageEnchere objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonOrganisme is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonParametrageEnchere[] List of CommonParametrageEnchere objects
     * @throws PropelException
     */
    public function getCommonParametrageEncheres($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonParametrageEncheresPartial && !$this->isNew();
        if (null === $this->collCommonParametrageEncheres || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonParametrageEncheres) {
                // return empty collection
                $this->initCommonParametrageEncheres();
            } else {
                $collCommonParametrageEncheres = CommonParametrageEnchereQuery::create(null, $criteria)
                    ->filterByCommonOrganisme($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonParametrageEncheresPartial && count($collCommonParametrageEncheres)) {
                      $this->initCommonParametrageEncheres(false);

                      foreach ($collCommonParametrageEncheres as $obj) {
                        if (false == $this->collCommonParametrageEncheres->contains($obj)) {
                          $this->collCommonParametrageEncheres->append($obj);
                        }
                      }

                      $this->collCommonParametrageEncheresPartial = true;
                    }

                    $collCommonParametrageEncheres->getInternalIterator()->rewind();

                    return $collCommonParametrageEncheres;
                }

                if ($partial && $this->collCommonParametrageEncheres) {
                    foreach ($this->collCommonParametrageEncheres as $obj) {
                        if ($obj->isNew()) {
                            $collCommonParametrageEncheres[] = $obj;
                        }
                    }
                }

                $this->collCommonParametrageEncheres = $collCommonParametrageEncheres;
                $this->collCommonParametrageEncheresPartial = false;
            }
        }

        return $this->collCommonParametrageEncheres;
    }

    /**
     * Sets a collection of CommonParametrageEnchere objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonParametrageEncheres A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setCommonParametrageEncheres(PropelCollection $commonParametrageEncheres, PropelPDO $con = null)
    {
        $commonParametrageEncheresToDelete = $this->getCommonParametrageEncheres(new Criteria(), $con)->diff($commonParametrageEncheres);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->commonParametrageEncheresScheduledForDeletion = clone $commonParametrageEncheresToDelete;

        foreach ($commonParametrageEncheresToDelete as $commonParametrageEnchereRemoved) {
            $commonParametrageEnchereRemoved->setCommonOrganisme(null);
        }

        $this->collCommonParametrageEncheres = null;
        foreach ($commonParametrageEncheres as $commonParametrageEnchere) {
            $this->addCommonParametrageEnchere($commonParametrageEnchere);
        }

        $this->collCommonParametrageEncheres = $commonParametrageEncheres;
        $this->collCommonParametrageEncheresPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonParametrageEnchere objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonParametrageEnchere objects.
     * @throws PropelException
     */
    public function countCommonParametrageEncheres(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonParametrageEncheresPartial && !$this->isNew();
        if (null === $this->collCommonParametrageEncheres || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonParametrageEncheres) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonParametrageEncheres());
            }
            $query = CommonParametrageEnchereQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonOrganisme($this)
                ->count($con);
        }

        return count($this->collCommonParametrageEncheres);
    }

    /**
     * Method called to associate a CommonParametrageEnchere object to this object
     * through the CommonParametrageEnchere foreign key attribute.
     *
     * @param   CommonParametrageEnchere $l CommonParametrageEnchere
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function addCommonParametrageEnchere(CommonParametrageEnchere $l)
    {
        if ($this->collCommonParametrageEncheres === null) {
            $this->initCommonParametrageEncheres();
            $this->collCommonParametrageEncheresPartial = true;
        }
        if (!in_array($l, $this->collCommonParametrageEncheres->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonParametrageEnchere($l);
        }

        return $this;
    }

    /**
     * @param	CommonParametrageEnchere $commonParametrageEnchere The commonParametrageEnchere object to add.
     */
    protected function doAddCommonParametrageEnchere($commonParametrageEnchere)
    {
        $this->collCommonParametrageEncheres[]= $commonParametrageEnchere;
        $commonParametrageEnchere->setCommonOrganisme($this);
    }

    /**
     * @param	CommonParametrageEnchere $commonParametrageEnchere The commonParametrageEnchere object to remove.
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function removeCommonParametrageEnchere($commonParametrageEnchere)
    {
        if ($this->getCommonParametrageEncheres()->contains($commonParametrageEnchere)) {
            $this->collCommonParametrageEncheres->remove($this->collCommonParametrageEncheres->search($commonParametrageEnchere));
            if (null === $this->commonParametrageEncheresScheduledForDeletion) {
                $this->commonParametrageEncheresScheduledForDeletion = clone $this->collCommonParametrageEncheres;
                $this->commonParametrageEncheresScheduledForDeletion->clear();
            }
            $this->commonParametrageEncheresScheduledForDeletion[]= clone $commonParametrageEnchere;
            $commonParametrageEnchere->setCommonOrganisme(null);
        }

        return $this;
    }

    /**
     * Clears out the collCommonRPAs collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonOrganisme The current object (for fluent API support)
     * @see        addCommonRPAs()
     */
    public function clearCommonRPAs()
    {
        $this->collCommonRPAs = null; // important to set this to null since that means it is uninitialized
        $this->collCommonRPAsPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonRPAs collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonRPAs($v = true)
    {
        $this->collCommonRPAsPartial = $v;
    }

    /**
     * Initializes the collCommonRPAs collection.
     *
     * By default this just sets the collCommonRPAs collection to an empty array (like clearcollCommonRPAs());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonRPAs($overrideExisting = true)
    {
        if (null !== $this->collCommonRPAs && !$overrideExisting) {
            return;
        }
        $this->collCommonRPAs = new PropelObjectCollection();
        $this->collCommonRPAs->setModel('CommonRPA');
    }

    /**
     * Gets an array of CommonRPA objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonOrganisme is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonRPA[] List of CommonRPA objects
     * @throws PropelException
     */
    public function getCommonRPAs($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonRPAsPartial && !$this->isNew();
        if (null === $this->collCommonRPAs || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonRPAs) {
                // return empty collection
                $this->initCommonRPAs();
            } else {
                $collCommonRPAs = CommonRPAQuery::create(null, $criteria)
                    ->filterByCommonOrganisme($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonRPAsPartial && count($collCommonRPAs)) {
                      $this->initCommonRPAs(false);

                      foreach ($collCommonRPAs as $obj) {
                        if (false == $this->collCommonRPAs->contains($obj)) {
                          $this->collCommonRPAs->append($obj);
                        }
                      }

                      $this->collCommonRPAsPartial = true;
                    }

                    $collCommonRPAs->getInternalIterator()->rewind();

                    return $collCommonRPAs;
                }

                if ($partial && $this->collCommonRPAs) {
                    foreach ($this->collCommonRPAs as $obj) {
                        if ($obj->isNew()) {
                            $collCommonRPAs[] = $obj;
                        }
                    }
                }

                $this->collCommonRPAs = $collCommonRPAs;
                $this->collCommonRPAsPartial = false;
            }
        }

        return $this->collCommonRPAs;
    }

    /**
     * Sets a collection of CommonRPA objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonRPAs A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setCommonRPAs(PropelCollection $commonRPAs, PropelPDO $con = null)
    {
        $commonRPAsToDelete = $this->getCommonRPAs(new Criteria(), $con)->diff($commonRPAs);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->commonRPAsScheduledForDeletion = clone $commonRPAsToDelete;

        foreach ($commonRPAsToDelete as $commonRPARemoved) {
            $commonRPARemoved->setCommonOrganisme(null);
        }

        $this->collCommonRPAs = null;
        foreach ($commonRPAs as $commonRPA) {
            $this->addCommonRPA($commonRPA);
        }

        $this->collCommonRPAs = $commonRPAs;
        $this->collCommonRPAsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonRPA objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonRPA objects.
     * @throws PropelException
     */
    public function countCommonRPAs(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonRPAsPartial && !$this->isNew();
        if (null === $this->collCommonRPAs || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonRPAs) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonRPAs());
            }
            $query = CommonRPAQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonOrganisme($this)
                ->count($con);
        }

        return count($this->collCommonRPAs);
    }

    /**
     * Method called to associate a CommonRPA object to this object
     * through the CommonRPA foreign key attribute.
     *
     * @param   CommonRPA $l CommonRPA
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function addCommonRPA(CommonRPA $l)
    {
        if ($this->collCommonRPAs === null) {
            $this->initCommonRPAs();
            $this->collCommonRPAsPartial = true;
        }
        if (!in_array($l, $this->collCommonRPAs->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonRPA($l);
        }

        return $this;
    }

    /**
     * @param	CommonRPA $commonRPA The commonRPA object to add.
     */
    protected function doAddCommonRPA($commonRPA)
    {
        $this->collCommonRPAs[]= $commonRPA;
        $commonRPA->setCommonOrganisme($this);
    }

    /**
     * @param	CommonRPA $commonRPA The commonRPA object to remove.
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function removeCommonRPA($commonRPA)
    {
        if ($this->getCommonRPAs()->contains($commonRPA)) {
            $this->collCommonRPAs->remove($this->collCommonRPAs->search($commonRPA));
            if (null === $this->commonRPAsScheduledForDeletion) {
                $this->commonRPAsScheduledForDeletion = clone $this->collCommonRPAs;
                $this->commonRPAsScheduledForDeletion->clear();
            }
            $this->commonRPAsScheduledForDeletion[]= clone $commonRPA;
            $commonRPA->setCommonOrganisme(null);
        }

        return $this;
    }

    /**
     * Clears out the collCommonConsultations collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonOrganisme The current object (for fluent API support)
     * @see        addCommonConsultations()
     */
    public function clearCommonConsultations()
    {
        $this->collCommonConsultations = null; // important to set this to null since that means it is uninitialized
        $this->collCommonConsultationsPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonConsultations collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonConsultations($v = true)
    {
        $this->collCommonConsultationsPartial = $v;
    }

    /**
     * Initializes the collCommonConsultations collection.
     *
     * By default this just sets the collCommonConsultations collection to an empty array (like clearcollCommonConsultations());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonConsultations($overrideExisting = true)
    {
        if (null !== $this->collCommonConsultations && !$overrideExisting) {
            return;
        }
        $this->collCommonConsultations = new PropelObjectCollection();
        $this->collCommonConsultations->setModel('CommonConsultation');
    }

    /**
     * Gets an array of CommonConsultation objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonOrganisme is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonConsultation[] List of CommonConsultation objects
     * @throws PropelException
     */
    public function getCommonConsultations($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonConsultationsPartial && !$this->isNew();
        if (null === $this->collCommonConsultations || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonConsultations) {
                // return empty collection
                $this->initCommonConsultations();
            } else {
                $collCommonConsultations = CommonConsultationQuery::create(null, $criteria)
                    ->filterByCommonOrganisme($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonConsultationsPartial && count($collCommonConsultations)) {
                      $this->initCommonConsultations(false);

                      foreach ($collCommonConsultations as $obj) {
                        if (false == $this->collCommonConsultations->contains($obj)) {
                          $this->collCommonConsultations->append($obj);
                        }
                      }

                      $this->collCommonConsultationsPartial = true;
                    }

                    $collCommonConsultations->getInternalIterator()->rewind();

                    return $collCommonConsultations;
                }

                if ($partial && $this->collCommonConsultations) {
                    foreach ($this->collCommonConsultations as $obj) {
                        if ($obj->isNew()) {
                            $collCommonConsultations[] = $obj;
                        }
                    }
                }

                $this->collCommonConsultations = $collCommonConsultations;
                $this->collCommonConsultationsPartial = false;
            }
        }

        return $this->collCommonConsultations;
    }

    /**
     * Sets a collection of CommonConsultation objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonConsultations A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setCommonConsultations(PropelCollection $commonConsultations, PropelPDO $con = null)
    {
        $commonConsultationsToDelete = $this->getCommonConsultations(new Criteria(), $con)->diff($commonConsultations);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->commonConsultationsScheduledForDeletion = clone $commonConsultationsToDelete;

        foreach ($commonConsultationsToDelete as $commonConsultationRemoved) {
            $commonConsultationRemoved->setCommonOrganisme(null);
        }

        $this->collCommonConsultations = null;
        foreach ($commonConsultations as $commonConsultation) {
            $this->addCommonConsultation($commonConsultation);
        }

        $this->collCommonConsultations = $commonConsultations;
        $this->collCommonConsultationsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonConsultation objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonConsultation objects.
     * @throws PropelException
     */
    public function countCommonConsultations(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonConsultationsPartial && !$this->isNew();
        if (null === $this->collCommonConsultations || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonConsultations) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonConsultations());
            }
            $query = CommonConsultationQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonOrganisme($this)
                ->count($con);
        }

        return count($this->collCommonConsultations);
    }

    /**
     * Method called to associate a CommonConsultation object to this object
     * through the CommonConsultation foreign key attribute.
     *
     * @param   CommonConsultation $l CommonConsultation
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function addCommonConsultation(CommonConsultation $l)
    {
        if ($this->collCommonConsultations === null) {
            $this->initCommonConsultations();
            $this->collCommonConsultationsPartial = true;
        }
        if (!in_array($l, $this->collCommonConsultations->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonConsultation($l);
        }

        return $this;
    }

    /**
     * @param	CommonConsultation $commonConsultation The commonConsultation object to add.
     */
    protected function doAddCommonConsultation($commonConsultation)
    {
        $this->collCommonConsultations[]= $commonConsultation;
        $commonConsultation->setCommonOrganisme($this);
    }

    /**
     * @param	CommonConsultation $commonConsultation The commonConsultation object to remove.
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function removeCommonConsultation($commonConsultation)
    {
        if ($this->getCommonConsultations()->contains($commonConsultation)) {
            $this->collCommonConsultations->remove($this->collCommonConsultations->search($commonConsultation));
            if (null === $this->commonConsultationsScheduledForDeletion) {
                $this->commonConsultationsScheduledForDeletion = clone $this->collCommonConsultations;
                $this->commonConsultationsScheduledForDeletion->clear();
            }
            $this->commonConsultationsScheduledForDeletion[]= clone $commonConsultation;
            $commonConsultation->setCommonOrganisme(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonOrganisme is new, it will return
     * an empty collection; or if this CommonOrganisme has previously
     * been saved, it will retrieve related CommonConsultations from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonOrganisme.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonConsultation[] List of CommonConsultation objects
     */
    public function getCommonConsultationsJoinCommonOperations($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonConsultationQuery::create(null, $criteria);
        $query->joinWith('CommonOperations', $join_behavior);

        return $this->getCommonConsultations($query, $con);
    }

    /**
     * Clears out the collCommonDemandeAchatParCatalogues collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonOrganisme The current object (for fluent API support)
     * @see        addCommonDemandeAchatParCatalogues()
     */
    public function clearCommonDemandeAchatParCatalogues()
    {
        $this->collCommonDemandeAchatParCatalogues = null; // important to set this to null since that means it is uninitialized
        $this->collCommonDemandeAchatParCataloguesPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonDemandeAchatParCatalogues collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonDemandeAchatParCatalogues($v = true)
    {
        $this->collCommonDemandeAchatParCataloguesPartial = $v;
    }

    /**
     * Initializes the collCommonDemandeAchatParCatalogues collection.
     *
     * By default this just sets the collCommonDemandeAchatParCatalogues collection to an empty array (like clearcollCommonDemandeAchatParCatalogues());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonDemandeAchatParCatalogues($overrideExisting = true)
    {
        if (null !== $this->collCommonDemandeAchatParCatalogues && !$overrideExisting) {
            return;
        }
        $this->collCommonDemandeAchatParCatalogues = new PropelObjectCollection();
        $this->collCommonDemandeAchatParCatalogues->setModel('CommonDemandeAchatParCatalogue');
    }

    /**
     * Gets an array of CommonDemandeAchatParCatalogue objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonOrganisme is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonDemandeAchatParCatalogue[] List of CommonDemandeAchatParCatalogue objects
     * @throws PropelException
     */
    public function getCommonDemandeAchatParCatalogues($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonDemandeAchatParCataloguesPartial && !$this->isNew();
        if (null === $this->collCommonDemandeAchatParCatalogues || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonDemandeAchatParCatalogues) {
                // return empty collection
                $this->initCommonDemandeAchatParCatalogues();
            } else {
                $collCommonDemandeAchatParCatalogues = CommonDemandeAchatParCatalogueQuery::create(null, $criteria)
                    ->filterByCommonOrganisme($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonDemandeAchatParCataloguesPartial && count($collCommonDemandeAchatParCatalogues)) {
                      $this->initCommonDemandeAchatParCatalogues(false);

                      foreach ($collCommonDemandeAchatParCatalogues as $obj) {
                        if (false == $this->collCommonDemandeAchatParCatalogues->contains($obj)) {
                          $this->collCommonDemandeAchatParCatalogues->append($obj);
                        }
                      }

                      $this->collCommonDemandeAchatParCataloguesPartial = true;
                    }

                    $collCommonDemandeAchatParCatalogues->getInternalIterator()->rewind();

                    return $collCommonDemandeAchatParCatalogues;
                }

                if ($partial && $this->collCommonDemandeAchatParCatalogues) {
                    foreach ($this->collCommonDemandeAchatParCatalogues as $obj) {
                        if ($obj->isNew()) {
                            $collCommonDemandeAchatParCatalogues[] = $obj;
                        }
                    }
                }

                $this->collCommonDemandeAchatParCatalogues = $collCommonDemandeAchatParCatalogues;
                $this->collCommonDemandeAchatParCataloguesPartial = false;
            }
        }

        return $this->collCommonDemandeAchatParCatalogues;
    }

    /**
     * Sets a collection of CommonDemandeAchatParCatalogue objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonDemandeAchatParCatalogues A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setCommonDemandeAchatParCatalogues(PropelCollection $commonDemandeAchatParCatalogues, PropelPDO $con = null)
    {
        $commonDemandeAchatParCataloguesToDelete = $this->getCommonDemandeAchatParCatalogues(new Criteria(), $con)->diff($commonDemandeAchatParCatalogues);


        $this->commonDemandeAchatParCataloguesScheduledForDeletion = $commonDemandeAchatParCataloguesToDelete;

        foreach ($commonDemandeAchatParCataloguesToDelete as $commonDemandeAchatParCatalogueRemoved) {
            $commonDemandeAchatParCatalogueRemoved->setCommonOrganisme(null);
        }

        $this->collCommonDemandeAchatParCatalogues = null;
        foreach ($commonDemandeAchatParCatalogues as $commonDemandeAchatParCatalogue) {
            $this->addCommonDemandeAchatParCatalogue($commonDemandeAchatParCatalogue);
        }

        $this->collCommonDemandeAchatParCatalogues = $commonDemandeAchatParCatalogues;
        $this->collCommonDemandeAchatParCataloguesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonDemandeAchatParCatalogue objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonDemandeAchatParCatalogue objects.
     * @throws PropelException
     */
    public function countCommonDemandeAchatParCatalogues(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonDemandeAchatParCataloguesPartial && !$this->isNew();
        if (null === $this->collCommonDemandeAchatParCatalogues || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonDemandeAchatParCatalogues) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonDemandeAchatParCatalogues());
            }
            $query = CommonDemandeAchatParCatalogueQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonOrganisme($this)
                ->count($con);
        }

        return count($this->collCommonDemandeAchatParCatalogues);
    }

    /**
     * Method called to associate a CommonDemandeAchatParCatalogue object to this object
     * through the CommonDemandeAchatParCatalogue foreign key attribute.
     *
     * @param   CommonDemandeAchatParCatalogue $l CommonDemandeAchatParCatalogue
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function addCommonDemandeAchatParCatalogue(CommonDemandeAchatParCatalogue $l)
    {
        if ($this->collCommonDemandeAchatParCatalogues === null) {
            $this->initCommonDemandeAchatParCatalogues();
            $this->collCommonDemandeAchatParCataloguesPartial = true;
        }
        if (!in_array($l, $this->collCommonDemandeAchatParCatalogues->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonDemandeAchatParCatalogue($l);
        }

        return $this;
    }

    /**
     * @param	CommonDemandeAchatParCatalogue $commonDemandeAchatParCatalogue The commonDemandeAchatParCatalogue object to add.
     */
    protected function doAddCommonDemandeAchatParCatalogue($commonDemandeAchatParCatalogue)
    {
        $this->collCommonDemandeAchatParCatalogues[]= $commonDemandeAchatParCatalogue;
        $commonDemandeAchatParCatalogue->setCommonOrganisme($this);
    }

    /**
     * @param	CommonDemandeAchatParCatalogue $commonDemandeAchatParCatalogue The commonDemandeAchatParCatalogue object to remove.
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function removeCommonDemandeAchatParCatalogue($commonDemandeAchatParCatalogue)
    {
        if ($this->getCommonDemandeAchatParCatalogues()->contains($commonDemandeAchatParCatalogue)) {
            $this->collCommonDemandeAchatParCatalogues->remove($this->collCommonDemandeAchatParCatalogues->search($commonDemandeAchatParCatalogue));
            if (null === $this->commonDemandeAchatParCataloguesScheduledForDeletion) {
                $this->commonDemandeAchatParCataloguesScheduledForDeletion = clone $this->collCommonDemandeAchatParCatalogues;
                $this->commonDemandeAchatParCataloguesScheduledForDeletion->clear();
            }
            $this->commonDemandeAchatParCataloguesScheduledForDeletion[]= clone $commonDemandeAchatParCatalogue;
            $commonDemandeAchatParCatalogue->setCommonOrganisme(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonOrganisme is new, it will return
     * an empty collection; or if this CommonOrganisme has previously
     * been saved, it will retrieve related CommonDemandeAchatParCatalogues from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonOrganisme.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonDemandeAchatParCatalogue[] List of CommonDemandeAchatParCatalogue objects
     */
    public function getCommonDemandeAchatParCataloguesJoinCommonAgent($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonDemandeAchatParCatalogueQuery::create(null, $criteria);
        $query->joinWith('CommonAgent', $join_behavior);

        return $this->getCommonDemandeAchatParCatalogues($query, $con);
    }

    /**
     * Clears out the collCommonDestinataireMiseDispositions collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonOrganisme The current object (for fluent API support)
     * @see        addCommonDestinataireMiseDispositions()
     */
    public function clearCommonDestinataireMiseDispositions()
    {
        $this->collCommonDestinataireMiseDispositions = null; // important to set this to null since that means it is uninitialized
        $this->collCommonDestinataireMiseDispositionsPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonDestinataireMiseDispositions collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonDestinataireMiseDispositions($v = true)
    {
        $this->collCommonDestinataireMiseDispositionsPartial = $v;
    }

    /**
     * Initializes the collCommonDestinataireMiseDispositions collection.
     *
     * By default this just sets the collCommonDestinataireMiseDispositions collection to an empty array (like clearcollCommonDestinataireMiseDispositions());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonDestinataireMiseDispositions($overrideExisting = true)
    {
        if (null !== $this->collCommonDestinataireMiseDispositions && !$overrideExisting) {
            return;
        }
        $this->collCommonDestinataireMiseDispositions = new PropelObjectCollection();
        $this->collCommonDestinataireMiseDispositions->setModel('CommonDestinataireMiseDisposition');
    }

    /**
     * Gets an array of CommonDestinataireMiseDisposition objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonOrganisme is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonDestinataireMiseDisposition[] List of CommonDestinataireMiseDisposition objects
     * @throws PropelException
     */
    public function getCommonDestinataireMiseDispositions($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonDestinataireMiseDispositionsPartial && !$this->isNew();
        if (null === $this->collCommonDestinataireMiseDispositions || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonDestinataireMiseDispositions) {
                // return empty collection
                $this->initCommonDestinataireMiseDispositions();
            } else {
                $collCommonDestinataireMiseDispositions = CommonDestinataireMiseDispositionQuery::create(null, $criteria)
                    ->filterByCommonOrganisme($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonDestinataireMiseDispositionsPartial && count($collCommonDestinataireMiseDispositions)) {
                      $this->initCommonDestinataireMiseDispositions(false);

                      foreach ($collCommonDestinataireMiseDispositions as $obj) {
                        if (false == $this->collCommonDestinataireMiseDispositions->contains($obj)) {
                          $this->collCommonDestinataireMiseDispositions->append($obj);
                        }
                      }

                      $this->collCommonDestinataireMiseDispositionsPartial = true;
                    }

                    $collCommonDestinataireMiseDispositions->getInternalIterator()->rewind();

                    return $collCommonDestinataireMiseDispositions;
                }

                if ($partial && $this->collCommonDestinataireMiseDispositions) {
                    foreach ($this->collCommonDestinataireMiseDispositions as $obj) {
                        if ($obj->isNew()) {
                            $collCommonDestinataireMiseDispositions[] = $obj;
                        }
                    }
                }

                $this->collCommonDestinataireMiseDispositions = $collCommonDestinataireMiseDispositions;
                $this->collCommonDestinataireMiseDispositionsPartial = false;
            }
        }

        return $this->collCommonDestinataireMiseDispositions;
    }

    /**
     * Sets a collection of CommonDestinataireMiseDisposition objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonDestinataireMiseDispositions A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setCommonDestinataireMiseDispositions(PropelCollection $commonDestinataireMiseDispositions, PropelPDO $con = null)
    {
        $commonDestinataireMiseDispositionsToDelete = $this->getCommonDestinataireMiseDispositions(new Criteria(), $con)->diff($commonDestinataireMiseDispositions);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->commonDestinataireMiseDispositionsScheduledForDeletion = clone $commonDestinataireMiseDispositionsToDelete;

        foreach ($commonDestinataireMiseDispositionsToDelete as $commonDestinataireMiseDispositionRemoved) {
            $commonDestinataireMiseDispositionRemoved->setCommonOrganisme(null);
        }

        $this->collCommonDestinataireMiseDispositions = null;
        foreach ($commonDestinataireMiseDispositions as $commonDestinataireMiseDisposition) {
            $this->addCommonDestinataireMiseDisposition($commonDestinataireMiseDisposition);
        }

        $this->collCommonDestinataireMiseDispositions = $commonDestinataireMiseDispositions;
        $this->collCommonDestinataireMiseDispositionsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonDestinataireMiseDisposition objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonDestinataireMiseDisposition objects.
     * @throws PropelException
     */
    public function countCommonDestinataireMiseDispositions(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonDestinataireMiseDispositionsPartial && !$this->isNew();
        if (null === $this->collCommonDestinataireMiseDispositions || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonDestinataireMiseDispositions) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonDestinataireMiseDispositions());
            }
            $query = CommonDestinataireMiseDispositionQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonOrganisme($this)
                ->count($con);
        }

        return count($this->collCommonDestinataireMiseDispositions);
    }

    /**
     * Method called to associate a CommonDestinataireMiseDisposition object to this object
     * through the CommonDestinataireMiseDisposition foreign key attribute.
     *
     * @param   CommonDestinataireMiseDisposition $l CommonDestinataireMiseDisposition
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function addCommonDestinataireMiseDisposition(CommonDestinataireMiseDisposition $l)
    {
        if ($this->collCommonDestinataireMiseDispositions === null) {
            $this->initCommonDestinataireMiseDispositions();
            $this->collCommonDestinataireMiseDispositionsPartial = true;
        }
        if (!in_array($l, $this->collCommonDestinataireMiseDispositions->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonDestinataireMiseDisposition($l);
        }

        return $this;
    }

    /**
     * @param	CommonDestinataireMiseDisposition $commonDestinataireMiseDisposition The commonDestinataireMiseDisposition object to add.
     */
    protected function doAddCommonDestinataireMiseDisposition($commonDestinataireMiseDisposition)
    {
        $this->collCommonDestinataireMiseDispositions[]= $commonDestinataireMiseDisposition;
        $commonDestinataireMiseDisposition->setCommonOrganisme($this);
    }

    /**
     * @param	CommonDestinataireMiseDisposition $commonDestinataireMiseDisposition The commonDestinataireMiseDisposition object to remove.
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function removeCommonDestinataireMiseDisposition($commonDestinataireMiseDisposition)
    {
        if ($this->getCommonDestinataireMiseDispositions()->contains($commonDestinataireMiseDisposition)) {
            $this->collCommonDestinataireMiseDispositions->remove($this->collCommonDestinataireMiseDispositions->search($commonDestinataireMiseDisposition));
            if (null === $this->commonDestinataireMiseDispositionsScheduledForDeletion) {
                $this->commonDestinataireMiseDispositionsScheduledForDeletion = clone $this->collCommonDestinataireMiseDispositions;
                $this->commonDestinataireMiseDispositionsScheduledForDeletion->clear();
            }
            $this->commonDestinataireMiseDispositionsScheduledForDeletion[]= clone $commonDestinataireMiseDisposition;
            $commonDestinataireMiseDisposition->setCommonOrganisme(null);
        }

        return $this;
    }

    /**
     * Clears out the collCommonTCAOCommissionConsultations collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonOrganisme The current object (for fluent API support)
     * @see        addCommonTCAOCommissionConsultations()
     */
    public function clearCommonTCAOCommissionConsultations()
    {
        $this->collCommonTCAOCommissionConsultations = null; // important to set this to null since that means it is uninitialized
        $this->collCommonTCAOCommissionConsultationsPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonTCAOCommissionConsultations collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonTCAOCommissionConsultations($v = true)
    {
        $this->collCommonTCAOCommissionConsultationsPartial = $v;
    }

    /**
     * Initializes the collCommonTCAOCommissionConsultations collection.
     *
     * By default this just sets the collCommonTCAOCommissionConsultations collection to an empty array (like clearcollCommonTCAOCommissionConsultations());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonTCAOCommissionConsultations($overrideExisting = true)
    {
        if (null !== $this->collCommonTCAOCommissionConsultations && !$overrideExisting) {
            return;
        }
        $this->collCommonTCAOCommissionConsultations = new PropelObjectCollection();
        $this->collCommonTCAOCommissionConsultations->setModel('CommonTCAOCommissionConsultation');
    }

    /**
     * Gets an array of CommonTCAOCommissionConsultation objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonOrganisme is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonTCAOCommissionConsultation[] List of CommonTCAOCommissionConsultation objects
     * @throws PropelException
     */
    public function getCommonTCAOCommissionConsultations($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonTCAOCommissionConsultationsPartial && !$this->isNew();
        if (null === $this->collCommonTCAOCommissionConsultations || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonTCAOCommissionConsultations) {
                // return empty collection
                $this->initCommonTCAOCommissionConsultations();
            } else {
                $collCommonTCAOCommissionConsultations = CommonTCAOCommissionConsultationQuery::create(null, $criteria)
                    ->filterByCommonOrganisme($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonTCAOCommissionConsultationsPartial && count($collCommonTCAOCommissionConsultations)) {
                      $this->initCommonTCAOCommissionConsultations(false);

                      foreach ($collCommonTCAOCommissionConsultations as $obj) {
                        if (false == $this->collCommonTCAOCommissionConsultations->contains($obj)) {
                          $this->collCommonTCAOCommissionConsultations->append($obj);
                        }
                      }

                      $this->collCommonTCAOCommissionConsultationsPartial = true;
                    }

                    $collCommonTCAOCommissionConsultations->getInternalIterator()->rewind();

                    return $collCommonTCAOCommissionConsultations;
                }

                if ($partial && $this->collCommonTCAOCommissionConsultations) {
                    foreach ($this->collCommonTCAOCommissionConsultations as $obj) {
                        if ($obj->isNew()) {
                            $collCommonTCAOCommissionConsultations[] = $obj;
                        }
                    }
                }

                $this->collCommonTCAOCommissionConsultations = $collCommonTCAOCommissionConsultations;
                $this->collCommonTCAOCommissionConsultationsPartial = false;
            }
        }

        return $this->collCommonTCAOCommissionConsultations;
    }

    /**
     * Sets a collection of CommonTCAOCommissionConsultation objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonTCAOCommissionConsultations A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setCommonTCAOCommissionConsultations(PropelCollection $commonTCAOCommissionConsultations, PropelPDO $con = null)
    {
        $commonTCAOCommissionConsultationsToDelete = $this->getCommonTCAOCommissionConsultations(new Criteria(), $con)->diff($commonTCAOCommissionConsultations);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->commonTCAOCommissionConsultationsScheduledForDeletion = clone $commonTCAOCommissionConsultationsToDelete;

        foreach ($commonTCAOCommissionConsultationsToDelete as $commonTCAOCommissionConsultationRemoved) {
            $commonTCAOCommissionConsultationRemoved->setCommonOrganisme(null);
        }

        $this->collCommonTCAOCommissionConsultations = null;
        foreach ($commonTCAOCommissionConsultations as $commonTCAOCommissionConsultation) {
            $this->addCommonTCAOCommissionConsultation($commonTCAOCommissionConsultation);
        }

        $this->collCommonTCAOCommissionConsultations = $commonTCAOCommissionConsultations;
        $this->collCommonTCAOCommissionConsultationsPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonTCAOCommissionConsultation objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonTCAOCommissionConsultation objects.
     * @throws PropelException
     */
    public function countCommonTCAOCommissionConsultations(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonTCAOCommissionConsultationsPartial && !$this->isNew();
        if (null === $this->collCommonTCAOCommissionConsultations || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonTCAOCommissionConsultations) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonTCAOCommissionConsultations());
            }
            $query = CommonTCAOCommissionConsultationQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonOrganisme($this)
                ->count($con);
        }

        return count($this->collCommonTCAOCommissionConsultations);
    }

    /**
     * Method called to associate a CommonTCAOCommissionConsultation object to this object
     * through the CommonTCAOCommissionConsultation foreign key attribute.
     *
     * @param   CommonTCAOCommissionConsultation $l CommonTCAOCommissionConsultation
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function addCommonTCAOCommissionConsultation(CommonTCAOCommissionConsultation $l)
    {
        if ($this->collCommonTCAOCommissionConsultations === null) {
            $this->initCommonTCAOCommissionConsultations();
            $this->collCommonTCAOCommissionConsultationsPartial = true;
        }
        if (!in_array($l, $this->collCommonTCAOCommissionConsultations->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonTCAOCommissionConsultation($l);
        }

        return $this;
    }

    /**
     * @param	CommonTCAOCommissionConsultation $commonTCAOCommissionConsultation The commonTCAOCommissionConsultation object to add.
     */
    protected function doAddCommonTCAOCommissionConsultation($commonTCAOCommissionConsultation)
    {
        $this->collCommonTCAOCommissionConsultations[]= $commonTCAOCommissionConsultation;
        $commonTCAOCommissionConsultation->setCommonOrganisme($this);
    }

    /**
     * @param	CommonTCAOCommissionConsultation $commonTCAOCommissionConsultation The commonTCAOCommissionConsultation object to remove.
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function removeCommonTCAOCommissionConsultation($commonTCAOCommissionConsultation)
    {
        if ($this->getCommonTCAOCommissionConsultations()->contains($commonTCAOCommissionConsultation)) {
            $this->collCommonTCAOCommissionConsultations->remove($this->collCommonTCAOCommissionConsultations->search($commonTCAOCommissionConsultation));
            if (null === $this->commonTCAOCommissionConsultationsScheduledForDeletion) {
                $this->commonTCAOCommissionConsultationsScheduledForDeletion = clone $this->collCommonTCAOCommissionConsultations;
                $this->commonTCAOCommissionConsultationsScheduledForDeletion->clear();
            }
            $this->commonTCAOCommissionConsultationsScheduledForDeletion[]= clone $commonTCAOCommissionConsultation;
            $commonTCAOCommissionConsultation->setCommonOrganisme(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonOrganisme is new, it will return
     * an empty collection; or if this CommonOrganisme has previously
     * been saved, it will retrieve related CommonTCAOCommissionConsultations from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonOrganisme.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonTCAOCommissionConsultation[] List of CommonTCAOCommissionConsultation objects
     */
    public function getCommonTCAOCommissionConsultationsJoinCommonTCAOCommission($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonTCAOCommissionConsultationQuery::create(null, $criteria);
        $query->joinWith('CommonTCAOCommission', $join_behavior);

        return $this->getCommonTCAOCommissionConsultations($query, $con);
    }

    /**
     * Clears out the collCommonTCAOOrdreDePassages collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonOrganisme The current object (for fluent API support)
     * @see        addCommonTCAOOrdreDePassages()
     */
    public function clearCommonTCAOOrdreDePassages()
    {
        $this->collCommonTCAOOrdreDePassages = null; // important to set this to null since that means it is uninitialized
        $this->collCommonTCAOOrdreDePassagesPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonTCAOOrdreDePassages collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonTCAOOrdreDePassages($v = true)
    {
        $this->collCommonTCAOOrdreDePassagesPartial = $v;
    }

    /**
     * Initializes the collCommonTCAOOrdreDePassages collection.
     *
     * By default this just sets the collCommonTCAOOrdreDePassages collection to an empty array (like clearcollCommonTCAOOrdreDePassages());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonTCAOOrdreDePassages($overrideExisting = true)
    {
        if (null !== $this->collCommonTCAOOrdreDePassages && !$overrideExisting) {
            return;
        }
        $this->collCommonTCAOOrdreDePassages = new PropelObjectCollection();
        $this->collCommonTCAOOrdreDePassages->setModel('CommonTCAOOrdreDePassage');
    }

    /**
     * Gets an array of CommonTCAOOrdreDePassage objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonOrganisme is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonTCAOOrdreDePassage[] List of CommonTCAOOrdreDePassage objects
     * @throws PropelException
     */
    public function getCommonTCAOOrdreDePassages($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonTCAOOrdreDePassagesPartial && !$this->isNew();
        if (null === $this->collCommonTCAOOrdreDePassages || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonTCAOOrdreDePassages) {
                // return empty collection
                $this->initCommonTCAOOrdreDePassages();
            } else {
                $collCommonTCAOOrdreDePassages = CommonTCAOOrdreDePassageQuery::create(null, $criteria)
                    ->filterByCommonOrganisme($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonTCAOOrdreDePassagesPartial && count($collCommonTCAOOrdreDePassages)) {
                      $this->initCommonTCAOOrdreDePassages(false);

                      foreach ($collCommonTCAOOrdreDePassages as $obj) {
                        if (false == $this->collCommonTCAOOrdreDePassages->contains($obj)) {
                          $this->collCommonTCAOOrdreDePassages->append($obj);
                        }
                      }

                      $this->collCommonTCAOOrdreDePassagesPartial = true;
                    }

                    $collCommonTCAOOrdreDePassages->getInternalIterator()->rewind();

                    return $collCommonTCAOOrdreDePassages;
                }

                if ($partial && $this->collCommonTCAOOrdreDePassages) {
                    foreach ($this->collCommonTCAOOrdreDePassages as $obj) {
                        if ($obj->isNew()) {
                            $collCommonTCAOOrdreDePassages[] = $obj;
                        }
                    }
                }

                $this->collCommonTCAOOrdreDePassages = $collCommonTCAOOrdreDePassages;
                $this->collCommonTCAOOrdreDePassagesPartial = false;
            }
        }

        return $this->collCommonTCAOOrdreDePassages;
    }

    /**
     * Sets a collection of CommonTCAOOrdreDePassage objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonTCAOOrdreDePassages A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setCommonTCAOOrdreDePassages(PropelCollection $commonTCAOOrdreDePassages, PropelPDO $con = null)
    {
        $commonTCAOOrdreDePassagesToDelete = $this->getCommonTCAOOrdreDePassages(new Criteria(), $con)->diff($commonTCAOOrdreDePassages);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->commonTCAOOrdreDePassagesScheduledForDeletion = clone $commonTCAOOrdreDePassagesToDelete;

        foreach ($commonTCAOOrdreDePassagesToDelete as $commonTCAOOrdreDePassageRemoved) {
            $commonTCAOOrdreDePassageRemoved->setCommonOrganisme(null);
        }

        $this->collCommonTCAOOrdreDePassages = null;
        foreach ($commonTCAOOrdreDePassages as $commonTCAOOrdreDePassage) {
            $this->addCommonTCAOOrdreDePassage($commonTCAOOrdreDePassage);
        }

        $this->collCommonTCAOOrdreDePassages = $commonTCAOOrdreDePassages;
        $this->collCommonTCAOOrdreDePassagesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonTCAOOrdreDePassage objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonTCAOOrdreDePassage objects.
     * @throws PropelException
     */
    public function countCommonTCAOOrdreDePassages(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonTCAOOrdreDePassagesPartial && !$this->isNew();
        if (null === $this->collCommonTCAOOrdreDePassages || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonTCAOOrdreDePassages) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonTCAOOrdreDePassages());
            }
            $query = CommonTCAOOrdreDePassageQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonOrganisme($this)
                ->count($con);
        }

        return count($this->collCommonTCAOOrdreDePassages);
    }

    /**
     * Method called to associate a CommonTCAOOrdreDePassage object to this object
     * through the CommonTCAOOrdreDePassage foreign key attribute.
     *
     * @param   CommonTCAOOrdreDePassage $l CommonTCAOOrdreDePassage
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function addCommonTCAOOrdreDePassage(CommonTCAOOrdreDePassage $l)
    {
        if ($this->collCommonTCAOOrdreDePassages === null) {
            $this->initCommonTCAOOrdreDePassages();
            $this->collCommonTCAOOrdreDePassagesPartial = true;
        }
        if (!in_array($l, $this->collCommonTCAOOrdreDePassages->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonTCAOOrdreDePassage($l);
        }

        return $this;
    }

    /**
     * @param	CommonTCAOOrdreDePassage $commonTCAOOrdreDePassage The commonTCAOOrdreDePassage object to add.
     */
    protected function doAddCommonTCAOOrdreDePassage($commonTCAOOrdreDePassage)
    {
        $this->collCommonTCAOOrdreDePassages[]= $commonTCAOOrdreDePassage;
        $commonTCAOOrdreDePassage->setCommonOrganisme($this);
    }

    /**
     * @param	CommonTCAOOrdreDePassage $commonTCAOOrdreDePassage The commonTCAOOrdreDePassage object to remove.
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function removeCommonTCAOOrdreDePassage($commonTCAOOrdreDePassage)
    {
        if ($this->getCommonTCAOOrdreDePassages()->contains($commonTCAOOrdreDePassage)) {
            $this->collCommonTCAOOrdreDePassages->remove($this->collCommonTCAOOrdreDePassages->search($commonTCAOOrdreDePassage));
            if (null === $this->commonTCAOOrdreDePassagesScheduledForDeletion) {
                $this->commonTCAOOrdreDePassagesScheduledForDeletion = clone $this->collCommonTCAOOrdreDePassages;
                $this->commonTCAOOrdreDePassagesScheduledForDeletion->clear();
            }
            $this->commonTCAOOrdreDePassagesScheduledForDeletion[]= clone $commonTCAOOrdreDePassage;
            $commonTCAOOrdreDePassage->setCommonOrganisme(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonOrganisme is new, it will return
     * an empty collection; or if this CommonOrganisme has previously
     * been saved, it will retrieve related CommonTCAOOrdreDePassages from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonOrganisme.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonTCAOOrdreDePassage[] List of CommonTCAOOrdreDePassage objects
     */
    public function getCommonTCAOOrdreDePassagesJoinCommonTCAOSeanceRelatedByDateSeance($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonTCAOOrdreDePassageQuery::create(null, $criteria);
        $query->joinWith('CommonTCAOSeanceRelatedByDateSeance', $join_behavior);

        return $this->getCommonTCAOOrdreDePassages($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonOrganisme is new, it will return
     * an empty collection; or if this CommonOrganisme has previously
     * been saved, it will retrieve related CommonTCAOOrdreDePassages from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonOrganisme.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonTCAOOrdreDePassage[] List of CommonTCAOOrdreDePassage objects
     */
    public function getCommonTCAOOrdreDePassagesJoinCommonTCAOCommissionConsultation($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonTCAOOrdreDePassageQuery::create(null, $criteria);
        $query->joinWith('CommonTCAOCommissionConsultation', $join_behavior);

        return $this->getCommonTCAOOrdreDePassages($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonOrganisme is new, it will return
     * an empty collection; or if this CommonOrganisme has previously
     * been saved, it will retrieve related CommonTCAOOrdreDePassages from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonOrganisme.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonTCAOOrdreDePassage[] List of CommonTCAOOrdreDePassage objects
     */
    public function getCommonTCAOOrdreDePassagesJoinCommonTCAOCommission($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonTCAOOrdreDePassageQuery::create(null, $criteria);
        $query->joinWith('CommonTCAOCommission', $join_behavior);

        return $this->getCommonTCAOOrdreDePassages($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonOrganisme is new, it will return
     * an empty collection; or if this CommonOrganisme has previously
     * been saved, it will retrieve related CommonTCAOOrdreDePassages from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonOrganisme.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonTCAOOrdreDePassage[] List of CommonTCAOOrdreDePassage objects
     */
    public function getCommonTCAOOrdreDePassagesJoinCommonTCAOSeanceRelatedByIdSeance($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonTCAOOrdreDePassageQuery::create(null, $criteria);
        $query->joinWith('CommonTCAOSeanceRelatedByIdSeance', $join_behavior);

        return $this->getCommonTCAOOrdreDePassages($query, $con);
    }

    /**
     * Clears out the collCommonTCAOSeanceInvites collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return CommonOrganisme The current object (for fluent API support)
     * @see        addCommonTCAOSeanceInvites()
     */
    public function clearCommonTCAOSeanceInvites()
    {
        $this->collCommonTCAOSeanceInvites = null; // important to set this to null since that means it is uninitialized
        $this->collCommonTCAOSeanceInvitesPartial = null;

        return $this;
    }

    /**
     * reset is the collCommonTCAOSeanceInvites collection loaded partially
     *
     * @return void
     */
    public function resetPartialCommonTCAOSeanceInvites($v = true)
    {
        $this->collCommonTCAOSeanceInvitesPartial = $v;
    }

    /**
     * Initializes the collCommonTCAOSeanceInvites collection.
     *
     * By default this just sets the collCommonTCAOSeanceInvites collection to an empty array (like clearcollCommonTCAOSeanceInvites());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param boolean $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initCommonTCAOSeanceInvites($overrideExisting = true)
    {
        if (null !== $this->collCommonTCAOSeanceInvites && !$overrideExisting) {
            return;
        }
        $this->collCommonTCAOSeanceInvites = new PropelObjectCollection();
        $this->collCommonTCAOSeanceInvites->setModel('CommonTCAOSeanceInvite');
    }

    /**
     * Gets an array of CommonTCAOSeanceInvite objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this CommonOrganisme is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @return PropelObjectCollection|CommonTCAOSeanceInvite[] List of CommonTCAOSeanceInvite objects
     * @throws PropelException
     */
    public function getCommonTCAOSeanceInvites($criteria = null, PropelPDO $con = null)
    {
        $partial = $this->collCommonTCAOSeanceInvitesPartial && !$this->isNew();
        if (null === $this->collCommonTCAOSeanceInvites || null !== $criteria  || $partial) {
            if ($this->isNew() && null === $this->collCommonTCAOSeanceInvites) {
                // return empty collection
                $this->initCommonTCAOSeanceInvites();
            } else {
                $collCommonTCAOSeanceInvites = CommonTCAOSeanceInviteQuery::create(null, $criteria)
                    ->filterByCommonOrganisme($this)
                    ->find($con);
                if (null !== $criteria) {
                    if (false !== $this->collCommonTCAOSeanceInvitesPartial && count($collCommonTCAOSeanceInvites)) {
                      $this->initCommonTCAOSeanceInvites(false);

                      foreach ($collCommonTCAOSeanceInvites as $obj) {
                        if (false == $this->collCommonTCAOSeanceInvites->contains($obj)) {
                          $this->collCommonTCAOSeanceInvites->append($obj);
                        }
                      }

                      $this->collCommonTCAOSeanceInvitesPartial = true;
                    }

                    $collCommonTCAOSeanceInvites->getInternalIterator()->rewind();

                    return $collCommonTCAOSeanceInvites;
                }

                if ($partial && $this->collCommonTCAOSeanceInvites) {
                    foreach ($this->collCommonTCAOSeanceInvites as $obj) {
                        if ($obj->isNew()) {
                            $collCommonTCAOSeanceInvites[] = $obj;
                        }
                    }
                }

                $this->collCommonTCAOSeanceInvites = $collCommonTCAOSeanceInvites;
                $this->collCommonTCAOSeanceInvitesPartial = false;
            }
        }

        return $this->collCommonTCAOSeanceInvites;
    }

    /**
     * Sets a collection of CommonTCAOSeanceInvite objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param PropelCollection $commonTCAOSeanceInvites A Propel collection.
     * @param PropelPDO $con Optional connection object
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function setCommonTCAOSeanceInvites(PropelCollection $commonTCAOSeanceInvites, PropelPDO $con = null)
    {
        $commonTCAOSeanceInvitesToDelete = $this->getCommonTCAOSeanceInvites(new Criteria(), $con)->diff($commonTCAOSeanceInvites);


        //since at least one column in the foreign key is at the same time a PK
        //we can not just set a PK to NULL in the lines below. We have to store
        //a backup of all values, so we are able to manipulate these items based on the onDelete value later.
        $this->commonTCAOSeanceInvitesScheduledForDeletion = clone $commonTCAOSeanceInvitesToDelete;

        foreach ($commonTCAOSeanceInvitesToDelete as $commonTCAOSeanceInviteRemoved) {
            $commonTCAOSeanceInviteRemoved->setCommonOrganisme(null);
        }

        $this->collCommonTCAOSeanceInvites = null;
        foreach ($commonTCAOSeanceInvites as $commonTCAOSeanceInvite) {
            $this->addCommonTCAOSeanceInvite($commonTCAOSeanceInvite);
        }

        $this->collCommonTCAOSeanceInvites = $commonTCAOSeanceInvites;
        $this->collCommonTCAOSeanceInvitesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related CommonTCAOSeanceInvite objects.
     *
     * @param Criteria $criteria
     * @param boolean $distinct
     * @param PropelPDO $con
     * @return int             Count of related CommonTCAOSeanceInvite objects.
     * @throws PropelException
     */
    public function countCommonTCAOSeanceInvites(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
    {
        $partial = $this->collCommonTCAOSeanceInvitesPartial && !$this->isNew();
        if (null === $this->collCommonTCAOSeanceInvites || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collCommonTCAOSeanceInvites) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getCommonTCAOSeanceInvites());
            }
            $query = CommonTCAOSeanceInviteQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByCommonOrganisme($this)
                ->count($con);
        }

        return count($this->collCommonTCAOSeanceInvites);
    }

    /**
     * Method called to associate a CommonTCAOSeanceInvite object to this object
     * through the CommonTCAOSeanceInvite foreign key attribute.
     *
     * @param   CommonTCAOSeanceInvite $l CommonTCAOSeanceInvite
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function addCommonTCAOSeanceInvite(CommonTCAOSeanceInvite $l)
    {
        if ($this->collCommonTCAOSeanceInvites === null) {
            $this->initCommonTCAOSeanceInvites();
            $this->collCommonTCAOSeanceInvitesPartial = true;
        }
        if (!in_array($l, $this->collCommonTCAOSeanceInvites->getArrayCopy(), true)) { // only add it if the **same** object is not already associated
            $this->doAddCommonTCAOSeanceInvite($l);
        }

        return $this;
    }

    /**
     * @param	CommonTCAOSeanceInvite $commonTCAOSeanceInvite The commonTCAOSeanceInvite object to add.
     */
    protected function doAddCommonTCAOSeanceInvite($commonTCAOSeanceInvite)
    {
        $this->collCommonTCAOSeanceInvites[]= $commonTCAOSeanceInvite;
        $commonTCAOSeanceInvite->setCommonOrganisme($this);
    }

    /**
     * @param	CommonTCAOSeanceInvite $commonTCAOSeanceInvite The commonTCAOSeanceInvite object to remove.
     * @return CommonOrganisme The current object (for fluent API support)
     */
    public function removeCommonTCAOSeanceInvite($commonTCAOSeanceInvite)
    {
        if ($this->getCommonTCAOSeanceInvites()->contains($commonTCAOSeanceInvite)) {
            $this->collCommonTCAOSeanceInvites->remove($this->collCommonTCAOSeanceInvites->search($commonTCAOSeanceInvite));
            if (null === $this->commonTCAOSeanceInvitesScheduledForDeletion) {
                $this->commonTCAOSeanceInvitesScheduledForDeletion = clone $this->collCommonTCAOSeanceInvites;
                $this->commonTCAOSeanceInvitesScheduledForDeletion->clear();
            }
            $this->commonTCAOSeanceInvitesScheduledForDeletion[]= clone $commonTCAOSeanceInvite;
            $commonTCAOSeanceInvite->setCommonOrganisme(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonOrganisme is new, it will return
     * an empty collection; or if this CommonOrganisme has previously
     * been saved, it will retrieve related CommonTCAOSeanceInvites from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonOrganisme.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonTCAOSeanceInvite[] List of CommonTCAOSeanceInvite objects
     */
    public function getCommonTCAOSeanceInvitesJoinCommonAgent($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonTCAOSeanceInviteQuery::create(null, $criteria);
        $query->joinWith('CommonAgent', $join_behavior);

        return $this->getCommonTCAOSeanceInvites($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonOrganisme is new, it will return
     * an empty collection; or if this CommonOrganisme has previously
     * been saved, it will retrieve related CommonTCAOSeanceInvites from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonOrganisme.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonTCAOSeanceInvite[] List of CommonTCAOSeanceInvite objects
     */
    public function getCommonTCAOSeanceInvitesJoinCommonTCAOIntervenantExterne($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonTCAOSeanceInviteQuery::create(null, $criteria);
        $query->joinWith('CommonTCAOIntervenantExterne', $join_behavior);

        return $this->getCommonTCAOSeanceInvites($query, $con);
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this CommonOrganisme is new, it will return
     * an empty collection; or if this CommonOrganisme has previously
     * been saved, it will retrieve related CommonTCAOSeanceInvites from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in CommonOrganisme.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|CommonTCAOSeanceInvite[] List of CommonTCAOSeanceInvite objects
     */
    public function getCommonTCAOSeanceInvitesJoinCommonTCAOOrdreDePassage($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = CommonTCAOSeanceInviteQuery::create(null, $criteria);
        $query->joinWith('CommonTCAOOrdreDePassage', $join_behavior);

        return $this->getCommonTCAOSeanceInvites($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->acronyme = null;
        $this->type_article_org = null;
        $this->denomination_org = null;
        $this->categorie_insee = null;
        $this->description_org = null;
        $this->adresse = null;
        $this->cp = null;
        $this->ville = null;
        $this->email = null;
        $this->url = null;
        $this->id_attrib_file = null;
        $this->attrib_file = null;
        $this->date_creation = null;
        $this->active = null;
        $this->id_client_anm = null;
        $this->status = null;
        $this->signataire_cao = null;
        $this->offset = null;
        $this->sigle = null;
        $this->adresse2 = null;
        $this->tel = null;
        $this->telecopie = null;
        $this->pays = null;
        $this->affichage_entite = null;
        $this->id_initial = null;
        $this->denomination_org_ar = null;
        $this->description_org_ar = null;
        $this->adresse_ar = null;
        $this->ville_ar = null;
        $this->adresse2_ar = null;
        $this->pays_ar = null;
        $this->denomination_org_fr = null;
        $this->description_org_fr = null;
        $this->adresse_fr = null;
        $this->ville_fr = null;
        $this->adresse2_fr = null;
        $this->pays_fr = null;
        $this->denomination_org_es = null;
        $this->description_org_es = null;
        $this->adresse_es = null;
        $this->ville_es = null;
        $this->adresse2_es = null;
        $this->pays_es = null;
        $this->denomination_org_en = null;
        $this->description_org_en = null;
        $this->adresse_en = null;
        $this->ville_en = null;
        $this->adresse2_en = null;
        $this->pays_en = null;
        $this->denomination_org_su = null;
        $this->description_org_su = null;
        $this->adresse_su = null;
        $this->ville_su = null;
        $this->adresse2_su = null;
        $this->pays_su = null;
        $this->denomination_org_du = null;
        $this->description_org_du = null;
        $this->adresse_du = null;
        $this->ville_du = null;
        $this->adresse2_du = null;
        $this->pays_du = null;
        $this->denomination_org_cz = null;
        $this->description_org_cz = null;
        $this->adresse_cz = null;
        $this->ville_cz = null;
        $this->adresse2_cz = null;
        $this->pays_cz = null;
        $this->denomination_org_it = null;
        $this->description_org_it = null;
        $this->adresse_it = null;
        $this->ville_it = null;
        $this->adresse2_it = null;
        $this->pays_it = null;
        $this->siren = null;
        $this->complement = null;
        $this->moniteur_provenance = null;
        $this->code_acces_logiciel = null;
        $this->decalage_horaire = null;
        $this->lieu_residence = null;
        $this->activation_fuseau_horaire = null;
        $this->alerte = null;
        $this->ordre = null;
        $this->url_interface_anm = null;
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
            if ($this->collCommonAdministrateurs) {
                foreach ($this->collCommonAdministrateurs as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonAffiliationServices) {
                foreach ($this->collCommonAffiliationServices as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonAgents) {
                foreach ($this->collCommonAgents as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonDAConsultations) {
                foreach ($this->collCommonDAConsultations as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonOrganismeServiceMetiers) {
                foreach ($this->collCommonOrganismeServiceMetiers as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonParametrageEncheres) {
                foreach ($this->collCommonParametrageEncheres as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonRPAs) {
                foreach ($this->collCommonRPAs as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonConsultations) {
                foreach ($this->collCommonConsultations as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonDemandeAchatParCatalogues) {
                foreach ($this->collCommonDemandeAchatParCatalogues as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonDestinataireMiseDispositions) {
                foreach ($this->collCommonDestinataireMiseDispositions as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonTCAOCommissionConsultations) {
                foreach ($this->collCommonTCAOCommissionConsultations as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonTCAOOrdreDePassages) {
                foreach ($this->collCommonTCAOOrdreDePassages as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collCommonTCAOSeanceInvites) {
                foreach ($this->collCommonTCAOSeanceInvites as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

        if ($this->collCommonAdministrateurs instanceof PropelCollection) {
            $this->collCommonAdministrateurs->clearIterator();
        }
        $this->collCommonAdministrateurs = null;
        if ($this->collCommonAffiliationServices instanceof PropelCollection) {
            $this->collCommonAffiliationServices->clearIterator();
        }
        $this->collCommonAffiliationServices = null;
        if ($this->collCommonAgents instanceof PropelCollection) {
            $this->collCommonAgents->clearIterator();
        }
        $this->collCommonAgents = null;
        if ($this->collCommonDAConsultations instanceof PropelCollection) {
            $this->collCommonDAConsultations->clearIterator();
        }
        $this->collCommonDAConsultations = null;
        if ($this->collCommonOrganismeServiceMetiers instanceof PropelCollection) {
            $this->collCommonOrganismeServiceMetiers->clearIterator();
        }
        $this->collCommonOrganismeServiceMetiers = null;
        if ($this->collCommonParametrageEncheres instanceof PropelCollection) {
            $this->collCommonParametrageEncheres->clearIterator();
        }
        $this->collCommonParametrageEncheres = null;
        if ($this->collCommonRPAs instanceof PropelCollection) {
            $this->collCommonRPAs->clearIterator();
        }
        $this->collCommonRPAs = null;
        if ($this->collCommonConsultations instanceof PropelCollection) {
            $this->collCommonConsultations->clearIterator();
        }
        $this->collCommonConsultations = null;
        if ($this->collCommonDemandeAchatParCatalogues instanceof PropelCollection) {
            $this->collCommonDemandeAchatParCatalogues->clearIterator();
        }
        $this->collCommonDemandeAchatParCatalogues = null;
        if ($this->collCommonDestinataireMiseDispositions instanceof PropelCollection) {
            $this->collCommonDestinataireMiseDispositions->clearIterator();
        }
        $this->collCommonDestinataireMiseDispositions = null;
        if ($this->collCommonTCAOCommissionConsultations instanceof PropelCollection) {
            $this->collCommonTCAOCommissionConsultations->clearIterator();
        }
        $this->collCommonTCAOCommissionConsultations = null;
        if ($this->collCommonTCAOOrdreDePassages instanceof PropelCollection) {
            $this->collCommonTCAOOrdreDePassages->clearIterator();
        }
        $this->collCommonTCAOOrdreDePassages = null;
        if ($this->collCommonTCAOSeanceInvites instanceof PropelCollection) {
            $this->collCommonTCAOSeanceInvites->clearIterator();
        }
        $this->collCommonTCAOSeanceInvites = null;
    }

    /**
     * return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(CommonOrganismePeer::DEFAULT_STRING_FORMAT);
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
