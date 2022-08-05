<?php


/**
 * Base class that represents a query for the 'T_trace_operations_inscrit_details' table.
 *
 * 
 *
 * @method CommonTTraceOperationsInscritDetailsQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonTTraceOperationsInscritDetailsQuery orderByIdTrace($order = Criteria::ASC) Order by the id_trace column
 * @method CommonTTraceOperationsInscritDetailsQuery orderByDateDebutAction($order = Criteria::ASC) Order by the date_debut_action column
 * @method CommonTTraceOperationsInscritDetailsQuery orderByNomAction($order = Criteria::ASC) Order by the nom_action column
 * @method CommonTTraceOperationsInscritDetailsQuery orderByDetails($order = Criteria::ASC) Order by the details column
 * @method CommonTTraceOperationsInscritDetailsQuery orderByDateFinAction($order = Criteria::ASC) Order by the date_fin_action column
 * @method CommonTTraceOperationsInscritDetailsQuery orderByIdDescription($order = Criteria::ASC) Order by the id_description column
 * @method CommonTTraceOperationsInscritDetailsQuery orderByAfficher($order = Criteria::ASC) Order by the afficher column
 * @method CommonTTraceOperationsInscritDetailsQuery orderByDescripton($order = Criteria::ASC) Order by the descripton column
 * @method CommonTTraceOperationsInscritDetailsQuery orderByLogApplet($order = Criteria::ASC) Order by the log_applet column
 *
 * @method CommonTTraceOperationsInscritDetailsQuery groupById() Group by the id column
 * @method CommonTTraceOperationsInscritDetailsQuery groupByIdTrace() Group by the id_trace column
 * @method CommonTTraceOperationsInscritDetailsQuery groupByDateDebutAction() Group by the date_debut_action column
 * @method CommonTTraceOperationsInscritDetailsQuery groupByNomAction() Group by the nom_action column
 * @method CommonTTraceOperationsInscritDetailsQuery groupByDetails() Group by the details column
 * @method CommonTTraceOperationsInscritDetailsQuery groupByDateFinAction() Group by the date_fin_action column
 * @method CommonTTraceOperationsInscritDetailsQuery groupByIdDescription() Group by the id_description column
 * @method CommonTTraceOperationsInscritDetailsQuery groupByAfficher() Group by the afficher column
 * @method CommonTTraceOperationsInscritDetailsQuery groupByDescripton() Group by the descripton column
 * @method CommonTTraceOperationsInscritDetailsQuery groupByLogApplet() Group by the log_applet column
 *
 * @method CommonTTraceOperationsInscritDetailsQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTTraceOperationsInscritDetailsQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTTraceOperationsInscritDetailsQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTTraceOperationsInscritDetails findOne(PropelPDO $con = null) Return the first CommonTTraceOperationsInscritDetails matching the query
 * @method CommonTTraceOperationsInscritDetails findOneOrCreate(PropelPDO $con = null) Return the first CommonTTraceOperationsInscritDetails matching the query, or a new CommonTTraceOperationsInscritDetails object populated from the query conditions when no match is found
 *
 * @method CommonTTraceOperationsInscritDetails findOneByIdTrace(int $id_trace) Return the first CommonTTraceOperationsInscritDetails filtered by the id_trace column
 * @method CommonTTraceOperationsInscritDetails findOneByDateDebutAction(string $date_debut_action) Return the first CommonTTraceOperationsInscritDetails filtered by the date_debut_action column
 * @method CommonTTraceOperationsInscritDetails findOneByNomAction(string $nom_action) Return the first CommonTTraceOperationsInscritDetails filtered by the nom_action column
 * @method CommonTTraceOperationsInscritDetails findOneByDetails(string $details) Return the first CommonTTraceOperationsInscritDetails filtered by the details column
 * @method CommonTTraceOperationsInscritDetails findOneByDateFinAction(string $date_fin_action) Return the first CommonTTraceOperationsInscritDetails filtered by the date_fin_action column
 * @method CommonTTraceOperationsInscritDetails findOneByIdDescription(int $id_description) Return the first CommonTTraceOperationsInscritDetails filtered by the id_description column
 * @method CommonTTraceOperationsInscritDetails findOneByAfficher(string $afficher) Return the first CommonTTraceOperationsInscritDetails filtered by the afficher column
 * @method CommonTTraceOperationsInscritDetails findOneByDescripton(string $descripton) Return the first CommonTTraceOperationsInscritDetails filtered by the descripton column
 * @method CommonTTraceOperationsInscritDetails findOneByLogApplet(string $log_applet) Return the first CommonTTraceOperationsInscritDetails filtered by the log_applet column
 *
 * @method array findById(int $id) Return CommonTTraceOperationsInscritDetails objects filtered by the id column
 * @method array findByIdTrace(int $id_trace) Return CommonTTraceOperationsInscritDetails objects filtered by the id_trace column
 * @method array findByDateDebutAction(string $date_debut_action) Return CommonTTraceOperationsInscritDetails objects filtered by the date_debut_action column
 * @method array findByNomAction(string $nom_action) Return CommonTTraceOperationsInscritDetails objects filtered by the nom_action column
 * @method array findByDetails(string $details) Return CommonTTraceOperationsInscritDetails objects filtered by the details column
 * @method array findByDateFinAction(string $date_fin_action) Return CommonTTraceOperationsInscritDetails objects filtered by the date_fin_action column
 * @method array findByIdDescription(int $id_description) Return CommonTTraceOperationsInscritDetails objects filtered by the id_description column
 * @method array findByAfficher(string $afficher) Return CommonTTraceOperationsInscritDetails objects filtered by the afficher column
 * @method array findByDescripton(string $descripton) Return CommonTTraceOperationsInscritDetails objects filtered by the descripton column
 * @method array findByLogApplet(string $log_applet) Return CommonTTraceOperationsInscritDetails objects filtered by the log_applet column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTTraceOperationsInscritDetailsQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTTraceOperationsInscritDetailsQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTTraceOperationsInscritDetails', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTTraceOperationsInscritDetailsQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTTraceOperationsInscritDetailsQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTTraceOperationsInscritDetailsQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTTraceOperationsInscritDetailsQuery) {
            return $criteria;
        }
        $query = new CommonTTraceOperationsInscritDetailsQuery();
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
     * @return   CommonTTraceOperationsInscritDetails|CommonTTraceOperationsInscritDetails[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTTraceOperationsInscritDetailsPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTTraceOperationsInscritDetailsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTTraceOperationsInscritDetails A model object, or null if the key is not found
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
     * @return                 CommonTTraceOperationsInscritDetails A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_trace`, `date_debut_action`, `nom_action`, `details`, `date_fin_action`, `id_description`, `afficher`, `descripton`, `log_applet` FROM `T_trace_operations_inscrit_details` WHERE `id` = :p0';
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
            $obj = new CommonTTraceOperationsInscritDetails();
            $obj->hydrate($row);
            CommonTTraceOperationsInscritDetailsPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonTTraceOperationsInscritDetails|CommonTTraceOperationsInscritDetails[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTTraceOperationsInscritDetails[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTTraceOperationsInscritDetailsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonTTraceOperationsInscritDetailsPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTTraceOperationsInscritDetailsQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonTTraceOperationsInscritDetailsPeer::ID, $keys, Criteria::IN);
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
     * @return CommonTTraceOperationsInscritDetailsQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonTTraceOperationsInscritDetailsPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonTTraceOperationsInscritDetailsPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTTraceOperationsInscritDetailsPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_trace column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTrace(1234); // WHERE id_trace = 1234
     * $query->filterByIdTrace(array(12, 34)); // WHERE id_trace IN (12, 34)
     * $query->filterByIdTrace(array('min' => 12)); // WHERE id_trace >= 12
     * $query->filterByIdTrace(array('max' => 12)); // WHERE id_trace <= 12
     * </code>
     *
     * @param     mixed $idTrace The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTTraceOperationsInscritDetailsQuery The current query, for fluid interface
     */
    public function filterByIdTrace($idTrace = null, $comparison = null)
    {
        if (is_array($idTrace)) {
            $useMinMax = false;
            if (isset($idTrace['min'])) {
                $this->addUsingAlias(CommonTTraceOperationsInscritDetailsPeer::ID_TRACE, $idTrace['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTrace['max'])) {
                $this->addUsingAlias(CommonTTraceOperationsInscritDetailsPeer::ID_TRACE, $idTrace['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTTraceOperationsInscritDetailsPeer::ID_TRACE, $idTrace, $comparison);
    }

    /**
     * Filter the query on the date_debut_action column
     *
     * Example usage:
     * <code>
     * $query->filterByDateDebutAction('2011-03-14'); // WHERE date_debut_action = '2011-03-14'
     * $query->filterByDateDebutAction('now'); // WHERE date_debut_action = '2011-03-14'
     * $query->filterByDateDebutAction(array('max' => 'yesterday')); // WHERE date_debut_action > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateDebutAction The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTTraceOperationsInscritDetailsQuery The current query, for fluid interface
     */
    public function filterByDateDebutAction($dateDebutAction = null, $comparison = null)
    {
        if (is_array($dateDebutAction)) {
            $useMinMax = false;
            if (isset($dateDebutAction['min'])) {
                $this->addUsingAlias(CommonTTraceOperationsInscritDetailsPeer::DATE_DEBUT_ACTION, $dateDebutAction['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateDebutAction['max'])) {
                $this->addUsingAlias(CommonTTraceOperationsInscritDetailsPeer::DATE_DEBUT_ACTION, $dateDebutAction['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTTraceOperationsInscritDetailsPeer::DATE_DEBUT_ACTION, $dateDebutAction, $comparison);
    }

    /**
     * Filter the query on the nom_action column
     *
     * Example usage:
     * <code>
     * $query->filterByNomAction('fooValue');   // WHERE nom_action = 'fooValue'
     * $query->filterByNomAction('%fooValue%'); // WHERE nom_action LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomAction The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTTraceOperationsInscritDetailsQuery The current query, for fluid interface
     */
    public function filterByNomAction($nomAction = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomAction)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomAction)) {
                $nomAction = str_replace('*', '%', $nomAction);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTTraceOperationsInscritDetailsPeer::NOM_ACTION, $nomAction, $comparison);
    }

    /**
     * Filter the query on the details column
     *
     * Example usage:
     * <code>
     * $query->filterByDetails('fooValue');   // WHERE details = 'fooValue'
     * $query->filterByDetails('%fooValue%'); // WHERE details LIKE '%fooValue%'
     * </code>
     *
     * @param     string $details The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTTraceOperationsInscritDetailsQuery The current query, for fluid interface
     */
    public function filterByDetails($details = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($details)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $details)) {
                $details = str_replace('*', '%', $details);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTTraceOperationsInscritDetailsPeer::DETAILS, $details, $comparison);
    }

    /**
     * Filter the query on the date_fin_action column
     *
     * Example usage:
     * <code>
     * $query->filterByDateFinAction('2011-03-14'); // WHERE date_fin_action = '2011-03-14'
     * $query->filterByDateFinAction('now'); // WHERE date_fin_action = '2011-03-14'
     * $query->filterByDateFinAction(array('max' => 'yesterday')); // WHERE date_fin_action > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateFinAction The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTTraceOperationsInscritDetailsQuery The current query, for fluid interface
     */
    public function filterByDateFinAction($dateFinAction = null, $comparison = null)
    {
        if (is_array($dateFinAction)) {
            $useMinMax = false;
            if (isset($dateFinAction['min'])) {
                $this->addUsingAlias(CommonTTraceOperationsInscritDetailsPeer::DATE_FIN_ACTION, $dateFinAction['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateFinAction['max'])) {
                $this->addUsingAlias(CommonTTraceOperationsInscritDetailsPeer::DATE_FIN_ACTION, $dateFinAction['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTTraceOperationsInscritDetailsPeer::DATE_FIN_ACTION, $dateFinAction, $comparison);
    }

    /**
     * Filter the query on the id_description column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDescription(1234); // WHERE id_description = 1234
     * $query->filterByIdDescription(array(12, 34)); // WHERE id_description IN (12, 34)
     * $query->filterByIdDescription(array('min' => 12)); // WHERE id_description >= 12
     * $query->filterByIdDescription(array('max' => 12)); // WHERE id_description <= 12
     * </code>
     *
     * @param     mixed $idDescription The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTTraceOperationsInscritDetailsQuery The current query, for fluid interface
     */
    public function filterByIdDescription($idDescription = null, $comparison = null)
    {
        if (is_array($idDescription)) {
            $useMinMax = false;
            if (isset($idDescription['min'])) {
                $this->addUsingAlias(CommonTTraceOperationsInscritDetailsPeer::ID_DESCRIPTION, $idDescription['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDescription['max'])) {
                $this->addUsingAlias(CommonTTraceOperationsInscritDetailsPeer::ID_DESCRIPTION, $idDescription['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTTraceOperationsInscritDetailsPeer::ID_DESCRIPTION, $idDescription, $comparison);
    }

    /**
     * Filter the query on the afficher column
     *
     * Example usage:
     * <code>
     * $query->filterByAfficher('fooValue');   // WHERE afficher = 'fooValue'
     * $query->filterByAfficher('%fooValue%'); // WHERE afficher LIKE '%fooValue%'
     * </code>
     *
     * @param     string $afficher The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTTraceOperationsInscritDetailsQuery The current query, for fluid interface
     */
    public function filterByAfficher($afficher = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($afficher)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $afficher)) {
                $afficher = str_replace('*', '%', $afficher);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTTraceOperationsInscritDetailsPeer::AFFICHER, $afficher, $comparison);
    }

    /**
     * Filter the query on the descripton column
     *
     * Example usage:
     * <code>
     * $query->filterByDescripton('fooValue');   // WHERE descripton = 'fooValue'
     * $query->filterByDescripton('%fooValue%'); // WHERE descripton LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descripton The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTTraceOperationsInscritDetailsQuery The current query, for fluid interface
     */
    public function filterByDescripton($descripton = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descripton)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descripton)) {
                $descripton = str_replace('*', '%', $descripton);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTTraceOperationsInscritDetailsPeer::DESCRIPTON, $descripton, $comparison);
    }

    /**
     * Filter the query on the log_applet column
     *
     * Example usage:
     * <code>
     * $query->filterByLogApplet('fooValue');   // WHERE log_applet = 'fooValue'
     * $query->filterByLogApplet('%fooValue%'); // WHERE log_applet LIKE '%fooValue%'
     * </code>
     *
     * @param     string $logApplet The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTTraceOperationsInscritDetailsQuery The current query, for fluid interface
     */
    public function filterByLogApplet($logApplet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($logApplet)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $logApplet)) {
                $logApplet = str_replace('*', '%', $logApplet);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTTraceOperationsInscritDetailsPeer::LOG_APPLET, $logApplet, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTTraceOperationsInscritDetails $commonTTraceOperationsInscritDetails Object to remove from the list of results
     *
     * @return CommonTTraceOperationsInscritDetailsQuery The current query, for fluid interface
     */
    public function prune($commonTTraceOperationsInscritDetails = null)
    {
        if ($commonTTraceOperationsInscritDetails) {
            $this->addUsingAlias(CommonTTraceOperationsInscritDetailsPeer::ID, $commonTTraceOperationsInscritDetails->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
