<?php


/**
 * Base class that represents a query for the 'caution_profil' table.
 *
 * 
 *
 * @method CommonCautionProfilQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonCautionProfilQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method CommonCautionProfilQuery orderByRoles($order = Criteria::ASC) Order by the roles column
 *
 * @method CommonCautionProfilQuery groupById() Group by the id column
 * @method CommonCautionProfilQuery groupByLibelle() Group by the libelle column
 * @method CommonCautionProfilQuery groupByRoles() Group by the roles column
 *
 * @method CommonCautionProfilQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonCautionProfilQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonCautionProfilQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonCautionProfilQuery leftJoinCommonAgentBanquier($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonAgentBanquier relation
 * @method CommonCautionProfilQuery rightJoinCommonAgentBanquier($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonAgentBanquier relation
 * @method CommonCautionProfilQuery innerJoinCommonAgentBanquier($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonAgentBanquier relation
 *
 * @method CommonCautionProfil findOne(PropelPDO $con = null) Return the first CommonCautionProfil matching the query
 * @method CommonCautionProfil findOneOrCreate(PropelPDO $con = null) Return the first CommonCautionProfil matching the query, or a new CommonCautionProfil object populated from the query conditions when no match is found
 *
 * @method CommonCautionProfil findOneByLibelle(string $libelle) Return the first CommonCautionProfil filtered by the libelle column
 * @method CommonCautionProfil findOneByRoles(string $roles) Return the first CommonCautionProfil filtered by the roles column
 *
 * @method array findById(int $id) Return CommonCautionProfil objects filtered by the id column
 * @method array findByLibelle(string $libelle) Return CommonCautionProfil objects filtered by the libelle column
 * @method array findByRoles(string $roles) Return CommonCautionProfil objects filtered by the roles column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonCautionProfilQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonCautionProfilQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonCautionProfil', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonCautionProfilQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonCautionProfilQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonCautionProfilQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonCautionProfilQuery) {
            return $criteria;
        }
        $query = new CommonCautionProfilQuery();
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
     * @return   CommonCautionProfil|CommonCautionProfil[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonCautionProfilPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonCautionProfilPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonCautionProfil A model object, or null if the key is not found
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
     * @return                 CommonCautionProfil A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `libelle`, `roles` FROM `caution_profil` WHERE `id` = :p0';
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
            $obj = new CommonCautionProfil();
            $obj->hydrate($row);
            CommonCautionProfilPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonCautionProfil|CommonCautionProfil[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonCautionProfil[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonCautionProfilQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonCautionProfilPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonCautionProfilQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonCautionProfilPeer::ID, $keys, Criteria::IN);
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
     * @return CommonCautionProfilQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonCautionProfilPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonCautionProfilPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionProfilPeer::ID, $id, $comparison);
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
     * @return CommonCautionProfilQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonCautionProfilPeer::LIBELLE, $libelle, $comparison);
    }

    /**
     * Filter the query on the roles column
     *
     * Example usage:
     * <code>
     * $query->filterByRoles('fooValue');   // WHERE roles = 'fooValue'
     * $query->filterByRoles('%fooValue%'); // WHERE roles LIKE '%fooValue%'
     * </code>
     *
     * @param     string $roles The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionProfilQuery The current query, for fluid interface
     */
    public function filterByRoles($roles = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($roles)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $roles)) {
                $roles = str_replace('*', '%', $roles);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCautionProfilPeer::ROLES, $roles, $comparison);
    }

    /**
     * Filter the query by a related CommonAgentBanquier object
     *
     * @param   CommonAgentBanquier|PropelObjectCollection $commonAgentBanquier  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonCautionProfilQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonAgentBanquier($commonAgentBanquier, $comparison = null)
    {
        if ($commonAgentBanquier instanceof CommonAgentBanquier) {
            return $this
                ->addUsingAlias(CommonCautionProfilPeer::ID, $commonAgentBanquier->getIdProfil(), $comparison);
        } elseif ($commonAgentBanquier instanceof PropelObjectCollection) {
            return $this
                ->useCommonAgentBanquierQuery()
                ->filterByPrimaryKeys($commonAgentBanquier->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonAgentBanquier() only accepts arguments of type CommonAgentBanquier or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonAgentBanquier relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonCautionProfilQuery The current query, for fluid interface
     */
    public function joinCommonAgentBanquier($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonAgentBanquier');

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
            $this->addJoinObject($join, 'CommonAgentBanquier');
        }

        return $this;
    }

    /**
     * Use the CommonAgentBanquier relation CommonAgentBanquier object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonAgentBanquierQuery A secondary query class using the current class as primary query
     */
    public function useCommonAgentBanquierQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonAgentBanquier($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonAgentBanquier', 'CommonAgentBanquierQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonCautionProfil $commonCautionProfil Object to remove from the list of results
     *
     * @return CommonCautionProfilQuery The current query, for fluid interface
     */
    public function prune($commonCautionProfil = null)
    {
        if ($commonCautionProfil) {
            $this->addUsingAlias(CommonCautionProfilPeer::ID, $commonCautionProfil->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
