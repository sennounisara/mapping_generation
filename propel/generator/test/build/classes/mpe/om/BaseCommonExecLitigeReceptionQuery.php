<?php


/**
 * Base class that represents a query for the 'exec_litige_reception' table.
 *
 * 
 *
 * @method CommonExecLitigeReceptionQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonExecLitigeReceptionQuery orderByIdLitige($order = Criteria::ASC) Order by the id_litige column
 * @method CommonExecLitigeReceptionQuery orderByIdReception($order = Criteria::ASC) Order by the id_reception column
 *
 * @method CommonExecLitigeReceptionQuery groupById() Group by the id column
 * @method CommonExecLitigeReceptionQuery groupByIdLitige() Group by the id_litige column
 * @method CommonExecLitigeReceptionQuery groupByIdReception() Group by the id_reception column
 *
 * @method CommonExecLitigeReceptionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonExecLitigeReceptionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonExecLitigeReceptionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonExecLitigeReceptionQuery leftJoinCommonExecReceptionRelatedByIdReception($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecReceptionRelatedByIdReception relation
 * @method CommonExecLitigeReceptionQuery rightJoinCommonExecReceptionRelatedByIdReception($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecReceptionRelatedByIdReception relation
 * @method CommonExecLitigeReceptionQuery innerJoinCommonExecReceptionRelatedByIdReception($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecReceptionRelatedByIdReception relation
 *
 * @method CommonExecLitigeReceptionQuery leftJoinCommonExecReceptionRelatedByIdReception($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecReceptionRelatedByIdReception relation
 * @method CommonExecLitigeReceptionQuery rightJoinCommonExecReceptionRelatedByIdReception($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecReceptionRelatedByIdReception relation
 * @method CommonExecLitigeReceptionQuery innerJoinCommonExecReceptionRelatedByIdReception($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecReceptionRelatedByIdReception relation
 *
 * @method CommonExecLitigeReception findOne(PropelPDO $con = null) Return the first CommonExecLitigeReception matching the query
 * @method CommonExecLitigeReception findOneOrCreate(PropelPDO $con = null) Return the first CommonExecLitigeReception matching the query, or a new CommonExecLitigeReception object populated from the query conditions when no match is found
 *
 * @method CommonExecLitigeReception findOneByIdLitige(int $id_litige) Return the first CommonExecLitigeReception filtered by the id_litige column
 * @method CommonExecLitigeReception findOneByIdReception(int $id_reception) Return the first CommonExecLitigeReception filtered by the id_reception column
 *
 * @method array findById(int $id) Return CommonExecLitigeReception objects filtered by the id column
 * @method array findByIdLitige(int $id_litige) Return CommonExecLitigeReception objects filtered by the id_litige column
 * @method array findByIdReception(int $id_reception) Return CommonExecLitigeReception objects filtered by the id_reception column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonExecLitigeReceptionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonExecLitigeReceptionQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonExecLitigeReception', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonExecLitigeReceptionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonExecLitigeReceptionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonExecLitigeReceptionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonExecLitigeReceptionQuery) {
            return $criteria;
        }
        $query = new CommonExecLitigeReceptionQuery();
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
     * @return   CommonExecLitigeReception|CommonExecLitigeReception[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonExecLitigeReceptionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonExecLitigeReceptionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonExecLitigeReception A model object, or null if the key is not found
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
     * @return                 CommonExecLitigeReception A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_litige`, `id_reception` FROM `exec_litige_reception` WHERE `id` = :p0';
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
            $obj = new CommonExecLitigeReception();
            $obj->hydrate($row);
            CommonExecLitigeReceptionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonExecLitigeReception|CommonExecLitigeReception[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonExecLitigeReception[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonExecLitigeReceptionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonExecLitigeReceptionPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonExecLitigeReceptionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonExecLitigeReceptionPeer::ID, $keys, Criteria::IN);
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
     * @return CommonExecLitigeReceptionQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonExecLitigeReceptionPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonExecLitigeReceptionPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecLitigeReceptionPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_litige column
     *
     * Example usage:
     * <code>
     * $query->filterByIdLitige(1234); // WHERE id_litige = 1234
     * $query->filterByIdLitige(array(12, 34)); // WHERE id_litige IN (12, 34)
     * $query->filterByIdLitige(array('min' => 12)); // WHERE id_litige >= 12
     * $query->filterByIdLitige(array('max' => 12)); // WHERE id_litige <= 12
     * </code>
     *
     * @param     mixed $idLitige The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecLitigeReceptionQuery The current query, for fluid interface
     */
    public function filterByIdLitige($idLitige = null, $comparison = null)
    {
        if (is_array($idLitige)) {
            $useMinMax = false;
            if (isset($idLitige['min'])) {
                $this->addUsingAlias(CommonExecLitigeReceptionPeer::ID_LITIGE, $idLitige['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idLitige['max'])) {
                $this->addUsingAlias(CommonExecLitigeReceptionPeer::ID_LITIGE, $idLitige['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecLitigeReceptionPeer::ID_LITIGE, $idLitige, $comparison);
    }

    /**
     * Filter the query on the id_reception column
     *
     * Example usage:
     * <code>
     * $query->filterByIdReception(1234); // WHERE id_reception = 1234
     * $query->filterByIdReception(array(12, 34)); // WHERE id_reception IN (12, 34)
     * $query->filterByIdReception(array('min' => 12)); // WHERE id_reception >= 12
     * $query->filterByIdReception(array('max' => 12)); // WHERE id_reception <= 12
     * </code>
     *
     * @see       filterByCommonExecReceptionRelatedByIdReception()
     *
     * @see       filterByCommonExecReceptionRelatedByIdReception()
     *
     * @param     mixed $idReception The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecLitigeReceptionQuery The current query, for fluid interface
     */
    public function filterByIdReception($idReception = null, $comparison = null)
    {
        if (is_array($idReception)) {
            $useMinMax = false;
            if (isset($idReception['min'])) {
                $this->addUsingAlias(CommonExecLitigeReceptionPeer::ID_RECEPTION, $idReception['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idReception['max'])) {
                $this->addUsingAlias(CommonExecLitigeReceptionPeer::ID_RECEPTION, $idReception['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecLitigeReceptionPeer::ID_RECEPTION, $idReception, $comparison);
    }

    /**
     * Filter the query by a related CommonExecReception object
     *
     * @param   CommonExecReception|PropelObjectCollection $commonExecReception The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecLitigeReceptionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecReceptionRelatedByIdReception($commonExecReception, $comparison = null)
    {
        if ($commonExecReception instanceof CommonExecReception) {
            return $this
                ->addUsingAlias(CommonExecLitigeReceptionPeer::ID_RECEPTION, $commonExecReception->getId(), $comparison);
        } elseif ($commonExecReception instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecLitigeReceptionPeer::ID_RECEPTION, $commonExecReception->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonExecReceptionRelatedByIdReception() only accepts arguments of type CommonExecReception or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecReceptionRelatedByIdReception relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecLitigeReceptionQuery The current query, for fluid interface
     */
    public function joinCommonExecReceptionRelatedByIdReception($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecReceptionRelatedByIdReception');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonExecReceptionRelatedByIdReception');
        }

        return $this;
    }

    /**
     * Use the CommonExecReceptionRelatedByIdReception relation CommonExecReception object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecReceptionQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecReceptionRelatedByIdReceptionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecReceptionRelatedByIdReception($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecReceptionRelatedByIdReception', 'CommonExecReceptionQuery');
    }

    /**
     * Filter the query by a related CommonExecReception object
     *
     * @param   CommonExecReception|PropelObjectCollection $commonExecReception The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecLitigeReceptionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecReceptionRelatedByIdReception($commonExecReception, $comparison = null)
    {
        if ($commonExecReception instanceof CommonExecReception) {
            return $this
                ->addUsingAlias(CommonExecLitigeReceptionPeer::ID_RECEPTION, $commonExecReception->getId(), $comparison);
        } elseif ($commonExecReception instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecLitigeReceptionPeer::ID_RECEPTION, $commonExecReception->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonExecReceptionRelatedByIdReception() only accepts arguments of type CommonExecReception or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecReceptionRelatedByIdReception relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecLitigeReceptionQuery The current query, for fluid interface
     */
    public function joinCommonExecReceptionRelatedByIdReception($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecReceptionRelatedByIdReception');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonExecReceptionRelatedByIdReception');
        }

        return $this;
    }

    /**
     * Use the CommonExecReceptionRelatedByIdReception relation CommonExecReception object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecReceptionQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecReceptionRelatedByIdReceptionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecReceptionRelatedByIdReception($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecReceptionRelatedByIdReception', 'CommonExecReceptionQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonExecLitigeReception $commonExecLitigeReception Object to remove from the list of results
     *
     * @return CommonExecLitigeReceptionQuery The current query, for fluid interface
     */
    public function prune($commonExecLitigeReception = null)
    {
        if ($commonExecLitigeReception) {
            $this->addUsingAlias(CommonExecLitigeReceptionPeer::ID, $commonExecLitigeReception->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
