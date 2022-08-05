<?php


/**
 * Base class that represents a query for the 'consultation_document_cfe' table.
 *
 * 
 *
 * @method CommonConsultationDocumentCfeQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonConsultationDocumentCfeQuery orderByIdJustificatif($order = Criteria::ASC) Order by the id_justificatif column
 * @method CommonConsultationDocumentCfeQuery orderByRefConsultation($order = Criteria::ASC) Order by the ref_consultation column
 * @method CommonConsultationDocumentCfeQuery orderByOrganismeConsultation($order = Criteria::ASC) Order by the organisme_consultation column
 * @method CommonConsultationDocumentCfeQuery orderByNomFichier($order = Criteria::ASC) Order by the nom_fichier column
 * @method CommonConsultationDocumentCfeQuery orderByIdEntreprise($order = Criteria::ASC) Order by the id_entreprise column
 * @method CommonConsultationDocumentCfeQuery orderByTailleDocument($order = Criteria::ASC) Order by the taille_document column
 * @method CommonConsultationDocumentCfeQuery orderByIdBlob($order = Criteria::ASC) Order by the id_blob column
 * @method CommonConsultationDocumentCfeQuery orderByTypeDocument($order = Criteria::ASC) Order by the type_document column
 * @method CommonConsultationDocumentCfeQuery orderByDateFinValidite($order = Criteria::ASC) Order by the date_fin_validite column
 * @method CommonConsultationDocumentCfeQuery orderByHorodatage($order = Criteria::ASC) Order by the horodatage column
 * @method CommonConsultationDocumentCfeQuery orderByUntrusteddate($order = Criteria::ASC) Order by the untrusteddate column
 *
 * @method CommonConsultationDocumentCfeQuery groupById() Group by the id column
 * @method CommonConsultationDocumentCfeQuery groupByIdJustificatif() Group by the id_justificatif column
 * @method CommonConsultationDocumentCfeQuery groupByRefConsultation() Group by the ref_consultation column
 * @method CommonConsultationDocumentCfeQuery groupByOrganismeConsultation() Group by the organisme_consultation column
 * @method CommonConsultationDocumentCfeQuery groupByNomFichier() Group by the nom_fichier column
 * @method CommonConsultationDocumentCfeQuery groupByIdEntreprise() Group by the id_entreprise column
 * @method CommonConsultationDocumentCfeQuery groupByTailleDocument() Group by the taille_document column
 * @method CommonConsultationDocumentCfeQuery groupByIdBlob() Group by the id_blob column
 * @method CommonConsultationDocumentCfeQuery groupByTypeDocument() Group by the type_document column
 * @method CommonConsultationDocumentCfeQuery groupByDateFinValidite() Group by the date_fin_validite column
 * @method CommonConsultationDocumentCfeQuery groupByHorodatage() Group by the horodatage column
 * @method CommonConsultationDocumentCfeQuery groupByUntrusteddate() Group by the untrusteddate column
 *
 * @method CommonConsultationDocumentCfeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonConsultationDocumentCfeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonConsultationDocumentCfeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonConsultationDocumentCfeQuery leftJoinCommonConsultation($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonConsultation relation
 * @method CommonConsultationDocumentCfeQuery rightJoinCommonConsultation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonConsultation relation
 * @method CommonConsultationDocumentCfeQuery innerJoinCommonConsultation($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonConsultation relation
 *
 * @method CommonConsultationDocumentCfe findOne(PropelPDO $con = null) Return the first CommonConsultationDocumentCfe matching the query
 * @method CommonConsultationDocumentCfe findOneOrCreate(PropelPDO $con = null) Return the first CommonConsultationDocumentCfe matching the query, or a new CommonConsultationDocumentCfe object populated from the query conditions when no match is found
 *
 * @method CommonConsultationDocumentCfe findOneByIdJustificatif(int $id_justificatif) Return the first CommonConsultationDocumentCfe filtered by the id_justificatif column
 * @method CommonConsultationDocumentCfe findOneByRefConsultation(int $ref_consultation) Return the first CommonConsultationDocumentCfe filtered by the ref_consultation column
 * @method CommonConsultationDocumentCfe findOneByOrganismeConsultation(string $organisme_consultation) Return the first CommonConsultationDocumentCfe filtered by the organisme_consultation column
 * @method CommonConsultationDocumentCfe findOneByNomFichier(string $nom_fichier) Return the first CommonConsultationDocumentCfe filtered by the nom_fichier column
 * @method CommonConsultationDocumentCfe findOneByIdEntreprise(int $id_entreprise) Return the first CommonConsultationDocumentCfe filtered by the id_entreprise column
 * @method CommonConsultationDocumentCfe findOneByTailleDocument(string $taille_document) Return the first CommonConsultationDocumentCfe filtered by the taille_document column
 * @method CommonConsultationDocumentCfe findOneByIdBlob(int $id_blob) Return the first CommonConsultationDocumentCfe filtered by the id_blob column
 * @method CommonConsultationDocumentCfe findOneByTypeDocument(string $type_document) Return the first CommonConsultationDocumentCfe filtered by the type_document column
 * @method CommonConsultationDocumentCfe findOneByDateFinValidite(string $date_fin_validite) Return the first CommonConsultationDocumentCfe filtered by the date_fin_validite column
 * @method CommonConsultationDocumentCfe findOneByHorodatage(resource $horodatage) Return the first CommonConsultationDocumentCfe filtered by the horodatage column
 * @method CommonConsultationDocumentCfe findOneByUntrusteddate(string $untrusteddate) Return the first CommonConsultationDocumentCfe filtered by the untrusteddate column
 *
 * @method array findById(int $id) Return CommonConsultationDocumentCfe objects filtered by the id column
 * @method array findByIdJustificatif(int $id_justificatif) Return CommonConsultationDocumentCfe objects filtered by the id_justificatif column
 * @method array findByRefConsultation(int $ref_consultation) Return CommonConsultationDocumentCfe objects filtered by the ref_consultation column
 * @method array findByOrganismeConsultation(string $organisme_consultation) Return CommonConsultationDocumentCfe objects filtered by the organisme_consultation column
 * @method array findByNomFichier(string $nom_fichier) Return CommonConsultationDocumentCfe objects filtered by the nom_fichier column
 * @method array findByIdEntreprise(int $id_entreprise) Return CommonConsultationDocumentCfe objects filtered by the id_entreprise column
 * @method array findByTailleDocument(string $taille_document) Return CommonConsultationDocumentCfe objects filtered by the taille_document column
 * @method array findByIdBlob(int $id_blob) Return CommonConsultationDocumentCfe objects filtered by the id_blob column
 * @method array findByTypeDocument(string $type_document) Return CommonConsultationDocumentCfe objects filtered by the type_document column
 * @method array findByDateFinValidite(string $date_fin_validite) Return CommonConsultationDocumentCfe objects filtered by the date_fin_validite column
 * @method array findByHorodatage(resource $horodatage) Return CommonConsultationDocumentCfe objects filtered by the horodatage column
 * @method array findByUntrusteddate(string $untrusteddate) Return CommonConsultationDocumentCfe objects filtered by the untrusteddate column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonConsultationDocumentCfeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonConsultationDocumentCfeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonConsultationDocumentCfe', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonConsultationDocumentCfeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonConsultationDocumentCfeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonConsultationDocumentCfeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonConsultationDocumentCfeQuery) {
            return $criteria;
        }
        $query = new CommonConsultationDocumentCfeQuery();
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
     * @return   CommonConsultationDocumentCfe|CommonConsultationDocumentCfe[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonConsultationDocumentCfePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonConsultationDocumentCfePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonConsultationDocumentCfe A model object, or null if the key is not found
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
     * @return                 CommonConsultationDocumentCfe A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_justificatif`, `ref_consultation`, `organisme_consultation`, `nom_fichier`, `id_entreprise`, `taille_document`, `id_blob`, `type_document`, `date_fin_validite`, `horodatage`, `untrusteddate` FROM `consultation_document_cfe` WHERE `id` = :p0';
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
            $obj = new CommonConsultationDocumentCfe();
            $obj->hydrate($row);
            CommonConsultationDocumentCfePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonConsultationDocumentCfe|CommonConsultationDocumentCfe[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonConsultationDocumentCfe[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonConsultationDocumentCfeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonConsultationDocumentCfePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonConsultationDocumentCfeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonConsultationDocumentCfePeer::ID, $keys, Criteria::IN);
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
     * @return CommonConsultationDocumentCfeQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonConsultationDocumentCfePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonConsultationDocumentCfePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationDocumentCfePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_justificatif column
     *
     * Example usage:
     * <code>
     * $query->filterByIdJustificatif(1234); // WHERE id_justificatif = 1234
     * $query->filterByIdJustificatif(array(12, 34)); // WHERE id_justificatif IN (12, 34)
     * $query->filterByIdJustificatif(array('min' => 12)); // WHERE id_justificatif >= 12
     * $query->filterByIdJustificatif(array('max' => 12)); // WHERE id_justificatif <= 12
     * </code>
     *
     * @param     mixed $idJustificatif The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationDocumentCfeQuery The current query, for fluid interface
     */
    public function filterByIdJustificatif($idJustificatif = null, $comparison = null)
    {
        if (is_array($idJustificatif)) {
            $useMinMax = false;
            if (isset($idJustificatif['min'])) {
                $this->addUsingAlias(CommonConsultationDocumentCfePeer::ID_JUSTIFICATIF, $idJustificatif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idJustificatif['max'])) {
                $this->addUsingAlias(CommonConsultationDocumentCfePeer::ID_JUSTIFICATIF, $idJustificatif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationDocumentCfePeer::ID_JUSTIFICATIF, $idJustificatif, $comparison);
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
     * @see       filterByCommonConsultation()
     *
     * @param     mixed $refConsultation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationDocumentCfeQuery The current query, for fluid interface
     */
    public function filterByRefConsultation($refConsultation = null, $comparison = null)
    {
        if (is_array($refConsultation)) {
            $useMinMax = false;
            if (isset($refConsultation['min'])) {
                $this->addUsingAlias(CommonConsultationDocumentCfePeer::REF_CONSULTATION, $refConsultation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refConsultation['max'])) {
                $this->addUsingAlias(CommonConsultationDocumentCfePeer::REF_CONSULTATION, $refConsultation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationDocumentCfePeer::REF_CONSULTATION, $refConsultation, $comparison);
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
     * @return CommonConsultationDocumentCfeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonConsultationDocumentCfePeer::ORGANISME_CONSULTATION, $organismeConsultation, $comparison);
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
     * @return CommonConsultationDocumentCfeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonConsultationDocumentCfePeer::NOM_FICHIER, $nomFichier, $comparison);
    }

    /**
     * Filter the query on the id_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntreprise(1234); // WHERE id_entreprise = 1234
     * $query->filterByIdEntreprise(array(12, 34)); // WHERE id_entreprise IN (12, 34)
     * $query->filterByIdEntreprise(array('min' => 12)); // WHERE id_entreprise >= 12
     * $query->filterByIdEntreprise(array('max' => 12)); // WHERE id_entreprise <= 12
     * </code>
     *
     * @param     mixed $idEntreprise The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationDocumentCfeQuery The current query, for fluid interface
     */
    public function filterByIdEntreprise($idEntreprise = null, $comparison = null)
    {
        if (is_array($idEntreprise)) {
            $useMinMax = false;
            if (isset($idEntreprise['min'])) {
                $this->addUsingAlias(CommonConsultationDocumentCfePeer::ID_ENTREPRISE, $idEntreprise['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntreprise['max'])) {
                $this->addUsingAlias(CommonConsultationDocumentCfePeer::ID_ENTREPRISE, $idEntreprise['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationDocumentCfePeer::ID_ENTREPRISE, $idEntreprise, $comparison);
    }

    /**
     * Filter the query on the taille_document column
     *
     * Example usage:
     * <code>
     * $query->filterByTailleDocument('fooValue');   // WHERE taille_document = 'fooValue'
     * $query->filterByTailleDocument('%fooValue%'); // WHERE taille_document LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tailleDocument The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationDocumentCfeQuery The current query, for fluid interface
     */
    public function filterByTailleDocument($tailleDocument = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tailleDocument)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tailleDocument)) {
                $tailleDocument = str_replace('*', '%', $tailleDocument);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationDocumentCfePeer::TAILLE_DOCUMENT, $tailleDocument, $comparison);
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
     * @return CommonConsultationDocumentCfeQuery The current query, for fluid interface
     */
    public function filterByIdBlob($idBlob = null, $comparison = null)
    {
        if (is_array($idBlob)) {
            $useMinMax = false;
            if (isset($idBlob['min'])) {
                $this->addUsingAlias(CommonConsultationDocumentCfePeer::ID_BLOB, $idBlob['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBlob['max'])) {
                $this->addUsingAlias(CommonConsultationDocumentCfePeer::ID_BLOB, $idBlob['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationDocumentCfePeer::ID_BLOB, $idBlob, $comparison);
    }

    /**
     * Filter the query on the type_document column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeDocument('fooValue');   // WHERE type_document = 'fooValue'
     * $query->filterByTypeDocument('%fooValue%'); // WHERE type_document LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeDocument The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationDocumentCfeQuery The current query, for fluid interface
     */
    public function filterByTypeDocument($typeDocument = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeDocument)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeDocument)) {
                $typeDocument = str_replace('*', '%', $typeDocument);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationDocumentCfePeer::TYPE_DOCUMENT, $typeDocument, $comparison);
    }

    /**
     * Filter the query on the date_fin_validite column
     *
     * Example usage:
     * <code>
     * $query->filterByDateFinValidite('fooValue');   // WHERE date_fin_validite = 'fooValue'
     * $query->filterByDateFinValidite('%fooValue%'); // WHERE date_fin_validite LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateFinValidite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationDocumentCfeQuery The current query, for fluid interface
     */
    public function filterByDateFinValidite($dateFinValidite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateFinValidite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateFinValidite)) {
                $dateFinValidite = str_replace('*', '%', $dateFinValidite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonConsultationDocumentCfePeer::DATE_FIN_VALIDITE, $dateFinValidite, $comparison);
    }

    /**
     * Filter the query on the horodatage column
     *
     * @param     mixed $horodatage The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationDocumentCfeQuery The current query, for fluid interface
     */
    public function filterByHorodatage($horodatage = null, $comparison = null)
    {

        return $this->addUsingAlias(CommonConsultationDocumentCfePeer::HORODATAGE, $horodatage, $comparison);
    }

    /**
     * Filter the query on the untrusteddate column
     *
     * Example usage:
     * <code>
     * $query->filterByUntrusteddate('2011-03-14'); // WHERE untrusteddate = '2011-03-14'
     * $query->filterByUntrusteddate('now'); // WHERE untrusteddate = '2011-03-14'
     * $query->filterByUntrusteddate(array('max' => 'yesterday')); // WHERE untrusteddate > '2011-03-13'
     * </code>
     *
     * @param     mixed $untrusteddate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonConsultationDocumentCfeQuery The current query, for fluid interface
     */
    public function filterByUntrusteddate($untrusteddate = null, $comparison = null)
    {
        if (is_array($untrusteddate)) {
            $useMinMax = false;
            if (isset($untrusteddate['min'])) {
                $this->addUsingAlias(CommonConsultationDocumentCfePeer::UNTRUSTEDDATE, $untrusteddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($untrusteddate['max'])) {
                $this->addUsingAlias(CommonConsultationDocumentCfePeer::UNTRUSTEDDATE, $untrusteddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonConsultationDocumentCfePeer::UNTRUSTEDDATE, $untrusteddate, $comparison);
    }

    /**
     * Filter the query by a related CommonConsultation object
     *
     * @param   CommonConsultation|PropelObjectCollection $commonConsultation The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonConsultationDocumentCfeQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonConsultation($commonConsultation, $comparison = null)
    {
        if ($commonConsultation instanceof CommonConsultation) {
            return $this
                ->addUsingAlias(CommonConsultationDocumentCfePeer::REF_CONSULTATION, $commonConsultation->getReference(), $comparison);
        } elseif ($commonConsultation instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonConsultationDocumentCfePeer::REF_CONSULTATION, $commonConsultation->toKeyValue('Reference', 'Reference'), $comparison);
        } else {
            throw new PropelException('filterByCommonConsultation() only accepts arguments of type CommonConsultation or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonConsultation relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonConsultationDocumentCfeQuery The current query, for fluid interface
     */
    public function joinCommonConsultation($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonConsultation');

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
            $this->addJoinObject($join, 'CommonConsultation');
        }

        return $this;
    }

    /**
     * Use the CommonConsultation relation CommonConsultation object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonConsultationQuery A secondary query class using the current class as primary query
     */
    public function useCommonConsultationQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonConsultation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonConsultation', 'CommonConsultationQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonConsultationDocumentCfe $commonConsultationDocumentCfe Object to remove from the list of results
     *
     * @return CommonConsultationDocumentCfeQuery The current query, for fluid interface
     */
    public function prune($commonConsultationDocumentCfe = null)
    {
        if ($commonConsultationDocumentCfe) {
            $this->addUsingAlias(CommonConsultationDocumentCfePeer::ID, $commonConsultationDocumentCfe->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
