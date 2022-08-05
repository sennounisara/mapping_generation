<?php


/**
 * Base class that represents a query for the 't_historique_consultation' table.
 *
 * 
 *
 * @method THistoriqueConsultationQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method THistoriqueConsultationQuery orderByIdDemande($order = Criteria::ASC) Order by the ID_DEMANDE column
 * @method THistoriqueConsultationQuery orderByIdAgent($order = Criteria::ASC) Order by the ID_AGENT column
 * @method THistoriqueConsultationQuery orderByType($order = Criteria::ASC) Order by the TYPE column
 * @method THistoriqueConsultationQuery orderByDateConsultation($order = Criteria::ASC) Order by the DATE_CONSULTATION column
 *
 * @method THistoriqueConsultationQuery groupById() Group by the ID column
 * @method THistoriqueConsultationQuery groupByIdDemande() Group by the ID_DEMANDE column
 * @method THistoriqueConsultationQuery groupByIdAgent() Group by the ID_AGENT column
 * @method THistoriqueConsultationQuery groupByType() Group by the TYPE column
 * @method THistoriqueConsultationQuery groupByDateConsultation() Group by the DATE_CONSULTATION column
 *
 * @method THistoriqueConsultationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method THistoriqueConsultationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method THistoriqueConsultationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method THistoriqueConsultationQuery leftJoinAgent($relationAlias = null) Adds a LEFT JOIN clause to the query using the Agent relation
 * @method THistoriqueConsultationQuery rightJoinAgent($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Agent relation
 * @method THistoriqueConsultationQuery innerJoinAgent($relationAlias = null) Adds a INNER JOIN clause to the query using the Agent relation
 *
 * @method THistoriqueConsultationQuery leftJoinDemande($relationAlias = null) Adds a LEFT JOIN clause to the query using the Demande relation
 * @method THistoriqueConsultationQuery rightJoinDemande($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Demande relation
 * @method THistoriqueConsultationQuery innerJoinDemande($relationAlias = null) Adds a INNER JOIN clause to the query using the Demande relation
 *
 * @method THistoriqueConsultation findOne(PropelPDO $con = null) Return the first THistoriqueConsultation matching the query
 * @method THistoriqueConsultation findOneOrCreate(PropelPDO $con = null) Return the first THistoriqueConsultation matching the query, or a new THistoriqueConsultation object populated from the query conditions when no match is found
 *
 * @method THistoriqueConsultation findOneByIdDemande(int $ID_DEMANDE) Return the first THistoriqueConsultation filtered by the ID_DEMANDE column
 * @method THistoriqueConsultation findOneByIdAgent(int $ID_AGENT) Return the first THistoriqueConsultation filtered by the ID_AGENT column
 * @method THistoriqueConsultation findOneByType(string $TYPE) Return the first THistoriqueConsultation filtered by the TYPE column
 * @method THistoriqueConsultation findOneByDateConsultation(string $DATE_CONSULTATION) Return the first THistoriqueConsultation filtered by the DATE_CONSULTATION column
 *
 * @method array findById(int $ID) Return THistoriqueConsultation objects filtered by the ID column
 * @method array findByIdDemande(int $ID_DEMANDE) Return THistoriqueConsultation objects filtered by the ID_DEMANDE column
 * @method array findByIdAgent(int $ID_AGENT) Return THistoriqueConsultation objects filtered by the ID_AGENT column
 * @method array findByType(string $TYPE) Return THistoriqueConsultation objects filtered by the TYPE column
 * @method array findByDateConsultation(string $DATE_CONSULTATION) Return THistoriqueConsultation objects filtered by the DATE_CONSULTATION column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseTHistoriqueConsultationQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTHistoriqueConsultationQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'THistoriqueConsultation', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new THistoriqueConsultationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   THistoriqueConsultationQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return THistoriqueConsultationQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof THistoriqueConsultationQuery) {
            return $criteria;
        }
        $query = new THistoriqueConsultationQuery();
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
     * @return   THistoriqueConsultation|THistoriqueConsultation[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = THistoriqueConsultationPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(THistoriqueConsultationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 THistoriqueConsultation A model object, or null if the key is not found
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
     * @return                 THistoriqueConsultation A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `ID_DEMANDE`, `ID_AGENT`, `TYPE`, `DATE_CONSULTATION` FROM `t_historique_consultation` WHERE `ID` = :p0';
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
            $obj = new THistoriqueConsultation();
            $obj->hydrate($row);
            THistoriqueConsultationPeer::addInstanceToPool($obj, (string) $key);
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
     * @return THistoriqueConsultation|THistoriqueConsultation[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|THistoriqueConsultation[]|mixed the list of results, formatted by the current formatter
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
     * @return THistoriqueConsultationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(THistoriqueConsultationPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return THistoriqueConsultationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(THistoriqueConsultationPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE ID = 1234
     * $query->filterById(array(12, 34)); // WHERE ID IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE ID >= 12
     * $query->filterById(array('max' => 12)); // WHERE ID <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return THistoriqueConsultationQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(THistoriqueConsultationPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(THistoriqueConsultationPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(THistoriqueConsultationPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the ID_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDemande(1234); // WHERE ID_DEMANDE = 1234
     * $query->filterByIdDemande(array(12, 34)); // WHERE ID_DEMANDE IN (12, 34)
     * $query->filterByIdDemande(array('min' => 12)); // WHERE ID_DEMANDE >= 12
     * $query->filterByIdDemande(array('max' => 12)); // WHERE ID_DEMANDE <= 12
     * </code>
     *
     * @see       filterByDemande()
     *
     * @param     mixed $idDemande The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return THistoriqueConsultationQuery The current query, for fluid interface
     */
    public function filterByIdDemande($idDemande = null, $comparison = null)
    {
        if (is_array($idDemande)) {
            $useMinMax = false;
            if (isset($idDemande['min'])) {
                $this->addUsingAlias(THistoriqueConsultationPeer::ID_DEMANDE, $idDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDemande['max'])) {
                $this->addUsingAlias(THistoriqueConsultationPeer::ID_DEMANDE, $idDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(THistoriqueConsultationPeer::ID_DEMANDE, $idDemande, $comparison);
    }

    /**
     * Filter the query on the ID_AGENT column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgent(1234); // WHERE ID_AGENT = 1234
     * $query->filterByIdAgent(array(12, 34)); // WHERE ID_AGENT IN (12, 34)
     * $query->filterByIdAgent(array('min' => 12)); // WHERE ID_AGENT >= 12
     * $query->filterByIdAgent(array('max' => 12)); // WHERE ID_AGENT <= 12
     * </code>
     *
     * @see       filterByAgent()
     *
     * @param     mixed $idAgent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return THistoriqueConsultationQuery The current query, for fluid interface
     */
    public function filterByIdAgent($idAgent = null, $comparison = null)
    {
        if (is_array($idAgent)) {
            $useMinMax = false;
            if (isset($idAgent['min'])) {
                $this->addUsingAlias(THistoriqueConsultationPeer::ID_AGENT, $idAgent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgent['max'])) {
                $this->addUsingAlias(THistoriqueConsultationPeer::ID_AGENT, $idAgent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(THistoriqueConsultationPeer::ID_AGENT, $idAgent, $comparison);
    }

    /**
     * Filter the query on the TYPE column
     *
     * Example usage:
     * <code>
     * $query->filterByType('fooValue');   // WHERE TYPE = 'fooValue'
     * $query->filterByType('%fooValue%'); // WHERE TYPE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $type The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return THistoriqueConsultationQuery The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($type)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $type)) {
                $type = str_replace('*', '%', $type);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(THistoriqueConsultationPeer::TYPE, $type, $comparison);
    }

    /**
     * Filter the query on the DATE_CONSULTATION column
     *
     * Example usage:
     * <code>
     * $query->filterByDateConsultation('2011-03-14'); // WHERE DATE_CONSULTATION = '2011-03-14'
     * $query->filterByDateConsultation('now'); // WHERE DATE_CONSULTATION = '2011-03-14'
     * $query->filterByDateConsultation(array('max' => 'yesterday')); // WHERE DATE_CONSULTATION > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateConsultation The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return THistoriqueConsultationQuery The current query, for fluid interface
     */
    public function filterByDateConsultation($dateConsultation = null, $comparison = null)
    {
        if (is_array($dateConsultation)) {
            $useMinMax = false;
            if (isset($dateConsultation['min'])) {
                $this->addUsingAlias(THistoriqueConsultationPeer::DATE_CONSULTATION, $dateConsultation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateConsultation['max'])) {
                $this->addUsingAlias(THistoriqueConsultationPeer::DATE_CONSULTATION, $dateConsultation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(THistoriqueConsultationPeer::DATE_CONSULTATION, $dateConsultation, $comparison);
    }

    /**
     * Filter the query by a related Agent object
     *
     * @param   Agent|PropelObjectCollection $agent The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 THistoriqueConsultationQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAgent($agent, $comparison = null)
    {
        if ($agent instanceof Agent) {
            return $this
                ->addUsingAlias(THistoriqueConsultationPeer::ID_AGENT, $agent->getId(), $comparison);
        } elseif ($agent instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(THistoriqueConsultationPeer::ID_AGENT, $agent->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByAgent() only accepts arguments of type Agent or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Agent relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return THistoriqueConsultationQuery The current query, for fluid interface
     */
    public function joinAgent($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Agent');

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
            $this->addJoinObject($join, 'Agent');
        }

        return $this;
    }

    /**
     * Use the Agent relation Agent object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   AgentQuery A secondary query class using the current class as primary query
     */
    public function useAgentQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinAgent($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Agent', 'AgentQuery');
    }

    /**
     * Filter the query by a related Demande object
     *
     * @param   Demande|PropelObjectCollection $demande The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 THistoriqueConsultationQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByDemande($demande, $comparison = null)
    {
        if ($demande instanceof Demande) {
            return $this
                ->addUsingAlias(THistoriqueConsultationPeer::ID_DEMANDE, $demande->getId(), $comparison);
        } elseif ($demande instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(THistoriqueConsultationPeer::ID_DEMANDE, $demande->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByDemande() only accepts arguments of type Demande or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Demande relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return THistoriqueConsultationQuery The current query, for fluid interface
     */
    public function joinDemande($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Demande');

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
            $this->addJoinObject($join, 'Demande');
        }

        return $this;
    }

    /**
     * Use the Demande relation Demande object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   DemandeQuery A secondary query class using the current class as primary query
     */
    public function useDemandeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinDemande($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Demande', 'DemandeQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   THistoriqueConsultation $tHistoriqueConsultation Object to remove from the list of results
     *
     * @return THistoriqueConsultationQuery The current query, for fluid interface
     */
    public function prune($tHistoriqueConsultation = null)
    {
        if ($tHistoriqueConsultation) {
            $this->addUsingAlias(THistoriqueConsultationPeer::ID, $tHistoriqueConsultation->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
