<?php


/**
 * Base class that represents a query for the 'TypeAvis' table.
 *
 * 
 *
 * @method CommonTypeAvisQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonTypeAvisQuery orderByIntituleAvis($order = Criteria::ASC) Order by the intitule_avis column
 * @method CommonTypeAvisQuery orderByIntituleAvisFr($order = Criteria::ASC) Order by the intitule_avis_fr column
 * @method CommonTypeAvisQuery orderByIntituleAvisEn($order = Criteria::ASC) Order by the intitule_avis_en column
 * @method CommonTypeAvisQuery orderByIntituleAvisEs($order = Criteria::ASC) Order by the intitule_avis_es column
 * @method CommonTypeAvisQuery orderByIntituleAvisSu($order = Criteria::ASC) Order by the intitule_avis_su column
 * @method CommonTypeAvisQuery orderByIntituleAvisDu($order = Criteria::ASC) Order by the intitule_avis_du column
 * @method CommonTypeAvisQuery orderByIntituleAvisCz($order = Criteria::ASC) Order by the intitule_avis_cz column
 * @method CommonTypeAvisQuery orderByIntituleAvisAr($order = Criteria::ASC) Order by the intitule_avis_ar column
 * @method CommonTypeAvisQuery orderByAbbreviation($order = Criteria::ASC) Order by the abbreviation column
 * @method CommonTypeAvisQuery orderByIdTypeAvisAnm($order = Criteria::ASC) Order by the id_type_avis_ANM column
 * @method CommonTypeAvisQuery orderByIntituleAvisIt($order = Criteria::ASC) Order by the intitule_avis_it column
 *
 * @method CommonTypeAvisQuery groupById() Group by the id column
 * @method CommonTypeAvisQuery groupByIntituleAvis() Group by the intitule_avis column
 * @method CommonTypeAvisQuery groupByIntituleAvisFr() Group by the intitule_avis_fr column
 * @method CommonTypeAvisQuery groupByIntituleAvisEn() Group by the intitule_avis_en column
 * @method CommonTypeAvisQuery groupByIntituleAvisEs() Group by the intitule_avis_es column
 * @method CommonTypeAvisQuery groupByIntituleAvisSu() Group by the intitule_avis_su column
 * @method CommonTypeAvisQuery groupByIntituleAvisDu() Group by the intitule_avis_du column
 * @method CommonTypeAvisQuery groupByIntituleAvisCz() Group by the intitule_avis_cz column
 * @method CommonTypeAvisQuery groupByIntituleAvisAr() Group by the intitule_avis_ar column
 * @method CommonTypeAvisQuery groupByAbbreviation() Group by the abbreviation column
 * @method CommonTypeAvisQuery groupByIdTypeAvisAnm() Group by the id_type_avis_ANM column
 * @method CommonTypeAvisQuery groupByIntituleAvisIt() Group by the intitule_avis_it column
 *
 * @method CommonTypeAvisQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTypeAvisQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTypeAvisQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTypeAvis findOne(PropelPDO $con = null) Return the first CommonTypeAvis matching the query
 * @method CommonTypeAvis findOneOrCreate(PropelPDO $con = null) Return the first CommonTypeAvis matching the query, or a new CommonTypeAvis object populated from the query conditions when no match is found
 *
 * @method CommonTypeAvis findOneByIntituleAvis(string $intitule_avis) Return the first CommonTypeAvis filtered by the intitule_avis column
 * @method CommonTypeAvis findOneByIntituleAvisFr(string $intitule_avis_fr) Return the first CommonTypeAvis filtered by the intitule_avis_fr column
 * @method CommonTypeAvis findOneByIntituleAvisEn(string $intitule_avis_en) Return the first CommonTypeAvis filtered by the intitule_avis_en column
 * @method CommonTypeAvis findOneByIntituleAvisEs(string $intitule_avis_es) Return the first CommonTypeAvis filtered by the intitule_avis_es column
 * @method CommonTypeAvis findOneByIntituleAvisSu(string $intitule_avis_su) Return the first CommonTypeAvis filtered by the intitule_avis_su column
 * @method CommonTypeAvis findOneByIntituleAvisDu(string $intitule_avis_du) Return the first CommonTypeAvis filtered by the intitule_avis_du column
 * @method CommonTypeAvis findOneByIntituleAvisCz(string $intitule_avis_cz) Return the first CommonTypeAvis filtered by the intitule_avis_cz column
 * @method CommonTypeAvis findOneByIntituleAvisAr(string $intitule_avis_ar) Return the first CommonTypeAvis filtered by the intitule_avis_ar column
 * @method CommonTypeAvis findOneByAbbreviation(string $abbreviation) Return the first CommonTypeAvis filtered by the abbreviation column
 * @method CommonTypeAvis findOneByIdTypeAvisAnm(int $id_type_avis_ANM) Return the first CommonTypeAvis filtered by the id_type_avis_ANM column
 * @method CommonTypeAvis findOneByIntituleAvisIt(string $intitule_avis_it) Return the first CommonTypeAvis filtered by the intitule_avis_it column
 *
 * @method array findById(int $id) Return CommonTypeAvis objects filtered by the id column
 * @method array findByIntituleAvis(string $intitule_avis) Return CommonTypeAvis objects filtered by the intitule_avis column
 * @method array findByIntituleAvisFr(string $intitule_avis_fr) Return CommonTypeAvis objects filtered by the intitule_avis_fr column
 * @method array findByIntituleAvisEn(string $intitule_avis_en) Return CommonTypeAvis objects filtered by the intitule_avis_en column
 * @method array findByIntituleAvisEs(string $intitule_avis_es) Return CommonTypeAvis objects filtered by the intitule_avis_es column
 * @method array findByIntituleAvisSu(string $intitule_avis_su) Return CommonTypeAvis objects filtered by the intitule_avis_su column
 * @method array findByIntituleAvisDu(string $intitule_avis_du) Return CommonTypeAvis objects filtered by the intitule_avis_du column
 * @method array findByIntituleAvisCz(string $intitule_avis_cz) Return CommonTypeAvis objects filtered by the intitule_avis_cz column
 * @method array findByIntituleAvisAr(string $intitule_avis_ar) Return CommonTypeAvis objects filtered by the intitule_avis_ar column
 * @method array findByAbbreviation(string $abbreviation) Return CommonTypeAvis objects filtered by the abbreviation column
 * @method array findByIdTypeAvisAnm(int $id_type_avis_ANM) Return CommonTypeAvis objects filtered by the id_type_avis_ANM column
 * @method array findByIntituleAvisIt(string $intitule_avis_it) Return CommonTypeAvis objects filtered by the intitule_avis_it column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTypeAvisQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTypeAvisQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTypeAvis', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTypeAvisQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTypeAvisQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTypeAvisQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTypeAvisQuery) {
            return $criteria;
        }
        $query = new CommonTypeAvisQuery();
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
     * @return   CommonTypeAvis|CommonTypeAvis[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTypeAvisPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTypeAvisPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTypeAvis A model object, or null if the key is not found
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
     * @return                 CommonTypeAvis A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `intitule_avis`, `intitule_avis_fr`, `intitule_avis_en`, `intitule_avis_es`, `intitule_avis_su`, `intitule_avis_du`, `intitule_avis_cz`, `intitule_avis_ar`, `abbreviation`, `id_type_avis_ANM`, `intitule_avis_it` FROM `TypeAvis` WHERE `id` = :p0';
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
            $obj = new CommonTypeAvis();
            $obj->hydrate($row);
            CommonTypeAvisPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonTypeAvis|CommonTypeAvis[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTypeAvis[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTypeAvisQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonTypeAvisPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTypeAvisQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonTypeAvisPeer::ID, $keys, Criteria::IN);
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
     * @return CommonTypeAvisQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonTypeAvisPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonTypeAvisPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTypeAvisPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the intitule_avis column
     *
     * Example usage:
     * <code>
     * $query->filterByIntituleAvis('fooValue');   // WHERE intitule_avis = 'fooValue'
     * $query->filterByIntituleAvis('%fooValue%'); // WHERE intitule_avis LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intituleAvis The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeAvisQuery The current query, for fluid interface
     */
    public function filterByIntituleAvis($intituleAvis = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intituleAvis)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $intituleAvis)) {
                $intituleAvis = str_replace('*', '%', $intituleAvis);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeAvisPeer::INTITULE_AVIS, $intituleAvis, $comparison);
    }

    /**
     * Filter the query on the intitule_avis_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByIntituleAvisFr('fooValue');   // WHERE intitule_avis_fr = 'fooValue'
     * $query->filterByIntituleAvisFr('%fooValue%'); // WHERE intitule_avis_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intituleAvisFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeAvisQuery The current query, for fluid interface
     */
    public function filterByIntituleAvisFr($intituleAvisFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intituleAvisFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $intituleAvisFr)) {
                $intituleAvisFr = str_replace('*', '%', $intituleAvisFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeAvisPeer::INTITULE_AVIS_FR, $intituleAvisFr, $comparison);
    }

    /**
     * Filter the query on the intitule_avis_en column
     *
     * Example usage:
     * <code>
     * $query->filterByIntituleAvisEn('fooValue');   // WHERE intitule_avis_en = 'fooValue'
     * $query->filterByIntituleAvisEn('%fooValue%'); // WHERE intitule_avis_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intituleAvisEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeAvisQuery The current query, for fluid interface
     */
    public function filterByIntituleAvisEn($intituleAvisEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intituleAvisEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $intituleAvisEn)) {
                $intituleAvisEn = str_replace('*', '%', $intituleAvisEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeAvisPeer::INTITULE_AVIS_EN, $intituleAvisEn, $comparison);
    }

    /**
     * Filter the query on the intitule_avis_es column
     *
     * Example usage:
     * <code>
     * $query->filterByIntituleAvisEs('fooValue');   // WHERE intitule_avis_es = 'fooValue'
     * $query->filterByIntituleAvisEs('%fooValue%'); // WHERE intitule_avis_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intituleAvisEs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeAvisQuery The current query, for fluid interface
     */
    public function filterByIntituleAvisEs($intituleAvisEs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intituleAvisEs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $intituleAvisEs)) {
                $intituleAvisEs = str_replace('*', '%', $intituleAvisEs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeAvisPeer::INTITULE_AVIS_ES, $intituleAvisEs, $comparison);
    }

    /**
     * Filter the query on the intitule_avis_su column
     *
     * Example usage:
     * <code>
     * $query->filterByIntituleAvisSu('fooValue');   // WHERE intitule_avis_su = 'fooValue'
     * $query->filterByIntituleAvisSu('%fooValue%'); // WHERE intitule_avis_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intituleAvisSu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeAvisQuery The current query, for fluid interface
     */
    public function filterByIntituleAvisSu($intituleAvisSu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intituleAvisSu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $intituleAvisSu)) {
                $intituleAvisSu = str_replace('*', '%', $intituleAvisSu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeAvisPeer::INTITULE_AVIS_SU, $intituleAvisSu, $comparison);
    }

    /**
     * Filter the query on the intitule_avis_du column
     *
     * Example usage:
     * <code>
     * $query->filterByIntituleAvisDu('fooValue');   // WHERE intitule_avis_du = 'fooValue'
     * $query->filterByIntituleAvisDu('%fooValue%'); // WHERE intitule_avis_du LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intituleAvisDu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeAvisQuery The current query, for fluid interface
     */
    public function filterByIntituleAvisDu($intituleAvisDu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intituleAvisDu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $intituleAvisDu)) {
                $intituleAvisDu = str_replace('*', '%', $intituleAvisDu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeAvisPeer::INTITULE_AVIS_DU, $intituleAvisDu, $comparison);
    }

    /**
     * Filter the query on the intitule_avis_cz column
     *
     * Example usage:
     * <code>
     * $query->filterByIntituleAvisCz('fooValue');   // WHERE intitule_avis_cz = 'fooValue'
     * $query->filterByIntituleAvisCz('%fooValue%'); // WHERE intitule_avis_cz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intituleAvisCz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeAvisQuery The current query, for fluid interface
     */
    public function filterByIntituleAvisCz($intituleAvisCz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intituleAvisCz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $intituleAvisCz)) {
                $intituleAvisCz = str_replace('*', '%', $intituleAvisCz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeAvisPeer::INTITULE_AVIS_CZ, $intituleAvisCz, $comparison);
    }

    /**
     * Filter the query on the intitule_avis_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByIntituleAvisAr('fooValue');   // WHERE intitule_avis_ar = 'fooValue'
     * $query->filterByIntituleAvisAr('%fooValue%'); // WHERE intitule_avis_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intituleAvisAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeAvisQuery The current query, for fluid interface
     */
    public function filterByIntituleAvisAr($intituleAvisAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intituleAvisAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $intituleAvisAr)) {
                $intituleAvisAr = str_replace('*', '%', $intituleAvisAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeAvisPeer::INTITULE_AVIS_AR, $intituleAvisAr, $comparison);
    }

    /**
     * Filter the query on the abbreviation column
     *
     * Example usage:
     * <code>
     * $query->filterByAbbreviation('fooValue');   // WHERE abbreviation = 'fooValue'
     * $query->filterByAbbreviation('%fooValue%'); // WHERE abbreviation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $abbreviation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeAvisQuery The current query, for fluid interface
     */
    public function filterByAbbreviation($abbreviation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($abbreviation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $abbreviation)) {
                $abbreviation = str_replace('*', '%', $abbreviation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeAvisPeer::ABBREVIATION, $abbreviation, $comparison);
    }

    /**
     * Filter the query on the id_type_avis_ANM column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTypeAvisAnm(1234); // WHERE id_type_avis_ANM = 1234
     * $query->filterByIdTypeAvisAnm(array(12, 34)); // WHERE id_type_avis_ANM IN (12, 34)
     * $query->filterByIdTypeAvisAnm(array('min' => 12)); // WHERE id_type_avis_ANM >= 12
     * $query->filterByIdTypeAvisAnm(array('max' => 12)); // WHERE id_type_avis_ANM <= 12
     * </code>
     *
     * @param     mixed $idTypeAvisAnm The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeAvisQuery The current query, for fluid interface
     */
    public function filterByIdTypeAvisAnm($idTypeAvisAnm = null, $comparison = null)
    {
        if (is_array($idTypeAvisAnm)) {
            $useMinMax = false;
            if (isset($idTypeAvisAnm['min'])) {
                $this->addUsingAlias(CommonTypeAvisPeer::ID_TYPE_AVIS_ANM, $idTypeAvisAnm['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeAvisAnm['max'])) {
                $this->addUsingAlias(CommonTypeAvisPeer::ID_TYPE_AVIS_ANM, $idTypeAvisAnm['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTypeAvisPeer::ID_TYPE_AVIS_ANM, $idTypeAvisAnm, $comparison);
    }

    /**
     * Filter the query on the intitule_avis_it column
     *
     * Example usage:
     * <code>
     * $query->filterByIntituleAvisIt('fooValue');   // WHERE intitule_avis_it = 'fooValue'
     * $query->filterByIntituleAvisIt('%fooValue%'); // WHERE intitule_avis_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intituleAvisIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeAvisQuery The current query, for fluid interface
     */
    public function filterByIntituleAvisIt($intituleAvisIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intituleAvisIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $intituleAvisIt)) {
                $intituleAvisIt = str_replace('*', '%', $intituleAvisIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeAvisPeer::INTITULE_AVIS_IT, $intituleAvisIt, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTypeAvis $commonTypeAvis Object to remove from the list of results
     *
     * @return CommonTypeAvisQuery The current query, for fluid interface
     */
    public function prune($commonTypeAvis = null)
    {
        if ($commonTypeAvis) {
            $this->addUsingAlias(CommonTypeAvisPeer::ID, $commonTypeAvis->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
