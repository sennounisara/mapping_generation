<?php


/**
 * Base class that represents a query for the 'QuestionDCE' table.
 *
 * 
 *
 * @method CommonQuestionDCEQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonQuestionDCEQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonQuestionDCEQuery orderByConsultationRef($order = Criteria::ASC) Order by the consultation_ref column
 * @method CommonQuestionDCEQuery orderByDateDepot($order = Criteria::ASC) Order by the date_depot column
 * @method CommonQuestionDCEQuery orderByIdInscrit($order = Criteria::ASC) Order by the id_inscrit column
 * @method CommonQuestionDCEQuery orderByIdEntreprise($order = Criteria::ASC) Order by the id_entreprise column
 *
 * @method CommonQuestionDCEQuery groupById() Group by the id column
 * @method CommonQuestionDCEQuery groupByOrganisme() Group by the organisme column
 * @method CommonQuestionDCEQuery groupByConsultationRef() Group by the consultation_ref column
 * @method CommonQuestionDCEQuery groupByDateDepot() Group by the date_depot column
 * @method CommonQuestionDCEQuery groupByIdInscrit() Group by the id_inscrit column
 * @method CommonQuestionDCEQuery groupByIdEntreprise() Group by the id_entreprise column
 *
 * @method CommonQuestionDCEQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonQuestionDCEQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonQuestionDCEQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonQuestionDCE findOne(PropelPDO $con = null) Return the first CommonQuestionDCE matching the query
 * @method CommonQuestionDCE findOneOrCreate(PropelPDO $con = null) Return the first CommonQuestionDCE matching the query, or a new CommonQuestionDCE object populated from the query conditions when no match is found
 *
 * @method CommonQuestionDCE findOneById(int $id) Return the first CommonQuestionDCE filtered by the id column
 * @method CommonQuestionDCE findOneByOrganisme(string $organisme) Return the first CommonQuestionDCE filtered by the organisme column
 * @method CommonQuestionDCE findOneByConsultationRef(int $consultation_ref) Return the first CommonQuestionDCE filtered by the consultation_ref column
 * @method CommonQuestionDCE findOneByDateDepot(string $date_depot) Return the first CommonQuestionDCE filtered by the date_depot column
 * @method CommonQuestionDCE findOneByIdInscrit(int $id_inscrit) Return the first CommonQuestionDCE filtered by the id_inscrit column
 * @method CommonQuestionDCE findOneByIdEntreprise(int $id_entreprise) Return the first CommonQuestionDCE filtered by the id_entreprise column
 *
 * @method array findById(int $id) Return CommonQuestionDCE objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonQuestionDCE objects filtered by the organisme column
 * @method array findByConsultationRef(int $consultation_ref) Return CommonQuestionDCE objects filtered by the consultation_ref column
 * @method array findByDateDepot(string $date_depot) Return CommonQuestionDCE objects filtered by the date_depot column
 * @method array findByIdInscrit(int $id_inscrit) Return CommonQuestionDCE objects filtered by the id_inscrit column
 * @method array findByIdEntreprise(int $id_entreprise) Return CommonQuestionDCE objects filtered by the id_entreprise column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonQuestionDCEQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonQuestionDCEQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonQuestionDCE', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonQuestionDCEQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonQuestionDCEQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonQuestionDCEQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonQuestionDCEQuery) {
            return $criteria;
        }
        $query = new CommonQuestionDCEQuery();
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
                         A Primary key composition: [$id, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonQuestionDCE|CommonQuestionDCE[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonQuestionDCEPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonQuestionDCEPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonQuestionDCE A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `consultation_ref`, `date_depot`, `id_inscrit`, `id_entreprise` FROM `QuestionDCE` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonQuestionDCE();
            $obj->hydrate($row);
            CommonQuestionDCEPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonQuestionDCE|CommonQuestionDCE[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonQuestionDCE[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonQuestionDCEQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonQuestionDCEPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonQuestionDCEPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonQuestionDCEQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonQuestionDCEPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonQuestionDCEPeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return CommonQuestionDCEQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonQuestionDCEPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonQuestionDCEPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonQuestionDCEPeer::ID, $id, $comparison);
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
     * @return CommonQuestionDCEQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonQuestionDCEPeer::ORGANISME, $organisme, $comparison);
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
     * @return CommonQuestionDCEQuery The current query, for fluid interface
     */
    public function filterByConsultationRef($consultationRef = null, $comparison = null)
    {
        if (is_array($consultationRef)) {
            $useMinMax = false;
            if (isset($consultationRef['min'])) {
                $this->addUsingAlias(CommonQuestionDCEPeer::CONSULTATION_REF, $consultationRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($consultationRef['max'])) {
                $this->addUsingAlias(CommonQuestionDCEPeer::CONSULTATION_REF, $consultationRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonQuestionDCEPeer::CONSULTATION_REF, $consultationRef, $comparison);
    }

    /**
     * Filter the query on the date_depot column
     *
     * Example usage:
     * <code>
     * $query->filterByDateDepot('2011-03-14'); // WHERE date_depot = '2011-03-14'
     * $query->filterByDateDepot('now'); // WHERE date_depot = '2011-03-14'
     * $query->filterByDateDepot(array('max' => 'yesterday')); // WHERE date_depot > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateDepot The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonQuestionDCEQuery The current query, for fluid interface
     */
    public function filterByDateDepot($dateDepot = null, $comparison = null)
    {
        if (is_array($dateDepot)) {
            $useMinMax = false;
            if (isset($dateDepot['min'])) {
                $this->addUsingAlias(CommonQuestionDCEPeer::DATE_DEPOT, $dateDepot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateDepot['max'])) {
                $this->addUsingAlias(CommonQuestionDCEPeer::DATE_DEPOT, $dateDepot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonQuestionDCEPeer::DATE_DEPOT, $dateDepot, $comparison);
    }

    /**
     * Filter the query on the id_inscrit column
     *
     * Example usage:
     * <code>
     * $query->filterByIdInscrit(1234); // WHERE id_inscrit = 1234
     * $query->filterByIdInscrit(array(12, 34)); // WHERE id_inscrit IN (12, 34)
     * $query->filterByIdInscrit(array('min' => 12)); // WHERE id_inscrit >= 12
     * $query->filterByIdInscrit(array('max' => 12)); // WHERE id_inscrit <= 12
     * </code>
     *
     * @param     mixed $idInscrit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonQuestionDCEQuery The current query, for fluid interface
     */
    public function filterByIdInscrit($idInscrit = null, $comparison = null)
    {
        if (is_array($idInscrit)) {
            $useMinMax = false;
            if (isset($idInscrit['min'])) {
                $this->addUsingAlias(CommonQuestionDCEPeer::ID_INSCRIT, $idInscrit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idInscrit['max'])) {
                $this->addUsingAlias(CommonQuestionDCEPeer::ID_INSCRIT, $idInscrit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonQuestionDCEPeer::ID_INSCRIT, $idInscrit, $comparison);
    }

    /**
     * Filter the query on the id_entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntreprise(1234); // WHERE id_entreprise = 1234
     * $query->filterByIdEntreprise(array(12, 34)); // WHERE id_entreprise IN (12, 34)
     * $query->filterByIdEntreprise(array('min' => 12)); // WHERE id_entreprise >= 12
     * $query->filterByIdEntreprise(array('max' => 12)); // WHERE id_entreprise <= 12
     * </code>
     *
     * @param     mixed $idEntreprise The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonQuestionDCEQuery The current query, for fluid interface
     */
    public function filterByIdEntreprise($idEntreprise = null, $comparison = null)
    {
        if (is_array($idEntreprise)) {
            $useMinMax = false;
            if (isset($idEntreprise['min'])) {
                $this->addUsingAlias(CommonQuestionDCEPeer::ID_ENTREPRISE, $idEntreprise['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntreprise['max'])) {
                $this->addUsingAlias(CommonQuestionDCEPeer::ID_ENTREPRISE, $idEntreprise['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonQuestionDCEPeer::ID_ENTREPRISE, $idEntreprise, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonQuestionDCE $commonQuestionDCE Object to remove from the list of results
     *
     * @return CommonQuestionDCEQuery The current query, for fluid interface
     */
    public function prune($commonQuestionDCE = null)
    {
        if ($commonQuestionDCE) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonQuestionDCEPeer::ID), $commonQuestionDCE->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonQuestionDCEPeer::ORGANISME), $commonQuestionDCE->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
