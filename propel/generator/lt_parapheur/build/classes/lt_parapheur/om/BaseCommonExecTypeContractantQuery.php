<?php


/**
 * Base class that represents a query for the 'exec_type_contractant' table.
 *
 * 
 *
 * @method CommonExecTypeContractantQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonExecTypeContractantQuery orderByIdTypeStructure($order = Criteria::ASC) Order by the id_type_structure column
 * @method CommonExecTypeContractantQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method CommonExecTypeContractantQuery orderByLibelleFr($order = Criteria::ASC) Order by the libelle_fr column
 * @method CommonExecTypeContractantQuery orderByLibelleAr($order = Criteria::ASC) Order by the libelle_ar column
 * @method CommonExecTypeContractantQuery orderByLibelleEn($order = Criteria::ASC) Order by the libelle_en column
 *
 * @method CommonExecTypeContractantQuery groupById() Group by the id column
 * @method CommonExecTypeContractantQuery groupByIdTypeStructure() Group by the id_type_structure column
 * @method CommonExecTypeContractantQuery groupByLibelle() Group by the libelle column
 * @method CommonExecTypeContractantQuery groupByLibelleFr() Group by the libelle_fr column
 * @method CommonExecTypeContractantQuery groupByLibelleAr() Group by the libelle_ar column
 * @method CommonExecTypeContractantQuery groupByLibelleEn() Group by the libelle_en column
 *
 * @method CommonExecTypeContractantQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonExecTypeContractantQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonExecTypeContractantQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonExecTypeContractantQuery leftJoinCommonExecTypeStructure($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecTypeStructure relation
 * @method CommonExecTypeContractantQuery rightJoinCommonExecTypeStructure($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecTypeStructure relation
 * @method CommonExecTypeContractantQuery innerJoinCommonExecTypeStructure($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecTypeStructure relation
 *
 * @method CommonExecTypeContractantQuery leftJoinCommonExecContractant($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecContractant relation
 * @method CommonExecTypeContractantQuery rightJoinCommonExecContractant($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecContractant relation
 * @method CommonExecTypeContractantQuery innerJoinCommonExecContractant($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecContractant relation
 *
 * @method CommonExecTypeContractant findOne(PropelPDO $con = null) Return the first CommonExecTypeContractant matching the query
 * @method CommonExecTypeContractant findOneOrCreate(PropelPDO $con = null) Return the first CommonExecTypeContractant matching the query, or a new CommonExecTypeContractant object populated from the query conditions when no match is found
 *
 * @method CommonExecTypeContractant findOneByIdTypeStructure(int $id_type_structure) Return the first CommonExecTypeContractant filtered by the id_type_structure column
 * @method CommonExecTypeContractant findOneByLibelle(string $libelle) Return the first CommonExecTypeContractant filtered by the libelle column
 * @method CommonExecTypeContractant findOneByLibelleFr(string $libelle_fr) Return the first CommonExecTypeContractant filtered by the libelle_fr column
 * @method CommonExecTypeContractant findOneByLibelleAr(string $libelle_ar) Return the first CommonExecTypeContractant filtered by the libelle_ar column
 * @method CommonExecTypeContractant findOneByLibelleEn(string $libelle_en) Return the first CommonExecTypeContractant filtered by the libelle_en column
 *
 * @method array findById(int $id) Return CommonExecTypeContractant objects filtered by the id column
 * @method array findByIdTypeStructure(int $id_type_structure) Return CommonExecTypeContractant objects filtered by the id_type_structure column
 * @method array findByLibelle(string $libelle) Return CommonExecTypeContractant objects filtered by the libelle column
 * @method array findByLibelleFr(string $libelle_fr) Return CommonExecTypeContractant objects filtered by the libelle_fr column
 * @method array findByLibelleAr(string $libelle_ar) Return CommonExecTypeContractant objects filtered by the libelle_ar column
 * @method array findByLibelleEn(string $libelle_en) Return CommonExecTypeContractant objects filtered by the libelle_en column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonExecTypeContractantQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonExecTypeContractantQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonExecTypeContractant', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonExecTypeContractantQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonExecTypeContractantQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonExecTypeContractantQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonExecTypeContractantQuery) {
            return $criteria;
        }
        $query = new CommonExecTypeContractantQuery();
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
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query 
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonExecTypeContractant|CommonExecTypeContractant[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonExecTypeContractantPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonExecTypeContractantPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonExecTypeContractant A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneById($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonExecTypeContractant A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_type_structure`, `libelle`, `libelle_fr`, `libelle_ar`, `libelle_en` FROM `exec_type_contractant` WHERE `id` = :p0';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonExecTypeContractant();
            $obj->hydrate($row);
            CommonExecTypeContractantPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonExecTypeContractant|CommonExecTypeContractant[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CommonExecTypeContractant[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonExecTypeContractantQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonExecTypeContractantPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonExecTypeContractantQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonExecTypeContractantPeer::ID, $keys, Criteria::IN);
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
     * @return CommonExecTypeContractantQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonExecTypeContractantPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonExecTypeContractantPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecTypeContractantPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_type_structure column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTypeStructure(1234); // WHERE id_type_structure = 1234
     * $query->filterByIdTypeStructure(array(12, 34)); // WHERE id_type_structure IN (12, 34)
     * $query->filterByIdTypeStructure(array('min' => 12)); // WHERE id_type_structure >= 12
     * $query->filterByIdTypeStructure(array('max' => 12)); // WHERE id_type_structure <= 12
     * </code>
     *
     * @see       filterByCommonExecTypeStructure()
     *
     * @param     mixed $idTypeStructure The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecTypeContractantQuery The current query, for fluid interface
     */
    public function filterByIdTypeStructure($idTypeStructure = null, $comparison = null)
    {
        if (is_array($idTypeStructure)) {
            $useMinMax = false;
            if (isset($idTypeStructure['min'])) {
                $this->addUsingAlias(CommonExecTypeContractantPeer::ID_TYPE_STRUCTURE, $idTypeStructure['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeStructure['max'])) {
                $this->addUsingAlias(CommonExecTypeContractantPeer::ID_TYPE_STRUCTURE, $idTypeStructure['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecTypeContractantPeer::ID_TYPE_STRUCTURE, $idTypeStructure, $comparison);
    }

    /**
     * Filter the query on the libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelle('fooValue');   // WHERE libelle = 'fooValue'
     * $query->filterByLibelle('%fooValue%'); // WHERE libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecTypeContractantQuery The current query, for fluid interface
     */
    public function filterByLibelle($libelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelle)) {
                $libelle = str_replace('*', '%', $libelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecTypeContractantPeer::LIBELLE, $libelle, $comparison);
    }

    /**
     * Filter the query on the libelle_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleFr('fooValue');   // WHERE libelle_fr = 'fooValue'
     * $query->filterByLibelleFr('%fooValue%'); // WHERE libelle_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecTypeContractantQuery The current query, for fluid interface
     */
    public function filterByLibelleFr($libelleFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleFr)) {
                $libelleFr = str_replace('*', '%', $libelleFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecTypeContractantPeer::LIBELLE_FR, $libelleFr, $comparison);
    }

    /**
     * Filter the query on the libelle_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleAr('fooValue');   // WHERE libelle_ar = 'fooValue'
     * $query->filterByLibelleAr('%fooValue%'); // WHERE libelle_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecTypeContractantQuery The current query, for fluid interface
     */
    public function filterByLibelleAr($libelleAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleAr)) {
                $libelleAr = str_replace('*', '%', $libelleAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecTypeContractantPeer::LIBELLE_AR, $libelleAr, $comparison);
    }

    /**
     * Filter the query on the libelle_en column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleEn('fooValue');   // WHERE libelle_en = 'fooValue'
     * $query->filterByLibelleEn('%fooValue%'); // WHERE libelle_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecTypeContractantQuery The current query, for fluid interface
     */
    public function filterByLibelleEn($libelleEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleEn)) {
                $libelleEn = str_replace('*', '%', $libelleEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecTypeContractantPeer::LIBELLE_EN, $libelleEn, $comparison);
    }

    /**
     * Filter the query by a related CommonExecTypeStructure object
     *
     * @param   CommonExecTypeStructure|PropelObjectCollection $commonExecTypeStructure The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecTypeContractantQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecTypeStructure($commonExecTypeStructure, $comparison = null)
    {
        if ($commonExecTypeStructure instanceof CommonExecTypeStructure) {
            return $this
                ->addUsingAlias(CommonExecTypeContractantPeer::ID_TYPE_STRUCTURE, $commonExecTypeStructure->getId(), $comparison);
        } elseif ($commonExecTypeStructure instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecTypeContractantPeer::ID_TYPE_STRUCTURE, $commonExecTypeStructure->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonExecTypeStructure() only accepts arguments of type CommonExecTypeStructure or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecTypeStructure relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecTypeContractantQuery The current query, for fluid interface
     */
    public function joinCommonExecTypeStructure($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecTypeStructure');

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
            $this->addJoinObject($join, 'CommonExecTypeStructure');
        }

        return $this;
    }

    /**
     * Use the CommonExecTypeStructure relation CommonExecTypeStructure object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecTypeStructureQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecTypeStructureQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecTypeStructure($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecTypeStructure', 'CommonExecTypeStructureQuery');
    }

    /**
     * Filter the query by a related CommonExecContractant object
     *
     * @param   CommonExecContractant|PropelObjectCollection $commonExecContractant  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecTypeContractantQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecContractant($commonExecContractant, $comparison = null)
    {
        if ($commonExecContractant instanceof CommonExecContractant) {
            return $this
                ->addUsingAlias(CommonExecTypeContractantPeer::ID, $commonExecContractant->getIdTypeContractant(), $comparison);
        } elseif ($commonExecContractant instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecContractantQuery()
                ->filterByPrimaryKeys($commonExecContractant->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecContractant() only accepts arguments of type CommonExecContractant or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecContractant relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecTypeContractantQuery The current query, for fluid interface
     */
    public function joinCommonExecContractant($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecContractant');

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
            $this->addJoinObject($join, 'CommonExecContractant');
        }

        return $this;
    }

    /**
     * Use the CommonExecContractant relation CommonExecContractant object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecContractantQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecContractantQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecContractant($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecContractant', 'CommonExecContractantQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonExecTypeContractant $commonExecTypeContractant Object to remove from the list of results
     *
     * @return CommonExecTypeContractantQuery The current query, for fluid interface
     */
    public function prune($commonExecTypeContractant = null)
    {
        if ($commonExecTypeContractant) {
            $this->addUsingAlias(CommonExecTypeContractantPeer::ID, $commonExecTypeContractant->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
