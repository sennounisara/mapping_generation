<?php


/**
 * Base class that represents a query for the 'Type_Avis_Pub' table.
 *
 * 
 *
 * @method CommonTypeAvisPubQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonTypeAvisPubQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method CommonTypeAvisPubQuery orderByLibelleAr($order = Criteria::ASC) Order by the libelle_ar column
 * @method CommonTypeAvisPubQuery orderByLibelleCz($order = Criteria::ASC) Order by the libelle_cz column
 * @method CommonTypeAvisPubQuery orderByLibelleDu($order = Criteria::ASC) Order by the libelle_du column
 * @method CommonTypeAvisPubQuery orderByLibelleEn($order = Criteria::ASC) Order by the libelle_en column
 * @method CommonTypeAvisPubQuery orderByLibelleEs($order = Criteria::ASC) Order by the libelle_es column
 * @method CommonTypeAvisPubQuery orderByLibelleFr($order = Criteria::ASC) Order by the libelle_fr column
 * @method CommonTypeAvisPubQuery orderByLibelleIt($order = Criteria::ASC) Order by the libelle_it column
 * @method CommonTypeAvisPubQuery orderByLibelleSu($order = Criteria::ASC) Order by the libelle_su column
 * @method CommonTypeAvisPubQuery orderByRegion($order = Criteria::ASC) Order by the region column
 * @method CommonTypeAvisPubQuery orderByResourceFormulaire($order = Criteria::ASC) Order by the resource_formulaire column
 * @method CommonTypeAvisPubQuery orderByRessourceDocPresse($order = Criteria::ASC) Order by the ressource_doc_presse column
 * @method CommonTypeAvisPubQuery orderByNatureAvis($order = Criteria::ASC) Order by the nature_avis column
 *
 * @method CommonTypeAvisPubQuery groupById() Group by the id column
 * @method CommonTypeAvisPubQuery groupByLibelle() Group by the libelle column
 * @method CommonTypeAvisPubQuery groupByLibelleAr() Group by the libelle_ar column
 * @method CommonTypeAvisPubQuery groupByLibelleCz() Group by the libelle_cz column
 * @method CommonTypeAvisPubQuery groupByLibelleDu() Group by the libelle_du column
 * @method CommonTypeAvisPubQuery groupByLibelleEn() Group by the libelle_en column
 * @method CommonTypeAvisPubQuery groupByLibelleEs() Group by the libelle_es column
 * @method CommonTypeAvisPubQuery groupByLibelleFr() Group by the libelle_fr column
 * @method CommonTypeAvisPubQuery groupByLibelleIt() Group by the libelle_it column
 * @method CommonTypeAvisPubQuery groupByLibelleSu() Group by the libelle_su column
 * @method CommonTypeAvisPubQuery groupByRegion() Group by the region column
 * @method CommonTypeAvisPubQuery groupByResourceFormulaire() Group by the resource_formulaire column
 * @method CommonTypeAvisPubQuery groupByRessourceDocPresse() Group by the ressource_doc_presse column
 * @method CommonTypeAvisPubQuery groupByNatureAvis() Group by the nature_avis column
 *
 * @method CommonTypeAvisPubQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTypeAvisPubQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTypeAvisPubQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTypeAvisPub findOne(PropelPDO $con = null) Return the first CommonTypeAvisPub matching the query
 * @method CommonTypeAvisPub findOneOrCreate(PropelPDO $con = null) Return the first CommonTypeAvisPub matching the query, or a new CommonTypeAvisPub object populated from the query conditions when no match is found
 *
 * @method CommonTypeAvisPub findOneByLibelle(string $libelle) Return the first CommonTypeAvisPub filtered by the libelle column
 * @method CommonTypeAvisPub findOneByLibelleAr(string $libelle_ar) Return the first CommonTypeAvisPub filtered by the libelle_ar column
 * @method CommonTypeAvisPub findOneByLibelleCz(string $libelle_cz) Return the first CommonTypeAvisPub filtered by the libelle_cz column
 * @method CommonTypeAvisPub findOneByLibelleDu(string $libelle_du) Return the first CommonTypeAvisPub filtered by the libelle_du column
 * @method CommonTypeAvisPub findOneByLibelleEn(string $libelle_en) Return the first CommonTypeAvisPub filtered by the libelle_en column
 * @method CommonTypeAvisPub findOneByLibelleEs(string $libelle_es) Return the first CommonTypeAvisPub filtered by the libelle_es column
 * @method CommonTypeAvisPub findOneByLibelleFr(string $libelle_fr) Return the first CommonTypeAvisPub filtered by the libelle_fr column
 * @method CommonTypeAvisPub findOneByLibelleIt(string $libelle_it) Return the first CommonTypeAvisPub filtered by the libelle_it column
 * @method CommonTypeAvisPub findOneByLibelleSu(string $libelle_su) Return the first CommonTypeAvisPub filtered by the libelle_su column
 * @method CommonTypeAvisPub findOneByRegion(int $region) Return the first CommonTypeAvisPub filtered by the region column
 * @method CommonTypeAvisPub findOneByResourceFormulaire(string $resource_formulaire) Return the first CommonTypeAvisPub filtered by the resource_formulaire column
 * @method CommonTypeAvisPub findOneByRessourceDocPresse(string $ressource_doc_presse) Return the first CommonTypeAvisPub filtered by the ressource_doc_presse column
 * @method CommonTypeAvisPub findOneByNatureAvis(int $nature_avis) Return the first CommonTypeAvisPub filtered by the nature_avis column
 *
 * @method array findById(int $id) Return CommonTypeAvisPub objects filtered by the id column
 * @method array findByLibelle(string $libelle) Return CommonTypeAvisPub objects filtered by the libelle column
 * @method array findByLibelleAr(string $libelle_ar) Return CommonTypeAvisPub objects filtered by the libelle_ar column
 * @method array findByLibelleCz(string $libelle_cz) Return CommonTypeAvisPub objects filtered by the libelle_cz column
 * @method array findByLibelleDu(string $libelle_du) Return CommonTypeAvisPub objects filtered by the libelle_du column
 * @method array findByLibelleEn(string $libelle_en) Return CommonTypeAvisPub objects filtered by the libelle_en column
 * @method array findByLibelleEs(string $libelle_es) Return CommonTypeAvisPub objects filtered by the libelle_es column
 * @method array findByLibelleFr(string $libelle_fr) Return CommonTypeAvisPub objects filtered by the libelle_fr column
 * @method array findByLibelleIt(string $libelle_it) Return CommonTypeAvisPub objects filtered by the libelle_it column
 * @method array findByLibelleSu(string $libelle_su) Return CommonTypeAvisPub objects filtered by the libelle_su column
 * @method array findByRegion(int $region) Return CommonTypeAvisPub objects filtered by the region column
 * @method array findByResourceFormulaire(string $resource_formulaire) Return CommonTypeAvisPub objects filtered by the resource_formulaire column
 * @method array findByRessourceDocPresse(string $ressource_doc_presse) Return CommonTypeAvisPub objects filtered by the ressource_doc_presse column
 * @method array findByNatureAvis(int $nature_avis) Return CommonTypeAvisPub objects filtered by the nature_avis column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTypeAvisPubQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTypeAvisPubQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTypeAvisPub', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTypeAvisPubQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTypeAvisPubQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTypeAvisPubQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTypeAvisPubQuery) {
            return $criteria;
        }
        $query = new CommonTypeAvisPubQuery();
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
     * @return   CommonTypeAvisPub|CommonTypeAvisPub[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTypeAvisPubPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTypeAvisPubPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTypeAvisPub A model object, or null if the key is not found
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
     * @return                 CommonTypeAvisPub A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `libelle`, `libelle_ar`, `libelle_cz`, `libelle_du`, `libelle_en`, `libelle_es`, `libelle_fr`, `libelle_it`, `libelle_su`, `region`, `resource_formulaire`, `ressource_doc_presse`, `nature_avis` FROM `Type_Avis_Pub` WHERE `id` = :p0';
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
            $obj = new CommonTypeAvisPub();
            $obj->hydrate($row);
            CommonTypeAvisPubPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonTypeAvisPub|CommonTypeAvisPub[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTypeAvisPub[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTypeAvisPubQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonTypeAvisPubPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTypeAvisPubQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonTypeAvisPubPeer::ID, $keys, Criteria::IN);
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
     * @return CommonTypeAvisPubQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonTypeAvisPubPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonTypeAvisPubPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTypeAvisPubPeer::ID, $id, $comparison);
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
     * @return CommonTypeAvisPubQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTypeAvisPubPeer::LIBELLE, $libelle, $comparison);
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
     * @return CommonTypeAvisPubQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTypeAvisPubPeer::LIBELLE_AR, $libelleAr, $comparison);
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
     * @return CommonTypeAvisPubQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTypeAvisPubPeer::LIBELLE_CZ, $libelleCz, $comparison);
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
     * @return CommonTypeAvisPubQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTypeAvisPubPeer::LIBELLE_DU, $libelleDu, $comparison);
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
     * @return CommonTypeAvisPubQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTypeAvisPubPeer::LIBELLE_EN, $libelleEn, $comparison);
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
     * @return CommonTypeAvisPubQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTypeAvisPubPeer::LIBELLE_ES, $libelleEs, $comparison);
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
     * @return CommonTypeAvisPubQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTypeAvisPubPeer::LIBELLE_FR, $libelleFr, $comparison);
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
     * @return CommonTypeAvisPubQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTypeAvisPubPeer::LIBELLE_IT, $libelleIt, $comparison);
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
     * @return CommonTypeAvisPubQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTypeAvisPubPeer::LIBELLE_SU, $libelleSu, $comparison);
    }

    /**
     * Filter the query on the region column
     *
     * Example usage:
     * <code>
     * $query->filterByRegion(1234); // WHERE region = 1234
     * $query->filterByRegion(array(12, 34)); // WHERE region IN (12, 34)
     * $query->filterByRegion(array('min' => 12)); // WHERE region >= 12
     * $query->filterByRegion(array('max' => 12)); // WHERE region <= 12
     * </code>
     *
     * @param     mixed $region The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeAvisPubQuery The current query, for fluid interface
     */
    public function filterByRegion($region = null, $comparison = null)
    {
        if (is_array($region)) {
            $useMinMax = false;
            if (isset($region['min'])) {
                $this->addUsingAlias(CommonTypeAvisPubPeer::REGION, $region['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($region['max'])) {
                $this->addUsingAlias(CommonTypeAvisPubPeer::REGION, $region['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTypeAvisPubPeer::REGION, $region, $comparison);
    }

    /**
     * Filter the query on the resource_formulaire column
     *
     * Example usage:
     * <code>
     * $query->filterByResourceFormulaire('fooValue');   // WHERE resource_formulaire = 'fooValue'
     * $query->filterByResourceFormulaire('%fooValue%'); // WHERE resource_formulaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $resourceFormulaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeAvisPubQuery The current query, for fluid interface
     */
    public function filterByResourceFormulaire($resourceFormulaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($resourceFormulaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $resourceFormulaire)) {
                $resourceFormulaire = str_replace('*', '%', $resourceFormulaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeAvisPubPeer::RESOURCE_FORMULAIRE, $resourceFormulaire, $comparison);
    }

    /**
     * Filter the query on the ressource_doc_presse column
     *
     * Example usage:
     * <code>
     * $query->filterByRessourceDocPresse('fooValue');   // WHERE ressource_doc_presse = 'fooValue'
     * $query->filterByRessourceDocPresse('%fooValue%'); // WHERE ressource_doc_presse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ressourceDocPresse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeAvisPubQuery The current query, for fluid interface
     */
    public function filterByRessourceDocPresse($ressourceDocPresse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ressourceDocPresse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ressourceDocPresse)) {
                $ressourceDocPresse = str_replace('*', '%', $ressourceDocPresse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeAvisPubPeer::RESSOURCE_DOC_PRESSE, $ressourceDocPresse, $comparison);
    }

    /**
     * Filter the query on the nature_avis column
     *
     * Example usage:
     * <code>
     * $query->filterByNatureAvis(1234); // WHERE nature_avis = 1234
     * $query->filterByNatureAvis(array(12, 34)); // WHERE nature_avis IN (12, 34)
     * $query->filterByNatureAvis(array('min' => 12)); // WHERE nature_avis >= 12
     * $query->filterByNatureAvis(array('max' => 12)); // WHERE nature_avis <= 12
     * </code>
     *
     * @param     mixed $natureAvis The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeAvisPubQuery The current query, for fluid interface
     */
    public function filterByNatureAvis($natureAvis = null, $comparison = null)
    {
        if (is_array($natureAvis)) {
            $useMinMax = false;
            if (isset($natureAvis['min'])) {
                $this->addUsingAlias(CommonTypeAvisPubPeer::NATURE_AVIS, $natureAvis['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($natureAvis['max'])) {
                $this->addUsingAlias(CommonTypeAvisPubPeer::NATURE_AVIS, $natureAvis['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTypeAvisPubPeer::NATURE_AVIS, $natureAvis, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTypeAvisPub $commonTypeAvisPub Object to remove from the list of results
     *
     * @return CommonTypeAvisPubQuery The current query, for fluid interface
     */
    public function prune($commonTypeAvisPub = null)
    {
        if ($commonTypeAvisPub) {
            $this->addUsingAlias(CommonTypeAvisPubPeer::ID, $commonTypeAvisPub->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
