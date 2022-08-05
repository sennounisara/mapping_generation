<?php


/**
 * Base class that represents a query for the 'NewsletterPieceJointe' table.
 *
 * 
 *
 * @method CommonNewsletterPieceJointeQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonNewsletterPieceJointeQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonNewsletterPieceJointeQuery orderByIdNewsletter($order = Criteria::ASC) Order by the id_newsletter column
 * @method CommonNewsletterPieceJointeQuery orderByNomFichier($order = Criteria::ASC) Order by the nom_fichier column
 * @method CommonNewsletterPieceJointeQuery orderByPiece($order = Criteria::ASC) Order by the piece column
 * @method CommonNewsletterPieceJointeQuery orderByHorodatage($order = Criteria::ASC) Order by the horodatage column
 * @method CommonNewsletterPieceJointeQuery orderByUntrusteddate($order = Criteria::ASC) Order by the untrusteddate column
 * @method CommonNewsletterPieceJointeQuery orderByTaille($order = Criteria::ASC) Order by the taille column
 *
 * @method CommonNewsletterPieceJointeQuery groupById() Group by the id column
 * @method CommonNewsletterPieceJointeQuery groupByOrganisme() Group by the organisme column
 * @method CommonNewsletterPieceJointeQuery groupByIdNewsletter() Group by the id_newsletter column
 * @method CommonNewsletterPieceJointeQuery groupByNomFichier() Group by the nom_fichier column
 * @method CommonNewsletterPieceJointeQuery groupByPiece() Group by the piece column
 * @method CommonNewsletterPieceJointeQuery groupByHorodatage() Group by the horodatage column
 * @method CommonNewsletterPieceJointeQuery groupByUntrusteddate() Group by the untrusteddate column
 * @method CommonNewsletterPieceJointeQuery groupByTaille() Group by the taille column
 *
 * @method CommonNewsletterPieceJointeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonNewsletterPieceJointeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonNewsletterPieceJointeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonNewsletterPieceJointeQuery leftJoinCommonNewsletter($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonNewsletter relation
 * @method CommonNewsletterPieceJointeQuery rightJoinCommonNewsletter($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonNewsletter relation
 * @method CommonNewsletterPieceJointeQuery innerJoinCommonNewsletter($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonNewsletter relation
 *
 * @method CommonNewsletterPieceJointe findOne(PropelPDO $con = null) Return the first CommonNewsletterPieceJointe matching the query
 * @method CommonNewsletterPieceJointe findOneOrCreate(PropelPDO $con = null) Return the first CommonNewsletterPieceJointe matching the query, or a new CommonNewsletterPieceJointe object populated from the query conditions when no match is found
 *
 * @method CommonNewsletterPieceJointe findOneById(int $id) Return the first CommonNewsletterPieceJointe filtered by the id column
 * @method CommonNewsletterPieceJointe findOneByOrganisme(string $organisme) Return the first CommonNewsletterPieceJointe filtered by the organisme column
 * @method CommonNewsletterPieceJointe findOneByIdNewsletter(int $id_newsletter) Return the first CommonNewsletterPieceJointe filtered by the id_newsletter column
 * @method CommonNewsletterPieceJointe findOneByNomFichier(string $nom_fichier) Return the first CommonNewsletterPieceJointe filtered by the nom_fichier column
 * @method CommonNewsletterPieceJointe findOneByPiece(int $piece) Return the first CommonNewsletterPieceJointe filtered by the piece column
 * @method CommonNewsletterPieceJointe findOneByHorodatage(resource $horodatage) Return the first CommonNewsletterPieceJointe filtered by the horodatage column
 * @method CommonNewsletterPieceJointe findOneByUntrusteddate(string $untrusteddate) Return the first CommonNewsletterPieceJointe filtered by the untrusteddate column
 * @method CommonNewsletterPieceJointe findOneByTaille(string $taille) Return the first CommonNewsletterPieceJointe filtered by the taille column
 *
 * @method array findById(int $id) Return CommonNewsletterPieceJointe objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonNewsletterPieceJointe objects filtered by the organisme column
 * @method array findByIdNewsletter(int $id_newsletter) Return CommonNewsletterPieceJointe objects filtered by the id_newsletter column
 * @method array findByNomFichier(string $nom_fichier) Return CommonNewsletterPieceJointe objects filtered by the nom_fichier column
 * @method array findByPiece(int $piece) Return CommonNewsletterPieceJointe objects filtered by the piece column
 * @method array findByHorodatage(resource $horodatage) Return CommonNewsletterPieceJointe objects filtered by the horodatage column
 * @method array findByUntrusteddate(string $untrusteddate) Return CommonNewsletterPieceJointe objects filtered by the untrusteddate column
 * @method array findByTaille(string $taille) Return CommonNewsletterPieceJointe objects filtered by the taille column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonNewsletterPieceJointeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonNewsletterPieceJointeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonNewsletterPieceJointe', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonNewsletterPieceJointeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonNewsletterPieceJointeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonNewsletterPieceJointeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonNewsletterPieceJointeQuery) {
            return $criteria;
        }
        $query = new CommonNewsletterPieceJointeQuery();
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
     * @return   CommonNewsletterPieceJointe|CommonNewsletterPieceJointe[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonNewsletterPieceJointePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonNewsletterPieceJointePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonNewsletterPieceJointe A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `id_newsletter`, `nom_fichier`, `piece`, `horodatage`, `untrusteddate`, `taille` FROM `NewsletterPieceJointe` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonNewsletterPieceJointe();
            $obj->hydrate($row);
            CommonNewsletterPieceJointePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonNewsletterPieceJointe|CommonNewsletterPieceJointe[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonNewsletterPieceJointe[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonNewsletterPieceJointeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonNewsletterPieceJointePeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonNewsletterPieceJointePeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonNewsletterPieceJointeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonNewsletterPieceJointePeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonNewsletterPieceJointePeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonNewsletterPieceJointeQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonNewsletterPieceJointePeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonNewsletterPieceJointePeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonNewsletterPieceJointePeer::ID, $id, $comparison);
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
     * @return CommonNewsletterPieceJointeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonNewsletterPieceJointePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the id_newsletter column
     *
     * Example usage:
     * <code>
     * $query->filterByIdNewsletter(1234); // WHERE id_newsletter = 1234
     * $query->filterByIdNewsletter(array(12, 34)); // WHERE id_newsletter IN (12, 34)
     * $query->filterByIdNewsletter(array('min' => 12)); // WHERE id_newsletter >= 12
     * $query->filterByIdNewsletter(array('max' => 12)); // WHERE id_newsletter <= 12
     * </code>
     *
     * @see       filterByCommonNewsletter()
     *
     * @param     mixed $idNewsletter The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonNewsletterPieceJointeQuery The current query, for fluid interface
     */
    public function filterByIdNewsletter($idNewsletter = null, $comparison = null)
    {
        if (is_array($idNewsletter)) {
            $useMinMax = false;
            if (isset($idNewsletter['min'])) {
                $this->addUsingAlias(CommonNewsletterPieceJointePeer::ID_NEWSLETTER, $idNewsletter['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idNewsletter['max'])) {
                $this->addUsingAlias(CommonNewsletterPieceJointePeer::ID_NEWSLETTER, $idNewsletter['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonNewsletterPieceJointePeer::ID_NEWSLETTER, $idNewsletter, $comparison);
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
     * @return CommonNewsletterPieceJointeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonNewsletterPieceJointePeer::NOM_FICHIER, $nomFichier, $comparison);
    }

    /**
     * Filter the query on the piece column
     *
     * Example usage:
     * <code>
     * $query->filterByPiece(1234); // WHERE piece = 1234
     * $query->filterByPiece(array(12, 34)); // WHERE piece IN (12, 34)
     * $query->filterByPiece(array('min' => 12)); // WHERE piece >= 12
     * $query->filterByPiece(array('max' => 12)); // WHERE piece <= 12
     * </code>
     *
     * @param     mixed $piece The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonNewsletterPieceJointeQuery The current query, for fluid interface
     */
    public function filterByPiece($piece = null, $comparison = null)
    {
        if (is_array($piece)) {
            $useMinMax = false;
            if (isset($piece['min'])) {
                $this->addUsingAlias(CommonNewsletterPieceJointePeer::PIECE, $piece['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($piece['max'])) {
                $this->addUsingAlias(CommonNewsletterPieceJointePeer::PIECE, $piece['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonNewsletterPieceJointePeer::PIECE, $piece, $comparison);
    }

    /**
     * Filter the query on the horodatage column
     *
     * @param     mixed $horodatage The value to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonNewsletterPieceJointeQuery The current query, for fluid interface
     */
    public function filterByHorodatage($horodatage = null, $comparison = null)
    {

        return $this->addUsingAlias(CommonNewsletterPieceJointePeer::HORODATAGE, $horodatage, $comparison);
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
     * @return CommonNewsletterPieceJointeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonNewsletterPieceJointePeer::UNTRUSTEDDATE, $untrusteddate, $comparison);
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
     * @return CommonNewsletterPieceJointeQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonNewsletterPieceJointePeer::TAILLE, $taille, $comparison);
    }

    /**
     * Filter the query by a related CommonNewsletter object
     *
     * @param   CommonNewsletter|PropelObjectCollection $commonNewsletter The related object(s) to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonNewsletterPieceJointeQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonNewsletter($commonNewsletter, $comparison = null)
    {
        if ($commonNewsletter instanceof CommonNewsletter) {
            return $this
                ->addUsingAlias(CommonNewsletterPieceJointePeer::ID_NEWSLETTER, $commonNewsletter->getId(), $comparison);
        } elseif ($commonNewsletter instanceof PropelObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            return $this
                ->addUsingAlias(CommonNewsletterPieceJointePeer::ID_NEWSLETTER, $commonNewsletter->toKeyValue('Id', 'Id'), $comparison);
        } else {
            throw new PropelException('filterByCommonNewsletter() only accepts arguments of type CommonNewsletter or PropelCollection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonNewsletter relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonNewsletterPieceJointeQuery The current query, for fluid interface
     */
    public function joinCommonNewsletter($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonNewsletter');

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
            $this->addJoinObject($join, 'CommonNewsletter');
        }

        return $this;
    }

    /**
     * Use the CommonNewsletter relation CommonNewsletter object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonNewsletterQuery A secondary query class using the current class as primary query
     */
    public function useCommonNewsletterQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonNewsletter($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonNewsletter', 'CommonNewsletterQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonNewsletterPieceJointe $commonNewsletterPieceJointe Object to remove from the list of results
     *
     * @return CommonNewsletterPieceJointeQuery The current query, for fluid interface
     */
    public function prune($commonNewsletterPieceJointe = null)
    {
        if ($commonNewsletterPieceJointe) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonNewsletterPieceJointePeer::ID), $commonNewsletterPieceJointe->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonNewsletterPieceJointePeer::ORGANISME), $commonNewsletterPieceJointe->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
