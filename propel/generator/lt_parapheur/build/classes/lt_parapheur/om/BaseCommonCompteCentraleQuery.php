<?php


/**
 * Base class that represents a query for the 'compte_centrale' table.
 *
 * 
 *
 * @method CommonCompteCentraleQuery orderByIdCompte($order = Criteria::ASC) Order by the ID_COMPTE column
 * @method CommonCompteCentraleQuery orderByOrganisme($order = Criteria::ASC) Order by the ORGANISME column
 * @method CommonCompteCentraleQuery orderByIdCentrale($order = Criteria::ASC) Order by the ID_CENTRALE column
 * @method CommonCompteCentraleQuery orderByMail($order = Criteria::ASC) Order by the MAIL column
 * @method CommonCompteCentraleQuery orderByFax($order = Criteria::ASC) Order by the FAX column
 * @method CommonCompteCentraleQuery orderByInfoCimplementaire($order = Criteria::ASC) Order by the INFO_CIMPLEMENTAIRE column
 * @method CommonCompteCentraleQuery orderByIdService($order = Criteria::ASC) Order by the ID_SERVICE column
 *
 * @method CommonCompteCentraleQuery groupByIdCompte() Group by the ID_COMPTE column
 * @method CommonCompteCentraleQuery groupByOrganisme() Group by the ORGANISME column
 * @method CommonCompteCentraleQuery groupByIdCentrale() Group by the ID_CENTRALE column
 * @method CommonCompteCentraleQuery groupByMail() Group by the MAIL column
 * @method CommonCompteCentraleQuery groupByFax() Group by the FAX column
 * @method CommonCompteCentraleQuery groupByInfoCimplementaire() Group by the INFO_CIMPLEMENTAIRE column
 * @method CommonCompteCentraleQuery groupByIdService() Group by the ID_SERVICE column
 *
 * @method CommonCompteCentraleQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonCompteCentraleQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonCompteCentraleQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonCompteCentrale findOne(PropelPDO $con = null) Return the first CommonCompteCentrale matching the query
 * @method CommonCompteCentrale findOneOrCreate(PropelPDO $con = null) Return the first CommonCompteCentrale matching the query, or a new CommonCompteCentrale object populated from the query conditions when no match is found
 *
 * @method CommonCompteCentrale findOneByIdCompte(int $ID_COMPTE) Return the first CommonCompteCentrale filtered by the ID_COMPTE column
 * @method CommonCompteCentrale findOneByOrganisme(string $ORGANISME) Return the first CommonCompteCentrale filtered by the ORGANISME column
 * @method CommonCompteCentrale findOneByIdCentrale(int $ID_CENTRALE) Return the first CommonCompteCentrale filtered by the ID_CENTRALE column
 * @method CommonCompteCentrale findOneByMail(string $MAIL) Return the first CommonCompteCentrale filtered by the MAIL column
 * @method CommonCompteCentrale findOneByFax(string $FAX) Return the first CommonCompteCentrale filtered by the FAX column
 * @method CommonCompteCentrale findOneByInfoCimplementaire(string $INFO_CIMPLEMENTAIRE) Return the first CommonCompteCentrale filtered by the INFO_CIMPLEMENTAIRE column
 * @method CommonCompteCentrale findOneByIdService(int $ID_SERVICE) Return the first CommonCompteCentrale filtered by the ID_SERVICE column
 *
 * @method array findByIdCompte(int $ID_COMPTE) Return CommonCompteCentrale objects filtered by the ID_COMPTE column
 * @method array findByOrganisme(string $ORGANISME) Return CommonCompteCentrale objects filtered by the ORGANISME column
 * @method array findByIdCentrale(int $ID_CENTRALE) Return CommonCompteCentrale objects filtered by the ID_CENTRALE column
 * @method array findByMail(string $MAIL) Return CommonCompteCentrale objects filtered by the MAIL column
 * @method array findByFax(string $FAX) Return CommonCompteCentrale objects filtered by the FAX column
 * @method array findByInfoCimplementaire(string $INFO_CIMPLEMENTAIRE) Return CommonCompteCentrale objects filtered by the INFO_CIMPLEMENTAIRE column
 * @method array findByIdService(int $ID_SERVICE) Return CommonCompteCentrale objects filtered by the ID_SERVICE column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonCompteCentraleQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonCompteCentraleQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonCompteCentrale', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonCompteCentraleQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonCompteCentraleQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonCompteCentraleQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonCompteCentraleQuery) {
            return $criteria;
        }
        $query = new CommonCompteCentraleQuery();
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
                         A Primary key composition: [$ID_COMPTE, $ORGANISME]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonCompteCentrale|CommonCompteCentrale[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonCompteCentralePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonCompteCentralePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonCompteCentrale A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_COMPTE`, `ORGANISME`, `ID_CENTRALE`, `MAIL`, `FAX`, `INFO_CIMPLEMENTAIRE`, `ID_SERVICE` FROM `compte_centrale` WHERE `ID_COMPTE` = :p0 AND `ORGANISME` = :p1';
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
            $obj = new CommonCompteCentrale();
            $obj->hydrate($row);
            CommonCompteCentralePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonCompteCentrale|CommonCompteCentrale[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonCompteCentrale[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonCompteCentraleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonCompteCentralePeer::ID_COMPTE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonCompteCentralePeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonCompteCentraleQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonCompteCentralePeer::ID_COMPTE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonCompteCentralePeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the ID_COMPTE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCompte(1234); // WHERE ID_COMPTE = 1234
     * $query->filterByIdCompte(array(12, 34)); // WHERE ID_COMPTE IN (12, 34)
     * $query->filterByIdCompte(array('min' => 12)); // WHERE ID_COMPTE >= 12
     * $query->filterByIdCompte(array('max' => 12)); // WHERE ID_COMPTE <= 12
     * </code>
     *
     * @param     mixed $idCompte The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCompteCentraleQuery The current query, for fluid interface
     */
    public function filterByIdCompte($idCompte = null, $comparison = null)
    {
        if (is_array($idCompte)) {
            $useMinMax = false;
            if (isset($idCompte['min'])) {
                $this->addUsingAlias(CommonCompteCentralePeer::ID_COMPTE, $idCompte['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCompte['max'])) {
                $this->addUsingAlias(CommonCompteCentralePeer::ID_COMPTE, $idCompte['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCompteCentralePeer::ID_COMPTE, $idCompte, $comparison);
    }

    /**
     * Filter the query on the ORGANISME column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganisme('fooValue');   // WHERE ORGANISME = 'fooValue'
     * $query->filterByOrganisme('%fooValue%'); // WHERE ORGANISME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organisme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCompteCentraleQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonCompteCentralePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the ID_CENTRALE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCentrale(1234); // WHERE ID_CENTRALE = 1234
     * $query->filterByIdCentrale(array(12, 34)); // WHERE ID_CENTRALE IN (12, 34)
     * $query->filterByIdCentrale(array('min' => 12)); // WHERE ID_CENTRALE >= 12
     * $query->filterByIdCentrale(array('max' => 12)); // WHERE ID_CENTRALE <= 12
     * </code>
     *
     * @param     mixed $idCentrale The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCompteCentraleQuery The current query, for fluid interface
     */
    public function filterByIdCentrale($idCentrale = null, $comparison = null)
    {
        if (is_array($idCentrale)) {
            $useMinMax = false;
            if (isset($idCentrale['min'])) {
                $this->addUsingAlias(CommonCompteCentralePeer::ID_CENTRALE, $idCentrale['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCentrale['max'])) {
                $this->addUsingAlias(CommonCompteCentralePeer::ID_CENTRALE, $idCentrale['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCompteCentralePeer::ID_CENTRALE, $idCentrale, $comparison);
    }

    /**
     * Filter the query on the MAIL column
     *
     * Example usage:
     * <code>
     * $query->filterByMail('fooValue');   // WHERE MAIL = 'fooValue'
     * $query->filterByMail('%fooValue%'); // WHERE MAIL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCompteCentraleQuery The current query, for fluid interface
     */
    public function filterByMail($mail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mail)) {
                $mail = str_replace('*', '%', $mail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCompteCentralePeer::MAIL, $mail, $comparison);
    }

    /**
     * Filter the query on the FAX column
     *
     * Example usage:
     * <code>
     * $query->filterByFax('fooValue');   // WHERE FAX = 'fooValue'
     * $query->filterByFax('%fooValue%'); // WHERE FAX LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fax The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCompteCentraleQuery The current query, for fluid interface
     */
    public function filterByFax($fax = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fax)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fax)) {
                $fax = str_replace('*', '%', $fax);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCompteCentralePeer::FAX, $fax, $comparison);
    }

    /**
     * Filter the query on the INFO_CIMPLEMENTAIRE column
     *
     * Example usage:
     * <code>
     * $query->filterByInfoCimplementaire('fooValue');   // WHERE INFO_CIMPLEMENTAIRE = 'fooValue'
     * $query->filterByInfoCimplementaire('%fooValue%'); // WHERE INFO_CIMPLEMENTAIRE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $infoCimplementaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCompteCentraleQuery The current query, for fluid interface
     */
    public function filterByInfoCimplementaire($infoCimplementaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($infoCimplementaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $infoCimplementaire)) {
                $infoCimplementaire = str_replace('*', '%', $infoCimplementaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCompteCentralePeer::INFO_CIMPLEMENTAIRE, $infoCimplementaire, $comparison);
    }

    /**
     * Filter the query on the ID_SERVICE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdService(1234); // WHERE ID_SERVICE = 1234
     * $query->filterByIdService(array(12, 34)); // WHERE ID_SERVICE IN (12, 34)
     * $query->filterByIdService(array('min' => 12)); // WHERE ID_SERVICE >= 12
     * $query->filterByIdService(array('max' => 12)); // WHERE ID_SERVICE <= 12
     * </code>
     *
     * @param     mixed $idService The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCompteCentraleQuery The current query, for fluid interface
     */
    public function filterByIdService($idService = null, $comparison = null)
    {
        if (is_array($idService)) {
            $useMinMax = false;
            if (isset($idService['min'])) {
                $this->addUsingAlias(CommonCompteCentralePeer::ID_SERVICE, $idService['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idService['max'])) {
                $this->addUsingAlias(CommonCompteCentralePeer::ID_SERVICE, $idService['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCompteCentralePeer::ID_SERVICE, $idService, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonCompteCentrale $commonCompteCentrale Object to remove from the list of results
     *
     * @return CommonCompteCentraleQuery The current query, for fluid interface
     */
    public function prune($commonCompteCentrale = null)
    {
        if ($commonCompteCentrale) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonCompteCentralePeer::ID_COMPTE), $commonCompteCentrale->getIdCompte(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonCompteCentralePeer::ORGANISME), $commonCompteCentrale->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
