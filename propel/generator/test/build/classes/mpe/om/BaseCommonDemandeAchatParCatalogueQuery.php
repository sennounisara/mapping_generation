<?php


/**
 * Base class that represents a query for the 'demande_achat_par_catalogue' table.
 *
 * 
 *
 * @method CommonDemandeAchatParCatalogueQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonDemandeAchatParCatalogueQuery orderByReference($order = Criteria::ASC) Order by the reference column
 * @method CommonDemandeAchatParCatalogueQuery orderByDateCreation($order = Criteria::ASC) Order by the date_creation column
 * @method CommonDemandeAchatParCatalogueQuery orderByDateValidation($order = Criteria::ASC) Order by the date_validation column
 * @method CommonDemandeAchatParCatalogueQuery orderByStatut($order = Criteria::ASC) Order by the statut column
 * @method CommonDemandeAchatParCatalogueQuery orderByIdAgent($order = Criteria::ASC) Order by the id_agent column
 * @method CommonDemandeAchatParCatalogueQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 *
 * @method CommonDemandeAchatParCatalogueQuery groupById() Group by the id column
 * @method CommonDemandeAchatParCatalogueQuery groupByReference() Group by the reference column
 * @method CommonDemandeAchatParCatalogueQuery groupByDateCreation() Group by the date_creation column
 * @method CommonDemandeAchatParCatalogueQuery groupByDateValidation() Group by the date_validation column
 * @method CommonDemandeAchatParCatalogueQuery groupByStatut() Group by the statut column
 * @method CommonDemandeAchatParCatalogueQuery groupByIdAgent() Group by the id_agent column
 * @method CommonDemandeAchatParCatalogueQuery groupByOrganisme() Group by the organisme column
 *
 * @method CommonDemandeAchatParCatalogueQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonDemandeAchatParCatalogueQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonDemandeAchatParCatalogueQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonDemandeAchatParCatalogueQuery leftJoinCommonBonCommandeParCatalogue($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonBonCommandeParCatalogue relation
 * @method CommonDemandeAchatParCatalogueQuery rightJoinCommonBonCommandeParCatalogue($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonBonCommandeParCatalogue relation
 * @method CommonDemandeAchatParCatalogueQuery innerJoinCommonBonCommandeParCatalogue($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonBonCommandeParCatalogue relation
 *
 * @method CommonDemandeAchatParCatalogue findOne(PropelPDO $con = null) Return the first CommonDemandeAchatParCatalogue matching the query
 * @method CommonDemandeAchatParCatalogue findOneOrCreate(PropelPDO $con = null) Return the first CommonDemandeAchatParCatalogue matching the query, or a new CommonDemandeAchatParCatalogue object populated from the query conditions when no match is found
 *
 * @method CommonDemandeAchatParCatalogue findOneByReference(string $reference) Return the first CommonDemandeAchatParCatalogue filtered by the reference column
 * @method CommonDemandeAchatParCatalogue findOneByDateCreation(string $date_creation) Return the first CommonDemandeAchatParCatalogue filtered by the date_creation column
 * @method CommonDemandeAchatParCatalogue findOneByDateValidation(string $date_validation) Return the first CommonDemandeAchatParCatalogue filtered by the date_validation column
 * @method CommonDemandeAchatParCatalogue findOneByStatut(int $statut) Return the first CommonDemandeAchatParCatalogue filtered by the statut column
 * @method CommonDemandeAchatParCatalogue findOneByIdAgent(int $id_agent) Return the first CommonDemandeAchatParCatalogue filtered by the id_agent column
 * @method CommonDemandeAchatParCatalogue findOneByOrganisme(string $organisme) Return the first CommonDemandeAchatParCatalogue filtered by the organisme column
 *
 * @method array findById(int $id) Return CommonDemandeAchatParCatalogue objects filtered by the id column
 * @method array findByReference(string $reference) Return CommonDemandeAchatParCatalogue objects filtered by the reference column
 * @method array findByDateCreation(string $date_creation) Return CommonDemandeAchatParCatalogue objects filtered by the date_creation column
 * @method array findByDateValidation(string $date_validation) Return CommonDemandeAchatParCatalogue objects filtered by the date_validation column
 * @method array findByStatut(int $statut) Return CommonDemandeAchatParCatalogue objects filtered by the statut column
 * @method array findByIdAgent(int $id_agent) Return CommonDemandeAchatParCatalogue objects filtered by the id_agent column
 * @method array findByOrganisme(string $organisme) Return CommonDemandeAchatParCatalogue objects filtered by the organisme column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonDemandeAchatParCatalogueQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonDemandeAchatParCatalogueQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonDemandeAchatParCatalogue', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonDemandeAchatParCatalogueQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonDemandeAchatParCatalogueQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonDemandeAchatParCatalogueQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonDemandeAchatParCatalogueQuery) {
            return $criteria;
        }
        $query = new CommonDemandeAchatParCatalogueQuery();
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
     * @return   CommonDemandeAchatParCatalogue|CommonDemandeAchatParCatalogue[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonDemandeAchatParCataloguePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonDemandeAchatParCataloguePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonDemandeAchatParCatalogue A model object, or null if the key is not found
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
     * @return                 CommonDemandeAchatParCatalogue A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `reference`, `date_creation`, `date_validation`, `statut`, `id_agent`, `organisme` FROM `demande_achat_par_catalogue` WHERE `id` = :p0';
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
            $obj = new CommonDemandeAchatParCatalogue();
            $obj->hydrate($row);
            CommonDemandeAchatParCataloguePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonDemandeAchatParCatalogue|CommonDemandeAchatParCatalogue[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonDemandeAchatParCatalogue[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonDemandeAchatParCatalogueQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonDemandeAchatParCataloguePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonDemandeAchatParCatalogueQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonDemandeAchatParCataloguePeer::ID, $keys, Criteria::IN);
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
     * @return CommonDemandeAchatParCatalogueQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonDemandeAchatParCataloguePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonDemandeAchatParCataloguePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDemandeAchatParCataloguePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the reference column
     *
     * Example usage:
     * <code>
     * $query->filterByReference('fooValue');   // WHERE reference = 'fooValue'
     * $query->filterByReference('%fooValue%'); // WHERE reference LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reference The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDemandeAchatParCatalogueQuery The current query, for fluid interface
     */
    public function filterByReference($reference = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reference)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $reference)) {
                $reference = str_replace('*', '%', $reference);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDemandeAchatParCataloguePeer::REFERENCE, $reference, $comparison);
    }

    /**
     * Filter the query on the date_creation column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCreation('2011-03-14'); // WHERE date_creation = '2011-03-14'
     * $query->filterByDateCreation('now'); // WHERE date_creation = '2011-03-14'
     * $query->filterByDateCreation(array('max' => 'yesterday')); // WHERE date_creation > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateCreation The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDemandeAchatParCatalogueQuery The current query, for fluid interface
     */
    public function filterByDateCreation($dateCreation = null, $comparison = null)
    {
        if (is_array($dateCreation)) {
            $useMinMax = false;
            if (isset($dateCreation['min'])) {
                $this->addUsingAlias(CommonDemandeAchatParCataloguePeer::DATE_CREATION, $dateCreation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreation['max'])) {
                $this->addUsingAlias(CommonDemandeAchatParCataloguePeer::DATE_CREATION, $dateCreation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDemandeAchatParCataloguePeer::DATE_CREATION, $dateCreation, $comparison);
    }

    /**
     * Filter the query on the date_validation column
     *
     * Example usage:
     * <code>
     * $query->filterByDateValidation('2011-03-14'); // WHERE date_validation = '2011-03-14'
     * $query->filterByDateValidation('now'); // WHERE date_validation = '2011-03-14'
     * $query->filterByDateValidation(array('max' => 'yesterday')); // WHERE date_validation > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateValidation The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDemandeAchatParCatalogueQuery The current query, for fluid interface
     */
    public function filterByDateValidation($dateValidation = null, $comparison = null)
    {
        if (is_array($dateValidation)) {
            $useMinMax = false;
            if (isset($dateValidation['min'])) {
                $this->addUsingAlias(CommonDemandeAchatParCataloguePeer::DATE_VALIDATION, $dateValidation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateValidation['max'])) {
                $this->addUsingAlias(CommonDemandeAchatParCataloguePeer::DATE_VALIDATION, $dateValidation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDemandeAchatParCataloguePeer::DATE_VALIDATION, $dateValidation, $comparison);
    }

    /**
     * Filter the query on the statut column
     *
     * Example usage:
     * <code>
     * $query->filterByStatut(1234); // WHERE statut = 1234
     * $query->filterByStatut(array(12, 34)); // WHERE statut IN (12, 34)
     * $query->filterByStatut(array('min' => 12)); // WHERE statut >= 12
     * $query->filterByStatut(array('max' => 12)); // WHERE statut <= 12
     * </code>
     *
     * @param     mixed $statut The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDemandeAchatParCatalogueQuery The current query, for fluid interface
     */
    public function filterByStatut($statut = null, $comparison = null)
    {
        if (is_array($statut)) {
            $useMinMax = false;
            if (isset($statut['min'])) {
                $this->addUsingAlias(CommonDemandeAchatParCataloguePeer::STATUT, $statut['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statut['max'])) {
                $this->addUsingAlias(CommonDemandeAchatParCataloguePeer::STATUT, $statut['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDemandeAchatParCataloguePeer::STATUT, $statut, $comparison);
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
     * @return CommonDemandeAchatParCatalogueQuery The current query, for fluid interface
     */
    public function filterByIdAgent($idAgent = null, $comparison = null)
    {
        if (is_array($idAgent)) {
            $useMinMax = false;
            if (isset($idAgent['min'])) {
                $this->addUsingAlias(CommonDemandeAchatParCataloguePeer::ID_AGENT, $idAgent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgent['max'])) {
                $this->addUsingAlias(CommonDemandeAchatParCataloguePeer::ID_AGENT, $idAgent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDemandeAchatParCataloguePeer::ID_AGENT, $idAgent, $comparison);
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
     * @return CommonDemandeAchatParCatalogueQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonDemandeAchatParCataloguePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query by a related CommonBonCommandeParCatalogue object
     *
     * @param   CommonBonCommandeParCatalogue|PropelObjectCollection $commonBonCommandeParCatalogue  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonDemandeAchatParCatalogueQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonBonCommandeParCatalogue($commonBonCommandeParCatalogue, $comparison = null)
    {
        if ($commonBonCommandeParCatalogue instanceof CommonBonCommandeParCatalogue) {
            return $this
                ->addUsingAlias(CommonDemandeAchatParCataloguePeer::ID, $commonBonCommandeParCatalogue->getIdDemande(), $comparison);
        } elseif ($commonBonCommandeParCatalogue instanceof PropelObjectCollection) {
            return $this
                ->useCommonBonCommandeParCatalogueQuery()
                ->filterByPrimaryKeys($commonBonCommandeParCatalogue->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonBonCommandeParCatalogue() only accepts arguments of type CommonBonCommandeParCatalogue or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonBonCommandeParCatalogue relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonDemandeAchatParCatalogueQuery The current query, for fluid interface
     */
    public function joinCommonBonCommandeParCatalogue($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonBonCommandeParCatalogue');

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
            $this->addJoinObject($join, 'CommonBonCommandeParCatalogue');
        }

        return $this;
    }

    /**
     * Use the CommonBonCommandeParCatalogue relation CommonBonCommandeParCatalogue object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonBonCommandeParCatalogueQuery A secondary query class using the current class as primary query
     */
    public function useCommonBonCommandeParCatalogueQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonBonCommandeParCatalogue($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonBonCommandeParCatalogue', 'CommonBonCommandeParCatalogueQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonDemandeAchatParCatalogue $commonDemandeAchatParCatalogue Object to remove from the list of results
     *
     * @return CommonDemandeAchatParCatalogueQuery The current query, for fluid interface
     */
    public function prune($commonDemandeAchatParCatalogue = null)
    {
        if ($commonDemandeAchatParCatalogue) {
            $this->addUsingAlias(CommonDemandeAchatParCataloguePeer::ID, $commonDemandeAchatParCatalogue->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
