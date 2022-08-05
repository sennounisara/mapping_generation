<?php


/**
 * Base class that represents a query for the 'formejuridique' table.
 *
 * 
 *
 * @method CommonFormejuridiqueQuery orderByFormejuridique($order = Criteria::ASC) Order by the formejuridique column
 * @method CommonFormejuridiqueQuery orderByOrdre($order = Criteria::ASC) Order by the ordre column
 * @method CommonFormejuridiqueQuery orderByLibelleFormejuridique($order = Criteria::ASC) Order by the libelle_formejuridique column
 * @method CommonFormejuridiqueQuery orderByLibelleFormejuridiqueFr($order = Criteria::ASC) Order by the libelle_formejuridique_fr column
 * @method CommonFormejuridiqueQuery orderByLibelleFormejuridiqueEn($order = Criteria::ASC) Order by the libelle_formejuridique_en column
 * @method CommonFormejuridiqueQuery orderByLibelleFormejuridiqueEs($order = Criteria::ASC) Order by the libelle_formejuridique_es column
 * @method CommonFormejuridiqueQuery orderByLibelleFormejuridiqueSu($order = Criteria::ASC) Order by the libelle_formejuridique_su column
 * @method CommonFormejuridiqueQuery orderByLibelleFormejuridiqueDu($order = Criteria::ASC) Order by the libelle_formejuridique_du column
 * @method CommonFormejuridiqueQuery orderByLibelleFormejuridiqueCz($order = Criteria::ASC) Order by the libelle_formejuridique_cz column
 * @method CommonFormejuridiqueQuery orderByLibelleFormejuridiqueAr($order = Criteria::ASC) Order by the libelle_formejuridique_ar column
 * @method CommonFormejuridiqueQuery orderByLibelleFormejuridiqueIt($order = Criteria::ASC) Order by the libelle_formejuridique_it column
 *
 * @method CommonFormejuridiqueQuery groupByFormejuridique() Group by the formejuridique column
 * @method CommonFormejuridiqueQuery groupByOrdre() Group by the ordre column
 * @method CommonFormejuridiqueQuery groupByLibelleFormejuridique() Group by the libelle_formejuridique column
 * @method CommonFormejuridiqueQuery groupByLibelleFormejuridiqueFr() Group by the libelle_formejuridique_fr column
 * @method CommonFormejuridiqueQuery groupByLibelleFormejuridiqueEn() Group by the libelle_formejuridique_en column
 * @method CommonFormejuridiqueQuery groupByLibelleFormejuridiqueEs() Group by the libelle_formejuridique_es column
 * @method CommonFormejuridiqueQuery groupByLibelleFormejuridiqueSu() Group by the libelle_formejuridique_su column
 * @method CommonFormejuridiqueQuery groupByLibelleFormejuridiqueDu() Group by the libelle_formejuridique_du column
 * @method CommonFormejuridiqueQuery groupByLibelleFormejuridiqueCz() Group by the libelle_formejuridique_cz column
 * @method CommonFormejuridiqueQuery groupByLibelleFormejuridiqueAr() Group by the libelle_formejuridique_ar column
 * @method CommonFormejuridiqueQuery groupByLibelleFormejuridiqueIt() Group by the libelle_formejuridique_it column
 *
 * @method CommonFormejuridiqueQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonFormejuridiqueQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonFormejuridiqueQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonFormejuridique findOne(PropelPDO $con = null) Return the first CommonFormejuridique matching the query
 * @method CommonFormejuridique findOneOrCreate(PropelPDO $con = null) Return the first CommonFormejuridique matching the query, or a new CommonFormejuridique object populated from the query conditions when no match is found
 *
 * @method CommonFormejuridique findOneByOrdre(int $ordre) Return the first CommonFormejuridique filtered by the ordre column
 * @method CommonFormejuridique findOneByLibelleFormejuridique(string $libelle_formejuridique) Return the first CommonFormejuridique filtered by the libelle_formejuridique column
 * @method CommonFormejuridique findOneByLibelleFormejuridiqueFr(string $libelle_formejuridique_fr) Return the first CommonFormejuridique filtered by the libelle_formejuridique_fr column
 * @method CommonFormejuridique findOneByLibelleFormejuridiqueEn(string $libelle_formejuridique_en) Return the first CommonFormejuridique filtered by the libelle_formejuridique_en column
 * @method CommonFormejuridique findOneByLibelleFormejuridiqueEs(string $libelle_formejuridique_es) Return the first CommonFormejuridique filtered by the libelle_formejuridique_es column
 * @method CommonFormejuridique findOneByLibelleFormejuridiqueSu(string $libelle_formejuridique_su) Return the first CommonFormejuridique filtered by the libelle_formejuridique_su column
 * @method CommonFormejuridique findOneByLibelleFormejuridiqueDu(string $libelle_formejuridique_du) Return the first CommonFormejuridique filtered by the libelle_formejuridique_du column
 * @method CommonFormejuridique findOneByLibelleFormejuridiqueCz(string $libelle_formejuridique_cz) Return the first CommonFormejuridique filtered by the libelle_formejuridique_cz column
 * @method CommonFormejuridique findOneByLibelleFormejuridiqueAr(string $libelle_formejuridique_ar) Return the first CommonFormejuridique filtered by the libelle_formejuridique_ar column
 * @method CommonFormejuridique findOneByLibelleFormejuridiqueIt(string $libelle_formejuridique_it) Return the first CommonFormejuridique filtered by the libelle_formejuridique_it column
 *
 * @method array findByFormejuridique(string $formejuridique) Return CommonFormejuridique objects filtered by the formejuridique column
 * @method array findByOrdre(int $ordre) Return CommonFormejuridique objects filtered by the ordre column
 * @method array findByLibelleFormejuridique(string $libelle_formejuridique) Return CommonFormejuridique objects filtered by the libelle_formejuridique column
 * @method array findByLibelleFormejuridiqueFr(string $libelle_formejuridique_fr) Return CommonFormejuridique objects filtered by the libelle_formejuridique_fr column
 * @method array findByLibelleFormejuridiqueEn(string $libelle_formejuridique_en) Return CommonFormejuridique objects filtered by the libelle_formejuridique_en column
 * @method array findByLibelleFormejuridiqueEs(string $libelle_formejuridique_es) Return CommonFormejuridique objects filtered by the libelle_formejuridique_es column
 * @method array findByLibelleFormejuridiqueSu(string $libelle_formejuridique_su) Return CommonFormejuridique objects filtered by the libelle_formejuridique_su column
 * @method array findByLibelleFormejuridiqueDu(string $libelle_formejuridique_du) Return CommonFormejuridique objects filtered by the libelle_formejuridique_du column
 * @method array findByLibelleFormejuridiqueCz(string $libelle_formejuridique_cz) Return CommonFormejuridique objects filtered by the libelle_formejuridique_cz column
 * @method array findByLibelleFormejuridiqueAr(string $libelle_formejuridique_ar) Return CommonFormejuridique objects filtered by the libelle_formejuridique_ar column
 * @method array findByLibelleFormejuridiqueIt(string $libelle_formejuridique_it) Return CommonFormejuridique objects filtered by the libelle_formejuridique_it column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonFormejuridiqueQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonFormejuridiqueQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonFormejuridique', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonFormejuridiqueQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonFormejuridiqueQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonFormejuridiqueQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonFormejuridiqueQuery) {
            return $criteria;
        }
        $query = new CommonFormejuridiqueQuery();
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
     * @return   CommonFormejuridique|CommonFormejuridique[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonFormejuridiquePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonFormejuridiquePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonFormejuridique A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByFormejuridique($key, $con = null)
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
     * @return                 CommonFormejuridique A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `formejuridique`, `ordre`, `libelle_formejuridique`, `libelle_formejuridique_fr`, `libelle_formejuridique_en`, `libelle_formejuridique_es`, `libelle_formejuridique_su`, `libelle_formejuridique_du`, `libelle_formejuridique_cz`, `libelle_formejuridique_ar`, `libelle_formejuridique_it` FROM `formejuridique` WHERE `formejuridique` = :p0';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonFormejuridique();
            $obj->hydrate($row);
            CommonFormejuridiquePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonFormejuridique|CommonFormejuridique[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonFormejuridique[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonFormejuridiqueQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonFormejuridiquePeer::FORMEJURIDIQUE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonFormejuridiqueQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonFormejuridiquePeer::FORMEJURIDIQUE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the formejuridique column
     *
     * Example usage:
     * <code>
     * $query->filterByFormejuridique('fooValue');   // WHERE formejuridique = 'fooValue'
     * $query->filterByFormejuridique('%fooValue%'); // WHERE formejuridique LIKE '%fooValue%'
     * </code>
     *
     * @param     string $formejuridique The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFormejuridiqueQuery The current query, for fluid interface
     */
    public function filterByFormejuridique($formejuridique = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($formejuridique)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $formejuridique)) {
                $formejuridique = str_replace('*', '%', $formejuridique);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFormejuridiquePeer::FORMEJURIDIQUE, $formejuridique, $comparison);
    }

    /**
     * Filter the query on the ordre column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdre(1234); // WHERE ordre = 1234
     * $query->filterByOrdre(array(12, 34)); // WHERE ordre IN (12, 34)
     * $query->filterByOrdre(array('min' => 12)); // WHERE ordre >= 12
     * $query->filterByOrdre(array('max' => 12)); // WHERE ordre <= 12
     * </code>
     *
     * @param     mixed $ordre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFormejuridiqueQuery The current query, for fluid interface
     */
    public function filterByOrdre($ordre = null, $comparison = null)
    {
        if (is_array($ordre)) {
            $useMinMax = false;
            if (isset($ordre['min'])) {
                $this->addUsingAlias(CommonFormejuridiquePeer::ORDRE, $ordre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordre['max'])) {
                $this->addUsingAlias(CommonFormejuridiquePeer::ORDRE, $ordre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonFormejuridiquePeer::ORDRE, $ordre, $comparison);
    }

    /**
     * Filter the query on the libelle_formejuridique column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleFormejuridique('fooValue');   // WHERE libelle_formejuridique = 'fooValue'
     * $query->filterByLibelleFormejuridique('%fooValue%'); // WHERE libelle_formejuridique LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleFormejuridique The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFormejuridiqueQuery The current query, for fluid interface
     */
    public function filterByLibelleFormejuridique($libelleFormejuridique = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleFormejuridique)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleFormejuridique)) {
                $libelleFormejuridique = str_replace('*', '%', $libelleFormejuridique);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFormejuridiquePeer::LIBELLE_FORMEJURIDIQUE, $libelleFormejuridique, $comparison);
    }

    /**
     * Filter the query on the libelle_formejuridique_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleFormejuridiqueFr('fooValue');   // WHERE libelle_formejuridique_fr = 'fooValue'
     * $query->filterByLibelleFormejuridiqueFr('%fooValue%'); // WHERE libelle_formejuridique_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleFormejuridiqueFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFormejuridiqueQuery The current query, for fluid interface
     */
    public function filterByLibelleFormejuridiqueFr($libelleFormejuridiqueFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleFormejuridiqueFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleFormejuridiqueFr)) {
                $libelleFormejuridiqueFr = str_replace('*', '%', $libelleFormejuridiqueFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFormejuridiquePeer::LIBELLE_FORMEJURIDIQUE_FR, $libelleFormejuridiqueFr, $comparison);
    }

    /**
     * Filter the query on the libelle_formejuridique_en column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleFormejuridiqueEn('fooValue');   // WHERE libelle_formejuridique_en = 'fooValue'
     * $query->filterByLibelleFormejuridiqueEn('%fooValue%'); // WHERE libelle_formejuridique_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleFormejuridiqueEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFormejuridiqueQuery The current query, for fluid interface
     */
    public function filterByLibelleFormejuridiqueEn($libelleFormejuridiqueEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleFormejuridiqueEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleFormejuridiqueEn)) {
                $libelleFormejuridiqueEn = str_replace('*', '%', $libelleFormejuridiqueEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFormejuridiquePeer::LIBELLE_FORMEJURIDIQUE_EN, $libelleFormejuridiqueEn, $comparison);
    }

    /**
     * Filter the query on the libelle_formejuridique_es column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleFormejuridiqueEs('fooValue');   // WHERE libelle_formejuridique_es = 'fooValue'
     * $query->filterByLibelleFormejuridiqueEs('%fooValue%'); // WHERE libelle_formejuridique_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleFormejuridiqueEs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFormejuridiqueQuery The current query, for fluid interface
     */
    public function filterByLibelleFormejuridiqueEs($libelleFormejuridiqueEs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleFormejuridiqueEs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleFormejuridiqueEs)) {
                $libelleFormejuridiqueEs = str_replace('*', '%', $libelleFormejuridiqueEs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFormejuridiquePeer::LIBELLE_FORMEJURIDIQUE_ES, $libelleFormejuridiqueEs, $comparison);
    }

    /**
     * Filter the query on the libelle_formejuridique_su column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleFormejuridiqueSu('fooValue');   // WHERE libelle_formejuridique_su = 'fooValue'
     * $query->filterByLibelleFormejuridiqueSu('%fooValue%'); // WHERE libelle_formejuridique_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleFormejuridiqueSu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFormejuridiqueQuery The current query, for fluid interface
     */
    public function filterByLibelleFormejuridiqueSu($libelleFormejuridiqueSu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleFormejuridiqueSu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleFormejuridiqueSu)) {
                $libelleFormejuridiqueSu = str_replace('*', '%', $libelleFormejuridiqueSu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFormejuridiquePeer::LIBELLE_FORMEJURIDIQUE_SU, $libelleFormejuridiqueSu, $comparison);
    }

    /**
     * Filter the query on the libelle_formejuridique_du column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleFormejuridiqueDu('fooValue');   // WHERE libelle_formejuridique_du = 'fooValue'
     * $query->filterByLibelleFormejuridiqueDu('%fooValue%'); // WHERE libelle_formejuridique_du LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleFormejuridiqueDu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFormejuridiqueQuery The current query, for fluid interface
     */
    public function filterByLibelleFormejuridiqueDu($libelleFormejuridiqueDu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleFormejuridiqueDu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleFormejuridiqueDu)) {
                $libelleFormejuridiqueDu = str_replace('*', '%', $libelleFormejuridiqueDu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFormejuridiquePeer::LIBELLE_FORMEJURIDIQUE_DU, $libelleFormejuridiqueDu, $comparison);
    }

    /**
     * Filter the query on the libelle_formejuridique_cz column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleFormejuridiqueCz('fooValue');   // WHERE libelle_formejuridique_cz = 'fooValue'
     * $query->filterByLibelleFormejuridiqueCz('%fooValue%'); // WHERE libelle_formejuridique_cz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleFormejuridiqueCz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFormejuridiqueQuery The current query, for fluid interface
     */
    public function filterByLibelleFormejuridiqueCz($libelleFormejuridiqueCz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleFormejuridiqueCz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleFormejuridiqueCz)) {
                $libelleFormejuridiqueCz = str_replace('*', '%', $libelleFormejuridiqueCz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFormejuridiquePeer::LIBELLE_FORMEJURIDIQUE_CZ, $libelleFormejuridiqueCz, $comparison);
    }

    /**
     * Filter the query on the libelle_formejuridique_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleFormejuridiqueAr('fooValue');   // WHERE libelle_formejuridique_ar = 'fooValue'
     * $query->filterByLibelleFormejuridiqueAr('%fooValue%'); // WHERE libelle_formejuridique_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleFormejuridiqueAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFormejuridiqueQuery The current query, for fluid interface
     */
    public function filterByLibelleFormejuridiqueAr($libelleFormejuridiqueAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleFormejuridiqueAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleFormejuridiqueAr)) {
                $libelleFormejuridiqueAr = str_replace('*', '%', $libelleFormejuridiqueAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFormejuridiquePeer::LIBELLE_FORMEJURIDIQUE_AR, $libelleFormejuridiqueAr, $comparison);
    }

    /**
     * Filter the query on the libelle_formejuridique_it column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleFormejuridiqueIt('fooValue');   // WHERE libelle_formejuridique_it = 'fooValue'
     * $query->filterByLibelleFormejuridiqueIt('%fooValue%'); // WHERE libelle_formejuridique_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleFormejuridiqueIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFormejuridiqueQuery The current query, for fluid interface
     */
    public function filterByLibelleFormejuridiqueIt($libelleFormejuridiqueIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleFormejuridiqueIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleFormejuridiqueIt)) {
                $libelleFormejuridiqueIt = str_replace('*', '%', $libelleFormejuridiqueIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFormejuridiquePeer::LIBELLE_FORMEJURIDIQUE_IT, $libelleFormejuridiqueIt, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonFormejuridique $commonFormejuridique Object to remove from the list of results
     *
     * @return CommonFormejuridiqueQuery The current query, for fluid interface
     */
    public function prune($commonFormejuridique = null)
    {
        if ($commonFormejuridique) {
            $this->addUsingAlias(CommonFormejuridiquePeer::FORMEJURIDIQUE, $commonFormejuridique->getFormejuridique(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
