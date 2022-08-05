<?php


/**
 * Base class that represents a query for the 'Pieces_DCE' table.
 *
 * 
 *
 * @method CommonPiecesDCEQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonPiecesDCEQuery orderByNomPiece($order = Criteria::ASC) Order by the nom_Piece column
 * @method CommonPiecesDCEQuery orderByIdBlob($order = Criteria::ASC) Order by the id_blob column
 * @method CommonPiecesDCEQuery orderByRefConsultation($order = Criteria::ASC) Order by the ref_consultation column
 * @method CommonPiecesDCEQuery orderByOrganismeConsultation($order = Criteria::ASC) Order by the organisme_consultation column
 * @method CommonPiecesDCEQuery orderByDocumentRedac($order = Criteria::ASC) Order by the document_Redac column
 * @method CommonPiecesDCEQuery orderByIdRedac($order = Criteria::ASC) Order by the id_Redac column
 * @method CommonPiecesDCEQuery orderByStatut($order = Criteria::ASC) Order by the statut column
 * @method CommonPiecesDCEQuery orderByTypePiece($order = Criteria::ASC) Order by the Type_Piece column
 *
 * @method CommonPiecesDCEQuery groupById() Group by the id column
 * @method CommonPiecesDCEQuery groupByNomPiece() Group by the nom_Piece column
 * @method CommonPiecesDCEQuery groupByIdBlob() Group by the id_blob column
 * @method CommonPiecesDCEQuery groupByRefConsultation() Group by the ref_consultation column
 * @method CommonPiecesDCEQuery groupByOrganismeConsultation() Group by the organisme_consultation column
 * @method CommonPiecesDCEQuery groupByDocumentRedac() Group by the document_Redac column
 * @method CommonPiecesDCEQuery groupByIdRedac() Group by the id_Redac column
 * @method CommonPiecesDCEQuery groupByStatut() Group by the statut column
 * @method CommonPiecesDCEQuery groupByTypePiece() Group by the Type_Piece column
 *
 * @method CommonPiecesDCEQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonPiecesDCEQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonPiecesDCEQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonPiecesDCEQuery leftJoinCommonConsultationRelatedByRefConsultation($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonConsultationRelatedByRefConsultation relation
 * @method CommonPiecesDCEQuery rightJoinCommonConsultationRelatedByRefConsultation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonConsultationRelatedByRefConsultation relation
 * @method CommonPiecesDCEQuery innerJoinCommonConsultationRelatedByRefConsultation($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonConsultationRelatedByRefConsultation relation
 *
 * @method CommonPiecesDCEQuery leftJoinCommonConsultationRelatedByOrganismeConsultation($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonConsultationRelatedByOrganismeConsultation relation
 * @method CommonPiecesDCEQuery rightJoinCommonConsultationRelatedByOrganismeConsultation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonConsultationRelatedByOrganismeConsultation relation
 * @method CommonPiecesDCEQuery innerJoinCommonConsultationRelatedByOrganismeConsultation($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonConsultationRelatedByOrganismeConsultation relation
 *
 * @method CommonPiecesDCE findOne(PropelPDO $con = null) Return the first CommonPiecesDCE matching the query
 * @method CommonPiecesDCE findOneOrCreate(PropelPDO $con = null) Return the first CommonPiecesDCE matching the query, or a new CommonPiecesDCE object populated from the query conditions when no match is found
 *
 * @method CommonPiecesDCE findOneByNomPiece(string $nom_Piece) Return the first CommonPiecesDCE filtered by the nom_Piece column
 * @method CommonPiecesDCE findOneByIdBlob(int $id_blob) Return the first CommonPiecesDCE filtered by the id_blob column
 * @method CommonPiecesDCE findOneByRefConsultation(int $ref_consultation) Return the first CommonPiecesDCE filtered by the ref_consultation column
 * @method CommonPiecesDCE findOneByOrganismeConsultation(string $organisme_consultation) Return the first CommonPiecesDCE filtered by the organisme_consultation column
 * @method CommonPiecesDCE findOneByDocumentRedac(string $document_Redac) Return the first CommonPiecesDCE filtered by the document_Redac column
 * @method CommonPiecesDCE findOneByIdRedac(int $id_Redac) Return the first CommonPiecesDCE filtered by the id_Redac column
 * @method CommonPiecesDCE findOneByStatut(int $statut) Return the first CommonPiecesDCE filtered by the statut column
 * @method CommonPiecesDCE findOneByTypePiece(string $Type_Piece) Return the first CommonPiecesDCE filtered by the Type_Piece column
 *
 * @method array findById(int $id) Return CommonPiecesDCE objects filtered by the id column
 * @method array findByNomPiece(string $nom_Piece) Return CommonPiecesDCE objects filtered by the nom_Piece column
 * @method array findByIdBlob(int $id_blob) Return CommonPiecesDCE objects filtered by the id_blob column
 * @method array findByRefConsultation(int $ref_consultation) Return CommonPiecesDCE objects filtered by the ref_consultation column
 * @method array findByOrganismeConsultation(string $organisme_consultation) Return CommonPiecesDCE objects filtered by the organisme_consultation column
 * @method array findByDocumentRedac(string $document_Redac) Return CommonPiecesDCE objects filtered by the document_Redac column
 * @method array findByIdRedac(int $id_Redac) Return CommonPiecesDCE objects filtered by the id_Redac column
 * @method array findByStatut(int $statut) Return CommonPiecesDCE objects filtered by the statut column
 * @method array findByTypePiece(string $Type_Piece) Return CommonPiecesDCE objects filtered by the Type_Piece column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonPiecesDCEQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonPiecesDCEQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonPiecesDCE', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonPiecesDCEQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonPiecesDCEQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonPiecesDCEQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonPiecesDCEQuery) {
            return $criteria;
        }
        $query = new CommonPiecesDCEQuery();
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
     * @return   CommonPiecesDCE|CommonPiecesDCE[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonPiecesDCEPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonPiecesDCEPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonPiecesDCE A model object, or null if the key is not found
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
     * @return                 CommonPiecesDCE A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `nom_Piece`, `id_blob`, `ref_consultation`, `organisme_consultation`, `document_Redac`, `id_Redac`, `statut`, `Type_Piece` FROM `Pieces_DCE` WHERE `id` = :p0';
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
            $obj = new CommonPiecesDCE();
            $obj->hydrate($row);
            CommonPiecesDCEPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonPiecesDCE|CommonPiecesDCE[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonPiecesDCE[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonPiecesDCEQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonPiecesDCEPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonPiecesDCEQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonPiecesDCEPeer::ID, $keys, Criteria::IN);
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
     * @return CommonPiecesDCEQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonPiecesDCEPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonPiecesDCEPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPiecesDCEPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the nom_Piece column
     *
     * Example usage:
     * <code>
     * $query->filterByNomPiece('fooValue');   // WHERE nom_Piece = 'fooValue'
     * $query->filterByNomPiece('%fooValue%'); // WHERE nom_Piece LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomPiece The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPiecesDCEQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonPiecesDCEPeer::NOM_PIECE, $nomPiece, $comparison);
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
     * @return CommonPiecesDCEQuery The current query, for fluid interface
     */
    public function filterByIdBlob($idBlob = null, $comparison = null)
    {
        if (is_array($idBlob)) {
            $useMinMax = false;
            if (isset($idBlob['min'])) {
                $this->addUsingAlias(CommonPiecesDCEPeer::ID_BLOB, $idBlob['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBlob['max'])) {
                $this->addUsingAlias(CommonPiecesDCEPeer::ID_BLOB, $idBlob['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPiecesDCEPeer::ID_BLOB, $idBlob, $comparison);
    }

    /**
     * Filter the query on the ref_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByRefConsultation(1234); // WHERE ref_consultation = 1234
     * $query->filterByRefConsultation(array(12, 34)); // WHERE ref_consultation IN (12, 34)
     * $query->filterByRefConsultation(array('min' => 12)); // WHERE ref_consultation >= 12
     * $query->filterByRefConsultation(array('max' => 12)); // WHERE ref_consultation <= 12
     * </code>
     *
     * @see       filterByCommonConsultationRelatedByRefConsultation()
     *
     * @param     mixed $refConsultation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPiecesDCEQuery The current query, for fluid interface
     */
    public function filterByRefConsultation($refConsultation = null, $comparison = null)
    {
        if (is_array($refConsultation)) {
            $useMinMax = false;
            if (isset($refConsultation['min'])) {
                $this->addUsingAlias(CommonPiecesDCEPeer::REF_CONSULTATION, $refConsultation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refConsultation['max'])) {
                $this->addUsingAlias(CommonPiecesDCEPeer::REF_CONSULTATION, $refConsultation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPiecesDCEPeer::REF_CONSULTATION, $refConsultation, $comparison);
    }

    /**
     * Filter the query on the organisme_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganismeConsultation('fooValue');   // WHERE organisme_consultation = 'fooValue'
     * $query->filterByOrganismeConsultation('%fooValue%'); // WHERE organisme_consultation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organismeConsultation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPiecesDCEQuery The current query, for fluid interface
     */
    public function filterByOrganismeConsultation($organismeConsultation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($organismeConsultation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $organismeConsultation)) {
                $organismeConsultation = str_replace('*', '%', $organismeConsultation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPiecesDCEPeer::ORGANISME_CONSULTATION, $organismeConsultation, $comparison);
    }

    /**
     * Filter the query on the document_Redac column
     *
     * Example usage:
     * <code>
     * $query->filterByDocumentRedac('fooValue');   // WHERE document_Redac = 'fooValue'
     * $query->filterByDocumentRedac('%fooValue%'); // WHERE document_Redac LIKE '%fooValue%'
     * </code>
     *
     * @param     string $documentRedac The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPiecesDCEQuery The current query, for fluid interface
     */
    public function filterByDocumentRedac($documentRedac = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($documentRedac)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $documentRedac)) {
                $documentRedac = str_replace('*', '%', $documentRedac);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPiecesDCEPeer::DOCUMENT_REDAC, $documentRedac, $comparison);
    }

    /**
     * Filter the query on the id_Redac column
     *
     * Example usage:
     * <code>
     * $query->filterByIdRedac(1234); // WHERE id_Redac = 1234
     * $query->filterByIdRedac(array(12, 34)); // WHERE id_Redac IN (12, 34)
     * $query->filterByIdRedac(array('min' => 12)); // WHERE id_Redac >= 12
     * $query->filterByIdRedac(array('max' => 12)); // WHERE id_Redac <= 12
     * </code>
     *
     * @param     mixed $idRedac The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPiecesDCEQuery The current query, for fluid interface
     */
    public function filterByIdRedac($idRedac = null, $comparison = null)
    {
        if (is_array($idRedac)) {
            $useMinMax = false;
            if (isset($idRedac['min'])) {
                $this->addUsingAlias(CommonPiecesDCEPeer::ID_REDAC, $idRedac['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idRedac['max'])) {
                $this->addUsingAlias(CommonPiecesDCEPeer::ID_REDAC, $idRedac['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPiecesDCEPeer::ID_REDAC, $idRedac, $comparison);
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
     * @return CommonPiecesDCEQuery The current query, for fluid interface
     */
    public function filterByStatut($statut = null, $comparison = null)
    {
        if (is_array($statut)) {
            $useMinMax = false;
            if (isset($statut['min'])) {
                $this->addUsingAlias(CommonPiecesDCEPeer::STATUT, $statut['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statut['max'])) {
                $this->addUsingAlias(CommonPiecesDCEPeer::STATUT, $statut['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonPiecesDCEPeer::STATUT, $statut, $comparison);
    }

    /**
     * Filter the query on the Type_Piece column
     *
     * Example usage:
     * <code>
     * $query->filterByTypePiece('fooValue');   // WHERE Type_Piece = 'fooValue'
     * $query->filterByTypePiece('%fooValue%'); // WHERE Type_Piece LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typePiece The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonPiecesDCEQuery The current query, for fluid interface
     */
    public function filterByTypePiece($typePiece = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typePiece)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typePiece)) {
                $typePiece = str_replace('*', '%', $typePiece);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonPiecesDCEPeer::TYPE_PIECE, $typePiece, $comparison);
    }

    /**
     * Filter the query by a related CommonConsultation object
     *
     * @param   CommonConsultation|PropelObjectCollection $commonConsultation The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonPiecesDCEQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonConsultationRelatedByRefConsultation($commonConsultation, $comparison = null)
    {
        if ($commonConsultation instanceof CommonConsultation) {
            return $this
                ->addUsingAlias(CommonPiecesDCEPeer::REF_CONSULTATION, $commonConsultation->getReference(), $comparison);
        } elseif ($commonConsultation instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonPiecesDCEPeer::REF_CONSULTATION, $commonConsultation->toKeyValue('Reference', 'Reference'), $comparison);
        } else {
            throw new PropelException('filterByCommonConsultationRelatedByRefConsultation() only accepts arguments of type CommonConsultation or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonConsultationRelatedByRefConsultation relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonPiecesDCEQuery The current query, for fluid interface
     */
    public function joinCommonConsultationRelatedByRefConsultation($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonConsultationRelatedByRefConsultation');

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
            $this->addJoinObject($join, 'CommonConsultationRelatedByRefConsultation');
        }

        return $this;
    }

    /**
     * Use the CommonConsultationRelatedByRefConsultation relation CommonConsultation object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonConsultationQuery A secondary query class using the current class as primary query
     */
    public function useCommonConsultationRelatedByRefConsultationQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonConsultationRelatedByRefConsultation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonConsultationRelatedByRefConsultation', 'CommonConsultationQuery');
    }

    /**
     * Filter the query by a related CommonConsultation object
     *
     * @param   CommonConsultation|PropelObjectCollection $commonConsultation The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonPiecesDCEQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonConsultationRelatedByOrganismeConsultation($commonConsultation, $comparison = null)
    {
        if ($commonConsultation instanceof CommonConsultation) {
            return $this
                ->addUsingAlias(CommonPiecesDCEPeer::ORGANISME_CONSULTATION, $commonConsultation->getOrganisme(), $comparison);
        } elseif ($commonConsultation instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonPiecesDCEPeer::ORGANISME_CONSULTATION, $commonConsultation->toKeyValue('Organisme', 'Organisme'), $comparison);
        } else {
            throw new PropelException('filterByCommonConsultationRelatedByOrganismeConsultation() only accepts arguments of type CommonConsultation or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonConsultationRelatedByOrganismeConsultation relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonPiecesDCEQuery The current query, for fluid interface
     */
    public function joinCommonConsultationRelatedByOrganismeConsultation($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonConsultationRelatedByOrganismeConsultation');

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
            $this->addJoinObject($join, 'CommonConsultationRelatedByOrganismeConsultation');
        }

        return $this;
    }

    /**
     * Use the CommonConsultationRelatedByOrganismeConsultation relation CommonConsultation object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonConsultationQuery A secondary query class using the current class as primary query
     */
    public function useCommonConsultationRelatedByOrganismeConsultationQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonConsultationRelatedByOrganismeConsultation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonConsultationRelatedByOrganismeConsultation', 'CommonConsultationQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonPiecesDCE $commonPiecesDCE Object to remove from the list of results
     *
     * @return CommonPiecesDCEQuery The current query, for fluid interface
     */
    public function prune($commonPiecesDCE = null)
    {
        if ($commonPiecesDCE) {
            $this->addUsingAlias(CommonPiecesDCEPeer::ID, $commonPiecesDCE->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
