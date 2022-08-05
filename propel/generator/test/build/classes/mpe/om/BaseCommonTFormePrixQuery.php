<?php


/**
 * Base class that represents a query for the 't_forme_prix' table.
 *
 * 
 *
 * @method CommonTFormePrixQuery orderByIdFormePrix($order = Criteria::ASC) Order by the id_forme_prix column
 * @method CommonTFormePrixQuery orderByFormePrix($order = Criteria::ASC) Order by the forme_prix column
 * @method CommonTFormePrixQuery orderByPfEstimationHt($order = Criteria::ASC) Order by the pf_estimation_ht column
 * @method CommonTFormePrixQuery orderByPfEstimationTtc($order = Criteria::ASC) Order by the pf_estimation_ttc column
 * @method CommonTFormePrixQuery orderByPfDateValeur($order = Criteria::ASC) Order by the pf_date_valeur column
 * @method CommonTFormePrixQuery orderByIdMinMax($order = Criteria::ASC) Order by the id_min_max column
 * @method CommonTFormePrixQuery orderByModalite($order = Criteria::ASC) Order by the modalite column
 * @method CommonTFormePrixQuery orderByPuMin($order = Criteria::ASC) Order by the pu_min column
 * @method CommonTFormePrixQuery orderByPuMax($order = Criteria::ASC) Order by the pu_max column
 * @method CommonTFormePrixQuery orderByPuMinTtc($order = Criteria::ASC) Order by the pu_min_ttc column
 * @method CommonTFormePrixQuery orderByPuMaxTtc($order = Criteria::ASC) Order by the pu_max_ttc column
 * @method CommonTFormePrixQuery orderByPuEstimationHt($order = Criteria::ASC) Order by the pu_estimation_ht column
 * @method CommonTFormePrixQuery orderByPuEstimationTtc($order = Criteria::ASC) Order by the pu_estimation_ttc column
 * @method CommonTFormePrixQuery orderByPuDateValeur($order = Criteria::ASC) Order by the pu_date_valeur column
 *
 * @method CommonTFormePrixQuery groupByIdFormePrix() Group by the id_forme_prix column
 * @method CommonTFormePrixQuery groupByFormePrix() Group by the forme_prix column
 * @method CommonTFormePrixQuery groupByPfEstimationHt() Group by the pf_estimation_ht column
 * @method CommonTFormePrixQuery groupByPfEstimationTtc() Group by the pf_estimation_ttc column
 * @method CommonTFormePrixQuery groupByPfDateValeur() Group by the pf_date_valeur column
 * @method CommonTFormePrixQuery groupByIdMinMax() Group by the id_min_max column
 * @method CommonTFormePrixQuery groupByModalite() Group by the modalite column
 * @method CommonTFormePrixQuery groupByPuMin() Group by the pu_min column
 * @method CommonTFormePrixQuery groupByPuMax() Group by the pu_max column
 * @method CommonTFormePrixQuery groupByPuMinTtc() Group by the pu_min_ttc column
 * @method CommonTFormePrixQuery groupByPuMaxTtc() Group by the pu_max_ttc column
 * @method CommonTFormePrixQuery groupByPuEstimationHt() Group by the pu_estimation_ht column
 * @method CommonTFormePrixQuery groupByPuEstimationTtc() Group by the pu_estimation_ttc column
 * @method CommonTFormePrixQuery groupByPuDateValeur() Group by the pu_date_valeur column
 *
 * @method CommonTFormePrixQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTFormePrixQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTFormePrixQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTFormePrixQuery leftJoinCommonTTranche($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTTranche relation
 * @method CommonTFormePrixQuery rightJoinCommonTTranche($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTTranche relation
 * @method CommonTFormePrixQuery innerJoinCommonTTranche($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTTranche relation
 *
 * @method CommonTFormePrix findOne(PropelPDO $con = null) Return the first CommonTFormePrix matching the query
 * @method CommonTFormePrix findOneOrCreate(PropelPDO $con = null) Return the first CommonTFormePrix matching the query, or a new CommonTFormePrix object populated from the query conditions when no match is found
 *
 * @method CommonTFormePrix findOneByFormePrix(string $forme_prix) Return the first CommonTFormePrix filtered by the forme_prix column
 * @method CommonTFormePrix findOneByPfEstimationHt(string $pf_estimation_ht) Return the first CommonTFormePrix filtered by the pf_estimation_ht column
 * @method CommonTFormePrix findOneByPfEstimationTtc(string $pf_estimation_ttc) Return the first CommonTFormePrix filtered by the pf_estimation_ttc column
 * @method CommonTFormePrix findOneByPfDateValeur(string $pf_date_valeur) Return the first CommonTFormePrix filtered by the pf_date_valeur column
 * @method CommonTFormePrix findOneByIdMinMax(int $id_min_max) Return the first CommonTFormePrix filtered by the id_min_max column
 * @method CommonTFormePrix findOneByModalite(string $modalite) Return the first CommonTFormePrix filtered by the modalite column
 * @method CommonTFormePrix findOneByPuMin(string $pu_min) Return the first CommonTFormePrix filtered by the pu_min column
 * @method CommonTFormePrix findOneByPuMax(string $pu_max) Return the first CommonTFormePrix filtered by the pu_max column
 * @method CommonTFormePrix findOneByPuMinTtc(string $pu_min_ttc) Return the first CommonTFormePrix filtered by the pu_min_ttc column
 * @method CommonTFormePrix findOneByPuMaxTtc(string $pu_max_ttc) Return the first CommonTFormePrix filtered by the pu_max_ttc column
 * @method CommonTFormePrix findOneByPuEstimationHt(string $pu_estimation_ht) Return the first CommonTFormePrix filtered by the pu_estimation_ht column
 * @method CommonTFormePrix findOneByPuEstimationTtc(string $pu_estimation_ttc) Return the first CommonTFormePrix filtered by the pu_estimation_ttc column
 * @method CommonTFormePrix findOneByPuDateValeur(string $pu_date_valeur) Return the first CommonTFormePrix filtered by the pu_date_valeur column
 *
 * @method array findByIdFormePrix(int $id_forme_prix) Return CommonTFormePrix objects filtered by the id_forme_prix column
 * @method array findByFormePrix(string $forme_prix) Return CommonTFormePrix objects filtered by the forme_prix column
 * @method array findByPfEstimationHt(string $pf_estimation_ht) Return CommonTFormePrix objects filtered by the pf_estimation_ht column
 * @method array findByPfEstimationTtc(string $pf_estimation_ttc) Return CommonTFormePrix objects filtered by the pf_estimation_ttc column
 * @method array findByPfDateValeur(string $pf_date_valeur) Return CommonTFormePrix objects filtered by the pf_date_valeur column
 * @method array findByIdMinMax(int $id_min_max) Return CommonTFormePrix objects filtered by the id_min_max column
 * @method array findByModalite(string $modalite) Return CommonTFormePrix objects filtered by the modalite column
 * @method array findByPuMin(string $pu_min) Return CommonTFormePrix objects filtered by the pu_min column
 * @method array findByPuMax(string $pu_max) Return CommonTFormePrix objects filtered by the pu_max column
 * @method array findByPuMinTtc(string $pu_min_ttc) Return CommonTFormePrix objects filtered by the pu_min_ttc column
 * @method array findByPuMaxTtc(string $pu_max_ttc) Return CommonTFormePrix objects filtered by the pu_max_ttc column
 * @method array findByPuEstimationHt(string $pu_estimation_ht) Return CommonTFormePrix objects filtered by the pu_estimation_ht column
 * @method array findByPuEstimationTtc(string $pu_estimation_ttc) Return CommonTFormePrix objects filtered by the pu_estimation_ttc column
 * @method array findByPuDateValeur(string $pu_date_valeur) Return CommonTFormePrix objects filtered by the pu_date_valeur column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTFormePrixQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTFormePrixQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTFormePrix', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTFormePrixQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTFormePrixQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTFormePrixQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTFormePrixQuery) {
            return $criteria;
        }
        $query = new CommonTFormePrixQuery();
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
     * @return   CommonTFormePrix|CommonTFormePrix[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTFormePrixPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTFormePrixPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTFormePrix A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdFormePrix($key, $con = null)
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
     * @return                 CommonTFormePrix A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_forme_prix`, `forme_prix`, `pf_estimation_ht`, `pf_estimation_ttc`, `pf_date_valeur`, `id_min_max`, `modalite`, `pu_min`, `pu_max`, `pu_min_ttc`, `pu_max_ttc`, `pu_estimation_ht`, `pu_estimation_ttc`, `pu_date_valeur` FROM `t_forme_prix` WHERE `id_forme_prix` = :p0';
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
            $obj = new CommonTFormePrix();
            $obj->hydrate($row);
            CommonTFormePrixPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonTFormePrix|CommonTFormePrix[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTFormePrix[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTFormePrixQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonTFormePrixPeer::ID_FORME_PRIX, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTFormePrixQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonTFormePrixPeer::ID_FORME_PRIX, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_forme_prix column
     *
     * Example usage:
     * <code>
     * $query->filterByIdFormePrix(1234); // WHERE id_forme_prix = 1234
     * $query->filterByIdFormePrix(array(12, 34)); // WHERE id_forme_prix IN (12, 34)
     * $query->filterByIdFormePrix(array('min' => 12)); // WHERE id_forme_prix >= 12
     * $query->filterByIdFormePrix(array('max' => 12)); // WHERE id_forme_prix <= 12
     * </code>
     *
     * @param     mixed $idFormePrix The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTFormePrixQuery The current query, for fluid interface
     */
    public function filterByIdFormePrix($idFormePrix = null, $comparison = null)
    {
        if (is_array($idFormePrix)) {
            $useMinMax = false;
            if (isset($idFormePrix['min'])) {
                $this->addUsingAlias(CommonTFormePrixPeer::ID_FORME_PRIX, $idFormePrix['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idFormePrix['max'])) {
                $this->addUsingAlias(CommonTFormePrixPeer::ID_FORME_PRIX, $idFormePrix['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTFormePrixPeer::ID_FORME_PRIX, $idFormePrix, $comparison);
    }

    /**
     * Filter the query on the forme_prix column
     *
     * Example usage:
     * <code>
     * $query->filterByFormePrix('fooValue');   // WHERE forme_prix = 'fooValue'
     * $query->filterByFormePrix('%fooValue%'); // WHERE forme_prix LIKE '%fooValue%'
     * </code>
     *
     * @param     string $formePrix The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTFormePrixQuery The current query, for fluid interface
     */
    public function filterByFormePrix($formePrix = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($formePrix)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $formePrix)) {
                $formePrix = str_replace('*', '%', $formePrix);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTFormePrixPeer::FORME_PRIX, $formePrix, $comparison);
    }

    /**
     * Filter the query on the pf_estimation_ht column
     *
     * Example usage:
     * <code>
     * $query->filterByPfEstimationHt(1234); // WHERE pf_estimation_ht = 1234
     * $query->filterByPfEstimationHt(array(12, 34)); // WHERE pf_estimation_ht IN (12, 34)
     * $query->filterByPfEstimationHt(array('min' => 12)); // WHERE pf_estimation_ht >= 12
     * $query->filterByPfEstimationHt(array('max' => 12)); // WHERE pf_estimation_ht <= 12
     * </code>
     *
     * @param     mixed $pfEstimationHt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTFormePrixQuery The current query, for fluid interface
     */
    public function filterByPfEstimationHt($pfEstimationHt = null, $comparison = null)
    {
        if (is_array($pfEstimationHt)) {
            $useMinMax = false;
            if (isset($pfEstimationHt['min'])) {
                $this->addUsingAlias(CommonTFormePrixPeer::PF_ESTIMATION_HT, $pfEstimationHt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pfEstimationHt['max'])) {
                $this->addUsingAlias(CommonTFormePrixPeer::PF_ESTIMATION_HT, $pfEstimationHt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTFormePrixPeer::PF_ESTIMATION_HT, $pfEstimationHt, $comparison);
    }

    /**
     * Filter the query on the pf_estimation_ttc column
     *
     * Example usage:
     * <code>
     * $query->filterByPfEstimationTtc(1234); // WHERE pf_estimation_ttc = 1234
     * $query->filterByPfEstimationTtc(array(12, 34)); // WHERE pf_estimation_ttc IN (12, 34)
     * $query->filterByPfEstimationTtc(array('min' => 12)); // WHERE pf_estimation_ttc >= 12
     * $query->filterByPfEstimationTtc(array('max' => 12)); // WHERE pf_estimation_ttc <= 12
     * </code>
     *
     * @param     mixed $pfEstimationTtc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTFormePrixQuery The current query, for fluid interface
     */
    public function filterByPfEstimationTtc($pfEstimationTtc = null, $comparison = null)
    {
        if (is_array($pfEstimationTtc)) {
            $useMinMax = false;
            if (isset($pfEstimationTtc['min'])) {
                $this->addUsingAlias(CommonTFormePrixPeer::PF_ESTIMATION_TTC, $pfEstimationTtc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pfEstimationTtc['max'])) {
                $this->addUsingAlias(CommonTFormePrixPeer::PF_ESTIMATION_TTC, $pfEstimationTtc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTFormePrixPeer::PF_ESTIMATION_TTC, $pfEstimationTtc, $comparison);
    }

    /**
     * Filter the query on the pf_date_valeur column
     *
     * Example usage:
     * <code>
     * $query->filterByPfDateValeur('2011-03-14'); // WHERE pf_date_valeur = '2011-03-14'
     * $query->filterByPfDateValeur('now'); // WHERE pf_date_valeur = '2011-03-14'
     * $query->filterByPfDateValeur(array('max' => 'yesterday')); // WHERE pf_date_valeur > '2011-03-13'
     * </code>
     *
     * @param     mixed $pfDateValeur The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTFormePrixQuery The current query, for fluid interface
     */
    public function filterByPfDateValeur($pfDateValeur = null, $comparison = null)
    {
        if (is_array($pfDateValeur)) {
            $useMinMax = false;
            if (isset($pfDateValeur['min'])) {
                $this->addUsingAlias(CommonTFormePrixPeer::PF_DATE_VALEUR, $pfDateValeur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($pfDateValeur['max'])) {
                $this->addUsingAlias(CommonTFormePrixPeer::PF_DATE_VALEUR, $pfDateValeur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTFormePrixPeer::PF_DATE_VALEUR, $pfDateValeur, $comparison);
    }

    /**
     * Filter the query on the id_min_max column
     *
     * Example usage:
     * <code>
     * $query->filterByIdMinMax(1234); // WHERE id_min_max = 1234
     * $query->filterByIdMinMax(array(12, 34)); // WHERE id_min_max IN (12, 34)
     * $query->filterByIdMinMax(array('min' => 12)); // WHERE id_min_max >= 12
     * $query->filterByIdMinMax(array('max' => 12)); // WHERE id_min_max <= 12
     * </code>
     *
     * @param     mixed $idMinMax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTFormePrixQuery The current query, for fluid interface
     */
    public function filterByIdMinMax($idMinMax = null, $comparison = null)
    {
        if (is_array($idMinMax)) {
            $useMinMax = false;
            if (isset($idMinMax['min'])) {
                $this->addUsingAlias(CommonTFormePrixPeer::ID_MIN_MAX, $idMinMax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idMinMax['max'])) {
                $this->addUsingAlias(CommonTFormePrixPeer::ID_MIN_MAX, $idMinMax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTFormePrixPeer::ID_MIN_MAX, $idMinMax, $comparison);
    }

    /**
     * Filter the query on the modalite column
     *
     * Example usage:
     * <code>
     * $query->filterByModalite('fooValue');   // WHERE modalite = 'fooValue'
     * $query->filterByModalite('%fooValue%'); // WHERE modalite LIKE '%fooValue%'
     * </code>
     *
     * @param     string $modalite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTFormePrixQuery The current query, for fluid interface
     */
    public function filterByModalite($modalite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($modalite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $modalite)) {
                $modalite = str_replace('*', '%', $modalite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTFormePrixPeer::MODALITE, $modalite, $comparison);
    }

    /**
     * Filter the query on the pu_min column
     *
     * Example usage:
     * <code>
     * $query->filterByPuMin(1234); // WHERE pu_min = 1234
     * $query->filterByPuMin(array(12, 34)); // WHERE pu_min IN (12, 34)
     * $query->filterByPuMin(array('min' => 12)); // WHERE pu_min >= 12
     * $query->filterByPuMin(array('max' => 12)); // WHERE pu_min <= 12
     * </code>
     *
     * @param     mixed $puMin The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTFormePrixQuery The current query, for fluid interface
     */
    public function filterByPuMin($puMin = null, $comparison = null)
    {
        if (is_array($puMin)) {
            $useMinMax = false;
            if (isset($puMin['min'])) {
                $this->addUsingAlias(CommonTFormePrixPeer::PU_MIN, $puMin['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($puMin['max'])) {
                $this->addUsingAlias(CommonTFormePrixPeer::PU_MIN, $puMin['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTFormePrixPeer::PU_MIN, $puMin, $comparison);
    }

    /**
     * Filter the query on the pu_max column
     *
     * Example usage:
     * <code>
     * $query->filterByPuMax(1234); // WHERE pu_max = 1234
     * $query->filterByPuMax(array(12, 34)); // WHERE pu_max IN (12, 34)
     * $query->filterByPuMax(array('min' => 12)); // WHERE pu_max >= 12
     * $query->filterByPuMax(array('max' => 12)); // WHERE pu_max <= 12
     * </code>
     *
     * @param     mixed $puMax The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTFormePrixQuery The current query, for fluid interface
     */
    public function filterByPuMax($puMax = null, $comparison = null)
    {
        if (is_array($puMax)) {
            $useMinMax = false;
            if (isset($puMax['min'])) {
                $this->addUsingAlias(CommonTFormePrixPeer::PU_MAX, $puMax['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($puMax['max'])) {
                $this->addUsingAlias(CommonTFormePrixPeer::PU_MAX, $puMax['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTFormePrixPeer::PU_MAX, $puMax, $comparison);
    }

    /**
     * Filter the query on the pu_min_ttc column
     *
     * Example usage:
     * <code>
     * $query->filterByPuMinTtc(1234); // WHERE pu_min_ttc = 1234
     * $query->filterByPuMinTtc(array(12, 34)); // WHERE pu_min_ttc IN (12, 34)
     * $query->filterByPuMinTtc(array('min' => 12)); // WHERE pu_min_ttc >= 12
     * $query->filterByPuMinTtc(array('max' => 12)); // WHERE pu_min_ttc <= 12
     * </code>
     *
     * @param     mixed $puMinTtc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTFormePrixQuery The current query, for fluid interface
     */
    public function filterByPuMinTtc($puMinTtc = null, $comparison = null)
    {
        if (is_array($puMinTtc)) {
            $useMinMax = false;
            if (isset($puMinTtc['min'])) {
                $this->addUsingAlias(CommonTFormePrixPeer::PU_MIN_TTC, $puMinTtc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($puMinTtc['max'])) {
                $this->addUsingAlias(CommonTFormePrixPeer::PU_MIN_TTC, $puMinTtc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTFormePrixPeer::PU_MIN_TTC, $puMinTtc, $comparison);
    }

    /**
     * Filter the query on the pu_max_ttc column
     *
     * Example usage:
     * <code>
     * $query->filterByPuMaxTtc(1234); // WHERE pu_max_ttc = 1234
     * $query->filterByPuMaxTtc(array(12, 34)); // WHERE pu_max_ttc IN (12, 34)
     * $query->filterByPuMaxTtc(array('min' => 12)); // WHERE pu_max_ttc >= 12
     * $query->filterByPuMaxTtc(array('max' => 12)); // WHERE pu_max_ttc <= 12
     * </code>
     *
     * @param     mixed $puMaxTtc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTFormePrixQuery The current query, for fluid interface
     */
    public function filterByPuMaxTtc($puMaxTtc = null, $comparison = null)
    {
        if (is_array($puMaxTtc)) {
            $useMinMax = false;
            if (isset($puMaxTtc['min'])) {
                $this->addUsingAlias(CommonTFormePrixPeer::PU_MAX_TTC, $puMaxTtc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($puMaxTtc['max'])) {
                $this->addUsingAlias(CommonTFormePrixPeer::PU_MAX_TTC, $puMaxTtc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTFormePrixPeer::PU_MAX_TTC, $puMaxTtc, $comparison);
    }

    /**
     * Filter the query on the pu_estimation_ht column
     *
     * Example usage:
     * <code>
     * $query->filterByPuEstimationHt(1234); // WHERE pu_estimation_ht = 1234
     * $query->filterByPuEstimationHt(array(12, 34)); // WHERE pu_estimation_ht IN (12, 34)
     * $query->filterByPuEstimationHt(array('min' => 12)); // WHERE pu_estimation_ht >= 12
     * $query->filterByPuEstimationHt(array('max' => 12)); // WHERE pu_estimation_ht <= 12
     * </code>
     *
     * @param     mixed $puEstimationHt The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTFormePrixQuery The current query, for fluid interface
     */
    public function filterByPuEstimationHt($puEstimationHt = null, $comparison = null)
    {
        if (is_array($puEstimationHt)) {
            $useMinMax = false;
            if (isset($puEstimationHt['min'])) {
                $this->addUsingAlias(CommonTFormePrixPeer::PU_ESTIMATION_HT, $puEstimationHt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($puEstimationHt['max'])) {
                $this->addUsingAlias(CommonTFormePrixPeer::PU_ESTIMATION_HT, $puEstimationHt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTFormePrixPeer::PU_ESTIMATION_HT, $puEstimationHt, $comparison);
    }

    /**
     * Filter the query on the pu_estimation_ttc column
     *
     * Example usage:
     * <code>
     * $query->filterByPuEstimationTtc(1234); // WHERE pu_estimation_ttc = 1234
     * $query->filterByPuEstimationTtc(array(12, 34)); // WHERE pu_estimation_ttc IN (12, 34)
     * $query->filterByPuEstimationTtc(array('min' => 12)); // WHERE pu_estimation_ttc >= 12
     * $query->filterByPuEstimationTtc(array('max' => 12)); // WHERE pu_estimation_ttc <= 12
     * </code>
     *
     * @param     mixed $puEstimationTtc The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTFormePrixQuery The current query, for fluid interface
     */
    public function filterByPuEstimationTtc($puEstimationTtc = null, $comparison = null)
    {
        if (is_array($puEstimationTtc)) {
            $useMinMax = false;
            if (isset($puEstimationTtc['min'])) {
                $this->addUsingAlias(CommonTFormePrixPeer::PU_ESTIMATION_TTC, $puEstimationTtc['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($puEstimationTtc['max'])) {
                $this->addUsingAlias(CommonTFormePrixPeer::PU_ESTIMATION_TTC, $puEstimationTtc['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTFormePrixPeer::PU_ESTIMATION_TTC, $puEstimationTtc, $comparison);
    }

    /**
     * Filter the query on the pu_date_valeur column
     *
     * Example usage:
     * <code>
     * $query->filterByPuDateValeur('2011-03-14'); // WHERE pu_date_valeur = '2011-03-14'
     * $query->filterByPuDateValeur('now'); // WHERE pu_date_valeur = '2011-03-14'
     * $query->filterByPuDateValeur(array('max' => 'yesterday')); // WHERE pu_date_valeur > '2011-03-13'
     * </code>
     *
     * @param     mixed $puDateValeur The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTFormePrixQuery The current query, for fluid interface
     */
    public function filterByPuDateValeur($puDateValeur = null, $comparison = null)
    {
        if (is_array($puDateValeur)) {
            $useMinMax = false;
            if (isset($puDateValeur['min'])) {
                $this->addUsingAlias(CommonTFormePrixPeer::PU_DATE_VALEUR, $puDateValeur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($puDateValeur['max'])) {
                $this->addUsingAlias(CommonTFormePrixPeer::PU_DATE_VALEUR, $puDateValeur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTFormePrixPeer::PU_DATE_VALEUR, $puDateValeur, $comparison);
    }

    /**
     * Filter the query by a related CommonTTranche object
     *
     * @param   CommonTTranche|PropelObjectCollection $commonTTranche  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTFormePrixQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTTranche($commonTTranche, $comparison = null)
    {
        if ($commonTTranche instanceof CommonTTranche) {
            return $this
                ->addUsingAlias(CommonTFormePrixPeer::ID_FORME_PRIX, $commonTTranche->getIdFormePrix(), $comparison);
        } elseif ($commonTTranche instanceof PropelObjectCollection) {
            return $this
                ->useCommonTTrancheQuery()
                ->filterByPrimaryKeys($commonTTranche->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonTTranche() only accepts arguments of type CommonTTranche or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTTranche relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTFormePrixQuery The current query, for fluid interface
     */
    public function joinCommonTTranche($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTTranche');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonTTranche');
        }

        return $this;
    }

    /**
     * Use the CommonTTranche relation CommonTTranche object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTTrancheQuery A secondary query class using the current class as primary query
     */
    public function useCommonTTrancheQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonTTranche($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTTranche', 'CommonTTrancheQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTFormePrix $commonTFormePrix Object to remove from the list of results
     *
     * @return CommonTFormePrixQuery The current query, for fluid interface
     */
    public function prune($commonTFormePrix = null)
    {
        if ($commonTFormePrix) {
            $this->addUsingAlias(CommonTFormePrixPeer::ID_FORME_PRIX, $commonTFormePrix->getIdFormePrix(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
