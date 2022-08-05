<?php


/**
 * Base class that represents a query for the 'GeolocalisationN2' table.
 *
 * 
 *
 * @method CommonGeolocalisationN2Query orderById($order = Criteria::ASC) Order by the id column
 * @method CommonGeolocalisationN2Query orderByIdGeolocalisationn1($order = Criteria::ASC) Order by the id_geolocalisationN1 column
 * @method CommonGeolocalisationN2Query orderByDenomination1($order = Criteria::ASC) Order by the denomination1 column
 * @method CommonGeolocalisationN2Query orderByDenomination2($order = Criteria::ASC) Order by the denomination2 column
 * @method CommonGeolocalisationN2Query orderByValeurAvecSousCategorie($order = Criteria::ASC) Order by the valeur_avec_sous_categorie column
 * @method CommonGeolocalisationN2Query orderByActif($order = Criteria::ASC) Order by the actif column
 * @method CommonGeolocalisationN2Query orderByDenomination1Ar($order = Criteria::ASC) Order by the denomination1_ar column
 * @method CommonGeolocalisationN2Query orderByDenomination2Ar($order = Criteria::ASC) Order by the denomination2_ar column
 * @method CommonGeolocalisationN2Query orderByDenomination1Fr($order = Criteria::ASC) Order by the denomination1_fr column
 * @method CommonGeolocalisationN2Query orderByDenomination2Fr($order = Criteria::ASC) Order by the denomination2_fr column
 * @method CommonGeolocalisationN2Query orderByDenomination1En($order = Criteria::ASC) Order by the denomination1_en column
 * @method CommonGeolocalisationN2Query orderByDenomination2En($order = Criteria::ASC) Order by the denomination2_en column
 * @method CommonGeolocalisationN2Query orderByDenomination1Es($order = Criteria::ASC) Order by the denomination1_es column
 * @method CommonGeolocalisationN2Query orderByDenomination2Es($order = Criteria::ASC) Order by the denomination2_es column
 * @method CommonGeolocalisationN2Query orderByDenomination1Su($order = Criteria::ASC) Order by the denomination1_su column
 * @method CommonGeolocalisationN2Query orderByDenomination2Su($order = Criteria::ASC) Order by the denomination2_su column
 * @method CommonGeolocalisationN2Query orderByDenomination1Du($order = Criteria::ASC) Order by the denomination1_du column
 * @method CommonGeolocalisationN2Query orderByDenomination2Du($order = Criteria::ASC) Order by the denomination2_du column
 * @method CommonGeolocalisationN2Query orderByDenomination1Cz($order = Criteria::ASC) Order by the denomination1_cz column
 * @method CommonGeolocalisationN2Query orderByDenomination2Cz($order = Criteria::ASC) Order by the denomination2_cz column
 * @method CommonGeolocalisationN2Query orderByDenomination1It($order = Criteria::ASC) Order by the denomination1_it column
 * @method CommonGeolocalisationN2Query orderByDenomination2It($order = Criteria::ASC) Order by the denomination2_it column
 * @method CommonGeolocalisationN2Query orderByValeurSub($order = Criteria::ASC) Order by the valeur_sub column
 *
 * @method CommonGeolocalisationN2Query groupById() Group by the id column
 * @method CommonGeolocalisationN2Query groupByIdGeolocalisationn1() Group by the id_geolocalisationN1 column
 * @method CommonGeolocalisationN2Query groupByDenomination1() Group by the denomination1 column
 * @method CommonGeolocalisationN2Query groupByDenomination2() Group by the denomination2 column
 * @method CommonGeolocalisationN2Query groupByValeurAvecSousCategorie() Group by the valeur_avec_sous_categorie column
 * @method CommonGeolocalisationN2Query groupByActif() Group by the actif column
 * @method CommonGeolocalisationN2Query groupByDenomination1Ar() Group by the denomination1_ar column
 * @method CommonGeolocalisationN2Query groupByDenomination2Ar() Group by the denomination2_ar column
 * @method CommonGeolocalisationN2Query groupByDenomination1Fr() Group by the denomination1_fr column
 * @method CommonGeolocalisationN2Query groupByDenomination2Fr() Group by the denomination2_fr column
 * @method CommonGeolocalisationN2Query groupByDenomination1En() Group by the denomination1_en column
 * @method CommonGeolocalisationN2Query groupByDenomination2En() Group by the denomination2_en column
 * @method CommonGeolocalisationN2Query groupByDenomination1Es() Group by the denomination1_es column
 * @method CommonGeolocalisationN2Query groupByDenomination2Es() Group by the denomination2_es column
 * @method CommonGeolocalisationN2Query groupByDenomination1Su() Group by the denomination1_su column
 * @method CommonGeolocalisationN2Query groupByDenomination2Su() Group by the denomination2_su column
 * @method CommonGeolocalisationN2Query groupByDenomination1Du() Group by the denomination1_du column
 * @method CommonGeolocalisationN2Query groupByDenomination2Du() Group by the denomination2_du column
 * @method CommonGeolocalisationN2Query groupByDenomination1Cz() Group by the denomination1_cz column
 * @method CommonGeolocalisationN2Query groupByDenomination2Cz() Group by the denomination2_cz column
 * @method CommonGeolocalisationN2Query groupByDenomination1It() Group by the denomination1_it column
 * @method CommonGeolocalisationN2Query groupByDenomination2It() Group by the denomination2_it column
 * @method CommonGeolocalisationN2Query groupByValeurSub() Group by the valeur_sub column
 *
 * @method CommonGeolocalisationN2Query leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonGeolocalisationN2Query rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonGeolocalisationN2Query innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonGeolocalisationN2 findOne(PropelPDO $con = null) Return the first CommonGeolocalisationN2 matching the query
 * @method CommonGeolocalisationN2 findOneOrCreate(PropelPDO $con = null) Return the first CommonGeolocalisationN2 matching the query, or a new CommonGeolocalisationN2 object populated from the query conditions when no match is found
 *
 * @method CommonGeolocalisationN2 findOneByIdGeolocalisationn1(int $id_geolocalisationN1) Return the first CommonGeolocalisationN2 filtered by the id_geolocalisationN1 column
 * @method CommonGeolocalisationN2 findOneByDenomination1(string $denomination1) Return the first CommonGeolocalisationN2 filtered by the denomination1 column
 * @method CommonGeolocalisationN2 findOneByDenomination2(string $denomination2) Return the first CommonGeolocalisationN2 filtered by the denomination2 column
 * @method CommonGeolocalisationN2 findOneByValeurAvecSousCategorie(string $valeur_avec_sous_categorie) Return the first CommonGeolocalisationN2 filtered by the valeur_avec_sous_categorie column
 * @method CommonGeolocalisationN2 findOneByActif(string $actif) Return the first CommonGeolocalisationN2 filtered by the actif column
 * @method CommonGeolocalisationN2 findOneByDenomination1Ar(string $denomination1_ar) Return the first CommonGeolocalisationN2 filtered by the denomination1_ar column
 * @method CommonGeolocalisationN2 findOneByDenomination2Ar(string $denomination2_ar) Return the first CommonGeolocalisationN2 filtered by the denomination2_ar column
 * @method CommonGeolocalisationN2 findOneByDenomination1Fr(string $denomination1_fr) Return the first CommonGeolocalisationN2 filtered by the denomination1_fr column
 * @method CommonGeolocalisationN2 findOneByDenomination2Fr(string $denomination2_fr) Return the first CommonGeolocalisationN2 filtered by the denomination2_fr column
 * @method CommonGeolocalisationN2 findOneByDenomination1En(string $denomination1_en) Return the first CommonGeolocalisationN2 filtered by the denomination1_en column
 * @method CommonGeolocalisationN2 findOneByDenomination2En(string $denomination2_en) Return the first CommonGeolocalisationN2 filtered by the denomination2_en column
 * @method CommonGeolocalisationN2 findOneByDenomination1Es(string $denomination1_es) Return the first CommonGeolocalisationN2 filtered by the denomination1_es column
 * @method CommonGeolocalisationN2 findOneByDenomination2Es(string $denomination2_es) Return the first CommonGeolocalisationN2 filtered by the denomination2_es column
 * @method CommonGeolocalisationN2 findOneByDenomination1Su(string $denomination1_su) Return the first CommonGeolocalisationN2 filtered by the denomination1_su column
 * @method CommonGeolocalisationN2 findOneByDenomination2Su(string $denomination2_su) Return the first CommonGeolocalisationN2 filtered by the denomination2_su column
 * @method CommonGeolocalisationN2 findOneByDenomination1Du(string $denomination1_du) Return the first CommonGeolocalisationN2 filtered by the denomination1_du column
 * @method CommonGeolocalisationN2 findOneByDenomination2Du(string $denomination2_du) Return the first CommonGeolocalisationN2 filtered by the denomination2_du column
 * @method CommonGeolocalisationN2 findOneByDenomination1Cz(string $denomination1_cz) Return the first CommonGeolocalisationN2 filtered by the denomination1_cz column
 * @method CommonGeolocalisationN2 findOneByDenomination2Cz(string $denomination2_cz) Return the first CommonGeolocalisationN2 filtered by the denomination2_cz column
 * @method CommonGeolocalisationN2 findOneByDenomination1It(string $denomination1_it) Return the first CommonGeolocalisationN2 filtered by the denomination1_it column
 * @method CommonGeolocalisationN2 findOneByDenomination2It(string $denomination2_it) Return the first CommonGeolocalisationN2 filtered by the denomination2_it column
 * @method CommonGeolocalisationN2 findOneByValeurSub(string $valeur_sub) Return the first CommonGeolocalisationN2 filtered by the valeur_sub column
 *
 * @method array findById(int $id) Return CommonGeolocalisationN2 objects filtered by the id column
 * @method array findByIdGeolocalisationn1(int $id_geolocalisationN1) Return CommonGeolocalisationN2 objects filtered by the id_geolocalisationN1 column
 * @method array findByDenomination1(string $denomination1) Return CommonGeolocalisationN2 objects filtered by the denomination1 column
 * @method array findByDenomination2(string $denomination2) Return CommonGeolocalisationN2 objects filtered by the denomination2 column
 * @method array findByValeurAvecSousCategorie(string $valeur_avec_sous_categorie) Return CommonGeolocalisationN2 objects filtered by the valeur_avec_sous_categorie column
 * @method array findByActif(string $actif) Return CommonGeolocalisationN2 objects filtered by the actif column
 * @method array findByDenomination1Ar(string $denomination1_ar) Return CommonGeolocalisationN2 objects filtered by the denomination1_ar column
 * @method array findByDenomination2Ar(string $denomination2_ar) Return CommonGeolocalisationN2 objects filtered by the denomination2_ar column
 * @method array findByDenomination1Fr(string $denomination1_fr) Return CommonGeolocalisationN2 objects filtered by the denomination1_fr column
 * @method array findByDenomination2Fr(string $denomination2_fr) Return CommonGeolocalisationN2 objects filtered by the denomination2_fr column
 * @method array findByDenomination1En(string $denomination1_en) Return CommonGeolocalisationN2 objects filtered by the denomination1_en column
 * @method array findByDenomination2En(string $denomination2_en) Return CommonGeolocalisationN2 objects filtered by the denomination2_en column
 * @method array findByDenomination1Es(string $denomination1_es) Return CommonGeolocalisationN2 objects filtered by the denomination1_es column
 * @method array findByDenomination2Es(string $denomination2_es) Return CommonGeolocalisationN2 objects filtered by the denomination2_es column
 * @method array findByDenomination1Su(string $denomination1_su) Return CommonGeolocalisationN2 objects filtered by the denomination1_su column
 * @method array findByDenomination2Su(string $denomination2_su) Return CommonGeolocalisationN2 objects filtered by the denomination2_su column
 * @method array findByDenomination1Du(string $denomination1_du) Return CommonGeolocalisationN2 objects filtered by the denomination1_du column
 * @method array findByDenomination2Du(string $denomination2_du) Return CommonGeolocalisationN2 objects filtered by the denomination2_du column
 * @method array findByDenomination1Cz(string $denomination1_cz) Return CommonGeolocalisationN2 objects filtered by the denomination1_cz column
 * @method array findByDenomination2Cz(string $denomination2_cz) Return CommonGeolocalisationN2 objects filtered by the denomination2_cz column
 * @method array findByDenomination1It(string $denomination1_it) Return CommonGeolocalisationN2 objects filtered by the denomination1_it column
 * @method array findByDenomination2It(string $denomination2_it) Return CommonGeolocalisationN2 objects filtered by the denomination2_it column
 * @method array findByValeurSub(string $valeur_sub) Return CommonGeolocalisationN2 objects filtered by the valeur_sub column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonGeolocalisationN2Query extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonGeolocalisationN2Query object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonGeolocalisationN2', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonGeolocalisationN2Query object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonGeolocalisationN2Query|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonGeolocalisationN2Query
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonGeolocalisationN2Query) {
            return $criteria;
        }
        $query = new CommonGeolocalisationN2Query();
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
     * @return   CommonGeolocalisationN2|CommonGeolocalisationN2[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonGeolocalisationN2Peer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonGeolocalisationN2Peer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonGeolocalisationN2 A model object, or null if the key is not found
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
     * @return                 CommonGeolocalisationN2 A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_geolocalisationN1`, `denomination1`, `denomination2`, `valeur_avec_sous_categorie`, `actif`, `denomination1_ar`, `denomination2_ar`, `denomination1_fr`, `denomination2_fr`, `denomination1_en`, `denomination2_en`, `denomination1_es`, `denomination2_es`, `denomination1_su`, `denomination2_su`, `denomination1_du`, `denomination2_du`, `denomination1_cz`, `denomination2_cz`, `denomination1_it`, `denomination2_it`, `valeur_sub` FROM `GeolocalisationN2` WHERE `id` = :p0';
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
            $obj = new CommonGeolocalisationN2();
            $obj->hydrate($row);
            CommonGeolocalisationN2Peer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonGeolocalisationN2|CommonGeolocalisationN2[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonGeolocalisationN2[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonGeolocalisationN2Query The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonGeolocalisationN2Peer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonGeolocalisationN2Query The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonGeolocalisationN2Peer::ID, $keys, Criteria::IN);
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
     * @return CommonGeolocalisationN2Query The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonGeolocalisationN2Peer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonGeolocalisationN2Peer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN2Peer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_geolocalisationN1 column
     *
     * Example usage:
     * <code>
     * $query->filterByIdGeolocalisationn1(1234); // WHERE id_geolocalisationN1 = 1234
     * $query->filterByIdGeolocalisationn1(array(12, 34)); // WHERE id_geolocalisationN1 IN (12, 34)
     * $query->filterByIdGeolocalisationn1(array('min' => 12)); // WHERE id_geolocalisationN1 >= 12
     * $query->filterByIdGeolocalisationn1(array('max' => 12)); // WHERE id_geolocalisationN1 <= 12
     * </code>
     *
     * @param     mixed $idGeolocalisationn1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN2Query The current query, for fluid interface
     */
    public function filterByIdGeolocalisationn1($idGeolocalisationn1 = null, $comparison = null)
    {
        if (is_array($idGeolocalisationn1)) {
            $useMinMax = false;
            if (isset($idGeolocalisationn1['min'])) {
                $this->addUsingAlias(CommonGeolocalisationN2Peer::ID_GEOLOCALISATIONN1, $idGeolocalisationn1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idGeolocalisationn1['max'])) {
                $this->addUsingAlias(CommonGeolocalisationN2Peer::ID_GEOLOCALISATIONN1, $idGeolocalisationn1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN2Peer::ID_GEOLOCALISATIONN1, $idGeolocalisationn1, $comparison);
    }

    /**
     * Filter the query on the denomination1 column
     *
     * Example usage:
     * <code>
     * $query->filterByDenomination1('fooValue');   // WHERE denomination1 = 'fooValue'
     * $query->filterByDenomination1('%fooValue%'); // WHERE denomination1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denomination1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN2Query The current query, for fluid interface
     */
    public function filterByDenomination1($denomination1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($denomination1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $denomination1)) {
                $denomination1 = str_replace('*', '%', $denomination1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN2Peer::DENOMINATION1, $denomination1, $comparison);
    }

    /**
     * Filter the query on the denomination2 column
     *
     * Example usage:
     * <code>
     * $query->filterByDenomination2('fooValue');   // WHERE denomination2 = 'fooValue'
     * $query->filterByDenomination2('%fooValue%'); // WHERE denomination2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denomination2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN2Query The current query, for fluid interface
     */
    public function filterByDenomination2($denomination2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($denomination2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $denomination2)) {
                $denomination2 = str_replace('*', '%', $denomination2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN2Peer::DENOMINATION2, $denomination2, $comparison);
    }

    /**
     * Filter the query on the valeur_avec_sous_categorie column
     *
     * Example usage:
     * <code>
     * $query->filterByValeurAvecSousCategorie('fooValue');   // WHERE valeur_avec_sous_categorie = 'fooValue'
     * $query->filterByValeurAvecSousCategorie('%fooValue%'); // WHERE valeur_avec_sous_categorie LIKE '%fooValue%'
     * </code>
     *
     * @param     string $valeurAvecSousCategorie The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN2Query The current query, for fluid interface
     */
    public function filterByValeurAvecSousCategorie($valeurAvecSousCategorie = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($valeurAvecSousCategorie)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $valeurAvecSousCategorie)) {
                $valeurAvecSousCategorie = str_replace('*', '%', $valeurAvecSousCategorie);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN2Peer::VALEUR_AVEC_SOUS_CATEGORIE, $valeurAvecSousCategorie, $comparison);
    }

    /**
     * Filter the query on the actif column
     *
     * Example usage:
     * <code>
     * $query->filterByActif('fooValue');   // WHERE actif = 'fooValue'
     * $query->filterByActif('%fooValue%'); // WHERE actif LIKE '%fooValue%'
     * </code>
     *
     * @param     string $actif The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN2Query The current query, for fluid interface
     */
    public function filterByActif($actif = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($actif)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $actif)) {
                $actif = str_replace('*', '%', $actif);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN2Peer::ACTIF, $actif, $comparison);
    }

    /**
     * Filter the query on the denomination1_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByDenomination1Ar('fooValue');   // WHERE denomination1_ar = 'fooValue'
     * $query->filterByDenomination1Ar('%fooValue%'); // WHERE denomination1_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denomination1Ar The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN2Query The current query, for fluid interface
     */
    public function filterByDenomination1Ar($denomination1Ar = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($denomination1Ar)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $denomination1Ar)) {
                $denomination1Ar = str_replace('*', '%', $denomination1Ar);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN2Peer::DENOMINATION1_AR, $denomination1Ar, $comparison);
    }

    /**
     * Filter the query on the denomination2_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByDenomination2Ar('fooValue');   // WHERE denomination2_ar = 'fooValue'
     * $query->filterByDenomination2Ar('%fooValue%'); // WHERE denomination2_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denomination2Ar The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN2Query The current query, for fluid interface
     */
    public function filterByDenomination2Ar($denomination2Ar = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($denomination2Ar)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $denomination2Ar)) {
                $denomination2Ar = str_replace('*', '%', $denomination2Ar);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN2Peer::DENOMINATION2_AR, $denomination2Ar, $comparison);
    }

    /**
     * Filter the query on the denomination1_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByDenomination1Fr('fooValue');   // WHERE denomination1_fr = 'fooValue'
     * $query->filterByDenomination1Fr('%fooValue%'); // WHERE denomination1_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denomination1Fr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN2Query The current query, for fluid interface
     */
    public function filterByDenomination1Fr($denomination1Fr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($denomination1Fr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $denomination1Fr)) {
                $denomination1Fr = str_replace('*', '%', $denomination1Fr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN2Peer::DENOMINATION1_FR, $denomination1Fr, $comparison);
    }

    /**
     * Filter the query on the denomination2_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByDenomination2Fr('fooValue');   // WHERE denomination2_fr = 'fooValue'
     * $query->filterByDenomination2Fr('%fooValue%'); // WHERE denomination2_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denomination2Fr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN2Query The current query, for fluid interface
     */
    public function filterByDenomination2Fr($denomination2Fr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($denomination2Fr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $denomination2Fr)) {
                $denomination2Fr = str_replace('*', '%', $denomination2Fr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN2Peer::DENOMINATION2_FR, $denomination2Fr, $comparison);
    }

    /**
     * Filter the query on the denomination1_en column
     *
     * Example usage:
     * <code>
     * $query->filterByDenomination1En('fooValue');   // WHERE denomination1_en = 'fooValue'
     * $query->filterByDenomination1En('%fooValue%'); // WHERE denomination1_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denomination1En The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN2Query The current query, for fluid interface
     */
    public function filterByDenomination1En($denomination1En = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($denomination1En)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $denomination1En)) {
                $denomination1En = str_replace('*', '%', $denomination1En);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN2Peer::DENOMINATION1_EN, $denomination1En, $comparison);
    }

    /**
     * Filter the query on the denomination2_en column
     *
     * Example usage:
     * <code>
     * $query->filterByDenomination2En('fooValue');   // WHERE denomination2_en = 'fooValue'
     * $query->filterByDenomination2En('%fooValue%'); // WHERE denomination2_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denomination2En The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN2Query The current query, for fluid interface
     */
    public function filterByDenomination2En($denomination2En = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($denomination2En)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $denomination2En)) {
                $denomination2En = str_replace('*', '%', $denomination2En);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN2Peer::DENOMINATION2_EN, $denomination2En, $comparison);
    }

    /**
     * Filter the query on the denomination1_es column
     *
     * Example usage:
     * <code>
     * $query->filterByDenomination1Es('fooValue');   // WHERE denomination1_es = 'fooValue'
     * $query->filterByDenomination1Es('%fooValue%'); // WHERE denomination1_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denomination1Es The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN2Query The current query, for fluid interface
     */
    public function filterByDenomination1Es($denomination1Es = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($denomination1Es)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $denomination1Es)) {
                $denomination1Es = str_replace('*', '%', $denomination1Es);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN2Peer::DENOMINATION1_ES, $denomination1Es, $comparison);
    }

    /**
     * Filter the query on the denomination2_es column
     *
     * Example usage:
     * <code>
     * $query->filterByDenomination2Es('fooValue');   // WHERE denomination2_es = 'fooValue'
     * $query->filterByDenomination2Es('%fooValue%'); // WHERE denomination2_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denomination2Es The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN2Query The current query, for fluid interface
     */
    public function filterByDenomination2Es($denomination2Es = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($denomination2Es)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $denomination2Es)) {
                $denomination2Es = str_replace('*', '%', $denomination2Es);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN2Peer::DENOMINATION2_ES, $denomination2Es, $comparison);
    }

    /**
     * Filter the query on the denomination1_su column
     *
     * Example usage:
     * <code>
     * $query->filterByDenomination1Su('fooValue');   // WHERE denomination1_su = 'fooValue'
     * $query->filterByDenomination1Su('%fooValue%'); // WHERE denomination1_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denomination1Su The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN2Query The current query, for fluid interface
     */
    public function filterByDenomination1Su($denomination1Su = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($denomination1Su)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $denomination1Su)) {
                $denomination1Su = str_replace('*', '%', $denomination1Su);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN2Peer::DENOMINATION1_SU, $denomination1Su, $comparison);
    }

    /**
     * Filter the query on the denomination2_su column
     *
     * Example usage:
     * <code>
     * $query->filterByDenomination2Su('fooValue');   // WHERE denomination2_su = 'fooValue'
     * $query->filterByDenomination2Su('%fooValue%'); // WHERE denomination2_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denomination2Su The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN2Query The current query, for fluid interface
     */
    public function filterByDenomination2Su($denomination2Su = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($denomination2Su)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $denomination2Su)) {
                $denomination2Su = str_replace('*', '%', $denomination2Su);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN2Peer::DENOMINATION2_SU, $denomination2Su, $comparison);
    }

    /**
     * Filter the query on the denomination1_du column
     *
     * Example usage:
     * <code>
     * $query->filterByDenomination1Du('fooValue');   // WHERE denomination1_du = 'fooValue'
     * $query->filterByDenomination1Du('%fooValue%'); // WHERE denomination1_du LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denomination1Du The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN2Query The current query, for fluid interface
     */
    public function filterByDenomination1Du($denomination1Du = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($denomination1Du)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $denomination1Du)) {
                $denomination1Du = str_replace('*', '%', $denomination1Du);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN2Peer::DENOMINATION1_DU, $denomination1Du, $comparison);
    }

    /**
     * Filter the query on the denomination2_du column
     *
     * Example usage:
     * <code>
     * $query->filterByDenomination2Du('fooValue');   // WHERE denomination2_du = 'fooValue'
     * $query->filterByDenomination2Du('%fooValue%'); // WHERE denomination2_du LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denomination2Du The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN2Query The current query, for fluid interface
     */
    public function filterByDenomination2Du($denomination2Du = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($denomination2Du)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $denomination2Du)) {
                $denomination2Du = str_replace('*', '%', $denomination2Du);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN2Peer::DENOMINATION2_DU, $denomination2Du, $comparison);
    }

    /**
     * Filter the query on the denomination1_cz column
     *
     * Example usage:
     * <code>
     * $query->filterByDenomination1Cz('fooValue');   // WHERE denomination1_cz = 'fooValue'
     * $query->filterByDenomination1Cz('%fooValue%'); // WHERE denomination1_cz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denomination1Cz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN2Query The current query, for fluid interface
     */
    public function filterByDenomination1Cz($denomination1Cz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($denomination1Cz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $denomination1Cz)) {
                $denomination1Cz = str_replace('*', '%', $denomination1Cz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN2Peer::DENOMINATION1_CZ, $denomination1Cz, $comparison);
    }

    /**
     * Filter the query on the denomination2_cz column
     *
     * Example usage:
     * <code>
     * $query->filterByDenomination2Cz('fooValue');   // WHERE denomination2_cz = 'fooValue'
     * $query->filterByDenomination2Cz('%fooValue%'); // WHERE denomination2_cz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denomination2Cz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN2Query The current query, for fluid interface
     */
    public function filterByDenomination2Cz($denomination2Cz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($denomination2Cz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $denomination2Cz)) {
                $denomination2Cz = str_replace('*', '%', $denomination2Cz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN2Peer::DENOMINATION2_CZ, $denomination2Cz, $comparison);
    }

    /**
     * Filter the query on the denomination1_it column
     *
     * Example usage:
     * <code>
     * $query->filterByDenomination1It('fooValue');   // WHERE denomination1_it = 'fooValue'
     * $query->filterByDenomination1It('%fooValue%'); // WHERE denomination1_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denomination1It The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN2Query The current query, for fluid interface
     */
    public function filterByDenomination1It($denomination1It = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($denomination1It)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $denomination1It)) {
                $denomination1It = str_replace('*', '%', $denomination1It);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN2Peer::DENOMINATION1_IT, $denomination1It, $comparison);
    }

    /**
     * Filter the query on the denomination2_it column
     *
     * Example usage:
     * <code>
     * $query->filterByDenomination2It('fooValue');   // WHERE denomination2_it = 'fooValue'
     * $query->filterByDenomination2It('%fooValue%'); // WHERE denomination2_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denomination2It The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN2Query The current query, for fluid interface
     */
    public function filterByDenomination2It($denomination2It = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($denomination2It)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $denomination2It)) {
                $denomination2It = str_replace('*', '%', $denomination2It);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN2Peer::DENOMINATION2_IT, $denomination2It, $comparison);
    }

    /**
     * Filter the query on the valeur_sub column
     *
     * Example usage:
     * <code>
     * $query->filterByValeurSub('fooValue');   // WHERE valeur_sub = 'fooValue'
     * $query->filterByValeurSub('%fooValue%'); // WHERE valeur_sub LIKE '%fooValue%'
     * </code>
     *
     * @param     string $valeurSub The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGeolocalisationN2Query The current query, for fluid interface
     */
    public function filterByValeurSub($valeurSub = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($valeurSub)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $valeurSub)) {
                $valeurSub = str_replace('*', '%', $valeurSub);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGeolocalisationN2Peer::VALEUR_SUB, $valeurSub, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonGeolocalisationN2 $commonGeolocalisationN2 Object to remove from the list of results
     *
     * @return CommonGeolocalisationN2Query The current query, for fluid interface
     */
    public function prune($commonGeolocalisationN2 = null)
    {
        if ($commonGeolocalisationN2) {
            $this->addUsingAlias(CommonGeolocalisationN2Peer::ID, $commonGeolocalisationN2->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
