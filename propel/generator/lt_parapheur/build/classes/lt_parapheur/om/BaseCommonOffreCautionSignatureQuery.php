<?php


/**
 * Base class that represents a query for the 'offre_caution_signature' table.
 *
 * 
 *
 * @method CommonOffreCautionSignatureQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method CommonOffreCautionSignatureQuery orderByIdOffreCaution($order = Criteria::ASC) Order by the ID_OFFRE_CAUTION column
 * @method CommonOffreCautionSignatureQuery orderByIdBlob($order = Criteria::ASC) Order by the ID_BLOB column
 * @method CommonOffreCautionSignatureQuery orderByRevision($order = Criteria::ASC) Order by the REVISION column
 * @method CommonOffreCautionSignatureQuery orderByTypeDocument($order = Criteria::ASC) Order by the TYPE_DOCUMENT column
 * @method CommonOffreCautionSignatureQuery orderByDateSignature($order = Criteria::ASC) Order by the DATE_SIGNATURE column
 * @method CommonOffreCautionSignatureQuery orderByEmetteur($order = Criteria::ASC) Order by the EMETTEUR column
 * @method CommonOffreCautionSignatureQuery orderByDetailEmetteur($order = Criteria::ASC) Order by the DETAIL_EMETTEUR column
 * @method CommonOffreCautionSignatureQuery orderBySignataire($order = Criteria::ASC) Order by the SIGNATAIRE column
 * @method CommonOffreCautionSignatureQuery orderByDetailSignataire($order = Criteria::ASC) Order by the DETAIL_SIGNATAIRE column
 * @method CommonOffreCautionSignatureQuery orderByRevoque($order = Criteria::ASC) Order by the REVOQUE column
 * @method CommonOffreCautionSignatureQuery orderByNonRepudiation($order = Criteria::ASC) Order by the NON_REPUDIATION column
 * @method CommonOffreCautionSignatureQuery orderByChaineValide($order = Criteria::ASC) Order by the CHAINE_VALIDE column
 * @method CommonOffreCautionSignatureQuery orderByDateDebPeriodeValidite($order = Criteria::ASC) Order by the DATE_DEB_PERIODE_VALIDITE column
 * @method CommonOffreCautionSignatureQuery orderByDateFinPeriodeValidite($order = Criteria::ASC) Order by the DATE_FIN_PERIODE_VALIDITE column
 * @method CommonOffreCautionSignatureQuery orderByPeriodeValidite($order = Criteria::ASC) Order by the PERIODE_VALIDITE column
 * @method CommonOffreCautionSignatureQuery orderBySignatureValide($order = Criteria::ASC) Order by the SIGNATURE_VALIDE column
 * @method CommonOffreCautionSignatureQuery orderByTypeSignature($order = Criteria::ASC) Order by the TYPE_SIGNATURE column
 * @method CommonOffreCautionSignatureQuery orderByXmlSignature($order = Criteria::ASC) Order by the XML_SIGNATURE column
 * @method CommonOffreCautionSignatureQuery orderByNomFichier($order = Criteria::ASC) Order by the NOM_FICHIER column
 * @method CommonOffreCautionSignatureQuery orderByHash($order = Criteria::ASC) Order by the HASH column
 * @method CommonOffreCautionSignatureQuery orderByAlgorithmeHash($order = Criteria::ASC) Order by the ALGORITHME_HASH column
 * @method CommonOffreCautionSignatureQuery orderByDateDerniereVerification($order = Criteria::ASC) Order by the DATE_DERNIERE_VERIFICATION column
 *
 * @method CommonOffreCautionSignatureQuery groupById() Group by the ID column
 * @method CommonOffreCautionSignatureQuery groupByIdOffreCaution() Group by the ID_OFFRE_CAUTION column
 * @method CommonOffreCautionSignatureQuery groupByIdBlob() Group by the ID_BLOB column
 * @method CommonOffreCautionSignatureQuery groupByRevision() Group by the REVISION column
 * @method CommonOffreCautionSignatureQuery groupByTypeDocument() Group by the TYPE_DOCUMENT column
 * @method CommonOffreCautionSignatureQuery groupByDateSignature() Group by the DATE_SIGNATURE column
 * @method CommonOffreCautionSignatureQuery groupByEmetteur() Group by the EMETTEUR column
 * @method CommonOffreCautionSignatureQuery groupByDetailEmetteur() Group by the DETAIL_EMETTEUR column
 * @method CommonOffreCautionSignatureQuery groupBySignataire() Group by the SIGNATAIRE column
 * @method CommonOffreCautionSignatureQuery groupByDetailSignataire() Group by the DETAIL_SIGNATAIRE column
 * @method CommonOffreCautionSignatureQuery groupByRevoque() Group by the REVOQUE column
 * @method CommonOffreCautionSignatureQuery groupByNonRepudiation() Group by the NON_REPUDIATION column
 * @method CommonOffreCautionSignatureQuery groupByChaineValide() Group by the CHAINE_VALIDE column
 * @method CommonOffreCautionSignatureQuery groupByDateDebPeriodeValidite() Group by the DATE_DEB_PERIODE_VALIDITE column
 * @method CommonOffreCautionSignatureQuery groupByDateFinPeriodeValidite() Group by the DATE_FIN_PERIODE_VALIDITE column
 * @method CommonOffreCautionSignatureQuery groupByPeriodeValidite() Group by the PERIODE_VALIDITE column
 * @method CommonOffreCautionSignatureQuery groupBySignatureValide() Group by the SIGNATURE_VALIDE column
 * @method CommonOffreCautionSignatureQuery groupByTypeSignature() Group by the TYPE_SIGNATURE column
 * @method CommonOffreCautionSignatureQuery groupByXmlSignature() Group by the XML_SIGNATURE column
 * @method CommonOffreCautionSignatureQuery groupByNomFichier() Group by the NOM_FICHIER column
 * @method CommonOffreCautionSignatureQuery groupByHash() Group by the HASH column
 * @method CommonOffreCautionSignatureQuery groupByAlgorithmeHash() Group by the ALGORITHME_HASH column
 * @method CommonOffreCautionSignatureQuery groupByDateDerniereVerification() Group by the DATE_DERNIERE_VERIFICATION column
 *
 * @method CommonOffreCautionSignatureQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonOffreCautionSignatureQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonOffreCautionSignatureQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonOffreCautionSignature findOne(PropelPDO $con = null) Return the first CommonOffreCautionSignature matching the query
 * @method CommonOffreCautionSignature findOneOrCreate(PropelPDO $con = null) Return the first CommonOffreCautionSignature matching the query, or a new CommonOffreCautionSignature object populated from the query conditions when no match is found
 *
 * @method CommonOffreCautionSignature findOneByIdOffreCaution(int $ID_OFFRE_CAUTION) Return the first CommonOffreCautionSignature filtered by the ID_OFFRE_CAUTION column
 * @method CommonOffreCautionSignature findOneByIdBlob(int $ID_BLOB) Return the first CommonOffreCautionSignature filtered by the ID_BLOB column
 * @method CommonOffreCautionSignature findOneByRevision(int $REVISION) Return the first CommonOffreCautionSignature filtered by the REVISION column
 * @method CommonOffreCautionSignature findOneByTypeDocument(string $TYPE_DOCUMENT) Return the first CommonOffreCautionSignature filtered by the TYPE_DOCUMENT column
 * @method CommonOffreCautionSignature findOneByDateSignature(string $DATE_SIGNATURE) Return the first CommonOffreCautionSignature filtered by the DATE_SIGNATURE column
 * @method CommonOffreCautionSignature findOneByEmetteur(string $EMETTEUR) Return the first CommonOffreCautionSignature filtered by the EMETTEUR column
 * @method CommonOffreCautionSignature findOneByDetailEmetteur(string $DETAIL_EMETTEUR) Return the first CommonOffreCautionSignature filtered by the DETAIL_EMETTEUR column
 * @method CommonOffreCautionSignature findOneBySignataire(string $SIGNATAIRE) Return the first CommonOffreCautionSignature filtered by the SIGNATAIRE column
 * @method CommonOffreCautionSignature findOneByDetailSignataire(string $DETAIL_SIGNATAIRE) Return the first CommonOffreCautionSignature filtered by the DETAIL_SIGNATAIRE column
 * @method CommonOffreCautionSignature findOneByRevoque(string $REVOQUE) Return the first CommonOffreCautionSignature filtered by the REVOQUE column
 * @method CommonOffreCautionSignature findOneByNonRepudiation(string $NON_REPUDIATION) Return the first CommonOffreCautionSignature filtered by the NON_REPUDIATION column
 * @method CommonOffreCautionSignature findOneByChaineValide(string $CHAINE_VALIDE) Return the first CommonOffreCautionSignature filtered by the CHAINE_VALIDE column
 * @method CommonOffreCautionSignature findOneByDateDebPeriodeValidite(string $DATE_DEB_PERIODE_VALIDITE) Return the first CommonOffreCautionSignature filtered by the DATE_DEB_PERIODE_VALIDITE column
 * @method CommonOffreCautionSignature findOneByDateFinPeriodeValidite(string $DATE_FIN_PERIODE_VALIDITE) Return the first CommonOffreCautionSignature filtered by the DATE_FIN_PERIODE_VALIDITE column
 * @method CommonOffreCautionSignature findOneByPeriodeValidite(string $PERIODE_VALIDITE) Return the first CommonOffreCautionSignature filtered by the PERIODE_VALIDITE column
 * @method CommonOffreCautionSignature findOneBySignatureValide(string $SIGNATURE_VALIDE) Return the first CommonOffreCautionSignature filtered by the SIGNATURE_VALIDE column
 * @method CommonOffreCautionSignature findOneByTypeSignature(string $TYPE_SIGNATURE) Return the first CommonOffreCautionSignature filtered by the TYPE_SIGNATURE column
 * @method CommonOffreCautionSignature findOneByXmlSignature(string $XML_SIGNATURE) Return the first CommonOffreCautionSignature filtered by the XML_SIGNATURE column
 * @method CommonOffreCautionSignature findOneByNomFichier(string $NOM_FICHIER) Return the first CommonOffreCautionSignature filtered by the NOM_FICHIER column
 * @method CommonOffreCautionSignature findOneByHash(string $HASH) Return the first CommonOffreCautionSignature filtered by the HASH column
 * @method CommonOffreCautionSignature findOneByAlgorithmeHash(string $ALGORITHME_HASH) Return the first CommonOffreCautionSignature filtered by the ALGORITHME_HASH column
 * @method CommonOffreCautionSignature findOneByDateDerniereVerification(string $DATE_DERNIERE_VERIFICATION) Return the first CommonOffreCautionSignature filtered by the DATE_DERNIERE_VERIFICATION column
 *
 * @method array findById(int $ID) Return CommonOffreCautionSignature objects filtered by the ID column
 * @method array findByIdOffreCaution(int $ID_OFFRE_CAUTION) Return CommonOffreCautionSignature objects filtered by the ID_OFFRE_CAUTION column
 * @method array findByIdBlob(int $ID_BLOB) Return CommonOffreCautionSignature objects filtered by the ID_BLOB column
 * @method array findByRevision(int $REVISION) Return CommonOffreCautionSignature objects filtered by the REVISION column
 * @method array findByTypeDocument(string $TYPE_DOCUMENT) Return CommonOffreCautionSignature objects filtered by the TYPE_DOCUMENT column
 * @method array findByDateSignature(string $DATE_SIGNATURE) Return CommonOffreCautionSignature objects filtered by the DATE_SIGNATURE column
 * @method array findByEmetteur(string $EMETTEUR) Return CommonOffreCautionSignature objects filtered by the EMETTEUR column
 * @method array findByDetailEmetteur(string $DETAIL_EMETTEUR) Return CommonOffreCautionSignature objects filtered by the DETAIL_EMETTEUR column
 * @method array findBySignataire(string $SIGNATAIRE) Return CommonOffreCautionSignature objects filtered by the SIGNATAIRE column
 * @method array findByDetailSignataire(string $DETAIL_SIGNATAIRE) Return CommonOffreCautionSignature objects filtered by the DETAIL_SIGNATAIRE column
 * @method array findByRevoque(string $REVOQUE) Return CommonOffreCautionSignature objects filtered by the REVOQUE column
 * @method array findByNonRepudiation(string $NON_REPUDIATION) Return CommonOffreCautionSignature objects filtered by the NON_REPUDIATION column
 * @method array findByChaineValide(string $CHAINE_VALIDE) Return CommonOffreCautionSignature objects filtered by the CHAINE_VALIDE column
 * @method array findByDateDebPeriodeValidite(string $DATE_DEB_PERIODE_VALIDITE) Return CommonOffreCautionSignature objects filtered by the DATE_DEB_PERIODE_VALIDITE column
 * @method array findByDateFinPeriodeValidite(string $DATE_FIN_PERIODE_VALIDITE) Return CommonOffreCautionSignature objects filtered by the DATE_FIN_PERIODE_VALIDITE column
 * @method array findByPeriodeValidite(string $PERIODE_VALIDITE) Return CommonOffreCautionSignature objects filtered by the PERIODE_VALIDITE column
 * @method array findBySignatureValide(string $SIGNATURE_VALIDE) Return CommonOffreCautionSignature objects filtered by the SIGNATURE_VALIDE column
 * @method array findByTypeSignature(string $TYPE_SIGNATURE) Return CommonOffreCautionSignature objects filtered by the TYPE_SIGNATURE column
 * @method array findByXmlSignature(string $XML_SIGNATURE) Return CommonOffreCautionSignature objects filtered by the XML_SIGNATURE column
 * @method array findByNomFichier(string $NOM_FICHIER) Return CommonOffreCautionSignature objects filtered by the NOM_FICHIER column
 * @method array findByHash(string $HASH) Return CommonOffreCautionSignature objects filtered by the HASH column
 * @method array findByAlgorithmeHash(string $ALGORITHME_HASH) Return CommonOffreCautionSignature objects filtered by the ALGORITHME_HASH column
 * @method array findByDateDerniereVerification(string $DATE_DERNIERE_VERIFICATION) Return CommonOffreCautionSignature objects filtered by the DATE_DERNIERE_VERIFICATION column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonOffreCautionSignatureQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonOffreCautionSignatureQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonOffreCautionSignature', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonOffreCautionSignatureQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonOffreCautionSignatureQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonOffreCautionSignatureQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonOffreCautionSignatureQuery) {
            return $criteria;
        }
        $query = new CommonOffreCautionSignatureQuery();
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
     * @return   CommonOffreCautionSignature|CommonOffreCautionSignature[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonOffreCautionSignaturePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonOffreCautionSignaturePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonOffreCautionSignature A model object, or null if the key is not found
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
     * @return                 CommonOffreCautionSignature A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `ID_OFFRE_CAUTION`, `ID_BLOB`, `REVISION`, `TYPE_DOCUMENT`, `DATE_SIGNATURE`, `EMETTEUR`, `DETAIL_EMETTEUR`, `SIGNATAIRE`, `DETAIL_SIGNATAIRE`, `REVOQUE`, `NON_REPUDIATION`, `CHAINE_VALIDE`, `DATE_DEB_PERIODE_VALIDITE`, `DATE_FIN_PERIODE_VALIDITE`, `PERIODE_VALIDITE`, `SIGNATURE_VALIDE`, `TYPE_SIGNATURE`, `XML_SIGNATURE`, `NOM_FICHIER`, `HASH`, `ALGORITHME_HASH`, `DATE_DERNIERE_VERIFICATION` FROM `offre_caution_signature` WHERE `ID` = :p0';
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
            $obj = new CommonOffreCautionSignature();
            $obj->hydrate($row);
            CommonOffreCautionSignaturePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonOffreCautionSignature|CommonOffreCautionSignature[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonOffreCautionSignature[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonOffreCautionSignatureQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonOffreCautionSignaturePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonOffreCautionSignatureQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonOffreCautionSignaturePeer::ID, $keys, Criteria::IN);
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
     * @return CommonOffreCautionSignatureQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonOffreCautionSignaturePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonOffreCautionSignaturePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOffreCautionSignaturePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the ID_OFFRE_CAUTION column
     *
     * Example usage:
     * <code>
     * $query->filterByIdOffreCaution(1234); // WHERE ID_OFFRE_CAUTION = 1234
     * $query->filterByIdOffreCaution(array(12, 34)); // WHERE ID_OFFRE_CAUTION IN (12, 34)
     * $query->filterByIdOffreCaution(array('min' => 12)); // WHERE ID_OFFRE_CAUTION >= 12
     * $query->filterByIdOffreCaution(array('max' => 12)); // WHERE ID_OFFRE_CAUTION <= 12
     * </code>
     *
     * @param     mixed $idOffreCaution The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffreCautionSignatureQuery The current query, for fluid interface
     */
    public function filterByIdOffreCaution($idOffreCaution = null, $comparison = null)
    {
        if (is_array($idOffreCaution)) {
            $useMinMax = false;
            if (isset($idOffreCaution['min'])) {
                $this->addUsingAlias(CommonOffreCautionSignaturePeer::ID_OFFRE_CAUTION, $idOffreCaution['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idOffreCaution['max'])) {
                $this->addUsingAlias(CommonOffreCautionSignaturePeer::ID_OFFRE_CAUTION, $idOffreCaution['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOffreCautionSignaturePeer::ID_OFFRE_CAUTION, $idOffreCaution, $comparison);
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
     * @return CommonOffreCautionSignatureQuery The current query, for fluid interface
     */
    public function filterByIdBlob($idBlob = null, $comparison = null)
    {
        if (is_array($idBlob)) {
            $useMinMax = false;
            if (isset($idBlob['min'])) {
                $this->addUsingAlias(CommonOffreCautionSignaturePeer::ID_BLOB, $idBlob['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBlob['max'])) {
                $this->addUsingAlias(CommonOffreCautionSignaturePeer::ID_BLOB, $idBlob['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOffreCautionSignaturePeer::ID_BLOB, $idBlob, $comparison);
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
     * @return CommonOffreCautionSignatureQuery The current query, for fluid interface
     */
    public function filterByRevision($revision = null, $comparison = null)
    {
        if (is_array($revision)) {
            $useMinMax = false;
            if (isset($revision['min'])) {
                $this->addUsingAlias(CommonOffreCautionSignaturePeer::REVISION, $revision['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($revision['max'])) {
                $this->addUsingAlias(CommonOffreCautionSignaturePeer::REVISION, $revision['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOffreCautionSignaturePeer::REVISION, $revision, $comparison);
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
     * @return CommonOffreCautionSignatureQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonOffreCautionSignaturePeer::TYPE_DOCUMENT, $typeDocument, $comparison);
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
     * @return CommonOffreCautionSignatureQuery The current query, for fluid interface
     */
    public function filterByDateSignature($dateSignature = null, $comparison = null)
    {
        if (is_array($dateSignature)) {
            $useMinMax = false;
            if (isset($dateSignature['min'])) {
                $this->addUsingAlias(CommonOffreCautionSignaturePeer::DATE_SIGNATURE, $dateSignature['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateSignature['max'])) {
                $this->addUsingAlias(CommonOffreCautionSignaturePeer::DATE_SIGNATURE, $dateSignature['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOffreCautionSignaturePeer::DATE_SIGNATURE, $dateSignature, $comparison);
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
     * @return CommonOffreCautionSignatureQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonOffreCautionSignaturePeer::EMETTEUR, $emetteur, $comparison);
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
     * @return CommonOffreCautionSignatureQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonOffreCautionSignaturePeer::DETAIL_EMETTEUR, $detailEmetteur, $comparison);
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
     * @return CommonOffreCautionSignatureQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonOffreCautionSignaturePeer::SIGNATAIRE, $signataire, $comparison);
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
     * @return CommonOffreCautionSignatureQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonOffreCautionSignaturePeer::DETAIL_SIGNATAIRE, $detailSignataire, $comparison);
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
     * @return CommonOffreCautionSignatureQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonOffreCautionSignaturePeer::REVOQUE, $revoque, $comparison);
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
     * @return CommonOffreCautionSignatureQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonOffreCautionSignaturePeer::NON_REPUDIATION, $nonRepudiation, $comparison);
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
     * @return CommonOffreCautionSignatureQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonOffreCautionSignaturePeer::CHAINE_VALIDE, $chaineValide, $comparison);
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
     * @return CommonOffreCautionSignatureQuery The current query, for fluid interface
     */
    public function filterByDateDebPeriodeValidite($dateDebPeriodeValidite = null, $comparison = null)
    {
        if (is_array($dateDebPeriodeValidite)) {
            $useMinMax = false;
            if (isset($dateDebPeriodeValidite['min'])) {
                $this->addUsingAlias(CommonOffreCautionSignaturePeer::DATE_DEB_PERIODE_VALIDITE, $dateDebPeriodeValidite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateDebPeriodeValidite['max'])) {
                $this->addUsingAlias(CommonOffreCautionSignaturePeer::DATE_DEB_PERIODE_VALIDITE, $dateDebPeriodeValidite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOffreCautionSignaturePeer::DATE_DEB_PERIODE_VALIDITE, $dateDebPeriodeValidite, $comparison);
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
     * @return CommonOffreCautionSignatureQuery The current query, for fluid interface
     */
    public function filterByDateFinPeriodeValidite($dateFinPeriodeValidite = null, $comparison = null)
    {
        if (is_array($dateFinPeriodeValidite)) {
            $useMinMax = false;
            if (isset($dateFinPeriodeValidite['min'])) {
                $this->addUsingAlias(CommonOffreCautionSignaturePeer::DATE_FIN_PERIODE_VALIDITE, $dateFinPeriodeValidite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateFinPeriodeValidite['max'])) {
                $this->addUsingAlias(CommonOffreCautionSignaturePeer::DATE_FIN_PERIODE_VALIDITE, $dateFinPeriodeValidite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOffreCautionSignaturePeer::DATE_FIN_PERIODE_VALIDITE, $dateFinPeriodeValidite, $comparison);
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
     * @return CommonOffreCautionSignatureQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonOffreCautionSignaturePeer::PERIODE_VALIDITE, $periodeValidite, $comparison);
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
     * @return CommonOffreCautionSignatureQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonOffreCautionSignaturePeer::SIGNATURE_VALIDE, $signatureValide, $comparison);
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
     * @return CommonOffreCautionSignatureQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonOffreCautionSignaturePeer::TYPE_SIGNATURE, $typeSignature, $comparison);
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
     * @return CommonOffreCautionSignatureQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonOffreCautionSignaturePeer::XML_SIGNATURE, $xmlSignature, $comparison);
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
     * @return CommonOffreCautionSignatureQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonOffreCautionSignaturePeer::NOM_FICHIER, $nomFichier, $comparison);
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
     * @return CommonOffreCautionSignatureQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonOffreCautionSignaturePeer::HASH, $hash, $comparison);
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
     * @return CommonOffreCautionSignatureQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonOffreCautionSignaturePeer::ALGORITHME_HASH, $algorithmeHash, $comparison);
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
     * @return CommonOffreCautionSignatureQuery The current query, for fluid interface
     */
    public function filterByDateDerniereVerification($dateDerniereVerification = null, $comparison = null)
    {
        if (is_array($dateDerniereVerification)) {
            $useMinMax = false;
            if (isset($dateDerniereVerification['min'])) {
                $this->addUsingAlias(CommonOffreCautionSignaturePeer::DATE_DERNIERE_VERIFICATION, $dateDerniereVerification['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateDerniereVerification['max'])) {
                $this->addUsingAlias(CommonOffreCautionSignaturePeer::DATE_DERNIERE_VERIFICATION, $dateDerniereVerification['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOffreCautionSignaturePeer::DATE_DERNIERE_VERIFICATION, $dateDerniereVerification, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonOffreCautionSignature $commonOffreCautionSignature Object to remove from the list of results
     *
     * @return CommonOffreCautionSignatureQuery The current query, for fluid interface
     */
    public function prune($commonOffreCautionSignature = null)
    {
        if ($commonOffreCautionSignature) {
            $this->addUsingAlias(CommonOffreCautionSignaturePeer::ID, $commonOffreCautionSignature->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
