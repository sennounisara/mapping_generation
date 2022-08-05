<?php


/**
 * Base class that represents a query for the 'blobOrganisme' table.
 *
 * 
 *
 * @method CommonBlobOrganismeQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonBlobOrganismeQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonBlobOrganismeQuery orderByRevision($order = Criteria::ASC) Order by the revision column
 * @method CommonBlobOrganismeQuery orderByDateAjout($order = Criteria::ASC) Order by the date_ajout column
 *
 * @method CommonBlobOrganismeQuery groupById() Group by the id column
 * @method CommonBlobOrganismeQuery groupByOrganisme() Group by the organisme column
 * @method CommonBlobOrganismeQuery groupByRevision() Group by the revision column
 * @method CommonBlobOrganismeQuery groupByDateAjout() Group by the date_ajout column
 *
 * @method CommonBlobOrganismeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonBlobOrganismeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonBlobOrganismeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonBlobOrganisme findOne(PropelPDO $con = null) Return the first CommonBlobOrganisme matching the query
 * @method CommonBlobOrganisme findOneOrCreate(PropelPDO $con = null) Return the first CommonBlobOrganisme matching the query, or a new CommonBlobOrganisme object populated from the query conditions when no match is found
 *
 * @method CommonBlobOrganisme findOneById(int $id) Return the first CommonBlobOrganisme filtered by the id column
 * @method CommonBlobOrganisme findOneByOrganisme(string $organisme) Return the first CommonBlobOrganisme filtered by the organisme column
 * @method CommonBlobOrganisme findOneByRevision(int $revision) Return the first CommonBlobOrganisme filtered by the revision column
 * @method CommonBlobOrganisme findOneByDateAjout(string $date_ajout) Return the first CommonBlobOrganisme filtered by the date_ajout column
 *
 * @method array findById(int $id) Return CommonBlobOrganisme objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonBlobOrganisme objects filtered by the organisme column
 * @method array findByRevision(int $revision) Return CommonBlobOrganisme objects filtered by the revision column
 * @method array findByDateAjout(string $date_ajout) Return CommonBlobOrganisme objects filtered by the date_ajout column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonBlobOrganismeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonBlobOrganismeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonBlobOrganisme', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonBlobOrganismeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonBlobOrganismeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonBlobOrganismeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonBlobOrganismeQuery) {
            return $criteria;
        }
        $query = new CommonBlobOrganismeQuery();
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
                         A Primary key composition: [$id, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonBlobOrganisme|CommonBlobOrganisme[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonBlobOrganismePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonBlobOrganismePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonBlobOrganisme A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `revision`, `date_ajout` FROM `blobOrganisme` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonBlobOrganisme();
            $obj->hydrate($row);
            CommonBlobOrganismePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonBlobOrganisme|CommonBlobOrganisme[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonBlobOrganisme[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonBlobOrganismeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonBlobOrganismePeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonBlobOrganismePeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonBlobOrganismeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonBlobOrganismePeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonBlobOrganismePeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonBlobOrganismeQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonBlobOrganismePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonBlobOrganismePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonBlobOrganismePeer::ID, $id, $comparison);
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
     * @return CommonBlobOrganismeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonBlobOrganismePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the revision column
     *
     * Example usage:
     * <code>
     * $query->filterByRevision(1234); // WHERE revision = 1234
     * $query->filterByRevision(array(12, 34)); // WHERE revision IN (12, 34)
     * $query->filterByRevision(array('min' => 12)); // WHERE revision >= 12
     * $query->filterByRevision(array('max' => 12)); // WHERE revision <= 12
     * </code>
     *
     * @param     mixed $revision The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBlobOrganismeQuery The current query, for fluid interface
     */
    public function filterByRevision($revision = null, $comparison = null)
    {
        if (is_array($revision)) {
            $useMinMax = false;
            if (isset($revision['min'])) {
                $this->addUsingAlias(CommonBlobOrganismePeer::REVISION, $revision['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($revision['max'])) {
                $this->addUsingAlias(CommonBlobOrganismePeer::REVISION, $revision['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonBlobOrganismePeer::REVISION, $revision, $comparison);
    }

    /**
     * Filter the query on the date_ajout column
     *
     * Example usage:
     * <code>
     * $query->filterByDateAjout('fooValue');   // WHERE date_ajout = 'fooValue'
     * $query->filterByDateAjout('%fooValue%'); // WHERE date_ajout LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateAjout The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBlobOrganismeQuery The current query, for fluid interface
     */
    public function filterByDateAjout($dateAjout = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateAjout)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateAjout)) {
                $dateAjout = str_replace('*', '%', $dateAjout);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonBlobOrganismePeer::DATE_AJOUT, $dateAjout, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonBlobOrganisme $commonBlobOrganisme Object to remove from the list of results
     *
     * @return CommonBlobOrganismeQuery The current query, for fluid interface
     */
    public function prune($commonBlobOrganisme = null)
    {
        if ($commonBlobOrganisme) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonBlobOrganismePeer::ID), $commonBlobOrganisme->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonBlobOrganismePeer::ORGANISME), $commonBlobOrganisme->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
