<?php


/**
 * Base class that represents a query for the 'chorus_numeros_marches' table.
 *
 * 
 *
 * @method CommonChorusNumerosMarchesQuery orderByNumeroMarche($order = Criteria::ASC) Order by the numero_marche column
 * @method CommonChorusNumerosMarchesQuery orderByAcronymeOrganisme($order = Criteria::ASC) Order by the acronyme_organisme column
 * @method CommonChorusNumerosMarchesQuery orderByIdDecision($order = Criteria::ASC) Order by the id_decision column
 *
 * @method CommonChorusNumerosMarchesQuery groupByNumeroMarche() Group by the numero_marche column
 * @method CommonChorusNumerosMarchesQuery groupByAcronymeOrganisme() Group by the acronyme_organisme column
 * @method CommonChorusNumerosMarchesQuery groupByIdDecision() Group by the id_decision column
 *
 * @method CommonChorusNumerosMarchesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonChorusNumerosMarchesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonChorusNumerosMarchesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonChorusNumerosMarches findOne(PropelPDO $con = null) Return the first CommonChorusNumerosMarches matching the query
 * @method CommonChorusNumerosMarches findOneOrCreate(PropelPDO $con = null) Return the first CommonChorusNumerosMarches matching the query, or a new CommonChorusNumerosMarches object populated from the query conditions when no match is found
 *
 * @method CommonChorusNumerosMarches findOneByAcronymeOrganisme(string $acronyme_organisme) Return the first CommonChorusNumerosMarches filtered by the acronyme_organisme column
 * @method CommonChorusNumerosMarches findOneByIdDecision(int $id_decision) Return the first CommonChorusNumerosMarches filtered by the id_decision column
 *
 * @method array findByNumeroMarche(string $numero_marche) Return CommonChorusNumerosMarches objects filtered by the numero_marche column
 * @method array findByAcronymeOrganisme(string $acronyme_organisme) Return CommonChorusNumerosMarches objects filtered by the acronyme_organisme column
 * @method array findByIdDecision(int $id_decision) Return CommonChorusNumerosMarches objects filtered by the id_decision column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonChorusNumerosMarchesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonChorusNumerosMarchesQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonChorusNumerosMarches', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonChorusNumerosMarchesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonChorusNumerosMarchesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonChorusNumerosMarchesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonChorusNumerosMarchesQuery) {
            return $criteria;
        }
        $query = new CommonChorusNumerosMarchesQuery();
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
     * @return   CommonChorusNumerosMarches|CommonChorusNumerosMarches[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonChorusNumerosMarchesPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonChorusNumerosMarchesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonChorusNumerosMarches A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByNumeroMarche($key, $con = null)
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
     * @return                 CommonChorusNumerosMarches A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `numero_marche`, `acronyme_organisme`, `id_decision` FROM `chorus_numeros_marches` WHERE `numero_marche` = :p0';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key, PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonChorusNumerosMarches();
            $obj->hydrate($row);
            CommonChorusNumerosMarchesPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonChorusNumerosMarches|CommonChorusNumerosMarches[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonChorusNumerosMarches[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonChorusNumerosMarchesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonChorusNumerosMarchesPeer::NUMERO_MARCHE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonChorusNumerosMarchesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonChorusNumerosMarchesPeer::NUMERO_MARCHE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the numero_marche column
     *
     * Example usage:
     * <code>
     * $query->filterByNumeroMarche('fooValue');   // WHERE numero_marche = 'fooValue'
     * $query->filterByNumeroMarche('%fooValue%'); // WHERE numero_marche LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numeroMarche The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusNumerosMarchesQuery The current query, for fluid interface
     */
    public function filterByNumeroMarche($numeroMarche = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numeroMarche)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numeroMarche)) {
                $numeroMarche = str_replace('*', '%', $numeroMarche);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusNumerosMarchesPeer::NUMERO_MARCHE, $numeroMarche, $comparison);
    }

    /**
     * Filter the query on the acronyme_organisme column
     *
     * Example usage:
     * <code>
     * $query->filterByAcronymeOrganisme('fooValue');   // WHERE acronyme_organisme = 'fooValue'
     * $query->filterByAcronymeOrganisme('%fooValue%'); // WHERE acronyme_organisme LIKE '%fooValue%'
     * </code>
     *
     * @param     string $acronymeOrganisme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusNumerosMarchesQuery The current query, for fluid interface
     */
    public function filterByAcronymeOrganisme($acronymeOrganisme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($acronymeOrganisme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $acronymeOrganisme)) {
                $acronymeOrganisme = str_replace('*', '%', $acronymeOrganisme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusNumerosMarchesPeer::ACRONYME_ORGANISME, $acronymeOrganisme, $comparison);
    }

    /**
     * Filter the query on the id_decision column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDecision(1234); // WHERE id_decision = 1234
     * $query->filterByIdDecision(array(12, 34)); // WHERE id_decision IN (12, 34)
     * $query->filterByIdDecision(array('min' => 12)); // WHERE id_decision >= 12
     * $query->filterByIdDecision(array('max' => 12)); // WHERE id_decision <= 12
     * </code>
     *
     * @param     mixed $idDecision The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusNumerosMarchesQuery The current query, for fluid interface
     */
    public function filterByIdDecision($idDecision = null, $comparison = null)
    {
        if (is_array($idDecision)) {
            $useMinMax = false;
            if (isset($idDecision['min'])) {
                $this->addUsingAlias(CommonChorusNumerosMarchesPeer::ID_DECISION, $idDecision['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDecision['max'])) {
                $this->addUsingAlias(CommonChorusNumerosMarchesPeer::ID_DECISION, $idDecision['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonChorusNumerosMarchesPeer::ID_DECISION, $idDecision, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonChorusNumerosMarches $commonChorusNumerosMarches Object to remove from the list of results
     *
     * @return CommonChorusNumerosMarchesQuery The current query, for fluid interface
     */
    public function prune($commonChorusNumerosMarches = null)
    {
        if ($commonChorusNumerosMarches) {
            $this->addUsingAlias(CommonChorusNumerosMarchesPeer::NUMERO_MARCHE, $commonChorusNumerosMarches->getNumeroMarche(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
