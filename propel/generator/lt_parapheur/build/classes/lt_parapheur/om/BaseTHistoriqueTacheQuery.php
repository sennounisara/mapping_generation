<?php


/**
 * Base class that represents a query for the 't_historique_tache' table.
 *
 * 
 *
 * @method THistoriqueTacheQuery orderByIdHistoriqueTache($order = Criteria::ASC) Order by the ID_HISTORIQUE_TACHE column
 * @method THistoriqueTacheQuery orderByIdTache($order = Criteria::ASC) Order by the ID_TACHE column
 * @method THistoriqueTacheQuery orderByIdDemande($order = Criteria::ASC) Order by the ID_DEMANDE column
 * @method THistoriqueTacheQuery orderByDateEcheancePrevisionnelle($order = Criteria::ASC) Order by the DATE_ECHEANCE_PREVISIONNELLE column
 * @method THistoriqueTacheQuery orderByDateEcheanceReelle($order = Criteria::ASC) Order by the DATE_ECHEANCE_REELLE column
 * @method THistoriqueTacheQuery orderByResponsable($order = Criteria::ASC) Order by the RESPONSABLE column
 * @method THistoriqueTacheQuery orderByTauxRealisation($order = Criteria::ASC) Order by the TAUX_REALISATION column
 * @method THistoriqueTacheQuery orderByIdAction($order = Criteria::ASC) Order by the ID_ACTION column
 * @method THistoriqueTacheQuery orderByIdStatut($order = Criteria::ASC) Order by the ID_STATUT column
 * @method THistoriqueTacheQuery orderByMotif($order = Criteria::ASC) Order by the MOTIF column
 * @method THistoriqueTacheQuery orderByIdAgent($order = Criteria::ASC) Order by the ID_AGENT column
 * @method THistoriqueTacheQuery orderByAgent($order = Criteria::ASC) Order by the AGENT column
 * @method THistoriqueTacheQuery orderByDateModification($order = Criteria::ASC) Order by the DATE_MODIFICATION column
 *
 * @method THistoriqueTacheQuery groupByIdHistoriqueTache() Group by the ID_HISTORIQUE_TACHE column
 * @method THistoriqueTacheQuery groupByIdTache() Group by the ID_TACHE column
 * @method THistoriqueTacheQuery groupByIdDemande() Group by the ID_DEMANDE column
 * @method THistoriqueTacheQuery groupByDateEcheancePrevisionnelle() Group by the DATE_ECHEANCE_PREVISIONNELLE column
 * @method THistoriqueTacheQuery groupByDateEcheanceReelle() Group by the DATE_ECHEANCE_REELLE column
 * @method THistoriqueTacheQuery groupByResponsable() Group by the RESPONSABLE column
 * @method THistoriqueTacheQuery groupByTauxRealisation() Group by the TAUX_REALISATION column
 * @method THistoriqueTacheQuery groupByIdAction() Group by the ID_ACTION column
 * @method THistoriqueTacheQuery groupByIdStatut() Group by the ID_STATUT column
 * @method THistoriqueTacheQuery groupByMotif() Group by the MOTIF column
 * @method THistoriqueTacheQuery groupByIdAgent() Group by the ID_AGENT column
 * @method THistoriqueTacheQuery groupByAgent() Group by the AGENT column
 * @method THistoriqueTacheQuery groupByDateModification() Group by the DATE_MODIFICATION column
 *
 * @method THistoriqueTacheQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method THistoriqueTacheQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method THistoriqueTacheQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method THistoriqueTache findOne(PropelPDO $con = null) Return the first THistoriqueTache matching the query
 * @method THistoriqueTache findOneOrCreate(PropelPDO $con = null) Return the first THistoriqueTache matching the query, or a new THistoriqueTache object populated from the query conditions when no match is found
 *
 * @method THistoriqueTache findOneByIdTache(int $ID_TACHE) Return the first THistoriqueTache filtered by the ID_TACHE column
 * @method THistoriqueTache findOneByIdDemande(int $ID_DEMANDE) Return the first THistoriqueTache filtered by the ID_DEMANDE column
 * @method THistoriqueTache findOneByDateEcheancePrevisionnelle(string $DATE_ECHEANCE_PREVISIONNELLE) Return the first THistoriqueTache filtered by the DATE_ECHEANCE_PREVISIONNELLE column
 * @method THistoriqueTache findOneByDateEcheanceReelle(string $DATE_ECHEANCE_REELLE) Return the first THistoriqueTache filtered by the DATE_ECHEANCE_REELLE column
 * @method THistoriqueTache findOneByResponsable(string $RESPONSABLE) Return the first THistoriqueTache filtered by the RESPONSABLE column
 * @method THistoriqueTache findOneByTauxRealisation(double $TAUX_REALISATION) Return the first THistoriqueTache filtered by the TAUX_REALISATION column
 * @method THistoriqueTache findOneByIdAction(int $ID_ACTION) Return the first THistoriqueTache filtered by the ID_ACTION column
 * @method THistoriqueTache findOneByIdStatut(int $ID_STATUT) Return the first THistoriqueTache filtered by the ID_STATUT column
 * @method THistoriqueTache findOneByMotif(string $MOTIF) Return the first THistoriqueTache filtered by the MOTIF column
 * @method THistoriqueTache findOneByIdAgent(int $ID_AGENT) Return the first THistoriqueTache filtered by the ID_AGENT column
 * @method THistoriqueTache findOneByAgent(string $AGENT) Return the first THistoriqueTache filtered by the AGENT column
 * @method THistoriqueTache findOneByDateModification(string $DATE_MODIFICATION) Return the first THistoriqueTache filtered by the DATE_MODIFICATION column
 *
 * @method array findByIdHistoriqueTache(int $ID_HISTORIQUE_TACHE) Return THistoriqueTache objects filtered by the ID_HISTORIQUE_TACHE column
 * @method array findByIdTache(int $ID_TACHE) Return THistoriqueTache objects filtered by the ID_TACHE column
 * @method array findByIdDemande(int $ID_DEMANDE) Return THistoriqueTache objects filtered by the ID_DEMANDE column
 * @method array findByDateEcheancePrevisionnelle(string $DATE_ECHEANCE_PREVISIONNELLE) Return THistoriqueTache objects filtered by the DATE_ECHEANCE_PREVISIONNELLE column
 * @method array findByDateEcheanceReelle(string $DATE_ECHEANCE_REELLE) Return THistoriqueTache objects filtered by the DATE_ECHEANCE_REELLE column
 * @method array findByResponsable(string $RESPONSABLE) Return THistoriqueTache objects filtered by the RESPONSABLE column
 * @method array findByTauxRealisation(double $TAUX_REALISATION) Return THistoriqueTache objects filtered by the TAUX_REALISATION column
 * @method array findByIdAction(int $ID_ACTION) Return THistoriqueTache objects filtered by the ID_ACTION column
 * @method array findByIdStatut(int $ID_STATUT) Return THistoriqueTache objects filtered by the ID_STATUT column
 * @method array findByMotif(string $MOTIF) Return THistoriqueTache objects filtered by the MOTIF column
 * @method array findByIdAgent(int $ID_AGENT) Return THistoriqueTache objects filtered by the ID_AGENT column
 * @method array findByAgent(string $AGENT) Return THistoriqueTache objects filtered by the AGENT column
 * @method array findByDateModification(string $DATE_MODIFICATION) Return THistoriqueTache objects filtered by the DATE_MODIFICATION column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseTHistoriqueTacheQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTHistoriqueTacheQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'THistoriqueTache', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new THistoriqueTacheQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   THistoriqueTacheQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return THistoriqueTacheQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof THistoriqueTacheQuery) {
            return $criteria;
        }
        $query = new THistoriqueTacheQuery();
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
     * @return   THistoriqueTache|THistoriqueTache[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = THistoriqueTachePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(THistoriqueTachePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 THistoriqueTache A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdHistoriqueTache($key, $con = null)
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
     * @return                 THistoriqueTache A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_HISTORIQUE_TACHE`, `ID_TACHE`, `ID_DEMANDE`, `DATE_ECHEANCE_PREVISIONNELLE`, `DATE_ECHEANCE_REELLE`, `RESPONSABLE`, `TAUX_REALISATION`, `ID_ACTION`, `ID_STATUT`, `MOTIF`, `ID_AGENT`, `AGENT`, `DATE_MODIFICATION` FROM `t_historique_tache` WHERE `ID_HISTORIQUE_TACHE` = :p0';
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
            $obj = new THistoriqueTache();
            $obj->hydrate($row);
            THistoriqueTachePeer::addInstanceToPool($obj, (string) $key);
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
     * @return THistoriqueTache|THistoriqueTache[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|THistoriqueTache[]|mixed the list of results, formatted by the current formatter
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
     * @return THistoriqueTacheQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(THistoriqueTachePeer::ID_HISTORIQUE_TACHE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return THistoriqueTacheQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(THistoriqueTachePeer::ID_HISTORIQUE_TACHE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID_HISTORIQUE_TACHE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdHistoriqueTache(1234); // WHERE ID_HISTORIQUE_TACHE = 1234
     * $query->filterByIdHistoriqueTache(array(12, 34)); // WHERE ID_HISTORIQUE_TACHE IN (12, 34)
     * $query->filterByIdHistoriqueTache(array('min' => 12)); // WHERE ID_HISTORIQUE_TACHE >= 12
     * $query->filterByIdHistoriqueTache(array('max' => 12)); // WHERE ID_HISTORIQUE_TACHE <= 12
     * </code>
     *
     * @param     mixed $idHistoriqueTache The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return THistoriqueTacheQuery The current query, for fluid interface
     */
    public function filterByIdHistoriqueTache($idHistoriqueTache = null, $comparison = null)
    {
        if (is_array($idHistoriqueTache)) {
            $useMinMax = false;
            if (isset($idHistoriqueTache['min'])) {
                $this->addUsingAlias(THistoriqueTachePeer::ID_HISTORIQUE_TACHE, $idHistoriqueTache['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idHistoriqueTache['max'])) {
                $this->addUsingAlias(THistoriqueTachePeer::ID_HISTORIQUE_TACHE, $idHistoriqueTache['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(THistoriqueTachePeer::ID_HISTORIQUE_TACHE, $idHistoriqueTache, $comparison);
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
     * @return THistoriqueTacheQuery The current query, for fluid interface
     */
    public function filterByIdTache($idTache = null, $comparison = null)
    {
        if (is_array($idTache)) {
            $useMinMax = false;
            if (isset($idTache['min'])) {
                $this->addUsingAlias(THistoriqueTachePeer::ID_TACHE, $idTache['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTache['max'])) {
                $this->addUsingAlias(THistoriqueTachePeer::ID_TACHE, $idTache['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(THistoriqueTachePeer::ID_TACHE, $idTache, $comparison);
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
     * @return THistoriqueTacheQuery The current query, for fluid interface
     */
    public function filterByIdDemande($idDemande = null, $comparison = null)
    {
        if (is_array($idDemande)) {
            $useMinMax = false;
            if (isset($idDemande['min'])) {
                $this->addUsingAlias(THistoriqueTachePeer::ID_DEMANDE, $idDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDemande['max'])) {
                $this->addUsingAlias(THistoriqueTachePeer::ID_DEMANDE, $idDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(THistoriqueTachePeer::ID_DEMANDE, $idDemande, $comparison);
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
     * @return THistoriqueTacheQuery The current query, for fluid interface
     */
    public function filterByDateEcheancePrevisionnelle($dateEcheancePrevisionnelle = null, $comparison = null)
    {
        if (is_array($dateEcheancePrevisionnelle)) {
            $useMinMax = false;
            if (isset($dateEcheancePrevisionnelle['min'])) {
                $this->addUsingAlias(THistoriqueTachePeer::DATE_ECHEANCE_PREVISIONNELLE, $dateEcheancePrevisionnelle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateEcheancePrevisionnelle['max'])) {
                $this->addUsingAlias(THistoriqueTachePeer::DATE_ECHEANCE_PREVISIONNELLE, $dateEcheancePrevisionnelle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(THistoriqueTachePeer::DATE_ECHEANCE_PREVISIONNELLE, $dateEcheancePrevisionnelle, $comparison);
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
     * @return THistoriqueTacheQuery The current query, for fluid interface
     */
    public function filterByDateEcheanceReelle($dateEcheanceReelle = null, $comparison = null)
    {
        if (is_array($dateEcheanceReelle)) {
            $useMinMax = false;
            if (isset($dateEcheanceReelle['min'])) {
                $this->addUsingAlias(THistoriqueTachePeer::DATE_ECHEANCE_REELLE, $dateEcheanceReelle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateEcheanceReelle['max'])) {
                $this->addUsingAlias(THistoriqueTachePeer::DATE_ECHEANCE_REELLE, $dateEcheanceReelle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(THistoriqueTachePeer::DATE_ECHEANCE_REELLE, $dateEcheanceReelle, $comparison);
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
     * @return THistoriqueTacheQuery The current query, for fluid interface
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

        return $this->addUsingAlias(THistoriqueTachePeer::RESPONSABLE, $responsable, $comparison);
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
     * @return THistoriqueTacheQuery The current query, for fluid interface
     */
    public function filterByTauxRealisation($tauxRealisation = null, $comparison = null)
    {
        if (is_array($tauxRealisation)) {
            $useMinMax = false;
            if (isset($tauxRealisation['min'])) {
                $this->addUsingAlias(THistoriqueTachePeer::TAUX_REALISATION, $tauxRealisation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tauxRealisation['max'])) {
                $this->addUsingAlias(THistoriqueTachePeer::TAUX_REALISATION, $tauxRealisation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(THistoriqueTachePeer::TAUX_REALISATION, $tauxRealisation, $comparison);
    }

    /**
     * Filter the query on the ID_ACTION column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAction(1234); // WHERE ID_ACTION = 1234
     * $query->filterByIdAction(array(12, 34)); // WHERE ID_ACTION IN (12, 34)
     * $query->filterByIdAction(array('min' => 12)); // WHERE ID_ACTION >= 12
     * $query->filterByIdAction(array('max' => 12)); // WHERE ID_ACTION <= 12
     * </code>
     *
     * @param     mixed $idAction The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return THistoriqueTacheQuery The current query, for fluid interface
     */
    public function filterByIdAction($idAction = null, $comparison = null)
    {
        if (is_array($idAction)) {
            $useMinMax = false;
            if (isset($idAction['min'])) {
                $this->addUsingAlias(THistoriqueTachePeer::ID_ACTION, $idAction['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAction['max'])) {
                $this->addUsingAlias(THistoriqueTachePeer::ID_ACTION, $idAction['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(THistoriqueTachePeer::ID_ACTION, $idAction, $comparison);
    }

    /**
     * Filter the query on the ID_STATUT column
     *
     * Example usage:
     * <code>
     * $query->filterByIdStatut(1234); // WHERE ID_STATUT = 1234
     * $query->filterByIdStatut(array(12, 34)); // WHERE ID_STATUT IN (12, 34)
     * $query->filterByIdStatut(array('min' => 12)); // WHERE ID_STATUT >= 12
     * $query->filterByIdStatut(array('max' => 12)); // WHERE ID_STATUT <= 12
     * </code>
     *
     * @param     mixed $idStatut The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return THistoriqueTacheQuery The current query, for fluid interface
     */
    public function filterByIdStatut($idStatut = null, $comparison = null)
    {
        if (is_array($idStatut)) {
            $useMinMax = false;
            if (isset($idStatut['min'])) {
                $this->addUsingAlias(THistoriqueTachePeer::ID_STATUT, $idStatut['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idStatut['max'])) {
                $this->addUsingAlias(THistoriqueTachePeer::ID_STATUT, $idStatut['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(THistoriqueTachePeer::ID_STATUT, $idStatut, $comparison);
    }

    /**
     * Filter the query on the MOTIF column
     *
     * Example usage:
     * <code>
     * $query->filterByMotif('fooValue');   // WHERE MOTIF = 'fooValue'
     * $query->filterByMotif('%fooValue%'); // WHERE MOTIF LIKE '%fooValue%'
     * </code>
     *
     * @param     string $motif The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return THistoriqueTacheQuery The current query, for fluid interface
     */
    public function filterByMotif($motif = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($motif)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $motif)) {
                $motif = str_replace('*', '%', $motif);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(THistoriqueTachePeer::MOTIF, $motif, $comparison);
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
     * @return THistoriqueTacheQuery The current query, for fluid interface
     */
    public function filterByIdAgent($idAgent = null, $comparison = null)
    {
        if (is_array($idAgent)) {
            $useMinMax = false;
            if (isset($idAgent['min'])) {
                $this->addUsingAlias(THistoriqueTachePeer::ID_AGENT, $idAgent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgent['max'])) {
                $this->addUsingAlias(THistoriqueTachePeer::ID_AGENT, $idAgent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(THistoriqueTachePeer::ID_AGENT, $idAgent, $comparison);
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
     * @return THistoriqueTacheQuery The current query, for fluid interface
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

        return $this->addUsingAlias(THistoriqueTachePeer::AGENT, $agent, $comparison);
    }

    /**
     * Filter the query on the DATE_MODIFICATION column
     *
     * Example usage:
     * <code>
     * $query->filterByDateModification('2011-03-14'); // WHERE DATE_MODIFICATION = '2011-03-14'
     * $query->filterByDateModification('now'); // WHERE DATE_MODIFICATION = '2011-03-14'
     * $query->filterByDateModification(array('max' => 'yesterday')); // WHERE DATE_MODIFICATION > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateModification The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return THistoriqueTacheQuery The current query, for fluid interface
     */
    public function filterByDateModification($dateModification = null, $comparison = null)
    {
        if (is_array($dateModification)) {
            $useMinMax = false;
            if (isset($dateModification['min'])) {
                $this->addUsingAlias(THistoriqueTachePeer::DATE_MODIFICATION, $dateModification['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateModification['max'])) {
                $this->addUsingAlias(THistoriqueTachePeer::DATE_MODIFICATION, $dateModification['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(THistoriqueTachePeer::DATE_MODIFICATION, $dateModification, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   THistoriqueTache $tHistoriqueTache Object to remove from the list of results
     *
     * @return THistoriqueTacheQuery The current query, for fluid interface
     */
    public function prune($tHistoriqueTache = null)
    {
        if ($tHistoriqueTache) {
            $this->addUsingAlias(THistoriqueTachePeer::ID_HISTORIQUE_TACHE, $tHistoriqueTache->getIdHistoriqueTache(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
