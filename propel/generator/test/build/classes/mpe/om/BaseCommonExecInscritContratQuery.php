<?php


/**
 * Base class that represents a query for the 'exec_inscrit_contrat' table.
 *
 * 
 *
 * @method CommonExecInscritContratQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonExecInscritContratQuery orderByIdContrat($order = Criteria::ASC) Order by the id_contrat column
 * @method CommonExecInscritContratQuery orderByIdInscrit($order = Criteria::ASC) Order by the id_inscrit column
 * @method CommonExecInscritContratQuery orderByIdEntreprise($order = Criteria::ASC) Order by the id_entreprise column
 * @method CommonExecInscritContratQuery orderByIdContractant($order = Criteria::ASC) Order by the id_contractant column
 *
 * @method CommonExecInscritContratQuery groupById() Group by the id column
 * @method CommonExecInscritContratQuery groupByIdContrat() Group by the id_contrat column
 * @method CommonExecInscritContratQuery groupByIdInscrit() Group by the id_inscrit column
 * @method CommonExecInscritContratQuery groupByIdEntreprise() Group by the id_entreprise column
 * @method CommonExecInscritContratQuery groupByIdContractant() Group by the id_contractant column
 *
 * @method CommonExecInscritContratQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonExecInscritContratQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonExecInscritContratQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonExecInscritContratQuery leftJoinCommonExecContractant($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecContractant relation
 * @method CommonExecInscritContratQuery rightJoinCommonExecContractant($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecContractant relation
 * @method CommonExecInscritContratQuery innerJoinCommonExecContractant($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecContractant relation
 *
 * @method CommonExecInscritContratQuery leftJoinCommonExecContrat($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecContrat relation
 * @method CommonExecInscritContratQuery rightJoinCommonExecContrat($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecContrat relation
 * @method CommonExecInscritContratQuery innerJoinCommonExecContrat($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecContrat relation
 *
 * @method CommonExecInscritContrat findOne(PropelPDO $con = null) Return the first CommonExecInscritContrat matching the query
 * @method CommonExecInscritContrat findOneOrCreate(PropelPDO $con = null) Return the first CommonExecInscritContrat matching the query, or a new CommonExecInscritContrat object populated from the query conditions when no match is found
 *
 * @method CommonExecInscritContrat findOneByIdContrat(int $id_contrat) Return the first CommonExecInscritContrat filtered by the id_contrat column
 * @method CommonExecInscritContrat findOneByIdInscrit(int $id_inscrit) Return the first CommonExecInscritContrat filtered by the id_inscrit column
 * @method CommonExecInscritContrat findOneByIdEntreprise(int $id_entreprise) Return the first CommonExecInscritContrat filtered by the id_entreprise column
 * @method CommonExecInscritContrat findOneByIdContractant(int $id_contractant) Return the first CommonExecInscritContrat filtered by the id_contractant column
 *
 * @method array findById(int $id) Return CommonExecInscritContrat objects filtered by the id column
 * @method array findByIdContrat(int $id_contrat) Return CommonExecInscritContrat objects filtered by the id_contrat column
 * @method array findByIdInscrit(int $id_inscrit) Return CommonExecInscritContrat objects filtered by the id_inscrit column
 * @method array findByIdEntreprise(int $id_entreprise) Return CommonExecInscritContrat objects filtered by the id_entreprise column
 * @method array findByIdContractant(int $id_contractant) Return CommonExecInscritContrat objects filtered by the id_contractant column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonExecInscritContratQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonExecInscritContratQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonExecInscritContrat', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonExecInscritContratQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonExecInscritContratQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonExecInscritContratQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonExecInscritContratQuery) {
            return $criteria;
        }
        $query = new CommonExecInscritContratQuery();
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
     * @return   CommonExecInscritContrat|CommonExecInscritContrat[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonExecInscritContratPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonExecInscritContratPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonExecInscritContrat A model object, or null if the key is not found
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
     * @return                 CommonExecInscritContrat A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_contrat`, `id_inscrit`, `id_entreprise`, `id_contractant` FROM `exec_inscrit_contrat` WHERE `id` = :p0';
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
            $obj = new CommonExecInscritContrat();
            $obj->hydrate($row);
            CommonExecInscritContratPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonExecInscritContrat|CommonExecInscritContrat[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonExecInscritContrat[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonExecInscritContratQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonExecInscritContratPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonExecInscritContratQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonExecInscritContratPeer::ID, $keys, Criteria::IN);
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
     * @return CommonExecInscritContratQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonExecInscritContratPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonExecInscritContratPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecInscritContratPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_contrat column
     *
     * Example usage:
     * <code>
     * $query->filterByIdContrat(1234); // WHERE id_contrat = 1234
     * $query->filterByIdContrat(array(12, 34)); // WHERE id_contrat IN (12, 34)
     * $query->filterByIdContrat(array('min' => 12)); // WHERE id_contrat >= 12
     * $query->filterByIdContrat(array('max' => 12)); // WHERE id_contrat <= 12
     * </code>
     *
     * @see       filterByCommonExecContrat()
     *
     * @param     mixed $idContrat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecInscritContratQuery The current query, for fluid interface
     */
    public function filterByIdContrat($idContrat = null, $comparison = null)
    {
        if (is_array($idContrat)) {
            $useMinMax = false;
            if (isset($idContrat['min'])) {
                $this->addUsingAlias(CommonExecInscritContratPeer::ID_CONTRAT, $idContrat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idContrat['max'])) {
                $this->addUsingAlias(CommonExecInscritContratPeer::ID_CONTRAT, $idContrat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecInscritContratPeer::ID_CONTRAT, $idContrat, $comparison);
    }

    /**
     * Filter the query on the id_inscrit column
     *
     * Example usage:
     * <code>
     * $query->filterByIdInscrit(1234); // WHERE id_inscrit = 1234
     * $query->filterByIdInscrit(array(12, 34)); // WHERE id_inscrit IN (12, 34)
     * $query->filterByIdInscrit(array('min' => 12)); // WHERE id_inscrit >= 12
     * $query->filterByIdInscrit(array('max' => 12)); // WHERE id_inscrit <= 12
     * </code>
     *
     * @param     mixed $idInscrit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecInscritContratQuery The current query, for fluid interface
     */
    public function filterByIdInscrit($idInscrit = null, $comparison = null)
    {
        if (is_array($idInscrit)) {
            $useMinMax = false;
            if (isset($idInscrit['min'])) {
                $this->addUsingAlias(CommonExecInscritContratPeer::ID_INSCRIT, $idInscrit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idInscrit['max'])) {
                $this->addUsingAlias(CommonExecInscritContratPeer::ID_INSCRIT, $idInscrit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecInscritContratPeer::ID_INSCRIT, $idInscrit, $comparison);
    }

    /**
     * Filter the query on the id_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntreprise(1234); // WHERE id_entreprise = 1234
     * $query->filterByIdEntreprise(array(12, 34)); // WHERE id_entreprise IN (12, 34)
     * $query->filterByIdEntreprise(array('min' => 12)); // WHERE id_entreprise >= 12
     * $query->filterByIdEntreprise(array('max' => 12)); // WHERE id_entreprise <= 12
     * </code>
     *
     * @param     mixed $idEntreprise The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecInscritContratQuery The current query, for fluid interface
     */
    public function filterByIdEntreprise($idEntreprise = null, $comparison = null)
    {
        if (is_array($idEntreprise)) {
            $useMinMax = false;
            if (isset($idEntreprise['min'])) {
                $this->addUsingAlias(CommonExecInscritContratPeer::ID_ENTREPRISE, $idEntreprise['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntreprise['max'])) {
                $this->addUsingAlias(CommonExecInscritContratPeer::ID_ENTREPRISE, $idEntreprise['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecInscritContratPeer::ID_ENTREPRISE, $idEntreprise, $comparison);
    }

    /**
     * Filter the query on the id_contractant column
     *
     * Example usage:
     * <code>
     * $query->filterByIdContractant(1234); // WHERE id_contractant = 1234
     * $query->filterByIdContractant(array(12, 34)); // WHERE id_contractant IN (12, 34)
     * $query->filterByIdContractant(array('min' => 12)); // WHERE id_contractant >= 12
     * $query->filterByIdContractant(array('max' => 12)); // WHERE id_contractant <= 12
     * </code>
     *
     * @see       filterByCommonExecContractant()
     *
     * @param     mixed $idContractant The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecInscritContratQuery The current query, for fluid interface
     */
    public function filterByIdContractant($idContractant = null, $comparison = null)
    {
        if (is_array($idContractant)) {
            $useMinMax = false;
            if (isset($idContractant['min'])) {
                $this->addUsingAlias(CommonExecInscritContratPeer::ID_CONTRACTANT, $idContractant['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idContractant['max'])) {
                $this->addUsingAlias(CommonExecInscritContratPeer::ID_CONTRACTANT, $idContractant['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecInscritContratPeer::ID_CONTRACTANT, $idContractant, $comparison);
    }

    /**
     * Filter the query by a related CommonExecContractant object
     *
     * @param   CommonExecContractant|PropelObjectCollection $commonExecContractant The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecInscritContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecContractant($commonExecContractant, $comparison = null)
    {
        if ($commonExecContractant instanceof CommonExecContractant) {
            return $this
                ->addUsingAlias(CommonExecInscritContratPeer::ID_CONTRACTANT, $commonExecContractant->getId(), $comparison);
        } elseif ($commonExecContractant instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecInscritContratPeer::ID_CONTRACTANT, $commonExecContractant->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonExecContractant() only accepts arguments of type CommonExecContractant or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecContractant relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecInscritContratQuery The current query, for fluid interface
     */
    public function joinCommonExecContractant($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecContractant');

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
            $this->addJoinObject($join, 'CommonExecContractant');
        }

        return $this;
    }

    /**
     * Use the CommonExecContractant relation CommonExecContractant object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecContractantQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecContractantQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecContractant($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecContractant', 'CommonExecContractantQuery');
    }

    /**
     * Filter the query by a related CommonExecContrat object
     *
     * @param   CommonExecContrat|PropelObjectCollection $commonExecContrat The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecInscritContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecContrat($commonExecContrat, $comparison = null)
    {
        if ($commonExecContrat instanceof CommonExecContrat) {
            return $this
                ->addUsingAlias(CommonExecInscritContratPeer::ID_CONTRAT, $commonExecContrat->getIdContrat(), $comparison);
        } elseif ($commonExecContrat instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecInscritContratPeer::ID_CONTRAT, $commonExecContrat->toKeyValue('PrimaryKey', 'IdContrat'), $comparison);
        } else {
            throw new PropelException('filterByCommonExecContrat() only accepts arguments of type CommonExecContrat or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecContrat relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecInscritContratQuery The current query, for fluid interface
     */
    public function joinCommonExecContrat($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecContrat');

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
            $this->addJoinObject($join, 'CommonExecContrat');
        }

        return $this;
    }

    /**
     * Use the CommonExecContrat relation CommonExecContrat object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecContratQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecContratQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecContrat($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecContrat', 'CommonExecContratQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonExecInscritContrat $commonExecInscritContrat Object to remove from the list of results
     *
     * @return CommonExecInscritContratQuery The current query, for fluid interface
     */
    public function prune($commonExecInscritContrat = null)
    {
        if ($commonExecInscritContrat) {
            $this->addUsingAlias(CommonExecInscritContratPeer::ID, $commonExecInscritContrat->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
