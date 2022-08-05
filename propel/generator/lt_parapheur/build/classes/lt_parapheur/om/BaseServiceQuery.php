<?php


/**
 * Base class that represents a query for the 'service' table.
 *
 * 
 *
 * @method ServiceQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method ServiceQuery orderByIdCommune($order = Criteria::ASC) Order by the ID_COMMUNE column
 * @method ServiceQuery orderByNomServiceFr($order = Criteria::ASC) Order by the NOM_SERVICE_FR column
 * @method ServiceQuery orderByEtatService($order = Criteria::ASC) Order by the ETAT_SERVICE column
 * @method ServiceQuery orderByNomServiceAr($order = Criteria::ASC) Order by the NOM_SERVICE_AR column
 *
 * @method ServiceQuery groupById() Group by the ID column
 * @method ServiceQuery groupByIdCommune() Group by the ID_COMMUNE column
 * @method ServiceQuery groupByNomServiceFr() Group by the NOM_SERVICE_FR column
 * @method ServiceQuery groupByEtatService() Group by the ETAT_SERVICE column
 * @method ServiceQuery groupByNomServiceAr() Group by the NOM_SERVICE_AR column
 *
 * @method ServiceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ServiceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ServiceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Service findOne(PropelPDO $con = null) Return the first Service matching the query
 * @method Service findOneOrCreate(PropelPDO $con = null) Return the first Service matching the query, or a new Service object populated from the query conditions when no match is found
 *
 * @method Service findOneByIdCommune(int $ID_COMMUNE) Return the first Service filtered by the ID_COMMUNE column
 * @method Service findOneByNomServiceFr(string $NOM_SERVICE_FR) Return the first Service filtered by the NOM_SERVICE_FR column
 * @method Service findOneByEtatService(string $ETAT_SERVICE) Return the first Service filtered by the ETAT_SERVICE column
 * @method Service findOneByNomServiceAr(string $NOM_SERVICE_AR) Return the first Service filtered by the NOM_SERVICE_AR column
 *
 * @method array findById(int $ID) Return Service objects filtered by the ID column
 * @method array findByIdCommune(int $ID_COMMUNE) Return Service objects filtered by the ID_COMMUNE column
 * @method array findByNomServiceFr(string $NOM_SERVICE_FR) Return Service objects filtered by the NOM_SERVICE_FR column
 * @method array findByEtatService(string $ETAT_SERVICE) Return Service objects filtered by the ETAT_SERVICE column
 * @method array findByNomServiceAr(string $NOM_SERVICE_AR) Return Service objects filtered by the NOM_SERVICE_AR column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseServiceQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseServiceQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'Service', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ServiceQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ServiceQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ServiceQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ServiceQuery) {
            return $criteria;
        }
        $query = new ServiceQuery();
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
     * @return   Service|Service[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ServicePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ServicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Service A model object, or null if the key is not found
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
     * @return                 Service A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `ID_COMMUNE`, `NOM_SERVICE_FR`, `ETAT_SERVICE`, `NOM_SERVICE_AR` FROM `service` WHERE `ID` = :p0';
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
            $obj = new Service();
            $obj->hydrate($row);
            ServicePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Service|Service[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Service[]|mixed the list of results, formatted by the current formatter
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
     * @return ServiceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ServicePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ServiceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ServicePeer::ID, $keys, Criteria::IN);
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
     * @return ServiceQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(ServicePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(ServicePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ServicePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the ID_COMMUNE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCommune(1234); // WHERE ID_COMMUNE = 1234
     * $query->filterByIdCommune(array(12, 34)); // WHERE ID_COMMUNE IN (12, 34)
     * $query->filterByIdCommune(array('min' => 12)); // WHERE ID_COMMUNE >= 12
     * $query->filterByIdCommune(array('max' => 12)); // WHERE ID_COMMUNE <= 12
     * </code>
     *
     * @param     mixed $idCommune The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ServiceQuery The current query, for fluid interface
     */
    public function filterByIdCommune($idCommune = null, $comparison = null)
    {
        if (is_array($idCommune)) {
            $useMinMax = false;
            if (isset($idCommune['min'])) {
                $this->addUsingAlias(ServicePeer::ID_COMMUNE, $idCommune['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCommune['max'])) {
                $this->addUsingAlias(ServicePeer::ID_COMMUNE, $idCommune['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ServicePeer::ID_COMMUNE, $idCommune, $comparison);
    }

    /**
     * Filter the query on the NOM_SERVICE_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByNomServiceFr('fooValue');   // WHERE NOM_SERVICE_FR = 'fooValue'
     * $query->filterByNomServiceFr('%fooValue%'); // WHERE NOM_SERVICE_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomServiceFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ServiceQuery The current query, for fluid interface
     */
    public function filterByNomServiceFr($nomServiceFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomServiceFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomServiceFr)) {
                $nomServiceFr = str_replace('*', '%', $nomServiceFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ServicePeer::NOM_SERVICE_FR, $nomServiceFr, $comparison);
    }

    /**
     * Filter the query on the ETAT_SERVICE column
     *
     * Example usage:
     * <code>
     * $query->filterByEtatService('fooValue');   // WHERE ETAT_SERVICE = 'fooValue'
     * $query->filterByEtatService('%fooValue%'); // WHERE ETAT_SERVICE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $etatService The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ServiceQuery The current query, for fluid interface
     */
    public function filterByEtatService($etatService = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($etatService)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $etatService)) {
                $etatService = str_replace('*', '%', $etatService);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ServicePeer::ETAT_SERVICE, $etatService, $comparison);
    }

    /**
     * Filter the query on the NOM_SERVICE_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByNomServiceAr('fooValue');   // WHERE NOM_SERVICE_AR = 'fooValue'
     * $query->filterByNomServiceAr('%fooValue%'); // WHERE NOM_SERVICE_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomServiceAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ServiceQuery The current query, for fluid interface
     */
    public function filterByNomServiceAr($nomServiceAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomServiceAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomServiceAr)) {
                $nomServiceAr = str_replace('*', '%', $nomServiceAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ServicePeer::NOM_SERVICE_AR, $nomServiceAr, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Service $service Object to remove from the list of results
     *
     * @return ServiceQuery The current query, for fluid interface
     */
    public function prune($service = null)
    {
        if ($service) {
            $this->addUsingAlias(ServicePeer::ID, $service->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
