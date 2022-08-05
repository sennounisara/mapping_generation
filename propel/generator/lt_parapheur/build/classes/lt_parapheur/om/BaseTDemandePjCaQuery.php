<?php


/**
 * Base class that represents a query for the 't_demande_pj_ca' table.
 *
 * 
 *
 * @method TDemandePjCaQuery orderByIdPjCa($order = Criteria::ASC) Order by the ID_PJ_CA column
 * @method TDemandePjCaQuery orderByIdDemande($order = Criteria::ASC) Order by the ID_DEMANDE column
 * @method TDemandePjCaQuery orderByIdAgent($order = Criteria::ASC) Order by the ID_AGENT column
 * @method TDemandePjCaQuery orderByNomPj($order = Criteria::ASC) Order by the NOM_PJ column
 * @method TDemandePjCaQuery orderByDateCreation($order = Criteria::ASC) Order by the DATE_CREATION column
 *
 * @method TDemandePjCaQuery groupByIdPjCa() Group by the ID_PJ_CA column
 * @method TDemandePjCaQuery groupByIdDemande() Group by the ID_DEMANDE column
 * @method TDemandePjCaQuery groupByIdAgent() Group by the ID_AGENT column
 * @method TDemandePjCaQuery groupByNomPj() Group by the NOM_PJ column
 * @method TDemandePjCaQuery groupByDateCreation() Group by the DATE_CREATION column
 *
 * @method TDemandePjCaQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TDemandePjCaQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TDemandePjCaQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TDemandePjCa findOne(PropelPDO $con = null) Return the first TDemandePjCa matching the query
 * @method TDemandePjCa findOneOrCreate(PropelPDO $con = null) Return the first TDemandePjCa matching the query, or a new TDemandePjCa object populated from the query conditions when no match is found
 *
 * @method TDemandePjCa findOneByIdDemande(int $ID_DEMANDE) Return the first TDemandePjCa filtered by the ID_DEMANDE column
 * @method TDemandePjCa findOneByIdAgent(int $ID_AGENT) Return the first TDemandePjCa filtered by the ID_AGENT column
 * @method TDemandePjCa findOneByNomPj(string $NOM_PJ) Return the first TDemandePjCa filtered by the NOM_PJ column
 * @method TDemandePjCa findOneByDateCreation(string $DATE_CREATION) Return the first TDemandePjCa filtered by the DATE_CREATION column
 *
 * @method array findByIdPjCa(int $ID_PJ_CA) Return TDemandePjCa objects filtered by the ID_PJ_CA column
 * @method array findByIdDemande(int $ID_DEMANDE) Return TDemandePjCa objects filtered by the ID_DEMANDE column
 * @method array findByIdAgent(int $ID_AGENT) Return TDemandePjCa objects filtered by the ID_AGENT column
 * @method array findByNomPj(string $NOM_PJ) Return TDemandePjCa objects filtered by the NOM_PJ column
 * @method array findByDateCreation(string $DATE_CREATION) Return TDemandePjCa objects filtered by the DATE_CREATION column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseTDemandePjCaQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTDemandePjCaQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'TDemandePjCa', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TDemandePjCaQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TDemandePjCaQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TDemandePjCaQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TDemandePjCaQuery) {
            return $criteria;
        }
        $query = new TDemandePjCaQuery();
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
     * @return   TDemandePjCa|TDemandePjCa[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TDemandePjCaPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TDemandePjCaPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TDemandePjCa A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdPjCa($key, $con = null)
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
     * @return                 TDemandePjCa A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_PJ_CA`, `ID_DEMANDE`, `ID_AGENT`, `NOM_PJ`, `DATE_CREATION` FROM `t_demande_pj_ca` WHERE `ID_PJ_CA` = :p0';
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
            $obj = new TDemandePjCa();
            $obj->hydrate($row);
            TDemandePjCaPeer::addInstanceToPool($obj, (string) $key);
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
     * @return TDemandePjCa|TDemandePjCa[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TDemandePjCa[]|mixed the list of results, formatted by the current formatter
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
     * @return TDemandePjCaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TDemandePjCaPeer::ID_PJ_CA, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TDemandePjCaQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TDemandePjCaPeer::ID_PJ_CA, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID_PJ_CA column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPjCa(1234); // WHERE ID_PJ_CA = 1234
     * $query->filterByIdPjCa(array(12, 34)); // WHERE ID_PJ_CA IN (12, 34)
     * $query->filterByIdPjCa(array('min' => 12)); // WHERE ID_PJ_CA >= 12
     * $query->filterByIdPjCa(array('max' => 12)); // WHERE ID_PJ_CA <= 12
     * </code>
     *
     * @param     mixed $idPjCa The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandePjCaQuery The current query, for fluid interface
     */
    public function filterByIdPjCa($idPjCa = null, $comparison = null)
    {
        if (is_array($idPjCa)) {
            $useMinMax = false;
            if (isset($idPjCa['min'])) {
                $this->addUsingAlias(TDemandePjCaPeer::ID_PJ_CA, $idPjCa['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idPjCa['max'])) {
                $this->addUsingAlias(TDemandePjCaPeer::ID_PJ_CA, $idPjCa['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TDemandePjCaPeer::ID_PJ_CA, $idPjCa, $comparison);
    }

    /**
     * Filter the query on the ID_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDemande(1234); // WHERE ID_DEMANDE = 1234
     * $query->filterByIdDemande(array(12, 34)); // WHERE ID_DEMANDE IN (12, 34)
     * $query->filterByIdDemande(array('min' => 12)); // WHERE ID_DEMANDE >= 12
     * $query->filterByIdDemande(array('max' => 12)); // WHERE ID_DEMANDE <= 12
     * </code>
     *
     * @param     mixed $idDemande The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandePjCaQuery The current query, for fluid interface
     */
    public function filterByIdDemande($idDemande = null, $comparison = null)
    {
        if (is_array($idDemande)) {
            $useMinMax = false;
            if (isset($idDemande['min'])) {
                $this->addUsingAlias(TDemandePjCaPeer::ID_DEMANDE, $idDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDemande['max'])) {
                $this->addUsingAlias(TDemandePjCaPeer::ID_DEMANDE, $idDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TDemandePjCaPeer::ID_DEMANDE, $idDemande, $comparison);
    }

    /**
     * Filter the query on the ID_AGENT column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgent(1234); // WHERE ID_AGENT = 1234
     * $query->filterByIdAgent(array(12, 34)); // WHERE ID_AGENT IN (12, 34)
     * $query->filterByIdAgent(array('min' => 12)); // WHERE ID_AGENT >= 12
     * $query->filterByIdAgent(array('max' => 12)); // WHERE ID_AGENT <= 12
     * </code>
     *
     * @param     mixed $idAgent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandePjCaQuery The current query, for fluid interface
     */
    public function filterByIdAgent($idAgent = null, $comparison = null)
    {
        if (is_array($idAgent)) {
            $useMinMax = false;
            if (isset($idAgent['min'])) {
                $this->addUsingAlias(TDemandePjCaPeer::ID_AGENT, $idAgent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgent['max'])) {
                $this->addUsingAlias(TDemandePjCaPeer::ID_AGENT, $idAgent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TDemandePjCaPeer::ID_AGENT, $idAgent, $comparison);
    }

    /**
     * Filter the query on the NOM_PJ column
     *
     * Example usage:
     * <code>
     * $query->filterByNomPj('fooValue');   // WHERE NOM_PJ = 'fooValue'
     * $query->filterByNomPj('%fooValue%'); // WHERE NOM_PJ LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomPj The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandePjCaQuery The current query, for fluid interface
     */
    public function filterByNomPj($nomPj = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomPj)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomPj)) {
                $nomPj = str_replace('*', '%', $nomPj);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TDemandePjCaPeer::NOM_PJ, $nomPj, $comparison);
    }

    /**
     * Filter the query on the DATE_CREATION column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCreation('2011-03-14'); // WHERE DATE_CREATION = '2011-03-14'
     * $query->filterByDateCreation('now'); // WHERE DATE_CREATION = '2011-03-14'
     * $query->filterByDateCreation(array('max' => 'yesterday')); // WHERE DATE_CREATION > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateCreation The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TDemandePjCaQuery The current query, for fluid interface
     */
    public function filterByDateCreation($dateCreation = null, $comparison = null)
    {
        if (is_array($dateCreation)) {
            $useMinMax = false;
            if (isset($dateCreation['min'])) {
                $this->addUsingAlias(TDemandePjCaPeer::DATE_CREATION, $dateCreation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCreation['max'])) {
                $this->addUsingAlias(TDemandePjCaPeer::DATE_CREATION, $dateCreation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TDemandePjCaPeer::DATE_CREATION, $dateCreation, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   TDemandePjCa $tDemandePjCa Object to remove from the list of results
     *
     * @return TDemandePjCaQuery The current query, for fluid interface
     */
    public function prune($tDemandePjCa = null)
    {
        if ($tDemandePjCa) {
            $this->addUsingAlias(TDemandePjCaPeer::ID_PJ_CA, $tDemandePjCa->getIdPjCa(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
