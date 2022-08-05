<?php


/**
 * Base class that represents a query for the 't_calendrier_transition_referentiel' table.
 *
 * 
 *
 * @method CommonTCalendrierTransitionReferentielQuery orderByIdTransitionCalendrierReferentiel($order = Criteria::ASC) Order by the ID_TRANSITION_CALENDRIER_REFERENTIEL column
 * @method CommonTCalendrierTransitionReferentielQuery orderByIdTypeProcedure($order = Criteria::ASC) Order by the ID_TYPE_PROCEDURE column
 * @method CommonTCalendrierTransitionReferentielQuery orderByOrganisme($order = Criteria::ASC) Order by the ORGANISME column
 * @method CommonTCalendrierTransitionReferentielQuery orderByIdCalendrierEtapeReferentielSource($order = Criteria::ASC) Order by the ID_CALENDRIER_ETAPE_REFERENTIEL_SOURCE column
 * @method CommonTCalendrierTransitionReferentielQuery orderByIdCalendrierEtapeReferentielCible($order = Criteria::ASC) Order by the ID_CALENDRIER_ETAPE_REFERENTIEL_CIBLE column
 * @method CommonTCalendrierTransitionReferentielQuery orderByValeurFixe($order = Criteria::ASC) Order by the VALEUR_FIXE column
 * @method CommonTCalendrierTransitionReferentielQuery orderByValeurVariable($order = Criteria::ASC) Order by the VALEUR_VARIABLE column
 *
 * @method CommonTCalendrierTransitionReferentielQuery groupByIdTransitionCalendrierReferentiel() Group by the ID_TRANSITION_CALENDRIER_REFERENTIEL column
 * @method CommonTCalendrierTransitionReferentielQuery groupByIdTypeProcedure() Group by the ID_TYPE_PROCEDURE column
 * @method CommonTCalendrierTransitionReferentielQuery groupByOrganisme() Group by the ORGANISME column
 * @method CommonTCalendrierTransitionReferentielQuery groupByIdCalendrierEtapeReferentielSource() Group by the ID_CALENDRIER_ETAPE_REFERENTIEL_SOURCE column
 * @method CommonTCalendrierTransitionReferentielQuery groupByIdCalendrierEtapeReferentielCible() Group by the ID_CALENDRIER_ETAPE_REFERENTIEL_CIBLE column
 * @method CommonTCalendrierTransitionReferentielQuery groupByValeurFixe() Group by the VALEUR_FIXE column
 * @method CommonTCalendrierTransitionReferentielQuery groupByValeurVariable() Group by the VALEUR_VARIABLE column
 *
 * @method CommonTCalendrierTransitionReferentielQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTCalendrierTransitionReferentielQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTCalendrierTransitionReferentielQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTCalendrierTransitionReferentiel findOne(PropelPDO $con = null) Return the first CommonTCalendrierTransitionReferentiel matching the query
 * @method CommonTCalendrierTransitionReferentiel findOneOrCreate(PropelPDO $con = null) Return the first CommonTCalendrierTransitionReferentiel matching the query, or a new CommonTCalendrierTransitionReferentiel object populated from the query conditions when no match is found
 *
 * @method CommonTCalendrierTransitionReferentiel findOneByIdTransitionCalendrierReferentiel(int $ID_TRANSITION_CALENDRIER_REFERENTIEL) Return the first CommonTCalendrierTransitionReferentiel filtered by the ID_TRANSITION_CALENDRIER_REFERENTIEL column
 * @method CommonTCalendrierTransitionReferentiel findOneByIdTypeProcedure(int $ID_TYPE_PROCEDURE) Return the first CommonTCalendrierTransitionReferentiel filtered by the ID_TYPE_PROCEDURE column
 * @method CommonTCalendrierTransitionReferentiel findOneByOrganisme(string $ORGANISME) Return the first CommonTCalendrierTransitionReferentiel filtered by the ORGANISME column
 * @method CommonTCalendrierTransitionReferentiel findOneByIdCalendrierEtapeReferentielSource(int $ID_CALENDRIER_ETAPE_REFERENTIEL_SOURCE) Return the first CommonTCalendrierTransitionReferentiel filtered by the ID_CALENDRIER_ETAPE_REFERENTIEL_SOURCE column
 * @method CommonTCalendrierTransitionReferentiel findOneByIdCalendrierEtapeReferentielCible(int $ID_CALENDRIER_ETAPE_REFERENTIEL_CIBLE) Return the first CommonTCalendrierTransitionReferentiel filtered by the ID_CALENDRIER_ETAPE_REFERENTIEL_CIBLE column
 * @method CommonTCalendrierTransitionReferentiel findOneByValeurFixe(int $VALEUR_FIXE) Return the first CommonTCalendrierTransitionReferentiel filtered by the VALEUR_FIXE column
 * @method CommonTCalendrierTransitionReferentiel findOneByValeurVariable(int $VALEUR_VARIABLE) Return the first CommonTCalendrierTransitionReferentiel filtered by the VALEUR_VARIABLE column
 *
 * @method array findByIdTransitionCalendrierReferentiel(int $ID_TRANSITION_CALENDRIER_REFERENTIEL) Return CommonTCalendrierTransitionReferentiel objects filtered by the ID_TRANSITION_CALENDRIER_REFERENTIEL column
 * @method array findByIdTypeProcedure(int $ID_TYPE_PROCEDURE) Return CommonTCalendrierTransitionReferentiel objects filtered by the ID_TYPE_PROCEDURE column
 * @method array findByOrganisme(string $ORGANISME) Return CommonTCalendrierTransitionReferentiel objects filtered by the ORGANISME column
 * @method array findByIdCalendrierEtapeReferentielSource(int $ID_CALENDRIER_ETAPE_REFERENTIEL_SOURCE) Return CommonTCalendrierTransitionReferentiel objects filtered by the ID_CALENDRIER_ETAPE_REFERENTIEL_SOURCE column
 * @method array findByIdCalendrierEtapeReferentielCible(int $ID_CALENDRIER_ETAPE_REFERENTIEL_CIBLE) Return CommonTCalendrierTransitionReferentiel objects filtered by the ID_CALENDRIER_ETAPE_REFERENTIEL_CIBLE column
 * @method array findByValeurFixe(int $VALEUR_FIXE) Return CommonTCalendrierTransitionReferentiel objects filtered by the VALEUR_FIXE column
 * @method array findByValeurVariable(int $VALEUR_VARIABLE) Return CommonTCalendrierTransitionReferentiel objects filtered by the VALEUR_VARIABLE column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTCalendrierTransitionReferentielQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTCalendrierTransitionReferentielQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTCalendrierTransitionReferentiel', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTCalendrierTransitionReferentielQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTCalendrierTransitionReferentielQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTCalendrierTransitionReferentielQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTCalendrierTransitionReferentielQuery) {
            return $criteria;
        }
        $query = new CommonTCalendrierTransitionReferentielQuery();
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
                         A Primary key composition: [$ID_TRANSITION_CALENDRIER_REFERENTIEL, $ID_TYPE_PROCEDURE, $ORGANISME]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonTCalendrierTransitionReferentiel|CommonTCalendrierTransitionReferentiel[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTCalendrierTransitionReferentielPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTCalendrierTransitionReferentielPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTCalendrierTransitionReferentiel A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_TRANSITION_CALENDRIER_REFERENTIEL`, `ID_TYPE_PROCEDURE`, `ORGANISME`, `ID_CALENDRIER_ETAPE_REFERENTIEL_SOURCE`, `ID_CALENDRIER_ETAPE_REFERENTIEL_CIBLE`, `VALEUR_FIXE`, `VALEUR_VARIABLE` FROM `t_calendrier_transition_referentiel` WHERE `ID_TRANSITION_CALENDRIER_REFERENTIEL` = :p0 AND `ID_TYPE_PROCEDURE` = :p1 AND `ORGANISME` = :p2';
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
            $obj = new CommonTCalendrierTransitionReferentiel();
            $obj->hydrate($row);
            CommonTCalendrierTransitionReferentielPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return CommonTCalendrierTransitionReferentiel|CommonTCalendrierTransitionReferentiel[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTCalendrierTransitionReferentiel[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTCalendrierTransitionReferentielQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonTCalendrierTransitionReferentielPeer::ID_TRANSITION_CALENDRIER_REFERENTIEL, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonTCalendrierTransitionReferentielPeer::ID_TYPE_PROCEDURE, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(CommonTCalendrierTransitionReferentielPeer::ORGANISME, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTCalendrierTransitionReferentielQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonTCalendrierTransitionReferentielPeer::ID_TRANSITION_CALENDRIER_REFERENTIEL, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonTCalendrierTransitionReferentielPeer::ID_TYPE_PROCEDURE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(CommonTCalendrierTransitionReferentielPeer::ORGANISME, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the ID_TRANSITION_CALENDRIER_REFERENTIEL column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTransitionCalendrierReferentiel(1234); // WHERE ID_TRANSITION_CALENDRIER_REFERENTIEL = 1234
     * $query->filterByIdTransitionCalendrierReferentiel(array(12, 34)); // WHERE ID_TRANSITION_CALENDRIER_REFERENTIEL IN (12, 34)
     * $query->filterByIdTransitionCalendrierReferentiel(array('min' => 12)); // WHERE ID_TRANSITION_CALENDRIER_REFERENTIEL >= 12
     * $query->filterByIdTransitionCalendrierReferentiel(array('max' => 12)); // WHERE ID_TRANSITION_CALENDRIER_REFERENTIEL <= 12
     * </code>
     *
     * @param     mixed $idTransitionCalendrierReferentiel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCalendrierTransitionReferentielQuery The current query, for fluid interface
     */
    public function filterByIdTransitionCalendrierReferentiel($idTransitionCalendrierReferentiel = null, $comparison = null)
    {
        if (is_array($idTransitionCalendrierReferentiel)) {
            $useMinMax = false;
            if (isset($idTransitionCalendrierReferentiel['min'])) {
                $this->addUsingAlias(CommonTCalendrierTransitionReferentielPeer::ID_TRANSITION_CALENDRIER_REFERENTIEL, $idTransitionCalendrierReferentiel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTransitionCalendrierReferentiel['max'])) {
                $this->addUsingAlias(CommonTCalendrierTransitionReferentielPeer::ID_TRANSITION_CALENDRIER_REFERENTIEL, $idTransitionCalendrierReferentiel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCalendrierTransitionReferentielPeer::ID_TRANSITION_CALENDRIER_REFERENTIEL, $idTransitionCalendrierReferentiel, $comparison);
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
     * @return CommonTCalendrierTransitionReferentielQuery The current query, for fluid interface
     */
    public function filterByIdTypeProcedure($idTypeProcedure = null, $comparison = null)
    {
        if (is_array($idTypeProcedure)) {
            $useMinMax = false;
            if (isset($idTypeProcedure['min'])) {
                $this->addUsingAlias(CommonTCalendrierTransitionReferentielPeer::ID_TYPE_PROCEDURE, $idTypeProcedure['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeProcedure['max'])) {
                $this->addUsingAlias(CommonTCalendrierTransitionReferentielPeer::ID_TYPE_PROCEDURE, $idTypeProcedure['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCalendrierTransitionReferentielPeer::ID_TYPE_PROCEDURE, $idTypeProcedure, $comparison);
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
     * @return CommonTCalendrierTransitionReferentielQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTCalendrierTransitionReferentielPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the ID_CALENDRIER_ETAPE_REFERENTIEL_SOURCE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCalendrierEtapeReferentielSource(1234); // WHERE ID_CALENDRIER_ETAPE_REFERENTIEL_SOURCE = 1234
     * $query->filterByIdCalendrierEtapeReferentielSource(array(12, 34)); // WHERE ID_CALENDRIER_ETAPE_REFERENTIEL_SOURCE IN (12, 34)
     * $query->filterByIdCalendrierEtapeReferentielSource(array('min' => 12)); // WHERE ID_CALENDRIER_ETAPE_REFERENTIEL_SOURCE >= 12
     * $query->filterByIdCalendrierEtapeReferentielSource(array('max' => 12)); // WHERE ID_CALENDRIER_ETAPE_REFERENTIEL_SOURCE <= 12
     * </code>
     *
     * @param     mixed $idCalendrierEtapeReferentielSource The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCalendrierTransitionReferentielQuery The current query, for fluid interface
     */
    public function filterByIdCalendrierEtapeReferentielSource($idCalendrierEtapeReferentielSource = null, $comparison = null)
    {
        if (is_array($idCalendrierEtapeReferentielSource)) {
            $useMinMax = false;
            if (isset($idCalendrierEtapeReferentielSource['min'])) {
                $this->addUsingAlias(CommonTCalendrierTransitionReferentielPeer::ID_CALENDRIER_ETAPE_REFERENTIEL_SOURCE, $idCalendrierEtapeReferentielSource['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCalendrierEtapeReferentielSource['max'])) {
                $this->addUsingAlias(CommonTCalendrierTransitionReferentielPeer::ID_CALENDRIER_ETAPE_REFERENTIEL_SOURCE, $idCalendrierEtapeReferentielSource['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCalendrierTransitionReferentielPeer::ID_CALENDRIER_ETAPE_REFERENTIEL_SOURCE, $idCalendrierEtapeReferentielSource, $comparison);
    }

    /**
     * Filter the query on the ID_CALENDRIER_ETAPE_REFERENTIEL_CIBLE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCalendrierEtapeReferentielCible(1234); // WHERE ID_CALENDRIER_ETAPE_REFERENTIEL_CIBLE = 1234
     * $query->filterByIdCalendrierEtapeReferentielCible(array(12, 34)); // WHERE ID_CALENDRIER_ETAPE_REFERENTIEL_CIBLE IN (12, 34)
     * $query->filterByIdCalendrierEtapeReferentielCible(array('min' => 12)); // WHERE ID_CALENDRIER_ETAPE_REFERENTIEL_CIBLE >= 12
     * $query->filterByIdCalendrierEtapeReferentielCible(array('max' => 12)); // WHERE ID_CALENDRIER_ETAPE_REFERENTIEL_CIBLE <= 12
     * </code>
     *
     * @param     mixed $idCalendrierEtapeReferentielCible The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCalendrierTransitionReferentielQuery The current query, for fluid interface
     */
    public function filterByIdCalendrierEtapeReferentielCible($idCalendrierEtapeReferentielCible = null, $comparison = null)
    {
        if (is_array($idCalendrierEtapeReferentielCible)) {
            $useMinMax = false;
            if (isset($idCalendrierEtapeReferentielCible['min'])) {
                $this->addUsingAlias(CommonTCalendrierTransitionReferentielPeer::ID_CALENDRIER_ETAPE_REFERENTIEL_CIBLE, $idCalendrierEtapeReferentielCible['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCalendrierEtapeReferentielCible['max'])) {
                $this->addUsingAlias(CommonTCalendrierTransitionReferentielPeer::ID_CALENDRIER_ETAPE_REFERENTIEL_CIBLE, $idCalendrierEtapeReferentielCible['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCalendrierTransitionReferentielPeer::ID_CALENDRIER_ETAPE_REFERENTIEL_CIBLE, $idCalendrierEtapeReferentielCible, $comparison);
    }

    /**
     * Filter the query on the VALEUR_FIXE column
     *
     * Example usage:
     * <code>
     * $query->filterByValeurFixe(1234); // WHERE VALEUR_FIXE = 1234
     * $query->filterByValeurFixe(array(12, 34)); // WHERE VALEUR_FIXE IN (12, 34)
     * $query->filterByValeurFixe(array('min' => 12)); // WHERE VALEUR_FIXE >= 12
     * $query->filterByValeurFixe(array('max' => 12)); // WHERE VALEUR_FIXE <= 12
     * </code>
     *
     * @param     mixed $valeurFixe The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCalendrierTransitionReferentielQuery The current query, for fluid interface
     */
    public function filterByValeurFixe($valeurFixe = null, $comparison = null)
    {
        if (is_array($valeurFixe)) {
            $useMinMax = false;
            if (isset($valeurFixe['min'])) {
                $this->addUsingAlias(CommonTCalendrierTransitionReferentielPeer::VALEUR_FIXE, $valeurFixe['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($valeurFixe['max'])) {
                $this->addUsingAlias(CommonTCalendrierTransitionReferentielPeer::VALEUR_FIXE, $valeurFixe['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCalendrierTransitionReferentielPeer::VALEUR_FIXE, $valeurFixe, $comparison);
    }

    /**
     * Filter the query on the VALEUR_VARIABLE column
     *
     * Example usage:
     * <code>
     * $query->filterByValeurVariable(1234); // WHERE VALEUR_VARIABLE = 1234
     * $query->filterByValeurVariable(array(12, 34)); // WHERE VALEUR_VARIABLE IN (12, 34)
     * $query->filterByValeurVariable(array('min' => 12)); // WHERE VALEUR_VARIABLE >= 12
     * $query->filterByValeurVariable(array('max' => 12)); // WHERE VALEUR_VARIABLE <= 12
     * </code>
     *
     * @param     mixed $valeurVariable The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCalendrierTransitionReferentielQuery The current query, for fluid interface
     */
    public function filterByValeurVariable($valeurVariable = null, $comparison = null)
    {
        if (is_array($valeurVariable)) {
            $useMinMax = false;
            if (isset($valeurVariable['min'])) {
                $this->addUsingAlias(CommonTCalendrierTransitionReferentielPeer::VALEUR_VARIABLE, $valeurVariable['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($valeurVariable['max'])) {
                $this->addUsingAlias(CommonTCalendrierTransitionReferentielPeer::VALEUR_VARIABLE, $valeurVariable['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCalendrierTransitionReferentielPeer::VALEUR_VARIABLE, $valeurVariable, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTCalendrierTransitionReferentiel $commonTCalendrierTransitionReferentiel Object to remove from the list of results
     *
     * @return CommonTCalendrierTransitionReferentielQuery The current query, for fluid interface
     */
    public function prune($commonTCalendrierTransitionReferentiel = null)
    {
        if ($commonTCalendrierTransitionReferentiel) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonTCalendrierTransitionReferentielPeer::ID_TRANSITION_CALENDRIER_REFERENTIEL), $commonTCalendrierTransitionReferentiel->getIdTransitionCalendrierReferentiel(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonTCalendrierTransitionReferentielPeer::ID_TYPE_PROCEDURE), $commonTCalendrierTransitionReferentiel->getIdTypeProcedure(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(CommonTCalendrierTransitionReferentielPeer::ORGANISME), $commonTCalendrierTransitionReferentiel->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
