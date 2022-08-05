<?php


/**
 * Base class that represents a query for the 'exec_phase' table.
 *
 * 
 *
 * @method CommonExecPhaseQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonExecPhaseQuery orderByIdContrat($order = Criteria::ASC) Order by the id_contrat column
 * @method CommonExecPhaseQuery orderByNumero($order = Criteria::ASC) Order by the numero column
 * @method CommonExecPhaseQuery orderByIntitule($order = Criteria::ASC) Order by the intitule column
 * @method CommonExecPhaseQuery orderByDelai($order = Criteria::ASC) Order by the delai column
 * @method CommonExecPhaseQuery orderByUniteDelai($order = Criteria::ASC) Order by the unite_delai column
 * @method CommonExecPhaseQuery orderByDateCrea($order = Criteria::ASC) Order by the date_crea column
 * @method CommonExecPhaseQuery orderByIdAgentCrea($order = Criteria::ASC) Order by the id_agent_crea column
 * @method CommonExecPhaseQuery orderByDateModif($order = Criteria::ASC) Order by the date_modif column
 * @method CommonExecPhaseQuery orderByIdAgentModif($order = Criteria::ASC) Order by the id_agent_modif column
 * @method CommonExecPhaseQuery orderByDelaiReel($order = Criteria::ASC) Order by the delai_reel column
 * @method CommonExecPhaseQuery orderByDepassement($order = Criteria::ASC) Order by the depassement column
 * @method CommonExecPhaseQuery orderByDateMajDelaiReel($order = Criteria::ASC) Order by the date_maj_delai_reel column
 * @method CommonExecPhaseQuery orderByDelaiDiffere($order = Criteria::ASC) Order by the delai_differe column
 * @method CommonExecPhaseQuery orderByUniteDelaiDiffere($order = Criteria::ASC) Order by the unite_delai_differe column
 * @method CommonExecPhaseQuery orderByDateDebut($order = Criteria::ASC) Order by the date_debut column
 * @method CommonExecPhaseQuery orderByStatut($order = Criteria::ASC) Order by the statut column
 *
 * @method CommonExecPhaseQuery groupById() Group by the id column
 * @method CommonExecPhaseQuery groupByIdContrat() Group by the id_contrat column
 * @method CommonExecPhaseQuery groupByNumero() Group by the numero column
 * @method CommonExecPhaseQuery groupByIntitule() Group by the intitule column
 * @method CommonExecPhaseQuery groupByDelai() Group by the delai column
 * @method CommonExecPhaseQuery groupByUniteDelai() Group by the unite_delai column
 * @method CommonExecPhaseQuery groupByDateCrea() Group by the date_crea column
 * @method CommonExecPhaseQuery groupByIdAgentCrea() Group by the id_agent_crea column
 * @method CommonExecPhaseQuery groupByDateModif() Group by the date_modif column
 * @method CommonExecPhaseQuery groupByIdAgentModif() Group by the id_agent_modif column
 * @method CommonExecPhaseQuery groupByDelaiReel() Group by the delai_reel column
 * @method CommonExecPhaseQuery groupByDepassement() Group by the depassement column
 * @method CommonExecPhaseQuery groupByDateMajDelaiReel() Group by the date_maj_delai_reel column
 * @method CommonExecPhaseQuery groupByDelaiDiffere() Group by the delai_differe column
 * @method CommonExecPhaseQuery groupByUniteDelaiDiffere() Group by the unite_delai_differe column
 * @method CommonExecPhaseQuery groupByDateDebut() Group by the date_debut column
 * @method CommonExecPhaseQuery groupByStatut() Group by the statut column
 *
 * @method CommonExecPhaseQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonExecPhaseQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonExecPhaseQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonExecPhaseQuery leftJoinCommonExecContrat($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecContrat relation
 * @method CommonExecPhaseQuery rightJoinCommonExecContrat($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecContrat relation
 * @method CommonExecPhaseQuery innerJoinCommonExecContrat($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecContrat relation
 *
 * @method CommonExecPhaseQuery leftJoinCommonExecEvenement($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonExecEvenement relation
 * @method CommonExecPhaseQuery rightJoinCommonExecEvenement($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonExecEvenement relation
 * @method CommonExecPhaseQuery innerJoinCommonExecEvenement($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonExecEvenement relation
 *
 * @method CommonExecPhase findOne(PropelPDO $con = null) Return the first CommonExecPhase matching the query
 * @method CommonExecPhase findOneOrCreate(PropelPDO $con = null) Return the first CommonExecPhase matching the query, or a new CommonExecPhase object populated from the query conditions when no match is found
 *
 * @method CommonExecPhase findOneByIdContrat(int $id_contrat) Return the first CommonExecPhase filtered by the id_contrat column
 * @method CommonExecPhase findOneByNumero(string $numero) Return the first CommonExecPhase filtered by the numero column
 * @method CommonExecPhase findOneByIntitule(string $intitule) Return the first CommonExecPhase filtered by the intitule column
 * @method CommonExecPhase findOneByDelai(double $delai) Return the first CommonExecPhase filtered by the delai column
 * @method CommonExecPhase findOneByUniteDelai(int $unite_delai) Return the first CommonExecPhase filtered by the unite_delai column
 * @method CommonExecPhase findOneByDateCrea(string $date_crea) Return the first CommonExecPhase filtered by the date_crea column
 * @method CommonExecPhase findOneByIdAgentCrea(int $id_agent_crea) Return the first CommonExecPhase filtered by the id_agent_crea column
 * @method CommonExecPhase findOneByDateModif(string $date_modif) Return the first CommonExecPhase filtered by the date_modif column
 * @method CommonExecPhase findOneByIdAgentModif(int $id_agent_modif) Return the first CommonExecPhase filtered by the id_agent_modif column
 * @method CommonExecPhase findOneByDelaiReel(double $delai_reel) Return the first CommonExecPhase filtered by the delai_reel column
 * @method CommonExecPhase findOneByDepassement(double $depassement) Return the first CommonExecPhase filtered by the depassement column
 * @method CommonExecPhase findOneByDateMajDelaiReel(string $date_maj_delai_reel) Return the first CommonExecPhase filtered by the date_maj_delai_reel column
 * @method CommonExecPhase findOneByDelaiDiffere(double $delai_differe) Return the first CommonExecPhase filtered by the delai_differe column
 * @method CommonExecPhase findOneByUniteDelaiDiffere(int $unite_delai_differe) Return the first CommonExecPhase filtered by the unite_delai_differe column
 * @method CommonExecPhase findOneByDateDebut(string $date_debut) Return the first CommonExecPhase filtered by the date_debut column
 * @method CommonExecPhase findOneByStatut(int $statut) Return the first CommonExecPhase filtered by the statut column
 *
 * @method array findById(int $id) Return CommonExecPhase objects filtered by the id column
 * @method array findByIdContrat(int $id_contrat) Return CommonExecPhase objects filtered by the id_contrat column
 * @method array findByNumero(string $numero) Return CommonExecPhase objects filtered by the numero column
 * @method array findByIntitule(string $intitule) Return CommonExecPhase objects filtered by the intitule column
 * @method array findByDelai(double $delai) Return CommonExecPhase objects filtered by the delai column
 * @method array findByUniteDelai(int $unite_delai) Return CommonExecPhase objects filtered by the unite_delai column
 * @method array findByDateCrea(string $date_crea) Return CommonExecPhase objects filtered by the date_crea column
 * @method array findByIdAgentCrea(int $id_agent_crea) Return CommonExecPhase objects filtered by the id_agent_crea column
 * @method array findByDateModif(string $date_modif) Return CommonExecPhase objects filtered by the date_modif column
 * @method array findByIdAgentModif(int $id_agent_modif) Return CommonExecPhase objects filtered by the id_agent_modif column
 * @method array findByDelaiReel(double $delai_reel) Return CommonExecPhase objects filtered by the delai_reel column
 * @method array findByDepassement(double $depassement) Return CommonExecPhase objects filtered by the depassement column
 * @method array findByDateMajDelaiReel(string $date_maj_delai_reel) Return CommonExecPhase objects filtered by the date_maj_delai_reel column
 * @method array findByDelaiDiffere(double $delai_differe) Return CommonExecPhase objects filtered by the delai_differe column
 * @method array findByUniteDelaiDiffere(int $unite_delai_differe) Return CommonExecPhase objects filtered by the unite_delai_differe column
 * @method array findByDateDebut(string $date_debut) Return CommonExecPhase objects filtered by the date_debut column
 * @method array findByStatut(int $statut) Return CommonExecPhase objects filtered by the statut column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonExecPhaseQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonExecPhaseQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonExecPhase', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonExecPhaseQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonExecPhaseQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonExecPhaseQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonExecPhaseQuery) {
            return $criteria;
        }
        $query = new CommonExecPhaseQuery();
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
     * @return   CommonExecPhase|CommonExecPhase[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonExecPhasePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonExecPhasePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonExecPhase A model object, or null if the key is not found
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
     * @return                 CommonExecPhase A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_contrat`, `numero`, `intitule`, `delai`, `unite_delai`, `date_crea`, `id_agent_crea`, `date_modif`, `id_agent_modif`, `delai_reel`, `depassement`, `date_maj_delai_reel`, `delai_differe`, `unite_delai_differe`, `date_debut`, `statut` FROM `exec_phase` WHERE `id` = :p0';
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
            $obj = new CommonExecPhase();
            $obj->hydrate($row);
            CommonExecPhasePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonExecPhase|CommonExecPhase[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonExecPhase[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonExecPhaseQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonExecPhasePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonExecPhaseQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonExecPhasePeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE id = 1234
     * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE id >= 12
     * $query->filterById(array('max' => 12)); // WHERE id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPhaseQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonExecPhasePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonExecPhasePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPhasePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_contrat column
     *
     * Example usage:
     * <code>
     * $query->filterByIdContrat(1234); // WHERE id_contrat = 1234
     * $query->filterByIdContrat(array(12, 34)); // WHERE id_contrat IN (12, 34)
     * $query->filterByIdContrat(array('min' => 12)); // WHERE id_contrat >= 12
     * $query->filterByIdContrat(array('max' => 12)); // WHERE id_contrat <= 12
     * </code>
     *
     * @see       filterByCommonExecContrat()
     *
     * @param     mixed $idContrat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPhaseQuery The current query, for fluid interface
     */
    public function filterByIdContrat($idContrat = null, $comparison = null)
    {
        if (is_array($idContrat)) {
            $useMinMax = false;
            if (isset($idContrat['min'])) {
                $this->addUsingAlias(CommonExecPhasePeer::ID_CONTRAT, $idContrat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idContrat['max'])) {
                $this->addUsingAlias(CommonExecPhasePeer::ID_CONTRAT, $idContrat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPhasePeer::ID_CONTRAT, $idContrat, $comparison);
    }

    /**
     * Filter the query on the numero column
     *
     * Example usage:
     * <code>
     * $query->filterByNumero('fooValue');   // WHERE numero = 'fooValue'
     * $query->filterByNumero('%fooValue%'); // WHERE numero LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numero The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPhaseQuery The current query, for fluid interface
     */
    public function filterByNumero($numero = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numero)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numero)) {
                $numero = str_replace('*', '%', $numero);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecPhasePeer::NUMERO, $numero, $comparison);
    }

    /**
     * Filter the query on the intitule column
     *
     * Example usage:
     * <code>
     * $query->filterByIntitule('fooValue');   // WHERE intitule = 'fooValue'
     * $query->filterByIntitule('%fooValue%'); // WHERE intitule LIKE '%fooValue%'
     * </code>
     *
     * @param     string $intitule The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPhaseQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonExecPhasePeer::INTITULE, $intitule, $comparison);
    }

    /**
     * Filter the query on the delai column
     *
     * Example usage:
     * <code>
     * $query->filterByDelai(1234); // WHERE delai = 1234
     * $query->filterByDelai(array(12, 34)); // WHERE delai IN (12, 34)
     * $query->filterByDelai(array('min' => 12)); // WHERE delai >= 12
     * $query->filterByDelai(array('max' => 12)); // WHERE delai <= 12
     * </code>
     *
     * @param     mixed $delai The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPhaseQuery The current query, for fluid interface
     */
    public function filterByDelai($delai = null, $comparison = null)
    {
        if (is_array($delai)) {
            $useMinMax = false;
            if (isset($delai['min'])) {
                $this->addUsingAlias(CommonExecPhasePeer::DELAI, $delai['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delai['max'])) {
                $this->addUsingAlias(CommonExecPhasePeer::DELAI, $delai['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPhasePeer::DELAI, $delai, $comparison);
    }

    /**
     * Filter the query on the unite_delai column
     *
     * Example usage:
     * <code>
     * $query->filterByUniteDelai(1234); // WHERE unite_delai = 1234
     * $query->filterByUniteDelai(array(12, 34)); // WHERE unite_delai IN (12, 34)
     * $query->filterByUniteDelai(array('min' => 12)); // WHERE unite_delai >= 12
     * $query->filterByUniteDelai(array('max' => 12)); // WHERE unite_delai <= 12
     * </code>
     *
     * @param     mixed $uniteDelai The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPhaseQuery The current query, for fluid interface
     */
    public function filterByUniteDelai($uniteDelai = null, $comparison = null)
    {
        if (is_array($uniteDelai)) {
            $useMinMax = false;
            if (isset($uniteDelai['min'])) {
                $this->addUsingAlias(CommonExecPhasePeer::UNITE_DELAI, $uniteDelai['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($uniteDelai['max'])) {
                $this->addUsingAlias(CommonExecPhasePeer::UNITE_DELAI, $uniteDelai['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPhasePeer::UNITE_DELAI, $uniteDelai, $comparison);
    }

    /**
     * Filter the query on the date_crea column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCrea('2011-03-14'); // WHERE date_crea = '2011-03-14'
     * $query->filterByDateCrea('now'); // WHERE date_crea = '2011-03-14'
     * $query->filterByDateCrea(array('max' => 'yesterday')); // WHERE date_crea > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateCrea The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPhaseQuery The current query, for fluid interface
     */
    public function filterByDateCrea($dateCrea = null, $comparison = null)
    {
        if (is_array($dateCrea)) {
            $useMinMax = false;
            if (isset($dateCrea['min'])) {
                $this->addUsingAlias(CommonExecPhasePeer::DATE_CREA, $dateCrea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCrea['max'])) {
                $this->addUsingAlias(CommonExecPhasePeer::DATE_CREA, $dateCrea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPhasePeer::DATE_CREA, $dateCrea, $comparison);
    }

    /**
     * Filter the query on the id_agent_crea column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentCrea(1234); // WHERE id_agent_crea = 1234
     * $query->filterByIdAgentCrea(array(12, 34)); // WHERE id_agent_crea IN (12, 34)
     * $query->filterByIdAgentCrea(array('min' => 12)); // WHERE id_agent_crea >= 12
     * $query->filterByIdAgentCrea(array('max' => 12)); // WHERE id_agent_crea <= 12
     * </code>
     *
     * @param     mixed $idAgentCrea The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPhaseQuery The current query, for fluid interface
     */
    public function filterByIdAgentCrea($idAgentCrea = null, $comparison = null)
    {
        if (is_array($idAgentCrea)) {
            $useMinMax = false;
            if (isset($idAgentCrea['min'])) {
                $this->addUsingAlias(CommonExecPhasePeer::ID_AGENT_CREA, $idAgentCrea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentCrea['max'])) {
                $this->addUsingAlias(CommonExecPhasePeer::ID_AGENT_CREA, $idAgentCrea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPhasePeer::ID_AGENT_CREA, $idAgentCrea, $comparison);
    }

    /**
     * Filter the query on the date_modif column
     *
     * Example usage:
     * <code>
     * $query->filterByDateModif('2011-03-14'); // WHERE date_modif = '2011-03-14'
     * $query->filterByDateModif('now'); // WHERE date_modif = '2011-03-14'
     * $query->filterByDateModif(array('max' => 'yesterday')); // WHERE date_modif > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateModif The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPhaseQuery The current query, for fluid interface
     */
    public function filterByDateModif($dateModif = null, $comparison = null)
    {
        if (is_array($dateModif)) {
            $useMinMax = false;
            if (isset($dateModif['min'])) {
                $this->addUsingAlias(CommonExecPhasePeer::DATE_MODIF, $dateModif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateModif['max'])) {
                $this->addUsingAlias(CommonExecPhasePeer::DATE_MODIF, $dateModif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPhasePeer::DATE_MODIF, $dateModif, $comparison);
    }

    /**
     * Filter the query on the id_agent_modif column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentModif(1234); // WHERE id_agent_modif = 1234
     * $query->filterByIdAgentModif(array(12, 34)); // WHERE id_agent_modif IN (12, 34)
     * $query->filterByIdAgentModif(array('min' => 12)); // WHERE id_agent_modif >= 12
     * $query->filterByIdAgentModif(array('max' => 12)); // WHERE id_agent_modif <= 12
     * </code>
     *
     * @param     mixed $idAgentModif The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPhaseQuery The current query, for fluid interface
     */
    public function filterByIdAgentModif($idAgentModif = null, $comparison = null)
    {
        if (is_array($idAgentModif)) {
            $useMinMax = false;
            if (isset($idAgentModif['min'])) {
                $this->addUsingAlias(CommonExecPhasePeer::ID_AGENT_MODIF, $idAgentModif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentModif['max'])) {
                $this->addUsingAlias(CommonExecPhasePeer::ID_AGENT_MODIF, $idAgentModif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPhasePeer::ID_AGENT_MODIF, $idAgentModif, $comparison);
    }

    /**
     * Filter the query on the delai_reel column
     *
     * Example usage:
     * <code>
     * $query->filterByDelaiReel(1234); // WHERE delai_reel = 1234
     * $query->filterByDelaiReel(array(12, 34)); // WHERE delai_reel IN (12, 34)
     * $query->filterByDelaiReel(array('min' => 12)); // WHERE delai_reel >= 12
     * $query->filterByDelaiReel(array('max' => 12)); // WHERE delai_reel <= 12
     * </code>
     *
     * @param     mixed $delaiReel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPhaseQuery The current query, for fluid interface
     */
    public function filterByDelaiReel($delaiReel = null, $comparison = null)
    {
        if (is_array($delaiReel)) {
            $useMinMax = false;
            if (isset($delaiReel['min'])) {
                $this->addUsingAlias(CommonExecPhasePeer::DELAI_REEL, $delaiReel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delaiReel['max'])) {
                $this->addUsingAlias(CommonExecPhasePeer::DELAI_REEL, $delaiReel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPhasePeer::DELAI_REEL, $delaiReel, $comparison);
    }

    /**
     * Filter the query on the depassement column
     *
     * Example usage:
     * <code>
     * $query->filterByDepassement(1234); // WHERE depassement = 1234
     * $query->filterByDepassement(array(12, 34)); // WHERE depassement IN (12, 34)
     * $query->filterByDepassement(array('min' => 12)); // WHERE depassement >= 12
     * $query->filterByDepassement(array('max' => 12)); // WHERE depassement <= 12
     * </code>
     *
     * @param     mixed $depassement The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPhaseQuery The current query, for fluid interface
     */
    public function filterByDepassement($depassement = null, $comparison = null)
    {
        if (is_array($depassement)) {
            $useMinMax = false;
            if (isset($depassement['min'])) {
                $this->addUsingAlias(CommonExecPhasePeer::DEPASSEMENT, $depassement['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($depassement['max'])) {
                $this->addUsingAlias(CommonExecPhasePeer::DEPASSEMENT, $depassement['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPhasePeer::DEPASSEMENT, $depassement, $comparison);
    }

    /**
     * Filter the query on the date_maj_delai_reel column
     *
     * Example usage:
     * <code>
     * $query->filterByDateMajDelaiReel('2011-03-14'); // WHERE date_maj_delai_reel = '2011-03-14'
     * $query->filterByDateMajDelaiReel('now'); // WHERE date_maj_delai_reel = '2011-03-14'
     * $query->filterByDateMajDelaiReel(array('max' => 'yesterday')); // WHERE date_maj_delai_reel > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateMajDelaiReel The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPhaseQuery The current query, for fluid interface
     */
    public function filterByDateMajDelaiReel($dateMajDelaiReel = null, $comparison = null)
    {
        if (is_array($dateMajDelaiReel)) {
            $useMinMax = false;
            if (isset($dateMajDelaiReel['min'])) {
                $this->addUsingAlias(CommonExecPhasePeer::DATE_MAJ_DELAI_REEL, $dateMajDelaiReel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateMajDelaiReel['max'])) {
                $this->addUsingAlias(CommonExecPhasePeer::DATE_MAJ_DELAI_REEL, $dateMajDelaiReel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPhasePeer::DATE_MAJ_DELAI_REEL, $dateMajDelaiReel, $comparison);
    }

    /**
     * Filter the query on the delai_differe column
     *
     * Example usage:
     * <code>
     * $query->filterByDelaiDiffere(1234); // WHERE delai_differe = 1234
     * $query->filterByDelaiDiffere(array(12, 34)); // WHERE delai_differe IN (12, 34)
     * $query->filterByDelaiDiffere(array('min' => 12)); // WHERE delai_differe >= 12
     * $query->filterByDelaiDiffere(array('max' => 12)); // WHERE delai_differe <= 12
     * </code>
     *
     * @param     mixed $delaiDiffere The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPhaseQuery The current query, for fluid interface
     */
    public function filterByDelaiDiffere($delaiDiffere = null, $comparison = null)
    {
        if (is_array($delaiDiffere)) {
            $useMinMax = false;
            if (isset($delaiDiffere['min'])) {
                $this->addUsingAlias(CommonExecPhasePeer::DELAI_DIFFERE, $delaiDiffere['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delaiDiffere['max'])) {
                $this->addUsingAlias(CommonExecPhasePeer::DELAI_DIFFERE, $delaiDiffere['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPhasePeer::DELAI_DIFFERE, $delaiDiffere, $comparison);
    }

    /**
     * Filter the query on the unite_delai_differe column
     *
     * Example usage:
     * <code>
     * $query->filterByUniteDelaiDiffere(1234); // WHERE unite_delai_differe = 1234
     * $query->filterByUniteDelaiDiffere(array(12, 34)); // WHERE unite_delai_differe IN (12, 34)
     * $query->filterByUniteDelaiDiffere(array('min' => 12)); // WHERE unite_delai_differe >= 12
     * $query->filterByUniteDelaiDiffere(array('max' => 12)); // WHERE unite_delai_differe <= 12
     * </code>
     *
     * @param     mixed $uniteDelaiDiffere The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPhaseQuery The current query, for fluid interface
     */
    public function filterByUniteDelaiDiffere($uniteDelaiDiffere = null, $comparison = null)
    {
        if (is_array($uniteDelaiDiffere)) {
            $useMinMax = false;
            if (isset($uniteDelaiDiffere['min'])) {
                $this->addUsingAlias(CommonExecPhasePeer::UNITE_DELAI_DIFFERE, $uniteDelaiDiffere['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($uniteDelaiDiffere['max'])) {
                $this->addUsingAlias(CommonExecPhasePeer::UNITE_DELAI_DIFFERE, $uniteDelaiDiffere['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPhasePeer::UNITE_DELAI_DIFFERE, $uniteDelaiDiffere, $comparison);
    }

    /**
     * Filter the query on the date_debut column
     *
     * Example usage:
     * <code>
     * $query->filterByDateDebut('2011-03-14'); // WHERE date_debut = '2011-03-14'
     * $query->filterByDateDebut('now'); // WHERE date_debut = '2011-03-14'
     * $query->filterByDateDebut(array('max' => 'yesterday')); // WHERE date_debut > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateDebut The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPhaseQuery The current query, for fluid interface
     */
    public function filterByDateDebut($dateDebut = null, $comparison = null)
    {
        if (is_array($dateDebut)) {
            $useMinMax = false;
            if (isset($dateDebut['min'])) {
                $this->addUsingAlias(CommonExecPhasePeer::DATE_DEBUT, $dateDebut['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateDebut['max'])) {
                $this->addUsingAlias(CommonExecPhasePeer::DATE_DEBUT, $dateDebut['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPhasePeer::DATE_DEBUT, $dateDebut, $comparison);
    }

    /**
     * Filter the query on the statut column
     *
     * Example usage:
     * <code>
     * $query->filterByStatut(1234); // WHERE statut = 1234
     * $query->filterByStatut(array(12, 34)); // WHERE statut IN (12, 34)
     * $query->filterByStatut(array('min' => 12)); // WHERE statut >= 12
     * $query->filterByStatut(array('max' => 12)); // WHERE statut <= 12
     * </code>
     *
     * @param     mixed $statut The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecPhaseQuery The current query, for fluid interface
     */
    public function filterByStatut($statut = null, $comparison = null)
    {
        if (is_array($statut)) {
            $useMinMax = false;
            if (isset($statut['min'])) {
                $this->addUsingAlias(CommonExecPhasePeer::STATUT, $statut['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statut['max'])) {
                $this->addUsingAlias(CommonExecPhasePeer::STATUT, $statut['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecPhasePeer::STATUT, $statut, $comparison);
    }

    /**
     * Filter the query by a related CommonExecContrat object
     *
     * @param   CommonExecContrat|PropelObjectCollection $commonExecContrat The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecPhaseQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecContrat($commonExecContrat, $comparison = null)
    {
        if ($commonExecContrat instanceof CommonExecContrat) {
            return $this
                ->addUsingAlias(CommonExecPhasePeer::ID_CONTRAT, $commonExecContrat->getIdContrat(), $comparison);
        } elseif ($commonExecContrat instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonExecPhasePeer::ID_CONTRAT, $commonExecContrat->toKeyValue('PrimaryKey', 'IdContrat'), $comparison);
        } else {
            throw new PropelException('filterByCommonExecContrat() only accepts arguments of type CommonExecContrat or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecContrat relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecPhaseQuery The current query, for fluid interface
     */
    public function joinCommonExecContrat($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecContrat');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonExecContrat');
        }

        return $this;
    }

    /**
     * Use the CommonExecContrat relation CommonExecContrat object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecContratQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecContratQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonExecContrat($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecContrat', 'CommonExecContratQuery');
    }

    /**
     * Filter the query by a related CommonExecEvenement object
     *
     * @param   CommonExecEvenement|PropelObjectCollection $commonExecEvenement  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonExecPhaseQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonExecEvenement($commonExecEvenement, $comparison = null)
    {
        if ($commonExecEvenement instanceof CommonExecEvenement) {
            return $this
                ->addUsingAlias(CommonExecPhasePeer::ID, $commonExecEvenement->getIdPhase(), $comparison);
        } elseif ($commonExecEvenement instanceof PropelObjectCollection) {
            return $this
                ->useCommonExecEvenementQuery()
                ->filterByPrimaryKeys($commonExecEvenement->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonExecEvenement() only accepts arguments of type CommonExecEvenement or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonExecEvenement relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonExecPhaseQuery The current query, for fluid interface
     */
    public function joinCommonExecEvenement($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonExecEvenement');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonExecEvenement');
        }

        return $this;
    }

    /**
     * Use the CommonExecEvenement relation CommonExecEvenement object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonExecEvenementQuery A secondary query class using the current class as primary query
     */
    public function useCommonExecEvenementQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonExecEvenement($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonExecEvenement', 'CommonExecEvenementQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonExecPhase $commonExecPhase Object to remove from the list of results
     *
     * @return CommonExecPhaseQuery The current query, for fluid interface
     */
    public function prune($commonExecPhase = null)
    {
        if ($commonExecPhase) {
            $this->addUsingAlias(CommonExecPhasePeer::ID, $commonExecPhase->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
