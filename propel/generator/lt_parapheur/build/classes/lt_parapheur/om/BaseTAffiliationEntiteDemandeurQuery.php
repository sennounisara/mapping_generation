<?php


/**
 * Base class that represents a query for the 't_affiliation_entite_demandeur' table.
 *
 * 
 *
 * @method TAffiliationEntiteDemandeurQuery orderByIdPole($order = Criteria::ASC) Order by the ID_POLE column
 * @method TAffiliationEntiteDemandeurQuery orderByIdEntiteDemandeur($order = Criteria::ASC) Order by the ID_ENTITE_DEMANDEUR column
 *
 * @method TAffiliationEntiteDemandeurQuery groupByIdPole() Group by the ID_POLE column
 * @method TAffiliationEntiteDemandeurQuery groupByIdEntiteDemandeur() Group by the ID_ENTITE_DEMANDEUR column
 *
 * @method TAffiliationEntiteDemandeurQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TAffiliationEntiteDemandeurQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TAffiliationEntiteDemandeurQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TAffiliationEntiteDemandeur findOne(PropelPDO $con = null) Return the first TAffiliationEntiteDemandeur matching the query
 * @method TAffiliationEntiteDemandeur findOneOrCreate(PropelPDO $con = null) Return the first TAffiliationEntiteDemandeur matching the query, or a new TAffiliationEntiteDemandeur object populated from the query conditions when no match is found
 *
 * @method TAffiliationEntiteDemandeur findOneByIdPole(int $ID_POLE) Return the first TAffiliationEntiteDemandeur filtered by the ID_POLE column
 * @method TAffiliationEntiteDemandeur findOneByIdEntiteDemandeur(int $ID_ENTITE_DEMANDEUR) Return the first TAffiliationEntiteDemandeur filtered by the ID_ENTITE_DEMANDEUR column
 *
 * @method array findByIdPole(int $ID_POLE) Return TAffiliationEntiteDemandeur objects filtered by the ID_POLE column
 * @method array findByIdEntiteDemandeur(int $ID_ENTITE_DEMANDEUR) Return TAffiliationEntiteDemandeur objects filtered by the ID_ENTITE_DEMANDEUR column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseTAffiliationEntiteDemandeurQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTAffiliationEntiteDemandeurQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'TAffiliationEntiteDemandeur', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TAffiliationEntiteDemandeurQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TAffiliationEntiteDemandeurQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TAffiliationEntiteDemandeurQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TAffiliationEntiteDemandeurQuery) {
            return $criteria;
        }
        $query = new TAffiliationEntiteDemandeurQuery();
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
                         A Primary key composition: [$ID_POLE, $ID_ENTITE_DEMANDEUR]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   TAffiliationEntiteDemandeur|TAffiliationEntiteDemandeur[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TAffiliationEntiteDemandeurPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TAffiliationEntiteDemandeurPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TAffiliationEntiteDemandeur A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_POLE`, `ID_ENTITE_DEMANDEUR` FROM `t_affiliation_entite_demandeur` WHERE `ID_POLE` = :p0 AND `ID_ENTITE_DEMANDEUR` = :p1';
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
            $obj = new TAffiliationEntiteDemandeur();
            $obj->hydrate($row);
            TAffiliationEntiteDemandeurPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return TAffiliationEntiteDemandeur|TAffiliationEntiteDemandeur[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TAffiliationEntiteDemandeur[]|mixed the list of results, formatted by the current formatter
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
     * @return TAffiliationEntiteDemandeurQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(TAffiliationEntiteDemandeurPeer::ID_POLE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(TAffiliationEntiteDemandeurPeer::ID_ENTITE_DEMANDEUR, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TAffiliationEntiteDemandeurQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(TAffiliationEntiteDemandeurPeer::ID_POLE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(TAffiliationEntiteDemandeurPeer::ID_ENTITE_DEMANDEUR, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the ID_POLE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPole(1234); // WHERE ID_POLE = 1234
     * $query->filterByIdPole(array(12, 34)); // WHERE ID_POLE IN (12, 34)
     * $query->filterByIdPole(array('min' => 12)); // WHERE ID_POLE >= 12
     * $query->filterByIdPole(array('max' => 12)); // WHERE ID_POLE <= 12
     * </code>
     *
     * @param     mixed $idPole The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TAffiliationEntiteDemandeurQuery The current query, for fluid interface
     */
    public function filterByIdPole($idPole = null, $comparison = null)
    {
        if (is_array($idPole)) {
            $useMinMax = false;
            if (isset($idPole['min'])) {
                $this->addUsingAlias(TAffiliationEntiteDemandeurPeer::ID_POLE, $idPole['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idPole['max'])) {
                $this->addUsingAlias(TAffiliationEntiteDemandeurPeer::ID_POLE, $idPole['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TAffiliationEntiteDemandeurPeer::ID_POLE, $idPole, $comparison);
    }

    /**
     * Filter the query on the ID_ENTITE_DEMANDEUR column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntiteDemandeur(1234); // WHERE ID_ENTITE_DEMANDEUR = 1234
     * $query->filterByIdEntiteDemandeur(array(12, 34)); // WHERE ID_ENTITE_DEMANDEUR IN (12, 34)
     * $query->filterByIdEntiteDemandeur(array('min' => 12)); // WHERE ID_ENTITE_DEMANDEUR >= 12
     * $query->filterByIdEntiteDemandeur(array('max' => 12)); // WHERE ID_ENTITE_DEMANDEUR <= 12
     * </code>
     *
     * @param     mixed $idEntiteDemandeur The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TAffiliationEntiteDemandeurQuery The current query, for fluid interface
     */
    public function filterByIdEntiteDemandeur($idEntiteDemandeur = null, $comparison = null)
    {
        if (is_array($idEntiteDemandeur)) {
            $useMinMax = false;
            if (isset($idEntiteDemandeur['min'])) {
                $this->addUsingAlias(TAffiliationEntiteDemandeurPeer::ID_ENTITE_DEMANDEUR, $idEntiteDemandeur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntiteDemandeur['max'])) {
                $this->addUsingAlias(TAffiliationEntiteDemandeurPeer::ID_ENTITE_DEMANDEUR, $idEntiteDemandeur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TAffiliationEntiteDemandeurPeer::ID_ENTITE_DEMANDEUR, $idEntiteDemandeur, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   TAffiliationEntiteDemandeur $tAffiliationEntiteDemandeur Object to remove from the list of results
     *
     * @return TAffiliationEntiteDemandeurQuery The current query, for fluid interface
     */
    public function prune($tAffiliationEntiteDemandeur = null)
    {
        if ($tAffiliationEntiteDemandeur) {
            $this->addCond('pruneCond0', $this->getAliasedColName(TAffiliationEntiteDemandeurPeer::ID_POLE), $tAffiliationEntiteDemandeur->getIdPole(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(TAffiliationEntiteDemandeurPeer::ID_ENTITE_DEMANDEUR), $tAffiliationEntiteDemandeur->getIdEntiteDemandeur(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
