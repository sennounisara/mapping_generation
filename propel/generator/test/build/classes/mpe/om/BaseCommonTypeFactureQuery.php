<?php


/**
 * Base class that represents a query for the 'type_facture' table.
 *
 * 
 *
 * @method CommonTypeFactureQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonTypeFactureQuery orderByIsLocale($order = Criteria::ASC) Order by the is_locale column
 * @method CommonTypeFactureQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 *
 * @method CommonTypeFactureQuery groupById() Group by the id column
 * @method CommonTypeFactureQuery groupByIsLocale() Group by the is_locale column
 * @method CommonTypeFactureQuery groupByLibelle() Group by the libelle column
 *
 * @method CommonTypeFactureQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTypeFactureQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTypeFactureQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTypeFactureQuery leftJoinCommonFacture($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonFacture relation
 * @method CommonTypeFactureQuery rightJoinCommonFacture($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonFacture relation
 * @method CommonTypeFactureQuery innerJoinCommonFacture($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonFacture relation
 *
 * @method CommonTypeFactureQuery leftJoinCommonSousTypeFacture($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonSousTypeFacture relation
 * @method CommonTypeFactureQuery rightJoinCommonSousTypeFacture($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonSousTypeFacture relation
 * @method CommonTypeFactureQuery innerJoinCommonSousTypeFacture($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonSousTypeFacture relation
 *
 * @method CommonTypeFacture findOne(PropelPDO $con = null) Return the first CommonTypeFacture matching the query
 * @method CommonTypeFacture findOneOrCreate(PropelPDO $con = null) Return the first CommonTypeFacture matching the query, or a new CommonTypeFacture object populated from the query conditions when no match is found
 *
 * @method CommonTypeFacture findOneByIsLocale(boolean $is_locale) Return the first CommonTypeFacture filtered by the is_locale column
 * @method CommonTypeFacture findOneByLibelle(string $libelle) Return the first CommonTypeFacture filtered by the libelle column
 *
 * @method array findById(int $id) Return CommonTypeFacture objects filtered by the id column
 * @method array findByIsLocale(boolean $is_locale) Return CommonTypeFacture objects filtered by the is_locale column
 * @method array findByLibelle(string $libelle) Return CommonTypeFacture objects filtered by the libelle column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTypeFactureQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTypeFactureQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTypeFacture', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTypeFactureQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTypeFactureQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTypeFactureQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTypeFactureQuery) {
            return $criteria;
        }
        $query = new CommonTypeFactureQuery();
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
     * @return   CommonTypeFacture|CommonTypeFacture[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTypeFacturePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTypeFacturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTypeFacture A model object, or null if the key is not found
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
     * @return                 CommonTypeFacture A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `is_locale`, `libelle` FROM `type_facture` WHERE `id` = :p0';
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
            $obj = new CommonTypeFacture();
            $obj->hydrate($row);
            CommonTypeFacturePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonTypeFacture|CommonTypeFacture[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTypeFacture[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTypeFactureQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonTypeFacturePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTypeFactureQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonTypeFacturePeer::ID, $keys, Criteria::IN);
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
     * @return CommonTypeFactureQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonTypeFacturePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonTypeFacturePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTypeFacturePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the is_locale column
     *
     * Example usage:
     * <code>
     * $query->filterByIsLocale(true); // WHERE is_locale = true
     * $query->filterByIsLocale('yes'); // WHERE is_locale = true
     * </code>
     *
     * @param     boolean|string $isLocale The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeFactureQuery The current query, for fluid interface
     */
    public function filterByIsLocale($isLocale = null, $comparison = null)
    {
        if (is_string($isLocale)) {
            $isLocale = in_array(strtolower($isLocale), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CommonTypeFacturePeer::IS_LOCALE, $isLocale, $comparison);
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
     * @return CommonTypeFactureQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTypeFacturePeer::LIBELLE, $libelle, $comparison);
    }

    /**
     * Filter the query by a related CommonFacture object
     *
     * @param   CommonFacture|PropelObjectCollection $commonFacture  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTypeFactureQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonFacture($commonFacture, $comparison = null)
    {
        if ($commonFacture instanceof CommonFacture) {
            return $this
                ->addUsingAlias(CommonTypeFacturePeer::ID, $commonFacture->getIdType(), $comparison);
        } elseif ($commonFacture instanceof PropelObjectCollection) {
            return $this
                ->useCommonFactureQuery()
                ->filterByPrimaryKeys($commonFacture->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonFacture() only accepts arguments of type CommonFacture or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonFacture relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTypeFactureQuery The current query, for fluid interface
     */
    public function joinCommonFacture($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonFacture');

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
            $this->addJoinObject($join, 'CommonFacture');
        }

        return $this;
    }

    /**
     * Use the CommonFacture relation CommonFacture object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonFactureQuery A secondary query class using the current class as primary query
     */
    public function useCommonFactureQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonFacture($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonFacture', 'CommonFactureQuery');
    }

    /**
     * Filter the query by a related CommonSousTypeFacture object
     *
     * @param   CommonSousTypeFacture|PropelObjectCollection $commonSousTypeFacture  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTypeFactureQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonSousTypeFacture($commonSousTypeFacture, $comparison = null)
    {
        if ($commonSousTypeFacture instanceof CommonSousTypeFacture) {
            return $this
                ->addUsingAlias(CommonTypeFacturePeer::ID, $commonSousTypeFacture->getIdType(), $comparison);
        } elseif ($commonSousTypeFacture instanceof PropelObjectCollection) {
            return $this
                ->useCommonSousTypeFactureQuery()
                ->filterByPrimaryKeys($commonSousTypeFacture->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonSousTypeFacture() only accepts arguments of type CommonSousTypeFacture or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonSousTypeFacture relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTypeFactureQuery The current query, for fluid interface
     */
    public function joinCommonSousTypeFacture($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonSousTypeFacture');

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
            $this->addJoinObject($join, 'CommonSousTypeFacture');
        }

        return $this;
    }

    /**
     * Use the CommonSousTypeFacture relation CommonSousTypeFacture object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonSousTypeFactureQuery A secondary query class using the current class as primary query
     */
    public function useCommonSousTypeFactureQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonSousTypeFacture($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonSousTypeFacture', 'CommonSousTypeFactureQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTypeFacture $commonTypeFacture Object to remove from the list of results
     *
     * @return CommonTypeFactureQuery The current query, for fluid interface
     */
    public function prune($commonTypeFacture = null)
    {
        if ($commonTypeFacture) {
            $this->addUsingAlias(CommonTypeFacturePeer::ID, $commonTypeFacture->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
