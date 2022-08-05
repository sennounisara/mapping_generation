<?php


/**
 * Base class that represents a query for the 't_document_piece_collaboratif_version' table.
 *
 * 
 *
 * @method CommonTDocumentPieceCollaboratifVersionQuery orderByIdVersionPieceDocument($order = Criteria::ASC) Order by the id_version_piece_document column
 * @method CommonTDocumentPieceCollaboratifVersionQuery orderByIdPiece($order = Criteria::ASC) Order by the id_piece column
 * @method CommonTDocumentPieceCollaboratifVersionQuery orderByDateCreation($order = Criteria::ASC) Order by the date_creation column
 * @method CommonTDocumentPieceCollaboratifVersionQuery orderByDateModification($order = Criteria::ASC) Order by the date_modification column
 * @method CommonTDocumentPieceCollaboratifVersionQuery orderByHash($order = Criteria::ASC) Order by the hash column
 * @method CommonTDocumentPieceCollaboratifVersionQuery orderByIdBlob($order = Criteria::ASC) Order by the id_blob column
 * @method CommonTDocumentPieceCollaboratifVersionQuery orderByTaillePiece($order = Criteria::ASC) Order by the taille_piece column
 * @method CommonTDocumentPieceCollaboratifVersionQuery orderByExtensionDocument($order = Criteria::ASC) Order by the extension_document column
 * @method CommonTDocumentPieceCollaboratifVersionQuery orderByVersion($order = Criteria::ASC) Order by the version column
 * @method CommonTDocumentPieceCollaboratifVersionQuery orderByNomAgent($order = Criteria::ASC) Order by the nom_agent column
 * @method CommonTDocumentPieceCollaboratifVersionQuery orderByPrenomAgent($order = Criteria::ASC) Order by the prenom_agent column
 * @method CommonTDocumentPieceCollaboratifVersionQuery orderByNomDocument($order = Criteria::ASC) Order by the nom_document column
 *
 * @method CommonTDocumentPieceCollaboratifVersionQuery groupByIdVersionPieceDocument() Group by the id_version_piece_document column
 * @method CommonTDocumentPieceCollaboratifVersionQuery groupByIdPiece() Group by the id_piece column
 * @method CommonTDocumentPieceCollaboratifVersionQuery groupByDateCreation() Group by the date_creation column
 * @method CommonTDocumentPieceCollaboratifVersionQuery groupByDateModification() Group by the date_modification column
 * @method CommonTDocumentPieceCollaboratifVersionQuery groupByHash() Group by the hash column
 * @method CommonTDocumentPieceCollaboratifVersionQuery groupByIdBlob() Group by the id_blob column
 * @method CommonTDocumentPieceCollaboratifVersionQuery groupByTaillePiece() Group by the taille_piece column
 * @method CommonTDocumentPieceCollaboratifVersionQuery groupByExtensionDocument() Group by the extension_document column
 * @method CommonTDocumentPieceCollaboratifVersionQuery groupByVersion() Group by the version column
 * @method CommonTDocumentPieceCollaboratifVersionQuery groupByNomAgent() Group by the nom_agent column
 * @method CommonTDocumentPieceCollaboratifVersionQuery groupByPrenomAgent() Group by the prenom_agent column
 * @method CommonTDocumentPieceCollaboratifVersionQuery groupByNomDocument() Group by the nom_document column
 *
 * @method CommonTDocumentPieceCollaboratifVersionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTDocumentPieceCollaboratifVersionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTDocumentPieceCollaboratifVersionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTDocumentPieceCollaboratifVersionQuery leftJoinCommonTDocumentPieceCollaboratif($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTDocumentPieceCollaboratif relation
 * @method CommonTDocumentPieceCollaboratifVersionQuery rightJoinCommonTDocumentPieceCollaboratif($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTDocumentPieceCollaboratif relation
 * @method CommonTDocumentPieceCollaboratifVersionQuery innerJoinCommonTDocumentPieceCollaboratif($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTDocumentPieceCollaboratif relation
 *
 * @method CommonTDocumentPieceCollaboratifVersion findOne(PropelPDO $con = null) Return the first CommonTDocumentPieceCollaboratifVersion matching the query
 * @method CommonTDocumentPieceCollaboratifVersion findOneOrCreate(PropelPDO $con = null) Return the first CommonTDocumentPieceCollaboratifVersion matching the query, or a new CommonTDocumentPieceCollaboratifVersion object populated from the query conditions when no match is found
 *
 * @method CommonTDocumentPieceCollaboratifVersion findOneByIdPiece(int $id_piece) Return the first CommonTDocumentPieceCollaboratifVersion filtered by the id_piece column
 * @method CommonTDocumentPieceCollaboratifVersion findOneByDateCreation(string $date_creation) Return the first CommonTDocumentPieceCollaboratifVersion filtered by the date_creation column
 * @method CommonTDocumentPieceCollaboratifVersion findOneByDateModification(string $date_modification) Return the first CommonTDocumentPieceCollaboratifVersion filtered by the date_modification column
 * @method CommonTDocumentPieceCollaboratifVersion findOneByHash(string $hash) Return the first CommonTDocumentPieceCollaboratifVersion filtered by the hash column
 * @method CommonTDocumentPieceCollaboratifVersion findOneByIdBlob(int $id_blob) Return the first CommonTDocumentPieceCollaboratifVersion filtered by the id_blob column
 * @method CommonTDocumentPieceCollaboratifVersion findOneByTaillePiece(string $taille_piece) Return the first CommonTDocumentPieceCollaboratifVersion filtered by the taille_piece column
 * @method CommonTDocumentPieceCollaboratifVersion findOneByExtensionDocument(string $extension_document) Return the first CommonTDocumentPieceCollaboratifVersion filtered by the extension_document column
 * @method CommonTDocumentPieceCollaboratifVersion findOneByVersion(string $version) Return the first CommonTDocumentPieceCollaboratifVersion filtered by the version column
 * @method CommonTDocumentPieceCollaboratifVersion findOneByNomAgent(string $nom_agent) Return the first CommonTDocumentPieceCollaboratifVersion filtered by the nom_agent column
 * @method CommonTDocumentPieceCollaboratifVersion findOneByPrenomAgent(string $prenom_agent) Return the first CommonTDocumentPieceCollaboratifVersion filtered by the prenom_agent column
 * @method CommonTDocumentPieceCollaboratifVersion findOneByNomDocument(string $nom_document) Return the first CommonTDocumentPieceCollaboratifVersion filtered by the nom_document column
 *
 * @method array findByIdVersionPieceDocument(int $id_version_piece_document) Return CommonTDocumentPieceCollaboratifVersion objects filtered by the id_version_piece_document column
 * @method array findByIdPiece(int $id_piece) Return CommonTDocumentPieceCollaboratifVersion objects filtered by the id_piece column
 * @method array findByDateCreation(string $date_creation) Return CommonTDocumentPieceCollaboratifVersion objects filtered by the date_creation column
 * @method array findByDateModification(string $date_modification) Return CommonTDocumentPieceCollaboratifVersion objects filtered by the date_modification column
 * @method array findByHash(string $hash) Return CommonTDocumentPieceCollaboratifVersion objects filtered by the hash column
 * @method array findByIdBlob(int $id_blob) Return CommonTDocumentPieceCollaboratifVersion objects filtered by the id_blob column
 * @method array findByTaillePiece(string $taille_piece) Return CommonTDocumentPieceCollaboratifVersion objects filtered by the taille_piece column
 * @method array findByExtensionDocument(string $extension_document) Return CommonTDocumentPieceCollaboratifVersion objects filtered by the extension_document column
 * @method array findByVersion(string $version) Return CommonTDocumentPieceCollaboratifVersion objects filtered by the version column
 * @method array findByNomAgent(string $nom_agent) Return CommonTDocumentPieceCollaboratifVersion objects filtered by the nom_agent column
 * @method array findByPrenomAgent(string $prenom_agent) Return CommonTDocumentPieceCollaboratifVersion objects filtered by the prenom_agent column
 * @method array findByNomDocument(string $nom_document) Return CommonTDocumentPieceCollaboratifVersion objects filtered by the nom_document column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTDocumentPieceCollaboratifVersionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTDocumentPieceCollaboratifVersionQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTDocumentPieceCollaboratifVersion', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTDocumentPieceCollaboratifVersionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTDocumentPieceCollaboratifVersionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTDocumentPieceCollaboratifVersionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTDocumentPieceCollaboratifVersionQuery) {
            return $criteria;
        }
        $query = new CommonTDocumentPieceCollaboratifVersionQuery();
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
     * @return   CommonTDocumentPieceCollaboratifVersion|CommonTDocumentPieceCollaboratifVersion[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTDocumentPieceCollaboratifVersionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTDocumentPieceCollaboratifVersionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTDocumentPieceCollaboratifVersion A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdVersionPieceDocument($key, $con = null)
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
     * @return                 CommonTDocumentPieceCollaboratifVersion A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_version_piece_document`, `id_piece`, `date_creation`, `date_modification`, `hash`, `id_blob`, `taille_piece`, `extension_document`, `version`, `nom_agent`, `prenom_agent`, `nom_document` FROM `t_document_piece_collaboratif_version` WHERE `id_version_piece_document` = :p0';
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
            $obj = new CommonTDocumentPieceCollaboratifVersion();
            $obj->hydrate($row);
            CommonTDocumentPieceCollaboratifVersionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonTDocumentPieceCollaboratifVersion|CommonTDocumentPieceCollaboratifVersion[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTDocumentPieceCollaboratifVersion[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTDocumentPieceCollaboratifVersionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonTDocumentPieceCollaboratifVersionPeer::ID_VERSION_PIECE_DOCUMENT, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTDocumentPieceCollaboratifVersionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonTDocumentPieceCollaboratifVersionPeer::ID_VERSION_PIECE_DOCUMENT, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_version_piece_document column
     *
     * Example usage:
     * <code>
     * $query->filterByIdVersionPieceDocument(1234); // WHERE id_version_piece_document = 1234
     * $query->filterByIdVersionPieceDocument(array(12, 34)); // WHERE id_version_piece_document IN (12, 34)
     * $query->filterByIdVersionPieceDocument(array('min' => 12)); // WHERE id_version_piece_document >= 12
     * $query->filterByIdVersionPieceDocument(array('max' => 12)); // WHERE id_version_piece_document <= 12
     * </code>
     *
     * @param     mixed $idVersionPieceDocument The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentPieceCollaboratifVersionQuery The current query, for fluid interface
     */
    public function filterByIdVersionPieceDocument($idVersionPieceDocument = null, $comparison = null)
    {
        if (is_array($idVersionPieceDocument)) {
            $useMinMax = false;
            if (isset($idVersionPieceDocument['min'])) {
                $this->addUsingAlias(CommonTDocumentPieceCollaboratifVersionPeer::ID_VERSION_PIECE_DOCUMENT, $idVersionPieceDocument['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idVersionPieceDocument['max'])) {
                $this->addUsingAlias(CommonTDocumentPieceCollaboratifVersionPeer::ID_VERSION_PIECE_DOCUMENT, $idVersionPieceDocument['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDocumentPieceCollaboratifVersionPeer::ID_VERSION_PIECE_DOCUMENT, $idVersionPieceDocument, $comparison);
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
     * @return CommonTDocumentPieceCollaboratifVersionQuery The current query, for fluid interface
     */
    public function filterByIdPiece($idPiece = null, $comparison = null)
    {
        if (is_array($idPiece)) {
            $useMinMax = false;
            if (isset($idPiece['min'])) {
                $this->addUsingAlias(CommonTDocumentPieceCollaboratifVersionPeer::ID_PIECE, $idPiece['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idPiece['max'])) {
                $this->addUsingAlias(CommonTDocumentPieceCollaboratifVersionPeer::ID_PIECE, $idPiece['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDocumentPieceCollaboratifVersionPeer::ID_PIECE, $idPiece, $comparison);
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
     * @return CommonTDocumentPieceCollaboratifVersionQuery The current query, for fluid interface
     */
    public function filterByDateCreation($dateCreation = null, $comparison = null)
    {
        if (is_array($dateCreation)) {
            $useMinMax = false;
            if (isset($dateCreation['min'])) {
                $this->addUsingAlias(CommonTDocumentPieceCollaboratifVersionPeer::DATE_CREATION, $dateCreation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreation['max'])) {
                $this->addUsingAlias(CommonTDocumentPieceCollaboratifVersionPeer::DATE_CREATION, $dateCreation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDocumentPieceCollaboratifVersionPeer::DATE_CREATION, $dateCreation, $comparison);
    }

    /**
     * Filter the query on the date_modification column
     *
     * Example usage:
     * <code>
     * $query->filterByDateModification('2011-03-14'); // WHERE date_modification = '2011-03-14'
     * $query->filterByDateModification('now'); // WHERE date_modification = '2011-03-14'
     * $query->filterByDateModification(array('max' => 'yesterday')); // WHERE date_modification > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateModification The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentPieceCollaboratifVersionQuery The current query, for fluid interface
     */
    public function filterByDateModification($dateModification = null, $comparison = null)
    {
        if (is_array($dateModification)) {
            $useMinMax = false;
            if (isset($dateModification['min'])) {
                $this->addUsingAlias(CommonTDocumentPieceCollaboratifVersionPeer::DATE_MODIFICATION, $dateModification['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateModification['max'])) {
                $this->addUsingAlias(CommonTDocumentPieceCollaboratifVersionPeer::DATE_MODIFICATION, $dateModification['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDocumentPieceCollaboratifVersionPeer::DATE_MODIFICATION, $dateModification, $comparison);
    }

    /**
     * Filter the query on the hash column
     *
     * Example usage:
     * <code>
     * $query->filterByHash('fooValue');   // WHERE hash = 'fooValue'
     * $query->filterByHash('%fooValue%'); // WHERE hash LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hash The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentPieceCollaboratifVersionQuery The current query, for fluid interface
     */
    public function filterByHash($hash = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($hash)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $hash)) {
                $hash = str_replace('*', '%', $hash);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTDocumentPieceCollaboratifVersionPeer::HASH, $hash, $comparison);
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
     * @return CommonTDocumentPieceCollaboratifVersionQuery The current query, for fluid interface
     */
    public function filterByIdBlob($idBlob = null, $comparison = null)
    {
        if (is_array($idBlob)) {
            $useMinMax = false;
            if (isset($idBlob['min'])) {
                $this->addUsingAlias(CommonTDocumentPieceCollaboratifVersionPeer::ID_BLOB, $idBlob['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBlob['max'])) {
                $this->addUsingAlias(CommonTDocumentPieceCollaboratifVersionPeer::ID_BLOB, $idBlob['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDocumentPieceCollaboratifVersionPeer::ID_BLOB, $idBlob, $comparison);
    }

    /**
     * Filter the query on the taille_piece column
     *
     * Example usage:
     * <code>
     * $query->filterByTaillePiece('fooValue');   // WHERE taille_piece = 'fooValue'
     * $query->filterByTaillePiece('%fooValue%'); // WHERE taille_piece LIKE '%fooValue%'
     * </code>
     *
     * @param     string $taillePiece The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentPieceCollaboratifVersionQuery The current query, for fluid interface
     */
    public function filterByTaillePiece($taillePiece = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($taillePiece)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $taillePiece)) {
                $taillePiece = str_replace('*', '%', $taillePiece);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTDocumentPieceCollaboratifVersionPeer::TAILLE_PIECE, $taillePiece, $comparison);
    }

    /**
     * Filter the query on the extension_document column
     *
     * Example usage:
     * <code>
     * $query->filterByExtensionDocument('fooValue');   // WHERE extension_document = 'fooValue'
     * $query->filterByExtensionDocument('%fooValue%'); // WHERE extension_document LIKE '%fooValue%'
     * </code>
     *
     * @param     string $extensionDocument The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentPieceCollaboratifVersionQuery The current query, for fluid interface
     */
    public function filterByExtensionDocument($extensionDocument = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($extensionDocument)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $extensionDocument)) {
                $extensionDocument = str_replace('*', '%', $extensionDocument);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTDocumentPieceCollaboratifVersionPeer::EXTENSION_DOCUMENT, $extensionDocument, $comparison);
    }

    /**
     * Filter the query on the version column
     *
     * Example usage:
     * <code>
     * $query->filterByVersion('fooValue');   // WHERE version = 'fooValue'
     * $query->filterByVersion('%fooValue%'); // WHERE version LIKE '%fooValue%'
     * </code>
     *
     * @param     string $version The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentPieceCollaboratifVersionQuery The current query, for fluid interface
     */
    public function filterByVersion($version = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($version)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $version)) {
                $version = str_replace('*', '%', $version);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTDocumentPieceCollaboratifVersionPeer::VERSION, $version, $comparison);
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
     * @return CommonTDocumentPieceCollaboratifVersionQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDocumentPieceCollaboratifVersionPeer::NOM_AGENT, $nomAgent, $comparison);
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
     * @return CommonTDocumentPieceCollaboratifVersionQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDocumentPieceCollaboratifVersionPeer::PRENOM_AGENT, $prenomAgent, $comparison);
    }

    /**
     * Filter the query on the nom_document column
     *
     * Example usage:
     * <code>
     * $query->filterByNomDocument('fooValue');   // WHERE nom_document = 'fooValue'
     * $query->filterByNomDocument('%fooValue%'); // WHERE nom_document LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomDocument The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentPieceCollaboratifVersionQuery The current query, for fluid interface
     */
    public function filterByNomDocument($nomDocument = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomDocument)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomDocument)) {
                $nomDocument = str_replace('*', '%', $nomDocument);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTDocumentPieceCollaboratifVersionPeer::NOM_DOCUMENT, $nomDocument, $comparison);
    }

    /**
     * Filter the query by a related CommonTDocumentPieceCollaboratif object
     *
     * @param   CommonTDocumentPieceCollaboratif|PropelObjectCollection $commonTDocumentPieceCollaboratif The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTDocumentPieceCollaboratifVersionQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTDocumentPieceCollaboratif($commonTDocumentPieceCollaboratif, $comparison = null)
    {
        if ($commonTDocumentPieceCollaboratif instanceof CommonTDocumentPieceCollaboratif) {
            return $this
                ->addUsingAlias(CommonTDocumentPieceCollaboratifVersionPeer::ID_PIECE, $commonTDocumentPieceCollaboratif->getIdDocumentPiece(), $comparison);
        } elseif ($commonTDocumentPieceCollaboratif instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonTDocumentPieceCollaboratifVersionPeer::ID_PIECE, $commonTDocumentPieceCollaboratif->toKeyValue('PrimaryKey', 'IdDocumentPiece'), $comparison);
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
     * @return CommonTDocumentPieceCollaboratifVersionQuery The current query, for fluid interface
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
     * @param   CommonTDocumentPieceCollaboratifVersion $commonTDocumentPieceCollaboratifVersion Object to remove from the list of results
     *
     * @return CommonTDocumentPieceCollaboratifVersionQuery The current query, for fluid interface
     */
    public function prune($commonTDocumentPieceCollaboratifVersion = null)
    {
        if ($commonTDocumentPieceCollaboratifVersion) {
            $this->addUsingAlias(CommonTDocumentPieceCollaboratifVersionPeer::ID_VERSION_PIECE_DOCUMENT, $commonTDocumentPieceCollaboratifVersion->getIdVersionPieceDocument(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
