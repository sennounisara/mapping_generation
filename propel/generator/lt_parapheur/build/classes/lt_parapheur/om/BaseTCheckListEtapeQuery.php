<?php


/**
 * Base class that represents a query for the 't_check_list_etape' table.
 *
 * 
 *
 * @method TCheckListEtapeQuery orderById($order = Criteria::ASC) Order by the ID column
 * @method TCheckListEtapeQuery orderByIdEtapeCircuit($order = Criteria::ASC) Order by the ID_ETAPE_CIRCUIT column
 * @method TCheckListEtapeQuery orderByLibelleFr($order = Criteria::ASC) Order by the LIBELLE_FR column
 * @method TCheckListEtapeQuery orderByLibelleAr($order = Criteria::ASC) Order by the LIBELLE_AR column
 * @method TCheckListEtapeQuery orderByTypeCl($order = Criteria::ASC) Order by the TYPE_CL column
 *
 * @method TCheckListEtapeQuery groupById() Group by the ID column
 * @method TCheckListEtapeQuery groupByIdEtapeCircuit() Group by the ID_ETAPE_CIRCUIT column
 * @method TCheckListEtapeQuery groupByLibelleFr() Group by the LIBELLE_FR column
 * @method TCheckListEtapeQuery groupByLibelleAr() Group by the LIBELLE_AR column
 * @method TCheckListEtapeQuery groupByTypeCl() Group by the TYPE_CL column
 *
 * @method TCheckListEtapeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method TCheckListEtapeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method TCheckListEtapeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method TCheckListEtape findOne(PropelPDO $con = null) Return the first TCheckListEtape matching the query
 * @method TCheckListEtape findOneOrCreate(PropelPDO $con = null) Return the first TCheckListEtape matching the query, or a new TCheckListEtape object populated from the query conditions when no match is found
 *
 * @method TCheckListEtape findOneByIdEtapeCircuit(int $ID_ETAPE_CIRCUIT) Return the first TCheckListEtape filtered by the ID_ETAPE_CIRCUIT column
 * @method TCheckListEtape findOneByLibelleFr(string $LIBELLE_FR) Return the first TCheckListEtape filtered by the LIBELLE_FR column
 * @method TCheckListEtape findOneByLibelleAr(string $LIBELLE_AR) Return the first TCheckListEtape filtered by the LIBELLE_AR column
 * @method TCheckListEtape findOneByTypeCl(string $TYPE_CL) Return the first TCheckListEtape filtered by the TYPE_CL column
 *
 * @method array findById(int $ID) Return TCheckListEtape objects filtered by the ID column
 * @method array findByIdEtapeCircuit(int $ID_ETAPE_CIRCUIT) Return TCheckListEtape objects filtered by the ID_ETAPE_CIRCUIT column
 * @method array findByLibelleFr(string $LIBELLE_FR) Return TCheckListEtape objects filtered by the LIBELLE_FR column
 * @method array findByLibelleAr(string $LIBELLE_AR) Return TCheckListEtape objects filtered by the LIBELLE_AR column
 * @method array findByTypeCl(string $TYPE_CL) Return TCheckListEtape objects filtered by the TYPE_CL column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseTCheckListEtapeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseTCheckListEtapeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'TCheckListEtape', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TCheckListEtapeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   TCheckListEtapeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return TCheckListEtapeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TCheckListEtapeQuery) {
            return $criteria;
        }
        $query = new TCheckListEtapeQuery();
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
     * @return   TCheckListEtape|TCheckListEtape[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = TCheckListEtapePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(TCheckListEtapePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TCheckListEtape A model object, or null if the key is not found
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
     * @return                 TCheckListEtape A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID`, `ID_ETAPE_CIRCUIT`, `LIBELLE_FR`, `LIBELLE_AR`, `TYPE_CL` FROM `t_check_list_etape` WHERE `ID` = :p0';
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
            $obj = new TCheckListEtape();
            $obj->hydrate($row);
            TCheckListEtapePeer::addInstanceToPool($obj, (string) $key);
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
     * @return TCheckListEtape|TCheckListEtape[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|TCheckListEtape[]|mixed the list of results, formatted by the current formatter
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
     * @return TCheckListEtapeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(TCheckListEtapePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return TCheckListEtapeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(TCheckListEtapePeer::ID, $keys, Criteria::IN);
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
     * @return TCheckListEtapeQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(TCheckListEtapePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(TCheckListEtapePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TCheckListEtapePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the ID_ETAPE_CIRCUIT column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEtapeCircuit(1234); // WHERE ID_ETAPE_CIRCUIT = 1234
     * $query->filterByIdEtapeCircuit(array(12, 34)); // WHERE ID_ETAPE_CIRCUIT IN (12, 34)
     * $query->filterByIdEtapeCircuit(array('min' => 12)); // WHERE ID_ETAPE_CIRCUIT >= 12
     * $query->filterByIdEtapeCircuit(array('max' => 12)); // WHERE ID_ETAPE_CIRCUIT <= 12
     * </code>
     *
     * @param     mixed $idEtapeCircuit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TCheckListEtapeQuery The current query, for fluid interface
     */
    public function filterByIdEtapeCircuit($idEtapeCircuit = null, $comparison = null)
    {
        if (is_array($idEtapeCircuit)) {
            $useMinMax = false;
            if (isset($idEtapeCircuit['min'])) {
                $this->addUsingAlias(TCheckListEtapePeer::ID_ETAPE_CIRCUIT, $idEtapeCircuit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEtapeCircuit['max'])) {
                $this->addUsingAlias(TCheckListEtapePeer::ID_ETAPE_CIRCUIT, $idEtapeCircuit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(TCheckListEtapePeer::ID_ETAPE_CIRCUIT, $idEtapeCircuit, $comparison);
    }

    /**
     * Filter the query on the LIBELLE_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleFr('fooValue');   // WHERE LIBELLE_FR = 'fooValue'
     * $query->filterByLibelleFr('%fooValue%'); // WHERE LIBELLE_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TCheckListEtapeQuery The current query, for fluid interface
     */
    public function filterByLibelleFr($libelleFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleFr)) {
                $libelleFr = str_replace('*', '%', $libelleFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TCheckListEtapePeer::LIBELLE_FR, $libelleFr, $comparison);
    }

    /**
     * Filter the query on the LIBELLE_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleAr('fooValue');   // WHERE LIBELLE_AR = 'fooValue'
     * $query->filterByLibelleAr('%fooValue%'); // WHERE LIBELLE_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TCheckListEtapeQuery The current query, for fluid interface
     */
    public function filterByLibelleAr($libelleAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleAr)) {
                $libelleAr = str_replace('*', '%', $libelleAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TCheckListEtapePeer::LIBELLE_AR, $libelleAr, $comparison);
    }

    /**
     * Filter the query on the TYPE_CL column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeCl('fooValue');   // WHERE TYPE_CL = 'fooValue'
     * $query->filterByTypeCl('%fooValue%'); // WHERE TYPE_CL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeCl The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return TCheckListEtapeQuery The current query, for fluid interface
     */
    public function filterByTypeCl($typeCl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeCl)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeCl)) {
                $typeCl = str_replace('*', '%', $typeCl);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(TCheckListEtapePeer::TYPE_CL, $typeCl, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   TCheckListEtape $tCheckListEtape Object to remove from the list of results
     *
     * @return TCheckListEtapeQuery The current query, for fluid interface
     */
    public function prune($tCheckListEtape = null)
    {
        if ($tCheckListEtape) {
            $this->addUsingAlias(TCheckListEtapePeer::ID, $tCheckListEtape->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
