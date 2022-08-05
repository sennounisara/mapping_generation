<?php


/**
 * Base class that represents a query for the 'exec_type_evenement' table.
 *
 * 
 *
 * @method CommonExecTypeEvenementQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonExecTypeEvenementQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method CommonExecTypeEvenementQuery orderByLibelleFr($order = Criteria::ASC) Order by the libelle_fr column
 * @method CommonExecTypeEvenementQuery orderByLibelleAr($order = Criteria::ASC) Order by the libelle_ar column
 * @method CommonExecTypeEvenementQuery orderByLibelleEn($order = Criteria::ASC) Order by the libelle_en column
 * @method CommonExecTypeEvenementQuery orderByDemande($order = Criteria::ASC) Order by the demande column
 * @method CommonExecTypeEvenementQuery orderByControleInput($order = Criteria::ASC) Order by the controle_input column
 * @method CommonExecTypeEvenementQuery orderByReconductible($order = Criteria::ASC) Order by the reconductible column
 *
 * @method CommonExecTypeEvenementQuery groupById() Group by the id column
 * @method CommonExecTypeEvenementQuery groupByLibelle() Group by the libelle column
 * @method CommonExecTypeEvenementQuery groupByLibelleFr() Group by the libelle_fr column
 * @method CommonExecTypeEvenementQuery groupByLibelleAr() Group by the libelle_ar column
 * @method CommonExecTypeEvenementQuery groupByLibelleEn() Group by the libelle_en column
 * @method CommonExecTypeEvenementQuery groupByDemande() Group by the demande column
 * @method CommonExecTypeEvenementQuery groupByControleInput() Group by the controle_input column
 * @method CommonExecTypeEvenementQuery groupByReconductible() Group by the reconductible column
 *
 * @method CommonExecTypeEvenementQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonExecTypeEvenementQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonExecTypeEvenementQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonExecTypeEvenementQuery leftJoinCommonExecEvenement($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecEvenement relation
 * @method CommonExecTypeEvenementQuery rightJoinCommonExecEvenement($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecEvenement relation
 * @method CommonExecTypeEvenementQuery innerJoinCommonExecEvenement($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecEvenement relation
 *
 * @method CommonExecTypeEvenementQuery leftJoinCommonExecTypeEvenementOrganisme($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecTypeEvenementOrganisme relation
 * @method CommonExecTypeEvenementQuery rightJoinCommonExecTypeEvenementOrganisme($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecTypeEvenementOrganisme relation
 * @method CommonExecTypeEvenementQuery innerJoinCommonExecTypeEvenementOrganisme($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecTypeEvenementOrganisme relation
 *
 * @method CommonExecTypeEvenement findOne(PropelPDO $con = null) Return the first CommonExecTypeEvenement matching the query
 * @method CommonExecTypeEvenement findOneOrCreate(PropelPDO $con = null) Return the first CommonExecTypeEvenement matching the query, or a new CommonExecTypeEvenement object populated from the query conditions when no match is found
 *
 * @method CommonExecTypeEvenement findOneByLibelle(string $libelle) Return the first CommonExecTypeEvenement filtered by the libelle column
 * @method CommonExecTypeEvenement findOneByLibelleFr(string $libelle_fr) Return the first CommonExecTypeEvenement filtered by the libelle_fr column
 * @method CommonExecTypeEvenement findOneByLibelleAr(string $libelle_ar) Return the first CommonExecTypeEvenement filtered by the libelle_ar column
 * @method CommonExecTypeEvenement findOneByLibelleEn(string $libelle_en) Return the first CommonExecTypeEvenement filtered by the libelle_en column
 * @method CommonExecTypeEvenement findOneByDemande(boolean $demande) Return the first CommonExecTypeEvenement filtered by the demande column
 * @method CommonExecTypeEvenement findOneByControleInput(string $controle_input) Return the first CommonExecTypeEvenement filtered by the controle_input column
 * @method CommonExecTypeEvenement findOneByReconductible(int $reconductible) Return the first CommonExecTypeEvenement filtered by the reconductible column
 *
 * @method array findById(int $id) Return CommonExecTypeEvenement objects filtered by the id column
 * @method array findByLibelle(string $libelle) Return CommonExecTypeEvenement objects filtered by the libelle column
 * @method array findByLibelleFr(string $libelle_fr) Return CommonExecTypeEvenement objects filtered by the libelle_fr column
 * @method array findByLibelleAr(string $libelle_ar) Return CommonExecTypeEvenement objects filtered by the libelle_ar column
 * @method array findByLibelleEn(string $libelle_en) Return CommonExecTypeEvenement objects filtered by the libelle_en column
 * @method array findByDemande(boolean $demande) Return CommonExecTypeEvenement objects filtered by the demande column
 * @method array findByControleInput(string $controle_input) Return CommonExecTypeEvenement objects filtered by the controle_input column
 * @method array findByReconductible(int $reconductible) Return CommonExecTypeEvenement objects filtered by the reconductible column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonExecTypeEvenementQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonExecTypeEvenementQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonExecTypeEvenement', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonExecTypeEvenementQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonExecTypeEvenementQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonExecTypeEvenementQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonExecTypeEvenementQuery) {
            return $criteria;
        }
        $query = new CommonExecTypeEvenementQuery();
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
     * @return   CommonExecTypeEvenement|CommonExecTypeEvenement[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonExecTypeEvenementPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonExecTypeEvenementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonExecTypeEvenement A model object, or null if the key is not found
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
     * @return                 CommonExecTypeEvenement A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `libelle`, `libelle_fr`, `libelle_ar`, `libelle_en`, `demande`, `controle_input`, `reconductible` FROM `exec_type_evenement` WHERE `id` = :p0';
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
            $obj = new CommonExecTypeEvenement();
            $obj->hydrate($row);
            CommonExecTypeEvenementPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonExecTypeEvenement|CommonExecTypeEvenement[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonExecTypeEvenement[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonExecTypeEvenementQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonExecTypeEvenementPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonExecTypeEvenementQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonExecTypeEvenementPeer::ID, $keys, Criteria::IN);
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
     * @return CommonExecTypeEvenementQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonExecTypeEvenementPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonExecTypeEvenementPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecTypeEvenementPeer::ID, $id, $comparison);
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
     * @return CommonExecTypeEvenementQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonExecTypeEvenementPeer::LIBELLE, $libelle, $comparison);
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
     * @return CommonExecTypeEvenementQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonExecTypeEvenementPeer::LIBELLE_FR, $libelleFr, $comparison);
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
     * @return CommonExecTypeEvenementQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonExecTypeEvenementPeer::LIBELLE_AR, $libelleAr, $comparison);
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
     * @return CommonExecTypeEvenementQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonExecTypeEvenementPeer::LIBELLE_EN, $libelleEn, $comparison);
    }

    /**
     * Filter the query on the demande column
     *
     * Example usage:
     * <code>
     * $query->filterByDemande(true); // WHERE demande = true
     * $query->filterByDemande('yes'); // WHERE demande = true
     * </code>
     *
     * @param     boolean|string $demande The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecTypeEvenementQuery The current query, for fluid interface
     */
    public function filterByDemande($demande = null, $comparison = null)
    {
        if (is_string($demande)) {
            $demande = in_array(strtolower($demande), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CommonExecTypeEvenementPeer::DEMANDE, $demande, $comparison);
    }

    /**
     * Filter the query on the controle_input column
     *
     * Example usage:
     * <code>
     * $query->filterByControleInput('fooValue');   // WHERE controle_input = 'fooValue'
     * $query->filterByControleInput('%fooValue%'); // WHERE controle_input LIKE '%fooValue%'
     * </code>
     *
     * @param     string $controleInput The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecTypeEvenementQuery The current query, for fluid interface
     */
    public function filterByControleInput($controleInput = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($controleInput)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $controleInput)) {
                $controleInput = str_replace('*', '%', $controleInput);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecTypeEvenementPeer::CONTROLE_INPUT, $controleInput, $comparison);
    }

    /**
     * Filter the query on the reconductible column
     *
     * Example usage:
     * <code>
     * $query->filterByReconductible(1234); // WHERE reconductible = 1234
     * $query->filterByReconductible(array(12, 34)); // WHERE reconductible IN (12, 34)
     * $query->filterByReconductible(array('min' => 12)); // WHERE reconductible >= 12
     * $query->filterByReconductible(array('max' => 12)); // WHERE reconductible <= 12
     * </code>
     *
     * @param     mixed $reconductible The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecTypeEvenementQuery The current query, for fluid interface
     */
    public function filterByReconductible($reconductible = null, $comparison = null)
    {
        if (is_array($reconductible)) {
            $useMinMax = false;
            if (isset($reconductible['min'])) {
                $this->addUsingAlias(CommonExecTypeEvenementPeer::RECONDUCTIBLE, $reconductible['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reconductible['max'])) {
                $this->addUsingAlias(CommonExecTypeEvenementPeer::RECONDUCTIBLE, $reconductible['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecTypeEvenementPeer::RECONDUCTIBLE, $reconductible, $comparison);
    }

    /**
     * Filter the query by a related CommonExecEvenement object
     *
     * @param   CommonExecEvenement|PropelObjectCollection $commonExecEvenement  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecTypeEvenementQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecEvenement($commonExecEvenement, $comparison = null)
    {
        if ($commonExecEvenement instanceof CommonExecEvenement) {
            return $this
                ->addUsingAlias(CommonExecTypeEvenementPeer::ID, $commonExecEvenement->getIdTypeEvenement(), $comparison);
        } elseif ($commonExecEvenement instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecEvenementQuery()
                ->filterByPrimaryKeys($commonExecEvenement->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecEvenement() only accepts arguments of type CommonExecEvenement or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecEvenement relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecTypeEvenementQuery The current query, for fluid interface
     */
    public function joinCommonExecEvenement($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecEvenement');

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
            $this->addJoinObject($join, 'CommonExecEvenement');
        }

        return $this;
    }

    /**
     * Use the CommonExecEvenement relation CommonExecEvenement object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecEvenementQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecEvenementQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecEvenement($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecEvenement', 'CommonExecEvenementQuery');
    }

    /**
     * Filter the query by a related CommonExecTypeEvenementOrganisme object
     *
     * @param   CommonExecTypeEvenementOrganisme|PropelObjectCollection $commonExecTypeEvenementOrganisme  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecTypeEvenementQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecTypeEvenementOrganisme($commonExecTypeEvenementOrganisme, $comparison = null)
    {
        if ($commonExecTypeEvenementOrganisme instanceof CommonExecTypeEvenementOrganisme) {
            return $this
                ->addUsingAlias(CommonExecTypeEvenementPeer::ID, $commonExecTypeEvenementOrganisme->getIdTypeEvenement(), $comparison);
        } elseif ($commonExecTypeEvenementOrganisme instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecTypeEvenementOrganismeQuery()
                ->filterByPrimaryKeys($commonExecTypeEvenementOrganisme->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecTypeEvenementOrganisme() only accepts arguments of type CommonExecTypeEvenementOrganisme or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecTypeEvenementOrganisme relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecTypeEvenementQuery The current query, for fluid interface
     */
    public function joinCommonExecTypeEvenementOrganisme($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecTypeEvenementOrganisme');

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
            $this->addJoinObject($join, 'CommonExecTypeEvenementOrganisme');
        }

        return $this;
    }

    /**
     * Use the CommonExecTypeEvenementOrganisme relation CommonExecTypeEvenementOrganisme object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecTypeEvenementOrganismeQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecTypeEvenementOrganismeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecTypeEvenementOrganisme($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecTypeEvenementOrganisme', 'CommonExecTypeEvenementOrganismeQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonExecTypeEvenement $commonExecTypeEvenement Object to remove from the list of results
     *
     * @return CommonExecTypeEvenementQuery The current query, for fluid interface
     */
    public function prune($commonExecTypeEvenement = null)
    {
        if ($commonExecTypeEvenement) {
            $this->addUsingAlias(CommonExecTypeEvenementPeer::ID, $commonExecTypeEvenement->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
