<?php


/**
 * Base static class for performing query and update operations on the 'Passation_consultation' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonPassationConsultationPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'Passation_consultation';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonPassationConsultation';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonPassationConsultationTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 35;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 35;

    /** the column name for the id field */
    const ID = 'Passation_consultation.id';

    /** the column name for the organisme field */
    const ORGANISME = 'Passation_consultation.organisme';

    /** the column name for the reference field */
    const REFERENCE = 'Passation_consultation.reference';

    /** the column name for the unite field */
    const UNITE = 'Passation_consultation.unite';

    /** the column name for the mandataire field */
    const MANDATAIRE = 'Passation_consultation.mandataire';

    /** the column name for the lieu_detaille_predefini field */
    const LIEU_DETAILLE_PREDEFINI = 'Passation_consultation.lieu_detaille_predefini';

    /** the column name for the lieux_detailles_non_definis field */
    const LIEUX_DETAILLES_NON_DEFINIS = 'Passation_consultation.lieux_detailles_non_definis';

    /** the column name for the code_postal_lieu_principal_execution field */
    const CODE_POSTAL_LIEU_PRINCIPAL_EXECUTION = 'Passation_consultation.code_postal_lieu_principal_execution';

    /** the column name for the Ville field */
    const VILLE = 'Passation_consultation.Ville';

    /** the column name for the montant_estime_consultation field */
    const MONTANT_ESTIME_CONSULTATION = 'Passation_consultation.montant_estime_consultation';

    /** the column name for the commentaires field */
    const COMMENTAIRES = 'Passation_consultation.commentaires';

    /** the column name for the numero_deliberation_financiere field */
    const NUMERO_DELIBERATION_FINANCIERE = 'Passation_consultation.numero_deliberation_financiere';

    /** the column name for the date_deliberation_financiere field */
    const DATE_DELIBERATION_FINANCIERE = 'Passation_consultation.date_deliberation_financiere';

    /** the column name for the imputation_budgetaire field */
    const IMPUTATION_BUDGETAIRE = 'Passation_consultation.imputation_budgetaire';

    /** the column name for the numero_deliberation_autorisant_signature_marche field */
    const NUMERO_DELIBERATION_AUTORISANT_SIGNATURE_MARCHE = 'Passation_consultation.numero_deliberation_autorisant_signature_marche';

    /** the column name for the date_deliberation_autorisant_signature_marche field */
    const DATE_DELIBERATION_AUTORISANT_SIGNATURE_MARCHE = 'Passation_consultation.date_deliberation_autorisant_signature_marche';

    /** the column name for the date_notification_previsionnelle field */
    const DATE_NOTIFICATION_PREVISIONNELLE = 'Passation_consultation.date_notification_previsionnelle';

    /** the column name for the date_reception_projet_DCE_Service_Validateur field */
    const DATE_RECEPTION_PROJET_DCE_SERVICE_VALIDATEUR = 'Passation_consultation.date_reception_projet_DCE_Service_Validateur';

    /** the column name for the date_formulations_premieres_observations field */
    const DATE_FORMULATIONS_PREMIERES_OBSERVATIONS = 'Passation_consultation.date_formulations_premieres_observations';

    /** the column name for the date_retour_projet_DCE_finalise field */
    const DATE_RETOUR_PROJET_DCE_FINALISE = 'Passation_consultation.date_retour_projet_DCE_finalise';

    /** the column name for the date_validation_projet_DCE_par_service_validateur field */
    const DATE_VALIDATION_PROJET_DCE_PAR_SERVICE_VALIDATEUR = 'Passation_consultation.date_validation_projet_DCE_par_service_validateur';

    /** the column name for the date_validation_projet_DCE_vue_par field */
    const DATE_VALIDATION_PROJET_DCE_VUE_PAR = 'Passation_consultation.date_validation_projet_DCE_vue_par';

    /** the column name for the date_reception_projet_AAPC_par_Service_Validateur field */
    const DATE_RECEPTION_PROJET_AAPC_PAR_SERVICE_VALIDATEUR = 'Passation_consultation.date_reception_projet_AAPC_par_Service_Validateur';

    /** the column name for the date_formulations_premieres_observations_AAPC field */
    const DATE_FORMULATIONS_PREMIERES_OBSERVATIONS_AAPC = 'Passation_consultation.date_formulations_premieres_observations_AAPC';

    /** the column name for the date_retour_projet_AAPC_finalise field */
    const DATE_RETOUR_PROJET_AAPC_FINALISE = 'Passation_consultation.date_retour_projet_AAPC_finalise';

    /** the column name for the date_validation_projet_AAPC_par_Service_Validateur field */
    const DATE_VALIDATION_PROJET_AAPC_PAR_SERVICE_VALIDATEUR = 'Passation_consultation.date_validation_projet_AAPC_par_Service_Validateur';

    /** the column name for the date_validation_projet_AAPC_par_Service_Validateur_vu_par field */
    const DATE_VALIDATION_PROJET_AAPC_PAR_SERVICE_VALIDATEUR_VU_PAR = 'Passation_consultation.date_validation_projet_AAPC_par_Service_Validateur_vu_par';

    /** the column name for the date_envoi_publicite field */
    const DATE_ENVOI_PUBLICITE = 'Passation_consultation.date_envoi_publicite';

    /** the column name for the date_envoi_invitations_remettre_offre field */
    const DATE_ENVOI_INVITATIONS_REMETTRE_OFFRE = 'Passation_consultation.date_envoi_invitations_remettre_offre';

    /** the column name for the date_limite_remise_offres field */
    const DATE_LIMITE_REMISE_OFFRES = 'Passation_consultation.date_limite_remise_offres';

    /** the column name for the delai_validite_offres field */
    const DELAI_VALIDITE_OFFRES = 'Passation_consultation.delai_validite_offres';

    /** the column name for the commentaires_phase_consultation field */
    const COMMENTAIRES_PHASE_CONSULTATION = 'Passation_consultation.commentaires_phase_consultation';

    /** the column name for the date_reunion_ouverture_candidatures field */
    const DATE_REUNION_OUVERTURE_CANDIDATURES = 'Passation_consultation.date_reunion_ouverture_candidatures';

    /** the column name for the date_reunion_ouverture_offres field */
    const DATE_REUNION_OUVERTURE_OFFRES = 'Passation_consultation.date_reunion_ouverture_offres';

    /** the column name for the decision field */
    const DECISION = 'Passation_consultation.decision';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonPassationConsultation objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonPassationConsultation[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonPassationConsultationPeer::$fieldNames[CommonPassationConsultationPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Organisme', 'Reference', 'Unite', 'Mandataire', 'LieuDetaillePredefini', 'LieuxDetaillesNonDefinis', 'CodePostalLieuPrincipalExecution', 'Ville', 'MontantEstimeConsultation', 'Commentaires', 'NumeroDeliberationFinanciere', 'DateDeliberationFinanciere', 'ImputationBudgetaire', 'NumeroDeliberationAutorisantSignatureMarche', 'DateDeliberationAutorisantSignatureMarche', 'DateNotificationPrevisionnelle', 'DateReceptionProjetDceServiceValidateur', 'DateFormulationsPremieresObservations', 'DateRetourProjetDceFinalise', 'DateValidationProjetDceParServiceValidateur', 'DateValidationProjetDceVuePar', 'DateReceptionProjetAapcParServiceValidateur', 'DateFormulationsPremieresObservationsAapc', 'DateRetourProjetAapcFinalise', 'DateValidationProjetAapcParServiceValidateur', 'DateValidationProjetAapcParServiceValidateurVuPar', 'DateEnvoiPublicite', 'DateEnvoiInvitationsRemettreOffre', 'DateLimiteRemiseOffres', 'DelaiValiditeOffres', 'CommentairesPhaseConsultation', 'DateReunionOuvertureCandidatures', 'DateReunionOuvertureOffres', 'Decision', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'organisme', 'reference', 'unite', 'mandataire', 'lieuDetaillePredefini', 'lieuxDetaillesNonDefinis', 'codePostalLieuPrincipalExecution', 'ville', 'montantEstimeConsultation', 'commentaires', 'numeroDeliberationFinanciere', 'dateDeliberationFinanciere', 'imputationBudgetaire', 'numeroDeliberationAutorisantSignatureMarche', 'dateDeliberationAutorisantSignatureMarche', 'dateNotificationPrevisionnelle', 'dateReceptionProjetDceServiceValidateur', 'dateFormulationsPremieresObservations', 'dateRetourProjetDceFinalise', 'dateValidationProjetDceParServiceValidateur', 'dateValidationProjetDceVuePar', 'dateReceptionProjetAapcParServiceValidateur', 'dateFormulationsPremieresObservationsAapc', 'dateRetourProjetAapcFinalise', 'dateValidationProjetAapcParServiceValidateur', 'dateValidationProjetAapcParServiceValidateurVuPar', 'dateEnvoiPublicite', 'dateEnvoiInvitationsRemettreOffre', 'dateLimiteRemiseOffres', 'delaiValiditeOffres', 'commentairesPhaseConsultation', 'dateReunionOuvertureCandidatures', 'dateReunionOuvertureOffres', 'decision', ),
        BasePeer::TYPE_COLNAME => array (CommonPassationConsultationPeer::ID, CommonPassationConsultationPeer::ORGANISME, CommonPassationConsultationPeer::REFERENCE, CommonPassationConsultationPeer::UNITE, CommonPassationConsultationPeer::MANDATAIRE, CommonPassationConsultationPeer::LIEU_DETAILLE_PREDEFINI, CommonPassationConsultationPeer::LIEUX_DETAILLES_NON_DEFINIS, CommonPassationConsultationPeer::CODE_POSTAL_LIEU_PRINCIPAL_EXECUTION, CommonPassationConsultationPeer::VILLE, CommonPassationConsultationPeer::MONTANT_ESTIME_CONSULTATION, CommonPassationConsultationPeer::COMMENTAIRES, CommonPassationConsultationPeer::NUMERO_DELIBERATION_FINANCIERE, CommonPassationConsultationPeer::DATE_DELIBERATION_FINANCIERE, CommonPassationConsultationPeer::IMPUTATION_BUDGETAIRE, CommonPassationConsultationPeer::NUMERO_DELIBERATION_AUTORISANT_SIGNATURE_MARCHE, CommonPassationConsultationPeer::DATE_DELIBERATION_AUTORISANT_SIGNATURE_MARCHE, CommonPassationConsultationPeer::DATE_NOTIFICATION_PREVISIONNELLE, CommonPassationConsultationPeer::DATE_RECEPTION_PROJET_DCE_SERVICE_VALIDATEUR, CommonPassationConsultationPeer::DATE_FORMULATIONS_PREMIERES_OBSERVATIONS, CommonPassationConsultationPeer::DATE_RETOUR_PROJET_DCE_FINALISE, CommonPassationConsultationPeer::DATE_VALIDATION_PROJET_DCE_PAR_SERVICE_VALIDATEUR, CommonPassationConsultationPeer::DATE_VALIDATION_PROJET_DCE_VUE_PAR, CommonPassationConsultationPeer::DATE_RECEPTION_PROJET_AAPC_PAR_SERVICE_VALIDATEUR, CommonPassationConsultationPeer::DATE_FORMULATIONS_PREMIERES_OBSERVATIONS_AAPC, CommonPassationConsultationPeer::DATE_RETOUR_PROJET_AAPC_FINALISE, CommonPassationConsultationPeer::DATE_VALIDATION_PROJET_AAPC_PAR_SERVICE_VALIDATEUR, CommonPassationConsultationPeer::DATE_VALIDATION_PROJET_AAPC_PAR_SERVICE_VALIDATEUR_VU_PAR, CommonPassationConsultationPeer::DATE_ENVOI_PUBLICITE, CommonPassationConsultationPeer::DATE_ENVOI_INVITATIONS_REMETTRE_OFFRE, CommonPassationConsultationPeer::DATE_LIMITE_REMISE_OFFRES, CommonPassationConsultationPeer::DELAI_VALIDITE_OFFRES, CommonPassationConsultationPeer::COMMENTAIRES_PHASE_CONSULTATION, CommonPassationConsultationPeer::DATE_REUNION_OUVERTURE_CANDIDATURES, CommonPassationConsultationPeer::DATE_REUNION_OUVERTURE_OFFRES, CommonPassationConsultationPeer::DECISION, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ORGANISME', 'REFERENCE', 'UNITE', 'MANDATAIRE', 'LIEU_DETAILLE_PREDEFINI', 'LIEUX_DETAILLES_NON_DEFINIS', 'CODE_POSTAL_LIEU_PRINCIPAL_EXECUTION', 'VILLE', 'MONTANT_ESTIME_CONSULTATION', 'COMMENTAIRES', 'NUMERO_DELIBERATION_FINANCIERE', 'DATE_DELIBERATION_FINANCIERE', 'IMPUTATION_BUDGETAIRE', 'NUMERO_DELIBERATION_AUTORISANT_SIGNATURE_MARCHE', 'DATE_DELIBERATION_AUTORISANT_SIGNATURE_MARCHE', 'DATE_NOTIFICATION_PREVISIONNELLE', 'DATE_RECEPTION_PROJET_DCE_SERVICE_VALIDATEUR', 'DATE_FORMULATIONS_PREMIERES_OBSERVATIONS', 'DATE_RETOUR_PROJET_DCE_FINALISE', 'DATE_VALIDATION_PROJET_DCE_PAR_SERVICE_VALIDATEUR', 'DATE_VALIDATION_PROJET_DCE_VUE_PAR', 'DATE_RECEPTION_PROJET_AAPC_PAR_SERVICE_VALIDATEUR', 'DATE_FORMULATIONS_PREMIERES_OBSERVATIONS_AAPC', 'DATE_RETOUR_PROJET_AAPC_FINALISE', 'DATE_VALIDATION_PROJET_AAPC_PAR_SERVICE_VALIDATEUR', 'DATE_VALIDATION_PROJET_AAPC_PAR_SERVICE_VALIDATEUR_VU_PAR', 'DATE_ENVOI_PUBLICITE', 'DATE_ENVOI_INVITATIONS_REMETTRE_OFFRE', 'DATE_LIMITE_REMISE_OFFRES', 'DELAI_VALIDITE_OFFRES', 'COMMENTAIRES_PHASE_CONSULTATION', 'DATE_REUNION_OUVERTURE_CANDIDATURES', 'DATE_REUNION_OUVERTURE_OFFRES', 'DECISION', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'organisme', 'reference', 'unite', 'mandataire', 'lieu_detaille_predefini', 'lieux_detailles_non_definis', 'code_postal_lieu_principal_execution', 'Ville', 'montant_estime_consultation', 'commentaires', 'numero_deliberation_financiere', 'date_deliberation_financiere', 'imputation_budgetaire', 'numero_deliberation_autorisant_signature_marche', 'date_deliberation_autorisant_signature_marche', 'date_notification_previsionnelle', 'date_reception_projet_DCE_Service_Validateur', 'date_formulations_premieres_observations', 'date_retour_projet_DCE_finalise', 'date_validation_projet_DCE_par_service_validateur', 'date_validation_projet_DCE_vue_par', 'date_reception_projet_AAPC_par_Service_Validateur', 'date_formulations_premieres_observations_AAPC', 'date_retour_projet_AAPC_finalise', 'date_validation_projet_AAPC_par_Service_Validateur', 'date_validation_projet_AAPC_par_Service_Validateur_vu_par', 'date_envoi_publicite', 'date_envoi_invitations_remettre_offre', 'date_limite_remise_offres', 'delai_validite_offres', 'commentaires_phase_consultation', 'date_reunion_ouverture_candidatures', 'date_reunion_ouverture_offres', 'decision', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonPassationConsultationPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Organisme' => 1, 'Reference' => 2, 'Unite' => 3, 'Mandataire' => 4, 'LieuDetaillePredefini' => 5, 'LieuxDetaillesNonDefinis' => 6, 'CodePostalLieuPrincipalExecution' => 7, 'Ville' => 8, 'MontantEstimeConsultation' => 9, 'Commentaires' => 10, 'NumeroDeliberationFinanciere' => 11, 'DateDeliberationFinanciere' => 12, 'ImputationBudgetaire' => 13, 'NumeroDeliberationAutorisantSignatureMarche' => 14, 'DateDeliberationAutorisantSignatureMarche' => 15, 'DateNotificationPrevisionnelle' => 16, 'DateReceptionProjetDceServiceValidateur' => 17, 'DateFormulationsPremieresObservations' => 18, 'DateRetourProjetDceFinalise' => 19, 'DateValidationProjetDceParServiceValidateur' => 20, 'DateValidationProjetDceVuePar' => 21, 'DateReceptionProjetAapcParServiceValidateur' => 22, 'DateFormulationsPremieresObservationsAapc' => 23, 'DateRetourProjetAapcFinalise' => 24, 'DateValidationProjetAapcParServiceValidateur' => 25, 'DateValidationProjetAapcParServiceValidateurVuPar' => 26, 'DateEnvoiPublicite' => 27, 'DateEnvoiInvitationsRemettreOffre' => 28, 'DateLimiteRemiseOffres' => 29, 'DelaiValiditeOffres' => 30, 'CommentairesPhaseConsultation' => 31, 'DateReunionOuvertureCandidatures' => 32, 'DateReunionOuvertureOffres' => 33, 'Decision' => 34, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'organisme' => 1, 'reference' => 2, 'unite' => 3, 'mandataire' => 4, 'lieuDetaillePredefini' => 5, 'lieuxDetaillesNonDefinis' => 6, 'codePostalLieuPrincipalExecution' => 7, 'ville' => 8, 'montantEstimeConsultation' => 9, 'commentaires' => 10, 'numeroDeliberationFinanciere' => 11, 'dateDeliberationFinanciere' => 12, 'imputationBudgetaire' => 13, 'numeroDeliberationAutorisantSignatureMarche' => 14, 'dateDeliberationAutorisantSignatureMarche' => 15, 'dateNotificationPrevisionnelle' => 16, 'dateReceptionProjetDceServiceValidateur' => 17, 'dateFormulationsPremieresObservations' => 18, 'dateRetourProjetDceFinalise' => 19, 'dateValidationProjetDceParServiceValidateur' => 20, 'dateValidationProjetDceVuePar' => 21, 'dateReceptionProjetAapcParServiceValidateur' => 22, 'dateFormulationsPremieresObservationsAapc' => 23, 'dateRetourProjetAapcFinalise' => 24, 'dateValidationProjetAapcParServiceValidateur' => 25, 'dateValidationProjetAapcParServiceValidateurVuPar' => 26, 'dateEnvoiPublicite' => 27, 'dateEnvoiInvitationsRemettreOffre' => 28, 'dateLimiteRemiseOffres' => 29, 'delaiValiditeOffres' => 30, 'commentairesPhaseConsultation' => 31, 'dateReunionOuvertureCandidatures' => 32, 'dateReunionOuvertureOffres' => 33, 'decision' => 34, ),
        BasePeer::TYPE_COLNAME => array (CommonPassationConsultationPeer::ID => 0, CommonPassationConsultationPeer::ORGANISME => 1, CommonPassationConsultationPeer::REFERENCE => 2, CommonPassationConsultationPeer::UNITE => 3, CommonPassationConsultationPeer::MANDATAIRE => 4, CommonPassationConsultationPeer::LIEU_DETAILLE_PREDEFINI => 5, CommonPassationConsultationPeer::LIEUX_DETAILLES_NON_DEFINIS => 6, CommonPassationConsultationPeer::CODE_POSTAL_LIEU_PRINCIPAL_EXECUTION => 7, CommonPassationConsultationPeer::VILLE => 8, CommonPassationConsultationPeer::MONTANT_ESTIME_CONSULTATION => 9, CommonPassationConsultationPeer::COMMENTAIRES => 10, CommonPassationConsultationPeer::NUMERO_DELIBERATION_FINANCIERE => 11, CommonPassationConsultationPeer::DATE_DELIBERATION_FINANCIERE => 12, CommonPassationConsultationPeer::IMPUTATION_BUDGETAIRE => 13, CommonPassationConsultationPeer::NUMERO_DELIBERATION_AUTORISANT_SIGNATURE_MARCHE => 14, CommonPassationConsultationPeer::DATE_DELIBERATION_AUTORISANT_SIGNATURE_MARCHE => 15, CommonPassationConsultationPeer::DATE_NOTIFICATION_PREVISIONNELLE => 16, CommonPassationConsultationPeer::DATE_RECEPTION_PROJET_DCE_SERVICE_VALIDATEUR => 17, CommonPassationConsultationPeer::DATE_FORMULATIONS_PREMIERES_OBSERVATIONS => 18, CommonPassationConsultationPeer::DATE_RETOUR_PROJET_DCE_FINALISE => 19, CommonPassationConsultationPeer::DATE_VALIDATION_PROJET_DCE_PAR_SERVICE_VALIDATEUR => 20, CommonPassationConsultationPeer::DATE_VALIDATION_PROJET_DCE_VUE_PAR => 21, CommonPassationConsultationPeer::DATE_RECEPTION_PROJET_AAPC_PAR_SERVICE_VALIDATEUR => 22, CommonPassationConsultationPeer::DATE_FORMULATIONS_PREMIERES_OBSERVATIONS_AAPC => 23, CommonPassationConsultationPeer::DATE_RETOUR_PROJET_AAPC_FINALISE => 24, CommonPassationConsultationPeer::DATE_VALIDATION_PROJET_AAPC_PAR_SERVICE_VALIDATEUR => 25, CommonPassationConsultationPeer::DATE_VALIDATION_PROJET_AAPC_PAR_SERVICE_VALIDATEUR_VU_PAR => 26, CommonPassationConsultationPeer::DATE_ENVOI_PUBLICITE => 27, CommonPassationConsultationPeer::DATE_ENVOI_INVITATIONS_REMETTRE_OFFRE => 28, CommonPassationConsultationPeer::DATE_LIMITE_REMISE_OFFRES => 29, CommonPassationConsultationPeer::DELAI_VALIDITE_OFFRES => 30, CommonPassationConsultationPeer::COMMENTAIRES_PHASE_CONSULTATION => 31, CommonPassationConsultationPeer::DATE_REUNION_OUVERTURE_CANDIDATURES => 32, CommonPassationConsultationPeer::DATE_REUNION_OUVERTURE_OFFRES => 33, CommonPassationConsultationPeer::DECISION => 34, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ORGANISME' => 1, 'REFERENCE' => 2, 'UNITE' => 3, 'MANDATAIRE' => 4, 'LIEU_DETAILLE_PREDEFINI' => 5, 'LIEUX_DETAILLES_NON_DEFINIS' => 6, 'CODE_POSTAL_LIEU_PRINCIPAL_EXECUTION' => 7, 'VILLE' => 8, 'MONTANT_ESTIME_CONSULTATION' => 9, 'COMMENTAIRES' => 10, 'NUMERO_DELIBERATION_FINANCIERE' => 11, 'DATE_DELIBERATION_FINANCIERE' => 12, 'IMPUTATION_BUDGETAIRE' => 13, 'NUMERO_DELIBERATION_AUTORISANT_SIGNATURE_MARCHE' => 14, 'DATE_DELIBERATION_AUTORISANT_SIGNATURE_MARCHE' => 15, 'DATE_NOTIFICATION_PREVISIONNELLE' => 16, 'DATE_RECEPTION_PROJET_DCE_SERVICE_VALIDATEUR' => 17, 'DATE_FORMULATIONS_PREMIERES_OBSERVATIONS' => 18, 'DATE_RETOUR_PROJET_DCE_FINALISE' => 19, 'DATE_VALIDATION_PROJET_DCE_PAR_SERVICE_VALIDATEUR' => 20, 'DATE_VALIDATION_PROJET_DCE_VUE_PAR' => 21, 'DATE_RECEPTION_PROJET_AAPC_PAR_SERVICE_VALIDATEUR' => 22, 'DATE_FORMULATIONS_PREMIERES_OBSERVATIONS_AAPC' => 23, 'DATE_RETOUR_PROJET_AAPC_FINALISE' => 24, 'DATE_VALIDATION_PROJET_AAPC_PAR_SERVICE_VALIDATEUR' => 25, 'DATE_VALIDATION_PROJET_AAPC_PAR_SERVICE_VALIDATEUR_VU_PAR' => 26, 'DATE_ENVOI_PUBLICITE' => 27, 'DATE_ENVOI_INVITATIONS_REMETTRE_OFFRE' => 28, 'DATE_LIMITE_REMISE_OFFRES' => 29, 'DELAI_VALIDITE_OFFRES' => 30, 'COMMENTAIRES_PHASE_CONSULTATION' => 31, 'DATE_REUNION_OUVERTURE_CANDIDATURES' => 32, 'DATE_REUNION_OUVERTURE_OFFRES' => 33, 'DECISION' => 34, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'organisme' => 1, 'reference' => 2, 'unite' => 3, 'mandataire' => 4, 'lieu_detaille_predefini' => 5, 'lieux_detailles_non_definis' => 6, 'code_postal_lieu_principal_execution' => 7, 'Ville' => 8, 'montant_estime_consultation' => 9, 'commentaires' => 10, 'numero_deliberation_financiere' => 11, 'date_deliberation_financiere' => 12, 'imputation_budgetaire' => 13, 'numero_deliberation_autorisant_signature_marche' => 14, 'date_deliberation_autorisant_signature_marche' => 15, 'date_notification_previsionnelle' => 16, 'date_reception_projet_DCE_Service_Validateur' => 17, 'date_formulations_premieres_observations' => 18, 'date_retour_projet_DCE_finalise' => 19, 'date_validation_projet_DCE_par_service_validateur' => 20, 'date_validation_projet_DCE_vue_par' => 21, 'date_reception_projet_AAPC_par_Service_Validateur' => 22, 'date_formulations_premieres_observations_AAPC' => 23, 'date_retour_projet_AAPC_finalise' => 24, 'date_validation_projet_AAPC_par_Service_Validateur' => 25, 'date_validation_projet_AAPC_par_Service_Validateur_vu_par' => 26, 'date_envoi_publicite' => 27, 'date_envoi_invitations_remettre_offre' => 28, 'date_limite_remise_offres' => 29, 'delai_validite_offres' => 30, 'commentaires_phase_consultation' => 31, 'date_reunion_ouverture_candidatures' => 32, 'date_reunion_ouverture_offres' => 33, 'decision' => 34, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = CommonPassationConsultationPeer::getFieldNames($toType);
        $key = isset(CommonPassationConsultationPeer::$fieldKeys[$fromType][$name]) ? CommonPassationConsultationPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonPassationConsultationPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, CommonPassationConsultationPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonPassationConsultationPeer::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. CommonPassationConsultationPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonPassationConsultationPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(CommonPassationConsultationPeer::ID);
            $criteria->addSelectColumn(CommonPassationConsultationPeer::ORGANISME);
            $criteria->addSelectColumn(CommonPassationConsultationPeer::REFERENCE);
            $criteria->addSelectColumn(CommonPassationConsultationPeer::UNITE);
            $criteria->addSelectColumn(CommonPassationConsultationPeer::MANDATAIRE);
            $criteria->addSelectColumn(CommonPassationConsultationPeer::LIEU_DETAILLE_PREDEFINI);
            $criteria->addSelectColumn(CommonPassationConsultationPeer::LIEUX_DETAILLES_NON_DEFINIS);
            $criteria->addSelectColumn(CommonPassationConsultationPeer::CODE_POSTAL_LIEU_PRINCIPAL_EXECUTION);
            $criteria->addSelectColumn(CommonPassationConsultationPeer::VILLE);
            $criteria->addSelectColumn(CommonPassationConsultationPeer::MONTANT_ESTIME_CONSULTATION);
            $criteria->addSelectColumn(CommonPassationConsultationPeer::COMMENTAIRES);
            $criteria->addSelectColumn(CommonPassationConsultationPeer::NUMERO_DELIBERATION_FINANCIERE);
            $criteria->addSelectColumn(CommonPassationConsultationPeer::DATE_DELIBERATION_FINANCIERE);
            $criteria->addSelectColumn(CommonPassationConsultationPeer::IMPUTATION_BUDGETAIRE);
            $criteria->addSelectColumn(CommonPassationConsultationPeer::NUMERO_DELIBERATION_AUTORISANT_SIGNATURE_MARCHE);
            $criteria->addSelectColumn(CommonPassationConsultationPeer::DATE_DELIBERATION_AUTORISANT_SIGNATURE_MARCHE);
            $criteria->addSelectColumn(CommonPassationConsultationPeer::DATE_NOTIFICATION_PREVISIONNELLE);
            $criteria->addSelectColumn(CommonPassationConsultationPeer::DATE_RECEPTION_PROJET_DCE_SERVICE_VALIDATEUR);
            $criteria->addSelectColumn(CommonPassationConsultationPeer::DATE_FORMULATIONS_PREMIERES_OBSERVATIONS);
            $criteria->addSelectColumn(CommonPassationConsultationPeer::DATE_RETOUR_PROJET_DCE_FINALISE);
            $criteria->addSelectColumn(CommonPassationConsultationPeer::DATE_VALIDATION_PROJET_DCE_PAR_SERVICE_VALIDATEUR);
            $criteria->addSelectColumn(CommonPassationConsultationPeer::DATE_VALIDATION_PROJET_DCE_VUE_PAR);
            $criteria->addSelectColumn(CommonPassationConsultationPeer::DATE_RECEPTION_PROJET_AAPC_PAR_SERVICE_VALIDATEUR);
            $criteria->addSelectColumn(CommonPassationConsultationPeer::DATE_FORMULATIONS_PREMIERES_OBSERVATIONS_AAPC);
            $criteria->addSelectColumn(CommonPassationConsultationPeer::DATE_RETOUR_PROJET_AAPC_FINALISE);
            $criteria->addSelectColumn(CommonPassationConsultationPeer::DATE_VALIDATION_PROJET_AAPC_PAR_SERVICE_VALIDATEUR);
            $criteria->addSelectColumn(CommonPassationConsultationPeer::DATE_VALIDATION_PROJET_AAPC_PAR_SERVICE_VALIDATEUR_VU_PAR);
            $criteria->addSelectColumn(CommonPassationConsultationPeer::DATE_ENVOI_PUBLICITE);
            $criteria->addSelectColumn(CommonPassationConsultationPeer::DATE_ENVOI_INVITATIONS_REMETTRE_OFFRE);
            $criteria->addSelectColumn(CommonPassationConsultationPeer::DATE_LIMITE_REMISE_OFFRES);
            $criteria->addSelectColumn(CommonPassationConsultationPeer::DELAI_VALIDITE_OFFRES);
            $criteria->addSelectColumn(CommonPassationConsultationPeer::COMMENTAIRES_PHASE_CONSULTATION);
            $criteria->addSelectColumn(CommonPassationConsultationPeer::DATE_REUNION_OUVERTURE_CANDIDATURES);
            $criteria->addSelectColumn(CommonPassationConsultationPeer::DATE_REUNION_OUVERTURE_OFFRES);
            $criteria->addSelectColumn(CommonPassationConsultationPeer::DECISION);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.reference');
            $criteria->addSelectColumn($alias . '.unite');
            $criteria->addSelectColumn($alias . '.mandataire');
            $criteria->addSelectColumn($alias . '.lieu_detaille_predefini');
            $criteria->addSelectColumn($alias . '.lieux_detailles_non_definis');
            $criteria->addSelectColumn($alias . '.code_postal_lieu_principal_execution');
            $criteria->addSelectColumn($alias . '.Ville');
            $criteria->addSelectColumn($alias . '.montant_estime_consultation');
            $criteria->addSelectColumn($alias . '.commentaires');
            $criteria->addSelectColumn($alias . '.numero_deliberation_financiere');
            $criteria->addSelectColumn($alias . '.date_deliberation_financiere');
            $criteria->addSelectColumn($alias . '.imputation_budgetaire');
            $criteria->addSelectColumn($alias . '.numero_deliberation_autorisant_signature_marche');
            $criteria->addSelectColumn($alias . '.date_deliberation_autorisant_signature_marche');
            $criteria->addSelectColumn($alias . '.date_notification_previsionnelle');
            $criteria->addSelectColumn($alias . '.date_reception_projet_DCE_Service_Validateur');
            $criteria->addSelectColumn($alias . '.date_formulations_premieres_observations');
            $criteria->addSelectColumn($alias . '.date_retour_projet_DCE_finalise');
            $criteria->addSelectColumn($alias . '.date_validation_projet_DCE_par_service_validateur');
            $criteria->addSelectColumn($alias . '.date_validation_projet_DCE_vue_par');
            $criteria->addSelectColumn($alias . '.date_reception_projet_AAPC_par_Service_Validateur');
            $criteria->addSelectColumn($alias . '.date_formulations_premieres_observations_AAPC');
            $criteria->addSelectColumn($alias . '.date_retour_projet_AAPC_finalise');
            $criteria->addSelectColumn($alias . '.date_validation_projet_AAPC_par_Service_Validateur');
            $criteria->addSelectColumn($alias . '.date_validation_projet_AAPC_par_Service_Validateur_vu_par');
            $criteria->addSelectColumn($alias . '.date_envoi_publicite');
            $criteria->addSelectColumn($alias . '.date_envoi_invitations_remettre_offre');
            $criteria->addSelectColumn($alias . '.date_limite_remise_offres');
            $criteria->addSelectColumn($alias . '.delai_validite_offres');
            $criteria->addSelectColumn($alias . '.commentaires_phase_consultation');
            $criteria->addSelectColumn($alias . '.date_reunion_ouverture_candidatures');
            $criteria->addSelectColumn($alias . '.date_reunion_ouverture_offres');
            $criteria->addSelectColumn($alias . '.decision');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonPassationConsultationPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonPassationConsultationPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonPassationConsultationPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonPassationConsultationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return                 CommonPassationConsultation
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonPassationConsultationPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return CommonPassationConsultationPeer::populateObjects(CommonPassationConsultationPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonPassationConsultationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonPassationConsultationPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonPassationConsultationPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param      CommonPassationConsultation $obj A CommonPassationConsultation object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getId(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonPassationConsultationPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A CommonPassationConsultation object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonPassationConsultation) {
                $key = serialize(array((string) $value->getId(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonPassationConsultation object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonPassationConsultationPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonPassationConsultation Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonPassationConsultationPeer::$instances[$key])) {
                return CommonPassationConsultationPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }
    
    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references) {
        foreach (CommonPassationConsultationPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonPassationConsultationPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to Passation_consultation
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
        // Invalidate objects in CommonPassationMarcheAVenirPeer instance pool,
        // since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
        CommonPassationMarcheAVenirPeer::clearInstancePool();
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null && $row[$startcol + 1] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol], (string) $row[$startcol + 1]));
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return array((int) $row[$startcol], (string) $row[$startcol + 1]);
    }
    
    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();
    
        // set the class once to avoid overhead in the loop
        $cls = CommonPassationConsultationPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonPassationConsultationPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonPassationConsultationPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonPassationConsultationPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (CommonPassationConsultation object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonPassationConsultationPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonPassationConsultationPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonPassationConsultationPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonPassationConsultationPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonPassationConsultationPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(CommonPassationConsultationPeer::DATABASE_NAME)->getTable(CommonPassationConsultationPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonPassationConsultationPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonPassationConsultationPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonPassationConsultationTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return CommonPassationConsultationPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonPassationConsultation or Criteria object.
     *
     * @param      mixed $values Criteria or CommonPassationConsultation object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonPassationConsultationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonPassationConsultation object
        }

        if ($criteria->containsKey(CommonPassationConsultationPeer::ID) && $criteria->keyContainsValue(CommonPassationConsultationPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonPassationConsultationPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonPassationConsultationPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a CommonPassationConsultation or Criteria object.
     *
     * @param      mixed $values Criteria or CommonPassationConsultation object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonPassationConsultationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonPassationConsultationPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonPassationConsultationPeer::ID);
            $value = $criteria->remove(CommonPassationConsultationPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonPassationConsultationPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonPassationConsultationPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonPassationConsultationPeer::ORGANISME);
            $value = $criteria->remove(CommonPassationConsultationPeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonPassationConsultationPeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonPassationConsultationPeer::TABLE_NAME);
            }

        } else { // $values is CommonPassationConsultation object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonPassationConsultationPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the Passation_consultation table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonPassationConsultationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += CommonPassationConsultationPeer::doOnDeleteCascade(new Criteria(CommonPassationConsultationPeer::DATABASE_NAME), $con);
            $affectedRows += BasePeer::doDeleteAll(CommonPassationConsultationPeer::TABLE_NAME, $con, CommonPassationConsultationPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonPassationConsultationPeer::clearInstancePool();
            CommonPassationConsultationPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonPassationConsultation or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonPassationConsultation object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(CommonPassationConsultationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonPassationConsultation) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonPassationConsultationPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonPassationConsultationPeer::ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonPassationConsultationPeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonPassationConsultationPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            // cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
            $c = clone $criteria;
            $affectedRows += CommonPassationConsultationPeer::doOnDeleteCascade($c, $con);
            
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            if ($values instanceof Criteria) {
                CommonPassationConsultationPeer::clearInstancePool();
            } elseif ($values instanceof CommonPassationConsultation) { // it's a model object
                CommonPassationConsultationPeer::removeInstanceFromPool($values);
            } else { // it's a primary key, or an array of pks
                foreach ((array) $values as $singleval) {
                    CommonPassationConsultationPeer::removeInstanceFromPool($singleval);
                }
            }
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonPassationConsultationPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * This is a method for emulating ON DELETE CASCADE for DBs that don't support this
     * feature (like MySQL or SQLite).
     *
     * This method is not very speedy because it must perform a query first to get
     * the implicated records and then perform the deletes by calling those Peer classes.
     *
     * This method should be used within a transaction if possible.
     *
     * @param      Criteria $criteria
     * @param      PropelPDO $con
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    protected static function doOnDeleteCascade(Criteria $criteria, PropelPDO $con)
    {
        // initialize var to track total num of affected rows
        $affectedRows = 0;

        // first find the objects that are implicated by the $criteria
        $objects = CommonPassationConsultationPeer::doSelect($criteria, $con);
        foreach ($objects as $obj) {


            // delete related CommonPassationMarcheAVenir objects
            $criteria = new Criteria(CommonPassationMarcheAVenirPeer::DATABASE_NAME);
            
            $criteria->add(CommonPassationMarcheAVenirPeer::ID_PASSATION_CONSULTATION, $obj->getId());
            $affectedRows += CommonPassationMarcheAVenirPeer::doDelete($criteria, $con);
        }

        return $affectedRows;
    }

    /**
     * Validates all modified columns of given CommonPassationConsultation object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonPassationConsultation $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonPassationConsultationPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonPassationConsultationPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(CommonPassationConsultationPeer::DATABASE_NAME, CommonPassationConsultationPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonPassationConsultation
     */
    public static function retrieveByPK($id, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id, (string) $organisme));
         if (null !== ($obj = CommonPassationConsultationPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonPassationConsultationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonPassationConsultationPeer::DATABASE_NAME);
        $criteria->add(CommonPassationConsultationPeer::ID, $id);
        $criteria->add(CommonPassationConsultationPeer::ORGANISME, $organisme);
        $v = CommonPassationConsultationPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonPassationConsultationPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonPassationConsultationPeer::buildTableMap();

