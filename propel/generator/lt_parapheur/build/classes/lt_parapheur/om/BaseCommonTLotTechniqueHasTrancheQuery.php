<?php


/**
 * Base class that represents a query for the 't_lot_technique_has_tranche' table.
 *
 * 
 *
 * @method CommonTLotTechniqueHasTrancheQuery orderByIdLotTechnique($order = Criteria::ASC) Order by the id_lot_technique column
 * @method CommonTLotTechniqueHasTrancheQuery orderByIdTranche($order = Criteria::ASC) Order by the id_tranche column
 *
 * @method CommonTLotTechniqueHasTrancheQuery groupByIdLotTechnique() Group by the id_lot_technique column
 * @method CommonTLotTechniqueHasTrancheQuery groupByIdTranche() Group by the id_tranche column
 *
 * @method CommonTLotTechniqueHasTrancheQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTLotTechniqueHasTrancheQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTLotTechniqueHasTrancheQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTLotTechniqueHasTrancheQuery leftJoinCommonTLotTechnique($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTLotTechnique relation
 * @method CommonTLotTechniqueHasTrancheQuery rightJoinCommonTLotTechnique($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTLotTechnique relation
 * @method CommonTLotTechniqueHasTrancheQuery innerJoinCommonTLotTechnique($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTLotTechnique relation
 *
 * @method CommonTLotTechniqueHasTrancheQuery leftJoinCommonTTranche($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTTranche relation
 * @method CommonTLotTechniqueHasTrancheQuery rightJoinCommonTTranche($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTTranche relation
 * @method CommonTLotTechniqueHasTrancheQuery innerJoinCommonTTranche($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTTranche relation
 *
 * @method CommonTLotTechniqueHasTranche findOne(PropelPDO $con = null) Return the first CommonTLotTechniqueHasTranche matching the query
 * @method CommonTLotTechniqueHasTranche findOneOrCreate(PropelPDO $con = null) Return the first CommonTLotTechniqueHasTranche matching the query, or a new CommonTLotTechniqueHasTranche object populated from the query conditions when no match is found
 *
 * @method CommonTLotTechniqueHasTranche findOneByIdLotTechnique(int $id_lot_technique) Return the first CommonTLotTechniqueHasTranche filtered by the id_lot_technique column
 * @method CommonTLotTechniqueHasTranche findOneByIdTranche(int $id_tranche) Return the first CommonTLotTechniqueHasTranche filtered by the id_tranche column
 *
 * @method array findByIdLotTechnique(int $id_lot_technique) Return CommonTLotTechniqueHasTranche objects filtered by the id_lot_technique column
 * @method array findByIdTranche(int $id_tranche) Return CommonTLotTechniqueHasTranche objects filtered by the id_tranche column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTLotTechniqueHasTrancheQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTLotTechniqueHasTrancheQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTLotTechniqueHasTranche', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTLotTechniqueHasTrancheQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTLotTechniqueHasTrancheQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTLotTechniqueHasTrancheQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTLotTechniqueHasTrancheQuery) {
            return $criteria;
        }
        $query = new CommonTLotTechniqueHasTrancheQuery();
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
                         A Primary key composition: [$id_lot_technique, $id_tranche]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonTLotTechniqueHasTranche|CommonTLotTechniqueHasTranche[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTLotTechniqueHasTranchePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTLotTechniqueHasTranchePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTLotTechniqueHasTranche A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_lot_technique`, `id_tranche` FROM `t_lot_technique_has_tranche` WHERE `id_lot_technique` = :p0 AND `id_tranche` = :p1';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonTLotTechniqueHasTranche();
            $obj->hydrate($row);
            CommonTLotTechniqueHasTranchePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonTLotTechniqueHasTranche|CommonTLotTechniqueHasTranche[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTLotTechniqueHasTranche[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTLotTechniqueHasTrancheQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonTLotTechniqueHasTranchePeer::ID_LOT_TECHNIQUE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonTLotTechniqueHasTranchePeer::ID_TRANCHE, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTLotTechniqueHasTrancheQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonTLotTechniqueHasTranchePeer::ID_LOT_TECHNIQUE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonTLotTechniqueHasTranchePeer::ID_TRANCHE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the id_lot_technique column
     *
     * Example usage:
     * <code>
     * $query->filterByIdLotTechnique(1234); // WHERE id_lot_technique = 1234
     * $query->filterByIdLotTechnique(array(12, 34)); // WHERE id_lot_technique IN (12, 34)
     * $query->filterByIdLotTechnique(array('min' => 12)); // WHERE id_lot_technique >= 12
     * $query->filterByIdLotTechnique(array('max' => 12)); // WHERE id_lot_technique <= 12
     * </code>
     *
     * @see       filterByCommonTLotTechnique()
     *
     * @param     mixed $idLotTechnique The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTLotTechniqueHasTrancheQuery The current query, for fluid interface
     */
    public function filterByIdLotTechnique($idLotTechnique = null, $comparison = null)
    {
        if (is_array($idLotTechnique)) {
            $useMinMax = false;
            if (isset($idLotTechnique['min'])) {
                $this->addUsingAlias(CommonTLotTechniqueHasTranchePeer::ID_LOT_TECHNIQUE, $idLotTechnique['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idLotTechnique['max'])) {
                $this->addUsingAlias(CommonTLotTechniqueHasTranchePeer::ID_LOT_TECHNIQUE, $idLotTechnique['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTLotTechniqueHasTranchePeer::ID_LOT_TECHNIQUE, $idLotTechnique, $comparison);
    }

    /**
     * Filter the query on the id_tranche column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTranche(1234); // WHERE id_tranche = 1234
     * $query->filterByIdTranche(array(12, 34)); // WHERE id_tranche IN (12, 34)
     * $query->filterByIdTranche(array('min' => 12)); // WHERE id_tranche >= 12
     * $query->filterByIdTranche(array('max' => 12)); // WHERE id_tranche <= 12
     * </code>
     *
     * @see       filterByCommonTTranche()
     *
     * @param     mixed $idTranche The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTLotTechniqueHasTrancheQuery The current query, for fluid interface
     */
    public function filterByIdTranche($idTranche = null, $comparison = null)
    {
        if (is_array($idTranche)) {
            $useMinMax = false;
            if (isset($idTranche['min'])) {
                $this->addUsingAlias(CommonTLotTechniqueHasTranchePeer::ID_TRANCHE, $idTranche['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTranche['max'])) {
                $this->addUsingAlias(CommonTLotTechniqueHasTranchePeer::ID_TRANCHE, $idTranche['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTLotTechniqueHasTranchePeer::ID_TRANCHE, $idTranche, $comparison);
    }

    /**
     * Filter the query by a related CommonTLotTechnique object
     *
     * @param   CommonTLotTechnique|PropelObjectCollection $commonTLotTechnique The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTLotTechniqueHasTrancheQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTLotTechnique($commonTLotTechnique, $comparison = null)
    {
        if ($commonTLotTechnique instanceof CommonTLotTechnique) {
            return $this
                ->addUsingAlias(CommonTLotTechniqueHasTranchePeer::ID_LOT_TECHNIQUE, $commonTLotTechnique->getIdLotTechnique(), $comparison);
        } elseif ($commonTLotTechnique instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonTLotTechniqueHasTranchePeer::ID_LOT_TECHNIQUE, $commonTLotTechnique->toKeyValue('PrimaryKey', 'IdLotTechnique'), $comparison);
        } else {
            throw new PropelException('filterByCommonTLotTechnique() only accepts arguments of type CommonTLotTechnique or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTLotTechnique relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTLotTechniqueHasTrancheQuery The current query, for fluid interface
     */
    public function joinCommonTLotTechnique($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTLotTechnique');

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
            $this->addJoinObject($join, 'CommonTLotTechnique');
        }

        return $this;
    }

    /**
     * Use the CommonTLotTechnique relation CommonTLotTechnique object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTLotTechniqueQuery A secondary query class using the current class as primary query
     */
    public function useCommonTLotTechniqueQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonTLotTechnique($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTLotTechnique', 'CommonTLotTechniqueQuery');
    }

    /**
     * Filter the query by a related CommonTTranche object
     *
     * @param   CommonTTranche|PropelObjectCollection $commonTTranche The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTLotTechniqueHasTrancheQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTTranche($commonTTranche, $comparison = null)
    {
        if ($commonTTranche instanceof CommonTTranche) {
            return $this
                ->addUsingAlias(CommonTLotTechniqueHasTranchePeer::ID_TRANCHE, $commonTTranche->getIdTranche(), $comparison);
        } elseif ($commonTTranche instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonTLotTechniqueHasTranchePeer::ID_TRANCHE, $commonTTranche->toKeyValue('PrimaryKey', 'IdTranche'), $comparison);
        } else {
            throw new PropelException('filterByCommonTTranche() only accepts arguments of type CommonTTranche or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTTranche relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTLotTechniqueHasTrancheQuery The current query, for fluid interface
     */
    public function joinCommonTTranche($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTTranche');

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
            $this->addJoinObject($join, 'CommonTTranche');
        }

        return $this;
    }

    /**
     * Use the CommonTTranche relation CommonTTranche object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTTrancheQuery A secondary query class using the current class as primary query
     */
    public function useCommonTTrancheQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonTTranche($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTTranche', 'CommonTTrancheQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTLotTechniqueHasTranche $commonTLotTechniqueHasTranche Object to remove from the list of results
     *
     * @return CommonTLotTechniqueHasTrancheQuery The current query, for fluid interface
     */
    public function prune($commonTLotTechniqueHasTranche = null)
    {
        if ($commonTLotTechniqueHasTranche) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonTLotTechniqueHasTranchePeer::ID_LOT_TECHNIQUE), $commonTLotTechniqueHasTranche->getIdLotTechnique(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonTLotTechniqueHasTranchePeer::ID_TRANCHE), $commonTLotTechniqueHasTranche->getIdTranche(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
