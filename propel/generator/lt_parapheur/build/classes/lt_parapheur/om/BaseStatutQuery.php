<?php


/**
 * Base class that represents a query for the 'statut' table.
 *
 * 
 *
 * @method StatutQuery orderByIdStatut($order = Criteria::ASC) Order by the ID_STATUT column
 * @method StatutQuery orderByLibeleStatutFr($order = Criteria::ASC) Order by the LIBELE_STATUT_FR column
 * @method StatutQuery orderByLibeleStatutAr($order = Criteria::ASC) Order by the LIBELE_STATUT_AR column
 * @method StatutQuery orderByIdAction($order = Criteria::ASC) Order by the ID_ACTION column
 * @method StatutQuery orderByIsEchange($order = Criteria::ASC) Order by the IS_ECHANGE column
 *
 * @method StatutQuery groupByIdStatut() Group by the ID_STATUT column
 * @method StatutQuery groupByLibeleStatutFr() Group by the LIBELE_STATUT_FR column
 * @method StatutQuery groupByLibeleStatutAr() Group by the LIBELE_STATUT_AR column
 * @method StatutQuery groupByIdAction() Group by the ID_ACTION column
 * @method StatutQuery groupByIsEchange() Group by the IS_ECHANGE column
 *
 * @method StatutQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method StatutQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method StatutQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method Statut findOne(PropelPDO $con = null) Return the first Statut matching the query
 * @method Statut findOneOrCreate(PropelPDO $con = null) Return the first Statut matching the query, or a new Statut object populated from the query conditions when no match is found
 *
 * @method Statut findOneByLibeleStatutFr(string $LIBELE_STATUT_FR) Return the first Statut filtered by the LIBELE_STATUT_FR column
 * @method Statut findOneByLibeleStatutAr(string $LIBELE_STATUT_AR) Return the first Statut filtered by the LIBELE_STATUT_AR column
 * @method Statut findOneByIdAction(int $ID_ACTION) Return the first Statut filtered by the ID_ACTION column
 * @method Statut findOneByIsEchange(string $IS_ECHANGE) Return the first Statut filtered by the IS_ECHANGE column
 *
 * @method array findByIdStatut(int $ID_STATUT) Return Statut objects filtered by the ID_STATUT column
 * @method array findByLibeleStatutFr(string $LIBELE_STATUT_FR) Return Statut objects filtered by the LIBELE_STATUT_FR column
 * @method array findByLibeleStatutAr(string $LIBELE_STATUT_AR) Return Statut objects filtered by the LIBELE_STATUT_AR column
 * @method array findByIdAction(int $ID_ACTION) Return Statut objects filtered by the ID_ACTION column
 * @method array findByIsEchange(string $IS_ECHANGE) Return Statut objects filtered by the IS_ECHANGE column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseStatutQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseStatutQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'Statut', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new StatutQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   StatutQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return StatutQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof StatutQuery) {
            return $criteria;
        }
        $query = new StatutQuery();
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
     * @return   Statut|Statut[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = StatutPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(StatutPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Statut A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdStatut($key, $con = null)
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
     * @return                 Statut A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_STATUT`, `LIBELE_STATUT_FR`, `LIBELE_STATUT_AR`, `ID_ACTION`, `IS_ECHANGE` FROM `statut` WHERE `ID_STATUT` = :p0';
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
            $obj = new Statut();
            $obj->hydrate($row);
            StatutPeer::addInstanceToPool($obj, (string) $key);
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
     * @return Statut|Statut[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|Statut[]|mixed the list of results, formatted by the current formatter
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
     * @return StatutQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(StatutPeer::ID_STATUT, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return StatutQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(StatutPeer::ID_STATUT, $keys, Criteria::IN);
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
     * @return StatutQuery The current query, for fluid interface
     */
    public function filterByIdStatut($idStatut = null, $comparison = null)
    {
        if (is_array($idStatut)) {
            $useMinMax = false;
            if (isset($idStatut['min'])) {
                $this->addUsingAlias(StatutPeer::ID_STATUT, $idStatut['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idStatut['max'])) {
                $this->addUsingAlias(StatutPeer::ID_STATUT, $idStatut['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatutPeer::ID_STATUT, $idStatut, $comparison);
    }

    /**
     * Filter the query on the LIBELE_STATUT_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByLibeleStatutFr('fooValue');   // WHERE LIBELE_STATUT_FR = 'fooValue'
     * $query->filterByLibeleStatutFr('%fooValue%'); // WHERE LIBELE_STATUT_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libeleStatutFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatutQuery The current query, for fluid interface
     */
    public function filterByLibeleStatutFr($libeleStatutFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libeleStatutFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libeleStatutFr)) {
                $libeleStatutFr = str_replace('*', '%', $libeleStatutFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StatutPeer::LIBELE_STATUT_FR, $libeleStatutFr, $comparison);
    }

    /**
     * Filter the query on the LIBELE_STATUT_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByLibeleStatutAr('fooValue');   // WHERE LIBELE_STATUT_AR = 'fooValue'
     * $query->filterByLibeleStatutAr('%fooValue%'); // WHERE LIBELE_STATUT_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libeleStatutAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatutQuery The current query, for fluid interface
     */
    public function filterByLibeleStatutAr($libeleStatutAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libeleStatutAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libeleStatutAr)) {
                $libeleStatutAr = str_replace('*', '%', $libeleStatutAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StatutPeer::LIBELE_STATUT_AR, $libeleStatutAr, $comparison);
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
     * @return StatutQuery The current query, for fluid interface
     */
    public function filterByIdAction($idAction = null, $comparison = null)
    {
        if (is_array($idAction)) {
            $useMinMax = false;
            if (isset($idAction['min'])) {
                $this->addUsingAlias(StatutPeer::ID_ACTION, $idAction['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAction['max'])) {
                $this->addUsingAlias(StatutPeer::ID_ACTION, $idAction['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(StatutPeer::ID_ACTION, $idAction, $comparison);
    }

    /**
     * Filter the query on the IS_ECHANGE column
     *
     * Example usage:
     * <code>
     * $query->filterByIsEchange('fooValue');   // WHERE IS_ECHANGE = 'fooValue'
     * $query->filterByIsEchange('%fooValue%'); // WHERE IS_ECHANGE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $isEchange The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return StatutQuery The current query, for fluid interface
     */
    public function filterByIsEchange($isEchange = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($isEchange)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $isEchange)) {
                $isEchange = str_replace('*', '%', $isEchange);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(StatutPeer::IS_ECHANGE, $isEchange, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   Statut $statut Object to remove from the list of results
     *
     * @return StatutQuery The current query, for fluid interface
     */
    public function prune($statut = null)
    {
        if ($statut) {
            $this->addUsingAlias(StatutPeer::ID_STATUT, $statut->getIdStatut(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
