<?php


/**
 * Base class that represents a query for the 'Criteres_Evaluation' table.
 *
 * 
 *
 * @method CommonCriteresEvaluationQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonCriteresEvaluationQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonCriteresEvaluationQuery orderByConsultationRef($order = Criteria::ASC) Order by the consultation_ref column
 * @method CommonCriteresEvaluationQuery orderByTypeEnveloppe($order = Criteria::ASC) Order by the type_enveloppe column
 * @method CommonCriteresEvaluationQuery orderByLot($order = Criteria::ASC) Order by the lot column
 * @method CommonCriteresEvaluationQuery orderByTypeCritere($order = Criteria::ASC) Order by the Type_Critere column
 * @method CommonCriteresEvaluationQuery orderByStatut($order = Criteria::ASC) Order by the statut column
 *
 * @method CommonCriteresEvaluationQuery groupById() Group by the id column
 * @method CommonCriteresEvaluationQuery groupByOrganisme() Group by the organisme column
 * @method CommonCriteresEvaluationQuery groupByConsultationRef() Group by the consultation_ref column
 * @method CommonCriteresEvaluationQuery groupByTypeEnveloppe() Group by the type_enveloppe column
 * @method CommonCriteresEvaluationQuery groupByLot() Group by the lot column
 * @method CommonCriteresEvaluationQuery groupByTypeCritere() Group by the Type_Critere column
 * @method CommonCriteresEvaluationQuery groupByStatut() Group by the statut column
 *
 * @method CommonCriteresEvaluationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonCriteresEvaluationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonCriteresEvaluationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonCriteresEvaluation findOne(PropelPDO $con = null) Return the first CommonCriteresEvaluation matching the query
 * @method CommonCriteresEvaluation findOneOrCreate(PropelPDO $con = null) Return the first CommonCriteresEvaluation matching the query, or a new CommonCriteresEvaluation object populated from the query conditions when no match is found
 *
 * @method CommonCriteresEvaluation findOneByOrganisme(string $organisme) Return the first CommonCriteresEvaluation filtered by the organisme column
 * @method CommonCriteresEvaluation findOneByConsultationRef(int $consultation_ref) Return the first CommonCriteresEvaluation filtered by the consultation_ref column
 * @method CommonCriteresEvaluation findOneByTypeEnveloppe(int $type_enveloppe) Return the first CommonCriteresEvaluation filtered by the type_enveloppe column
 * @method CommonCriteresEvaluation findOneByLot(int $lot) Return the first CommonCriteresEvaluation filtered by the lot column
 * @method CommonCriteresEvaluation findOneByTypeCritere(int $Type_Critere) Return the first CommonCriteresEvaluation filtered by the Type_Critere column
 * @method CommonCriteresEvaluation findOneByStatut(int $statut) Return the first CommonCriteresEvaluation filtered by the statut column
 *
 * @method array findById(int $id) Return CommonCriteresEvaluation objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonCriteresEvaluation objects filtered by the organisme column
 * @method array findByConsultationRef(int $consultation_ref) Return CommonCriteresEvaluation objects filtered by the consultation_ref column
 * @method array findByTypeEnveloppe(int $type_enveloppe) Return CommonCriteresEvaluation objects filtered by the type_enveloppe column
 * @method array findByLot(int $lot) Return CommonCriteresEvaluation objects filtered by the lot column
 * @method array findByTypeCritere(int $Type_Critere) Return CommonCriteresEvaluation objects filtered by the Type_Critere column
 * @method array findByStatut(int $statut) Return CommonCriteresEvaluation objects filtered by the statut column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonCriteresEvaluationQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonCriteresEvaluationQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonCriteresEvaluation', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonCriteresEvaluationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonCriteresEvaluationQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonCriteresEvaluationQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonCriteresEvaluationQuery) {
            return $criteria;
        }
        $query = new CommonCriteresEvaluationQuery();
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
     * @return   CommonCriteresEvaluation|CommonCriteresEvaluation[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonCriteresEvaluationPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonCriteresEvaluationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonCriteresEvaluation A model object, or null if the key is not found
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
     * @return                 CommonCriteresEvaluation A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `consultation_ref`, `type_enveloppe`, `lot`, `Type_Critere`, `statut` FROM `Criteres_Evaluation` WHERE `id` = :p0';
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
            $obj = new CommonCriteresEvaluation();
            $obj->hydrate($row);
            CommonCriteresEvaluationPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonCriteresEvaluation|CommonCriteresEvaluation[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonCriteresEvaluation[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonCriteresEvaluationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonCriteresEvaluationPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonCriteresEvaluationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonCriteresEvaluationPeer::ID, $keys, Criteria::IN);
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
     * @return CommonCriteresEvaluationQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonCriteresEvaluationPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonCriteresEvaluationPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCriteresEvaluationPeer::ID, $id, $comparison);
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
     * @return CommonCriteresEvaluationQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonCriteresEvaluationPeer::ORGANISME, $organisme, $comparison);
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
     * @return CommonCriteresEvaluationQuery The current query, for fluid interface
     */
    public function filterByConsultationRef($consultationRef = null, $comparison = null)
    {
        if (is_array($consultationRef)) {
            $useMinMax = false;
            if (isset($consultationRef['min'])) {
                $this->addUsingAlias(CommonCriteresEvaluationPeer::CONSULTATION_REF, $consultationRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($consultationRef['max'])) {
                $this->addUsingAlias(CommonCriteresEvaluationPeer::CONSULTATION_REF, $consultationRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCriteresEvaluationPeer::CONSULTATION_REF, $consultationRef, $comparison);
    }

    /**
     * Filter the query on the type_enveloppe column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeEnveloppe(1234); // WHERE type_enveloppe = 1234
     * $query->filterByTypeEnveloppe(array(12, 34)); // WHERE type_enveloppe IN (12, 34)
     * $query->filterByTypeEnveloppe(array('min' => 12)); // WHERE type_enveloppe >= 12
     * $query->filterByTypeEnveloppe(array('max' => 12)); // WHERE type_enveloppe <= 12
     * </code>
     *
     * @param     mixed $typeEnveloppe The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCriteresEvaluationQuery The current query, for fluid interface
     */
    public function filterByTypeEnveloppe($typeEnveloppe = null, $comparison = null)
    {
        if (is_array($typeEnveloppe)) {
            $useMinMax = false;
            if (isset($typeEnveloppe['min'])) {
                $this->addUsingAlias(CommonCriteresEvaluationPeer::TYPE_ENVELOPPE, $typeEnveloppe['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeEnveloppe['max'])) {
                $this->addUsingAlias(CommonCriteresEvaluationPeer::TYPE_ENVELOPPE, $typeEnveloppe['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCriteresEvaluationPeer::TYPE_ENVELOPPE, $typeEnveloppe, $comparison);
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
     * @return CommonCriteresEvaluationQuery The current query, for fluid interface
     */
    public function filterByLot($lot = null, $comparison = null)
    {
        if (is_array($lot)) {
            $useMinMax = false;
            if (isset($lot['min'])) {
                $this->addUsingAlias(CommonCriteresEvaluationPeer::LOT, $lot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lot['max'])) {
                $this->addUsingAlias(CommonCriteresEvaluationPeer::LOT, $lot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCriteresEvaluationPeer::LOT, $lot, $comparison);
    }

    /**
     * Filter the query on the Type_Critere column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeCritere(1234); // WHERE Type_Critere = 1234
     * $query->filterByTypeCritere(array(12, 34)); // WHERE Type_Critere IN (12, 34)
     * $query->filterByTypeCritere(array('min' => 12)); // WHERE Type_Critere >= 12
     * $query->filterByTypeCritere(array('max' => 12)); // WHERE Type_Critere <= 12
     * </code>
     *
     * @param     mixed $typeCritere The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCriteresEvaluationQuery The current query, for fluid interface
     */
    public function filterByTypeCritere($typeCritere = null, $comparison = null)
    {
        if (is_array($typeCritere)) {
            $useMinMax = false;
            if (isset($typeCritere['min'])) {
                $this->addUsingAlias(CommonCriteresEvaluationPeer::TYPE_CRITERE, $typeCritere['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeCritere['max'])) {
                $this->addUsingAlias(CommonCriteresEvaluationPeer::TYPE_CRITERE, $typeCritere['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCriteresEvaluationPeer::TYPE_CRITERE, $typeCritere, $comparison);
    }

    /**
     * Filter the query on the statut column
     *
     * Example usage:
     * <code>
     * $query->filterByStatut(1234); // WHERE statut = 1234
     * $query->filterByStatut(array(12, 34)); // WHERE statut IN (12, 34)
     * $query->filterByStatut(array('min' => 12)); // WHERE statut >= 12
     * $query->filterByStatut(array('max' => 12)); // WHERE statut <= 12
     * </code>
     *
     * @param     mixed $statut The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCriteresEvaluationQuery The current query, for fluid interface
     */
    public function filterByStatut($statut = null, $comparison = null)
    {
        if (is_array($statut)) {
            $useMinMax = false;
            if (isset($statut['min'])) {
                $this->addUsingAlias(CommonCriteresEvaluationPeer::STATUT, $statut['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statut['max'])) {
                $this->addUsingAlias(CommonCriteresEvaluationPeer::STATUT, $statut['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCriteresEvaluationPeer::STATUT, $statut, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonCriteresEvaluation $commonCriteresEvaluation Object to remove from the list of results
     *
     * @return CommonCriteresEvaluationQuery The current query, for fluid interface
     */
    public function prune($commonCriteresEvaluation = null)
    {
        if ($commonCriteresEvaluation) {
            $this->addUsingAlias(CommonCriteresEvaluationPeer::ID, $commonCriteresEvaluation->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
