<?php


/**
 * Base class that represents a query for the 't_connexion_agent' table.
 *
 * 
 *
 * @method TConnexionAgentQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method TConnexionAgentQuery orderByIdAgent($order = Criteria::ASC) Order by the ID_AGENT column
 * @method TConnexionAgentQuery orderByIdOrganisme($order = Criteria::ASC) Order by the ID_ORGANISME column
 * @method TConnexionAgentQuery orderByDateConnexion($order = Criteria::ASC) Order by the DATE_CONNEXION column
 * @method TConnexionAgentQuery orderByDateDeconnexion($order = Criteria::ASC) Order by the DATE_DECONNEXION column
 *
 * @method TConnexionAgentQuery groupById() Group by the ID column
 * @method TConnexionAgentQuery groupByIdAgent() Group by the ID_AGENT column
 * @method TConnexionAgentQuery groupByIdOrganisme() Group by the ID_ORGANISME column
 * @method TConnexionAgentQuery groupByDateConnexion() Group by the DATE_CONNEXION column
 * @method TConnexionAgentQuery groupByDateDeconnexion() Group by the DATE_DECONNEXION column
 *
 * @method TConnexionAgentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TConnexionAgentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TConnexionAgentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TConnexionAgent findOne(PropelPDO $con = null) Return the first TConnexionAgent matching the query
 * @method TConnexionAgent findOneOrCreate(PropelPDO $con = null) Return the first TConnexionAgent matching the query, or a new TConnexionAgent object populated from the query conditions when no match is found
 *
 * @method TConnexionAgent findOneByIdAgent(int $ID_AGENT) Return the first TConnexionAgent filtered by the ID_AGENT column
 * @method TConnexionAgent findOneByIdOrganisme(int $ID_ORGANISME) Return the first TConnexionAgent filtered by the ID_ORGANISME column
 * @method TConnexionAgent findOneByDateConnexion(string $DATE_CONNEXION) Return the first TConnexionAgent filtered by the DATE_CONNEXION column
 * @method TConnexionAgent findOneByDateDeconnexion(string $DATE_DECONNEXION) Return the first TConnexionAgent filtered by the DATE_DECONNEXION column
 *
 * @method array findById(int $ID) Return TConnexionAgent objects filtered by the ID column
 * @method array findByIdAgent(int $ID_AGENT) Return TConnexionAgent objects filtered by the ID_AGENT column
 * @method array findByIdOrganisme(int $ID_ORGANISME) Return TConnexionAgent objects filtered by the ID_ORGANISME column
 * @method array findByDateConnexion(string $DATE_CONNEXION) Return TConnexionAgent objects filtered by the DATE_CONNEXION column
 * @method array findByDateDeconnexion(string $DATE_DECONNEXION) Return TConnexionAgent objects filtered by the DATE_DECONNEXION column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseTConnexionAgentQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTConnexionAgentQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'TConnexionAgent', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TConnexionAgentQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TConnexionAgentQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TConnexionAgentQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TConnexionAgentQuery) {
            return $criteria;
        }
        $query = new TConnexionAgentQuery();
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
     * @return   TConnexionAgent|TConnexionAgent[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TConnexionAgentPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TConnexionAgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TConnexionAgent A model object, or null if the key is not found
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
     * @return                 TConnexionAgent A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `ID_AGENT`, `ID_ORGANISME`, `DATE_CONNEXION`, `DATE_DECONNEXION` FROM `t_connexion_agent` WHERE `ID` = :p0';
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
            $obj = new TConnexionAgent();
            $obj->hydrate($row);
            TConnexionAgentPeer::addInstanceToPool($obj, (string) $key);
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
     * @return TConnexionAgent|TConnexionAgent[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TConnexionAgent[]|mixed the list of results, formatted by the current formatter
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
     * @return TConnexionAgentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TConnexionAgentPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TConnexionAgentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TConnexionAgentPeer::ID, $keys, Criteria::IN);
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
     * @return TConnexionAgentQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(TConnexionAgentPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(TConnexionAgentPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TConnexionAgentPeer::ID, $id, $comparison);
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
     * @return TConnexionAgentQuery The current query, for fluid interface
     */
    public function filterByIdAgent($idAgent = null, $comparison = null)
    {
        if (is_array($idAgent)) {
            $useMinMax = false;
            if (isset($idAgent['min'])) {
                $this->addUsingAlias(TConnexionAgentPeer::ID_AGENT, $idAgent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgent['max'])) {
                $this->addUsingAlias(TConnexionAgentPeer::ID_AGENT, $idAgent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TConnexionAgentPeer::ID_AGENT, $idAgent, $comparison);
    }

    /**
     * Filter the query on the ID_ORGANISME column
     *
     * Example usage:
     * <code>
     * $query->filterByIdOrganisme(1234); // WHERE ID_ORGANISME = 1234
     * $query->filterByIdOrganisme(array(12, 34)); // WHERE ID_ORGANISME IN (12, 34)
     * $query->filterByIdOrganisme(array('min' => 12)); // WHERE ID_ORGANISME >= 12
     * $query->filterByIdOrganisme(array('max' => 12)); // WHERE ID_ORGANISME <= 12
     * </code>
     *
     * @param     mixed $idOrganisme The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TConnexionAgentQuery The current query, for fluid interface
     */
    public function filterByIdOrganisme($idOrganisme = null, $comparison = null)
    {
        if (is_array($idOrganisme)) {
            $useMinMax = false;
            if (isset($idOrganisme['min'])) {
                $this->addUsingAlias(TConnexionAgentPeer::ID_ORGANISME, $idOrganisme['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idOrganisme['max'])) {
                $this->addUsingAlias(TConnexionAgentPeer::ID_ORGANISME, $idOrganisme['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TConnexionAgentPeer::ID_ORGANISME, $idOrganisme, $comparison);
    }

    /**
     * Filter the query on the DATE_CONNEXION column
     *
     * Example usage:
     * <code>
     * $query->filterByDateConnexion('2011-03-14'); // WHERE DATE_CONNEXION = '2011-03-14'
     * $query->filterByDateConnexion('now'); // WHERE DATE_CONNEXION = '2011-03-14'
     * $query->filterByDateConnexion(array('max' => 'yesterday')); // WHERE DATE_CONNEXION > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateConnexion The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TConnexionAgentQuery The current query, for fluid interface
     */
    public function filterByDateConnexion($dateConnexion = null, $comparison = null)
    {
        if (is_array($dateConnexion)) {
            $useMinMax = false;
            if (isset($dateConnexion['min'])) {
                $this->addUsingAlias(TConnexionAgentPeer::DATE_CONNEXION, $dateConnexion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateConnexion['max'])) {
                $this->addUsingAlias(TConnexionAgentPeer::DATE_CONNEXION, $dateConnexion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TConnexionAgentPeer::DATE_CONNEXION, $dateConnexion, $comparison);
    }

    /**
     * Filter the query on the DATE_DECONNEXION column
     *
     * Example usage:
     * <code>
     * $query->filterByDateDeconnexion('2011-03-14'); // WHERE DATE_DECONNEXION = '2011-03-14'
     * $query->filterByDateDeconnexion('now'); // WHERE DATE_DECONNEXION = '2011-03-14'
     * $query->filterByDateDeconnexion(array('max' => 'yesterday')); // WHERE DATE_DECONNEXION > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateDeconnexion The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TConnexionAgentQuery The current query, for fluid interface
     */
    public function filterByDateDeconnexion($dateDeconnexion = null, $comparison = null)
    {
        if (is_array($dateDeconnexion)) {
            $useMinMax = false;
            if (isset($dateDeconnexion['min'])) {
                $this->addUsingAlias(TConnexionAgentPeer::DATE_DECONNEXION, $dateDeconnexion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateDeconnexion['max'])) {
                $this->addUsingAlias(TConnexionAgentPeer::DATE_DECONNEXION, $dateDeconnexion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TConnexionAgentPeer::DATE_DECONNEXION, $dateDeconnexion, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   TConnexionAgent $tConnexionAgent Object to remove from the list of results
     *
     * @return TConnexionAgentQuery The current query, for fluid interface
     */
    public function prune($tConnexionAgent = null)
    {
        if ($tConnexionAgent) {
            $this->addUsingAlias(TConnexionAgentPeer::ID, $tConnexionAgent->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
