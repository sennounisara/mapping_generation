<?php


/**
 * Base class that represents a query for the 'estimation_confidentielle' table.
 *
 * 
 *
 * @method CommonEstimationConfidentielleQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonEstimationConfidentielleQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonEstimationConfidentielleQuery orderByConsultationRef($order = Criteria::ASC) Order by the consultation_ref column
 * @method CommonEstimationConfidentielleQuery orderByLot($order = Criteria::ASC) Order by the lot column
 * @method CommonEstimationConfidentielleQuery orderByMontant($order = Criteria::ASC) Order by the montant column
 *
 * @method CommonEstimationConfidentielleQuery groupById() Group by the id column
 * @method CommonEstimationConfidentielleQuery groupByOrganisme() Group by the organisme column
 * @method CommonEstimationConfidentielleQuery groupByConsultationRef() Group by the consultation_ref column
 * @method CommonEstimationConfidentielleQuery groupByLot() Group by the lot column
 * @method CommonEstimationConfidentielleQuery groupByMontant() Group by the montant column
 *
 * @method CommonEstimationConfidentielleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonEstimationConfidentielleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonEstimationConfidentielleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonEstimationConfidentielle findOne(PropelPDO $con = null) Return the first CommonEstimationConfidentielle matching the query
 * @method CommonEstimationConfidentielle findOneOrCreate(PropelPDO $con = null) Return the first CommonEstimationConfidentielle matching the query, or a new CommonEstimationConfidentielle object populated from the query conditions when no match is found
 *
 * @method CommonEstimationConfidentielle findOneByOrganisme(string $organisme) Return the first CommonEstimationConfidentielle filtered by the organisme column
 * @method CommonEstimationConfidentielle findOneByConsultationRef(int $consultation_ref) Return the first CommonEstimationConfidentielle filtered by the consultation_ref column
 * @method CommonEstimationConfidentielle findOneByLot(int $lot) Return the first CommonEstimationConfidentielle filtered by the lot column
 * @method CommonEstimationConfidentielle findOneByMontant(string $montant) Return the first CommonEstimationConfidentielle filtered by the montant column
 *
 * @method array findById(int $id) Return CommonEstimationConfidentielle objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonEstimationConfidentielle objects filtered by the organisme column
 * @method array findByConsultationRef(int $consultation_ref) Return CommonEstimationConfidentielle objects filtered by the consultation_ref column
 * @method array findByLot(int $lot) Return CommonEstimationConfidentielle objects filtered by the lot column
 * @method array findByMontant(string $montant) Return CommonEstimationConfidentielle objects filtered by the montant column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonEstimationConfidentielleQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonEstimationConfidentielleQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonEstimationConfidentielle', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonEstimationConfidentielleQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonEstimationConfidentielleQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonEstimationConfidentielleQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonEstimationConfidentielleQuery) {
            return $criteria;
        }
        $query = new CommonEstimationConfidentielleQuery();
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
     * @return   CommonEstimationConfidentielle|CommonEstimationConfidentielle[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonEstimationConfidentiellePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonEstimationConfidentiellePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonEstimationConfidentielle A model object, or null if the key is not found
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
     * @return                 CommonEstimationConfidentielle A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `consultation_ref`, `lot`, `montant` FROM `estimation_confidentielle` WHERE `id` = :p0';
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
            $obj = new CommonEstimationConfidentielle();
            $obj->hydrate($row);
            CommonEstimationConfidentiellePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonEstimationConfidentielle|CommonEstimationConfidentielle[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonEstimationConfidentielle[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonEstimationConfidentielleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonEstimationConfidentiellePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonEstimationConfidentielleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonEstimationConfidentiellePeer::ID, $keys, Criteria::IN);
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
     * @return CommonEstimationConfidentielleQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonEstimationConfidentiellePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonEstimationConfidentiellePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEstimationConfidentiellePeer::ID, $id, $comparison);
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
     * @return CommonEstimationConfidentielleQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEstimationConfidentiellePeer::ORGANISME, $organisme, $comparison);
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
     * @return CommonEstimationConfidentielleQuery The current query, for fluid interface
     */
    public function filterByConsultationRef($consultationRef = null, $comparison = null)
    {
        if (is_array($consultationRef)) {
            $useMinMax = false;
            if (isset($consultationRef['min'])) {
                $this->addUsingAlias(CommonEstimationConfidentiellePeer::CONSULTATION_REF, $consultationRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($consultationRef['max'])) {
                $this->addUsingAlias(CommonEstimationConfidentiellePeer::CONSULTATION_REF, $consultationRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEstimationConfidentiellePeer::CONSULTATION_REF, $consultationRef, $comparison);
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
     * @return CommonEstimationConfidentielleQuery The current query, for fluid interface
     */
    public function filterByLot($lot = null, $comparison = null)
    {
        if (is_array($lot)) {
            $useMinMax = false;
            if (isset($lot['min'])) {
                $this->addUsingAlias(CommonEstimationConfidentiellePeer::LOT, $lot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lot['max'])) {
                $this->addUsingAlias(CommonEstimationConfidentiellePeer::LOT, $lot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEstimationConfidentiellePeer::LOT, $lot, $comparison);
    }

    /**
     * Filter the query on the montant column
     *
     * Example usage:
     * <code>
     * $query->filterByMontant('fooValue');   // WHERE montant = 'fooValue'
     * $query->filterByMontant('%fooValue%'); // WHERE montant LIKE '%fooValue%'
     * </code>
     *
     * @param     string $montant The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEstimationConfidentielleQuery The current query, for fluid interface
     */
    public function filterByMontant($montant = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($montant)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $montant)) {
                $montant = str_replace('*', '%', $montant);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEstimationConfidentiellePeer::MONTANT, $montant, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonEstimationConfidentielle $commonEstimationConfidentielle Object to remove from the list of results
     *
     * @return CommonEstimationConfidentielleQuery The current query, for fluid interface
     */
    public function prune($commonEstimationConfidentielle = null)
    {
        if ($commonEstimationConfidentielle) {
            $this->addUsingAlias(CommonEstimationConfidentiellePeer::ID, $commonEstimationConfidentielle->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
