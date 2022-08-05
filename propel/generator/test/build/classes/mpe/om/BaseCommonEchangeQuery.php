<?php


/**
 * Base class that represents a query for the 'Echange' table.
 *
 * 
 *
 * @method CommonEchangeQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonEchangeQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonEchangeQuery orderByObjet($order = Criteria::ASC) Order by the objet column
 * @method CommonEchangeQuery orderByCorps($order = Criteria::ASC) Order by the corps column
 * @method CommonEchangeQuery orderByExpediteur($order = Criteria::ASC) Order by the expediteur column
 * @method CommonEchangeQuery orderByIdCreateur($order = Criteria::ASC) Order by the id_createur column
 * @method CommonEchangeQuery orderByRefConsultation($order = Criteria::ASC) Order by the ref_consultation column
 * @method CommonEchangeQuery orderByOptionEnvoi($order = Criteria::ASC) Order by the option_envoi column
 * @method CommonEchangeQuery orderByDateMessage($order = Criteria::ASC) Order by the date_message column
 * @method CommonEchangeQuery orderByFormat($order = Criteria::ASC) Order by the format column
 * @method CommonEchangeQuery orderByIdActionDeclencheur($order = Criteria::ASC) Order by the id_action_declencheur column
 * @method CommonEchangeQuery orderByStatus($order = Criteria::ASC) Order by the status column
 * @method CommonEchangeQuery orderByServiceId($order = Criteria::ASC) Order by the service_id column
 * @method CommonEchangeQuery orderByEmailExpediteur($order = Criteria::ASC) Order by the email_expediteur column
 * @method CommonEchangeQuery orderByIdTypeMessage($order = Criteria::ASC) Order by the id_type_message column
 * @method CommonEchangeQuery orderByDestinatairesRetraits($order = Criteria::ASC) Order by the destinataires_retraits column
 * @method CommonEchangeQuery orderByDestinatairesQuestions($order = Criteria::ASC) Order by the destinataires_questions column
 * @method CommonEchangeQuery orderByDestinatairesDepots($order = Criteria::ASC) Order by the destinataires_depots column
 * @method CommonEchangeQuery orderByDestinatairesBdFournisseurs($order = Criteria::ASC) Order by the destinataires_bd_fournisseurs column
 * @method CommonEchangeQuery orderByDestinatairesLibres($order = Criteria::ASC) Order by the destinataires_libres column
 * @method CommonEchangeQuery orderByPageSource($order = Criteria::ASC) Order by the page_source column
 * @method CommonEchangeQuery orderByDestinataires($order = Criteria::ASC) Order by the destinataires column
 * @method CommonEchangeQuery orderByDestinataireVisioconference($order = Criteria::ASC) Order by the destinataire_visioconference column
 *
 * @method CommonEchangeQuery groupById() Group by the id column
 * @method CommonEchangeQuery groupByOrganisme() Group by the organisme column
 * @method CommonEchangeQuery groupByObjet() Group by the objet column
 * @method CommonEchangeQuery groupByCorps() Group by the corps column
 * @method CommonEchangeQuery groupByExpediteur() Group by the expediteur column
 * @method CommonEchangeQuery groupByIdCreateur() Group by the id_createur column
 * @method CommonEchangeQuery groupByRefConsultation() Group by the ref_consultation column
 * @method CommonEchangeQuery groupByOptionEnvoi() Group by the option_envoi column
 * @method CommonEchangeQuery groupByDateMessage() Group by the date_message column
 * @method CommonEchangeQuery groupByFormat() Group by the format column
 * @method CommonEchangeQuery groupByIdActionDeclencheur() Group by the id_action_declencheur column
 * @method CommonEchangeQuery groupByStatus() Group by the status column
 * @method CommonEchangeQuery groupByServiceId() Group by the service_id column
 * @method CommonEchangeQuery groupByEmailExpediteur() Group by the email_expediteur column
 * @method CommonEchangeQuery groupByIdTypeMessage() Group by the id_type_message column
 * @method CommonEchangeQuery groupByDestinatairesRetraits() Group by the destinataires_retraits column
 * @method CommonEchangeQuery groupByDestinatairesQuestions() Group by the destinataires_questions column
 * @method CommonEchangeQuery groupByDestinatairesDepots() Group by the destinataires_depots column
 * @method CommonEchangeQuery groupByDestinatairesBdFournisseurs() Group by the destinataires_bd_fournisseurs column
 * @method CommonEchangeQuery groupByDestinatairesLibres() Group by the destinataires_libres column
 * @method CommonEchangeQuery groupByPageSource() Group by the page_source column
 * @method CommonEchangeQuery groupByDestinataires() Group by the destinataires column
 * @method CommonEchangeQuery groupByDestinataireVisioconference() Group by the destinataire_visioconference column
 *
 * @method CommonEchangeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonEchangeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonEchangeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonEchange findOne(PropelPDO $con = null) Return the first CommonEchange matching the query
 * @method CommonEchange findOneOrCreate(PropelPDO $con = null) Return the first CommonEchange matching the query, or a new CommonEchange object populated from the query conditions when no match is found
 *
 * @method CommonEchange findOneById(int $id) Return the first CommonEchange filtered by the id column
 * @method CommonEchange findOneByOrganisme(string $organisme) Return the first CommonEchange filtered by the organisme column
 * @method CommonEchange findOneByObjet(string $objet) Return the first CommonEchange filtered by the objet column
 * @method CommonEchange findOneByCorps(string $corps) Return the first CommonEchange filtered by the corps column
 * @method CommonEchange findOneByExpediteur(string $expediteur) Return the first CommonEchange filtered by the expediteur column
 * @method CommonEchange findOneByIdCreateur(int $id_createur) Return the first CommonEchange filtered by the id_createur column
 * @method CommonEchange findOneByRefConsultation(int $ref_consultation) Return the first CommonEchange filtered by the ref_consultation column
 * @method CommonEchange findOneByOptionEnvoi(int $option_envoi) Return the first CommonEchange filtered by the option_envoi column
 * @method CommonEchange findOneByDateMessage(string $date_message) Return the first CommonEchange filtered by the date_message column
 * @method CommonEchange findOneByFormat(int $format) Return the first CommonEchange filtered by the format column
 * @method CommonEchange findOneByIdActionDeclencheur(int $id_action_declencheur) Return the first CommonEchange filtered by the id_action_declencheur column
 * @method CommonEchange findOneByStatus(int $status) Return the first CommonEchange filtered by the status column
 * @method CommonEchange findOneByServiceId(int $service_id) Return the first CommonEchange filtered by the service_id column
 * @method CommonEchange findOneByEmailExpediteur(string $email_expediteur) Return the first CommonEchange filtered by the email_expediteur column
 * @method CommonEchange findOneByIdTypeMessage(int $id_type_message) Return the first CommonEchange filtered by the id_type_message column
 * @method CommonEchange findOneByDestinatairesRetraits(string $destinataires_retraits) Return the first CommonEchange filtered by the destinataires_retraits column
 * @method CommonEchange findOneByDestinatairesQuestions(string $destinataires_questions) Return the first CommonEchange filtered by the destinataires_questions column
 * @method CommonEchange findOneByDestinatairesDepots(string $destinataires_depots) Return the first CommonEchange filtered by the destinataires_depots column
 * @method CommonEchange findOneByDestinatairesBdFournisseurs(string $destinataires_bd_fournisseurs) Return the first CommonEchange filtered by the destinataires_bd_fournisseurs column
 * @method CommonEchange findOneByDestinatairesLibres(string $destinataires_libres) Return the first CommonEchange filtered by the destinataires_libres column
 * @method CommonEchange findOneByPageSource(string $page_source) Return the first CommonEchange filtered by the page_source column
 * @method CommonEchange findOneByDestinataires(string $destinataires) Return the first CommonEchange filtered by the destinataires column
 * @method CommonEchange findOneByDestinataireVisioconference(string $destinataire_visioconference) Return the first CommonEchange filtered by the destinataire_visioconference column
 *
 * @method array findById(int $id) Return CommonEchange objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonEchange objects filtered by the organisme column
 * @method array findByObjet(string $objet) Return CommonEchange objects filtered by the objet column
 * @method array findByCorps(string $corps) Return CommonEchange objects filtered by the corps column
 * @method array findByExpediteur(string $expediteur) Return CommonEchange objects filtered by the expediteur column
 * @method array findByIdCreateur(int $id_createur) Return CommonEchange objects filtered by the id_createur column
 * @method array findByRefConsultation(int $ref_consultation) Return CommonEchange objects filtered by the ref_consultation column
 * @method array findByOptionEnvoi(int $option_envoi) Return CommonEchange objects filtered by the option_envoi column
 * @method array findByDateMessage(string $date_message) Return CommonEchange objects filtered by the date_message column
 * @method array findByFormat(int $format) Return CommonEchange objects filtered by the format column
 * @method array findByIdActionDeclencheur(int $id_action_declencheur) Return CommonEchange objects filtered by the id_action_declencheur column
 * @method array findByStatus(int $status) Return CommonEchange objects filtered by the status column
 * @method array findByServiceId(int $service_id) Return CommonEchange objects filtered by the service_id column
 * @method array findByEmailExpediteur(string $email_expediteur) Return CommonEchange objects filtered by the email_expediteur column
 * @method array findByIdTypeMessage(int $id_type_message) Return CommonEchange objects filtered by the id_type_message column
 * @method array findByDestinatairesRetraits(string $destinataires_retraits) Return CommonEchange objects filtered by the destinataires_retraits column
 * @method array findByDestinatairesQuestions(string $destinataires_questions) Return CommonEchange objects filtered by the destinataires_questions column
 * @method array findByDestinatairesDepots(string $destinataires_depots) Return CommonEchange objects filtered by the destinataires_depots column
 * @method array findByDestinatairesBdFournisseurs(string $destinataires_bd_fournisseurs) Return CommonEchange objects filtered by the destinataires_bd_fournisseurs column
 * @method array findByDestinatairesLibres(string $destinataires_libres) Return CommonEchange objects filtered by the destinataires_libres column
 * @method array findByPageSource(string $page_source) Return CommonEchange objects filtered by the page_source column
 * @method array findByDestinataires(string $destinataires) Return CommonEchange objects filtered by the destinataires column
 * @method array findByDestinataireVisioconference(string $destinataire_visioconference) Return CommonEchange objects filtered by the destinataire_visioconference column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonEchangeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonEchangeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonEchange', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonEchangeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonEchangeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonEchangeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonEchangeQuery) {
            return $criteria;
        }
        $query = new CommonEchangeQuery();
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
     * @return   CommonEchange|CommonEchange[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonEchangePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonEchangePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonEchange A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `objet`, `corps`, `expediteur`, `id_createur`, `ref_consultation`, `option_envoi`, `date_message`, `format`, `id_action_declencheur`, `status`, `service_id`, `email_expediteur`, `id_type_message`, `destinataires_retraits`, `destinataires_questions`, `destinataires_depots`, `destinataires_bd_fournisseurs`, `destinataires_libres`, `page_source`, `destinataires`, `destinataire_visioconference` FROM `Echange` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonEchange();
            $obj->hydrate($row);
            CommonEchangePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonEchange|CommonEchange[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonEchange[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonEchangeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonEchangePeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonEchangePeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonEchangeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonEchangePeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonEchangePeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonEchangeQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonEchangePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonEchangePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEchangePeer::ID, $id, $comparison);
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
     * @return CommonEchangeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEchangePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the objet column
     *
     * Example usage:
     * <code>
     * $query->filterByObjet('fooValue');   // WHERE objet = 'fooValue'
     * $query->filterByObjet('%fooValue%'); // WHERE objet LIKE '%fooValue%'
     * </code>
     *
     * @param     string $objet The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEchangeQuery The current query, for fluid interface
     */
    public function filterByObjet($objet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($objet)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $objet)) {
                $objet = str_replace('*', '%', $objet);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEchangePeer::OBJET, $objet, $comparison);
    }

    /**
     * Filter the query on the corps column
     *
     * Example usage:
     * <code>
     * $query->filterByCorps('fooValue');   // WHERE corps = 'fooValue'
     * $query->filterByCorps('%fooValue%'); // WHERE corps LIKE '%fooValue%'
     * </code>
     *
     * @param     string $corps The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEchangeQuery The current query, for fluid interface
     */
    public function filterByCorps($corps = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($corps)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $corps)) {
                $corps = str_replace('*', '%', $corps);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEchangePeer::CORPS, $corps, $comparison);
    }

    /**
     * Filter the query on the expediteur column
     *
     * Example usage:
     * <code>
     * $query->filterByExpediteur('fooValue');   // WHERE expediteur = 'fooValue'
     * $query->filterByExpediteur('%fooValue%'); // WHERE expediteur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $expediteur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEchangeQuery The current query, for fluid interface
     */
    public function filterByExpediteur($expediteur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($expediteur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $expediteur)) {
                $expediteur = str_replace('*', '%', $expediteur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEchangePeer::EXPEDITEUR, $expediteur, $comparison);
    }

    /**
     * Filter the query on the id_createur column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCreateur(1234); // WHERE id_createur = 1234
     * $query->filterByIdCreateur(array(12, 34)); // WHERE id_createur IN (12, 34)
     * $query->filterByIdCreateur(array('min' => 12)); // WHERE id_createur >= 12
     * $query->filterByIdCreateur(array('max' => 12)); // WHERE id_createur <= 12
     * </code>
     *
     * @param     mixed $idCreateur The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEchangeQuery The current query, for fluid interface
     */
    public function filterByIdCreateur($idCreateur = null, $comparison = null)
    {
        if (is_array($idCreateur)) {
            $useMinMax = false;
            if (isset($idCreateur['min'])) {
                $this->addUsingAlias(CommonEchangePeer::ID_CREATEUR, $idCreateur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCreateur['max'])) {
                $this->addUsingAlias(CommonEchangePeer::ID_CREATEUR, $idCreateur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEchangePeer::ID_CREATEUR, $idCreateur, $comparison);
    }

    /**
     * Filter the query on the ref_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByRefConsultation(1234); // WHERE ref_consultation = 1234
     * $query->filterByRefConsultation(array(12, 34)); // WHERE ref_consultation IN (12, 34)
     * $query->filterByRefConsultation(array('min' => 12)); // WHERE ref_consultation >= 12
     * $query->filterByRefConsultation(array('max' => 12)); // WHERE ref_consultation <= 12
     * </code>
     *
     * @param     mixed $refConsultation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEchangeQuery The current query, for fluid interface
     */
    public function filterByRefConsultation($refConsultation = null, $comparison = null)
    {
        if (is_array($refConsultation)) {
            $useMinMax = false;
            if (isset($refConsultation['min'])) {
                $this->addUsingAlias(CommonEchangePeer::REF_CONSULTATION, $refConsultation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refConsultation['max'])) {
                $this->addUsingAlias(CommonEchangePeer::REF_CONSULTATION, $refConsultation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEchangePeer::REF_CONSULTATION, $refConsultation, $comparison);
    }

    /**
     * Filter the query on the option_envoi column
     *
     * Example usage:
     * <code>
     * $query->filterByOptionEnvoi(1234); // WHERE option_envoi = 1234
     * $query->filterByOptionEnvoi(array(12, 34)); // WHERE option_envoi IN (12, 34)
     * $query->filterByOptionEnvoi(array('min' => 12)); // WHERE option_envoi >= 12
     * $query->filterByOptionEnvoi(array('max' => 12)); // WHERE option_envoi <= 12
     * </code>
     *
     * @param     mixed $optionEnvoi The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEchangeQuery The current query, for fluid interface
     */
    public function filterByOptionEnvoi($optionEnvoi = null, $comparison = null)
    {
        if (is_array($optionEnvoi)) {
            $useMinMax = false;
            if (isset($optionEnvoi['min'])) {
                $this->addUsingAlias(CommonEchangePeer::OPTION_ENVOI, $optionEnvoi['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($optionEnvoi['max'])) {
                $this->addUsingAlias(CommonEchangePeer::OPTION_ENVOI, $optionEnvoi['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEchangePeer::OPTION_ENVOI, $optionEnvoi, $comparison);
    }

    /**
     * Filter the query on the date_message column
     *
     * Example usage:
     * <code>
     * $query->filterByDateMessage('fooValue');   // WHERE date_message = 'fooValue'
     * $query->filterByDateMessage('%fooValue%'); // WHERE date_message LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateMessage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEchangeQuery The current query, for fluid interface
     */
    public function filterByDateMessage($dateMessage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateMessage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateMessage)) {
                $dateMessage = str_replace('*', '%', $dateMessage);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEchangePeer::DATE_MESSAGE, $dateMessage, $comparison);
    }

    /**
     * Filter the query on the format column
     *
     * Example usage:
     * <code>
     * $query->filterByFormat(1234); // WHERE format = 1234
     * $query->filterByFormat(array(12, 34)); // WHERE format IN (12, 34)
     * $query->filterByFormat(array('min' => 12)); // WHERE format >= 12
     * $query->filterByFormat(array('max' => 12)); // WHERE format <= 12
     * </code>
     *
     * @param     mixed $format The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEchangeQuery The current query, for fluid interface
     */
    public function filterByFormat($format = null, $comparison = null)
    {
        if (is_array($format)) {
            $useMinMax = false;
            if (isset($format['min'])) {
                $this->addUsingAlias(CommonEchangePeer::FORMAT, $format['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($format['max'])) {
                $this->addUsingAlias(CommonEchangePeer::FORMAT, $format['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEchangePeer::FORMAT, $format, $comparison);
    }

    /**
     * Filter the query on the id_action_declencheur column
     *
     * Example usage:
     * <code>
     * $query->filterByIdActionDeclencheur(1234); // WHERE id_action_declencheur = 1234
     * $query->filterByIdActionDeclencheur(array(12, 34)); // WHERE id_action_declencheur IN (12, 34)
     * $query->filterByIdActionDeclencheur(array('min' => 12)); // WHERE id_action_declencheur >= 12
     * $query->filterByIdActionDeclencheur(array('max' => 12)); // WHERE id_action_declencheur <= 12
     * </code>
     *
     * @param     mixed $idActionDeclencheur The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEchangeQuery The current query, for fluid interface
     */
    public function filterByIdActionDeclencheur($idActionDeclencheur = null, $comparison = null)
    {
        if (is_array($idActionDeclencheur)) {
            $useMinMax = false;
            if (isset($idActionDeclencheur['min'])) {
                $this->addUsingAlias(CommonEchangePeer::ID_ACTION_DECLENCHEUR, $idActionDeclencheur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idActionDeclencheur['max'])) {
                $this->addUsingAlias(CommonEchangePeer::ID_ACTION_DECLENCHEUR, $idActionDeclencheur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEchangePeer::ID_ACTION_DECLENCHEUR, $idActionDeclencheur, $comparison);
    }

    /**
     * Filter the query on the status column
     *
     * Example usage:
     * <code>
     * $query->filterByStatus(1234); // WHERE status = 1234
     * $query->filterByStatus(array(12, 34)); // WHERE status IN (12, 34)
     * $query->filterByStatus(array('min' => 12)); // WHERE status >= 12
     * $query->filterByStatus(array('max' => 12)); // WHERE status <= 12
     * </code>
     *
     * @param     mixed $status The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEchangeQuery The current query, for fluid interface
     */
    public function filterByStatus($status = null, $comparison = null)
    {
        if (is_array($status)) {
            $useMinMax = false;
            if (isset($status['min'])) {
                $this->addUsingAlias(CommonEchangePeer::STATUS, $status['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($status['max'])) {
                $this->addUsingAlias(CommonEchangePeer::STATUS, $status['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEchangePeer::STATUS, $status, $comparison);
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
     * @return CommonEchangeQuery The current query, for fluid interface
     */
    public function filterByServiceId($serviceId = null, $comparison = null)
    {
        if (is_array($serviceId)) {
            $useMinMax = false;
            if (isset($serviceId['min'])) {
                $this->addUsingAlias(CommonEchangePeer::SERVICE_ID, $serviceId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($serviceId['max'])) {
                $this->addUsingAlias(CommonEchangePeer::SERVICE_ID, $serviceId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEchangePeer::SERVICE_ID, $serviceId, $comparison);
    }

    /**
     * Filter the query on the email_expediteur column
     *
     * Example usage:
     * <code>
     * $query->filterByEmailExpediteur('fooValue');   // WHERE email_expediteur = 'fooValue'
     * $query->filterByEmailExpediteur('%fooValue%'); // WHERE email_expediteur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $emailExpediteur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEchangeQuery The current query, for fluid interface
     */
    public function filterByEmailExpediteur($emailExpediteur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($emailExpediteur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $emailExpediteur)) {
                $emailExpediteur = str_replace('*', '%', $emailExpediteur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEchangePeer::EMAIL_EXPEDITEUR, $emailExpediteur, $comparison);
    }

    /**
     * Filter the query on the id_type_message column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTypeMessage(1234); // WHERE id_type_message = 1234
     * $query->filterByIdTypeMessage(array(12, 34)); // WHERE id_type_message IN (12, 34)
     * $query->filterByIdTypeMessage(array('min' => 12)); // WHERE id_type_message >= 12
     * $query->filterByIdTypeMessage(array('max' => 12)); // WHERE id_type_message <= 12
     * </code>
     *
     * @param     mixed $idTypeMessage The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEchangeQuery The current query, for fluid interface
     */
    public function filterByIdTypeMessage($idTypeMessage = null, $comparison = null)
    {
        if (is_array($idTypeMessage)) {
            $useMinMax = false;
            if (isset($idTypeMessage['min'])) {
                $this->addUsingAlias(CommonEchangePeer::ID_TYPE_MESSAGE, $idTypeMessage['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeMessage['max'])) {
                $this->addUsingAlias(CommonEchangePeer::ID_TYPE_MESSAGE, $idTypeMessage['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEchangePeer::ID_TYPE_MESSAGE, $idTypeMessage, $comparison);
    }

    /**
     * Filter the query on the destinataires_retraits column
     *
     * Example usage:
     * <code>
     * $query->filterByDestinatairesRetraits('fooValue');   // WHERE destinataires_retraits = 'fooValue'
     * $query->filterByDestinatairesRetraits('%fooValue%'); // WHERE destinataires_retraits LIKE '%fooValue%'
     * </code>
     *
     * @param     string $destinatairesRetraits The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEchangeQuery The current query, for fluid interface
     */
    public function filterByDestinatairesRetraits($destinatairesRetraits = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($destinatairesRetraits)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $destinatairesRetraits)) {
                $destinatairesRetraits = str_replace('*', '%', $destinatairesRetraits);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEchangePeer::DESTINATAIRES_RETRAITS, $destinatairesRetraits, $comparison);
    }

    /**
     * Filter the query on the destinataires_questions column
     *
     * Example usage:
     * <code>
     * $query->filterByDestinatairesQuestions('fooValue');   // WHERE destinataires_questions = 'fooValue'
     * $query->filterByDestinatairesQuestions('%fooValue%'); // WHERE destinataires_questions LIKE '%fooValue%'
     * </code>
     *
     * @param     string $destinatairesQuestions The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEchangeQuery The current query, for fluid interface
     */
    public function filterByDestinatairesQuestions($destinatairesQuestions = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($destinatairesQuestions)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $destinatairesQuestions)) {
                $destinatairesQuestions = str_replace('*', '%', $destinatairesQuestions);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEchangePeer::DESTINATAIRES_QUESTIONS, $destinatairesQuestions, $comparison);
    }

    /**
     * Filter the query on the destinataires_depots column
     *
     * Example usage:
     * <code>
     * $query->filterByDestinatairesDepots('fooValue');   // WHERE destinataires_depots = 'fooValue'
     * $query->filterByDestinatairesDepots('%fooValue%'); // WHERE destinataires_depots LIKE '%fooValue%'
     * </code>
     *
     * @param     string $destinatairesDepots The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEchangeQuery The current query, for fluid interface
     */
    public function filterByDestinatairesDepots($destinatairesDepots = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($destinatairesDepots)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $destinatairesDepots)) {
                $destinatairesDepots = str_replace('*', '%', $destinatairesDepots);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEchangePeer::DESTINATAIRES_DEPOTS, $destinatairesDepots, $comparison);
    }

    /**
     * Filter the query on the destinataires_bd_fournisseurs column
     *
     * Example usage:
     * <code>
     * $query->filterByDestinatairesBdFournisseurs('fooValue');   // WHERE destinataires_bd_fournisseurs = 'fooValue'
     * $query->filterByDestinatairesBdFournisseurs('%fooValue%'); // WHERE destinataires_bd_fournisseurs LIKE '%fooValue%'
     * </code>
     *
     * @param     string $destinatairesBdFournisseurs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEchangeQuery The current query, for fluid interface
     */
    public function filterByDestinatairesBdFournisseurs($destinatairesBdFournisseurs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($destinatairesBdFournisseurs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $destinatairesBdFournisseurs)) {
                $destinatairesBdFournisseurs = str_replace('*', '%', $destinatairesBdFournisseurs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEchangePeer::DESTINATAIRES_BD_FOURNISSEURS, $destinatairesBdFournisseurs, $comparison);
    }

    /**
     * Filter the query on the destinataires_libres column
     *
     * Example usage:
     * <code>
     * $query->filterByDestinatairesLibres('fooValue');   // WHERE destinataires_libres = 'fooValue'
     * $query->filterByDestinatairesLibres('%fooValue%'); // WHERE destinataires_libres LIKE '%fooValue%'
     * </code>
     *
     * @param     string $destinatairesLibres The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEchangeQuery The current query, for fluid interface
     */
    public function filterByDestinatairesLibres($destinatairesLibres = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($destinatairesLibres)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $destinatairesLibres)) {
                $destinatairesLibres = str_replace('*', '%', $destinatairesLibres);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEchangePeer::DESTINATAIRES_LIBRES, $destinatairesLibres, $comparison);
    }

    /**
     * Filter the query on the page_source column
     *
     * Example usage:
     * <code>
     * $query->filterByPageSource('fooValue');   // WHERE page_source = 'fooValue'
     * $query->filterByPageSource('%fooValue%'); // WHERE page_source LIKE '%fooValue%'
     * </code>
     *
     * @param     string $pageSource The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEchangeQuery The current query, for fluid interface
     */
    public function filterByPageSource($pageSource = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($pageSource)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $pageSource)) {
                $pageSource = str_replace('*', '%', $pageSource);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEchangePeer::PAGE_SOURCE, $pageSource, $comparison);
    }

    /**
     * Filter the query on the destinataires column
     *
     * Example usage:
     * <code>
     * $query->filterByDestinataires('fooValue');   // WHERE destinataires = 'fooValue'
     * $query->filterByDestinataires('%fooValue%'); // WHERE destinataires LIKE '%fooValue%'
     * </code>
     *
     * @param     string $destinataires The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEchangeQuery The current query, for fluid interface
     */
    public function filterByDestinataires($destinataires = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($destinataires)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $destinataires)) {
                $destinataires = str_replace('*', '%', $destinataires);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEchangePeer::DESTINATAIRES, $destinataires, $comparison);
    }

    /**
     * Filter the query on the destinataire_visioconference column
     *
     * Example usage:
     * <code>
     * $query->filterByDestinataireVisioconference('fooValue');   // WHERE destinataire_visioconference = 'fooValue'
     * $query->filterByDestinataireVisioconference('%fooValue%'); // WHERE destinataire_visioconference LIKE '%fooValue%'
     * </code>
     *
     * @param     string $destinataireVisioconference The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEchangeQuery The current query, for fluid interface
     */
    public function filterByDestinataireVisioconference($destinataireVisioconference = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($destinataireVisioconference)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $destinataireVisioconference)) {
                $destinataireVisioconference = str_replace('*', '%', $destinataireVisioconference);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEchangePeer::DESTINATAIRE_VISIOCONFERENCE, $destinataireVisioconference, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonEchange $commonEchange Object to remove from the list of results
     *
     * @return CommonEchangeQuery The current query, for fluid interface
     */
    public function prune($commonEchange = null)
    {
        if ($commonEchange) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonEchangePeer::ID), $commonEchange->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonEchangePeer::ORGANISME), $commonEchange->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
