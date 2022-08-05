<?php


/**
 * Base class that represents a query for the 'caution_referentiel' table.
 *
 * 
 *
 * @method CommonCautionReferentielQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonCautionReferentielQuery orderByReferentiel($order = Criteria::ASC) Order by the referentiel column
 * @method CommonCautionReferentielQuery orderByLibelleFr($order = Criteria::ASC) Order by the libelle_fr column
 * @method CommonCautionReferentielQuery orderByLibelleAr($order = Criteria::ASC) Order by the libelle_ar column
 * @method CommonCautionReferentielQuery orderByCode($order = Criteria::ASC) Order by the code column
 *
 * @method CommonCautionReferentielQuery groupById() Group by the id column
 * @method CommonCautionReferentielQuery groupByReferentiel() Group by the referentiel column
 * @method CommonCautionReferentielQuery groupByLibelleFr() Group by the libelle_fr column
 * @method CommonCautionReferentielQuery groupByLibelleAr() Group by the libelle_ar column
 * @method CommonCautionReferentielQuery groupByCode() Group by the code column
 *
 * @method CommonCautionReferentielQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonCautionReferentielQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonCautionReferentielQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonCautionReferentiel findOne(PropelPDO $con = null) Return the first CommonCautionReferentiel matching the query
 * @method CommonCautionReferentiel findOneOrCreate(PropelPDO $con = null) Return the first CommonCautionReferentiel matching the query, or a new CommonCautionReferentiel object populated from the query conditions when no match is found
 *
 * @method CommonCautionReferentiel findOneByReferentiel(int $referentiel) Return the first CommonCautionReferentiel filtered by the referentiel column
 * @method CommonCautionReferentiel findOneByLibelleFr(string $libelle_fr) Return the first CommonCautionReferentiel filtered by the libelle_fr column
 * @method CommonCautionReferentiel findOneByLibelleAr(string $libelle_ar) Return the first CommonCautionReferentiel filtered by the libelle_ar column
 * @method CommonCautionReferentiel findOneByCode(string $code) Return the first CommonCautionReferentiel filtered by the code column
 *
 * @method array findById(int $id) Return CommonCautionReferentiel objects filtered by the id column
 * @method array findByReferentiel(int $referentiel) Return CommonCautionReferentiel objects filtered by the referentiel column
 * @method array findByLibelleFr(string $libelle_fr) Return CommonCautionReferentiel objects filtered by the libelle_fr column
 * @method array findByLibelleAr(string $libelle_ar) Return CommonCautionReferentiel objects filtered by the libelle_ar column
 * @method array findByCode(string $code) Return CommonCautionReferentiel objects filtered by the code column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonCautionReferentielQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonCautionReferentielQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonCautionReferentiel', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonCautionReferentielQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonCautionReferentielQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonCautionReferentielQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonCautionReferentielQuery) {
            return $criteria;
        }
        $query = new CommonCautionReferentielQuery();
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
     * @return   CommonCautionReferentiel|CommonCautionReferentiel[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonCautionReferentielPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonCautionReferentielPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonCautionReferentiel A model object, or null if the key is not found
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
     * @return                 CommonCautionReferentiel A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `referentiel`, `libelle_fr`, `libelle_ar`, `code` FROM `caution_referentiel` WHERE `id` = :p0';
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
            $obj = new CommonCautionReferentiel();
            $obj->hydrate($row);
            CommonCautionReferentielPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonCautionReferentiel|CommonCautionReferentiel[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonCautionReferentiel[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonCautionReferentielQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonCautionReferentielPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonCautionReferentielQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonCautionReferentielPeer::ID, $keys, Criteria::IN);
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
     * @return CommonCautionReferentielQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonCautionReferentielPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonCautionReferentielPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionReferentielPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the referentiel column
     *
     * Example usage:
     * <code>
     * $query->filterByReferentiel(1234); // WHERE referentiel = 1234
     * $query->filterByReferentiel(array(12, 34)); // WHERE referentiel IN (12, 34)
     * $query->filterByReferentiel(array('min' => 12)); // WHERE referentiel >= 12
     * $query->filterByReferentiel(array('max' => 12)); // WHERE referentiel <= 12
     * </code>
     *
     * @param     mixed $referentiel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionReferentielQuery The current query, for fluid interface
     */
    public function filterByReferentiel($referentiel = null, $comparison = null)
    {
        if (is_array($referentiel)) {
            $useMinMax = false;
            if (isset($referentiel['min'])) {
                $this->addUsingAlias(CommonCautionReferentielPeer::REFERENTIEL, $referentiel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($referentiel['max'])) {
                $this->addUsingAlias(CommonCautionReferentielPeer::REFERENTIEL, $referentiel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionReferentielPeer::REFERENTIEL, $referentiel, $comparison);
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
     * @return CommonCautionReferentielQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonCautionReferentielPeer::LIBELLE_FR, $libelleFr, $comparison);
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
     * @return CommonCautionReferentielQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonCautionReferentielPeer::LIBELLE_AR, $libelleAr, $comparison);
    }

    /**
     * Filter the query on the code column
     *
     * Example usage:
     * <code>
     * $query->filterByCode('fooValue');   // WHERE code = 'fooValue'
     * $query->filterByCode('%fooValue%'); // WHERE code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $code The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionReferentielQuery The current query, for fluid interface
     */
    public function filterByCode($code = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($code)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $code)) {
                $code = str_replace('*', '%', $code);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCautionReferentielPeer::CODE, $code, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonCautionReferentiel $commonCautionReferentiel Object to remove from the list of results
     *
     * @return CommonCautionReferentielQuery The current query, for fluid interface
     */
    public function prune($commonCautionReferentiel = null)
    {
        if ($commonCautionReferentiel) {
            $this->addUsingAlias(CommonCautionReferentielPeer::ID, $commonCautionReferentiel->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
