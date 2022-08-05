<?php


/**
 * Base class that represents a query for the 't_CAO_Commission_Consultation' table.
 *
 * 
 *
 * @method CommonTCAOCommissionConsultationQuery orderByIdCommissionConsultation($order = Criteria::ASC) Order by the id_commission_consultation column
 * @method CommonTCAOCommissionConsultationQuery orderByIdCommission($order = Criteria::ASC) Order by the id_commission column
 * @method CommonTCAOCommissionConsultationQuery orderByRefConsultation($order = Criteria::ASC) Order by the ref_consultation column
 * @method CommonTCAOCommissionConsultationQuery orderByRefLibre($order = Criteria::ASC) Order by the ref_libre column
 * @method CommonTCAOCommissionConsultationQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonTCAOCommissionConsultationQuery orderByIntitule($order = Criteria::ASC) Order by the intitule column
 * @method CommonTCAOCommissionConsultationQuery orderByIdTypeProcedure($order = Criteria::ASC) Order by the id_type_procedure column
 * @method CommonTCAOCommissionConsultationQuery orderByIdCategorie($order = Criteria::ASC) Order by the id_categorie column
 * @method CommonTCAOCommissionConsultationQuery orderByServiceGestionnaire($order = Criteria::ASC) Order by the service_gestionnaire column
 * @method CommonTCAOCommissionConsultationQuery orderByIdServiceGestionnaire($order = Criteria::ASC) Order by the id_service_gestionnaire column
 * @method CommonTCAOCommissionConsultationQuery orderByServiceAssocie($order = Criteria::ASC) Order by the service_associe column
 * @method CommonTCAOCommissionConsultationQuery orderByIdServiceAssocie($order = Criteria::ASC) Order by the id_service_associe column
 * @method CommonTCAOCommissionConsultationQuery orderByDateCloture($order = Criteria::ASC) Order by the date_cloture column
 * @method CommonTCAOCommissionConsultationQuery orderByDateMiseEnLigne($order = Criteria::ASC) Order by the date_mise_en_ligne column
 * @method CommonTCAOCommissionConsultationQuery orderByIdConsultation($order = Criteria::ASC) Order by the id_consultation column
 *
 * @method CommonTCAOCommissionConsultationQuery groupByIdCommissionConsultation() Group by the id_commission_consultation column
 * @method CommonTCAOCommissionConsultationQuery groupByIdCommission() Group by the id_commission column
 * @method CommonTCAOCommissionConsultationQuery groupByRefConsultation() Group by the ref_consultation column
 * @method CommonTCAOCommissionConsultationQuery groupByRefLibre() Group by the ref_libre column
 * @method CommonTCAOCommissionConsultationQuery groupByOrganisme() Group by the organisme column
 * @method CommonTCAOCommissionConsultationQuery groupByIntitule() Group by the intitule column
 * @method CommonTCAOCommissionConsultationQuery groupByIdTypeProcedure() Group by the id_type_procedure column
 * @method CommonTCAOCommissionConsultationQuery groupByIdCategorie() Group by the id_categorie column
 * @method CommonTCAOCommissionConsultationQuery groupByServiceGestionnaire() Group by the service_gestionnaire column
 * @method CommonTCAOCommissionConsultationQuery groupByIdServiceGestionnaire() Group by the id_service_gestionnaire column
 * @method CommonTCAOCommissionConsultationQuery groupByServiceAssocie() Group by the service_associe column
 * @method CommonTCAOCommissionConsultationQuery groupByIdServiceAssocie() Group by the id_service_associe column
 * @method CommonTCAOCommissionConsultationQuery groupByDateCloture() Group by the date_cloture column
 * @method CommonTCAOCommissionConsultationQuery groupByDateMiseEnLigne() Group by the date_mise_en_ligne column
 * @method CommonTCAOCommissionConsultationQuery groupByIdConsultation() Group by the id_consultation column
 *
 * @method CommonTCAOCommissionConsultationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTCAOCommissionConsultationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTCAOCommissionConsultationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTCAOCommissionConsultationQuery leftJoinCommonTCAOCommission($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTCAOCommission relation
 * @method CommonTCAOCommissionConsultationQuery rightJoinCommonTCAOCommission($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTCAOCommission relation
 * @method CommonTCAOCommissionConsultationQuery innerJoinCommonTCAOCommission($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTCAOCommission relation
 *
 * @method CommonTCAOCommissionConsultationQuery leftJoinCommonOrganisme($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonOrganisme relation
 * @method CommonTCAOCommissionConsultationQuery rightJoinCommonOrganisme($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonOrganisme relation
 * @method CommonTCAOCommissionConsultationQuery innerJoinCommonOrganisme($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonOrganisme relation
 *
 * @method CommonTCAOCommissionConsultationQuery leftJoinCommonTCAOOrdreDePassage($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTCAOOrdreDePassage relation
 * @method CommonTCAOCommissionConsultationQuery rightJoinCommonTCAOOrdreDePassage($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTCAOOrdreDePassage relation
 * @method CommonTCAOCommissionConsultationQuery innerJoinCommonTCAOOrdreDePassage($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTCAOOrdreDePassage relation
 *
 * @method CommonTCAOCommissionConsultation findOne(PropelPDO $con = null) Return the first CommonTCAOCommissionConsultation matching the query
 * @method CommonTCAOCommissionConsultation findOneOrCreate(PropelPDO $con = null) Return the first CommonTCAOCommissionConsultation matching the query, or a new CommonTCAOCommissionConsultation object populated from the query conditions when no match is found
 *
 * @method CommonTCAOCommissionConsultation findOneByIdCommissionConsultation(string $id_commission_consultation) Return the first CommonTCAOCommissionConsultation filtered by the id_commission_consultation column
 * @method CommonTCAOCommissionConsultation findOneByIdCommission(string $id_commission) Return the first CommonTCAOCommissionConsultation filtered by the id_commission column
 * @method CommonTCAOCommissionConsultation findOneByRefConsultation(string $ref_consultation) Return the first CommonTCAOCommissionConsultation filtered by the ref_consultation column
 * @method CommonTCAOCommissionConsultation findOneByRefLibre(string $ref_libre) Return the first CommonTCAOCommissionConsultation filtered by the ref_libre column
 * @method CommonTCAOCommissionConsultation findOneByOrganisme(string $organisme) Return the first CommonTCAOCommissionConsultation filtered by the organisme column
 * @method CommonTCAOCommissionConsultation findOneByIntitule(string $intitule) Return the first CommonTCAOCommissionConsultation filtered by the intitule column
 * @method CommonTCAOCommissionConsultation findOneByIdTypeProcedure(int $id_type_procedure) Return the first CommonTCAOCommissionConsultation filtered by the id_type_procedure column
 * @method CommonTCAOCommissionConsultation findOneByIdCategorie(int $id_categorie) Return the first CommonTCAOCommissionConsultation filtered by the id_categorie column
 * @method CommonTCAOCommissionConsultation findOneByServiceGestionnaire(string $service_gestionnaire) Return the first CommonTCAOCommissionConsultation filtered by the service_gestionnaire column
 * @method CommonTCAOCommissionConsultation findOneByIdServiceGestionnaire(int $id_service_gestionnaire) Return the first CommonTCAOCommissionConsultation filtered by the id_service_gestionnaire column
 * @method CommonTCAOCommissionConsultation findOneByServiceAssocie(string $service_associe) Return the first CommonTCAOCommissionConsultation filtered by the service_associe column
 * @method CommonTCAOCommissionConsultation findOneByIdServiceAssocie(int $id_service_associe) Return the first CommonTCAOCommissionConsultation filtered by the id_service_associe column
 * @method CommonTCAOCommissionConsultation findOneByDateCloture(string $date_cloture) Return the first CommonTCAOCommissionConsultation filtered by the date_cloture column
 * @method CommonTCAOCommissionConsultation findOneByDateMiseEnLigne(string $date_mise_en_ligne) Return the first CommonTCAOCommissionConsultation filtered by the date_mise_en_ligne column
 * @method CommonTCAOCommissionConsultation findOneByIdConsultation(int $id_consultation) Return the first CommonTCAOCommissionConsultation filtered by the id_consultation column
 *
 * @method array findByIdCommissionConsultation(string $id_commission_consultation) Return CommonTCAOCommissionConsultation objects filtered by the id_commission_consultation column
 * @method array findByIdCommission(string $id_commission) Return CommonTCAOCommissionConsultation objects filtered by the id_commission column
 * @method array findByRefConsultation(string $ref_consultation) Return CommonTCAOCommissionConsultation objects filtered by the ref_consultation column
 * @method array findByRefLibre(string $ref_libre) Return CommonTCAOCommissionConsultation objects filtered by the ref_libre column
 * @method array findByOrganisme(string $organisme) Return CommonTCAOCommissionConsultation objects filtered by the organisme column
 * @method array findByIntitule(string $intitule) Return CommonTCAOCommissionConsultation objects filtered by the intitule column
 * @method array findByIdTypeProcedure(int $id_type_procedure) Return CommonTCAOCommissionConsultation objects filtered by the id_type_procedure column
 * @method array findByIdCategorie(int $id_categorie) Return CommonTCAOCommissionConsultation objects filtered by the id_categorie column
 * @method array findByServiceGestionnaire(string $service_gestionnaire) Return CommonTCAOCommissionConsultation objects filtered by the service_gestionnaire column
 * @method array findByIdServiceGestionnaire(int $id_service_gestionnaire) Return CommonTCAOCommissionConsultation objects filtered by the id_service_gestionnaire column
 * @method array findByServiceAssocie(string $service_associe) Return CommonTCAOCommissionConsultation objects filtered by the service_associe column
 * @method array findByIdServiceAssocie(int $id_service_associe) Return CommonTCAOCommissionConsultation objects filtered by the id_service_associe column
 * @method array findByDateCloture(string $date_cloture) Return CommonTCAOCommissionConsultation objects filtered by the date_cloture column
 * @method array findByDateMiseEnLigne(string $date_mise_en_ligne) Return CommonTCAOCommissionConsultation objects filtered by the date_mise_en_ligne column
 * @method array findByIdConsultation(int $id_consultation) Return CommonTCAOCommissionConsultation objects filtered by the id_consultation column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTCAOCommissionConsultationQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTCAOCommissionConsultationQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTCAOCommissionConsultation', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTCAOCommissionConsultationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTCAOCommissionConsultationQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTCAOCommissionConsultationQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTCAOCommissionConsultationQuery) {
            return $criteria;
        }
        $query = new CommonTCAOCommissionConsultationQuery();
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
                         A Primary key composition: [$id_commission_consultation, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonTCAOCommissionConsultation|CommonTCAOCommissionConsultation[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTCAOCommissionConsultationPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTCAOCommissionConsultationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTCAOCommissionConsultation A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_commission_consultation`, `id_commission`, `ref_consultation`, `ref_libre`, `organisme`, `intitule`, `id_type_procedure`, `id_categorie`, `service_gestionnaire`, `id_service_gestionnaire`, `service_associe`, `id_service_associe`, `date_cloture`, `date_mise_en_ligne`, `id_consultation` FROM `t_CAO_Commission_Consultation` WHERE `id_commission_consultation` = :p0 AND `organisme` = :p1';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonTCAOCommissionConsultation();
            $obj->hydrate($row);
            CommonTCAOCommissionConsultationPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonTCAOCommissionConsultation|CommonTCAOCommissionConsultation[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTCAOCommissionConsultation[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTCAOCommissionConsultationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonTCAOCommissionConsultationPeer::ID_COMMISSION_CONSULTATION, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonTCAOCommissionConsultationPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTCAOCommissionConsultationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonTCAOCommissionConsultationPeer::ID_COMMISSION_CONSULTATION, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonTCAOCommissionConsultationPeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the id_commission_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCommissionConsultation(1234); // WHERE id_commission_consultation = 1234
     * $query->filterByIdCommissionConsultation(array(12, 34)); // WHERE id_commission_consultation IN (12, 34)
     * $query->filterByIdCommissionConsultation(array('min' => 12)); // WHERE id_commission_consultation >= 12
     * $query->filterByIdCommissionConsultation(array('max' => 12)); // WHERE id_commission_consultation <= 12
     * </code>
     *
     * @param     mixed $idCommissionConsultation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOCommissionConsultationQuery The current query, for fluid interface
     */
    public function filterByIdCommissionConsultation($idCommissionConsultation = null, $comparison = null)
    {
        if (is_array($idCommissionConsultation)) {
            $useMinMax = false;
            if (isset($idCommissionConsultation['min'])) {
                $this->addUsingAlias(CommonTCAOCommissionConsultationPeer::ID_COMMISSION_CONSULTATION, $idCommissionConsultation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCommissionConsultation['max'])) {
                $this->addUsingAlias(CommonTCAOCommissionConsultationPeer::ID_COMMISSION_CONSULTATION, $idCommissionConsultation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOCommissionConsultationPeer::ID_COMMISSION_CONSULTATION, $idCommissionConsultation, $comparison);
    }

    /**
     * Filter the query on the id_commission column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCommission(1234); // WHERE id_commission = 1234
     * $query->filterByIdCommission(array(12, 34)); // WHERE id_commission IN (12, 34)
     * $query->filterByIdCommission(array('min' => 12)); // WHERE id_commission >= 12
     * $query->filterByIdCommission(array('max' => 12)); // WHERE id_commission <= 12
     * </code>
     *
     * @see       filterByCommonTCAOCommission()
     *
     * @param     mixed $idCommission The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOCommissionConsultationQuery The current query, for fluid interface
     */
    public function filterByIdCommission($idCommission = null, $comparison = null)
    {
        if (is_array($idCommission)) {
            $useMinMax = false;
            if (isset($idCommission['min'])) {
                $this->addUsingAlias(CommonTCAOCommissionConsultationPeer::ID_COMMISSION, $idCommission['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCommission['max'])) {
                $this->addUsingAlias(CommonTCAOCommissionConsultationPeer::ID_COMMISSION, $idCommission['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOCommissionConsultationPeer::ID_COMMISSION, $idCommission, $comparison);
    }

    /**
     * Filter the query on the ref_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByRefConsultation('fooValue');   // WHERE ref_consultation = 'fooValue'
     * $query->filterByRefConsultation('%fooValue%'); // WHERE ref_consultation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $refConsultation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOCommissionConsultationQuery The current query, for fluid interface
     */
    public function filterByRefConsultation($refConsultation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($refConsultation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $refConsultation)) {
                $refConsultation = str_replace('*', '%', $refConsultation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTCAOCommissionConsultationPeer::REF_CONSULTATION, $refConsultation, $comparison);
    }

    /**
     * Filter the query on the ref_libre column
     *
     * Example usage:
     * <code>
     * $query->filterByRefLibre('fooValue');   // WHERE ref_libre = 'fooValue'
     * $query->filterByRefLibre('%fooValue%'); // WHERE ref_libre LIKE '%fooValue%'
     * </code>
     *
     * @param     string $refLibre The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOCommissionConsultationQuery The current query, for fluid interface
     */
    public function filterByRefLibre($refLibre = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($refLibre)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $refLibre)) {
                $refLibre = str_replace('*', '%', $refLibre);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTCAOCommissionConsultationPeer::REF_LIBRE, $refLibre, $comparison);
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
     * @return CommonTCAOCommissionConsultationQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTCAOCommissionConsultationPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the intitule column
     *
     * Example usage:
     * <code>
     * $query->filterByIntitule('fooValue');   // WHERE intitule = 'fooValue'
     * $query->filterByIntitule('%fooValue%'); // WHERE intitule LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intitule The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOCommissionConsultationQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTCAOCommissionConsultationPeer::INTITULE, $intitule, $comparison);
    }

    /**
     * Filter the query on the id_type_procedure column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTypeProcedure(1234); // WHERE id_type_procedure = 1234
     * $query->filterByIdTypeProcedure(array(12, 34)); // WHERE id_type_procedure IN (12, 34)
     * $query->filterByIdTypeProcedure(array('min' => 12)); // WHERE id_type_procedure >= 12
     * $query->filterByIdTypeProcedure(array('max' => 12)); // WHERE id_type_procedure <= 12
     * </code>
     *
     * @param     mixed $idTypeProcedure The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOCommissionConsultationQuery The current query, for fluid interface
     */
    public function filterByIdTypeProcedure($idTypeProcedure = null, $comparison = null)
    {
        if (is_array($idTypeProcedure)) {
            $useMinMax = false;
            if (isset($idTypeProcedure['min'])) {
                $this->addUsingAlias(CommonTCAOCommissionConsultationPeer::ID_TYPE_PROCEDURE, $idTypeProcedure['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeProcedure['max'])) {
                $this->addUsingAlias(CommonTCAOCommissionConsultationPeer::ID_TYPE_PROCEDURE, $idTypeProcedure['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOCommissionConsultationPeer::ID_TYPE_PROCEDURE, $idTypeProcedure, $comparison);
    }

    /**
     * Filter the query on the id_categorie column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCategorie(1234); // WHERE id_categorie = 1234
     * $query->filterByIdCategorie(array(12, 34)); // WHERE id_categorie IN (12, 34)
     * $query->filterByIdCategorie(array('min' => 12)); // WHERE id_categorie >= 12
     * $query->filterByIdCategorie(array('max' => 12)); // WHERE id_categorie <= 12
     * </code>
     *
     * @param     mixed $idCategorie The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOCommissionConsultationQuery The current query, for fluid interface
     */
    public function filterByIdCategorie($idCategorie = null, $comparison = null)
    {
        if (is_array($idCategorie)) {
            $useMinMax = false;
            if (isset($idCategorie['min'])) {
                $this->addUsingAlias(CommonTCAOCommissionConsultationPeer::ID_CATEGORIE, $idCategorie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCategorie['max'])) {
                $this->addUsingAlias(CommonTCAOCommissionConsultationPeer::ID_CATEGORIE, $idCategorie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOCommissionConsultationPeer::ID_CATEGORIE, $idCategorie, $comparison);
    }

    /**
     * Filter the query on the service_gestionnaire column
     *
     * Example usage:
     * <code>
     * $query->filterByServiceGestionnaire('fooValue');   // WHERE service_gestionnaire = 'fooValue'
     * $query->filterByServiceGestionnaire('%fooValue%'); // WHERE service_gestionnaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $serviceGestionnaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOCommissionConsultationQuery The current query, for fluid interface
     */
    public function filterByServiceGestionnaire($serviceGestionnaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($serviceGestionnaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $serviceGestionnaire)) {
                $serviceGestionnaire = str_replace('*', '%', $serviceGestionnaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTCAOCommissionConsultationPeer::SERVICE_GESTIONNAIRE, $serviceGestionnaire, $comparison);
    }

    /**
     * Filter the query on the id_service_gestionnaire column
     *
     * Example usage:
     * <code>
     * $query->filterByIdServiceGestionnaire(1234); // WHERE id_service_gestionnaire = 1234
     * $query->filterByIdServiceGestionnaire(array(12, 34)); // WHERE id_service_gestionnaire IN (12, 34)
     * $query->filterByIdServiceGestionnaire(array('min' => 12)); // WHERE id_service_gestionnaire >= 12
     * $query->filterByIdServiceGestionnaire(array('max' => 12)); // WHERE id_service_gestionnaire <= 12
     * </code>
     *
     * @param     mixed $idServiceGestionnaire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOCommissionConsultationQuery The current query, for fluid interface
     */
    public function filterByIdServiceGestionnaire($idServiceGestionnaire = null, $comparison = null)
    {
        if (is_array($idServiceGestionnaire)) {
            $useMinMax = false;
            if (isset($idServiceGestionnaire['min'])) {
                $this->addUsingAlias(CommonTCAOCommissionConsultationPeer::ID_SERVICE_GESTIONNAIRE, $idServiceGestionnaire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idServiceGestionnaire['max'])) {
                $this->addUsingAlias(CommonTCAOCommissionConsultationPeer::ID_SERVICE_GESTIONNAIRE, $idServiceGestionnaire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOCommissionConsultationPeer::ID_SERVICE_GESTIONNAIRE, $idServiceGestionnaire, $comparison);
    }

    /**
     * Filter the query on the service_associe column
     *
     * Example usage:
     * <code>
     * $query->filterByServiceAssocie('fooValue');   // WHERE service_associe = 'fooValue'
     * $query->filterByServiceAssocie('%fooValue%'); // WHERE service_associe LIKE '%fooValue%'
     * </code>
     *
     * @param     string $serviceAssocie The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOCommissionConsultationQuery The current query, for fluid interface
     */
    public function filterByServiceAssocie($serviceAssocie = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($serviceAssocie)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $serviceAssocie)) {
                $serviceAssocie = str_replace('*', '%', $serviceAssocie);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTCAOCommissionConsultationPeer::SERVICE_ASSOCIE, $serviceAssocie, $comparison);
    }

    /**
     * Filter the query on the id_service_associe column
     *
     * Example usage:
     * <code>
     * $query->filterByIdServiceAssocie(1234); // WHERE id_service_associe = 1234
     * $query->filterByIdServiceAssocie(array(12, 34)); // WHERE id_service_associe IN (12, 34)
     * $query->filterByIdServiceAssocie(array('min' => 12)); // WHERE id_service_associe >= 12
     * $query->filterByIdServiceAssocie(array('max' => 12)); // WHERE id_service_associe <= 12
     * </code>
     *
     * @param     mixed $idServiceAssocie The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOCommissionConsultationQuery The current query, for fluid interface
     */
    public function filterByIdServiceAssocie($idServiceAssocie = null, $comparison = null)
    {
        if (is_array($idServiceAssocie)) {
            $useMinMax = false;
            if (isset($idServiceAssocie['min'])) {
                $this->addUsingAlias(CommonTCAOCommissionConsultationPeer::ID_SERVICE_ASSOCIE, $idServiceAssocie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idServiceAssocie['max'])) {
                $this->addUsingAlias(CommonTCAOCommissionConsultationPeer::ID_SERVICE_ASSOCIE, $idServiceAssocie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOCommissionConsultationPeer::ID_SERVICE_ASSOCIE, $idServiceAssocie, $comparison);
    }

    /**
     * Filter the query on the date_cloture column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCloture('2011-03-14'); // WHERE date_cloture = '2011-03-14'
     * $query->filterByDateCloture('now'); // WHERE date_cloture = '2011-03-14'
     * $query->filterByDateCloture(array('max' => 'yesterday')); // WHERE date_cloture > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateCloture The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOCommissionConsultationQuery The current query, for fluid interface
     */
    public function filterByDateCloture($dateCloture = null, $comparison = null)
    {
        if (is_array($dateCloture)) {
            $useMinMax = false;
            if (isset($dateCloture['min'])) {
                $this->addUsingAlias(CommonTCAOCommissionConsultationPeer::DATE_CLOTURE, $dateCloture['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCloture['max'])) {
                $this->addUsingAlias(CommonTCAOCommissionConsultationPeer::DATE_CLOTURE, $dateCloture['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOCommissionConsultationPeer::DATE_CLOTURE, $dateCloture, $comparison);
    }

    /**
     * Filter the query on the date_mise_en_ligne column
     *
     * Example usage:
     * <code>
     * $query->filterByDateMiseEnLigne('2011-03-14'); // WHERE date_mise_en_ligne = '2011-03-14'
     * $query->filterByDateMiseEnLigne('now'); // WHERE date_mise_en_ligne = '2011-03-14'
     * $query->filterByDateMiseEnLigne(array('max' => 'yesterday')); // WHERE date_mise_en_ligne > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateMiseEnLigne The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOCommissionConsultationQuery The current query, for fluid interface
     */
    public function filterByDateMiseEnLigne($dateMiseEnLigne = null, $comparison = null)
    {
        if (is_array($dateMiseEnLigne)) {
            $useMinMax = false;
            if (isset($dateMiseEnLigne['min'])) {
                $this->addUsingAlias(CommonTCAOCommissionConsultationPeer::DATE_MISE_EN_LIGNE, $dateMiseEnLigne['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateMiseEnLigne['max'])) {
                $this->addUsingAlias(CommonTCAOCommissionConsultationPeer::DATE_MISE_EN_LIGNE, $dateMiseEnLigne['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOCommissionConsultationPeer::DATE_MISE_EN_LIGNE, $dateMiseEnLigne, $comparison);
    }

    /**
     * Filter the query on the id_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByIdConsultation(1234); // WHERE id_consultation = 1234
     * $query->filterByIdConsultation(array(12, 34)); // WHERE id_consultation IN (12, 34)
     * $query->filterByIdConsultation(array('min' => 12)); // WHERE id_consultation >= 12
     * $query->filterByIdConsultation(array('max' => 12)); // WHERE id_consultation <= 12
     * </code>
     *
     * @param     mixed $idConsultation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOCommissionConsultationQuery The current query, for fluid interface
     */
    public function filterByIdConsultation($idConsultation = null, $comparison = null)
    {
        if (is_array($idConsultation)) {
            $useMinMax = false;
            if (isset($idConsultation['min'])) {
                $this->addUsingAlias(CommonTCAOCommissionConsultationPeer::ID_CONSULTATION, $idConsultation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idConsultation['max'])) {
                $this->addUsingAlias(CommonTCAOCommissionConsultationPeer::ID_CONSULTATION, $idConsultation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOCommissionConsultationPeer::ID_CONSULTATION, $idConsultation, $comparison);
    }

    /**
     * Filter the query by a related CommonTCAOCommission object
     *
     * @param   CommonTCAOCommission|PropelObjectCollection $commonTCAOCommission The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTCAOCommissionConsultationQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTCAOCommission($commonTCAOCommission, $comparison = null)
    {
        if ($commonTCAOCommission instanceof CommonTCAOCommission) {
            return $this
                ->addUsingAlias(CommonTCAOCommissionConsultationPeer::ID_COMMISSION, $commonTCAOCommission->getIdCommission(), $comparison);
        } elseif ($commonTCAOCommission instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonTCAOCommissionConsultationPeer::ID_COMMISSION, $commonTCAOCommission->toKeyValue('IdCommission', 'IdCommission'), $comparison);
        } else {
            throw new PropelException('filterByCommonTCAOCommission() only accepts arguments of type CommonTCAOCommission or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTCAOCommission relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTCAOCommissionConsultationQuery The current query, for fluid interface
     */
    public function joinCommonTCAOCommission($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTCAOCommission');

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
            $this->addJoinObject($join, 'CommonTCAOCommission');
        }

        return $this;
    }

    /**
     * Use the CommonTCAOCommission relation CommonTCAOCommission object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTCAOCommissionQuery A secondary query class using the current class as primary query
     */
    public function useCommonTCAOCommissionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonTCAOCommission($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTCAOCommission', 'CommonTCAOCommissionQuery');
    }

    /**
     * Filter the query by a related CommonOrganisme object
     *
     * @param   CommonOrganisme|PropelObjectCollection $commonOrganisme The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTCAOCommissionConsultationQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonOrganisme($commonOrganisme, $comparison = null)
    {
        if ($commonOrganisme instanceof CommonOrganisme) {
            return $this
                ->addUsingAlias(CommonTCAOCommissionConsultationPeer::ORGANISME, $commonOrganisme->getAcronyme(), $comparison);
        } elseif ($commonOrganisme instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonTCAOCommissionConsultationPeer::ORGANISME, $commonOrganisme->toKeyValue('PrimaryKey', 'Acronyme'), $comparison);
        } else {
            throw new PropelException('filterByCommonOrganisme() only accepts arguments of type CommonOrganisme or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonOrganisme relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTCAOCommissionConsultationQuery The current query, for fluid interface
     */
    public function joinCommonOrganisme($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonOrganisme');

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
            $this->addJoinObject($join, 'CommonOrganisme');
        }

        return $this;
    }

    /**
     * Use the CommonOrganisme relation CommonOrganisme object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonOrganismeQuery A secondary query class using the current class as primary query
     */
    public function useCommonOrganismeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonOrganisme($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonOrganisme', 'CommonOrganismeQuery');
    }

    /**
     * Filter the query by a related CommonTCAOOrdreDePassage object
     *
     * @param   CommonTCAOOrdreDePassage|PropelObjectCollection $commonTCAOOrdreDePassage  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTCAOCommissionConsultationQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTCAOOrdreDePassage($commonTCAOOrdreDePassage, $comparison = null)
    {
        if ($commonTCAOOrdreDePassage instanceof CommonTCAOOrdreDePassage) {
            return $this
                ->addUsingAlias(CommonTCAOCommissionConsultationPeer::ID_COMMISSION_CONSULTATION, $commonTCAOOrdreDePassage->getIdCommissionConsultation(), $comparison);
        } elseif ($commonTCAOOrdreDePassage instanceof PropelObjectCollection) {
            return $this
                ->useCommonTCAOOrdreDePassageQuery()
                ->filterByPrimaryKeys($commonTCAOOrdreDePassage->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonTCAOOrdreDePassage() only accepts arguments of type CommonTCAOOrdreDePassage or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTCAOOrdreDePassage relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTCAOCommissionConsultationQuery The current query, for fluid interface
     */
    public function joinCommonTCAOOrdreDePassage($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTCAOOrdreDePassage');

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
            $this->addJoinObject($join, 'CommonTCAOOrdreDePassage');
        }

        return $this;
    }

    /**
     * Use the CommonTCAOOrdreDePassage relation CommonTCAOOrdreDePassage object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTCAOOrdreDePassageQuery A secondary query class using the current class as primary query
     */
    public function useCommonTCAOOrdreDePassageQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonTCAOOrdreDePassage($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTCAOOrdreDePassage', 'CommonTCAOOrdreDePassageQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTCAOCommissionConsultation $commonTCAOCommissionConsultation Object to remove from the list of results
     *
     * @return CommonTCAOCommissionConsultationQuery The current query, for fluid interface
     */
    public function prune($commonTCAOCommissionConsultation = null)
    {
        if ($commonTCAOCommissionConsultation) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonTCAOCommissionConsultationPeer::ID_COMMISSION_CONSULTATION), $commonTCAOCommissionConsultation->getIdCommissionConsultation(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonTCAOCommissionConsultationPeer::ORGANISME), $commonTCAOCommissionConsultation->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
