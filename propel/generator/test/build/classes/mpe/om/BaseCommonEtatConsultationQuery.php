<?php


/**
 * Base class that represents a query for the 'EtatConsultation' table.
 *
 * 
 *
 * @method CommonEtatConsultationQuery orderByIdEtat($order = Criteria::ASC) Order by the id_etat column
 * @method CommonEtatConsultationQuery orderByCodeEtat($order = Criteria::ASC) Order by the code_etat column
 * @method CommonEtatConsultationQuery orderByAbreviationEtat($order = Criteria::ASC) Order by the abreviation_etat column
 * @method CommonEtatConsultationQuery orderByVisible($order = Criteria::ASC) Order by the visible column
 *
 * @method CommonEtatConsultationQuery groupByIdEtat() Group by the id_etat column
 * @method CommonEtatConsultationQuery groupByCodeEtat() Group by the code_etat column
 * @method CommonEtatConsultationQuery groupByAbreviationEtat() Group by the abreviation_etat column
 * @method CommonEtatConsultationQuery groupByVisible() Group by the visible column
 *
 * @method CommonEtatConsultationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonEtatConsultationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonEtatConsultationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonEtatConsultation findOne(PropelPDO $con = null) Return the first CommonEtatConsultation matching the query
 * @method CommonEtatConsultation findOneOrCreate(PropelPDO $con = null) Return the first CommonEtatConsultation matching the query, or a new CommonEtatConsultation object populated from the query conditions when no match is found
 *
 * @method CommonEtatConsultation findOneByCodeEtat(string $code_etat) Return the first CommonEtatConsultation filtered by the code_etat column
 * @method CommonEtatConsultation findOneByAbreviationEtat(string $abreviation_etat) Return the first CommonEtatConsultation filtered by the abreviation_etat column
 * @method CommonEtatConsultation findOneByVisible(int $visible) Return the first CommonEtatConsultation filtered by the visible column
 *
 * @method array findByIdEtat(int $id_etat) Return CommonEtatConsultation objects filtered by the id_etat column
 * @method array findByCodeEtat(string $code_etat) Return CommonEtatConsultation objects filtered by the code_etat column
 * @method array findByAbreviationEtat(string $abreviation_etat) Return CommonEtatConsultation objects filtered by the abreviation_etat column
 * @method array findByVisible(int $visible) Return CommonEtatConsultation objects filtered by the visible column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonEtatConsultationQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonEtatConsultationQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonEtatConsultation', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonEtatConsultationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonEtatConsultationQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonEtatConsultationQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonEtatConsultationQuery) {
            return $criteria;
        }
        $query = new CommonEtatConsultationQuery();
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
     * @return   CommonEtatConsultation|CommonEtatConsultation[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonEtatConsultationPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonEtatConsultationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonEtatConsultation A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdEtat($key, $con = null)
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
     * @return                 CommonEtatConsultation A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_etat`, `code_etat`, `abreviation_etat`, `visible` FROM `EtatConsultation` WHERE `id_etat` = :p0';
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
            $obj = new CommonEtatConsultation();
            $obj->hydrate($row);
            CommonEtatConsultationPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonEtatConsultation|CommonEtatConsultation[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonEtatConsultation[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonEtatConsultationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonEtatConsultationPeer::ID_ETAT, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonEtatConsultationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonEtatConsultationPeer::ID_ETAT, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the id_etat column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEtat(1234); // WHERE id_etat = 1234
     * $query->filterByIdEtat(array(12, 34)); // WHERE id_etat IN (12, 34)
     * $query->filterByIdEtat(array('min' => 12)); // WHERE id_etat >= 12
     * $query->filterByIdEtat(array('max' => 12)); // WHERE id_etat <= 12
     * </code>
     *
     * @param     mixed $idEtat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEtatConsultationQuery The current query, for fluid interface
     */
    public function filterByIdEtat($idEtat = null, $comparison = null)
    {
        if (is_array($idEtat)) {
            $useMinMax = false;
            if (isset($idEtat['min'])) {
                $this->addUsingAlias(CommonEtatConsultationPeer::ID_ETAT, $idEtat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEtat['max'])) {
                $this->addUsingAlias(CommonEtatConsultationPeer::ID_ETAT, $idEtat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEtatConsultationPeer::ID_ETAT, $idEtat, $comparison);
    }

    /**
     * Filter the query on the code_etat column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeEtat('fooValue');   // WHERE code_etat = 'fooValue'
     * $query->filterByCodeEtat('%fooValue%'); // WHERE code_etat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codeEtat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEtatConsultationQuery The current query, for fluid interface
     */
    public function filterByCodeEtat($codeEtat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codeEtat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codeEtat)) {
                $codeEtat = str_replace('*', '%', $codeEtat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEtatConsultationPeer::CODE_ETAT, $codeEtat, $comparison);
    }

    /**
     * Filter the query on the abreviation_etat column
     *
     * Example usage:
     * <code>
     * $query->filterByAbreviationEtat('fooValue');   // WHERE abreviation_etat = 'fooValue'
     * $query->filterByAbreviationEtat('%fooValue%'); // WHERE abreviation_etat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $abreviationEtat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEtatConsultationQuery The current query, for fluid interface
     */
    public function filterByAbreviationEtat($abreviationEtat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($abreviationEtat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $abreviationEtat)) {
                $abreviationEtat = str_replace('*', '%', $abreviationEtat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonEtatConsultationPeer::ABREVIATION_ETAT, $abreviationEtat, $comparison);
    }

    /**
     * Filter the query on the visible column
     *
     * Example usage:
     * <code>
     * $query->filterByVisible(1234); // WHERE visible = 1234
     * $query->filterByVisible(array(12, 34)); // WHERE visible IN (12, 34)
     * $query->filterByVisible(array('min' => 12)); // WHERE visible >= 12
     * $query->filterByVisible(array('max' => 12)); // WHERE visible <= 12
     * </code>
     *
     * @param     mixed $visible The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonEtatConsultationQuery The current query, for fluid interface
     */
    public function filterByVisible($visible = null, $comparison = null)
    {
        if (is_array($visible)) {
            $useMinMax = false;
            if (isset($visible['min'])) {
                $this->addUsingAlias(CommonEtatConsultationPeer::VISIBLE, $visible['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($visible['max'])) {
                $this->addUsingAlias(CommonEtatConsultationPeer::VISIBLE, $visible['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonEtatConsultationPeer::VISIBLE, $visible, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonEtatConsultation $commonEtatConsultation Object to remove from the list of results
     *
     * @return CommonEtatConsultationQuery The current query, for fluid interface
     */
    public function prune($commonEtatConsultation = null)
    {
        if ($commonEtatConsultation) {
            $this->addUsingAlias(CommonEtatConsultationPeer::ID_ETAT, $commonEtatConsultation->getIdEtat(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
