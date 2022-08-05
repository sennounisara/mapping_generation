<?php


/**
 * Base class that represents a query for the 'Montant' table.
 *
 * 
 *
 * @method CommonMontantQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonMontantQuery orderByIdEnveloppe($order = Criteria::ASC) Order by the id_enveloppe column
 * @method CommonMontantQuery orderByFormatEnveloppe($order = Criteria::ASC) Order by the format_enveloppe column
 * @method CommonMontantQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonMontantQuery orderByDevise($order = Criteria::ASC) Order by the devise column
 * @method CommonMontantQuery orderByMontant($order = Criteria::ASC) Order by the montant column
 * @method CommonMontantQuery orderByOrder($order = Criteria::ASC) Order by the order column
 *
 * @method CommonMontantQuery groupById() Group by the id column
 * @method CommonMontantQuery groupByIdEnveloppe() Group by the id_enveloppe column
 * @method CommonMontantQuery groupByFormatEnveloppe() Group by the format_enveloppe column
 * @method CommonMontantQuery groupByOrganisme() Group by the organisme column
 * @method CommonMontantQuery groupByDevise() Group by the devise column
 * @method CommonMontantQuery groupByMontant() Group by the montant column
 * @method CommonMontantQuery groupByOrder() Group by the order column
 *
 * @method CommonMontantQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonMontantQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonMontantQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonMontant findOne(PropelPDO $con = null) Return the first CommonMontant matching the query
 * @method CommonMontant findOneOrCreate(PropelPDO $con = null) Return the first CommonMontant matching the query, or a new CommonMontant object populated from the query conditions when no match is found
 *
 * @method CommonMontant findOneByIdEnveloppe(int $id_enveloppe) Return the first CommonMontant filtered by the id_enveloppe column
 * @method CommonMontant findOneByFormatEnveloppe(int $format_enveloppe) Return the first CommonMontant filtered by the format_enveloppe column
 * @method CommonMontant findOneByOrganisme(string $organisme) Return the first CommonMontant filtered by the organisme column
 * @method CommonMontant findOneByDevise(string $devise) Return the first CommonMontant filtered by the devise column
 * @method CommonMontant findOneByMontant(double $montant) Return the first CommonMontant filtered by the montant column
 * @method CommonMontant findOneByOrder(int $order) Return the first CommonMontant filtered by the order column
 *
 * @method array findById(int $id) Return CommonMontant objects filtered by the id column
 * @method array findByIdEnveloppe(int $id_enveloppe) Return CommonMontant objects filtered by the id_enveloppe column
 * @method array findByFormatEnveloppe(int $format_enveloppe) Return CommonMontant objects filtered by the format_enveloppe column
 * @method array findByOrganisme(string $organisme) Return CommonMontant objects filtered by the organisme column
 * @method array findByDevise(string $devise) Return CommonMontant objects filtered by the devise column
 * @method array findByMontant(double $montant) Return CommonMontant objects filtered by the montant column
 * @method array findByOrder(int $order) Return CommonMontant objects filtered by the order column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonMontantQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonMontantQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonMontant', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonMontantQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonMontantQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonMontantQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonMontantQuery) {
            return $criteria;
        }
        $query = new CommonMontantQuery();
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
     * @return   CommonMontant|CommonMontant[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonMontantPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonMontantPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonMontant A model object, or null if the key is not found
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
     * @return                 CommonMontant A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_enveloppe`, `format_enveloppe`, `organisme`, `devise`, `montant`, `order` FROM `Montant` WHERE `id` = :p0';
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
            $obj = new CommonMontant();
            $obj->hydrate($row);
            CommonMontantPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonMontant|CommonMontant[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonMontant[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonMontantQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonMontantPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonMontantQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonMontantPeer::ID, $keys, Criteria::IN);
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
     * @return CommonMontantQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonMontantPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonMontantPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonMontantPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_enveloppe column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEnveloppe(1234); // WHERE id_enveloppe = 1234
     * $query->filterByIdEnveloppe(array(12, 34)); // WHERE id_enveloppe IN (12, 34)
     * $query->filterByIdEnveloppe(array('min' => 12)); // WHERE id_enveloppe >= 12
     * $query->filterByIdEnveloppe(array('max' => 12)); // WHERE id_enveloppe <= 12
     * </code>
     *
     * @param     mixed $idEnveloppe The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMontantQuery The current query, for fluid interface
     */
    public function filterByIdEnveloppe($idEnveloppe = null, $comparison = null)
    {
        if (is_array($idEnveloppe)) {
            $useMinMax = false;
            if (isset($idEnveloppe['min'])) {
                $this->addUsingAlias(CommonMontantPeer::ID_ENVELOPPE, $idEnveloppe['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEnveloppe['max'])) {
                $this->addUsingAlias(CommonMontantPeer::ID_ENVELOPPE, $idEnveloppe['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonMontantPeer::ID_ENVELOPPE, $idEnveloppe, $comparison);
    }

    /**
     * Filter the query on the format_enveloppe column
     *
     * Example usage:
     * <code>
     * $query->filterByFormatEnveloppe(1234); // WHERE format_enveloppe = 1234
     * $query->filterByFormatEnveloppe(array(12, 34)); // WHERE format_enveloppe IN (12, 34)
     * $query->filterByFormatEnveloppe(array('min' => 12)); // WHERE format_enveloppe >= 12
     * $query->filterByFormatEnveloppe(array('max' => 12)); // WHERE format_enveloppe <= 12
     * </code>
     *
     * @param     mixed $formatEnveloppe The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMontantQuery The current query, for fluid interface
     */
    public function filterByFormatEnveloppe($formatEnveloppe = null, $comparison = null)
    {
        if (is_array($formatEnveloppe)) {
            $useMinMax = false;
            if (isset($formatEnveloppe['min'])) {
                $this->addUsingAlias(CommonMontantPeer::FORMAT_ENVELOPPE, $formatEnveloppe['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($formatEnveloppe['max'])) {
                $this->addUsingAlias(CommonMontantPeer::FORMAT_ENVELOPPE, $formatEnveloppe['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonMontantPeer::FORMAT_ENVELOPPE, $formatEnveloppe, $comparison);
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
     * @return CommonMontantQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonMontantPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the devise column
     *
     * Example usage:
     * <code>
     * $query->filterByDevise('fooValue');   // WHERE devise = 'fooValue'
     * $query->filterByDevise('%fooValue%'); // WHERE devise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $devise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMontantQuery The current query, for fluid interface
     */
    public function filterByDevise($devise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($devise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $devise)) {
                $devise = str_replace('*', '%', $devise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonMontantPeer::DEVISE, $devise, $comparison);
    }

    /**
     * Filter the query on the montant column
     *
     * Example usage:
     * <code>
     * $query->filterByMontant(1234); // WHERE montant = 1234
     * $query->filterByMontant(array(12, 34)); // WHERE montant IN (12, 34)
     * $query->filterByMontant(array('min' => 12)); // WHERE montant >= 12
     * $query->filterByMontant(array('max' => 12)); // WHERE montant <= 12
     * </code>
     *
     * @param     mixed $montant The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMontantQuery The current query, for fluid interface
     */
    public function filterByMontant($montant = null, $comparison = null)
    {
        if (is_array($montant)) {
            $useMinMax = false;
            if (isset($montant['min'])) {
                $this->addUsingAlias(CommonMontantPeer::MONTANT, $montant['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montant['max'])) {
                $this->addUsingAlias(CommonMontantPeer::MONTANT, $montant['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonMontantPeer::MONTANT, $montant, $comparison);
    }

    /**
     * Filter the query on the order column
     *
     * Example usage:
     * <code>
     * $query->filterByOrder(1234); // WHERE order = 1234
     * $query->filterByOrder(array(12, 34)); // WHERE order IN (12, 34)
     * $query->filterByOrder(array('min' => 12)); // WHERE order >= 12
     * $query->filterByOrder(array('max' => 12)); // WHERE order <= 12
     * </code>
     *
     * @param     mixed $order The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonMontantQuery The current query, for fluid interface
     */
    public function filterByOrder($order = null, $comparison = null)
    {
        if (is_array($order)) {
            $useMinMax = false;
            if (isset($order['min'])) {
                $this->addUsingAlias(CommonMontantPeer::ORDER, $order['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($order['max'])) {
                $this->addUsingAlias(CommonMontantPeer::ORDER, $order['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonMontantPeer::ORDER, $order, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonMontant $commonMontant Object to remove from the list of results
     *
     * @return CommonMontantQuery The current query, for fluid interface
     */
    public function prune($commonMontant = null)
    {
        if ($commonMontant) {
            $this->addUsingAlias(CommonMontantPeer::ID, $commonMontant->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
