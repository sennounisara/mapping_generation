<?php


/**
 * Base class that represents a query for the 'Agent_Service_Metier' table.
 *
 * 
 *
 * @method CommonAgentServiceMetierQuery orderByIdAgent($order = Criteria::ASC) Order by the id_agent column
 * @method CommonAgentServiceMetierQuery orderByIdServiceMetier($order = Criteria::ASC) Order by the id_service_metier column
 * @method CommonAgentServiceMetierQuery orderByIdProfilService($order = Criteria::ASC) Order by the id_profil_service column
 * @method CommonAgentServiceMetierQuery orderByDateCreation($order = Criteria::ASC) Order by the date_creation column
 * @method CommonAgentServiceMetierQuery orderByDateModification($order = Criteria::ASC) Order by the date_modification column
 *
 * @method CommonAgentServiceMetierQuery groupByIdAgent() Group by the id_agent column
 * @method CommonAgentServiceMetierQuery groupByIdServiceMetier() Group by the id_service_metier column
 * @method CommonAgentServiceMetierQuery groupByIdProfilService() Group by the id_profil_service column
 * @method CommonAgentServiceMetierQuery groupByDateCreation() Group by the date_creation column
 * @method CommonAgentServiceMetierQuery groupByDateModification() Group by the date_modification column
 *
 * @method CommonAgentServiceMetierQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonAgentServiceMetierQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonAgentServiceMetierQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonAgentServiceMetier findOne(PropelPDO $con = null) Return the first CommonAgentServiceMetier matching the query
 * @method CommonAgentServiceMetier findOneOrCreate(PropelPDO $con = null) Return the first CommonAgentServiceMetier matching the query, or a new CommonAgentServiceMetier object populated from the query conditions when no match is found
 *
 * @method CommonAgentServiceMetier findOneByIdAgent(int $id_agent) Return the first CommonAgentServiceMetier filtered by the id_agent column
 * @method CommonAgentServiceMetier findOneByIdServiceMetier(int $id_service_metier) Return the first CommonAgentServiceMetier filtered by the id_service_metier column
 * @method CommonAgentServiceMetier findOneByIdProfilService(int $id_profil_service) Return the first CommonAgentServiceMetier filtered by the id_profil_service column
 * @method CommonAgentServiceMetier findOneByDateCreation(string $date_creation) Return the first CommonAgentServiceMetier filtered by the date_creation column
 * @method CommonAgentServiceMetier findOneByDateModification(string $date_modification) Return the first CommonAgentServiceMetier filtered by the date_modification column
 *
 * @method array findByIdAgent(int $id_agent) Return CommonAgentServiceMetier objects filtered by the id_agent column
 * @method array findByIdServiceMetier(int $id_service_metier) Return CommonAgentServiceMetier objects filtered by the id_service_metier column
 * @method array findByIdProfilService(int $id_profil_service) Return CommonAgentServiceMetier objects filtered by the id_profil_service column
 * @method array findByDateCreation(string $date_creation) Return CommonAgentServiceMetier objects filtered by the date_creation column
 * @method array findByDateModification(string $date_modification) Return CommonAgentServiceMetier objects filtered by the date_modification column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonAgentServiceMetierQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonAgentServiceMetierQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonAgentServiceMetier', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonAgentServiceMetierQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonAgentServiceMetierQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonAgentServiceMetierQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonAgentServiceMetierQuery) {
            return $criteria;
        }
        $query = new CommonAgentServiceMetierQuery();
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
                         A Primary key composition: [$id_agent, $id_service_metier]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonAgentServiceMetier|CommonAgentServiceMetier[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonAgentServiceMetierPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonAgentServiceMetierPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonAgentServiceMetier A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_agent`, `id_service_metier`, `id_profil_service`, `date_creation`, `date_modification` FROM `Agent_Service_Metier` WHERE `id_agent` = :p0 AND `id_service_metier` = :p1';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonAgentServiceMetier();
            $obj->hydrate($row);
            CommonAgentServiceMetierPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonAgentServiceMetier|CommonAgentServiceMetier[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonAgentServiceMetier[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonAgentServiceMetierQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonAgentServiceMetierPeer::ID_AGENT, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonAgentServiceMetierPeer::ID_SERVICE_METIER, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonAgentServiceMetierQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonAgentServiceMetierPeer::ID_AGENT, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonAgentServiceMetierPeer::ID_SERVICE_METIER, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return CommonAgentServiceMetierQuery The current query, for fluid interface
     */
    public function filterByIdAgent($idAgent = null, $comparison = null)
    {
        if (is_array($idAgent)) {
            $useMinMax = false;
            if (isset($idAgent['min'])) {
                $this->addUsingAlias(CommonAgentServiceMetierPeer::ID_AGENT, $idAgent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgent['max'])) {
                $this->addUsingAlias(CommonAgentServiceMetierPeer::ID_AGENT, $idAgent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAgentServiceMetierPeer::ID_AGENT, $idAgent, $comparison);
    }

    /**
     * Filter the query on the id_service_metier column
     *
     * Example usage:
     * <code>
     * $query->filterByIdServiceMetier(1234); // WHERE id_service_metier = 1234
     * $query->filterByIdServiceMetier(array(12, 34)); // WHERE id_service_metier IN (12, 34)
     * $query->filterByIdServiceMetier(array('min' => 12)); // WHERE id_service_metier >= 12
     * $query->filterByIdServiceMetier(array('max' => 12)); // WHERE id_service_metier <= 12
     * </code>
     *
     * @param     mixed $idServiceMetier The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentServiceMetierQuery The current query, for fluid interface
     */
    public function filterByIdServiceMetier($idServiceMetier = null, $comparison = null)
    {
        if (is_array($idServiceMetier)) {
            $useMinMax = false;
            if (isset($idServiceMetier['min'])) {
                $this->addUsingAlias(CommonAgentServiceMetierPeer::ID_SERVICE_METIER, $idServiceMetier['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idServiceMetier['max'])) {
                $this->addUsingAlias(CommonAgentServiceMetierPeer::ID_SERVICE_METIER, $idServiceMetier['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAgentServiceMetierPeer::ID_SERVICE_METIER, $idServiceMetier, $comparison);
    }

    /**
     * Filter the query on the id_profil_service column
     *
     * Example usage:
     * <code>
     * $query->filterByIdProfilService(1234); // WHERE id_profil_service = 1234
     * $query->filterByIdProfilService(array(12, 34)); // WHERE id_profil_service IN (12, 34)
     * $query->filterByIdProfilService(array('min' => 12)); // WHERE id_profil_service >= 12
     * $query->filterByIdProfilService(array('max' => 12)); // WHERE id_profil_service <= 12
     * </code>
     *
     * @param     mixed $idProfilService The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAgentServiceMetierQuery The current query, for fluid interface
     */
    public function filterByIdProfilService($idProfilService = null, $comparison = null)
    {
        if (is_array($idProfilService)) {
            $useMinMax = false;
            if (isset($idProfilService['min'])) {
                $this->addUsingAlias(CommonAgentServiceMetierPeer::ID_PROFIL_SERVICE, $idProfilService['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idProfilService['max'])) {
                $this->addUsingAlias(CommonAgentServiceMetierPeer::ID_PROFIL_SERVICE, $idProfilService['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAgentServiceMetierPeer::ID_PROFIL_SERVICE, $idProfilService, $comparison);
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
     * @return CommonAgentServiceMetierQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonAgentServiceMetierPeer::DATE_CREATION, $dateCreation, $comparison);
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
     * @return CommonAgentServiceMetierQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonAgentServiceMetierPeer::DATE_MODIFICATION, $dateModification, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonAgentServiceMetier $commonAgentServiceMetier Object to remove from the list of results
     *
     * @return CommonAgentServiceMetierQuery The current query, for fluid interface
     */
    public function prune($commonAgentServiceMetier = null)
    {
        if ($commonAgentServiceMetier) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonAgentServiceMetierPeer::ID_AGENT), $commonAgentServiceMetier->getIdAgent(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonAgentServiceMetierPeer::ID_SERVICE_METIER), $commonAgentServiceMetier->getIdServiceMetier(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
