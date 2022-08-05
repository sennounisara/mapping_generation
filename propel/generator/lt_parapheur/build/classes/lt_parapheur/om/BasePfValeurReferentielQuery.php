<?php


/**
 * Base class that represents a query for the 'pf_valeur_referentiel' table.
 *
 * 
 *
 * @method PfValeurReferentielQuery orderByIdValeurRef($order = Criteria::ASC) Order by the ID_VALEUR_REF column
 * @method PfValeurReferentielQuery orderByIdReferentiel($order = Criteria::ASC) Order by the ID_REFERENTIEL column
 * @method PfValeurReferentielQuery orderByLibelleValeurRefFr($order = Criteria::ASC) Order by the LIBELLE_VALEUR_REF_FR column
 * @method PfValeurReferentielQuery orderByLibelleValeurRefAr($order = Criteria::ASC) Order by the LIBELLE_VALEUR_REF_AR column
 * @method PfValeurReferentielQuery orderByCategorie($order = Criteria::ASC) Order by the CATEGORIE column
 * @method PfValeurReferentielQuery orderByOrdre($order = Criteria::ASC) Order by the ORDRE column
 * @method PfValeurReferentielQuery orderByDateModification($order = Criteria::ASC) Order by the DATE_MODIFICATION column
 *
 * @method PfValeurReferentielQuery groupByIdValeurRef() Group by the ID_VALEUR_REF column
 * @method PfValeurReferentielQuery groupByIdReferentiel() Group by the ID_REFERENTIEL column
 * @method PfValeurReferentielQuery groupByLibelleValeurRefFr() Group by the LIBELLE_VALEUR_REF_FR column
 * @method PfValeurReferentielQuery groupByLibelleValeurRefAr() Group by the LIBELLE_VALEUR_REF_AR column
 * @method PfValeurReferentielQuery groupByCategorie() Group by the CATEGORIE column
 * @method PfValeurReferentielQuery groupByOrdre() Group by the ORDRE column
 * @method PfValeurReferentielQuery groupByDateModification() Group by the DATE_MODIFICATION column
 *
 * @method PfValeurReferentielQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PfValeurReferentielQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PfValeurReferentielQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PfValeurReferentiel findOne(PropelPDO $con = null) Return the first PfValeurReferentiel matching the query
 * @method PfValeurReferentiel findOneOrCreate(PropelPDO $con = null) Return the first PfValeurReferentiel matching the query, or a new PfValeurReferentiel object populated from the query conditions when no match is found
 *
 * @method PfValeurReferentiel findOneByIdReferentiel(int $ID_REFERENTIEL) Return the first PfValeurReferentiel filtered by the ID_REFERENTIEL column
 * @method PfValeurReferentiel findOneByLibelleValeurRefFr(string $LIBELLE_VALEUR_REF_FR) Return the first PfValeurReferentiel filtered by the LIBELLE_VALEUR_REF_FR column
 * @method PfValeurReferentiel findOneByLibelleValeurRefAr(string $LIBELLE_VALEUR_REF_AR) Return the first PfValeurReferentiel filtered by the LIBELLE_VALEUR_REF_AR column
 * @method PfValeurReferentiel findOneByCategorie(string $CATEGORIE) Return the first PfValeurReferentiel filtered by the CATEGORIE column
 * @method PfValeurReferentiel findOneByOrdre(int $ORDRE) Return the first PfValeurReferentiel filtered by the ORDRE column
 * @method PfValeurReferentiel findOneByDateModification(string $DATE_MODIFICATION) Return the first PfValeurReferentiel filtered by the DATE_MODIFICATION column
 *
 * @method array findByIdValeurRef(int $ID_VALEUR_REF) Return PfValeurReferentiel objects filtered by the ID_VALEUR_REF column
 * @method array findByIdReferentiel(int $ID_REFERENTIEL) Return PfValeurReferentiel objects filtered by the ID_REFERENTIEL column
 * @method array findByLibelleValeurRefFr(string $LIBELLE_VALEUR_REF_FR) Return PfValeurReferentiel objects filtered by the LIBELLE_VALEUR_REF_FR column
 * @method array findByLibelleValeurRefAr(string $LIBELLE_VALEUR_REF_AR) Return PfValeurReferentiel objects filtered by the LIBELLE_VALEUR_REF_AR column
 * @method array findByCategorie(string $CATEGORIE) Return PfValeurReferentiel objects filtered by the CATEGORIE column
 * @method array findByOrdre(int $ORDRE) Return PfValeurReferentiel objects filtered by the ORDRE column
 * @method array findByDateModification(string $DATE_MODIFICATION) Return PfValeurReferentiel objects filtered by the DATE_MODIFICATION column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BasePfValeurReferentielQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePfValeurReferentielQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'PfValeurReferentiel', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PfValeurReferentielQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PfValeurReferentielQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PfValeurReferentielQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PfValeurReferentielQuery) {
            return $criteria;
        }
        $query = new PfValeurReferentielQuery();
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
     * @return   PfValeurReferentiel|PfValeurReferentiel[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PfValeurReferentielPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PfValeurReferentielPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 PfValeurReferentiel A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdValeurRef($key, $con = null)
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
     * @return                 PfValeurReferentiel A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_VALEUR_REF`, `ID_REFERENTIEL`, `LIBELLE_VALEUR_REF_FR`, `LIBELLE_VALEUR_REF_AR`, `CATEGORIE`, `ORDRE`, `DATE_MODIFICATION` FROM `pf_valeur_referentiel` WHERE `ID_VALEUR_REF` = :p0';
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
            $obj = new PfValeurReferentiel();
            $obj->hydrate($row);
            PfValeurReferentielPeer::addInstanceToPool($obj, (string) $key);
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
     * @return PfValeurReferentiel|PfValeurReferentiel[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|PfValeurReferentiel[]|mixed the list of results, formatted by the current formatter
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
     * @return PfValeurReferentielQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PfValeurReferentielPeer::ID_VALEUR_REF, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PfValeurReferentielQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PfValeurReferentielPeer::ID_VALEUR_REF, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID_VALEUR_REF column
     *
     * Example usage:
     * <code>
     * $query->filterByIdValeurRef(1234); // WHERE ID_VALEUR_REF = 1234
     * $query->filterByIdValeurRef(array(12, 34)); // WHERE ID_VALEUR_REF IN (12, 34)
     * $query->filterByIdValeurRef(array('min' => 12)); // WHERE ID_VALEUR_REF >= 12
     * $query->filterByIdValeurRef(array('max' => 12)); // WHERE ID_VALEUR_REF <= 12
     * </code>
     *
     * @param     mixed $idValeurRef The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfValeurReferentielQuery The current query, for fluid interface
     */
    public function filterByIdValeurRef($idValeurRef = null, $comparison = null)
    {
        if (is_array($idValeurRef)) {
            $useMinMax = false;
            if (isset($idValeurRef['min'])) {
                $this->addUsingAlias(PfValeurReferentielPeer::ID_VALEUR_REF, $idValeurRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idValeurRef['max'])) {
                $this->addUsingAlias(PfValeurReferentielPeer::ID_VALEUR_REF, $idValeurRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfValeurReferentielPeer::ID_VALEUR_REF, $idValeurRef, $comparison);
    }

    /**
     * Filter the query on the ID_REFERENTIEL column
     *
     * Example usage:
     * <code>
     * $query->filterByIdReferentiel(1234); // WHERE ID_REFERENTIEL = 1234
     * $query->filterByIdReferentiel(array(12, 34)); // WHERE ID_REFERENTIEL IN (12, 34)
     * $query->filterByIdReferentiel(array('min' => 12)); // WHERE ID_REFERENTIEL >= 12
     * $query->filterByIdReferentiel(array('max' => 12)); // WHERE ID_REFERENTIEL <= 12
     * </code>
     *
     * @param     mixed $idReferentiel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfValeurReferentielQuery The current query, for fluid interface
     */
    public function filterByIdReferentiel($idReferentiel = null, $comparison = null)
    {
        if (is_array($idReferentiel)) {
            $useMinMax = false;
            if (isset($idReferentiel['min'])) {
                $this->addUsingAlias(PfValeurReferentielPeer::ID_REFERENTIEL, $idReferentiel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idReferentiel['max'])) {
                $this->addUsingAlias(PfValeurReferentielPeer::ID_REFERENTIEL, $idReferentiel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfValeurReferentielPeer::ID_REFERENTIEL, $idReferentiel, $comparison);
    }

    /**
     * Filter the query on the LIBELLE_VALEUR_REF_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleValeurRefFr('fooValue');   // WHERE LIBELLE_VALEUR_REF_FR = 'fooValue'
     * $query->filterByLibelleValeurRefFr('%fooValue%'); // WHERE LIBELLE_VALEUR_REF_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleValeurRefFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfValeurReferentielQuery The current query, for fluid interface
     */
    public function filterByLibelleValeurRefFr($libelleValeurRefFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleValeurRefFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleValeurRefFr)) {
                $libelleValeurRefFr = str_replace('*', '%', $libelleValeurRefFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfValeurReferentielPeer::LIBELLE_VALEUR_REF_FR, $libelleValeurRefFr, $comparison);
    }

    /**
     * Filter the query on the LIBELLE_VALEUR_REF_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleValeurRefAr('fooValue');   // WHERE LIBELLE_VALEUR_REF_AR = 'fooValue'
     * $query->filterByLibelleValeurRefAr('%fooValue%'); // WHERE LIBELLE_VALEUR_REF_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleValeurRefAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfValeurReferentielQuery The current query, for fluid interface
     */
    public function filterByLibelleValeurRefAr($libelleValeurRefAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleValeurRefAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleValeurRefAr)) {
                $libelleValeurRefAr = str_replace('*', '%', $libelleValeurRefAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfValeurReferentielPeer::LIBELLE_VALEUR_REF_AR, $libelleValeurRefAr, $comparison);
    }

    /**
     * Filter the query on the CATEGORIE column
     *
     * Example usage:
     * <code>
     * $query->filterByCategorie('fooValue');   // WHERE CATEGORIE = 'fooValue'
     * $query->filterByCategorie('%fooValue%'); // WHERE CATEGORIE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $categorie The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfValeurReferentielQuery The current query, for fluid interface
     */
    public function filterByCategorie($categorie = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($categorie)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $categorie)) {
                $categorie = str_replace('*', '%', $categorie);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfValeurReferentielPeer::CATEGORIE, $categorie, $comparison);
    }

    /**
     * Filter the query on the ORDRE column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdre(1234); // WHERE ORDRE = 1234
     * $query->filterByOrdre(array(12, 34)); // WHERE ORDRE IN (12, 34)
     * $query->filterByOrdre(array('min' => 12)); // WHERE ORDRE >= 12
     * $query->filterByOrdre(array('max' => 12)); // WHERE ORDRE <= 12
     * </code>
     *
     * @param     mixed $ordre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfValeurReferentielQuery The current query, for fluid interface
     */
    public function filterByOrdre($ordre = null, $comparison = null)
    {
        if (is_array($ordre)) {
            $useMinMax = false;
            if (isset($ordre['min'])) {
                $this->addUsingAlias(PfValeurReferentielPeer::ORDRE, $ordre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordre['max'])) {
                $this->addUsingAlias(PfValeurReferentielPeer::ORDRE, $ordre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfValeurReferentielPeer::ORDRE, $ordre, $comparison);
    }

    /**
     * Filter the query on the DATE_MODIFICATION column
     *
     * Example usage:
     * <code>
     * $query->filterByDateModification('2011-03-14'); // WHERE DATE_MODIFICATION = '2011-03-14'
     * $query->filterByDateModification('now'); // WHERE DATE_MODIFICATION = '2011-03-14'
     * $query->filterByDateModification(array('max' => 'yesterday')); // WHERE DATE_MODIFICATION > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateModification The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfValeurReferentielQuery The current query, for fluid interface
     */
    public function filterByDateModification($dateModification = null, $comparison = null)
    {
        if (is_array($dateModification)) {
            $useMinMax = false;
            if (isset($dateModification['min'])) {
                $this->addUsingAlias(PfValeurReferentielPeer::DATE_MODIFICATION, $dateModification['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateModification['max'])) {
                $this->addUsingAlias(PfValeurReferentielPeer::DATE_MODIFICATION, $dateModification['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfValeurReferentielPeer::DATE_MODIFICATION, $dateModification, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   PfValeurReferentiel $pfValeurReferentiel Object to remove from the list of results
     *
     * @return PfValeurReferentielQuery The current query, for fluid interface
     */
    public function prune($pfValeurReferentiel = null)
    {
        if ($pfValeurReferentiel) {
            $this->addUsingAlias(PfValeurReferentielPeer::ID_VALEUR_REF, $pfValeurReferentiel->getIdValeurRef(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
