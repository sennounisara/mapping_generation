<?php


/**
 * Base class that represents a query for the 'passation_marche_a_venir' table.
 *
 * 
 *
 * @method CommonPassationMarcheAVenirQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonPassationMarcheAVenirQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonPassationMarcheAVenirQuery orderByIdPassationConsultation($order = Criteria::ASC) Order by the id_passation_consultation column
 * @method CommonPassationMarcheAVenirQuery orderByLot($order = Criteria::ASC) Order by the lot column
 * @method CommonPassationMarcheAVenirQuery orderByMontantEstime($order = Criteria::ASC) Order by the montant_estime column
 * @method CommonPassationMarcheAVenirQuery orderByIdNatureActeJuridique($order = Criteria::ASC) Order by the id_nature_acte_juridique column
 * @method CommonPassationMarcheAVenirQuery orderByFormeGroupement($order = Criteria::ASC) Order by the forme_groupement column
 * @method CommonPassationMarcheAVenirQuery orderByVarianteAutorisee($order = Criteria::ASC) Order by the variante_autorisee column
 * @method CommonPassationMarcheAVenirQuery orderByVarianteTechniqueObligatoire($order = Criteria::ASC) Order by the variante_technique_obligatoire column
 * @method CommonPassationMarcheAVenirQuery orderByNombreVarianteTechnique($order = Criteria::ASC) Order by the nombre_variante_technique column
 * @method CommonPassationMarcheAVenirQuery orderByDescriptionVarianteTechnique($order = Criteria::ASC) Order by the description_variante_technique column
 * @method CommonPassationMarcheAVenirQuery orderByModeExecutionContrat($order = Criteria::ASC) Order by the mode_execution_contrat column
 * @method CommonPassationMarcheAVenirQuery orderByTypeBonCommande($order = Criteria::ASC) Order by the type_bon_commande column
 * @method CommonPassationMarcheAVenirQuery orderByMinBonCommande($order = Criteria::ASC) Order by the min_bon_commande column
 * @method CommonPassationMarcheAVenirQuery orderByMaxBonCommande($order = Criteria::ASC) Order by the max_bon_commande column
 * @method CommonPassationMarcheAVenirQuery orderByDureeExecutionMarcheHorsReconduction($order = Criteria::ASC) Order by the duree_execution_marche_hors_reconduction column
 * @method CommonPassationMarcheAVenirQuery orderByNombreReconduction($order = Criteria::ASC) Order by the nombre_reconduction column
 * @method CommonPassationMarcheAVenirQuery orderByDureeTotalMarche($order = Criteria::ASC) Order by the duree_total_marche column
 * @method CommonPassationMarcheAVenirQuery orderByCcagApplicable($order = Criteria::ASC) Order by the ccag_applicable column
 * @method CommonPassationMarcheAVenirQuery orderByMarcheTransversal($order = Criteria::ASC) Order by the marche_transversal column
 * @method CommonPassationMarcheAVenirQuery orderByDateReceptionAnalyseOffre($order = Criteria::ASC) Order by the date_reception_analyse_offre column
 * @method CommonPassationMarcheAVenirQuery orderByDateFormulationObservationProjetRapport($order = Criteria::ASC) Order by the date_formulation_observation_projet_rapport column
 * @method CommonPassationMarcheAVenirQuery orderByDateRetourProjetRapportFinalise($order = Criteria::ASC) Order by the date_retour_projet_rapport_finalise column
 * @method CommonPassationMarcheAVenirQuery orderByDateValidationProjetRapport($order = Criteria::ASC) Order by the date_validation_projet_rapport column
 * @method CommonPassationMarcheAVenirQuery orderByProjetRapportVuPar($order = Criteria::ASC) Order by the projet_rapport_vu_par column
 * @method CommonPassationMarcheAVenirQuery orderByDateReunionAttribution($order = Criteria::ASC) Order by the date_reunion_attribution column
 * @method CommonPassationMarcheAVenirQuery orderByDecision($order = Criteria::ASC) Order by the decision column
 * @method CommonPassationMarcheAVenirQuery orderByDateEnvoiCourrierCondidatNonRetenu($order = Criteria::ASC) Order by the date_envoi_courrier_condidat_non_retenu column
 * @method CommonPassationMarcheAVenirQuery orderByDateSignatureMarchePa($order = Criteria::ASC) Order by the date_signature_marche_pa column
 * @method CommonPassationMarcheAVenirQuery orderByDateReceptionControleLegalite($order = Criteria::ASC) Order by the date_reception_controle_legalite column
 * @method CommonPassationMarcheAVenirQuery orderByDateFormulationObservationDossier($order = Criteria::ASC) Order by the date_formulation_observation_dossier column
 * @method CommonPassationMarcheAVenirQuery orderByDateRetourDossierFinalise($order = Criteria::ASC) Order by the date_retour_dossier_finalise column
 * @method CommonPassationMarcheAVenirQuery orderByDateTransmissionPrefecture($order = Criteria::ASC) Order by the date_transmission_prefecture column
 * @method CommonPassationMarcheAVenirQuery orderByDossierVuPar($order = Criteria::ASC) Order by the dossier_vu_par column
 * @method CommonPassationMarcheAVenirQuery orderByDateValidationRapportInformation($order = Criteria::ASC) Order by the date_validation_rapport_information column
 * @method CommonPassationMarcheAVenirQuery orderByCommentaire($order = Criteria::ASC) Order by the commentaire column
 *
 * @method CommonPassationMarcheAVenirQuery groupById() Group by the id column
 * @method CommonPassationMarcheAVenirQuery groupByOrganisme() Group by the organisme column
 * @method CommonPassationMarcheAVenirQuery groupByIdPassationConsultation() Group by the id_passation_consultation column
 * @method CommonPassationMarcheAVenirQuery groupByLot() Group by the lot column
 * @method CommonPassationMarcheAVenirQuery groupByMontantEstime() Group by the montant_estime column
 * @method CommonPassationMarcheAVenirQuery groupByIdNatureActeJuridique() Group by the id_nature_acte_juridique column
 * @method CommonPassationMarcheAVenirQuery groupByFormeGroupement() Group by the forme_groupement column
 * @method CommonPassationMarcheAVenirQuery groupByVarianteAutorisee() Group by the variante_autorisee column
 * @method CommonPassationMarcheAVenirQuery groupByVarianteTechniqueObligatoire() Group by the variante_technique_obligatoire column
 * @method CommonPassationMarcheAVenirQuery groupByNombreVarianteTechnique() Group by the nombre_variante_technique column
 * @method CommonPassationMarcheAVenirQuery groupByDescriptionVarianteTechnique() Group by the description_variante_technique column
 * @method CommonPassationMarcheAVenirQuery groupByModeExecutionContrat() Group by the mode_execution_contrat column
 * @method CommonPassationMarcheAVenirQuery groupByTypeBonCommande() Group by the type_bon_commande column
 * @method CommonPassationMarcheAVenirQuery groupByMinBonCommande() Group by the min_bon_commande column
 * @method CommonPassationMarcheAVenirQuery groupByMaxBonCommande() Group by the max_bon_commande column
 * @method CommonPassationMarcheAVenirQuery groupByDureeExecutionMarcheHorsReconduction() Group by the duree_execution_marche_hors_reconduction column
 * @method CommonPassationMarcheAVenirQuery groupByNombreReconduction() Group by the nombre_reconduction column
 * @method CommonPassationMarcheAVenirQuery groupByDureeTotalMarche() Group by the duree_total_marche column
 * @method CommonPassationMarcheAVenirQuery groupByCcagApplicable() Group by the ccag_applicable column
 * @method CommonPassationMarcheAVenirQuery groupByMarcheTransversal() Group by the marche_transversal column
 * @method CommonPassationMarcheAVenirQuery groupByDateReceptionAnalyseOffre() Group by the date_reception_analyse_offre column
 * @method CommonPassationMarcheAVenirQuery groupByDateFormulationObservationProjetRapport() Group by the date_formulation_observation_projet_rapport column
 * @method CommonPassationMarcheAVenirQuery groupByDateRetourProjetRapportFinalise() Group by the date_retour_projet_rapport_finalise column
 * @method CommonPassationMarcheAVenirQuery groupByDateValidationProjetRapport() Group by the date_validation_projet_rapport column
 * @method CommonPassationMarcheAVenirQuery groupByProjetRapportVuPar() Group by the projet_rapport_vu_par column
 * @method CommonPassationMarcheAVenirQuery groupByDateReunionAttribution() Group by the date_reunion_attribution column
 * @method CommonPassationMarcheAVenirQuery groupByDecision() Group by the decision column
 * @method CommonPassationMarcheAVenirQuery groupByDateEnvoiCourrierCondidatNonRetenu() Group by the date_envoi_courrier_condidat_non_retenu column
 * @method CommonPassationMarcheAVenirQuery groupByDateSignatureMarchePa() Group by the date_signature_marche_pa column
 * @method CommonPassationMarcheAVenirQuery groupByDateReceptionControleLegalite() Group by the date_reception_controle_legalite column
 * @method CommonPassationMarcheAVenirQuery groupByDateFormulationObservationDossier() Group by the date_formulation_observation_dossier column
 * @method CommonPassationMarcheAVenirQuery groupByDateRetourDossierFinalise() Group by the date_retour_dossier_finalise column
 * @method CommonPassationMarcheAVenirQuery groupByDateTransmissionPrefecture() Group by the date_transmission_prefecture column
 * @method CommonPassationMarcheAVenirQuery groupByDossierVuPar() Group by the dossier_vu_par column
 * @method CommonPassationMarcheAVenirQuery groupByDateValidationRapportInformation() Group by the date_validation_rapport_information column
 * @method CommonPassationMarcheAVenirQuery groupByCommentaire() Group by the commentaire column
 *
 * @method CommonPassationMarcheAVenirQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonPassationMarcheAVenirQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonPassationMarcheAVenirQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonPassationMarcheAVenir findOne(PropelPDO $con = null) Return the first CommonPassationMarcheAVenir matching the query
 * @method CommonPassationMarcheAVenir findOneOrCreate(PropelPDO $con = null) Return the first CommonPassationMarcheAVenir matching the query, or a new CommonPassationMarcheAVenir object populated from the query conditions when no match is found
 *
 * @method CommonPassationMarcheAVenir findOneById(int $id) Return the first CommonPassationMarcheAVenir filtered by the id column
 * @method CommonPassationMarcheAVenir findOneByOrganisme(string $organisme) Return the first CommonPassationMarcheAVenir filtered by the organisme column
 * @method CommonPassationMarcheAVenir findOneByIdPassationConsultation(int $id_passation_consultation) Return the first CommonPassationMarcheAVenir filtered by the id_passation_consultation column
 * @method CommonPassationMarcheAVenir findOneByLot(int $lot) Return the first CommonPassationMarcheAVenir filtered by the lot column
 * @method CommonPassationMarcheAVenir findOneByMontantEstime(string $montant_estime) Return the first CommonPassationMarcheAVenir filtered by the montant_estime column
 * @method CommonPassationMarcheAVenir findOneByIdNatureActeJuridique(int $id_nature_acte_juridique) Return the first CommonPassationMarcheAVenir filtered by the id_nature_acte_juridique column
 * @method CommonPassationMarcheAVenir findOneByFormeGroupement(int $forme_groupement) Return the first CommonPassationMarcheAVenir filtered by the forme_groupement column
 * @method CommonPassationMarcheAVenir findOneByVarianteAutorisee(string $variante_autorisee) Return the first CommonPassationMarcheAVenir filtered by the variante_autorisee column
 * @method CommonPassationMarcheAVenir findOneByVarianteTechniqueObligatoire(string $variante_technique_obligatoire) Return the first CommonPassationMarcheAVenir filtered by the variante_technique_obligatoire column
 * @method CommonPassationMarcheAVenir findOneByNombreVarianteTechnique(int $nombre_variante_technique) Return the first CommonPassationMarcheAVenir filtered by the nombre_variante_technique column
 * @method CommonPassationMarcheAVenir findOneByDescriptionVarianteTechnique(string $description_variante_technique) Return the first CommonPassationMarcheAVenir filtered by the description_variante_technique column
 * @method CommonPassationMarcheAVenir findOneByModeExecutionContrat(int $mode_execution_contrat) Return the first CommonPassationMarcheAVenir filtered by the mode_execution_contrat column
 * @method CommonPassationMarcheAVenir findOneByTypeBonCommande(int $type_bon_commande) Return the first CommonPassationMarcheAVenir filtered by the type_bon_commande column
 * @method CommonPassationMarcheAVenir findOneByMinBonCommande(string $min_bon_commande) Return the first CommonPassationMarcheAVenir filtered by the min_bon_commande column
 * @method CommonPassationMarcheAVenir findOneByMaxBonCommande(string $max_bon_commande) Return the first CommonPassationMarcheAVenir filtered by the max_bon_commande column
 * @method CommonPassationMarcheAVenir findOneByDureeExecutionMarcheHorsReconduction(int $duree_execution_marche_hors_reconduction) Return the first CommonPassationMarcheAVenir filtered by the duree_execution_marche_hors_reconduction column
 * @method CommonPassationMarcheAVenir findOneByNombreReconduction(int $nombre_reconduction) Return the first CommonPassationMarcheAVenir filtered by the nombre_reconduction column
 * @method CommonPassationMarcheAVenir findOneByDureeTotalMarche(int $duree_total_marche) Return the first CommonPassationMarcheAVenir filtered by the duree_total_marche column
 * @method CommonPassationMarcheAVenir findOneByCcagApplicable(int $ccag_applicable) Return the first CommonPassationMarcheAVenir filtered by the ccag_applicable column
 * @method CommonPassationMarcheAVenir findOneByMarcheTransversal(string $marche_transversal) Return the first CommonPassationMarcheAVenir filtered by the marche_transversal column
 * @method CommonPassationMarcheAVenir findOneByDateReceptionAnalyseOffre(string $date_reception_analyse_offre) Return the first CommonPassationMarcheAVenir filtered by the date_reception_analyse_offre column
 * @method CommonPassationMarcheAVenir findOneByDateFormulationObservationProjetRapport(string $date_formulation_observation_projet_rapport) Return the first CommonPassationMarcheAVenir filtered by the date_formulation_observation_projet_rapport column
 * @method CommonPassationMarcheAVenir findOneByDateRetourProjetRapportFinalise(string $date_retour_projet_rapport_finalise) Return the first CommonPassationMarcheAVenir filtered by the date_retour_projet_rapport_finalise column
 * @method CommonPassationMarcheAVenir findOneByDateValidationProjetRapport(string $date_validation_projet_rapport) Return the first CommonPassationMarcheAVenir filtered by the date_validation_projet_rapport column
 * @method CommonPassationMarcheAVenir findOneByProjetRapportVuPar(int $projet_rapport_vu_par) Return the first CommonPassationMarcheAVenir filtered by the projet_rapport_vu_par column
 * @method CommonPassationMarcheAVenir findOneByDateReunionAttribution(string $date_reunion_attribution) Return the first CommonPassationMarcheAVenir filtered by the date_reunion_attribution column
 * @method CommonPassationMarcheAVenir findOneByDecision(int $decision) Return the first CommonPassationMarcheAVenir filtered by the decision column
 * @method CommonPassationMarcheAVenir findOneByDateEnvoiCourrierCondidatNonRetenu(string $date_envoi_courrier_condidat_non_retenu) Return the first CommonPassationMarcheAVenir filtered by the date_envoi_courrier_condidat_non_retenu column
 * @method CommonPassationMarcheAVenir findOneByDateSignatureMarchePa(string $date_signature_marche_pa) Return the first CommonPassationMarcheAVenir filtered by the date_signature_marche_pa column
 * @method CommonPassationMarcheAVenir findOneByDateReceptionControleLegalite(string $date_reception_controle_legalite) Return the first CommonPassationMarcheAVenir filtered by the date_reception_controle_legalite column
 * @method CommonPassationMarcheAVenir findOneByDateFormulationObservationDossier(string $date_formulation_observation_dossier) Return the first CommonPassationMarcheAVenir filtered by the date_formulation_observation_dossier column
 * @method CommonPassationMarcheAVenir findOneByDateRetourDossierFinalise(string $date_retour_dossier_finalise) Return the first CommonPassationMarcheAVenir filtered by the date_retour_dossier_finalise column
 * @method CommonPassationMarcheAVenir findOneByDateTransmissionPrefecture(string $date_transmission_prefecture) Return the first CommonPassationMarcheAVenir filtered by the date_transmission_prefecture column
 * @method CommonPassationMarcheAVenir findOneByDossierVuPar(int $dossier_vu_par) Return the first CommonPassationMarcheAVenir filtered by the dossier_vu_par column
 * @method CommonPassationMarcheAVenir findOneByDateValidationRapportInformation(string $date_validation_rapport_information) Return the first CommonPassationMarcheAVenir filtered by the date_validation_rapport_information column
 * @method CommonPassationMarcheAVenir findOneByCommentaire(string $commentaire) Return the first CommonPassationMarcheAVenir filtered by the commentaire column
 *
 * @method array findById(int $id) Return CommonPassationMarcheAVenir objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonPassationMarcheAVenir objects filtered by the organisme column
 * @method array findByIdPassationConsultation(int $id_passation_consultation) Return CommonPassationMarcheAVenir objects filtered by the id_passation_consultation column
 * @method array findByLot(int $lot) Return CommonPassationMarcheAVenir objects filtered by the lot column
 * @method array findByMontantEstime(string $montant_estime) Return CommonPassationMarcheAVenir objects filtered by the montant_estime column
 * @method array findByIdNatureActeJuridique(int $id_nature_acte_juridique) Return CommonPassationMarcheAVenir objects filtered by the id_nature_acte_juridique column
 * @method array findByFormeGroupement(int $forme_groupement) Return CommonPassationMarcheAVenir objects filtered by the forme_groupement column
 * @method array findByVarianteAutorisee(string $variante_autorisee) Return CommonPassationMarcheAVenir objects filtered by the variante_autorisee column
 * @method array findByVarianteTechniqueObligatoire(string $variante_technique_obligatoire) Return CommonPassationMarcheAVenir objects filtered by the variante_technique_obligatoire column
 * @method array findByNombreVarianteTechnique(int $nombre_variante_technique) Return CommonPassationMarcheAVenir objects filtered by the nombre_variante_technique column
 * @method array findByDescriptionVarianteTechnique(string $description_variante_technique) Return CommonPassationMarcheAVenir objects filtered by the description_variante_technique column
 * @method array findByModeExecutionContrat(int $mode_execution_contrat) Return CommonPassationMarcheAVenir objects filtered by the mode_execution_contrat column
 * @method array findByTypeBonCommande(int $type_bon_commande) Return CommonPassationMarcheAVenir objects filtered by the type_bon_commande column
 * @method array findByMinBonCommande(string $min_bon_commande) Return CommonPassationMarcheAVenir objects filtered by the min_bon_commande column
 * @method array findByMaxBonCommande(string $max_bon_commande) Return CommonPassationMarcheAVenir objects filtered by the max_bon_commande column
 * @method array findByDureeExecutionMarcheHorsReconduction(int $duree_execution_marche_hors_reconduction) Return CommonPassationMarcheAVenir objects filtered by the duree_execution_marche_hors_reconduction column
 * @method array findByNombreReconduction(int $nombre_reconduction) Return CommonPassationMarcheAVenir objects filtered by the nombre_reconduction column
 * @method array findByDureeTotalMarche(int $duree_total_marche) Return CommonPassationMarcheAVenir objects filtered by the duree_total_marche column
 * @method array findByCcagApplicable(int $ccag_applicable) Return CommonPassationMarcheAVenir objects filtered by the ccag_applicable column
 * @method array findByMarcheTransversal(string $marche_transversal) Return CommonPassationMarcheAVenir objects filtered by the marche_transversal column
 * @method array findByDateReceptionAnalyseOffre(string $date_reception_analyse_offre) Return CommonPassationMarcheAVenir objects filtered by the date_reception_analyse_offre column
 * @method array findByDateFormulationObservationProjetRapport(string $date_formulation_observation_projet_rapport) Return CommonPassationMarcheAVenir objects filtered by the date_formulation_observation_projet_rapport column
 * @method array findByDateRetourProjetRapportFinalise(string $date_retour_projet_rapport_finalise) Return CommonPassationMarcheAVenir objects filtered by the date_retour_projet_rapport_finalise column
 * @method array findByDateValidationProjetRapport(string $date_validation_projet_rapport) Return CommonPassationMarcheAVenir objects filtered by the date_validation_projet_rapport column
 * @method array findByProjetRapportVuPar(int $projet_rapport_vu_par) Return CommonPassationMarcheAVenir objects filtered by the projet_rapport_vu_par column
 * @method array findByDateReunionAttribution(string $date_reunion_attribution) Return CommonPassationMarcheAVenir objects filtered by the date_reunion_attribution column
 * @method array findByDecision(int $decision) Return CommonPassationMarcheAVenir objects filtered by the decision column
 * @method array findByDateEnvoiCourrierCondidatNonRetenu(string $date_envoi_courrier_condidat_non_retenu) Return CommonPassationMarcheAVenir objects filtered by the date_envoi_courrier_condidat_non_retenu column
 * @method array findByDateSignatureMarchePa(string $date_signature_marche_pa) Return CommonPassationMarcheAVenir objects filtered by the date_signature_marche_pa column
 * @method array findByDateReceptionControleLegalite(string $date_reception_controle_legalite) Return CommonPassationMarcheAVenir objects filtered by the date_reception_controle_legalite column
 * @method array findByDateFormulationObservationDossier(string $date_formulation_observation_dossier) Return CommonPassationMarcheAVenir objects filtered by the date_formulation_observation_dossier column
 * @method array findByDateRetourDossierFinalise(string $date_retour_dossier_finalise) Return CommonPassationMarcheAVenir objects filtered by the date_retour_dossier_finalise column
 * @method array findByDateTransmissionPrefecture(string $date_transmission_prefecture) Return CommonPassationMarcheAVenir objects filtered by the date_transmission_prefecture column
 * @method array findByDossierVuPar(int $dossier_vu_par) Return CommonPassationMarcheAVenir objects filtered by the dossier_vu_par column
 * @method array findByDateValidationRapportInformation(string $date_validation_rapport_information) Return CommonPassationMarcheAVenir objects filtered by the date_validation_rapport_information column
 * @method array findByCommentaire(string $commentaire) Return CommonPassationMarcheAVenir objects filtered by the commentaire column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonPassationMarcheAVenirQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonPassationMarcheAVenirQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonPassationMarcheAVenir', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonPassationMarcheAVenirQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonPassationMarcheAVenirQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonPassationMarcheAVenirQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonPassationMarcheAVenirQuery) {
            return $criteria;
        }
        $query = new CommonPassationMarcheAVenirQuery();
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
     * @return   CommonPassationMarcheAVenir|CommonPassationMarcheAVenir[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonPassationMarcheAVenirPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonPassationMarcheAVenirPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonPassationMarcheAVenir A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `id_passation_consultation`, `lot`, `montant_estime`, `id_nature_acte_juridique`, `forme_groupement`, `variante_autorisee`, `variante_technique_obligatoire`, `nombre_variante_technique`, `description_variante_technique`, `mode_execution_contrat`, `type_bon_commande`, `min_bon_commande`, `max_bon_commande`, `duree_execution_marche_hors_reconduction`, `nombre_reconduction`, `duree_total_marche`, `ccag_applicable`, `marche_transversal`, `date_reception_analyse_offre`, `date_formulation_observation_projet_rapport`, `date_retour_projet_rapport_finalise`, `date_validation_projet_rapport`, `projet_rapport_vu_par`, `date_reunion_attribution`, `decision`, `date_envoi_courrier_condidat_non_retenu`, `date_signature_marche_pa`, `date_reception_controle_legalite`, `date_formulation_observation_dossier`, `date_retour_dossier_finalise`, `date_transmission_prefecture`, `dossier_vu_par`, `date_validation_rapport_information`, `commentaire` FROM `passation_marche_a_venir` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonPassationMarcheAVenir();
            $obj->hydrate($row);
            CommonPassationMarcheAVenirPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonPassationMarcheAVenir|CommonPassationMarcheAVenir[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonPassationMarcheAVenir[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonPassationMarcheAVenirPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonPassationMarcheAVenirPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonPassationMarcheAVenirPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonPassationMarcheAVenirPeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonPassationMarcheAVenirPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonPassationMarcheAVenirPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPassationMarcheAVenirPeer::ID, $id, $comparison);
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
     * @return CommonPassationMarcheAVenirQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonPassationMarcheAVenirPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the id_passation_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPassationConsultation(1234); // WHERE id_passation_consultation = 1234
     * $query->filterByIdPassationConsultation(array(12, 34)); // WHERE id_passation_consultation IN (12, 34)
     * $query->filterByIdPassationConsultation(array('min' => 12)); // WHERE id_passation_consultation >= 12
     * $query->filterByIdPassationConsultation(array('max' => 12)); // WHERE id_passation_consultation <= 12
     * </code>
     *
     * @param     mixed $idPassationConsultation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterByIdPassationConsultation($idPassationConsultation = null, $comparison = null)
    {
        if (is_array($idPassationConsultation)) {
            $useMinMax = false;
            if (isset($idPassationConsultation['min'])) {
                $this->addUsingAlias(CommonPassationMarcheAVenirPeer::ID_PASSATION_CONSULTATION, $idPassationConsultation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idPassationConsultation['max'])) {
                $this->addUsingAlias(CommonPassationMarcheAVenirPeer::ID_PASSATION_CONSULTATION, $idPassationConsultation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPassationMarcheAVenirPeer::ID_PASSATION_CONSULTATION, $idPassationConsultation, $comparison);
    }

    /**
     * Filter the query on the lot column
     *
     * Example usage:
     * <code>
     * $query->filterByLot(1234); // WHERE lot = 1234
     * $query->filterByLot(array(12, 34)); // WHERE lot IN (12, 34)
     * $query->filterByLot(array('min' => 12)); // WHERE lot >= 12
     * $query->filterByLot(array('max' => 12)); // WHERE lot <= 12
     * </code>
     *
     * @param     mixed $lot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterByLot($lot = null, $comparison = null)
    {
        if (is_array($lot)) {
            $useMinMax = false;
            if (isset($lot['min'])) {
                $this->addUsingAlias(CommonPassationMarcheAVenirPeer::LOT, $lot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lot['max'])) {
                $this->addUsingAlias(CommonPassationMarcheAVenirPeer::LOT, $lot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPassationMarcheAVenirPeer::LOT, $lot, $comparison);
    }

    /**
     * Filter the query on the montant_estime column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantEstime('fooValue');   // WHERE montant_estime = 'fooValue'
     * $query->filterByMontantEstime('%fooValue%'); // WHERE montant_estime LIKE '%fooValue%'
     * </code>
     *
     * @param     string $montantEstime The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterByMontantEstime($montantEstime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($montantEstime)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $montantEstime)) {
                $montantEstime = str_replace('*', '%', $montantEstime);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPassationMarcheAVenirPeer::MONTANT_ESTIME, $montantEstime, $comparison);
    }

    /**
     * Filter the query on the id_nature_acte_juridique column
     *
     * Example usage:
     * <code>
     * $query->filterByIdNatureActeJuridique(1234); // WHERE id_nature_acte_juridique = 1234
     * $query->filterByIdNatureActeJuridique(array(12, 34)); // WHERE id_nature_acte_juridique IN (12, 34)
     * $query->filterByIdNatureActeJuridique(array('min' => 12)); // WHERE id_nature_acte_juridique >= 12
     * $query->filterByIdNatureActeJuridique(array('max' => 12)); // WHERE id_nature_acte_juridique <= 12
     * </code>
     *
     * @param     mixed $idNatureActeJuridique The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterByIdNatureActeJuridique($idNatureActeJuridique = null, $comparison = null)
    {
        if (is_array($idNatureActeJuridique)) {
            $useMinMax = false;
            if (isset($idNatureActeJuridique['min'])) {
                $this->addUsingAlias(CommonPassationMarcheAVenirPeer::ID_NATURE_ACTE_JURIDIQUE, $idNatureActeJuridique['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idNatureActeJuridique['max'])) {
                $this->addUsingAlias(CommonPassationMarcheAVenirPeer::ID_NATURE_ACTE_JURIDIQUE, $idNatureActeJuridique['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPassationMarcheAVenirPeer::ID_NATURE_ACTE_JURIDIQUE, $idNatureActeJuridique, $comparison);
    }

    /**
     * Filter the query on the forme_groupement column
     *
     * Example usage:
     * <code>
     * $query->filterByFormeGroupement(1234); // WHERE forme_groupement = 1234
     * $query->filterByFormeGroupement(array(12, 34)); // WHERE forme_groupement IN (12, 34)
     * $query->filterByFormeGroupement(array('min' => 12)); // WHERE forme_groupement >= 12
     * $query->filterByFormeGroupement(array('max' => 12)); // WHERE forme_groupement <= 12
     * </code>
     *
     * @param     mixed $formeGroupement The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterByFormeGroupement($formeGroupement = null, $comparison = null)
    {
        if (is_array($formeGroupement)) {
            $useMinMax = false;
            if (isset($formeGroupement['min'])) {
                $this->addUsingAlias(CommonPassationMarcheAVenirPeer::FORME_GROUPEMENT, $formeGroupement['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($formeGroupement['max'])) {
                $this->addUsingAlias(CommonPassationMarcheAVenirPeer::FORME_GROUPEMENT, $formeGroupement['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPassationMarcheAVenirPeer::FORME_GROUPEMENT, $formeGroupement, $comparison);
    }

    /**
     * Filter the query on the variante_autorisee column
     *
     * Example usage:
     * <code>
     * $query->filterByVarianteAutorisee('fooValue');   // WHERE variante_autorisee = 'fooValue'
     * $query->filterByVarianteAutorisee('%fooValue%'); // WHERE variante_autorisee LIKE '%fooValue%'
     * </code>
     *
     * @param     string $varianteAutorisee The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterByVarianteAutorisee($varianteAutorisee = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($varianteAutorisee)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $varianteAutorisee)) {
                $varianteAutorisee = str_replace('*', '%', $varianteAutorisee);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPassationMarcheAVenirPeer::VARIANTE_AUTORISEE, $varianteAutorisee, $comparison);
    }

    /**
     * Filter the query on the variante_technique_obligatoire column
     *
     * Example usage:
     * <code>
     * $query->filterByVarianteTechniqueObligatoire('fooValue');   // WHERE variante_technique_obligatoire = 'fooValue'
     * $query->filterByVarianteTechniqueObligatoire('%fooValue%'); // WHERE variante_technique_obligatoire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $varianteTechniqueObligatoire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterByVarianteTechniqueObligatoire($varianteTechniqueObligatoire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($varianteTechniqueObligatoire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $varianteTechniqueObligatoire)) {
                $varianteTechniqueObligatoire = str_replace('*', '%', $varianteTechniqueObligatoire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPassationMarcheAVenirPeer::VARIANTE_TECHNIQUE_OBLIGATOIRE, $varianteTechniqueObligatoire, $comparison);
    }

    /**
     * Filter the query on the nombre_variante_technique column
     *
     * Example usage:
     * <code>
     * $query->filterByNombreVarianteTechnique(1234); // WHERE nombre_variante_technique = 1234
     * $query->filterByNombreVarianteTechnique(array(12, 34)); // WHERE nombre_variante_technique IN (12, 34)
     * $query->filterByNombreVarianteTechnique(array('min' => 12)); // WHERE nombre_variante_technique >= 12
     * $query->filterByNombreVarianteTechnique(array('max' => 12)); // WHERE nombre_variante_technique <= 12
     * </code>
     *
     * @param     mixed $nombreVarianteTechnique The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterByNombreVarianteTechnique($nombreVarianteTechnique = null, $comparison = null)
    {
        if (is_array($nombreVarianteTechnique)) {
            $useMinMax = false;
            if (isset($nombreVarianteTechnique['min'])) {
                $this->addUsingAlias(CommonPassationMarcheAVenirPeer::NOMBRE_VARIANTE_TECHNIQUE, $nombreVarianteTechnique['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nombreVarianteTechnique['max'])) {
                $this->addUsingAlias(CommonPassationMarcheAVenirPeer::NOMBRE_VARIANTE_TECHNIQUE, $nombreVarianteTechnique['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPassationMarcheAVenirPeer::NOMBRE_VARIANTE_TECHNIQUE, $nombreVarianteTechnique, $comparison);
    }

    /**
     * Filter the query on the description_variante_technique column
     *
     * Example usage:
     * <code>
     * $query->filterByDescriptionVarianteTechnique('fooValue');   // WHERE description_variante_technique = 'fooValue'
     * $query->filterByDescriptionVarianteTechnique('%fooValue%'); // WHERE description_variante_technique LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descriptionVarianteTechnique The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterByDescriptionVarianteTechnique($descriptionVarianteTechnique = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descriptionVarianteTechnique)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descriptionVarianteTechnique)) {
                $descriptionVarianteTechnique = str_replace('*', '%', $descriptionVarianteTechnique);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPassationMarcheAVenirPeer::DESCRIPTION_VARIANTE_TECHNIQUE, $descriptionVarianteTechnique, $comparison);
    }

    /**
     * Filter the query on the mode_execution_contrat column
     *
     * Example usage:
     * <code>
     * $query->filterByModeExecutionContrat(1234); // WHERE mode_execution_contrat = 1234
     * $query->filterByModeExecutionContrat(array(12, 34)); // WHERE mode_execution_contrat IN (12, 34)
     * $query->filterByModeExecutionContrat(array('min' => 12)); // WHERE mode_execution_contrat >= 12
     * $query->filterByModeExecutionContrat(array('max' => 12)); // WHERE mode_execution_contrat <= 12
     * </code>
     *
     * @param     mixed $modeExecutionContrat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterByModeExecutionContrat($modeExecutionContrat = null, $comparison = null)
    {
        if (is_array($modeExecutionContrat)) {
            $useMinMax = false;
            if (isset($modeExecutionContrat['min'])) {
                $this->addUsingAlias(CommonPassationMarcheAVenirPeer::MODE_EXECUTION_CONTRAT, $modeExecutionContrat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($modeExecutionContrat['max'])) {
                $this->addUsingAlias(CommonPassationMarcheAVenirPeer::MODE_EXECUTION_CONTRAT, $modeExecutionContrat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPassationMarcheAVenirPeer::MODE_EXECUTION_CONTRAT, $modeExecutionContrat, $comparison);
    }

    /**
     * Filter the query on the type_bon_commande column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeBonCommande(1234); // WHERE type_bon_commande = 1234
     * $query->filterByTypeBonCommande(array(12, 34)); // WHERE type_bon_commande IN (12, 34)
     * $query->filterByTypeBonCommande(array('min' => 12)); // WHERE type_bon_commande >= 12
     * $query->filterByTypeBonCommande(array('max' => 12)); // WHERE type_bon_commande <= 12
     * </code>
     *
     * @param     mixed $typeBonCommande The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterByTypeBonCommande($typeBonCommande = null, $comparison = null)
    {
        if (is_array($typeBonCommande)) {
            $useMinMax = false;
            if (isset($typeBonCommande['min'])) {
                $this->addUsingAlias(CommonPassationMarcheAVenirPeer::TYPE_BON_COMMANDE, $typeBonCommande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeBonCommande['max'])) {
                $this->addUsingAlias(CommonPassationMarcheAVenirPeer::TYPE_BON_COMMANDE, $typeBonCommande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPassationMarcheAVenirPeer::TYPE_BON_COMMANDE, $typeBonCommande, $comparison);
    }

    /**
     * Filter the query on the min_bon_commande column
     *
     * Example usage:
     * <code>
     * $query->filterByMinBonCommande('fooValue');   // WHERE min_bon_commande = 'fooValue'
     * $query->filterByMinBonCommande('%fooValue%'); // WHERE min_bon_commande LIKE '%fooValue%'
     * </code>
     *
     * @param     string $minBonCommande The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterByMinBonCommande($minBonCommande = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($minBonCommande)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $minBonCommande)) {
                $minBonCommande = str_replace('*', '%', $minBonCommande);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPassationMarcheAVenirPeer::MIN_BON_COMMANDE, $minBonCommande, $comparison);
    }

    /**
     * Filter the query on the max_bon_commande column
     *
     * Example usage:
     * <code>
     * $query->filterByMaxBonCommande('fooValue');   // WHERE max_bon_commande = 'fooValue'
     * $query->filterByMaxBonCommande('%fooValue%'); // WHERE max_bon_commande LIKE '%fooValue%'
     * </code>
     *
     * @param     string $maxBonCommande The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterByMaxBonCommande($maxBonCommande = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($maxBonCommande)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $maxBonCommande)) {
                $maxBonCommande = str_replace('*', '%', $maxBonCommande);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPassationMarcheAVenirPeer::MAX_BON_COMMANDE, $maxBonCommande, $comparison);
    }

    /**
     * Filter the query on the duree_execution_marche_hors_reconduction column
     *
     * Example usage:
     * <code>
     * $query->filterByDureeExecutionMarcheHorsReconduction(1234); // WHERE duree_execution_marche_hors_reconduction = 1234
     * $query->filterByDureeExecutionMarcheHorsReconduction(array(12, 34)); // WHERE duree_execution_marche_hors_reconduction IN (12, 34)
     * $query->filterByDureeExecutionMarcheHorsReconduction(array('min' => 12)); // WHERE duree_execution_marche_hors_reconduction >= 12
     * $query->filterByDureeExecutionMarcheHorsReconduction(array('max' => 12)); // WHERE duree_execution_marche_hors_reconduction <= 12
     * </code>
     *
     * @param     mixed $dureeExecutionMarcheHorsReconduction The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterByDureeExecutionMarcheHorsReconduction($dureeExecutionMarcheHorsReconduction = null, $comparison = null)
    {
        if (is_array($dureeExecutionMarcheHorsReconduction)) {
            $useMinMax = false;
            if (isset($dureeExecutionMarcheHorsReconduction['min'])) {
                $this->addUsingAlias(CommonPassationMarcheAVenirPeer::DUREE_EXECUTION_MARCHE_HORS_RECONDUCTION, $dureeExecutionMarcheHorsReconduction['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dureeExecutionMarcheHorsReconduction['max'])) {
                $this->addUsingAlias(CommonPassationMarcheAVenirPeer::DUREE_EXECUTION_MARCHE_HORS_RECONDUCTION, $dureeExecutionMarcheHorsReconduction['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPassationMarcheAVenirPeer::DUREE_EXECUTION_MARCHE_HORS_RECONDUCTION, $dureeExecutionMarcheHorsReconduction, $comparison);
    }

    /**
     * Filter the query on the nombre_reconduction column
     *
     * Example usage:
     * <code>
     * $query->filterByNombreReconduction(1234); // WHERE nombre_reconduction = 1234
     * $query->filterByNombreReconduction(array(12, 34)); // WHERE nombre_reconduction IN (12, 34)
     * $query->filterByNombreReconduction(array('min' => 12)); // WHERE nombre_reconduction >= 12
     * $query->filterByNombreReconduction(array('max' => 12)); // WHERE nombre_reconduction <= 12
     * </code>
     *
     * @param     mixed $nombreReconduction The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterByNombreReconduction($nombreReconduction = null, $comparison = null)
    {
        if (is_array($nombreReconduction)) {
            $useMinMax = false;
            if (isset($nombreReconduction['min'])) {
                $this->addUsingAlias(CommonPassationMarcheAVenirPeer::NOMBRE_RECONDUCTION, $nombreReconduction['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nombreReconduction['max'])) {
                $this->addUsingAlias(CommonPassationMarcheAVenirPeer::NOMBRE_RECONDUCTION, $nombreReconduction['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPassationMarcheAVenirPeer::NOMBRE_RECONDUCTION, $nombreReconduction, $comparison);
    }

    /**
     * Filter the query on the duree_total_marche column
     *
     * Example usage:
     * <code>
     * $query->filterByDureeTotalMarche(1234); // WHERE duree_total_marche = 1234
     * $query->filterByDureeTotalMarche(array(12, 34)); // WHERE duree_total_marche IN (12, 34)
     * $query->filterByDureeTotalMarche(array('min' => 12)); // WHERE duree_total_marche >= 12
     * $query->filterByDureeTotalMarche(array('max' => 12)); // WHERE duree_total_marche <= 12
     * </code>
     *
     * @param     mixed $dureeTotalMarche The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterByDureeTotalMarche($dureeTotalMarche = null, $comparison = null)
    {
        if (is_array($dureeTotalMarche)) {
            $useMinMax = false;
            if (isset($dureeTotalMarche['min'])) {
                $this->addUsingAlias(CommonPassationMarcheAVenirPeer::DUREE_TOTAL_MARCHE, $dureeTotalMarche['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dureeTotalMarche['max'])) {
                $this->addUsingAlias(CommonPassationMarcheAVenirPeer::DUREE_TOTAL_MARCHE, $dureeTotalMarche['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPassationMarcheAVenirPeer::DUREE_TOTAL_MARCHE, $dureeTotalMarche, $comparison);
    }

    /**
     * Filter the query on the ccag_applicable column
     *
     * Example usage:
     * <code>
     * $query->filterByCcagApplicable(1234); // WHERE ccag_applicable = 1234
     * $query->filterByCcagApplicable(array(12, 34)); // WHERE ccag_applicable IN (12, 34)
     * $query->filterByCcagApplicable(array('min' => 12)); // WHERE ccag_applicable >= 12
     * $query->filterByCcagApplicable(array('max' => 12)); // WHERE ccag_applicable <= 12
     * </code>
     *
     * @param     mixed $ccagApplicable The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterByCcagApplicable($ccagApplicable = null, $comparison = null)
    {
        if (is_array($ccagApplicable)) {
            $useMinMax = false;
            if (isset($ccagApplicable['min'])) {
                $this->addUsingAlias(CommonPassationMarcheAVenirPeer::CCAG_APPLICABLE, $ccagApplicable['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ccagApplicable['max'])) {
                $this->addUsingAlias(CommonPassationMarcheAVenirPeer::CCAG_APPLICABLE, $ccagApplicable['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPassationMarcheAVenirPeer::CCAG_APPLICABLE, $ccagApplicable, $comparison);
    }

    /**
     * Filter the query on the marche_transversal column
     *
     * Example usage:
     * <code>
     * $query->filterByMarcheTransversal('fooValue');   // WHERE marche_transversal = 'fooValue'
     * $query->filterByMarcheTransversal('%fooValue%'); // WHERE marche_transversal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $marcheTransversal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterByMarcheTransversal($marcheTransversal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($marcheTransversal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $marcheTransversal)) {
                $marcheTransversal = str_replace('*', '%', $marcheTransversal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPassationMarcheAVenirPeer::MARCHE_TRANSVERSAL, $marcheTransversal, $comparison);
    }

    /**
     * Filter the query on the date_reception_analyse_offre column
     *
     * Example usage:
     * <code>
     * $query->filterByDateReceptionAnalyseOffre('fooValue');   // WHERE date_reception_analyse_offre = 'fooValue'
     * $query->filterByDateReceptionAnalyseOffre('%fooValue%'); // WHERE date_reception_analyse_offre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateReceptionAnalyseOffre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterByDateReceptionAnalyseOffre($dateReceptionAnalyseOffre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateReceptionAnalyseOffre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateReceptionAnalyseOffre)) {
                $dateReceptionAnalyseOffre = str_replace('*', '%', $dateReceptionAnalyseOffre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPassationMarcheAVenirPeer::DATE_RECEPTION_ANALYSE_OFFRE, $dateReceptionAnalyseOffre, $comparison);
    }

    /**
     * Filter the query on the date_formulation_observation_projet_rapport column
     *
     * Example usage:
     * <code>
     * $query->filterByDateFormulationObservationProjetRapport('fooValue');   // WHERE date_formulation_observation_projet_rapport = 'fooValue'
     * $query->filterByDateFormulationObservationProjetRapport('%fooValue%'); // WHERE date_formulation_observation_projet_rapport LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateFormulationObservationProjetRapport The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterByDateFormulationObservationProjetRapport($dateFormulationObservationProjetRapport = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateFormulationObservationProjetRapport)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateFormulationObservationProjetRapport)) {
                $dateFormulationObservationProjetRapport = str_replace('*', '%', $dateFormulationObservationProjetRapport);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPassationMarcheAVenirPeer::DATE_FORMULATION_OBSERVATION_PROJET_RAPPORT, $dateFormulationObservationProjetRapport, $comparison);
    }

    /**
     * Filter the query on the date_retour_projet_rapport_finalise column
     *
     * Example usage:
     * <code>
     * $query->filterByDateRetourProjetRapportFinalise('fooValue');   // WHERE date_retour_projet_rapport_finalise = 'fooValue'
     * $query->filterByDateRetourProjetRapportFinalise('%fooValue%'); // WHERE date_retour_projet_rapport_finalise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateRetourProjetRapportFinalise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterByDateRetourProjetRapportFinalise($dateRetourProjetRapportFinalise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateRetourProjetRapportFinalise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateRetourProjetRapportFinalise)) {
                $dateRetourProjetRapportFinalise = str_replace('*', '%', $dateRetourProjetRapportFinalise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPassationMarcheAVenirPeer::DATE_RETOUR_PROJET_RAPPORT_FINALISE, $dateRetourProjetRapportFinalise, $comparison);
    }

    /**
     * Filter the query on the date_validation_projet_rapport column
     *
     * Example usage:
     * <code>
     * $query->filterByDateValidationProjetRapport('fooValue');   // WHERE date_validation_projet_rapport = 'fooValue'
     * $query->filterByDateValidationProjetRapport('%fooValue%'); // WHERE date_validation_projet_rapport LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateValidationProjetRapport The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterByDateValidationProjetRapport($dateValidationProjetRapport = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateValidationProjetRapport)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateValidationProjetRapport)) {
                $dateValidationProjetRapport = str_replace('*', '%', $dateValidationProjetRapport);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPassationMarcheAVenirPeer::DATE_VALIDATION_PROJET_RAPPORT, $dateValidationProjetRapport, $comparison);
    }

    /**
     * Filter the query on the projet_rapport_vu_par column
     *
     * Example usage:
     * <code>
     * $query->filterByProjetRapportVuPar(1234); // WHERE projet_rapport_vu_par = 1234
     * $query->filterByProjetRapportVuPar(array(12, 34)); // WHERE projet_rapport_vu_par IN (12, 34)
     * $query->filterByProjetRapportVuPar(array('min' => 12)); // WHERE projet_rapport_vu_par >= 12
     * $query->filterByProjetRapportVuPar(array('max' => 12)); // WHERE projet_rapport_vu_par <= 12
     * </code>
     *
     * @param     mixed $projetRapportVuPar The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterByProjetRapportVuPar($projetRapportVuPar = null, $comparison = null)
    {
        if (is_array($projetRapportVuPar)) {
            $useMinMax = false;
            if (isset($projetRapportVuPar['min'])) {
                $this->addUsingAlias(CommonPassationMarcheAVenirPeer::PROJET_RAPPORT_VU_PAR, $projetRapportVuPar['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($projetRapportVuPar['max'])) {
                $this->addUsingAlias(CommonPassationMarcheAVenirPeer::PROJET_RAPPORT_VU_PAR, $projetRapportVuPar['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPassationMarcheAVenirPeer::PROJET_RAPPORT_VU_PAR, $projetRapportVuPar, $comparison);
    }

    /**
     * Filter the query on the date_reunion_attribution column
     *
     * Example usage:
     * <code>
     * $query->filterByDateReunionAttribution('fooValue');   // WHERE date_reunion_attribution = 'fooValue'
     * $query->filterByDateReunionAttribution('%fooValue%'); // WHERE date_reunion_attribution LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateReunionAttribution The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterByDateReunionAttribution($dateReunionAttribution = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateReunionAttribution)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateReunionAttribution)) {
                $dateReunionAttribution = str_replace('*', '%', $dateReunionAttribution);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPassationMarcheAVenirPeer::DATE_REUNION_ATTRIBUTION, $dateReunionAttribution, $comparison);
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
     * @return CommonPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterByDecision($decision = null, $comparison = null)
    {
        if (is_array($decision)) {
            $useMinMax = false;
            if (isset($decision['min'])) {
                $this->addUsingAlias(CommonPassationMarcheAVenirPeer::DECISION, $decision['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($decision['max'])) {
                $this->addUsingAlias(CommonPassationMarcheAVenirPeer::DECISION, $decision['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPassationMarcheAVenirPeer::DECISION, $decision, $comparison);
    }

    /**
     * Filter the query on the date_envoi_courrier_condidat_non_retenu column
     *
     * Example usage:
     * <code>
     * $query->filterByDateEnvoiCourrierCondidatNonRetenu('fooValue');   // WHERE date_envoi_courrier_condidat_non_retenu = 'fooValue'
     * $query->filterByDateEnvoiCourrierCondidatNonRetenu('%fooValue%'); // WHERE date_envoi_courrier_condidat_non_retenu LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateEnvoiCourrierCondidatNonRetenu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterByDateEnvoiCourrierCondidatNonRetenu($dateEnvoiCourrierCondidatNonRetenu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateEnvoiCourrierCondidatNonRetenu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateEnvoiCourrierCondidatNonRetenu)) {
                $dateEnvoiCourrierCondidatNonRetenu = str_replace('*', '%', $dateEnvoiCourrierCondidatNonRetenu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPassationMarcheAVenirPeer::DATE_ENVOI_COURRIER_CONDIDAT_NON_RETENU, $dateEnvoiCourrierCondidatNonRetenu, $comparison);
    }

    /**
     * Filter the query on the date_signature_marche_pa column
     *
     * Example usage:
     * <code>
     * $query->filterByDateSignatureMarchePa('fooValue');   // WHERE date_signature_marche_pa = 'fooValue'
     * $query->filterByDateSignatureMarchePa('%fooValue%'); // WHERE date_signature_marche_pa LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateSignatureMarchePa The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterByDateSignatureMarchePa($dateSignatureMarchePa = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateSignatureMarchePa)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateSignatureMarchePa)) {
                $dateSignatureMarchePa = str_replace('*', '%', $dateSignatureMarchePa);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPassationMarcheAVenirPeer::DATE_SIGNATURE_MARCHE_PA, $dateSignatureMarchePa, $comparison);
    }

    /**
     * Filter the query on the date_reception_controle_legalite column
     *
     * Example usage:
     * <code>
     * $query->filterByDateReceptionControleLegalite('fooValue');   // WHERE date_reception_controle_legalite = 'fooValue'
     * $query->filterByDateReceptionControleLegalite('%fooValue%'); // WHERE date_reception_controle_legalite LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateReceptionControleLegalite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterByDateReceptionControleLegalite($dateReceptionControleLegalite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateReceptionControleLegalite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateReceptionControleLegalite)) {
                $dateReceptionControleLegalite = str_replace('*', '%', $dateReceptionControleLegalite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPassationMarcheAVenirPeer::DATE_RECEPTION_CONTROLE_LEGALITE, $dateReceptionControleLegalite, $comparison);
    }

    /**
     * Filter the query on the date_formulation_observation_dossier column
     *
     * Example usage:
     * <code>
     * $query->filterByDateFormulationObservationDossier('fooValue');   // WHERE date_formulation_observation_dossier = 'fooValue'
     * $query->filterByDateFormulationObservationDossier('%fooValue%'); // WHERE date_formulation_observation_dossier LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateFormulationObservationDossier The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterByDateFormulationObservationDossier($dateFormulationObservationDossier = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateFormulationObservationDossier)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateFormulationObservationDossier)) {
                $dateFormulationObservationDossier = str_replace('*', '%', $dateFormulationObservationDossier);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPassationMarcheAVenirPeer::DATE_FORMULATION_OBSERVATION_DOSSIER, $dateFormulationObservationDossier, $comparison);
    }

    /**
     * Filter the query on the date_retour_dossier_finalise column
     *
     * Example usage:
     * <code>
     * $query->filterByDateRetourDossierFinalise('fooValue');   // WHERE date_retour_dossier_finalise = 'fooValue'
     * $query->filterByDateRetourDossierFinalise('%fooValue%'); // WHERE date_retour_dossier_finalise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateRetourDossierFinalise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterByDateRetourDossierFinalise($dateRetourDossierFinalise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateRetourDossierFinalise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateRetourDossierFinalise)) {
                $dateRetourDossierFinalise = str_replace('*', '%', $dateRetourDossierFinalise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPassationMarcheAVenirPeer::DATE_RETOUR_DOSSIER_FINALISE, $dateRetourDossierFinalise, $comparison);
    }

    /**
     * Filter the query on the date_transmission_prefecture column
     *
     * Example usage:
     * <code>
     * $query->filterByDateTransmissionPrefecture('fooValue');   // WHERE date_transmission_prefecture = 'fooValue'
     * $query->filterByDateTransmissionPrefecture('%fooValue%'); // WHERE date_transmission_prefecture LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateTransmissionPrefecture The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterByDateTransmissionPrefecture($dateTransmissionPrefecture = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateTransmissionPrefecture)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateTransmissionPrefecture)) {
                $dateTransmissionPrefecture = str_replace('*', '%', $dateTransmissionPrefecture);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPassationMarcheAVenirPeer::DATE_TRANSMISSION_PREFECTURE, $dateTransmissionPrefecture, $comparison);
    }

    /**
     * Filter the query on the dossier_vu_par column
     *
     * Example usage:
     * <code>
     * $query->filterByDossierVuPar(1234); // WHERE dossier_vu_par = 1234
     * $query->filterByDossierVuPar(array(12, 34)); // WHERE dossier_vu_par IN (12, 34)
     * $query->filterByDossierVuPar(array('min' => 12)); // WHERE dossier_vu_par >= 12
     * $query->filterByDossierVuPar(array('max' => 12)); // WHERE dossier_vu_par <= 12
     * </code>
     *
     * @param     mixed $dossierVuPar The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterByDossierVuPar($dossierVuPar = null, $comparison = null)
    {
        if (is_array($dossierVuPar)) {
            $useMinMax = false;
            if (isset($dossierVuPar['min'])) {
                $this->addUsingAlias(CommonPassationMarcheAVenirPeer::DOSSIER_VU_PAR, $dossierVuPar['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dossierVuPar['max'])) {
                $this->addUsingAlias(CommonPassationMarcheAVenirPeer::DOSSIER_VU_PAR, $dossierVuPar['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPassationMarcheAVenirPeer::DOSSIER_VU_PAR, $dossierVuPar, $comparison);
    }

    /**
     * Filter the query on the date_validation_rapport_information column
     *
     * Example usage:
     * <code>
     * $query->filterByDateValidationRapportInformation('fooValue');   // WHERE date_validation_rapport_information = 'fooValue'
     * $query->filterByDateValidationRapportInformation('%fooValue%'); // WHERE date_validation_rapport_information LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateValidationRapportInformation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterByDateValidationRapportInformation($dateValidationRapportInformation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateValidationRapportInformation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateValidationRapportInformation)) {
                $dateValidationRapportInformation = str_replace('*', '%', $dateValidationRapportInformation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPassationMarcheAVenirPeer::DATE_VALIDATION_RAPPORT_INFORMATION, $dateValidationRapportInformation, $comparison);
    }

    /**
     * Filter the query on the commentaire column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentaire('fooValue');   // WHERE commentaire = 'fooValue'
     * $query->filterByCommentaire('%fooValue%'); // WHERE commentaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commentaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterByCommentaire($commentaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commentaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commentaire)) {
                $commentaire = str_replace('*', '%', $commentaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPassationMarcheAVenirPeer::COMMENTAIRE, $commentaire, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonPassationMarcheAVenir $commonPassationMarcheAVenir Object to remove from the list of results
     *
     * @return CommonPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function prune($commonPassationMarcheAVenir = null)
    {
        if ($commonPassationMarcheAVenir) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonPassationMarcheAVenirPeer::ID), $commonPassationMarcheAVenir->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonPassationMarcheAVenirPeer::ORGANISME), $commonPassationMarcheAVenir->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
