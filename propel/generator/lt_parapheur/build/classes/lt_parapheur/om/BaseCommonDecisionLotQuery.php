<?php


/**
 * Base class that represents a query for the 'DecisionLot' table.
 *
 * 
 *
 * @method CommonDecisionLotQuery orderByIdDecisionLot($order = Criteria::ASC) Order by the id_decision_lot column
 * @method CommonDecisionLotQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonDecisionLotQuery orderByConsultationRef($order = Criteria::ASC) Order by the consultation_ref column
 * @method CommonDecisionLotQuery orderByLot($order = Criteria::ASC) Order by the lot column
 * @method CommonDecisionLotQuery orderByIdTypeDecision($order = Criteria::ASC) Order by the id_type_decision column
 * @method CommonDecisionLotQuery orderByAutreAPreciser($order = Criteria::ASC) Order by the autre_a_preciser column
 * @method CommonDecisionLotQuery orderByDateDecision($order = Criteria::ASC) Order by the date_decision column
 * @method CommonDecisionLotQuery orderByCommentaire($order = Criteria::ASC) Order by the commentaire column
 * @method CommonDecisionLotQuery orderByDateMaj($order = Criteria::ASC) Order by the date_maj column
 *
 * @method CommonDecisionLotQuery groupByIdDecisionLot() Group by the id_decision_lot column
 * @method CommonDecisionLotQuery groupByOrganisme() Group by the organisme column
 * @method CommonDecisionLotQuery groupByConsultationRef() Group by the consultation_ref column
 * @method CommonDecisionLotQuery groupByLot() Group by the lot column
 * @method CommonDecisionLotQuery groupByIdTypeDecision() Group by the id_type_decision column
 * @method CommonDecisionLotQuery groupByAutreAPreciser() Group by the autre_a_preciser column
 * @method CommonDecisionLotQuery groupByDateDecision() Group by the date_decision column
 * @method CommonDecisionLotQuery groupByCommentaire() Group by the commentaire column
 * @method CommonDecisionLotQuery groupByDateMaj() Group by the date_maj column
 *
 * @method CommonDecisionLotQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonDecisionLotQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonDecisionLotQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonDecisionLot findOne(PropelPDO $con = null) Return the first CommonDecisionLot matching the query
 * @method CommonDecisionLot findOneOrCreate(PropelPDO $con = null) Return the first CommonDecisionLot matching the query, or a new CommonDecisionLot object populated from the query conditions when no match is found
 *
 * @method CommonDecisionLot findOneByIdDecisionLot(int $id_decision_lot) Return the first CommonDecisionLot filtered by the id_decision_lot column
 * @method CommonDecisionLot findOneByOrganisme(string $organisme) Return the first CommonDecisionLot filtered by the organisme column
 * @method CommonDecisionLot findOneByConsultationRef(int $consultation_ref) Return the first CommonDecisionLot filtered by the consultation_ref column
 * @method CommonDecisionLot findOneByLot(int $lot) Return the first CommonDecisionLot filtered by the lot column
 * @method CommonDecisionLot findOneByIdTypeDecision(int $id_type_decision) Return the first CommonDecisionLot filtered by the id_type_decision column
 * @method CommonDecisionLot findOneByAutreAPreciser(string $autre_a_preciser) Return the first CommonDecisionLot filtered by the autre_a_preciser column
 * @method CommonDecisionLot findOneByDateDecision(string $date_decision) Return the first CommonDecisionLot filtered by the date_decision column
 * @method CommonDecisionLot findOneByCommentaire(string $commentaire) Return the first CommonDecisionLot filtered by the commentaire column
 * @method CommonDecisionLot findOneByDateMaj(string $date_maj) Return the first CommonDecisionLot filtered by the date_maj column
 *
 * @method array findByIdDecisionLot(int $id_decision_lot) Return CommonDecisionLot objects filtered by the id_decision_lot column
 * @method array findByOrganisme(string $organisme) Return CommonDecisionLot objects filtered by the organisme column
 * @method array findByConsultationRef(int $consultation_ref) Return CommonDecisionLot objects filtered by the consultation_ref column
 * @method array findByLot(int $lot) Return CommonDecisionLot objects filtered by the lot column
 * @method array findByIdTypeDecision(int $id_type_decision) Return CommonDecisionLot objects filtered by the id_type_decision column
 * @method array findByAutreAPreciser(string $autre_a_preciser) Return CommonDecisionLot objects filtered by the autre_a_preciser column
 * @method array findByDateDecision(string $date_decision) Return CommonDecisionLot objects filtered by the date_decision column
 * @method array findByCommentaire(string $commentaire) Return CommonDecisionLot objects filtered by the commentaire column
 * @method array findByDateMaj(string $date_maj) Return CommonDecisionLot objects filtered by the date_maj column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonDecisionLotQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonDecisionLotQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonDecisionLot', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonDecisionLotQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonDecisionLotQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonDecisionLotQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonDecisionLotQuery) {
            return $criteria;
        }
        $query = new CommonDecisionLotQuery();
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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query 
                         A Primary key composition: [$id_decision_lot, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonDecisionLot|CommonDecisionLot[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonDecisionLotPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonDecisionLotPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonDecisionLot A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_decision_lot`, `organisme`, `consultation_ref`, `lot`, `id_type_decision`, `autre_a_preciser`, `date_decision`, `commentaire`, `date_maj` FROM `DecisionLot` WHERE `id_decision_lot` = :p0 AND `organisme` = :p1';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonDecisionLot();
            $obj->hydrate($row);
            CommonDecisionLotPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonDecisionLot|CommonDecisionLot[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonDecisionLot[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonDecisionLotQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonDecisionLotPeer::ID_DECISION_LOT, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonDecisionLotPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonDecisionLotQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonDecisionLotPeer::ID_DECISION_LOT, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonDecisionLotPeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the id_decision_lot column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDecisionLot(1234); // WHERE id_decision_lot = 1234
     * $query->filterByIdDecisionLot(array(12, 34)); // WHERE id_decision_lot IN (12, 34)
     * $query->filterByIdDecisionLot(array('min' => 12)); // WHERE id_decision_lot >= 12
     * $query->filterByIdDecisionLot(array('max' => 12)); // WHERE id_decision_lot <= 12
     * </code>
     *
     * @param     mixed $idDecisionLot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionLotQuery The current query, for fluid interface
     */
    public function filterByIdDecisionLot($idDecisionLot = null, $comparison = null)
    {
        if (is_array($idDecisionLot)) {
            $useMinMax = false;
            if (isset($idDecisionLot['min'])) {
                $this->addUsingAlias(CommonDecisionLotPeer::ID_DECISION_LOT, $idDecisionLot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDecisionLot['max'])) {
                $this->addUsingAlias(CommonDecisionLotPeer::ID_DECISION_LOT, $idDecisionLot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDecisionLotPeer::ID_DECISION_LOT, $idDecisionLot, $comparison);
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
     * @return CommonDecisionLotQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonDecisionLotPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the consultation_ref column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultationRef(1234); // WHERE consultation_ref = 1234
     * $query->filterByConsultationRef(array(12, 34)); // WHERE consultation_ref IN (12, 34)
     * $query->filterByConsultationRef(array('min' => 12)); // WHERE consultation_ref >= 12
     * $query->filterByConsultationRef(array('max' => 12)); // WHERE consultation_ref <= 12
     * </code>
     *
     * @param     mixed $consultationRef The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionLotQuery The current query, for fluid interface
     */
    public function filterByConsultationRef($consultationRef = null, $comparison = null)
    {
        if (is_array($consultationRef)) {
            $useMinMax = false;
            if (isset($consultationRef['min'])) {
                $this->addUsingAlias(CommonDecisionLotPeer::CONSULTATION_REF, $consultationRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($consultationRef['max'])) {
                $this->addUsingAlias(CommonDecisionLotPeer::CONSULTATION_REF, $consultationRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDecisionLotPeer::CONSULTATION_REF, $consultationRef, $comparison);
    }

    /**
     * Filter the query on the lot column
     *
     * Example usage:
     * <code>
     * $query->filterByLot(1234); // WHERE lot = 1234
     * $query->filterByLot(array(12, 34)); // WHERE lot IN (12, 34)
     * $query->filterByLot(array('min' => 12)); // WHERE lot >= 12
     * $query->filterByLot(array('max' => 12)); // WHERE lot <= 12
     * </code>
     *
     * @param     mixed $lot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionLotQuery The current query, for fluid interface
     */
    public function filterByLot($lot = null, $comparison = null)
    {
        if (is_array($lot)) {
            $useMinMax = false;
            if (isset($lot['min'])) {
                $this->addUsingAlias(CommonDecisionLotPeer::LOT, $lot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lot['max'])) {
                $this->addUsingAlias(CommonDecisionLotPeer::LOT, $lot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDecisionLotPeer::LOT, $lot, $comparison);
    }

    /**
     * Filter the query on the id_type_decision column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTypeDecision(1234); // WHERE id_type_decision = 1234
     * $query->filterByIdTypeDecision(array(12, 34)); // WHERE id_type_decision IN (12, 34)
     * $query->filterByIdTypeDecision(array('min' => 12)); // WHERE id_type_decision >= 12
     * $query->filterByIdTypeDecision(array('max' => 12)); // WHERE id_type_decision <= 12
     * </code>
     *
     * @param     mixed $idTypeDecision The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionLotQuery The current query, for fluid interface
     */
    public function filterByIdTypeDecision($idTypeDecision = null, $comparison = null)
    {
        if (is_array($idTypeDecision)) {
            $useMinMax = false;
            if (isset($idTypeDecision['min'])) {
                $this->addUsingAlias(CommonDecisionLotPeer::ID_TYPE_DECISION, $idTypeDecision['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTypeDecision['max'])) {
                $this->addUsingAlias(CommonDecisionLotPeer::ID_TYPE_DECISION, $idTypeDecision['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDecisionLotPeer::ID_TYPE_DECISION, $idTypeDecision, $comparison);
    }

    /**
     * Filter the query on the autre_a_preciser column
     *
     * Example usage:
     * <code>
     * $query->filterByAutreAPreciser('fooValue');   // WHERE autre_a_preciser = 'fooValue'
     * $query->filterByAutreAPreciser('%fooValue%'); // WHERE autre_a_preciser LIKE '%fooValue%'
     * </code>
     *
     * @param     string $autreAPreciser The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionLotQuery The current query, for fluid interface
     */
    public function filterByAutreAPreciser($autreAPreciser = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($autreAPreciser)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $autreAPreciser)) {
                $autreAPreciser = str_replace('*', '%', $autreAPreciser);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDecisionLotPeer::AUTRE_A_PRECISER, $autreAPreciser, $comparison);
    }

    /**
     * Filter the query on the date_decision column
     *
     * Example usage:
     * <code>
     * $query->filterByDateDecision('2011-03-14'); // WHERE date_decision = '2011-03-14'
     * $query->filterByDateDecision('now'); // WHERE date_decision = '2011-03-14'
     * $query->filterByDateDecision(array('max' => 'yesterday')); // WHERE date_decision > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateDecision The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionLotQuery The current query, for fluid interface
     */
    public function filterByDateDecision($dateDecision = null, $comparison = null)
    {
        if (is_array($dateDecision)) {
            $useMinMax = false;
            if (isset($dateDecision['min'])) {
                $this->addUsingAlias(CommonDecisionLotPeer::DATE_DECISION, $dateDecision['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateDecision['max'])) {
                $this->addUsingAlias(CommonDecisionLotPeer::DATE_DECISION, $dateDecision['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDecisionLotPeer::DATE_DECISION, $dateDecision, $comparison);
    }

    /**
     * Filter the query on the commentaire column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentaire('fooValue');   // WHERE commentaire = 'fooValue'
     * $query->filterByCommentaire('%fooValue%'); // WHERE commentaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commentaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionLotQuery The current query, for fluid interface
     */
    public function filterByCommentaire($commentaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commentaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commentaire)) {
                $commentaire = str_replace('*', '%', $commentaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDecisionLotPeer::COMMENTAIRE, $commentaire, $comparison);
    }

    /**
     * Filter the query on the date_maj column
     *
     * Example usage:
     * <code>
     * $query->filterByDateMaj('fooValue');   // WHERE date_maj = 'fooValue'
     * $query->filterByDateMaj('%fooValue%'); // WHERE date_maj LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateMaj The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDecisionLotQuery The current query, for fluid interface
     */
    public function filterByDateMaj($dateMaj = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateMaj)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateMaj)) {
                $dateMaj = str_replace('*', '%', $dateMaj);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDecisionLotPeer::DATE_MAJ, $dateMaj, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonDecisionLot $commonDecisionLot Object to remove from the list of results
     *
     * @return CommonDecisionLotQuery The current query, for fluid interface
     */
    public function prune($commonDecisionLot = null)
    {
        if ($commonDecisionLot) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonDecisionLotPeer::ID_DECISION_LOT), $commonDecisionLot->getIdDecisionLot(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonDecisionLotPeer::ORGANISME), $commonDecisionLot->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
