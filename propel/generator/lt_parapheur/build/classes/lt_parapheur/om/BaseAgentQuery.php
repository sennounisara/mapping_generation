<?php


/**
 * Base class that represents a query for the 'agent' table.
 *
 * 
 *
 * @method AgentQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method AgentQuery orderByIdEntite($order = Criteria::ASC) Order by the ID_ENTITE column
 * @method AgentQuery orderByIdCommune($order = Criteria::ASC) Order by the ID_COMMUNE column
 * @method AgentQuery orderByIdProfilAgent($order = Criteria::ASC) Order by the ID_PROFIL_AGENT column
 * @method AgentQuery orderByLoginAgent($order = Criteria::ASC) Order by the LOGIN_AGENT column
 * @method AgentQuery orderByMotDePasseAgent($order = Criteria::ASC) Order by the MOT_DE_PASSE_AGENT column
 * @method AgentQuery orderBySaltAgent($order = Criteria::ASC) Order by the SALT_AGENT column
 * @method AgentQuery orderByNomAgentFr($order = Criteria::ASC) Order by the NOM_AGENT_FR column
 * @method AgentQuery orderByPrenomAgentFr($order = Criteria::ASC) Order by the PRENOM_AGENT_FR column
 * @method AgentQuery orderByNomAgentAr($order = Criteria::ASC) Order by the NOM_AGENT_AR column
 * @method AgentQuery orderByPrenomAgentAr($order = Criteria::ASC) Order by the PRENOM_AGENT_AR column
 * @method AgentQuery orderByEmailAgent($order = Criteria::ASC) Order by the EMAIL_AGENT column
 * @method AgentQuery orderByTelAgent($order = Criteria::ASC) Order by the TEL_AGENT column
 * @method AgentQuery orderByFaxAgent($order = Criteria::ASC) Order by the FAX_AGENT column
 * @method AgentQuery orderByEtatAgent($order = Criteria::ASC) Order by the ETAT_AGENT column
 * @method AgentQuery orderBySuperAgent($order = Criteria::ASC) Order by the SUPER_AGENT column
 * @method AgentQuery orderByEtatAlerte($order = Criteria::ASC) Order by the ETAT_ALERTE column
 * @method AgentQuery orderByTypeAlerte($order = Criteria::ASC) Order by the TYPE_ALERTE column
 * @method AgentQuery orderBySignataire($order = Criteria::ASC) Order by the SIGNATAIRE column
 * @method AgentQuery orderByDateDernierAcces($order = Criteria::ASC) Order by the DATE_DERNIER_ACCES column
 * @method AgentQuery orderByIdSocle($order = Criteria::ASC) Order by the ID_SOCLE column
 * @method AgentQuery orderByCentreAppel($order = Criteria::ASC) Order by the CENTRE_APPEL column
 * @method AgentQuery orderByIdentifiantAgentCa($order = Criteria::ASC) Order by the IDENTIFIANT_AGENT_CA column
 * @method AgentQuery orderByTypeAffectation($order = Criteria::ASC) Order by the TYPE_AFFECTATION column
 * @method AgentQuery orderByIdPjSignature($order = Criteria::ASC) Order by the ID_PJ_SIGNATURE column
 * @method AgentQuery orderByIdPjSignatureParaphe($order = Criteria::ASC) Order by the ID_PJ_SIGNATURE_PARAPHE column
 * @method AgentQuery orderByCertificat($order = Criteria::ASC) Order by the CERTIFICAT column
 * @method AgentQuery orderByIdentifiantCertificat($order = Criteria::ASC) Order by the IDENTIFIANT_CERTIFICAT column
 * @method AgentQuery orderByJetonValidation($order = Criteria::ASC) Order by the JETON_VALIDATION column
 * @method AgentQuery orderByFiligrane($order = Criteria::ASC) Order by the FILIGRANE column
 * @method AgentQuery orderByIdVersion($order = Criteria::ASC) Order by the ID_VERSION column
 * @method AgentQuery orderByVersionLu($order = Criteria::ASC) Order by the VERSION_LU column
 * @method AgentQuery orderByTentativeMdp($order = Criteria::ASC) Order by the TENTATIVE_MDP column
 * @method AgentQuery orderByDateBlocage($order = Criteria::ASC) Order by the DATE_BLOCAGE column
 *
 * @method AgentQuery groupById() Group by the ID column
 * @method AgentQuery groupByIdEntite() Group by the ID_ENTITE column
 * @method AgentQuery groupByIdCommune() Group by the ID_COMMUNE column
 * @method AgentQuery groupByIdProfilAgent() Group by the ID_PROFIL_AGENT column
 * @method AgentQuery groupByLoginAgent() Group by the LOGIN_AGENT column
 * @method AgentQuery groupByMotDePasseAgent() Group by the MOT_DE_PASSE_AGENT column
 * @method AgentQuery groupBySaltAgent() Group by the SALT_AGENT column
 * @method AgentQuery groupByNomAgentFr() Group by the NOM_AGENT_FR column
 * @method AgentQuery groupByPrenomAgentFr() Group by the PRENOM_AGENT_FR column
 * @method AgentQuery groupByNomAgentAr() Group by the NOM_AGENT_AR column
 * @method AgentQuery groupByPrenomAgentAr() Group by the PRENOM_AGENT_AR column
 * @method AgentQuery groupByEmailAgent() Group by the EMAIL_AGENT column
 * @method AgentQuery groupByTelAgent() Group by the TEL_AGENT column
 * @method AgentQuery groupByFaxAgent() Group by the FAX_AGENT column
 * @method AgentQuery groupByEtatAgent() Group by the ETAT_AGENT column
 * @method AgentQuery groupBySuperAgent() Group by the SUPER_AGENT column
 * @method AgentQuery groupByEtatAlerte() Group by the ETAT_ALERTE column
 * @method AgentQuery groupByTypeAlerte() Group by the TYPE_ALERTE column
 * @method AgentQuery groupBySignataire() Group by the SIGNATAIRE column
 * @method AgentQuery groupByDateDernierAcces() Group by the DATE_DERNIER_ACCES column
 * @method AgentQuery groupByIdSocle() Group by the ID_SOCLE column
 * @method AgentQuery groupByCentreAppel() Group by the CENTRE_APPEL column
 * @method AgentQuery groupByIdentifiantAgentCa() Group by the IDENTIFIANT_AGENT_CA column
 * @method AgentQuery groupByTypeAffectation() Group by the TYPE_AFFECTATION column
 * @method AgentQuery groupByIdPjSignature() Group by the ID_PJ_SIGNATURE column
 * @method AgentQuery groupByIdPjSignatureParaphe() Group by the ID_PJ_SIGNATURE_PARAPHE column
 * @method AgentQuery groupByCertificat() Group by the CERTIFICAT column
 * @method AgentQuery groupByIdentifiantCertificat() Group by the IDENTIFIANT_CERTIFICAT column
 * @method AgentQuery groupByJetonValidation() Group by the JETON_VALIDATION column
 * @method AgentQuery groupByFiligrane() Group by the FILIGRANE column
 * @method AgentQuery groupByIdVersion() Group by the ID_VERSION column
 * @method AgentQuery groupByVersionLu() Group by the VERSION_LU column
 * @method AgentQuery groupByTentativeMdp() Group by the TENTATIVE_MDP column
 * @method AgentQuery groupByDateBlocage() Group by the DATE_BLOCAGE column
 *
 * @method AgentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method AgentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method AgentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method AgentQuery leftJoinTAgentTicket($relationAlias = null) Adds a LEFT JOIN clause to the query using the TAgentTicket relation
 * @method AgentQuery rightJoinTAgentTicket($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TAgentTicket relation
 * @method AgentQuery innerJoinTAgentTicket($relationAlias = null) Adds a INNER JOIN clause to the query using the TAgentTicket relation
 *
 * @method AgentQuery leftJoinTChatbot($relationAlias = null) Adds a LEFT JOIN clause to the query using the TChatbot relation
 * @method AgentQuery rightJoinTChatbot($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TChatbot relation
 * @method AgentQuery innerJoinTChatbot($relationAlias = null) Adds a INNER JOIN clause to the query using the TChatbot relation
 *
 * @method AgentQuery leftJoinTHistoriqueConsultation($relationAlias = null) Adds a LEFT JOIN clause to the query using the THistoriqueConsultation relation
 * @method AgentQuery rightJoinTHistoriqueConsultation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the THistoriqueConsultation relation
 * @method AgentQuery innerJoinTHistoriqueConsultation($relationAlias = null) Adds a INNER JOIN clause to the query using the THistoriqueConsultation relation
 *
 * @method Agent findOne(PropelPDO $con = null) Return the first Agent matching the query
 * @method Agent findOneOrCreate(PropelPDO $con = null) Return the first Agent matching the query, or a new Agent object populated from the query conditions when no match is found
 *
 * @method Agent findOneByIdEntite(int $ID_ENTITE) Return the first Agent filtered by the ID_ENTITE column
 * @method Agent findOneByIdCommune(int $ID_COMMUNE) Return the first Agent filtered by the ID_COMMUNE column
 * @method Agent findOneByIdProfilAgent(int $ID_PROFIL_AGENT) Return the first Agent filtered by the ID_PROFIL_AGENT column
 * @method Agent findOneByLoginAgent(string $LOGIN_AGENT) Return the first Agent filtered by the LOGIN_AGENT column
 * @method Agent findOneByMotDePasseAgent(string $MOT_DE_PASSE_AGENT) Return the first Agent filtered by the MOT_DE_PASSE_AGENT column
 * @method Agent findOneBySaltAgent(string $SALT_AGENT) Return the first Agent filtered by the SALT_AGENT column
 * @method Agent findOneByNomAgentFr(string $NOM_AGENT_FR) Return the first Agent filtered by the NOM_AGENT_FR column
 * @method Agent findOneByPrenomAgentFr(string $PRENOM_AGENT_FR) Return the first Agent filtered by the PRENOM_AGENT_FR column
 * @method Agent findOneByNomAgentAr(string $NOM_AGENT_AR) Return the first Agent filtered by the NOM_AGENT_AR column
 * @method Agent findOneByPrenomAgentAr(string $PRENOM_AGENT_AR) Return the first Agent filtered by the PRENOM_AGENT_AR column
 * @method Agent findOneByEmailAgent(string $EMAIL_AGENT) Return the first Agent filtered by the EMAIL_AGENT column
 * @method Agent findOneByTelAgent(string $TEL_AGENT) Return the first Agent filtered by the TEL_AGENT column
 * @method Agent findOneByFaxAgent(string $FAX_AGENT) Return the first Agent filtered by the FAX_AGENT column
 * @method Agent findOneByEtatAgent(string $ETAT_AGENT) Return the first Agent filtered by the ETAT_AGENT column
 * @method Agent findOneBySuperAgent(string $SUPER_AGENT) Return the first Agent filtered by the SUPER_AGENT column
 * @method Agent findOneByEtatAlerte(string $ETAT_ALERTE) Return the first Agent filtered by the ETAT_ALERTE column
 * @method Agent findOneByTypeAlerte(string $TYPE_ALERTE) Return the first Agent filtered by the TYPE_ALERTE column
 * @method Agent findOneBySignataire(string $SIGNATAIRE) Return the first Agent filtered by the SIGNATAIRE column
 * @method Agent findOneByDateDernierAcces(string $DATE_DERNIER_ACCES) Return the first Agent filtered by the DATE_DERNIER_ACCES column
 * @method Agent findOneByIdSocle(int $ID_SOCLE) Return the first Agent filtered by the ID_SOCLE column
 * @method Agent findOneByCentreAppel(string $CENTRE_APPEL) Return the first Agent filtered by the CENTRE_APPEL column
 * @method Agent findOneByIdentifiantAgentCa(string $IDENTIFIANT_AGENT_CA) Return the first Agent filtered by the IDENTIFIANT_AGENT_CA column
 * @method Agent findOneByTypeAffectation(string $TYPE_AFFECTATION) Return the first Agent filtered by the TYPE_AFFECTATION column
 * @method Agent findOneByIdPjSignature(int $ID_PJ_SIGNATURE) Return the first Agent filtered by the ID_PJ_SIGNATURE column
 * @method Agent findOneByIdPjSignatureParaphe(int $ID_PJ_SIGNATURE_PARAPHE) Return the first Agent filtered by the ID_PJ_SIGNATURE_PARAPHE column
 * @method Agent findOneByCertificat(string $CERTIFICAT) Return the first Agent filtered by the CERTIFICAT column
 * @method Agent findOneByIdentifiantCertificat(string $IDENTIFIANT_CERTIFICAT) Return the first Agent filtered by the IDENTIFIANT_CERTIFICAT column
 * @method Agent findOneByJetonValidation(string $JETON_VALIDATION) Return the first Agent filtered by the JETON_VALIDATION column
 * @method Agent findOneByFiligrane(string $FILIGRANE) Return the first Agent filtered by the FILIGRANE column
 * @method Agent findOneByIdVersion(int $ID_VERSION) Return the first Agent filtered by the ID_VERSION column
 * @method Agent findOneByVersionLu(string $VERSION_LU) Return the first Agent filtered by the VERSION_LU column
 * @method Agent findOneByTentativeMdp(int $TENTATIVE_MDP) Return the first Agent filtered by the TENTATIVE_MDP column
 * @method Agent findOneByDateBlocage(string $DATE_BLOCAGE) Return the first Agent filtered by the DATE_BLOCAGE column
 *
 * @method array findById(int $ID) Return Agent objects filtered by the ID column
 * @method array findByIdEntite(int $ID_ENTITE) Return Agent objects filtered by the ID_ENTITE column
 * @method array findByIdCommune(int $ID_COMMUNE) Return Agent objects filtered by the ID_COMMUNE column
 * @method array findByIdProfilAgent(int $ID_PROFIL_AGENT) Return Agent objects filtered by the ID_PROFIL_AGENT column
 * @method array findByLoginAgent(string $LOGIN_AGENT) Return Agent objects filtered by the LOGIN_AGENT column
 * @method array findByMotDePasseAgent(string $MOT_DE_PASSE_AGENT) Return Agent objects filtered by the MOT_DE_PASSE_AGENT column
 * @method array findBySaltAgent(string $SALT_AGENT) Return Agent objects filtered by the SALT_AGENT column
 * @method array findByNomAgentFr(string $NOM_AGENT_FR) Return Agent objects filtered by the NOM_AGENT_FR column
 * @method array findByPrenomAgentFr(string $PRENOM_AGENT_FR) Return Agent objects filtered by the PRENOM_AGENT_FR column
 * @method array findByNomAgentAr(string $NOM_AGENT_AR) Return Agent objects filtered by the NOM_AGENT_AR column
 * @method array findByPrenomAgentAr(string $PRENOM_AGENT_AR) Return Agent objects filtered by the PRENOM_AGENT_AR column
 * @method array findByEmailAgent(string $EMAIL_AGENT) Return Agent objects filtered by the EMAIL_AGENT column
 * @method array findByTelAgent(string $TEL_AGENT) Return Agent objects filtered by the TEL_AGENT column
 * @method array findByFaxAgent(string $FAX_AGENT) Return Agent objects filtered by the FAX_AGENT column
 * @method array findByEtatAgent(string $ETAT_AGENT) Return Agent objects filtered by the ETAT_AGENT column
 * @method array findBySuperAgent(string $SUPER_AGENT) Return Agent objects filtered by the SUPER_AGENT column
 * @method array findByEtatAlerte(string $ETAT_ALERTE) Return Agent objects filtered by the ETAT_ALERTE column
 * @method array findByTypeAlerte(string $TYPE_ALERTE) Return Agent objects filtered by the TYPE_ALERTE column
 * @method array findBySignataire(string $SIGNATAIRE) Return Agent objects filtered by the SIGNATAIRE column
 * @method array findByDateDernierAcces(string $DATE_DERNIER_ACCES) Return Agent objects filtered by the DATE_DERNIER_ACCES column
 * @method array findByIdSocle(int $ID_SOCLE) Return Agent objects filtered by the ID_SOCLE column
 * @method array findByCentreAppel(string $CENTRE_APPEL) Return Agent objects filtered by the CENTRE_APPEL column
 * @method array findByIdentifiantAgentCa(string $IDENTIFIANT_AGENT_CA) Return Agent objects filtered by the IDENTIFIANT_AGENT_CA column
 * @method array findByTypeAffectation(string $TYPE_AFFECTATION) Return Agent objects filtered by the TYPE_AFFECTATION column
 * @method array findByIdPjSignature(int $ID_PJ_SIGNATURE) Return Agent objects filtered by the ID_PJ_SIGNATURE column
 * @method array findByIdPjSignatureParaphe(int $ID_PJ_SIGNATURE_PARAPHE) Return Agent objects filtered by the ID_PJ_SIGNATURE_PARAPHE column
 * @method array findByCertificat(string $CERTIFICAT) Return Agent objects filtered by the CERTIFICAT column
 * @method array findByIdentifiantCertificat(string $IDENTIFIANT_CERTIFICAT) Return Agent objects filtered by the IDENTIFIANT_CERTIFICAT column
 * @method array findByJetonValidation(string $JETON_VALIDATION) Return Agent objects filtered by the JETON_VALIDATION column
 * @method array findByFiligrane(string $FILIGRANE) Return Agent objects filtered by the FILIGRANE column
 * @method array findByIdVersion(int $ID_VERSION) Return Agent objects filtered by the ID_VERSION column
 * @method array findByVersionLu(string $VERSION_LU) Return Agent objects filtered by the VERSION_LU column
 * @method array findByTentativeMdp(int $TENTATIVE_MDP) Return Agent objects filtered by the TENTATIVE_MDP column
 * @method array findByDateBlocage(string $DATE_BLOCAGE) Return Agent objects filtered by the DATE_BLOCAGE column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseAgentQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseAgentQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'Agent', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AgentQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   AgentQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return AgentQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AgentQuery) {
            return $criteria;
        }
        $query = new AgentQuery();
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
     * @return   Agent|Agent[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AgentPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(AgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Agent A model object, or null if the key is not found
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
     * @return                 Agent A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `ID_ENTITE`, `ID_COMMUNE`, `ID_PROFIL_AGENT`, `LOGIN_AGENT`, `MOT_DE_PASSE_AGENT`, `SALT_AGENT`, `NOM_AGENT_FR`, `PRENOM_AGENT_FR`, `NOM_AGENT_AR`, `PRENOM_AGENT_AR`, `EMAIL_AGENT`, `TEL_AGENT`, `FAX_AGENT`, `ETAT_AGENT`, `SUPER_AGENT`, `ETAT_ALERTE`, `TYPE_ALERTE`, `SIGNATAIRE`, `DATE_DERNIER_ACCES`, `ID_SOCLE`, `CENTRE_APPEL`, `IDENTIFIANT_AGENT_CA`, `TYPE_AFFECTATION`, `ID_PJ_SIGNATURE`, `ID_PJ_SIGNATURE_PARAPHE`, `CERTIFICAT`, `IDENTIFIANT_CERTIFICAT`, `JETON_VALIDATION`, `FILIGRANE`, `ID_VERSION`, `VERSION_LU`, `TENTATIVE_MDP`, `DATE_BLOCAGE` FROM `agent` WHERE `ID` = :p0';
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
            $obj = new Agent();
            $obj->hydrate($row);
            AgentPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Agent|Agent[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Agent[]|mixed the list of results, formatted by the current formatter
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
     * @return AgentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(AgentPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return AgentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(AgentPeer::ID, $keys, Criteria::IN);
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
     * @return AgentQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(AgentPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(AgentPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AgentPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the ID_ENTITE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntite(1234); // WHERE ID_ENTITE = 1234
     * $query->filterByIdEntite(array(12, 34)); // WHERE ID_ENTITE IN (12, 34)
     * $query->filterByIdEntite(array('min' => 12)); // WHERE ID_ENTITE >= 12
     * $query->filterByIdEntite(array('max' => 12)); // WHERE ID_ENTITE <= 12
     * </code>
     *
     * @param     mixed $idEntite The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AgentQuery The current query, for fluid interface
     */
    public function filterByIdEntite($idEntite = null, $comparison = null)
    {
        if (is_array($idEntite)) {
            $useMinMax = false;
            if (isset($idEntite['min'])) {
                $this->addUsingAlias(AgentPeer::ID_ENTITE, $idEntite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntite['max'])) {
                $this->addUsingAlias(AgentPeer::ID_ENTITE, $idEntite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AgentPeer::ID_ENTITE, $idEntite, $comparison);
    }

    /**
     * Filter the query on the ID_COMMUNE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCommune(1234); // WHERE ID_COMMUNE = 1234
     * $query->filterByIdCommune(array(12, 34)); // WHERE ID_COMMUNE IN (12, 34)
     * $query->filterByIdCommune(array('min' => 12)); // WHERE ID_COMMUNE >= 12
     * $query->filterByIdCommune(array('max' => 12)); // WHERE ID_COMMUNE <= 12
     * </code>
     *
     * @param     mixed $idCommune The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AgentQuery The current query, for fluid interface
     */
    public function filterByIdCommune($idCommune = null, $comparison = null)
    {
        if (is_array($idCommune)) {
            $useMinMax = false;
            if (isset($idCommune['min'])) {
                $this->addUsingAlias(AgentPeer::ID_COMMUNE, $idCommune['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCommune['max'])) {
                $this->addUsingAlias(AgentPeer::ID_COMMUNE, $idCommune['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AgentPeer::ID_COMMUNE, $idCommune, $comparison);
    }

    /**
     * Filter the query on the ID_PROFIL_AGENT column
     *
     * Example usage:
     * <code>
     * $query->filterByIdProfilAgent(1234); // WHERE ID_PROFIL_AGENT = 1234
     * $query->filterByIdProfilAgent(array(12, 34)); // WHERE ID_PROFIL_AGENT IN (12, 34)
     * $query->filterByIdProfilAgent(array('min' => 12)); // WHERE ID_PROFIL_AGENT >= 12
     * $query->filterByIdProfilAgent(array('max' => 12)); // WHERE ID_PROFIL_AGENT <= 12
     * </code>
     *
     * @param     mixed $idProfilAgent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AgentQuery The current query, for fluid interface
     */
    public function filterByIdProfilAgent($idProfilAgent = null, $comparison = null)
    {
        if (is_array($idProfilAgent)) {
            $useMinMax = false;
            if (isset($idProfilAgent['min'])) {
                $this->addUsingAlias(AgentPeer::ID_PROFIL_AGENT, $idProfilAgent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idProfilAgent['max'])) {
                $this->addUsingAlias(AgentPeer::ID_PROFIL_AGENT, $idProfilAgent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AgentPeer::ID_PROFIL_AGENT, $idProfilAgent, $comparison);
    }

    /**
     * Filter the query on the LOGIN_AGENT column
     *
     * Example usage:
     * <code>
     * $query->filterByLoginAgent('fooValue');   // WHERE LOGIN_AGENT = 'fooValue'
     * $query->filterByLoginAgent('%fooValue%'); // WHERE LOGIN_AGENT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $loginAgent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AgentQuery The current query, for fluid interface
     */
    public function filterByLoginAgent($loginAgent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($loginAgent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $loginAgent)) {
                $loginAgent = str_replace('*', '%', $loginAgent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AgentPeer::LOGIN_AGENT, $loginAgent, $comparison);
    }

    /**
     * Filter the query on the MOT_DE_PASSE_AGENT column
     *
     * Example usage:
     * <code>
     * $query->filterByMotDePasseAgent('fooValue');   // WHERE MOT_DE_PASSE_AGENT = 'fooValue'
     * $query->filterByMotDePasseAgent('%fooValue%'); // WHERE MOT_DE_PASSE_AGENT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $motDePasseAgent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AgentQuery The current query, for fluid interface
     */
    public function filterByMotDePasseAgent($motDePasseAgent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($motDePasseAgent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $motDePasseAgent)) {
                $motDePasseAgent = str_replace('*', '%', $motDePasseAgent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AgentPeer::MOT_DE_PASSE_AGENT, $motDePasseAgent, $comparison);
    }

    /**
     * Filter the query on the SALT_AGENT column
     *
     * Example usage:
     * <code>
     * $query->filterBySaltAgent('fooValue');   // WHERE SALT_AGENT = 'fooValue'
     * $query->filterBySaltAgent('%fooValue%'); // WHERE SALT_AGENT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $saltAgent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AgentQuery The current query, for fluid interface
     */
    public function filterBySaltAgent($saltAgent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($saltAgent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $saltAgent)) {
                $saltAgent = str_replace('*', '%', $saltAgent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AgentPeer::SALT_AGENT, $saltAgent, $comparison);
    }

    /**
     * Filter the query on the NOM_AGENT_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByNomAgentFr('fooValue');   // WHERE NOM_AGENT_FR = 'fooValue'
     * $query->filterByNomAgentFr('%fooValue%'); // WHERE NOM_AGENT_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomAgentFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AgentQuery The current query, for fluid interface
     */
    public function filterByNomAgentFr($nomAgentFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomAgentFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomAgentFr)) {
                $nomAgentFr = str_replace('*', '%', $nomAgentFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AgentPeer::NOM_AGENT_FR, $nomAgentFr, $comparison);
    }

    /**
     * Filter the query on the PRENOM_AGENT_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByPrenomAgentFr('fooValue');   // WHERE PRENOM_AGENT_FR = 'fooValue'
     * $query->filterByPrenomAgentFr('%fooValue%'); // WHERE PRENOM_AGENT_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prenomAgentFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AgentQuery The current query, for fluid interface
     */
    public function filterByPrenomAgentFr($prenomAgentFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prenomAgentFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prenomAgentFr)) {
                $prenomAgentFr = str_replace('*', '%', $prenomAgentFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AgentPeer::PRENOM_AGENT_FR, $prenomAgentFr, $comparison);
    }

    /**
     * Filter the query on the NOM_AGENT_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByNomAgentAr('fooValue');   // WHERE NOM_AGENT_AR = 'fooValue'
     * $query->filterByNomAgentAr('%fooValue%'); // WHERE NOM_AGENT_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomAgentAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AgentQuery The current query, for fluid interface
     */
    public function filterByNomAgentAr($nomAgentAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomAgentAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomAgentAr)) {
                $nomAgentAr = str_replace('*', '%', $nomAgentAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AgentPeer::NOM_AGENT_AR, $nomAgentAr, $comparison);
    }

    /**
     * Filter the query on the PRENOM_AGENT_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByPrenomAgentAr('fooValue');   // WHERE PRENOM_AGENT_AR = 'fooValue'
     * $query->filterByPrenomAgentAr('%fooValue%'); // WHERE PRENOM_AGENT_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prenomAgentAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AgentQuery The current query, for fluid interface
     */
    public function filterByPrenomAgentAr($prenomAgentAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prenomAgentAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prenomAgentAr)) {
                $prenomAgentAr = str_replace('*', '%', $prenomAgentAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AgentPeer::PRENOM_AGENT_AR, $prenomAgentAr, $comparison);
    }

    /**
     * Filter the query on the EMAIL_AGENT column
     *
     * Example usage:
     * <code>
     * $query->filterByEmailAgent('fooValue');   // WHERE EMAIL_AGENT = 'fooValue'
     * $query->filterByEmailAgent('%fooValue%'); // WHERE EMAIL_AGENT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $emailAgent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AgentQuery The current query, for fluid interface
     */
    public function filterByEmailAgent($emailAgent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($emailAgent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $emailAgent)) {
                $emailAgent = str_replace('*', '%', $emailAgent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AgentPeer::EMAIL_AGENT, $emailAgent, $comparison);
    }

    /**
     * Filter the query on the TEL_AGENT column
     *
     * Example usage:
     * <code>
     * $query->filterByTelAgent('fooValue');   // WHERE TEL_AGENT = 'fooValue'
     * $query->filterByTelAgent('%fooValue%'); // WHERE TEL_AGENT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telAgent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AgentQuery The current query, for fluid interface
     */
    public function filterByTelAgent($telAgent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telAgent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telAgent)) {
                $telAgent = str_replace('*', '%', $telAgent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AgentPeer::TEL_AGENT, $telAgent, $comparison);
    }

    /**
     * Filter the query on the FAX_AGENT column
     *
     * Example usage:
     * <code>
     * $query->filterByFaxAgent('fooValue');   // WHERE FAX_AGENT = 'fooValue'
     * $query->filterByFaxAgent('%fooValue%'); // WHERE FAX_AGENT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $faxAgent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AgentQuery The current query, for fluid interface
     */
    public function filterByFaxAgent($faxAgent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($faxAgent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $faxAgent)) {
                $faxAgent = str_replace('*', '%', $faxAgent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AgentPeer::FAX_AGENT, $faxAgent, $comparison);
    }

    /**
     * Filter the query on the ETAT_AGENT column
     *
     * Example usage:
     * <code>
     * $query->filterByEtatAgent('fooValue');   // WHERE ETAT_AGENT = 'fooValue'
     * $query->filterByEtatAgent('%fooValue%'); // WHERE ETAT_AGENT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $etatAgent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AgentQuery The current query, for fluid interface
     */
    public function filterByEtatAgent($etatAgent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($etatAgent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $etatAgent)) {
                $etatAgent = str_replace('*', '%', $etatAgent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AgentPeer::ETAT_AGENT, $etatAgent, $comparison);
    }

    /**
     * Filter the query on the SUPER_AGENT column
     *
     * Example usage:
     * <code>
     * $query->filterBySuperAgent('fooValue');   // WHERE SUPER_AGENT = 'fooValue'
     * $query->filterBySuperAgent('%fooValue%'); // WHERE SUPER_AGENT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $superAgent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AgentQuery The current query, for fluid interface
     */
    public function filterBySuperAgent($superAgent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($superAgent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $superAgent)) {
                $superAgent = str_replace('*', '%', $superAgent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AgentPeer::SUPER_AGENT, $superAgent, $comparison);
    }

    /**
     * Filter the query on the ETAT_ALERTE column
     *
     * Example usage:
     * <code>
     * $query->filterByEtatAlerte('fooValue');   // WHERE ETAT_ALERTE = 'fooValue'
     * $query->filterByEtatAlerte('%fooValue%'); // WHERE ETAT_ALERTE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $etatAlerte The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AgentQuery The current query, for fluid interface
     */
    public function filterByEtatAlerte($etatAlerte = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($etatAlerte)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $etatAlerte)) {
                $etatAlerte = str_replace('*', '%', $etatAlerte);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AgentPeer::ETAT_ALERTE, $etatAlerte, $comparison);
    }

    /**
     * Filter the query on the TYPE_ALERTE column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeAlerte('fooValue');   // WHERE TYPE_ALERTE = 'fooValue'
     * $query->filterByTypeAlerte('%fooValue%'); // WHERE TYPE_ALERTE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeAlerte The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AgentQuery The current query, for fluid interface
     */
    public function filterByTypeAlerte($typeAlerte = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeAlerte)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeAlerte)) {
                $typeAlerte = str_replace('*', '%', $typeAlerte);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AgentPeer::TYPE_ALERTE, $typeAlerte, $comparison);
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
     * @return AgentQuery The current query, for fluid interface
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

        return $this->addUsingAlias(AgentPeer::SIGNATAIRE, $signataire, $comparison);
    }

    /**
     * Filter the query on the DATE_DERNIER_ACCES column
     *
     * Example usage:
     * <code>
     * $query->filterByDateDernierAcces('2011-03-14'); // WHERE DATE_DERNIER_ACCES = '2011-03-14'
     * $query->filterByDateDernierAcces('now'); // WHERE DATE_DERNIER_ACCES = '2011-03-14'
     * $query->filterByDateDernierAcces(array('max' => 'yesterday')); // WHERE DATE_DERNIER_ACCES > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateDernierAcces The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AgentQuery The current query, for fluid interface
     */
    public function filterByDateDernierAcces($dateDernierAcces = null, $comparison = null)
    {
        if (is_array($dateDernierAcces)) {
            $useMinMax = false;
            if (isset($dateDernierAcces['min'])) {
                $this->addUsingAlias(AgentPeer::DATE_DERNIER_ACCES, $dateDernierAcces['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateDernierAcces['max'])) {
                $this->addUsingAlias(AgentPeer::DATE_DERNIER_ACCES, $dateDernierAcces['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AgentPeer::DATE_DERNIER_ACCES, $dateDernierAcces, $comparison);
    }

    /**
     * Filter the query on the ID_SOCLE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdSocle(1234); // WHERE ID_SOCLE = 1234
     * $query->filterByIdSocle(array(12, 34)); // WHERE ID_SOCLE IN (12, 34)
     * $query->filterByIdSocle(array('min' => 12)); // WHERE ID_SOCLE >= 12
     * $query->filterByIdSocle(array('max' => 12)); // WHERE ID_SOCLE <= 12
     * </code>
     *
     * @param     mixed $idSocle The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AgentQuery The current query, for fluid interface
     */
    public function filterByIdSocle($idSocle = null, $comparison = null)
    {
        if (is_array($idSocle)) {
            $useMinMax = false;
            if (isset($idSocle['min'])) {
                $this->addUsingAlias(AgentPeer::ID_SOCLE, $idSocle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idSocle['max'])) {
                $this->addUsingAlias(AgentPeer::ID_SOCLE, $idSocle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AgentPeer::ID_SOCLE, $idSocle, $comparison);
    }

    /**
     * Filter the query on the CENTRE_APPEL column
     *
     * Example usage:
     * <code>
     * $query->filterByCentreAppel('fooValue');   // WHERE CENTRE_APPEL = 'fooValue'
     * $query->filterByCentreAppel('%fooValue%'); // WHERE CENTRE_APPEL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $centreAppel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AgentQuery The current query, for fluid interface
     */
    public function filterByCentreAppel($centreAppel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($centreAppel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $centreAppel)) {
                $centreAppel = str_replace('*', '%', $centreAppel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AgentPeer::CENTRE_APPEL, $centreAppel, $comparison);
    }

    /**
     * Filter the query on the IDENTIFIANT_AGENT_CA column
     *
     * Example usage:
     * <code>
     * $query->filterByIdentifiantAgentCa('fooValue');   // WHERE IDENTIFIANT_AGENT_CA = 'fooValue'
     * $query->filterByIdentifiantAgentCa('%fooValue%'); // WHERE IDENTIFIANT_AGENT_CA LIKE '%fooValue%'
     * </code>
     *
     * @param     string $identifiantAgentCa The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AgentQuery The current query, for fluid interface
     */
    public function filterByIdentifiantAgentCa($identifiantAgentCa = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($identifiantAgentCa)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $identifiantAgentCa)) {
                $identifiantAgentCa = str_replace('*', '%', $identifiantAgentCa);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AgentPeer::IDENTIFIANT_AGENT_CA, $identifiantAgentCa, $comparison);
    }

    /**
     * Filter the query on the TYPE_AFFECTATION column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeAffectation('fooValue');   // WHERE TYPE_AFFECTATION = 'fooValue'
     * $query->filterByTypeAffectation('%fooValue%'); // WHERE TYPE_AFFECTATION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeAffectation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AgentQuery The current query, for fluid interface
     */
    public function filterByTypeAffectation($typeAffectation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeAffectation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeAffectation)) {
                $typeAffectation = str_replace('*', '%', $typeAffectation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AgentPeer::TYPE_AFFECTATION, $typeAffectation, $comparison);
    }

    /**
     * Filter the query on the ID_PJ_SIGNATURE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPjSignature(1234); // WHERE ID_PJ_SIGNATURE = 1234
     * $query->filterByIdPjSignature(array(12, 34)); // WHERE ID_PJ_SIGNATURE IN (12, 34)
     * $query->filterByIdPjSignature(array('min' => 12)); // WHERE ID_PJ_SIGNATURE >= 12
     * $query->filterByIdPjSignature(array('max' => 12)); // WHERE ID_PJ_SIGNATURE <= 12
     * </code>
     *
     * @param     mixed $idPjSignature The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AgentQuery The current query, for fluid interface
     */
    public function filterByIdPjSignature($idPjSignature = null, $comparison = null)
    {
        if (is_array($idPjSignature)) {
            $useMinMax = false;
            if (isset($idPjSignature['min'])) {
                $this->addUsingAlias(AgentPeer::ID_PJ_SIGNATURE, $idPjSignature['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idPjSignature['max'])) {
                $this->addUsingAlias(AgentPeer::ID_PJ_SIGNATURE, $idPjSignature['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AgentPeer::ID_PJ_SIGNATURE, $idPjSignature, $comparison);
    }

    /**
     * Filter the query on the ID_PJ_SIGNATURE_PARAPHE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPjSignatureParaphe(1234); // WHERE ID_PJ_SIGNATURE_PARAPHE = 1234
     * $query->filterByIdPjSignatureParaphe(array(12, 34)); // WHERE ID_PJ_SIGNATURE_PARAPHE IN (12, 34)
     * $query->filterByIdPjSignatureParaphe(array('min' => 12)); // WHERE ID_PJ_SIGNATURE_PARAPHE >= 12
     * $query->filterByIdPjSignatureParaphe(array('max' => 12)); // WHERE ID_PJ_SIGNATURE_PARAPHE <= 12
     * </code>
     *
     * @param     mixed $idPjSignatureParaphe The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AgentQuery The current query, for fluid interface
     */
    public function filterByIdPjSignatureParaphe($idPjSignatureParaphe = null, $comparison = null)
    {
        if (is_array($idPjSignatureParaphe)) {
            $useMinMax = false;
            if (isset($idPjSignatureParaphe['min'])) {
                $this->addUsingAlias(AgentPeer::ID_PJ_SIGNATURE_PARAPHE, $idPjSignatureParaphe['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idPjSignatureParaphe['max'])) {
                $this->addUsingAlias(AgentPeer::ID_PJ_SIGNATURE_PARAPHE, $idPjSignatureParaphe['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AgentPeer::ID_PJ_SIGNATURE_PARAPHE, $idPjSignatureParaphe, $comparison);
    }

    /**
     * Filter the query on the CERTIFICAT column
     *
     * Example usage:
     * <code>
     * $query->filterByCertificat('fooValue');   // WHERE CERTIFICAT = 'fooValue'
     * $query->filterByCertificat('%fooValue%'); // WHERE CERTIFICAT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $certificat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AgentQuery The current query, for fluid interface
     */
    public function filterByCertificat($certificat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($certificat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $certificat)) {
                $certificat = str_replace('*', '%', $certificat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AgentPeer::CERTIFICAT, $certificat, $comparison);
    }

    /**
     * Filter the query on the IDENTIFIANT_CERTIFICAT column
     *
     * Example usage:
     * <code>
     * $query->filterByIdentifiantCertificat('fooValue');   // WHERE IDENTIFIANT_CERTIFICAT = 'fooValue'
     * $query->filterByIdentifiantCertificat('%fooValue%'); // WHERE IDENTIFIANT_CERTIFICAT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $identifiantCertificat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AgentQuery The current query, for fluid interface
     */
    public function filterByIdentifiantCertificat($identifiantCertificat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($identifiantCertificat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $identifiantCertificat)) {
                $identifiantCertificat = str_replace('*', '%', $identifiantCertificat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AgentPeer::IDENTIFIANT_CERTIFICAT, $identifiantCertificat, $comparison);
    }

    /**
     * Filter the query on the JETON_VALIDATION column
     *
     * Example usage:
     * <code>
     * $query->filterByJetonValidation('fooValue');   // WHERE JETON_VALIDATION = 'fooValue'
     * $query->filterByJetonValidation('%fooValue%'); // WHERE JETON_VALIDATION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $jetonValidation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AgentQuery The current query, for fluid interface
     */
    public function filterByJetonValidation($jetonValidation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($jetonValidation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $jetonValidation)) {
                $jetonValidation = str_replace('*', '%', $jetonValidation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AgentPeer::JETON_VALIDATION, $jetonValidation, $comparison);
    }

    /**
     * Filter the query on the FILIGRANE column
     *
     * Example usage:
     * <code>
     * $query->filterByFiligrane('fooValue');   // WHERE FILIGRANE = 'fooValue'
     * $query->filterByFiligrane('%fooValue%'); // WHERE FILIGRANE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $filigrane The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AgentQuery The current query, for fluid interface
     */
    public function filterByFiligrane($filigrane = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($filigrane)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $filigrane)) {
                $filigrane = str_replace('*', '%', $filigrane);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AgentPeer::FILIGRANE, $filigrane, $comparison);
    }

    /**
     * Filter the query on the ID_VERSION column
     *
     * Example usage:
     * <code>
     * $query->filterByIdVersion(1234); // WHERE ID_VERSION = 1234
     * $query->filterByIdVersion(array(12, 34)); // WHERE ID_VERSION IN (12, 34)
     * $query->filterByIdVersion(array('min' => 12)); // WHERE ID_VERSION >= 12
     * $query->filterByIdVersion(array('max' => 12)); // WHERE ID_VERSION <= 12
     * </code>
     *
     * @param     mixed $idVersion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AgentQuery The current query, for fluid interface
     */
    public function filterByIdVersion($idVersion = null, $comparison = null)
    {
        if (is_array($idVersion)) {
            $useMinMax = false;
            if (isset($idVersion['min'])) {
                $this->addUsingAlias(AgentPeer::ID_VERSION, $idVersion['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idVersion['max'])) {
                $this->addUsingAlias(AgentPeer::ID_VERSION, $idVersion['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AgentPeer::ID_VERSION, $idVersion, $comparison);
    }

    /**
     * Filter the query on the VERSION_LU column
     *
     * Example usage:
     * <code>
     * $query->filterByVersionLu('fooValue');   // WHERE VERSION_LU = 'fooValue'
     * $query->filterByVersionLu('%fooValue%'); // WHERE VERSION_LU LIKE '%fooValue%'
     * </code>
     *
     * @param     string $versionLu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AgentQuery The current query, for fluid interface
     */
    public function filterByVersionLu($versionLu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($versionLu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $versionLu)) {
                $versionLu = str_replace('*', '%', $versionLu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(AgentPeer::VERSION_LU, $versionLu, $comparison);
    }

    /**
     * Filter the query on the TENTATIVE_MDP column
     *
     * Example usage:
     * <code>
     * $query->filterByTentativeMdp(1234); // WHERE TENTATIVE_MDP = 1234
     * $query->filterByTentativeMdp(array(12, 34)); // WHERE TENTATIVE_MDP IN (12, 34)
     * $query->filterByTentativeMdp(array('min' => 12)); // WHERE TENTATIVE_MDP >= 12
     * $query->filterByTentativeMdp(array('max' => 12)); // WHERE TENTATIVE_MDP <= 12
     * </code>
     *
     * @param     mixed $tentativeMdp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AgentQuery The current query, for fluid interface
     */
    public function filterByTentativeMdp($tentativeMdp = null, $comparison = null)
    {
        if (is_array($tentativeMdp)) {
            $useMinMax = false;
            if (isset($tentativeMdp['min'])) {
                $this->addUsingAlias(AgentPeer::TENTATIVE_MDP, $tentativeMdp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tentativeMdp['max'])) {
                $this->addUsingAlias(AgentPeer::TENTATIVE_MDP, $tentativeMdp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AgentPeer::TENTATIVE_MDP, $tentativeMdp, $comparison);
    }

    /**
     * Filter the query on the DATE_BLOCAGE column
     *
     * Example usage:
     * <code>
     * $query->filterByDateBlocage('2011-03-14'); // WHERE DATE_BLOCAGE = '2011-03-14'
     * $query->filterByDateBlocage('now'); // WHERE DATE_BLOCAGE = '2011-03-14'
     * $query->filterByDateBlocage(array('max' => 'yesterday')); // WHERE DATE_BLOCAGE > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateBlocage The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AgentQuery The current query, for fluid interface
     */
    public function filterByDateBlocage($dateBlocage = null, $comparison = null)
    {
        if (is_array($dateBlocage)) {
            $useMinMax = false;
            if (isset($dateBlocage['min'])) {
                $this->addUsingAlias(AgentPeer::DATE_BLOCAGE, $dateBlocage['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateBlocage['max'])) {
                $this->addUsingAlias(AgentPeer::DATE_BLOCAGE, $dateBlocage['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AgentPeer::DATE_BLOCAGE, $dateBlocage, $comparison);
    }

    /**
     * Filter the query by a related TAgentTicket object
     *
     * @param   TAgentTicket|PropelObjectCollection $tAgentTicket  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AgentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTAgentTicket($tAgentTicket, $comparison = null)
    {
        if ($tAgentTicket instanceof TAgentTicket) {
            return $this
                ->addUsingAlias(AgentPeer::ID, $tAgentTicket->getIdAgent(), $comparison);
        } elseif ($tAgentTicket instanceof PropelObjectCollection) {
            return $this
                ->useTAgentTicketQuery()
                ->filterByPrimaryKeys($tAgentTicket->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTAgentTicket() only accepts arguments of type TAgentTicket or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TAgentTicket relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AgentQuery The current query, for fluid interface
     */
    public function joinTAgentTicket($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TAgentTicket');

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
            $this->addJoinObject($join, 'TAgentTicket');
        }

        return $this;
    }

    /**
     * Use the TAgentTicket relation TAgentTicket object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TAgentTicketQuery A secondary query class using the current class as primary query
     */
    public function useTAgentTicketQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTAgentTicket($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TAgentTicket', 'TAgentTicketQuery');
    }

    /**
     * Filter the query by a related TChatbot object
     *
     * @param   TChatbot|PropelObjectCollection $tChatbot  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AgentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTChatbot($tChatbot, $comparison = null)
    {
        if ($tChatbot instanceof TChatbot) {
            return $this
                ->addUsingAlias(AgentPeer::ID, $tChatbot->getAgentId(), $comparison);
        } elseif ($tChatbot instanceof PropelObjectCollection) {
            return $this
                ->useTChatbotQuery()
                ->filterByPrimaryKeys($tChatbot->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTChatbot() only accepts arguments of type TChatbot or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the TChatbot relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AgentQuery The current query, for fluid interface
     */
    public function joinTChatbot($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('TChatbot');

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
            $this->addJoinObject($join, 'TChatbot');
        }

        return $this;
    }

    /**
     * Use the TChatbot relation TChatbot object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   TChatbotQuery A secondary query class using the current class as primary query
     */
    public function useTChatbotQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTChatbot($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'TChatbot', 'TChatbotQuery');
    }

    /**
     * Filter the query by a related THistoriqueConsultation object
     *
     * @param   THistoriqueConsultation|PropelObjectCollection $tHistoriqueConsultation  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 AgentQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByTHistoriqueConsultation($tHistoriqueConsultation, $comparison = null)
    {
        if ($tHistoriqueConsultation instanceof THistoriqueConsultation) {
            return $this
                ->addUsingAlias(AgentPeer::ID, $tHistoriqueConsultation->getIdAgent(), $comparison);
        } elseif ($tHistoriqueConsultation instanceof PropelObjectCollection) {
            return $this
                ->useTHistoriqueConsultationQuery()
                ->filterByPrimaryKeys($tHistoriqueConsultation->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByTHistoriqueConsultation() only accepts arguments of type THistoriqueConsultation or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the THistoriqueConsultation relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return AgentQuery The current query, for fluid interface
     */
    public function joinTHistoriqueConsultation($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('THistoriqueConsultation');

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
            $this->addJoinObject($join, 'THistoriqueConsultation');
        }

        return $this;
    }

    /**
     * Use the THistoriqueConsultation relation THistoriqueConsultation object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   THistoriqueConsultationQuery A secondary query class using the current class as primary query
     */
    public function useTHistoriqueConsultationQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinTHistoriqueConsultation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'THistoriqueConsultation', 'THistoriqueConsultationQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   Agent $agent Object to remove from the list of results
     *
     * @return AgentQuery The current query, for fluid interface
     */
    public function prune($agent = null)
    {
        if ($agent) {
            $this->addUsingAlias(AgentPeer::ID, $agent->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
