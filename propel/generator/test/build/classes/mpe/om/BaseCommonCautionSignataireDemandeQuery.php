<?php


/**
 * Base class that represents a query for the 'caution_signataire_demande' table.
 *
 * 
 *
 * @method CommonCautionSignataireDemandeQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonCautionSignataireDemandeQuery orderByIdDemande($order = Criteria::ASC) Order by the id_demande column
 * @method CommonCautionSignataireDemandeQuery orderByIdSignataire($order = Criteria::ASC) Order by the id_signataire column
 *
 * @method CommonCautionSignataireDemandeQuery groupById() Group by the id column
 * @method CommonCautionSignataireDemandeQuery groupByIdDemande() Group by the id_demande column
 * @method CommonCautionSignataireDemandeQuery groupByIdSignataire() Group by the id_signataire column
 *
 * @method CommonCautionSignataireDemandeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonCautionSignataireDemandeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonCautionSignataireDemandeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonCautionSignataireDemandeQuery leftJoinCommonCautionDemande($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonCautionDemande relation
 * @method CommonCautionSignataireDemandeQuery rightJoinCommonCautionDemande($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonCautionDemande relation
 * @method CommonCautionSignataireDemandeQuery innerJoinCommonCautionDemande($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonCautionDemande relation
 *
 * @method CommonCautionSignataireDemandeQuery leftJoinCommonAgentBanquier($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonAgentBanquier relation
 * @method CommonCautionSignataireDemandeQuery rightJoinCommonAgentBanquier($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonAgentBanquier relation
 * @method CommonCautionSignataireDemandeQuery innerJoinCommonAgentBanquier($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonAgentBanquier relation
 *
 * @method CommonCautionSignataireDemande findOne(PropelPDO $con = null) Return the first CommonCautionSignataireDemande matching the query
 * @method CommonCautionSignataireDemande findOneOrCreate(PropelPDO $con = null) Return the first CommonCautionSignataireDemande matching the query, or a new CommonCautionSignataireDemande object populated from the query conditions when no match is found
 *
 * @method CommonCautionSignataireDemande findOneByIdDemande(int $id_demande) Return the first CommonCautionSignataireDemande filtered by the id_demande column
 * @method CommonCautionSignataireDemande findOneByIdSignataire(int $id_signataire) Return the first CommonCautionSignataireDemande filtered by the id_signataire column
 *
 * @method array findById(int $id) Return CommonCautionSignataireDemande objects filtered by the id column
 * @method array findByIdDemande(int $id_demande) Return CommonCautionSignataireDemande objects filtered by the id_demande column
 * @method array findByIdSignataire(int $id_signataire) Return CommonCautionSignataireDemande objects filtered by the id_signataire column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonCautionSignataireDemandeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonCautionSignataireDemandeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonCautionSignataireDemande', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonCautionSignataireDemandeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonCautionSignataireDemandeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonCautionSignataireDemandeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonCautionSignataireDemandeQuery) {
            return $criteria;
        }
        $query = new CommonCautionSignataireDemandeQuery();
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
     * @return   CommonCautionSignataireDemande|CommonCautionSignataireDemande[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonCautionSignataireDemandePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonCautionSignataireDemandePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonCautionSignataireDemande A model object, or null if the key is not found
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
     * @return                 CommonCautionSignataireDemande A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_demande`, `id_signataire` FROM `caution_signataire_demande` WHERE `id` = :p0';
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
            $obj = new CommonCautionSignataireDemande();
            $obj->hydrate($row);
            CommonCautionSignataireDemandePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonCautionSignataireDemande|CommonCautionSignataireDemande[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonCautionSignataireDemande[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonCautionSignataireDemandeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonCautionSignataireDemandePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonCautionSignataireDemandeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonCautionSignataireDemandePeer::ID, $keys, Criteria::IN);
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
     * @return CommonCautionSignataireDemandeQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonCautionSignataireDemandePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonCautionSignataireDemandePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionSignataireDemandePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_demande column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDemande(1234); // WHERE id_demande = 1234
     * $query->filterByIdDemande(array(12, 34)); // WHERE id_demande IN (12, 34)
     * $query->filterByIdDemande(array('min' => 12)); // WHERE id_demande >= 12
     * $query->filterByIdDemande(array('max' => 12)); // WHERE id_demande <= 12
     * </code>
     *
     * @see       filterByCommonCautionDemande()
     *
     * @param     mixed $idDemande The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionSignataireDemandeQuery The current query, for fluid interface
     */
    public function filterByIdDemande($idDemande = null, $comparison = null)
    {
        if (is_array($idDemande)) {
            $useMinMax = false;
            if (isset($idDemande['min'])) {
                $this->addUsingAlias(CommonCautionSignataireDemandePeer::ID_DEMANDE, $idDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDemande['max'])) {
                $this->addUsingAlias(CommonCautionSignataireDemandePeer::ID_DEMANDE, $idDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionSignataireDemandePeer::ID_DEMANDE, $idDemande, $comparison);
    }

    /**
     * Filter the query on the id_signataire column
     *
     * Example usage:
     * <code>
     * $query->filterByIdSignataire(1234); // WHERE id_signataire = 1234
     * $query->filterByIdSignataire(array(12, 34)); // WHERE id_signataire IN (12, 34)
     * $query->filterByIdSignataire(array('min' => 12)); // WHERE id_signataire >= 12
     * $query->filterByIdSignataire(array('max' => 12)); // WHERE id_signataire <= 12
     * </code>
     *
     * @see       filterByCommonAgentBanquier()
     *
     * @param     mixed $idSignataire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionSignataireDemandeQuery The current query, for fluid interface
     */
    public function filterByIdSignataire($idSignataire = null, $comparison = null)
    {
        if (is_array($idSignataire)) {
            $useMinMax = false;
            if (isset($idSignataire['min'])) {
                $this->addUsingAlias(CommonCautionSignataireDemandePeer::ID_SIGNATAIRE, $idSignataire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idSignataire['max'])) {
                $this->addUsingAlias(CommonCautionSignataireDemandePeer::ID_SIGNATAIRE, $idSignataire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionSignataireDemandePeer::ID_SIGNATAIRE, $idSignataire, $comparison);
    }

    /**
     * Filter the query by a related CommonCautionDemande object
     *
     * @param   CommonCautionDemande|PropelObjectCollection $commonCautionDemande The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonCautionSignataireDemandeQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonCautionDemande($commonCautionDemande, $comparison = null)
    {
        if ($commonCautionDemande instanceof CommonCautionDemande) {
            return $this
                ->addUsingAlias(CommonCautionSignataireDemandePeer::ID_DEMANDE, $commonCautionDemande->getId(), $comparison);
        } elseif ($commonCautionDemande instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonCautionSignataireDemandePeer::ID_DEMANDE, $commonCautionDemande->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonCautionDemande() only accepts arguments of type CommonCautionDemande or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonCautionDemande relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonCautionSignataireDemandeQuery The current query, for fluid interface
     */
    public function joinCommonCautionDemande($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonCautionDemande');

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
            $this->addJoinObject($join, 'CommonCautionDemande');
        }

        return $this;
    }

    /**
     * Use the CommonCautionDemande relation CommonCautionDemande object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonCautionDemandeQuery A secondary query class using the current class as primary query
     */
    public function useCommonCautionDemandeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonCautionDemande($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonCautionDemande', 'CommonCautionDemandeQuery');
    }

    /**
     * Filter the query by a related CommonAgentBanquier object
     *
     * @param   CommonAgentBanquier|PropelObjectCollection $commonAgentBanquier The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonCautionSignataireDemandeQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonAgentBanquier($commonAgentBanquier, $comparison = null)
    {
        if ($commonAgentBanquier instanceof CommonAgentBanquier) {
            return $this
                ->addUsingAlias(CommonCautionSignataireDemandePeer::ID_SIGNATAIRE, $commonAgentBanquier->getId(), $comparison);
        } elseif ($commonAgentBanquier instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonCautionSignataireDemandePeer::ID_SIGNATAIRE, $commonAgentBanquier->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return CommonCautionSignataireDemandeQuery The current query, for fluid interface
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
     * @param   CommonCautionSignataireDemande $commonCautionSignataireDemande Object to remove from the list of results
     *
     * @return CommonCautionSignataireDemandeQuery The current query, for fluid interface
     */
    public function prune($commonCautionSignataireDemande = null)
    {
        if ($commonCautionSignataireDemande) {
            $this->addUsingAlias(CommonCautionSignataireDemandePeer::ID, $commonCautionSignataireDemande->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
