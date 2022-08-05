<?php


/**
 * Base class that represents a query for the 't_CAO_Ordre_De_Passage' table.
 *
 * 
 *
 * @method CommonTCAOOrdreDePassageQuery orderByIdOrdreDePassage($order = Criteria::ASC) Order by the id_ordre_de_passage column
 * @method CommonTCAOOrdreDePassageQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonTCAOOrdreDePassageQuery orderByIdSeance($order = Criteria::ASC) Order by the id_seance column
 * @method CommonTCAOOrdreDePassageQuery orderByIdCommission($order = Criteria::ASC) Order by the id_commission column
 * @method CommonTCAOOrdreDePassageQuery orderByIdCommissionConsultation($order = Criteria::ASC) Order by the id_commission_consultation column
 * @method CommonTCAOOrdreDePassageQuery orderByOrdreDePassage($order = Criteria::ASC) Order by the ordre_de_passage column
 * @method CommonTCAOOrdreDePassageQuery orderByIdRefOrgValEtape($order = Criteria::ASC) Order by the id_ref_org_val_etape column
 * @method CommonTCAOOrdreDePassageQuery orderByDateSeance($order = Criteria::ASC) Order by the date_seance column
 * @method CommonTCAOOrdreDePassageQuery orderByDatePassage($order = Criteria::ASC) Order by the date_passage column
 *
 * @method CommonTCAOOrdreDePassageQuery groupByIdOrdreDePassage() Group by the id_ordre_de_passage column
 * @method CommonTCAOOrdreDePassageQuery groupByOrganisme() Group by the organisme column
 * @method CommonTCAOOrdreDePassageQuery groupByIdSeance() Group by the id_seance column
 * @method CommonTCAOOrdreDePassageQuery groupByIdCommission() Group by the id_commission column
 * @method CommonTCAOOrdreDePassageQuery groupByIdCommissionConsultation() Group by the id_commission_consultation column
 * @method CommonTCAOOrdreDePassageQuery groupByOrdreDePassage() Group by the ordre_de_passage column
 * @method CommonTCAOOrdreDePassageQuery groupByIdRefOrgValEtape() Group by the id_ref_org_val_etape column
 * @method CommonTCAOOrdreDePassageQuery groupByDateSeance() Group by the date_seance column
 * @method CommonTCAOOrdreDePassageQuery groupByDatePassage() Group by the date_passage column
 *
 * @method CommonTCAOOrdreDePassageQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTCAOOrdreDePassageQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTCAOOrdreDePassageQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTCAOOrdreDePassageQuery leftJoinCommonTCAOSeanceRelatedByDateSeance($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTCAOSeanceRelatedByDateSeance relation
 * @method CommonTCAOOrdreDePassageQuery rightJoinCommonTCAOSeanceRelatedByDateSeance($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTCAOSeanceRelatedByDateSeance relation
 * @method CommonTCAOOrdreDePassageQuery innerJoinCommonTCAOSeanceRelatedByDateSeance($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTCAOSeanceRelatedByDateSeance relation
 *
 * @method CommonTCAOOrdreDePassageQuery leftJoinCommonTCAOCommissionConsultation($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTCAOCommissionConsultation relation
 * @method CommonTCAOOrdreDePassageQuery rightJoinCommonTCAOCommissionConsultation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTCAOCommissionConsultation relation
 * @method CommonTCAOOrdreDePassageQuery innerJoinCommonTCAOCommissionConsultation($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTCAOCommissionConsultation relation
 *
 * @method CommonTCAOOrdreDePassageQuery leftJoinCommonTCAOCommission($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTCAOCommission relation
 * @method CommonTCAOOrdreDePassageQuery rightJoinCommonTCAOCommission($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTCAOCommission relation
 * @method CommonTCAOOrdreDePassageQuery innerJoinCommonTCAOCommission($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTCAOCommission relation
 *
 * @method CommonTCAOOrdreDePassageQuery leftJoinCommonTCAOSeanceRelatedByIdSeance($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTCAOSeanceRelatedByIdSeance relation
 * @method CommonTCAOOrdreDePassageQuery rightJoinCommonTCAOSeanceRelatedByIdSeance($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTCAOSeanceRelatedByIdSeance relation
 * @method CommonTCAOOrdreDePassageQuery innerJoinCommonTCAOSeanceRelatedByIdSeance($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTCAOSeanceRelatedByIdSeance relation
 *
 * @method CommonTCAOOrdreDePassageQuery leftJoinCommonOrganisme($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonOrganisme relation
 * @method CommonTCAOOrdreDePassageQuery rightJoinCommonOrganisme($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonOrganisme relation
 * @method CommonTCAOOrdreDePassageQuery innerJoinCommonOrganisme($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonOrganisme relation
 *
 * @method CommonTCAOOrdreDePassageQuery leftJoinCommonTCAOSeanceInvite($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonTCAOSeanceInvite relation
 * @method CommonTCAOOrdreDePassageQuery rightJoinCommonTCAOSeanceInvite($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonTCAOSeanceInvite relation
 * @method CommonTCAOOrdreDePassageQuery innerJoinCommonTCAOSeanceInvite($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonTCAOSeanceInvite relation
 *
 * @method CommonTCAOOrdreDePassage findOne(PropelPDO $con = null) Return the first CommonTCAOOrdreDePassage matching the query
 * @method CommonTCAOOrdreDePassage findOneOrCreate(PropelPDO $con = null) Return the first CommonTCAOOrdreDePassage matching the query, or a new CommonTCAOOrdreDePassage object populated from the query conditions when no match is found
 *
 * @method CommonTCAOOrdreDePassage findOneByIdOrdreDePassage(string $id_ordre_de_passage) Return the first CommonTCAOOrdreDePassage filtered by the id_ordre_de_passage column
 * @method CommonTCAOOrdreDePassage findOneByOrganisme(string $organisme) Return the first CommonTCAOOrdreDePassage filtered by the organisme column
 * @method CommonTCAOOrdreDePassage findOneByIdSeance(string $id_seance) Return the first CommonTCAOOrdreDePassage filtered by the id_seance column
 * @method CommonTCAOOrdreDePassage findOneByIdCommission(string $id_commission) Return the first CommonTCAOOrdreDePassage filtered by the id_commission column
 * @method CommonTCAOOrdreDePassage findOneByIdCommissionConsultation(string $id_commission_consultation) Return the first CommonTCAOOrdreDePassage filtered by the id_commission_consultation column
 * @method CommonTCAOOrdreDePassage findOneByOrdreDePassage(int $ordre_de_passage) Return the first CommonTCAOOrdreDePassage filtered by the ordre_de_passage column
 * @method CommonTCAOOrdreDePassage findOneByIdRefOrgValEtape(int $id_ref_org_val_etape) Return the first CommonTCAOOrdreDePassage filtered by the id_ref_org_val_etape column
 * @method CommonTCAOOrdreDePassage findOneByDateSeance(string $date_seance) Return the first CommonTCAOOrdreDePassage filtered by the date_seance column
 * @method CommonTCAOOrdreDePassage findOneByDatePassage(string $date_passage) Return the first CommonTCAOOrdreDePassage filtered by the date_passage column
 *
 * @method array findByIdOrdreDePassage(string $id_ordre_de_passage) Return CommonTCAOOrdreDePassage objects filtered by the id_ordre_de_passage column
 * @method array findByOrganisme(string $organisme) Return CommonTCAOOrdreDePassage objects filtered by the organisme column
 * @method array findByIdSeance(string $id_seance) Return CommonTCAOOrdreDePassage objects filtered by the id_seance column
 * @method array findByIdCommission(string $id_commission) Return CommonTCAOOrdreDePassage objects filtered by the id_commission column
 * @method array findByIdCommissionConsultation(string $id_commission_consultation) Return CommonTCAOOrdreDePassage objects filtered by the id_commission_consultation column
 * @method array findByOrdreDePassage(int $ordre_de_passage) Return CommonTCAOOrdreDePassage objects filtered by the ordre_de_passage column
 * @method array findByIdRefOrgValEtape(int $id_ref_org_val_etape) Return CommonTCAOOrdreDePassage objects filtered by the id_ref_org_val_etape column
 * @method array findByDateSeance(string $date_seance) Return CommonTCAOOrdreDePassage objects filtered by the date_seance column
 * @method array findByDatePassage(string $date_passage) Return CommonTCAOOrdreDePassage objects filtered by the date_passage column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTCAOOrdreDePassageQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTCAOOrdreDePassageQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTCAOOrdreDePassage', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTCAOOrdreDePassageQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTCAOOrdreDePassageQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTCAOOrdreDePassageQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTCAOOrdreDePassageQuery) {
            return $criteria;
        }
        $query = new CommonTCAOOrdreDePassageQuery();
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
                         A Primary key composition: [$id_ordre_de_passage, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonTCAOOrdreDePassage|CommonTCAOOrdreDePassage[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTCAOOrdreDePassagePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTCAOOrdreDePassagePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTCAOOrdreDePassage A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_ordre_de_passage`, `organisme`, `id_seance`, `id_commission`, `id_commission_consultation`, `ordre_de_passage`, `id_ref_org_val_etape`, `date_seance`, `date_passage` FROM `t_CAO_Ordre_De_Passage` WHERE `id_ordre_de_passage` = :p0 AND `organisme` = :p1';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonTCAOOrdreDePassage();
            $obj->hydrate($row);
            CommonTCAOOrdreDePassagePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonTCAOOrdreDePassage|CommonTCAOOrdreDePassage[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTCAOOrdreDePassage[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTCAOOrdreDePassageQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonTCAOOrdreDePassagePeer::ID_ORDRE_DE_PASSAGE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonTCAOOrdreDePassagePeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTCAOOrdreDePassageQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonTCAOOrdreDePassagePeer::ID_ORDRE_DE_PASSAGE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonTCAOOrdreDePassagePeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the id_ordre_de_passage column
     *
     * Example usage:
     * <code>
     * $query->filterByIdOrdreDePassage(1234); // WHERE id_ordre_de_passage = 1234
     * $query->filterByIdOrdreDePassage(array(12, 34)); // WHERE id_ordre_de_passage IN (12, 34)
     * $query->filterByIdOrdreDePassage(array('min' => 12)); // WHERE id_ordre_de_passage >= 12
     * $query->filterByIdOrdreDePassage(array('max' => 12)); // WHERE id_ordre_de_passage <= 12
     * </code>
     *
     * @param     mixed $idOrdreDePassage The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOOrdreDePassageQuery The current query, for fluid interface
     */
    public function filterByIdOrdreDePassage($idOrdreDePassage = null, $comparison = null)
    {
        if (is_array($idOrdreDePassage)) {
            $useMinMax = false;
            if (isset($idOrdreDePassage['min'])) {
                $this->addUsingAlias(CommonTCAOOrdreDePassagePeer::ID_ORDRE_DE_PASSAGE, $idOrdreDePassage['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idOrdreDePassage['max'])) {
                $this->addUsingAlias(CommonTCAOOrdreDePassagePeer::ID_ORDRE_DE_PASSAGE, $idOrdreDePassage['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOOrdreDePassagePeer::ID_ORDRE_DE_PASSAGE, $idOrdreDePassage, $comparison);
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
     * @return CommonTCAOOrdreDePassageQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTCAOOrdreDePassagePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the id_seance column
     *
     * Example usage:
     * <code>
     * $query->filterByIdSeance(1234); // WHERE id_seance = 1234
     * $query->filterByIdSeance(array(12, 34)); // WHERE id_seance IN (12, 34)
     * $query->filterByIdSeance(array('min' => 12)); // WHERE id_seance >= 12
     * $query->filterByIdSeance(array('max' => 12)); // WHERE id_seance <= 12
     * </code>
     *
     * @see       filterByCommonTCAOSeanceRelatedByIdSeance()
     *
     * @param     mixed $idSeance The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOOrdreDePassageQuery The current query, for fluid interface
     */
    public function filterByIdSeance($idSeance = null, $comparison = null)
    {
        if (is_array($idSeance)) {
            $useMinMax = false;
            if (isset($idSeance['min'])) {
                $this->addUsingAlias(CommonTCAOOrdreDePassagePeer::ID_SEANCE, $idSeance['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idSeance['max'])) {
                $this->addUsingAlias(CommonTCAOOrdreDePassagePeer::ID_SEANCE, $idSeance['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOOrdreDePassagePeer::ID_SEANCE, $idSeance, $comparison);
    }

    /**
     * Filter the query on the id_commission column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCommission(1234); // WHERE id_commission = 1234
     * $query->filterByIdCommission(array(12, 34)); // WHERE id_commission IN (12, 34)
     * $query->filterByIdCommission(array('min' => 12)); // WHERE id_commission >= 12
     * $query->filterByIdCommission(array('max' => 12)); // WHERE id_commission <= 12
     * </code>
     *
     * @see       filterByCommonTCAOCommission()
     *
     * @param     mixed $idCommission The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOOrdreDePassageQuery The current query, for fluid interface
     */
    public function filterByIdCommission($idCommission = null, $comparison = null)
    {
        if (is_array($idCommission)) {
            $useMinMax = false;
            if (isset($idCommission['min'])) {
                $this->addUsingAlias(CommonTCAOOrdreDePassagePeer::ID_COMMISSION, $idCommission['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCommission['max'])) {
                $this->addUsingAlias(CommonTCAOOrdreDePassagePeer::ID_COMMISSION, $idCommission['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOOrdreDePassagePeer::ID_COMMISSION, $idCommission, $comparison);
    }

    /**
     * Filter the query on the id_commission_consultation column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCommissionConsultation(1234); // WHERE id_commission_consultation = 1234
     * $query->filterByIdCommissionConsultation(array(12, 34)); // WHERE id_commission_consultation IN (12, 34)
     * $query->filterByIdCommissionConsultation(array('min' => 12)); // WHERE id_commission_consultation >= 12
     * $query->filterByIdCommissionConsultation(array('max' => 12)); // WHERE id_commission_consultation <= 12
     * </code>
     *
     * @see       filterByCommonTCAOCommissionConsultation()
     *
     * @param     mixed $idCommissionConsultation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOOrdreDePassageQuery The current query, for fluid interface
     */
    public function filterByIdCommissionConsultation($idCommissionConsultation = null, $comparison = null)
    {
        if (is_array($idCommissionConsultation)) {
            $useMinMax = false;
            if (isset($idCommissionConsultation['min'])) {
                $this->addUsingAlias(CommonTCAOOrdreDePassagePeer::ID_COMMISSION_CONSULTATION, $idCommissionConsultation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCommissionConsultation['max'])) {
                $this->addUsingAlias(CommonTCAOOrdreDePassagePeer::ID_COMMISSION_CONSULTATION, $idCommissionConsultation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOOrdreDePassagePeer::ID_COMMISSION_CONSULTATION, $idCommissionConsultation, $comparison);
    }

    /**
     * Filter the query on the ordre_de_passage column
     *
     * Example usage:
     * <code>
     * $query->filterByOrdreDePassage(1234); // WHERE ordre_de_passage = 1234
     * $query->filterByOrdreDePassage(array(12, 34)); // WHERE ordre_de_passage IN (12, 34)
     * $query->filterByOrdreDePassage(array('min' => 12)); // WHERE ordre_de_passage >= 12
     * $query->filterByOrdreDePassage(array('max' => 12)); // WHERE ordre_de_passage <= 12
     * </code>
     *
     * @param     mixed $ordreDePassage The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOOrdreDePassageQuery The current query, for fluid interface
     */
    public function filterByOrdreDePassage($ordreDePassage = null, $comparison = null)
    {
        if (is_array($ordreDePassage)) {
            $useMinMax = false;
            if (isset($ordreDePassage['min'])) {
                $this->addUsingAlias(CommonTCAOOrdreDePassagePeer::ORDRE_DE_PASSAGE, $ordreDePassage['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ordreDePassage['max'])) {
                $this->addUsingAlias(CommonTCAOOrdreDePassagePeer::ORDRE_DE_PASSAGE, $ordreDePassage['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOOrdreDePassagePeer::ORDRE_DE_PASSAGE, $ordreDePassage, $comparison);
    }

    /**
     * Filter the query on the id_ref_org_val_etape column
     *
     * Example usage:
     * <code>
     * $query->filterByIdRefOrgValEtape(1234); // WHERE id_ref_org_val_etape = 1234
     * $query->filterByIdRefOrgValEtape(array(12, 34)); // WHERE id_ref_org_val_etape IN (12, 34)
     * $query->filterByIdRefOrgValEtape(array('min' => 12)); // WHERE id_ref_org_val_etape >= 12
     * $query->filterByIdRefOrgValEtape(array('max' => 12)); // WHERE id_ref_org_val_etape <= 12
     * </code>
     *
     * @param     mixed $idRefOrgValEtape The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOOrdreDePassageQuery The current query, for fluid interface
     */
    public function filterByIdRefOrgValEtape($idRefOrgValEtape = null, $comparison = null)
    {
        if (is_array($idRefOrgValEtape)) {
            $useMinMax = false;
            if (isset($idRefOrgValEtape['min'])) {
                $this->addUsingAlias(CommonTCAOOrdreDePassagePeer::ID_REF_ORG_VAL_ETAPE, $idRefOrgValEtape['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idRefOrgValEtape['max'])) {
                $this->addUsingAlias(CommonTCAOOrdreDePassagePeer::ID_REF_ORG_VAL_ETAPE, $idRefOrgValEtape['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOOrdreDePassagePeer::ID_REF_ORG_VAL_ETAPE, $idRefOrgValEtape, $comparison);
    }

    /**
     * Filter the query on the date_seance column
     *
     * Example usage:
     * <code>
     * $query->filterByDateSeance('2011-03-14'); // WHERE date_seance = '2011-03-14'
     * $query->filterByDateSeance('now'); // WHERE date_seance = '2011-03-14'
     * $query->filterByDateSeance(array('max' => 'yesterday')); // WHERE date_seance > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateSeance The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOOrdreDePassageQuery The current query, for fluid interface
     */
    public function filterByDateSeance($dateSeance = null, $comparison = null)
    {
        if (is_array($dateSeance)) {
            $useMinMax = false;
            if (isset($dateSeance['min'])) {
                $this->addUsingAlias(CommonTCAOOrdreDePassagePeer::DATE_SEANCE, $dateSeance['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateSeance['max'])) {
                $this->addUsingAlias(CommonTCAOOrdreDePassagePeer::DATE_SEANCE, $dateSeance['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOOrdreDePassagePeer::DATE_SEANCE, $dateSeance, $comparison);
    }

    /**
     * Filter the query on the date_passage column
     *
     * Example usage:
     * <code>
     * $query->filterByDatePassage('2011-03-14'); // WHERE date_passage = '2011-03-14'
     * $query->filterByDatePassage('now'); // WHERE date_passage = '2011-03-14'
     * $query->filterByDatePassage(array('max' => 'yesterday')); // WHERE date_passage > '2011-03-13'
     * </code>
     *
     * @param     mixed $datePassage The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOOrdreDePassageQuery The current query, for fluid interface
     */
    public function filterByDatePassage($datePassage = null, $comparison = null)
    {
        if (is_array($datePassage)) {
            $useMinMax = false;
            if (isset($datePassage['min'])) {
                $this->addUsingAlias(CommonTCAOOrdreDePassagePeer::DATE_PASSAGE, $datePassage['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($datePassage['max'])) {
                $this->addUsingAlias(CommonTCAOOrdreDePassagePeer::DATE_PASSAGE, $datePassage['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOOrdreDePassagePeer::DATE_PASSAGE, $datePassage, $comparison);
    }

    /**
     * Filter the query by a related CommonTCAOSeance object
     *
     * @param   CommonTCAOSeance|PropelObjectCollection $commonTCAOSeance The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTCAOOrdreDePassageQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTCAOSeanceRelatedByDateSeance($commonTCAOSeance, $comparison = null)
    {
        if ($commonTCAOSeance instanceof CommonTCAOSeance) {
            return $this
                ->addUsingAlias(CommonTCAOOrdreDePassagePeer::DATE_SEANCE, $commonTCAOSeance->getDate(), $comparison);
        } elseif ($commonTCAOSeance instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonTCAOOrdreDePassagePeer::DATE_SEANCE, $commonTCAOSeance->toKeyValue('Date', 'Date'), $comparison);
        } else {
            throw new PropelException('filterByCommonTCAOSeanceRelatedByDateSeance() only accepts arguments of type CommonTCAOSeance or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTCAOSeanceRelatedByDateSeance relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTCAOOrdreDePassageQuery The current query, for fluid interface
     */
    public function joinCommonTCAOSeanceRelatedByDateSeance($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTCAOSeanceRelatedByDateSeance');

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
            $this->addJoinObject($join, 'CommonTCAOSeanceRelatedByDateSeance');
        }

        return $this;
    }

    /**
     * Use the CommonTCAOSeanceRelatedByDateSeance relation CommonTCAOSeance object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTCAOSeanceQuery A secondary query class using the current class as primary query
     */
    public function useCommonTCAOSeanceRelatedByDateSeanceQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonTCAOSeanceRelatedByDateSeance($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTCAOSeanceRelatedByDateSeance', 'CommonTCAOSeanceQuery');
    }

    /**
     * Filter the query by a related CommonTCAOCommissionConsultation object
     *
     * @param   CommonTCAOCommissionConsultation|PropelObjectCollection $commonTCAOCommissionConsultation The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTCAOOrdreDePassageQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTCAOCommissionConsultation($commonTCAOCommissionConsultation, $comparison = null)
    {
        if ($commonTCAOCommissionConsultation instanceof CommonTCAOCommissionConsultation) {
            return $this
                ->addUsingAlias(CommonTCAOOrdreDePassagePeer::ID_COMMISSION_CONSULTATION, $commonTCAOCommissionConsultation->getIdCommissionConsultation(), $comparison);
        } elseif ($commonTCAOCommissionConsultation instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonTCAOOrdreDePassagePeer::ID_COMMISSION_CONSULTATION, $commonTCAOCommissionConsultation->toKeyValue('IdCommissionConsultation', 'IdCommissionConsultation'), $comparison);
        } else {
            throw new PropelException('filterByCommonTCAOCommissionConsultation() only accepts arguments of type CommonTCAOCommissionConsultation or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTCAOCommissionConsultation relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTCAOOrdreDePassageQuery The current query, for fluid interface
     */
    public function joinCommonTCAOCommissionConsultation($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTCAOCommissionConsultation');

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
            $this->addJoinObject($join, 'CommonTCAOCommissionConsultation');
        }

        return $this;
    }

    /**
     * Use the CommonTCAOCommissionConsultation relation CommonTCAOCommissionConsultation object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTCAOCommissionConsultationQuery A secondary query class using the current class as primary query
     */
    public function useCommonTCAOCommissionConsultationQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonTCAOCommissionConsultation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTCAOCommissionConsultation', 'CommonTCAOCommissionConsultationQuery');
    }

    /**
     * Filter the query by a related CommonTCAOCommission object
     *
     * @param   CommonTCAOCommission|PropelObjectCollection $commonTCAOCommission The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTCAOOrdreDePassageQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTCAOCommission($commonTCAOCommission, $comparison = null)
    {
        if ($commonTCAOCommission instanceof CommonTCAOCommission) {
            return $this
                ->addUsingAlias(CommonTCAOOrdreDePassagePeer::ID_COMMISSION, $commonTCAOCommission->getIdCommission(), $comparison);
        } elseif ($commonTCAOCommission instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonTCAOOrdreDePassagePeer::ID_COMMISSION, $commonTCAOCommission->toKeyValue('IdCommission', 'IdCommission'), $comparison);
        } else {
            throw new PropelException('filterByCommonTCAOCommission() only accepts arguments of type CommonTCAOCommission or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTCAOCommission relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTCAOOrdreDePassageQuery The current query, for fluid interface
     */
    public function joinCommonTCAOCommission($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTCAOCommission');

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
            $this->addJoinObject($join, 'CommonTCAOCommission');
        }

        return $this;
    }

    /**
     * Use the CommonTCAOCommission relation CommonTCAOCommission object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTCAOCommissionQuery A secondary query class using the current class as primary query
     */
    public function useCommonTCAOCommissionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonTCAOCommission($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTCAOCommission', 'CommonTCAOCommissionQuery');
    }

    /**
     * Filter the query by a related CommonTCAOSeance object
     *
     * @param   CommonTCAOSeance|PropelObjectCollection $commonTCAOSeance The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTCAOOrdreDePassageQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTCAOSeanceRelatedByIdSeance($commonTCAOSeance, $comparison = null)
    {
        if ($commonTCAOSeance instanceof CommonTCAOSeance) {
            return $this
                ->addUsingAlias(CommonTCAOOrdreDePassagePeer::ID_SEANCE, $commonTCAOSeance->getIdSeance(), $comparison);
        } elseif ($commonTCAOSeance instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonTCAOOrdreDePassagePeer::ID_SEANCE, $commonTCAOSeance->toKeyValue('IdSeance', 'IdSeance'), $comparison);
        } else {
            throw new PropelException('filterByCommonTCAOSeanceRelatedByIdSeance() only accepts arguments of type CommonTCAOSeance or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTCAOSeanceRelatedByIdSeance relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTCAOOrdreDePassageQuery The current query, for fluid interface
     */
    public function joinCommonTCAOSeanceRelatedByIdSeance($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTCAOSeanceRelatedByIdSeance');

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
            $this->addJoinObject($join, 'CommonTCAOSeanceRelatedByIdSeance');
        }

        return $this;
    }

    /**
     * Use the CommonTCAOSeanceRelatedByIdSeance relation CommonTCAOSeance object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTCAOSeanceQuery A secondary query class using the current class as primary query
     */
    public function useCommonTCAOSeanceRelatedByIdSeanceQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonTCAOSeanceRelatedByIdSeance($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTCAOSeanceRelatedByIdSeance', 'CommonTCAOSeanceQuery');
    }

    /**
     * Filter the query by a related CommonOrganisme object
     *
     * @param   CommonOrganisme|PropelObjectCollection $commonOrganisme The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTCAOOrdreDePassageQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonOrganisme($commonOrganisme, $comparison = null)
    {
        if ($commonOrganisme instanceof CommonOrganisme) {
            return $this
                ->addUsingAlias(CommonTCAOOrdreDePassagePeer::ORGANISME, $commonOrganisme->getAcronyme(), $comparison);
        } elseif ($commonOrganisme instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonTCAOOrdreDePassagePeer::ORGANISME, $commonOrganisme->toKeyValue('PrimaryKey', 'Acronyme'), $comparison);
        } else {
            throw new PropelException('filterByCommonOrganisme() only accepts arguments of type CommonOrganisme or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonOrganisme relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTCAOOrdreDePassageQuery The current query, for fluid interface
     */
    public function joinCommonOrganisme($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonOrganisme');

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
            $this->addJoinObject($join, 'CommonOrganisme');
        }

        return $this;
    }

    /**
     * Use the CommonOrganisme relation CommonOrganisme object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonOrganismeQuery A secondary query class using the current class as primary query
     */
    public function useCommonOrganismeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonOrganisme($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonOrganisme', 'CommonOrganismeQuery');
    }

    /**
     * Filter the query by a related CommonTCAOSeanceInvite object
     *
     * @param   CommonTCAOSeanceInvite|PropelObjectCollection $commonTCAOSeanceInvite  the related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonTCAOOrdreDePassageQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonTCAOSeanceInvite($commonTCAOSeanceInvite, $comparison = null)
    {
        if ($commonTCAOSeanceInvite instanceof CommonTCAOSeanceInvite) {
            return $this
                ->addUsingAlias(CommonTCAOOrdreDePassagePeer::ID_ORDRE_DE_PASSAGE, $commonTCAOSeanceInvite->getIdOrdreDePassage(), $comparison);
        } elseif ($commonTCAOSeanceInvite instanceof PropelObjectCollection) {
            return $this
                ->useCommonTCAOSeanceInviteQuery()
                ->filterByPrimaryKeys($commonTCAOSeanceInvite->getPrimaryKeys())
                ->endUse();
        } else {
            throw new PropelException('filterByCommonTCAOSeanceInvite() only accepts arguments of type CommonTCAOSeanceInvite or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonTCAOSeanceInvite relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonTCAOOrdreDePassageQuery The current query, for fluid interface
     */
    public function joinCommonTCAOSeanceInvite($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonTCAOSeanceInvite');

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
            $this->addJoinObject($join, 'CommonTCAOSeanceInvite');
        }

        return $this;
    }

    /**
     * Use the CommonTCAOSeanceInvite relation CommonTCAOSeanceInvite object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonTCAOSeanceInviteQuery A secondary query class using the current class as primary query
     */
    public function useCommonTCAOSeanceInviteQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonTCAOSeanceInvite($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonTCAOSeanceInvite', 'CommonTCAOSeanceInviteQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTCAOOrdreDePassage $commonTCAOOrdreDePassage Object to remove from the list of results
     *
     * @return CommonTCAOOrdreDePassageQuery The current query, for fluid interface
     */
    public function prune($commonTCAOOrdreDePassage = null)
    {
        if ($commonTCAOOrdreDePassage) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonTCAOOrdreDePassagePeer::ID_ORDRE_DE_PASSAGE), $commonTCAOOrdreDePassage->getIdOrdreDePassage(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonTCAOOrdreDePassagePeer::ORGANISME), $commonTCAOOrdreDePassage->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
