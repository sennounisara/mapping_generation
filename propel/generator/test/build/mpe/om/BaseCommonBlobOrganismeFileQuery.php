<?php


/**
 * Base class that represents a query for the 'blobOrganisme_file' table.
 *
 * 
 *
 * @method CommonBlobOrganismeFileQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonBlobOrganismeFileQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonBlobOrganismeFileQuery orderByRevision($order = Criteria::ASC) Order by the revision column
 * @method CommonBlobOrganismeFileQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method CommonBlobOrganismeFileQuery orderByDeletionDatetime($order = Criteria::ASC) Order by the deletion_datetime column
 * @method CommonBlobOrganismeFileQuery orderByDateAjout($order = Criteria::ASC) Order by the date_ajout column
 *
 * @method CommonBlobOrganismeFileQuery groupById() Group by the id column
 * @method CommonBlobOrganismeFileQuery groupByOrganisme() Group by the organisme column
 * @method CommonBlobOrganismeFileQuery groupByRevision() Group by the revision column
 * @method CommonBlobOrganismeFileQuery groupByName() Group by the name column
 * @method CommonBlobOrganismeFileQuery groupByDeletionDatetime() Group by the deletion_datetime column
 * @method CommonBlobOrganismeFileQuery groupByDateAjout() Group by the date_ajout column
 *
 * @method CommonBlobOrganismeFileQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonBlobOrganismeFileQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonBlobOrganismeFileQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonBlobOrganismeFile findOne(PropelPDO $con = null) Return the first CommonBlobOrganismeFile matching the query
 * @method CommonBlobOrganismeFile findOneOrCreate(PropelPDO $con = null) Return the first CommonBlobOrganismeFile matching the query, or a new CommonBlobOrganismeFile object populated from the query conditions when no match is found
 *
 * @method CommonBlobOrganismeFile findOneById(int $id) Return the first CommonBlobOrganismeFile filtered by the id column
 * @method CommonBlobOrganismeFile findOneByOrganisme(string $organisme) Return the first CommonBlobOrganismeFile filtered by the organisme column
 * @method CommonBlobOrganismeFile findOneByRevision(int $revision) Return the first CommonBlobOrganismeFile filtered by the revision column
 * @method CommonBlobOrganismeFile findOneByName(string $name) Return the first CommonBlobOrganismeFile filtered by the name column
 * @method CommonBlobOrganismeFile findOneByDeletionDatetime(string $deletion_datetime) Return the first CommonBlobOrganismeFile filtered by the deletion_datetime column
 * @method CommonBlobOrganismeFile findOneByDateAjout(string $date_ajout) Return the first CommonBlobOrganismeFile filtered by the date_ajout column
 *
 * @method array findById(int $id) Return CommonBlobOrganismeFile objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonBlobOrganismeFile objects filtered by the organisme column
 * @method array findByRevision(int $revision) Return CommonBlobOrganismeFile objects filtered by the revision column
 * @method array findByName(string $name) Return CommonBlobOrganismeFile objects filtered by the name column
 * @method array findByDeletionDatetime(string $deletion_datetime) Return CommonBlobOrganismeFile objects filtered by the deletion_datetime column
 * @method array findByDateAjout(string $date_ajout) Return CommonBlobOrganismeFile objects filtered by the date_ajout column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonBlobOrganismeFileQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonBlobOrganismeFileQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonBlobOrganismeFile', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonBlobOrganismeFileQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonBlobOrganismeFileQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonBlobOrganismeFileQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonBlobOrganismeFileQuery) {
            return $criteria;
        }
        $query = new CommonBlobOrganismeFileQuery();
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
     * $obj = $c->findPk(array(12, 34, 56), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query 
                         A Primary key composition: [$id, $organisme, $revision]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonBlobOrganismeFile|CommonBlobOrganismeFile[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonBlobOrganismeFilePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonBlobOrganismeFilePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonBlobOrganismeFile A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `revision`, `name`, `deletion_datetime`, `date_ajout` FROM `blobOrganisme_file` WHERE `id` = :p0 AND `organisme` = :p1 AND `revision` = :p2';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);			
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonBlobOrganismeFile();
            $obj->hydrate($row);
            CommonBlobOrganismeFilePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return CommonBlobOrganismeFile|CommonBlobOrganismeFile[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonBlobOrganismeFile[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonBlobOrganismeFileQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonBlobOrganismeFilePeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonBlobOrganismeFilePeer::ORGANISME, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(CommonBlobOrganismeFilePeer::REVISION, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonBlobOrganismeFileQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonBlobOrganismeFilePeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonBlobOrganismeFilePeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(CommonBlobOrganismeFilePeer::REVISION, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
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
     * @return CommonBlobOrganismeFileQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonBlobOrganismeFilePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonBlobOrganismeFilePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonBlobOrganismeFilePeer::ID, $id, $comparison);
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
     * @return CommonBlobOrganismeFileQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonBlobOrganismeFilePeer::ORGANISME, $organisme, $comparison);
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
     * @return CommonBlobOrganismeFileQuery The current query, for fluid interface
     */
    public function filterByRevision($revision = null, $comparison = null)
    {
        if (is_array($revision)) {
            $useMinMax = false;
            if (isset($revision['min'])) {
                $this->addUsingAlias(CommonBlobOrganismeFilePeer::REVISION, $revision['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($revision['max'])) {
                $this->addUsingAlias(CommonBlobOrganismeFilePeer::REVISION, $revision['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonBlobOrganismeFilePeer::REVISION, $revision, $comparison);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%'); // WHERE name LIKE '%fooValue%'
     * </code>
     *
     * @param     string $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBlobOrganismeFileQuery The current query, for fluid interface
     */
    public function filterByName($name = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($name)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $name)) {
                $name = str_replace('*', '%', $name);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonBlobOrganismeFilePeer::NAME, $name, $comparison);
    }

    /**
     * Filter the query on the deletion_datetime column
     *
     * Example usage:
     * <code>
     * $query->filterByDeletionDatetime('2011-03-14'); // WHERE deletion_datetime = '2011-03-14'
     * $query->filterByDeletionDatetime('now'); // WHERE deletion_datetime = '2011-03-14'
     * $query->filterByDeletionDatetime(array('max' => 'yesterday')); // WHERE deletion_datetime > '2011-03-13'
     * </code>
     *
     * @param     mixed $deletionDatetime The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBlobOrganismeFileQuery The current query, for fluid interface
     */
    public function filterByDeletionDatetime($deletionDatetime = null, $comparison = null)
    {
        if (is_array($deletionDatetime)) {
            $useMinMax = false;
            if (isset($deletionDatetime['min'])) {
                $this->addUsingAlias(CommonBlobOrganismeFilePeer::DELETION_DATETIME, $deletionDatetime['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($deletionDatetime['max'])) {
                $this->addUsingAlias(CommonBlobOrganismeFilePeer::DELETION_DATETIME, $deletionDatetime['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonBlobOrganismeFilePeer::DELETION_DATETIME, $deletionDatetime, $comparison);
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
     * @return CommonBlobOrganismeFileQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonBlobOrganismeFilePeer::DATE_AJOUT, $dateAjout, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonBlobOrganismeFile $commonBlobOrganismeFile Object to remove from the list of results
     *
     * @return CommonBlobOrganismeFileQuery The current query, for fluid interface
     */
    public function prune($commonBlobOrganismeFile = null)
    {
        if ($commonBlobOrganismeFile) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonBlobOrganismeFilePeer::ID), $commonBlobOrganismeFile->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonBlobOrganismeFilePeer::ORGANISME), $commonBlobOrganismeFile->getOrganisme(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(CommonBlobOrganismeFilePeer::REVISION), $commonBlobOrganismeFile->getRevision(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
