<?php


/**
 * Base class that represents a query for the 'backup_Commission' table.
 *
 * 
 *
 * @method CommonBackupCommissionQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonBackupCommissionQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonBackupCommissionQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method CommonBackupCommissionQuery orderByLieu($order = Criteria::ASC) Order by the lieu column
 * @method CommonBackupCommissionQuery orderBySalle($order = Criteria::ASC) Order by the salle column
 * @method CommonBackupCommissionQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method CommonBackupCommissionQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method CommonBackupCommissionQuery orderByOrdreDuJour($order = Criteria::ASC) Order by the ordre_du_jour column
 * @method CommonBackupCommissionQuery orderByInvitationsZip($order = Criteria::ASC) Order by the invitations_zip column
 * @method CommonBackupCommissionQuery orderByStatusCao($order = Criteria::ASC) Order by the status_cao column
 *
 * @method CommonBackupCommissionQuery groupById() Group by the id column
 * @method CommonBackupCommissionQuery groupByOrganisme() Group by the organisme column
 * @method CommonBackupCommissionQuery groupByDate() Group by the date column
 * @method CommonBackupCommissionQuery groupByLieu() Group by the lieu column
 * @method CommonBackupCommissionQuery groupBySalle() Group by the salle column
 * @method CommonBackupCommissionQuery groupByType() Group by the type column
 * @method CommonBackupCommissionQuery groupByLibelle() Group by the libelle column
 * @method CommonBackupCommissionQuery groupByOrdreDuJour() Group by the ordre_du_jour column
 * @method CommonBackupCommissionQuery groupByInvitationsZip() Group by the invitations_zip column
 * @method CommonBackupCommissionQuery groupByStatusCao() Group by the status_cao column
 *
 * @method CommonBackupCommissionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonBackupCommissionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonBackupCommissionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonBackupCommission findOne(PropelPDO $con = null) Return the first CommonBackupCommission matching the query
 * @method CommonBackupCommission findOneOrCreate(PropelPDO $con = null) Return the first CommonBackupCommission matching the query, or a new CommonBackupCommission object populated from the query conditions when no match is found
 *
 * @method CommonBackupCommission findOneById(int $id) Return the first CommonBackupCommission filtered by the id column
 * @method CommonBackupCommission findOneByOrganisme(string $organisme) Return the first CommonBackupCommission filtered by the organisme column
 * @method CommonBackupCommission findOneByDate(string $date) Return the first CommonBackupCommission filtered by the date column
 * @method CommonBackupCommission findOneByLieu(string $lieu) Return the first CommonBackupCommission filtered by the lieu column
 * @method CommonBackupCommission findOneBySalle(string $salle) Return the first CommonBackupCommission filtered by the salle column
 * @method CommonBackupCommission findOneByType(string $type) Return the first CommonBackupCommission filtered by the type column
 * @method CommonBackupCommission findOneByLibelle(string $libelle) Return the first CommonBackupCommission filtered by the libelle column
 * @method CommonBackupCommission findOneByOrdreDuJour(resource $ordre_du_jour) Return the first CommonBackupCommission filtered by the ordre_du_jour column
 * @method CommonBackupCommission findOneByInvitationsZip(resource $invitations_zip) Return the first CommonBackupCommission filtered by the invitations_zip column
 * @method CommonBackupCommission findOneByStatusCao(string $status_cao) Return the first CommonBackupCommission filtered by the status_cao column
 *
 * @method array findById(int $id) Return CommonBackupCommission objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonBackupCommission objects filtered by the organisme column
 * @method array findByDate(string $date) Return CommonBackupCommission objects filtered by the date column
 * @method array findByLieu(string $lieu) Return CommonBackupCommission objects filtered by the lieu column
 * @method array findBySalle(string $salle) Return CommonBackupCommission objects filtered by the salle column
 * @method array findByType(string $type) Return CommonBackupCommission objects filtered by the type column
 * @method array findByLibelle(string $libelle) Return CommonBackupCommission objects filtered by the libelle column
 * @method array findByOrdreDuJour(resource $ordre_du_jour) Return CommonBackupCommission objects filtered by the ordre_du_jour column
 * @method array findByInvitationsZip(resource $invitations_zip) Return CommonBackupCommission objects filtered by the invitations_zip column
 * @method array findByStatusCao(string $status_cao) Return CommonBackupCommission objects filtered by the status_cao column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonBackupCommissionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonBackupCommissionQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonBackupCommission', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonBackupCommissionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonBackupCommissionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonBackupCommissionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonBackupCommissionQuery) {
            return $criteria;
        }
        $query = new CommonBackupCommissionQuery();
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
     * @return   CommonBackupCommission|CommonBackupCommission[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonBackupCommissionPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonBackupCommissionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonBackupCommission A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `date`, `lieu`, `salle`, `type`, `libelle`, `ordre_du_jour`, `invitations_zip`, `status_cao` FROM `backup_Commission` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonBackupCommission();
            $obj->hydrate($row);
            CommonBackupCommissionPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonBackupCommission|CommonBackupCommission[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonBackupCommission[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonBackupCommissionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonBackupCommissionPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonBackupCommissionPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonBackupCommissionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonBackupCommissionPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonBackupCommissionPeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonBackupCommissionQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonBackupCommissionPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonBackupCommissionPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonBackupCommissionPeer::ID, $id, $comparison);
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
     * @return CommonBackupCommissionQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonBackupCommissionPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the date column
     *
     * Example usage:
     * <code>
     * $query->filterByDate('2011-03-14'); // WHERE date = '2011-03-14'
     * $query->filterByDate('now'); // WHERE date = '2011-03-14'
     * $query->filterByDate(array('max' => 'yesterday')); // WHERE date > '2011-03-13'
     * </code>
     *
     * @param     mixed $date The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupCommissionQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (is_array($date)) {
            $useMinMax = false;
            if (isset($date['min'])) {
                $this->addUsingAlias(CommonBackupCommissionPeer::DATE, $date['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($date['max'])) {
                $this->addUsingAlias(CommonBackupCommissionPeer::DATE, $date['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonBackupCommissionPeer::DATE, $date, $comparison);
    }

    /**
     * Filter the query on the lieu column
     *
     * Example usage:
     * <code>
     * $query->filterByLieu('fooValue');   // WHERE lieu = 'fooValue'
     * $query->filterByLieu('%fooValue%'); // WHERE lieu LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lieu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupCommissionQuery The current query, for fluid interface
     */
    public function filterByLieu($lieu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lieu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lieu)) {
                $lieu = str_replace('*', '%', $lieu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonBackupCommissionPeer::LIEU, $lieu, $comparison);
    }

    /**
     * Filter the query on the salle column
     *
     * Example usage:
     * <code>
     * $query->filterBySalle('fooValue');   // WHERE salle = 'fooValue'
     * $query->filterBySalle('%fooValue%'); // WHERE salle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $salle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupCommissionQuery The current query, for fluid interface
     */
    public function filterBySalle($salle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($salle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $salle)) {
                $salle = str_replace('*', '%', $salle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonBackupCommissionPeer::SALLE, $salle, $comparison);
    }

    /**
     * Filter the query on the type column
     *
     * Example usage:
     * <code>
     * $query->filterByType('fooValue');   // WHERE type = 'fooValue'
     * $query->filterByType('%fooValue%'); // WHERE type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $type The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupCommissionQuery The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($type)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $type)) {
                $type = str_replace('*', '%', $type);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonBackupCommissionPeer::TYPE, $type, $comparison);
    }

    /**
     * Filter the query on the libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelle('fooValue');   // WHERE libelle = 'fooValue'
     * $query->filterByLibelle('%fooValue%'); // WHERE libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupCommissionQuery The current query, for fluid interface
     */
    public function filterByLibelle($libelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelle)) {
                $libelle = str_replace('*', '%', $libelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonBackupCommissionPeer::LIBELLE, $libelle, $comparison);
    }

    /**
     * Filter the query on the ordre_du_jour column
     *
     * @param     mixed $ordreDuJour The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupCommissionQuery The current query, for fluid interface
     */
    public function filterByOrdreDuJour($ordreDuJour = null, $comparison = null)
    {

        return $this->addUsingAlias(CommonBackupCommissionPeer::ORDRE_DU_JOUR, $ordreDuJour, $comparison);
    }

    /**
     * Filter the query on the invitations_zip column
     *
     * @param     mixed $invitationsZip The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupCommissionQuery The current query, for fluid interface
     */
    public function filterByInvitationsZip($invitationsZip = null, $comparison = null)
    {

        return $this->addUsingAlias(CommonBackupCommissionPeer::INVITATIONS_ZIP, $invitationsZip, $comparison);
    }

    /**
     * Filter the query on the status_cao column
     *
     * Example usage:
     * <code>
     * $query->filterByStatusCao('fooValue');   // WHERE status_cao = 'fooValue'
     * $query->filterByStatusCao('%fooValue%'); // WHERE status_cao LIKE '%fooValue%'
     * </code>
     *
     * @param     string $statusCao The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonBackupCommissionQuery The current query, for fluid interface
     */
    public function filterByStatusCao($statusCao = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($statusCao)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $statusCao)) {
                $statusCao = str_replace('*', '%', $statusCao);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonBackupCommissionPeer::STATUS_CAO, $statusCao, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonBackupCommission $commonBackupCommission Object to remove from the list of results
     *
     * @return CommonBackupCommissionQuery The current query, for fluid interface
     */
    public function prune($commonBackupCommission = null)
    {
        if ($commonBackupCommission) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonBackupCommissionPeer::ID), $commonBackupCommission->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonBackupCommissionPeer::ORGANISME), $commonBackupCommission->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
