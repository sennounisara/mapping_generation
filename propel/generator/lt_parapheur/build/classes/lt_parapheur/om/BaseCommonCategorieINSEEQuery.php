<?php


/**
 * Base class that represents a query for the 'CategorieINSEE' table.
 *
 * 
 *
 * @method CommonCategorieINSEEQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonCategorieINSEEQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method CommonCategorieINSEEQuery orderByLibelleFr($order = Criteria::ASC) Order by the libelle_fr column
 * @method CommonCategorieINSEEQuery orderByLibelleEn($order = Criteria::ASC) Order by the libelle_en column
 * @method CommonCategorieINSEEQuery orderByLibelleEs($order = Criteria::ASC) Order by the libelle_es column
 * @method CommonCategorieINSEEQuery orderByLibelleSu($order = Criteria::ASC) Order by the libelle_su column
 * @method CommonCategorieINSEEQuery orderByLibelleDu($order = Criteria::ASC) Order by the libelle_du column
 * @method CommonCategorieINSEEQuery orderByLibelleCz($order = Criteria::ASC) Order by the libelle_cz column
 * @method CommonCategorieINSEEQuery orderByLibelleAr($order = Criteria::ASC) Order by the libelle_ar column
 * @method CommonCategorieINSEEQuery orderByLibelleIt($order = Criteria::ASC) Order by the libelle_it column
 *
 * @method CommonCategorieINSEEQuery groupById() Group by the id column
 * @method CommonCategorieINSEEQuery groupByLibelle() Group by the libelle column
 * @method CommonCategorieINSEEQuery groupByLibelleFr() Group by the libelle_fr column
 * @method CommonCategorieINSEEQuery groupByLibelleEn() Group by the libelle_en column
 * @method CommonCategorieINSEEQuery groupByLibelleEs() Group by the libelle_es column
 * @method CommonCategorieINSEEQuery groupByLibelleSu() Group by the libelle_su column
 * @method CommonCategorieINSEEQuery groupByLibelleDu() Group by the libelle_du column
 * @method CommonCategorieINSEEQuery groupByLibelleCz() Group by the libelle_cz column
 * @method CommonCategorieINSEEQuery groupByLibelleAr() Group by the libelle_ar column
 * @method CommonCategorieINSEEQuery groupByLibelleIt() Group by the libelle_it column
 *
 * @method CommonCategorieINSEEQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonCategorieINSEEQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonCategorieINSEEQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonCategorieINSEE findOne(PropelPDO $con = null) Return the first CommonCategorieINSEE matching the query
 * @method CommonCategorieINSEE findOneOrCreate(PropelPDO $con = null) Return the first CommonCategorieINSEE matching the query, or a new CommonCategorieINSEE object populated from the query conditions when no match is found
 *
 * @method CommonCategorieINSEE findOneByLibelle(string $libelle) Return the first CommonCategorieINSEE filtered by the libelle column
 * @method CommonCategorieINSEE findOneByLibelleFr(string $libelle_fr) Return the first CommonCategorieINSEE filtered by the libelle_fr column
 * @method CommonCategorieINSEE findOneByLibelleEn(string $libelle_en) Return the first CommonCategorieINSEE filtered by the libelle_en column
 * @method CommonCategorieINSEE findOneByLibelleEs(string $libelle_es) Return the first CommonCategorieINSEE filtered by the libelle_es column
 * @method CommonCategorieINSEE findOneByLibelleSu(string $libelle_su) Return the first CommonCategorieINSEE filtered by the libelle_su column
 * @method CommonCategorieINSEE findOneByLibelleDu(string $libelle_du) Return the first CommonCategorieINSEE filtered by the libelle_du column
 * @method CommonCategorieINSEE findOneByLibelleCz(string $libelle_cz) Return the first CommonCategorieINSEE filtered by the libelle_cz column
 * @method CommonCategorieINSEE findOneByLibelleAr(string $libelle_ar) Return the first CommonCategorieINSEE filtered by the libelle_ar column
 * @method CommonCategorieINSEE findOneByLibelleIt(string $libelle_it) Return the first CommonCategorieINSEE filtered by the libelle_it column
 *
 * @method array findById(string $id) Return CommonCategorieINSEE objects filtered by the id column
 * @method array findByLibelle(string $libelle) Return CommonCategorieINSEE objects filtered by the libelle column
 * @method array findByLibelleFr(string $libelle_fr) Return CommonCategorieINSEE objects filtered by the libelle_fr column
 * @method array findByLibelleEn(string $libelle_en) Return CommonCategorieINSEE objects filtered by the libelle_en column
 * @method array findByLibelleEs(string $libelle_es) Return CommonCategorieINSEE objects filtered by the libelle_es column
 * @method array findByLibelleSu(string $libelle_su) Return CommonCategorieINSEE objects filtered by the libelle_su column
 * @method array findByLibelleDu(string $libelle_du) Return CommonCategorieINSEE objects filtered by the libelle_du column
 * @method array findByLibelleCz(string $libelle_cz) Return CommonCategorieINSEE objects filtered by the libelle_cz column
 * @method array findByLibelleAr(string $libelle_ar) Return CommonCategorieINSEE objects filtered by the libelle_ar column
 * @method array findByLibelleIt(string $libelle_it) Return CommonCategorieINSEE objects filtered by the libelle_it column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonCategorieINSEEQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonCategorieINSEEQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonCategorieINSEE', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonCategorieINSEEQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonCategorieINSEEQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonCategorieINSEEQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonCategorieINSEEQuery) {
            return $criteria;
        }
        $query = new CommonCategorieINSEEQuery();
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
     * @return   CommonCategorieINSEE|CommonCategorieINSEE[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonCategorieINSEEPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonCategorieINSEEPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonCategorieINSEE A model object, or null if the key is not found
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
     * @return                 CommonCategorieINSEE A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `libelle`, `libelle_fr`, `libelle_en`, `libelle_es`, `libelle_su`, `libelle_du`, `libelle_cz`, `libelle_ar`, `libelle_it` FROM `CategorieINSEE` WHERE `id` = :p0';
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
            $obj = new CommonCategorieINSEE();
            $obj->hydrate($row);
            CommonCategorieINSEEPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonCategorieINSEE|CommonCategorieINSEE[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonCategorieINSEE[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonCategorieINSEEQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonCategorieINSEEPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonCategorieINSEEQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonCategorieINSEEPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById('fooValue');   // WHERE id = 'fooValue'
     * $query->filterById('%fooValue%'); // WHERE id LIKE '%fooValue%'
     * </code>
     *
     * @param     string $id The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieINSEEQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($id)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $id)) {
                $id = str_replace('*', '%', $id);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieINSEEPeer::ID, $id, $comparison);
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
     * @return CommonCategorieINSEEQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonCategorieINSEEPeer::LIBELLE, $libelle, $comparison);
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
     * @return CommonCategorieINSEEQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonCategorieINSEEPeer::LIBELLE_FR, $libelleFr, $comparison);
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
     * @return CommonCategorieINSEEQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonCategorieINSEEPeer::LIBELLE_EN, $libelleEn, $comparison);
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
     * @return CommonCategorieINSEEQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonCategorieINSEEPeer::LIBELLE_ES, $libelleEs, $comparison);
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
     * @return CommonCategorieINSEEQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonCategorieINSEEPeer::LIBELLE_SU, $libelleSu, $comparison);
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
     * @return CommonCategorieINSEEQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonCategorieINSEEPeer::LIBELLE_DU, $libelleDu, $comparison);
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
     * @return CommonCategorieINSEEQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonCategorieINSEEPeer::LIBELLE_CZ, $libelleCz, $comparison);
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
     * @return CommonCategorieINSEEQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonCategorieINSEEPeer::LIBELLE_AR, $libelleAr, $comparison);
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
     * @return CommonCategorieINSEEQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonCategorieINSEEPeer::LIBELLE_IT, $libelleIt, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonCategorieINSEE $commonCategorieINSEE Object to remove from the list of results
     *
     * @return CommonCategorieINSEEQuery The current query, for fluid interface
     */
    public function prune($commonCategorieINSEE = null)
    {
        if ($commonCategorieINSEE) {
            $this->addUsingAlias(CommonCategorieINSEEPeer::ID, $commonCategorieINSEE->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
