<?php


/**
 * Base class that represents a query for the 'Tranche_Article_133' table.
 *
 * 
 *
 * @method CommonTrancheArticle133Query orderById($order = Criteria::ASC) Order by the id column
 * @method CommonTrancheArticle133Query orderByAcronymeOrg($order = Criteria::ASC) Order by the acronyme_org column
 * @method CommonTrancheArticle133Query orderByMillesime($order = Criteria::ASC) Order by the millesime column
 * @method CommonTrancheArticle133Query orderByLibelleTrancheBudgetaire($order = Criteria::ASC) Order by the Libelle_tranche_budgetaire column
 * @method CommonTrancheArticle133Query orderByBorneInf($order = Criteria::ASC) Order by the borne_inf column
 * @method CommonTrancheArticle133Query orderByBorneSup($order = Criteria::ASC) Order by the borne_sup column
 *
 * @method CommonTrancheArticle133Query groupById() Group by the id column
 * @method CommonTrancheArticle133Query groupByAcronymeOrg() Group by the acronyme_org column
 * @method CommonTrancheArticle133Query groupByMillesime() Group by the millesime column
 * @method CommonTrancheArticle133Query groupByLibelleTrancheBudgetaire() Group by the Libelle_tranche_budgetaire column
 * @method CommonTrancheArticle133Query groupByBorneInf() Group by the borne_inf column
 * @method CommonTrancheArticle133Query groupByBorneSup() Group by the borne_sup column
 *
 * @method CommonTrancheArticle133Query leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTrancheArticle133Query rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTrancheArticle133Query innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTrancheArticle133 findOne(PropelPDO $con = null) Return the first CommonTrancheArticle133 matching the query
 * @method CommonTrancheArticle133 findOneOrCreate(PropelPDO $con = null) Return the first CommonTrancheArticle133 matching the query, or a new CommonTrancheArticle133 object populated from the query conditions when no match is found
 *
 * @method CommonTrancheArticle133 findOneByAcronymeOrg(string $acronyme_org) Return the first CommonTrancheArticle133 filtered by the acronyme_org column
 * @method CommonTrancheArticle133 findOneByMillesime(string $millesime) Return the first CommonTrancheArticle133 filtered by the millesime column
 * @method CommonTrancheArticle133 findOneByLibelleTrancheBudgetaire(string $Libelle_tranche_budgetaire) Return the first CommonTrancheArticle133 filtered by the Libelle_tranche_budgetaire column
 * @method CommonTrancheArticle133 findOneByBorneInf(string $borne_inf) Return the first CommonTrancheArticle133 filtered by the borne_inf column
 * @method CommonTrancheArticle133 findOneByBorneSup(string $borne_sup) Return the first CommonTrancheArticle133 filtered by the borne_sup column
 *
 * @method array findById(int $id) Return CommonTrancheArticle133 objects filtered by the id column
 * @method array findByAcronymeOrg(string $acronyme_org) Return CommonTrancheArticle133 objects filtered by the acronyme_org column
 * @method array findByMillesime(string $millesime) Return CommonTrancheArticle133 objects filtered by the millesime column
 * @method array findByLibelleTrancheBudgetaire(string $Libelle_tranche_budgetaire) Return CommonTrancheArticle133 objects filtered by the Libelle_tranche_budgetaire column
 * @method array findByBorneInf(string $borne_inf) Return CommonTrancheArticle133 objects filtered by the borne_inf column
 * @method array findByBorneSup(string $borne_sup) Return CommonTrancheArticle133 objects filtered by the borne_sup column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTrancheArticle133Query extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTrancheArticle133Query object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTrancheArticle133', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTrancheArticle133Query object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTrancheArticle133Query|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTrancheArticle133Query
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTrancheArticle133Query) {
            return $criteria;
        }
        $query = new CommonTrancheArticle133Query();
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
     * @return   CommonTrancheArticle133|CommonTrancheArticle133[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTrancheArticle133Peer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTrancheArticle133Peer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTrancheArticle133 A model object, or null if the key is not found
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
     * @return                 CommonTrancheArticle133 A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `acronyme_org`, `millesime`, `Libelle_tranche_budgetaire`, `borne_inf`, `borne_sup` FROM `Tranche_Article_133` WHERE `id` = :p0';
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
            $obj = new CommonTrancheArticle133();
            $obj->hydrate($row);
            CommonTrancheArticle133Peer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonTrancheArticle133|CommonTrancheArticle133[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTrancheArticle133[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTrancheArticle133Query The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonTrancheArticle133Peer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTrancheArticle133Query The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonTrancheArticle133Peer::ID, $keys, Criteria::IN);
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
     * @return CommonTrancheArticle133Query The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonTrancheArticle133Peer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonTrancheArticle133Peer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTrancheArticle133Peer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the acronyme_org column
     *
     * Example usage:
     * <code>
     * $query->filterByAcronymeOrg('fooValue');   // WHERE acronyme_org = 'fooValue'
     * $query->filterByAcronymeOrg('%fooValue%'); // WHERE acronyme_org LIKE '%fooValue%'
     * </code>
     *
     * @param     string $acronymeOrg The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTrancheArticle133Query The current query, for fluid interface
     */
    public function filterByAcronymeOrg($acronymeOrg = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($acronymeOrg)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $acronymeOrg)) {
                $acronymeOrg = str_replace('*', '%', $acronymeOrg);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTrancheArticle133Peer::ACRONYME_ORG, $acronymeOrg, $comparison);
    }

    /**
     * Filter the query on the millesime column
     *
     * Example usage:
     * <code>
     * $query->filterByMillesime('fooValue');   // WHERE millesime = 'fooValue'
     * $query->filterByMillesime('%fooValue%'); // WHERE millesime LIKE '%fooValue%'
     * </code>
     *
     * @param     string $millesime The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTrancheArticle133Query The current query, for fluid interface
     */
    public function filterByMillesime($millesime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($millesime)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $millesime)) {
                $millesime = str_replace('*', '%', $millesime);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTrancheArticle133Peer::MILLESIME, $millesime, $comparison);
    }

    /**
     * Filter the query on the Libelle_tranche_budgetaire column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleTrancheBudgetaire('fooValue');   // WHERE Libelle_tranche_budgetaire = 'fooValue'
     * $query->filterByLibelleTrancheBudgetaire('%fooValue%'); // WHERE Libelle_tranche_budgetaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleTrancheBudgetaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTrancheArticle133Query The current query, for fluid interface
     */
    public function filterByLibelleTrancheBudgetaire($libelleTrancheBudgetaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleTrancheBudgetaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleTrancheBudgetaire)) {
                $libelleTrancheBudgetaire = str_replace('*', '%', $libelleTrancheBudgetaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTrancheArticle133Peer::LIBELLE_TRANCHE_BUDGETAIRE, $libelleTrancheBudgetaire, $comparison);
    }

    /**
     * Filter the query on the borne_inf column
     *
     * Example usage:
     * <code>
     * $query->filterByBorneInf('fooValue');   // WHERE borne_inf = 'fooValue'
     * $query->filterByBorneInf('%fooValue%'); // WHERE borne_inf LIKE '%fooValue%'
     * </code>
     *
     * @param     string $borneInf The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTrancheArticle133Query The current query, for fluid interface
     */
    public function filterByBorneInf($borneInf = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($borneInf)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $borneInf)) {
                $borneInf = str_replace('*', '%', $borneInf);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTrancheArticle133Peer::BORNE_INF, $borneInf, $comparison);
    }

    /**
     * Filter the query on the borne_sup column
     *
     * Example usage:
     * <code>
     * $query->filterByBorneSup('fooValue');   // WHERE borne_sup = 'fooValue'
     * $query->filterByBorneSup('%fooValue%'); // WHERE borne_sup LIKE '%fooValue%'
     * </code>
     *
     * @param     string $borneSup The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTrancheArticle133Query The current query, for fluid interface
     */
    public function filterByBorneSup($borneSup = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($borneSup)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $borneSup)) {
                $borneSup = str_replace('*', '%', $borneSup);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonTrancheArticle133Peer::BORNE_SUP, $borneSup, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTrancheArticle133 $commonTrancheArticle133 Object to remove from the list of results
     *
     * @return CommonTrancheArticle133Query The current query, for fluid interface
     */
    public function prune($commonTrancheArticle133 = null)
    {
        if ($commonTrancheArticle133) {
            $this->addUsingAlias(CommonTrancheArticle133Peer::ID, $commonTrancheArticle133->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
