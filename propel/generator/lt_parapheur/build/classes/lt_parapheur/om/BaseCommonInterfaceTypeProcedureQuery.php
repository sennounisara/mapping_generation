<?php


/**
 * Base class that represents a query for the 'InterfaceTypeProcedure' table.
 *
 * 
 *
 * @method CommonInterfaceTypeProcedureQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonInterfaceTypeProcedureQuery orderByTypeProcedureSis($order = Criteria::ASC) Order by the type_procedure_sis column
 * @method CommonInterfaceTypeProcedureQuery orderByTypeProcedureMarco($order = Criteria::ASC) Order by the type_procedure_marco column
 * @method CommonInterfaceTypeProcedureQuery orderByTypeProcedure($order = Criteria::ASC) Order by the type_procedure column
 *
 * @method CommonInterfaceTypeProcedureQuery groupById() Group by the id column
 * @method CommonInterfaceTypeProcedureQuery groupByTypeProcedureSis() Group by the type_procedure_sis column
 * @method CommonInterfaceTypeProcedureQuery groupByTypeProcedureMarco() Group by the type_procedure_marco column
 * @method CommonInterfaceTypeProcedureQuery groupByTypeProcedure() Group by the type_procedure column
 *
 * @method CommonInterfaceTypeProcedureQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonInterfaceTypeProcedureQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonInterfaceTypeProcedureQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonInterfaceTypeProcedure findOne(PropelPDO $con = null) Return the first CommonInterfaceTypeProcedure matching the query
 * @method CommonInterfaceTypeProcedure findOneOrCreate(PropelPDO $con = null) Return the first CommonInterfaceTypeProcedure matching the query, or a new CommonInterfaceTypeProcedure object populated from the query conditions when no match is found
 *
 * @method CommonInterfaceTypeProcedure findOneByTypeProcedureSis(string $type_procedure_sis) Return the first CommonInterfaceTypeProcedure filtered by the type_procedure_sis column
 * @method CommonInterfaceTypeProcedure findOneByTypeProcedureMarco(string $type_procedure_marco) Return the first CommonInterfaceTypeProcedure filtered by the type_procedure_marco column
 * @method CommonInterfaceTypeProcedure findOneByTypeProcedure(string $type_procedure) Return the first CommonInterfaceTypeProcedure filtered by the type_procedure column
 *
 * @method array findById(int $id) Return CommonInterfaceTypeProcedure objects filtered by the id column
 * @method array findByTypeProcedureSis(string $type_procedure_sis) Return CommonInterfaceTypeProcedure objects filtered by the type_procedure_sis column
 * @method array findByTypeProcedureMarco(string $type_procedure_marco) Return CommonInterfaceTypeProcedure objects filtered by the type_procedure_marco column
 * @method array findByTypeProcedure(string $type_procedure) Return CommonInterfaceTypeProcedure objects filtered by the type_procedure column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonInterfaceTypeProcedureQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonInterfaceTypeProcedureQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonInterfaceTypeProcedure', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonInterfaceTypeProcedureQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonInterfaceTypeProcedureQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonInterfaceTypeProcedureQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonInterfaceTypeProcedureQuery) {
            return $criteria;
        }
        $query = new CommonInterfaceTypeProcedureQuery();
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
     * @return   CommonInterfaceTypeProcedure|CommonInterfaceTypeProcedure[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonInterfaceTypeProcedurePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonInterfaceTypeProcedurePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonInterfaceTypeProcedure A model object, or null if the key is not found
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
     * @return                 CommonInterfaceTypeProcedure A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `type_procedure_sis`, `type_procedure_marco`, `type_procedure` FROM `InterfaceTypeProcedure` WHERE `id` = :p0';
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
            $obj = new CommonInterfaceTypeProcedure();
            $obj->hydrate($row);
            CommonInterfaceTypeProcedurePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonInterfaceTypeProcedure|CommonInterfaceTypeProcedure[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonInterfaceTypeProcedure[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonInterfaceTypeProcedureQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonInterfaceTypeProcedurePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonInterfaceTypeProcedureQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonInterfaceTypeProcedurePeer::ID, $keys, Criteria::IN);
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
     * @return CommonInterfaceTypeProcedureQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonInterfaceTypeProcedurePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonInterfaceTypeProcedurePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonInterfaceTypeProcedurePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the type_procedure_sis column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeProcedureSis('fooValue');   // WHERE type_procedure_sis = 'fooValue'
     * $query->filterByTypeProcedureSis('%fooValue%'); // WHERE type_procedure_sis LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeProcedureSis The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInterfaceTypeProcedureQuery The current query, for fluid interface
     */
    public function filterByTypeProcedureSis($typeProcedureSis = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeProcedureSis)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeProcedureSis)) {
                $typeProcedureSis = str_replace('*', '%', $typeProcedureSis);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonInterfaceTypeProcedurePeer::TYPE_PROCEDURE_SIS, $typeProcedureSis, $comparison);
    }

    /**
     * Filter the query on the type_procedure_marco column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeProcedureMarco('fooValue');   // WHERE type_procedure_marco = 'fooValue'
     * $query->filterByTypeProcedureMarco('%fooValue%'); // WHERE type_procedure_marco LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeProcedureMarco The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInterfaceTypeProcedureQuery The current query, for fluid interface
     */
    public function filterByTypeProcedureMarco($typeProcedureMarco = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeProcedureMarco)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeProcedureMarco)) {
                $typeProcedureMarco = str_replace('*', '%', $typeProcedureMarco);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonInterfaceTypeProcedurePeer::TYPE_PROCEDURE_MARCO, $typeProcedureMarco, $comparison);
    }

    /**
     * Filter the query on the type_procedure column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeProcedure('fooValue');   // WHERE type_procedure = 'fooValue'
     * $query->filterByTypeProcedure('%fooValue%'); // WHERE type_procedure LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeProcedure The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInterfaceTypeProcedureQuery The current query, for fluid interface
     */
    public function filterByTypeProcedure($typeProcedure = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeProcedure)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeProcedure)) {
                $typeProcedure = str_replace('*', '%', $typeProcedure);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonInterfaceTypeProcedurePeer::TYPE_PROCEDURE, $typeProcedure, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonInterfaceTypeProcedure $commonInterfaceTypeProcedure Object to remove from the list of results
     *
     * @return CommonInterfaceTypeProcedureQuery The current query, for fluid interface
     */
    public function prune($commonInterfaceTypeProcedure = null)
    {
        if ($commonInterfaceTypeProcedure) {
            $this->addUsingAlias(CommonInterfaceTypeProcedurePeer::ID, $commonInterfaceTypeProcedure->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
