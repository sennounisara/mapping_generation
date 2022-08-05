<?php


/**
 * Base class that represents a query for the 'Chorus_pj' table.
 *
 * 
 *
 * @method CommonChorusPjQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonChorusPjQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonChorusPjQuery orderByIdEchange($order = Criteria::ASC) Order by the id_echange column
 * @method CommonChorusPjQuery orderByNomFichier($order = Criteria::ASC) Order by the nom_fichier column
 * @method CommonChorusPjQuery orderByFichier($order = Criteria::ASC) Order by the fichier column
 * @method CommonChorusPjQuery orderByHorodatage($order = Criteria::ASC) Order by the horodatage column
 * @method CommonChorusPjQuery orderByUntrusteddate($order = Criteria::ASC) Order by the untrusteddate column
 * @method CommonChorusPjQuery orderByTaille($order = Criteria::ASC) Order by the taille column
 *
 * @method CommonChorusPjQuery groupById() Group by the id column
 * @method CommonChorusPjQuery groupByOrganisme() Group by the organisme column
 * @method CommonChorusPjQuery groupByIdEchange() Group by the id_echange column
 * @method CommonChorusPjQuery groupByNomFichier() Group by the nom_fichier column
 * @method CommonChorusPjQuery groupByFichier() Group by the fichier column
 * @method CommonChorusPjQuery groupByHorodatage() Group by the horodatage column
 * @method CommonChorusPjQuery groupByUntrusteddate() Group by the untrusteddate column
 * @method CommonChorusPjQuery groupByTaille() Group by the taille column
 *
 * @method CommonChorusPjQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonChorusPjQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonChorusPjQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonChorusPjQuery leftJoinCommonChorusEchange($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonChorusEchange relation
 * @method CommonChorusPjQuery rightJoinCommonChorusEchange($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonChorusEchange relation
 * @method CommonChorusPjQuery innerJoinCommonChorusEchange($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonChorusEchange relation
 *
 * @method CommonChorusPj findOne(PropelPDO $con = null) Return the first CommonChorusPj matching the query
 * @method CommonChorusPj findOneOrCreate(PropelPDO $con = null) Return the first CommonChorusPj matching the query, or a new CommonChorusPj object populated from the query conditions when no match is found
 *
 * @method CommonChorusPj findOneById(int $id) Return the first CommonChorusPj filtered by the id column
 * @method CommonChorusPj findOneByOrganisme(string $organisme) Return the first CommonChorusPj filtered by the organisme column
 * @method CommonChorusPj findOneByIdEchange(int $id_echange) Return the first CommonChorusPj filtered by the id_echange column
 * @method CommonChorusPj findOneByNomFichier(string $nom_fichier) Return the first CommonChorusPj filtered by the nom_fichier column
 * @method CommonChorusPj findOneByFichier(string $fichier) Return the first CommonChorusPj filtered by the fichier column
 * @method CommonChorusPj findOneByHorodatage(resource $horodatage) Return the first CommonChorusPj filtered by the horodatage column
 * @method CommonChorusPj findOneByUntrusteddate(string $untrusteddate) Return the first CommonChorusPj filtered by the untrusteddate column
 * @method CommonChorusPj findOneByTaille(int $taille) Return the first CommonChorusPj filtered by the taille column
 *
 * @method array findById(int $id) Return CommonChorusPj objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonChorusPj objects filtered by the organisme column
 * @method array findByIdEchange(int $id_echange) Return CommonChorusPj objects filtered by the id_echange column
 * @method array findByNomFichier(string $nom_fichier) Return CommonChorusPj objects filtered by the nom_fichier column
 * @method array findByFichier(string $fichier) Return CommonChorusPj objects filtered by the fichier column
 * @method array findByHorodatage(resource $horodatage) Return CommonChorusPj objects filtered by the horodatage column
 * @method array findByUntrusteddate(string $untrusteddate) Return CommonChorusPj objects filtered by the untrusteddate column
 * @method array findByTaille(int $taille) Return CommonChorusPj objects filtered by the taille column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonChorusPjQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonChorusPjQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonChorusPj', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonChorusPjQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonChorusPjQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonChorusPjQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonChorusPjQuery) {
            return $criteria;
        }
        $query = new CommonChorusPjQuery();
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
     * @return   CommonChorusPj|CommonChorusPj[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonChorusPjPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonChorusPjPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonChorusPj A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `id_echange`, `nom_fichier`, `fichier`, `horodatage`, `untrusteddate`, `taille` FROM `Chorus_pj` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonChorusPj();
            $obj->hydrate($row);
            CommonChorusPjPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonChorusPj|CommonChorusPj[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonChorusPj[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonChorusPjQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonChorusPjPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonChorusPjPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonChorusPjQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonChorusPjPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonChorusPjPeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonChorusPjQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonChorusPjPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonChorusPjPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonChorusPjPeer::ID, $id, $comparison);
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
     * @return CommonChorusPjQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonChorusPjPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the id_echange column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEchange(1234); // WHERE id_echange = 1234
     * $query->filterByIdEchange(array(12, 34)); // WHERE id_echange IN (12, 34)
     * $query->filterByIdEchange(array('min' => 12)); // WHERE id_echange >= 12
     * $query->filterByIdEchange(array('max' => 12)); // WHERE id_echange <= 12
     * </code>
     *
     * @see       filterByCommonChorusEchange()
     *
     * @param     mixed $idEchange The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusPjQuery The current query, for fluid interface
     */
    public function filterByIdEchange($idEchange = null, $comparison = null)
    {
        if (is_array($idEchange)) {
            $useMinMax = false;
            if (isset($idEchange['min'])) {
                $this->addUsingAlias(CommonChorusPjPeer::ID_ECHANGE, $idEchange['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEchange['max'])) {
                $this->addUsingAlias(CommonChorusPjPeer::ID_ECHANGE, $idEchange['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonChorusPjPeer::ID_ECHANGE, $idEchange, $comparison);
    }

    /**
     * Filter the query on the nom_fichier column
     *
     * Example usage:
     * <code>
     * $query->filterByNomFichier('fooValue');   // WHERE nom_fichier = 'fooValue'
     * $query->filterByNomFichier('%fooValue%'); // WHERE nom_fichier LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomFichier The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusPjQuery The current query, for fluid interface
     */
    public function filterByNomFichier($nomFichier = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomFichier)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomFichier)) {
                $nomFichier = str_replace('*', '%', $nomFichier);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusPjPeer::NOM_FICHIER, $nomFichier, $comparison);
    }

    /**
     * Filter the query on the fichier column
     *
     * Example usage:
     * <code>
     * $query->filterByFichier('fooValue');   // WHERE fichier = 'fooValue'
     * $query->filterByFichier('%fooValue%'); // WHERE fichier LIKE '%fooValue%'
     * </code>
     *
     * @param     string $fichier The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusPjQuery The current query, for fluid interface
     */
    public function filterByFichier($fichier = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($fichier)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $fichier)) {
                $fichier = str_replace('*', '%', $fichier);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusPjPeer::FICHIER, $fichier, $comparison);
    }

    /**
     * Filter the query on the horodatage column
     *
     * @param     mixed $horodatage The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusPjQuery The current query, for fluid interface
     */
    public function filterByHorodatage($horodatage = null, $comparison = null)
    {

        return $this->addUsingAlias(CommonChorusPjPeer::HORODATAGE, $horodatage, $comparison);
    }

    /**
     * Filter the query on the untrusteddate column
     *
     * Example usage:
     * <code>
     * $query->filterByUntrusteddate('fooValue');   // WHERE untrusteddate = 'fooValue'
     * $query->filterByUntrusteddate('%fooValue%'); // WHERE untrusteddate LIKE '%fooValue%'
     * </code>
     *
     * @param     string $untrusteddate The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusPjQuery The current query, for fluid interface
     */
    public function filterByUntrusteddate($untrusteddate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($untrusteddate)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $untrusteddate)) {
                $untrusteddate = str_replace('*', '%', $untrusteddate);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonChorusPjPeer::UNTRUSTEDDATE, $untrusteddate, $comparison);
    }

    /**
     * Filter the query on the taille column
     *
     * Example usage:
     * <code>
     * $query->filterByTaille(1234); // WHERE taille = 1234
     * $query->filterByTaille(array(12, 34)); // WHERE taille IN (12, 34)
     * $query->filterByTaille(array('min' => 12)); // WHERE taille >= 12
     * $query->filterByTaille(array('max' => 12)); // WHERE taille <= 12
     * </code>
     *
     * @param     mixed $taille The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonChorusPjQuery The current query, for fluid interface
     */
    public function filterByTaille($taille = null, $comparison = null)
    {
        if (is_array($taille)) {
            $useMinMax = false;
            if (isset($taille['min'])) {
                $this->addUsingAlias(CommonChorusPjPeer::TAILLE, $taille['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($taille['max'])) {
                $this->addUsingAlias(CommonChorusPjPeer::TAILLE, $taille['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonChorusPjPeer::TAILLE, $taille, $comparison);
    }

    /**
     * Filter the query by a related CommonChorusEchange object
     *
     * @param   CommonChorusEchange $commonChorusEchange The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonChorusPjQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonChorusEchange($commonChorusEchange, $comparison = null)
    {
        if ($commonChorusEchange instanceof CommonChorusEchange) {
            return $this
                ->addUsingAlias(CommonChorusPjPeer::ID_ECHANGE, $commonChorusEchange->getId(), $comparison)
                ->addUsingAlias(CommonChorusPjPeer::ORGANISME, $commonChorusEchange->getOrganisme(), $comparison);
        } else {
            throw new PropelException('filterByCommonChorusEchange() only accepts arguments of type CommonChorusEchange');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonChorusEchange relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonChorusPjQuery The current query, for fluid interface
     */
    public function joinCommonChorusEchange($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonChorusEchange');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonChorusEchange');
        }

        return $this;
    }

    /**
     * Use the CommonChorusEchange relation CommonChorusEchange object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonChorusEchangeQuery A secondary query class using the current class as primary query
     */
    public function useCommonChorusEchangeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonChorusEchange($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonChorusEchange', 'CommonChorusEchangeQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonChorusPj $commonChorusPj Object to remove from the list of results
     *
     * @return CommonChorusPjQuery The current query, for fluid interface
     */
    public function prune($commonChorusPj = null)
    {
        if ($commonChorusPj) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonChorusPjPeer::ID), $commonChorusPj->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonChorusPjPeer::ORGANISME), $commonChorusPj->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
