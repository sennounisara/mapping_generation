<?php


/**
 * Base class that represents a query for the 't_tranche' table.
 *
 * 
 *
 * @method CommonTTrancheQuery orderByIdTranche($order = Criteria::ASC) Order by the id_tranche column
 * @method CommonTTrancheQuery orderByIdFormePrix($order = Criteria::ASC) Order by the id_forme_prix column
 * @method CommonTTrancheQuery orderByIdDonneeComplementaire($order = Criteria::ASC) Order by the id_donnee_complementaire column
 * @method CommonTTrancheQuery orderByNatureTranche($order = Criteria::ASC) Order by the nature_tranche column
 * @method CommonTTrancheQuery orderByCodeTranche($order = Criteria::ASC) Order by the code_tranche column
 * @method CommonTTrancheQuery orderByIntituleTranche($order = Criteria::ASC) Order by the intitule_tranche column
 *
 * @method CommonTTrancheQuery groupByIdTranche() Group by the id_tranche column
 * @method CommonTTrancheQuery groupByIdFormePrix() Group by the id_forme_prix column
 * @method CommonTTrancheQuery groupByIdDonneeComplementaire() Group by the id_donnee_complementaire column
 * @method CommonTTrancheQuery groupByNatureTranche() Group by the nature_tranche column
 * @method CommonTTrancheQuery groupByCodeTranche() Group by the code_tranche column
 * @method CommonTTrancheQuery groupByIntituleTranche() Group by the intitule_tranche column
 *
 * @method CommonTTrancheQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTTrancheQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTTrancheQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTTrancheQuery leftJoinCommonTDonneeComplementaire($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTDonneeComplementaire relation
 * @method CommonTTrancheQuery rightJoinCommonTDonneeComplementaire($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTDonneeComplementaire relation
 * @method CommonTTrancheQuery innerJoinCommonTDonneeComplementaire($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTDonneeComplementaire relation
 *
 * @method CommonTTrancheQuery leftJoinCommonTFormePrix($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTFormePrix relation
 * @method CommonTTrancheQuery rightJoinCommonTFormePrix($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTFormePrix relation
 * @method CommonTTrancheQuery innerJoinCommonTFormePrix($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTFormePrix relation
 *
 * @method CommonTTrancheQuery leftJoinCommonTLotTechniqueHasTranche($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTLotTechniqueHasTranche relation
 * @method CommonTTrancheQuery rightJoinCommonTLotTechniqueHasTranche($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTLotTechniqueHasTranche relation
 * @method CommonTTrancheQuery innerJoinCommonTLotTechniqueHasTranche($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTLotTechniqueHasTranche relation
 *
 * @method CommonTTranche findOne(PropelPDO $con = null) Return the first CommonTTranche matching the query
 * @method CommonTTranche findOneOrCreate(PropelPDO $con = null) Return the first CommonTTranche matching the query, or a new CommonTTranche object populated from the query conditions when no match is found
 *
 * @method CommonTTranche findOneByIdFormePrix(int $id_forme_prix) Return the first CommonTTranche filtered by the id_forme_prix column
 * @method CommonTTranche findOneByIdDonneeComplementaire(int $id_donnee_complementaire) Return the first CommonTTranche filtered by the id_donnee_complementaire column
 * @method CommonTTranche findOneByNatureTranche(string $nature_tranche) Return the first CommonTTranche filtered by the nature_tranche column
 * @method CommonTTranche findOneByCodeTranche(int $code_tranche) Return the first CommonTTranche filtered by the code_tranche column
 * @method CommonTTranche findOneByIntituleTranche(string $intitule_tranche) Return the first CommonTTranche filtered by the intitule_tranche column
 *
 * @method array findByIdTranche(int $id_tranche) Return CommonTTranche objects filtered by the id_tranche column
 * @method array findByIdFormePrix(int $id_forme_prix) Return CommonTTranche objects filtered by the id_forme_prix column
 * @method array findByIdDonneeComplementaire(int $id_donnee_complementaire) Return CommonTTranche objects filtered by the id_donnee_complementaire column
 * @method array findByNatureTranche(string $nature_tranche) Return CommonTTranche objects filtered by the nature_tranche column
 * @method array findByCodeTranche(int $code_tranche) Return CommonTTranche objects filtered by the code_tranche column
 * @method array findByIntituleTranche(string $intitule_tranche) Return CommonTTranche objects filtered by the intitule_tranche column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTTrancheQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTTrancheQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTTranche', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTTrancheQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTTrancheQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTTrancheQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTTrancheQuery) {
            return $criteria;
        }
        $query = new CommonTTrancheQuery();
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
     * @return   CommonTTranche|CommonTTranche[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTTranchePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTTranchePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTTranche A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdTranche($key, $con = null)
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
     * @return                 CommonTTranche A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_tranche`, `id_forme_prix`, `id_donnee_complementaire`, `nature_tranche`, `code_tranche`, `intitule_tranche` FROM `t_tranche` WHERE `id_tranche` = :p0';
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
            $obj = new CommonTTranche();
            $obj->hydrate($row);
            CommonTTranchePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonTTranche|CommonTTranche[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTTranche[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTTrancheQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonTTranchePeer::ID_TRANCHE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTTrancheQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonTTranchePeer::ID_TRANCHE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_tranche column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTranche(1234); // WHERE id_tranche = 1234
     * $query->filterByIdTranche(array(12, 34)); // WHERE id_tranche IN (12, 34)
     * $query->filterByIdTranche(array('min' => 12)); // WHERE id_tranche >= 12
     * $query->filterByIdTranche(array('max' => 12)); // WHERE id_tranche <= 12
     * </code>
     *
     * @param     mixed $idTranche The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTTrancheQuery The current query, for fluid interface
     */
    public function filterByIdTranche($idTranche = null, $comparison = null)
    {
        if (is_array($idTranche)) {
            $useMinMax = false;
            if (isset($idTranche['min'])) {
                $this->addUsingAlias(CommonTTranchePeer::ID_TRANCHE, $idTranche['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTranche['max'])) {
                $this->addUsingAlias(CommonTTranchePeer::ID_TRANCHE, $idTranche['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTTranchePeer::ID_TRANCHE, $idTranche, $comparison);
    }

    /**
     * Filter the query on the id_forme_prix column
     *
     * Example usage:
     * <code>
     * $query->filterByIdFormePrix(1234); // WHERE id_forme_prix = 1234
     * $query->filterByIdFormePrix(array(12, 34)); // WHERE id_forme_prix IN (12, 34)
     * $query->filterByIdFormePrix(array('min' => 12)); // WHERE id_forme_prix >= 12
     * $query->filterByIdFormePrix(array('max' => 12)); // WHERE id_forme_prix <= 12
     * </code>
     *
     * @see       filterByCommonTFormePrix()
     *
     * @param     mixed $idFormePrix The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTTrancheQuery The current query, for fluid interface
     */
    public function filterByIdFormePrix($idFormePrix = null, $comparison = null)
    {
        if (is_array($idFormePrix)) {
            $useMinMax = false;
            if (isset($idFormePrix['min'])) {
                $this->addUsingAlias(CommonTTranchePeer::ID_FORME_PRIX, $idFormePrix['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idFormePrix['max'])) {
                $this->addUsingAlias(CommonTTranchePeer::ID_FORME_PRIX, $idFormePrix['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTTranchePeer::ID_FORME_PRIX, $idFormePrix, $comparison);
    }

    /**
     * Filter the query on the id_donnee_complementaire column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDonneeComplementaire(1234); // WHERE id_donnee_complementaire = 1234
     * $query->filterByIdDonneeComplementaire(array(12, 34)); // WHERE id_donnee_complementaire IN (12, 34)
     * $query->filterByIdDonneeComplementaire(array('min' => 12)); // WHERE id_donnee_complementaire >= 12
     * $query->filterByIdDonneeComplementaire(array('max' => 12)); // WHERE id_donnee_complementaire <= 12
     * </code>
     *
     * @see       filterByCommonTDonneeComplementaire()
     *
     * @param     mixed $idDonneeComplementaire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTTrancheQuery The current query, for fluid interface
     */
    public function filterByIdDonneeComplementaire($idDonneeComplementaire = null, $comparison = null)
    {
        if (is_array($idDonneeComplementaire)) {
            $useMinMax = false;
            if (isset($idDonneeComplementaire['min'])) {
                $this->addUsingAlias(CommonTTranchePeer::ID_DONNEE_COMPLEMENTAIRE, $idDonneeComplementaire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDonneeComplementaire['max'])) {
                $this->addUsingAlias(CommonTTranchePeer::ID_DONNEE_COMPLEMENTAIRE, $idDonneeComplementaire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTTranchePeer::ID_DONNEE_COMPLEMENTAIRE, $idDonneeComplementaire, $comparison);
    }

    /**
     * Filter the query on the nature_tranche column
     *
     * Example usage:
     * <code>
     * $query->filterByNatureTranche('fooValue');   // WHERE nature_tranche = 'fooValue'
     * $query->filterByNatureTranche('%fooValue%'); // WHERE nature_tranche LIKE '%fooValue%'
     * </code>
     *
     * @param     string $natureTranche The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTTrancheQuery The current query, for fluid interface
     */
    public function filterByNatureTranche($natureTranche = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($natureTranche)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $natureTranche)) {
                $natureTranche = str_replace('*', '%', $natureTranche);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTTranchePeer::NATURE_TRANCHE, $natureTranche, $comparison);
    }

    /**
     * Filter the query on the code_tranche column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeTranche(1234); // WHERE code_tranche = 1234
     * $query->filterByCodeTranche(array(12, 34)); // WHERE code_tranche IN (12, 34)
     * $query->filterByCodeTranche(array('min' => 12)); // WHERE code_tranche >= 12
     * $query->filterByCodeTranche(array('max' => 12)); // WHERE code_tranche <= 12
     * </code>
     *
     * @param     mixed $codeTranche The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTTrancheQuery The current query, for fluid interface
     */
    public function filterByCodeTranche($codeTranche = null, $comparison = null)
    {
        if (is_array($codeTranche)) {
            $useMinMax = false;
            if (isset($codeTranche['min'])) {
                $this->addUsingAlias(CommonTTranchePeer::CODE_TRANCHE, $codeTranche['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($codeTranche['max'])) {
                $this->addUsingAlias(CommonTTranchePeer::CODE_TRANCHE, $codeTranche['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTTranchePeer::CODE_TRANCHE, $codeTranche, $comparison);
    }

    /**
     * Filter the query on the intitule_tranche column
     *
     * Example usage:
     * <code>
     * $query->filterByIntituleTranche('fooValue');   // WHERE intitule_tranche = 'fooValue'
     * $query->filterByIntituleTranche('%fooValue%'); // WHERE intitule_tranche LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intituleTranche The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTTrancheQuery The current query, for fluid interface
     */
    public function filterByIntituleTranche($intituleTranche = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intituleTranche)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $intituleTranche)) {
                $intituleTranche = str_replace('*', '%', $intituleTranche);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTTranchePeer::INTITULE_TRANCHE, $intituleTranche, $comparison);
    }

    /**
     * Filter the query by a related CommonTDonneeComplementaire object
     *
     * @param   CommonTDonneeComplementaire|PropelObjectCollection $commonTDonneeComplementaire The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTTrancheQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTDonneeComplementaire($commonTDonneeComplementaire, $comparison = null)
    {
        if ($commonTDonneeComplementaire instanceof CommonTDonneeComplementaire) {
            return $this
                ->addUsingAlias(CommonTTranchePeer::ID_DONNEE_COMPLEMENTAIRE, $commonTDonneeComplementaire->getIdDonneeComplementaire(), $comparison);
        } elseif ($commonTDonneeComplementaire instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonTTranchePeer::ID_DONNEE_COMPLEMENTAIRE, $commonTDonneeComplementaire->toKeyValue('PrimaryKey', 'IdDonneeComplementaire'), $comparison);
        } else {
            throw new PropelException('filterByCommonTDonneeComplementaire() only accepts arguments of type CommonTDonneeComplementaire or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTDonneeComplementaire relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTTrancheQuery The current query, for fluid interface
     */
    public function joinCommonTDonneeComplementaire($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTDonneeComplementaire');

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
            $this->addJoinObject($join, 'CommonTDonneeComplementaire');
        }

        return $this;
    }

    /**
     * Use the CommonTDonneeComplementaire relation CommonTDonneeComplementaire object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTDonneeComplementaireQuery A secondary query class using the current class as primary query
     */
    public function useCommonTDonneeComplementaireQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonTDonneeComplementaire($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTDonneeComplementaire', 'CommonTDonneeComplementaireQuery');
    }

    /**
     * Filter the query by a related CommonTFormePrix object
     *
     * @param   CommonTFormePrix|PropelObjectCollection $commonTFormePrix The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTTrancheQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTFormePrix($commonTFormePrix, $comparison = null)
    {
        if ($commonTFormePrix instanceof CommonTFormePrix) {
            return $this
                ->addUsingAlias(CommonTTranchePeer::ID_FORME_PRIX, $commonTFormePrix->getIdFormePrix(), $comparison);
        } elseif ($commonTFormePrix instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonTTranchePeer::ID_FORME_PRIX, $commonTFormePrix->toKeyValue('PrimaryKey', 'IdFormePrix'), $comparison);
        } else {
            throw new PropelException('filterByCommonTFormePrix() only accepts arguments of type CommonTFormePrix or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTFormePrix relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTTrancheQuery The current query, for fluid interface
     */
    public function joinCommonTFormePrix($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTFormePrix');

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
            $this->addJoinObject($join, 'CommonTFormePrix');
        }

        return $this;
    }

    /**
     * Use the CommonTFormePrix relation CommonTFormePrix object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTFormePrixQuery A secondary query class using the current class as primary query
     */
    public function useCommonTFormePrixQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonTFormePrix($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTFormePrix', 'CommonTFormePrixQuery');
    }

    /**
     * Filter the query by a related CommonTLotTechniqueHasTranche object
     *
     * @param   CommonTLotTechniqueHasTranche|PropelObjectCollection $commonTLotTechniqueHasTranche  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTTrancheQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTLotTechniqueHasTranche($commonTLotTechniqueHasTranche, $comparison = null)
    {
        if ($commonTLotTechniqueHasTranche instanceof CommonTLotTechniqueHasTranche) {
            return $this
                ->addUsingAlias(CommonTTranchePeer::ID_TRANCHE, $commonTLotTechniqueHasTranche->getIdTranche(), $comparison);
        } elseif ($commonTLotTechniqueHasTranche instanceof PropelObjectCollection) {
            return $this
                ->useCommonTLotTechniqueHasTrancheQuery()
                ->filterByPrimaryKeys($commonTLotTechniqueHasTranche->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonTLotTechniqueHasTranche() only accepts arguments of type CommonTLotTechniqueHasTranche or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTLotTechniqueHasTranche relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTTrancheQuery The current query, for fluid interface
     */
    public function joinCommonTLotTechniqueHasTranche($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTLotTechniqueHasTranche');

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
            $this->addJoinObject($join, 'CommonTLotTechniqueHasTranche');
        }

        return $this;
    }

    /**
     * Use the CommonTLotTechniqueHasTranche relation CommonTLotTechniqueHasTranche object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTLotTechniqueHasTrancheQuery A secondary query class using the current class as primary query
     */
    public function useCommonTLotTechniqueHasTrancheQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonTLotTechniqueHasTranche($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTLotTechniqueHasTranche', 'CommonTLotTechniqueHasTrancheQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTTranche $commonTTranche Object to remove from the list of results
     *
     * @return CommonTTrancheQuery The current query, for fluid interface
     */
    public function prune($commonTTranche = null)
    {
        if ($commonTTranche) {
            $this->addUsingAlias(CommonTTranchePeer::ID_TRANCHE, $commonTTranche->getIdTranche(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
