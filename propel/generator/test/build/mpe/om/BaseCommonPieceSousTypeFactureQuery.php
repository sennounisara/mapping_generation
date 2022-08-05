<?php


/**
 * Base class that represents a query for the 'piece_sous_type_facture' table.
 *
 * 
 *
 * @method CommonPieceSousTypeFactureQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonPieceSousTypeFactureQuery orderByIdSousType($order = Criteria::ASC) Order by the id_sous_type column
 * @method CommonPieceSousTypeFactureQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method CommonPieceSousTypeFactureQuery orderByNomFichier($order = Criteria::ASC) Order by the nom_fichier column
 *
 * @method CommonPieceSousTypeFactureQuery groupById() Group by the id column
 * @method CommonPieceSousTypeFactureQuery groupByIdSousType() Group by the id_sous_type column
 * @method CommonPieceSousTypeFactureQuery groupByLibelle() Group by the libelle column
 * @method CommonPieceSousTypeFactureQuery groupByNomFichier() Group by the nom_fichier column
 *
 * @method CommonPieceSousTypeFactureQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonPieceSousTypeFactureQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonPieceSousTypeFactureQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonPieceSousTypeFactureQuery leftJoinCommonSousTypeFacture($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonSousTypeFacture relation
 * @method CommonPieceSousTypeFactureQuery rightJoinCommonSousTypeFacture($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonSousTypeFacture relation
 * @method CommonPieceSousTypeFactureQuery innerJoinCommonSousTypeFacture($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonSousTypeFacture relation
 *
 * @method CommonPieceSousTypeFactureQuery leftJoinCommonFacturePieceJointe($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonFacturePieceJointe relation
 * @method CommonPieceSousTypeFactureQuery rightJoinCommonFacturePieceJointe($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonFacturePieceJointe relation
 * @method CommonPieceSousTypeFactureQuery innerJoinCommonFacturePieceJointe($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonFacturePieceJointe relation
 *
 * @method CommonPieceSousTypeFacture findOne(PropelPDO $con = null) Return the first CommonPieceSousTypeFacture matching the query
 * @method CommonPieceSousTypeFacture findOneOrCreate(PropelPDO $con = null) Return the first CommonPieceSousTypeFacture matching the query, or a new CommonPieceSousTypeFacture object populated from the query conditions when no match is found
 *
 * @method CommonPieceSousTypeFacture findOneByIdSousType(int $id_sous_type) Return the first CommonPieceSousTypeFacture filtered by the id_sous_type column
 * @method CommonPieceSousTypeFacture findOneByLibelle(string $libelle) Return the first CommonPieceSousTypeFacture filtered by the libelle column
 * @method CommonPieceSousTypeFacture findOneByNomFichier(string $nom_fichier) Return the first CommonPieceSousTypeFacture filtered by the nom_fichier column
 *
 * @method array findById(int $id) Return CommonPieceSousTypeFacture objects filtered by the id column
 * @method array findByIdSousType(int $id_sous_type) Return CommonPieceSousTypeFacture objects filtered by the id_sous_type column
 * @method array findByLibelle(string $libelle) Return CommonPieceSousTypeFacture objects filtered by the libelle column
 * @method array findByNomFichier(string $nom_fichier) Return CommonPieceSousTypeFacture objects filtered by the nom_fichier column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonPieceSousTypeFactureQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonPieceSousTypeFactureQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonPieceSousTypeFacture', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonPieceSousTypeFactureQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonPieceSousTypeFactureQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonPieceSousTypeFactureQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonPieceSousTypeFactureQuery) {
            return $criteria;
        }
        $query = new CommonPieceSousTypeFactureQuery();
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
     * @return   CommonPieceSousTypeFacture|CommonPieceSousTypeFacture[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonPieceSousTypeFacturePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonPieceSousTypeFacturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonPieceSousTypeFacture A model object, or null if the key is not found
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
     * @return                 CommonPieceSousTypeFacture A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_sous_type`, `libelle`, `nom_fichier` FROM `piece_sous_type_facture` WHERE `id` = :p0';
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
            $obj = new CommonPieceSousTypeFacture();
            $obj->hydrate($row);
            CommonPieceSousTypeFacturePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonPieceSousTypeFacture|CommonPieceSousTypeFacture[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonPieceSousTypeFacture[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonPieceSousTypeFactureQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonPieceSousTypeFacturePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonPieceSousTypeFactureQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonPieceSousTypeFacturePeer::ID, $keys, Criteria::IN);
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
     * @return CommonPieceSousTypeFactureQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonPieceSousTypeFacturePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonPieceSousTypeFacturePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPieceSousTypeFacturePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_sous_type column
     *
     * Example usage:
     * <code>
     * $query->filterByIdSousType(1234); // WHERE id_sous_type = 1234
     * $query->filterByIdSousType(array(12, 34)); // WHERE id_sous_type IN (12, 34)
     * $query->filterByIdSousType(array('min' => 12)); // WHERE id_sous_type >= 12
     * $query->filterByIdSousType(array('max' => 12)); // WHERE id_sous_type <= 12
     * </code>
     *
     * @see       filterByCommonSousTypeFacture()
     *
     * @param     mixed $idSousType The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPieceSousTypeFactureQuery The current query, for fluid interface
     */
    public function filterByIdSousType($idSousType = null, $comparison = null)
    {
        if (is_array($idSousType)) {
            $useMinMax = false;
            if (isset($idSousType['min'])) {
                $this->addUsingAlias(CommonPieceSousTypeFacturePeer::ID_SOUS_TYPE, $idSousType['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idSousType['max'])) {
                $this->addUsingAlias(CommonPieceSousTypeFacturePeer::ID_SOUS_TYPE, $idSousType['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPieceSousTypeFacturePeer::ID_SOUS_TYPE, $idSousType, $comparison);
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
     * @return CommonPieceSousTypeFactureQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonPieceSousTypeFacturePeer::LIBELLE, $libelle, $comparison);
    }

    /**
     * Filter the query on the nom_fichier column
     *
     * Example usage:
     * <code>
     * $query->filterByNomFichier('fooValue');   // WHERE nom_fichier = 'fooValue'
     * $query->filterByNomFichier('%fooValue%'); // WHERE nom_fichier LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomFichier The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPieceSousTypeFactureQuery The current query, for fluid interface
     */
    public function filterByNomFichier($nomFichier = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomFichier)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomFichier)) {
                $nomFichier = str_replace('*', '%', $nomFichier);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPieceSousTypeFacturePeer::NOM_FICHIER, $nomFichier, $comparison);
    }

    /**
     * Filter the query by a related CommonSousTypeFacture object
     *
     * @param   CommonSousTypeFacture|PropelObjectCollection $commonSousTypeFacture The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonPieceSousTypeFactureQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonSousTypeFacture($commonSousTypeFacture, $comparison = null)
    {
        if ($commonSousTypeFacture instanceof CommonSousTypeFacture) {
            return $this
                ->addUsingAlias(CommonPieceSousTypeFacturePeer::ID_SOUS_TYPE, $commonSousTypeFacture->getId(), $comparison);
        } elseif ($commonSousTypeFacture instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonPieceSousTypeFacturePeer::ID_SOUS_TYPE, $commonSousTypeFacture->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonSousTypeFacture() only accepts arguments of type CommonSousTypeFacture or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonSousTypeFacture relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonPieceSousTypeFactureQuery The current query, for fluid interface
     */
    public function joinCommonSousTypeFacture($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonSousTypeFacture');

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
            $this->addJoinObject($join, 'CommonSousTypeFacture');
        }

        return $this;
    }

    /**
     * Use the CommonSousTypeFacture relation CommonSousTypeFacture object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonSousTypeFactureQuery A secondary query class using the current class as primary query
     */
    public function useCommonSousTypeFactureQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonSousTypeFacture($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonSousTypeFacture', 'CommonSousTypeFactureQuery');
    }

    /**
     * Filter the query by a related CommonFacturePieceJointe object
     *
     * @param   CommonFacturePieceJointe|PropelObjectCollection $commonFacturePieceJointe  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonPieceSousTypeFactureQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonFacturePieceJointe($commonFacturePieceJointe, $comparison = null)
    {
        if ($commonFacturePieceJointe instanceof CommonFacturePieceJointe) {
            return $this
                ->addUsingAlias(CommonPieceSousTypeFacturePeer::ID, $commonFacturePieceJointe->getIdPieceSousType(), $comparison);
        } elseif ($commonFacturePieceJointe instanceof PropelObjectCollection) {
            return $this
                ->useCommonFacturePieceJointeQuery()
                ->filterByPrimaryKeys($commonFacturePieceJointe->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonFacturePieceJointe() only accepts arguments of type CommonFacturePieceJointe or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonFacturePieceJointe relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonPieceSousTypeFactureQuery The current query, for fluid interface
     */
    public function joinCommonFacturePieceJointe($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonFacturePieceJointe');

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
            $this->addJoinObject($join, 'CommonFacturePieceJointe');
        }

        return $this;
    }

    /**
     * Use the CommonFacturePieceJointe relation CommonFacturePieceJointe object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonFacturePieceJointeQuery A secondary query class using the current class as primary query
     */
    public function useCommonFacturePieceJointeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonFacturePieceJointe($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonFacturePieceJointe', 'CommonFacturePieceJointeQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonPieceSousTypeFacture $commonPieceSousTypeFacture Object to remove from the list of results
     *
     * @return CommonPieceSousTypeFactureQuery The current query, for fluid interface
     */
    public function prune($commonPieceSousTypeFacture = null)
    {
        if ($commonPieceSousTypeFacture) {
            $this->addUsingAlias(CommonPieceSousTypeFacturePeer::ID, $commonPieceSousTypeFacture->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
