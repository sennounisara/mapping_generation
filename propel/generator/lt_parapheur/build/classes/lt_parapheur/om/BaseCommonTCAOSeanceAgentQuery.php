<?php


/**
 * Base class that represents a query for the 't_CAO_Seance_Agent' table.
 *
 * 
 *
 * @method CommonTCAOSeanceAgentQuery orderByIdSeanceAgent($order = Criteria::ASC) Order by the id_seance_agent column
 * @method CommonTCAOSeanceAgentQuery orderByIdSeance($order = Criteria::ASC) Order by the id_seance column
 * @method CommonTCAOSeanceAgentQuery orderByIdAgent($order = Criteria::ASC) Order by the id_agent column
 * @method CommonTCAOSeanceAgentQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonTCAOSeanceAgentQuery orderByIdRefValTypeVoix($order = Criteria::ASC) Order by the id_ref_val_type_voix column
 * @method CommonTCAOSeanceAgentQuery orderByTypeCompte($order = Criteria::ASC) Order by the type_compte column
 *
 * @method CommonTCAOSeanceAgentQuery groupByIdSeanceAgent() Group by the id_seance_agent column
 * @method CommonTCAOSeanceAgentQuery groupByIdSeance() Group by the id_seance column
 * @method CommonTCAOSeanceAgentQuery groupByIdAgent() Group by the id_agent column
 * @method CommonTCAOSeanceAgentQuery groupByOrganisme() Group by the organisme column
 * @method CommonTCAOSeanceAgentQuery groupByIdRefValTypeVoix() Group by the id_ref_val_type_voix column
 * @method CommonTCAOSeanceAgentQuery groupByTypeCompte() Group by the type_compte column
 *
 * @method CommonTCAOSeanceAgentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTCAOSeanceAgentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTCAOSeanceAgentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTCAOSeanceAgent findOne(PropelPDO $con = null) Return the first CommonTCAOSeanceAgent matching the query
 * @method CommonTCAOSeanceAgent findOneOrCreate(PropelPDO $con = null) Return the first CommonTCAOSeanceAgent matching the query, or a new CommonTCAOSeanceAgent object populated from the query conditions when no match is found
 *
 * @method CommonTCAOSeanceAgent findOneByIdSeanceAgent(string $id_seance_agent) Return the first CommonTCAOSeanceAgent filtered by the id_seance_agent column
 * @method CommonTCAOSeanceAgent findOneByIdSeance(string $id_seance) Return the first CommonTCAOSeanceAgent filtered by the id_seance column
 * @method CommonTCAOSeanceAgent findOneByIdAgent(int $id_agent) Return the first CommonTCAOSeanceAgent filtered by the id_agent column
 * @method CommonTCAOSeanceAgent findOneByOrganisme(string $organisme) Return the first CommonTCAOSeanceAgent filtered by the organisme column
 * @method CommonTCAOSeanceAgent findOneByIdRefValTypeVoix(int $id_ref_val_type_voix) Return the first CommonTCAOSeanceAgent filtered by the id_ref_val_type_voix column
 * @method CommonTCAOSeanceAgent findOneByTypeCompte(int $type_compte) Return the first CommonTCAOSeanceAgent filtered by the type_compte column
 *
 * @method array findByIdSeanceAgent(string $id_seance_agent) Return CommonTCAOSeanceAgent objects filtered by the id_seance_agent column
 * @method array findByIdSeance(string $id_seance) Return CommonTCAOSeanceAgent objects filtered by the id_seance column
 * @method array findByIdAgent(int $id_agent) Return CommonTCAOSeanceAgent objects filtered by the id_agent column
 * @method array findByOrganisme(string $organisme) Return CommonTCAOSeanceAgent objects filtered by the organisme column
 * @method array findByIdRefValTypeVoix(int $id_ref_val_type_voix) Return CommonTCAOSeanceAgent objects filtered by the id_ref_val_type_voix column
 * @method array findByTypeCompte(int $type_compte) Return CommonTCAOSeanceAgent objects filtered by the type_compte column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTCAOSeanceAgentQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTCAOSeanceAgentQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTCAOSeanceAgent', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTCAOSeanceAgentQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTCAOSeanceAgentQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTCAOSeanceAgentQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTCAOSeanceAgentQuery) {
            return $criteria;
        }
        $query = new CommonTCAOSeanceAgentQuery();
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
                         A Primary key composition: [$id_seance_agent, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonTCAOSeanceAgent|CommonTCAOSeanceAgent[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTCAOSeanceAgentPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTCAOSeanceAgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTCAOSeanceAgent A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_seance_agent`, `id_seance`, `id_agent`, `organisme`, `id_ref_val_type_voix`, `type_compte` FROM `t_CAO_Seance_Agent` WHERE `id_seance_agent` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonTCAOSeanceAgent();
            $obj->hydrate($row);
            CommonTCAOSeanceAgentPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonTCAOSeanceAgent|CommonTCAOSeanceAgent[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTCAOSeanceAgent[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTCAOSeanceAgentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonTCAOSeanceAgentPeer::ID_SEANCE_AGENT, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonTCAOSeanceAgentPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTCAOSeanceAgentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonTCAOSeanceAgentPeer::ID_SEANCE_AGENT, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonTCAOSeanceAgentPeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the id_seance_agent column
     *
     * Example usage:
     * <code>
     * $query->filterByIdSeanceAgent(1234); // WHERE id_seance_agent = 1234
     * $query->filterByIdSeanceAgent(array(12, 34)); // WHERE id_seance_agent IN (12, 34)
     * $query->filterByIdSeanceAgent(array('min' => 12)); // WHERE id_seance_agent >= 12
     * $query->filterByIdSeanceAgent(array('max' => 12)); // WHERE id_seance_agent <= 12
     * </code>
     *
     * @param     mixed $idSeanceAgent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOSeanceAgentQuery The current query, for fluid interface
     */
    public function filterByIdSeanceAgent($idSeanceAgent = null, $comparison = null)
    {
        if (is_array($idSeanceAgent)) {
            $useMinMax = false;
            if (isset($idSeanceAgent['min'])) {
                $this->addUsingAlias(CommonTCAOSeanceAgentPeer::ID_SEANCE_AGENT, $idSeanceAgent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idSeanceAgent['max'])) {
                $this->addUsingAlias(CommonTCAOSeanceAgentPeer::ID_SEANCE_AGENT, $idSeanceAgent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOSeanceAgentPeer::ID_SEANCE_AGENT, $idSeanceAgent, $comparison);
    }

    /**
     * Filter the query on the id_seance column
     *
     * Example usage:
     * <code>
     * $query->filterByIdSeance(1234); // WHERE id_seance = 1234
     * $query->filterByIdSeance(array(12, 34)); // WHERE id_seance IN (12, 34)
     * $query->filterByIdSeance(array('min' => 12)); // WHERE id_seance >= 12
     * $query->filterByIdSeance(array('max' => 12)); // WHERE id_seance <= 12
     * </code>
     *
     * @param     mixed $idSeance The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOSeanceAgentQuery The current query, for fluid interface
     */
    public function filterByIdSeance($idSeance = null, $comparison = null)
    {
        if (is_array($idSeance)) {
            $useMinMax = false;
            if (isset($idSeance['min'])) {
                $this->addUsingAlias(CommonTCAOSeanceAgentPeer::ID_SEANCE, $idSeance['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idSeance['max'])) {
                $this->addUsingAlias(CommonTCAOSeanceAgentPeer::ID_SEANCE, $idSeance['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOSeanceAgentPeer::ID_SEANCE, $idSeance, $comparison);
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
     * @return CommonTCAOSeanceAgentQuery The current query, for fluid interface
     */
    public function filterByIdAgent($idAgent = null, $comparison = null)
    {
        if (is_array($idAgent)) {
            $useMinMax = false;
            if (isset($idAgent['min'])) {
                $this->addUsingAlias(CommonTCAOSeanceAgentPeer::ID_AGENT, $idAgent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgent['max'])) {
                $this->addUsingAlias(CommonTCAOSeanceAgentPeer::ID_AGENT, $idAgent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOSeanceAgentPeer::ID_AGENT, $idAgent, $comparison);
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
     * @return CommonTCAOSeanceAgentQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTCAOSeanceAgentPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the id_ref_val_type_voix column
     *
     * Example usage:
     * <code>
     * $query->filterByIdRefValTypeVoix(1234); // WHERE id_ref_val_type_voix = 1234
     * $query->filterByIdRefValTypeVoix(array(12, 34)); // WHERE id_ref_val_type_voix IN (12, 34)
     * $query->filterByIdRefValTypeVoix(array('min' => 12)); // WHERE id_ref_val_type_voix >= 12
     * $query->filterByIdRefValTypeVoix(array('max' => 12)); // WHERE id_ref_val_type_voix <= 12
     * </code>
     *
     * @param     mixed $idRefValTypeVoix The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOSeanceAgentQuery The current query, for fluid interface
     */
    public function filterByIdRefValTypeVoix($idRefValTypeVoix = null, $comparison = null)
    {
        if (is_array($idRefValTypeVoix)) {
            $useMinMax = false;
            if (isset($idRefValTypeVoix['min'])) {
                $this->addUsingAlias(CommonTCAOSeanceAgentPeer::ID_REF_VAL_TYPE_VOIX, $idRefValTypeVoix['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idRefValTypeVoix['max'])) {
                $this->addUsingAlias(CommonTCAOSeanceAgentPeer::ID_REF_VAL_TYPE_VOIX, $idRefValTypeVoix['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOSeanceAgentPeer::ID_REF_VAL_TYPE_VOIX, $idRefValTypeVoix, $comparison);
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
     * @return CommonTCAOSeanceAgentQuery The current query, for fluid interface
     */
    public function filterByTypeCompte($typeCompte = null, $comparison = null)
    {
        if (is_array($typeCompte)) {
            $useMinMax = false;
            if (isset($typeCompte['min'])) {
                $this->addUsingAlias(CommonTCAOSeanceAgentPeer::TYPE_COMPTE, $typeCompte['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeCompte['max'])) {
                $this->addUsingAlias(CommonTCAOSeanceAgentPeer::TYPE_COMPTE, $typeCompte['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOSeanceAgentPeer::TYPE_COMPTE, $typeCompte, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTCAOSeanceAgent $commonTCAOSeanceAgent Object to remove from the list of results
     *
     * @return CommonTCAOSeanceAgentQuery The current query, for fluid interface
     */
    public function prune($commonTCAOSeanceAgent = null)
    {
        if ($commonTCAOSeanceAgent) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonTCAOSeanceAgentPeer::ID_SEANCE_AGENT), $commonTCAOSeanceAgent->getIdSeanceAgent(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonTCAOSeanceAgentPeer::ORGANISME), $commonTCAOSeanceAgent->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
