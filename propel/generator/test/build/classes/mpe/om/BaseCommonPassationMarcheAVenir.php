<?php


/**
 * Base class that represents a row from the 'passation_marche_a_venir' table.
 *
 * 
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonPassationMarcheAVenir extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonPassationMarcheAVenirPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonPassationMarcheAVenirPeer
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
     * @var        string
     */
    protected $organisme;

    /**
     * The value for the id_passation_consultation field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_passation_consultation;

    /**
     * The value for the lot field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $lot;

    /**
     * The value for the montant_estime field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $montant_estime;

    /**
     * The value for the id_nature_acte_juridique field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $id_nature_acte_juridique;

    /**
     * The value for the forme_groupement field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $forme_groupement;

    /**
     * The value for the variante_autorisee field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $variante_autorisee;

    /**
     * The value for the variante_technique_obligatoire field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $variante_technique_obligatoire;

    /**
     * The value for the nombre_variante_technique field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $nombre_variante_technique;

    /**
     * The value for the description_variante_technique field.
     * @var        string
     */
    protected $description_variante_technique;

    /**
     * The value for the mode_execution_contrat field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $mode_execution_contrat;

    /**
     * The value for the type_bon_commande field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $type_bon_commande;

    /**
     * The value for the min_bon_commande field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $min_bon_commande;

    /**
     * The value for the max_bon_commande field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $max_bon_commande;

    /**
     * The value for the duree_execution_marche_hors_reconduction field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $duree_execution_marche_hors_reconduction;

    /**
     * The value for the nombre_reconduction field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $nombre_reconduction;

    /**
     * The value for the duree_total_marche field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $duree_total_marche;

    /**
     * The value for the ccag_applicable field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $ccag_applicable;

    /**
     * The value for the marche_transversal field.
     * Note: this column has a database default value of: '0'
     * @var        string
     */
    protected $marche_transversal;

    /**
     * The value for the date_reception_analyse_offre field.
     * @var        string
     */
    protected $date_reception_analyse_offre;

    /**
     * The value for the date_formulation_observation_projet_rapport field.
     * @var        string
     */
    protected $date_formulation_observation_projet_rapport;

    /**
     * The value for the date_retour_projet_rapport_finalise field.
     * @var        string
     */
    protected $date_retour_projet_rapport_finalise;

    /**
     * The value for the date_validation_projet_rapport field.
     * @var        string
     */
    protected $date_validation_projet_rapport;

    /**
     * The value for the projet_rapport_vu_par field.
     * @var        int
     */
    protected $projet_rapport_vu_par;

    /**
     * The value for the date_reunion_attribution field.
     * @var        string
     */
    protected $date_reunion_attribution;

    /**
     * The value for the decision field.
     * @var        int
     */
    protected $decision;

    /**
     * The value for the date_envoi_courrier_condidat_non_retenu field.
     * @var        string
     */
    protected $date_envoi_courrier_condidat_non_retenu;

    /**
     * The value for the date_signature_marche_pa field.
     * @var        string
     */
    protected $date_signature_marche_pa;

    /**
     * The value for the date_reception_controle_legalite field.
     * @var        string
     */
    protected $date_reception_controle_legalite;

    /**
     * The value for the date_formulation_observation_dossier field.
     * @var        string
     */
    protected $date_formulation_observation_dossier;

    /**
     * The value for the date_retour_dossier_finalise field.
     * @var        string
     */
    protected $date_retour_dossier_finalise;

    /**
     * The value for the date_transmission_prefecture field.
     * @var        string
     */
    protected $date_transmission_prefecture;

    /**
     * The value for the dossier_vu_par field.
     * @var        int
     */
    protected $dossier_vu_par;

    /**
     * The value for the date_validation_rapport_information field.
     * @var        string
     */
    protected $date_validation_rapport_information;

    /**
     * The value for the commentaire field.
     * @var        string
     */
    protected $commentaire;

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
        $this->id_passation_consultation = 0;
        $this->lot = 0;
        $this->montant_estime = '0';
        $this->id_nature_acte_juridique = 0;
        $this->forme_groupement = 0;
        $this->variante_autorisee = '0';
        $this->variante_technique_obligatoire = '0';
        $this->nombre_variante_technique = 0;
        $this->mode_execution_contrat = 0;
        $this->type_bon_commande = 0;
        $this->min_bon_commande = '0';
        $this->max_bon_commande = '0';
        $this->duree_execution_marche_hors_reconduction = 0;
        $this->nombre_reconduction = 0;
        $this->duree_total_marche = 0;
        $this->ccag_applicable = 0;
        $this->marche_transversal = '0';
    }

    /**
     * Initializes internal state of BaseCommonPassationMarcheAVenir object.
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
     * Get the [id_passation_consultation] column value.
     * 
     * @return int
     */
    public function getIdPassationConsultation()
    {

        return $this->id_passation_consultation;
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
     * Get the [montant_estime] column value.
     * 
     * @return string
     */
    public function getMontantEstime()
    {

        return $this->montant_estime;
    }

    /**
     * Get the [id_nature_acte_juridique] column value.
     * 
     * @return int
     */
    public function getIdNatureActeJuridique()
    {

        return $this->id_nature_acte_juridique;
    }

    /**
     * Get the [forme_groupement] column value.
     * 
     * @return int
     */
    public function getFormeGroupement()
    {

        return $this->forme_groupement;
    }

    /**
     * Get the [variante_autorisee] column value.
     * 
     * @return string
     */
    public function getVarianteAutorisee()
    {

        return $this->variante_autorisee;
    }

    /**
     * Get the [variante_technique_obligatoire] column value.
     * 
     * @return string
     */
    public function getVarianteTechniqueObligatoire()
    {

        return $this->variante_technique_obligatoire;
    }

    /**
     * Get the [nombre_variante_technique] column value.
     * 
     * @return int
     */
    public function getNombreVarianteTechnique()
    {

        return $this->nombre_variante_technique;
    }

    /**
     * Get the [description_variante_technique] column value.
     * 
     * @return string
     */
    public function getDescriptionVarianteTechnique()
    {

        return $this->description_variante_technique;
    }

    /**
     * Get the [mode_execution_contrat] column value.
     * 
     * @return int
     */
    public function getModeExecutionContrat()
    {

        return $this->mode_execution_contrat;
    }

    /**
     * Get the [type_bon_commande] column value.
     * 
     * @return int
     */
    public function getTypeBonCommande()
    {

        return $this->type_bon_commande;
    }

    /**
     * Get the [min_bon_commande] column value.
     * 
     * @return string
     */
    public function getMinBonCommande()
    {

        return $this->min_bon_commande;
    }

    /**
     * Get the [max_bon_commande] column value.
     * 
     * @return string
     */
    public function getMaxBonCommande()
    {

        return $this->max_bon_commande;
    }

    /**
     * Get the [duree_execution_marche_hors_reconduction] column value.
     * 
     * @return int
     */
    public function getDureeExecutionMarcheHorsReconduction()
    {

        return $this->duree_execution_marche_hors_reconduction;
    }

    /**
     * Get the [nombre_reconduction] column value.
     * 
     * @return int
     */
    public function getNombreReconduction()
    {

        return $this->nombre_reconduction;
    }

    /**
     * Get the [duree_total_marche] column value.
     * 
     * @return int
     */
    public function getDureeTotalMarche()
    {

        return $this->duree_total_marche;
    }

    /**
     * Get the [ccag_applicable] column value.
     * 
     * @return int
     */
    public function getCcagApplicable()
    {

        return $this->ccag_applicable;
    }

    /**
     * Get the [marche_transversal] column value.
     * 
     * @return string
     */
    public function getMarcheTransversal()
    {

        return $this->marche_transversal;
    }

    /**
     * Get the [date_reception_analyse_offre] column value.
     * 
     * @return string
     */
    public function getDateReceptionAnalyseOffre()
    {

        return $this->date_reception_analyse_offre;
    }

    /**
     * Get the [date_formulation_observation_projet_rapport] column value.
     * 
     * @return string
     */
    public function getDateFormulationObservationProjetRapport()
    {

        return $this->date_formulation_observation_projet_rapport;
    }

    /**
     * Get the [date_retour_projet_rapport_finalise] column value.
     * 
     * @return string
     */
    public function getDateRetourProjetRapportFinalise()
    {

        return $this->date_retour_projet_rapport_finalise;
    }

    /**
     * Get the [date_validation_projet_rapport] column value.
     * 
     * @return string
     */
    public function getDateValidationProjetRapport()
    {

        return $this->date_validation_projet_rapport;
    }

    /**
     * Get the [projet_rapport_vu_par] column value.
     * 
     * @return int
     */
    public function getProjetRapportVuPar()
    {

        return $this->projet_rapport_vu_par;
    }

    /**
     * Get the [date_reunion_attribution] column value.
     * 
     * @return string
     */
    public function getDateReunionAttribution()
    {

        return $this->date_reunion_attribution;
    }

    /**
     * Get the [decision] column value.
     * 
     * @return int
     */
    public function getDecision()
    {

        return $this->decision;
    }

    /**
     * Get the [date_envoi_courrier_condidat_non_retenu] column value.
     * 
     * @return string
     */
    public function getDateEnvoiCourrierCondidatNonRetenu()
    {

        return $this->date_envoi_courrier_condidat_non_retenu;
    }

    /**
     * Get the [date_signature_marche_pa] column value.
     * 
     * @return string
     */
    public function getDateSignatureMarchePa()
    {

        return $this->date_signature_marche_pa;
    }

    /**
     * Get the [date_reception_controle_legalite] column value.
     * 
     * @return string
     */
    public function getDateReceptionControleLegalite()
    {

        return $this->date_reception_controle_legalite;
    }

    /**
     * Get the [date_formulation_observation_dossier] column value.
     * 
     * @return string
     */
    public function getDateFormulationObservationDossier()
    {

        return $this->date_formulation_observation_dossier;
    }

    /**
     * Get the [date_retour_dossier_finalise] column value.
     * 
     * @return string
     */
    public function getDateRetourDossierFinalise()
    {

        return $this->date_retour_dossier_finalise;
    }

    /**
     * Get the [date_transmission_prefecture] column value.
     * 
     * @return string
     */
    public function getDateTransmissionPrefecture()
    {

        return $this->date_transmission_prefecture;
    }

    /**
     * Get the [dossier_vu_par] column value.
     * 
     * @return int
     */
    public function getDossierVuPar()
    {

        return $this->dossier_vu_par;
    }

    /**
     * Get the [date_validation_rapport_information] column value.
     * 
     * @return string
     */
    public function getDateValidationRapportInformation()
    {

        return $this->date_validation_rapport_information;
    }

    /**
     * Get the [commentaire] column value.
     * 
     * @return string
     */
    public function getCommentaire()
    {

        return $this->commentaire;
    }

    /**
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonPassationMarcheAVenir The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonPassationMarcheAVenirPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonPassationMarcheAVenir The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonPassationMarcheAVenirPeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [id_passation_consultation] column.
     * 
     * @param int $v new value
     * @return CommonPassationMarcheAVenir The current object (for fluent API support)
     */
    public function setIdPassationConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_passation_consultation !== $v) {
            $this->id_passation_consultation = $v;
            $this->modifiedColumns[] = CommonPassationMarcheAVenirPeer::ID_PASSATION_CONSULTATION;
        }


        return $this;
    } // setIdPassationConsultation()

    /**
     * Set the value of [lot] column.
     * 
     * @param int $v new value
     * @return CommonPassationMarcheAVenir The current object (for fluent API support)
     */
    public function setLot($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->lot !== $v) {
            $this->lot = $v;
            $this->modifiedColumns[] = CommonPassationMarcheAVenirPeer::LOT;
        }


        return $this;
    } // setLot()

    /**
     * Set the value of [montant_estime] column.
     * 
     * @param string $v new value
     * @return CommonPassationMarcheAVenir The current object (for fluent API support)
     */
    public function setMontantEstime($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->montant_estime !== $v) {
            $this->montant_estime = $v;
            $this->modifiedColumns[] = CommonPassationMarcheAVenirPeer::MONTANT_ESTIME;
        }


        return $this;
    } // setMontantEstime()

    /**
     * Set the value of [id_nature_acte_juridique] column.
     * 
     * @param int $v new value
     * @return CommonPassationMarcheAVenir The current object (for fluent API support)
     */
    public function setIdNatureActeJuridique($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_nature_acte_juridique !== $v) {
            $this->id_nature_acte_juridique = $v;
            $this->modifiedColumns[] = CommonPassationMarcheAVenirPeer::ID_NATURE_ACTE_JURIDIQUE;
        }


        return $this;
    } // setIdNatureActeJuridique()

    /**
     * Set the value of [forme_groupement] column.
     * 
     * @param int $v new value
     * @return CommonPassationMarcheAVenir The current object (for fluent API support)
     */
    public function setFormeGroupement($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->forme_groupement !== $v) {
            $this->forme_groupement = $v;
            $this->modifiedColumns[] = CommonPassationMarcheAVenirPeer::FORME_GROUPEMENT;
        }


        return $this;
    } // setFormeGroupement()

    /**
     * Set the value of [variante_autorisee] column.
     * 
     * @param string $v new value
     * @return CommonPassationMarcheAVenir The current object (for fluent API support)
     */
    public function setVarianteAutorisee($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->variante_autorisee !== $v) {
            $this->variante_autorisee = $v;
            $this->modifiedColumns[] = CommonPassationMarcheAVenirPeer::VARIANTE_AUTORISEE;
        }


        return $this;
    } // setVarianteAutorisee()

    /**
     * Set the value of [variante_technique_obligatoire] column.
     * 
     * @param string $v new value
     * @return CommonPassationMarcheAVenir The current object (for fluent API support)
     */
    public function setVarianteTechniqueObligatoire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->variante_technique_obligatoire !== $v) {
            $this->variante_technique_obligatoire = $v;
            $this->modifiedColumns[] = CommonPassationMarcheAVenirPeer::VARIANTE_TECHNIQUE_OBLIGATOIRE;
        }


        return $this;
    } // setVarianteTechniqueObligatoire()

    /**
     * Set the value of [nombre_variante_technique] column.
     * 
     * @param int $v new value
     * @return CommonPassationMarcheAVenir The current object (for fluent API support)
     */
    public function setNombreVarianteTechnique($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->nombre_variante_technique !== $v) {
            $this->nombre_variante_technique = $v;
            $this->modifiedColumns[] = CommonPassationMarcheAVenirPeer::NOMBRE_VARIANTE_TECHNIQUE;
        }


        return $this;
    } // setNombreVarianteTechnique()

    /**
     * Set the value of [description_variante_technique] column.
     * 
     * @param string $v new value
     * @return CommonPassationMarcheAVenir The current object (for fluent API support)
     */
    public function setDescriptionVarianteTechnique($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->description_variante_technique !== $v) {
            $this->description_variante_technique = $v;
            $this->modifiedColumns[] = CommonPassationMarcheAVenirPeer::DESCRIPTION_VARIANTE_TECHNIQUE;
        }


        return $this;
    } // setDescriptionVarianteTechnique()

    /**
     * Set the value of [mode_execution_contrat] column.
     * 
     * @param int $v new value
     * @return CommonPassationMarcheAVenir The current object (for fluent API support)
     */
    public function setModeExecutionContrat($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mode_execution_contrat !== $v) {
            $this->mode_execution_contrat = $v;
            $this->modifiedColumns[] = CommonPassationMarcheAVenirPeer::MODE_EXECUTION_CONTRAT;
        }


        return $this;
    } // setModeExecutionContrat()

    /**
     * Set the value of [type_bon_commande] column.
     * 
     * @param int $v new value
     * @return CommonPassationMarcheAVenir The current object (for fluent API support)
     */
    public function setTypeBonCommande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->type_bon_commande !== $v) {
            $this->type_bon_commande = $v;
            $this->modifiedColumns[] = CommonPassationMarcheAVenirPeer::TYPE_BON_COMMANDE;
        }


        return $this;
    } // setTypeBonCommande()

    /**
     * Set the value of [min_bon_commande] column.
     * 
     * @param string $v new value
     * @return CommonPassationMarcheAVenir The current object (for fluent API support)
     */
    public function setMinBonCommande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->min_bon_commande !== $v) {
            $this->min_bon_commande = $v;
            $this->modifiedColumns[] = CommonPassationMarcheAVenirPeer::MIN_BON_COMMANDE;
        }


        return $this;
    } // setMinBonCommande()

    /**
     * Set the value of [max_bon_commande] column.
     * 
     * @param string $v new value
     * @return CommonPassationMarcheAVenir The current object (for fluent API support)
     */
    public function setMaxBonCommande($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->max_bon_commande !== $v) {
            $this->max_bon_commande = $v;
            $this->modifiedColumns[] = CommonPassationMarcheAVenirPeer::MAX_BON_COMMANDE;
        }


        return $this;
    } // setMaxBonCommande()

    /**
     * Set the value of [duree_execution_marche_hors_reconduction] column.
     * 
     * @param int $v new value
     * @return CommonPassationMarcheAVenir The current object (for fluent API support)
     */
    public function setDureeExecutionMarcheHorsReconduction($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->duree_execution_marche_hors_reconduction !== $v) {
            $this->duree_execution_marche_hors_reconduction = $v;
            $this->modifiedColumns[] = CommonPassationMarcheAVenirPeer::DUREE_EXECUTION_MARCHE_HORS_RECONDUCTION;
        }


        return $this;
    } // setDureeExecutionMarcheHorsReconduction()

    /**
     * Set the value of [nombre_reconduction] column.
     * 
     * @param int $v new value
     * @return CommonPassationMarcheAVenir The current object (for fluent API support)
     */
    public function setNombreReconduction($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->nombre_reconduction !== $v) {
            $this->nombre_reconduction = $v;
            $this->modifiedColumns[] = CommonPassationMarcheAVenirPeer::NOMBRE_RECONDUCTION;
        }


        return $this;
    } // setNombreReconduction()

    /**
     * Set the value of [duree_total_marche] column.
     * 
     * @param int $v new value
     * @return CommonPassationMarcheAVenir The current object (for fluent API support)
     */
    public function setDureeTotalMarche($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->duree_total_marche !== $v) {
            $this->duree_total_marche = $v;
            $this->modifiedColumns[] = CommonPassationMarcheAVenirPeer::DUREE_TOTAL_MARCHE;
        }


        return $this;
    } // setDureeTotalMarche()

    /**
     * Set the value of [ccag_applicable] column.
     * 
     * @param int $v new value
     * @return CommonPassationMarcheAVenir The current object (for fluent API support)
     */
    public function setCcagApplicable($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->ccag_applicable !== $v) {
            $this->ccag_applicable = $v;
            $this->modifiedColumns[] = CommonPassationMarcheAVenirPeer::CCAG_APPLICABLE;
        }


        return $this;
    } // setCcagApplicable()

    /**
     * Set the value of [marche_transversal] column.
     * 
     * @param string $v new value
     * @return CommonPassationMarcheAVenir The current object (for fluent API support)
     */
    public function setMarcheTransversal($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->marche_transversal !== $v) {
            $this->marche_transversal = $v;
            $this->modifiedColumns[] = CommonPassationMarcheAVenirPeer::MARCHE_TRANSVERSAL;
        }


        return $this;
    } // setMarcheTransversal()

    /**
     * Set the value of [date_reception_analyse_offre] column.
     * 
     * @param string $v new value
     * @return CommonPassationMarcheAVenir The current object (for fluent API support)
     */
    public function setDateReceptionAnalyseOffre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_reception_analyse_offre !== $v) {
            $this->date_reception_analyse_offre = $v;
            $this->modifiedColumns[] = CommonPassationMarcheAVenirPeer::DATE_RECEPTION_ANALYSE_OFFRE;
        }


        return $this;
    } // setDateReceptionAnalyseOffre()

    /**
     * Set the value of [date_formulation_observation_projet_rapport] column.
     * 
     * @param string $v new value
     * @return CommonPassationMarcheAVenir The current object (for fluent API support)
     */
    public function setDateFormulationObservationProjetRapport($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_formulation_observation_projet_rapport !== $v) {
            $this->date_formulation_observation_projet_rapport = $v;
            $this->modifiedColumns[] = CommonPassationMarcheAVenirPeer::DATE_FORMULATION_OBSERVATION_PROJET_RAPPORT;
        }


        return $this;
    } // setDateFormulationObservationProjetRapport()

    /**
     * Set the value of [date_retour_projet_rapport_finalise] column.
     * 
     * @param string $v new value
     * @return CommonPassationMarcheAVenir The current object (for fluent API support)
     */
    public function setDateRetourProjetRapportFinalise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_retour_projet_rapport_finalise !== $v) {
            $this->date_retour_projet_rapport_finalise = $v;
            $this->modifiedColumns[] = CommonPassationMarcheAVenirPeer::DATE_RETOUR_PROJET_RAPPORT_FINALISE;
        }


        return $this;
    } // setDateRetourProjetRapportFinalise()

    /**
     * Set the value of [date_validation_projet_rapport] column.
     * 
     * @param string $v new value
     * @return CommonPassationMarcheAVenir The current object (for fluent API support)
     */
    public function setDateValidationProjetRapport($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_validation_projet_rapport !== $v) {
            $this->date_validation_projet_rapport = $v;
            $this->modifiedColumns[] = CommonPassationMarcheAVenirPeer::DATE_VALIDATION_PROJET_RAPPORT;
        }


        return $this;
    } // setDateValidationProjetRapport()

    /**
     * Set the value of [projet_rapport_vu_par] column.
     * 
     * @param int $v new value
     * @return CommonPassationMarcheAVenir The current object (for fluent API support)
     */
    public function setProjetRapportVuPar($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->projet_rapport_vu_par !== $v) {
            $this->projet_rapport_vu_par = $v;
            $this->modifiedColumns[] = CommonPassationMarcheAVenirPeer::PROJET_RAPPORT_VU_PAR;
        }


        return $this;
    } // setProjetRapportVuPar()

    /**
     * Set the value of [date_reunion_attribution] column.
     * 
     * @param string $v new value
     * @return CommonPassationMarcheAVenir The current object (for fluent API support)
     */
    public function setDateReunionAttribution($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_reunion_attribution !== $v) {
            $this->date_reunion_attribution = $v;
            $this->modifiedColumns[] = CommonPassationMarcheAVenirPeer::DATE_REUNION_ATTRIBUTION;
        }


        return $this;
    } // setDateReunionAttribution()

    /**
     * Set the value of [decision] column.
     * 
     * @param int $v new value
     * @return CommonPassationMarcheAVenir The current object (for fluent API support)
     */
    public function setDecision($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->decision !== $v) {
            $this->decision = $v;
            $this->modifiedColumns[] = CommonPassationMarcheAVenirPeer::DECISION;
        }


        return $this;
    } // setDecision()

    /**
     * Set the value of [date_envoi_courrier_condidat_non_retenu] column.
     * 
     * @param string $v new value
     * @return CommonPassationMarcheAVenir The current object (for fluent API support)
     */
    public function setDateEnvoiCourrierCondidatNonRetenu($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_envoi_courrier_condidat_non_retenu !== $v) {
            $this->date_envoi_courrier_condidat_non_retenu = $v;
            $this->modifiedColumns[] = CommonPassationMarcheAVenirPeer::DATE_ENVOI_COURRIER_CONDIDAT_NON_RETENU;
        }


        return $this;
    } // setDateEnvoiCourrierCondidatNonRetenu()

    /**
     * Set the value of [date_signature_marche_pa] column.
     * 
     * @param string $v new value
     * @return CommonPassationMarcheAVenir The current object (for fluent API support)
     */
    public function setDateSignatureMarchePa($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_signature_marche_pa !== $v) {
            $this->date_signature_marche_pa = $v;
            $this->modifiedColumns[] = CommonPassationMarcheAVenirPeer::DATE_SIGNATURE_MARCHE_PA;
        }


        return $this;
    } // setDateSignatureMarchePa()

    /**
     * Set the value of [date_reception_controle_legalite] column.
     * 
     * @param string $v new value
     * @return CommonPassationMarcheAVenir The current object (for fluent API support)
     */
    public function setDateReceptionControleLegalite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_reception_controle_legalite !== $v) {
            $this->date_reception_controle_legalite = $v;
            $this->modifiedColumns[] = CommonPassationMarcheAVenirPeer::DATE_RECEPTION_CONTROLE_LEGALITE;
        }


        return $this;
    } // setDateReceptionControleLegalite()

    /**
     * Set the value of [date_formulation_observation_dossier] column.
     * 
     * @param string $v new value
     * @return CommonPassationMarcheAVenir The current object (for fluent API support)
     */
    public function setDateFormulationObservationDossier($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_formulation_observation_dossier !== $v) {
            $this->date_formulation_observation_dossier = $v;
            $this->modifiedColumns[] = CommonPassationMarcheAVenirPeer::DATE_FORMULATION_OBSERVATION_DOSSIER;
        }


        return $this;
    } // setDateFormulationObservationDossier()

    /**
     * Set the value of [date_retour_dossier_finalise] column.
     * 
     * @param string $v new value
     * @return CommonPassationMarcheAVenir The current object (for fluent API support)
     */
    public function setDateRetourDossierFinalise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_retour_dossier_finalise !== $v) {
            $this->date_retour_dossier_finalise = $v;
            $this->modifiedColumns[] = CommonPassationMarcheAVenirPeer::DATE_RETOUR_DOSSIER_FINALISE;
        }


        return $this;
    } // setDateRetourDossierFinalise()

    /**
     * Set the value of [date_transmission_prefecture] column.
     * 
     * @param string $v new value
     * @return CommonPassationMarcheAVenir The current object (for fluent API support)
     */
    public function setDateTransmissionPrefecture($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_transmission_prefecture !== $v) {
            $this->date_transmission_prefecture = $v;
            $this->modifiedColumns[] = CommonPassationMarcheAVenirPeer::DATE_TRANSMISSION_PREFECTURE;
        }


        return $this;
    } // setDateTransmissionPrefecture()

    /**
     * Set the value of [dossier_vu_par] column.
     * 
     * @param int $v new value
     * @return CommonPassationMarcheAVenir The current object (for fluent API support)
     */
    public function setDossierVuPar($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->dossier_vu_par !== $v) {
            $this->dossier_vu_par = $v;
            $this->modifiedColumns[] = CommonPassationMarcheAVenirPeer::DOSSIER_VU_PAR;
        }


        return $this;
    } // setDossierVuPar()

    /**
     * Set the value of [date_validation_rapport_information] column.
     * 
     * @param string $v new value
     * @return CommonPassationMarcheAVenir The current object (for fluent API support)
     */
    public function setDateValidationRapportInformation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_validation_rapport_information !== $v) {
            $this->date_validation_rapport_information = $v;
            $this->modifiedColumns[] = CommonPassationMarcheAVenirPeer::DATE_VALIDATION_RAPPORT_INFORMATION;
        }


        return $this;
    } // setDateValidationRapportInformation()

    /**
     * Set the value of [commentaire] column.
     * 
     * @param string $v new value
     * @return CommonPassationMarcheAVenir The current object (for fluent API support)
     */
    public function setCommentaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commentaire !== $v) {
            $this->commentaire = $v;
            $this->modifiedColumns[] = CommonPassationMarcheAVenirPeer::COMMENTAIRE;
        }


        return $this;
    } // setCommentaire()

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
            if ($this->id_passation_consultation !== 0) {
                return false;
            }

            if ($this->lot !== 0) {
                return false;
            }

            if ($this->montant_estime !== '0') {
                return false;
            }

            if ($this->id_nature_acte_juridique !== 0) {
                return false;
            }

            if ($this->forme_groupement !== 0) {
                return false;
            }

            if ($this->variante_autorisee !== '0') {
                return false;
            }

            if ($this->variante_technique_obligatoire !== '0') {
                return false;
            }

            if ($this->nombre_variante_technique !== 0) {
                return false;
            }

            if ($this->mode_execution_contrat !== 0) {
                return false;
            }

            if ($this->type_bon_commande !== 0) {
                return false;
            }

            if ($this->min_bon_commande !== '0') {
                return false;
            }

            if ($this->max_bon_commande !== '0') {
                return false;
            }

            if ($this->duree_execution_marche_hors_reconduction !== 0) {
                return false;
            }

            if ($this->nombre_reconduction !== 0) {
                return false;
            }

            if ($this->duree_total_marche !== 0) {
                return false;
            }

            if ($this->ccag_applicable !== 0) {
                return false;
            }

            if ($this->marche_transversal !== '0') {
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
            $this->id_passation_consultation = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->lot = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->montant_estime = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
            $this->id_nature_acte_juridique = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->forme_groupement = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
            $this->variante_autorisee = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->variante_technique_obligatoire = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->nombre_variante_technique = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
            $this->description_variante_technique = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->mode_execution_contrat = ($row[$startcol + 11] !== null) ? (int) $row[$startcol + 11] : null;
            $this->type_bon_commande = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
            $this->min_bon_commande = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->max_bon_commande = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->duree_execution_marche_hors_reconduction = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
            $this->nombre_reconduction = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
            $this->duree_total_marche = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
            $this->ccag_applicable = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
            $this->marche_transversal = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->date_reception_analyse_offre = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->date_formulation_observation_projet_rapport = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
            $this->date_retour_projet_rapport_finalise = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->date_validation_projet_rapport = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->projet_rapport_vu_par = ($row[$startcol + 24] !== null) ? (int) $row[$startcol + 24] : null;
            $this->date_reunion_attribution = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->decision = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
            $this->date_envoi_courrier_condidat_non_retenu = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->date_signature_marche_pa = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->date_reception_controle_legalite = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->date_formulation_observation_dossier = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->date_retour_dossier_finalise = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->date_transmission_prefecture = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->dossier_vu_par = ($row[$startcol + 33] !== null) ? (int) $row[$startcol + 33] : null;
            $this->date_validation_rapport_information = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
            $this->commentaire = ($row[$startcol + 35] !== null) ? (string) $row[$startcol + 35] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 36; // 36 = CommonPassationMarcheAVenirPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonPassationMarcheAVenir object", $e);
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
            $con = Propel::getConnection(CommonPassationMarcheAVenirPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonPassationMarcheAVenirPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonPassationMarcheAVenirPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonPassationMarcheAVenirQuery::create()
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
            $con = Propel::getConnection(CommonPassationMarcheAVenirPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonPassationMarcheAVenirPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonPassationMarcheAVenirPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonPassationMarcheAVenirPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::ID_PASSATION_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`id_passation_consultation`';
        }
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::LOT)) {
            $modifiedColumns[':p' . $index++]  = '`lot`';
        }
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::MONTANT_ESTIME)) {
            $modifiedColumns[':p' . $index++]  = '`montant_estime`';
        }
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::ID_NATURE_ACTE_JURIDIQUE)) {
            $modifiedColumns[':p' . $index++]  = '`id_nature_acte_juridique`';
        }
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::FORME_GROUPEMENT)) {
            $modifiedColumns[':p' . $index++]  = '`forme_groupement`';
        }
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::VARIANTE_AUTORISEE)) {
            $modifiedColumns[':p' . $index++]  = '`variante_autorisee`';
        }
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::VARIANTE_TECHNIQUE_OBLIGATOIRE)) {
            $modifiedColumns[':p' . $index++]  = '`variante_technique_obligatoire`';
        }
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::NOMBRE_VARIANTE_TECHNIQUE)) {
            $modifiedColumns[':p' . $index++]  = '`nombre_variante_technique`';
        }
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::DESCRIPTION_VARIANTE_TECHNIQUE)) {
            $modifiedColumns[':p' . $index++]  = '`description_variante_technique`';
        }
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::MODE_EXECUTION_CONTRAT)) {
            $modifiedColumns[':p' . $index++]  = '`mode_execution_contrat`';
        }
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::TYPE_BON_COMMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`type_bon_commande`';
        }
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::MIN_BON_COMMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`min_bon_commande`';
        }
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::MAX_BON_COMMANDE)) {
            $modifiedColumns[':p' . $index++]  = '`max_bon_commande`';
        }
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::DUREE_EXECUTION_MARCHE_HORS_RECONDUCTION)) {
            $modifiedColumns[':p' . $index++]  = '`duree_execution_marche_hors_reconduction`';
        }
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::NOMBRE_RECONDUCTION)) {
            $modifiedColumns[':p' . $index++]  = '`nombre_reconduction`';
        }
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::DUREE_TOTAL_MARCHE)) {
            $modifiedColumns[':p' . $index++]  = '`duree_total_marche`';
        }
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::CCAG_APPLICABLE)) {
            $modifiedColumns[':p' . $index++]  = '`ccag_applicable`';
        }
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::MARCHE_TRANSVERSAL)) {
            $modifiedColumns[':p' . $index++]  = '`marche_transversal`';
        }
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::DATE_RECEPTION_ANALYSE_OFFRE)) {
            $modifiedColumns[':p' . $index++]  = '`date_reception_analyse_offre`';
        }
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::DATE_FORMULATION_OBSERVATION_PROJET_RAPPORT)) {
            $modifiedColumns[':p' . $index++]  = '`date_formulation_observation_projet_rapport`';
        }
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::DATE_RETOUR_PROJET_RAPPORT_FINALISE)) {
            $modifiedColumns[':p' . $index++]  = '`date_retour_projet_rapport_finalise`';
        }
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::DATE_VALIDATION_PROJET_RAPPORT)) {
            $modifiedColumns[':p' . $index++]  = '`date_validation_projet_rapport`';
        }
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::PROJET_RAPPORT_VU_PAR)) {
            $modifiedColumns[':p' . $index++]  = '`projet_rapport_vu_par`';
        }
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::DATE_REUNION_ATTRIBUTION)) {
            $modifiedColumns[':p' . $index++]  = '`date_reunion_attribution`';
        }
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::DECISION)) {
            $modifiedColumns[':p' . $index++]  = '`decision`';
        }
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::DATE_ENVOI_COURRIER_CONDIDAT_NON_RETENU)) {
            $modifiedColumns[':p' . $index++]  = '`date_envoi_courrier_condidat_non_retenu`';
        }
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::DATE_SIGNATURE_MARCHE_PA)) {
            $modifiedColumns[':p' . $index++]  = '`date_signature_marche_pa`';
        }
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::DATE_RECEPTION_CONTROLE_LEGALITE)) {
            $modifiedColumns[':p' . $index++]  = '`date_reception_controle_legalite`';
        }
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::DATE_FORMULATION_OBSERVATION_DOSSIER)) {
            $modifiedColumns[':p' . $index++]  = '`date_formulation_observation_dossier`';
        }
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::DATE_RETOUR_DOSSIER_FINALISE)) {
            $modifiedColumns[':p' . $index++]  = '`date_retour_dossier_finalise`';
        }
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::DATE_TRANSMISSION_PREFECTURE)) {
            $modifiedColumns[':p' . $index++]  = '`date_transmission_prefecture`';
        }
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::DOSSIER_VU_PAR)) {
            $modifiedColumns[':p' . $index++]  = '`dossier_vu_par`';
        }
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::DATE_VALIDATION_RAPPORT_INFORMATION)) {
            $modifiedColumns[':p' . $index++]  = '`date_validation_rapport_information`';
        }
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::COMMENTAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`commentaire`';
        }

        $sql = sprintf(
            'INSERT INTO `passation_marche_a_venir` (%s) VALUES (%s)',
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
                    case '`id_passation_consultation`':						
                        $stmt->bindValue($identifier, $this->id_passation_consultation, PDO::PARAM_INT);
                        break;
                    case '`lot`':						
                        $stmt->bindValue($identifier, $this->lot, PDO::PARAM_INT);
                        break;
                    case '`montant_estime`':						
                        $stmt->bindValue($identifier, $this->montant_estime, PDO::PARAM_STR);
                        break;
                    case '`id_nature_acte_juridique`':						
                        $stmt->bindValue($identifier, $this->id_nature_acte_juridique, PDO::PARAM_INT);
                        break;
                    case '`forme_groupement`':						
                        $stmt->bindValue($identifier, $this->forme_groupement, PDO::PARAM_INT);
                        break;
                    case '`variante_autorisee`':						
                        $stmt->bindValue($identifier, $this->variante_autorisee, PDO::PARAM_STR);
                        break;
                    case '`variante_technique_obligatoire`':						
                        $stmt->bindValue($identifier, $this->variante_technique_obligatoire, PDO::PARAM_STR);
                        break;
                    case '`nombre_variante_technique`':						
                        $stmt->bindValue($identifier, $this->nombre_variante_technique, PDO::PARAM_INT);
                        break;
                    case '`description_variante_technique`':						
                        $stmt->bindValue($identifier, $this->description_variante_technique, PDO::PARAM_STR);
                        break;
                    case '`mode_execution_contrat`':						
                        $stmt->bindValue($identifier, $this->mode_execution_contrat, PDO::PARAM_INT);
                        break;
                    case '`type_bon_commande`':						
                        $stmt->bindValue($identifier, $this->type_bon_commande, PDO::PARAM_INT);
                        break;
                    case '`min_bon_commande`':						
                        $stmt->bindValue($identifier, $this->min_bon_commande, PDO::PARAM_STR);
                        break;
                    case '`max_bon_commande`':						
                        $stmt->bindValue($identifier, $this->max_bon_commande, PDO::PARAM_STR);
                        break;
                    case '`duree_execution_marche_hors_reconduction`':						
                        $stmt->bindValue($identifier, $this->duree_execution_marche_hors_reconduction, PDO::PARAM_INT);
                        break;
                    case '`nombre_reconduction`':						
                        $stmt->bindValue($identifier, $this->nombre_reconduction, PDO::PARAM_INT);
                        break;
                    case '`duree_total_marche`':						
                        $stmt->bindValue($identifier, $this->duree_total_marche, PDO::PARAM_INT);
                        break;
                    case '`ccag_applicable`':						
                        $stmt->bindValue($identifier, $this->ccag_applicable, PDO::PARAM_INT);
                        break;
                    case '`marche_transversal`':						
                        $stmt->bindValue($identifier, $this->marche_transversal, PDO::PARAM_STR);
                        break;
                    case '`date_reception_analyse_offre`':						
                        $stmt->bindValue($identifier, $this->date_reception_analyse_offre, PDO::PARAM_STR);
                        break;
                    case '`date_formulation_observation_projet_rapport`':						
                        $stmt->bindValue($identifier, $this->date_formulation_observation_projet_rapport, PDO::PARAM_STR);
                        break;
                    case '`date_retour_projet_rapport_finalise`':						
                        $stmt->bindValue($identifier, $this->date_retour_projet_rapport_finalise, PDO::PARAM_STR);
                        break;
                    case '`date_validation_projet_rapport`':						
                        $stmt->bindValue($identifier, $this->date_validation_projet_rapport, PDO::PARAM_STR);
                        break;
                    case '`projet_rapport_vu_par`':						
                        $stmt->bindValue($identifier, $this->projet_rapport_vu_par, PDO::PARAM_INT);
                        break;
                    case '`date_reunion_attribution`':						
                        $stmt->bindValue($identifier, $this->date_reunion_attribution, PDO::PARAM_STR);
                        break;
                    case '`decision`':						
                        $stmt->bindValue($identifier, $this->decision, PDO::PARAM_INT);
                        break;
                    case '`date_envoi_courrier_condidat_non_retenu`':						
                        $stmt->bindValue($identifier, $this->date_envoi_courrier_condidat_non_retenu, PDO::PARAM_STR);
                        break;
                    case '`date_signature_marche_pa`':						
                        $stmt->bindValue($identifier, $this->date_signature_marche_pa, PDO::PARAM_STR);
                        break;
                    case '`date_reception_controle_legalite`':						
                        $stmt->bindValue($identifier, $this->date_reception_controle_legalite, PDO::PARAM_STR);
                        break;
                    case '`date_formulation_observation_dossier`':						
                        $stmt->bindValue($identifier, $this->date_formulation_observation_dossier, PDO::PARAM_STR);
                        break;
                    case '`date_retour_dossier_finalise`':						
                        $stmt->bindValue($identifier, $this->date_retour_dossier_finalise, PDO::PARAM_STR);
                        break;
                    case '`date_transmission_prefecture`':						
                        $stmt->bindValue($identifier, $this->date_transmission_prefecture, PDO::PARAM_STR);
                        break;
                    case '`dossier_vu_par`':						
                        $stmt->bindValue($identifier, $this->dossier_vu_par, PDO::PARAM_INT);
                        break;
                    case '`date_validation_rapport_information`':						
                        $stmt->bindValue($identifier, $this->date_validation_rapport_information, PDO::PARAM_STR);
                        break;
                    case '`commentaire`':						
                        $stmt->bindValue($identifier, $this->commentaire, PDO::PARAM_STR);
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


            if (($retval = CommonPassationMarcheAVenirPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonPassationMarcheAVenirPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getIdPassationConsultation();
                break;
            case 3:
                return $this->getLot();
                break;
            case 4:
                return $this->getMontantEstime();
                break;
            case 5:
                return $this->getIdNatureActeJuridique();
                break;
            case 6:
                return $this->getFormeGroupement();
                break;
            case 7:
                return $this->getVarianteAutorisee();
                break;
            case 8:
                return $this->getVarianteTechniqueObligatoire();
                break;
            case 9:
                return $this->getNombreVarianteTechnique();
                break;
            case 10:
                return $this->getDescriptionVarianteTechnique();
                break;
            case 11:
                return $this->getModeExecutionContrat();
                break;
            case 12:
                return $this->getTypeBonCommande();
                break;
            case 13:
                return $this->getMinBonCommande();
                break;
            case 14:
                return $this->getMaxBonCommande();
                break;
            case 15:
                return $this->getDureeExecutionMarcheHorsReconduction();
                break;
            case 16:
                return $this->getNombreReconduction();
                break;
            case 17:
                return $this->getDureeTotalMarche();
                break;
            case 18:
                return $this->getCcagApplicable();
                break;
            case 19:
                return $this->getMarcheTransversal();
                break;
            case 20:
                return $this->getDateReceptionAnalyseOffre();
                break;
            case 21:
                return $this->getDateFormulationObservationProjetRapport();
                break;
            case 22:
                return $this->getDateRetourProjetRapportFinalise();
                break;
            case 23:
                return $this->getDateValidationProjetRapport();
                break;
            case 24:
                return $this->getProjetRapportVuPar();
                break;
            case 25:
                return $this->getDateReunionAttribution();
                break;
            case 26:
                return $this->getDecision();
                break;
            case 27:
                return $this->getDateEnvoiCourrierCondidatNonRetenu();
                break;
            case 28:
                return $this->getDateSignatureMarchePa();
                break;
            case 29:
                return $this->getDateReceptionControleLegalite();
                break;
            case 30:
                return $this->getDateFormulationObservationDossier();
                break;
            case 31:
                return $this->getDateRetourDossierFinalise();
                break;
            case 32:
                return $this->getDateTransmissionPrefecture();
                break;
            case 33:
                return $this->getDossierVuPar();
                break;
            case 34:
                return $this->getDateValidationRapportInformation();
                break;
            case 35:
                return $this->getCommentaire();
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
        if (isset($alreadyDumpedObjects['CommonPassationMarcheAVenir'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonPassationMarcheAVenir'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonPassationMarcheAVenirPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getIdPassationConsultation(),
            $keys[3] => $this->getLot(),
            $keys[4] => $this->getMontantEstime(),
            $keys[5] => $this->getIdNatureActeJuridique(),
            $keys[6] => $this->getFormeGroupement(),
            $keys[7] => $this->getVarianteAutorisee(),
            $keys[8] => $this->getVarianteTechniqueObligatoire(),
            $keys[9] => $this->getNombreVarianteTechnique(),
            $keys[10] => $this->getDescriptionVarianteTechnique(),
            $keys[11] => $this->getModeExecutionContrat(),
            $keys[12] => $this->getTypeBonCommande(),
            $keys[13] => $this->getMinBonCommande(),
            $keys[14] => $this->getMaxBonCommande(),
            $keys[15] => $this->getDureeExecutionMarcheHorsReconduction(),
            $keys[16] => $this->getNombreReconduction(),
            $keys[17] => $this->getDureeTotalMarche(),
            $keys[18] => $this->getCcagApplicable(),
            $keys[19] => $this->getMarcheTransversal(),
            $keys[20] => $this->getDateReceptionAnalyseOffre(),
            $keys[21] => $this->getDateFormulationObservationProjetRapport(),
            $keys[22] => $this->getDateRetourProjetRapportFinalise(),
            $keys[23] => $this->getDateValidationProjetRapport(),
            $keys[24] => $this->getProjetRapportVuPar(),
            $keys[25] => $this->getDateReunionAttribution(),
            $keys[26] => $this->getDecision(),
            $keys[27] => $this->getDateEnvoiCourrierCondidatNonRetenu(),
            $keys[28] => $this->getDateSignatureMarchePa(),
            $keys[29] => $this->getDateReceptionControleLegalite(),
            $keys[30] => $this->getDateFormulationObservationDossier(),
            $keys[31] => $this->getDateRetourDossierFinalise(),
            $keys[32] => $this->getDateTransmissionPrefecture(),
            $keys[33] => $this->getDossierVuPar(),
            $keys[34] => $this->getDateValidationRapportInformation(),
            $keys[35] => $this->getCommentaire(),
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
        $pos = CommonPassationMarcheAVenirPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setIdPassationConsultation($value);
                break;
            case 3:
                $this->setLot($value);
                break;
            case 4:
                $this->setMontantEstime($value);
                break;
            case 5:
                $this->setIdNatureActeJuridique($value);
                break;
            case 6:
                $this->setFormeGroupement($value);
                break;
            case 7:
                $this->setVarianteAutorisee($value);
                break;
            case 8:
                $this->setVarianteTechniqueObligatoire($value);
                break;
            case 9:
                $this->setNombreVarianteTechnique($value);
                break;
            case 10:
                $this->setDescriptionVarianteTechnique($value);
                break;
            case 11:
                $this->setModeExecutionContrat($value);
                break;
            case 12:
                $this->setTypeBonCommande($value);
                break;
            case 13:
                $this->setMinBonCommande($value);
                break;
            case 14:
                $this->setMaxBonCommande($value);
                break;
            case 15:
                $this->setDureeExecutionMarcheHorsReconduction($value);
                break;
            case 16:
                $this->setNombreReconduction($value);
                break;
            case 17:
                $this->setDureeTotalMarche($value);
                break;
            case 18:
                $this->setCcagApplicable($value);
                break;
            case 19:
                $this->setMarcheTransversal($value);
                break;
            case 20:
                $this->setDateReceptionAnalyseOffre($value);
                break;
            case 21:
                $this->setDateFormulationObservationProjetRapport($value);
                break;
            case 22:
                $this->setDateRetourProjetRapportFinalise($value);
                break;
            case 23:
                $this->setDateValidationProjetRapport($value);
                break;
            case 24:
                $this->setProjetRapportVuPar($value);
                break;
            case 25:
                $this->setDateReunionAttribution($value);
                break;
            case 26:
                $this->setDecision($value);
                break;
            case 27:
                $this->setDateEnvoiCourrierCondidatNonRetenu($value);
                break;
            case 28:
                $this->setDateSignatureMarchePa($value);
                break;
            case 29:
                $this->setDateReceptionControleLegalite($value);
                break;
            case 30:
                $this->setDateFormulationObservationDossier($value);
                break;
            case 31:
                $this->setDateRetourDossierFinalise($value);
                break;
            case 32:
                $this->setDateTransmissionPrefecture($value);
                break;
            case 33:
                $this->setDossierVuPar($value);
                break;
            case 34:
                $this->setDateValidationRapportInformation($value);
                break;
            case 35:
                $this->setCommentaire($value);
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
        $keys = CommonPassationMarcheAVenirPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setIdPassationConsultation($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setLot($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setMontantEstime($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setIdNatureActeJuridique($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setFormeGroupement($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setVarianteAutorisee($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setVarianteTechniqueObligatoire($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setNombreVarianteTechnique($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setDescriptionVarianteTechnique($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setModeExecutionContrat($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setTypeBonCommande($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setMinBonCommande($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setMaxBonCommande($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setDureeExecutionMarcheHorsReconduction($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setNombreReconduction($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setDureeTotalMarche($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setCcagApplicable($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setMarcheTransversal($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setDateReceptionAnalyseOffre($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setDateFormulationObservationProjetRapport($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setDateRetourProjetRapportFinalise($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setDateValidationProjetRapport($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setProjetRapportVuPar($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setDateReunionAttribution($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setDecision($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setDateEnvoiCourrierCondidatNonRetenu($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setDateSignatureMarchePa($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setDateReceptionControleLegalite($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setDateFormulationObservationDossier($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setDateRetourDossierFinalise($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setDateTransmissionPrefecture($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setDossierVuPar($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setDateValidationRapportInformation($arr[$keys[34]]);
        if (array_key_exists($keys[35], $arr)) $this->setCommentaire($arr[$keys[35]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonPassationMarcheAVenirPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::ID)) $criteria->add(CommonPassationMarcheAVenirPeer::ID, $this->id);
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::ORGANISME)) $criteria->add(CommonPassationMarcheAVenirPeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::ID_PASSATION_CONSULTATION)) $criteria->add(CommonPassationMarcheAVenirPeer::ID_PASSATION_CONSULTATION, $this->id_passation_consultation);
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::LOT)) $criteria->add(CommonPassationMarcheAVenirPeer::LOT, $this->lot);
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::MONTANT_ESTIME)) $criteria->add(CommonPassationMarcheAVenirPeer::MONTANT_ESTIME, $this->montant_estime);
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::ID_NATURE_ACTE_JURIDIQUE)) $criteria->add(CommonPassationMarcheAVenirPeer::ID_NATURE_ACTE_JURIDIQUE, $this->id_nature_acte_juridique);
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::FORME_GROUPEMENT)) $criteria->add(CommonPassationMarcheAVenirPeer::FORME_GROUPEMENT, $this->forme_groupement);
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::VARIANTE_AUTORISEE)) $criteria->add(CommonPassationMarcheAVenirPeer::VARIANTE_AUTORISEE, $this->variante_autorisee);
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::VARIANTE_TECHNIQUE_OBLIGATOIRE)) $criteria->add(CommonPassationMarcheAVenirPeer::VARIANTE_TECHNIQUE_OBLIGATOIRE, $this->variante_technique_obligatoire);
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::NOMBRE_VARIANTE_TECHNIQUE)) $criteria->add(CommonPassationMarcheAVenirPeer::NOMBRE_VARIANTE_TECHNIQUE, $this->nombre_variante_technique);
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::DESCRIPTION_VARIANTE_TECHNIQUE)) $criteria->add(CommonPassationMarcheAVenirPeer::DESCRIPTION_VARIANTE_TECHNIQUE, $this->description_variante_technique);
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::MODE_EXECUTION_CONTRAT)) $criteria->add(CommonPassationMarcheAVenirPeer::MODE_EXECUTION_CONTRAT, $this->mode_execution_contrat);
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::TYPE_BON_COMMANDE)) $criteria->add(CommonPassationMarcheAVenirPeer::TYPE_BON_COMMANDE, $this->type_bon_commande);
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::MIN_BON_COMMANDE)) $criteria->add(CommonPassationMarcheAVenirPeer::MIN_BON_COMMANDE, $this->min_bon_commande);
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::MAX_BON_COMMANDE)) $criteria->add(CommonPassationMarcheAVenirPeer::MAX_BON_COMMANDE, $this->max_bon_commande);
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::DUREE_EXECUTION_MARCHE_HORS_RECONDUCTION)) $criteria->add(CommonPassationMarcheAVenirPeer::DUREE_EXECUTION_MARCHE_HORS_RECONDUCTION, $this->duree_execution_marche_hors_reconduction);
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::NOMBRE_RECONDUCTION)) $criteria->add(CommonPassationMarcheAVenirPeer::NOMBRE_RECONDUCTION, $this->nombre_reconduction);
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::DUREE_TOTAL_MARCHE)) $criteria->add(CommonPassationMarcheAVenirPeer::DUREE_TOTAL_MARCHE, $this->duree_total_marche);
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::CCAG_APPLICABLE)) $criteria->add(CommonPassationMarcheAVenirPeer::CCAG_APPLICABLE, $this->ccag_applicable);
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::MARCHE_TRANSVERSAL)) $criteria->add(CommonPassationMarcheAVenirPeer::MARCHE_TRANSVERSAL, $this->marche_transversal);
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::DATE_RECEPTION_ANALYSE_OFFRE)) $criteria->add(CommonPassationMarcheAVenirPeer::DATE_RECEPTION_ANALYSE_OFFRE, $this->date_reception_analyse_offre);
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::DATE_FORMULATION_OBSERVATION_PROJET_RAPPORT)) $criteria->add(CommonPassationMarcheAVenirPeer::DATE_FORMULATION_OBSERVATION_PROJET_RAPPORT, $this->date_formulation_observation_projet_rapport);
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::DATE_RETOUR_PROJET_RAPPORT_FINALISE)) $criteria->add(CommonPassationMarcheAVenirPeer::DATE_RETOUR_PROJET_RAPPORT_FINALISE, $this->date_retour_projet_rapport_finalise);
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::DATE_VALIDATION_PROJET_RAPPORT)) $criteria->add(CommonPassationMarcheAVenirPeer::DATE_VALIDATION_PROJET_RAPPORT, $this->date_validation_projet_rapport);
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::PROJET_RAPPORT_VU_PAR)) $criteria->add(CommonPassationMarcheAVenirPeer::PROJET_RAPPORT_VU_PAR, $this->projet_rapport_vu_par);
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::DATE_REUNION_ATTRIBUTION)) $criteria->add(CommonPassationMarcheAVenirPeer::DATE_REUNION_ATTRIBUTION, $this->date_reunion_attribution);
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::DECISION)) $criteria->add(CommonPassationMarcheAVenirPeer::DECISION, $this->decision);
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::DATE_ENVOI_COURRIER_CONDIDAT_NON_RETENU)) $criteria->add(CommonPassationMarcheAVenirPeer::DATE_ENVOI_COURRIER_CONDIDAT_NON_RETENU, $this->date_envoi_courrier_condidat_non_retenu);
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::DATE_SIGNATURE_MARCHE_PA)) $criteria->add(CommonPassationMarcheAVenirPeer::DATE_SIGNATURE_MARCHE_PA, $this->date_signature_marche_pa);
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::DATE_RECEPTION_CONTROLE_LEGALITE)) $criteria->add(CommonPassationMarcheAVenirPeer::DATE_RECEPTION_CONTROLE_LEGALITE, $this->date_reception_controle_legalite);
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::DATE_FORMULATION_OBSERVATION_DOSSIER)) $criteria->add(CommonPassationMarcheAVenirPeer::DATE_FORMULATION_OBSERVATION_DOSSIER, $this->date_formulation_observation_dossier);
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::DATE_RETOUR_DOSSIER_FINALISE)) $criteria->add(CommonPassationMarcheAVenirPeer::DATE_RETOUR_DOSSIER_FINALISE, $this->date_retour_dossier_finalise);
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::DATE_TRANSMISSION_PREFECTURE)) $criteria->add(CommonPassationMarcheAVenirPeer::DATE_TRANSMISSION_PREFECTURE, $this->date_transmission_prefecture);
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::DOSSIER_VU_PAR)) $criteria->add(CommonPassationMarcheAVenirPeer::DOSSIER_VU_PAR, $this->dossier_vu_par);
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::DATE_VALIDATION_RAPPORT_INFORMATION)) $criteria->add(CommonPassationMarcheAVenirPeer::DATE_VALIDATION_RAPPORT_INFORMATION, $this->date_validation_rapport_information);
        if ($this->isColumnModified(CommonPassationMarcheAVenirPeer::COMMENTAIRE)) $criteria->add(CommonPassationMarcheAVenirPeer::COMMENTAIRE, $this->commentaire);

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
        $criteria = new Criteria(CommonPassationMarcheAVenirPeer::DATABASE_NAME);
        $criteria->add(CommonPassationMarcheAVenirPeer::ID, $this->id);
        $criteria->add(CommonPassationMarcheAVenirPeer::ORGANISME, $this->organisme);

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
     * @param object $copyObj An object of CommonPassationMarcheAVenir (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setIdPassationConsultation($this->getIdPassationConsultation());
        $copyObj->setLot($this->getLot());
        $copyObj->setMontantEstime($this->getMontantEstime());
        $copyObj->setIdNatureActeJuridique($this->getIdNatureActeJuridique());
        $copyObj->setFormeGroupement($this->getFormeGroupement());
        $copyObj->setVarianteAutorisee($this->getVarianteAutorisee());
        $copyObj->setVarianteTechniqueObligatoire($this->getVarianteTechniqueObligatoire());
        $copyObj->setNombreVarianteTechnique($this->getNombreVarianteTechnique());
        $copyObj->setDescriptionVarianteTechnique($this->getDescriptionVarianteTechnique());
        $copyObj->setModeExecutionContrat($this->getModeExecutionContrat());
        $copyObj->setTypeBonCommande($this->getTypeBonCommande());
        $copyObj->setMinBonCommande($this->getMinBonCommande());
        $copyObj->setMaxBonCommande($this->getMaxBonCommande());
        $copyObj->setDureeExecutionMarcheHorsReconduction($this->getDureeExecutionMarcheHorsReconduction());
        $copyObj->setNombreReconduction($this->getNombreReconduction());
        $copyObj->setDureeTotalMarche($this->getDureeTotalMarche());
        $copyObj->setCcagApplicable($this->getCcagApplicable());
        $copyObj->setMarcheTransversal($this->getMarcheTransversal());
        $copyObj->setDateReceptionAnalyseOffre($this->getDateReceptionAnalyseOffre());
        $copyObj->setDateFormulationObservationProjetRapport($this->getDateFormulationObservationProjetRapport());
        $copyObj->setDateRetourProjetRapportFinalise($this->getDateRetourProjetRapportFinalise());
        $copyObj->setDateValidationProjetRapport($this->getDateValidationProjetRapport());
        $copyObj->setProjetRapportVuPar($this->getProjetRapportVuPar());
        $copyObj->setDateReunionAttribution($this->getDateReunionAttribution());
        $copyObj->setDecision($this->getDecision());
        $copyObj->setDateEnvoiCourrierCondidatNonRetenu($this->getDateEnvoiCourrierCondidatNonRetenu());
        $copyObj->setDateSignatureMarchePa($this->getDateSignatureMarchePa());
        $copyObj->setDateReceptionControleLegalite($this->getDateReceptionControleLegalite());
        $copyObj->setDateFormulationObservationDossier($this->getDateFormulationObservationDossier());
        $copyObj->setDateRetourDossierFinalise($this->getDateRetourDossierFinalise());
        $copyObj->setDateTransmissionPrefecture($this->getDateTransmissionPrefecture());
        $copyObj->setDossierVuPar($this->getDossierVuPar());
        $copyObj->setDateValidationRapportInformation($this->getDateValidationRapportInformation());
        $copyObj->setCommentaire($this->getCommentaire());
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
     * @return CommonPassationMarcheAVenir Clone of current object.
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
     * @return CommonPassationMarcheAVenirPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonPassationMarcheAVenirPeer();
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
        $this->id_passation_consultation = null;
        $this->lot = null;
        $this->montant_estime = null;
        $this->id_nature_acte_juridique = null;
        $this->forme_groupement = null;
        $this->variante_autorisee = null;
        $this->variante_technique_obligatoire = null;
        $this->nombre_variante_technique = null;
        $this->description_variante_technique = null;
        $this->mode_execution_contrat = null;
        $this->type_bon_commande = null;
        $this->min_bon_commande = null;
        $this->max_bon_commande = null;
        $this->duree_execution_marche_hors_reconduction = null;
        $this->nombre_reconduction = null;
        $this->duree_total_marche = null;
        $this->ccag_applicable = null;
        $this->marche_transversal = null;
        $this->date_reception_analyse_offre = null;
        $this->date_formulation_observation_projet_rapport = null;
        $this->date_retour_projet_rapport_finalise = null;
        $this->date_validation_projet_rapport = null;
        $this->projet_rapport_vu_par = null;
        $this->date_reunion_attribution = null;
        $this->decision = null;
        $this->date_envoi_courrier_condidat_non_retenu = null;
        $this->date_signature_marche_pa = null;
        $this->date_reception_controle_legalite = null;
        $this->date_formulation_observation_dossier = null;
        $this->date_retour_dossier_finalise = null;
        $this->date_transmission_prefecture = null;
        $this->dossier_vu_par = null;
        $this->date_validation_rapport_information = null;
        $this->commentaire = null;
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
        return (string) $this->exportTo(CommonPassationMarcheAVenirPeer::DEFAULT_STRING_FORMAT);
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
