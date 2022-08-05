<?php


/**
 * Base class that represents a query for the 'Destinataire_Pub' table.
 *
 * 
 *
 * @method CommonDestinatairePubQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonDestinatairePubQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonDestinatairePubQuery orderByIdAvis($order = Criteria::ASC) Order by the id_avis column
 * @method CommonDestinatairePubQuery orderByIdSupport($order = Criteria::ASC) Order by the id_support column
 * @method CommonDestinatairePubQuery orderByEtat($order = Criteria::ASC) Order by the etat column
 * @method CommonDestinatairePubQuery orderByDateModification($order = Criteria::ASC) Order by the date_modification column
 * @method CommonDestinatairePubQuery orderByDatePublication($order = Criteria::ASC) Order by the date_publication column
 *
 * @method CommonDestinatairePubQuery groupById() Group by the id column
 * @method CommonDestinatairePubQuery groupByOrganisme() Group by the organisme column
 * @method CommonDestinatairePubQuery groupByIdAvis() Group by the id_avis column
 * @method CommonDestinatairePubQuery groupByIdSupport() Group by the id_support column
 * @method CommonDestinatairePubQuery groupByEtat() Group by the etat column
 * @method CommonDestinatairePubQuery groupByDateModification() Group by the date_modification column
 * @method CommonDestinatairePubQuery groupByDatePublication() Group by the date_publication column
 *
 * @method CommonDestinatairePubQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonDestinatairePubQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonDestinatairePubQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonDestinatairePub findOne(PropelPDO $con = null) Return the first CommonDestinatairePub matching the query
 * @method CommonDestinatairePub findOneOrCreate(PropelPDO $con = null) Return the first CommonDestinatairePub matching the query, or a new CommonDestinatairePub object populated from the query conditions when no match is found
 *
 * @method CommonDestinatairePub findOneById(int $id) Return the first CommonDestinatairePub filtered by the id column
 * @method CommonDestinatairePub findOneByOrganisme(string $organisme) Return the first CommonDestinatairePub filtered by the organisme column
 * @method CommonDestinatairePub findOneByIdAvis(int $id_avis) Return the first CommonDestinatairePub filtered by the id_avis column
 * @method CommonDestinatairePub findOneByIdSupport(int $id_support) Return the first CommonDestinatairePub filtered by the id_support column
 * @method CommonDestinatairePub findOneByEtat(string $etat) Return the first CommonDestinatairePub filtered by the etat column
 * @method CommonDestinatairePub findOneByDateModification(string $date_modification) Return the first CommonDestinatairePub filtered by the date_modification column
 * @method CommonDestinatairePub findOneByDatePublication(string $date_publication) Return the first CommonDestinatairePub filtered by the date_publication column
 *
 * @method array findById(int $id) Return CommonDestinatairePub objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonDestinatairePub objects filtered by the organisme column
 * @method array findByIdAvis(int $id_avis) Return CommonDestinatairePub objects filtered by the id_avis column
 * @method array findByIdSupport(int $id_support) Return CommonDestinatairePub objects filtered by the id_support column
 * @method array findByEtat(string $etat) Return CommonDestinatairePub objects filtered by the etat column
 * @method array findByDateModification(string $date_modification) Return CommonDestinatairePub objects filtered by the date_modification column
 * @method array findByDatePublication(string $date_publication) Return CommonDestinatairePub objects filtered by the date_publication column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonDestinatairePubQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonDestinatairePubQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonDestinatairePub', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonDestinatairePubQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonDestinatairePubQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonDestinatairePubQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonDestinatairePubQuery) {
            return $criteria;
        }
        $query = new CommonDestinatairePubQuery();
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
     * @return   CommonDestinatairePub|CommonDestinatairePub[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonDestinatairePubPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonDestinatairePubPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonDestinatairePub A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `id_avis`, `id_support`, `etat`, `date_modification`, `date_publication` FROM `Destinataire_Pub` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonDestinatairePub();
            $obj->hydrate($row);
            CommonDestinatairePubPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonDestinatairePub|CommonDestinatairePub[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonDestinatairePub[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonDestinatairePubQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonDestinatairePubPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonDestinatairePubPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonDestinatairePubQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonDestinatairePubPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonDestinatairePubPeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonDestinatairePubQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonDestinatairePubPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonDestinatairePubPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDestinatairePubPeer::ID, $id, $comparison);
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
     * @return CommonDestinatairePubQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonDestinatairePubPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the id_avis column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAvis(1234); // WHERE id_avis = 1234
     * $query->filterByIdAvis(array(12, 34)); // WHERE id_avis IN (12, 34)
     * $query->filterByIdAvis(array('min' => 12)); // WHERE id_avis >= 12
     * $query->filterByIdAvis(array('max' => 12)); // WHERE id_avis <= 12
     * </code>
     *
     * @param     mixed $idAvis The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDestinatairePubQuery The current query, for fluid interface
     */
    public function filterByIdAvis($idAvis = null, $comparison = null)
    {
        if (is_array($idAvis)) {
            $useMinMax = false;
            if (isset($idAvis['min'])) {
                $this->addUsingAlias(CommonDestinatairePubPeer::ID_AVIS, $idAvis['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAvis['max'])) {
                $this->addUsingAlias(CommonDestinatairePubPeer::ID_AVIS, $idAvis['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDestinatairePubPeer::ID_AVIS, $idAvis, $comparison);
    }

    /**
     * Filter the query on the id_support column
     *
     * Example usage:
     * <code>
     * $query->filterByIdSupport(1234); // WHERE id_support = 1234
     * $query->filterByIdSupport(array(12, 34)); // WHERE id_support IN (12, 34)
     * $query->filterByIdSupport(array('min' => 12)); // WHERE id_support >= 12
     * $query->filterByIdSupport(array('max' => 12)); // WHERE id_support <= 12
     * </code>
     *
     * @param     mixed $idSupport The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDestinatairePubQuery The current query, for fluid interface
     */
    public function filterByIdSupport($idSupport = null, $comparison = null)
    {
        if (is_array($idSupport)) {
            $useMinMax = false;
            if (isset($idSupport['min'])) {
                $this->addUsingAlias(CommonDestinatairePubPeer::ID_SUPPORT, $idSupport['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idSupport['max'])) {
                $this->addUsingAlias(CommonDestinatairePubPeer::ID_SUPPORT, $idSupport['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonDestinatairePubPeer::ID_SUPPORT, $idSupport, $comparison);
    }

    /**
     * Filter the query on the etat column
     *
     * Example usage:
     * <code>
     * $query->filterByEtat('fooValue');   // WHERE etat = 'fooValue'
     * $query->filterByEtat('%fooValue%'); // WHERE etat LIKE '%fooValue%'
     * </code>
     *
     * @param     string $etat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDestinatairePubQuery The current query, for fluid interface
     */
    public function filterByEtat($etat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($etat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $etat)) {
                $etat = str_replace('*', '%', $etat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDestinatairePubPeer::ETAT, $etat, $comparison);
    }

    /**
     * Filter the query on the date_modification column
     *
     * Example usage:
     * <code>
     * $query->filterByDateModification('fooValue');   // WHERE date_modification = 'fooValue'
     * $query->filterByDateModification('%fooValue%'); // WHERE date_modification LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateModification The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDestinatairePubQuery The current query, for fluid interface
     */
    public function filterByDateModification($dateModification = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateModification)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateModification)) {
                $dateModification = str_replace('*', '%', $dateModification);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDestinatairePubPeer::DATE_MODIFICATION, $dateModification, $comparison);
    }

    /**
     * Filter the query on the date_publication column
     *
     * Example usage:
     * <code>
     * $query->filterByDatePublication('fooValue');   // WHERE date_publication = 'fooValue'
     * $query->filterByDatePublication('%fooValue%'); // WHERE date_publication LIKE '%fooValue%'
     * </code>
     *
     * @param     string $datePublication The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonDestinatairePubQuery The current query, for fluid interface
     */
    public function filterByDatePublication($datePublication = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($datePublication)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $datePublication)) {
                $datePublication = str_replace('*', '%', $datePublication);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonDestinatairePubPeer::DATE_PUBLICATION, $datePublication, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonDestinatairePub $commonDestinatairePub Object to remove from the list of results
     *
     * @return CommonDestinatairePubQuery The current query, for fluid interface
     */
    public function prune($commonDestinatairePub = null)
    {
        if ($commonDestinatairePub) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonDestinatairePubPeer::ID), $commonDestinatairePub->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonDestinatairePubPeer::ORGANISME), $commonDestinatairePub->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
