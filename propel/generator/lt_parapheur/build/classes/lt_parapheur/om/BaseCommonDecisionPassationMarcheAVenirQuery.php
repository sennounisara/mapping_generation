<?php


/**
 * Base class that represents a query for the 'DecisionPassationMarcheAVenir' table.
 *
 * 
 *
 * @method CommonDecisionPassationMarcheAVenirQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonDecisionPassationMarcheAVenirQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method CommonDecisionPassationMarcheAVenirQuery orderByLibelleFr($order = Criteria::ASC) Order by the libelle_fr column
 * @method CommonDecisionPassationMarcheAVenirQuery orderByLibelleEn($order = Criteria::ASC) Order by the libelle_en column
 * @method CommonDecisionPassationMarcheAVenirQuery orderByLibelleEs($order = Criteria::ASC) Order by the libelle_es column
 * @method CommonDecisionPassationMarcheAVenirQuery orderByLibelleSu($order = Criteria::ASC) Order by the libelle_su column
 * @method CommonDecisionPassationMarcheAVenirQuery orderByLibelleDu($order = Criteria::ASC) Order by the libelle_du column
 * @method CommonDecisionPassationMarcheAVenirQuery orderByLibelleCz($order = Criteria::ASC) Order by the libelle_cz column
 * @method CommonDecisionPassationMarcheAVenirQuery orderByLibelleAr($order = Criteria::ASC) Order by the libelle_ar column
 * @method CommonDecisionPassationMarcheAVenirQuery orderByLibelleIt($order = Criteria::ASC) Order by the libelle_it column
 *
 * @method CommonDecisionPassationMarcheAVenirQuery groupById() Group by the id column
 * @method CommonDecisionPassationMarcheAVenirQuery groupByLibelle() Group by the libelle column
 * @method CommonDecisionPassationMarcheAVenirQuery groupByLibelleFr() Group by the libelle_fr column
 * @method CommonDecisionPassationMarcheAVenirQuery groupByLibelleEn() Group by the libelle_en column
 * @method CommonDecisionPassationMarcheAVenirQuery groupByLibelleEs() Group by the libelle_es column
 * @method CommonDecisionPassationMarcheAVenirQuery groupByLibelleSu() Group by the libelle_su column
 * @method CommonDecisionPassationMarcheAVenirQuery groupByLibelleDu() Group by the libelle_du column
 * @method CommonDecisionPassationMarcheAVenirQuery groupByLibelleCz() Group by the libelle_cz column
 * @method CommonDecisionPassationMarcheAVenirQuery groupByLibelleAr() Group by the libelle_ar column
 * @method CommonDecisionPassationMarcheAVenirQuery groupByLibelleIt() Group by the libelle_it column
 *
 * @method CommonDecisionPassationMarcheAVenirQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonDecisionPassationMarcheAVenirQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonDecisionPassationMarcheAVenirQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonDecisionPassationMarcheAVenir findOne(PropelPDO $con = null) Return the first CommonDecisionPassationMarcheAVenir matching the query
 * @method CommonDecisionPassationMarcheAVenir findOneOrCreate(PropelPDO $con = null) Return the first CommonDecisionPassationMarcheAVenir matching the query, or a new CommonDecisionPassationMarcheAVenir object populated from the query conditions when no match is found
 *
 * @method CommonDecisionPassationMarcheAVenir findOneByLibelle(string $libelle) Return the first CommonDecisionPassationMarcheAVenir filtered by the libelle column
 * @method CommonDecisionPassationMarcheAVenir findOneByLibelleFr(string $libelle_fr) Return the first CommonDecisionPassationMarcheAVenir filtered by the libelle_fr column
 * @method CommonDecisionPassationMarcheAVenir findOneByLibelleEn(string $libelle_en) Return the first CommonDecisionPassationMarcheAVenir filtered by the libelle_en column
 * @method CommonDecisionPassationMarcheAVenir findOneByLibelleEs(string $libelle_es) Return the first CommonDecisionPassationMarcheAVenir filtered by the libelle_es column
 * @method CommonDecisionPassationMarcheAVenir findOneByLibelleSu(string $libelle_su) Return the first CommonDecisionPassationMarcheAVenir filtered by the libelle_su column
 * @method CommonDecisionPassationMarcheAVenir findOneByLibelleDu(string $libelle_du) Return the first CommonDecisionPassationMarcheAVenir filtered by the libelle_du column
 * @method CommonDecisionPassationMarcheAVenir findOneByLibelleCz(string $libelle_cz) Return the first CommonDecisionPassationMarcheAVenir filtered by the libelle_cz column
 * @method CommonDecisionPassationMarcheAVenir findOneByLibelleAr(string $libelle_ar) Return the first CommonDecisionPassationMarcheAVenir filtered by the libelle_ar column
 * @method CommonDecisionPassationMarcheAVenir findOneByLibelleIt(string $libelle_it) Return the first CommonDecisionPassationMarcheAVenir filtered by the libelle_it column
 *
 * @method array findById(int $id) Return CommonDecisionPassationMarcheAVenir objects filtered by the id column
 * @method array findByLibelle(string $libelle) Return CommonDecisionPassationMarcheAVenir objects filtered by the libelle column
 * @method array findByLibelleFr(string $libelle_fr) Return CommonDecisionPassationMarcheAVenir objects filtered by the libelle_fr column
 * @method array findByLibelleEn(string $libelle_en) Return CommonDecisionPassationMarcheAVenir objects filtered by the libelle_en column
 * @method array findByLibelleEs(string $libelle_es) Return CommonDecisionPassationMarcheAVenir objects filtered by the libelle_es column
 * @method array findByLibelleSu(string $libelle_su) Return CommonDecisionPassationMarcheAVenir objects filtered by the libelle_su column
 * @method array findByLibelleDu(string $libelle_du) Return CommonDecisionPassationMarcheAVenir objects filtered by the libelle_du column
 * @method array findByLibelleCz(string $libelle_cz) Return CommonDecisionPassationMarcheAVenir objects filtered by the libelle_cz column
 * @method array findByLibelleAr(string $libelle_ar) Return CommonDecisionPassationMarcheAVenir objects filtered by the libelle_ar column
 * @method array findByLibelleIt(string $libelle_it) Return CommonDecisionPassationMarcheAVenir objects filtered by the libelle_it column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonDecisionPassationMarcheAVenirQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonDecisionPassationMarcheAVenirQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonDecisionPassationMarcheAVenir', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonDecisionPassationMarcheAVenirQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonDecisionPassationMarcheAVenirQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonDecisionPassationMarcheAVenirQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonDecisionPassationMarcheAVenirQuery) {
            return $criteria;
        }
        $query = new CommonDecisionPassationMarcheAVenirQuery();
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
     * @return   CommonDecisionPassationMarcheAVenir|CommonDecisionPassationMarcheAVenir[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonDecisionPassationMarcheAVenirPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonDecisionPassationMarcheAVenirPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonDecisionPassationMarcheAVenir A model object, or null if the key is not found
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
     * @return                 CommonDecisionPassationMarcheAVenir A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `libelle`, `libelle_fr`, `libelle_en`, `libelle_es`, `libelle_su`, `libelle_du`, `libelle_cz`, `libelle_ar`, `libelle_it` FROM `DecisionPassationMarcheAVenir` WHERE `id` = :p0';
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
            $obj = new CommonDecisionPassationMarcheAVenir();
            $obj->hydrate($row);
            CommonDecisionPassationMarcheAVenirPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonDecisionPassationMarcheAVenir|CommonDecisionPassationMarcheAVenir[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonDecisionPassationMarcheAVenir[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonDecisionPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonDecisionPassationMarcheAVenirPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonDecisionPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonDecisionPassationMarcheAVenirPeer::ID, $keys, Criteria::IN);
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
     * @return CommonDecisionPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonDecisionPassationMarcheAVenirPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonDecisionPassationMarcheAVenirPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDecisionPassationMarcheAVenirPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelle('fooValue');   // WHERE libelle = 'fooValue'
     * $query->filterByLibelle('%fooValue%'); // WHERE libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterByLibelle($libelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelle)) {
                $libelle = str_replace('*', '%', $libelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDecisionPassationMarcheAVenirPeer::LIBELLE, $libelle, $comparison);
    }

    /**
     * Filter the query on the libelle_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleFr('fooValue');   // WHERE libelle_fr = 'fooValue'
     * $query->filterByLibelleFr('%fooValue%'); // WHERE libelle_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterByLibelleFr($libelleFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleFr)) {
                $libelleFr = str_replace('*', '%', $libelleFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDecisionPassationMarcheAVenirPeer::LIBELLE_FR, $libelleFr, $comparison);
    }

    /**
     * Filter the query on the libelle_en column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleEn('fooValue');   // WHERE libelle_en = 'fooValue'
     * $query->filterByLibelleEn('%fooValue%'); // WHERE libelle_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterByLibelleEn($libelleEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleEn)) {
                $libelleEn = str_replace('*', '%', $libelleEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDecisionPassationMarcheAVenirPeer::LIBELLE_EN, $libelleEn, $comparison);
    }

    /**
     * Filter the query on the libelle_es column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleEs('fooValue');   // WHERE libelle_es = 'fooValue'
     * $query->filterByLibelleEs('%fooValue%'); // WHERE libelle_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleEs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterByLibelleEs($libelleEs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleEs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleEs)) {
                $libelleEs = str_replace('*', '%', $libelleEs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDecisionPassationMarcheAVenirPeer::LIBELLE_ES, $libelleEs, $comparison);
    }

    /**
     * Filter the query on the libelle_su column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleSu('fooValue');   // WHERE libelle_su = 'fooValue'
     * $query->filterByLibelleSu('%fooValue%'); // WHERE libelle_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleSu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterByLibelleSu($libelleSu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleSu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleSu)) {
                $libelleSu = str_replace('*', '%', $libelleSu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDecisionPassationMarcheAVenirPeer::LIBELLE_SU, $libelleSu, $comparison);
    }

    /**
     * Filter the query on the libelle_du column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleDu('fooValue');   // WHERE libelle_du = 'fooValue'
     * $query->filterByLibelleDu('%fooValue%'); // WHERE libelle_du LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleDu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterByLibelleDu($libelleDu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleDu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleDu)) {
                $libelleDu = str_replace('*', '%', $libelleDu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDecisionPassationMarcheAVenirPeer::LIBELLE_DU, $libelleDu, $comparison);
    }

    /**
     * Filter the query on the libelle_cz column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleCz('fooValue');   // WHERE libelle_cz = 'fooValue'
     * $query->filterByLibelleCz('%fooValue%'); // WHERE libelle_cz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleCz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterByLibelleCz($libelleCz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleCz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleCz)) {
                $libelleCz = str_replace('*', '%', $libelleCz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDecisionPassationMarcheAVenirPeer::LIBELLE_CZ, $libelleCz, $comparison);
    }

    /**
     * Filter the query on the libelle_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleAr('fooValue');   // WHERE libelle_ar = 'fooValue'
     * $query->filterByLibelleAr('%fooValue%'); // WHERE libelle_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterByLibelleAr($libelleAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleAr)) {
                $libelleAr = str_replace('*', '%', $libelleAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDecisionPassationMarcheAVenirPeer::LIBELLE_AR, $libelleAr, $comparison);
    }

    /**
     * Filter the query on the libelle_it column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleIt('fooValue');   // WHERE libelle_it = 'fooValue'
     * $query->filterByLibelleIt('%fooValue%'); // WHERE libelle_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function filterByLibelleIt($libelleIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleIt)) {
                $libelleIt = str_replace('*', '%', $libelleIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDecisionPassationMarcheAVenirPeer::LIBELLE_IT, $libelleIt, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonDecisionPassationMarcheAVenir $commonDecisionPassationMarcheAVenir Object to remove from the list of results
     *
     * @return CommonDecisionPassationMarcheAVenirQuery The current query, for fluid interface
     */
    public function prune($commonDecisionPassationMarcheAVenir = null)
    {
        if ($commonDecisionPassationMarcheAVenir) {
            $this->addUsingAlias(CommonDecisionPassationMarcheAVenirPeer::ID, $commonDecisionPassationMarcheAVenir->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
