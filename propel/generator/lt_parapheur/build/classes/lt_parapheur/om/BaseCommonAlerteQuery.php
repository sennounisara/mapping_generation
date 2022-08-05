<?php


/**
 * Base class that represents a query for the 'Alerte' table.
 *
 * 
 *
 * @method CommonAlerteQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonAlerteQuery orderByIdInscrit($order = Criteria::ASC) Order by the id_inscrit column
 * @method CommonAlerteQuery orderByDenomination($order = Criteria::ASC) Order by the denomination column
 * @method CommonAlerteQuery orderByPeriodicite($order = Criteria::ASC) Order by the periodicite column
 * @method CommonAlerteQuery orderByXmlcriteria($order = Criteria::ASC) Order by the xmlCriteria column
 * @method CommonAlerteQuery orderByCategorie($order = Criteria::ASC) Order by the categorie column
 * @method CommonAlerteQuery orderByIdInitial($order = Criteria::ASC) Order by the id_initial column
 * @method CommonAlerteQuery orderByFormat($order = Criteria::ASC) Order by the format column
 *
 * @method CommonAlerteQuery groupById() Group by the id column
 * @method CommonAlerteQuery groupByIdInscrit() Group by the id_inscrit column
 * @method CommonAlerteQuery groupByDenomination() Group by the denomination column
 * @method CommonAlerteQuery groupByPeriodicite() Group by the periodicite column
 * @method CommonAlerteQuery groupByXmlcriteria() Group by the xmlCriteria column
 * @method CommonAlerteQuery groupByCategorie() Group by the categorie column
 * @method CommonAlerteQuery groupByIdInitial() Group by the id_initial column
 * @method CommonAlerteQuery groupByFormat() Group by the format column
 *
 * @method CommonAlerteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonAlerteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonAlerteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonAlerte findOne(PropelPDO $con = null) Return the first CommonAlerte matching the query
 * @method CommonAlerte findOneOrCreate(PropelPDO $con = null) Return the first CommonAlerte matching the query, or a new CommonAlerte object populated from the query conditions when no match is found
 *
 * @method CommonAlerte findOneByIdInscrit(int $id_inscrit) Return the first CommonAlerte filtered by the id_inscrit column
 * @method CommonAlerte findOneByDenomination(string $denomination) Return the first CommonAlerte filtered by the denomination column
 * @method CommonAlerte findOneByPeriodicite(string $periodicite) Return the first CommonAlerte filtered by the periodicite column
 * @method CommonAlerte findOneByXmlcriteria(string $xmlCriteria) Return the first CommonAlerte filtered by the xmlCriteria column
 * @method CommonAlerte findOneByCategorie(string $categorie) Return the first CommonAlerte filtered by the categorie column
 * @method CommonAlerte findOneByIdInitial(int $id_initial) Return the first CommonAlerte filtered by the id_initial column
 * @method CommonAlerte findOneByFormat(string $format) Return the first CommonAlerte filtered by the format column
 *
 * @method array findById(int $id) Return CommonAlerte objects filtered by the id column
 * @method array findByIdInscrit(int $id_inscrit) Return CommonAlerte objects filtered by the id_inscrit column
 * @method array findByDenomination(string $denomination) Return CommonAlerte objects filtered by the denomination column
 * @method array findByPeriodicite(string $periodicite) Return CommonAlerte objects filtered by the periodicite column
 * @method array findByXmlcriteria(string $xmlCriteria) Return CommonAlerte objects filtered by the xmlCriteria column
 * @method array findByCategorie(string $categorie) Return CommonAlerte objects filtered by the categorie column
 * @method array findByIdInitial(int $id_initial) Return CommonAlerte objects filtered by the id_initial column
 * @method array findByFormat(string $format) Return CommonAlerte objects filtered by the format column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonAlerteQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonAlerteQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonAlerte', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonAlerteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonAlerteQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonAlerteQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonAlerteQuery) {
            return $criteria;
        }
        $query = new CommonAlerteQuery();
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
     * @return   CommonAlerte|CommonAlerte[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonAlertePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonAlertePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonAlerte A model object, or null if the key is not found
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
     * @return                 CommonAlerte A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_inscrit`, `denomination`, `periodicite`, `xmlCriteria`, `categorie`, `id_initial`, `format` FROM `Alerte` WHERE `id` = :p0';
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
            $obj = new CommonAlerte();
            $obj->hydrate($row);
            CommonAlertePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonAlerte|CommonAlerte[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonAlerte[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonAlerteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonAlertePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonAlerteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonAlertePeer::ID, $keys, Criteria::IN);
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
     * @return CommonAlerteQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonAlertePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonAlertePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAlertePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_inscrit column
     *
     * Example usage:
     * <code>
     * $query->filterByIdInscrit(1234); // WHERE id_inscrit = 1234
     * $query->filterByIdInscrit(array(12, 34)); // WHERE id_inscrit IN (12, 34)
     * $query->filterByIdInscrit(array('min' => 12)); // WHERE id_inscrit >= 12
     * $query->filterByIdInscrit(array('max' => 12)); // WHERE id_inscrit <= 12
     * </code>
     *
     * @param     mixed $idInscrit The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAlerteQuery The current query, for fluid interface
     */
    public function filterByIdInscrit($idInscrit = null, $comparison = null)
    {
        if (is_array($idInscrit)) {
            $useMinMax = false;
            if (isset($idInscrit['min'])) {
                $this->addUsingAlias(CommonAlertePeer::ID_INSCRIT, $idInscrit['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idInscrit['max'])) {
                $this->addUsingAlias(CommonAlertePeer::ID_INSCRIT, $idInscrit['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAlertePeer::ID_INSCRIT, $idInscrit, $comparison);
    }

    /**
     * Filter the query on the denomination column
     *
     * Example usage:
     * <code>
     * $query->filterByDenomination('fooValue');   // WHERE denomination = 'fooValue'
     * $query->filterByDenomination('%fooValue%'); // WHERE denomination LIKE '%fooValue%'
     * </code>
     *
     * @param     string $denomination The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAlerteQuery The current query, for fluid interface
     */
    public function filterByDenomination($denomination = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($denomination)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $denomination)) {
                $denomination = str_replace('*', '%', $denomination);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAlertePeer::DENOMINATION, $denomination, $comparison);
    }

    /**
     * Filter the query on the periodicite column
     *
     * Example usage:
     * <code>
     * $query->filterByPeriodicite('fooValue');   // WHERE periodicite = 'fooValue'
     * $query->filterByPeriodicite('%fooValue%'); // WHERE periodicite LIKE '%fooValue%'
     * </code>
     *
     * @param     string $periodicite The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAlerteQuery The current query, for fluid interface
     */
    public function filterByPeriodicite($periodicite = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($periodicite)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $periodicite)) {
                $periodicite = str_replace('*', '%', $periodicite);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAlertePeer::PERIODICITE, $periodicite, $comparison);
    }

    /**
     * Filter the query on the xmlCriteria column
     *
     * Example usage:
     * <code>
     * $query->filterByXmlcriteria('fooValue');   // WHERE xmlCriteria = 'fooValue'
     * $query->filterByXmlcriteria('%fooValue%'); // WHERE xmlCriteria LIKE '%fooValue%'
     * </code>
     *
     * @param     string $xmlcriteria The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAlerteQuery The current query, for fluid interface
     */
    public function filterByXmlcriteria($xmlcriteria = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($xmlcriteria)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $xmlcriteria)) {
                $xmlcriteria = str_replace('*', '%', $xmlcriteria);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAlertePeer::XMLCRITERIA, $xmlcriteria, $comparison);
    }

    /**
     * Filter the query on the categorie column
     *
     * Example usage:
     * <code>
     * $query->filterByCategorie('fooValue');   // WHERE categorie = 'fooValue'
     * $query->filterByCategorie('%fooValue%'); // WHERE categorie LIKE '%fooValue%'
     * </code>
     *
     * @param     string $categorie The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAlerteQuery The current query, for fluid interface
     */
    public function filterByCategorie($categorie = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($categorie)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $categorie)) {
                $categorie = str_replace('*', '%', $categorie);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAlertePeer::CATEGORIE, $categorie, $comparison);
    }

    /**
     * Filter the query on the id_initial column
     *
     * Example usage:
     * <code>
     * $query->filterByIdInitial(1234); // WHERE id_initial = 1234
     * $query->filterByIdInitial(array(12, 34)); // WHERE id_initial IN (12, 34)
     * $query->filterByIdInitial(array('min' => 12)); // WHERE id_initial >= 12
     * $query->filterByIdInitial(array('max' => 12)); // WHERE id_initial <= 12
     * </code>
     *
     * @param     mixed $idInitial The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAlerteQuery The current query, for fluid interface
     */
    public function filterByIdInitial($idInitial = null, $comparison = null)
    {
        if (is_array($idInitial)) {
            $useMinMax = false;
            if (isset($idInitial['min'])) {
                $this->addUsingAlias(CommonAlertePeer::ID_INITIAL, $idInitial['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idInitial['max'])) {
                $this->addUsingAlias(CommonAlertePeer::ID_INITIAL, $idInitial['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAlertePeer::ID_INITIAL, $idInitial, $comparison);
    }

    /**
     * Filter the query on the format column
     *
     * Example usage:
     * <code>
     * $query->filterByFormat('fooValue');   // WHERE format = 'fooValue'
     * $query->filterByFormat('%fooValue%'); // WHERE format LIKE '%fooValue%'
     * </code>
     *
     * @param     string $format The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAlerteQuery The current query, for fluid interface
     */
    public function filterByFormat($format = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($format)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $format)) {
                $format = str_replace('*', '%', $format);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAlertePeer::FORMAT, $format, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonAlerte $commonAlerte Object to remove from the list of results
     *
     * @return CommonAlerteQuery The current query, for fluid interface
     */
    public function prune($commonAlerte = null)
    {
        if ($commonAlerte) {
            $this->addUsingAlias(CommonAlertePeer::ID, $commonAlerte->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
