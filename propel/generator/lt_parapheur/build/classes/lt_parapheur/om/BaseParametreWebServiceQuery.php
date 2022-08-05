<?php


/**
 * Base class that represents a query for the 'parametre_web_service' table.
 *
 * 
 *
 * @method ParametreWebServiceQuery orderByIdParametreWebService($order = Criteria::ASC) Order by the ID_PARAMETRE_WEB_SERVICE column
 * @method ParametreWebServiceQuery orderByIdTeleservice($order = Criteria::ASC) Order by the ID_TELESERVICE column
 * @method ParametreWebServiceQuery orderByIdOrganisme($order = Criteria::ASC) Order by the ID_ORGANISME column
 * @method ParametreWebServiceQuery orderByLogin($order = Criteria::ASC) Order by the LOGIN column
 * @method ParametreWebServiceQuery orderByPass($order = Criteria::ASC) Order by the PASS column
 * @method ParametreWebServiceQuery orderByUrlWebService($order = Criteria::ASC) Order by the URL_WEB_SERVICE column
 *
 * @method ParametreWebServiceQuery groupByIdParametreWebService() Group by the ID_PARAMETRE_WEB_SERVICE column
 * @method ParametreWebServiceQuery groupByIdTeleservice() Group by the ID_TELESERVICE column
 * @method ParametreWebServiceQuery groupByIdOrganisme() Group by the ID_ORGANISME column
 * @method ParametreWebServiceQuery groupByLogin() Group by the LOGIN column
 * @method ParametreWebServiceQuery groupByPass() Group by the PASS column
 * @method ParametreWebServiceQuery groupByUrlWebService() Group by the URL_WEB_SERVICE column
 *
 * @method ParametreWebServiceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ParametreWebServiceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ParametreWebServiceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ParametreWebService findOne(PropelPDO $con = null) Return the first ParametreWebService matching the query
 * @method ParametreWebService findOneOrCreate(PropelPDO $con = null) Return the first ParametreWebService matching the query, or a new ParametreWebService object populated from the query conditions when no match is found
 *
 * @method ParametreWebService findOneByIdTeleservice(string $ID_TELESERVICE) Return the first ParametreWebService filtered by the ID_TELESERVICE column
 * @method ParametreWebService findOneByIdOrganisme(int $ID_ORGANISME) Return the first ParametreWebService filtered by the ID_ORGANISME column
 * @method ParametreWebService findOneByLogin(string $LOGIN) Return the first ParametreWebService filtered by the LOGIN column
 * @method ParametreWebService findOneByPass(string $PASS) Return the first ParametreWebService filtered by the PASS column
 * @method ParametreWebService findOneByUrlWebService(string $URL_WEB_SERVICE) Return the first ParametreWebService filtered by the URL_WEB_SERVICE column
 *
 * @method array findByIdParametreWebService(int $ID_PARAMETRE_WEB_SERVICE) Return ParametreWebService objects filtered by the ID_PARAMETRE_WEB_SERVICE column
 * @method array findByIdTeleservice(string $ID_TELESERVICE) Return ParametreWebService objects filtered by the ID_TELESERVICE column
 * @method array findByIdOrganisme(int $ID_ORGANISME) Return ParametreWebService objects filtered by the ID_ORGANISME column
 * @method array findByLogin(string $LOGIN) Return ParametreWebService objects filtered by the LOGIN column
 * @method array findByPass(string $PASS) Return ParametreWebService objects filtered by the PASS column
 * @method array findByUrlWebService(string $URL_WEB_SERVICE) Return ParametreWebService objects filtered by the URL_WEB_SERVICE column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseParametreWebServiceQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseParametreWebServiceQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'ParametreWebService', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ParametreWebServiceQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ParametreWebServiceQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ParametreWebServiceQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ParametreWebServiceQuery) {
            return $criteria;
        }
        $query = new ParametreWebServiceQuery();
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
     * @return   ParametreWebService|ParametreWebService[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ParametreWebServicePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ParametreWebServicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ParametreWebService A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdParametreWebService($key, $con = null)
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
     * @return                 ParametreWebService A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_PARAMETRE_WEB_SERVICE`, `ID_TELESERVICE`, `ID_ORGANISME`, `LOGIN`, `PASS`, `URL_WEB_SERVICE` FROM `parametre_web_service` WHERE `ID_PARAMETRE_WEB_SERVICE` = :p0';
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
            $obj = new ParametreWebService();
            $obj->hydrate($row);
            ParametreWebServicePeer::addInstanceToPool($obj, (string) $key);
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
     * @return ParametreWebService|ParametreWebService[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ParametreWebService[]|mixed the list of results, formatted by the current formatter
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
     * @return ParametreWebServiceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ParametreWebServicePeer::ID_PARAMETRE_WEB_SERVICE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ParametreWebServiceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ParametreWebServicePeer::ID_PARAMETRE_WEB_SERVICE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID_PARAMETRE_WEB_SERVICE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdParametreWebService(1234); // WHERE ID_PARAMETRE_WEB_SERVICE = 1234
     * $query->filterByIdParametreWebService(array(12, 34)); // WHERE ID_PARAMETRE_WEB_SERVICE IN (12, 34)
     * $query->filterByIdParametreWebService(array('min' => 12)); // WHERE ID_PARAMETRE_WEB_SERVICE >= 12
     * $query->filterByIdParametreWebService(array('max' => 12)); // WHERE ID_PARAMETRE_WEB_SERVICE <= 12
     * </code>
     *
     * @param     mixed $idParametreWebService The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ParametreWebServiceQuery The current query, for fluid interface
     */
    public function filterByIdParametreWebService($idParametreWebService = null, $comparison = null)
    {
        if (is_array($idParametreWebService)) {
            $useMinMax = false;
            if (isset($idParametreWebService['min'])) {
                $this->addUsingAlias(ParametreWebServicePeer::ID_PARAMETRE_WEB_SERVICE, $idParametreWebService['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idParametreWebService['max'])) {
                $this->addUsingAlias(ParametreWebServicePeer::ID_PARAMETRE_WEB_SERVICE, $idParametreWebService['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ParametreWebServicePeer::ID_PARAMETRE_WEB_SERVICE, $idParametreWebService, $comparison);
    }

    /**
     * Filter the query on the ID_TELESERVICE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTeleservice('fooValue');   // WHERE ID_TELESERVICE = 'fooValue'
     * $query->filterByIdTeleservice('%fooValue%'); // WHERE ID_TELESERVICE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idTeleservice The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ParametreWebServiceQuery The current query, for fluid interface
     */
    public function filterByIdTeleservice($idTeleservice = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idTeleservice)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idTeleservice)) {
                $idTeleservice = str_replace('*', '%', $idTeleservice);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ParametreWebServicePeer::ID_TELESERVICE, $idTeleservice, $comparison);
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
     * @return ParametreWebServiceQuery The current query, for fluid interface
     */
    public function filterByIdOrganisme($idOrganisme = null, $comparison = null)
    {
        if (is_array($idOrganisme)) {
            $useMinMax = false;
            if (isset($idOrganisme['min'])) {
                $this->addUsingAlias(ParametreWebServicePeer::ID_ORGANISME, $idOrganisme['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idOrganisme['max'])) {
                $this->addUsingAlias(ParametreWebServicePeer::ID_ORGANISME, $idOrganisme['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ParametreWebServicePeer::ID_ORGANISME, $idOrganisme, $comparison);
    }

    /**
     * Filter the query on the LOGIN column
     *
     * Example usage:
     * <code>
     * $query->filterByLogin('fooValue');   // WHERE LOGIN = 'fooValue'
     * $query->filterByLogin('%fooValue%'); // WHERE LOGIN LIKE '%fooValue%'
     * </code>
     *
     * @param     string $login The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ParametreWebServiceQuery The current query, for fluid interface
     */
    public function filterByLogin($login = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($login)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $login)) {
                $login = str_replace('*', '%', $login);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ParametreWebServicePeer::LOGIN, $login, $comparison);
    }

    /**
     * Filter the query on the PASS column
     *
     * Example usage:
     * <code>
     * $query->filterByPass('fooValue');   // WHERE PASS = 'fooValue'
     * $query->filterByPass('%fooValue%'); // WHERE PASS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pass The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ParametreWebServiceQuery The current query, for fluid interface
     */
    public function filterByPass($pass = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pass)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pass)) {
                $pass = str_replace('*', '%', $pass);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ParametreWebServicePeer::PASS, $pass, $comparison);
    }

    /**
     * Filter the query on the URL_WEB_SERVICE column
     *
     * Example usage:
     * <code>
     * $query->filterByUrlWebService('fooValue');   // WHERE URL_WEB_SERVICE = 'fooValue'
     * $query->filterByUrlWebService('%fooValue%'); // WHERE URL_WEB_SERVICE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $urlWebService The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ParametreWebServiceQuery The current query, for fluid interface
     */
    public function filterByUrlWebService($urlWebService = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($urlWebService)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $urlWebService)) {
                $urlWebService = str_replace('*', '%', $urlWebService);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ParametreWebServicePeer::URL_WEB_SERVICE, $urlWebService, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ParametreWebService $parametreWebService Object to remove from the list of results
     *
     * @return ParametreWebServiceQuery The current query, for fluid interface
     */
    public function prune($parametreWebService = null)
    {
        if ($parametreWebService) {
            $this->addUsingAlias(ParametreWebServicePeer::ID_PARAMETRE_WEB_SERVICE, $parametreWebService->getIdParametreWebService(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
