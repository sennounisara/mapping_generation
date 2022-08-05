<?php


/**
 * Base class that represents a query for the 'caution_numerotation_ref_auto' table.
 *
 * 
 *
 * @method CommonCautionNumerotationRefAutoQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonCautionNumerotationRefAutoQuery orderByIdBanque($order = Criteria::ASC) Order by the id_banque column
 * @method CommonCautionNumerotationRefAutoQuery orderByIdRefVille($order = Criteria::ASC) Order by the id_ref_ville column
 * @method CommonCautionNumerotationRefAutoQuery orderByAnnee($order = Criteria::ASC) Order by the annee column
 * @method CommonCautionNumerotationRefAutoQuery orderByIndexAuto($order = Criteria::ASC) Order by the index_auto column
 *
 * @method CommonCautionNumerotationRefAutoQuery groupById() Group by the id column
 * @method CommonCautionNumerotationRefAutoQuery groupByIdBanque() Group by the id_banque column
 * @method CommonCautionNumerotationRefAutoQuery groupByIdRefVille() Group by the id_ref_ville column
 * @method CommonCautionNumerotationRefAutoQuery groupByAnnee() Group by the annee column
 * @method CommonCautionNumerotationRefAutoQuery groupByIndexAuto() Group by the index_auto column
 *
 * @method CommonCautionNumerotationRefAutoQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonCautionNumerotationRefAutoQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonCautionNumerotationRefAutoQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonCautionNumerotationRefAuto findOne(PropelPDO $con = null) Return the first CommonCautionNumerotationRefAuto matching the query
 * @method CommonCautionNumerotationRefAuto findOneOrCreate(PropelPDO $con = null) Return the first CommonCautionNumerotationRefAuto matching the query, or a new CommonCautionNumerotationRefAuto object populated from the query conditions when no match is found
 *
 * @method CommonCautionNumerotationRefAuto findOneByIdBanque(int $id_banque) Return the first CommonCautionNumerotationRefAuto filtered by the id_banque column
 * @method CommonCautionNumerotationRefAuto findOneByIdRefVille(int $id_ref_ville) Return the first CommonCautionNumerotationRefAuto filtered by the id_ref_ville column
 * @method CommonCautionNumerotationRefAuto findOneByAnnee(int $annee) Return the first CommonCautionNumerotationRefAuto filtered by the annee column
 * @method CommonCautionNumerotationRefAuto findOneByIndexAuto(int $index_auto) Return the first CommonCautionNumerotationRefAuto filtered by the index_auto column
 *
 * @method array findById(int $id) Return CommonCautionNumerotationRefAuto objects filtered by the id column
 * @method array findByIdBanque(int $id_banque) Return CommonCautionNumerotationRefAuto objects filtered by the id_banque column
 * @method array findByIdRefVille(int $id_ref_ville) Return CommonCautionNumerotationRefAuto objects filtered by the id_ref_ville column
 * @method array findByAnnee(int $annee) Return CommonCautionNumerotationRefAuto objects filtered by the annee column
 * @method array findByIndexAuto(int $index_auto) Return CommonCautionNumerotationRefAuto objects filtered by the index_auto column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonCautionNumerotationRefAutoQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonCautionNumerotationRefAutoQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonCautionNumerotationRefAuto', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonCautionNumerotationRefAutoQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonCautionNumerotationRefAutoQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonCautionNumerotationRefAutoQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonCautionNumerotationRefAutoQuery) {
            return $criteria;
        }
        $query = new CommonCautionNumerotationRefAutoQuery();
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
     * @return   CommonCautionNumerotationRefAuto|CommonCautionNumerotationRefAuto[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonCautionNumerotationRefAutoPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonCautionNumerotationRefAutoPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonCautionNumerotationRefAuto A model object, or null if the key is not found
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
     * @return                 CommonCautionNumerotationRefAuto A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_banque`, `id_ref_ville`, `annee`, `index_auto` FROM `caution_numerotation_ref_auto` WHERE `id` = :p0';
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
            $obj = new CommonCautionNumerotationRefAuto();
            $obj->hydrate($row);
            CommonCautionNumerotationRefAutoPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonCautionNumerotationRefAuto|CommonCautionNumerotationRefAuto[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonCautionNumerotationRefAuto[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonCautionNumerotationRefAutoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonCautionNumerotationRefAutoPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonCautionNumerotationRefAutoQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonCautionNumerotationRefAutoPeer::ID, $keys, Criteria::IN);
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
     * @return CommonCautionNumerotationRefAutoQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonCautionNumerotationRefAutoPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonCautionNumerotationRefAutoPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionNumerotationRefAutoPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_banque column
     *
     * Example usage:
     * <code>
     * $query->filterByIdBanque(1234); // WHERE id_banque = 1234
     * $query->filterByIdBanque(array(12, 34)); // WHERE id_banque IN (12, 34)
     * $query->filterByIdBanque(array('min' => 12)); // WHERE id_banque >= 12
     * $query->filterByIdBanque(array('max' => 12)); // WHERE id_banque <= 12
     * </code>
     *
     * @param     mixed $idBanque The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionNumerotationRefAutoQuery The current query, for fluid interface
     */
    public function filterByIdBanque($idBanque = null, $comparison = null)
    {
        if (is_array($idBanque)) {
            $useMinMax = false;
            if (isset($idBanque['min'])) {
                $this->addUsingAlias(CommonCautionNumerotationRefAutoPeer::ID_BANQUE, $idBanque['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBanque['max'])) {
                $this->addUsingAlias(CommonCautionNumerotationRefAutoPeer::ID_BANQUE, $idBanque['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionNumerotationRefAutoPeer::ID_BANQUE, $idBanque, $comparison);
    }

    /**
     * Filter the query on the id_ref_ville column
     *
     * Example usage:
     * <code>
     * $query->filterByIdRefVille(1234); // WHERE id_ref_ville = 1234
     * $query->filterByIdRefVille(array(12, 34)); // WHERE id_ref_ville IN (12, 34)
     * $query->filterByIdRefVille(array('min' => 12)); // WHERE id_ref_ville >= 12
     * $query->filterByIdRefVille(array('max' => 12)); // WHERE id_ref_ville <= 12
     * </code>
     *
     * @param     mixed $idRefVille The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionNumerotationRefAutoQuery The current query, for fluid interface
     */
    public function filterByIdRefVille($idRefVille = null, $comparison = null)
    {
        if (is_array($idRefVille)) {
            $useMinMax = false;
            if (isset($idRefVille['min'])) {
                $this->addUsingAlias(CommonCautionNumerotationRefAutoPeer::ID_REF_VILLE, $idRefVille['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idRefVille['max'])) {
                $this->addUsingAlias(CommonCautionNumerotationRefAutoPeer::ID_REF_VILLE, $idRefVille['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionNumerotationRefAutoPeer::ID_REF_VILLE, $idRefVille, $comparison);
    }

    /**
     * Filter the query on the annee column
     *
     * Example usage:
     * <code>
     * $query->filterByAnnee(1234); // WHERE annee = 1234
     * $query->filterByAnnee(array(12, 34)); // WHERE annee IN (12, 34)
     * $query->filterByAnnee(array('min' => 12)); // WHERE annee >= 12
     * $query->filterByAnnee(array('max' => 12)); // WHERE annee <= 12
     * </code>
     *
     * @param     mixed $annee The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionNumerotationRefAutoQuery The current query, for fluid interface
     */
    public function filterByAnnee($annee = null, $comparison = null)
    {
        if (is_array($annee)) {
            $useMinMax = false;
            if (isset($annee['min'])) {
                $this->addUsingAlias(CommonCautionNumerotationRefAutoPeer::ANNEE, $annee['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($annee['max'])) {
                $this->addUsingAlias(CommonCautionNumerotationRefAutoPeer::ANNEE, $annee['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionNumerotationRefAutoPeer::ANNEE, $annee, $comparison);
    }

    /**
     * Filter the query on the index_auto column
     *
     * Example usage:
     * <code>
     * $query->filterByIndexAuto(1234); // WHERE index_auto = 1234
     * $query->filterByIndexAuto(array(12, 34)); // WHERE index_auto IN (12, 34)
     * $query->filterByIndexAuto(array('min' => 12)); // WHERE index_auto >= 12
     * $query->filterByIndexAuto(array('max' => 12)); // WHERE index_auto <= 12
     * </code>
     *
     * @param     mixed $indexAuto The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionNumerotationRefAutoQuery The current query, for fluid interface
     */
    public function filterByIndexAuto($indexAuto = null, $comparison = null)
    {
        if (is_array($indexAuto)) {
            $useMinMax = false;
            if (isset($indexAuto['min'])) {
                $this->addUsingAlias(CommonCautionNumerotationRefAutoPeer::INDEX_AUTO, $indexAuto['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($indexAuto['max'])) {
                $this->addUsingAlias(CommonCautionNumerotationRefAutoPeer::INDEX_AUTO, $indexAuto['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionNumerotationRefAutoPeer::INDEX_AUTO, $indexAuto, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonCautionNumerotationRefAuto $commonCautionNumerotationRefAuto Object to remove from the list of results
     *
     * @return CommonCautionNumerotationRefAutoQuery The current query, for fluid interface
     */
    public function prune($commonCautionNumerotationRefAuto = null)
    {
        if ($commonCautionNumerotationRefAuto) {
            $this->addUsingAlias(CommonCautionNumerotationRefAutoPeer::ID, $commonCautionNumerotationRefAuto->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
