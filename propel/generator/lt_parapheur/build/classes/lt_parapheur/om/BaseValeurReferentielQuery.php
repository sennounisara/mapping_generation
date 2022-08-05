<?php


/**
 * Base class that represents a query for the 'valeur_referentiel' table.
 *
 * 
 *
 * @method ValeurReferentielQuery orderByIdValeurRef($order = Criteria::ASC) Order by the ID_VALEUR_REF column
 * @method ValeurReferentielQuery orderByIdReferentiel($order = Criteria::ASC) Order by the ID_REFERENTIEL column
 * @method ValeurReferentielQuery orderByLibelleValeurRefFr($order = Criteria::ASC) Order by the LIBELLE_VALEUR_REF_FR column
 * @method ValeurReferentielQuery orderByLibelleValeurRefAr($order = Criteria::ASC) Order by the LIBELLE_VALEUR_REF_AR column
 * @method ValeurReferentielQuery orderByStyle($order = Criteria::ASC) Order by the STYLE column
 * @method ValeurReferentielQuery orderByIdEntite($order = Criteria::ASC) Order by the ID_ENTITE column
 * @method ValeurReferentielQuery orderByChampGeneriqueFr($order = Criteria::ASC) Order by the CHAMP_GENERIQUE_FR column
 * @method ValeurReferentielQuery orderByChampGeneriqueAr($order = Criteria::ASC) Order by the CHAMP_GENERIQUE_AR column
 * @method ValeurReferentielQuery orderByIdExterne($order = Criteria::ASC) Order by the ID_EXTERNE column
 *
 * @method ValeurReferentielQuery groupByIdValeurRef() Group by the ID_VALEUR_REF column
 * @method ValeurReferentielQuery groupByIdReferentiel() Group by the ID_REFERENTIEL column
 * @method ValeurReferentielQuery groupByLibelleValeurRefFr() Group by the LIBELLE_VALEUR_REF_FR column
 * @method ValeurReferentielQuery groupByLibelleValeurRefAr() Group by the LIBELLE_VALEUR_REF_AR column
 * @method ValeurReferentielQuery groupByStyle() Group by the STYLE column
 * @method ValeurReferentielQuery groupByIdEntite() Group by the ID_ENTITE column
 * @method ValeurReferentielQuery groupByChampGeneriqueFr() Group by the CHAMP_GENERIQUE_FR column
 * @method ValeurReferentielQuery groupByChampGeneriqueAr() Group by the CHAMP_GENERIQUE_AR column
 * @method ValeurReferentielQuery groupByIdExterne() Group by the ID_EXTERNE column
 *
 * @method ValeurReferentielQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ValeurReferentielQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ValeurReferentielQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ValeurReferentiel findOne(PropelPDO $con = null) Return the first ValeurReferentiel matching the query
 * @method ValeurReferentiel findOneOrCreate(PropelPDO $con = null) Return the first ValeurReferentiel matching the query, or a new ValeurReferentiel object populated from the query conditions when no match is found
 *
 * @method ValeurReferentiel findOneByIdReferentiel(int $ID_REFERENTIEL) Return the first ValeurReferentiel filtered by the ID_REFERENTIEL column
 * @method ValeurReferentiel findOneByLibelleValeurRefFr(string $LIBELLE_VALEUR_REF_FR) Return the first ValeurReferentiel filtered by the LIBELLE_VALEUR_REF_FR column
 * @method ValeurReferentiel findOneByLibelleValeurRefAr(string $LIBELLE_VALEUR_REF_AR) Return the first ValeurReferentiel filtered by the LIBELLE_VALEUR_REF_AR column
 * @method ValeurReferentiel findOneByStyle(string $STYLE) Return the first ValeurReferentiel filtered by the STYLE column
 * @method ValeurReferentiel findOneByIdEntite(int $ID_ENTITE) Return the first ValeurReferentiel filtered by the ID_ENTITE column
 * @method ValeurReferentiel findOneByChampGeneriqueFr(string $CHAMP_GENERIQUE_FR) Return the first ValeurReferentiel filtered by the CHAMP_GENERIQUE_FR column
 * @method ValeurReferentiel findOneByChampGeneriqueAr(string $CHAMP_GENERIQUE_AR) Return the first ValeurReferentiel filtered by the CHAMP_GENERIQUE_AR column
 * @method ValeurReferentiel findOneByIdExterne(int $ID_EXTERNE) Return the first ValeurReferentiel filtered by the ID_EXTERNE column
 *
 * @method array findByIdValeurRef(int $ID_VALEUR_REF) Return ValeurReferentiel objects filtered by the ID_VALEUR_REF column
 * @method array findByIdReferentiel(int $ID_REFERENTIEL) Return ValeurReferentiel objects filtered by the ID_REFERENTIEL column
 * @method array findByLibelleValeurRefFr(string $LIBELLE_VALEUR_REF_FR) Return ValeurReferentiel objects filtered by the LIBELLE_VALEUR_REF_FR column
 * @method array findByLibelleValeurRefAr(string $LIBELLE_VALEUR_REF_AR) Return ValeurReferentiel objects filtered by the LIBELLE_VALEUR_REF_AR column
 * @method array findByStyle(string $STYLE) Return ValeurReferentiel objects filtered by the STYLE column
 * @method array findByIdEntite(int $ID_ENTITE) Return ValeurReferentiel objects filtered by the ID_ENTITE column
 * @method array findByChampGeneriqueFr(string $CHAMP_GENERIQUE_FR) Return ValeurReferentiel objects filtered by the CHAMP_GENERIQUE_FR column
 * @method array findByChampGeneriqueAr(string $CHAMP_GENERIQUE_AR) Return ValeurReferentiel objects filtered by the CHAMP_GENERIQUE_AR column
 * @method array findByIdExterne(int $ID_EXTERNE) Return ValeurReferentiel objects filtered by the ID_EXTERNE column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseValeurReferentielQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseValeurReferentielQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'ValeurReferentiel', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ValeurReferentielQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ValeurReferentielQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ValeurReferentielQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ValeurReferentielQuery) {
            return $criteria;
        }
        $query = new ValeurReferentielQuery();
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
     * @return   ValeurReferentiel|ValeurReferentiel[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ValeurReferentielPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ValeurReferentielPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ValeurReferentiel A model object, or null if the key is not found
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
     * @return                 ValeurReferentiel A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_VALEUR_REF`, `ID_REFERENTIEL`, `LIBELLE_VALEUR_REF_FR`, `LIBELLE_VALEUR_REF_AR`, `STYLE`, `ID_ENTITE`, `CHAMP_GENERIQUE_FR`, `CHAMP_GENERIQUE_AR`, `ID_EXTERNE` FROM `valeur_referentiel` WHERE `ID_VALEUR_REF` = :p0';
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
            $obj = new ValeurReferentiel();
            $obj->hydrate($row);
            ValeurReferentielPeer::addInstanceToPool($obj, (string) $key);
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
     * @return ValeurReferentiel|ValeurReferentiel[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ValeurReferentiel[]|mixed the list of results, formatted by the current formatter
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
     * @return ValeurReferentielQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ValeurReferentielPeer::ID_VALEUR_REF, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ValeurReferentielQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ValeurReferentielPeer::ID_VALEUR_REF, $keys, Criteria::IN);
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
     * @return ValeurReferentielQuery The current query, for fluid interface
     */
    public function filterByIdValeurRef($idValeurRef = null, $comparison = null)
    {
        if (is_array($idValeurRef)) {
            $useMinMax = false;
            if (isset($idValeurRef['min'])) {
                $this->addUsingAlias(ValeurReferentielPeer::ID_VALEUR_REF, $idValeurRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idValeurRef['max'])) {
                $this->addUsingAlias(ValeurReferentielPeer::ID_VALEUR_REF, $idValeurRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ValeurReferentielPeer::ID_VALEUR_REF, $idValeurRef, $comparison);
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
     * @return ValeurReferentielQuery The current query, for fluid interface
     */
    public function filterByIdReferentiel($idReferentiel = null, $comparison = null)
    {
        if (is_array($idReferentiel)) {
            $useMinMax = false;
            if (isset($idReferentiel['min'])) {
                $this->addUsingAlias(ValeurReferentielPeer::ID_REFERENTIEL, $idReferentiel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idReferentiel['max'])) {
                $this->addUsingAlias(ValeurReferentielPeer::ID_REFERENTIEL, $idReferentiel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ValeurReferentielPeer::ID_REFERENTIEL, $idReferentiel, $comparison);
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
     * @return ValeurReferentielQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ValeurReferentielPeer::LIBELLE_VALEUR_REF_FR, $libelleValeurRefFr, $comparison);
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
     * @return ValeurReferentielQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ValeurReferentielPeer::LIBELLE_VALEUR_REF_AR, $libelleValeurRefAr, $comparison);
    }

    /**
     * Filter the query on the STYLE column
     *
     * Example usage:
     * <code>
     * $query->filterByStyle('fooValue');   // WHERE STYLE = 'fooValue'
     * $query->filterByStyle('%fooValue%'); // WHERE STYLE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $style The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ValeurReferentielQuery The current query, for fluid interface
     */
    public function filterByStyle($style = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($style)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $style)) {
                $style = str_replace('*', '%', $style);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ValeurReferentielPeer::STYLE, $style, $comparison);
    }

    /**
     * Filter the query on the ID_ENTITE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntite(1234); // WHERE ID_ENTITE = 1234
     * $query->filterByIdEntite(array(12, 34)); // WHERE ID_ENTITE IN (12, 34)
     * $query->filterByIdEntite(array('min' => 12)); // WHERE ID_ENTITE >= 12
     * $query->filterByIdEntite(array('max' => 12)); // WHERE ID_ENTITE <= 12
     * </code>
     *
     * @param     mixed $idEntite The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ValeurReferentielQuery The current query, for fluid interface
     */
    public function filterByIdEntite($idEntite = null, $comparison = null)
    {
        if (is_array($idEntite)) {
            $useMinMax = false;
            if (isset($idEntite['min'])) {
                $this->addUsingAlias(ValeurReferentielPeer::ID_ENTITE, $idEntite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntite['max'])) {
                $this->addUsingAlias(ValeurReferentielPeer::ID_ENTITE, $idEntite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ValeurReferentielPeer::ID_ENTITE, $idEntite, $comparison);
    }

    /**
     * Filter the query on the CHAMP_GENERIQUE_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByChampGeneriqueFr('fooValue');   // WHERE CHAMP_GENERIQUE_FR = 'fooValue'
     * $query->filterByChampGeneriqueFr('%fooValue%'); // WHERE CHAMP_GENERIQUE_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $champGeneriqueFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ValeurReferentielQuery The current query, for fluid interface
     */
    public function filterByChampGeneriqueFr($champGeneriqueFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($champGeneriqueFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $champGeneriqueFr)) {
                $champGeneriqueFr = str_replace('*', '%', $champGeneriqueFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ValeurReferentielPeer::CHAMP_GENERIQUE_FR, $champGeneriqueFr, $comparison);
    }

    /**
     * Filter the query on the CHAMP_GENERIQUE_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByChampGeneriqueAr('fooValue');   // WHERE CHAMP_GENERIQUE_AR = 'fooValue'
     * $query->filterByChampGeneriqueAr('%fooValue%'); // WHERE CHAMP_GENERIQUE_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $champGeneriqueAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ValeurReferentielQuery The current query, for fluid interface
     */
    public function filterByChampGeneriqueAr($champGeneriqueAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($champGeneriqueAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $champGeneriqueAr)) {
                $champGeneriqueAr = str_replace('*', '%', $champGeneriqueAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ValeurReferentielPeer::CHAMP_GENERIQUE_AR, $champGeneriqueAr, $comparison);
    }

    /**
     * Filter the query on the ID_EXTERNE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdExterne(1234); // WHERE ID_EXTERNE = 1234
     * $query->filterByIdExterne(array(12, 34)); // WHERE ID_EXTERNE IN (12, 34)
     * $query->filterByIdExterne(array('min' => 12)); // WHERE ID_EXTERNE >= 12
     * $query->filterByIdExterne(array('max' => 12)); // WHERE ID_EXTERNE <= 12
     * </code>
     *
     * @param     mixed $idExterne The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ValeurReferentielQuery The current query, for fluid interface
     */
    public function filterByIdExterne($idExterne = null, $comparison = null)
    {
        if (is_array($idExterne)) {
            $useMinMax = false;
            if (isset($idExterne['min'])) {
                $this->addUsingAlias(ValeurReferentielPeer::ID_EXTERNE, $idExterne['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idExterne['max'])) {
                $this->addUsingAlias(ValeurReferentielPeer::ID_EXTERNE, $idExterne['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ValeurReferentielPeer::ID_EXTERNE, $idExterne, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ValeurReferentiel $valeurReferentiel Object to remove from the list of results
     *
     * @return ValeurReferentielQuery The current query, for fluid interface
     */
    public function prune($valeurReferentiel = null)
    {
        if ($valeurReferentiel) {
            $this->addUsingAlias(ValeurReferentielPeer::ID_VALEUR_REF, $valeurReferentiel->getIdValeurRef(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
