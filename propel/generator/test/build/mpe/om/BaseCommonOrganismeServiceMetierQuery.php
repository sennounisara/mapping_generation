<?php


/**
 * Base class that represents a query for the 'Organisme_Service_Metier' table.
 *
 * 
 *
 * @method CommonOrganismeServiceMetierQuery orderByIdAuto($order = Criteria::ASC) Order by the id_auto column
 * @method CommonOrganismeServiceMetierQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonOrganismeServiceMetierQuery orderByIdServiceMetier($order = Criteria::ASC) Order by the id_service_metier column
 *
 * @method CommonOrganismeServiceMetierQuery groupByIdAuto() Group by the id_auto column
 * @method CommonOrganismeServiceMetierQuery groupByOrganisme() Group by the organisme column
 * @method CommonOrganismeServiceMetierQuery groupByIdServiceMetier() Group by the id_service_metier column
 *
 * @method CommonOrganismeServiceMetierQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonOrganismeServiceMetierQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonOrganismeServiceMetierQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonOrganismeServiceMetierQuery leftJoinCommonOrganisme($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonOrganisme relation
 * @method CommonOrganismeServiceMetierQuery rightJoinCommonOrganisme($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonOrganisme relation
 * @method CommonOrganismeServiceMetierQuery innerJoinCommonOrganisme($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonOrganisme relation
 *
 * @method CommonOrganismeServiceMetier findOne(PropelPDO $con = null) Return the first CommonOrganismeServiceMetier matching the query
 * @method CommonOrganismeServiceMetier findOneOrCreate(PropelPDO $con = null) Return the first CommonOrganismeServiceMetier matching the query, or a new CommonOrganismeServiceMetier object populated from the query conditions when no match is found
 *
 * @method CommonOrganismeServiceMetier findOneByOrganisme(string $organisme) Return the first CommonOrganismeServiceMetier filtered by the organisme column
 * @method CommonOrganismeServiceMetier findOneByIdServiceMetier(int $id_service_metier) Return the first CommonOrganismeServiceMetier filtered by the id_service_metier column
 *
 * @method array findByIdAuto(int $id_auto) Return CommonOrganismeServiceMetier objects filtered by the id_auto column
 * @method array findByOrganisme(string $organisme) Return CommonOrganismeServiceMetier objects filtered by the organisme column
 * @method array findByIdServiceMetier(int $id_service_metier) Return CommonOrganismeServiceMetier objects filtered by the id_service_metier column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonOrganismeServiceMetierQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonOrganismeServiceMetierQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonOrganismeServiceMetier', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonOrganismeServiceMetierQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonOrganismeServiceMetierQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonOrganismeServiceMetierQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonOrganismeServiceMetierQuery) {
            return $criteria;
        }
        $query = new CommonOrganismeServiceMetierQuery();
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
     * @return   CommonOrganismeServiceMetier|CommonOrganismeServiceMetier[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonOrganismeServiceMetierPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonOrganismeServiceMetierPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonOrganismeServiceMetier A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdAuto($key, $con = null)
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
     * @return                 CommonOrganismeServiceMetier A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_auto`, `organisme`, `id_service_metier` FROM `Organisme_Service_Metier` WHERE `id_auto` = :p0';
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
            $obj = new CommonOrganismeServiceMetier();
            $obj->hydrate($row);
            CommonOrganismeServiceMetierPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonOrganismeServiceMetier|CommonOrganismeServiceMetier[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonOrganismeServiceMetier[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonOrganismeServiceMetierQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonOrganismeServiceMetierPeer::ID_AUTO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonOrganismeServiceMetierQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonOrganismeServiceMetierPeer::ID_AUTO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_auto column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAuto(1234); // WHERE id_auto = 1234
     * $query->filterByIdAuto(array(12, 34)); // WHERE id_auto IN (12, 34)
     * $query->filterByIdAuto(array('min' => 12)); // WHERE id_auto >= 12
     * $query->filterByIdAuto(array('max' => 12)); // WHERE id_auto <= 12
     * </code>
     *
     * @param     mixed $idAuto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeServiceMetierQuery The current query, for fluid interface
     */
    public function filterByIdAuto($idAuto = null, $comparison = null)
    {
        if (is_array($idAuto)) {
            $useMinMax = false;
            if (isset($idAuto['min'])) {
                $this->addUsingAlias(CommonOrganismeServiceMetierPeer::ID_AUTO, $idAuto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAuto['max'])) {
                $this->addUsingAlias(CommonOrganismeServiceMetierPeer::ID_AUTO, $idAuto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOrganismeServiceMetierPeer::ID_AUTO, $idAuto, $comparison);
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
     * @return CommonOrganismeServiceMetierQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonOrganismeServiceMetierPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the id_service_metier column
     *
     * Example usage:
     * <code>
     * $query->filterByIdServiceMetier(1234); // WHERE id_service_metier = 1234
     * $query->filterByIdServiceMetier(array(12, 34)); // WHERE id_service_metier IN (12, 34)
     * $query->filterByIdServiceMetier(array('min' => 12)); // WHERE id_service_metier >= 12
     * $query->filterByIdServiceMetier(array('max' => 12)); // WHERE id_service_metier <= 12
     * </code>
     *
     * @param     mixed $idServiceMetier The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOrganismeServiceMetierQuery The current query, for fluid interface
     */
    public function filterByIdServiceMetier($idServiceMetier = null, $comparison = null)
    {
        if (is_array($idServiceMetier)) {
            $useMinMax = false;
            if (isset($idServiceMetier['min'])) {
                $this->addUsingAlias(CommonOrganismeServiceMetierPeer::ID_SERVICE_METIER, $idServiceMetier['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idServiceMetier['max'])) {
                $this->addUsingAlias(CommonOrganismeServiceMetierPeer::ID_SERVICE_METIER, $idServiceMetier['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOrganismeServiceMetierPeer::ID_SERVICE_METIER, $idServiceMetier, $comparison);
    }

    /**
     * Filter the query by a related CommonOrganisme object
     *
     * @param   CommonOrganisme|PropelObjectCollection $commonOrganisme The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonOrganismeServiceMetierQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonOrganisme($commonOrganisme, $comparison = null)
    {
        if ($commonOrganisme instanceof CommonOrganisme) {
            return $this
                ->addUsingAlias(CommonOrganismeServiceMetierPeer::ORGANISME, $commonOrganisme->getAcronyme(), $comparison);
        } elseif ($commonOrganisme instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonOrganismeServiceMetierPeer::ORGANISME, $commonOrganisme->toKeyValue('PrimaryKey', 'Acronyme'), $comparison);
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
     * @return CommonOrganismeServiceMetierQuery The current query, for fluid interface
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
     * @param   CommonOrganismeServiceMetier $commonOrganismeServiceMetier Object to remove from the list of results
     *
     * @return CommonOrganismeServiceMetierQuery The current query, for fluid interface
     */
    public function prune($commonOrganismeServiceMetier = null)
    {
        if ($commonOrganismeServiceMetier) {
            $this->addUsingAlias(CommonOrganismeServiceMetierPeer::ID_AUTO, $commonOrganismeServiceMetier->getIdAuto(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
