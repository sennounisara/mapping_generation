<?php


/**
 * Base class that represents a query for the 'fichierEnveloppe' table.
 *
 * 
 *
 * @method CommonFichierEnveloppeQuery orderByIdFichier($order = Criteria::ASC) Order by the id_fichier column
 * @method CommonFichierEnveloppeQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonFichierEnveloppeQuery orderByIdEnveloppe($order = Criteria::ASC) Order by the id_enveloppe column
 * @method CommonFichierEnveloppeQuery orderByTypeFichier($order = Criteria::ASC) Order by the type_fichier column
 * @method CommonFichierEnveloppeQuery orderByNumOrdreFichier($order = Criteria::ASC) Order by the num_ordre_fichier column
 * @method CommonFichierEnveloppeQuery orderByNomFichier($order = Criteria::ASC) Order by the nom_fichier column
 * @method CommonFichierEnveloppeQuery orderByTailleFichier($order = Criteria::ASC) Order by the taille_fichier column
 * @method CommonFichierEnveloppeQuery orderBySignatureFichier($order = Criteria::ASC) Order by the signature_fichier column
 * @method CommonFichierEnveloppeQuery orderByHash($order = Criteria::ASC) Order by the hash column
 * @method CommonFichierEnveloppeQuery orderByVerificationCertificat($order = Criteria::ASC) Order by the verification_certificat column
 * @method CommonFichierEnveloppeQuery orderByIdBlob($order = Criteria::ASC) Order by the id_blob column
 * @method CommonFichierEnveloppeQuery orderByIdBlobSignature($order = Criteria::ASC) Order by the id_blob_signature column
 * @method CommonFichierEnveloppeQuery orderByTypePiece($order = Criteria::ASC) Order by the type_piece column
 * @method CommonFichierEnveloppeQuery orderByIdTypePiece($order = Criteria::ASC) Order by the id_type_piece column
 * @method CommonFichierEnveloppeQuery orderByIsHash($order = Criteria::ASC) Order by the is_hash column
 * @method CommonFichierEnveloppeQuery orderByNomReferentielCertificat($order = Criteria::ASC) Order by the nom_referentiel_certificat column
 * @method CommonFichierEnveloppeQuery orderByStatutReferentielCertificat($order = Criteria::ASC) Order by the statut_referentiel_certificat column
 * @method CommonFichierEnveloppeQuery orderByNomReferentielFonctionnel($order = Criteria::ASC) Order by the nom_referentiel_fonctionnel column
 * @method CommonFichierEnveloppeQuery orderByMessage($order = Criteria::ASC) Order by the message column
 * @method CommonFichierEnveloppeQuery orderByDateSignature($order = Criteria::ASC) Order by the date_signature column
 *
 * @method CommonFichierEnveloppeQuery groupByIdFichier() Group by the id_fichier column
 * @method CommonFichierEnveloppeQuery groupByOrganisme() Group by the organisme column
 * @method CommonFichierEnveloppeQuery groupByIdEnveloppe() Group by the id_enveloppe column
 * @method CommonFichierEnveloppeQuery groupByTypeFichier() Group by the type_fichier column
 * @method CommonFichierEnveloppeQuery groupByNumOrdreFichier() Group by the num_ordre_fichier column
 * @method CommonFichierEnveloppeQuery groupByNomFichier() Group by the nom_fichier column
 * @method CommonFichierEnveloppeQuery groupByTailleFichier() Group by the taille_fichier column
 * @method CommonFichierEnveloppeQuery groupBySignatureFichier() Group by the signature_fichier column
 * @method CommonFichierEnveloppeQuery groupByHash() Group by the hash column
 * @method CommonFichierEnveloppeQuery groupByVerificationCertificat() Group by the verification_certificat column
 * @method CommonFichierEnveloppeQuery groupByIdBlob() Group by the id_blob column
 * @method CommonFichierEnveloppeQuery groupByIdBlobSignature() Group by the id_blob_signature column
 * @method CommonFichierEnveloppeQuery groupByTypePiece() Group by the type_piece column
 * @method CommonFichierEnveloppeQuery groupByIdTypePiece() Group by the id_type_piece column
 * @method CommonFichierEnveloppeQuery groupByIsHash() Group by the is_hash column
 * @method CommonFichierEnveloppeQuery groupByNomReferentielCertificat() Group by the nom_referentiel_certificat column
 * @method CommonFichierEnveloppeQuery groupByStatutReferentielCertificat() Group by the statut_referentiel_certificat column
 * @method CommonFichierEnveloppeQuery groupByNomReferentielFonctionnel() Group by the nom_referentiel_fonctionnel column
 * @method CommonFichierEnveloppeQuery groupByMessage() Group by the message column
 * @method CommonFichierEnveloppeQuery groupByDateSignature() Group by the date_signature column
 *
 * @method CommonFichierEnveloppeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonFichierEnveloppeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonFichierEnveloppeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonFichierEnveloppe findOne(PropelPDO $con = null) Return the first CommonFichierEnveloppe matching the query
 * @method CommonFichierEnveloppe findOneOrCreate(PropelPDO $con = null) Return the first CommonFichierEnveloppe matching the query, or a new CommonFichierEnveloppe object populated from the query conditions when no match is found
 *
 * @method CommonFichierEnveloppe findOneByIdFichier(int $id_fichier) Return the first CommonFichierEnveloppe filtered by the id_fichier column
 * @method CommonFichierEnveloppe findOneByOrganisme(string $organisme) Return the first CommonFichierEnveloppe filtered by the organisme column
 * @method CommonFichierEnveloppe findOneByIdEnveloppe(int $id_enveloppe) Return the first CommonFichierEnveloppe filtered by the id_enveloppe column
 * @method CommonFichierEnveloppe findOneByTypeFichier(string $type_fichier) Return the first CommonFichierEnveloppe filtered by the type_fichier column
 * @method CommonFichierEnveloppe findOneByNumOrdreFichier(int $num_ordre_fichier) Return the first CommonFichierEnveloppe filtered by the num_ordre_fichier column
 * @method CommonFichierEnveloppe findOneByNomFichier(string $nom_fichier) Return the first CommonFichierEnveloppe filtered by the nom_fichier column
 * @method CommonFichierEnveloppe findOneByTailleFichier(string $taille_fichier) Return the first CommonFichierEnveloppe filtered by the taille_fichier column
 * @method CommonFichierEnveloppe findOneBySignatureFichier(string $signature_fichier) Return the first CommonFichierEnveloppe filtered by the signature_fichier column
 * @method CommonFichierEnveloppe findOneByHash(string $hash) Return the first CommonFichierEnveloppe filtered by the hash column
 * @method CommonFichierEnveloppe findOneByVerificationCertificat(string $verification_certificat) Return the first CommonFichierEnveloppe filtered by the verification_certificat column
 * @method CommonFichierEnveloppe findOneByIdBlob(int $id_blob) Return the first CommonFichierEnveloppe filtered by the id_blob column
 * @method CommonFichierEnveloppe findOneByIdBlobSignature(int $id_blob_signature) Return the first CommonFichierEnveloppe filtered by the id_blob_signature column
 * @method CommonFichierEnveloppe findOneByTypePiece(int $type_piece) Return the first CommonFichierEnveloppe filtered by the type_piece column
 * @method CommonFichierEnveloppe findOneByIdTypePiece(int $id_type_piece) Return the first CommonFichierEnveloppe filtered by the id_type_piece column
 * @method CommonFichierEnveloppe findOneByIsHash(string $is_hash) Return the first CommonFichierEnveloppe filtered by the is_hash column
 * @method CommonFichierEnveloppe findOneByNomReferentielCertificat(string $nom_referentiel_certificat) Return the first CommonFichierEnveloppe filtered by the nom_referentiel_certificat column
 * @method CommonFichierEnveloppe findOneByStatutReferentielCertificat(int $statut_referentiel_certificat) Return the first CommonFichierEnveloppe filtered by the statut_referentiel_certificat column
 * @method CommonFichierEnveloppe findOneByNomReferentielFonctionnel(string $nom_referentiel_fonctionnel) Return the first CommonFichierEnveloppe filtered by the nom_referentiel_fonctionnel column
 * @method CommonFichierEnveloppe findOneByMessage(string $message) Return the first CommonFichierEnveloppe filtered by the message column
 * @method CommonFichierEnveloppe findOneByDateSignature(string $date_signature) Return the first CommonFichierEnveloppe filtered by the date_signature column
 *
 * @method array findByIdFichier(int $id_fichier) Return CommonFichierEnveloppe objects filtered by the id_fichier column
 * @method array findByOrganisme(string $organisme) Return CommonFichierEnveloppe objects filtered by the organisme column
 * @method array findByIdEnveloppe(int $id_enveloppe) Return CommonFichierEnveloppe objects filtered by the id_enveloppe column
 * @method array findByTypeFichier(string $type_fichier) Return CommonFichierEnveloppe objects filtered by the type_fichier column
 * @method array findByNumOrdreFichier(int $num_ordre_fichier) Return CommonFichierEnveloppe objects filtered by the num_ordre_fichier column
 * @method array findByNomFichier(string $nom_fichier) Return CommonFichierEnveloppe objects filtered by the nom_fichier column
 * @method array findByTailleFichier(string $taille_fichier) Return CommonFichierEnveloppe objects filtered by the taille_fichier column
 * @method array findBySignatureFichier(string $signature_fichier) Return CommonFichierEnveloppe objects filtered by the signature_fichier column
 * @method array findByHash(string $hash) Return CommonFichierEnveloppe objects filtered by the hash column
 * @method array findByVerificationCertificat(string $verification_certificat) Return CommonFichierEnveloppe objects filtered by the verification_certificat column
 * @method array findByIdBlob(int $id_blob) Return CommonFichierEnveloppe objects filtered by the id_blob column
 * @method array findByIdBlobSignature(int $id_blob_signature) Return CommonFichierEnveloppe objects filtered by the id_blob_signature column
 * @method array findByTypePiece(int $type_piece) Return CommonFichierEnveloppe objects filtered by the type_piece column
 * @method array findByIdTypePiece(int $id_type_piece) Return CommonFichierEnveloppe objects filtered by the id_type_piece column
 * @method array findByIsHash(string $is_hash) Return CommonFichierEnveloppe objects filtered by the is_hash column
 * @method array findByNomReferentielCertificat(string $nom_referentiel_certificat) Return CommonFichierEnveloppe objects filtered by the nom_referentiel_certificat column
 * @method array findByStatutReferentielCertificat(int $statut_referentiel_certificat) Return CommonFichierEnveloppe objects filtered by the statut_referentiel_certificat column
 * @method array findByNomReferentielFonctionnel(string $nom_referentiel_fonctionnel) Return CommonFichierEnveloppe objects filtered by the nom_referentiel_fonctionnel column
 * @method array findByMessage(string $message) Return CommonFichierEnveloppe objects filtered by the message column
 * @method array findByDateSignature(string $date_signature) Return CommonFichierEnveloppe objects filtered by the date_signature column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonFichierEnveloppeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonFichierEnveloppeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonFichierEnveloppe', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonFichierEnveloppeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonFichierEnveloppeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonFichierEnveloppeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonFichierEnveloppeQuery) {
            return $criteria;
        }
        $query = new CommonFichierEnveloppeQuery();
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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query 
                         A Primary key composition: [$id_fichier, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonFichierEnveloppe|CommonFichierEnveloppe[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonFichierEnveloppePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonFichierEnveloppePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonFichierEnveloppe A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_fichier`, `organisme`, `id_enveloppe`, `type_fichier`, `num_ordre_fichier`, `nom_fichier`, `taille_fichier`, `signature_fichier`, `hash`, `verification_certificat`, `id_blob`, `id_blob_signature`, `type_piece`, `id_type_piece`, `is_hash`, `nom_referentiel_certificat`, `statut_referentiel_certificat`, `nom_referentiel_fonctionnel`, `message`, `date_signature` FROM `fichierEnveloppe` WHERE `id_fichier` = :p0 AND `organisme` = :p1';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonFichierEnveloppe();
            $obj->hydrate($row);
            CommonFichierEnveloppePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonFichierEnveloppe|CommonFichierEnveloppe[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CommonFichierEnveloppe[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonFichierEnveloppeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonFichierEnveloppePeer::ID_FICHIER, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonFichierEnveloppePeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonFichierEnveloppeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonFichierEnveloppePeer::ID_FICHIER, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonFichierEnveloppePeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the id_fichier column
     *
     * Example usage:
     * <code>
     * $query->filterByIdFichier(1234); // WHERE id_fichier = 1234
     * $query->filterByIdFichier(array(12, 34)); // WHERE id_fichier IN (12, 34)
     * $query->filterByIdFichier(array('min' => 12)); // WHERE id_fichier >= 12
     * $query->filterByIdFichier(array('max' => 12)); // WHERE id_fichier <= 12
     * </code>
     *
     * @param     mixed $idFichier The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFichierEnveloppeQuery The current query, for fluid interface
     */
    public function filterByIdFichier($idFichier = null, $comparison = null)
    {
        if (is_array($idFichier)) {
            $useMinMax = false;
            if (isset($idFichier['min'])) {
                $this->addUsingAlias(CommonFichierEnveloppePeer::ID_FICHIER, $idFichier['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idFichier['max'])) {
                $this->addUsingAlias(CommonFichierEnveloppePeer::ID_FICHIER, $idFichier['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonFichierEnveloppePeer::ID_FICHIER, $idFichier, $comparison);
    }

    /**
     * Filter the query on the organisme column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganisme('fooValue');   // WHERE organisme = 'fooValue'
     * $query->filterByOrganisme('%fooValue%'); // WHERE organisme LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organisme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFichierEnveloppeQuery The current query, for fluid interface
     */
    public function filterByOrganisme($organisme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($organisme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $organisme)) {
                $organisme = str_replace('*', '%', $organisme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFichierEnveloppePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the id_enveloppe column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEnveloppe(1234); // WHERE id_enveloppe = 1234
     * $query->filterByIdEnveloppe(array(12, 34)); // WHERE id_enveloppe IN (12, 34)
     * $query->filterByIdEnveloppe(array('min' => 12)); // WHERE id_enveloppe >= 12
     * $query->filterByIdEnveloppe(array('max' => 12)); // WHERE id_enveloppe <= 12
     * </code>
     *
     * @param     mixed $idEnveloppe The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFichierEnveloppeQuery The current query, for fluid interface
     */
    public function filterByIdEnveloppe($idEnveloppe = null, $comparison = null)
    {
        if (is_array($idEnveloppe)) {
            $useMinMax = false;
            if (isset($idEnveloppe['min'])) {
                $this->addUsingAlias(CommonFichierEnveloppePeer::ID_ENVELOPPE, $idEnveloppe['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEnveloppe['max'])) {
                $this->addUsingAlias(CommonFichierEnveloppePeer::ID_ENVELOPPE, $idEnveloppe['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonFichierEnveloppePeer::ID_ENVELOPPE, $idEnveloppe, $comparison);
    }

    /**
     * Filter the query on the type_fichier column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeFichier('fooValue');   // WHERE type_fichier = 'fooValue'
     * $query->filterByTypeFichier('%fooValue%'); // WHERE type_fichier LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeFichier The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFichierEnveloppeQuery The current query, for fluid interface
     */
    public function filterByTypeFichier($typeFichier = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeFichier)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeFichier)) {
                $typeFichier = str_replace('*', '%', $typeFichier);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFichierEnveloppePeer::TYPE_FICHIER, $typeFichier, $comparison);
    }

    /**
     * Filter the query on the num_ordre_fichier column
     *
     * Example usage:
     * <code>
     * $query->filterByNumOrdreFichier(1234); // WHERE num_ordre_fichier = 1234
     * $query->filterByNumOrdreFichier(array(12, 34)); // WHERE num_ordre_fichier IN (12, 34)
     * $query->filterByNumOrdreFichier(array('min' => 12)); // WHERE num_ordre_fichier >= 12
     * $query->filterByNumOrdreFichier(array('max' => 12)); // WHERE num_ordre_fichier <= 12
     * </code>
     *
     * @param     mixed $numOrdreFichier The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFichierEnveloppeQuery The current query, for fluid interface
     */
    public function filterByNumOrdreFichier($numOrdreFichier = null, $comparison = null)
    {
        if (is_array($numOrdreFichier)) {
            $useMinMax = false;
            if (isset($numOrdreFichier['min'])) {
                $this->addUsingAlias(CommonFichierEnveloppePeer::NUM_ORDRE_FICHIER, $numOrdreFichier['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numOrdreFichier['max'])) {
                $this->addUsingAlias(CommonFichierEnveloppePeer::NUM_ORDRE_FICHIER, $numOrdreFichier['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonFichierEnveloppePeer::NUM_ORDRE_FICHIER, $numOrdreFichier, $comparison);
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
     * @return CommonFichierEnveloppeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonFichierEnveloppePeer::NOM_FICHIER, $nomFichier, $comparison);
    }

    /**
     * Filter the query on the taille_fichier column
     *
     * Example usage:
     * <code>
     * $query->filterByTailleFichier('fooValue');   // WHERE taille_fichier = 'fooValue'
     * $query->filterByTailleFichier('%fooValue%'); // WHERE taille_fichier LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tailleFichier The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFichierEnveloppeQuery The current query, for fluid interface
     */
    public function filterByTailleFichier($tailleFichier = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tailleFichier)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tailleFichier)) {
                $tailleFichier = str_replace('*', '%', $tailleFichier);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFichierEnveloppePeer::TAILLE_FICHIER, $tailleFichier, $comparison);
    }

    /**
     * Filter the query on the signature_fichier column
     *
     * Example usage:
     * <code>
     * $query->filterBySignatureFichier('fooValue');   // WHERE signature_fichier = 'fooValue'
     * $query->filterBySignatureFichier('%fooValue%'); // WHERE signature_fichier LIKE '%fooValue%'
     * </code>
     *
     * @param     string $signatureFichier The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFichierEnveloppeQuery The current query, for fluid interface
     */
    public function filterBySignatureFichier($signatureFichier = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($signatureFichier)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $signatureFichier)) {
                $signatureFichier = str_replace('*', '%', $signatureFichier);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFichierEnveloppePeer::SIGNATURE_FICHIER, $signatureFichier, $comparison);
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
     * @return CommonFichierEnveloppeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonFichierEnveloppePeer::HASH, $hash, $comparison);
    }

    /**
     * Filter the query on the verification_certificat column
     *
     * Example usage:
     * <code>
     * $query->filterByVerificationCertificat('fooValue');   // WHERE verification_certificat = 'fooValue'
     * $query->filterByVerificationCertificat('%fooValue%'); // WHERE verification_certificat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $verificationCertificat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFichierEnveloppeQuery The current query, for fluid interface
     */
    public function filterByVerificationCertificat($verificationCertificat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($verificationCertificat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $verificationCertificat)) {
                $verificationCertificat = str_replace('*', '%', $verificationCertificat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFichierEnveloppePeer::VERIFICATION_CERTIFICAT, $verificationCertificat, $comparison);
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
     * @return CommonFichierEnveloppeQuery The current query, for fluid interface
     */
    public function filterByIdBlob($idBlob = null, $comparison = null)
    {
        if (is_array($idBlob)) {
            $useMinMax = false;
            if (isset($idBlob['min'])) {
                $this->addUsingAlias(CommonFichierEnveloppePeer::ID_BLOB, $idBlob['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBlob['max'])) {
                $this->addUsingAlias(CommonFichierEnveloppePeer::ID_BLOB, $idBlob['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonFichierEnveloppePeer::ID_BLOB, $idBlob, $comparison);
    }

    /**
     * Filter the query on the id_blob_signature column
     *
     * Example usage:
     * <code>
     * $query->filterByIdBlobSignature(1234); // WHERE id_blob_signature = 1234
     * $query->filterByIdBlobSignature(array(12, 34)); // WHERE id_blob_signature IN (12, 34)
     * $query->filterByIdBlobSignature(array('min' => 12)); // WHERE id_blob_signature >= 12
     * $query->filterByIdBlobSignature(array('max' => 12)); // WHERE id_blob_signature <= 12
     * </code>
     *
     * @param     mixed $idBlobSignature The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFichierEnveloppeQuery The current query, for fluid interface
     */
    public function filterByIdBlobSignature($idBlobSignature = null, $comparison = null)
    {
        if (is_array($idBlobSignature)) {
            $useMinMax = false;
            if (isset($idBlobSignature['min'])) {
                $this->addUsingAlias(CommonFichierEnveloppePeer::ID_BLOB_SIGNATURE, $idBlobSignature['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBlobSignature['max'])) {
                $this->addUsingAlias(CommonFichierEnveloppePeer::ID_BLOB_SIGNATURE, $idBlobSignature['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonFichierEnveloppePeer::ID_BLOB_SIGNATURE, $idBlobSignature, $comparison);
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
     * @param     mixed $typePiece The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFichierEnveloppeQuery The current query, for fluid interface
     */
    public function filterByTypePiece($typePiece = null, $comparison = null)
    {
        if (is_array($typePiece)) {
            $useMinMax = false;
            if (isset($typePiece['min'])) {
                $this->addUsingAlias(CommonFichierEnveloppePeer::TYPE_PIECE, $typePiece['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typePiece['max'])) {
                $this->addUsingAlias(CommonFichierEnveloppePeer::TYPE_PIECE, $typePiece['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonFichierEnveloppePeer::TYPE_PIECE, $typePiece, $comparison);
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
     * @param     mixed $idTypePiece The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFichierEnveloppeQuery The current query, for fluid interface
     */
    public function filterByIdTypePiece($idTypePiece = null, $comparison = null)
    {
        if (is_array($idTypePiece)) {
            $useMinMax = false;
            if (isset($idTypePiece['min'])) {
                $this->addUsingAlias(CommonFichierEnveloppePeer::ID_TYPE_PIECE, $idTypePiece['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypePiece['max'])) {
                $this->addUsingAlias(CommonFichierEnveloppePeer::ID_TYPE_PIECE, $idTypePiece['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonFichierEnveloppePeer::ID_TYPE_PIECE, $idTypePiece, $comparison);
    }

    /**
     * Filter the query on the is_hash column
     *
     * Example usage:
     * <code>
     * $query->filterByIsHash('fooValue');   // WHERE is_hash = 'fooValue'
     * $query->filterByIsHash('%fooValue%'); // WHERE is_hash LIKE '%fooValue%'
     * </code>
     *
     * @param     string $isHash The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFichierEnveloppeQuery The current query, for fluid interface
     */
    public function filterByIsHash($isHash = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($isHash)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $isHash)) {
                $isHash = str_replace('*', '%', $isHash);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFichierEnveloppePeer::IS_HASH, $isHash, $comparison);
    }

    /**
     * Filter the query on the nom_referentiel_certificat column
     *
     * Example usage:
     * <code>
     * $query->filterByNomReferentielCertificat('fooValue');   // WHERE nom_referentiel_certificat = 'fooValue'
     * $query->filterByNomReferentielCertificat('%fooValue%'); // WHERE nom_referentiel_certificat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomReferentielCertificat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFichierEnveloppeQuery The current query, for fluid interface
     */
    public function filterByNomReferentielCertificat($nomReferentielCertificat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomReferentielCertificat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomReferentielCertificat)) {
                $nomReferentielCertificat = str_replace('*', '%', $nomReferentielCertificat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFichierEnveloppePeer::NOM_REFERENTIEL_CERTIFICAT, $nomReferentielCertificat, $comparison);
    }

    /**
     * Filter the query on the statut_referentiel_certificat column
     *
     * Example usage:
     * <code>
     * $query->filterByStatutReferentielCertificat(1234); // WHERE statut_referentiel_certificat = 1234
     * $query->filterByStatutReferentielCertificat(array(12, 34)); // WHERE statut_referentiel_certificat IN (12, 34)
     * $query->filterByStatutReferentielCertificat(array('min' => 12)); // WHERE statut_referentiel_certificat >= 12
     * $query->filterByStatutReferentielCertificat(array('max' => 12)); // WHERE statut_referentiel_certificat <= 12
     * </code>
     *
     * @param     mixed $statutReferentielCertificat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFichierEnveloppeQuery The current query, for fluid interface
     */
    public function filterByStatutReferentielCertificat($statutReferentielCertificat = null, $comparison = null)
    {
        if (is_array($statutReferentielCertificat)) {
            $useMinMax = false;
            if (isset($statutReferentielCertificat['min'])) {
                $this->addUsingAlias(CommonFichierEnveloppePeer::STATUT_REFERENTIEL_CERTIFICAT, $statutReferentielCertificat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statutReferentielCertificat['max'])) {
                $this->addUsingAlias(CommonFichierEnveloppePeer::STATUT_REFERENTIEL_CERTIFICAT, $statutReferentielCertificat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonFichierEnveloppePeer::STATUT_REFERENTIEL_CERTIFICAT, $statutReferentielCertificat, $comparison);
    }

    /**
     * Filter the query on the nom_referentiel_fonctionnel column
     *
     * Example usage:
     * <code>
     * $query->filterByNomReferentielFonctionnel('fooValue');   // WHERE nom_referentiel_fonctionnel = 'fooValue'
     * $query->filterByNomReferentielFonctionnel('%fooValue%'); // WHERE nom_referentiel_fonctionnel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomReferentielFonctionnel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFichierEnveloppeQuery The current query, for fluid interface
     */
    public function filterByNomReferentielFonctionnel($nomReferentielFonctionnel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomReferentielFonctionnel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomReferentielFonctionnel)) {
                $nomReferentielFonctionnel = str_replace('*', '%', $nomReferentielFonctionnel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFichierEnveloppePeer::NOM_REFERENTIEL_FONCTIONNEL, $nomReferentielFonctionnel, $comparison);
    }

    /**
     * Filter the query on the message column
     *
     * Example usage:
     * <code>
     * $query->filterByMessage('fooValue');   // WHERE message = 'fooValue'
     * $query->filterByMessage('%fooValue%'); // WHERE message LIKE '%fooValue%'
     * </code>
     *
     * @param     string $message The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFichierEnveloppeQuery The current query, for fluid interface
     */
    public function filterByMessage($message = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($message)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $message)) {
                $message = str_replace('*', '%', $message);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFichierEnveloppePeer::MESSAGE, $message, $comparison);
    }

    /**
     * Filter the query on the date_signature column
     *
     * Example usage:
     * <code>
     * $query->filterByDateSignature('fooValue');   // WHERE date_signature = 'fooValue'
     * $query->filterByDateSignature('%fooValue%'); // WHERE date_signature LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateSignature The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonFichierEnveloppeQuery The current query, for fluid interface
     */
    public function filterByDateSignature($dateSignature = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateSignature)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateSignature)) {
                $dateSignature = str_replace('*', '%', $dateSignature);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonFichierEnveloppePeer::DATE_SIGNATURE, $dateSignature, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonFichierEnveloppe $commonFichierEnveloppe Object to remove from the list of results
     *
     * @return CommonFichierEnveloppeQuery The current query, for fluid interface
     */
    public function prune($commonFichierEnveloppe = null)
    {
        if ($commonFichierEnveloppe) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonFichierEnveloppePeer::ID_FICHIER), $commonFichierEnveloppe->getIdFichier(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonFichierEnveloppePeer::ORGANISME), $commonFichierEnveloppe->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
