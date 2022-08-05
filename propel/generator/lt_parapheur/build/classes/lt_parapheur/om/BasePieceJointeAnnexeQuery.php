<?php


/**
 * Base class that represents a query for the 'piece_jointe_annexe' table.
 *
 * 
 *
 * @method PieceJointeAnnexeQuery orderByIdPieceJointeAnnexe($order = Criteria::ASC) Order by the ID_PIECE_JOINTE_ANNEXE column
 * @method PieceJointeAnnexeQuery orderByIdBlob($order = Criteria::ASC) Order by the ID_BLOB column
 * @method PieceJointeAnnexeQuery orderByRevision($order = Criteria::ASC) Order by the REVISION column
 * @method PieceJointeAnnexeQuery orderByIdDemande($order = Criteria::ASC) Order by the ID_DEMANDE column
 * @method PieceJointeAnnexeQuery orderByNomPiece($order = Criteria::ASC) Order by the NOM_PIECE column
 * @method PieceJointeAnnexeQuery orderByEmplacementPiece($order = Criteria::ASC) Order by the EMPLACEMENT_PIECE column
 * @method PieceJointeAnnexeQuery orderByTag($order = Criteria::ASC) Order by the TAG column
 * @method PieceJointeAnnexeQuery orderByIdTable($order = Criteria::ASC) Order by the ID_TABLE column
 *
 * @method PieceJointeAnnexeQuery groupByIdPieceJointeAnnexe() Group by the ID_PIECE_JOINTE_ANNEXE column
 * @method PieceJointeAnnexeQuery groupByIdBlob() Group by the ID_BLOB column
 * @method PieceJointeAnnexeQuery groupByRevision() Group by the REVISION column
 * @method PieceJointeAnnexeQuery groupByIdDemande() Group by the ID_DEMANDE column
 * @method PieceJointeAnnexeQuery groupByNomPiece() Group by the NOM_PIECE column
 * @method PieceJointeAnnexeQuery groupByEmplacementPiece() Group by the EMPLACEMENT_PIECE column
 * @method PieceJointeAnnexeQuery groupByTag() Group by the TAG column
 * @method PieceJointeAnnexeQuery groupByIdTable() Group by the ID_TABLE column
 *
 * @method PieceJointeAnnexeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method PieceJointeAnnexeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method PieceJointeAnnexeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method PieceJointeAnnexe findOne(PropelPDO $con = null) Return the first PieceJointeAnnexe matching the query
 * @method PieceJointeAnnexe findOneOrCreate(PropelPDO $con = null) Return the first PieceJointeAnnexe matching the query, or a new PieceJointeAnnexe object populated from the query conditions when no match is found
 *
 * @method PieceJointeAnnexe findOneByIdBlob(int $ID_BLOB) Return the first PieceJointeAnnexe filtered by the ID_BLOB column
 * @method PieceJointeAnnexe findOneByRevision(int $REVISION) Return the first PieceJointeAnnexe filtered by the REVISION column
 * @method PieceJointeAnnexe findOneByIdDemande(int $ID_DEMANDE) Return the first PieceJointeAnnexe filtered by the ID_DEMANDE column
 * @method PieceJointeAnnexe findOneByNomPiece(string $NOM_PIECE) Return the first PieceJointeAnnexe filtered by the NOM_PIECE column
 * @method PieceJointeAnnexe findOneByEmplacementPiece(string $EMPLACEMENT_PIECE) Return the first PieceJointeAnnexe filtered by the EMPLACEMENT_PIECE column
 * @method PieceJointeAnnexe findOneByTag(string $TAG) Return the first PieceJointeAnnexe filtered by the TAG column
 * @method PieceJointeAnnexe findOneByIdTable(int $ID_TABLE) Return the first PieceJointeAnnexe filtered by the ID_TABLE column
 *
 * @method array findByIdPieceJointeAnnexe(int $ID_PIECE_JOINTE_ANNEXE) Return PieceJointeAnnexe objects filtered by the ID_PIECE_JOINTE_ANNEXE column
 * @method array findByIdBlob(int $ID_BLOB) Return PieceJointeAnnexe objects filtered by the ID_BLOB column
 * @method array findByRevision(int $REVISION) Return PieceJointeAnnexe objects filtered by the REVISION column
 * @method array findByIdDemande(int $ID_DEMANDE) Return PieceJointeAnnexe objects filtered by the ID_DEMANDE column
 * @method array findByNomPiece(string $NOM_PIECE) Return PieceJointeAnnexe objects filtered by the NOM_PIECE column
 * @method array findByEmplacementPiece(string $EMPLACEMENT_PIECE) Return PieceJointeAnnexe objects filtered by the EMPLACEMENT_PIECE column
 * @method array findByTag(string $TAG) Return PieceJointeAnnexe objects filtered by the TAG column
 * @method array findByIdTable(int $ID_TABLE) Return PieceJointeAnnexe objects filtered by the ID_TABLE column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BasePieceJointeAnnexeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BasePieceJointeAnnexeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'PieceJointeAnnexe', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new PieceJointeAnnexeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   PieceJointeAnnexeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return PieceJointeAnnexeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof PieceJointeAnnexeQuery) {
            return $criteria;
        }
        $query = new PieceJointeAnnexeQuery();
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
     * @return   PieceJointeAnnexe|PieceJointeAnnexe[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = PieceJointeAnnexePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(PieceJointeAnnexePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 PieceJointeAnnexe A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdPieceJointeAnnexe($key, $con = null)
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
     * @return                 PieceJointeAnnexe A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_PIECE_JOINTE_ANNEXE`, `ID_BLOB`, `REVISION`, `ID_DEMANDE`, `NOM_PIECE`, `EMPLACEMENT_PIECE`, `TAG`, `ID_TABLE` FROM `piece_jointe_annexe` WHERE `ID_PIECE_JOINTE_ANNEXE` = :p0';
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
            $obj = new PieceJointeAnnexe();
            $obj->hydrate($row);
            PieceJointeAnnexePeer::addInstanceToPool($obj, (string) $key);
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
     * @return PieceJointeAnnexe|PieceJointeAnnexe[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|PieceJointeAnnexe[]|mixed the list of results, formatted by the current formatter
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
     * @return PieceJointeAnnexeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(PieceJointeAnnexePeer::ID_PIECE_JOINTE_ANNEXE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return PieceJointeAnnexeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(PieceJointeAnnexePeer::ID_PIECE_JOINTE_ANNEXE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID_PIECE_JOINTE_ANNEXE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPieceJointeAnnexe(1234); // WHERE ID_PIECE_JOINTE_ANNEXE = 1234
     * $query->filterByIdPieceJointeAnnexe(array(12, 34)); // WHERE ID_PIECE_JOINTE_ANNEXE IN (12, 34)
     * $query->filterByIdPieceJointeAnnexe(array('min' => 12)); // WHERE ID_PIECE_JOINTE_ANNEXE >= 12
     * $query->filterByIdPieceJointeAnnexe(array('max' => 12)); // WHERE ID_PIECE_JOINTE_ANNEXE <= 12
     * </code>
     *
     * @param     mixed $idPieceJointeAnnexe The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PieceJointeAnnexeQuery The current query, for fluid interface
     */
    public function filterByIdPieceJointeAnnexe($idPieceJointeAnnexe = null, $comparison = null)
    {
        if (is_array($idPieceJointeAnnexe)) {
            $useMinMax = false;
            if (isset($idPieceJointeAnnexe['min'])) {
                $this->addUsingAlias(PieceJointeAnnexePeer::ID_PIECE_JOINTE_ANNEXE, $idPieceJointeAnnexe['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idPieceJointeAnnexe['max'])) {
                $this->addUsingAlias(PieceJointeAnnexePeer::ID_PIECE_JOINTE_ANNEXE, $idPieceJointeAnnexe['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PieceJointeAnnexePeer::ID_PIECE_JOINTE_ANNEXE, $idPieceJointeAnnexe, $comparison);
    }

    /**
     * Filter the query on the ID_BLOB column
     *
     * Example usage:
     * <code>
     * $query->filterByIdBlob(1234); // WHERE ID_BLOB = 1234
     * $query->filterByIdBlob(array(12, 34)); // WHERE ID_BLOB IN (12, 34)
     * $query->filterByIdBlob(array('min' => 12)); // WHERE ID_BLOB >= 12
     * $query->filterByIdBlob(array('max' => 12)); // WHERE ID_BLOB <= 12
     * </code>
     *
     * @param     mixed $idBlob The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PieceJointeAnnexeQuery The current query, for fluid interface
     */
    public function filterByIdBlob($idBlob = null, $comparison = null)
    {
        if (is_array($idBlob)) {
            $useMinMax = false;
            if (isset($idBlob['min'])) {
                $this->addUsingAlias(PieceJointeAnnexePeer::ID_BLOB, $idBlob['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBlob['max'])) {
                $this->addUsingAlias(PieceJointeAnnexePeer::ID_BLOB, $idBlob['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PieceJointeAnnexePeer::ID_BLOB, $idBlob, $comparison);
    }

    /**
     * Filter the query on the REVISION column
     *
     * Example usage:
     * <code>
     * $query->filterByRevision(1234); // WHERE REVISION = 1234
     * $query->filterByRevision(array(12, 34)); // WHERE REVISION IN (12, 34)
     * $query->filterByRevision(array('min' => 12)); // WHERE REVISION >= 12
     * $query->filterByRevision(array('max' => 12)); // WHERE REVISION <= 12
     * </code>
     *
     * @param     mixed $revision The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PieceJointeAnnexeQuery The current query, for fluid interface
     */
    public function filterByRevision($revision = null, $comparison = null)
    {
        if (is_array($revision)) {
            $useMinMax = false;
            if (isset($revision['min'])) {
                $this->addUsingAlias(PieceJointeAnnexePeer::REVISION, $revision['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($revision['max'])) {
                $this->addUsingAlias(PieceJointeAnnexePeer::REVISION, $revision['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PieceJointeAnnexePeer::REVISION, $revision, $comparison);
    }

    /**
     * Filter the query on the ID_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDemande(1234); // WHERE ID_DEMANDE = 1234
     * $query->filterByIdDemande(array(12, 34)); // WHERE ID_DEMANDE IN (12, 34)
     * $query->filterByIdDemande(array('min' => 12)); // WHERE ID_DEMANDE >= 12
     * $query->filterByIdDemande(array('max' => 12)); // WHERE ID_DEMANDE <= 12
     * </code>
     *
     * @param     mixed $idDemande The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PieceJointeAnnexeQuery The current query, for fluid interface
     */
    public function filterByIdDemande($idDemande = null, $comparison = null)
    {
        if (is_array($idDemande)) {
            $useMinMax = false;
            if (isset($idDemande['min'])) {
                $this->addUsingAlias(PieceJointeAnnexePeer::ID_DEMANDE, $idDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDemande['max'])) {
                $this->addUsingAlias(PieceJointeAnnexePeer::ID_DEMANDE, $idDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PieceJointeAnnexePeer::ID_DEMANDE, $idDemande, $comparison);
    }

    /**
     * Filter the query on the NOM_PIECE column
     *
     * Example usage:
     * <code>
     * $query->filterByNomPiece('fooValue');   // WHERE NOM_PIECE = 'fooValue'
     * $query->filterByNomPiece('%fooValue%'); // WHERE NOM_PIECE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomPiece The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PieceJointeAnnexeQuery The current query, for fluid interface
     */
    public function filterByNomPiece($nomPiece = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomPiece)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomPiece)) {
                $nomPiece = str_replace('*', '%', $nomPiece);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PieceJointeAnnexePeer::NOM_PIECE, $nomPiece, $comparison);
    }

    /**
     * Filter the query on the EMPLACEMENT_PIECE column
     *
     * Example usage:
     * <code>
     * $query->filterByEmplacementPiece('fooValue');   // WHERE EMPLACEMENT_PIECE = 'fooValue'
     * $query->filterByEmplacementPiece('%fooValue%'); // WHERE EMPLACEMENT_PIECE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $emplacementPiece The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PieceJointeAnnexeQuery The current query, for fluid interface
     */
    public function filterByEmplacementPiece($emplacementPiece = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($emplacementPiece)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $emplacementPiece)) {
                $emplacementPiece = str_replace('*', '%', $emplacementPiece);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PieceJointeAnnexePeer::EMPLACEMENT_PIECE, $emplacementPiece, $comparison);
    }

    /**
     * Filter the query on the TAG column
     *
     * Example usage:
     * <code>
     * $query->filterByTag('fooValue');   // WHERE TAG = 'fooValue'
     * $query->filterByTag('%fooValue%'); // WHERE TAG LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tag The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PieceJointeAnnexeQuery The current query, for fluid interface
     */
    public function filterByTag($tag = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tag)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tag)) {
                $tag = str_replace('*', '%', $tag);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(PieceJointeAnnexePeer::TAG, $tag, $comparison);
    }

    /**
     * Filter the query on the ID_TABLE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTable(1234); // WHERE ID_TABLE = 1234
     * $query->filterByIdTable(array(12, 34)); // WHERE ID_TABLE IN (12, 34)
     * $query->filterByIdTable(array('min' => 12)); // WHERE ID_TABLE >= 12
     * $query->filterByIdTable(array('max' => 12)); // WHERE ID_TABLE <= 12
     * </code>
     *
     * @param     mixed $idTable The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return PieceJointeAnnexeQuery The current query, for fluid interface
     */
    public function filterByIdTable($idTable = null, $comparison = null)
    {
        if (is_array($idTable)) {
            $useMinMax = false;
            if (isset($idTable['min'])) {
                $this->addUsingAlias(PieceJointeAnnexePeer::ID_TABLE, $idTable['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTable['max'])) {
                $this->addUsingAlias(PieceJointeAnnexePeer::ID_TABLE, $idTable['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(PieceJointeAnnexePeer::ID_TABLE, $idTable, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   PieceJointeAnnexe $pieceJointeAnnexe Object to remove from the list of results
     *
     * @return PieceJointeAnnexeQuery The current query, for fluid interface
     */
    public function prune($pieceJointeAnnexe = null)
    {
        if ($pieceJointeAnnexe) {
            $this->addUsingAlias(PieceJointeAnnexePeer::ID_PIECE_JOINTE_ANNEXE, $pieceJointeAnnexe->getIdPieceJointeAnnexe(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
