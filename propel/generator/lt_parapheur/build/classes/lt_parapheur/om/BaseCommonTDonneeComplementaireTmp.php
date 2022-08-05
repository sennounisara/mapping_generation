<?php


/**
 * Base class that represents a row from the 't_donnee_complementaire_tmp' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTDonneeComplementaireTmp extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonTDonneeComplementaireTmpPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonTDonneeComplementaireTmpPeer
     */
    protected static $peer;

    /**
     * The flag var to prevent infinite loop in deep copy
     * @var       boolean
     */
    protected $startCopy = false;

    /**
     * The value for the id_donnee_complementaire field.
     * @var        int
     */
    protected $id_donnee_complementaire;

    /**
     * The value for the id_tranche_type_prix field.
     * @var        int
     */
    protected $id_tranche_type_prix;

    /**
     * The value for the id_forme_prix field.
     * @var        int
     */
    protected $id_forme_prix;

    /**
     * The value for the id_ccag_reference field.
     * @var        int
     */
    protected $id_ccag_reference;

    /**
     * The value for the reconductible field.
     * @var        boolean
     */
    protected $reconductible;

    /**
     * The value for the nombre_reconductions field.
     * @var        int
     */
    protected $nombre_reconductions;

    /**
     * The value for the modalites_reconduction field.
     * @var        string
     */
    protected $modalites_reconduction;

    /**
     * The value for the variantes_autorisees field.
     * @var        boolean
     */
    protected $variantes_autorisees;

    /**
     * The value for the variantes_techniques_obligatoires field.
     * @var        boolean
     */
    protected $variantes_techniques_obligatoires;

    /**
     * The value for the variantes_techniques_description field.
     * @var        string
     */
    protected $variantes_techniques_description;

    /**
     * The value for the decomposition_lots_techniques field.
     * @var        boolean
     */
    protected $decomposition_lots_techniques;

    /**
     * The value for the id_duree_delai_description field.
     * @var        int
     */
    protected $id_duree_delai_description;

    /**
     * The value for the estimation_pf_att_pressenti field.
     * @var        string
     */
    protected $estimation_pf_att_pressenti;

    /**
     * The value for the estimation_bc_min_att_pressenti field.
     * @var        string
     */
    protected $estimation_bc_min_att_pressenti;

    /**
     * The value for the estimation_bc_max_att_pressenti field.
     * @var        string
     */
    protected $estimation_bc_max_att_pressenti;

    /**
     * The value for the estimation_pf_tab_ouv_offre field.
     * @var        string
     */
    protected $estimation_pf_tab_ouv_offre;

    /**
     * The value for the estimation_dqe_tab_ouv_offre field.
     * @var        string
     */
    protected $estimation_dqe_tab_ouv_offre;

    /**
     * The value for the avis_attribution_present field.
     * Note: this column has a database default value of: false
     * @var        boolean
     */
    protected $avis_attribution_present;

    /**
     * The value for the estimation_pf_preinscription field.
     * @var        string
     */
    protected $estimation_pf_preinscription;

    /**
     * The value for the estimation_bc_min_preinscription field.
     * @var        string
     */
    protected $estimation_bc_min_preinscription;

    /**
     * The value for the estimation_bc_max_preinscription field.
     * @var        string
     */
    protected $estimation_bc_max_preinscription;

    /**
     * The value for the estimation_date_valeur_preinscription field.
     * @var        string
     */
    protected $estimation_date_valeur_preinscription;

    /**
     * The value for the lieu_execution field.
     * @var        string
     */
    protected $lieu_execution;

    /**
     * The value for the duree_marche field.
     * @var        int
     */
    protected $duree_marche;

    /**
     * The value for the duree_date_debut field.
     * @var        string
     */
    protected $duree_date_debut;

    /**
     * The value for the duree_date_fin field.
     * @var        string
     */
    protected $duree_date_fin;

    /**
     * The value for the duree_description field.
     * @var        string
     */
    protected $duree_description;

    /**
     * The value for the id_choix_mois_jour field.
     * @var        int
     */
    protected $id_choix_mois_jour;

    /**
     * The value for the id_unite field.
     * @var        int
     */
    protected $id_unite;

    /**
     * The value for the id_nb_candidats_admis field.
     * @var        int
     */
    protected $id_nb_candidats_admis;

    /**
     * The value for the nombre_candidats_fixe field.
     * @var        int
     */
    protected $nombre_candidats_fixe;

    /**
     * The value for the nombre_candidats_min field.
     * @var        int
     */
    protected $nombre_candidats_min;

    /**
     * The value for the nombre_candidats_max field.
     * @var        int
     */
    protected $nombre_candidats_max;

    /**
     * The value for the delai_validite_offres field.
     * @var        int
     */
    protected $delai_validite_offres;

    /**
     * The value for the phase_successive field.
     * @var        boolean
     */
    protected $phase_successive;

    /**
     * The value for the id_groupement_attributaire field.
     * @var        int
     */
    protected $id_groupement_attributaire;

    /**
     * The value for the id_critere_attribution field.
     * @var        int
     */
    protected $id_critere_attribution;

    /**
     * The value for the type_prestation field.
     * Note: this column has a database default value of: 1
     * @var        int
     */
    protected $type_prestation;

    /**
     * The value for the delai_partiel field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $delai_partiel;

    /**
     * The value for the adresse_retrais_dossiers field.
     * @var        string
     */
    protected $adresse_retrais_dossiers;

    /**
     * The value for the adresse_depot_offres field.
     * @var        string
     */
    protected $adresse_depot_offres;

    /**
     * The value for the lieu_ouverture_plis field.
     * @var        string
     */
    protected $lieu_ouverture_plis;

    /**
     * The value for the pieces_dossier_admin field.
     * @var        string
     */
    protected $pieces_dossier_admin;

    /**
     * The value for the id_tr_pieces_dossier_admin field.
     * @var        int
     */
    protected $id_tr_pieces_dossier_admin;

    /**
     * The value for the pieces_dossier_tech field.
     * @var        string
     */
    protected $pieces_dossier_tech;

    /**
     * The value for the id_tr_pieces_dossier_tech field.
     * @var        int
     */
    protected $id_tr_pieces_dossier_tech;

    /**
     * The value for the pieces_dossier_additif field.
     * @var        string
     */
    protected $pieces_dossier_additif;

    /**
     * The value for the id_tr_pieces_dossier_additif field.
     * @var        int
     */
    protected $id_tr_pieces_dossier_additif;

    /**
     * The value for the id_tr_adresse_retrais_dossiers field.
     * @var        int
     */
    protected $id_tr_adresse_retrais_dossiers;

    /**
     * The value for the id_tr_adresse_depot_offres field.
     * @var        int
     */
    protected $id_tr_adresse_depot_offres;

    /**
     * The value for the id_tr_lieu_ouverture_plis field.
     * @var        int
     */
    protected $id_tr_lieu_ouverture_plis;

    /**
     * The value for the caution_provisoire field.
     * @var        string
     */
    protected $caution_provisoire;

    /**
     * The value for the prix_aquisition_plans field.
     * @var        string
     */
    protected $prix_aquisition_plans;

    /**
     * The value for the add_echantillon field.
     * @var        string
     */
    protected $add_echantillon;

    /**
     * The value for the id_tr_add_echantillon field.
     * @var        int
     */
    protected $id_tr_add_echantillon;

    /**
     * The value for the date_limite_echantillon field.
     * @var        string
     */
    protected $date_limite_echantillon;

    /**
     * The value for the add_reunion field.
     * @var        string
     */
    protected $add_reunion;

    /**
     * The value for the id_tr_add_reunion field.
     * @var        int
     */
    protected $id_tr_add_reunion;

    /**
     * The value for the date_reunion field.
     * @var        string
     */
    protected $date_reunion;

    /**
     * The value for the reunion field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $reunion;

    /**
     * The value for the visites_lieux field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $visites_lieux;

    /**
     * The value for the echantillon field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $echantillon;

    /**
     * The value for the variantes field.
     * @var        string
     */
    protected $variantes;

    /**
     * The value for the variante_calcule field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $variante_calcule;

    /**
     * The value for the organisme field.
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the reference field.
     * @var        int
     */
    protected $reference;

    /**
     * The value for the lot field.
     * @var        int
     */
    protected $lot;

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
        $this->avis_attribution_present = false;
        $this->type_prestation = 1;
        $this->delai_partiel = '0';
        $this->reunion = '0';
        $this->visites_lieux = '0';
        $this->echantillon = '0';
        $this->variante_calcule = '0';
    }

    /**
     * Initializes internal state of BaseCommonTDonneeComplementaireTmp object.
     * @see        applyDefaults()
     */
    public function __construct()
    {
        parent::__construct();
        $this->applyDefaultValues();
    }

    /**
     * Get the [id_donnee_complementaire] column value.
     * 
     * @return int
     */
    public function getIdDonneeComplementaire()
    {

        return $this->id_donnee_complementaire;
    }

    /**
     * Get the [id_tranche_type_prix] column value.
     * 
     * @return int
     */
    public function getIdTrancheTypePrix()
    {

        return $this->id_tranche_type_prix;
    }

    /**
     * Get the [id_forme_prix] column value.
     * 
     * @return int
     */
    public function getIdFormePrix()
    {

        return $this->id_forme_prix;
    }

    /**
     * Get the [id_ccag_reference] column value.
     * 
     * @return int
     */
    public function getIdCcagReference()
    {

        return $this->id_ccag_reference;
    }

    /**
     * Get the [reconductible] column value.
     * 
     * @return boolean
     */
    public function getReconductible()
    {

        return $this->reconductible;
    }

    /**
     * Get the [nombre_reconductions] column value.
     * 
     * @return int
     */
    public function getNombreReconductions()
    {

        return $this->nombre_reconductions;
    }

    /**
     * Get the [modalites_reconduction] column value.
     * 
     * @return string
     */
    public function getModalitesReconduction()
    {

        return $this->modalites_reconduction;
    }

    /**
     * Get the [variantes_autorisees] column value.
     * 
     * @return boolean
     */
    public function getVariantesAutorisees()
    {

        return $this->variantes_autorisees;
    }

    /**
     * Get the [variantes_techniques_obligatoires] column value.
     * 
     * @return boolean
     */
    public function getVariantesTechniquesObligatoires()
    {

        return $this->variantes_techniques_obligatoires;
    }

    /**
     * Get the [variantes_techniques_description] column value.
     * 
     * @return string
     */
    public function getVariantesTechniquesDescription()
    {

        return $this->variantes_techniques_description;
    }

    /**
     * Get the [decomposition_lots_techniques] column value.
     * 
     * @return boolean
     */
    public function getDecompositionLotsTechniques()
    {

        return $this->decomposition_lots_techniques;
    }

    /**
     * Get the [id_duree_delai_description] column value.
     * 
     * @return int
     */
    public function getIdDureeDelaiDescription()
    {

        return $this->id_duree_delai_description;
    }

    /**
     * Get the [estimation_pf_att_pressenti] column value.
     * 
     * @return string
     */
    public function getEstimationPfAttPressenti()
    {

        return $this->estimation_pf_att_pressenti;
    }

    /**
     * Get the [estimation_bc_min_att_pressenti] column value.
     * 
     * @return string
     */
    public function getEstimationBcMinAttPressenti()
    {

        return $this->estimation_bc_min_att_pressenti;
    }

    /**
     * Get the [estimation_bc_max_att_pressenti] column value.
     * 
     * @return string
     */
    public function getEstimationBcMaxAttPressenti()
    {

        return $this->estimation_bc_max_att_pressenti;
    }

    /**
     * Get the [estimation_pf_tab_ouv_offre] column value.
     * 
     * @return string
     */
    public function getEstimationPfTabOuvOffre()
    {

        return $this->estimation_pf_tab_ouv_offre;
    }

    /**
     * Get the [estimation_dqe_tab_ouv_offre] column value.
     * 
     * @return string
     */
    public function getEstimationDqeTabOuvOffre()
    {

        return $this->estimation_dqe_tab_ouv_offre;
    }

    /**
     * Get the [avis_attribution_present] column value.
     * 
     * @return boolean
     */
    public function getAvisAttributionPresent()
    {

        return $this->avis_attribution_present;
    }

    /**
     * Get the [estimation_pf_preinscription] column value.
     * 
     * @return string
     */
    public function getEstimationPfPreinscription()
    {

        return $this->estimation_pf_preinscription;
    }

    /**
     * Get the [estimation_bc_min_preinscription] column value.
     * 
     * @return string
     */
    public function getEstimationBcMinPreinscription()
    {

        return $this->estimation_bc_min_preinscription;
    }

    /**
     * Get the [estimation_bc_max_preinscription] column value.
     * 
     * @return string
     */
    public function getEstimationBcMaxPreinscription()
    {

        return $this->estimation_bc_max_preinscription;
    }

    /**
     * Get the [optionally formatted] temporal [estimation_date_valeur_preinscription] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getEstimationDateValeurPreinscription($format = null)
    {
        if ($this->estimation_date_valeur_preinscription === null) {
            return null;
        }

        if ($this->estimation_date_valeur_preinscription === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->estimation_date_valeur_preinscription);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->estimation_date_valeur_preinscription, true), $x);
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
     * Get the [lieu_execution] column value.
     * 
     * @return string
     */
    public function getLieuExecution()
    {

        return $this->lieu_execution;
    }

    /**
     * Get the [duree_marche] column value.
     * 
     * @return int
     */
    public function getDureeMarche()
    {

        return $this->duree_marche;
    }

    /**
     * Get the [optionally formatted] temporal [duree_date_debut] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDureeDateDebut($format = null)
    {
        if ($this->duree_date_debut === null) {
            return null;
        }

        if ($this->duree_date_debut === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->duree_date_debut);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->duree_date_debut, true), $x);
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
     * Get the [optionally formatted] temporal [duree_date_fin] column value.
     * 
     *
     * @param string $format The date/time format string (either date()-style or strftime()-style).
     *				 If format is null, then the raw DateTime object will be returned.
     * @return mixed Formatted date/time value as string or DateTime object (if format is null), null if column is null, and 0 if column value is 0000-00-00
     * @throws PropelException - if unable to parse/validate the date/time value.
     */
    public function getDureeDateFin($format = null)
    {
        if ($this->duree_date_fin === null) {
            return null;
        }

        if ($this->duree_date_fin === '0000-00-00') {
            // while technically this is not a default value of null,
            // this seems to be closest in meaning.
            return null;
        }

        try {
            $dt = new DateTime($this->duree_date_fin);
        } catch (Exception $x) {
            throw new PropelException("Internally stored date/time/timestamp value could not be converted to DateTime: " . var_export($this->duree_date_fin, true), $x);
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
     * Get the [duree_description] column value.
     * 
     * @return string
     */
    public function getDureeDescription()
    {

        return $this->duree_description;
    }

    /**
     * Get the [id_choix_mois_jour] column value.
     * 
     * @return int
     */
    public function getIdChoixMoisJour()
    {

        return $this->id_choix_mois_jour;
    }

    /**
     * Get the [id_unite] column value.
     * 
     * @return int
     */
    public function getIdUnite()
    {

        return $this->id_unite;
    }

    /**
     * Get the [id_nb_candidats_admis] column value.
     * 
     * @return int
     */
    public function getIdNbCandidatsAdmis()
    {

        return $this->id_nb_candidats_admis;
    }

    /**
     * Get the [nombre_candidats_fixe] column value.
     * 
     * @return int
     */
    public function getNombreCandidatsFixe()
    {

        return $this->nombre_candidats_fixe;
    }

    /**
     * Get the [nombre_candidats_min] column value.
     * 
     * @return int
     */
    public function getNombreCandidatsMin()
    {

        return $this->nombre_candidats_min;
    }

    /**
     * Get the [nombre_candidats_max] column value.
     * 
     * @return int
     */
    public function getNombreCandidatsMax()
    {

        return $this->nombre_candidats_max;
    }

    /**
     * Get the [delai_validite_offres] column value.
     * 
     * @return int
     */
    public function getDelaiValiditeOffres()
    {

        return $this->delai_validite_offres;
    }

    /**
     * Get the [phase_successive] column value.
     * 
     * @return boolean
     */
    public function getPhaseSuccessive()
    {

        return $this->phase_successive;
    }

    /**
     * Get the [id_groupement_attributaire] column value.
     * 
     * @return int
     */
    public function getIdGroupementAttributaire()
    {

        return $this->id_groupement_attributaire;
    }

    /**
     * Get the [id_critere_attribution] column value.
     * 
     * @return int
     */
    public function getIdCritereAttribution()
    {

        return $this->id_critere_attribution;
    }

    /**
     * Get the [type_prestation] column value.
     * 
     * @return int
     */
    public function getTypePrestation()
    {

        return $this->type_prestation;
    }

    /**
     * Get the [delai_partiel] column value.
     * 
     * @return string
     */
    public function getDelaiPartiel()
    {

        return $this->delai_partiel;
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
     * Get the [adresse_depot_offres] column value.
     * 
     * @return string
     */
    public function getAdresseDepotOffres()
    {

        return $this->adresse_depot_offres;
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
     * Get the [pieces_dossier_admin] column value.
     * 
     * @return string
     */
    public function getPiecesDossierAdmin()
    {

        return $this->pieces_dossier_admin;
    }

    /**
     * Get the [id_tr_pieces_dossier_admin] column value.
     * 
     * @return int
     */
    public function getIdTrPiecesDossierAdmin()
    {

        return $this->id_tr_pieces_dossier_admin;
    }

    /**
     * Get the [pieces_dossier_tech] column value.
     * 
     * @return string
     */
    public function getPiecesDossierTech()
    {

        return $this->pieces_dossier_tech;
    }

    /**
     * Get the [id_tr_pieces_dossier_tech] column value.
     * 
     * @return int
     */
    public function getIdTrPiecesDossierTech()
    {

        return $this->id_tr_pieces_dossier_tech;
    }

    /**
     * Get the [pieces_dossier_additif] column value.
     * 
     * @return string
     */
    public function getPiecesDossierAdditif()
    {

        return $this->pieces_dossier_additif;
    }

    /**
     * Get the [id_tr_pieces_dossier_additif] column value.
     * 
     * @return int
     */
    public function getIdTrPiecesDossierAdditif()
    {

        return $this->id_tr_pieces_dossier_additif;
    }

    /**
     * Get the [id_tr_adresse_retrais_dossiers] column value.
     * 
     * @return int
     */
    public function getIdTrAdresseRetraisDossiers()
    {

        return $this->id_tr_adresse_retrais_dossiers;
    }

    /**
     * Get the [id_tr_adresse_depot_offres] column value.
     * 
     * @return int
     */
    public function getIdTrAdresseDepotOffres()
    {

        return $this->id_tr_adresse_depot_offres;
    }

    /**
     * Get the [id_tr_lieu_ouverture_plis] column value.
     * 
     * @return int
     */
    public function getIdTrLieuOuverturePlis()
    {

        return $this->id_tr_lieu_ouverture_plis;
    }

    /**
     * Get the [caution_provisoire] column value.
     * 
     * @return string
     */
    public function getCautionProvisoire()
    {

        return $this->caution_provisoire;
    }

    /**
     * Get the [prix_aquisition_plans] column value.
     * 
     * @return string
     */
    public function getPrixAquisitionPlans()
    {

        return $this->prix_aquisition_plans;
    }

    /**
     * Get the [add_echantillon] column value.
     * 
     * @return string
     */
    public function getAddEchantillon()
    {

        return $this->add_echantillon;
    }

    /**
     * Get the [id_tr_add_echantillon] column value.
     * 
     * @return int
     */
    public function getIdTrAddEchantillon()
    {

        return $this->id_tr_add_echantillon;
    }

    /**
     * Get the [date_limite_echantillon] column value.
     * 
     * @return string
     */
    public function getDateLimiteEchantillon()
    {

        return $this->date_limite_echantillon;
    }

    /**
     * Get the [add_reunion] column value.
     * 
     * @return string
     */
    public function getAddReunion()
    {

        return $this->add_reunion;
    }

    /**
     * Get the [id_tr_add_reunion] column value.
     * 
     * @return int
     */
    public function getIdTrAddReunion()
    {

        return $this->id_tr_add_reunion;
    }

    /**
     * Get the [date_reunion] column value.
     * 
     * @return string
     */
    public function getDateReunion()
    {

        return $this->date_reunion;
    }

    /**
     * Get the [reunion] column value.
     * 
     * @return string
     */
    public function getReunion()
    {

        return $this->reunion;
    }

    /**
     * Get the [visites_lieux] column value.
     * 
     * @return string
     */
    public function getVisitesLieux()
    {

        return $this->visites_lieux;
    }

    /**
     * Get the [echantillon] column value.
     * 
     * @return string
     */
    public function getEchantillon()
    {

        return $this->echantillon;
    }

    /**
     * Get the [variantes] column value.
     * 
     * @return string
     */
    public function getVariantes()
    {

        return $this->variantes;
    }

    /**
     * Get the [variante_calcule] column value.
     * 
     * @return string
     */
    public function getVarianteCalcule()
    {

        return $this->variante_calcule;
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
     * Get the [reference] column value.
     * 
     * @return int
     */
    public function getReference()
    {

        return $this->reference;
    }

    /**
     * Get the [lot] column value.
     * 
     * @return int
     */
    public function getLot()
    {

        return $this->lot;
    }

    /**
     * Set the value of [id_donnee_complementaire] column.
     * 
     * @param int $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setIdDonneeComplementaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_donnee_complementaire !== $v) {
            $this->id_donnee_complementaire = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::ID_DONNEE_COMPLEMENTAIRE;
        }


        return $this;
    } // setIdDonneeComplementaire()

    /**
     * Set the value of [id_tranche_type_prix] column.
     * 
     * @param int $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setIdTrancheTypePrix($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_tranche_type_prix !== $v) {
            $this->id_tranche_type_prix = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::ID_TRANCHE_TYPE_PRIX;
        }


        return $this;
    } // setIdTrancheTypePrix()

    /**
     * Set the value of [id_forme_prix] column.
     * 
     * @param int $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setIdFormePrix($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_forme_prix !== $v) {
            $this->id_forme_prix = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::ID_FORME_PRIX;
        }


        return $this;
    } // setIdFormePrix()

    /**
     * Set the value of [id_ccag_reference] column.
     * 
     * @param int $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setIdCcagReference($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_ccag_reference !== $v) {
            $this->id_ccag_reference = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::ID_CCAG_REFERENCE;
        }


        return $this;
    } // setIdCcagReference()

    /**
     * Sets the value of the [reconductible] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * 
     * @param boolean|integer|string $v The new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setReconductible($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->reconductible !== $v) {
            $this->reconductible = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::RECONDUCTIBLE;
        }


        return $this;
    } // setReconductible()

    /**
     * Set the value of [nombre_reconductions] column.
     * 
     * @param int $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setNombreReconductions($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->nombre_reconductions !== $v) {
            $this->nombre_reconductions = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::NOMBRE_RECONDUCTIONS;
        }


        return $this;
    } // setNombreReconductions()

    /**
     * Set the value of [modalites_reconduction] column.
     * 
     * @param string $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setModalitesReconduction($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->modalites_reconduction !== $v) {
            $this->modalites_reconduction = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::MODALITES_RECONDUCTION;
        }


        return $this;
    } // setModalitesReconduction()

    /**
     * Sets the value of the [variantes_autorisees] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * 
     * @param boolean|integer|string $v The new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setVariantesAutorisees($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->variantes_autorisees !== $v) {
            $this->variantes_autorisees = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::VARIANTES_AUTORISEES;
        }


        return $this;
    } // setVariantesAutorisees()

    /**
     * Sets the value of the [variantes_techniques_obligatoires] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * 
     * @param boolean|integer|string $v The new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setVariantesTechniquesObligatoires($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->variantes_techniques_obligatoires !== $v) {
            $this->variantes_techniques_obligatoires = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::VARIANTES_TECHNIQUES_OBLIGATOIRES;
        }


        return $this;
    } // setVariantesTechniquesObligatoires()

    /**
     * Set the value of [variantes_techniques_description] column.
     * 
     * @param string $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setVariantesTechniquesDescription($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->variantes_techniques_description !== $v) {
            $this->variantes_techniques_description = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::VARIANTES_TECHNIQUES_DESCRIPTION;
        }


        return $this;
    } // setVariantesTechniquesDescription()

    /**
     * Sets the value of the [decomposition_lots_techniques] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * 
     * @param boolean|integer|string $v The new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setDecompositionLotsTechniques($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->decomposition_lots_techniques !== $v) {
            $this->decomposition_lots_techniques = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::DECOMPOSITION_LOTS_TECHNIQUES;
        }


        return $this;
    } // setDecompositionLotsTechniques()

    /**
     * Set the value of [id_duree_delai_description] column.
     * 
     * @param int $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setIdDureeDelaiDescription($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_duree_delai_description !== $v) {
            $this->id_duree_delai_description = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::ID_DUREE_DELAI_DESCRIPTION;
        }


        return $this;
    } // setIdDureeDelaiDescription()

    /**
     * Set the value of [estimation_pf_att_pressenti] column.
     * 
     * @param string $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setEstimationPfAttPressenti($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->estimation_pf_att_pressenti !== $v) {
            $this->estimation_pf_att_pressenti = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::ESTIMATION_PF_ATT_PRESSENTI;
        }


        return $this;
    } // setEstimationPfAttPressenti()

    /**
     * Set the value of [estimation_bc_min_att_pressenti] column.
     * 
     * @param string $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setEstimationBcMinAttPressenti($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->estimation_bc_min_att_pressenti !== $v) {
            $this->estimation_bc_min_att_pressenti = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::ESTIMATION_BC_MIN_ATT_PRESSENTI;
        }


        return $this;
    } // setEstimationBcMinAttPressenti()

    /**
     * Set the value of [estimation_bc_max_att_pressenti] column.
     * 
     * @param string $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setEstimationBcMaxAttPressenti($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->estimation_bc_max_att_pressenti !== $v) {
            $this->estimation_bc_max_att_pressenti = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::ESTIMATION_BC_MAX_ATT_PRESSENTI;
        }


        return $this;
    } // setEstimationBcMaxAttPressenti()

    /**
     * Set the value of [estimation_pf_tab_ouv_offre] column.
     * 
     * @param string $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setEstimationPfTabOuvOffre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->estimation_pf_tab_ouv_offre !== $v) {
            $this->estimation_pf_tab_ouv_offre = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::ESTIMATION_PF_TAB_OUV_OFFRE;
        }


        return $this;
    } // setEstimationPfTabOuvOffre()

    /**
     * Set the value of [estimation_dqe_tab_ouv_offre] column.
     * 
     * @param string $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setEstimationDqeTabOuvOffre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->estimation_dqe_tab_ouv_offre !== $v) {
            $this->estimation_dqe_tab_ouv_offre = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::ESTIMATION_DQE_TAB_OUV_OFFRE;
        }


        return $this;
    } // setEstimationDqeTabOuvOffre()

    /**
     * Sets the value of the [avis_attribution_present] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * 
     * @param boolean|integer|string $v The new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setAvisAttributionPresent($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->avis_attribution_present !== $v) {
            $this->avis_attribution_present = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::AVIS_ATTRIBUTION_PRESENT;
        }


        return $this;
    } // setAvisAttributionPresent()

    /**
     * Set the value of [estimation_pf_preinscription] column.
     * 
     * @param string $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setEstimationPfPreinscription($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->estimation_pf_preinscription !== $v) {
            $this->estimation_pf_preinscription = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::ESTIMATION_PF_PREINSCRIPTION;
        }


        return $this;
    } // setEstimationPfPreinscription()

    /**
     * Set the value of [estimation_bc_min_preinscription] column.
     * 
     * @param string $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setEstimationBcMinPreinscription($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->estimation_bc_min_preinscription !== $v) {
            $this->estimation_bc_min_preinscription = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::ESTIMATION_BC_MIN_PREINSCRIPTION;
        }


        return $this;
    } // setEstimationBcMinPreinscription()

    /**
     * Set the value of [estimation_bc_max_preinscription] column.
     * 
     * @param string $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setEstimationBcMaxPreinscription($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->estimation_bc_max_preinscription !== $v) {
            $this->estimation_bc_max_preinscription = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::ESTIMATION_BC_MAX_PREINSCRIPTION;
        }


        return $this;
    } // setEstimationBcMaxPreinscription()

    /**
     * Sets the value of [estimation_date_valeur_preinscription] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setEstimationDateValeurPreinscription($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->estimation_date_valeur_preinscription !== null || $dt !== null) {
            $currentDateAsString = ($this->estimation_date_valeur_preinscription !== null && $tmpDt = new DateTime($this->estimation_date_valeur_preinscription)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->estimation_date_valeur_preinscription = $newDateAsString;
                $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::ESTIMATION_DATE_VALEUR_PREINSCRIPTION;
            }
        } // if either are not null


        return $this;
    } // setEstimationDateValeurPreinscription()

    /**
     * Set the value of [lieu_execution] column.
     * 
     * @param string $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setLieuExecution($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lieu_execution !== $v) {
            $this->lieu_execution = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::LIEU_EXECUTION;
        }


        return $this;
    } // setLieuExecution()

    /**
     * Set the value of [duree_marche] column.
     * 
     * @param int $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setDureeMarche($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->duree_marche !== $v) {
            $this->duree_marche = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::DUREE_MARCHE;
        }


        return $this;
    } // setDureeMarche()

    /**
     * Sets the value of [duree_date_debut] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setDureeDateDebut($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->duree_date_debut !== null || $dt !== null) {
            $currentDateAsString = ($this->duree_date_debut !== null && $tmpDt = new DateTime($this->duree_date_debut)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->duree_date_debut = $newDateAsString;
                $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::DUREE_DATE_DEBUT;
            }
        } // if either are not null


        return $this;
    } // setDureeDateDebut()

    /**
     * Sets the value of [duree_date_fin] column to a normalized version of the date/time value specified.
     * 
     * @param mixed $v string, integer (timestamp), or DateTime value.
     *               Empty strings are treated as null.
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setDureeDateFin($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->duree_date_fin !== null || $dt !== null) {
            $currentDateAsString = ($this->duree_date_fin !== null && $tmpDt = new DateTime($this->duree_date_fin)) ? $tmpDt->format('Y-m-d') : null;
            $newDateAsString = $dt ? $dt->format('Y-m-d') : null;
            if ($currentDateAsString !== $newDateAsString) {
                $this->duree_date_fin = $newDateAsString;
                $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::DUREE_DATE_FIN;
            }
        } // if either are not null


        return $this;
    } // setDureeDateFin()

    /**
     * Set the value of [duree_description] column.
     * 
     * @param string $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setDureeDescription($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->duree_description !== $v) {
            $this->duree_description = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::DUREE_DESCRIPTION;
        }


        return $this;
    } // setDureeDescription()

    /**
     * Set the value of [id_choix_mois_jour] column.
     * 
     * @param int $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setIdChoixMoisJour($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_choix_mois_jour !== $v) {
            $this->id_choix_mois_jour = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::ID_CHOIX_MOIS_JOUR;
        }


        return $this;
    } // setIdChoixMoisJour()

    /**
     * Set the value of [id_unite] column.
     * 
     * @param int $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setIdUnite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_unite !== $v) {
            $this->id_unite = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::ID_UNITE;
        }


        return $this;
    } // setIdUnite()

    /**
     * Set the value of [id_nb_candidats_admis] column.
     * 
     * @param int $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setIdNbCandidatsAdmis($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_nb_candidats_admis !== $v) {
            $this->id_nb_candidats_admis = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::ID_NB_CANDIDATS_ADMIS;
        }


        return $this;
    } // setIdNbCandidatsAdmis()

    /**
     * Set the value of [nombre_candidats_fixe] column.
     * 
     * @param int $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setNombreCandidatsFixe($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->nombre_candidats_fixe !== $v) {
            $this->nombre_candidats_fixe = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::NOMBRE_CANDIDATS_FIXE;
        }


        return $this;
    } // setNombreCandidatsFixe()

    /**
     * Set the value of [nombre_candidats_min] column.
     * 
     * @param int $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setNombreCandidatsMin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->nombre_candidats_min !== $v) {
            $this->nombre_candidats_min = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::NOMBRE_CANDIDATS_MIN;
        }


        return $this;
    } // setNombreCandidatsMin()

    /**
     * Set the value of [nombre_candidats_max] column.
     * 
     * @param int $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setNombreCandidatsMax($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->nombre_candidats_max !== $v) {
            $this->nombre_candidats_max = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::NOMBRE_CANDIDATS_MAX;
        }


        return $this;
    } // setNombreCandidatsMax()

    /**
     * Set the value of [delai_validite_offres] column.
     * 
     * @param int $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setDelaiValiditeOffres($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->delai_validite_offres !== $v) {
            $this->delai_validite_offres = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::DELAI_VALIDITE_OFFRES;
        }


        return $this;
    } // setDelaiValiditeOffres()

    /**
     * Sets the value of the [phase_successive] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * 
     * @param boolean|integer|string $v The new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setPhaseSuccessive($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (boolean) $v;
            }
        }

        if ($this->phase_successive !== $v) {
            $this->phase_successive = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::PHASE_SUCCESSIVE;
        }


        return $this;
    } // setPhaseSuccessive()

    /**
     * Set the value of [id_groupement_attributaire] column.
     * 
     * @param int $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setIdGroupementAttributaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_groupement_attributaire !== $v) {
            $this->id_groupement_attributaire = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::ID_GROUPEMENT_ATTRIBUTAIRE;
        }


        return $this;
    } // setIdGroupementAttributaire()

    /**
     * Set the value of [id_critere_attribution] column.
     * 
     * @param int $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setIdCritereAttribution($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_critere_attribution !== $v) {
            $this->id_critere_attribution = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::ID_CRITERE_ATTRIBUTION;
        }


        return $this;
    } // setIdCritereAttribution()

    /**
     * Set the value of [type_prestation] column.
     * 
     * @param int $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setTypePrestation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type_prestation !== $v) {
            $this->type_prestation = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::TYPE_PRESTATION;
        }


        return $this;
    } // setTypePrestation()

    /**
     * Set the value of [delai_partiel] column.
     * 
     * @param string $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setDelaiPartiel($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->delai_partiel !== $v) {
            $this->delai_partiel = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::DELAI_PARTIEL;
        }


        return $this;
    } // setDelaiPartiel()

    /**
     * Set the value of [adresse_retrais_dossiers] column.
     * 
     * @param string $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setAdresseRetraisDossiers($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_retrais_dossiers !== $v) {
            $this->adresse_retrais_dossiers = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::ADRESSE_RETRAIS_DOSSIERS;
        }


        return $this;
    } // setAdresseRetraisDossiers()

    /**
     * Set the value of [adresse_depot_offres] column.
     * 
     * @param string $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setAdresseDepotOffres($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->adresse_depot_offres !== $v) {
            $this->adresse_depot_offres = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::ADRESSE_DEPOT_OFFRES;
        }


        return $this;
    } // setAdresseDepotOffres()

    /**
     * Set the value of [lieu_ouverture_plis] column.
     * 
     * @param string $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setLieuOuverturePlis($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lieu_ouverture_plis !== $v) {
            $this->lieu_ouverture_plis = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::LIEU_OUVERTURE_PLIS;
        }


        return $this;
    } // setLieuOuverturePlis()

    /**
     * Set the value of [pieces_dossier_admin] column.
     * 
     * @param string $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setPiecesDossierAdmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pieces_dossier_admin !== $v) {
            $this->pieces_dossier_admin = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::PIECES_DOSSIER_ADMIN;
        }


        return $this;
    } // setPiecesDossierAdmin()

    /**
     * Set the value of [id_tr_pieces_dossier_admin] column.
     * 
     * @param int $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setIdTrPiecesDossierAdmin($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_tr_pieces_dossier_admin !== $v) {
            $this->id_tr_pieces_dossier_admin = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::ID_TR_PIECES_DOSSIER_ADMIN;
        }


        return $this;
    } // setIdTrPiecesDossierAdmin()

    /**
     * Set the value of [pieces_dossier_tech] column.
     * 
     * @param string $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setPiecesDossierTech($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pieces_dossier_tech !== $v) {
            $this->pieces_dossier_tech = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::PIECES_DOSSIER_TECH;
        }


        return $this;
    } // setPiecesDossierTech()

    /**
     * Set the value of [id_tr_pieces_dossier_tech] column.
     * 
     * @param int $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setIdTrPiecesDossierTech($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_tr_pieces_dossier_tech !== $v) {
            $this->id_tr_pieces_dossier_tech = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::ID_TR_PIECES_DOSSIER_TECH;
        }


        return $this;
    } // setIdTrPiecesDossierTech()

    /**
     * Set the value of [pieces_dossier_additif] column.
     * 
     * @param string $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setPiecesDossierAdditif($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->pieces_dossier_additif !== $v) {
            $this->pieces_dossier_additif = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::PIECES_DOSSIER_ADDITIF;
        }


        return $this;
    } // setPiecesDossierAdditif()

    /**
     * Set the value of [id_tr_pieces_dossier_additif] column.
     * 
     * @param int $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setIdTrPiecesDossierAdditif($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_tr_pieces_dossier_additif !== $v) {
            $this->id_tr_pieces_dossier_additif = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::ID_TR_PIECES_DOSSIER_ADDITIF;
        }


        return $this;
    } // setIdTrPiecesDossierAdditif()

    /**
     * Set the value of [id_tr_adresse_retrais_dossiers] column.
     * 
     * @param int $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setIdTrAdresseRetraisDossiers($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_tr_adresse_retrais_dossiers !== $v) {
            $this->id_tr_adresse_retrais_dossiers = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::ID_TR_ADRESSE_RETRAIS_DOSSIERS;
        }


        return $this;
    } // setIdTrAdresseRetraisDossiers()

    /**
     * Set the value of [id_tr_adresse_depot_offres] column.
     * 
     * @param int $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setIdTrAdresseDepotOffres($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_tr_adresse_depot_offres !== $v) {
            $this->id_tr_adresse_depot_offres = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::ID_TR_ADRESSE_DEPOT_OFFRES;
        }


        return $this;
    } // setIdTrAdresseDepotOffres()

    /**
     * Set the value of [id_tr_lieu_ouverture_plis] column.
     * 
     * @param int $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setIdTrLieuOuverturePlis($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_tr_lieu_ouverture_plis !== $v) {
            $this->id_tr_lieu_ouverture_plis = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::ID_TR_LIEU_OUVERTURE_PLIS;
        }


        return $this;
    } // setIdTrLieuOuverturePlis()

    /**
     * Set the value of [caution_provisoire] column.
     * 
     * @param string $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setCautionProvisoire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->caution_provisoire !== $v) {
            $this->caution_provisoire = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::CAUTION_PROVISOIRE;
        }


        return $this;
    } // setCautionProvisoire()

    /**
     * Set the value of [prix_aquisition_plans] column.
     * 
     * @param string $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setPrixAquisitionPlans($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->prix_aquisition_plans !== $v) {
            $this->prix_aquisition_plans = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::PRIX_AQUISITION_PLANS;
        }


        return $this;
    } // setPrixAquisitionPlans()

    /**
     * Set the value of [add_echantillon] column.
     * 
     * @param string $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setAddEchantillon($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->add_echantillon !== $v) {
            $this->add_echantillon = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::ADD_ECHANTILLON;
        }


        return $this;
    } // setAddEchantillon()

    /**
     * Set the value of [id_tr_add_echantillon] column.
     * 
     * @param int $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setIdTrAddEchantillon($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_tr_add_echantillon !== $v) {
            $this->id_tr_add_echantillon = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::ID_TR_ADD_ECHANTILLON;
        }


        return $this;
    } // setIdTrAddEchantillon()

    /**
     * Set the value of [date_limite_echantillon] column.
     * 
     * @param string $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setDateLimiteEchantillon($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_limite_echantillon !== $v) {
            $this->date_limite_echantillon = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::DATE_LIMITE_ECHANTILLON;
        }


        return $this;
    } // setDateLimiteEchantillon()

    /**
     * Set the value of [add_reunion] column.
     * 
     * @param string $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setAddReunion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->add_reunion !== $v) {
            $this->add_reunion = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::ADD_REUNION;
        }


        return $this;
    } // setAddReunion()

    /**
     * Set the value of [id_tr_add_reunion] column.
     * 
     * @param int $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setIdTrAddReunion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_tr_add_reunion !== $v) {
            $this->id_tr_add_reunion = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::ID_TR_ADD_REUNION;
        }


        return $this;
    } // setIdTrAddReunion()

    /**
     * Set the value of [date_reunion] column.
     * 
     * @param string $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setDateReunion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_reunion !== $v) {
            $this->date_reunion = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::DATE_REUNION;
        }


        return $this;
    } // setDateReunion()

    /**
     * Set the value of [reunion] column.
     * 
     * @param string $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setReunion($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->reunion !== $v) {
            $this->reunion = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::REUNION;
        }


        return $this;
    } // setReunion()

    /**
     * Set the value of [visites_lieux] column.
     * 
     * @param string $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setVisitesLieux($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->visites_lieux !== $v) {
            $this->visites_lieux = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::VISITES_LIEUX;
        }


        return $this;
    } // setVisitesLieux()

    /**
     * Set the value of [echantillon] column.
     * 
     * @param string $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setEchantillon($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->echantillon !== $v) {
            $this->echantillon = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::ECHANTILLON;
        }


        return $this;
    } // setEchantillon()

    /**
     * Set the value of [variantes] column.
     * 
     * @param string $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setVariantes($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->variantes !== $v) {
            $this->variantes = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::VARIANTES;
        }


        return $this;
    } // setVariantes()

    /**
     * Set the value of [variante_calcule] column.
     * 
     * @param string $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setVarianteCalcule($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->variante_calcule !== $v) {
            $this->variante_calcule = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::VARIANTE_CALCULE;
        }


        return $this;
    } // setVarianteCalcule()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [reference] column.
     * 
     * @param int $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setReference($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->reference !== $v) {
            $this->reference = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::REFERENCE;
        }


        return $this;
    } // setReference()

    /**
     * Set the value of [lot] column.
     * 
     * @param int $v new value
     * @return CommonTDonneeComplementaireTmp The current object (for fluent API support)
     */
    public function setLot($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->lot !== $v) {
            $this->lot = $v;
            $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::LOT;
        }


        return $this;
    } // setLot()

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
            if ($this->avis_attribution_present !== false) {
                return false;
            }

            if ($this->type_prestation !== 1) {
                return false;
            }

            if ($this->delai_partiel !== '0') {
                return false;
            }

            if ($this->reunion !== '0') {
                return false;
            }

            if ($this->visites_lieux !== '0') {
                return false;
            }

            if ($this->echantillon !== '0') {
                return false;
            }

            if ($this->variante_calcule !== '0') {
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

            $this->id_donnee_complementaire = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
            $this->id_tranche_type_prix = ($row[$startcol + 1] !== null) ? (int) $row[$startcol + 1] : null;
            $this->id_forme_prix = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->id_ccag_reference = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->reconductible = ($row[$startcol + 4] !== null) ? (boolean) $row[$startcol + 4] : null;
            $this->nombre_reconductions = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->modalites_reconduction = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->variantes_autorisees = ($row[$startcol + 7] !== null) ? (boolean) $row[$startcol + 7] : null;
            $this->variantes_techniques_obligatoires = ($row[$startcol + 8] !== null) ? (boolean) $row[$startcol + 8] : null;
            $this->variantes_techniques_description = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->decomposition_lots_techniques = ($row[$startcol + 10] !== null) ? (boolean) $row[$startcol + 10] : null;
            $this->id_duree_delai_description = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->estimation_pf_att_pressenti = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->estimation_bc_min_att_pressenti = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->estimation_bc_max_att_pressenti = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->estimation_pf_tab_ouv_offre = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->estimation_dqe_tab_ouv_offre = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->avis_attribution_present = ($row[$startcol + 17] !== null) ? (boolean) $row[$startcol + 17] : null;
            $this->estimation_pf_preinscription = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->estimation_bc_min_preinscription = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->estimation_bc_max_preinscription = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->estimation_date_valeur_preinscription = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->lieu_execution = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->duree_marche = ($row[$startcol + 23] !== null) ? (int) $row[$startcol + 23] : null;
            $this->duree_date_debut = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->duree_date_fin = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->duree_description = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
            $this->id_choix_mois_jour = ($row[$startcol + 27] !== null) ? (int) $row[$startcol + 27] : null;
            $this->id_unite = ($row[$startcol + 28] !== null) ? (int) $row[$startcol + 28] : null;
            $this->id_nb_candidats_admis = ($row[$startcol + 29] !== null) ? (int) $row[$startcol + 29] : null;
            $this->nombre_candidats_fixe = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
            $this->nombre_candidats_min = ($row[$startcol + 31] !== null) ? (int) $row[$startcol + 31] : null;
            $this->nombre_candidats_max = ($row[$startcol + 32] !== null) ? (int) $row[$startcol + 32] : null;
            $this->delai_validite_offres = ($row[$startcol + 33] !== null) ? (int) $row[$startcol + 33] : null;
            $this->phase_successive = ($row[$startcol + 34] !== null) ? (boolean) $row[$startcol + 34] : null;
            $this->id_groupement_attributaire = ($row[$startcol + 35] !== null) ? (int) $row[$startcol + 35] : null;
            $this->id_critere_attribution = ($row[$startcol + 36] !== null) ? (int) $row[$startcol + 36] : null;
            $this->type_prestation = ($row[$startcol + 37] !== null) ? (int) $row[$startcol + 37] : null;
            $this->delai_partiel = ($row[$startcol + 38] !== null) ? (string) $row[$startcol + 38] : null;
            $this->adresse_retrais_dossiers = ($row[$startcol + 39] !== null) ? (string) $row[$startcol + 39] : null;
            $this->adresse_depot_offres = ($row[$startcol + 40] !== null) ? (string) $row[$startcol + 40] : null;
            $this->lieu_ouverture_plis = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
            $this->pieces_dossier_admin = ($row[$startcol + 42] !== null) ? (string) $row[$startcol + 42] : null;
            $this->id_tr_pieces_dossier_admin = ($row[$startcol + 43] !== null) ? (int) $row[$startcol + 43] : null;
            $this->pieces_dossier_tech = ($row[$startcol + 44] !== null) ? (string) $row[$startcol + 44] : null;
            $this->id_tr_pieces_dossier_tech = ($row[$startcol + 45] !== null) ? (int) $row[$startcol + 45] : null;
            $this->pieces_dossier_additif = ($row[$startcol + 46] !== null) ? (string) $row[$startcol + 46] : null;
            $this->id_tr_pieces_dossier_additif = ($row[$startcol + 47] !== null) ? (int) $row[$startcol + 47] : null;
            $this->id_tr_adresse_retrais_dossiers = ($row[$startcol + 48] !== null) ? (int) $row[$startcol + 48] : null;
            $this->id_tr_adresse_depot_offres = ($row[$startcol + 49] !== null) ? (int) $row[$startcol + 49] : null;
            $this->id_tr_lieu_ouverture_plis = ($row[$startcol + 50] !== null) ? (int) $row[$startcol + 50] : null;
            $this->caution_provisoire = ($row[$startcol + 51] !== null) ? (string) $row[$startcol + 51] : null;
            $this->prix_aquisition_plans = ($row[$startcol + 52] !== null) ? (string) $row[$startcol + 52] : null;
            $this->add_echantillon = ($row[$startcol + 53] !== null) ? (string) $row[$startcol + 53] : null;
            $this->id_tr_add_echantillon = ($row[$startcol + 54] !== null) ? (int) $row[$startcol + 54] : null;
            $this->date_limite_echantillon = ($row[$startcol + 55] !== null) ? (string) $row[$startcol + 55] : null;
            $this->add_reunion = ($row[$startcol + 56] !== null) ? (string) $row[$startcol + 56] : null;
            $this->id_tr_add_reunion = ($row[$startcol + 57] !== null) ? (int) $row[$startcol + 57] : null;
            $this->date_reunion = ($row[$startcol + 58] !== null) ? (string) $row[$startcol + 58] : null;
            $this->reunion = ($row[$startcol + 59] !== null) ? (string) $row[$startcol + 59] : null;
            $this->visites_lieux = ($row[$startcol + 60] !== null) ? (string) $row[$startcol + 60] : null;
            $this->echantillon = ($row[$startcol + 61] !== null) ? (string) $row[$startcol + 61] : null;
            $this->variantes = ($row[$startcol + 62] !== null) ? (string) $row[$startcol + 62] : null;
            $this->variante_calcule = ($row[$startcol + 63] !== null) ? (string) $row[$startcol + 63] : null;
            $this->organisme = ($row[$startcol + 64] !== null) ? (string) $row[$startcol + 64] : null;
            $this->reference = ($row[$startcol + 65] !== null) ? (int) $row[$startcol + 65] : null;
            $this->lot = ($row[$startcol + 66] !== null) ? (int) $row[$startcol + 66] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 67; // 67 = CommonTDonneeComplementaireTmpPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonTDonneeComplementaireTmp object", $e);
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
            $con = Propel::getConnection(CommonTDonneeComplementaireTmpPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonTDonneeComplementaireTmpPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonTDonneeComplementaireTmpPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonTDonneeComplementaireTmpQuery::create()
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
            $con = Propel::getConnection(CommonTDonneeComplementaireTmpPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonTDonneeComplementaireTmpPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonTDonneeComplementaireTmpPeer::ID_DONNEE_COMPLEMENTAIRE;
        if (null !== $this->id_donnee_complementaire) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonTDonneeComplementaireTmpPeer::ID_DONNEE_COMPLEMENTAIRE . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ID_DONNEE_COMPLEMENTAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`id_donnee_complementaire`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ID_TRANCHE_TYPE_PRIX)) {
            $modifiedColumns[':p' . $index++]  = '`id_tranche_type_prix`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ID_FORME_PRIX)) {
            $modifiedColumns[':p' . $index++]  = '`id_forme_prix`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ID_CCAG_REFERENCE)) {
            $modifiedColumns[':p' . $index++]  = '`id_ccag_reference`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::RECONDUCTIBLE)) {
            $modifiedColumns[':p' . $index++]  = '`reconductible`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::NOMBRE_RECONDUCTIONS)) {
            $modifiedColumns[':p' . $index++]  = '`nombre_reconductions`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::MODALITES_RECONDUCTION)) {
            $modifiedColumns[':p' . $index++]  = '`modalites_reconduction`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::VARIANTES_AUTORISEES)) {
            $modifiedColumns[':p' . $index++]  = '`variantes_autorisees`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::VARIANTES_TECHNIQUES_OBLIGATOIRES)) {
            $modifiedColumns[':p' . $index++]  = '`variantes_techniques_obligatoires`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::VARIANTES_TECHNIQUES_DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = '`variantes_techniques_description`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::DECOMPOSITION_LOTS_TECHNIQUES)) {
            $modifiedColumns[':p' . $index++]  = '`decomposition_lots_techniques`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ID_DUREE_DELAI_DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = '`id_duree_delai_description`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ESTIMATION_PF_ATT_PRESSENTI)) {
            $modifiedColumns[':p' . $index++]  = '`estimation_pf_att_pressenti`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ESTIMATION_BC_MIN_ATT_PRESSENTI)) {
            $modifiedColumns[':p' . $index++]  = '`estimation_bc_min_att_pressenti`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ESTIMATION_BC_MAX_ATT_PRESSENTI)) {
            $modifiedColumns[':p' . $index++]  = '`estimation_bc_max_att_pressenti`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ESTIMATION_PF_TAB_OUV_OFFRE)) {
            $modifiedColumns[':p' . $index++]  = '`estimation_pf_tab_ouv_offre`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ESTIMATION_DQE_TAB_OUV_OFFRE)) {
            $modifiedColumns[':p' . $index++]  = '`estimation_dqe_tab_ouv_offre`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::AVIS_ATTRIBUTION_PRESENT)) {
            $modifiedColumns[':p' . $index++]  = '`avis_attribution_present`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ESTIMATION_PF_PREINSCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = '`estimation_pf_preinscription`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ESTIMATION_BC_MIN_PREINSCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = '`estimation_bc_min_preinscription`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ESTIMATION_BC_MAX_PREINSCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = '`estimation_bc_max_preinscription`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ESTIMATION_DATE_VALEUR_PREINSCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = '`estimation_date_valeur_preinscription`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::LIEU_EXECUTION)) {
            $modifiedColumns[':p' . $index++]  = '`lieu_execution`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::DUREE_MARCHE)) {
            $modifiedColumns[':p' . $index++]  = '`duree_marche`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::DUREE_DATE_DEBUT)) {
            $modifiedColumns[':p' . $index++]  = '`duree_date_debut`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::DUREE_DATE_FIN)) {
            $modifiedColumns[':p' . $index++]  = '`duree_date_fin`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::DUREE_DESCRIPTION)) {
            $modifiedColumns[':p' . $index++]  = '`duree_description`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ID_CHOIX_MOIS_JOUR)) {
            $modifiedColumns[':p' . $index++]  = '`id_choix_mois_jour`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ID_UNITE)) {
            $modifiedColumns[':p' . $index++]  = '`id_unite`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ID_NB_CANDIDATS_ADMIS)) {
            $modifiedColumns[':p' . $index++]  = '`id_nb_candidats_admis`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::NOMBRE_CANDIDATS_FIXE)) {
            $modifiedColumns[':p' . $index++]  = '`nombre_candidats_fixe`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::NOMBRE_CANDIDATS_MIN)) {
            $modifiedColumns[':p' . $index++]  = '`nombre_candidats_min`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::NOMBRE_CANDIDATS_MAX)) {
            $modifiedColumns[':p' . $index++]  = '`nombre_candidats_max`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::DELAI_VALIDITE_OFFRES)) {
            $modifiedColumns[':p' . $index++]  = '`delai_validite_offres`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::PHASE_SUCCESSIVE)) {
            $modifiedColumns[':p' . $index++]  = '`phase_successive`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ID_GROUPEMENT_ATTRIBUTAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`id_groupement_attributaire`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ID_CRITERE_ATTRIBUTION)) {
            $modifiedColumns[':p' . $index++]  = '`id_critere_attribution`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::TYPE_PRESTATION)) {
            $modifiedColumns[':p' . $index++]  = '`type_prestation`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::DELAI_PARTIEL)) {
            $modifiedColumns[':p' . $index++]  = '`delai_partiel`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ADRESSE_RETRAIS_DOSSIERS)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_retrais_dossiers`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ADRESSE_DEPOT_OFFRES)) {
            $modifiedColumns[':p' . $index++]  = '`adresse_depot_offres`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::LIEU_OUVERTURE_PLIS)) {
            $modifiedColumns[':p' . $index++]  = '`lieu_ouverture_plis`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::PIECES_DOSSIER_ADMIN)) {
            $modifiedColumns[':p' . $index++]  = '`pieces_dossier_admin`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ID_TR_PIECES_DOSSIER_ADMIN)) {
            $modifiedColumns[':p' . $index++]  = '`id_tr_pieces_dossier_admin`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::PIECES_DOSSIER_TECH)) {
            $modifiedColumns[':p' . $index++]  = '`pieces_dossier_tech`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ID_TR_PIECES_DOSSIER_TECH)) {
            $modifiedColumns[':p' . $index++]  = '`id_tr_pieces_dossier_tech`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::PIECES_DOSSIER_ADDITIF)) {
            $modifiedColumns[':p' . $index++]  = '`pieces_dossier_additif`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ID_TR_PIECES_DOSSIER_ADDITIF)) {
            $modifiedColumns[':p' . $index++]  = '`id_tr_pieces_dossier_additif`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ID_TR_ADRESSE_RETRAIS_DOSSIERS)) {
            $modifiedColumns[':p' . $index++]  = '`id_tr_adresse_retrais_dossiers`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ID_TR_ADRESSE_DEPOT_OFFRES)) {
            $modifiedColumns[':p' . $index++]  = '`id_tr_adresse_depot_offres`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ID_TR_LIEU_OUVERTURE_PLIS)) {
            $modifiedColumns[':p' . $index++]  = '`id_tr_lieu_ouverture_plis`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::CAUTION_PROVISOIRE)) {
            $modifiedColumns[':p' . $index++]  = '`caution_provisoire`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::PRIX_AQUISITION_PLANS)) {
            $modifiedColumns[':p' . $index++]  = '`prix_aquisition_plans`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ADD_ECHANTILLON)) {
            $modifiedColumns[':p' . $index++]  = '`add_echantillon`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ID_TR_ADD_ECHANTILLON)) {
            $modifiedColumns[':p' . $index++]  = '`id_tr_add_echantillon`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::DATE_LIMITE_ECHANTILLON)) {
            $modifiedColumns[':p' . $index++]  = '`date_limite_echantillon`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ADD_REUNION)) {
            $modifiedColumns[':p' . $index++]  = '`add_reunion`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ID_TR_ADD_REUNION)) {
            $modifiedColumns[':p' . $index++]  = '`id_tr_add_reunion`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::DATE_REUNION)) {
            $modifiedColumns[':p' . $index++]  = '`date_reunion`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::REUNION)) {
            $modifiedColumns[':p' . $index++]  = '`reunion`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::VISITES_LIEUX)) {
            $modifiedColumns[':p' . $index++]  = '`visites_lieux`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ECHANTILLON)) {
            $modifiedColumns[':p' . $index++]  = '`echantillon`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::VARIANTES)) {
            $modifiedColumns[':p' . $index++]  = '`variantes`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::VARIANTE_CALCULE)) {
            $modifiedColumns[':p' . $index++]  = '`variante_calcule`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::REFERENCE)) {
            $modifiedColumns[':p' . $index++]  = '`reference`';
        }
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::LOT)) {
            $modifiedColumns[':p' . $index++]  = '`lot`';
        }

        $sql = sprintf(
            'INSERT INTO `t_donnee_complementaire_tmp` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_donnee_complementaire`':						
                        $stmt->bindValue($identifier, $this->id_donnee_complementaire, PDO::PARAM_INT);
                        break;
                    case '`id_tranche_type_prix`':						
                        $stmt->bindValue($identifier, $this->id_tranche_type_prix, PDO::PARAM_INT);
                        break;
                    case '`id_forme_prix`':						
                        $stmt->bindValue($identifier, $this->id_forme_prix, PDO::PARAM_INT);
                        break;
                    case '`id_ccag_reference`':						
                        $stmt->bindValue($identifier, $this->id_ccag_reference, PDO::PARAM_INT);
                        break;
                    case '`reconductible`':
                        $stmt->bindValue($identifier, (int) $this->reconductible, PDO::PARAM_INT);
                        break;
                    case '`nombre_reconductions`':						
                        $stmt->bindValue($identifier, $this->nombre_reconductions, PDO::PARAM_INT);
                        break;
                    case '`modalites_reconduction`':						
                        $stmt->bindValue($identifier, $this->modalites_reconduction, PDO::PARAM_STR);
                        break;
                    case '`variantes_autorisees`':
                        $stmt->bindValue($identifier, (int) $this->variantes_autorisees, PDO::PARAM_INT);
                        break;
                    case '`variantes_techniques_obligatoires`':
                        $stmt->bindValue($identifier, (int) $this->variantes_techniques_obligatoires, PDO::PARAM_INT);
                        break;
                    case '`variantes_techniques_description`':						
                        $stmt->bindValue($identifier, $this->variantes_techniques_description, PDO::PARAM_STR);
                        break;
                    case '`decomposition_lots_techniques`':
                        $stmt->bindValue($identifier, (int) $this->decomposition_lots_techniques, PDO::PARAM_INT);
                        break;
                    case '`id_duree_delai_description`':						
                        $stmt->bindValue($identifier, $this->id_duree_delai_description, PDO::PARAM_INT);
                        break;
                    case '`estimation_pf_att_pressenti`':						
                        $stmt->bindValue($identifier, $this->estimation_pf_att_pressenti, PDO::PARAM_STR);
                        break;
                    case '`estimation_bc_min_att_pressenti`':						
                        $stmt->bindValue($identifier, $this->estimation_bc_min_att_pressenti, PDO::PARAM_STR);
                        break;
                    case '`estimation_bc_max_att_pressenti`':						
                        $stmt->bindValue($identifier, $this->estimation_bc_max_att_pressenti, PDO::PARAM_STR);
                        break;
                    case '`estimation_pf_tab_ouv_offre`':						
                        $stmt->bindValue($identifier, $this->estimation_pf_tab_ouv_offre, PDO::PARAM_STR);
                        break;
                    case '`estimation_dqe_tab_ouv_offre`':						
                        $stmt->bindValue($identifier, $this->estimation_dqe_tab_ouv_offre, PDO::PARAM_STR);
                        break;
                    case '`avis_attribution_present`':
                        $stmt->bindValue($identifier, (int) $this->avis_attribution_present, PDO::PARAM_INT);
                        break;
                    case '`estimation_pf_preinscription`':						
                        $stmt->bindValue($identifier, $this->estimation_pf_preinscription, PDO::PARAM_STR);
                        break;
                    case '`estimation_bc_min_preinscription`':						
                        $stmt->bindValue($identifier, $this->estimation_bc_min_preinscription, PDO::PARAM_STR);
                        break;
                    case '`estimation_bc_max_preinscription`':						
                        $stmt->bindValue($identifier, $this->estimation_bc_max_preinscription, PDO::PARAM_STR);
                        break;
                    case '`estimation_date_valeur_preinscription`':						
                        $stmt->bindValue($identifier, $this->estimation_date_valeur_preinscription, PDO::PARAM_STR);
                        break;
                    case '`lieu_execution`':						
                        $stmt->bindValue($identifier, $this->lieu_execution, PDO::PARAM_STR);
                        break;
                    case '`duree_marche`':						
                        $stmt->bindValue($identifier, $this->duree_marche, PDO::PARAM_INT);
                        break;
                    case '`duree_date_debut`':						
                        $stmt->bindValue($identifier, $this->duree_date_debut, PDO::PARAM_STR);
                        break;
                    case '`duree_date_fin`':						
                        $stmt->bindValue($identifier, $this->duree_date_fin, PDO::PARAM_STR);
                        break;
                    case '`duree_description`':						
                        $stmt->bindValue($identifier, $this->duree_description, PDO::PARAM_STR);
                        break;
                    case '`id_choix_mois_jour`':						
                        $stmt->bindValue($identifier, $this->id_choix_mois_jour, PDO::PARAM_INT);
                        break;
                    case '`id_unite`':						
                        $stmt->bindValue($identifier, $this->id_unite, PDO::PARAM_INT);
                        break;
                    case '`id_nb_candidats_admis`':						
                        $stmt->bindValue($identifier, $this->id_nb_candidats_admis, PDO::PARAM_INT);
                        break;
                    case '`nombre_candidats_fixe`':						
                        $stmt->bindValue($identifier, $this->nombre_candidats_fixe, PDO::PARAM_INT);
                        break;
                    case '`nombre_candidats_min`':						
                        $stmt->bindValue($identifier, $this->nombre_candidats_min, PDO::PARAM_INT);
                        break;
                    case '`nombre_candidats_max`':						
                        $stmt->bindValue($identifier, $this->nombre_candidats_max, PDO::PARAM_INT);
                        break;
                    case '`delai_validite_offres`':						
                        $stmt->bindValue($identifier, $this->delai_validite_offres, PDO::PARAM_INT);
                        break;
                    case '`phase_successive`':
                        $stmt->bindValue($identifier, (int) $this->phase_successive, PDO::PARAM_INT);
                        break;
                    case '`id_groupement_attributaire`':						
                        $stmt->bindValue($identifier, $this->id_groupement_attributaire, PDO::PARAM_INT);
                        break;
                    case '`id_critere_attribution`':						
                        $stmt->bindValue($identifier, $this->id_critere_attribution, PDO::PARAM_INT);
                        break;
                    case '`type_prestation`':						
                        $stmt->bindValue($identifier, $this->type_prestation, PDO::PARAM_INT);
                        break;
                    case '`delai_partiel`':						
                        $stmt->bindValue($identifier, $this->delai_partiel, PDO::PARAM_STR);
                        break;
                    case '`adresse_retrais_dossiers`':						
                        $stmt->bindValue($identifier, $this->adresse_retrais_dossiers, PDO::PARAM_STR);
                        break;
                    case '`adresse_depot_offres`':						
                        $stmt->bindValue($identifier, $this->adresse_depot_offres, PDO::PARAM_STR);
                        break;
                    case '`lieu_ouverture_plis`':						
                        $stmt->bindValue($identifier, $this->lieu_ouverture_plis, PDO::PARAM_STR);
                        break;
                    case '`pieces_dossier_admin`':						
                        $stmt->bindValue($identifier, $this->pieces_dossier_admin, PDO::PARAM_STR);
                        break;
                    case '`id_tr_pieces_dossier_admin`':						
                        $stmt->bindValue($identifier, $this->id_tr_pieces_dossier_admin, PDO::PARAM_INT);
                        break;
                    case '`pieces_dossier_tech`':						
                        $stmt->bindValue($identifier, $this->pieces_dossier_tech, PDO::PARAM_STR);
                        break;
                    case '`id_tr_pieces_dossier_tech`':						
                        $stmt->bindValue($identifier, $this->id_tr_pieces_dossier_tech, PDO::PARAM_INT);
                        break;
                    case '`pieces_dossier_additif`':						
                        $stmt->bindValue($identifier, $this->pieces_dossier_additif, PDO::PARAM_STR);
                        break;
                    case '`id_tr_pieces_dossier_additif`':						
                        $stmt->bindValue($identifier, $this->id_tr_pieces_dossier_additif, PDO::PARAM_INT);
                        break;
                    case '`id_tr_adresse_retrais_dossiers`':						
                        $stmt->bindValue($identifier, $this->id_tr_adresse_retrais_dossiers, PDO::PARAM_INT);
                        break;
                    case '`id_tr_adresse_depot_offres`':						
                        $stmt->bindValue($identifier, $this->id_tr_adresse_depot_offres, PDO::PARAM_INT);
                        break;
                    case '`id_tr_lieu_ouverture_plis`':						
                        $stmt->bindValue($identifier, $this->id_tr_lieu_ouverture_plis, PDO::PARAM_INT);
                        break;
                    case '`caution_provisoire`':						
                        $stmt->bindValue($identifier, $this->caution_provisoire, PDO::PARAM_STR);
                        break;
                    case '`prix_aquisition_plans`':						
                        $stmt->bindValue($identifier, $this->prix_aquisition_plans, PDO::PARAM_STR);
                        break;
                    case '`add_echantillon`':						
                        $stmt->bindValue($identifier, $this->add_echantillon, PDO::PARAM_STR);
                        break;
                    case '`id_tr_add_echantillon`':						
                        $stmt->bindValue($identifier, $this->id_tr_add_echantillon, PDO::PARAM_INT);
                        break;
                    case '`date_limite_echantillon`':						
                        $stmt->bindValue($identifier, $this->date_limite_echantillon, PDO::PARAM_STR);
                        break;
                    case '`add_reunion`':						
                        $stmt->bindValue($identifier, $this->add_reunion, PDO::PARAM_STR);
                        break;
                    case '`id_tr_add_reunion`':						
                        $stmt->bindValue($identifier, $this->id_tr_add_reunion, PDO::PARAM_INT);
                        break;
                    case '`date_reunion`':						
                        $stmt->bindValue($identifier, $this->date_reunion, PDO::PARAM_STR);
                        break;
                    case '`reunion`':						
                        $stmt->bindValue($identifier, $this->reunion, PDO::PARAM_STR);
                        break;
                    case '`visites_lieux`':						
                        $stmt->bindValue($identifier, $this->visites_lieux, PDO::PARAM_STR);
                        break;
                    case '`echantillon`':						
                        $stmt->bindValue($identifier, $this->echantillon, PDO::PARAM_STR);
                        break;
                    case '`variantes`':						
                        $stmt->bindValue($identifier, $this->variantes, PDO::PARAM_STR);
                        break;
                    case '`variante_calcule`':						
                        $stmt->bindValue($identifier, $this->variante_calcule, PDO::PARAM_STR);
                        break;
                    case '`organisme`':						
                        $stmt->bindValue($identifier, $this->organisme, PDO::PARAM_STR);
                        break;
                    case '`reference`':						
                        $stmt->bindValue($identifier, $this->reference, PDO::PARAM_INT);
                        break;
                    case '`lot`':						
                        $stmt->bindValue($identifier, $this->lot, PDO::PARAM_INT);
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
        $this->setIdDonneeComplementaire($pk);

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


            if (($retval = CommonTDonneeComplementaireTmpPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonTDonneeComplementaireTmpPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdDonneeComplementaire();
                break;
            case 1:
                return $this->getIdTrancheTypePrix();
                break;
            case 2:
                return $this->getIdFormePrix();
                break;
            case 3:
                return $this->getIdCcagReference();
                break;
            case 4:
                return $this->getReconductible();
                break;
            case 5:
                return $this->getNombreReconductions();
                break;
            case 6:
                return $this->getModalitesReconduction();
                break;
            case 7:
                return $this->getVariantesAutorisees();
                break;
            case 8:
                return $this->getVariantesTechniquesObligatoires();
                break;
            case 9:
                return $this->getVariantesTechniquesDescription();
                break;
            case 10:
                return $this->getDecompositionLotsTechniques();
                break;
            case 11:
                return $this->getIdDureeDelaiDescription();
                break;
            case 12:
                return $this->getEstimationPfAttPressenti();
                break;
            case 13:
                return $this->getEstimationBcMinAttPressenti();
                break;
            case 14:
                return $this->getEstimationBcMaxAttPressenti();
                break;
            case 15:
                return $this->getEstimationPfTabOuvOffre();
                break;
            case 16:
                return $this->getEstimationDqeTabOuvOffre();
                break;
            case 17:
                return $this->getAvisAttributionPresent();
                break;
            case 18:
                return $this->getEstimationPfPreinscription();
                break;
            case 19:
                return $this->getEstimationBcMinPreinscription();
                break;
            case 20:
                return $this->getEstimationBcMaxPreinscription();
                break;
            case 21:
                return $this->getEstimationDateValeurPreinscription();
                break;
            case 22:
                return $this->getLieuExecution();
                break;
            case 23:
                return $this->getDureeMarche();
                break;
            case 24:
                return $this->getDureeDateDebut();
                break;
            case 25:
                return $this->getDureeDateFin();
                break;
            case 26:
                return $this->getDureeDescription();
                break;
            case 27:
                return $this->getIdChoixMoisJour();
                break;
            case 28:
                return $this->getIdUnite();
                break;
            case 29:
                return $this->getIdNbCandidatsAdmis();
                break;
            case 30:
                return $this->getNombreCandidatsFixe();
                break;
            case 31:
                return $this->getNombreCandidatsMin();
                break;
            case 32:
                return $this->getNombreCandidatsMax();
                break;
            case 33:
                return $this->getDelaiValiditeOffres();
                break;
            case 34:
                return $this->getPhaseSuccessive();
                break;
            case 35:
                return $this->getIdGroupementAttributaire();
                break;
            case 36:
                return $this->getIdCritereAttribution();
                break;
            case 37:
                return $this->getTypePrestation();
                break;
            case 38:
                return $this->getDelaiPartiel();
                break;
            case 39:
                return $this->getAdresseRetraisDossiers();
                break;
            case 40:
                return $this->getAdresseDepotOffres();
                break;
            case 41:
                return $this->getLieuOuverturePlis();
                break;
            case 42:
                return $this->getPiecesDossierAdmin();
                break;
            case 43:
                return $this->getIdTrPiecesDossierAdmin();
                break;
            case 44:
                return $this->getPiecesDossierTech();
                break;
            case 45:
                return $this->getIdTrPiecesDossierTech();
                break;
            case 46:
                return $this->getPiecesDossierAdditif();
                break;
            case 47:
                return $this->getIdTrPiecesDossierAdditif();
                break;
            case 48:
                return $this->getIdTrAdresseRetraisDossiers();
                break;
            case 49:
                return $this->getIdTrAdresseDepotOffres();
                break;
            case 50:
                return $this->getIdTrLieuOuverturePlis();
                break;
            case 51:
                return $this->getCautionProvisoire();
                break;
            case 52:
                return $this->getPrixAquisitionPlans();
                break;
            case 53:
                return $this->getAddEchantillon();
                break;
            case 54:
                return $this->getIdTrAddEchantillon();
                break;
            case 55:
                return $this->getDateLimiteEchantillon();
                break;
            case 56:
                return $this->getAddReunion();
                break;
            case 57:
                return $this->getIdTrAddReunion();
                break;
            case 58:
                return $this->getDateReunion();
                break;
            case 59:
                return $this->getReunion();
                break;
            case 60:
                return $this->getVisitesLieux();
                break;
            case 61:
                return $this->getEchantillon();
                break;
            case 62:
                return $this->getVariantes();
                break;
            case 63:
                return $this->getVarianteCalcule();
                break;
            case 64:
                return $this->getOrganisme();
                break;
            case 65:
                return $this->getReference();
                break;
            case 66:
                return $this->getLot();
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
        if (isset($alreadyDumpedObjects['CommonTDonneeComplementaireTmp'][$this->getPrimaryKey()])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonTDonneeComplementaireTmp'][$this->getPrimaryKey()] = true;
        $keys = CommonTDonneeComplementaireTmpPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdDonneeComplementaire(),
            $keys[1] => $this->getIdTrancheTypePrix(),
            $keys[2] => $this->getIdFormePrix(),
            $keys[3] => $this->getIdCcagReference(),
            $keys[4] => $this->getReconductible(),
            $keys[5] => $this->getNombreReconductions(),
            $keys[6] => $this->getModalitesReconduction(),
            $keys[7] => $this->getVariantesAutorisees(),
            $keys[8] => $this->getVariantesTechniquesObligatoires(),
            $keys[9] => $this->getVariantesTechniquesDescription(),
            $keys[10] => $this->getDecompositionLotsTechniques(),
            $keys[11] => $this->getIdDureeDelaiDescription(),
            $keys[12] => $this->getEstimationPfAttPressenti(),
            $keys[13] => $this->getEstimationBcMinAttPressenti(),
            $keys[14] => $this->getEstimationBcMaxAttPressenti(),
            $keys[15] => $this->getEstimationPfTabOuvOffre(),
            $keys[16] => $this->getEstimationDqeTabOuvOffre(),
            $keys[17] => $this->getAvisAttributionPresent(),
            $keys[18] => $this->getEstimationPfPreinscription(),
            $keys[19] => $this->getEstimationBcMinPreinscription(),
            $keys[20] => $this->getEstimationBcMaxPreinscription(),
            $keys[21] => $this->getEstimationDateValeurPreinscription(),
            $keys[22] => $this->getLieuExecution(),
            $keys[23] => $this->getDureeMarche(),
            $keys[24] => $this->getDureeDateDebut(),
            $keys[25] => $this->getDureeDateFin(),
            $keys[26] => $this->getDureeDescription(),
            $keys[27] => $this->getIdChoixMoisJour(),
            $keys[28] => $this->getIdUnite(),
            $keys[29] => $this->getIdNbCandidatsAdmis(),
            $keys[30] => $this->getNombreCandidatsFixe(),
            $keys[31] => $this->getNombreCandidatsMin(),
            $keys[32] => $this->getNombreCandidatsMax(),
            $keys[33] => $this->getDelaiValiditeOffres(),
            $keys[34] => $this->getPhaseSuccessive(),
            $keys[35] => $this->getIdGroupementAttributaire(),
            $keys[36] => $this->getIdCritereAttribution(),
            $keys[37] => $this->getTypePrestation(),
            $keys[38] => $this->getDelaiPartiel(),
            $keys[39] => $this->getAdresseRetraisDossiers(),
            $keys[40] => $this->getAdresseDepotOffres(),
            $keys[41] => $this->getLieuOuverturePlis(),
            $keys[42] => $this->getPiecesDossierAdmin(),
            $keys[43] => $this->getIdTrPiecesDossierAdmin(),
            $keys[44] => $this->getPiecesDossierTech(),
            $keys[45] => $this->getIdTrPiecesDossierTech(),
            $keys[46] => $this->getPiecesDossierAdditif(),
            $keys[47] => $this->getIdTrPiecesDossierAdditif(),
            $keys[48] => $this->getIdTrAdresseRetraisDossiers(),
            $keys[49] => $this->getIdTrAdresseDepotOffres(),
            $keys[50] => $this->getIdTrLieuOuverturePlis(),
            $keys[51] => $this->getCautionProvisoire(),
            $keys[52] => $this->getPrixAquisitionPlans(),
            $keys[53] => $this->getAddEchantillon(),
            $keys[54] => $this->getIdTrAddEchantillon(),
            $keys[55] => $this->getDateLimiteEchantillon(),
            $keys[56] => $this->getAddReunion(),
            $keys[57] => $this->getIdTrAddReunion(),
            $keys[58] => $this->getDateReunion(),
            $keys[59] => $this->getReunion(),
            $keys[60] => $this->getVisitesLieux(),
            $keys[61] => $this->getEchantillon(),
            $keys[62] => $this->getVariantes(),
            $keys[63] => $this->getVarianteCalcule(),
            $keys[64] => $this->getOrganisme(),
            $keys[65] => $this->getReference(),
            $keys[66] => $this->getLot(),
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
        $pos = CommonTDonneeComplementaireTmpPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdDonneeComplementaire($value);
                break;
            case 1:
                $this->setIdTrancheTypePrix($value);
                break;
            case 2:
                $this->setIdFormePrix($value);
                break;
            case 3:
                $this->setIdCcagReference($value);
                break;
            case 4:
                $this->setReconductible($value);
                break;
            case 5:
                $this->setNombreReconductions($value);
                break;
            case 6:
                $this->setModalitesReconduction($value);
                break;
            case 7:
                $this->setVariantesAutorisees($value);
                break;
            case 8:
                $this->setVariantesTechniquesObligatoires($value);
                break;
            case 9:
                $this->setVariantesTechniquesDescription($value);
                break;
            case 10:
                $this->setDecompositionLotsTechniques($value);
                break;
            case 11:
                $this->setIdDureeDelaiDescription($value);
                break;
            case 12:
                $this->setEstimationPfAttPressenti($value);
                break;
            case 13:
                $this->setEstimationBcMinAttPressenti($value);
                break;
            case 14:
                $this->setEstimationBcMaxAttPressenti($value);
                break;
            case 15:
                $this->setEstimationPfTabOuvOffre($value);
                break;
            case 16:
                $this->setEstimationDqeTabOuvOffre($value);
                break;
            case 17:
                $this->setAvisAttributionPresent($value);
                break;
            case 18:
                $this->setEstimationPfPreinscription($value);
                break;
            case 19:
                $this->setEstimationBcMinPreinscription($value);
                break;
            case 20:
                $this->setEstimationBcMaxPreinscription($value);
                break;
            case 21:
                $this->setEstimationDateValeurPreinscription($value);
                break;
            case 22:
                $this->setLieuExecution($value);
                break;
            case 23:
                $this->setDureeMarche($value);
                break;
            case 24:
                $this->setDureeDateDebut($value);
                break;
            case 25:
                $this->setDureeDateFin($value);
                break;
            case 26:
                $this->setDureeDescription($value);
                break;
            case 27:
                $this->setIdChoixMoisJour($value);
                break;
            case 28:
                $this->setIdUnite($value);
                break;
            case 29:
                $this->setIdNbCandidatsAdmis($value);
                break;
            case 30:
                $this->setNombreCandidatsFixe($value);
                break;
            case 31:
                $this->setNombreCandidatsMin($value);
                break;
            case 32:
                $this->setNombreCandidatsMax($value);
                break;
            case 33:
                $this->setDelaiValiditeOffres($value);
                break;
            case 34:
                $this->setPhaseSuccessive($value);
                break;
            case 35:
                $this->setIdGroupementAttributaire($value);
                break;
            case 36:
                $this->setIdCritereAttribution($value);
                break;
            case 37:
                $this->setTypePrestation($value);
                break;
            case 38:
                $this->setDelaiPartiel($value);
                break;
            case 39:
                $this->setAdresseRetraisDossiers($value);
                break;
            case 40:
                $this->setAdresseDepotOffres($value);
                break;
            case 41:
                $this->setLieuOuverturePlis($value);
                break;
            case 42:
                $this->setPiecesDossierAdmin($value);
                break;
            case 43:
                $this->setIdTrPiecesDossierAdmin($value);
                break;
            case 44:
                $this->setPiecesDossierTech($value);
                break;
            case 45:
                $this->setIdTrPiecesDossierTech($value);
                break;
            case 46:
                $this->setPiecesDossierAdditif($value);
                break;
            case 47:
                $this->setIdTrPiecesDossierAdditif($value);
                break;
            case 48:
                $this->setIdTrAdresseRetraisDossiers($value);
                break;
            case 49:
                $this->setIdTrAdresseDepotOffres($value);
                break;
            case 50:
                $this->setIdTrLieuOuverturePlis($value);
                break;
            case 51:
                $this->setCautionProvisoire($value);
                break;
            case 52:
                $this->setPrixAquisitionPlans($value);
                break;
            case 53:
                $this->setAddEchantillon($value);
                break;
            case 54:
                $this->setIdTrAddEchantillon($value);
                break;
            case 55:
                $this->setDateLimiteEchantillon($value);
                break;
            case 56:
                $this->setAddReunion($value);
                break;
            case 57:
                $this->setIdTrAddReunion($value);
                break;
            case 58:
                $this->setDateReunion($value);
                break;
            case 59:
                $this->setReunion($value);
                break;
            case 60:
                $this->setVisitesLieux($value);
                break;
            case 61:
                $this->setEchantillon($value);
                break;
            case 62:
                $this->setVariantes($value);
                break;
            case 63:
                $this->setVarianteCalcule($value);
                break;
            case 64:
                $this->setOrganisme($value);
                break;
            case 65:
                $this->setReference($value);
                break;
            case 66:
                $this->setLot($value);
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
        $keys = CommonTDonneeComplementaireTmpPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setIdDonneeComplementaire($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setIdTrancheTypePrix($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdFormePrix($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setIdCcagReference($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setReconductible($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setNombreReconductions($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setModalitesReconduction($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setVariantesAutorisees($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setVariantesTechniquesObligatoires($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setVariantesTechniquesDescription($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setDecompositionLotsTechniques($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setIdDureeDelaiDescription($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setEstimationPfAttPressenti($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setEstimationBcMinAttPressenti($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setEstimationBcMaxAttPressenti($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setEstimationPfTabOuvOffre($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setEstimationDqeTabOuvOffre($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setAvisAttributionPresent($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setEstimationPfPreinscription($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setEstimationBcMinPreinscription($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setEstimationBcMaxPreinscription($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setEstimationDateValeurPreinscription($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setLieuExecution($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setDureeMarche($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setDureeDateDebut($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setDureeDateFin($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setDureeDescription($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setIdChoixMoisJour($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setIdUnite($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setIdNbCandidatsAdmis($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setNombreCandidatsFixe($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setNombreCandidatsMin($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setNombreCandidatsMax($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setDelaiValiditeOffres($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setPhaseSuccessive($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setIdGroupementAttributaire($arr[$keys[35]]);
        if (array_key_exists($keys[36], $arr)) $this->setIdCritereAttribution($arr[$keys[36]]);
        if (array_key_exists($keys[37], $arr)) $this->setTypePrestation($arr[$keys[37]]);
        if (array_key_exists($keys[38], $arr)) $this->setDelaiPartiel($arr[$keys[38]]);
        if (array_key_exists($keys[39], $arr)) $this->setAdresseRetraisDossiers($arr[$keys[39]]);
        if (array_key_exists($keys[40], $arr)) $this->setAdresseDepotOffres($arr[$keys[40]]);
        if (array_key_exists($keys[41], $arr)) $this->setLieuOuverturePlis($arr[$keys[41]]);
        if (array_key_exists($keys[42], $arr)) $this->setPiecesDossierAdmin($arr[$keys[42]]);
        if (array_key_exists($keys[43], $arr)) $this->setIdTrPiecesDossierAdmin($arr[$keys[43]]);
        if (array_key_exists($keys[44], $arr)) $this->setPiecesDossierTech($arr[$keys[44]]);
        if (array_key_exists($keys[45], $arr)) $this->setIdTrPiecesDossierTech($arr[$keys[45]]);
        if (array_key_exists($keys[46], $arr)) $this->setPiecesDossierAdditif($arr[$keys[46]]);
        if (array_key_exists($keys[47], $arr)) $this->setIdTrPiecesDossierAdditif($arr[$keys[47]]);
        if (array_key_exists($keys[48], $arr)) $this->setIdTrAdresseRetraisDossiers($arr[$keys[48]]);
        if (array_key_exists($keys[49], $arr)) $this->setIdTrAdresseDepotOffres($arr[$keys[49]]);
        if (array_key_exists($keys[50], $arr)) $this->setIdTrLieuOuverturePlis($arr[$keys[50]]);
        if (array_key_exists($keys[51], $arr)) $this->setCautionProvisoire($arr[$keys[51]]);
        if (array_key_exists($keys[52], $arr)) $this->setPrixAquisitionPlans($arr[$keys[52]]);
        if (array_key_exists($keys[53], $arr)) $this->setAddEchantillon($arr[$keys[53]]);
        if (array_key_exists($keys[54], $arr)) $this->setIdTrAddEchantillon($arr[$keys[54]]);
        if (array_key_exists($keys[55], $arr)) $this->setDateLimiteEchantillon($arr[$keys[55]]);
        if (array_key_exists($keys[56], $arr)) $this->setAddReunion($arr[$keys[56]]);
        if (array_key_exists($keys[57], $arr)) $this->setIdTrAddReunion($arr[$keys[57]]);
        if (array_key_exists($keys[58], $arr)) $this->setDateReunion($arr[$keys[58]]);
        if (array_key_exists($keys[59], $arr)) $this->setReunion($arr[$keys[59]]);
        if (array_key_exists($keys[60], $arr)) $this->setVisitesLieux($arr[$keys[60]]);
        if (array_key_exists($keys[61], $arr)) $this->setEchantillon($arr[$keys[61]]);
        if (array_key_exists($keys[62], $arr)) $this->setVariantes($arr[$keys[62]]);
        if (array_key_exists($keys[63], $arr)) $this->setVarianteCalcule($arr[$keys[63]]);
        if (array_key_exists($keys[64], $arr)) $this->setOrganisme($arr[$keys[64]]);
        if (array_key_exists($keys[65], $arr)) $this->setReference($arr[$keys[65]]);
        if (array_key_exists($keys[66], $arr)) $this->setLot($arr[$keys[66]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonTDonneeComplementaireTmpPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ID_DONNEE_COMPLEMENTAIRE)) $criteria->add(CommonTDonneeComplementaireTmpPeer::ID_DONNEE_COMPLEMENTAIRE, $this->id_donnee_complementaire);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ID_TRANCHE_TYPE_PRIX)) $criteria->add(CommonTDonneeComplementaireTmpPeer::ID_TRANCHE_TYPE_PRIX, $this->id_tranche_type_prix);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ID_FORME_PRIX)) $criteria->add(CommonTDonneeComplementaireTmpPeer::ID_FORME_PRIX, $this->id_forme_prix);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ID_CCAG_REFERENCE)) $criteria->add(CommonTDonneeComplementaireTmpPeer::ID_CCAG_REFERENCE, $this->id_ccag_reference);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::RECONDUCTIBLE)) $criteria->add(CommonTDonneeComplementaireTmpPeer::RECONDUCTIBLE, $this->reconductible);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::NOMBRE_RECONDUCTIONS)) $criteria->add(CommonTDonneeComplementaireTmpPeer::NOMBRE_RECONDUCTIONS, $this->nombre_reconductions);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::MODALITES_RECONDUCTION)) $criteria->add(CommonTDonneeComplementaireTmpPeer::MODALITES_RECONDUCTION, $this->modalites_reconduction);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::VARIANTES_AUTORISEES)) $criteria->add(CommonTDonneeComplementaireTmpPeer::VARIANTES_AUTORISEES, $this->variantes_autorisees);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::VARIANTES_TECHNIQUES_OBLIGATOIRES)) $criteria->add(CommonTDonneeComplementaireTmpPeer::VARIANTES_TECHNIQUES_OBLIGATOIRES, $this->variantes_techniques_obligatoires);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::VARIANTES_TECHNIQUES_DESCRIPTION)) $criteria->add(CommonTDonneeComplementaireTmpPeer::VARIANTES_TECHNIQUES_DESCRIPTION, $this->variantes_techniques_description);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::DECOMPOSITION_LOTS_TECHNIQUES)) $criteria->add(CommonTDonneeComplementaireTmpPeer::DECOMPOSITION_LOTS_TECHNIQUES, $this->decomposition_lots_techniques);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ID_DUREE_DELAI_DESCRIPTION)) $criteria->add(CommonTDonneeComplementaireTmpPeer::ID_DUREE_DELAI_DESCRIPTION, $this->id_duree_delai_description);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ESTIMATION_PF_ATT_PRESSENTI)) $criteria->add(CommonTDonneeComplementaireTmpPeer::ESTIMATION_PF_ATT_PRESSENTI, $this->estimation_pf_att_pressenti);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ESTIMATION_BC_MIN_ATT_PRESSENTI)) $criteria->add(CommonTDonneeComplementaireTmpPeer::ESTIMATION_BC_MIN_ATT_PRESSENTI, $this->estimation_bc_min_att_pressenti);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ESTIMATION_BC_MAX_ATT_PRESSENTI)) $criteria->add(CommonTDonneeComplementaireTmpPeer::ESTIMATION_BC_MAX_ATT_PRESSENTI, $this->estimation_bc_max_att_pressenti);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ESTIMATION_PF_TAB_OUV_OFFRE)) $criteria->add(CommonTDonneeComplementaireTmpPeer::ESTIMATION_PF_TAB_OUV_OFFRE, $this->estimation_pf_tab_ouv_offre);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ESTIMATION_DQE_TAB_OUV_OFFRE)) $criteria->add(CommonTDonneeComplementaireTmpPeer::ESTIMATION_DQE_TAB_OUV_OFFRE, $this->estimation_dqe_tab_ouv_offre);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::AVIS_ATTRIBUTION_PRESENT)) $criteria->add(CommonTDonneeComplementaireTmpPeer::AVIS_ATTRIBUTION_PRESENT, $this->avis_attribution_present);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ESTIMATION_PF_PREINSCRIPTION)) $criteria->add(CommonTDonneeComplementaireTmpPeer::ESTIMATION_PF_PREINSCRIPTION, $this->estimation_pf_preinscription);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ESTIMATION_BC_MIN_PREINSCRIPTION)) $criteria->add(CommonTDonneeComplementaireTmpPeer::ESTIMATION_BC_MIN_PREINSCRIPTION, $this->estimation_bc_min_preinscription);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ESTIMATION_BC_MAX_PREINSCRIPTION)) $criteria->add(CommonTDonneeComplementaireTmpPeer::ESTIMATION_BC_MAX_PREINSCRIPTION, $this->estimation_bc_max_preinscription);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ESTIMATION_DATE_VALEUR_PREINSCRIPTION)) $criteria->add(CommonTDonneeComplementaireTmpPeer::ESTIMATION_DATE_VALEUR_PREINSCRIPTION, $this->estimation_date_valeur_preinscription);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::LIEU_EXECUTION)) $criteria->add(CommonTDonneeComplementaireTmpPeer::LIEU_EXECUTION, $this->lieu_execution);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::DUREE_MARCHE)) $criteria->add(CommonTDonneeComplementaireTmpPeer::DUREE_MARCHE, $this->duree_marche);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::DUREE_DATE_DEBUT)) $criteria->add(CommonTDonneeComplementaireTmpPeer::DUREE_DATE_DEBUT, $this->duree_date_debut);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::DUREE_DATE_FIN)) $criteria->add(CommonTDonneeComplementaireTmpPeer::DUREE_DATE_FIN, $this->duree_date_fin);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::DUREE_DESCRIPTION)) $criteria->add(CommonTDonneeComplementaireTmpPeer::DUREE_DESCRIPTION, $this->duree_description);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ID_CHOIX_MOIS_JOUR)) $criteria->add(CommonTDonneeComplementaireTmpPeer::ID_CHOIX_MOIS_JOUR, $this->id_choix_mois_jour);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ID_UNITE)) $criteria->add(CommonTDonneeComplementaireTmpPeer::ID_UNITE, $this->id_unite);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ID_NB_CANDIDATS_ADMIS)) $criteria->add(CommonTDonneeComplementaireTmpPeer::ID_NB_CANDIDATS_ADMIS, $this->id_nb_candidats_admis);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::NOMBRE_CANDIDATS_FIXE)) $criteria->add(CommonTDonneeComplementaireTmpPeer::NOMBRE_CANDIDATS_FIXE, $this->nombre_candidats_fixe);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::NOMBRE_CANDIDATS_MIN)) $criteria->add(CommonTDonneeComplementaireTmpPeer::NOMBRE_CANDIDATS_MIN, $this->nombre_candidats_min);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::NOMBRE_CANDIDATS_MAX)) $criteria->add(CommonTDonneeComplementaireTmpPeer::NOMBRE_CANDIDATS_MAX, $this->nombre_candidats_max);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::DELAI_VALIDITE_OFFRES)) $criteria->add(CommonTDonneeComplementaireTmpPeer::DELAI_VALIDITE_OFFRES, $this->delai_validite_offres);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::PHASE_SUCCESSIVE)) $criteria->add(CommonTDonneeComplementaireTmpPeer::PHASE_SUCCESSIVE, $this->phase_successive);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ID_GROUPEMENT_ATTRIBUTAIRE)) $criteria->add(CommonTDonneeComplementaireTmpPeer::ID_GROUPEMENT_ATTRIBUTAIRE, $this->id_groupement_attributaire);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ID_CRITERE_ATTRIBUTION)) $criteria->add(CommonTDonneeComplementaireTmpPeer::ID_CRITERE_ATTRIBUTION, $this->id_critere_attribution);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::TYPE_PRESTATION)) $criteria->add(CommonTDonneeComplementaireTmpPeer::TYPE_PRESTATION, $this->type_prestation);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::DELAI_PARTIEL)) $criteria->add(CommonTDonneeComplementaireTmpPeer::DELAI_PARTIEL, $this->delai_partiel);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ADRESSE_RETRAIS_DOSSIERS)) $criteria->add(CommonTDonneeComplementaireTmpPeer::ADRESSE_RETRAIS_DOSSIERS, $this->adresse_retrais_dossiers);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ADRESSE_DEPOT_OFFRES)) $criteria->add(CommonTDonneeComplementaireTmpPeer::ADRESSE_DEPOT_OFFRES, $this->adresse_depot_offres);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::LIEU_OUVERTURE_PLIS)) $criteria->add(CommonTDonneeComplementaireTmpPeer::LIEU_OUVERTURE_PLIS, $this->lieu_ouverture_plis);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::PIECES_DOSSIER_ADMIN)) $criteria->add(CommonTDonneeComplementaireTmpPeer::PIECES_DOSSIER_ADMIN, $this->pieces_dossier_admin);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ID_TR_PIECES_DOSSIER_ADMIN)) $criteria->add(CommonTDonneeComplementaireTmpPeer::ID_TR_PIECES_DOSSIER_ADMIN, $this->id_tr_pieces_dossier_admin);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::PIECES_DOSSIER_TECH)) $criteria->add(CommonTDonneeComplementaireTmpPeer::PIECES_DOSSIER_TECH, $this->pieces_dossier_tech);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ID_TR_PIECES_DOSSIER_TECH)) $criteria->add(CommonTDonneeComplementaireTmpPeer::ID_TR_PIECES_DOSSIER_TECH, $this->id_tr_pieces_dossier_tech);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::PIECES_DOSSIER_ADDITIF)) $criteria->add(CommonTDonneeComplementaireTmpPeer::PIECES_DOSSIER_ADDITIF, $this->pieces_dossier_additif);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ID_TR_PIECES_DOSSIER_ADDITIF)) $criteria->add(CommonTDonneeComplementaireTmpPeer::ID_TR_PIECES_DOSSIER_ADDITIF, $this->id_tr_pieces_dossier_additif);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ID_TR_ADRESSE_RETRAIS_DOSSIERS)) $criteria->add(CommonTDonneeComplementaireTmpPeer::ID_TR_ADRESSE_RETRAIS_DOSSIERS, $this->id_tr_adresse_retrais_dossiers);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ID_TR_ADRESSE_DEPOT_OFFRES)) $criteria->add(CommonTDonneeComplementaireTmpPeer::ID_TR_ADRESSE_DEPOT_OFFRES, $this->id_tr_adresse_depot_offres);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ID_TR_LIEU_OUVERTURE_PLIS)) $criteria->add(CommonTDonneeComplementaireTmpPeer::ID_TR_LIEU_OUVERTURE_PLIS, $this->id_tr_lieu_ouverture_plis);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::CAUTION_PROVISOIRE)) $criteria->add(CommonTDonneeComplementaireTmpPeer::CAUTION_PROVISOIRE, $this->caution_provisoire);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::PRIX_AQUISITION_PLANS)) $criteria->add(CommonTDonneeComplementaireTmpPeer::PRIX_AQUISITION_PLANS, $this->prix_aquisition_plans);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ADD_ECHANTILLON)) $criteria->add(CommonTDonneeComplementaireTmpPeer::ADD_ECHANTILLON, $this->add_echantillon);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ID_TR_ADD_ECHANTILLON)) $criteria->add(CommonTDonneeComplementaireTmpPeer::ID_TR_ADD_ECHANTILLON, $this->id_tr_add_echantillon);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::DATE_LIMITE_ECHANTILLON)) $criteria->add(CommonTDonneeComplementaireTmpPeer::DATE_LIMITE_ECHANTILLON, $this->date_limite_echantillon);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ADD_REUNION)) $criteria->add(CommonTDonneeComplementaireTmpPeer::ADD_REUNION, $this->add_reunion);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ID_TR_ADD_REUNION)) $criteria->add(CommonTDonneeComplementaireTmpPeer::ID_TR_ADD_REUNION, $this->id_tr_add_reunion);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::DATE_REUNION)) $criteria->add(CommonTDonneeComplementaireTmpPeer::DATE_REUNION, $this->date_reunion);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::REUNION)) $criteria->add(CommonTDonneeComplementaireTmpPeer::REUNION, $this->reunion);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::VISITES_LIEUX)) $criteria->add(CommonTDonneeComplementaireTmpPeer::VISITES_LIEUX, $this->visites_lieux);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ECHANTILLON)) $criteria->add(CommonTDonneeComplementaireTmpPeer::ECHANTILLON, $this->echantillon);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::VARIANTES)) $criteria->add(CommonTDonneeComplementaireTmpPeer::VARIANTES, $this->variantes);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::VARIANTE_CALCULE)) $criteria->add(CommonTDonneeComplementaireTmpPeer::VARIANTE_CALCULE, $this->variante_calcule);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::ORGANISME)) $criteria->add(CommonTDonneeComplementaireTmpPeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::REFERENCE)) $criteria->add(CommonTDonneeComplementaireTmpPeer::REFERENCE, $this->reference);
        if ($this->isColumnModified(CommonTDonneeComplementaireTmpPeer::LOT)) $criteria->add(CommonTDonneeComplementaireTmpPeer::LOT, $this->lot);

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
        $criteria = new Criteria(CommonTDonneeComplementaireTmpPeer::DATABASE_NAME);
        $criteria->add(CommonTDonneeComplementaireTmpPeer::ID_DONNEE_COMPLEMENTAIRE, $this->id_donnee_complementaire);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdDonneeComplementaire();
    }

    /**
     * Generic method to set the primary key (id_donnee_complementaire column).
     *
     * @param  int $key Primary key.
     * @return void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdDonneeComplementaire($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     * @return boolean
     */
    public function isPrimaryKeyNull()
    {

        return null === $this->getIdDonneeComplementaire();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of CommonTDonneeComplementaireTmp (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setIdTrancheTypePrix($this->getIdTrancheTypePrix());
        $copyObj->setIdFormePrix($this->getIdFormePrix());
        $copyObj->setIdCcagReference($this->getIdCcagReference());
        $copyObj->setReconductible($this->getReconductible());
        $copyObj->setNombreReconductions($this->getNombreReconductions());
        $copyObj->setModalitesReconduction($this->getModalitesReconduction());
        $copyObj->setVariantesAutorisees($this->getVariantesAutorisees());
        $copyObj->setVariantesTechniquesObligatoires($this->getVariantesTechniquesObligatoires());
        $copyObj->setVariantesTechniquesDescription($this->getVariantesTechniquesDescription());
        $copyObj->setDecompositionLotsTechniques($this->getDecompositionLotsTechniques());
        $copyObj->setIdDureeDelaiDescription($this->getIdDureeDelaiDescription());
        $copyObj->setEstimationPfAttPressenti($this->getEstimationPfAttPressenti());
        $copyObj->setEstimationBcMinAttPressenti($this->getEstimationBcMinAttPressenti());
        $copyObj->setEstimationBcMaxAttPressenti($this->getEstimationBcMaxAttPressenti());
        $copyObj->setEstimationPfTabOuvOffre($this->getEstimationPfTabOuvOffre());
        $copyObj->setEstimationDqeTabOuvOffre($this->getEstimationDqeTabOuvOffre());
        $copyObj->setAvisAttributionPresent($this->getAvisAttributionPresent());
        $copyObj->setEstimationPfPreinscription($this->getEstimationPfPreinscription());
        $copyObj->setEstimationBcMinPreinscription($this->getEstimationBcMinPreinscription());
        $copyObj->setEstimationBcMaxPreinscription($this->getEstimationBcMaxPreinscription());
        $copyObj->setEstimationDateValeurPreinscription($this->getEstimationDateValeurPreinscription());
        $copyObj->setLieuExecution($this->getLieuExecution());
        $copyObj->setDureeMarche($this->getDureeMarche());
        $copyObj->setDureeDateDebut($this->getDureeDateDebut());
        $copyObj->setDureeDateFin($this->getDureeDateFin());
        $copyObj->setDureeDescription($this->getDureeDescription());
        $copyObj->setIdChoixMoisJour($this->getIdChoixMoisJour());
        $copyObj->setIdUnite($this->getIdUnite());
        $copyObj->setIdNbCandidatsAdmis($this->getIdNbCandidatsAdmis());
        $copyObj->setNombreCandidatsFixe($this->getNombreCandidatsFixe());
        $copyObj->setNombreCandidatsMin($this->getNombreCandidatsMin());
        $copyObj->setNombreCandidatsMax($this->getNombreCandidatsMax());
        $copyObj->setDelaiValiditeOffres($this->getDelaiValiditeOffres());
        $copyObj->setPhaseSuccessive($this->getPhaseSuccessive());
        $copyObj->setIdGroupementAttributaire($this->getIdGroupementAttributaire());
        $copyObj->setIdCritereAttribution($this->getIdCritereAttribution());
        $copyObj->setTypePrestation($this->getTypePrestation());
        $copyObj->setDelaiPartiel($this->getDelaiPartiel());
        $copyObj->setAdresseRetraisDossiers($this->getAdresseRetraisDossiers());
        $copyObj->setAdresseDepotOffres($this->getAdresseDepotOffres());
        $copyObj->setLieuOuverturePlis($this->getLieuOuverturePlis());
        $copyObj->setPiecesDossierAdmin($this->getPiecesDossierAdmin());
        $copyObj->setIdTrPiecesDossierAdmin($this->getIdTrPiecesDossierAdmin());
        $copyObj->setPiecesDossierTech($this->getPiecesDossierTech());
        $copyObj->setIdTrPiecesDossierTech($this->getIdTrPiecesDossierTech());
        $copyObj->setPiecesDossierAdditif($this->getPiecesDossierAdditif());
        $copyObj->setIdTrPiecesDossierAdditif($this->getIdTrPiecesDossierAdditif());
        $copyObj->setIdTrAdresseRetraisDossiers($this->getIdTrAdresseRetraisDossiers());
        $copyObj->setIdTrAdresseDepotOffres($this->getIdTrAdresseDepotOffres());
        $copyObj->setIdTrLieuOuverturePlis($this->getIdTrLieuOuverturePlis());
        $copyObj->setCautionProvisoire($this->getCautionProvisoire());
        $copyObj->setPrixAquisitionPlans($this->getPrixAquisitionPlans());
        $copyObj->setAddEchantillon($this->getAddEchantillon());
        $copyObj->setIdTrAddEchantillon($this->getIdTrAddEchantillon());
        $copyObj->setDateLimiteEchantillon($this->getDateLimiteEchantillon());
        $copyObj->setAddReunion($this->getAddReunion());
        $copyObj->setIdTrAddReunion($this->getIdTrAddReunion());
        $copyObj->setDateReunion($this->getDateReunion());
        $copyObj->setReunion($this->getReunion());
        $copyObj->setVisitesLieux($this->getVisitesLieux());
        $copyObj->setEchantillon($this->getEchantillon());
        $copyObj->setVariantes($this->getVariantes());
        $copyObj->setVarianteCalcule($this->getVarianteCalcule());
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setReference($this->getReference());
        $copyObj->setLot($this->getLot());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdDonneeComplementaire(NULL); // this is a auto-increment column, so set to default value
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
     * @return CommonTDonneeComplementaireTmp Clone of current object.
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
     * @return CommonTDonneeComplementaireTmpPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonTDonneeComplementaireTmpPeer();
        }

        return self::$peer;
    }

    /**
     * Clears the current object and sets all attributes to their default values
     */
    public function clear()
    {
        $this->id_donnee_complementaire = null;
        $this->id_tranche_type_prix = null;
        $this->id_forme_prix = null;
        $this->id_ccag_reference = null;
        $this->reconductible = null;
        $this->nombre_reconductions = null;
        $this->modalites_reconduction = null;
        $this->variantes_autorisees = null;
        $this->variantes_techniques_obligatoires = null;
        $this->variantes_techniques_description = null;
        $this->decomposition_lots_techniques = null;
        $this->id_duree_delai_description = null;
        $this->estimation_pf_att_pressenti = null;
        $this->estimation_bc_min_att_pressenti = null;
        $this->estimation_bc_max_att_pressenti = null;
        $this->estimation_pf_tab_ouv_offre = null;
        $this->estimation_dqe_tab_ouv_offre = null;
        $this->avis_attribution_present = null;
        $this->estimation_pf_preinscription = null;
        $this->estimation_bc_min_preinscription = null;
        $this->estimation_bc_max_preinscription = null;
        $this->estimation_date_valeur_preinscription = null;
        $this->lieu_execution = null;
        $this->duree_marche = null;
        $this->duree_date_debut = null;
        $this->duree_date_fin = null;
        $this->duree_description = null;
        $this->id_choix_mois_jour = null;
        $this->id_unite = null;
        $this->id_nb_candidats_admis = null;
        $this->nombre_candidats_fixe = null;
        $this->nombre_candidats_min = null;
        $this->nombre_candidats_max = null;
        $this->delai_validite_offres = null;
        $this->phase_successive = null;
        $this->id_groupement_attributaire = null;
        $this->id_critere_attribution = null;
        $this->type_prestation = null;
        $this->delai_partiel = null;
        $this->adresse_retrais_dossiers = null;
        $this->adresse_depot_offres = null;
        $this->lieu_ouverture_plis = null;
        $this->pieces_dossier_admin = null;
        $this->id_tr_pieces_dossier_admin = null;
        $this->pieces_dossier_tech = null;
        $this->id_tr_pieces_dossier_tech = null;
        $this->pieces_dossier_additif = null;
        $this->id_tr_pieces_dossier_additif = null;
        $this->id_tr_adresse_retrais_dossiers = null;
        $this->id_tr_adresse_depot_offres = null;
        $this->id_tr_lieu_ouverture_plis = null;
        $this->caution_provisoire = null;
        $this->prix_aquisition_plans = null;
        $this->add_echantillon = null;
        $this->id_tr_add_echantillon = null;
        $this->date_limite_echantillon = null;
        $this->add_reunion = null;
        $this->id_tr_add_reunion = null;
        $this->date_reunion = null;
        $this->reunion = null;
        $this->visites_lieux = null;
        $this->echantillon = null;
        $this->variantes = null;
        $this->variante_calcule = null;
        $this->organisme = null;
        $this->reference = null;
        $this->lot = null;
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
        return (string) $this->exportTo(CommonTDonneeComplementaireTmpPeer::DEFAULT_STRING_FORMAT);
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
