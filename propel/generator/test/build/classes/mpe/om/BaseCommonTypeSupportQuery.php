<?php


/**
 * Base class that represents a query for the 'Type_support' table.
 *
 * 
 *
 * @method CommonTypeSupportQuery orderByIdTypeAvis($order = Criteria::ASC) Order by the id_type_avis column
 * @method CommonTypeSupportQuery orderByIdTypeSupport($order = Criteria::ASC) Order by the id_type_support column
 *
 * @method CommonTypeSupportQuery groupByIdTypeAvis() Group by the id_type_avis column
 * @method CommonTypeSupportQuery groupByIdTypeSupport() Group by the id_type_support column
 *
 * @method CommonTypeSupportQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTypeSupportQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTypeSupportQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTypeSupport findOne(PropelPDO $con = null) Return the first CommonTypeSupport matching the query
 * @method CommonTypeSupport findOneOrCreate(PropelPDO $con = null) Return the first CommonTypeSupport matching the query, or a new CommonTypeSupport object populated from the query conditions when no match is found
 *
 * @method CommonTypeSupport findOneByIdTypeAvis(int $id_type_avis) Return the first CommonTypeSupport filtered by the id_type_avis column
 * @method CommonTypeSupport findOneByIdTypeSupport(int $id_type_support) Return the first CommonTypeSupport filtered by the id_type_support column
 *
 * @method array findByIdTypeAvis(int $id_type_avis) Return CommonTypeSupport objects filtered by the id_type_avis column
 * @method array findByIdTypeSupport(int $id_type_support) Return CommonTypeSupport objects filtered by the id_type_support column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTypeSupportQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTypeSupportQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTypeSupport', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTypeSupportQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTypeSupportQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTypeSupportQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTypeSupportQuery) {
            return $criteria;
        }
        $query = new CommonTypeSupportQuery();
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
                         A Primary key composition: [$id_type_avis, $id_type_support]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonTypeSupport|CommonTypeSupport[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTypeSupportPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTypeSupportPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTypeSupport A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_type_avis`, `id_type_support` FROM `Type_support` WHERE `id_type_avis` = :p0 AND `id_type_support` = :p1';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonTypeSupport();
            $obj->hydrate($row);
            CommonTypeSupportPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonTypeSupport|CommonTypeSupport[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTypeSupport[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTypeSupportQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonTypeSupportPeer::ID_TYPE_AVIS, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonTypeSupportPeer::ID_TYPE_SUPPORT, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTypeSupportQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonTypeSupportPeer::ID_TYPE_AVIS, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonTypeSupportPeer::ID_TYPE_SUPPORT, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the id_type_avis column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTypeAvis(1234); // WHERE id_type_avis = 1234
     * $query->filterByIdTypeAvis(array(12, 34)); // WHERE id_type_avis IN (12, 34)
     * $query->filterByIdTypeAvis(array('min' => 12)); // WHERE id_type_avis >= 12
     * $query->filterByIdTypeAvis(array('max' => 12)); // WHERE id_type_avis <= 12
     * </code>
     *
     * @param     mixed $idTypeAvis The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeSupportQuery The current query, for fluid interface
     */
    public function filterByIdTypeAvis($idTypeAvis = null, $comparison = null)
    {
        if (is_array($idTypeAvis)) {
            $useMinMax = false;
            if (isset($idTypeAvis['min'])) {
                $this->addUsingAlias(CommonTypeSupportPeer::ID_TYPE_AVIS, $idTypeAvis['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeAvis['max'])) {
                $this->addUsingAlias(CommonTypeSupportPeer::ID_TYPE_AVIS, $idTypeAvis['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTypeSupportPeer::ID_TYPE_AVIS, $idTypeAvis, $comparison);
    }

    /**
     * Filter the query on the id_type_support column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTypeSupport(1234); // WHERE id_type_support = 1234
     * $query->filterByIdTypeSupport(array(12, 34)); // WHERE id_type_support IN (12, 34)
     * $query->filterByIdTypeSupport(array('min' => 12)); // WHERE id_type_support >= 12
     * $query->filterByIdTypeSupport(array('max' => 12)); // WHERE id_type_support <= 12
     * </code>
     *
     * @param     mixed $idTypeSupport The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTypeSupportQuery The current query, for fluid interface
     */
    public function filterByIdTypeSupport($idTypeSupport = null, $comparison = null)
    {
        if (is_array($idTypeSupport)) {
            $useMinMax = false;
            if (isset($idTypeSupport['min'])) {
                $this->addUsingAlias(CommonTypeSupportPeer::ID_TYPE_SUPPORT, $idTypeSupport['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeSupport['max'])) {
                $this->addUsingAlias(CommonTypeSupportPeer::ID_TYPE_SUPPORT, $idTypeSupport['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTypeSupportPeer::ID_TYPE_SUPPORT, $idTypeSupport, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTypeSupport $commonTypeSupport Object to remove from the list of results
     *
     * @return CommonTypeSupportQuery The current query, for fluid interface
     */
    public function prune($commonTypeSupport = null)
    {
        if ($commonTypeSupport) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonTypeSupportPeer::ID_TYPE_AVIS), $commonTypeSupport->getIdTypeAvis(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonTypeSupportPeer::ID_TYPE_SUPPORT), $commonTypeSupport->getIdTypeSupport(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
