<?php


/**
 * Base class that represents a query for the 'RG' table.
 *
 * 
 *
 * @method CommonRGQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonRGQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonRGQuery orderByConsultationRef($order = Criteria::ASC) Order by the consultation_ref column
 * @method CommonRGQuery orderByRg($order = Criteria::ASC) Order by the rg column
 * @method CommonRGQuery orderByNomFichier($order = Criteria::ASC) Order by the nom_fichier column
 * @method CommonRGQuery orderByStatut($order = Criteria::ASC) Order by the statut column
 * @method CommonRGQuery orderByHorodatage($order = Criteria::ASC) Order by the horodatage column
 * @method CommonRGQuery orderByUntrusteddate($order = Criteria::ASC) Order by the untrusteddate column
 * @method CommonRGQuery orderByAgentId($order = Criteria::ASC) Order by the agent_id column
 *
 * @method CommonRGQuery groupById() Group by the id column
 * @method CommonRGQuery groupByOrganisme() Group by the organisme column
 * @method CommonRGQuery groupByConsultationRef() Group by the consultation_ref column
 * @method CommonRGQuery groupByRg() Group by the rg column
 * @method CommonRGQuery groupByNomFichier() Group by the nom_fichier column
 * @method CommonRGQuery groupByStatut() Group by the statut column
 * @method CommonRGQuery groupByHorodatage() Group by the horodatage column
 * @method CommonRGQuery groupByUntrusteddate() Group by the untrusteddate column
 * @method CommonRGQuery groupByAgentId() Group by the agent_id column
 *
 * @method CommonRGQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonRGQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonRGQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonRGQuery leftJoinCommonConsultation($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonConsultation relation
 * @method CommonRGQuery rightJoinCommonConsultation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonConsultation relation
 * @method CommonRGQuery innerJoinCommonConsultation($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonConsultation relation
 *
 * @method CommonRG findOne(PropelPDO $con = null) Return the first CommonRG matching the query
 * @method CommonRG findOneOrCreate(PropelPDO $con = null) Return the first CommonRG matching the query, or a new CommonRG object populated from the query conditions when no match is found
 *
 * @method CommonRG findOneById(int $id) Return the first CommonRG filtered by the id column
 * @method CommonRG findOneByOrganisme(string $organisme) Return the first CommonRG filtered by the organisme column
 * @method CommonRG findOneByConsultationRef(int $consultation_ref) Return the first CommonRG filtered by the consultation_ref column
 * @method CommonRG findOneByRg(int $rg) Return the first CommonRG filtered by the rg column
 * @method CommonRG findOneByNomFichier(string $nom_fichier) Return the first CommonRG filtered by the nom_fichier column
 * @method CommonRG findOneByStatut(string $statut) Return the first CommonRG filtered by the statut column
 * @method CommonRG findOneByHorodatage(resource $horodatage) Return the first CommonRG filtered by the horodatage column
 * @method CommonRG findOneByUntrusteddate(string $untrusteddate) Return the first CommonRG filtered by the untrusteddate column
 * @method CommonRG findOneByAgentId(int $agent_id) Return the first CommonRG filtered by the agent_id column
 *
 * @method array findById(int $id) Return CommonRG objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonRG objects filtered by the organisme column
 * @method array findByConsultationRef(int $consultation_ref) Return CommonRG objects filtered by the consultation_ref column
 * @method array findByRg(int $rg) Return CommonRG objects filtered by the rg column
 * @method array findByNomFichier(string $nom_fichier) Return CommonRG objects filtered by the nom_fichier column
 * @method array findByStatut(string $statut) Return CommonRG objects filtered by the statut column
 * @method array findByHorodatage(resource $horodatage) Return CommonRG objects filtered by the horodatage column
 * @method array findByUntrusteddate(string $untrusteddate) Return CommonRG objects filtered by the untrusteddate column
 * @method array findByAgentId(int $agent_id) Return CommonRG objects filtered by the agent_id column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonRGQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonRGQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonRG', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonRGQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonRGQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonRGQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonRGQuery) {
            return $criteria;
        }
        $query = new CommonRGQuery();
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
     * @return   CommonRG|CommonRG[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonRGPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonRGPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonRG A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `consultation_ref`, `rg`, `nom_fichier`, `statut`, `horodatage`, `untrusteddate`, `agent_id` FROM `RG` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonRG();
            $obj->hydrate($row);
            CommonRGPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonRG|CommonRG[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonRG[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonRGQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonRGPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonRGPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonRGQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonRGPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonRGPeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonRGQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonRGPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonRGPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonRGPeer::ID, $id, $comparison);
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
     * @return CommonRGQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonRGPeer::ORGANISME, $organisme, $comparison);
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
     * @return CommonRGQuery The current query, for fluid interface
     */
    public function filterByConsultationRef($consultationRef = null, $comparison = null)
    {
        if (is_array($consultationRef)) {
            $useMinMax = false;
            if (isset($consultationRef['min'])) {
                $this->addUsingAlias(CommonRGPeer::CONSULTATION_REF, $consultationRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($consultationRef['max'])) {
                $this->addUsingAlias(CommonRGPeer::CONSULTATION_REF, $consultationRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonRGPeer::CONSULTATION_REF, $consultationRef, $comparison);
    }

    /**
     * Filter the query on the rg column
     *
     * Example usage:
     * <code>
     * $query->filterByRg(1234); // WHERE rg = 1234
     * $query->filterByRg(array(12, 34)); // WHERE rg IN (12, 34)
     * $query->filterByRg(array('min' => 12)); // WHERE rg >= 12
     * $query->filterByRg(array('max' => 12)); // WHERE rg <= 12
     * </code>
     *
     * @param     mixed $rg The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRGQuery The current query, for fluid interface
     */
    public function filterByRg($rg = null, $comparison = null)
    {
        if (is_array($rg)) {
            $useMinMax = false;
            if (isset($rg['min'])) {
                $this->addUsingAlias(CommonRGPeer::RG, $rg['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($rg['max'])) {
                $this->addUsingAlias(CommonRGPeer::RG, $rg['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonRGPeer::RG, $rg, $comparison);
    }

    /**
     * Filter the query on the nom_fichier column
     *
     * Example usage:
     * <code>
     * $query->filterByNomFichier('fooValue');   // WHERE nom_fichier = 'fooValue'
     * $query->filterByNomFichier('%fooValue%'); // WHERE nom_fichier LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomFichier The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRGQuery The current query, for fluid interface
     */
    public function filterByNomFichier($nomFichier = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomFichier)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomFichier)) {
                $nomFichier = str_replace('*', '%', $nomFichier);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonRGPeer::NOM_FICHIER, $nomFichier, $comparison);
    }

    /**
     * Filter the query on the statut column
     *
     * Example usage:
     * <code>
     * $query->filterByStatut('fooValue');   // WHERE statut = 'fooValue'
     * $query->filterByStatut('%fooValue%'); // WHERE statut LIKE '%fooValue%'
     * </code>
     *
     * @param     string $statut The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRGQuery The current query, for fluid interface
     */
    public function filterByStatut($statut = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($statut)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $statut)) {
                $statut = str_replace('*', '%', $statut);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonRGPeer::STATUT, $statut, $comparison);
    }

    /**
     * Filter the query on the horodatage column
     *
     * @param     mixed $horodatage The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRGQuery The current query, for fluid interface
     */
    public function filterByHorodatage($horodatage = null, $comparison = null)
    {

        return $this->addUsingAlias(CommonRGPeer::HORODATAGE, $horodatage, $comparison);
    }

    /**
     * Filter the query on the untrusteddate column
     *
     * Example usage:
     * <code>
     * $query->filterByUntrusteddate('2011-03-14'); // WHERE untrusteddate = '2011-03-14'
     * $query->filterByUntrusteddate('now'); // WHERE untrusteddate = '2011-03-14'
     * $query->filterByUntrusteddate(array('max' => 'yesterday')); // WHERE untrusteddate > '2011-03-13'
     * </code>
     *
     * @param     mixed $untrusteddate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRGQuery The current query, for fluid interface
     */
    public function filterByUntrusteddate($untrusteddate = null, $comparison = null)
    {
        if (is_array($untrusteddate)) {
            $useMinMax = false;
            if (isset($untrusteddate['min'])) {
                $this->addUsingAlias(CommonRGPeer::UNTRUSTEDDATE, $untrusteddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($untrusteddate['max'])) {
                $this->addUsingAlias(CommonRGPeer::UNTRUSTEDDATE, $untrusteddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonRGPeer::UNTRUSTEDDATE, $untrusteddate, $comparison);
    }

    /**
     * Filter the query on the agent_id column
     *
     * Example usage:
     * <code>
     * $query->filterByAgentId(1234); // WHERE agent_id = 1234
     * $query->filterByAgentId(array(12, 34)); // WHERE agent_id IN (12, 34)
     * $query->filterByAgentId(array('min' => 12)); // WHERE agent_id >= 12
     * $query->filterByAgentId(array('max' => 12)); // WHERE agent_id <= 12
     * </code>
     *
     * @param     mixed $agentId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRGQuery The current query, for fluid interface
     */
    public function filterByAgentId($agentId = null, $comparison = null)
    {
        if (is_array($agentId)) {
            $useMinMax = false;
            if (isset($agentId['min'])) {
                $this->addUsingAlias(CommonRGPeer::AGENT_ID, $agentId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($agentId['max'])) {
                $this->addUsingAlias(CommonRGPeer::AGENT_ID, $agentId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonRGPeer::AGENT_ID, $agentId, $comparison);
    }

    /**
     * Filter the query by a related CommonConsultation object
     *
     * @param   CommonConsultation $commonConsultation The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonRGQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonConsultation($commonConsultation, $comparison = null)
    {
        if ($commonConsultation instanceof CommonConsultation) {
            return $this
                ->addUsingAlias(CommonRGPeer::ORGANISME, $commonConsultation->getOrganisme(), $comparison)
                ->addUsingAlias(CommonRGPeer::CONSULTATION_REF, $commonConsultation->getReference(), $comparison);
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
     * @return CommonRGQuery The current query, for fluid interface
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
     * @param   CommonRG $commonRG Object to remove from the list of results
     *
     * @return CommonRGQuery The current query, for fluid interface
     */
    public function prune($commonRG = null)
    {
        if ($commonRG) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonRGPeer::ID), $commonRG->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonRGPeer::ORGANISME), $commonRG->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
