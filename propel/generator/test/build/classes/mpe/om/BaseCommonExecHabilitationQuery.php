<?php


/**
 * Base class that represents a query for the 'exec_habilitation' table.
 *
 * 
 *
 * @method CommonExecHabilitationQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonExecHabilitationQuery orderByIdProfile($order = Criteria::ASC) Order by the id_profile column
 * @method CommonExecHabilitationQuery orderByRole($order = Criteria::ASC) Order by the role column
 * @method CommonExecHabilitationQuery orderByActif($order = Criteria::ASC) Order by the actif column
 *
 * @method CommonExecHabilitationQuery groupById() Group by the id column
 * @method CommonExecHabilitationQuery groupByIdProfile() Group by the id_profile column
 * @method CommonExecHabilitationQuery groupByRole() Group by the role column
 * @method CommonExecHabilitationQuery groupByActif() Group by the actif column
 *
 * @method CommonExecHabilitationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonExecHabilitationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonExecHabilitationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonExecHabilitation findOne(PropelPDO $con = null) Return the first CommonExecHabilitation matching the query
 * @method CommonExecHabilitation findOneOrCreate(PropelPDO $con = null) Return the first CommonExecHabilitation matching the query, or a new CommonExecHabilitation object populated from the query conditions when no match is found
 *
 * @method CommonExecHabilitation findOneByIdProfile(int $id_profile) Return the first CommonExecHabilitation filtered by the id_profile column
 * @method CommonExecHabilitation findOneByRole(string $role) Return the first CommonExecHabilitation filtered by the role column
 * @method CommonExecHabilitation findOneByActif(string $actif) Return the first CommonExecHabilitation filtered by the actif column
 *
 * @method array findById(int $id) Return CommonExecHabilitation objects filtered by the id column
 * @method array findByIdProfile(int $id_profile) Return CommonExecHabilitation objects filtered by the id_profile column
 * @method array findByRole(string $role) Return CommonExecHabilitation objects filtered by the role column
 * @method array findByActif(string $actif) Return CommonExecHabilitation objects filtered by the actif column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonExecHabilitationQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonExecHabilitationQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonExecHabilitation', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonExecHabilitationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonExecHabilitationQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonExecHabilitationQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonExecHabilitationQuery) {
            return $criteria;
        }
        $query = new CommonExecHabilitationQuery();
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
     * @return   CommonExecHabilitation|CommonExecHabilitation[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonExecHabilitationPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonExecHabilitationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonExecHabilitation A model object, or null if the key is not found
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
     * @return                 CommonExecHabilitation A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_profile`, `role`, `actif` FROM `exec_habilitation` WHERE `id` = :p0';
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
            $obj = new CommonExecHabilitation();
            $obj->hydrate($row);
            CommonExecHabilitationPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonExecHabilitation|CommonExecHabilitation[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonExecHabilitation[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonExecHabilitationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonExecHabilitationPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonExecHabilitationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonExecHabilitationPeer::ID, $keys, Criteria::IN);
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
     * @return CommonExecHabilitationQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonExecHabilitationPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonExecHabilitationPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecHabilitationPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_profile column
     *
     * Example usage:
     * <code>
     * $query->filterByIdProfile(1234); // WHERE id_profile = 1234
     * $query->filterByIdProfile(array(12, 34)); // WHERE id_profile IN (12, 34)
     * $query->filterByIdProfile(array('min' => 12)); // WHERE id_profile >= 12
     * $query->filterByIdProfile(array('max' => 12)); // WHERE id_profile <= 12
     * </code>
     *
     * @param     mixed $idProfile The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecHabilitationQuery The current query, for fluid interface
     */
    public function filterByIdProfile($idProfile = null, $comparison = null)
    {
        if (is_array($idProfile)) {
            $useMinMax = false;
            if (isset($idProfile['min'])) {
                $this->addUsingAlias(CommonExecHabilitationPeer::ID_PROFILE, $idProfile['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idProfile['max'])) {
                $this->addUsingAlias(CommonExecHabilitationPeer::ID_PROFILE, $idProfile['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecHabilitationPeer::ID_PROFILE, $idProfile, $comparison);
    }

    /**
     * Filter the query on the role column
     *
     * Example usage:
     * <code>
     * $query->filterByRole('fooValue');   // WHERE role = 'fooValue'
     * $query->filterByRole('%fooValue%'); // WHERE role LIKE '%fooValue%'
     * </code>
     *
     * @param     string $role The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecHabilitationQuery The current query, for fluid interface
     */
    public function filterByRole($role = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($role)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $role)) {
                $role = str_replace('*', '%', $role);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecHabilitationPeer::ROLE, $role, $comparison);
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
     * @return CommonExecHabilitationQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonExecHabilitationPeer::ACTIF, $actif, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonExecHabilitation $commonExecHabilitation Object to remove from the list of results
     *
     * @return CommonExecHabilitationQuery The current query, for fluid interface
     */
    public function prune($commonExecHabilitation = null)
    {
        if ($commonExecHabilitation) {
            $this->addUsingAlias(CommonExecHabilitationPeer::ID, $commonExecHabilitation->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
