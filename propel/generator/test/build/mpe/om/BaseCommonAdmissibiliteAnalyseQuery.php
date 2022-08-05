<?php


/**
 * Base class that represents a query for the 'Admissibilite_Analyse' table.
 *
 * 
 *
 * @method CommonAdmissibiliteAnalyseQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonAdmissibiliteAnalyseQuery orderByIdOffre($order = Criteria::ASC) Order by the id_offre column
 * @method CommonAdmissibiliteAnalyseQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonAdmissibiliteAnalyseQuery orderBySousPli($order = Criteria::ASC) Order by the sous_pli column
 * @method CommonAdmissibiliteAnalyseQuery orderByAdmissibilite($order = Criteria::ASC) Order by the admissibilite column
 * @method CommonAdmissibiliteAnalyseQuery orderByCommentaire($order = Criteria::ASC) Order by the commentaire column
 * @method CommonAdmissibiliteAnalyseQuery orderByTypeDepot($order = Criteria::ASC) Order by the type_depot column
 *
 * @method CommonAdmissibiliteAnalyseQuery groupById() Group by the id column
 * @method CommonAdmissibiliteAnalyseQuery groupByIdOffre() Group by the id_offre column
 * @method CommonAdmissibiliteAnalyseQuery groupByOrganisme() Group by the organisme column
 * @method CommonAdmissibiliteAnalyseQuery groupBySousPli() Group by the sous_pli column
 * @method CommonAdmissibiliteAnalyseQuery groupByAdmissibilite() Group by the admissibilite column
 * @method CommonAdmissibiliteAnalyseQuery groupByCommentaire() Group by the commentaire column
 * @method CommonAdmissibiliteAnalyseQuery groupByTypeDepot() Group by the type_depot column
 *
 * @method CommonAdmissibiliteAnalyseQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonAdmissibiliteAnalyseQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonAdmissibiliteAnalyseQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonAdmissibiliteAnalyse findOne(PropelPDO $con = null) Return the first CommonAdmissibiliteAnalyse matching the query
 * @method CommonAdmissibiliteAnalyse findOneOrCreate(PropelPDO $con = null) Return the first CommonAdmissibiliteAnalyse matching the query, or a new CommonAdmissibiliteAnalyse object populated from the query conditions when no match is found
 *
 * @method CommonAdmissibiliteAnalyse findOneByIdOffre(int $id_offre) Return the first CommonAdmissibiliteAnalyse filtered by the id_offre column
 * @method CommonAdmissibiliteAnalyse findOneByOrganisme(string $organisme) Return the first CommonAdmissibiliteAnalyse filtered by the organisme column
 * @method CommonAdmissibiliteAnalyse findOneBySousPli(int $sous_pli) Return the first CommonAdmissibiliteAnalyse filtered by the sous_pli column
 * @method CommonAdmissibiliteAnalyse findOneByAdmissibilite(int $admissibilite) Return the first CommonAdmissibiliteAnalyse filtered by the admissibilite column
 * @method CommonAdmissibiliteAnalyse findOneByCommentaire(string $commentaire) Return the first CommonAdmissibiliteAnalyse filtered by the commentaire column
 * @method CommonAdmissibiliteAnalyse findOneByTypeDepot(string $type_depot) Return the first CommonAdmissibiliteAnalyse filtered by the type_depot column
 *
 * @method array findById(int $id) Return CommonAdmissibiliteAnalyse objects filtered by the id column
 * @method array findByIdOffre(int $id_offre) Return CommonAdmissibiliteAnalyse objects filtered by the id_offre column
 * @method array findByOrganisme(string $organisme) Return CommonAdmissibiliteAnalyse objects filtered by the organisme column
 * @method array findBySousPli(int $sous_pli) Return CommonAdmissibiliteAnalyse objects filtered by the sous_pli column
 * @method array findByAdmissibilite(int $admissibilite) Return CommonAdmissibiliteAnalyse objects filtered by the admissibilite column
 * @method array findByCommentaire(string $commentaire) Return CommonAdmissibiliteAnalyse objects filtered by the commentaire column
 * @method array findByTypeDepot(string $type_depot) Return CommonAdmissibiliteAnalyse objects filtered by the type_depot column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonAdmissibiliteAnalyseQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonAdmissibiliteAnalyseQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonAdmissibiliteAnalyse', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonAdmissibiliteAnalyseQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonAdmissibiliteAnalyseQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonAdmissibiliteAnalyseQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonAdmissibiliteAnalyseQuery) {
            return $criteria;
        }
        $query = new CommonAdmissibiliteAnalyseQuery();
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
     * @return   CommonAdmissibiliteAnalyse|CommonAdmissibiliteAnalyse[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonAdmissibiliteAnalysePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonAdmissibiliteAnalysePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonAdmissibiliteAnalyse A model object, or null if the key is not found
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
     * @return                 CommonAdmissibiliteAnalyse A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `id_offre`, `organisme`, `sous_pli`, `admissibilite`, `commentaire`, `type_depot` FROM `Admissibilite_Analyse` WHERE `id` = :p0';
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
            $obj = new CommonAdmissibiliteAnalyse();
            $obj->hydrate($row);
            CommonAdmissibiliteAnalysePeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonAdmissibiliteAnalyse|CommonAdmissibiliteAnalyse[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonAdmissibiliteAnalyse[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonAdmissibiliteAnalyseQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonAdmissibiliteAnalysePeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonAdmissibiliteAnalyseQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonAdmissibiliteAnalysePeer::ID, $keys, Criteria::IN);
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
     * @return CommonAdmissibiliteAnalyseQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonAdmissibiliteAnalysePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonAdmissibiliteAnalysePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAdmissibiliteAnalysePeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the id_offre column
     *
     * Example usage:
     * <code>
     * $query->filterByIdOffre(1234); // WHERE id_offre = 1234
     * $query->filterByIdOffre(array(12, 34)); // WHERE id_offre IN (12, 34)
     * $query->filterByIdOffre(array('min' => 12)); // WHERE id_offre >= 12
     * $query->filterByIdOffre(array('max' => 12)); // WHERE id_offre <= 12
     * </code>
     *
     * @param     mixed $idOffre The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAdmissibiliteAnalyseQuery The current query, for fluid interface
     */
    public function filterByIdOffre($idOffre = null, $comparison = null)
    {
        if (is_array($idOffre)) {
            $useMinMax = false;
            if (isset($idOffre['min'])) {
                $this->addUsingAlias(CommonAdmissibiliteAnalysePeer::ID_OFFRE, $idOffre['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idOffre['max'])) {
                $this->addUsingAlias(CommonAdmissibiliteAnalysePeer::ID_OFFRE, $idOffre['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAdmissibiliteAnalysePeer::ID_OFFRE, $idOffre, $comparison);
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
     * @return CommonAdmissibiliteAnalyseQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonAdmissibiliteAnalysePeer::ORGANISME, $organisme, $comparison);
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
     * @return CommonAdmissibiliteAnalyseQuery The current query, for fluid interface
     */
    public function filterBySousPli($sousPli = null, $comparison = null)
    {
        if (is_array($sousPli)) {
            $useMinMax = false;
            if (isset($sousPli['min'])) {
                $this->addUsingAlias(CommonAdmissibiliteAnalysePeer::SOUS_PLI, $sousPli['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($sousPli['max'])) {
                $this->addUsingAlias(CommonAdmissibiliteAnalysePeer::SOUS_PLI, $sousPli['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAdmissibiliteAnalysePeer::SOUS_PLI, $sousPli, $comparison);
    }

    /**
     * Filter the query on the admissibilite column
     *
     * Example usage:
     * <code>
     * $query->filterByAdmissibilite(1234); // WHERE admissibilite = 1234
     * $query->filterByAdmissibilite(array(12, 34)); // WHERE admissibilite IN (12, 34)
     * $query->filterByAdmissibilite(array('min' => 12)); // WHERE admissibilite >= 12
     * $query->filterByAdmissibilite(array('max' => 12)); // WHERE admissibilite <= 12
     * </code>
     *
     * @param     mixed $admissibilite The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAdmissibiliteAnalyseQuery The current query, for fluid interface
     */
    public function filterByAdmissibilite($admissibilite = null, $comparison = null)
    {
        if (is_array($admissibilite)) {
            $useMinMax = false;
            if (isset($admissibilite['min'])) {
                $this->addUsingAlias(CommonAdmissibiliteAnalysePeer::ADMISSIBILITE, $admissibilite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($admissibilite['max'])) {
                $this->addUsingAlias(CommonAdmissibiliteAnalysePeer::ADMISSIBILITE, $admissibilite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonAdmissibiliteAnalysePeer::ADMISSIBILITE, $admissibilite, $comparison);
    }

    /**
     * Filter the query on the commentaire column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentaire('fooValue');   // WHERE commentaire = 'fooValue'
     * $query->filterByCommentaire('%fooValue%'); // WHERE commentaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commentaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAdmissibiliteAnalyseQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonAdmissibiliteAnalysePeer::COMMENTAIRE, $commentaire, $comparison);
    }

    /**
     * Filter the query on the type_depot column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeDepot('fooValue');   // WHERE type_depot = 'fooValue'
     * $query->filterByTypeDepot('%fooValue%'); // WHERE type_depot LIKE '%fooValue%'
     * </code>
     *
     * @param     string $typeDepot The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonAdmissibiliteAnalyseQuery The current query, for fluid interface
     */
    public function filterByTypeDepot($typeDepot = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($typeDepot)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $typeDepot)) {
                $typeDepot = str_replace('*', '%', $typeDepot);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonAdmissibiliteAnalysePeer::TYPE_DEPOT, $typeDepot, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonAdmissibiliteAnalyse $commonAdmissibiliteAnalyse Object to remove from the list of results
     *
     * @return CommonAdmissibiliteAnalyseQuery The current query, for fluid interface
     */
    public function prune($commonAdmissibiliteAnalyse = null)
    {
        if ($commonAdmissibiliteAnalyse) {
            $this->addUsingAlias(CommonAdmissibiliteAnalysePeer::ID, $commonAdmissibiliteAnalyse->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
