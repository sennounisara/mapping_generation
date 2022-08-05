<?php


/**
 * Base class that represents a query for the 'ReferentielOrg' table.
 *
 * 
 *
 * @method CommonReferentielOrgQuery orderByIdReferentiel($order = Criteria::ASC) Order by the id_referentiel column
 * @method CommonReferentielOrgQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonReferentielOrgQuery orderByLibelleReferentiel($order = Criteria::ASC) Order by the libelle_referentiel column
 *
 * @method CommonReferentielOrgQuery groupByIdReferentiel() Group by the id_referentiel column
 * @method CommonReferentielOrgQuery groupByOrganisme() Group by the organisme column
 * @method CommonReferentielOrgQuery groupByLibelleReferentiel() Group by the libelle_referentiel column
 *
 * @method CommonReferentielOrgQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonReferentielOrgQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonReferentielOrgQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonReferentielOrg findOne(PropelPDO $con = null) Return the first CommonReferentielOrg matching the query
 * @method CommonReferentielOrg findOneOrCreate(PropelPDO $con = null) Return the first CommonReferentielOrg matching the query, or a new CommonReferentielOrg object populated from the query conditions when no match is found
 *
 * @method CommonReferentielOrg findOneByIdReferentiel(int $id_referentiel) Return the first CommonReferentielOrg filtered by the id_referentiel column
 * @method CommonReferentielOrg findOneByOrganisme(string $organisme) Return the first CommonReferentielOrg filtered by the organisme column
 * @method CommonReferentielOrg findOneByLibelleReferentiel(string $libelle_referentiel) Return the first CommonReferentielOrg filtered by the libelle_referentiel column
 *
 * @method array findByIdReferentiel(int $id_referentiel) Return CommonReferentielOrg objects filtered by the id_referentiel column
 * @method array findByOrganisme(string $organisme) Return CommonReferentielOrg objects filtered by the organisme column
 * @method array findByLibelleReferentiel(string $libelle_referentiel) Return CommonReferentielOrg objects filtered by the libelle_referentiel column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonReferentielOrgQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonReferentielOrgQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonReferentielOrg', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonReferentielOrgQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonReferentielOrgQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonReferentielOrgQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonReferentielOrgQuery) {
            return $criteria;
        }
        $query = new CommonReferentielOrgQuery();
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
                         A Primary key composition: [$id_referentiel, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonReferentielOrg|CommonReferentielOrg[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonReferentielOrgPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonReferentielOrgPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonReferentielOrg A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_referentiel`, `organisme`, `libelle_referentiel` FROM `ReferentielOrg` WHERE `id_referentiel` = :p0 AND `organisme` = :p1';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonReferentielOrg();
            $obj->hydrate($row);
            CommonReferentielOrgPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonReferentielOrg|CommonReferentielOrg[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonReferentielOrg[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonReferentielOrgQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonReferentielOrgPeer::ID_REFERENTIEL, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonReferentielOrgPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonReferentielOrgQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonReferentielOrgPeer::ID_REFERENTIEL, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonReferentielOrgPeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return CommonReferentielOrgQuery The current query, for fluid interface
     */
    public function filterByIdReferentiel($idReferentiel = null, $comparison = null)
    {
        if (is_array($idReferentiel)) {
            $useMinMax = false;
            if (isset($idReferentiel['min'])) {
                $this->addUsingAlias(CommonReferentielOrgPeer::ID_REFERENTIEL, $idReferentiel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idReferentiel['max'])) {
                $this->addUsingAlias(CommonReferentielOrgPeer::ID_REFERENTIEL, $idReferentiel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonReferentielOrgPeer::ID_REFERENTIEL, $idReferentiel, $comparison);
    }

    /**
     * Filter the query on the organisme column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganisme('fooValue');   // WHERE organisme = 'fooValue'
     * $query->filterByOrganisme('%fooValue%'); // WHERE organisme LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organisme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReferentielOrgQuery The current query, for fluid interface
     */
    public function filterByOrganisme($organisme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($organisme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $organisme)) {
                $organisme = str_replace('*', '%', $organisme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonReferentielOrgPeer::ORGANISME, $organisme, $comparison);
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
     * @return CommonReferentielOrgQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonReferentielOrgPeer::LIBELLE_REFERENTIEL, $libelleReferentiel, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonReferentielOrg $commonReferentielOrg Object to remove from the list of results
     *
     * @return CommonReferentielOrgQuery The current query, for fluid interface
     */
    public function prune($commonReferentielOrg = null)
    {
        if ($commonReferentielOrg) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonReferentielOrgPeer::ID_REFERENTIEL), $commonReferentielOrg->getIdReferentiel(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonReferentielOrgPeer::ORGANISME), $commonReferentielOrg->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
