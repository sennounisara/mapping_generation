<?php


/**
 * Base class that represents a query for the 'MarchePublie' table.
 *
 * 
 *
 * @method CommonMarchePublieQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonMarchePublieQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonMarchePublieQuery orderByNumeromarcheannee($order = Criteria::ASC) Order by the numeroMarcheAnnee column
 * @method CommonMarchePublieQuery orderByIdservice($order = Criteria::ASC) Order by the idService column
 * @method CommonMarchePublieQuery orderByIspubliee($order = Criteria::ASC) Order by the isPubliee column
 * @method CommonMarchePublieQuery orderByIsimportee($order = Criteria::ASC) Order by the isImportee column
 * @method CommonMarchePublieQuery orderByNewversion($order = Criteria::ASC) Order by the newVersion column
 *
 * @method CommonMarchePublieQuery groupById() Group by the id column
 * @method CommonMarchePublieQuery groupByOrganisme() Group by the organisme column
 * @method CommonMarchePublieQuery groupByNumeromarcheannee() Group by the numeroMarcheAnnee column
 * @method CommonMarchePublieQuery groupByIdservice() Group by the idService column
 * @method CommonMarchePublieQuery groupByIspubliee() Group by the isPubliee column
 * @method CommonMarchePublieQuery groupByIsimportee() Group by the isImportee column
 * @method CommonMarchePublieQuery groupByNewversion() Group by the newVersion column
 *
 * @method CommonMarchePublieQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonMarchePublieQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonMarchePublieQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonMarchePublie findOne(PropelPDO $con = null) Return the first CommonMarchePublie matching the query
 * @method CommonMarchePublie findOneOrCreate(PropelPDO $con = null) Return the first CommonMarchePublie matching the query, or a new CommonMarchePublie object populated from the query conditions when no match is found
 *
 * @method CommonMarchePublie findOneById(int $id) Return the first CommonMarchePublie filtered by the id column
 * @method CommonMarchePublie findOneByOrganisme(string $organisme) Return the first CommonMarchePublie filtered by the organisme column
 * @method CommonMarchePublie findOneByNumeromarcheannee(int $numeroMarcheAnnee) Return the first CommonMarchePublie filtered by the numeroMarcheAnnee column
 * @method CommonMarchePublie findOneByIdservice(int $idService) Return the first CommonMarchePublie filtered by the idService column
 * @method CommonMarchePublie findOneByIspubliee(string $isPubliee) Return the first CommonMarchePublie filtered by the isPubliee column
 * @method CommonMarchePublie findOneByIsimportee(string $isImportee) Return the first CommonMarchePublie filtered by the isImportee column
 * @method CommonMarchePublie findOneByNewversion(string $newVersion) Return the first CommonMarchePublie filtered by the newVersion column
 *
 * @method array findById(int $id) Return CommonMarchePublie objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonMarchePublie objects filtered by the organisme column
 * @method array findByNumeromarcheannee(int $numeroMarcheAnnee) Return CommonMarchePublie objects filtered by the numeroMarcheAnnee column
 * @method array findByIdservice(int $idService) Return CommonMarchePublie objects filtered by the idService column
 * @method array findByIspubliee(string $isPubliee) Return CommonMarchePublie objects filtered by the isPubliee column
 * @method array findByIsimportee(string $isImportee) Return CommonMarchePublie objects filtered by the isImportee column
 * @method array findByNewversion(string $newVersion) Return CommonMarchePublie objects filtered by the newVersion column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonMarchePublieQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonMarchePublieQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonMarchePublie', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonMarchePublieQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonMarchePublieQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonMarchePublieQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonMarchePublieQuery) {
            return $criteria;
        }
        $query = new CommonMarchePublieQuery();
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
     * @return   CommonMarchePublie|CommonMarchePublie[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonMarchePubliePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonMarchePubliePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonMarchePublie A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `numeroMarcheAnnee`, `idService`, `isPubliee`, `isImportee`, `newVersion` FROM `MarchePublie` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonMarchePublie();
            $obj->hydrate($row);
            CommonMarchePubliePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonMarchePublie|CommonMarchePublie[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonMarchePublie[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonMarchePublieQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonMarchePubliePeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonMarchePubliePeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonMarchePublieQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonMarchePubliePeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonMarchePubliePeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonMarchePublieQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonMarchePubliePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonMarchePubliePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonMarchePubliePeer::ID, $id, $comparison);
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
     * @return CommonMarchePublieQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonMarchePubliePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the numeroMarcheAnnee column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeromarcheannee(1234); // WHERE numeroMarcheAnnee = 1234
     * $query->filterByNumeromarcheannee(array(12, 34)); // WHERE numeroMarcheAnnee IN (12, 34)
     * $query->filterByNumeromarcheannee(array('min' => 12)); // WHERE numeroMarcheAnnee >= 12
     * $query->filterByNumeromarcheannee(array('max' => 12)); // WHERE numeroMarcheAnnee <= 12
     * </code>
     *
     * @param     mixed $numeromarcheannee The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMarchePublieQuery The current query, for fluid interface
     */
    public function filterByNumeromarcheannee($numeromarcheannee = null, $comparison = null)
    {
        if (is_array($numeromarcheannee)) {
            $useMinMax = false;
            if (isset($numeromarcheannee['min'])) {
                $this->addUsingAlias(CommonMarchePubliePeer::NUMEROMARCHEANNEE, $numeromarcheannee['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numeromarcheannee['max'])) {
                $this->addUsingAlias(CommonMarchePubliePeer::NUMEROMARCHEANNEE, $numeromarcheannee['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonMarchePubliePeer::NUMEROMARCHEANNEE, $numeromarcheannee, $comparison);
    }

    /**
     * Filter the query on the idService column
     *
     * Example usage:
     * <code>
     * $query->filterByIdservice(1234); // WHERE idService = 1234
     * $query->filterByIdservice(array(12, 34)); // WHERE idService IN (12, 34)
     * $query->filterByIdservice(array('min' => 12)); // WHERE idService >= 12
     * $query->filterByIdservice(array('max' => 12)); // WHERE idService <= 12
     * </code>
     *
     * @param     mixed $idservice The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMarchePublieQuery The current query, for fluid interface
     */
    public function filterByIdservice($idservice = null, $comparison = null)
    {
        if (is_array($idservice)) {
            $useMinMax = false;
            if (isset($idservice['min'])) {
                $this->addUsingAlias(CommonMarchePubliePeer::IDSERVICE, $idservice['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idservice['max'])) {
                $this->addUsingAlias(CommonMarchePubliePeer::IDSERVICE, $idservice['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonMarchePubliePeer::IDSERVICE, $idservice, $comparison);
    }

    /**
     * Filter the query on the isPubliee column
     *
     * Example usage:
     * <code>
     * $query->filterByIspubliee('fooValue');   // WHERE isPubliee = 'fooValue'
     * $query->filterByIspubliee('%fooValue%'); // WHERE isPubliee LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ispubliee The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMarchePublieQuery The current query, for fluid interface
     */
    public function filterByIspubliee($ispubliee = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ispubliee)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ispubliee)) {
                $ispubliee = str_replace('*', '%', $ispubliee);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonMarchePubliePeer::ISPUBLIEE, $ispubliee, $comparison);
    }

    /**
     * Filter the query on the isImportee column
     *
     * Example usage:
     * <code>
     * $query->filterByIsimportee('fooValue');   // WHERE isImportee = 'fooValue'
     * $query->filterByIsimportee('%fooValue%'); // WHERE isImportee LIKE '%fooValue%'
     * </code>
     *
     * @param     string $isimportee The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMarchePublieQuery The current query, for fluid interface
     */
    public function filterByIsimportee($isimportee = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($isimportee)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $isimportee)) {
                $isimportee = str_replace('*', '%', $isimportee);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonMarchePubliePeer::ISIMPORTEE, $isimportee, $comparison);
    }

    /**
     * Filter the query on the newVersion column
     *
     * Example usage:
     * <code>
     * $query->filterByNewversion('fooValue');   // WHERE newVersion = 'fooValue'
     * $query->filterByNewversion('%fooValue%'); // WHERE newVersion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $newversion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMarchePublieQuery The current query, for fluid interface
     */
    public function filterByNewversion($newversion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($newversion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $newversion)) {
                $newversion = str_replace('*', '%', $newversion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonMarchePubliePeer::NEWVERSION, $newversion, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonMarchePublie $commonMarchePublie Object to remove from the list of results
     *
     * @return CommonMarchePublieQuery The current query, for fluid interface
     */
    public function prune($commonMarchePublie = null)
    {
        if ($commonMarchePublie) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonMarchePubliePeer::ID), $commonMarchePublie->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonMarchePubliePeer::ORGANISME), $commonMarchePublie->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
