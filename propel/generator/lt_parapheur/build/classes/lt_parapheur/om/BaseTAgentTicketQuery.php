<?php


/**
 * Base class that represents a query for the 't_agent_ticket' table.
 *
 * 
 *
 * @method TAgentTicketQuery orderByIdAgentIssue($order = Criteria::ASC) Order by the ID_AGENT_ISSUE column
 * @method TAgentTicketQuery orderByIdAgent($order = Criteria::ASC) Order by the ID_AGENT column
 * @method TAgentTicketQuery orderByIdIssue($order = Criteria::ASC) Order by the ID_ISSUE column
 * @method TAgentTicketQuery orderByDateCreation($order = Criteria::ASC) Order by the DATE_CREATION column
 *
 * @method TAgentTicketQuery groupByIdAgentIssue() Group by the ID_AGENT_ISSUE column
 * @method TAgentTicketQuery groupByIdAgent() Group by the ID_AGENT column
 * @method TAgentTicketQuery groupByIdIssue() Group by the ID_ISSUE column
 * @method TAgentTicketQuery groupByDateCreation() Group by the DATE_CREATION column
 *
 * @method TAgentTicketQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TAgentTicketQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TAgentTicketQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TAgentTicketQuery leftJoinAgent($relationAlias = null) Adds a LEFT JOIN clause to the query using the Agent relation
 * @method TAgentTicketQuery rightJoinAgent($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Agent relation
 * @method TAgentTicketQuery innerJoinAgent($relationAlias = null) Adds a INNER JOIN clause to the query using the Agent relation
 *
 * @method TAgentTicket findOne(PropelPDO $con = null) Return the first TAgentTicket matching the query
 * @method TAgentTicket findOneOrCreate(PropelPDO $con = null) Return the first TAgentTicket matching the query, or a new TAgentTicket object populated from the query conditions when no match is found
 *
 * @method TAgentTicket findOneByIdAgent(int $ID_AGENT) Return the first TAgentTicket filtered by the ID_AGENT column
 * @method TAgentTicket findOneByIdIssue(int $ID_ISSUE) Return the first TAgentTicket filtered by the ID_ISSUE column
 * @method TAgentTicket findOneByDateCreation(string $DATE_CREATION) Return the first TAgentTicket filtered by the DATE_CREATION column
 *
 * @method array findByIdAgentIssue(int $ID_AGENT_ISSUE) Return TAgentTicket objects filtered by the ID_AGENT_ISSUE column
 * @method array findByIdAgent(int $ID_AGENT) Return TAgentTicket objects filtered by the ID_AGENT column
 * @method array findByIdIssue(int $ID_ISSUE) Return TAgentTicket objects filtered by the ID_ISSUE column
 * @method array findByDateCreation(string $DATE_CREATION) Return TAgentTicket objects filtered by the DATE_CREATION column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseTAgentTicketQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTAgentTicketQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'TAgentTicket', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TAgentTicketQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TAgentTicketQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TAgentTicketQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TAgentTicketQuery) {
            return $criteria;
        }
        $query = new TAgentTicketQuery();
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
     * @return   TAgentTicket|TAgentTicket[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TAgentTicketPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TAgentTicketPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TAgentTicket A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdAgentIssue($key, $con = null)
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
     * @return                 TAgentTicket A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_AGENT_ISSUE`, `ID_AGENT`, `ID_ISSUE`, `DATE_CREATION` FROM `t_agent_ticket` WHERE `ID_AGENT_ISSUE` = :p0';
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
            $obj = new TAgentTicket();
            $obj->hydrate($row);
            TAgentTicketPeer::addInstanceToPool($obj, (string) $key);
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
     * @return TAgentTicket|TAgentTicket[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TAgentTicket[]|mixed the list of results, formatted by the current formatter
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
     * @return TAgentTicketQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TAgentTicketPeer::ID_AGENT_ISSUE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TAgentTicketQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TAgentTicketPeer::ID_AGENT_ISSUE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID_AGENT_ISSUE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentIssue(1234); // WHERE ID_AGENT_ISSUE = 1234
     * $query->filterByIdAgentIssue(array(12, 34)); // WHERE ID_AGENT_ISSUE IN (12, 34)
     * $query->filterByIdAgentIssue(array('min' => 12)); // WHERE ID_AGENT_ISSUE >= 12
     * $query->filterByIdAgentIssue(array('max' => 12)); // WHERE ID_AGENT_ISSUE <= 12
     * </code>
     *
     * @param     mixed $idAgentIssue The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TAgentTicketQuery The current query, for fluid interface
     */
    public function filterByIdAgentIssue($idAgentIssue = null, $comparison = null)
    {
        if (is_array($idAgentIssue)) {
            $useMinMax = false;
            if (isset($idAgentIssue['min'])) {
                $this->addUsingAlias(TAgentTicketPeer::ID_AGENT_ISSUE, $idAgentIssue['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentIssue['max'])) {
                $this->addUsingAlias(TAgentTicketPeer::ID_AGENT_ISSUE, $idAgentIssue['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TAgentTicketPeer::ID_AGENT_ISSUE, $idAgentIssue, $comparison);
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
     * @return TAgentTicketQuery The current query, for fluid interface
     */
    public function filterByIdAgent($idAgent = null, $comparison = null)
    {
        if (is_array($idAgent)) {
            $useMinMax = false;
            if (isset($idAgent['min'])) {
                $this->addUsingAlias(TAgentTicketPeer::ID_AGENT, $idAgent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgent['max'])) {
                $this->addUsingAlias(TAgentTicketPeer::ID_AGENT, $idAgent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TAgentTicketPeer::ID_AGENT, $idAgent, $comparison);
    }

    /**
     * Filter the query on the ID_ISSUE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdIssue(1234); // WHERE ID_ISSUE = 1234
     * $query->filterByIdIssue(array(12, 34)); // WHERE ID_ISSUE IN (12, 34)
     * $query->filterByIdIssue(array('min' => 12)); // WHERE ID_ISSUE >= 12
     * $query->filterByIdIssue(array('max' => 12)); // WHERE ID_ISSUE <= 12
     * </code>
     *
     * @param     mixed $idIssue The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TAgentTicketQuery The current query, for fluid interface
     */
    public function filterByIdIssue($idIssue = null, $comparison = null)
    {
        if (is_array($idIssue)) {
            $useMinMax = false;
            if (isset($idIssue['min'])) {
                $this->addUsingAlias(TAgentTicketPeer::ID_ISSUE, $idIssue['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idIssue['max'])) {
                $this->addUsingAlias(TAgentTicketPeer::ID_ISSUE, $idIssue['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TAgentTicketPeer::ID_ISSUE, $idIssue, $comparison);
    }

    /**
     * Filter the query on the DATE_CREATION column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCreation('2011-03-14'); // WHERE DATE_CREATION = '2011-03-14'
     * $query->filterByDateCreation('now'); // WHERE DATE_CREATION = '2011-03-14'
     * $query->filterByDateCreation(array('max' => 'yesterday')); // WHERE DATE_CREATION > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateCreation The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TAgentTicketQuery The current query, for fluid interface
     */
    public function filterByDateCreation($dateCreation = null, $comparison = null)
    {
        if (is_array($dateCreation)) {
            $useMinMax = false;
            if (isset($dateCreation['min'])) {
                $this->addUsingAlias(TAgentTicketPeer::DATE_CREATION, $dateCreation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreation['max'])) {
                $this->addUsingAlias(TAgentTicketPeer::DATE_CREATION, $dateCreation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TAgentTicketPeer::DATE_CREATION, $dateCreation, $comparison);
    }

    /**
     * Filter the query by a related Agent object
     *
     * @param   Agent|PropelObjectCollection $agent The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 TAgentTicketQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByAgent($agent, $comparison = null)
    {
        if ($agent instanceof Agent) {
            return $this
                ->addUsingAlias(TAgentTicketPeer::ID_AGENT, $agent->getId(), $comparison);
        } elseif ($agent instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(TAgentTicketPeer::ID_AGENT, $agent->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
     * @return TAgentTicketQuery The current query, for fluid interface
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
     * Exclude object from result
     *
     * @param   TAgentTicket $tAgentTicket Object to remove from the list of results
     *
     * @return TAgentTicketQuery The current query, for fluid interface
     */
    public function prune($tAgentTicket = null)
    {
        if ($tAgentTicket) {
            $this->addUsingAlias(TAgentTicketPeer::ID_AGENT_ISSUE, $tAgentTicket->getIdAgentIssue(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
