<?php


/**
 * Base class that represents a query for the 't_signature_piece_jointe' table.
 *
 * 
 *
 * @method TSignaturePieceJointeQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method TSignaturePieceJointeQuery orderByIdBlob($order = Criteria::ASC) Order by the ID_BLOB column
 * @method TSignaturePieceJointeQuery orderByRevision($order = Criteria::ASC) Order by the REVISION column
 * @method TSignaturePieceJointeQuery orderByIdDemande($order = Criteria::ASC) Order by the ID_DEMANDE column
 * @method TSignaturePieceJointeQuery orderByIdHistorique($order = Criteria::ASC) Order by the ID_HISTORIQUE column
 * @method TSignaturePieceJointeQuery orderByDateSignature($order = Criteria::ASC) Order by the DATE_SIGNATURE column
 * @method TSignaturePieceJointeQuery orderByEmetteur($order = Criteria::ASC) Order by the EMETTEUR column
 * @method TSignaturePieceJointeQuery orderBySignataire($order = Criteria::ASC) Order by the SIGNATAIRE column
 * @method TSignaturePieceJointeQuery orderByRevoque($order = Criteria::ASC) Order by the REVOQUE column
 * @method TSignaturePieceJointeQuery orderByChaineValide($order = Criteria::ASC) Order by the CHAINE_VALIDE column
 * @method TSignaturePieceJointeQuery orderByDateDebPeriodeValidite($order = Criteria::ASC) Order by the DATE_DEB_PERIODE_VALIDITE column
 * @method TSignaturePieceJointeQuery orderByDateFinPeriodeValidite($order = Criteria::ASC) Order by the DATE_FIN_PERIODE_VALIDITE column
 * @method TSignaturePieceJointeQuery orderBySignatureValide($order = Criteria::ASC) Order by the SIGNATURE_VALIDE column
 * @method TSignaturePieceJointeQuery orderByFromDemandeur($order = Criteria::ASC) Order by the FROM_DEMANDEUR column
 * @method TSignaturePieceJointeQuery orderByTypeSignature($order = Criteria::ASC) Order by the TYPE_SIGNATURE column
 * @method TSignaturePieceJointeQuery orderByXmlSignature($order = Criteria::ASC) Order by the XML_SIGNATURE column
 * @method TSignaturePieceJointeQuery orderByNomFichier($order = Criteria::ASC) Order by the NOM_FICHIER column
 * @method TSignaturePieceJointeQuery orderByHash($order = Criteria::ASC) Order by the hash column
 * @method TSignaturePieceJointeQuery orderByAlgorithmeHash($order = Criteria::ASC) Order by the algorithme_hash column
 * @method TSignaturePieceJointeQuery orderByDateDerniereVerification($order = Criteria::ASC) Order by the DATE_DERNIERE_VERIFICATION column
 * @method TSignaturePieceJointeQuery orderBySignatureElectronique($order = Criteria::ASC) Order by the SIGNATURE_ELECTRONIQUE column
 *
 * @method TSignaturePieceJointeQuery groupById() Group by the ID column
 * @method TSignaturePieceJointeQuery groupByIdBlob() Group by the ID_BLOB column
 * @method TSignaturePieceJointeQuery groupByRevision() Group by the REVISION column
 * @method TSignaturePieceJointeQuery groupByIdDemande() Group by the ID_DEMANDE column
 * @method TSignaturePieceJointeQuery groupByIdHistorique() Group by the ID_HISTORIQUE column
 * @method TSignaturePieceJointeQuery groupByDateSignature() Group by the DATE_SIGNATURE column
 * @method TSignaturePieceJointeQuery groupByEmetteur() Group by the EMETTEUR column
 * @method TSignaturePieceJointeQuery groupBySignataire() Group by the SIGNATAIRE column
 * @method TSignaturePieceJointeQuery groupByRevoque() Group by the REVOQUE column
 * @method TSignaturePieceJointeQuery groupByChaineValide() Group by the CHAINE_VALIDE column
 * @method TSignaturePieceJointeQuery groupByDateDebPeriodeValidite() Group by the DATE_DEB_PERIODE_VALIDITE column
 * @method TSignaturePieceJointeQuery groupByDateFinPeriodeValidite() Group by the DATE_FIN_PERIODE_VALIDITE column
 * @method TSignaturePieceJointeQuery groupBySignatureValide() Group by the SIGNATURE_VALIDE column
 * @method TSignaturePieceJointeQuery groupByFromDemandeur() Group by the FROM_DEMANDEUR column
 * @method TSignaturePieceJointeQuery groupByTypeSignature() Group by the TYPE_SIGNATURE column
 * @method TSignaturePieceJointeQuery groupByXmlSignature() Group by the XML_SIGNATURE column
 * @method TSignaturePieceJointeQuery groupByNomFichier() Group by the NOM_FICHIER column
 * @method TSignaturePieceJointeQuery groupByHash() Group by the hash column
 * @method TSignaturePieceJointeQuery groupByAlgorithmeHash() Group by the algorithme_hash column
 * @method TSignaturePieceJointeQuery groupByDateDerniereVerification() Group by the DATE_DERNIERE_VERIFICATION column
 * @method TSignaturePieceJointeQuery groupBySignatureElectronique() Group by the SIGNATURE_ELECTRONIQUE column
 *
 * @method TSignaturePieceJointeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TSignaturePieceJointeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TSignaturePieceJointeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TSignaturePieceJointe findOne(PropelPDO $con = null) Return the first TSignaturePieceJointe matching the query
 * @method TSignaturePieceJointe findOneOrCreate(PropelPDO $con = null) Return the first TSignaturePieceJointe matching the query, or a new TSignaturePieceJointe object populated from the query conditions when no match is found
 *
 * @method TSignaturePieceJointe findOneByIdBlob(int $ID_BLOB) Return the first TSignaturePieceJointe filtered by the ID_BLOB column
 * @method TSignaturePieceJointe findOneByRevision(int $REVISION) Return the first TSignaturePieceJointe filtered by the REVISION column
 * @method TSignaturePieceJointe findOneByIdDemande(int $ID_DEMANDE) Return the first TSignaturePieceJointe filtered by the ID_DEMANDE column
 * @method TSignaturePieceJointe findOneByIdHistorique(int $ID_HISTORIQUE) Return the first TSignaturePieceJointe filtered by the ID_HISTORIQUE column
 * @method TSignaturePieceJointe findOneByDateSignature(string $DATE_SIGNATURE) Return the first TSignaturePieceJointe filtered by the DATE_SIGNATURE column
 * @method TSignaturePieceJointe findOneByEmetteur(string $EMETTEUR) Return the first TSignaturePieceJointe filtered by the EMETTEUR column
 * @method TSignaturePieceJointe findOneBySignataire(string $SIGNATAIRE) Return the first TSignaturePieceJointe filtered by the SIGNATAIRE column
 * @method TSignaturePieceJointe findOneByRevoque(string $REVOQUE) Return the first TSignaturePieceJointe filtered by the REVOQUE column
 * @method TSignaturePieceJointe findOneByChaineValide(string $CHAINE_VALIDE) Return the first TSignaturePieceJointe filtered by the CHAINE_VALIDE column
 * @method TSignaturePieceJointe findOneByDateDebPeriodeValidite(string $DATE_DEB_PERIODE_VALIDITE) Return the first TSignaturePieceJointe filtered by the DATE_DEB_PERIODE_VALIDITE column
 * @method TSignaturePieceJointe findOneByDateFinPeriodeValidite(string $DATE_FIN_PERIODE_VALIDITE) Return the first TSignaturePieceJointe filtered by the DATE_FIN_PERIODE_VALIDITE column
 * @method TSignaturePieceJointe findOneBySignatureValide(string $SIGNATURE_VALIDE) Return the first TSignaturePieceJointe filtered by the SIGNATURE_VALIDE column
 * @method TSignaturePieceJointe findOneByFromDemandeur(string $FROM_DEMANDEUR) Return the first TSignaturePieceJointe filtered by the FROM_DEMANDEUR column
 * @method TSignaturePieceJointe findOneByTypeSignature(string $TYPE_SIGNATURE) Return the first TSignaturePieceJointe filtered by the TYPE_SIGNATURE column
 * @method TSignaturePieceJointe findOneByXmlSignature(string $XML_SIGNATURE) Return the first TSignaturePieceJointe filtered by the XML_SIGNATURE column
 * @method TSignaturePieceJointe findOneByNomFichier(string $NOM_FICHIER) Return the first TSignaturePieceJointe filtered by the NOM_FICHIER column
 * @method TSignaturePieceJointe findOneByHash(string $hash) Return the first TSignaturePieceJointe filtered by the hash column
 * @method TSignaturePieceJointe findOneByAlgorithmeHash(string $algorithme_hash) Return the first TSignaturePieceJointe filtered by the algorithme_hash column
 * @method TSignaturePieceJointe findOneByDateDerniereVerification(string $DATE_DERNIERE_VERIFICATION) Return the first TSignaturePieceJointe filtered by the DATE_DERNIERE_VERIFICATION column
 * @method TSignaturePieceJointe findOneBySignatureElectronique(string $SIGNATURE_ELECTRONIQUE) Return the first TSignaturePieceJointe filtered by the SIGNATURE_ELECTRONIQUE column
 *
 * @method array findById(int $ID) Return TSignaturePieceJointe objects filtered by the ID column
 * @method array findByIdBlob(int $ID_BLOB) Return TSignaturePieceJointe objects filtered by the ID_BLOB column
 * @method array findByRevision(int $REVISION) Return TSignaturePieceJointe objects filtered by the REVISION column
 * @method array findByIdDemande(int $ID_DEMANDE) Return TSignaturePieceJointe objects filtered by the ID_DEMANDE column
 * @method array findByIdHistorique(int $ID_HISTORIQUE) Return TSignaturePieceJointe objects filtered by the ID_HISTORIQUE column
 * @method array findByDateSignature(string $DATE_SIGNATURE) Return TSignaturePieceJointe objects filtered by the DATE_SIGNATURE column
 * @method array findByEmetteur(string $EMETTEUR) Return TSignaturePieceJointe objects filtered by the EMETTEUR column
 * @method array findBySignataire(string $SIGNATAIRE) Return TSignaturePieceJointe objects filtered by the SIGNATAIRE column
 * @method array findByRevoque(string $REVOQUE) Return TSignaturePieceJointe objects filtered by the REVOQUE column
 * @method array findByChaineValide(string $CHAINE_VALIDE) Return TSignaturePieceJointe objects filtered by the CHAINE_VALIDE column
 * @method array findByDateDebPeriodeValidite(string $DATE_DEB_PERIODE_VALIDITE) Return TSignaturePieceJointe objects filtered by the DATE_DEB_PERIODE_VALIDITE column
 * @method array findByDateFinPeriodeValidite(string $DATE_FIN_PERIODE_VALIDITE) Return TSignaturePieceJointe objects filtered by the DATE_FIN_PERIODE_VALIDITE column
 * @method array findBySignatureValide(string $SIGNATURE_VALIDE) Return TSignaturePieceJointe objects filtered by the SIGNATURE_VALIDE column
 * @method array findByFromDemandeur(string $FROM_DEMANDEUR) Return TSignaturePieceJointe objects filtered by the FROM_DEMANDEUR column
 * @method array findByTypeSignature(string $TYPE_SIGNATURE) Return TSignaturePieceJointe objects filtered by the TYPE_SIGNATURE column
 * @method array findByXmlSignature(string $XML_SIGNATURE) Return TSignaturePieceJointe objects filtered by the XML_SIGNATURE column
 * @method array findByNomFichier(string $NOM_FICHIER) Return TSignaturePieceJointe objects filtered by the NOM_FICHIER column
 * @method array findByHash(string $hash) Return TSignaturePieceJointe objects filtered by the hash column
 * @method array findByAlgorithmeHash(string $algorithme_hash) Return TSignaturePieceJointe objects filtered by the algorithme_hash column
 * @method array findByDateDerniereVerification(string $DATE_DERNIERE_VERIFICATION) Return TSignaturePieceJointe objects filtered by the DATE_DERNIERE_VERIFICATION column
 * @method array findBySignatureElectronique(string $SIGNATURE_ELECTRONIQUE) Return TSignaturePieceJointe objects filtered by the SIGNATURE_ELECTRONIQUE column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseTSignaturePieceJointeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTSignaturePieceJointeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'TSignaturePieceJointe', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TSignaturePieceJointeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TSignaturePieceJointeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TSignaturePieceJointeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TSignaturePieceJointeQuery) {
            return $criteria;
        }
        $query = new TSignaturePieceJointeQuery();
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
     * @return   TSignaturePieceJointe|TSignaturePieceJointe[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TSignaturePieceJointePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TSignaturePieceJointePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TSignaturePieceJointe A model object, or null if the key is not found
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
     * @return                 TSignaturePieceJointe A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `ID_BLOB`, `REVISION`, `ID_DEMANDE`, `ID_HISTORIQUE`, `DATE_SIGNATURE`, `EMETTEUR`, `SIGNATAIRE`, `REVOQUE`, `CHAINE_VALIDE`, `DATE_DEB_PERIODE_VALIDITE`, `DATE_FIN_PERIODE_VALIDITE`, `SIGNATURE_VALIDE`, `FROM_DEMANDEUR`, `TYPE_SIGNATURE`, `XML_SIGNATURE`, `NOM_FICHIER`, `hash`, `algorithme_hash`, `DATE_DERNIERE_VERIFICATION`, `SIGNATURE_ELECTRONIQUE` FROM `t_signature_piece_jointe` WHERE `ID` = :p0';
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
            $obj = new TSignaturePieceJointe();
            $obj->hydrate($row);
            TSignaturePieceJointePeer::addInstanceToPool($obj, (string) $key);
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
     * @return TSignaturePieceJointe|TSignaturePieceJointe[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TSignaturePieceJointe[]|mixed the list of results, formatted by the current formatter
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
     * @return TSignaturePieceJointeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TSignaturePieceJointePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TSignaturePieceJointeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TSignaturePieceJointePeer::ID, $keys, Criteria::IN);
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
     * @return TSignaturePieceJointeQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(TSignaturePieceJointePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(TSignaturePieceJointePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TSignaturePieceJointePeer::ID, $id, $comparison);
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
     * @return TSignaturePieceJointeQuery The current query, for fluid interface
     */
    public function filterByIdBlob($idBlob = null, $comparison = null)
    {
        if (is_array($idBlob)) {
            $useMinMax = false;
            if (isset($idBlob['min'])) {
                $this->addUsingAlias(TSignaturePieceJointePeer::ID_BLOB, $idBlob['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBlob['max'])) {
                $this->addUsingAlias(TSignaturePieceJointePeer::ID_BLOB, $idBlob['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TSignaturePieceJointePeer::ID_BLOB, $idBlob, $comparison);
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
     * @return TSignaturePieceJointeQuery The current query, for fluid interface
     */
    public function filterByRevision($revision = null, $comparison = null)
    {
        if (is_array($revision)) {
            $useMinMax = false;
            if (isset($revision['min'])) {
                $this->addUsingAlias(TSignaturePieceJointePeer::REVISION, $revision['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($revision['max'])) {
                $this->addUsingAlias(TSignaturePieceJointePeer::REVISION, $revision['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TSignaturePieceJointePeer::REVISION, $revision, $comparison);
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
     * @return TSignaturePieceJointeQuery The current query, for fluid interface
     */
    public function filterByIdDemande($idDemande = null, $comparison = null)
    {
        if (is_array($idDemande)) {
            $useMinMax = false;
            if (isset($idDemande['min'])) {
                $this->addUsingAlias(TSignaturePieceJointePeer::ID_DEMANDE, $idDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDemande['max'])) {
                $this->addUsingAlias(TSignaturePieceJointePeer::ID_DEMANDE, $idDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TSignaturePieceJointePeer::ID_DEMANDE, $idDemande, $comparison);
    }

    /**
     * Filter the query on the ID_HISTORIQUE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdHistorique(1234); // WHERE ID_HISTORIQUE = 1234
     * $query->filterByIdHistorique(array(12, 34)); // WHERE ID_HISTORIQUE IN (12, 34)
     * $query->filterByIdHistorique(array('min' => 12)); // WHERE ID_HISTORIQUE >= 12
     * $query->filterByIdHistorique(array('max' => 12)); // WHERE ID_HISTORIQUE <= 12
     * </code>
     *
     * @param     mixed $idHistorique The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TSignaturePieceJointeQuery The current query, for fluid interface
     */
    public function filterByIdHistorique($idHistorique = null, $comparison = null)
    {
        if (is_array($idHistorique)) {
            $useMinMax = false;
            if (isset($idHistorique['min'])) {
                $this->addUsingAlias(TSignaturePieceJointePeer::ID_HISTORIQUE, $idHistorique['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idHistorique['max'])) {
                $this->addUsingAlias(TSignaturePieceJointePeer::ID_HISTORIQUE, $idHistorique['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TSignaturePieceJointePeer::ID_HISTORIQUE, $idHistorique, $comparison);
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
     * @return TSignaturePieceJointeQuery The current query, for fluid interface
     */
    public function filterByDateSignature($dateSignature = null, $comparison = null)
    {
        if (is_array($dateSignature)) {
            $useMinMax = false;
            if (isset($dateSignature['min'])) {
                $this->addUsingAlias(TSignaturePieceJointePeer::DATE_SIGNATURE, $dateSignature['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateSignature['max'])) {
                $this->addUsingAlias(TSignaturePieceJointePeer::DATE_SIGNATURE, $dateSignature['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TSignaturePieceJointePeer::DATE_SIGNATURE, $dateSignature, $comparison);
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
     * @return TSignaturePieceJointeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TSignaturePieceJointePeer::EMETTEUR, $emetteur, $comparison);
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
     * @return TSignaturePieceJointeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TSignaturePieceJointePeer::SIGNATAIRE, $signataire, $comparison);
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
     * @return TSignaturePieceJointeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TSignaturePieceJointePeer::REVOQUE, $revoque, $comparison);
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
     * @return TSignaturePieceJointeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TSignaturePieceJointePeer::CHAINE_VALIDE, $chaineValide, $comparison);
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
     * @return TSignaturePieceJointeQuery The current query, for fluid interface
     */
    public function filterByDateDebPeriodeValidite($dateDebPeriodeValidite = null, $comparison = null)
    {
        if (is_array($dateDebPeriodeValidite)) {
            $useMinMax = false;
            if (isset($dateDebPeriodeValidite['min'])) {
                $this->addUsingAlias(TSignaturePieceJointePeer::DATE_DEB_PERIODE_VALIDITE, $dateDebPeriodeValidite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateDebPeriodeValidite['max'])) {
                $this->addUsingAlias(TSignaturePieceJointePeer::DATE_DEB_PERIODE_VALIDITE, $dateDebPeriodeValidite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TSignaturePieceJointePeer::DATE_DEB_PERIODE_VALIDITE, $dateDebPeriodeValidite, $comparison);
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
     * @return TSignaturePieceJointeQuery The current query, for fluid interface
     */
    public function filterByDateFinPeriodeValidite($dateFinPeriodeValidite = null, $comparison = null)
    {
        if (is_array($dateFinPeriodeValidite)) {
            $useMinMax = false;
            if (isset($dateFinPeriodeValidite['min'])) {
                $this->addUsingAlias(TSignaturePieceJointePeer::DATE_FIN_PERIODE_VALIDITE, $dateFinPeriodeValidite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateFinPeriodeValidite['max'])) {
                $this->addUsingAlias(TSignaturePieceJointePeer::DATE_FIN_PERIODE_VALIDITE, $dateFinPeriodeValidite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TSignaturePieceJointePeer::DATE_FIN_PERIODE_VALIDITE, $dateFinPeriodeValidite, $comparison);
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
     * @return TSignaturePieceJointeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TSignaturePieceJointePeer::SIGNATURE_VALIDE, $signatureValide, $comparison);
    }

    /**
     * Filter the query on the FROM_DEMANDEUR column
     *
     * Example usage:
     * <code>
     * $query->filterByFromDemandeur('fooValue');   // WHERE FROM_DEMANDEUR = 'fooValue'
     * $query->filterByFromDemandeur('%fooValue%'); // WHERE FROM_DEMANDEUR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fromDemandeur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TSignaturePieceJointeQuery The current query, for fluid interface
     */
    public function filterByFromDemandeur($fromDemandeur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fromDemandeur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fromDemandeur)) {
                $fromDemandeur = str_replace('*', '%', $fromDemandeur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TSignaturePieceJointePeer::FROM_DEMANDEUR, $fromDemandeur, $comparison);
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
     * @return TSignaturePieceJointeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TSignaturePieceJointePeer::TYPE_SIGNATURE, $typeSignature, $comparison);
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
     * @return TSignaturePieceJointeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TSignaturePieceJointePeer::XML_SIGNATURE, $xmlSignature, $comparison);
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
     * @return TSignaturePieceJointeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TSignaturePieceJointePeer::NOM_FICHIER, $nomFichier, $comparison);
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
     * @return TSignaturePieceJointeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TSignaturePieceJointePeer::HASH, $hash, $comparison);
    }

    /**
     * Filter the query on the algorithme_hash column
     *
     * Example usage:
     * <code>
     * $query->filterByAlgorithmeHash('fooValue');   // WHERE algorithme_hash = 'fooValue'
     * $query->filterByAlgorithmeHash('%fooValue%'); // WHERE algorithme_hash LIKE '%fooValue%'
     * </code>
     *
     * @param     string $algorithmeHash The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TSignaturePieceJointeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TSignaturePieceJointePeer::ALGORITHME_HASH, $algorithmeHash, $comparison);
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
     * @return TSignaturePieceJointeQuery The current query, for fluid interface
     */
    public function filterByDateDerniereVerification($dateDerniereVerification = null, $comparison = null)
    {
        if (is_array($dateDerniereVerification)) {
            $useMinMax = false;
            if (isset($dateDerniereVerification['min'])) {
                $this->addUsingAlias(TSignaturePieceJointePeer::DATE_DERNIERE_VERIFICATION, $dateDerniereVerification['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateDerniereVerification['max'])) {
                $this->addUsingAlias(TSignaturePieceJointePeer::DATE_DERNIERE_VERIFICATION, $dateDerniereVerification['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TSignaturePieceJointePeer::DATE_DERNIERE_VERIFICATION, $dateDerniereVerification, $comparison);
    }

    /**
     * Filter the query on the SIGNATURE_ELECTRONIQUE column
     *
     * Example usage:
     * <code>
     * $query->filterBySignatureElectronique('fooValue');   // WHERE SIGNATURE_ELECTRONIQUE = 'fooValue'
     * $query->filterBySignatureElectronique('%fooValue%'); // WHERE SIGNATURE_ELECTRONIQUE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $signatureElectronique The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TSignaturePieceJointeQuery The current query, for fluid interface
     */
    public function filterBySignatureElectronique($signatureElectronique = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($signatureElectronique)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $signatureElectronique)) {
                $signatureElectronique = str_replace('*', '%', $signatureElectronique);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TSignaturePieceJointePeer::SIGNATURE_ELECTRONIQUE, $signatureElectronique, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   TSignaturePieceJointe $tSignaturePieceJointe Object to remove from the list of results
     *
     * @return TSignaturePieceJointeQuery The current query, for fluid interface
     */
    public function prune($tSignaturePieceJointe = null)
    {
        if ($tSignaturePieceJointe) {
            $this->addUsingAlias(TSignaturePieceJointePeer::ID, $tSignaturePieceJointe->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
