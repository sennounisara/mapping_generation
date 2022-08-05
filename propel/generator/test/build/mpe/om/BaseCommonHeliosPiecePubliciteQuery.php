<?php


/**
 * Base class that represents a query for the 'Helios_piece_publicite' table.
 *
 * 
 *
 * @method CommonHeliosPiecePubliciteQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonHeliosPiecePubliciteQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonHeliosPiecePubliciteQuery orderByNomFichier($order = Criteria::ASC) Order by the nom_fichier column
 * @method CommonHeliosPiecePubliciteQuery orderByFichier($order = Criteria::ASC) Order by the fichier column
 * @method CommonHeliosPiecePubliciteQuery orderByHorodatage($order = Criteria::ASC) Order by the horodatage column
 * @method CommonHeliosPiecePubliciteQuery orderByUntrusteddate($order = Criteria::ASC) Order by the untrusteddate column
 * @method CommonHeliosPiecePubliciteQuery orderByTaille($order = Criteria::ASC) Order by the taille column
 * @method CommonHeliosPiecePubliciteQuery orderByConsultationRef($order = Criteria::ASC) Order by the consultation_ref column
 *
 * @method CommonHeliosPiecePubliciteQuery groupById() Group by the id column
 * @method CommonHeliosPiecePubliciteQuery groupByOrganisme() Group by the organisme column
 * @method CommonHeliosPiecePubliciteQuery groupByNomFichier() Group by the nom_fichier column
 * @method CommonHeliosPiecePubliciteQuery groupByFichier() Group by the fichier column
 * @method CommonHeliosPiecePubliciteQuery groupByHorodatage() Group by the horodatage column
 * @method CommonHeliosPiecePubliciteQuery groupByUntrusteddate() Group by the untrusteddate column
 * @method CommonHeliosPiecePubliciteQuery groupByTaille() Group by the taille column
 * @method CommonHeliosPiecePubliciteQuery groupByConsultationRef() Group by the consultation_ref column
 *
 * @method CommonHeliosPiecePubliciteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonHeliosPiecePubliciteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonHeliosPiecePubliciteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonHeliosPiecePubliciteQuery leftJoinCommonConsultation($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonConsultation relation
 * @method CommonHeliosPiecePubliciteQuery rightJoinCommonConsultation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonConsultation relation
 * @method CommonHeliosPiecePubliciteQuery innerJoinCommonConsultation($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonConsultation relation
 *
 * @method CommonHeliosPiecePublicite findOne(PropelPDO $con = null) Return the first CommonHeliosPiecePublicite matching the query
 * @method CommonHeliosPiecePublicite findOneOrCreate(PropelPDO $con = null) Return the first CommonHeliosPiecePublicite matching the query, or a new CommonHeliosPiecePublicite object populated from the query conditions when no match is found
 *
 * @method CommonHeliosPiecePublicite findOneById(int $id) Return the first CommonHeliosPiecePublicite filtered by the id column
 * @method CommonHeliosPiecePublicite findOneByOrganisme(string $organisme) Return the first CommonHeliosPiecePublicite filtered by the organisme column
 * @method CommonHeliosPiecePublicite findOneByNomFichier(string $nom_fichier) Return the first CommonHeliosPiecePublicite filtered by the nom_fichier column
 * @method CommonHeliosPiecePublicite findOneByFichier(int $fichier) Return the first CommonHeliosPiecePublicite filtered by the fichier column
 * @method CommonHeliosPiecePublicite findOneByHorodatage(resource $horodatage) Return the first CommonHeliosPiecePublicite filtered by the horodatage column
 * @method CommonHeliosPiecePublicite findOneByUntrusteddate(string $untrusteddate) Return the first CommonHeliosPiecePublicite filtered by the untrusteddate column
 * @method CommonHeliosPiecePublicite findOneByTaille(string $taille) Return the first CommonHeliosPiecePublicite filtered by the taille column
 * @method CommonHeliosPiecePublicite findOneByConsultationRef(int $consultation_ref) Return the first CommonHeliosPiecePublicite filtered by the consultation_ref column
 *
 * @method array findById(int $id) Return CommonHeliosPiecePublicite objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonHeliosPiecePublicite objects filtered by the organisme column
 * @method array findByNomFichier(string $nom_fichier) Return CommonHeliosPiecePublicite objects filtered by the nom_fichier column
 * @method array findByFichier(int $fichier) Return CommonHeliosPiecePublicite objects filtered by the fichier column
 * @method array findByHorodatage(resource $horodatage) Return CommonHeliosPiecePublicite objects filtered by the horodatage column
 * @method array findByUntrusteddate(string $untrusteddate) Return CommonHeliosPiecePublicite objects filtered by the untrusteddate column
 * @method array findByTaille(string $taille) Return CommonHeliosPiecePublicite objects filtered by the taille column
 * @method array findByConsultationRef(int $consultation_ref) Return CommonHeliosPiecePublicite objects filtered by the consultation_ref column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonHeliosPiecePubliciteQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonHeliosPiecePubliciteQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonHeliosPiecePublicite', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonHeliosPiecePubliciteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonHeliosPiecePubliciteQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonHeliosPiecePubliciteQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonHeliosPiecePubliciteQuery) {
            return $criteria;
        }
        $query = new CommonHeliosPiecePubliciteQuery();
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
     * @return   CommonHeliosPiecePublicite|CommonHeliosPiecePublicite[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonHeliosPiecePublicitePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonHeliosPiecePublicitePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonHeliosPiecePublicite A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `nom_fichier`, `fichier`, `horodatage`, `untrusteddate`, `taille`, `consultation_ref` FROM `Helios_piece_publicite` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonHeliosPiecePublicite();
            $obj->hydrate($row);
            CommonHeliosPiecePublicitePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonHeliosPiecePublicite|CommonHeliosPiecePublicite[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonHeliosPiecePublicite[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonHeliosPiecePubliciteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonHeliosPiecePublicitePeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonHeliosPiecePublicitePeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonHeliosPiecePubliciteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonHeliosPiecePublicitePeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonHeliosPiecePublicitePeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonHeliosPiecePubliciteQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonHeliosPiecePublicitePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonHeliosPiecePublicitePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonHeliosPiecePublicitePeer::ID, $id, $comparison);
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
     * @return CommonHeliosPiecePubliciteQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonHeliosPiecePublicitePeer::ORGANISME, $organisme, $comparison);
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
     * @return CommonHeliosPiecePubliciteQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonHeliosPiecePublicitePeer::NOM_FICHIER, $nomFichier, $comparison);
    }

    /**
     * Filter the query on the fichier column
     *
     * Example usage:
     * <code>
     * $query->filterByFichier(1234); // WHERE fichier = 1234
     * $query->filterByFichier(array(12, 34)); // WHERE fichier IN (12, 34)
     * $query->filterByFichier(array('min' => 12)); // WHERE fichier >= 12
     * $query->filterByFichier(array('max' => 12)); // WHERE fichier <= 12
     * </code>
     *
     * @param     mixed $fichier The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosPiecePubliciteQuery The current query, for fluid interface
     */
    public function filterByFichier($fichier = null, $comparison = null)
    {
        if (is_array($fichier)) {
            $useMinMax = false;
            if (isset($fichier['min'])) {
                $this->addUsingAlias(CommonHeliosPiecePublicitePeer::FICHIER, $fichier['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fichier['max'])) {
                $this->addUsingAlias(CommonHeliosPiecePublicitePeer::FICHIER, $fichier['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonHeliosPiecePublicitePeer::FICHIER, $fichier, $comparison);
    }

    /**
     * Filter the query on the horodatage column
     *
     * @param     mixed $horodatage The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosPiecePubliciteQuery The current query, for fluid interface
     */
    public function filterByHorodatage($horodatage = null, $comparison = null)
    {

        return $this->addUsingAlias(CommonHeliosPiecePublicitePeer::HORODATAGE, $horodatage, $comparison);
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
     * @return CommonHeliosPiecePubliciteQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonHeliosPiecePublicitePeer::UNTRUSTEDDATE, $untrusteddate, $comparison);
    }

    /**
     * Filter the query on the taille column
     *
     * Example usage:
     * <code>
     * $query->filterByTaille('fooValue');   // WHERE taille = 'fooValue'
     * $query->filterByTaille('%fooValue%'); // WHERE taille LIKE '%fooValue%'
     * </code>
     *
     * @param     string $taille The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosPiecePubliciteQuery The current query, for fluid interface
     */
    public function filterByTaille($taille = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($taille)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $taille)) {
                $taille = str_replace('*', '%', $taille);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonHeliosPiecePublicitePeer::TAILLE, $taille, $comparison);
    }

    /**
     * Filter the query on the consultation_ref column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultationRef(1234); // WHERE consultation_ref = 1234
     * $query->filterByConsultationRef(array(12, 34)); // WHERE consultation_ref IN (12, 34)
     * $query->filterByConsultationRef(array('min' => 12)); // WHERE consultation_ref >= 12
     * $query->filterByConsultationRef(array('max' => 12)); // WHERE consultation_ref <= 12
     * </code>
     *
     * @see       filterByCommonConsultation()
     *
     * @param     mixed $consultationRef The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonHeliosPiecePubliciteQuery The current query, for fluid interface
     */
    public function filterByConsultationRef($consultationRef = null, $comparison = null)
    {
        if (is_array($consultationRef)) {
            $useMinMax = false;
            if (isset($consultationRef['min'])) {
                $this->addUsingAlias(CommonHeliosPiecePublicitePeer::CONSULTATION_REF, $consultationRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($consultationRef['max'])) {
                $this->addUsingAlias(CommonHeliosPiecePublicitePeer::CONSULTATION_REF, $consultationRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonHeliosPiecePublicitePeer::CONSULTATION_REF, $consultationRef, $comparison);
    }

    /**
     * Filter the query by a related CommonConsultation object
     *
     * @param   CommonConsultation $commonConsultation The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonHeliosPiecePubliciteQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonConsultation($commonConsultation, $comparison = null)
    {
        if ($commonConsultation instanceof CommonConsultation) {
            return $this
                ->addUsingAlias(CommonHeliosPiecePublicitePeer::ORGANISME, $commonConsultation->getOrganisme(), $comparison)
                ->addUsingAlias(CommonHeliosPiecePublicitePeer::CONSULTATION_REF, $commonConsultation->getReference(), $comparison);
        } else {
            throw new PropelException('filterByCommonConsultation() only accepts arguments of type CommonConsultation');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonConsultation relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonHeliosPiecePubliciteQuery The current query, for fluid interface
     */
    public function joinCommonConsultation($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonConsultation');

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
            $this->addJoinObject($join, 'CommonConsultation');
        }

        return $this;
    }

    /**
     * Use the CommonConsultation relation CommonConsultation object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonConsultationQuery A secondary query class using the current class as primary query
     */
    public function useCommonConsultationQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonConsultation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonConsultation', 'CommonConsultationQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonHeliosPiecePublicite $commonHeliosPiecePublicite Object to remove from the list of results
     *
     * @return CommonHeliosPiecePubliciteQuery The current query, for fluid interface
     */
    public function prune($commonHeliosPiecePublicite = null)
    {
        if ($commonHeliosPiecePublicite) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonHeliosPiecePublicitePeer::ID), $commonHeliosPiecePublicite->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonHeliosPiecePublicitePeer::ORGANISME), $commonHeliosPiecePublicite->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
