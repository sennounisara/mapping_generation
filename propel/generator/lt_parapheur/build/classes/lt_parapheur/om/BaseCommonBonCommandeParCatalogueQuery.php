<?php


/**
 * Base class that represents a query for the 'bon_commande_par_catalogue' table.
 *
 * 
 *
 * @method CommonBonCommandeParCatalogueQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonBonCommandeParCatalogueQuery orderByReference($order = Criteria::ASC) Order by the reference column
 * @method CommonBonCommandeParCatalogueQuery orderByIdDemande($order = Criteria::ASC) Order by the id_demande column
 * @method CommonBonCommandeParCatalogueQuery orderByIdEntreprise($order = Criteria::ASC) Order by the id_entreprise column
 * @method CommonBonCommandeParCatalogueQuery orderByDateCreation($order = Criteria::ASC) Order by the date_creation column
 * @method CommonBonCommandeParCatalogueQuery orderByDateValidation($order = Criteria::ASC) Order by the date_validation column
 * @method CommonBonCommandeParCatalogueQuery orderByStatut($order = Criteria::ASC) Order by the statut column
 *
 * @method CommonBonCommandeParCatalogueQuery groupById() Group by the id column
 * @method CommonBonCommandeParCatalogueQuery groupByReference() Group by the reference column
 * @method CommonBonCommandeParCatalogueQuery groupByIdDemande() Group by the id_demande column
 * @method CommonBonCommandeParCatalogueQuery groupByIdEntreprise() Group by the id_entreprise column
 * @method CommonBonCommandeParCatalogueQuery groupByDateCreation() Group by the date_creation column
 * @method CommonBonCommandeParCatalogueQuery groupByDateValidation() Group by the date_validation column
 * @method CommonBonCommandeParCatalogueQuery groupByStatut() Group by the statut column
 *
 * @method CommonBonCommandeParCatalogueQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonBonCommandeParCatalogueQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonBonCommandeParCatalogueQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonBonCommandeParCatalogueQuery leftJoinCommonDemandeAchatParCatalogue($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonDemandeAchatParCatalogue relation
 * @method CommonBonCommandeParCatalogueQuery rightJoinCommonDemandeAchatParCatalogue($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonDemandeAchatParCatalogue relation
 * @method CommonBonCommandeParCatalogueQuery innerJoinCommonDemandeAchatParCatalogue($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonDemandeAchatParCatalogue relation
 *
 * @method CommonBonCommandeParCatalogue findOne(PropelPDO $con = null) Return the first CommonBonCommandeParCatalogue matching the query
 * @method CommonBonCommandeParCatalogue findOneOrCreate(PropelPDO $con = null) Return the first CommonBonCommandeParCatalogue matching the query, or a new CommonBonCommandeParCatalogue object populated from the query conditions when no match is found
 *
 * @method CommonBonCommandeParCatalogue findOneByReference(string $reference) Return the first CommonBonCommandeParCatalogue filtered by the reference column
 * @method CommonBonCommandeParCatalogue findOneByIdDemande(int $id_demande) Return the first CommonBonCommandeParCatalogue filtered by the id_demande column
 * @method CommonBonCommandeParCatalogue findOneByIdEntreprise(int $id_entreprise) Return the first CommonBonCommandeParCatalogue filtered by the id_entreprise column
 * @method CommonBonCommandeParCatalogue findOneByDateCreation(string $date_creation) Return the first CommonBonCommandeParCatalogue filtered by the date_creation column
 * @method CommonBonCommandeParCatalogue findOneByDateValidation(string $date_validation) Return the first CommonBonCommandeParCatalogue filtered by the date_validation column
 * @method CommonBonCommandeParCatalogue findOneByStatut(int $statut) Return the first CommonBonCommandeParCatalogue filtered by the statut column
 *
 * @method array findById(int $id) Return CommonBonCommandeParCatalogue objects filtered by the id column
 * @method array findByReference(string $reference) Return CommonBonCommandeParCatalogue objects filtered by the reference column
 * @method array findByIdDemande(int $id_demande) Return CommonBonCommandeParCatalogue objects filtered by the id_demande column
 * @method array findByIdEntreprise(int $id_entreprise) Return CommonBonCommandeParCatalogue objects filtered by the id_entreprise column
 * @method array findByDateCreation(string $date_creation) Return CommonBonCommandeParCatalogue objects filtered by the date_creation column
 * @method array findByDateValidation(string $date_validation) Return CommonBonCommandeParCatalogue objects filtered by the date_validation column
 * @method array findByStatut(int $statut) Return CommonBonCommandeParCatalogue objects filtered by the statut column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonBonCommandeParCatalogueQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonBonCommandeParCatalogueQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonBonCommandeParCatalogue', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonBonCommandeParCatalogueQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonBonCommandeParCatalogueQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonBonCommandeParCatalogueQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonBonCommandeParCatalogueQuery) {
            return $criteria;
        }
        $query = new CommonBonCommandeParCatalogueQuery();
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
     * @return   CommonBonCommandeParCatalogue|CommonBonCommandeParCatalogue[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonBonCommandeParCataloguePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonBonCommandeParCataloguePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonBonCommandeParCatalogue A model object, or null if the key is not found
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
     * @return                 CommonBonCommandeParCatalogue A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `reference`, `id_demande`, `id_entreprise`, `date_creation`, `date_validation`, `statut` FROM `bon_commande_par_catalogue` WHERE `id` = :p0';
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
            $obj = new CommonBonCommandeParCatalogue();
            $obj->hydrate($row);
            CommonBonCommandeParCataloguePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonBonCommandeParCatalogue|CommonBonCommandeParCatalogue[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonBonCommandeParCatalogue[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonBonCommandeParCatalogueQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonBonCommandeParCataloguePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonBonCommandeParCatalogueQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonBonCommandeParCataloguePeer::ID, $keys, Criteria::IN);
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
     * @return CommonBonCommandeParCatalogueQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonBonCommandeParCataloguePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonBonCommandeParCataloguePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonBonCommandeParCataloguePeer::ID, $id, $comparison);
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
     * @return CommonBonCommandeParCatalogueQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonBonCommandeParCataloguePeer::REFERENCE, $reference, $comparison);
    }

    /**
     * Filter the query on the id_demande column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDemande(1234); // WHERE id_demande = 1234
     * $query->filterByIdDemande(array(12, 34)); // WHERE id_demande IN (12, 34)
     * $query->filterByIdDemande(array('min' => 12)); // WHERE id_demande >= 12
     * $query->filterByIdDemande(array('max' => 12)); // WHERE id_demande <= 12
     * </code>
     *
     * @see       filterByCommonDemandeAchatParCatalogue()
     *
     * @param     mixed $idDemande The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBonCommandeParCatalogueQuery The current query, for fluid interface
     */
    public function filterByIdDemande($idDemande = null, $comparison = null)
    {
        if (is_array($idDemande)) {
            $useMinMax = false;
            if (isset($idDemande['min'])) {
                $this->addUsingAlias(CommonBonCommandeParCataloguePeer::ID_DEMANDE, $idDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDemande['max'])) {
                $this->addUsingAlias(CommonBonCommandeParCataloguePeer::ID_DEMANDE, $idDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonBonCommandeParCataloguePeer::ID_DEMANDE, $idDemande, $comparison);
    }

    /**
     * Filter the query on the id_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntreprise(1234); // WHERE id_entreprise = 1234
     * $query->filterByIdEntreprise(array(12, 34)); // WHERE id_entreprise IN (12, 34)
     * $query->filterByIdEntreprise(array('min' => 12)); // WHERE id_entreprise >= 12
     * $query->filterByIdEntreprise(array('max' => 12)); // WHERE id_entreprise <= 12
     * </code>
     *
     * @param     mixed $idEntreprise The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBonCommandeParCatalogueQuery The current query, for fluid interface
     */
    public function filterByIdEntreprise($idEntreprise = null, $comparison = null)
    {
        if (is_array($idEntreprise)) {
            $useMinMax = false;
            if (isset($idEntreprise['min'])) {
                $this->addUsingAlias(CommonBonCommandeParCataloguePeer::ID_ENTREPRISE, $idEntreprise['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntreprise['max'])) {
                $this->addUsingAlias(CommonBonCommandeParCataloguePeer::ID_ENTREPRISE, $idEntreprise['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonBonCommandeParCataloguePeer::ID_ENTREPRISE, $idEntreprise, $comparison);
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
     * @return CommonBonCommandeParCatalogueQuery The current query, for fluid interface
     */
    public function filterByDateCreation($dateCreation = null, $comparison = null)
    {
        if (is_array($dateCreation)) {
            $useMinMax = false;
            if (isset($dateCreation['min'])) {
                $this->addUsingAlias(CommonBonCommandeParCataloguePeer::DATE_CREATION, $dateCreation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreation['max'])) {
                $this->addUsingAlias(CommonBonCommandeParCataloguePeer::DATE_CREATION, $dateCreation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonBonCommandeParCataloguePeer::DATE_CREATION, $dateCreation, $comparison);
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
     * @return CommonBonCommandeParCatalogueQuery The current query, for fluid interface
     */
    public function filterByDateValidation($dateValidation = null, $comparison = null)
    {
        if (is_array($dateValidation)) {
            $useMinMax = false;
            if (isset($dateValidation['min'])) {
                $this->addUsingAlias(CommonBonCommandeParCataloguePeer::DATE_VALIDATION, $dateValidation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateValidation['max'])) {
                $this->addUsingAlias(CommonBonCommandeParCataloguePeer::DATE_VALIDATION, $dateValidation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonBonCommandeParCataloguePeer::DATE_VALIDATION, $dateValidation, $comparison);
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
     * @return CommonBonCommandeParCatalogueQuery The current query, for fluid interface
     */
    public function filterByStatut($statut = null, $comparison = null)
    {
        if (is_array($statut)) {
            $useMinMax = false;
            if (isset($statut['min'])) {
                $this->addUsingAlias(CommonBonCommandeParCataloguePeer::STATUT, $statut['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statut['max'])) {
                $this->addUsingAlias(CommonBonCommandeParCataloguePeer::STATUT, $statut['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonBonCommandeParCataloguePeer::STATUT, $statut, $comparison);
    }

    /**
     * Filter the query by a related CommonDemandeAchatParCatalogue object
     *
     * @param   CommonDemandeAchatParCatalogue|PropelObjectCollection $commonDemandeAchatParCatalogue The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonBonCommandeParCatalogueQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonDemandeAchatParCatalogue($commonDemandeAchatParCatalogue, $comparison = null)
    {
        if ($commonDemandeAchatParCatalogue instanceof CommonDemandeAchatParCatalogue) {
            return $this
                ->addUsingAlias(CommonBonCommandeParCataloguePeer::ID_DEMANDE, $commonDemandeAchatParCatalogue->getId(), $comparison);
        } elseif ($commonDemandeAchatParCatalogue instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonBonCommandeParCataloguePeer::ID_DEMANDE, $commonDemandeAchatParCatalogue->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonDemandeAchatParCatalogue() only accepts arguments of type CommonDemandeAchatParCatalogue or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonDemandeAchatParCatalogue relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonBonCommandeParCatalogueQuery The current query, for fluid interface
     */
    public function joinCommonDemandeAchatParCatalogue($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonDemandeAchatParCatalogue');

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
            $this->addJoinObject($join, 'CommonDemandeAchatParCatalogue');
        }

        return $this;
    }

    /**
     * Use the CommonDemandeAchatParCatalogue relation CommonDemandeAchatParCatalogue object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonDemandeAchatParCatalogueQuery A secondary query class using the current class as primary query
     */
    public function useCommonDemandeAchatParCatalogueQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonDemandeAchatParCatalogue($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonDemandeAchatParCatalogue', 'CommonDemandeAchatParCatalogueQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonBonCommandeParCatalogue $commonBonCommandeParCatalogue Object to remove from the list of results
     *
     * @return CommonBonCommandeParCatalogueQuery The current query, for fluid interface
     */
    public function prune($commonBonCommandeParCatalogue = null)
    {
        if ($commonBonCommandeParCatalogue) {
            $this->addUsingAlias(CommonBonCommandeParCataloguePeer::ID, $commonBonCommandeParCatalogue->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
