<?php


/**
 * Base class that represents a query for the 'TypeDecision' table.
 *
 * 
 *
 * @method CommonTypeDecisionQuery orderByIdTypeDecision($order = Criteria::ASC) Order by the id_type_decision column
 * @method CommonTypeDecisionQuery orderByCodeTypeDecision($order = Criteria::ASC) Order by the code_type_decision column
 *
 * @method CommonTypeDecisionQuery groupByIdTypeDecision() Group by the id_type_decision column
 * @method CommonTypeDecisionQuery groupByCodeTypeDecision() Group by the code_type_decision column
 *
 * @method CommonTypeDecisionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTypeDecisionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTypeDecisionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTypeDecision findOne(PropelPDO $con = null) Return the first CommonTypeDecision matching the query
 * @method CommonTypeDecision findOneOrCreate(PropelPDO $con = null) Return the first CommonTypeDecision matching the query, or a new CommonTypeDecision object populated from the query conditions when no match is found
 *
 * @method CommonTypeDecision findOneByCodeTypeDecision(string $code_type_decision) Return the first CommonTypeDecision filtered by the code_type_decision column
 *
 * @method array findByIdTypeDecision(int $id_type_decision) Return CommonTypeDecision objects filtered by the id_type_decision column
 * @method array findByCodeTypeDecision(string $code_type_decision) Return CommonTypeDecision objects filtered by the code_type_decision column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTypeDecisionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTypeDecisionQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTypeDecision', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTypeDecisionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTypeDecisionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTypeDecisionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTypeDecisionQuery) {
            return $criteria;
        }
        $query = new CommonTypeDecisionQuery();
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
     * @return   CommonTypeDecision|CommonTypeDecision[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTypeDecisionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTypeDecisionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTypeDecision A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdTypeDecision($key, $con = null)
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
     * @return                 CommonTypeDecision A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_type_decision`, `code_type_decision` FROM `TypeDecision` WHERE `id_type_decision` = :p0';
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
            $obj = new CommonTypeDecision();
            $obj->hydrate($row);
            CommonTypeDecisionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonTypeDecision|CommonTypeDecision[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTypeDecision[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTypeDecisionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonTypeDecisionPeer::ID_TYPE_DECISION, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTypeDecisionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonTypeDecisionPeer::ID_TYPE_DECISION, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_type_decision column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTypeDecision(1234); // WHERE id_type_decision = 1234
     * $query->filterByIdTypeDecision(array(12, 34)); // WHERE id_type_decision IN (12, 34)
     * $query->filterByIdTypeDecision(array('min' => 12)); // WHERE id_type_decision >= 12
     * $query->filterByIdTypeDecision(array('max' => 12)); // WHERE id_type_decision <= 12
     * </code>
     *
     * @param     mixed $idTypeDecision The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeDecisionQuery The current query, for fluid interface
     */
    public function filterByIdTypeDecision($idTypeDecision = null, $comparison = null)
    {
        if (is_array($idTypeDecision)) {
            $useMinMax = false;
            if (isset($idTypeDecision['min'])) {
                $this->addUsingAlias(CommonTypeDecisionPeer::ID_TYPE_DECISION, $idTypeDecision['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeDecision['max'])) {
                $this->addUsingAlias(CommonTypeDecisionPeer::ID_TYPE_DECISION, $idTypeDecision['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTypeDecisionPeer::ID_TYPE_DECISION, $idTypeDecision, $comparison);
    }

    /**
     * Filter the query on the code_type_decision column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeTypeDecision('fooValue');   // WHERE code_type_decision = 'fooValue'
     * $query->filterByCodeTypeDecision('%fooValue%'); // WHERE code_type_decision LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codeTypeDecision The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeDecisionQuery The current query, for fluid interface
     */
    public function filterByCodeTypeDecision($codeTypeDecision = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codeTypeDecision)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codeTypeDecision)) {
                $codeTypeDecision = str_replace('*', '%', $codeTypeDecision);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTypeDecisionPeer::CODE_TYPE_DECISION, $codeTypeDecision, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTypeDecision $commonTypeDecision Object to remove from the list of results
     *
     * @return CommonTypeDecisionQuery The current query, for fluid interface
     */
    public function prune($commonTypeDecision = null)
    {
        if ($commonTypeDecision) {
            $this->addUsingAlias(CommonTypeDecisionPeer::ID_TYPE_DECISION, $commonTypeDecision->getIdTypeDecision(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
