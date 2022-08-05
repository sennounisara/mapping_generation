<?php


/**
 * Base class that represents a query for the 'sous_type_facture' table.
 *
 * 
 *
 * @method CommonSousTypeFactureQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonSousTypeFactureQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method CommonSousTypeFactureQuery orderByIdType($order = Criteria::ASC) Order by the id_type column
 *
 * @method CommonSousTypeFactureQuery groupById() Group by the id column
 * @method CommonSousTypeFactureQuery groupByLibelle() Group by the libelle column
 * @method CommonSousTypeFactureQuery groupByIdType() Group by the id_type column
 *
 * @method CommonSousTypeFactureQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonSousTypeFactureQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonSousTypeFactureQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonSousTypeFactureQuery leftJoinCommonTypeFacture($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTypeFacture relation
 * @method CommonSousTypeFactureQuery rightJoinCommonTypeFacture($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTypeFacture relation
 * @method CommonSousTypeFactureQuery innerJoinCommonTypeFacture($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTypeFacture relation
 *
 * @method CommonSousTypeFactureQuery leftJoinCommonFacture($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonFacture relation
 * @method CommonSousTypeFactureQuery rightJoinCommonFacture($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonFacture relation
 * @method CommonSousTypeFactureQuery innerJoinCommonFacture($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonFacture relation
 *
 * @method CommonSousTypeFactureQuery leftJoinCommonPieceSousTypeFacture($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonPieceSousTypeFacture relation
 * @method CommonSousTypeFactureQuery rightJoinCommonPieceSousTypeFacture($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonPieceSousTypeFacture relation
 * @method CommonSousTypeFactureQuery innerJoinCommonPieceSousTypeFacture($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonPieceSousTypeFacture relation
 *
 * @method CommonSousTypeFacture findOne(PropelPDO $con = null) Return the first CommonSousTypeFacture matching the query
 * @method CommonSousTypeFacture findOneOrCreate(PropelPDO $con = null) Return the first CommonSousTypeFacture matching the query, or a new CommonSousTypeFacture object populated from the query conditions when no match is found
 *
 * @method CommonSousTypeFacture findOneByLibelle(string $libelle) Return the first CommonSousTypeFacture filtered by the libelle column
 * @method CommonSousTypeFacture findOneByIdType(int $id_type) Return the first CommonSousTypeFacture filtered by the id_type column
 *
 * @method array findById(int $id) Return CommonSousTypeFacture objects filtered by the id column
 * @method array findByLibelle(string $libelle) Return CommonSousTypeFacture objects filtered by the libelle column
 * @method array findByIdType(int $id_type) Return CommonSousTypeFacture objects filtered by the id_type column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonSousTypeFactureQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonSousTypeFactureQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonSousTypeFacture', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonSousTypeFactureQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonSousTypeFactureQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonSousTypeFactureQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonSousTypeFactureQuery) {
            return $criteria;
        }
        $query = new CommonSousTypeFactureQuery();
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
     * @return   CommonSousTypeFacture|CommonSousTypeFacture[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonSousTypeFacturePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonSousTypeFacturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonSousTypeFacture A model object, or null if the key is not found
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
     * @return                 CommonSousTypeFacture A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `libelle`, `id_type` FROM `sous_type_facture` WHERE `id` = :p0';
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
            $obj = new CommonSousTypeFacture();
            $obj->hydrate($row);
            CommonSousTypeFacturePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonSousTypeFacture|CommonSousTypeFacture[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonSousTypeFacture[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonSousTypeFactureQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonSousTypeFacturePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonSousTypeFactureQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonSousTypeFacturePeer::ID, $keys, Criteria::IN);
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
     * @return CommonSousTypeFactureQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonSousTypeFacturePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonSousTypeFacturePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonSousTypeFacturePeer::ID, $id, $comparison);
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
     * @return CommonSousTypeFactureQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonSousTypeFacturePeer::LIBELLE, $libelle, $comparison);
    }

    /**
     * Filter the query on the id_type column
     *
     * Example usage:
     * <code>
     * $query->filterByIdType(1234); // WHERE id_type = 1234
     * $query->filterByIdType(array(12, 34)); // WHERE id_type IN (12, 34)
     * $query->filterByIdType(array('min' => 12)); // WHERE id_type >= 12
     * $query->filterByIdType(array('max' => 12)); // WHERE id_type <= 12
     * </code>
     *
     * @see       filterByCommonTypeFacture()
     *
     * @param     mixed $idType The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSousTypeFactureQuery The current query, for fluid interface
     */
    public function filterByIdType($idType = null, $comparison = null)
    {
        if (is_array($idType)) {
            $useMinMax = false;
            if (isset($idType['min'])) {
                $this->addUsingAlias(CommonSousTypeFacturePeer::ID_TYPE, $idType['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idType['max'])) {
                $this->addUsingAlias(CommonSousTypeFacturePeer::ID_TYPE, $idType['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonSousTypeFacturePeer::ID_TYPE, $idType, $comparison);
    }

    /**
     * Filter the query by a related CommonTypeFacture object
     *
     * @param   CommonTypeFacture|PropelObjectCollection $commonTypeFacture The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonSousTypeFactureQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTypeFacture($commonTypeFacture, $comparison = null)
    {
        if ($commonTypeFacture instanceof CommonTypeFacture) {
            return $this
                ->addUsingAlias(CommonSousTypeFacturePeer::ID_TYPE, $commonTypeFacture->getId(), $comparison);
        } elseif ($commonTypeFacture instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonSousTypeFacturePeer::ID_TYPE, $commonTypeFacture->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonTypeFacture() only accepts arguments of type CommonTypeFacture or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTypeFacture relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonSousTypeFactureQuery The current query, for fluid interface
     */
    public function joinCommonTypeFacture($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTypeFacture');

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
            $this->addJoinObject($join, 'CommonTypeFacture');
        }

        return $this;
    }

    /**
     * Use the CommonTypeFacture relation CommonTypeFacture object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTypeFactureQuery A secondary query class using the current class as primary query
     */
    public function useCommonTypeFactureQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonTypeFacture($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTypeFacture', 'CommonTypeFactureQuery');
    }

    /**
     * Filter the query by a related CommonFacture object
     *
     * @param   CommonFacture|PropelObjectCollection $commonFacture  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonSousTypeFactureQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonFacture($commonFacture, $comparison = null)
    {
        if ($commonFacture instanceof CommonFacture) {
            return $this
                ->addUsingAlias(CommonSousTypeFacturePeer::ID, $commonFacture->getIdSousType(), $comparison);
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
     * @return CommonSousTypeFactureQuery The current query, for fluid interface
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
     * Filter the query by a related CommonPieceSousTypeFacture object
     *
     * @param   CommonPieceSousTypeFacture|PropelObjectCollection $commonPieceSousTypeFacture  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonSousTypeFactureQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonPieceSousTypeFacture($commonPieceSousTypeFacture, $comparison = null)
    {
        if ($commonPieceSousTypeFacture instanceof CommonPieceSousTypeFacture) {
            return $this
                ->addUsingAlias(CommonSousTypeFacturePeer::ID, $commonPieceSousTypeFacture->getIdSousType(), $comparison);
        } elseif ($commonPieceSousTypeFacture instanceof PropelObjectCollection) {
            return $this
                ->useCommonPieceSousTypeFactureQuery()
                ->filterByPrimaryKeys($commonPieceSousTypeFacture->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonPieceSousTypeFacture() only accepts arguments of type CommonPieceSousTypeFacture or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonPieceSousTypeFacture relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonSousTypeFactureQuery The current query, for fluid interface
     */
    public function joinCommonPieceSousTypeFacture($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonPieceSousTypeFacture');

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
            $this->addJoinObject($join, 'CommonPieceSousTypeFacture');
        }

        return $this;
    }

    /**
     * Use the CommonPieceSousTypeFacture relation CommonPieceSousTypeFacture object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonPieceSousTypeFactureQuery A secondary query class using the current class as primary query
     */
    public function useCommonPieceSousTypeFactureQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonPieceSousTypeFacture($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonPieceSousTypeFacture', 'CommonPieceSousTypeFactureQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonSousTypeFacture $commonSousTypeFacture Object to remove from the list of results
     *
     * @return CommonSousTypeFactureQuery The current query, for fluid interface
     */
    public function prune($commonSousTypeFacture = null)
    {
        if ($commonSousTypeFacture) {
            $this->addUsingAlias(CommonSousTypeFacturePeer::ID, $commonSousTypeFacture->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
