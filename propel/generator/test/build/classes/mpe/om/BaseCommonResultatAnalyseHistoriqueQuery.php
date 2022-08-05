<?php


/**
 * Base class that represents a query for the 'resultat_analyse_historique' table.
 *
 * 
 *
 * @method CommonResultatAnalyseHistoriqueQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonResultatAnalyseHistoriqueQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonResultatAnalyseHistoriqueQuery orderByConsultationRef($order = Criteria::ASC) Order by the consultation_ref column
 * @method CommonResultatAnalyseHistoriqueQuery orderByIdOffre($order = Criteria::ASC) Order by the id_offre column
 * @method CommonResultatAnalyseHistoriqueQuery orderByLot($order = Criteria::ASC) Order by the lot column
 * @method CommonResultatAnalyseHistoriqueQuery orderByDateDecision($order = Criteria::ASC) Order by the date_decision column
 * @method CommonResultatAnalyseHistoriqueQuery orderByTypeDecision($order = Criteria::ASC) Order by the type_decision column
 * @method CommonResultatAnalyseHistoriqueQuery orderByTypeDepot($order = Criteria::ASC) Order by the type_depot column
 * @method CommonResultatAnalyseHistoriqueQuery orderByJustificatif($order = Criteria::ASC) Order by the justificatif column
 * @method CommonResultatAnalyseHistoriqueQuery orderByNomEntreprise($order = Criteria::ASC) Order by the nom_entreprise column
 * @method CommonResultatAnalyseHistoriqueQuery orderByAction($order = Criteria::ASC) Order by the action column
 * @method CommonResultatAnalyseHistoriqueQuery orderByAgentId($order = Criteria::ASC) Order by the agent_id column
 *
 * @method CommonResultatAnalyseHistoriqueQuery groupById() Group by the id column
 * @method CommonResultatAnalyseHistoriqueQuery groupByOrganisme() Group by the organisme column
 * @method CommonResultatAnalyseHistoriqueQuery groupByConsultationRef() Group by the consultation_ref column
 * @method CommonResultatAnalyseHistoriqueQuery groupByIdOffre() Group by the id_offre column
 * @method CommonResultatAnalyseHistoriqueQuery groupByLot() Group by the lot column
 * @method CommonResultatAnalyseHistoriqueQuery groupByDateDecision() Group by the date_decision column
 * @method CommonResultatAnalyseHistoriqueQuery groupByTypeDecision() Group by the type_decision column
 * @method CommonResultatAnalyseHistoriqueQuery groupByTypeDepot() Group by the type_depot column
 * @method CommonResultatAnalyseHistoriqueQuery groupByJustificatif() Group by the justificatif column
 * @method CommonResultatAnalyseHistoriqueQuery groupByNomEntreprise() Group by the nom_entreprise column
 * @method CommonResultatAnalyseHistoriqueQuery groupByAction() Group by the action column
 * @method CommonResultatAnalyseHistoriqueQuery groupByAgentId() Group by the agent_id column
 *
 * @method CommonResultatAnalyseHistoriqueQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonResultatAnalyseHistoriqueQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonResultatAnalyseHistoriqueQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonResultatAnalyseHistorique findOne(PropelPDO $con = null) Return the first CommonResultatAnalyseHistorique matching the query
 * @method CommonResultatAnalyseHistorique findOneOrCreate(PropelPDO $con = null) Return the first CommonResultatAnalyseHistorique matching the query, or a new CommonResultatAnalyseHistorique object populated from the query conditions when no match is found
 *
 * @method CommonResultatAnalyseHistorique findOneById(int $id) Return the first CommonResultatAnalyseHistorique filtered by the id column
 * @method CommonResultatAnalyseHistorique findOneByOrganisme(string $organisme) Return the first CommonResultatAnalyseHistorique filtered by the organisme column
 * @method CommonResultatAnalyseHistorique findOneByConsultationRef(int $consultation_ref) Return the first CommonResultatAnalyseHistorique filtered by the consultation_ref column
 * @method CommonResultatAnalyseHistorique findOneByIdOffre(int $id_offre) Return the first CommonResultatAnalyseHistorique filtered by the id_offre column
 * @method CommonResultatAnalyseHistorique findOneByLot(int $lot) Return the first CommonResultatAnalyseHistorique filtered by the lot column
 * @method CommonResultatAnalyseHistorique findOneByDateDecision(string $date_decision) Return the first CommonResultatAnalyseHistorique filtered by the date_decision column
 * @method CommonResultatAnalyseHistorique findOneByTypeDecision(int $type_decision) Return the first CommonResultatAnalyseHistorique filtered by the type_decision column
 * @method CommonResultatAnalyseHistorique findOneByTypeDepot(string $type_depot) Return the first CommonResultatAnalyseHistorique filtered by the type_depot column
 * @method CommonResultatAnalyseHistorique findOneByJustificatif(string $justificatif) Return the first CommonResultatAnalyseHistorique filtered by the justificatif column
 * @method CommonResultatAnalyseHistorique findOneByNomEntreprise(string $nom_entreprise) Return the first CommonResultatAnalyseHistorique filtered by the nom_entreprise column
 * @method CommonResultatAnalyseHistorique findOneByAction(string $action) Return the first CommonResultatAnalyseHistorique filtered by the action column
 * @method CommonResultatAnalyseHistorique findOneByAgentId(int $agent_id) Return the first CommonResultatAnalyseHistorique filtered by the agent_id column
 *
 * @method array findById(int $id) Return CommonResultatAnalyseHistorique objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonResultatAnalyseHistorique objects filtered by the organisme column
 * @method array findByConsultationRef(int $consultation_ref) Return CommonResultatAnalyseHistorique objects filtered by the consultation_ref column
 * @method array findByIdOffre(int $id_offre) Return CommonResultatAnalyseHistorique objects filtered by the id_offre column
 * @method array findByLot(int $lot) Return CommonResultatAnalyseHistorique objects filtered by the lot column
 * @method array findByDateDecision(string $date_decision) Return CommonResultatAnalyseHistorique objects filtered by the date_decision column
 * @method array findByTypeDecision(int $type_decision) Return CommonResultatAnalyseHistorique objects filtered by the type_decision column
 * @method array findByTypeDepot(string $type_depot) Return CommonResultatAnalyseHistorique objects filtered by the type_depot column
 * @method array findByJustificatif(string $justificatif) Return CommonResultatAnalyseHistorique objects filtered by the justificatif column
 * @method array findByNomEntreprise(string $nom_entreprise) Return CommonResultatAnalyseHistorique objects filtered by the nom_entreprise column
 * @method array findByAction(string $action) Return CommonResultatAnalyseHistorique objects filtered by the action column
 * @method array findByAgentId(int $agent_id) Return CommonResultatAnalyseHistorique objects filtered by the agent_id column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonResultatAnalyseHistoriqueQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonResultatAnalyseHistoriqueQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonResultatAnalyseHistorique', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonResultatAnalyseHistoriqueQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonResultatAnalyseHistoriqueQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonResultatAnalyseHistoriqueQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonResultatAnalyseHistoriqueQuery) {
            return $criteria;
        }
        $query = new CommonResultatAnalyseHistoriqueQuery();
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
     * @return   CommonResultatAnalyseHistorique|CommonResultatAnalyseHistorique[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonResultatAnalyseHistoriquePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonResultatAnalyseHistoriquePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonResultatAnalyseHistorique A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `consultation_ref`, `id_offre`, `lot`, `date_decision`, `type_decision`, `type_depot`, `justificatif`, `nom_entreprise`, `action`, `agent_id` FROM `resultat_analyse_historique` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonResultatAnalyseHistorique();
            $obj->hydrate($row);
            CommonResultatAnalyseHistoriquePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonResultatAnalyseHistorique|CommonResultatAnalyseHistorique[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonResultatAnalyseHistorique[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonResultatAnalyseHistoriqueQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonResultatAnalyseHistoriquePeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonResultatAnalyseHistoriquePeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonResultatAnalyseHistoriqueQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonResultatAnalyseHistoriquePeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonResultatAnalyseHistoriquePeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonResultatAnalyseHistoriqueQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonResultatAnalyseHistoriquePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonResultatAnalyseHistoriquePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonResultatAnalyseHistoriquePeer::ID, $id, $comparison);
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
     * @return CommonResultatAnalyseHistoriqueQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonResultatAnalyseHistoriquePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the consultation_ref column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultationRef(1234); // WHERE consultation_ref = 1234
     * $query->filterByConsultationRef(array(12, 34)); // WHERE consultation_ref IN (12, 34)
     * $query->filterByConsultationRef(array('min' => 12)); // WHERE consultation_ref >= 12
     * $query->filterByConsultationRef(array('max' => 12)); // WHERE consultation_ref <= 12
     * </code>
     *
     * @param     mixed $consultationRef The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonResultatAnalyseHistoriqueQuery The current query, for fluid interface
     */
    public function filterByConsultationRef($consultationRef = null, $comparison = null)
    {
        if (is_array($consultationRef)) {
            $useMinMax = false;
            if (isset($consultationRef['min'])) {
                $this->addUsingAlias(CommonResultatAnalyseHistoriquePeer::CONSULTATION_REF, $consultationRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($consultationRef['max'])) {
                $this->addUsingAlias(CommonResultatAnalyseHistoriquePeer::CONSULTATION_REF, $consultationRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonResultatAnalyseHistoriquePeer::CONSULTATION_REF, $consultationRef, $comparison);
    }

    /**
     * Filter the query on the id_offre column
     *
     * Example usage:
     * <code>
     * $query->filterByIdOffre(1234); // WHERE id_offre = 1234
     * $query->filterByIdOffre(array(12, 34)); // WHERE id_offre IN (12, 34)
     * $query->filterByIdOffre(array('min' => 12)); // WHERE id_offre >= 12
     * $query->filterByIdOffre(array('max' => 12)); // WHERE id_offre <= 12
     * </code>
     *
     * @param     mixed $idOffre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonResultatAnalyseHistoriqueQuery The current query, for fluid interface
     */
    public function filterByIdOffre($idOffre = null, $comparison = null)
    {
        if (is_array($idOffre)) {
            $useMinMax = false;
            if (isset($idOffre['min'])) {
                $this->addUsingAlias(CommonResultatAnalyseHistoriquePeer::ID_OFFRE, $idOffre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idOffre['max'])) {
                $this->addUsingAlias(CommonResultatAnalyseHistoriquePeer::ID_OFFRE, $idOffre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonResultatAnalyseHistoriquePeer::ID_OFFRE, $idOffre, $comparison);
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
     * @return CommonResultatAnalyseHistoriqueQuery The current query, for fluid interface
     */
    public function filterByLot($lot = null, $comparison = null)
    {
        if (is_array($lot)) {
            $useMinMax = false;
            if (isset($lot['min'])) {
                $this->addUsingAlias(CommonResultatAnalyseHistoriquePeer::LOT, $lot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lot['max'])) {
                $this->addUsingAlias(CommonResultatAnalyseHistoriquePeer::LOT, $lot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonResultatAnalyseHistoriquePeer::LOT, $lot, $comparison);
    }

    /**
     * Filter the query on the date_decision column
     *
     * Example usage:
     * <code>
     * $query->filterByDateDecision('fooValue');   // WHERE date_decision = 'fooValue'
     * $query->filterByDateDecision('%fooValue%'); // WHERE date_decision LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateDecision The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonResultatAnalyseHistoriqueQuery The current query, for fluid interface
     */
    public function filterByDateDecision($dateDecision = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateDecision)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateDecision)) {
                $dateDecision = str_replace('*', '%', $dateDecision);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonResultatAnalyseHistoriquePeer::DATE_DECISION, $dateDecision, $comparison);
    }

    /**
     * Filter the query on the type_decision column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeDecision(1234); // WHERE type_decision = 1234
     * $query->filterByTypeDecision(array(12, 34)); // WHERE type_decision IN (12, 34)
     * $query->filterByTypeDecision(array('min' => 12)); // WHERE type_decision >= 12
     * $query->filterByTypeDecision(array('max' => 12)); // WHERE type_decision <= 12
     * </code>
     *
     * @param     mixed $typeDecision The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonResultatAnalyseHistoriqueQuery The current query, for fluid interface
     */
    public function filterByTypeDecision($typeDecision = null, $comparison = null)
    {
        if (is_array($typeDecision)) {
            $useMinMax = false;
            if (isset($typeDecision['min'])) {
                $this->addUsingAlias(CommonResultatAnalyseHistoriquePeer::TYPE_DECISION, $typeDecision['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeDecision['max'])) {
                $this->addUsingAlias(CommonResultatAnalyseHistoriquePeer::TYPE_DECISION, $typeDecision['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonResultatAnalyseHistoriquePeer::TYPE_DECISION, $typeDecision, $comparison);
    }

    /**
     * Filter the query on the type_depot column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeDepot('fooValue');   // WHERE type_depot = 'fooValue'
     * $query->filterByTypeDepot('%fooValue%'); // WHERE type_depot LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeDepot The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonResultatAnalyseHistoriqueQuery The current query, for fluid interface
     */
    public function filterByTypeDepot($typeDepot = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeDepot)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeDepot)) {
                $typeDepot = str_replace('*', '%', $typeDepot);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonResultatAnalyseHistoriquePeer::TYPE_DEPOT, $typeDepot, $comparison);
    }

    /**
     * Filter the query on the justificatif column
     *
     * Example usage:
     * <code>
     * $query->filterByJustificatif('fooValue');   // WHERE justificatif = 'fooValue'
     * $query->filterByJustificatif('%fooValue%'); // WHERE justificatif LIKE '%fooValue%'
     * </code>
     *
     * @param     string $justificatif The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonResultatAnalyseHistoriqueQuery The current query, for fluid interface
     */
    public function filterByJustificatif($justificatif = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($justificatif)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $justificatif)) {
                $justificatif = str_replace('*', '%', $justificatif);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonResultatAnalyseHistoriquePeer::JUSTIFICATIF, $justificatif, $comparison);
    }

    /**
     * Filter the query on the nom_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByNomEntreprise('fooValue');   // WHERE nom_entreprise = 'fooValue'
     * $query->filterByNomEntreprise('%fooValue%'); // WHERE nom_entreprise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomEntreprise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonResultatAnalyseHistoriqueQuery The current query, for fluid interface
     */
    public function filterByNomEntreprise($nomEntreprise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomEntreprise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomEntreprise)) {
                $nomEntreprise = str_replace('*', '%', $nomEntreprise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonResultatAnalyseHistoriquePeer::NOM_ENTREPRISE, $nomEntreprise, $comparison);
    }

    /**
     * Filter the query on the action column
     *
     * Example usage:
     * <code>
     * $query->filterByAction('fooValue');   // WHERE action = 'fooValue'
     * $query->filterByAction('%fooValue%'); // WHERE action LIKE '%fooValue%'
     * </code>
     *
     * @param     string $action The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonResultatAnalyseHistoriqueQuery The current query, for fluid interface
     */
    public function filterByAction($action = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($action)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $action)) {
                $action = str_replace('*', '%', $action);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonResultatAnalyseHistoriquePeer::ACTION, $action, $comparison);
    }

    /**
     * Filter the query on the agent_id column
     *
     * Example usage:
     * <code>
     * $query->filterByAgentId(1234); // WHERE agent_id = 1234
     * $query->filterByAgentId(array(12, 34)); // WHERE agent_id IN (12, 34)
     * $query->filterByAgentId(array('min' => 12)); // WHERE agent_id >= 12
     * $query->filterByAgentId(array('max' => 12)); // WHERE agent_id <= 12
     * </code>
     *
     * @param     mixed $agentId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonResultatAnalyseHistoriqueQuery The current query, for fluid interface
     */
    public function filterByAgentId($agentId = null, $comparison = null)
    {
        if (is_array($agentId)) {
            $useMinMax = false;
            if (isset($agentId['min'])) {
                $this->addUsingAlias(CommonResultatAnalyseHistoriquePeer::AGENT_ID, $agentId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($agentId['max'])) {
                $this->addUsingAlias(CommonResultatAnalyseHistoriquePeer::AGENT_ID, $agentId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonResultatAnalyseHistoriquePeer::AGENT_ID, $agentId, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonResultatAnalyseHistorique $commonResultatAnalyseHistorique Object to remove from the list of results
     *
     * @return CommonResultatAnalyseHistoriqueQuery The current query, for fluid interface
     */
    public function prune($commonResultatAnalyseHistorique = null)
    {
        if ($commonResultatAnalyseHistorique) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonResultatAnalyseHistoriquePeer::ID), $commonResultatAnalyseHistorique->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonResultatAnalyseHistoriquePeer::ORGANISME), $commonResultatAnalyseHistorique->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
