<?php


/**
 * Base class that represents a query for the 'exec_configuration_formulaire' table.
 *
 * 
 *
 * @method CommonExecConfigurationFormulaireQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonExecConfigurationFormulaireQuery orderByIdTypeContrat($order = Criteria::ASC) Order by the id_type_contrat column
 * @method CommonExecConfigurationFormulaireQuery orderByMontantAvance($order = Criteria::ASC) Order by the montant_avance column
 * @method CommonExecConfigurationFormulaireQuery orderByPenalite($order = Criteria::ASC) Order by the penalite column
 * @method CommonExecConfigurationFormulaireQuery orderByDelaiPartiel($order = Criteria::ASC) Order by the delai_partiel column
 * @method CommonExecConfigurationFormulaireQuery orderByOsParPhase($order = Criteria::ASC) Order by the os_par_phase column
 * @method CommonExecConfigurationFormulaireQuery orderByMontantCautionDefinitive($order = Criteria::ASC) Order by the montant_caution_definitive column
 * @method CommonExecConfigurationFormulaireQuery orderByRetenueGarantie($order = Criteria::ASC) Order by the retenue_garantie column
 * @method CommonExecConfigurationFormulaireQuery orderByPeriodeGarantie($order = Criteria::ASC) Order by the periode_garantie column
 * @method CommonExecConfigurationFormulaireQuery orderByDecompositionPhase($order = Criteria::ASC) Order by the decomposition_phase column
 * @method CommonExecConfigurationFormulaireQuery orderByChecklisteLivrable($order = Criteria::ASC) Order by the checkliste_livrable column
 * @method CommonExecConfigurationFormulaireQuery orderByDateAccusee($order = Criteria::ASC) Order by the date_accusee column
 * @method CommonExecConfigurationFormulaireQuery orderByDateNotification($order = Criteria::ASC) Order by the date_notification column
 * @method CommonExecConfigurationFormulaireQuery orderByModePassaton($order = Criteria::ASC) Order by the mode_passaton column
 * @method CommonExecConfigurationFormulaireQuery orderByNumeroConsultation($order = Criteria::ASC) Order by the numero_consultation column
 * @method CommonExecConfigurationFormulaireQuery orderByReconductible($order = Criteria::ASC) Order by the reconductible column
 * @method CommonExecConfigurationFormulaireQuery orderByGestionReception($order = Criteria::ASC) Order by the gestion_reception column
 * @method CommonExecConfigurationFormulaireQuery orderByGestionLitige($order = Criteria::ASC) Order by the gestion_litige column
 * @method CommonExecConfigurationFormulaireQuery orderByPorteReception($order = Criteria::ASC) Order by the porte_reception column
 * @method CommonExecConfigurationFormulaireQuery orderByTypeReception($order = Criteria::ASC) Order by the type_reception column
 *
 * @method CommonExecConfigurationFormulaireQuery groupById() Group by the id column
 * @method CommonExecConfigurationFormulaireQuery groupByIdTypeContrat() Group by the id_type_contrat column
 * @method CommonExecConfigurationFormulaireQuery groupByMontantAvance() Group by the montant_avance column
 * @method CommonExecConfigurationFormulaireQuery groupByPenalite() Group by the penalite column
 * @method CommonExecConfigurationFormulaireQuery groupByDelaiPartiel() Group by the delai_partiel column
 * @method CommonExecConfigurationFormulaireQuery groupByOsParPhase() Group by the os_par_phase column
 * @method CommonExecConfigurationFormulaireQuery groupByMontantCautionDefinitive() Group by the montant_caution_definitive column
 * @method CommonExecConfigurationFormulaireQuery groupByRetenueGarantie() Group by the retenue_garantie column
 * @method CommonExecConfigurationFormulaireQuery groupByPeriodeGarantie() Group by the periode_garantie column
 * @method CommonExecConfigurationFormulaireQuery groupByDecompositionPhase() Group by the decomposition_phase column
 * @method CommonExecConfigurationFormulaireQuery groupByChecklisteLivrable() Group by the checkliste_livrable column
 * @method CommonExecConfigurationFormulaireQuery groupByDateAccusee() Group by the date_accusee column
 * @method CommonExecConfigurationFormulaireQuery groupByDateNotification() Group by the date_notification column
 * @method CommonExecConfigurationFormulaireQuery groupByModePassaton() Group by the mode_passaton column
 * @method CommonExecConfigurationFormulaireQuery groupByNumeroConsultation() Group by the numero_consultation column
 * @method CommonExecConfigurationFormulaireQuery groupByReconductible() Group by the reconductible column
 * @method CommonExecConfigurationFormulaireQuery groupByGestionReception() Group by the gestion_reception column
 * @method CommonExecConfigurationFormulaireQuery groupByGestionLitige() Group by the gestion_litige column
 * @method CommonExecConfigurationFormulaireQuery groupByPorteReception() Group by the porte_reception column
 * @method CommonExecConfigurationFormulaireQuery groupByTypeReception() Group by the type_reception column
 *
 * @method CommonExecConfigurationFormulaireQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonExecConfigurationFormulaireQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonExecConfigurationFormulaireQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonExecConfigurationFormulaireQuery leftJoinCommonExecTypeContratRelatedByIdTypeContrat($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecTypeContratRelatedByIdTypeContrat relation
 * @method CommonExecConfigurationFormulaireQuery rightJoinCommonExecTypeContratRelatedByIdTypeContrat($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecTypeContratRelatedByIdTypeContrat relation
 * @method CommonExecConfigurationFormulaireQuery innerJoinCommonExecTypeContratRelatedByIdTypeContrat($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecTypeContratRelatedByIdTypeContrat relation
 *
 * @method CommonExecConfigurationFormulaireQuery leftJoinCommonExecTypeContratRelatedByIdTypeContrat($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecTypeContratRelatedByIdTypeContrat relation
 * @method CommonExecConfigurationFormulaireQuery rightJoinCommonExecTypeContratRelatedByIdTypeContrat($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecTypeContratRelatedByIdTypeContrat relation
 * @method CommonExecConfigurationFormulaireQuery innerJoinCommonExecTypeContratRelatedByIdTypeContrat($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecTypeContratRelatedByIdTypeContrat relation
 *
 * @method CommonExecConfigurationFormulaireQuery leftJoinCommonExecTypeContratRelatedByIdTypeContrat($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecTypeContratRelatedByIdTypeContrat relation
 * @method CommonExecConfigurationFormulaireQuery rightJoinCommonExecTypeContratRelatedByIdTypeContrat($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecTypeContratRelatedByIdTypeContrat relation
 * @method CommonExecConfigurationFormulaireQuery innerJoinCommonExecTypeContratRelatedByIdTypeContrat($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecTypeContratRelatedByIdTypeContrat relation
 *
 * @method CommonExecConfigurationFormulaire findOne(PropelPDO $con = null) Return the first CommonExecConfigurationFormulaire matching the query
 * @method CommonExecConfigurationFormulaire findOneOrCreate(PropelPDO $con = null) Return the first CommonExecConfigurationFormulaire matching the query, or a new CommonExecConfigurationFormulaire object populated from the query conditions when no match is found
 *
 * @method CommonExecConfigurationFormulaire findOneByIdTypeContrat(int $id_type_contrat) Return the first CommonExecConfigurationFormulaire filtered by the id_type_contrat column
 * @method CommonExecConfigurationFormulaire findOneByMontantAvance(string $montant_avance) Return the first CommonExecConfigurationFormulaire filtered by the montant_avance column
 * @method CommonExecConfigurationFormulaire findOneByPenalite(string $penalite) Return the first CommonExecConfigurationFormulaire filtered by the penalite column
 * @method CommonExecConfigurationFormulaire findOneByDelaiPartiel(string $delai_partiel) Return the first CommonExecConfigurationFormulaire filtered by the delai_partiel column
 * @method CommonExecConfigurationFormulaire findOneByOsParPhase(string $os_par_phase) Return the first CommonExecConfigurationFormulaire filtered by the os_par_phase column
 * @method CommonExecConfigurationFormulaire findOneByMontantCautionDefinitive(string $montant_caution_definitive) Return the first CommonExecConfigurationFormulaire filtered by the montant_caution_definitive column
 * @method CommonExecConfigurationFormulaire findOneByRetenueGarantie(string $retenue_garantie) Return the first CommonExecConfigurationFormulaire filtered by the retenue_garantie column
 * @method CommonExecConfigurationFormulaire findOneByPeriodeGarantie(string $periode_garantie) Return the first CommonExecConfigurationFormulaire filtered by the periode_garantie column
 * @method CommonExecConfigurationFormulaire findOneByDecompositionPhase(string $decomposition_phase) Return the first CommonExecConfigurationFormulaire filtered by the decomposition_phase column
 * @method CommonExecConfigurationFormulaire findOneByChecklisteLivrable(string $checkliste_livrable) Return the first CommonExecConfigurationFormulaire filtered by the checkliste_livrable column
 * @method CommonExecConfigurationFormulaire findOneByDateAccusee(string $date_accusee) Return the first CommonExecConfigurationFormulaire filtered by the date_accusee column
 * @method CommonExecConfigurationFormulaire findOneByDateNotification(string $date_notification) Return the first CommonExecConfigurationFormulaire filtered by the date_notification column
 * @method CommonExecConfigurationFormulaire findOneByModePassaton(string $mode_passaton) Return the first CommonExecConfigurationFormulaire filtered by the mode_passaton column
 * @method CommonExecConfigurationFormulaire findOneByNumeroConsultation(string $numero_consultation) Return the first CommonExecConfigurationFormulaire filtered by the numero_consultation column
 * @method CommonExecConfigurationFormulaire findOneByReconductible(string $reconductible) Return the first CommonExecConfigurationFormulaire filtered by the reconductible column
 * @method CommonExecConfigurationFormulaire findOneByGestionReception(string $gestion_reception) Return the first CommonExecConfigurationFormulaire filtered by the gestion_reception column
 * @method CommonExecConfigurationFormulaire findOneByGestionLitige(string $gestion_litige) Return the first CommonExecConfigurationFormulaire filtered by the gestion_litige column
 * @method CommonExecConfigurationFormulaire findOneByPorteReception(string $porte_reception) Return the first CommonExecConfigurationFormulaire filtered by the porte_reception column
 * @method CommonExecConfigurationFormulaire findOneByTypeReception(string $type_reception) Return the first CommonExecConfigurationFormulaire filtered by the type_reception column
 *
 * @method array findById(int $id) Return CommonExecConfigurationFormulaire objects filtered by the id column
 * @method array findByIdTypeContrat(int $id_type_contrat) Return CommonExecConfigurationFormulaire objects filtered by the id_type_contrat column
 * @method array findByMontantAvance(string $montant_avance) Return CommonExecConfigurationFormulaire objects filtered by the montant_avance column
 * @method array findByPenalite(string $penalite) Return CommonExecConfigurationFormulaire objects filtered by the penalite column
 * @method array findByDelaiPartiel(string $delai_partiel) Return CommonExecConfigurationFormulaire objects filtered by the delai_partiel column
 * @method array findByOsParPhase(string $os_par_phase) Return CommonExecConfigurationFormulaire objects filtered by the os_par_phase column
 * @method array findByMontantCautionDefinitive(string $montant_caution_definitive) Return CommonExecConfigurationFormulaire objects filtered by the montant_caution_definitive column
 * @method array findByRetenueGarantie(string $retenue_garantie) Return CommonExecConfigurationFormulaire objects filtered by the retenue_garantie column
 * @method array findByPeriodeGarantie(string $periode_garantie) Return CommonExecConfigurationFormulaire objects filtered by the periode_garantie column
 * @method array findByDecompositionPhase(string $decomposition_phase) Return CommonExecConfigurationFormulaire objects filtered by the decomposition_phase column
 * @method array findByChecklisteLivrable(string $checkliste_livrable) Return CommonExecConfigurationFormulaire objects filtered by the checkliste_livrable column
 * @method array findByDateAccusee(string $date_accusee) Return CommonExecConfigurationFormulaire objects filtered by the date_accusee column
 * @method array findByDateNotification(string $date_notification) Return CommonExecConfigurationFormulaire objects filtered by the date_notification column
 * @method array findByModePassaton(string $mode_passaton) Return CommonExecConfigurationFormulaire objects filtered by the mode_passaton column
 * @method array findByNumeroConsultation(string $numero_consultation) Return CommonExecConfigurationFormulaire objects filtered by the numero_consultation column
 * @method array findByReconductible(string $reconductible) Return CommonExecConfigurationFormulaire objects filtered by the reconductible column
 * @method array findByGestionReception(string $gestion_reception) Return CommonExecConfigurationFormulaire objects filtered by the gestion_reception column
 * @method array findByGestionLitige(string $gestion_litige) Return CommonExecConfigurationFormulaire objects filtered by the gestion_litige column
 * @method array findByPorteReception(string $porte_reception) Return CommonExecConfigurationFormulaire objects filtered by the porte_reception column
 * @method array findByTypeReception(string $type_reception) Return CommonExecConfigurationFormulaire objects filtered by the type_reception column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonExecConfigurationFormulaireQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonExecConfigurationFormulaireQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonExecConfigurationFormulaire', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonExecConfigurationFormulaireQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonExecConfigurationFormulaireQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonExecConfigurationFormulaireQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonExecConfigurationFormulaireQuery) {
            return $criteria;
        }
        $query = new CommonExecConfigurationFormulaireQuery();
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
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query 
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonExecConfigurationFormulaire|CommonExecConfigurationFormulaire[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonExecConfigurationFormulairePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonExecConfigurationFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonExecConfigurationFormulaire A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneById($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonExecConfigurationFormulaire A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_type_contrat`, `montant_avance`, `penalite`, `delai_partiel`, `os_par_phase`, `montant_caution_definitive`, `retenue_garantie`, `periode_garantie`, `decomposition_phase`, `checkliste_livrable`, `date_accusee`, `date_notification`, `mode_passaton`, `numero_consultation`, `reconductible`, `gestion_reception`, `gestion_litige`, `porte_reception`, `type_reception` FROM `exec_configuration_formulaire` WHERE `id` = :p0';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonExecConfigurationFormulaire();
            $obj->hydrate($row);
            CommonExecConfigurationFormulairePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonExecConfigurationFormulaire|CommonExecConfigurationFormulaire[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CommonExecConfigurationFormulaire[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonExecConfigurationFormulaireQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonExecConfigurationFormulairePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonExecConfigurationFormulaireQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonExecConfigurationFormulairePeer::ID, $keys, Criteria::IN);
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
     * @return CommonExecConfigurationFormulaireQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonExecConfigurationFormulairePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonExecConfigurationFormulairePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecConfigurationFormulairePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_type_contrat column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTypeContrat(1234); // WHERE id_type_contrat = 1234
     * $query->filterByIdTypeContrat(array(12, 34)); // WHERE id_type_contrat IN (12, 34)
     * $query->filterByIdTypeContrat(array('min' => 12)); // WHERE id_type_contrat >= 12
     * $query->filterByIdTypeContrat(array('max' => 12)); // WHERE id_type_contrat <= 12
     * </code>
     *
     * @see       filterByCommonExecTypeContratRelatedByIdTypeContrat()
     *
     * @see       filterByCommonExecTypeContratRelatedByIdTypeContrat()
     *
     * @see       filterByCommonExecTypeContratRelatedByIdTypeContrat()
     *
     * @param     mixed $idTypeContrat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecConfigurationFormulaireQuery The current query, for fluid interface
     */
    public function filterByIdTypeContrat($idTypeContrat = null, $comparison = null)
    {
        if (is_array($idTypeContrat)) {
            $useMinMax = false;
            if (isset($idTypeContrat['min'])) {
                $this->addUsingAlias(CommonExecConfigurationFormulairePeer::ID_TYPE_CONTRAT, $idTypeContrat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeContrat['max'])) {
                $this->addUsingAlias(CommonExecConfigurationFormulairePeer::ID_TYPE_CONTRAT, $idTypeContrat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecConfigurationFormulairePeer::ID_TYPE_CONTRAT, $idTypeContrat, $comparison);
    }

    /**
     * Filter the query on the montant_avance column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantAvance('fooValue');   // WHERE montant_avance = 'fooValue'
     * $query->filterByMontantAvance('%fooValue%'); // WHERE montant_avance LIKE '%fooValue%'
     * </code>
     *
     * @param     string $montantAvance The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecConfigurationFormulaireQuery The current query, for fluid interface
     */
    public function filterByMontantAvance($montantAvance = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($montantAvance)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $montantAvance)) {
                $montantAvance = str_replace('*', '%', $montantAvance);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecConfigurationFormulairePeer::MONTANT_AVANCE, $montantAvance, $comparison);
    }

    /**
     * Filter the query on the penalite column
     *
     * Example usage:
     * <code>
     * $query->filterByPenalite('fooValue');   // WHERE penalite = 'fooValue'
     * $query->filterByPenalite('%fooValue%'); // WHERE penalite LIKE '%fooValue%'
     * </code>
     *
     * @param     string $penalite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecConfigurationFormulaireQuery The current query, for fluid interface
     */
    public function filterByPenalite($penalite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($penalite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $penalite)) {
                $penalite = str_replace('*', '%', $penalite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecConfigurationFormulairePeer::PENALITE, $penalite, $comparison);
    }

    /**
     * Filter the query on the delai_partiel column
     *
     * Example usage:
     * <code>
     * $query->filterByDelaiPartiel('fooValue');   // WHERE delai_partiel = 'fooValue'
     * $query->filterByDelaiPartiel('%fooValue%'); // WHERE delai_partiel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $delaiPartiel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecConfigurationFormulaireQuery The current query, for fluid interface
     */
    public function filterByDelaiPartiel($delaiPartiel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($delaiPartiel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $delaiPartiel)) {
                $delaiPartiel = str_replace('*', '%', $delaiPartiel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecConfigurationFormulairePeer::DELAI_PARTIEL, $delaiPartiel, $comparison);
    }

    /**
     * Filter the query on the os_par_phase column
     *
     * Example usage:
     * <code>
     * $query->filterByOsParPhase('fooValue');   // WHERE os_par_phase = 'fooValue'
     * $query->filterByOsParPhase('%fooValue%'); // WHERE os_par_phase LIKE '%fooValue%'
     * </code>
     *
     * @param     string $osParPhase The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecConfigurationFormulaireQuery The current query, for fluid interface
     */
    public function filterByOsParPhase($osParPhase = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($osParPhase)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $osParPhase)) {
                $osParPhase = str_replace('*', '%', $osParPhase);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecConfigurationFormulairePeer::OS_PAR_PHASE, $osParPhase, $comparison);
    }

    /**
     * Filter the query on the montant_caution_definitive column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantCautionDefinitive('fooValue');   // WHERE montant_caution_definitive = 'fooValue'
     * $query->filterByMontantCautionDefinitive('%fooValue%'); // WHERE montant_caution_definitive LIKE '%fooValue%'
     * </code>
     *
     * @param     string $montantCautionDefinitive The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecConfigurationFormulaireQuery The current query, for fluid interface
     */
    public function filterByMontantCautionDefinitive($montantCautionDefinitive = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($montantCautionDefinitive)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $montantCautionDefinitive)) {
                $montantCautionDefinitive = str_replace('*', '%', $montantCautionDefinitive);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecConfigurationFormulairePeer::MONTANT_CAUTION_DEFINITIVE, $montantCautionDefinitive, $comparison);
    }

    /**
     * Filter the query on the retenue_garantie column
     *
     * Example usage:
     * <code>
     * $query->filterByRetenueGarantie('fooValue');   // WHERE retenue_garantie = 'fooValue'
     * $query->filterByRetenueGarantie('%fooValue%'); // WHERE retenue_garantie LIKE '%fooValue%'
     * </code>
     *
     * @param     string $retenueGarantie The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecConfigurationFormulaireQuery The current query, for fluid interface
     */
    public function filterByRetenueGarantie($retenueGarantie = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($retenueGarantie)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $retenueGarantie)) {
                $retenueGarantie = str_replace('*', '%', $retenueGarantie);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecConfigurationFormulairePeer::RETENUE_GARANTIE, $retenueGarantie, $comparison);
    }

    /**
     * Filter the query on the periode_garantie column
     *
     * Example usage:
     * <code>
     * $query->filterByPeriodeGarantie('fooValue');   // WHERE periode_garantie = 'fooValue'
     * $query->filterByPeriodeGarantie('%fooValue%'); // WHERE periode_garantie LIKE '%fooValue%'
     * </code>
     *
     * @param     string $periodeGarantie The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecConfigurationFormulaireQuery The current query, for fluid interface
     */
    public function filterByPeriodeGarantie($periodeGarantie = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($periodeGarantie)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $periodeGarantie)) {
                $periodeGarantie = str_replace('*', '%', $periodeGarantie);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecConfigurationFormulairePeer::PERIODE_GARANTIE, $periodeGarantie, $comparison);
    }

    /**
     * Filter the query on the decomposition_phase column
     *
     * Example usage:
     * <code>
     * $query->filterByDecompositionPhase('fooValue');   // WHERE decomposition_phase = 'fooValue'
     * $query->filterByDecompositionPhase('%fooValue%'); // WHERE decomposition_phase LIKE '%fooValue%'
     * </code>
     *
     * @param     string $decompositionPhase The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecConfigurationFormulaireQuery The current query, for fluid interface
     */
    public function filterByDecompositionPhase($decompositionPhase = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($decompositionPhase)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $decompositionPhase)) {
                $decompositionPhase = str_replace('*', '%', $decompositionPhase);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecConfigurationFormulairePeer::DECOMPOSITION_PHASE, $decompositionPhase, $comparison);
    }

    /**
     * Filter the query on the checkliste_livrable column
     *
     * Example usage:
     * <code>
     * $query->filterByChecklisteLivrable('fooValue');   // WHERE checkliste_livrable = 'fooValue'
     * $query->filterByChecklisteLivrable('%fooValue%'); // WHERE checkliste_livrable LIKE '%fooValue%'
     * </code>
     *
     * @param     string $checklisteLivrable The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecConfigurationFormulaireQuery The current query, for fluid interface
     */
    public function filterByChecklisteLivrable($checklisteLivrable = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($checklisteLivrable)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $checklisteLivrable)) {
                $checklisteLivrable = str_replace('*', '%', $checklisteLivrable);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecConfigurationFormulairePeer::CHECKLISTE_LIVRABLE, $checklisteLivrable, $comparison);
    }

    /**
     * Filter the query on the date_accusee column
     *
     * Example usage:
     * <code>
     * $query->filterByDateAccusee('fooValue');   // WHERE date_accusee = 'fooValue'
     * $query->filterByDateAccusee('%fooValue%'); // WHERE date_accusee LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateAccusee The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecConfigurationFormulaireQuery The current query, for fluid interface
     */
    public function filterByDateAccusee($dateAccusee = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateAccusee)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateAccusee)) {
                $dateAccusee = str_replace('*', '%', $dateAccusee);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecConfigurationFormulairePeer::DATE_ACCUSEE, $dateAccusee, $comparison);
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
     * @return CommonExecConfigurationFormulaireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonExecConfigurationFormulairePeer::DATE_NOTIFICATION, $dateNotification, $comparison);
    }

    /**
     * Filter the query on the mode_passaton column
     *
     * Example usage:
     * <code>
     * $query->filterByModePassaton('fooValue');   // WHERE mode_passaton = 'fooValue'
     * $query->filterByModePassaton('%fooValue%'); // WHERE mode_passaton LIKE '%fooValue%'
     * </code>
     *
     * @param     string $modePassaton The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecConfigurationFormulaireQuery The current query, for fluid interface
     */
    public function filterByModePassaton($modePassaton = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modePassaton)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $modePassaton)) {
                $modePassaton = str_replace('*', '%', $modePassaton);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecConfigurationFormulairePeer::MODE_PASSATON, $modePassaton, $comparison);
    }

    /**
     * Filter the query on the numero_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeroConsultation('fooValue');   // WHERE numero_consultation = 'fooValue'
     * $query->filterByNumeroConsultation('%fooValue%'); // WHERE numero_consultation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numeroConsultation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecConfigurationFormulaireQuery The current query, for fluid interface
     */
    public function filterByNumeroConsultation($numeroConsultation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numeroConsultation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numeroConsultation)) {
                $numeroConsultation = str_replace('*', '%', $numeroConsultation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecConfigurationFormulairePeer::NUMERO_CONSULTATION, $numeroConsultation, $comparison);
    }

    /**
     * Filter the query on the reconductible column
     *
     * Example usage:
     * <code>
     * $query->filterByReconductible('fooValue');   // WHERE reconductible = 'fooValue'
     * $query->filterByReconductible('%fooValue%'); // WHERE reconductible LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reconductible The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecConfigurationFormulaireQuery The current query, for fluid interface
     */
    public function filterByReconductible($reconductible = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reconductible)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $reconductible)) {
                $reconductible = str_replace('*', '%', $reconductible);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecConfigurationFormulairePeer::RECONDUCTIBLE, $reconductible, $comparison);
    }

    /**
     * Filter the query on the gestion_reception column
     *
     * Example usage:
     * <code>
     * $query->filterByGestionReception('fooValue');   // WHERE gestion_reception = 'fooValue'
     * $query->filterByGestionReception('%fooValue%'); // WHERE gestion_reception LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gestionReception The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecConfigurationFormulaireQuery The current query, for fluid interface
     */
    public function filterByGestionReception($gestionReception = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gestionReception)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gestionReception)) {
                $gestionReception = str_replace('*', '%', $gestionReception);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecConfigurationFormulairePeer::GESTION_RECEPTION, $gestionReception, $comparison);
    }

    /**
     * Filter the query on the gestion_litige column
     *
     * Example usage:
     * <code>
     * $query->filterByGestionLitige('fooValue');   // WHERE gestion_litige = 'fooValue'
     * $query->filterByGestionLitige('%fooValue%'); // WHERE gestion_litige LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gestionLitige The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecConfigurationFormulaireQuery The current query, for fluid interface
     */
    public function filterByGestionLitige($gestionLitige = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gestionLitige)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gestionLitige)) {
                $gestionLitige = str_replace('*', '%', $gestionLitige);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecConfigurationFormulairePeer::GESTION_LITIGE, $gestionLitige, $comparison);
    }

    /**
     * Filter the query on the porte_reception column
     *
     * Example usage:
     * <code>
     * $query->filterByPorteReception('fooValue');   // WHERE porte_reception = 'fooValue'
     * $query->filterByPorteReception('%fooValue%'); // WHERE porte_reception LIKE '%fooValue%'
     * </code>
     *
     * @param     string $porteReception The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecConfigurationFormulaireQuery The current query, for fluid interface
     */
    public function filterByPorteReception($porteReception = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($porteReception)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $porteReception)) {
                $porteReception = str_replace('*', '%', $porteReception);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecConfigurationFormulairePeer::PORTE_RECEPTION, $porteReception, $comparison);
    }

    /**
     * Filter the query on the type_reception column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeReception('fooValue');   // WHERE type_reception = 'fooValue'
     * $query->filterByTypeReception('%fooValue%'); // WHERE type_reception LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeReception The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecConfigurationFormulaireQuery The current query, for fluid interface
     */
    public function filterByTypeReception($typeReception = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeReception)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeReception)) {
                $typeReception = str_replace('*', '%', $typeReception);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecConfigurationFormulairePeer::TYPE_RECEPTION, $typeReception, $comparison);
    }

    /**
     * Filter the query by a related CommonExecTypeContrat object
     *
     * @param   CommonExecTypeContrat|PropelObjectCollection $commonExecTypeContrat The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecConfigurationFormulaireQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecTypeContratRelatedByIdTypeContrat($commonExecTypeContrat, $comparison = null)
    {
        if ($commonExecTypeContrat instanceof CommonExecTypeContrat) {
            return $this
                ->addUsingAlias(CommonExecConfigurationFormulairePeer::ID_TYPE_CONTRAT, $commonExecTypeContrat->getId(), $comparison);
        } elseif ($commonExecTypeContrat instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecConfigurationFormulairePeer::ID_TYPE_CONTRAT, $commonExecTypeContrat->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonExecTypeContratRelatedByIdTypeContrat() only accepts arguments of type CommonExecTypeContrat or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecTypeContratRelatedByIdTypeContrat relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecConfigurationFormulaireQuery The current query, for fluid interface
     */
    public function joinCommonExecTypeContratRelatedByIdTypeContrat($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecTypeContratRelatedByIdTypeContrat');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonExecTypeContratRelatedByIdTypeContrat');
        }

        return $this;
    }

    /**
     * Use the CommonExecTypeContratRelatedByIdTypeContrat relation CommonExecTypeContrat object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecTypeContratQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecTypeContratRelatedByIdTypeContratQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecTypeContratRelatedByIdTypeContrat($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecTypeContratRelatedByIdTypeContrat', 'CommonExecTypeContratQuery');
    }

    /**
     * Filter the query by a related CommonExecTypeContrat object
     *
     * @param   CommonExecTypeContrat|PropelObjectCollection $commonExecTypeContrat The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecConfigurationFormulaireQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecTypeContratRelatedByIdTypeContrat($commonExecTypeContrat, $comparison = null)
    {
        if ($commonExecTypeContrat instanceof CommonExecTypeContrat) {
            return $this
                ->addUsingAlias(CommonExecConfigurationFormulairePeer::ID_TYPE_CONTRAT, $commonExecTypeContrat->getId(), $comparison);
        } elseif ($commonExecTypeContrat instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecConfigurationFormulairePeer::ID_TYPE_CONTRAT, $commonExecTypeContrat->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonExecTypeContratRelatedByIdTypeContrat() only accepts arguments of type CommonExecTypeContrat or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecTypeContratRelatedByIdTypeContrat relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecConfigurationFormulaireQuery The current query, for fluid interface
     */
    public function joinCommonExecTypeContratRelatedByIdTypeContrat($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecTypeContratRelatedByIdTypeContrat');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonExecTypeContratRelatedByIdTypeContrat');
        }

        return $this;
    }

    /**
     * Use the CommonExecTypeContratRelatedByIdTypeContrat relation CommonExecTypeContrat object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecTypeContratQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecTypeContratRelatedByIdTypeContratQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecTypeContratRelatedByIdTypeContrat($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecTypeContratRelatedByIdTypeContrat', 'CommonExecTypeContratQuery');
    }

    /**
     * Filter the query by a related CommonExecTypeContrat object
     *
     * @param   CommonExecTypeContrat|PropelObjectCollection $commonExecTypeContrat The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecConfigurationFormulaireQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecTypeContratRelatedByIdTypeContrat($commonExecTypeContrat, $comparison = null)
    {
        if ($commonExecTypeContrat instanceof CommonExecTypeContrat) {
            return $this
                ->addUsingAlias(CommonExecConfigurationFormulairePeer::ID_TYPE_CONTRAT, $commonExecTypeContrat->getId(), $comparison);
        } elseif ($commonExecTypeContrat instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecConfigurationFormulairePeer::ID_TYPE_CONTRAT, $commonExecTypeContrat->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonExecTypeContratRelatedByIdTypeContrat() only accepts arguments of type CommonExecTypeContrat or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecTypeContratRelatedByIdTypeContrat relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecConfigurationFormulaireQuery The current query, for fluid interface
     */
    public function joinCommonExecTypeContratRelatedByIdTypeContrat($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecTypeContratRelatedByIdTypeContrat');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonExecTypeContratRelatedByIdTypeContrat');
        }

        return $this;
    }

    /**
     * Use the CommonExecTypeContratRelatedByIdTypeContrat relation CommonExecTypeContrat object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecTypeContratQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecTypeContratRelatedByIdTypeContratQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecTypeContratRelatedByIdTypeContrat($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecTypeContratRelatedByIdTypeContrat', 'CommonExecTypeContratQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonExecConfigurationFormulaire $commonExecConfigurationFormulaire Object to remove from the list of results
     *
     * @return CommonExecConfigurationFormulaireQuery The current query, for fluid interface
     */
    public function prune($commonExecConfigurationFormulaire = null)
    {
        if ($commonExecConfigurationFormulaire) {
            $this->addUsingAlias(CommonExecConfigurationFormulairePeer::ID, $commonExecConfigurationFormulaire->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
