<?php


/**
 * Base class that represents a query for the 'InscritHistorique' table.
 *
 * 
 *
 * @method CommonInscritHistoriqueQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonInscritHistoriqueQuery orderByEntrepriseId($order = Criteria::ASC) Order by the entreprise_id column
 * @method CommonInscritHistoriqueQuery orderByInscrit1($order = Criteria::ASC) Order by the inscrit1 column
 * @method CommonInscritHistoriqueQuery orderByMail1($order = Criteria::ASC) Order by the mail1 column
 * @method CommonInscritHistoriqueQuery orderByInscrit2($order = Criteria::ASC) Order by the inscrit2 column
 * @method CommonInscritHistoriqueQuery orderByMail2($order = Criteria::ASC) Order by the mail2 column
 * @method CommonInscritHistoriqueQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method CommonInscritHistoriqueQuery orderByAction($order = Criteria::ASC) Order by the action column
 *
 * @method CommonInscritHistoriqueQuery groupById() Group by the id column
 * @method CommonInscritHistoriqueQuery groupByEntrepriseId() Group by the entreprise_id column
 * @method CommonInscritHistoriqueQuery groupByInscrit1() Group by the inscrit1 column
 * @method CommonInscritHistoriqueQuery groupByMail1() Group by the mail1 column
 * @method CommonInscritHistoriqueQuery groupByInscrit2() Group by the inscrit2 column
 * @method CommonInscritHistoriqueQuery groupByMail2() Group by the mail2 column
 * @method CommonInscritHistoriqueQuery groupByDate() Group by the date column
 * @method CommonInscritHistoriqueQuery groupByAction() Group by the action column
 *
 * @method CommonInscritHistoriqueQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonInscritHistoriqueQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonInscritHistoriqueQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonInscritHistorique findOne(PropelPDO $con = null) Return the first CommonInscritHistorique matching the query
 * @method CommonInscritHistorique findOneOrCreate(PropelPDO $con = null) Return the first CommonInscritHistorique matching the query, or a new CommonInscritHistorique object populated from the query conditions when no match is found
 *
 * @method CommonInscritHistorique findOneByEntrepriseId(int $entreprise_id) Return the first CommonInscritHistorique filtered by the entreprise_id column
 * @method CommonInscritHistorique findOneByInscrit1(string $inscrit1) Return the first CommonInscritHistorique filtered by the inscrit1 column
 * @method CommonInscritHistorique findOneByMail1(string $mail1) Return the first CommonInscritHistorique filtered by the mail1 column
 * @method CommonInscritHistorique findOneByInscrit2(string $inscrit2) Return the first CommonInscritHistorique filtered by the inscrit2 column
 * @method CommonInscritHistorique findOneByMail2(string $mail2) Return the first CommonInscritHistorique filtered by the mail2 column
 * @method CommonInscritHistorique findOneByDate(string $date) Return the first CommonInscritHistorique filtered by the date column
 * @method CommonInscritHistorique findOneByAction(int $action) Return the first CommonInscritHistorique filtered by the action column
 *
 * @method array findById(int $id) Return CommonInscritHistorique objects filtered by the id column
 * @method array findByEntrepriseId(int $entreprise_id) Return CommonInscritHistorique objects filtered by the entreprise_id column
 * @method array findByInscrit1(string $inscrit1) Return CommonInscritHistorique objects filtered by the inscrit1 column
 * @method array findByMail1(string $mail1) Return CommonInscritHistorique objects filtered by the mail1 column
 * @method array findByInscrit2(string $inscrit2) Return CommonInscritHistorique objects filtered by the inscrit2 column
 * @method array findByMail2(string $mail2) Return CommonInscritHistorique objects filtered by the mail2 column
 * @method array findByDate(string $date) Return CommonInscritHistorique objects filtered by the date column
 * @method array findByAction(int $action) Return CommonInscritHistorique objects filtered by the action column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonInscritHistoriqueQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonInscritHistoriqueQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonInscritHistorique', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonInscritHistoriqueQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonInscritHistoriqueQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonInscritHistoriqueQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonInscritHistoriqueQuery) {
            return $criteria;
        }
        $query = new CommonInscritHistoriqueQuery();
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
     * @return   CommonInscritHistorique|CommonInscritHistorique[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonInscritHistoriquePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonInscritHistoriquePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonInscritHistorique A model object, or null if the key is not found
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
     * @return                 CommonInscritHistorique A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `entreprise_id`, `inscrit1`, `mail1`, `inscrit2`, `mail2`, `date`, `action` FROM `InscritHistorique` WHERE `id` = :p0';
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
            $obj = new CommonInscritHistorique();
            $obj->hydrate($row);
            CommonInscritHistoriquePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonInscritHistorique|CommonInscritHistorique[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonInscritHistorique[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonInscritHistoriqueQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonInscritHistoriquePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonInscritHistoriqueQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonInscritHistoriquePeer::ID, $keys, Criteria::IN);
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
     * @return CommonInscritHistoriqueQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonInscritHistoriquePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonInscritHistoriquePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonInscritHistoriquePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the entreprise_id column
     *
     * Example usage:
     * <code>
     * $query->filterByEntrepriseId(1234); // WHERE entreprise_id = 1234
     * $query->filterByEntrepriseId(array(12, 34)); // WHERE entreprise_id IN (12, 34)
     * $query->filterByEntrepriseId(array('min' => 12)); // WHERE entreprise_id >= 12
     * $query->filterByEntrepriseId(array('max' => 12)); // WHERE entreprise_id <= 12
     * </code>
     *
     * @param     mixed $entrepriseId The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInscritHistoriqueQuery The current query, for fluid interface
     */
    public function filterByEntrepriseId($entrepriseId = null, $comparison = null)
    {
        if (is_array($entrepriseId)) {
            $useMinMax = false;
            if (isset($entrepriseId['min'])) {
                $this->addUsingAlias(CommonInscritHistoriquePeer::ENTREPRISE_ID, $entrepriseId['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($entrepriseId['max'])) {
                $this->addUsingAlias(CommonInscritHistoriquePeer::ENTREPRISE_ID, $entrepriseId['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonInscritHistoriquePeer::ENTREPRISE_ID, $entrepriseId, $comparison);
    }

    /**
     * Filter the query on the inscrit1 column
     *
     * Example usage:
     * <code>
     * $query->filterByInscrit1('fooValue');   // WHERE inscrit1 = 'fooValue'
     * $query->filterByInscrit1('%fooValue%'); // WHERE inscrit1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inscrit1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInscritHistoriqueQuery The current query, for fluid interface
     */
    public function filterByInscrit1($inscrit1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inscrit1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $inscrit1)) {
                $inscrit1 = str_replace('*', '%', $inscrit1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonInscritHistoriquePeer::INSCRIT1, $inscrit1, $comparison);
    }

    /**
     * Filter the query on the mail1 column
     *
     * Example usage:
     * <code>
     * $query->filterByMail1('fooValue');   // WHERE mail1 = 'fooValue'
     * $query->filterByMail1('%fooValue%'); // WHERE mail1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mail1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInscritHistoriqueQuery The current query, for fluid interface
     */
    public function filterByMail1($mail1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mail1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mail1)) {
                $mail1 = str_replace('*', '%', $mail1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonInscritHistoriquePeer::MAIL1, $mail1, $comparison);
    }

    /**
     * Filter the query on the inscrit2 column
     *
     * Example usage:
     * <code>
     * $query->filterByInscrit2('fooValue');   // WHERE inscrit2 = 'fooValue'
     * $query->filterByInscrit2('%fooValue%'); // WHERE inscrit2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $inscrit2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInscritHistoriqueQuery The current query, for fluid interface
     */
    public function filterByInscrit2($inscrit2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($inscrit2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $inscrit2)) {
                $inscrit2 = str_replace('*', '%', $inscrit2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonInscritHistoriquePeer::INSCRIT2, $inscrit2, $comparison);
    }

    /**
     * Filter the query on the mail2 column
     *
     * Example usage:
     * <code>
     * $query->filterByMail2('fooValue');   // WHERE mail2 = 'fooValue'
     * $query->filterByMail2('%fooValue%'); // WHERE mail2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mail2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInscritHistoriqueQuery The current query, for fluid interface
     */
    public function filterByMail2($mail2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mail2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mail2)) {
                $mail2 = str_replace('*', '%', $mail2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonInscritHistoriquePeer::MAIL2, $mail2, $comparison);
    }

    /**
     * Filter the query on the date column
     *
     * Example usage:
     * <code>
     * $query->filterByDate('fooValue');   // WHERE date = 'fooValue'
     * $query->filterByDate('%fooValue%'); // WHERE date LIKE '%fooValue%'
     * </code>
     *
     * @param     string $date The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInscritHistoriqueQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($date)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $date)) {
                $date = str_replace('*', '%', $date);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonInscritHistoriquePeer::DATE, $date, $comparison);
    }

    /**
     * Filter the query on the action column
     *
     * Example usage:
     * <code>
     * $query->filterByAction(1234); // WHERE action = 1234
     * $query->filterByAction(array(12, 34)); // WHERE action IN (12, 34)
     * $query->filterByAction(array('min' => 12)); // WHERE action >= 12
     * $query->filterByAction(array('max' => 12)); // WHERE action <= 12
     * </code>
     *
     * @param     mixed $action The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonInscritHistoriqueQuery The current query, for fluid interface
     */
    public function filterByAction($action = null, $comparison = null)
    {
        if (is_array($action)) {
            $useMinMax = false;
            if (isset($action['min'])) {
                $this->addUsingAlias(CommonInscritHistoriquePeer::ACTION, $action['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($action['max'])) {
                $this->addUsingAlias(CommonInscritHistoriquePeer::ACTION, $action['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonInscritHistoriquePeer::ACTION, $action, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonInscritHistorique $commonInscritHistorique Object to remove from the list of results
     *
     * @return CommonInscritHistoriqueQuery The current query, for fluid interface
     */
    public function prune($commonInscritHistorique = null)
    {
        if ($commonInscritHistorique) {
            $this->addUsingAlias(CommonInscritHistoriquePeer::ID, $commonInscritHistorique->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
