<?php


/**
 * Base class that represents a query for the 'Mandataire_service' table.
 *
 * 
 *
 * @method CommonMandataireServiceQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonMandataireServiceQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonMandataireServiceQuery orderByServiceId($order = Criteria::ASC) Order by the service_id column
 * @method CommonMandataireServiceQuery orderByMandataire($order = Criteria::ASC) Order by the mandataire column
 * @method CommonMandataireServiceQuery orderByCommentaire($order = Criteria::ASC) Order by the commentaire column
 *
 * @method CommonMandataireServiceQuery groupById() Group by the id column
 * @method CommonMandataireServiceQuery groupByOrganisme() Group by the organisme column
 * @method CommonMandataireServiceQuery groupByServiceId() Group by the service_id column
 * @method CommonMandataireServiceQuery groupByMandataire() Group by the mandataire column
 * @method CommonMandataireServiceQuery groupByCommentaire() Group by the commentaire column
 *
 * @method CommonMandataireServiceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonMandataireServiceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonMandataireServiceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonMandataireService findOne(PropelPDO $con = null) Return the first CommonMandataireService matching the query
 * @method CommonMandataireService findOneOrCreate(PropelPDO $con = null) Return the first CommonMandataireService matching the query, or a new CommonMandataireService object populated from the query conditions when no match is found
 *
 * @method CommonMandataireService findOneByOrganisme(string $organisme) Return the first CommonMandataireService filtered by the organisme column
 * @method CommonMandataireService findOneByServiceId(int $service_id) Return the first CommonMandataireService filtered by the service_id column
 * @method CommonMandataireService findOneByMandataire(int $mandataire) Return the first CommonMandataireService filtered by the mandataire column
 * @method CommonMandataireService findOneByCommentaire(string $commentaire) Return the first CommonMandataireService filtered by the commentaire column
 *
 * @method array findById(int $id) Return CommonMandataireService objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonMandataireService objects filtered by the organisme column
 * @method array findByServiceId(int $service_id) Return CommonMandataireService objects filtered by the service_id column
 * @method array findByMandataire(int $mandataire) Return CommonMandataireService objects filtered by the mandataire column
 * @method array findByCommentaire(string $commentaire) Return CommonMandataireService objects filtered by the commentaire column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonMandataireServiceQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonMandataireServiceQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonMandataireService', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonMandataireServiceQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonMandataireServiceQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonMandataireServiceQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonMandataireServiceQuery) {
            return $criteria;
        }
        $query = new CommonMandataireServiceQuery();
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
     * @return   CommonMandataireService|CommonMandataireService[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonMandataireServicePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonMandataireServicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonMandataireService A model object, or null if the key is not found
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
     * @return                 CommonMandataireService A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `service_id`, `mandataire`, `commentaire` FROM `Mandataire_service` WHERE `id` = :p0';
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
            $obj = new CommonMandataireService();
            $obj->hydrate($row);
            CommonMandataireServicePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonMandataireService|CommonMandataireService[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonMandataireService[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonMandataireServiceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonMandataireServicePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonMandataireServiceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonMandataireServicePeer::ID, $keys, Criteria::IN);
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
     * @return CommonMandataireServiceQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonMandataireServicePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonMandataireServicePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonMandataireServicePeer::ID, $id, $comparison);
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
     * @return CommonMandataireServiceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonMandataireServicePeer::ORGANISME, $organisme, $comparison);
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
     * @return CommonMandataireServiceQuery The current query, for fluid interface
     */
    public function filterByServiceId($serviceId = null, $comparison = null)
    {
        if (is_array($serviceId)) {
            $useMinMax = false;
            if (isset($serviceId['min'])) {
                $this->addUsingAlias(CommonMandataireServicePeer::SERVICE_ID, $serviceId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($serviceId['max'])) {
                $this->addUsingAlias(CommonMandataireServicePeer::SERVICE_ID, $serviceId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonMandataireServicePeer::SERVICE_ID, $serviceId, $comparison);
    }

    /**
     * Filter the query on the mandataire column
     *
     * Example usage:
     * <code>
     * $query->filterByMandataire(1234); // WHERE mandataire = 1234
     * $query->filterByMandataire(array(12, 34)); // WHERE mandataire IN (12, 34)
     * $query->filterByMandataire(array('min' => 12)); // WHERE mandataire >= 12
     * $query->filterByMandataire(array('max' => 12)); // WHERE mandataire <= 12
     * </code>
     *
     * @param     mixed $mandataire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMandataireServiceQuery The current query, for fluid interface
     */
    public function filterByMandataire($mandataire = null, $comparison = null)
    {
        if (is_array($mandataire)) {
            $useMinMax = false;
            if (isset($mandataire['min'])) {
                $this->addUsingAlias(CommonMandataireServicePeer::MANDATAIRE, $mandataire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($mandataire['max'])) {
                $this->addUsingAlias(CommonMandataireServicePeer::MANDATAIRE, $mandataire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonMandataireServicePeer::MANDATAIRE, $mandataire, $comparison);
    }

    /**
     * Filter the query on the commentaire column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentaire('fooValue');   // WHERE commentaire = 'fooValue'
     * $query->filterByCommentaire('%fooValue%'); // WHERE commentaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commentaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMandataireServiceQuery The current query, for fluid interface
     */
    public function filterByCommentaire($commentaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commentaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commentaire)) {
                $commentaire = str_replace('*', '%', $commentaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonMandataireServicePeer::COMMENTAIRE, $commentaire, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonMandataireService $commonMandataireService Object to remove from the list of results
     *
     * @return CommonMandataireServiceQuery The current query, for fluid interface
     */
    public function prune($commonMandataireService = null)
    {
        if ($commonMandataireService) {
            $this->addUsingAlias(CommonMandataireServicePeer::ID, $commonMandataireService->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
