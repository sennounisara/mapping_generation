<?php


/**
 * Base class that represents a query for the 'inscrit_depot_selection_lots' table.
 *
 * 
 *
 * @method CommonInscritDepotSelectionLotsQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonInscritDepotSelectionLotsQuery orderByInscritId($order = Criteria::ASC) Order by the inscrit_id column
 * @method CommonInscritDepotSelectionLotsQuery orderByConsultationRef($order = Criteria::ASC) Order by the consultation_ref column
 * @method CommonInscritDepotSelectionLotsQuery orderByLots($order = Criteria::ASC) Order by the lots column
 *
 * @method CommonInscritDepotSelectionLotsQuery groupById() Group by the id column
 * @method CommonInscritDepotSelectionLotsQuery groupByInscritId() Group by the inscrit_id column
 * @method CommonInscritDepotSelectionLotsQuery groupByConsultationRef() Group by the consultation_ref column
 * @method CommonInscritDepotSelectionLotsQuery groupByLots() Group by the lots column
 *
 * @method CommonInscritDepotSelectionLotsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonInscritDepotSelectionLotsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonInscritDepotSelectionLotsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonInscritDepotSelectionLots findOne(PropelPDO $con = null) Return the first CommonInscritDepotSelectionLots matching the query
 * @method CommonInscritDepotSelectionLots findOneOrCreate(PropelPDO $con = null) Return the first CommonInscritDepotSelectionLots matching the query, or a new CommonInscritDepotSelectionLots object populated from the query conditions when no match is found
 *
 * @method CommonInscritDepotSelectionLots findOneByInscritId(int $inscrit_id) Return the first CommonInscritDepotSelectionLots filtered by the inscrit_id column
 * @method CommonInscritDepotSelectionLots findOneByConsultationRef(int $consultation_ref) Return the first CommonInscritDepotSelectionLots filtered by the consultation_ref column
 * @method CommonInscritDepotSelectionLots findOneByLots(string $lots) Return the first CommonInscritDepotSelectionLots filtered by the lots column
 *
 * @method array findById(int $id) Return CommonInscritDepotSelectionLots objects filtered by the id column
 * @method array findByInscritId(int $inscrit_id) Return CommonInscritDepotSelectionLots objects filtered by the inscrit_id column
 * @method array findByConsultationRef(int $consultation_ref) Return CommonInscritDepotSelectionLots objects filtered by the consultation_ref column
 * @method array findByLots(string $lots) Return CommonInscritDepotSelectionLots objects filtered by the lots column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonInscritDepotSelectionLotsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonInscritDepotSelectionLotsQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonInscritDepotSelectionLots', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonInscritDepotSelectionLotsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonInscritDepotSelectionLotsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonInscritDepotSelectionLotsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonInscritDepotSelectionLotsQuery) {
            return $criteria;
        }
        $query = new CommonInscritDepotSelectionLotsQuery();
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
     * @return   CommonInscritDepotSelectionLots|CommonInscritDepotSelectionLots[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonInscritDepotSelectionLotsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonInscritDepotSelectionLotsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonInscritDepotSelectionLots A model object, or null if the key is not found
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
     * @return                 CommonInscritDepotSelectionLots A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `inscrit_id`, `consultation_ref`, `lots` FROM `inscrit_depot_selection_lots` WHERE `id` = :p0';
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
            $obj = new CommonInscritDepotSelectionLots();
            $obj->hydrate($row);
            CommonInscritDepotSelectionLotsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonInscritDepotSelectionLots|CommonInscritDepotSelectionLots[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonInscritDepotSelectionLots[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonInscritDepotSelectionLotsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonInscritDepotSelectionLotsPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonInscritDepotSelectionLotsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonInscritDepotSelectionLotsPeer::ID, $keys, Criteria::IN);
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
     * @return CommonInscritDepotSelectionLotsQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonInscritDepotSelectionLotsPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonInscritDepotSelectionLotsPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonInscritDepotSelectionLotsPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the inscrit_id column
     *
     * Example usage:
     * <code>
     * $query->filterByInscritId(1234); // WHERE inscrit_id = 1234
     * $query->filterByInscritId(array(12, 34)); // WHERE inscrit_id IN (12, 34)
     * $query->filterByInscritId(array('min' => 12)); // WHERE inscrit_id >= 12
     * $query->filterByInscritId(array('max' => 12)); // WHERE inscrit_id <= 12
     * </code>
     *
     * @param     mixed $inscritId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInscritDepotSelectionLotsQuery The current query, for fluid interface
     */
    public function filterByInscritId($inscritId = null, $comparison = null)
    {
        if (is_array($inscritId)) {
            $useMinMax = false;
            if (isset($inscritId['min'])) {
                $this->addUsingAlias(CommonInscritDepotSelectionLotsPeer::INSCRIT_ID, $inscritId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($inscritId['max'])) {
                $this->addUsingAlias(CommonInscritDepotSelectionLotsPeer::INSCRIT_ID, $inscritId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonInscritDepotSelectionLotsPeer::INSCRIT_ID, $inscritId, $comparison);
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
     * @return CommonInscritDepotSelectionLotsQuery The current query, for fluid interface
     */
    public function filterByConsultationRef($consultationRef = null, $comparison = null)
    {
        if (is_array($consultationRef)) {
            $useMinMax = false;
            if (isset($consultationRef['min'])) {
                $this->addUsingAlias(CommonInscritDepotSelectionLotsPeer::CONSULTATION_REF, $consultationRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($consultationRef['max'])) {
                $this->addUsingAlias(CommonInscritDepotSelectionLotsPeer::CONSULTATION_REF, $consultationRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonInscritDepotSelectionLotsPeer::CONSULTATION_REF, $consultationRef, $comparison);
    }

    /**
     * Filter the query on the lots column
     *
     * Example usage:
     * <code>
     * $query->filterByLots('fooValue');   // WHERE lots = 'fooValue'
     * $query->filterByLots('%fooValue%'); // WHERE lots LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lots The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInscritDepotSelectionLotsQuery The current query, for fluid interface
     */
    public function filterByLots($lots = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lots)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lots)) {
                $lots = str_replace('*', '%', $lots);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonInscritDepotSelectionLotsPeer::LOTS, $lots, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonInscritDepotSelectionLots $commonInscritDepotSelectionLots Object to remove from the list of results
     *
     * @return CommonInscritDepotSelectionLotsQuery The current query, for fluid interface
     */
    public function prune($commonInscritDepotSelectionLots = null)
    {
        if ($commonInscritDepotSelectionLots) {
            $this->addUsingAlias(CommonInscritDepotSelectionLotsPeer::ID, $commonInscritDepotSelectionLots->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
