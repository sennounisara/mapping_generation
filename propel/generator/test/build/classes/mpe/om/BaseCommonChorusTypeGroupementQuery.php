<?php


/**
 * Base class that represents a query for the 'Chorus_Type_Groupement' table.
 *
 * 
 *
 * @method CommonChorusTypeGroupementQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonChorusTypeGroupementQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonChorusTypeGroupementQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method CommonChorusTypeGroupementQuery orderByCode($order = Criteria::ASC) Order by the code column
 *
 * @method CommonChorusTypeGroupementQuery groupById() Group by the id column
 * @method CommonChorusTypeGroupementQuery groupByOrganisme() Group by the organisme column
 * @method CommonChorusTypeGroupementQuery groupByLibelle() Group by the libelle column
 * @method CommonChorusTypeGroupementQuery groupByCode() Group by the code column
 *
 * @method CommonChorusTypeGroupementQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonChorusTypeGroupementQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonChorusTypeGroupementQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonChorusTypeGroupement findOne(PropelPDO $con = null) Return the first CommonChorusTypeGroupement matching the query
 * @method CommonChorusTypeGroupement findOneOrCreate(PropelPDO $con = null) Return the first CommonChorusTypeGroupement matching the query, or a new CommonChorusTypeGroupement object populated from the query conditions when no match is found
 *
 * @method CommonChorusTypeGroupement findOneById(int $id) Return the first CommonChorusTypeGroupement filtered by the id column
 * @method CommonChorusTypeGroupement findOneByOrganisme(string $organisme) Return the first CommonChorusTypeGroupement filtered by the organisme column
 * @method CommonChorusTypeGroupement findOneByLibelle(string $libelle) Return the first CommonChorusTypeGroupement filtered by the libelle column
 * @method CommonChorusTypeGroupement findOneByCode(string $code) Return the first CommonChorusTypeGroupement filtered by the code column
 *
 * @method array findById(int $id) Return CommonChorusTypeGroupement objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonChorusTypeGroupement objects filtered by the organisme column
 * @method array findByLibelle(string $libelle) Return CommonChorusTypeGroupement objects filtered by the libelle column
 * @method array findByCode(string $code) Return CommonChorusTypeGroupement objects filtered by the code column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonChorusTypeGroupementQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonChorusTypeGroupementQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonChorusTypeGroupement', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonChorusTypeGroupementQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonChorusTypeGroupementQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonChorusTypeGroupementQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonChorusTypeGroupementQuery) {
            return $criteria;
        }
        $query = new CommonChorusTypeGroupementQuery();
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
     * @return   CommonChorusTypeGroupement|CommonChorusTypeGroupement[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonChorusTypeGroupementPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonChorusTypeGroupementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonChorusTypeGroupement A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `libelle`, `code` FROM `Chorus_Type_Groupement` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonChorusTypeGroupement();
            $obj->hydrate($row);
            CommonChorusTypeGroupementPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonChorusTypeGroupement|CommonChorusTypeGroupement[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonChorusTypeGroupement[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonChorusTypeGroupementQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonChorusTypeGroupementPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonChorusTypeGroupementPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonChorusTypeGroupementQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonChorusTypeGroupementPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonChorusTypeGroupementPeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonChorusTypeGroupementQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonChorusTypeGroupementPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonChorusTypeGroupementPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonChorusTypeGroupementPeer::ID, $id, $comparison);
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
     * @return CommonChorusTypeGroupementQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonChorusTypeGroupementPeer::ORGANISME, $organisme, $comparison);
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
     * @return CommonChorusTypeGroupementQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonChorusTypeGroupementPeer::LIBELLE, $libelle, $comparison);
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
     * @return CommonChorusTypeGroupementQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonChorusTypeGroupementPeer::CODE, $code, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonChorusTypeGroupement $commonChorusTypeGroupement Object to remove from the list of results
     *
     * @return CommonChorusTypeGroupementQuery The current query, for fluid interface
     */
    public function prune($commonChorusTypeGroupement = null)
    {
        if ($commonChorusTypeGroupement) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonChorusTypeGroupementPeer::ID), $commonChorusTypeGroupement->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonChorusTypeGroupementPeer::ORGANISME), $commonChorusTypeGroupement->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
