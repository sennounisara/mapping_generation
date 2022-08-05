<?php


/**
 * Base class that represents a query for the 'CertificatChiffrement' table.
 *
 * 
 *
 * @method CommonCertificatChiffrementQuery orderByConsultationRef($order = Criteria::ASC) Order by the consultation_ref column
 * @method CommonCertificatChiffrementQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonCertificatChiffrementQuery orderByTypeEnv($order = Criteria::ASC) Order by the type_env column
 * @method CommonCertificatChiffrementQuery orderBySousPli($order = Criteria::ASC) Order by the sous_pli column
 * @method CommonCertificatChiffrementQuery orderByIndexCertificat($order = Criteria::ASC) Order by the index_certificat column
 * @method CommonCertificatChiffrementQuery orderByCertificat($order = Criteria::ASC) Order by the certificat column
 * @method CommonCertificatChiffrementQuery orderByVisible($order = Criteria::ASC) Order by the visible column
 *
 * @method CommonCertificatChiffrementQuery groupByConsultationRef() Group by the consultation_ref column
 * @method CommonCertificatChiffrementQuery groupByOrganisme() Group by the organisme column
 * @method CommonCertificatChiffrementQuery groupByTypeEnv() Group by the type_env column
 * @method CommonCertificatChiffrementQuery groupBySousPli() Group by the sous_pli column
 * @method CommonCertificatChiffrementQuery groupByIndexCertificat() Group by the index_certificat column
 * @method CommonCertificatChiffrementQuery groupByCertificat() Group by the certificat column
 * @method CommonCertificatChiffrementQuery groupByVisible() Group by the visible column
 *
 * @method CommonCertificatChiffrementQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonCertificatChiffrementQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonCertificatChiffrementQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonCertificatChiffrement findOne(PropelPDO $con = null) Return the first CommonCertificatChiffrement matching the query
 * @method CommonCertificatChiffrement findOneOrCreate(PropelPDO $con = null) Return the first CommonCertificatChiffrement matching the query, or a new CommonCertificatChiffrement object populated from the query conditions when no match is found
 *
 * @method CommonCertificatChiffrement findOneByConsultationRef(int $consultation_ref) Return the first CommonCertificatChiffrement filtered by the consultation_ref column
 * @method CommonCertificatChiffrement findOneByOrganisme(string $organisme) Return the first CommonCertificatChiffrement filtered by the organisme column
 * @method CommonCertificatChiffrement findOneByTypeEnv(int $type_env) Return the first CommonCertificatChiffrement filtered by the type_env column
 * @method CommonCertificatChiffrement findOneBySousPli(int $sous_pli) Return the first CommonCertificatChiffrement filtered by the sous_pli column
 * @method CommonCertificatChiffrement findOneByIndexCertificat(int $index_certificat) Return the first CommonCertificatChiffrement filtered by the index_certificat column
 * @method CommonCertificatChiffrement findOneByCertificat(string $certificat) Return the first CommonCertificatChiffrement filtered by the certificat column
 * @method CommonCertificatChiffrement findOneByVisible(string $visible) Return the first CommonCertificatChiffrement filtered by the visible column
 *
 * @method array findByConsultationRef(int $consultation_ref) Return CommonCertificatChiffrement objects filtered by the consultation_ref column
 * @method array findByOrganisme(string $organisme) Return CommonCertificatChiffrement objects filtered by the organisme column
 * @method array findByTypeEnv(int $type_env) Return CommonCertificatChiffrement objects filtered by the type_env column
 * @method array findBySousPli(int $sous_pli) Return CommonCertificatChiffrement objects filtered by the sous_pli column
 * @method array findByIndexCertificat(int $index_certificat) Return CommonCertificatChiffrement objects filtered by the index_certificat column
 * @method array findByCertificat(string $certificat) Return CommonCertificatChiffrement objects filtered by the certificat column
 * @method array findByVisible(string $visible) Return CommonCertificatChiffrement objects filtered by the visible column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonCertificatChiffrementQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonCertificatChiffrementQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonCertificatChiffrement', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonCertificatChiffrementQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonCertificatChiffrementQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonCertificatChiffrementQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonCertificatChiffrementQuery) {
            return $criteria;
        }
        $query = new CommonCertificatChiffrementQuery();
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
     * $obj = $c->findPk(array(12, 34, 56, 78, 91), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query 
                         A Primary key composition: [$consultation_ref, $organisme, $type_env, $sous_pli, $index_certificat]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonCertificatChiffrement|CommonCertificatChiffrement[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonCertificatChiffrementPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3], (string) $key[4]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonCertificatChiffrementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonCertificatChiffrement A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `consultation_ref`, `organisme`, `type_env`, `sous_pli`, `index_certificat`, `certificat`, `visible` FROM `CertificatChiffrement` WHERE `consultation_ref` = :p0 AND `organisme` = :p1 AND `type_env` = :p2 AND `sous_pli` = :p3 AND `index_certificat` = :p4';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);			
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);			
            $stmt->bindValue(':p3', $key[3], PDO::PARAM_INT);			
            $stmt->bindValue(':p4', $key[4], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonCertificatChiffrement();
            $obj->hydrate($row);
            CommonCertificatChiffrementPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3], (string) $key[4])));
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
     * @return CommonCertificatChiffrement|CommonCertificatChiffrement[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonCertificatChiffrement[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonCertificatChiffrementQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonCertificatChiffrementPeer::CONSULTATION_REF, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonCertificatChiffrementPeer::ORGANISME, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(CommonCertificatChiffrementPeer::TYPE_ENV, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(CommonCertificatChiffrementPeer::SOUS_PLI, $key[3], Criteria::EQUAL);
        $this->addUsingAlias(CommonCertificatChiffrementPeer::INDEX_CERTIFICAT, $key[4], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonCertificatChiffrementQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonCertificatChiffrementPeer::CONSULTATION_REF, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonCertificatChiffrementPeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(CommonCertificatChiffrementPeer::TYPE_ENV, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(CommonCertificatChiffrementPeer::SOUS_PLI, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $cton4 = $this->getNewCriterion(CommonCertificatChiffrementPeer::INDEX_CERTIFICAT, $key[4], Criteria::EQUAL);
            $cton0->addAnd($cton4);
            $this->addOr($cton0);
        }

        return $this;
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
     * @return CommonCertificatChiffrementQuery The current query, for fluid interface
     */
    public function filterByConsultationRef($consultationRef = null, $comparison = null)
    {
        if (is_array($consultationRef)) {
            $useMinMax = false;
            if (isset($consultationRef['min'])) {
                $this->addUsingAlias(CommonCertificatChiffrementPeer::CONSULTATION_REF, $consultationRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($consultationRef['max'])) {
                $this->addUsingAlias(CommonCertificatChiffrementPeer::CONSULTATION_REF, $consultationRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCertificatChiffrementPeer::CONSULTATION_REF, $consultationRef, $comparison);
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
     * @return CommonCertificatChiffrementQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonCertificatChiffrementPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the type_env column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeEnv(1234); // WHERE type_env = 1234
     * $query->filterByTypeEnv(array(12, 34)); // WHERE type_env IN (12, 34)
     * $query->filterByTypeEnv(array('min' => 12)); // WHERE type_env >= 12
     * $query->filterByTypeEnv(array('max' => 12)); // WHERE type_env <= 12
     * </code>
     *
     * @param     mixed $typeEnv The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCertificatChiffrementQuery The current query, for fluid interface
     */
    public function filterByTypeEnv($typeEnv = null, $comparison = null)
    {
        if (is_array($typeEnv)) {
            $useMinMax = false;
            if (isset($typeEnv['min'])) {
                $this->addUsingAlias(CommonCertificatChiffrementPeer::TYPE_ENV, $typeEnv['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeEnv['max'])) {
                $this->addUsingAlias(CommonCertificatChiffrementPeer::TYPE_ENV, $typeEnv['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCertificatChiffrementPeer::TYPE_ENV, $typeEnv, $comparison);
    }

    /**
     * Filter the query on the sous_pli column
     *
     * Example usage:
     * <code>
     * $query->filterBySousPli(1234); // WHERE sous_pli = 1234
     * $query->filterBySousPli(array(12, 34)); // WHERE sous_pli IN (12, 34)
     * $query->filterBySousPli(array('min' => 12)); // WHERE sous_pli >= 12
     * $query->filterBySousPli(array('max' => 12)); // WHERE sous_pli <= 12
     * </code>
     *
     * @param     mixed $sousPli The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCertificatChiffrementQuery The current query, for fluid interface
     */
    public function filterBySousPli($sousPli = null, $comparison = null)
    {
        if (is_array($sousPli)) {
            $useMinMax = false;
            if (isset($sousPli['min'])) {
                $this->addUsingAlias(CommonCertificatChiffrementPeer::SOUS_PLI, $sousPli['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sousPli['max'])) {
                $this->addUsingAlias(CommonCertificatChiffrementPeer::SOUS_PLI, $sousPli['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCertificatChiffrementPeer::SOUS_PLI, $sousPli, $comparison);
    }

    /**
     * Filter the query on the index_certificat column
     *
     * Example usage:
     * <code>
     * $query->filterByIndexCertificat(1234); // WHERE index_certificat = 1234
     * $query->filterByIndexCertificat(array(12, 34)); // WHERE index_certificat IN (12, 34)
     * $query->filterByIndexCertificat(array('min' => 12)); // WHERE index_certificat >= 12
     * $query->filterByIndexCertificat(array('max' => 12)); // WHERE index_certificat <= 12
     * </code>
     *
     * @param     mixed $indexCertificat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCertificatChiffrementQuery The current query, for fluid interface
     */
    public function filterByIndexCertificat($indexCertificat = null, $comparison = null)
    {
        if (is_array($indexCertificat)) {
            $useMinMax = false;
            if (isset($indexCertificat['min'])) {
                $this->addUsingAlias(CommonCertificatChiffrementPeer::INDEX_CERTIFICAT, $indexCertificat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($indexCertificat['max'])) {
                $this->addUsingAlias(CommonCertificatChiffrementPeer::INDEX_CERTIFICAT, $indexCertificat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCertificatChiffrementPeer::INDEX_CERTIFICAT, $indexCertificat, $comparison);
    }

    /**
     * Filter the query on the certificat column
     *
     * Example usage:
     * <code>
     * $query->filterByCertificat('fooValue');   // WHERE certificat = 'fooValue'
     * $query->filterByCertificat('%fooValue%'); // WHERE certificat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $certificat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCertificatChiffrementQuery The current query, for fluid interface
     */
    public function filterByCertificat($certificat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($certificat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $certificat)) {
                $certificat = str_replace('*', '%', $certificat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCertificatChiffrementPeer::CERTIFICAT, $certificat, $comparison);
    }

    /**
     * Filter the query on the visible column
     *
     * Example usage:
     * <code>
     * $query->filterByVisible('fooValue');   // WHERE visible = 'fooValue'
     * $query->filterByVisible('%fooValue%'); // WHERE visible LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visible The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCertificatChiffrementQuery The current query, for fluid interface
     */
    public function filterByVisible($visible = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visible)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visible)) {
                $visible = str_replace('*', '%', $visible);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCertificatChiffrementPeer::VISIBLE, $visible, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonCertificatChiffrement $commonCertificatChiffrement Object to remove from the list of results
     *
     * @return CommonCertificatChiffrementQuery The current query, for fluid interface
     */
    public function prune($commonCertificatChiffrement = null)
    {
        if ($commonCertificatChiffrement) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonCertificatChiffrementPeer::CONSULTATION_REF), $commonCertificatChiffrement->getConsultationRef(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonCertificatChiffrementPeer::ORGANISME), $commonCertificatChiffrement->getOrganisme(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(CommonCertificatChiffrementPeer::TYPE_ENV), $commonCertificatChiffrement->getTypeEnv(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(CommonCertificatChiffrementPeer::SOUS_PLI), $commonCertificatChiffrement->getSousPli(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond4', $this->getAliasedColName(CommonCertificatChiffrementPeer::INDEX_CERTIFICAT), $commonCertificatChiffrement->getIndexCertificat(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3', 'pruneCond4'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
