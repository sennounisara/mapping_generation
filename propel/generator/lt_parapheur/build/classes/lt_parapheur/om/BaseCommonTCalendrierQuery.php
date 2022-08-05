<?php


/**
 * Base class that represents a query for the 't_calendrier' table.
 *
 * 
 *
 * @method CommonTCalendrierQuery orderByIdCalendrier($order = Criteria::ASC) Order by the ID_CALENDRIER column
 * @method CommonTCalendrierQuery orderByReference($order = Criteria::ASC) Order by the REFERENCE column
 * @method CommonTCalendrierQuery orderByOrganisme($order = Criteria::ASC) Order by the ORGANISME column
 *
 * @method CommonTCalendrierQuery groupByIdCalendrier() Group by the ID_CALENDRIER column
 * @method CommonTCalendrierQuery groupByReference() Group by the REFERENCE column
 * @method CommonTCalendrierQuery groupByOrganisme() Group by the ORGANISME column
 *
 * @method CommonTCalendrierQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTCalendrierQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTCalendrierQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTCalendrierQuery leftJoinCommonConsultation($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonConsultation relation
 * @method CommonTCalendrierQuery rightJoinCommonConsultation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonConsultation relation
 * @method CommonTCalendrierQuery innerJoinCommonConsultation($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonConsultation relation
 *
 * @method CommonTCalendrierQuery leftJoinCommonTCalendrierEtape($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTCalendrierEtape relation
 * @method CommonTCalendrierQuery rightJoinCommonTCalendrierEtape($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTCalendrierEtape relation
 * @method CommonTCalendrierQuery innerJoinCommonTCalendrierEtape($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTCalendrierEtape relation
 *
 * @method CommonTCalendrier findOne(PropelPDO $con = null) Return the first CommonTCalendrier matching the query
 * @method CommonTCalendrier findOneOrCreate(PropelPDO $con = null) Return the first CommonTCalendrier matching the query, or a new CommonTCalendrier object populated from the query conditions when no match is found
 *
 * @method CommonTCalendrier findOneByReference(int $REFERENCE) Return the first CommonTCalendrier filtered by the REFERENCE column
 * @method CommonTCalendrier findOneByOrganisme(string $ORGANISME) Return the first CommonTCalendrier filtered by the ORGANISME column
 *
 * @method array findByIdCalendrier(int $ID_CALENDRIER) Return CommonTCalendrier objects filtered by the ID_CALENDRIER column
 * @method array findByReference(int $REFERENCE) Return CommonTCalendrier objects filtered by the REFERENCE column
 * @method array findByOrganisme(string $ORGANISME) Return CommonTCalendrier objects filtered by the ORGANISME column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTCalendrierQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTCalendrierQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTCalendrier', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTCalendrierQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTCalendrierQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTCalendrierQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTCalendrierQuery) {
            return $criteria;
        }
        $query = new CommonTCalendrierQuery();
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
     * @return   CommonTCalendrier|CommonTCalendrier[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTCalendrierPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTCalendrierPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTCalendrier A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdCalendrier($key, $con = null)
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
     * @return                 CommonTCalendrier A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_CALENDRIER`, `REFERENCE`, `ORGANISME` FROM `t_calendrier` WHERE `ID_CALENDRIER` = :p0';
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
            $obj = new CommonTCalendrier();
            $obj->hydrate($row);
            CommonTCalendrierPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonTCalendrier|CommonTCalendrier[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTCalendrier[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTCalendrierQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonTCalendrierPeer::ID_CALENDRIER, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTCalendrierQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonTCalendrierPeer::ID_CALENDRIER, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID_CALENDRIER column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCalendrier(1234); // WHERE ID_CALENDRIER = 1234
     * $query->filterByIdCalendrier(array(12, 34)); // WHERE ID_CALENDRIER IN (12, 34)
     * $query->filterByIdCalendrier(array('min' => 12)); // WHERE ID_CALENDRIER >= 12
     * $query->filterByIdCalendrier(array('max' => 12)); // WHERE ID_CALENDRIER <= 12
     * </code>
     *
     * @param     mixed $idCalendrier The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCalendrierQuery The current query, for fluid interface
     */
    public function filterByIdCalendrier($idCalendrier = null, $comparison = null)
    {
        if (is_array($idCalendrier)) {
            $useMinMax = false;
            if (isset($idCalendrier['min'])) {
                $this->addUsingAlias(CommonTCalendrierPeer::ID_CALENDRIER, $idCalendrier['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCalendrier['max'])) {
                $this->addUsingAlias(CommonTCalendrierPeer::ID_CALENDRIER, $idCalendrier['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCalendrierPeer::ID_CALENDRIER, $idCalendrier, $comparison);
    }

    /**
     * Filter the query on the REFERENCE column
     *
     * Example usage:
     * <code>
     * $query->filterByReference(1234); // WHERE REFERENCE = 1234
     * $query->filterByReference(array(12, 34)); // WHERE REFERENCE IN (12, 34)
     * $query->filterByReference(array('min' => 12)); // WHERE REFERENCE >= 12
     * $query->filterByReference(array('max' => 12)); // WHERE REFERENCE <= 12
     * </code>
     *
     * @see       filterByCommonConsultation()
     *
     * @param     mixed $reference The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCalendrierQuery The current query, for fluid interface
     */
    public function filterByReference($reference = null, $comparison = null)
    {
        if (is_array($reference)) {
            $useMinMax = false;
            if (isset($reference['min'])) {
                $this->addUsingAlias(CommonTCalendrierPeer::REFERENCE, $reference['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reference['max'])) {
                $this->addUsingAlias(CommonTCalendrierPeer::REFERENCE, $reference['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCalendrierPeer::REFERENCE, $reference, $comparison);
    }

    /**
     * Filter the query on the ORGANISME column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganisme('fooValue');   // WHERE ORGANISME = 'fooValue'
     * $query->filterByOrganisme('%fooValue%'); // WHERE ORGANISME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organisme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCalendrierQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTCalendrierPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query by a related CommonConsultation object
     *
     * @param   CommonConsultation $commonConsultation The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTCalendrierQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonConsultation($commonConsultation, $comparison = null)
    {
        if ($commonConsultation instanceof CommonConsultation) {
            return $this
                ->addUsingAlias(CommonTCalendrierPeer::ORGANISME, $commonConsultation->getOrganisme(), $comparison)
                ->addUsingAlias(CommonTCalendrierPeer::REFERENCE, $commonConsultation->getReference(), $comparison);
        } else {
            throw new PropelException('filterByCommonConsultation() only accepts arguments of type CommonConsultation');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonConsultation relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTCalendrierQuery The current query, for fluid interface
     */
    public function joinCommonConsultation($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonConsultation');

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
            $this->addJoinObject($join, 'CommonConsultation');
        }

        return $this;
    }

    /**
     * Use the CommonConsultation relation CommonConsultation object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonConsultationQuery A secondary query class using the current class as primary query
     */
    public function useCommonConsultationQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonConsultation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonConsultation', 'CommonConsultationQuery');
    }

    /**
     * Filter the query by a related CommonTCalendrierEtape object
     *
     * @param   CommonTCalendrierEtape|PropelObjectCollection $commonTCalendrierEtape  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTCalendrierQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTCalendrierEtape($commonTCalendrierEtape, $comparison = null)
    {
        if ($commonTCalendrierEtape instanceof CommonTCalendrierEtape) {
            return $this
                ->addUsingAlias(CommonTCalendrierPeer::ID_CALENDRIER, $commonTCalendrierEtape->getIdCalendrier(), $comparison);
        } elseif ($commonTCalendrierEtape instanceof PropelObjectCollection) {
            return $this
                ->useCommonTCalendrierEtapeQuery()
                ->filterByPrimaryKeys($commonTCalendrierEtape->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonTCalendrierEtape() only accepts arguments of type CommonTCalendrierEtape or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTCalendrierEtape relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTCalendrierQuery The current query, for fluid interface
     */
    public function joinCommonTCalendrierEtape($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTCalendrierEtape');

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
            $this->addJoinObject($join, 'CommonTCalendrierEtape');
        }

        return $this;
    }

    /**
     * Use the CommonTCalendrierEtape relation CommonTCalendrierEtape object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTCalendrierEtapeQuery A secondary query class using the current class as primary query
     */
    public function useCommonTCalendrierEtapeQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonTCalendrierEtape($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTCalendrierEtape', 'CommonTCalendrierEtapeQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTCalendrier $commonTCalendrier Object to remove from the list of results
     *
     * @return CommonTCalendrierQuery The current query, for fluid interface
     */
    public function prune($commonTCalendrier = null)
    {
        if ($commonTCalendrier) {
            $this->addUsingAlias(CommonTCalendrierPeer::ID_CALENDRIER, $commonTCalendrier->getIdCalendrier(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
