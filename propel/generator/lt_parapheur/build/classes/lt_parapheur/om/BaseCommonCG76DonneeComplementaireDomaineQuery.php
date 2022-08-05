<?php


/**
 * Base class that represents a query for the 'CG76_Donnee_Complementaire_Domaine' table.
 *
 * 
 *
 * @method CommonCG76DonneeComplementaireDomaineQuery orderById($order = Criteria::ASC) Order by the Id column
 * @method CommonCG76DonneeComplementaireDomaineQuery orderByIddonneecomlementaire($order = Criteria::ASC) Order by the IdDonneeComlementaire column
 * @method CommonCG76DonneeComplementaireDomaineQuery orderByIddomaine($order = Criteria::ASC) Order by the IdDomaine column
 *
 * @method CommonCG76DonneeComplementaireDomaineQuery groupById() Group by the Id column
 * @method CommonCG76DonneeComplementaireDomaineQuery groupByIddonneecomlementaire() Group by the IdDonneeComlementaire column
 * @method CommonCG76DonneeComplementaireDomaineQuery groupByIddomaine() Group by the IdDomaine column
 *
 * @method CommonCG76DonneeComplementaireDomaineQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonCG76DonneeComplementaireDomaineQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonCG76DonneeComplementaireDomaineQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonCG76DonneeComplementaireDomaine findOne(PropelPDO $con = null) Return the first CommonCG76DonneeComplementaireDomaine matching the query
 * @method CommonCG76DonneeComplementaireDomaine findOneOrCreate(PropelPDO $con = null) Return the first CommonCG76DonneeComplementaireDomaine matching the query, or a new CommonCG76DonneeComplementaireDomaine object populated from the query conditions when no match is found
 *
 * @method CommonCG76DonneeComplementaireDomaine findOneByIddonneecomlementaire(int $IdDonneeComlementaire) Return the first CommonCG76DonneeComplementaireDomaine filtered by the IdDonneeComlementaire column
 * @method CommonCG76DonneeComplementaireDomaine findOneByIddomaine(int $IdDomaine) Return the first CommonCG76DonneeComplementaireDomaine filtered by the IdDomaine column
 *
 * @method array findById(int $Id) Return CommonCG76DonneeComplementaireDomaine objects filtered by the Id column
 * @method array findByIddonneecomlementaire(int $IdDonneeComlementaire) Return CommonCG76DonneeComplementaireDomaine objects filtered by the IdDonneeComlementaire column
 * @method array findByIddomaine(int $IdDomaine) Return CommonCG76DonneeComplementaireDomaine objects filtered by the IdDomaine column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonCG76DonneeComplementaireDomaineQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonCG76DonneeComplementaireDomaineQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonCG76DonneeComplementaireDomaine', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonCG76DonneeComplementaireDomaineQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonCG76DonneeComplementaireDomaineQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonCG76DonneeComplementaireDomaineQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonCG76DonneeComplementaireDomaineQuery) {
            return $criteria;
        }
        $query = new CommonCG76DonneeComplementaireDomaineQuery();
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
     * @return   CommonCG76DonneeComplementaireDomaine|CommonCG76DonneeComplementaireDomaine[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonCG76DonneeComplementaireDomainePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonCG76DonneeComplementaireDomainePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonCG76DonneeComplementaireDomaine A model object, or null if the key is not found
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
     * @return                 CommonCG76DonneeComplementaireDomaine A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `Id`, `IdDonneeComlementaire`, `IdDomaine` FROM `CG76_Donnee_Complementaire_Domaine` WHERE `Id` = :p0';
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
            $obj = new CommonCG76DonneeComplementaireDomaine();
            $obj->hydrate($row);
            CommonCG76DonneeComplementaireDomainePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonCG76DonneeComplementaireDomaine|CommonCG76DonneeComplementaireDomaine[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonCG76DonneeComplementaireDomaine[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonCG76DonneeComplementaireDomaineQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonCG76DonneeComplementaireDomainePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonCG76DonneeComplementaireDomaineQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonCG76DonneeComplementaireDomainePeer::ID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the Id column
     *
     * Example usage:
     * <code>
     * $query->filterById(1234); // WHERE Id = 1234
     * $query->filterById(array(12, 34)); // WHERE Id IN (12, 34)
     * $query->filterById(array('min' => 12)); // WHERE Id >= 12
     * $query->filterById(array('max' => 12)); // WHERE Id <= 12
     * </code>
     *
     * @param     mixed $id The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCG76DonneeComplementaireDomaineQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonCG76DonneeComplementaireDomainePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonCG76DonneeComplementaireDomainePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCG76DonneeComplementaireDomainePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the IdDonneeComlementaire column
     *
     * Example usage:
     * <code>
     * $query->filterByIddonneecomlementaire(1234); // WHERE IdDonneeComlementaire = 1234
     * $query->filterByIddonneecomlementaire(array(12, 34)); // WHERE IdDonneeComlementaire IN (12, 34)
     * $query->filterByIddonneecomlementaire(array('min' => 12)); // WHERE IdDonneeComlementaire >= 12
     * $query->filterByIddonneecomlementaire(array('max' => 12)); // WHERE IdDonneeComlementaire <= 12
     * </code>
     *
     * @param     mixed $iddonneecomlementaire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCG76DonneeComplementaireDomaineQuery The current query, for fluid interface
     */
    public function filterByIddonneecomlementaire($iddonneecomlementaire = null, $comparison = null)
    {
        if (is_array($iddonneecomlementaire)) {
            $useMinMax = false;
            if (isset($iddonneecomlementaire['min'])) {
                $this->addUsingAlias(CommonCG76DonneeComplementaireDomainePeer::IDDONNEECOMLEMENTAIRE, $iddonneecomlementaire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($iddonneecomlementaire['max'])) {
                $this->addUsingAlias(CommonCG76DonneeComplementaireDomainePeer::IDDONNEECOMLEMENTAIRE, $iddonneecomlementaire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCG76DonneeComplementaireDomainePeer::IDDONNEECOMLEMENTAIRE, $iddonneecomlementaire, $comparison);
    }

    /**
     * Filter the query on the IdDomaine column
     *
     * Example usage:
     * <code>
     * $query->filterByIddomaine(1234); // WHERE IdDomaine = 1234
     * $query->filterByIddomaine(array(12, 34)); // WHERE IdDomaine IN (12, 34)
     * $query->filterByIddomaine(array('min' => 12)); // WHERE IdDomaine >= 12
     * $query->filterByIddomaine(array('max' => 12)); // WHERE IdDomaine <= 12
     * </code>
     *
     * @param     mixed $iddomaine The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCG76DonneeComplementaireDomaineQuery The current query, for fluid interface
     */
    public function filterByIddomaine($iddomaine = null, $comparison = null)
    {
        if (is_array($iddomaine)) {
            $useMinMax = false;
            if (isset($iddomaine['min'])) {
                $this->addUsingAlias(CommonCG76DonneeComplementaireDomainePeer::IDDOMAINE, $iddomaine['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($iddomaine['max'])) {
                $this->addUsingAlias(CommonCG76DonneeComplementaireDomainePeer::IDDOMAINE, $iddomaine['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCG76DonneeComplementaireDomainePeer::IDDOMAINE, $iddomaine, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonCG76DonneeComplementaireDomaine $commonCG76DonneeComplementaireDomaine Object to remove from the list of results
     *
     * @return CommonCG76DonneeComplementaireDomaineQuery The current query, for fluid interface
     */
    public function prune($commonCG76DonneeComplementaireDomaine = null)
    {
        if ($commonCG76DonneeComplementaireDomaine) {
            $this->addUsingAlias(CommonCG76DonneeComplementaireDomainePeer::ID, $commonCG76DonneeComplementaireDomaine->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
