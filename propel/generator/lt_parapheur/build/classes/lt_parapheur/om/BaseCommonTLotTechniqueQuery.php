<?php


/**
 * Base class that represents a query for the 't_lot_technique' table.
 *
 * 
 *
 * @method CommonTLotTechniqueQuery orderByIdLotTechnique($order = Criteria::ASC) Order by the id_lot_technique column
 * @method CommonTLotTechniqueQuery orderByIdDonneeComplementaire($order = Criteria::ASC) Order by the id_donnee_complementaire column
 * @method CommonTLotTechniqueQuery orderByNumeroLot($order = Criteria::ASC) Order by the numero_lot column
 * @method CommonTLotTechniqueQuery orderByIntituleLot($order = Criteria::ASC) Order by the intitule_lot column
 * @method CommonTLotTechniqueQuery orderByPrincipal($order = Criteria::ASC) Order by the principal column
 *
 * @method CommonTLotTechniqueQuery groupByIdLotTechnique() Group by the id_lot_technique column
 * @method CommonTLotTechniqueQuery groupByIdDonneeComplementaire() Group by the id_donnee_complementaire column
 * @method CommonTLotTechniqueQuery groupByNumeroLot() Group by the numero_lot column
 * @method CommonTLotTechniqueQuery groupByIntituleLot() Group by the intitule_lot column
 * @method CommonTLotTechniqueQuery groupByPrincipal() Group by the principal column
 *
 * @method CommonTLotTechniqueQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTLotTechniqueQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTLotTechniqueQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTLotTechniqueQuery leftJoinCommonTDonneeComplementaire($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTDonneeComplementaire relation
 * @method CommonTLotTechniqueQuery rightJoinCommonTDonneeComplementaire($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTDonneeComplementaire relation
 * @method CommonTLotTechniqueQuery innerJoinCommonTDonneeComplementaire($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTDonneeComplementaire relation
 *
 * @method CommonTLotTechniqueQuery leftJoinCommonTLotTechniqueHasTranche($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTLotTechniqueHasTranche relation
 * @method CommonTLotTechniqueQuery rightJoinCommonTLotTechniqueHasTranche($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTLotTechniqueHasTranche relation
 * @method CommonTLotTechniqueQuery innerJoinCommonTLotTechniqueHasTranche($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTLotTechniqueHasTranche relation
 *
 * @method CommonTLotTechnique findOne(PropelPDO $con = null) Return the first CommonTLotTechnique matching the query
 * @method CommonTLotTechnique findOneOrCreate(PropelPDO $con = null) Return the first CommonTLotTechnique matching the query, or a new CommonTLotTechnique object populated from the query conditions when no match is found
 *
 * @method CommonTLotTechnique findOneByIdDonneeComplementaire(int $id_donnee_complementaire) Return the first CommonTLotTechnique filtered by the id_donnee_complementaire column
 * @method CommonTLotTechnique findOneByNumeroLot(string $numero_lot) Return the first CommonTLotTechnique filtered by the numero_lot column
 * @method CommonTLotTechnique findOneByIntituleLot(string $intitule_lot) Return the first CommonTLotTechnique filtered by the intitule_lot column
 * @method CommonTLotTechnique findOneByPrincipal(boolean $principal) Return the first CommonTLotTechnique filtered by the principal column
 *
 * @method array findByIdLotTechnique(int $id_lot_technique) Return CommonTLotTechnique objects filtered by the id_lot_technique column
 * @method array findByIdDonneeComplementaire(int $id_donnee_complementaire) Return CommonTLotTechnique objects filtered by the id_donnee_complementaire column
 * @method array findByNumeroLot(string $numero_lot) Return CommonTLotTechnique objects filtered by the numero_lot column
 * @method array findByIntituleLot(string $intitule_lot) Return CommonTLotTechnique objects filtered by the intitule_lot column
 * @method array findByPrincipal(boolean $principal) Return CommonTLotTechnique objects filtered by the principal column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTLotTechniqueQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTLotTechniqueQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTLotTechnique', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTLotTechniqueQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTLotTechniqueQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTLotTechniqueQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTLotTechniqueQuery) {
            return $criteria;
        }
        $query = new CommonTLotTechniqueQuery();
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
     * @return   CommonTLotTechnique|CommonTLotTechnique[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTLotTechniquePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTLotTechniquePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTLotTechnique A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdLotTechnique($key, $con = null)
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
     * @return                 CommonTLotTechnique A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_lot_technique`, `id_donnee_complementaire`, `numero_lot`, `intitule_lot`, `principal` FROM `t_lot_technique` WHERE `id_lot_technique` = :p0';
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
            $obj = new CommonTLotTechnique();
            $obj->hydrate($row);
            CommonTLotTechniquePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonTLotTechnique|CommonTLotTechnique[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTLotTechnique[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTLotTechniqueQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonTLotTechniquePeer::ID_LOT_TECHNIQUE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTLotTechniqueQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonTLotTechniquePeer::ID_LOT_TECHNIQUE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_lot_technique column
     *
     * Example usage:
     * <code>
     * $query->filterByIdLotTechnique(1234); // WHERE id_lot_technique = 1234
     * $query->filterByIdLotTechnique(array(12, 34)); // WHERE id_lot_technique IN (12, 34)
     * $query->filterByIdLotTechnique(array('min' => 12)); // WHERE id_lot_technique >= 12
     * $query->filterByIdLotTechnique(array('max' => 12)); // WHERE id_lot_technique <= 12
     * </code>
     *
     * @param     mixed $idLotTechnique The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTLotTechniqueQuery The current query, for fluid interface
     */
    public function filterByIdLotTechnique($idLotTechnique = null, $comparison = null)
    {
        if (is_array($idLotTechnique)) {
            $useMinMax = false;
            if (isset($idLotTechnique['min'])) {
                $this->addUsingAlias(CommonTLotTechniquePeer::ID_LOT_TECHNIQUE, $idLotTechnique['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idLotTechnique['max'])) {
                $this->addUsingAlias(CommonTLotTechniquePeer::ID_LOT_TECHNIQUE, $idLotTechnique['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTLotTechniquePeer::ID_LOT_TECHNIQUE, $idLotTechnique, $comparison);
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
     * @return CommonTLotTechniqueQuery The current query, for fluid interface
     */
    public function filterByIdDonneeComplementaire($idDonneeComplementaire = null, $comparison = null)
    {
        if (is_array($idDonneeComplementaire)) {
            $useMinMax = false;
            if (isset($idDonneeComplementaire['min'])) {
                $this->addUsingAlias(CommonTLotTechniquePeer::ID_DONNEE_COMPLEMENTAIRE, $idDonneeComplementaire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDonneeComplementaire['max'])) {
                $this->addUsingAlias(CommonTLotTechniquePeer::ID_DONNEE_COMPLEMENTAIRE, $idDonneeComplementaire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTLotTechniquePeer::ID_DONNEE_COMPLEMENTAIRE, $idDonneeComplementaire, $comparison);
    }

    /**
     * Filter the query on the numero_lot column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeroLot('fooValue');   // WHERE numero_lot = 'fooValue'
     * $query->filterByNumeroLot('%fooValue%'); // WHERE numero_lot LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numeroLot The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTLotTechniqueQuery The current query, for fluid interface
     */
    public function filterByNumeroLot($numeroLot = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numeroLot)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numeroLot)) {
                $numeroLot = str_replace('*', '%', $numeroLot);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTLotTechniquePeer::NUMERO_LOT, $numeroLot, $comparison);
    }

    /**
     * Filter the query on the intitule_lot column
     *
     * Example usage:
     * <code>
     * $query->filterByIntituleLot('fooValue');   // WHERE intitule_lot = 'fooValue'
     * $query->filterByIntituleLot('%fooValue%'); // WHERE intitule_lot LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intituleLot The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTLotTechniqueQuery The current query, for fluid interface
     */
    public function filterByIntituleLot($intituleLot = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intituleLot)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $intituleLot)) {
                $intituleLot = str_replace('*', '%', $intituleLot);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTLotTechniquePeer::INTITULE_LOT, $intituleLot, $comparison);
    }

    /**
     * Filter the query on the principal column
     *
     * Example usage:
     * <code>
     * $query->filterByPrincipal(true); // WHERE principal = true
     * $query->filterByPrincipal('yes'); // WHERE principal = true
     * </code>
     *
     * @param     boolean|string $principal The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTLotTechniqueQuery The current query, for fluid interface
     */
    public function filterByPrincipal($principal = null, $comparison = null)
    {
        if (is_string($principal)) {
            $principal = in_array(strtolower($principal), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CommonTLotTechniquePeer::PRINCIPAL, $principal, $comparison);
    }

    /**
     * Filter the query by a related CommonTDonneeComplementaire object
     *
     * @param   CommonTDonneeComplementaire|PropelObjectCollection $commonTDonneeComplementaire The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTLotTechniqueQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTDonneeComplementaire($commonTDonneeComplementaire, $comparison = null)
    {
        if ($commonTDonneeComplementaire instanceof CommonTDonneeComplementaire) {
            return $this
                ->addUsingAlias(CommonTLotTechniquePeer::ID_DONNEE_COMPLEMENTAIRE, $commonTDonneeComplementaire->getIdDonneeComplementaire(), $comparison);
        } elseif ($commonTDonneeComplementaire instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonTLotTechniquePeer::ID_DONNEE_COMPLEMENTAIRE, $commonTDonneeComplementaire->toKeyValue('PrimaryKey', 'IdDonneeComplementaire'), $comparison);
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
     * @return CommonTLotTechniqueQuery The current query, for fluid interface
     */
    public function joinCommonTDonneeComplementaire($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
    public function useCommonTDonneeComplementaireQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonTDonneeComplementaire($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTDonneeComplementaire', 'CommonTDonneeComplementaireQuery');
    }

    /**
     * Filter the query by a related CommonTLotTechniqueHasTranche object
     *
     * @param   CommonTLotTechniqueHasTranche|PropelObjectCollection $commonTLotTechniqueHasTranche  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTLotTechniqueQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTLotTechniqueHasTranche($commonTLotTechniqueHasTranche, $comparison = null)
    {
        if ($commonTLotTechniqueHasTranche instanceof CommonTLotTechniqueHasTranche) {
            return $this
                ->addUsingAlias(CommonTLotTechniquePeer::ID_LOT_TECHNIQUE, $commonTLotTechniqueHasTranche->getIdLotTechnique(), $comparison);
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
     * @return CommonTLotTechniqueQuery The current query, for fluid interface
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
     * @param   CommonTLotTechnique $commonTLotTechnique Object to remove from the list of results
     *
     * @return CommonTLotTechniqueQuery The current query, for fluid interface
     */
    public function prune($commonTLotTechnique = null)
    {
        if ($commonTLotTechnique) {
            $this->addUsingAlias(CommonTLotTechniquePeer::ID_LOT_TECHNIQUE, $commonTLotTechnique->getIdLotTechnique(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
