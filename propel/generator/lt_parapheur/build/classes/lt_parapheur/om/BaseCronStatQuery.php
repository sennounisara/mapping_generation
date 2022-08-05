<?php


/**
 * Base class that represents a query for the 'cron_stat' table.
 *
 * 
 *
 * @method CronStatQuery orderByIdCron($order = Criteria::ASC) Order by the ID_CRON column
 * @method CronStatQuery orderByDerniereDateLancement($order = Criteria::ASC) Order by the DERNIERE_DATE_LANCEMENT column
 * @method CronStatQuery orderByType($order = Criteria::ASC) Order by the TYPE column
 * @method CronStatQuery orderByStatut($order = Criteria::ASC) Order by the STATUT column
 *
 * @method CronStatQuery groupByIdCron() Group by the ID_CRON column
 * @method CronStatQuery groupByDerniereDateLancement() Group by the DERNIERE_DATE_LANCEMENT column
 * @method CronStatQuery groupByType() Group by the TYPE column
 * @method CronStatQuery groupByStatut() Group by the STATUT column
 *
 * @method CronStatQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CronStatQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CronStatQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CronStat findOne(PropelPDO $con = null) Return the first CronStat matching the query
 * @method CronStat findOneOrCreate(PropelPDO $con = null) Return the first CronStat matching the query, or a new CronStat object populated from the query conditions when no match is found
 *
 * @method CronStat findOneByDerniereDateLancement(string $DERNIERE_DATE_LANCEMENT) Return the first CronStat filtered by the DERNIERE_DATE_LANCEMENT column
 * @method CronStat findOneByType(string $TYPE) Return the first CronStat filtered by the TYPE column
 * @method CronStat findOneByStatut(string $STATUT) Return the first CronStat filtered by the STATUT column
 *
 * @method array findByIdCron(int $ID_CRON) Return CronStat objects filtered by the ID_CRON column
 * @method array findByDerniereDateLancement(string $DERNIERE_DATE_LANCEMENT) Return CronStat objects filtered by the DERNIERE_DATE_LANCEMENT column
 * @method array findByType(string $TYPE) Return CronStat objects filtered by the TYPE column
 * @method array findByStatut(string $STATUT) Return CronStat objects filtered by the STATUT column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCronStatQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCronStatQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'CronStat', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CronStatQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CronStatQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CronStatQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CronStatQuery) {
            return $criteria;
        }
        $query = new CronStatQuery();
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
     * @return   CronStat|CronStat[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CronStatPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CronStatPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CronStat A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdCron($key, $con = null)
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
     * @return                 CronStat A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_CRON`, `DERNIERE_DATE_LANCEMENT`, `TYPE`, `STATUT` FROM `cron_stat` WHERE `ID_CRON` = :p0';
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
            $obj = new CronStat();
            $obj->hydrate($row);
            CronStatPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CronStat|CronStat[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CronStat[]|mixed the list of results, formatted by the current formatter
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
     * @return CronStatQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CronStatPeer::ID_CRON, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CronStatQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CronStatPeer::ID_CRON, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID_CRON column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCron(1234); // WHERE ID_CRON = 1234
     * $query->filterByIdCron(array(12, 34)); // WHERE ID_CRON IN (12, 34)
     * $query->filterByIdCron(array('min' => 12)); // WHERE ID_CRON >= 12
     * $query->filterByIdCron(array('max' => 12)); // WHERE ID_CRON <= 12
     * </code>
     *
     * @param     mixed $idCron The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CronStatQuery The current query, for fluid interface
     */
    public function filterByIdCron($idCron = null, $comparison = null)
    {
        if (is_array($idCron)) {
            $useMinMax = false;
            if (isset($idCron['min'])) {
                $this->addUsingAlias(CronStatPeer::ID_CRON, $idCron['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCron['max'])) {
                $this->addUsingAlias(CronStatPeer::ID_CRON, $idCron['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CronStatPeer::ID_CRON, $idCron, $comparison);
    }

    /**
     * Filter the query on the DERNIERE_DATE_LANCEMENT column
     *
     * Example usage:
     * <code>
     * $query->filterByDerniereDateLancement('2011-03-14'); // WHERE DERNIERE_DATE_LANCEMENT = '2011-03-14'
     * $query->filterByDerniereDateLancement('now'); // WHERE DERNIERE_DATE_LANCEMENT = '2011-03-14'
     * $query->filterByDerniereDateLancement(array('max' => 'yesterday')); // WHERE DERNIERE_DATE_LANCEMENT > '2011-03-13'
     * </code>
     *
     * @param     mixed $derniereDateLancement The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CronStatQuery The current query, for fluid interface
     */
    public function filterByDerniereDateLancement($derniereDateLancement = null, $comparison = null)
    {
        if (is_array($derniereDateLancement)) {
            $useMinMax = false;
            if (isset($derniereDateLancement['min'])) {
                $this->addUsingAlias(CronStatPeer::DERNIERE_DATE_LANCEMENT, $derniereDateLancement['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($derniereDateLancement['max'])) {
                $this->addUsingAlias(CronStatPeer::DERNIERE_DATE_LANCEMENT, $derniereDateLancement['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CronStatPeer::DERNIERE_DATE_LANCEMENT, $derniereDateLancement, $comparison);
    }

    /**
     * Filter the query on the TYPE column
     *
     * Example usage:
     * <code>
     * $query->filterByType('fooValue');   // WHERE TYPE = 'fooValue'
     * $query->filterByType('%fooValue%'); // WHERE TYPE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $type The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CronStatQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CronStatPeer::TYPE, $type, $comparison);
    }

    /**
     * Filter the query on the STATUT column
     *
     * Example usage:
     * <code>
     * $query->filterByStatut('fooValue');   // WHERE STATUT = 'fooValue'
     * $query->filterByStatut('%fooValue%'); // WHERE STATUT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $statut The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CronStatQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CronStatPeer::STATUT, $statut, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CronStat $cronStat Object to remove from the list of results
     *
     * @return CronStatQuery The current query, for fluid interface
     */
    public function prune($cronStat = null)
    {
        if ($cronStat) {
            $this->addUsingAlias(CronStatPeer::ID_CRON, $cronStat->getIdCron(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
