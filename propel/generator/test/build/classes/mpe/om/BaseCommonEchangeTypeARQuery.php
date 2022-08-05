<?php


/**
 * Base class that represents a query for the 'EchangeTypeAR' table.
 *
 * 
 *
 * @method CommonEchangeTypeARQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonEchangeTypeARQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method CommonEchangeTypeARQuery orderByLibelleFr($order = Criteria::ASC) Order by the libelle_fr column
 * @method CommonEchangeTypeARQuery orderByLibelleEn($order = Criteria::ASC) Order by the libelle_en column
 * @method CommonEchangeTypeARQuery orderByLibelleEs($order = Criteria::ASC) Order by the libelle_es column
 * @method CommonEchangeTypeARQuery orderByLibelleSu($order = Criteria::ASC) Order by the libelle_su column
 * @method CommonEchangeTypeARQuery orderByLibelleDu($order = Criteria::ASC) Order by the libelle_du column
 * @method CommonEchangeTypeARQuery orderByLibelleCz($order = Criteria::ASC) Order by the libelle_cz column
 * @method CommonEchangeTypeARQuery orderByLibelleAr($order = Criteria::ASC) Order by the libelle_ar column
 * @method CommonEchangeTypeARQuery orderByLibelleIt($order = Criteria::ASC) Order by the libelle_it column
 *
 * @method CommonEchangeTypeARQuery groupById() Group by the id column
 * @method CommonEchangeTypeARQuery groupByLibelle() Group by the libelle column
 * @method CommonEchangeTypeARQuery groupByLibelleFr() Group by the libelle_fr column
 * @method CommonEchangeTypeARQuery groupByLibelleEn() Group by the libelle_en column
 * @method CommonEchangeTypeARQuery groupByLibelleEs() Group by the libelle_es column
 * @method CommonEchangeTypeARQuery groupByLibelleSu() Group by the libelle_su column
 * @method CommonEchangeTypeARQuery groupByLibelleDu() Group by the libelle_du column
 * @method CommonEchangeTypeARQuery groupByLibelleCz() Group by the libelle_cz column
 * @method CommonEchangeTypeARQuery groupByLibelleAr() Group by the libelle_ar column
 * @method CommonEchangeTypeARQuery groupByLibelleIt() Group by the libelle_it column
 *
 * @method CommonEchangeTypeARQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonEchangeTypeARQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonEchangeTypeARQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonEchangeTypeAR findOne(PropelPDO $con = null) Return the first CommonEchangeTypeAR matching the query
 * @method CommonEchangeTypeAR findOneOrCreate(PropelPDO $con = null) Return the first CommonEchangeTypeAR matching the query, or a new CommonEchangeTypeAR object populated from the query conditions when no match is found
 *
 * @method CommonEchangeTypeAR findOneByLibelle(string $libelle) Return the first CommonEchangeTypeAR filtered by the libelle column
 * @method CommonEchangeTypeAR findOneByLibelleFr(string $libelle_fr) Return the first CommonEchangeTypeAR filtered by the libelle_fr column
 * @method CommonEchangeTypeAR findOneByLibelleEn(string $libelle_en) Return the first CommonEchangeTypeAR filtered by the libelle_en column
 * @method CommonEchangeTypeAR findOneByLibelleEs(string $libelle_es) Return the first CommonEchangeTypeAR filtered by the libelle_es column
 * @method CommonEchangeTypeAR findOneByLibelleSu(string $libelle_su) Return the first CommonEchangeTypeAR filtered by the libelle_su column
 * @method CommonEchangeTypeAR findOneByLibelleDu(string $libelle_du) Return the first CommonEchangeTypeAR filtered by the libelle_du column
 * @method CommonEchangeTypeAR findOneByLibelleCz(string $libelle_cz) Return the first CommonEchangeTypeAR filtered by the libelle_cz column
 * @method CommonEchangeTypeAR findOneByLibelleAr(string $libelle_ar) Return the first CommonEchangeTypeAR filtered by the libelle_ar column
 * @method CommonEchangeTypeAR findOneByLibelleIt(string $libelle_it) Return the first CommonEchangeTypeAR filtered by the libelle_it column
 *
 * @method array findById(int $id) Return CommonEchangeTypeAR objects filtered by the id column
 * @method array findByLibelle(string $libelle) Return CommonEchangeTypeAR objects filtered by the libelle column
 * @method array findByLibelleFr(string $libelle_fr) Return CommonEchangeTypeAR objects filtered by the libelle_fr column
 * @method array findByLibelleEn(string $libelle_en) Return CommonEchangeTypeAR objects filtered by the libelle_en column
 * @method array findByLibelleEs(string $libelle_es) Return CommonEchangeTypeAR objects filtered by the libelle_es column
 * @method array findByLibelleSu(string $libelle_su) Return CommonEchangeTypeAR objects filtered by the libelle_su column
 * @method array findByLibelleDu(string $libelle_du) Return CommonEchangeTypeAR objects filtered by the libelle_du column
 * @method array findByLibelleCz(string $libelle_cz) Return CommonEchangeTypeAR objects filtered by the libelle_cz column
 * @method array findByLibelleAr(string $libelle_ar) Return CommonEchangeTypeAR objects filtered by the libelle_ar column
 * @method array findByLibelleIt(string $libelle_it) Return CommonEchangeTypeAR objects filtered by the libelle_it column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonEchangeTypeARQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonEchangeTypeARQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonEchangeTypeAR', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonEchangeTypeARQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonEchangeTypeARQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonEchangeTypeARQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonEchangeTypeARQuery) {
            return $criteria;
        }
        $query = new CommonEchangeTypeARQuery();
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
     * @return   CommonEchangeTypeAR|CommonEchangeTypeAR[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonEchangeTypeARPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonEchangeTypeARPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonEchangeTypeAR A model object, or null if the key is not found
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
     * @return                 CommonEchangeTypeAR A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `libelle`, `libelle_fr`, `libelle_en`, `libelle_es`, `libelle_su`, `libelle_du`, `libelle_cz`, `libelle_ar`, `libelle_it` FROM `EchangeTypeAR` WHERE `id` = :p0';
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
            $obj = new CommonEchangeTypeAR();
            $obj->hydrate($row);
            CommonEchangeTypeARPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonEchangeTypeAR|CommonEchangeTypeAR[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonEchangeTypeAR[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonEchangeTypeARQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonEchangeTypeARPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonEchangeTypeARQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonEchangeTypeARPeer::ID, $keys, Criteria::IN);
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
     * @return CommonEchangeTypeARQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonEchangeTypeARPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonEchangeTypeARPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEchangeTypeARPeer::ID, $id, $comparison);
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
     * @return CommonEchangeTypeARQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEchangeTypeARPeer::LIBELLE, $libelle, $comparison);
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
     * @return CommonEchangeTypeARQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEchangeTypeARPeer::LIBELLE_FR, $libelleFr, $comparison);
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
     * @return CommonEchangeTypeARQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEchangeTypeARPeer::LIBELLE_EN, $libelleEn, $comparison);
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
     * @return CommonEchangeTypeARQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEchangeTypeARPeer::LIBELLE_ES, $libelleEs, $comparison);
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
     * @return CommonEchangeTypeARQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEchangeTypeARPeer::LIBELLE_SU, $libelleSu, $comparison);
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
     * @return CommonEchangeTypeARQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEchangeTypeARPeer::LIBELLE_DU, $libelleDu, $comparison);
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
     * @return CommonEchangeTypeARQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEchangeTypeARPeer::LIBELLE_CZ, $libelleCz, $comparison);
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
     * @return CommonEchangeTypeARQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEchangeTypeARPeer::LIBELLE_AR, $libelleAr, $comparison);
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
     * @return CommonEchangeTypeARQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEchangeTypeARPeer::LIBELLE_IT, $libelleIt, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonEchangeTypeAR $commonEchangeTypeAR Object to remove from the list of results
     *
     * @return CommonEchangeTypeARQuery The current query, for fluid interface
     */
    public function prune($commonEchangeTypeAR = null)
    {
        if ($commonEchangeTypeAR) {
            $this->addUsingAlias(CommonEchangeTypeARPeer::ID, $commonEchangeTypeAR->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
