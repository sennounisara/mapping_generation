<?php


/**
 * Base class that represents a query for the 'Avenant' table.
 *
 * 
 *
 * @method CommonAvenantQuery orderByIdAvenant($order = Criteria::ASC) Order by the id_avenant column
 * @method CommonAvenantQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonAvenantQuery orderByIdContrat($order = Criteria::ASC) Order by the id_contrat column
 * @method CommonAvenantQuery orderByNumeroAvenant($order = Criteria::ASC) Order by the numero_avenant column
 * @method CommonAvenantQuery orderByTypeAvenant($order = Criteria::ASC) Order by the type_avenant column
 * @method CommonAvenantQuery orderByObjetAvenant($order = Criteria::ASC) Order by the objet_avenant column
 * @method CommonAvenantQuery orderByMontantAvenantHt($order = Criteria::ASC) Order by the montant_avenant_ht column
 * @method CommonAvenantQuery orderByMontantAvenantTtc($order = Criteria::ASC) Order by the montant_avenant_ttc column
 * @method CommonAvenantQuery orderByPourcentageAugmentationMarcheInitial($order = Criteria::ASC) Order by the pourcentage_augmentation_marche_initial column
 * @method CommonAvenantQuery orderByPourcentageAugmentationCumule($order = Criteria::ASC) Order by the pourcentage_augmentation_cumule column
 * @method CommonAvenantQuery orderByMontantTotalMarcheToutAvenantCumule($order = Criteria::ASC) Order by the montant_total_marche_tout_avenant_cumule column
 * @method CommonAvenantQuery orderByDateReceptionProjetParSecretaireCao($order = Criteria::ASC) Order by the date_reception_projet_par_secretaire_cao column
 * @method CommonAvenantQuery orderByDateReceptionProjetParChargeEtude($order = Criteria::ASC) Order by the date_reception_projet_par_charge_etude column
 * @method CommonAvenantQuery orderByDateObservationParSv($order = Criteria::ASC) Order by the date_observation_par_sv column
 * @method CommonAvenantQuery orderByDateRetourProjet($order = Criteria::ASC) Order by the date_retour_projet column
 * @method CommonAvenantQuery orderByDateValidationProjet($order = Criteria::ASC) Order by the date_validation_projet column
 * @method CommonAvenantQuery orderByDateValidationProjetVuPar($order = Criteria::ASC) Order by the date_validation_projet_vu_par column
 * @method CommonAvenantQuery orderByDateCao($order = Criteria::ASC) Order by the date_cao column
 * @method CommonAvenantQuery orderByAvisCao($order = Criteria::ASC) Order by the avis_cao column
 * @method CommonAvenantQuery orderByDateCp($order = Criteria::ASC) Order by the date_cp column
 * @method CommonAvenantQuery orderByDateSignatureAvenant($order = Criteria::ASC) Order by the date_signature_avenant column
 * @method CommonAvenantQuery orderByDateReceptionDossier($order = Criteria::ASC) Order by the date_reception_dossier column
 * @method CommonAvenantQuery orderByDateFormulationObservationParSvSurSdossier($order = Criteria::ASC) Order by the date_formulation_observation_par_sv_sur_sdossier column
 * @method CommonAvenantQuery orderByDateRetourDossierFinalise($order = Criteria::ASC) Order by the date_retour_dossier_finalise column
 * @method CommonAvenantQuery orderByDateValidationDossierFinalise($order = Criteria::ASC) Order by the date_validation_dossier_finalise column
 * @method CommonAvenantQuery orderByDateTransmissionPrefecture($order = Criteria::ASC) Order by the date_transmission_prefecture column
 * @method CommonAvenantQuery orderByDateNotification($order = Criteria::ASC) Order by the date_notification column
 * @method CommonAvenantQuery orderByOperationValidationVuesPar($order = Criteria::ASC) Order by the operation_validation_vues_par column
 * @method CommonAvenantQuery orderByCommentaires($order = Criteria::ASC) Order by the commentaires column
 *
 * @method CommonAvenantQuery groupByIdAvenant() Group by the id_avenant column
 * @method CommonAvenantQuery groupByOrganisme() Group by the organisme column
 * @method CommonAvenantQuery groupByIdContrat() Group by the id_contrat column
 * @method CommonAvenantQuery groupByNumeroAvenant() Group by the numero_avenant column
 * @method CommonAvenantQuery groupByTypeAvenant() Group by the type_avenant column
 * @method CommonAvenantQuery groupByObjetAvenant() Group by the objet_avenant column
 * @method CommonAvenantQuery groupByMontantAvenantHt() Group by the montant_avenant_ht column
 * @method CommonAvenantQuery groupByMontantAvenantTtc() Group by the montant_avenant_ttc column
 * @method CommonAvenantQuery groupByPourcentageAugmentationMarcheInitial() Group by the pourcentage_augmentation_marche_initial column
 * @method CommonAvenantQuery groupByPourcentageAugmentationCumule() Group by the pourcentage_augmentation_cumule column
 * @method CommonAvenantQuery groupByMontantTotalMarcheToutAvenantCumule() Group by the montant_total_marche_tout_avenant_cumule column
 * @method CommonAvenantQuery groupByDateReceptionProjetParSecretaireCao() Group by the date_reception_projet_par_secretaire_cao column
 * @method CommonAvenantQuery groupByDateReceptionProjetParChargeEtude() Group by the date_reception_projet_par_charge_etude column
 * @method CommonAvenantQuery groupByDateObservationParSv() Group by the date_observation_par_sv column
 * @method CommonAvenantQuery groupByDateRetourProjet() Group by the date_retour_projet column
 * @method CommonAvenantQuery groupByDateValidationProjet() Group by the date_validation_projet column
 * @method CommonAvenantQuery groupByDateValidationProjetVuPar() Group by the date_validation_projet_vu_par column
 * @method CommonAvenantQuery groupByDateCao() Group by the date_cao column
 * @method CommonAvenantQuery groupByAvisCao() Group by the avis_cao column
 * @method CommonAvenantQuery groupByDateCp() Group by the date_cp column
 * @method CommonAvenantQuery groupByDateSignatureAvenant() Group by the date_signature_avenant column
 * @method CommonAvenantQuery groupByDateReceptionDossier() Group by the date_reception_dossier column
 * @method CommonAvenantQuery groupByDateFormulationObservationParSvSurSdossier() Group by the date_formulation_observation_par_sv_sur_sdossier column
 * @method CommonAvenantQuery groupByDateRetourDossierFinalise() Group by the date_retour_dossier_finalise column
 * @method CommonAvenantQuery groupByDateValidationDossierFinalise() Group by the date_validation_dossier_finalise column
 * @method CommonAvenantQuery groupByDateTransmissionPrefecture() Group by the date_transmission_prefecture column
 * @method CommonAvenantQuery groupByDateNotification() Group by the date_notification column
 * @method CommonAvenantQuery groupByOperationValidationVuesPar() Group by the operation_validation_vues_par column
 * @method CommonAvenantQuery groupByCommentaires() Group by the commentaires column
 *
 * @method CommonAvenantQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonAvenantQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonAvenantQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonAvenant findOne(PropelPDO $con = null) Return the first CommonAvenant matching the query
 * @method CommonAvenant findOneOrCreate(PropelPDO $con = null) Return the first CommonAvenant matching the query, or a new CommonAvenant object populated from the query conditions when no match is found
 *
 * @method CommonAvenant findOneByIdAvenant(int $id_avenant) Return the first CommonAvenant filtered by the id_avenant column
 * @method CommonAvenant findOneByOrganisme(string $organisme) Return the first CommonAvenant filtered by the organisme column
 * @method CommonAvenant findOneByIdContrat(int $id_contrat) Return the first CommonAvenant filtered by the id_contrat column
 * @method CommonAvenant findOneByNumeroAvenant(string $numero_avenant) Return the first CommonAvenant filtered by the numero_avenant column
 * @method CommonAvenant findOneByTypeAvenant(int $type_avenant) Return the first CommonAvenant filtered by the type_avenant column
 * @method CommonAvenant findOneByObjetAvenant(string $objet_avenant) Return the first CommonAvenant filtered by the objet_avenant column
 * @method CommonAvenant findOneByMontantAvenantHt(string $montant_avenant_ht) Return the first CommonAvenant filtered by the montant_avenant_ht column
 * @method CommonAvenant findOneByMontantAvenantTtc(string $montant_avenant_ttc) Return the first CommonAvenant filtered by the montant_avenant_ttc column
 * @method CommonAvenant findOneByPourcentageAugmentationMarcheInitial(string $pourcentage_augmentation_marche_initial) Return the first CommonAvenant filtered by the pourcentage_augmentation_marche_initial column
 * @method CommonAvenant findOneByPourcentageAugmentationCumule(string $pourcentage_augmentation_cumule) Return the first CommonAvenant filtered by the pourcentage_augmentation_cumule column
 * @method CommonAvenant findOneByMontantTotalMarcheToutAvenantCumule(string $montant_total_marche_tout_avenant_cumule) Return the first CommonAvenant filtered by the montant_total_marche_tout_avenant_cumule column
 * @method CommonAvenant findOneByDateReceptionProjetParSecretaireCao(string $date_reception_projet_par_secretaire_cao) Return the first CommonAvenant filtered by the date_reception_projet_par_secretaire_cao column
 * @method CommonAvenant findOneByDateReceptionProjetParChargeEtude(string $date_reception_projet_par_charge_etude) Return the first CommonAvenant filtered by the date_reception_projet_par_charge_etude column
 * @method CommonAvenant findOneByDateObservationParSv(string $date_observation_par_sv) Return the first CommonAvenant filtered by the date_observation_par_sv column
 * @method CommonAvenant findOneByDateRetourProjet(string $date_retour_projet) Return the first CommonAvenant filtered by the date_retour_projet column
 * @method CommonAvenant findOneByDateValidationProjet(string $date_validation_projet) Return the first CommonAvenant filtered by the date_validation_projet column
 * @method CommonAvenant findOneByDateValidationProjetVuPar(int $date_validation_projet_vu_par) Return the first CommonAvenant filtered by the date_validation_projet_vu_par column
 * @method CommonAvenant findOneByDateCao(string $date_cao) Return the first CommonAvenant filtered by the date_cao column
 * @method CommonAvenant findOneByAvisCao(int $avis_cao) Return the first CommonAvenant filtered by the avis_cao column
 * @method CommonAvenant findOneByDateCp(string $date_cp) Return the first CommonAvenant filtered by the date_cp column
 * @method CommonAvenant findOneByDateSignatureAvenant(string $date_signature_avenant) Return the first CommonAvenant filtered by the date_signature_avenant column
 * @method CommonAvenant findOneByDateReceptionDossier(string $date_reception_dossier) Return the first CommonAvenant filtered by the date_reception_dossier column
 * @method CommonAvenant findOneByDateFormulationObservationParSvSurSdossier(string $date_formulation_observation_par_sv_sur_sdossier) Return the first CommonAvenant filtered by the date_formulation_observation_par_sv_sur_sdossier column
 * @method CommonAvenant findOneByDateRetourDossierFinalise(string $date_retour_dossier_finalise) Return the first CommonAvenant filtered by the date_retour_dossier_finalise column
 * @method CommonAvenant findOneByDateValidationDossierFinalise(string $date_validation_dossier_finalise) Return the first CommonAvenant filtered by the date_validation_dossier_finalise column
 * @method CommonAvenant findOneByDateTransmissionPrefecture(string $date_transmission_prefecture) Return the first CommonAvenant filtered by the date_transmission_prefecture column
 * @method CommonAvenant findOneByDateNotification(string $date_notification) Return the first CommonAvenant filtered by the date_notification column
 * @method CommonAvenant findOneByOperationValidationVuesPar(int $operation_validation_vues_par) Return the first CommonAvenant filtered by the operation_validation_vues_par column
 * @method CommonAvenant findOneByCommentaires(string $commentaires) Return the first CommonAvenant filtered by the commentaires column
 *
 * @method array findByIdAvenant(int $id_avenant) Return CommonAvenant objects filtered by the id_avenant column
 * @method array findByOrganisme(string $organisme) Return CommonAvenant objects filtered by the organisme column
 * @method array findByIdContrat(int $id_contrat) Return CommonAvenant objects filtered by the id_contrat column
 * @method array findByNumeroAvenant(string $numero_avenant) Return CommonAvenant objects filtered by the numero_avenant column
 * @method array findByTypeAvenant(int $type_avenant) Return CommonAvenant objects filtered by the type_avenant column
 * @method array findByObjetAvenant(string $objet_avenant) Return CommonAvenant objects filtered by the objet_avenant column
 * @method array findByMontantAvenantHt(string $montant_avenant_ht) Return CommonAvenant objects filtered by the montant_avenant_ht column
 * @method array findByMontantAvenantTtc(string $montant_avenant_ttc) Return CommonAvenant objects filtered by the montant_avenant_ttc column
 * @method array findByPourcentageAugmentationMarcheInitial(string $pourcentage_augmentation_marche_initial) Return CommonAvenant objects filtered by the pourcentage_augmentation_marche_initial column
 * @method array findByPourcentageAugmentationCumule(string $pourcentage_augmentation_cumule) Return CommonAvenant objects filtered by the pourcentage_augmentation_cumule column
 * @method array findByMontantTotalMarcheToutAvenantCumule(string $montant_total_marche_tout_avenant_cumule) Return CommonAvenant objects filtered by the montant_total_marche_tout_avenant_cumule column
 * @method array findByDateReceptionProjetParSecretaireCao(string $date_reception_projet_par_secretaire_cao) Return CommonAvenant objects filtered by the date_reception_projet_par_secretaire_cao column
 * @method array findByDateReceptionProjetParChargeEtude(string $date_reception_projet_par_charge_etude) Return CommonAvenant objects filtered by the date_reception_projet_par_charge_etude column
 * @method array findByDateObservationParSv(string $date_observation_par_sv) Return CommonAvenant objects filtered by the date_observation_par_sv column
 * @method array findByDateRetourProjet(string $date_retour_projet) Return CommonAvenant objects filtered by the date_retour_projet column
 * @method array findByDateValidationProjet(string $date_validation_projet) Return CommonAvenant objects filtered by the date_validation_projet column
 * @method array findByDateValidationProjetVuPar(int $date_validation_projet_vu_par) Return CommonAvenant objects filtered by the date_validation_projet_vu_par column
 * @method array findByDateCao(string $date_cao) Return CommonAvenant objects filtered by the date_cao column
 * @method array findByAvisCao(int $avis_cao) Return CommonAvenant objects filtered by the avis_cao column
 * @method array findByDateCp(string $date_cp) Return CommonAvenant objects filtered by the date_cp column
 * @method array findByDateSignatureAvenant(string $date_signature_avenant) Return CommonAvenant objects filtered by the date_signature_avenant column
 * @method array findByDateReceptionDossier(string $date_reception_dossier) Return CommonAvenant objects filtered by the date_reception_dossier column
 * @method array findByDateFormulationObservationParSvSurSdossier(string $date_formulation_observation_par_sv_sur_sdossier) Return CommonAvenant objects filtered by the date_formulation_observation_par_sv_sur_sdossier column
 * @method array findByDateRetourDossierFinalise(string $date_retour_dossier_finalise) Return CommonAvenant objects filtered by the date_retour_dossier_finalise column
 * @method array findByDateValidationDossierFinalise(string $date_validation_dossier_finalise) Return CommonAvenant objects filtered by the date_validation_dossier_finalise column
 * @method array findByDateTransmissionPrefecture(string $date_transmission_prefecture) Return CommonAvenant objects filtered by the date_transmission_prefecture column
 * @method array findByDateNotification(string $date_notification) Return CommonAvenant objects filtered by the date_notification column
 * @method array findByOperationValidationVuesPar(int $operation_validation_vues_par) Return CommonAvenant objects filtered by the operation_validation_vues_par column
 * @method array findByCommentaires(string $commentaires) Return CommonAvenant objects filtered by the commentaires column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonAvenantQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonAvenantQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonAvenant', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonAvenantQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonAvenantQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonAvenantQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonAvenantQuery) {
            return $criteria;
        }
        $query = new CommonAvenantQuery();
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
                         A Primary key composition: [$id_avenant, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonAvenant|CommonAvenant[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonAvenantPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonAvenantPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonAvenant A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_avenant`, `organisme`, `id_contrat`, `numero_avenant`, `type_avenant`, `objet_avenant`, `montant_avenant_ht`, `montant_avenant_ttc`, `pourcentage_augmentation_marche_initial`, `pourcentage_augmentation_cumule`, `montant_total_marche_tout_avenant_cumule`, `date_reception_projet_par_secretaire_cao`, `date_reception_projet_par_charge_etude`, `date_observation_par_sv`, `date_retour_projet`, `date_validation_projet`, `date_validation_projet_vu_par`, `date_cao`, `avis_cao`, `date_cp`, `date_signature_avenant`, `date_reception_dossier`, `date_formulation_observation_par_sv_sur_sdossier`, `date_retour_dossier_finalise`, `date_validation_dossier_finalise`, `date_transmission_prefecture`, `date_notification`, `operation_validation_vues_par`, `commentaires` FROM `Avenant` WHERE `id_avenant` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonAvenant();
            $obj->hydrate($row);
            CommonAvenantPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonAvenant|CommonAvenant[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonAvenant[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonAvenantQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonAvenantPeer::ID_AVENANT, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonAvenantPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonAvenantQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonAvenantPeer::ID_AVENANT, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonAvenantPeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the id_avenant column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAvenant(1234); // WHERE id_avenant = 1234
     * $query->filterByIdAvenant(array(12, 34)); // WHERE id_avenant IN (12, 34)
     * $query->filterByIdAvenant(array('min' => 12)); // WHERE id_avenant >= 12
     * $query->filterByIdAvenant(array('max' => 12)); // WHERE id_avenant <= 12
     * </code>
     *
     * @param     mixed $idAvenant The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvenantQuery The current query, for fluid interface
     */
    public function filterByIdAvenant($idAvenant = null, $comparison = null)
    {
        if (is_array($idAvenant)) {
            $useMinMax = false;
            if (isset($idAvenant['min'])) {
                $this->addUsingAlias(CommonAvenantPeer::ID_AVENANT, $idAvenant['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAvenant['max'])) {
                $this->addUsingAlias(CommonAvenantPeer::ID_AVENANT, $idAvenant['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAvenantPeer::ID_AVENANT, $idAvenant, $comparison);
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
     * @return CommonAvenantQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonAvenantPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the id_contrat column
     *
     * Example usage:
     * <code>
     * $query->filterByIdContrat(1234); // WHERE id_contrat = 1234
     * $query->filterByIdContrat(array(12, 34)); // WHERE id_contrat IN (12, 34)
     * $query->filterByIdContrat(array('min' => 12)); // WHERE id_contrat >= 12
     * $query->filterByIdContrat(array('max' => 12)); // WHERE id_contrat <= 12
     * </code>
     *
     * @param     mixed $idContrat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvenantQuery The current query, for fluid interface
     */
    public function filterByIdContrat($idContrat = null, $comparison = null)
    {
        if (is_array($idContrat)) {
            $useMinMax = false;
            if (isset($idContrat['min'])) {
                $this->addUsingAlias(CommonAvenantPeer::ID_CONTRAT, $idContrat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idContrat['max'])) {
                $this->addUsingAlias(CommonAvenantPeer::ID_CONTRAT, $idContrat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAvenantPeer::ID_CONTRAT, $idContrat, $comparison);
    }

    /**
     * Filter the query on the numero_avenant column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeroAvenant('fooValue');   // WHERE numero_avenant = 'fooValue'
     * $query->filterByNumeroAvenant('%fooValue%'); // WHERE numero_avenant LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numeroAvenant The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvenantQuery The current query, for fluid interface
     */
    public function filterByNumeroAvenant($numeroAvenant = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numeroAvenant)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numeroAvenant)) {
                $numeroAvenant = str_replace('*', '%', $numeroAvenant);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAvenantPeer::NUMERO_AVENANT, $numeroAvenant, $comparison);
    }

    /**
     * Filter the query on the type_avenant column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeAvenant(1234); // WHERE type_avenant = 1234
     * $query->filterByTypeAvenant(array(12, 34)); // WHERE type_avenant IN (12, 34)
     * $query->filterByTypeAvenant(array('min' => 12)); // WHERE type_avenant >= 12
     * $query->filterByTypeAvenant(array('max' => 12)); // WHERE type_avenant <= 12
     * </code>
     *
     * @param     mixed $typeAvenant The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvenantQuery The current query, for fluid interface
     */
    public function filterByTypeAvenant($typeAvenant = null, $comparison = null)
    {
        if (is_array($typeAvenant)) {
            $useMinMax = false;
            if (isset($typeAvenant['min'])) {
                $this->addUsingAlias(CommonAvenantPeer::TYPE_AVENANT, $typeAvenant['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeAvenant['max'])) {
                $this->addUsingAlias(CommonAvenantPeer::TYPE_AVENANT, $typeAvenant['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAvenantPeer::TYPE_AVENANT, $typeAvenant, $comparison);
    }

    /**
     * Filter the query on the objet_avenant column
     *
     * Example usage:
     * <code>
     * $query->filterByObjetAvenant('fooValue');   // WHERE objet_avenant = 'fooValue'
     * $query->filterByObjetAvenant('%fooValue%'); // WHERE objet_avenant LIKE '%fooValue%'
     * </code>
     *
     * @param     string $objetAvenant The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvenantQuery The current query, for fluid interface
     */
    public function filterByObjetAvenant($objetAvenant = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($objetAvenant)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $objetAvenant)) {
                $objetAvenant = str_replace('*', '%', $objetAvenant);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAvenantPeer::OBJET_AVENANT, $objetAvenant, $comparison);
    }

    /**
     * Filter the query on the montant_avenant_ht column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantAvenantHt('fooValue');   // WHERE montant_avenant_ht = 'fooValue'
     * $query->filterByMontantAvenantHt('%fooValue%'); // WHERE montant_avenant_ht LIKE '%fooValue%'
     * </code>
     *
     * @param     string $montantAvenantHt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvenantQuery The current query, for fluid interface
     */
    public function filterByMontantAvenantHt($montantAvenantHt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($montantAvenantHt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $montantAvenantHt)) {
                $montantAvenantHt = str_replace('*', '%', $montantAvenantHt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAvenantPeer::MONTANT_AVENANT_HT, $montantAvenantHt, $comparison);
    }

    /**
     * Filter the query on the montant_avenant_ttc column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantAvenantTtc('fooValue');   // WHERE montant_avenant_ttc = 'fooValue'
     * $query->filterByMontantAvenantTtc('%fooValue%'); // WHERE montant_avenant_ttc LIKE '%fooValue%'
     * </code>
     *
     * @param     string $montantAvenantTtc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvenantQuery The current query, for fluid interface
     */
    public function filterByMontantAvenantTtc($montantAvenantTtc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($montantAvenantTtc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $montantAvenantTtc)) {
                $montantAvenantTtc = str_replace('*', '%', $montantAvenantTtc);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAvenantPeer::MONTANT_AVENANT_TTC, $montantAvenantTtc, $comparison);
    }

    /**
     * Filter the query on the pourcentage_augmentation_marche_initial column
     *
     * Example usage:
     * <code>
     * $query->filterByPourcentageAugmentationMarcheInitial('fooValue');   // WHERE pourcentage_augmentation_marche_initial = 'fooValue'
     * $query->filterByPourcentageAugmentationMarcheInitial('%fooValue%'); // WHERE pourcentage_augmentation_marche_initial LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pourcentageAugmentationMarcheInitial The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvenantQuery The current query, for fluid interface
     */
    public function filterByPourcentageAugmentationMarcheInitial($pourcentageAugmentationMarcheInitial = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pourcentageAugmentationMarcheInitial)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pourcentageAugmentationMarcheInitial)) {
                $pourcentageAugmentationMarcheInitial = str_replace('*', '%', $pourcentageAugmentationMarcheInitial);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAvenantPeer::POURCENTAGE_AUGMENTATION_MARCHE_INITIAL, $pourcentageAugmentationMarcheInitial, $comparison);
    }

    /**
     * Filter the query on the pourcentage_augmentation_cumule column
     *
     * Example usage:
     * <code>
     * $query->filterByPourcentageAugmentationCumule('fooValue');   // WHERE pourcentage_augmentation_cumule = 'fooValue'
     * $query->filterByPourcentageAugmentationCumule('%fooValue%'); // WHERE pourcentage_augmentation_cumule LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pourcentageAugmentationCumule The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvenantQuery The current query, for fluid interface
     */
    public function filterByPourcentageAugmentationCumule($pourcentageAugmentationCumule = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pourcentageAugmentationCumule)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pourcentageAugmentationCumule)) {
                $pourcentageAugmentationCumule = str_replace('*', '%', $pourcentageAugmentationCumule);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAvenantPeer::POURCENTAGE_AUGMENTATION_CUMULE, $pourcentageAugmentationCumule, $comparison);
    }

    /**
     * Filter the query on the montant_total_marche_tout_avenant_cumule column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantTotalMarcheToutAvenantCumule('fooValue');   // WHERE montant_total_marche_tout_avenant_cumule = 'fooValue'
     * $query->filterByMontantTotalMarcheToutAvenantCumule('%fooValue%'); // WHERE montant_total_marche_tout_avenant_cumule LIKE '%fooValue%'
     * </code>
     *
     * @param     string $montantTotalMarcheToutAvenantCumule The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvenantQuery The current query, for fluid interface
     */
    public function filterByMontantTotalMarcheToutAvenantCumule($montantTotalMarcheToutAvenantCumule = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($montantTotalMarcheToutAvenantCumule)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $montantTotalMarcheToutAvenantCumule)) {
                $montantTotalMarcheToutAvenantCumule = str_replace('*', '%', $montantTotalMarcheToutAvenantCumule);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAvenantPeer::MONTANT_TOTAL_MARCHE_TOUT_AVENANT_CUMULE, $montantTotalMarcheToutAvenantCumule, $comparison);
    }

    /**
     * Filter the query on the date_reception_projet_par_secretaire_cao column
     *
     * Example usage:
     * <code>
     * $query->filterByDateReceptionProjetParSecretaireCao('fooValue');   // WHERE date_reception_projet_par_secretaire_cao = 'fooValue'
     * $query->filterByDateReceptionProjetParSecretaireCao('%fooValue%'); // WHERE date_reception_projet_par_secretaire_cao LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateReceptionProjetParSecretaireCao The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvenantQuery The current query, for fluid interface
     */
    public function filterByDateReceptionProjetParSecretaireCao($dateReceptionProjetParSecretaireCao = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateReceptionProjetParSecretaireCao)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateReceptionProjetParSecretaireCao)) {
                $dateReceptionProjetParSecretaireCao = str_replace('*', '%', $dateReceptionProjetParSecretaireCao);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAvenantPeer::DATE_RECEPTION_PROJET_PAR_SECRETAIRE_CAO, $dateReceptionProjetParSecretaireCao, $comparison);
    }

    /**
     * Filter the query on the date_reception_projet_par_charge_etude column
     *
     * Example usage:
     * <code>
     * $query->filterByDateReceptionProjetParChargeEtude('fooValue');   // WHERE date_reception_projet_par_charge_etude = 'fooValue'
     * $query->filterByDateReceptionProjetParChargeEtude('%fooValue%'); // WHERE date_reception_projet_par_charge_etude LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateReceptionProjetParChargeEtude The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvenantQuery The current query, for fluid interface
     */
    public function filterByDateReceptionProjetParChargeEtude($dateReceptionProjetParChargeEtude = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateReceptionProjetParChargeEtude)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateReceptionProjetParChargeEtude)) {
                $dateReceptionProjetParChargeEtude = str_replace('*', '%', $dateReceptionProjetParChargeEtude);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAvenantPeer::DATE_RECEPTION_PROJET_PAR_CHARGE_ETUDE, $dateReceptionProjetParChargeEtude, $comparison);
    }

    /**
     * Filter the query on the date_observation_par_sv column
     *
     * Example usage:
     * <code>
     * $query->filterByDateObservationParSv('fooValue');   // WHERE date_observation_par_sv = 'fooValue'
     * $query->filterByDateObservationParSv('%fooValue%'); // WHERE date_observation_par_sv LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateObservationParSv The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvenantQuery The current query, for fluid interface
     */
    public function filterByDateObservationParSv($dateObservationParSv = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateObservationParSv)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateObservationParSv)) {
                $dateObservationParSv = str_replace('*', '%', $dateObservationParSv);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAvenantPeer::DATE_OBSERVATION_PAR_SV, $dateObservationParSv, $comparison);
    }

    /**
     * Filter the query on the date_retour_projet column
     *
     * Example usage:
     * <code>
     * $query->filterByDateRetourProjet('fooValue');   // WHERE date_retour_projet = 'fooValue'
     * $query->filterByDateRetourProjet('%fooValue%'); // WHERE date_retour_projet LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateRetourProjet The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvenantQuery The current query, for fluid interface
     */
    public function filterByDateRetourProjet($dateRetourProjet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateRetourProjet)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateRetourProjet)) {
                $dateRetourProjet = str_replace('*', '%', $dateRetourProjet);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAvenantPeer::DATE_RETOUR_PROJET, $dateRetourProjet, $comparison);
    }

    /**
     * Filter the query on the date_validation_projet column
     *
     * Example usage:
     * <code>
     * $query->filterByDateValidationProjet('fooValue');   // WHERE date_validation_projet = 'fooValue'
     * $query->filterByDateValidationProjet('%fooValue%'); // WHERE date_validation_projet LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateValidationProjet The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvenantQuery The current query, for fluid interface
     */
    public function filterByDateValidationProjet($dateValidationProjet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateValidationProjet)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateValidationProjet)) {
                $dateValidationProjet = str_replace('*', '%', $dateValidationProjet);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAvenantPeer::DATE_VALIDATION_PROJET, $dateValidationProjet, $comparison);
    }

    /**
     * Filter the query on the date_validation_projet_vu_par column
     *
     * Example usage:
     * <code>
     * $query->filterByDateValidationProjetVuPar(1234); // WHERE date_validation_projet_vu_par = 1234
     * $query->filterByDateValidationProjetVuPar(array(12, 34)); // WHERE date_validation_projet_vu_par IN (12, 34)
     * $query->filterByDateValidationProjetVuPar(array('min' => 12)); // WHERE date_validation_projet_vu_par >= 12
     * $query->filterByDateValidationProjetVuPar(array('max' => 12)); // WHERE date_validation_projet_vu_par <= 12
     * </code>
     *
     * @param     mixed $dateValidationProjetVuPar The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvenantQuery The current query, for fluid interface
     */
    public function filterByDateValidationProjetVuPar($dateValidationProjetVuPar = null, $comparison = null)
    {
        if (is_array($dateValidationProjetVuPar)) {
            $useMinMax = false;
            if (isset($dateValidationProjetVuPar['min'])) {
                $this->addUsingAlias(CommonAvenantPeer::DATE_VALIDATION_PROJET_VU_PAR, $dateValidationProjetVuPar['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateValidationProjetVuPar['max'])) {
                $this->addUsingAlias(CommonAvenantPeer::DATE_VALIDATION_PROJET_VU_PAR, $dateValidationProjetVuPar['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAvenantPeer::DATE_VALIDATION_PROJET_VU_PAR, $dateValidationProjetVuPar, $comparison);
    }

    /**
     * Filter the query on the date_cao column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCao('fooValue');   // WHERE date_cao = 'fooValue'
     * $query->filterByDateCao('%fooValue%'); // WHERE date_cao LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateCao The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvenantQuery The current query, for fluid interface
     */
    public function filterByDateCao($dateCao = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateCao)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateCao)) {
                $dateCao = str_replace('*', '%', $dateCao);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAvenantPeer::DATE_CAO, $dateCao, $comparison);
    }

    /**
     * Filter the query on the avis_cao column
     *
     * Example usage:
     * <code>
     * $query->filterByAvisCao(1234); // WHERE avis_cao = 1234
     * $query->filterByAvisCao(array(12, 34)); // WHERE avis_cao IN (12, 34)
     * $query->filterByAvisCao(array('min' => 12)); // WHERE avis_cao >= 12
     * $query->filterByAvisCao(array('max' => 12)); // WHERE avis_cao <= 12
     * </code>
     *
     * @param     mixed $avisCao The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvenantQuery The current query, for fluid interface
     */
    public function filterByAvisCao($avisCao = null, $comparison = null)
    {
        if (is_array($avisCao)) {
            $useMinMax = false;
            if (isset($avisCao['min'])) {
                $this->addUsingAlias(CommonAvenantPeer::AVIS_CAO, $avisCao['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($avisCao['max'])) {
                $this->addUsingAlias(CommonAvenantPeer::AVIS_CAO, $avisCao['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAvenantPeer::AVIS_CAO, $avisCao, $comparison);
    }

    /**
     * Filter the query on the date_cp column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCp('fooValue');   // WHERE date_cp = 'fooValue'
     * $query->filterByDateCp('%fooValue%'); // WHERE date_cp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateCp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvenantQuery The current query, for fluid interface
     */
    public function filterByDateCp($dateCp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateCp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateCp)) {
                $dateCp = str_replace('*', '%', $dateCp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAvenantPeer::DATE_CP, $dateCp, $comparison);
    }

    /**
     * Filter the query on the date_signature_avenant column
     *
     * Example usage:
     * <code>
     * $query->filterByDateSignatureAvenant('fooValue');   // WHERE date_signature_avenant = 'fooValue'
     * $query->filterByDateSignatureAvenant('%fooValue%'); // WHERE date_signature_avenant LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateSignatureAvenant The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvenantQuery The current query, for fluid interface
     */
    public function filterByDateSignatureAvenant($dateSignatureAvenant = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateSignatureAvenant)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateSignatureAvenant)) {
                $dateSignatureAvenant = str_replace('*', '%', $dateSignatureAvenant);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAvenantPeer::DATE_SIGNATURE_AVENANT, $dateSignatureAvenant, $comparison);
    }

    /**
     * Filter the query on the date_reception_dossier column
     *
     * Example usage:
     * <code>
     * $query->filterByDateReceptionDossier('fooValue');   // WHERE date_reception_dossier = 'fooValue'
     * $query->filterByDateReceptionDossier('%fooValue%'); // WHERE date_reception_dossier LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateReceptionDossier The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvenantQuery The current query, for fluid interface
     */
    public function filterByDateReceptionDossier($dateReceptionDossier = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateReceptionDossier)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateReceptionDossier)) {
                $dateReceptionDossier = str_replace('*', '%', $dateReceptionDossier);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAvenantPeer::DATE_RECEPTION_DOSSIER, $dateReceptionDossier, $comparison);
    }

    /**
     * Filter the query on the date_formulation_observation_par_sv_sur_sdossier column
     *
     * Example usage:
     * <code>
     * $query->filterByDateFormulationObservationParSvSurSdossier('fooValue');   // WHERE date_formulation_observation_par_sv_sur_sdossier = 'fooValue'
     * $query->filterByDateFormulationObservationParSvSurSdossier('%fooValue%'); // WHERE date_formulation_observation_par_sv_sur_sdossier LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateFormulationObservationParSvSurSdossier The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvenantQuery The current query, for fluid interface
     */
    public function filterByDateFormulationObservationParSvSurSdossier($dateFormulationObservationParSvSurSdossier = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateFormulationObservationParSvSurSdossier)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateFormulationObservationParSvSurSdossier)) {
                $dateFormulationObservationParSvSurSdossier = str_replace('*', '%', $dateFormulationObservationParSvSurSdossier);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAvenantPeer::DATE_FORMULATION_OBSERVATION_PAR_SV_SUR_SDOSSIER, $dateFormulationObservationParSvSurSdossier, $comparison);
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
     * @return CommonAvenantQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonAvenantPeer::DATE_RETOUR_DOSSIER_FINALISE, $dateRetourDossierFinalise, $comparison);
    }

    /**
     * Filter the query on the date_validation_dossier_finalise column
     *
     * Example usage:
     * <code>
     * $query->filterByDateValidationDossierFinalise('fooValue');   // WHERE date_validation_dossier_finalise = 'fooValue'
     * $query->filterByDateValidationDossierFinalise('%fooValue%'); // WHERE date_validation_dossier_finalise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateValidationDossierFinalise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvenantQuery The current query, for fluid interface
     */
    public function filterByDateValidationDossierFinalise($dateValidationDossierFinalise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateValidationDossierFinalise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateValidationDossierFinalise)) {
                $dateValidationDossierFinalise = str_replace('*', '%', $dateValidationDossierFinalise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAvenantPeer::DATE_VALIDATION_DOSSIER_FINALISE, $dateValidationDossierFinalise, $comparison);
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
     * @return CommonAvenantQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonAvenantPeer::DATE_TRANSMISSION_PREFECTURE, $dateTransmissionPrefecture, $comparison);
    }

    /**
     * Filter the query on the date_notification column
     *
     * Example usage:
     * <code>
     * $query->filterByDateNotification('fooValue');   // WHERE date_notification = 'fooValue'
     * $query->filterByDateNotification('%fooValue%'); // WHERE date_notification LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateNotification The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvenantQuery The current query, for fluid interface
     */
    public function filterByDateNotification($dateNotification = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateNotification)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateNotification)) {
                $dateNotification = str_replace('*', '%', $dateNotification);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAvenantPeer::DATE_NOTIFICATION, $dateNotification, $comparison);
    }

    /**
     * Filter the query on the operation_validation_vues_par column
     *
     * Example usage:
     * <code>
     * $query->filterByOperationValidationVuesPar(1234); // WHERE operation_validation_vues_par = 1234
     * $query->filterByOperationValidationVuesPar(array(12, 34)); // WHERE operation_validation_vues_par IN (12, 34)
     * $query->filterByOperationValidationVuesPar(array('min' => 12)); // WHERE operation_validation_vues_par >= 12
     * $query->filterByOperationValidationVuesPar(array('max' => 12)); // WHERE operation_validation_vues_par <= 12
     * </code>
     *
     * @param     mixed $operationValidationVuesPar The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvenantQuery The current query, for fluid interface
     */
    public function filterByOperationValidationVuesPar($operationValidationVuesPar = null, $comparison = null)
    {
        if (is_array($operationValidationVuesPar)) {
            $useMinMax = false;
            if (isset($operationValidationVuesPar['min'])) {
                $this->addUsingAlias(CommonAvenantPeer::OPERATION_VALIDATION_VUES_PAR, $operationValidationVuesPar['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($operationValidationVuesPar['max'])) {
                $this->addUsingAlias(CommonAvenantPeer::OPERATION_VALIDATION_VUES_PAR, $operationValidationVuesPar['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAvenantPeer::OPERATION_VALIDATION_VUES_PAR, $operationValidationVuesPar, $comparison);
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
     * @return CommonAvenantQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonAvenantPeer::COMMENTAIRES, $commentaires, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonAvenant $commonAvenant Object to remove from the list of results
     *
     * @return CommonAvenantQuery The current query, for fluid interface
     */
    public function prune($commonAvenant = null)
    {
        if ($commonAvenant) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonAvenantPeer::ID_AVENANT), $commonAvenant->getIdAvenant(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonAvenantPeer::ORGANISME), $commonAvenant->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
