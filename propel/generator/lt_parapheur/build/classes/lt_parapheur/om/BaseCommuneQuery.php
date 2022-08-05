<?php


/**
 * Base class that represents a query for the 'commune' table.
 *
 * 
 *
 * @method CommuneQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method CommuneQuery orderByIdProvince($order = Criteria::ASC) Order by the ID_PROVINCE column
 * @method CommuneQuery orderByNomCommuneFr($order = Criteria::ASC) Order by the NOM_COMMUNE_FR column
 * @method CommuneQuery orderByNomCommuneAr($order = Criteria::ASC) Order by the NOM_COMMUNE_AR column
 * @method CommuneQuery orderByLatitudeCommune($order = Criteria::ASC) Order by the LATITUDE_COMMUNE column
 * @method CommuneQuery orderByLogitudeCommune($order = Criteria::ASC) Order by the LOGITUDE_COMMUNE column
 * @method CommuneQuery orderByIdEntite($order = Criteria::ASC) Order by the ID_ENTITE column
 * @method CommuneQuery orderByIdExterne($order = Criteria::ASC) Order by the ID_EXTERNE column
 *
 * @method CommuneQuery groupById() Group by the ID column
 * @method CommuneQuery groupByIdProvince() Group by the ID_PROVINCE column
 * @method CommuneQuery groupByNomCommuneFr() Group by the NOM_COMMUNE_FR column
 * @method CommuneQuery groupByNomCommuneAr() Group by the NOM_COMMUNE_AR column
 * @method CommuneQuery groupByLatitudeCommune() Group by the LATITUDE_COMMUNE column
 * @method CommuneQuery groupByLogitudeCommune() Group by the LOGITUDE_COMMUNE column
 * @method CommuneQuery groupByIdEntite() Group by the ID_ENTITE column
 * @method CommuneQuery groupByIdExterne() Group by the ID_EXTERNE column
 *
 * @method CommuneQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommuneQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommuneQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Commune findOne(PropelPDO $con = null) Return the first Commune matching the query
 * @method Commune findOneOrCreate(PropelPDO $con = null) Return the first Commune matching the query, or a new Commune object populated from the query conditions when no match is found
 *
 * @method Commune findOneByIdProvince(int $ID_PROVINCE) Return the first Commune filtered by the ID_PROVINCE column
 * @method Commune findOneByNomCommuneFr(string $NOM_COMMUNE_FR) Return the first Commune filtered by the NOM_COMMUNE_FR column
 * @method Commune findOneByNomCommuneAr(string $NOM_COMMUNE_AR) Return the first Commune filtered by the NOM_COMMUNE_AR column
 * @method Commune findOneByLatitudeCommune(string $LATITUDE_COMMUNE) Return the first Commune filtered by the LATITUDE_COMMUNE column
 * @method Commune findOneByLogitudeCommune(string $LOGITUDE_COMMUNE) Return the first Commune filtered by the LOGITUDE_COMMUNE column
 * @method Commune findOneByIdEntite(int $ID_ENTITE) Return the first Commune filtered by the ID_ENTITE column
 * @method Commune findOneByIdExterne(int $ID_EXTERNE) Return the first Commune filtered by the ID_EXTERNE column
 *
 * @method array findById(int $ID) Return Commune objects filtered by the ID column
 * @method array findByIdProvince(int $ID_PROVINCE) Return Commune objects filtered by the ID_PROVINCE column
 * @method array findByNomCommuneFr(string $NOM_COMMUNE_FR) Return Commune objects filtered by the NOM_COMMUNE_FR column
 * @method array findByNomCommuneAr(string $NOM_COMMUNE_AR) Return Commune objects filtered by the NOM_COMMUNE_AR column
 * @method array findByLatitudeCommune(string $LATITUDE_COMMUNE) Return Commune objects filtered by the LATITUDE_COMMUNE column
 * @method array findByLogitudeCommune(string $LOGITUDE_COMMUNE) Return Commune objects filtered by the LOGITUDE_COMMUNE column
 * @method array findByIdEntite(int $ID_ENTITE) Return Commune objects filtered by the ID_ENTITE column
 * @method array findByIdExterne(int $ID_EXTERNE) Return Commune objects filtered by the ID_EXTERNE column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommuneQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommuneQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'Commune', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommuneQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommuneQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommuneQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommuneQuery) {
            return $criteria;
        }
        $query = new CommuneQuery();
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
     * @return   Commune|Commune[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommunePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommunePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Commune A model object, or null if the key is not found
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
     * @return                 Commune A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `ID_PROVINCE`, `NOM_COMMUNE_FR`, `NOM_COMMUNE_AR`, `LATITUDE_COMMUNE`, `LOGITUDE_COMMUNE`, `ID_ENTITE`, `ID_EXTERNE` FROM `commune` WHERE `ID` = :p0';
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
            $obj = new Commune();
            $obj->hydrate($row);
            CommunePeer::addInstanceToPool($obj, (string) $key);
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
     * @return Commune|Commune[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Commune[]|mixed the list of results, formatted by the current formatter
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
     * @return CommuneQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommunePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommuneQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommunePeer::ID, $keys, Criteria::IN);
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
     * @return CommuneQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommunePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommunePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommunePeer::ID, $id, $comparison);
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
     * @return CommuneQuery The current query, for fluid interface
     */
    public function filterByIdProvince($idProvince = null, $comparison = null)
    {
        if (is_array($idProvince)) {
            $useMinMax = false;
            if (isset($idProvince['min'])) {
                $this->addUsingAlias(CommunePeer::ID_PROVINCE, $idProvince['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idProvince['max'])) {
                $this->addUsingAlias(CommunePeer::ID_PROVINCE, $idProvince['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommunePeer::ID_PROVINCE, $idProvince, $comparison);
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
     * @return CommuneQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommunePeer::NOM_COMMUNE_FR, $nomCommuneFr, $comparison);
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
     * @return CommuneQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommunePeer::NOM_COMMUNE_AR, $nomCommuneAr, $comparison);
    }

    /**
     * Filter the query on the LATITUDE_COMMUNE column
     *
     * Example usage:
     * <code>
     * $query->filterByLatitudeCommune('fooValue');   // WHERE LATITUDE_COMMUNE = 'fooValue'
     * $query->filterByLatitudeCommune('%fooValue%'); // WHERE LATITUDE_COMMUNE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $latitudeCommune The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommuneQuery The current query, for fluid interface
     */
    public function filterByLatitudeCommune($latitudeCommune = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($latitudeCommune)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $latitudeCommune)) {
                $latitudeCommune = str_replace('*', '%', $latitudeCommune);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommunePeer::LATITUDE_COMMUNE, $latitudeCommune, $comparison);
    }

    /**
     * Filter the query on the LOGITUDE_COMMUNE column
     *
     * Example usage:
     * <code>
     * $query->filterByLogitudeCommune('fooValue');   // WHERE LOGITUDE_COMMUNE = 'fooValue'
     * $query->filterByLogitudeCommune('%fooValue%'); // WHERE LOGITUDE_COMMUNE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $logitudeCommune The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommuneQuery The current query, for fluid interface
     */
    public function filterByLogitudeCommune($logitudeCommune = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($logitudeCommune)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $logitudeCommune)) {
                $logitudeCommune = str_replace('*', '%', $logitudeCommune);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommunePeer::LOGITUDE_COMMUNE, $logitudeCommune, $comparison);
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
     * @return CommuneQuery The current query, for fluid interface
     */
    public function filterByIdEntite($idEntite = null, $comparison = null)
    {
        if (is_array($idEntite)) {
            $useMinMax = false;
            if (isset($idEntite['min'])) {
                $this->addUsingAlias(CommunePeer::ID_ENTITE, $idEntite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntite['max'])) {
                $this->addUsingAlias(CommunePeer::ID_ENTITE, $idEntite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommunePeer::ID_ENTITE, $idEntite, $comparison);
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
     * @return CommuneQuery The current query, for fluid interface
     */
    public function filterByIdExterne($idExterne = null, $comparison = null)
    {
        if (is_array($idExterne)) {
            $useMinMax = false;
            if (isset($idExterne['min'])) {
                $this->addUsingAlias(CommunePeer::ID_EXTERNE, $idExterne['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idExterne['max'])) {
                $this->addUsingAlias(CommunePeer::ID_EXTERNE, $idExterne['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommunePeer::ID_EXTERNE, $idExterne, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Commune $commune Object to remove from the list of results
     *
     * @return CommuneQuery The current query, for fluid interface
     */
    public function prune($commune = null)
    {
        if ($commune) {
            $this->addUsingAlias(CommunePeer::ID, $commune->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
