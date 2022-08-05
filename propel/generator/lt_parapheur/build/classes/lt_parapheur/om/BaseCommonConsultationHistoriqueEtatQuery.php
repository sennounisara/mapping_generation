<?php


/**
 * Base class that represents a query for the 'ConsultationHistoriqueEtat' table.
 *
 * 
 *
 * @method CommonConsultationHistoriqueEtatQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonConsultationHistoriqueEtatQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonConsultationHistoriqueEtatQuery orderByIdAgent($order = Criteria::ASC) Order by the id_agent column
 * @method CommonConsultationHistoriqueEtatQuery orderByConsultationRef($order = Criteria::ASC) Order by the consultation_ref column
 * @method CommonConsultationHistoriqueEtatQuery orderByIdEtat($order = Criteria::ASC) Order by the id_etat column
 * @method CommonConsultationHistoriqueEtatQuery orderByDateModification($order = Criteria::ASC) Order by the date_modification column
 *
 * @method CommonConsultationHistoriqueEtatQuery groupById() Group by the id column
 * @method CommonConsultationHistoriqueEtatQuery groupByOrganisme() Group by the organisme column
 * @method CommonConsultationHistoriqueEtatQuery groupByIdAgent() Group by the id_agent column
 * @method CommonConsultationHistoriqueEtatQuery groupByConsultationRef() Group by the consultation_ref column
 * @method CommonConsultationHistoriqueEtatQuery groupByIdEtat() Group by the id_etat column
 * @method CommonConsultationHistoriqueEtatQuery groupByDateModification() Group by the date_modification column
 *
 * @method CommonConsultationHistoriqueEtatQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonConsultationHistoriqueEtatQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonConsultationHistoriqueEtatQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonConsultationHistoriqueEtatQuery leftJoinCommonConsultation($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonConsultation relation
 * @method CommonConsultationHistoriqueEtatQuery rightJoinCommonConsultation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonConsultation relation
 * @method CommonConsultationHistoriqueEtatQuery innerJoinCommonConsultation($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonConsultation relation
 *
 * @method CommonConsultationHistoriqueEtat findOne(PropelPDO $con = null) Return the first CommonConsultationHistoriqueEtat matching the query
 * @method CommonConsultationHistoriqueEtat findOneOrCreate(PropelPDO $con = null) Return the first CommonConsultationHistoriqueEtat matching the query, or a new CommonConsultationHistoriqueEtat object populated from the query conditions when no match is found
 *
 * @method CommonConsultationHistoriqueEtat findOneById(int $id) Return the first CommonConsultationHistoriqueEtat filtered by the id column
 * @method CommonConsultationHistoriqueEtat findOneByOrganisme(string $organisme) Return the first CommonConsultationHistoriqueEtat filtered by the organisme column
 * @method CommonConsultationHistoriqueEtat findOneByIdAgent(int $id_agent) Return the first CommonConsultationHistoriqueEtat filtered by the id_agent column
 * @method CommonConsultationHistoriqueEtat findOneByConsultationRef(int $consultation_ref) Return the first CommonConsultationHistoriqueEtat filtered by the consultation_ref column
 * @method CommonConsultationHistoriqueEtat findOneByIdEtat(int $id_etat) Return the first CommonConsultationHistoriqueEtat filtered by the id_etat column
 * @method CommonConsultationHistoriqueEtat findOneByDateModification(string $date_modification) Return the first CommonConsultationHistoriqueEtat filtered by the date_modification column
 *
 * @method array findById(int $id) Return CommonConsultationHistoriqueEtat objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonConsultationHistoriqueEtat objects filtered by the organisme column
 * @method array findByIdAgent(int $id_agent) Return CommonConsultationHistoriqueEtat objects filtered by the id_agent column
 * @method array findByConsultationRef(int $consultation_ref) Return CommonConsultationHistoriqueEtat objects filtered by the consultation_ref column
 * @method array findByIdEtat(int $id_etat) Return CommonConsultationHistoriqueEtat objects filtered by the id_etat column
 * @method array findByDateModification(string $date_modification) Return CommonConsultationHistoriqueEtat objects filtered by the date_modification column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonConsultationHistoriqueEtatQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonConsultationHistoriqueEtatQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonConsultationHistoriqueEtat', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonConsultationHistoriqueEtatQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonConsultationHistoriqueEtatQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonConsultationHistoriqueEtatQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonConsultationHistoriqueEtatQuery) {
            return $criteria;
        }
        $query = new CommonConsultationHistoriqueEtatQuery();
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
     * @return   CommonConsultationHistoriqueEtat|CommonConsultationHistoriqueEtat[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonConsultationHistoriqueEtatPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonConsultationHistoriqueEtatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonConsultationHistoriqueEtat A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `id_agent`, `consultation_ref`, `id_etat`, `date_modification` FROM `ConsultationHistoriqueEtat` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonConsultationHistoriqueEtat();
            $obj->hydrate($row);
            CommonConsultationHistoriqueEtatPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonConsultationHistoriqueEtat|CommonConsultationHistoriqueEtat[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonConsultationHistoriqueEtat[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonConsultationHistoriqueEtatQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonConsultationHistoriqueEtatPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonConsultationHistoriqueEtatPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonConsultationHistoriqueEtatQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonConsultationHistoriqueEtatPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonConsultationHistoriqueEtatPeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonConsultationHistoriqueEtatQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonConsultationHistoriqueEtatPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonConsultationHistoriqueEtatPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationHistoriqueEtatPeer::ID, $id, $comparison);
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
     * @return CommonConsultationHistoriqueEtatQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonConsultationHistoriqueEtatPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the id_agent column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgent(1234); // WHERE id_agent = 1234
     * $query->filterByIdAgent(array(12, 34)); // WHERE id_agent IN (12, 34)
     * $query->filterByIdAgent(array('min' => 12)); // WHERE id_agent >= 12
     * $query->filterByIdAgent(array('max' => 12)); // WHERE id_agent <= 12
     * </code>
     *
     * @param     mixed $idAgent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationHistoriqueEtatQuery The current query, for fluid interface
     */
    public function filterByIdAgent($idAgent = null, $comparison = null)
    {
        if (is_array($idAgent)) {
            $useMinMax = false;
            if (isset($idAgent['min'])) {
                $this->addUsingAlias(CommonConsultationHistoriqueEtatPeer::ID_AGENT, $idAgent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgent['max'])) {
                $this->addUsingAlias(CommonConsultationHistoriqueEtatPeer::ID_AGENT, $idAgent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationHistoriqueEtatPeer::ID_AGENT, $idAgent, $comparison);
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
     * @see       filterByCommonConsultation()
     *
     * @param     mixed $consultationRef The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationHistoriqueEtatQuery The current query, for fluid interface
     */
    public function filterByConsultationRef($consultationRef = null, $comparison = null)
    {
        if (is_array($consultationRef)) {
            $useMinMax = false;
            if (isset($consultationRef['min'])) {
                $this->addUsingAlias(CommonConsultationHistoriqueEtatPeer::CONSULTATION_REF, $consultationRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($consultationRef['max'])) {
                $this->addUsingAlias(CommonConsultationHistoriqueEtatPeer::CONSULTATION_REF, $consultationRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationHistoriqueEtatPeer::CONSULTATION_REF, $consultationRef, $comparison);
    }

    /**
     * Filter the query on the id_etat column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEtat(1234); // WHERE id_etat = 1234
     * $query->filterByIdEtat(array(12, 34)); // WHERE id_etat IN (12, 34)
     * $query->filterByIdEtat(array('min' => 12)); // WHERE id_etat >= 12
     * $query->filterByIdEtat(array('max' => 12)); // WHERE id_etat <= 12
     * </code>
     *
     * @param     mixed $idEtat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationHistoriqueEtatQuery The current query, for fluid interface
     */
    public function filterByIdEtat($idEtat = null, $comparison = null)
    {
        if (is_array($idEtat)) {
            $useMinMax = false;
            if (isset($idEtat['min'])) {
                $this->addUsingAlias(CommonConsultationHistoriqueEtatPeer::ID_ETAT, $idEtat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEtat['max'])) {
                $this->addUsingAlias(CommonConsultationHistoriqueEtatPeer::ID_ETAT, $idEtat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationHistoriqueEtatPeer::ID_ETAT, $idEtat, $comparison);
    }

    /**
     * Filter the query on the date_modification column
     *
     * Example usage:
     * <code>
     * $query->filterByDateModification('fooValue');   // WHERE date_modification = 'fooValue'
     * $query->filterByDateModification('%fooValue%'); // WHERE date_modification LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateModification The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationHistoriqueEtatQuery The current query, for fluid interface
     */
    public function filterByDateModification($dateModification = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateModification)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateModification)) {
                $dateModification = str_replace('*', '%', $dateModification);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationHistoriqueEtatPeer::DATE_MODIFICATION, $dateModification, $comparison);
    }

    /**
     * Filter the query by a related CommonConsultation object
     *
     * @param   CommonConsultation|PropelObjectCollection $commonConsultation The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonConsultationHistoriqueEtatQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonConsultation($commonConsultation, $comparison = null)
    {
        if ($commonConsultation instanceof CommonConsultation) {
            return $this
                ->addUsingAlias(CommonConsultationHistoriqueEtatPeer::CONSULTATION_REF, $commonConsultation->getReference(), $comparison);
        } elseif ($commonConsultation instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonConsultationHistoriqueEtatPeer::CONSULTATION_REF, $commonConsultation->toKeyValue('Reference', 'Reference'), $comparison);
        } else {
            throw new PropelException('filterByCommonConsultation() only accepts arguments of type CommonConsultation or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonConsultation relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonConsultationHistoriqueEtatQuery The current query, for fluid interface
     */
    public function joinCommonConsultation($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useCommonConsultationQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonConsultation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonConsultation', 'CommonConsultationQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonConsultationHistoriqueEtat $commonConsultationHistoriqueEtat Object to remove from the list of results
     *
     * @return CommonConsultationHistoriqueEtatQuery The current query, for fluid interface
     */
    public function prune($commonConsultationHistoriqueEtat = null)
    {
        if ($commonConsultationHistoriqueEtat) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonConsultationHistoriqueEtatPeer::ID), $commonConsultationHistoriqueEtat->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonConsultationHistoriqueEtatPeer::ORGANISME), $commonConsultationHistoriqueEtat->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
