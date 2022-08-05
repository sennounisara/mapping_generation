<?php


/**
 * Base class that represents a query for the 'exec_piece' table.
 *
 * 
 *
 * @method CommonExecPieceQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonExecPieceQuery orderByIdContrat($order = Criteria::ASC) Order by the id_contrat column
 * @method CommonExecPieceQuery orderByIdTypePiece($order = Criteria::ASC) Order by the id_type_piece column
 * @method CommonExecPieceQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method CommonExecPieceQuery orderByTaille($order = Criteria::ASC) Order by the taille column
 * @method CommonExecPieceQuery orderByIdAgentCrea($order = Criteria::ASC) Order by the id_agent_crea column
 * @method CommonExecPieceQuery orderByDateCreat($order = Criteria::ASC) Order by the date_creat column
 * @method CommonExecPieceQuery orderByIdBlob($order = Criteria::ASC) Order by the id_blob column
 *
 * @method CommonExecPieceQuery groupById() Group by the id column
 * @method CommonExecPieceQuery groupByIdContrat() Group by the id_contrat column
 * @method CommonExecPieceQuery groupByIdTypePiece() Group by the id_type_piece column
 * @method CommonExecPieceQuery groupByLibelle() Group by the libelle column
 * @method CommonExecPieceQuery groupByTaille() Group by the taille column
 * @method CommonExecPieceQuery groupByIdAgentCrea() Group by the id_agent_crea column
 * @method CommonExecPieceQuery groupByDateCreat() Group by the date_creat column
 * @method CommonExecPieceQuery groupByIdBlob() Group by the id_blob column
 *
 * @method CommonExecPieceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonExecPieceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonExecPieceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonExecPieceQuery leftJoinCommonExecContrat($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecContrat relation
 * @method CommonExecPieceQuery rightJoinCommonExecContrat($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecContrat relation
 * @method CommonExecPieceQuery innerJoinCommonExecContrat($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecContrat relation
 *
 * @method CommonExecPieceQuery leftJoinCommonExecTypePiece($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecTypePiece relation
 * @method CommonExecPieceQuery rightJoinCommonExecTypePiece($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecTypePiece relation
 * @method CommonExecPieceQuery innerJoinCommonExecTypePiece($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecTypePiece relation
 *
 * @method CommonExecPiece findOne(PropelPDO $con = null) Return the first CommonExecPiece matching the query
 * @method CommonExecPiece findOneOrCreate(PropelPDO $con = null) Return the first CommonExecPiece matching the query, or a new CommonExecPiece object populated from the query conditions when no match is found
 *
 * @method CommonExecPiece findOneByIdContrat(int $id_contrat) Return the first CommonExecPiece filtered by the id_contrat column
 * @method CommonExecPiece findOneByIdTypePiece(int $id_type_piece) Return the first CommonExecPiece filtered by the id_type_piece column
 * @method CommonExecPiece findOneByLibelle(string $libelle) Return the first CommonExecPiece filtered by the libelle column
 * @method CommonExecPiece findOneByTaille(string $taille) Return the first CommonExecPiece filtered by the taille column
 * @method CommonExecPiece findOneByIdAgentCrea(int $id_agent_crea) Return the first CommonExecPiece filtered by the id_agent_crea column
 * @method CommonExecPiece findOneByDateCreat(string $date_creat) Return the first CommonExecPiece filtered by the date_creat column
 * @method CommonExecPiece findOneByIdBlob(int $id_blob) Return the first CommonExecPiece filtered by the id_blob column
 *
 * @method array findById(int $id) Return CommonExecPiece objects filtered by the id column
 * @method array findByIdContrat(int $id_contrat) Return CommonExecPiece objects filtered by the id_contrat column
 * @method array findByIdTypePiece(int $id_type_piece) Return CommonExecPiece objects filtered by the id_type_piece column
 * @method array findByLibelle(string $libelle) Return CommonExecPiece objects filtered by the libelle column
 * @method array findByTaille(string $taille) Return CommonExecPiece objects filtered by the taille column
 * @method array findByIdAgentCrea(int $id_agent_crea) Return CommonExecPiece objects filtered by the id_agent_crea column
 * @method array findByDateCreat(string $date_creat) Return CommonExecPiece objects filtered by the date_creat column
 * @method array findByIdBlob(int $id_blob) Return CommonExecPiece objects filtered by the id_blob column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonExecPieceQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonExecPieceQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonExecPiece', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonExecPieceQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonExecPieceQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonExecPieceQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonExecPieceQuery) {
            return $criteria;
        }
        $query = new CommonExecPieceQuery();
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
     * @return   CommonExecPiece|CommonExecPiece[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonExecPiecePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonExecPiecePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonExecPiece A model object, or null if the key is not found
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
     * @return                 CommonExecPiece A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_contrat`, `id_type_piece`, `libelle`, `taille`, `id_agent_crea`, `date_creat`, `id_blob` FROM `exec_piece` WHERE `id` = :p0';
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
            $obj = new CommonExecPiece();
            $obj->hydrate($row);
            CommonExecPiecePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonExecPiece|CommonExecPiece[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonExecPiece[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonExecPieceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonExecPiecePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonExecPieceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonExecPiecePeer::ID, $keys, Criteria::IN);
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
     * @return CommonExecPieceQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonExecPiecePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonExecPiecePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPiecePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_contrat column
     *
     * Example usage:
     * <code>
     * $query->filterByIdContrat(1234); // WHERE id_contrat = 1234
     * $query->filterByIdContrat(array(12, 34)); // WHERE id_contrat IN (12, 34)
     * $query->filterByIdContrat(array('min' => 12)); // WHERE id_contrat >= 12
     * $query->filterByIdContrat(array('max' => 12)); // WHERE id_contrat <= 12
     * </code>
     *
     * @see       filterByCommonExecContrat()
     *
     * @param     mixed $idContrat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPieceQuery The current query, for fluid interface
     */
    public function filterByIdContrat($idContrat = null, $comparison = null)
    {
        if (is_array($idContrat)) {
            $useMinMax = false;
            if (isset($idContrat['min'])) {
                $this->addUsingAlias(CommonExecPiecePeer::ID_CONTRAT, $idContrat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idContrat['max'])) {
                $this->addUsingAlias(CommonExecPiecePeer::ID_CONTRAT, $idContrat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPiecePeer::ID_CONTRAT, $idContrat, $comparison);
    }

    /**
     * Filter the query on the id_type_piece column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTypePiece(1234); // WHERE id_type_piece = 1234
     * $query->filterByIdTypePiece(array(12, 34)); // WHERE id_type_piece IN (12, 34)
     * $query->filterByIdTypePiece(array('min' => 12)); // WHERE id_type_piece >= 12
     * $query->filterByIdTypePiece(array('max' => 12)); // WHERE id_type_piece <= 12
     * </code>
     *
     * @see       filterByCommonExecTypePiece()
     *
     * @param     mixed $idTypePiece The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPieceQuery The current query, for fluid interface
     */
    public function filterByIdTypePiece($idTypePiece = null, $comparison = null)
    {
        if (is_array($idTypePiece)) {
            $useMinMax = false;
            if (isset($idTypePiece['min'])) {
                $this->addUsingAlias(CommonExecPiecePeer::ID_TYPE_PIECE, $idTypePiece['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypePiece['max'])) {
                $this->addUsingAlias(CommonExecPiecePeer::ID_TYPE_PIECE, $idTypePiece['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPiecePeer::ID_TYPE_PIECE, $idTypePiece, $comparison);
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
     * @return CommonExecPieceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonExecPiecePeer::LIBELLE, $libelle, $comparison);
    }

    /**
     * Filter the query on the taille column
     *
     * Example usage:
     * <code>
     * $query->filterByTaille('fooValue');   // WHERE taille = 'fooValue'
     * $query->filterByTaille('%fooValue%'); // WHERE taille LIKE '%fooValue%'
     * </code>
     *
     * @param     string $taille The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPieceQuery The current query, for fluid interface
     */
    public function filterByTaille($taille = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($taille)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $taille)) {
                $taille = str_replace('*', '%', $taille);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecPiecePeer::TAILLE, $taille, $comparison);
    }

    /**
     * Filter the query on the id_agent_crea column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentCrea(1234); // WHERE id_agent_crea = 1234
     * $query->filterByIdAgentCrea(array(12, 34)); // WHERE id_agent_crea IN (12, 34)
     * $query->filterByIdAgentCrea(array('min' => 12)); // WHERE id_agent_crea >= 12
     * $query->filterByIdAgentCrea(array('max' => 12)); // WHERE id_agent_crea <= 12
     * </code>
     *
     * @param     mixed $idAgentCrea The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPieceQuery The current query, for fluid interface
     */
    public function filterByIdAgentCrea($idAgentCrea = null, $comparison = null)
    {
        if (is_array($idAgentCrea)) {
            $useMinMax = false;
            if (isset($idAgentCrea['min'])) {
                $this->addUsingAlias(CommonExecPiecePeer::ID_AGENT_CREA, $idAgentCrea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentCrea['max'])) {
                $this->addUsingAlias(CommonExecPiecePeer::ID_AGENT_CREA, $idAgentCrea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPiecePeer::ID_AGENT_CREA, $idAgentCrea, $comparison);
    }

    /**
     * Filter the query on the date_creat column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCreat('2011-03-14'); // WHERE date_creat = '2011-03-14'
     * $query->filterByDateCreat('now'); // WHERE date_creat = '2011-03-14'
     * $query->filterByDateCreat(array('max' => 'yesterday')); // WHERE date_creat > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateCreat The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPieceQuery The current query, for fluid interface
     */
    public function filterByDateCreat($dateCreat = null, $comparison = null)
    {
        if (is_array($dateCreat)) {
            $useMinMax = false;
            if (isset($dateCreat['min'])) {
                $this->addUsingAlias(CommonExecPiecePeer::DATE_CREAT, $dateCreat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreat['max'])) {
                $this->addUsingAlias(CommonExecPiecePeer::DATE_CREAT, $dateCreat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPiecePeer::DATE_CREAT, $dateCreat, $comparison);
    }

    /**
     * Filter the query on the id_blob column
     *
     * Example usage:
     * <code>
     * $query->filterByIdBlob(1234); // WHERE id_blob = 1234
     * $query->filterByIdBlob(array(12, 34)); // WHERE id_blob IN (12, 34)
     * $query->filterByIdBlob(array('min' => 12)); // WHERE id_blob >= 12
     * $query->filterByIdBlob(array('max' => 12)); // WHERE id_blob <= 12
     * </code>
     *
     * @param     mixed $idBlob The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPieceQuery The current query, for fluid interface
     */
    public function filterByIdBlob($idBlob = null, $comparison = null)
    {
        if (is_array($idBlob)) {
            $useMinMax = false;
            if (isset($idBlob['min'])) {
                $this->addUsingAlias(CommonExecPiecePeer::ID_BLOB, $idBlob['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBlob['max'])) {
                $this->addUsingAlias(CommonExecPiecePeer::ID_BLOB, $idBlob['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPiecePeer::ID_BLOB, $idBlob, $comparison);
    }

    /**
     * Filter the query by a related CommonExecContrat object
     *
     * @param   CommonExecContrat|PropelObjectCollection $commonExecContrat The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecPieceQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecContrat($commonExecContrat, $comparison = null)
    {
        if ($commonExecContrat instanceof CommonExecContrat) {
            return $this
                ->addUsingAlias(CommonExecPiecePeer::ID_CONTRAT, $commonExecContrat->getIdContrat(), $comparison);
        } elseif ($commonExecContrat instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecPiecePeer::ID_CONTRAT, $commonExecContrat->toKeyValue('PrimaryKey', 'IdContrat'), $comparison);
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
     * @return CommonExecPieceQuery The current query, for fluid interface
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
     * Filter the query by a related CommonExecTypePiece object
     *
     * @param   CommonExecTypePiece|PropelObjectCollection $commonExecTypePiece The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecPieceQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecTypePiece($commonExecTypePiece, $comparison = null)
    {
        if ($commonExecTypePiece instanceof CommonExecTypePiece) {
            return $this
                ->addUsingAlias(CommonExecPiecePeer::ID_TYPE_PIECE, $commonExecTypePiece->getId(), $comparison);
        } elseif ($commonExecTypePiece instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecPiecePeer::ID_TYPE_PIECE, $commonExecTypePiece->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonExecTypePiece() only accepts arguments of type CommonExecTypePiece or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecTypePiece relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecPieceQuery The current query, for fluid interface
     */
    public function joinCommonExecTypePiece($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecTypePiece');

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
            $this->addJoinObject($join, 'CommonExecTypePiece');
        }

        return $this;
    }

    /**
     * Use the CommonExecTypePiece relation CommonExecTypePiece object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecTypePieceQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecTypePieceQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecTypePiece($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecTypePiece', 'CommonExecTypePieceQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonExecPiece $commonExecPiece Object to remove from the list of results
     *
     * @return CommonExecPieceQuery The current query, for fluid interface
     */
    public function prune($commonExecPiece = null)
    {
        if ($commonExecPiece) {
            $this->addUsingAlias(CommonExecPiecePeer::ID, $commonExecPiece->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
