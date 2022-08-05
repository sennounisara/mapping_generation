<?php


/**
 * Base class that represents a query for the 'agent_interim' table.
 *
 * 
 *
 * @method AgentInterimQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method AgentInterimQuery orderByIdAgent($order = Criteria::ASC) Order by the ID_AGENT column
 * @method AgentInterimQuery orderByIdAgentInterim($order = Criteria::ASC) Order by the ID_AGENT_INTERIM column
 * @method AgentInterimQuery orderByStatut($order = Criteria::ASC) Order by the STATUT column
 * @method AgentInterimQuery orderByDateDebut($order = Criteria::ASC) Order by the DATE_DEBUT column
 * @method AgentInterimQuery orderByDateFin($order = Criteria::ASC) Order by the DATE_FIN column
 *
 * @method AgentInterimQuery groupById() Group by the ID column
 * @method AgentInterimQuery groupByIdAgent() Group by the ID_AGENT column
 * @method AgentInterimQuery groupByIdAgentInterim() Group by the ID_AGENT_INTERIM column
 * @method AgentInterimQuery groupByStatut() Group by the STATUT column
 * @method AgentInterimQuery groupByDateDebut() Group by the DATE_DEBUT column
 * @method AgentInterimQuery groupByDateFin() Group by the DATE_FIN column
 *
 * @method AgentInterimQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method AgentInterimQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method AgentInterimQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method AgentInterim findOne(PropelPDO $con = null) Return the first AgentInterim matching the query
 * @method AgentInterim findOneOrCreate(PropelPDO $con = null) Return the first AgentInterim matching the query, or a new AgentInterim object populated from the query conditions when no match is found
 *
 * @method AgentInterim findOneByIdAgent(int $ID_AGENT) Return the first AgentInterim filtered by the ID_AGENT column
 * @method AgentInterim findOneByIdAgentInterim(int $ID_AGENT_INTERIM) Return the first AgentInterim filtered by the ID_AGENT_INTERIM column
 * @method AgentInterim findOneByStatut(string $STATUT) Return the first AgentInterim filtered by the STATUT column
 * @method AgentInterim findOneByDateDebut(string $DATE_DEBUT) Return the first AgentInterim filtered by the DATE_DEBUT column
 * @method AgentInterim findOneByDateFin(string $DATE_FIN) Return the first AgentInterim filtered by the DATE_FIN column
 *
 * @method array findById(int $ID) Return AgentInterim objects filtered by the ID column
 * @method array findByIdAgent(int $ID_AGENT) Return AgentInterim objects filtered by the ID_AGENT column
 * @method array findByIdAgentInterim(int $ID_AGENT_INTERIM) Return AgentInterim objects filtered by the ID_AGENT_INTERIM column
 * @method array findByStatut(string $STATUT) Return AgentInterim objects filtered by the STATUT column
 * @method array findByDateDebut(string $DATE_DEBUT) Return AgentInterim objects filtered by the DATE_DEBUT column
 * @method array findByDateFin(string $DATE_FIN) Return AgentInterim objects filtered by the DATE_FIN column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseAgentInterimQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseAgentInterimQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'AgentInterim', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AgentInterimQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   AgentInterimQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return AgentInterimQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AgentInterimQuery) {
            return $criteria;
        }
        $query = new AgentInterimQuery();
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
     * @return   AgentInterim|AgentInterim[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AgentInterimPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(AgentInterimPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 AgentInterim A model object, or null if the key is not found
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
     * @return                 AgentInterim A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `ID_AGENT`, `ID_AGENT_INTERIM`, `STATUT`, `DATE_DEBUT`, `DATE_FIN` FROM `agent_interim` WHERE `ID` = :p0';
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
            $obj = new AgentInterim();
            $obj->hydrate($row);
            AgentInterimPeer::addInstanceToPool($obj, (string) $key);
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
     * @return AgentInterim|AgentInterim[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|AgentInterim[]|mixed the list of results, formatted by the current formatter
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
     * @return AgentInterimQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(AgentInterimPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return AgentInterimQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AgentInterimPeer::ID, $keys, Criteria::IN);
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
     * @return AgentInterimQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(AgentInterimPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(AgentInterimPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AgentInterimPeer::ID, $id, $comparison);
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
     * @param     mixed $idAgent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AgentInterimQuery The current query, for fluid interface
     */
    public function filterByIdAgent($idAgent = null, $comparison = null)
    {
        if (is_array($idAgent)) {
            $useMinMax = false;
            if (isset($idAgent['min'])) {
                $this->addUsingAlias(AgentInterimPeer::ID_AGENT, $idAgent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgent['max'])) {
                $this->addUsingAlias(AgentInterimPeer::ID_AGENT, $idAgent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AgentInterimPeer::ID_AGENT, $idAgent, $comparison);
    }

    /**
     * Filter the query on the ID_AGENT_INTERIM column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentInterim(1234); // WHERE ID_AGENT_INTERIM = 1234
     * $query->filterByIdAgentInterim(array(12, 34)); // WHERE ID_AGENT_INTERIM IN (12, 34)
     * $query->filterByIdAgentInterim(array('min' => 12)); // WHERE ID_AGENT_INTERIM >= 12
     * $query->filterByIdAgentInterim(array('max' => 12)); // WHERE ID_AGENT_INTERIM <= 12
     * </code>
     *
     * @param     mixed $idAgentInterim The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AgentInterimQuery The current query, for fluid interface
     */
    public function filterByIdAgentInterim($idAgentInterim = null, $comparison = null)
    {
        if (is_array($idAgentInterim)) {
            $useMinMax = false;
            if (isset($idAgentInterim['min'])) {
                $this->addUsingAlias(AgentInterimPeer::ID_AGENT_INTERIM, $idAgentInterim['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentInterim['max'])) {
                $this->addUsingAlias(AgentInterimPeer::ID_AGENT_INTERIM, $idAgentInterim['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AgentInterimPeer::ID_AGENT_INTERIM, $idAgentInterim, $comparison);
    }

    /**
     * Filter the query on the STATUT column
     *
     * Example usage:
     * <code>
     * $query->filterByStatut('fooValue');   // WHERE STATUT = 'fooValue'
     * $query->filterByStatut('%fooValue%'); // WHERE STATUT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $statut The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AgentInterimQuery The current query, for fluid interface
     */
    public function filterByStatut($statut = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($statut)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $statut)) {
                $statut = str_replace('*', '%', $statut);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AgentInterimPeer::STATUT, $statut, $comparison);
    }

    /**
     * Filter the query on the DATE_DEBUT column
     *
     * Example usage:
     * <code>
     * $query->filterByDateDebut('2011-03-14'); // WHERE DATE_DEBUT = '2011-03-14'
     * $query->filterByDateDebut('now'); // WHERE DATE_DEBUT = '2011-03-14'
     * $query->filterByDateDebut(array('max' => 'yesterday')); // WHERE DATE_DEBUT > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateDebut The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AgentInterimQuery The current query, for fluid interface
     */
    public function filterByDateDebut($dateDebut = null, $comparison = null)
    {
        if (is_array($dateDebut)) {
            $useMinMax = false;
            if (isset($dateDebut['min'])) {
                $this->addUsingAlias(AgentInterimPeer::DATE_DEBUT, $dateDebut['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateDebut['max'])) {
                $this->addUsingAlias(AgentInterimPeer::DATE_DEBUT, $dateDebut['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AgentInterimPeer::DATE_DEBUT, $dateDebut, $comparison);
    }

    /**
     * Filter the query on the DATE_FIN column
     *
     * Example usage:
     * <code>
     * $query->filterByDateFin('2011-03-14'); // WHERE DATE_FIN = '2011-03-14'
     * $query->filterByDateFin('now'); // WHERE DATE_FIN = '2011-03-14'
     * $query->filterByDateFin(array('max' => 'yesterday')); // WHERE DATE_FIN > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateFin The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AgentInterimQuery The current query, for fluid interface
     */
    public function filterByDateFin($dateFin = null, $comparison = null)
    {
        if (is_array($dateFin)) {
            $useMinMax = false;
            if (isset($dateFin['min'])) {
                $this->addUsingAlias(AgentInterimPeer::DATE_FIN, $dateFin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateFin['max'])) {
                $this->addUsingAlias(AgentInterimPeer::DATE_FIN, $dateFin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AgentInterimPeer::DATE_FIN, $dateFin, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   AgentInterim $agentInterim Object to remove from the list of results
     *
     * @return AgentInterimQuery The current query, for fluid interface
     */
    public function prune($agentInterim = null)
    {
        if ($agentInterim) {
            $this->addUsingAlias(AgentInterimPeer::ID, $agentInterim->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
