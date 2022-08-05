<?php


/**
 * Base class that represents a query for the 'absence_seance' table.
 *
 * 
 *
 * @method CommonAbsenceSeanceQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonAbsenceSeanceQuery orderByIdSeance($order = Criteria::ASC) Order by the id_seance column
 * @method CommonAbsenceSeanceQuery orderByIdMembreCommission($order = Criteria::ASC) Order by the id_membre_commission column
 * @method CommonAbsenceSeanceQuery orderByIdMembreRemplacant($order = Criteria::ASC) Order by the id_membre_remplacant column
 *
 * @method CommonAbsenceSeanceQuery groupById() Group by the id column
 * @method CommonAbsenceSeanceQuery groupByIdSeance() Group by the id_seance column
 * @method CommonAbsenceSeanceQuery groupByIdMembreCommission() Group by the id_membre_commission column
 * @method CommonAbsenceSeanceQuery groupByIdMembreRemplacant() Group by the id_membre_remplacant column
 *
 * @method CommonAbsenceSeanceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonAbsenceSeanceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonAbsenceSeanceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonAbsenceSeance findOne(PropelPDO $con = null) Return the first CommonAbsenceSeance matching the query
 * @method CommonAbsenceSeance findOneOrCreate(PropelPDO $con = null) Return the first CommonAbsenceSeance matching the query, or a new CommonAbsenceSeance object populated from the query conditions when no match is found
 *
 * @method CommonAbsenceSeance findOneByIdSeance(int $id_seance) Return the first CommonAbsenceSeance filtered by the id_seance column
 * @method CommonAbsenceSeance findOneByIdMembreCommission(int $id_membre_commission) Return the first CommonAbsenceSeance filtered by the id_membre_commission column
 * @method CommonAbsenceSeance findOneByIdMembreRemplacant(int $id_membre_remplacant) Return the first CommonAbsenceSeance filtered by the id_membre_remplacant column
 *
 * @method array findById(int $id) Return CommonAbsenceSeance objects filtered by the id column
 * @method array findByIdSeance(int $id_seance) Return CommonAbsenceSeance objects filtered by the id_seance column
 * @method array findByIdMembreCommission(int $id_membre_commission) Return CommonAbsenceSeance objects filtered by the id_membre_commission column
 * @method array findByIdMembreRemplacant(int $id_membre_remplacant) Return CommonAbsenceSeance objects filtered by the id_membre_remplacant column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonAbsenceSeanceQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonAbsenceSeanceQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonAbsenceSeance', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonAbsenceSeanceQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonAbsenceSeanceQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonAbsenceSeanceQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonAbsenceSeanceQuery) {
            return $criteria;
        }
        $query = new CommonAbsenceSeanceQuery();
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
     * @return   CommonAbsenceSeance|CommonAbsenceSeance[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonAbsenceSeancePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonAbsenceSeancePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonAbsenceSeance A model object, or null if the key is not found
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
     * @return                 CommonAbsenceSeance A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_seance`, `id_membre_commission`, `id_membre_remplacant` FROM `absence_seance` WHERE `id` = :p0';
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
            $obj = new CommonAbsenceSeance();
            $obj->hydrate($row);
            CommonAbsenceSeancePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonAbsenceSeance|CommonAbsenceSeance[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonAbsenceSeance[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonAbsenceSeanceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonAbsenceSeancePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonAbsenceSeanceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonAbsenceSeancePeer::ID, $keys, Criteria::IN);
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
     * @return CommonAbsenceSeanceQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonAbsenceSeancePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonAbsenceSeancePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAbsenceSeancePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_seance column
     *
     * Example usage:
     * <code>
     * $query->filterByIdSeance(1234); // WHERE id_seance = 1234
     * $query->filterByIdSeance(array(12, 34)); // WHERE id_seance IN (12, 34)
     * $query->filterByIdSeance(array('min' => 12)); // WHERE id_seance >= 12
     * $query->filterByIdSeance(array('max' => 12)); // WHERE id_seance <= 12
     * </code>
     *
     * @param     mixed $idSeance The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAbsenceSeanceQuery The current query, for fluid interface
     */
    public function filterByIdSeance($idSeance = null, $comparison = null)
    {
        if (is_array($idSeance)) {
            $useMinMax = false;
            if (isset($idSeance['min'])) {
                $this->addUsingAlias(CommonAbsenceSeancePeer::ID_SEANCE, $idSeance['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idSeance['max'])) {
                $this->addUsingAlias(CommonAbsenceSeancePeer::ID_SEANCE, $idSeance['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAbsenceSeancePeer::ID_SEANCE, $idSeance, $comparison);
    }

    /**
     * Filter the query on the id_membre_commission column
     *
     * Example usage:
     * <code>
     * $query->filterByIdMembreCommission(1234); // WHERE id_membre_commission = 1234
     * $query->filterByIdMembreCommission(array(12, 34)); // WHERE id_membre_commission IN (12, 34)
     * $query->filterByIdMembreCommission(array('min' => 12)); // WHERE id_membre_commission >= 12
     * $query->filterByIdMembreCommission(array('max' => 12)); // WHERE id_membre_commission <= 12
     * </code>
     *
     * @param     mixed $idMembreCommission The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAbsenceSeanceQuery The current query, for fluid interface
     */
    public function filterByIdMembreCommission($idMembreCommission = null, $comparison = null)
    {
        if (is_array($idMembreCommission)) {
            $useMinMax = false;
            if (isset($idMembreCommission['min'])) {
                $this->addUsingAlias(CommonAbsenceSeancePeer::ID_MEMBRE_COMMISSION, $idMembreCommission['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idMembreCommission['max'])) {
                $this->addUsingAlias(CommonAbsenceSeancePeer::ID_MEMBRE_COMMISSION, $idMembreCommission['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAbsenceSeancePeer::ID_MEMBRE_COMMISSION, $idMembreCommission, $comparison);
    }

    /**
     * Filter the query on the id_membre_remplacant column
     *
     * Example usage:
     * <code>
     * $query->filterByIdMembreRemplacant(1234); // WHERE id_membre_remplacant = 1234
     * $query->filterByIdMembreRemplacant(array(12, 34)); // WHERE id_membre_remplacant IN (12, 34)
     * $query->filterByIdMembreRemplacant(array('min' => 12)); // WHERE id_membre_remplacant >= 12
     * $query->filterByIdMembreRemplacant(array('max' => 12)); // WHERE id_membre_remplacant <= 12
     * </code>
     *
     * @param     mixed $idMembreRemplacant The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAbsenceSeanceQuery The current query, for fluid interface
     */
    public function filterByIdMembreRemplacant($idMembreRemplacant = null, $comparison = null)
    {
        if (is_array($idMembreRemplacant)) {
            $useMinMax = false;
            if (isset($idMembreRemplacant['min'])) {
                $this->addUsingAlias(CommonAbsenceSeancePeer::ID_MEMBRE_REMPLACANT, $idMembreRemplacant['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idMembreRemplacant['max'])) {
                $this->addUsingAlias(CommonAbsenceSeancePeer::ID_MEMBRE_REMPLACANT, $idMembreRemplacant['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAbsenceSeancePeer::ID_MEMBRE_REMPLACANT, $idMembreRemplacant, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonAbsenceSeance $commonAbsenceSeance Object to remove from the list of results
     *
     * @return CommonAbsenceSeanceQuery The current query, for fluid interface
     */
    public function prune($commonAbsenceSeance = null)
    {
        if ($commonAbsenceSeance) {
            $this->addUsingAlias(CommonAbsenceSeancePeer::ID, $commonAbsenceSeance->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
