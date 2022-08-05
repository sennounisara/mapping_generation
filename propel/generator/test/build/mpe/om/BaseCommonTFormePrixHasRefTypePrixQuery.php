<?php


/**
 * Base class that represents a query for the 't_forme_prix_has_ref_type_prix' table.
 *
 * 
 *
 * @method CommonTFormePrixHasRefTypePrixQuery orderByIdFormePrix($order = Criteria::ASC) Order by the id_forme_prix column
 * @method CommonTFormePrixHasRefTypePrixQuery orderByIdTypePrix($order = Criteria::ASC) Order by the id_type_prix column
 *
 * @method CommonTFormePrixHasRefTypePrixQuery groupByIdFormePrix() Group by the id_forme_prix column
 * @method CommonTFormePrixHasRefTypePrixQuery groupByIdTypePrix() Group by the id_type_prix column
 *
 * @method CommonTFormePrixHasRefTypePrixQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTFormePrixHasRefTypePrixQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTFormePrixHasRefTypePrixQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTFormePrixHasRefTypePrix findOne(PropelPDO $con = null) Return the first CommonTFormePrixHasRefTypePrix matching the query
 * @method CommonTFormePrixHasRefTypePrix findOneOrCreate(PropelPDO $con = null) Return the first CommonTFormePrixHasRefTypePrix matching the query, or a new CommonTFormePrixHasRefTypePrix object populated from the query conditions when no match is found
 *
 * @method CommonTFormePrixHasRefTypePrix findOneByIdFormePrix(int $id_forme_prix) Return the first CommonTFormePrixHasRefTypePrix filtered by the id_forme_prix column
 * @method CommonTFormePrixHasRefTypePrix findOneByIdTypePrix(int $id_type_prix) Return the first CommonTFormePrixHasRefTypePrix filtered by the id_type_prix column
 *
 * @method array findByIdFormePrix(int $id_forme_prix) Return CommonTFormePrixHasRefTypePrix objects filtered by the id_forme_prix column
 * @method array findByIdTypePrix(int $id_type_prix) Return CommonTFormePrixHasRefTypePrix objects filtered by the id_type_prix column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTFormePrixHasRefTypePrixQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTFormePrixHasRefTypePrixQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTFormePrixHasRefTypePrix', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTFormePrixHasRefTypePrixQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTFormePrixHasRefTypePrixQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTFormePrixHasRefTypePrixQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTFormePrixHasRefTypePrixQuery) {
            return $criteria;
        }
        $query = new CommonTFormePrixHasRefTypePrixQuery();
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
                         A Primary key composition: [$id_forme_prix, $id_type_prix]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonTFormePrixHasRefTypePrix|CommonTFormePrixHasRefTypePrix[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTFormePrixHasRefTypePrixPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTFormePrixHasRefTypePrixPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTFormePrixHasRefTypePrix A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_forme_prix`, `id_type_prix` FROM `t_forme_prix_has_ref_type_prix` WHERE `id_forme_prix` = :p0 AND `id_type_prix` = :p1';
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
            $obj = new CommonTFormePrixHasRefTypePrix();
            $obj->hydrate($row);
            CommonTFormePrixHasRefTypePrixPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonTFormePrixHasRefTypePrix|CommonTFormePrixHasRefTypePrix[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTFormePrixHasRefTypePrix[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTFormePrixHasRefTypePrixQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonTFormePrixHasRefTypePrixPeer::ID_FORME_PRIX, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonTFormePrixHasRefTypePrixPeer::ID_TYPE_PRIX, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTFormePrixHasRefTypePrixQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonTFormePrixHasRefTypePrixPeer::ID_FORME_PRIX, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonTFormePrixHasRefTypePrixPeer::ID_TYPE_PRIX, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the id_forme_prix column
     *
     * Example usage:
     * <code>
     * $query->filterByIdFormePrix(1234); // WHERE id_forme_prix = 1234
     * $query->filterByIdFormePrix(array(12, 34)); // WHERE id_forme_prix IN (12, 34)
     * $query->filterByIdFormePrix(array('min' => 12)); // WHERE id_forme_prix >= 12
     * $query->filterByIdFormePrix(array('max' => 12)); // WHERE id_forme_prix <= 12
     * </code>
     *
     * @param     mixed $idFormePrix The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTFormePrixHasRefTypePrixQuery The current query, for fluid interface
     */
    public function filterByIdFormePrix($idFormePrix = null, $comparison = null)
    {
        if (is_array($idFormePrix)) {
            $useMinMax = false;
            if (isset($idFormePrix['min'])) {
                $this->addUsingAlias(CommonTFormePrixHasRefTypePrixPeer::ID_FORME_PRIX, $idFormePrix['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idFormePrix['max'])) {
                $this->addUsingAlias(CommonTFormePrixHasRefTypePrixPeer::ID_FORME_PRIX, $idFormePrix['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTFormePrixHasRefTypePrixPeer::ID_FORME_PRIX, $idFormePrix, $comparison);
    }

    /**
     * Filter the query on the id_type_prix column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTypePrix(1234); // WHERE id_type_prix = 1234
     * $query->filterByIdTypePrix(array(12, 34)); // WHERE id_type_prix IN (12, 34)
     * $query->filterByIdTypePrix(array('min' => 12)); // WHERE id_type_prix >= 12
     * $query->filterByIdTypePrix(array('max' => 12)); // WHERE id_type_prix <= 12
     * </code>
     *
     * @param     mixed $idTypePrix The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTFormePrixHasRefTypePrixQuery The current query, for fluid interface
     */
    public function filterByIdTypePrix($idTypePrix = null, $comparison = null)
    {
        if (is_array($idTypePrix)) {
            $useMinMax = false;
            if (isset($idTypePrix['min'])) {
                $this->addUsingAlias(CommonTFormePrixHasRefTypePrixPeer::ID_TYPE_PRIX, $idTypePrix['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypePrix['max'])) {
                $this->addUsingAlias(CommonTFormePrixHasRefTypePrixPeer::ID_TYPE_PRIX, $idTypePrix['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTFormePrixHasRefTypePrixPeer::ID_TYPE_PRIX, $idTypePrix, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTFormePrixHasRefTypePrix $commonTFormePrixHasRefTypePrix Object to remove from the list of results
     *
     * @return CommonTFormePrixHasRefTypePrixQuery The current query, for fluid interface
     */
    public function prune($commonTFormePrixHasRefTypePrix = null)
    {
        if ($commonTFormePrixHasRefTypePrix) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonTFormePrixHasRefTypePrixPeer::ID_FORME_PRIX), $commonTFormePrixHasRefTypePrix->getIdFormePrix(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonTFormePrixHasRefTypePrixPeer::ID_TYPE_PRIX), $commonTFormePrixHasRefTypePrix->getIdTypePrix(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
