<?php


/**
 * Base class that represents a query for the 'Socle_Habilitation_Agent' table.
 *
 * 
 *
 * @method CommonSocleHabilitationAgentQuery orderByIdAgent($order = Criteria::ASC) Order by the id_agent column
 * @method CommonSocleHabilitationAgentQuery orderByGestionAgentPoleSocle($order = Criteria::ASC) Order by the gestion_agent_pole_socle column
 * @method CommonSocleHabilitationAgentQuery orderByGestionAgentsSocle($order = Criteria::ASC) Order by the gestion_agents_socle column
 * @method CommonSocleHabilitationAgentQuery orderByDroitGestionServicesSocle($order = Criteria::ASC) Order by the droit_gestion_services_socle column
 *
 * @method CommonSocleHabilitationAgentQuery groupByIdAgent() Group by the id_agent column
 * @method CommonSocleHabilitationAgentQuery groupByGestionAgentPoleSocle() Group by the gestion_agent_pole_socle column
 * @method CommonSocleHabilitationAgentQuery groupByGestionAgentsSocle() Group by the gestion_agents_socle column
 * @method CommonSocleHabilitationAgentQuery groupByDroitGestionServicesSocle() Group by the droit_gestion_services_socle column
 *
 * @method CommonSocleHabilitationAgentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonSocleHabilitationAgentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonSocleHabilitationAgentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonSocleHabilitationAgent findOne(PropelPDO $con = null) Return the first CommonSocleHabilitationAgent matching the query
 * @method CommonSocleHabilitationAgent findOneOrCreate(PropelPDO $con = null) Return the first CommonSocleHabilitationAgent matching the query, or a new CommonSocleHabilitationAgent object populated from the query conditions when no match is found
 *
 * @method CommonSocleHabilitationAgent findOneByGestionAgentPoleSocle(string $gestion_agent_pole_socle) Return the first CommonSocleHabilitationAgent filtered by the gestion_agent_pole_socle column
 * @method CommonSocleHabilitationAgent findOneByGestionAgentsSocle(string $gestion_agents_socle) Return the first CommonSocleHabilitationAgent filtered by the gestion_agents_socle column
 * @method CommonSocleHabilitationAgent findOneByDroitGestionServicesSocle(string $droit_gestion_services_socle) Return the first CommonSocleHabilitationAgent filtered by the droit_gestion_services_socle column
 *
 * @method array findByIdAgent(int $id_agent) Return CommonSocleHabilitationAgent objects filtered by the id_agent column
 * @method array findByGestionAgentPoleSocle(string $gestion_agent_pole_socle) Return CommonSocleHabilitationAgent objects filtered by the gestion_agent_pole_socle column
 * @method array findByGestionAgentsSocle(string $gestion_agents_socle) Return CommonSocleHabilitationAgent objects filtered by the gestion_agents_socle column
 * @method array findByDroitGestionServicesSocle(string $droit_gestion_services_socle) Return CommonSocleHabilitationAgent objects filtered by the droit_gestion_services_socle column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonSocleHabilitationAgentQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonSocleHabilitationAgentQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonSocleHabilitationAgent', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonSocleHabilitationAgentQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonSocleHabilitationAgentQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonSocleHabilitationAgentQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonSocleHabilitationAgentQuery) {
            return $criteria;
        }
        $query = new CommonSocleHabilitationAgentQuery();
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
     * @return   CommonSocleHabilitationAgent|CommonSocleHabilitationAgent[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonSocleHabilitationAgentPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonSocleHabilitationAgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonSocleHabilitationAgent A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdAgent($key, $con = null)
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
     * @return                 CommonSocleHabilitationAgent A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_agent`, `gestion_agent_pole_socle`, `gestion_agents_socle`, `droit_gestion_services_socle` FROM `Socle_Habilitation_Agent` WHERE `id_agent` = :p0';
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
            $obj = new CommonSocleHabilitationAgent();
            $obj->hydrate($row);
            CommonSocleHabilitationAgentPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonSocleHabilitationAgent|CommonSocleHabilitationAgent[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonSocleHabilitationAgent[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonSocleHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonSocleHabilitationAgentPeer::ID_AGENT, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonSocleHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonSocleHabilitationAgentPeer::ID_AGENT, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_agent column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgent(1234); // WHERE id_agent = 1234
     * $query->filterByIdAgent(array(12, 34)); // WHERE id_agent IN (12, 34)
     * $query->filterByIdAgent(array('min' => 12)); // WHERE id_agent >= 12
     * $query->filterByIdAgent(array('max' => 12)); // WHERE id_agent <= 12
     * </code>
     *
     * @param     mixed $idAgent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSocleHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByIdAgent($idAgent = null, $comparison = null)
    {
        if (is_array($idAgent)) {
            $useMinMax = false;
            if (isset($idAgent['min'])) {
                $this->addUsingAlias(CommonSocleHabilitationAgentPeer::ID_AGENT, $idAgent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgent['max'])) {
                $this->addUsingAlias(CommonSocleHabilitationAgentPeer::ID_AGENT, $idAgent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonSocleHabilitationAgentPeer::ID_AGENT, $idAgent, $comparison);
    }

    /**
     * Filter the query on the gestion_agent_pole_socle column
     *
     * Example usage:
     * <code>
     * $query->filterByGestionAgentPoleSocle('fooValue');   // WHERE gestion_agent_pole_socle = 'fooValue'
     * $query->filterByGestionAgentPoleSocle('%fooValue%'); // WHERE gestion_agent_pole_socle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gestionAgentPoleSocle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSocleHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByGestionAgentPoleSocle($gestionAgentPoleSocle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gestionAgentPoleSocle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gestionAgentPoleSocle)) {
                $gestionAgentPoleSocle = str_replace('*', '%', $gestionAgentPoleSocle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonSocleHabilitationAgentPeer::GESTION_AGENT_POLE_SOCLE, $gestionAgentPoleSocle, $comparison);
    }

    /**
     * Filter the query on the gestion_agents_socle column
     *
     * Example usage:
     * <code>
     * $query->filterByGestionAgentsSocle('fooValue');   // WHERE gestion_agents_socle = 'fooValue'
     * $query->filterByGestionAgentsSocle('%fooValue%'); // WHERE gestion_agents_socle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $gestionAgentsSocle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSocleHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByGestionAgentsSocle($gestionAgentsSocle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($gestionAgentsSocle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $gestionAgentsSocle)) {
                $gestionAgentsSocle = str_replace('*', '%', $gestionAgentsSocle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonSocleHabilitationAgentPeer::GESTION_AGENTS_SOCLE, $gestionAgentsSocle, $comparison);
    }

    /**
     * Filter the query on the droit_gestion_services_socle column
     *
     * Example usage:
     * <code>
     * $query->filterByDroitGestionServicesSocle('fooValue');   // WHERE droit_gestion_services_socle = 'fooValue'
     * $query->filterByDroitGestionServicesSocle('%fooValue%'); // WHERE droit_gestion_services_socle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $droitGestionServicesSocle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSocleHabilitationAgentQuery The current query, for fluid interface
     */
    public function filterByDroitGestionServicesSocle($droitGestionServicesSocle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($droitGestionServicesSocle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $droitGestionServicesSocle)) {
                $droitGestionServicesSocle = str_replace('*', '%', $droitGestionServicesSocle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonSocleHabilitationAgentPeer::DROIT_GESTION_SERVICES_SOCLE, $droitGestionServicesSocle, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonSocleHabilitationAgent $commonSocleHabilitationAgent Object to remove from the list of results
     *
     * @return CommonSocleHabilitationAgentQuery The current query, for fluid interface
     */
    public function prune($commonSocleHabilitationAgent = null)
    {
        if ($commonSocleHabilitationAgent) {
            $this->addUsingAlias(CommonSocleHabilitationAgentPeer::ID_AGENT, $commonSocleHabilitationAgent->getIdAgent(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
