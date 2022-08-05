<?php


/**
 * Base class that represents a query for the 't_forme_prix_pf_has_ref_variation' table.
 *
 * 
 *
 * @method CommonTFormePrixPfHasRefVariationQuery orderByIdVariation($order = Criteria::ASC) Order by the id_variation column
 * @method CommonTFormePrixPfHasRefVariationQuery orderByIdFormePrix($order = Criteria::ASC) Order by the id_forme_prix column
 *
 * @method CommonTFormePrixPfHasRefVariationQuery groupByIdVariation() Group by the id_variation column
 * @method CommonTFormePrixPfHasRefVariationQuery groupByIdFormePrix() Group by the id_forme_prix column
 *
 * @method CommonTFormePrixPfHasRefVariationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTFormePrixPfHasRefVariationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTFormePrixPfHasRefVariationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTFormePrixPfHasRefVariation findOne(PropelPDO $con = null) Return the first CommonTFormePrixPfHasRefVariation matching the query
 * @method CommonTFormePrixPfHasRefVariation findOneOrCreate(PropelPDO $con = null) Return the first CommonTFormePrixPfHasRefVariation matching the query, or a new CommonTFormePrixPfHasRefVariation object populated from the query conditions when no match is found
 *
 * @method CommonTFormePrixPfHasRefVariation findOneByIdVariation(int $id_variation) Return the first CommonTFormePrixPfHasRefVariation filtered by the id_variation column
 * @method CommonTFormePrixPfHasRefVariation findOneByIdFormePrix(int $id_forme_prix) Return the first CommonTFormePrixPfHasRefVariation filtered by the id_forme_prix column
 *
 * @method array findByIdVariation(int $id_variation) Return CommonTFormePrixPfHasRefVariation objects filtered by the id_variation column
 * @method array findByIdFormePrix(int $id_forme_prix) Return CommonTFormePrixPfHasRefVariation objects filtered by the id_forme_prix column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTFormePrixPfHasRefVariationQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTFormePrixPfHasRefVariationQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTFormePrixPfHasRefVariation', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTFormePrixPfHasRefVariationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTFormePrixPfHasRefVariationQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTFormePrixPfHasRefVariationQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTFormePrixPfHasRefVariationQuery) {
            return $criteria;
        }
        $query = new CommonTFormePrixPfHasRefVariationQuery();
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
                         A Primary key composition: [$id_variation, $id_forme_prix]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonTFormePrixPfHasRefVariation|CommonTFormePrixPfHasRefVariation[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTFormePrixPfHasRefVariationPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTFormePrixPfHasRefVariationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTFormePrixPfHasRefVariation A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_variation`, `id_forme_prix` FROM `t_forme_prix_pf_has_ref_variation` WHERE `id_variation` = :p0 AND `id_forme_prix` = :p1';
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
            $obj = new CommonTFormePrixPfHasRefVariation();
            $obj->hydrate($row);
            CommonTFormePrixPfHasRefVariationPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonTFormePrixPfHasRefVariation|CommonTFormePrixPfHasRefVariation[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTFormePrixPfHasRefVariation[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTFormePrixPfHasRefVariationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonTFormePrixPfHasRefVariationPeer::ID_VARIATION, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonTFormePrixPfHasRefVariationPeer::ID_FORME_PRIX, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTFormePrixPfHasRefVariationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonTFormePrixPfHasRefVariationPeer::ID_VARIATION, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonTFormePrixPfHasRefVariationPeer::ID_FORME_PRIX, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the id_variation column
     *
     * Example usage:
     * <code>
     * $query->filterByIdVariation(1234); // WHERE id_variation = 1234
     * $query->filterByIdVariation(array(12, 34)); // WHERE id_variation IN (12, 34)
     * $query->filterByIdVariation(array('min' => 12)); // WHERE id_variation >= 12
     * $query->filterByIdVariation(array('max' => 12)); // WHERE id_variation <= 12
     * </code>
     *
     * @param     mixed $idVariation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTFormePrixPfHasRefVariationQuery The current query, for fluid interface
     */
    public function filterByIdVariation($idVariation = null, $comparison = null)
    {
        if (is_array($idVariation)) {
            $useMinMax = false;
            if (isset($idVariation['min'])) {
                $this->addUsingAlias(CommonTFormePrixPfHasRefVariationPeer::ID_VARIATION, $idVariation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idVariation['max'])) {
                $this->addUsingAlias(CommonTFormePrixPfHasRefVariationPeer::ID_VARIATION, $idVariation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTFormePrixPfHasRefVariationPeer::ID_VARIATION, $idVariation, $comparison);
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
     * @return CommonTFormePrixPfHasRefVariationQuery The current query, for fluid interface
     */
    public function filterByIdFormePrix($idFormePrix = null, $comparison = null)
    {
        if (is_array($idFormePrix)) {
            $useMinMax = false;
            if (isset($idFormePrix['min'])) {
                $this->addUsingAlias(CommonTFormePrixPfHasRefVariationPeer::ID_FORME_PRIX, $idFormePrix['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idFormePrix['max'])) {
                $this->addUsingAlias(CommonTFormePrixPfHasRefVariationPeer::ID_FORME_PRIX, $idFormePrix['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTFormePrixPfHasRefVariationPeer::ID_FORME_PRIX, $idFormePrix, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTFormePrixPfHasRefVariation $commonTFormePrixPfHasRefVariation Object to remove from the list of results
     *
     * @return CommonTFormePrixPfHasRefVariationQuery The current query, for fluid interface
     */
    public function prune($commonTFormePrixPfHasRefVariation = null)
    {
        if ($commonTFormePrixPfHasRefVariation) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonTFormePrixPfHasRefVariationPeer::ID_VARIATION), $commonTFormePrixPfHasRefVariation->getIdVariation(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonTFormePrixPfHasRefVariationPeer::ID_FORME_PRIX), $commonTFormePrixPfHasRefVariation->getIdFormePrix(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
