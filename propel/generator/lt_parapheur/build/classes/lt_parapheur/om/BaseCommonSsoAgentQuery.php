<?php


/**
 * Base class that represents a query for the 'sso_agent' table.
 *
 * 
 *
 * @method CommonSsoAgentQuery orderByIdSso($order = Criteria::ASC) Order by the id_sso column
 * @method CommonSsoAgentQuery orderByIdAgent($order = Criteria::ASC) Order by the id_agent column
 * @method CommonSsoAgentQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonSsoAgentQuery orderByIdService($order = Criteria::ASC) Order by the id_service column
 * @method CommonSsoAgentQuery orderByDateConnexion($order = Criteria::ASC) Order by the date_connexion column
 * @method CommonSsoAgentQuery orderByDateLastRequest($order = Criteria::ASC) Order by the date_last_request column
 *
 * @method CommonSsoAgentQuery groupByIdSso() Group by the id_sso column
 * @method CommonSsoAgentQuery groupByIdAgent() Group by the id_agent column
 * @method CommonSsoAgentQuery groupByOrganisme() Group by the organisme column
 * @method CommonSsoAgentQuery groupByIdService() Group by the id_service column
 * @method CommonSsoAgentQuery groupByDateConnexion() Group by the date_connexion column
 * @method CommonSsoAgentQuery groupByDateLastRequest() Group by the date_last_request column
 *
 * @method CommonSsoAgentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonSsoAgentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonSsoAgentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonSsoAgent findOne(PropelPDO $con = null) Return the first CommonSsoAgent matching the query
 * @method CommonSsoAgent findOneOrCreate(PropelPDO $con = null) Return the first CommonSsoAgent matching the query, or a new CommonSsoAgent object populated from the query conditions when no match is found
 *
 * @method CommonSsoAgent findOneByIdAgent(int $id_agent) Return the first CommonSsoAgent filtered by the id_agent column
 * @method CommonSsoAgent findOneByOrganisme(string $organisme) Return the first CommonSsoAgent filtered by the organisme column
 * @method CommonSsoAgent findOneByIdService(int $id_service) Return the first CommonSsoAgent filtered by the id_service column
 * @method CommonSsoAgent findOneByDateConnexion(string $date_connexion) Return the first CommonSsoAgent filtered by the date_connexion column
 * @method CommonSsoAgent findOneByDateLastRequest(string $date_last_request) Return the first CommonSsoAgent filtered by the date_last_request column
 *
 * @method array findByIdSso(string $id_sso) Return CommonSsoAgent objects filtered by the id_sso column
 * @method array findByIdAgent(int $id_agent) Return CommonSsoAgent objects filtered by the id_agent column
 * @method array findByOrganisme(string $organisme) Return CommonSsoAgent objects filtered by the organisme column
 * @method array findByIdService(int $id_service) Return CommonSsoAgent objects filtered by the id_service column
 * @method array findByDateConnexion(string $date_connexion) Return CommonSsoAgent objects filtered by the date_connexion column
 * @method array findByDateLastRequest(string $date_last_request) Return CommonSsoAgent objects filtered by the date_last_request column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonSsoAgentQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonSsoAgentQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonSsoAgent', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonSsoAgentQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonSsoAgentQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonSsoAgentQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonSsoAgentQuery) {
            return $criteria;
        }
        $query = new CommonSsoAgentQuery();
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
     * @return   CommonSsoAgent|CommonSsoAgent[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonSsoAgentPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonSsoAgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonSsoAgent A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdSso($key, $con = null)
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
     * @return                 CommonSsoAgent A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_sso`, `id_agent`, `organisme`, `id_service`, `date_connexion`, `date_last_request` FROM `sso_agent` WHERE `id_sso` = :p0';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonSsoAgent();
            $obj->hydrate($row);
            CommonSsoAgentPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonSsoAgent|CommonSsoAgent[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonSsoAgent[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonSsoAgentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonSsoAgentPeer::ID_SSO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonSsoAgentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonSsoAgentPeer::ID_SSO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_sso column
     *
     * Example usage:
     * <code>
     * $query->filterByIdSso('fooValue');   // WHERE id_sso = 'fooValue'
     * $query->filterByIdSso('%fooValue%'); // WHERE id_sso LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idSso The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSsoAgentQuery The current query, for fluid interface
     */
    public function filterByIdSso($idSso = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idSso)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idSso)) {
                $idSso = str_replace('*', '%', $idSso);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonSsoAgentPeer::ID_SSO, $idSso, $comparison);
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
     * @return CommonSsoAgentQuery The current query, for fluid interface
     */
    public function filterByIdAgent($idAgent = null, $comparison = null)
    {
        if (is_array($idAgent)) {
            $useMinMax = false;
            if (isset($idAgent['min'])) {
                $this->addUsingAlias(CommonSsoAgentPeer::ID_AGENT, $idAgent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgent['max'])) {
                $this->addUsingAlias(CommonSsoAgentPeer::ID_AGENT, $idAgent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonSsoAgentPeer::ID_AGENT, $idAgent, $comparison);
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
     * @return CommonSsoAgentQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonSsoAgentPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the id_service column
     *
     * Example usage:
     * <code>
     * $query->filterByIdService(1234); // WHERE id_service = 1234
     * $query->filterByIdService(array(12, 34)); // WHERE id_service IN (12, 34)
     * $query->filterByIdService(array('min' => 12)); // WHERE id_service >= 12
     * $query->filterByIdService(array('max' => 12)); // WHERE id_service <= 12
     * </code>
     *
     * @param     mixed $idService The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSsoAgentQuery The current query, for fluid interface
     */
    public function filterByIdService($idService = null, $comparison = null)
    {
        if (is_array($idService)) {
            $useMinMax = false;
            if (isset($idService['min'])) {
                $this->addUsingAlias(CommonSsoAgentPeer::ID_SERVICE, $idService['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idService['max'])) {
                $this->addUsingAlias(CommonSsoAgentPeer::ID_SERVICE, $idService['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonSsoAgentPeer::ID_SERVICE, $idService, $comparison);
    }

    /**
     * Filter the query on the date_connexion column
     *
     * Example usage:
     * <code>
     * $query->filterByDateConnexion('fooValue');   // WHERE date_connexion = 'fooValue'
     * $query->filterByDateConnexion('%fooValue%'); // WHERE date_connexion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateConnexion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSsoAgentQuery The current query, for fluid interface
     */
    public function filterByDateConnexion($dateConnexion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateConnexion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateConnexion)) {
                $dateConnexion = str_replace('*', '%', $dateConnexion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonSsoAgentPeer::DATE_CONNEXION, $dateConnexion, $comparison);
    }

    /**
     * Filter the query on the date_last_request column
     *
     * Example usage:
     * <code>
     * $query->filterByDateLastRequest('fooValue');   // WHERE date_last_request = 'fooValue'
     * $query->filterByDateLastRequest('%fooValue%'); // WHERE date_last_request LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateLastRequest The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSsoAgentQuery The current query, for fluid interface
     */
    public function filterByDateLastRequest($dateLastRequest = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateLastRequest)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateLastRequest)) {
                $dateLastRequest = str_replace('*', '%', $dateLastRequest);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonSsoAgentPeer::DATE_LAST_REQUEST, $dateLastRequest, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonSsoAgent $commonSsoAgent Object to remove from the list of results
     *
     * @return CommonSsoAgentQuery The current query, for fluid interface
     */
    public function prune($commonSsoAgent = null)
    {
        if ($commonSsoAgent) {
            $this->addUsingAlias(CommonSsoAgentPeer::ID_SSO, $commonSsoAgent->getIdSso(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
