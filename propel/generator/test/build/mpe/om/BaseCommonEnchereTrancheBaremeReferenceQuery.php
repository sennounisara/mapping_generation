<?php


/**
 * Base class that represents a query for the 'EnchereTrancheBaremeReference' table.
 *
 * 
 *
 * @method CommonEnchereTrancheBaremeReferenceQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonEnchereTrancheBaremeReferenceQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonEnchereTrancheBaremeReferenceQuery orderByIdreference($order = Criteria::ASC) Order by the idReference column
 * @method CommonEnchereTrancheBaremeReferenceQuery orderByBorneinf($order = Criteria::ASC) Order by the borneInf column
 * @method CommonEnchereTrancheBaremeReferenceQuery orderByBornesup($order = Criteria::ASC) Order by the borneSup column
 * @method CommonEnchereTrancheBaremeReferenceQuery orderByNote($order = Criteria::ASC) Order by the note column
 *
 * @method CommonEnchereTrancheBaremeReferenceQuery groupById() Group by the id column
 * @method CommonEnchereTrancheBaremeReferenceQuery groupByOrganisme() Group by the organisme column
 * @method CommonEnchereTrancheBaremeReferenceQuery groupByIdreference() Group by the idReference column
 * @method CommonEnchereTrancheBaremeReferenceQuery groupByBorneinf() Group by the borneInf column
 * @method CommonEnchereTrancheBaremeReferenceQuery groupByBornesup() Group by the borneSup column
 * @method CommonEnchereTrancheBaremeReferenceQuery groupByNote() Group by the note column
 *
 * @method CommonEnchereTrancheBaremeReferenceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonEnchereTrancheBaremeReferenceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonEnchereTrancheBaremeReferenceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonEnchereTrancheBaremeReferenceQuery leftJoinCommonEnchereReferenceRelatedByIdreference($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonEnchereReferenceRelatedByIdreference relation
 * @method CommonEnchereTrancheBaremeReferenceQuery rightJoinCommonEnchereReferenceRelatedByIdreference($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonEnchereReferenceRelatedByIdreference relation
 * @method CommonEnchereTrancheBaremeReferenceQuery innerJoinCommonEnchereReferenceRelatedByIdreference($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonEnchereReferenceRelatedByIdreference relation
 *
 * @method CommonEnchereTrancheBaremeReferenceQuery leftJoinCommonEnchereReferenceRelatedByIdreferenceOrganisme($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonEnchereReferenceRelatedByIdreferenceOrganisme relation
 * @method CommonEnchereTrancheBaremeReferenceQuery rightJoinCommonEnchereReferenceRelatedByIdreferenceOrganisme($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonEnchereReferenceRelatedByIdreferenceOrganisme relation
 * @method CommonEnchereTrancheBaremeReferenceQuery innerJoinCommonEnchereReferenceRelatedByIdreferenceOrganisme($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonEnchereReferenceRelatedByIdreferenceOrganisme relation
 *
 * @method CommonEnchereTrancheBaremeReference findOne(PropelPDO $con = null) Return the first CommonEnchereTrancheBaremeReference matching the query
 * @method CommonEnchereTrancheBaremeReference findOneOrCreate(PropelPDO $con = null) Return the first CommonEnchereTrancheBaremeReference matching the query, or a new CommonEnchereTrancheBaremeReference object populated from the query conditions when no match is found
 *
 * @method CommonEnchereTrancheBaremeReference findOneById(int $id) Return the first CommonEnchereTrancheBaremeReference filtered by the id column
 * @method CommonEnchereTrancheBaremeReference findOneByOrganisme(string $organisme) Return the first CommonEnchereTrancheBaremeReference filtered by the organisme column
 * @method CommonEnchereTrancheBaremeReference findOneByIdreference(int $idReference) Return the first CommonEnchereTrancheBaremeReference filtered by the idReference column
 * @method CommonEnchereTrancheBaremeReference findOneByBorneinf(double $borneInf) Return the first CommonEnchereTrancheBaremeReference filtered by the borneInf column
 * @method CommonEnchereTrancheBaremeReference findOneByBornesup(double $borneSup) Return the first CommonEnchereTrancheBaremeReference filtered by the borneSup column
 * @method CommonEnchereTrancheBaremeReference findOneByNote(double $note) Return the first CommonEnchereTrancheBaremeReference filtered by the note column
 *
 * @method array findById(int $id) Return CommonEnchereTrancheBaremeReference objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonEnchereTrancheBaremeReference objects filtered by the organisme column
 * @method array findByIdreference(int $idReference) Return CommonEnchereTrancheBaremeReference objects filtered by the idReference column
 * @method array findByBorneinf(double $borneInf) Return CommonEnchereTrancheBaremeReference objects filtered by the borneInf column
 * @method array findByBornesup(double $borneSup) Return CommonEnchereTrancheBaremeReference objects filtered by the borneSup column
 * @method array findByNote(double $note) Return CommonEnchereTrancheBaremeReference objects filtered by the note column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonEnchereTrancheBaremeReferenceQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonEnchereTrancheBaremeReferenceQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonEnchereTrancheBaremeReference', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonEnchereTrancheBaremeReferenceQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonEnchereTrancheBaremeReferenceQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonEnchereTrancheBaremeReferenceQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonEnchereTrancheBaremeReferenceQuery) {
            return $criteria;
        }
        $query = new CommonEnchereTrancheBaremeReferenceQuery();
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
     * @return   CommonEnchereTrancheBaremeReference|CommonEnchereTrancheBaremeReference[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonEnchereTrancheBaremeReferencePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonEnchereTrancheBaremeReferencePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonEnchereTrancheBaremeReference A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `idReference`, `borneInf`, `borneSup`, `note` FROM `EnchereTrancheBaremeReference` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonEnchereTrancheBaremeReference();
            $obj->hydrate($row);
            CommonEnchereTrancheBaremeReferencePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonEnchereTrancheBaremeReference|CommonEnchereTrancheBaremeReference[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonEnchereTrancheBaremeReference[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonEnchereTrancheBaremeReferenceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonEnchereTrancheBaremeReferencePeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonEnchereTrancheBaremeReferencePeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonEnchereTrancheBaremeReferenceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonEnchereTrancheBaremeReferencePeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonEnchereTrancheBaremeReferencePeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonEnchereTrancheBaremeReferenceQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonEnchereTrancheBaremeReferencePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonEnchereTrancheBaremeReferencePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnchereTrancheBaremeReferencePeer::ID, $id, $comparison);
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
     * @return CommonEnchereTrancheBaremeReferenceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEnchereTrancheBaremeReferencePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the idReference column
     *
     * Example usage:
     * <code>
     * $query->filterByIdreference(1234); // WHERE idReference = 1234
     * $query->filterByIdreference(array(12, 34)); // WHERE idReference IN (12, 34)
     * $query->filterByIdreference(array('min' => 12)); // WHERE idReference >= 12
     * $query->filterByIdreference(array('max' => 12)); // WHERE idReference <= 12
     * </code>
     *
     * @see       filterByCommonEnchereReferenceRelatedByIdreference()
     *
     * @see       filterByCommonEnchereReferenceRelatedByIdreferenceOrganisme()
     *
     * @param     mixed $idreference The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnchereTrancheBaremeReferenceQuery The current query, for fluid interface
     */
    public function filterByIdreference($idreference = null, $comparison = null)
    {
        if (is_array($idreference)) {
            $useMinMax = false;
            if (isset($idreference['min'])) {
                $this->addUsingAlias(CommonEnchereTrancheBaremeReferencePeer::IDREFERENCE, $idreference['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idreference['max'])) {
                $this->addUsingAlias(CommonEnchereTrancheBaremeReferencePeer::IDREFERENCE, $idreference['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnchereTrancheBaremeReferencePeer::IDREFERENCE, $idreference, $comparison);
    }

    /**
     * Filter the query on the borneInf column
     *
     * Example usage:
     * <code>
     * $query->filterByBorneinf(1234); // WHERE borneInf = 1234
     * $query->filterByBorneinf(array(12, 34)); // WHERE borneInf IN (12, 34)
     * $query->filterByBorneinf(array('min' => 12)); // WHERE borneInf >= 12
     * $query->filterByBorneinf(array('max' => 12)); // WHERE borneInf <= 12
     * </code>
     *
     * @param     mixed $borneinf The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnchereTrancheBaremeReferenceQuery The current query, for fluid interface
     */
    public function filterByBorneinf($borneinf = null, $comparison = null)
    {
        if (is_array($borneinf)) {
            $useMinMax = false;
            if (isset($borneinf['min'])) {
                $this->addUsingAlias(CommonEnchereTrancheBaremeReferencePeer::BORNEINF, $borneinf['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($borneinf['max'])) {
                $this->addUsingAlias(CommonEnchereTrancheBaremeReferencePeer::BORNEINF, $borneinf['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnchereTrancheBaremeReferencePeer::BORNEINF, $borneinf, $comparison);
    }

    /**
     * Filter the query on the borneSup column
     *
     * Example usage:
     * <code>
     * $query->filterByBornesup(1234); // WHERE borneSup = 1234
     * $query->filterByBornesup(array(12, 34)); // WHERE borneSup IN (12, 34)
     * $query->filterByBornesup(array('min' => 12)); // WHERE borneSup >= 12
     * $query->filterByBornesup(array('max' => 12)); // WHERE borneSup <= 12
     * </code>
     *
     * @param     mixed $bornesup The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnchereTrancheBaremeReferenceQuery The current query, for fluid interface
     */
    public function filterByBornesup($bornesup = null, $comparison = null)
    {
        if (is_array($bornesup)) {
            $useMinMax = false;
            if (isset($bornesup['min'])) {
                $this->addUsingAlias(CommonEnchereTrancheBaremeReferencePeer::BORNESUP, $bornesup['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bornesup['max'])) {
                $this->addUsingAlias(CommonEnchereTrancheBaremeReferencePeer::BORNESUP, $bornesup['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnchereTrancheBaremeReferencePeer::BORNESUP, $bornesup, $comparison);
    }

    /**
     * Filter the query on the note column
     *
     * Example usage:
     * <code>
     * $query->filterByNote(1234); // WHERE note = 1234
     * $query->filterByNote(array(12, 34)); // WHERE note IN (12, 34)
     * $query->filterByNote(array('min' => 12)); // WHERE note >= 12
     * $query->filterByNote(array('max' => 12)); // WHERE note <= 12
     * </code>
     *
     * @param     mixed $note The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnchereTrancheBaremeReferenceQuery The current query, for fluid interface
     */
    public function filterByNote($note = null, $comparison = null)
    {
        if (is_array($note)) {
            $useMinMax = false;
            if (isset($note['min'])) {
                $this->addUsingAlias(CommonEnchereTrancheBaremeReferencePeer::NOTE, $note['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($note['max'])) {
                $this->addUsingAlias(CommonEnchereTrancheBaremeReferencePeer::NOTE, $note['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnchereTrancheBaremeReferencePeer::NOTE, $note, $comparison);
    }

    /**
     * Filter the query by a related CommonEnchereReference object
     *
     * @param   CommonEnchereReference|PropelObjectCollection $commonEnchereReference The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonEnchereTrancheBaremeReferenceQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonEnchereReferenceRelatedByIdreference($commonEnchereReference, $comparison = null)
    {
        if ($commonEnchereReference instanceof CommonEnchereReference) {
            return $this
                ->addUsingAlias(CommonEnchereTrancheBaremeReferencePeer::IDREFERENCE, $commonEnchereReference->getId(), $comparison);
        } elseif ($commonEnchereReference instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonEnchereTrancheBaremeReferencePeer::IDREFERENCE, $commonEnchereReference->toKeyValue('Id', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonEnchereReferenceRelatedByIdreference() only accepts arguments of type CommonEnchereReference or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonEnchereReferenceRelatedByIdreference relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonEnchereTrancheBaremeReferenceQuery The current query, for fluid interface
     */
    public function joinCommonEnchereReferenceRelatedByIdreference($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonEnchereReferenceRelatedByIdreference');

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
            $this->addJoinObject($join, 'CommonEnchereReferenceRelatedByIdreference');
        }

        return $this;
    }

    /**
     * Use the CommonEnchereReferenceRelatedByIdreference relation CommonEnchereReference object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonEnchereReferenceQuery A secondary query class using the current class as primary query
     */
    public function useCommonEnchereReferenceRelatedByIdreferenceQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonEnchereReferenceRelatedByIdreference($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonEnchereReferenceRelatedByIdreference', 'CommonEnchereReferenceQuery');
    }

    /**
     * Filter the query by a related CommonEnchereReference object
     *
     * @param   CommonEnchereReference $commonEnchereReference The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonEnchereTrancheBaremeReferenceQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonEnchereReferenceRelatedByIdreferenceOrganisme($commonEnchereReference, $comparison = null)
    {
        if ($commonEnchereReference instanceof CommonEnchereReference) {
            return $this
                ->addUsingAlias(CommonEnchereTrancheBaremeReferencePeer::IDREFERENCE, $commonEnchereReference->getId(), $comparison)
                ->addUsingAlias(CommonEnchereTrancheBaremeReferencePeer::ORGANISME, $commonEnchereReference->getOrganisme(), $comparison);
        } else {
            throw new PropelException('filterByCommonEnchereReferenceRelatedByIdreferenceOrganisme() only accepts arguments of type CommonEnchereReference');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonEnchereReferenceRelatedByIdreferenceOrganisme relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonEnchereTrancheBaremeReferenceQuery The current query, for fluid interface
     */
    public function joinCommonEnchereReferenceRelatedByIdreferenceOrganisme($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonEnchereReferenceRelatedByIdreferenceOrganisme');

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
            $this->addJoinObject($join, 'CommonEnchereReferenceRelatedByIdreferenceOrganisme');
        }

        return $this;
    }

    /**
     * Use the CommonEnchereReferenceRelatedByIdreferenceOrganisme relation CommonEnchereReference object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonEnchereReferenceQuery A secondary query class using the current class as primary query
     */
    public function useCommonEnchereReferenceRelatedByIdreferenceOrganismeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonEnchereReferenceRelatedByIdreferenceOrganisme($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonEnchereReferenceRelatedByIdreferenceOrganisme', 'CommonEnchereReferenceQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonEnchereTrancheBaremeReference $commonEnchereTrancheBaremeReference Object to remove from the list of results
     *
     * @return CommonEnchereTrancheBaremeReferenceQuery The current query, for fluid interface
     */
    public function prune($commonEnchereTrancheBaremeReference = null)
    {
        if ($commonEnchereTrancheBaremeReference) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonEnchereTrancheBaremeReferencePeer::ID), $commonEnchereTrancheBaremeReference->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonEnchereTrancheBaremeReferencePeer::ORGANISME), $commonEnchereTrancheBaremeReference->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
