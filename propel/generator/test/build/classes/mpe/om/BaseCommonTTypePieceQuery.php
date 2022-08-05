<?php


/**
 * Base class that represents a query for the 't_type_piece' table.
 *
 * 
 *
 * @method CommonTTypePieceQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonTTypePieceQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method CommonTTypePieceQuery orderByLibelleAbrege($order = Criteria::ASC) Order by the libelle_abrege column
 * @method CommonTTypePieceQuery orderByCleRedac($order = Criteria::ASC) Order by the cle_redac column
 * @method CommonTTypePieceQuery orderByIdModele($order = Criteria::ASC) Order by the id_modele column
 *
 * @method CommonTTypePieceQuery groupById() Group by the id column
 * @method CommonTTypePieceQuery groupByLibelle() Group by the libelle column
 * @method CommonTTypePieceQuery groupByLibelleAbrege() Group by the libelle_abrege column
 * @method CommonTTypePieceQuery groupByCleRedac() Group by the cle_redac column
 * @method CommonTTypePieceQuery groupByIdModele() Group by the id_modele column
 *
 * @method CommonTTypePieceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTTypePieceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTTypePieceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTTypePieceQuery leftJoinCommonTDocumentPieceCollaboratif($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTDocumentPieceCollaboratif relation
 * @method CommonTTypePieceQuery rightJoinCommonTDocumentPieceCollaboratif($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTDocumentPieceCollaboratif relation
 * @method CommonTTypePieceQuery innerJoinCommonTDocumentPieceCollaboratif($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTDocumentPieceCollaboratif relation
 *
 * @method CommonTTypePiece findOne(PropelPDO $con = null) Return the first CommonTTypePiece matching the query
 * @method CommonTTypePiece findOneOrCreate(PropelPDO $con = null) Return the first CommonTTypePiece matching the query, or a new CommonTTypePiece object populated from the query conditions when no match is found
 *
 * @method CommonTTypePiece findOneByLibelle(string $libelle) Return the first CommonTTypePiece filtered by the libelle column
 * @method CommonTTypePiece findOneByLibelleAbrege(string $libelle_abrege) Return the first CommonTTypePiece filtered by the libelle_abrege column
 * @method CommonTTypePiece findOneByCleRedac(string $cle_redac) Return the first CommonTTypePiece filtered by the cle_redac column
 * @method CommonTTypePiece findOneByIdModele(int $id_modele) Return the first CommonTTypePiece filtered by the id_modele column
 *
 * @method array findById(int $id) Return CommonTTypePiece objects filtered by the id column
 * @method array findByLibelle(string $libelle) Return CommonTTypePiece objects filtered by the libelle column
 * @method array findByLibelleAbrege(string $libelle_abrege) Return CommonTTypePiece objects filtered by the libelle_abrege column
 * @method array findByCleRedac(string $cle_redac) Return CommonTTypePiece objects filtered by the cle_redac column
 * @method array findByIdModele(int $id_modele) Return CommonTTypePiece objects filtered by the id_modele column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTTypePieceQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTTypePieceQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTTypePiece', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTTypePieceQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTTypePieceQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTTypePieceQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTTypePieceQuery) {
            return $criteria;
        }
        $query = new CommonTTypePieceQuery();
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
     * @return   CommonTTypePiece|CommonTTypePiece[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTTypePiecePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTTypePiecePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTTypePiece A model object, or null if the key is not found
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
     * @return                 CommonTTypePiece A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `libelle`, `libelle_abrege`, `cle_redac`, `id_modele` FROM `t_type_piece` WHERE `id` = :p0';
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
            $obj = new CommonTTypePiece();
            $obj->hydrate($row);
            CommonTTypePiecePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonTTypePiece|CommonTTypePiece[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTTypePiece[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTTypePieceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonTTypePiecePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTTypePieceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonTTypePiecePeer::ID, $keys, Criteria::IN);
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
     * @return CommonTTypePieceQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonTTypePiecePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonTTypePiecePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTTypePiecePeer::ID, $id, $comparison);
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
     * @return CommonTTypePieceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTTypePiecePeer::LIBELLE, $libelle, $comparison);
    }

    /**
     * Filter the query on the libelle_abrege column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleAbrege('fooValue');   // WHERE libelle_abrege = 'fooValue'
     * $query->filterByLibelleAbrege('%fooValue%'); // WHERE libelle_abrege LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleAbrege The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTTypePieceQuery The current query, for fluid interface
     */
    public function filterByLibelleAbrege($libelleAbrege = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleAbrege)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleAbrege)) {
                $libelleAbrege = str_replace('*', '%', $libelleAbrege);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTTypePiecePeer::LIBELLE_ABREGE, $libelleAbrege, $comparison);
    }

    /**
     * Filter the query on the cle_redac column
     *
     * Example usage:
     * <code>
     * $query->filterByCleRedac('fooValue');   // WHERE cle_redac = 'fooValue'
     * $query->filterByCleRedac('%fooValue%'); // WHERE cle_redac LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cleRedac The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTTypePieceQuery The current query, for fluid interface
     */
    public function filterByCleRedac($cleRedac = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cleRedac)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cleRedac)) {
                $cleRedac = str_replace('*', '%', $cleRedac);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTTypePiecePeer::CLE_REDAC, $cleRedac, $comparison);
    }

    /**
     * Filter the query on the id_modele column
     *
     * Example usage:
     * <code>
     * $query->filterByIdModele(1234); // WHERE id_modele = 1234
     * $query->filterByIdModele(array(12, 34)); // WHERE id_modele IN (12, 34)
     * $query->filterByIdModele(array('min' => 12)); // WHERE id_modele >= 12
     * $query->filterByIdModele(array('max' => 12)); // WHERE id_modele <= 12
     * </code>
     *
     * @param     mixed $idModele The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTTypePieceQuery The current query, for fluid interface
     */
    public function filterByIdModele($idModele = null, $comparison = null)
    {
        if (is_array($idModele)) {
            $useMinMax = false;
            if (isset($idModele['min'])) {
                $this->addUsingAlias(CommonTTypePiecePeer::ID_MODELE, $idModele['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idModele['max'])) {
                $this->addUsingAlias(CommonTTypePiecePeer::ID_MODELE, $idModele['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTTypePiecePeer::ID_MODELE, $idModele, $comparison);
    }

    /**
     * Filter the query by a related CommonTDocumentPieceCollaboratif object
     *
     * @param   CommonTDocumentPieceCollaboratif|PropelObjectCollection $commonTDocumentPieceCollaboratif  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTTypePieceQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTDocumentPieceCollaboratif($commonTDocumentPieceCollaboratif, $comparison = null)
    {
        if ($commonTDocumentPieceCollaboratif instanceof CommonTDocumentPieceCollaboratif) {
            return $this
                ->addUsingAlias(CommonTTypePiecePeer::ID, $commonTDocumentPieceCollaboratif->getTypePiece(), $comparison);
        } elseif ($commonTDocumentPieceCollaboratif instanceof PropelObjectCollection) {
            return $this
                ->useCommonTDocumentPieceCollaboratifQuery()
                ->filterByPrimaryKeys($commonTDocumentPieceCollaboratif->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonTDocumentPieceCollaboratif() only accepts arguments of type CommonTDocumentPieceCollaboratif or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTDocumentPieceCollaboratif relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTTypePieceQuery The current query, for fluid interface
     */
    public function joinCommonTDocumentPieceCollaboratif($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTDocumentPieceCollaboratif');

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
            $this->addJoinObject($join, 'CommonTDocumentPieceCollaboratif');
        }

        return $this;
    }

    /**
     * Use the CommonTDocumentPieceCollaboratif relation CommonTDocumentPieceCollaboratif object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTDocumentPieceCollaboratifQuery A secondary query class using the current class as primary query
     */
    public function useCommonTDocumentPieceCollaboratifQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonTDocumentPieceCollaboratif($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTDocumentPieceCollaboratif', 'CommonTDocumentPieceCollaboratifQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTTypePiece $commonTTypePiece Object to remove from the list of results
     *
     * @return CommonTTypePieceQuery The current query, for fluid interface
     */
    public function prune($commonTTypePiece = null)
    {
        if ($commonTTypePiece) {
            $this->addUsingAlias(CommonTTypePiecePeer::ID, $commonTTypePiece->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
