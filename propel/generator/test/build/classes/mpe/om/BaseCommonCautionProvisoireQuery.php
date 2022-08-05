<?php


/**
 * Base class that represents a query for the 'caution_provisoire' table.
 *
 * 
 *
 * @method CommonCautionProvisoireQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonCautionProvisoireQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonCautionProvisoireQuery orderByConsultationRef($order = Criteria::ASC) Order by the consultation_ref column
 * @method CommonCautionProvisoireQuery orderByCautionRef($order = Criteria::ASC) Order by the caution_ref column
 * @method CommonCautionProvisoireQuery orderByLot($order = Criteria::ASC) Order by the lot column
 * @method CommonCautionProvisoireQuery orderByMontant($order = Criteria::ASC) Order by the montant column
 * @method CommonCautionProvisoireQuery orderByMontantDevise($order = Criteria::ASC) Order by the montant_devise column
 * @method CommonCautionProvisoireQuery orderByDevise($order = Criteria::ASC) Order by the devise column
 * @method CommonCautionProvisoireQuery orderByEntreprise($order = Criteria::ASC) Order by the entreprise column
 * @method CommonCautionProvisoireQuery orderByIdBanque($order = Criteria::ASC) Order by the id_banque column
 * @method CommonCautionProvisoireQuery orderByIdBlobPj($order = Criteria::ASC) Order by the id_blob_pj column
 *
 * @method CommonCautionProvisoireQuery groupById() Group by the id column
 * @method CommonCautionProvisoireQuery groupByOrganisme() Group by the organisme column
 * @method CommonCautionProvisoireQuery groupByConsultationRef() Group by the consultation_ref column
 * @method CommonCautionProvisoireQuery groupByCautionRef() Group by the caution_ref column
 * @method CommonCautionProvisoireQuery groupByLot() Group by the lot column
 * @method CommonCautionProvisoireQuery groupByMontant() Group by the montant column
 * @method CommonCautionProvisoireQuery groupByMontantDevise() Group by the montant_devise column
 * @method CommonCautionProvisoireQuery groupByDevise() Group by the devise column
 * @method CommonCautionProvisoireQuery groupByEntreprise() Group by the entreprise column
 * @method CommonCautionProvisoireQuery groupByIdBanque() Group by the id_banque column
 * @method CommonCautionProvisoireQuery groupByIdBlobPj() Group by the id_blob_pj column
 *
 * @method CommonCautionProvisoireQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonCautionProvisoireQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonCautionProvisoireQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonCautionProvisoire findOne(PropelPDO $con = null) Return the first CommonCautionProvisoire matching the query
 * @method CommonCautionProvisoire findOneOrCreate(PropelPDO $con = null) Return the first CommonCautionProvisoire matching the query, or a new CommonCautionProvisoire object populated from the query conditions when no match is found
 *
 * @method CommonCautionProvisoire findOneByOrganisme(string $organisme) Return the first CommonCautionProvisoire filtered by the organisme column
 * @method CommonCautionProvisoire findOneByConsultationRef(int $consultation_ref) Return the first CommonCautionProvisoire filtered by the consultation_ref column
 * @method CommonCautionProvisoire findOneByCautionRef(string $caution_ref) Return the first CommonCautionProvisoire filtered by the caution_ref column
 * @method CommonCautionProvisoire findOneByLot(int $lot) Return the first CommonCautionProvisoire filtered by the lot column
 * @method CommonCautionProvisoire findOneByMontant(double $montant) Return the first CommonCautionProvisoire filtered by the montant column
 * @method CommonCautionProvisoire findOneByMontantDevise(double $montant_devise) Return the first CommonCautionProvisoire filtered by the montant_devise column
 * @method CommonCautionProvisoire findOneByDevise(string $devise) Return the first CommonCautionProvisoire filtered by the devise column
 * @method CommonCautionProvisoire findOneByEntreprise(string $entreprise) Return the first CommonCautionProvisoire filtered by the entreprise column
 * @method CommonCautionProvisoire findOneByIdBanque(int $id_banque) Return the first CommonCautionProvisoire filtered by the id_banque column
 * @method CommonCautionProvisoire findOneByIdBlobPj(int $id_blob_pj) Return the first CommonCautionProvisoire filtered by the id_blob_pj column
 *
 * @method array findById(int $id) Return CommonCautionProvisoire objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonCautionProvisoire objects filtered by the organisme column
 * @method array findByConsultationRef(int $consultation_ref) Return CommonCautionProvisoire objects filtered by the consultation_ref column
 * @method array findByCautionRef(string $caution_ref) Return CommonCautionProvisoire objects filtered by the caution_ref column
 * @method array findByLot(int $lot) Return CommonCautionProvisoire objects filtered by the lot column
 * @method array findByMontant(double $montant) Return CommonCautionProvisoire objects filtered by the montant column
 * @method array findByMontantDevise(double $montant_devise) Return CommonCautionProvisoire objects filtered by the montant_devise column
 * @method array findByDevise(string $devise) Return CommonCautionProvisoire objects filtered by the devise column
 * @method array findByEntreprise(string $entreprise) Return CommonCautionProvisoire objects filtered by the entreprise column
 * @method array findByIdBanque(int $id_banque) Return CommonCautionProvisoire objects filtered by the id_banque column
 * @method array findByIdBlobPj(int $id_blob_pj) Return CommonCautionProvisoire objects filtered by the id_blob_pj column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonCautionProvisoireQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonCautionProvisoireQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonCautionProvisoire', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonCautionProvisoireQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonCautionProvisoireQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonCautionProvisoireQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonCautionProvisoireQuery) {
            return $criteria;
        }
        $query = new CommonCautionProvisoireQuery();
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
     * @return   CommonCautionProvisoire|CommonCautionProvisoire[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonCautionProvisoirePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonCautionProvisoirePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonCautionProvisoire A model object, or null if the key is not found
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
     * @return                 CommonCautionProvisoire A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `consultation_ref`, `caution_ref`, `lot`, `montant`, `montant_devise`, `devise`, `entreprise`, `id_banque`, `id_blob_pj` FROM `caution_provisoire` WHERE `id` = :p0';
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
            $obj = new CommonCautionProvisoire();
            $obj->hydrate($row);
            CommonCautionProvisoirePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonCautionProvisoire|CommonCautionProvisoire[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonCautionProvisoire[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonCautionProvisoireQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonCautionProvisoirePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonCautionProvisoireQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonCautionProvisoirePeer::ID, $keys, Criteria::IN);
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
     * @return CommonCautionProvisoireQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonCautionProvisoirePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonCautionProvisoirePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionProvisoirePeer::ID, $id, $comparison);
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
     * @return CommonCautionProvisoireQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonCautionProvisoirePeer::ORGANISME, $organisme, $comparison);
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
     * @return CommonCautionProvisoireQuery The current query, for fluid interface
     */
    public function filterByConsultationRef($consultationRef = null, $comparison = null)
    {
        if (is_array($consultationRef)) {
            $useMinMax = false;
            if (isset($consultationRef['min'])) {
                $this->addUsingAlias(CommonCautionProvisoirePeer::CONSULTATION_REF, $consultationRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($consultationRef['max'])) {
                $this->addUsingAlias(CommonCautionProvisoirePeer::CONSULTATION_REF, $consultationRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionProvisoirePeer::CONSULTATION_REF, $consultationRef, $comparison);
    }

    /**
     * Filter the query on the caution_ref column
     *
     * Example usage:
     * <code>
     * $query->filterByCautionRef('fooValue');   // WHERE caution_ref = 'fooValue'
     * $query->filterByCautionRef('%fooValue%'); // WHERE caution_ref LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cautionRef The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionProvisoireQuery The current query, for fluid interface
     */
    public function filterByCautionRef($cautionRef = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cautionRef)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cautionRef)) {
                $cautionRef = str_replace('*', '%', $cautionRef);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCautionProvisoirePeer::CAUTION_REF, $cautionRef, $comparison);
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
     * @return CommonCautionProvisoireQuery The current query, for fluid interface
     */
    public function filterByLot($lot = null, $comparison = null)
    {
        if (is_array($lot)) {
            $useMinMax = false;
            if (isset($lot['min'])) {
                $this->addUsingAlias(CommonCautionProvisoirePeer::LOT, $lot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lot['max'])) {
                $this->addUsingAlias(CommonCautionProvisoirePeer::LOT, $lot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionProvisoirePeer::LOT, $lot, $comparison);
    }

    /**
     * Filter the query on the montant column
     *
     * Example usage:
     * <code>
     * $query->filterByMontant(1234); // WHERE montant = 1234
     * $query->filterByMontant(array(12, 34)); // WHERE montant IN (12, 34)
     * $query->filterByMontant(array('min' => 12)); // WHERE montant >= 12
     * $query->filterByMontant(array('max' => 12)); // WHERE montant <= 12
     * </code>
     *
     * @param     mixed $montant The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionProvisoireQuery The current query, for fluid interface
     */
    public function filterByMontant($montant = null, $comparison = null)
    {
        if (is_array($montant)) {
            $useMinMax = false;
            if (isset($montant['min'])) {
                $this->addUsingAlias(CommonCautionProvisoirePeer::MONTANT, $montant['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montant['max'])) {
                $this->addUsingAlias(CommonCautionProvisoirePeer::MONTANT, $montant['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionProvisoirePeer::MONTANT, $montant, $comparison);
    }

    /**
     * Filter the query on the montant_devise column
     *
     * Example usage:
     * <code>
     * $query->filterByMontantDevise(1234); // WHERE montant_devise = 1234
     * $query->filterByMontantDevise(array(12, 34)); // WHERE montant_devise IN (12, 34)
     * $query->filterByMontantDevise(array('min' => 12)); // WHERE montant_devise >= 12
     * $query->filterByMontantDevise(array('max' => 12)); // WHERE montant_devise <= 12
     * </code>
     *
     * @param     mixed $montantDevise The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionProvisoireQuery The current query, for fluid interface
     */
    public function filterByMontantDevise($montantDevise = null, $comparison = null)
    {
        if (is_array($montantDevise)) {
            $useMinMax = false;
            if (isset($montantDevise['min'])) {
                $this->addUsingAlias(CommonCautionProvisoirePeer::MONTANT_DEVISE, $montantDevise['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($montantDevise['max'])) {
                $this->addUsingAlias(CommonCautionProvisoirePeer::MONTANT_DEVISE, $montantDevise['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionProvisoirePeer::MONTANT_DEVISE, $montantDevise, $comparison);
    }

    /**
     * Filter the query on the devise column
     *
     * Example usage:
     * <code>
     * $query->filterByDevise('fooValue');   // WHERE devise = 'fooValue'
     * $query->filterByDevise('%fooValue%'); // WHERE devise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $devise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionProvisoireQuery The current query, for fluid interface
     */
    public function filterByDevise($devise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($devise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $devise)) {
                $devise = str_replace('*', '%', $devise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCautionProvisoirePeer::DEVISE, $devise, $comparison);
    }

    /**
     * Filter the query on the entreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByEntreprise('fooValue');   // WHERE entreprise = 'fooValue'
     * $query->filterByEntreprise('%fooValue%'); // WHERE entreprise LIKE '%fooValue%'
     * </code>
     *
     * @param     string $entreprise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionProvisoireQuery The current query, for fluid interface
     */
    public function filterByEntreprise($entreprise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($entreprise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $entreprise)) {
                $entreprise = str_replace('*', '%', $entreprise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCautionProvisoirePeer::ENTREPRISE, $entreprise, $comparison);
    }

    /**
     * Filter the query on the id_banque column
     *
     * Example usage:
     * <code>
     * $query->filterByIdBanque(1234); // WHERE id_banque = 1234
     * $query->filterByIdBanque(array(12, 34)); // WHERE id_banque IN (12, 34)
     * $query->filterByIdBanque(array('min' => 12)); // WHERE id_banque >= 12
     * $query->filterByIdBanque(array('max' => 12)); // WHERE id_banque <= 12
     * </code>
     *
     * @param     mixed $idBanque The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionProvisoireQuery The current query, for fluid interface
     */
    public function filterByIdBanque($idBanque = null, $comparison = null)
    {
        if (is_array($idBanque)) {
            $useMinMax = false;
            if (isset($idBanque['min'])) {
                $this->addUsingAlias(CommonCautionProvisoirePeer::ID_BANQUE, $idBanque['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBanque['max'])) {
                $this->addUsingAlias(CommonCautionProvisoirePeer::ID_BANQUE, $idBanque['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionProvisoirePeer::ID_BANQUE, $idBanque, $comparison);
    }

    /**
     * Filter the query on the id_blob_pj column
     *
     * Example usage:
     * <code>
     * $query->filterByIdBlobPj(1234); // WHERE id_blob_pj = 1234
     * $query->filterByIdBlobPj(array(12, 34)); // WHERE id_blob_pj IN (12, 34)
     * $query->filterByIdBlobPj(array('min' => 12)); // WHERE id_blob_pj >= 12
     * $query->filterByIdBlobPj(array('max' => 12)); // WHERE id_blob_pj <= 12
     * </code>
     *
     * @param     mixed $idBlobPj The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCautionProvisoireQuery The current query, for fluid interface
     */
    public function filterByIdBlobPj($idBlobPj = null, $comparison = null)
    {
        if (is_array($idBlobPj)) {
            $useMinMax = false;
            if (isset($idBlobPj['min'])) {
                $this->addUsingAlias(CommonCautionProvisoirePeer::ID_BLOB_PJ, $idBlobPj['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idBlobPj['max'])) {
                $this->addUsingAlias(CommonCautionProvisoirePeer::ID_BLOB_PJ, $idBlobPj['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCautionProvisoirePeer::ID_BLOB_PJ, $idBlobPj, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonCautionProvisoire $commonCautionProvisoire Object to remove from the list of results
     *
     * @return CommonCautionProvisoireQuery The current query, for fluid interface
     */
    public function prune($commonCautionProvisoire = null)
    {
        if ($commonCautionProvisoire) {
            $this->addUsingAlias(CommonCautionProvisoirePeer::ID, $commonCautionProvisoire->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
