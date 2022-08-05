<?php


/**
 * Base class that represents a query for the 't_circuit_validation' table.
 *
 * 
 *
 * @method TCircuitValidationQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method TCircuitValidationQuery orderByIdEntite($order = Criteria::ASC) Order by the ID_ENTITE column
 * @method TCircuitValidationQuery orderByActif($order = Criteria::ASC) Order by the ACTIF column
 *
 * @method TCircuitValidationQuery groupById() Group by the ID column
 * @method TCircuitValidationQuery groupByIdEntite() Group by the ID_ENTITE column
 * @method TCircuitValidationQuery groupByActif() Group by the ACTIF column
 *
 * @method TCircuitValidationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TCircuitValidationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TCircuitValidationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TCircuitValidation findOne(PropelPDO $con = null) Return the first TCircuitValidation matching the query
 * @method TCircuitValidation findOneOrCreate(PropelPDO $con = null) Return the first TCircuitValidation matching the query, or a new TCircuitValidation object populated from the query conditions when no match is found
 *
 * @method TCircuitValidation findOneByIdEntite(int $ID_ENTITE) Return the first TCircuitValidation filtered by the ID_ENTITE column
 * @method TCircuitValidation findOneByActif(string $ACTIF) Return the first TCircuitValidation filtered by the ACTIF column
 *
 * @method array findById(int $ID) Return TCircuitValidation objects filtered by the ID column
 * @method array findByIdEntite(int $ID_ENTITE) Return TCircuitValidation objects filtered by the ID_ENTITE column
 * @method array findByActif(string $ACTIF) Return TCircuitValidation objects filtered by the ACTIF column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseTCircuitValidationQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTCircuitValidationQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'TCircuitValidation', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TCircuitValidationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TCircuitValidationQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TCircuitValidationQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TCircuitValidationQuery) {
            return $criteria;
        }
        $query = new TCircuitValidationQuery();
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
     * @return   TCircuitValidation|TCircuitValidation[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TCircuitValidationPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TCircuitValidationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TCircuitValidation A model object, or null if the key is not found
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
     * @return                 TCircuitValidation A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `ID_ENTITE`, `ACTIF` FROM `t_circuit_validation` WHERE `ID` = :p0';
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
            $obj = new TCircuitValidation();
            $obj->hydrate($row);
            TCircuitValidationPeer::addInstanceToPool($obj, (string) $key);
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
     * @return TCircuitValidation|TCircuitValidation[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TCircuitValidation[]|mixed the list of results, formatted by the current formatter
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
     * @return TCircuitValidationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TCircuitValidationPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TCircuitValidationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TCircuitValidationPeer::ID, $keys, Criteria::IN);
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
     * @return TCircuitValidationQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(TCircuitValidationPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(TCircuitValidationPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TCircuitValidationPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the ID_ENTITE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntite(1234); // WHERE ID_ENTITE = 1234
     * $query->filterByIdEntite(array(12, 34)); // WHERE ID_ENTITE IN (12, 34)
     * $query->filterByIdEntite(array('min' => 12)); // WHERE ID_ENTITE >= 12
     * $query->filterByIdEntite(array('max' => 12)); // WHERE ID_ENTITE <= 12
     * </code>
     *
     * @param     mixed $idEntite The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TCircuitValidationQuery The current query, for fluid interface
     */
    public function filterByIdEntite($idEntite = null, $comparison = null)
    {
        if (is_array($idEntite)) {
            $useMinMax = false;
            if (isset($idEntite['min'])) {
                $this->addUsingAlias(TCircuitValidationPeer::ID_ENTITE, $idEntite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntite['max'])) {
                $this->addUsingAlias(TCircuitValidationPeer::ID_ENTITE, $idEntite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TCircuitValidationPeer::ID_ENTITE, $idEntite, $comparison);
    }

    /**
     * Filter the query on the ACTIF column
     *
     * Example usage:
     * <code>
     * $query->filterByActif('fooValue');   // WHERE ACTIF = 'fooValue'
     * $query->filterByActif('%fooValue%'); // WHERE ACTIF LIKE '%fooValue%'
     * </code>
     *
     * @param     string $actif The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TCircuitValidationQuery The current query, for fluid interface
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

        return $this->addUsingAlias(TCircuitValidationPeer::ACTIF, $actif, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   TCircuitValidation $tCircuitValidation Object to remove from the list of results
     *
     * @return TCircuitValidationQuery The current query, for fluid interface
     */
    public function prune($tCircuitValidation = null)
    {
        if ($tCircuitValidation) {
            $this->addUsingAlias(TCircuitValidationPeer::ID, $tCircuitValidation->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
