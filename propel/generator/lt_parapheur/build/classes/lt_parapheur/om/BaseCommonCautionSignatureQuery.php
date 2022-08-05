<?php


/**
 * Base class that represents a query for the 'caution_signature' table.
 *
 * 
 *
 * @method CommonCautionSignatureQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method CommonCautionSignatureQuery orderByIdBlob($order = Criteria::ASC) Order by the ID_BLOB column
 * @method CommonCautionSignatureQuery orderByIdDemande($order = Criteria::ASC) Order by the ID_DEMANDE column
 * @method CommonCautionSignatureQuery orderByIdAgentSignataire($order = Criteria::ASC) Order by the ID_AGENT_SIGNATAIRE column
 * @method CommonCautionSignatureQuery orderByRevision($order = Criteria::ASC) Order by the REVISION column
 * @method CommonCautionSignatureQuery orderByTypeDocument($order = Criteria::ASC) Order by the TYPE_DOCUMENT column
 * @method CommonCautionSignatureQuery orderByDateSignature($order = Criteria::ASC) Order by the DATE_SIGNATURE column
 * @method CommonCautionSignatureQuery orderByEmetteur($order = Criteria::ASC) Order by the EMETTEUR column
 * @method CommonCautionSignatureQuery orderByDetailEmetteur($order = Criteria::ASC) Order by the DETAIL_EMETTEUR column
 * @method CommonCautionSignatureQuery orderBySignataire($order = Criteria::ASC) Order by the SIGNATAIRE column
 * @method CommonCautionSignatureQuery orderByDetailSignataire($order = Criteria::ASC) Order by the DETAIL_SIGNATAIRE column
 * @method CommonCautionSignatureQuery orderByRevoque($order = Criteria::ASC) Order by the REVOQUE column
 * @method CommonCautionSignatureQuery orderByNonRepudiation($order = Criteria::ASC) Order by the NON_REPUDIATION column
 * @method CommonCautionSignatureQuery orderByChaineValide($order = Criteria::ASC) Order by the CHAINE_VALIDE column
 * @method CommonCautionSignatureQuery orderByDateDebPeriodeValidite($order = Criteria::ASC) Order by the DATE_DEB_PERIODE_VALIDITE column
 * @method CommonCautionSignatureQuery orderByDateFinPeriodeValidite($order = Criteria::ASC) Order by the DATE_FIN_PERIODE_VALIDITE column
 * @method CommonCautionSignatureQuery orderByPeriodeValidite($order = Criteria::ASC) Order by the PERIODE_VALIDITE column
 * @method CommonCautionSignatureQuery orderBySignatureValide($order = Criteria::ASC) Order by the SIGNATURE_VALIDE column
 * @method CommonCautionSignatureQuery orderByTypeSignature($order = Criteria::ASC) Order by the TYPE_SIGNATURE column
 * @method CommonCautionSignatureQuery orderByXmlSignature($order = Criteria::ASC) Order by the XML_SIGNATURE column
 * @method CommonCautionSignatureQuery orderByNomFichier($order = Criteria::ASC) Order by the NOM_FICHIER column
 * @method CommonCautionSignatureQuery orderByHash($order = Criteria::ASC) Order by the HASH column
 * @method CommonCautionSignatureQuery orderByAlgorithmeHash($order = Criteria::ASC) Order by the ALGORITHME_HASH column
 * @method CommonCautionSignatureQuery orderByDateDerniereVerification($order = Criteria::ASC) Order by the DATE_DERNIERE_VERIFICATION column
 * @method CommonCautionSignatureQuery orderBySignatureArchivee($order = Criteria::ASC) Order by the SIGNATURE_ARCHIVEE column
 *
 * @method CommonCautionSignatureQuery groupById() Group by the ID column
 * @method CommonCautionSignatureQuery groupByIdBlob() Group by the ID_BLOB column
 * @method CommonCautionSignatureQuery groupByIdDemande() Group by the ID_DEMANDE column
 * @method CommonCautionSignatureQuery groupByIdAgentSignataire() Group by the ID_AGENT_SIGNATAIRE column
 * @method CommonCautionSignatureQuery groupByRevision() Group by the REVISION column
 * @method CommonCautionSignatureQuery groupByTypeDocument() Group by the TYPE_DOCUMENT column
 * @method CommonCautionSignatureQuery groupByDateSignature() Group by the DATE_SIGNATURE column
 * @method CommonCautionSignatureQuery groupByEmetteur() Group by the EMETTEUR column
 * @method CommonCautionSignatureQuery groupByDetailEmetteur() Group by the DETAIL_EMETTEUR column
 * @method CommonCautionSignatureQuery groupBySignataire() Group by the SIGNATAIRE column
 * @method CommonCautionSignatureQuery groupByDetailSignataire() Group by the DETAIL_SIGNATAIRE column
 * @method CommonCautionSignatureQuery groupByRevoque() Group by the REVOQUE column
 * @method CommonCautionSignatureQuery groupByNonRepudiation() Group by the NON_REPUDIATION column
 * @method CommonCautionSignatureQuery groupByChaineValide() Group by the CHAINE_VALIDE column
 * @method CommonCautionSignatureQuery groupByDateDebPeriodeValidite() Group by the DATE_DEB_PERIODE_VALIDITE column
 * @method CommonCautionSignatureQuery groupByDateFinPeriodeValidite() Group by the DATE_FIN_PERIODE_VALIDITE column
 * @method CommonCautionSignatureQuery groupByPeriodeValidite() Group by the PERIODE_VALIDITE column
 * @method CommonCautionSignatureQuery groupBySignatureValide() Group by the SIGNATURE_VALIDE column
 * @method CommonCautionSignatureQuery groupByTypeSignature() Group by the TYPE_SIGNATURE column
 * @method CommonCautionSignatureQuery groupByXmlSignature() Group by the XML_SIGNATURE column
 * @method CommonCautionSignatureQuery groupByNomFichier() Group by the NOM_FICHIER column
 * @method CommonCautionSignatureQuery groupByHash() Group by the HASH column
 * @method CommonCautionSignatureQuery groupByAlgorithmeHash() Group by the ALGORITHME_HASH column
 * @method CommonCautionSignatureQuery groupByDateDerniereVerification() Group by the DATE_DERNIERE_VERIFICATION column
 * @method CommonCautionSignatureQuery groupBySignatureArchivee() Group by the SIGNATURE_ARCHIVEE column
 *
 * @method CommonCautionSignatureQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonCautionSignatureQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonCautionSignatureQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonCautionSignature findOne(PropelPDO $con = null) Return the first CommonCautionSignature matching the query
 * @method CommonCautionSignature findOneOrCreate(PropelPDO $con = null) Return the first CommonCautionSignature matching the query, or a new CommonCautionSignature object populated from the query conditions when no match is found
 *
 * @method CommonCautionSignature findOneByIdBlob(int $ID_BLOB) Return the first CommonCautionSignature filtered by the ID_BLOB column
 * @method CommonCautionSignature findOneByIdDemande(int $ID_DEMANDE) Return the first CommonCautionSignature filtered by the ID_DEMANDE column
 * @method CommonCautionSignature findOneByIdAgentSignataire(int $ID_AGENT_SIGNATAIRE) Return the first CommonCautionSignature filtered by the ID_AGENT_SIGNATAIRE column
 * @method CommonCautionSignature findOneByRevision(int $REVISION) Return the first CommonCautionSignature filtered by the REVISION column
 * @method CommonCautionSignature findOneByTypeDocument(string $TYPE_DOCUMENT) Return the first CommonCautionSignature filtered by the TYPE_DOCUMENT column
 * @method CommonCautionSignature findOneByDateSignature(string $DATE_SIGNATURE) Return the first CommonCautionSignature filtered by the DATE_SIGNATURE column
 * @method CommonCautionSignature findOneByEmetteur(string $EMETTEUR) Return the first CommonCautionSignature filtered by the EMETTEUR column
 * @method CommonCautionSignature findOneByDetailEmetteur(string $DETAIL_EMETTEUR) Return the first CommonCautionSignature filtered by the DETAIL_EMETTEUR column
 * @method CommonCautionSignature findOneBySignataire(string $SIGNATAIRE) Return the first CommonCautionSignature filtered by the SIGNATAIRE column
 * @method CommonCautionSignature findOneByDetailSignataire(string $DETAIL_SIGNATAIRE) Return the first CommonCautionSignature filtered by the DETAIL_SIGNATAIRE column
 * @method CommonCautionSignature findOneByRevoque(string $REVOQUE) Return the first CommonCautionSignature filtered by the REVOQUE column
 * @method CommonCautionSignature findOneByNonRepudiation(string $NON_REPUDIATION) Return the first CommonCautionSignature filtered by the NON_REPUDIATION column
 * @method CommonCautionSignature findOneByChaineValide(string $CHAINE_VALIDE) Return the first CommonCautionSignature filtered by the CHAINE_VALIDE column
 * @method CommonCautionSignature findOneByDateDebPeriodeValidite(string $DATE_DEB_PERIODE_VALIDITE) Return the first CommonCautionSignature filtered by the DATE_DEB_PERIODE_VALIDITE column
 * @method CommonCautionSignature findOneByDateFinPeriodeValidite(string $DATE_FIN_PERIODE_VALIDITE) Return the first CommonCautionSignature filtered by the DATE_FIN_PERIODE_VALIDITE column
 * @method CommonCautionSignature findOneByPeriodeValidite(string $PERIODE_VALIDITE) Return the first CommonCautionSignature filtered by the PERIODE_VALIDITE column
 * @method CommonCautionSignature findOneBySignatureValide(string $SIGNATURE_VALIDE) Return the first CommonCautionSignature filtered by the SIGNATURE_VALIDE column
 * @method CommonCautionSignature findOneByTypeSignature(string $TYPE_SIGNATURE) Return the first CommonCautionSignature filtered by the TYPE_SIGNATURE column
 * @method CommonCautionSignature findOneByXmlSignature(string $XML_SIGNATURE) Return the first CommonCautionSignature filtered by the XML_SIGNATURE column
 * @method CommonCautionSignature findOneByNomFichier(string $NOM_FICHIER) Return the first CommonCautionSignature filtered by the NOM_FICHIER column
 * @method CommonCautionSignature findOneByHash(string $HASH) Return the first CommonCautionSignature filtered by the HASH column
 * @method CommonCautionSignature findOneByAlgorithmeHash(string $ALGORITHME_HASH) Return the first CommonCautionSignature filtered by the ALGORITHME_HASH column
 * @method CommonCautionSignature findOneByDateDerniereVerification(string $DATE_DERNIERE_VERIFICATION) Return the first CommonCautionSignature filtered by the DATE_DERNIERE_VERIFICATION column
 * @method CommonCautionSignature findOneBySignatureArchivee(int $SIGNATURE_ARCHIVEE) Return the first CommonCautionSignature filtered by the SIGNATURE_ARCHIVEE column
 *
 * @method array findById(int $ID) Return CommonCautionSignature objects filtered by the ID column
 * @method array findByIdBlob(int $ID_BLOB) Return CommonCautionSignature objects filtered by the ID_BLOB column
 * @method array findByIdDemande(int $ID_DEMANDE) Return CommonCautionSignature objects filtered by the ID_DEMANDE column
 * @method array findByIdAgentSignataire(int $ID_AGENT_SIGNATAIRE) Return CommonCautionSignature objects filtered by the ID_AGENT_SIGNATAIRE column
 * @method array findByRevision(int $REVISION) Return CommonCautionSignature objects filtered by the REVISION column
 * @method array findByTypeDocument(string $TYPE_DOCUMENT) Return CommonCautionSignature objects filtered by the TYPE_DOCUMENT column
 * @method array findByDateSignature(string $DATE_SIGNATURE) Return CommonCautionSignature objects filtered by the DATE_SIGNATURE column
 * @method array findByEmetteur(string $EMETTEUR) Return CommonCautionSignature objects filtered by the EMETTEUR column
 * @method array findByDetailEmetteur(string $DETAIL_EMETTEUR) Return CommonCautionSignature objects filtered by the DETAIL_EMETTEUR column
 * @method array findBySignataire(string $SIGNATAIRE) Return CommonCautionSignature objects filtered by the SIGNATAIRE column
 * @method array findByDetailSignataire(string $DETAIL_SIGNATAIRE) Return CommonCautionSignature objects filtered by the DETAIL_SIGNATAIRE column
 * @method array findByRevoque(string $REVOQUE) Return CommonCautionSignature objects filtered by the REVOQUE column
 * @method array findByNonRepudiation(string $NON_REPUDIATION) Return CommonCautionSignature objects filtered by the NON_REPUDIATION column
 * @method array findByChaineValide(string $CHAINE_VALIDE) Return CommonCautionSignature objects filtered by the CHAINE_VALIDE column
 * @method array findByDateDebPeriodeValidite(string $DATE_DEB_PERIODE_VALIDITE) Return CommonCautionSignature objects filtered by the DATE_DEB_PERIODE_VALIDITE column
 * @method array findByDateFinPeriodeValidite(string $DATE_FIN_PERIODE_VALIDITE) Return CommonCautionSignature objects filtered by the DATE_FIN_PERIODE_VALIDITE column
 * @method array findByPeriodeValidite(string $PERIODE_VALIDITE) Return CommonCautionSignature objects filtered by the PERIODE_VALIDITE column
 * @method array findBySignatureValide(string $SIGNATURE_VALIDE) Return CommonCautionSignature objects filtered by the SIGNATURE_VALIDE column
 * @method array findByTypeSignature(string $TYPE_SIGNATURE) Return CommonCautionSignature objects filtered by the TYPE_SIGNATURE column
 * @method array findByXmlSignature(string $XML_SIGNATURE) Return CommonCautionSignature objects filtered by the XML_SIGNATURE column
 * @method array findByNomFichier(string $NOM_FICHIER) Return CommonCautionSignature objects filtered by the NOM_FICHIER column
 * @method array findByHash(string $HASH) Return CommonCautionSignature objects filtered by the HASH column
 * @method array findByAlgorithmeHash(string $ALGORITHME_HASH) Return CommonCautionSignature objects filtered by the ALGORITHME_HASH column
 * @method array findByDateDerniereVerification(string $DATE_DERNIERE_VERIFICATION) Return CommonCautionSignature objects filtered by the DATE_DERNIERE_VERIFICATION column
 * @method array findBySignatureArchivee(int $SIGNATURE_ARCHIVEE) Return CommonCautionSignature objects filtered by the SIGNATURE_ARCHIVEE column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonCautionSignatureQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonCautionSignatureQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonCautionSignature', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonCautionSignatureQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonCautionSignatureQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonCautionSignatureQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonCautionSignatureQuery) {
            return $criteria;
        }
        $query = new CommonCautionSignatureQuery();
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
     * @return   CommonCautionSignature|CommonCautionSignature[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonCautionSignaturePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonCautionSignaturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonCautionSignature A model object, or null if the key is not found
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
     * @return                 CommonCautionSignature A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `ID_BLOB`, `ID_DEMANDE`, `ID_AGENT_SIGNATAIRE`, `REVISION`, `TYPE_DOCUMENT`, `DATE_SIGNATURE`, `EMETTEUR`, `DETAIL_EMETTEUR`, `SIGNATAIRE`, `DETAIL_SIGNATAIRE`, `REVOQUE`, `NON_REPUDIATION`, `CHAINE_VALIDE`, `DATE_DEB_PERIODE_VALIDITE`, `DATE_FIN_PERIODE_VALIDITE`, `PERIODE_VALIDITE`, `SIGNATURE_VALIDE`, `TYPE_SIGNATURE`, `XML_SIGNATURE`, `NOM_FICHIER`, `HASH`, `ALGORITHME_HASH`, `DATE_DERNIERE_VERIFICATION`, `SIGNATURE_ARCHIVEE` FROM `caution_signature` WHERE `ID` = :p0';
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
            $obj = new CommonCautionSignature();
            $obj->hydrate($row);
            CommonCautionSignaturePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonCautionSignature|CommonCautionSignature[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonCautionSignature[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonCautionSignatureQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonCautionSignaturePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonCautionSignatureQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonCautionSignaturePeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE ID = 1234
     * $query->filterById(array(12, 34)); // WHERE ID IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE ID >= 12
     * $query->filterById(array('max' => 12)); // WHERE ID <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionSignatureQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonCautionSignaturePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonCautionSignaturePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionSignaturePeer::ID, $id, $comparison);
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
     * @return CommonCautionSignatureQuery The current query, for fluid interface
     */
    public function filterByIdBlob($idBlob = null, $comparison = null)
    {
        if (is_array($idBlob)) {
            $useMinMax = false;
            if (isset($idBlob['min'])) {
                $this->addUsingAlias(CommonCautionSignaturePeer::ID_BLOB, $idBlob['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBlob['max'])) {
                $this->addUsingAlias(CommonCautionSignaturePeer::ID_BLOB, $idBlob['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionSignaturePeer::ID_BLOB, $idBlob, $comparison);
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
     * @return CommonCautionSignatureQuery The current query, for fluid interface
     */
    public function filterByIdDemande($idDemande = null, $comparison = null)
    {
        if (is_array($idDemande)) {
            $useMinMax = false;
            if (isset($idDemande['min'])) {
                $this->addUsingAlias(CommonCautionSignaturePeer::ID_DEMANDE, $idDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDemande['max'])) {
                $this->addUsingAlias(CommonCautionSignaturePeer::ID_DEMANDE, $idDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionSignaturePeer::ID_DEMANDE, $idDemande, $comparison);
    }

    /**
     * Filter the query on the ID_AGENT_SIGNATAIRE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentSignataire(1234); // WHERE ID_AGENT_SIGNATAIRE = 1234
     * $query->filterByIdAgentSignataire(array(12, 34)); // WHERE ID_AGENT_SIGNATAIRE IN (12, 34)
     * $query->filterByIdAgentSignataire(array('min' => 12)); // WHERE ID_AGENT_SIGNATAIRE >= 12
     * $query->filterByIdAgentSignataire(array('max' => 12)); // WHERE ID_AGENT_SIGNATAIRE <= 12
     * </code>
     *
     * @param     mixed $idAgentSignataire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionSignatureQuery The current query, for fluid interface
     */
    public function filterByIdAgentSignataire($idAgentSignataire = null, $comparison = null)
    {
        if (is_array($idAgentSignataire)) {
            $useMinMax = false;
            if (isset($idAgentSignataire['min'])) {
                $this->addUsingAlias(CommonCautionSignaturePeer::ID_AGENT_SIGNATAIRE, $idAgentSignataire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentSignataire['max'])) {
                $this->addUsingAlias(CommonCautionSignaturePeer::ID_AGENT_SIGNATAIRE, $idAgentSignataire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionSignaturePeer::ID_AGENT_SIGNATAIRE, $idAgentSignataire, $comparison);
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
     * @return CommonCautionSignatureQuery The current query, for fluid interface
     */
    public function filterByRevision($revision = null, $comparison = null)
    {
        if (is_array($revision)) {
            $useMinMax = false;
            if (isset($revision['min'])) {
                $this->addUsingAlias(CommonCautionSignaturePeer::REVISION, $revision['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($revision['max'])) {
                $this->addUsingAlias(CommonCautionSignaturePeer::REVISION, $revision['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionSignaturePeer::REVISION, $revision, $comparison);
    }

    /**
     * Filter the query on the TYPE_DOCUMENT column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeDocument('fooValue');   // WHERE TYPE_DOCUMENT = 'fooValue'
     * $query->filterByTypeDocument('%fooValue%'); // WHERE TYPE_DOCUMENT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeDocument The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionSignatureQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonCautionSignaturePeer::TYPE_DOCUMENT, $typeDocument, $comparison);
    }

    /**
     * Filter the query on the DATE_SIGNATURE column
     *
     * Example usage:
     * <code>
     * $query->filterByDateSignature('2011-03-14'); // WHERE DATE_SIGNATURE = '2011-03-14'
     * $query->filterByDateSignature('now'); // WHERE DATE_SIGNATURE = '2011-03-14'
     * $query->filterByDateSignature(array('max' => 'yesterday')); // WHERE DATE_SIGNATURE > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateSignature The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionSignatureQuery The current query, for fluid interface
     */
    public function filterByDateSignature($dateSignature = null, $comparison = null)
    {
        if (is_array($dateSignature)) {
            $useMinMax = false;
            if (isset($dateSignature['min'])) {
                $this->addUsingAlias(CommonCautionSignaturePeer::DATE_SIGNATURE, $dateSignature['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateSignature['max'])) {
                $this->addUsingAlias(CommonCautionSignaturePeer::DATE_SIGNATURE, $dateSignature['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionSignaturePeer::DATE_SIGNATURE, $dateSignature, $comparison);
    }

    /**
     * Filter the query on the EMETTEUR column
     *
     * Example usage:
     * <code>
     * $query->filterByEmetteur('fooValue');   // WHERE EMETTEUR = 'fooValue'
     * $query->filterByEmetteur('%fooValue%'); // WHERE EMETTEUR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $emetteur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionSignatureQuery The current query, for fluid interface
     */
    public function filterByEmetteur($emetteur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($emetteur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $emetteur)) {
                $emetteur = str_replace('*', '%', $emetteur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCautionSignaturePeer::EMETTEUR, $emetteur, $comparison);
    }

    /**
     * Filter the query on the DETAIL_EMETTEUR column
     *
     * Example usage:
     * <code>
     * $query->filterByDetailEmetteur('fooValue');   // WHERE DETAIL_EMETTEUR = 'fooValue'
     * $query->filterByDetailEmetteur('%fooValue%'); // WHERE DETAIL_EMETTEUR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $detailEmetteur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionSignatureQuery The current query, for fluid interface
     */
    public function filterByDetailEmetteur($detailEmetteur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($detailEmetteur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $detailEmetteur)) {
                $detailEmetteur = str_replace('*', '%', $detailEmetteur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCautionSignaturePeer::DETAIL_EMETTEUR, $detailEmetteur, $comparison);
    }

    /**
     * Filter the query on the SIGNATAIRE column
     *
     * Example usage:
     * <code>
     * $query->filterBySignataire('fooValue');   // WHERE SIGNATAIRE = 'fooValue'
     * $query->filterBySignataire('%fooValue%'); // WHERE SIGNATAIRE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $signataire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionSignatureQuery The current query, for fluid interface
     */
    public function filterBySignataire($signataire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($signataire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $signataire)) {
                $signataire = str_replace('*', '%', $signataire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCautionSignaturePeer::SIGNATAIRE, $signataire, $comparison);
    }

    /**
     * Filter the query on the DETAIL_SIGNATAIRE column
     *
     * Example usage:
     * <code>
     * $query->filterByDetailSignataire('fooValue');   // WHERE DETAIL_SIGNATAIRE = 'fooValue'
     * $query->filterByDetailSignataire('%fooValue%'); // WHERE DETAIL_SIGNATAIRE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $detailSignataire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionSignatureQuery The current query, for fluid interface
     */
    public function filterByDetailSignataire($detailSignataire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($detailSignataire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $detailSignataire)) {
                $detailSignataire = str_replace('*', '%', $detailSignataire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCautionSignaturePeer::DETAIL_SIGNATAIRE, $detailSignataire, $comparison);
    }

    /**
     * Filter the query on the REVOQUE column
     *
     * Example usage:
     * <code>
     * $query->filterByRevoque('fooValue');   // WHERE REVOQUE = 'fooValue'
     * $query->filterByRevoque('%fooValue%'); // WHERE REVOQUE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $revoque The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionSignatureQuery The current query, for fluid interface
     */
    public function filterByRevoque($revoque = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($revoque)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $revoque)) {
                $revoque = str_replace('*', '%', $revoque);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCautionSignaturePeer::REVOQUE, $revoque, $comparison);
    }

    /**
     * Filter the query on the NON_REPUDIATION column
     *
     * Example usage:
     * <code>
     * $query->filterByNonRepudiation('fooValue');   // WHERE NON_REPUDIATION = 'fooValue'
     * $query->filterByNonRepudiation('%fooValue%'); // WHERE NON_REPUDIATION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nonRepudiation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionSignatureQuery The current query, for fluid interface
     */
    public function filterByNonRepudiation($nonRepudiation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nonRepudiation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nonRepudiation)) {
                $nonRepudiation = str_replace('*', '%', $nonRepudiation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCautionSignaturePeer::NON_REPUDIATION, $nonRepudiation, $comparison);
    }

    /**
     * Filter the query on the CHAINE_VALIDE column
     *
     * Example usage:
     * <code>
     * $query->filterByChaineValide('fooValue');   // WHERE CHAINE_VALIDE = 'fooValue'
     * $query->filterByChaineValide('%fooValue%'); // WHERE CHAINE_VALIDE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $chaineValide The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionSignatureQuery The current query, for fluid interface
     */
    public function filterByChaineValide($chaineValide = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($chaineValide)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $chaineValide)) {
                $chaineValide = str_replace('*', '%', $chaineValide);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCautionSignaturePeer::CHAINE_VALIDE, $chaineValide, $comparison);
    }

    /**
     * Filter the query on the DATE_DEB_PERIODE_VALIDITE column
     *
     * Example usage:
     * <code>
     * $query->filterByDateDebPeriodeValidite('2011-03-14'); // WHERE DATE_DEB_PERIODE_VALIDITE = '2011-03-14'
     * $query->filterByDateDebPeriodeValidite('now'); // WHERE DATE_DEB_PERIODE_VALIDITE = '2011-03-14'
     * $query->filterByDateDebPeriodeValidite(array('max' => 'yesterday')); // WHERE DATE_DEB_PERIODE_VALIDITE > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateDebPeriodeValidite The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionSignatureQuery The current query, for fluid interface
     */
    public function filterByDateDebPeriodeValidite($dateDebPeriodeValidite = null, $comparison = null)
    {
        if (is_array($dateDebPeriodeValidite)) {
            $useMinMax = false;
            if (isset($dateDebPeriodeValidite['min'])) {
                $this->addUsingAlias(CommonCautionSignaturePeer::DATE_DEB_PERIODE_VALIDITE, $dateDebPeriodeValidite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateDebPeriodeValidite['max'])) {
                $this->addUsingAlias(CommonCautionSignaturePeer::DATE_DEB_PERIODE_VALIDITE, $dateDebPeriodeValidite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionSignaturePeer::DATE_DEB_PERIODE_VALIDITE, $dateDebPeriodeValidite, $comparison);
    }

    /**
     * Filter the query on the DATE_FIN_PERIODE_VALIDITE column
     *
     * Example usage:
     * <code>
     * $query->filterByDateFinPeriodeValidite('2011-03-14'); // WHERE DATE_FIN_PERIODE_VALIDITE = '2011-03-14'
     * $query->filterByDateFinPeriodeValidite('now'); // WHERE DATE_FIN_PERIODE_VALIDITE = '2011-03-14'
     * $query->filterByDateFinPeriodeValidite(array('max' => 'yesterday')); // WHERE DATE_FIN_PERIODE_VALIDITE > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateFinPeriodeValidite The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionSignatureQuery The current query, for fluid interface
     */
    public function filterByDateFinPeriodeValidite($dateFinPeriodeValidite = null, $comparison = null)
    {
        if (is_array($dateFinPeriodeValidite)) {
            $useMinMax = false;
            if (isset($dateFinPeriodeValidite['min'])) {
                $this->addUsingAlias(CommonCautionSignaturePeer::DATE_FIN_PERIODE_VALIDITE, $dateFinPeriodeValidite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateFinPeriodeValidite['max'])) {
                $this->addUsingAlias(CommonCautionSignaturePeer::DATE_FIN_PERIODE_VALIDITE, $dateFinPeriodeValidite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionSignaturePeer::DATE_FIN_PERIODE_VALIDITE, $dateFinPeriodeValidite, $comparison);
    }

    /**
     * Filter the query on the PERIODE_VALIDITE column
     *
     * Example usage:
     * <code>
     * $query->filterByPeriodeValidite('fooValue');   // WHERE PERIODE_VALIDITE = 'fooValue'
     * $query->filterByPeriodeValidite('%fooValue%'); // WHERE PERIODE_VALIDITE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $periodeValidite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionSignatureQuery The current query, for fluid interface
     */
    public function filterByPeriodeValidite($periodeValidite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($periodeValidite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $periodeValidite)) {
                $periodeValidite = str_replace('*', '%', $periodeValidite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCautionSignaturePeer::PERIODE_VALIDITE, $periodeValidite, $comparison);
    }

    /**
     * Filter the query on the SIGNATURE_VALIDE column
     *
     * Example usage:
     * <code>
     * $query->filterBySignatureValide('fooValue');   // WHERE SIGNATURE_VALIDE = 'fooValue'
     * $query->filterBySignatureValide('%fooValue%'); // WHERE SIGNATURE_VALIDE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $signatureValide The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionSignatureQuery The current query, for fluid interface
     */
    public function filterBySignatureValide($signatureValide = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($signatureValide)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $signatureValide)) {
                $signatureValide = str_replace('*', '%', $signatureValide);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCautionSignaturePeer::SIGNATURE_VALIDE, $signatureValide, $comparison);
    }

    /**
     * Filter the query on the TYPE_SIGNATURE column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeSignature('fooValue');   // WHERE TYPE_SIGNATURE = 'fooValue'
     * $query->filterByTypeSignature('%fooValue%'); // WHERE TYPE_SIGNATURE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeSignature The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionSignatureQuery The current query, for fluid interface
     */
    public function filterByTypeSignature($typeSignature = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeSignature)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeSignature)) {
                $typeSignature = str_replace('*', '%', $typeSignature);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCautionSignaturePeer::TYPE_SIGNATURE, $typeSignature, $comparison);
    }

    /**
     * Filter the query on the XML_SIGNATURE column
     *
     * Example usage:
     * <code>
     * $query->filterByXmlSignature('fooValue');   // WHERE XML_SIGNATURE = 'fooValue'
     * $query->filterByXmlSignature('%fooValue%'); // WHERE XML_SIGNATURE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $xmlSignature The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionSignatureQuery The current query, for fluid interface
     */
    public function filterByXmlSignature($xmlSignature = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($xmlSignature)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $xmlSignature)) {
                $xmlSignature = str_replace('*', '%', $xmlSignature);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCautionSignaturePeer::XML_SIGNATURE, $xmlSignature, $comparison);
    }

    /**
     * Filter the query on the NOM_FICHIER column
     *
     * Example usage:
     * <code>
     * $query->filterByNomFichier('fooValue');   // WHERE NOM_FICHIER = 'fooValue'
     * $query->filterByNomFichier('%fooValue%'); // WHERE NOM_FICHIER LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomFichier The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionSignatureQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonCautionSignaturePeer::NOM_FICHIER, $nomFichier, $comparison);
    }

    /**
     * Filter the query on the HASH column
     *
     * Example usage:
     * <code>
     * $query->filterByHash('fooValue');   // WHERE HASH = 'fooValue'
     * $query->filterByHash('%fooValue%'); // WHERE HASH LIKE '%fooValue%'
     * </code>
     *
     * @param     string $hash The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionSignatureQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonCautionSignaturePeer::HASH, $hash, $comparison);
    }

    /**
     * Filter the query on the ALGORITHME_HASH column
     *
     * Example usage:
     * <code>
     * $query->filterByAlgorithmeHash('fooValue');   // WHERE ALGORITHME_HASH = 'fooValue'
     * $query->filterByAlgorithmeHash('%fooValue%'); // WHERE ALGORITHME_HASH LIKE '%fooValue%'
     * </code>
     *
     * @param     string $algorithmeHash The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionSignatureQuery The current query, for fluid interface
     */
    public function filterByAlgorithmeHash($algorithmeHash = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($algorithmeHash)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $algorithmeHash)) {
                $algorithmeHash = str_replace('*', '%', $algorithmeHash);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCautionSignaturePeer::ALGORITHME_HASH, $algorithmeHash, $comparison);
    }

    /**
     * Filter the query on the DATE_DERNIERE_VERIFICATION column
     *
     * Example usage:
     * <code>
     * $query->filterByDateDerniereVerification('2011-03-14'); // WHERE DATE_DERNIERE_VERIFICATION = '2011-03-14'
     * $query->filterByDateDerniereVerification('now'); // WHERE DATE_DERNIERE_VERIFICATION = '2011-03-14'
     * $query->filterByDateDerniereVerification(array('max' => 'yesterday')); // WHERE DATE_DERNIERE_VERIFICATION > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateDerniereVerification The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionSignatureQuery The current query, for fluid interface
     */
    public function filterByDateDerniereVerification($dateDerniereVerification = null, $comparison = null)
    {
        if (is_array($dateDerniereVerification)) {
            $useMinMax = false;
            if (isset($dateDerniereVerification['min'])) {
                $this->addUsingAlias(CommonCautionSignaturePeer::DATE_DERNIERE_VERIFICATION, $dateDerniereVerification['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateDerniereVerification['max'])) {
                $this->addUsingAlias(CommonCautionSignaturePeer::DATE_DERNIERE_VERIFICATION, $dateDerniereVerification['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionSignaturePeer::DATE_DERNIERE_VERIFICATION, $dateDerniereVerification, $comparison);
    }

    /**
     * Filter the query on the SIGNATURE_ARCHIVEE column
     *
     * Example usage:
     * <code>
     * $query->filterBySignatureArchivee(1234); // WHERE SIGNATURE_ARCHIVEE = 1234
     * $query->filterBySignatureArchivee(array(12, 34)); // WHERE SIGNATURE_ARCHIVEE IN (12, 34)
     * $query->filterBySignatureArchivee(array('min' => 12)); // WHERE SIGNATURE_ARCHIVEE >= 12
     * $query->filterBySignatureArchivee(array('max' => 12)); // WHERE SIGNATURE_ARCHIVEE <= 12
     * </code>
     *
     * @param     mixed $signatureArchivee The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionSignatureQuery The current query, for fluid interface
     */
    public function filterBySignatureArchivee($signatureArchivee = null, $comparison = null)
    {
        if (is_array($signatureArchivee)) {
            $useMinMax = false;
            if (isset($signatureArchivee['min'])) {
                $this->addUsingAlias(CommonCautionSignaturePeer::SIGNATURE_ARCHIVEE, $signatureArchivee['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($signatureArchivee['max'])) {
                $this->addUsingAlias(CommonCautionSignaturePeer::SIGNATURE_ARCHIVEE, $signatureArchivee['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionSignaturePeer::SIGNATURE_ARCHIVEE, $signatureArchivee, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonCautionSignature $commonCautionSignature Object to remove from the list of results
     *
     * @return CommonCautionSignatureQuery The current query, for fluid interface
     */
    public function prune($commonCautionSignature = null)
    {
        if ($commonCautionSignature) {
            $this->addUsingAlias(CommonCautionSignaturePeer::ID, $commonCautionSignature->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
