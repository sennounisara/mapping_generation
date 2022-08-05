<?php


/**
 * Base class that represents a query for the 'Operations' table.
 *
 * 
 *
 * @method CommonOperationsQuery orderByIdOperation($order = Criteria::ASC) Order by the id_operation column
 * @method CommonOperationsQuery orderByAcronyme($order = Criteria::ASC) Order by the acronyme column
 * @method CommonOperationsQuery orderByIdService($order = Criteria::ASC) Order by the id_service column
 * @method CommonOperationsQuery orderByIdAgent($order = Criteria::ASC) Order by the id_agent column
 * @method CommonOperationsQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method CommonOperationsQuery orderByCategorie($order = Criteria::ASC) Order by the categorie column
 * @method CommonOperationsQuery orderByCode($order = Criteria::ASC) Order by the code column
 * @method CommonOperationsQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method CommonOperationsQuery orderByAnneeDebut($order = Criteria::ASC) Order by the annee_debut column
 * @method CommonOperationsQuery orderByAnneeFin($order = Criteria::ASC) Order by the annee_fin column
 * @method CommonOperationsQuery orderByBudget($order = Criteria::ASC) Order by the budget column
 * @method CommonOperationsQuery orderByDateCreation($order = Criteria::ASC) Order by the date_creation column
 * @method CommonOperationsQuery orderByDateModification($order = Criteria::ASC) Order by the date_modification column
 * @method CommonOperationsQuery orderBySupprime($order = Criteria::ASC) Order by the supprime column
 *
 * @method CommonOperationsQuery groupByIdOperation() Group by the id_operation column
 * @method CommonOperationsQuery groupByAcronyme() Group by the acronyme column
 * @method CommonOperationsQuery groupByIdService() Group by the id_service column
 * @method CommonOperationsQuery groupByIdAgent() Group by the id_agent column
 * @method CommonOperationsQuery groupByType() Group by the type column
 * @method CommonOperationsQuery groupByCategorie() Group by the categorie column
 * @method CommonOperationsQuery groupByCode() Group by the code column
 * @method CommonOperationsQuery groupByDescription() Group by the description column
 * @method CommonOperationsQuery groupByAnneeDebut() Group by the annee_debut column
 * @method CommonOperationsQuery groupByAnneeFin() Group by the annee_fin column
 * @method CommonOperationsQuery groupByBudget() Group by the budget column
 * @method CommonOperationsQuery groupByDateCreation() Group by the date_creation column
 * @method CommonOperationsQuery groupByDateModification() Group by the date_modification column
 * @method CommonOperationsQuery groupBySupprime() Group by the supprime column
 *
 * @method CommonOperationsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonOperationsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonOperationsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonOperations findOne(PropelPDO $con = null) Return the first CommonOperations matching the query
 * @method CommonOperations findOneOrCreate(PropelPDO $con = null) Return the first CommonOperations matching the query, or a new CommonOperations object populated from the query conditions when no match is found
 *
 * @method CommonOperations findOneByAcronyme(string $acronyme) Return the first CommonOperations filtered by the acronyme column
 * @method CommonOperations findOneByIdService(int $id_service) Return the first CommonOperations filtered by the id_service column
 * @method CommonOperations findOneByIdAgent(int $id_agent) Return the first CommonOperations filtered by the id_agent column
 * @method CommonOperations findOneByType(int $type) Return the first CommonOperations filtered by the type column
 * @method CommonOperations findOneByCategorie(int $categorie) Return the first CommonOperations filtered by the categorie column
 * @method CommonOperations findOneByCode(string $code) Return the first CommonOperations filtered by the code column
 * @method CommonOperations findOneByDescription(string $description) Return the first CommonOperations filtered by the description column
 * @method CommonOperations findOneByAnneeDebut(string $annee_debut) Return the first CommonOperations filtered by the annee_debut column
 * @method CommonOperations findOneByAnneeFin(string $annee_fin) Return the first CommonOperations filtered by the annee_fin column
 * @method CommonOperations findOneByBudget(string $budget) Return the first CommonOperations filtered by the budget column
 * @method CommonOperations findOneByDateCreation(string $date_creation) Return the first CommonOperations filtered by the date_creation column
 * @method CommonOperations findOneByDateModification(string $date_modification) Return the first CommonOperations filtered by the date_modification column
 * @method CommonOperations findOneBySupprime(string $supprime) Return the first CommonOperations filtered by the supprime column
 *
 * @method array findByIdOperation(int $id_operation) Return CommonOperations objects filtered by the id_operation column
 * @method array findByAcronyme(string $acronyme) Return CommonOperations objects filtered by the acronyme column
 * @method array findByIdService(int $id_service) Return CommonOperations objects filtered by the id_service column
 * @method array findByIdAgent(int $id_agent) Return CommonOperations objects filtered by the id_agent column
 * @method array findByType(int $type) Return CommonOperations objects filtered by the type column
 * @method array findByCategorie(int $categorie) Return CommonOperations objects filtered by the categorie column
 * @method array findByCode(string $code) Return CommonOperations objects filtered by the code column
 * @method array findByDescription(string $description) Return CommonOperations objects filtered by the description column
 * @method array findByAnneeDebut(string $annee_debut) Return CommonOperations objects filtered by the annee_debut column
 * @method array findByAnneeFin(string $annee_fin) Return CommonOperations objects filtered by the annee_fin column
 * @method array findByBudget(string $budget) Return CommonOperations objects filtered by the budget column
 * @method array findByDateCreation(string $date_creation) Return CommonOperations objects filtered by the date_creation column
 * @method array findByDateModification(string $date_modification) Return CommonOperations objects filtered by the date_modification column
 * @method array findBySupprime(string $supprime) Return CommonOperations objects filtered by the supprime column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonOperationsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonOperationsQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonOperations', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonOperationsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonOperationsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonOperationsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonOperationsQuery) {
            return $criteria;
        }
        $query = new CommonOperationsQuery();
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
     * @return   CommonOperations|CommonOperations[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonOperationsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonOperationsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonOperations A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdOperation($key, $con = null)
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
     * @return                 CommonOperations A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_operation`, `acronyme`, `id_service`, `id_agent`, `type`, `categorie`, `code`, `description`, `annee_debut`, `annee_fin`, `budget`, `date_creation`, `date_modification`, `supprime` FROM `Operations` WHERE `id_operation` = :p0';
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
            $obj = new CommonOperations();
            $obj->hydrate($row);
            CommonOperationsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonOperations|CommonOperations[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonOperations[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonOperationsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonOperationsPeer::ID_OPERATION, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonOperationsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonOperationsPeer::ID_OPERATION, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_operation column
     *
     * Example usage:
     * <code>
     * $query->filterByIdOperation(1234); // WHERE id_operation = 1234
     * $query->filterByIdOperation(array(12, 34)); // WHERE id_operation IN (12, 34)
     * $query->filterByIdOperation(array('min' => 12)); // WHERE id_operation >= 12
     * $query->filterByIdOperation(array('max' => 12)); // WHERE id_operation <= 12
     * </code>
     *
     * @param     mixed $idOperation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOperationsQuery The current query, for fluid interface
     */
    public function filterByIdOperation($idOperation = null, $comparison = null)
    {
        if (is_array($idOperation)) {
            $useMinMax = false;
            if (isset($idOperation['min'])) {
                $this->addUsingAlias(CommonOperationsPeer::ID_OPERATION, $idOperation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idOperation['max'])) {
                $this->addUsingAlias(CommonOperationsPeer::ID_OPERATION, $idOperation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOperationsPeer::ID_OPERATION, $idOperation, $comparison);
    }

    /**
     * Filter the query on the acronyme column
     *
     * Example usage:
     * <code>
     * $query->filterByAcronyme('fooValue');   // WHERE acronyme = 'fooValue'
     * $query->filterByAcronyme('%fooValue%'); // WHERE acronyme LIKE '%fooValue%'
     * </code>
     *
     * @param     string $acronyme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOperationsQuery The current query, for fluid interface
     */
    public function filterByAcronyme($acronyme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($acronyme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $acronyme)) {
                $acronyme = str_replace('*', '%', $acronyme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOperationsPeer::ACRONYME, $acronyme, $comparison);
    }

    /**
     * Filter the query on the id_service column
     *
     * Example usage:
     * <code>
     * $query->filterByIdService(1234); // WHERE id_service = 1234
     * $query->filterByIdService(array(12, 34)); // WHERE id_service IN (12, 34)
     * $query->filterByIdService(array('min' => 12)); // WHERE id_service >= 12
     * $query->filterByIdService(array('max' => 12)); // WHERE id_service <= 12
     * </code>
     *
     * @param     mixed $idService The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOperationsQuery The current query, for fluid interface
     */
    public function filterByIdService($idService = null, $comparison = null)
    {
        if (is_array($idService)) {
            $useMinMax = false;
            if (isset($idService['min'])) {
                $this->addUsingAlias(CommonOperationsPeer::ID_SERVICE, $idService['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idService['max'])) {
                $this->addUsingAlias(CommonOperationsPeer::ID_SERVICE, $idService['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOperationsPeer::ID_SERVICE, $idService, $comparison);
    }

    /**
     * Filter the query on the id_agent column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgent(1234); // WHERE id_agent = 1234
     * $query->filterByIdAgent(array(12, 34)); // WHERE id_agent IN (12, 34)
     * $query->filterByIdAgent(array('min' => 12)); // WHERE id_agent >= 12
     * $query->filterByIdAgent(array('max' => 12)); // WHERE id_agent <= 12
     * </code>
     *
     * @param     mixed $idAgent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOperationsQuery The current query, for fluid interface
     */
    public function filterByIdAgent($idAgent = null, $comparison = null)
    {
        if (is_array($idAgent)) {
            $useMinMax = false;
            if (isset($idAgent['min'])) {
                $this->addUsingAlias(CommonOperationsPeer::ID_AGENT, $idAgent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgent['max'])) {
                $this->addUsingAlias(CommonOperationsPeer::ID_AGENT, $idAgent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOperationsPeer::ID_AGENT, $idAgent, $comparison);
    }

    /**
     * Filter the query on the type column
     *
     * Example usage:
     * <code>
     * $query->filterByType(1234); // WHERE type = 1234
     * $query->filterByType(array(12, 34)); // WHERE type IN (12, 34)
     * $query->filterByType(array('min' => 12)); // WHERE type >= 12
     * $query->filterByType(array('max' => 12)); // WHERE type <= 12
     * </code>
     *
     * @param     mixed $type The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOperationsQuery The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (is_array($type)) {
            $useMinMax = false;
            if (isset($type['min'])) {
                $this->addUsingAlias(CommonOperationsPeer::TYPE, $type['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($type['max'])) {
                $this->addUsingAlias(CommonOperationsPeer::TYPE, $type['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOperationsPeer::TYPE, $type, $comparison);
    }

    /**
     * Filter the query on the categorie column
     *
     * Example usage:
     * <code>
     * $query->filterByCategorie(1234); // WHERE categorie = 1234
     * $query->filterByCategorie(array(12, 34)); // WHERE categorie IN (12, 34)
     * $query->filterByCategorie(array('min' => 12)); // WHERE categorie >= 12
     * $query->filterByCategorie(array('max' => 12)); // WHERE categorie <= 12
     * </code>
     *
     * @param     mixed $categorie The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOperationsQuery The current query, for fluid interface
     */
    public function filterByCategorie($categorie = null, $comparison = null)
    {
        if (is_array($categorie)) {
            $useMinMax = false;
            if (isset($categorie['min'])) {
                $this->addUsingAlias(CommonOperationsPeer::CATEGORIE, $categorie['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($categorie['max'])) {
                $this->addUsingAlias(CommonOperationsPeer::CATEGORIE, $categorie['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonOperationsPeer::CATEGORIE, $categorie, $comparison);
    }

    /**
     * Filter the query on the code column
     *
     * Example usage:
     * <code>
     * $query->filterByCode('fooValue');   // WHERE code = 'fooValue'
     * $query->filterByCode('%fooValue%'); // WHERE code LIKE '%fooValue%'
     * </code>
     *
     * @param     string $code The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOperationsQuery The current query, for fluid interface
     */
    public function filterByCode($code = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($code)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $code)) {
                $code = str_replace('*', '%', $code);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOperationsPeer::CODE, $code, $comparison);
    }

    /**
     * Filter the query on the description column
     *
     * Example usage:
     * <code>
     * $query->filterByDescription('fooValue');   // WHERE description = 'fooValue'
     * $query->filterByDescription('%fooValue%'); // WHERE description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $description The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOperationsQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $description)) {
                $description = str_replace('*', '%', $description);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOperationsPeer::DESCRIPTION, $description, $comparison);
    }

    /**
     * Filter the query on the annee_debut column
     *
     * Example usage:
     * <code>
     * $query->filterByAnneeDebut('fooValue');   // WHERE annee_debut = 'fooValue'
     * $query->filterByAnneeDebut('%fooValue%'); // WHERE annee_debut LIKE '%fooValue%'
     * </code>
     *
     * @param     string $anneeDebut The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOperationsQuery The current query, for fluid interface
     */
    public function filterByAnneeDebut($anneeDebut = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($anneeDebut)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $anneeDebut)) {
                $anneeDebut = str_replace('*', '%', $anneeDebut);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOperationsPeer::ANNEE_DEBUT, $anneeDebut, $comparison);
    }

    /**
     * Filter the query on the annee_fin column
     *
     * Example usage:
     * <code>
     * $query->filterByAnneeFin('fooValue');   // WHERE annee_fin = 'fooValue'
     * $query->filterByAnneeFin('%fooValue%'); // WHERE annee_fin LIKE '%fooValue%'
     * </code>
     *
     * @param     string $anneeFin The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOperationsQuery The current query, for fluid interface
     */
    public function filterByAnneeFin($anneeFin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($anneeFin)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $anneeFin)) {
                $anneeFin = str_replace('*', '%', $anneeFin);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOperationsPeer::ANNEE_FIN, $anneeFin, $comparison);
    }

    /**
     * Filter the query on the budget column
     *
     * Example usage:
     * <code>
     * $query->filterByBudget('fooValue');   // WHERE budget = 'fooValue'
     * $query->filterByBudget('%fooValue%'); // WHERE budget LIKE '%fooValue%'
     * </code>
     *
     * @param     string $budget The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOperationsQuery The current query, for fluid interface
     */
    public function filterByBudget($budget = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($budget)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $budget)) {
                $budget = str_replace('*', '%', $budget);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOperationsPeer::BUDGET, $budget, $comparison);
    }

    /**
     * Filter the query on the date_creation column
     *
     * Example usage:
     * <code>
     * $query->filterByDateCreation('fooValue');   // WHERE date_creation = 'fooValue'
     * $query->filterByDateCreation('%fooValue%'); // WHERE date_creation LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateCreation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOperationsQuery The current query, for fluid interface
     */
    public function filterByDateCreation($dateCreation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateCreation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateCreation)) {
                $dateCreation = str_replace('*', '%', $dateCreation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOperationsPeer::DATE_CREATION, $dateCreation, $comparison);
    }

    /**
     * Filter the query on the date_modification column
     *
     * Example usage:
     * <code>
     * $query->filterByDateModification('fooValue');   // WHERE date_modification = 'fooValue'
     * $query->filterByDateModification('%fooValue%'); // WHERE date_modification LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateModification The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOperationsQuery The current query, for fluid interface
     */
    public function filterByDateModification($dateModification = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateModification)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateModification)) {
                $dateModification = str_replace('*', '%', $dateModification);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOperationsPeer::DATE_MODIFICATION, $dateModification, $comparison);
    }

    /**
     * Filter the query on the supprime column
     *
     * Example usage:
     * <code>
     * $query->filterBySupprime('fooValue');   // WHERE supprime = 'fooValue'
     * $query->filterBySupprime('%fooValue%'); // WHERE supprime LIKE '%fooValue%'
     * </code>
     *
     * @param     string $supprime The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonOperationsQuery The current query, for fluid interface
     */
    public function filterBySupprime($supprime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($supprime)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $supprime)) {
                $supprime = str_replace('*', '%', $supprime);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonOperationsPeer::SUPPRIME, $supprime, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonOperations $commonOperations Object to remove from the list of results
     *
     * @return CommonOperationsQuery The current query, for fluid interface
     */
    public function prune($commonOperations = null)
    {
        if ($commonOperations) {
            $this->addUsingAlias(CommonOperationsPeer::ID_OPERATION, $commonOperations->getIdOperation(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
