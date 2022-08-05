<?php


/**
 * Base class that represents a query for the 't_tache' table.
 *
 * 
 *
 * @method TTacheQuery orderByIdTache($order = Criteria::ASC) Order by the ID_TACHE column
 * @method TTacheQuery orderByIntitule($order = Criteria::ASC) Order by the INTITULE column
 * @method TTacheQuery orderByDateEcheancePrevisionnelle($order = Criteria::ASC) Order by the DATE_ECHEANCE_PREVISIONNELLE column
 * @method TTacheQuery orderByDateEcheanceReelle($order = Criteria::ASC) Order by the DATE_ECHEANCE_REELLE column
 * @method TTacheQuery orderByResponsable($order = Criteria::ASC) Order by the RESPONSABLE column
 * @method TTacheQuery orderByTauxRealisation($order = Criteria::ASC) Order by the TAUX_REALISATION column
 * @method TTacheQuery orderByIdDemande($order = Criteria::ASC) Order by the ID_DEMANDE column
 * @method TTacheQuery orderByIdAgent($order = Criteria::ASC) Order by the ID_AGENT column
 * @method TTacheQuery orderByAgent($order = Criteria::ASC) Order by the AGENT column
 *
 * @method TTacheQuery groupByIdTache() Group by the ID_TACHE column
 * @method TTacheQuery groupByIntitule() Group by the INTITULE column
 * @method TTacheQuery groupByDateEcheancePrevisionnelle() Group by the DATE_ECHEANCE_PREVISIONNELLE column
 * @method TTacheQuery groupByDateEcheanceReelle() Group by the DATE_ECHEANCE_REELLE column
 * @method TTacheQuery groupByResponsable() Group by the RESPONSABLE column
 * @method TTacheQuery groupByTauxRealisation() Group by the TAUX_REALISATION column
 * @method TTacheQuery groupByIdDemande() Group by the ID_DEMANDE column
 * @method TTacheQuery groupByIdAgent() Group by the ID_AGENT column
 * @method TTacheQuery groupByAgent() Group by the AGENT column
 *
 * @method TTacheQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TTacheQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TTacheQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TTache findOne(PropelPDO $con = null) Return the first TTache matching the query
 * @method TTache findOneOrCreate(PropelPDO $con = null) Return the first TTache matching the query, or a new TTache object populated from the query conditions when no match is found
 *
 * @method TTache findOneByIntitule(string $INTITULE) Return the first TTache filtered by the INTITULE column
 * @method TTache findOneByDateEcheancePrevisionnelle(string $DATE_ECHEANCE_PREVISIONNELLE) Return the first TTache filtered by the DATE_ECHEANCE_PREVISIONNELLE column
 * @method TTache findOneByDateEcheanceReelle(string $DATE_ECHEANCE_REELLE) Return the first TTache filtered by the DATE_ECHEANCE_REELLE column
 * @method TTache findOneByResponsable(string $RESPONSABLE) Return the first TTache filtered by the RESPONSABLE column
 * @method TTache findOneByTauxRealisation(double $TAUX_REALISATION) Return the first TTache filtered by the TAUX_REALISATION column
 * @method TTache findOneByIdDemande(int $ID_DEMANDE) Return the first TTache filtered by the ID_DEMANDE column
 * @method TTache findOneByIdAgent(int $ID_AGENT) Return the first TTache filtered by the ID_AGENT column
 * @method TTache findOneByAgent(string $AGENT) Return the first TTache filtered by the AGENT column
 *
 * @method array findByIdTache(int $ID_TACHE) Return TTache objects filtered by the ID_TACHE column
 * @method array findByIntitule(string $INTITULE) Return TTache objects filtered by the INTITULE column
 * @method array findByDateEcheancePrevisionnelle(string $DATE_ECHEANCE_PREVISIONNELLE) Return TTache objects filtered by the DATE_ECHEANCE_PREVISIONNELLE column
 * @method array findByDateEcheanceReelle(string $DATE_ECHEANCE_REELLE) Return TTache objects filtered by the DATE_ECHEANCE_REELLE column
 * @method array findByResponsable(string $RESPONSABLE) Return TTache objects filtered by the RESPONSABLE column
 * @method array findByTauxRealisation(double $TAUX_REALISATION) Return TTache objects filtered by the TAUX_REALISATION column
 * @method array findByIdDemande(int $ID_DEMANDE) Return TTache objects filtered by the ID_DEMANDE column
 * @method array findByIdAgent(int $ID_AGENT) Return TTache objects filtered by the ID_AGENT column
 * @method array findByAgent(string $AGENT) Return TTache objects filtered by the AGENT column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseTTacheQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTTacheQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'TTache', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TTacheQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TTacheQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TTacheQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TTacheQuery) {
            return $criteria;
        }
        $query = new TTacheQuery();
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
     * @return   TTache|TTache[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TTachePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TTachePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TTache A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdTache($key, $con = null)
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
     * @return                 TTache A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_TACHE`, `INTITULE`, `DATE_ECHEANCE_PREVISIONNELLE`, `DATE_ECHEANCE_REELLE`, `RESPONSABLE`, `TAUX_REALISATION`, `ID_DEMANDE`, `ID_AGENT`, `AGENT` FROM `t_tache` WHERE `ID_TACHE` = :p0';
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
            $obj = new TTache();
            $obj->hydrate($row);
            TTachePeer::addInstanceToPool($obj, (string) $key);
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
     * @return TTache|TTache[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TTache[]|mixed the list of results, formatted by the current formatter
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
     * @return TTacheQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TTachePeer::ID_TACHE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TTacheQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TTachePeer::ID_TACHE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID_TACHE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTache(1234); // WHERE ID_TACHE = 1234
     * $query->filterByIdTache(array(12, 34)); // WHERE ID_TACHE IN (12, 34)
     * $query->filterByIdTache(array('min' => 12)); // WHERE ID_TACHE >= 12
     * $query->filterByIdTache(array('max' => 12)); // WHERE ID_TACHE <= 12
     * </code>
     *
     * @param     mixed $idTache The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TTacheQuery The current query, for fluid interface
     */
    public function filterByIdTache($idTache = null, $comparison = null)
    {
        if (is_array($idTache)) {
            $useMinMax = false;
            if (isset($idTache['min'])) {
                $this->addUsingAlias(TTachePeer::ID_TACHE, $idTache['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTache['max'])) {
                $this->addUsingAlias(TTachePeer::ID_TACHE, $idTache['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TTachePeer::ID_TACHE, $idTache, $comparison);
    }

    /**
     * Filter the query on the INTITULE column
     *
     * Example usage:
     * <code>
     * $query->filterByIntitule('fooValue');   // WHERE INTITULE = 'fooValue'
     * $query->filterByIntitule('%fooValue%'); // WHERE INTITULE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intitule The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TTacheQuery The current query, for fluid interface
     */
    public function filterByIntitule($intitule = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($intitule)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $intitule)) {
                $intitule = str_replace('*', '%', $intitule);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TTachePeer::INTITULE, $intitule, $comparison);
    }

    /**
     * Filter the query on the DATE_ECHEANCE_PREVISIONNELLE column
     *
     * Example usage:
     * <code>
     * $query->filterByDateEcheancePrevisionnelle('2011-03-14'); // WHERE DATE_ECHEANCE_PREVISIONNELLE = '2011-03-14'
     * $query->filterByDateEcheancePrevisionnelle('now'); // WHERE DATE_ECHEANCE_PREVISIONNELLE = '2011-03-14'
     * $query->filterByDateEcheancePrevisionnelle(array('max' => 'yesterday')); // WHERE DATE_ECHEANCE_PREVISIONNELLE > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateEcheancePrevisionnelle The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TTacheQuery The current query, for fluid interface
     */
    public function filterByDateEcheancePrevisionnelle($dateEcheancePrevisionnelle = null, $comparison = null)
    {
        if (is_array($dateEcheancePrevisionnelle)) {
            $useMinMax = false;
            if (isset($dateEcheancePrevisionnelle['min'])) {
                $this->addUsingAlias(TTachePeer::DATE_ECHEANCE_PREVISIONNELLE, $dateEcheancePrevisionnelle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateEcheancePrevisionnelle['max'])) {
                $this->addUsingAlias(TTachePeer::DATE_ECHEANCE_PREVISIONNELLE, $dateEcheancePrevisionnelle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TTachePeer::DATE_ECHEANCE_PREVISIONNELLE, $dateEcheancePrevisionnelle, $comparison);
    }

    /**
     * Filter the query on the DATE_ECHEANCE_REELLE column
     *
     * Example usage:
     * <code>
     * $query->filterByDateEcheanceReelle('2011-03-14'); // WHERE DATE_ECHEANCE_REELLE = '2011-03-14'
     * $query->filterByDateEcheanceReelle('now'); // WHERE DATE_ECHEANCE_REELLE = '2011-03-14'
     * $query->filterByDateEcheanceReelle(array('max' => 'yesterday')); // WHERE DATE_ECHEANCE_REELLE > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateEcheanceReelle The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TTacheQuery The current query, for fluid interface
     */
    public function filterByDateEcheanceReelle($dateEcheanceReelle = null, $comparison = null)
    {
        if (is_array($dateEcheanceReelle)) {
            $useMinMax = false;
            if (isset($dateEcheanceReelle['min'])) {
                $this->addUsingAlias(TTachePeer::DATE_ECHEANCE_REELLE, $dateEcheanceReelle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateEcheanceReelle['max'])) {
                $this->addUsingAlias(TTachePeer::DATE_ECHEANCE_REELLE, $dateEcheanceReelle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TTachePeer::DATE_ECHEANCE_REELLE, $dateEcheanceReelle, $comparison);
    }

    /**
     * Filter the query on the RESPONSABLE column
     *
     * Example usage:
     * <code>
     * $query->filterByResponsable('fooValue');   // WHERE RESPONSABLE = 'fooValue'
     * $query->filterByResponsable('%fooValue%'); // WHERE RESPONSABLE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $responsable The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TTacheQuery The current query, for fluid interface
     */
    public function filterByResponsable($responsable = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($responsable)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $responsable)) {
                $responsable = str_replace('*', '%', $responsable);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TTachePeer::RESPONSABLE, $responsable, $comparison);
    }

    /**
     * Filter the query on the TAUX_REALISATION column
     *
     * Example usage:
     * <code>
     * $query->filterByTauxRealisation(1234); // WHERE TAUX_REALISATION = 1234
     * $query->filterByTauxRealisation(array(12, 34)); // WHERE TAUX_REALISATION IN (12, 34)
     * $query->filterByTauxRealisation(array('min' => 12)); // WHERE TAUX_REALISATION >= 12
     * $query->filterByTauxRealisation(array('max' => 12)); // WHERE TAUX_REALISATION <= 12
     * </code>
     *
     * @param     mixed $tauxRealisation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TTacheQuery The current query, for fluid interface
     */
    public function filterByTauxRealisation($tauxRealisation = null, $comparison = null)
    {
        if (is_array($tauxRealisation)) {
            $useMinMax = false;
            if (isset($tauxRealisation['min'])) {
                $this->addUsingAlias(TTachePeer::TAUX_REALISATION, $tauxRealisation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tauxRealisation['max'])) {
                $this->addUsingAlias(TTachePeer::TAUX_REALISATION, $tauxRealisation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TTachePeer::TAUX_REALISATION, $tauxRealisation, $comparison);
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
     * @return TTacheQuery The current query, for fluid interface
     */
    public function filterByIdDemande($idDemande = null, $comparison = null)
    {
        if (is_array($idDemande)) {
            $useMinMax = false;
            if (isset($idDemande['min'])) {
                $this->addUsingAlias(TTachePeer::ID_DEMANDE, $idDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDemande['max'])) {
                $this->addUsingAlias(TTachePeer::ID_DEMANDE, $idDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TTachePeer::ID_DEMANDE, $idDemande, $comparison);
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
     * @return TTacheQuery The current query, for fluid interface
     */
    public function filterByIdAgent($idAgent = null, $comparison = null)
    {
        if (is_array($idAgent)) {
            $useMinMax = false;
            if (isset($idAgent['min'])) {
                $this->addUsingAlias(TTachePeer::ID_AGENT, $idAgent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgent['max'])) {
                $this->addUsingAlias(TTachePeer::ID_AGENT, $idAgent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TTachePeer::ID_AGENT, $idAgent, $comparison);
    }

    /**
     * Filter the query on the AGENT column
     *
     * Example usage:
     * <code>
     * $query->filterByAgent('fooValue');   // WHERE AGENT = 'fooValue'
     * $query->filterByAgent('%fooValue%'); // WHERE AGENT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $agent The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TTacheQuery The current query, for fluid interface
     */
    public function filterByAgent($agent = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($agent)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $agent)) {
                $agent = str_replace('*', '%', $agent);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TTachePeer::AGENT, $agent, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   TTache $tTache Object to remove from the list of results
     *
     * @return TTacheQuery The current query, for fluid interface
     */
    public function prune($tTache = null)
    {
        if ($tTache) {
            $this->addUsingAlias(TTachePeer::ID_TACHE, $tTache->getIdTache(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
