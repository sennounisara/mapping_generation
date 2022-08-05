<?php


/**
 * Base class that represents a query for the 'Numerotation_ref_cons_auto' table.
 *
 * 
 *
 * @method CommonNumerotationRefConsAutoQuery orderByIdAuto($order = Criteria::ASC) Order by the id_auto column
 * @method CommonNumerotationRefConsAutoQuery orderByIdConsAuto($order = Criteria::ASC) Order by the id_cons_auto column
 * @method CommonNumerotationRefConsAutoQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonNumerotationRefConsAutoQuery orderByAnnee($order = Criteria::ASC) Order by the annee column
 * @method CommonNumerotationRefConsAutoQuery orderByServiceId($order = Criteria::ASC) Order by the service_id column
 *
 * @method CommonNumerotationRefConsAutoQuery groupByIdAuto() Group by the id_auto column
 * @method CommonNumerotationRefConsAutoQuery groupByIdConsAuto() Group by the id_cons_auto column
 * @method CommonNumerotationRefConsAutoQuery groupByOrganisme() Group by the organisme column
 * @method CommonNumerotationRefConsAutoQuery groupByAnnee() Group by the annee column
 * @method CommonNumerotationRefConsAutoQuery groupByServiceId() Group by the service_id column
 *
 * @method CommonNumerotationRefConsAutoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonNumerotationRefConsAutoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonNumerotationRefConsAutoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonNumerotationRefConsAuto findOne(PropelPDO $con = null) Return the first CommonNumerotationRefConsAuto matching the query
 * @method CommonNumerotationRefConsAuto findOneOrCreate(PropelPDO $con = null) Return the first CommonNumerotationRefConsAuto matching the query, or a new CommonNumerotationRefConsAuto object populated from the query conditions when no match is found
 *
 * @method CommonNumerotationRefConsAuto findOneByIdConsAuto(int $id_cons_auto) Return the first CommonNumerotationRefConsAuto filtered by the id_cons_auto column
 * @method CommonNumerotationRefConsAuto findOneByOrganisme(string $organisme) Return the first CommonNumerotationRefConsAuto filtered by the organisme column
 * @method CommonNumerotationRefConsAuto findOneByAnnee(int $annee) Return the first CommonNumerotationRefConsAuto filtered by the annee column
 * @method CommonNumerotationRefConsAuto findOneByServiceId(int $service_id) Return the first CommonNumerotationRefConsAuto filtered by the service_id column
 *
 * @method array findByIdAuto(int $id_auto) Return CommonNumerotationRefConsAuto objects filtered by the id_auto column
 * @method array findByIdConsAuto(int $id_cons_auto) Return CommonNumerotationRefConsAuto objects filtered by the id_cons_auto column
 * @method array findByOrganisme(string $organisme) Return CommonNumerotationRefConsAuto objects filtered by the organisme column
 * @method array findByAnnee(int $annee) Return CommonNumerotationRefConsAuto objects filtered by the annee column
 * @method array findByServiceId(int $service_id) Return CommonNumerotationRefConsAuto objects filtered by the service_id column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonNumerotationRefConsAutoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonNumerotationRefConsAutoQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonNumerotationRefConsAuto', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonNumerotationRefConsAutoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonNumerotationRefConsAutoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonNumerotationRefConsAutoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonNumerotationRefConsAutoQuery) {
            return $criteria;
        }
        $query = new CommonNumerotationRefConsAutoQuery();
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
     * @return   CommonNumerotationRefConsAuto|CommonNumerotationRefConsAuto[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonNumerotationRefConsAutoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonNumerotationRefConsAutoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonNumerotationRefConsAuto A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdAuto($key, $con = null)
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
     * @return                 CommonNumerotationRefConsAuto A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_auto`, `id_cons_auto`, `organisme`, `annee`, `service_id` FROM `Numerotation_ref_cons_auto` WHERE `id_auto` = :p0';
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
            $obj = new CommonNumerotationRefConsAuto();
            $obj->hydrate($row);
            CommonNumerotationRefConsAutoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonNumerotationRefConsAuto|CommonNumerotationRefConsAuto[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonNumerotationRefConsAuto[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonNumerotationRefConsAutoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonNumerotationRefConsAutoPeer::ID_AUTO, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonNumerotationRefConsAutoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonNumerotationRefConsAutoPeer::ID_AUTO, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_auto column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAuto(1234); // WHERE id_auto = 1234
     * $query->filterByIdAuto(array(12, 34)); // WHERE id_auto IN (12, 34)
     * $query->filterByIdAuto(array('min' => 12)); // WHERE id_auto >= 12
     * $query->filterByIdAuto(array('max' => 12)); // WHERE id_auto <= 12
     * </code>
     *
     * @param     mixed $idAuto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonNumerotationRefConsAutoQuery The current query, for fluid interface
     */
    public function filterByIdAuto($idAuto = null, $comparison = null)
    {
        if (is_array($idAuto)) {
            $useMinMax = false;
            if (isset($idAuto['min'])) {
                $this->addUsingAlias(CommonNumerotationRefConsAutoPeer::ID_AUTO, $idAuto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAuto['max'])) {
                $this->addUsingAlias(CommonNumerotationRefConsAutoPeer::ID_AUTO, $idAuto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonNumerotationRefConsAutoPeer::ID_AUTO, $idAuto, $comparison);
    }

    /**
     * Filter the query on the id_cons_auto column
     *
     * Example usage:
     * <code>
     * $query->filterByIdConsAuto(1234); // WHERE id_cons_auto = 1234
     * $query->filterByIdConsAuto(array(12, 34)); // WHERE id_cons_auto IN (12, 34)
     * $query->filterByIdConsAuto(array('min' => 12)); // WHERE id_cons_auto >= 12
     * $query->filterByIdConsAuto(array('max' => 12)); // WHERE id_cons_auto <= 12
     * </code>
     *
     * @param     mixed $idConsAuto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonNumerotationRefConsAutoQuery The current query, for fluid interface
     */
    public function filterByIdConsAuto($idConsAuto = null, $comparison = null)
    {
        if (is_array($idConsAuto)) {
            $useMinMax = false;
            if (isset($idConsAuto['min'])) {
                $this->addUsingAlias(CommonNumerotationRefConsAutoPeer::ID_CONS_AUTO, $idConsAuto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idConsAuto['max'])) {
                $this->addUsingAlias(CommonNumerotationRefConsAutoPeer::ID_CONS_AUTO, $idConsAuto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonNumerotationRefConsAutoPeer::ID_CONS_AUTO, $idConsAuto, $comparison);
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
     * @return CommonNumerotationRefConsAutoQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonNumerotationRefConsAutoPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the annee column
     *
     * Example usage:
     * <code>
     * $query->filterByAnnee(1234); // WHERE annee = 1234
     * $query->filterByAnnee(array(12, 34)); // WHERE annee IN (12, 34)
     * $query->filterByAnnee(array('min' => 12)); // WHERE annee >= 12
     * $query->filterByAnnee(array('max' => 12)); // WHERE annee <= 12
     * </code>
     *
     * @param     mixed $annee The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonNumerotationRefConsAutoQuery The current query, for fluid interface
     */
    public function filterByAnnee($annee = null, $comparison = null)
    {
        if (is_array($annee)) {
            $useMinMax = false;
            if (isset($annee['min'])) {
                $this->addUsingAlias(CommonNumerotationRefConsAutoPeer::ANNEE, $annee['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($annee['max'])) {
                $this->addUsingAlias(CommonNumerotationRefConsAutoPeer::ANNEE, $annee['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonNumerotationRefConsAutoPeer::ANNEE, $annee, $comparison);
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
     * @return CommonNumerotationRefConsAutoQuery The current query, for fluid interface
     */
    public function filterByServiceId($serviceId = null, $comparison = null)
    {
        if (is_array($serviceId)) {
            $useMinMax = false;
            if (isset($serviceId['min'])) {
                $this->addUsingAlias(CommonNumerotationRefConsAutoPeer::SERVICE_ID, $serviceId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($serviceId['max'])) {
                $this->addUsingAlias(CommonNumerotationRefConsAutoPeer::SERVICE_ID, $serviceId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonNumerotationRefConsAutoPeer::SERVICE_ID, $serviceId, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonNumerotationRefConsAuto $commonNumerotationRefConsAuto Object to remove from the list of results
     *
     * @return CommonNumerotationRefConsAutoQuery The current query, for fluid interface
     */
    public function prune($commonNumerotationRefConsAuto = null)
    {
        if ($commonNumerotationRefConsAuto) {
            $this->addUsingAlias(CommonNumerotationRefConsAutoPeer::ID_AUTO, $commonNumerotationRefConsAuto->getIdAuto(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
