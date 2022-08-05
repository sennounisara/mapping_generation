<?php


/**
 * Base class that represents a query for the 't_organisme_echange' table.
 *
 * 
 *
 * @method TOrganismeEchangeQuery orderByIdOrganisme($order = Criteria::ASC) Order by the ID_ORGANISME column
 * @method TOrganismeEchangeQuery orderByIdOrganismeLie($order = Criteria::ASC) Order by the ID_ORGANISME_LIE column
 * @method TOrganismeEchangeQuery orderByIdsEntite($order = Criteria::ASC) Order by the IDS_ENTITE column
 *
 * @method TOrganismeEchangeQuery groupByIdOrganisme() Group by the ID_ORGANISME column
 * @method TOrganismeEchangeQuery groupByIdOrganismeLie() Group by the ID_ORGANISME_LIE column
 * @method TOrganismeEchangeQuery groupByIdsEntite() Group by the IDS_ENTITE column
 *
 * @method TOrganismeEchangeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TOrganismeEchangeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TOrganismeEchangeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TOrganismeEchange findOne(PropelPDO $con = null) Return the first TOrganismeEchange matching the query
 * @method TOrganismeEchange findOneOrCreate(PropelPDO $con = null) Return the first TOrganismeEchange matching the query, or a new TOrganismeEchange object populated from the query conditions when no match is found
 *
 * @method TOrganismeEchange findOneByIdOrganisme(int $ID_ORGANISME) Return the first TOrganismeEchange filtered by the ID_ORGANISME column
 * @method TOrganismeEchange findOneByIdOrganismeLie(int $ID_ORGANISME_LIE) Return the first TOrganismeEchange filtered by the ID_ORGANISME_LIE column
 * @method TOrganismeEchange findOneByIdsEntite(string $IDS_ENTITE) Return the first TOrganismeEchange filtered by the IDS_ENTITE column
 *
 * @method array findByIdOrganisme(int $ID_ORGANISME) Return TOrganismeEchange objects filtered by the ID_ORGANISME column
 * @method array findByIdOrganismeLie(int $ID_ORGANISME_LIE) Return TOrganismeEchange objects filtered by the ID_ORGANISME_LIE column
 * @method array findByIdsEntite(string $IDS_ENTITE) Return TOrganismeEchange objects filtered by the IDS_ENTITE column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseTOrganismeEchangeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTOrganismeEchangeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'TOrganismeEchange', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TOrganismeEchangeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TOrganismeEchangeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TOrganismeEchangeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TOrganismeEchangeQuery) {
            return $criteria;
        }
        $query = new TOrganismeEchangeQuery();
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
                         A Primary key composition: [$ID_ORGANISME, $ID_ORGANISME_LIE]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   TOrganismeEchange|TOrganismeEchange[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TOrganismeEchangePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TOrganismeEchangePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TOrganismeEchange A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_ORGANISME`, `ID_ORGANISME_LIE`, `IDS_ENTITE` FROM `t_organisme_echange` WHERE `ID_ORGANISME` = :p0 AND `ID_ORGANISME_LIE` = :p1';
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
            $obj = new TOrganismeEchange();
            $obj->hydrate($row);
            TOrganismeEchangePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return TOrganismeEchange|TOrganismeEchange[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TOrganismeEchange[]|mixed the list of results, formatted by the current formatter
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
     * @return TOrganismeEchangeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(TOrganismeEchangePeer::ID_ORGANISME, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(TOrganismeEchangePeer::ID_ORGANISME_LIE, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TOrganismeEchangeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(TOrganismeEchangePeer::ID_ORGANISME, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(TOrganismeEchangePeer::ID_ORGANISME_LIE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the ID_ORGANISME column
     *
     * Example usage:
     * <code>
     * $query->filterByIdOrganisme(1234); // WHERE ID_ORGANISME = 1234
     * $query->filterByIdOrganisme(array(12, 34)); // WHERE ID_ORGANISME IN (12, 34)
     * $query->filterByIdOrganisme(array('min' => 12)); // WHERE ID_ORGANISME >= 12
     * $query->filterByIdOrganisme(array('max' => 12)); // WHERE ID_ORGANISME <= 12
     * </code>
     *
     * @param     mixed $idOrganisme The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TOrganismeEchangeQuery The current query, for fluid interface
     */
    public function filterByIdOrganisme($idOrganisme = null, $comparison = null)
    {
        if (is_array($idOrganisme)) {
            $useMinMax = false;
            if (isset($idOrganisme['min'])) {
                $this->addUsingAlias(TOrganismeEchangePeer::ID_ORGANISME, $idOrganisme['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idOrganisme['max'])) {
                $this->addUsingAlias(TOrganismeEchangePeer::ID_ORGANISME, $idOrganisme['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TOrganismeEchangePeer::ID_ORGANISME, $idOrganisme, $comparison);
    }

    /**
     * Filter the query on the ID_ORGANISME_LIE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdOrganismeLie(1234); // WHERE ID_ORGANISME_LIE = 1234
     * $query->filterByIdOrganismeLie(array(12, 34)); // WHERE ID_ORGANISME_LIE IN (12, 34)
     * $query->filterByIdOrganismeLie(array('min' => 12)); // WHERE ID_ORGANISME_LIE >= 12
     * $query->filterByIdOrganismeLie(array('max' => 12)); // WHERE ID_ORGANISME_LIE <= 12
     * </code>
     *
     * @param     mixed $idOrganismeLie The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TOrganismeEchangeQuery The current query, for fluid interface
     */
    public function filterByIdOrganismeLie($idOrganismeLie = null, $comparison = null)
    {
        if (is_array($idOrganismeLie)) {
            $useMinMax = false;
            if (isset($idOrganismeLie['min'])) {
                $this->addUsingAlias(TOrganismeEchangePeer::ID_ORGANISME_LIE, $idOrganismeLie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idOrganismeLie['max'])) {
                $this->addUsingAlias(TOrganismeEchangePeer::ID_ORGANISME_LIE, $idOrganismeLie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TOrganismeEchangePeer::ID_ORGANISME_LIE, $idOrganismeLie, $comparison);
    }

    /**
     * Filter the query on the IDS_ENTITE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdsEntite('fooValue');   // WHERE IDS_ENTITE = 'fooValue'
     * $query->filterByIdsEntite('%fooValue%'); // WHERE IDS_ENTITE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $idsEntite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TOrganismeEchangeQuery The current query, for fluid interface
     */
    public function filterByIdsEntite($idsEntite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($idsEntite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $idsEntite)) {
                $idsEntite = str_replace('*', '%', $idsEntite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TOrganismeEchangePeer::IDS_ENTITE, $idsEntite, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   TOrganismeEchange $tOrganismeEchange Object to remove from the list of results
     *
     * @return TOrganismeEchangeQuery The current query, for fluid interface
     */
    public function prune($tOrganismeEchange = null)
    {
        if ($tOrganismeEchange) {
            $this->addCond('pruneCond0', $this->getAliasedColName(TOrganismeEchangePeer::ID_ORGANISME), $tOrganismeEchange->getIdOrganisme(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(TOrganismeEchangePeer::ID_ORGANISME_LIE), $tOrganismeEchange->getIdOrganismeLie(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
