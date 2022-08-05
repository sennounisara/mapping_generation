<?php


/**
 * Base class that represents a query for the 'Referentiel' table.
 *
 * 
 *
 * @method CommonReferentielQuery orderByIdReferentiel($order = Criteria::ASC) Order by the id_referentiel column
 * @method CommonReferentielQuery orderByLibelleReferentiel($order = Criteria::ASC) Order by the libelle_referentiel column
 *
 * @method CommonReferentielQuery groupByIdReferentiel() Group by the id_referentiel column
 * @method CommonReferentielQuery groupByLibelleReferentiel() Group by the libelle_referentiel column
 *
 * @method CommonReferentielQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonReferentielQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonReferentielQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonReferentiel findOne(PropelPDO $con = null) Return the first CommonReferentiel matching the query
 * @method CommonReferentiel findOneOrCreate(PropelPDO $con = null) Return the first CommonReferentiel matching the query, or a new CommonReferentiel object populated from the query conditions when no match is found
 *
 * @method CommonReferentiel findOneByLibelleReferentiel(string $libelle_referentiel) Return the first CommonReferentiel filtered by the libelle_referentiel column
 *
 * @method array findByIdReferentiel(int $id_referentiel) Return CommonReferentiel objects filtered by the id_referentiel column
 * @method array findByLibelleReferentiel(string $libelle_referentiel) Return CommonReferentiel objects filtered by the libelle_referentiel column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonReferentielQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonReferentielQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonReferentiel', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonReferentielQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonReferentielQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonReferentielQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonReferentielQuery) {
            return $criteria;
        }
        $query = new CommonReferentielQuery();
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
     * @return   CommonReferentiel|CommonReferentiel[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonReferentielPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonReferentielPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonReferentiel A model object, or null if the key is not found
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
     * @return                 CommonReferentiel A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_referentiel`, `libelle_referentiel` FROM `Referentiel` WHERE `id_referentiel` = :p0';
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
            $obj = new CommonReferentiel();
            $obj->hydrate($row);
            CommonReferentielPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonReferentiel|CommonReferentiel[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonReferentiel[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonReferentielQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonReferentielPeer::ID_REFERENTIEL, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonReferentielQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonReferentielPeer::ID_REFERENTIEL, $keys, Criteria::IN);
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
     * @return CommonReferentielQuery The current query, for fluid interface
     */
    public function filterByIdReferentiel($idReferentiel = null, $comparison = null)
    {
        if (is_array($idReferentiel)) {
            $useMinMax = false;
            if (isset($idReferentiel['min'])) {
                $this->addUsingAlias(CommonReferentielPeer::ID_REFERENTIEL, $idReferentiel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idReferentiel['max'])) {
                $this->addUsingAlias(CommonReferentielPeer::ID_REFERENTIEL, $idReferentiel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonReferentielPeer::ID_REFERENTIEL, $idReferentiel, $comparison);
    }

    /**
     * Filter the query on the libelle_referentiel column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleReferentiel('fooValue');   // WHERE libelle_referentiel = 'fooValue'
     * $query->filterByLibelleReferentiel('%fooValue%'); // WHERE libelle_referentiel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleReferentiel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReferentielQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonReferentielPeer::LIBELLE_REFERENTIEL, $libelleReferentiel, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonReferentiel $commonReferentiel Object to remove from the list of results
     *
     * @return CommonReferentielQuery The current query, for fluid interface
     */
    public function prune($commonReferentiel = null)
    {
        if ($commonReferentiel) {
            $this->addUsingAlias(CommonReferentielPeer::ID_REFERENTIEL, $commonReferentiel->getIdReferentiel(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
