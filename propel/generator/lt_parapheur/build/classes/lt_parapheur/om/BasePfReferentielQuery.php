<?php


/**
 * Base class that represents a query for the 'pf_referentiel' table.
 *
 * 
 *
 * @method PfReferentielQuery orderByIdReferentiel($order = Criteria::ASC) Order by the ID_REFERENTIEL column
 * @method PfReferentielQuery orderByLibelleReferentiel($order = Criteria::ASC) Order by the LIBELLE_REFERENTIEL column
 *
 * @method PfReferentielQuery groupByIdReferentiel() Group by the ID_REFERENTIEL column
 * @method PfReferentielQuery groupByLibelleReferentiel() Group by the LIBELLE_REFERENTIEL column
 *
 * @method PfReferentielQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PfReferentielQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PfReferentielQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PfReferentiel findOne(PropelPDO $con = null) Return the first PfReferentiel matching the query
 * @method PfReferentiel findOneOrCreate(PropelPDO $con = null) Return the first PfReferentiel matching the query, or a new PfReferentiel object populated from the query conditions when no match is found
 *
 * @method PfReferentiel findOneByLibelleReferentiel(string $LIBELLE_REFERENTIEL) Return the first PfReferentiel filtered by the LIBELLE_REFERENTIEL column
 *
 * @method array findByIdReferentiel(int $ID_REFERENTIEL) Return PfReferentiel objects filtered by the ID_REFERENTIEL column
 * @method array findByLibelleReferentiel(string $LIBELLE_REFERENTIEL) Return PfReferentiel objects filtered by the LIBELLE_REFERENTIEL column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BasePfReferentielQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePfReferentielQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'PfReferentiel', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PfReferentielQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PfReferentielQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PfReferentielQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PfReferentielQuery) {
            return $criteria;
        }
        $query = new PfReferentielQuery();
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
     * @return   PfReferentiel|PfReferentiel[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PfReferentielPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PfReferentielPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 PfReferentiel A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdReferentiel($key, $con = null)
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
     * @return                 PfReferentiel A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_REFERENTIEL`, `LIBELLE_REFERENTIEL` FROM `pf_referentiel` WHERE `ID_REFERENTIEL` = :p0';
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
            $obj = new PfReferentiel();
            $obj->hydrate($row);
            PfReferentielPeer::addInstanceToPool($obj, (string) $key);
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
     * @return PfReferentiel|PfReferentiel[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|PfReferentiel[]|mixed the list of results, formatted by the current formatter
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
     * @return PfReferentielQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PfReferentielPeer::ID_REFERENTIEL, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PfReferentielQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PfReferentielPeer::ID_REFERENTIEL, $keys, Criteria::IN);
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
     * @return PfReferentielQuery The current query, for fluid interface
     */
    public function filterByIdReferentiel($idReferentiel = null, $comparison = null)
    {
        if (is_array($idReferentiel)) {
            $useMinMax = false;
            if (isset($idReferentiel['min'])) {
                $this->addUsingAlias(PfReferentielPeer::ID_REFERENTIEL, $idReferentiel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idReferentiel['max'])) {
                $this->addUsingAlias(PfReferentielPeer::ID_REFERENTIEL, $idReferentiel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PfReferentielPeer::ID_REFERENTIEL, $idReferentiel, $comparison);
    }

    /**
     * Filter the query on the LIBELLE_REFERENTIEL column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleReferentiel('fooValue');   // WHERE LIBELLE_REFERENTIEL = 'fooValue'
     * $query->filterByLibelleReferentiel('%fooValue%'); // WHERE LIBELLE_REFERENTIEL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleReferentiel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PfReferentielQuery The current query, for fluid interface
     */
    public function filterByLibelleReferentiel($libelleReferentiel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleReferentiel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleReferentiel)) {
                $libelleReferentiel = str_replace('*', '%', $libelleReferentiel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PfReferentielPeer::LIBELLE_REFERENTIEL, $libelleReferentiel, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   PfReferentiel $pfReferentiel Object to remove from the list of results
     *
     * @return PfReferentielQuery The current query, for fluid interface
     */
    public function prune($pfReferentiel = null)
    {
        if ($pfReferentiel) {
            $this->addUsingAlias(PfReferentielPeer::ID_REFERENTIEL, $pfReferentiel->getIdReferentiel(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
