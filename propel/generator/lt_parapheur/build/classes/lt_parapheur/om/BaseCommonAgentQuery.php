<?php


/**
 * Base class that represents a query for the 'Agent' table.
 *
 * 
 *
 * @method CommonAgentQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonAgentQuery orderByLogin($order = Criteria::ASC) Order by the login column
 * @method CommonAgentQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method CommonAgentQuery orderByMdp($order = Criteria::ASC) Order by the mdp column
 * @method CommonAgentQuery orderByCertificat($order = Criteria::ASC) Order by the certificat column
 * @method CommonAgentQuery orderByNom($order = Criteria::ASC) Order by the nom column
 * @method CommonAgentQuery orderByPrenom($order = Criteria::ASC) Order by the prenom column
 * @method CommonAgentQuery orderByTentativesMdp($order = Criteria::ASC) Order by the tentatives_mdp column
 * @method CommonAgentQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonAgentQuery orderByServiceId($order = Criteria::ASC) Order by the service_id column
 * @method CommonAgentQuery orderByRecevoirMail($order = Criteria::ASC) Order by the RECEVOIR_MAIL column
 * @method CommonAgentQuery orderByElu($order = Criteria::ASC) Order by the elu column
 * @method CommonAgentQuery orderByNomFonction($order = Criteria::ASC) Order by the nom_fonction column
 * @method CommonAgentQuery orderByNumTel($order = Criteria::ASC) Order by the num_tel column
 * @method CommonAgentQuery orderByNumFax($order = Criteria::ASC) Order by the num_fax column
 * @method CommonAgentQuery orderByTypeComm($order = Criteria::ASC) Order by the type_comm column
 * @method CommonAgentQuery orderByAdrPostale($order = Criteria::ASC) Order by the adr_postale column
 * @method CommonAgentQuery orderByCivilite($order = Criteria::ASC) Order by the civilite column
 * @method CommonAgentQuery orderByAlerteReponseElectronique($order = Criteria::ASC) Order by the alerte_reponse_electronique column
 * @method CommonAgentQuery orderByAlerteReceptionMainlevee($order = Criteria::ASC) Order by the alerte_reception_mainlevee column
 * @method CommonAgentQuery orderByAlerteClotureConsultation($order = Criteria::ASC) Order by the alerte_cloture_consultation column
 * @method CommonAgentQuery orderByAlerteReceptionMessage($order = Criteria::ASC) Order by the alerte_reception_message column
 * @method CommonAgentQuery orderByAlertePublicationBoamp($order = Criteria::ASC) Order by the alerte_publication_boamp column
 * @method CommonAgentQuery orderByAlerteEchecPublicationBoamp($order = Criteria::ASC) Order by the alerte_echec_publication_boamp column
 * @method CommonAgentQuery orderByAlerteCreationModificationAgent($order = Criteria::ASC) Order by the alerte_creation_modification_agent column
 * @method CommonAgentQuery orderByDateCreation($order = Criteria::ASC) Order by the date_creation column
 * @method CommonAgentQuery orderByDateModification($order = Criteria::ASC) Order by the date_modification column
 * @method CommonAgentQuery orderByIdInitial($order = Criteria::ASC) Order by the id_initial column
 * @method CommonAgentQuery orderByIdProfilSocleExterne($order = Criteria::ASC) Order by the id_profil_socle_externe column
 * @method CommonAgentQuery orderByLieuExecution($order = Criteria::ASC) Order by the lieu_execution column
 * @method CommonAgentQuery orderByAlerteQuestionEntreprise($order = Criteria::ASC) Order by the alerte_question_entreprise column
 * @method CommonAgentQuery orderByActif($order = Criteria::ASC) Order by the actif column
 * @method CommonAgentQuery orderByCodesNuts($order = Criteria::ASC) Order by the codes_nuts column
 * @method CommonAgentQuery orderByNumCertificat($order = Criteria::ASC) Order by the num_certificat column
 * @method CommonAgentQuery orderByAlerteValidationConsultation($order = Criteria::ASC) Order by the alerte_validation_consultation column
 * @method CommonAgentQuery orderByAlerteChorus($order = Criteria::ASC) Order by the alerte_chorus column
 * @method CommonAgentQuery orderByPassword($order = Criteria::ASC) Order by the password column
 * @method CommonAgentQuery orderByCodeTheme($order = Criteria::ASC) Order by the code_theme column
 * @method CommonAgentQuery orderByTentativeRecupMdp($order = Criteria::ASC) Order by the tentative_recup_mdp column
 * @method CommonAgentQuery orderByDateTentativeRecupMdp($order = Criteria::ASC) Order by the date_tentative_recup_mdp column
 *
 * @method CommonAgentQuery groupById() Group by the id column
 * @method CommonAgentQuery groupByLogin() Group by the login column
 * @method CommonAgentQuery groupByEmail() Group by the email column
 * @method CommonAgentQuery groupByMdp() Group by the mdp column
 * @method CommonAgentQuery groupByCertificat() Group by the certificat column
 * @method CommonAgentQuery groupByNom() Group by the nom column
 * @method CommonAgentQuery groupByPrenom() Group by the prenom column
 * @method CommonAgentQuery groupByTentativesMdp() Group by the tentatives_mdp column
 * @method CommonAgentQuery groupByOrganisme() Group by the organisme column
 * @method CommonAgentQuery groupByServiceId() Group by the service_id column
 * @method CommonAgentQuery groupByRecevoirMail() Group by the RECEVOIR_MAIL column
 * @method CommonAgentQuery groupByElu() Group by the elu column
 * @method CommonAgentQuery groupByNomFonction() Group by the nom_fonction column
 * @method CommonAgentQuery groupByNumTel() Group by the num_tel column
 * @method CommonAgentQuery groupByNumFax() Group by the num_fax column
 * @method CommonAgentQuery groupByTypeComm() Group by the type_comm column
 * @method CommonAgentQuery groupByAdrPostale() Group by the adr_postale column
 * @method CommonAgentQuery groupByCivilite() Group by the civilite column
 * @method CommonAgentQuery groupByAlerteReponseElectronique() Group by the alerte_reponse_electronique column
 * @method CommonAgentQuery groupByAlerteReceptionMainlevee() Group by the alerte_reception_mainlevee column
 * @method CommonAgentQuery groupByAlerteClotureConsultation() Group by the alerte_cloture_consultation column
 * @method CommonAgentQuery groupByAlerteReceptionMessage() Group by the alerte_reception_message column
 * @method CommonAgentQuery groupByAlertePublicationBoamp() Group by the alerte_publication_boamp column
 * @method CommonAgentQuery groupByAlerteEchecPublicationBoamp() Group by the alerte_echec_publication_boamp column
 * @method CommonAgentQuery groupByAlerteCreationModificationAgent() Group by the alerte_creation_modification_agent column
 * @method CommonAgentQuery groupByDateCreation() Group by the date_creation column
 * @method CommonAgentQuery groupByDateModification() Group by the date_modification column
 * @method CommonAgentQuery groupByIdInitial() Group by the id_initial column
 * @method CommonAgentQuery groupByIdProfilSocleExterne() Group by the id_profil_socle_externe column
 * @method CommonAgentQuery groupByLieuExecution() Group by the lieu_execution column
 * @method CommonAgentQuery groupByAlerteQuestionEntreprise() Group by the alerte_question_entreprise column
 * @method CommonAgentQuery groupByActif() Group by the actif column
 * @method CommonAgentQuery groupByCodesNuts() Group by the codes_nuts column
 * @method CommonAgentQuery groupByNumCertificat() Group by the num_certificat column
 * @method CommonAgentQuery groupByAlerteValidationConsultation() Group by the alerte_validation_consultation column
 * @method CommonAgentQuery groupByAlerteChorus() Group by the alerte_chorus column
 * @method CommonAgentQuery groupByPassword() Group by the password column
 * @method CommonAgentQuery groupByCodeTheme() Group by the code_theme column
 * @method CommonAgentQuery groupByTentativeRecupMdp() Group by the tentative_recup_mdp column
 * @method CommonAgentQuery groupByDateTentativeRecupMdp() Group by the date_tentative_recup_mdp column
 *
 * @method CommonAgentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonAgentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonAgentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonAgent findOne(PropelPDO $con = null) Return the first CommonAgent matching the query
 * @method CommonAgent findOneOrCreate(PropelPDO $con = null) Return the first CommonAgent matching the query, or a new CommonAgent object populated from the query conditions when no match is found
 *
 * @method CommonAgent findOneByLogin(string $login) Return the first CommonAgent filtered by the login column
 * @method CommonAgent findOneByEmail(string $email) Return the first CommonAgent filtered by the email column
 * @method CommonAgent findOneByMdp(string $mdp) Return the first CommonAgent filtered by the mdp column
 * @method CommonAgent findOneByCertificat(string $certificat) Return the first CommonAgent filtered by the certificat column
 * @method CommonAgent findOneByNom(string $nom) Return the first CommonAgent filtered by the nom column
 * @method CommonAgent findOneByPrenom(string $prenom) Return the first CommonAgent filtered by the prenom column
 * @method CommonAgent findOneByTentativesMdp(int $tentatives_mdp) Return the first CommonAgent filtered by the tentatives_mdp column
 * @method CommonAgent findOneByOrganisme(string $organisme) Return the first CommonAgent filtered by the organisme column
 * @method CommonAgent findOneByServiceId(int $service_id) Return the first CommonAgent filtered by the service_id column
 * @method CommonAgent findOneByRecevoirMail(string $RECEVOIR_MAIL) Return the first CommonAgent filtered by the RECEVOIR_MAIL column
 * @method CommonAgent findOneByElu(string $elu) Return the first CommonAgent filtered by the elu column
 * @method CommonAgent findOneByNomFonction(string $nom_fonction) Return the first CommonAgent filtered by the nom_fonction column
 * @method CommonAgent findOneByNumTel(string $num_tel) Return the first CommonAgent filtered by the num_tel column
 * @method CommonAgent findOneByNumFax(string $num_fax) Return the first CommonAgent filtered by the num_fax column
 * @method CommonAgent findOneByTypeComm(string $type_comm) Return the first CommonAgent filtered by the type_comm column
 * @method CommonAgent findOneByAdrPostale(string $adr_postale) Return the first CommonAgent filtered by the adr_postale column
 * @method CommonAgent findOneByCivilite(string $civilite) Return the first CommonAgent filtered by the civilite column
 * @method CommonAgent findOneByAlerteReponseElectronique(string $alerte_reponse_electronique) Return the first CommonAgent filtered by the alerte_reponse_electronique column
 * @method CommonAgent findOneByAlerteReceptionMainlevee(string $alerte_reception_mainlevee) Return the first CommonAgent filtered by the alerte_reception_mainlevee column
 * @method CommonAgent findOneByAlerteClotureConsultation(string $alerte_cloture_consultation) Return the first CommonAgent filtered by the alerte_cloture_consultation column
 * @method CommonAgent findOneByAlerteReceptionMessage(string $alerte_reception_message) Return the first CommonAgent filtered by the alerte_reception_message column
 * @method CommonAgent findOneByAlertePublicationBoamp(string $alerte_publication_boamp) Return the first CommonAgent filtered by the alerte_publication_boamp column
 * @method CommonAgent findOneByAlerteEchecPublicationBoamp(string $alerte_echec_publication_boamp) Return the first CommonAgent filtered by the alerte_echec_publication_boamp column
 * @method CommonAgent findOneByAlerteCreationModificationAgent(string $alerte_creation_modification_agent) Return the first CommonAgent filtered by the alerte_creation_modification_agent column
 * @method CommonAgent findOneByDateCreation(string $date_creation) Return the first CommonAgent filtered by the date_creation column
 * @method CommonAgent findOneByDateModification(string $date_modification) Return the first CommonAgent filtered by the date_modification column
 * @method CommonAgent findOneByIdInitial(int $id_initial) Return the first CommonAgent filtered by the id_initial column
 * @method CommonAgent findOneByIdProfilSocleExterne(int $id_profil_socle_externe) Return the first CommonAgent filtered by the id_profil_socle_externe column
 * @method CommonAgent findOneByLieuExecution(string $lieu_execution) Return the first CommonAgent filtered by the lieu_execution column
 * @method CommonAgent findOneByAlerteQuestionEntreprise(string $alerte_question_entreprise) Return the first CommonAgent filtered by the alerte_question_entreprise column
 * @method CommonAgent findOneByActif(string $actif) Return the first CommonAgent filtered by the actif column
 * @method CommonAgent findOneByCodesNuts(string $codes_nuts) Return the first CommonAgent filtered by the codes_nuts column
 * @method CommonAgent findOneByNumCertificat(string $num_certificat) Return the first CommonAgent filtered by the num_certificat column
 * @method CommonAgent findOneByAlerteValidationConsultation(string $alerte_validation_consultation) Return the first CommonAgent filtered by the alerte_validation_consultation column
 * @method CommonAgent findOneByAlerteChorus(string $alerte_chorus) Return the first CommonAgent filtered by the alerte_chorus column
 * @method CommonAgent findOneByPassword(string $password) Return the first CommonAgent filtered by the password column
 * @method CommonAgent findOneByCodeTheme(string $code_theme) Return the first CommonAgent filtered by the code_theme column
 * @method CommonAgent findOneByTentativeRecupMdp(int $tentative_recup_mdp) Return the first CommonAgent filtered by the tentative_recup_mdp column
 * @method CommonAgent findOneByDateTentativeRecupMdp(string $date_tentative_recup_mdp) Return the first CommonAgent filtered by the date_tentative_recup_mdp column
 *
 * @method array findById(int $id) Return CommonAgent objects filtered by the id column
 * @method array findByLogin(string $login) Return CommonAgent objects filtered by the login column
 * @method array findByEmail(string $email) Return CommonAgent objects filtered by the email column
 * @method array findByMdp(string $mdp) Return CommonAgent objects filtered by the mdp column
 * @method array findByCertificat(string $certificat) Return CommonAgent objects filtered by the certificat column
 * @method array findByNom(string $nom) Return CommonAgent objects filtered by the nom column
 * @method array findByPrenom(string $prenom) Return CommonAgent objects filtered by the prenom column
 * @method array findByTentativesMdp(int $tentatives_mdp) Return CommonAgent objects filtered by the tentatives_mdp column
 * @method array findByOrganisme(string $organisme) Return CommonAgent objects filtered by the organisme column
 * @method array findByServiceId(int $service_id) Return CommonAgent objects filtered by the service_id column
 * @method array findByRecevoirMail(string $RECEVOIR_MAIL) Return CommonAgent objects filtered by the RECEVOIR_MAIL column
 * @method array findByElu(string $elu) Return CommonAgent objects filtered by the elu column
 * @method array findByNomFonction(string $nom_fonction) Return CommonAgent objects filtered by the nom_fonction column
 * @method array findByNumTel(string $num_tel) Return CommonAgent objects filtered by the num_tel column
 * @method array findByNumFax(string $num_fax) Return CommonAgent objects filtered by the num_fax column
 * @method array findByTypeComm(string $type_comm) Return CommonAgent objects filtered by the type_comm column
 * @method array findByAdrPostale(string $adr_postale) Return CommonAgent objects filtered by the adr_postale column
 * @method array findByCivilite(string $civilite) Return CommonAgent objects filtered by the civilite column
 * @method array findByAlerteReponseElectronique(string $alerte_reponse_electronique) Return CommonAgent objects filtered by the alerte_reponse_electronique column
 * @method array findByAlerteReceptionMainlevee(string $alerte_reception_mainlevee) Return CommonAgent objects filtered by the alerte_reception_mainlevee column
 * @method array findByAlerteClotureConsultation(string $alerte_cloture_consultation) Return CommonAgent objects filtered by the alerte_cloture_consultation column
 * @method array findByAlerteReceptionMessage(string $alerte_reception_message) Return CommonAgent objects filtered by the alerte_reception_message column
 * @method array findByAlertePublicationBoamp(string $alerte_publication_boamp) Return CommonAgent objects filtered by the alerte_publication_boamp column
 * @method array findByAlerteEchecPublicationBoamp(string $alerte_echec_publication_boamp) Return CommonAgent objects filtered by the alerte_echec_publication_boamp column
 * @method array findByAlerteCreationModificationAgent(string $alerte_creation_modification_agent) Return CommonAgent objects filtered by the alerte_creation_modification_agent column
 * @method array findByDateCreation(string $date_creation) Return CommonAgent objects filtered by the date_creation column
 * @method array findByDateModification(string $date_modification) Return CommonAgent objects filtered by the date_modification column
 * @method array findByIdInitial(int $id_initial) Return CommonAgent objects filtered by the id_initial column
 * @method array findByIdProfilSocleExterne(int $id_profil_socle_externe) Return CommonAgent objects filtered by the id_profil_socle_externe column
 * @method array findByLieuExecution(string $lieu_execution) Return CommonAgent objects filtered by the lieu_execution column
 * @method array findByAlerteQuestionEntreprise(string $alerte_question_entreprise) Return CommonAgent objects filtered by the alerte_question_entreprise column
 * @method array findByActif(string $actif) Return CommonAgent objects filtered by the actif column
 * @method array findByCodesNuts(string $codes_nuts) Return CommonAgent objects filtered by the codes_nuts column
 * @method array findByNumCertificat(string $num_certificat) Return CommonAgent objects filtered by the num_certificat column
 * @method array findByAlerteValidationConsultation(string $alerte_validation_consultation) Return CommonAgent objects filtered by the alerte_validation_consultation column
 * @method array findByAlerteChorus(string $alerte_chorus) Return CommonAgent objects filtered by the alerte_chorus column
 * @method array findByPassword(string $password) Return CommonAgent objects filtered by the password column
 * @method array findByCodeTheme(string $code_theme) Return CommonAgent objects filtered by the code_theme column
 * @method array findByTentativeRecupMdp(int $tentative_recup_mdp) Return CommonAgent objects filtered by the tentative_recup_mdp column
 * @method array findByDateTentativeRecupMdp(string $date_tentative_recup_mdp) Return CommonAgent objects filtered by the date_tentative_recup_mdp column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonAgentQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonAgentQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonAgent', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonAgentQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonAgentQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonAgentQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonAgentQuery) {
            return $criteria;
        }
        $query = new CommonAgentQuery();
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
     * @return   CommonAgent|CommonAgent[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonAgentPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonAgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonAgent A model object, or null if the key is not found
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
     * @return                 CommonAgent A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `login`, `email`, `mdp`, `certificat`, `nom`, `prenom`, `tentatives_mdp`, `organisme`, `service_id`, `RECEVOIR_MAIL`, `elu`, `nom_fonction`, `num_tel`, `num_fax`, `type_comm`, `adr_postale`, `civilite`, `alerte_reponse_electronique`, `alerte_reception_mainlevee`, `alerte_cloture_consultation`, `alerte_reception_message`, `alerte_publication_boamp`, `alerte_echec_publication_boamp`, `alerte_creation_modification_agent`, `date_creation`, `date_modification`, `id_initial`, `id_profil_socle_externe`, `lieu_execution`, `alerte_question_entreprise`, `actif`, `codes_nuts`, `num_certificat`, `alerte_validation_consultation`, `alerte_chorus`, `password`, `code_theme`, `tentative_recup_mdp`, `date_tentative_recup_mdp` FROM `Agent` WHERE `id` = :p0';
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
            $obj = new CommonAgent();
            $obj->hydrate($row);
            CommonAgentPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonAgent|CommonAgent[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonAgent[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonAgentPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonAgentPeer::ID, $keys, Criteria::IN);
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
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonAgentPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonAgentPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the login column
     *
     * Example usage:
     * <code>
     * $query->filterByLogin('fooValue');   // WHERE login = 'fooValue'
     * $query->filterByLogin('%fooValue%'); // WHERE login LIKE '%fooValue%'
     * </code>
     *
     * @param     string $login The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByLogin($login = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($login)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $login)) {
                $login = str_replace('*', '%', $login);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::LOGIN, $login, $comparison);
    }

    /**
     * Filter the query on the email column
     *
     * Example usage:
     * <code>
     * $query->filterByEmail('fooValue');   // WHERE email = 'fooValue'
     * $query->filterByEmail('%fooValue%'); // WHERE email LIKE '%fooValue%'
     * </code>
     *
     * @param     string $email The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByEmail($email = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($email)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $email)) {
                $email = str_replace('*', '%', $email);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the mdp column
     *
     * Example usage:
     * <code>
     * $query->filterByMdp('fooValue');   // WHERE mdp = 'fooValue'
     * $query->filterByMdp('%fooValue%'); // WHERE mdp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mdp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByMdp($mdp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mdp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mdp)) {
                $mdp = str_replace('*', '%', $mdp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::MDP, $mdp, $comparison);
    }

    /**
     * Filter the query on the certificat column
     *
     * Example usage:
     * <code>
     * $query->filterByCertificat('fooValue');   // WHERE certificat = 'fooValue'
     * $query->filterByCertificat('%fooValue%'); // WHERE certificat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $certificat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonAgentPeer::CERTIFICAT, $certificat, $comparison);
    }

    /**
     * Filter the query on the nom column
     *
     * Example usage:
     * <code>
     * $query->filterByNom('fooValue');   // WHERE nom = 'fooValue'
     * $query->filterByNom('%fooValue%'); // WHERE nom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByNom($nom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nom)) {
                $nom = str_replace('*', '%', $nom);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::NOM, $nom, $comparison);
    }

    /**
     * Filter the query on the prenom column
     *
     * Example usage:
     * <code>
     * $query->filterByPrenom('fooValue');   // WHERE prenom = 'fooValue'
     * $query->filterByPrenom('%fooValue%'); // WHERE prenom LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prenom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByPrenom($prenom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prenom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prenom)) {
                $prenom = str_replace('*', '%', $prenom);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::PRENOM, $prenom, $comparison);
    }

    /**
     * Filter the query on the tentatives_mdp column
     *
     * Example usage:
     * <code>
     * $query->filterByTentativesMdp(1234); // WHERE tentatives_mdp = 1234
     * $query->filterByTentativesMdp(array(12, 34)); // WHERE tentatives_mdp IN (12, 34)
     * $query->filterByTentativesMdp(array('min' => 12)); // WHERE tentatives_mdp >= 12
     * $query->filterByTentativesMdp(array('max' => 12)); // WHERE tentatives_mdp <= 12
     * </code>
     *
     * @param     mixed $tentativesMdp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByTentativesMdp($tentativesMdp = null, $comparison = null)
    {
        if (is_array($tentativesMdp)) {
            $useMinMax = false;
            if (isset($tentativesMdp['min'])) {
                $this->addUsingAlias(CommonAgentPeer::TENTATIVES_MDP, $tentativesMdp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tentativesMdp['max'])) {
                $this->addUsingAlias(CommonAgentPeer::TENTATIVES_MDP, $tentativesMdp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::TENTATIVES_MDP, $tentativesMdp, $comparison);
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
     * @return CommonAgentQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonAgentPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the service_id column
     *
     * Example usage:
     * <code>
     * $query->filterByServiceId(1234); // WHERE service_id = 1234
     * $query->filterByServiceId(array(12, 34)); // WHERE service_id IN (12, 34)
     * $query->filterByServiceId(array('min' => 12)); // WHERE service_id >= 12
     * $query->filterByServiceId(array('max' => 12)); // WHERE service_id <= 12
     * </code>
     *
     * @param     mixed $serviceId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByServiceId($serviceId = null, $comparison = null)
    {
        if (is_array($serviceId)) {
            $useMinMax = false;
            if (isset($serviceId['min'])) {
                $this->addUsingAlias(CommonAgentPeer::SERVICE_ID, $serviceId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($serviceId['max'])) {
                $this->addUsingAlias(CommonAgentPeer::SERVICE_ID, $serviceId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::SERVICE_ID, $serviceId, $comparison);
    }

    /**
     * Filter the query on the RECEVOIR_MAIL column
     *
     * Example usage:
     * <code>
     * $query->filterByRecevoirMail('fooValue');   // WHERE RECEVOIR_MAIL = 'fooValue'
     * $query->filterByRecevoirMail('%fooValue%'); // WHERE RECEVOIR_MAIL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $recevoirMail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByRecevoirMail($recevoirMail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($recevoirMail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $recevoirMail)) {
                $recevoirMail = str_replace('*', '%', $recevoirMail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::RECEVOIR_MAIL, $recevoirMail, $comparison);
    }

    /**
     * Filter the query on the elu column
     *
     * Example usage:
     * <code>
     * $query->filterByElu('fooValue');   // WHERE elu = 'fooValue'
     * $query->filterByElu('%fooValue%'); // WHERE elu LIKE '%fooValue%'
     * </code>
     *
     * @param     string $elu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByElu($elu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($elu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $elu)) {
                $elu = str_replace('*', '%', $elu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::ELU, $elu, $comparison);
    }

    /**
     * Filter the query on the nom_fonction column
     *
     * Example usage:
     * <code>
     * $query->filterByNomFonction('fooValue');   // WHERE nom_fonction = 'fooValue'
     * $query->filterByNomFonction('%fooValue%'); // WHERE nom_fonction LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomFonction The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByNomFonction($nomFonction = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomFonction)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomFonction)) {
                $nomFonction = str_replace('*', '%', $nomFonction);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::NOM_FONCTION, $nomFonction, $comparison);
    }

    /**
     * Filter the query on the num_tel column
     *
     * Example usage:
     * <code>
     * $query->filterByNumTel('fooValue');   // WHERE num_tel = 'fooValue'
     * $query->filterByNumTel('%fooValue%'); // WHERE num_tel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numTel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByNumTel($numTel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numTel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numTel)) {
                $numTel = str_replace('*', '%', $numTel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::NUM_TEL, $numTel, $comparison);
    }

    /**
     * Filter the query on the num_fax column
     *
     * Example usage:
     * <code>
     * $query->filterByNumFax('fooValue');   // WHERE num_fax = 'fooValue'
     * $query->filterByNumFax('%fooValue%'); // WHERE num_fax LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numFax The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByNumFax($numFax = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numFax)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numFax)) {
                $numFax = str_replace('*', '%', $numFax);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::NUM_FAX, $numFax, $comparison);
    }

    /**
     * Filter the query on the type_comm column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeComm('fooValue');   // WHERE type_comm = 'fooValue'
     * $query->filterByTypeComm('%fooValue%'); // WHERE type_comm LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeComm The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByTypeComm($typeComm = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeComm)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeComm)) {
                $typeComm = str_replace('*', '%', $typeComm);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::TYPE_COMM, $typeComm, $comparison);
    }

    /**
     * Filter the query on the adr_postale column
     *
     * Example usage:
     * <code>
     * $query->filterByAdrPostale('fooValue');   // WHERE adr_postale = 'fooValue'
     * $query->filterByAdrPostale('%fooValue%'); // WHERE adr_postale LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adrPostale The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByAdrPostale($adrPostale = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adrPostale)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adrPostale)) {
                $adrPostale = str_replace('*', '%', $adrPostale);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::ADR_POSTALE, $adrPostale, $comparison);
    }

    /**
     * Filter the query on the civilite column
     *
     * Example usage:
     * <code>
     * $query->filterByCivilite('fooValue');   // WHERE civilite = 'fooValue'
     * $query->filterByCivilite('%fooValue%'); // WHERE civilite LIKE '%fooValue%'
     * </code>
     *
     * @param     string $civilite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByCivilite($civilite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($civilite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $civilite)) {
                $civilite = str_replace('*', '%', $civilite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::CIVILITE, $civilite, $comparison);
    }

    /**
     * Filter the query on the alerte_reponse_electronique column
     *
     * Example usage:
     * <code>
     * $query->filterByAlerteReponseElectronique('fooValue');   // WHERE alerte_reponse_electronique = 'fooValue'
     * $query->filterByAlerteReponseElectronique('%fooValue%'); // WHERE alerte_reponse_electronique LIKE '%fooValue%'
     * </code>
     *
     * @param     string $alerteReponseElectronique The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByAlerteReponseElectronique($alerteReponseElectronique = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($alerteReponseElectronique)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $alerteReponseElectronique)) {
                $alerteReponseElectronique = str_replace('*', '%', $alerteReponseElectronique);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::ALERTE_REPONSE_ELECTRONIQUE, $alerteReponseElectronique, $comparison);
    }

    /**
     * Filter the query on the alerte_reception_mainlevee column
     *
     * Example usage:
     * <code>
     * $query->filterByAlerteReceptionMainlevee('fooValue');   // WHERE alerte_reception_mainlevee = 'fooValue'
     * $query->filterByAlerteReceptionMainlevee('%fooValue%'); // WHERE alerte_reception_mainlevee LIKE '%fooValue%'
     * </code>
     *
     * @param     string $alerteReceptionMainlevee The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByAlerteReceptionMainlevee($alerteReceptionMainlevee = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($alerteReceptionMainlevee)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $alerteReceptionMainlevee)) {
                $alerteReceptionMainlevee = str_replace('*', '%', $alerteReceptionMainlevee);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::ALERTE_RECEPTION_MAINLEVEE, $alerteReceptionMainlevee, $comparison);
    }

    /**
     * Filter the query on the alerte_cloture_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByAlerteClotureConsultation('fooValue');   // WHERE alerte_cloture_consultation = 'fooValue'
     * $query->filterByAlerteClotureConsultation('%fooValue%'); // WHERE alerte_cloture_consultation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $alerteClotureConsultation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByAlerteClotureConsultation($alerteClotureConsultation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($alerteClotureConsultation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $alerteClotureConsultation)) {
                $alerteClotureConsultation = str_replace('*', '%', $alerteClotureConsultation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::ALERTE_CLOTURE_CONSULTATION, $alerteClotureConsultation, $comparison);
    }

    /**
     * Filter the query on the alerte_reception_message column
     *
     * Example usage:
     * <code>
     * $query->filterByAlerteReceptionMessage('fooValue');   // WHERE alerte_reception_message = 'fooValue'
     * $query->filterByAlerteReceptionMessage('%fooValue%'); // WHERE alerte_reception_message LIKE '%fooValue%'
     * </code>
     *
     * @param     string $alerteReceptionMessage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByAlerteReceptionMessage($alerteReceptionMessage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($alerteReceptionMessage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $alerteReceptionMessage)) {
                $alerteReceptionMessage = str_replace('*', '%', $alerteReceptionMessage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::ALERTE_RECEPTION_MESSAGE, $alerteReceptionMessage, $comparison);
    }

    /**
     * Filter the query on the alerte_publication_boamp column
     *
     * Example usage:
     * <code>
     * $query->filterByAlertePublicationBoamp('fooValue');   // WHERE alerte_publication_boamp = 'fooValue'
     * $query->filterByAlertePublicationBoamp('%fooValue%'); // WHERE alerte_publication_boamp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $alertePublicationBoamp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByAlertePublicationBoamp($alertePublicationBoamp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($alertePublicationBoamp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $alertePublicationBoamp)) {
                $alertePublicationBoamp = str_replace('*', '%', $alertePublicationBoamp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::ALERTE_PUBLICATION_BOAMP, $alertePublicationBoamp, $comparison);
    }

    /**
     * Filter the query on the alerte_echec_publication_boamp column
     *
     * Example usage:
     * <code>
     * $query->filterByAlerteEchecPublicationBoamp('fooValue');   // WHERE alerte_echec_publication_boamp = 'fooValue'
     * $query->filterByAlerteEchecPublicationBoamp('%fooValue%'); // WHERE alerte_echec_publication_boamp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $alerteEchecPublicationBoamp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByAlerteEchecPublicationBoamp($alerteEchecPublicationBoamp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($alerteEchecPublicationBoamp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $alerteEchecPublicationBoamp)) {
                $alerteEchecPublicationBoamp = str_replace('*', '%', $alerteEchecPublicationBoamp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::ALERTE_ECHEC_PUBLICATION_BOAMP, $alerteEchecPublicationBoamp, $comparison);
    }

    /**
     * Filter the query on the alerte_creation_modification_agent column
     *
     * Example usage:
     * <code>
     * $query->filterByAlerteCreationModificationAgent('fooValue');   // WHERE alerte_creation_modification_agent = 'fooValue'
     * $query->filterByAlerteCreationModificationAgent('%fooValue%'); // WHERE alerte_creation_modification_agent LIKE '%fooValue%'
     * </code>
     *
     * @param     string $alerteCreationModificationAgent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByAlerteCreationModificationAgent($alerteCreationModificationAgent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($alerteCreationModificationAgent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $alerteCreationModificationAgent)) {
                $alerteCreationModificationAgent = str_replace('*', '%', $alerteCreationModificationAgent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::ALERTE_CREATION_MODIFICATION_AGENT, $alerteCreationModificationAgent, $comparison);
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
     * @return CommonAgentQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonAgentPeer::DATE_CREATION, $dateCreation, $comparison);
    }

    /**
     * Filter the query on the date_modification column
     *
     * Example usage:
     * <code>
     * $query->filterByDateModification('fooValue');   // WHERE date_modification = 'fooValue'
     * $query->filterByDateModification('%fooValue%'); // WHERE date_modification LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateModification The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByDateModification($dateModification = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateModification)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateModification)) {
                $dateModification = str_replace('*', '%', $dateModification);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::DATE_MODIFICATION, $dateModification, $comparison);
    }

    /**
     * Filter the query on the id_initial column
     *
     * Example usage:
     * <code>
     * $query->filterByIdInitial(1234); // WHERE id_initial = 1234
     * $query->filterByIdInitial(array(12, 34)); // WHERE id_initial IN (12, 34)
     * $query->filterByIdInitial(array('min' => 12)); // WHERE id_initial >= 12
     * $query->filterByIdInitial(array('max' => 12)); // WHERE id_initial <= 12
     * </code>
     *
     * @param     mixed $idInitial The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByIdInitial($idInitial = null, $comparison = null)
    {
        if (is_array($idInitial)) {
            $useMinMax = false;
            if (isset($idInitial['min'])) {
                $this->addUsingAlias(CommonAgentPeer::ID_INITIAL, $idInitial['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idInitial['max'])) {
                $this->addUsingAlias(CommonAgentPeer::ID_INITIAL, $idInitial['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::ID_INITIAL, $idInitial, $comparison);
    }

    /**
     * Filter the query on the id_profil_socle_externe column
     *
     * Example usage:
     * <code>
     * $query->filterByIdProfilSocleExterne(1234); // WHERE id_profil_socle_externe = 1234
     * $query->filterByIdProfilSocleExterne(array(12, 34)); // WHERE id_profil_socle_externe IN (12, 34)
     * $query->filterByIdProfilSocleExterne(array('min' => 12)); // WHERE id_profil_socle_externe >= 12
     * $query->filterByIdProfilSocleExterne(array('max' => 12)); // WHERE id_profil_socle_externe <= 12
     * </code>
     *
     * @param     mixed $idProfilSocleExterne The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByIdProfilSocleExterne($idProfilSocleExterne = null, $comparison = null)
    {
        if (is_array($idProfilSocleExterne)) {
            $useMinMax = false;
            if (isset($idProfilSocleExterne['min'])) {
                $this->addUsingAlias(CommonAgentPeer::ID_PROFIL_SOCLE_EXTERNE, $idProfilSocleExterne['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idProfilSocleExterne['max'])) {
                $this->addUsingAlias(CommonAgentPeer::ID_PROFIL_SOCLE_EXTERNE, $idProfilSocleExterne['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::ID_PROFIL_SOCLE_EXTERNE, $idProfilSocleExterne, $comparison);
    }

    /**
     * Filter the query on the lieu_execution column
     *
     * Example usage:
     * <code>
     * $query->filterByLieuExecution('fooValue');   // WHERE lieu_execution = 'fooValue'
     * $query->filterByLieuExecution('%fooValue%'); // WHERE lieu_execution LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lieuExecution The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByLieuExecution($lieuExecution = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lieuExecution)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lieuExecution)) {
                $lieuExecution = str_replace('*', '%', $lieuExecution);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::LIEU_EXECUTION, $lieuExecution, $comparison);
    }

    /**
     * Filter the query on the alerte_question_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByAlerteQuestionEntreprise('fooValue');   // WHERE alerte_question_entreprise = 'fooValue'
     * $query->filterByAlerteQuestionEntreprise('%fooValue%'); // WHERE alerte_question_entreprise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $alerteQuestionEntreprise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByAlerteQuestionEntreprise($alerteQuestionEntreprise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($alerteQuestionEntreprise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $alerteQuestionEntreprise)) {
                $alerteQuestionEntreprise = str_replace('*', '%', $alerteQuestionEntreprise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::ALERTE_QUESTION_ENTREPRISE, $alerteQuestionEntreprise, $comparison);
    }

    /**
     * Filter the query on the actif column
     *
     * Example usage:
     * <code>
     * $query->filterByActif('fooValue');   // WHERE actif = 'fooValue'
     * $query->filterByActif('%fooValue%'); // WHERE actif LIKE '%fooValue%'
     * </code>
     *
     * @param     string $actif The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByActif($actif = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($actif)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $actif)) {
                $actif = str_replace('*', '%', $actif);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::ACTIF, $actif, $comparison);
    }

    /**
     * Filter the query on the codes_nuts column
     *
     * Example usage:
     * <code>
     * $query->filterByCodesNuts('fooValue');   // WHERE codes_nuts = 'fooValue'
     * $query->filterByCodesNuts('%fooValue%'); // WHERE codes_nuts LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codesNuts The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByCodesNuts($codesNuts = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codesNuts)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codesNuts)) {
                $codesNuts = str_replace('*', '%', $codesNuts);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::CODES_NUTS, $codesNuts, $comparison);
    }

    /**
     * Filter the query on the num_certificat column
     *
     * Example usage:
     * <code>
     * $query->filterByNumCertificat('fooValue');   // WHERE num_certificat = 'fooValue'
     * $query->filterByNumCertificat('%fooValue%'); // WHERE num_certificat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numCertificat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByNumCertificat($numCertificat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numCertificat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numCertificat)) {
                $numCertificat = str_replace('*', '%', $numCertificat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::NUM_CERTIFICAT, $numCertificat, $comparison);
    }

    /**
     * Filter the query on the alerte_validation_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByAlerteValidationConsultation('fooValue');   // WHERE alerte_validation_consultation = 'fooValue'
     * $query->filterByAlerteValidationConsultation('%fooValue%'); // WHERE alerte_validation_consultation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $alerteValidationConsultation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByAlerteValidationConsultation($alerteValidationConsultation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($alerteValidationConsultation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $alerteValidationConsultation)) {
                $alerteValidationConsultation = str_replace('*', '%', $alerteValidationConsultation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::ALERTE_VALIDATION_CONSULTATION, $alerteValidationConsultation, $comparison);
    }

    /**
     * Filter the query on the alerte_chorus column
     *
     * Example usage:
     * <code>
     * $query->filterByAlerteChorus('fooValue');   // WHERE alerte_chorus = 'fooValue'
     * $query->filterByAlerteChorus('%fooValue%'); // WHERE alerte_chorus LIKE '%fooValue%'
     * </code>
     *
     * @param     string $alerteChorus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByAlerteChorus($alerteChorus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($alerteChorus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $alerteChorus)) {
                $alerteChorus = str_replace('*', '%', $alerteChorus);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::ALERTE_CHORUS, $alerteChorus, $comparison);
    }

    /**
     * Filter the query on the password column
     *
     * Example usage:
     * <code>
     * $query->filterByPassword('fooValue');   // WHERE password = 'fooValue'
     * $query->filterByPassword('%fooValue%'); // WHERE password LIKE '%fooValue%'
     * </code>
     *
     * @param     string $password The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByPassword($password = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($password)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $password)) {
                $password = str_replace('*', '%', $password);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::PASSWORD, $password, $comparison);
    }

    /**
     * Filter the query on the code_theme column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeTheme('fooValue');   // WHERE code_theme = 'fooValue'
     * $query->filterByCodeTheme('%fooValue%'); // WHERE code_theme LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codeTheme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByCodeTheme($codeTheme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codeTheme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codeTheme)) {
                $codeTheme = str_replace('*', '%', $codeTheme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::CODE_THEME, $codeTheme, $comparison);
    }

    /**
     * Filter the query on the tentative_recup_mdp column
     *
     * Example usage:
     * <code>
     * $query->filterByTentativeRecupMdp(1234); // WHERE tentative_recup_mdp = 1234
     * $query->filterByTentativeRecupMdp(array(12, 34)); // WHERE tentative_recup_mdp IN (12, 34)
     * $query->filterByTentativeRecupMdp(array('min' => 12)); // WHERE tentative_recup_mdp >= 12
     * $query->filterByTentativeRecupMdp(array('max' => 12)); // WHERE tentative_recup_mdp <= 12
     * </code>
     *
     * @param     mixed $tentativeRecupMdp The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByTentativeRecupMdp($tentativeRecupMdp = null, $comparison = null)
    {
        if (is_array($tentativeRecupMdp)) {
            $useMinMax = false;
            if (isset($tentativeRecupMdp['min'])) {
                $this->addUsingAlias(CommonAgentPeer::TENTATIVE_RECUP_MDP, $tentativeRecupMdp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tentativeRecupMdp['max'])) {
                $this->addUsingAlias(CommonAgentPeer::TENTATIVE_RECUP_MDP, $tentativeRecupMdp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::TENTATIVE_RECUP_MDP, $tentativeRecupMdp, $comparison);
    }

    /**
     * Filter the query on the date_tentative_recup_mdp column
     *
     * Example usage:
     * <code>
     * $query->filterByDateTentativeRecupMdp('2011-03-14'); // WHERE date_tentative_recup_mdp = '2011-03-14'
     * $query->filterByDateTentativeRecupMdp('now'); // WHERE date_tentative_recup_mdp = '2011-03-14'
     * $query->filterByDateTentativeRecupMdp(array('max' => 'yesterday')); // WHERE date_tentative_recup_mdp > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateTentativeRecupMdp The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function filterByDateTentativeRecupMdp($dateTentativeRecupMdp = null, $comparison = null)
    {
        if (is_array($dateTentativeRecupMdp)) {
            $useMinMax = false;
            if (isset($dateTentativeRecupMdp['min'])) {
                $this->addUsingAlias(CommonAgentPeer::DATE_TENTATIVE_RECUP_MDP, $dateTentativeRecupMdp['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateTentativeRecupMdp['max'])) {
                $this->addUsingAlias(CommonAgentPeer::DATE_TENTATIVE_RECUP_MDP, $dateTentativeRecupMdp['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAgentPeer::DATE_TENTATIVE_RECUP_MDP, $dateTentativeRecupMdp, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonAgent $commonAgent Object to remove from the list of results
     *
     * @return CommonAgentQuery The current query, for fluid interface
     */
    public function prune($commonAgent = null)
    {
        if ($commonAgent) {
            $this->addUsingAlias(CommonAgentPeer::ID, $commonAgent->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
