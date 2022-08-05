<?php


/**
 * Base class that represents a query for the 'ValeurReferentiel' table.
 *
 * 
 *
 * @method CommonValeurReferentielQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonValeurReferentielQuery orderByIdReferentiel($order = Criteria::ASC) Order by the id_referentiel column
 * @method CommonValeurReferentielQuery orderByLibelleValeurReferentiel($order = Criteria::ASC) Order by the libelle_valeur_referentiel column
 * @method CommonValeurReferentielQuery orderByLibelleValeurReferentielFr($order = Criteria::ASC) Order by the libelle_valeur_referentiel_fr column
 * @method CommonValeurReferentielQuery orderByLibelleValeurReferentielEn($order = Criteria::ASC) Order by the libelle_valeur_referentiel_en column
 * @method CommonValeurReferentielQuery orderByLibelleValeurReferentielEs($order = Criteria::ASC) Order by the libelle_valeur_referentiel_es column
 * @method CommonValeurReferentielQuery orderByLibelleValeurReferentielSu($order = Criteria::ASC) Order by the libelle_valeur_referentiel_su column
 * @method CommonValeurReferentielQuery orderByLibelleValeurReferentielDu($order = Criteria::ASC) Order by the libelle_valeur_referentiel_du column
 * @method CommonValeurReferentielQuery orderByLibelleValeurReferentielCz($order = Criteria::ASC) Order by the libelle_valeur_referentiel_cz column
 * @method CommonValeurReferentielQuery orderByLibelleValeurReferentielAr($order = Criteria::ASC) Order by the libelle_valeur_referentiel_ar column
 * @method CommonValeurReferentielQuery orderByLibelle2($order = Criteria::ASC) Order by the libelle_2 column
 * @method CommonValeurReferentielQuery orderByLibelleValeurReferentielIt($order = Criteria::ASC) Order by the libelle_valeur_referentiel_it column
 * @method CommonValeurReferentielQuery orderByValeurSub($order = Criteria::ASC) Order by the valeur_sub column
 *
 * @method CommonValeurReferentielQuery groupById() Group by the id column
 * @method CommonValeurReferentielQuery groupByIdReferentiel() Group by the id_referentiel column
 * @method CommonValeurReferentielQuery groupByLibelleValeurReferentiel() Group by the libelle_valeur_referentiel column
 * @method CommonValeurReferentielQuery groupByLibelleValeurReferentielFr() Group by the libelle_valeur_referentiel_fr column
 * @method CommonValeurReferentielQuery groupByLibelleValeurReferentielEn() Group by the libelle_valeur_referentiel_en column
 * @method CommonValeurReferentielQuery groupByLibelleValeurReferentielEs() Group by the libelle_valeur_referentiel_es column
 * @method CommonValeurReferentielQuery groupByLibelleValeurReferentielSu() Group by the libelle_valeur_referentiel_su column
 * @method CommonValeurReferentielQuery groupByLibelleValeurReferentielDu() Group by the libelle_valeur_referentiel_du column
 * @method CommonValeurReferentielQuery groupByLibelleValeurReferentielCz() Group by the libelle_valeur_referentiel_cz column
 * @method CommonValeurReferentielQuery groupByLibelleValeurReferentielAr() Group by the libelle_valeur_referentiel_ar column
 * @method CommonValeurReferentielQuery groupByLibelle2() Group by the libelle_2 column
 * @method CommonValeurReferentielQuery groupByLibelleValeurReferentielIt() Group by the libelle_valeur_referentiel_it column
 * @method CommonValeurReferentielQuery groupByValeurSub() Group by the valeur_sub column
 *
 * @method CommonValeurReferentielQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonValeurReferentielQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonValeurReferentielQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonValeurReferentiel findOne(PropelPDO $con = null) Return the first CommonValeurReferentiel matching the query
 * @method CommonValeurReferentiel findOneOrCreate(PropelPDO $con = null) Return the first CommonValeurReferentiel matching the query, or a new CommonValeurReferentiel object populated from the query conditions when no match is found
 *
 * @method CommonValeurReferentiel findOneById(int $id) Return the first CommonValeurReferentiel filtered by the id column
 * @method CommonValeurReferentiel findOneByIdReferentiel(int $id_referentiel) Return the first CommonValeurReferentiel filtered by the id_referentiel column
 * @method CommonValeurReferentiel findOneByLibelleValeurReferentiel(string $libelle_valeur_referentiel) Return the first CommonValeurReferentiel filtered by the libelle_valeur_referentiel column
 * @method CommonValeurReferentiel findOneByLibelleValeurReferentielFr(string $libelle_valeur_referentiel_fr) Return the first CommonValeurReferentiel filtered by the libelle_valeur_referentiel_fr column
 * @method CommonValeurReferentiel findOneByLibelleValeurReferentielEn(string $libelle_valeur_referentiel_en) Return the first CommonValeurReferentiel filtered by the libelle_valeur_referentiel_en column
 * @method CommonValeurReferentiel findOneByLibelleValeurReferentielEs(string $libelle_valeur_referentiel_es) Return the first CommonValeurReferentiel filtered by the libelle_valeur_referentiel_es column
 * @method CommonValeurReferentiel findOneByLibelleValeurReferentielSu(string $libelle_valeur_referentiel_su) Return the first CommonValeurReferentiel filtered by the libelle_valeur_referentiel_su column
 * @method CommonValeurReferentiel findOneByLibelleValeurReferentielDu(string $libelle_valeur_referentiel_du) Return the first CommonValeurReferentiel filtered by the libelle_valeur_referentiel_du column
 * @method CommonValeurReferentiel findOneByLibelleValeurReferentielCz(string $libelle_valeur_referentiel_cz) Return the first CommonValeurReferentiel filtered by the libelle_valeur_referentiel_cz column
 * @method CommonValeurReferentiel findOneByLibelleValeurReferentielAr(string $libelle_valeur_referentiel_ar) Return the first CommonValeurReferentiel filtered by the libelle_valeur_referentiel_ar column
 * @method CommonValeurReferentiel findOneByLibelle2(string $libelle_2) Return the first CommonValeurReferentiel filtered by the libelle_2 column
 * @method CommonValeurReferentiel findOneByLibelleValeurReferentielIt(string $libelle_valeur_referentiel_it) Return the first CommonValeurReferentiel filtered by the libelle_valeur_referentiel_it column
 * @method CommonValeurReferentiel findOneByValeurSub(string $valeur_sub) Return the first CommonValeurReferentiel filtered by the valeur_sub column
 *
 * @method array findById(int $id) Return CommonValeurReferentiel objects filtered by the id column
 * @method array findByIdReferentiel(int $id_referentiel) Return CommonValeurReferentiel objects filtered by the id_referentiel column
 * @method array findByLibelleValeurReferentiel(string $libelle_valeur_referentiel) Return CommonValeurReferentiel objects filtered by the libelle_valeur_referentiel column
 * @method array findByLibelleValeurReferentielFr(string $libelle_valeur_referentiel_fr) Return CommonValeurReferentiel objects filtered by the libelle_valeur_referentiel_fr column
 * @method array findByLibelleValeurReferentielEn(string $libelle_valeur_referentiel_en) Return CommonValeurReferentiel objects filtered by the libelle_valeur_referentiel_en column
 * @method array findByLibelleValeurReferentielEs(string $libelle_valeur_referentiel_es) Return CommonValeurReferentiel objects filtered by the libelle_valeur_referentiel_es column
 * @method array findByLibelleValeurReferentielSu(string $libelle_valeur_referentiel_su) Return CommonValeurReferentiel objects filtered by the libelle_valeur_referentiel_su column
 * @method array findByLibelleValeurReferentielDu(string $libelle_valeur_referentiel_du) Return CommonValeurReferentiel objects filtered by the libelle_valeur_referentiel_du column
 * @method array findByLibelleValeurReferentielCz(string $libelle_valeur_referentiel_cz) Return CommonValeurReferentiel objects filtered by the libelle_valeur_referentiel_cz column
 * @method array findByLibelleValeurReferentielAr(string $libelle_valeur_referentiel_ar) Return CommonValeurReferentiel objects filtered by the libelle_valeur_referentiel_ar column
 * @method array findByLibelle2(string $libelle_2) Return CommonValeurReferentiel objects filtered by the libelle_2 column
 * @method array findByLibelleValeurReferentielIt(string $libelle_valeur_referentiel_it) Return CommonValeurReferentiel objects filtered by the libelle_valeur_referentiel_it column
 * @method array findByValeurSub(string $valeur_sub) Return CommonValeurReferentiel objects filtered by the valeur_sub column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonValeurReferentielQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonValeurReferentielQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonValeurReferentiel', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonValeurReferentielQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonValeurReferentielQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonValeurReferentielQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonValeurReferentielQuery) {
            return $criteria;
        }
        $query = new CommonValeurReferentielQuery();
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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query 
                         A Primary key composition: [$id, $id_referentiel]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonValeurReferentiel|CommonValeurReferentiel[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonValeurReferentielPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonValeurReferentielPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonValeurReferentiel A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_referentiel`, `libelle_valeur_referentiel`, `libelle_valeur_referentiel_fr`, `libelle_valeur_referentiel_en`, `libelle_valeur_referentiel_es`, `libelle_valeur_referentiel_su`, `libelle_valeur_referentiel_du`, `libelle_valeur_referentiel_cz`, `libelle_valeur_referentiel_ar`, `libelle_2`, `libelle_valeur_referentiel_it`, `valeur_sub` FROM `ValeurReferentiel` WHERE `id` = :p0 AND `id_referentiel` = :p1';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonValeurReferentiel();
            $obj->hydrate($row);
            CommonValeurReferentielPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonValeurReferentiel|CommonValeurReferentiel[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CommonValeurReferentiel[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonValeurReferentielQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonValeurReferentielPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonValeurReferentielPeer::ID_REFERENTIEL, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonValeurReferentielQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonValeurReferentielPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonValeurReferentielPeer::ID_REFERENTIEL, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return CommonValeurReferentielQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonValeurReferentielPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonValeurReferentielPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonValeurReferentielPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_referentiel column
     *
     * Example usage:
     * <code>
     * $query->filterByIdReferentiel(1234); // WHERE id_referentiel = 1234
     * $query->filterByIdReferentiel(array(12, 34)); // WHERE id_referentiel IN (12, 34)
     * $query->filterByIdReferentiel(array('min' => 12)); // WHERE id_referentiel >= 12
     * $query->filterByIdReferentiel(array('max' => 12)); // WHERE id_referentiel <= 12
     * </code>
     *
     * @param     mixed $idReferentiel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonValeurReferentielQuery The current query, for fluid interface
     */
    public function filterByIdReferentiel($idReferentiel = null, $comparison = null)
    {
        if (is_array($idReferentiel)) {
            $useMinMax = false;
            if (isset($idReferentiel['min'])) {
                $this->addUsingAlias(CommonValeurReferentielPeer::ID_REFERENTIEL, $idReferentiel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idReferentiel['max'])) {
                $this->addUsingAlias(CommonValeurReferentielPeer::ID_REFERENTIEL, $idReferentiel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonValeurReferentielPeer::ID_REFERENTIEL, $idReferentiel, $comparison);
    }

    /**
     * Filter the query on the libelle_valeur_referentiel column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleValeurReferentiel('fooValue');   // WHERE libelle_valeur_referentiel = 'fooValue'
     * $query->filterByLibelleValeurReferentiel('%fooValue%'); // WHERE libelle_valeur_referentiel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleValeurReferentiel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonValeurReferentielQuery The current query, for fluid interface
     */
    public function filterByLibelleValeurReferentiel($libelleValeurReferentiel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleValeurReferentiel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleValeurReferentiel)) {
                $libelleValeurReferentiel = str_replace('*', '%', $libelleValeurReferentiel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonValeurReferentielPeer::LIBELLE_VALEUR_REFERENTIEL, $libelleValeurReferentiel, $comparison);
    }

    /**
     * Filter the query on the libelle_valeur_referentiel_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleValeurReferentielFr('fooValue');   // WHERE libelle_valeur_referentiel_fr = 'fooValue'
     * $query->filterByLibelleValeurReferentielFr('%fooValue%'); // WHERE libelle_valeur_referentiel_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleValeurReferentielFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonValeurReferentielQuery The current query, for fluid interface
     */
    public function filterByLibelleValeurReferentielFr($libelleValeurReferentielFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleValeurReferentielFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleValeurReferentielFr)) {
                $libelleValeurReferentielFr = str_replace('*', '%', $libelleValeurReferentielFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonValeurReferentielPeer::LIBELLE_VALEUR_REFERENTIEL_FR, $libelleValeurReferentielFr, $comparison);
    }

    /**
     * Filter the query on the libelle_valeur_referentiel_en column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleValeurReferentielEn('fooValue');   // WHERE libelle_valeur_referentiel_en = 'fooValue'
     * $query->filterByLibelleValeurReferentielEn('%fooValue%'); // WHERE libelle_valeur_referentiel_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleValeurReferentielEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonValeurReferentielQuery The current query, for fluid interface
     */
    public function filterByLibelleValeurReferentielEn($libelleValeurReferentielEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleValeurReferentielEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleValeurReferentielEn)) {
                $libelleValeurReferentielEn = str_replace('*', '%', $libelleValeurReferentielEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonValeurReferentielPeer::LIBELLE_VALEUR_REFERENTIEL_EN, $libelleValeurReferentielEn, $comparison);
    }

    /**
     * Filter the query on the libelle_valeur_referentiel_es column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleValeurReferentielEs('fooValue');   // WHERE libelle_valeur_referentiel_es = 'fooValue'
     * $query->filterByLibelleValeurReferentielEs('%fooValue%'); // WHERE libelle_valeur_referentiel_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleValeurReferentielEs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonValeurReferentielQuery The current query, for fluid interface
     */
    public function filterByLibelleValeurReferentielEs($libelleValeurReferentielEs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleValeurReferentielEs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleValeurReferentielEs)) {
                $libelleValeurReferentielEs = str_replace('*', '%', $libelleValeurReferentielEs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonValeurReferentielPeer::LIBELLE_VALEUR_REFERENTIEL_ES, $libelleValeurReferentielEs, $comparison);
    }

    /**
     * Filter the query on the libelle_valeur_referentiel_su column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleValeurReferentielSu('fooValue');   // WHERE libelle_valeur_referentiel_su = 'fooValue'
     * $query->filterByLibelleValeurReferentielSu('%fooValue%'); // WHERE libelle_valeur_referentiel_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleValeurReferentielSu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonValeurReferentielQuery The current query, for fluid interface
     */
    public function filterByLibelleValeurReferentielSu($libelleValeurReferentielSu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleValeurReferentielSu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleValeurReferentielSu)) {
                $libelleValeurReferentielSu = str_replace('*', '%', $libelleValeurReferentielSu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonValeurReferentielPeer::LIBELLE_VALEUR_REFERENTIEL_SU, $libelleValeurReferentielSu, $comparison);
    }

    /**
     * Filter the query on the libelle_valeur_referentiel_du column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleValeurReferentielDu('fooValue');   // WHERE libelle_valeur_referentiel_du = 'fooValue'
     * $query->filterByLibelleValeurReferentielDu('%fooValue%'); // WHERE libelle_valeur_referentiel_du LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleValeurReferentielDu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonValeurReferentielQuery The current query, for fluid interface
     */
    public function filterByLibelleValeurReferentielDu($libelleValeurReferentielDu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleValeurReferentielDu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleValeurReferentielDu)) {
                $libelleValeurReferentielDu = str_replace('*', '%', $libelleValeurReferentielDu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonValeurReferentielPeer::LIBELLE_VALEUR_REFERENTIEL_DU, $libelleValeurReferentielDu, $comparison);
    }

    /**
     * Filter the query on the libelle_valeur_referentiel_cz column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleValeurReferentielCz('fooValue');   // WHERE libelle_valeur_referentiel_cz = 'fooValue'
     * $query->filterByLibelleValeurReferentielCz('%fooValue%'); // WHERE libelle_valeur_referentiel_cz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleValeurReferentielCz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonValeurReferentielQuery The current query, for fluid interface
     */
    public function filterByLibelleValeurReferentielCz($libelleValeurReferentielCz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleValeurReferentielCz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleValeurReferentielCz)) {
                $libelleValeurReferentielCz = str_replace('*', '%', $libelleValeurReferentielCz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonValeurReferentielPeer::LIBELLE_VALEUR_REFERENTIEL_CZ, $libelleValeurReferentielCz, $comparison);
    }

    /**
     * Filter the query on the libelle_valeur_referentiel_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleValeurReferentielAr('fooValue');   // WHERE libelle_valeur_referentiel_ar = 'fooValue'
     * $query->filterByLibelleValeurReferentielAr('%fooValue%'); // WHERE libelle_valeur_referentiel_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleValeurReferentielAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonValeurReferentielQuery The current query, for fluid interface
     */
    public function filterByLibelleValeurReferentielAr($libelleValeurReferentielAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleValeurReferentielAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleValeurReferentielAr)) {
                $libelleValeurReferentielAr = str_replace('*', '%', $libelleValeurReferentielAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonValeurReferentielPeer::LIBELLE_VALEUR_REFERENTIEL_AR, $libelleValeurReferentielAr, $comparison);
    }

    /**
     * Filter the query on the libelle_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelle2('fooValue');   // WHERE libelle_2 = 'fooValue'
     * $query->filterByLibelle2('%fooValue%'); // WHERE libelle_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelle2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonValeurReferentielQuery The current query, for fluid interface
     */
    public function filterByLibelle2($libelle2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelle2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelle2)) {
                $libelle2 = str_replace('*', '%', $libelle2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonValeurReferentielPeer::LIBELLE_2, $libelle2, $comparison);
    }

    /**
     * Filter the query on the libelle_valeur_referentiel_it column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleValeurReferentielIt('fooValue');   // WHERE libelle_valeur_referentiel_it = 'fooValue'
     * $query->filterByLibelleValeurReferentielIt('%fooValue%'); // WHERE libelle_valeur_referentiel_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleValeurReferentielIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonValeurReferentielQuery The current query, for fluid interface
     */
    public function filterByLibelleValeurReferentielIt($libelleValeurReferentielIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleValeurReferentielIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleValeurReferentielIt)) {
                $libelleValeurReferentielIt = str_replace('*', '%', $libelleValeurReferentielIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonValeurReferentielPeer::LIBELLE_VALEUR_REFERENTIEL_IT, $libelleValeurReferentielIt, $comparison);
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
     * @return CommonValeurReferentielQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonValeurReferentielPeer::VALEUR_SUB, $valeurSub, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonValeurReferentiel $commonValeurReferentiel Object to remove from the list of results
     *
     * @return CommonValeurReferentielQuery The current query, for fluid interface
     */
    public function prune($commonValeurReferentiel = null)
    {
        if ($commonValeurReferentiel) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonValeurReferentielPeer::ID), $commonValeurReferentiel->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonValeurReferentielPeer::ID_REFERENTIEL), $commonValeurReferentiel->getIdReferentiel(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
