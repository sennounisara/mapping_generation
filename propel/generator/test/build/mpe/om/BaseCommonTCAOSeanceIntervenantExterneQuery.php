<?php


/**
 * Base class that represents a query for the 't_CAO_Seance_Intervenant_Externe' table.
 *
 * 
 *
 * @method CommonTCAOSeanceIntervenantExterneQuery orderByIdSeanceIntervenantExterne($order = Criteria::ASC) Order by the id_seance_intervenant_externe column
 * @method CommonTCAOSeanceIntervenantExterneQuery orderByIdSeance($order = Criteria::ASC) Order by the id_seance column
 * @method CommonTCAOSeanceIntervenantExterneQuery orderByIdIntervenantExterne($order = Criteria::ASC) Order by the id_intervenant_externe column
 * @method CommonTCAOSeanceIntervenantExterneQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonTCAOSeanceIntervenantExterneQuery orderByIdRefValTypeVoix($order = Criteria::ASC) Order by the id_ref_val_type_voix column
 *
 * @method CommonTCAOSeanceIntervenantExterneQuery groupByIdSeanceIntervenantExterne() Group by the id_seance_intervenant_externe column
 * @method CommonTCAOSeanceIntervenantExterneQuery groupByIdSeance() Group by the id_seance column
 * @method CommonTCAOSeanceIntervenantExterneQuery groupByIdIntervenantExterne() Group by the id_intervenant_externe column
 * @method CommonTCAOSeanceIntervenantExterneQuery groupByOrganisme() Group by the organisme column
 * @method CommonTCAOSeanceIntervenantExterneQuery groupByIdRefValTypeVoix() Group by the id_ref_val_type_voix column
 *
 * @method CommonTCAOSeanceIntervenantExterneQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTCAOSeanceIntervenantExterneQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTCAOSeanceIntervenantExterneQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTCAOSeanceIntervenantExterneQuery leftJoinCommonTCAOIntervenantExterne($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTCAOIntervenantExterne relation
 * @method CommonTCAOSeanceIntervenantExterneQuery rightJoinCommonTCAOIntervenantExterne($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTCAOIntervenantExterne relation
 * @method CommonTCAOSeanceIntervenantExterneQuery innerJoinCommonTCAOIntervenantExterne($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTCAOIntervenantExterne relation
 *
 * @method CommonTCAOSeanceIntervenantExterneQuery leftJoinCommonTCAOSeance($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTCAOSeance relation
 * @method CommonTCAOSeanceIntervenantExterneQuery rightJoinCommonTCAOSeance($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTCAOSeance relation
 * @method CommonTCAOSeanceIntervenantExterneQuery innerJoinCommonTCAOSeance($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTCAOSeance relation
 *
 * @method CommonTCAOSeanceIntervenantExterne findOne(PropelPDO $con = null) Return the first CommonTCAOSeanceIntervenantExterne matching the query
 * @method CommonTCAOSeanceIntervenantExterne findOneOrCreate(PropelPDO $con = null) Return the first CommonTCAOSeanceIntervenantExterne matching the query, or a new CommonTCAOSeanceIntervenantExterne object populated from the query conditions when no match is found
 *
 * @method CommonTCAOSeanceIntervenantExterne findOneByIdSeanceIntervenantExterne(string $id_seance_intervenant_externe) Return the first CommonTCAOSeanceIntervenantExterne filtered by the id_seance_intervenant_externe column
 * @method CommonTCAOSeanceIntervenantExterne findOneByIdSeance(string $id_seance) Return the first CommonTCAOSeanceIntervenantExterne filtered by the id_seance column
 * @method CommonTCAOSeanceIntervenantExterne findOneByIdIntervenantExterne(string $id_intervenant_externe) Return the first CommonTCAOSeanceIntervenantExterne filtered by the id_intervenant_externe column
 * @method CommonTCAOSeanceIntervenantExterne findOneByOrganisme(string $organisme) Return the first CommonTCAOSeanceIntervenantExterne filtered by the organisme column
 * @method CommonTCAOSeanceIntervenantExterne findOneByIdRefValTypeVoix(int $id_ref_val_type_voix) Return the first CommonTCAOSeanceIntervenantExterne filtered by the id_ref_val_type_voix column
 *
 * @method array findByIdSeanceIntervenantExterne(string $id_seance_intervenant_externe) Return CommonTCAOSeanceIntervenantExterne objects filtered by the id_seance_intervenant_externe column
 * @method array findByIdSeance(string $id_seance) Return CommonTCAOSeanceIntervenantExterne objects filtered by the id_seance column
 * @method array findByIdIntervenantExterne(string $id_intervenant_externe) Return CommonTCAOSeanceIntervenantExterne objects filtered by the id_intervenant_externe column
 * @method array findByOrganisme(string $organisme) Return CommonTCAOSeanceIntervenantExterne objects filtered by the organisme column
 * @method array findByIdRefValTypeVoix(int $id_ref_val_type_voix) Return CommonTCAOSeanceIntervenantExterne objects filtered by the id_ref_val_type_voix column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTCAOSeanceIntervenantExterneQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTCAOSeanceIntervenantExterneQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTCAOSeanceIntervenantExterne', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTCAOSeanceIntervenantExterneQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTCAOSeanceIntervenantExterneQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTCAOSeanceIntervenantExterneQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTCAOSeanceIntervenantExterneQuery) {
            return $criteria;
        }
        $query = new CommonTCAOSeanceIntervenantExterneQuery();
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
                         A Primary key composition: [$id_seance_intervenant_externe, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonTCAOSeanceIntervenantExterne|CommonTCAOSeanceIntervenantExterne[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTCAOSeanceIntervenantExternePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTCAOSeanceIntervenantExternePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTCAOSeanceIntervenantExterne A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_seance_intervenant_externe`, `id_seance`, `id_intervenant_externe`, `organisme`, `id_ref_val_type_voix` FROM `t_CAO_Seance_Intervenant_Externe` WHERE `id_seance_intervenant_externe` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonTCAOSeanceIntervenantExterne();
            $obj->hydrate($row);
            CommonTCAOSeanceIntervenantExternePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonTCAOSeanceIntervenantExterne|CommonTCAOSeanceIntervenantExterne[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTCAOSeanceIntervenantExterne[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTCAOSeanceIntervenantExterneQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonTCAOSeanceIntervenantExternePeer::ID_SEANCE_INTERVENANT_EXTERNE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonTCAOSeanceIntervenantExternePeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTCAOSeanceIntervenantExterneQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonTCAOSeanceIntervenantExternePeer::ID_SEANCE_INTERVENANT_EXTERNE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonTCAOSeanceIntervenantExternePeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the id_seance_intervenant_externe column
     *
     * Example usage:
     * <code>
     * $query->filterByIdSeanceIntervenantExterne(1234); // WHERE id_seance_intervenant_externe = 1234
     * $query->filterByIdSeanceIntervenantExterne(array(12, 34)); // WHERE id_seance_intervenant_externe IN (12, 34)
     * $query->filterByIdSeanceIntervenantExterne(array('min' => 12)); // WHERE id_seance_intervenant_externe >= 12
     * $query->filterByIdSeanceIntervenantExterne(array('max' => 12)); // WHERE id_seance_intervenant_externe <= 12
     * </code>
     *
     * @param     mixed $idSeanceIntervenantExterne The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOSeanceIntervenantExterneQuery The current query, for fluid interface
     */
    public function filterByIdSeanceIntervenantExterne($idSeanceIntervenantExterne = null, $comparison = null)
    {
        if (is_array($idSeanceIntervenantExterne)) {
            $useMinMax = false;
            if (isset($idSeanceIntervenantExterne['min'])) {
                $this->addUsingAlias(CommonTCAOSeanceIntervenantExternePeer::ID_SEANCE_INTERVENANT_EXTERNE, $idSeanceIntervenantExterne['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idSeanceIntervenantExterne['max'])) {
                $this->addUsingAlias(CommonTCAOSeanceIntervenantExternePeer::ID_SEANCE_INTERVENANT_EXTERNE, $idSeanceIntervenantExterne['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOSeanceIntervenantExternePeer::ID_SEANCE_INTERVENANT_EXTERNE, $idSeanceIntervenantExterne, $comparison);
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
     * @see       filterByCommonTCAOSeance()
     *
     * @param     mixed $idSeance The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOSeanceIntervenantExterneQuery The current query, for fluid interface
     */
    public function filterByIdSeance($idSeance = null, $comparison = null)
    {
        if (is_array($idSeance)) {
            $useMinMax = false;
            if (isset($idSeance['min'])) {
                $this->addUsingAlias(CommonTCAOSeanceIntervenantExternePeer::ID_SEANCE, $idSeance['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idSeance['max'])) {
                $this->addUsingAlias(CommonTCAOSeanceIntervenantExternePeer::ID_SEANCE, $idSeance['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOSeanceIntervenantExternePeer::ID_SEANCE, $idSeance, $comparison);
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
     * @see       filterByCommonTCAOIntervenantExterne()
     *
     * @param     mixed $idIntervenantExterne The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOSeanceIntervenantExterneQuery The current query, for fluid interface
     */
    public function filterByIdIntervenantExterne($idIntervenantExterne = null, $comparison = null)
    {
        if (is_array($idIntervenantExterne)) {
            $useMinMax = false;
            if (isset($idIntervenantExterne['min'])) {
                $this->addUsingAlias(CommonTCAOSeanceIntervenantExternePeer::ID_INTERVENANT_EXTERNE, $idIntervenantExterne['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idIntervenantExterne['max'])) {
                $this->addUsingAlias(CommonTCAOSeanceIntervenantExternePeer::ID_INTERVENANT_EXTERNE, $idIntervenantExterne['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOSeanceIntervenantExternePeer::ID_INTERVENANT_EXTERNE, $idIntervenantExterne, $comparison);
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
     * @return CommonTCAOSeanceIntervenantExterneQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTCAOSeanceIntervenantExternePeer::ORGANISME, $organisme, $comparison);
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
     * @return CommonTCAOSeanceIntervenantExterneQuery The current query, for fluid interface
     */
    public function filterByIdRefValTypeVoix($idRefValTypeVoix = null, $comparison = null)
    {
        if (is_array($idRefValTypeVoix)) {
            $useMinMax = false;
            if (isset($idRefValTypeVoix['min'])) {
                $this->addUsingAlias(CommonTCAOSeanceIntervenantExternePeer::ID_REF_VAL_TYPE_VOIX, $idRefValTypeVoix['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idRefValTypeVoix['max'])) {
                $this->addUsingAlias(CommonTCAOSeanceIntervenantExternePeer::ID_REF_VAL_TYPE_VOIX, $idRefValTypeVoix['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOSeanceIntervenantExternePeer::ID_REF_VAL_TYPE_VOIX, $idRefValTypeVoix, $comparison);
    }

    /**
     * Filter the query by a related CommonTCAOIntervenantExterne object
     *
     * @param   CommonTCAOIntervenantExterne|PropelObjectCollection $commonTCAOIntervenantExterne The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTCAOSeanceIntervenantExterneQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTCAOIntervenantExterne($commonTCAOIntervenantExterne, $comparison = null)
    {
        if ($commonTCAOIntervenantExterne instanceof CommonTCAOIntervenantExterne) {
            return $this
                ->addUsingAlias(CommonTCAOSeanceIntervenantExternePeer::ID_INTERVENANT_EXTERNE, $commonTCAOIntervenantExterne->getIdIntervenantExterne(), $comparison);
        } elseif ($commonTCAOIntervenantExterne instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonTCAOSeanceIntervenantExternePeer::ID_INTERVENANT_EXTERNE, $commonTCAOIntervenantExterne->toKeyValue('IdIntervenantExterne', 'IdIntervenantExterne'), $comparison);
        } else {
            throw new PropelException('filterByCommonTCAOIntervenantExterne() only accepts arguments of type CommonTCAOIntervenantExterne or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTCAOIntervenantExterne relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTCAOSeanceIntervenantExterneQuery The current query, for fluid interface
     */
    public function joinCommonTCAOIntervenantExterne($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTCAOIntervenantExterne');

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
            $this->addJoinObject($join, 'CommonTCAOIntervenantExterne');
        }

        return $this;
    }

    /**
     * Use the CommonTCAOIntervenantExterne relation CommonTCAOIntervenantExterne object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTCAOIntervenantExterneQuery A secondary query class using the current class as primary query
     */
    public function useCommonTCAOIntervenantExterneQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonTCAOIntervenantExterne($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTCAOIntervenantExterne', 'CommonTCAOIntervenantExterneQuery');
    }

    /**
     * Filter the query by a related CommonTCAOSeance object
     *
     * @param   CommonTCAOSeance|PropelObjectCollection $commonTCAOSeance The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTCAOSeanceIntervenantExterneQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTCAOSeance($commonTCAOSeance, $comparison = null)
    {
        if ($commonTCAOSeance instanceof CommonTCAOSeance) {
            return $this
                ->addUsingAlias(CommonTCAOSeanceIntervenantExternePeer::ID_SEANCE, $commonTCAOSeance->getIdSeance(), $comparison);
        } elseif ($commonTCAOSeance instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonTCAOSeanceIntervenantExternePeer::ID_SEANCE, $commonTCAOSeance->toKeyValue('IdSeance', 'IdSeance'), $comparison);
        } else {
            throw new PropelException('filterByCommonTCAOSeance() only accepts arguments of type CommonTCAOSeance or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTCAOSeance relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTCAOSeanceIntervenantExterneQuery The current query, for fluid interface
     */
    public function joinCommonTCAOSeance($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTCAOSeance');

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
            $this->addJoinObject($join, 'CommonTCAOSeance');
        }

        return $this;
    }

    /**
     * Use the CommonTCAOSeance relation CommonTCAOSeance object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTCAOSeanceQuery A secondary query class using the current class as primary query
     */
    public function useCommonTCAOSeanceQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonTCAOSeance($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTCAOSeance', 'CommonTCAOSeanceQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTCAOSeanceIntervenantExterne $commonTCAOSeanceIntervenantExterne Object to remove from the list of results
     *
     * @return CommonTCAOSeanceIntervenantExterneQuery The current query, for fluid interface
     */
    public function prune($commonTCAOSeanceIntervenantExterne = null)
    {
        if ($commonTCAOSeanceIntervenantExterne) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonTCAOSeanceIntervenantExternePeer::ID_SEANCE_INTERVENANT_EXTERNE), $commonTCAOSeanceIntervenantExterne->getIdSeanceIntervenantExterne(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonTCAOSeanceIntervenantExternePeer::ORGANISME), $commonTCAOSeanceIntervenantExterne->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
