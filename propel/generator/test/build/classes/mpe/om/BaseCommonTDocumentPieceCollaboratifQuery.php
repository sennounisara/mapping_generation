<?php


/**
 * Base class that represents a query for the 't_document_piece_collaboratif' table.
 *
 * 
 *
 * @method CommonTDocumentPieceCollaboratifQuery orderByIdDocumentPiece($order = Criteria::ASC) Order by the id_document_piece column
 * @method CommonTDocumentPieceCollaboratifQuery orderByIdDocument($order = Criteria::ASC) Order by the id_document column
 * @method CommonTDocumentPieceCollaboratifQuery orderByIdParapheur($order = Criteria::ASC) Order by the id_parapheur column
 * @method CommonTDocumentPieceCollaboratifQuery orderByNomPiece($order = Criteria::ASC) Order by the nom_piece column
 * @method CommonTDocumentPieceCollaboratifQuery orderByTitrePiece($order = Criteria::ASC) Order by the titre_piece column
 * @method CommonTDocumentPieceCollaboratifQuery orderByTypePiece($order = Criteria::ASC) Order by the type_piece column
 * @method CommonTDocumentPieceCollaboratifQuery orderByTypeObjet($order = Criteria::ASC) Order by the type_objet column
 * @method CommonTDocumentPieceCollaboratifQuery orderByStatut($order = Criteria::ASC) Order by the statut column
 * @method CommonTDocumentPieceCollaboratifQuery orderByIdDerniereVersion($order = Criteria::ASC) Order by the id_derniere_version column
 * @method CommonTDocumentPieceCollaboratifQuery orderByDateCreation($order = Criteria::ASC) Order by the date_creation column
 * @method CommonTDocumentPieceCollaboratifQuery orderByDateModification($order = Criteria::ASC) Order by the date_modification column
 * @method CommonTDocumentPieceCollaboratifQuery orderByIdCreateur($order = Criteria::ASC) Order by the id_createur column
 * @method CommonTDocumentPieceCollaboratifQuery orderByNomCreateur($order = Criteria::ASC) Order by the nom_createur column
 * @method CommonTDocumentPieceCollaboratifQuery orderByPrenomCreateur($order = Criteria::ASC) Order by the prenom_createur column
 *
 * @method CommonTDocumentPieceCollaboratifQuery groupByIdDocumentPiece() Group by the id_document_piece column
 * @method CommonTDocumentPieceCollaboratifQuery groupByIdDocument() Group by the id_document column
 * @method CommonTDocumentPieceCollaboratifQuery groupByIdParapheur() Group by the id_parapheur column
 * @method CommonTDocumentPieceCollaboratifQuery groupByNomPiece() Group by the nom_piece column
 * @method CommonTDocumentPieceCollaboratifQuery groupByTitrePiece() Group by the titre_piece column
 * @method CommonTDocumentPieceCollaboratifQuery groupByTypePiece() Group by the type_piece column
 * @method CommonTDocumentPieceCollaboratifQuery groupByTypeObjet() Group by the type_objet column
 * @method CommonTDocumentPieceCollaboratifQuery groupByStatut() Group by the statut column
 * @method CommonTDocumentPieceCollaboratifQuery groupByIdDerniereVersion() Group by the id_derniere_version column
 * @method CommonTDocumentPieceCollaboratifQuery groupByDateCreation() Group by the date_creation column
 * @method CommonTDocumentPieceCollaboratifQuery groupByDateModification() Group by the date_modification column
 * @method CommonTDocumentPieceCollaboratifQuery groupByIdCreateur() Group by the id_createur column
 * @method CommonTDocumentPieceCollaboratifQuery groupByNomCreateur() Group by the nom_createur column
 * @method CommonTDocumentPieceCollaboratifQuery groupByPrenomCreateur() Group by the prenom_createur column
 *
 * @method CommonTDocumentPieceCollaboratifQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTDocumentPieceCollaboratifQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTDocumentPieceCollaboratifQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTDocumentPieceCollaboratifQuery leftJoinCommonTTypePiece($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTTypePiece relation
 * @method CommonTDocumentPieceCollaboratifQuery rightJoinCommonTTypePiece($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTTypePiece relation
 * @method CommonTDocumentPieceCollaboratifQuery innerJoinCommonTTypePiece($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTTypePiece relation
 *
 * @method CommonTDocumentPieceCollaboratifQuery leftJoinCommonTDocumentPieceCollaboratifCommentaire($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTDocumentPieceCollaboratifCommentaire relation
 * @method CommonTDocumentPieceCollaboratifQuery rightJoinCommonTDocumentPieceCollaboratifCommentaire($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTDocumentPieceCollaboratifCommentaire relation
 * @method CommonTDocumentPieceCollaboratifQuery innerJoinCommonTDocumentPieceCollaboratifCommentaire($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTDocumentPieceCollaboratifCommentaire relation
 *
 * @method CommonTDocumentPieceCollaboratifQuery leftJoinCommonTDocumentPieceCollaboratifVersion($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTDocumentPieceCollaboratifVersion relation
 * @method CommonTDocumentPieceCollaboratifQuery rightJoinCommonTDocumentPieceCollaboratifVersion($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTDocumentPieceCollaboratifVersion relation
 * @method CommonTDocumentPieceCollaboratifQuery innerJoinCommonTDocumentPieceCollaboratifVersion($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTDocumentPieceCollaboratifVersion relation
 *
 * @method CommonTDocumentPieceCollaboratif findOne(PropelPDO $con = null) Return the first CommonTDocumentPieceCollaboratif matching the query
 * @method CommonTDocumentPieceCollaboratif findOneOrCreate(PropelPDO $con = null) Return the first CommonTDocumentPieceCollaboratif matching the query, or a new CommonTDocumentPieceCollaboratif object populated from the query conditions when no match is found
 *
 * @method CommonTDocumentPieceCollaboratif findOneByIdDocument(int $id_document) Return the first CommonTDocumentPieceCollaboratif filtered by the id_document column
 * @method CommonTDocumentPieceCollaboratif findOneByIdParapheur(int $id_parapheur) Return the first CommonTDocumentPieceCollaboratif filtered by the id_parapheur column
 * @method CommonTDocumentPieceCollaboratif findOneByNomPiece(string $nom_piece) Return the first CommonTDocumentPieceCollaboratif filtered by the nom_piece column
 * @method CommonTDocumentPieceCollaboratif findOneByTitrePiece(string $titre_piece) Return the first CommonTDocumentPieceCollaboratif filtered by the titre_piece column
 * @method CommonTDocumentPieceCollaboratif findOneByTypePiece(int $type_piece) Return the first CommonTDocumentPieceCollaboratif filtered by the type_piece column
 * @method CommonTDocumentPieceCollaboratif findOneByTypeObjet(int $type_objet) Return the first CommonTDocumentPieceCollaboratif filtered by the type_objet column
 * @method CommonTDocumentPieceCollaboratif findOneByStatut(int $statut) Return the first CommonTDocumentPieceCollaboratif filtered by the statut column
 * @method CommonTDocumentPieceCollaboratif findOneByIdDerniereVersion(int $id_derniere_version) Return the first CommonTDocumentPieceCollaboratif filtered by the id_derniere_version column
 * @method CommonTDocumentPieceCollaboratif findOneByDateCreation(string $date_creation) Return the first CommonTDocumentPieceCollaboratif filtered by the date_creation column
 * @method CommonTDocumentPieceCollaboratif findOneByDateModification(string $date_modification) Return the first CommonTDocumentPieceCollaboratif filtered by the date_modification column
 * @method CommonTDocumentPieceCollaboratif findOneByIdCreateur(int $id_createur) Return the first CommonTDocumentPieceCollaboratif filtered by the id_createur column
 * @method CommonTDocumentPieceCollaboratif findOneByNomCreateur(string $nom_createur) Return the first CommonTDocumentPieceCollaboratif filtered by the nom_createur column
 * @method CommonTDocumentPieceCollaboratif findOneByPrenomCreateur(string $prenom_createur) Return the first CommonTDocumentPieceCollaboratif filtered by the prenom_createur column
 *
 * @method array findByIdDocumentPiece(int $id_document_piece) Return CommonTDocumentPieceCollaboratif objects filtered by the id_document_piece column
 * @method array findByIdDocument(int $id_document) Return CommonTDocumentPieceCollaboratif objects filtered by the id_document column
 * @method array findByIdParapheur(int $id_parapheur) Return CommonTDocumentPieceCollaboratif objects filtered by the id_parapheur column
 * @method array findByNomPiece(string $nom_piece) Return CommonTDocumentPieceCollaboratif objects filtered by the nom_piece column
 * @method array findByTitrePiece(string $titre_piece) Return CommonTDocumentPieceCollaboratif objects filtered by the titre_piece column
 * @method array findByTypePiece(int $type_piece) Return CommonTDocumentPieceCollaboratif objects filtered by the type_piece column
 * @method array findByTypeObjet(int $type_objet) Return CommonTDocumentPieceCollaboratif objects filtered by the type_objet column
 * @method array findByStatut(int $statut) Return CommonTDocumentPieceCollaboratif objects filtered by the statut column
 * @method array findByIdDerniereVersion(int $id_derniere_version) Return CommonTDocumentPieceCollaboratif objects filtered by the id_derniere_version column
 * @method array findByDateCreation(string $date_creation) Return CommonTDocumentPieceCollaboratif objects filtered by the date_creation column
 * @method array findByDateModification(string $date_modification) Return CommonTDocumentPieceCollaboratif objects filtered by the date_modification column
 * @method array findByIdCreateur(int $id_createur) Return CommonTDocumentPieceCollaboratif objects filtered by the id_createur column
 * @method array findByNomCreateur(string $nom_createur) Return CommonTDocumentPieceCollaboratif objects filtered by the nom_createur column
 * @method array findByPrenomCreateur(string $prenom_createur) Return CommonTDocumentPieceCollaboratif objects filtered by the prenom_createur column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTDocumentPieceCollaboratifQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTDocumentPieceCollaboratifQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTDocumentPieceCollaboratif', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTDocumentPieceCollaboratifQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTDocumentPieceCollaboratifQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTDocumentPieceCollaboratifQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTDocumentPieceCollaboratifQuery) {
            return $criteria;
        }
        $query = new CommonTDocumentPieceCollaboratifQuery();
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
     * @return   CommonTDocumentPieceCollaboratif|CommonTDocumentPieceCollaboratif[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTDocumentPieceCollaboratifPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTDocumentPieceCollaboratifPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTDocumentPieceCollaboratif A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdDocumentPiece($key, $con = null)
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
     * @return                 CommonTDocumentPieceCollaboratif A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_document_piece`, `id_document`, `id_parapheur`, `nom_piece`, `titre_piece`, `type_piece`, `type_objet`, `statut`, `id_derniere_version`, `date_creation`, `date_modification`, `id_createur`, `nom_createur`, `prenom_createur` FROM `t_document_piece_collaboratif` WHERE `id_document_piece` = :p0';
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
            $obj = new CommonTDocumentPieceCollaboratif();
            $obj->hydrate($row);
            CommonTDocumentPieceCollaboratifPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonTDocumentPieceCollaboratif|CommonTDocumentPieceCollaboratif[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTDocumentPieceCollaboratif[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTDocumentPieceCollaboratifQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonTDocumentPieceCollaboratifPeer::ID_DOCUMENT_PIECE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTDocumentPieceCollaboratifQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonTDocumentPieceCollaboratifPeer::ID_DOCUMENT_PIECE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_document_piece column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDocumentPiece(1234); // WHERE id_document_piece = 1234
     * $query->filterByIdDocumentPiece(array(12, 34)); // WHERE id_document_piece IN (12, 34)
     * $query->filterByIdDocumentPiece(array('min' => 12)); // WHERE id_document_piece >= 12
     * $query->filterByIdDocumentPiece(array('max' => 12)); // WHERE id_document_piece <= 12
     * </code>
     *
     * @param     mixed $idDocumentPiece The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentPieceCollaboratifQuery The current query, for fluid interface
     */
    public function filterByIdDocumentPiece($idDocumentPiece = null, $comparison = null)
    {
        if (is_array($idDocumentPiece)) {
            $useMinMax = false;
            if (isset($idDocumentPiece['min'])) {
                $this->addUsingAlias(CommonTDocumentPieceCollaboratifPeer::ID_DOCUMENT_PIECE, $idDocumentPiece['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDocumentPiece['max'])) {
                $this->addUsingAlias(CommonTDocumentPieceCollaboratifPeer::ID_DOCUMENT_PIECE, $idDocumentPiece['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDocumentPieceCollaboratifPeer::ID_DOCUMENT_PIECE, $idDocumentPiece, $comparison);
    }

    /**
     * Filter the query on the id_document column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDocument(1234); // WHERE id_document = 1234
     * $query->filterByIdDocument(array(12, 34)); // WHERE id_document IN (12, 34)
     * $query->filterByIdDocument(array('min' => 12)); // WHERE id_document >= 12
     * $query->filterByIdDocument(array('max' => 12)); // WHERE id_document <= 12
     * </code>
     *
     * @param     mixed $idDocument The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentPieceCollaboratifQuery The current query, for fluid interface
     */
    public function filterByIdDocument($idDocument = null, $comparison = null)
    {
        if (is_array($idDocument)) {
            $useMinMax = false;
            if (isset($idDocument['min'])) {
                $this->addUsingAlias(CommonTDocumentPieceCollaboratifPeer::ID_DOCUMENT, $idDocument['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDocument['max'])) {
                $this->addUsingAlias(CommonTDocumentPieceCollaboratifPeer::ID_DOCUMENT, $idDocument['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDocumentPieceCollaboratifPeer::ID_DOCUMENT, $idDocument, $comparison);
    }

    /**
     * Filter the query on the id_parapheur column
     *
     * Example usage:
     * <code>
     * $query->filterByIdParapheur(1234); // WHERE id_parapheur = 1234
     * $query->filterByIdParapheur(array(12, 34)); // WHERE id_parapheur IN (12, 34)
     * $query->filterByIdParapheur(array('min' => 12)); // WHERE id_parapheur >= 12
     * $query->filterByIdParapheur(array('max' => 12)); // WHERE id_parapheur <= 12
     * </code>
     *
     * @param     mixed $idParapheur The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentPieceCollaboratifQuery The current query, for fluid interface
     */
    public function filterByIdParapheur($idParapheur = null, $comparison = null)
    {
        if (is_array($idParapheur)) {
            $useMinMax = false;
            if (isset($idParapheur['min'])) {
                $this->addUsingAlias(CommonTDocumentPieceCollaboratifPeer::ID_PARAPHEUR, $idParapheur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idParapheur['max'])) {
                $this->addUsingAlias(CommonTDocumentPieceCollaboratifPeer::ID_PARAPHEUR, $idParapheur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDocumentPieceCollaboratifPeer::ID_PARAPHEUR, $idParapheur, $comparison);
    }

    /**
     * Filter the query on the nom_piece column
     *
     * Example usage:
     * <code>
     * $query->filterByNomPiece('fooValue');   // WHERE nom_piece = 'fooValue'
     * $query->filterByNomPiece('%fooValue%'); // WHERE nom_piece LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomPiece The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentPieceCollaboratifQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTDocumentPieceCollaboratifPeer::NOM_PIECE, $nomPiece, $comparison);
    }

    /**
     * Filter the query on the titre_piece column
     *
     * Example usage:
     * <code>
     * $query->filterByTitrePiece('fooValue');   // WHERE titre_piece = 'fooValue'
     * $query->filterByTitrePiece('%fooValue%'); // WHERE titre_piece LIKE '%fooValue%'
     * </code>
     *
     * @param     string $titrePiece The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentPieceCollaboratifQuery The current query, for fluid interface
     */
    public function filterByTitrePiece($titrePiece = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($titrePiece)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $titrePiece)) {
                $titrePiece = str_replace('*', '%', $titrePiece);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTDocumentPieceCollaboratifPeer::TITRE_PIECE, $titrePiece, $comparison);
    }

    /**
     * Filter the query on the type_piece column
     *
     * Example usage:
     * <code>
     * $query->filterByTypePiece(1234); // WHERE type_piece = 1234
     * $query->filterByTypePiece(array(12, 34)); // WHERE type_piece IN (12, 34)
     * $query->filterByTypePiece(array('min' => 12)); // WHERE type_piece >= 12
     * $query->filterByTypePiece(array('max' => 12)); // WHERE type_piece <= 12
     * </code>
     *
     * @see       filterByCommonTTypePiece()
     *
     * @param     mixed $typePiece The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentPieceCollaboratifQuery The current query, for fluid interface
     */
    public function filterByTypePiece($typePiece = null, $comparison = null)
    {
        if (is_array($typePiece)) {
            $useMinMax = false;
            if (isset($typePiece['min'])) {
                $this->addUsingAlias(CommonTDocumentPieceCollaboratifPeer::TYPE_PIECE, $typePiece['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typePiece['max'])) {
                $this->addUsingAlias(CommonTDocumentPieceCollaboratifPeer::TYPE_PIECE, $typePiece['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDocumentPieceCollaboratifPeer::TYPE_PIECE, $typePiece, $comparison);
    }

    /**
     * Filter the query on the type_objet column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeObjet(1234); // WHERE type_objet = 1234
     * $query->filterByTypeObjet(array(12, 34)); // WHERE type_objet IN (12, 34)
     * $query->filterByTypeObjet(array('min' => 12)); // WHERE type_objet >= 12
     * $query->filterByTypeObjet(array('max' => 12)); // WHERE type_objet <= 12
     * </code>
     *
     * @param     mixed $typeObjet The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentPieceCollaboratifQuery The current query, for fluid interface
     */
    public function filterByTypeObjet($typeObjet = null, $comparison = null)
    {
        if (is_array($typeObjet)) {
            $useMinMax = false;
            if (isset($typeObjet['min'])) {
                $this->addUsingAlias(CommonTDocumentPieceCollaboratifPeer::TYPE_OBJET, $typeObjet['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeObjet['max'])) {
                $this->addUsingAlias(CommonTDocumentPieceCollaboratifPeer::TYPE_OBJET, $typeObjet['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDocumentPieceCollaboratifPeer::TYPE_OBJET, $typeObjet, $comparison);
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
     * @return CommonTDocumentPieceCollaboratifQuery The current query, for fluid interface
     */
    public function filterByStatut($statut = null, $comparison = null)
    {
        if (is_array($statut)) {
            $useMinMax = false;
            if (isset($statut['min'])) {
                $this->addUsingAlias(CommonTDocumentPieceCollaboratifPeer::STATUT, $statut['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statut['max'])) {
                $this->addUsingAlias(CommonTDocumentPieceCollaboratifPeer::STATUT, $statut['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDocumentPieceCollaboratifPeer::STATUT, $statut, $comparison);
    }

    /**
     * Filter the query on the id_derniere_version column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDerniereVersion(1234); // WHERE id_derniere_version = 1234
     * $query->filterByIdDerniereVersion(array(12, 34)); // WHERE id_derniere_version IN (12, 34)
     * $query->filterByIdDerniereVersion(array('min' => 12)); // WHERE id_derniere_version >= 12
     * $query->filterByIdDerniereVersion(array('max' => 12)); // WHERE id_derniere_version <= 12
     * </code>
     *
     * @param     mixed $idDerniereVersion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentPieceCollaboratifQuery The current query, for fluid interface
     */
    public function filterByIdDerniereVersion($idDerniereVersion = null, $comparison = null)
    {
        if (is_array($idDerniereVersion)) {
            $useMinMax = false;
            if (isset($idDerniereVersion['min'])) {
                $this->addUsingAlias(CommonTDocumentPieceCollaboratifPeer::ID_DERNIERE_VERSION, $idDerniereVersion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDerniereVersion['max'])) {
                $this->addUsingAlias(CommonTDocumentPieceCollaboratifPeer::ID_DERNIERE_VERSION, $idDerniereVersion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDocumentPieceCollaboratifPeer::ID_DERNIERE_VERSION, $idDerniereVersion, $comparison);
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
     * @return CommonTDocumentPieceCollaboratifQuery The current query, for fluid interface
     */
    public function filterByDateCreation($dateCreation = null, $comparison = null)
    {
        if (is_array($dateCreation)) {
            $useMinMax = false;
            if (isset($dateCreation['min'])) {
                $this->addUsingAlias(CommonTDocumentPieceCollaboratifPeer::DATE_CREATION, $dateCreation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreation['max'])) {
                $this->addUsingAlias(CommonTDocumentPieceCollaboratifPeer::DATE_CREATION, $dateCreation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDocumentPieceCollaboratifPeer::DATE_CREATION, $dateCreation, $comparison);
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
     * @return CommonTDocumentPieceCollaboratifQuery The current query, for fluid interface
     */
    public function filterByDateModification($dateModification = null, $comparison = null)
    {
        if (is_array($dateModification)) {
            $useMinMax = false;
            if (isset($dateModification['min'])) {
                $this->addUsingAlias(CommonTDocumentPieceCollaboratifPeer::DATE_MODIFICATION, $dateModification['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateModification['max'])) {
                $this->addUsingAlias(CommonTDocumentPieceCollaboratifPeer::DATE_MODIFICATION, $dateModification['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDocumentPieceCollaboratifPeer::DATE_MODIFICATION, $dateModification, $comparison);
    }

    /**
     * Filter the query on the id_createur column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCreateur(1234); // WHERE id_createur = 1234
     * $query->filterByIdCreateur(array(12, 34)); // WHERE id_createur IN (12, 34)
     * $query->filterByIdCreateur(array('min' => 12)); // WHERE id_createur >= 12
     * $query->filterByIdCreateur(array('max' => 12)); // WHERE id_createur <= 12
     * </code>
     *
     * @param     mixed $idCreateur The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentPieceCollaboratifQuery The current query, for fluid interface
     */
    public function filterByIdCreateur($idCreateur = null, $comparison = null)
    {
        if (is_array($idCreateur)) {
            $useMinMax = false;
            if (isset($idCreateur['min'])) {
                $this->addUsingAlias(CommonTDocumentPieceCollaboratifPeer::ID_CREATEUR, $idCreateur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCreateur['max'])) {
                $this->addUsingAlias(CommonTDocumentPieceCollaboratifPeer::ID_CREATEUR, $idCreateur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTDocumentPieceCollaboratifPeer::ID_CREATEUR, $idCreateur, $comparison);
    }

    /**
     * Filter the query on the nom_createur column
     *
     * Example usage:
     * <code>
     * $query->filterByNomCreateur('fooValue');   // WHERE nom_createur = 'fooValue'
     * $query->filterByNomCreateur('%fooValue%'); // WHERE nom_createur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomCreateur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentPieceCollaboratifQuery The current query, for fluid interface
     */
    public function filterByNomCreateur($nomCreateur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomCreateur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomCreateur)) {
                $nomCreateur = str_replace('*', '%', $nomCreateur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTDocumentPieceCollaboratifPeer::NOM_CREATEUR, $nomCreateur, $comparison);
    }

    /**
     * Filter the query on the prenom_createur column
     *
     * Example usage:
     * <code>
     * $query->filterByPrenomCreateur('fooValue');   // WHERE prenom_createur = 'fooValue'
     * $query->filterByPrenomCreateur('%fooValue%'); // WHERE prenom_createur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prenomCreateur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTDocumentPieceCollaboratifQuery The current query, for fluid interface
     */
    public function filterByPrenomCreateur($prenomCreateur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prenomCreateur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prenomCreateur)) {
                $prenomCreateur = str_replace('*', '%', $prenomCreateur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTDocumentPieceCollaboratifPeer::PRENOM_CREATEUR, $prenomCreateur, $comparison);
    }

    /**
     * Filter the query by a related CommonTTypePiece object
     *
     * @param   CommonTTypePiece|PropelObjectCollection $commonTTypePiece The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTDocumentPieceCollaboratifQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTTypePiece($commonTTypePiece, $comparison = null)
    {
        if ($commonTTypePiece instanceof CommonTTypePiece) {
            return $this
                ->addUsingAlias(CommonTDocumentPieceCollaboratifPeer::TYPE_PIECE, $commonTTypePiece->getId(), $comparison);
        } elseif ($commonTTypePiece instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonTDocumentPieceCollaboratifPeer::TYPE_PIECE, $commonTTypePiece->toKeyValue('PrimaryKey', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonTTypePiece() only accepts arguments of type CommonTTypePiece or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTTypePiece relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTDocumentPieceCollaboratifQuery The current query, for fluid interface
     */
    public function joinCommonTTypePiece($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTTypePiece');

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
            $this->addJoinObject($join, 'CommonTTypePiece');
        }

        return $this;
    }

    /**
     * Use the CommonTTypePiece relation CommonTTypePiece object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTTypePieceQuery A secondary query class using the current class as primary query
     */
    public function useCommonTTypePieceQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonTTypePiece($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTTypePiece', 'CommonTTypePieceQuery');
    }

    /**
     * Filter the query by a related CommonTDocumentPieceCollaboratifCommentaire object
     *
     * @param   CommonTDocumentPieceCollaboratifCommentaire|PropelObjectCollection $commonTDocumentPieceCollaboratifCommentaire  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTDocumentPieceCollaboratifQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTDocumentPieceCollaboratifCommentaire($commonTDocumentPieceCollaboratifCommentaire, $comparison = null)
    {
        if ($commonTDocumentPieceCollaboratifCommentaire instanceof CommonTDocumentPieceCollaboratifCommentaire) {
            return $this
                ->addUsingAlias(CommonTDocumentPieceCollaboratifPeer::ID_DOCUMENT_PIECE, $commonTDocumentPieceCollaboratifCommentaire->getIdPiece(), $comparison);
        } elseif ($commonTDocumentPieceCollaboratifCommentaire instanceof PropelObjectCollection) {
            return $this
                ->useCommonTDocumentPieceCollaboratifCommentaireQuery()
                ->filterByPrimaryKeys($commonTDocumentPieceCollaboratifCommentaire->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonTDocumentPieceCollaboratifCommentaire() only accepts arguments of type CommonTDocumentPieceCollaboratifCommentaire or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTDocumentPieceCollaboratifCommentaire relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTDocumentPieceCollaboratifQuery The current query, for fluid interface
     */
    public function joinCommonTDocumentPieceCollaboratifCommentaire($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTDocumentPieceCollaboratifCommentaire');

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
            $this->addJoinObject($join, 'CommonTDocumentPieceCollaboratifCommentaire');
        }

        return $this;
    }

    /**
     * Use the CommonTDocumentPieceCollaboratifCommentaire relation CommonTDocumentPieceCollaboratifCommentaire object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTDocumentPieceCollaboratifCommentaireQuery A secondary query class using the current class as primary query
     */
    public function useCommonTDocumentPieceCollaboratifCommentaireQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonTDocumentPieceCollaboratifCommentaire($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTDocumentPieceCollaboratifCommentaire', 'CommonTDocumentPieceCollaboratifCommentaireQuery');
    }

    /**
     * Filter the query by a related CommonTDocumentPieceCollaboratifVersion object
     *
     * @param   CommonTDocumentPieceCollaboratifVersion|PropelObjectCollection $commonTDocumentPieceCollaboratifVersion  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTDocumentPieceCollaboratifQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTDocumentPieceCollaboratifVersion($commonTDocumentPieceCollaboratifVersion, $comparison = null)
    {
        if ($commonTDocumentPieceCollaboratifVersion instanceof CommonTDocumentPieceCollaboratifVersion) {
            return $this
                ->addUsingAlias(CommonTDocumentPieceCollaboratifPeer::ID_DOCUMENT_PIECE, $commonTDocumentPieceCollaboratifVersion->getIdPiece(), $comparison);
        } elseif ($commonTDocumentPieceCollaboratifVersion instanceof PropelObjectCollection) {
            return $this
                ->useCommonTDocumentPieceCollaboratifVersionQuery()
                ->filterByPrimaryKeys($commonTDocumentPieceCollaboratifVersion->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonTDocumentPieceCollaboratifVersion() only accepts arguments of type CommonTDocumentPieceCollaboratifVersion or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTDocumentPieceCollaboratifVersion relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTDocumentPieceCollaboratifQuery The current query, for fluid interface
     */
    public function joinCommonTDocumentPieceCollaboratifVersion($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTDocumentPieceCollaboratifVersion');

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
            $this->addJoinObject($join, 'CommonTDocumentPieceCollaboratifVersion');
        }

        return $this;
    }

    /**
     * Use the CommonTDocumentPieceCollaboratifVersion relation CommonTDocumentPieceCollaboratifVersion object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTDocumentPieceCollaboratifVersionQuery A secondary query class using the current class as primary query
     */
    public function useCommonTDocumentPieceCollaboratifVersionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonTDocumentPieceCollaboratifVersion($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTDocumentPieceCollaboratifVersion', 'CommonTDocumentPieceCollaboratifVersionQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTDocumentPieceCollaboratif $commonTDocumentPieceCollaboratif Object to remove from the list of results
     *
     * @return CommonTDocumentPieceCollaboratifQuery The current query, for fluid interface
     */
    public function prune($commonTDocumentPieceCollaboratif = null)
    {
        if ($commonTDocumentPieceCollaboratif) {
            $this->addUsingAlias(CommonTDocumentPieceCollaboratifPeer::ID_DOCUMENT_PIECE, $commonTDocumentPieceCollaboratif->getIdDocumentPiece(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
