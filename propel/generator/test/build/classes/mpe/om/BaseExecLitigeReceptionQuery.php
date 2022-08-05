<?php


/**
 * Base class that represents a query for the 'exec_litige_reception' table.
 *
 * 
 *
 * @method ExecLitigeReceptionQuery orderById($order = Criteria::ASC) Order by the id column
 * @method ExecLitigeReceptionQuery orderByIdLitige($order = Criteria::ASC) Order by the id_litige column
 * @method ExecLitigeReceptionQuery orderByIdReception($order = Criteria::ASC) Order by the id_reception column
 *
 * @method ExecLitigeReceptionQuery groupById() Group by the id column
 * @method ExecLitigeReceptionQuery groupByIdLitige() Group by the id_litige column
 * @method ExecLitigeReceptionQuery groupByIdReception() Group by the id_reception column
 *
 * @method ExecLitigeReceptionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ExecLitigeReceptionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ExecLitigeReceptionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ExecLitigeReceptionQuery leftJoinExecReceptionRelatedByIdReception($relationAlias = null) Adds a LEFT JOIN clause to the query using the ExecReceptionRelatedByIdReception relation
 * @method ExecLitigeReceptionQuery rightJoinExecReceptionRelatedByIdReception($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ExecReceptionRelatedByIdReception relation
 * @method ExecLitigeReceptionQuery innerJoinExecReceptionRelatedByIdReception($relationAlias = null) Adds a INNER JOIN clause to the query using the ExecReceptionRelatedByIdReception relation
 *
 * @method ExecLitigeReceptionQuery leftJoinExecReceptionRelatedByIdReception($relationAlias = null) Adds a LEFT JOIN clause to the query using the ExecReceptionRelatedByIdReception relation
 * @method ExecLitigeReceptionQuery rightJoinExecReceptionRelatedByIdReception($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ExecReceptionRelatedByIdReception relation
 * @method ExecLitigeReceptionQuery innerJoinExecReceptionRelatedByIdReception($relationAlias = null) Adds a INNER JOIN clause to the query using the ExecReceptionRelatedByIdReception relation
 *
 * @method ExecLitigeReception findOne(PropelPDO $con = null) Return the first ExecLitigeReception matching the query
 * @method ExecLitigeReception findOneOrCreate(PropelPDO $con = null) Return the first ExecLitigeReception matching the query, or a new ExecLitigeReception object populated from the query conditions when no match is found
 *
 * @method ExecLitigeReception findOneByIdLitige(int $id_litige) Return the first ExecLitigeReception filtered by the id_litige column
 * @method ExecLitigeReception findOneByIdReception(int $id_reception) Return the first ExecLitigeReception filtered by the id_reception column
 *
 * @method array findById(int $id) Return ExecLitigeReception objects filtered by the id column
 * @method array findByIdLitige(int $id_litige) Return ExecLitigeReception objects filtered by the id_litige column
 * @method array findByIdReception(int $id_reception) Return ExecLitigeReception objects filtered by the id_reception column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseExecLitigeReceptionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseExecLitigeReceptionQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'ExecLitigeReception', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ExecLitigeReceptionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ExecLitigeReceptionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ExecLitigeReceptionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ExecLitigeReceptionQuery) {
            return $criteria;
        }
        $query = new ExecLitigeReceptionQuery();
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
     * @return   ExecLitigeReception|ExecLitigeReception[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ExecLitigeReceptionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ExecLitigeReceptionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ExecLitigeReception A model object, or null if the key is not found
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
     * @return                 ExecLitigeReception A model object, or null if the key is not found
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
            $obj = new ExecLitigeReception();
            $obj->hydrate($row);
            ExecLitigeReceptionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return ExecLitigeReception|ExecLitigeReception[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ExecLitigeReception[]|mixed the list of results, formatted by the current formatter
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
     * @return ExecLitigeReceptionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ExecLitigeReceptionPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ExecLitigeReceptionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ExecLitigeReceptionPeer::ID, $keys, Criteria::IN);
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
     * @return ExecLitigeReceptionQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(ExecLitigeReceptionPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(ExecLitigeReceptionPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecLitigeReceptionPeer::ID, $id, $comparison);
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
     * @return ExecLitigeReceptionQuery The current query, for fluid interface
     */
    public function filterByIdLitige($idLitige = null, $comparison = null)
    {
        if (is_array($idLitige)) {
            $useMinMax = false;
            if (isset($idLitige['min'])) {
                $this->addUsingAlias(ExecLitigeReceptionPeer::ID_LITIGE, $idLitige['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idLitige['max'])) {
                $this->addUsingAlias(ExecLitigeReceptionPeer::ID_LITIGE, $idLitige['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecLitigeReceptionPeer::ID_LITIGE, $idLitige, $comparison);
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
     * @see       filterByExecReceptionRelatedByIdReception()
     *
     * @see       filterByExecReceptionRelatedByIdReception()
     *
     * @param     mixed $idReception The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExecLitigeReceptionQuery The current query, for fluid interface
     */
    public function filterByIdReception($idReception = null, $comparison = null)
    {
        if (is_array($idReception)) {
            $useMinMax = false;
            if (isset($idReception['min'])) {
                $this->addUsingAlias(ExecLitigeReceptionPeer::ID_RECEPTION, $idReception['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idReception['max'])) {
                $this->addUsingAlias(ExecLitigeReceptionPeer::ID_RECEPTION, $idReception['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecLitigeReceptionPeer::ID_RECEPTION, $idReception, $comparison);
    }

    /**
     * Filter the query by a related ExecReception object
     *
     * @param   ExecReception|PropelObjectCollection $ExecReception The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExecLitigeReceptionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExecReceptionRelatedByIdReception($ExecReception, $comparison = null)
    {
        if ($ExecReception instanceof ExecReception) {
            return $this
                ->addUsingAlias(ExecLitigeReceptionPeer::ID_RECEPTION, $ExecReception->getId(), $comparison);
        } elseif ($ExecReception instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ExecLitigeReceptionPeer::ID_RECEPTION, $ExecReception->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByExecReceptionRelatedByIdReception() only accepts arguments of type ExecReception or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ExecReceptionRelatedByIdReception relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ExecLitigeReceptionQuery The current query, for fluid interface
     */
    public function joinExecReceptionRelatedByIdReception($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ExecReceptionRelatedByIdReception');

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
            $this->addJoinObject($join, 'ExecReceptionRelatedByIdReception');
        }

        return $this;
    }

    /**
     * Use the ExecReceptionRelatedByIdReception relation ExecReception object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ExecReceptionQuery A secondary query class using the current class as primary query
     */
    public function useExecReceptionRelatedByIdReceptionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinExecReceptionRelatedByIdReception($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ExecReceptionRelatedByIdReception', 'ExecReceptionQuery');
    }

    /**
     * Filter the query by a related ExecReception object
     *
     * @param   ExecReception|PropelObjectCollection $ExecReception The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExecLitigeReceptionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExecReceptionRelatedByIdReception($ExecReception, $comparison = null)
    {
        if ($ExecReception instanceof ExecReception) {
            return $this
                ->addUsingAlias(ExecLitigeReceptionPeer::ID_RECEPTION, $ExecReception->getId(), $comparison);
        } elseif ($ExecReception instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(ExecLitigeReceptionPeer::ID_RECEPTION, $ExecReception->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByExecReceptionRelatedByIdReception() only accepts arguments of type ExecReception or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ExecReceptionRelatedByIdReception relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ExecLitigeReceptionQuery The current query, for fluid interface
     */
    public function joinExecReceptionRelatedByIdReception($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ExecReceptionRelatedByIdReception');

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
            $this->addJoinObject($join, 'ExecReceptionRelatedByIdReception');
        }

        return $this;
    }

    /**
     * Use the ExecReceptionRelatedByIdReception relation ExecReception object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ExecReceptionQuery A secondary query class using the current class as primary query
     */
    public function useExecReceptionRelatedByIdReceptionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinExecReceptionRelatedByIdReception($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ExecReceptionRelatedByIdReception', 'ExecReceptionQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ExecLitigeReception $ExecLitigeReception Object to remove from the list of results
     *
     * @return ExecLitigeReceptionQuery The current query, for fluid interface
     */
    public function prune($ExecLitigeReception = null)
    {
        if ($ExecLitigeReception) {
            $this->addUsingAlias(ExecLitigeReceptionPeer::ID, $ExecLitigeReception->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
