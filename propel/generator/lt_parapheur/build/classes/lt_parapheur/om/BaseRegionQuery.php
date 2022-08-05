<?php


/**
 * Base class that represents a query for the 'region' table.
 *
 * 
 *
 * @method RegionQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method RegionQuery orderByIdPays($order = Criteria::ASC) Order by the ID_PAYS column
 * @method RegionQuery orderByNomRegionAr($order = Criteria::ASC) Order by the NOM_REGION_AR column
 * @method RegionQuery orderByNomRegionFr($order = Criteria::ASC) Order by the NOM_REGION_FR column
 * @method RegionQuery orderByIdEntite($order = Criteria::ASC) Order by the ID_ENTITE column
 * @method RegionQuery orderByIdExterne($order = Criteria::ASC) Order by the ID_EXTERNE column
 *
 * @method RegionQuery groupById() Group by the ID column
 * @method RegionQuery groupByIdPays() Group by the ID_PAYS column
 * @method RegionQuery groupByNomRegionAr() Group by the NOM_REGION_AR column
 * @method RegionQuery groupByNomRegionFr() Group by the NOM_REGION_FR column
 * @method RegionQuery groupByIdEntite() Group by the ID_ENTITE column
 * @method RegionQuery groupByIdExterne() Group by the ID_EXTERNE column
 *
 * @method RegionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method RegionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method RegionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Region findOne(PropelPDO $con = null) Return the first Region matching the query
 * @method Region findOneOrCreate(PropelPDO $con = null) Return the first Region matching the query, or a new Region object populated from the query conditions when no match is found
 *
 * @method Region findOneByIdPays(int $ID_PAYS) Return the first Region filtered by the ID_PAYS column
 * @method Region findOneByNomRegionAr(string $NOM_REGION_AR) Return the first Region filtered by the NOM_REGION_AR column
 * @method Region findOneByNomRegionFr(string $NOM_REGION_FR) Return the first Region filtered by the NOM_REGION_FR column
 * @method Region findOneByIdEntite(int $ID_ENTITE) Return the first Region filtered by the ID_ENTITE column
 * @method Region findOneByIdExterne(int $ID_EXTERNE) Return the first Region filtered by the ID_EXTERNE column
 *
 * @method array findById(int $ID) Return Region objects filtered by the ID column
 * @method array findByIdPays(int $ID_PAYS) Return Region objects filtered by the ID_PAYS column
 * @method array findByNomRegionAr(string $NOM_REGION_AR) Return Region objects filtered by the NOM_REGION_AR column
 * @method array findByNomRegionFr(string $NOM_REGION_FR) Return Region objects filtered by the NOM_REGION_FR column
 * @method array findByIdEntite(int $ID_ENTITE) Return Region objects filtered by the ID_ENTITE column
 * @method array findByIdExterne(int $ID_EXTERNE) Return Region objects filtered by the ID_EXTERNE column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseRegionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseRegionQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'Region', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new RegionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   RegionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return RegionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof RegionQuery) {
            return $criteria;
        }
        $query = new RegionQuery();
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
     * @return   Region|Region[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = RegionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(RegionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Region A model object, or null if the key is not found
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
     * @return                 Region A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `ID_PAYS`, `NOM_REGION_AR`, `NOM_REGION_FR`, `ID_ENTITE`, `ID_EXTERNE` FROM `region` WHERE `ID` = :p0';
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
            $obj = new Region();
            $obj->hydrate($row);
            RegionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Region|Region[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Region[]|mixed the list of results, formatted by the current formatter
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
     * @return RegionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(RegionPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return RegionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(RegionPeer::ID, $keys, Criteria::IN);
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
     * @return RegionQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(RegionPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(RegionPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RegionPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the ID_PAYS column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPays(1234); // WHERE ID_PAYS = 1234
     * $query->filterByIdPays(array(12, 34)); // WHERE ID_PAYS IN (12, 34)
     * $query->filterByIdPays(array('min' => 12)); // WHERE ID_PAYS >= 12
     * $query->filterByIdPays(array('max' => 12)); // WHERE ID_PAYS <= 12
     * </code>
     *
     * @param     mixed $idPays The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RegionQuery The current query, for fluid interface
     */
    public function filterByIdPays($idPays = null, $comparison = null)
    {
        if (is_array($idPays)) {
            $useMinMax = false;
            if (isset($idPays['min'])) {
                $this->addUsingAlias(RegionPeer::ID_PAYS, $idPays['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idPays['max'])) {
                $this->addUsingAlias(RegionPeer::ID_PAYS, $idPays['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RegionPeer::ID_PAYS, $idPays, $comparison);
    }

    /**
     * Filter the query on the NOM_REGION_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByNomRegionAr('fooValue');   // WHERE NOM_REGION_AR = 'fooValue'
     * $query->filterByNomRegionAr('%fooValue%'); // WHERE NOM_REGION_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomRegionAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RegionQuery The current query, for fluid interface
     */
    public function filterByNomRegionAr($nomRegionAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomRegionAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomRegionAr)) {
                $nomRegionAr = str_replace('*', '%', $nomRegionAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RegionPeer::NOM_REGION_AR, $nomRegionAr, $comparison);
    }

    /**
     * Filter the query on the NOM_REGION_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByNomRegionFr('fooValue');   // WHERE NOM_REGION_FR = 'fooValue'
     * $query->filterByNomRegionFr('%fooValue%'); // WHERE NOM_REGION_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomRegionFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return RegionQuery The current query, for fluid interface
     */
    public function filterByNomRegionFr($nomRegionFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomRegionFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomRegionFr)) {
                $nomRegionFr = str_replace('*', '%', $nomRegionFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(RegionPeer::NOM_REGION_FR, $nomRegionFr, $comparison);
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
     * @return RegionQuery The current query, for fluid interface
     */
    public function filterByIdEntite($idEntite = null, $comparison = null)
    {
        if (is_array($idEntite)) {
            $useMinMax = false;
            if (isset($idEntite['min'])) {
                $this->addUsingAlias(RegionPeer::ID_ENTITE, $idEntite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntite['max'])) {
                $this->addUsingAlias(RegionPeer::ID_ENTITE, $idEntite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RegionPeer::ID_ENTITE, $idEntite, $comparison);
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
     * @return RegionQuery The current query, for fluid interface
     */
    public function filterByIdExterne($idExterne = null, $comparison = null)
    {
        if (is_array($idExterne)) {
            $useMinMax = false;
            if (isset($idExterne['min'])) {
                $this->addUsingAlias(RegionPeer::ID_EXTERNE, $idExterne['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idExterne['max'])) {
                $this->addUsingAlias(RegionPeer::ID_EXTERNE, $idExterne['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(RegionPeer::ID_EXTERNE, $idExterne, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Region $region Object to remove from the list of results
     *
     * @return RegionQuery The current query, for fluid interface
     */
    public function prune($region = null)
    {
        if ($region) {
            $this->addUsingAlias(RegionPeer::ID, $region->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
