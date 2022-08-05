<?php


/**
 * Base class that represents a query for the 'Enveloppe' table.
 *
 * 
 *
 * @method CommonEnveloppeQuery orderByIdEnveloppeElectro($order = Criteria::ASC) Order by the id_enveloppe_electro column
 * @method CommonEnveloppeQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonEnveloppeQuery orderByOffreId($order = Criteria::ASC) Order by the offre_id column
 * @method CommonEnveloppeQuery orderByChampsOptionnels($order = Criteria::ASC) Order by the champs_optionnels column
 * @method CommonEnveloppeQuery orderByFichier($order = Criteria::ASC) Order by the fichier column
 * @method CommonEnveloppeQuery orderBySupprime($order = Criteria::ASC) Order by the supprime column
 * @method CommonEnveloppeQuery orderByCryptage($order = Criteria::ASC) Order by the cryptage column
 * @method CommonEnveloppeQuery orderByNomFichier($order = Criteria::ASC) Order by the nom_fichier column
 * @method CommonEnveloppeQuery orderByHash($order = Criteria::ASC) Order by the hash column
 * @method CommonEnveloppeQuery orderByTypeEnv($order = Criteria::ASC) Order by the type_env column
 * @method CommonEnveloppeQuery orderBySousPli($order = Criteria::ASC) Order by the sous_pli column
 * @method CommonEnveloppeQuery orderByAttribue($order = Criteria::ASC) Order by the attribue column
 * @method CommonEnveloppeQuery orderByDateheureOuverture($order = Criteria::ASC) Order by the dateheure_ouverture column
 * @method CommonEnveloppeQuery orderByAgentIdOuverture($order = Criteria::ASC) Order by the agent_id_ouverture column
 * @method CommonEnveloppeQuery orderByAgentIdOuverture2($order = Criteria::ASC) Order by the agent_id_ouverture2 column
 * @method CommonEnveloppeQuery orderByDonneesOuverture($order = Criteria::ASC) Order by the donnees_ouverture column
 * @method CommonEnveloppeQuery orderByHorodatageDonneesOuverture($order = Criteria::ASC) Order by the horodatage_donnees_ouverture column
 * @method CommonEnveloppeQuery orderByStatutEnveloppe($order = Criteria::ASC) Order by the statut_enveloppe column
 * @method CommonEnveloppeQuery orderByAgentTelechargement($order = Criteria::ASC) Order by the agent_telechargement column
 * @method CommonEnveloppeQuery orderByDateTelechargement($order = Criteria::ASC) Order by the date_telechargement column
 * @method CommonEnveloppeQuery orderByRepertoireTelechargement($order = Criteria::ASC) Order by the repertoire_telechargement column
 * @method CommonEnveloppeQuery orderByNomAgentOuverture($order = Criteria::ASC) Order by the nom_agent_ouverture column
 * @method CommonEnveloppeQuery orderByDateheureOuvertureAgent2($order = Criteria::ASC) Order by the dateheure_ouverture_agent2 column
 * @method CommonEnveloppeQuery orderByCertificat($order = Criteria::ASC) Order by the certificat column
 * @method CommonEnveloppeQuery orderByMontant($order = Criteria::ASC) Order by the montant column
 * @method CommonEnveloppeQuery orderByMontantApresModification($order = Criteria::ASC) Order by the montant_apres_modification column
 * @method CommonEnveloppeQuery orderByTypeAttributaire($order = Criteria::ASC) Order by the type_attributaire column
 * @method CommonEnveloppeQuery orderByDevise($order = Criteria::ASC) Order by the devise column
 * @method CommonEnveloppeQuery orderByRabaisPreferenceNational($order = Criteria::ASC) Order by the rabais_preference_national column
 * @method CommonEnveloppeQuery orderByTypeCorrectionMontant($order = Criteria::ASC) Order by the type_correction_montant column
 *
 * @method CommonEnveloppeQuery groupByIdEnveloppeElectro() Group by the id_enveloppe_electro column
 * @method CommonEnveloppeQuery groupByOrganisme() Group by the organisme column
 * @method CommonEnveloppeQuery groupByOffreId() Group by the offre_id column
 * @method CommonEnveloppeQuery groupByChampsOptionnels() Group by the champs_optionnels column
 * @method CommonEnveloppeQuery groupByFichier() Group by the fichier column
 * @method CommonEnveloppeQuery groupBySupprime() Group by the supprime column
 * @method CommonEnveloppeQuery groupByCryptage() Group by the cryptage column
 * @method CommonEnveloppeQuery groupByNomFichier() Group by the nom_fichier column
 * @method CommonEnveloppeQuery groupByHash() Group by the hash column
 * @method CommonEnveloppeQuery groupByTypeEnv() Group by the type_env column
 * @method CommonEnveloppeQuery groupBySousPli() Group by the sous_pli column
 * @method CommonEnveloppeQuery groupByAttribue() Group by the attribue column
 * @method CommonEnveloppeQuery groupByDateheureOuverture() Group by the dateheure_ouverture column
 * @method CommonEnveloppeQuery groupByAgentIdOuverture() Group by the agent_id_ouverture column
 * @method CommonEnveloppeQuery groupByAgentIdOuverture2() Group by the agent_id_ouverture2 column
 * @method CommonEnveloppeQuery groupByDonneesOuverture() Group by the donnees_ouverture column
 * @method CommonEnveloppeQuery groupByHorodatageDonneesOuverture() Group by the horodatage_donnees_ouverture column
 * @method CommonEnveloppeQuery groupByStatutEnveloppe() Group by the statut_enveloppe column
 * @method CommonEnveloppeQuery groupByAgentTelechargement() Group by the agent_telechargement column
 * @method CommonEnveloppeQuery groupByDateTelechargement() Group by the date_telechargement column
 * @method CommonEnveloppeQuery groupByRepertoireTelechargement() Group by the repertoire_telechargement column
 * @method CommonEnveloppeQuery groupByNomAgentOuverture() Group by the nom_agent_ouverture column
 * @method CommonEnveloppeQuery groupByDateheureOuvertureAgent2() Group by the dateheure_ouverture_agent2 column
 * @method CommonEnveloppeQuery groupByCertificat() Group by the certificat column
 * @method CommonEnveloppeQuery groupByMontant() Group by the montant column
 * @method CommonEnveloppeQuery groupByMontantApresModification() Group by the montant_apres_modification column
 * @method CommonEnveloppeQuery groupByTypeAttributaire() Group by the type_attributaire column
 * @method CommonEnveloppeQuery groupByDevise() Group by the devise column
 * @method CommonEnveloppeQuery groupByRabaisPreferenceNational() Group by the rabais_preference_national column
 * @method CommonEnveloppeQuery groupByTypeCorrectionMontant() Group by the type_correction_montant column
 *
 * @method CommonEnveloppeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonEnveloppeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonEnveloppeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonEnveloppe findOne(PropelPDO $con = null) Return the first CommonEnveloppe matching the query
 * @method CommonEnveloppe findOneOrCreate(PropelPDO $con = null) Return the first CommonEnveloppe matching the query, or a new CommonEnveloppe object populated from the query conditions when no match is found
 *
 * @method CommonEnveloppe findOneByIdEnveloppeElectro(int $id_enveloppe_electro) Return the first CommonEnveloppe filtered by the id_enveloppe_electro column
 * @method CommonEnveloppe findOneByOrganisme(string $organisme) Return the first CommonEnveloppe filtered by the organisme column
 * @method CommonEnveloppe findOneByOffreId(int $offre_id) Return the first CommonEnveloppe filtered by the offre_id column
 * @method CommonEnveloppe findOneByChampsOptionnels(resource $champs_optionnels) Return the first CommonEnveloppe filtered by the champs_optionnels column
 * @method CommonEnveloppe findOneByFichier(int $fichier) Return the first CommonEnveloppe filtered by the fichier column
 * @method CommonEnveloppe findOneBySupprime(string $supprime) Return the first CommonEnveloppe filtered by the supprime column
 * @method CommonEnveloppe findOneByCryptage(string $cryptage) Return the first CommonEnveloppe filtered by the cryptage column
 * @method CommonEnveloppe findOneByNomFichier(string $nom_fichier) Return the first CommonEnveloppe filtered by the nom_fichier column
 * @method CommonEnveloppe findOneByHash(string $hash) Return the first CommonEnveloppe filtered by the hash column
 * @method CommonEnveloppe findOneByTypeEnv(int $type_env) Return the first CommonEnveloppe filtered by the type_env column
 * @method CommonEnveloppe findOneBySousPli(int $sous_pli) Return the first CommonEnveloppe filtered by the sous_pli column
 * @method CommonEnveloppe findOneByAttribue(string $attribue) Return the first CommonEnveloppe filtered by the attribue column
 * @method CommonEnveloppe findOneByDateheureOuverture(string $dateheure_ouverture) Return the first CommonEnveloppe filtered by the dateheure_ouverture column
 * @method CommonEnveloppe findOneByAgentIdOuverture(int $agent_id_ouverture) Return the first CommonEnveloppe filtered by the agent_id_ouverture column
 * @method CommonEnveloppe findOneByAgentIdOuverture2(int $agent_id_ouverture2) Return the first CommonEnveloppe filtered by the agent_id_ouverture2 column
 * @method CommonEnveloppe findOneByDonneesOuverture(resource $donnees_ouverture) Return the first CommonEnveloppe filtered by the donnees_ouverture column
 * @method CommonEnveloppe findOneByHorodatageDonneesOuverture(resource $horodatage_donnees_ouverture) Return the first CommonEnveloppe filtered by the horodatage_donnees_ouverture column
 * @method CommonEnveloppe findOneByStatutEnveloppe(int $statut_enveloppe) Return the first CommonEnveloppe filtered by the statut_enveloppe column
 * @method CommonEnveloppe findOneByAgentTelechargement(int $agent_telechargement) Return the first CommonEnveloppe filtered by the agent_telechargement column
 * @method CommonEnveloppe findOneByDateTelechargement(string $date_telechargement) Return the first CommonEnveloppe filtered by the date_telechargement column
 * @method CommonEnveloppe findOneByRepertoireTelechargement(string $repertoire_telechargement) Return the first CommonEnveloppe filtered by the repertoire_telechargement column
 * @method CommonEnveloppe findOneByNomAgentOuverture(string $nom_agent_ouverture) Return the first CommonEnveloppe filtered by the nom_agent_ouverture column
 * @method CommonEnveloppe findOneByDateheureOuvertureAgent2(string $dateheure_ouverture_agent2) Return the first CommonEnveloppe filtered by the dateheure_ouverture_agent2 column
 * @method CommonEnveloppe findOneByCertificat(string $certificat) Return the first CommonEnveloppe filtered by the certificat column
 * @method CommonEnveloppe findOneByMontant(double $montant) Return the first CommonEnveloppe filtered by the montant column
 * @method CommonEnveloppe findOneByMontantApresModification(double $montant_apres_modification) Return the first CommonEnveloppe filtered by the montant_apres_modification column
 * @method CommonEnveloppe findOneByTypeAttributaire(string $type_attributaire) Return the first CommonEnveloppe filtered by the type_attributaire column
 * @method CommonEnveloppe findOneByDevise(string $devise) Return the first CommonEnveloppe filtered by the devise column
 * @method CommonEnveloppe findOneByRabaisPreferenceNational(string $rabais_preference_national) Return the first CommonEnveloppe filtered by the rabais_preference_national column
 * @method CommonEnveloppe findOneByTypeCorrectionMontant(string $type_correction_montant) Return the first CommonEnveloppe filtered by the type_correction_montant column
 *
 * @method array findByIdEnveloppeElectro(int $id_enveloppe_electro) Return CommonEnveloppe objects filtered by the id_enveloppe_electro column
 * @method array findByOrganisme(string $organisme) Return CommonEnveloppe objects filtered by the organisme column
 * @method array findByOffreId(int $offre_id) Return CommonEnveloppe objects filtered by the offre_id column
 * @method array findByChampsOptionnels(resource $champs_optionnels) Return CommonEnveloppe objects filtered by the champs_optionnels column
 * @method array findByFichier(int $fichier) Return CommonEnveloppe objects filtered by the fichier column
 * @method array findBySupprime(string $supprime) Return CommonEnveloppe objects filtered by the supprime column
 * @method array findByCryptage(string $cryptage) Return CommonEnveloppe objects filtered by the cryptage column
 * @method array findByNomFichier(string $nom_fichier) Return CommonEnveloppe objects filtered by the nom_fichier column
 * @method array findByHash(string $hash) Return CommonEnveloppe objects filtered by the hash column
 * @method array findByTypeEnv(int $type_env) Return CommonEnveloppe objects filtered by the type_env column
 * @method array findBySousPli(int $sous_pli) Return CommonEnveloppe objects filtered by the sous_pli column
 * @method array findByAttribue(string $attribue) Return CommonEnveloppe objects filtered by the attribue column
 * @method array findByDateheureOuverture(string $dateheure_ouverture) Return CommonEnveloppe objects filtered by the dateheure_ouverture column
 * @method array findByAgentIdOuverture(int $agent_id_ouverture) Return CommonEnveloppe objects filtered by the agent_id_ouverture column
 * @method array findByAgentIdOuverture2(int $agent_id_ouverture2) Return CommonEnveloppe objects filtered by the agent_id_ouverture2 column
 * @method array findByDonneesOuverture(resource $donnees_ouverture) Return CommonEnveloppe objects filtered by the donnees_ouverture column
 * @method array findByHorodatageDonneesOuverture(resource $horodatage_donnees_ouverture) Return CommonEnveloppe objects filtered by the horodatage_donnees_ouverture column
 * @method array findByStatutEnveloppe(int $statut_enveloppe) Return CommonEnveloppe objects filtered by the statut_enveloppe column
 * @method array findByAgentTelechargement(int $agent_telechargement) Return CommonEnveloppe objects filtered by the agent_telechargement column
 * @method array findByDateTelechargement(string $date_telechargement) Return CommonEnveloppe objects filtered by the date_telechargement column
 * @method array findByRepertoireTelechargement(string $repertoire_telechargement) Return CommonEnveloppe objects filtered by the repertoire_telechargement column
 * @method array findByNomAgentOuverture(string $nom_agent_ouverture) Return CommonEnveloppe objects filtered by the nom_agent_ouverture column
 * @method array findByDateheureOuvertureAgent2(string $dateheure_ouverture_agent2) Return CommonEnveloppe objects filtered by the dateheure_ouverture_agent2 column
 * @method array findByCertificat(string $certificat) Return CommonEnveloppe objects filtered by the certificat column
 * @method array findByMontant(double $montant) Return CommonEnveloppe objects filtered by the montant column
 * @method array findByMontantApresModification(double $montant_apres_modification) Return CommonEnveloppe objects filtered by the montant_apres_modification column
 * @method array findByTypeAttributaire(string $type_attributaire) Return CommonEnveloppe objects filtered by the type_attributaire column
 * @method array findByDevise(string $devise) Return CommonEnveloppe objects filtered by the devise column
 * @method array findByRabaisPreferenceNational(string $rabais_preference_national) Return CommonEnveloppe objects filtered by the rabais_preference_national column
 * @method array findByTypeCorrectionMontant(string $type_correction_montant) Return CommonEnveloppe objects filtered by the type_correction_montant column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonEnveloppeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonEnveloppeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonEnveloppe', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonEnveloppeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonEnveloppeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonEnveloppeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonEnveloppeQuery) {
            return $criteria;
        }
        $query = new CommonEnveloppeQuery();
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
                         A Primary key composition: [$id_enveloppe_electro, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonEnveloppe|CommonEnveloppe[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonEnveloppePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonEnveloppePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonEnveloppe A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_enveloppe_electro`, `organisme`, `offre_id`, `champs_optionnels`, `fichier`, `supprime`, `cryptage`, `nom_fichier`, `hash`, `type_env`, `sous_pli`, `attribue`, `dateheure_ouverture`, `agent_id_ouverture`, `agent_id_ouverture2`, `donnees_ouverture`, `horodatage_donnees_ouverture`, `statut_enveloppe`, `agent_telechargement`, `date_telechargement`, `repertoire_telechargement`, `nom_agent_ouverture`, `dateheure_ouverture_agent2`, `certificat`, `montant`, `montant_apres_modification`, `type_attributaire`, `devise`, `rabais_preference_national`, `type_correction_montant` FROM `Enveloppe` WHERE `id_enveloppe_electro` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonEnveloppe();
            $obj->hydrate($row);
            CommonEnveloppePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonEnveloppe|CommonEnveloppe[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonEnveloppe[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonEnveloppeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonEnveloppePeer::ID_ENVELOPPE_ELECTRO, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonEnveloppePeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonEnveloppeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonEnveloppePeer::ID_ENVELOPPE_ELECTRO, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonEnveloppePeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the id_enveloppe_electro column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEnveloppeElectro(1234); // WHERE id_enveloppe_electro = 1234
     * $query->filterByIdEnveloppeElectro(array(12, 34)); // WHERE id_enveloppe_electro IN (12, 34)
     * $query->filterByIdEnveloppeElectro(array('min' => 12)); // WHERE id_enveloppe_electro >= 12
     * $query->filterByIdEnveloppeElectro(array('max' => 12)); // WHERE id_enveloppe_electro <= 12
     * </code>
     *
     * @param     mixed $idEnveloppeElectro The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppeQuery The current query, for fluid interface
     */
    public function filterByIdEnveloppeElectro($idEnveloppeElectro = null, $comparison = null)
    {
        if (is_array($idEnveloppeElectro)) {
            $useMinMax = false;
            if (isset($idEnveloppeElectro['min'])) {
                $this->addUsingAlias(CommonEnveloppePeer::ID_ENVELOPPE_ELECTRO, $idEnveloppeElectro['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEnveloppeElectro['max'])) {
                $this->addUsingAlias(CommonEnveloppePeer::ID_ENVELOPPE_ELECTRO, $idEnveloppeElectro['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnveloppePeer::ID_ENVELOPPE_ELECTRO, $idEnveloppeElectro, $comparison);
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
     * @return CommonEnveloppeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEnveloppePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the offre_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOffreId(1234); // WHERE offre_id = 1234
     * $query->filterByOffreId(array(12, 34)); // WHERE offre_id IN (12, 34)
     * $query->filterByOffreId(array('min' => 12)); // WHERE offre_id >= 12
     * $query->filterByOffreId(array('max' => 12)); // WHERE offre_id <= 12
     * </code>
     *
     * @param     mixed $offreId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppeQuery The current query, for fluid interface
     */
    public function filterByOffreId($offreId = null, $comparison = null)
    {
        if (is_array($offreId)) {
            $useMinMax = false;
            if (isset($offreId['min'])) {
                $this->addUsingAlias(CommonEnveloppePeer::OFFRE_ID, $offreId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($offreId['max'])) {
                $this->addUsingAlias(CommonEnveloppePeer::OFFRE_ID, $offreId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnveloppePeer::OFFRE_ID, $offreId, $comparison);
    }

    /**
     * Filter the query on the champs_optionnels column
     *
     * @param     mixed $champsOptionnels The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppeQuery The current query, for fluid interface
     */
    public function filterByChampsOptionnels($champsOptionnels = null, $comparison = null)
    {

        return $this->addUsingAlias(CommonEnveloppePeer::CHAMPS_OPTIONNELS, $champsOptionnels, $comparison);
    }

    /**
     * Filter the query on the fichier column
     *
     * Example usage:
     * <code>
     * $query->filterByFichier(1234); // WHERE fichier = 1234
     * $query->filterByFichier(array(12, 34)); // WHERE fichier IN (12, 34)
     * $query->filterByFichier(array('min' => 12)); // WHERE fichier >= 12
     * $query->filterByFichier(array('max' => 12)); // WHERE fichier <= 12
     * </code>
     *
     * @param     mixed $fichier The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppeQuery The current query, for fluid interface
     */
    public function filterByFichier($fichier = null, $comparison = null)
    {
        if (is_array($fichier)) {
            $useMinMax = false;
            if (isset($fichier['min'])) {
                $this->addUsingAlias(CommonEnveloppePeer::FICHIER, $fichier['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fichier['max'])) {
                $this->addUsingAlias(CommonEnveloppePeer::FICHIER, $fichier['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnveloppePeer::FICHIER, $fichier, $comparison);
    }

    /**
     * Filter the query on the supprime column
     *
     * Example usage:
     * <code>
     * $query->filterBySupprime('fooValue');   // WHERE supprime = 'fooValue'
     * $query->filterBySupprime('%fooValue%'); // WHERE supprime LIKE '%fooValue%'
     * </code>
     *
     * @param     string $supprime The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppeQuery The current query, for fluid interface
     */
    public function filterBySupprime($supprime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($supprime)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $supprime)) {
                $supprime = str_replace('*', '%', $supprime);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEnveloppePeer::SUPPRIME, $supprime, $comparison);
    }

    /**
     * Filter the query on the cryptage column
     *
     * Example usage:
     * <code>
     * $query->filterByCryptage('fooValue');   // WHERE cryptage = 'fooValue'
     * $query->filterByCryptage('%fooValue%'); // WHERE cryptage LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cryptage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppeQuery The current query, for fluid interface
     */
    public function filterByCryptage($cryptage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cryptage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cryptage)) {
                $cryptage = str_replace('*', '%', $cryptage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEnveloppePeer::CRYPTAGE, $cryptage, $comparison);
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
     * @return CommonEnveloppeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEnveloppePeer::NOM_FICHIER, $nomFichier, $comparison);
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
     * @return CommonEnveloppeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEnveloppePeer::HASH, $hash, $comparison);
    }

    /**
     * Filter the query on the type_env column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeEnv(1234); // WHERE type_env = 1234
     * $query->filterByTypeEnv(array(12, 34)); // WHERE type_env IN (12, 34)
     * $query->filterByTypeEnv(array('min' => 12)); // WHERE type_env >= 12
     * $query->filterByTypeEnv(array('max' => 12)); // WHERE type_env <= 12
     * </code>
     *
     * @param     mixed $typeEnv The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppeQuery The current query, for fluid interface
     */
    public function filterByTypeEnv($typeEnv = null, $comparison = null)
    {
        if (is_array($typeEnv)) {
            $useMinMax = false;
            if (isset($typeEnv['min'])) {
                $this->addUsingAlias(CommonEnveloppePeer::TYPE_ENV, $typeEnv['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeEnv['max'])) {
                $this->addUsingAlias(CommonEnveloppePeer::TYPE_ENV, $typeEnv['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnveloppePeer::TYPE_ENV, $typeEnv, $comparison);
    }

    /**
     * Filter the query on the sous_pli column
     *
     * Example usage:
     * <code>
     * $query->filterBySousPli(1234); // WHERE sous_pli = 1234
     * $query->filterBySousPli(array(12, 34)); // WHERE sous_pli IN (12, 34)
     * $query->filterBySousPli(array('min' => 12)); // WHERE sous_pli >= 12
     * $query->filterBySousPli(array('max' => 12)); // WHERE sous_pli <= 12
     * </code>
     *
     * @param     mixed $sousPli The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppeQuery The current query, for fluid interface
     */
    public function filterBySousPli($sousPli = null, $comparison = null)
    {
        if (is_array($sousPli)) {
            $useMinMax = false;
            if (isset($sousPli['min'])) {
                $this->addUsingAlias(CommonEnveloppePeer::SOUS_PLI, $sousPli['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sousPli['max'])) {
                $this->addUsingAlias(CommonEnveloppePeer::SOUS_PLI, $sousPli['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnveloppePeer::SOUS_PLI, $sousPli, $comparison);
    }

    /**
     * Filter the query on the attribue column
     *
     * Example usage:
     * <code>
     * $query->filterByAttribue('fooValue');   // WHERE attribue = 'fooValue'
     * $query->filterByAttribue('%fooValue%'); // WHERE attribue LIKE '%fooValue%'
     * </code>
     *
     * @param     string $attribue The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppeQuery The current query, for fluid interface
     */
    public function filterByAttribue($attribue = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($attribue)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $attribue)) {
                $attribue = str_replace('*', '%', $attribue);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEnveloppePeer::ATTRIBUE, $attribue, $comparison);
    }

    /**
     * Filter the query on the dateheure_ouverture column
     *
     * Example usage:
     * <code>
     * $query->filterByDateheureOuverture('fooValue');   // WHERE dateheure_ouverture = 'fooValue'
     * $query->filterByDateheureOuverture('%fooValue%'); // WHERE dateheure_ouverture LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateheureOuverture The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppeQuery The current query, for fluid interface
     */
    public function filterByDateheureOuverture($dateheureOuverture = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateheureOuverture)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateheureOuverture)) {
                $dateheureOuverture = str_replace('*', '%', $dateheureOuverture);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEnveloppePeer::DATEHEURE_OUVERTURE, $dateheureOuverture, $comparison);
    }

    /**
     * Filter the query on the agent_id_ouverture column
     *
     * Example usage:
     * <code>
     * $query->filterByAgentIdOuverture(1234); // WHERE agent_id_ouverture = 1234
     * $query->filterByAgentIdOuverture(array(12, 34)); // WHERE agent_id_ouverture IN (12, 34)
     * $query->filterByAgentIdOuverture(array('min' => 12)); // WHERE agent_id_ouverture >= 12
     * $query->filterByAgentIdOuverture(array('max' => 12)); // WHERE agent_id_ouverture <= 12
     * </code>
     *
     * @param     mixed $agentIdOuverture The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppeQuery The current query, for fluid interface
     */
    public function filterByAgentIdOuverture($agentIdOuverture = null, $comparison = null)
    {
        if (is_array($agentIdOuverture)) {
            $useMinMax = false;
            if (isset($agentIdOuverture['min'])) {
                $this->addUsingAlias(CommonEnveloppePeer::AGENT_ID_OUVERTURE, $agentIdOuverture['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($agentIdOuverture['max'])) {
                $this->addUsingAlias(CommonEnveloppePeer::AGENT_ID_OUVERTURE, $agentIdOuverture['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnveloppePeer::AGENT_ID_OUVERTURE, $agentIdOuverture, $comparison);
    }

    /**
     * Filter the query on the agent_id_ouverture2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAgentIdOuverture2(1234); // WHERE agent_id_ouverture2 = 1234
     * $query->filterByAgentIdOuverture2(array(12, 34)); // WHERE agent_id_ouverture2 IN (12, 34)
     * $query->filterByAgentIdOuverture2(array('min' => 12)); // WHERE agent_id_ouverture2 >= 12
     * $query->filterByAgentIdOuverture2(array('max' => 12)); // WHERE agent_id_ouverture2 <= 12
     * </code>
     *
     * @param     mixed $agentIdOuverture2 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppeQuery The current query, for fluid interface
     */
    public function filterByAgentIdOuverture2($agentIdOuverture2 = null, $comparison = null)
    {
        if (is_array($agentIdOuverture2)) {
            $useMinMax = false;
            if (isset($agentIdOuverture2['min'])) {
                $this->addUsingAlias(CommonEnveloppePeer::AGENT_ID_OUVERTURE2, $agentIdOuverture2['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($agentIdOuverture2['max'])) {
                $this->addUsingAlias(CommonEnveloppePeer::AGENT_ID_OUVERTURE2, $agentIdOuverture2['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnveloppePeer::AGENT_ID_OUVERTURE2, $agentIdOuverture2, $comparison);
    }

    /**
     * Filter the query on the donnees_ouverture column
     *
     * @param     mixed $donneesOuverture The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppeQuery The current query, for fluid interface
     */
    public function filterByDonneesOuverture($donneesOuverture = null, $comparison = null)
    {

        return $this->addUsingAlias(CommonEnveloppePeer::DONNEES_OUVERTURE, $donneesOuverture, $comparison);
    }

    /**
     * Filter the query on the horodatage_donnees_ouverture column
     *
     * @param     mixed $horodatageDonneesOuverture The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppeQuery The current query, for fluid interface
     */
    public function filterByHorodatageDonneesOuverture($horodatageDonneesOuverture = null, $comparison = null)
    {

        return $this->addUsingAlias(CommonEnveloppePeer::HORODATAGE_DONNEES_OUVERTURE, $horodatageDonneesOuverture, $comparison);
    }

    /**
     * Filter the query on the statut_enveloppe column
     *
     * Example usage:
     * <code>
     * $query->filterByStatutEnveloppe(1234); // WHERE statut_enveloppe = 1234
     * $query->filterByStatutEnveloppe(array(12, 34)); // WHERE statut_enveloppe IN (12, 34)
     * $query->filterByStatutEnveloppe(array('min' => 12)); // WHERE statut_enveloppe >= 12
     * $query->filterByStatutEnveloppe(array('max' => 12)); // WHERE statut_enveloppe <= 12
     * </code>
     *
     * @param     mixed $statutEnveloppe The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppeQuery The current query, for fluid interface
     */
    public function filterByStatutEnveloppe($statutEnveloppe = null, $comparison = null)
    {
        if (is_array($statutEnveloppe)) {
            $useMinMax = false;
            if (isset($statutEnveloppe['min'])) {
                $this->addUsingAlias(CommonEnveloppePeer::STATUT_ENVELOPPE, $statutEnveloppe['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statutEnveloppe['max'])) {
                $this->addUsingAlias(CommonEnveloppePeer::STATUT_ENVELOPPE, $statutEnveloppe['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnveloppePeer::STATUT_ENVELOPPE, $statutEnveloppe, $comparison);
    }

    /**
     * Filter the query on the agent_telechargement column
     *
     * Example usage:
     * <code>
     * $query->filterByAgentTelechargement(1234); // WHERE agent_telechargement = 1234
     * $query->filterByAgentTelechargement(array(12, 34)); // WHERE agent_telechargement IN (12, 34)
     * $query->filterByAgentTelechargement(array('min' => 12)); // WHERE agent_telechargement >= 12
     * $query->filterByAgentTelechargement(array('max' => 12)); // WHERE agent_telechargement <= 12
     * </code>
     *
     * @param     mixed $agentTelechargement The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppeQuery The current query, for fluid interface
     */
    public function filterByAgentTelechargement($agentTelechargement = null, $comparison = null)
    {
        if (is_array($agentTelechargement)) {
            $useMinMax = false;
            if (isset($agentTelechargement['min'])) {
                $this->addUsingAlias(CommonEnveloppePeer::AGENT_TELECHARGEMENT, $agentTelechargement['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($agentTelechargement['max'])) {
                $this->addUsingAlias(CommonEnveloppePeer::AGENT_TELECHARGEMENT, $agentTelechargement['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnveloppePeer::AGENT_TELECHARGEMENT, $agentTelechargement, $comparison);
    }

    /**
     * Filter the query on the date_telechargement column
     *
     * Example usage:
     * <code>
     * $query->filterByDateTelechargement('fooValue');   // WHERE date_telechargement = 'fooValue'
     * $query->filterByDateTelechargement('%fooValue%'); // WHERE date_telechargement LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateTelechargement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppeQuery The current query, for fluid interface
     */
    public function filterByDateTelechargement($dateTelechargement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateTelechargement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateTelechargement)) {
                $dateTelechargement = str_replace('*', '%', $dateTelechargement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEnveloppePeer::DATE_TELECHARGEMENT, $dateTelechargement, $comparison);
    }

    /**
     * Filter the query on the repertoire_telechargement column
     *
     * Example usage:
     * <code>
     * $query->filterByRepertoireTelechargement('fooValue');   // WHERE repertoire_telechargement = 'fooValue'
     * $query->filterByRepertoireTelechargement('%fooValue%'); // WHERE repertoire_telechargement LIKE '%fooValue%'
     * </code>
     *
     * @param     string $repertoireTelechargement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppeQuery The current query, for fluid interface
     */
    public function filterByRepertoireTelechargement($repertoireTelechargement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($repertoireTelechargement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $repertoireTelechargement)) {
                $repertoireTelechargement = str_replace('*', '%', $repertoireTelechargement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEnveloppePeer::REPERTOIRE_TELECHARGEMENT, $repertoireTelechargement, $comparison);
    }

    /**
     * Filter the query on the nom_agent_ouverture column
     *
     * Example usage:
     * <code>
     * $query->filterByNomAgentOuverture('fooValue');   // WHERE nom_agent_ouverture = 'fooValue'
     * $query->filterByNomAgentOuverture('%fooValue%'); // WHERE nom_agent_ouverture LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomAgentOuverture The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppeQuery The current query, for fluid interface
     */
    public function filterByNomAgentOuverture($nomAgentOuverture = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomAgentOuverture)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomAgentOuverture)) {
                $nomAgentOuverture = str_replace('*', '%', $nomAgentOuverture);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEnveloppePeer::NOM_AGENT_OUVERTURE, $nomAgentOuverture, $comparison);
    }

    /**
     * Filter the query on the dateheure_ouverture_agent2 column
     *
     * Example usage:
     * <code>
     * $query->filterByDateheureOuvertureAgent2('fooValue');   // WHERE dateheure_ouverture_agent2 = 'fooValue'
     * $query->filterByDateheureOuvertureAgent2('%fooValue%'); // WHERE dateheure_ouverture_agent2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateheureOuvertureAgent2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppeQuery The current query, for fluid interface
     */
    public function filterByDateheureOuvertureAgent2($dateheureOuvertureAgent2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateheureOuvertureAgent2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateheureOuvertureAgent2)) {
                $dateheureOuvertureAgent2 = str_replace('*', '%', $dateheureOuvertureAgent2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEnveloppePeer::DATEHEURE_OUVERTURE_AGENT2, $dateheureOuvertureAgent2, $comparison);
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
     * @return CommonEnveloppeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEnveloppePeer::CERTIFICAT, $certificat, $comparison);
    }

    /**
     * Filter the query on the montant column
     *
     * Example usage:
     * <code>
     * $query->filterByMontant(1234); // WHERE montant = 1234
     * $query->filterByMontant(array(12, 34)); // WHERE montant IN (12, 34)
     * $query->filterByMontant(array('min' => 12)); // WHERE montant >= 12
     * $query->filterByMontant(array('max' => 12)); // WHERE montant <= 12
     * </code>
     *
     * @param     mixed $montant The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppeQuery The current query, for fluid interface
     */
    public function filterByMontant($montant = null, $comparison = null)
    {
        if (is_array($montant)) {
            $useMinMax = false;
            if (isset($montant['min'])) {
                $this->addUsingAlias(CommonEnveloppePeer::MONTANT, $montant['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montant['max'])) {
                $this->addUsingAlias(CommonEnveloppePeer::MONTANT, $montant['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnveloppePeer::MONTANT, $montant, $comparison);
    }

    /**
     * Filter the query on the montant_apres_modification column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantApresModification(1234); // WHERE montant_apres_modification = 1234
     * $query->filterByMontantApresModification(array(12, 34)); // WHERE montant_apres_modification IN (12, 34)
     * $query->filterByMontantApresModification(array('min' => 12)); // WHERE montant_apres_modification >= 12
     * $query->filterByMontantApresModification(array('max' => 12)); // WHERE montant_apres_modification <= 12
     * </code>
     *
     * @param     mixed $montantApresModification The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppeQuery The current query, for fluid interface
     */
    public function filterByMontantApresModification($montantApresModification = null, $comparison = null)
    {
        if (is_array($montantApresModification)) {
            $useMinMax = false;
            if (isset($montantApresModification['min'])) {
                $this->addUsingAlias(CommonEnveloppePeer::MONTANT_APRES_MODIFICATION, $montantApresModification['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantApresModification['max'])) {
                $this->addUsingAlias(CommonEnveloppePeer::MONTANT_APRES_MODIFICATION, $montantApresModification['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnveloppePeer::MONTANT_APRES_MODIFICATION, $montantApresModification, $comparison);
    }

    /**
     * Filter the query on the type_attributaire column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeAttributaire('fooValue');   // WHERE type_attributaire = 'fooValue'
     * $query->filterByTypeAttributaire('%fooValue%'); // WHERE type_attributaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeAttributaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppeQuery The current query, for fluid interface
     */
    public function filterByTypeAttributaire($typeAttributaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeAttributaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeAttributaire)) {
                $typeAttributaire = str_replace('*', '%', $typeAttributaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEnveloppePeer::TYPE_ATTRIBUTAIRE, $typeAttributaire, $comparison);
    }

    /**
     * Filter the query on the devise column
     *
     * Example usage:
     * <code>
     * $query->filterByDevise('fooValue');   // WHERE devise = 'fooValue'
     * $query->filterByDevise('%fooValue%'); // WHERE devise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $devise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppeQuery The current query, for fluid interface
     */
    public function filterByDevise($devise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($devise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $devise)) {
                $devise = str_replace('*', '%', $devise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEnveloppePeer::DEVISE, $devise, $comparison);
    }

    /**
     * Filter the query on the rabais_preference_national column
     *
     * Example usage:
     * <code>
     * $query->filterByRabaisPreferenceNational('fooValue');   // WHERE rabais_preference_national = 'fooValue'
     * $query->filterByRabaisPreferenceNational('%fooValue%'); // WHERE rabais_preference_national LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rabaisPreferenceNational The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppeQuery The current query, for fluid interface
     */
    public function filterByRabaisPreferenceNational($rabaisPreferenceNational = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rabaisPreferenceNational)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rabaisPreferenceNational)) {
                $rabaisPreferenceNational = str_replace('*', '%', $rabaisPreferenceNational);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEnveloppePeer::RABAIS_PREFERENCE_NATIONAL, $rabaisPreferenceNational, $comparison);
    }

    /**
     * Filter the query on the type_correction_montant column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeCorrectionMontant('fooValue');   // WHERE type_correction_montant = 'fooValue'
     * $query->filterByTypeCorrectionMontant('%fooValue%'); // WHERE type_correction_montant LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeCorrectionMontant The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppeQuery The current query, for fluid interface
     */
    public function filterByTypeCorrectionMontant($typeCorrectionMontant = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeCorrectionMontant)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeCorrectionMontant)) {
                $typeCorrectionMontant = str_replace('*', '%', $typeCorrectionMontant);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEnveloppePeer::TYPE_CORRECTION_MONTANT, $typeCorrectionMontant, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonEnveloppe $commonEnveloppe Object to remove from the list of results
     *
     * @return CommonEnveloppeQuery The current query, for fluid interface
     */
    public function prune($commonEnveloppe = null)
    {
        if ($commonEnveloppe) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonEnveloppePeer::ID_ENVELOPPE_ELECTRO), $commonEnveloppe->getIdEnveloppeElectro(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonEnveloppePeer::ORGANISME), $commonEnveloppe->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
