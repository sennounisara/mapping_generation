<?php


/**
 * Base class that represents a query for the 'statistiques_par_entite' table.
 *
 * 
 *
 * @method StatistiquesParEntiteQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method StatistiquesParEntiteQuery orderByIdEntite($order = Criteria::ASC) Order by the ID_ENTITE column
 * @method StatistiquesParEntiteQuery orderByTotalReclamationsParMois($order = Criteria::ASC) Order by the TOTAL_RECLAMATIONS_PAR_MOIS column
 * @method StatistiquesParEntiteQuery orderByStatutGeneral($order = Criteria::ASC) Order by the STATUT_GENERAL column
 * @method StatistiquesParEntiteQuery orderByStatutDemande($order = Criteria::ASC) Order by the STATUT_DEMANDE column
 * @method StatistiquesParEntiteQuery orderByCumulAFinMois($order = Criteria::ASC) Order by the CUMUL_A_FIN_MOIS column
 * @method StatistiquesParEntiteQuery orderByEvolutionMois($order = Criteria::ASC) Order by the EVOLUTION_MOIS column
 * @method StatistiquesParEntiteQuery orderByIdStatistique($order = Criteria::ASC) Order by the ID_STATISTIQUE column
 * @method StatistiquesParEntiteQuery orderByAnnee($order = Criteria::ASC) Order by the ANNEE column
 * @method StatistiquesParEntiteQuery orderByMois($order = Criteria::ASC) Order by the MOIS column
 * @method StatistiquesParEntiteQuery orderBySiglePath($order = Criteria::ASC) Order by the SIGLE_PATH column
 * @method StatistiquesParEntiteQuery orderByTotalParMoisAllChild($order = Criteria::ASC) Order by the TOTAL_PAR_MOIS_ALL_CHILD column
 * @method StatistiquesParEntiteQuery orderByTotal($order = Criteria::ASC) Order by the TOTAL column
 * @method StatistiquesParEntiteQuery orderByTotalNonAffecte($order = Criteria::ASC) Order by the TOTAL_NON_AFFECTE column
 * @method StatistiquesParEntiteQuery orderByTotalHorsAttribution($order = Criteria::ASC) Order by the TOTAL_HORS_ATTRIBUTION column
 * @method StatistiquesParEntiteQuery orderByNiveauEntite($order = Criteria::ASC) Order by the NIVEAU_ENTITE column
 * @method StatistiquesParEntiteQuery orderByEvolutionAllChild($order = Criteria::ASC) Order by the EVOLUTION_ALL_CHILD column
 * @method StatistiquesParEntiteQuery orderByEvolutionTotal($order = Criteria::ASC) Order by the EVOLUTION_TOTAL column
 *
 * @method StatistiquesParEntiteQuery groupById() Group by the ID column
 * @method StatistiquesParEntiteQuery groupByIdEntite() Group by the ID_ENTITE column
 * @method StatistiquesParEntiteQuery groupByTotalReclamationsParMois() Group by the TOTAL_RECLAMATIONS_PAR_MOIS column
 * @method StatistiquesParEntiteQuery groupByStatutGeneral() Group by the STATUT_GENERAL column
 * @method StatistiquesParEntiteQuery groupByStatutDemande() Group by the STATUT_DEMANDE column
 * @method StatistiquesParEntiteQuery groupByCumulAFinMois() Group by the CUMUL_A_FIN_MOIS column
 * @method StatistiquesParEntiteQuery groupByEvolutionMois() Group by the EVOLUTION_MOIS column
 * @method StatistiquesParEntiteQuery groupByIdStatistique() Group by the ID_STATISTIQUE column
 * @method StatistiquesParEntiteQuery groupByAnnee() Group by the ANNEE column
 * @method StatistiquesParEntiteQuery groupByMois() Group by the MOIS column
 * @method StatistiquesParEntiteQuery groupBySiglePath() Group by the SIGLE_PATH column
 * @method StatistiquesParEntiteQuery groupByTotalParMoisAllChild() Group by the TOTAL_PAR_MOIS_ALL_CHILD column
 * @method StatistiquesParEntiteQuery groupByTotal() Group by the TOTAL column
 * @method StatistiquesParEntiteQuery groupByTotalNonAffecte() Group by the TOTAL_NON_AFFECTE column
 * @method StatistiquesParEntiteQuery groupByTotalHorsAttribution() Group by the TOTAL_HORS_ATTRIBUTION column
 * @method StatistiquesParEntiteQuery groupByNiveauEntite() Group by the NIVEAU_ENTITE column
 * @method StatistiquesParEntiteQuery groupByEvolutionAllChild() Group by the EVOLUTION_ALL_CHILD column
 * @method StatistiquesParEntiteQuery groupByEvolutionTotal() Group by the EVOLUTION_TOTAL column
 *
 * @method StatistiquesParEntiteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method StatistiquesParEntiteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method StatistiquesParEntiteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method StatistiquesParEntite findOne(PropelPDO $con = null) Return the first StatistiquesParEntite matching the query
 * @method StatistiquesParEntite findOneOrCreate(PropelPDO $con = null) Return the first StatistiquesParEntite matching the query, or a new StatistiquesParEntite object populated from the query conditions when no match is found
 *
 * @method StatistiquesParEntite findOneByIdEntite(int $ID_ENTITE) Return the first StatistiquesParEntite filtered by the ID_ENTITE column
 * @method StatistiquesParEntite findOneByTotalReclamationsParMois(int $TOTAL_RECLAMATIONS_PAR_MOIS) Return the first StatistiquesParEntite filtered by the TOTAL_RECLAMATIONS_PAR_MOIS column
 * @method StatistiquesParEntite findOneByStatutGeneral(int $STATUT_GENERAL) Return the first StatistiquesParEntite filtered by the STATUT_GENERAL column
 * @method StatistiquesParEntite findOneByStatutDemande(int $STATUT_DEMANDE) Return the first StatistiquesParEntite filtered by the STATUT_DEMANDE column
 * @method StatistiquesParEntite findOneByCumulAFinMois(int $CUMUL_A_FIN_MOIS) Return the first StatistiquesParEntite filtered by the CUMUL_A_FIN_MOIS column
 * @method StatistiquesParEntite findOneByEvolutionMois(int $EVOLUTION_MOIS) Return the first StatistiquesParEntite filtered by the EVOLUTION_MOIS column
 * @method StatistiquesParEntite findOneByIdStatistique(int $ID_STATISTIQUE) Return the first StatistiquesParEntite filtered by the ID_STATISTIQUE column
 * @method StatistiquesParEntite findOneByAnnee(int $ANNEE) Return the first StatistiquesParEntite filtered by the ANNEE column
 * @method StatistiquesParEntite findOneByMois(string $MOIS) Return the first StatistiquesParEntite filtered by the MOIS column
 * @method StatistiquesParEntite findOneBySiglePath(string $SIGLE_PATH) Return the first StatistiquesParEntite filtered by the SIGLE_PATH column
 * @method StatistiquesParEntite findOneByTotalParMoisAllChild(int $TOTAL_PAR_MOIS_ALL_CHILD) Return the first StatistiquesParEntite filtered by the TOTAL_PAR_MOIS_ALL_CHILD column
 * @method StatistiquesParEntite findOneByTotal(int $TOTAL) Return the first StatistiquesParEntite filtered by the TOTAL column
 * @method StatistiquesParEntite findOneByTotalNonAffecte(int $TOTAL_NON_AFFECTE) Return the first StatistiquesParEntite filtered by the TOTAL_NON_AFFECTE column
 * @method StatistiquesParEntite findOneByTotalHorsAttribution(int $TOTAL_HORS_ATTRIBUTION) Return the first StatistiquesParEntite filtered by the TOTAL_HORS_ATTRIBUTION column
 * @method StatistiquesParEntite findOneByNiveauEntite(string $NIVEAU_ENTITE) Return the first StatistiquesParEntite filtered by the NIVEAU_ENTITE column
 * @method StatistiquesParEntite findOneByEvolutionAllChild(int $EVOLUTION_ALL_CHILD) Return the first StatistiquesParEntite filtered by the EVOLUTION_ALL_CHILD column
 * @method StatistiquesParEntite findOneByEvolutionTotal(int $EVOLUTION_TOTAL) Return the first StatistiquesParEntite filtered by the EVOLUTION_TOTAL column
 *
 * @method array findById(int $ID) Return StatistiquesParEntite objects filtered by the ID column
 * @method array findByIdEntite(int $ID_ENTITE) Return StatistiquesParEntite objects filtered by the ID_ENTITE column
 * @method array findByTotalReclamationsParMois(int $TOTAL_RECLAMATIONS_PAR_MOIS) Return StatistiquesParEntite objects filtered by the TOTAL_RECLAMATIONS_PAR_MOIS column
 * @method array findByStatutGeneral(int $STATUT_GENERAL) Return StatistiquesParEntite objects filtered by the STATUT_GENERAL column
 * @method array findByStatutDemande(int $STATUT_DEMANDE) Return StatistiquesParEntite objects filtered by the STATUT_DEMANDE column
 * @method array findByCumulAFinMois(int $CUMUL_A_FIN_MOIS) Return StatistiquesParEntite objects filtered by the CUMUL_A_FIN_MOIS column
 * @method array findByEvolutionMois(int $EVOLUTION_MOIS) Return StatistiquesParEntite objects filtered by the EVOLUTION_MOIS column
 * @method array findByIdStatistique(int $ID_STATISTIQUE) Return StatistiquesParEntite objects filtered by the ID_STATISTIQUE column
 * @method array findByAnnee(int $ANNEE) Return StatistiquesParEntite objects filtered by the ANNEE column
 * @method array findByMois(string $MOIS) Return StatistiquesParEntite objects filtered by the MOIS column
 * @method array findBySiglePath(string $SIGLE_PATH) Return StatistiquesParEntite objects filtered by the SIGLE_PATH column
 * @method array findByTotalParMoisAllChild(int $TOTAL_PAR_MOIS_ALL_CHILD) Return StatistiquesParEntite objects filtered by the TOTAL_PAR_MOIS_ALL_CHILD column
 * @method array findByTotal(int $TOTAL) Return StatistiquesParEntite objects filtered by the TOTAL column
 * @method array findByTotalNonAffecte(int $TOTAL_NON_AFFECTE) Return StatistiquesParEntite objects filtered by the TOTAL_NON_AFFECTE column
 * @method array findByTotalHorsAttribution(int $TOTAL_HORS_ATTRIBUTION) Return StatistiquesParEntite objects filtered by the TOTAL_HORS_ATTRIBUTION column
 * @method array findByNiveauEntite(string $NIVEAU_ENTITE) Return StatistiquesParEntite objects filtered by the NIVEAU_ENTITE column
 * @method array findByEvolutionAllChild(int $EVOLUTION_ALL_CHILD) Return StatistiquesParEntite objects filtered by the EVOLUTION_ALL_CHILD column
 * @method array findByEvolutionTotal(int $EVOLUTION_TOTAL) Return StatistiquesParEntite objects filtered by the EVOLUTION_TOTAL column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseStatistiquesParEntiteQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseStatistiquesParEntiteQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'StatistiquesParEntite', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new StatistiquesParEntiteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   StatistiquesParEntiteQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return StatistiquesParEntiteQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof StatistiquesParEntiteQuery) {
            return $criteria;
        }
        $query = new StatistiquesParEntiteQuery();
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
     * @return   StatistiquesParEntite|StatistiquesParEntite[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = StatistiquesParEntitePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(StatistiquesParEntitePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 StatistiquesParEntite A model object, or null if the key is not found
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
     * @return                 StatistiquesParEntite A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `ID_ENTITE`, `TOTAL_RECLAMATIONS_PAR_MOIS`, `STATUT_GENERAL`, `STATUT_DEMANDE`, `CUMUL_A_FIN_MOIS`, `EVOLUTION_MOIS`, `ID_STATISTIQUE`, `ANNEE`, `MOIS`, `SIGLE_PATH`, `TOTAL_PAR_MOIS_ALL_CHILD`, `TOTAL`, `TOTAL_NON_AFFECTE`, `TOTAL_HORS_ATTRIBUTION`, `NIVEAU_ENTITE`, `EVOLUTION_ALL_CHILD`, `EVOLUTION_TOTAL` FROM `statistiques_par_entite` WHERE `ID` = :p0';
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
            $obj = new StatistiquesParEntite();
            $obj->hydrate($row);
            StatistiquesParEntitePeer::addInstanceToPool($obj, (string) $key);
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
     * @return StatistiquesParEntite|StatistiquesParEntite[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|StatistiquesParEntite[]|mixed the list of results, formatted by the current formatter
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
     * @return StatistiquesParEntiteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(StatistiquesParEntitePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return StatistiquesParEntiteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(StatistiquesParEntitePeer::ID, $keys, Criteria::IN);
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
     * @return StatistiquesParEntiteQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(StatistiquesParEntitePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(StatistiquesParEntitePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesParEntitePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the ID_ENTITE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntite(1234); // WHERE ID_ENTITE = 1234
     * $query->filterByIdEntite(array(12, 34)); // WHERE ID_ENTITE IN (12, 34)
     * $query->filterByIdEntite(array('min' => 12)); // WHERE ID_ENTITE >= 12
     * $query->filterByIdEntite(array('max' => 12)); // WHERE ID_ENTITE <= 12
     * </code>
     *
     * @param     mixed $idEntite The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesParEntiteQuery The current query, for fluid interface
     */
    public function filterByIdEntite($idEntite = null, $comparison = null)
    {
        if (is_array($idEntite)) {
            $useMinMax = false;
            if (isset($idEntite['min'])) {
                $this->addUsingAlias(StatistiquesParEntitePeer::ID_ENTITE, $idEntite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntite['max'])) {
                $this->addUsingAlias(StatistiquesParEntitePeer::ID_ENTITE, $idEntite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesParEntitePeer::ID_ENTITE, $idEntite, $comparison);
    }

    /**
     * Filter the query on the TOTAL_RECLAMATIONS_PAR_MOIS column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalReclamationsParMois(1234); // WHERE TOTAL_RECLAMATIONS_PAR_MOIS = 1234
     * $query->filterByTotalReclamationsParMois(array(12, 34)); // WHERE TOTAL_RECLAMATIONS_PAR_MOIS IN (12, 34)
     * $query->filterByTotalReclamationsParMois(array('min' => 12)); // WHERE TOTAL_RECLAMATIONS_PAR_MOIS >= 12
     * $query->filterByTotalReclamationsParMois(array('max' => 12)); // WHERE TOTAL_RECLAMATIONS_PAR_MOIS <= 12
     * </code>
     *
     * @param     mixed $totalReclamationsParMois The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesParEntiteQuery The current query, for fluid interface
     */
    public function filterByTotalReclamationsParMois($totalReclamationsParMois = null, $comparison = null)
    {
        if (is_array($totalReclamationsParMois)) {
            $useMinMax = false;
            if (isset($totalReclamationsParMois['min'])) {
                $this->addUsingAlias(StatistiquesParEntitePeer::TOTAL_RECLAMATIONS_PAR_MOIS, $totalReclamationsParMois['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalReclamationsParMois['max'])) {
                $this->addUsingAlias(StatistiquesParEntitePeer::TOTAL_RECLAMATIONS_PAR_MOIS, $totalReclamationsParMois['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesParEntitePeer::TOTAL_RECLAMATIONS_PAR_MOIS, $totalReclamationsParMois, $comparison);
    }

    /**
     * Filter the query on the STATUT_GENERAL column
     *
     * Example usage:
     * <code>
     * $query->filterByStatutGeneral(1234); // WHERE STATUT_GENERAL = 1234
     * $query->filterByStatutGeneral(array(12, 34)); // WHERE STATUT_GENERAL IN (12, 34)
     * $query->filterByStatutGeneral(array('min' => 12)); // WHERE STATUT_GENERAL >= 12
     * $query->filterByStatutGeneral(array('max' => 12)); // WHERE STATUT_GENERAL <= 12
     * </code>
     *
     * @param     mixed $statutGeneral The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesParEntiteQuery The current query, for fluid interface
     */
    public function filterByStatutGeneral($statutGeneral = null, $comparison = null)
    {
        if (is_array($statutGeneral)) {
            $useMinMax = false;
            if (isset($statutGeneral['min'])) {
                $this->addUsingAlias(StatistiquesParEntitePeer::STATUT_GENERAL, $statutGeneral['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statutGeneral['max'])) {
                $this->addUsingAlias(StatistiquesParEntitePeer::STATUT_GENERAL, $statutGeneral['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesParEntitePeer::STATUT_GENERAL, $statutGeneral, $comparison);
    }

    /**
     * Filter the query on the STATUT_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByStatutDemande(1234); // WHERE STATUT_DEMANDE = 1234
     * $query->filterByStatutDemande(array(12, 34)); // WHERE STATUT_DEMANDE IN (12, 34)
     * $query->filterByStatutDemande(array('min' => 12)); // WHERE STATUT_DEMANDE >= 12
     * $query->filterByStatutDemande(array('max' => 12)); // WHERE STATUT_DEMANDE <= 12
     * </code>
     *
     * @param     mixed $statutDemande The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesParEntiteQuery The current query, for fluid interface
     */
    public function filterByStatutDemande($statutDemande = null, $comparison = null)
    {
        if (is_array($statutDemande)) {
            $useMinMax = false;
            if (isset($statutDemande['min'])) {
                $this->addUsingAlias(StatistiquesParEntitePeer::STATUT_DEMANDE, $statutDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statutDemande['max'])) {
                $this->addUsingAlias(StatistiquesParEntitePeer::STATUT_DEMANDE, $statutDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesParEntitePeer::STATUT_DEMANDE, $statutDemande, $comparison);
    }

    /**
     * Filter the query on the CUMUL_A_FIN_MOIS column
     *
     * Example usage:
     * <code>
     * $query->filterByCumulAFinMois(1234); // WHERE CUMUL_A_FIN_MOIS = 1234
     * $query->filterByCumulAFinMois(array(12, 34)); // WHERE CUMUL_A_FIN_MOIS IN (12, 34)
     * $query->filterByCumulAFinMois(array('min' => 12)); // WHERE CUMUL_A_FIN_MOIS >= 12
     * $query->filterByCumulAFinMois(array('max' => 12)); // WHERE CUMUL_A_FIN_MOIS <= 12
     * </code>
     *
     * @param     mixed $cumulAFinMois The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesParEntiteQuery The current query, for fluid interface
     */
    public function filterByCumulAFinMois($cumulAFinMois = null, $comparison = null)
    {
        if (is_array($cumulAFinMois)) {
            $useMinMax = false;
            if (isset($cumulAFinMois['min'])) {
                $this->addUsingAlias(StatistiquesParEntitePeer::CUMUL_A_FIN_MOIS, $cumulAFinMois['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cumulAFinMois['max'])) {
                $this->addUsingAlias(StatistiquesParEntitePeer::CUMUL_A_FIN_MOIS, $cumulAFinMois['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesParEntitePeer::CUMUL_A_FIN_MOIS, $cumulAFinMois, $comparison);
    }

    /**
     * Filter the query on the EVOLUTION_MOIS column
     *
     * Example usage:
     * <code>
     * $query->filterByEvolutionMois(1234); // WHERE EVOLUTION_MOIS = 1234
     * $query->filterByEvolutionMois(array(12, 34)); // WHERE EVOLUTION_MOIS IN (12, 34)
     * $query->filterByEvolutionMois(array('min' => 12)); // WHERE EVOLUTION_MOIS >= 12
     * $query->filterByEvolutionMois(array('max' => 12)); // WHERE EVOLUTION_MOIS <= 12
     * </code>
     *
     * @param     mixed $evolutionMois The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesParEntiteQuery The current query, for fluid interface
     */
    public function filterByEvolutionMois($evolutionMois = null, $comparison = null)
    {
        if (is_array($evolutionMois)) {
            $useMinMax = false;
            if (isset($evolutionMois['min'])) {
                $this->addUsingAlias(StatistiquesParEntitePeer::EVOLUTION_MOIS, $evolutionMois['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($evolutionMois['max'])) {
                $this->addUsingAlias(StatistiquesParEntitePeer::EVOLUTION_MOIS, $evolutionMois['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesParEntitePeer::EVOLUTION_MOIS, $evolutionMois, $comparison);
    }

    /**
     * Filter the query on the ID_STATISTIQUE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdStatistique(1234); // WHERE ID_STATISTIQUE = 1234
     * $query->filterByIdStatistique(array(12, 34)); // WHERE ID_STATISTIQUE IN (12, 34)
     * $query->filterByIdStatistique(array('min' => 12)); // WHERE ID_STATISTIQUE >= 12
     * $query->filterByIdStatistique(array('max' => 12)); // WHERE ID_STATISTIQUE <= 12
     * </code>
     *
     * @param     mixed $idStatistique The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesParEntiteQuery The current query, for fluid interface
     */
    public function filterByIdStatistique($idStatistique = null, $comparison = null)
    {
        if (is_array($idStatistique)) {
            $useMinMax = false;
            if (isset($idStatistique['min'])) {
                $this->addUsingAlias(StatistiquesParEntitePeer::ID_STATISTIQUE, $idStatistique['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idStatistique['max'])) {
                $this->addUsingAlias(StatistiquesParEntitePeer::ID_STATISTIQUE, $idStatistique['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesParEntitePeer::ID_STATISTIQUE, $idStatistique, $comparison);
    }

    /**
     * Filter the query on the ANNEE column
     *
     * Example usage:
     * <code>
     * $query->filterByAnnee(1234); // WHERE ANNEE = 1234
     * $query->filterByAnnee(array(12, 34)); // WHERE ANNEE IN (12, 34)
     * $query->filterByAnnee(array('min' => 12)); // WHERE ANNEE >= 12
     * $query->filterByAnnee(array('max' => 12)); // WHERE ANNEE <= 12
     * </code>
     *
     * @param     mixed $annee The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesParEntiteQuery The current query, for fluid interface
     */
    public function filterByAnnee($annee = null, $comparison = null)
    {
        if (is_array($annee)) {
            $useMinMax = false;
            if (isset($annee['min'])) {
                $this->addUsingAlias(StatistiquesParEntitePeer::ANNEE, $annee['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($annee['max'])) {
                $this->addUsingAlias(StatistiquesParEntitePeer::ANNEE, $annee['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesParEntitePeer::ANNEE, $annee, $comparison);
    }

    /**
     * Filter the query on the MOIS column
     *
     * Example usage:
     * <code>
     * $query->filterByMois('fooValue');   // WHERE MOIS = 'fooValue'
     * $query->filterByMois('%fooValue%'); // WHERE MOIS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mois The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesParEntiteQuery The current query, for fluid interface
     */
    public function filterByMois($mois = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mois)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mois)) {
                $mois = str_replace('*', '%', $mois);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StatistiquesParEntitePeer::MOIS, $mois, $comparison);
    }

    /**
     * Filter the query on the SIGLE_PATH column
     *
     * Example usage:
     * <code>
     * $query->filterBySiglePath('fooValue');   // WHERE SIGLE_PATH = 'fooValue'
     * $query->filterBySiglePath('%fooValue%'); // WHERE SIGLE_PATH LIKE '%fooValue%'
     * </code>
     *
     * @param     string $siglePath The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesParEntiteQuery The current query, for fluid interface
     */
    public function filterBySiglePath($siglePath = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($siglePath)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $siglePath)) {
                $siglePath = str_replace('*', '%', $siglePath);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StatistiquesParEntitePeer::SIGLE_PATH, $siglePath, $comparison);
    }

    /**
     * Filter the query on the TOTAL_PAR_MOIS_ALL_CHILD column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalParMoisAllChild(1234); // WHERE TOTAL_PAR_MOIS_ALL_CHILD = 1234
     * $query->filterByTotalParMoisAllChild(array(12, 34)); // WHERE TOTAL_PAR_MOIS_ALL_CHILD IN (12, 34)
     * $query->filterByTotalParMoisAllChild(array('min' => 12)); // WHERE TOTAL_PAR_MOIS_ALL_CHILD >= 12
     * $query->filterByTotalParMoisAllChild(array('max' => 12)); // WHERE TOTAL_PAR_MOIS_ALL_CHILD <= 12
     * </code>
     *
     * @param     mixed $totalParMoisAllChild The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesParEntiteQuery The current query, for fluid interface
     */
    public function filterByTotalParMoisAllChild($totalParMoisAllChild = null, $comparison = null)
    {
        if (is_array($totalParMoisAllChild)) {
            $useMinMax = false;
            if (isset($totalParMoisAllChild['min'])) {
                $this->addUsingAlias(StatistiquesParEntitePeer::TOTAL_PAR_MOIS_ALL_CHILD, $totalParMoisAllChild['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalParMoisAllChild['max'])) {
                $this->addUsingAlias(StatistiquesParEntitePeer::TOTAL_PAR_MOIS_ALL_CHILD, $totalParMoisAllChild['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesParEntitePeer::TOTAL_PAR_MOIS_ALL_CHILD, $totalParMoisAllChild, $comparison);
    }

    /**
     * Filter the query on the TOTAL column
     *
     * Example usage:
     * <code>
     * $query->filterByTotal(1234); // WHERE TOTAL = 1234
     * $query->filterByTotal(array(12, 34)); // WHERE TOTAL IN (12, 34)
     * $query->filterByTotal(array('min' => 12)); // WHERE TOTAL >= 12
     * $query->filterByTotal(array('max' => 12)); // WHERE TOTAL <= 12
     * </code>
     *
     * @param     mixed $total The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesParEntiteQuery The current query, for fluid interface
     */
    public function filterByTotal($total = null, $comparison = null)
    {
        if (is_array($total)) {
            $useMinMax = false;
            if (isset($total['min'])) {
                $this->addUsingAlias(StatistiquesParEntitePeer::TOTAL, $total['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($total['max'])) {
                $this->addUsingAlias(StatistiquesParEntitePeer::TOTAL, $total['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesParEntitePeer::TOTAL, $total, $comparison);
    }

    /**
     * Filter the query on the TOTAL_NON_AFFECTE column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalNonAffecte(1234); // WHERE TOTAL_NON_AFFECTE = 1234
     * $query->filterByTotalNonAffecte(array(12, 34)); // WHERE TOTAL_NON_AFFECTE IN (12, 34)
     * $query->filterByTotalNonAffecte(array('min' => 12)); // WHERE TOTAL_NON_AFFECTE >= 12
     * $query->filterByTotalNonAffecte(array('max' => 12)); // WHERE TOTAL_NON_AFFECTE <= 12
     * </code>
     *
     * @param     mixed $totalNonAffecte The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesParEntiteQuery The current query, for fluid interface
     */
    public function filterByTotalNonAffecte($totalNonAffecte = null, $comparison = null)
    {
        if (is_array($totalNonAffecte)) {
            $useMinMax = false;
            if (isset($totalNonAffecte['min'])) {
                $this->addUsingAlias(StatistiquesParEntitePeer::TOTAL_NON_AFFECTE, $totalNonAffecte['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalNonAffecte['max'])) {
                $this->addUsingAlias(StatistiquesParEntitePeer::TOTAL_NON_AFFECTE, $totalNonAffecte['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesParEntitePeer::TOTAL_NON_AFFECTE, $totalNonAffecte, $comparison);
    }

    /**
     * Filter the query on the TOTAL_HORS_ATTRIBUTION column
     *
     * Example usage:
     * <code>
     * $query->filterByTotalHorsAttribution(1234); // WHERE TOTAL_HORS_ATTRIBUTION = 1234
     * $query->filterByTotalHorsAttribution(array(12, 34)); // WHERE TOTAL_HORS_ATTRIBUTION IN (12, 34)
     * $query->filterByTotalHorsAttribution(array('min' => 12)); // WHERE TOTAL_HORS_ATTRIBUTION >= 12
     * $query->filterByTotalHorsAttribution(array('max' => 12)); // WHERE TOTAL_HORS_ATTRIBUTION <= 12
     * </code>
     *
     * @param     mixed $totalHorsAttribution The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesParEntiteQuery The current query, for fluid interface
     */
    public function filterByTotalHorsAttribution($totalHorsAttribution = null, $comparison = null)
    {
        if (is_array($totalHorsAttribution)) {
            $useMinMax = false;
            if (isset($totalHorsAttribution['min'])) {
                $this->addUsingAlias(StatistiquesParEntitePeer::TOTAL_HORS_ATTRIBUTION, $totalHorsAttribution['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalHorsAttribution['max'])) {
                $this->addUsingAlias(StatistiquesParEntitePeer::TOTAL_HORS_ATTRIBUTION, $totalHorsAttribution['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesParEntitePeer::TOTAL_HORS_ATTRIBUTION, $totalHorsAttribution, $comparison);
    }

    /**
     * Filter the query on the NIVEAU_ENTITE column
     *
     * Example usage:
     * <code>
     * $query->filterByNiveauEntite('fooValue');   // WHERE NIVEAU_ENTITE = 'fooValue'
     * $query->filterByNiveauEntite('%fooValue%'); // WHERE NIVEAU_ENTITE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $niveauEntite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesParEntiteQuery The current query, for fluid interface
     */
    public function filterByNiveauEntite($niveauEntite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($niveauEntite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $niveauEntite)) {
                $niveauEntite = str_replace('*', '%', $niveauEntite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StatistiquesParEntitePeer::NIVEAU_ENTITE, $niveauEntite, $comparison);
    }

    /**
     * Filter the query on the EVOLUTION_ALL_CHILD column
     *
     * Example usage:
     * <code>
     * $query->filterByEvolutionAllChild(1234); // WHERE EVOLUTION_ALL_CHILD = 1234
     * $query->filterByEvolutionAllChild(array(12, 34)); // WHERE EVOLUTION_ALL_CHILD IN (12, 34)
     * $query->filterByEvolutionAllChild(array('min' => 12)); // WHERE EVOLUTION_ALL_CHILD >= 12
     * $query->filterByEvolutionAllChild(array('max' => 12)); // WHERE EVOLUTION_ALL_CHILD <= 12
     * </code>
     *
     * @param     mixed $evolutionAllChild The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesParEntiteQuery The current query, for fluid interface
     */
    public function filterByEvolutionAllChild($evolutionAllChild = null, $comparison = null)
    {
        if (is_array($evolutionAllChild)) {
            $useMinMax = false;
            if (isset($evolutionAllChild['min'])) {
                $this->addUsingAlias(StatistiquesParEntitePeer::EVOLUTION_ALL_CHILD, $evolutionAllChild['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($evolutionAllChild['max'])) {
                $this->addUsingAlias(StatistiquesParEntitePeer::EVOLUTION_ALL_CHILD, $evolutionAllChild['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesParEntitePeer::EVOLUTION_ALL_CHILD, $evolutionAllChild, $comparison);
    }

    /**
     * Filter the query on the EVOLUTION_TOTAL column
     *
     * Example usage:
     * <code>
     * $query->filterByEvolutionTotal(1234); // WHERE EVOLUTION_TOTAL = 1234
     * $query->filterByEvolutionTotal(array(12, 34)); // WHERE EVOLUTION_TOTAL IN (12, 34)
     * $query->filterByEvolutionTotal(array('min' => 12)); // WHERE EVOLUTION_TOTAL >= 12
     * $query->filterByEvolutionTotal(array('max' => 12)); // WHERE EVOLUTION_TOTAL <= 12
     * </code>
     *
     * @param     mixed $evolutionTotal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesParEntiteQuery The current query, for fluid interface
     */
    public function filterByEvolutionTotal($evolutionTotal = null, $comparison = null)
    {
        if (is_array($evolutionTotal)) {
            $useMinMax = false;
            if (isset($evolutionTotal['min'])) {
                $this->addUsingAlias(StatistiquesParEntitePeer::EVOLUTION_TOTAL, $evolutionTotal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($evolutionTotal['max'])) {
                $this->addUsingAlias(StatistiquesParEntitePeer::EVOLUTION_TOTAL, $evolutionTotal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesParEntitePeer::EVOLUTION_TOTAL, $evolutionTotal, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   StatistiquesParEntite $statistiquesParEntite Object to remove from the list of results
     *
     * @return StatistiquesParEntiteQuery The current query, for fluid interface
     */
    public function prune($statistiquesParEntite = null)
    {
        if ($statistiquesParEntite) {
            $this->addUsingAlias(StatistiquesParEntitePeer::ID, $statistiquesParEntite->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
