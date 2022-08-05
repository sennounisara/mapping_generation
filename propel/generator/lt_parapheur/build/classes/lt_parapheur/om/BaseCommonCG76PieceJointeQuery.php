<?php


/**
 * Base class that represents a query for the 'CG76_PieceJointe' table.
 *
 * 
 *
 * @method CommonCG76PieceJointeQuery orderByRef($order = Criteria::ASC) Order by the Ref column
 * @method CommonCG76PieceJointeQuery orderByIdpj($order = Criteria::ASC) Order by the IdPJ column
 * @method CommonCG76PieceJointeQuery orderByIdentreprise($order = Criteria::ASC) Order by the idEntreprise column
 *
 * @method CommonCG76PieceJointeQuery groupByRef() Group by the Ref column
 * @method CommonCG76PieceJointeQuery groupByIdpj() Group by the IdPJ column
 * @method CommonCG76PieceJointeQuery groupByIdentreprise() Group by the idEntreprise column
 *
 * @method CommonCG76PieceJointeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonCG76PieceJointeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonCG76PieceJointeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonCG76PieceJointe findOne(PropelPDO $con = null) Return the first CommonCG76PieceJointe matching the query
 * @method CommonCG76PieceJointe findOneOrCreate(PropelPDO $con = null) Return the first CommonCG76PieceJointe matching the query, or a new CommonCG76PieceJointe object populated from the query conditions when no match is found
 *
 * @method CommonCG76PieceJointe findOneByIdpj(int $IdPJ) Return the first CommonCG76PieceJointe filtered by the IdPJ column
 * @method CommonCG76PieceJointe findOneByIdentreprise(int $idEntreprise) Return the first CommonCG76PieceJointe filtered by the idEntreprise column
 *
 * @method array findByRef(int $Ref) Return CommonCG76PieceJointe objects filtered by the Ref column
 * @method array findByIdpj(int $IdPJ) Return CommonCG76PieceJointe objects filtered by the IdPJ column
 * @method array findByIdentreprise(int $idEntreprise) Return CommonCG76PieceJointe objects filtered by the idEntreprise column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonCG76PieceJointeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonCG76PieceJointeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonCG76PieceJointe', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonCG76PieceJointeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonCG76PieceJointeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonCG76PieceJointeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonCG76PieceJointeQuery) {
            return $criteria;
        }
        $query = new CommonCG76PieceJointeQuery();
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
     * @return   CommonCG76PieceJointe|CommonCG76PieceJointe[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonCG76PieceJointePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonCG76PieceJointePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonCG76PieceJointe A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByRef($key, $con = null)
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
     * @return                 CommonCG76PieceJointe A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `Ref`, `IdPJ`, `idEntreprise` FROM `CG76_PieceJointe` WHERE `Ref` = :p0';
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
            $obj = new CommonCG76PieceJointe();
            $obj->hydrate($row);
            CommonCG76PieceJointePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonCG76PieceJointe|CommonCG76PieceJointe[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonCG76PieceJointe[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonCG76PieceJointeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonCG76PieceJointePeer::REF, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonCG76PieceJointeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonCG76PieceJointePeer::REF, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the Ref column
     *
     * Example usage:
     * <code>
     * $query->filterByRef(1234); // WHERE Ref = 1234
     * $query->filterByRef(array(12, 34)); // WHERE Ref IN (12, 34)
     * $query->filterByRef(array('min' => 12)); // WHERE Ref >= 12
     * $query->filterByRef(array('max' => 12)); // WHERE Ref <= 12
     * </code>
     *
     * @param     mixed $ref The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCG76PieceJointeQuery The current query, for fluid interface
     */
    public function filterByRef($ref = null, $comparison = null)
    {
        if (is_array($ref)) {
            $useMinMax = false;
            if (isset($ref['min'])) {
                $this->addUsingAlias(CommonCG76PieceJointePeer::REF, $ref['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($ref['max'])) {
                $this->addUsingAlias(CommonCG76PieceJointePeer::REF, $ref['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCG76PieceJointePeer::REF, $ref, $comparison);
    }

    /**
     * Filter the query on the IdPJ column
     *
     * Example usage:
     * <code>
     * $query->filterByIdpj(1234); // WHERE IdPJ = 1234
     * $query->filterByIdpj(array(12, 34)); // WHERE IdPJ IN (12, 34)
     * $query->filterByIdpj(array('min' => 12)); // WHERE IdPJ >= 12
     * $query->filterByIdpj(array('max' => 12)); // WHERE IdPJ <= 12
     * </code>
     *
     * @param     mixed $idpj The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCG76PieceJointeQuery The current query, for fluid interface
     */
    public function filterByIdpj($idpj = null, $comparison = null)
    {
        if (is_array($idpj)) {
            $useMinMax = false;
            if (isset($idpj['min'])) {
                $this->addUsingAlias(CommonCG76PieceJointePeer::IDPJ, $idpj['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idpj['max'])) {
                $this->addUsingAlias(CommonCG76PieceJointePeer::IDPJ, $idpj['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCG76PieceJointePeer::IDPJ, $idpj, $comparison);
    }

    /**
     * Filter the query on the idEntreprise column
     *
     * Example usage:
     * <code>
     * $query->filterByIdentreprise(1234); // WHERE idEntreprise = 1234
     * $query->filterByIdentreprise(array(12, 34)); // WHERE idEntreprise IN (12, 34)
     * $query->filterByIdentreprise(array('min' => 12)); // WHERE idEntreprise >= 12
     * $query->filterByIdentreprise(array('max' => 12)); // WHERE idEntreprise <= 12
     * </code>
     *
     * @param     mixed $identreprise The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCG76PieceJointeQuery The current query, for fluid interface
     */
    public function filterByIdentreprise($identreprise = null, $comparison = null)
    {
        if (is_array($identreprise)) {
            $useMinMax = false;
            if (isset($identreprise['min'])) {
                $this->addUsingAlias(CommonCG76PieceJointePeer::IDENTREPRISE, $identreprise['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($identreprise['max'])) {
                $this->addUsingAlias(CommonCG76PieceJointePeer::IDENTREPRISE, $identreprise['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCG76PieceJointePeer::IDENTREPRISE, $identreprise, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonCG76PieceJointe $commonCG76PieceJointe Object to remove from the list of results
     *
     * @return CommonCG76PieceJointeQuery The current query, for fluid interface
     */
    public function prune($commonCG76PieceJointe = null)
    {
        if ($commonCG76PieceJointe) {
            $this->addUsingAlias(CommonCG76PieceJointePeer::REF, $commonCG76PieceJointe->getRef(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
