<?php


/**
 * Base class that represents a query for the 't_calendrier_etape' table.
 *
 * 
 *
 * @method CommonTCalendrierEtapeQuery orderByIdCalendrierEtape($order = Criteria::ASC) Order by the ID_CALENDRIER_ETAPE column
 * @method CommonTCalendrierEtapeQuery orderByIdCalendrier($order = Criteria::ASC) Order by the ID_CALENDRIER column
 * @method CommonTCalendrierEtapeQuery orderByCode($order = Criteria::ASC) Order by the CODE column
 * @method CommonTCalendrierEtapeQuery orderByLibelle($order = Criteria::ASC) Order by the LIBELLE column
 * @method CommonTCalendrierEtapeQuery orderByDateInitiale($order = Criteria::ASC) Order by the DATE_INITIALE column
 * @method CommonTCalendrierEtapeQuery orderByDatePrevue($order = Criteria::ASC) Order by the DATE_PREVUE column
 * @method CommonTCalendrierEtapeQuery orderByPosition($order = Criteria::ASC) Order by the POSITION column
 * @method CommonTCalendrierEtapeQuery orderByLibre($order = Criteria::ASC) Order by the LIBRE column
 * @method CommonTCalendrierEtapeQuery orderByDateReelleConfirmee($order = Criteria::ASC) Order by the DATE_REELLE_CONFIRMEE column
 *
 * @method CommonTCalendrierEtapeQuery groupByIdCalendrierEtape() Group by the ID_CALENDRIER_ETAPE column
 * @method CommonTCalendrierEtapeQuery groupByIdCalendrier() Group by the ID_CALENDRIER column
 * @method CommonTCalendrierEtapeQuery groupByCode() Group by the CODE column
 * @method CommonTCalendrierEtapeQuery groupByLibelle() Group by the LIBELLE column
 * @method CommonTCalendrierEtapeQuery groupByDateInitiale() Group by the DATE_INITIALE column
 * @method CommonTCalendrierEtapeQuery groupByDatePrevue() Group by the DATE_PREVUE column
 * @method CommonTCalendrierEtapeQuery groupByPosition() Group by the POSITION column
 * @method CommonTCalendrierEtapeQuery groupByLibre() Group by the LIBRE column
 * @method CommonTCalendrierEtapeQuery groupByDateReelleConfirmee() Group by the DATE_REELLE_CONFIRMEE column
 *
 * @method CommonTCalendrierEtapeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTCalendrierEtapeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTCalendrierEtapeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTCalendrierEtapeQuery leftJoinCommonTCalendrier($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTCalendrier relation
 * @method CommonTCalendrierEtapeQuery rightJoinCommonTCalendrier($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTCalendrier relation
 * @method CommonTCalendrierEtapeQuery innerJoinCommonTCalendrier($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTCalendrier relation
 *
 * @method CommonTCalendrierEtapeQuery leftJoinCommonTCalendrierTransitionRelatedByIdEtapeSource($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTCalendrierTransitionRelatedByIdEtapeSource relation
 * @method CommonTCalendrierEtapeQuery rightJoinCommonTCalendrierTransitionRelatedByIdEtapeSource($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTCalendrierTransitionRelatedByIdEtapeSource relation
 * @method CommonTCalendrierEtapeQuery innerJoinCommonTCalendrierTransitionRelatedByIdEtapeSource($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTCalendrierTransitionRelatedByIdEtapeSource relation
 *
 * @method CommonTCalendrierEtapeQuery leftJoinCommonTCalendrierTransitionRelatedByIdEtapeCible($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTCalendrierTransitionRelatedByIdEtapeCible relation
 * @method CommonTCalendrierEtapeQuery rightJoinCommonTCalendrierTransitionRelatedByIdEtapeCible($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTCalendrierTransitionRelatedByIdEtapeCible relation
 * @method CommonTCalendrierEtapeQuery innerJoinCommonTCalendrierTransitionRelatedByIdEtapeCible($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTCalendrierTransitionRelatedByIdEtapeCible relation
 *
 * @method CommonTCalendrierEtape findOne(PropelPDO $con = null) Return the first CommonTCalendrierEtape matching the query
 * @method CommonTCalendrierEtape findOneOrCreate(PropelPDO $con = null) Return the first CommonTCalendrierEtape matching the query, or a new CommonTCalendrierEtape object populated from the query conditions when no match is found
 *
 * @method CommonTCalendrierEtape findOneByIdCalendrier(int $ID_CALENDRIER) Return the first CommonTCalendrierEtape filtered by the ID_CALENDRIER column
 * @method CommonTCalendrierEtape findOneByCode(string $CODE) Return the first CommonTCalendrierEtape filtered by the CODE column
 * @method CommonTCalendrierEtape findOneByLibelle(string $LIBELLE) Return the first CommonTCalendrierEtape filtered by the LIBELLE column
 * @method CommonTCalendrierEtape findOneByDateInitiale(string $DATE_INITIALE) Return the first CommonTCalendrierEtape filtered by the DATE_INITIALE column
 * @method CommonTCalendrierEtape findOneByDatePrevue(string $DATE_PREVUE) Return the first CommonTCalendrierEtape filtered by the DATE_PREVUE column
 * @method CommonTCalendrierEtape findOneByPosition(int $POSITION) Return the first CommonTCalendrierEtape filtered by the POSITION column
 * @method CommonTCalendrierEtape findOneByLibre(boolean $LIBRE) Return the first CommonTCalendrierEtape filtered by the LIBRE column
 * @method CommonTCalendrierEtape findOneByDateReelleConfirmee(string $DATE_REELLE_CONFIRMEE) Return the first CommonTCalendrierEtape filtered by the DATE_REELLE_CONFIRMEE column
 *
 * @method array findByIdCalendrierEtape(int $ID_CALENDRIER_ETAPE) Return CommonTCalendrierEtape objects filtered by the ID_CALENDRIER_ETAPE column
 * @method array findByIdCalendrier(int $ID_CALENDRIER) Return CommonTCalendrierEtape objects filtered by the ID_CALENDRIER column
 * @method array findByCode(string $CODE) Return CommonTCalendrierEtape objects filtered by the CODE column
 * @method array findByLibelle(string $LIBELLE) Return CommonTCalendrierEtape objects filtered by the LIBELLE column
 * @method array findByDateInitiale(string $DATE_INITIALE) Return CommonTCalendrierEtape objects filtered by the DATE_INITIALE column
 * @method array findByDatePrevue(string $DATE_PREVUE) Return CommonTCalendrierEtape objects filtered by the DATE_PREVUE column
 * @method array findByPosition(int $POSITION) Return CommonTCalendrierEtape objects filtered by the POSITION column
 * @method array findByLibre(boolean $LIBRE) Return CommonTCalendrierEtape objects filtered by the LIBRE column
 * @method array findByDateReelleConfirmee(string $DATE_REELLE_CONFIRMEE) Return CommonTCalendrierEtape objects filtered by the DATE_REELLE_CONFIRMEE column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTCalendrierEtapeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTCalendrierEtapeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTCalendrierEtape', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTCalendrierEtapeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTCalendrierEtapeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTCalendrierEtapeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTCalendrierEtapeQuery) {
            return $criteria;
        }
        $query = new CommonTCalendrierEtapeQuery();
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
     * @return   CommonTCalendrierEtape|CommonTCalendrierEtape[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTCalendrierEtapePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTCalendrierEtapePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTCalendrierEtape A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdCalendrierEtape($key, $con = null)
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
     * @return                 CommonTCalendrierEtape A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_CALENDRIER_ETAPE`, `ID_CALENDRIER`, `CODE`, `LIBELLE`, `DATE_INITIALE`, `DATE_PREVUE`, `POSITION`, `LIBRE`, `DATE_REELLE_CONFIRMEE` FROM `t_calendrier_etape` WHERE `ID_CALENDRIER_ETAPE` = :p0';
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
            $obj = new CommonTCalendrierEtape();
            $obj->hydrate($row);
            CommonTCalendrierEtapePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonTCalendrierEtape|CommonTCalendrierEtape[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTCalendrierEtape[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTCalendrierEtapeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonTCalendrierEtapePeer::ID_CALENDRIER_ETAPE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTCalendrierEtapeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonTCalendrierEtapePeer::ID_CALENDRIER_ETAPE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID_CALENDRIER_ETAPE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCalendrierEtape(1234); // WHERE ID_CALENDRIER_ETAPE = 1234
     * $query->filterByIdCalendrierEtape(array(12, 34)); // WHERE ID_CALENDRIER_ETAPE IN (12, 34)
     * $query->filterByIdCalendrierEtape(array('min' => 12)); // WHERE ID_CALENDRIER_ETAPE >= 12
     * $query->filterByIdCalendrierEtape(array('max' => 12)); // WHERE ID_CALENDRIER_ETAPE <= 12
     * </code>
     *
     * @param     mixed $idCalendrierEtape The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCalendrierEtapeQuery The current query, for fluid interface
     */
    public function filterByIdCalendrierEtape($idCalendrierEtape = null, $comparison = null)
    {
        if (is_array($idCalendrierEtape)) {
            $useMinMax = false;
            if (isset($idCalendrierEtape['min'])) {
                $this->addUsingAlias(CommonTCalendrierEtapePeer::ID_CALENDRIER_ETAPE, $idCalendrierEtape['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCalendrierEtape['max'])) {
                $this->addUsingAlias(CommonTCalendrierEtapePeer::ID_CALENDRIER_ETAPE, $idCalendrierEtape['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCalendrierEtapePeer::ID_CALENDRIER_ETAPE, $idCalendrierEtape, $comparison);
    }

    /**
     * Filter the query on the ID_CALENDRIER column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCalendrier(1234); // WHERE ID_CALENDRIER = 1234
     * $query->filterByIdCalendrier(array(12, 34)); // WHERE ID_CALENDRIER IN (12, 34)
     * $query->filterByIdCalendrier(array('min' => 12)); // WHERE ID_CALENDRIER >= 12
     * $query->filterByIdCalendrier(array('max' => 12)); // WHERE ID_CALENDRIER <= 12
     * </code>
     *
     * @see       filterByCommonTCalendrier()
     *
     * @param     mixed $idCalendrier The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCalendrierEtapeQuery The current query, for fluid interface
     */
    public function filterByIdCalendrier($idCalendrier = null, $comparison = null)
    {
        if (is_array($idCalendrier)) {
            $useMinMax = false;
            if (isset($idCalendrier['min'])) {
                $this->addUsingAlias(CommonTCalendrierEtapePeer::ID_CALENDRIER, $idCalendrier['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCalendrier['max'])) {
                $this->addUsingAlias(CommonTCalendrierEtapePeer::ID_CALENDRIER, $idCalendrier['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCalendrierEtapePeer::ID_CALENDRIER, $idCalendrier, $comparison);
    }

    /**
     * Filter the query on the CODE column
     *
     * Example usage:
     * <code>
     * $query->filterByCode('fooValue');   // WHERE CODE = 'fooValue'
     * $query->filterByCode('%fooValue%'); // WHERE CODE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $code The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCalendrierEtapeQuery The current query, for fluid interface
     */
    public function filterByCode($code = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($code)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $code)) {
                $code = str_replace('*', '%', $code);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTCalendrierEtapePeer::CODE, $code, $comparison);
    }

    /**
     * Filter the query on the LIBELLE column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelle('fooValue');   // WHERE LIBELLE = 'fooValue'
     * $query->filterByLibelle('%fooValue%'); // WHERE LIBELLE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCalendrierEtapeQuery The current query, for fluid interface
     */
    public function filterByLibelle($libelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelle)) {
                $libelle = str_replace('*', '%', $libelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTCalendrierEtapePeer::LIBELLE, $libelle, $comparison);
    }

    /**
     * Filter the query on the DATE_INITIALE column
     *
     * Example usage:
     * <code>
     * $query->filterByDateInitiale('2011-03-14'); // WHERE DATE_INITIALE = '2011-03-14'
     * $query->filterByDateInitiale('now'); // WHERE DATE_INITIALE = '2011-03-14'
     * $query->filterByDateInitiale(array('max' => 'yesterday')); // WHERE DATE_INITIALE > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateInitiale The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCalendrierEtapeQuery The current query, for fluid interface
     */
    public function filterByDateInitiale($dateInitiale = null, $comparison = null)
    {
        if (is_array($dateInitiale)) {
            $useMinMax = false;
            if (isset($dateInitiale['min'])) {
                $this->addUsingAlias(CommonTCalendrierEtapePeer::DATE_INITIALE, $dateInitiale['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateInitiale['max'])) {
                $this->addUsingAlias(CommonTCalendrierEtapePeer::DATE_INITIALE, $dateInitiale['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCalendrierEtapePeer::DATE_INITIALE, $dateInitiale, $comparison);
    }

    /**
     * Filter the query on the DATE_PREVUE column
     *
     * Example usage:
     * <code>
     * $query->filterByDatePrevue('2011-03-14'); // WHERE DATE_PREVUE = '2011-03-14'
     * $query->filterByDatePrevue('now'); // WHERE DATE_PREVUE = '2011-03-14'
     * $query->filterByDatePrevue(array('max' => 'yesterday')); // WHERE DATE_PREVUE > '2011-03-13'
     * </code>
     *
     * @param     mixed $datePrevue The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCalendrierEtapeQuery The current query, for fluid interface
     */
    public function filterByDatePrevue($datePrevue = null, $comparison = null)
    {
        if (is_array($datePrevue)) {
            $useMinMax = false;
            if (isset($datePrevue['min'])) {
                $this->addUsingAlias(CommonTCalendrierEtapePeer::DATE_PREVUE, $datePrevue['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datePrevue['max'])) {
                $this->addUsingAlias(CommonTCalendrierEtapePeer::DATE_PREVUE, $datePrevue['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCalendrierEtapePeer::DATE_PREVUE, $datePrevue, $comparison);
    }

    /**
     * Filter the query on the POSITION column
     *
     * Example usage:
     * <code>
     * $query->filterByPosition(1234); // WHERE POSITION = 1234
     * $query->filterByPosition(array(12, 34)); // WHERE POSITION IN (12, 34)
     * $query->filterByPosition(array('min' => 12)); // WHERE POSITION >= 12
     * $query->filterByPosition(array('max' => 12)); // WHERE POSITION <= 12
     * </code>
     *
     * @param     mixed $position The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCalendrierEtapeQuery The current query, for fluid interface
     */
    public function filterByPosition($position = null, $comparison = null)
    {
        if (is_array($position)) {
            $useMinMax = false;
            if (isset($position['min'])) {
                $this->addUsingAlias(CommonTCalendrierEtapePeer::POSITION, $position['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($position['max'])) {
                $this->addUsingAlias(CommonTCalendrierEtapePeer::POSITION, $position['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCalendrierEtapePeer::POSITION, $position, $comparison);
    }

    /**
     * Filter the query on the LIBRE column
     *
     * Example usage:
     * <code>
     * $query->filterByLibre(true); // WHERE LIBRE = true
     * $query->filterByLibre('yes'); // WHERE LIBRE = true
     * </code>
     *
     * @param     boolean|string $libre The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCalendrierEtapeQuery The current query, for fluid interface
     */
    public function filterByLibre($libre = null, $comparison = null)
    {
        if (is_string($libre)) {
            $libre = in_array(strtolower($libre), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        return $this->addUsingAlias(CommonTCalendrierEtapePeer::LIBRE, $libre, $comparison);
    }

    /**
     * Filter the query on the DATE_REELLE_CONFIRMEE column
     *
     * Example usage:
     * <code>
     * $query->filterByDateReelleConfirmee('fooValue');   // WHERE DATE_REELLE_CONFIRMEE = 'fooValue'
     * $query->filterByDateReelleConfirmee('%fooValue%'); // WHERE DATE_REELLE_CONFIRMEE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateReelleConfirmee The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCalendrierEtapeQuery The current query, for fluid interface
     */
    public function filterByDateReelleConfirmee($dateReelleConfirmee = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateReelleConfirmee)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateReelleConfirmee)) {
                $dateReelleConfirmee = str_replace('*', '%', $dateReelleConfirmee);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTCalendrierEtapePeer::DATE_REELLE_CONFIRMEE, $dateReelleConfirmee, $comparison);
    }

    /**
     * Filter the query by a related CommonTCalendrier object
     *
     * @param   CommonTCalendrier|PropelObjectCollection $commonTCalendrier The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTCalendrierEtapeQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTCalendrier($commonTCalendrier, $comparison = null)
    {
        if ($commonTCalendrier instanceof CommonTCalendrier) {
            return $this
                ->addUsingAlias(CommonTCalendrierEtapePeer::ID_CALENDRIER, $commonTCalendrier->getIdCalendrier(), $comparison);
        } elseif ($commonTCalendrier instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonTCalendrierEtapePeer::ID_CALENDRIER, $commonTCalendrier->toKeyValue('PrimaryKey', 'IdCalendrier'), $comparison);
        } else {
            throw new PropelException('filterByCommonTCalendrier() only accepts arguments of type CommonTCalendrier or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTCalendrier relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTCalendrierEtapeQuery The current query, for fluid interface
     */
    public function joinCommonTCalendrier($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTCalendrier');

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
            $this->addJoinObject($join, 'CommonTCalendrier');
        }

        return $this;
    }

    /**
     * Use the CommonTCalendrier relation CommonTCalendrier object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTCalendrierQuery A secondary query class using the current class as primary query
     */
    public function useCommonTCalendrierQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonTCalendrier($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTCalendrier', 'CommonTCalendrierQuery');
    }

    /**
     * Filter the query by a related CommonTCalendrierTransition object
     *
     * @param   CommonTCalendrierTransition|PropelObjectCollection $commonTCalendrierTransition  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTCalendrierEtapeQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTCalendrierTransitionRelatedByIdEtapeSource($commonTCalendrierTransition, $comparison = null)
    {
        if ($commonTCalendrierTransition instanceof CommonTCalendrierTransition) {
            return $this
                ->addUsingAlias(CommonTCalendrierEtapePeer::ID_CALENDRIER_ETAPE, $commonTCalendrierTransition->getIdEtapeSource(), $comparison);
        } elseif ($commonTCalendrierTransition instanceof PropelObjectCollection) {
            return $this
                ->useCommonTCalendrierTransitionRelatedByIdEtapeSourceQuery()
                ->filterByPrimaryKeys($commonTCalendrierTransition->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonTCalendrierTransitionRelatedByIdEtapeSource() only accepts arguments of type CommonTCalendrierTransition or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTCalendrierTransitionRelatedByIdEtapeSource relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTCalendrierEtapeQuery The current query, for fluid interface
     */
    public function joinCommonTCalendrierTransitionRelatedByIdEtapeSource($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTCalendrierTransitionRelatedByIdEtapeSource');

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
            $this->addJoinObject($join, 'CommonTCalendrierTransitionRelatedByIdEtapeSource');
        }

        return $this;
    }

    /**
     * Use the CommonTCalendrierTransitionRelatedByIdEtapeSource relation CommonTCalendrierTransition object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTCalendrierTransitionQuery A secondary query class using the current class as primary query
     */
    public function useCommonTCalendrierTransitionRelatedByIdEtapeSourceQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonTCalendrierTransitionRelatedByIdEtapeSource($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTCalendrierTransitionRelatedByIdEtapeSource', 'CommonTCalendrierTransitionQuery');
    }

    /**
     * Filter the query by a related CommonTCalendrierTransition object
     *
     * @param   CommonTCalendrierTransition|PropelObjectCollection $commonTCalendrierTransition  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTCalendrierEtapeQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTCalendrierTransitionRelatedByIdEtapeCible($commonTCalendrierTransition, $comparison = null)
    {
        if ($commonTCalendrierTransition instanceof CommonTCalendrierTransition) {
            return $this
                ->addUsingAlias(CommonTCalendrierEtapePeer::ID_CALENDRIER_ETAPE, $commonTCalendrierTransition->getIdEtapeCible(), $comparison);
        } elseif ($commonTCalendrierTransition instanceof PropelObjectCollection) {
            return $this
                ->useCommonTCalendrierTransitionRelatedByIdEtapeCibleQuery()
                ->filterByPrimaryKeys($commonTCalendrierTransition->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonTCalendrierTransitionRelatedByIdEtapeCible() only accepts arguments of type CommonTCalendrierTransition or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTCalendrierTransitionRelatedByIdEtapeCible relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTCalendrierEtapeQuery The current query, for fluid interface
     */
    public function joinCommonTCalendrierTransitionRelatedByIdEtapeCible($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTCalendrierTransitionRelatedByIdEtapeCible');

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
            $this->addJoinObject($join, 'CommonTCalendrierTransitionRelatedByIdEtapeCible');
        }

        return $this;
    }

    /**
     * Use the CommonTCalendrierTransitionRelatedByIdEtapeCible relation CommonTCalendrierTransition object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTCalendrierTransitionQuery A secondary query class using the current class as primary query
     */
    public function useCommonTCalendrierTransitionRelatedByIdEtapeCibleQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinCommonTCalendrierTransitionRelatedByIdEtapeCible($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTCalendrierTransitionRelatedByIdEtapeCible', 'CommonTCalendrierTransitionQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTCalendrierEtape $commonTCalendrierEtape Object to remove from the list of results
     *
     * @return CommonTCalendrierEtapeQuery The current query, for fluid interface
     */
    public function prune($commonTCalendrierEtape = null)
    {
        if ($commonTCalendrierEtape) {
            $this->addUsingAlias(CommonTCalendrierEtapePeer::ID_CALENDRIER_ETAPE, $commonTCalendrierEtape->getIdCalendrierEtape(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
