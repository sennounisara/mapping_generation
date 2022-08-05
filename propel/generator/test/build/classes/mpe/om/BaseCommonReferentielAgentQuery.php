<?php


/**
 * Base class that represents a query for the 'Referentiel_Agent' table.
 *
 * 
 *
 * @method CommonReferentielAgentQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonReferentielAgentQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonReferentielAgentQuery orderByIdAgent($order = Criteria::ASC) Order by the id_Agent column
 * @method CommonReferentielAgentQuery orderByIdLtReferentiel($order = Criteria::ASC) Order by the id_Lt_Referentiel column
 * @method CommonReferentielAgentQuery orderByValeurPrincipaleLtReferentiel($order = Criteria::ASC) Order by the valeur_Principale_Lt_Referentiel column
 * @method CommonReferentielAgentQuery orderByValeurSecondaireLtReferentiel($order = Criteria::ASC) Order by the valeur_Secondaire_Lt_Referentiel column
 *
 * @method CommonReferentielAgentQuery groupById() Group by the id column
 * @method CommonReferentielAgentQuery groupByOrganisme() Group by the organisme column
 * @method CommonReferentielAgentQuery groupByIdAgent() Group by the id_Agent column
 * @method CommonReferentielAgentQuery groupByIdLtReferentiel() Group by the id_Lt_Referentiel column
 * @method CommonReferentielAgentQuery groupByValeurPrincipaleLtReferentiel() Group by the valeur_Principale_Lt_Referentiel column
 * @method CommonReferentielAgentQuery groupByValeurSecondaireLtReferentiel() Group by the valeur_Secondaire_Lt_Referentiel column
 *
 * @method CommonReferentielAgentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonReferentielAgentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonReferentielAgentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonReferentielAgent findOne(PropelPDO $con = null) Return the first CommonReferentielAgent matching the query
 * @method CommonReferentielAgent findOneOrCreate(PropelPDO $con = null) Return the first CommonReferentielAgent matching the query, or a new CommonReferentielAgent object populated from the query conditions when no match is found
 *
 * @method CommonReferentielAgent findOneByOrganisme(string $organisme) Return the first CommonReferentielAgent filtered by the organisme column
 * @method CommonReferentielAgent findOneByIdAgent(int $id_Agent) Return the first CommonReferentielAgent filtered by the id_Agent column
 * @method CommonReferentielAgent findOneByIdLtReferentiel(int $id_Lt_Referentiel) Return the first CommonReferentielAgent filtered by the id_Lt_Referentiel column
 * @method CommonReferentielAgent findOneByValeurPrincipaleLtReferentiel(string $valeur_Principale_Lt_Referentiel) Return the first CommonReferentielAgent filtered by the valeur_Principale_Lt_Referentiel column
 * @method CommonReferentielAgent findOneByValeurSecondaireLtReferentiel(string $valeur_Secondaire_Lt_Referentiel) Return the first CommonReferentielAgent filtered by the valeur_Secondaire_Lt_Referentiel column
 *
 * @method array findById(int $id) Return CommonReferentielAgent objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonReferentielAgent objects filtered by the organisme column
 * @method array findByIdAgent(int $id_Agent) Return CommonReferentielAgent objects filtered by the id_Agent column
 * @method array findByIdLtReferentiel(int $id_Lt_Referentiel) Return CommonReferentielAgent objects filtered by the id_Lt_Referentiel column
 * @method array findByValeurPrincipaleLtReferentiel(string $valeur_Principale_Lt_Referentiel) Return CommonReferentielAgent objects filtered by the valeur_Principale_Lt_Referentiel column
 * @method array findByValeurSecondaireLtReferentiel(string $valeur_Secondaire_Lt_Referentiel) Return CommonReferentielAgent objects filtered by the valeur_Secondaire_Lt_Referentiel column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonReferentielAgentQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonReferentielAgentQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonReferentielAgent', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonReferentielAgentQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonReferentielAgentQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonReferentielAgentQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonReferentielAgentQuery) {
            return $criteria;
        }
        $query = new CommonReferentielAgentQuery();
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
     * @return   CommonReferentielAgent|CommonReferentielAgent[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonReferentielAgentPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonReferentielAgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonReferentielAgent A model object, or null if the key is not found
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
     * @return                 CommonReferentielAgent A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `id_Agent`, `id_Lt_Referentiel`, `valeur_Principale_Lt_Referentiel`, `valeur_Secondaire_Lt_Referentiel` FROM `Referentiel_Agent` WHERE `id` = :p0';
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
            $obj = new CommonReferentielAgent();
            $obj->hydrate($row);
            CommonReferentielAgentPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonReferentielAgent|CommonReferentielAgent[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonReferentielAgent[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonReferentielAgentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonReferentielAgentPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonReferentielAgentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonReferentielAgentPeer::ID, $keys, Criteria::IN);
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
     * @return CommonReferentielAgentQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonReferentielAgentPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonReferentielAgentPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonReferentielAgentPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the organisme column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganisme('fooValue');   // WHERE organisme = 'fooValue'
     * $query->filterByOrganisme('%fooValue%'); // WHERE organisme LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organisme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReferentielAgentQuery The current query, for fluid interface
     */
    public function filterByOrganisme($organisme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($organisme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $organisme)) {
                $organisme = str_replace('*', '%', $organisme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonReferentielAgentPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the id_Agent column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgent(1234); // WHERE id_Agent = 1234
     * $query->filterByIdAgent(array(12, 34)); // WHERE id_Agent IN (12, 34)
     * $query->filterByIdAgent(array('min' => 12)); // WHERE id_Agent >= 12
     * $query->filterByIdAgent(array('max' => 12)); // WHERE id_Agent <= 12
     * </code>
     *
     * @param     mixed $idAgent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReferentielAgentQuery The current query, for fluid interface
     */
    public function filterByIdAgent($idAgent = null, $comparison = null)
    {
        if (is_array($idAgent)) {
            $useMinMax = false;
            if (isset($idAgent['min'])) {
                $this->addUsingAlias(CommonReferentielAgentPeer::ID_AGENT, $idAgent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgent['max'])) {
                $this->addUsingAlias(CommonReferentielAgentPeer::ID_AGENT, $idAgent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonReferentielAgentPeer::ID_AGENT, $idAgent, $comparison);
    }

    /**
     * Filter the query on the id_Lt_Referentiel column
     *
     * Example usage:
     * <code>
     * $query->filterByIdLtReferentiel(1234); // WHERE id_Lt_Referentiel = 1234
     * $query->filterByIdLtReferentiel(array(12, 34)); // WHERE id_Lt_Referentiel IN (12, 34)
     * $query->filterByIdLtReferentiel(array('min' => 12)); // WHERE id_Lt_Referentiel >= 12
     * $query->filterByIdLtReferentiel(array('max' => 12)); // WHERE id_Lt_Referentiel <= 12
     * </code>
     *
     * @param     mixed $idLtReferentiel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReferentielAgentQuery The current query, for fluid interface
     */
    public function filterByIdLtReferentiel($idLtReferentiel = null, $comparison = null)
    {
        if (is_array($idLtReferentiel)) {
            $useMinMax = false;
            if (isset($idLtReferentiel['min'])) {
                $this->addUsingAlias(CommonReferentielAgentPeer::ID_LT_REFERENTIEL, $idLtReferentiel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idLtReferentiel['max'])) {
                $this->addUsingAlias(CommonReferentielAgentPeer::ID_LT_REFERENTIEL, $idLtReferentiel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonReferentielAgentPeer::ID_LT_REFERENTIEL, $idLtReferentiel, $comparison);
    }

    /**
     * Filter the query on the valeur_Principale_Lt_Referentiel column
     *
     * Example usage:
     * <code>
     * $query->filterByValeurPrincipaleLtReferentiel('fooValue');   // WHERE valeur_Principale_Lt_Referentiel = 'fooValue'
     * $query->filterByValeurPrincipaleLtReferentiel('%fooValue%'); // WHERE valeur_Principale_Lt_Referentiel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $valeurPrincipaleLtReferentiel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReferentielAgentQuery The current query, for fluid interface
     */
    public function filterByValeurPrincipaleLtReferentiel($valeurPrincipaleLtReferentiel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($valeurPrincipaleLtReferentiel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $valeurPrincipaleLtReferentiel)) {
                $valeurPrincipaleLtReferentiel = str_replace('*', '%', $valeurPrincipaleLtReferentiel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonReferentielAgentPeer::VALEUR_PRINCIPALE_LT_REFERENTIEL, $valeurPrincipaleLtReferentiel, $comparison);
    }

    /**
     * Filter the query on the valeur_Secondaire_Lt_Referentiel column
     *
     * Example usage:
     * <code>
     * $query->filterByValeurSecondaireLtReferentiel('fooValue');   // WHERE valeur_Secondaire_Lt_Referentiel = 'fooValue'
     * $query->filterByValeurSecondaireLtReferentiel('%fooValue%'); // WHERE valeur_Secondaire_Lt_Referentiel LIKE '%fooValue%'
     * </code>
     *
     * @param     string $valeurSecondaireLtReferentiel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonReferentielAgentQuery The current query, for fluid interface
     */
    public function filterByValeurSecondaireLtReferentiel($valeurSecondaireLtReferentiel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($valeurSecondaireLtReferentiel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $valeurSecondaireLtReferentiel)) {
                $valeurSecondaireLtReferentiel = str_replace('*', '%', $valeurSecondaireLtReferentiel);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonReferentielAgentPeer::VALEUR_SECONDAIRE_LT_REFERENTIEL, $valeurSecondaireLtReferentiel, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonReferentielAgent $commonReferentielAgent Object to remove from the list of results
     *
     * @return CommonReferentielAgentQuery The current query, for fluid interface
     */
    public function prune($commonReferentielAgent = null)
    {
        if ($commonReferentielAgent) {
            $this->addUsingAlias(CommonReferentielAgentPeer::ID, $commonReferentielAgent->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
