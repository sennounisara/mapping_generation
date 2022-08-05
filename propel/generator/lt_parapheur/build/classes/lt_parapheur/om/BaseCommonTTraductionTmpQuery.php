<?php


/**
 * Base class that represents a query for the 'T_Traduction_Tmp' table.
 *
 * 
 *
 * @method CommonTTraductionTmpQuery orderByLangue($order = Criteria::ASC) Order by the langue column
 * @method CommonTTraductionTmpQuery orderByIdLibelle($order = Criteria::ASC) Order by the id_libelle column
 * @method CommonTTraductionTmpQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method CommonTTraductionTmpQuery orderByChamp($order = Criteria::ASC) Order by the champ column
 * @method CommonTTraductionTmpQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonTTraductionTmpQuery orderByReference($order = Criteria::ASC) Order by the reference column
 * @method CommonTTraductionTmpQuery orderByLot($order = Criteria::ASC) Order by the lot column
 * @method CommonTTraductionTmpQuery orderByIdDonneeComplementaire($order = Criteria::ASC) Order by the id_donnee_complementaire column
 *
 * @method CommonTTraductionTmpQuery groupByLangue() Group by the langue column
 * @method CommonTTraductionTmpQuery groupByIdLibelle() Group by the id_libelle column
 * @method CommonTTraductionTmpQuery groupByLibelle() Group by the libelle column
 * @method CommonTTraductionTmpQuery groupByChamp() Group by the champ column
 * @method CommonTTraductionTmpQuery groupByOrganisme() Group by the organisme column
 * @method CommonTTraductionTmpQuery groupByReference() Group by the reference column
 * @method CommonTTraductionTmpQuery groupByLot() Group by the lot column
 * @method CommonTTraductionTmpQuery groupByIdDonneeComplementaire() Group by the id_donnee_complementaire column
 *
 * @method CommonTTraductionTmpQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTTraductionTmpQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTTraductionTmpQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTTraductionTmp findOne(PropelPDO $con = null) Return the first CommonTTraductionTmp matching the query
 * @method CommonTTraductionTmp findOneOrCreate(PropelPDO $con = null) Return the first CommonTTraductionTmp matching the query, or a new CommonTTraductionTmp object populated from the query conditions when no match is found
 *
 * @method CommonTTraductionTmp findOneByLangue(string $langue) Return the first CommonTTraductionTmp filtered by the langue column
 * @method CommonTTraductionTmp findOneByIdLibelle(int $id_libelle) Return the first CommonTTraductionTmp filtered by the id_libelle column
 * @method CommonTTraductionTmp findOneByLibelle(string $libelle) Return the first CommonTTraductionTmp filtered by the libelle column
 * @method CommonTTraductionTmp findOneByChamp(string $champ) Return the first CommonTTraductionTmp filtered by the champ column
 * @method CommonTTraductionTmp findOneByOrganisme(string $organisme) Return the first CommonTTraductionTmp filtered by the organisme column
 * @method CommonTTraductionTmp findOneByReference(int $reference) Return the first CommonTTraductionTmp filtered by the reference column
 * @method CommonTTraductionTmp findOneByLot(int $lot) Return the first CommonTTraductionTmp filtered by the lot column
 * @method CommonTTraductionTmp findOneByIdDonneeComplementaire(int $id_donnee_complementaire) Return the first CommonTTraductionTmp filtered by the id_donnee_complementaire column
 *
 * @method array findByLangue(string $langue) Return CommonTTraductionTmp objects filtered by the langue column
 * @method array findByIdLibelle(int $id_libelle) Return CommonTTraductionTmp objects filtered by the id_libelle column
 * @method array findByLibelle(string $libelle) Return CommonTTraductionTmp objects filtered by the libelle column
 * @method array findByChamp(string $champ) Return CommonTTraductionTmp objects filtered by the champ column
 * @method array findByOrganisme(string $organisme) Return CommonTTraductionTmp objects filtered by the organisme column
 * @method array findByReference(int $reference) Return CommonTTraductionTmp objects filtered by the reference column
 * @method array findByLot(int $lot) Return CommonTTraductionTmp objects filtered by the lot column
 * @method array findByIdDonneeComplementaire(int $id_donnee_complementaire) Return CommonTTraductionTmp objects filtered by the id_donnee_complementaire column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTTraductionTmpQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTTraductionTmpQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTTraductionTmp', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTTraductionTmpQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTTraductionTmpQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTTraductionTmpQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTTraductionTmpQuery) {
            return $criteria;
        }
        $query = new CommonTTraductionTmpQuery();
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
                         A Primary key composition: [$langue, $id_libelle]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonTTraductionTmp|CommonTTraductionTmp[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTTraductionTmpPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTTraductionTmpPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTTraductionTmp A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `langue`, `id_libelle`, `libelle`, `champ`, `organisme`, `reference`, `lot`, `id_donnee_complementaire` FROM `T_Traduction_Tmp` WHERE `langue` = :p0 AND `id_libelle` = :p1';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonTTraductionTmp();
            $obj->hydrate($row);
            CommonTTraductionTmpPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonTTraductionTmp|CommonTTraductionTmp[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTTraductionTmp[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTTraductionTmpQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonTTraductionTmpPeer::LANGUE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonTTraductionTmpPeer::ID_LIBELLE, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTTraductionTmpQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonTTraductionTmpPeer::LANGUE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonTTraductionTmpPeer::ID_LIBELLE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the langue column
     *
     * Example usage:
     * <code>
     * $query->filterByLangue('fooValue');   // WHERE langue = 'fooValue'
     * $query->filterByLangue('%fooValue%'); // WHERE langue LIKE '%fooValue%'
     * </code>
     *
     * @param     string $langue The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTTraductionTmpQuery The current query, for fluid interface
     */
    public function filterByLangue($langue = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($langue)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $langue)) {
                $langue = str_replace('*', '%', $langue);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTTraductionTmpPeer::LANGUE, $langue, $comparison);
    }

    /**
     * Filter the query on the id_libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByIdLibelle(1234); // WHERE id_libelle = 1234
     * $query->filterByIdLibelle(array(12, 34)); // WHERE id_libelle IN (12, 34)
     * $query->filterByIdLibelle(array('min' => 12)); // WHERE id_libelle >= 12
     * $query->filterByIdLibelle(array('max' => 12)); // WHERE id_libelle <= 12
     * </code>
     *
     * @param     mixed $idLibelle The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTTraductionTmpQuery The current query, for fluid interface
     */
    public function filterByIdLibelle($idLibelle = null, $comparison = null)
    {
        if (is_array($idLibelle)) {
            $useMinMax = false;
            if (isset($idLibelle['min'])) {
                $this->addUsingAlias(CommonTTraductionTmpPeer::ID_LIBELLE, $idLibelle['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idLibelle['max'])) {
                $this->addUsingAlias(CommonTTraductionTmpPeer::ID_LIBELLE, $idLibelle['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTTraductionTmpPeer::ID_LIBELLE, $idLibelle, $comparison);
    }

    /**
     * Filter the query on the libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelle('fooValue');   // WHERE libelle = 'fooValue'
     * $query->filterByLibelle('%fooValue%'); // WHERE libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTTraductionTmpQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTTraductionTmpPeer::LIBELLE, $libelle, $comparison);
    }

    /**
     * Filter the query on the champ column
     *
     * Example usage:
     * <code>
     * $query->filterByChamp('fooValue');   // WHERE champ = 'fooValue'
     * $query->filterByChamp('%fooValue%'); // WHERE champ LIKE '%fooValue%'
     * </code>
     *
     * @param     string $champ The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTTraductionTmpQuery The current query, for fluid interface
     */
    public function filterByChamp($champ = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($champ)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $champ)) {
                $champ = str_replace('*', '%', $champ);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTTraductionTmpPeer::CHAMP, $champ, $comparison);
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
     * @return CommonTTraductionTmpQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTTraductionTmpPeer::ORGANISME, $organisme, $comparison);
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
     * @param     mixed $reference The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTTraductionTmpQuery The current query, for fluid interface
     */
    public function filterByReference($reference = null, $comparison = null)
    {
        if (is_array($reference)) {
            $useMinMax = false;
            if (isset($reference['min'])) {
                $this->addUsingAlias(CommonTTraductionTmpPeer::REFERENCE, $reference['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($reference['max'])) {
                $this->addUsingAlias(CommonTTraductionTmpPeer::REFERENCE, $reference['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTTraductionTmpPeer::REFERENCE, $reference, $comparison);
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
     * @return CommonTTraductionTmpQuery The current query, for fluid interface
     */
    public function filterByLot($lot = null, $comparison = null)
    {
        if (is_array($lot)) {
            $useMinMax = false;
            if (isset($lot['min'])) {
                $this->addUsingAlias(CommonTTraductionTmpPeer::LOT, $lot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lot['max'])) {
                $this->addUsingAlias(CommonTTraductionTmpPeer::LOT, $lot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTTraductionTmpPeer::LOT, $lot, $comparison);
    }

    /**
     * Filter the query on the id_donnee_complementaire column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDonneeComplementaire(1234); // WHERE id_donnee_complementaire = 1234
     * $query->filterByIdDonneeComplementaire(array(12, 34)); // WHERE id_donnee_complementaire IN (12, 34)
     * $query->filterByIdDonneeComplementaire(array('min' => 12)); // WHERE id_donnee_complementaire >= 12
     * $query->filterByIdDonneeComplementaire(array('max' => 12)); // WHERE id_donnee_complementaire <= 12
     * </code>
     *
     * @param     mixed $idDonneeComplementaire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTTraductionTmpQuery The current query, for fluid interface
     */
    public function filterByIdDonneeComplementaire($idDonneeComplementaire = null, $comparison = null)
    {
        if (is_array($idDonneeComplementaire)) {
            $useMinMax = false;
            if (isset($idDonneeComplementaire['min'])) {
                $this->addUsingAlias(CommonTTraductionTmpPeer::ID_DONNEE_COMPLEMENTAIRE, $idDonneeComplementaire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDonneeComplementaire['max'])) {
                $this->addUsingAlias(CommonTTraductionTmpPeer::ID_DONNEE_COMPLEMENTAIRE, $idDonneeComplementaire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTTraductionTmpPeer::ID_DONNEE_COMPLEMENTAIRE, $idDonneeComplementaire, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTTraductionTmp $commonTTraductionTmp Object to remove from the list of results
     *
     * @return CommonTTraductionTmpQuery The current query, for fluid interface
     */
    public function prune($commonTTraductionTmp = null)
    {
        if ($commonTTraductionTmp) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonTTraductionTmpPeer::LANGUE), $commonTTraductionTmp->getLangue(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonTTraductionTmpPeer::ID_LIBELLE), $commonTTraductionTmp->getIdLibelle(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
