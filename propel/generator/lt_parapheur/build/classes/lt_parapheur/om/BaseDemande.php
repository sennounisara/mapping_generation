<?php


/**
 * Base class that represents a row from the 'demande' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseDemande extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'DemandePeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        DemandePeer
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
     * The value for the id_agent field.
     * @var        int
     */
    protected $id_agent;

    /**
     * The value for the id_commune field.
     * @var        int
     */
    protected $id_commune;

    /**
     * The value for the id_service field.
     * @var        int
     */
    protected $id_service;

    /**
     * The value for the id_entite field.
     * @var        int
     */
    protected $id_entite;

    /**
     * The value for the id_organisme field.
     * @var        int
     */
    protected $id_organisme;

    /**
     * The value for the numero_demande field.
     * @var        string
     */
    protected $numero_demande;

    /**
     * The value for the detail_demande field.
     * @var        string
     */
    protected $detail_demande;

    /**
     * The value for the statut_demande field.
     * @var        int
     */
    protected $statut_demande;

    /**
     * The value for the latitude_demande field.
     * @var        string
     */
    protected $latitude_demande;

    /**
     * The value for the longitude_demande field.
     * @var        string
     */
    protected $longitude_demande;

    /**
     * The value for the adresse_demande field.
     * @var        string
     */
    protected $adresse_demande;

    /**
     * The value for the id_piece_jointe_demande field.
     * @var        int
     */
    protected $id_piece_jointe_demande;

    /**
     * The value for the nom_piece_jointe_demande field.
     * @var        string
     */
    protected $nom_piece_jointe_demande;

    /**
     * The value for the revision field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $revision;

    /**
     * The value for the contenu_piece_jointe field.
     * @var        string
     */
    protected $contenu_piece_jointe;

    /**
     * The value for the nom_citoyen field.
     * @var        string
     */
    protected $nom_citoyen;

    /**
     * The value for the prenom_citoyen field.
     * @var        string
     */
    protected $prenom_citoyen;

    /**
     * The value for the email_citoyen field.
     * @var        string
     */
    protected $email_citoyen;

    /**
     * The value for the tel_citoyen field.
     * @var        string
     */
    protected $tel_citoyen;

    /**
     * The value for the telephone_portable field.
     * @var        string
     */
    protected $telephone_portable;

    /**
     * The value for the adresse_citoyen_1 field.
     * @var        string
     */
    protected $adresse_citoyen_1;

    /**
     * The value for the adresse_citoyen_2 field.
     * @var        string
     */
    protected $adresse_citoyen_2;

    /**
     * The value for the code_postal_citoyen field.
     * @var        string
     */
    protected $code_postal_citoyen;

    /**
     * The value for the localite_citoyen field.
     * @var        string
     */
    protected $localite_citoyen;

    /**
     * The value for the identifiant_app_mobile_citoyen field.
     * @var        string
     */
    protected $identifiant_app_mobile_citoyen;

    /**
     * The value for the type_device field.
     * @var        string
     */
    protected $type_device;

    /**
     * The value for the date_depot_demande field.
     * @var        string
     */
    protected $date_depot_demande;

    /**
     * The value for the date_traitement_demande field.
     * @var        string
     */
    protected $date_traitement_demande;

    /**
     * The value for the date_cloture_demande field.
     * @var        string
     */
    protected $date_cloture_demande;

    /**
     * The value for the date_reouverture_demande field.
     * @var        string
     */
    protected $date_reouverture_demande;

    /**
     * The value for the duree_avant_traitement field.
     * @var        string
     */
    protected $duree_avant_traitement;

    /**
     * The value for the duree_traitement field.
     * @var        string
     */
    protected $duree_traitement;

    /**
     * The value for the motif_reouvertir field.
     * @var        string
     */
    protected $motif_reouvertir;

    /**
     * The value for the cloturer_par field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $cloturer_par;

    /**
     * The value for the pays field.
     * @var        string
     */
    protected $pays;

    /**
     * The value for the nom_agent_fr field.
     * @var        string
     */
    protected $nom_agent_fr;

    /**
     * The value for the nom_agent_ar field.
     * @var        string
     */
    protected $nom_agent_ar;

    /**
     * The value for the id_theme_citoyen field.
     * @var        int
     */
    protected $id_theme_citoyen;

    /**
     * The value for the id_theme_en_cours field.
     * @var        int
     */
    protected $id_theme_en_cours;

    /**
     * The value for the date_reponse field.
     * @var        string
     */
    protected $date_reponse;

    /**
     * The value for the date_statut field.
     * @var        string
     */
    protected $date_statut;

    /**
     * The value for the id_region_affectation field.
     * @var        int
     */
    protected $id_region_affectation;

    /**
     * The value for the id_province_affectation field.
     * @var        int
     */
    protected $id_province_affectation;

    /**
     * The value for the id_commune_affectation field.
     * @var        int
     */
    protected $id_commune_affectation;

    /**
     * The value for the organisation field.
     * @var        string
     */
    protected $organisation;

    /**
     * The value for the id_origine field.
     * @var        int
     */
    protected $id_origine;

    /**
     * The value for the id_agent_createur field.
     * @var        int
     */
    protected $id_agent_createur;

    /**
     * The value for the id_entite_creatrice field.
     * @var        int
     */
    protected $id_entite_creatrice;

    /**
     * The value for the supprime field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $supprime;

    /**
     * The value for the source field.
     * @var        int
     */
    protected $source;

    /**
     * The value for the detail_source field.
     * @var        string
     */
    protected $detail_source;

    /**
     * The value for the format field.
     * @var        int
     */
    protected $format;

    /**
     * The value for the reference_interne field.
     * @var        string
     */
    protected $reference_interne;

    /**
     * The value for the id_region field.
     * @var        int
     */
    protected $id_region;

    /**
     * The value for the id_province field.
     * @var        int
     */
    protected $id_province;

    /**
     * The value for the id_pays field.
     * @var        int
     */
    protected $id_pays;

    /**
     * The value for the date_creation_demande field.
     * @var        string
     */
    protected $date_creation_demande;

    /**
     * The value for the id_entite_concernee field.
     * @var        int
     */
    protected $id_entite_concernee;

    /**
     * The value for the nom_entite_concernee_fr field.
     * @var        string
     */
    protected $nom_entite_concernee_fr;

    /**
     * The value for the nom_entite_concernee_ar field.
     * @var        string
     */
    protected $nom_entite_concernee_ar;

    /**
     * The value for the id_entite_concernee_citoyen field.
     * @var        int
     */
    protected $id_entite_concernee_citoyen;

    /**
     * The value for the nom_entite_concernee_citoyen_fr field.
     * @var        string
     */
    protected $nom_entite_concernee_citoyen_fr;

    /**
     * The value for the nom_entite_concernee_citoyen_ar field.
     * @var        string
     */
    protected $nom_entite_concernee_citoyen_ar;

    /**
     * The value for the type_requerant field.
     * @var        int
     */
    protected $type_requerant;

    /**
     * The value for the canal_depot field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $canal_depot;

    /**
     * The value for the id_externe field.
     * @var        int
     */
    protected $id_externe;

    /**
     * The value for the date_envoi_reponse field.
     * @var        string
     */
    protected $date_envoi_reponse;

    /**
     * The value for the etat_envoi_reponse field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $etat_envoi_reponse;

    /**
     * The value for the etat_envoi field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $etat_envoi;

    /**
     * The value for the date_envoi field.
     * @var        string
     */
    protected $date_envoi;

    /**
     * The value for the numero_externe field.
     * @var        string
     */
    protected $numero_externe;

    /**
     * The value for the objet_demande field.
     * @var        string
     */
    protected $objet_demande;

    /**
     * The value for the tag_interface field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $tag_interface;

    /**
     * The value for the champ_supp_1 field.
     * @var        string
     */
    protected $champ_supp_1;

    /**
     * The value for the champ_supp_2 field.
     * @var        string
     */
    protected $champ_supp_2;

    /**
     * The value for the champ_supp_3 field.
     * @var        string
     */
    protected $champ_supp_3;

    /**
     * The value for the champ_supp_4 field.
     * @var        string
     */
    protected $champ_supp_4;

    /**
     * The value for the champ_supp_5 field.
     * @var        string
     */
    protected $champ_supp_5;

    /**
     * The value for the type_demande field.
     * @var        int
     */
    protected $type_demande;

    /**
     * The value for the id_agent_destinataire field.
     * @var        int
     */
    protected $id_agent_destinataire;

    /**
     * The value for the nom_agent_destinataire_fr field.
     * @var        string
     */
    protected $nom_agent_destinataire_fr;

    /**
     * The value for the prenom_agent_destinataire_fr field.
     * @var        string
     */
    protected $prenom_agent_destinataire_fr;

    /**
     * The value for the nom_agent_destinataire_ar field.
     * @var        string
     */
    protected $nom_agent_destinataire_ar;

    /**
     * The value for the prenom_agent_destinataire_ar field.
     * @var        string
     */
    protected $prenom_agent_destinataire_ar;

    /**
     * The value for the id_agent_signataire field.
     * @var        int
     */
    protected $id_agent_signataire;

    /**
     * The value for the nom_agent_signataire_fr field.
     * @var        string
     */
    protected $nom_agent_signataire_fr;

    /**
     * The value for the nom_agent_signataire_ar field.
     * @var        string
     */
    protected $nom_agent_signataire_ar;

    /**
     * The value for the prenom_agent_signataire_ar field.
     * @var        string
     */
    protected $prenom_agent_signataire_ar;

    /**
     * The value for the prenom_agent_signataire_fr field.
     * @var        string
     */
    protected $prenom_agent_signataire_fr;

    /**
     * The value for the id_agent_emetteur field.
     * @var        int
     */
    protected $id_agent_emetteur;

    /**
     * The value for the nom_agent_emetteur_fr field.
     * @var        string
     */
    protected $nom_agent_emetteur_fr;

    /**
     * The value for the nom_agent_emetteur_ar field.
     * @var        string
     */
    protected $nom_agent_emetteur_ar;

    /**
     * The value for the prenom_agent_emetteur_ar field.
     * @var        string
     */
    protected $prenom_agent_emetteur_ar;

    /**
     * The value for the prenom_agent_emetteur_fr field.
     * @var        string
     */
    protected $prenom_agent_emetteur_fr;

    /**
     * The value for the reponse_obligatoire field.
     * @var        string
     */
    protected $reponse_obligatoire;

    /**
     * The value for the code_demande field.
     * @var        int
     */
    protected $code_demande;

    /**
     * The value for the code_provisoire field.
     * @var        int
     */
    protected $code_provisoire;

    /**
     * The value for the tag_gateway field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $tag_gateway;

    /**
     * The value for the id_utilisateur_gateway field.
     * @var        string
     */
    protected $id_utilisateur_gateway;

    /**
     * The value for the champ_supp_theme_1 field.
     * @var        string
     */
    protected $champ_supp_theme_1;

    /**
     * The value for the champ_supp_theme_2 field.
     * @var        string
     */
    protected $champ_supp_theme_2;

    /**
     * The value for the champ_supp_theme_3 field.
     * @var        string
     */
    protected $champ_supp_theme_3;

    /**
     * The value for the champ_supp_theme_4 field.
     * @var        string
     */
    protected $champ_supp_theme_4;

    /**
     * The value for the champ_supp_theme_5 field.
     * @var        string
     */
    protected $champ_supp_theme_5;

    /**
     * The value for the id_type_theme field.
     * @var        int
     */
    protected $id_type_theme;

    /**
     * The value for the id_etape_en_cours field.
     * @var        int
     */
    protected $id_etape_en_cours;

    /**
     * The value for the numero_etape_encours field.
     * @var        int
     */
    protected $numero_etape_encours;

    /**
     * The value for the nombre_etapes field.
     * @var        int
     */
    protected $nombre_etapes;

    /**
     * The value for the dernier_message field.
     * @var        string
     */
    protected $dernier_message;

    /**
     * The value for the libelle_etape_encours field.
     * @var        string
     */
    protected $libelle_etape_encours;

    /**
     * The value for the dernier_acteur field.
     * @var        string
     */
    protected $dernier_acteur;

    /**
     * The value for the date_reponse_etape field.
     * @var        string
     */
    protected $date_reponse_etape;

    /**
     * The value for the id_entite_relance field.
     * @var        int
     */
    protected $id_entite_relance;

    /**
     * The value for the id_agent_relance field.
     * @var        int
     */
    protected $id_agent_relance;

    /**
     * The value for the important field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $important;

    /**
     * The value for the date_echeance_reponse_proche field.
     * @var        string
     */
    protected $date_echeance_reponse_proche;

    /**
     * The value for the url_externe field.
     * @var        string
     */
    protected $url_externe;

    /**
     * The value for the cloture_automatique field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $cloture_automatique;

    /**
     * The value for the delai_traitement_ouvrable field.
     * @var        int
     */
    protected $delai_traitement_ouvrable;

    /**
     * The value for the acteur_externe field.
     * @var        string
     */
    protected $acteur_externe;

    /**
     * The value for the delai_traitement field.
     * @var        int
     */
    protected $delai_traitement;

    /**
     * The value for the objet_modifie field.
     * @var        string
     */
    protected $objet_modifie;

    /**
     * The value for the confidentiel field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $confidentiel;

    /**
     * The value for the delai_complement field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $delai_complement;

    /**
     * The value for the erreurs_detectes field.
     * @var        string
     */
    protected $erreurs_detectes;

    /**
     * The value for the id_demande_origine field.
     * @var        int
     */
    protected $id_demande_origine;

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
    protected $tHistoriqueConsultationsScheduledForDeletion = null;

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see        __construct()
     */
    public function applyDefaultValues()
    {
        $this->revision = 0;
        $this->cloturer_par = '0';
        $this->supprime = '0';
        $this->canal_depot = '0';
        $this->etat_envoi_reponse = '0';
        $this->etat_envoi = '0';
        $this->tag_interface = '0';
        $this->tag_gateway = '0';
        $this->important = '0';
        $this->cloture_automatique = '0';
        $this->confidentiel = '0';
        $this->delai_complement = 0;
    }

    /**
     * Initializes internal state of BaseDemande object.
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
     * Get the [id_agent] column value.
     * 
     * @return int
     */
    public function getIdAgent()
    {

        return $this->id_agent;
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
     * Get the [id_service] column value.
     * 
     * @return int
     */
    public function getIdService()
    {

        return $this->id_service;
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
     * Get the [id_organisme] column value.
     * 
     * @return int
     */
    public function getIdOrganisme()
    {

        return $this->id_organisme;
    }

    /**
     * Get the [numero_demande] column value.
     * 
     * @return string
     */
    public function getNumeroDemande()
    {

        return $this->numero_demande;
    }

    /**
     * Get the [detail_demande] column value.
     * 
     * @return string
     */
    public function getDetailDemande()
    {

        return $this->detail_demande;
    }

    /**
     * Get the [statut_demande] column value.
     * 
     * @return int
     */
    public function getStatutDemande()
    {

        return $this->statut_demande;
    }

    /**
     * Get the [latitude_demande] column value.
     * 
     * @return string
     */
    public function getLatitudeDemande()
    {

        return $this->latitude_demande;
    }

    /**
     * Get the [longitude_demande] column value.
     * 
     * @return string
     */
    public function getLongitudeDemande()
    {

        return $this->longitude_demande;
    }

    /**
     * Get the [adresse_demande] column value.
     * 
     * @return string
     */
    public function getAdresseDemande()
    {

        return $this->adresse_demande;
    }

    /**
     * Get the [id_piece_jointe_demande] column value.
     * 
     * @return int
     */
    public function getIdPieceJointeDemande()
    {

        return $this->id_piece_jointe_demande;
    }

    /**
     * Get the [nom_piece_jointe_demande] column value.
     * 
     * @return string
     */
    public function getNomPieceJointeDemande()
    {

        return $this->nom_piece_jointe_demande;
    }

    /**
     * Get the [revision] column value.
     * 
     * @return int
     */
    public function getRevision()
    {

        return $this->revision;
    }

    /**
     * Get the [contenu_piece_jointe] column value.
     * 
     * @return string
     */
    public function getContenuPieceJointe()
    {

        return $this->contenu_piece_jointe;
    }

    /**
     * Get the [nom_citoyen] column value.
     * 
     * @return string
     */
    public function getNomCitoyen()
    {

        return $this->nom_citoyen;
    }

    /**
     * Get the [prenom_citoyen] column value.
     * 
     * @return string
     */
    public function getPrenomCitoyen()
    {

        return $this->prenom_citoyen;
    }

    /**
     * Get the [email_citoyen] column value.
     * 
     * @return string
     */
    public function getEmailCitoyen()
    {

        return $this->email_citoyen;
    }

    /**
     * Get the [tel_citoyen] column value.
     * 
     * @return string
     */
    public function getTelCitoyen()
    {

        return $this->tel_citoyen;
    }

    /**
     * Get the [telephone_portable] column value.
     * 
     * @return string
     */
    public function getTelephonePortable()
    {

        return $this->telephone_portable;
    }

    /**
     * Get the [adresse_citoyen_1] column value.
     * 
     * @return string
     */
    public function getAdresseCitoyen1()
    {

        return $this->adresse_citoyen_1;
    }

    /**
     * Get the [adresse_citoyen_2] column value.
     * 
     * @return string
     */
    public function getAdresseCitoyen2()
    {

        return $this->adresse_citoyen_2;
    }

    /**
     * Get the [code_postal_citoyen] column value.
     * 
     * @return string
     */
    public function getCodePostalCitoyen()
    {

        return $this->code_postal_citoyen;
    }

    /**
     * Get the [localite_citoyen] column value.
     * 
     * @return string
     */
    public function getLocaliteCitoyen()
    {

        return $this->localite_citoyen;
    }

    /**
     * Get the [identifiant_app_mobile_citoyen] column value.
     * 
     * @return string
     */
    public function getIdentifiantAppMobileCitoyen()
    {

        return $this->identifiant_app_mobile_citoyen;
    }

    /**
     * Get the [type_device] column value.
     * 
     * @return string
     */
    public function getTypeDevice()
    {

        return $this->type_device;
    }

    /**
     * Get the [optionally formatted] temporal [date_depot_demande] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateDepotDemande($format = 'Y-m-d H:i:s')
    {
        if ($this->date_depot_demande === null) {
            return null;
        }

        if ($this->date_depot_demande === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_depot_demande);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_depot_demande, true), $x);
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
     * Get the [optionally formatted] temporal [date_traitement_demande] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateTraitementDemande($format = 'Y-m-d H:i:s')
    {
        if ($this->date_traitement_demande === null) {
            return null;
        }

        if ($this->date_traitement_demande === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_traitement_demande);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_traitement_demande, true), $x);
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
     * Get the [optionally formatted] temporal [date_cloture_demande] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateClotureDemande($format = 'Y-m-d H:i:s')
    {
        if ($this->date_cloture_demande === null) {
            return null;
        }

        if ($this->date_cloture_demande === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_cloture_demande);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_cloture_demande, true), $x);
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
     * Get the [optionally formatted] temporal [date_reouverture_demande] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateReouvertureDemande($format = 'Y-m-d H:i:s')
    {
        if ($this->date_reouverture_demande === null) {
            return null;
        }

        if ($this->date_reouverture_demande === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_reouverture_demande);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_reouverture_demande, true), $x);
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
     * Get the [duree_avant_traitement] column value.
     * 
     * @return string
     */
    public function getDureeAvantTraitement()
    {

        return $this->duree_avant_traitement;
    }

    /**
     * Get the [duree_traitement] column value.
     * 
     * @return string
     */
    public function getDureeTraitement()
    {

        return $this->duree_traitement;
    }

    /**
     * Get the [motif_reouvertir] column value.
     * 
     * @return string
     */
    public function getMotifReouvertir()
    {

        return $this->motif_reouvertir;
    }

    /**
     * Get the [cloturer_par] column value.
     * 
     * @return string
     */
    public function getCloturerPar()
    {

        return $this->cloturer_par;
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
     * Get the [nom_agent_fr] column value.
     * 
     * @return string
     */
    public function getNomAgentFr()
    {

        return $this->nom_agent_fr;
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
     * Get the [id_theme_citoyen] column value.
     * 
     * @return int
     */
    public function getIdThemeCitoyen()
    {

        return $this->id_theme_citoyen;
    }

    /**
     * Get the [id_theme_en_cours] column value.
     * 
     * @return int
     */
    public function getIdThemeEnCours()
    {

        return $this->id_theme_en_cours;
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
     * Get the [optionally formatted] temporal [date_statut] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateStatut($format = 'Y-m-d H:i:s')
    {
        if ($this->date_statut === null) {
            return null;
        }

        if ($this->date_statut === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_statut);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_statut, true), $x);
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
     * Get the [id_region_affectation] column value.
     * 
     * @return int
     */
    public function getIdRegionAffectation()
    {

        return $this->id_region_affectation;
    }

    /**
     * Get the [id_province_affectation] column value.
     * 
     * @return int
     */
    public function getIdProvinceAffectation()
    {

        return $this->id_province_affectation;
    }

    /**
     * Get the [id_commune_affectation] column value.
     * 
     * @return int
     */
    public function getIdCommuneAffectation()
    {

        return $this->id_commune_affectation;
    }

    /**
     * Get the [organisation] column value.
     * 
     * @return string
     */
    public function getOrganisation()
    {

        return $this->organisation;
    }

    /**
     * Get the [id_origine] column value.
     * 
     * @return int
     */
    public function getIdOrigine()
    {

        return $this->id_origine;
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
     * Get the [id_entite_creatrice] column value.
     * 
     * @return int
     */
    public function getIdEntiteCreatrice()
    {

        return $this->id_entite_creatrice;
    }

    /**
     * Get the [supprime] column value.
     * 
     * @return string
     */
    public function getSupprime()
    {

        return $this->supprime;
    }

    /**
     * Get the [source] column value.
     * 
     * @return int
     */
    public function getSource()
    {

        return $this->source;
    }

    /**
     * Get the [detail_source] column value.
     * 
     * @return string
     */
    public function getDetailSource()
    {

        return $this->detail_source;
    }

    /**
     * Get the [format] column value.
     * 
     * @return int
     */
    public function getFormat()
    {

        return $this->format;
    }

    /**
     * Get the [reference_interne] column value.
     * 
     * @return string
     */
    public function getReferenceInterne()
    {

        return $this->reference_interne;
    }

    /**
     * Get the [id_region] column value.
     * 
     * @return int
     */
    public function getIdRegion()
    {

        return $this->id_region;
    }

    /**
     * Get the [id_province] column value.
     * 
     * @return int
     */
    public function getIdProvince()
    {

        return $this->id_province;
    }

    /**
     * Get the [id_pays] column value.
     * 
     * @return int
     */
    public function getIdPays()
    {

        return $this->id_pays;
    }

    /**
     * Get the [optionally formatted] temporal [date_creation_demande] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateCreationDemande($format = 'Y-m-d H:i:s')
    {
        if ($this->date_creation_demande === null) {
            return null;
        }

        if ($this->date_creation_demande === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_creation_demande);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_creation_demande, true), $x);
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
     * Get the [id_entite_concernee] column value.
     * 
     * @return int
     */
    public function getIdEntiteConcernee()
    {

        return $this->id_entite_concernee;
    }

    /**
     * Get the [nom_entite_concernee_fr] column value.
     * 
     * @return string
     */
    public function getNomEntiteConcerneeFr()
    {

        return $this->nom_entite_concernee_fr;
    }

    /**
     * Get the [nom_entite_concernee_ar] column value.
     * 
     * @return string
     */
    public function getNomEntiteConcerneeAr()
    {

        return $this->nom_entite_concernee_ar;
    }

    /**
     * Get the [id_entite_concernee_citoyen] column value.
     * 
     * @return int
     */
    public function getIdEntiteConcerneeCitoyen()
    {

        return $this->id_entite_concernee_citoyen;
    }

    /**
     * Get the [nom_entite_concernee_citoyen_fr] column value.
     * 
     * @return string
     */
    public function getNomEntiteConcerneeCitoyenFr()
    {

        return $this->nom_entite_concernee_citoyen_fr;
    }

    /**
     * Get the [nom_entite_concernee_citoyen_ar] column value.
     * 
     * @return string
     */
    public function getNomEntiteConcerneeCitoyenAr()
    {

        return $this->nom_entite_concernee_citoyen_ar;
    }

    /**
     * Get the [type_requerant] column value.
     * 
     * @return int
     */
    public function getTypeRequerant()
    {

        return $this->type_requerant;
    }

    /**
     * Get the [canal_depot] column value.
     * 
     * @return string
     */
    public function getCanalDepot()
    {

        return $this->canal_depot;
    }

    /**
     * Get the [id_externe] column value.
     * 
     * @return int
     */
    public function getIdExterne()
    {

        return $this->id_externe;
    }

    /**
     * Get the [optionally formatted] temporal [date_envoi_reponse] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateEnvoiReponse($format = 'Y-m-d H:i:s')
    {
        if ($this->date_envoi_reponse === null) {
            return null;
        }

        if ($this->date_envoi_reponse === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_envoi_reponse);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_envoi_reponse, true), $x);
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
     * Get the [etat_envoi_reponse] column value.
     * 
     * @return string
     */
    public function getEtatEnvoiReponse()
    {

        return $this->etat_envoi_reponse;
    }

    /**
     * Get the [etat_envoi] column value.
     * 
     * @return string
     */
    public function getEtatEnvoi()
    {

        return $this->etat_envoi;
    }

    /**
     * Get the [optionally formatted] temporal [date_envoi] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateEnvoi($format = 'Y-m-d H:i:s')
    {
        if ($this->date_envoi === null) {
            return null;
        }

        if ($this->date_envoi === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_envoi);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_envoi, true), $x);
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
     * Get the [numero_externe] column value.
     * 
     * @return string
     */
    public function getNumeroExterne()
    {

        return $this->numero_externe;
    }

    /**
     * Get the [objet_demande] column value.
     * 
     * @return string
     */
    public function getObjetDemande()
    {

        return $this->objet_demande;
    }

    /**
     * Get the [tag_interface] column value.
     * 
     * @return string
     */
    public function getTagInterface()
    {

        return $this->tag_interface;
    }

    /**
     * Get the [champ_supp_1] column value.
     * 
     * @return string
     */
    public function getChampSupp1()
    {

        return $this->champ_supp_1;
    }

    /**
     * Get the [champ_supp_2] column value.
     * 
     * @return string
     */
    public function getChampSupp2()
    {

        return $this->champ_supp_2;
    }

    /**
     * Get the [champ_supp_3] column value.
     * 
     * @return string
     */
    public function getChampSupp3()
    {

        return $this->champ_supp_3;
    }

    /**
     * Get the [champ_supp_4] column value.
     * 
     * @return string
     */
    public function getChampSupp4()
    {

        return $this->champ_supp_4;
    }

    /**
     * Get the [champ_supp_5] column value.
     * 
     * @return string
     */
    public function getChampSupp5()
    {

        return $this->champ_supp_5;
    }

    /**
     * Get the [type_demande] column value.
     * 
     * @return int
     */
    public function getTypeDemande()
    {

        return $this->type_demande;
    }

    /**
     * Get the [id_agent_destinataire] column value.
     * 
     * @return int
     */
    public function getIdAgentDestinataire()
    {

        return $this->id_agent_destinataire;
    }

    /**
     * Get the [nom_agent_destinataire_fr] column value.
     * 
     * @return string
     */
    public function getNomAgentDestinataireFr()
    {

        return $this->nom_agent_destinataire_fr;
    }

    /**
     * Get the [prenom_agent_destinataire_fr] column value.
     * 
     * @return string
     */
    public function getPrenomAgentDestinataireFr()
    {

        return $this->prenom_agent_destinataire_fr;
    }

    /**
     * Get the [nom_agent_destinataire_ar] column value.
     * 
     * @return string
     */
    public function getNomAgentDestinataireAr()
    {

        return $this->nom_agent_destinataire_ar;
    }

    /**
     * Get the [prenom_agent_destinataire_ar] column value.
     * 
     * @return string
     */
    public function getPrenomAgentDestinataireAr()
    {

        return $this->prenom_agent_destinataire_ar;
    }

    /**
     * Get the [id_agent_signataire] column value.
     * 
     * @return int
     */
    public function getIdAgentSignataire()
    {

        return $this->id_agent_signataire;
    }

    /**
     * Get the [nom_agent_signataire_fr] column value.
     * 
     * @return string
     */
    public function getNomAgentSignataireFr()
    {

        return $this->nom_agent_signataire_fr;
    }

    /**
     * Get the [nom_agent_signataire_ar] column value.
     * 
     * @return string
     */
    public function getNomAgentSignataireAr()
    {

        return $this->nom_agent_signataire_ar;
    }

    /**
     * Get the [prenom_agent_signataire_ar] column value.
     * 
     * @return string
     */
    public function getPrenomAgentSignataireAr()
    {

        return $this->prenom_agent_signataire_ar;
    }

    /**
     * Get the [prenom_agent_signataire_fr] column value.
     * 
     * @return string
     */
    public function getPrenomAgentSignataireFr()
    {

        return $this->prenom_agent_signataire_fr;
    }

    /**
     * Get the [id_agent_emetteur] column value.
     * 
     * @return int
     */
    public function getIdAgentEmetteur()
    {

        return $this->id_agent_emetteur;
    }

    /**
     * Get the [nom_agent_emetteur_fr] column value.
     * 
     * @return string
     */
    public function getNomAgentEmetteurFr()
    {

        return $this->nom_agent_emetteur_fr;
    }

    /**
     * Get the [nom_agent_emetteur_ar] column value.
     * 
     * @return string
     */
    public function getNomAgentEmetteurAr()
    {

        return $this->nom_agent_emetteur_ar;
    }

    /**
     * Get the [prenom_agent_emetteur_ar] column value.
     * 
     * @return string
     */
    public function getPrenomAgentEmetteurAr()
    {

        return $this->prenom_agent_emetteur_ar;
    }

    /**
     * Get the [prenom_agent_emetteur_fr] column value.
     * 
     * @return string
     */
    public function getPrenomAgentEmetteurFr()
    {

        return $this->prenom_agent_emetteur_fr;
    }

    /**
     * Get the [reponse_obligatoire] column value.
     * 
     * @return string
     */
    public function getReponseObligatoire()
    {

        return $this->reponse_obligatoire;
    }

    /**
     * Get the [code_demande] column value.
     * 
     * @return int
     */
    public function getCodeDemande()
    {

        return $this->code_demande;
    }

    /**
     * Get the [code_provisoire] column value.
     * 
     * @return int
     */
    public function getCodeProvisoire()
    {

        return $this->code_provisoire;
    }

    /**
     * Get the [tag_gateway] column value.
     * 
     * @return string
     */
    public function getTagGateway()
    {

        return $this->tag_gateway;
    }

    /**
     * Get the [id_utilisateur_gateway] column value.
     * 
     * @return string
     */
    public function getIdUtilisateurGateway()
    {

        return $this->id_utilisateur_gateway;
    }

    /**
     * Get the [champ_supp_theme_1] column value.
     * 
     * @return string
     */
    public function getChampSuppTheme1()
    {

        return $this->champ_supp_theme_1;
    }

    /**
     * Get the [champ_supp_theme_2] column value.
     * 
     * @return string
     */
    public function getChampSuppTheme2()
    {

        return $this->champ_supp_theme_2;
    }

    /**
     * Get the [champ_supp_theme_3] column value.
     * 
     * @return string
     */
    public function getChampSuppTheme3()
    {

        return $this->champ_supp_theme_3;
    }

    /**
     * Get the [champ_supp_theme_4] column value.
     * 
     * @return string
     */
    public function getChampSuppTheme4()
    {

        return $this->champ_supp_theme_4;
    }

    /**
     * Get the [champ_supp_theme_5] column value.
     * 
     * @return string
     */
    public function getChampSuppTheme5()
    {

        return $this->champ_supp_theme_5;
    }

    /**
     * Get the [id_type_theme] column value.
     * 
     * @return int
     */
    public function getIdTypeTheme()
    {

        return $this->id_type_theme;
    }

    /**
     * Get the [id_etape_en_cours] column value.
     * 
     * @return int
     */
    public function getIdEtapeEnCours()
    {

        return $this->id_etape_en_cours;
    }

    /**
     * Get the [numero_etape_encours] column value.
     * 
     * @return int
     */
    public function getNumeroEtapeEncours()
    {

        return $this->numero_etape_encours;
    }

    /**
     * Get the [nombre_etapes] column value.
     * 
     * @return int
     */
    public function getNombreEtapes()
    {

        return $this->nombre_etapes;
    }

    /**
     * Get the [dernier_message] column value.
     * 
     * @return string
     */
    public function getDernierMessage()
    {

        return $this->dernier_message;
    }

    /**
     * Get the [libelle_etape_encours] column value.
     * 
     * @return string
     */
    public function getLibelleEtapeEncours()
    {

        return $this->libelle_etape_encours;
    }

    /**
     * Get the [dernier_acteur] column value.
     * 
     * @return string
     */
    public function getDernierActeur()
    {

        return $this->dernier_acteur;
    }

    /**
     * Get the [optionally formatted] temporal [date_reponse_etape] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateReponseEtape($format = null)
    {
        if ($this->date_reponse_etape === null) {
            return null;
        }

        if ($this->date_reponse_etape === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_reponse_etape);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_reponse_etape, true), $x);
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
     * Get the [id_entite_relance] column value.
     * 
     * @return int
     */
    public function getIdEntiteRelance()
    {

        return $this->id_entite_relance;
    }

    /**
     * Get the [id_agent_relance] column value.
     * 
     * @return int
     */
    public function getIdAgentRelance()
    {

        return $this->id_agent_relance;
    }

    /**
     * Get the [important] column value.
     * 
     * @return string
     */
    public function getImportant()
    {

        return $this->important;
    }

    /**
     * Get the [optionally formatted] temporal [date_echeance_reponse_proche] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00 00:00:00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDateEcheanceReponseProche($format = 'Y-m-d H:i:s')
    {
        if ($this->date_echeance_reponse_proche === null) {
            return null;
        }

        if ($this->date_echeance_reponse_proche === '0000-00-00 00:00:00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->date_echeance_reponse_proche);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->date_echeance_reponse_proche, true), $x);
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
     * Get the [url_externe] column value.
     * 
     * @return string
     */
    public function getUrlExterne()
    {

        return $this->url_externe;
    }

    /**
     * Get the [cloture_automatique] column value.
     * 
     * @return string
     */
    public function getClotureAutomatique()
    {

        return $this->cloture_automatique;
    }

    /**
     * Get the [delai_traitement_ouvrable] column value.
     * 
     * @return int
     */
    public function getDelaiTraitementOuvrable()
    {

        return $this->delai_traitement_ouvrable;
    }

    /**
     * Get the [acteur_externe] column value.
     * 
     * @return string
     */
    public function getActeurExterne()
    {

        return $this->acteur_externe;
    }

    /**
     * Get the [delai_traitement] column value.
     * 
     * @return int
     */
    public function getDelaiTraitement()
    {

        return $this->delai_traitement;
    }

    /**
     * Get the [objet_modifie] column value.
     * 
     * @return string
     */
    public function getObjetModifie()
    {

        return $this->objet_modifie;
    }

    /**
     * Get the [confidentiel] column value.
     * 
     * @return string
     */
    public function getConfidentiel()
    {

        return $this->confidentiel;
    }

    /**
     * Get the [delai_complement] column value.
     * 
     * @return int
     */
    public function getDelaiComplement()
    {

        return $this->delai_complement;
    }

    /**
     * Get the [erreurs_detectes] column value.
     * 
     * @return string
     */
    public function getErreursDetectes()
    {

        return $this->erreurs_detectes;
    }

    /**
     * Get the [id_demande_origine] column value.
     * 
     * @return int
     */
    public function getIdDemandeOrigine()
    {

        return $this->id_demande_origine;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = DemandePeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [id_agent] column.
     * 
     * @param int $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setIdAgent($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent !== $v) {
            $this->id_agent = $v;
            $this->modifiedColumns[] = DemandePeer::ID_AGENT;
        }


        return $this;
    } // setIdAgent()

    /**
     * Set the value of [id_commune] column.
     * 
     * @param int $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setIdCommune($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_commune !== $v) {
            $this->id_commune = $v;
            $this->modifiedColumns[] = DemandePeer::ID_COMMUNE;
        }


        return $this;
    } // setIdCommune()

    /**
     * Set the value of [id_service] column.
     * 
     * @param int $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setIdService($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_service !== $v) {
            $this->id_service = $v;
            $this->modifiedColumns[] = DemandePeer::ID_SERVICE;
        }


        return $this;
    } // setIdService()

    /**
     * Set the value of [id_entite] column.
     * 
     * @param int $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setIdEntite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_entite !== $v) {
            $this->id_entite = $v;
            $this->modifiedColumns[] = DemandePeer::ID_ENTITE;
        }


        return $this;
    } // setIdEntite()

    /**
     * Set the value of [id_organisme] column.
     * 
     * @param int $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setIdOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_organisme !== $v) {
            $this->id_organisme = $v;
            $this->modifiedColumns[] = DemandePeer::ID_ORGANISME;
        }


        return $this;
    } // setIdOrganisme()

    /**
     * Set the value of [numero_demande] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setNumeroDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->numero_demande !== $v) {
            $this->numero_demande = $v;
            $this->modifiedColumns[] = DemandePeer::NUMERO_DEMANDE;
        }


        return $this;
    } // setNumeroDemande()

    /**
     * Set the value of [detail_demande] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setDetailDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->detail_demande !== $v) {
            $this->detail_demande = $v;
            $this->modifiedColumns[] = DemandePeer::DETAIL_DEMANDE;
        }


        return $this;
    } // setDetailDemande()

    /**
     * Set the value of [statut_demande] column.
     * 
     * @param int $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setStatutDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->statut_demande !== $v) {
            $this->statut_demande = $v;
            $this->modifiedColumns[] = DemandePeer::STATUT_DEMANDE;
        }


        return $this;
    } // setStatutDemande()

    /**
     * Set the value of [latitude_demande] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setLatitudeDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->latitude_demande !== $v) {
            $this->latitude_demande = $v;
            $this->modifiedColumns[] = DemandePeer::LATITUDE_DEMANDE;
        }


        return $this;
    } // setLatitudeDemande()

    /**
     * Set the value of [longitude_demande] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setLongitudeDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->longitude_demande !== $v) {
            $this->longitude_demande = $v;
            $this->modifiedColumns[] = DemandePeer::LONGITUDE_DEMANDE;
        }


        return $this;
    } // setLongitudeDemande()

    /**
     * Set the value of [adresse_demande] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setAdresseDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_demande !== $v) {
            $this->adresse_demande = $v;
            $this->modifiedColumns[] = DemandePeer::ADRESSE_DEMANDE;
        }


        return $this;
    } // setAdresseDemande()

    /**
     * Set the value of [id_piece_jointe_demande] column.
     * 
     * @param int $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setIdPieceJointeDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_piece_jointe_demande !== $v) {
            $this->id_piece_jointe_demande = $v;
            $this->modifiedColumns[] = DemandePeer::ID_PIECE_JOINTE_DEMANDE;
        }


        return $this;
    } // setIdPieceJointeDemande()

    /**
     * Set the value of [nom_piece_jointe_demande] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setNomPieceJointeDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_piece_jointe_demande !== $v) {
            $this->nom_piece_jointe_demande = $v;
            $this->modifiedColumns[] = DemandePeer::NOM_PIECE_JOINTE_DEMANDE;
        }


        return $this;
    } // setNomPieceJointeDemande()

    /**
     * Set the value of [revision] column.
     * 
     * @param int $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setRevision($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->revision !== $v) {
            $this->revision = $v;
            $this->modifiedColumns[] = DemandePeer::REVISION;
        }


        return $this;
    } // setRevision()

    /**
     * Set the value of [contenu_piece_jointe] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setContenuPieceJointe($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->contenu_piece_jointe !== $v) {
            $this->contenu_piece_jointe = $v;
            $this->modifiedColumns[] = DemandePeer::CONTENU_PIECE_JOINTE;
        }


        return $this;
    } // setContenuPieceJointe()

    /**
     * Set the value of [nom_citoyen] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setNomCitoyen($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_citoyen !== $v) {
            $this->nom_citoyen = $v;
            $this->modifiedColumns[] = DemandePeer::NOM_CITOYEN;
        }


        return $this;
    } // setNomCitoyen()

    /**
     * Set the value of [prenom_citoyen] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setPrenomCitoyen($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prenom_citoyen !== $v) {
            $this->prenom_citoyen = $v;
            $this->modifiedColumns[] = DemandePeer::PRENOM_CITOYEN;
        }


        return $this;
    } // setPrenomCitoyen()

    /**
     * Set the value of [email_citoyen] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setEmailCitoyen($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->email_citoyen !== $v) {
            $this->email_citoyen = $v;
            $this->modifiedColumns[] = DemandePeer::EMAIL_CITOYEN;
        }


        return $this;
    } // setEmailCitoyen()

    /**
     * Set the value of [tel_citoyen] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setTelCitoyen($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->tel_citoyen !== $v) {
            $this->tel_citoyen = $v;
            $this->modifiedColumns[] = DemandePeer::TEL_CITOYEN;
        }


        return $this;
    } // setTelCitoyen()

    /**
     * Set the value of [telephone_portable] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setTelephonePortable($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->telephone_portable !== $v) {
            $this->telephone_portable = $v;
            $this->modifiedColumns[] = DemandePeer::TELEPHONE_PORTABLE;
        }


        return $this;
    } // setTelephonePortable()

    /**
     * Set the value of [adresse_citoyen_1] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setAdresseCitoyen1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_citoyen_1 !== $v) {
            $this->adresse_citoyen_1 = $v;
            $this->modifiedColumns[] = DemandePeer::ADRESSE_CITOYEN_1;
        }


        return $this;
    } // setAdresseCitoyen1()

    /**
     * Set the value of [adresse_citoyen_2] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setAdresseCitoyen2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_citoyen_2 !== $v) {
            $this->adresse_citoyen_2 = $v;
            $this->modifiedColumns[] = DemandePeer::ADRESSE_CITOYEN_2;
        }


        return $this;
    } // setAdresseCitoyen2()

    /**
     * Set the value of [code_postal_citoyen] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setCodePostalCitoyen($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code_postal_citoyen !== $v) {
            $this->code_postal_citoyen = $v;
            $this->modifiedColumns[] = DemandePeer::CODE_POSTAL_CITOYEN;
        }


        return $this;
    } // setCodePostalCitoyen()

    /**
     * Set the value of [localite_citoyen] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setLocaliteCitoyen($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->localite_citoyen !== $v) {
            $this->localite_citoyen = $v;
            $this->modifiedColumns[] = DemandePeer::LOCALITE_CITOYEN;
        }


        return $this;
    } // setLocaliteCitoyen()

    /**
     * Set the value of [identifiant_app_mobile_citoyen] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setIdentifiantAppMobileCitoyen($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->identifiant_app_mobile_citoyen !== $v) {
            $this->identifiant_app_mobile_citoyen = $v;
            $this->modifiedColumns[] = DemandePeer::IDENTIFIANT_APP_MOBILE_CITOYEN;
        }


        return $this;
    } // setIdentifiantAppMobileCitoyen()

    /**
     * Set the value of [type_device] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setTypeDevice($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->type_device !== $v) {
            $this->type_device = $v;
            $this->modifiedColumns[] = DemandePeer::TYPE_DEVICE;
        }


        return $this;
    } // setTypeDevice()

    /**
     * Sets the value of [date_depot_demande] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Demande The current object (for fluent API support)
     */
    public function setDateDepotDemande($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_depot_demande !== null || $dt !== null) {
            $currentDateAsString = ($this->date_depot_demande !== null && $tmpDt = new DateTime($this->date_depot_demande)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_depot_demande = $newDateAsString;
                $this->modifiedColumns[] = DemandePeer::DATE_DEPOT_DEMANDE;
            }
        } // if either are not null


        return $this;
    } // setDateDepotDemande()

    /**
     * Sets the value of [date_traitement_demande] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Demande The current object (for fluent API support)
     */
    public function setDateTraitementDemande($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_traitement_demande !== null || $dt !== null) {
            $currentDateAsString = ($this->date_traitement_demande !== null && $tmpDt = new DateTime($this->date_traitement_demande)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_traitement_demande = $newDateAsString;
                $this->modifiedColumns[] = DemandePeer::DATE_TRAITEMENT_DEMANDE;
            }
        } // if either are not null


        return $this;
    } // setDateTraitementDemande()

    /**
     * Sets the value of [date_cloture_demande] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Demande The current object (for fluent API support)
     */
    public function setDateClotureDemande($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_cloture_demande !== null || $dt !== null) {
            $currentDateAsString = ($this->date_cloture_demande !== null && $tmpDt = new DateTime($this->date_cloture_demande)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_cloture_demande = $newDateAsString;
                $this->modifiedColumns[] = DemandePeer::DATE_CLOTURE_DEMANDE;
            }
        } // if either are not null


        return $this;
    } // setDateClotureDemande()

    /**
     * Sets the value of [date_reouverture_demande] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Demande The current object (for fluent API support)
     */
    public function setDateReouvertureDemande($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_reouverture_demande !== null || $dt !== null) {
            $currentDateAsString = ($this->date_reouverture_demande !== null && $tmpDt = new DateTime($this->date_reouverture_demande)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_reouverture_demande = $newDateAsString;
                $this->modifiedColumns[] = DemandePeer::DATE_REOUVERTURE_DEMANDE;
            }
        } // if either are not null


        return $this;
    } // setDateReouvertureDemande()

    /**
     * Set the value of [duree_avant_traitement] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setDureeAvantTraitement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->duree_avant_traitement !== $v) {
            $this->duree_avant_traitement = $v;
            $this->modifiedColumns[] = DemandePeer::DUREE_AVANT_TRAITEMENT;
        }


        return $this;
    } // setDureeAvantTraitement()

    /**
     * Set the value of [duree_traitement] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setDureeTraitement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->duree_traitement !== $v) {
            $this->duree_traitement = $v;
            $this->modifiedColumns[] = DemandePeer::DUREE_TRAITEMENT;
        }


        return $this;
    } // setDureeTraitement()

    /**
     * Set the value of [motif_reouvertir] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setMotifReouvertir($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->motif_reouvertir !== $v) {
            $this->motif_reouvertir = $v;
            $this->modifiedColumns[] = DemandePeer::MOTIF_REOUVERTIR;
        }


        return $this;
    } // setMotifReouvertir()

    /**
     * Set the value of [cloturer_par] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setCloturerPar($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cloturer_par !== $v) {
            $this->cloturer_par = $v;
            $this->modifiedColumns[] = DemandePeer::CLOTURER_PAR;
        }


        return $this;
    } // setCloturerPar()

    /**
     * Set the value of [pays] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setPays($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pays !== $v) {
            $this->pays = $v;
            $this->modifiedColumns[] = DemandePeer::PAYS;
        }


        return $this;
    } // setPays()

    /**
     * Set the value of [nom_agent_fr] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setNomAgentFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_agent_fr !== $v) {
            $this->nom_agent_fr = $v;
            $this->modifiedColumns[] = DemandePeer::NOM_AGENT_FR;
        }


        return $this;
    } // setNomAgentFr()

    /**
     * Set the value of [nom_agent_ar] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setNomAgentAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_agent_ar !== $v) {
            $this->nom_agent_ar = $v;
            $this->modifiedColumns[] = DemandePeer::NOM_AGENT_AR;
        }


        return $this;
    } // setNomAgentAr()

    /**
     * Set the value of [id_theme_citoyen] column.
     * 
     * @param int $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setIdThemeCitoyen($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_theme_citoyen !== $v) {
            $this->id_theme_citoyen = $v;
            $this->modifiedColumns[] = DemandePeer::ID_THEME_CITOYEN;
        }


        return $this;
    } // setIdThemeCitoyen()

    /**
     * Set the value of [id_theme_en_cours] column.
     * 
     * @param int $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setIdThemeEnCours($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_theme_en_cours !== $v) {
            $this->id_theme_en_cours = $v;
            $this->modifiedColumns[] = DemandePeer::ID_THEME_EN_COURS;
        }


        return $this;
    } // setIdThemeEnCours()

    /**
     * Sets the value of [date_reponse] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Demande The current object (for fluent API support)
     */
    public function setDateReponse($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_reponse !== null || $dt !== null) {
            $currentDateAsString = ($this->date_reponse !== null && $tmpDt = new DateTime($this->date_reponse)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_reponse = $newDateAsString;
                $this->modifiedColumns[] = DemandePeer::DATE_REPONSE;
            }
        } // if either are not null


        return $this;
    } // setDateReponse()

    /**
     * Sets the value of [date_statut] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Demande The current object (for fluent API support)
     */
    public function setDateStatut($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_statut !== null || $dt !== null) {
            $currentDateAsString = ($this->date_statut !== null && $tmpDt = new DateTime($this->date_statut)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_statut = $newDateAsString;
                $this->modifiedColumns[] = DemandePeer::DATE_STATUT;
            }
        } // if either are not null


        return $this;
    } // setDateStatut()

    /**
     * Set the value of [id_region_affectation] column.
     * 
     * @param int $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setIdRegionAffectation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_region_affectation !== $v) {
            $this->id_region_affectation = $v;
            $this->modifiedColumns[] = DemandePeer::ID_REGION_AFFECTATION;
        }


        return $this;
    } // setIdRegionAffectation()

    /**
     * Set the value of [id_province_affectation] column.
     * 
     * @param int $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setIdProvinceAffectation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_province_affectation !== $v) {
            $this->id_province_affectation = $v;
            $this->modifiedColumns[] = DemandePeer::ID_PROVINCE_AFFECTATION;
        }


        return $this;
    } // setIdProvinceAffectation()

    /**
     * Set the value of [id_commune_affectation] column.
     * 
     * @param int $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setIdCommuneAffectation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_commune_affectation !== $v) {
            $this->id_commune_affectation = $v;
            $this->modifiedColumns[] = DemandePeer::ID_COMMUNE_AFFECTATION;
        }


        return $this;
    } // setIdCommuneAffectation()

    /**
     * Set the value of [organisation] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setOrganisation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisation !== $v) {
            $this->organisation = $v;
            $this->modifiedColumns[] = DemandePeer::ORGANISATION;
        }


        return $this;
    } // setOrganisation()

    /**
     * Set the value of [id_origine] column.
     * 
     * @param int $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setIdOrigine($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_origine !== $v) {
            $this->id_origine = $v;
            $this->modifiedColumns[] = DemandePeer::ID_ORIGINE;
        }


        return $this;
    } // setIdOrigine()

    /**
     * Set the value of [id_agent_createur] column.
     * 
     * @param int $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setIdAgentCreateur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_createur !== $v) {
            $this->id_agent_createur = $v;
            $this->modifiedColumns[] = DemandePeer::ID_AGENT_CREATEUR;
        }


        return $this;
    } // setIdAgentCreateur()

    /**
     * Set the value of [id_entite_creatrice] column.
     * 
     * @param int $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setIdEntiteCreatrice($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_entite_creatrice !== $v) {
            $this->id_entite_creatrice = $v;
            $this->modifiedColumns[] = DemandePeer::ID_ENTITE_CREATRICE;
        }


        return $this;
    } // setIdEntiteCreatrice()

    /**
     * Set the value of [supprime] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setSupprime($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->supprime !== $v) {
            $this->supprime = $v;
            $this->modifiedColumns[] = DemandePeer::SUPPRIME;
        }


        return $this;
    } // setSupprime()

    /**
     * Set the value of [source] column.
     * 
     * @param int $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setSource($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->source !== $v) {
            $this->source = $v;
            $this->modifiedColumns[] = DemandePeer::SOURCE;
        }


        return $this;
    } // setSource()

    /**
     * Set the value of [detail_source] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setDetailSource($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->detail_source !== $v) {
            $this->detail_source = $v;
            $this->modifiedColumns[] = DemandePeer::DETAIL_SOURCE;
        }


        return $this;
    } // setDetailSource()

    /**
     * Set the value of [format] column.
     * 
     * @param int $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setFormat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->format !== $v) {
            $this->format = $v;
            $this->modifiedColumns[] = DemandePeer::FORMAT;
        }


        return $this;
    } // setFormat()

    /**
     * Set the value of [reference_interne] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setReferenceInterne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->reference_interne !== $v) {
            $this->reference_interne = $v;
            $this->modifiedColumns[] = DemandePeer::REFERENCE_INTERNE;
        }


        return $this;
    } // setReferenceInterne()

    /**
     * Set the value of [id_region] column.
     * 
     * @param int $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setIdRegion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_region !== $v) {
            $this->id_region = $v;
            $this->modifiedColumns[] = DemandePeer::ID_REGION;
        }


        return $this;
    } // setIdRegion()

    /**
     * Set the value of [id_province] column.
     * 
     * @param int $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setIdProvince($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_province !== $v) {
            $this->id_province = $v;
            $this->modifiedColumns[] = DemandePeer::ID_PROVINCE;
        }


        return $this;
    } // setIdProvince()

    /**
     * Set the value of [id_pays] column.
     * 
     * @param int $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setIdPays($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_pays !== $v) {
            $this->id_pays = $v;
            $this->modifiedColumns[] = DemandePeer::ID_PAYS;
        }


        return $this;
    } // setIdPays()

    /**
     * Sets the value of [date_creation_demande] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Demande The current object (for fluent API support)
     */
    public function setDateCreationDemande($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_creation_demande !== null || $dt !== null) {
            $currentDateAsString = ($this->date_creation_demande !== null && $tmpDt = new DateTime($this->date_creation_demande)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_creation_demande = $newDateAsString;
                $this->modifiedColumns[] = DemandePeer::DATE_CREATION_DEMANDE;
            }
        } // if either are not null


        return $this;
    } // setDateCreationDemande()

    /**
     * Set the value of [id_entite_concernee] column.
     * 
     * @param int $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setIdEntiteConcernee($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_entite_concernee !== $v) {
            $this->id_entite_concernee = $v;
            $this->modifiedColumns[] = DemandePeer::ID_ENTITE_CONCERNEE;
        }


        return $this;
    } // setIdEntiteConcernee()

    /**
     * Set the value of [nom_entite_concernee_fr] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setNomEntiteConcerneeFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_entite_concernee_fr !== $v) {
            $this->nom_entite_concernee_fr = $v;
            $this->modifiedColumns[] = DemandePeer::NOM_ENTITE_CONCERNEE_FR;
        }


        return $this;
    } // setNomEntiteConcerneeFr()

    /**
     * Set the value of [nom_entite_concernee_ar] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setNomEntiteConcerneeAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_entite_concernee_ar !== $v) {
            $this->nom_entite_concernee_ar = $v;
            $this->modifiedColumns[] = DemandePeer::NOM_ENTITE_CONCERNEE_AR;
        }


        return $this;
    } // setNomEntiteConcerneeAr()

    /**
     * Set the value of [id_entite_concernee_citoyen] column.
     * 
     * @param int $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setIdEntiteConcerneeCitoyen($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_entite_concernee_citoyen !== $v) {
            $this->id_entite_concernee_citoyen = $v;
            $this->modifiedColumns[] = DemandePeer::ID_ENTITE_CONCERNEE_CITOYEN;
        }


        return $this;
    } // setIdEntiteConcerneeCitoyen()

    /**
     * Set the value of [nom_entite_concernee_citoyen_fr] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setNomEntiteConcerneeCitoyenFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_entite_concernee_citoyen_fr !== $v) {
            $this->nom_entite_concernee_citoyen_fr = $v;
            $this->modifiedColumns[] = DemandePeer::NOM_ENTITE_CONCERNEE_CITOYEN_FR;
        }


        return $this;
    } // setNomEntiteConcerneeCitoyenFr()

    /**
     * Set the value of [nom_entite_concernee_citoyen_ar] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setNomEntiteConcerneeCitoyenAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_entite_concernee_citoyen_ar !== $v) {
            $this->nom_entite_concernee_citoyen_ar = $v;
            $this->modifiedColumns[] = DemandePeer::NOM_ENTITE_CONCERNEE_CITOYEN_AR;
        }


        return $this;
    } // setNomEntiteConcerneeCitoyenAr()

    /**
     * Set the value of [type_requerant] column.
     * 
     * @param int $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setTypeRequerant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type_requerant !== $v) {
            $this->type_requerant = $v;
            $this->modifiedColumns[] = DemandePeer::TYPE_REQUERANT;
        }


        return $this;
    } // setTypeRequerant()

    /**
     * Set the value of [canal_depot] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setCanalDepot($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->canal_depot !== $v) {
            $this->canal_depot = $v;
            $this->modifiedColumns[] = DemandePeer::CANAL_DEPOT;
        }


        return $this;
    } // setCanalDepot()

    /**
     * Set the value of [id_externe] column.
     * 
     * @param int $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setIdExterne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_externe !== $v) {
            $this->id_externe = $v;
            $this->modifiedColumns[] = DemandePeer::ID_EXTERNE;
        }


        return $this;
    } // setIdExterne()

    /**
     * Sets the value of [date_envoi_reponse] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Demande The current object (for fluent API support)
     */
    public function setDateEnvoiReponse($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_envoi_reponse !== null || $dt !== null) {
            $currentDateAsString = ($this->date_envoi_reponse !== null && $tmpDt = new DateTime($this->date_envoi_reponse)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_envoi_reponse = $newDateAsString;
                $this->modifiedColumns[] = DemandePeer::DATE_ENVOI_REPONSE;
            }
        } // if either are not null


        return $this;
    } // setDateEnvoiReponse()

    /**
     * Set the value of [etat_envoi_reponse] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setEtatEnvoiReponse($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->etat_envoi_reponse !== $v) {
            $this->etat_envoi_reponse = $v;
            $this->modifiedColumns[] = DemandePeer::ETAT_ENVOI_REPONSE;
        }


        return $this;
    } // setEtatEnvoiReponse()

    /**
     * Set the value of [etat_envoi] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setEtatEnvoi($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->etat_envoi !== $v) {
            $this->etat_envoi = $v;
            $this->modifiedColumns[] = DemandePeer::ETAT_ENVOI;
        }


        return $this;
    } // setEtatEnvoi()

    /**
     * Sets the value of [date_envoi] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Demande The current object (for fluent API support)
     */
    public function setDateEnvoi($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_envoi !== null || $dt !== null) {
            $currentDateAsString = ($this->date_envoi !== null && $tmpDt = new DateTime($this->date_envoi)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_envoi = $newDateAsString;
                $this->modifiedColumns[] = DemandePeer::DATE_ENVOI;
            }
        } // if either are not null


        return $this;
    } // setDateEnvoi()

    /**
     * Set the value of [numero_externe] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setNumeroExterne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->numero_externe !== $v) {
            $this->numero_externe = $v;
            $this->modifiedColumns[] = DemandePeer::NUMERO_EXTERNE;
        }


        return $this;
    } // setNumeroExterne()

    /**
     * Set the value of [objet_demande] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setObjetDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->objet_demande !== $v) {
            $this->objet_demande = $v;
            $this->modifiedColumns[] = DemandePeer::OBJET_DEMANDE;
        }


        return $this;
    } // setObjetDemande()

    /**
     * Set the value of [tag_interface] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setTagInterface($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->tag_interface !== $v) {
            $this->tag_interface = $v;
            $this->modifiedColumns[] = DemandePeer::TAG_INTERFACE;
        }


        return $this;
    } // setTagInterface()

    /**
     * Set the value of [champ_supp_1] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setChampSupp1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->champ_supp_1 !== $v) {
            $this->champ_supp_1 = $v;
            $this->modifiedColumns[] = DemandePeer::CHAMP_SUPP_1;
        }


        return $this;
    } // setChampSupp1()

    /**
     * Set the value of [champ_supp_2] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setChampSupp2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->champ_supp_2 !== $v) {
            $this->champ_supp_2 = $v;
            $this->modifiedColumns[] = DemandePeer::CHAMP_SUPP_2;
        }


        return $this;
    } // setChampSupp2()

    /**
     * Set the value of [champ_supp_3] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setChampSupp3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->champ_supp_3 !== $v) {
            $this->champ_supp_3 = $v;
            $this->modifiedColumns[] = DemandePeer::CHAMP_SUPP_3;
        }


        return $this;
    } // setChampSupp3()

    /**
     * Set the value of [champ_supp_4] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setChampSupp4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->champ_supp_4 !== $v) {
            $this->champ_supp_4 = $v;
            $this->modifiedColumns[] = DemandePeer::CHAMP_SUPP_4;
        }


        return $this;
    } // setChampSupp4()

    /**
     * Set the value of [champ_supp_5] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setChampSupp5($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->champ_supp_5 !== $v) {
            $this->champ_supp_5 = $v;
            $this->modifiedColumns[] = DemandePeer::CHAMP_SUPP_5;
        }


        return $this;
    } // setChampSupp5()

    /**
     * Set the value of [type_demande] column.
     * 
     * @param int $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setTypeDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type_demande !== $v) {
            $this->type_demande = $v;
            $this->modifiedColumns[] = DemandePeer::TYPE_DEMANDE;
        }


        return $this;
    } // setTypeDemande()

    /**
     * Set the value of [id_agent_destinataire] column.
     * 
     * @param int $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setIdAgentDestinataire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_destinataire !== $v) {
            $this->id_agent_destinataire = $v;
            $this->modifiedColumns[] = DemandePeer::ID_AGENT_DESTINATAIRE;
        }


        return $this;
    } // setIdAgentDestinataire()

    /**
     * Set the value of [nom_agent_destinataire_fr] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setNomAgentDestinataireFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_agent_destinataire_fr !== $v) {
            $this->nom_agent_destinataire_fr = $v;
            $this->modifiedColumns[] = DemandePeer::NOM_AGENT_DESTINATAIRE_FR;
        }


        return $this;
    } // setNomAgentDestinataireFr()

    /**
     * Set the value of [prenom_agent_destinataire_fr] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setPrenomAgentDestinataireFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prenom_agent_destinataire_fr !== $v) {
            $this->prenom_agent_destinataire_fr = $v;
            $this->modifiedColumns[] = DemandePeer::PRENOM_AGENT_DESTINATAIRE_FR;
        }


        return $this;
    } // setPrenomAgentDestinataireFr()

    /**
     * Set the value of [nom_agent_destinataire_ar] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setNomAgentDestinataireAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_agent_destinataire_ar !== $v) {
            $this->nom_agent_destinataire_ar = $v;
            $this->modifiedColumns[] = DemandePeer::NOM_AGENT_DESTINATAIRE_AR;
        }


        return $this;
    } // setNomAgentDestinataireAr()

    /**
     * Set the value of [prenom_agent_destinataire_ar] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setPrenomAgentDestinataireAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prenom_agent_destinataire_ar !== $v) {
            $this->prenom_agent_destinataire_ar = $v;
            $this->modifiedColumns[] = DemandePeer::PRENOM_AGENT_DESTINATAIRE_AR;
        }


        return $this;
    } // setPrenomAgentDestinataireAr()

    /**
     * Set the value of [id_agent_signataire] column.
     * 
     * @param int $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setIdAgentSignataire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_signataire !== $v) {
            $this->id_agent_signataire = $v;
            $this->modifiedColumns[] = DemandePeer::ID_AGENT_SIGNATAIRE;
        }


        return $this;
    } // setIdAgentSignataire()

    /**
     * Set the value of [nom_agent_signataire_fr] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setNomAgentSignataireFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_agent_signataire_fr !== $v) {
            $this->nom_agent_signataire_fr = $v;
            $this->modifiedColumns[] = DemandePeer::NOM_AGENT_SIGNATAIRE_FR;
        }


        return $this;
    } // setNomAgentSignataireFr()

    /**
     * Set the value of [nom_agent_signataire_ar] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setNomAgentSignataireAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_agent_signataire_ar !== $v) {
            $this->nom_agent_signataire_ar = $v;
            $this->modifiedColumns[] = DemandePeer::NOM_AGENT_SIGNATAIRE_AR;
        }


        return $this;
    } // setNomAgentSignataireAr()

    /**
     * Set the value of [prenom_agent_signataire_ar] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setPrenomAgentSignataireAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prenom_agent_signataire_ar !== $v) {
            $this->prenom_agent_signataire_ar = $v;
            $this->modifiedColumns[] = DemandePeer::PRENOM_AGENT_SIGNATAIRE_AR;
        }


        return $this;
    } // setPrenomAgentSignataireAr()

    /**
     * Set the value of [prenom_agent_signataire_fr] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setPrenomAgentSignataireFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prenom_agent_signataire_fr !== $v) {
            $this->prenom_agent_signataire_fr = $v;
            $this->modifiedColumns[] = DemandePeer::PRENOM_AGENT_SIGNATAIRE_FR;
        }


        return $this;
    } // setPrenomAgentSignataireFr()

    /**
     * Set the value of [id_agent_emetteur] column.
     * 
     * @param int $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setIdAgentEmetteur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_emetteur !== $v) {
            $this->id_agent_emetteur = $v;
            $this->modifiedColumns[] = DemandePeer::ID_AGENT_EMETTEUR;
        }


        return $this;
    } // setIdAgentEmetteur()

    /**
     * Set the value of [nom_agent_emetteur_fr] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setNomAgentEmetteurFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_agent_emetteur_fr !== $v) {
            $this->nom_agent_emetteur_fr = $v;
            $this->modifiedColumns[] = DemandePeer::NOM_AGENT_EMETTEUR_FR;
        }


        return $this;
    } // setNomAgentEmetteurFr()

    /**
     * Set the value of [nom_agent_emetteur_ar] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setNomAgentEmetteurAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->nom_agent_emetteur_ar !== $v) {
            $this->nom_agent_emetteur_ar = $v;
            $this->modifiedColumns[] = DemandePeer::NOM_AGENT_EMETTEUR_AR;
        }


        return $this;
    } // setNomAgentEmetteurAr()

    /**
     * Set the value of [prenom_agent_emetteur_ar] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setPrenomAgentEmetteurAr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prenom_agent_emetteur_ar !== $v) {
            $this->prenom_agent_emetteur_ar = $v;
            $this->modifiedColumns[] = DemandePeer::PRENOM_AGENT_EMETTEUR_AR;
        }


        return $this;
    } // setPrenomAgentEmetteurAr()

    /**
     * Set the value of [prenom_agent_emetteur_fr] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setPrenomAgentEmetteurFr($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prenom_agent_emetteur_fr !== $v) {
            $this->prenom_agent_emetteur_fr = $v;
            $this->modifiedColumns[] = DemandePeer::PRENOM_AGENT_EMETTEUR_FR;
        }


        return $this;
    } // setPrenomAgentEmetteurFr()

    /**
     * Set the value of [reponse_obligatoire] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setReponseObligatoire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->reponse_obligatoire !== $v) {
            $this->reponse_obligatoire = $v;
            $this->modifiedColumns[] = DemandePeer::REPONSE_OBLIGATOIRE;
        }


        return $this;
    } // setReponseObligatoire()

    /**
     * Set the value of [code_demande] column.
     * 
     * @param int $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setCodeDemande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->code_demande !== $v) {
            $this->code_demande = $v;
            $this->modifiedColumns[] = DemandePeer::CODE_DEMANDE;
        }


        return $this;
    } // setCodeDemande()

    /**
     * Set the value of [code_provisoire] column.
     * 
     * @param int $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setCodeProvisoire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->code_provisoire !== $v) {
            $this->code_provisoire = $v;
            $this->modifiedColumns[] = DemandePeer::CODE_PROVISOIRE;
        }


        return $this;
    } // setCodeProvisoire()

    /**
     * Set the value of [tag_gateway] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setTagGateway($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->tag_gateway !== $v) {
            $this->tag_gateway = $v;
            $this->modifiedColumns[] = DemandePeer::TAG_GATEWAY;
        }


        return $this;
    } // setTagGateway()

    /**
     * Set the value of [id_utilisateur_gateway] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setIdUtilisateurGateway($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->id_utilisateur_gateway !== $v) {
            $this->id_utilisateur_gateway = $v;
            $this->modifiedColumns[] = DemandePeer::ID_UTILISATEUR_GATEWAY;
        }


        return $this;
    } // setIdUtilisateurGateway()

    /**
     * Set the value of [champ_supp_theme_1] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setChampSuppTheme1($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->champ_supp_theme_1 !== $v) {
            $this->champ_supp_theme_1 = $v;
            $this->modifiedColumns[] = DemandePeer::CHAMP_SUPP_THEME_1;
        }


        return $this;
    } // setChampSuppTheme1()

    /**
     * Set the value of [champ_supp_theme_2] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setChampSuppTheme2($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->champ_supp_theme_2 !== $v) {
            $this->champ_supp_theme_2 = $v;
            $this->modifiedColumns[] = DemandePeer::CHAMP_SUPP_THEME_2;
        }


        return $this;
    } // setChampSuppTheme2()

    /**
     * Set the value of [champ_supp_theme_3] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setChampSuppTheme3($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->champ_supp_theme_3 !== $v) {
            $this->champ_supp_theme_3 = $v;
            $this->modifiedColumns[] = DemandePeer::CHAMP_SUPP_THEME_3;
        }


        return $this;
    } // setChampSuppTheme3()

    /**
     * Set the value of [champ_supp_theme_4] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setChampSuppTheme4($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->champ_supp_theme_4 !== $v) {
            $this->champ_supp_theme_4 = $v;
            $this->modifiedColumns[] = DemandePeer::CHAMP_SUPP_THEME_4;
        }


        return $this;
    } // setChampSuppTheme4()

    /**
     * Set the value of [champ_supp_theme_5] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setChampSuppTheme5($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->champ_supp_theme_5 !== $v) {
            $this->champ_supp_theme_5 = $v;
            $this->modifiedColumns[] = DemandePeer::CHAMP_SUPP_THEME_5;
        }


        return $this;
    } // setChampSuppTheme5()

    /**
     * Set the value of [id_type_theme] column.
     * 
     * @param int $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setIdTypeTheme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_type_theme !== $v) {
            $this->id_type_theme = $v;
            $this->modifiedColumns[] = DemandePeer::ID_TYPE_THEME;
        }


        return $this;
    } // setIdTypeTheme()

    /**
     * Set the value of [id_etape_en_cours] column.
     * 
     * @param int $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setIdEtapeEnCours($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_etape_en_cours !== $v) {
            $this->id_etape_en_cours = $v;
            $this->modifiedColumns[] = DemandePeer::ID_ETAPE_EN_COURS;
        }


        return $this;
    } // setIdEtapeEnCours()

    /**
     * Set the value of [numero_etape_encours] column.
     * 
     * @param int $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setNumeroEtapeEncours($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->numero_etape_encours !== $v) {
            $this->numero_etape_encours = $v;
            $this->modifiedColumns[] = DemandePeer::NUMERO_ETAPE_ENCOURS;
        }


        return $this;
    } // setNumeroEtapeEncours()

    /**
     * Set the value of [nombre_etapes] column.
     * 
     * @param int $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setNombreEtapes($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->nombre_etapes !== $v) {
            $this->nombre_etapes = $v;
            $this->modifiedColumns[] = DemandePeer::NOMBRE_ETAPES;
        }


        return $this;
    } // setNombreEtapes()

    /**
     * Set the value of [dernier_message] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setDernierMessage($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->dernier_message !== $v) {
            $this->dernier_message = $v;
            $this->modifiedColumns[] = DemandePeer::DERNIER_MESSAGE;
        }


        return $this;
    } // setDernierMessage()

    /**
     * Set the value of [libelle_etape_encours] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setLibelleEtapeEncours($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->libelle_etape_encours !== $v) {
            $this->libelle_etape_encours = $v;
            $this->modifiedColumns[] = DemandePeer::LIBELLE_ETAPE_ENCOURS;
        }


        return $this;
    } // setLibelleEtapeEncours()

    /**
     * Set the value of [dernier_acteur] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setDernierActeur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->dernier_acteur !== $v) {
            $this->dernier_acteur = $v;
            $this->modifiedColumns[] = DemandePeer::DERNIER_ACTEUR;
        }


        return $this;
    } // setDernierActeur()

    /**
     * Sets the value of [date_reponse_etape] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Demande The current object (for fluent API support)
     */
    public function setDateReponseEtape($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_reponse_etape !== null || $dt !== null) {
            $currentDateAsString = ($this->date_reponse_etape !== null && $tmpDt = new DateTime($this->date_reponse_etape)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_reponse_etape = $newDateAsString;
                $this->modifiedColumns[] = DemandePeer::DATE_REPONSE_ETAPE;
            }
        } // if either are not null


        return $this;
    } // setDateReponseEtape()

    /**
     * Set the value of [id_entite_relance] column.
     * 
     * @param int $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setIdEntiteRelance($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_entite_relance !== $v) {
            $this->id_entite_relance = $v;
            $this->modifiedColumns[] = DemandePeer::ID_ENTITE_RELANCE;
        }


        return $this;
    } // setIdEntiteRelance()

    /**
     * Set the value of [id_agent_relance] column.
     * 
     * @param int $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setIdAgentRelance($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_agent_relance !== $v) {
            $this->id_agent_relance = $v;
            $this->modifiedColumns[] = DemandePeer::ID_AGENT_RELANCE;
        }


        return $this;
    } // setIdAgentRelance()

    /**
     * Set the value of [important] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setImportant($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->important !== $v) {
            $this->important = $v;
            $this->modifiedColumns[] = DemandePeer::IMPORTANT;
        }


        return $this;
    } // setImportant()

    /**
     * Sets the value of [date_echeance_reponse_proche] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return Demande The current object (for fluent API support)
     */
    public function setDateEcheanceReponseProche($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->date_echeance_reponse_proche !== null || $dt !== null) {
            $currentDateAsString = ($this->date_echeance_reponse_proche !== null && $tmpDt = new DateTime($this->date_echeance_reponse_proche)) ? $tmpDt->format('Y-m-d H:i:s') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d H:i:s') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->date_echeance_reponse_proche = $newDateAsString;
                $this->modifiedColumns[] = DemandePeer::DATE_ECHEANCE_REPONSE_PROCHE;
            }
        } // if either are not null


        return $this;
    } // setDateEcheanceReponseProche()

    /**
     * Set the value of [url_externe] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setUrlExterne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->url_externe !== $v) {
            $this->url_externe = $v;
            $this->modifiedColumns[] = DemandePeer::URL_EXTERNE;
        }


        return $this;
    } // setUrlExterne()

    /**
     * Set the value of [cloture_automatique] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setClotureAutomatique($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->cloture_automatique !== $v) {
            $this->cloture_automatique = $v;
            $this->modifiedColumns[] = DemandePeer::CLOTURE_AUTOMATIQUE;
        }


        return $this;
    } // setClotureAutomatique()

    /**
     * Set the value of [delai_traitement_ouvrable] column.
     * 
     * @param int $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setDelaiTraitementOuvrable($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->delai_traitement_ouvrable !== $v) {
            $this->delai_traitement_ouvrable = $v;
            $this->modifiedColumns[] = DemandePeer::DELAI_TRAITEMENT_OUVRABLE;
        }


        return $this;
    } // setDelaiTraitementOuvrable()

    /**
     * Set the value of [acteur_externe] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setActeurExterne($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->acteur_externe !== $v) {
            $this->acteur_externe = $v;
            $this->modifiedColumns[] = DemandePeer::ACTEUR_EXTERNE;
        }


        return $this;
    } // setActeurExterne()

    /**
     * Set the value of [delai_traitement] column.
     * 
     * @param int $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setDelaiTraitement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->delai_traitement !== $v) {
            $this->delai_traitement = $v;
            $this->modifiedColumns[] = DemandePeer::DELAI_TRAITEMENT;
        }


        return $this;
    } // setDelaiTraitement()

    /**
     * Set the value of [objet_modifie] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setObjetModifie($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->objet_modifie !== $v) {
            $this->objet_modifie = $v;
            $this->modifiedColumns[] = DemandePeer::OBJET_MODIFIE;
        }


        return $this;
    } // setObjetModifie()

    /**
     * Set the value of [confidentiel] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setConfidentiel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->confidentiel !== $v) {
            $this->confidentiel = $v;
            $this->modifiedColumns[] = DemandePeer::CONFIDENTIEL;
        }


        return $this;
    } // setConfidentiel()

    /**
     * Set the value of [delai_complement] column.
     * 
     * @param int $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setDelaiComplement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->delai_complement !== $v) {
            $this->delai_complement = $v;
            $this->modifiedColumns[] = DemandePeer::DELAI_COMPLEMENT;
        }


        return $this;
    } // setDelaiComplement()

    /**
     * Set the value of [erreurs_detectes] column.
     * 
     * @param string $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setErreursDetectes($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->erreurs_detectes !== $v) {
            $this->erreurs_detectes = $v;
            $this->modifiedColumns[] = DemandePeer::ERREURS_DETECTES;
        }


        return $this;
    } // setErreursDetectes()

    /**
     * Set the value of [id_demande_origine] column.
     * 
     * @param int $v new value
     * @return Demande The current object (for fluent API support)
     */
    public function setIdDemandeOrigine($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_demande_origine !== $v) {
            $this->id_demande_origine = $v;
            $this->modifiedColumns[] = DemandePeer::ID_DEMANDE_ORIGINE;
        }


        return $this;
    } // setIdDemandeOrigine()

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
            if ($this->revision !== 0) {
                return false;
            }

            if ($this->cloturer_par !== '0') {
                return false;
            }

            if ($this->supprime !== '0') {
                return false;
            }

            if ($this->canal_depot !== '0') {
                return false;
            }

            if ($this->etat_envoi_reponse !== '0') {
                return false;
            }

            if ($this->etat_envoi !== '0') {
                return false;
            }

            if ($this->tag_interface !== '0') {
                return false;
            }

            if ($this->tag_gateway !== '0') {
                return false;
            }

            if ($this->important !== '0') {
                return false;
            }

            if ($this->cloture_automatique !== '0') {
                return false;
            }

            if ($this->confidentiel !== '0') {
                return false;
            }

            if ($this->delai_complement !== 0) {
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
            $this->id_agent = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->id_commune = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->id_service = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->id_entite = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->id_organisme = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->numero_demande = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->detail_demande = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->statut_demande = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
            $this->latitude_demande = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->longitude_demande = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->adresse_demande = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->id_piece_jointe_demande = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->nom_piece_jointe_demande = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->revision = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
            $this->contenu_piece_jointe = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->nom_citoyen = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->prenom_citoyen = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->email_citoyen = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->tel_citoyen = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->telephone_portable = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->adresse_citoyen_1 = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->adresse_citoyen_2 = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->code_postal_citoyen = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->localite_citoyen = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->identifiant_app_mobile_citoyen = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->type_device = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->date_depot_demande = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->date_traitement_demande = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->date_cloture_demande = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->date_reouverture_demande = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->duree_avant_traitement = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->duree_traitement = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->motif_reouvertir = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->cloturer_par = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->pays = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->nom_agent_fr = ($row[$startcol + 36] !== null) ? (string) $row[$startcol + 36] : null;
            $this->nom_agent_ar = ($row[$startcol + 37] !== null) ? (string) $row[$startcol + 37] : null;
            $this->id_theme_citoyen = ($row[$startcol + 38] !== null) ? (int) $row[$startcol + 38] : null;
            $this->id_theme_en_cours = ($row[$startcol + 39] !== null) ? (int) $row[$startcol + 39] : null;
            $this->date_reponse = ($row[$startcol + 40] !== null) ? (string) $row[$startcol + 40] : null;
            $this->date_statut = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->id_region_affectation = ($row[$startcol + 42] !== null) ? (int) $row[$startcol + 42] : null;
            $this->id_province_affectation = ($row[$startcol + 43] !== null) ? (int) $row[$startcol + 43] : null;
            $this->id_commune_affectation = ($row[$startcol + 44] !== null) ? (int) $row[$startcol + 44] : null;
            $this->organisation = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
            $this->id_origine = ($row[$startcol + 46] !== null) ? (int) $row[$startcol + 46] : null;
            $this->id_agent_createur = ($row[$startcol + 47] !== null) ? (int) $row[$startcol + 47] : null;
            $this->id_entite_creatrice = ($row[$startcol + 48] !== null) ? (int) $row[$startcol + 48] : null;
            $this->supprime = ($row[$startcol + 49] !== null) ? (string) $row[$startcol + 49] : null;
            $this->source = ($row[$startcol + 50] !== null) ? (int) $row[$startcol + 50] : null;
            $this->detail_source = ($row[$startcol + 51] !== null) ? (string) $row[$startcol + 51] : null;
            $this->format = ($row[$startcol + 52] !== null) ? (int) $row[$startcol + 52] : null;
            $this->reference_interne = ($row[$startcol + 53] !== null) ? (string) $row[$startcol + 53] : null;
            $this->id_region = ($row[$startcol + 54] !== null) ? (int) $row[$startcol + 54] : null;
            $this->id_province = ($row[$startcol + 55] !== null) ? (int) $row[$startcol + 55] : null;
            $this->id_pays = ($row[$startcol + 56] !== null) ? (int) $row[$startcol + 56] : null;
            $this->date_creation_demande = ($row[$startcol + 57] !== null) ? (string) $row[$startcol + 57] : null;
            $this->id_entite_concernee = ($row[$startcol + 58] !== null) ? (int) $row[$startcol + 58] : null;
            $this->nom_entite_concernee_fr = ($row[$startcol + 59] !== null) ? (string) $row[$startcol + 59] : null;
            $this->nom_entite_concernee_ar = ($row[$startcol + 60] !== null) ? (string) $row[$startcol + 60] : null;
            $this->id_entite_concernee_citoyen = ($row[$startcol + 61] !== null) ? (int) $row[$startcol + 61] : null;
            $this->nom_entite_concernee_citoyen_fr = ($row[$startcol + 62] !== null) ? (string) $row[$startcol + 62] : null;
            $this->nom_entite_concernee_citoyen_ar = ($row[$startcol + 63] !== null) ? (string) $row[$startcol + 63] : null;
            $this->type_requerant = ($row[$startcol + 64] !== null) ? (int) $row[$startcol + 64] : null;
            $this->canal_depot = ($row[$startcol + 65] !== null) ? (string) $row[$startcol + 65] : null;
            $this->id_externe = ($row[$startcol + 66] !== null) ? (int) $row[$startcol + 66] : null;
            $this->date_envoi_reponse = ($row[$startcol + 67] !== null) ? (string) $row[$startcol + 67] : null;
            $this->etat_envoi_reponse = ($row[$startcol + 68] !== null) ? (string) $row[$startcol + 68] : null;
            $this->etat_envoi = ($row[$startcol + 69] !== null) ? (string) $row[$startcol + 69] : null;
            $this->date_envoi = ($row[$startcol + 70] !== null) ? (string) $row[$startcol + 70] : null;
            $this->numero_externe = ($row[$startcol + 71] !== null) ? (string) $row[$startcol + 71] : null;
            $this->objet_demande = ($row[$startcol + 72] !== null) ? (string) $row[$startcol + 72] : null;
            $this->tag_interface = ($row[$startcol + 73] !== null) ? (string) $row[$startcol + 73] : null;
            $this->champ_supp_1 = ($row[$startcol + 74] !== null) ? (string) $row[$startcol + 74] : null;
            $this->champ_supp_2 = ($row[$startcol + 75] !== null) ? (string) $row[$startcol + 75] : null;
            $this->champ_supp_3 = ($row[$startcol + 76] !== null) ? (string) $row[$startcol + 76] : null;
            $this->champ_supp_4 = ($row[$startcol + 77] !== null) ? (string) $row[$startcol + 77] : null;
            $this->champ_supp_5 = ($row[$startcol + 78] !== null) ? (string) $row[$startcol + 78] : null;
            $this->type_demande = ($row[$startcol + 79] !== null) ? (int) $row[$startcol + 79] : null;
            $this->id_agent_destinataire = ($row[$startcol + 80] !== null) ? (int) $row[$startcol + 80] : null;
            $this->nom_agent_destinataire_fr = ($row[$startcol + 81] !== null) ? (string) $row[$startcol + 81] : null;
            $this->prenom_agent_destinataire_fr = ($row[$startcol + 82] !== null) ? (string) $row[$startcol + 82] : null;
            $this->nom_agent_destinataire_ar = ($row[$startcol + 83] !== null) ? (string) $row[$startcol + 83] : null;
            $this->prenom_agent_destinataire_ar = ($row[$startcol + 84] !== null) ? (string) $row[$startcol + 84] : null;
            $this->id_agent_signataire = ($row[$startcol + 85] !== null) ? (int) $row[$startcol + 85] : null;
            $this->nom_agent_signataire_fr = ($row[$startcol + 86] !== null) ? (string) $row[$startcol + 86] : null;
            $this->nom_agent_signataire_ar = ($row[$startcol + 87] !== null) ? (string) $row[$startcol + 87] : null;
            $this->prenom_agent_signataire_ar = ($row[$startcol + 88] !== null) ? (string) $row[$startcol + 88] : null;
            $this->prenom_agent_signataire_fr = ($row[$startcol + 89] !== null) ? (string) $row[$startcol + 89] : null;
            $this->id_agent_emetteur = ($row[$startcol + 90] !== null) ? (int) $row[$startcol + 90] : null;
            $this->nom_agent_emetteur_fr = ($row[$startcol + 91] !== null) ? (string) $row[$startcol + 91] : null;
            $this->nom_agent_emetteur_ar = ($row[$startcol + 92] !== null) ? (string) $row[$startcol + 92] : null;
            $this->prenom_agent_emetteur_ar = ($row[$startcol + 93] !== null) ? (string) $row[$startcol + 93] : null;
            $this->prenom_agent_emetteur_fr = ($row[$startcol + 94] !== null) ? (string) $row[$startcol + 94] : null;
            $this->reponse_obligatoire = ($row[$startcol + 95] !== null) ? (string) $row[$startcol + 95] : null;
            $this->code_demande = ($row[$startcol + 96] !== null) ? (int) $row[$startcol + 96] : null;
            $this->code_provisoire = ($row[$startcol + 97] !== null) ? (int) $row[$startcol + 97] : null;
            $this->tag_gateway = ($row[$startcol + 98] !== null) ? (string) $row[$startcol + 98] : null;
            $this->id_utilisateur_gateway = ($row[$startcol + 99] !== null) ? (string) $row[$startcol + 99] : null;
            $this->champ_supp_theme_1 = ($row[$startcol + 100] !== null) ? (string) $row[$startcol + 100] : null;
            $this->champ_supp_theme_2 = ($row[$startcol + 101] !== null) ? (string) $row[$startcol + 101] : null;
            $this->champ_supp_theme_3 = ($row[$startcol + 102] !== null) ? (string) $row[$startcol + 102] : null;
            $this->champ_supp_theme_4 = ($row[$startcol + 103] !== null) ? (string) $row[$startcol + 103] : null;
            $this->champ_supp_theme_5 = ($row[$startcol + 104] !== null) ? (string) $row[$startcol + 104] : null;
            $this->id_type_theme = ($row[$startcol + 105] !== null) ? (int) $row[$startcol + 105] : null;
            $this->id_etape_en_cours = ($row[$startcol + 106] !== null) ? (int) $row[$startcol + 106] : null;
            $this->numero_etape_encours = ($row[$startcol + 107] !== null) ? (int) $row[$startcol + 107] : null;
            $this->nombre_etapes = ($row[$startcol + 108] !== null) ? (int) $row[$startcol + 108] : null;
            $this->dernier_message = ($row[$startcol + 109] !== null) ? (string) $row[$startcol + 109] : null;
            $this->libelle_etape_encours = ($row[$startcol + 110] !== null) ? (string) $row[$startcol + 110] : null;
            $this->dernier_acteur = ($row[$startcol + 111] !== null) ? (string) $row[$startcol + 111] : null;
            $this->date_reponse_etape = ($row[$startcol + 112] !== null) ? (string) $row[$startcol + 112] : null;
            $this->id_entite_relance = ($row[$startcol + 113] !== null) ? (int) $row[$startcol + 113] : null;
            $this->id_agent_relance = ($row[$startcol + 114] !== null) ? (int) $row[$startcol + 114] : null;
            $this->important = ($row[$startcol + 115] !== null) ? (string) $row[$startcol + 115] : null;
            $this->date_echeance_reponse_proche = ($row[$startcol + 116] !== null) ? (string) $row[$startcol + 116] : null;
            $this->url_externe = ($row[$startcol + 117] !== null) ? (string) $row[$startcol + 117] : null;
            $this->cloture_automatique = ($row[$startcol + 118] !== null) ? (string) $row[$startcol + 118] : null;
            $this->delai_traitement_ouvrable = ($row[$startcol + 119] !== null) ? (int) $row[$startcol + 119] : null;
            $this->acteur_externe = ($row[$startcol + 120] !== null) ? (string) $row[$startcol + 120] : null;
            $this->delai_traitement = ($row[$startcol + 121] !== null) ? (int) $row[$startcol + 121] : null;
            $this->objet_modifie = ($row[$startcol + 122] !== null) ? (string) $row[$startcol + 122] : null;
            $this->confidentiel = ($row[$startcol + 123] !== null) ? (string) $row[$startcol + 123] : null;
            $this->delai_complement = ($row[$startcol + 124] !== null) ? (int) $row[$startcol + 124] : null;
            $this->erreurs_detectes = ($row[$startcol + 125] !== null) ? (string) $row[$startcol + 125] : null;
            $this->id_demande_origine = ($row[$startcol + 126] !== null) ? (int) $row[$startcol + 126] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 127; // 127 = DemandePeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating Demande object", $e);
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
            $con = Propel::getConnection(DemandePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = DemandePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
        $row = $stmt->fetch(PDO::FETCH_NUM);
        $stmt->closeCursor();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true); // rehydrate

        if ($deep) {  // also de-associate any related objects?

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
            $con = Propel::getConnection(DemandePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = DemandeQuery::create()
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
            $con = Propel::getConnection(DemandePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                DemandePeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = DemandePeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . DemandePeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(DemandePeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`ID`';
        }
        if ($this->isColumnModified(DemandePeer::ID_AGENT)) {
            $modifiedColumns[':p' . $index++]  = '`ID_AGENT`';
        }
        if ($this->isColumnModified(DemandePeer::ID_COMMUNE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_COMMUNE`';
        }
        if ($this->isColumnModified(DemandePeer::ID_SERVICE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_SERVICE`';
        }
        if ($this->isColumnModified(DemandePeer::ID_ENTITE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ENTITE`';
        }
        if ($this->isColumnModified(DemandePeer::ID_ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ORGANISME`';
        }
        if ($this->isColumnModified(DemandePeer::NUMERO_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`NUMERO_DEMANDE`';
        }
        if ($this->isColumnModified(DemandePeer::DETAIL_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`DETAIL_DEMANDE`';
        }
        if ($this->isColumnModified(DemandePeer::STATUT_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`STATUT_DEMANDE`';
        }
        if ($this->isColumnModified(DemandePeer::LATITUDE_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`LATITUDE_DEMANDE`';
        }
        if ($this->isColumnModified(DemandePeer::LONGITUDE_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`LONGITUDE_DEMANDE`';
        }
        if ($this->isColumnModified(DemandePeer::ADRESSE_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`ADRESSE_DEMANDE`';
        }
        if ($this->isColumnModified(DemandePeer::ID_PIECE_JOINTE_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_PIECE_JOINTE_DEMANDE`';
        }
        if ($this->isColumnModified(DemandePeer::NOM_PIECE_JOINTE_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`NOM_PIECE_JOINTE_DEMANDE`';
        }
        if ($this->isColumnModified(DemandePeer::REVISION)) {
            $modifiedColumns[':p' . $index++]  = '`REVISION`';
        }
        if ($this->isColumnModified(DemandePeer::CONTENU_PIECE_JOINTE)) {
            $modifiedColumns[':p' . $index++]  = '`CONTENU_PIECE_JOINTE`';
        }
        if ($this->isColumnModified(DemandePeer::NOM_CITOYEN)) {
            $modifiedColumns[':p' . $index++]  = '`NOM_CITOYEN`';
        }
        if ($this->isColumnModified(DemandePeer::PRENOM_CITOYEN)) {
            $modifiedColumns[':p' . $index++]  = '`PRENOM_CITOYEN`';
        }
        if ($this->isColumnModified(DemandePeer::EMAIL_CITOYEN)) {
            $modifiedColumns[':p' . $index++]  = '`EMAIL_CITOYEN`';
        }
        if ($this->isColumnModified(DemandePeer::TEL_CITOYEN)) {
            $modifiedColumns[':p' . $index++]  = '`TEL_CITOYEN`';
        }
        if ($this->isColumnModified(DemandePeer::TELEPHONE_PORTABLE)) {
            $modifiedColumns[':p' . $index++]  = '`TELEPHONE_PORTABLE`';
        }
        if ($this->isColumnModified(DemandePeer::ADRESSE_CITOYEN_1)) {
            $modifiedColumns[':p' . $index++]  = '`ADRESSE_CITOYEN_1`';
        }
        if ($this->isColumnModified(DemandePeer::ADRESSE_CITOYEN_2)) {
            $modifiedColumns[':p' . $index++]  = '`ADRESSE_CITOYEN_2`';
        }
        if ($this->isColumnModified(DemandePeer::CODE_POSTAL_CITOYEN)) {
            $modifiedColumns[':p' . $index++]  = '`CODE_POSTAL_CITOYEN`';
        }
        if ($this->isColumnModified(DemandePeer::LOCALITE_CITOYEN)) {
            $modifiedColumns[':p' . $index++]  = '`LOCALITE_CITOYEN`';
        }
        if ($this->isColumnModified(DemandePeer::IDENTIFIANT_APP_MOBILE_CITOYEN)) {
            $modifiedColumns[':p' . $index++]  = '`IDENTIFIANT_APP_MOBILE_CITOYEN`';
        }
        if ($this->isColumnModified(DemandePeer::TYPE_DEVICE)) {
            $modifiedColumns[':p' . $index++]  = '`TYPE_DEVICE`';
        }
        if ($this->isColumnModified(DemandePeer::DATE_DEPOT_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_DEPOT_DEMANDE`';
        }
        if ($this->isColumnModified(DemandePeer::DATE_TRAITEMENT_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_TRAITEMENT_DEMANDE`';
        }
        if ($this->isColumnModified(DemandePeer::DATE_CLOTURE_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_CLOTURE_DEMANDE`';
        }
        if ($this->isColumnModified(DemandePeer::DATE_REOUVERTURE_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_REOUVERTURE_DEMANDE`';
        }
        if ($this->isColumnModified(DemandePeer::DUREE_AVANT_TRAITEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`DUREE_AVANT_TRAITEMENT`';
        }
        if ($this->isColumnModified(DemandePeer::DUREE_TRAITEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`DUREE_TRAITEMENT`';
        }
        if ($this->isColumnModified(DemandePeer::MOTIF_REOUVERTIR)) {
            $modifiedColumns[':p' . $index++]  = '`MOTIF_REOUVERTIR`';
        }
        if ($this->isColumnModified(DemandePeer::CLOTURER_PAR)) {
            $modifiedColumns[':p' . $index++]  = '`CLOTURER_PAR`';
        }
        if ($this->isColumnModified(DemandePeer::PAYS)) {
            $modifiedColumns[':p' . $index++]  = '`PAYS`';
        }
        if ($this->isColumnModified(DemandePeer::NOM_AGENT_FR)) {
            $modifiedColumns[':p' . $index++]  = '`NOM_AGENT_FR`';
        }
        if ($this->isColumnModified(DemandePeer::NOM_AGENT_AR)) {
            $modifiedColumns[':p' . $index++]  = '`NOM_AGENT_AR`';
        }
        if ($this->isColumnModified(DemandePeer::ID_THEME_CITOYEN)) {
            $modifiedColumns[':p' . $index++]  = '`ID_THEME_CITOYEN`';
        }
        if ($this->isColumnModified(DemandePeer::ID_THEME_EN_COURS)) {
            $modifiedColumns[':p' . $index++]  = '`ID_THEME_EN_COURS`';
        }
        if ($this->isColumnModified(DemandePeer::DATE_REPONSE)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_REPONSE`';
        }
        if ($this->isColumnModified(DemandePeer::DATE_STATUT)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_STATUT`';
        }
        if ($this->isColumnModified(DemandePeer::ID_REGION_AFFECTATION)) {
            $modifiedColumns[':p' . $index++]  = '`ID_REGION_AFFECTATION`';
        }
        if ($this->isColumnModified(DemandePeer::ID_PROVINCE_AFFECTATION)) {
            $modifiedColumns[':p' . $index++]  = '`ID_PROVINCE_AFFECTATION`';
        }
        if ($this->isColumnModified(DemandePeer::ID_COMMUNE_AFFECTATION)) {
            $modifiedColumns[':p' . $index++]  = '`ID_COMMUNE_AFFECTATION`';
        }
        if ($this->isColumnModified(DemandePeer::ORGANISATION)) {
            $modifiedColumns[':p' . $index++]  = '`ORGANISATION`';
        }
        if ($this->isColumnModified(DemandePeer::ID_ORIGINE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ORIGINE`';
        }
        if ($this->isColumnModified(DemandePeer::ID_AGENT_CREATEUR)) {
            $modifiedColumns[':p' . $index++]  = '`ID_AGENT_CREATEUR`';
        }
        if ($this->isColumnModified(DemandePeer::ID_ENTITE_CREATRICE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ENTITE_CREATRICE`';
        }
        if ($this->isColumnModified(DemandePeer::SUPPRIME)) {
            $modifiedColumns[':p' . $index++]  = '`SUPPRIME`';
        }
        if ($this->isColumnModified(DemandePeer::SOURCE)) {
            $modifiedColumns[':p' . $index++]  = '`SOURCE`';
        }
        if ($this->isColumnModified(DemandePeer::DETAIL_SOURCE)) {
            $modifiedColumns[':p' . $index++]  = '`DETAIL_SOURCE`';
        }
        if ($this->isColumnModified(DemandePeer::FORMAT)) {
            $modifiedColumns[':p' . $index++]  = '`FORMAT`';
        }
        if ($this->isColumnModified(DemandePeer::REFERENCE_INTERNE)) {
            $modifiedColumns[':p' . $index++]  = '`REFERENCE_INTERNE`';
        }
        if ($this->isColumnModified(DemandePeer::ID_REGION)) {
            $modifiedColumns[':p' . $index++]  = '`ID_REGION`';
        }
        if ($this->isColumnModified(DemandePeer::ID_PROVINCE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_PROVINCE`';
        }
        if ($this->isColumnModified(DemandePeer::ID_PAYS)) {
            $modifiedColumns[':p' . $index++]  = '`ID_PAYS`';
        }
        if ($this->isColumnModified(DemandePeer::DATE_CREATION_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_CREATION_DEMANDE`';
        }
        if ($this->isColumnModified(DemandePeer::ID_ENTITE_CONCERNEE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ENTITE_CONCERNEE`';
        }
        if ($this->isColumnModified(DemandePeer::NOM_ENTITE_CONCERNEE_FR)) {
            $modifiedColumns[':p' . $index++]  = '`NOM_ENTITE_CONCERNEE_FR`';
        }
        if ($this->isColumnModified(DemandePeer::NOM_ENTITE_CONCERNEE_AR)) {
            $modifiedColumns[':p' . $index++]  = '`NOM_ENTITE_CONCERNEE_AR`';
        }
        if ($this->isColumnModified(DemandePeer::ID_ENTITE_CONCERNEE_CITOYEN)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ENTITE_CONCERNEE_CITOYEN`';
        }
        if ($this->isColumnModified(DemandePeer::NOM_ENTITE_CONCERNEE_CITOYEN_FR)) {
            $modifiedColumns[':p' . $index++]  = '`NOM_ENTITE_CONCERNEE_CITOYEN_FR`';
        }
        if ($this->isColumnModified(DemandePeer::NOM_ENTITE_CONCERNEE_CITOYEN_AR)) {
            $modifiedColumns[':p' . $index++]  = '`NOM_ENTITE_CONCERNEE_CITOYEN_AR`';
        }
        if ($this->isColumnModified(DemandePeer::TYPE_REQUERANT)) {
            $modifiedColumns[':p' . $index++]  = '`TYPE_REQUERANT`';
        }
        if ($this->isColumnModified(DemandePeer::CANAL_DEPOT)) {
            $modifiedColumns[':p' . $index++]  = '`CANAL_DEPOT`';
        }
        if ($this->isColumnModified(DemandePeer::ID_EXTERNE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_EXTERNE`';
        }
        if ($this->isColumnModified(DemandePeer::DATE_ENVOI_REPONSE)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_ENVOI_REPONSE`';
        }
        if ($this->isColumnModified(DemandePeer::ETAT_ENVOI_REPONSE)) {
            $modifiedColumns[':p' . $index++]  = '`ETAT_ENVOI_REPONSE`';
        }
        if ($this->isColumnModified(DemandePeer::ETAT_ENVOI)) {
            $modifiedColumns[':p' . $index++]  = '`ETAT_ENVOI`';
        }
        if ($this->isColumnModified(DemandePeer::DATE_ENVOI)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_ENVOI`';
        }
        if ($this->isColumnModified(DemandePeer::NUMERO_EXTERNE)) {
            $modifiedColumns[':p' . $index++]  = '`NUMERO_EXTERNE`';
        }
        if ($this->isColumnModified(DemandePeer::OBJET_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`OBJET_DEMANDE`';
        }
        if ($this->isColumnModified(DemandePeer::TAG_INTERFACE)) {
            $modifiedColumns[':p' . $index++]  = '`TAG_INTERFACE`';
        }
        if ($this->isColumnModified(DemandePeer::CHAMP_SUPP_1)) {
            $modifiedColumns[':p' . $index++]  = '`CHAMP_SUPP_1`';
        }
        if ($this->isColumnModified(DemandePeer::CHAMP_SUPP_2)) {
            $modifiedColumns[':p' . $index++]  = '`CHAMP_SUPP_2`';
        }
        if ($this->isColumnModified(DemandePeer::CHAMP_SUPP_3)) {
            $modifiedColumns[':p' . $index++]  = '`CHAMP_SUPP_3`';
        }
        if ($this->isColumnModified(DemandePeer::CHAMP_SUPP_4)) {
            $modifiedColumns[':p' . $index++]  = '`CHAMP_SUPP_4`';
        }
        if ($this->isColumnModified(DemandePeer::CHAMP_SUPP_5)) {
            $modifiedColumns[':p' . $index++]  = '`CHAMP_SUPP_5`';
        }
        if ($this->isColumnModified(DemandePeer::TYPE_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`TYPE_DEMANDE`';
        }
        if ($this->isColumnModified(DemandePeer::ID_AGENT_DESTINATAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_AGENT_DESTINATAIRE`';
        }
        if ($this->isColumnModified(DemandePeer::NOM_AGENT_DESTINATAIRE_FR)) {
            $modifiedColumns[':p' . $index++]  = '`NOM_AGENT_DESTINATAIRE_FR`';
        }
        if ($this->isColumnModified(DemandePeer::PRENOM_AGENT_DESTINATAIRE_FR)) {
            $modifiedColumns[':p' . $index++]  = '`PRENOM_AGENT_DESTINATAIRE_FR`';
        }
        if ($this->isColumnModified(DemandePeer::NOM_AGENT_DESTINATAIRE_AR)) {
            $modifiedColumns[':p' . $index++]  = '`NOM_AGENT_DESTINATAIRE_AR`';
        }
        if ($this->isColumnModified(DemandePeer::PRENOM_AGENT_DESTINATAIRE_AR)) {
            $modifiedColumns[':p' . $index++]  = '`PRENOM_AGENT_DESTINATAIRE_AR`';
        }
        if ($this->isColumnModified(DemandePeer::ID_AGENT_SIGNATAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_AGENT_SIGNATAIRE`';
        }
        if ($this->isColumnModified(DemandePeer::NOM_AGENT_SIGNATAIRE_FR)) {
            $modifiedColumns[':p' . $index++]  = '`NOM_AGENT_SIGNATAIRE_FR`';
        }
        if ($this->isColumnModified(DemandePeer::NOM_AGENT_SIGNATAIRE_AR)) {
            $modifiedColumns[':p' . $index++]  = '`NOM_AGENT_SIGNATAIRE_AR`';
        }
        if ($this->isColumnModified(DemandePeer::PRENOM_AGENT_SIGNATAIRE_AR)) {
            $modifiedColumns[':p' . $index++]  = '`PRENOM_AGENT_SIGNATAIRE_AR`';
        }
        if ($this->isColumnModified(DemandePeer::PRENOM_AGENT_SIGNATAIRE_FR)) {
            $modifiedColumns[':p' . $index++]  = '`PRENOM_AGENT_SIGNATAIRE_FR`';
        }
        if ($this->isColumnModified(DemandePeer::ID_AGENT_EMETTEUR)) {
            $modifiedColumns[':p' . $index++]  = '`ID_AGENT_EMETTEUR`';
        }
        if ($this->isColumnModified(DemandePeer::NOM_AGENT_EMETTEUR_FR)) {
            $modifiedColumns[':p' . $index++]  = '`NOM_AGENT_EMETTEUR_FR`';
        }
        if ($this->isColumnModified(DemandePeer::NOM_AGENT_EMETTEUR_AR)) {
            $modifiedColumns[':p' . $index++]  = '`NOM_AGENT_EMETTEUR_AR`';
        }
        if ($this->isColumnModified(DemandePeer::PRENOM_AGENT_EMETTEUR_AR)) {
            $modifiedColumns[':p' . $index++]  = '`PRENOM_AGENT_EMETTEUR_AR`';
        }
        if ($this->isColumnModified(DemandePeer::PRENOM_AGENT_EMETTEUR_FR)) {
            $modifiedColumns[':p' . $index++]  = '`PRENOM_AGENT_EMETTEUR_FR`';
        }
        if ($this->isColumnModified(DemandePeer::REPONSE_OBLIGATOIRE)) {
            $modifiedColumns[':p' . $index++]  = '`REPONSE_OBLIGATOIRE`';
        }
        if ($this->isColumnModified(DemandePeer::CODE_DEMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`CODE_DEMANDE`';
        }
        if ($this->isColumnModified(DemandePeer::CODE_PROVISOIRE)) {
            $modifiedColumns[':p' . $index++]  = '`CODE_PROVISOIRE`';
        }
        if ($this->isColumnModified(DemandePeer::TAG_GATEWAY)) {
            $modifiedColumns[':p' . $index++]  = '`TAG_GATEWAY`';
        }
        if ($this->isColumnModified(DemandePeer::ID_UTILISATEUR_GATEWAY)) {
            $modifiedColumns[':p' . $index++]  = '`ID_UTILISATEUR_GATEWAY`';
        }
        if ($this->isColumnModified(DemandePeer::CHAMP_SUPP_THEME_1)) {
            $modifiedColumns[':p' . $index++]  = '`CHAMP_SUPP_THEME_1`';
        }
        if ($this->isColumnModified(DemandePeer::CHAMP_SUPP_THEME_2)) {
            $modifiedColumns[':p' . $index++]  = '`CHAMP_SUPP_THEME_2`';
        }
        if ($this->isColumnModified(DemandePeer::CHAMP_SUPP_THEME_3)) {
            $modifiedColumns[':p' . $index++]  = '`CHAMP_SUPP_THEME_3`';
        }
        if ($this->isColumnModified(DemandePeer::CHAMP_SUPP_THEME_4)) {
            $modifiedColumns[':p' . $index++]  = '`CHAMP_SUPP_THEME_4`';
        }
        if ($this->isColumnModified(DemandePeer::CHAMP_SUPP_THEME_5)) {
            $modifiedColumns[':p' . $index++]  = '`CHAMP_SUPP_THEME_5`';
        }
        if ($this->isColumnModified(DemandePeer::ID_TYPE_THEME)) {
            $modifiedColumns[':p' . $index++]  = '`ID_TYPE_THEME`';
        }
        if ($this->isColumnModified(DemandePeer::ID_ETAPE_EN_COURS)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ETAPE_EN_COURS`';
        }
        if ($this->isColumnModified(DemandePeer::NUMERO_ETAPE_ENCOURS)) {
            $modifiedColumns[':p' . $index++]  = '`NUMERO_ETAPE_ENCOURS`';
        }
        if ($this->isColumnModified(DemandePeer::NOMBRE_ETAPES)) {
            $modifiedColumns[':p' . $index++]  = '`NOMBRE_ETAPES`';
        }
        if ($this->isColumnModified(DemandePeer::DERNIER_MESSAGE)) {
            $modifiedColumns[':p' . $index++]  = '`DERNIER_MESSAGE`';
        }
        if ($this->isColumnModified(DemandePeer::LIBELLE_ETAPE_ENCOURS)) {
            $modifiedColumns[':p' . $index++]  = '`LIBELLE_ETAPE_ENCOURS`';
        }
        if ($this->isColumnModified(DemandePeer::DERNIER_ACTEUR)) {
            $modifiedColumns[':p' . $index++]  = '`DERNIER_ACTEUR`';
        }
        if ($this->isColumnModified(DemandePeer::DATE_REPONSE_ETAPE)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_REPONSE_ETAPE`';
        }
        if ($this->isColumnModified(DemandePeer::ID_ENTITE_RELANCE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_ENTITE_RELANCE`';
        }
        if ($this->isColumnModified(DemandePeer::ID_AGENT_RELANCE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_AGENT_RELANCE`';
        }
        if ($this->isColumnModified(DemandePeer::IMPORTANT)) {
            $modifiedColumns[':p' . $index++]  = '`IMPORTANT`';
        }
        if ($this->isColumnModified(DemandePeer::DATE_ECHEANCE_REPONSE_PROCHE)) {
            $modifiedColumns[':p' . $index++]  = '`DATE_ECHEANCE_REPONSE_PROCHE`';
        }
        if ($this->isColumnModified(DemandePeer::URL_EXTERNE)) {
            $modifiedColumns[':p' . $index++]  = '`URL_EXTERNE`';
        }
        if ($this->isColumnModified(DemandePeer::CLOTURE_AUTOMATIQUE)) {
            $modifiedColumns[':p' . $index++]  = '`CLOTURE_AUTOMATIQUE`';
        }
        if ($this->isColumnModified(DemandePeer::DELAI_TRAITEMENT_OUVRABLE)) {
            $modifiedColumns[':p' . $index++]  = '`DELAI_TRAITEMENT_OUVRABLE`';
        }
        if ($this->isColumnModified(DemandePeer::ACTEUR_EXTERNE)) {
            $modifiedColumns[':p' . $index++]  = '`ACTEUR_EXTERNE`';
        }
        if ($this->isColumnModified(DemandePeer::DELAI_TRAITEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`DELAI_TRAITEMENT`';
        }
        if ($this->isColumnModified(DemandePeer::OBJET_MODIFIE)) {
            $modifiedColumns[':p' . $index++]  = '`OBJET_MODIFIE`';
        }
        if ($this->isColumnModified(DemandePeer::CONFIDENTIEL)) {
            $modifiedColumns[':p' . $index++]  = '`CONFIDENTIEL`';
        }
        if ($this->isColumnModified(DemandePeer::DELAI_COMPLEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`DELAI_COMPLEMENT`';
        }
        if ($this->isColumnModified(DemandePeer::ERREURS_DETECTES)) {
            $modifiedColumns[':p' . $index++]  = '`ERREURS_DETECTES`';
        }
        if ($this->isColumnModified(DemandePeer::ID_DEMANDE_ORIGINE)) {
            $modifiedColumns[':p' . $index++]  = '`ID_DEMANDE_ORIGINE`';
        }

        $sql = sprintf(
            'INSERT INTO `demande` (%s) VALUES (%s)',
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
                    case '`ID_AGENT`':						
                        $stmt->bindValue($identifier, $this->id_agent, PDO::PARAM_INT);
                        break;
                    case '`ID_COMMUNE`':						
                        $stmt->bindValue($identifier, $this->id_commune, PDO::PARAM_INT);
                        break;
                    case '`ID_SERVICE`':						
                        $stmt->bindValue($identifier, $this->id_service, PDO::PARAM_INT);
                        break;
                    case '`ID_ENTITE`':						
                        $stmt->bindValue($identifier, $this->id_entite, PDO::PARAM_INT);
                        break;
                    case '`ID_ORGANISME`':						
                        $stmt->bindValue($identifier, $this->id_organisme, PDO::PARAM_INT);
                        break;
                    case '`NUMERO_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->numero_demande, PDO::PARAM_STR);
                        break;
                    case '`DETAIL_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->detail_demande, PDO::PARAM_STR);
                        break;
                    case '`STATUT_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->statut_demande, PDO::PARAM_INT);
                        break;
                    case '`LATITUDE_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->latitude_demande, PDO::PARAM_STR);
                        break;
                    case '`LONGITUDE_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->longitude_demande, PDO::PARAM_STR);
                        break;
                    case '`ADRESSE_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->adresse_demande, PDO::PARAM_STR);
                        break;
                    case '`ID_PIECE_JOINTE_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->id_piece_jointe_demande, PDO::PARAM_INT);
                        break;
                    case '`NOM_PIECE_JOINTE_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->nom_piece_jointe_demande, PDO::PARAM_STR);
                        break;
                    case '`REVISION`':						
                        $stmt->bindValue($identifier, $this->revision, PDO::PARAM_INT);
                        break;
                    case '`CONTENU_PIECE_JOINTE`':						
                        $stmt->bindValue($identifier, $this->contenu_piece_jointe, PDO::PARAM_STR);
                        break;
                    case '`NOM_CITOYEN`':						
                        $stmt->bindValue($identifier, $this->nom_citoyen, PDO::PARAM_STR);
                        break;
                    case '`PRENOM_CITOYEN`':						
                        $stmt->bindValue($identifier, $this->prenom_citoyen, PDO::PARAM_STR);
                        break;
                    case '`EMAIL_CITOYEN`':						
                        $stmt->bindValue($identifier, $this->email_citoyen, PDO::PARAM_STR);
                        break;
                    case '`TEL_CITOYEN`':						
                        $stmt->bindValue($identifier, $this->tel_citoyen, PDO::PARAM_STR);
                        break;
                    case '`TELEPHONE_PORTABLE`':						
                        $stmt->bindValue($identifier, $this->telephone_portable, PDO::PARAM_STR);
                        break;
                    case '`ADRESSE_CITOYEN_1`':						
                        $stmt->bindValue($identifier, $this->adresse_citoyen_1, PDO::PARAM_STR);
                        break;
                    case '`ADRESSE_CITOYEN_2`':						
                        $stmt->bindValue($identifier, $this->adresse_citoyen_2, PDO::PARAM_STR);
                        break;
                    case '`CODE_POSTAL_CITOYEN`':						
                        $stmt->bindValue($identifier, $this->code_postal_citoyen, PDO::PARAM_STR);
                        break;
                    case '`LOCALITE_CITOYEN`':						
                        $stmt->bindValue($identifier, $this->localite_citoyen, PDO::PARAM_STR);
                        break;
                    case '`IDENTIFIANT_APP_MOBILE_CITOYEN`':						
                        $stmt->bindValue($identifier, $this->identifiant_app_mobile_citoyen, PDO::PARAM_STR);
                        break;
                    case '`TYPE_DEVICE`':						
                        $stmt->bindValue($identifier, $this->type_device, PDO::PARAM_STR);
                        break;
                    case '`DATE_DEPOT_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->date_depot_demande, PDO::PARAM_STR);
                        break;
                    case '`DATE_TRAITEMENT_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->date_traitement_demande, PDO::PARAM_STR);
                        break;
                    case '`DATE_CLOTURE_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->date_cloture_demande, PDO::PARAM_STR);
                        break;
                    case '`DATE_REOUVERTURE_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->date_reouverture_demande, PDO::PARAM_STR);
                        break;
                    case '`DUREE_AVANT_TRAITEMENT`':						
                        $stmt->bindValue($identifier, $this->duree_avant_traitement, PDO::PARAM_STR);
                        break;
                    case '`DUREE_TRAITEMENT`':						
                        $stmt->bindValue($identifier, $this->duree_traitement, PDO::PARAM_STR);
                        break;
                    case '`MOTIF_REOUVERTIR`':						
                        $stmt->bindValue($identifier, $this->motif_reouvertir, PDO::PARAM_STR);
                        break;
                    case '`CLOTURER_PAR`':						
                        $stmt->bindValue($identifier, $this->cloturer_par, PDO::PARAM_STR);
                        break;
                    case '`PAYS`':						
                        $stmt->bindValue($identifier, $this->pays, PDO::PARAM_STR);
                        break;
                    case '`NOM_AGENT_FR`':						
                        $stmt->bindValue($identifier, $this->nom_agent_fr, PDO::PARAM_STR);
                        break;
                    case '`NOM_AGENT_AR`':						
                        $stmt->bindValue($identifier, $this->nom_agent_ar, PDO::PARAM_STR);
                        break;
                    case '`ID_THEME_CITOYEN`':						
                        $stmt->bindValue($identifier, $this->id_theme_citoyen, PDO::PARAM_INT);
                        break;
                    case '`ID_THEME_EN_COURS`':						
                        $stmt->bindValue($identifier, $this->id_theme_en_cours, PDO::PARAM_INT);
                        break;
                    case '`DATE_REPONSE`':						
                        $stmt->bindValue($identifier, $this->date_reponse, PDO::PARAM_STR);
                        break;
                    case '`DATE_STATUT`':						
                        $stmt->bindValue($identifier, $this->date_statut, PDO::PARAM_STR);
                        break;
                    case '`ID_REGION_AFFECTATION`':						
                        $stmt->bindValue($identifier, $this->id_region_affectation, PDO::PARAM_INT);
                        break;
                    case '`ID_PROVINCE_AFFECTATION`':						
                        $stmt->bindValue($identifier, $this->id_province_affectation, PDO::PARAM_INT);
                        break;
                    case '`ID_COMMUNE_AFFECTATION`':						
                        $stmt->bindValue($identifier, $this->id_commune_affectation, PDO::PARAM_INT);
                        break;
                    case '`ORGANISATION`':						
                        $stmt->bindValue($identifier, $this->organisation, PDO::PARAM_STR);
                        break;
                    case '`ID_ORIGINE`':						
                        $stmt->bindValue($identifier, $this->id_origine, PDO::PARAM_INT);
                        break;
                    case '`ID_AGENT_CREATEUR`':						
                        $stmt->bindValue($identifier, $this->id_agent_createur, PDO::PARAM_INT);
                        break;
                    case '`ID_ENTITE_CREATRICE`':						
                        $stmt->bindValue($identifier, $this->id_entite_creatrice, PDO::PARAM_INT);
                        break;
                    case '`SUPPRIME`':						
                        $stmt->bindValue($identifier, $this->supprime, PDO::PARAM_STR);
                        break;
                    case '`SOURCE`':						
                        $stmt->bindValue($identifier, $this->source, PDO::PARAM_INT);
                        break;
                    case '`DETAIL_SOURCE`':						
                        $stmt->bindValue($identifier, $this->detail_source, PDO::PARAM_STR);
                        break;
                    case '`FORMAT`':						
                        $stmt->bindValue($identifier, $this->format, PDO::PARAM_INT);
                        break;
                    case '`REFERENCE_INTERNE`':						
                        $stmt->bindValue($identifier, $this->reference_interne, PDO::PARAM_STR);
                        break;
                    case '`ID_REGION`':						
                        $stmt->bindValue($identifier, $this->id_region, PDO::PARAM_INT);
                        break;
                    case '`ID_PROVINCE`':						
                        $stmt->bindValue($identifier, $this->id_province, PDO::PARAM_INT);
                        break;
                    case '`ID_PAYS`':						
                        $stmt->bindValue($identifier, $this->id_pays, PDO::PARAM_INT);
                        break;
                    case '`DATE_CREATION_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->date_creation_demande, PDO::PARAM_STR);
                        break;
                    case '`ID_ENTITE_CONCERNEE`':						
                        $stmt->bindValue($identifier, $this->id_entite_concernee, PDO::PARAM_INT);
                        break;
                    case '`NOM_ENTITE_CONCERNEE_FR`':						
                        $stmt->bindValue($identifier, $this->nom_entite_concernee_fr, PDO::PARAM_STR);
                        break;
                    case '`NOM_ENTITE_CONCERNEE_AR`':						
                        $stmt->bindValue($identifier, $this->nom_entite_concernee_ar, PDO::PARAM_STR);
                        break;
                    case '`ID_ENTITE_CONCERNEE_CITOYEN`':						
                        $stmt->bindValue($identifier, $this->id_entite_concernee_citoyen, PDO::PARAM_INT);
                        break;
                    case '`NOM_ENTITE_CONCERNEE_CITOYEN_FR`':						
                        $stmt->bindValue($identifier, $this->nom_entite_concernee_citoyen_fr, PDO::PARAM_STR);
                        break;
                    case '`NOM_ENTITE_CONCERNEE_CITOYEN_AR`':						
                        $stmt->bindValue($identifier, $this->nom_entite_concernee_citoyen_ar, PDO::PARAM_STR);
                        break;
                    case '`TYPE_REQUERANT`':						
                        $stmt->bindValue($identifier, $this->type_requerant, PDO::PARAM_INT);
                        break;
                    case '`CANAL_DEPOT`':						
                        $stmt->bindValue($identifier, $this->canal_depot, PDO::PARAM_STR);
                        break;
                    case '`ID_EXTERNE`':						
                        $stmt->bindValue($identifier, $this->id_externe, PDO::PARAM_INT);
                        break;
                    case '`DATE_ENVOI_REPONSE`':						
                        $stmt->bindValue($identifier, $this->date_envoi_reponse, PDO::PARAM_STR);
                        break;
                    case '`ETAT_ENVOI_REPONSE`':						
                        $stmt->bindValue($identifier, $this->etat_envoi_reponse, PDO::PARAM_STR);
                        break;
                    case '`ETAT_ENVOI`':						
                        $stmt->bindValue($identifier, $this->etat_envoi, PDO::PARAM_STR);
                        break;
                    case '`DATE_ENVOI`':						
                        $stmt->bindValue($identifier, $this->date_envoi, PDO::PARAM_STR);
                        break;
                    case '`NUMERO_EXTERNE`':						
                        $stmt->bindValue($identifier, $this->numero_externe, PDO::PARAM_STR);
                        break;
                    case '`OBJET_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->objet_demande, PDO::PARAM_STR);
                        break;
                    case '`TAG_INTERFACE`':						
                        $stmt->bindValue($identifier, $this->tag_interface, PDO::PARAM_STR);
                        break;
                    case '`CHAMP_SUPP_1`':						
                        $stmt->bindValue($identifier, $this->champ_supp_1, PDO::PARAM_STR);
                        break;
                    case '`CHAMP_SUPP_2`':						
                        $stmt->bindValue($identifier, $this->champ_supp_2, PDO::PARAM_STR);
                        break;
                    case '`CHAMP_SUPP_3`':						
                        $stmt->bindValue($identifier, $this->champ_supp_3, PDO::PARAM_STR);
                        break;
                    case '`CHAMP_SUPP_4`':						
                        $stmt->bindValue($identifier, $this->champ_supp_4, PDO::PARAM_STR);
                        break;
                    case '`CHAMP_SUPP_5`':						
                        $stmt->bindValue($identifier, $this->champ_supp_5, PDO::PARAM_STR);
                        break;
                    case '`TYPE_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->type_demande, PDO::PARAM_INT);
                        break;
                    case '`ID_AGENT_DESTINATAIRE`':						
                        $stmt->bindValue($identifier, $this->id_agent_destinataire, PDO::PARAM_INT);
                        break;
                    case '`NOM_AGENT_DESTINATAIRE_FR`':						
                        $stmt->bindValue($identifier, $this->nom_agent_destinataire_fr, PDO::PARAM_STR);
                        break;
                    case '`PRENOM_AGENT_DESTINATAIRE_FR`':						
                        $stmt->bindValue($identifier, $this->prenom_agent_destinataire_fr, PDO::PARAM_STR);
                        break;
                    case '`NOM_AGENT_DESTINATAIRE_AR`':						
                        $stmt->bindValue($identifier, $this->nom_agent_destinataire_ar, PDO::PARAM_STR);
                        break;
                    case '`PRENOM_AGENT_DESTINATAIRE_AR`':						
                        $stmt->bindValue($identifier, $this->prenom_agent_destinataire_ar, PDO::PARAM_STR);
                        break;
                    case '`ID_AGENT_SIGNATAIRE`':						
                        $stmt->bindValue($identifier, $this->id_agent_signataire, PDO::PARAM_INT);
                        break;
                    case '`NOM_AGENT_SIGNATAIRE_FR`':						
                        $stmt->bindValue($identifier, $this->nom_agent_signataire_fr, PDO::PARAM_STR);
                        break;
                    case '`NOM_AGENT_SIGNATAIRE_AR`':						
                        $stmt->bindValue($identifier, $this->nom_agent_signataire_ar, PDO::PARAM_STR);
                        break;
                    case '`PRENOM_AGENT_SIGNATAIRE_AR`':						
                        $stmt->bindValue($identifier, $this->prenom_agent_signataire_ar, PDO::PARAM_STR);
                        break;
                    case '`PRENOM_AGENT_SIGNATAIRE_FR`':						
                        $stmt->bindValue($identifier, $this->prenom_agent_signataire_fr, PDO::PARAM_STR);
                        break;
                    case '`ID_AGENT_EMETTEUR`':						
                        $stmt->bindValue($identifier, $this->id_agent_emetteur, PDO::PARAM_INT);
                        break;
                    case '`NOM_AGENT_EMETTEUR_FR`':						
                        $stmt->bindValue($identifier, $this->nom_agent_emetteur_fr, PDO::PARAM_STR);
                        break;
                    case '`NOM_AGENT_EMETTEUR_AR`':						
                        $stmt->bindValue($identifier, $this->nom_agent_emetteur_ar, PDO::PARAM_STR);
                        break;
                    case '`PRENOM_AGENT_EMETTEUR_AR`':						
                        $stmt->bindValue($identifier, $this->prenom_agent_emetteur_ar, PDO::PARAM_STR);
                        break;
                    case '`PRENOM_AGENT_EMETTEUR_FR`':						
                        $stmt->bindValue($identifier, $this->prenom_agent_emetteur_fr, PDO::PARAM_STR);
                        break;
                    case '`REPONSE_OBLIGATOIRE`':						
                        $stmt->bindValue($identifier, $this->reponse_obligatoire, PDO::PARAM_STR);
                        break;
                    case '`CODE_DEMANDE`':						
                        $stmt->bindValue($identifier, $this->code_demande, PDO::PARAM_INT);
                        break;
                    case '`CODE_PROVISOIRE`':						
                        $stmt->bindValue($identifier, $this->code_provisoire, PDO::PARAM_INT);
                        break;
                    case '`TAG_GATEWAY`':						
                        $stmt->bindValue($identifier, $this->tag_gateway, PDO::PARAM_STR);
                        break;
                    case '`ID_UTILISATEUR_GATEWAY`':						
                        $stmt->bindValue($identifier, $this->id_utilisateur_gateway, PDO::PARAM_STR);
                        break;
                    case '`CHAMP_SUPP_THEME_1`':						
                        $stmt->bindValue($identifier, $this->champ_supp_theme_1, PDO::PARAM_STR);
                        break;
                    case '`CHAMP_SUPP_THEME_2`':						
                        $stmt->bindValue($identifier, $this->champ_supp_theme_2, PDO::PARAM_STR);
                        break;
                    case '`CHAMP_SUPP_THEME_3`':						
                        $stmt->bindValue($identifier, $this->champ_supp_theme_3, PDO::PARAM_STR);
                        break;
                    case '`CHAMP_SUPP_THEME_4`':						
                        $stmt->bindValue($identifier, $this->champ_supp_theme_4, PDO::PARAM_STR);
                        break;
                    case '`CHAMP_SUPP_THEME_5`':						
                        $stmt->bindValue($identifier, $this->champ_supp_theme_5, PDO::PARAM_STR);
                        break;
                    case '`ID_TYPE_THEME`':						
                        $stmt->bindValue($identifier, $this->id_type_theme, PDO::PARAM_INT);
                        break;
                    case '`ID_ETAPE_EN_COURS`':						
                        $stmt->bindValue($identifier, $this->id_etape_en_cours, PDO::PARAM_INT);
                        break;
                    case '`NUMERO_ETAPE_ENCOURS`':						
                        $stmt->bindValue($identifier, $this->numero_etape_encours, PDO::PARAM_INT);
                        break;
                    case '`NOMBRE_ETAPES`':						
                        $stmt->bindValue($identifier, $this->nombre_etapes, PDO::PARAM_INT);
                        break;
                    case '`DERNIER_MESSAGE`':						
                        $stmt->bindValue($identifier, $this->dernier_message, PDO::PARAM_STR);
                        break;
                    case '`LIBELLE_ETAPE_ENCOURS`':						
                        $stmt->bindValue($identifier, $this->libelle_etape_encours, PDO::PARAM_STR);
                        break;
                    case '`DERNIER_ACTEUR`':						
                        $stmt->bindValue($identifier, $this->dernier_acteur, PDO::PARAM_STR);
                        break;
                    case '`DATE_REPONSE_ETAPE`':						
                        $stmt->bindValue($identifier, $this->date_reponse_etape, PDO::PARAM_STR);
                        break;
                    case '`ID_ENTITE_RELANCE`':						
                        $stmt->bindValue($identifier, $this->id_entite_relance, PDO::PARAM_INT);
                        break;
                    case '`ID_AGENT_RELANCE`':						
                        $stmt->bindValue($identifier, $this->id_agent_relance, PDO::PARAM_INT);
                        break;
                    case '`IMPORTANT`':						
                        $stmt->bindValue($identifier, $this->important, PDO::PARAM_STR);
                        break;
                    case '`DATE_ECHEANCE_REPONSE_PROCHE`':						
                        $stmt->bindValue($identifier, $this->date_echeance_reponse_proche, PDO::PARAM_STR);
                        break;
                    case '`URL_EXTERNE`':						
                        $stmt->bindValue($identifier, $this->url_externe, PDO::PARAM_STR);
                        break;
                    case '`CLOTURE_AUTOMATIQUE`':						
                        $stmt->bindValue($identifier, $this->cloture_automatique, PDO::PARAM_STR);
                        break;
                    case '`DELAI_TRAITEMENT_OUVRABLE`':						
                        $stmt->bindValue($identifier, $this->delai_traitement_ouvrable, PDO::PARAM_INT);
                        break;
                    case '`ACTEUR_EXTERNE`':						
                        $stmt->bindValue($identifier, $this->acteur_externe, PDO::PARAM_STR);
                        break;
                    case '`DELAI_TRAITEMENT`':						
                        $stmt->bindValue($identifier, $this->delai_traitement, PDO::PARAM_INT);
                        break;
                    case '`OBJET_MODIFIE`':						
                        $stmt->bindValue($identifier, $this->objet_modifie, PDO::PARAM_STR);
                        break;
                    case '`CONFIDENTIEL`':						
                        $stmt->bindValue($identifier, $this->confidentiel, PDO::PARAM_STR);
                        break;
                    case '`DELAI_COMPLEMENT`':						
                        $stmt->bindValue($identifier, $this->delai_complement, PDO::PARAM_INT);
                        break;
                    case '`ERREURS_DETECTES`':						
                        $stmt->bindValue($identifier, $this->erreurs_detectes, PDO::PARAM_STR);
                        break;
                    case '`ID_DEMANDE_ORIGINE`':						
                        $stmt->bindValue($identifier, $this->id_demande_origine, PDO::PARAM_INT);
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


            if (($retval = DemandePeer::doValidate($this, $columns)) !== true) {
                $failureMap = array_merge($failureMap, $retval);
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
        $pos = DemandePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdAgent();
                break;
            case 2:
                return $this->getIdCommune();
                break;
            case 3:
                return $this->getIdService();
                break;
            case 4:
                return $this->getIdEntite();
                break;
            case 5:
                return $this->getIdOrganisme();
                break;
            case 6:
                return $this->getNumeroDemande();
                break;
            case 7:
                return $this->getDetailDemande();
                break;
            case 8:
                return $this->getStatutDemande();
                break;
            case 9:
                return $this->getLatitudeDemande();
                break;
            case 10:
                return $this->getLongitudeDemande();
                break;
            case 11:
                return $this->getAdresseDemande();
                break;
            case 12:
                return $this->getIdPieceJointeDemande();
                break;
            case 13:
                return $this->getNomPieceJointeDemande();
                break;
            case 14:
                return $this->getRevision();
                break;
            case 15:
                return $this->getContenuPieceJointe();
                break;
            case 16:
                return $this->getNomCitoyen();
                break;
            case 17:
                return $this->getPrenomCitoyen();
                break;
            case 18:
                return $this->getEmailCitoyen();
                break;
            case 19:
                return $this->getTelCitoyen();
                break;
            case 20:
                return $this->getTelephonePortable();
                break;
            case 21:
                return $this->getAdresseCitoyen1();
                break;
            case 22:
                return $this->getAdresseCitoyen2();
                break;
            case 23:
                return $this->getCodePostalCitoyen();
                break;
            case 24:
                return $this->getLocaliteCitoyen();
                break;
            case 25:
                return $this->getIdentifiantAppMobileCitoyen();
                break;
            case 26:
                return $this->getTypeDevice();
                break;
            case 27:
                return $this->getDateDepotDemande();
                break;
            case 28:
                return $this->getDateTraitementDemande();
                break;
            case 29:
                return $this->getDateClotureDemande();
                break;
            case 30:
                return $this->getDateReouvertureDemande();
                break;
            case 31:
                return $this->getDureeAvantTraitement();
                break;
            case 32:
                return $this->getDureeTraitement();
                break;
            case 33:
                return $this->getMotifReouvertir();
                break;
            case 34:
                return $this->getCloturerPar();
                break;
            case 35:
                return $this->getPays();
                break;
            case 36:
                return $this->getNomAgentFr();
                break;
            case 37:
                return $this->getNomAgentAr();
                break;
            case 38:
                return $this->getIdThemeCitoyen();
                break;
            case 39:
                return $this->getIdThemeEnCours();
                break;
            case 40:
                return $this->getDateReponse();
                break;
            case 41:
                return $this->getDateStatut();
                break;
            case 42:
                return $this->getIdRegionAffectation();
                break;
            case 43:
                return $this->getIdProvinceAffectation();
                break;
            case 44:
                return $this->getIdCommuneAffectation();
                break;
            case 45:
                return $this->getOrganisation();
                break;
            case 46:
                return $this->getIdOrigine();
                break;
            case 47:
                return $this->getIdAgentCreateur();
                break;
            case 48:
                return $this->getIdEntiteCreatrice();
                break;
            case 49:
                return $this->getSupprime();
                break;
            case 50:
                return $this->getSource();
                break;
            case 51:
                return $this->getDetailSource();
                break;
            case 52:
                return $this->getFormat();
                break;
            case 53:
                return $this->getReferenceInterne();
                break;
            case 54:
                return $this->getIdRegion();
                break;
            case 55:
                return $this->getIdProvince();
                break;
            case 56:
                return $this->getIdPays();
                break;
            case 57:
                return $this->getDateCreationDemande();
                break;
            case 58:
                return $this->getIdEntiteConcernee();
                break;
            case 59:
                return $this->getNomEntiteConcerneeFr();
                break;
            case 60:
                return $this->getNomEntiteConcerneeAr();
                break;
            case 61:
                return $this->getIdEntiteConcerneeCitoyen();
                break;
            case 62:
                return $this->getNomEntiteConcerneeCitoyenFr();
                break;
            case 63:
                return $this->getNomEntiteConcerneeCitoyenAr();
                break;
            case 64:
                return $this->getTypeRequerant();
                break;
            case 65:
                return $this->getCanalDepot();
                break;
            case 66:
                return $this->getIdExterne();
                break;
            case 67:
                return $this->getDateEnvoiReponse();
                break;
            case 68:
                return $this->getEtatEnvoiReponse();
                break;
            case 69:
                return $this->getEtatEnvoi();
                break;
            case 70:
                return $this->getDateEnvoi();
                break;
            case 71:
                return $this->getNumeroExterne();
                break;
            case 72:
                return $this->getObjetDemande();
                break;
            case 73:
                return $this->getTagInterface();
                break;
            case 74:
                return $this->getChampSupp1();
                break;
            case 75:
                return $this->getChampSupp2();
                break;
            case 76:
                return $this->getChampSupp3();
                break;
            case 77:
                return $this->getChampSupp4();
                break;
            case 78:
                return $this->getChampSupp5();
                break;
            case 79:
                return $this->getTypeDemande();
                break;
            case 80:
                return $this->getIdAgentDestinataire();
                break;
            case 81:
                return $this->getNomAgentDestinataireFr();
                break;
            case 82:
                return $this->getPrenomAgentDestinataireFr();
                break;
            case 83:
                return $this->getNomAgentDestinataireAr();
                break;
            case 84:
                return $this->getPrenomAgentDestinataireAr();
                break;
            case 85:
                return $this->getIdAgentSignataire();
                break;
            case 86:
                return $this->getNomAgentSignataireFr();
                break;
            case 87:
                return $this->getNomAgentSignataireAr();
                break;
            case 88:
                return $this->getPrenomAgentSignataireAr();
                break;
            case 89:
                return $this->getPrenomAgentSignataireFr();
                break;
            case 90:
                return $this->getIdAgentEmetteur();
                break;
            case 91:
                return $this->getNomAgentEmetteurFr();
                break;
            case 92:
                return $this->getNomAgentEmetteurAr();
                break;
            case 93:
                return $this->getPrenomAgentEmetteurAr();
                break;
            case 94:
                return $this->getPrenomAgentEmetteurFr();
                break;
            case 95:
                return $this->getReponseObligatoire();
                break;
            case 96:
                return $this->getCodeDemande();
                break;
            case 97:
                return $this->getCodeProvisoire();
                break;
            case 98:
                return $this->getTagGateway();
                break;
            case 99:
                return $this->getIdUtilisateurGateway();
                break;
            case 100:
                return $this->getChampSuppTheme1();
                break;
            case 101:
                return $this->getChampSuppTheme2();
                break;
            case 102:
                return $this->getChampSuppTheme3();
                break;
            case 103:
                return $this->getChampSuppTheme4();
                break;
            case 104:
                return $this->getChampSuppTheme5();
                break;
            case 105:
                return $this->getIdTypeTheme();
                break;
            case 106:
                return $this->getIdEtapeEnCours();
                break;
            case 107:
                return $this->getNumeroEtapeEncours();
                break;
            case 108:
                return $this->getNombreEtapes();
                break;
            case 109:
                return $this->getDernierMessage();
                break;
            case 110:
                return $this->getLibelleEtapeEncours();
                break;
            case 111:
                return $this->getDernierActeur();
                break;
            case 112:
                return $this->getDateReponseEtape();
                break;
            case 113:
                return $this->getIdEntiteRelance();
                break;
            case 114:
                return $this->getIdAgentRelance();
                break;
            case 115:
                return $this->getImportant();
                break;
            case 116:
                return $this->getDateEcheanceReponseProche();
                break;
            case 117:
                return $this->getUrlExterne();
                break;
            case 118:
                return $this->getClotureAutomatique();
                break;
            case 119:
                return $this->getDelaiTraitementOuvrable();
                break;
            case 120:
                return $this->getActeurExterne();
                break;
            case 121:
                return $this->getDelaiTraitement();
                break;
            case 122:
                return $this->getObjetModifie();
                break;
            case 123:
                return $this->getConfidentiel();
                break;
            case 124:
                return $this->getDelaiComplement();
                break;
            case 125:
                return $this->getErreursDetectes();
                break;
            case 126:
                return $this->getIdDemandeOrigine();
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
        if (isset($alreadyDumpedObjects['Demande'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['Demande'][$this->getPrimaryKey()] = true;
        $keys = DemandePeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getIdAgent(),
            $keys[2] => $this->getIdCommune(),
            $keys[3] => $this->getIdService(),
            $keys[4] => $this->getIdEntite(),
            $keys[5] => $this->getIdOrganisme(),
            $keys[6] => $this->getNumeroDemande(),
            $keys[7] => $this->getDetailDemande(),
            $keys[8] => $this->getStatutDemande(),
            $keys[9] => $this->getLatitudeDemande(),
            $keys[10] => $this->getLongitudeDemande(),
            $keys[11] => $this->getAdresseDemande(),
            $keys[12] => $this->getIdPieceJointeDemande(),
            $keys[13] => $this->getNomPieceJointeDemande(),
            $keys[14] => $this->getRevision(),
            $keys[15] => $this->getContenuPieceJointe(),
            $keys[16] => $this->getNomCitoyen(),
            $keys[17] => $this->getPrenomCitoyen(),
            $keys[18] => $this->getEmailCitoyen(),
            $keys[19] => $this->getTelCitoyen(),
            $keys[20] => $this->getTelephonePortable(),
            $keys[21] => $this->getAdresseCitoyen1(),
            $keys[22] => $this->getAdresseCitoyen2(),
            $keys[23] => $this->getCodePostalCitoyen(),
            $keys[24] => $this->getLocaliteCitoyen(),
            $keys[25] => $this->getIdentifiantAppMobileCitoyen(),
            $keys[26] => $this->getTypeDevice(),
            $keys[27] => $this->getDateDepotDemande(),
            $keys[28] => $this->getDateTraitementDemande(),
            $keys[29] => $this->getDateClotureDemande(),
            $keys[30] => $this->getDateReouvertureDemande(),
            $keys[31] => $this->getDureeAvantTraitement(),
            $keys[32] => $this->getDureeTraitement(),
            $keys[33] => $this->getMotifReouvertir(),
            $keys[34] => $this->getCloturerPar(),
            $keys[35] => $this->getPays(),
            $keys[36] => $this->getNomAgentFr(),
            $keys[37] => $this->getNomAgentAr(),
            $keys[38] => $this->getIdThemeCitoyen(),
            $keys[39] => $this->getIdThemeEnCours(),
            $keys[40] => $this->getDateReponse(),
            $keys[41] => $this->getDateStatut(),
            $keys[42] => $this->getIdRegionAffectation(),
            $keys[43] => $this->getIdProvinceAffectation(),
            $keys[44] => $this->getIdCommuneAffectation(),
            $keys[45] => $this->getOrganisation(),
            $keys[46] => $this->getIdOrigine(),
            $keys[47] => $this->getIdAgentCreateur(),
            $keys[48] => $this->getIdEntiteCreatrice(),
            $keys[49] => $this->getSupprime(),
            $keys[50] => $this->getSource(),
            $keys[51] => $this->getDetailSource(),
            $keys[52] => $this->getFormat(),
            $keys[53] => $this->getReferenceInterne(),
            $keys[54] => $this->getIdRegion(),
            $keys[55] => $this->getIdProvince(),
            $keys[56] => $this->getIdPays(),
            $keys[57] => $this->getDateCreationDemande(),
            $keys[58] => $this->getIdEntiteConcernee(),
            $keys[59] => $this->getNomEntiteConcerneeFr(),
            $keys[60] => $this->getNomEntiteConcerneeAr(),
            $keys[61] => $this->getIdEntiteConcerneeCitoyen(),
            $keys[62] => $this->getNomEntiteConcerneeCitoyenFr(),
            $keys[63] => $this->getNomEntiteConcerneeCitoyenAr(),
            $keys[64] => $this->getTypeRequerant(),
            $keys[65] => $this->getCanalDepot(),
            $keys[66] => $this->getIdExterne(),
            $keys[67] => $this->getDateEnvoiReponse(),
            $keys[68] => $this->getEtatEnvoiReponse(),
            $keys[69] => $this->getEtatEnvoi(),
            $keys[70] => $this->getDateEnvoi(),
            $keys[71] => $this->getNumeroExterne(),
            $keys[72] => $this->getObjetDemande(),
            $keys[73] => $this->getTagInterface(),
            $keys[74] => $this->getChampSupp1(),
            $keys[75] => $this->getChampSupp2(),
            $keys[76] => $this->getChampSupp3(),
            $keys[77] => $this->getChampSupp4(),
            $keys[78] => $this->getChampSupp5(),
            $keys[79] => $this->getTypeDemande(),
            $keys[80] => $this->getIdAgentDestinataire(),
            $keys[81] => $this->getNomAgentDestinataireFr(),
            $keys[82] => $this->getPrenomAgentDestinataireFr(),
            $keys[83] => $this->getNomAgentDestinataireAr(),
            $keys[84] => $this->getPrenomAgentDestinataireAr(),
            $keys[85] => $this->getIdAgentSignataire(),
            $keys[86] => $this->getNomAgentSignataireFr(),
            $keys[87] => $this->getNomAgentSignataireAr(),
            $keys[88] => $this->getPrenomAgentSignataireAr(),
            $keys[89] => $this->getPrenomAgentSignataireFr(),
            $keys[90] => $this->getIdAgentEmetteur(),
            $keys[91] => $this->getNomAgentEmetteurFr(),
            $keys[92] => $this->getNomAgentEmetteurAr(),
            $keys[93] => $this->getPrenomAgentEmetteurAr(),
            $keys[94] => $this->getPrenomAgentEmetteurFr(),
            $keys[95] => $this->getReponseObligatoire(),
            $keys[96] => $this->getCodeDemande(),
            $keys[97] => $this->getCodeProvisoire(),
            $keys[98] => $this->getTagGateway(),
            $keys[99] => $this->getIdUtilisateurGateway(),
            $keys[100] => $this->getChampSuppTheme1(),
            $keys[101] => $this->getChampSuppTheme2(),
            $keys[102] => $this->getChampSuppTheme3(),
            $keys[103] => $this->getChampSuppTheme4(),
            $keys[104] => $this->getChampSuppTheme5(),
            $keys[105] => $this->getIdTypeTheme(),
            $keys[106] => $this->getIdEtapeEnCours(),
            $keys[107] => $this->getNumeroEtapeEncours(),
            $keys[108] => $this->getNombreEtapes(),
            $keys[109] => $this->getDernierMessage(),
            $keys[110] => $this->getLibelleEtapeEncours(),
            $keys[111] => $this->getDernierActeur(),
            $keys[112] => $this->getDateReponseEtape(),
            $keys[113] => $this->getIdEntiteRelance(),
            $keys[114] => $this->getIdAgentRelance(),
            $keys[115] => $this->getImportant(),
            $keys[116] => $this->getDateEcheanceReponseProche(),
            $keys[117] => $this->getUrlExterne(),
            $keys[118] => $this->getClotureAutomatique(),
            $keys[119] => $this->getDelaiTraitementOuvrable(),
            $keys[120] => $this->getActeurExterne(),
            $keys[121] => $this->getDelaiTraitement(),
            $keys[122] => $this->getObjetModifie(),
            $keys[123] => $this->getConfidentiel(),
            $keys[124] => $this->getDelaiComplement(),
            $keys[125] => $this->getErreursDetectes(),
            $keys[126] => $this->getIdDemandeOrigine(),
        );
        if ($includeForeignObjects) {
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
        $pos = DemandePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdAgent($value);
                break;
            case 2:
                $this->setIdCommune($value);
                break;
            case 3:
                $this->setIdService($value);
                break;
            case 4:
                $this->setIdEntite($value);
                break;
            case 5:
                $this->setIdOrganisme($value);
                break;
            case 6:
                $this->setNumeroDemande($value);
                break;
            case 7:
                $this->setDetailDemande($value);
                break;
            case 8:
                $this->setStatutDemande($value);
                break;
            case 9:
                $this->setLatitudeDemande($value);
                break;
            case 10:
                $this->setLongitudeDemande($value);
                break;
            case 11:
                $this->setAdresseDemande($value);
                break;
            case 12:
                $this->setIdPieceJointeDemande($value);
                break;
            case 13:
                $this->setNomPieceJointeDemande($value);
                break;
            case 14:
                $this->setRevision($value);
                break;
            case 15:
                $this->setContenuPieceJointe($value);
                break;
            case 16:
                $this->setNomCitoyen($value);
                break;
            case 17:
                $this->setPrenomCitoyen($value);
                break;
            case 18:
                $this->setEmailCitoyen($value);
                break;
            case 19:
                $this->setTelCitoyen($value);
                break;
            case 20:
                $this->setTelephonePortable($value);
                break;
            case 21:
                $this->setAdresseCitoyen1($value);
                break;
            case 22:
                $this->setAdresseCitoyen2($value);
                break;
            case 23:
                $this->setCodePostalCitoyen($value);
                break;
            case 24:
                $this->setLocaliteCitoyen($value);
                break;
            case 25:
                $this->setIdentifiantAppMobileCitoyen($value);
                break;
            case 26:
                $this->setTypeDevice($value);
                break;
            case 27:
                $this->setDateDepotDemande($value);
                break;
            case 28:
                $this->setDateTraitementDemande($value);
                break;
            case 29:
                $this->setDateClotureDemande($value);
                break;
            case 30:
                $this->setDateReouvertureDemande($value);
                break;
            case 31:
                $this->setDureeAvantTraitement($value);
                break;
            case 32:
                $this->setDureeTraitement($value);
                break;
            case 33:
                $this->setMotifReouvertir($value);
                break;
            case 34:
                $this->setCloturerPar($value);
                break;
            case 35:
                $this->setPays($value);
                break;
            case 36:
                $this->setNomAgentFr($value);
                break;
            case 37:
                $this->setNomAgentAr($value);
                break;
            case 38:
                $this->setIdThemeCitoyen($value);
                break;
            case 39:
                $this->setIdThemeEnCours($value);
                break;
            case 40:
                $this->setDateReponse($value);
                break;
            case 41:
                $this->setDateStatut($value);
                break;
            case 42:
                $this->setIdRegionAffectation($value);
                break;
            case 43:
                $this->setIdProvinceAffectation($value);
                break;
            case 44:
                $this->setIdCommuneAffectation($value);
                break;
            case 45:
                $this->setOrganisation($value);
                break;
            case 46:
                $this->setIdOrigine($value);
                break;
            case 47:
                $this->setIdAgentCreateur($value);
                break;
            case 48:
                $this->setIdEntiteCreatrice($value);
                break;
            case 49:
                $this->setSupprime($value);
                break;
            case 50:
                $this->setSource($value);
                break;
            case 51:
                $this->setDetailSource($value);
                break;
            case 52:
                $this->setFormat($value);
                break;
            case 53:
                $this->setReferenceInterne($value);
                break;
            case 54:
                $this->setIdRegion($value);
                break;
            case 55:
                $this->setIdProvince($value);
                break;
            case 56:
                $this->setIdPays($value);
                break;
            case 57:
                $this->setDateCreationDemande($value);
                break;
            case 58:
                $this->setIdEntiteConcernee($value);
                break;
            case 59:
                $this->setNomEntiteConcerneeFr($value);
                break;
            case 60:
                $this->setNomEntiteConcerneeAr($value);
                break;
            case 61:
                $this->setIdEntiteConcerneeCitoyen($value);
                break;
            case 62:
                $this->setNomEntiteConcerneeCitoyenFr($value);
                break;
            case 63:
                $this->setNomEntiteConcerneeCitoyenAr($value);
                break;
            case 64:
                $this->setTypeRequerant($value);
                break;
            case 65:
                $this->setCanalDepot($value);
                break;
            case 66:
                $this->setIdExterne($value);
                break;
            case 67:
                $this->setDateEnvoiReponse($value);
                break;
            case 68:
                $this->setEtatEnvoiReponse($value);
                break;
            case 69:
                $this->setEtatEnvoi($value);
                break;
            case 70:
                $this->setDateEnvoi($value);
                break;
            case 71:
                $this->setNumeroExterne($value);
                break;
            case 72:
                $this->setObjetDemande($value);
                break;
            case 73:
                $this->setTagInterface($value);
                break;
            case 74:
                $this->setChampSupp1($value);
                break;
            case 75:
                $this->setChampSupp2($value);
                break;
            case 76:
                $this->setChampSupp3($value);
                break;
            case 77:
                $this->setChampSupp4($value);
                break;
            case 78:
                $this->setChampSupp5($value);
                break;
            case 79:
                $this->setTypeDemande($value);
                break;
            case 80:
                $this->setIdAgentDestinataire($value);
                break;
            case 81:
                $this->setNomAgentDestinataireFr($value);
                break;
            case 82:
                $this->setPrenomAgentDestinataireFr($value);
                break;
            case 83:
                $this->setNomAgentDestinataireAr($value);
                break;
            case 84:
                $this->setPrenomAgentDestinataireAr($value);
                break;
            case 85:
                $this->setIdAgentSignataire($value);
                break;
            case 86:
                $this->setNomAgentSignataireFr($value);
                break;
            case 87:
                $this->setNomAgentSignataireAr($value);
                break;
            case 88:
                $this->setPrenomAgentSignataireAr($value);
                break;
            case 89:
                $this->setPrenomAgentSignataireFr($value);
                break;
            case 90:
                $this->setIdAgentEmetteur($value);
                break;
            case 91:
                $this->setNomAgentEmetteurFr($value);
                break;
            case 92:
                $this->setNomAgentEmetteurAr($value);
                break;
            case 93:
                $this->setPrenomAgentEmetteurAr($value);
                break;
            case 94:
                $this->setPrenomAgentEmetteurFr($value);
                break;
            case 95:
                $this->setReponseObligatoire($value);
                break;
            case 96:
                $this->setCodeDemande($value);
                break;
            case 97:
                $this->setCodeProvisoire($value);
                break;
            case 98:
                $this->setTagGateway($value);
                break;
            case 99:
                $this->setIdUtilisateurGateway($value);
                break;
            case 100:
                $this->setChampSuppTheme1($value);
                break;
            case 101:
                $this->setChampSuppTheme2($value);
                break;
            case 102:
                $this->setChampSuppTheme3($value);
                break;
            case 103:
                $this->setChampSuppTheme4($value);
                break;
            case 104:
                $this->setChampSuppTheme5($value);
                break;
            case 105:
                $this->setIdTypeTheme($value);
                break;
            case 106:
                $this->setIdEtapeEnCours($value);
                break;
            case 107:
                $this->setNumeroEtapeEncours($value);
                break;
            case 108:
                $this->setNombreEtapes($value);
                break;
            case 109:
                $this->setDernierMessage($value);
                break;
            case 110:
                $this->setLibelleEtapeEncours($value);
                break;
            case 111:
                $this->setDernierActeur($value);
                break;
            case 112:
                $this->setDateReponseEtape($value);
                break;
            case 113:
                $this->setIdEntiteRelance($value);
                break;
            case 114:
                $this->setIdAgentRelance($value);
                break;
            case 115:
                $this->setImportant($value);
                break;
            case 116:
                $this->setDateEcheanceReponseProche($value);
                break;
            case 117:
                $this->setUrlExterne($value);
                break;
            case 118:
                $this->setClotureAutomatique($value);
                break;
            case 119:
                $this->setDelaiTraitementOuvrable($value);
                break;
            case 120:
                $this->setActeurExterne($value);
                break;
            case 121:
                $this->setDelaiTraitement($value);
                break;
            case 122:
                $this->setObjetModifie($value);
                break;
            case 123:
                $this->setConfidentiel($value);
                break;
            case 124:
                $this->setDelaiComplement($value);
                break;
            case 125:
                $this->setErreursDetectes($value);
                break;
            case 126:
                $this->setIdDemandeOrigine($value);
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
        $keys = DemandePeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdAgent($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdCommune($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdService($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setIdEntite($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIdOrganisme($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setNumeroDemande($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setDetailDemande($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setStatutDemande($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setLatitudeDemande($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setLongitudeDemande($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setAdresseDemande($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setIdPieceJointeDemande($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setNomPieceJointeDemande($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setRevision($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setContenuPieceJointe($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setNomCitoyen($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setPrenomCitoyen($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setEmailCitoyen($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setTelCitoyen($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setTelephonePortable($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setAdresseCitoyen1($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setAdresseCitoyen2($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setCodePostalCitoyen($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setLocaliteCitoyen($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setIdentifiantAppMobileCitoyen($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setTypeDevice($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setDateDepotDemande($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setDateTraitementDemande($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setDateClotureDemande($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setDateReouvertureDemande($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setDureeAvantTraitement($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setDureeTraitement($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setMotifReouvertir($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setCloturerPar($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setPays($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setNomAgentFr($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setNomAgentAr($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setIdThemeCitoyen($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setIdThemeEnCours($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setDateReponse($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setDateStatut($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setIdRegionAffectation($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setIdProvinceAffectation($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setIdCommuneAffectation($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setOrganisation($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setIdOrigine($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setIdAgentCreateur($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setIdEntiteCreatrice($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setSupprime($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setSource($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setDetailSource($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setFormat($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setReferenceInterne($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setIdRegion($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setIdProvince($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setIdPays($arr[$keys[56]]);
        if (array_key_exists($keys[57], $arr)) $this->setDateCreationDemande($arr[$keys[57]]);
        if (array_key_exists($keys[58], $arr)) $this->setIdEntiteConcernee($arr[$keys[58]]);
        if (array_key_exists($keys[59], $arr)) $this->setNomEntiteConcerneeFr($arr[$keys[59]]);
        if (array_key_exists($keys[60], $arr)) $this->setNomEntiteConcerneeAr($arr[$keys[60]]);
        if (array_key_exists($keys[61], $arr)) $this->setIdEntiteConcerneeCitoyen($arr[$keys[61]]);
        if (array_key_exists($keys[62], $arr)) $this->setNomEntiteConcerneeCitoyenFr($arr[$keys[62]]);
        if (array_key_exists($keys[63], $arr)) $this->setNomEntiteConcerneeCitoyenAr($arr[$keys[63]]);
        if (array_key_exists($keys[64], $arr)) $this->setTypeRequerant($arr[$keys[64]]);
        if (array_key_exists($keys[65], $arr)) $this->setCanalDepot($arr[$keys[65]]);
        if (array_key_exists($keys[66], $arr)) $this->setIdExterne($arr[$keys[66]]);
        if (array_key_exists($keys[67], $arr)) $this->setDateEnvoiReponse($arr[$keys[67]]);
        if (array_key_exists($keys[68], $arr)) $this->setEtatEnvoiReponse($arr[$keys[68]]);
        if (array_key_exists($keys[69], $arr)) $this->setEtatEnvoi($arr[$keys[69]]);
        if (array_key_exists($keys[70], $arr)) $this->setDateEnvoi($arr[$keys[70]]);
        if (array_key_exists($keys[71], $arr)) $this->setNumeroExterne($arr[$keys[71]]);
        if (array_key_exists($keys[72], $arr)) $this->setObjetDemande($arr[$keys[72]]);
        if (array_key_exists($keys[73], $arr)) $this->setTagInterface($arr[$keys[73]]);
        if (array_key_exists($keys[74], $arr)) $this->setChampSupp1($arr[$keys[74]]);
        if (array_key_exists($keys[75], $arr)) $this->setChampSupp2($arr[$keys[75]]);
        if (array_key_exists($keys[76], $arr)) $this->setChampSupp3($arr[$keys[76]]);
        if (array_key_exists($keys[77], $arr)) $this->setChampSupp4($arr[$keys[77]]);
        if (array_key_exists($keys[78], $arr)) $this->setChampSupp5($arr[$keys[78]]);
        if (array_key_exists($keys[79], $arr)) $this->setTypeDemande($arr[$keys[79]]);
        if (array_key_exists($keys[80], $arr)) $this->setIdAgentDestinataire($arr[$keys[80]]);
        if (array_key_exists($keys[81], $arr)) $this->setNomAgentDestinataireFr($arr[$keys[81]]);
        if (array_key_exists($keys[82], $arr)) $this->setPrenomAgentDestinataireFr($arr[$keys[82]]);
        if (array_key_exists($keys[83], $arr)) $this->setNomAgentDestinataireAr($arr[$keys[83]]);
        if (array_key_exists($keys[84], $arr)) $this->setPrenomAgentDestinataireAr($arr[$keys[84]]);
        if (array_key_exists($keys[85], $arr)) $this->setIdAgentSignataire($arr[$keys[85]]);
        if (array_key_exists($keys[86], $arr)) $this->setNomAgentSignataireFr($arr[$keys[86]]);
        if (array_key_exists($keys[87], $arr)) $this->setNomAgentSignataireAr($arr[$keys[87]]);
        if (array_key_exists($keys[88], $arr)) $this->setPrenomAgentSignataireAr($arr[$keys[88]]);
        if (array_key_exists($keys[89], $arr)) $this->setPrenomAgentSignataireFr($arr[$keys[89]]);
        if (array_key_exists($keys[90], $arr)) $this->setIdAgentEmetteur($arr[$keys[90]]);
        if (array_key_exists($keys[91], $arr)) $this->setNomAgentEmetteurFr($arr[$keys[91]]);
        if (array_key_exists($keys[92], $arr)) $this->setNomAgentEmetteurAr($arr[$keys[92]]);
        if (array_key_exists($keys[93], $arr)) $this->setPrenomAgentEmetteurAr($arr[$keys[93]]);
        if (array_key_exists($keys[94], $arr)) $this->setPrenomAgentEmetteurFr($arr[$keys[94]]);
        if (array_key_exists($keys[95], $arr)) $this->setReponseObligatoire($arr[$keys[95]]);
        if (array_key_exists($keys[96], $arr)) $this->setCodeDemande($arr[$keys[96]]);
        if (array_key_exists($keys[97], $arr)) $this->setCodeProvisoire($arr[$keys[97]]);
        if (array_key_exists($keys[98], $arr)) $this->setTagGateway($arr[$keys[98]]);
        if (array_key_exists($keys[99], $arr)) $this->setIdUtilisateurGateway($arr[$keys[99]]);
        if (array_key_exists($keys[100], $arr)) $this->setChampSuppTheme1($arr[$keys[100]]);
        if (array_key_exists($keys[101], $arr)) $this->setChampSuppTheme2($arr[$keys[101]]);
        if (array_key_exists($keys[102], $arr)) $this->setChampSuppTheme3($arr[$keys[102]]);
        if (array_key_exists($keys[103], $arr)) $this->setChampSuppTheme4($arr[$keys[103]]);
        if (array_key_exists($keys[104], $arr)) $this->setChampSuppTheme5($arr[$keys[104]]);
        if (array_key_exists($keys[105], $arr)) $this->setIdTypeTheme($arr[$keys[105]]);
        if (array_key_exists($keys[106], $arr)) $this->setIdEtapeEnCours($arr[$keys[106]]);
        if (array_key_exists($keys[107], $arr)) $this->setNumeroEtapeEncours($arr[$keys[107]]);
        if (array_key_exists($keys[108], $arr)) $this->setNombreEtapes($arr[$keys[108]]);
        if (array_key_exists($keys[109], $arr)) $this->setDernierMessage($arr[$keys[109]]);
        if (array_key_exists($keys[110], $arr)) $this->setLibelleEtapeEncours($arr[$keys[110]]);
        if (array_key_exists($keys[111], $arr)) $this->setDernierActeur($arr[$keys[111]]);
        if (array_key_exists($keys[112], $arr)) $this->setDateReponseEtape($arr[$keys[112]]);
        if (array_key_exists($keys[113], $arr)) $this->setIdEntiteRelance($arr[$keys[113]]);
        if (array_key_exists($keys[114], $arr)) $this->setIdAgentRelance($arr[$keys[114]]);
        if (array_key_exists($keys[115], $arr)) $this->setImportant($arr[$keys[115]]);
        if (array_key_exists($keys[116], $arr)) $this->setDateEcheanceReponseProche($arr[$keys[116]]);
        if (array_key_exists($keys[117], $arr)) $this->setUrlExterne($arr[$keys[117]]);
        if (array_key_exists($keys[118], $arr)) $this->setClotureAutomatique($arr[$keys[118]]);
        if (array_key_exists($keys[119], $arr)) $this->setDelaiTraitementOuvrable($arr[$keys[119]]);
        if (array_key_exists($keys[120], $arr)) $this->setActeurExterne($arr[$keys[120]]);
        if (array_key_exists($keys[121], $arr)) $this->setDelaiTraitement($arr[$keys[121]]);
        if (array_key_exists($keys[122], $arr)) $this->setObjetModifie($arr[$keys[122]]);
        if (array_key_exists($keys[123], $arr)) $this->setConfidentiel($arr[$keys[123]]);
        if (array_key_exists($keys[124], $arr)) $this->setDelaiComplement($arr[$keys[124]]);
        if (array_key_exists($keys[125], $arr)) $this->setErreursDetectes($arr[$keys[125]]);
        if (array_key_exists($keys[126], $arr)) $this->setIdDemandeOrigine($arr[$keys[126]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(DemandePeer::DATABASE_NAME);

        if ($this->isColumnModified(DemandePeer::ID)) $criteria->add(DemandePeer::ID, $this->id);
        if ($this->isColumnModified(DemandePeer::ID_AGENT)) $criteria->add(DemandePeer::ID_AGENT, $this->id_agent);
        if ($this->isColumnModified(DemandePeer::ID_COMMUNE)) $criteria->add(DemandePeer::ID_COMMUNE, $this->id_commune);
        if ($this->isColumnModified(DemandePeer::ID_SERVICE)) $criteria->add(DemandePeer::ID_SERVICE, $this->id_service);
        if ($this->isColumnModified(DemandePeer::ID_ENTITE)) $criteria->add(DemandePeer::ID_ENTITE, $this->id_entite);
        if ($this->isColumnModified(DemandePeer::ID_ORGANISME)) $criteria->add(DemandePeer::ID_ORGANISME, $this->id_organisme);
        if ($this->isColumnModified(DemandePeer::NUMERO_DEMANDE)) $criteria->add(DemandePeer::NUMERO_DEMANDE, $this->numero_demande);
        if ($this->isColumnModified(DemandePeer::DETAIL_DEMANDE)) $criteria->add(DemandePeer::DETAIL_DEMANDE, $this->detail_demande);
        if ($this->isColumnModified(DemandePeer::STATUT_DEMANDE)) $criteria->add(DemandePeer::STATUT_DEMANDE, $this->statut_demande);
        if ($this->isColumnModified(DemandePeer::LATITUDE_DEMANDE)) $criteria->add(DemandePeer::LATITUDE_DEMANDE, $this->latitude_demande);
        if ($this->isColumnModified(DemandePeer::LONGITUDE_DEMANDE)) $criteria->add(DemandePeer::LONGITUDE_DEMANDE, $this->longitude_demande);
        if ($this->isColumnModified(DemandePeer::ADRESSE_DEMANDE)) $criteria->add(DemandePeer::ADRESSE_DEMANDE, $this->adresse_demande);
        if ($this->isColumnModified(DemandePeer::ID_PIECE_JOINTE_DEMANDE)) $criteria->add(DemandePeer::ID_PIECE_JOINTE_DEMANDE, $this->id_piece_jointe_demande);
        if ($this->isColumnModified(DemandePeer::NOM_PIECE_JOINTE_DEMANDE)) $criteria->add(DemandePeer::NOM_PIECE_JOINTE_DEMANDE, $this->nom_piece_jointe_demande);
        if ($this->isColumnModified(DemandePeer::REVISION)) $criteria->add(DemandePeer::REVISION, $this->revision);
        if ($this->isColumnModified(DemandePeer::CONTENU_PIECE_JOINTE)) $criteria->add(DemandePeer::CONTENU_PIECE_JOINTE, $this->contenu_piece_jointe);
        if ($this->isColumnModified(DemandePeer::NOM_CITOYEN)) $criteria->add(DemandePeer::NOM_CITOYEN, $this->nom_citoyen);
        if ($this->isColumnModified(DemandePeer::PRENOM_CITOYEN)) $criteria->add(DemandePeer::PRENOM_CITOYEN, $this->prenom_citoyen);
        if ($this->isColumnModified(DemandePeer::EMAIL_CITOYEN)) $criteria->add(DemandePeer::EMAIL_CITOYEN, $this->email_citoyen);
        if ($this->isColumnModified(DemandePeer::TEL_CITOYEN)) $criteria->add(DemandePeer::TEL_CITOYEN, $this->tel_citoyen);
        if ($this->isColumnModified(DemandePeer::TELEPHONE_PORTABLE)) $criteria->add(DemandePeer::TELEPHONE_PORTABLE, $this->telephone_portable);
        if ($this->isColumnModified(DemandePeer::ADRESSE_CITOYEN_1)) $criteria->add(DemandePeer::ADRESSE_CITOYEN_1, $this->adresse_citoyen_1);
        if ($this->isColumnModified(DemandePeer::ADRESSE_CITOYEN_2)) $criteria->add(DemandePeer::ADRESSE_CITOYEN_2, $this->adresse_citoyen_2);
        if ($this->isColumnModified(DemandePeer::CODE_POSTAL_CITOYEN)) $criteria->add(DemandePeer::CODE_POSTAL_CITOYEN, $this->code_postal_citoyen);
        if ($this->isColumnModified(DemandePeer::LOCALITE_CITOYEN)) $criteria->add(DemandePeer::LOCALITE_CITOYEN, $this->localite_citoyen);
        if ($this->isColumnModified(DemandePeer::IDENTIFIANT_APP_MOBILE_CITOYEN)) $criteria->add(DemandePeer::IDENTIFIANT_APP_MOBILE_CITOYEN, $this->identifiant_app_mobile_citoyen);
        if ($this->isColumnModified(DemandePeer::TYPE_DEVICE)) $criteria->add(DemandePeer::TYPE_DEVICE, $this->type_device);
        if ($this->isColumnModified(DemandePeer::DATE_DEPOT_DEMANDE)) $criteria->add(DemandePeer::DATE_DEPOT_DEMANDE, $this->date_depot_demande);
        if ($this->isColumnModified(DemandePeer::DATE_TRAITEMENT_DEMANDE)) $criteria->add(DemandePeer::DATE_TRAITEMENT_DEMANDE, $this->date_traitement_demande);
        if ($this->isColumnModified(DemandePeer::DATE_CLOTURE_DEMANDE)) $criteria->add(DemandePeer::DATE_CLOTURE_DEMANDE, $this->date_cloture_demande);
        if ($this->isColumnModified(DemandePeer::DATE_REOUVERTURE_DEMANDE)) $criteria->add(DemandePeer::DATE_REOUVERTURE_DEMANDE, $this->date_reouverture_demande);
        if ($this->isColumnModified(DemandePeer::DUREE_AVANT_TRAITEMENT)) $criteria->add(DemandePeer::DUREE_AVANT_TRAITEMENT, $this->duree_avant_traitement);
        if ($this->isColumnModified(DemandePeer::DUREE_TRAITEMENT)) $criteria->add(DemandePeer::DUREE_TRAITEMENT, $this->duree_traitement);
        if ($this->isColumnModified(DemandePeer::MOTIF_REOUVERTIR)) $criteria->add(DemandePeer::MOTIF_REOUVERTIR, $this->motif_reouvertir);
        if ($this->isColumnModified(DemandePeer::CLOTURER_PAR)) $criteria->add(DemandePeer::CLOTURER_PAR, $this->cloturer_par);
        if ($this->isColumnModified(DemandePeer::PAYS)) $criteria->add(DemandePeer::PAYS, $this->pays);
        if ($this->isColumnModified(DemandePeer::NOM_AGENT_FR)) $criteria->add(DemandePeer::NOM_AGENT_FR, $this->nom_agent_fr);
        if ($this->isColumnModified(DemandePeer::NOM_AGENT_AR)) $criteria->add(DemandePeer::NOM_AGENT_AR, $this->nom_agent_ar);
        if ($this->isColumnModified(DemandePeer::ID_THEME_CITOYEN)) $criteria->add(DemandePeer::ID_THEME_CITOYEN, $this->id_theme_citoyen);
        if ($this->isColumnModified(DemandePeer::ID_THEME_EN_COURS)) $criteria->add(DemandePeer::ID_THEME_EN_COURS, $this->id_theme_en_cours);
        if ($this->isColumnModified(DemandePeer::DATE_REPONSE)) $criteria->add(DemandePeer::DATE_REPONSE, $this->date_reponse);
        if ($this->isColumnModified(DemandePeer::DATE_STATUT)) $criteria->add(DemandePeer::DATE_STATUT, $this->date_statut);
        if ($this->isColumnModified(DemandePeer::ID_REGION_AFFECTATION)) $criteria->add(DemandePeer::ID_REGION_AFFECTATION, $this->id_region_affectation);
        if ($this->isColumnModified(DemandePeer::ID_PROVINCE_AFFECTATION)) $criteria->add(DemandePeer::ID_PROVINCE_AFFECTATION, $this->id_province_affectation);
        if ($this->isColumnModified(DemandePeer::ID_COMMUNE_AFFECTATION)) $criteria->add(DemandePeer::ID_COMMUNE_AFFECTATION, $this->id_commune_affectation);
        if ($this->isColumnModified(DemandePeer::ORGANISATION)) $criteria->add(DemandePeer::ORGANISATION, $this->organisation);
        if ($this->isColumnModified(DemandePeer::ID_ORIGINE)) $criteria->add(DemandePeer::ID_ORIGINE, $this->id_origine);
        if ($this->isColumnModified(DemandePeer::ID_AGENT_CREATEUR)) $criteria->add(DemandePeer::ID_AGENT_CREATEUR, $this->id_agent_createur);
        if ($this->isColumnModified(DemandePeer::ID_ENTITE_CREATRICE)) $criteria->add(DemandePeer::ID_ENTITE_CREATRICE, $this->id_entite_creatrice);
        if ($this->isColumnModified(DemandePeer::SUPPRIME)) $criteria->add(DemandePeer::SUPPRIME, $this->supprime);
        if ($this->isColumnModified(DemandePeer::SOURCE)) $criteria->add(DemandePeer::SOURCE, $this->source);
        if ($this->isColumnModified(DemandePeer::DETAIL_SOURCE)) $criteria->add(DemandePeer::DETAIL_SOURCE, $this->detail_source);
        if ($this->isColumnModified(DemandePeer::FORMAT)) $criteria->add(DemandePeer::FORMAT, $this->format);
        if ($this->isColumnModified(DemandePeer::REFERENCE_INTERNE)) $criteria->add(DemandePeer::REFERENCE_INTERNE, $this->reference_interne);
        if ($this->isColumnModified(DemandePeer::ID_REGION)) $criteria->add(DemandePeer::ID_REGION, $this->id_region);
        if ($this->isColumnModified(DemandePeer::ID_PROVINCE)) $criteria->add(DemandePeer::ID_PROVINCE, $this->id_province);
        if ($this->isColumnModified(DemandePeer::ID_PAYS)) $criteria->add(DemandePeer::ID_PAYS, $this->id_pays);
        if ($this->isColumnModified(DemandePeer::DATE_CREATION_DEMANDE)) $criteria->add(DemandePeer::DATE_CREATION_DEMANDE, $this->date_creation_demande);
        if ($this->isColumnModified(DemandePeer::ID_ENTITE_CONCERNEE)) $criteria->add(DemandePeer::ID_ENTITE_CONCERNEE, $this->id_entite_concernee);
        if ($this->isColumnModified(DemandePeer::NOM_ENTITE_CONCERNEE_FR)) $criteria->add(DemandePeer::NOM_ENTITE_CONCERNEE_FR, $this->nom_entite_concernee_fr);
        if ($this->isColumnModified(DemandePeer::NOM_ENTITE_CONCERNEE_AR)) $criteria->add(DemandePeer::NOM_ENTITE_CONCERNEE_AR, $this->nom_entite_concernee_ar);
        if ($this->isColumnModified(DemandePeer::ID_ENTITE_CONCERNEE_CITOYEN)) $criteria->add(DemandePeer::ID_ENTITE_CONCERNEE_CITOYEN, $this->id_entite_concernee_citoyen);
        if ($this->isColumnModified(DemandePeer::NOM_ENTITE_CONCERNEE_CITOYEN_FR)) $criteria->add(DemandePeer::NOM_ENTITE_CONCERNEE_CITOYEN_FR, $this->nom_entite_concernee_citoyen_fr);
        if ($this->isColumnModified(DemandePeer::NOM_ENTITE_CONCERNEE_CITOYEN_AR)) $criteria->add(DemandePeer::NOM_ENTITE_CONCERNEE_CITOYEN_AR, $this->nom_entite_concernee_citoyen_ar);
        if ($this->isColumnModified(DemandePeer::TYPE_REQUERANT)) $criteria->add(DemandePeer::TYPE_REQUERANT, $this->type_requerant);
        if ($this->isColumnModified(DemandePeer::CANAL_DEPOT)) $criteria->add(DemandePeer::CANAL_DEPOT, $this->canal_depot);
        if ($this->isColumnModified(DemandePeer::ID_EXTERNE)) $criteria->add(DemandePeer::ID_EXTERNE, $this->id_externe);
        if ($this->isColumnModified(DemandePeer::DATE_ENVOI_REPONSE)) $criteria->add(DemandePeer::DATE_ENVOI_REPONSE, $this->date_envoi_reponse);
        if ($this->isColumnModified(DemandePeer::ETAT_ENVOI_REPONSE)) $criteria->add(DemandePeer::ETAT_ENVOI_REPONSE, $this->etat_envoi_reponse);
        if ($this->isColumnModified(DemandePeer::ETAT_ENVOI)) $criteria->add(DemandePeer::ETAT_ENVOI, $this->etat_envoi);
        if ($this->isColumnModified(DemandePeer::DATE_ENVOI)) $criteria->add(DemandePeer::DATE_ENVOI, $this->date_envoi);
        if ($this->isColumnModified(DemandePeer::NUMERO_EXTERNE)) $criteria->add(DemandePeer::NUMERO_EXTERNE, $this->numero_externe);
        if ($this->isColumnModified(DemandePeer::OBJET_DEMANDE)) $criteria->add(DemandePeer::OBJET_DEMANDE, $this->objet_demande);
        if ($this->isColumnModified(DemandePeer::TAG_INTERFACE)) $criteria->add(DemandePeer::TAG_INTERFACE, $this->tag_interface);
        if ($this->isColumnModified(DemandePeer::CHAMP_SUPP_1)) $criteria->add(DemandePeer::CHAMP_SUPP_1, $this->champ_supp_1);
        if ($this->isColumnModified(DemandePeer::CHAMP_SUPP_2)) $criteria->add(DemandePeer::CHAMP_SUPP_2, $this->champ_supp_2);
        if ($this->isColumnModified(DemandePeer::CHAMP_SUPP_3)) $criteria->add(DemandePeer::CHAMP_SUPP_3, $this->champ_supp_3);
        if ($this->isColumnModified(DemandePeer::CHAMP_SUPP_4)) $criteria->add(DemandePeer::CHAMP_SUPP_4, $this->champ_supp_4);
        if ($this->isColumnModified(DemandePeer::CHAMP_SUPP_5)) $criteria->add(DemandePeer::CHAMP_SUPP_5, $this->champ_supp_5);
        if ($this->isColumnModified(DemandePeer::TYPE_DEMANDE)) $criteria->add(DemandePeer::TYPE_DEMANDE, $this->type_demande);
        if ($this->isColumnModified(DemandePeer::ID_AGENT_DESTINATAIRE)) $criteria->add(DemandePeer::ID_AGENT_DESTINATAIRE, $this->id_agent_destinataire);
        if ($this->isColumnModified(DemandePeer::NOM_AGENT_DESTINATAIRE_FR)) $criteria->add(DemandePeer::NOM_AGENT_DESTINATAIRE_FR, $this->nom_agent_destinataire_fr);
        if ($this->isColumnModified(DemandePeer::PRENOM_AGENT_DESTINATAIRE_FR)) $criteria->add(DemandePeer::PRENOM_AGENT_DESTINATAIRE_FR, $this->prenom_agent_destinataire_fr);
        if ($this->isColumnModified(DemandePeer::NOM_AGENT_DESTINATAIRE_AR)) $criteria->add(DemandePeer::NOM_AGENT_DESTINATAIRE_AR, $this->nom_agent_destinataire_ar);
        if ($this->isColumnModified(DemandePeer::PRENOM_AGENT_DESTINATAIRE_AR)) $criteria->add(DemandePeer::PRENOM_AGENT_DESTINATAIRE_AR, $this->prenom_agent_destinataire_ar);
        if ($this->isColumnModified(DemandePeer::ID_AGENT_SIGNATAIRE)) $criteria->add(DemandePeer::ID_AGENT_SIGNATAIRE, $this->id_agent_signataire);
        if ($this->isColumnModified(DemandePeer::NOM_AGENT_SIGNATAIRE_FR)) $criteria->add(DemandePeer::NOM_AGENT_SIGNATAIRE_FR, $this->nom_agent_signataire_fr);
        if ($this->isColumnModified(DemandePeer::NOM_AGENT_SIGNATAIRE_AR)) $criteria->add(DemandePeer::NOM_AGENT_SIGNATAIRE_AR, $this->nom_agent_signataire_ar);
        if ($this->isColumnModified(DemandePeer::PRENOM_AGENT_SIGNATAIRE_AR)) $criteria->add(DemandePeer::PRENOM_AGENT_SIGNATAIRE_AR, $this->prenom_agent_signataire_ar);
        if ($this->isColumnModified(DemandePeer::PRENOM_AGENT_SIGNATAIRE_FR)) $criteria->add(DemandePeer::PRENOM_AGENT_SIGNATAIRE_FR, $this->prenom_agent_signataire_fr);
        if ($this->isColumnModified(DemandePeer::ID_AGENT_EMETTEUR)) $criteria->add(DemandePeer::ID_AGENT_EMETTEUR, $this->id_agent_emetteur);
        if ($this->isColumnModified(DemandePeer::NOM_AGENT_EMETTEUR_FR)) $criteria->add(DemandePeer::NOM_AGENT_EMETTEUR_FR, $this->nom_agent_emetteur_fr);
        if ($this->isColumnModified(DemandePeer::NOM_AGENT_EMETTEUR_AR)) $criteria->add(DemandePeer::NOM_AGENT_EMETTEUR_AR, $this->nom_agent_emetteur_ar);
        if ($this->isColumnModified(DemandePeer::PRENOM_AGENT_EMETTEUR_AR)) $criteria->add(DemandePeer::PRENOM_AGENT_EMETTEUR_AR, $this->prenom_agent_emetteur_ar);
        if ($this->isColumnModified(DemandePeer::PRENOM_AGENT_EMETTEUR_FR)) $criteria->add(DemandePeer::PRENOM_AGENT_EMETTEUR_FR, $this->prenom_agent_emetteur_fr);
        if ($this->isColumnModified(DemandePeer::REPONSE_OBLIGATOIRE)) $criteria->add(DemandePeer::REPONSE_OBLIGATOIRE, $this->reponse_obligatoire);
        if ($this->isColumnModified(DemandePeer::CODE_DEMANDE)) $criteria->add(DemandePeer::CODE_DEMANDE, $this->code_demande);
        if ($this->isColumnModified(DemandePeer::CODE_PROVISOIRE)) $criteria->add(DemandePeer::CODE_PROVISOIRE, $this->code_provisoire);
        if ($this->isColumnModified(DemandePeer::TAG_GATEWAY)) $criteria->add(DemandePeer::TAG_GATEWAY, $this->tag_gateway);
        if ($this->isColumnModified(DemandePeer::ID_UTILISATEUR_GATEWAY)) $criteria->add(DemandePeer::ID_UTILISATEUR_GATEWAY, $this->id_utilisateur_gateway);
        if ($this->isColumnModified(DemandePeer::CHAMP_SUPP_THEME_1)) $criteria->add(DemandePeer::CHAMP_SUPP_THEME_1, $this->champ_supp_theme_1);
        if ($this->isColumnModified(DemandePeer::CHAMP_SUPP_THEME_2)) $criteria->add(DemandePeer::CHAMP_SUPP_THEME_2, $this->champ_supp_theme_2);
        if ($this->isColumnModified(DemandePeer::CHAMP_SUPP_THEME_3)) $criteria->add(DemandePeer::CHAMP_SUPP_THEME_3, $this->champ_supp_theme_3);
        if ($this->isColumnModified(DemandePeer::CHAMP_SUPP_THEME_4)) $criteria->add(DemandePeer::CHAMP_SUPP_THEME_4, $this->champ_supp_theme_4);
        if ($this->isColumnModified(DemandePeer::CHAMP_SUPP_THEME_5)) $criteria->add(DemandePeer::CHAMP_SUPP_THEME_5, $this->champ_supp_theme_5);
        if ($this->isColumnModified(DemandePeer::ID_TYPE_THEME)) $criteria->add(DemandePeer::ID_TYPE_THEME, $this->id_type_theme);
        if ($this->isColumnModified(DemandePeer::ID_ETAPE_EN_COURS)) $criteria->add(DemandePeer::ID_ETAPE_EN_COURS, $this->id_etape_en_cours);
        if ($this->isColumnModified(DemandePeer::NUMERO_ETAPE_ENCOURS)) $criteria->add(DemandePeer::NUMERO_ETAPE_ENCOURS, $this->numero_etape_encours);
        if ($this->isColumnModified(DemandePeer::NOMBRE_ETAPES)) $criteria->add(DemandePeer::NOMBRE_ETAPES, $this->nombre_etapes);
        if ($this->isColumnModified(DemandePeer::DERNIER_MESSAGE)) $criteria->add(DemandePeer::DERNIER_MESSAGE, $this->dernier_message);
        if ($this->isColumnModified(DemandePeer::LIBELLE_ETAPE_ENCOURS)) $criteria->add(DemandePeer::LIBELLE_ETAPE_ENCOURS, $this->libelle_etape_encours);
        if ($this->isColumnModified(DemandePeer::DERNIER_ACTEUR)) $criteria->add(DemandePeer::DERNIER_ACTEUR, $this->dernier_acteur);
        if ($this->isColumnModified(DemandePeer::DATE_REPONSE_ETAPE)) $criteria->add(DemandePeer::DATE_REPONSE_ETAPE, $this->date_reponse_etape);
        if ($this->isColumnModified(DemandePeer::ID_ENTITE_RELANCE)) $criteria->add(DemandePeer::ID_ENTITE_RELANCE, $this->id_entite_relance);
        if ($this->isColumnModified(DemandePeer::ID_AGENT_RELANCE)) $criteria->add(DemandePeer::ID_AGENT_RELANCE, $this->id_agent_relance);
        if ($this->isColumnModified(DemandePeer::IMPORTANT)) $criteria->add(DemandePeer::IMPORTANT, $this->important);
        if ($this->isColumnModified(DemandePeer::DATE_ECHEANCE_REPONSE_PROCHE)) $criteria->add(DemandePeer::DATE_ECHEANCE_REPONSE_PROCHE, $this->date_echeance_reponse_proche);
        if ($this->isColumnModified(DemandePeer::URL_EXTERNE)) $criteria->add(DemandePeer::URL_EXTERNE, $this->url_externe);
        if ($this->isColumnModified(DemandePeer::CLOTURE_AUTOMATIQUE)) $criteria->add(DemandePeer::CLOTURE_AUTOMATIQUE, $this->cloture_automatique);
        if ($this->isColumnModified(DemandePeer::DELAI_TRAITEMENT_OUVRABLE)) $criteria->add(DemandePeer::DELAI_TRAITEMENT_OUVRABLE, $this->delai_traitement_ouvrable);
        if ($this->isColumnModified(DemandePeer::ACTEUR_EXTERNE)) $criteria->add(DemandePeer::ACTEUR_EXTERNE, $this->acteur_externe);
        if ($this->isColumnModified(DemandePeer::DELAI_TRAITEMENT)) $criteria->add(DemandePeer::DELAI_TRAITEMENT, $this->delai_traitement);
        if ($this->isColumnModified(DemandePeer::OBJET_MODIFIE)) $criteria->add(DemandePeer::OBJET_MODIFIE, $this->objet_modifie);
        if ($this->isColumnModified(DemandePeer::CONFIDENTIEL)) $criteria->add(DemandePeer::CONFIDENTIEL, $this->confidentiel);
        if ($this->isColumnModified(DemandePeer::DELAI_COMPLEMENT)) $criteria->add(DemandePeer::DELAI_COMPLEMENT, $this->delai_complement);
        if ($this->isColumnModified(DemandePeer::ERREURS_DETECTES)) $criteria->add(DemandePeer::ERREURS_DETECTES, $this->erreurs_detectes);
        if ($this->isColumnModified(DemandePeer::ID_DEMANDE_ORIGINE)) $criteria->add(DemandePeer::ID_DEMANDE_ORIGINE, $this->id_demande_origine);

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
        $criteria = new Criteria(DemandePeer::DATABASE_NAME);
        $criteria->add(DemandePeer::ID, $this->id);

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
     * @param object $copyObj An object of Demande (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdAgent($this->getIdAgent());
        $copyObj->setIdCommune($this->getIdCommune());
        $copyObj->setIdService($this->getIdService());
        $copyObj->setIdEntite($this->getIdEntite());
        $copyObj->setIdOrganisme($this->getIdOrganisme());
        $copyObj->setNumeroDemande($this->getNumeroDemande());
        $copyObj->setDetailDemande($this->getDetailDemande());
        $copyObj->setStatutDemande($this->getStatutDemande());
        $copyObj->setLatitudeDemande($this->getLatitudeDemande());
        $copyObj->setLongitudeDemande($this->getLongitudeDemande());
        $copyObj->setAdresseDemande($this->getAdresseDemande());
        $copyObj->setIdPieceJointeDemande($this->getIdPieceJointeDemande());
        $copyObj->setNomPieceJointeDemande($this->getNomPieceJointeDemande());
        $copyObj->setRevision($this->getRevision());
        $copyObj->setContenuPieceJointe($this->getContenuPieceJointe());
        $copyObj->setNomCitoyen($this->getNomCitoyen());
        $copyObj->setPrenomCitoyen($this->getPrenomCitoyen());
        $copyObj->setEmailCitoyen($this->getEmailCitoyen());
        $copyObj->setTelCitoyen($this->getTelCitoyen());
        $copyObj->setTelephonePortable($this->getTelephonePortable());
        $copyObj->setAdresseCitoyen1($this->getAdresseCitoyen1());
        $copyObj->setAdresseCitoyen2($this->getAdresseCitoyen2());
        $copyObj->setCodePostalCitoyen($this->getCodePostalCitoyen());
        $copyObj->setLocaliteCitoyen($this->getLocaliteCitoyen());
        $copyObj->setIdentifiantAppMobileCitoyen($this->getIdentifiantAppMobileCitoyen());
        $copyObj->setTypeDevice($this->getTypeDevice());
        $copyObj->setDateDepotDemande($this->getDateDepotDemande());
        $copyObj->setDateTraitementDemande($this->getDateTraitementDemande());
        $copyObj->setDateClotureDemande($this->getDateClotureDemande());
        $copyObj->setDateReouvertureDemande($this->getDateReouvertureDemande());
        $copyObj->setDureeAvantTraitement($this->getDureeAvantTraitement());
        $copyObj->setDureeTraitement($this->getDureeTraitement());
        $copyObj->setMotifReouvertir($this->getMotifReouvertir());
        $copyObj->setCloturerPar($this->getCloturerPar());
        $copyObj->setPays($this->getPays());
        $copyObj->setNomAgentFr($this->getNomAgentFr());
        $copyObj->setNomAgentAr($this->getNomAgentAr());
        $copyObj->setIdThemeCitoyen($this->getIdThemeCitoyen());
        $copyObj->setIdThemeEnCours($this->getIdThemeEnCours());
        $copyObj->setDateReponse($this->getDateReponse());
        $copyObj->setDateStatut($this->getDateStatut());
        $copyObj->setIdRegionAffectation($this->getIdRegionAffectation());
        $copyObj->setIdProvinceAffectation($this->getIdProvinceAffectation());
        $copyObj->setIdCommuneAffectation($this->getIdCommuneAffectation());
        $copyObj->setOrganisation($this->getOrganisation());
        $copyObj->setIdOrigine($this->getIdOrigine());
        $copyObj->setIdAgentCreateur($this->getIdAgentCreateur());
        $copyObj->setIdEntiteCreatrice($this->getIdEntiteCreatrice());
        $copyObj->setSupprime($this->getSupprime());
        $copyObj->setSource($this->getSource());
        $copyObj->setDetailSource($this->getDetailSource());
        $copyObj->setFormat($this->getFormat());
        $copyObj->setReferenceInterne($this->getReferenceInterne());
        $copyObj->setIdRegion($this->getIdRegion());
        $copyObj->setIdProvince($this->getIdProvince());
        $copyObj->setIdPays($this->getIdPays());
        $copyObj->setDateCreationDemande($this->getDateCreationDemande());
        $copyObj->setIdEntiteConcernee($this->getIdEntiteConcernee());
        $copyObj->setNomEntiteConcerneeFr($this->getNomEntiteConcerneeFr());
        $copyObj->setNomEntiteConcerneeAr($this->getNomEntiteConcerneeAr());
        $copyObj->setIdEntiteConcerneeCitoyen($this->getIdEntiteConcerneeCitoyen());
        $copyObj->setNomEntiteConcerneeCitoyenFr($this->getNomEntiteConcerneeCitoyenFr());
        $copyObj->setNomEntiteConcerneeCitoyenAr($this->getNomEntiteConcerneeCitoyenAr());
        $copyObj->setTypeRequerant($this->getTypeRequerant());
        $copyObj->setCanalDepot($this->getCanalDepot());
        $copyObj->setIdExterne($this->getIdExterne());
        $copyObj->setDateEnvoiReponse($this->getDateEnvoiReponse());
        $copyObj->setEtatEnvoiReponse($this->getEtatEnvoiReponse());
        $copyObj->setEtatEnvoi($this->getEtatEnvoi());
        $copyObj->setDateEnvoi($this->getDateEnvoi());
        $copyObj->setNumeroExterne($this->getNumeroExterne());
        $copyObj->setObjetDemande($this->getObjetDemande());
        $copyObj->setTagInterface($this->getTagInterface());
        $copyObj->setChampSupp1($this->getChampSupp1());
        $copyObj->setChampSupp2($this->getChampSupp2());
        $copyObj->setChampSupp3($this->getChampSupp3());
        $copyObj->setChampSupp4($this->getChampSupp4());
        $copyObj->setChampSupp5($this->getChampSupp5());
        $copyObj->setTypeDemande($this->getTypeDemande());
        $copyObj->setIdAgentDestinataire($this->getIdAgentDestinataire());
        $copyObj->setNomAgentDestinataireFr($this->getNomAgentDestinataireFr());
        $copyObj->setPrenomAgentDestinataireFr($this->getPrenomAgentDestinataireFr());
        $copyObj->setNomAgentDestinataireAr($this->getNomAgentDestinataireAr());
        $copyObj->setPrenomAgentDestinataireAr($this->getPrenomAgentDestinataireAr());
        $copyObj->setIdAgentSignataire($this->getIdAgentSignataire());
        $copyObj->setNomAgentSignataireFr($this->getNomAgentSignataireFr());
        $copyObj->setNomAgentSignataireAr($this->getNomAgentSignataireAr());
        $copyObj->setPrenomAgentSignataireAr($this->getPrenomAgentSignataireAr());
        $copyObj->setPrenomAgentSignataireFr($this->getPrenomAgentSignataireFr());
        $copyObj->setIdAgentEmetteur($this->getIdAgentEmetteur());
        $copyObj->setNomAgentEmetteurFr($this->getNomAgentEmetteurFr());
        $copyObj->setNomAgentEmetteurAr($this->getNomAgentEmetteurAr());
        $copyObj->setPrenomAgentEmetteurAr($this->getPrenomAgentEmetteurAr());
        $copyObj->setPrenomAgentEmetteurFr($this->getPrenomAgentEmetteurFr());
        $copyObj->setReponseObligatoire($this->getReponseObligatoire());
        $copyObj->setCodeDemande($this->getCodeDemande());
        $copyObj->setCodeProvisoire($this->getCodeProvisoire());
        $copyObj->setTagGateway($this->getTagGateway());
        $copyObj->setIdUtilisateurGateway($this->getIdUtilisateurGateway());
        $copyObj->setChampSuppTheme1($this->getChampSuppTheme1());
        $copyObj->setChampSuppTheme2($this->getChampSuppTheme2());
        $copyObj->setChampSuppTheme3($this->getChampSuppTheme3());
        $copyObj->setChampSuppTheme4($this->getChampSuppTheme4());
        $copyObj->setChampSuppTheme5($this->getChampSuppTheme5());
        $copyObj->setIdTypeTheme($this->getIdTypeTheme());
        $copyObj->setIdEtapeEnCours($this->getIdEtapeEnCours());
        $copyObj->setNumeroEtapeEncours($this->getNumeroEtapeEncours());
        $copyObj->setNombreEtapes($this->getNombreEtapes());
        $copyObj->setDernierMessage($this->getDernierMessage());
        $copyObj->setLibelleEtapeEncours($this->getLibelleEtapeEncours());
        $copyObj->setDernierActeur($this->getDernierActeur());
        $copyObj->setDateReponseEtape($this->getDateReponseEtape());
        $copyObj->setIdEntiteRelance($this->getIdEntiteRelance());
        $copyObj->setIdAgentRelance($this->getIdAgentRelance());
        $copyObj->setImportant($this->getImportant());
        $copyObj->setDateEcheanceReponseProche($this->getDateEcheanceReponseProche());
        $copyObj->setUrlExterne($this->getUrlExterne());
        $copyObj->setClotureAutomatique($this->getClotureAutomatique());
        $copyObj->setDelaiTraitementOuvrable($this->getDelaiTraitementOuvrable());
        $copyObj->setActeurExterne($this->getActeurExterne());
        $copyObj->setDelaiTraitement($this->getDelaiTraitement());
        $copyObj->setObjetModifie($this->getObjetModifie());
        $copyObj->setConfidentiel($this->getConfidentiel());
        $copyObj->setDelaiComplement($this->getDelaiComplement());
        $copyObj->setErreursDetectes($this->getErreursDetectes());
        $copyObj->setIdDemandeOrigine($this->getIdDemandeOrigine());

        if ($deepCopy && !$this->startCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);
            // store object hash to prevent cycle
            $this->startCopy = true;

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
     * @return Demande Clone of current object.
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
     * @return DemandePeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new DemandePeer();
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
        if ('THistoriqueConsultation' == $relationName) {
            $this->initTHistoriqueConsultations();
        }
    }

    /**
     * Clears out the collTHistoriqueConsultations collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return Demande The current object (for fluent API support)
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
     * If this Demande is new, it will return
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
                    ->filterByDemande($this)
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
     * @return Demande The current object (for fluent API support)
     */
    public function setTHistoriqueConsultations(PropelCollection $tHistoriqueConsultations, PropelPDO $con = null)
    {
        $tHistoriqueConsultationsToDelete = $this->getTHistoriqueConsultations(new Criteria(), $con)->diff($tHistoriqueConsultations);


        $this->tHistoriqueConsultationsScheduledForDeletion = $tHistoriqueConsultationsToDelete;

        foreach ($tHistoriqueConsultationsToDelete as $tHistoriqueConsultationRemoved) {
            $tHistoriqueConsultationRemoved->setDemande(null);
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
                ->filterByDemande($this)
                ->count($con);
        }

        return count($this->collTHistoriqueConsultations);
    }

    /**
     * Method called to associate a THistoriqueConsultation object to this object
     * through the THistoriqueConsultation foreign key attribute.
     *
     * @param   THistoriqueConsultation $l THistoriqueConsultation
     * @return Demande The current object (for fluent API support)
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
        $tHistoriqueConsultation->setDemande($this);
    }

    /**
     * @param	THistoriqueConsultation $tHistoriqueConsultation The tHistoriqueConsultation object to remove.
     * @return Demande The current object (for fluent API support)
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
            $tHistoriqueConsultation->setDemande(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this Demande is new, it will return
     * an empty collection; or if this Demande has previously
     * been saved, it will retrieve related THistoriqueConsultations from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in Demande.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param PropelPDO $con optional connection object
     * @param string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return PropelObjectCollection|THistoriqueConsultation[] List of THistoriqueConsultation objects
     */
    public function getTHistoriqueConsultationsJoinAgent($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $query = THistoriqueConsultationQuery::create(null, $criteria);
        $query->joinWith('Agent', $join_behavior);

        return $this->getTHistoriqueConsultations($query, $con);
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id = null;
        $this->id_agent = null;
        $this->id_commune = null;
        $this->id_service = null;
        $this->id_entite = null;
        $this->id_organisme = null;
        $this->numero_demande = null;
        $this->detail_demande = null;
        $this->statut_demande = null;
        $this->latitude_demande = null;
        $this->longitude_demande = null;
        $this->adresse_demande = null;
        $this->id_piece_jointe_demande = null;
        $this->nom_piece_jointe_demande = null;
        $this->revision = null;
        $this->contenu_piece_jointe = null;
        $this->nom_citoyen = null;
        $this->prenom_citoyen = null;
        $this->email_citoyen = null;
        $this->tel_citoyen = null;
        $this->telephone_portable = null;
        $this->adresse_citoyen_1 = null;
        $this->adresse_citoyen_2 = null;
        $this->code_postal_citoyen = null;
        $this->localite_citoyen = null;
        $this->identifiant_app_mobile_citoyen = null;
        $this->type_device = null;
        $this->date_depot_demande = null;
        $this->date_traitement_demande = null;
        $this->date_cloture_demande = null;
        $this->date_reouverture_demande = null;
        $this->duree_avant_traitement = null;
        $this->duree_traitement = null;
        $this->motif_reouvertir = null;
        $this->cloturer_par = null;
        $this->pays = null;
        $this->nom_agent_fr = null;
        $this->nom_agent_ar = null;
        $this->id_theme_citoyen = null;
        $this->id_theme_en_cours = null;
        $this->date_reponse = null;
        $this->date_statut = null;
        $this->id_region_affectation = null;
        $this->id_province_affectation = null;
        $this->id_commune_affectation = null;
        $this->organisation = null;
        $this->id_origine = null;
        $this->id_agent_createur = null;
        $this->id_entite_creatrice = null;
        $this->supprime = null;
        $this->source = null;
        $this->detail_source = null;
        $this->format = null;
        $this->reference_interne = null;
        $this->id_region = null;
        $this->id_province = null;
        $this->id_pays = null;
        $this->date_creation_demande = null;
        $this->id_entite_concernee = null;
        $this->nom_entite_concernee_fr = null;
        $this->nom_entite_concernee_ar = null;
        $this->id_entite_concernee_citoyen = null;
        $this->nom_entite_concernee_citoyen_fr = null;
        $this->nom_entite_concernee_citoyen_ar = null;
        $this->type_requerant = null;
        $this->canal_depot = null;
        $this->id_externe = null;
        $this->date_envoi_reponse = null;
        $this->etat_envoi_reponse = null;
        $this->etat_envoi = null;
        $this->date_envoi = null;
        $this->numero_externe = null;
        $this->objet_demande = null;
        $this->tag_interface = null;
        $this->champ_supp_1 = null;
        $this->champ_supp_2 = null;
        $this->champ_supp_3 = null;
        $this->champ_supp_4 = null;
        $this->champ_supp_5 = null;
        $this->type_demande = null;
        $this->id_agent_destinataire = null;
        $this->nom_agent_destinataire_fr = null;
        $this->prenom_agent_destinataire_fr = null;
        $this->nom_agent_destinataire_ar = null;
        $this->prenom_agent_destinataire_ar = null;
        $this->id_agent_signataire = null;
        $this->nom_agent_signataire_fr = null;
        $this->nom_agent_signataire_ar = null;
        $this->prenom_agent_signataire_ar = null;
        $this->prenom_agent_signataire_fr = null;
        $this->id_agent_emetteur = null;
        $this->nom_agent_emetteur_fr = null;
        $this->nom_agent_emetteur_ar = null;
        $this->prenom_agent_emetteur_ar = null;
        $this->prenom_agent_emetteur_fr = null;
        $this->reponse_obligatoire = null;
        $this->code_demande = null;
        $this->code_provisoire = null;
        $this->tag_gateway = null;
        $this->id_utilisateur_gateway = null;
        $this->champ_supp_theme_1 = null;
        $this->champ_supp_theme_2 = null;
        $this->champ_supp_theme_3 = null;
        $this->champ_supp_theme_4 = null;
        $this->champ_supp_theme_5 = null;
        $this->id_type_theme = null;
        $this->id_etape_en_cours = null;
        $this->numero_etape_encours = null;
        $this->nombre_etapes = null;
        $this->dernier_message = null;
        $this->libelle_etape_encours = null;
        $this->dernier_acteur = null;
        $this->date_reponse_etape = null;
        $this->id_entite_relance = null;
        $this->id_agent_relance = null;
        $this->important = null;
        $this->date_echeance_reponse_proche = null;
        $this->url_externe = null;
        $this->cloture_automatique = null;
        $this->delai_traitement_ouvrable = null;
        $this->acteur_externe = null;
        $this->delai_traitement = null;
        $this->objet_modifie = null;
        $this->confidentiel = null;
        $this->delai_complement = null;
        $this->erreurs_detectes = null;
        $this->id_demande_origine = null;
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
            if ($this->collTHistoriqueConsultations) {
                foreach ($this->collTHistoriqueConsultations as $o) {
                    $o->clearAllReferences($deep);
                }
            }

            $this->alreadyInClearAllReferencesDeep = false;
        } // if ($deep)

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
        return (string) $this->exportTo(DemandePeer::DEFAULT_STRING_FORMAT);
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
