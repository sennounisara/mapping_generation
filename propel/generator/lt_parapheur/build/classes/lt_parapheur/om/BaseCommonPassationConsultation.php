<?php


/**
 * Base class that represents a row from the 'Passation_consultation' table.
 *
 * 
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonPassationConsultation extends BaseObject implements Persistent
{
    /**
     * Peer class name
     */
    const PEER = 'CommonPassationConsultationPeer';

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        CommonPassationConsultationPeer
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
     * The value for the reference field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $reference;

    /**
     * The value for the unite field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $unite;

    /**
     * The value for the mandataire field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $mandataire;

    /**
     * The value for the lieu_detaille_predefini field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $lieu_detaille_predefini;

    /**
     * The value for the lieux_detailles_non_definis field.
     * @var        string
     */
    protected $lieux_detailles_non_definis;

    /**
     * The value for the code_postal_lieu_principal_execution field.
     * @var        string
     */
    protected $code_postal_lieu_principal_execution;

    /**
     * The value for the ville field.
     * @var        string
     */
    protected $ville;

    /**
     * The value for the montant_estime_consultation field.
     * @var        string
     */
    protected $montant_estime_consultation;

    /**
     * The value for the commentaires field.
     * @var        string
     */
    protected $commentaires;

    /**
     * The value for the numero_deliberation_financiere field.
     * @var        string
     */
    protected $numero_deliberation_financiere;

    /**
     * The value for the date_deliberation_financiere field.
     * @var        string
     */
    protected $date_deliberation_financiere;

    /**
     * The value for the imputation_budgetaire field.
     * @var        string
     */
    protected $imputation_budgetaire;

    /**
     * The value for the numero_deliberation_autorisant_signature_marche field.
     * @var        string
     */
    protected $numero_deliberation_autorisant_signature_marche;

    /**
     * The value for the date_deliberation_autorisant_signature_marche field.
     * @var        string
     */
    protected $date_deliberation_autorisant_signature_marche;

    /**
     * The value for the date_notification_previsionnelle field.
     * @var        string
     */
    protected $date_notification_previsionnelle;

    /**
     * The value for the date_reception_projet_dce_service_validateur field.
     * @var        string
     */
    protected $date_reception_projet_dce_service_validateur;

    /**
     * The value for the date_formulations_premieres_observations field.
     * @var        string
     */
    protected $date_formulations_premieres_observations;

    /**
     * The value for the date_retour_projet_dce_finalise field.
     * @var        string
     */
    protected $date_retour_projet_dce_finalise;

    /**
     * The value for the date_validation_projet_dce_par_service_validateur field.
     * @var        string
     */
    protected $date_validation_projet_dce_par_service_validateur;

    /**
     * The value for the date_validation_projet_dce_vue_par field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $date_validation_projet_dce_vue_par;

    /**
     * The value for the date_reception_projet_aapc_par_service_validateur field.
     * @var        string
     */
    protected $date_reception_projet_aapc_par_service_validateur;

    /**
     * The value for the date_formulations_premieres_observations_aapc field.
     * @var        string
     */
    protected $date_formulations_premieres_observations_aapc;

    /**
     * The value for the date_retour_projet_aapc_finalise field.
     * @var        string
     */
    protected $date_retour_projet_aapc_finalise;

    /**
     * The value for the date_validation_projet_aapc_par_service_validateur field.
     * @var        string
     */
    protected $date_validation_projet_aapc_par_service_validateur;

    /**
     * The value for the date_validation_projet_aapc_par_service_validateur_vu_par field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $date_validation_projet_aapc_par_service_validateur_vu_par;

    /**
     * The value for the date_envoi_publicite field.
     * @var        string
     */
    protected $date_envoi_publicite;

    /**
     * The value for the date_envoi_invitations_remettre_offre field.
     * @var        string
     */
    protected $date_envoi_invitations_remettre_offre;

    /**
     * The value for the date_limite_remise_offres field.
     * @var        string
     */
    protected $date_limite_remise_offres;

    /**
     * The value for the delai_validite_offres field.
     * @var        string
     */
    protected $delai_validite_offres;

    /**
     * The value for the commentaires_phase_consultation field.
     * @var        string
     */
    protected $commentaires_phase_consultation;

    /**
     * The value for the date_reunion_ouverture_candidatures field.
     * @var        string
     */
    protected $date_reunion_ouverture_candidatures;

    /**
     * The value for the date_reunion_ouverture_offres field.
     * @var        string
     */
    protected $date_reunion_ouverture_offres;

    /**
     * The value for the decision field.
     * Note: this column has a database default value of: 0
     * @var        int
     */
    protected $decision;

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
        $this->reference = 0;
        $this->unite = 0;
        $this->mandataire = 0;
        $this->lieu_detaille_predefini = 0;
        $this->date_validation_projet_dce_vue_par = 0;
        $this->date_validation_projet_aapc_par_service_validateur_vu_par = 0;
        $this->decision = 0;
    }

    /**
     * Initializes internal state of BaseCommonPassationConsultation object.
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
     * Get the [reference] column value.
     * 
     * @return int
     */
    public function getReference()
    {

        return $this->reference;
    }

    /**
     * Get the [unite] column value.
     * 
     * @return int
     */
    public function getUnite()
    {

        return $this->unite;
    }

    /**
     * Get the [mandataire] column value.
     * 
     * @return int
     */
    public function getMandataire()
    {

        return $this->mandataire;
    }

    /**
     * Get the [lieu_detaille_predefini] column value.
     * 
     * @return int
     */
    public function getLieuDetaillePredefini()
    {

        return $this->lieu_detaille_predefini;
    }

    /**
     * Get the [lieux_detailles_non_definis] column value.
     * 
     * @return string
     */
    public function getLieuxDetaillesNonDefinis()
    {

        return $this->lieux_detailles_non_definis;
    }

    /**
     * Get the [code_postal_lieu_principal_execution] column value.
     * 
     * @return string
     */
    public function getCodePostalLieuPrincipalExecution()
    {

        return $this->code_postal_lieu_principal_execution;
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
     * Get the [montant_estime_consultation] column value.
     * 
     * @return string
     */
    public function getMontantEstimeConsultation()
    {

        return $this->montant_estime_consultation;
    }

    /**
     * Get the [commentaires] column value.
     * 
     * @return string
     */
    public function getCommentaires()
    {

        return $this->commentaires;
    }

    /**
     * Get the [numero_deliberation_financiere] column value.
     * 
     * @return string
     */
    public function getNumeroDeliberationFinanciere()
    {

        return $this->numero_deliberation_financiere;
    }

    /**
     * Get the [date_deliberation_financiere] column value.
     * 
     * @return string
     */
    public function getDateDeliberationFinanciere()
    {

        return $this->date_deliberation_financiere;
    }

    /**
     * Get the [imputation_budgetaire] column value.
     * 
     * @return string
     */
    public function getImputationBudgetaire()
    {

        return $this->imputation_budgetaire;
    }

    /**
     * Get the [numero_deliberation_autorisant_signature_marche] column value.
     * 
     * @return string
     */
    public function getNumeroDeliberationAutorisantSignatureMarche()
    {

        return $this->numero_deliberation_autorisant_signature_marche;
    }

    /**
     * Get the [date_deliberation_autorisant_signature_marche] column value.
     * 
     * @return string
     */
    public function getDateDeliberationAutorisantSignatureMarche()
    {

        return $this->date_deliberation_autorisant_signature_marche;
    }

    /**
     * Get the [date_notification_previsionnelle] column value.
     * 
     * @return string
     */
    public function getDateNotificationPrevisionnelle()
    {

        return $this->date_notification_previsionnelle;
    }

    /**
     * Get the [date_reception_projet_dce_service_validateur] column value.
     * 
     * @return string
     */
    public function getDateReceptionProjetDceServiceValidateur()
    {

        return $this->date_reception_projet_dce_service_validateur;
    }

    /**
     * Get the [date_formulations_premieres_observations] column value.
     * 
     * @return string
     */
    public function getDateFormulationsPremieresObservations()
    {

        return $this->date_formulations_premieres_observations;
    }

    /**
     * Get the [date_retour_projet_dce_finalise] column value.
     * 
     * @return string
     */
    public function getDateRetourProjetDceFinalise()
    {

        return $this->date_retour_projet_dce_finalise;
    }

    /**
     * Get the [date_validation_projet_dce_par_service_validateur] column value.
     * 
     * @return string
     */
    public function getDateValidationProjetDceParServiceValidateur()
    {

        return $this->date_validation_projet_dce_par_service_validateur;
    }

    /**
     * Get the [date_validation_projet_dce_vue_par] column value.
     * 
     * @return int
     */
    public function getDateValidationProjetDceVuePar()
    {

        return $this->date_validation_projet_dce_vue_par;
    }

    /**
     * Get the [date_reception_projet_aapc_par_service_validateur] column value.
     * 
     * @return string
     */
    public function getDateReceptionProjetAapcParServiceValidateur()
    {

        return $this->date_reception_projet_aapc_par_service_validateur;
    }

    /**
     * Get the [date_formulations_premieres_observations_aapc] column value.
     * 
     * @return string
     */
    public function getDateFormulationsPremieresObservationsAapc()
    {

        return $this->date_formulations_premieres_observations_aapc;
    }

    /**
     * Get the [date_retour_projet_aapc_finalise] column value.
     * 
     * @return string
     */
    public function getDateRetourProjetAapcFinalise()
    {

        return $this->date_retour_projet_aapc_finalise;
    }

    /**
     * Get the [date_validation_projet_aapc_par_service_validateur] column value.
     * 
     * @return string
     */
    public function getDateValidationProjetAapcParServiceValidateur()
    {

        return $this->date_validation_projet_aapc_par_service_validateur;
    }

    /**
     * Get the [date_validation_projet_aapc_par_service_validateur_vu_par] column value.
     * 
     * @return int
     */
    public function getDateValidationProjetAapcParServiceValidateurVuPar()
    {

        return $this->date_validation_projet_aapc_par_service_validateur_vu_par;
    }

    /**
     * Get the [date_envoi_publicite] column value.
     * 
     * @return string
     */
    public function getDateEnvoiPublicite()
    {

        return $this->date_envoi_publicite;
    }

    /**
     * Get the [date_envoi_invitations_remettre_offre] column value.
     * 
     * @return string
     */
    public function getDateEnvoiInvitationsRemettreOffre()
    {

        return $this->date_envoi_invitations_remettre_offre;
    }

    /**
     * Get the [date_limite_remise_offres] column value.
     * 
     * @return string
     */
    public function getDateLimiteRemiseOffres()
    {

        return $this->date_limite_remise_offres;
    }

    /**
     * Get the [delai_validite_offres] column value.
     * 
     * @return string
     */
    public function getDelaiValiditeOffres()
    {

        return $this->delai_validite_offres;
    }

    /**
     * Get the [commentaires_phase_consultation] column value.
     * 
     * @return string
     */
    public function getCommentairesPhaseConsultation()
    {

        return $this->commentaires_phase_consultation;
    }

    /**
     * Get the [date_reunion_ouverture_candidatures] column value.
     * 
     * @return string
     */
    public function getDateReunionOuvertureCandidatures()
    {

        return $this->date_reunion_ouverture_candidatures;
    }

    /**
     * Get the [date_reunion_ouverture_offres] column value.
     * 
     * @return string
     */
    public function getDateReunionOuvertureOffres()
    {

        return $this->date_reunion_ouverture_offres;
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
     * Set the value of [id] column.
     * 
     * @param int $v new value
     * @return CommonPassationConsultation The current object (for fluent API support)
     */
    public function setId($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id !== $v) {
            $this->id = $v;
            $this->modifiedColumns[] = CommonPassationConsultationPeer::ID;
        }


        return $this;
    } // setId()

    /**
     * Set the value of [organisme] column.
     * 
     * @param string $v new value
     * @return CommonPassationConsultation The current object (for fluent API support)
     */
    public function setOrganisme($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->organisme !== $v) {
            $this->organisme = $v;
            $this->modifiedColumns[] = CommonPassationConsultationPeer::ORGANISME;
        }


        return $this;
    } // setOrganisme()

    /**
     * Set the value of [reference] column.
     * 
     * @param int $v new value
     * @return CommonPassationConsultation The current object (for fluent API support)
     */
    public function setReference($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->reference !== $v) {
            $this->reference = $v;
            $this->modifiedColumns[] = CommonPassationConsultationPeer::REFERENCE;
        }


        return $this;
    } // setReference()

    /**
     * Set the value of [unite] column.
     * 
     * @param int $v new value
     * @return CommonPassationConsultation The current object (for fluent API support)
     */
    public function setUnite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->unite !== $v) {
            $this->unite = $v;
            $this->modifiedColumns[] = CommonPassationConsultationPeer::UNITE;
        }


        return $this;
    } // setUnite()

    /**
     * Set the value of [mandataire] column.
     * 
     * @param int $v new value
     * @return CommonPassationConsultation The current object (for fluent API support)
     */
    public function setMandataire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->mandataire !== $v) {
            $this->mandataire = $v;
            $this->modifiedColumns[] = CommonPassationConsultationPeer::MANDATAIRE;
        }


        return $this;
    } // setMandataire()

    /**
     * Set the value of [lieu_detaille_predefini] column.
     * 
     * @param int $v new value
     * @return CommonPassationConsultation The current object (for fluent API support)
     */
    public function setLieuDetaillePredefini($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->lieu_detaille_predefini !== $v) {
            $this->lieu_detaille_predefini = $v;
            $this->modifiedColumns[] = CommonPassationConsultationPeer::LIEU_DETAILLE_PREDEFINI;
        }


        return $this;
    } // setLieuDetaillePredefini()

    /**
     * Set the value of [lieux_detailles_non_definis] column.
     * 
     * @param string $v new value
     * @return CommonPassationConsultation The current object (for fluent API support)
     */
    public function setLieuxDetaillesNonDefinis($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->lieux_detailles_non_definis !== $v) {
            $this->lieux_detailles_non_definis = $v;
            $this->modifiedColumns[] = CommonPassationConsultationPeer::LIEUX_DETAILLES_NON_DEFINIS;
        }


        return $this;
    } // setLieuxDetaillesNonDefinis()

    /**
     * Set the value of [code_postal_lieu_principal_execution] column.
     * 
     * @param string $v new value
     * @return CommonPassationConsultation The current object (for fluent API support)
     */
    public function setCodePostalLieuPrincipalExecution($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->code_postal_lieu_principal_execution !== $v) {
            $this->code_postal_lieu_principal_execution = $v;
            $this->modifiedColumns[] = CommonPassationConsultationPeer::CODE_POSTAL_LIEU_PRINCIPAL_EXECUTION;
        }


        return $this;
    } // setCodePostalLieuPrincipalExecution()

    /**
     * Set the value of [ville] column.
     * 
     * @param string $v new value
     * @return CommonPassationConsultation The current object (for fluent API support)
     */
    public function setVille($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->ville !== $v) {
            $this->ville = $v;
            $this->modifiedColumns[] = CommonPassationConsultationPeer::VILLE;
        }


        return $this;
    } // setVille()

    /**
     * Set the value of [montant_estime_consultation] column.
     * 
     * @param string $v new value
     * @return CommonPassationConsultation The current object (for fluent API support)
     */
    public function setMontantEstimeConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->montant_estime_consultation !== $v) {
            $this->montant_estime_consultation = $v;
            $this->modifiedColumns[] = CommonPassationConsultationPeer::MONTANT_ESTIME_CONSULTATION;
        }


        return $this;
    } // setMontantEstimeConsultation()

    /**
     * Set the value of [commentaires] column.
     * 
     * @param string $v new value
     * @return CommonPassationConsultation The current object (for fluent API support)
     */
    public function setCommentaires($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commentaires !== $v) {
            $this->commentaires = $v;
            $this->modifiedColumns[] = CommonPassationConsultationPeer::COMMENTAIRES;
        }


        return $this;
    } // setCommentaires()

    /**
     * Set the value of [numero_deliberation_financiere] column.
     * 
     * @param string $v new value
     * @return CommonPassationConsultation The current object (for fluent API support)
     */
    public function setNumeroDeliberationFinanciere($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->numero_deliberation_financiere !== $v) {
            $this->numero_deliberation_financiere = $v;
            $this->modifiedColumns[] = CommonPassationConsultationPeer::NUMERO_DELIBERATION_FINANCIERE;
        }


        return $this;
    } // setNumeroDeliberationFinanciere()

    /**
     * Set the value of [date_deliberation_financiere] column.
     * 
     * @param string $v new value
     * @return CommonPassationConsultation The current object (for fluent API support)
     */
    public function setDateDeliberationFinanciere($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_deliberation_financiere !== $v) {
            $this->date_deliberation_financiere = $v;
            $this->modifiedColumns[] = CommonPassationConsultationPeer::DATE_DELIBERATION_FINANCIERE;
        }


        return $this;
    } // setDateDeliberationFinanciere()

    /**
     * Set the value of [imputation_budgetaire] column.
     * 
     * @param string $v new value
     * @return CommonPassationConsultation The current object (for fluent API support)
     */
    public function setImputationBudgetaire($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->imputation_budgetaire !== $v) {
            $this->imputation_budgetaire = $v;
            $this->modifiedColumns[] = CommonPassationConsultationPeer::IMPUTATION_BUDGETAIRE;
        }


        return $this;
    } // setImputationBudgetaire()

    /**
     * Set the value of [numero_deliberation_autorisant_signature_marche] column.
     * 
     * @param string $v new value
     * @return CommonPassationConsultation The current object (for fluent API support)
     */
    public function setNumeroDeliberationAutorisantSignatureMarche($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->numero_deliberation_autorisant_signature_marche !== $v) {
            $this->numero_deliberation_autorisant_signature_marche = $v;
            $this->modifiedColumns[] = CommonPassationConsultationPeer::NUMERO_DELIBERATION_AUTORISANT_SIGNATURE_MARCHE;
        }


        return $this;
    } // setNumeroDeliberationAutorisantSignatureMarche()

    /**
     * Set the value of [date_deliberation_autorisant_signature_marche] column.
     * 
     * @param string $v new value
     * @return CommonPassationConsultation The current object (for fluent API support)
     */
    public function setDateDeliberationAutorisantSignatureMarche($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_deliberation_autorisant_signature_marche !== $v) {
            $this->date_deliberation_autorisant_signature_marche = $v;
            $this->modifiedColumns[] = CommonPassationConsultationPeer::DATE_DELIBERATION_AUTORISANT_SIGNATURE_MARCHE;
        }


        return $this;
    } // setDateDeliberationAutorisantSignatureMarche()

    /**
     * Set the value of [date_notification_previsionnelle] column.
     * 
     * @param string $v new value
     * @return CommonPassationConsultation The current object (for fluent API support)
     */
    public function setDateNotificationPrevisionnelle($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_notification_previsionnelle !== $v) {
            $this->date_notification_previsionnelle = $v;
            $this->modifiedColumns[] = CommonPassationConsultationPeer::DATE_NOTIFICATION_PREVISIONNELLE;
        }


        return $this;
    } // setDateNotificationPrevisionnelle()

    /**
     * Set the value of [date_reception_projet_dce_service_validateur] column.
     * 
     * @param string $v new value
     * @return CommonPassationConsultation The current object (for fluent API support)
     */
    public function setDateReceptionProjetDceServiceValidateur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_reception_projet_dce_service_validateur !== $v) {
            $this->date_reception_projet_dce_service_validateur = $v;
            $this->modifiedColumns[] = CommonPassationConsultationPeer::DATE_RECEPTION_PROJET_DCE_SERVICE_VALIDATEUR;
        }


        return $this;
    } // setDateReceptionProjetDceServiceValidateur()

    /**
     * Set the value of [date_formulations_premieres_observations] column.
     * 
     * @param string $v new value
     * @return CommonPassationConsultation The current object (for fluent API support)
     */
    public function setDateFormulationsPremieresObservations($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_formulations_premieres_observations !== $v) {
            $this->date_formulations_premieres_observations = $v;
            $this->modifiedColumns[] = CommonPassationConsultationPeer::DATE_FORMULATIONS_PREMIERES_OBSERVATIONS;
        }


        return $this;
    } // setDateFormulationsPremieresObservations()

    /**
     * Set the value of [date_retour_projet_dce_finalise] column.
     * 
     * @param string $v new value
     * @return CommonPassationConsultation The current object (for fluent API support)
     */
    public function setDateRetourProjetDceFinalise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_retour_projet_dce_finalise !== $v) {
            $this->date_retour_projet_dce_finalise = $v;
            $this->modifiedColumns[] = CommonPassationConsultationPeer::DATE_RETOUR_PROJET_DCE_FINALISE;
        }


        return $this;
    } // setDateRetourProjetDceFinalise()

    /**
     * Set the value of [date_validation_projet_dce_par_service_validateur] column.
     * 
     * @param string $v new value
     * @return CommonPassationConsultation The current object (for fluent API support)
     */
    public function setDateValidationProjetDceParServiceValidateur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_validation_projet_dce_par_service_validateur !== $v) {
            $this->date_validation_projet_dce_par_service_validateur = $v;
            $this->modifiedColumns[] = CommonPassationConsultationPeer::DATE_VALIDATION_PROJET_DCE_PAR_SERVICE_VALIDATEUR;
        }


        return $this;
    } // setDateValidationProjetDceParServiceValidateur()

    /**
     * Set the value of [date_validation_projet_dce_vue_par] column.
     * 
     * @param int $v new value
     * @return CommonPassationConsultation The current object (for fluent API support)
     */
    public function setDateValidationProjetDceVuePar($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->date_validation_projet_dce_vue_par !== $v) {
            $this->date_validation_projet_dce_vue_par = $v;
            $this->modifiedColumns[] = CommonPassationConsultationPeer::DATE_VALIDATION_PROJET_DCE_VUE_PAR;
        }


        return $this;
    } // setDateValidationProjetDceVuePar()

    /**
     * Set the value of [date_reception_projet_aapc_par_service_validateur] column.
     * 
     * @param string $v new value
     * @return CommonPassationConsultation The current object (for fluent API support)
     */
    public function setDateReceptionProjetAapcParServiceValidateur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_reception_projet_aapc_par_service_validateur !== $v) {
            $this->date_reception_projet_aapc_par_service_validateur = $v;
            $this->modifiedColumns[] = CommonPassationConsultationPeer::DATE_RECEPTION_PROJET_AAPC_PAR_SERVICE_VALIDATEUR;
        }


        return $this;
    } // setDateReceptionProjetAapcParServiceValidateur()

    /**
     * Set the value of [date_formulations_premieres_observations_aapc] column.
     * 
     * @param string $v new value
     * @return CommonPassationConsultation The current object (for fluent API support)
     */
    public function setDateFormulationsPremieresObservationsAapc($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_formulations_premieres_observations_aapc !== $v) {
            $this->date_formulations_premieres_observations_aapc = $v;
            $this->modifiedColumns[] = CommonPassationConsultationPeer::DATE_FORMULATIONS_PREMIERES_OBSERVATIONS_AAPC;
        }


        return $this;
    } // setDateFormulationsPremieresObservationsAapc()

    /**
     * Set the value of [date_retour_projet_aapc_finalise] column.
     * 
     * @param string $v new value
     * @return CommonPassationConsultation The current object (for fluent API support)
     */
    public function setDateRetourProjetAapcFinalise($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_retour_projet_aapc_finalise !== $v) {
            $this->date_retour_projet_aapc_finalise = $v;
            $this->modifiedColumns[] = CommonPassationConsultationPeer::DATE_RETOUR_PROJET_AAPC_FINALISE;
        }


        return $this;
    } // setDateRetourProjetAapcFinalise()

    /**
     * Set the value of [date_validation_projet_aapc_par_service_validateur] column.
     * 
     * @param string $v new value
     * @return CommonPassationConsultation The current object (for fluent API support)
     */
    public function setDateValidationProjetAapcParServiceValidateur($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_validation_projet_aapc_par_service_validateur !== $v) {
            $this->date_validation_projet_aapc_par_service_validateur = $v;
            $this->modifiedColumns[] = CommonPassationConsultationPeer::DATE_VALIDATION_PROJET_AAPC_PAR_SERVICE_VALIDATEUR;
        }


        return $this;
    } // setDateValidationProjetAapcParServiceValidateur()

    /**
     * Set the value of [date_validation_projet_aapc_par_service_validateur_vu_par] column.
     * 
     * @param int $v new value
     * @return CommonPassationConsultation The current object (for fluent API support)
     */
    public function setDateValidationProjetAapcParServiceValidateurVuPar($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->date_validation_projet_aapc_par_service_validateur_vu_par !== $v) {
            $this->date_validation_projet_aapc_par_service_validateur_vu_par = $v;
            $this->modifiedColumns[] = CommonPassationConsultationPeer::DATE_VALIDATION_PROJET_AAPC_PAR_SERVICE_VALIDATEUR_VU_PAR;
        }


        return $this;
    } // setDateValidationProjetAapcParServiceValidateurVuPar()

    /**
     * Set the value of [date_envoi_publicite] column.
     * 
     * @param string $v new value
     * @return CommonPassationConsultation The current object (for fluent API support)
     */
    public function setDateEnvoiPublicite($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_envoi_publicite !== $v) {
            $this->date_envoi_publicite = $v;
            $this->modifiedColumns[] = CommonPassationConsultationPeer::DATE_ENVOI_PUBLICITE;
        }


        return $this;
    } // setDateEnvoiPublicite()

    /**
     * Set the value of [date_envoi_invitations_remettre_offre] column.
     * 
     * @param string $v new value
     * @return CommonPassationConsultation The current object (for fluent API support)
     */
    public function setDateEnvoiInvitationsRemettreOffre($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_envoi_invitations_remettre_offre !== $v) {
            $this->date_envoi_invitations_remettre_offre = $v;
            $this->modifiedColumns[] = CommonPassationConsultationPeer::DATE_ENVOI_INVITATIONS_REMETTRE_OFFRE;
        }


        return $this;
    } // setDateEnvoiInvitationsRemettreOffre()

    /**
     * Set the value of [date_limite_remise_offres] column.
     * 
     * @param string $v new value
     * @return CommonPassationConsultation The current object (for fluent API support)
     */
    public function setDateLimiteRemiseOffres($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_limite_remise_offres !== $v) {
            $this->date_limite_remise_offres = $v;
            $this->modifiedColumns[] = CommonPassationConsultationPeer::DATE_LIMITE_REMISE_OFFRES;
        }


        return $this;
    } // setDateLimiteRemiseOffres()

    /**
     * Set the value of [delai_validite_offres] column.
     * 
     * @param string $v new value
     * @return CommonPassationConsultation The current object (for fluent API support)
     */
    public function setDelaiValiditeOffres($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->delai_validite_offres !== $v) {
            $this->delai_validite_offres = $v;
            $this->modifiedColumns[] = CommonPassationConsultationPeer::DELAI_VALIDITE_OFFRES;
        }


        return $this;
    } // setDelaiValiditeOffres()

    /**
     * Set the value of [commentaires_phase_consultation] column.
     * 
     * @param string $v new value
     * @return CommonPassationConsultation The current object (for fluent API support)
     */
    public function setCommentairesPhaseConsultation($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->commentaires_phase_consultation !== $v) {
            $this->commentaires_phase_consultation = $v;
            $this->modifiedColumns[] = CommonPassationConsultationPeer::COMMENTAIRES_PHASE_CONSULTATION;
        }


        return $this;
    } // setCommentairesPhaseConsultation()

    /**
     * Set the value of [date_reunion_ouverture_candidatures] column.
     * 
     * @param string $v new value
     * @return CommonPassationConsultation The current object (for fluent API support)
     */
    public function setDateReunionOuvertureCandidatures($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_reunion_ouverture_candidatures !== $v) {
            $this->date_reunion_ouverture_candidatures = $v;
            $this->modifiedColumns[] = CommonPassationConsultationPeer::DATE_REUNION_OUVERTURE_CANDIDATURES;
        }


        return $this;
    } // setDateReunionOuvertureCandidatures()

    /**
     * Set the value of [date_reunion_ouverture_offres] column.
     * 
     * @param string $v new value
     * @return CommonPassationConsultation The current object (for fluent API support)
     */
    public function setDateReunionOuvertureOffres($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (string) $v;
        }

        if ($this->date_reunion_ouverture_offres !== $v) {
            $this->date_reunion_ouverture_offres = $v;
            $this->modifiedColumns[] = CommonPassationConsultationPeer::DATE_REUNION_OUVERTURE_OFFRES;
        }


        return $this;
    } // setDateReunionOuvertureOffres()

    /**
     * Set the value of [decision] column.
     * 
     * @param int $v new value
     * @return CommonPassationConsultation The current object (for fluent API support)
     */
    public function setDecision($v)
    {
        if ($v !== null && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->decision !== $v) {
            $this->decision = $v;
            $this->modifiedColumns[] = CommonPassationConsultationPeer::DECISION;
        }


        return $this;
    } // setDecision()

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
            if ($this->reference !== 0) {
                return false;
            }

            if ($this->unite !== 0) {
                return false;
            }

            if ($this->mandataire !== 0) {
                return false;
            }

            if ($this->lieu_detaille_predefini !== 0) {
                return false;
            }

            if ($this->date_validation_projet_dce_vue_par !== 0) {
                return false;
            }

            if ($this->date_validation_projet_aapc_par_service_validateur_vu_par !== 0) {
                return false;
            }

            if ($this->decision !== 0) {
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
            $this->reference = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
            $this->unite = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
            $this->mandataire = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
            $this->lieu_detaille_predefini = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
            $this->lieux_detailles_non_definis = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
            $this->code_postal_lieu_principal_execution = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
            $this->ville = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
            $this->montant_estime_consultation = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
            $this->commentaires = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
            $this->numero_deliberation_financiere = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
            $this->date_deliberation_financiere = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
            $this->imputation_budgetaire = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
            $this->numero_deliberation_autorisant_signature_marche = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
            $this->date_deliberation_autorisant_signature_marche = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
            $this->date_notification_previsionnelle = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
            $this->date_reception_projet_dce_service_validateur = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
            $this->date_formulations_premieres_observations = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
            $this->date_retour_projet_dce_finalise = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
            $this->date_validation_projet_dce_par_service_validateur = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
            $this->date_validation_projet_dce_vue_par = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
            $this->date_reception_projet_aapc_par_service_validateur = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
            $this->date_formulations_premieres_observations_aapc = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
            $this->date_retour_projet_aapc_finalise = ($row[$startcol + 24] !== null) ? (string) $row[$startcol + 24] : null;
            $this->date_validation_projet_aapc_par_service_validateur = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
            $this->date_validation_projet_aapc_par_service_validateur_vu_par = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
            $this->date_envoi_publicite = ($row[$startcol + 27] !== null) ? (string) $row[$startcol + 27] : null;
            $this->date_envoi_invitations_remettre_offre = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
            $this->date_limite_remise_offres = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
            $this->delai_validite_offres = ($row[$startcol + 30] !== null) ? (string) $row[$startcol + 30] : null;
            $this->commentaires_phase_consultation = ($row[$startcol + 31] !== null) ? (string) $row[$startcol + 31] : null;
            $this->date_reunion_ouverture_candidatures = ($row[$startcol + 32] !== null) ? (string) $row[$startcol + 32] : null;
            $this->date_reunion_ouverture_offres = ($row[$startcol + 33] !== null) ? (string) $row[$startcol + 33] : null;
            $this->decision = ($row[$startcol + 34] !== null) ? (int) $row[$startcol + 34] : null;
            $this->resetModified();

            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }
            $this->postHydrate($row, $startcol, $rehydrate);

            return $startcol + 35; // 35 = CommonPassationConsultationPeer::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException("Error populating CommonPassationConsultation object", $e);
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
            $con = Propel::getConnection(CommonPassationConsultationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $stmt = CommonPassationConsultationPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
            $con = Propel::getConnection(CommonPassationConsultationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $con->beginTransaction();
        try {
            $deleteQuery = CommonPassationConsultationQuery::create()
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
            $con = Propel::getConnection(CommonPassationConsultationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
                CommonPassationConsultationPeer::addInstanceToPool($this);
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

        $this->modifiedColumns[] = CommonPassationConsultationPeer::ID;
        if (null !== $this->id) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . CommonPassationConsultationPeer::ID . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(CommonPassationConsultationPeer::ID)) {
            $modifiedColumns[':p' . $index++]  = '`id`';
        }
        if ($this->isColumnModified(CommonPassationConsultationPeer::ORGANISME)) {
            $modifiedColumns[':p' . $index++]  = '`organisme`';
        }
        if ($this->isColumnModified(CommonPassationConsultationPeer::REFERENCE)) {
            $modifiedColumns[':p' . $index++]  = '`reference`';
        }
        if ($this->isColumnModified(CommonPassationConsultationPeer::UNITE)) {
            $modifiedColumns[':p' . $index++]  = '`unite`';
        }
        if ($this->isColumnModified(CommonPassationConsultationPeer::MANDATAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`mandataire`';
        }
        if ($this->isColumnModified(CommonPassationConsultationPeer::LIEU_DETAILLE_PREDEFINI)) {
            $modifiedColumns[':p' . $index++]  = '`lieu_detaille_predefini`';
        }
        if ($this->isColumnModified(CommonPassationConsultationPeer::LIEUX_DETAILLES_NON_DEFINIS)) {
            $modifiedColumns[':p' . $index++]  = '`lieux_detailles_non_definis`';
        }
        if ($this->isColumnModified(CommonPassationConsultationPeer::CODE_POSTAL_LIEU_PRINCIPAL_EXECUTION)) {
            $modifiedColumns[':p' . $index++]  = '`code_postal_lieu_principal_execution`';
        }
        if ($this->isColumnModified(CommonPassationConsultationPeer::VILLE)) {
            $modifiedColumns[':p' . $index++]  = '`Ville`';
        }
        if ($this->isColumnModified(CommonPassationConsultationPeer::MONTANT_ESTIME_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`montant_estime_consultation`';
        }
        if ($this->isColumnModified(CommonPassationConsultationPeer::COMMENTAIRES)) {
            $modifiedColumns[':p' . $index++]  = '`commentaires`';
        }
        if ($this->isColumnModified(CommonPassationConsultationPeer::NUMERO_DELIBERATION_FINANCIERE)) {
            $modifiedColumns[':p' . $index++]  = '`numero_deliberation_financiere`';
        }
        if ($this->isColumnModified(CommonPassationConsultationPeer::DATE_DELIBERATION_FINANCIERE)) {
            $modifiedColumns[':p' . $index++]  = '`date_deliberation_financiere`';
        }
        if ($this->isColumnModified(CommonPassationConsultationPeer::IMPUTATION_BUDGETAIRE)) {
            $modifiedColumns[':p' . $index++]  = '`imputation_budgetaire`';
        }
        if ($this->isColumnModified(CommonPassationConsultationPeer::NUMERO_DELIBERATION_AUTORISANT_SIGNATURE_MARCHE)) {
            $modifiedColumns[':p' . $index++]  = '`numero_deliberation_autorisant_signature_marche`';
        }
        if ($this->isColumnModified(CommonPassationConsultationPeer::DATE_DELIBERATION_AUTORISANT_SIGNATURE_MARCHE)) {
            $modifiedColumns[':p' . $index++]  = '`date_deliberation_autorisant_signature_marche`';
        }
        if ($this->isColumnModified(CommonPassationConsultationPeer::DATE_NOTIFICATION_PREVISIONNELLE)) {
            $modifiedColumns[':p' . $index++]  = '`date_notification_previsionnelle`';
        }
        if ($this->isColumnModified(CommonPassationConsultationPeer::DATE_RECEPTION_PROJET_DCE_SERVICE_VALIDATEUR)) {
            $modifiedColumns[':p' . $index++]  = '`date_reception_projet_DCE_Service_Validateur`';
        }
        if ($this->isColumnModified(CommonPassationConsultationPeer::DATE_FORMULATIONS_PREMIERES_OBSERVATIONS)) {
            $modifiedColumns[':p' . $index++]  = '`date_formulations_premieres_observations`';
        }
        if ($this->isColumnModified(CommonPassationConsultationPeer::DATE_RETOUR_PROJET_DCE_FINALISE)) {
            $modifiedColumns[':p' . $index++]  = '`date_retour_projet_DCE_finalise`';
        }
        if ($this->isColumnModified(CommonPassationConsultationPeer::DATE_VALIDATION_PROJET_DCE_PAR_SERVICE_VALIDATEUR)) {
            $modifiedColumns[':p' . $index++]  = '`date_validation_projet_DCE_par_service_validateur`';
        }
        if ($this->isColumnModified(CommonPassationConsultationPeer::DATE_VALIDATION_PROJET_DCE_VUE_PAR)) {
            $modifiedColumns[':p' . $index++]  = '`date_validation_projet_DCE_vue_par`';
        }
        if ($this->isColumnModified(CommonPassationConsultationPeer::DATE_RECEPTION_PROJET_AAPC_PAR_SERVICE_VALIDATEUR)) {
            $modifiedColumns[':p' . $index++]  = '`date_reception_projet_AAPC_par_Service_Validateur`';
        }
        if ($this->isColumnModified(CommonPassationConsultationPeer::DATE_FORMULATIONS_PREMIERES_OBSERVATIONS_AAPC)) {
            $modifiedColumns[':p' . $index++]  = '`date_formulations_premieres_observations_AAPC`';
        }
        if ($this->isColumnModified(CommonPassationConsultationPeer::DATE_RETOUR_PROJET_AAPC_FINALISE)) {
            $modifiedColumns[':p' . $index++]  = '`date_retour_projet_AAPC_finalise`';
        }
        if ($this->isColumnModified(CommonPassationConsultationPeer::DATE_VALIDATION_PROJET_AAPC_PAR_SERVICE_VALIDATEUR)) {
            $modifiedColumns[':p' . $index++]  = '`date_validation_projet_AAPC_par_Service_Validateur`';
        }
        if ($this->isColumnModified(CommonPassationConsultationPeer::DATE_VALIDATION_PROJET_AAPC_PAR_SERVICE_VALIDATEUR_VU_PAR)) {
            $modifiedColumns[':p' . $index++]  = '`date_validation_projet_AAPC_par_Service_Validateur_vu_par`';
        }
        if ($this->isColumnModified(CommonPassationConsultationPeer::DATE_ENVOI_PUBLICITE)) {
            $modifiedColumns[':p' . $index++]  = '`date_envoi_publicite`';
        }
        if ($this->isColumnModified(CommonPassationConsultationPeer::DATE_ENVOI_INVITATIONS_REMETTRE_OFFRE)) {
            $modifiedColumns[':p' . $index++]  = '`date_envoi_invitations_remettre_offre`';
        }
        if ($this->isColumnModified(CommonPassationConsultationPeer::DATE_LIMITE_REMISE_OFFRES)) {
            $modifiedColumns[':p' . $index++]  = '`date_limite_remise_offres`';
        }
        if ($this->isColumnModified(CommonPassationConsultationPeer::DELAI_VALIDITE_OFFRES)) {
            $modifiedColumns[':p' . $index++]  = '`delai_validite_offres`';
        }
        if ($this->isColumnModified(CommonPassationConsultationPeer::COMMENTAIRES_PHASE_CONSULTATION)) {
            $modifiedColumns[':p' . $index++]  = '`commentaires_phase_consultation`';
        }
        if ($this->isColumnModified(CommonPassationConsultationPeer::DATE_REUNION_OUVERTURE_CANDIDATURES)) {
            $modifiedColumns[':p' . $index++]  = '`date_reunion_ouverture_candidatures`';
        }
        if ($this->isColumnModified(CommonPassationConsultationPeer::DATE_REUNION_OUVERTURE_OFFRES)) {
            $modifiedColumns[':p' . $index++]  = '`date_reunion_ouverture_offres`';
        }
        if ($this->isColumnModified(CommonPassationConsultationPeer::DECISION)) {
            $modifiedColumns[':p' . $index++]  = '`decision`';
        }

        $sql = sprintf(
            'INSERT INTO `Passation_consultation` (%s) VALUES (%s)',
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
                    case '`reference`':						
                        $stmt->bindValue($identifier, $this->reference, PDO::PARAM_INT);
                        break;
                    case '`unite`':						
                        $stmt->bindValue($identifier, $this->unite, PDO::PARAM_INT);
                        break;
                    case '`mandataire`':						
                        $stmt->bindValue($identifier, $this->mandataire, PDO::PARAM_INT);
                        break;
                    case '`lieu_detaille_predefini`':						
                        $stmt->bindValue($identifier, $this->lieu_detaille_predefini, PDO::PARAM_INT);
                        break;
                    case '`lieux_detailles_non_definis`':						
                        $stmt->bindValue($identifier, $this->lieux_detailles_non_definis, PDO::PARAM_STR);
                        break;
                    case '`code_postal_lieu_principal_execution`':						
                        $stmt->bindValue($identifier, $this->code_postal_lieu_principal_execution, PDO::PARAM_STR);
                        break;
                    case '`Ville`':						
                        $stmt->bindValue($identifier, $this->ville, PDO::PARAM_STR);
                        break;
                    case '`montant_estime_consultation`':						
                        $stmt->bindValue($identifier, $this->montant_estime_consultation, PDO::PARAM_STR);
                        break;
                    case '`commentaires`':						
                        $stmt->bindValue($identifier, $this->commentaires, PDO::PARAM_STR);
                        break;
                    case '`numero_deliberation_financiere`':						
                        $stmt->bindValue($identifier, $this->numero_deliberation_financiere, PDO::PARAM_STR);
                        break;
                    case '`date_deliberation_financiere`':						
                        $stmt->bindValue($identifier, $this->date_deliberation_financiere, PDO::PARAM_STR);
                        break;
                    case '`imputation_budgetaire`':						
                        $stmt->bindValue($identifier, $this->imputation_budgetaire, PDO::PARAM_STR);
                        break;
                    case '`numero_deliberation_autorisant_signature_marche`':						
                        $stmt->bindValue($identifier, $this->numero_deliberation_autorisant_signature_marche, PDO::PARAM_STR);
                        break;
                    case '`date_deliberation_autorisant_signature_marche`':						
                        $stmt->bindValue($identifier, $this->date_deliberation_autorisant_signature_marche, PDO::PARAM_STR);
                        break;
                    case '`date_notification_previsionnelle`':						
                        $stmt->bindValue($identifier, $this->date_notification_previsionnelle, PDO::PARAM_STR);
                        break;
                    case '`date_reception_projet_DCE_Service_Validateur`':						
                        $stmt->bindValue($identifier, $this->date_reception_projet_dce_service_validateur, PDO::PARAM_STR);
                        break;
                    case '`date_formulations_premieres_observations`':						
                        $stmt->bindValue($identifier, $this->date_formulations_premieres_observations, PDO::PARAM_STR);
                        break;
                    case '`date_retour_projet_DCE_finalise`':						
                        $stmt->bindValue($identifier, $this->date_retour_projet_dce_finalise, PDO::PARAM_STR);
                        break;
                    case '`date_validation_projet_DCE_par_service_validateur`':						
                        $stmt->bindValue($identifier, $this->date_validation_projet_dce_par_service_validateur, PDO::PARAM_STR);
                        break;
                    case '`date_validation_projet_DCE_vue_par`':						
                        $stmt->bindValue($identifier, $this->date_validation_projet_dce_vue_par, PDO::PARAM_INT);
                        break;
                    case '`date_reception_projet_AAPC_par_Service_Validateur`':						
                        $stmt->bindValue($identifier, $this->date_reception_projet_aapc_par_service_validateur, PDO::PARAM_STR);
                        break;
                    case '`date_formulations_premieres_observations_AAPC`':						
                        $stmt->bindValue($identifier, $this->date_formulations_premieres_observations_aapc, PDO::PARAM_STR);
                        break;
                    case '`date_retour_projet_AAPC_finalise`':						
                        $stmt->bindValue($identifier, $this->date_retour_projet_aapc_finalise, PDO::PARAM_STR);
                        break;
                    case '`date_validation_projet_AAPC_par_Service_Validateur`':						
                        $stmt->bindValue($identifier, $this->date_validation_projet_aapc_par_service_validateur, PDO::PARAM_STR);
                        break;
                    case '`date_validation_projet_AAPC_par_Service_Validateur_vu_par`':						
                        $stmt->bindValue($identifier, $this->date_validation_projet_aapc_par_service_validateur_vu_par, PDO::PARAM_INT);
                        break;
                    case '`date_envoi_publicite`':						
                        $stmt->bindValue($identifier, $this->date_envoi_publicite, PDO::PARAM_STR);
                        break;
                    case '`date_envoi_invitations_remettre_offre`':						
                        $stmt->bindValue($identifier, $this->date_envoi_invitations_remettre_offre, PDO::PARAM_STR);
                        break;
                    case '`date_limite_remise_offres`':						
                        $stmt->bindValue($identifier, $this->date_limite_remise_offres, PDO::PARAM_STR);
                        break;
                    case '`delai_validite_offres`':						
                        $stmt->bindValue($identifier, $this->delai_validite_offres, PDO::PARAM_STR);
                        break;
                    case '`commentaires_phase_consultation`':						
                        $stmt->bindValue($identifier, $this->commentaires_phase_consultation, PDO::PARAM_STR);
                        break;
                    case '`date_reunion_ouverture_candidatures`':						
                        $stmt->bindValue($identifier, $this->date_reunion_ouverture_candidatures, PDO::PARAM_STR);
                        break;
                    case '`date_reunion_ouverture_offres`':						
                        $stmt->bindValue($identifier, $this->date_reunion_ouverture_offres, PDO::PARAM_STR);
                        break;
                    case '`decision`':						
                        $stmt->bindValue($identifier, $this->decision, PDO::PARAM_INT);
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


            if (($retval = CommonPassationConsultationPeer::doValidate($this, $columns)) !== true) {
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
        $pos = CommonPassationConsultationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                return $this->getReference();
                break;
            case 3:
                return $this->getUnite();
                break;
            case 4:
                return $this->getMandataire();
                break;
            case 5:
                return $this->getLieuDetaillePredefini();
                break;
            case 6:
                return $this->getLieuxDetaillesNonDefinis();
                break;
            case 7:
                return $this->getCodePostalLieuPrincipalExecution();
                break;
            case 8:
                return $this->getVille();
                break;
            case 9:
                return $this->getMontantEstimeConsultation();
                break;
            case 10:
                return $this->getCommentaires();
                break;
            case 11:
                return $this->getNumeroDeliberationFinanciere();
                break;
            case 12:
                return $this->getDateDeliberationFinanciere();
                break;
            case 13:
                return $this->getImputationBudgetaire();
                break;
            case 14:
                return $this->getNumeroDeliberationAutorisantSignatureMarche();
                break;
            case 15:
                return $this->getDateDeliberationAutorisantSignatureMarche();
                break;
            case 16:
                return $this->getDateNotificationPrevisionnelle();
                break;
            case 17:
                return $this->getDateReceptionProjetDceServiceValidateur();
                break;
            case 18:
                return $this->getDateFormulationsPremieresObservations();
                break;
            case 19:
                return $this->getDateRetourProjetDceFinalise();
                break;
            case 20:
                return $this->getDateValidationProjetDceParServiceValidateur();
                break;
            case 21:
                return $this->getDateValidationProjetDceVuePar();
                break;
            case 22:
                return $this->getDateReceptionProjetAapcParServiceValidateur();
                break;
            case 23:
                return $this->getDateFormulationsPremieresObservationsAapc();
                break;
            case 24:
                return $this->getDateRetourProjetAapcFinalise();
                break;
            case 25:
                return $this->getDateValidationProjetAapcParServiceValidateur();
                break;
            case 26:
                return $this->getDateValidationProjetAapcParServiceValidateurVuPar();
                break;
            case 27:
                return $this->getDateEnvoiPublicite();
                break;
            case 28:
                return $this->getDateEnvoiInvitationsRemettreOffre();
                break;
            case 29:
                return $this->getDateLimiteRemiseOffres();
                break;
            case 30:
                return $this->getDelaiValiditeOffres();
                break;
            case 31:
                return $this->getCommentairesPhaseConsultation();
                break;
            case 32:
                return $this->getDateReunionOuvertureCandidatures();
                break;
            case 33:
                return $this->getDateReunionOuvertureOffres();
                break;
            case 34:
                return $this->getDecision();
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
        if (isset($alreadyDumpedObjects['CommonPassationConsultation'][serialize($this->getPrimaryKey())])) {
            return '*RECURSION*';
        }
        $alreadyDumpedObjects['CommonPassationConsultation'][serialize($this->getPrimaryKey())] = true;
        $keys = CommonPassationConsultationPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getId(),
            $keys[1] => $this->getOrganisme(),
            $keys[2] => $this->getReference(),
            $keys[3] => $this->getUnite(),
            $keys[4] => $this->getMandataire(),
            $keys[5] => $this->getLieuDetaillePredefini(),
            $keys[6] => $this->getLieuxDetaillesNonDefinis(),
            $keys[7] => $this->getCodePostalLieuPrincipalExecution(),
            $keys[8] => $this->getVille(),
            $keys[9] => $this->getMontantEstimeConsultation(),
            $keys[10] => $this->getCommentaires(),
            $keys[11] => $this->getNumeroDeliberationFinanciere(),
            $keys[12] => $this->getDateDeliberationFinanciere(),
            $keys[13] => $this->getImputationBudgetaire(),
            $keys[14] => $this->getNumeroDeliberationAutorisantSignatureMarche(),
            $keys[15] => $this->getDateDeliberationAutorisantSignatureMarche(),
            $keys[16] => $this->getDateNotificationPrevisionnelle(),
            $keys[17] => $this->getDateReceptionProjetDceServiceValidateur(),
            $keys[18] => $this->getDateFormulationsPremieresObservations(),
            $keys[19] => $this->getDateRetourProjetDceFinalise(),
            $keys[20] => $this->getDateValidationProjetDceParServiceValidateur(),
            $keys[21] => $this->getDateValidationProjetDceVuePar(),
            $keys[22] => $this->getDateReceptionProjetAapcParServiceValidateur(),
            $keys[23] => $this->getDateFormulationsPremieresObservationsAapc(),
            $keys[24] => $this->getDateRetourProjetAapcFinalise(),
            $keys[25] => $this->getDateValidationProjetAapcParServiceValidateur(),
            $keys[26] => $this->getDateValidationProjetAapcParServiceValidateurVuPar(),
            $keys[27] => $this->getDateEnvoiPublicite(),
            $keys[28] => $this->getDateEnvoiInvitationsRemettreOffre(),
            $keys[29] => $this->getDateLimiteRemiseOffres(),
            $keys[30] => $this->getDelaiValiditeOffres(),
            $keys[31] => $this->getCommentairesPhaseConsultation(),
            $keys[32] => $this->getDateReunionOuvertureCandidatures(),
            $keys[33] => $this->getDateReunionOuvertureOffres(),
            $keys[34] => $this->getDecision(),
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
        $pos = CommonPassationConsultationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);

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
                $this->setReference($value);
                break;
            case 3:
                $this->setUnite($value);
                break;
            case 4:
                $this->setMandataire($value);
                break;
            case 5:
                $this->setLieuDetaillePredefini($value);
                break;
            case 6:
                $this->setLieuxDetaillesNonDefinis($value);
                break;
            case 7:
                $this->setCodePostalLieuPrincipalExecution($value);
                break;
            case 8:
                $this->setVille($value);
                break;
            case 9:
                $this->setMontantEstimeConsultation($value);
                break;
            case 10:
                $this->setCommentaires($value);
                break;
            case 11:
                $this->setNumeroDeliberationFinanciere($value);
                break;
            case 12:
                $this->setDateDeliberationFinanciere($value);
                break;
            case 13:
                $this->setImputationBudgetaire($value);
                break;
            case 14:
                $this->setNumeroDeliberationAutorisantSignatureMarche($value);
                break;
            case 15:
                $this->setDateDeliberationAutorisantSignatureMarche($value);
                break;
            case 16:
                $this->setDateNotificationPrevisionnelle($value);
                break;
            case 17:
                $this->setDateReceptionProjetDceServiceValidateur($value);
                break;
            case 18:
                $this->setDateFormulationsPremieresObservations($value);
                break;
            case 19:
                $this->setDateRetourProjetDceFinalise($value);
                break;
            case 20:
                $this->setDateValidationProjetDceParServiceValidateur($value);
                break;
            case 21:
                $this->setDateValidationProjetDceVuePar($value);
                break;
            case 22:
                $this->setDateReceptionProjetAapcParServiceValidateur($value);
                break;
            case 23:
                $this->setDateFormulationsPremieresObservationsAapc($value);
                break;
            case 24:
                $this->setDateRetourProjetAapcFinalise($value);
                break;
            case 25:
                $this->setDateValidationProjetAapcParServiceValidateur($value);
                break;
            case 26:
                $this->setDateValidationProjetAapcParServiceValidateurVuPar($value);
                break;
            case 27:
                $this->setDateEnvoiPublicite($value);
                break;
            case 28:
                $this->setDateEnvoiInvitationsRemettreOffre($value);
                break;
            case 29:
                $this->setDateLimiteRemiseOffres($value);
                break;
            case 30:
                $this->setDelaiValiditeOffres($value);
                break;
            case 31:
                $this->setCommentairesPhaseConsultation($value);
                break;
            case 32:
                $this->setDateReunionOuvertureCandidatures($value);
                break;
            case 33:
                $this->setDateReunionOuvertureOffres($value);
                break;
            case 34:
                $this->setDecision($value);
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
        $keys = CommonPassationConsultationPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
        if (array_key_exists($keys[1], $arr)) $this->setOrganisme($arr[$keys[1]]);
        if (array_key_exists($keys[2], $arr)) $this->setReference($arr[$keys[2]]);
        if (array_key_exists($keys[3], $arr)) $this->setUnite($arr[$keys[3]]);
        if (array_key_exists($keys[4], $arr)) $this->setMandataire($arr[$keys[4]]);
        if (array_key_exists($keys[5], $arr)) $this->setLieuDetaillePredefini($arr[$keys[5]]);
        if (array_key_exists($keys[6], $arr)) $this->setLieuxDetaillesNonDefinis($arr[$keys[6]]);
        if (array_key_exists($keys[7], $arr)) $this->setCodePostalLieuPrincipalExecution($arr[$keys[7]]);
        if (array_key_exists($keys[8], $arr)) $this->setVille($arr[$keys[8]]);
        if (array_key_exists($keys[9], $arr)) $this->setMontantEstimeConsultation($arr[$keys[9]]);
        if (array_key_exists($keys[10], $arr)) $this->setCommentaires($arr[$keys[10]]);
        if (array_key_exists($keys[11], $arr)) $this->setNumeroDeliberationFinanciere($arr[$keys[11]]);
        if (array_key_exists($keys[12], $arr)) $this->setDateDeliberationFinanciere($arr[$keys[12]]);
        if (array_key_exists($keys[13], $arr)) $this->setImputationBudgetaire($arr[$keys[13]]);
        if (array_key_exists($keys[14], $arr)) $this->setNumeroDeliberationAutorisantSignatureMarche($arr[$keys[14]]);
        if (array_key_exists($keys[15], $arr)) $this->setDateDeliberationAutorisantSignatureMarche($arr[$keys[15]]);
        if (array_key_exists($keys[16], $arr)) $this->setDateNotificationPrevisionnelle($arr[$keys[16]]);
        if (array_key_exists($keys[17], $arr)) $this->setDateReceptionProjetDceServiceValidateur($arr[$keys[17]]);
        if (array_key_exists($keys[18], $arr)) $this->setDateFormulationsPremieresObservations($arr[$keys[18]]);
        if (array_key_exists($keys[19], $arr)) $this->setDateRetourProjetDceFinalise($arr[$keys[19]]);
        if (array_key_exists($keys[20], $arr)) $this->setDateValidationProjetDceParServiceValidateur($arr[$keys[20]]);
        if (array_key_exists($keys[21], $arr)) $this->setDateValidationProjetDceVuePar($arr[$keys[21]]);
        if (array_key_exists($keys[22], $arr)) $this->setDateReceptionProjetAapcParServiceValidateur($arr[$keys[22]]);
        if (array_key_exists($keys[23], $arr)) $this->setDateFormulationsPremieresObservationsAapc($arr[$keys[23]]);
        if (array_key_exists($keys[24], $arr)) $this->setDateRetourProjetAapcFinalise($arr[$keys[24]]);
        if (array_key_exists($keys[25], $arr)) $this->setDateValidationProjetAapcParServiceValidateur($arr[$keys[25]]);
        if (array_key_exists($keys[26], $arr)) $this->setDateValidationProjetAapcParServiceValidateurVuPar($arr[$keys[26]]);
        if (array_key_exists($keys[27], $arr)) $this->setDateEnvoiPublicite($arr[$keys[27]]);
        if (array_key_exists($keys[28], $arr)) $this->setDateEnvoiInvitationsRemettreOffre($arr[$keys[28]]);
        if (array_key_exists($keys[29], $arr)) $this->setDateLimiteRemiseOffres($arr[$keys[29]]);
        if (array_key_exists($keys[30], $arr)) $this->setDelaiValiditeOffres($arr[$keys[30]]);
        if (array_key_exists($keys[31], $arr)) $this->setCommentairesPhaseConsultation($arr[$keys[31]]);
        if (array_key_exists($keys[32], $arr)) $this->setDateReunionOuvertureCandidatures($arr[$keys[32]]);
        if (array_key_exists($keys[33], $arr)) $this->setDateReunionOuvertureOffres($arr[$keys[33]]);
        if (array_key_exists($keys[34], $arr)) $this->setDecision($arr[$keys[34]]);
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(CommonPassationConsultationPeer::DATABASE_NAME);

        if ($this->isColumnModified(CommonPassationConsultationPeer::ID)) $criteria->add(CommonPassationConsultationPeer::ID, $this->id);
        if ($this->isColumnModified(CommonPassationConsultationPeer::ORGANISME)) $criteria->add(CommonPassationConsultationPeer::ORGANISME, $this->organisme);
        if ($this->isColumnModified(CommonPassationConsultationPeer::REFERENCE)) $criteria->add(CommonPassationConsultationPeer::REFERENCE, $this->reference);
        if ($this->isColumnModified(CommonPassationConsultationPeer::UNITE)) $criteria->add(CommonPassationConsultationPeer::UNITE, $this->unite);
        if ($this->isColumnModified(CommonPassationConsultationPeer::MANDATAIRE)) $criteria->add(CommonPassationConsultationPeer::MANDATAIRE, $this->mandataire);
        if ($this->isColumnModified(CommonPassationConsultationPeer::LIEU_DETAILLE_PREDEFINI)) $criteria->add(CommonPassationConsultationPeer::LIEU_DETAILLE_PREDEFINI, $this->lieu_detaille_predefini);
        if ($this->isColumnModified(CommonPassationConsultationPeer::LIEUX_DETAILLES_NON_DEFINIS)) $criteria->add(CommonPassationConsultationPeer::LIEUX_DETAILLES_NON_DEFINIS, $this->lieux_detailles_non_definis);
        if ($this->isColumnModified(CommonPassationConsultationPeer::CODE_POSTAL_LIEU_PRINCIPAL_EXECUTION)) $criteria->add(CommonPassationConsultationPeer::CODE_POSTAL_LIEU_PRINCIPAL_EXECUTION, $this->code_postal_lieu_principal_execution);
        if ($this->isColumnModified(CommonPassationConsultationPeer::VILLE)) $criteria->add(CommonPassationConsultationPeer::VILLE, $this->ville);
        if ($this->isColumnModified(CommonPassationConsultationPeer::MONTANT_ESTIME_CONSULTATION)) $criteria->add(CommonPassationConsultationPeer::MONTANT_ESTIME_CONSULTATION, $this->montant_estime_consultation);
        if ($this->isColumnModified(CommonPassationConsultationPeer::COMMENTAIRES)) $criteria->add(CommonPassationConsultationPeer::COMMENTAIRES, $this->commentaires);
        if ($this->isColumnModified(CommonPassationConsultationPeer::NUMERO_DELIBERATION_FINANCIERE)) $criteria->add(CommonPassationConsultationPeer::NUMERO_DELIBERATION_FINANCIERE, $this->numero_deliberation_financiere);
        if ($this->isColumnModified(CommonPassationConsultationPeer::DATE_DELIBERATION_FINANCIERE)) $criteria->add(CommonPassationConsultationPeer::DATE_DELIBERATION_FINANCIERE, $this->date_deliberation_financiere);
        if ($this->isColumnModified(CommonPassationConsultationPeer::IMPUTATION_BUDGETAIRE)) $criteria->add(CommonPassationConsultationPeer::IMPUTATION_BUDGETAIRE, $this->imputation_budgetaire);
        if ($this->isColumnModified(CommonPassationConsultationPeer::NUMERO_DELIBERATION_AUTORISANT_SIGNATURE_MARCHE)) $criteria->add(CommonPassationConsultationPeer::NUMERO_DELIBERATION_AUTORISANT_SIGNATURE_MARCHE, $this->numero_deliberation_autorisant_signature_marche);
        if ($this->isColumnModified(CommonPassationConsultationPeer::DATE_DELIBERATION_AUTORISANT_SIGNATURE_MARCHE)) $criteria->add(CommonPassationConsultationPeer::DATE_DELIBERATION_AUTORISANT_SIGNATURE_MARCHE, $this->date_deliberation_autorisant_signature_marche);
        if ($this->isColumnModified(CommonPassationConsultationPeer::DATE_NOTIFICATION_PREVISIONNELLE)) $criteria->add(CommonPassationConsultationPeer::DATE_NOTIFICATION_PREVISIONNELLE, $this->date_notification_previsionnelle);
        if ($this->isColumnModified(CommonPassationConsultationPeer::DATE_RECEPTION_PROJET_DCE_SERVICE_VALIDATEUR)) $criteria->add(CommonPassationConsultationPeer::DATE_RECEPTION_PROJET_DCE_SERVICE_VALIDATEUR, $this->date_reception_projet_dce_service_validateur);
        if ($this->isColumnModified(CommonPassationConsultationPeer::DATE_FORMULATIONS_PREMIERES_OBSERVATIONS)) $criteria->add(CommonPassationConsultationPeer::DATE_FORMULATIONS_PREMIERES_OBSERVATIONS, $this->date_formulations_premieres_observations);
        if ($this->isColumnModified(CommonPassationConsultationPeer::DATE_RETOUR_PROJET_DCE_FINALISE)) $criteria->add(CommonPassationConsultationPeer::DATE_RETOUR_PROJET_DCE_FINALISE, $this->date_retour_projet_dce_finalise);
        if ($this->isColumnModified(CommonPassationConsultationPeer::DATE_VALIDATION_PROJET_DCE_PAR_SERVICE_VALIDATEUR)) $criteria->add(CommonPassationConsultationPeer::DATE_VALIDATION_PROJET_DCE_PAR_SERVICE_VALIDATEUR, $this->date_validation_projet_dce_par_service_validateur);
        if ($this->isColumnModified(CommonPassationConsultationPeer::DATE_VALIDATION_PROJET_DCE_VUE_PAR)) $criteria->add(CommonPassationConsultationPeer::DATE_VALIDATION_PROJET_DCE_VUE_PAR, $this->date_validation_projet_dce_vue_par);
        if ($this->isColumnModified(CommonPassationConsultationPeer::DATE_RECEPTION_PROJET_AAPC_PAR_SERVICE_VALIDATEUR)) $criteria->add(CommonPassationConsultationPeer::DATE_RECEPTION_PROJET_AAPC_PAR_SERVICE_VALIDATEUR, $this->date_reception_projet_aapc_par_service_validateur);
        if ($this->isColumnModified(CommonPassationConsultationPeer::DATE_FORMULATIONS_PREMIERES_OBSERVATIONS_AAPC)) $criteria->add(CommonPassationConsultationPeer::DATE_FORMULATIONS_PREMIERES_OBSERVATIONS_AAPC, $this->date_formulations_premieres_observations_aapc);
        if ($this->isColumnModified(CommonPassationConsultationPeer::DATE_RETOUR_PROJET_AAPC_FINALISE)) $criteria->add(CommonPassationConsultationPeer::DATE_RETOUR_PROJET_AAPC_FINALISE, $this->date_retour_projet_aapc_finalise);
        if ($this->isColumnModified(CommonPassationConsultationPeer::DATE_VALIDATION_PROJET_AAPC_PAR_SERVICE_VALIDATEUR)) $criteria->add(CommonPassationConsultationPeer::DATE_VALIDATION_PROJET_AAPC_PAR_SERVICE_VALIDATEUR, $this->date_validation_projet_aapc_par_service_validateur);
        if ($this->isColumnModified(CommonPassationConsultationPeer::DATE_VALIDATION_PROJET_AAPC_PAR_SERVICE_VALIDATEUR_VU_PAR)) $criteria->add(CommonPassationConsultationPeer::DATE_VALIDATION_PROJET_AAPC_PAR_SERVICE_VALIDATEUR_VU_PAR, $this->date_validation_projet_aapc_par_service_validateur_vu_par);
        if ($this->isColumnModified(CommonPassationConsultationPeer::DATE_ENVOI_PUBLICITE)) $criteria->add(CommonPassationConsultationPeer::DATE_ENVOI_PUBLICITE, $this->date_envoi_publicite);
        if ($this->isColumnModified(CommonPassationConsultationPeer::DATE_ENVOI_INVITATIONS_REMETTRE_OFFRE)) $criteria->add(CommonPassationConsultationPeer::DATE_ENVOI_INVITATIONS_REMETTRE_OFFRE, $this->date_envoi_invitations_remettre_offre);
        if ($this->isColumnModified(CommonPassationConsultationPeer::DATE_LIMITE_REMISE_OFFRES)) $criteria->add(CommonPassationConsultationPeer::DATE_LIMITE_REMISE_OFFRES, $this->date_limite_remise_offres);
        if ($this->isColumnModified(CommonPassationConsultationPeer::DELAI_VALIDITE_OFFRES)) $criteria->add(CommonPassationConsultationPeer::DELAI_VALIDITE_OFFRES, $this->delai_validite_offres);
        if ($this->isColumnModified(CommonPassationConsultationPeer::COMMENTAIRES_PHASE_CONSULTATION)) $criteria->add(CommonPassationConsultationPeer::COMMENTAIRES_PHASE_CONSULTATION, $this->commentaires_phase_consultation);
        if ($this->isColumnModified(CommonPassationConsultationPeer::DATE_REUNION_OUVERTURE_CANDIDATURES)) $criteria->add(CommonPassationConsultationPeer::DATE_REUNION_OUVERTURE_CANDIDATURES, $this->date_reunion_ouverture_candidatures);
        if ($this->isColumnModified(CommonPassationConsultationPeer::DATE_REUNION_OUVERTURE_OFFRES)) $criteria->add(CommonPassationConsultationPeer::DATE_REUNION_OUVERTURE_OFFRES, $this->date_reunion_ouverture_offres);
        if ($this->isColumnModified(CommonPassationConsultationPeer::DECISION)) $criteria->add(CommonPassationConsultationPeer::DECISION, $this->decision);

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
        $criteria = new Criteria(CommonPassationConsultationPeer::DATABASE_NAME);
        $criteria->add(CommonPassationConsultationPeer::ID, $this->id);
        $criteria->add(CommonPassationConsultationPeer::ORGANISME, $this->organisme);

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
     * @param object $copyObj An object of CommonPassationConsultation (or compatible) type.
     * @param boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param boolean $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws PropelException
     */
    public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
    {
        $copyObj->setOrganisme($this->getOrganisme());
        $copyObj->setReference($this->getReference());
        $copyObj->setUnite($this->getUnite());
        $copyObj->setMandataire($this->getMandataire());
        $copyObj->setLieuDetaillePredefini($this->getLieuDetaillePredefini());
        $copyObj->setLieuxDetaillesNonDefinis($this->getLieuxDetaillesNonDefinis());
        $copyObj->setCodePostalLieuPrincipalExecution($this->getCodePostalLieuPrincipalExecution());
        $copyObj->setVille($this->getVille());
        $copyObj->setMontantEstimeConsultation($this->getMontantEstimeConsultation());
        $copyObj->setCommentaires($this->getCommentaires());
        $copyObj->setNumeroDeliberationFinanciere($this->getNumeroDeliberationFinanciere());
        $copyObj->setDateDeliberationFinanciere($this->getDateDeliberationFinanciere());
        $copyObj->setImputationBudgetaire($this->getImputationBudgetaire());
        $copyObj->setNumeroDeliberationAutorisantSignatureMarche($this->getNumeroDeliberationAutorisantSignatureMarche());
        $copyObj->setDateDeliberationAutorisantSignatureMarche($this->getDateDeliberationAutorisantSignatureMarche());
        $copyObj->setDateNotificationPrevisionnelle($this->getDateNotificationPrevisionnelle());
        $copyObj->setDateReceptionProjetDceServiceValidateur($this->getDateReceptionProjetDceServiceValidateur());
        $copyObj->setDateFormulationsPremieresObservations($this->getDateFormulationsPremieresObservations());
        $copyObj->setDateRetourProjetDceFinalise($this->getDateRetourProjetDceFinalise());
        $copyObj->setDateValidationProjetDceParServiceValidateur($this->getDateValidationProjetDceParServiceValidateur());
        $copyObj->setDateValidationProjetDceVuePar($this->getDateValidationProjetDceVuePar());
        $copyObj->setDateReceptionProjetAapcParServiceValidateur($this->getDateReceptionProjetAapcParServiceValidateur());
        $copyObj->setDateFormulationsPremieresObservationsAapc($this->getDateFormulationsPremieresObservationsAapc());
        $copyObj->setDateRetourProjetAapcFinalise($this->getDateRetourProjetAapcFinalise());
        $copyObj->setDateValidationProjetAapcParServiceValidateur($this->getDateValidationProjetAapcParServiceValidateur());
        $copyObj->setDateValidationProjetAapcParServiceValidateurVuPar($this->getDateValidationProjetAapcParServiceValidateurVuPar());
        $copyObj->setDateEnvoiPublicite($this->getDateEnvoiPublicite());
        $copyObj->setDateEnvoiInvitationsRemettreOffre($this->getDateEnvoiInvitationsRemettreOffre());
        $copyObj->setDateLimiteRemiseOffres($this->getDateLimiteRemiseOffres());
        $copyObj->setDelaiValiditeOffres($this->getDelaiValiditeOffres());
        $copyObj->setCommentairesPhaseConsultation($this->getCommentairesPhaseConsultation());
        $copyObj->setDateReunionOuvertureCandidatures($this->getDateReunionOuvertureCandidatures());
        $copyObj->setDateReunionOuvertureOffres($this->getDateReunionOuvertureOffres());
        $copyObj->setDecision($this->getDecision());
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
     * @return CommonPassationConsultation Clone of current object.
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
     * @return CommonPassationConsultationPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new CommonPassationConsultationPeer();
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
        $this->reference = null;
        $this->unite = null;
        $this->mandataire = null;
        $this->lieu_detaille_predefini = null;
        $this->lieux_detailles_non_definis = null;
        $this->code_postal_lieu_principal_execution = null;
        $this->ville = null;
        $this->montant_estime_consultation = null;
        $this->commentaires = null;
        $this->numero_deliberation_financiere = null;
        $this->date_deliberation_financiere = null;
        $this->imputation_budgetaire = null;
        $this->numero_deliberation_autorisant_signature_marche = null;
        $this->date_deliberation_autorisant_signature_marche = null;
        $this->date_notification_previsionnelle = null;
        $this->date_reception_projet_dce_service_validateur = null;
        $this->date_formulations_premieres_observations = null;
        $this->date_retour_projet_dce_finalise = null;
        $this->date_validation_projet_dce_par_service_validateur = null;
        $this->date_validation_projet_dce_vue_par = null;
        $this->date_reception_projet_aapc_par_service_validateur = null;
        $this->date_formulations_premieres_observations_aapc = null;
        $this->date_retour_projet_aapc_finalise = null;
        $this->date_validation_projet_aapc_par_service_validateur = null;
        $this->date_validation_projet_aapc_par_service_validateur_vu_par = null;
        $this->date_envoi_publicite = null;
        $this->date_envoi_invitations_remettre_offre = null;
        $this->date_limite_remise_offres = null;
        $this->delai_validite_offres = null;
        $this->commentaires_phase_consultation = null;
        $this->date_reunion_ouverture_candidatures = null;
        $this->date_reunion_ouverture_offres = null;
        $this->decision = null;
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
        return (string) $this->exportTo(CommonPassationConsultationPeer::DEFAULT_STRING_FORMAT);
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
