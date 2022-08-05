<?php


/**
 * Base class that represents a query for the 'T_Traduction' table.
 *
 * 
 *
 * @method CommonTTraductionQuery orderByLangue($order = Criteria::ASC) Order by the langue column
 * @method CommonTTraductionQuery orderByIdLibelle($order = Criteria::ASC) Order by the id_libelle column
 * @method CommonTTraductionQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 *
 * @method CommonTTraductionQuery groupByLangue() Group by the langue column
 * @method CommonTTraductionQuery groupByIdLibelle() Group by the id_libelle column
 * @method CommonTTraductionQuery groupByLibelle() Group by the libelle column
 *
 * @method CommonTTraductionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTTraductionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTTraductionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTTraduction findOne(PropelPDO $con = null) Return the first CommonTTraduction matching the query
 * @method CommonTTraduction findOneOrCreate(PropelPDO $con = null) Return the first CommonTTraduction matching the query, or a new CommonTTraduction object populated from the query conditions when no match is found
 *
 * @method CommonTTraduction findOneByLangue(string $langue) Return the first CommonTTraduction filtered by the langue column
 * @method CommonTTraduction findOneByIdLibelle(int $id_libelle) Return the first CommonTTraduction filtered by the id_libelle column
 * @method CommonTTraduction findOneByLibelle(string $libelle) Return the first CommonTTraduction filtered by the libelle column
 *
 * @method array findByLangue(string $langue) Return CommonTTraduction objects filtered by the langue column
 * @method array findByIdLibelle(int $id_libelle) Return CommonTTraduction objects filtered by the id_libelle column
 * @method array findByLibelle(string $libelle) Return CommonTTraduction objects filtered by the libelle column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTTraductionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTTraductionQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTTraduction', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTTraductionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTTraductionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTTraductionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTTraductionQuery) {
            return $criteria;
        }
        $query = new CommonTTraductionQuery();
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
                         A Primary key composition: [$langue, $id_libelle]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonTTraduction|CommonTTraduction[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTTraductionPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTTraductionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTTraduction A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `langue`, `id_libelle`, `libelle` FROM `T_Traduction` WHERE `langue` = :p0 AND `id_libelle` = :p1';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonTTraduction();
            $obj->hydrate($row);
            CommonTTraductionPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonTTraduction|CommonTTraduction[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTTraduction[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTTraductionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonTTraductionPeer::LANGUE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonTTraductionPeer::ID_LIBELLE, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTTraductionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonTTraductionPeer::LANGUE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonTTraductionPeer::ID_LIBELLE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the langue column
     *
     * Example usage:
     * <code>
     * $query->filterByLangue('fooValue');   // WHERE langue = 'fooValue'
     * $query->filterByLangue('%fooValue%'); // WHERE langue LIKE '%fooValue%'
     * </code>
     *
     * @param     string $langue The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTTraductionQuery The current query, for fluid interface
     */
    public function filterByLangue($langue = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($langue)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $langue)) {
                $langue = str_replace('*', '%', $langue);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTTraductionPeer::LANGUE, $langue, $comparison);
    }

    /**
     * Filter the query on the id_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByIdLibelle(1234); // WHERE id_libelle = 1234
     * $query->filterByIdLibelle(array(12, 34)); // WHERE id_libelle IN (12, 34)
     * $query->filterByIdLibelle(array('min' => 12)); // WHERE id_libelle >= 12
     * $query->filterByIdLibelle(array('max' => 12)); // WHERE id_libelle <= 12
     * </code>
     *
     * @param     mixed $idLibelle The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTTraductionQuery The current query, for fluid interface
     */
    public function filterByIdLibelle($idLibelle = null, $comparison = null)
    {
        if (is_array($idLibelle)) {
            $useMinMax = false;
            if (isset($idLibelle['min'])) {
                $this->addUsingAlias(CommonTTraductionPeer::ID_LIBELLE, $idLibelle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idLibelle['max'])) {
                $this->addUsingAlias(CommonTTraductionPeer::ID_LIBELLE, $idLibelle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTTraductionPeer::ID_LIBELLE, $idLibelle, $comparison);
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
     * @return CommonTTraductionQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTTraductionPeer::LIBELLE, $libelle, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTTraduction $commonTTraduction Object to remove from the list of results
     *
     * @return CommonTTraductionQuery The current query, for fluid interface
     */
    public function prune($commonTTraduction = null)
    {
        if ($commonTTraduction) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonTTraductionPeer::LANGUE), $commonTTraduction->getLangue(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonTTraductionPeer::ID_LIBELLE), $commonTTraduction->getIdLibelle(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
