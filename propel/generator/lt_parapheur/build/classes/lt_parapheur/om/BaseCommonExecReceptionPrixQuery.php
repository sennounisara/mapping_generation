<?php


/**
 * Base class that represents a query for the 'exec_reception_prix' table.
 *
 * 
 *
 * @method CommonExecReceptionPrixQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonExecReceptionPrixQuery orderByIdPrix($order = Criteria::ASC) Order by the id_prix column
 * @method CommonExecReceptionPrixQuery orderByIdReception($order = Criteria::ASC) Order by the id_reception column
 * @method CommonExecReceptionPrixQuery orderByQte($order = Criteria::ASC) Order by the qte column
 * @method CommonExecReceptionPrixQuery orderByQteRestante($order = Criteria::ASC) Order by the qte_restante column
 *
 * @method CommonExecReceptionPrixQuery groupById() Group by the id column
 * @method CommonExecReceptionPrixQuery groupByIdPrix() Group by the id_prix column
 * @method CommonExecReceptionPrixQuery groupByIdReception() Group by the id_reception column
 * @method CommonExecReceptionPrixQuery groupByQte() Group by the qte column
 * @method CommonExecReceptionPrixQuery groupByQteRestante() Group by the qte_restante column
 *
 * @method CommonExecReceptionPrixQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonExecReceptionPrixQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonExecReceptionPrixQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonExecReceptionPrixQuery leftJoinCommonExecPrix($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecPrix relation
 * @method CommonExecReceptionPrixQuery rightJoinCommonExecPrix($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecPrix relation
 * @method CommonExecReceptionPrixQuery innerJoinCommonExecPrix($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecPrix relation
 *
 * @method CommonExecReceptionPrixQuery leftJoinCommonExecReception($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecReception relation
 * @method CommonExecReceptionPrixQuery rightJoinCommonExecReception($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecReception relation
 * @method CommonExecReceptionPrixQuery innerJoinCommonExecReception($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecReception relation
 *
 * @method CommonExecReceptionPrix findOne(PropelPDO $con = null) Return the first CommonExecReceptionPrix matching the query
 * @method CommonExecReceptionPrix findOneOrCreate(PropelPDO $con = null) Return the first CommonExecReceptionPrix matching the query, or a new CommonExecReceptionPrix object populated from the query conditions when no match is found
 *
 * @method CommonExecReceptionPrix findOneByIdPrix(int $id_prix) Return the first CommonExecReceptionPrix filtered by the id_prix column
 * @method CommonExecReceptionPrix findOneByIdReception(int $id_reception) Return the first CommonExecReceptionPrix filtered by the id_reception column
 * @method CommonExecReceptionPrix findOneByQte(double $qte) Return the first CommonExecReceptionPrix filtered by the qte column
 * @method CommonExecReceptionPrix findOneByQteRestante(double $qte_restante) Return the first CommonExecReceptionPrix filtered by the qte_restante column
 *
 * @method array findById(int $id) Return CommonExecReceptionPrix objects filtered by the id column
 * @method array findByIdPrix(int $id_prix) Return CommonExecReceptionPrix objects filtered by the id_prix column
 * @method array findByIdReception(int $id_reception) Return CommonExecReceptionPrix objects filtered by the id_reception column
 * @method array findByQte(double $qte) Return CommonExecReceptionPrix objects filtered by the qte column
 * @method array findByQteRestante(double $qte_restante) Return CommonExecReceptionPrix objects filtered by the qte_restante column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonExecReceptionPrixQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonExecReceptionPrixQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonExecReceptionPrix', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonExecReceptionPrixQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonExecReceptionPrixQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonExecReceptionPrixQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonExecReceptionPrixQuery) {
            return $criteria;
        }
        $query = new CommonExecReceptionPrixQuery();
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
     * @return   CommonExecReceptionPrix|CommonExecReceptionPrix[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonExecReceptionPrixPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonExecReceptionPrixPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonExecReceptionPrix A model object, or null if the key is not found
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
     * @return                 CommonExecReceptionPrix A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_prix`, `id_reception`, `qte`, `qte_restante` FROM `exec_reception_prix` WHERE `id` = :p0';
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
            $obj = new CommonExecReceptionPrix();
            $obj->hydrate($row);
            CommonExecReceptionPrixPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonExecReceptionPrix|CommonExecReceptionPrix[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonExecReceptionPrix[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonExecReceptionPrixQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonExecReceptionPrixPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonExecReceptionPrixQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonExecReceptionPrixPeer::ID, $keys, Criteria::IN);
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
     * @return CommonExecReceptionPrixQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonExecReceptionPrixPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonExecReceptionPrixPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecReceptionPrixPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_prix column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPrix(1234); // WHERE id_prix = 1234
     * $query->filterByIdPrix(array(12, 34)); // WHERE id_prix IN (12, 34)
     * $query->filterByIdPrix(array('min' => 12)); // WHERE id_prix >= 12
     * $query->filterByIdPrix(array('max' => 12)); // WHERE id_prix <= 12
     * </code>
     *
     * @see       filterByCommonExecPrix()
     *
     * @param     mixed $idPrix The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecReceptionPrixQuery The current query, for fluid interface
     */
    public function filterByIdPrix($idPrix = null, $comparison = null)
    {
        if (is_array($idPrix)) {
            $useMinMax = false;
            if (isset($idPrix['min'])) {
                $this->addUsingAlias(CommonExecReceptionPrixPeer::ID_PRIX, $idPrix['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idPrix['max'])) {
                $this->addUsingAlias(CommonExecReceptionPrixPeer::ID_PRIX, $idPrix['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecReceptionPrixPeer::ID_PRIX, $idPrix, $comparison);
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
     * @see       filterByCommonExecReception()
     *
     * @param     mixed $idReception The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecReceptionPrixQuery The current query, for fluid interface
     */
    public function filterByIdReception($idReception = null, $comparison = null)
    {
        if (is_array($idReception)) {
            $useMinMax = false;
            if (isset($idReception['min'])) {
                $this->addUsingAlias(CommonExecReceptionPrixPeer::ID_RECEPTION, $idReception['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idReception['max'])) {
                $this->addUsingAlias(CommonExecReceptionPrixPeer::ID_RECEPTION, $idReception['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecReceptionPrixPeer::ID_RECEPTION, $idReception, $comparison);
    }

    /**
     * Filter the query on the qte column
     *
     * Example usage:
     * <code>
     * $query->filterByQte(1234); // WHERE qte = 1234
     * $query->filterByQte(array(12, 34)); // WHERE qte IN (12, 34)
     * $query->filterByQte(array('min' => 12)); // WHERE qte >= 12
     * $query->filterByQte(array('max' => 12)); // WHERE qte <= 12
     * </code>
     *
     * @param     mixed $qte The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecReceptionPrixQuery The current query, for fluid interface
     */
    public function filterByQte($qte = null, $comparison = null)
    {
        if (is_array($qte)) {
            $useMinMax = false;
            if (isset($qte['min'])) {
                $this->addUsingAlias(CommonExecReceptionPrixPeer::QTE, $qte['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qte['max'])) {
                $this->addUsingAlias(CommonExecReceptionPrixPeer::QTE, $qte['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecReceptionPrixPeer::QTE, $qte, $comparison);
    }

    /**
     * Filter the query on the qte_restante column
     *
     * Example usage:
     * <code>
     * $query->filterByQteRestante(1234); // WHERE qte_restante = 1234
     * $query->filterByQteRestante(array(12, 34)); // WHERE qte_restante IN (12, 34)
     * $query->filterByQteRestante(array('min' => 12)); // WHERE qte_restante >= 12
     * $query->filterByQteRestante(array('max' => 12)); // WHERE qte_restante <= 12
     * </code>
     *
     * @param     mixed $qteRestante The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecReceptionPrixQuery The current query, for fluid interface
     */
    public function filterByQteRestante($qteRestante = null, $comparison = null)
    {
        if (is_array($qteRestante)) {
            $useMinMax = false;
            if (isset($qteRestante['min'])) {
                $this->addUsingAlias(CommonExecReceptionPrixPeer::QTE_RESTANTE, $qteRestante['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($qteRestante['max'])) {
                $this->addUsingAlias(CommonExecReceptionPrixPeer::QTE_RESTANTE, $qteRestante['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecReceptionPrixPeer::QTE_RESTANTE, $qteRestante, $comparison);
    }

    /**
     * Filter the query by a related CommonExecPrix object
     *
     * @param   CommonExecPrix|PropelObjectCollection $commonExecPrix The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecReceptionPrixQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecPrix($commonExecPrix, $comparison = null)
    {
        if ($commonExecPrix instanceof CommonExecPrix) {
            return $this
                ->addUsingAlias(CommonExecReceptionPrixPeer::ID_PRIX, $commonExecPrix->getId(), $comparison);
        } elseif ($commonExecPrix instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecReceptionPrixPeer::ID_PRIX, $commonExecPrix->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonExecPrix() only accepts arguments of type CommonExecPrix or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecPrix relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecReceptionPrixQuery The current query, for fluid interface
     */
    public function joinCommonExecPrix($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecPrix');

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
            $this->addJoinObject($join, 'CommonExecPrix');
        }

        return $this;
    }

    /**
     * Use the CommonExecPrix relation CommonExecPrix object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecPrixQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecPrixQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecPrix($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecPrix', 'CommonExecPrixQuery');
    }

    /**
     * Filter the query by a related CommonExecReception object
     *
     * @param   CommonExecReception|PropelObjectCollection $commonExecReception The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecReceptionPrixQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecReception($commonExecReception, $comparison = null)
    {
        if ($commonExecReception instanceof CommonExecReception) {
            return $this
                ->addUsingAlias(CommonExecReceptionPrixPeer::ID_RECEPTION, $commonExecReception->getId(), $comparison);
        } elseif ($commonExecReception instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecReceptionPrixPeer::ID_RECEPTION, $commonExecReception->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonExecReception() only accepts arguments of type CommonExecReception or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecReception relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecReceptionPrixQuery The current query, for fluid interface
     */
    public function joinCommonExecReception($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecReception');

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
            $this->addJoinObject($join, 'CommonExecReception');
        }

        return $this;
    }

    /**
     * Use the CommonExecReception relation CommonExecReception object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecReceptionQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecReceptionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecReception($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecReception', 'CommonExecReceptionQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonExecReceptionPrix $commonExecReceptionPrix Object to remove from the list of results
     *
     * @return CommonExecReceptionPrixQuery The current query, for fluid interface
     */
    public function prune($commonExecReceptionPrix = null)
    {
        if ($commonExecReceptionPrix) {
            $this->addUsingAlias(CommonExecReceptionPrixPeer::ID, $commonExecReceptionPrix->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
