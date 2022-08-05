<?php


/**
 * Base class that represents a query for the 'Autres_Pieces_Mise_Disposition' table.
 *
 * 
 *
 * @method CommonAutresPiecesMiseDispositionQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonAutresPiecesMiseDispositionQuery orderByIdDecisionEnveloppe($order = Criteria::ASC) Order by the id_decision_enveloppe column
 * @method CommonAutresPiecesMiseDispositionQuery orderByOrg($order = Criteria::ASC) Order by the org column
 * @method CommonAutresPiecesMiseDispositionQuery orderByIdDestinataire($order = Criteria::ASC) Order by the id_destinataire column
 * @method CommonAutresPiecesMiseDispositionQuery orderByIdBlob($order = Criteria::ASC) Order by the id_blob column
 * @method CommonAutresPiecesMiseDispositionQuery orderByNomFichier($order = Criteria::ASC) Order by the nom_fichier column
 * @method CommonAutresPiecesMiseDispositionQuery orderByTailleFichier($order = Criteria::ASC) Order by the taille_fichier column
 * @method CommonAutresPiecesMiseDispositionQuery orderByDateCreation($order = Criteria::ASC) Order by the date_creation column
 * @method CommonAutresPiecesMiseDispositionQuery orderByHorodatage($order = Criteria::ASC) Order by the horodatage column
 * @method CommonAutresPiecesMiseDispositionQuery orderByUntrusteddate($order = Criteria::ASC) Order by the untrusteddate column
 * @method CommonAutresPiecesMiseDispositionQuery orderByAgentId($order = Criteria::ASC) Order by the agent_id column
 *
 * @method CommonAutresPiecesMiseDispositionQuery groupById() Group by the id column
 * @method CommonAutresPiecesMiseDispositionQuery groupByIdDecisionEnveloppe() Group by the id_decision_enveloppe column
 * @method CommonAutresPiecesMiseDispositionQuery groupByOrg() Group by the org column
 * @method CommonAutresPiecesMiseDispositionQuery groupByIdDestinataire() Group by the id_destinataire column
 * @method CommonAutresPiecesMiseDispositionQuery groupByIdBlob() Group by the id_blob column
 * @method CommonAutresPiecesMiseDispositionQuery groupByNomFichier() Group by the nom_fichier column
 * @method CommonAutresPiecesMiseDispositionQuery groupByTailleFichier() Group by the taille_fichier column
 * @method CommonAutresPiecesMiseDispositionQuery groupByDateCreation() Group by the date_creation column
 * @method CommonAutresPiecesMiseDispositionQuery groupByHorodatage() Group by the horodatage column
 * @method CommonAutresPiecesMiseDispositionQuery groupByUntrusteddate() Group by the untrusteddate column
 * @method CommonAutresPiecesMiseDispositionQuery groupByAgentId() Group by the agent_id column
 *
 * @method CommonAutresPiecesMiseDispositionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonAutresPiecesMiseDispositionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonAutresPiecesMiseDispositionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonAutresPiecesMiseDisposition findOne(PropelPDO $con = null) Return the first CommonAutresPiecesMiseDisposition matching the query
 * @method CommonAutresPiecesMiseDisposition findOneOrCreate(PropelPDO $con = null) Return the first CommonAutresPiecesMiseDisposition matching the query, or a new CommonAutresPiecesMiseDisposition object populated from the query conditions when no match is found
 *
 * @method CommonAutresPiecesMiseDisposition findOneByIdDecisionEnveloppe(int $id_decision_enveloppe) Return the first CommonAutresPiecesMiseDisposition filtered by the id_decision_enveloppe column
 * @method CommonAutresPiecesMiseDisposition findOneByOrg(string $org) Return the first CommonAutresPiecesMiseDisposition filtered by the org column
 * @method CommonAutresPiecesMiseDisposition findOneByIdDestinataire(int $id_destinataire) Return the first CommonAutresPiecesMiseDisposition filtered by the id_destinataire column
 * @method CommonAutresPiecesMiseDisposition findOneByIdBlob(int $id_blob) Return the first CommonAutresPiecesMiseDisposition filtered by the id_blob column
 * @method CommonAutresPiecesMiseDisposition findOneByNomFichier(string $nom_fichier) Return the first CommonAutresPiecesMiseDisposition filtered by the nom_fichier column
 * @method CommonAutresPiecesMiseDisposition findOneByTailleFichier(string $taille_fichier) Return the first CommonAutresPiecesMiseDisposition filtered by the taille_fichier column
 * @method CommonAutresPiecesMiseDisposition findOneByDateCreation(string $date_creation) Return the first CommonAutresPiecesMiseDisposition filtered by the date_creation column
 * @method CommonAutresPiecesMiseDisposition findOneByHorodatage(resource $horodatage) Return the first CommonAutresPiecesMiseDisposition filtered by the horodatage column
 * @method CommonAutresPiecesMiseDisposition findOneByUntrusteddate(string $untrusteddate) Return the first CommonAutresPiecesMiseDisposition filtered by the untrusteddate column
 * @method CommonAutresPiecesMiseDisposition findOneByAgentId(int $agent_id) Return the first CommonAutresPiecesMiseDisposition filtered by the agent_id column
 *
 * @method array findById(int $id) Return CommonAutresPiecesMiseDisposition objects filtered by the id column
 * @method array findByIdDecisionEnveloppe(int $id_decision_enveloppe) Return CommonAutresPiecesMiseDisposition objects filtered by the id_decision_enveloppe column
 * @method array findByOrg(string $org) Return CommonAutresPiecesMiseDisposition objects filtered by the org column
 * @method array findByIdDestinataire(int $id_destinataire) Return CommonAutresPiecesMiseDisposition objects filtered by the id_destinataire column
 * @method array findByIdBlob(int $id_blob) Return CommonAutresPiecesMiseDisposition objects filtered by the id_blob column
 * @method array findByNomFichier(string $nom_fichier) Return CommonAutresPiecesMiseDisposition objects filtered by the nom_fichier column
 * @method array findByTailleFichier(string $taille_fichier) Return CommonAutresPiecesMiseDisposition objects filtered by the taille_fichier column
 * @method array findByDateCreation(string $date_creation) Return CommonAutresPiecesMiseDisposition objects filtered by the date_creation column
 * @method array findByHorodatage(resource $horodatage) Return CommonAutresPiecesMiseDisposition objects filtered by the horodatage column
 * @method array findByUntrusteddate(string $untrusteddate) Return CommonAutresPiecesMiseDisposition objects filtered by the untrusteddate column
 * @method array findByAgentId(int $agent_id) Return CommonAutresPiecesMiseDisposition objects filtered by the agent_id column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonAutresPiecesMiseDispositionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonAutresPiecesMiseDispositionQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonAutresPiecesMiseDisposition', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonAutresPiecesMiseDispositionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonAutresPiecesMiseDispositionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonAutresPiecesMiseDispositionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonAutresPiecesMiseDispositionQuery) {
            return $criteria;
        }
        $query = new CommonAutresPiecesMiseDispositionQuery();
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
     * @return   CommonAutresPiecesMiseDisposition|CommonAutresPiecesMiseDisposition[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonAutresPiecesMiseDispositionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonAutresPiecesMiseDispositionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonAutresPiecesMiseDisposition A model object, or null if the key is not found
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
     * @return                 CommonAutresPiecesMiseDisposition A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_decision_enveloppe`, `org`, `id_destinataire`, `id_blob`, `nom_fichier`, `taille_fichier`, `date_creation`, `horodatage`, `untrusteddate`, `agent_id` FROM `Autres_Pieces_Mise_Disposition` WHERE `id` = :p0';
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
            $obj = new CommonAutresPiecesMiseDisposition();
            $obj->hydrate($row);
            CommonAutresPiecesMiseDispositionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonAutresPiecesMiseDisposition|CommonAutresPiecesMiseDisposition[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonAutresPiecesMiseDisposition[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonAutresPiecesMiseDispositionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonAutresPiecesMiseDispositionPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonAutresPiecesMiseDispositionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonAutresPiecesMiseDispositionPeer::ID, $keys, Criteria::IN);
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
     * @return CommonAutresPiecesMiseDispositionQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonAutresPiecesMiseDispositionPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonAutresPiecesMiseDispositionPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAutresPiecesMiseDispositionPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_decision_enveloppe column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDecisionEnveloppe(1234); // WHERE id_decision_enveloppe = 1234
     * $query->filterByIdDecisionEnveloppe(array(12, 34)); // WHERE id_decision_enveloppe IN (12, 34)
     * $query->filterByIdDecisionEnveloppe(array('min' => 12)); // WHERE id_decision_enveloppe >= 12
     * $query->filterByIdDecisionEnveloppe(array('max' => 12)); // WHERE id_decision_enveloppe <= 12
     * </code>
     *
     * @param     mixed $idDecisionEnveloppe The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAutresPiecesMiseDispositionQuery The current query, for fluid interface
     */
    public function filterByIdDecisionEnveloppe($idDecisionEnveloppe = null, $comparison = null)
    {
        if (is_array($idDecisionEnveloppe)) {
            $useMinMax = false;
            if (isset($idDecisionEnveloppe['min'])) {
                $this->addUsingAlias(CommonAutresPiecesMiseDispositionPeer::ID_DECISION_ENVELOPPE, $idDecisionEnveloppe['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDecisionEnveloppe['max'])) {
                $this->addUsingAlias(CommonAutresPiecesMiseDispositionPeer::ID_DECISION_ENVELOPPE, $idDecisionEnveloppe['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAutresPiecesMiseDispositionPeer::ID_DECISION_ENVELOPPE, $idDecisionEnveloppe, $comparison);
    }

    /**
     * Filter the query on the org column
     *
     * Example usage:
     * <code>
     * $query->filterByOrg('fooValue');   // WHERE org = 'fooValue'
     * $query->filterByOrg('%fooValue%'); // WHERE org LIKE '%fooValue%'
     * </code>
     *
     * @param     string $org The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAutresPiecesMiseDispositionQuery The current query, for fluid interface
     */
    public function filterByOrg($org = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($org)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $org)) {
                $org = str_replace('*', '%', $org);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAutresPiecesMiseDispositionPeer::ORG, $org, $comparison);
    }

    /**
     * Filter the query on the id_destinataire column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDestinataire(1234); // WHERE id_destinataire = 1234
     * $query->filterByIdDestinataire(array(12, 34)); // WHERE id_destinataire IN (12, 34)
     * $query->filterByIdDestinataire(array('min' => 12)); // WHERE id_destinataire >= 12
     * $query->filterByIdDestinataire(array('max' => 12)); // WHERE id_destinataire <= 12
     * </code>
     *
     * @param     mixed $idDestinataire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAutresPiecesMiseDispositionQuery The current query, for fluid interface
     */
    public function filterByIdDestinataire($idDestinataire = null, $comparison = null)
    {
        if (is_array($idDestinataire)) {
            $useMinMax = false;
            if (isset($idDestinataire['min'])) {
                $this->addUsingAlias(CommonAutresPiecesMiseDispositionPeer::ID_DESTINATAIRE, $idDestinataire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDestinataire['max'])) {
                $this->addUsingAlias(CommonAutresPiecesMiseDispositionPeer::ID_DESTINATAIRE, $idDestinataire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAutresPiecesMiseDispositionPeer::ID_DESTINATAIRE, $idDestinataire, $comparison);
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
     * @return CommonAutresPiecesMiseDispositionQuery The current query, for fluid interface
     */
    public function filterByIdBlob($idBlob = null, $comparison = null)
    {
        if (is_array($idBlob)) {
            $useMinMax = false;
            if (isset($idBlob['min'])) {
                $this->addUsingAlias(CommonAutresPiecesMiseDispositionPeer::ID_BLOB, $idBlob['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBlob['max'])) {
                $this->addUsingAlias(CommonAutresPiecesMiseDispositionPeer::ID_BLOB, $idBlob['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAutresPiecesMiseDispositionPeer::ID_BLOB, $idBlob, $comparison);
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
     * @return CommonAutresPiecesMiseDispositionQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonAutresPiecesMiseDispositionPeer::NOM_FICHIER, $nomFichier, $comparison);
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
     * @return CommonAutresPiecesMiseDispositionQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonAutresPiecesMiseDispositionPeer::TAILLE_FICHIER, $tailleFichier, $comparison);
    }

    /**
     * Filter the query on the date_creation column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCreation('fooValue');   // WHERE date_creation = 'fooValue'
     * $query->filterByDateCreation('%fooValue%'); // WHERE date_creation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateCreation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAutresPiecesMiseDispositionQuery The current query, for fluid interface
     */
    public function filterByDateCreation($dateCreation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateCreation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateCreation)) {
                $dateCreation = str_replace('*', '%', $dateCreation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAutresPiecesMiseDispositionPeer::DATE_CREATION, $dateCreation, $comparison);
    }

    /**
     * Filter the query on the horodatage column
     *
     * @param     mixed $horodatage The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAutresPiecesMiseDispositionQuery The current query, for fluid interface
     */
    public function filterByHorodatage($horodatage = null, $comparison = null)
    {

        return $this->addUsingAlias(CommonAutresPiecesMiseDispositionPeer::HORODATAGE, $horodatage, $comparison);
    }

    /**
     * Filter the query on the untrusteddate column
     *
     * Example usage:
     * <code>
     * $query->filterByUntrusteddate('fooValue');   // WHERE untrusteddate = 'fooValue'
     * $query->filterByUntrusteddate('%fooValue%'); // WHERE untrusteddate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $untrusteddate The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAutresPiecesMiseDispositionQuery The current query, for fluid interface
     */
    public function filterByUntrusteddate($untrusteddate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($untrusteddate)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $untrusteddate)) {
                $untrusteddate = str_replace('*', '%', $untrusteddate);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAutresPiecesMiseDispositionPeer::UNTRUSTEDDATE, $untrusteddate, $comparison);
    }

    /**
     * Filter the query on the agent_id column
     *
     * Example usage:
     * <code>
     * $query->filterByAgentId(1234); // WHERE agent_id = 1234
     * $query->filterByAgentId(array(12, 34)); // WHERE agent_id IN (12, 34)
     * $query->filterByAgentId(array('min' => 12)); // WHERE agent_id >= 12
     * $query->filterByAgentId(array('max' => 12)); // WHERE agent_id <= 12
     * </code>
     *
     * @param     mixed $agentId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAutresPiecesMiseDispositionQuery The current query, for fluid interface
     */
    public function filterByAgentId($agentId = null, $comparison = null)
    {
        if (is_array($agentId)) {
            $useMinMax = false;
            if (isset($agentId['min'])) {
                $this->addUsingAlias(CommonAutresPiecesMiseDispositionPeer::AGENT_ID, $agentId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($agentId['max'])) {
                $this->addUsingAlias(CommonAutresPiecesMiseDispositionPeer::AGENT_ID, $agentId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAutresPiecesMiseDispositionPeer::AGENT_ID, $agentId, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonAutresPiecesMiseDisposition $commonAutresPiecesMiseDisposition Object to remove from the list of results
     *
     * @return CommonAutresPiecesMiseDispositionQuery The current query, for fluid interface
     */
    public function prune($commonAutresPiecesMiseDisposition = null)
    {
        if ($commonAutresPiecesMiseDisposition) {
            $this->addUsingAlias(CommonAutresPiecesMiseDispositionPeer::ID, $commonAutresPiecesMiseDisposition->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
