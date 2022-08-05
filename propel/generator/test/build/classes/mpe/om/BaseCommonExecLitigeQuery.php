<?php


/**
 * Base class that represents a query for the 'exec_litige' table.
 *
 * 
 *
 * @method CommonExecLitigeQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonExecLitigeQuery orderByNumero($order = Criteria::ASC) Order by the numero column
 * @method CommonExecLitigeQuery orderByIdContrat($order = Criteria::ASC) Order by the id_contrat column
 * @method CommonExecLitigeQuery orderByIdContractant($order = Criteria::ASC) Order by the id_contractant column
 * @method CommonExecLitigeQuery orderByStatut($order = Criteria::ASC) Order by the statut column
 * @method CommonExecLitigeQuery orderByDateDeclaration($order = Criteria::ASC) Order by the date_declaration column
 * @method CommonExecLitigeQuery orderByDateValidation($order = Criteria::ASC) Order by the date_validation column
 * @method CommonExecLitigeQuery orderByIdAgentValidation($order = Criteria::ASC) Order by the id_agent_validation column
 * @method CommonExecLitigeQuery orderByDateRejet($order = Criteria::ASC) Order by the date_rejet column
 * @method CommonExecLitigeQuery orderByIdAgentRejet($order = Criteria::ASC) Order by the id_agent_rejet column
 * @method CommonExecLitigeQuery orderByCommentaire($order = Criteria::ASC) Order by the commentaire column
 * @method CommonExecLitigeQuery orderByIdAgentCrea($order = Criteria::ASC) Order by the id_agent_crea column
 * @method CommonExecLitigeQuery orderByDateCrea($order = Criteria::ASC) Order by the date_crea column
 * @method CommonExecLitigeQuery orderByCloture($order = Criteria::ASC) Order by the cloture column
 * @method CommonExecLitigeQuery orderByEtat($order = Criteria::ASC) Order by the etat column
 * @method CommonExecLitigeQuery orderByDecision($order = Criteria::ASC) Order by the decision column
 *
 * @method CommonExecLitigeQuery groupById() Group by the id column
 * @method CommonExecLitigeQuery groupByNumero() Group by the numero column
 * @method CommonExecLitigeQuery groupByIdContrat() Group by the id_contrat column
 * @method CommonExecLitigeQuery groupByIdContractant() Group by the id_contractant column
 * @method CommonExecLitigeQuery groupByStatut() Group by the statut column
 * @method CommonExecLitigeQuery groupByDateDeclaration() Group by the date_declaration column
 * @method CommonExecLitigeQuery groupByDateValidation() Group by the date_validation column
 * @method CommonExecLitigeQuery groupByIdAgentValidation() Group by the id_agent_validation column
 * @method CommonExecLitigeQuery groupByDateRejet() Group by the date_rejet column
 * @method CommonExecLitigeQuery groupByIdAgentRejet() Group by the id_agent_rejet column
 * @method CommonExecLitigeQuery groupByCommentaire() Group by the commentaire column
 * @method CommonExecLitigeQuery groupByIdAgentCrea() Group by the id_agent_crea column
 * @method CommonExecLitigeQuery groupByDateCrea() Group by the date_crea column
 * @method CommonExecLitigeQuery groupByCloture() Group by the cloture column
 * @method CommonExecLitigeQuery groupByEtat() Group by the etat column
 * @method CommonExecLitigeQuery groupByDecision() Group by the decision column
 *
 * @method CommonExecLitigeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonExecLitigeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonExecLitigeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonExecLitige findOne(PropelPDO $con = null) Return the first CommonExecLitige matching the query
 * @method CommonExecLitige findOneOrCreate(PropelPDO $con = null) Return the first CommonExecLitige matching the query, or a new CommonExecLitige object populated from the query conditions when no match is found
 *
 * @method CommonExecLitige findOneByNumero(string $numero) Return the first CommonExecLitige filtered by the numero column
 * @method CommonExecLitige findOneByIdContrat(int $id_contrat) Return the first CommonExecLitige filtered by the id_contrat column
 * @method CommonExecLitige findOneByIdContractant(int $id_contractant) Return the first CommonExecLitige filtered by the id_contractant column
 * @method CommonExecLitige findOneByStatut(int $statut) Return the first CommonExecLitige filtered by the statut column
 * @method CommonExecLitige findOneByDateDeclaration(string $date_declaration) Return the first CommonExecLitige filtered by the date_declaration column
 * @method CommonExecLitige findOneByDateValidation(string $date_validation) Return the first CommonExecLitige filtered by the date_validation column
 * @method CommonExecLitige findOneByIdAgentValidation(int $id_agent_validation) Return the first CommonExecLitige filtered by the id_agent_validation column
 * @method CommonExecLitige findOneByDateRejet(string $date_rejet) Return the first CommonExecLitige filtered by the date_rejet column
 * @method CommonExecLitige findOneByIdAgentRejet(int $id_agent_rejet) Return the first CommonExecLitige filtered by the id_agent_rejet column
 * @method CommonExecLitige findOneByCommentaire(string $commentaire) Return the first CommonExecLitige filtered by the commentaire column
 * @method CommonExecLitige findOneByIdAgentCrea(int $id_agent_crea) Return the first CommonExecLitige filtered by the id_agent_crea column
 * @method CommonExecLitige findOneByDateCrea(string $date_crea) Return the first CommonExecLitige filtered by the date_crea column
 * @method CommonExecLitige findOneByCloture(boolean $cloture) Return the first CommonExecLitige filtered by the cloture column
 * @method CommonExecLitige findOneByEtat(boolean $etat) Return the first CommonExecLitige filtered by the etat column
 * @method CommonExecLitige findOneByDecision(string $decision) Return the first CommonExecLitige filtered by the decision column
 *
 * @method array findById(int $id) Return CommonExecLitige objects filtered by the id column
 * @method array findByNumero(string $numero) Return CommonExecLitige objects filtered by the numero column
 * @method array findByIdContrat(int $id_contrat) Return CommonExecLitige objects filtered by the id_contrat column
 * @method array findByIdContractant(int $id_contractant) Return CommonExecLitige objects filtered by the id_contractant column
 * @method array findByStatut(int $statut) Return CommonExecLitige objects filtered by the statut column
 * @method array findByDateDeclaration(string $date_declaration) Return CommonExecLitige objects filtered by the date_declaration column
 * @method array findByDateValidation(string $date_validation) Return CommonExecLitige objects filtered by the date_validation column
 * @method array findByIdAgentValidation(int $id_agent_validation) Return CommonExecLitige objects filtered by the id_agent_validation column
 * @method array findByDateRejet(string $date_rejet) Return CommonExecLitige objects filtered by the date_rejet column
 * @method array findByIdAgentRejet(int $id_agent_rejet) Return CommonExecLitige objects filtered by the id_agent_rejet column
 * @method array findByCommentaire(string $commentaire) Return CommonExecLitige objects filtered by the commentaire column
 * @method array findByIdAgentCrea(int $id_agent_crea) Return CommonExecLitige objects filtered by the id_agent_crea column
 * @method array findByDateCrea(string $date_crea) Return CommonExecLitige objects filtered by the date_crea column
 * @method array findByCloture(boolean $cloture) Return CommonExecLitige objects filtered by the cloture column
 * @method array findByEtat(boolean $etat) Return CommonExecLitige objects filtered by the etat column
 * @method array findByDecision(string $decision) Return CommonExecLitige objects filtered by the decision column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonExecLitigeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonExecLitigeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonExecLitige', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonExecLitigeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonExecLitigeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonExecLitigeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonExecLitigeQuery) {
            return $criteria;
        }
        $query = new CommonExecLitigeQuery();
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
     * @return   CommonExecLitige|CommonExecLitige[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonExecLitigePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonExecLitigePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonExecLitige A model object, or null if the key is not found
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
     * @return                 CommonExecLitige A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `numero`, `id_contrat`, `id_contractant`, `statut`, `date_declaration`, `date_validation`, `id_agent_validation`, `date_rejet`, `id_agent_rejet`, `commentaire`, `id_agent_crea`, `date_crea`, `cloture`, `etat`, `decision` FROM `exec_litige` WHERE `id` = :p0';
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
            $obj = new CommonExecLitige();
            $obj->hydrate($row);
            CommonExecLitigePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonExecLitige|CommonExecLitige[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonExecLitige[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonExecLitigeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonExecLitigePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonExecLitigeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonExecLitigePeer::ID, $keys, Criteria::IN);
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
     * @return CommonExecLitigeQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonExecLitigePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonExecLitigePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecLitigePeer::ID, $id, $comparison);
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
     * @return CommonExecLitigeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonExecLitigePeer::NUMERO, $numero, $comparison);
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
     * @param     mixed $idContrat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecLitigeQuery The current query, for fluid interface
     */
    public function filterByIdContrat($idContrat = null, $comparison = null)
    {
        if (is_array($idContrat)) {
            $useMinMax = false;
            if (isset($idContrat['min'])) {
                $this->addUsingAlias(CommonExecLitigePeer::ID_CONTRAT, $idContrat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idContrat['max'])) {
                $this->addUsingAlias(CommonExecLitigePeer::ID_CONTRAT, $idContrat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecLitigePeer::ID_CONTRAT, $idContrat, $comparison);
    }

    /**
     * Filter the query on the id_contractant column
     *
     * Example usage:
     * <code>
     * $query->filterByIdContractant(1234); // WHERE id_contractant = 1234
     * $query->filterByIdContractant(array(12, 34)); // WHERE id_contractant IN (12, 34)
     * $query->filterByIdContractant(array('min' => 12)); // WHERE id_contractant >= 12
     * $query->filterByIdContractant(array('max' => 12)); // WHERE id_contractant <= 12
     * </code>
     *
     * @param     mixed $idContractant The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecLitigeQuery The current query, for fluid interface
     */
    public function filterByIdContractant($idContractant = null, $comparison = null)
    {
        if (is_array($idContractant)) {
            $useMinMax = false;
            if (isset($idContractant['min'])) {
                $this->addUsingAlias(CommonExecLitigePeer::ID_CONTRACTANT, $idContractant['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idContractant['max'])) {
                $this->addUsingAlias(CommonExecLitigePeer::ID_CONTRACTANT, $idContractant['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecLitigePeer::ID_CONTRACTANT, $idContractant, $comparison);
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
     * @return CommonExecLitigeQuery The current query, for fluid interface
     */
    public function filterByStatut($statut = null, $comparison = null)
    {
        if (is_array($statut)) {
            $useMinMax = false;
            if (isset($statut['min'])) {
                $this->addUsingAlias(CommonExecLitigePeer::STATUT, $statut['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statut['max'])) {
                $this->addUsingAlias(CommonExecLitigePeer::STATUT, $statut['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecLitigePeer::STATUT, $statut, $comparison);
    }

    /**
     * Filter the query on the date_declaration column
     *
     * Example usage:
     * <code>
     * $query->filterByDateDeclaration('2011-03-14'); // WHERE date_declaration = '2011-03-14'
     * $query->filterByDateDeclaration('now'); // WHERE date_declaration = '2011-03-14'
     * $query->filterByDateDeclaration(array('max' => 'yesterday')); // WHERE date_declaration > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateDeclaration The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecLitigeQuery The current query, for fluid interface
     */
    public function filterByDateDeclaration($dateDeclaration = null, $comparison = null)
    {
        if (is_array($dateDeclaration)) {
            $useMinMax = false;
            if (isset($dateDeclaration['min'])) {
                $this->addUsingAlias(CommonExecLitigePeer::DATE_DECLARATION, $dateDeclaration['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateDeclaration['max'])) {
                $this->addUsingAlias(CommonExecLitigePeer::DATE_DECLARATION, $dateDeclaration['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecLitigePeer::DATE_DECLARATION, $dateDeclaration, $comparison);
    }

    /**
     * Filter the query on the date_validation column
     *
     * Example usage:
     * <code>
     * $query->filterByDateValidation('2011-03-14'); // WHERE date_validation = '2011-03-14'
     * $query->filterByDateValidation('now'); // WHERE date_validation = '2011-03-14'
     * $query->filterByDateValidation(array('max' => 'yesterday')); // WHERE date_validation > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateValidation The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecLitigeQuery The current query, for fluid interface
     */
    public function filterByDateValidation($dateValidation = null, $comparison = null)
    {
        if (is_array($dateValidation)) {
            $useMinMax = false;
            if (isset($dateValidation['min'])) {
                $this->addUsingAlias(CommonExecLitigePeer::DATE_VALIDATION, $dateValidation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateValidation['max'])) {
                $this->addUsingAlias(CommonExecLitigePeer::DATE_VALIDATION, $dateValidation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecLitigePeer::DATE_VALIDATION, $dateValidation, $comparison);
    }

    /**
     * Filter the query on the id_agent_validation column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentValidation(1234); // WHERE id_agent_validation = 1234
     * $query->filterByIdAgentValidation(array(12, 34)); // WHERE id_agent_validation IN (12, 34)
     * $query->filterByIdAgentValidation(array('min' => 12)); // WHERE id_agent_validation >= 12
     * $query->filterByIdAgentValidation(array('max' => 12)); // WHERE id_agent_validation <= 12
     * </code>
     *
     * @param     mixed $idAgentValidation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecLitigeQuery The current query, for fluid interface
     */
    public function filterByIdAgentValidation($idAgentValidation = null, $comparison = null)
    {
        if (is_array($idAgentValidation)) {
            $useMinMax = false;
            if (isset($idAgentValidation['min'])) {
                $this->addUsingAlias(CommonExecLitigePeer::ID_AGENT_VALIDATION, $idAgentValidation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentValidation['max'])) {
                $this->addUsingAlias(CommonExecLitigePeer::ID_AGENT_VALIDATION, $idAgentValidation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecLitigePeer::ID_AGENT_VALIDATION, $idAgentValidation, $comparison);
    }

    /**
     * Filter the query on the date_rejet column
     *
     * Example usage:
     * <code>
     * $query->filterByDateRejet('2011-03-14'); // WHERE date_rejet = '2011-03-14'
     * $query->filterByDateRejet('now'); // WHERE date_rejet = '2011-03-14'
     * $query->filterByDateRejet(array('max' => 'yesterday')); // WHERE date_rejet > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateRejet The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecLitigeQuery The current query, for fluid interface
     */
    public function filterByDateRejet($dateRejet = null, $comparison = null)
    {
        if (is_array($dateRejet)) {
            $useMinMax = false;
            if (isset($dateRejet['min'])) {
                $this->addUsingAlias(CommonExecLitigePeer::DATE_REJET, $dateRejet['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateRejet['max'])) {
                $this->addUsingAlias(CommonExecLitigePeer::DATE_REJET, $dateRejet['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecLitigePeer::DATE_REJET, $dateRejet, $comparison);
    }

    /**
     * Filter the query on the id_agent_rejet column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentRejet(1234); // WHERE id_agent_rejet = 1234
     * $query->filterByIdAgentRejet(array(12, 34)); // WHERE id_agent_rejet IN (12, 34)
     * $query->filterByIdAgentRejet(array('min' => 12)); // WHERE id_agent_rejet >= 12
     * $query->filterByIdAgentRejet(array('max' => 12)); // WHERE id_agent_rejet <= 12
     * </code>
     *
     * @param     mixed $idAgentRejet The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecLitigeQuery The current query, for fluid interface
     */
    public function filterByIdAgentRejet($idAgentRejet = null, $comparison = null)
    {
        if (is_array($idAgentRejet)) {
            $useMinMax = false;
            if (isset($idAgentRejet['min'])) {
                $this->addUsingAlias(CommonExecLitigePeer::ID_AGENT_REJET, $idAgentRejet['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentRejet['max'])) {
                $this->addUsingAlias(CommonExecLitigePeer::ID_AGENT_REJET, $idAgentRejet['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecLitigePeer::ID_AGENT_REJET, $idAgentRejet, $comparison);
    }

    /**
     * Filter the query on the commentaire column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentaire('fooValue');   // WHERE commentaire = 'fooValue'
     * $query->filterByCommentaire('%fooValue%'); // WHERE commentaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commentaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecLitigeQuery The current query, for fluid interface
     */
    public function filterByCommentaire($commentaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commentaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commentaire)) {
                $commentaire = str_replace('*', '%', $commentaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecLitigePeer::COMMENTAIRE, $commentaire, $comparison);
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
     * @return CommonExecLitigeQuery The current query, for fluid interface
     */
    public function filterByIdAgentCrea($idAgentCrea = null, $comparison = null)
    {
        if (is_array($idAgentCrea)) {
            $useMinMax = false;
            if (isset($idAgentCrea['min'])) {
                $this->addUsingAlias(CommonExecLitigePeer::ID_AGENT_CREA, $idAgentCrea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentCrea['max'])) {
                $this->addUsingAlias(CommonExecLitigePeer::ID_AGENT_CREA, $idAgentCrea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecLitigePeer::ID_AGENT_CREA, $idAgentCrea, $comparison);
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
     * @return CommonExecLitigeQuery The current query, for fluid interface
     */
    public function filterByDateCrea($dateCrea = null, $comparison = null)
    {
        if (is_array($dateCrea)) {
            $useMinMax = false;
            if (isset($dateCrea['min'])) {
                $this->addUsingAlias(CommonExecLitigePeer::DATE_CREA, $dateCrea['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateCrea['max'])) {
                $this->addUsingAlias(CommonExecLitigePeer::DATE_CREA, $dateCrea['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecLitigePeer::DATE_CREA, $dateCrea, $comparison);
    }

    /**
     * Filter the query on the cloture column
     *
     * Example usage:
     * <code>
     * $query->filterByCloture(true); // WHERE cloture = true
     * $query->filterByCloture('yes'); // WHERE cloture = true
     * </code>
     *
     * @param     boolean|string $cloture The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecLitigeQuery The current query, for fluid interface
     */
    public function filterByCloture($cloture = null, $comparison = null)
    {
        if (is_string($cloture)) {
            $cloture = in_array(strtolower($cloture), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CommonExecLitigePeer::CLOTURE, $cloture, $comparison);
    }

    /**
     * Filter the query on the etat column
     *
     * Example usage:
     * <code>
     * $query->filterByEtat(true); // WHERE etat = true
     * $query->filterByEtat('yes'); // WHERE etat = true
     * </code>
     *
     * @param     boolean|string $etat The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecLitigeQuery The current query, for fluid interface
     */
    public function filterByEtat($etat = null, $comparison = null)
    {
        if (is_string($etat)) {
            $etat = in_array(strtolower($etat), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CommonExecLitigePeer::ETAT, $etat, $comparison);
    }

    /**
     * Filter the query on the decision column
     *
     * Example usage:
     * <code>
     * $query->filterByDecision('fooValue');   // WHERE decision = 'fooValue'
     * $query->filterByDecision('%fooValue%'); // WHERE decision LIKE '%fooValue%'
     * </code>
     *
     * @param     string $decision The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecLitigeQuery The current query, for fluid interface
     */
    public function filterByDecision($decision = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($decision)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $decision)) {
                $decision = str_replace('*', '%', $decision);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecLitigePeer::DECISION, $decision, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonExecLitige $commonExecLitige Object to remove from the list of results
     *
     * @return CommonExecLitigeQuery The current query, for fluid interface
     */
    public function prune($commonExecLitige = null)
    {
        if ($commonExecLitige) {
            $this->addUsingAlias(CommonExecLitigePeer::ID, $commonExecLitige->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
