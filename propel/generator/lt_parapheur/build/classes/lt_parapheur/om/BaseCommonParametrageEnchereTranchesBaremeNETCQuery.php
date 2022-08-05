<?php


/**
 * Base class that represents a query for the 'Parametrage_Enchere_Tranches_Bareme_NETC' table.
 *
 * 
 *
 * @method CommonParametrageEnchereTranchesBaremeNETCQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonParametrageEnchereTranchesBaremeNETCQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonParametrageEnchereTranchesBaremeNETCQuery orderByIdenchere($order = Criteria::ASC) Order by the idEnchere column
 * @method CommonParametrageEnchereTranchesBaremeNETCQuery orderByBorneinf($order = Criteria::ASC) Order by the borneInf column
 * @method CommonParametrageEnchereTranchesBaremeNETCQuery orderByBornesup($order = Criteria::ASC) Order by the borneSup column
 * @method CommonParametrageEnchereTranchesBaremeNETCQuery orderByNote($order = Criteria::ASC) Order by the note column
 *
 * @method CommonParametrageEnchereTranchesBaremeNETCQuery groupById() Group by the id column
 * @method CommonParametrageEnchereTranchesBaremeNETCQuery groupByOrganisme() Group by the organisme column
 * @method CommonParametrageEnchereTranchesBaremeNETCQuery groupByIdenchere() Group by the idEnchere column
 * @method CommonParametrageEnchereTranchesBaremeNETCQuery groupByBorneinf() Group by the borneInf column
 * @method CommonParametrageEnchereTranchesBaremeNETCQuery groupByBornesup() Group by the borneSup column
 * @method CommonParametrageEnchereTranchesBaremeNETCQuery groupByNote() Group by the note column
 *
 * @method CommonParametrageEnchereTranchesBaremeNETCQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonParametrageEnchereTranchesBaremeNETCQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonParametrageEnchereTranchesBaremeNETCQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonParametrageEnchereTranchesBaremeNETC findOne(PropelPDO $con = null) Return the first CommonParametrageEnchereTranchesBaremeNETC matching the query
 * @method CommonParametrageEnchereTranchesBaremeNETC findOneOrCreate(PropelPDO $con = null) Return the first CommonParametrageEnchereTranchesBaremeNETC matching the query, or a new CommonParametrageEnchereTranchesBaremeNETC object populated from the query conditions when no match is found
 *
 * @method CommonParametrageEnchereTranchesBaremeNETC findOneById(int $id) Return the first CommonParametrageEnchereTranchesBaremeNETC filtered by the id column
 * @method CommonParametrageEnchereTranchesBaremeNETC findOneByOrganisme(string $organisme) Return the first CommonParametrageEnchereTranchesBaremeNETC filtered by the organisme column
 * @method CommonParametrageEnchereTranchesBaremeNETC findOneByIdenchere(int $idEnchere) Return the first CommonParametrageEnchereTranchesBaremeNETC filtered by the idEnchere column
 * @method CommonParametrageEnchereTranchesBaremeNETC findOneByBorneinf(double $borneInf) Return the first CommonParametrageEnchereTranchesBaremeNETC filtered by the borneInf column
 * @method CommonParametrageEnchereTranchesBaremeNETC findOneByBornesup(double $borneSup) Return the first CommonParametrageEnchereTranchesBaremeNETC filtered by the borneSup column
 * @method CommonParametrageEnchereTranchesBaremeNETC findOneByNote(double $note) Return the first CommonParametrageEnchereTranchesBaremeNETC filtered by the note column
 *
 * @method array findById(int $id) Return CommonParametrageEnchereTranchesBaremeNETC objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonParametrageEnchereTranchesBaremeNETC objects filtered by the organisme column
 * @method array findByIdenchere(int $idEnchere) Return CommonParametrageEnchereTranchesBaremeNETC objects filtered by the idEnchere column
 * @method array findByBorneinf(double $borneInf) Return CommonParametrageEnchereTranchesBaremeNETC objects filtered by the borneInf column
 * @method array findByBornesup(double $borneSup) Return CommonParametrageEnchereTranchesBaremeNETC objects filtered by the borneSup column
 * @method array findByNote(double $note) Return CommonParametrageEnchereTranchesBaremeNETC objects filtered by the note column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonParametrageEnchereTranchesBaremeNETCQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonParametrageEnchereTranchesBaremeNETCQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonParametrageEnchereTranchesBaremeNETC', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonParametrageEnchereTranchesBaremeNETCQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonParametrageEnchereTranchesBaremeNETCQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonParametrageEnchereTranchesBaremeNETCQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonParametrageEnchereTranchesBaremeNETCQuery) {
            return $criteria;
        }
        $query = new CommonParametrageEnchereTranchesBaremeNETCQuery();
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
     * @return   CommonParametrageEnchereTranchesBaremeNETC|CommonParametrageEnchereTranchesBaremeNETC[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonParametrageEnchereTranchesBaremeNETCPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonParametrageEnchereTranchesBaremeNETCPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonParametrageEnchereTranchesBaremeNETC A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `idEnchere`, `borneInf`, `borneSup`, `note` FROM `Parametrage_Enchere_Tranches_Bareme_NETC` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonParametrageEnchereTranchesBaremeNETC();
            $obj->hydrate($row);
            CommonParametrageEnchereTranchesBaremeNETCPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonParametrageEnchereTranchesBaremeNETC|CommonParametrageEnchereTranchesBaremeNETC[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonParametrageEnchereTranchesBaremeNETC[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonParametrageEnchereTranchesBaremeNETCQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonParametrageEnchereTranchesBaremeNETCPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonParametrageEnchereTranchesBaremeNETCPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonParametrageEnchereTranchesBaremeNETCQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonParametrageEnchereTranchesBaremeNETCPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonParametrageEnchereTranchesBaremeNETCPeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonParametrageEnchereTranchesBaremeNETCQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonParametrageEnchereTranchesBaremeNETCPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonParametrageEnchereTranchesBaremeNETCPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonParametrageEnchereTranchesBaremeNETCPeer::ID, $id, $comparison);
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
     * @return CommonParametrageEnchereTranchesBaremeNETCQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonParametrageEnchereTranchesBaremeNETCPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the idEnchere column
     *
     * Example usage:
     * <code>
     * $query->filterByIdenchere(1234); // WHERE idEnchere = 1234
     * $query->filterByIdenchere(array(12, 34)); // WHERE idEnchere IN (12, 34)
     * $query->filterByIdenchere(array('min' => 12)); // WHERE idEnchere >= 12
     * $query->filterByIdenchere(array('max' => 12)); // WHERE idEnchere <= 12
     * </code>
     *
     * @param     mixed $idenchere The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonParametrageEnchereTranchesBaremeNETCQuery The current query, for fluid interface
     */
    public function filterByIdenchere($idenchere = null, $comparison = null)
    {
        if (is_array($idenchere)) {
            $useMinMax = false;
            if (isset($idenchere['min'])) {
                $this->addUsingAlias(CommonParametrageEnchereTranchesBaremeNETCPeer::IDENCHERE, $idenchere['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idenchere['max'])) {
                $this->addUsingAlias(CommonParametrageEnchereTranchesBaremeNETCPeer::IDENCHERE, $idenchere['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonParametrageEnchereTranchesBaremeNETCPeer::IDENCHERE, $idenchere, $comparison);
    }

    /**
     * Filter the query on the borneInf column
     *
     * Example usage:
     * <code>
     * $query->filterByBorneinf(1234); // WHERE borneInf = 1234
     * $query->filterByBorneinf(array(12, 34)); // WHERE borneInf IN (12, 34)
     * $query->filterByBorneinf(array('min' => 12)); // WHERE borneInf >= 12
     * $query->filterByBorneinf(array('max' => 12)); // WHERE borneInf <= 12
     * </code>
     *
     * @param     mixed $borneinf The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonParametrageEnchereTranchesBaremeNETCQuery The current query, for fluid interface
     */
    public function filterByBorneinf($borneinf = null, $comparison = null)
    {
        if (is_array($borneinf)) {
            $useMinMax = false;
            if (isset($borneinf['min'])) {
                $this->addUsingAlias(CommonParametrageEnchereTranchesBaremeNETCPeer::BORNEINF, $borneinf['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($borneinf['max'])) {
                $this->addUsingAlias(CommonParametrageEnchereTranchesBaremeNETCPeer::BORNEINF, $borneinf['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonParametrageEnchereTranchesBaremeNETCPeer::BORNEINF, $borneinf, $comparison);
    }

    /**
     * Filter the query on the borneSup column
     *
     * Example usage:
     * <code>
     * $query->filterByBornesup(1234); // WHERE borneSup = 1234
     * $query->filterByBornesup(array(12, 34)); // WHERE borneSup IN (12, 34)
     * $query->filterByBornesup(array('min' => 12)); // WHERE borneSup >= 12
     * $query->filterByBornesup(array('max' => 12)); // WHERE borneSup <= 12
     * </code>
     *
     * @param     mixed $bornesup The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonParametrageEnchereTranchesBaremeNETCQuery The current query, for fluid interface
     */
    public function filterByBornesup($bornesup = null, $comparison = null)
    {
        if (is_array($bornesup)) {
            $useMinMax = false;
            if (isset($bornesup['min'])) {
                $this->addUsingAlias(CommonParametrageEnchereTranchesBaremeNETCPeer::BORNESUP, $bornesup['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bornesup['max'])) {
                $this->addUsingAlias(CommonParametrageEnchereTranchesBaremeNETCPeer::BORNESUP, $bornesup['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonParametrageEnchereTranchesBaremeNETCPeer::BORNESUP, $bornesup, $comparison);
    }

    /**
     * Filter the query on the note column
     *
     * Example usage:
     * <code>
     * $query->filterByNote(1234); // WHERE note = 1234
     * $query->filterByNote(array(12, 34)); // WHERE note IN (12, 34)
     * $query->filterByNote(array('min' => 12)); // WHERE note >= 12
     * $query->filterByNote(array('max' => 12)); // WHERE note <= 12
     * </code>
     *
     * @param     mixed $note The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonParametrageEnchereTranchesBaremeNETCQuery The current query, for fluid interface
     */
    public function filterByNote($note = null, $comparison = null)
    {
        if (is_array($note)) {
            $useMinMax = false;
            if (isset($note['min'])) {
                $this->addUsingAlias(CommonParametrageEnchereTranchesBaremeNETCPeer::NOTE, $note['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($note['max'])) {
                $this->addUsingAlias(CommonParametrageEnchereTranchesBaremeNETCPeer::NOTE, $note['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonParametrageEnchereTranchesBaremeNETCPeer::NOTE, $note, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonParametrageEnchereTranchesBaremeNETC $commonParametrageEnchereTranchesBaremeNETC Object to remove from the list of results
     *
     * @return CommonParametrageEnchereTranchesBaremeNETCQuery The current query, for fluid interface
     */
    public function prune($commonParametrageEnchereTranchesBaremeNETC = null)
    {
        if ($commonParametrageEnchereTranchesBaremeNETC) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonParametrageEnchereTranchesBaremeNETCPeer::ID), $commonParametrageEnchereTranchesBaremeNETC->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonParametrageEnchereTranchesBaremeNETCPeer::ORGANISME), $commonParametrageEnchereTranchesBaremeNETC->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
