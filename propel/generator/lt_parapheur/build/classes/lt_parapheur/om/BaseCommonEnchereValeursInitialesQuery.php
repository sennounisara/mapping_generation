<?php


/**
 * Base class that represents a query for the 'EnchereValeursInitiales' table.
 *
 * 
 *
 * @method CommonEnchereValeursInitialesQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonEnchereValeursInitialesQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonEnchereValeursInitialesQuery orderByIdenchereentreprise($order = Criteria::ASC) Order by the idEnchereEntreprise column
 * @method CommonEnchereValeursInitialesQuery orderByIdencherereference($order = Criteria::ASC) Order by the idEnchereReference column
 * @method CommonEnchereValeursInitialesQuery orderByValeur($order = Criteria::ASC) Order by the valeur column
 *
 * @method CommonEnchereValeursInitialesQuery groupById() Group by the id column
 * @method CommonEnchereValeursInitialesQuery groupByOrganisme() Group by the organisme column
 * @method CommonEnchereValeursInitialesQuery groupByIdenchereentreprise() Group by the idEnchereEntreprise column
 * @method CommonEnchereValeursInitialesQuery groupByIdencherereference() Group by the idEnchereReference column
 * @method CommonEnchereValeursInitialesQuery groupByValeur() Group by the valeur column
 *
 * @method CommonEnchereValeursInitialesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonEnchereValeursInitialesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonEnchereValeursInitialesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonEnchereValeursInitiales findOne(PropelPDO $con = null) Return the first CommonEnchereValeursInitiales matching the query
 * @method CommonEnchereValeursInitiales findOneOrCreate(PropelPDO $con = null) Return the first CommonEnchereValeursInitiales matching the query, or a new CommonEnchereValeursInitiales object populated from the query conditions when no match is found
 *
 * @method CommonEnchereValeursInitiales findOneById(int $id) Return the first CommonEnchereValeursInitiales filtered by the id column
 * @method CommonEnchereValeursInitiales findOneByOrganisme(string $organisme) Return the first CommonEnchereValeursInitiales filtered by the organisme column
 * @method CommonEnchereValeursInitiales findOneByIdenchereentreprise(int $idEnchereEntreprise) Return the first CommonEnchereValeursInitiales filtered by the idEnchereEntreprise column
 * @method CommonEnchereValeursInitiales findOneByIdencherereference(int $idEnchereReference) Return the first CommonEnchereValeursInitiales filtered by the idEnchereReference column
 * @method CommonEnchereValeursInitiales findOneByValeur(double $valeur) Return the first CommonEnchereValeursInitiales filtered by the valeur column
 *
 * @method array findById(int $id) Return CommonEnchereValeursInitiales objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonEnchereValeursInitiales objects filtered by the organisme column
 * @method array findByIdenchereentreprise(int $idEnchereEntreprise) Return CommonEnchereValeursInitiales objects filtered by the idEnchereEntreprise column
 * @method array findByIdencherereference(int $idEnchereReference) Return CommonEnchereValeursInitiales objects filtered by the idEnchereReference column
 * @method array findByValeur(double $valeur) Return CommonEnchereValeursInitiales objects filtered by the valeur column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonEnchereValeursInitialesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonEnchereValeursInitialesQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonEnchereValeursInitiales', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonEnchereValeursInitialesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonEnchereValeursInitialesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonEnchereValeursInitialesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonEnchereValeursInitialesQuery) {
            return $criteria;
        }
        $query = new CommonEnchereValeursInitialesQuery();
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
     * @return   CommonEnchereValeursInitiales|CommonEnchereValeursInitiales[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonEnchereValeursInitialesPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonEnchereValeursInitialesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonEnchereValeursInitiales A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `idEnchereEntreprise`, `idEnchereReference`, `valeur` FROM `EnchereValeursInitiales` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonEnchereValeursInitiales();
            $obj->hydrate($row);
            CommonEnchereValeursInitialesPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonEnchereValeursInitiales|CommonEnchereValeursInitiales[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonEnchereValeursInitiales[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonEnchereValeursInitialesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonEnchereValeursInitialesPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonEnchereValeursInitialesPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonEnchereValeursInitialesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonEnchereValeursInitialesPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonEnchereValeursInitialesPeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonEnchereValeursInitialesQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonEnchereValeursInitialesPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonEnchereValeursInitialesPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnchereValeursInitialesPeer::ID, $id, $comparison);
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
     * @return CommonEnchereValeursInitialesQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonEnchereValeursInitialesPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the idEnchereEntreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByIdenchereentreprise(1234); // WHERE idEnchereEntreprise = 1234
     * $query->filterByIdenchereentreprise(array(12, 34)); // WHERE idEnchereEntreprise IN (12, 34)
     * $query->filterByIdenchereentreprise(array('min' => 12)); // WHERE idEnchereEntreprise >= 12
     * $query->filterByIdenchereentreprise(array('max' => 12)); // WHERE idEnchereEntreprise <= 12
     * </code>
     *
     * @param     mixed $idenchereentreprise The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnchereValeursInitialesQuery The current query, for fluid interface
     */
    public function filterByIdenchereentreprise($idenchereentreprise = null, $comparison = null)
    {
        if (is_array($idenchereentreprise)) {
            $useMinMax = false;
            if (isset($idenchereentreprise['min'])) {
                $this->addUsingAlias(CommonEnchereValeursInitialesPeer::IDENCHEREENTREPRISE, $idenchereentreprise['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idenchereentreprise['max'])) {
                $this->addUsingAlias(CommonEnchereValeursInitialesPeer::IDENCHEREENTREPRISE, $idenchereentreprise['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnchereValeursInitialesPeer::IDENCHEREENTREPRISE, $idenchereentreprise, $comparison);
    }

    /**
     * Filter the query on the idEnchereReference column
     *
     * Example usage:
     * <code>
     * $query->filterByIdencherereference(1234); // WHERE idEnchereReference = 1234
     * $query->filterByIdencherereference(array(12, 34)); // WHERE idEnchereReference IN (12, 34)
     * $query->filterByIdencherereference(array('min' => 12)); // WHERE idEnchereReference >= 12
     * $query->filterByIdencherereference(array('max' => 12)); // WHERE idEnchereReference <= 12
     * </code>
     *
     * @param     mixed $idencherereference The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnchereValeursInitialesQuery The current query, for fluid interface
     */
    public function filterByIdencherereference($idencherereference = null, $comparison = null)
    {
        if (is_array($idencherereference)) {
            $useMinMax = false;
            if (isset($idencherereference['min'])) {
                $this->addUsingAlias(CommonEnchereValeursInitialesPeer::IDENCHEREREFERENCE, $idencherereference['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idencherereference['max'])) {
                $this->addUsingAlias(CommonEnchereValeursInitialesPeer::IDENCHEREREFERENCE, $idencherereference['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnchereValeursInitialesPeer::IDENCHEREREFERENCE, $idencherereference, $comparison);
    }

    /**
     * Filter the query on the valeur column
     *
     * Example usage:
     * <code>
     * $query->filterByValeur(1234); // WHERE valeur = 1234
     * $query->filterByValeur(array(12, 34)); // WHERE valeur IN (12, 34)
     * $query->filterByValeur(array('min' => 12)); // WHERE valeur >= 12
     * $query->filterByValeur(array('max' => 12)); // WHERE valeur <= 12
     * </code>
     *
     * @param     mixed $valeur The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEnchereValeursInitialesQuery The current query, for fluid interface
     */
    public function filterByValeur($valeur = null, $comparison = null)
    {
        if (is_array($valeur)) {
            $useMinMax = false;
            if (isset($valeur['min'])) {
                $this->addUsingAlias(CommonEnchereValeursInitialesPeer::VALEUR, $valeur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($valeur['max'])) {
                $this->addUsingAlias(CommonEnchereValeursInitialesPeer::VALEUR, $valeur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEnchereValeursInitialesPeer::VALEUR, $valeur, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonEnchereValeursInitiales $commonEnchereValeursInitiales Object to remove from the list of results
     *
     * @return CommonEnchereValeursInitialesQuery The current query, for fluid interface
     */
    public function prune($commonEnchereValeursInitiales = null)
    {
        if ($commonEnchereValeursInitiales) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonEnchereValeursInitialesPeer::ID), $commonEnchereValeursInitiales->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonEnchereValeursInitialesPeer::ORGANISME), $commonEnchereValeursInitiales->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
