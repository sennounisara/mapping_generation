<?php


/**
 * Base class that represents a query for the 't_entite_signataire' table.
 *
 * 
 *
 * @method TEntiteSignataireQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method TEntiteSignataireQuery orderByIdAgent($order = Criteria::ASC) Order by the ID_AGENT column
 * @method TEntiteSignataireQuery orderByIdEntite($order = Criteria::ASC) Order by the ID_ENTITE column
 * @method TEntiteSignataireQuery orderByDescendance($order = Criteria::ASC) Order by the DESCENDANCE column
 *
 * @method TEntiteSignataireQuery groupById() Group by the ID column
 * @method TEntiteSignataireQuery groupByIdAgent() Group by the ID_AGENT column
 * @method TEntiteSignataireQuery groupByIdEntite() Group by the ID_ENTITE column
 * @method TEntiteSignataireQuery groupByDescendance() Group by the DESCENDANCE column
 *
 * @method TEntiteSignataireQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TEntiteSignataireQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TEntiteSignataireQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TEntiteSignataire findOne(PropelPDO $con = null) Return the first TEntiteSignataire matching the query
 * @method TEntiteSignataire findOneOrCreate(PropelPDO $con = null) Return the first TEntiteSignataire matching the query, or a new TEntiteSignataire object populated from the query conditions when no match is found
 *
 * @method TEntiteSignataire findOneByIdAgent(int $ID_AGENT) Return the first TEntiteSignataire filtered by the ID_AGENT column
 * @method TEntiteSignataire findOneByIdEntite(int $ID_ENTITE) Return the first TEntiteSignataire filtered by the ID_ENTITE column
 * @method TEntiteSignataire findOneByDescendance(string $DESCENDANCE) Return the first TEntiteSignataire filtered by the DESCENDANCE column
 *
 * @method array findById(int $ID) Return TEntiteSignataire objects filtered by the ID column
 * @method array findByIdAgent(int $ID_AGENT) Return TEntiteSignataire objects filtered by the ID_AGENT column
 * @method array findByIdEntite(int $ID_ENTITE) Return TEntiteSignataire objects filtered by the ID_ENTITE column
 * @method array findByDescendance(string $DESCENDANCE) Return TEntiteSignataire objects filtered by the DESCENDANCE column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseTEntiteSignataireQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTEntiteSignataireQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'TEntiteSignataire', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TEntiteSignataireQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TEntiteSignataireQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TEntiteSignataireQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TEntiteSignataireQuery) {
            return $criteria;
        }
        $query = new TEntiteSignataireQuery();
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
     * @return   TEntiteSignataire|TEntiteSignataire[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TEntiteSignatairePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TEntiteSignatairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TEntiteSignataire A model object, or null if the key is not found
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
     * @return                 TEntiteSignataire A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `ID_AGENT`, `ID_ENTITE`, `DESCENDANCE` FROM `t_entite_signataire` WHERE `ID` = :p0';
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
            $obj = new TEntiteSignataire();
            $obj->hydrate($row);
            TEntiteSignatairePeer::addInstanceToPool($obj, (string) $key);
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
     * @return TEntiteSignataire|TEntiteSignataire[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TEntiteSignataire[]|mixed the list of results, formatted by the current formatter
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
     * @return TEntiteSignataireQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TEntiteSignatairePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TEntiteSignataireQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TEntiteSignatairePeer::ID, $keys, Criteria::IN);
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
     * @return TEntiteSignataireQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(TEntiteSignatairePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(TEntiteSignatairePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TEntiteSignatairePeer::ID, $id, $comparison);
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
     * @return TEntiteSignataireQuery The current query, for fluid interface
     */
    public function filterByIdAgent($idAgent = null, $comparison = null)
    {
        if (is_array($idAgent)) {
            $useMinMax = false;
            if (isset($idAgent['min'])) {
                $this->addUsingAlias(TEntiteSignatairePeer::ID_AGENT, $idAgent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgent['max'])) {
                $this->addUsingAlias(TEntiteSignatairePeer::ID_AGENT, $idAgent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TEntiteSignatairePeer::ID_AGENT, $idAgent, $comparison);
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
     * @return TEntiteSignataireQuery The current query, for fluid interface
     */
    public function filterByIdEntite($idEntite = null, $comparison = null)
    {
        if (is_array($idEntite)) {
            $useMinMax = false;
            if (isset($idEntite['min'])) {
                $this->addUsingAlias(TEntiteSignatairePeer::ID_ENTITE, $idEntite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntite['max'])) {
                $this->addUsingAlias(TEntiteSignatairePeer::ID_ENTITE, $idEntite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TEntiteSignatairePeer::ID_ENTITE, $idEntite, $comparison);
    }

    /**
     * Filter the query on the DESCENDANCE column
     *
     * Example usage:
     * <code>
     * $query->filterByDescendance('fooValue');   // WHERE DESCENDANCE = 'fooValue'
     * $query->filterByDescendance('%fooValue%'); // WHERE DESCENDANCE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descendance The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TEntiteSignataireQuery The current query, for fluid interface
     */
    public function filterByDescendance($descendance = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descendance)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descendance)) {
                $descendance = str_replace('*', '%', $descendance);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TEntiteSignatairePeer::DESCENDANCE, $descendance, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   TEntiteSignataire $tEntiteSignataire Object to remove from the list of results
     *
     * @return TEntiteSignataireQuery The current query, for fluid interface
     */
    public function prune($tEntiteSignataire = null)
    {
        if ($tEntiteSignataire) {
            $this->addUsingAlias(TEntiteSignatairePeer::ID, $tEntiteSignataire->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
