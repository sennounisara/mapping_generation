<?php


/**
 * Base class that represents a query for the 'DocumentExterne' table.
 *
 * 
 *
 * @method CommonDocumentExterneQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonDocumentExterneQuery orderByRefconsultation($order = Criteria::ASC) Order by the refConsultation column
 * @method CommonDocumentExterneQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonDocumentExterneQuery orderByIdblob($order = Criteria::ASC) Order by the idBlob column
 * @method CommonDocumentExterneQuery orderByIdentreprise($order = Criteria::ASC) Order by the idEntreprise column
 * @method CommonDocumentExterneQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method CommonDocumentExterneQuery orderByNom($order = Criteria::ASC) Order by the nom column
 * @method CommonDocumentExterneQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method CommonDocumentExterneQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method CommonDocumentExterneQuery orderByLot($order = Criteria::ASC) Order by the lot column
 *
 * @method CommonDocumentExterneQuery groupById() Group by the id column
 * @method CommonDocumentExterneQuery groupByRefconsultation() Group by the refConsultation column
 * @method CommonDocumentExterneQuery groupByOrganisme() Group by the organisme column
 * @method CommonDocumentExterneQuery groupByIdblob() Group by the idBlob column
 * @method CommonDocumentExterneQuery groupByIdentreprise() Group by the idEntreprise column
 * @method CommonDocumentExterneQuery groupByType() Group by the type column
 * @method CommonDocumentExterneQuery groupByNom() Group by the nom column
 * @method CommonDocumentExterneQuery groupByDescription() Group by the description column
 * @method CommonDocumentExterneQuery groupByDate() Group by the date column
 * @method CommonDocumentExterneQuery groupByLot() Group by the lot column
 *
 * @method CommonDocumentExterneQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonDocumentExterneQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonDocumentExterneQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonDocumentExterneQuery leftJoinCommonConsultation($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonConsultation relation
 * @method CommonDocumentExterneQuery rightJoinCommonConsultation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonConsultation relation
 * @method CommonDocumentExterneQuery innerJoinCommonConsultation($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonConsultation relation
 *
 * @method CommonDocumentExterne findOne(PropelPDO $con = null) Return the first CommonDocumentExterne matching the query
 * @method CommonDocumentExterne findOneOrCreate(PropelPDO $con = null) Return the first CommonDocumentExterne matching the query, or a new CommonDocumentExterne object populated from the query conditions when no match is found
 *
 * @method CommonDocumentExterne findOneById(int $id) Return the first CommonDocumentExterne filtered by the id column
 * @method CommonDocumentExterne findOneByRefconsultation(int $refConsultation) Return the first CommonDocumentExterne filtered by the refConsultation column
 * @method CommonDocumentExterne findOneByOrganisme(string $organisme) Return the first CommonDocumentExterne filtered by the organisme column
 * @method CommonDocumentExterne findOneByIdblob(int $idBlob) Return the first CommonDocumentExterne filtered by the idBlob column
 * @method CommonDocumentExterne findOneByIdentreprise(int $idEntreprise) Return the first CommonDocumentExterne filtered by the idEntreprise column
 * @method CommonDocumentExterne findOneByType(int $type) Return the first CommonDocumentExterne filtered by the type column
 * @method CommonDocumentExterne findOneByNom(string $nom) Return the first CommonDocumentExterne filtered by the nom column
 * @method CommonDocumentExterne findOneByDescription(string $description) Return the first CommonDocumentExterne filtered by the description column
 * @method CommonDocumentExterne findOneByDate(string $date) Return the first CommonDocumentExterne filtered by the date column
 * @method CommonDocumentExterne findOneByLot(int $lot) Return the first CommonDocumentExterne filtered by the lot column
 *
 * @method array findById(int $id) Return CommonDocumentExterne objects filtered by the id column
 * @method array findByRefconsultation(int $refConsultation) Return CommonDocumentExterne objects filtered by the refConsultation column
 * @method array findByOrganisme(string $organisme) Return CommonDocumentExterne objects filtered by the organisme column
 * @method array findByIdblob(int $idBlob) Return CommonDocumentExterne objects filtered by the idBlob column
 * @method array findByIdentreprise(int $idEntreprise) Return CommonDocumentExterne objects filtered by the idEntreprise column
 * @method array findByType(int $type) Return CommonDocumentExterne objects filtered by the type column
 * @method array findByNom(string $nom) Return CommonDocumentExterne objects filtered by the nom column
 * @method array findByDescription(string $description) Return CommonDocumentExterne objects filtered by the description column
 * @method array findByDate(string $date) Return CommonDocumentExterne objects filtered by the date column
 * @method array findByLot(int $lot) Return CommonDocumentExterne objects filtered by the lot column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonDocumentExterneQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonDocumentExterneQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonDocumentExterne', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonDocumentExterneQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonDocumentExterneQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonDocumentExterneQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonDocumentExterneQuery) {
            return $criteria;
        }
        $query = new CommonDocumentExterneQuery();
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
     * @return   CommonDocumentExterne|CommonDocumentExterne[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonDocumentExternePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonDocumentExternePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonDocumentExterne A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `refConsultation`, `organisme`, `idBlob`, `idEntreprise`, `type`, `nom`, `description`, `date`, `lot` FROM `DocumentExterne` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonDocumentExterne();
            $obj->hydrate($row);
            CommonDocumentExternePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonDocumentExterne|CommonDocumentExterne[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonDocumentExterne[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonDocumentExterneQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonDocumentExternePeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonDocumentExternePeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonDocumentExterneQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonDocumentExternePeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonDocumentExternePeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonDocumentExterneQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonDocumentExternePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonDocumentExternePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDocumentExternePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the refConsultation column
     *
     * Example usage:
     * <code>
     * $query->filterByRefconsultation(1234); // WHERE refConsultation = 1234
     * $query->filterByRefconsultation(array(12, 34)); // WHERE refConsultation IN (12, 34)
     * $query->filterByRefconsultation(array('min' => 12)); // WHERE refConsultation >= 12
     * $query->filterByRefconsultation(array('max' => 12)); // WHERE refConsultation <= 12
     * </code>
     *
     * @see       filterByCommonConsultation()
     *
     * @param     mixed $refconsultation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDocumentExterneQuery The current query, for fluid interface
     */
    public function filterByRefconsultation($refconsultation = null, $comparison = null)
    {
        if (is_array($refconsultation)) {
            $useMinMax = false;
            if (isset($refconsultation['min'])) {
                $this->addUsingAlias(CommonDocumentExternePeer::REFCONSULTATION, $refconsultation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refconsultation['max'])) {
                $this->addUsingAlias(CommonDocumentExternePeer::REFCONSULTATION, $refconsultation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDocumentExternePeer::REFCONSULTATION, $refconsultation, $comparison);
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
     * @return CommonDocumentExterneQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonDocumentExternePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the idBlob column
     *
     * Example usage:
     * <code>
     * $query->filterByIdblob(1234); // WHERE idBlob = 1234
     * $query->filterByIdblob(array(12, 34)); // WHERE idBlob IN (12, 34)
     * $query->filterByIdblob(array('min' => 12)); // WHERE idBlob >= 12
     * $query->filterByIdblob(array('max' => 12)); // WHERE idBlob <= 12
     * </code>
     *
     * @param     mixed $idblob The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDocumentExterneQuery The current query, for fluid interface
     */
    public function filterByIdblob($idblob = null, $comparison = null)
    {
        if (is_array($idblob)) {
            $useMinMax = false;
            if (isset($idblob['min'])) {
                $this->addUsingAlias(CommonDocumentExternePeer::IDBLOB, $idblob['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idblob['max'])) {
                $this->addUsingAlias(CommonDocumentExternePeer::IDBLOB, $idblob['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDocumentExternePeer::IDBLOB, $idblob, $comparison);
    }

    /**
     * Filter the query on the idEntreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByIdentreprise(1234); // WHERE idEntreprise = 1234
     * $query->filterByIdentreprise(array(12, 34)); // WHERE idEntreprise IN (12, 34)
     * $query->filterByIdentreprise(array('min' => 12)); // WHERE idEntreprise >= 12
     * $query->filterByIdentreprise(array('max' => 12)); // WHERE idEntreprise <= 12
     * </code>
     *
     * @param     mixed $identreprise The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDocumentExterneQuery The current query, for fluid interface
     */
    public function filterByIdentreprise($identreprise = null, $comparison = null)
    {
        if (is_array($identreprise)) {
            $useMinMax = false;
            if (isset($identreprise['min'])) {
                $this->addUsingAlias(CommonDocumentExternePeer::IDENTREPRISE, $identreprise['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($identreprise['max'])) {
                $this->addUsingAlias(CommonDocumentExternePeer::IDENTREPRISE, $identreprise['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDocumentExternePeer::IDENTREPRISE, $identreprise, $comparison);
    }

    /**
     * Filter the query on the type column
     *
     * Example usage:
     * <code>
     * $query->filterByType(1234); // WHERE type = 1234
     * $query->filterByType(array(12, 34)); // WHERE type IN (12, 34)
     * $query->filterByType(array('min' => 12)); // WHERE type >= 12
     * $query->filterByType(array('max' => 12)); // WHERE type <= 12
     * </code>
     *
     * @param     mixed $type The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDocumentExterneQuery The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (is_array($type)) {
            $useMinMax = false;
            if (isset($type['min'])) {
                $this->addUsingAlias(CommonDocumentExternePeer::TYPE, $type['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($type['max'])) {
                $this->addUsingAlias(CommonDocumentExternePeer::TYPE, $type['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDocumentExternePeer::TYPE, $type, $comparison);
    }

    /**
     * Filter the query on the nom column
     *
     * Example usage:
     * <code>
     * $query->filterByNom('fooValue');   // WHERE nom = 'fooValue'
     * $query->filterByNom('%fooValue%'); // WHERE nom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDocumentExterneQuery The current query, for fluid interface
     */
    public function filterByNom($nom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nom)) {
                $nom = str_replace('*', '%', $nom);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDocumentExternePeer::NOM, $nom, $comparison);
    }

    /**
     * Filter the query on the description column
     *
     * Example usage:
     * <code>
     * $query->filterByDescription('fooValue');   // WHERE description = 'fooValue'
     * $query->filterByDescription('%fooValue%'); // WHERE description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $description The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDocumentExterneQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $description)) {
                $description = str_replace('*', '%', $description);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDocumentExternePeer::DESCRIPTION, $description, $comparison);
    }

    /**
     * Filter the query on the date column
     *
     * Example usage:
     * <code>
     * $query->filterByDate('2011-03-14'); // WHERE date = '2011-03-14'
     * $query->filterByDate('now'); // WHERE date = '2011-03-14'
     * $query->filterByDate(array('max' => 'yesterday')); // WHERE date > '2011-03-13'
     * </code>
     *
     * @param     mixed $date The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDocumentExterneQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (is_array($date)) {
            $useMinMax = false;
            if (isset($date['min'])) {
                $this->addUsingAlias(CommonDocumentExternePeer::DATE, $date['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($date['max'])) {
                $this->addUsingAlias(CommonDocumentExternePeer::DATE, $date['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDocumentExternePeer::DATE, $date, $comparison);
    }

    /**
     * Filter the query on the lot column
     *
     * Example usage:
     * <code>
     * $query->filterByLot(1234); // WHERE lot = 1234
     * $query->filterByLot(array(12, 34)); // WHERE lot IN (12, 34)
     * $query->filterByLot(array('min' => 12)); // WHERE lot >= 12
     * $query->filterByLot(array('max' => 12)); // WHERE lot <= 12
     * </code>
     *
     * @param     mixed $lot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDocumentExterneQuery The current query, for fluid interface
     */
    public function filterByLot($lot = null, $comparison = null)
    {
        if (is_array($lot)) {
            $useMinMax = false;
            if (isset($lot['min'])) {
                $this->addUsingAlias(CommonDocumentExternePeer::LOT, $lot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lot['max'])) {
                $this->addUsingAlias(CommonDocumentExternePeer::LOT, $lot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDocumentExternePeer::LOT, $lot, $comparison);
    }

    /**
     * Filter the query by a related CommonConsultation object
     *
     * @param   CommonConsultation $commonConsultation The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonDocumentExterneQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonConsultation($commonConsultation, $comparison = null)
    {
        if ($commonConsultation instanceof CommonConsultation) {
            return $this
                ->addUsingAlias(CommonDocumentExternePeer::ORGANISME, $commonConsultation->getOrganisme(), $comparison)
                ->addUsingAlias(CommonDocumentExternePeer::REFCONSULTATION, $commonConsultation->getReference(), $comparison);
        } else {
            throw new PropelException('filterByCommonConsultation() only accepts arguments of type CommonConsultation');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonConsultation relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonDocumentExterneQuery The current query, for fluid interface
     */
    public function joinCommonConsultation($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonConsultation');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonConsultation');
        }

        return $this;
    }

    /**
     * Use the CommonConsultation relation CommonConsultation object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonConsultationQuery A secondary query class using the current class as primary query
     */
    public function useCommonConsultationQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonConsultation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonConsultation', 'CommonConsultationQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonDocumentExterne $commonDocumentExterne Object to remove from the list of results
     *
     * @return CommonDocumentExterneQuery The current query, for fluid interface
     */
    public function prune($commonDocumentExterne = null)
    {
        if ($commonDocumentExterne) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonDocumentExternePeer::ID), $commonDocumentExterne->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonDocumentExternePeer::ORGANISME), $commonDocumentExterne->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
