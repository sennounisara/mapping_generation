<?php


/**
 * Base class that represents a query for the 't_document_piece_collaboratif_commentaire' table.
 *
 * 
 *
 * @method CommonTDocumentPieceCollaboratifCommentaireQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonTDocumentPieceCollaboratifCommentaireQuery orderByIdPiece($order = Criteria::ASC) Order by the id_piece column
 * @method CommonTDocumentPieceCollaboratifCommentaireQuery orderByCommentaire($order = Criteria::ASC) Order by the commentaire column
 * @method CommonTDocumentPieceCollaboratifCommentaireQuery orderByIdBlobPj($order = Criteria::ASC) Order by the id_blob_pj column
 * @method CommonTDocumentPieceCollaboratifCommentaireQuery orderByNomPj($order = Criteria::ASC) Order by the nom_pj column
 * @method CommonTDocumentPieceCollaboratifCommentaireQuery orderByDateCommentaire($order = Criteria::ASC) Order by the date_commentaire column
 * @method CommonTDocumentPieceCollaboratifCommentaireQuery orderByIdAgent($order = Criteria::ASC) Order by the id_agent column
 * @method CommonTDocumentPieceCollaboratifCommentaireQuery orderByNomAgent($order = Criteria::ASC) Order by the nom_agent column
 * @method CommonTDocumentPieceCollaboratifCommentaireQuery orderByPrenomAgent($order = Criteria::ASC) Order by the prenom_agent column
 * @method CommonTDocumentPieceCollaboratifCommentaireQuery orderByStatutCommentaire($order = Criteria::ASC) Order by the statut_commentaire column
 * @method CommonTDocumentPieceCollaboratifCommentaireQuery orderByNouvelleVersion($order = Criteria::ASC) Order by the nouvelle_version column
 *
 * @method CommonTDocumentPieceCollaboratifCommentaireQuery groupById() Group by the id column
 * @method CommonTDocumentPieceCollaboratifCommentaireQuery groupByIdPiece() Group by the id_piece column
 * @method CommonTDocumentPieceCollaboratifCommentaireQuery groupByCommentaire() Group by the commentaire column
 * @method CommonTDocumentPieceCollaboratifCommentaireQuery groupByIdBlobPj() Group by the id_blob_pj column
 * @method CommonTDocumentPieceCollaboratifCommentaireQuery groupByNomPj() Group by the nom_pj column
 * @method CommonTDocumentPieceCollaboratifCommentaireQuery groupByDateCommentaire() Group by the date_commentaire column
 * @method CommonTDocumentPieceCollaboratifCommentaireQuery groupByIdAgent() Group by the id_agent column
 * @method CommonTDocumentPieceCollaboratifCommentaireQuery groupByNomAgent() Group by the nom_agent column
 * @method CommonTDocumentPieceCollaboratifCommentaireQuery groupByPrenomAgent() Group by the prenom_agent column
 * @method CommonTDocumentPieceCollaboratifCommentaireQuery groupByStatutCommentaire() Group by the statut_commentaire column
 * @method CommonTDocumentPieceCollaboratifCommentaireQuery groupByNouvelleVersion() Group by the nouvelle_version column
 *
 * @method CommonTDocumentPieceCollaboratifCommentaireQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTDocumentPieceCollaboratifCommentaireQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTDocumentPieceCollaboratifCommentaireQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTDocumentPieceCollaboratifCommentaireQuery leftJoinCommonTDocumentPieceCollaboratif($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTDocumentPieceCollaboratif relation
 * @method CommonTDocumentPieceCollaboratifCommentaireQuery rightJoinCommonTDocumentPieceCollaboratif($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTDocumentPieceCollaboratif relation
 * @method CommonTDocumentPieceCollaboratifCommentaireQuery innerJoinCommonTDocumentPieceCollaboratif($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTDocumentPieceCollaboratif relation
 *
 * @method CommonTDocumentPieceCollaboratifCommentaire findOne(PropelPDO $con = null) Return the first CommonTDocumentPieceCollaboratifCommentaire matching the query
 * @method CommonTDocumentPieceCollaboratifCommentaire findOneOrCreate(PropelPDO $con = null) Return the first CommonTDocumentPieceCollaboratifCommentaire matching the query, or a new CommonTDocumentPieceCollaboratifCommentaire object populated from the query conditions when no match is found
 *
 * @method CommonTDocumentPieceCollaboratifCommentaire findOneByIdPiece(int $id_piece) Return the first CommonTDocumentPieceCollaboratifCommentaire filtered by the id_piece column
 * @method CommonTDocumentPieceCollaboratifCommentaire findOneByCommentaire(string $commentaire) Return the first CommonTDocumentPieceCollaboratifCommentaire filtered by the commentaire column
 * @method CommonTDocumentPieceCollaboratifCommentaire findOneByIdBlobPj(int $id_blob_pj) Return the first CommonTDocumentPieceCollaboratifCommentaire filtered by the id_blob_pj column
 * @method CommonTDocumentPieceCollaboratifCommentaire findOneByNomPj(string $nom_pj) Return the first CommonTDocumentPieceCollaboratifCommentaire filtered by the nom_pj column
 * @method CommonTDocumentPieceCollaboratifCommentaire findOneByDateCommentaire(string $date_commentaire) Return the first CommonTDocumentPieceCollaboratifCommentaire filtered by the date_commentaire column
 * @method CommonTDocumentPieceCollaboratifCommentaire findOneByIdAgent(int $id_agent) Return the first CommonTDocumentPieceCollaboratifCommentaire filtered by the id_agent column
 * @method CommonTDocumentPieceCollaboratifCommentaire findOneByNomAgent(string $nom_agent) Return the first CommonTDocumentPieceCollaboratifCommentaire filtered by the nom_agent column
 * @method CommonTDocumentPieceCollaboratifCommentaire findOneByPrenomAgent(string $prenom_agent) Return the first CommonTDocumentPieceCollaboratifCommentaire filtered by the prenom_agent column
 * @method CommonTDocumentPieceCollaboratifCommentaire findOneByStatutCommentaire(int $statut_commentaire) Return the first CommonTDocumentPieceCollaboratifCommentaire filtered by the statut_commentaire column
 * @method CommonTDocumentPieceCollaboratifCommentaire findOneByNouvelleVersion(int $nouvelle_version) Return the first CommonTDocumentPieceCollaboratifCommentaire filtered by the nouvelle_version column
 *
 * @method array findById(int $id) Return CommonTDocumentPieceCollaboratifCommentaire objects filtered by the id column
 * @method array findByIdPiece(int $id_piece) Return CommonTDocumentPieceCollaboratifCommentaire objects filtered by the id_piece column
 * @method array findByCommentaire(string $commentaire) Return CommonTDocumentPieceCollaboratifCommentaire objects filtered by the commentaire column
 * @method array findByIdBlobPj(int $id_blob_pj) Return CommonTDocumentPieceCollaboratifCommentaire objects filtered by the id_blob_pj column
 * @method array findByNomPj(string $nom_pj) Return CommonTDocumentPieceCollaboratifCommentaire objects filtered by the nom_pj column
 * @method array findByDateCommentaire(string $date_commentaire) Return CommonTDocumentPieceCollaboratifCommentaire objects filtered by the date_commentaire column
 * @method array findByIdAgent(int $id_agent) Return CommonTDocumentPieceCollaboratifCommentaire objects filtered by the id_agent column
 * @method array findByNomAgent(string $nom_agent) Return CommonTDocumentPieceCollaboratifCommentaire objects filtered by the nom_agent column
 * @method array findByPrenomAgent(string $prenom_agent) Return CommonTDocumentPieceCollaboratifCommentaire objects filtered by the prenom_agent column
 * @method array findByStatutCommentaire(int $statut_commentaire) Return CommonTDocumentPieceCollaboratifCommentaire objects filtered by the statut_commentaire column
 * @method array findByNouvelleVersion(int $nouvelle_version) Return CommonTDocumentPieceCollaboratifCommentaire objects filtered by the nouvelle_version column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTDocumentPieceCollaboratifCommentaireQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTDocumentPieceCollaboratifCommentaireQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTDocumentPieceCollaboratifCommentaire', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTDocumentPieceCollaboratifCommentaireQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTDocumentPieceCollaboratifCommentaireQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTDocumentPieceCollaboratifCommentaireQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTDocumentPieceCollaboratifCommentaireQuery) {
            return $criteria;
        }
        $query = new CommonTDocumentPieceCollaboratifCommentaireQuery();
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
     * @return   CommonTDocumentPieceCollaboratifCommentaire|CommonTDocumentPieceCollaboratifCommentaire[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTDocumentPieceCollaboratifCommentairePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTDocumentPieceCollaboratifCommentairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTDocumentPieceCollaboratifCommentaire A model object, or null if the key is not found
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
     * @return                 CommonTDocumentPieceCollaboratifCommentaire A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_piece`, `commentaire`, `id_blob_pj`, `nom_pj`, `date_commentaire`, `id_agent`, `nom_agent`, `prenom_agent`, `statut_commentaire`, `nouvelle_version` FROM `t_document_piece_collaboratif_commentaire` WHERE `id` = :p0';
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
            $obj = new CommonTDocumentPieceCollaboratifCommentaire();
            $obj->hydrate($row);
            CommonTDocumentPieceCollaboratifCommentairePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonTDocumentPieceCollaboratifCommentaire|CommonTDocumentPieceCollaboratifCommentaire[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTDocumentPieceCollaboratifCommentaire[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTDocumentPieceCollaboratifCommentaireQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonTDocumentPieceCollaboratifCommentairePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTDocumentPieceCollaboratifCommentaireQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonTDocumentPieceCollaboratifCommentairePeer::ID, $keys, Criteria::IN);
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
     * @return CommonTDocumentPieceCollaboratifCommentaireQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonTDocumentPieceCollaboratifCommentairePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonTDocumentPieceCollaboratifCommentairePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDocumentPieceCollaboratifCommentairePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_piece column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPiece(1234); // WHERE id_piece = 1234
     * $query->filterByIdPiece(array(12, 34)); // WHERE id_piece IN (12, 34)
     * $query->filterByIdPiece(array('min' => 12)); // WHERE id_piece >= 12
     * $query->filterByIdPiece(array('max' => 12)); // WHERE id_piece <= 12
     * </code>
     *
     * @see       filterByCommonTDocumentPieceCollaboratif()
     *
     * @param     mixed $idPiece The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentPieceCollaboratifCommentaireQuery The current query, for fluid interface
     */
    public function filterByIdPiece($idPiece = null, $comparison = null)
    {
        if (is_array($idPiece)) {
            $useMinMax = false;
            if (isset($idPiece['min'])) {
                $this->addUsingAlias(CommonTDocumentPieceCollaboratifCommentairePeer::ID_PIECE, $idPiece['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idPiece['max'])) {
                $this->addUsingAlias(CommonTDocumentPieceCollaboratifCommentairePeer::ID_PIECE, $idPiece['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDocumentPieceCollaboratifCommentairePeer::ID_PIECE, $idPiece, $comparison);
    }

    /**
     * Filter the query on the commentaire column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentaire('fooValue');   // WHERE commentaire = 'fooValue'
     * $query->filterByCommentaire('%fooValue%'); // WHERE commentaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commentaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentPieceCollaboratifCommentaireQuery The current query, for fluid interface
     */
    public function filterByCommentaire($commentaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commentaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commentaire)) {
                $commentaire = str_replace('*', '%', $commentaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTDocumentPieceCollaboratifCommentairePeer::COMMENTAIRE, $commentaire, $comparison);
    }

    /**
     * Filter the query on the id_blob_pj column
     *
     * Example usage:
     * <code>
     * $query->filterByIdBlobPj(1234); // WHERE id_blob_pj = 1234
     * $query->filterByIdBlobPj(array(12, 34)); // WHERE id_blob_pj IN (12, 34)
     * $query->filterByIdBlobPj(array('min' => 12)); // WHERE id_blob_pj >= 12
     * $query->filterByIdBlobPj(array('max' => 12)); // WHERE id_blob_pj <= 12
     * </code>
     *
     * @param     mixed $idBlobPj The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentPieceCollaboratifCommentaireQuery The current query, for fluid interface
     */
    public function filterByIdBlobPj($idBlobPj = null, $comparison = null)
    {
        if (is_array($idBlobPj)) {
            $useMinMax = false;
            if (isset($idBlobPj['min'])) {
                $this->addUsingAlias(CommonTDocumentPieceCollaboratifCommentairePeer::ID_BLOB_PJ, $idBlobPj['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBlobPj['max'])) {
                $this->addUsingAlias(CommonTDocumentPieceCollaboratifCommentairePeer::ID_BLOB_PJ, $idBlobPj['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDocumentPieceCollaboratifCommentairePeer::ID_BLOB_PJ, $idBlobPj, $comparison);
    }

    /**
     * Filter the query on the nom_pj column
     *
     * Example usage:
     * <code>
     * $query->filterByNomPj('fooValue');   // WHERE nom_pj = 'fooValue'
     * $query->filterByNomPj('%fooValue%'); // WHERE nom_pj LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomPj The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentPieceCollaboratifCommentaireQuery The current query, for fluid interface
     */
    public function filterByNomPj($nomPj = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomPj)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomPj)) {
                $nomPj = str_replace('*', '%', $nomPj);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTDocumentPieceCollaboratifCommentairePeer::NOM_PJ, $nomPj, $comparison);
    }

    /**
     * Filter the query on the date_commentaire column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCommentaire('2011-03-14'); // WHERE date_commentaire = '2011-03-14'
     * $query->filterByDateCommentaire('now'); // WHERE date_commentaire = '2011-03-14'
     * $query->filterByDateCommentaire(array('max' => 'yesterday')); // WHERE date_commentaire > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateCommentaire The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentPieceCollaboratifCommentaireQuery The current query, for fluid interface
     */
    public function filterByDateCommentaire($dateCommentaire = null, $comparison = null)
    {
        if (is_array($dateCommentaire)) {
            $useMinMax = false;
            if (isset($dateCommentaire['min'])) {
                $this->addUsingAlias(CommonTDocumentPieceCollaboratifCommentairePeer::DATE_COMMENTAIRE, $dateCommentaire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCommentaire['max'])) {
                $this->addUsingAlias(CommonTDocumentPieceCollaboratifCommentairePeer::DATE_COMMENTAIRE, $dateCommentaire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDocumentPieceCollaboratifCommentairePeer::DATE_COMMENTAIRE, $dateCommentaire, $comparison);
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
     * @return CommonTDocumentPieceCollaboratifCommentaireQuery The current query, for fluid interface
     */
    public function filterByIdAgent($idAgent = null, $comparison = null)
    {
        if (is_array($idAgent)) {
            $useMinMax = false;
            if (isset($idAgent['min'])) {
                $this->addUsingAlias(CommonTDocumentPieceCollaboratifCommentairePeer::ID_AGENT, $idAgent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgent['max'])) {
                $this->addUsingAlias(CommonTDocumentPieceCollaboratifCommentairePeer::ID_AGENT, $idAgent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDocumentPieceCollaboratifCommentairePeer::ID_AGENT, $idAgent, $comparison);
    }

    /**
     * Filter the query on the nom_agent column
     *
     * Example usage:
     * <code>
     * $query->filterByNomAgent('fooValue');   // WHERE nom_agent = 'fooValue'
     * $query->filterByNomAgent('%fooValue%'); // WHERE nom_agent LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomAgent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentPieceCollaboratifCommentaireQuery The current query, for fluid interface
     */
    public function filterByNomAgent($nomAgent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomAgent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomAgent)) {
                $nomAgent = str_replace('*', '%', $nomAgent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTDocumentPieceCollaboratifCommentairePeer::NOM_AGENT, $nomAgent, $comparison);
    }

    /**
     * Filter the query on the prenom_agent column
     *
     * Example usage:
     * <code>
     * $query->filterByPrenomAgent('fooValue');   // WHERE prenom_agent = 'fooValue'
     * $query->filterByPrenomAgent('%fooValue%'); // WHERE prenom_agent LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prenomAgent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentPieceCollaboratifCommentaireQuery The current query, for fluid interface
     */
    public function filterByPrenomAgent($prenomAgent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prenomAgent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prenomAgent)) {
                $prenomAgent = str_replace('*', '%', $prenomAgent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTDocumentPieceCollaboratifCommentairePeer::PRENOM_AGENT, $prenomAgent, $comparison);
    }

    /**
     * Filter the query on the statut_commentaire column
     *
     * Example usage:
     * <code>
     * $query->filterByStatutCommentaire(1234); // WHERE statut_commentaire = 1234
     * $query->filterByStatutCommentaire(array(12, 34)); // WHERE statut_commentaire IN (12, 34)
     * $query->filterByStatutCommentaire(array('min' => 12)); // WHERE statut_commentaire >= 12
     * $query->filterByStatutCommentaire(array('max' => 12)); // WHERE statut_commentaire <= 12
     * </code>
     *
     * @param     mixed $statutCommentaire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentPieceCollaboratifCommentaireQuery The current query, for fluid interface
     */
    public function filterByStatutCommentaire($statutCommentaire = null, $comparison = null)
    {
        if (is_array($statutCommentaire)) {
            $useMinMax = false;
            if (isset($statutCommentaire['min'])) {
                $this->addUsingAlias(CommonTDocumentPieceCollaboratifCommentairePeer::STATUT_COMMENTAIRE, $statutCommentaire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statutCommentaire['max'])) {
                $this->addUsingAlias(CommonTDocumentPieceCollaboratifCommentairePeer::STATUT_COMMENTAIRE, $statutCommentaire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDocumentPieceCollaboratifCommentairePeer::STATUT_COMMENTAIRE, $statutCommentaire, $comparison);
    }

    /**
     * Filter the query on the nouvelle_version column
     *
     * Example usage:
     * <code>
     * $query->filterByNouvelleVersion(1234); // WHERE nouvelle_version = 1234
     * $query->filterByNouvelleVersion(array(12, 34)); // WHERE nouvelle_version IN (12, 34)
     * $query->filterByNouvelleVersion(array('min' => 12)); // WHERE nouvelle_version >= 12
     * $query->filterByNouvelleVersion(array('max' => 12)); // WHERE nouvelle_version <= 12
     * </code>
     *
     * @param     mixed $nouvelleVersion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentPieceCollaboratifCommentaireQuery The current query, for fluid interface
     */
    public function filterByNouvelleVersion($nouvelleVersion = null, $comparison = null)
    {
        if (is_array($nouvelleVersion)) {
            $useMinMax = false;
            if (isset($nouvelleVersion['min'])) {
                $this->addUsingAlias(CommonTDocumentPieceCollaboratifCommentairePeer::NOUVELLE_VERSION, $nouvelleVersion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($nouvelleVersion['max'])) {
                $this->addUsingAlias(CommonTDocumentPieceCollaboratifCommentairePeer::NOUVELLE_VERSION, $nouvelleVersion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDocumentPieceCollaboratifCommentairePeer::NOUVELLE_VERSION, $nouvelleVersion, $comparison);
    }

    /**
     * Filter the query by a related CommonTDocumentPieceCollaboratif object
     *
     * @param   CommonTDocumentPieceCollaboratif|PropelObjectCollection $commonTDocumentPieceCollaboratif The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTDocumentPieceCollaboratifCommentaireQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTDocumentPieceCollaboratif($commonTDocumentPieceCollaboratif, $comparison = null)
    {
        if ($commonTDocumentPieceCollaboratif instanceof CommonTDocumentPieceCollaboratif) {
            return $this
                ->addUsingAlias(CommonTDocumentPieceCollaboratifCommentairePeer::ID_PIECE, $commonTDocumentPieceCollaboratif->getIdDocumentPiece(), $comparison);
        } elseif ($commonTDocumentPieceCollaboratif instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonTDocumentPieceCollaboratifCommentairePeer::ID_PIECE, $commonTDocumentPieceCollaboratif->toKeyValue('PrimaryKey', 'IdDocumentPiece'), $comparison);
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
     * @return CommonTDocumentPieceCollaboratifCommentaireQuery The current query, for fluid interface
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
     * @param   CommonTDocumentPieceCollaboratifCommentaire $commonTDocumentPieceCollaboratifCommentaire Object to remove from the list of results
     *
     * @return CommonTDocumentPieceCollaboratifCommentaireQuery The current query, for fluid interface
     */
    public function prune($commonTDocumentPieceCollaboratifCommentaire = null)
    {
        if ($commonTDocumentPieceCollaboratifCommentaire) {
            $this->addUsingAlias(CommonTDocumentPieceCollaboratifCommentairePeer::ID, $commonTDocumentPieceCollaboratifCommentaire->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
