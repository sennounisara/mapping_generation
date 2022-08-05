<?php


/**
 * Base class that represents a query for the 'TelechargementAnonyme' table.
 *
 * 
 *
 * @method CommonTelechargementAnonymeQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonTelechargementAnonymeQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonTelechargementAnonymeQuery orderByConsultationRef($order = Criteria::ASC) Order by the consultation_ref column
 * @method CommonTelechargementAnonymeQuery orderByDatetelechargement($order = Criteria::ASC) Order by the datetelechargement column
 * @method CommonTelechargementAnonymeQuery orderByTiragePlan($order = Criteria::ASC) Order by the tirage_plan column
 * @method CommonTelechargementAnonymeQuery orderBySupport($order = Criteria::ASC) Order by the support column
 * @method CommonTelechargementAnonymeQuery orderByNomsFichiersDce($order = Criteria::ASC) Order by the noms_fichiers_dce column
 *
 * @method CommonTelechargementAnonymeQuery groupById() Group by the id column
 * @method CommonTelechargementAnonymeQuery groupByOrganisme() Group by the organisme column
 * @method CommonTelechargementAnonymeQuery groupByConsultationRef() Group by the consultation_ref column
 * @method CommonTelechargementAnonymeQuery groupByDatetelechargement() Group by the datetelechargement column
 * @method CommonTelechargementAnonymeQuery groupByTiragePlan() Group by the tirage_plan column
 * @method CommonTelechargementAnonymeQuery groupBySupport() Group by the support column
 * @method CommonTelechargementAnonymeQuery groupByNomsFichiersDce() Group by the noms_fichiers_dce column
 *
 * @method CommonTelechargementAnonymeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTelechargementAnonymeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTelechargementAnonymeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTelechargementAnonymeQuery leftJoinCommonConsultationRelatedByOrganismeConsultationRef($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonConsultationRelatedByOrganismeConsultationRef relation
 * @method CommonTelechargementAnonymeQuery rightJoinCommonConsultationRelatedByOrganismeConsultationRef($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonConsultationRelatedByOrganismeConsultationRef relation
 * @method CommonTelechargementAnonymeQuery innerJoinCommonConsultationRelatedByOrganismeConsultationRef($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonConsultationRelatedByOrganismeConsultationRef relation
 *
 * @method CommonTelechargementAnonymeQuery leftJoinCommonConsultationRelatedByConsultationRef($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonConsultationRelatedByConsultationRef relation
 * @method CommonTelechargementAnonymeQuery rightJoinCommonConsultationRelatedByConsultationRef($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonConsultationRelatedByConsultationRef relation
 * @method CommonTelechargementAnonymeQuery innerJoinCommonConsultationRelatedByConsultationRef($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonConsultationRelatedByConsultationRef relation
 *
 * @method CommonTelechargementAnonyme findOne(PropelPDO $con = null) Return the first CommonTelechargementAnonyme matching the query
 * @method CommonTelechargementAnonyme findOneOrCreate(PropelPDO $con = null) Return the first CommonTelechargementAnonyme matching the query, or a new CommonTelechargementAnonyme object populated from the query conditions when no match is found
 *
 * @method CommonTelechargementAnonyme findOneById(int $id) Return the first CommonTelechargementAnonyme filtered by the id column
 * @method CommonTelechargementAnonyme findOneByOrganisme(string $organisme) Return the first CommonTelechargementAnonyme filtered by the organisme column
 * @method CommonTelechargementAnonyme findOneByConsultationRef(int $consultation_ref) Return the first CommonTelechargementAnonyme filtered by the consultation_ref column
 * @method CommonTelechargementAnonyme findOneByDatetelechargement(string $datetelechargement) Return the first CommonTelechargementAnonyme filtered by the datetelechargement column
 * @method CommonTelechargementAnonyme findOneByTiragePlan(int $tirage_plan) Return the first CommonTelechargementAnonyme filtered by the tirage_plan column
 * @method CommonTelechargementAnonyme findOneBySupport(string $support) Return the first CommonTelechargementAnonyme filtered by the support column
 * @method CommonTelechargementAnonyme findOneByNomsFichiersDce(string $noms_fichiers_dce) Return the first CommonTelechargementAnonyme filtered by the noms_fichiers_dce column
 *
 * @method array findById(int $id) Return CommonTelechargementAnonyme objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonTelechargementAnonyme objects filtered by the organisme column
 * @method array findByConsultationRef(int $consultation_ref) Return CommonTelechargementAnonyme objects filtered by the consultation_ref column
 * @method array findByDatetelechargement(string $datetelechargement) Return CommonTelechargementAnonyme objects filtered by the datetelechargement column
 * @method array findByTiragePlan(int $tirage_plan) Return CommonTelechargementAnonyme objects filtered by the tirage_plan column
 * @method array findBySupport(string $support) Return CommonTelechargementAnonyme objects filtered by the support column
 * @method array findByNomsFichiersDce(string $noms_fichiers_dce) Return CommonTelechargementAnonyme objects filtered by the noms_fichiers_dce column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTelechargementAnonymeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTelechargementAnonymeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTelechargementAnonyme', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTelechargementAnonymeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTelechargementAnonymeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTelechargementAnonymeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTelechargementAnonymeQuery) {
            return $criteria;
        }
        $query = new CommonTelechargementAnonymeQuery();
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
     * @return   CommonTelechargementAnonyme|CommonTelechargementAnonyme[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTelechargementAnonymePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTelechargementAnonymePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTelechargementAnonyme A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `consultation_ref`, `datetelechargement`, `tirage_plan`, `support`, `noms_fichiers_dce` FROM `TelechargementAnonyme` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonTelechargementAnonyme();
            $obj->hydrate($row);
            CommonTelechargementAnonymePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonTelechargementAnonyme|CommonTelechargementAnonyme[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTelechargementAnonyme[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTelechargementAnonymeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonTelechargementAnonymePeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonTelechargementAnonymePeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTelechargementAnonymeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonTelechargementAnonymePeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonTelechargementAnonymePeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonTelechargementAnonymeQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonTelechargementAnonymePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonTelechargementAnonymePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTelechargementAnonymePeer::ID, $id, $comparison);
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
     * @return CommonTelechargementAnonymeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTelechargementAnonymePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the consultation_ref column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultationRef(1234); // WHERE consultation_ref = 1234
     * $query->filterByConsultationRef(array(12, 34)); // WHERE consultation_ref IN (12, 34)
     * $query->filterByConsultationRef(array('min' => 12)); // WHERE consultation_ref >= 12
     * $query->filterByConsultationRef(array('max' => 12)); // WHERE consultation_ref <= 12
     * </code>
     *
     * @see       filterByCommonConsultationRelatedByOrganismeConsultationRef()
     *
     * @see       filterByCommonConsultationRelatedByConsultationRef()
     *
     * @param     mixed $consultationRef The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTelechargementAnonymeQuery The current query, for fluid interface
     */
    public function filterByConsultationRef($consultationRef = null, $comparison = null)
    {
        if (is_array($consultationRef)) {
            $useMinMax = false;
            if (isset($consultationRef['min'])) {
                $this->addUsingAlias(CommonTelechargementAnonymePeer::CONSULTATION_REF, $consultationRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($consultationRef['max'])) {
                $this->addUsingAlias(CommonTelechargementAnonymePeer::CONSULTATION_REF, $consultationRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTelechargementAnonymePeer::CONSULTATION_REF, $consultationRef, $comparison);
    }

    /**
     * Filter the query on the datetelechargement column
     *
     * Example usage:
     * <code>
     * $query->filterByDatetelechargement('fooValue');   // WHERE datetelechargement = 'fooValue'
     * $query->filterByDatetelechargement('%fooValue%'); // WHERE datetelechargement LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datetelechargement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTelechargementAnonymeQuery The current query, for fluid interface
     */
    public function filterByDatetelechargement($datetelechargement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datetelechargement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datetelechargement)) {
                $datetelechargement = str_replace('*', '%', $datetelechargement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTelechargementAnonymePeer::DATETELECHARGEMENT, $datetelechargement, $comparison);
    }

    /**
     * Filter the query on the tirage_plan column
     *
     * Example usage:
     * <code>
     * $query->filterByTiragePlan(1234); // WHERE tirage_plan = 1234
     * $query->filterByTiragePlan(array(12, 34)); // WHERE tirage_plan IN (12, 34)
     * $query->filterByTiragePlan(array('min' => 12)); // WHERE tirage_plan >= 12
     * $query->filterByTiragePlan(array('max' => 12)); // WHERE tirage_plan <= 12
     * </code>
     *
     * @param     mixed $tiragePlan The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTelechargementAnonymeQuery The current query, for fluid interface
     */
    public function filterByTiragePlan($tiragePlan = null, $comparison = null)
    {
        if (is_array($tiragePlan)) {
            $useMinMax = false;
            if (isset($tiragePlan['min'])) {
                $this->addUsingAlias(CommonTelechargementAnonymePeer::TIRAGE_PLAN, $tiragePlan['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tiragePlan['max'])) {
                $this->addUsingAlias(CommonTelechargementAnonymePeer::TIRAGE_PLAN, $tiragePlan['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTelechargementAnonymePeer::TIRAGE_PLAN, $tiragePlan, $comparison);
    }

    /**
     * Filter the query on the support column
     *
     * Example usage:
     * <code>
     * $query->filterBySupport('fooValue');   // WHERE support = 'fooValue'
     * $query->filterBySupport('%fooValue%'); // WHERE support LIKE '%fooValue%'
     * </code>
     *
     * @param     string $support The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTelechargementAnonymeQuery The current query, for fluid interface
     */
    public function filterBySupport($support = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($support)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $support)) {
                $support = str_replace('*', '%', $support);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTelechargementAnonymePeer::SUPPORT, $support, $comparison);
    }

    /**
     * Filter the query on the noms_fichiers_dce column
     *
     * Example usage:
     * <code>
     * $query->filterByNomsFichiersDce('fooValue');   // WHERE noms_fichiers_dce = 'fooValue'
     * $query->filterByNomsFichiersDce('%fooValue%'); // WHERE noms_fichiers_dce LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomsFichiersDce The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTelechargementAnonymeQuery The current query, for fluid interface
     */
    public function filterByNomsFichiersDce($nomsFichiersDce = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomsFichiersDce)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomsFichiersDce)) {
                $nomsFichiersDce = str_replace('*', '%', $nomsFichiersDce);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTelechargementAnonymePeer::NOMS_FICHIERS_DCE, $nomsFichiersDce, $comparison);
    }

    /**
     * Filter the query by a related CommonConsultation object
     *
     * @param   CommonConsultation $commonConsultation The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTelechargementAnonymeQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonConsultationRelatedByOrganismeConsultationRef($commonConsultation, $comparison = null)
    {
        if ($commonConsultation instanceof CommonConsultation) {
            return $this
                ->addUsingAlias(CommonTelechargementAnonymePeer::ORGANISME, $commonConsultation->getOrganisme(), $comparison)
                ->addUsingAlias(CommonTelechargementAnonymePeer::CONSULTATION_REF, $commonConsultation->getReference(), $comparison);
        } else {
            throw new PropelException('filterByCommonConsultationRelatedByOrganismeConsultationRef() only accepts arguments of type CommonConsultation');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonConsultationRelatedByOrganismeConsultationRef relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTelechargementAnonymeQuery The current query, for fluid interface
     */
    public function joinCommonConsultationRelatedByOrganismeConsultationRef($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonConsultationRelatedByOrganismeConsultationRef');

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
            $this->addJoinObject($join, 'CommonConsultationRelatedByOrganismeConsultationRef');
        }

        return $this;
    }

    /**
     * Use the CommonConsultationRelatedByOrganismeConsultationRef relation CommonConsultation object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonConsultationQuery A secondary query class using the current class as primary query
     */
    public function useCommonConsultationRelatedByOrganismeConsultationRefQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonConsultationRelatedByOrganismeConsultationRef($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonConsultationRelatedByOrganismeConsultationRef', 'CommonConsultationQuery');
    }

    /**
     * Filter the query by a related CommonConsultation object
     *
     * @param   CommonConsultation|PropelObjectCollection $commonConsultation The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTelechargementAnonymeQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonConsultationRelatedByConsultationRef($commonConsultation, $comparison = null)
    {
        if ($commonConsultation instanceof CommonConsultation) {
            return $this
                ->addUsingAlias(CommonTelechargementAnonymePeer::CONSULTATION_REF, $commonConsultation->getReference(), $comparison);
        } elseif ($commonConsultation instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonTelechargementAnonymePeer::CONSULTATION_REF, $commonConsultation->toKeyValue('Reference', 'Reference'), $comparison);
        } else {
            throw new PropelException('filterByCommonConsultationRelatedByConsultationRef() only accepts arguments of type CommonConsultation or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonConsultationRelatedByConsultationRef relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTelechargementAnonymeQuery The current query, for fluid interface
     */
    public function joinCommonConsultationRelatedByConsultationRef($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonConsultationRelatedByConsultationRef');

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
            $this->addJoinObject($join, 'CommonConsultationRelatedByConsultationRef');
        }

        return $this;
    }

    /**
     * Use the CommonConsultationRelatedByConsultationRef relation CommonConsultation object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonConsultationQuery A secondary query class using the current class as primary query
     */
    public function useCommonConsultationRelatedByConsultationRefQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonConsultationRelatedByConsultationRef($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonConsultationRelatedByConsultationRef', 'CommonConsultationQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTelechargementAnonyme $commonTelechargementAnonyme Object to remove from the list of results
     *
     * @return CommonTelechargementAnonymeQuery The current query, for fluid interface
     */
    public function prune($commonTelechargementAnonyme = null)
    {
        if ($commonTelechargementAnonyme) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonTelechargementAnonymePeer::ID), $commonTelechargementAnonyme->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonTelechargementAnonymePeer::ORGANISME), $commonTelechargementAnonyme->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
