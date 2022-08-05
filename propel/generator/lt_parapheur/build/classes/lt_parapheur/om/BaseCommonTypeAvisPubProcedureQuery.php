<?php


/**
 * Base class that represents a query for the 'Type_Avis_Pub_Procedure' table.
 *
 * 
 *
 * @method CommonTypeAvisPubProcedureQuery orderByIdTypeAvis($order = Criteria::ASC) Order by the id_type_avis column
 * @method CommonTypeAvisPubProcedureQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonTypeAvisPubProcedureQuery orderByIdTypeProcedure($order = Criteria::ASC) Order by the id_type_procedure column
 *
 * @method CommonTypeAvisPubProcedureQuery groupByIdTypeAvis() Group by the id_type_avis column
 * @method CommonTypeAvisPubProcedureQuery groupByOrganisme() Group by the organisme column
 * @method CommonTypeAvisPubProcedureQuery groupByIdTypeProcedure() Group by the id_type_procedure column
 *
 * @method CommonTypeAvisPubProcedureQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTypeAvisPubProcedureQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTypeAvisPubProcedureQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTypeAvisPubProcedure findOne(PropelPDO $con = null) Return the first CommonTypeAvisPubProcedure matching the query
 * @method CommonTypeAvisPubProcedure findOneOrCreate(PropelPDO $con = null) Return the first CommonTypeAvisPubProcedure matching the query, or a new CommonTypeAvisPubProcedure object populated from the query conditions when no match is found
 *
 * @method CommonTypeAvisPubProcedure findOneByIdTypeAvis(int $id_type_avis) Return the first CommonTypeAvisPubProcedure filtered by the id_type_avis column
 * @method CommonTypeAvisPubProcedure findOneByOrganisme(string $organisme) Return the first CommonTypeAvisPubProcedure filtered by the organisme column
 * @method CommonTypeAvisPubProcedure findOneByIdTypeProcedure(int $id_type_procedure) Return the first CommonTypeAvisPubProcedure filtered by the id_type_procedure column
 *
 * @method array findByIdTypeAvis(int $id_type_avis) Return CommonTypeAvisPubProcedure objects filtered by the id_type_avis column
 * @method array findByOrganisme(string $organisme) Return CommonTypeAvisPubProcedure objects filtered by the organisme column
 * @method array findByIdTypeProcedure(int $id_type_procedure) Return CommonTypeAvisPubProcedure objects filtered by the id_type_procedure column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTypeAvisPubProcedureQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTypeAvisPubProcedureQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTypeAvisPubProcedure', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTypeAvisPubProcedureQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTypeAvisPubProcedureQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTypeAvisPubProcedureQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTypeAvisPubProcedureQuery) {
            return $criteria;
        }
        $query = new CommonTypeAvisPubProcedureQuery();
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
     * $obj = $c->findPk(array(12, 34, 56), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query 
                         A Primary key composition: [$id_type_avis, $organisme, $id_type_procedure]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonTypeAvisPubProcedure|CommonTypeAvisPubProcedure[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTypeAvisPubProcedurePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTypeAvisPubProcedurePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTypeAvisPubProcedure A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_type_avis`, `organisme`, `id_type_procedure` FROM `Type_Avis_Pub_Procedure` WHERE `id_type_avis` = :p0 AND `organisme` = :p1 AND `id_type_procedure` = :p2';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);			
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonTypeAvisPubProcedure();
            $obj->hydrate($row);
            CommonTypeAvisPubProcedurePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return CommonTypeAvisPubProcedure|CommonTypeAvisPubProcedure[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTypeAvisPubProcedure[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTypeAvisPubProcedureQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonTypeAvisPubProcedurePeer::ID_TYPE_AVIS, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonTypeAvisPubProcedurePeer::ORGANISME, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(CommonTypeAvisPubProcedurePeer::ID_TYPE_PROCEDURE, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTypeAvisPubProcedureQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonTypeAvisPubProcedurePeer::ID_TYPE_AVIS, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonTypeAvisPubProcedurePeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(CommonTypeAvisPubProcedurePeer::ID_TYPE_PROCEDURE, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the id_type_avis column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTypeAvis(1234); // WHERE id_type_avis = 1234
     * $query->filterByIdTypeAvis(array(12, 34)); // WHERE id_type_avis IN (12, 34)
     * $query->filterByIdTypeAvis(array('min' => 12)); // WHERE id_type_avis >= 12
     * $query->filterByIdTypeAvis(array('max' => 12)); // WHERE id_type_avis <= 12
     * </code>
     *
     * @param     mixed $idTypeAvis The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeAvisPubProcedureQuery The current query, for fluid interface
     */
    public function filterByIdTypeAvis($idTypeAvis = null, $comparison = null)
    {
        if (is_array($idTypeAvis)) {
            $useMinMax = false;
            if (isset($idTypeAvis['min'])) {
                $this->addUsingAlias(CommonTypeAvisPubProcedurePeer::ID_TYPE_AVIS, $idTypeAvis['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeAvis['max'])) {
                $this->addUsingAlias(CommonTypeAvisPubProcedurePeer::ID_TYPE_AVIS, $idTypeAvis['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTypeAvisPubProcedurePeer::ID_TYPE_AVIS, $idTypeAvis, $comparison);
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
     * @return CommonTypeAvisPubProcedureQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTypeAvisPubProcedurePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the id_type_procedure column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTypeProcedure(1234); // WHERE id_type_procedure = 1234
     * $query->filterByIdTypeProcedure(array(12, 34)); // WHERE id_type_procedure IN (12, 34)
     * $query->filterByIdTypeProcedure(array('min' => 12)); // WHERE id_type_procedure >= 12
     * $query->filterByIdTypeProcedure(array('max' => 12)); // WHERE id_type_procedure <= 12
     * </code>
     *
     * @param     mixed $idTypeProcedure The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeAvisPubProcedureQuery The current query, for fluid interface
     */
    public function filterByIdTypeProcedure($idTypeProcedure = null, $comparison = null)
    {
        if (is_array($idTypeProcedure)) {
            $useMinMax = false;
            if (isset($idTypeProcedure['min'])) {
                $this->addUsingAlias(CommonTypeAvisPubProcedurePeer::ID_TYPE_PROCEDURE, $idTypeProcedure['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeProcedure['max'])) {
                $this->addUsingAlias(CommonTypeAvisPubProcedurePeer::ID_TYPE_PROCEDURE, $idTypeProcedure['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTypeAvisPubProcedurePeer::ID_TYPE_PROCEDURE, $idTypeProcedure, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTypeAvisPubProcedure $commonTypeAvisPubProcedure Object to remove from the list of results
     *
     * @return CommonTypeAvisPubProcedureQuery The current query, for fluid interface
     */
    public function prune($commonTypeAvisPubProcedure = null)
    {
        if ($commonTypeAvisPubProcedure) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonTypeAvisPubProcedurePeer::ID_TYPE_AVIS), $commonTypeAvisPubProcedure->getIdTypeAvis(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonTypeAvisPubProcedurePeer::ORGANISME), $commonTypeAvisPubProcedure->getOrganisme(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(CommonTypeAvisPubProcedurePeer::ID_TYPE_PROCEDURE), $commonTypeAvisPubProcedure->getIdTypeProcedure(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
