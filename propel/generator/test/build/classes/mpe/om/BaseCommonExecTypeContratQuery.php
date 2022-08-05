<?php


/**
 * Base class that represents a query for the 'exec_type_contrat' table.
 *
 * 
 *
 * @method CommonExecTypeContratQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonExecTypeContratQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method CommonExecTypeContratQuery orderByLibelleFr($order = Criteria::ASC) Order by the libelle_fr column
 * @method CommonExecTypeContratQuery orderByLibelleAr($order = Criteria::ASC) Order by the libelle_ar column
 * @method CommonExecTypeContratQuery orderByLibelleEn($order = Criteria::ASC) Order by the libelle_en column
 * @method CommonExecTypeContratQuery orderByTypeEvenementLiee($order = Criteria::ASC) Order by the type_evenement_liee column
 *
 * @method CommonExecTypeContratQuery groupById() Group by the id column
 * @method CommonExecTypeContratQuery groupByLibelle() Group by the libelle column
 * @method CommonExecTypeContratQuery groupByLibelleFr() Group by the libelle_fr column
 * @method CommonExecTypeContratQuery groupByLibelleAr() Group by the libelle_ar column
 * @method CommonExecTypeContratQuery groupByLibelleEn() Group by the libelle_en column
 * @method CommonExecTypeContratQuery groupByTypeEvenementLiee() Group by the type_evenement_liee column
 *
 * @method CommonExecTypeContratQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonExecTypeContratQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonExecTypeContratQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonExecTypeContratQuery leftJoinCommonExecConfigurationFormulaireRelatedByIdTypeContrat($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecConfigurationFormulaireRelatedByIdTypeContrat relation
 * @method CommonExecTypeContratQuery rightJoinCommonExecConfigurationFormulaireRelatedByIdTypeContrat($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecConfigurationFormulaireRelatedByIdTypeContrat relation
 * @method CommonExecTypeContratQuery innerJoinCommonExecConfigurationFormulaireRelatedByIdTypeContrat($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecConfigurationFormulaireRelatedByIdTypeContrat relation
 *
 * @method CommonExecTypeContratQuery leftJoinCommonExecConfigurationFormulaireRelatedByIdTypeContrat($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecConfigurationFormulaireRelatedByIdTypeContrat relation
 * @method CommonExecTypeContratQuery rightJoinCommonExecConfigurationFormulaireRelatedByIdTypeContrat($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecConfigurationFormulaireRelatedByIdTypeContrat relation
 * @method CommonExecTypeContratQuery innerJoinCommonExecConfigurationFormulaireRelatedByIdTypeContrat($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecConfigurationFormulaireRelatedByIdTypeContrat relation
 *
 * @method CommonExecTypeContratQuery leftJoinCommonExecConfigurationFormulaireRelatedByIdTypeContrat($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecConfigurationFormulaireRelatedByIdTypeContrat relation
 * @method CommonExecTypeContratQuery rightJoinCommonExecConfigurationFormulaireRelatedByIdTypeContrat($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecConfigurationFormulaireRelatedByIdTypeContrat relation
 * @method CommonExecTypeContratQuery innerJoinCommonExecConfigurationFormulaireRelatedByIdTypeContrat($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecConfigurationFormulaireRelatedByIdTypeContrat relation
 *
 * @method CommonExecTypeContratQuery leftJoinCommonExecContrat($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecContrat relation
 * @method CommonExecTypeContratQuery rightJoinCommonExecContrat($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecContrat relation
 * @method CommonExecTypeContratQuery innerJoinCommonExecContrat($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecContrat relation
 *
 * @method CommonExecTypeContrat findOne(PropelPDO $con = null) Return the first CommonExecTypeContrat matching the query
 * @method CommonExecTypeContrat findOneOrCreate(PropelPDO $con = null) Return the first CommonExecTypeContrat matching the query, or a new CommonExecTypeContrat object populated from the query conditions when no match is found
 *
 * @method CommonExecTypeContrat findOneByLibelle(string $libelle) Return the first CommonExecTypeContrat filtered by the libelle column
 * @method CommonExecTypeContrat findOneByLibelleFr(string $libelle_fr) Return the first CommonExecTypeContrat filtered by the libelle_fr column
 * @method CommonExecTypeContrat findOneByLibelleAr(string $libelle_ar) Return the first CommonExecTypeContrat filtered by the libelle_ar column
 * @method CommonExecTypeContrat findOneByLibelleEn(string $libelle_en) Return the first CommonExecTypeContrat filtered by the libelle_en column
 * @method CommonExecTypeContrat findOneByTypeEvenementLiee(string $type_evenement_liee) Return the first CommonExecTypeContrat filtered by the type_evenement_liee column
 *
 * @method array findById(int $id) Return CommonExecTypeContrat objects filtered by the id column
 * @method array findByLibelle(string $libelle) Return CommonExecTypeContrat objects filtered by the libelle column
 * @method array findByLibelleFr(string $libelle_fr) Return CommonExecTypeContrat objects filtered by the libelle_fr column
 * @method array findByLibelleAr(string $libelle_ar) Return CommonExecTypeContrat objects filtered by the libelle_ar column
 * @method array findByLibelleEn(string $libelle_en) Return CommonExecTypeContrat objects filtered by the libelle_en column
 * @method array findByTypeEvenementLiee(string $type_evenement_liee) Return CommonExecTypeContrat objects filtered by the type_evenement_liee column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonExecTypeContratQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonExecTypeContratQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonExecTypeContrat', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonExecTypeContratQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonExecTypeContratQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonExecTypeContratQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonExecTypeContratQuery) {
            return $criteria;
        }
        $query = new CommonExecTypeContratQuery();
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
     * @return   CommonExecTypeContrat|CommonExecTypeContrat[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonExecTypeContratPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonExecTypeContratPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonExecTypeContrat A model object, or null if the key is not found
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
     * @return                 CommonExecTypeContrat A model object, or null if the key is not found
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
            $obj = new CommonExecTypeContrat();
            $obj->hydrate($row);
            CommonExecTypeContratPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonExecTypeContrat|CommonExecTypeContrat[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonExecTypeContrat[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonExecTypeContratQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonExecTypeContratPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonExecTypeContratQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonExecTypeContratPeer::ID, $keys, Criteria::IN);
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
     * @return CommonExecTypeContratQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonExecTypeContratPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonExecTypeContratPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecTypeContratPeer::ID, $id, $comparison);
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
     * @return CommonExecTypeContratQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonExecTypeContratPeer::LIBELLE, $libelle, $comparison);
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
     * @return CommonExecTypeContratQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonExecTypeContratPeer::LIBELLE_FR, $libelleFr, $comparison);
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
     * @return CommonExecTypeContratQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonExecTypeContratPeer::LIBELLE_AR, $libelleAr, $comparison);
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
     * @return CommonExecTypeContratQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonExecTypeContratPeer::LIBELLE_EN, $libelleEn, $comparison);
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
     * @return CommonExecTypeContratQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonExecTypeContratPeer::TYPE_EVENEMENT_LIEE, $typeEvenementLiee, $comparison);
    }

    /**
     * Filter the query by a related CommonExecConfigurationFormulaire object
     *
     * @param   CommonExecConfigurationFormulaire|PropelObjectCollection $commonExecConfigurationFormulaire  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecTypeContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecConfigurationFormulaireRelatedByIdTypeContrat($commonExecConfigurationFormulaire, $comparison = null)
    {
        if ($commonExecConfigurationFormulaire instanceof CommonExecConfigurationFormulaire) {
            return $this
                ->addUsingAlias(CommonExecTypeContratPeer::ID, $commonExecConfigurationFormulaire->getIdTypeContrat(), $comparison);
        } elseif ($commonExecConfigurationFormulaire instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecConfigurationFormulaireRelatedByIdTypeContratQuery()
                ->filterByPrimaryKeys($commonExecConfigurationFormulaire->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecConfigurationFormulaireRelatedByIdTypeContrat() only accepts arguments of type CommonExecConfigurationFormulaire or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecConfigurationFormulaireRelatedByIdTypeContrat relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecTypeContratQuery The current query, for fluid interface
     */
    public function joinCommonExecConfigurationFormulaireRelatedByIdTypeContrat($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecConfigurationFormulaireRelatedByIdTypeContrat');

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
            $this->addJoinObject($join, 'CommonExecConfigurationFormulaireRelatedByIdTypeContrat');
        }

        return $this;
    }

    /**
     * Use the CommonExecConfigurationFormulaireRelatedByIdTypeContrat relation CommonExecConfigurationFormulaire object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecConfigurationFormulaireQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecConfigurationFormulaireRelatedByIdTypeContratQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecConfigurationFormulaireRelatedByIdTypeContrat($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecConfigurationFormulaireRelatedByIdTypeContrat', 'CommonExecConfigurationFormulaireQuery');
    }

    /**
     * Filter the query by a related CommonExecConfigurationFormulaire object
     *
     * @param   CommonExecConfigurationFormulaire|PropelObjectCollection $commonExecConfigurationFormulaire  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecTypeContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecConfigurationFormulaireRelatedByIdTypeContrat($commonExecConfigurationFormulaire, $comparison = null)
    {
        if ($commonExecConfigurationFormulaire instanceof CommonExecConfigurationFormulaire) {
            return $this
                ->addUsingAlias(CommonExecTypeContratPeer::ID, $commonExecConfigurationFormulaire->getIdTypeContrat(), $comparison);
        } elseif ($commonExecConfigurationFormulaire instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecConfigurationFormulaireRelatedByIdTypeContratQuery()
                ->filterByPrimaryKeys($commonExecConfigurationFormulaire->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecConfigurationFormulaireRelatedByIdTypeContrat() only accepts arguments of type CommonExecConfigurationFormulaire or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecConfigurationFormulaireRelatedByIdTypeContrat relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecTypeContratQuery The current query, for fluid interface
     */
    public function joinCommonExecConfigurationFormulaireRelatedByIdTypeContrat($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecConfigurationFormulaireRelatedByIdTypeContrat');

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
            $this->addJoinObject($join, 'CommonExecConfigurationFormulaireRelatedByIdTypeContrat');
        }

        return $this;
    }

    /**
     * Use the CommonExecConfigurationFormulaireRelatedByIdTypeContrat relation CommonExecConfigurationFormulaire object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecConfigurationFormulaireQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecConfigurationFormulaireRelatedByIdTypeContratQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecConfigurationFormulaireRelatedByIdTypeContrat($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecConfigurationFormulaireRelatedByIdTypeContrat', 'CommonExecConfigurationFormulaireQuery');
    }

    /**
     * Filter the query by a related CommonExecConfigurationFormulaire object
     *
     * @param   CommonExecConfigurationFormulaire|PropelObjectCollection $commonExecConfigurationFormulaire  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecTypeContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecConfigurationFormulaireRelatedByIdTypeContrat($commonExecConfigurationFormulaire, $comparison = null)
    {
        if ($commonExecConfigurationFormulaire instanceof CommonExecConfigurationFormulaire) {
            return $this
                ->addUsingAlias(CommonExecTypeContratPeer::ID, $commonExecConfigurationFormulaire->getIdTypeContrat(), $comparison);
        } elseif ($commonExecConfigurationFormulaire instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecConfigurationFormulaireRelatedByIdTypeContratQuery()
                ->filterByPrimaryKeys($commonExecConfigurationFormulaire->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecConfigurationFormulaireRelatedByIdTypeContrat() only accepts arguments of type CommonExecConfigurationFormulaire or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecConfigurationFormulaireRelatedByIdTypeContrat relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecTypeContratQuery The current query, for fluid interface
     */
    public function joinCommonExecConfigurationFormulaireRelatedByIdTypeContrat($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecConfigurationFormulaireRelatedByIdTypeContrat');

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
            $this->addJoinObject($join, 'CommonExecConfigurationFormulaireRelatedByIdTypeContrat');
        }

        return $this;
    }

    /**
     * Use the CommonExecConfigurationFormulaireRelatedByIdTypeContrat relation CommonExecConfigurationFormulaire object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecConfigurationFormulaireQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecConfigurationFormulaireRelatedByIdTypeContratQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecConfigurationFormulaireRelatedByIdTypeContrat($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecConfigurationFormulaireRelatedByIdTypeContrat', 'CommonExecConfigurationFormulaireQuery');
    }

    /**
     * Filter the query by a related CommonExecContrat object
     *
     * @param   CommonExecContrat|PropelObjectCollection $commonExecContrat  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecTypeContratQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecContrat($commonExecContrat, $comparison = null)
    {
        if ($commonExecContrat instanceof CommonExecContrat) {
            return $this
                ->addUsingAlias(CommonExecTypeContratPeer::ID, $commonExecContrat->getIdTypeContrat(), $comparison);
        } elseif ($commonExecContrat instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecContratQuery()
                ->filterByPrimaryKeys($commonExecContrat->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecContrat() only accepts arguments of type CommonExecContrat or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecContrat relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecTypeContratQuery The current query, for fluid interface
     */
    public function joinCommonExecContrat($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecContrat');

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
            $this->addJoinObject($join, 'CommonExecContrat');
        }

        return $this;
    }

    /**
     * Use the CommonExecContrat relation CommonExecContrat object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecContratQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecContratQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecContrat($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecContrat', 'CommonExecContratQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonExecTypeContrat $commonExecTypeContrat Object to remove from the list of results
     *
     * @return CommonExecTypeContratQuery The current query, for fluid interface
     */
    public function prune($commonExecTypeContrat = null)
    {
        if ($commonExecTypeContrat) {
            $this->addUsingAlias(CommonExecTypeContratPeer::ID, $commonExecTypeContrat->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
