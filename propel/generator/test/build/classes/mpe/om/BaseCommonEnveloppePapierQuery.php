<?php


/**
 * Base class that represents a query for the 'Enveloppe_papier' table.
 *
 * 
 *
 * @method CommonEnveloppePapierQuery orderByIdEnveloppePapier($order = Criteria::ASC) Order by the id_enveloppe_papier column
 * @method CommonEnveloppePapierQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonEnveloppePapierQuery orderByOffrePapierId($order = Criteria::ASC) Order by the offre_papier_id column
 * @method CommonEnveloppePapierQuery orderByStatut($order = Criteria::ASC) Order by the statut column
 * @method CommonEnveloppePapierQuery orderBySupprime($order = Criteria::ASC) Order by the supprime column
 * @method CommonEnveloppePapierQuery orderByCryptage($order = Criteria::ASC) Order by the cryptage column
 * @method CommonEnveloppePapierQuery orderByIsSend($order = Criteria::ASC) Order by the is_send column
 * @method CommonEnveloppePapierQuery orderByTypeEnv($order = Criteria::ASC) Order by the type_env column
 * @method CommonEnveloppePapierQuery orderBySousPli($order = Criteria::ASC) Order by the sous_pli column
 * @method CommonEnveloppePapierQuery orderByChampsOptionnels($order = Criteria::ASC) Order by the champs_optionnels column
 * @method CommonEnveloppePapierQuery orderByAgentIdOuverture($order = Criteria::ASC) Order by the agent_id_ouverture column
 * @method CommonEnveloppePapierQuery orderByDateheureOuverture($order = Criteria::ASC) Order by the dateheure_ouverture column
 * @method CommonEnveloppePapierQuery orderByStatutEnveloppe($order = Criteria::ASC) Order by the statut_enveloppe column
 * @method CommonEnveloppePapierQuery orderByEnveloppePostule($order = Criteria::ASC) Order by the enveloppe_postule column
 * @method CommonEnveloppePapierQuery orderByNomAgentOuverture($order = Criteria::ASC) Order by the nom_agent_ouverture column
 * @method CommonEnveloppePapierQuery orderByMontant($order = Criteria::ASC) Order by the montant column
 * @method CommonEnveloppePapierQuery orderByMontantApresModification($order = Criteria::ASC) Order by the montant_apres_modification column
 * @method CommonEnveloppePapierQuery orderByTypeAttributaire($order = Criteria::ASC) Order by the type_attributaire column
 * @method CommonEnveloppePapierQuery orderByDevise($order = Criteria::ASC) Order by the devise column
 * @method CommonEnveloppePapierQuery orderByRabaisPreferenceNational($order = Criteria::ASC) Order by the rabais_preference_national column
 * @method CommonEnveloppePapierQuery orderByTypeCorrectionMontant($order = Criteria::ASC) Order by the type_correction_montant column
 *
 * @method CommonEnveloppePapierQuery groupByIdEnveloppePapier() Group by the id_enveloppe_papier column
 * @method CommonEnveloppePapierQuery groupByOrganisme() Group by the organisme column
 * @method CommonEnveloppePapierQuery groupByOffrePapierId() Group by the offre_papier_id column
 * @method CommonEnveloppePapierQuery groupByStatut() Group by the statut column
 * @method CommonEnveloppePapierQuery groupBySupprime() Group by the supprime column
 * @method CommonEnveloppePapierQuery groupByCryptage() Group by the cryptage column
 * @method CommonEnveloppePapierQuery groupByIsSend() Group by the is_send column
 * @method CommonEnveloppePapierQuery groupByTypeEnv() Group by the type_env column
 * @method CommonEnveloppePapierQuery groupBySousPli() Group by the sous_pli column
 * @method CommonEnveloppePapierQuery groupByChampsOptionnels() Group by the champs_optionnels column
 * @method CommonEnveloppePapierQuery groupByAgentIdOuverture() Group by the agent_id_ouverture column
 * @method CommonEnveloppePapierQuery groupByDateheureOuverture() Group by the dateheure_ouverture column
 * @method CommonEnveloppePapierQuery groupByStatutEnveloppe() Group by the statut_enveloppe column
 * @method CommonEnveloppePapierQuery groupByEnveloppePostule() Group by the enveloppe_postule column
 * @method CommonEnveloppePapierQuery groupByNomAgentOuverture() Group by the nom_agent_ouverture column
 * @method CommonEnveloppePapierQuery groupByMontant() Group by the montant column
 * @method CommonEnveloppePapierQuery groupByMontantApresModification() Group by the montant_apres_modification column
 * @method CommonEnveloppePapierQuery groupByTypeAttributaire() Group by the type_attributaire column
 * @method CommonEnveloppePapierQuery groupByDevise() Group by the devise column
 * @method CommonEnveloppePapierQuery groupByRabaisPreferenceNational() Group by the rabais_preference_national column
 * @method CommonEnveloppePapierQuery groupByTypeCorrectionMontant() Group by the type_correction_montant column
 *
 * @method CommonEnveloppePapierQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonEnveloppePapierQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonEnveloppePapierQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonEnveloppePapier findOne(PropelPDO $con = null) Return the first CommonEnveloppePapier matching the query
 * @method CommonEnveloppePapier findOneOrCreate(PropelPDO $con = null) Return the first CommonEnveloppePapier matching the query, or a new CommonEnveloppePapier object populated from the query conditions when no match is found
 *
 * @method CommonEnveloppePapier findOneByIdEnveloppePapier(int $id_enveloppe_papier) Return the first CommonEnveloppePapier filtered by the id_enveloppe_papier column
 * @method CommonEnveloppePapier findOneByOrganisme(string $organisme) Return the first CommonEnveloppePapier filtered by the organisme column
 * @method CommonEnveloppePapier findOneByOffrePapierId(int $offre_papier_id) Return the first CommonEnveloppePapier filtered by the offre_papier_id column
 * @method CommonEnveloppePapier findOneByStatut(int $statut) Return the first CommonEnveloppePapier filtered by the statut column
 * @method CommonEnveloppePapier findOneBySupprime(string $supprime) Return the first CommonEnveloppePapier filtered by the supprime column
 * @method CommonEnveloppePapier findOneByCryptage(string $cryptage) Return the first CommonEnveloppePapier filtered by the cryptage column
 * @method CommonEnveloppePapier findOneByIsSend(int $is_send) Return the first CommonEnveloppePapier filtered by the is_send column
 * @method CommonEnveloppePapier findOneByTypeEnv(int $type_env) Return the first CommonEnveloppePapier filtered by the type_env column
 * @method CommonEnveloppePapier findOneBySousPli(int $sous_pli) Return the first CommonEnveloppePapier filtered by the sous_pli column
 * @method CommonEnveloppePapier findOneByChampsOptionnels(string $champs_optionnels) Return the first CommonEnveloppePapier filtered by the champs_optionnels column
 * @method CommonEnveloppePapier findOneByAgentIdOuverture(int $agent_id_ouverture) Return the first CommonEnveloppePapier filtered by the agent_id_ouverture column
 * @method CommonEnveloppePapier findOneByDateheureOuverture(string $dateheure_ouverture) Return the first CommonEnveloppePapier filtered by the dateheure_ouverture column
 * @method CommonEnveloppePapier findOneByStatutEnveloppe(int $statut_enveloppe) Return the first CommonEnveloppePapier filtered by the statut_enveloppe column
 * @method CommonEnveloppePapier findOneByEnveloppePostule(string $enveloppe_postule) Return the first CommonEnveloppePapier filtered by the enveloppe_postule column
 * @method CommonEnveloppePapier findOneByNomAgentOuverture(string $nom_agent_ouverture) Return the first CommonEnveloppePapier filtered by the nom_agent_ouverture column
 * @method CommonEnveloppePapier findOneByMontant(double $montant) Return the first CommonEnveloppePapier filtered by the montant column
 * @method CommonEnveloppePapier findOneByMontantApresModification(double $montant_apres_modification) Return the first CommonEnveloppePapier filtered by the montant_apres_modification column
 * @method CommonEnveloppePapier findOneByTypeAttributaire(string $type_attributaire) Return the first CommonEnveloppePapier filtered by the type_attributaire column
 * @method CommonEnveloppePapier findOneByDevise(string $devise) Return the first CommonEnveloppePapier filtered by the devise column
 * @method CommonEnveloppePapier findOneByRabaisPreferenceNational(string $rabais_preference_national) Return the first CommonEnveloppePapier filtered by the rabais_preference_national column
 * @method CommonEnveloppePapier findOneByTypeCorrectionMontant(string $type_correction_montant) Return the first CommonEnveloppePapier filtered by the type_correction_montant column
 *
 * @method array findByIdEnveloppePapier(int $id_enveloppe_papier) Return CommonEnveloppePapier objects filtered by the id_enveloppe_papier column
 * @method array findByOrganisme(string $organisme) Return CommonEnveloppePapier objects filtered by the organisme column
 * @method array findByOffrePapierId(int $offre_papier_id) Return CommonEnveloppePapier objects filtered by the offre_papier_id column
 * @method array findByStatut(int $statut) Return CommonEnveloppePapier objects filtered by the statut column
 * @method array findBySupprime(string $supprime) Return CommonEnveloppePapier objects filtered by the supprime column
 * @method array findByCryptage(string $cryptage) Return CommonEnveloppePapier objects filtered by the cryptage column
 * @method array findByIsSend(int $is_send) Return CommonEnveloppePapier objects filtered by the is_send column
 * @method array findByTypeEnv(int $type_env) Return CommonEnveloppePapier objects filtered by the type_env column
 * @method array findBySousPli(int $sous_pli) Return CommonEnveloppePapier objects filtered by the sous_pli column
 * @method array findByChampsOptionnels(string $champs_optionnels) Return CommonEnveloppePapier objects filtered by the champs_optionnels column
 * @method array findByAgentIdOuverture(int $agent_id_ouverture) Return CommonEnveloppePapier objects filtered by the agent_id_ouverture column
 * @method array findByDateheureOuverture(string $dateheure_ouverture) Return CommonEnveloppePapier objects filtered by the dateheure_ouverture column
 * @method array findByStatutEnveloppe(int $statut_enveloppe) Return CommonEnveloppePapier objects filtered by the statut_enveloppe column
 * @method array findByEnveloppePostule(string $enveloppe_postule) Return CommonEnveloppePapier objects filtered by the enveloppe_postule column
 * @method array findByNomAgentOuverture(string $nom_agent_ouverture) Return CommonEnveloppePapier objects filtered by the nom_agent_ouverture column
 * @method array findByMontant(double $montant) Return CommonEnveloppePapier objects filtered by the montant column
 * @method array findByMontantApresModification(double $montant_apres_modification) Return CommonEnveloppePapier objects filtered by the montant_apres_modification column
 * @method array findByTypeAttributaire(string $type_attributaire) Return CommonEnveloppePapier objects filtered by the type_attributaire column
 * @method array findByDevise(string $devise) Return CommonEnveloppePapier objects filtered by the devise column
 * @method array findByRabaisPreferenceNational(string $rabais_preference_national) Return CommonEnveloppePapier objects filtered by the rabais_preference_national column
 * @method array findByTypeCorrectionMontant(string $type_correction_montant) Return CommonEnveloppePapier objects filtered by the type_correction_montant column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonEnveloppePapierQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonEnveloppePapierQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonEnveloppePapier', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonEnveloppePapierQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonEnveloppePapierQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonEnveloppePapierQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonEnveloppePapierQuery) {
            return $criteria;
        }
        $query = new CommonEnveloppePapierQuery();
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
                         A Primary key composition: [$id_enveloppe_papier, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonEnveloppePapier|CommonEnveloppePapier[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonEnveloppePapierPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonEnveloppePapierPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonEnveloppePapier A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_enveloppe_papier`, `organisme`, `offre_papier_id`, `statut`, `supprime`, `cryptage`, `is_send`, `type_env`, `sous_pli`, `champs_optionnels`, `agent_id_ouverture`, `dateheure_ouverture`, `statut_enveloppe`, `enveloppe_postule`, `nom_agent_ouverture`, `montant`, `montant_apres_modification`, `type_attributaire`, `devise`, `rabais_preference_national`, `type_correction_montant` FROM `Enveloppe_papier` WHERE `id_enveloppe_papier` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonEnveloppePapier();
            $obj->hydrate($row);
            CommonEnveloppePapierPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonEnveloppePapier|CommonEnveloppePapier[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonEnveloppePapier[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonEnveloppePapierQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonEnveloppePapierPeer::ID_ENVELOPPE_PAPIER, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonEnveloppePapierPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonEnveloppePapierQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonEnveloppePapierPeer::ID_ENVELOPPE_PAPIER, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonEnveloppePapierPeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the id_enveloppe_papier column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEnveloppePapier(1234); // WHERE id_enveloppe_papier = 1234
     * $query->filterByIdEnveloppePapier(array(12, 34)); // WHERE id_enveloppe_papier IN (12, 34)
     * $query->filterByIdEnveloppePapier(array('min' => 12)); // WHERE id_enveloppe_papier >= 12
     * $query->filterByIdEnveloppePapier(array('max' => 12)); // WHERE id_enveloppe_papier <= 12
     * </code>
     *
     * @param     mixed $idEnveloppePapier The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppePapierQuery The current query, for fluid interface
     */
    public function filterByIdEnveloppePapier($idEnveloppePapier = null, $comparison = null)
    {
        if (is_array($idEnveloppePapier)) {
            $useMinMax = false;
            if (isset($idEnveloppePapier['min'])) {
                $this->addUsingAlias(CommonEnveloppePapierPeer::ID_ENVELOPPE_PAPIER, $idEnveloppePapier['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEnveloppePapier['max'])) {
                $this->addUsingAlias(CommonEnveloppePapierPeer::ID_ENVELOPPE_PAPIER, $idEnveloppePapier['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnveloppePapierPeer::ID_ENVELOPPE_PAPIER, $idEnveloppePapier, $comparison);
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
     * @return CommonEnveloppePapierQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEnveloppePapierPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the offre_papier_id column
     *
     * Example usage:
     * <code>
     * $query->filterByOffrePapierId(1234); // WHERE offre_papier_id = 1234
     * $query->filterByOffrePapierId(array(12, 34)); // WHERE offre_papier_id IN (12, 34)
     * $query->filterByOffrePapierId(array('min' => 12)); // WHERE offre_papier_id >= 12
     * $query->filterByOffrePapierId(array('max' => 12)); // WHERE offre_papier_id <= 12
     * </code>
     *
     * @param     mixed $offrePapierId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppePapierQuery The current query, for fluid interface
     */
    public function filterByOffrePapierId($offrePapierId = null, $comparison = null)
    {
        if (is_array($offrePapierId)) {
            $useMinMax = false;
            if (isset($offrePapierId['min'])) {
                $this->addUsingAlias(CommonEnveloppePapierPeer::OFFRE_PAPIER_ID, $offrePapierId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($offrePapierId['max'])) {
                $this->addUsingAlias(CommonEnveloppePapierPeer::OFFRE_PAPIER_ID, $offrePapierId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnveloppePapierPeer::OFFRE_PAPIER_ID, $offrePapierId, $comparison);
    }

    /**
     * Filter the query on the statut column
     *
     * Example usage:
     * <code>
     * $query->filterByStatut(1234); // WHERE statut = 1234
     * $query->filterByStatut(array(12, 34)); // WHERE statut IN (12, 34)
     * $query->filterByStatut(array('min' => 12)); // WHERE statut >= 12
     * $query->filterByStatut(array('max' => 12)); // WHERE statut <= 12
     * </code>
     *
     * @param     mixed $statut The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppePapierQuery The current query, for fluid interface
     */
    public function filterByStatut($statut = null, $comparison = null)
    {
        if (is_array($statut)) {
            $useMinMax = false;
            if (isset($statut['min'])) {
                $this->addUsingAlias(CommonEnveloppePapierPeer::STATUT, $statut['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statut['max'])) {
                $this->addUsingAlias(CommonEnveloppePapierPeer::STATUT, $statut['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnveloppePapierPeer::STATUT, $statut, $comparison);
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
     * @return CommonEnveloppePapierQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEnveloppePapierPeer::SUPPRIME, $supprime, $comparison);
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
     * @return CommonEnveloppePapierQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEnveloppePapierPeer::CRYPTAGE, $cryptage, $comparison);
    }

    /**
     * Filter the query on the is_send column
     *
     * Example usage:
     * <code>
     * $query->filterByIsSend(1234); // WHERE is_send = 1234
     * $query->filterByIsSend(array(12, 34)); // WHERE is_send IN (12, 34)
     * $query->filterByIsSend(array('min' => 12)); // WHERE is_send >= 12
     * $query->filterByIsSend(array('max' => 12)); // WHERE is_send <= 12
     * </code>
     *
     * @param     mixed $isSend The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppePapierQuery The current query, for fluid interface
     */
    public function filterByIsSend($isSend = null, $comparison = null)
    {
        if (is_array($isSend)) {
            $useMinMax = false;
            if (isset($isSend['min'])) {
                $this->addUsingAlias(CommonEnveloppePapierPeer::IS_SEND, $isSend['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($isSend['max'])) {
                $this->addUsingAlias(CommonEnveloppePapierPeer::IS_SEND, $isSend['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnveloppePapierPeer::IS_SEND, $isSend, $comparison);
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
     * @return CommonEnveloppePapierQuery The current query, for fluid interface
     */
    public function filterByTypeEnv($typeEnv = null, $comparison = null)
    {
        if (is_array($typeEnv)) {
            $useMinMax = false;
            if (isset($typeEnv['min'])) {
                $this->addUsingAlias(CommonEnveloppePapierPeer::TYPE_ENV, $typeEnv['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeEnv['max'])) {
                $this->addUsingAlias(CommonEnveloppePapierPeer::TYPE_ENV, $typeEnv['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnveloppePapierPeer::TYPE_ENV, $typeEnv, $comparison);
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
     * @return CommonEnveloppePapierQuery The current query, for fluid interface
     */
    public function filterBySousPli($sousPli = null, $comparison = null)
    {
        if (is_array($sousPli)) {
            $useMinMax = false;
            if (isset($sousPli['min'])) {
                $this->addUsingAlias(CommonEnveloppePapierPeer::SOUS_PLI, $sousPli['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sousPli['max'])) {
                $this->addUsingAlias(CommonEnveloppePapierPeer::SOUS_PLI, $sousPli['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnveloppePapierPeer::SOUS_PLI, $sousPli, $comparison);
    }

    /**
     * Filter the query on the champs_optionnels column
     *
     * Example usage:
     * <code>
     * $query->filterByChampsOptionnels('fooValue');   // WHERE champs_optionnels = 'fooValue'
     * $query->filterByChampsOptionnels('%fooValue%'); // WHERE champs_optionnels LIKE '%fooValue%'
     * </code>
     *
     * @param     string $champsOptionnels The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppePapierQuery The current query, for fluid interface
     */
    public function filterByChampsOptionnels($champsOptionnels = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($champsOptionnels)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $champsOptionnels)) {
                $champsOptionnels = str_replace('*', '%', $champsOptionnels);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEnveloppePapierPeer::CHAMPS_OPTIONNELS, $champsOptionnels, $comparison);
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
     * @return CommonEnveloppePapierQuery The current query, for fluid interface
     */
    public function filterByAgentIdOuverture($agentIdOuverture = null, $comparison = null)
    {
        if (is_array($agentIdOuverture)) {
            $useMinMax = false;
            if (isset($agentIdOuverture['min'])) {
                $this->addUsingAlias(CommonEnveloppePapierPeer::AGENT_ID_OUVERTURE, $agentIdOuverture['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($agentIdOuverture['max'])) {
                $this->addUsingAlias(CommonEnveloppePapierPeer::AGENT_ID_OUVERTURE, $agentIdOuverture['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnveloppePapierPeer::AGENT_ID_OUVERTURE, $agentIdOuverture, $comparison);
    }

    /**
     * Filter the query on the dateheure_ouverture column
     *
     * Example usage:
     * <code>
     * $query->filterByDateheureOuverture('2011-03-14'); // WHERE dateheure_ouverture = '2011-03-14'
     * $query->filterByDateheureOuverture('now'); // WHERE dateheure_ouverture = '2011-03-14'
     * $query->filterByDateheureOuverture(array('max' => 'yesterday')); // WHERE dateheure_ouverture > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateheureOuverture The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppePapierQuery The current query, for fluid interface
     */
    public function filterByDateheureOuverture($dateheureOuverture = null, $comparison = null)
    {
        if (is_array($dateheureOuverture)) {
            $useMinMax = false;
            if (isset($dateheureOuverture['min'])) {
                $this->addUsingAlias(CommonEnveloppePapierPeer::DATEHEURE_OUVERTURE, $dateheureOuverture['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateheureOuverture['max'])) {
                $this->addUsingAlias(CommonEnveloppePapierPeer::DATEHEURE_OUVERTURE, $dateheureOuverture['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnveloppePapierPeer::DATEHEURE_OUVERTURE, $dateheureOuverture, $comparison);
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
     * @return CommonEnveloppePapierQuery The current query, for fluid interface
     */
    public function filterByStatutEnveloppe($statutEnveloppe = null, $comparison = null)
    {
        if (is_array($statutEnveloppe)) {
            $useMinMax = false;
            if (isset($statutEnveloppe['min'])) {
                $this->addUsingAlias(CommonEnveloppePapierPeer::STATUT_ENVELOPPE, $statutEnveloppe['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statutEnveloppe['max'])) {
                $this->addUsingAlias(CommonEnveloppePapierPeer::STATUT_ENVELOPPE, $statutEnveloppe['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnveloppePapierPeer::STATUT_ENVELOPPE, $statutEnveloppe, $comparison);
    }

    /**
     * Filter the query on the enveloppe_postule column
     *
     * Example usage:
     * <code>
     * $query->filterByEnveloppePostule('fooValue');   // WHERE enveloppe_postule = 'fooValue'
     * $query->filterByEnveloppePostule('%fooValue%'); // WHERE enveloppe_postule LIKE '%fooValue%'
     * </code>
     *
     * @param     string $enveloppePostule The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnveloppePapierQuery The current query, for fluid interface
     */
    public function filterByEnveloppePostule($enveloppePostule = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($enveloppePostule)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $enveloppePostule)) {
                $enveloppePostule = str_replace('*', '%', $enveloppePostule);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEnveloppePapierPeer::ENVELOPPE_POSTULE, $enveloppePostule, $comparison);
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
     * @return CommonEnveloppePapierQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEnveloppePapierPeer::NOM_AGENT_OUVERTURE, $nomAgentOuverture, $comparison);
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
     * @return CommonEnveloppePapierQuery The current query, for fluid interface
     */
    public function filterByMontant($montant = null, $comparison = null)
    {
        if (is_array($montant)) {
            $useMinMax = false;
            if (isset($montant['min'])) {
                $this->addUsingAlias(CommonEnveloppePapierPeer::MONTANT, $montant['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montant['max'])) {
                $this->addUsingAlias(CommonEnveloppePapierPeer::MONTANT, $montant['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnveloppePapierPeer::MONTANT, $montant, $comparison);
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
     * @return CommonEnveloppePapierQuery The current query, for fluid interface
     */
    public function filterByMontantApresModification($montantApresModification = null, $comparison = null)
    {
        if (is_array($montantApresModification)) {
            $useMinMax = false;
            if (isset($montantApresModification['min'])) {
                $this->addUsingAlias(CommonEnveloppePapierPeer::MONTANT_APRES_MODIFICATION, $montantApresModification['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantApresModification['max'])) {
                $this->addUsingAlias(CommonEnveloppePapierPeer::MONTANT_APRES_MODIFICATION, $montantApresModification['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnveloppePapierPeer::MONTANT_APRES_MODIFICATION, $montantApresModification, $comparison);
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
     * @return CommonEnveloppePapierQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEnveloppePapierPeer::TYPE_ATTRIBUTAIRE, $typeAttributaire, $comparison);
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
     * @return CommonEnveloppePapierQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEnveloppePapierPeer::DEVISE, $devise, $comparison);
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
     * @return CommonEnveloppePapierQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEnveloppePapierPeer::RABAIS_PREFERENCE_NATIONAL, $rabaisPreferenceNational, $comparison);
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
     * @return CommonEnveloppePapierQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEnveloppePapierPeer::TYPE_CORRECTION_MONTANT, $typeCorrectionMontant, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonEnveloppePapier $commonEnveloppePapier Object to remove from the list of results
     *
     * @return CommonEnveloppePapierQuery The current query, for fluid interface
     */
    public function prune($commonEnveloppePapier = null)
    {
        if ($commonEnveloppePapier) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonEnveloppePapierPeer::ID_ENVELOPPE_PAPIER), $commonEnveloppePapier->getIdEnveloppePapier(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonEnveloppePapierPeer::ORGANISME), $commonEnveloppePapier->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
