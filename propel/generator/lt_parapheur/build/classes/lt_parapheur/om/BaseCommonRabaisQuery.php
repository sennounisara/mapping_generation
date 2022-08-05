<?php


/**
 * Base class that represents a query for the 'Rabais' table.
 *
 * 
 *
 * @method CommonRabaisQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonRabaisQuery orderByIdEnveloppe($order = Criteria::ASC) Order by the id_enveloppe column
 * @method CommonRabaisQuery orderByFormatEnveloppe($order = Criteria::ASC) Order by the format_enveloppe column
 * @method CommonRabaisQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonRabaisQuery orderByRabais($order = Criteria::ASC) Order by the rabais column
 * @method CommonRabaisQuery orderByCommentaire($order = Criteria::ASC) Order by the Commentaire column
 *
 * @method CommonRabaisQuery groupById() Group by the id column
 * @method CommonRabaisQuery groupByIdEnveloppe() Group by the id_enveloppe column
 * @method CommonRabaisQuery groupByFormatEnveloppe() Group by the format_enveloppe column
 * @method CommonRabaisQuery groupByOrganisme() Group by the organisme column
 * @method CommonRabaisQuery groupByRabais() Group by the rabais column
 * @method CommonRabaisQuery groupByCommentaire() Group by the Commentaire column
 *
 * @method CommonRabaisQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonRabaisQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonRabaisQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonRabais findOne(PropelPDO $con = null) Return the first CommonRabais matching the query
 * @method CommonRabais findOneOrCreate(PropelPDO $con = null) Return the first CommonRabais matching the query, or a new CommonRabais object populated from the query conditions when no match is found
 *
 * @method CommonRabais findOneByIdEnveloppe(int $id_enveloppe) Return the first CommonRabais filtered by the id_enveloppe column
 * @method CommonRabais findOneByFormatEnveloppe(int $format_enveloppe) Return the first CommonRabais filtered by the format_enveloppe column
 * @method CommonRabais findOneByOrganisme(string $organisme) Return the first CommonRabais filtered by the organisme column
 * @method CommonRabais findOneByRabais(string $rabais) Return the first CommonRabais filtered by the rabais column
 * @method CommonRabais findOneByCommentaire(string $Commentaire) Return the first CommonRabais filtered by the Commentaire column
 *
 * @method array findById(int $id) Return CommonRabais objects filtered by the id column
 * @method array findByIdEnveloppe(int $id_enveloppe) Return CommonRabais objects filtered by the id_enveloppe column
 * @method array findByFormatEnveloppe(int $format_enveloppe) Return CommonRabais objects filtered by the format_enveloppe column
 * @method array findByOrganisme(string $organisme) Return CommonRabais objects filtered by the organisme column
 * @method array findByRabais(string $rabais) Return CommonRabais objects filtered by the rabais column
 * @method array findByCommentaire(string $Commentaire) Return CommonRabais objects filtered by the Commentaire column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonRabaisQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonRabaisQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonRabais', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonRabaisQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonRabaisQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonRabaisQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonRabaisQuery) {
            return $criteria;
        }
        $query = new CommonRabaisQuery();
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
     * @return   CommonRabais|CommonRabais[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonRabaisPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonRabaisPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonRabais A model object, or null if the key is not found
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
     * @return                 CommonRabais A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_enveloppe`, `format_enveloppe`, `organisme`, `rabais`, `Commentaire` FROM `Rabais` WHERE `id` = :p0';
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
            $obj = new CommonRabais();
            $obj->hydrate($row);
            CommonRabaisPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonRabais|CommonRabais[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonRabais[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonRabaisQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonRabaisPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonRabaisQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonRabaisPeer::ID, $keys, Criteria::IN);
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
     * @return CommonRabaisQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonRabaisPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonRabaisPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonRabaisPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_enveloppe column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEnveloppe(1234); // WHERE id_enveloppe = 1234
     * $query->filterByIdEnveloppe(array(12, 34)); // WHERE id_enveloppe IN (12, 34)
     * $query->filterByIdEnveloppe(array('min' => 12)); // WHERE id_enveloppe >= 12
     * $query->filterByIdEnveloppe(array('max' => 12)); // WHERE id_enveloppe <= 12
     * </code>
     *
     * @param     mixed $idEnveloppe The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRabaisQuery The current query, for fluid interface
     */
    public function filterByIdEnveloppe($idEnveloppe = null, $comparison = null)
    {
        if (is_array($idEnveloppe)) {
            $useMinMax = false;
            if (isset($idEnveloppe['min'])) {
                $this->addUsingAlias(CommonRabaisPeer::ID_ENVELOPPE, $idEnveloppe['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEnveloppe['max'])) {
                $this->addUsingAlias(CommonRabaisPeer::ID_ENVELOPPE, $idEnveloppe['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonRabaisPeer::ID_ENVELOPPE, $idEnveloppe, $comparison);
    }

    /**
     * Filter the query on the format_enveloppe column
     *
     * Example usage:
     * <code>
     * $query->filterByFormatEnveloppe(1234); // WHERE format_enveloppe = 1234
     * $query->filterByFormatEnveloppe(array(12, 34)); // WHERE format_enveloppe IN (12, 34)
     * $query->filterByFormatEnveloppe(array('min' => 12)); // WHERE format_enveloppe >= 12
     * $query->filterByFormatEnveloppe(array('max' => 12)); // WHERE format_enveloppe <= 12
     * </code>
     *
     * @param     mixed $formatEnveloppe The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRabaisQuery The current query, for fluid interface
     */
    public function filterByFormatEnveloppe($formatEnveloppe = null, $comparison = null)
    {
        if (is_array($formatEnveloppe)) {
            $useMinMax = false;
            if (isset($formatEnveloppe['min'])) {
                $this->addUsingAlias(CommonRabaisPeer::FORMAT_ENVELOPPE, $formatEnveloppe['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($formatEnveloppe['max'])) {
                $this->addUsingAlias(CommonRabaisPeer::FORMAT_ENVELOPPE, $formatEnveloppe['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonRabaisPeer::FORMAT_ENVELOPPE, $formatEnveloppe, $comparison);
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
     * @return CommonRabaisQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonRabaisPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the rabais column
     *
     * Example usage:
     * <code>
     * $query->filterByRabais('fooValue');   // WHERE rabais = 'fooValue'
     * $query->filterByRabais('%fooValue%'); // WHERE rabais LIKE '%fooValue%'
     * </code>
     *
     * @param     string $rabais The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRabaisQuery The current query, for fluid interface
     */
    public function filterByRabais($rabais = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($rabais)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $rabais)) {
                $rabais = str_replace('*', '%', $rabais);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonRabaisPeer::RABAIS, $rabais, $comparison);
    }

    /**
     * Filter the query on the Commentaire column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentaire('fooValue');   // WHERE Commentaire = 'fooValue'
     * $query->filterByCommentaire('%fooValue%'); // WHERE Commentaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commentaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonRabaisQuery The current query, for fluid interface
     */
    public function filterByCommentaire($commentaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commentaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commentaire)) {
                $commentaire = str_replace('*', '%', $commentaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonRabaisPeer::COMMENTAIRE, $commentaire, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonRabais $commonRabais Object to remove from the list of results
     *
     * @return CommonRabaisQuery The current query, for fluid interface
     */
    public function prune($commonRabais = null)
    {
        if ($commonRabais) {
            $this->addUsingAlias(CommonRabaisPeer::ID, $commonRabais->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
