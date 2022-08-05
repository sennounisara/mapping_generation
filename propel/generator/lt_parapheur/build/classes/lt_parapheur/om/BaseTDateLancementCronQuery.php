<?php


/**
 * Base class that represents a query for the 't_date_lancement_cron' table.
 *
 * 
 *
 * @method TDateLancementCronQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method TDateLancementCronQuery orderByDateMiseJour($order = Criteria::ASC) Order by the DATE_MISE_JOUR column
 * @method TDateLancementCronQuery orderByTypeCron($order = Criteria::ASC) Order by the TYPE_CRON column
 *
 * @method TDateLancementCronQuery groupById() Group by the ID column
 * @method TDateLancementCronQuery groupByDateMiseJour() Group by the DATE_MISE_JOUR column
 * @method TDateLancementCronQuery groupByTypeCron() Group by the TYPE_CRON column
 *
 * @method TDateLancementCronQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TDateLancementCronQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TDateLancementCronQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TDateLancementCron findOne(PropelPDO $con = null) Return the first TDateLancementCron matching the query
 * @method TDateLancementCron findOneOrCreate(PropelPDO $con = null) Return the first TDateLancementCron matching the query, or a new TDateLancementCron object populated from the query conditions when no match is found
 *
 * @method TDateLancementCron findOneByDateMiseJour(string $DATE_MISE_JOUR) Return the first TDateLancementCron filtered by the DATE_MISE_JOUR column
 * @method TDateLancementCron findOneByTypeCron(string $TYPE_CRON) Return the first TDateLancementCron filtered by the TYPE_CRON column
 *
 * @method array findById(int $ID) Return TDateLancementCron objects filtered by the ID column
 * @method array findByDateMiseJour(string $DATE_MISE_JOUR) Return TDateLancementCron objects filtered by the DATE_MISE_JOUR column
 * @method array findByTypeCron(string $TYPE_CRON) Return TDateLancementCron objects filtered by the TYPE_CRON column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseTDateLancementCronQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTDateLancementCronQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'TDateLancementCron', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TDateLancementCronQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TDateLancementCronQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TDateLancementCronQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TDateLancementCronQuery) {
            return $criteria;
        }
        $query = new TDateLancementCronQuery();
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
     * @return   TDateLancementCron|TDateLancementCron[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TDateLancementCronPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TDateLancementCronPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TDateLancementCron A model object, or null if the key is not found
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
     * @return                 TDateLancementCron A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `DATE_MISE_JOUR`, `TYPE_CRON` FROM `t_date_lancement_cron` WHERE `ID` = :p0';
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
            $obj = new TDateLancementCron();
            $obj->hydrate($row);
            TDateLancementCronPeer::addInstanceToPool($obj, (string) $key);
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
     * @return TDateLancementCron|TDateLancementCron[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TDateLancementCron[]|mixed the list of results, formatted by the current formatter
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
     * @return TDateLancementCronQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TDateLancementCronPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TDateLancementCronQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TDateLancementCronPeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE ID = 1234
     * $query->filterById(array(12, 34)); // WHERE ID IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE ID >= 12
     * $query->filterById(array('max' => 12)); // WHERE ID <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDateLancementCronQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(TDateLancementCronPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(TDateLancementCronPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TDateLancementCronPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the DATE_MISE_JOUR column
     *
     * Example usage:
     * <code>
     * $query->filterByDateMiseJour('fooValue');   // WHERE DATE_MISE_JOUR = 'fooValue'
     * $query->filterByDateMiseJour('%fooValue%'); // WHERE DATE_MISE_JOUR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateMiseJour The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDateLancementCronQuery The current query, for fluid interface
     */
    public function filterByDateMiseJour($dateMiseJour = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateMiseJour)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateMiseJour)) {
                $dateMiseJour = str_replace('*', '%', $dateMiseJour);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TDateLancementCronPeer::DATE_MISE_JOUR, $dateMiseJour, $comparison);
    }

    /**
     * Filter the query on the TYPE_CRON column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeCron('fooValue');   // WHERE TYPE_CRON = 'fooValue'
     * $query->filterByTypeCron('%fooValue%'); // WHERE TYPE_CRON LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeCron The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDateLancementCronQuery The current query, for fluid interface
     */
    public function filterByTypeCron($typeCron = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeCron)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeCron)) {
                $typeCron = str_replace('*', '%', $typeCron);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TDateLancementCronPeer::TYPE_CRON, $typeCron, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   TDateLancementCron $tDateLancementCron Object to remove from the list of results
     *
     * @return TDateLancementCronQuery The current query, for fluid interface
     */
    public function prune($tDateLancementCron = null)
    {
        if ($tDateLancementCron) {
            $this->addUsingAlias(TDateLancementCronPeer::ID, $tDateLancementCron->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
