<?php


/**
 * Base class that represents a query for the 'LieuExecution' table.
 *
 * 
 *
 * @method CommonLieuExecutionQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonLieuExecutionQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method CommonLieuExecutionQuery orderByCodepostalAnm($order = Criteria::ASC) Order by the CodePostal_ANM column
 *
 * @method CommonLieuExecutionQuery groupById() Group by the id column
 * @method CommonLieuExecutionQuery groupByLibelle() Group by the libelle column
 * @method CommonLieuExecutionQuery groupByCodepostalAnm() Group by the CodePostal_ANM column
 *
 * @method CommonLieuExecutionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonLieuExecutionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonLieuExecutionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonLieuExecution findOne(PropelPDO $con = null) Return the first CommonLieuExecution matching the query
 * @method CommonLieuExecution findOneOrCreate(PropelPDO $con = null) Return the first CommonLieuExecution matching the query, or a new CommonLieuExecution object populated from the query conditions when no match is found
 *
 * @method CommonLieuExecution findOneByLibelle(string $libelle) Return the first CommonLieuExecution filtered by the libelle column
 * @method CommonLieuExecution findOneByCodepostalAnm(string $CodePostal_ANM) Return the first CommonLieuExecution filtered by the CodePostal_ANM column
 *
 * @method array findById(int $id) Return CommonLieuExecution objects filtered by the id column
 * @method array findByLibelle(string $libelle) Return CommonLieuExecution objects filtered by the libelle column
 * @method array findByCodepostalAnm(string $CodePostal_ANM) Return CommonLieuExecution objects filtered by the CodePostal_ANM column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonLieuExecutionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonLieuExecutionQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonLieuExecution', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonLieuExecutionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonLieuExecutionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonLieuExecutionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonLieuExecutionQuery) {
            return $criteria;
        }
        $query = new CommonLieuExecutionQuery();
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
     * @return   CommonLieuExecution|CommonLieuExecution[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonLieuExecutionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonLieuExecutionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonLieuExecution A model object, or null if the key is not found
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
     * @return                 CommonLieuExecution A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `libelle`, `CodePostal_ANM` FROM `LieuExecution` WHERE `id` = :p0';
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
            $obj = new CommonLieuExecution();
            $obj->hydrate($row);
            CommonLieuExecutionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonLieuExecution|CommonLieuExecution[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonLieuExecution[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonLieuExecutionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonLieuExecutionPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonLieuExecutionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonLieuExecutionPeer::ID, $keys, Criteria::IN);
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
     * @return CommonLieuExecutionQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonLieuExecutionPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonLieuExecutionPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonLieuExecutionPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelle('fooValue');   // WHERE libelle = 'fooValue'
     * $query->filterByLibelle('%fooValue%'); // WHERE libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonLieuExecutionQuery The current query, for fluid interface
     */
    public function filterByLibelle($libelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelle)) {
                $libelle = str_replace('*', '%', $libelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonLieuExecutionPeer::LIBELLE, $libelle, $comparison);
    }

    /**
     * Filter the query on the CodePostal_ANM column
     *
     * Example usage:
     * <code>
     * $query->filterByCodepostalAnm('fooValue');   // WHERE CodePostal_ANM = 'fooValue'
     * $query->filterByCodepostalAnm('%fooValue%'); // WHERE CodePostal_ANM LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codepostalAnm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonLieuExecutionQuery The current query, for fluid interface
     */
    public function filterByCodepostalAnm($codepostalAnm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codepostalAnm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codepostalAnm)) {
                $codepostalAnm = str_replace('*', '%', $codepostalAnm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonLieuExecutionPeer::CODEPOSTAL_ANM, $codepostalAnm, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonLieuExecution $commonLieuExecution Object to remove from the list of results
     *
     * @return CommonLieuExecutionQuery The current query, for fluid interface
     */
    public function prune($commonLieuExecution = null)
    {
        if ($commonLieuExecution) {
            $this->addUsingAlias(CommonLieuExecutionPeer::ID, $commonLieuExecution->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
