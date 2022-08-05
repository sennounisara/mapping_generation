<?php


/**
 * Base class that represents a query for the 'test_table' table.
 *
 * 
 *
 * @method CommonTestTableQuery orderByIdAuto($order = Criteria::ASC) Order by the id_auto column
 * @method CommonTestTableQuery orderByEncheres($order = Criteria::ASC) Order by the encheres column
 *
 * @method CommonTestTableQuery groupByIdAuto() Group by the id_auto column
 * @method CommonTestTableQuery groupByEncheres() Group by the encheres column
 *
 * @method CommonTestTableQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTestTableQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTestTableQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTestTable findOne(PropelPDO $con = null) Return the first CommonTestTable matching the query
 * @method CommonTestTable findOneOrCreate(PropelPDO $con = null) Return the first CommonTestTable matching the query, or a new CommonTestTable object populated from the query conditions when no match is found
 *
 * @method CommonTestTable findOneByEncheres(string $encheres) Return the first CommonTestTable filtered by the encheres column
 *
 * @method array findByIdAuto(int $id_auto) Return CommonTestTable objects filtered by the id_auto column
 * @method array findByEncheres(string $encheres) Return CommonTestTable objects filtered by the encheres column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTestTableQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTestTableQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTestTable', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTestTableQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTestTableQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTestTableQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTestTableQuery) {
            return $criteria;
        }
        $query = new CommonTestTableQuery();
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
     * @return   CommonTestTable|CommonTestTable[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTestTablePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTestTablePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTestTable A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdAuto($key, $con = null)
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
     * @return                 CommonTestTable A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_auto`, `encheres` FROM `test_table` WHERE `id_auto` = :p0';
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
            $obj = new CommonTestTable();
            $obj->hydrate($row);
            CommonTestTablePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonTestTable|CommonTestTable[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTestTable[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTestTableQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonTestTablePeer::ID_AUTO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTestTableQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonTestTablePeer::ID_AUTO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_auto column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAuto(1234); // WHERE id_auto = 1234
     * $query->filterByIdAuto(array(12, 34)); // WHERE id_auto IN (12, 34)
     * $query->filterByIdAuto(array('min' => 12)); // WHERE id_auto >= 12
     * $query->filterByIdAuto(array('max' => 12)); // WHERE id_auto <= 12
     * </code>
     *
     * @param     mixed $idAuto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTestTableQuery The current query, for fluid interface
     */
    public function filterByIdAuto($idAuto = null, $comparison = null)
    {
        if (is_array($idAuto)) {
            $useMinMax = false;
            if (isset($idAuto['min'])) {
                $this->addUsingAlias(CommonTestTablePeer::ID_AUTO, $idAuto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAuto['max'])) {
                $this->addUsingAlias(CommonTestTablePeer::ID_AUTO, $idAuto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTestTablePeer::ID_AUTO, $idAuto, $comparison);
    }

    /**
     * Filter the query on the encheres column
     *
     * Example usage:
     * <code>
     * $query->filterByEncheres('fooValue');   // WHERE encheres = 'fooValue'
     * $query->filterByEncheres('%fooValue%'); // WHERE encheres LIKE '%fooValue%'
     * </code>
     *
     * @param     string $encheres The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTestTableQuery The current query, for fluid interface
     */
    public function filterByEncheres($encheres = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($encheres)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $encheres)) {
                $encheres = str_replace('*', '%', $encheres);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTestTablePeer::ENCHERES, $encheres, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTestTable $commonTestTable Object to remove from the list of results
     *
     * @return CommonTestTableQuery The current query, for fluid interface
     */
    public function prune($commonTestTable = null)
    {
        if ($commonTestTable) {
            $this->addUsingAlias(CommonTestTablePeer::ID_AUTO, $commonTestTable->getIdAuto(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
