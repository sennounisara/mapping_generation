<?php


/**
 * Base class that represents a query for the 'AffiliationService' table.
 *
 * 
 *
 * @method CommonAffiliationServiceQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonAffiliationServiceQuery orderByIdPole($order = Criteria::ASC) Order by the id_pole column
 * @method CommonAffiliationServiceQuery orderByIdService($order = Criteria::ASC) Order by the id_service column
 *
 * @method CommonAffiliationServiceQuery groupByOrganisme() Group by the organisme column
 * @method CommonAffiliationServiceQuery groupByIdPole() Group by the id_pole column
 * @method CommonAffiliationServiceQuery groupByIdService() Group by the id_service column
 *
 * @method CommonAffiliationServiceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonAffiliationServiceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonAffiliationServiceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonAffiliationServiceQuery leftJoinCommonServiceRelatedByIdPoleOrganisme($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonServiceRelatedByIdPoleOrganisme relation
 * @method CommonAffiliationServiceQuery rightJoinCommonServiceRelatedByIdPoleOrganisme($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonServiceRelatedByIdPoleOrganisme relation
 * @method CommonAffiliationServiceQuery innerJoinCommonServiceRelatedByIdPoleOrganisme($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonServiceRelatedByIdPoleOrganisme relation
 *
 * @method CommonAffiliationServiceQuery leftJoinCommonServiceRelatedByIdServiceOrganisme($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonServiceRelatedByIdServiceOrganisme relation
 * @method CommonAffiliationServiceQuery rightJoinCommonServiceRelatedByIdServiceOrganisme($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonServiceRelatedByIdServiceOrganisme relation
 * @method CommonAffiliationServiceQuery innerJoinCommonServiceRelatedByIdServiceOrganisme($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonServiceRelatedByIdServiceOrganisme relation
 *
 * @method CommonAffiliationServiceQuery leftJoinCommonOrganisme($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonOrganisme relation
 * @method CommonAffiliationServiceQuery rightJoinCommonOrganisme($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonOrganisme relation
 * @method CommonAffiliationServiceQuery innerJoinCommonOrganisme($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonOrganisme relation
 *
 * @method CommonAffiliationService findOne(PropelPDO $con = null) Return the first CommonAffiliationService matching the query
 * @method CommonAffiliationService findOneOrCreate(PropelPDO $con = null) Return the first CommonAffiliationService matching the query, or a new CommonAffiliationService object populated from the query conditions when no match is found
 *
 * @method CommonAffiliationService findOneByOrganisme(string $organisme) Return the first CommonAffiliationService filtered by the organisme column
 * @method CommonAffiliationService findOneByIdPole(int $id_pole) Return the first CommonAffiliationService filtered by the id_pole column
 * @method CommonAffiliationService findOneByIdService(int $id_service) Return the first CommonAffiliationService filtered by the id_service column
 *
 * @method array findByOrganisme(string $organisme) Return CommonAffiliationService objects filtered by the organisme column
 * @method array findByIdPole(int $id_pole) Return CommonAffiliationService objects filtered by the id_pole column
 * @method array findByIdService(int $id_service) Return CommonAffiliationService objects filtered by the id_service column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonAffiliationServiceQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonAffiliationServiceQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonAffiliationService', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonAffiliationServiceQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonAffiliationServiceQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonAffiliationServiceQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonAffiliationServiceQuery) {
            return $criteria;
        }
        $query = new CommonAffiliationServiceQuery();
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
                         A Primary key composition: [$organisme, $id_pole, $id_service]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonAffiliationService|CommonAffiliationService[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonAffiliationServicePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonAffiliationServicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonAffiliationService A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `organisme`, `id_pole`, `id_service` FROM `AffiliationService` WHERE `organisme` = :p0 AND `id_pole` = :p1 AND `id_service` = :p2';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);			
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonAffiliationService();
            $obj->hydrate($row);
            CommonAffiliationServicePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return CommonAffiliationService|CommonAffiliationService[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonAffiliationService[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonAffiliationServiceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonAffiliationServicePeer::ORGANISME, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonAffiliationServicePeer::ID_POLE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(CommonAffiliationServicePeer::ID_SERVICE, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonAffiliationServiceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonAffiliationServicePeer::ORGANISME, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonAffiliationServicePeer::ID_POLE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(CommonAffiliationServicePeer::ID_SERVICE, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return CommonAffiliationServiceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonAffiliationServicePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the id_pole column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPole(1234); // WHERE id_pole = 1234
     * $query->filterByIdPole(array(12, 34)); // WHERE id_pole IN (12, 34)
     * $query->filterByIdPole(array('min' => 12)); // WHERE id_pole >= 12
     * $query->filterByIdPole(array('max' => 12)); // WHERE id_pole <= 12
     * </code>
     *
     * @see       filterByCommonServiceRelatedByIdPoleOrganisme()
     *
     * @param     mixed $idPole The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAffiliationServiceQuery The current query, for fluid interface
     */
    public function filterByIdPole($idPole = null, $comparison = null)
    {
        if (is_array($idPole)) {
            $useMinMax = false;
            if (isset($idPole['min'])) {
                $this->addUsingAlias(CommonAffiliationServicePeer::ID_POLE, $idPole['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idPole['max'])) {
                $this->addUsingAlias(CommonAffiliationServicePeer::ID_POLE, $idPole['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAffiliationServicePeer::ID_POLE, $idPole, $comparison);
    }

    /**
     * Filter the query on the id_service column
     *
     * Example usage:
     * <code>
     * $query->filterByIdService(1234); // WHERE id_service = 1234
     * $query->filterByIdService(array(12, 34)); // WHERE id_service IN (12, 34)
     * $query->filterByIdService(array('min' => 12)); // WHERE id_service >= 12
     * $query->filterByIdService(array('max' => 12)); // WHERE id_service <= 12
     * </code>
     *
     * @see       filterByCommonServiceRelatedByIdServiceOrganisme()
     *
     * @param     mixed $idService The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAffiliationServiceQuery The current query, for fluid interface
     */
    public function filterByIdService($idService = null, $comparison = null)
    {
        if (is_array($idService)) {
            $useMinMax = false;
            if (isset($idService['min'])) {
                $this->addUsingAlias(CommonAffiliationServicePeer::ID_SERVICE, $idService['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idService['max'])) {
                $this->addUsingAlias(CommonAffiliationServicePeer::ID_SERVICE, $idService['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAffiliationServicePeer::ID_SERVICE, $idService, $comparison);
    }

    /**
     * Filter the query by a related CommonService object
     *
     * @param   CommonService $commonService The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonAffiliationServiceQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonServiceRelatedByIdPoleOrganisme($commonService, $comparison = null)
    {
        if ($commonService instanceof CommonService) {
            return $this
                ->addUsingAlias(CommonAffiliationServicePeer::ID_POLE, $commonService->getId(), $comparison)
                ->addUsingAlias(CommonAffiliationServicePeer::ORGANISME, $commonService->getOrganisme(), $comparison);
        } else {
            throw new PropelException('filterByCommonServiceRelatedByIdPoleOrganisme() only accepts arguments of type CommonService');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonServiceRelatedByIdPoleOrganisme relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonAffiliationServiceQuery The current query, for fluid interface
     */
    public function joinCommonServiceRelatedByIdPoleOrganisme($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonServiceRelatedByIdPoleOrganisme');

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
            $this->addJoinObject($join, 'CommonServiceRelatedByIdPoleOrganisme');
        }

        return $this;
    }

    /**
     * Use the CommonServiceRelatedByIdPoleOrganisme relation CommonService object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonServiceQuery A secondary query class using the current class as primary query
     */
    public function useCommonServiceRelatedByIdPoleOrganismeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonServiceRelatedByIdPoleOrganisme($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonServiceRelatedByIdPoleOrganisme', 'CommonServiceQuery');
    }

    /**
     * Filter the query by a related CommonService object
     *
     * @param   CommonService $commonService The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonAffiliationServiceQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonServiceRelatedByIdServiceOrganisme($commonService, $comparison = null)
    {
        if ($commonService instanceof CommonService) {
            return $this
                ->addUsingAlias(CommonAffiliationServicePeer::ID_SERVICE, $commonService->getId(), $comparison)
                ->addUsingAlias(CommonAffiliationServicePeer::ORGANISME, $commonService->getOrganisme(), $comparison);
        } else {
            throw new PropelException('filterByCommonServiceRelatedByIdServiceOrganisme() only accepts arguments of type CommonService');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonServiceRelatedByIdServiceOrganisme relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonAffiliationServiceQuery The current query, for fluid interface
     */
    public function joinCommonServiceRelatedByIdServiceOrganisme($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonServiceRelatedByIdServiceOrganisme');

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
            $this->addJoinObject($join, 'CommonServiceRelatedByIdServiceOrganisme');
        }

        return $this;
    }

    /**
     * Use the CommonServiceRelatedByIdServiceOrganisme relation CommonService object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonServiceQuery A secondary query class using the current class as primary query
     */
    public function useCommonServiceRelatedByIdServiceOrganismeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonServiceRelatedByIdServiceOrganisme($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonServiceRelatedByIdServiceOrganisme', 'CommonServiceQuery');
    }

    /**
     * Filter the query by a related CommonOrganisme object
     *
     * @param   CommonOrganisme|PropelObjectCollection $commonOrganisme The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonAffiliationServiceQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonOrganisme($commonOrganisme, $comparison = null)
    {
        if ($commonOrganisme instanceof CommonOrganisme) {
            return $this
                ->addUsingAlias(CommonAffiliationServicePeer::ORGANISME, $commonOrganisme->getAcronyme(), $comparison);
        } elseif ($commonOrganisme instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonAffiliationServicePeer::ORGANISME, $commonOrganisme->toKeyValue('PrimaryKey', 'Acronyme'), $comparison);
        } else {
            throw new PropelException('filterByCommonOrganisme() only accepts arguments of type CommonOrganisme or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonOrganisme relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonAffiliationServiceQuery The current query, for fluid interface
     */
    public function joinCommonOrganisme($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonOrganisme');

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
            $this->addJoinObject($join, 'CommonOrganisme');
        }

        return $this;
    }

    /**
     * Use the CommonOrganisme relation CommonOrganisme object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonOrganismeQuery A secondary query class using the current class as primary query
     */
    public function useCommonOrganismeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonOrganisme($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonOrganisme', 'CommonOrganismeQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonAffiliationService $commonAffiliationService Object to remove from the list of results
     *
     * @return CommonAffiliationServiceQuery The current query, for fluid interface
     */
    public function prune($commonAffiliationService = null)
    {
        if ($commonAffiliationService) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonAffiliationServicePeer::ORGANISME), $commonAffiliationService->getOrganisme(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonAffiliationServicePeer::ID_POLE), $commonAffiliationService->getIdPole(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(CommonAffiliationServicePeer::ID_SERVICE), $commonAffiliationService->getIdService(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
