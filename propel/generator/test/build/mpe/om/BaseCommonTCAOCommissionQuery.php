<?php


/**
 * Base class that represents a query for the 't_CAO_Commission' table.
 *
 * 
 *
 * @method CommonTCAOCommissionQuery orderByIdCommission($order = Criteria::ASC) Order by the id_commission column
 * @method CommonTCAOCommissionQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonTCAOCommissionQuery orderBySigle($order = Criteria::ASC) Order by the sigle column
 * @method CommonTCAOCommissionQuery orderByIntitule($order = Criteria::ASC) Order by the intitule column
 *
 * @method CommonTCAOCommissionQuery groupByIdCommission() Group by the id_commission column
 * @method CommonTCAOCommissionQuery groupByOrganisme() Group by the organisme column
 * @method CommonTCAOCommissionQuery groupBySigle() Group by the sigle column
 * @method CommonTCAOCommissionQuery groupByIntitule() Group by the intitule column
 *
 * @method CommonTCAOCommissionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTCAOCommissionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTCAOCommissionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTCAOCommissionQuery leftJoinCommonTCAOCommissionAgent($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTCAOCommissionAgent relation
 * @method CommonTCAOCommissionQuery rightJoinCommonTCAOCommissionAgent($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTCAOCommissionAgent relation
 * @method CommonTCAOCommissionQuery innerJoinCommonTCAOCommissionAgent($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTCAOCommissionAgent relation
 *
 * @method CommonTCAOCommissionQuery leftJoinCommonTCAOCommissionConsultation($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTCAOCommissionConsultation relation
 * @method CommonTCAOCommissionQuery rightJoinCommonTCAOCommissionConsultation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTCAOCommissionConsultation relation
 * @method CommonTCAOCommissionQuery innerJoinCommonTCAOCommissionConsultation($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTCAOCommissionConsultation relation
 *
 * @method CommonTCAOCommissionQuery leftJoinCommonTCAOCommissionIntervenantExterne($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTCAOCommissionIntervenantExterne relation
 * @method CommonTCAOCommissionQuery rightJoinCommonTCAOCommissionIntervenantExterne($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTCAOCommissionIntervenantExterne relation
 * @method CommonTCAOCommissionQuery innerJoinCommonTCAOCommissionIntervenantExterne($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTCAOCommissionIntervenantExterne relation
 *
 * @method CommonTCAOCommissionQuery leftJoinCommonTCAOOrdreDePassage($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTCAOOrdreDePassage relation
 * @method CommonTCAOCommissionQuery rightJoinCommonTCAOOrdreDePassage($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTCAOOrdreDePassage relation
 * @method CommonTCAOCommissionQuery innerJoinCommonTCAOOrdreDePassage($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTCAOOrdreDePassage relation
 *
 * @method CommonTCAOCommissionQuery leftJoinCommonTCAOSeance($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTCAOSeance relation
 * @method CommonTCAOCommissionQuery rightJoinCommonTCAOSeance($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTCAOSeance relation
 * @method CommonTCAOCommissionQuery innerJoinCommonTCAOSeance($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTCAOSeance relation
 *
 * @method CommonTCAOCommission findOne(PropelPDO $con = null) Return the first CommonTCAOCommission matching the query
 * @method CommonTCAOCommission findOneOrCreate(PropelPDO $con = null) Return the first CommonTCAOCommission matching the query, or a new CommonTCAOCommission object populated from the query conditions when no match is found
 *
 * @method CommonTCAOCommission findOneByIdCommission(string $id_commission) Return the first CommonTCAOCommission filtered by the id_commission column
 * @method CommonTCAOCommission findOneByOrganisme(string $organisme) Return the first CommonTCAOCommission filtered by the organisme column
 * @method CommonTCAOCommission findOneBySigle(string $sigle) Return the first CommonTCAOCommission filtered by the sigle column
 * @method CommonTCAOCommission findOneByIntitule(string $intitule) Return the first CommonTCAOCommission filtered by the intitule column
 *
 * @method array findByIdCommission(string $id_commission) Return CommonTCAOCommission objects filtered by the id_commission column
 * @method array findByOrganisme(string $organisme) Return CommonTCAOCommission objects filtered by the organisme column
 * @method array findBySigle(string $sigle) Return CommonTCAOCommission objects filtered by the sigle column
 * @method array findByIntitule(string $intitule) Return CommonTCAOCommission objects filtered by the intitule column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTCAOCommissionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTCAOCommissionQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTCAOCommission', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTCAOCommissionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTCAOCommissionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTCAOCommissionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTCAOCommissionQuery) {
            return $criteria;
        }
        $query = new CommonTCAOCommissionQuery();
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
                         A Primary key composition: [$id_commission, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonTCAOCommission|CommonTCAOCommission[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTCAOCommissionPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTCAOCommissionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTCAOCommission A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_commission`, `organisme`, `sigle`, `intitule` FROM `t_CAO_Commission` WHERE `id_commission` = :p0 AND `organisme` = :p1';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonTCAOCommission();
            $obj->hydrate($row);
            CommonTCAOCommissionPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonTCAOCommission|CommonTCAOCommission[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTCAOCommission[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTCAOCommissionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonTCAOCommissionPeer::ID_COMMISSION, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonTCAOCommissionPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTCAOCommissionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonTCAOCommissionPeer::ID_COMMISSION, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonTCAOCommissionPeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the id_commission column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCommission(1234); // WHERE id_commission = 1234
     * $query->filterByIdCommission(array(12, 34)); // WHERE id_commission IN (12, 34)
     * $query->filterByIdCommission(array('min' => 12)); // WHERE id_commission >= 12
     * $query->filterByIdCommission(array('max' => 12)); // WHERE id_commission <= 12
     * </code>
     *
     * @param     mixed $idCommission The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOCommissionQuery The current query, for fluid interface
     */
    public function filterByIdCommission($idCommission = null, $comparison = null)
    {
        if (is_array($idCommission)) {
            $useMinMax = false;
            if (isset($idCommission['min'])) {
                $this->addUsingAlias(CommonTCAOCommissionPeer::ID_COMMISSION, $idCommission['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCommission['max'])) {
                $this->addUsingAlias(CommonTCAOCommissionPeer::ID_COMMISSION, $idCommission['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOCommissionPeer::ID_COMMISSION, $idCommission, $comparison);
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
     * @return CommonTCAOCommissionQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTCAOCommissionPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the sigle column
     *
     * Example usage:
     * <code>
     * $query->filterBySigle('fooValue');   // WHERE sigle = 'fooValue'
     * $query->filterBySigle('%fooValue%'); // WHERE sigle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sigle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOCommissionQuery The current query, for fluid interface
     */
    public function filterBySigle($sigle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sigle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sigle)) {
                $sigle = str_replace('*', '%', $sigle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTCAOCommissionPeer::SIGLE, $sigle, $comparison);
    }

    /**
     * Filter the query on the intitule column
     *
     * Example usage:
     * <code>
     * $query->filterByIntitule('fooValue');   // WHERE intitule = 'fooValue'
     * $query->filterByIntitule('%fooValue%'); // WHERE intitule LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intitule The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOCommissionQuery The current query, for fluid interface
     */
    public function filterByIntitule($intitule = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intitule)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $intitule)) {
                $intitule = str_replace('*', '%', $intitule);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTCAOCommissionPeer::INTITULE, $intitule, $comparison);
    }

    /**
     * Filter the query by a related CommonTCAOCommissionAgent object
     *
     * @param   CommonTCAOCommissionAgent|PropelObjectCollection $commonTCAOCommissionAgent  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTCAOCommissionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTCAOCommissionAgent($commonTCAOCommissionAgent, $comparison = null)
    {
        if ($commonTCAOCommissionAgent instanceof CommonTCAOCommissionAgent) {
            return $this
                ->addUsingAlias(CommonTCAOCommissionPeer::ID_COMMISSION, $commonTCAOCommissionAgent->getIdCommission(), $comparison);
        } elseif ($commonTCAOCommissionAgent instanceof PropelObjectCollection) {
            return $this
                ->useCommonTCAOCommissionAgentQuery()
                ->filterByPrimaryKeys($commonTCAOCommissionAgent->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonTCAOCommissionAgent() only accepts arguments of type CommonTCAOCommissionAgent or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTCAOCommissionAgent relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTCAOCommissionQuery The current query, for fluid interface
     */
    public function joinCommonTCAOCommissionAgent($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTCAOCommissionAgent');

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
            $this->addJoinObject($join, 'CommonTCAOCommissionAgent');
        }

        return $this;
    }

    /**
     * Use the CommonTCAOCommissionAgent relation CommonTCAOCommissionAgent object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTCAOCommissionAgentQuery A secondary query class using the current class as primary query
     */
    public function useCommonTCAOCommissionAgentQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonTCAOCommissionAgent($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTCAOCommissionAgent', 'CommonTCAOCommissionAgentQuery');
    }

    /**
     * Filter the query by a related CommonTCAOCommissionConsultation object
     *
     * @param   CommonTCAOCommissionConsultation|PropelObjectCollection $commonTCAOCommissionConsultation  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTCAOCommissionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTCAOCommissionConsultation($commonTCAOCommissionConsultation, $comparison = null)
    {
        if ($commonTCAOCommissionConsultation instanceof CommonTCAOCommissionConsultation) {
            return $this
                ->addUsingAlias(CommonTCAOCommissionPeer::ID_COMMISSION, $commonTCAOCommissionConsultation->getIdCommission(), $comparison);
        } elseif ($commonTCAOCommissionConsultation instanceof PropelObjectCollection) {
            return $this
                ->useCommonTCAOCommissionConsultationQuery()
                ->filterByPrimaryKeys($commonTCAOCommissionConsultation->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonTCAOCommissionConsultation() only accepts arguments of type CommonTCAOCommissionConsultation or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTCAOCommissionConsultation relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTCAOCommissionQuery The current query, for fluid interface
     */
    public function joinCommonTCAOCommissionConsultation($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTCAOCommissionConsultation');

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
            $this->addJoinObject($join, 'CommonTCAOCommissionConsultation');
        }

        return $this;
    }

    /**
     * Use the CommonTCAOCommissionConsultation relation CommonTCAOCommissionConsultation object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTCAOCommissionConsultationQuery A secondary query class using the current class as primary query
     */
    public function useCommonTCAOCommissionConsultationQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonTCAOCommissionConsultation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTCAOCommissionConsultation', 'CommonTCAOCommissionConsultationQuery');
    }

    /**
     * Filter the query by a related CommonTCAOCommissionIntervenantExterne object
     *
     * @param   CommonTCAOCommissionIntervenantExterne|PropelObjectCollection $commonTCAOCommissionIntervenantExterne  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTCAOCommissionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTCAOCommissionIntervenantExterne($commonTCAOCommissionIntervenantExterne, $comparison = null)
    {
        if ($commonTCAOCommissionIntervenantExterne instanceof CommonTCAOCommissionIntervenantExterne) {
            return $this
                ->addUsingAlias(CommonTCAOCommissionPeer::ID_COMMISSION, $commonTCAOCommissionIntervenantExterne->getIdCommission(), $comparison);
        } elseif ($commonTCAOCommissionIntervenantExterne instanceof PropelObjectCollection) {
            return $this
                ->useCommonTCAOCommissionIntervenantExterneQuery()
                ->filterByPrimaryKeys($commonTCAOCommissionIntervenantExterne->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonTCAOCommissionIntervenantExterne() only accepts arguments of type CommonTCAOCommissionIntervenantExterne or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTCAOCommissionIntervenantExterne relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTCAOCommissionQuery The current query, for fluid interface
     */
    public function joinCommonTCAOCommissionIntervenantExterne($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTCAOCommissionIntervenantExterne');

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
            $this->addJoinObject($join, 'CommonTCAOCommissionIntervenantExterne');
        }

        return $this;
    }

    /**
     * Use the CommonTCAOCommissionIntervenantExterne relation CommonTCAOCommissionIntervenantExterne object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTCAOCommissionIntervenantExterneQuery A secondary query class using the current class as primary query
     */
    public function useCommonTCAOCommissionIntervenantExterneQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonTCAOCommissionIntervenantExterne($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTCAOCommissionIntervenantExterne', 'CommonTCAOCommissionIntervenantExterneQuery');
    }

    /**
     * Filter the query by a related CommonTCAOOrdreDePassage object
     *
     * @param   CommonTCAOOrdreDePassage|PropelObjectCollection $commonTCAOOrdreDePassage  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTCAOCommissionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTCAOOrdreDePassage($commonTCAOOrdreDePassage, $comparison = null)
    {
        if ($commonTCAOOrdreDePassage instanceof CommonTCAOOrdreDePassage) {
            return $this
                ->addUsingAlias(CommonTCAOCommissionPeer::ID_COMMISSION, $commonTCAOOrdreDePassage->getIdCommission(), $comparison);
        } elseif ($commonTCAOOrdreDePassage instanceof PropelObjectCollection) {
            return $this
                ->useCommonTCAOOrdreDePassageQuery()
                ->filterByPrimaryKeys($commonTCAOOrdreDePassage->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonTCAOOrdreDePassage() only accepts arguments of type CommonTCAOOrdreDePassage or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTCAOOrdreDePassage relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTCAOCommissionQuery The current query, for fluid interface
     */
    public function joinCommonTCAOOrdreDePassage($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTCAOOrdreDePassage');

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
            $this->addJoinObject($join, 'CommonTCAOOrdreDePassage');
        }

        return $this;
    }

    /**
     * Use the CommonTCAOOrdreDePassage relation CommonTCAOOrdreDePassage object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTCAOOrdreDePassageQuery A secondary query class using the current class as primary query
     */
    public function useCommonTCAOOrdreDePassageQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonTCAOOrdreDePassage($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTCAOOrdreDePassage', 'CommonTCAOOrdreDePassageQuery');
    }

    /**
     * Filter the query by a related CommonTCAOSeance object
     *
     * @param   CommonTCAOSeance|PropelObjectCollection $commonTCAOSeance  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTCAOCommissionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTCAOSeance($commonTCAOSeance, $comparison = null)
    {
        if ($commonTCAOSeance instanceof CommonTCAOSeance) {
            return $this
                ->addUsingAlias(CommonTCAOCommissionPeer::ID_COMMISSION, $commonTCAOSeance->getIdCommission(), $comparison);
        } elseif ($commonTCAOSeance instanceof PropelObjectCollection) {
            return $this
                ->useCommonTCAOSeanceQuery()
                ->filterByPrimaryKeys($commonTCAOSeance->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonTCAOSeance() only accepts arguments of type CommonTCAOSeance or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTCAOSeance relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTCAOCommissionQuery The current query, for fluid interface
     */
    public function joinCommonTCAOSeance($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTCAOSeance');

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
            $this->addJoinObject($join, 'CommonTCAOSeance');
        }

        return $this;
    }

    /**
     * Use the CommonTCAOSeance relation CommonTCAOSeance object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTCAOSeanceQuery A secondary query class using the current class as primary query
     */
    public function useCommonTCAOSeanceQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonTCAOSeance($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTCAOSeance', 'CommonTCAOSeanceQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTCAOCommission $commonTCAOCommission Object to remove from the list of results
     *
     * @return CommonTCAOCommissionQuery The current query, for fluid interface
     */
    public function prune($commonTCAOCommission = null)
    {
        if ($commonTCAOCommission) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonTCAOCommissionPeer::ID_COMMISSION), $commonTCAOCommission->getIdCommission(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonTCAOCommissionPeer::ORGANISME), $commonTCAOCommission->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
