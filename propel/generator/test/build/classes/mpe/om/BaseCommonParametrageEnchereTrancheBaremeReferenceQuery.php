<?php


/**
 * Base class that represents a query for the 'Parametrage_Enchere_Tranche_Bareme_Reference' table.
 *
 * 
 *
 * @method CommonParametrageEnchereTrancheBaremeReferenceQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonParametrageEnchereTrancheBaremeReferenceQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonParametrageEnchereTrancheBaremeReferenceQuery orderByIdreference($order = Criteria::ASC) Order by the idReference column
 * @method CommonParametrageEnchereTrancheBaremeReferenceQuery orderByBorneinf($order = Criteria::ASC) Order by the borneInf column
 * @method CommonParametrageEnchereTrancheBaremeReferenceQuery orderByBornesup($order = Criteria::ASC) Order by the borneSup column
 * @method CommonParametrageEnchereTrancheBaremeReferenceQuery orderByNote($order = Criteria::ASC) Order by the note column
 *
 * @method CommonParametrageEnchereTrancheBaremeReferenceQuery groupById() Group by the id column
 * @method CommonParametrageEnchereTrancheBaremeReferenceQuery groupByOrganisme() Group by the organisme column
 * @method CommonParametrageEnchereTrancheBaremeReferenceQuery groupByIdreference() Group by the idReference column
 * @method CommonParametrageEnchereTrancheBaremeReferenceQuery groupByBorneinf() Group by the borneInf column
 * @method CommonParametrageEnchereTrancheBaremeReferenceQuery groupByBornesup() Group by the borneSup column
 * @method CommonParametrageEnchereTrancheBaremeReferenceQuery groupByNote() Group by the note column
 *
 * @method CommonParametrageEnchereTrancheBaremeReferenceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonParametrageEnchereTrancheBaremeReferenceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonParametrageEnchereTrancheBaremeReferenceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonParametrageEnchereTrancheBaremeReference findOne(PropelPDO $con = null) Return the first CommonParametrageEnchereTrancheBaremeReference matching the query
 * @method CommonParametrageEnchereTrancheBaremeReference findOneOrCreate(PropelPDO $con = null) Return the first CommonParametrageEnchereTrancheBaremeReference matching the query, or a new CommonParametrageEnchereTrancheBaremeReference object populated from the query conditions when no match is found
 *
 * @method CommonParametrageEnchereTrancheBaremeReference findOneById(int $id) Return the first CommonParametrageEnchereTrancheBaremeReference filtered by the id column
 * @method CommonParametrageEnchereTrancheBaremeReference findOneByOrganisme(string $organisme) Return the first CommonParametrageEnchereTrancheBaremeReference filtered by the organisme column
 * @method CommonParametrageEnchereTrancheBaremeReference findOneByIdreference(int $idReference) Return the first CommonParametrageEnchereTrancheBaremeReference filtered by the idReference column
 * @method CommonParametrageEnchereTrancheBaremeReference findOneByBorneinf(double $borneInf) Return the first CommonParametrageEnchereTrancheBaremeReference filtered by the borneInf column
 * @method CommonParametrageEnchereTrancheBaremeReference findOneByBornesup(double $borneSup) Return the first CommonParametrageEnchereTrancheBaremeReference filtered by the borneSup column
 * @method CommonParametrageEnchereTrancheBaremeReference findOneByNote(double $note) Return the first CommonParametrageEnchereTrancheBaremeReference filtered by the note column
 *
 * @method array findById(int $id) Return CommonParametrageEnchereTrancheBaremeReference objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonParametrageEnchereTrancheBaremeReference objects filtered by the organisme column
 * @method array findByIdreference(int $idReference) Return CommonParametrageEnchereTrancheBaremeReference objects filtered by the idReference column
 * @method array findByBorneinf(double $borneInf) Return CommonParametrageEnchereTrancheBaremeReference objects filtered by the borneInf column
 * @method array findByBornesup(double $borneSup) Return CommonParametrageEnchereTrancheBaremeReference objects filtered by the borneSup column
 * @method array findByNote(double $note) Return CommonParametrageEnchereTrancheBaremeReference objects filtered by the note column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonParametrageEnchereTrancheBaremeReferenceQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonParametrageEnchereTrancheBaremeReferenceQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonParametrageEnchereTrancheBaremeReference', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonParametrageEnchereTrancheBaremeReferenceQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonParametrageEnchereTrancheBaremeReferenceQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonParametrageEnchereTrancheBaremeReferenceQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonParametrageEnchereTrancheBaremeReferenceQuery) {
            return $criteria;
        }
        $query = new CommonParametrageEnchereTrancheBaremeReferenceQuery();
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
     * @return   CommonParametrageEnchereTrancheBaremeReference|CommonParametrageEnchereTrancheBaremeReference[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonParametrageEnchereTrancheBaremeReferencePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonParametrageEnchereTrancheBaremeReferencePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonParametrageEnchereTrancheBaremeReference A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `idReference`, `borneInf`, `borneSup`, `note` FROM `Parametrage_Enchere_Tranche_Bareme_Reference` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonParametrageEnchereTrancheBaremeReference();
            $obj->hydrate($row);
            CommonParametrageEnchereTrancheBaremeReferencePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonParametrageEnchereTrancheBaremeReference|CommonParametrageEnchereTrancheBaremeReference[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonParametrageEnchereTrancheBaremeReference[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonParametrageEnchereTrancheBaremeReferenceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonParametrageEnchereTrancheBaremeReferencePeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonParametrageEnchereTrancheBaremeReferencePeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonParametrageEnchereTrancheBaremeReferenceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonParametrageEnchereTrancheBaremeReferencePeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonParametrageEnchereTrancheBaremeReferencePeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonParametrageEnchereTrancheBaremeReferenceQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonParametrageEnchereTrancheBaremeReferencePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonParametrageEnchereTrancheBaremeReferencePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonParametrageEnchereTrancheBaremeReferencePeer::ID, $id, $comparison);
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
     * @return CommonParametrageEnchereTrancheBaremeReferenceQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonParametrageEnchereTrancheBaremeReferencePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the idReference column
     *
     * Example usage:
     * <code>
     * $query->filterByIdreference(1234); // WHERE idReference = 1234
     * $query->filterByIdreference(array(12, 34)); // WHERE idReference IN (12, 34)
     * $query->filterByIdreference(array('min' => 12)); // WHERE idReference >= 12
     * $query->filterByIdreference(array('max' => 12)); // WHERE idReference <= 12
     * </code>
     *
     * @param     mixed $idreference The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonParametrageEnchereTrancheBaremeReferenceQuery The current query, for fluid interface
     */
    public function filterByIdreference($idreference = null, $comparison = null)
    {
        if (is_array($idreference)) {
            $useMinMax = false;
            if (isset($idreference['min'])) {
                $this->addUsingAlias(CommonParametrageEnchereTrancheBaremeReferencePeer::IDREFERENCE, $idreference['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idreference['max'])) {
                $this->addUsingAlias(CommonParametrageEnchereTrancheBaremeReferencePeer::IDREFERENCE, $idreference['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonParametrageEnchereTrancheBaremeReferencePeer::IDREFERENCE, $idreference, $comparison);
    }

    /**
     * Filter the query on the borneInf column
     *
     * Example usage:
     * <code>
     * $query->filterByBorneinf(1234); // WHERE borneInf = 1234
     * $query->filterByBorneinf(array(12, 34)); // WHERE borneInf IN (12, 34)
     * $query->filterByBorneinf(array('min' => 12)); // WHERE borneInf >= 12
     * $query->filterByBorneinf(array('max' => 12)); // WHERE borneInf <= 12
     * </code>
     *
     * @param     mixed $borneinf The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonParametrageEnchereTrancheBaremeReferenceQuery The current query, for fluid interface
     */
    public function filterByBorneinf($borneinf = null, $comparison = null)
    {
        if (is_array($borneinf)) {
            $useMinMax = false;
            if (isset($borneinf['min'])) {
                $this->addUsingAlias(CommonParametrageEnchereTrancheBaremeReferencePeer::BORNEINF, $borneinf['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($borneinf['max'])) {
                $this->addUsingAlias(CommonParametrageEnchereTrancheBaremeReferencePeer::BORNEINF, $borneinf['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonParametrageEnchereTrancheBaremeReferencePeer::BORNEINF, $borneinf, $comparison);
    }

    /**
     * Filter the query on the borneSup column
     *
     * Example usage:
     * <code>
     * $query->filterByBornesup(1234); // WHERE borneSup = 1234
     * $query->filterByBornesup(array(12, 34)); // WHERE borneSup IN (12, 34)
     * $query->filterByBornesup(array('min' => 12)); // WHERE borneSup >= 12
     * $query->filterByBornesup(array('max' => 12)); // WHERE borneSup <= 12
     * </code>
     *
     * @param     mixed $bornesup The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonParametrageEnchereTrancheBaremeReferenceQuery The current query, for fluid interface
     */
    public function filterByBornesup($bornesup = null, $comparison = null)
    {
        if (is_array($bornesup)) {
            $useMinMax = false;
            if (isset($bornesup['min'])) {
                $this->addUsingAlias(CommonParametrageEnchereTrancheBaremeReferencePeer::BORNESUP, $bornesup['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($bornesup['max'])) {
                $this->addUsingAlias(CommonParametrageEnchereTrancheBaremeReferencePeer::BORNESUP, $bornesup['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonParametrageEnchereTrancheBaremeReferencePeer::BORNESUP, $bornesup, $comparison);
    }

    /**
     * Filter the query on the note column
     *
     * Example usage:
     * <code>
     * $query->filterByNote(1234); // WHERE note = 1234
     * $query->filterByNote(array(12, 34)); // WHERE note IN (12, 34)
     * $query->filterByNote(array('min' => 12)); // WHERE note >= 12
     * $query->filterByNote(array('max' => 12)); // WHERE note <= 12
     * </code>
     *
     * @param     mixed $note The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonParametrageEnchereTrancheBaremeReferenceQuery The current query, for fluid interface
     */
    public function filterByNote($note = null, $comparison = null)
    {
        if (is_array($note)) {
            $useMinMax = false;
            if (isset($note['min'])) {
                $this->addUsingAlias(CommonParametrageEnchereTrancheBaremeReferencePeer::NOTE, $note['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($note['max'])) {
                $this->addUsingAlias(CommonParametrageEnchereTrancheBaremeReferencePeer::NOTE, $note['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonParametrageEnchereTrancheBaremeReferencePeer::NOTE, $note, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonParametrageEnchereTrancheBaremeReference $commonParametrageEnchereTrancheBaremeReference Object to remove from the list of results
     *
     * @return CommonParametrageEnchereTrancheBaremeReferenceQuery The current query, for fluid interface
     */
    public function prune($commonParametrageEnchereTrancheBaremeReference = null)
    {
        if ($commonParametrageEnchereTrancheBaremeReference) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonParametrageEnchereTrancheBaremeReferencePeer::ID), $commonParametrageEnchereTrancheBaremeReference->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonParametrageEnchereTrancheBaremeReferencePeer::ORGANISME), $commonParametrageEnchereTrancheBaremeReference->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
