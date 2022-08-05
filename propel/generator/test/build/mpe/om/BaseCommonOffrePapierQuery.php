<?php


/**
 * Base class that represents a query for the 'Offre_papier' table.
 *
 * 
 *
 * @method CommonOffrePapierQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonOffrePapierQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonOffrePapierQuery orderByConsultationRef($order = Criteria::ASC) Order by the consultation_ref column
 * @method CommonOffrePapierQuery orderByNomEntreprise($order = Criteria::ASC) Order by the nom_entreprise column
 * @method CommonOffrePapierQuery orderByDateDepot($order = Criteria::ASC) Order by the date_depot column
 * @method CommonOffrePapierQuery orderByExternalSerial($order = Criteria::ASC) Order by the external_serial column
 * @method CommonOffrePapierQuery orderByInternalSerial($order = Criteria::ASC) Order by the internal_serial column
 * @method CommonOffrePapierQuery orderByOffreSelectionnee($order = Criteria::ASC) Order by the offre_selectionnee column
 * @method CommonOffrePapierQuery orderByNom($order = Criteria::ASC) Order by the nom column
 * @method CommonOffrePapierQuery orderByPrenom($order = Criteria::ASC) Order by the prenom column
 * @method CommonOffrePapierQuery orderByAdresse($order = Criteria::ASC) Order by the adresse column
 * @method CommonOffrePapierQuery orderByAdresse2($order = Criteria::ASC) Order by the adresse2 column
 * @method CommonOffrePapierQuery orderByTelephone($order = Criteria::ASC) Order by the telephone column
 * @method CommonOffrePapierQuery orderByFax($order = Criteria::ASC) Order by the fax column
 * @method CommonOffrePapierQuery orderByCodePostal($order = Criteria::ASC) Order by the code_postal column
 * @method CommonOffrePapierQuery orderByVille($order = Criteria::ASC) Order by the ville column
 * @method CommonOffrePapierQuery orderByPays($order = Criteria::ASC) Order by the pays column
 * @method CommonOffrePapierQuery orderByAcronymePays($order = Criteria::ASC) Order by the acronyme_pays column
 * @method CommonOffrePapierQuery orderBySiret($order = Criteria::ASC) Order by the siret column
 * @method CommonOffrePapierQuery orderByIdentifiantNational($order = Criteria::ASC) Order by the identifiant_national column
 * @method CommonOffrePapierQuery orderByEmail($order = Criteria::ASC) Order by the email column
 * @method CommonOffrePapierQuery orderByObservation($order = Criteria::ASC) Order by the observation column
 * @method CommonOffrePapierQuery orderByDateAnnulation($order = Criteria::ASC) Order by the date_annulation column
 * @method CommonOffrePapierQuery orderByDepotAnnule($order = Criteria::ASC) Order by the depot_annule column
 * @method CommonOffrePapierQuery orderByOffreVariante($order = Criteria::ASC) Order by the offre_variante column
 * @method CommonOffrePapierQuery orderByStatutOffrePapier($order = Criteria::ASC) Order by the statut_offre_papier column
 * @method CommonOffrePapierQuery orderByNumeroReponse($order = Criteria::ASC) Order by the numero_reponse column
 * @method CommonOffrePapierQuery orderByNomAgentOuverture($order = Criteria::ASC) Order by the nom_agent_ouverture column
 * @method CommonOffrePapierQuery orderByAgentIdOuverture($order = Criteria::ASC) Order by the agent_id_ouverture column
 * @method CommonOffrePapierQuery orderByDateheureOuverture($order = Criteria::ASC) Order by the dateheure_ouverture column
 * @method CommonOffrePapierQuery orderByIfuEntreprise($order = Criteria::ASC) Order by the ifu_entreprise column
 * @method CommonOffrePapierQuery orderByTypeEntreprise($order = Criteria::ASC) Order by the type_entreprise column
 *
 * @method CommonOffrePapierQuery groupById() Group by the id column
 * @method CommonOffrePapierQuery groupByOrganisme() Group by the organisme column
 * @method CommonOffrePapierQuery groupByConsultationRef() Group by the consultation_ref column
 * @method CommonOffrePapierQuery groupByNomEntreprise() Group by the nom_entreprise column
 * @method CommonOffrePapierQuery groupByDateDepot() Group by the date_depot column
 * @method CommonOffrePapierQuery groupByExternalSerial() Group by the external_serial column
 * @method CommonOffrePapierQuery groupByInternalSerial() Group by the internal_serial column
 * @method CommonOffrePapierQuery groupByOffreSelectionnee() Group by the offre_selectionnee column
 * @method CommonOffrePapierQuery groupByNom() Group by the nom column
 * @method CommonOffrePapierQuery groupByPrenom() Group by the prenom column
 * @method CommonOffrePapierQuery groupByAdresse() Group by the adresse column
 * @method CommonOffrePapierQuery groupByAdresse2() Group by the adresse2 column
 * @method CommonOffrePapierQuery groupByTelephone() Group by the telephone column
 * @method CommonOffrePapierQuery groupByFax() Group by the fax column
 * @method CommonOffrePapierQuery groupByCodePostal() Group by the code_postal column
 * @method CommonOffrePapierQuery groupByVille() Group by the ville column
 * @method CommonOffrePapierQuery groupByPays() Group by the pays column
 * @method CommonOffrePapierQuery groupByAcronymePays() Group by the acronyme_pays column
 * @method CommonOffrePapierQuery groupBySiret() Group by the siret column
 * @method CommonOffrePapierQuery groupByIdentifiantNational() Group by the identifiant_national column
 * @method CommonOffrePapierQuery groupByEmail() Group by the email column
 * @method CommonOffrePapierQuery groupByObservation() Group by the observation column
 * @method CommonOffrePapierQuery groupByDateAnnulation() Group by the date_annulation column
 * @method CommonOffrePapierQuery groupByDepotAnnule() Group by the depot_annule column
 * @method CommonOffrePapierQuery groupByOffreVariante() Group by the offre_variante column
 * @method CommonOffrePapierQuery groupByStatutOffrePapier() Group by the statut_offre_papier column
 * @method CommonOffrePapierQuery groupByNumeroReponse() Group by the numero_reponse column
 * @method CommonOffrePapierQuery groupByNomAgentOuverture() Group by the nom_agent_ouverture column
 * @method CommonOffrePapierQuery groupByAgentIdOuverture() Group by the agent_id_ouverture column
 * @method CommonOffrePapierQuery groupByDateheureOuverture() Group by the dateheure_ouverture column
 * @method CommonOffrePapierQuery groupByIfuEntreprise() Group by the ifu_entreprise column
 * @method CommonOffrePapierQuery groupByTypeEntreprise() Group by the type_entreprise column
 *
 * @method CommonOffrePapierQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonOffrePapierQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonOffrePapierQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonOffrePapierQuery leftJoinCommonConsultation($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonConsultation relation
 * @method CommonOffrePapierQuery rightJoinCommonConsultation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonConsultation relation
 * @method CommonOffrePapierQuery innerJoinCommonConsultation($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonConsultation relation
 *
 * @method CommonOffrePapier findOne(PropelPDO $con = null) Return the first CommonOffrePapier matching the query
 * @method CommonOffrePapier findOneOrCreate(PropelPDO $con = null) Return the first CommonOffrePapier matching the query, or a new CommonOffrePapier object populated from the query conditions when no match is found
 *
 * @method CommonOffrePapier findOneById(int $id) Return the first CommonOffrePapier filtered by the id column
 * @method CommonOffrePapier findOneByOrganisme(string $organisme) Return the first CommonOffrePapier filtered by the organisme column
 * @method CommonOffrePapier findOneByConsultationRef(int $consultation_ref) Return the first CommonOffrePapier filtered by the consultation_ref column
 * @method CommonOffrePapier findOneByNomEntreprise(string $nom_entreprise) Return the first CommonOffrePapier filtered by the nom_entreprise column
 * @method CommonOffrePapier findOneByDateDepot(string $date_depot) Return the first CommonOffrePapier filtered by the date_depot column
 * @method CommonOffrePapier findOneByExternalSerial(string $external_serial) Return the first CommonOffrePapier filtered by the external_serial column
 * @method CommonOffrePapier findOneByInternalSerial(string $internal_serial) Return the first CommonOffrePapier filtered by the internal_serial column
 * @method CommonOffrePapier findOneByOffreSelectionnee(int $offre_selectionnee) Return the first CommonOffrePapier filtered by the offre_selectionnee column
 * @method CommonOffrePapier findOneByNom(string $nom) Return the first CommonOffrePapier filtered by the nom column
 * @method CommonOffrePapier findOneByPrenom(string $prenom) Return the first CommonOffrePapier filtered by the prenom column
 * @method CommonOffrePapier findOneByAdresse(string $adresse) Return the first CommonOffrePapier filtered by the adresse column
 * @method CommonOffrePapier findOneByAdresse2(string $adresse2) Return the first CommonOffrePapier filtered by the adresse2 column
 * @method CommonOffrePapier findOneByTelephone(string $telephone) Return the first CommonOffrePapier filtered by the telephone column
 * @method CommonOffrePapier findOneByFax(string $fax) Return the first CommonOffrePapier filtered by the fax column
 * @method CommonOffrePapier findOneByCodePostal(string $code_postal) Return the first CommonOffrePapier filtered by the code_postal column
 * @method CommonOffrePapier findOneByVille(string $ville) Return the first CommonOffrePapier filtered by the ville column
 * @method CommonOffrePapier findOneByPays(string $pays) Return the first CommonOffrePapier filtered by the pays column
 * @method CommonOffrePapier findOneByAcronymePays(string $acronyme_pays) Return the first CommonOffrePapier filtered by the acronyme_pays column
 * @method CommonOffrePapier findOneBySiret(string $siret) Return the first CommonOffrePapier filtered by the siret column
 * @method CommonOffrePapier findOneByIdentifiantNational(string $identifiant_national) Return the first CommonOffrePapier filtered by the identifiant_national column
 * @method CommonOffrePapier findOneByEmail(string $email) Return the first CommonOffrePapier filtered by the email column
 * @method CommonOffrePapier findOneByObservation(string $observation) Return the first CommonOffrePapier filtered by the observation column
 * @method CommonOffrePapier findOneByDateAnnulation(string $date_annulation) Return the first CommonOffrePapier filtered by the date_annulation column
 * @method CommonOffrePapier findOneByDepotAnnule(string $depot_annule) Return the first CommonOffrePapier filtered by the depot_annule column
 * @method CommonOffrePapier findOneByOffreVariante(string $offre_variante) Return the first CommonOffrePapier filtered by the offre_variante column
 * @method CommonOffrePapier findOneByStatutOffrePapier(int $statut_offre_papier) Return the first CommonOffrePapier filtered by the statut_offre_papier column
 * @method CommonOffrePapier findOneByNumeroReponse(int $numero_reponse) Return the first CommonOffrePapier filtered by the numero_reponse column
 * @method CommonOffrePapier findOneByNomAgentOuverture(string $nom_agent_ouverture) Return the first CommonOffrePapier filtered by the nom_agent_ouverture column
 * @method CommonOffrePapier findOneByAgentIdOuverture(int $agent_id_ouverture) Return the first CommonOffrePapier filtered by the agent_id_ouverture column
 * @method CommonOffrePapier findOneByDateheureOuverture(string $dateheure_ouverture) Return the first CommonOffrePapier filtered by the dateheure_ouverture column
 * @method CommonOffrePapier findOneByIfuEntreprise(string $ifu_entreprise) Return the first CommonOffrePapier filtered by the ifu_entreprise column
 * @method CommonOffrePapier findOneByTypeEntreprise(string $type_entreprise) Return the first CommonOffrePapier filtered by the type_entreprise column
 *
 * @method array findById(int $id) Return CommonOffrePapier objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonOffrePapier objects filtered by the organisme column
 * @method array findByConsultationRef(int $consultation_ref) Return CommonOffrePapier objects filtered by the consultation_ref column
 * @method array findByNomEntreprise(string $nom_entreprise) Return CommonOffrePapier objects filtered by the nom_entreprise column
 * @method array findByDateDepot(string $date_depot) Return CommonOffrePapier objects filtered by the date_depot column
 * @method array findByExternalSerial(string $external_serial) Return CommonOffrePapier objects filtered by the external_serial column
 * @method array findByInternalSerial(string $internal_serial) Return CommonOffrePapier objects filtered by the internal_serial column
 * @method array findByOffreSelectionnee(int $offre_selectionnee) Return CommonOffrePapier objects filtered by the offre_selectionnee column
 * @method array findByNom(string $nom) Return CommonOffrePapier objects filtered by the nom column
 * @method array findByPrenom(string $prenom) Return CommonOffrePapier objects filtered by the prenom column
 * @method array findByAdresse(string $adresse) Return CommonOffrePapier objects filtered by the adresse column
 * @method array findByAdresse2(string $adresse2) Return CommonOffrePapier objects filtered by the adresse2 column
 * @method array findByTelephone(string $telephone) Return CommonOffrePapier objects filtered by the telephone column
 * @method array findByFax(string $fax) Return CommonOffrePapier objects filtered by the fax column
 * @method array findByCodePostal(string $code_postal) Return CommonOffrePapier objects filtered by the code_postal column
 * @method array findByVille(string $ville) Return CommonOffrePapier objects filtered by the ville column
 * @method array findByPays(string $pays) Return CommonOffrePapier objects filtered by the pays column
 * @method array findByAcronymePays(string $acronyme_pays) Return CommonOffrePapier objects filtered by the acronyme_pays column
 * @method array findBySiret(string $siret) Return CommonOffrePapier objects filtered by the siret column
 * @method array findByIdentifiantNational(string $identifiant_national) Return CommonOffrePapier objects filtered by the identifiant_national column
 * @method array findByEmail(string $email) Return CommonOffrePapier objects filtered by the email column
 * @method array findByObservation(string $observation) Return CommonOffrePapier objects filtered by the observation column
 * @method array findByDateAnnulation(string $date_annulation) Return CommonOffrePapier objects filtered by the date_annulation column
 * @method array findByDepotAnnule(string $depot_annule) Return CommonOffrePapier objects filtered by the depot_annule column
 * @method array findByOffreVariante(string $offre_variante) Return CommonOffrePapier objects filtered by the offre_variante column
 * @method array findByStatutOffrePapier(int $statut_offre_papier) Return CommonOffrePapier objects filtered by the statut_offre_papier column
 * @method array findByNumeroReponse(int $numero_reponse) Return CommonOffrePapier objects filtered by the numero_reponse column
 * @method array findByNomAgentOuverture(string $nom_agent_ouverture) Return CommonOffrePapier objects filtered by the nom_agent_ouverture column
 * @method array findByAgentIdOuverture(int $agent_id_ouverture) Return CommonOffrePapier objects filtered by the agent_id_ouverture column
 * @method array findByDateheureOuverture(string $dateheure_ouverture) Return CommonOffrePapier objects filtered by the dateheure_ouverture column
 * @method array findByIfuEntreprise(string $ifu_entreprise) Return CommonOffrePapier objects filtered by the ifu_entreprise column
 * @method array findByTypeEntreprise(string $type_entreprise) Return CommonOffrePapier objects filtered by the type_entreprise column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonOffrePapierQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonOffrePapierQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonOffrePapier', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonOffrePapierQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonOffrePapierQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonOffrePapierQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonOffrePapierQuery) {
            return $criteria;
        }
        $query = new CommonOffrePapierQuery();
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
                         A Primary key composition: [$id, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonOffrePapier|CommonOffrePapier[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonOffrePapierPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonOffrePapierPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonOffrePapier A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `consultation_ref`, `nom_entreprise`, `date_depot`, `external_serial`, `internal_serial`, `offre_selectionnee`, `nom`, `prenom`, `adresse`, `adresse2`, `telephone`, `fax`, `code_postal`, `ville`, `pays`, `acronyme_pays`, `siret`, `identifiant_national`, `email`, `observation`, `date_annulation`, `depot_annule`, `offre_variante`, `statut_offre_papier`, `numero_reponse`, `nom_agent_ouverture`, `agent_id_ouverture`, `dateheure_ouverture`, `ifu_entreprise`, `type_entreprise` FROM `Offre_papier` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonOffrePapier();
            $obj->hydrate($row);
            CommonOffrePapierPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonOffrePapier|CommonOffrePapier[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonOffrePapier[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonOffrePapierQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonOffrePapierPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonOffrePapierPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonOffrePapierQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonOffrePapierPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonOffrePapierPeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return CommonOffrePapierQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonOffrePapierPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonOffrePapierPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOffrePapierPeer::ID, $id, $comparison);
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
     * @return CommonOffrePapierQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonOffrePapierPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the consultation_ref column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultationRef(1234); // WHERE consultation_ref = 1234
     * $query->filterByConsultationRef(array(12, 34)); // WHERE consultation_ref IN (12, 34)
     * $query->filterByConsultationRef(array('min' => 12)); // WHERE consultation_ref >= 12
     * $query->filterByConsultationRef(array('max' => 12)); // WHERE consultation_ref <= 12
     * </code>
     *
     * @see       filterByCommonConsultation()
     *
     * @param     mixed $consultationRef The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffrePapierQuery The current query, for fluid interface
     */
    public function filterByConsultationRef($consultationRef = null, $comparison = null)
    {
        if (is_array($consultationRef)) {
            $useMinMax = false;
            if (isset($consultationRef['min'])) {
                $this->addUsingAlias(CommonOffrePapierPeer::CONSULTATION_REF, $consultationRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($consultationRef['max'])) {
                $this->addUsingAlias(CommonOffrePapierPeer::CONSULTATION_REF, $consultationRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOffrePapierPeer::CONSULTATION_REF, $consultationRef, $comparison);
    }

    /**
     * Filter the query on the nom_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByNomEntreprise('fooValue');   // WHERE nom_entreprise = 'fooValue'
     * $query->filterByNomEntreprise('%fooValue%'); // WHERE nom_entreprise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomEntreprise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffrePapierQuery The current query, for fluid interface
     */
    public function filterByNomEntreprise($nomEntreprise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomEntreprise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomEntreprise)) {
                $nomEntreprise = str_replace('*', '%', $nomEntreprise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffrePapierPeer::NOM_ENTREPRISE, $nomEntreprise, $comparison);
    }

    /**
     * Filter the query on the date_depot column
     *
     * Example usage:
     * <code>
     * $query->filterByDateDepot('2011-03-14'); // WHERE date_depot = '2011-03-14'
     * $query->filterByDateDepot('now'); // WHERE date_depot = '2011-03-14'
     * $query->filterByDateDepot(array('max' => 'yesterday')); // WHERE date_depot > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateDepot The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffrePapierQuery The current query, for fluid interface
     */
    public function filterByDateDepot($dateDepot = null, $comparison = null)
    {
        if (is_array($dateDepot)) {
            $useMinMax = false;
            if (isset($dateDepot['min'])) {
                $this->addUsingAlias(CommonOffrePapierPeer::DATE_DEPOT, $dateDepot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateDepot['max'])) {
                $this->addUsingAlias(CommonOffrePapierPeer::DATE_DEPOT, $dateDepot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOffrePapierPeer::DATE_DEPOT, $dateDepot, $comparison);
    }

    /**
     * Filter the query on the external_serial column
     *
     * Example usage:
     * <code>
     * $query->filterByExternalSerial('fooValue');   // WHERE external_serial = 'fooValue'
     * $query->filterByExternalSerial('%fooValue%'); // WHERE external_serial LIKE '%fooValue%'
     * </code>
     *
     * @param     string $externalSerial The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffrePapierQuery The current query, for fluid interface
     */
    public function filterByExternalSerial($externalSerial = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($externalSerial)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $externalSerial)) {
                $externalSerial = str_replace('*', '%', $externalSerial);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffrePapierPeer::EXTERNAL_SERIAL, $externalSerial, $comparison);
    }

    /**
     * Filter the query on the internal_serial column
     *
     * Example usage:
     * <code>
     * $query->filterByInternalSerial('fooValue');   // WHERE internal_serial = 'fooValue'
     * $query->filterByInternalSerial('%fooValue%'); // WHERE internal_serial LIKE '%fooValue%'
     * </code>
     *
     * @param     string $internalSerial The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffrePapierQuery The current query, for fluid interface
     */
    public function filterByInternalSerial($internalSerial = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($internalSerial)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $internalSerial)) {
                $internalSerial = str_replace('*', '%', $internalSerial);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffrePapierPeer::INTERNAL_SERIAL, $internalSerial, $comparison);
    }

    /**
     * Filter the query on the offre_selectionnee column
     *
     * Example usage:
     * <code>
     * $query->filterByOffreSelectionnee(1234); // WHERE offre_selectionnee = 1234
     * $query->filterByOffreSelectionnee(array(12, 34)); // WHERE offre_selectionnee IN (12, 34)
     * $query->filterByOffreSelectionnee(array('min' => 12)); // WHERE offre_selectionnee >= 12
     * $query->filterByOffreSelectionnee(array('max' => 12)); // WHERE offre_selectionnee <= 12
     * </code>
     *
     * @param     mixed $offreSelectionnee The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffrePapierQuery The current query, for fluid interface
     */
    public function filterByOffreSelectionnee($offreSelectionnee = null, $comparison = null)
    {
        if (is_array($offreSelectionnee)) {
            $useMinMax = false;
            if (isset($offreSelectionnee['min'])) {
                $this->addUsingAlias(CommonOffrePapierPeer::OFFRE_SELECTIONNEE, $offreSelectionnee['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($offreSelectionnee['max'])) {
                $this->addUsingAlias(CommonOffrePapierPeer::OFFRE_SELECTIONNEE, $offreSelectionnee['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOffrePapierPeer::OFFRE_SELECTIONNEE, $offreSelectionnee, $comparison);
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
     * @return CommonOffrePapierQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonOffrePapierPeer::NOM, $nom, $comparison);
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
     * @return CommonOffrePapierQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonOffrePapierPeer::PRENOM, $prenom, $comparison);
    }

    /**
     * Filter the query on the adresse column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresse('fooValue');   // WHERE adresse = 'fooValue'
     * $query->filterByAdresse('%fooValue%'); // WHERE adresse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffrePapierQuery The current query, for fluid interface
     */
    public function filterByAdresse($adresse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresse)) {
                $adresse = str_replace('*', '%', $adresse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffrePapierPeer::ADRESSE, $adresse, $comparison);
    }

    /**
     * Filter the query on the adresse2 column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresse2('fooValue');   // WHERE adresse2 = 'fooValue'
     * $query->filterByAdresse2('%fooValue%'); // WHERE adresse2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresse2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffrePapierQuery The current query, for fluid interface
     */
    public function filterByAdresse2($adresse2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresse2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresse2)) {
                $adresse2 = str_replace('*', '%', $adresse2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffrePapierPeer::ADRESSE2, $adresse2, $comparison);
    }

    /**
     * Filter the query on the telephone column
     *
     * Example usage:
     * <code>
     * $query->filterByTelephone('fooValue');   // WHERE telephone = 'fooValue'
     * $query->filterByTelephone('%fooValue%'); // WHERE telephone LIKE '%fooValue%'
     * </code>
     *
     * @param     string $telephone The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffrePapierQuery The current query, for fluid interface
     */
    public function filterByTelephone($telephone = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($telephone)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $telephone)) {
                $telephone = str_replace('*', '%', $telephone);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffrePapierPeer::TELEPHONE, $telephone, $comparison);
    }

    /**
     * Filter the query on the fax column
     *
     * Example usage:
     * <code>
     * $query->filterByFax('fooValue');   // WHERE fax = 'fooValue'
     * $query->filterByFax('%fooValue%'); // WHERE fax LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fax The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffrePapierQuery The current query, for fluid interface
     */
    public function filterByFax($fax = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fax)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fax)) {
                $fax = str_replace('*', '%', $fax);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffrePapierPeer::FAX, $fax, $comparison);
    }

    /**
     * Filter the query on the code_postal column
     *
     * Example usage:
     * <code>
     * $query->filterByCodePostal('fooValue');   // WHERE code_postal = 'fooValue'
     * $query->filterByCodePostal('%fooValue%'); // WHERE code_postal LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codePostal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffrePapierQuery The current query, for fluid interface
     */
    public function filterByCodePostal($codePostal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codePostal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codePostal)) {
                $codePostal = str_replace('*', '%', $codePostal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffrePapierPeer::CODE_POSTAL, $codePostal, $comparison);
    }

    /**
     * Filter the query on the ville column
     *
     * Example usage:
     * <code>
     * $query->filterByVille('fooValue');   // WHERE ville = 'fooValue'
     * $query->filterByVille('%fooValue%'); // WHERE ville LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ville The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffrePapierQuery The current query, for fluid interface
     */
    public function filterByVille($ville = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ville)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ville)) {
                $ville = str_replace('*', '%', $ville);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffrePapierPeer::VILLE, $ville, $comparison);
    }

    /**
     * Filter the query on the pays column
     *
     * Example usage:
     * <code>
     * $query->filterByPays('fooValue');   // WHERE pays = 'fooValue'
     * $query->filterByPays('%fooValue%'); // WHERE pays LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pays The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffrePapierQuery The current query, for fluid interface
     */
    public function filterByPays($pays = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pays)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pays)) {
                $pays = str_replace('*', '%', $pays);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffrePapierPeer::PAYS, $pays, $comparison);
    }

    /**
     * Filter the query on the acronyme_pays column
     *
     * Example usage:
     * <code>
     * $query->filterByAcronymePays('fooValue');   // WHERE acronyme_pays = 'fooValue'
     * $query->filterByAcronymePays('%fooValue%'); // WHERE acronyme_pays LIKE '%fooValue%'
     * </code>
     *
     * @param     string $acronymePays The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffrePapierQuery The current query, for fluid interface
     */
    public function filterByAcronymePays($acronymePays = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($acronymePays)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $acronymePays)) {
                $acronymePays = str_replace('*', '%', $acronymePays);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffrePapierPeer::ACRONYME_PAYS, $acronymePays, $comparison);
    }

    /**
     * Filter the query on the siret column
     *
     * Example usage:
     * <code>
     * $query->filterBySiret('fooValue');   // WHERE siret = 'fooValue'
     * $query->filterBySiret('%fooValue%'); // WHERE siret LIKE '%fooValue%'
     * </code>
     *
     * @param     string $siret The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffrePapierQuery The current query, for fluid interface
     */
    public function filterBySiret($siret = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($siret)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $siret)) {
                $siret = str_replace('*', '%', $siret);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffrePapierPeer::SIRET, $siret, $comparison);
    }

    /**
     * Filter the query on the identifiant_national column
     *
     * Example usage:
     * <code>
     * $query->filterByIdentifiantNational('fooValue');   // WHERE identifiant_national = 'fooValue'
     * $query->filterByIdentifiantNational('%fooValue%'); // WHERE identifiant_national LIKE '%fooValue%'
     * </code>
     *
     * @param     string $identifiantNational The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffrePapierQuery The current query, for fluid interface
     */
    public function filterByIdentifiantNational($identifiantNational = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($identifiantNational)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $identifiantNational)) {
                $identifiantNational = str_replace('*', '%', $identifiantNational);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffrePapierPeer::IDENTIFIANT_NATIONAL, $identifiantNational, $comparison);
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
     * @return CommonOffrePapierQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonOffrePapierPeer::EMAIL, $email, $comparison);
    }

    /**
     * Filter the query on the observation column
     *
     * Example usage:
     * <code>
     * $query->filterByObservation('fooValue');   // WHERE observation = 'fooValue'
     * $query->filterByObservation('%fooValue%'); // WHERE observation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $observation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffrePapierQuery The current query, for fluid interface
     */
    public function filterByObservation($observation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($observation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $observation)) {
                $observation = str_replace('*', '%', $observation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffrePapierPeer::OBSERVATION, $observation, $comparison);
    }

    /**
     * Filter the query on the date_annulation column
     *
     * Example usage:
     * <code>
     * $query->filterByDateAnnulation('fooValue');   // WHERE date_annulation = 'fooValue'
     * $query->filterByDateAnnulation('%fooValue%'); // WHERE date_annulation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateAnnulation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffrePapierQuery The current query, for fluid interface
     */
    public function filterByDateAnnulation($dateAnnulation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateAnnulation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateAnnulation)) {
                $dateAnnulation = str_replace('*', '%', $dateAnnulation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffrePapierPeer::DATE_ANNULATION, $dateAnnulation, $comparison);
    }

    /**
     * Filter the query on the depot_annule column
     *
     * Example usage:
     * <code>
     * $query->filterByDepotAnnule('fooValue');   // WHERE depot_annule = 'fooValue'
     * $query->filterByDepotAnnule('%fooValue%'); // WHERE depot_annule LIKE '%fooValue%'
     * </code>
     *
     * @param     string $depotAnnule The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffrePapierQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonOffrePapierPeer::DEPOT_ANNULE, $depotAnnule, $comparison);
    }

    /**
     * Filter the query on the offre_variante column
     *
     * Example usage:
     * <code>
     * $query->filterByOffreVariante('fooValue');   // WHERE offre_variante = 'fooValue'
     * $query->filterByOffreVariante('%fooValue%'); // WHERE offre_variante LIKE '%fooValue%'
     * </code>
     *
     * @param     string $offreVariante The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffrePapierQuery The current query, for fluid interface
     */
    public function filterByOffreVariante($offreVariante = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($offreVariante)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $offreVariante)) {
                $offreVariante = str_replace('*', '%', $offreVariante);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffrePapierPeer::OFFRE_VARIANTE, $offreVariante, $comparison);
    }

    /**
     * Filter the query on the statut_offre_papier column
     *
     * Example usage:
     * <code>
     * $query->filterByStatutOffrePapier(1234); // WHERE statut_offre_papier = 1234
     * $query->filterByStatutOffrePapier(array(12, 34)); // WHERE statut_offre_papier IN (12, 34)
     * $query->filterByStatutOffrePapier(array('min' => 12)); // WHERE statut_offre_papier >= 12
     * $query->filterByStatutOffrePapier(array('max' => 12)); // WHERE statut_offre_papier <= 12
     * </code>
     *
     * @param     mixed $statutOffrePapier The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffrePapierQuery The current query, for fluid interface
     */
    public function filterByStatutOffrePapier($statutOffrePapier = null, $comparison = null)
    {
        if (is_array($statutOffrePapier)) {
            $useMinMax = false;
            if (isset($statutOffrePapier['min'])) {
                $this->addUsingAlias(CommonOffrePapierPeer::STATUT_OFFRE_PAPIER, $statutOffrePapier['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statutOffrePapier['max'])) {
                $this->addUsingAlias(CommonOffrePapierPeer::STATUT_OFFRE_PAPIER, $statutOffrePapier['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOffrePapierPeer::STATUT_OFFRE_PAPIER, $statutOffrePapier, $comparison);
    }

    /**
     * Filter the query on the numero_reponse column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeroReponse(1234); // WHERE numero_reponse = 1234
     * $query->filterByNumeroReponse(array(12, 34)); // WHERE numero_reponse IN (12, 34)
     * $query->filterByNumeroReponse(array('min' => 12)); // WHERE numero_reponse >= 12
     * $query->filterByNumeroReponse(array('max' => 12)); // WHERE numero_reponse <= 12
     * </code>
     *
     * @param     mixed $numeroReponse The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffrePapierQuery The current query, for fluid interface
     */
    public function filterByNumeroReponse($numeroReponse = null, $comparison = null)
    {
        if (is_array($numeroReponse)) {
            $useMinMax = false;
            if (isset($numeroReponse['min'])) {
                $this->addUsingAlias(CommonOffrePapierPeer::NUMERO_REPONSE, $numeroReponse['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($numeroReponse['max'])) {
                $this->addUsingAlias(CommonOffrePapierPeer::NUMERO_REPONSE, $numeroReponse['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOffrePapierPeer::NUMERO_REPONSE, $numeroReponse, $comparison);
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
     * @return CommonOffrePapierQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonOffrePapierPeer::NOM_AGENT_OUVERTURE, $nomAgentOuverture, $comparison);
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
     * @return CommonOffrePapierQuery The current query, for fluid interface
     */
    public function filterByAgentIdOuverture($agentIdOuverture = null, $comparison = null)
    {
        if (is_array($agentIdOuverture)) {
            $useMinMax = false;
            if (isset($agentIdOuverture['min'])) {
                $this->addUsingAlias(CommonOffrePapierPeer::AGENT_ID_OUVERTURE, $agentIdOuverture['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($agentIdOuverture['max'])) {
                $this->addUsingAlias(CommonOffrePapierPeer::AGENT_ID_OUVERTURE, $agentIdOuverture['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOffrePapierPeer::AGENT_ID_OUVERTURE, $agentIdOuverture, $comparison);
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
     * @return CommonOffrePapierQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonOffrePapierPeer::DATEHEURE_OUVERTURE, $dateheureOuverture, $comparison);
    }

    /**
     * Filter the query on the ifu_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByIfuEntreprise('fooValue');   // WHERE ifu_entreprise = 'fooValue'
     * $query->filterByIfuEntreprise('%fooValue%'); // WHERE ifu_entreprise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ifuEntreprise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffrePapierQuery The current query, for fluid interface
     */
    public function filterByIfuEntreprise($ifuEntreprise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ifuEntreprise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ifuEntreprise)) {
                $ifuEntreprise = str_replace('*', '%', $ifuEntreprise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffrePapierPeer::IFU_ENTREPRISE, $ifuEntreprise, $comparison);
    }

    /**
     * Filter the query on the type_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeEntreprise('fooValue');   // WHERE type_entreprise = 'fooValue'
     * $query->filterByTypeEntreprise('%fooValue%'); // WHERE type_entreprise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeEntreprise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOffrePapierQuery The current query, for fluid interface
     */
    public function filterByTypeEntreprise($typeEntreprise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeEntreprise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeEntreprise)) {
                $typeEntreprise = str_replace('*', '%', $typeEntreprise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOffrePapierPeer::TYPE_ENTREPRISE, $typeEntreprise, $comparison);
    }

    /**
     * Filter the query by a related CommonConsultation object
     *
     * @param   CommonConsultation $commonConsultation The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonOffrePapierQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonConsultation($commonConsultation, $comparison = null)
    {
        if ($commonConsultation instanceof CommonConsultation) {
            return $this
                ->addUsingAlias(CommonOffrePapierPeer::ORGANISME, $commonConsultation->getOrganisme(), $comparison)
                ->addUsingAlias(CommonOffrePapierPeer::CONSULTATION_REF, $commonConsultation->getReference(), $comparison);
        } else {
            throw new PropelException('filterByCommonConsultation() only accepts arguments of type CommonConsultation');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonConsultation relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonOffrePapierQuery The current query, for fluid interface
     */
    public function joinCommonConsultation($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonConsultation');

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
            $this->addJoinObject($join, 'CommonConsultation');
        }

        return $this;
    }

    /**
     * Use the CommonConsultation relation CommonConsultation object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonConsultationQuery A secondary query class using the current class as primary query
     */
    public function useCommonConsultationQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonConsultation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonConsultation', 'CommonConsultationQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonOffrePapier $commonOffrePapier Object to remove from the list of results
     *
     * @return CommonOffrePapierQuery The current query, for fluid interface
     */
    public function prune($commonOffrePapier = null)
    {
        if ($commonOffrePapier) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonOffrePapierPeer::ID), $commonOffrePapier->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonOffrePapierPeer::ORGANISME), $commonOffrePapier->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
