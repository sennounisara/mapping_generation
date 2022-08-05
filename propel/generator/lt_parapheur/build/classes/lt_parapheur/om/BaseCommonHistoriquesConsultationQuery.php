<?php


/**
 * Base class that represents a query for the 'historiques_consultation' table.
 *
 * 
 *
 * @method CommonHistoriquesConsultationQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonHistoriquesConsultationQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonHistoriquesConsultationQuery orderByRefConsultation($order = Criteria::ASC) Order by the ref_consultation column
 * @method CommonHistoriquesConsultationQuery orderByStatut($order = Criteria::ASC) Order by the statut column
 * @method CommonHistoriquesConsultationQuery orderByIdAgent($order = Criteria::ASC) Order by the id_agent column
 * @method CommonHistoriquesConsultationQuery orderByNomAgent($order = Criteria::ASC) Order by the nom_agent column
 * @method CommonHistoriquesConsultationQuery orderByPrenomAgent($order = Criteria::ASC) Order by the prenom_agent column
 * @method CommonHistoriquesConsultationQuery orderByNomElement($order = Criteria::ASC) Order by the nom_element column
 * @method CommonHistoriquesConsultationQuery orderByValeur($order = Criteria::ASC) Order by the valeur column
 * @method CommonHistoriquesConsultationQuery orderByValeurDetail1($order = Criteria::ASC) Order by the valeur_detail_1 column
 * @method CommonHistoriquesConsultationQuery orderByValeurDetail2($order = Criteria::ASC) Order by the valeur_detail_2 column
 * @method CommonHistoriquesConsultationQuery orderByNumeroLot($order = Criteria::ASC) Order by the numero_lot column
 * @method CommonHistoriquesConsultationQuery orderByHorodatage($order = Criteria::ASC) Order by the horodatage column
 * @method CommonHistoriquesConsultationQuery orderByUntrusteddate($order = Criteria::ASC) Order by the untrusteddate column
 *
 * @method CommonHistoriquesConsultationQuery groupById() Group by the id column
 * @method CommonHistoriquesConsultationQuery groupByOrganisme() Group by the organisme column
 * @method CommonHistoriquesConsultationQuery groupByRefConsultation() Group by the ref_consultation column
 * @method CommonHistoriquesConsultationQuery groupByStatut() Group by the statut column
 * @method CommonHistoriquesConsultationQuery groupByIdAgent() Group by the id_agent column
 * @method CommonHistoriquesConsultationQuery groupByNomAgent() Group by the nom_agent column
 * @method CommonHistoriquesConsultationQuery groupByPrenomAgent() Group by the prenom_agent column
 * @method CommonHistoriquesConsultationQuery groupByNomElement() Group by the nom_element column
 * @method CommonHistoriquesConsultationQuery groupByValeur() Group by the valeur column
 * @method CommonHistoriquesConsultationQuery groupByValeurDetail1() Group by the valeur_detail_1 column
 * @method CommonHistoriquesConsultationQuery groupByValeurDetail2() Group by the valeur_detail_2 column
 * @method CommonHistoriquesConsultationQuery groupByNumeroLot() Group by the numero_lot column
 * @method CommonHistoriquesConsultationQuery groupByHorodatage() Group by the horodatage column
 * @method CommonHistoriquesConsultationQuery groupByUntrusteddate() Group by the untrusteddate column
 *
 * @method CommonHistoriquesConsultationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonHistoriquesConsultationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonHistoriquesConsultationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonHistoriquesConsultation findOne(PropelPDO $con = null) Return the first CommonHistoriquesConsultation matching the query
 * @method CommonHistoriquesConsultation findOneOrCreate(PropelPDO $con = null) Return the first CommonHistoriquesConsultation matching the query, or a new CommonHistoriquesConsultation object populated from the query conditions when no match is found
 *
 * @method CommonHistoriquesConsultation findOneById(int $id) Return the first CommonHistoriquesConsultation filtered by the id column
 * @method CommonHistoriquesConsultation findOneByOrganisme(string $organisme) Return the first CommonHistoriquesConsultation filtered by the organisme column
 * @method CommonHistoriquesConsultation findOneByRefConsultation(int $ref_consultation) Return the first CommonHistoriquesConsultation filtered by the ref_consultation column
 * @method CommonHistoriquesConsultation findOneByStatut(string $statut) Return the first CommonHistoriquesConsultation filtered by the statut column
 * @method CommonHistoriquesConsultation findOneByIdAgent(int $id_agent) Return the first CommonHistoriquesConsultation filtered by the id_agent column
 * @method CommonHistoriquesConsultation findOneByNomAgent(string $nom_agent) Return the first CommonHistoriquesConsultation filtered by the nom_agent column
 * @method CommonHistoriquesConsultation findOneByPrenomAgent(string $prenom_agent) Return the first CommonHistoriquesConsultation filtered by the prenom_agent column
 * @method CommonHistoriquesConsultation findOneByNomElement(string $nom_element) Return the first CommonHistoriquesConsultation filtered by the nom_element column
 * @method CommonHistoriquesConsultation findOneByValeur(string $valeur) Return the first CommonHistoriquesConsultation filtered by the valeur column
 * @method CommonHistoriquesConsultation findOneByValeurDetail1(string $valeur_detail_1) Return the first CommonHistoriquesConsultation filtered by the valeur_detail_1 column
 * @method CommonHistoriquesConsultation findOneByValeurDetail2(string $valeur_detail_2) Return the first CommonHistoriquesConsultation filtered by the valeur_detail_2 column
 * @method CommonHistoriquesConsultation findOneByNumeroLot(string $numero_lot) Return the first CommonHistoriquesConsultation filtered by the numero_lot column
 * @method CommonHistoriquesConsultation findOneByHorodatage(resource $horodatage) Return the first CommonHistoriquesConsultation filtered by the horodatage column
 * @method CommonHistoriquesConsultation findOneByUntrusteddate(string $untrusteddate) Return the first CommonHistoriquesConsultation filtered by the untrusteddate column
 *
 * @method array findById(int $id) Return CommonHistoriquesConsultation objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonHistoriquesConsultation objects filtered by the organisme column
 * @method array findByRefConsultation(int $ref_consultation) Return CommonHistoriquesConsultation objects filtered by the ref_consultation column
 * @method array findByStatut(string $statut) Return CommonHistoriquesConsultation objects filtered by the statut column
 * @method array findByIdAgent(int $id_agent) Return CommonHistoriquesConsultation objects filtered by the id_agent column
 * @method array findByNomAgent(string $nom_agent) Return CommonHistoriquesConsultation objects filtered by the nom_agent column
 * @method array findByPrenomAgent(string $prenom_agent) Return CommonHistoriquesConsultation objects filtered by the prenom_agent column
 * @method array findByNomElement(string $nom_element) Return CommonHistoriquesConsultation objects filtered by the nom_element column
 * @method array findByValeur(string $valeur) Return CommonHistoriquesConsultation objects filtered by the valeur column
 * @method array findByValeurDetail1(string $valeur_detail_1) Return CommonHistoriquesConsultation objects filtered by the valeur_detail_1 column
 * @method array findByValeurDetail2(string $valeur_detail_2) Return CommonHistoriquesConsultation objects filtered by the valeur_detail_2 column
 * @method array findByNumeroLot(string $numero_lot) Return CommonHistoriquesConsultation objects filtered by the numero_lot column
 * @method array findByHorodatage(resource $horodatage) Return CommonHistoriquesConsultation objects filtered by the horodatage column
 * @method array findByUntrusteddate(string $untrusteddate) Return CommonHistoriquesConsultation objects filtered by the untrusteddate column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonHistoriquesConsultationQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonHistoriquesConsultationQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonHistoriquesConsultation', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonHistoriquesConsultationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonHistoriquesConsultationQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonHistoriquesConsultationQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonHistoriquesConsultationQuery) {
            return $criteria;
        }
        $query = new CommonHistoriquesConsultationQuery();
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
     * @return   CommonHistoriquesConsultation|CommonHistoriquesConsultation[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonHistoriquesConsultationPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonHistoriquesConsultationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonHistoriquesConsultation A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `ref_consultation`, `statut`, `id_agent`, `nom_agent`, `prenom_agent`, `nom_element`, `valeur`, `valeur_detail_1`, `valeur_detail_2`, `numero_lot`, `horodatage`, `untrusteddate` FROM `historiques_consultation` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonHistoriquesConsultation();
            $obj->hydrate($row);
            CommonHistoriquesConsultationPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonHistoriquesConsultation|CommonHistoriquesConsultation[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonHistoriquesConsultation[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonHistoriquesConsultationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonHistoriquesConsultationPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonHistoriquesConsultationPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonHistoriquesConsultationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonHistoriquesConsultationPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonHistoriquesConsultationPeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonHistoriquesConsultationQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonHistoriquesConsultationPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonHistoriquesConsultationPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonHistoriquesConsultationPeer::ID, $id, $comparison);
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
     * @return CommonHistoriquesConsultationQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonHistoriquesConsultationPeer::ORGANISME, $organisme, $comparison);
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
     * @return CommonHistoriquesConsultationQuery The current query, for fluid interface
     */
    public function filterByRefConsultation($refConsultation = null, $comparison = null)
    {
        if (is_array($refConsultation)) {
            $useMinMax = false;
            if (isset($refConsultation['min'])) {
                $this->addUsingAlias(CommonHistoriquesConsultationPeer::REF_CONSULTATION, $refConsultation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($refConsultation['max'])) {
                $this->addUsingAlias(CommonHistoriquesConsultationPeer::REF_CONSULTATION, $refConsultation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonHistoriquesConsultationPeer::REF_CONSULTATION, $refConsultation, $comparison);
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
     * @return CommonHistoriquesConsultationQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonHistoriquesConsultationPeer::STATUT, $statut, $comparison);
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
     * @return CommonHistoriquesConsultationQuery The current query, for fluid interface
     */
    public function filterByIdAgent($idAgent = null, $comparison = null)
    {
        if (is_array($idAgent)) {
            $useMinMax = false;
            if (isset($idAgent['min'])) {
                $this->addUsingAlias(CommonHistoriquesConsultationPeer::ID_AGENT, $idAgent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgent['max'])) {
                $this->addUsingAlias(CommonHistoriquesConsultationPeer::ID_AGENT, $idAgent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonHistoriquesConsultationPeer::ID_AGENT, $idAgent, $comparison);
    }

    /**
     * Filter the query on the nom_agent column
     *
     * Example usage:
     * <code>
     * $query->filterByNomAgent('fooValue');   // WHERE nom_agent = 'fooValue'
     * $query->filterByNomAgent('%fooValue%'); // WHERE nom_agent LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomAgent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHistoriquesConsultationQuery The current query, for fluid interface
     */
    public function filterByNomAgent($nomAgent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomAgent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomAgent)) {
                $nomAgent = str_replace('*', '%', $nomAgent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHistoriquesConsultationPeer::NOM_AGENT, $nomAgent, $comparison);
    }

    /**
     * Filter the query on the prenom_agent column
     *
     * Example usage:
     * <code>
     * $query->filterByPrenomAgent('fooValue');   // WHERE prenom_agent = 'fooValue'
     * $query->filterByPrenomAgent('%fooValue%'); // WHERE prenom_agent LIKE '%fooValue%'
     * </code>
     *
     * @param     string $prenomAgent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHistoriquesConsultationQuery The current query, for fluid interface
     */
    public function filterByPrenomAgent($prenomAgent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($prenomAgent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $prenomAgent)) {
                $prenomAgent = str_replace('*', '%', $prenomAgent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHistoriquesConsultationPeer::PRENOM_AGENT, $prenomAgent, $comparison);
    }

    /**
     * Filter the query on the nom_element column
     *
     * Example usage:
     * <code>
     * $query->filterByNomElement('fooValue');   // WHERE nom_element = 'fooValue'
     * $query->filterByNomElement('%fooValue%'); // WHERE nom_element LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomElement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHistoriquesConsultationQuery The current query, for fluid interface
     */
    public function filterByNomElement($nomElement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomElement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomElement)) {
                $nomElement = str_replace('*', '%', $nomElement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHistoriquesConsultationPeer::NOM_ELEMENT, $nomElement, $comparison);
    }

    /**
     * Filter the query on the valeur column
     *
     * Example usage:
     * <code>
     * $query->filterByValeur('fooValue');   // WHERE valeur = 'fooValue'
     * $query->filterByValeur('%fooValue%'); // WHERE valeur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $valeur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHistoriquesConsultationQuery The current query, for fluid interface
     */
    public function filterByValeur($valeur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($valeur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $valeur)) {
                $valeur = str_replace('*', '%', $valeur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHistoriquesConsultationPeer::VALEUR, $valeur, $comparison);
    }

    /**
     * Filter the query on the valeur_detail_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByValeurDetail1('fooValue');   // WHERE valeur_detail_1 = 'fooValue'
     * $query->filterByValeurDetail1('%fooValue%'); // WHERE valeur_detail_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $valeurDetail1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHistoriquesConsultationQuery The current query, for fluid interface
     */
    public function filterByValeurDetail1($valeurDetail1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($valeurDetail1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $valeurDetail1)) {
                $valeurDetail1 = str_replace('*', '%', $valeurDetail1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHistoriquesConsultationPeer::VALEUR_DETAIL_1, $valeurDetail1, $comparison);
    }

    /**
     * Filter the query on the valeur_detail_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByValeurDetail2('fooValue');   // WHERE valeur_detail_2 = 'fooValue'
     * $query->filterByValeurDetail2('%fooValue%'); // WHERE valeur_detail_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $valeurDetail2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHistoriquesConsultationQuery The current query, for fluid interface
     */
    public function filterByValeurDetail2($valeurDetail2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($valeurDetail2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $valeurDetail2)) {
                $valeurDetail2 = str_replace('*', '%', $valeurDetail2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHistoriquesConsultationPeer::VALEUR_DETAIL_2, $valeurDetail2, $comparison);
    }

    /**
     * Filter the query on the numero_lot column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeroLot('fooValue');   // WHERE numero_lot = 'fooValue'
     * $query->filterByNumeroLot('%fooValue%'); // WHERE numero_lot LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numeroLot The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHistoriquesConsultationQuery The current query, for fluid interface
     */
    public function filterByNumeroLot($numeroLot = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numeroLot)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numeroLot)) {
                $numeroLot = str_replace('*', '%', $numeroLot);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHistoriquesConsultationPeer::NUMERO_LOT, $numeroLot, $comparison);
    }

    /**
     * Filter the query on the horodatage column
     *
     * @param     mixed $horodatage The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHistoriquesConsultationQuery The current query, for fluid interface
     */
    public function filterByHorodatage($horodatage = null, $comparison = null)
    {

        return $this->addUsingAlias(CommonHistoriquesConsultationPeer::HORODATAGE, $horodatage, $comparison);
    }

    /**
     * Filter the query on the untrusteddate column
     *
     * Example usage:
     * <code>
     * $query->filterByUntrusteddate('fooValue');   // WHERE untrusteddate = 'fooValue'
     * $query->filterByUntrusteddate('%fooValue%'); // WHERE untrusteddate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $untrusteddate The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHistoriquesConsultationQuery The current query, for fluid interface
     */
    public function filterByUntrusteddate($untrusteddate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($untrusteddate)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $untrusteddate)) {
                $untrusteddate = str_replace('*', '%', $untrusteddate);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHistoriquesConsultationPeer::UNTRUSTEDDATE, $untrusteddate, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonHistoriquesConsultation $commonHistoriquesConsultation Object to remove from the list of results
     *
     * @return CommonHistoriquesConsultationQuery The current query, for fluid interface
     */
    public function prune($commonHistoriquesConsultation = null)
    {
        if ($commonHistoriquesConsultation) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonHistoriquesConsultationPeer::ID), $commonHistoriquesConsultation->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonHistoriquesConsultationPeer::ORGANISME), $commonHistoriquesConsultation->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
