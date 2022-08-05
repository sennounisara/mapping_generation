<?php


/**
 * Base class that represents a query for the 'DCE' table.
 *
 * 
 *
 * @method CommonDCEQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonDCEQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonDCEQuery orderByConsultationRef($order = Criteria::ASC) Order by the consultation_ref column
 * @method CommonDCEQuery orderByDce($order = Criteria::ASC) Order by the dce column
 * @method CommonDCEQuery orderByNomDce($order = Criteria::ASC) Order by the nom_dce column
 * @method CommonDCEQuery orderByStatut($order = Criteria::ASC) Order by the statut column
 * @method CommonDCEQuery orderByNomFichier($order = Criteria::ASC) Order by the nom_fichier column
 * @method CommonDCEQuery orderByAncienFichier($order = Criteria::ASC) Order by the ancien_fichier column
 * @method CommonDCEQuery orderByHorodatage($order = Criteria::ASC) Order by the horodatage column
 * @method CommonDCEQuery orderByUntrusteddate($order = Criteria::ASC) Order by the untrusteddate column
 * @method CommonDCEQuery orderByAgentId($order = Criteria::ASC) Order by the agent_id column
 *
 * @method CommonDCEQuery groupById() Group by the id column
 * @method CommonDCEQuery groupByOrganisme() Group by the organisme column
 * @method CommonDCEQuery groupByConsultationRef() Group by the consultation_ref column
 * @method CommonDCEQuery groupByDce() Group by the dce column
 * @method CommonDCEQuery groupByNomDce() Group by the nom_dce column
 * @method CommonDCEQuery groupByStatut() Group by the statut column
 * @method CommonDCEQuery groupByNomFichier() Group by the nom_fichier column
 * @method CommonDCEQuery groupByAncienFichier() Group by the ancien_fichier column
 * @method CommonDCEQuery groupByHorodatage() Group by the horodatage column
 * @method CommonDCEQuery groupByUntrusteddate() Group by the untrusteddate column
 * @method CommonDCEQuery groupByAgentId() Group by the agent_id column
 *
 * @method CommonDCEQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonDCEQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonDCEQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonDCEQuery leftJoinCommonConsultation($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonConsultation relation
 * @method CommonDCEQuery rightJoinCommonConsultation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonConsultation relation
 * @method CommonDCEQuery innerJoinCommonConsultation($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonConsultation relation
 *
 * @method CommonDCE findOne(PropelPDO $con = null) Return the first CommonDCE matching the query
 * @method CommonDCE findOneOrCreate(PropelPDO $con = null) Return the first CommonDCE matching the query, or a new CommonDCE object populated from the query conditions when no match is found
 *
 * @method CommonDCE findOneById(int $id) Return the first CommonDCE filtered by the id column
 * @method CommonDCE findOneByOrganisme(string $organisme) Return the first CommonDCE filtered by the organisme column
 * @method CommonDCE findOneByConsultationRef(int $consultation_ref) Return the first CommonDCE filtered by the consultation_ref column
 * @method CommonDCE findOneByDce(int $dce) Return the first CommonDCE filtered by the dce column
 * @method CommonDCE findOneByNomDce(string $nom_dce) Return the first CommonDCE filtered by the nom_dce column
 * @method CommonDCE findOneByStatut(string $statut) Return the first CommonDCE filtered by the statut column
 * @method CommonDCE findOneByNomFichier(string $nom_fichier) Return the first CommonDCE filtered by the nom_fichier column
 * @method CommonDCE findOneByAncienFichier(string $ancien_fichier) Return the first CommonDCE filtered by the ancien_fichier column
 * @method CommonDCE findOneByHorodatage(resource $horodatage) Return the first CommonDCE filtered by the horodatage column
 * @method CommonDCE findOneByUntrusteddate(string $untrusteddate) Return the first CommonDCE filtered by the untrusteddate column
 * @method CommonDCE findOneByAgentId(int $agent_id) Return the first CommonDCE filtered by the agent_id column
 *
 * @method array findById(int $id) Return CommonDCE objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonDCE objects filtered by the organisme column
 * @method array findByConsultationRef(int $consultation_ref) Return CommonDCE objects filtered by the consultation_ref column
 * @method array findByDce(int $dce) Return CommonDCE objects filtered by the dce column
 * @method array findByNomDce(string $nom_dce) Return CommonDCE objects filtered by the nom_dce column
 * @method array findByStatut(string $statut) Return CommonDCE objects filtered by the statut column
 * @method array findByNomFichier(string $nom_fichier) Return CommonDCE objects filtered by the nom_fichier column
 * @method array findByAncienFichier(string $ancien_fichier) Return CommonDCE objects filtered by the ancien_fichier column
 * @method array findByHorodatage(resource $horodatage) Return CommonDCE objects filtered by the horodatage column
 * @method array findByUntrusteddate(string $untrusteddate) Return CommonDCE objects filtered by the untrusteddate column
 * @method array findByAgentId(int $agent_id) Return CommonDCE objects filtered by the agent_id column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonDCEQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonDCEQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonDCE', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonDCEQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonDCEQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonDCEQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonDCEQuery) {
            return $criteria;
        }
        $query = new CommonDCEQuery();
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
     * @return   CommonDCE|CommonDCE[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonDCEPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonDCEPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonDCE A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `consultation_ref`, `dce`, `nom_dce`, `statut`, `nom_fichier`, `ancien_fichier`, `horodatage`, `untrusteddate`, `agent_id` FROM `DCE` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonDCE();
            $obj->hydrate($row);
            CommonDCEPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonDCE|CommonDCE[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonDCE[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonDCEQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonDCEPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonDCEPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonDCEQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonDCEPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonDCEPeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonDCEQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonDCEPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonDCEPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDCEPeer::ID, $id, $comparison);
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
     * @return CommonDCEQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonDCEPeer::ORGANISME, $organisme, $comparison);
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
     * @return CommonDCEQuery The current query, for fluid interface
     */
    public function filterByConsultationRef($consultationRef = null, $comparison = null)
    {
        if (is_array($consultationRef)) {
            $useMinMax = false;
            if (isset($consultationRef['min'])) {
                $this->addUsingAlias(CommonDCEPeer::CONSULTATION_REF, $consultationRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($consultationRef['max'])) {
                $this->addUsingAlias(CommonDCEPeer::CONSULTATION_REF, $consultationRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDCEPeer::CONSULTATION_REF, $consultationRef, $comparison);
    }

    /**
     * Filter the query on the dce column
     *
     * Example usage:
     * <code>
     * $query->filterByDce(1234); // WHERE dce = 1234
     * $query->filterByDce(array(12, 34)); // WHERE dce IN (12, 34)
     * $query->filterByDce(array('min' => 12)); // WHERE dce >= 12
     * $query->filterByDce(array('max' => 12)); // WHERE dce <= 12
     * </code>
     *
     * @param     mixed $dce The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDCEQuery The current query, for fluid interface
     */
    public function filterByDce($dce = null, $comparison = null)
    {
        if (is_array($dce)) {
            $useMinMax = false;
            if (isset($dce['min'])) {
                $this->addUsingAlias(CommonDCEPeer::DCE, $dce['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dce['max'])) {
                $this->addUsingAlias(CommonDCEPeer::DCE, $dce['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDCEPeer::DCE, $dce, $comparison);
    }

    /**
     * Filter the query on the nom_dce column
     *
     * Example usage:
     * <code>
     * $query->filterByNomDce('fooValue');   // WHERE nom_dce = 'fooValue'
     * $query->filterByNomDce('%fooValue%'); // WHERE nom_dce LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomDce The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDCEQuery The current query, for fluid interface
     */
    public function filterByNomDce($nomDce = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomDce)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomDce)) {
                $nomDce = str_replace('*', '%', $nomDce);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDCEPeer::NOM_DCE, $nomDce, $comparison);
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
     * @return CommonDCEQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonDCEPeer::STATUT, $statut, $comparison);
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
     * @return CommonDCEQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonDCEPeer::NOM_FICHIER, $nomFichier, $comparison);
    }

    /**
     * Filter the query on the ancien_fichier column
     *
     * Example usage:
     * <code>
     * $query->filterByAncienFichier('fooValue');   // WHERE ancien_fichier = 'fooValue'
     * $query->filterByAncienFichier('%fooValue%'); // WHERE ancien_fichier LIKE '%fooValue%'
     * </code>
     *
     * @param     string $ancienFichier The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDCEQuery The current query, for fluid interface
     */
    public function filterByAncienFichier($ancienFichier = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($ancienFichier)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $ancienFichier)) {
                $ancienFichier = str_replace('*', '%', $ancienFichier);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDCEPeer::ANCIEN_FICHIER, $ancienFichier, $comparison);
    }

    /**
     * Filter the query on the horodatage column
     *
     * @param     mixed $horodatage The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDCEQuery The current query, for fluid interface
     */
    public function filterByHorodatage($horodatage = null, $comparison = null)
    {

        return $this->addUsingAlias(CommonDCEPeer::HORODATAGE, $horodatage, $comparison);
    }

    /**
     * Filter the query on the untrusteddate column
     *
     * Example usage:
     * <code>
     * $query->filterByUntrusteddate('2011-03-14'); // WHERE untrusteddate = '2011-03-14'
     * $query->filterByUntrusteddate('now'); // WHERE untrusteddate = '2011-03-14'
     * $query->filterByUntrusteddate(array('max' => 'yesterday')); // WHERE untrusteddate > '2011-03-13'
     * </code>
     *
     * @param     mixed $untrusteddate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDCEQuery The current query, for fluid interface
     */
    public function filterByUntrusteddate($untrusteddate = null, $comparison = null)
    {
        if (is_array($untrusteddate)) {
            $useMinMax = false;
            if (isset($untrusteddate['min'])) {
                $this->addUsingAlias(CommonDCEPeer::UNTRUSTEDDATE, $untrusteddate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($untrusteddate['max'])) {
                $this->addUsingAlias(CommonDCEPeer::UNTRUSTEDDATE, $untrusteddate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDCEPeer::UNTRUSTEDDATE, $untrusteddate, $comparison);
    }

    /**
     * Filter the query on the agent_id column
     *
     * Example usage:
     * <code>
     * $query->filterByAgentId(1234); // WHERE agent_id = 1234
     * $query->filterByAgentId(array(12, 34)); // WHERE agent_id IN (12, 34)
     * $query->filterByAgentId(array('min' => 12)); // WHERE agent_id >= 12
     * $query->filterByAgentId(array('max' => 12)); // WHERE agent_id <= 12
     * </code>
     *
     * @param     mixed $agentId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDCEQuery The current query, for fluid interface
     */
    public function filterByAgentId($agentId = null, $comparison = null)
    {
        if (is_array($agentId)) {
            $useMinMax = false;
            if (isset($agentId['min'])) {
                $this->addUsingAlias(CommonDCEPeer::AGENT_ID, $agentId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($agentId['max'])) {
                $this->addUsingAlias(CommonDCEPeer::AGENT_ID, $agentId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDCEPeer::AGENT_ID, $agentId, $comparison);
    }

    /**
     * Filter the query by a related CommonConsultation object
     *
     * @param   CommonConsultation $commonConsultation The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonDCEQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonConsultation($commonConsultation, $comparison = null)
    {
        if ($commonConsultation instanceof CommonConsultation) {
            return $this
                ->addUsingAlias(CommonDCEPeer::ORGANISME, $commonConsultation->getOrganisme(), $comparison)
                ->addUsingAlias(CommonDCEPeer::CONSULTATION_REF, $commonConsultation->getReference(), $comparison);
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
     * @return CommonDCEQuery The current query, for fluid interface
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
     * @param   CommonDCE $commonDCE Object to remove from the list of results
     *
     * @return CommonDCEQuery The current query, for fluid interface
     */
    public function prune($commonDCE = null)
    {
        if ($commonDCE) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonDCEPeer::ID), $commonDCE->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonDCEPeer::ORGANISME), $commonDCE->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
