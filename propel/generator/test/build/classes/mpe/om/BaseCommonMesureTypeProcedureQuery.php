<?php


/**
 * Base class that represents a query for the 'Mesure_Type_Procedure' table.
 *
 * 
 *
 * @method CommonMesureTypeProcedureQuery orderByIdTagName($order = Criteria::ASC) Order by the id_tag_name column
 * @method CommonMesureTypeProcedureQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonMesureTypeProcedureQuery orderByLibelleTagName($order = Criteria::ASC) Order by the libelle_tag_name column
 *
 * @method CommonMesureTypeProcedureQuery groupByIdTagName() Group by the id_tag_name column
 * @method CommonMesureTypeProcedureQuery groupByOrganisme() Group by the organisme column
 * @method CommonMesureTypeProcedureQuery groupByLibelleTagName() Group by the libelle_tag_name column
 *
 * @method CommonMesureTypeProcedureQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonMesureTypeProcedureQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonMesureTypeProcedureQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonMesureTypeProcedure findOne(PropelPDO $con = null) Return the first CommonMesureTypeProcedure matching the query
 * @method CommonMesureTypeProcedure findOneOrCreate(PropelPDO $con = null) Return the first CommonMesureTypeProcedure matching the query, or a new CommonMesureTypeProcedure object populated from the query conditions when no match is found
 *
 * @method CommonMesureTypeProcedure findOneByIdTagName(int $id_tag_name) Return the first CommonMesureTypeProcedure filtered by the id_tag_name column
 * @method CommonMesureTypeProcedure findOneByOrganisme(string $organisme) Return the first CommonMesureTypeProcedure filtered by the organisme column
 * @method CommonMesureTypeProcedure findOneByLibelleTagName(string $libelle_tag_name) Return the first CommonMesureTypeProcedure filtered by the libelle_tag_name column
 *
 * @method array findByIdTagName(int $id_tag_name) Return CommonMesureTypeProcedure objects filtered by the id_tag_name column
 * @method array findByOrganisme(string $organisme) Return CommonMesureTypeProcedure objects filtered by the organisme column
 * @method array findByLibelleTagName(string $libelle_tag_name) Return CommonMesureTypeProcedure objects filtered by the libelle_tag_name column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonMesureTypeProcedureQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonMesureTypeProcedureQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonMesureTypeProcedure', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonMesureTypeProcedureQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonMesureTypeProcedureQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonMesureTypeProcedureQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonMesureTypeProcedureQuery) {
            return $criteria;
        }
        $query = new CommonMesureTypeProcedureQuery();
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
                         A Primary key composition: [$id_tag_name, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonMesureTypeProcedure|CommonMesureTypeProcedure[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonMesureTypeProcedurePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonMesureTypeProcedurePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonMesureTypeProcedure A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_tag_name`, `organisme`, `libelle_tag_name` FROM `Mesure_Type_Procedure` WHERE `id_tag_name` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonMesureTypeProcedure();
            $obj->hydrate($row);
            CommonMesureTypeProcedurePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonMesureTypeProcedure|CommonMesureTypeProcedure[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonMesureTypeProcedure[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonMesureTypeProcedureQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonMesureTypeProcedurePeer::ID_TAG_NAME, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonMesureTypeProcedurePeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonMesureTypeProcedureQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonMesureTypeProcedurePeer::ID_TAG_NAME, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonMesureTypeProcedurePeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the id_tag_name column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTagName(1234); // WHERE id_tag_name = 1234
     * $query->filterByIdTagName(array(12, 34)); // WHERE id_tag_name IN (12, 34)
     * $query->filterByIdTagName(array('min' => 12)); // WHERE id_tag_name >= 12
     * $query->filterByIdTagName(array('max' => 12)); // WHERE id_tag_name <= 12
     * </code>
     *
     * @param     mixed $idTagName The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMesureTypeProcedureQuery The current query, for fluid interface
     */
    public function filterByIdTagName($idTagName = null, $comparison = null)
    {
        if (is_array($idTagName)) {
            $useMinMax = false;
            if (isset($idTagName['min'])) {
                $this->addUsingAlias(CommonMesureTypeProcedurePeer::ID_TAG_NAME, $idTagName['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTagName['max'])) {
                $this->addUsingAlias(CommonMesureTypeProcedurePeer::ID_TAG_NAME, $idTagName['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonMesureTypeProcedurePeer::ID_TAG_NAME, $idTagName, $comparison);
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
     * @return CommonMesureTypeProcedureQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonMesureTypeProcedurePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the libelle_tag_name column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleTagName('fooValue');   // WHERE libelle_tag_name = 'fooValue'
     * $query->filterByLibelleTagName('%fooValue%'); // WHERE libelle_tag_name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleTagName The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMesureTypeProcedureQuery The current query, for fluid interface
     */
    public function filterByLibelleTagName($libelleTagName = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleTagName)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleTagName)) {
                $libelleTagName = str_replace('*', '%', $libelleTagName);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonMesureTypeProcedurePeer::LIBELLE_TAG_NAME, $libelleTagName, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonMesureTypeProcedure $commonMesureTypeProcedure Object to remove from the list of results
     *
     * @return CommonMesureTypeProcedureQuery The current query, for fluid interface
     */
    public function prune($commonMesureTypeProcedure = null)
    {
        if ($commonMesureTypeProcedure) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonMesureTypeProcedurePeer::ID_TAG_NAME), $commonMesureTypeProcedure->getIdTagName(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonMesureTypeProcedurePeer::ORGANISME), $commonMesureTypeProcedure->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
