<?php


/**
 * Base class that represents a query for the 'visite_lieux' table.
 *
 * 
 *
 * @method CommonVisiteLieuxQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonVisiteLieuxQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonVisiteLieuxQuery orderByReference($order = Criteria::ASC) Order by the reference column
 * @method CommonVisiteLieuxQuery orderByAdresse($order = Criteria::ASC) Order by the adresse column
 * @method CommonVisiteLieuxQuery orderByIdTrAdresse($order = Criteria::ASC) Order by the id_tr_adresse column
 * @method CommonVisiteLieuxQuery orderByDate($order = Criteria::ASC) Order by the date column
 * @method CommonVisiteLieuxQuery orderByLot($order = Criteria::ASC) Order by the lot column
 * @method CommonVisiteLieuxQuery orderByAdresseFr($order = Criteria::ASC) Order by the adresse_fr column
 * @method CommonVisiteLieuxQuery orderByAdresseEn($order = Criteria::ASC) Order by the adresse_en column
 * @method CommonVisiteLieuxQuery orderByAdresseEs($order = Criteria::ASC) Order by the adresse_es column
 * @method CommonVisiteLieuxQuery orderByAdresseSu($order = Criteria::ASC) Order by the adresse_su column
 * @method CommonVisiteLieuxQuery orderByAdresseDu($order = Criteria::ASC) Order by the adresse_du column
 * @method CommonVisiteLieuxQuery orderByAdresseCz($order = Criteria::ASC) Order by the adresse_cz column
 * @method CommonVisiteLieuxQuery orderByAdresseAr($order = Criteria::ASC) Order by the adresse_ar column
 * @method CommonVisiteLieuxQuery orderByAdresseIt($order = Criteria::ASC) Order by the adresse_it column
 *
 * @method CommonVisiteLieuxQuery groupById() Group by the id column
 * @method CommonVisiteLieuxQuery groupByOrganisme() Group by the organisme column
 * @method CommonVisiteLieuxQuery groupByReference() Group by the reference column
 * @method CommonVisiteLieuxQuery groupByAdresse() Group by the adresse column
 * @method CommonVisiteLieuxQuery groupByIdTrAdresse() Group by the id_tr_adresse column
 * @method CommonVisiteLieuxQuery groupByDate() Group by the date column
 * @method CommonVisiteLieuxQuery groupByLot() Group by the lot column
 * @method CommonVisiteLieuxQuery groupByAdresseFr() Group by the adresse_fr column
 * @method CommonVisiteLieuxQuery groupByAdresseEn() Group by the adresse_en column
 * @method CommonVisiteLieuxQuery groupByAdresseEs() Group by the adresse_es column
 * @method CommonVisiteLieuxQuery groupByAdresseSu() Group by the adresse_su column
 * @method CommonVisiteLieuxQuery groupByAdresseDu() Group by the adresse_du column
 * @method CommonVisiteLieuxQuery groupByAdresseCz() Group by the adresse_cz column
 * @method CommonVisiteLieuxQuery groupByAdresseAr() Group by the adresse_ar column
 * @method CommonVisiteLieuxQuery groupByAdresseIt() Group by the adresse_it column
 *
 * @method CommonVisiteLieuxQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonVisiteLieuxQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonVisiteLieuxQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonVisiteLieuxQuery leftJoinCommonConsultation($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonConsultation relation
 * @method CommonVisiteLieuxQuery rightJoinCommonConsultation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonConsultation relation
 * @method CommonVisiteLieuxQuery innerJoinCommonConsultation($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonConsultation relation
 *
 * @method CommonVisiteLieux findOne(PropelPDO $con = null) Return the first CommonVisiteLieux matching the query
 * @method CommonVisiteLieux findOneOrCreate(PropelPDO $con = null) Return the first CommonVisiteLieux matching the query, or a new CommonVisiteLieux object populated from the query conditions when no match is found
 *
 * @method CommonVisiteLieux findOneById(int $id) Return the first CommonVisiteLieux filtered by the id column
 * @method CommonVisiteLieux findOneByOrganisme(string $organisme) Return the first CommonVisiteLieux filtered by the organisme column
 * @method CommonVisiteLieux findOneByReference(int $reference) Return the first CommonVisiteLieux filtered by the reference column
 * @method CommonVisiteLieux findOneByAdresse(string $adresse) Return the first CommonVisiteLieux filtered by the adresse column
 * @method CommonVisiteLieux findOneByIdTrAdresse(int $id_tr_adresse) Return the first CommonVisiteLieux filtered by the id_tr_adresse column
 * @method CommonVisiteLieux findOneByDate(string $date) Return the first CommonVisiteLieux filtered by the date column
 * @method CommonVisiteLieux findOneByLot(string $lot) Return the first CommonVisiteLieux filtered by the lot column
 * @method CommonVisiteLieux findOneByAdresseFr(string $adresse_fr) Return the first CommonVisiteLieux filtered by the adresse_fr column
 * @method CommonVisiteLieux findOneByAdresseEn(string $adresse_en) Return the first CommonVisiteLieux filtered by the adresse_en column
 * @method CommonVisiteLieux findOneByAdresseEs(string $adresse_es) Return the first CommonVisiteLieux filtered by the adresse_es column
 * @method CommonVisiteLieux findOneByAdresseSu(string $adresse_su) Return the first CommonVisiteLieux filtered by the adresse_su column
 * @method CommonVisiteLieux findOneByAdresseDu(string $adresse_du) Return the first CommonVisiteLieux filtered by the adresse_du column
 * @method CommonVisiteLieux findOneByAdresseCz(string $adresse_cz) Return the first CommonVisiteLieux filtered by the adresse_cz column
 * @method CommonVisiteLieux findOneByAdresseAr(string $adresse_ar) Return the first CommonVisiteLieux filtered by the adresse_ar column
 * @method CommonVisiteLieux findOneByAdresseIt(string $adresse_it) Return the first CommonVisiteLieux filtered by the adresse_it column
 *
 * @method array findById(int $id) Return CommonVisiteLieux objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonVisiteLieux objects filtered by the organisme column
 * @method array findByReference(int $reference) Return CommonVisiteLieux objects filtered by the reference column
 * @method array findByAdresse(string $adresse) Return CommonVisiteLieux objects filtered by the adresse column
 * @method array findByIdTrAdresse(int $id_tr_adresse) Return CommonVisiteLieux objects filtered by the id_tr_adresse column
 * @method array findByDate(string $date) Return CommonVisiteLieux objects filtered by the date column
 * @method array findByLot(string $lot) Return CommonVisiteLieux objects filtered by the lot column
 * @method array findByAdresseFr(string $adresse_fr) Return CommonVisiteLieux objects filtered by the adresse_fr column
 * @method array findByAdresseEn(string $adresse_en) Return CommonVisiteLieux objects filtered by the adresse_en column
 * @method array findByAdresseEs(string $adresse_es) Return CommonVisiteLieux objects filtered by the adresse_es column
 * @method array findByAdresseSu(string $adresse_su) Return CommonVisiteLieux objects filtered by the adresse_su column
 * @method array findByAdresseDu(string $adresse_du) Return CommonVisiteLieux objects filtered by the adresse_du column
 * @method array findByAdresseCz(string $adresse_cz) Return CommonVisiteLieux objects filtered by the adresse_cz column
 * @method array findByAdresseAr(string $adresse_ar) Return CommonVisiteLieux objects filtered by the adresse_ar column
 * @method array findByAdresseIt(string $adresse_it) Return CommonVisiteLieux objects filtered by the adresse_it column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonVisiteLieuxQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonVisiteLieuxQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonVisiteLieux', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonVisiteLieuxQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonVisiteLieuxQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonVisiteLieuxQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonVisiteLieuxQuery) {
            return $criteria;
        }
        $query = new CommonVisiteLieuxQuery();
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
     * @return   CommonVisiteLieux|CommonVisiteLieux[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonVisiteLieuxPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonVisiteLieuxPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonVisiteLieux A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `reference`, `adresse`, `id_tr_adresse`, `date`, `lot`, `adresse_fr`, `adresse_en`, `adresse_es`, `adresse_su`, `adresse_du`, `adresse_cz`, `adresse_ar`, `adresse_it` FROM `visite_lieux` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonVisiteLieux();
            $obj->hydrate($row);
            CommonVisiteLieuxPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonVisiteLieux|CommonVisiteLieux[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonVisiteLieux[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonVisiteLieuxQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonVisiteLieuxPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonVisiteLieuxPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonVisiteLieuxQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonVisiteLieuxPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonVisiteLieuxPeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonVisiteLieuxQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonVisiteLieuxPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonVisiteLieuxPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonVisiteLieuxPeer::ID, $id, $comparison);
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
     * @return CommonVisiteLieuxQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonVisiteLieuxPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the reference column
     *
     * Example usage:
     * <code>
     * $query->filterByReference(1234); // WHERE reference = 1234
     * $query->filterByReference(array(12, 34)); // WHERE reference IN (12, 34)
     * $query->filterByReference(array('min' => 12)); // WHERE reference >= 12
     * $query->filterByReference(array('max' => 12)); // WHERE reference <= 12
     * </code>
     *
     * @see       filterByCommonConsultation()
     *
     * @param     mixed $reference The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonVisiteLieuxQuery The current query, for fluid interface
     */
    public function filterByReference($reference = null, $comparison = null)
    {
        if (is_array($reference)) {
            $useMinMax = false;
            if (isset($reference['min'])) {
                $this->addUsingAlias(CommonVisiteLieuxPeer::REFERENCE, $reference['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reference['max'])) {
                $this->addUsingAlias(CommonVisiteLieuxPeer::REFERENCE, $reference['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonVisiteLieuxPeer::REFERENCE, $reference, $comparison);
    }

    /**
     * Filter the query on the adresse column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresse('fooValue');   // WHERE adresse = 'fooValue'
     * $query->filterByAdresse('%fooValue%'); // WHERE adresse LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonVisiteLieuxQuery The current query, for fluid interface
     */
    public function filterByAdresse($adresse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresse)) {
                $adresse = str_replace('*', '%', $adresse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonVisiteLieuxPeer::ADRESSE, $adresse, $comparison);
    }

    /**
     * Filter the query on the id_tr_adresse column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTrAdresse(1234); // WHERE id_tr_adresse = 1234
     * $query->filterByIdTrAdresse(array(12, 34)); // WHERE id_tr_adresse IN (12, 34)
     * $query->filterByIdTrAdresse(array('min' => 12)); // WHERE id_tr_adresse >= 12
     * $query->filterByIdTrAdresse(array('max' => 12)); // WHERE id_tr_adresse <= 12
     * </code>
     *
     * @param     mixed $idTrAdresse The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonVisiteLieuxQuery The current query, for fluid interface
     */
    public function filterByIdTrAdresse($idTrAdresse = null, $comparison = null)
    {
        if (is_array($idTrAdresse)) {
            $useMinMax = false;
            if (isset($idTrAdresse['min'])) {
                $this->addUsingAlias(CommonVisiteLieuxPeer::ID_TR_ADRESSE, $idTrAdresse['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTrAdresse['max'])) {
                $this->addUsingAlias(CommonVisiteLieuxPeer::ID_TR_ADRESSE, $idTrAdresse['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonVisiteLieuxPeer::ID_TR_ADRESSE, $idTrAdresse, $comparison);
    }

    /**
     * Filter the query on the date column
     *
     * Example usage:
     * <code>
     * $query->filterByDate('fooValue');   // WHERE date = 'fooValue'
     * $query->filterByDate('%fooValue%'); // WHERE date LIKE '%fooValue%'
     * </code>
     *
     * @param     string $date The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonVisiteLieuxQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($date)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $date)) {
                $date = str_replace('*', '%', $date);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonVisiteLieuxPeer::DATE, $date, $comparison);
    }

    /**
     * Filter the query on the lot column
     *
     * Example usage:
     * <code>
     * $query->filterByLot('fooValue');   // WHERE lot = 'fooValue'
     * $query->filterByLot('%fooValue%'); // WHERE lot LIKE '%fooValue%'
     * </code>
     *
     * @param     string $lot The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonVisiteLieuxQuery The current query, for fluid interface
     */
    public function filterByLot($lot = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($lot)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $lot)) {
                $lot = str_replace('*', '%', $lot);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonVisiteLieuxPeer::LOT, $lot, $comparison);
    }

    /**
     * Filter the query on the adresse_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseFr('fooValue');   // WHERE adresse_fr = 'fooValue'
     * $query->filterByAdresseFr('%fooValue%'); // WHERE adresse_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonVisiteLieuxQuery The current query, for fluid interface
     */
    public function filterByAdresseFr($adresseFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseFr)) {
                $adresseFr = str_replace('*', '%', $adresseFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonVisiteLieuxPeer::ADRESSE_FR, $adresseFr, $comparison);
    }

    /**
     * Filter the query on the adresse_en column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseEn('fooValue');   // WHERE adresse_en = 'fooValue'
     * $query->filterByAdresseEn('%fooValue%'); // WHERE adresse_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonVisiteLieuxQuery The current query, for fluid interface
     */
    public function filterByAdresseEn($adresseEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseEn)) {
                $adresseEn = str_replace('*', '%', $adresseEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonVisiteLieuxPeer::ADRESSE_EN, $adresseEn, $comparison);
    }

    /**
     * Filter the query on the adresse_es column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseEs('fooValue');   // WHERE adresse_es = 'fooValue'
     * $query->filterByAdresseEs('%fooValue%'); // WHERE adresse_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseEs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonVisiteLieuxQuery The current query, for fluid interface
     */
    public function filterByAdresseEs($adresseEs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseEs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseEs)) {
                $adresseEs = str_replace('*', '%', $adresseEs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonVisiteLieuxPeer::ADRESSE_ES, $adresseEs, $comparison);
    }

    /**
     * Filter the query on the adresse_su column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseSu('fooValue');   // WHERE adresse_su = 'fooValue'
     * $query->filterByAdresseSu('%fooValue%'); // WHERE adresse_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseSu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonVisiteLieuxQuery The current query, for fluid interface
     */
    public function filterByAdresseSu($adresseSu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseSu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseSu)) {
                $adresseSu = str_replace('*', '%', $adresseSu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonVisiteLieuxPeer::ADRESSE_SU, $adresseSu, $comparison);
    }

    /**
     * Filter the query on the adresse_du column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseDu('fooValue');   // WHERE adresse_du = 'fooValue'
     * $query->filterByAdresseDu('%fooValue%'); // WHERE adresse_du LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseDu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonVisiteLieuxQuery The current query, for fluid interface
     */
    public function filterByAdresseDu($adresseDu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseDu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseDu)) {
                $adresseDu = str_replace('*', '%', $adresseDu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonVisiteLieuxPeer::ADRESSE_DU, $adresseDu, $comparison);
    }

    /**
     * Filter the query on the adresse_cz column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseCz('fooValue');   // WHERE adresse_cz = 'fooValue'
     * $query->filterByAdresseCz('%fooValue%'); // WHERE adresse_cz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseCz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonVisiteLieuxQuery The current query, for fluid interface
     */
    public function filterByAdresseCz($adresseCz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseCz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseCz)) {
                $adresseCz = str_replace('*', '%', $adresseCz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonVisiteLieuxPeer::ADRESSE_CZ, $adresseCz, $comparison);
    }

    /**
     * Filter the query on the adresse_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseAr('fooValue');   // WHERE adresse_ar = 'fooValue'
     * $query->filterByAdresseAr('%fooValue%'); // WHERE adresse_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonVisiteLieuxQuery The current query, for fluid interface
     */
    public function filterByAdresseAr($adresseAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseAr)) {
                $adresseAr = str_replace('*', '%', $adresseAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonVisiteLieuxPeer::ADRESSE_AR, $adresseAr, $comparison);
    }

    /**
     * Filter the query on the adresse_it column
     *
     * Example usage:
     * <code>
     * $query->filterByAdresseIt('fooValue');   // WHERE adresse_it = 'fooValue'
     * $query->filterByAdresseIt('%fooValue%'); // WHERE adresse_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $adresseIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonVisiteLieuxQuery The current query, for fluid interface
     */
    public function filterByAdresseIt($adresseIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($adresseIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $adresseIt)) {
                $adresseIt = str_replace('*', '%', $adresseIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonVisiteLieuxPeer::ADRESSE_IT, $adresseIt, $comparison);
    }

    /**
     * Filter the query by a related CommonConsultation object
     *
     * @param   CommonConsultation $commonConsultation The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonVisiteLieuxQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonConsultation($commonConsultation, $comparison = null)
    {
        if ($commonConsultation instanceof CommonConsultation) {
            return $this
                ->addUsingAlias(CommonVisiteLieuxPeer::ORGANISME, $commonConsultation->getOrganisme(), $comparison)
                ->addUsingAlias(CommonVisiteLieuxPeer::REFERENCE, $commonConsultation->getReference(), $comparison);
        } else {
            throw new PropelException('filterByCommonConsultation() only accepts arguments of type CommonConsultation');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonConsultation relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonVisiteLieuxQuery The current query, for fluid interface
     */
    public function joinCommonConsultation($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonConsultation');

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
            $this->addJoinObject($join, 'CommonConsultation');
        }

        return $this;
    }

    /**
     * Use the CommonConsultation relation CommonConsultation object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonConsultationQuery A secondary query class using the current class as primary query
     */
    public function useCommonConsultationQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonConsultation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonConsultation', 'CommonConsultationQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonVisiteLieux $commonVisiteLieux Object to remove from the list of results
     *
     * @return CommonVisiteLieuxQuery The current query, for fluid interface
     */
    public function prune($commonVisiteLieux = null)
    {
        if ($commonVisiteLieux) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonVisiteLieuxPeer::ID), $commonVisiteLieux->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonVisiteLieuxPeer::ORGANISME), $commonVisiteLieux->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
