<?php


/**
 * Base class that represents a query for the 'alerte_metier' table.
 *
 * 
 *
 * @method CommonAlerteMetierQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonAlerteMetierQuery orderByIdAlerte($order = Criteria::ASC) Order by the id_alerte column
 * @method CommonAlerteMetierQuery orderByDateCreation($order = Criteria::ASC) Order by the date_creation column
 * @method CommonAlerteMetierQuery orderByDateCloture($order = Criteria::ASC) Order by the date_cloture column
 * @method CommonAlerteMetierQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonAlerteMetierQuery orderByReferenceCons($order = Criteria::ASC) Order by the reference_cons column
 * @method CommonAlerteMetierQuery orderByLot($order = Criteria::ASC) Order by the lot column
 * @method CommonAlerteMetierQuery orderByServiceId($order = Criteria::ASC) Order by the service_id column
 * @method CommonAlerteMetierQuery orderByCloturee($order = Criteria::ASC) Order by the cloturee column
 * @method CommonAlerteMetierQuery orderByMessage($order = Criteria::ASC) Order by the message column
 *
 * @method CommonAlerteMetierQuery groupById() Group by the id column
 * @method CommonAlerteMetierQuery groupByIdAlerte() Group by the id_alerte column
 * @method CommonAlerteMetierQuery groupByDateCreation() Group by the date_creation column
 * @method CommonAlerteMetierQuery groupByDateCloture() Group by the date_cloture column
 * @method CommonAlerteMetierQuery groupByOrganisme() Group by the organisme column
 * @method CommonAlerteMetierQuery groupByReferenceCons() Group by the reference_cons column
 * @method CommonAlerteMetierQuery groupByLot() Group by the lot column
 * @method CommonAlerteMetierQuery groupByServiceId() Group by the service_id column
 * @method CommonAlerteMetierQuery groupByCloturee() Group by the cloturee column
 * @method CommonAlerteMetierQuery groupByMessage() Group by the message column
 *
 * @method CommonAlerteMetierQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonAlerteMetierQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonAlerteMetierQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonAlerteMetier findOne(PropelPDO $con = null) Return the first CommonAlerteMetier matching the query
 * @method CommonAlerteMetier findOneOrCreate(PropelPDO $con = null) Return the first CommonAlerteMetier matching the query, or a new CommonAlerteMetier object populated from the query conditions when no match is found
 *
 * @method CommonAlerteMetier findOneByIdAlerte(int $id_alerte) Return the first CommonAlerteMetier filtered by the id_alerte column
 * @method CommonAlerteMetier findOneByDateCreation(string $date_creation) Return the first CommonAlerteMetier filtered by the date_creation column
 * @method CommonAlerteMetier findOneByDateCloture(string $date_cloture) Return the first CommonAlerteMetier filtered by the date_cloture column
 * @method CommonAlerteMetier findOneByOrganisme(string $organisme) Return the first CommonAlerteMetier filtered by the organisme column
 * @method CommonAlerteMetier findOneByReferenceCons(int $reference_cons) Return the first CommonAlerteMetier filtered by the reference_cons column
 * @method CommonAlerteMetier findOneByLot(int $lot) Return the first CommonAlerteMetier filtered by the lot column
 * @method CommonAlerteMetier findOneByServiceId(int $service_id) Return the first CommonAlerteMetier filtered by the service_id column
 * @method CommonAlerteMetier findOneByCloturee(string $cloturee) Return the first CommonAlerteMetier filtered by the cloturee column
 * @method CommonAlerteMetier findOneByMessage(string $message) Return the first CommonAlerteMetier filtered by the message column
 *
 * @method array findById(int $id) Return CommonAlerteMetier objects filtered by the id column
 * @method array findByIdAlerte(int $id_alerte) Return CommonAlerteMetier objects filtered by the id_alerte column
 * @method array findByDateCreation(string $date_creation) Return CommonAlerteMetier objects filtered by the date_creation column
 * @method array findByDateCloture(string $date_cloture) Return CommonAlerteMetier objects filtered by the date_cloture column
 * @method array findByOrganisme(string $organisme) Return CommonAlerteMetier objects filtered by the organisme column
 * @method array findByReferenceCons(int $reference_cons) Return CommonAlerteMetier objects filtered by the reference_cons column
 * @method array findByLot(int $lot) Return CommonAlerteMetier objects filtered by the lot column
 * @method array findByServiceId(int $service_id) Return CommonAlerteMetier objects filtered by the service_id column
 * @method array findByCloturee(string $cloturee) Return CommonAlerteMetier objects filtered by the cloturee column
 * @method array findByMessage(string $message) Return CommonAlerteMetier objects filtered by the message column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonAlerteMetierQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonAlerteMetierQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonAlerteMetier', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonAlerteMetierQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonAlerteMetierQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonAlerteMetierQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonAlerteMetierQuery) {
            return $criteria;
        }
        $query = new CommonAlerteMetierQuery();
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
     * @return   CommonAlerteMetier|CommonAlerteMetier[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonAlerteMetierPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonAlerteMetierPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonAlerteMetier A model object, or null if the key is not found
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
     * @return                 CommonAlerteMetier A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_alerte`, `date_creation`, `date_cloture`, `organisme`, `reference_cons`, `lot`, `service_id`, `cloturee`, `message` FROM `alerte_metier` WHERE `id` = :p0';
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
            $obj = new CommonAlerteMetier();
            $obj->hydrate($row);
            CommonAlerteMetierPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonAlerteMetier|CommonAlerteMetier[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonAlerteMetier[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonAlerteMetierQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonAlerteMetierPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonAlerteMetierQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonAlerteMetierPeer::ID, $keys, Criteria::IN);
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
     * @return CommonAlerteMetierQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonAlerteMetierPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonAlerteMetierPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAlerteMetierPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_alerte column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAlerte(1234); // WHERE id_alerte = 1234
     * $query->filterByIdAlerte(array(12, 34)); // WHERE id_alerte IN (12, 34)
     * $query->filterByIdAlerte(array('min' => 12)); // WHERE id_alerte >= 12
     * $query->filterByIdAlerte(array('max' => 12)); // WHERE id_alerte <= 12
     * </code>
     *
     * @param     mixed $idAlerte The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAlerteMetierQuery The current query, for fluid interface
     */
    public function filterByIdAlerte($idAlerte = null, $comparison = null)
    {
        if (is_array($idAlerte)) {
            $useMinMax = false;
            if (isset($idAlerte['min'])) {
                $this->addUsingAlias(CommonAlerteMetierPeer::ID_ALERTE, $idAlerte['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAlerte['max'])) {
                $this->addUsingAlias(CommonAlerteMetierPeer::ID_ALERTE, $idAlerte['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAlerteMetierPeer::ID_ALERTE, $idAlerte, $comparison);
    }

    /**
     * Filter the query on the date_creation column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCreation('2011-03-14'); // WHERE date_creation = '2011-03-14'
     * $query->filterByDateCreation('now'); // WHERE date_creation = '2011-03-14'
     * $query->filterByDateCreation(array('max' => 'yesterday')); // WHERE date_creation > '2011-03-13'
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
     * @return CommonAlerteMetierQuery The current query, for fluid interface
     */
    public function filterByDateCreation($dateCreation = null, $comparison = null)
    {
        if (is_array($dateCreation)) {
            $useMinMax = false;
            if (isset($dateCreation['min'])) {
                $this->addUsingAlias(CommonAlerteMetierPeer::DATE_CREATION, $dateCreation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreation['max'])) {
                $this->addUsingAlias(CommonAlerteMetierPeer::DATE_CREATION, $dateCreation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAlerteMetierPeer::DATE_CREATION, $dateCreation, $comparison);
    }

    /**
     * Filter the query on the date_cloture column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCloture('2011-03-14'); // WHERE date_cloture = '2011-03-14'
     * $query->filterByDateCloture('now'); // WHERE date_cloture = '2011-03-14'
     * $query->filterByDateCloture(array('max' => 'yesterday')); // WHERE date_cloture > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateCloture The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAlerteMetierQuery The current query, for fluid interface
     */
    public function filterByDateCloture($dateCloture = null, $comparison = null)
    {
        if (is_array($dateCloture)) {
            $useMinMax = false;
            if (isset($dateCloture['min'])) {
                $this->addUsingAlias(CommonAlerteMetierPeer::DATE_CLOTURE, $dateCloture['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCloture['max'])) {
                $this->addUsingAlias(CommonAlerteMetierPeer::DATE_CLOTURE, $dateCloture['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAlerteMetierPeer::DATE_CLOTURE, $dateCloture, $comparison);
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
     * @return CommonAlerteMetierQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonAlerteMetierPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the reference_cons column
     *
     * Example usage:
     * <code>
     * $query->filterByReferenceCons(1234); // WHERE reference_cons = 1234
     * $query->filterByReferenceCons(array(12, 34)); // WHERE reference_cons IN (12, 34)
     * $query->filterByReferenceCons(array('min' => 12)); // WHERE reference_cons >= 12
     * $query->filterByReferenceCons(array('max' => 12)); // WHERE reference_cons <= 12
     * </code>
     *
     * @param     mixed $referenceCons The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAlerteMetierQuery The current query, for fluid interface
     */
    public function filterByReferenceCons($referenceCons = null, $comparison = null)
    {
        if (is_array($referenceCons)) {
            $useMinMax = false;
            if (isset($referenceCons['min'])) {
                $this->addUsingAlias(CommonAlerteMetierPeer::REFERENCE_CONS, $referenceCons['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($referenceCons['max'])) {
                $this->addUsingAlias(CommonAlerteMetierPeer::REFERENCE_CONS, $referenceCons['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAlerteMetierPeer::REFERENCE_CONS, $referenceCons, $comparison);
    }

    /**
     * Filter the query on the lot column
     *
     * Example usage:
     * <code>
     * $query->filterByLot(1234); // WHERE lot = 1234
     * $query->filterByLot(array(12, 34)); // WHERE lot IN (12, 34)
     * $query->filterByLot(array('min' => 12)); // WHERE lot >= 12
     * $query->filterByLot(array('max' => 12)); // WHERE lot <= 12
     * </code>
     *
     * @param     mixed $lot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAlerteMetierQuery The current query, for fluid interface
     */
    public function filterByLot($lot = null, $comparison = null)
    {
        if (is_array($lot)) {
            $useMinMax = false;
            if (isset($lot['min'])) {
                $this->addUsingAlias(CommonAlerteMetierPeer::LOT, $lot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lot['max'])) {
                $this->addUsingAlias(CommonAlerteMetierPeer::LOT, $lot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAlerteMetierPeer::LOT, $lot, $comparison);
    }

    /**
     * Filter the query on the service_id column
     *
     * Example usage:
     * <code>
     * $query->filterByServiceId(1234); // WHERE service_id = 1234
     * $query->filterByServiceId(array(12, 34)); // WHERE service_id IN (12, 34)
     * $query->filterByServiceId(array('min' => 12)); // WHERE service_id >= 12
     * $query->filterByServiceId(array('max' => 12)); // WHERE service_id <= 12
     * </code>
     *
     * @param     mixed $serviceId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAlerteMetierQuery The current query, for fluid interface
     */
    public function filterByServiceId($serviceId = null, $comparison = null)
    {
        if (is_array($serviceId)) {
            $useMinMax = false;
            if (isset($serviceId['min'])) {
                $this->addUsingAlias(CommonAlerteMetierPeer::SERVICE_ID, $serviceId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($serviceId['max'])) {
                $this->addUsingAlias(CommonAlerteMetierPeer::SERVICE_ID, $serviceId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAlerteMetierPeer::SERVICE_ID, $serviceId, $comparison);
    }

    /**
     * Filter the query on the cloturee column
     *
     * Example usage:
     * <code>
     * $query->filterByCloturee('fooValue');   // WHERE cloturee = 'fooValue'
     * $query->filterByCloturee('%fooValue%'); // WHERE cloturee LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cloturee The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAlerteMetierQuery The current query, for fluid interface
     */
    public function filterByCloturee($cloturee = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cloturee)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cloturee)) {
                $cloturee = str_replace('*', '%', $cloturee);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAlerteMetierPeer::CLOTUREE, $cloturee, $comparison);
    }

    /**
     * Filter the query on the message column
     *
     * Example usage:
     * <code>
     * $query->filterByMessage('fooValue');   // WHERE message = 'fooValue'
     * $query->filterByMessage('%fooValue%'); // WHERE message LIKE '%fooValue%'
     * </code>
     *
     * @param     string $message The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAlerteMetierQuery The current query, for fluid interface
     */
    public function filterByMessage($message = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($message)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $message)) {
                $message = str_replace('*', '%', $message);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAlerteMetierPeer::MESSAGE, $message, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonAlerteMetier $commonAlerteMetier Object to remove from the list of results
     *
     * @return CommonAlerteMetierQuery The current query, for fluid interface
     */
    public function prune($commonAlerteMetier = null)
    {
        if ($commonAlerteMetier) {
            $this->addUsingAlias(CommonAlerteMetierPeer::ID, $commonAlerteMetier->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
