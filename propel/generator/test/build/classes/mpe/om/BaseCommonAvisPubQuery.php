<?php


/**
 * Base class that represents a query for the 'Avis_Pub' table.
 *
 * 
 *
 * @method CommonAvisPubQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonAvisPubQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonAvisPubQuery orderByConsultationRef($order = Criteria::ASC) Order by the consultation_ref column
 * @method CommonAvisPubQuery orderByStatut($order = Criteria::ASC) Order by the statut column
 * @method CommonAvisPubQuery orderByIdAgent($order = Criteria::ASC) Order by the id_agent column
 * @method CommonAvisPubQuery orderByIdAgentValidateur($order = Criteria::ASC) Order by the id_agent_validateur column
 * @method CommonAvisPubQuery orderByIdAgentValidateurEco($order = Criteria::ASC) Order by the id_agent_validateur_eco column
 * @method CommonAvisPubQuery orderByIdAgentValidateurSip($order = Criteria::ASC) Order by the id_agent_validateur_sip column
 * @method CommonAvisPubQuery orderByDateCreation($order = Criteria::ASC) Order by the date_creation column
 * @method CommonAvisPubQuery orderByDateEnvoi($order = Criteria::ASC) Order by the date_envoi column
 * @method CommonAvisPubQuery orderByTypeAvis($order = Criteria::ASC) Order by the type_avis column
 * @method CommonAvisPubQuery orderByDatePublication($order = Criteria::ASC) Order by the date_publication column
 * @method CommonAvisPubQuery orderByDateValidation($order = Criteria::ASC) Order by the date_validation column
 * @method CommonAvisPubQuery orderBySip($order = Criteria::ASC) Order by the Sip column
 * @method CommonAvisPubQuery orderByIdAvisPortail($order = Criteria::ASC) Order by the id_avis_portail column
 * @method CommonAvisPubQuery orderByIdAvisPresse($order = Criteria::ASC) Order by the id_avis_presse column
 * @method CommonAvisPubQuery orderByIdAvisPdfOpoce($order = Criteria::ASC) Order by the id_avis_pdf_opoce column
 * @method CommonAvisPubQuery orderByIdBlobLogo($order = Criteria::ASC) Order by the id_blob_logo column
 *
 * @method CommonAvisPubQuery groupById() Group by the id column
 * @method CommonAvisPubQuery groupByOrganisme() Group by the organisme column
 * @method CommonAvisPubQuery groupByConsultationRef() Group by the consultation_ref column
 * @method CommonAvisPubQuery groupByStatut() Group by the statut column
 * @method CommonAvisPubQuery groupByIdAgent() Group by the id_agent column
 * @method CommonAvisPubQuery groupByIdAgentValidateur() Group by the id_agent_validateur column
 * @method CommonAvisPubQuery groupByIdAgentValidateurEco() Group by the id_agent_validateur_eco column
 * @method CommonAvisPubQuery groupByIdAgentValidateurSip() Group by the id_agent_validateur_sip column
 * @method CommonAvisPubQuery groupByDateCreation() Group by the date_creation column
 * @method CommonAvisPubQuery groupByDateEnvoi() Group by the date_envoi column
 * @method CommonAvisPubQuery groupByTypeAvis() Group by the type_avis column
 * @method CommonAvisPubQuery groupByDatePublication() Group by the date_publication column
 * @method CommonAvisPubQuery groupByDateValidation() Group by the date_validation column
 * @method CommonAvisPubQuery groupBySip() Group by the Sip column
 * @method CommonAvisPubQuery groupByIdAvisPortail() Group by the id_avis_portail column
 * @method CommonAvisPubQuery groupByIdAvisPresse() Group by the id_avis_presse column
 * @method CommonAvisPubQuery groupByIdAvisPdfOpoce() Group by the id_avis_pdf_opoce column
 * @method CommonAvisPubQuery groupByIdBlobLogo() Group by the id_blob_logo column
 *
 * @method CommonAvisPubQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonAvisPubQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonAvisPubQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonAvisPubQuery leftJoinCommonConsultation($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonConsultation relation
 * @method CommonAvisPubQuery rightJoinCommonConsultation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonConsultation relation
 * @method CommonAvisPubQuery innerJoinCommonConsultation($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonConsultation relation
 *
 * @method CommonAvisPub findOne(PropelPDO $con = null) Return the first CommonAvisPub matching the query
 * @method CommonAvisPub findOneOrCreate(PropelPDO $con = null) Return the first CommonAvisPub matching the query, or a new CommonAvisPub object populated from the query conditions when no match is found
 *
 * @method CommonAvisPub findOneById(int $id) Return the first CommonAvisPub filtered by the id column
 * @method CommonAvisPub findOneByOrganisme(string $organisme) Return the first CommonAvisPub filtered by the organisme column
 * @method CommonAvisPub findOneByConsultationRef(int $consultation_ref) Return the first CommonAvisPub filtered by the consultation_ref column
 * @method CommonAvisPub findOneByStatut(string $statut) Return the first CommonAvisPub filtered by the statut column
 * @method CommonAvisPub findOneByIdAgent(int $id_agent) Return the first CommonAvisPub filtered by the id_agent column
 * @method CommonAvisPub findOneByIdAgentValidateur(int $id_agent_validateur) Return the first CommonAvisPub filtered by the id_agent_validateur column
 * @method CommonAvisPub findOneByIdAgentValidateurEco(int $id_agent_validateur_eco) Return the first CommonAvisPub filtered by the id_agent_validateur_eco column
 * @method CommonAvisPub findOneByIdAgentValidateurSip(int $id_agent_validateur_sip) Return the first CommonAvisPub filtered by the id_agent_validateur_sip column
 * @method CommonAvisPub findOneByDateCreation(string $date_creation) Return the first CommonAvisPub filtered by the date_creation column
 * @method CommonAvisPub findOneByDateEnvoi(string $date_envoi) Return the first CommonAvisPub filtered by the date_envoi column
 * @method CommonAvisPub findOneByTypeAvis(int $type_avis) Return the first CommonAvisPub filtered by the type_avis column
 * @method CommonAvisPub findOneByDatePublication(string $date_publication) Return the first CommonAvisPub filtered by the date_publication column
 * @method CommonAvisPub findOneByDateValidation(string $date_validation) Return the first CommonAvisPub filtered by the date_validation column
 * @method CommonAvisPub findOneBySip(string $Sip) Return the first CommonAvisPub filtered by the Sip column
 * @method CommonAvisPub findOneByIdAvisPortail(int $id_avis_portail) Return the first CommonAvisPub filtered by the id_avis_portail column
 * @method CommonAvisPub findOneByIdAvisPresse(int $id_avis_presse) Return the first CommonAvisPub filtered by the id_avis_presse column
 * @method CommonAvisPub findOneByIdAvisPdfOpoce(int $id_avis_pdf_opoce) Return the first CommonAvisPub filtered by the id_avis_pdf_opoce column
 * @method CommonAvisPub findOneByIdBlobLogo(int $id_blob_logo) Return the first CommonAvisPub filtered by the id_blob_logo column
 *
 * @method array findById(int $id) Return CommonAvisPub objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonAvisPub objects filtered by the organisme column
 * @method array findByConsultationRef(int $consultation_ref) Return CommonAvisPub objects filtered by the consultation_ref column
 * @method array findByStatut(string $statut) Return CommonAvisPub objects filtered by the statut column
 * @method array findByIdAgent(int $id_agent) Return CommonAvisPub objects filtered by the id_agent column
 * @method array findByIdAgentValidateur(int $id_agent_validateur) Return CommonAvisPub objects filtered by the id_agent_validateur column
 * @method array findByIdAgentValidateurEco(int $id_agent_validateur_eco) Return CommonAvisPub objects filtered by the id_agent_validateur_eco column
 * @method array findByIdAgentValidateurSip(int $id_agent_validateur_sip) Return CommonAvisPub objects filtered by the id_agent_validateur_sip column
 * @method array findByDateCreation(string $date_creation) Return CommonAvisPub objects filtered by the date_creation column
 * @method array findByDateEnvoi(string $date_envoi) Return CommonAvisPub objects filtered by the date_envoi column
 * @method array findByTypeAvis(int $type_avis) Return CommonAvisPub objects filtered by the type_avis column
 * @method array findByDatePublication(string $date_publication) Return CommonAvisPub objects filtered by the date_publication column
 * @method array findByDateValidation(string $date_validation) Return CommonAvisPub objects filtered by the date_validation column
 * @method array findBySip(string $Sip) Return CommonAvisPub objects filtered by the Sip column
 * @method array findByIdAvisPortail(int $id_avis_portail) Return CommonAvisPub objects filtered by the id_avis_portail column
 * @method array findByIdAvisPresse(int $id_avis_presse) Return CommonAvisPub objects filtered by the id_avis_presse column
 * @method array findByIdAvisPdfOpoce(int $id_avis_pdf_opoce) Return CommonAvisPub objects filtered by the id_avis_pdf_opoce column
 * @method array findByIdBlobLogo(int $id_blob_logo) Return CommonAvisPub objects filtered by the id_blob_logo column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonAvisPubQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonAvisPubQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonAvisPub', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonAvisPubQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonAvisPubQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonAvisPubQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonAvisPubQuery) {
            return $criteria;
        }
        $query = new CommonAvisPubQuery();
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
     * @return   CommonAvisPub|CommonAvisPub[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonAvisPubPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonAvisPubPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonAvisPub A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `consultation_ref`, `statut`, `id_agent`, `id_agent_validateur`, `id_agent_validateur_eco`, `id_agent_validateur_sip`, `date_creation`, `date_envoi`, `type_avis`, `date_publication`, `date_validation`, `Sip`, `id_avis_portail`, `id_avis_presse`, `id_avis_pdf_opoce`, `id_blob_logo` FROM `Avis_Pub` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonAvisPub();
            $obj->hydrate($row);
            CommonAvisPubPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonAvisPub|CommonAvisPub[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonAvisPub[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonAvisPubQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonAvisPubPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonAvisPubPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonAvisPubQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonAvisPubPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonAvisPubPeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonAvisPubQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonAvisPubPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonAvisPubPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAvisPubPeer::ID, $id, $comparison);
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
     * @return CommonAvisPubQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonAvisPubPeer::ORGANISME, $organisme, $comparison);
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
     * @return CommonAvisPubQuery The current query, for fluid interface
     */
    public function filterByConsultationRef($consultationRef = null, $comparison = null)
    {
        if (is_array($consultationRef)) {
            $useMinMax = false;
            if (isset($consultationRef['min'])) {
                $this->addUsingAlias(CommonAvisPubPeer::CONSULTATION_REF, $consultationRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($consultationRef['max'])) {
                $this->addUsingAlias(CommonAvisPubPeer::CONSULTATION_REF, $consultationRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAvisPubPeer::CONSULTATION_REF, $consultationRef, $comparison);
    }

    /**
     * Filter the query on the statut column
     *
     * Example usage:
     * <code>
     * $query->filterByStatut('fooValue');   // WHERE statut = 'fooValue'
     * $query->filterByStatut('%fooValue%'); // WHERE statut LIKE '%fooValue%'
     * </code>
     *
     * @param     string $statut The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvisPubQuery The current query, for fluid interface
     */
    public function filterByStatut($statut = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($statut)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $statut)) {
                $statut = str_replace('*', '%', $statut);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAvisPubPeer::STATUT, $statut, $comparison);
    }

    /**
     * Filter the query on the id_agent column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgent(1234); // WHERE id_agent = 1234
     * $query->filterByIdAgent(array(12, 34)); // WHERE id_agent IN (12, 34)
     * $query->filterByIdAgent(array('min' => 12)); // WHERE id_agent >= 12
     * $query->filterByIdAgent(array('max' => 12)); // WHERE id_agent <= 12
     * </code>
     *
     * @param     mixed $idAgent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvisPubQuery The current query, for fluid interface
     */
    public function filterByIdAgent($idAgent = null, $comparison = null)
    {
        if (is_array($idAgent)) {
            $useMinMax = false;
            if (isset($idAgent['min'])) {
                $this->addUsingAlias(CommonAvisPubPeer::ID_AGENT, $idAgent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgent['max'])) {
                $this->addUsingAlias(CommonAvisPubPeer::ID_AGENT, $idAgent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAvisPubPeer::ID_AGENT, $idAgent, $comparison);
    }

    /**
     * Filter the query on the id_agent_validateur column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentValidateur(1234); // WHERE id_agent_validateur = 1234
     * $query->filterByIdAgentValidateur(array(12, 34)); // WHERE id_agent_validateur IN (12, 34)
     * $query->filterByIdAgentValidateur(array('min' => 12)); // WHERE id_agent_validateur >= 12
     * $query->filterByIdAgentValidateur(array('max' => 12)); // WHERE id_agent_validateur <= 12
     * </code>
     *
     * @param     mixed $idAgentValidateur The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvisPubQuery The current query, for fluid interface
     */
    public function filterByIdAgentValidateur($idAgentValidateur = null, $comparison = null)
    {
        if (is_array($idAgentValidateur)) {
            $useMinMax = false;
            if (isset($idAgentValidateur['min'])) {
                $this->addUsingAlias(CommonAvisPubPeer::ID_AGENT_VALIDATEUR, $idAgentValidateur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentValidateur['max'])) {
                $this->addUsingAlias(CommonAvisPubPeer::ID_AGENT_VALIDATEUR, $idAgentValidateur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAvisPubPeer::ID_AGENT_VALIDATEUR, $idAgentValidateur, $comparison);
    }

    /**
     * Filter the query on the id_agent_validateur_eco column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentValidateurEco(1234); // WHERE id_agent_validateur_eco = 1234
     * $query->filterByIdAgentValidateurEco(array(12, 34)); // WHERE id_agent_validateur_eco IN (12, 34)
     * $query->filterByIdAgentValidateurEco(array('min' => 12)); // WHERE id_agent_validateur_eco >= 12
     * $query->filterByIdAgentValidateurEco(array('max' => 12)); // WHERE id_agent_validateur_eco <= 12
     * </code>
     *
     * @param     mixed $idAgentValidateurEco The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvisPubQuery The current query, for fluid interface
     */
    public function filterByIdAgentValidateurEco($idAgentValidateurEco = null, $comparison = null)
    {
        if (is_array($idAgentValidateurEco)) {
            $useMinMax = false;
            if (isset($idAgentValidateurEco['min'])) {
                $this->addUsingAlias(CommonAvisPubPeer::ID_AGENT_VALIDATEUR_ECO, $idAgentValidateurEco['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentValidateurEco['max'])) {
                $this->addUsingAlias(CommonAvisPubPeer::ID_AGENT_VALIDATEUR_ECO, $idAgentValidateurEco['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAvisPubPeer::ID_AGENT_VALIDATEUR_ECO, $idAgentValidateurEco, $comparison);
    }

    /**
     * Filter the query on the id_agent_validateur_sip column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentValidateurSip(1234); // WHERE id_agent_validateur_sip = 1234
     * $query->filterByIdAgentValidateurSip(array(12, 34)); // WHERE id_agent_validateur_sip IN (12, 34)
     * $query->filterByIdAgentValidateurSip(array('min' => 12)); // WHERE id_agent_validateur_sip >= 12
     * $query->filterByIdAgentValidateurSip(array('max' => 12)); // WHERE id_agent_validateur_sip <= 12
     * </code>
     *
     * @param     mixed $idAgentValidateurSip The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvisPubQuery The current query, for fluid interface
     */
    public function filterByIdAgentValidateurSip($idAgentValidateurSip = null, $comparison = null)
    {
        if (is_array($idAgentValidateurSip)) {
            $useMinMax = false;
            if (isset($idAgentValidateurSip['min'])) {
                $this->addUsingAlias(CommonAvisPubPeer::ID_AGENT_VALIDATEUR_SIP, $idAgentValidateurSip['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentValidateurSip['max'])) {
                $this->addUsingAlias(CommonAvisPubPeer::ID_AGENT_VALIDATEUR_SIP, $idAgentValidateurSip['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAvisPubPeer::ID_AGENT_VALIDATEUR_SIP, $idAgentValidateurSip, $comparison);
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
     * @return CommonAvisPubQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonAvisPubPeer::DATE_CREATION, $dateCreation, $comparison);
    }

    /**
     * Filter the query on the date_envoi column
     *
     * Example usage:
     * <code>
     * $query->filterByDateEnvoi('fooValue');   // WHERE date_envoi = 'fooValue'
     * $query->filterByDateEnvoi('%fooValue%'); // WHERE date_envoi LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateEnvoi The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvisPubQuery The current query, for fluid interface
     */
    public function filterByDateEnvoi($dateEnvoi = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateEnvoi)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateEnvoi)) {
                $dateEnvoi = str_replace('*', '%', $dateEnvoi);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAvisPubPeer::DATE_ENVOI, $dateEnvoi, $comparison);
    }

    /**
     * Filter the query on the type_avis column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeAvis(1234); // WHERE type_avis = 1234
     * $query->filterByTypeAvis(array(12, 34)); // WHERE type_avis IN (12, 34)
     * $query->filterByTypeAvis(array('min' => 12)); // WHERE type_avis >= 12
     * $query->filterByTypeAvis(array('max' => 12)); // WHERE type_avis <= 12
     * </code>
     *
     * @param     mixed $typeAvis The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvisPubQuery The current query, for fluid interface
     */
    public function filterByTypeAvis($typeAvis = null, $comparison = null)
    {
        if (is_array($typeAvis)) {
            $useMinMax = false;
            if (isset($typeAvis['min'])) {
                $this->addUsingAlias(CommonAvisPubPeer::TYPE_AVIS, $typeAvis['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeAvis['max'])) {
                $this->addUsingAlias(CommonAvisPubPeer::TYPE_AVIS, $typeAvis['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAvisPubPeer::TYPE_AVIS, $typeAvis, $comparison);
    }

    /**
     * Filter the query on the date_publication column
     *
     * Example usage:
     * <code>
     * $query->filterByDatePublication('fooValue');   // WHERE date_publication = 'fooValue'
     * $query->filterByDatePublication('%fooValue%'); // WHERE date_publication LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datePublication The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvisPubQuery The current query, for fluid interface
     */
    public function filterByDatePublication($datePublication = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datePublication)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datePublication)) {
                $datePublication = str_replace('*', '%', $datePublication);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAvisPubPeer::DATE_PUBLICATION, $datePublication, $comparison);
    }

    /**
     * Filter the query on the date_validation column
     *
     * Example usage:
     * <code>
     * $query->filterByDateValidation('fooValue');   // WHERE date_validation = 'fooValue'
     * $query->filterByDateValidation('%fooValue%'); // WHERE date_validation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateValidation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvisPubQuery The current query, for fluid interface
     */
    public function filterByDateValidation($dateValidation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateValidation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateValidation)) {
                $dateValidation = str_replace('*', '%', $dateValidation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAvisPubPeer::DATE_VALIDATION, $dateValidation, $comparison);
    }

    /**
     * Filter the query on the Sip column
     *
     * Example usage:
     * <code>
     * $query->filterBySip('fooValue');   // WHERE Sip = 'fooValue'
     * $query->filterBySip('%fooValue%'); // WHERE Sip LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sip The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvisPubQuery The current query, for fluid interface
     */
    public function filterBySip($sip = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sip)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sip)) {
                $sip = str_replace('*', '%', $sip);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAvisPubPeer::SIP, $sip, $comparison);
    }

    /**
     * Filter the query on the id_avis_portail column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAvisPortail(1234); // WHERE id_avis_portail = 1234
     * $query->filterByIdAvisPortail(array(12, 34)); // WHERE id_avis_portail IN (12, 34)
     * $query->filterByIdAvisPortail(array('min' => 12)); // WHERE id_avis_portail >= 12
     * $query->filterByIdAvisPortail(array('max' => 12)); // WHERE id_avis_portail <= 12
     * </code>
     *
     * @param     mixed $idAvisPortail The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvisPubQuery The current query, for fluid interface
     */
    public function filterByIdAvisPortail($idAvisPortail = null, $comparison = null)
    {
        if (is_array($idAvisPortail)) {
            $useMinMax = false;
            if (isset($idAvisPortail['min'])) {
                $this->addUsingAlias(CommonAvisPubPeer::ID_AVIS_PORTAIL, $idAvisPortail['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAvisPortail['max'])) {
                $this->addUsingAlias(CommonAvisPubPeer::ID_AVIS_PORTAIL, $idAvisPortail['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAvisPubPeer::ID_AVIS_PORTAIL, $idAvisPortail, $comparison);
    }

    /**
     * Filter the query on the id_avis_presse column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAvisPresse(1234); // WHERE id_avis_presse = 1234
     * $query->filterByIdAvisPresse(array(12, 34)); // WHERE id_avis_presse IN (12, 34)
     * $query->filterByIdAvisPresse(array('min' => 12)); // WHERE id_avis_presse >= 12
     * $query->filterByIdAvisPresse(array('max' => 12)); // WHERE id_avis_presse <= 12
     * </code>
     *
     * @param     mixed $idAvisPresse The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvisPubQuery The current query, for fluid interface
     */
    public function filterByIdAvisPresse($idAvisPresse = null, $comparison = null)
    {
        if (is_array($idAvisPresse)) {
            $useMinMax = false;
            if (isset($idAvisPresse['min'])) {
                $this->addUsingAlias(CommonAvisPubPeer::ID_AVIS_PRESSE, $idAvisPresse['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAvisPresse['max'])) {
                $this->addUsingAlias(CommonAvisPubPeer::ID_AVIS_PRESSE, $idAvisPresse['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAvisPubPeer::ID_AVIS_PRESSE, $idAvisPresse, $comparison);
    }

    /**
     * Filter the query on the id_avis_pdf_opoce column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAvisPdfOpoce(1234); // WHERE id_avis_pdf_opoce = 1234
     * $query->filterByIdAvisPdfOpoce(array(12, 34)); // WHERE id_avis_pdf_opoce IN (12, 34)
     * $query->filterByIdAvisPdfOpoce(array('min' => 12)); // WHERE id_avis_pdf_opoce >= 12
     * $query->filterByIdAvisPdfOpoce(array('max' => 12)); // WHERE id_avis_pdf_opoce <= 12
     * </code>
     *
     * @param     mixed $idAvisPdfOpoce The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvisPubQuery The current query, for fluid interface
     */
    public function filterByIdAvisPdfOpoce($idAvisPdfOpoce = null, $comparison = null)
    {
        if (is_array($idAvisPdfOpoce)) {
            $useMinMax = false;
            if (isset($idAvisPdfOpoce['min'])) {
                $this->addUsingAlias(CommonAvisPubPeer::ID_AVIS_PDF_OPOCE, $idAvisPdfOpoce['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAvisPdfOpoce['max'])) {
                $this->addUsingAlias(CommonAvisPubPeer::ID_AVIS_PDF_OPOCE, $idAvisPdfOpoce['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAvisPubPeer::ID_AVIS_PDF_OPOCE, $idAvisPdfOpoce, $comparison);
    }

    /**
     * Filter the query on the id_blob_logo column
     *
     * Example usage:
     * <code>
     * $query->filterByIdBlobLogo(1234); // WHERE id_blob_logo = 1234
     * $query->filterByIdBlobLogo(array(12, 34)); // WHERE id_blob_logo IN (12, 34)
     * $query->filterByIdBlobLogo(array('min' => 12)); // WHERE id_blob_logo >= 12
     * $query->filterByIdBlobLogo(array('max' => 12)); // WHERE id_blob_logo <= 12
     * </code>
     *
     * @param     mixed $idBlobLogo The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAvisPubQuery The current query, for fluid interface
     */
    public function filterByIdBlobLogo($idBlobLogo = null, $comparison = null)
    {
        if (is_array($idBlobLogo)) {
            $useMinMax = false;
            if (isset($idBlobLogo['min'])) {
                $this->addUsingAlias(CommonAvisPubPeer::ID_BLOB_LOGO, $idBlobLogo['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBlobLogo['max'])) {
                $this->addUsingAlias(CommonAvisPubPeer::ID_BLOB_LOGO, $idBlobLogo['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAvisPubPeer::ID_BLOB_LOGO, $idBlobLogo, $comparison);
    }

    /**
     * Filter the query by a related CommonConsultation object
     *
     * @param   CommonConsultation $commonConsultation The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonAvisPubQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonConsultation($commonConsultation, $comparison = null)
    {
        if ($commonConsultation instanceof CommonConsultation) {
            return $this
                ->addUsingAlias(CommonAvisPubPeer::ORGANISME, $commonConsultation->getOrganisme(), $comparison)
                ->addUsingAlias(CommonAvisPubPeer::CONSULTATION_REF, $commonConsultation->getReference(), $comparison);
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
     * @return CommonAvisPubQuery The current query, for fluid interface
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
     * @param   CommonAvisPub $commonAvisPub Object to remove from the list of results
     *
     * @return CommonAvisPubQuery The current query, for fluid interface
     */
    public function prune($commonAvisPub = null)
    {
        if ($commonAvisPub) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonAvisPubPeer::ID), $commonAvisPub->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonAvisPubPeer::ORGANISME), $commonAvisPub->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
