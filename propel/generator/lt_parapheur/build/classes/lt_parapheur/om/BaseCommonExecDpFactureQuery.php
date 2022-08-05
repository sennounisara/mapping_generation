<?php


/**
 * Base class that represents a query for the 'exec_dp_facture' table.
 *
 * 
 *
 * @method CommonExecDpFactureQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonExecDpFactureQuery orderByIdDp($order = Criteria::ASC) Order by the id_dp column
 * @method CommonExecDpFactureQuery orderByIdFacture($order = Criteria::ASC) Order by the id_facture column
 *
 * @method CommonExecDpFactureQuery groupById() Group by the id column
 * @method CommonExecDpFactureQuery groupByIdDp() Group by the id_dp column
 * @method CommonExecDpFactureQuery groupByIdFacture() Group by the id_facture column
 *
 * @method CommonExecDpFactureQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonExecDpFactureQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonExecDpFactureQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonExecDpFactureQuery leftJoinCommonExecDossierPaiement($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecDossierPaiement relation
 * @method CommonExecDpFactureQuery rightJoinCommonExecDossierPaiement($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecDossierPaiement relation
 * @method CommonExecDpFactureQuery innerJoinCommonExecDossierPaiement($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecDossierPaiement relation
 *
 * @method CommonExecDpFactureQuery leftJoinCommonExecFacture($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecFacture relation
 * @method CommonExecDpFactureQuery rightJoinCommonExecFacture($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecFacture relation
 * @method CommonExecDpFactureQuery innerJoinCommonExecFacture($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecFacture relation
 *
 * @method CommonExecDpFacture findOne(PropelPDO $con = null) Return the first CommonExecDpFacture matching the query
 * @method CommonExecDpFacture findOneOrCreate(PropelPDO $con = null) Return the first CommonExecDpFacture matching the query, or a new CommonExecDpFacture object populated from the query conditions when no match is found
 *
 * @method CommonExecDpFacture findOneByIdDp(int $id_dp) Return the first CommonExecDpFacture filtered by the id_dp column
 * @method CommonExecDpFacture findOneByIdFacture(int $id_facture) Return the first CommonExecDpFacture filtered by the id_facture column
 *
 * @method array findById(int $id) Return CommonExecDpFacture objects filtered by the id column
 * @method array findByIdDp(int $id_dp) Return CommonExecDpFacture objects filtered by the id_dp column
 * @method array findByIdFacture(int $id_facture) Return CommonExecDpFacture objects filtered by the id_facture column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonExecDpFactureQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonExecDpFactureQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonExecDpFacture', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonExecDpFactureQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonExecDpFactureQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonExecDpFactureQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonExecDpFactureQuery) {
            return $criteria;
        }
        $query = new CommonExecDpFactureQuery();
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
     * @return   CommonExecDpFacture|CommonExecDpFacture[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonExecDpFacturePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonExecDpFacturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonExecDpFacture A model object, or null if the key is not found
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
     * @return                 CommonExecDpFacture A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_dp`, `id_facture` FROM `exec_dp_facture` WHERE `id` = :p0';
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
            $obj = new CommonExecDpFacture();
            $obj->hydrate($row);
            CommonExecDpFacturePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonExecDpFacture|CommonExecDpFacture[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonExecDpFacture[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonExecDpFactureQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonExecDpFacturePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonExecDpFactureQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonExecDpFacturePeer::ID, $keys, Criteria::IN);
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
     * @return CommonExecDpFactureQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonExecDpFacturePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonExecDpFacturePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecDpFacturePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_dp column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDp(1234); // WHERE id_dp = 1234
     * $query->filterByIdDp(array(12, 34)); // WHERE id_dp IN (12, 34)
     * $query->filterByIdDp(array('min' => 12)); // WHERE id_dp >= 12
     * $query->filterByIdDp(array('max' => 12)); // WHERE id_dp <= 12
     * </code>
     *
     * @see       filterByCommonExecDossierPaiement()
     *
     * @param     mixed $idDp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecDpFactureQuery The current query, for fluid interface
     */
    public function filterByIdDp($idDp = null, $comparison = null)
    {
        if (is_array($idDp)) {
            $useMinMax = false;
            if (isset($idDp['min'])) {
                $this->addUsingAlias(CommonExecDpFacturePeer::ID_DP, $idDp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDp['max'])) {
                $this->addUsingAlias(CommonExecDpFacturePeer::ID_DP, $idDp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecDpFacturePeer::ID_DP, $idDp, $comparison);
    }

    /**
     * Filter the query on the id_facture column
     *
     * Example usage:
     * <code>
     * $query->filterByIdFacture(1234); // WHERE id_facture = 1234
     * $query->filterByIdFacture(array(12, 34)); // WHERE id_facture IN (12, 34)
     * $query->filterByIdFacture(array('min' => 12)); // WHERE id_facture >= 12
     * $query->filterByIdFacture(array('max' => 12)); // WHERE id_facture <= 12
     * </code>
     *
     * @see       filterByCommonExecFacture()
     *
     * @param     mixed $idFacture The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecDpFactureQuery The current query, for fluid interface
     */
    public function filterByIdFacture($idFacture = null, $comparison = null)
    {
        if (is_array($idFacture)) {
            $useMinMax = false;
            if (isset($idFacture['min'])) {
                $this->addUsingAlias(CommonExecDpFacturePeer::ID_FACTURE, $idFacture['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idFacture['max'])) {
                $this->addUsingAlias(CommonExecDpFacturePeer::ID_FACTURE, $idFacture['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecDpFacturePeer::ID_FACTURE, $idFacture, $comparison);
    }

    /**
     * Filter the query by a related CommonExecDossierPaiement object
     *
     * @param   CommonExecDossierPaiement|PropelObjectCollection $commonExecDossierPaiement The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecDpFactureQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecDossierPaiement($commonExecDossierPaiement, $comparison = null)
    {
        if ($commonExecDossierPaiement instanceof CommonExecDossierPaiement) {
            return $this
                ->addUsingAlias(CommonExecDpFacturePeer::ID_DP, $commonExecDossierPaiement->getId(), $comparison);
        } elseif ($commonExecDossierPaiement instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecDpFacturePeer::ID_DP, $commonExecDossierPaiement->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonExecDossierPaiement() only accepts arguments of type CommonExecDossierPaiement or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecDossierPaiement relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecDpFactureQuery The current query, for fluid interface
     */
    public function joinCommonExecDossierPaiement($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecDossierPaiement');

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
            $this->addJoinObject($join, 'CommonExecDossierPaiement');
        }

        return $this;
    }

    /**
     * Use the CommonExecDossierPaiement relation CommonExecDossierPaiement object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecDossierPaiementQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecDossierPaiementQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecDossierPaiement($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecDossierPaiement', 'CommonExecDossierPaiementQuery');
    }

    /**
     * Filter the query by a related CommonExecFacture object
     *
     * @param   CommonExecFacture|PropelObjectCollection $commonExecFacture The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecDpFactureQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecFacture($commonExecFacture, $comparison = null)
    {
        if ($commonExecFacture instanceof CommonExecFacture) {
            return $this
                ->addUsingAlias(CommonExecDpFacturePeer::ID_FACTURE, $commonExecFacture->getId(), $comparison);
        } elseif ($commonExecFacture instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecDpFacturePeer::ID_FACTURE, $commonExecFacture->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonExecFacture() only accepts arguments of type CommonExecFacture or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecFacture relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecDpFactureQuery The current query, for fluid interface
     */
    public function joinCommonExecFacture($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecFacture');

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
            $this->addJoinObject($join, 'CommonExecFacture');
        }

        return $this;
    }

    /**
     * Use the CommonExecFacture relation CommonExecFacture object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecFactureQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecFactureQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecFacture($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecFacture', 'CommonExecFactureQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonExecDpFacture $commonExecDpFacture Object to remove from the list of results
     *
     * @return CommonExecDpFactureQuery The current query, for fluid interface
     */
    public function prune($commonExecDpFacture = null)
    {
        if ($commonExecDpFacture) {
            $this->addUsingAlias(CommonExecDpFacturePeer::ID, $commonExecDpFacture->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
