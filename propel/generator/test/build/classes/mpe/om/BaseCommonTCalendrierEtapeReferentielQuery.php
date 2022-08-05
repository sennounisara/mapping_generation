<?php


/**
 * Base class that represents a query for the 't_calendrier_etape_referentiel' table.
 *
 * 
 *
 * @method CommonTCalendrierEtapeReferentielQuery orderByIdEtapeCalendrierReferentiel($order = Criteria::ASC) Order by the ID_ETAPE_CALENDRIER_REFERENTIEL column
 * @method CommonTCalendrierEtapeReferentielQuery orderByIdTypeProcedure($order = Criteria::ASC) Order by the ID_TYPE_PROCEDURE column
 * @method CommonTCalendrierEtapeReferentielQuery orderByOrganisme($order = Criteria::ASC) Order by the ORGANISME column
 * @method CommonTCalendrierEtapeReferentielQuery orderByCode($order = Criteria::ASC) Order by the CODE column
 * @method CommonTCalendrierEtapeReferentielQuery orderByLibelle($order = Criteria::ASC) Order by the LIBELLE column
 * @method CommonTCalendrierEtapeReferentielQuery orderByPosition($order = Criteria::ASC) Order by the POSITION column
 *
 * @method CommonTCalendrierEtapeReferentielQuery groupByIdEtapeCalendrierReferentiel() Group by the ID_ETAPE_CALENDRIER_REFERENTIEL column
 * @method CommonTCalendrierEtapeReferentielQuery groupByIdTypeProcedure() Group by the ID_TYPE_PROCEDURE column
 * @method CommonTCalendrierEtapeReferentielQuery groupByOrganisme() Group by the ORGANISME column
 * @method CommonTCalendrierEtapeReferentielQuery groupByCode() Group by the CODE column
 * @method CommonTCalendrierEtapeReferentielQuery groupByLibelle() Group by the LIBELLE column
 * @method CommonTCalendrierEtapeReferentielQuery groupByPosition() Group by the POSITION column
 *
 * @method CommonTCalendrierEtapeReferentielQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTCalendrierEtapeReferentielQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTCalendrierEtapeReferentielQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTCalendrierEtapeReferentiel findOne(PropelPDO $con = null) Return the first CommonTCalendrierEtapeReferentiel matching the query
 * @method CommonTCalendrierEtapeReferentiel findOneOrCreate(PropelPDO $con = null) Return the first CommonTCalendrierEtapeReferentiel matching the query, or a new CommonTCalendrierEtapeReferentiel object populated from the query conditions when no match is found
 *
 * @method CommonTCalendrierEtapeReferentiel findOneByIdEtapeCalendrierReferentiel(int $ID_ETAPE_CALENDRIER_REFERENTIEL) Return the first CommonTCalendrierEtapeReferentiel filtered by the ID_ETAPE_CALENDRIER_REFERENTIEL column
 * @method CommonTCalendrierEtapeReferentiel findOneByIdTypeProcedure(int $ID_TYPE_PROCEDURE) Return the first CommonTCalendrierEtapeReferentiel filtered by the ID_TYPE_PROCEDURE column
 * @method CommonTCalendrierEtapeReferentiel findOneByOrganisme(string $ORGANISME) Return the first CommonTCalendrierEtapeReferentiel filtered by the ORGANISME column
 * @method CommonTCalendrierEtapeReferentiel findOneByCode(string $CODE) Return the first CommonTCalendrierEtapeReferentiel filtered by the CODE column
 * @method CommonTCalendrierEtapeReferentiel findOneByLibelle(string $LIBELLE) Return the first CommonTCalendrierEtapeReferentiel filtered by the LIBELLE column
 * @method CommonTCalendrierEtapeReferentiel findOneByPosition(int $POSITION) Return the first CommonTCalendrierEtapeReferentiel filtered by the POSITION column
 *
 * @method array findByIdEtapeCalendrierReferentiel(int $ID_ETAPE_CALENDRIER_REFERENTIEL) Return CommonTCalendrierEtapeReferentiel objects filtered by the ID_ETAPE_CALENDRIER_REFERENTIEL column
 * @method array findByIdTypeProcedure(int $ID_TYPE_PROCEDURE) Return CommonTCalendrierEtapeReferentiel objects filtered by the ID_TYPE_PROCEDURE column
 * @method array findByOrganisme(string $ORGANISME) Return CommonTCalendrierEtapeReferentiel objects filtered by the ORGANISME column
 * @method array findByCode(string $CODE) Return CommonTCalendrierEtapeReferentiel objects filtered by the CODE column
 * @method array findByLibelle(string $LIBELLE) Return CommonTCalendrierEtapeReferentiel objects filtered by the LIBELLE column
 * @method array findByPosition(int $POSITION) Return CommonTCalendrierEtapeReferentiel objects filtered by the POSITION column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTCalendrierEtapeReferentielQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTCalendrierEtapeReferentielQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTCalendrierEtapeReferentiel', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTCalendrierEtapeReferentielQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTCalendrierEtapeReferentielQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTCalendrierEtapeReferentielQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTCalendrierEtapeReferentielQuery) {
            return $criteria;
        }
        $query = new CommonTCalendrierEtapeReferentielQuery();
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
     * $obj = $c->findPk(array(12, 34, 56), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query 
                         A Primary key composition: [$ID_ETAPE_CALENDRIER_REFERENTIEL, $ID_TYPE_PROCEDURE, $ORGANISME]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonTCalendrierEtapeReferentiel|CommonTCalendrierEtapeReferentiel[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTCalendrierEtapeReferentielPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTCalendrierEtapeReferentielPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonTCalendrierEtapeReferentiel A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_ETAPE_CALENDRIER_REFERENTIEL`, `ID_TYPE_PROCEDURE`, `ORGANISME`, `CODE`, `LIBELLE`, `POSITION` FROM `t_calendrier_etape_referentiel` WHERE `ID_ETAPE_CALENDRIER_REFERENTIEL` = :p0 AND `ID_TYPE_PROCEDURE` = :p1 AND `ORGANISME` = :p2';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);			
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonTCalendrierEtapeReferentiel();
            $obj->hydrate($row);
            CommonTCalendrierEtapeReferentielPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return CommonTCalendrierEtapeReferentiel|CommonTCalendrierEtapeReferentiel[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CommonTCalendrierEtapeReferentiel[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTCalendrierEtapeReferentielQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonTCalendrierEtapeReferentielPeer::ID_ETAPE_CALENDRIER_REFERENTIEL, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonTCalendrierEtapeReferentielPeer::ID_TYPE_PROCEDURE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(CommonTCalendrierEtapeReferentielPeer::ORGANISME, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTCalendrierEtapeReferentielQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonTCalendrierEtapeReferentielPeer::ID_ETAPE_CALENDRIER_REFERENTIEL, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonTCalendrierEtapeReferentielPeer::ID_TYPE_PROCEDURE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(CommonTCalendrierEtapeReferentielPeer::ORGANISME, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the ID_ETAPE_CALENDRIER_REFERENTIEL column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEtapeCalendrierReferentiel(1234); // WHERE ID_ETAPE_CALENDRIER_REFERENTIEL = 1234
     * $query->filterByIdEtapeCalendrierReferentiel(array(12, 34)); // WHERE ID_ETAPE_CALENDRIER_REFERENTIEL IN (12, 34)
     * $query->filterByIdEtapeCalendrierReferentiel(array('min' => 12)); // WHERE ID_ETAPE_CALENDRIER_REFERENTIEL >= 12
     * $query->filterByIdEtapeCalendrierReferentiel(array('max' => 12)); // WHERE ID_ETAPE_CALENDRIER_REFERENTIEL <= 12
     * </code>
     *
     * @param     mixed $idEtapeCalendrierReferentiel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCalendrierEtapeReferentielQuery The current query, for fluid interface
     */
    public function filterByIdEtapeCalendrierReferentiel($idEtapeCalendrierReferentiel = null, $comparison = null)
    {
        if (is_array($idEtapeCalendrierReferentiel)) {
            $useMinMax = false;
            if (isset($idEtapeCalendrierReferentiel['min'])) {
                $this->addUsingAlias(CommonTCalendrierEtapeReferentielPeer::ID_ETAPE_CALENDRIER_REFERENTIEL, $idEtapeCalendrierReferentiel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEtapeCalendrierReferentiel['max'])) {
                $this->addUsingAlias(CommonTCalendrierEtapeReferentielPeer::ID_ETAPE_CALENDRIER_REFERENTIEL, $idEtapeCalendrierReferentiel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCalendrierEtapeReferentielPeer::ID_ETAPE_CALENDRIER_REFERENTIEL, $idEtapeCalendrierReferentiel, $comparison);
    }

    /**
     * Filter the query on the ID_TYPE_PROCEDURE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTypeProcedure(1234); // WHERE ID_TYPE_PROCEDURE = 1234
     * $query->filterByIdTypeProcedure(array(12, 34)); // WHERE ID_TYPE_PROCEDURE IN (12, 34)
     * $query->filterByIdTypeProcedure(array('min' => 12)); // WHERE ID_TYPE_PROCEDURE >= 12
     * $query->filterByIdTypeProcedure(array('max' => 12)); // WHERE ID_TYPE_PROCEDURE <= 12
     * </code>
     *
     * @param     mixed $idTypeProcedure The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCalendrierEtapeReferentielQuery The current query, for fluid interface
     */
    public function filterByIdTypeProcedure($idTypeProcedure = null, $comparison = null)
    {
        if (is_array($idTypeProcedure)) {
            $useMinMax = false;
            if (isset($idTypeProcedure['min'])) {
                $this->addUsingAlias(CommonTCalendrierEtapeReferentielPeer::ID_TYPE_PROCEDURE, $idTypeProcedure['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeProcedure['max'])) {
                $this->addUsingAlias(CommonTCalendrierEtapeReferentielPeer::ID_TYPE_PROCEDURE, $idTypeProcedure['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCalendrierEtapeReferentielPeer::ID_TYPE_PROCEDURE, $idTypeProcedure, $comparison);
    }

    /**
     * Filter the query on the ORGANISME column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganisme('fooValue');   // WHERE ORGANISME = 'fooValue'
     * $query->filterByOrganisme('%fooValue%'); // WHERE ORGANISME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organisme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCalendrierEtapeReferentielQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTCalendrierEtapeReferentielPeer::ORGANISME, $organisme, $comparison);
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
     * @return CommonTCalendrierEtapeReferentielQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTCalendrierEtapeReferentielPeer::CODE, $code, $comparison);
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
     * @return CommonTCalendrierEtapeReferentielQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTCalendrierEtapeReferentielPeer::LIBELLE, $libelle, $comparison);
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
     * @return CommonTCalendrierEtapeReferentielQuery The current query, for fluid interface
     */
    public function filterByPosition($position = null, $comparison = null)
    {
        if (is_array($position)) {
            $useMinMax = false;
            if (isset($position['min'])) {
                $this->addUsingAlias(CommonTCalendrierEtapeReferentielPeer::POSITION, $position['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($position['max'])) {
                $this->addUsingAlias(CommonTCalendrierEtapeReferentielPeer::POSITION, $position['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCalendrierEtapeReferentielPeer::POSITION, $position, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTCalendrierEtapeReferentiel $commonTCalendrierEtapeReferentiel Object to remove from the list of results
     *
     * @return CommonTCalendrierEtapeReferentielQuery The current query, for fluid interface
     */
    public function prune($commonTCalendrierEtapeReferentiel = null)
    {
        if ($commonTCalendrierEtapeReferentiel) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonTCalendrierEtapeReferentielPeer::ID_ETAPE_CALENDRIER_REFERENTIEL), $commonTCalendrierEtapeReferentiel->getIdEtapeCalendrierReferentiel(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonTCalendrierEtapeReferentielPeer::ID_TYPE_PROCEDURE), $commonTCalendrierEtapeReferentiel->getIdTypeProcedure(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(CommonTCalendrierEtapeReferentielPeer::ORGANISME), $commonTCalendrierEtapeReferentiel->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
