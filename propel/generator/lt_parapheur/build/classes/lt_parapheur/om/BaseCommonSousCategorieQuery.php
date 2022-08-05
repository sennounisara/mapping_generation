<?php


/**
 * Base class that represents a query for the 'SousCategorie' table.
 *
 * 
 *
 * @method CommonSousCategorieQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonSousCategorieQuery orderByIdCategorie($order = Criteria::ASC) Order by the id_categorie column
 * @method CommonSousCategorieQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method CommonSousCategorieQuery orderByLibelleAr($order = Criteria::ASC) Order by the libelle_ar column
 * @method CommonSousCategorieQuery orderByLibelleFr($order = Criteria::ASC) Order by the libelle_fr column
 * @method CommonSousCategorieQuery orderByLibelleEn($order = Criteria::ASC) Order by the libelle_en column
 * @method CommonSousCategorieQuery orderByLibelleEs($order = Criteria::ASC) Order by the libelle_es column
 * @method CommonSousCategorieQuery orderByLibelleSu($order = Criteria::ASC) Order by the libelle_su column
 * @method CommonSousCategorieQuery orderByLibelleDu($order = Criteria::ASC) Order by the libelle_du column
 * @method CommonSousCategorieQuery orderByLibelleCz($order = Criteria::ASC) Order by the libelle_cz column
 * @method CommonSousCategorieQuery orderByLibelleIt($order = Criteria::ASC) Order by the libelle_it column
 * @method CommonSousCategorieQuery orderByDateModification($order = Criteria::ASC) Order by the date_modification column
 * @method CommonSousCategorieQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method CommonSousCategorieQuery orderByActive($order = Criteria::ASC) Order by the active column
 *
 * @method CommonSousCategorieQuery groupById() Group by the id column
 * @method CommonSousCategorieQuery groupByIdCategorie() Group by the id_categorie column
 * @method CommonSousCategorieQuery groupByLibelle() Group by the libelle column
 * @method CommonSousCategorieQuery groupByLibelleAr() Group by the libelle_ar column
 * @method CommonSousCategorieQuery groupByLibelleFr() Group by the libelle_fr column
 * @method CommonSousCategorieQuery groupByLibelleEn() Group by the libelle_en column
 * @method CommonSousCategorieQuery groupByLibelleEs() Group by the libelle_es column
 * @method CommonSousCategorieQuery groupByLibelleSu() Group by the libelle_su column
 * @method CommonSousCategorieQuery groupByLibelleDu() Group by the libelle_du column
 * @method CommonSousCategorieQuery groupByLibelleCz() Group by the libelle_cz column
 * @method CommonSousCategorieQuery groupByLibelleIt() Group by the libelle_it column
 * @method CommonSousCategorieQuery groupByDateModification() Group by the date_modification column
 * @method CommonSousCategorieQuery groupByCode() Group by the code column
 * @method CommonSousCategorieQuery groupByActive() Group by the active column
 *
 * @method CommonSousCategorieQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonSousCategorieQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonSousCategorieQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonSousCategorie findOne(PropelPDO $con = null) Return the first CommonSousCategorie matching the query
 * @method CommonSousCategorie findOneOrCreate(PropelPDO $con = null) Return the first CommonSousCategorie matching the query, or a new CommonSousCategorie object populated from the query conditions when no match is found
 *
 * @method CommonSousCategorie findOneByIdCategorie(string $id_categorie) Return the first CommonSousCategorie filtered by the id_categorie column
 * @method CommonSousCategorie findOneByLibelle(string $libelle) Return the first CommonSousCategorie filtered by the libelle column
 * @method CommonSousCategorie findOneByLibelleAr(string $libelle_ar) Return the first CommonSousCategorie filtered by the libelle_ar column
 * @method CommonSousCategorie findOneByLibelleFr(string $libelle_fr) Return the first CommonSousCategorie filtered by the libelle_fr column
 * @method CommonSousCategorie findOneByLibelleEn(string $libelle_en) Return the first CommonSousCategorie filtered by the libelle_en column
 * @method CommonSousCategorie findOneByLibelleEs(string $libelle_es) Return the first CommonSousCategorie filtered by the libelle_es column
 * @method CommonSousCategorie findOneByLibelleSu(string $libelle_su) Return the first CommonSousCategorie filtered by the libelle_su column
 * @method CommonSousCategorie findOneByLibelleDu(string $libelle_du) Return the first CommonSousCategorie filtered by the libelle_du column
 * @method CommonSousCategorie findOneByLibelleCz(string $libelle_cz) Return the first CommonSousCategorie filtered by the libelle_cz column
 * @method CommonSousCategorie findOneByLibelleIt(string $libelle_it) Return the first CommonSousCategorie filtered by the libelle_it column
 * @method CommonSousCategorie findOneByDateModification(string $date_modification) Return the first CommonSousCategorie filtered by the date_modification column
 * @method CommonSousCategorie findOneByCode(string $code) Return the first CommonSousCategorie filtered by the code column
 * @method CommonSousCategorie findOneByActive(string $active) Return the first CommonSousCategorie filtered by the active column
 *
 * @method array findById(string $id) Return CommonSousCategorie objects filtered by the id column
 * @method array findByIdCategorie(string $id_categorie) Return CommonSousCategorie objects filtered by the id_categorie column
 * @method array findByLibelle(string $libelle) Return CommonSousCategorie objects filtered by the libelle column
 * @method array findByLibelleAr(string $libelle_ar) Return CommonSousCategorie objects filtered by the libelle_ar column
 * @method array findByLibelleFr(string $libelle_fr) Return CommonSousCategorie objects filtered by the libelle_fr column
 * @method array findByLibelleEn(string $libelle_en) Return CommonSousCategorie objects filtered by the libelle_en column
 * @method array findByLibelleEs(string $libelle_es) Return CommonSousCategorie objects filtered by the libelle_es column
 * @method array findByLibelleSu(string $libelle_su) Return CommonSousCategorie objects filtered by the libelle_su column
 * @method array findByLibelleDu(string $libelle_du) Return CommonSousCategorie objects filtered by the libelle_du column
 * @method array findByLibelleCz(string $libelle_cz) Return CommonSousCategorie objects filtered by the libelle_cz column
 * @method array findByLibelleIt(string $libelle_it) Return CommonSousCategorie objects filtered by the libelle_it column
 * @method array findByDateModification(string $date_modification) Return CommonSousCategorie objects filtered by the date_modification column
 * @method array findByCode(string $code) Return CommonSousCategorie objects filtered by the code column
 * @method array findByActive(string $active) Return CommonSousCategorie objects filtered by the active column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonSousCategorieQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonSousCategorieQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonSousCategorie', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonSousCategorieQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonSousCategorieQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonSousCategorieQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonSousCategorieQuery) {
            return $criteria;
        }
        $query = new CommonSousCategorieQuery();
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
     * @return   CommonSousCategorie|CommonSousCategorie[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonSousCategoriePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonSousCategoriePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonSousCategorie A model object, or null if the key is not found
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
     * @return                 CommonSousCategorie A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_categorie`, `libelle`, `libelle_ar`, `libelle_fr`, `libelle_en`, `libelle_es`, `libelle_su`, `libelle_du`, `libelle_cz`, `libelle_it`, `date_modification`, `code`, `active` FROM `SousCategorie` WHERE `id` = :p0';
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
            $obj = new CommonSousCategorie();
            $obj->hydrate($row);
            CommonSousCategoriePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonSousCategorie|CommonSousCategorie[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonSousCategorie[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonSousCategorieQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonSousCategoriePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonSousCategorieQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonSousCategoriePeer::ID, $keys, Criteria::IN);
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
     * @return CommonSousCategorieQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonSousCategoriePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_categorie column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCategorie('fooValue');   // WHERE id_categorie = 'fooValue'
     * $query->filterByIdCategorie('%fooValue%'); // WHERE id_categorie LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idCategorie The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSousCategorieQuery The current query, for fluid interface
     */
    public function filterByIdCategorie($idCategorie = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idCategorie)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idCategorie)) {
                $idCategorie = str_replace('*', '%', $idCategorie);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonSousCategoriePeer::ID_CATEGORIE, $idCategorie, $comparison);
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
     * @return CommonSousCategorieQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonSousCategoriePeer::LIBELLE, $libelle, $comparison);
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
     * @return CommonSousCategorieQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonSousCategoriePeer::LIBELLE_AR, $libelleAr, $comparison);
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
     * @return CommonSousCategorieQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonSousCategoriePeer::LIBELLE_FR, $libelleFr, $comparison);
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
     * @return CommonSousCategorieQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonSousCategoriePeer::LIBELLE_EN, $libelleEn, $comparison);
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
     * @return CommonSousCategorieQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonSousCategoriePeer::LIBELLE_ES, $libelleEs, $comparison);
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
     * @return CommonSousCategorieQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonSousCategoriePeer::LIBELLE_SU, $libelleSu, $comparison);
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
     * @return CommonSousCategorieQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonSousCategoriePeer::LIBELLE_DU, $libelleDu, $comparison);
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
     * @return CommonSousCategorieQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonSousCategoriePeer::LIBELLE_CZ, $libelleCz, $comparison);
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
     * @return CommonSousCategorieQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonSousCategoriePeer::LIBELLE_IT, $libelleIt, $comparison);
    }

    /**
     * Filter the query on the date_modification column
     *
     * Example usage:
     * <code>
     * $query->filterByDateModification('fooValue');   // WHERE date_modification = 'fooValue'
     * $query->filterByDateModification('%fooValue%'); // WHERE date_modification LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateModification The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSousCategorieQuery The current query, for fluid interface
     */
    public function filterByDateModification($dateModification = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateModification)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateModification)) {
                $dateModification = str_replace('*', '%', $dateModification);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonSousCategoriePeer::DATE_MODIFICATION, $dateModification, $comparison);
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
     * @return CommonSousCategorieQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonSousCategoriePeer::CODE, $code, $comparison);
    }

    /**
     * Filter the query on the active column
     *
     * Example usage:
     * <code>
     * $query->filterByActive('fooValue');   // WHERE active = 'fooValue'
     * $query->filterByActive('%fooValue%'); // WHERE active LIKE '%fooValue%'
     * </code>
     *
     * @param     string $active The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonSousCategorieQuery The current query, for fluid interface
     */
    public function filterByActive($active = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($active)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $active)) {
                $active = str_replace('*', '%', $active);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonSousCategoriePeer::ACTIVE, $active, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonSousCategorie $commonSousCategorie Object to remove from the list of results
     *
     * @return CommonSousCategorieQuery The current query, for fluid interface
     */
    public function prune($commonSousCategorie = null)
    {
        if ($commonSousCategorie) {
            $this->addUsingAlias(CommonSousCategoriePeer::ID, $commonSousCategorie->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
