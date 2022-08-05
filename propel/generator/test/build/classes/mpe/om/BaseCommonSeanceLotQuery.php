<?php


/**
 * Base class that represents a query for the 'seance_lot' table.
 *
 * 
 *
 * @method CommonSeanceLotQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonSeanceLotQuery orderByIdSeance($order = Criteria::ASC) Order by the id_seance column
 * @method CommonSeanceLotQuery orderByTypeEnv($order = Criteria::ASC) Order by the type_env column
 * @method CommonSeanceLotQuery orderByLot($order = Criteria::ASC) Order by the lot column
 * @method CommonSeanceLotQuery orderByType($order = Criteria::ASC) Order by the type column
 *
 * @method CommonSeanceLotQuery groupById() Group by the id column
 * @method CommonSeanceLotQuery groupByIdSeance() Group by the id_seance column
 * @method CommonSeanceLotQuery groupByTypeEnv() Group by the type_env column
 * @method CommonSeanceLotQuery groupByLot() Group by the lot column
 * @method CommonSeanceLotQuery groupByType() Group by the type column
 *
 * @method CommonSeanceLotQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonSeanceLotQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonSeanceLotQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonSeanceLot findOne(PropelPDO $con = null) Return the first CommonSeanceLot matching the query
 * @method CommonSeanceLot findOneOrCreate(PropelPDO $con = null) Return the first CommonSeanceLot matching the query, or a new CommonSeanceLot object populated from the query conditions when no match is found
 *
 * @method CommonSeanceLot findOneByIdSeance(int $id_seance) Return the first CommonSeanceLot filtered by the id_seance column
 * @method CommonSeanceLot findOneByTypeEnv(string $type_env) Return the first CommonSeanceLot filtered by the type_env column
 * @method CommonSeanceLot findOneByLot(int $lot) Return the first CommonSeanceLot filtered by the lot column
 * @method CommonSeanceLot findOneByType(string $type) Return the first CommonSeanceLot filtered by the type column
 *
 * @method array findById(int $id) Return CommonSeanceLot objects filtered by the id column
 * @method array findByIdSeance(int $id_seance) Return CommonSeanceLot objects filtered by the id_seance column
 * @method array findByTypeEnv(string $type_env) Return CommonSeanceLot objects filtered by the type_env column
 * @method array findByLot(int $lot) Return CommonSeanceLot objects filtered by the lot column
 * @method array findByType(string $type) Return CommonSeanceLot objects filtered by the type column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonSeanceLotQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonSeanceLotQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonSeanceLot', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonSeanceLotQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonSeanceLotQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonSeanceLotQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonSeanceLotQuery) {
            return $criteria;
        }
        $query = new CommonSeanceLotQuery();
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
     * @return   CommonSeanceLot|CommonSeanceLot[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonSeanceLotPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonSeanceLotPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonSeanceLot A model object, or null if the key is not found
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
     * @return                 CommonSeanceLot A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_seance`, `type_env`, `lot`, `type` FROM `seance_lot` WHERE `id` = :p0';
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
            $obj = new CommonSeanceLot();
            $obj->hydrate($row);
            CommonSeanceLotPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonSeanceLot|CommonSeanceLot[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonSeanceLot[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonSeanceLotQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonSeanceLotPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonSeanceLotQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonSeanceLotPeer::ID, $keys, Criteria::IN);
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
     * @return CommonSeanceLotQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonSeanceLotPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonSeanceLotPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonSeanceLotPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_seance column
     *
     * Example usage:
     * <code>
     * $query->filterByIdSeance(1234); // WHERE id_seance = 1234
     * $query->filterByIdSeance(array(12, 34)); // WHERE id_seance IN (12, 34)
     * $query->filterByIdSeance(array('min' => 12)); // WHERE id_seance >= 12
     * $query->filterByIdSeance(array('max' => 12)); // WHERE id_seance <= 12
     * </code>
     *
     * @param     mixed $idSeance The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSeanceLotQuery The current query, for fluid interface
     */
    public function filterByIdSeance($idSeance = null, $comparison = null)
    {
        if (is_array($idSeance)) {
            $useMinMax = false;
            if (isset($idSeance['min'])) {
                $this->addUsingAlias(CommonSeanceLotPeer::ID_SEANCE, $idSeance['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idSeance['max'])) {
                $this->addUsingAlias(CommonSeanceLotPeer::ID_SEANCE, $idSeance['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonSeanceLotPeer::ID_SEANCE, $idSeance, $comparison);
    }

    /**
     * Filter the query on the type_env column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeEnv('fooValue');   // WHERE type_env = 'fooValue'
     * $query->filterByTypeEnv('%fooValue%'); // WHERE type_env LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeEnv The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSeanceLotQuery The current query, for fluid interface
     */
    public function filterByTypeEnv($typeEnv = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeEnv)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeEnv)) {
                $typeEnv = str_replace('*', '%', $typeEnv);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonSeanceLotPeer::TYPE_ENV, $typeEnv, $comparison);
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
     * @return CommonSeanceLotQuery The current query, for fluid interface
     */
    public function filterByLot($lot = null, $comparison = null)
    {
        if (is_array($lot)) {
            $useMinMax = false;
            if (isset($lot['min'])) {
                $this->addUsingAlias(CommonSeanceLotPeer::LOT, $lot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lot['max'])) {
                $this->addUsingAlias(CommonSeanceLotPeer::LOT, $lot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonSeanceLotPeer::LOT, $lot, $comparison);
    }

    /**
     * Filter the query on the type column
     *
     * Example usage:
     * <code>
     * $query->filterByType('fooValue');   // WHERE type = 'fooValue'
     * $query->filterByType('%fooValue%'); // WHERE type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $type The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSeanceLotQuery The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($type)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $type)) {
                $type = str_replace('*', '%', $type);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonSeanceLotPeer::TYPE, $type, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonSeanceLot $commonSeanceLot Object to remove from the list of results
     *
     * @return CommonSeanceLotQuery The current query, for fluid interface
     */
    public function prune($commonSeanceLot = null)
    {
        if ($commonSeanceLot) {
            $this->addUsingAlias(CommonSeanceLotPeer::ID, $commonSeanceLot->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
