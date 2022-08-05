<?php


/**
 * Base class that represents a query for the 'restitution_historique' table.
 *
 * 
 *
 * @method CommonRestitutionHistoriqueQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonRestitutionHistoriqueQuery orderByIdRestitution($order = Criteria::ASC) Order by the id_restitution column
 * @method CommonRestitutionHistoriqueQuery orderByDetailAction($order = Criteria::ASC) Order by the detail_action column
 * @method CommonRestitutionHistoriqueQuery orderByActeur($order = Criteria::ASC) Order by the acteur column
 * @method CommonRestitutionHistoriqueQuery orderByDateAction($order = Criteria::ASC) Order by the date_action column
 * @method CommonRestitutionHistoriqueQuery orderByInfos($order = Criteria::ASC) Order by the infos column
 * @method CommonRestitutionHistoriqueQuery orderByUserType($order = Criteria::ASC) Order by the user_type column
 *
 * @method CommonRestitutionHistoriqueQuery groupById() Group by the id column
 * @method CommonRestitutionHistoriqueQuery groupByIdRestitution() Group by the id_restitution column
 * @method CommonRestitutionHistoriqueQuery groupByDetailAction() Group by the detail_action column
 * @method CommonRestitutionHistoriqueQuery groupByActeur() Group by the acteur column
 * @method CommonRestitutionHistoriqueQuery groupByDateAction() Group by the date_action column
 * @method CommonRestitutionHistoriqueQuery groupByInfos() Group by the infos column
 * @method CommonRestitutionHistoriqueQuery groupByUserType() Group by the user_type column
 *
 * @method CommonRestitutionHistoriqueQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonRestitutionHistoriqueQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonRestitutionHistoriqueQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonRestitutionHistorique findOne(PropelPDO $con = null) Return the first CommonRestitutionHistorique matching the query
 * @method CommonRestitutionHistorique findOneOrCreate(PropelPDO $con = null) Return the first CommonRestitutionHistorique matching the query, or a new CommonRestitutionHistorique object populated from the query conditions when no match is found
 *
 * @method CommonRestitutionHistorique findOneByIdRestitution(int $id_restitution) Return the first CommonRestitutionHistorique filtered by the id_restitution column
 * @method CommonRestitutionHistorique findOneByDetailAction(string $detail_action) Return the first CommonRestitutionHistorique filtered by the detail_action column
 * @method CommonRestitutionHistorique findOneByActeur(string $acteur) Return the first CommonRestitutionHistorique filtered by the acteur column
 * @method CommonRestitutionHistorique findOneByDateAction(string $date_action) Return the first CommonRestitutionHistorique filtered by the date_action column
 * @method CommonRestitutionHistorique findOneByInfos(string $infos) Return the first CommonRestitutionHistorique filtered by the infos column
 * @method CommonRestitutionHistorique findOneByUserType(string $user_type) Return the first CommonRestitutionHistorique filtered by the user_type column
 *
 * @method array findById(int $id) Return CommonRestitutionHistorique objects filtered by the id column
 * @method array findByIdRestitution(int $id_restitution) Return CommonRestitutionHistorique objects filtered by the id_restitution column
 * @method array findByDetailAction(string $detail_action) Return CommonRestitutionHistorique objects filtered by the detail_action column
 * @method array findByActeur(string $acteur) Return CommonRestitutionHistorique objects filtered by the acteur column
 * @method array findByDateAction(string $date_action) Return CommonRestitutionHistorique objects filtered by the date_action column
 * @method array findByInfos(string $infos) Return CommonRestitutionHistorique objects filtered by the infos column
 * @method array findByUserType(string $user_type) Return CommonRestitutionHistorique objects filtered by the user_type column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonRestitutionHistoriqueQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonRestitutionHistoriqueQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonRestitutionHistorique', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonRestitutionHistoriqueQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonRestitutionHistoriqueQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonRestitutionHistoriqueQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonRestitutionHistoriqueQuery) {
            return $criteria;
        }
        $query = new CommonRestitutionHistoriqueQuery();
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
     * @return   CommonRestitutionHistorique|CommonRestitutionHistorique[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonRestitutionHistoriquePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonRestitutionHistoriquePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonRestitutionHistorique A model object, or null if the key is not found
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
     * @return                 CommonRestitutionHistorique A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_restitution`, `detail_action`, `acteur`, `date_action`, `infos`, `user_type` FROM `restitution_historique` WHERE `id` = :p0';
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
            $obj = new CommonRestitutionHistorique();
            $obj->hydrate($row);
            CommonRestitutionHistoriquePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonRestitutionHistorique|CommonRestitutionHistorique[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonRestitutionHistorique[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonRestitutionHistoriqueQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonRestitutionHistoriquePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonRestitutionHistoriqueQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonRestitutionHistoriquePeer::ID, $keys, Criteria::IN);
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
     * @return CommonRestitutionHistoriqueQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonRestitutionHistoriquePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonRestitutionHistoriquePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonRestitutionHistoriquePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_restitution column
     *
     * Example usage:
     * <code>
     * $query->filterByIdRestitution(1234); // WHERE id_restitution = 1234
     * $query->filterByIdRestitution(array(12, 34)); // WHERE id_restitution IN (12, 34)
     * $query->filterByIdRestitution(array('min' => 12)); // WHERE id_restitution >= 12
     * $query->filterByIdRestitution(array('max' => 12)); // WHERE id_restitution <= 12
     * </code>
     *
     * @param     mixed $idRestitution The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRestitutionHistoriqueQuery The current query, for fluid interface
     */
    public function filterByIdRestitution($idRestitution = null, $comparison = null)
    {
        if (is_array($idRestitution)) {
            $useMinMax = false;
            if (isset($idRestitution['min'])) {
                $this->addUsingAlias(CommonRestitutionHistoriquePeer::ID_RESTITUTION, $idRestitution['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idRestitution['max'])) {
                $this->addUsingAlias(CommonRestitutionHistoriquePeer::ID_RESTITUTION, $idRestitution['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonRestitutionHistoriquePeer::ID_RESTITUTION, $idRestitution, $comparison);
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
     * @return CommonRestitutionHistoriqueQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonRestitutionHistoriquePeer::DETAIL_ACTION, $detailAction, $comparison);
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
     * @return CommonRestitutionHistoriqueQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonRestitutionHistoriquePeer::ACTEUR, $acteur, $comparison);
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
     * @return CommonRestitutionHistoriqueQuery The current query, for fluid interface
     */
    public function filterByDateAction($dateAction = null, $comparison = null)
    {
        if (is_array($dateAction)) {
            $useMinMax = false;
            if (isset($dateAction['min'])) {
                $this->addUsingAlias(CommonRestitutionHistoriquePeer::DATE_ACTION, $dateAction['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateAction['max'])) {
                $this->addUsingAlias(CommonRestitutionHistoriquePeer::DATE_ACTION, $dateAction['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonRestitutionHistoriquePeer::DATE_ACTION, $dateAction, $comparison);
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
     * @return CommonRestitutionHistoriqueQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonRestitutionHistoriquePeer::INFOS, $infos, $comparison);
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
     * @return CommonRestitutionHistoriqueQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonRestitutionHistoriquePeer::USER_TYPE, $userType, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonRestitutionHistorique $commonRestitutionHistorique Object to remove from the list of results
     *
     * @return CommonRestitutionHistoriqueQuery The current query, for fluid interface
     */
    public function prune($commonRestitutionHistorique = null)
    {
        if ($commonRestitutionHistorique) {
            $this->addUsingAlias(CommonRestitutionHistoriquePeer::ID, $commonRestitutionHistorique->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
