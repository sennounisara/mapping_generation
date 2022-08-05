<?php


/**
 * Base class that represents a query for the 'Contrat' table.
 *
 * 
 *
 * @method CommonContratQuery orderByIdContrat($order = Criteria::ASC) Order by the id_contrat column
 * @method CommonContratQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonContratQuery orderByIdMarche($order = Criteria::ASC) Order by the id_marche column
 * @method CommonContratQuery orderByIdDecision($order = Criteria::ASC) Order by the id_decision column
 * @method CommonContratQuery orderByInformaionsComplementaires($order = Criteria::ASC) Order by the informaions_complementaires column
 *
 * @method CommonContratQuery groupByIdContrat() Group by the id_contrat column
 * @method CommonContratQuery groupByOrganisme() Group by the organisme column
 * @method CommonContratQuery groupByIdMarche() Group by the id_marche column
 * @method CommonContratQuery groupByIdDecision() Group by the id_decision column
 * @method CommonContratQuery groupByInformaionsComplementaires() Group by the informaions_complementaires column
 *
 * @method CommonContratQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonContratQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonContratQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonContratQuery leftJoinCommonAvenant($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonAvenant relation
 * @method CommonContratQuery rightJoinCommonAvenant($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonAvenant relation
 * @method CommonContratQuery innerJoinCommonAvenant($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonAvenant relation
 *
 * @method CommonContrat findOne(PropelPDO $con = null) Return the first CommonContrat matching the query
 * @method CommonContrat findOneOrCreate(PropelPDO $con = null) Return the first CommonContrat matching the query, or a new CommonContrat object populated from the query conditions when no match is found
 *
 * @method CommonContrat findOneByIdContrat(int $id_contrat) Return the first CommonContrat filtered by the id_contrat column
 * @method CommonContrat findOneByOrganisme(string $organisme) Return the first CommonContrat filtered by the organisme column
 * @method CommonContrat findOneByIdMarche(int $id_marche) Return the first CommonContrat filtered by the id_marche column
 * @method CommonContrat findOneByIdDecision(int $id_decision) Return the first CommonContrat filtered by the id_decision column
 * @method CommonContrat findOneByInformaionsComplementaires(string $informaions_complementaires) Return the first CommonContrat filtered by the informaions_complementaires column
 *
 * @method array findByIdContrat(int $id_contrat) Return CommonContrat objects filtered by the id_contrat column
 * @method array findByOrganisme(string $organisme) Return CommonContrat objects filtered by the organisme column
 * @method array findByIdMarche(int $id_marche) Return CommonContrat objects filtered by the id_marche column
 * @method array findByIdDecision(int $id_decision) Return CommonContrat objects filtered by the id_decision column
 * @method array findByInformaionsComplementaires(string $informaions_complementaires) Return CommonContrat objects filtered by the informaions_complementaires column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonContratQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonContratQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonContrat', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonContratQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonContratQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonContratQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonContratQuery) {
            return $criteria;
        }
        $query = new CommonContratQuery();
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
                         A Primary key composition: [$id_contrat, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonContrat|CommonContrat[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonContratPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonContratPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonContrat A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_contrat`, `organisme`, `id_marche`, `id_decision`, `informaions_complementaires` FROM `Contrat` WHERE `id_contrat` = :p0 AND `organisme` = :p1';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonContrat();
            $obj->hydrate($row);
            CommonContratPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonContrat|CommonContrat[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonContrat[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonContratQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonContratPeer::ID_CONTRAT, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonContratPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonContratQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonContratPeer::ID_CONTRAT, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonContratPeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @param     mixed $idContrat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonContratQuery The current query, for fluid interface
     */
    public function filterByIdContrat($idContrat = null, $comparison = null)
    {
        if (is_array($idContrat)) {
            $useMinMax = false;
            if (isset($idContrat['min'])) {
                $this->addUsingAlias(CommonContratPeer::ID_CONTRAT, $idContrat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idContrat['max'])) {
                $this->addUsingAlias(CommonContratPeer::ID_CONTRAT, $idContrat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonContratPeer::ID_CONTRAT, $idContrat, $comparison);
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
     * @return CommonContratQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonContratPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the id_marche column
     *
     * Example usage:
     * <code>
     * $query->filterByIdMarche(1234); // WHERE id_marche = 1234
     * $query->filterByIdMarche(array(12, 34)); // WHERE id_marche IN (12, 34)
     * $query->filterByIdMarche(array('min' => 12)); // WHERE id_marche >= 12
     * $query->filterByIdMarche(array('max' => 12)); // WHERE id_marche <= 12
     * </code>
     *
     * @param     mixed $idMarche The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonContratQuery The current query, for fluid interface
     */
    public function filterByIdMarche($idMarche = null, $comparison = null)
    {
        if (is_array($idMarche)) {
            $useMinMax = false;
            if (isset($idMarche['min'])) {
                $this->addUsingAlias(CommonContratPeer::ID_MARCHE, $idMarche['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idMarche['max'])) {
                $this->addUsingAlias(CommonContratPeer::ID_MARCHE, $idMarche['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonContratPeer::ID_MARCHE, $idMarche, $comparison);
    }

    /**
     * Filter the query on the id_decision column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDecision(1234); // WHERE id_decision = 1234
     * $query->filterByIdDecision(array(12, 34)); // WHERE id_decision IN (12, 34)
     * $query->filterByIdDecision(array('min' => 12)); // WHERE id_decision >= 12
     * $query->filterByIdDecision(array('max' => 12)); // WHERE id_decision <= 12
     * </code>
     *
     * @param     mixed $idDecision The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonContratQuery The current query, for fluid interface
     */
    public function filterByIdDecision($idDecision = null, $comparison = null)
    {
        if (is_array($idDecision)) {
            $useMinMax = false;
            if (isset($idDecision['min'])) {
                $this->addUsingAlias(CommonContratPeer::ID_DECISION, $idDecision['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDecision['max'])) {
                $this->addUsingAlias(CommonContratPeer::ID_DECISION, $idDecision['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonContratPeer::ID_DECISION, $idDecision, $comparison);
    }

    /**
     * Filter the query on the informaions_complementaires column
     *
     * Example usage:
     * <code>
     * $query->filterByInformaionsComplementaires('fooValue');   // WHERE informaions_complementaires = 'fooValue'
     * $query->filterByInformaionsComplementaires('%fooValue%'); // WHERE informaions_complementaires LIKE '%fooValue%'
     * </code>
     *
     * @param     string $informaionsComplementaires The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonContratQuery The current query, for fluid interface
     */
    public function filterByInformaionsComplementaires($informaionsComplementaires = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($informaionsComplementaires)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $informaionsComplementaires)) {
                $informaionsComplementaires = str_replace('*', '%', $informaionsComplementaires);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonContratPeer::INFORMAIONS_COMPLEMENTAIRES, $informaionsComplementaires, $comparison);
    }

    /**
     * Filter the query by a related CommonAvenant object
     *
     * @param   CommonAvenant|PropelObjectCollection $commonAvenant  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonAvenant($commonAvenant, $comparison = null)
    {
        if ($commonAvenant instanceof CommonAvenant) {
            return $this
                ->addUsingAlias(CommonContratPeer::ID_CONTRAT, $commonAvenant->getIdContrat(), $comparison);
        } elseif ($commonAvenant instanceof PropelObjectCollection) {
            return $this
                ->useCommonAvenantQuery()
                ->filterByPrimaryKeys($commonAvenant->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonAvenant() only accepts arguments of type CommonAvenant or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonAvenant relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonContratQuery The current query, for fluid interface
     */
    public function joinCommonAvenant($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonAvenant');

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
            $this->addJoinObject($join, 'CommonAvenant');
        }

        return $this;
    }

    /**
     * Use the CommonAvenant relation CommonAvenant object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonAvenantQuery A secondary query class using the current class as primary query
     */
    public function useCommonAvenantQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonAvenant($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonAvenant', 'CommonAvenantQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonContrat $commonContrat Object to remove from the list of results
     *
     * @return CommonContratQuery The current query, for fluid interface
     */
    public function prune($commonContrat = null)
    {
        if ($commonContrat) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonContratPeer::ID_CONTRAT), $commonContrat->getIdContrat(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonContratPeer::ORGANISME), $commonContrat->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
