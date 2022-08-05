<?php


/**
 * Base class that represents a query for the 'EnchereOffreReference' table.
 *
 * 
 *
 * @method CommonEnchereOffreReferenceQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonEnchereOffreReferenceQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonEnchereOffreReferenceQuery orderByIdenchereoffre($order = Criteria::ASC) Order by the idEnchereOffre column
 * @method CommonEnchereOffreReferenceQuery orderByIdencherereference($order = Criteria::ASC) Order by the idEnchereReference column
 * @method CommonEnchereOffreReferenceQuery orderByValeur($order = Criteria::ASC) Order by the valeur column
 *
 * @method CommonEnchereOffreReferenceQuery groupById() Group by the id column
 * @method CommonEnchereOffreReferenceQuery groupByOrganisme() Group by the organisme column
 * @method CommonEnchereOffreReferenceQuery groupByIdenchereoffre() Group by the idEnchereOffre column
 * @method CommonEnchereOffreReferenceQuery groupByIdencherereference() Group by the idEnchereReference column
 * @method CommonEnchereOffreReferenceQuery groupByValeur() Group by the valeur column
 *
 * @method CommonEnchereOffreReferenceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonEnchereOffreReferenceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonEnchereOffreReferenceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonEnchereOffreReferenceQuery leftJoinCommonEnchereOffreRelatedByIdenchereoffreOrganisme($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonEnchereOffreRelatedByIdenchereoffreOrganisme relation
 * @method CommonEnchereOffreReferenceQuery rightJoinCommonEnchereOffreRelatedByIdenchereoffreOrganisme($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonEnchereOffreRelatedByIdenchereoffreOrganisme relation
 * @method CommonEnchereOffreReferenceQuery innerJoinCommonEnchereOffreRelatedByIdenchereoffreOrganisme($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonEnchereOffreRelatedByIdenchereoffreOrganisme relation
 *
 * @method CommonEnchereOffreReferenceQuery leftJoinCommonEnchereOffreRelatedByIdenchereoffre($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonEnchereOffreRelatedByIdenchereoffre relation
 * @method CommonEnchereOffreReferenceQuery rightJoinCommonEnchereOffreRelatedByIdenchereoffre($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonEnchereOffreRelatedByIdenchereoffre relation
 * @method CommonEnchereOffreReferenceQuery innerJoinCommonEnchereOffreRelatedByIdenchereoffre($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonEnchereOffreRelatedByIdenchereoffre relation
 *
 * @method CommonEnchereOffreReferenceQuery leftJoinCommonEnchereReferenceRelatedByIdencherereferenceOrganisme($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonEnchereReferenceRelatedByIdencherereferenceOrganisme relation
 * @method CommonEnchereOffreReferenceQuery rightJoinCommonEnchereReferenceRelatedByIdencherereferenceOrganisme($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonEnchereReferenceRelatedByIdencherereferenceOrganisme relation
 * @method CommonEnchereOffreReferenceQuery innerJoinCommonEnchereReferenceRelatedByIdencherereferenceOrganisme($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonEnchereReferenceRelatedByIdencherereferenceOrganisme relation
 *
 * @method CommonEnchereOffreReferenceQuery leftJoinCommonEnchereReferenceRelatedByIdencherereference($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonEnchereReferenceRelatedByIdencherereference relation
 * @method CommonEnchereOffreReferenceQuery rightJoinCommonEnchereReferenceRelatedByIdencherereference($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonEnchereReferenceRelatedByIdencherereference relation
 * @method CommonEnchereOffreReferenceQuery innerJoinCommonEnchereReferenceRelatedByIdencherereference($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonEnchereReferenceRelatedByIdencherereference relation
 *
 * @method CommonEnchereOffreReference findOne(PropelPDO $con = null) Return the first CommonEnchereOffreReference matching the query
 * @method CommonEnchereOffreReference findOneOrCreate(PropelPDO $con = null) Return the first CommonEnchereOffreReference matching the query, or a new CommonEnchereOffreReference object populated from the query conditions when no match is found
 *
 * @method CommonEnchereOffreReference findOneById(int $id) Return the first CommonEnchereOffreReference filtered by the id column
 * @method CommonEnchereOffreReference findOneByOrganisme(string $organisme) Return the first CommonEnchereOffreReference filtered by the organisme column
 * @method CommonEnchereOffreReference findOneByIdenchereoffre(int $idEnchereOffre) Return the first CommonEnchereOffreReference filtered by the idEnchereOffre column
 * @method CommonEnchereOffreReference findOneByIdencherereference(int $idEnchereReference) Return the first CommonEnchereOffreReference filtered by the idEnchereReference column
 * @method CommonEnchereOffreReference findOneByValeur(double $valeur) Return the first CommonEnchereOffreReference filtered by the valeur column
 *
 * @method array findById(int $id) Return CommonEnchereOffreReference objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonEnchereOffreReference objects filtered by the organisme column
 * @method array findByIdenchereoffre(int $idEnchereOffre) Return CommonEnchereOffreReference objects filtered by the idEnchereOffre column
 * @method array findByIdencherereference(int $idEnchereReference) Return CommonEnchereOffreReference objects filtered by the idEnchereReference column
 * @method array findByValeur(double $valeur) Return CommonEnchereOffreReference objects filtered by the valeur column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonEnchereOffreReferenceQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonEnchereOffreReferenceQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonEnchereOffreReference', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonEnchereOffreReferenceQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonEnchereOffreReferenceQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonEnchereOffreReferenceQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonEnchereOffreReferenceQuery) {
            return $criteria;
        }
        $query = new CommonEnchereOffreReferenceQuery();
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
     * @return   CommonEnchereOffreReference|CommonEnchereOffreReference[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonEnchereOffreReferencePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonEnchereOffreReferencePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonEnchereOffreReference A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `idEnchereOffre`, `idEnchereReference`, `valeur` FROM `EnchereOffreReference` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonEnchereOffreReference();
            $obj->hydrate($row);
            CommonEnchereOffreReferencePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonEnchereOffreReference|CommonEnchereOffreReference[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonEnchereOffreReference[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonEnchereOffreReferenceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonEnchereOffreReferencePeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonEnchereOffreReferencePeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonEnchereOffreReferenceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonEnchereOffreReferencePeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonEnchereOffreReferencePeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonEnchereOffreReferenceQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonEnchereOffreReferencePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonEnchereOffreReferencePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnchereOffreReferencePeer::ID, $id, $comparison);
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
     * @return CommonEnchereOffreReferenceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEnchereOffreReferencePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the idEnchereOffre column
     *
     * Example usage:
     * <code>
     * $query->filterByIdenchereoffre(1234); // WHERE idEnchereOffre = 1234
     * $query->filterByIdenchereoffre(array(12, 34)); // WHERE idEnchereOffre IN (12, 34)
     * $query->filterByIdenchereoffre(array('min' => 12)); // WHERE idEnchereOffre >= 12
     * $query->filterByIdenchereoffre(array('max' => 12)); // WHERE idEnchereOffre <= 12
     * </code>
     *
     * @see       filterByCommonEnchereOffreRelatedByIdenchereoffreOrganisme()
     *
     * @see       filterByCommonEnchereOffreRelatedByIdenchereoffre()
     *
     * @param     mixed $idenchereoffre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnchereOffreReferenceQuery The current query, for fluid interface
     */
    public function filterByIdenchereoffre($idenchereoffre = null, $comparison = null)
    {
        if (is_array($idenchereoffre)) {
            $useMinMax = false;
            if (isset($idenchereoffre['min'])) {
                $this->addUsingAlias(CommonEnchereOffreReferencePeer::IDENCHEREOFFRE, $idenchereoffre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idenchereoffre['max'])) {
                $this->addUsingAlias(CommonEnchereOffreReferencePeer::IDENCHEREOFFRE, $idenchereoffre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnchereOffreReferencePeer::IDENCHEREOFFRE, $idenchereoffre, $comparison);
    }

    /**
     * Filter the query on the idEnchereReference column
     *
     * Example usage:
     * <code>
     * $query->filterByIdencherereference(1234); // WHERE idEnchereReference = 1234
     * $query->filterByIdencherereference(array(12, 34)); // WHERE idEnchereReference IN (12, 34)
     * $query->filterByIdencherereference(array('min' => 12)); // WHERE idEnchereReference >= 12
     * $query->filterByIdencherereference(array('max' => 12)); // WHERE idEnchereReference <= 12
     * </code>
     *
     * @see       filterByCommonEnchereReferenceRelatedByIdencherereferenceOrganisme()
     *
     * @see       filterByCommonEnchereReferenceRelatedByIdencherereference()
     *
     * @param     mixed $idencherereference The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnchereOffreReferenceQuery The current query, for fluid interface
     */
    public function filterByIdencherereference($idencherereference = null, $comparison = null)
    {
        if (is_array($idencherereference)) {
            $useMinMax = false;
            if (isset($idencherereference['min'])) {
                $this->addUsingAlias(CommonEnchereOffreReferencePeer::IDENCHEREREFERENCE, $idencherereference['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idencherereference['max'])) {
                $this->addUsingAlias(CommonEnchereOffreReferencePeer::IDENCHEREREFERENCE, $idencherereference['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnchereOffreReferencePeer::IDENCHEREREFERENCE, $idencherereference, $comparison);
    }

    /**
     * Filter the query on the valeur column
     *
     * Example usage:
     * <code>
     * $query->filterByValeur(1234); // WHERE valeur = 1234
     * $query->filterByValeur(array(12, 34)); // WHERE valeur IN (12, 34)
     * $query->filterByValeur(array('min' => 12)); // WHERE valeur >= 12
     * $query->filterByValeur(array('max' => 12)); // WHERE valeur <= 12
     * </code>
     *
     * @param     mixed $valeur The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnchereOffreReferenceQuery The current query, for fluid interface
     */
    public function filterByValeur($valeur = null, $comparison = null)
    {
        if (is_array($valeur)) {
            $useMinMax = false;
            if (isset($valeur['min'])) {
                $this->addUsingAlias(CommonEnchereOffreReferencePeer::VALEUR, $valeur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($valeur['max'])) {
                $this->addUsingAlias(CommonEnchereOffreReferencePeer::VALEUR, $valeur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnchereOffreReferencePeer::VALEUR, $valeur, $comparison);
    }

    /**
     * Filter the query by a related CommonEnchereOffre object
     *
     * @param   CommonEnchereOffre $commonEnchereOffre The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonEnchereOffreReferenceQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonEnchereOffreRelatedByIdenchereoffreOrganisme($commonEnchereOffre, $comparison = null)
    {
        if ($commonEnchereOffre instanceof CommonEnchereOffre) {
            return $this
                ->addUsingAlias(CommonEnchereOffreReferencePeer::IDENCHEREOFFRE, $commonEnchereOffre->getId(), $comparison)
                ->addUsingAlias(CommonEnchereOffreReferencePeer::ORGANISME, $commonEnchereOffre->getOrganisme(), $comparison);
        } else {
            throw new PropelException('filterByCommonEnchereOffreRelatedByIdenchereoffreOrganisme() only accepts arguments of type CommonEnchereOffre');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonEnchereOffreRelatedByIdenchereoffreOrganisme relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonEnchereOffreReferenceQuery The current query, for fluid interface
     */
    public function joinCommonEnchereOffreRelatedByIdenchereoffreOrganisme($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonEnchereOffreRelatedByIdenchereoffreOrganisme');

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
            $this->addJoinObject($join, 'CommonEnchereOffreRelatedByIdenchereoffreOrganisme');
        }

        return $this;
    }

    /**
     * Use the CommonEnchereOffreRelatedByIdenchereoffreOrganisme relation CommonEnchereOffre object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonEnchereOffreQuery A secondary query class using the current class as primary query
     */
    public function useCommonEnchereOffreRelatedByIdenchereoffreOrganismeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonEnchereOffreRelatedByIdenchereoffreOrganisme($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonEnchereOffreRelatedByIdenchereoffreOrganisme', 'CommonEnchereOffreQuery');
    }

    /**
     * Filter the query by a related CommonEnchereOffre object
     *
     * @param   CommonEnchereOffre|PropelObjectCollection $commonEnchereOffre The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonEnchereOffreReferenceQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonEnchereOffreRelatedByIdenchereoffre($commonEnchereOffre, $comparison = null)
    {
        if ($commonEnchereOffre instanceof CommonEnchereOffre) {
            return $this
                ->addUsingAlias(CommonEnchereOffreReferencePeer::IDENCHEREOFFRE, $commonEnchereOffre->getId(), $comparison);
        } elseif ($commonEnchereOffre instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonEnchereOffreReferencePeer::IDENCHEREOFFRE, $commonEnchereOffre->toKeyValue('Id', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonEnchereOffreRelatedByIdenchereoffre() only accepts arguments of type CommonEnchereOffre or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonEnchereOffreRelatedByIdenchereoffre relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonEnchereOffreReferenceQuery The current query, for fluid interface
     */
    public function joinCommonEnchereOffreRelatedByIdenchereoffre($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonEnchereOffreRelatedByIdenchereoffre');

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
            $this->addJoinObject($join, 'CommonEnchereOffreRelatedByIdenchereoffre');
        }

        return $this;
    }

    /**
     * Use the CommonEnchereOffreRelatedByIdenchereoffre relation CommonEnchereOffre object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonEnchereOffreQuery A secondary query class using the current class as primary query
     */
    public function useCommonEnchereOffreRelatedByIdenchereoffreQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonEnchereOffreRelatedByIdenchereoffre($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonEnchereOffreRelatedByIdenchereoffre', 'CommonEnchereOffreQuery');
    }

    /**
     * Filter the query by a related CommonEnchereReference object
     *
     * @param   CommonEnchereReference $commonEnchereReference The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonEnchereOffreReferenceQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonEnchereReferenceRelatedByIdencherereferenceOrganisme($commonEnchereReference, $comparison = null)
    {
        if ($commonEnchereReference instanceof CommonEnchereReference) {
            return $this
                ->addUsingAlias(CommonEnchereOffreReferencePeer::IDENCHEREREFERENCE, $commonEnchereReference->getId(), $comparison)
                ->addUsingAlias(CommonEnchereOffreReferencePeer::ORGANISME, $commonEnchereReference->getOrganisme(), $comparison);
        } else {
            throw new PropelException('filterByCommonEnchereReferenceRelatedByIdencherereferenceOrganisme() only accepts arguments of type CommonEnchereReference');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonEnchereReferenceRelatedByIdencherereferenceOrganisme relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonEnchereOffreReferenceQuery The current query, for fluid interface
     */
    public function joinCommonEnchereReferenceRelatedByIdencherereferenceOrganisme($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonEnchereReferenceRelatedByIdencherereferenceOrganisme');

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
            $this->addJoinObject($join, 'CommonEnchereReferenceRelatedByIdencherereferenceOrganisme');
        }

        return $this;
    }

    /**
     * Use the CommonEnchereReferenceRelatedByIdencherereferenceOrganisme relation CommonEnchereReference object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonEnchereReferenceQuery A secondary query class using the current class as primary query
     */
    public function useCommonEnchereReferenceRelatedByIdencherereferenceOrganismeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonEnchereReferenceRelatedByIdencherereferenceOrganisme($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonEnchereReferenceRelatedByIdencherereferenceOrganisme', 'CommonEnchereReferenceQuery');
    }

    /**
     * Filter the query by a related CommonEnchereReference object
     *
     * @param   CommonEnchereReference|PropelObjectCollection $commonEnchereReference The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonEnchereOffreReferenceQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonEnchereReferenceRelatedByIdencherereference($commonEnchereReference, $comparison = null)
    {
        if ($commonEnchereReference instanceof CommonEnchereReference) {
            return $this
                ->addUsingAlias(CommonEnchereOffreReferencePeer::IDENCHEREREFERENCE, $commonEnchereReference->getId(), $comparison);
        } elseif ($commonEnchereReference instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonEnchereOffreReferencePeer::IDENCHEREREFERENCE, $commonEnchereReference->toKeyValue('Id', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonEnchereReferenceRelatedByIdencherereference() only accepts arguments of type CommonEnchereReference or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonEnchereReferenceRelatedByIdencherereference relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonEnchereOffreReferenceQuery The current query, for fluid interface
     */
    public function joinCommonEnchereReferenceRelatedByIdencherereference($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonEnchereReferenceRelatedByIdencherereference');

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
            $this->addJoinObject($join, 'CommonEnchereReferenceRelatedByIdencherereference');
        }

        return $this;
    }

    /**
     * Use the CommonEnchereReferenceRelatedByIdencherereference relation CommonEnchereReference object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonEnchereReferenceQuery A secondary query class using the current class as primary query
     */
    public function useCommonEnchereReferenceRelatedByIdencherereferenceQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonEnchereReferenceRelatedByIdencherereference($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonEnchereReferenceRelatedByIdencherereference', 'CommonEnchereReferenceQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonEnchereOffreReference $commonEnchereOffreReference Object to remove from the list of results
     *
     * @return CommonEnchereOffreReferenceQuery The current query, for fluid interface
     */
    public function prune($commonEnchereOffreReference = null)
    {
        if ($commonEnchereOffreReference) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonEnchereOffreReferencePeer::ID), $commonEnchereOffreReference->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonEnchereOffreReferencePeer::ORGANISME), $commonEnchereOffreReference->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
