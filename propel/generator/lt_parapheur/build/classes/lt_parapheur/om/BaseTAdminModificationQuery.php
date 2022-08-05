<?php


/**
 * Base class that represents a query for the 't_admin_modification' table.
 *
 * 
 *
 * @method TAdminModificationQuery orderByIdModification($order = Criteria::ASC) Order by the ID_MODIFICATION column
 * @method TAdminModificationQuery orderByIdAgent($order = Criteria::ASC) Order by the ID_AGENT column
 * @method TAdminModificationQuery orderByDateModification($order = Criteria::ASC) Order by the DATE_MODIFICATION column
 * @method TAdminModificationQuery orderByDescription($order = Criteria::ASC) Order by the DESCRIPTION column
 *
 * @method TAdminModificationQuery groupByIdModification() Group by the ID_MODIFICATION column
 * @method TAdminModificationQuery groupByIdAgent() Group by the ID_AGENT column
 * @method TAdminModificationQuery groupByDateModification() Group by the DATE_MODIFICATION column
 * @method TAdminModificationQuery groupByDescription() Group by the DESCRIPTION column
 *
 * @method TAdminModificationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TAdminModificationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TAdminModificationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TAdminModification findOne(PropelPDO $con = null) Return the first TAdminModification matching the query
 * @method TAdminModification findOneOrCreate(PropelPDO $con = null) Return the first TAdminModification matching the query, or a new TAdminModification object populated from the query conditions when no match is found
 *
 * @method TAdminModification findOneByIdAgent(int $ID_AGENT) Return the first TAdminModification filtered by the ID_AGENT column
 * @method TAdminModification findOneByDateModification(string $DATE_MODIFICATION) Return the first TAdminModification filtered by the DATE_MODIFICATION column
 * @method TAdminModification findOneByDescription(string $DESCRIPTION) Return the first TAdminModification filtered by the DESCRIPTION column
 *
 * @method array findByIdModification(int $ID_MODIFICATION) Return TAdminModification objects filtered by the ID_MODIFICATION column
 * @method array findByIdAgent(int $ID_AGENT) Return TAdminModification objects filtered by the ID_AGENT column
 * @method array findByDateModification(string $DATE_MODIFICATION) Return TAdminModification objects filtered by the DATE_MODIFICATION column
 * @method array findByDescription(string $DESCRIPTION) Return TAdminModification objects filtered by the DESCRIPTION column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseTAdminModificationQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTAdminModificationQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'TAdminModification', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TAdminModificationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TAdminModificationQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TAdminModificationQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TAdminModificationQuery) {
            return $criteria;
        }
        $query = new TAdminModificationQuery();
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
     * @return   TAdminModification|TAdminModification[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TAdminModificationPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TAdminModificationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TAdminModification A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdModification($key, $con = null)
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
     * @return                 TAdminModification A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_MODIFICATION`, `ID_AGENT`, `DATE_MODIFICATION`, `DESCRIPTION` FROM `t_admin_modification` WHERE `ID_MODIFICATION` = :p0';
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
            $obj = new TAdminModification();
            $obj->hydrate($row);
            TAdminModificationPeer::addInstanceToPool($obj, (string) $key);
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
     * @return TAdminModification|TAdminModification[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TAdminModification[]|mixed the list of results, formatted by the current formatter
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
     * @return TAdminModificationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TAdminModificationPeer::ID_MODIFICATION, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TAdminModificationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TAdminModificationPeer::ID_MODIFICATION, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID_MODIFICATION column
     *
     * Example usage:
     * <code>
     * $query->filterByIdModification(1234); // WHERE ID_MODIFICATION = 1234
     * $query->filterByIdModification(array(12, 34)); // WHERE ID_MODIFICATION IN (12, 34)
     * $query->filterByIdModification(array('min' => 12)); // WHERE ID_MODIFICATION >= 12
     * $query->filterByIdModification(array('max' => 12)); // WHERE ID_MODIFICATION <= 12
     * </code>
     *
     * @param     mixed $idModification The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TAdminModificationQuery The current query, for fluid interface
     */
    public function filterByIdModification($idModification = null, $comparison = null)
    {
        if (is_array($idModification)) {
            $useMinMax = false;
            if (isset($idModification['min'])) {
                $this->addUsingAlias(TAdminModificationPeer::ID_MODIFICATION, $idModification['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idModification['max'])) {
                $this->addUsingAlias(TAdminModificationPeer::ID_MODIFICATION, $idModification['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TAdminModificationPeer::ID_MODIFICATION, $idModification, $comparison);
    }

    /**
     * Filter the query on the ID_AGENT column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgent(1234); // WHERE ID_AGENT = 1234
     * $query->filterByIdAgent(array(12, 34)); // WHERE ID_AGENT IN (12, 34)
     * $query->filterByIdAgent(array('min' => 12)); // WHERE ID_AGENT >= 12
     * $query->filterByIdAgent(array('max' => 12)); // WHERE ID_AGENT <= 12
     * </code>
     *
     * @param     mixed $idAgent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TAdminModificationQuery The current query, for fluid interface
     */
    public function filterByIdAgent($idAgent = null, $comparison = null)
    {
        if (is_array($idAgent)) {
            $useMinMax = false;
            if (isset($idAgent['min'])) {
                $this->addUsingAlias(TAdminModificationPeer::ID_AGENT, $idAgent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgent['max'])) {
                $this->addUsingAlias(TAdminModificationPeer::ID_AGENT, $idAgent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TAdminModificationPeer::ID_AGENT, $idAgent, $comparison);
    }

    /**
     * Filter the query on the DATE_MODIFICATION column
     *
     * Example usage:
     * <code>
     * $query->filterByDateModification('2011-03-14'); // WHERE DATE_MODIFICATION = '2011-03-14'
     * $query->filterByDateModification('now'); // WHERE DATE_MODIFICATION = '2011-03-14'
     * $query->filterByDateModification(array('max' => 'yesterday')); // WHERE DATE_MODIFICATION > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateModification The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TAdminModificationQuery The current query, for fluid interface
     */
    public function filterByDateModification($dateModification = null, $comparison = null)
    {
        if (is_array($dateModification)) {
            $useMinMax = false;
            if (isset($dateModification['min'])) {
                $this->addUsingAlias(TAdminModificationPeer::DATE_MODIFICATION, $dateModification['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateModification['max'])) {
                $this->addUsingAlias(TAdminModificationPeer::DATE_MODIFICATION, $dateModification['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TAdminModificationPeer::DATE_MODIFICATION, $dateModification, $comparison);
    }

    /**
     * Filter the query on the DESCRIPTION column
     *
     * Example usage:
     * <code>
     * $query->filterByDescription('fooValue');   // WHERE DESCRIPTION = 'fooValue'
     * $query->filterByDescription('%fooValue%'); // WHERE DESCRIPTION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $description The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TAdminModificationQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $description)) {
                $description = str_replace('*', '%', $description);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TAdminModificationPeer::DESCRIPTION, $description, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   TAdminModification $tAdminModification Object to remove from the list of results
     *
     * @return TAdminModificationQuery The current query, for fluid interface
     */
    public function prune($tAdminModification = null)
    {
        if ($tAdminModification) {
            $this->addUsingAlias(TAdminModificationPeer::ID_MODIFICATION, $tAdminModification->getIdModification(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
