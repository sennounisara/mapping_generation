<?php


/**
 * Base class that represents a query for the 'EchangeTypeMessage' table.
 *
 * 
 *
 * @method CommonEchangeTypeMessageQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonEchangeTypeMessageQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method CommonEchangeTypeMessageQuery orderByCorps($order = Criteria::ASC) Order by the corps column
 *
 * @method CommonEchangeTypeMessageQuery groupById() Group by the id column
 * @method CommonEchangeTypeMessageQuery groupByCode() Group by the code column
 * @method CommonEchangeTypeMessageQuery groupByCorps() Group by the corps column
 *
 * @method CommonEchangeTypeMessageQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonEchangeTypeMessageQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonEchangeTypeMessageQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonEchangeTypeMessage findOne(PropelPDO $con = null) Return the first CommonEchangeTypeMessage matching the query
 * @method CommonEchangeTypeMessage findOneOrCreate(PropelPDO $con = null) Return the first CommonEchangeTypeMessage matching the query, or a new CommonEchangeTypeMessage object populated from the query conditions when no match is found
 *
 * @method CommonEchangeTypeMessage findOneByCode(string $code) Return the first CommonEchangeTypeMessage filtered by the code column
 * @method CommonEchangeTypeMessage findOneByCorps(string $corps) Return the first CommonEchangeTypeMessage filtered by the corps column
 *
 * @method array findById(int $id) Return CommonEchangeTypeMessage objects filtered by the id column
 * @method array findByCode(string $code) Return CommonEchangeTypeMessage objects filtered by the code column
 * @method array findByCorps(string $corps) Return CommonEchangeTypeMessage objects filtered by the corps column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonEchangeTypeMessageQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonEchangeTypeMessageQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonEchangeTypeMessage', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonEchangeTypeMessageQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonEchangeTypeMessageQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonEchangeTypeMessageQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonEchangeTypeMessageQuery) {
            return $criteria;
        }
        $query = new CommonEchangeTypeMessageQuery();
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
     * @return   CommonEchangeTypeMessage|CommonEchangeTypeMessage[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonEchangeTypeMessagePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonEchangeTypeMessagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonEchangeTypeMessage A model object, or null if the key is not found
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
     * @return                 CommonEchangeTypeMessage A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `code`, `corps` FROM `EchangeTypeMessage` WHERE `id` = :p0';
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
            $obj = new CommonEchangeTypeMessage();
            $obj->hydrate($row);
            CommonEchangeTypeMessagePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonEchangeTypeMessage|CommonEchangeTypeMessage[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonEchangeTypeMessage[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonEchangeTypeMessageQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonEchangeTypeMessagePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonEchangeTypeMessageQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonEchangeTypeMessagePeer::ID, $keys, Criteria::IN);
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
     * @return CommonEchangeTypeMessageQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonEchangeTypeMessagePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonEchangeTypeMessagePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEchangeTypeMessagePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the code column
     *
     * Example usage:
     * <code>
     * $query->filterByCode('fooValue');   // WHERE code = 'fooValue'
     * $query->filterByCode('%fooValue%'); // WHERE code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $code The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEchangeTypeMessageQuery The current query, for fluid interface
     */
    public function filterByCode($code = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($code)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $code)) {
                $code = str_replace('*', '%', $code);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEchangeTypeMessagePeer::CODE, $code, $comparison);
    }

    /**
     * Filter the query on the corps column
     *
     * Example usage:
     * <code>
     * $query->filterByCorps('fooValue');   // WHERE corps = 'fooValue'
     * $query->filterByCorps('%fooValue%'); // WHERE corps LIKE '%fooValue%'
     * </code>
     *
     * @param     string $corps The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEchangeTypeMessageQuery The current query, for fluid interface
     */
    public function filterByCorps($corps = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($corps)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $corps)) {
                $corps = str_replace('*', '%', $corps);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEchangeTypeMessagePeer::CORPS, $corps, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonEchangeTypeMessage $commonEchangeTypeMessage Object to remove from the list of results
     *
     * @return CommonEchangeTypeMessageQuery The current query, for fluid interface
     */
    public function prune($commonEchangeTypeMessage = null)
    {
        if ($commonEchangeTypeMessage) {
            $this->addUsingAlias(CommonEchangeTypeMessagePeer::ID, $commonEchangeTypeMessage->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
