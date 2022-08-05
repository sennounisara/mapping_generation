<?php


/**
 * Base class that represents a query for the 'pf_province' table.
 *
 * 
 *
 * @method PfProvinceQuery orderByIdProvince($order = Criteria::ASC) Order by the ID_PROVINCE column
 * @method PfProvinceQuery orderByIdRegion($order = Criteria::ASC) Order by the ID_REGION column
 * @method PfProvinceQuery orderByNomProvinceFr($order = Criteria::ASC) Order by the NOM_PROVINCE_FR column
 * @method PfProvinceQuery orderByNomProvinceAr($order = Criteria::ASC) Order by the NOM_PROVINCE_AR column
 *
 * @method PfProvinceQuery groupByIdProvince() Group by the ID_PROVINCE column
 * @method PfProvinceQuery groupByIdRegion() Group by the ID_REGION column
 * @method PfProvinceQuery groupByNomProvinceFr() Group by the NOM_PROVINCE_FR column
 * @method PfProvinceQuery groupByNomProvinceAr() Group by the NOM_PROVINCE_AR column
 *
 * @method PfProvinceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PfProvinceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PfProvinceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PfProvince findOne(PropelPDO $con = null) Return the first PfProvince matching the query
 * @method PfProvince findOneOrCreate(PropelPDO $con = null) Return the first PfProvince matching the query, or a new PfProvince object populated from the query conditions when no match is found
 *
 * @method PfProvince findOneByIdRegion(int $ID_REGION) Return the first PfProvince filtered by the ID_REGION column
 * @method PfProvince findOneByNomProvinceFr(string $NOM_PROVINCE_FR) Return the first PfProvince filtered by the NOM_PROVINCE_FR column
 * @method PfProvince findOneByNomProvinceAr(string $NOM_PROVINCE_AR) Return the first PfProvince filtered by the NOM_PROVINCE_AR column
 *
 * @method array findByIdProvince(int $ID_PROVINCE) Return PfProvince objects filtered by the ID_PROVINCE column
 * @method array findByIdRegion(int $ID_REGION) Return PfProvince objects filtered by the ID_REGION column
 * @method array findByNomProvinceFr(string $NOM_PROVINCE_FR) Return PfProvince objects filtered by the NOM_PROVINCE_FR column
 * @method array findByNomProvinceAr(string $NOM_PROVINCE_AR) Return PfProvince objects filtered by the NOM_PROVINCE_AR column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BasePfProvinceQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePfProvinceQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'PfProvince', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PfProvinceQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PfProvinceQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PfProvinceQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PfProvinceQuery) {
            return $criteria;
        }
        $query = new PfProvinceQuery();
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
     * @return   PfProvince|PfProvince[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PfProvincePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PfProvincePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 PfProvince A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdProvince($key, $con = null)
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
     * @return                 PfProvince A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_PROVINCE`, `ID_REGION`, `NOM_PROVINCE_FR`, `NOM_PROVINCE_AR` FROM `pf_province` WHERE `ID_PROVINCE` = :p0';
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
            $obj = new PfProvince();
            $obj->hydrate($row);
            PfProvincePeer::addInstanceToPool($obj, (string) $key);
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
     * @return PfProvince|PfProvince[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|PfProvince[]|mixed the list of results, formatted by the current formatter
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
     * @return PfProvinceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PfProvincePeer::ID_PROVINCE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PfProvinceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PfProvincePeer::ID_PROVINCE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID_PROVINCE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdProvince(1234); // WHERE ID_PROVINCE = 1234
     * $query->filterByIdProvince(array(12, 34)); // WHERE ID_PROVINCE IN (12, 34)
     * $query->filterByIdProvince(array('min' => 12)); // WHERE ID_PROVINCE >= 12
     * $query->filterByIdProvince(array('max' => 12)); // WHERE ID_PROVINCE <= 12
     * </code>
     *
     * @param     mixed $idProvince The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfProvinceQuery The current query, for fluid interface
     */
    public function filterByIdProvince($idProvince = null, $comparison = null)
    {
        if (is_array($idProvince)) {
            $useMinMax = false;
            if (isset($idProvince['min'])) {
                $this->addUsingAlias(PfProvincePeer::ID_PROVINCE, $idProvince['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idProvince['max'])) {
                $this->addUsingAlias(PfProvincePeer::ID_PROVINCE, $idProvince['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfProvincePeer::ID_PROVINCE, $idProvince, $comparison);
    }

    /**
     * Filter the query on the ID_REGION column
     *
     * Example usage:
     * <code>
     * $query->filterByIdRegion(1234); // WHERE ID_REGION = 1234
     * $query->filterByIdRegion(array(12, 34)); // WHERE ID_REGION IN (12, 34)
     * $query->filterByIdRegion(array('min' => 12)); // WHERE ID_REGION >= 12
     * $query->filterByIdRegion(array('max' => 12)); // WHERE ID_REGION <= 12
     * </code>
     *
     * @param     mixed $idRegion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfProvinceQuery The current query, for fluid interface
     */
    public function filterByIdRegion($idRegion = null, $comparison = null)
    {
        if (is_array($idRegion)) {
            $useMinMax = false;
            if (isset($idRegion['min'])) {
                $this->addUsingAlias(PfProvincePeer::ID_REGION, $idRegion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idRegion['max'])) {
                $this->addUsingAlias(PfProvincePeer::ID_REGION, $idRegion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfProvincePeer::ID_REGION, $idRegion, $comparison);
    }

    /**
     * Filter the query on the NOM_PROVINCE_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByNomProvinceFr('fooValue');   // WHERE NOM_PROVINCE_FR = 'fooValue'
     * $query->filterByNomProvinceFr('%fooValue%'); // WHERE NOM_PROVINCE_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomProvinceFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfProvinceQuery The current query, for fluid interface
     */
    public function filterByNomProvinceFr($nomProvinceFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomProvinceFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomProvinceFr)) {
                $nomProvinceFr = str_replace('*', '%', $nomProvinceFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfProvincePeer::NOM_PROVINCE_FR, $nomProvinceFr, $comparison);
    }

    /**
     * Filter the query on the NOM_PROVINCE_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByNomProvinceAr('fooValue');   // WHERE NOM_PROVINCE_AR = 'fooValue'
     * $query->filterByNomProvinceAr('%fooValue%'); // WHERE NOM_PROVINCE_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomProvinceAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfProvinceQuery The current query, for fluid interface
     */
    public function filterByNomProvinceAr($nomProvinceAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomProvinceAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomProvinceAr)) {
                $nomProvinceAr = str_replace('*', '%', $nomProvinceAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfProvincePeer::NOM_PROVINCE_AR, $nomProvinceAr, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   PfProvince $pfProvince Object to remove from the list of results
     *
     * @return PfProvinceQuery The current query, for fluid interface
     */
    public function prune($pfProvince = null)
    {
        if ($pfProvince) {
            $this->addUsingAlias(PfProvincePeer::ID_PROVINCE, $pfProvince->getIdProvince(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
