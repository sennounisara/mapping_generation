<?php


/**
 * Base class that represents a query for the 't_CAO_Commission_Intervenant_Externe' table.
 *
 * 
 *
 * @method CommonTCAOCommissionIntervenantExterneQuery orderByIdCommissionIntervenantExterne($order = Criteria::ASC) Order by the id_commission_intervenant_externe column
 * @method CommonTCAOCommissionIntervenantExterneQuery orderByIdIntervenantExterne($order = Criteria::ASC) Order by the id_intervenant_externe column
 * @method CommonTCAOCommissionIntervenantExterneQuery orderByIdCommission($order = Criteria::ASC) Order by the id_commission column
 * @method CommonTCAOCommissionIntervenantExterneQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonTCAOCommissionIntervenantExterneQuery orderByIdRefValTypeVoixDefaut($order = Criteria::ASC) Order by the id_ref_val_type_voix_defaut column
 *
 * @method CommonTCAOCommissionIntervenantExterneQuery groupByIdCommissionIntervenantExterne() Group by the id_commission_intervenant_externe column
 * @method CommonTCAOCommissionIntervenantExterneQuery groupByIdIntervenantExterne() Group by the id_intervenant_externe column
 * @method CommonTCAOCommissionIntervenantExterneQuery groupByIdCommission() Group by the id_commission column
 * @method CommonTCAOCommissionIntervenantExterneQuery groupByOrganisme() Group by the organisme column
 * @method CommonTCAOCommissionIntervenantExterneQuery groupByIdRefValTypeVoixDefaut() Group by the id_ref_val_type_voix_defaut column
 *
 * @method CommonTCAOCommissionIntervenantExterneQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTCAOCommissionIntervenantExterneQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTCAOCommissionIntervenantExterneQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTCAOCommissionIntervenantExterne findOne(PropelPDO $con = null) Return the first CommonTCAOCommissionIntervenantExterne matching the query
 * @method CommonTCAOCommissionIntervenantExterne findOneOrCreate(PropelPDO $con = null) Return the first CommonTCAOCommissionIntervenantExterne matching the query, or a new CommonTCAOCommissionIntervenantExterne object populated from the query conditions when no match is found
 *
 * @method CommonTCAOCommissionIntervenantExterne findOneByIdCommissionIntervenantExterne(string $id_commission_intervenant_externe) Return the first CommonTCAOCommissionIntervenantExterne filtered by the id_commission_intervenant_externe column
 * @method CommonTCAOCommissionIntervenantExterne findOneByIdIntervenantExterne(string $id_intervenant_externe) Return the first CommonTCAOCommissionIntervenantExterne filtered by the id_intervenant_externe column
 * @method CommonTCAOCommissionIntervenantExterne findOneByIdCommission(string $id_commission) Return the first CommonTCAOCommissionIntervenantExterne filtered by the id_commission column
 * @method CommonTCAOCommissionIntervenantExterne findOneByOrganisme(string $organisme) Return the first CommonTCAOCommissionIntervenantExterne filtered by the organisme column
 * @method CommonTCAOCommissionIntervenantExterne findOneByIdRefValTypeVoixDefaut(int $id_ref_val_type_voix_defaut) Return the first CommonTCAOCommissionIntervenantExterne filtered by the id_ref_val_type_voix_defaut column
 *
 * @method array findByIdCommissionIntervenantExterne(string $id_commission_intervenant_externe) Return CommonTCAOCommissionIntervenantExterne objects filtered by the id_commission_intervenant_externe column
 * @method array findByIdIntervenantExterne(string $id_intervenant_externe) Return CommonTCAOCommissionIntervenantExterne objects filtered by the id_intervenant_externe column
 * @method array findByIdCommission(string $id_commission) Return CommonTCAOCommissionIntervenantExterne objects filtered by the id_commission column
 * @method array findByOrganisme(string $organisme) Return CommonTCAOCommissionIntervenantExterne objects filtered by the organisme column
 * @method array findByIdRefValTypeVoixDefaut(int $id_ref_val_type_voix_defaut) Return CommonTCAOCommissionIntervenantExterne objects filtered by the id_ref_val_type_voix_defaut column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTCAOCommissionIntervenantExterneQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTCAOCommissionIntervenantExterneQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTCAOCommissionIntervenantExterne', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTCAOCommissionIntervenantExterneQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTCAOCommissionIntervenantExterneQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTCAOCommissionIntervenantExterneQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTCAOCommissionIntervenantExterneQuery) {
            return $criteria;
        }
        $query = new CommonTCAOCommissionIntervenantExterneQuery();
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
                         A Primary key composition: [$id_commission_intervenant_externe, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonTCAOCommissionIntervenantExterne|CommonTCAOCommissionIntervenantExterne[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTCAOCommissionIntervenantExternePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTCAOCommissionIntervenantExternePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTCAOCommissionIntervenantExterne A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_commission_intervenant_externe`, `id_intervenant_externe`, `id_commission`, `organisme`, `id_ref_val_type_voix_defaut` FROM `t_CAO_Commission_Intervenant_Externe` WHERE `id_commission_intervenant_externe` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonTCAOCommissionIntervenantExterne();
            $obj->hydrate($row);
            CommonTCAOCommissionIntervenantExternePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonTCAOCommissionIntervenantExterne|CommonTCAOCommissionIntervenantExterne[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTCAOCommissionIntervenantExterne[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTCAOCommissionIntervenantExterneQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonTCAOCommissionIntervenantExternePeer::ID_COMMISSION_INTERVENANT_EXTERNE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonTCAOCommissionIntervenantExternePeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTCAOCommissionIntervenantExterneQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonTCAOCommissionIntervenantExternePeer::ID_COMMISSION_INTERVENANT_EXTERNE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonTCAOCommissionIntervenantExternePeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the id_commission_intervenant_externe column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCommissionIntervenantExterne(1234); // WHERE id_commission_intervenant_externe = 1234
     * $query->filterByIdCommissionIntervenantExterne(array(12, 34)); // WHERE id_commission_intervenant_externe IN (12, 34)
     * $query->filterByIdCommissionIntervenantExterne(array('min' => 12)); // WHERE id_commission_intervenant_externe >= 12
     * $query->filterByIdCommissionIntervenantExterne(array('max' => 12)); // WHERE id_commission_intervenant_externe <= 12
     * </code>
     *
     * @param     mixed $idCommissionIntervenantExterne The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOCommissionIntervenantExterneQuery The current query, for fluid interface
     */
    public function filterByIdCommissionIntervenantExterne($idCommissionIntervenantExterne = null, $comparison = null)
    {
        if (is_array($idCommissionIntervenantExterne)) {
            $useMinMax = false;
            if (isset($idCommissionIntervenantExterne['min'])) {
                $this->addUsingAlias(CommonTCAOCommissionIntervenantExternePeer::ID_COMMISSION_INTERVENANT_EXTERNE, $idCommissionIntervenantExterne['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCommissionIntervenantExterne['max'])) {
                $this->addUsingAlias(CommonTCAOCommissionIntervenantExternePeer::ID_COMMISSION_INTERVENANT_EXTERNE, $idCommissionIntervenantExterne['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOCommissionIntervenantExternePeer::ID_COMMISSION_INTERVENANT_EXTERNE, $idCommissionIntervenantExterne, $comparison);
    }

    /**
     * Filter the query on the id_intervenant_externe column
     *
     * Example usage:
     * <code>
     * $query->filterByIdIntervenantExterne(1234); // WHERE id_intervenant_externe = 1234
     * $query->filterByIdIntervenantExterne(array(12, 34)); // WHERE id_intervenant_externe IN (12, 34)
     * $query->filterByIdIntervenantExterne(array('min' => 12)); // WHERE id_intervenant_externe >= 12
     * $query->filterByIdIntervenantExterne(array('max' => 12)); // WHERE id_intervenant_externe <= 12
     * </code>
     *
     * @param     mixed $idIntervenantExterne The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOCommissionIntervenantExterneQuery The current query, for fluid interface
     */
    public function filterByIdIntervenantExterne($idIntervenantExterne = null, $comparison = null)
    {
        if (is_array($idIntervenantExterne)) {
            $useMinMax = false;
            if (isset($idIntervenantExterne['min'])) {
                $this->addUsingAlias(CommonTCAOCommissionIntervenantExternePeer::ID_INTERVENANT_EXTERNE, $idIntervenantExterne['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idIntervenantExterne['max'])) {
                $this->addUsingAlias(CommonTCAOCommissionIntervenantExternePeer::ID_INTERVENANT_EXTERNE, $idIntervenantExterne['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOCommissionIntervenantExternePeer::ID_INTERVENANT_EXTERNE, $idIntervenantExterne, $comparison);
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
     * @return CommonTCAOCommissionIntervenantExterneQuery The current query, for fluid interface
     */
    public function filterByIdCommission($idCommission = null, $comparison = null)
    {
        if (is_array($idCommission)) {
            $useMinMax = false;
            if (isset($idCommission['min'])) {
                $this->addUsingAlias(CommonTCAOCommissionIntervenantExternePeer::ID_COMMISSION, $idCommission['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCommission['max'])) {
                $this->addUsingAlias(CommonTCAOCommissionIntervenantExternePeer::ID_COMMISSION, $idCommission['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOCommissionIntervenantExternePeer::ID_COMMISSION, $idCommission, $comparison);
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
     * @return CommonTCAOCommissionIntervenantExterneQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTCAOCommissionIntervenantExternePeer::ORGANISME, $organisme, $comparison);
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
     * @return CommonTCAOCommissionIntervenantExterneQuery The current query, for fluid interface
     */
    public function filterByIdRefValTypeVoixDefaut($idRefValTypeVoixDefaut = null, $comparison = null)
    {
        if (is_array($idRefValTypeVoixDefaut)) {
            $useMinMax = false;
            if (isset($idRefValTypeVoixDefaut['min'])) {
                $this->addUsingAlias(CommonTCAOCommissionIntervenantExternePeer::ID_REF_VAL_TYPE_VOIX_DEFAUT, $idRefValTypeVoixDefaut['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idRefValTypeVoixDefaut['max'])) {
                $this->addUsingAlias(CommonTCAOCommissionIntervenantExternePeer::ID_REF_VAL_TYPE_VOIX_DEFAUT, $idRefValTypeVoixDefaut['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOCommissionIntervenantExternePeer::ID_REF_VAL_TYPE_VOIX_DEFAUT, $idRefValTypeVoixDefaut, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTCAOCommissionIntervenantExterne $commonTCAOCommissionIntervenantExterne Object to remove from the list of results
     *
     * @return CommonTCAOCommissionIntervenantExterneQuery The current query, for fluid interface
     */
    public function prune($commonTCAOCommissionIntervenantExterne = null)
    {
        if ($commonTCAOCommissionIntervenantExterne) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonTCAOCommissionIntervenantExternePeer::ID_COMMISSION_INTERVENANT_EXTERNE), $commonTCAOCommissionIntervenantExterne->getIdCommissionIntervenantExterne(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonTCAOCommissionIntervenantExternePeer::ORGANISME), $commonTCAOCommissionIntervenantExterne->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
