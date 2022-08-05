<?php


/**
 * Base class that represents a query for the 't_CAO_Commission_Agent' table.
 *
 * 
 *
 * @method CommonTCAOCommissionAgentQuery orderByIdCommissionAgent($order = Criteria::ASC) Order by the id_commission_agent column
 * @method CommonTCAOCommissionAgentQuery orderByIdAgent($order = Criteria::ASC) Order by the id_agent column
 * @method CommonTCAOCommissionAgentQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonTCAOCommissionAgentQuery orderByIdCommission($order = Criteria::ASC) Order by the id_commission column
 * @method CommonTCAOCommissionAgentQuery orderByIdRefValTypeVoixDefaut($order = Criteria::ASC) Order by the id_ref_val_type_voix_defaut column
 * @method CommonTCAOCommissionAgentQuery orderByTypeCompte($order = Criteria::ASC) Order by the type_compte column
 *
 * @method CommonTCAOCommissionAgentQuery groupByIdCommissionAgent() Group by the id_commission_agent column
 * @method CommonTCAOCommissionAgentQuery groupByIdAgent() Group by the id_agent column
 * @method CommonTCAOCommissionAgentQuery groupByOrganisme() Group by the organisme column
 * @method CommonTCAOCommissionAgentQuery groupByIdCommission() Group by the id_commission column
 * @method CommonTCAOCommissionAgentQuery groupByIdRefValTypeVoixDefaut() Group by the id_ref_val_type_voix_defaut column
 * @method CommonTCAOCommissionAgentQuery groupByTypeCompte() Group by the type_compte column
 *
 * @method CommonTCAOCommissionAgentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTCAOCommissionAgentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTCAOCommissionAgentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTCAOCommissionAgent findOne(PropelPDO $con = null) Return the first CommonTCAOCommissionAgent matching the query
 * @method CommonTCAOCommissionAgent findOneOrCreate(PropelPDO $con = null) Return the first CommonTCAOCommissionAgent matching the query, or a new CommonTCAOCommissionAgent object populated from the query conditions when no match is found
 *
 * @method CommonTCAOCommissionAgent findOneByIdCommissionAgent(string $id_commission_agent) Return the first CommonTCAOCommissionAgent filtered by the id_commission_agent column
 * @method CommonTCAOCommissionAgent findOneByIdAgent(int $id_agent) Return the first CommonTCAOCommissionAgent filtered by the id_agent column
 * @method CommonTCAOCommissionAgent findOneByOrganisme(string $organisme) Return the first CommonTCAOCommissionAgent filtered by the organisme column
 * @method CommonTCAOCommissionAgent findOneByIdCommission(string $id_commission) Return the first CommonTCAOCommissionAgent filtered by the id_commission column
 * @method CommonTCAOCommissionAgent findOneByIdRefValTypeVoixDefaut(int $id_ref_val_type_voix_defaut) Return the first CommonTCAOCommissionAgent filtered by the id_ref_val_type_voix_defaut column
 * @method CommonTCAOCommissionAgent findOneByTypeCompte(int $type_compte) Return the first CommonTCAOCommissionAgent filtered by the type_compte column
 *
 * @method array findByIdCommissionAgent(string $id_commission_agent) Return CommonTCAOCommissionAgent objects filtered by the id_commission_agent column
 * @method array findByIdAgent(int $id_agent) Return CommonTCAOCommissionAgent objects filtered by the id_agent column
 * @method array findByOrganisme(string $organisme) Return CommonTCAOCommissionAgent objects filtered by the organisme column
 * @method array findByIdCommission(string $id_commission) Return CommonTCAOCommissionAgent objects filtered by the id_commission column
 * @method array findByIdRefValTypeVoixDefaut(int $id_ref_val_type_voix_defaut) Return CommonTCAOCommissionAgent objects filtered by the id_ref_val_type_voix_defaut column
 * @method array findByTypeCompte(int $type_compte) Return CommonTCAOCommissionAgent objects filtered by the type_compte column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTCAOCommissionAgentQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTCAOCommissionAgentQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTCAOCommissionAgent', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTCAOCommissionAgentQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTCAOCommissionAgentQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTCAOCommissionAgentQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTCAOCommissionAgentQuery) {
            return $criteria;
        }
        $query = new CommonTCAOCommissionAgentQuery();
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
                         A Primary key composition: [$id_commission_agent, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonTCAOCommissionAgent|CommonTCAOCommissionAgent[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTCAOCommissionAgentPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTCAOCommissionAgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTCAOCommissionAgent A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_commission_agent`, `id_agent`, `organisme`, `id_commission`, `id_ref_val_type_voix_defaut`, `type_compte` FROM `t_CAO_Commission_Agent` WHERE `id_commission_agent` = :p0 AND `organisme` = :p1';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonTCAOCommissionAgent();
            $obj->hydrate($row);
            CommonTCAOCommissionAgentPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonTCAOCommissionAgent|CommonTCAOCommissionAgent[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTCAOCommissionAgent[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTCAOCommissionAgentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonTCAOCommissionAgentPeer::ID_COMMISSION_AGENT, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonTCAOCommissionAgentPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTCAOCommissionAgentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonTCAOCommissionAgentPeer::ID_COMMISSION_AGENT, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonTCAOCommissionAgentPeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the id_commission_agent column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCommissionAgent(1234); // WHERE id_commission_agent = 1234
     * $query->filterByIdCommissionAgent(array(12, 34)); // WHERE id_commission_agent IN (12, 34)
     * $query->filterByIdCommissionAgent(array('min' => 12)); // WHERE id_commission_agent >= 12
     * $query->filterByIdCommissionAgent(array('max' => 12)); // WHERE id_commission_agent <= 12
     * </code>
     *
     * @param     mixed $idCommissionAgent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOCommissionAgentQuery The current query, for fluid interface
     */
    public function filterByIdCommissionAgent($idCommissionAgent = null, $comparison = null)
    {
        if (is_array($idCommissionAgent)) {
            $useMinMax = false;
            if (isset($idCommissionAgent['min'])) {
                $this->addUsingAlias(CommonTCAOCommissionAgentPeer::ID_COMMISSION_AGENT, $idCommissionAgent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCommissionAgent['max'])) {
                $this->addUsingAlias(CommonTCAOCommissionAgentPeer::ID_COMMISSION_AGENT, $idCommissionAgent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOCommissionAgentPeer::ID_COMMISSION_AGENT, $idCommissionAgent, $comparison);
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
     * @return CommonTCAOCommissionAgentQuery The current query, for fluid interface
     */
    public function filterByIdAgent($idAgent = null, $comparison = null)
    {
        if (is_array($idAgent)) {
            $useMinMax = false;
            if (isset($idAgent['min'])) {
                $this->addUsingAlias(CommonTCAOCommissionAgentPeer::ID_AGENT, $idAgent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgent['max'])) {
                $this->addUsingAlias(CommonTCAOCommissionAgentPeer::ID_AGENT, $idAgent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOCommissionAgentPeer::ID_AGENT, $idAgent, $comparison);
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
     * @return CommonTCAOCommissionAgentQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTCAOCommissionAgentPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the id_commission column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCommission(1234); // WHERE id_commission = 1234
     * $query->filterByIdCommission(array(12, 34)); // WHERE id_commission IN (12, 34)
     * $query->filterByIdCommission(array('min' => 12)); // WHERE id_commission >= 12
     * $query->filterByIdCommission(array('max' => 12)); // WHERE id_commission <= 12
     * </code>
     *
     * @param     mixed $idCommission The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOCommissionAgentQuery The current query, for fluid interface
     */
    public function filterByIdCommission($idCommission = null, $comparison = null)
    {
        if (is_array($idCommission)) {
            $useMinMax = false;
            if (isset($idCommission['min'])) {
                $this->addUsingAlias(CommonTCAOCommissionAgentPeer::ID_COMMISSION, $idCommission['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCommission['max'])) {
                $this->addUsingAlias(CommonTCAOCommissionAgentPeer::ID_COMMISSION, $idCommission['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOCommissionAgentPeer::ID_COMMISSION, $idCommission, $comparison);
    }

    /**
     * Filter the query on the id_ref_val_type_voix_defaut column
     *
     * Example usage:
     * <code>
     * $query->filterByIdRefValTypeVoixDefaut(1234); // WHERE id_ref_val_type_voix_defaut = 1234
     * $query->filterByIdRefValTypeVoixDefaut(array(12, 34)); // WHERE id_ref_val_type_voix_defaut IN (12, 34)
     * $query->filterByIdRefValTypeVoixDefaut(array('min' => 12)); // WHERE id_ref_val_type_voix_defaut >= 12
     * $query->filterByIdRefValTypeVoixDefaut(array('max' => 12)); // WHERE id_ref_val_type_voix_defaut <= 12
     * </code>
     *
     * @param     mixed $idRefValTypeVoixDefaut The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOCommissionAgentQuery The current query, for fluid interface
     */
    public function filterByIdRefValTypeVoixDefaut($idRefValTypeVoixDefaut = null, $comparison = null)
    {
        if (is_array($idRefValTypeVoixDefaut)) {
            $useMinMax = false;
            if (isset($idRefValTypeVoixDefaut['min'])) {
                $this->addUsingAlias(CommonTCAOCommissionAgentPeer::ID_REF_VAL_TYPE_VOIX_DEFAUT, $idRefValTypeVoixDefaut['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idRefValTypeVoixDefaut['max'])) {
                $this->addUsingAlias(CommonTCAOCommissionAgentPeer::ID_REF_VAL_TYPE_VOIX_DEFAUT, $idRefValTypeVoixDefaut['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOCommissionAgentPeer::ID_REF_VAL_TYPE_VOIX_DEFAUT, $idRefValTypeVoixDefaut, $comparison);
    }

    /**
     * Filter the query on the type_compte column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeCompte(1234); // WHERE type_compte = 1234
     * $query->filterByTypeCompte(array(12, 34)); // WHERE type_compte IN (12, 34)
     * $query->filterByTypeCompte(array('min' => 12)); // WHERE type_compte >= 12
     * $query->filterByTypeCompte(array('max' => 12)); // WHERE type_compte <= 12
     * </code>
     *
     * @param     mixed $typeCompte The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOCommissionAgentQuery The current query, for fluid interface
     */
    public function filterByTypeCompte($typeCompte = null, $comparison = null)
    {
        if (is_array($typeCompte)) {
            $useMinMax = false;
            if (isset($typeCompte['min'])) {
                $this->addUsingAlias(CommonTCAOCommissionAgentPeer::TYPE_COMPTE, $typeCompte['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeCompte['max'])) {
                $this->addUsingAlias(CommonTCAOCommissionAgentPeer::TYPE_COMPTE, $typeCompte['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOCommissionAgentPeer::TYPE_COMPTE, $typeCompte, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTCAOCommissionAgent $commonTCAOCommissionAgent Object to remove from the list of results
     *
     * @return CommonTCAOCommissionAgentQuery The current query, for fluid interface
     */
    public function prune($commonTCAOCommissionAgent = null)
    {
        if ($commonTCAOCommissionAgent) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonTCAOCommissionAgentPeer::ID_COMMISSION_AGENT), $commonTCAOCommissionAgent->getIdCommissionAgent(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonTCAOCommissionAgentPeer::ORGANISME), $commonTCAOCommissionAgent->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
