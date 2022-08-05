<?php


/**
 * Base class that represents a query for the 'service_associe' table.
 *
 * 
 *
 * @method CommonServiceAssocieQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonServiceAssocieQuery orderByIdServiceGerant($order = Criteria::ASC) Order by the id_service_gerant column
 * @method CommonServiceAssocieQuery orderByIdServiceGere($order = Criteria::ASC) Order by the id_service_gere column
 * @method CommonServiceAssocieQuery orderByOrganismeGerant($order = Criteria::ASC) Order by the organisme_gerant column
 * @method CommonServiceAssocieQuery orderByOrganismeGere($order = Criteria::ASC) Order by the organisme_gere column
 * @method CommonServiceAssocieQuery orderByActif($order = Criteria::ASC) Order by the actif column
 *
 * @method CommonServiceAssocieQuery groupById() Group by the id column
 * @method CommonServiceAssocieQuery groupByIdServiceGerant() Group by the id_service_gerant column
 * @method CommonServiceAssocieQuery groupByIdServiceGere() Group by the id_service_gere column
 * @method CommonServiceAssocieQuery groupByOrganismeGerant() Group by the organisme_gerant column
 * @method CommonServiceAssocieQuery groupByOrganismeGere() Group by the organisme_gere column
 * @method CommonServiceAssocieQuery groupByActif() Group by the actif column
 *
 * @method CommonServiceAssocieQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonServiceAssocieQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonServiceAssocieQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonServiceAssocie findOne(PropelPDO $con = null) Return the first CommonServiceAssocie matching the query
 * @method CommonServiceAssocie findOneOrCreate(PropelPDO $con = null) Return the first CommonServiceAssocie matching the query, or a new CommonServiceAssocie object populated from the query conditions when no match is found
 *
 * @method CommonServiceAssocie findOneByIdServiceGerant(int $id_service_gerant) Return the first CommonServiceAssocie filtered by the id_service_gerant column
 * @method CommonServiceAssocie findOneByIdServiceGere(int $id_service_gere) Return the first CommonServiceAssocie filtered by the id_service_gere column
 * @method CommonServiceAssocie findOneByOrganismeGerant(string $organisme_gerant) Return the first CommonServiceAssocie filtered by the organisme_gerant column
 * @method CommonServiceAssocie findOneByOrganismeGere(string $organisme_gere) Return the first CommonServiceAssocie filtered by the organisme_gere column
 * @method CommonServiceAssocie findOneByActif(int $actif) Return the first CommonServiceAssocie filtered by the actif column
 *
 * @method array findById(int $id) Return CommonServiceAssocie objects filtered by the id column
 * @method array findByIdServiceGerant(int $id_service_gerant) Return CommonServiceAssocie objects filtered by the id_service_gerant column
 * @method array findByIdServiceGere(int $id_service_gere) Return CommonServiceAssocie objects filtered by the id_service_gere column
 * @method array findByOrganismeGerant(string $organisme_gerant) Return CommonServiceAssocie objects filtered by the organisme_gerant column
 * @method array findByOrganismeGere(string $organisme_gere) Return CommonServiceAssocie objects filtered by the organisme_gere column
 * @method array findByActif(int $actif) Return CommonServiceAssocie objects filtered by the actif column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonServiceAssocieQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonServiceAssocieQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonServiceAssocie', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonServiceAssocieQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonServiceAssocieQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonServiceAssocieQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonServiceAssocieQuery) {
            return $criteria;
        }
        $query = new CommonServiceAssocieQuery();
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
     * @return   CommonServiceAssocie|CommonServiceAssocie[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonServiceAssociePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonServiceAssociePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonServiceAssocie A model object, or null if the key is not found
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
     * @return                 CommonServiceAssocie A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_service_gerant`, `id_service_gere`, `organisme_gerant`, `organisme_gere`, `actif` FROM `service_associe` WHERE `id` = :p0';
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
            $obj = new CommonServiceAssocie();
            $obj->hydrate($row);
            CommonServiceAssociePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonServiceAssocie|CommonServiceAssocie[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonServiceAssocie[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonServiceAssocieQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonServiceAssociePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonServiceAssocieQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonServiceAssociePeer::ID, $keys, Criteria::IN);
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
     * @return CommonServiceAssocieQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonServiceAssociePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonServiceAssociePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonServiceAssociePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_service_gerant column
     *
     * Example usage:
     * <code>
     * $query->filterByIdServiceGerant(1234); // WHERE id_service_gerant = 1234
     * $query->filterByIdServiceGerant(array(12, 34)); // WHERE id_service_gerant IN (12, 34)
     * $query->filterByIdServiceGerant(array('min' => 12)); // WHERE id_service_gerant >= 12
     * $query->filterByIdServiceGerant(array('max' => 12)); // WHERE id_service_gerant <= 12
     * </code>
     *
     * @param     mixed $idServiceGerant The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceAssocieQuery The current query, for fluid interface
     */
    public function filterByIdServiceGerant($idServiceGerant = null, $comparison = null)
    {
        if (is_array($idServiceGerant)) {
            $useMinMax = false;
            if (isset($idServiceGerant['min'])) {
                $this->addUsingAlias(CommonServiceAssociePeer::ID_SERVICE_GERANT, $idServiceGerant['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idServiceGerant['max'])) {
                $this->addUsingAlias(CommonServiceAssociePeer::ID_SERVICE_GERANT, $idServiceGerant['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonServiceAssociePeer::ID_SERVICE_GERANT, $idServiceGerant, $comparison);
    }

    /**
     * Filter the query on the id_service_gere column
     *
     * Example usage:
     * <code>
     * $query->filterByIdServiceGere(1234); // WHERE id_service_gere = 1234
     * $query->filterByIdServiceGere(array(12, 34)); // WHERE id_service_gere IN (12, 34)
     * $query->filterByIdServiceGere(array('min' => 12)); // WHERE id_service_gere >= 12
     * $query->filterByIdServiceGere(array('max' => 12)); // WHERE id_service_gere <= 12
     * </code>
     *
     * @param     mixed $idServiceGere The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceAssocieQuery The current query, for fluid interface
     */
    public function filterByIdServiceGere($idServiceGere = null, $comparison = null)
    {
        if (is_array($idServiceGere)) {
            $useMinMax = false;
            if (isset($idServiceGere['min'])) {
                $this->addUsingAlias(CommonServiceAssociePeer::ID_SERVICE_GERE, $idServiceGere['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idServiceGere['max'])) {
                $this->addUsingAlias(CommonServiceAssociePeer::ID_SERVICE_GERE, $idServiceGere['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonServiceAssociePeer::ID_SERVICE_GERE, $idServiceGere, $comparison);
    }

    /**
     * Filter the query on the organisme_gerant column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganismeGerant('fooValue');   // WHERE organisme_gerant = 'fooValue'
     * $query->filterByOrganismeGerant('%fooValue%'); // WHERE organisme_gerant LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organismeGerant The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceAssocieQuery The current query, for fluid interface
     */
    public function filterByOrganismeGerant($organismeGerant = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($organismeGerant)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $organismeGerant)) {
                $organismeGerant = str_replace('*', '%', $organismeGerant);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServiceAssociePeer::ORGANISME_GERANT, $organismeGerant, $comparison);
    }

    /**
     * Filter the query on the organisme_gere column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganismeGere('fooValue');   // WHERE organisme_gere = 'fooValue'
     * $query->filterByOrganismeGere('%fooValue%'); // WHERE organisme_gere LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organismeGere The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceAssocieQuery The current query, for fluid interface
     */
    public function filterByOrganismeGere($organismeGere = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($organismeGere)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $organismeGere)) {
                $organismeGere = str_replace('*', '%', $organismeGere);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonServiceAssociePeer::ORGANISME_GERE, $organismeGere, $comparison);
    }

    /**
     * Filter the query on the actif column
     *
     * Example usage:
     * <code>
     * $query->filterByActif(1234); // WHERE actif = 1234
     * $query->filterByActif(array(12, 34)); // WHERE actif IN (12, 34)
     * $query->filterByActif(array('min' => 12)); // WHERE actif >= 12
     * $query->filterByActif(array('max' => 12)); // WHERE actif <= 12
     * </code>
     *
     * @param     mixed $actif The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonServiceAssocieQuery The current query, for fluid interface
     */
    public function filterByActif($actif = null, $comparison = null)
    {
        if (is_array($actif)) {
            $useMinMax = false;
            if (isset($actif['min'])) {
                $this->addUsingAlias(CommonServiceAssociePeer::ACTIF, $actif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($actif['max'])) {
                $this->addUsingAlias(CommonServiceAssociePeer::ACTIF, $actif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonServiceAssociePeer::ACTIF, $actif, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonServiceAssocie $commonServiceAssocie Object to remove from the list of results
     *
     * @return CommonServiceAssocieQuery The current query, for fluid interface
     */
    public function prune($commonServiceAssocie = null)
    {
        if ($commonServiceAssocie) {
            $this->addUsingAlias(CommonServiceAssociePeer::ID, $commonServiceAssocie->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
