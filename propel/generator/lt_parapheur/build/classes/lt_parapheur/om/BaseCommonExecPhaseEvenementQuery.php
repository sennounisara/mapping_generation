<?php


/**
 * Base class that represents a query for the 'exec_phase_evenement' table.
 *
 * 
 *
 * @method CommonExecPhaseEvenementQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonExecPhaseEvenementQuery orderByPhaseId($order = Criteria::ASC) Order by the phase_id column
 * @method CommonExecPhaseEvenementQuery orderByEventId($order = Criteria::ASC) Order by the event_id column
 *
 * @method CommonExecPhaseEvenementQuery groupById() Group by the id column
 * @method CommonExecPhaseEvenementQuery groupByPhaseId() Group by the phase_id column
 * @method CommonExecPhaseEvenementQuery groupByEventId() Group by the event_id column
 *
 * @method CommonExecPhaseEvenementQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonExecPhaseEvenementQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonExecPhaseEvenementQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonExecPhaseEvenement findOne(PropelPDO $con = null) Return the first CommonExecPhaseEvenement matching the query
 * @method CommonExecPhaseEvenement findOneOrCreate(PropelPDO $con = null) Return the first CommonExecPhaseEvenement matching the query, or a new CommonExecPhaseEvenement object populated from the query conditions when no match is found
 *
 * @method CommonExecPhaseEvenement findOneByPhaseId(int $phase_id) Return the first CommonExecPhaseEvenement filtered by the phase_id column
 * @method CommonExecPhaseEvenement findOneByEventId(int $event_id) Return the first CommonExecPhaseEvenement filtered by the event_id column
 *
 * @method array findById(int $id) Return CommonExecPhaseEvenement objects filtered by the id column
 * @method array findByPhaseId(int $phase_id) Return CommonExecPhaseEvenement objects filtered by the phase_id column
 * @method array findByEventId(int $event_id) Return CommonExecPhaseEvenement objects filtered by the event_id column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonExecPhaseEvenementQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonExecPhaseEvenementQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonExecPhaseEvenement', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonExecPhaseEvenementQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonExecPhaseEvenementQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonExecPhaseEvenementQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonExecPhaseEvenementQuery) {
            return $criteria;
        }
        $query = new CommonExecPhaseEvenementQuery();
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
     * @return   CommonExecPhaseEvenement|CommonExecPhaseEvenement[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonExecPhaseEvenementPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonExecPhaseEvenementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonExecPhaseEvenement A model object, or null if the key is not found
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
     * @return                 CommonExecPhaseEvenement A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `phase_id`, `event_id` FROM `exec_phase_evenement` WHERE `id` = :p0';
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
            $obj = new CommonExecPhaseEvenement();
            $obj->hydrate($row);
            CommonExecPhaseEvenementPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonExecPhaseEvenement|CommonExecPhaseEvenement[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonExecPhaseEvenement[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonExecPhaseEvenementQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonExecPhaseEvenementPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonExecPhaseEvenementQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonExecPhaseEvenementPeer::ID, $keys, Criteria::IN);
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
     * @return CommonExecPhaseEvenementQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonExecPhaseEvenementPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonExecPhaseEvenementPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPhaseEvenementPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the phase_id column
     *
     * Example usage:
     * <code>
     * $query->filterByPhaseId(1234); // WHERE phase_id = 1234
     * $query->filterByPhaseId(array(12, 34)); // WHERE phase_id IN (12, 34)
     * $query->filterByPhaseId(array('min' => 12)); // WHERE phase_id >= 12
     * $query->filterByPhaseId(array('max' => 12)); // WHERE phase_id <= 12
     * </code>
     *
     * @param     mixed $phaseId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPhaseEvenementQuery The current query, for fluid interface
     */
    public function filterByPhaseId($phaseId = null, $comparison = null)
    {
        if (is_array($phaseId)) {
            $useMinMax = false;
            if (isset($phaseId['min'])) {
                $this->addUsingAlias(CommonExecPhaseEvenementPeer::PHASE_ID, $phaseId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($phaseId['max'])) {
                $this->addUsingAlias(CommonExecPhaseEvenementPeer::PHASE_ID, $phaseId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPhaseEvenementPeer::PHASE_ID, $phaseId, $comparison);
    }

    /**
     * Filter the query on the event_id column
     *
     * Example usage:
     * <code>
     * $query->filterByEventId(1234); // WHERE event_id = 1234
     * $query->filterByEventId(array(12, 34)); // WHERE event_id IN (12, 34)
     * $query->filterByEventId(array('min' => 12)); // WHERE event_id >= 12
     * $query->filterByEventId(array('max' => 12)); // WHERE event_id <= 12
     * </code>
     *
     * @param     mixed $eventId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPhaseEvenementQuery The current query, for fluid interface
     */
    public function filterByEventId($eventId = null, $comparison = null)
    {
        if (is_array($eventId)) {
            $useMinMax = false;
            if (isset($eventId['min'])) {
                $this->addUsingAlias(CommonExecPhaseEvenementPeer::EVENT_ID, $eventId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($eventId['max'])) {
                $this->addUsingAlias(CommonExecPhaseEvenementPeer::EVENT_ID, $eventId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPhaseEvenementPeer::EVENT_ID, $eventId, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonExecPhaseEvenement $commonExecPhaseEvenement Object to remove from the list of results
     *
     * @return CommonExecPhaseEvenementQuery The current query, for fluid interface
     */
    public function prune($commonExecPhaseEvenement = null)
    {
        if ($commonExecPhaseEvenement) {
            $this->addUsingAlias(CommonExecPhaseEvenementPeer::ID, $commonExecPhaseEvenement->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
