<?php


/**
 * Base class that represents a query for the 'affiliationentite' table.
 *
 * 
 *
 * @method AffiliationentiteQuery orderByIdPole($order = Criteria::ASC) Order by the id_pole column
 * @method AffiliationentiteQuery orderByIdEntite($order = Criteria::ASC) Order by the id_entite column
 *
 * @method AffiliationentiteQuery groupByIdPole() Group by the id_pole column
 * @method AffiliationentiteQuery groupByIdEntite() Group by the id_entite column
 *
 * @method AffiliationentiteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method AffiliationentiteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method AffiliationentiteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Affiliationentite findOne(PropelPDO $con = null) Return the first Affiliationentite matching the query
 * @method Affiliationentite findOneOrCreate(PropelPDO $con = null) Return the first Affiliationentite matching the query, or a new Affiliationentite object populated from the query conditions when no match is found
 *
 * @method Affiliationentite findOneByIdPole(int $id_pole) Return the first Affiliationentite filtered by the id_pole column
 * @method Affiliationentite findOneByIdEntite(int $id_entite) Return the first Affiliationentite filtered by the id_entite column
 *
 * @method array findByIdPole(int $id_pole) Return Affiliationentite objects filtered by the id_pole column
 * @method array findByIdEntite(int $id_entite) Return Affiliationentite objects filtered by the id_entite column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseAffiliationentiteQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseAffiliationentiteQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'Affiliationentite', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AffiliationentiteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   AffiliationentiteQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return AffiliationentiteQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AffiliationentiteQuery) {
            return $criteria;
        }
        $query = new AffiliationentiteQuery();
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
                         A Primary key composition: [$id_pole, $id_entite]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   Affiliationentite|Affiliationentite[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = AffiliationentitePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(AffiliationentitePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Affiliationentite A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_pole`, `id_entite` FROM `affiliationentite` WHERE `id_pole` = :p0 AND `id_entite` = :p1';
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
            $obj = new Affiliationentite();
            $obj->hydrate($row);
            AffiliationentitePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return Affiliationentite|Affiliationentite[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Affiliationentite[]|mixed the list of results, formatted by the current formatter
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
     * @return AffiliationentiteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(AffiliationentitePeer::ID_POLE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(AffiliationentitePeer::ID_ENTITE, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return AffiliationentiteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(AffiliationentitePeer::ID_POLE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(AffiliationentitePeer::ID_ENTITE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the id_pole column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPole(1234); // WHERE id_pole = 1234
     * $query->filterByIdPole(array(12, 34)); // WHERE id_pole IN (12, 34)
     * $query->filterByIdPole(array('min' => 12)); // WHERE id_pole >= 12
     * $query->filterByIdPole(array('max' => 12)); // WHERE id_pole <= 12
     * </code>
     *
     * @param     mixed $idPole The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AffiliationentiteQuery The current query, for fluid interface
     */
    public function filterByIdPole($idPole = null, $comparison = null)
    {
        if (is_array($idPole)) {
            $useMinMax = false;
            if (isset($idPole['min'])) {
                $this->addUsingAlias(AffiliationentitePeer::ID_POLE, $idPole['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idPole['max'])) {
                $this->addUsingAlias(AffiliationentitePeer::ID_POLE, $idPole['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AffiliationentitePeer::ID_POLE, $idPole, $comparison);
    }

    /**
     * Filter the query on the id_entite column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntite(1234); // WHERE id_entite = 1234
     * $query->filterByIdEntite(array(12, 34)); // WHERE id_entite IN (12, 34)
     * $query->filterByIdEntite(array('min' => 12)); // WHERE id_entite >= 12
     * $query->filterByIdEntite(array('max' => 12)); // WHERE id_entite <= 12
     * </code>
     *
     * @param     mixed $idEntite The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return AffiliationentiteQuery The current query, for fluid interface
     */
    public function filterByIdEntite($idEntite = null, $comparison = null)
    {
        if (is_array($idEntite)) {
            $useMinMax = false;
            if (isset($idEntite['min'])) {
                $this->addUsingAlias(AffiliationentitePeer::ID_ENTITE, $idEntite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntite['max'])) {
                $this->addUsingAlias(AffiliationentitePeer::ID_ENTITE, $idEntite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(AffiliationentitePeer::ID_ENTITE, $idEntite, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Affiliationentite $affiliationentite Object to remove from the list of results
     *
     * @return AffiliationentiteQuery The current query, for fluid interface
     */
    public function prune($affiliationentite = null)
    {
        if ($affiliationentite) {
            $this->addCond('pruneCond0', $this->getAliasedColName(AffiliationentitePeer::ID_POLE), $affiliationentite->getIdPole(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(AffiliationentitePeer::ID_ENTITE), $affiliationentite->getIdEntite(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
