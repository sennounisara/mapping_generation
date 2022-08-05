<?php


/**
 * Base class that represents a query for the 'caution_historique' table.
 *
 * 
 *
 * @method CommonCautionHistoriqueQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonCautionHistoriqueQuery orderByIdCaution($order = Criteria::ASC) Order by the id_caution column
 * @method CommonCautionHistoriqueQuery orderByDetailAction($order = Criteria::ASC) Order by the detail_action column
 * @method CommonCautionHistoriqueQuery orderByActeur($order = Criteria::ASC) Order by the acteur column
 * @method CommonCautionHistoriqueQuery orderByDateAction($order = Criteria::ASC) Order by the date_action column
 * @method CommonCautionHistoriqueQuery orderByInfos($order = Criteria::ASC) Order by the infos column
 * @method CommonCautionHistoriqueQuery orderByUserType($order = Criteria::ASC) Order by the user_type column
 *
 * @method CommonCautionHistoriqueQuery groupById() Group by the id column
 * @method CommonCautionHistoriqueQuery groupByIdCaution() Group by the id_caution column
 * @method CommonCautionHistoriqueQuery groupByDetailAction() Group by the detail_action column
 * @method CommonCautionHistoriqueQuery groupByActeur() Group by the acteur column
 * @method CommonCautionHistoriqueQuery groupByDateAction() Group by the date_action column
 * @method CommonCautionHistoriqueQuery groupByInfos() Group by the infos column
 * @method CommonCautionHistoriqueQuery groupByUserType() Group by the user_type column
 *
 * @method CommonCautionHistoriqueQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonCautionHistoriqueQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonCautionHistoriqueQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonCautionHistorique findOne(PropelPDO $con = null) Return the first CommonCautionHistorique matching the query
 * @method CommonCautionHistorique findOneOrCreate(PropelPDO $con = null) Return the first CommonCautionHistorique matching the query, or a new CommonCautionHistorique object populated from the query conditions when no match is found
 *
 * @method CommonCautionHistorique findOneByIdCaution(int $id_caution) Return the first CommonCautionHistorique filtered by the id_caution column
 * @method CommonCautionHistorique findOneByDetailAction(string $detail_action) Return the first CommonCautionHistorique filtered by the detail_action column
 * @method CommonCautionHistorique findOneByActeur(string $acteur) Return the first CommonCautionHistorique filtered by the acteur column
 * @method CommonCautionHistorique findOneByDateAction(string $date_action) Return the first CommonCautionHistorique filtered by the date_action column
 * @method CommonCautionHistorique findOneByInfos(string $infos) Return the first CommonCautionHistorique filtered by the infos column
 * @method CommonCautionHistorique findOneByUserType(string $user_type) Return the first CommonCautionHistorique filtered by the user_type column
 *
 * @method array findById(int $id) Return CommonCautionHistorique objects filtered by the id column
 * @method array findByIdCaution(int $id_caution) Return CommonCautionHistorique objects filtered by the id_caution column
 * @method array findByDetailAction(string $detail_action) Return CommonCautionHistorique objects filtered by the detail_action column
 * @method array findByActeur(string $acteur) Return CommonCautionHistorique objects filtered by the acteur column
 * @method array findByDateAction(string $date_action) Return CommonCautionHistorique objects filtered by the date_action column
 * @method array findByInfos(string $infos) Return CommonCautionHistorique objects filtered by the infos column
 * @method array findByUserType(string $user_type) Return CommonCautionHistorique objects filtered by the user_type column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonCautionHistoriqueQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonCautionHistoriqueQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonCautionHistorique', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonCautionHistoriqueQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonCautionHistoriqueQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonCautionHistoriqueQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonCautionHistoriqueQuery) {
            return $criteria;
        }
        $query = new CommonCautionHistoriqueQuery();
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
     * @return   CommonCautionHistorique|CommonCautionHistorique[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonCautionHistoriquePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonCautionHistoriquePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonCautionHistorique A model object, or null if the key is not found
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
     * @return                 CommonCautionHistorique A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_caution`, `detail_action`, `acteur`, `date_action`, `infos`, `user_type` FROM `caution_historique` WHERE `id` = :p0';
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
            $obj = new CommonCautionHistorique();
            $obj->hydrate($row);
            CommonCautionHistoriquePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonCautionHistorique|CommonCautionHistorique[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonCautionHistorique[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonCautionHistoriqueQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonCautionHistoriquePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonCautionHistoriqueQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonCautionHistoriquePeer::ID, $keys, Criteria::IN);
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
     * @return CommonCautionHistoriqueQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonCautionHistoriquePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonCautionHistoriquePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionHistoriquePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_caution column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCaution(1234); // WHERE id_caution = 1234
     * $query->filterByIdCaution(array(12, 34)); // WHERE id_caution IN (12, 34)
     * $query->filterByIdCaution(array('min' => 12)); // WHERE id_caution >= 12
     * $query->filterByIdCaution(array('max' => 12)); // WHERE id_caution <= 12
     * </code>
     *
     * @param     mixed $idCaution The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionHistoriqueQuery The current query, for fluid interface
     */
    public function filterByIdCaution($idCaution = null, $comparison = null)
    {
        if (is_array($idCaution)) {
            $useMinMax = false;
            if (isset($idCaution['min'])) {
                $this->addUsingAlias(CommonCautionHistoriquePeer::ID_CAUTION, $idCaution['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCaution['max'])) {
                $this->addUsingAlias(CommonCautionHistoriquePeer::ID_CAUTION, $idCaution['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionHistoriquePeer::ID_CAUTION, $idCaution, $comparison);
    }

    /**
     * Filter the query on the detail_action column
     *
     * Example usage:
     * <code>
     * $query->filterByDetailAction('fooValue');   // WHERE detail_action = 'fooValue'
     * $query->filterByDetailAction('%fooValue%'); // WHERE detail_action LIKE '%fooValue%'
     * </code>
     *
     * @param     string $detailAction The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionHistoriqueQuery The current query, for fluid interface
     */
    public function filterByDetailAction($detailAction = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($detailAction)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $detailAction)) {
                $detailAction = str_replace('*', '%', $detailAction);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCautionHistoriquePeer::DETAIL_ACTION, $detailAction, $comparison);
    }

    /**
     * Filter the query on the acteur column
     *
     * Example usage:
     * <code>
     * $query->filterByActeur('fooValue');   // WHERE acteur = 'fooValue'
     * $query->filterByActeur('%fooValue%'); // WHERE acteur LIKE '%fooValue%'
     * </code>
     *
     * @param     string $acteur The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionHistoriqueQuery The current query, for fluid interface
     */
    public function filterByActeur($acteur = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($acteur)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $acteur)) {
                $acteur = str_replace('*', '%', $acteur);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCautionHistoriquePeer::ACTEUR, $acteur, $comparison);
    }

    /**
     * Filter the query on the date_action column
     *
     * Example usage:
     * <code>
     * $query->filterByDateAction('2011-03-14'); // WHERE date_action = '2011-03-14'
     * $query->filterByDateAction('now'); // WHERE date_action = '2011-03-14'
     * $query->filterByDateAction(array('max' => 'yesterday')); // WHERE date_action > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateAction The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionHistoriqueQuery The current query, for fluid interface
     */
    public function filterByDateAction($dateAction = null, $comparison = null)
    {
        if (is_array($dateAction)) {
            $useMinMax = false;
            if (isset($dateAction['min'])) {
                $this->addUsingAlias(CommonCautionHistoriquePeer::DATE_ACTION, $dateAction['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateAction['max'])) {
                $this->addUsingAlias(CommonCautionHistoriquePeer::DATE_ACTION, $dateAction['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionHistoriquePeer::DATE_ACTION, $dateAction, $comparison);
    }

    /**
     * Filter the query on the infos column
     *
     * Example usage:
     * <code>
     * $query->filterByInfos('fooValue');   // WHERE infos = 'fooValue'
     * $query->filterByInfos('%fooValue%'); // WHERE infos LIKE '%fooValue%'
     * </code>
     *
     * @param     string $infos The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionHistoriqueQuery The current query, for fluid interface
     */
    public function filterByInfos($infos = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($infos)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $infos)) {
                $infos = str_replace('*', '%', $infos);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCautionHistoriquePeer::INFOS, $infos, $comparison);
    }

    /**
     * Filter the query on the user_type column
     *
     * Example usage:
     * <code>
     * $query->filterByUserType('fooValue');   // WHERE user_type = 'fooValue'
     * $query->filterByUserType('%fooValue%'); // WHERE user_type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $userType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionHistoriqueQuery The current query, for fluid interface
     */
    public function filterByUserType($userType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($userType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $userType)) {
                $userType = str_replace('*', '%', $userType);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCautionHistoriquePeer::USER_TYPE, $userType, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonCautionHistorique $commonCautionHistorique Object to remove from the list of results
     *
     * @return CommonCautionHistoriqueQuery The current query, for fluid interface
     */
    public function prune($commonCautionHistorique = null)
    {
        if ($commonCautionHistorique) {
            $this->addUsingAlias(CommonCautionHistoriquePeer::ID, $commonCautionHistorique->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
