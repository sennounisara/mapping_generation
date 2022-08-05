<?php


/**
 * Base class that represents a query for the 'Passation_consultation' table.
 *
 * 
 *
 * @method CommonPassationConsultationQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonPassationConsultationQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonPassationConsultationQuery orderByReference($order = Criteria::ASC) Order by the reference column
 * @method CommonPassationConsultationQuery orderByUnite($order = Criteria::ASC) Order by the unite column
 * @method CommonPassationConsultationQuery orderByMandataire($order = Criteria::ASC) Order by the mandataire column
 * @method CommonPassationConsultationQuery orderByLieuDetaillePredefini($order = Criteria::ASC) Order by the lieu_detaille_predefini column
 * @method CommonPassationConsultationQuery orderByLieuxDetaillesNonDefinis($order = Criteria::ASC) Order by the lieux_detailles_non_definis column
 * @method CommonPassationConsultationQuery orderByCodePostalLieuPrincipalExecution($order = Criteria::ASC) Order by the code_postal_lieu_principal_execution column
 * @method CommonPassationConsultationQuery orderByVille($order = Criteria::ASC) Order by the Ville column
 * @method CommonPassationConsultationQuery orderByMontantEstimeConsultation($order = Criteria::ASC) Order by the montant_estime_consultation column
 * @method CommonPassationConsultationQuery orderByCommentaires($order = Criteria::ASC) Order by the commentaires column
 * @method CommonPassationConsultationQuery orderByNumeroDeliberationFinanciere($order = Criteria::ASC) Order by the numero_deliberation_financiere column
 * @method CommonPassationConsultationQuery orderByDateDeliberationFinanciere($order = Criteria::ASC) Order by the date_deliberation_financiere column
 * @method CommonPassationConsultationQuery orderByImputationBudgetaire($order = Criteria::ASC) Order by the imputation_budgetaire column
 * @method CommonPassationConsultationQuery orderByNumeroDeliberationAutorisantSignatureMarche($order = Criteria::ASC) Order by the numero_deliberation_autorisant_signature_marche column
 * @method CommonPassationConsultationQuery orderByDateDeliberationAutorisantSignatureMarche($order = Criteria::ASC) Order by the date_deliberation_autorisant_signature_marche column
 * @method CommonPassationConsultationQuery orderByDateNotificationPrevisionnelle($order = Criteria::ASC) Order by the date_notification_previsionnelle column
 * @method CommonPassationConsultationQuery orderByDateReceptionProjetDceServiceValidateur($order = Criteria::ASC) Order by the date_reception_projet_DCE_Service_Validateur column
 * @method CommonPassationConsultationQuery orderByDateFormulationsPremieresObservations($order = Criteria::ASC) Order by the date_formulations_premieres_observations column
 * @method CommonPassationConsultationQuery orderByDateRetourProjetDceFinalise($order = Criteria::ASC) Order by the date_retour_projet_DCE_finalise column
 * @method CommonPassationConsultationQuery orderByDateValidationProjetDceParServiceValidateur($order = Criteria::ASC) Order by the date_validation_projet_DCE_par_service_validateur column
 * @method CommonPassationConsultationQuery orderByDateValidationProjetDceVuePar($order = Criteria::ASC) Order by the date_validation_projet_DCE_vue_par column
 * @method CommonPassationConsultationQuery orderByDateReceptionProjetAapcParServiceValidateur($order = Criteria::ASC) Order by the date_reception_projet_AAPC_par_Service_Validateur column
 * @method CommonPassationConsultationQuery orderByDateFormulationsPremieresObservationsAapc($order = Criteria::ASC) Order by the date_formulations_premieres_observations_AAPC column
 * @method CommonPassationConsultationQuery orderByDateRetourProjetAapcFinalise($order = Criteria::ASC) Order by the date_retour_projet_AAPC_finalise column
 * @method CommonPassationConsultationQuery orderByDateValidationProjetAapcParServiceValidateur($order = Criteria::ASC) Order by the date_validation_projet_AAPC_par_Service_Validateur column
 * @method CommonPassationConsultationQuery orderByDateValidationProjetAapcParServiceValidateurVuPar($order = Criteria::ASC) Order by the date_validation_projet_AAPC_par_Service_Validateur_vu_par column
 * @method CommonPassationConsultationQuery orderByDateEnvoiPublicite($order = Criteria::ASC) Order by the date_envoi_publicite column
 * @method CommonPassationConsultationQuery orderByDateEnvoiInvitationsRemettreOffre($order = Criteria::ASC) Order by the date_envoi_invitations_remettre_offre column
 * @method CommonPassationConsultationQuery orderByDateLimiteRemiseOffres($order = Criteria::ASC) Order by the date_limite_remise_offres column
 * @method CommonPassationConsultationQuery orderByDelaiValiditeOffres($order = Criteria::ASC) Order by the delai_validite_offres column
 * @method CommonPassationConsultationQuery orderByCommentairesPhaseConsultation($order = Criteria::ASC) Order by the commentaires_phase_consultation column
 * @method CommonPassationConsultationQuery orderByDateReunionOuvertureCandidatures($order = Criteria::ASC) Order by the date_reunion_ouverture_candidatures column
 * @method CommonPassationConsultationQuery orderByDateReunionOuvertureOffres($order = Criteria::ASC) Order by the date_reunion_ouverture_offres column
 * @method CommonPassationConsultationQuery orderByDecision($order = Criteria::ASC) Order by the decision column
 *
 * @method CommonPassationConsultationQuery groupById() Group by the id column
 * @method CommonPassationConsultationQuery groupByOrganisme() Group by the organisme column
 * @method CommonPassationConsultationQuery groupByReference() Group by the reference column
 * @method CommonPassationConsultationQuery groupByUnite() Group by the unite column
 * @method CommonPassationConsultationQuery groupByMandataire() Group by the mandataire column
 * @method CommonPassationConsultationQuery groupByLieuDetaillePredefini() Group by the lieu_detaille_predefini column
 * @method CommonPassationConsultationQuery groupByLieuxDetaillesNonDefinis() Group by the lieux_detailles_non_definis column
 * @method CommonPassationConsultationQuery groupByCodePostalLieuPrincipalExecution() Group by the code_postal_lieu_principal_execution column
 * @method CommonPassationConsultationQuery groupByVille() Group by the Ville column
 * @method CommonPassationConsultationQuery groupByMontantEstimeConsultation() Group by the montant_estime_consultation column
 * @method CommonPassationConsultationQuery groupByCommentaires() Group by the commentaires column
 * @method CommonPassationConsultationQuery groupByNumeroDeliberationFinanciere() Group by the numero_deliberation_financiere column
 * @method CommonPassationConsultationQuery groupByDateDeliberationFinanciere() Group by the date_deliberation_financiere column
 * @method CommonPassationConsultationQuery groupByImputationBudgetaire() Group by the imputation_budgetaire column
 * @method CommonPassationConsultationQuery groupByNumeroDeliberationAutorisantSignatureMarche() Group by the numero_deliberation_autorisant_signature_marche column
 * @method CommonPassationConsultationQuery groupByDateDeliberationAutorisantSignatureMarche() Group by the date_deliberation_autorisant_signature_marche column
 * @method CommonPassationConsultationQuery groupByDateNotificationPrevisionnelle() Group by the date_notification_previsionnelle column
 * @method CommonPassationConsultationQuery groupByDateReceptionProjetDceServiceValidateur() Group by the date_reception_projet_DCE_Service_Validateur column
 * @method CommonPassationConsultationQuery groupByDateFormulationsPremieresObservations() Group by the date_formulations_premieres_observations column
 * @method CommonPassationConsultationQuery groupByDateRetourProjetDceFinalise() Group by the date_retour_projet_DCE_finalise column
 * @method CommonPassationConsultationQuery groupByDateValidationProjetDceParServiceValidateur() Group by the date_validation_projet_DCE_par_service_validateur column
 * @method CommonPassationConsultationQuery groupByDateValidationProjetDceVuePar() Group by the date_validation_projet_DCE_vue_par column
 * @method CommonPassationConsultationQuery groupByDateReceptionProjetAapcParServiceValidateur() Group by the date_reception_projet_AAPC_par_Service_Validateur column
 * @method CommonPassationConsultationQuery groupByDateFormulationsPremieresObservationsAapc() Group by the date_formulations_premieres_observations_AAPC column
 * @method CommonPassationConsultationQuery groupByDateRetourProjetAapcFinalise() Group by the date_retour_projet_AAPC_finalise column
 * @method CommonPassationConsultationQuery groupByDateValidationProjetAapcParServiceValidateur() Group by the date_validation_projet_AAPC_par_Service_Validateur column
 * @method CommonPassationConsultationQuery groupByDateValidationProjetAapcParServiceValidateurVuPar() Group by the date_validation_projet_AAPC_par_Service_Validateur_vu_par column
 * @method CommonPassationConsultationQuery groupByDateEnvoiPublicite() Group by the date_envoi_publicite column
 * @method CommonPassationConsultationQuery groupByDateEnvoiInvitationsRemettreOffre() Group by the date_envoi_invitations_remettre_offre column
 * @method CommonPassationConsultationQuery groupByDateLimiteRemiseOffres() Group by the date_limite_remise_offres column
 * @method CommonPassationConsultationQuery groupByDelaiValiditeOffres() Group by the delai_validite_offres column
 * @method CommonPassationConsultationQuery groupByCommentairesPhaseConsultation() Group by the commentaires_phase_consultation column
 * @method CommonPassationConsultationQuery groupByDateReunionOuvertureCandidatures() Group by the date_reunion_ouverture_candidatures column
 * @method CommonPassationConsultationQuery groupByDateReunionOuvertureOffres() Group by the date_reunion_ouverture_offres column
 * @method CommonPassationConsultationQuery groupByDecision() Group by the decision column
 *
 * @method CommonPassationConsultationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonPassationConsultationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonPassationConsultationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonPassationConsultation findOne(PropelPDO $con = null) Return the first CommonPassationConsultation matching the query
 * @method CommonPassationConsultation findOneOrCreate(PropelPDO $con = null) Return the first CommonPassationConsultation matching the query, or a new CommonPassationConsultation object populated from the query conditions when no match is found
 *
 * @method CommonPassationConsultation findOneById(int $id) Return the first CommonPassationConsultation filtered by the id column
 * @method CommonPassationConsultation findOneByOrganisme(string $organisme) Return the first CommonPassationConsultation filtered by the organisme column
 * @method CommonPassationConsultation findOneByReference(int $reference) Return the first CommonPassationConsultation filtered by the reference column
 * @method CommonPassationConsultation findOneByUnite(int $unite) Return the first CommonPassationConsultation filtered by the unite column
 * @method CommonPassationConsultation findOneByMandataire(int $mandataire) Return the first CommonPassationConsultation filtered by the mandataire column
 * @method CommonPassationConsultation findOneByLieuDetaillePredefini(int $lieu_detaille_predefini) Return the first CommonPassationConsultation filtered by the lieu_detaille_predefini column
 * @method CommonPassationConsultation findOneByLieuxDetaillesNonDefinis(string $lieux_detailles_non_definis) Return the first CommonPassationConsultation filtered by the lieux_detailles_non_definis column
 * @method CommonPassationConsultation findOneByCodePostalLieuPrincipalExecution(string $code_postal_lieu_principal_execution) Return the first CommonPassationConsultation filtered by the code_postal_lieu_principal_execution column
 * @method CommonPassationConsultation findOneByVille(string $Ville) Return the first CommonPassationConsultation filtered by the Ville column
 * @method CommonPassationConsultation findOneByMontantEstimeConsultation(string $montant_estime_consultation) Return the first CommonPassationConsultation filtered by the montant_estime_consultation column
 * @method CommonPassationConsultation findOneByCommentaires(string $commentaires) Return the first CommonPassationConsultation filtered by the commentaires column
 * @method CommonPassationConsultation findOneByNumeroDeliberationFinanciere(string $numero_deliberation_financiere) Return the first CommonPassationConsultation filtered by the numero_deliberation_financiere column
 * @method CommonPassationConsultation findOneByDateDeliberationFinanciere(string $date_deliberation_financiere) Return the first CommonPassationConsultation filtered by the date_deliberation_financiere column
 * @method CommonPassationConsultation findOneByImputationBudgetaire(string $imputation_budgetaire) Return the first CommonPassationConsultation filtered by the imputation_budgetaire column
 * @method CommonPassationConsultation findOneByNumeroDeliberationAutorisantSignatureMarche(string $numero_deliberation_autorisant_signature_marche) Return the first CommonPassationConsultation filtered by the numero_deliberation_autorisant_signature_marche column
 * @method CommonPassationConsultation findOneByDateDeliberationAutorisantSignatureMarche(string $date_deliberation_autorisant_signature_marche) Return the first CommonPassationConsultation filtered by the date_deliberation_autorisant_signature_marche column
 * @method CommonPassationConsultation findOneByDateNotificationPrevisionnelle(string $date_notification_previsionnelle) Return the first CommonPassationConsultation filtered by the date_notification_previsionnelle column
 * @method CommonPassationConsultation findOneByDateReceptionProjetDceServiceValidateur(string $date_reception_projet_DCE_Service_Validateur) Return the first CommonPassationConsultation filtered by the date_reception_projet_DCE_Service_Validateur column
 * @method CommonPassationConsultation findOneByDateFormulationsPremieresObservations(string $date_formulations_premieres_observations) Return the first CommonPassationConsultation filtered by the date_formulations_premieres_observations column
 * @method CommonPassationConsultation findOneByDateRetourProjetDceFinalise(string $date_retour_projet_DCE_finalise) Return the first CommonPassationConsultation filtered by the date_retour_projet_DCE_finalise column
 * @method CommonPassationConsultation findOneByDateValidationProjetDceParServiceValidateur(string $date_validation_projet_DCE_par_service_validateur) Return the first CommonPassationConsultation filtered by the date_validation_projet_DCE_par_service_validateur column
 * @method CommonPassationConsultation findOneByDateValidationProjetDceVuePar(int $date_validation_projet_DCE_vue_par) Return the first CommonPassationConsultation filtered by the date_validation_projet_DCE_vue_par column
 * @method CommonPassationConsultation findOneByDateReceptionProjetAapcParServiceValidateur(string $date_reception_projet_AAPC_par_Service_Validateur) Return the first CommonPassationConsultation filtered by the date_reception_projet_AAPC_par_Service_Validateur column
 * @method CommonPassationConsultation findOneByDateFormulationsPremieresObservationsAapc(string $date_formulations_premieres_observations_AAPC) Return the first CommonPassationConsultation filtered by the date_formulations_premieres_observations_AAPC column
 * @method CommonPassationConsultation findOneByDateRetourProjetAapcFinalise(string $date_retour_projet_AAPC_finalise) Return the first CommonPassationConsultation filtered by the date_retour_projet_AAPC_finalise column
 * @method CommonPassationConsultation findOneByDateValidationProjetAapcParServiceValidateur(string $date_validation_projet_AAPC_par_Service_Validateur) Return the first CommonPassationConsultation filtered by the date_validation_projet_AAPC_par_Service_Validateur column
 * @method CommonPassationConsultation findOneByDateValidationProjetAapcParServiceValidateurVuPar(int $date_validation_projet_AAPC_par_Service_Validateur_vu_par) Return the first CommonPassationConsultation filtered by the date_validation_projet_AAPC_par_Service_Validateur_vu_par column
 * @method CommonPassationConsultation findOneByDateEnvoiPublicite(string $date_envoi_publicite) Return the first CommonPassationConsultation filtered by the date_envoi_publicite column
 * @method CommonPassationConsultation findOneByDateEnvoiInvitationsRemettreOffre(string $date_envoi_invitations_remettre_offre) Return the first CommonPassationConsultation filtered by the date_envoi_invitations_remettre_offre column
 * @method CommonPassationConsultation findOneByDateLimiteRemiseOffres(string $date_limite_remise_offres) Return the first CommonPassationConsultation filtered by the date_limite_remise_offres column
 * @method CommonPassationConsultation findOneByDelaiValiditeOffres(string $delai_validite_offres) Return the first CommonPassationConsultation filtered by the delai_validite_offres column
 * @method CommonPassationConsultation findOneByCommentairesPhaseConsultation(string $commentaires_phase_consultation) Return the first CommonPassationConsultation filtered by the commentaires_phase_consultation column
 * @method CommonPassationConsultation findOneByDateReunionOuvertureCandidatures(string $date_reunion_ouverture_candidatures) Return the first CommonPassationConsultation filtered by the date_reunion_ouverture_candidatures column
 * @method CommonPassationConsultation findOneByDateReunionOuvertureOffres(string $date_reunion_ouverture_offres) Return the first CommonPassationConsultation filtered by the date_reunion_ouverture_offres column
 * @method CommonPassationConsultation findOneByDecision(int $decision) Return the first CommonPassationConsultation filtered by the decision column
 *
 * @method array findById(int $id) Return CommonPassationConsultation objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonPassationConsultation objects filtered by the organisme column
 * @method array findByReference(int $reference) Return CommonPassationConsultation objects filtered by the reference column
 * @method array findByUnite(int $unite) Return CommonPassationConsultation objects filtered by the unite column
 * @method array findByMandataire(int $mandataire) Return CommonPassationConsultation objects filtered by the mandataire column
 * @method array findByLieuDetaillePredefini(int $lieu_detaille_predefini) Return CommonPassationConsultation objects filtered by the lieu_detaille_predefini column
 * @method array findByLieuxDetaillesNonDefinis(string $lieux_detailles_non_definis) Return CommonPassationConsultation objects filtered by the lieux_detailles_non_definis column
 * @method array findByCodePostalLieuPrincipalExecution(string $code_postal_lieu_principal_execution) Return CommonPassationConsultation objects filtered by the code_postal_lieu_principal_execution column
 * @method array findByVille(string $Ville) Return CommonPassationConsultation objects filtered by the Ville column
 * @method array findByMontantEstimeConsultation(string $montant_estime_consultation) Return CommonPassationConsultation objects filtered by the montant_estime_consultation column
 * @method array findByCommentaires(string $commentaires) Return CommonPassationConsultation objects filtered by the commentaires column
 * @method array findByNumeroDeliberationFinanciere(string $numero_deliberation_financiere) Return CommonPassationConsultation objects filtered by the numero_deliberation_financiere column
 * @method array findByDateDeliberationFinanciere(string $date_deliberation_financiere) Return CommonPassationConsultation objects filtered by the date_deliberation_financiere column
 * @method array findByImputationBudgetaire(string $imputation_budgetaire) Return CommonPassationConsultation objects filtered by the imputation_budgetaire column
 * @method array findByNumeroDeliberationAutorisantSignatureMarche(string $numero_deliberation_autorisant_signature_marche) Return CommonPassationConsultation objects filtered by the numero_deliberation_autorisant_signature_marche column
 * @method array findByDateDeliberationAutorisantSignatureMarche(string $date_deliberation_autorisant_signature_marche) Return CommonPassationConsultation objects filtered by the date_deliberation_autorisant_signature_marche column
 * @method array findByDateNotificationPrevisionnelle(string $date_notification_previsionnelle) Return CommonPassationConsultation objects filtered by the date_notification_previsionnelle column
 * @method array findByDateReceptionProjetDceServiceValidateur(string $date_reception_projet_DCE_Service_Validateur) Return CommonPassationConsultation objects filtered by the date_reception_projet_DCE_Service_Validateur column
 * @method array findByDateFormulationsPremieresObservations(string $date_formulations_premieres_observations) Return CommonPassationConsultation objects filtered by the date_formulations_premieres_observations column
 * @method array findByDateRetourProjetDceFinalise(string $date_retour_projet_DCE_finalise) Return CommonPassationConsultation objects filtered by the date_retour_projet_DCE_finalise column
 * @method array findByDateValidationProjetDceParServiceValidateur(string $date_validation_projet_DCE_par_service_validateur) Return CommonPassationConsultation objects filtered by the date_validation_projet_DCE_par_service_validateur column
 * @method array findByDateValidationProjetDceVuePar(int $date_validation_projet_DCE_vue_par) Return CommonPassationConsultation objects filtered by the date_validation_projet_DCE_vue_par column
 * @method array findByDateReceptionProjetAapcParServiceValidateur(string $date_reception_projet_AAPC_par_Service_Validateur) Return CommonPassationConsultation objects filtered by the date_reception_projet_AAPC_par_Service_Validateur column
 * @method array findByDateFormulationsPremieresObservationsAapc(string $date_formulations_premieres_observations_AAPC) Return CommonPassationConsultation objects filtered by the date_formulations_premieres_observations_AAPC column
 * @method array findByDateRetourProjetAapcFinalise(string $date_retour_projet_AAPC_finalise) Return CommonPassationConsultation objects filtered by the date_retour_projet_AAPC_finalise column
 * @method array findByDateValidationProjetAapcParServiceValidateur(string $date_validation_projet_AAPC_par_Service_Validateur) Return CommonPassationConsultation objects filtered by the date_validation_projet_AAPC_par_Service_Validateur column
 * @method array findByDateValidationProjetAapcParServiceValidateurVuPar(int $date_validation_projet_AAPC_par_Service_Validateur_vu_par) Return CommonPassationConsultation objects filtered by the date_validation_projet_AAPC_par_Service_Validateur_vu_par column
 * @method array findByDateEnvoiPublicite(string $date_envoi_publicite) Return CommonPassationConsultation objects filtered by the date_envoi_publicite column
 * @method array findByDateEnvoiInvitationsRemettreOffre(string $date_envoi_invitations_remettre_offre) Return CommonPassationConsultation objects filtered by the date_envoi_invitations_remettre_offre column
 * @method array findByDateLimiteRemiseOffres(string $date_limite_remise_offres) Return CommonPassationConsultation objects filtered by the date_limite_remise_offres column
 * @method array findByDelaiValiditeOffres(string $delai_validite_offres) Return CommonPassationConsultation objects filtered by the delai_validite_offres column
 * @method array findByCommentairesPhaseConsultation(string $commentaires_phase_consultation) Return CommonPassationConsultation objects filtered by the commentaires_phase_consultation column
 * @method array findByDateReunionOuvertureCandidatures(string $date_reunion_ouverture_candidatures) Return CommonPassationConsultation objects filtered by the date_reunion_ouverture_candidatures column
 * @method array findByDateReunionOuvertureOffres(string $date_reunion_ouverture_offres) Return CommonPassationConsultation objects filtered by the date_reunion_ouverture_offres column
 * @method array findByDecision(int $decision) Return CommonPassationConsultation objects filtered by the decision column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonPassationConsultationQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonPassationConsultationQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonPassationConsultation', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonPassationConsultationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonPassationConsultationQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonPassationConsultationQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonPassationConsultationQuery) {
            return $criteria;
        }
        $query = new CommonPassationConsultationQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query 
                         A Primary key composition: [$id, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonPassationConsultation|CommonPassationConsultation[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonPassationConsultationPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonPassationConsultationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonPassationConsultation A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `reference`, `unite`, `mandataire`, `lieu_detaille_predefini`, `lieux_detailles_non_definis`, `code_postal_lieu_principal_execution`, `Ville`, `montant_estime_consultation`, `commentaires`, `numero_deliberation_financiere`, `date_deliberation_financiere`, `imputation_budgetaire`, `numero_deliberation_autorisant_signature_marche`, `date_deliberation_autorisant_signature_marche`, `date_notification_previsionnelle`, `date_reception_projet_DCE_Service_Validateur`, `date_formulations_premieres_observations`, `date_retour_projet_DCE_finalise`, `date_validation_projet_DCE_par_service_validateur`, `date_validation_projet_DCE_vue_par`, `date_reception_projet_AAPC_par_Service_Validateur`, `date_formulations_premieres_observations_AAPC`, `date_retour_projet_AAPC_finalise`, `date_validation_projet_AAPC_par_Service_Validateur`, `date_validation_projet_AAPC_par_Service_Validateur_vu_par`, `date_envoi_publicite`, `date_envoi_invitations_remettre_offre`, `date_limite_remise_offres`, `delai_validite_offres`, `commentaires_phase_consultation`, `date_reunion_ouverture_candidatures`, `date_reunion_ouverture_offres`, `decision` FROM `Passation_consultation` WHERE `id` = :p0 AND `organisme` = :p1';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonPassationConsultation();
            $obj->hydrate($row);
            CommonPassationConsultationPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return CommonPassationConsultation|CommonPassationConsultation[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CommonPassationConsultation[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return CommonPassationConsultationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonPassationConsultationPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonPassationConsultationPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonPassationConsultationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonPassationConsultationPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonPassationConsultationPeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationConsultationQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonPassationConsultationPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonPassationConsultationPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPassationConsultationPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the organisme column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganisme('fooValue');   // WHERE organisme = 'fooValue'
     * $query->filterByOrganisme('%fooValue%'); // WHERE organisme LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organisme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationConsultationQuery The current query, for fluid interface
     */
    public function filterByOrganisme($organisme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($organisme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $organisme)) {
                $organisme = str_replace('*', '%', $organisme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPassationConsultationPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the reference column
     *
     * Example usage:
     * <code>
     * $query->filterByReference(1234); // WHERE reference = 1234
     * $query->filterByReference(array(12, 34)); // WHERE reference IN (12, 34)
     * $query->filterByReference(array('min' => 12)); // WHERE reference >= 12
     * $query->filterByReference(array('max' => 12)); // WHERE reference <= 12
     * </code>
     *
     * @param     mixed $reference The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationConsultationQuery The current query, for fluid interface
     */
    public function filterByReference($reference = null, $comparison = null)
    {
        if (is_array($reference)) {
            $useMinMax = false;
            if (isset($reference['min'])) {
                $this->addUsingAlias(CommonPassationConsultationPeer::REFERENCE, $reference['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reference['max'])) {
                $this->addUsingAlias(CommonPassationConsultationPeer::REFERENCE, $reference['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPassationConsultationPeer::REFERENCE, $reference, $comparison);
    }

    /**
     * Filter the query on the unite column
     *
     * Example usage:
     * <code>
     * $query->filterByUnite(1234); // WHERE unite = 1234
     * $query->filterByUnite(array(12, 34)); // WHERE unite IN (12, 34)
     * $query->filterByUnite(array('min' => 12)); // WHERE unite >= 12
     * $query->filterByUnite(array('max' => 12)); // WHERE unite <= 12
     * </code>
     *
     * @param     mixed $unite The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationConsultationQuery The current query, for fluid interface
     */
    public function filterByUnite($unite = null, $comparison = null)
    {
        if (is_array($unite)) {
            $useMinMax = false;
            if (isset($unite['min'])) {
                $this->addUsingAlias(CommonPassationConsultationPeer::UNITE, $unite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($unite['max'])) {
                $this->addUsingAlias(CommonPassationConsultationPeer::UNITE, $unite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPassationConsultationPeer::UNITE, $unite, $comparison);
    }

    /**
     * Filter the query on the mandataire column
     *
     * Example usage:
     * <code>
     * $query->filterByMandataire(1234); // WHERE mandataire = 1234
     * $query->filterByMandataire(array(12, 34)); // WHERE mandataire IN (12, 34)
     * $query->filterByMandataire(array('min' => 12)); // WHERE mandataire >= 12
     * $query->filterByMandataire(array('max' => 12)); // WHERE mandataire <= 12
     * </code>
     *
     * @param     mixed $mandataire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationConsultationQuery The current query, for fluid interface
     */
    public function filterByMandataire($mandataire = null, $comparison = null)
    {
        if (is_array($mandataire)) {
            $useMinMax = false;
            if (isset($mandataire['min'])) {
                $this->addUsingAlias(CommonPassationConsultationPeer::MANDATAIRE, $mandataire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mandataire['max'])) {
                $this->addUsingAlias(CommonPassationConsultationPeer::MANDATAIRE, $mandataire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPassationConsultationPeer::MANDATAIRE, $mandataire, $comparison);
    }

    /**
     * Filter the query on the lieu_detaille_predefini column
     *
     * Example usage:
     * <code>
     * $query->filterByLieuDetaillePredefini(1234); // WHERE lieu_detaille_predefini = 1234
     * $query->filterByLieuDetaillePredefini(array(12, 34)); // WHERE lieu_detaille_predefini IN (12, 34)
     * $query->filterByLieuDetaillePredefini(array('min' => 12)); // WHERE lieu_detaille_predefini >= 12
     * $query->filterByLieuDetaillePredefini(array('max' => 12)); // WHERE lieu_detaille_predefini <= 12
     * </code>
     *
     * @param     mixed $lieuDetaillePredefini The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationConsultationQuery The current query, for fluid interface
     */
    public function filterByLieuDetaillePredefini($lieuDetaillePredefini = null, $comparison = null)
    {
        if (is_array($lieuDetaillePredefini)) {
            $useMinMax = false;
            if (isset($lieuDetaillePredefini['min'])) {
                $this->addUsingAlias(CommonPassationConsultationPeer::LIEU_DETAILLE_PREDEFINI, $lieuDetaillePredefini['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lieuDetaillePredefini['max'])) {
                $this->addUsingAlias(CommonPassationConsultationPeer::LIEU_DETAILLE_PREDEFINI, $lieuDetaillePredefini['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPassationConsultationPeer::LIEU_DETAILLE_PREDEFINI, $lieuDetaillePredefini, $comparison);
    }

    /**
     * Filter the query on the lieux_detailles_non_definis column
     *
     * Example usage:
     * <code>
     * $query->filterByLieuxDetaillesNonDefinis('fooValue');   // WHERE lieux_detailles_non_definis = 'fooValue'
     * $query->filterByLieuxDetaillesNonDefinis('%fooValue%'); // WHERE lieux_detailles_non_definis LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lieuxDetaillesNonDefinis The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationConsultationQuery The current query, for fluid interface
     */
    public function filterByLieuxDetaillesNonDefinis($lieuxDetaillesNonDefinis = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lieuxDetaillesNonDefinis)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lieuxDetaillesNonDefinis)) {
                $lieuxDetaillesNonDefinis = str_replace('*', '%', $lieuxDetaillesNonDefinis);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPassationConsultationPeer::LIEUX_DETAILLES_NON_DEFINIS, $lieuxDetaillesNonDefinis, $comparison);
    }

    /**
     * Filter the query on the code_postal_lieu_principal_execution column
     *
     * Example usage:
     * <code>
     * $query->filterByCodePostalLieuPrincipalExecution('fooValue');   // WHERE code_postal_lieu_principal_execution = 'fooValue'
     * $query->filterByCodePostalLieuPrincipalExecution('%fooValue%'); // WHERE code_postal_lieu_principal_execution LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codePostalLieuPrincipalExecution The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationConsultationQuery The current query, for fluid interface
     */
    public function filterByCodePostalLieuPrincipalExecution($codePostalLieuPrincipalExecution = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codePostalLieuPrincipalExecution)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codePostalLieuPrincipalExecution)) {
                $codePostalLieuPrincipalExecution = str_replace('*', '%', $codePostalLieuPrincipalExecution);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPassationConsultationPeer::CODE_POSTAL_LIEU_PRINCIPAL_EXECUTION, $codePostalLieuPrincipalExecution, $comparison);
    }

    /**
     * Filter the query on the Ville column
     *
     * Example usage:
     * <code>
     * $query->filterByVille('fooValue');   // WHERE Ville = 'fooValue'
     * $query->filterByVille('%fooValue%'); // WHERE Ville LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ville The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationConsultationQuery The current query, for fluid interface
     */
    public function filterByVille($ville = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ville)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ville)) {
                $ville = str_replace('*', '%', $ville);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPassationConsultationPeer::VILLE, $ville, $comparison);
    }

    /**
     * Filter the query on the montant_estime_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantEstimeConsultation('fooValue');   // WHERE montant_estime_consultation = 'fooValue'
     * $query->filterByMontantEstimeConsultation('%fooValue%'); // WHERE montant_estime_consultation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $montantEstimeConsultation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationConsultationQuery The current query, for fluid interface
     */
    public function filterByMontantEstimeConsultation($montantEstimeConsultation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($montantEstimeConsultation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $montantEstimeConsultation)) {
                $montantEstimeConsultation = str_replace('*', '%', $montantEstimeConsultation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPassationConsultationPeer::MONTANT_ESTIME_CONSULTATION, $montantEstimeConsultation, $comparison);
    }

    /**
     * Filter the query on the commentaires column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentaires('fooValue');   // WHERE commentaires = 'fooValue'
     * $query->filterByCommentaires('%fooValue%'); // WHERE commentaires LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commentaires The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationConsultationQuery The current query, for fluid interface
     */
    public function filterByCommentaires($commentaires = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commentaires)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commentaires)) {
                $commentaires = str_replace('*', '%', $commentaires);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPassationConsultationPeer::COMMENTAIRES, $commentaires, $comparison);
    }

    /**
     * Filter the query on the numero_deliberation_financiere column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeroDeliberationFinanciere('fooValue');   // WHERE numero_deliberation_financiere = 'fooValue'
     * $query->filterByNumeroDeliberationFinanciere('%fooValue%'); // WHERE numero_deliberation_financiere LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numeroDeliberationFinanciere The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationConsultationQuery The current query, for fluid interface
     */
    public function filterByNumeroDeliberationFinanciere($numeroDeliberationFinanciere = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numeroDeliberationFinanciere)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numeroDeliberationFinanciere)) {
                $numeroDeliberationFinanciere = str_replace('*', '%', $numeroDeliberationFinanciere);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPassationConsultationPeer::NUMERO_DELIBERATION_FINANCIERE, $numeroDeliberationFinanciere, $comparison);
    }

    /**
     * Filter the query on the date_deliberation_financiere column
     *
     * Example usage:
     * <code>
     * $query->filterByDateDeliberationFinanciere('fooValue');   // WHERE date_deliberation_financiere = 'fooValue'
     * $query->filterByDateDeliberationFinanciere('%fooValue%'); // WHERE date_deliberation_financiere LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateDeliberationFinanciere The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationConsultationQuery The current query, for fluid interface
     */
    public function filterByDateDeliberationFinanciere($dateDeliberationFinanciere = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateDeliberationFinanciere)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateDeliberationFinanciere)) {
                $dateDeliberationFinanciere = str_replace('*', '%', $dateDeliberationFinanciere);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPassationConsultationPeer::DATE_DELIBERATION_FINANCIERE, $dateDeliberationFinanciere, $comparison);
    }

    /**
     * Filter the query on the imputation_budgetaire column
     *
     * Example usage:
     * <code>
     * $query->filterByImputationBudgetaire('fooValue');   // WHERE imputation_budgetaire = 'fooValue'
     * $query->filterByImputationBudgetaire('%fooValue%'); // WHERE imputation_budgetaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $imputationBudgetaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationConsultationQuery The current query, for fluid interface
     */
    public function filterByImputationBudgetaire($imputationBudgetaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($imputationBudgetaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $imputationBudgetaire)) {
                $imputationBudgetaire = str_replace('*', '%', $imputationBudgetaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPassationConsultationPeer::IMPUTATION_BUDGETAIRE, $imputationBudgetaire, $comparison);
    }

    /**
     * Filter the query on the numero_deliberation_autorisant_signature_marche column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeroDeliberationAutorisantSignatureMarche('fooValue');   // WHERE numero_deliberation_autorisant_signature_marche = 'fooValue'
     * $query->filterByNumeroDeliberationAutorisantSignatureMarche('%fooValue%'); // WHERE numero_deliberation_autorisant_signature_marche LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numeroDeliberationAutorisantSignatureMarche The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationConsultationQuery The current query, for fluid interface
     */
    public function filterByNumeroDeliberationAutorisantSignatureMarche($numeroDeliberationAutorisantSignatureMarche = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numeroDeliberationAutorisantSignatureMarche)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numeroDeliberationAutorisantSignatureMarche)) {
                $numeroDeliberationAutorisantSignatureMarche = str_replace('*', '%', $numeroDeliberationAutorisantSignatureMarche);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPassationConsultationPeer::NUMERO_DELIBERATION_AUTORISANT_SIGNATURE_MARCHE, $numeroDeliberationAutorisantSignatureMarche, $comparison);
    }

    /**
     * Filter the query on the date_deliberation_autorisant_signature_marche column
     *
     * Example usage:
     * <code>
     * $query->filterByDateDeliberationAutorisantSignatureMarche('fooValue');   // WHERE date_deliberation_autorisant_signature_marche = 'fooValue'
     * $query->filterByDateDeliberationAutorisantSignatureMarche('%fooValue%'); // WHERE date_deliberation_autorisant_signature_marche LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateDeliberationAutorisantSignatureMarche The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationConsultationQuery The current query, for fluid interface
     */
    public function filterByDateDeliberationAutorisantSignatureMarche($dateDeliberationAutorisantSignatureMarche = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateDeliberationAutorisantSignatureMarche)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateDeliberationAutorisantSignatureMarche)) {
                $dateDeliberationAutorisantSignatureMarche = str_replace('*', '%', $dateDeliberationAutorisantSignatureMarche);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPassationConsultationPeer::DATE_DELIBERATION_AUTORISANT_SIGNATURE_MARCHE, $dateDeliberationAutorisantSignatureMarche, $comparison);
    }

    /**
     * Filter the query on the date_notification_previsionnelle column
     *
     * Example usage:
     * <code>
     * $query->filterByDateNotificationPrevisionnelle('fooValue');   // WHERE date_notification_previsionnelle = 'fooValue'
     * $query->filterByDateNotificationPrevisionnelle('%fooValue%'); // WHERE date_notification_previsionnelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateNotificationPrevisionnelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationConsultationQuery The current query, for fluid interface
     */
    public function filterByDateNotificationPrevisionnelle($dateNotificationPrevisionnelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateNotificationPrevisionnelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateNotificationPrevisionnelle)) {
                $dateNotificationPrevisionnelle = str_replace('*', '%', $dateNotificationPrevisionnelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPassationConsultationPeer::DATE_NOTIFICATION_PREVISIONNELLE, $dateNotificationPrevisionnelle, $comparison);
    }

    /**
     * Filter the query on the date_reception_projet_DCE_Service_Validateur column
     *
     * Example usage:
     * <code>
     * $query->filterByDateReceptionProjetDceServiceValidateur('fooValue');   // WHERE date_reception_projet_DCE_Service_Validateur = 'fooValue'
     * $query->filterByDateReceptionProjetDceServiceValidateur('%fooValue%'); // WHERE date_reception_projet_DCE_Service_Validateur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateReceptionProjetDceServiceValidateur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationConsultationQuery The current query, for fluid interface
     */
    public function filterByDateReceptionProjetDceServiceValidateur($dateReceptionProjetDceServiceValidateur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateReceptionProjetDceServiceValidateur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateReceptionProjetDceServiceValidateur)) {
                $dateReceptionProjetDceServiceValidateur = str_replace('*', '%', $dateReceptionProjetDceServiceValidateur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPassationConsultationPeer::DATE_RECEPTION_PROJET_DCE_SERVICE_VALIDATEUR, $dateReceptionProjetDceServiceValidateur, $comparison);
    }

    /**
     * Filter the query on the date_formulations_premieres_observations column
     *
     * Example usage:
     * <code>
     * $query->filterByDateFormulationsPremieresObservations('fooValue');   // WHERE date_formulations_premieres_observations = 'fooValue'
     * $query->filterByDateFormulationsPremieresObservations('%fooValue%'); // WHERE date_formulations_premieres_observations LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateFormulationsPremieresObservations The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationConsultationQuery The current query, for fluid interface
     */
    public function filterByDateFormulationsPremieresObservations($dateFormulationsPremieresObservations = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateFormulationsPremieresObservations)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateFormulationsPremieresObservations)) {
                $dateFormulationsPremieresObservations = str_replace('*', '%', $dateFormulationsPremieresObservations);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPassationConsultationPeer::DATE_FORMULATIONS_PREMIERES_OBSERVATIONS, $dateFormulationsPremieresObservations, $comparison);
    }

    /**
     * Filter the query on the date_retour_projet_DCE_finalise column
     *
     * Example usage:
     * <code>
     * $query->filterByDateRetourProjetDceFinalise('fooValue');   // WHERE date_retour_projet_DCE_finalise = 'fooValue'
     * $query->filterByDateRetourProjetDceFinalise('%fooValue%'); // WHERE date_retour_projet_DCE_finalise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateRetourProjetDceFinalise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationConsultationQuery The current query, for fluid interface
     */
    public function filterByDateRetourProjetDceFinalise($dateRetourProjetDceFinalise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateRetourProjetDceFinalise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateRetourProjetDceFinalise)) {
                $dateRetourProjetDceFinalise = str_replace('*', '%', $dateRetourProjetDceFinalise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPassationConsultationPeer::DATE_RETOUR_PROJET_DCE_FINALISE, $dateRetourProjetDceFinalise, $comparison);
    }

    /**
     * Filter the query on the date_validation_projet_DCE_par_service_validateur column
     *
     * Example usage:
     * <code>
     * $query->filterByDateValidationProjetDceParServiceValidateur('fooValue');   // WHERE date_validation_projet_DCE_par_service_validateur = 'fooValue'
     * $query->filterByDateValidationProjetDceParServiceValidateur('%fooValue%'); // WHERE date_validation_projet_DCE_par_service_validateur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateValidationProjetDceParServiceValidateur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationConsultationQuery The current query, for fluid interface
     */
    public function filterByDateValidationProjetDceParServiceValidateur($dateValidationProjetDceParServiceValidateur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateValidationProjetDceParServiceValidateur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateValidationProjetDceParServiceValidateur)) {
                $dateValidationProjetDceParServiceValidateur = str_replace('*', '%', $dateValidationProjetDceParServiceValidateur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPassationConsultationPeer::DATE_VALIDATION_PROJET_DCE_PAR_SERVICE_VALIDATEUR, $dateValidationProjetDceParServiceValidateur, $comparison);
    }

    /**
     * Filter the query on the date_validation_projet_DCE_vue_par column
     *
     * Example usage:
     * <code>
     * $query->filterByDateValidationProjetDceVuePar(1234); // WHERE date_validation_projet_DCE_vue_par = 1234
     * $query->filterByDateValidationProjetDceVuePar(array(12, 34)); // WHERE date_validation_projet_DCE_vue_par IN (12, 34)
     * $query->filterByDateValidationProjetDceVuePar(array('min' => 12)); // WHERE date_validation_projet_DCE_vue_par >= 12
     * $query->filterByDateValidationProjetDceVuePar(array('max' => 12)); // WHERE date_validation_projet_DCE_vue_par <= 12
     * </code>
     *
     * @param     mixed $dateValidationProjetDceVuePar The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationConsultationQuery The current query, for fluid interface
     */
    public function filterByDateValidationProjetDceVuePar($dateValidationProjetDceVuePar = null, $comparison = null)
    {
        if (is_array($dateValidationProjetDceVuePar)) {
            $useMinMax = false;
            if (isset($dateValidationProjetDceVuePar['min'])) {
                $this->addUsingAlias(CommonPassationConsultationPeer::DATE_VALIDATION_PROJET_DCE_VUE_PAR, $dateValidationProjetDceVuePar['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateValidationProjetDceVuePar['max'])) {
                $this->addUsingAlias(CommonPassationConsultationPeer::DATE_VALIDATION_PROJET_DCE_VUE_PAR, $dateValidationProjetDceVuePar['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPassationConsultationPeer::DATE_VALIDATION_PROJET_DCE_VUE_PAR, $dateValidationProjetDceVuePar, $comparison);
    }

    /**
     * Filter the query on the date_reception_projet_AAPC_par_Service_Validateur column
     *
     * Example usage:
     * <code>
     * $query->filterByDateReceptionProjetAapcParServiceValidateur('fooValue');   // WHERE date_reception_projet_AAPC_par_Service_Validateur = 'fooValue'
     * $query->filterByDateReceptionProjetAapcParServiceValidateur('%fooValue%'); // WHERE date_reception_projet_AAPC_par_Service_Validateur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateReceptionProjetAapcParServiceValidateur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationConsultationQuery The current query, for fluid interface
     */
    public function filterByDateReceptionProjetAapcParServiceValidateur($dateReceptionProjetAapcParServiceValidateur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateReceptionProjetAapcParServiceValidateur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateReceptionProjetAapcParServiceValidateur)) {
                $dateReceptionProjetAapcParServiceValidateur = str_replace('*', '%', $dateReceptionProjetAapcParServiceValidateur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPassationConsultationPeer::DATE_RECEPTION_PROJET_AAPC_PAR_SERVICE_VALIDATEUR, $dateReceptionProjetAapcParServiceValidateur, $comparison);
    }

    /**
     * Filter the query on the date_formulations_premieres_observations_AAPC column
     *
     * Example usage:
     * <code>
     * $query->filterByDateFormulationsPremieresObservationsAapc('fooValue');   // WHERE date_formulations_premieres_observations_AAPC = 'fooValue'
     * $query->filterByDateFormulationsPremieresObservationsAapc('%fooValue%'); // WHERE date_formulations_premieres_observations_AAPC LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateFormulationsPremieresObservationsAapc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationConsultationQuery The current query, for fluid interface
     */
    public function filterByDateFormulationsPremieresObservationsAapc($dateFormulationsPremieresObservationsAapc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateFormulationsPremieresObservationsAapc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateFormulationsPremieresObservationsAapc)) {
                $dateFormulationsPremieresObservationsAapc = str_replace('*', '%', $dateFormulationsPremieresObservationsAapc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPassationConsultationPeer::DATE_FORMULATIONS_PREMIERES_OBSERVATIONS_AAPC, $dateFormulationsPremieresObservationsAapc, $comparison);
    }

    /**
     * Filter the query on the date_retour_projet_AAPC_finalise column
     *
     * Example usage:
     * <code>
     * $query->filterByDateRetourProjetAapcFinalise('fooValue');   // WHERE date_retour_projet_AAPC_finalise = 'fooValue'
     * $query->filterByDateRetourProjetAapcFinalise('%fooValue%'); // WHERE date_retour_projet_AAPC_finalise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateRetourProjetAapcFinalise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationConsultationQuery The current query, for fluid interface
     */
    public function filterByDateRetourProjetAapcFinalise($dateRetourProjetAapcFinalise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateRetourProjetAapcFinalise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateRetourProjetAapcFinalise)) {
                $dateRetourProjetAapcFinalise = str_replace('*', '%', $dateRetourProjetAapcFinalise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPassationConsultationPeer::DATE_RETOUR_PROJET_AAPC_FINALISE, $dateRetourProjetAapcFinalise, $comparison);
    }

    /**
     * Filter the query on the date_validation_projet_AAPC_par_Service_Validateur column
     *
     * Example usage:
     * <code>
     * $query->filterByDateValidationProjetAapcParServiceValidateur('fooValue');   // WHERE date_validation_projet_AAPC_par_Service_Validateur = 'fooValue'
     * $query->filterByDateValidationProjetAapcParServiceValidateur('%fooValue%'); // WHERE date_validation_projet_AAPC_par_Service_Validateur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateValidationProjetAapcParServiceValidateur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationConsultationQuery The current query, for fluid interface
     */
    public function filterByDateValidationProjetAapcParServiceValidateur($dateValidationProjetAapcParServiceValidateur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateValidationProjetAapcParServiceValidateur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateValidationProjetAapcParServiceValidateur)) {
                $dateValidationProjetAapcParServiceValidateur = str_replace('*', '%', $dateValidationProjetAapcParServiceValidateur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPassationConsultationPeer::DATE_VALIDATION_PROJET_AAPC_PAR_SERVICE_VALIDATEUR, $dateValidationProjetAapcParServiceValidateur, $comparison);
    }

    /**
     * Filter the query on the date_validation_projet_AAPC_par_Service_Validateur_vu_par column
     *
     * Example usage:
     * <code>
     * $query->filterByDateValidationProjetAapcParServiceValidateurVuPar(1234); // WHERE date_validation_projet_AAPC_par_Service_Validateur_vu_par = 1234
     * $query->filterByDateValidationProjetAapcParServiceValidateurVuPar(array(12, 34)); // WHERE date_validation_projet_AAPC_par_Service_Validateur_vu_par IN (12, 34)
     * $query->filterByDateValidationProjetAapcParServiceValidateurVuPar(array('min' => 12)); // WHERE date_validation_projet_AAPC_par_Service_Validateur_vu_par >= 12
     * $query->filterByDateValidationProjetAapcParServiceValidateurVuPar(array('max' => 12)); // WHERE date_validation_projet_AAPC_par_Service_Validateur_vu_par <= 12
     * </code>
     *
     * @param     mixed $dateValidationProjetAapcParServiceValidateurVuPar The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationConsultationQuery The current query, for fluid interface
     */
    public function filterByDateValidationProjetAapcParServiceValidateurVuPar($dateValidationProjetAapcParServiceValidateurVuPar = null, $comparison = null)
    {
        if (is_array($dateValidationProjetAapcParServiceValidateurVuPar)) {
            $useMinMax = false;
            if (isset($dateValidationProjetAapcParServiceValidateurVuPar['min'])) {
                $this->addUsingAlias(CommonPassationConsultationPeer::DATE_VALIDATION_PROJET_AAPC_PAR_SERVICE_VALIDATEUR_VU_PAR, $dateValidationProjetAapcParServiceValidateurVuPar['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateValidationProjetAapcParServiceValidateurVuPar['max'])) {
                $this->addUsingAlias(CommonPassationConsultationPeer::DATE_VALIDATION_PROJET_AAPC_PAR_SERVICE_VALIDATEUR_VU_PAR, $dateValidationProjetAapcParServiceValidateurVuPar['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPassationConsultationPeer::DATE_VALIDATION_PROJET_AAPC_PAR_SERVICE_VALIDATEUR_VU_PAR, $dateValidationProjetAapcParServiceValidateurVuPar, $comparison);
    }

    /**
     * Filter the query on the date_envoi_publicite column
     *
     * Example usage:
     * <code>
     * $query->filterByDateEnvoiPublicite('fooValue');   // WHERE date_envoi_publicite = 'fooValue'
     * $query->filterByDateEnvoiPublicite('%fooValue%'); // WHERE date_envoi_publicite LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateEnvoiPublicite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationConsultationQuery The current query, for fluid interface
     */
    public function filterByDateEnvoiPublicite($dateEnvoiPublicite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateEnvoiPublicite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateEnvoiPublicite)) {
                $dateEnvoiPublicite = str_replace('*', '%', $dateEnvoiPublicite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPassationConsultationPeer::DATE_ENVOI_PUBLICITE, $dateEnvoiPublicite, $comparison);
    }

    /**
     * Filter the query on the date_envoi_invitations_remettre_offre column
     *
     * Example usage:
     * <code>
     * $query->filterByDateEnvoiInvitationsRemettreOffre('fooValue');   // WHERE date_envoi_invitations_remettre_offre = 'fooValue'
     * $query->filterByDateEnvoiInvitationsRemettreOffre('%fooValue%'); // WHERE date_envoi_invitations_remettre_offre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateEnvoiInvitationsRemettreOffre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationConsultationQuery The current query, for fluid interface
     */
    public function filterByDateEnvoiInvitationsRemettreOffre($dateEnvoiInvitationsRemettreOffre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateEnvoiInvitationsRemettreOffre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateEnvoiInvitationsRemettreOffre)) {
                $dateEnvoiInvitationsRemettreOffre = str_replace('*', '%', $dateEnvoiInvitationsRemettreOffre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPassationConsultationPeer::DATE_ENVOI_INVITATIONS_REMETTRE_OFFRE, $dateEnvoiInvitationsRemettreOffre, $comparison);
    }

    /**
     * Filter the query on the date_limite_remise_offres column
     *
     * Example usage:
     * <code>
     * $query->filterByDateLimiteRemiseOffres('fooValue');   // WHERE date_limite_remise_offres = 'fooValue'
     * $query->filterByDateLimiteRemiseOffres('%fooValue%'); // WHERE date_limite_remise_offres LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateLimiteRemiseOffres The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationConsultationQuery The current query, for fluid interface
     */
    public function filterByDateLimiteRemiseOffres($dateLimiteRemiseOffres = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateLimiteRemiseOffres)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateLimiteRemiseOffres)) {
                $dateLimiteRemiseOffres = str_replace('*', '%', $dateLimiteRemiseOffres);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPassationConsultationPeer::DATE_LIMITE_REMISE_OFFRES, $dateLimiteRemiseOffres, $comparison);
    }

    /**
     * Filter the query on the delai_validite_offres column
     *
     * Example usage:
     * <code>
     * $query->filterByDelaiValiditeOffres('fooValue');   // WHERE delai_validite_offres = 'fooValue'
     * $query->filterByDelaiValiditeOffres('%fooValue%'); // WHERE delai_validite_offres LIKE '%fooValue%'
     * </code>
     *
     * @param     string $delaiValiditeOffres The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationConsultationQuery The current query, for fluid interface
     */
    public function filterByDelaiValiditeOffres($delaiValiditeOffres = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($delaiValiditeOffres)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $delaiValiditeOffres)) {
                $delaiValiditeOffres = str_replace('*', '%', $delaiValiditeOffres);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPassationConsultationPeer::DELAI_VALIDITE_OFFRES, $delaiValiditeOffres, $comparison);
    }

    /**
     * Filter the query on the commentaires_phase_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentairesPhaseConsultation('fooValue');   // WHERE commentaires_phase_consultation = 'fooValue'
     * $query->filterByCommentairesPhaseConsultation('%fooValue%'); // WHERE commentaires_phase_consultation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commentairesPhaseConsultation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationConsultationQuery The current query, for fluid interface
     */
    public function filterByCommentairesPhaseConsultation($commentairesPhaseConsultation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commentairesPhaseConsultation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commentairesPhaseConsultation)) {
                $commentairesPhaseConsultation = str_replace('*', '%', $commentairesPhaseConsultation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPassationConsultationPeer::COMMENTAIRES_PHASE_CONSULTATION, $commentairesPhaseConsultation, $comparison);
    }

    /**
     * Filter the query on the date_reunion_ouverture_candidatures column
     *
     * Example usage:
     * <code>
     * $query->filterByDateReunionOuvertureCandidatures('fooValue');   // WHERE date_reunion_ouverture_candidatures = 'fooValue'
     * $query->filterByDateReunionOuvertureCandidatures('%fooValue%'); // WHERE date_reunion_ouverture_candidatures LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateReunionOuvertureCandidatures The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationConsultationQuery The current query, for fluid interface
     */
    public function filterByDateReunionOuvertureCandidatures($dateReunionOuvertureCandidatures = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateReunionOuvertureCandidatures)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateReunionOuvertureCandidatures)) {
                $dateReunionOuvertureCandidatures = str_replace('*', '%', $dateReunionOuvertureCandidatures);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPassationConsultationPeer::DATE_REUNION_OUVERTURE_CANDIDATURES, $dateReunionOuvertureCandidatures, $comparison);
    }

    /**
     * Filter the query on the date_reunion_ouverture_offres column
     *
     * Example usage:
     * <code>
     * $query->filterByDateReunionOuvertureOffres('fooValue');   // WHERE date_reunion_ouverture_offres = 'fooValue'
     * $query->filterByDateReunionOuvertureOffres('%fooValue%'); // WHERE date_reunion_ouverture_offres LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateReunionOuvertureOffres The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationConsultationQuery The current query, for fluid interface
     */
    public function filterByDateReunionOuvertureOffres($dateReunionOuvertureOffres = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateReunionOuvertureOffres)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateReunionOuvertureOffres)) {
                $dateReunionOuvertureOffres = str_replace('*', '%', $dateReunionOuvertureOffres);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPassationConsultationPeer::DATE_REUNION_OUVERTURE_OFFRES, $dateReunionOuvertureOffres, $comparison);
    }

    /**
     * Filter the query on the decision column
     *
     * Example usage:
     * <code>
     * $query->filterByDecision(1234); // WHERE decision = 1234
     * $query->filterByDecision(array(12, 34)); // WHERE decision IN (12, 34)
     * $query->filterByDecision(array('min' => 12)); // WHERE decision >= 12
     * $query->filterByDecision(array('max' => 12)); // WHERE decision <= 12
     * </code>
     *
     * @param     mixed $decision The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationConsultationQuery The current query, for fluid interface
     */
    public function filterByDecision($decision = null, $comparison = null)
    {
        if (is_array($decision)) {
            $useMinMax = false;
            if (isset($decision['min'])) {
                $this->addUsingAlias(CommonPassationConsultationPeer::DECISION, $decision['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($decision['max'])) {
                $this->addUsingAlias(CommonPassationConsultationPeer::DECISION, $decision['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPassationConsultationPeer::DECISION, $decision, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonPassationConsultation $commonPassationConsultation Object to remove from the list of results
     *
     * @return CommonPassationConsultationQuery The current query, for fluid interface
     */
    public function prune($commonPassationConsultation = null)
    {
        if ($commonPassationConsultation) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonPassationConsultationPeer::ID), $commonPassationConsultation->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonPassationConsultationPeer::ORGANISME), $commonPassationConsultation->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
