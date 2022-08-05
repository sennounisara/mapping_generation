<?php


/**
 * Base class that represents a query for the 'province' table.
 *
 * 
 *
 * @method ProvinceQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method ProvinceQuery orderByIdRegion($order = Criteria::ASC) Order by the ID_REGION column
 * @method ProvinceQuery orderByNomProvinceFr($order = Criteria::ASC) Order by the NOM_PROVINCE_FR column
 * @method ProvinceQuery orderByNomProvinceAr($order = Criteria::ASC) Order by the NOM_PROVINCE_AR column
 * @method ProvinceQuery orderByIdEntite($order = Criteria::ASC) Order by the ID_ENTITE column
 * @method ProvinceQuery orderByIdExterne($order = Criteria::ASC) Order by the ID_EXTERNE column
 *
 * @method ProvinceQuery groupById() Group by the ID column
 * @method ProvinceQuery groupByIdRegion() Group by the ID_REGION column
 * @method ProvinceQuery groupByNomProvinceFr() Group by the NOM_PROVINCE_FR column
 * @method ProvinceQuery groupByNomProvinceAr() Group by the NOM_PROVINCE_AR column
 * @method ProvinceQuery groupByIdEntite() Group by the ID_ENTITE column
 * @method ProvinceQuery groupByIdExterne() Group by the ID_EXTERNE column
 *
 * @method ProvinceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ProvinceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ProvinceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Province findOne(PropelPDO $con = null) Return the first Province matching the query
 * @method Province findOneOrCreate(PropelPDO $con = null) Return the first Province matching the query, or a new Province object populated from the query conditions when no match is found
 *
 * @method Province findOneByIdRegion(int $ID_REGION) Return the first Province filtered by the ID_REGION column
 * @method Province findOneByNomProvinceFr(string $NOM_PROVINCE_FR) Return the first Province filtered by the NOM_PROVINCE_FR column
 * @method Province findOneByNomProvinceAr(string $NOM_PROVINCE_AR) Return the first Province filtered by the NOM_PROVINCE_AR column
 * @method Province findOneByIdEntite(int $ID_ENTITE) Return the first Province filtered by the ID_ENTITE column
 * @method Province findOneByIdExterne(int $ID_EXTERNE) Return the first Province filtered by the ID_EXTERNE column
 *
 * @method array findById(int $ID) Return Province objects filtered by the ID column
 * @method array findByIdRegion(int $ID_REGION) Return Province objects filtered by the ID_REGION column
 * @method array findByNomProvinceFr(string $NOM_PROVINCE_FR) Return Province objects filtered by the NOM_PROVINCE_FR column
 * @method array findByNomProvinceAr(string $NOM_PROVINCE_AR) Return Province objects filtered by the NOM_PROVINCE_AR column
 * @method array findByIdEntite(int $ID_ENTITE) Return Province objects filtered by the ID_ENTITE column
 * @method array findByIdExterne(int $ID_EXTERNE) Return Province objects filtered by the ID_EXTERNE column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseProvinceQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseProvinceQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'Province', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ProvinceQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ProvinceQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ProvinceQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ProvinceQuery) {
            return $criteria;
        }
        $query = new ProvinceQuery();
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
     * @return   Province|Province[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ProvincePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ProvincePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Province A model object, or null if the key is not found
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
     * @return                 Province A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `ID_REGION`, `NOM_PROVINCE_FR`, `NOM_PROVINCE_AR`, `ID_ENTITE`, `ID_EXTERNE` FROM `province` WHERE `ID` = :p0';
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
            $obj = new Province();
            $obj->hydrate($row);
            ProvincePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Province|Province[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Province[]|mixed the list of results, formatted by the current formatter
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
     * @return ProvinceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ProvincePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ProvinceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ProvincePeer::ID, $keys, Criteria::IN);
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
     * @return ProvinceQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(ProvincePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(ProvincePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProvincePeer::ID, $id, $comparison);
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
     * @return ProvinceQuery The current query, for fluid interface
     */
    public function filterByIdRegion($idRegion = null, $comparison = null)
    {
        if (is_array($idRegion)) {
            $useMinMax = false;
            if (isset($idRegion['min'])) {
                $this->addUsingAlias(ProvincePeer::ID_REGION, $idRegion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idRegion['max'])) {
                $this->addUsingAlias(ProvincePeer::ID_REGION, $idRegion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProvincePeer::ID_REGION, $idRegion, $comparison);
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
     * @return ProvinceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ProvincePeer::NOM_PROVINCE_FR, $nomProvinceFr, $comparison);
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
     * @return ProvinceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ProvincePeer::NOM_PROVINCE_AR, $nomProvinceAr, $comparison);
    }

    /**
     * Filter the query on the ID_ENTITE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntite(1234); // WHERE ID_ENTITE = 1234
     * $query->filterByIdEntite(array(12, 34)); // WHERE ID_ENTITE IN (12, 34)
     * $query->filterByIdEntite(array('min' => 12)); // WHERE ID_ENTITE >= 12
     * $query->filterByIdEntite(array('max' => 12)); // WHERE ID_ENTITE <= 12
     * </code>
     *
     * @param     mixed $idEntite The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProvinceQuery The current query, for fluid interface
     */
    public function filterByIdEntite($idEntite = null, $comparison = null)
    {
        if (is_array($idEntite)) {
            $useMinMax = false;
            if (isset($idEntite['min'])) {
                $this->addUsingAlias(ProvincePeer::ID_ENTITE, $idEntite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntite['max'])) {
                $this->addUsingAlias(ProvincePeer::ID_ENTITE, $idEntite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProvincePeer::ID_ENTITE, $idEntite, $comparison);
    }

    /**
     * Filter the query on the ID_EXTERNE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdExterne(1234); // WHERE ID_EXTERNE = 1234
     * $query->filterByIdExterne(array(12, 34)); // WHERE ID_EXTERNE IN (12, 34)
     * $query->filterByIdExterne(array('min' => 12)); // WHERE ID_EXTERNE >= 12
     * $query->filterByIdExterne(array('max' => 12)); // WHERE ID_EXTERNE <= 12
     * </code>
     *
     * @param     mixed $idExterne The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ProvinceQuery The current query, for fluid interface
     */
    public function filterByIdExterne($idExterne = null, $comparison = null)
    {
        if (is_array($idExterne)) {
            $useMinMax = false;
            if (isset($idExterne['min'])) {
                $this->addUsingAlias(ProvincePeer::ID_EXTERNE, $idExterne['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idExterne['max'])) {
                $this->addUsingAlias(ProvincePeer::ID_EXTERNE, $idExterne['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ProvincePeer::ID_EXTERNE, $idExterne, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Province $province Object to remove from the list of results
     *
     * @return ProvinceQuery The current query, for fluid interface
     */
    public function prune($province = null)
    {
        if ($province) {
            $this->addUsingAlias(ProvincePeer::ID, $province->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
