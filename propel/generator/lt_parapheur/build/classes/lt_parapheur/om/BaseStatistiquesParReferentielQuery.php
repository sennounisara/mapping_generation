<?php


/**
 * Base class that represents a query for the 'statistiques_par_referentiel' table.
 *
 * 
 *
 * @method StatistiquesParReferentielQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method StatistiquesParReferentielQuery orderByTypeReferentiel($order = Criteria::ASC) Order by the TYPE_REFERENTIEL column
 * @method StatistiquesParReferentielQuery orderByIdValRefentiel($order = Criteria::ASC) Order by the ID_VAL_REFENTIEL column
 * @method StatistiquesParReferentielQuery orderByTotalReclamationsParMois($order = Criteria::ASC) Order by the TOTAL_RECLAMATIONS_PAR_MOIS column
 * @method StatistiquesParReferentielQuery orderByCumulAFinMois($order = Criteria::ASC) Order by the CUMUL_A_FIN_MOIS column
 * @method StatistiquesParReferentielQuery orderByEvolutionParMois($order = Criteria::ASC) Order by the EVOLUTION_PAR_MOIS column
 * @method StatistiquesParReferentielQuery orderByIdStatistiques($order = Criteria::ASC) Order by the ID_STATISTIQUES column
 * @method StatistiquesParReferentielQuery orderByAnnee($order = Criteria::ASC) Order by the ANNEE column
 * @method StatistiquesParReferentielQuery orderByMois($order = Criteria::ASC) Order by the MOIS column
 *
 * @method StatistiquesParReferentielQuery groupById() Group by the ID column
 * @method StatistiquesParReferentielQuery groupByTypeReferentiel() Group by the TYPE_REFERENTIEL column
 * @method StatistiquesParReferentielQuery groupByIdValRefentiel() Group by the ID_VAL_REFENTIEL column
 * @method StatistiquesParReferentielQuery groupByTotalReclamationsParMois() Group by the TOTAL_RECLAMATIONS_PAR_MOIS column
 * @method StatistiquesParReferentielQuery groupByCumulAFinMois() Group by the CUMUL_A_FIN_MOIS column
 * @method StatistiquesParReferentielQuery groupByEvolutionParMois() Group by the EVOLUTION_PAR_MOIS column
 * @method StatistiquesParReferentielQuery groupByIdStatistiques() Group by the ID_STATISTIQUES column
 * @method StatistiquesParReferentielQuery groupByAnnee() Group by the ANNEE column
 * @method StatistiquesParReferentielQuery groupByMois() Group by the MOIS column
 *
 * @method StatistiquesParReferentielQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method StatistiquesParReferentielQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method StatistiquesParReferentielQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method StatistiquesParReferentiel findOne(PropelPDO $con = null) Return the first StatistiquesParReferentiel matching the query
 * @method StatistiquesParReferentiel findOneOrCreate(PropelPDO $con = null) Return the first StatistiquesParReferentiel matching the query, or a new StatistiquesParReferentiel object populated from the query conditions when no match is found
 *
 * @method StatistiquesParReferentiel findOneByTypeReferentiel(int $TYPE_REFERENTIEL) Return the first StatistiquesParReferentiel filtered by the TYPE_REFERENTIEL column
 * @method StatistiquesParReferentiel findOneByIdValRefentiel(int $ID_VAL_REFENTIEL) Return the first StatistiquesParReferentiel filtered by the ID_VAL_REFENTIEL column
 * @method StatistiquesParReferentiel findOneByTotalReclamationsParMois(int $TOTAL_RECLAMATIONS_PAR_MOIS) Return the first StatistiquesParReferentiel filtered by the TOTAL_RECLAMATIONS_PAR_MOIS column
 * @method StatistiquesParReferentiel findOneByCumulAFinMois(int $CUMUL_A_FIN_MOIS) Return the first StatistiquesParReferentiel filtered by the CUMUL_A_FIN_MOIS column
 * @method StatistiquesParReferentiel findOneByEvolutionParMois(int $EVOLUTION_PAR_MOIS) Return the first StatistiquesParReferentiel filtered by the EVOLUTION_PAR_MOIS column
 * @method StatistiquesParReferentiel findOneByIdStatistiques(int $ID_STATISTIQUES) Return the first StatistiquesParReferentiel filtered by the ID_STATISTIQUES column
 * @method StatistiquesParReferentiel findOneByAnnee(int $ANNEE) Return the first StatistiquesParReferentiel filtered by the ANNEE column
 * @method StatistiquesParReferentiel findOneByMois(string $MOIS) Return the first StatistiquesParReferentiel filtered by the MOIS column
 *
 * @method array findById(int $ID) Return StatistiquesParReferentiel objects filtered by the ID column
 * @method array findByTypeReferentiel(int $TYPE_REFERENTIEL) Return StatistiquesParReferentiel objects filtered by the TYPE_REFERENTIEL column
 * @method array findByIdValRefentiel(int $ID_VAL_REFENTIEL) Return StatistiquesParReferentiel objects filtered by the ID_VAL_REFENTIEL column
 * @method array findByTotalReclamationsParMois(int $TOTAL_RECLAMATIONS_PAR_MOIS) Return StatistiquesParReferentiel objects filtered by the TOTAL_RECLAMATIONS_PAR_MOIS column
 * @method array findByCumulAFinMois(int $CUMUL_A_FIN_MOIS) Return StatistiquesParReferentiel objects filtered by the CUMUL_A_FIN_MOIS column
 * @method array findByEvolutionParMois(int $EVOLUTION_PAR_MOIS) Return StatistiquesParReferentiel objects filtered by the EVOLUTION_PAR_MOIS column
 * @method array findByIdStatistiques(int $ID_STATISTIQUES) Return StatistiquesParReferentiel objects filtered by the ID_STATISTIQUES column
 * @method array findByAnnee(int $ANNEE) Return StatistiquesParReferentiel objects filtered by the ANNEE column
 * @method array findByMois(string $MOIS) Return StatistiquesParReferentiel objects filtered by the MOIS column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseStatistiquesParReferentielQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseStatistiquesParReferentielQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'StatistiquesParReferentiel', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new StatistiquesParReferentielQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   StatistiquesParReferentielQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return StatistiquesParReferentielQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof StatistiquesParReferentielQuery) {
            return $criteria;
        }
        $query = new StatistiquesParReferentielQuery();
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
     * @return   StatistiquesParReferentiel|StatistiquesParReferentiel[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = StatistiquesParReferentielPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(StatistiquesParReferentielPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 StatistiquesParReferentiel A model object, or null if the key is not found
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
     * @return                 StatistiquesParReferentiel A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `TYPE_REFERENTIEL`, `ID_VAL_REFENTIEL`, `TOTAL_RECLAMATIONS_PAR_MOIS`, `CUMUL_A_FIN_MOIS`, `EVOLUTION_PAR_MOIS`, `ID_STATISTIQUES`, `ANNEE`, `MOIS` FROM `statistiques_par_referentiel` WHERE `ID` = :p0';
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
            $obj = new StatistiquesParReferentiel();
            $obj->hydrate($row);
            StatistiquesParReferentielPeer::addInstanceToPool($obj, (string) $key);
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
     * @return StatistiquesParReferentiel|StatistiquesParReferentiel[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|StatistiquesParReferentiel[]|mixed the list of results, formatted by the current formatter
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
     * @return StatistiquesParReferentielQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(StatistiquesParReferentielPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return StatistiquesParReferentielQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(StatistiquesParReferentielPeer::ID, $keys, Criteria::IN);
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
     * @return StatistiquesParReferentielQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(StatistiquesParReferentielPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(StatistiquesParReferentielPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesParReferentielPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the TYPE_REFERENTIEL column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeReferentiel(1234); // WHERE TYPE_REFERENTIEL = 1234
     * $query->filterByTypeReferentiel(array(12, 34)); // WHERE TYPE_REFERENTIEL IN (12, 34)
     * $query->filterByTypeReferentiel(array('min' => 12)); // WHERE TYPE_REFERENTIEL >= 12
     * $query->filterByTypeReferentiel(array('max' => 12)); // WHERE TYPE_REFERENTIEL <= 12
     * </code>
     *
     * @param     mixed $typeReferentiel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesParReferentielQuery The current query, for fluid interface
     */
    public function filterByTypeReferentiel($typeReferentiel = null, $comparison = null)
    {
        if (is_array($typeReferentiel)) {
            $useMinMax = false;
            if (isset($typeReferentiel['min'])) {
                $this->addUsingAlias(StatistiquesParReferentielPeer::TYPE_REFERENTIEL, $typeReferentiel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeReferentiel['max'])) {
                $this->addUsingAlias(StatistiquesParReferentielPeer::TYPE_REFERENTIEL, $typeReferentiel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesParReferentielPeer::TYPE_REFERENTIEL, $typeReferentiel, $comparison);
    }

    /**
     * Filter the query on the ID_VAL_REFENTIEL column
     *
     * Example usage:
     * <code>
     * $query->filterByIdValRefentiel(1234); // WHERE ID_VAL_REFENTIEL = 1234
     * $query->filterByIdValRefentiel(array(12, 34)); // WHERE ID_VAL_REFENTIEL IN (12, 34)
     * $query->filterByIdValRefentiel(array('min' => 12)); // WHERE ID_VAL_REFENTIEL >= 12
     * $query->filterByIdValRefentiel(array('max' => 12)); // WHERE ID_VAL_REFENTIEL <= 12
     * </code>
     *
     * @param     mixed $idValRefentiel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesParReferentielQuery The current query, for fluid interface
     */
    public function filterByIdValRefentiel($idValRefentiel = null, $comparison = null)
    {
        if (is_array($idValRefentiel)) {
            $useMinMax = false;
            if (isset($idValRefentiel['min'])) {
                $this->addUsingAlias(StatistiquesParReferentielPeer::ID_VAL_REFENTIEL, $idValRefentiel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idValRefentiel['max'])) {
                $this->addUsingAlias(StatistiquesParReferentielPeer::ID_VAL_REFENTIEL, $idValRefentiel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesParReferentielPeer::ID_VAL_REFENTIEL, $idValRefentiel, $comparison);
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
     * @return StatistiquesParReferentielQuery The current query, for fluid interface
     */
    public function filterByTotalReclamationsParMois($totalReclamationsParMois = null, $comparison = null)
    {
        if (is_array($totalReclamationsParMois)) {
            $useMinMax = false;
            if (isset($totalReclamationsParMois['min'])) {
                $this->addUsingAlias(StatistiquesParReferentielPeer::TOTAL_RECLAMATIONS_PAR_MOIS, $totalReclamationsParMois['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($totalReclamationsParMois['max'])) {
                $this->addUsingAlias(StatistiquesParReferentielPeer::TOTAL_RECLAMATIONS_PAR_MOIS, $totalReclamationsParMois['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesParReferentielPeer::TOTAL_RECLAMATIONS_PAR_MOIS, $totalReclamationsParMois, $comparison);
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
     * @return StatistiquesParReferentielQuery The current query, for fluid interface
     */
    public function filterByCumulAFinMois($cumulAFinMois = null, $comparison = null)
    {
        if (is_array($cumulAFinMois)) {
            $useMinMax = false;
            if (isset($cumulAFinMois['min'])) {
                $this->addUsingAlias(StatistiquesParReferentielPeer::CUMUL_A_FIN_MOIS, $cumulAFinMois['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($cumulAFinMois['max'])) {
                $this->addUsingAlias(StatistiquesParReferentielPeer::CUMUL_A_FIN_MOIS, $cumulAFinMois['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesParReferentielPeer::CUMUL_A_FIN_MOIS, $cumulAFinMois, $comparison);
    }

    /**
     * Filter the query on the EVOLUTION_PAR_MOIS column
     *
     * Example usage:
     * <code>
     * $query->filterByEvolutionParMois(1234); // WHERE EVOLUTION_PAR_MOIS = 1234
     * $query->filterByEvolutionParMois(array(12, 34)); // WHERE EVOLUTION_PAR_MOIS IN (12, 34)
     * $query->filterByEvolutionParMois(array('min' => 12)); // WHERE EVOLUTION_PAR_MOIS >= 12
     * $query->filterByEvolutionParMois(array('max' => 12)); // WHERE EVOLUTION_PAR_MOIS <= 12
     * </code>
     *
     * @param     mixed $evolutionParMois The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesParReferentielQuery The current query, for fluid interface
     */
    public function filterByEvolutionParMois($evolutionParMois = null, $comparison = null)
    {
        if (is_array($evolutionParMois)) {
            $useMinMax = false;
            if (isset($evolutionParMois['min'])) {
                $this->addUsingAlias(StatistiquesParReferentielPeer::EVOLUTION_PAR_MOIS, $evolutionParMois['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($evolutionParMois['max'])) {
                $this->addUsingAlias(StatistiquesParReferentielPeer::EVOLUTION_PAR_MOIS, $evolutionParMois['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesParReferentielPeer::EVOLUTION_PAR_MOIS, $evolutionParMois, $comparison);
    }

    /**
     * Filter the query on the ID_STATISTIQUES column
     *
     * Example usage:
     * <code>
     * $query->filterByIdStatistiques(1234); // WHERE ID_STATISTIQUES = 1234
     * $query->filterByIdStatistiques(array(12, 34)); // WHERE ID_STATISTIQUES IN (12, 34)
     * $query->filterByIdStatistiques(array('min' => 12)); // WHERE ID_STATISTIQUES >= 12
     * $query->filterByIdStatistiques(array('max' => 12)); // WHERE ID_STATISTIQUES <= 12
     * </code>
     *
     * @param     mixed $idStatistiques The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatistiquesParReferentielQuery The current query, for fluid interface
     */
    public function filterByIdStatistiques($idStatistiques = null, $comparison = null)
    {
        if (is_array($idStatistiques)) {
            $useMinMax = false;
            if (isset($idStatistiques['min'])) {
                $this->addUsingAlias(StatistiquesParReferentielPeer::ID_STATISTIQUES, $idStatistiques['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idStatistiques['max'])) {
                $this->addUsingAlias(StatistiquesParReferentielPeer::ID_STATISTIQUES, $idStatistiques['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesParReferentielPeer::ID_STATISTIQUES, $idStatistiques, $comparison);
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
     * @return StatistiquesParReferentielQuery The current query, for fluid interface
     */
    public function filterByAnnee($annee = null, $comparison = null)
    {
        if (is_array($annee)) {
            $useMinMax = false;
            if (isset($annee['min'])) {
                $this->addUsingAlias(StatistiquesParReferentielPeer::ANNEE, $annee['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($annee['max'])) {
                $this->addUsingAlias(StatistiquesParReferentielPeer::ANNEE, $annee['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatistiquesParReferentielPeer::ANNEE, $annee, $comparison);
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
     * @return StatistiquesParReferentielQuery The current query, for fluid interface
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

        return $this->addUsingAlias(StatistiquesParReferentielPeer::MOIS, $mois, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   StatistiquesParReferentiel $statistiquesParReferentiel Object to remove from the list of results
     *
     * @return StatistiquesParReferentielQuery The current query, for fluid interface
     */
    public function prune($statistiquesParReferentiel = null)
    {
        if ($statistiquesParReferentiel) {
            $this->addUsingAlias(StatistiquesParReferentielPeer::ID, $statistiquesParReferentiel->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
