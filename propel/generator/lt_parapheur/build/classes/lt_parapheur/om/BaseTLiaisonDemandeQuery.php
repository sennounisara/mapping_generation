<?php


/**
 * Base class that represents a query for the 't_liaison_demande' table.
 *
 * 
 *
 * @method TLiaisonDemandeQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method TLiaisonDemandeQuery orderByIdDemande($order = Criteria::ASC) Order by the ID_DEMANDE column
 * @method TLiaisonDemandeQuery orderByIdDemandeLie($order = Criteria::ASC) Order by the ID_DEMANDE_LIE column
 * @method TLiaisonDemandeQuery orderByTypeRelation($order = Criteria::ASC) Order by the TYPE_RELATION column
 * @method TLiaisonDemandeQuery orderByNumeroDemandeLie($order = Criteria::ASC) Order by the NUMERO_DEMANDE_LIE column
 * @method TLiaisonDemandeQuery orderByNumDemande($order = Criteria::ASC) Order by the NUM_DEMANDE column
 * @method TLiaisonDemandeQuery orderByIdAgent($order = Criteria::ASC) Order by the ID_AGENT column
 * @method TLiaisonDemandeQuery orderByIdAffaire($order = Criteria::ASC) Order by the ID_AFFAIRE column
 *
 * @method TLiaisonDemandeQuery groupById() Group by the ID column
 * @method TLiaisonDemandeQuery groupByIdDemande() Group by the ID_DEMANDE column
 * @method TLiaisonDemandeQuery groupByIdDemandeLie() Group by the ID_DEMANDE_LIE column
 * @method TLiaisonDemandeQuery groupByTypeRelation() Group by the TYPE_RELATION column
 * @method TLiaisonDemandeQuery groupByNumeroDemandeLie() Group by the NUMERO_DEMANDE_LIE column
 * @method TLiaisonDemandeQuery groupByNumDemande() Group by the NUM_DEMANDE column
 * @method TLiaisonDemandeQuery groupByIdAgent() Group by the ID_AGENT column
 * @method TLiaisonDemandeQuery groupByIdAffaire() Group by the ID_AFFAIRE column
 *
 * @method TLiaisonDemandeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TLiaisonDemandeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TLiaisonDemandeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TLiaisonDemande findOne(PropelPDO $con = null) Return the first TLiaisonDemande matching the query
 * @method TLiaisonDemande findOneOrCreate(PropelPDO $con = null) Return the first TLiaisonDemande matching the query, or a new TLiaisonDemande object populated from the query conditions when no match is found
 *
 * @method TLiaisonDemande findOneByIdDemande(int $ID_DEMANDE) Return the first TLiaisonDemande filtered by the ID_DEMANDE column
 * @method TLiaisonDemande findOneByIdDemandeLie(int $ID_DEMANDE_LIE) Return the first TLiaisonDemande filtered by the ID_DEMANDE_LIE column
 * @method TLiaisonDemande findOneByTypeRelation(int $TYPE_RELATION) Return the first TLiaisonDemande filtered by the TYPE_RELATION column
 * @method TLiaisonDemande findOneByNumeroDemandeLie(string $NUMERO_DEMANDE_LIE) Return the first TLiaisonDemande filtered by the NUMERO_DEMANDE_LIE column
 * @method TLiaisonDemande findOneByNumDemande(string $NUM_DEMANDE) Return the first TLiaisonDemande filtered by the NUM_DEMANDE column
 * @method TLiaisonDemande findOneByIdAgent(int $ID_AGENT) Return the first TLiaisonDemande filtered by the ID_AGENT column
 * @method TLiaisonDemande findOneByIdAffaire(int $ID_AFFAIRE) Return the first TLiaisonDemande filtered by the ID_AFFAIRE column
 *
 * @method array findById(int $ID) Return TLiaisonDemande objects filtered by the ID column
 * @method array findByIdDemande(int $ID_DEMANDE) Return TLiaisonDemande objects filtered by the ID_DEMANDE column
 * @method array findByIdDemandeLie(int $ID_DEMANDE_LIE) Return TLiaisonDemande objects filtered by the ID_DEMANDE_LIE column
 * @method array findByTypeRelation(int $TYPE_RELATION) Return TLiaisonDemande objects filtered by the TYPE_RELATION column
 * @method array findByNumeroDemandeLie(string $NUMERO_DEMANDE_LIE) Return TLiaisonDemande objects filtered by the NUMERO_DEMANDE_LIE column
 * @method array findByNumDemande(string $NUM_DEMANDE) Return TLiaisonDemande objects filtered by the NUM_DEMANDE column
 * @method array findByIdAgent(int $ID_AGENT) Return TLiaisonDemande objects filtered by the ID_AGENT column
 * @method array findByIdAffaire(int $ID_AFFAIRE) Return TLiaisonDemande objects filtered by the ID_AFFAIRE column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseTLiaisonDemandeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTLiaisonDemandeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'TLiaisonDemande', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TLiaisonDemandeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TLiaisonDemandeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TLiaisonDemandeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TLiaisonDemandeQuery) {
            return $criteria;
        }
        $query = new TLiaisonDemandeQuery();
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
     * @return   TLiaisonDemande|TLiaisonDemande[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TLiaisonDemandePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TLiaisonDemandePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TLiaisonDemande A model object, or null if the key is not found
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
     * @return                 TLiaisonDemande A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `ID_DEMANDE`, `ID_DEMANDE_LIE`, `TYPE_RELATION`, `NUMERO_DEMANDE_LIE`, `NUM_DEMANDE`, `ID_AGENT`, `ID_AFFAIRE` FROM `t_liaison_demande` WHERE `ID` = :p0';
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
            $obj = new TLiaisonDemande();
            $obj->hydrate($row);
            TLiaisonDemandePeer::addInstanceToPool($obj, (string) $key);
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
     * @return TLiaisonDemande|TLiaisonDemande[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TLiaisonDemande[]|mixed the list of results, formatted by the current formatter
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
     * @return TLiaisonDemandeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TLiaisonDemandePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TLiaisonDemandeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TLiaisonDemandePeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE ID = 1234
     * $query->filterById(array(12, 34)); // WHERE ID IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE ID >= 12
     * $query->filterById(array('max' => 12)); // WHERE ID <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TLiaisonDemandeQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(TLiaisonDemandePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(TLiaisonDemandePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TLiaisonDemandePeer::ID, $id, $comparison);
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
     * @return TLiaisonDemandeQuery The current query, for fluid interface
     */
    public function filterByIdDemande($idDemande = null, $comparison = null)
    {
        if (is_array($idDemande)) {
            $useMinMax = false;
            if (isset($idDemande['min'])) {
                $this->addUsingAlias(TLiaisonDemandePeer::ID_DEMANDE, $idDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDemande['max'])) {
                $this->addUsingAlias(TLiaisonDemandePeer::ID_DEMANDE, $idDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TLiaisonDemandePeer::ID_DEMANDE, $idDemande, $comparison);
    }

    /**
     * Filter the query on the ID_DEMANDE_LIE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDemandeLie(1234); // WHERE ID_DEMANDE_LIE = 1234
     * $query->filterByIdDemandeLie(array(12, 34)); // WHERE ID_DEMANDE_LIE IN (12, 34)
     * $query->filterByIdDemandeLie(array('min' => 12)); // WHERE ID_DEMANDE_LIE >= 12
     * $query->filterByIdDemandeLie(array('max' => 12)); // WHERE ID_DEMANDE_LIE <= 12
     * </code>
     *
     * @param     mixed $idDemandeLie The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TLiaisonDemandeQuery The current query, for fluid interface
     */
    public function filterByIdDemandeLie($idDemandeLie = null, $comparison = null)
    {
        if (is_array($idDemandeLie)) {
            $useMinMax = false;
            if (isset($idDemandeLie['min'])) {
                $this->addUsingAlias(TLiaisonDemandePeer::ID_DEMANDE_LIE, $idDemandeLie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDemandeLie['max'])) {
                $this->addUsingAlias(TLiaisonDemandePeer::ID_DEMANDE_LIE, $idDemandeLie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TLiaisonDemandePeer::ID_DEMANDE_LIE, $idDemandeLie, $comparison);
    }

    /**
     * Filter the query on the TYPE_RELATION column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeRelation(1234); // WHERE TYPE_RELATION = 1234
     * $query->filterByTypeRelation(array(12, 34)); // WHERE TYPE_RELATION IN (12, 34)
     * $query->filterByTypeRelation(array('min' => 12)); // WHERE TYPE_RELATION >= 12
     * $query->filterByTypeRelation(array('max' => 12)); // WHERE TYPE_RELATION <= 12
     * </code>
     *
     * @param     mixed $typeRelation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TLiaisonDemandeQuery The current query, for fluid interface
     */
    public function filterByTypeRelation($typeRelation = null, $comparison = null)
    {
        if (is_array($typeRelation)) {
            $useMinMax = false;
            if (isset($typeRelation['min'])) {
                $this->addUsingAlias(TLiaisonDemandePeer::TYPE_RELATION, $typeRelation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeRelation['max'])) {
                $this->addUsingAlias(TLiaisonDemandePeer::TYPE_RELATION, $typeRelation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TLiaisonDemandePeer::TYPE_RELATION, $typeRelation, $comparison);
    }

    /**
     * Filter the query on the NUMERO_DEMANDE_LIE column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeroDemandeLie('fooValue');   // WHERE NUMERO_DEMANDE_LIE = 'fooValue'
     * $query->filterByNumeroDemandeLie('%fooValue%'); // WHERE NUMERO_DEMANDE_LIE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numeroDemandeLie The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TLiaisonDemandeQuery The current query, for fluid interface
     */
    public function filterByNumeroDemandeLie($numeroDemandeLie = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numeroDemandeLie)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numeroDemandeLie)) {
                $numeroDemandeLie = str_replace('*', '%', $numeroDemandeLie);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TLiaisonDemandePeer::NUMERO_DEMANDE_LIE, $numeroDemandeLie, $comparison);
    }

    /**
     * Filter the query on the NUM_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByNumDemande('fooValue');   // WHERE NUM_DEMANDE = 'fooValue'
     * $query->filterByNumDemande('%fooValue%'); // WHERE NUM_DEMANDE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numDemande The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TLiaisonDemandeQuery The current query, for fluid interface
     */
    public function filterByNumDemande($numDemande = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numDemande)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numDemande)) {
                $numDemande = str_replace('*', '%', $numDemande);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TLiaisonDemandePeer::NUM_DEMANDE, $numDemande, $comparison);
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
     * @return TLiaisonDemandeQuery The current query, for fluid interface
     */
    public function filterByIdAgent($idAgent = null, $comparison = null)
    {
        if (is_array($idAgent)) {
            $useMinMax = false;
            if (isset($idAgent['min'])) {
                $this->addUsingAlias(TLiaisonDemandePeer::ID_AGENT, $idAgent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgent['max'])) {
                $this->addUsingAlias(TLiaisonDemandePeer::ID_AGENT, $idAgent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TLiaisonDemandePeer::ID_AGENT, $idAgent, $comparison);
    }

    /**
     * Filter the query on the ID_AFFAIRE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAffaire(1234); // WHERE ID_AFFAIRE = 1234
     * $query->filterByIdAffaire(array(12, 34)); // WHERE ID_AFFAIRE IN (12, 34)
     * $query->filterByIdAffaire(array('min' => 12)); // WHERE ID_AFFAIRE >= 12
     * $query->filterByIdAffaire(array('max' => 12)); // WHERE ID_AFFAIRE <= 12
     * </code>
     *
     * @param     mixed $idAffaire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TLiaisonDemandeQuery The current query, for fluid interface
     */
    public function filterByIdAffaire($idAffaire = null, $comparison = null)
    {
        if (is_array($idAffaire)) {
            $useMinMax = false;
            if (isset($idAffaire['min'])) {
                $this->addUsingAlias(TLiaisonDemandePeer::ID_AFFAIRE, $idAffaire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAffaire['max'])) {
                $this->addUsingAlias(TLiaisonDemandePeer::ID_AFFAIRE, $idAffaire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TLiaisonDemandePeer::ID_AFFAIRE, $idAffaire, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   TLiaisonDemande $tLiaisonDemande Object to remove from the list of results
     *
     * @return TLiaisonDemandeQuery The current query, for fluid interface
     */
    public function prune($tLiaisonDemande = null)
    {
        if ($tLiaisonDemande) {
            $this->addUsingAlias(TLiaisonDemandePeer::ID, $tLiaisonDemande->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
