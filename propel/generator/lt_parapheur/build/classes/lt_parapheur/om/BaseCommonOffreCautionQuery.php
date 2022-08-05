<?php


/**
 * Base class that represents a query for the 'offre_caution' table.
 *
 * 
 *
 * @method CommonOffreCautionQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method CommonOffreCautionQuery orderByIdDemande($order = Criteria::ASC) Order by the ID_DEMANDE column
 * @method CommonOffreCautionQuery orderByRefConsultation($order = Criteria::ASC) Order by the REF_CONSULTATION column
 * @method CommonOffreCautionQuery orderByIdOffre($order = Criteria::ASC) Order by the ID_OFFRE column
 * @method CommonOffreCautionQuery orderByTypeEnv($order = Criteria::ASC) Order by the TYPE_ENV column
 * @method CommonOffreCautionQuery orderByIdEntreprise($order = Criteria::ASC) Order by the ID_ENTREPRISE column
 * @method CommonOffreCautionQuery orderByIdInscrit($order = Criteria::ASC) Order by the ID_INSCRIT column
 * @method CommonOffreCautionQuery orderByAcronyme($order = Criteria::ASC) Order by the ACRONYME column
 * @method CommonOffreCautionQuery orderByIntitule($order = Criteria::ASC) Order by the INTITULE column
 * @method CommonOffreCautionQuery orderByLot($order = Criteria::ASC) Order by the LOT column
 * @method CommonOffreCautionQuery orderByObjetLot($order = Criteria::ASC) Order by the OBJET_LOT column
 * @method CommonOffreCautionQuery orderByRaisonSociale($order = Criteria::ASC) Order by the RAISON_SOCIALE column
 * @method CommonOffreCautionQuery orderByMontant($order = Criteria::ASC) Order by the MONTANT column
 * @method CommonOffreCautionQuery orderByDateDemande($order = Criteria::ASC) Order by the DATE_DEMANDE column
 * @method CommonOffreCautionQuery orderByIdStatutCaution($order = Criteria::ASC) Order by the ID_STATUT_CAUTION column
 * @method CommonOffreCautionQuery orderByIdCompteBancaire($order = Criteria::ASC) Order by the ID_COMPTE_BANCAIRE column
 * @method CommonOffreCautionQuery orderByIdBlobDemande($order = Criteria::ASC) Order by the ID_BLOB_DEMANDE column
 * @method CommonOffreCautionQuery orderByNomDocDemande($order = Criteria::ASC) Order by the NOM_DOC_DEMANDE column
 * @method CommonOffreCautionQuery orderByIdBlobCaution($order = Criteria::ASC) Order by the ID_BLOB_CAUTION column
 * @method CommonOffreCautionQuery orderByNomDocCaution($order = Criteria::ASC) Order by the NOM_DOC_CAUTION column
 * @method CommonOffreCautionQuery orderByIdInscritCrea($order = Criteria::ASC) Order by the ID_INSCRIT_CREA column
 * @method CommonOffreCautionQuery orderByDateCrea($order = Criteria::ASC) Order by the DATE_CREA column
 * @method CommonOffreCautionQuery orderByIdentifiantBancaire($order = Criteria::ASC) Order by the IDENTIFIANT_BANCAIRE column
 * @method CommonOffreCautionQuery orderByAcheteurPublic($order = Criteria::ASC) Order by the ACHETEUR_PUBLIC column
 * @method CommonOffreCautionQuery orderByDateValidation($order = Criteria::ASC) Order by the DATE_VALIDATION column
 * @method CommonOffreCautionQuery orderByDepotAnnule($order = Criteria::ASC) Order by the DEPOT_ANNULE column
 *
 * @method CommonOffreCautionQuery groupById() Group by the ID column
 * @method CommonOffreCautionQuery groupByIdDemande() Group by the ID_DEMANDE column
 * @method CommonOffreCautionQuery groupByRefConsultation() Group by the REF_CONSULTATION column
 * @method CommonOffreCautionQuery groupByIdOffre() Group by the ID_OFFRE column
 * @method CommonOffreCautionQuery groupByTypeEnv() Group by the TYPE_ENV column
 * @method CommonOffreCautionQuery groupByIdEntreprise() Group by the ID_ENTREPRISE column
 * @method CommonOffreCautionQuery groupByIdInscrit() Group by the ID_INSCRIT column
 * @method CommonOffreCautionQuery groupByAcronyme() Group by the ACRONYME column
 * @method CommonOffreCautionQuery groupByIntitule() Group by the INTITULE column
 * @method CommonOffreCautionQuery groupByLot() Group by the LOT column
 * @method CommonOffreCautionQuery groupByObjetLot() Group by the OBJET_LOT column
 * @method CommonOffreCautionQuery groupByRaisonSociale() Group by the RAISON_SOCIALE column
 * @method CommonOffreCautionQuery groupByMontant() Group by the MONTANT column
 * @method CommonOffreCautionQuery groupByDateDemande() Group by the DATE_DEMANDE column
 * @method CommonOffreCautionQuery groupByIdStatutCaution() Group by the ID_STATUT_CAUTION column
 * @method CommonOffreCautionQuery groupByIdCompteBancaire() Group by the ID_COMPTE_BANCAIRE column
 * @method CommonOffreCautionQuery groupByIdBlobDemande() Group by the ID_BLOB_DEMANDE column
 * @method CommonOffreCautionQuery groupByNomDocDemande() Group by the NOM_DOC_DEMANDE column
 * @method CommonOffreCautionQuery groupByIdBlobCaution() Group by the ID_BLOB_CAUTION column
 * @method CommonOffreCautionQuery groupByNomDocCaution() Group by the NOM_DOC_CAUTION column
 * @method CommonOffreCautionQuery groupByIdInscritCrea() Group by the ID_INSCRIT_CREA column
 * @method CommonOffreCautionQuery groupByDateCrea() Group by the DATE_CREA column
 * @method CommonOffreCautionQuery groupByIdentifiantBancaire() Group by the IDENTIFIANT_BANCAIRE column
 * @method CommonOffreCautionQuery groupByAcheteurPublic() Group by the ACHETEUR_PUBLIC column
 * @method CommonOffreCautionQuery groupByDateValidation() Group by the DATE_VALIDATION column
 * @method CommonOffreCautionQuery groupByDepotAnnule() Group by the DEPOT_ANNULE column
 *
 * @method CommonOffreCautionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonOffreCautionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonOffreCautionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonOffreCaution findOne(PropelPDO $con = null) Return the first CommonOffreCaution matching the query
 * @method CommonOffreCaution findOneOrCreate(PropelPDO $con = null) Return the first CommonOffreCaution matching the query, or a new CommonOffreCaution object populated from the query conditions when no match is found
 *
 * @method CommonOffreCaution findOneByIdDemande(int $ID_DEMANDE) Return the first CommonOffreCaution filtered by the ID_DEMANDE column
 * @method CommonOffreCaution findOneByRefConsultation(int $REF_CONSULTATION) Return the first CommonOffreCaution filtered by the REF_CONSULTATION column
 * @method CommonOffreCaution findOneByIdOffre(int $ID_OFFRE) Return the first CommonOffreCaution filtered by the ID_OFFRE column
 * @method CommonOffreCaution findOneByTypeEnv(int $TYPE_ENV) Return the first CommonOffreCaution filtered by the TYPE_ENV column
 * @method CommonOffreCaution findOneByIdEntreprise(int $ID_ENTREPRISE) Return the first CommonOffreCaution filtered by the ID_ENTREPRISE column
 * @method CommonOffreCaution findOneByIdInscrit(int $ID_INSCRIT) Return the first CommonOffreCaution filtered by the ID_INSCRIT column
 * @method CommonOffreCaution findOneByAcronyme(string $ACRONYME) Return the first CommonOffreCaution filtered by the ACRONYME column
 * @method CommonOffreCaution findOneByIntitule(string $INTITULE) Return the first CommonOffreCaution filtered by the INTITULE column
 * @method CommonOffreCaution findOneByLot(int $LOT) Return the first CommonOffreCaution filtered by the LOT column
 * @method CommonOffreCaution findOneByObjetLot(string $OBJET_LOT) Return the first CommonOffreCaution filtered by the OBJET_LOT column
 * @method CommonOffreCaution findOneByRaisonSociale(string $RAISON_SOCIALE) Return the first CommonOffreCaution filtered by the RAISON_SOCIALE column
 * @method CommonOffreCaution findOneByMontant(double $MONTANT) Return the first CommonOffreCaution filtered by the MONTANT column
 * @method CommonOffreCaution findOneByDateDemande(string $DATE_DEMANDE) Return the first CommonOffreCaution filtered by the DATE_DEMANDE column
 * @method CommonOffreCaution findOneByIdStatutCaution(int $ID_STATUT_CAUTION) Return the first CommonOffreCaution filtered by the ID_STATUT_CAUTION column
 * @method CommonOffreCaution findOneByIdCompteBancaire(int $ID_COMPTE_BANCAIRE) Return the first CommonOffreCaution filtered by the ID_COMPTE_BANCAIRE column
 * @method CommonOffreCaution findOneByIdBlobDemande(int $ID_BLOB_DEMANDE) Return the first CommonOffreCaution filtered by the ID_BLOB_DEMANDE column
 * @method CommonOffreCaution findOneByNomDocDemande(string $NOM_DOC_DEMANDE) Return the first CommonOffreCaution filtered by the NOM_DOC_DEMANDE column
 * @method CommonOffreCaution findOneByIdBlobCaution(int $ID_BLOB_CAUTION) Return the first CommonOffreCaution filtered by the ID_BLOB_CAUTION column
 * @method CommonOffreCaution findOneByNomDocCaution(string $NOM_DOC_CAUTION) Return the first CommonOffreCaution filtered by the NOM_DOC_CAUTION column
 * @method CommonOffreCaution findOneByIdInscritCrea(int $ID_INSCRIT_CREA) Return the first CommonOffreCaution filtered by the ID_INSCRIT_CREA column
 * @method CommonOffreCaution findOneByDateCrea(string $DATE_CREA) Return the first CommonOffreCaution filtered by the DATE_CREA column
 * @method CommonOffreCaution findOneByIdentifiantBancaire(string $IDENTIFIANT_BANCAIRE) Return the first CommonOffreCaution filtered by the IDENTIFIANT_BANCAIRE column
 * @method CommonOffreCaution findOneByAcheteurPublic(string $ACHETEUR_PUBLIC) Return the first CommonOffreCaution filtered by the ACHETEUR_PUBLIC column
 * @method CommonOffreCaution findOneByDateValidation(string $DATE_VALIDATION) Return the first CommonOffreCaution filtered by the DATE_VALIDATION column
 * @method CommonOffreCaution findOneByDepotAnnule(string $DEPOT_ANNULE) Return the first CommonOffreCaution filtered by the DEPOT_ANNULE column
 *
 * @method array findById(int $ID) Return CommonOffreCaution objects filtered by the ID column
 * @method array findByIdDemande(int $ID_DEMANDE) Return CommonOffreCaution objects filtered by the ID_DEMANDE column
 * @method array findByRefConsultation(int $REF_CONSULTATION) Return CommonOffreCaution objects filtered by the REF_CONSULTATION column
 * @method array findByIdOffre(int $ID_OFFRE) Return CommonOffreCaution objects filtered by the ID_OFFRE column
 * @method array findByTypeEnv(int $TYPE_ENV) Return CommonOffreCaution objects filtered by the TYPE_ENV column
 * @method array findByIdEntreprise(int $ID_ENTREPRISE) Return CommonOffreCaution objects filtered by the ID_ENTREPRISE column
 * @method array findByIdInscrit(int $ID_INSCRIT) Return CommonOffreCaution objects filtered by the ID_INSCRIT column
 * @method array findByAcronyme(string $ACRONYME) Return CommonOffreCaution objects filtered by the ACRONYME column
 * @method array findByIntitule(string $INTITULE) Return CommonOffreCaution objects filtered by the INTITULE column
 * @method array findByLot(int $LOT) Return CommonOffreCaution objects filtered by the LOT column
 * @method array findByObjetLot(string $OBJET_LOT) Return CommonOffreCaution objects filtered by the OBJET_LOT column
 * @method array findByRaisonSociale(string $RAISON_SOCIALE) Return CommonOffreCaution objects filtered by the RAISON_SOCIALE column
 * @method array findByMontant(double $MONTANT) Return CommonOffreCaution objects filtered by the MONTANT column
 * @method array findByDateDemande(string $DATE_DEMANDE) Return CommonOffreCaution objects filtered by the DATE_DEMANDE column
 * @method array findByIdStatutCaution(int $ID_STATUT_CAUTION) Return CommonOffreCaution objects filtered by the ID_STATUT_CAUTION column
 * @method array findByIdCompteBancaire(int $ID_COMPTE_BANCAIRE) Return CommonOffreCaution objects filtered by the ID_COMPTE_BANCAIRE column
 * @method array findByIdBlobDemande(int $ID_BLOB_DEMANDE) Return CommonOffreCaution objects filtered by the ID_BLOB_DEMANDE column
 * @method array findByNomDocDemande(string $NOM_DOC_DEMANDE) Return CommonOffreCaution objects filtered by the NOM_DOC_DEMANDE column
 * @method array findByIdBlobCaution(int $ID_BLOB_CAUTION) Return CommonOffreCaution objects filtered by the ID_BLOB_CAUTION column
 * @method array findByNomDocCaution(string $NOM_DOC_CAUTION) Return CommonOffreCaution objects filtered by the NOM_DOC_CAUTION column
 * @method array findByIdInscritCrea(int $ID_INSCRIT_CREA) Return CommonOffreCaution objects filtered by the ID_INSCRIT_CREA column
 * @method array findByDateCrea(string $DATE_CREA) Return CommonOffreCaution objects filtered by the DATE_CREA column
 * @method array findByIdentifiantBancaire(string $IDENTIFIANT_BANCAIRE) Return CommonOffreCaution objects filtered by the IDENTIFIANT_BANCAIRE column
 * @method array findByAcheteurPublic(string $ACHETEUR_PUBLIC) Return CommonOffreCaution objects filtered by the ACHETEUR_PUBLIC column
 * @method array findByDateValidation(string $DATE_VALIDATION) Return CommonOffreCaution objects filtered by the DATE_VALIDATION column
 * @method array findByDepotAnnule(string $DEPOT_ANNULE) Return CommonOffreCaution objects filtered by the DEPOT_ANNULE column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonOffreCautionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonOffreCautionQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonOffreCaution', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonOffreCautionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonOffreCautionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonOffreCautionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonOffreCautionQuery) {
            return $criteria;
        }
        $query = new CommonOffreCautionQuery();
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
     * @return   CommonOffreCaution|CommonOffreCaution[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonOffreCautionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonOffreCautionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonOffreCaution A model object, or null if the key is not found
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
     * @return                 CommonOffreCaution A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `ID_DEMANDE`, `REF_CONSULTATION`, `ID_OFFRE`, `TYPE_ENV`, `ID_ENTREPRISE`, `ID_INSCRIT`, `ACRONYME`, `INTITULE`, `LOT`, `OBJET_LOT`, `RAISON_SOCIALE`, `MONTANT`, `DATE_DEMANDE`, `ID_STATUT_CAUTION`, `ID_COMPTE_BANCAIRE`, `ID_BLOB_DEMANDE`, `NOM_DOC_DEMANDE`, `ID_BLOB_CAUTION`, `NOM_DOC_CAUTION`, `ID_INSCRIT_CREA`, `DATE_CREA`, `IDENTIFIANT_BANCAIRE`, `ACHETEUR_PUBLIC`, `DATE_VALIDATION`, `DEPOT_ANNULE` FROM `offre_caution` WHERE `ID` = :p0';
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
            $obj = new CommonOffreCaution();
            $obj->hydrate($row);
            CommonOffreCautionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonOffreCaution|CommonOffreCaution[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonOffreCaution[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonOffreCautionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonOffreCautionPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonOffreCautionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonOffreCautionPeer::ID, $keys, Criteria::IN);
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
     * @return CommonOffreCautionQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonOffreCautionPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonOffreCautionPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOffreCautionPeer::ID, $id, $comparison);
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
     * @return CommonOffreCautionQuery The current query, for fluid interface
     */
    public function filterByIdDemande($idDemande = null, $comparison = null)
    {
        if (is_array($idDemande)) {
            $useMinMax = false;
            if (isset($idDemande['min'])) {
                $this->addUsingAlias(CommonOffreCautionPeer::ID_DEMANDE, $idDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDemande['max'])) {
                $this->addUsingAlias(CommonOffreCautionPeer::ID_DEMANDE, $idDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOffreCautionPeer::ID_DEMANDE, $idDemande, $comparison);
    }

    /**
     * Filter the query on the REF_CONSULTATION column
     *
     * Example usage:
     * <code>
     * $query->filterByRefConsultation(1234); // WHERE REF_CONSULTATION = 1234
     * $query->filterByRefConsultation(array(12, 34)); // WHERE REF_CONSULTATION IN (12, 34)
     * $query->filterByRefConsultation(array('min' => 12)); // WHERE REF_CONSULTATION >= 12
     * $query->filterByRefConsultation(array('max' => 12)); // WHERE REF_CONSULTATION <= 12
     * </code>
     *
     * @param     mixed $refConsultation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffreCautionQuery The current query, for fluid interface
     */
    public function filterByRefConsultation($refConsultation = null, $comparison = null)
    {
        if (is_array($refConsultation)) {
            $useMinMax = false;
            if (isset($refConsultation['min'])) {
                $this->addUsingAlias(CommonOffreCautionPeer::REF_CONSULTATION, $refConsultation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refConsultation['max'])) {
                $this->addUsingAlias(CommonOffreCautionPeer::REF_CONSULTATION, $refConsultation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOffreCautionPeer::REF_CONSULTATION, $refConsultation, $comparison);
    }

    /**
     * Filter the query on the ID_OFFRE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdOffre(1234); // WHERE ID_OFFRE = 1234
     * $query->filterByIdOffre(array(12, 34)); // WHERE ID_OFFRE IN (12, 34)
     * $query->filterByIdOffre(array('min' => 12)); // WHERE ID_OFFRE >= 12
     * $query->filterByIdOffre(array('max' => 12)); // WHERE ID_OFFRE <= 12
     * </code>
     *
     * @param     mixed $idOffre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffreCautionQuery The current query, for fluid interface
     */
    public function filterByIdOffre($idOffre = null, $comparison = null)
    {
        if (is_array($idOffre)) {
            $useMinMax = false;
            if (isset($idOffre['min'])) {
                $this->addUsingAlias(CommonOffreCautionPeer::ID_OFFRE, $idOffre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idOffre['max'])) {
                $this->addUsingAlias(CommonOffreCautionPeer::ID_OFFRE, $idOffre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOffreCautionPeer::ID_OFFRE, $idOffre, $comparison);
    }

    /**
     * Filter the query on the TYPE_ENV column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeEnv(1234); // WHERE TYPE_ENV = 1234
     * $query->filterByTypeEnv(array(12, 34)); // WHERE TYPE_ENV IN (12, 34)
     * $query->filterByTypeEnv(array('min' => 12)); // WHERE TYPE_ENV >= 12
     * $query->filterByTypeEnv(array('max' => 12)); // WHERE TYPE_ENV <= 12
     * </code>
     *
     * @param     mixed $typeEnv The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffreCautionQuery The current query, for fluid interface
     */
    public function filterByTypeEnv($typeEnv = null, $comparison = null)
    {
        if (is_array($typeEnv)) {
            $useMinMax = false;
            if (isset($typeEnv['min'])) {
                $this->addUsingAlias(CommonOffreCautionPeer::TYPE_ENV, $typeEnv['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeEnv['max'])) {
                $this->addUsingAlias(CommonOffreCautionPeer::TYPE_ENV, $typeEnv['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOffreCautionPeer::TYPE_ENV, $typeEnv, $comparison);
    }

    /**
     * Filter the query on the ID_ENTREPRISE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntreprise(1234); // WHERE ID_ENTREPRISE = 1234
     * $query->filterByIdEntreprise(array(12, 34)); // WHERE ID_ENTREPRISE IN (12, 34)
     * $query->filterByIdEntreprise(array('min' => 12)); // WHERE ID_ENTREPRISE >= 12
     * $query->filterByIdEntreprise(array('max' => 12)); // WHERE ID_ENTREPRISE <= 12
     * </code>
     *
     * @param     mixed $idEntreprise The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffreCautionQuery The current query, for fluid interface
     */
    public function filterByIdEntreprise($idEntreprise = null, $comparison = null)
    {
        if (is_array($idEntreprise)) {
            $useMinMax = false;
            if (isset($idEntreprise['min'])) {
                $this->addUsingAlias(CommonOffreCautionPeer::ID_ENTREPRISE, $idEntreprise['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntreprise['max'])) {
                $this->addUsingAlias(CommonOffreCautionPeer::ID_ENTREPRISE, $idEntreprise['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOffreCautionPeer::ID_ENTREPRISE, $idEntreprise, $comparison);
    }

    /**
     * Filter the query on the ID_INSCRIT column
     *
     * Example usage:
     * <code>
     * $query->filterByIdInscrit(1234); // WHERE ID_INSCRIT = 1234
     * $query->filterByIdInscrit(array(12, 34)); // WHERE ID_INSCRIT IN (12, 34)
     * $query->filterByIdInscrit(array('min' => 12)); // WHERE ID_INSCRIT >= 12
     * $query->filterByIdInscrit(array('max' => 12)); // WHERE ID_INSCRIT <= 12
     * </code>
     *
     * @param     mixed $idInscrit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffreCautionQuery The current query, for fluid interface
     */
    public function filterByIdInscrit($idInscrit = null, $comparison = null)
    {
        if (is_array($idInscrit)) {
            $useMinMax = false;
            if (isset($idInscrit['min'])) {
                $this->addUsingAlias(CommonOffreCautionPeer::ID_INSCRIT, $idInscrit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idInscrit['max'])) {
                $this->addUsingAlias(CommonOffreCautionPeer::ID_INSCRIT, $idInscrit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOffreCautionPeer::ID_INSCRIT, $idInscrit, $comparison);
    }

    /**
     * Filter the query on the ACRONYME column
     *
     * Example usage:
     * <code>
     * $query->filterByAcronyme('fooValue');   // WHERE ACRONYME = 'fooValue'
     * $query->filterByAcronyme('%fooValue%'); // WHERE ACRONYME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $acronyme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffreCautionQuery The current query, for fluid interface
     */
    public function filterByAcronyme($acronyme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($acronyme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $acronyme)) {
                $acronyme = str_replace('*', '%', $acronyme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffreCautionPeer::ACRONYME, $acronyme, $comparison);
    }

    /**
     * Filter the query on the INTITULE column
     *
     * Example usage:
     * <code>
     * $query->filterByIntitule('fooValue');   // WHERE INTITULE = 'fooValue'
     * $query->filterByIntitule('%fooValue%'); // WHERE INTITULE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intitule The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffreCautionQuery The current query, for fluid interface
     */
    public function filterByIntitule($intitule = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intitule)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $intitule)) {
                $intitule = str_replace('*', '%', $intitule);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffreCautionPeer::INTITULE, $intitule, $comparison);
    }

    /**
     * Filter the query on the LOT column
     *
     * Example usage:
     * <code>
     * $query->filterByLot(1234); // WHERE LOT = 1234
     * $query->filterByLot(array(12, 34)); // WHERE LOT IN (12, 34)
     * $query->filterByLot(array('min' => 12)); // WHERE LOT >= 12
     * $query->filterByLot(array('max' => 12)); // WHERE LOT <= 12
     * </code>
     *
     * @param     mixed $lot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffreCautionQuery The current query, for fluid interface
     */
    public function filterByLot($lot = null, $comparison = null)
    {
        if (is_array($lot)) {
            $useMinMax = false;
            if (isset($lot['min'])) {
                $this->addUsingAlias(CommonOffreCautionPeer::LOT, $lot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lot['max'])) {
                $this->addUsingAlias(CommonOffreCautionPeer::LOT, $lot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOffreCautionPeer::LOT, $lot, $comparison);
    }

    /**
     * Filter the query on the OBJET_LOT column
     *
     * Example usage:
     * <code>
     * $query->filterByObjetLot('fooValue');   // WHERE OBJET_LOT = 'fooValue'
     * $query->filterByObjetLot('%fooValue%'); // WHERE OBJET_LOT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $objetLot The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffreCautionQuery The current query, for fluid interface
     */
    public function filterByObjetLot($objetLot = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($objetLot)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $objetLot)) {
                $objetLot = str_replace('*', '%', $objetLot);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffreCautionPeer::OBJET_LOT, $objetLot, $comparison);
    }

    /**
     * Filter the query on the RAISON_SOCIALE column
     *
     * Example usage:
     * <code>
     * $query->filterByRaisonSociale('fooValue');   // WHERE RAISON_SOCIALE = 'fooValue'
     * $query->filterByRaisonSociale('%fooValue%'); // WHERE RAISON_SOCIALE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $raisonSociale The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffreCautionQuery The current query, for fluid interface
     */
    public function filterByRaisonSociale($raisonSociale = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($raisonSociale)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $raisonSociale)) {
                $raisonSociale = str_replace('*', '%', $raisonSociale);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffreCautionPeer::RAISON_SOCIALE, $raisonSociale, $comparison);
    }

    /**
     * Filter the query on the MONTANT column
     *
     * Example usage:
     * <code>
     * $query->filterByMontant(1234); // WHERE MONTANT = 1234
     * $query->filterByMontant(array(12, 34)); // WHERE MONTANT IN (12, 34)
     * $query->filterByMontant(array('min' => 12)); // WHERE MONTANT >= 12
     * $query->filterByMontant(array('max' => 12)); // WHERE MONTANT <= 12
     * </code>
     *
     * @param     mixed $montant The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffreCautionQuery The current query, for fluid interface
     */
    public function filterByMontant($montant = null, $comparison = null)
    {
        if (is_array($montant)) {
            $useMinMax = false;
            if (isset($montant['min'])) {
                $this->addUsingAlias(CommonOffreCautionPeer::MONTANT, $montant['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montant['max'])) {
                $this->addUsingAlias(CommonOffreCautionPeer::MONTANT, $montant['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOffreCautionPeer::MONTANT, $montant, $comparison);
    }

    /**
     * Filter the query on the DATE_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByDateDemande('2011-03-14'); // WHERE DATE_DEMANDE = '2011-03-14'
     * $query->filterByDateDemande('now'); // WHERE DATE_DEMANDE = '2011-03-14'
     * $query->filterByDateDemande(array('max' => 'yesterday')); // WHERE DATE_DEMANDE > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateDemande The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffreCautionQuery The current query, for fluid interface
     */
    public function filterByDateDemande($dateDemande = null, $comparison = null)
    {
        if (is_array($dateDemande)) {
            $useMinMax = false;
            if (isset($dateDemande['min'])) {
                $this->addUsingAlias(CommonOffreCautionPeer::DATE_DEMANDE, $dateDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateDemande['max'])) {
                $this->addUsingAlias(CommonOffreCautionPeer::DATE_DEMANDE, $dateDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOffreCautionPeer::DATE_DEMANDE, $dateDemande, $comparison);
    }

    /**
     * Filter the query on the ID_STATUT_CAUTION column
     *
     * Example usage:
     * <code>
     * $query->filterByIdStatutCaution(1234); // WHERE ID_STATUT_CAUTION = 1234
     * $query->filterByIdStatutCaution(array(12, 34)); // WHERE ID_STATUT_CAUTION IN (12, 34)
     * $query->filterByIdStatutCaution(array('min' => 12)); // WHERE ID_STATUT_CAUTION >= 12
     * $query->filterByIdStatutCaution(array('max' => 12)); // WHERE ID_STATUT_CAUTION <= 12
     * </code>
     *
     * @param     mixed $idStatutCaution The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffreCautionQuery The current query, for fluid interface
     */
    public function filterByIdStatutCaution($idStatutCaution = null, $comparison = null)
    {
        if (is_array($idStatutCaution)) {
            $useMinMax = false;
            if (isset($idStatutCaution['min'])) {
                $this->addUsingAlias(CommonOffreCautionPeer::ID_STATUT_CAUTION, $idStatutCaution['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idStatutCaution['max'])) {
                $this->addUsingAlias(CommonOffreCautionPeer::ID_STATUT_CAUTION, $idStatutCaution['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOffreCautionPeer::ID_STATUT_CAUTION, $idStatutCaution, $comparison);
    }

    /**
     * Filter the query on the ID_COMPTE_BANCAIRE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCompteBancaire(1234); // WHERE ID_COMPTE_BANCAIRE = 1234
     * $query->filterByIdCompteBancaire(array(12, 34)); // WHERE ID_COMPTE_BANCAIRE IN (12, 34)
     * $query->filterByIdCompteBancaire(array('min' => 12)); // WHERE ID_COMPTE_BANCAIRE >= 12
     * $query->filterByIdCompteBancaire(array('max' => 12)); // WHERE ID_COMPTE_BANCAIRE <= 12
     * </code>
     *
     * @param     mixed $idCompteBancaire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffreCautionQuery The current query, for fluid interface
     */
    public function filterByIdCompteBancaire($idCompteBancaire = null, $comparison = null)
    {
        if (is_array($idCompteBancaire)) {
            $useMinMax = false;
            if (isset($idCompteBancaire['min'])) {
                $this->addUsingAlias(CommonOffreCautionPeer::ID_COMPTE_BANCAIRE, $idCompteBancaire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCompteBancaire['max'])) {
                $this->addUsingAlias(CommonOffreCautionPeer::ID_COMPTE_BANCAIRE, $idCompteBancaire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOffreCautionPeer::ID_COMPTE_BANCAIRE, $idCompteBancaire, $comparison);
    }

    /**
     * Filter the query on the ID_BLOB_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdBlobDemande(1234); // WHERE ID_BLOB_DEMANDE = 1234
     * $query->filterByIdBlobDemande(array(12, 34)); // WHERE ID_BLOB_DEMANDE IN (12, 34)
     * $query->filterByIdBlobDemande(array('min' => 12)); // WHERE ID_BLOB_DEMANDE >= 12
     * $query->filterByIdBlobDemande(array('max' => 12)); // WHERE ID_BLOB_DEMANDE <= 12
     * </code>
     *
     * @param     mixed $idBlobDemande The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffreCautionQuery The current query, for fluid interface
     */
    public function filterByIdBlobDemande($idBlobDemande = null, $comparison = null)
    {
        if (is_array($idBlobDemande)) {
            $useMinMax = false;
            if (isset($idBlobDemande['min'])) {
                $this->addUsingAlias(CommonOffreCautionPeer::ID_BLOB_DEMANDE, $idBlobDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBlobDemande['max'])) {
                $this->addUsingAlias(CommonOffreCautionPeer::ID_BLOB_DEMANDE, $idBlobDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOffreCautionPeer::ID_BLOB_DEMANDE, $idBlobDemande, $comparison);
    }

    /**
     * Filter the query on the NOM_DOC_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByNomDocDemande('fooValue');   // WHERE NOM_DOC_DEMANDE = 'fooValue'
     * $query->filterByNomDocDemande('%fooValue%'); // WHERE NOM_DOC_DEMANDE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomDocDemande The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffreCautionQuery The current query, for fluid interface
     */
    public function filterByNomDocDemande($nomDocDemande = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomDocDemande)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomDocDemande)) {
                $nomDocDemande = str_replace('*', '%', $nomDocDemande);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffreCautionPeer::NOM_DOC_DEMANDE, $nomDocDemande, $comparison);
    }

    /**
     * Filter the query on the ID_BLOB_CAUTION column
     *
     * Example usage:
     * <code>
     * $query->filterByIdBlobCaution(1234); // WHERE ID_BLOB_CAUTION = 1234
     * $query->filterByIdBlobCaution(array(12, 34)); // WHERE ID_BLOB_CAUTION IN (12, 34)
     * $query->filterByIdBlobCaution(array('min' => 12)); // WHERE ID_BLOB_CAUTION >= 12
     * $query->filterByIdBlobCaution(array('max' => 12)); // WHERE ID_BLOB_CAUTION <= 12
     * </code>
     *
     * @param     mixed $idBlobCaution The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffreCautionQuery The current query, for fluid interface
     */
    public function filterByIdBlobCaution($idBlobCaution = null, $comparison = null)
    {
        if (is_array($idBlobCaution)) {
            $useMinMax = false;
            if (isset($idBlobCaution['min'])) {
                $this->addUsingAlias(CommonOffreCautionPeer::ID_BLOB_CAUTION, $idBlobCaution['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBlobCaution['max'])) {
                $this->addUsingAlias(CommonOffreCautionPeer::ID_BLOB_CAUTION, $idBlobCaution['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOffreCautionPeer::ID_BLOB_CAUTION, $idBlobCaution, $comparison);
    }

    /**
     * Filter the query on the NOM_DOC_CAUTION column
     *
     * Example usage:
     * <code>
     * $query->filterByNomDocCaution('fooValue');   // WHERE NOM_DOC_CAUTION = 'fooValue'
     * $query->filterByNomDocCaution('%fooValue%'); // WHERE NOM_DOC_CAUTION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomDocCaution The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffreCautionQuery The current query, for fluid interface
     */
    public function filterByNomDocCaution($nomDocCaution = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomDocCaution)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomDocCaution)) {
                $nomDocCaution = str_replace('*', '%', $nomDocCaution);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffreCautionPeer::NOM_DOC_CAUTION, $nomDocCaution, $comparison);
    }

    /**
     * Filter the query on the ID_INSCRIT_CREA column
     *
     * Example usage:
     * <code>
     * $query->filterByIdInscritCrea(1234); // WHERE ID_INSCRIT_CREA = 1234
     * $query->filterByIdInscritCrea(array(12, 34)); // WHERE ID_INSCRIT_CREA IN (12, 34)
     * $query->filterByIdInscritCrea(array('min' => 12)); // WHERE ID_INSCRIT_CREA >= 12
     * $query->filterByIdInscritCrea(array('max' => 12)); // WHERE ID_INSCRIT_CREA <= 12
     * </code>
     *
     * @param     mixed $idInscritCrea The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffreCautionQuery The current query, for fluid interface
     */
    public function filterByIdInscritCrea($idInscritCrea = null, $comparison = null)
    {
        if (is_array($idInscritCrea)) {
            $useMinMax = false;
            if (isset($idInscritCrea['min'])) {
                $this->addUsingAlias(CommonOffreCautionPeer::ID_INSCRIT_CREA, $idInscritCrea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idInscritCrea['max'])) {
                $this->addUsingAlias(CommonOffreCautionPeer::ID_INSCRIT_CREA, $idInscritCrea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOffreCautionPeer::ID_INSCRIT_CREA, $idInscritCrea, $comparison);
    }

    /**
     * Filter the query on the DATE_CREA column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCrea('2011-03-14'); // WHERE DATE_CREA = '2011-03-14'
     * $query->filterByDateCrea('now'); // WHERE DATE_CREA = '2011-03-14'
     * $query->filterByDateCrea(array('max' => 'yesterday')); // WHERE DATE_CREA > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateCrea The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffreCautionQuery The current query, for fluid interface
     */
    public function filterByDateCrea($dateCrea = null, $comparison = null)
    {
        if (is_array($dateCrea)) {
            $useMinMax = false;
            if (isset($dateCrea['min'])) {
                $this->addUsingAlias(CommonOffreCautionPeer::DATE_CREA, $dateCrea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCrea['max'])) {
                $this->addUsingAlias(CommonOffreCautionPeer::DATE_CREA, $dateCrea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOffreCautionPeer::DATE_CREA, $dateCrea, $comparison);
    }

    /**
     * Filter the query on the IDENTIFIANT_BANCAIRE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdentifiantBancaire('fooValue');   // WHERE IDENTIFIANT_BANCAIRE = 'fooValue'
     * $query->filterByIdentifiantBancaire('%fooValue%'); // WHERE IDENTIFIANT_BANCAIRE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $identifiantBancaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffreCautionQuery The current query, for fluid interface
     */
    public function filterByIdentifiantBancaire($identifiantBancaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($identifiantBancaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $identifiantBancaire)) {
                $identifiantBancaire = str_replace('*', '%', $identifiantBancaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffreCautionPeer::IDENTIFIANT_BANCAIRE, $identifiantBancaire, $comparison);
    }

    /**
     * Filter the query on the ACHETEUR_PUBLIC column
     *
     * Example usage:
     * <code>
     * $query->filterByAcheteurPublic('fooValue');   // WHERE ACHETEUR_PUBLIC = 'fooValue'
     * $query->filterByAcheteurPublic('%fooValue%'); // WHERE ACHETEUR_PUBLIC LIKE '%fooValue%'
     * </code>
     *
     * @param     string $acheteurPublic The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffreCautionQuery The current query, for fluid interface
     */
    public function filterByAcheteurPublic($acheteurPublic = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($acheteurPublic)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $acheteurPublic)) {
                $acheteurPublic = str_replace('*', '%', $acheteurPublic);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffreCautionPeer::ACHETEUR_PUBLIC, $acheteurPublic, $comparison);
    }

    /**
     * Filter the query on the DATE_VALIDATION column
     *
     * Example usage:
     * <code>
     * $query->filterByDateValidation('2011-03-14'); // WHERE DATE_VALIDATION = '2011-03-14'
     * $query->filterByDateValidation('now'); // WHERE DATE_VALIDATION = '2011-03-14'
     * $query->filterByDateValidation(array('max' => 'yesterday')); // WHERE DATE_VALIDATION > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateValidation The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffreCautionQuery The current query, for fluid interface
     */
    public function filterByDateValidation($dateValidation = null, $comparison = null)
    {
        if (is_array($dateValidation)) {
            $useMinMax = false;
            if (isset($dateValidation['min'])) {
                $this->addUsingAlias(CommonOffreCautionPeer::DATE_VALIDATION, $dateValidation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateValidation['max'])) {
                $this->addUsingAlias(CommonOffreCautionPeer::DATE_VALIDATION, $dateValidation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOffreCautionPeer::DATE_VALIDATION, $dateValidation, $comparison);
    }

    /**
     * Filter the query on the DEPOT_ANNULE column
     *
     * Example usage:
     * <code>
     * $query->filterByDepotAnnule('fooValue');   // WHERE DEPOT_ANNULE = 'fooValue'
     * $query->filterByDepotAnnule('%fooValue%'); // WHERE DEPOT_ANNULE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $depotAnnule The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffreCautionQuery The current query, for fluid interface
     */
    public function filterByDepotAnnule($depotAnnule = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($depotAnnule)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $depotAnnule)) {
                $depotAnnule = str_replace('*', '%', $depotAnnule);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffreCautionPeer::DEPOT_ANNULE, $depotAnnule, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonOffreCaution $commonOffreCaution Object to remove from the list of results
     *
     * @return CommonOffreCautionQuery The current query, for fluid interface
     */
    public function prune($commonOffreCaution = null)
    {
        if ($commonOffreCaution) {
            $this->addUsingAlias(CommonOffreCautionPeer::ID, $commonOffreCaution->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
