<?php


/**
 * Base class that represents a query for the 'pf_commune' table.
 *
 * 
 *
 * @method PfCommuneQuery orderByIdCommune($order = Criteria::ASC) Order by the ID_COMMUNE column
 * @method PfCommuneQuery orderByIdProvince($order = Criteria::ASC) Order by the ID_PROVINCE column
 * @method PfCommuneQuery orderByNomCommuneFr($order = Criteria::ASC) Order by the NOM_COMMUNE_FR column
 * @method PfCommuneQuery orderByNomCommuneAr($order = Criteria::ASC) Order by the NOM_COMMUNE_AR column
 *
 * @method PfCommuneQuery groupByIdCommune() Group by the ID_COMMUNE column
 * @method PfCommuneQuery groupByIdProvince() Group by the ID_PROVINCE column
 * @method PfCommuneQuery groupByNomCommuneFr() Group by the NOM_COMMUNE_FR column
 * @method PfCommuneQuery groupByNomCommuneAr() Group by the NOM_COMMUNE_AR column
 *
 * @method PfCommuneQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PfCommuneQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PfCommuneQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PfCommune findOne(PropelPDO $con = null) Return the first PfCommune matching the query
 * @method PfCommune findOneOrCreate(PropelPDO $con = null) Return the first PfCommune matching the query, or a new PfCommune object populated from the query conditions when no match is found
 *
 * @method PfCommune findOneByIdProvince(int $ID_PROVINCE) Return the first PfCommune filtered by the ID_PROVINCE column
 * @method PfCommune findOneByNomCommuneFr(string $NOM_COMMUNE_FR) Return the first PfCommune filtered by the NOM_COMMUNE_FR column
 * @method PfCommune findOneByNomCommuneAr(string $NOM_COMMUNE_AR) Return the first PfCommune filtered by the NOM_COMMUNE_AR column
 *
 * @method array findByIdCommune(int $ID_COMMUNE) Return PfCommune objects filtered by the ID_COMMUNE column
 * @method array findByIdProvince(int $ID_PROVINCE) Return PfCommune objects filtered by the ID_PROVINCE column
 * @method array findByNomCommuneFr(string $NOM_COMMUNE_FR) Return PfCommune objects filtered by the NOM_COMMUNE_FR column
 * @method array findByNomCommuneAr(string $NOM_COMMUNE_AR) Return PfCommune objects filtered by the NOM_COMMUNE_AR column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BasePfCommuneQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePfCommuneQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'PfCommune', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PfCommuneQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PfCommuneQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PfCommuneQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PfCommuneQuery) {
            return $criteria;
        }
        $query = new PfCommuneQuery();
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
     * @return   PfCommune|PfCommune[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PfCommunePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PfCommunePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 PfCommune A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdCommune($key, $con = null)
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
     * @return                 PfCommune A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_COMMUNE`, `ID_PROVINCE`, `NOM_COMMUNE_FR`, `NOM_COMMUNE_AR` FROM `pf_commune` WHERE `ID_COMMUNE` = :p0';
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
            $obj = new PfCommune();
            $obj->hydrate($row);
            PfCommunePeer::addInstanceToPool($obj, (string) $key);
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
     * @return PfCommune|PfCommune[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|PfCommune[]|mixed the list of results, formatted by the current formatter
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
     * @return PfCommuneQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PfCommunePeer::ID_COMMUNE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PfCommuneQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PfCommunePeer::ID_COMMUNE, $keys, Criteria::IN);
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
     * @return PfCommuneQuery The current query, for fluid interface
     */
    public function filterByIdCommune($idCommune = null, $comparison = null)
    {
        if (is_array($idCommune)) {
            $useMinMax = false;
            if (isset($idCommune['min'])) {
                $this->addUsingAlias(PfCommunePeer::ID_COMMUNE, $idCommune['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCommune['max'])) {
                $this->addUsingAlias(PfCommunePeer::ID_COMMUNE, $idCommune['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfCommunePeer::ID_COMMUNE, $idCommune, $comparison);
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
     * @return PfCommuneQuery The current query, for fluid interface
     */
    public function filterByIdProvince($idProvince = null, $comparison = null)
    {
        if (is_array($idProvince)) {
            $useMinMax = false;
            if (isset($idProvince['min'])) {
                $this->addUsingAlias(PfCommunePeer::ID_PROVINCE, $idProvince['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idProvince['max'])) {
                $this->addUsingAlias(PfCommunePeer::ID_PROVINCE, $idProvince['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfCommunePeer::ID_PROVINCE, $idProvince, $comparison);
    }

    /**
     * Filter the query on the NOM_COMMUNE_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByNomCommuneFr('fooValue');   // WHERE NOM_COMMUNE_FR = 'fooValue'
     * $query->filterByNomCommuneFr('%fooValue%'); // WHERE NOM_COMMUNE_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomCommuneFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfCommuneQuery The current query, for fluid interface
     */
    public function filterByNomCommuneFr($nomCommuneFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomCommuneFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomCommuneFr)) {
                $nomCommuneFr = str_replace('*', '%', $nomCommuneFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfCommunePeer::NOM_COMMUNE_FR, $nomCommuneFr, $comparison);
    }

    /**
     * Filter the query on the NOM_COMMUNE_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByNomCommuneAr('fooValue');   // WHERE NOM_COMMUNE_AR = 'fooValue'
     * $query->filterByNomCommuneAr('%fooValue%'); // WHERE NOM_COMMUNE_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomCommuneAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfCommuneQuery The current query, for fluid interface
     */
    public function filterByNomCommuneAr($nomCommuneAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomCommuneAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomCommuneAr)) {
                $nomCommuneAr = str_replace('*', '%', $nomCommuneAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfCommunePeer::NOM_COMMUNE_AR, $nomCommuneAr, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   PfCommune $pfCommune Object to remove from the list of results
     *
     * @return PfCommuneQuery The current query, for fluid interface
     */
    public function prune($pfCommune = null)
    {
        if ($pfCommune) {
            $this->addUsingAlias(PfCommunePeer::ID_COMMUNE, $pfCommune->getIdCommune(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
