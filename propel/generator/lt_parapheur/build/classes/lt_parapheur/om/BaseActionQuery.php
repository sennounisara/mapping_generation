<?php


/**
 * Base class that represents a query for the 'action' table.
 *
 * 
 *
 * @method ActionQuery orderByIdAction($order = Criteria::ASC) Order by the ID_ACTION column
 * @method ActionQuery orderByLibelleActionFr($order = Criteria::ASC) Order by the LIBELLE_ACTION_FR column
 * @method ActionQuery orderByLibelleActionAr($order = Criteria::ASC) Order by the LIBELLE_ACTION_AR column
 * @method ActionQuery orderByConditionsVisibilite($order = Criteria::ASC) Order by the CONDITIONS_VISIBILITE column
 *
 * @method ActionQuery groupByIdAction() Group by the ID_ACTION column
 * @method ActionQuery groupByLibelleActionFr() Group by the LIBELLE_ACTION_FR column
 * @method ActionQuery groupByLibelleActionAr() Group by the LIBELLE_ACTION_AR column
 * @method ActionQuery groupByConditionsVisibilite() Group by the CONDITIONS_VISIBILITE column
 *
 * @method ActionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ActionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ActionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Action findOne(PropelPDO $con = null) Return the first Action matching the query
 * @method Action findOneOrCreate(PropelPDO $con = null) Return the first Action matching the query, or a new Action object populated from the query conditions when no match is found
 *
 * @method Action findOneByLibelleActionFr(string $LIBELLE_ACTION_FR) Return the first Action filtered by the LIBELLE_ACTION_FR column
 * @method Action findOneByLibelleActionAr(string $LIBELLE_ACTION_AR) Return the first Action filtered by the LIBELLE_ACTION_AR column
 * @method Action findOneByConditionsVisibilite(string $CONDITIONS_VISIBILITE) Return the first Action filtered by the CONDITIONS_VISIBILITE column
 *
 * @method array findByIdAction(int $ID_ACTION) Return Action objects filtered by the ID_ACTION column
 * @method array findByLibelleActionFr(string $LIBELLE_ACTION_FR) Return Action objects filtered by the LIBELLE_ACTION_FR column
 * @method array findByLibelleActionAr(string $LIBELLE_ACTION_AR) Return Action objects filtered by the LIBELLE_ACTION_AR column
 * @method array findByConditionsVisibilite(string $CONDITIONS_VISIBILITE) Return Action objects filtered by the CONDITIONS_VISIBILITE column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseActionQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseActionQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'Action', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ActionQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ActionQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ActionQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ActionQuery) {
            return $criteria;
        }
        $query = new ActionQuery();
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
     * @return   Action|Action[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ActionPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ActionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Action A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdAction($key, $con = null)
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
     * @return                 Action A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_ACTION`, `LIBELLE_ACTION_FR`, `LIBELLE_ACTION_AR`, `CONDITIONS_VISIBILITE` FROM `action` WHERE `ID_ACTION` = :p0';
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
            $obj = new Action();
            $obj->hydrate($row);
            ActionPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Action|Action[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Action[]|mixed the list of results, formatted by the current formatter
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
     * @return ActionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ActionPeer::ID_ACTION, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ActionQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ActionPeer::ID_ACTION, $keys, Criteria::IN);
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
     * @return ActionQuery The current query, for fluid interface
     */
    public function filterByIdAction($idAction = null, $comparison = null)
    {
        if (is_array($idAction)) {
            $useMinMax = false;
            if (isset($idAction['min'])) {
                $this->addUsingAlias(ActionPeer::ID_ACTION, $idAction['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAction['max'])) {
                $this->addUsingAlias(ActionPeer::ID_ACTION, $idAction['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ActionPeer::ID_ACTION, $idAction, $comparison);
    }

    /**
     * Filter the query on the LIBELLE_ACTION_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleActionFr('fooValue');   // WHERE LIBELLE_ACTION_FR = 'fooValue'
     * $query->filterByLibelleActionFr('%fooValue%'); // WHERE LIBELLE_ACTION_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleActionFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ActionQuery The current query, for fluid interface
     */
    public function filterByLibelleActionFr($libelleActionFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleActionFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleActionFr)) {
                $libelleActionFr = str_replace('*', '%', $libelleActionFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ActionPeer::LIBELLE_ACTION_FR, $libelleActionFr, $comparison);
    }

    /**
     * Filter the query on the LIBELLE_ACTION_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleActionAr('fooValue');   // WHERE LIBELLE_ACTION_AR = 'fooValue'
     * $query->filterByLibelleActionAr('%fooValue%'); // WHERE LIBELLE_ACTION_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleActionAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ActionQuery The current query, for fluid interface
     */
    public function filterByLibelleActionAr($libelleActionAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleActionAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleActionAr)) {
                $libelleActionAr = str_replace('*', '%', $libelleActionAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ActionPeer::LIBELLE_ACTION_AR, $libelleActionAr, $comparison);
    }

    /**
     * Filter the query on the CONDITIONS_VISIBILITE column
     *
     * Example usage:
     * <code>
     * $query->filterByConditionsVisibilite('fooValue');   // WHERE CONDITIONS_VISIBILITE = 'fooValue'
     * $query->filterByConditionsVisibilite('%fooValue%'); // WHERE CONDITIONS_VISIBILITE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $conditionsVisibilite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ActionQuery The current query, for fluid interface
     */
    public function filterByConditionsVisibilite($conditionsVisibilite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($conditionsVisibilite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $conditionsVisibilite)) {
                $conditionsVisibilite = str_replace('*', '%', $conditionsVisibilite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ActionPeer::CONDITIONS_VISIBILITE, $conditionsVisibilite, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Action $action Object to remove from the list of results
     *
     * @return ActionQuery The current query, for fluid interface
     */
    public function prune($action = null)
    {
        if ($action) {
            $this->addUsingAlias(ActionPeer::ID_ACTION, $action->getIdAction(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
