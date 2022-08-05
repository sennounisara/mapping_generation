<?php


/**
 * Base class that represents a query for the 'exec_type_piece_evenement' table.
 *
 * 
 *
 * @method CommonExecTypePieceEvenementQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonExecTypePieceEvenementQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method CommonExecTypePieceEvenementQuery orderByLibelleFr($order = Criteria::ASC) Order by the libelle_fr column
 * @method CommonExecTypePieceEvenementQuery orderByLibelleAr($order = Criteria::ASC) Order by the libelle_ar column
 * @method CommonExecTypePieceEvenementQuery orderByLibelleEn($order = Criteria::ASC) Order by the libelle_en column
 *
 * @method CommonExecTypePieceEvenementQuery groupById() Group by the id column
 * @method CommonExecTypePieceEvenementQuery groupByLibelle() Group by the libelle column
 * @method CommonExecTypePieceEvenementQuery groupByLibelleFr() Group by the libelle_fr column
 * @method CommonExecTypePieceEvenementQuery groupByLibelleAr() Group by the libelle_ar column
 * @method CommonExecTypePieceEvenementQuery groupByLibelleEn() Group by the libelle_en column
 *
 * @method CommonExecTypePieceEvenementQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonExecTypePieceEvenementQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonExecTypePieceEvenementQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonExecTypePieceEvenementQuery leftJoinCommonExecPieceEvenement($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecPieceEvenement relation
 * @method CommonExecTypePieceEvenementQuery rightJoinCommonExecPieceEvenement($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecPieceEvenement relation
 * @method CommonExecTypePieceEvenementQuery innerJoinCommonExecPieceEvenement($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecPieceEvenement relation
 *
 * @method CommonExecTypePieceEvenement findOne(PropelPDO $con = null) Return the first CommonExecTypePieceEvenement matching the query
 * @method CommonExecTypePieceEvenement findOneOrCreate(PropelPDO $con = null) Return the first CommonExecTypePieceEvenement matching the query, or a new CommonExecTypePieceEvenement object populated from the query conditions when no match is found
 *
 * @method CommonExecTypePieceEvenement findOneByLibelle(string $libelle) Return the first CommonExecTypePieceEvenement filtered by the libelle column
 * @method CommonExecTypePieceEvenement findOneByLibelleFr(string $libelle_fr) Return the first CommonExecTypePieceEvenement filtered by the libelle_fr column
 * @method CommonExecTypePieceEvenement findOneByLibelleAr(string $libelle_ar) Return the first CommonExecTypePieceEvenement filtered by the libelle_ar column
 * @method CommonExecTypePieceEvenement findOneByLibelleEn(string $libelle_en) Return the first CommonExecTypePieceEvenement filtered by the libelle_en column
 *
 * @method array findById(int $id) Return CommonExecTypePieceEvenement objects filtered by the id column
 * @method array findByLibelle(string $libelle) Return CommonExecTypePieceEvenement objects filtered by the libelle column
 * @method array findByLibelleFr(string $libelle_fr) Return CommonExecTypePieceEvenement objects filtered by the libelle_fr column
 * @method array findByLibelleAr(string $libelle_ar) Return CommonExecTypePieceEvenement objects filtered by the libelle_ar column
 * @method array findByLibelleEn(string $libelle_en) Return CommonExecTypePieceEvenement objects filtered by the libelle_en column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonExecTypePieceEvenementQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonExecTypePieceEvenementQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonExecTypePieceEvenement', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonExecTypePieceEvenementQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonExecTypePieceEvenementQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonExecTypePieceEvenementQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonExecTypePieceEvenementQuery) {
            return $criteria;
        }
        $query = new CommonExecTypePieceEvenementQuery();
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
     * @return   CommonExecTypePieceEvenement|CommonExecTypePieceEvenement[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonExecTypePieceEvenementPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonExecTypePieceEvenementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonExecTypePieceEvenement A model object, or null if the key is not found
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
     * @return                 CommonExecTypePieceEvenement A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `libelle`, `libelle_fr`, `libelle_ar`, `libelle_en` FROM `exec_type_piece_evenement` WHERE `id` = :p0';
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
            $obj = new CommonExecTypePieceEvenement();
            $obj->hydrate($row);
            CommonExecTypePieceEvenementPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonExecTypePieceEvenement|CommonExecTypePieceEvenement[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonExecTypePieceEvenement[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonExecTypePieceEvenementQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonExecTypePieceEvenementPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonExecTypePieceEvenementQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonExecTypePieceEvenementPeer::ID, $keys, Criteria::IN);
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
     * @return CommonExecTypePieceEvenementQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonExecTypePieceEvenementPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonExecTypePieceEvenementPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecTypePieceEvenementPeer::ID, $id, $comparison);
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
     * @return CommonExecTypePieceEvenementQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonExecTypePieceEvenementPeer::LIBELLE, $libelle, $comparison);
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
     * @return CommonExecTypePieceEvenementQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonExecTypePieceEvenementPeer::LIBELLE_FR, $libelleFr, $comparison);
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
     * @return CommonExecTypePieceEvenementQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonExecTypePieceEvenementPeer::LIBELLE_AR, $libelleAr, $comparison);
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
     * @return CommonExecTypePieceEvenementQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonExecTypePieceEvenementPeer::LIBELLE_EN, $libelleEn, $comparison);
    }

    /**
     * Filter the query by a related CommonExecPieceEvenement object
     *
     * @param   CommonExecPieceEvenement|PropelObjectCollection $commonExecPieceEvenement  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecTypePieceEvenementQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecPieceEvenement($commonExecPieceEvenement, $comparison = null)
    {
        if ($commonExecPieceEvenement instanceof CommonExecPieceEvenement) {
            return $this
                ->addUsingAlias(CommonExecTypePieceEvenementPeer::ID, $commonExecPieceEvenement->getIdTypePiece(), $comparison);
        } elseif ($commonExecPieceEvenement instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecPieceEvenementQuery()
                ->filterByPrimaryKeys($commonExecPieceEvenement->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecPieceEvenement() only accepts arguments of type CommonExecPieceEvenement or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecPieceEvenement relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecTypePieceEvenementQuery The current query, for fluid interface
     */
    public function joinCommonExecPieceEvenement($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecPieceEvenement');

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
            $this->addJoinObject($join, 'CommonExecPieceEvenement');
        }

        return $this;
    }

    /**
     * Use the CommonExecPieceEvenement relation CommonExecPieceEvenement object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecPieceEvenementQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecPieceEvenementQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecPieceEvenement($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecPieceEvenement', 'CommonExecPieceEvenementQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonExecTypePieceEvenement $commonExecTypePieceEvenement Object to remove from the list of results
     *
     * @return CommonExecTypePieceEvenementQuery The current query, for fluid interface
     */
    public function prune($commonExecTypePieceEvenement = null)
    {
        if ($commonExecTypePieceEvenement) {
            $this->addUsingAlias(CommonExecTypePieceEvenementPeer::ID, $commonExecTypePieceEvenement->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
