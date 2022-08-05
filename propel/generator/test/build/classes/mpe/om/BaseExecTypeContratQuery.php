<?php


/**
 * Base class that represents a query for the 'exec_type_contrat' table.
 *
 * 
 *
 * @method ExecTypeContratQuery orderById($order = Criteria::ASC) Order by the id column
 * @method ExecTypeContratQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method ExecTypeContratQuery orderByLibelleFr($order = Criteria::ASC) Order by the libelle_fr column
 * @method ExecTypeContratQuery orderByLibelleAr($order = Criteria::ASC) Order by the libelle_ar column
 * @method ExecTypeContratQuery orderByLibelleEn($order = Criteria::ASC) Order by the libelle_en column
 * @method ExecTypeContratQuery orderByTypeEvenementLiee($order = Criteria::ASC) Order by the type_evenement_liee column
 *
 * @method ExecTypeContratQuery groupById() Group by the id column
 * @method ExecTypeContratQuery groupByLibelle() Group by the libelle column
 * @method ExecTypeContratQuery groupByLibelleFr() Group by the libelle_fr column
 * @method ExecTypeContratQuery groupByLibelleAr() Group by the libelle_ar column
 * @method ExecTypeContratQuery groupByLibelleEn() Group by the libelle_en column
 * @method ExecTypeContratQuery groupByTypeEvenementLiee() Group by the type_evenement_liee column
 *
 * @method ExecTypeContratQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ExecTypeContratQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ExecTypeContratQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ExecTypeContratQuery leftJoinExecConfigurationFormulaireRelatedByIdTypeContrat($relationAlias = null) Adds a LEFT JOIN clause to the query using the ExecConfigurationFormulaireRelatedByIdTypeContrat relation
 * @method ExecTypeContratQuery rightJoinExecConfigurationFormulaireRelatedByIdTypeContrat($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ExecConfigurationFormulaireRelatedByIdTypeContrat relation
 * @method ExecTypeContratQuery innerJoinExecConfigurationFormulaireRelatedByIdTypeContrat($relationAlias = null) Adds a INNER JOIN clause to the query using the ExecConfigurationFormulaireRelatedByIdTypeContrat relation
 *
 * @method ExecTypeContratQuery leftJoinExecConfigurationFormulaireRelatedByIdTypeContrat($relationAlias = null) Adds a LEFT JOIN clause to the query using the ExecConfigurationFormulaireRelatedByIdTypeContrat relation
 * @method ExecTypeContratQuery rightJoinExecConfigurationFormulaireRelatedByIdTypeContrat($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ExecConfigurationFormulaireRelatedByIdTypeContrat relation
 * @method ExecTypeContratQuery innerJoinExecConfigurationFormulaireRelatedByIdTypeContrat($relationAlias = null) Adds a INNER JOIN clause to the query using the ExecConfigurationFormulaireRelatedByIdTypeContrat relation
 *
 * @method ExecTypeContratQuery leftJoinExecContrat($relationAlias = null) Adds a LEFT JOIN clause to the query using the ExecContrat relation
 * @method ExecTypeContratQuery rightJoinExecContrat($relationAlias = null) Adds a RIGHT JOIN clause to the query using the ExecContrat relation
 * @method ExecTypeContratQuery innerJoinExecContrat($relationAlias = null) Adds a INNER JOIN clause to the query using the ExecContrat relation
 *
 * @method ExecTypeContrat findOne(PropelPDO $con = null) Return the first ExecTypeContrat matching the query
 * @method ExecTypeContrat findOneOrCreate(PropelPDO $con = null) Return the first ExecTypeContrat matching the query, or a new ExecTypeContrat object populated from the query conditions when no match is found
 *
 * @method ExecTypeContrat findOneByLibelle(string $libelle) Return the first ExecTypeContrat filtered by the libelle column
 * @method ExecTypeContrat findOneByLibelleFr(string $libelle_fr) Return the first ExecTypeContrat filtered by the libelle_fr column
 * @method ExecTypeContrat findOneByLibelleAr(string $libelle_ar) Return the first ExecTypeContrat filtered by the libelle_ar column
 * @method ExecTypeContrat findOneByLibelleEn(string $libelle_en) Return the first ExecTypeContrat filtered by the libelle_en column
 * @method ExecTypeContrat findOneByTypeEvenementLiee(string $type_evenement_liee) Return the first ExecTypeContrat filtered by the type_evenement_liee column
 *
 * @method array findById(int $id) Return ExecTypeContrat objects filtered by the id column
 * @method array findByLibelle(string $libelle) Return ExecTypeContrat objects filtered by the libelle column
 * @method array findByLibelleFr(string $libelle_fr) Return ExecTypeContrat objects filtered by the libelle_fr column
 * @method array findByLibelleAr(string $libelle_ar) Return ExecTypeContrat objects filtered by the libelle_ar column
 * @method array findByLibelleEn(string $libelle_en) Return ExecTypeContrat objects filtered by the libelle_en column
 * @method array findByTypeEvenementLiee(string $type_evenement_liee) Return ExecTypeContrat objects filtered by the type_evenement_liee column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseExecTypeContratQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseExecTypeContratQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'ExecTypeContrat', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ExecTypeContratQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ExecTypeContratQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ExecTypeContratQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ExecTypeContratQuery) {
            return $criteria;
        }
        $query = new ExecTypeContratQuery();
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
     * @return   ExecTypeContrat|ExecTypeContrat[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ExecTypeContratPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ExecTypeContratPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 ExecTypeContrat A model object, or null if the key is not found
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
     * @return                 ExecTypeContrat A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `libelle`, `libelle_fr`, `libelle_ar`, `libelle_en`, `type_evenement_liee` FROM `exec_type_contrat` WHERE `id` = :p0';
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
            $obj = new ExecTypeContrat();
            $obj->hydrate($row);
            ExecTypeContratPeer::addInstanceToPool($obj, (string) $key);
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
     * @return ExecTypeContrat|ExecTypeContrat[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|ExecTypeContrat[]|mixed the list of results, formatted by the current formatter
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
     * @return ExecTypeContratQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ExecTypeContratPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ExecTypeContratQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ExecTypeContratPeer::ID, $keys, Criteria::IN);
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
     * @return ExecTypeContratQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(ExecTypeContratPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(ExecTypeContratPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ExecTypeContratPeer::ID, $id, $comparison);
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
     * @return ExecTypeContratQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ExecTypeContratPeer::LIBELLE, $libelle, $comparison);
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
     * @return ExecTypeContratQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ExecTypeContratPeer::LIBELLE_FR, $libelleFr, $comparison);
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
     * @return ExecTypeContratQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ExecTypeContratPeer::LIBELLE_AR, $libelleAr, $comparison);
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
     * @return ExecTypeContratQuery The current query, for fluid interface
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

        return $this->addUsingAlias(ExecTypeContratPeer::LIBELLE_EN, $libelleEn, $comparison);
    }

    /**
     * Filter the query on the type_evenement_liee column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeEvenementLiee('fooValue');   // WHERE type_evenement_liee = 'fooValue'
     * $query->filterByTypeEvenementLiee('%fooValue%'); // WHERE type_evenement_liee LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeEvenementLiee The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ExecTypeContratQuery The current query, for fluid interface
     */
    public function filterByTypeEvenementLiee($typeEvenementLiee = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeEvenementLiee)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeEvenementLiee)) {
                $typeEvenementLiee = str_replace('*', '%', $typeEvenementLiee);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ExecTypeContratPeer::TYPE_EVENEMENT_LIEE, $typeEvenementLiee, $comparison);
    }

    /**
     * Filter the query by a related ExecConfigurationFormulaire object
     *
     * @param   ExecConfigurationFormulaire|PropelObjectCollection $ExecConfigurationFormulaire  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExecTypeContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExecConfigurationFormulaireRelatedByIdTypeContrat($ExecConfigurationFormulaire, $comparison = null)
    {
        if ($ExecConfigurationFormulaire instanceof ExecConfigurationFormulaire) {
            return $this
                ->addUsingAlias(ExecTypeContratPeer::ID, $ExecConfigurationFormulaire->getIdTypeContrat(), $comparison);
        } elseif ($ExecConfigurationFormulaire instanceof PropelObjectCollection) {
            return $this
                ->useExecConfigurationFormulaireRelatedByIdTypeContratQuery()
                ->filterByPrimaryKeys($ExecConfigurationFormulaire->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByExecConfigurationFormulaireRelatedByIdTypeContrat() only accepts arguments of type ExecConfigurationFormulaire or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ExecConfigurationFormulaireRelatedByIdTypeContrat relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ExecTypeContratQuery The current query, for fluid interface
     */
    public function joinExecConfigurationFormulaireRelatedByIdTypeContrat($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ExecConfigurationFormulaireRelatedByIdTypeContrat');

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
            $this->addJoinObject($join, 'ExecConfigurationFormulaireRelatedByIdTypeContrat');
        }

        return $this;
    }

    /**
     * Use the ExecConfigurationFormulaireRelatedByIdTypeContrat relation ExecConfigurationFormulaire object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ExecConfigurationFormulaireQuery A secondary query class using the current class as primary query
     */
    public function useExecConfigurationFormulaireRelatedByIdTypeContratQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinExecConfigurationFormulaireRelatedByIdTypeContrat($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ExecConfigurationFormulaireRelatedByIdTypeContrat', 'ExecConfigurationFormulaireQuery');
    }

    /**
     * Filter the query by a related ExecConfigurationFormulaire object
     *
     * @param   ExecConfigurationFormulaire|PropelObjectCollection $ExecConfigurationFormulaire  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExecTypeContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExecConfigurationFormulaireRelatedByIdTypeContrat($ExecConfigurationFormulaire, $comparison = null)
    {
        if ($ExecConfigurationFormulaire instanceof ExecConfigurationFormulaire) {
            return $this
                ->addUsingAlias(ExecTypeContratPeer::ID, $ExecConfigurationFormulaire->getIdTypeContrat(), $comparison);
        } elseif ($ExecConfigurationFormulaire instanceof PropelObjectCollection) {
            return $this
                ->useExecConfigurationFormulaireRelatedByIdTypeContratQuery()
                ->filterByPrimaryKeys($ExecConfigurationFormulaire->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByExecConfigurationFormulaireRelatedByIdTypeContrat() only accepts arguments of type ExecConfigurationFormulaire or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ExecConfigurationFormulaireRelatedByIdTypeContrat relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ExecTypeContratQuery The current query, for fluid interface
     */
    public function joinExecConfigurationFormulaireRelatedByIdTypeContrat($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ExecConfigurationFormulaireRelatedByIdTypeContrat');

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
            $this->addJoinObject($join, 'ExecConfigurationFormulaireRelatedByIdTypeContrat');
        }

        return $this;
    }

    /**
     * Use the ExecConfigurationFormulaireRelatedByIdTypeContrat relation ExecConfigurationFormulaire object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ExecConfigurationFormulaireQuery A secondary query class using the current class as primary query
     */
    public function useExecConfigurationFormulaireRelatedByIdTypeContratQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinExecConfigurationFormulaireRelatedByIdTypeContrat($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ExecConfigurationFormulaireRelatedByIdTypeContrat', 'ExecConfigurationFormulaireQuery');
    }

    /**
     * Filter the query by a related ExecContrat object
     *
     * @param   ExecContrat|PropelObjectCollection $ExecContrat  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 ExecTypeContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByExecContrat($ExecContrat, $comparison = null)
    {
        if ($ExecContrat instanceof ExecContrat) {
            return $this
                ->addUsingAlias(ExecTypeContratPeer::ID, $ExecContrat->getIdTypeContrat(), $comparison);
        } elseif ($ExecContrat instanceof PropelObjectCollection) {
            return $this
                ->useExecContratQuery()
                ->filterByPrimaryKeys($ExecContrat->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByExecContrat() only accepts arguments of type ExecContrat or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the ExecContrat relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return ExecTypeContratQuery The current query, for fluid interface
     */
    public function joinExecContrat($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('ExecContrat');

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
            $this->addJoinObject($join, 'ExecContrat');
        }

        return $this;
    }

    /**
     * Use the ExecContrat relation ExecContrat object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   ExecContratQuery A secondary query class using the current class as primary query
     */
    public function useExecContratQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinExecContrat($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'ExecContrat', 'ExecContratQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   ExecTypeContrat $ExecTypeContrat Object to remove from the list of results
     *
     * @return ExecTypeContratQuery The current query, for fluid interface
     */
    public function prune($ExecTypeContrat = null)
    {
        if ($ExecTypeContrat) {
            $this->addUsingAlias(ExecTypeContratPeer::ID, $ExecTypeContrat->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
