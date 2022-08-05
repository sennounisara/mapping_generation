<?php


/**
 * Base class that represents a query for the 'Journaux' table.
 *
 * 
 *
 * @method CommonJournauxQuery orderByIdJournal($order = Criteria::ASC) Order by the ID_JOURNAL column
 * @method CommonJournauxQuery orderByOrganisme($order = Criteria::ASC) Order by the ORGANISME column
 * @method CommonJournauxQuery orderByIdCentrale($order = Criteria::ASC) Order by the ID_CENTRALE column
 * @method CommonJournauxQuery orderByNomJournal($order = Criteria::ASC) Order by the NOM_JOURNAL column
 *
 * @method CommonJournauxQuery groupByIdJournal() Group by the ID_JOURNAL column
 * @method CommonJournauxQuery groupByOrganisme() Group by the ORGANISME column
 * @method CommonJournauxQuery groupByIdCentrale() Group by the ID_CENTRALE column
 * @method CommonJournauxQuery groupByNomJournal() Group by the NOM_JOURNAL column
 *
 * @method CommonJournauxQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonJournauxQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonJournauxQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonJournaux findOne(PropelPDO $con = null) Return the first CommonJournaux matching the query
 * @method CommonJournaux findOneOrCreate(PropelPDO $con = null) Return the first CommonJournaux matching the query, or a new CommonJournaux object populated from the query conditions when no match is found
 *
 * @method CommonJournaux findOneByIdJournal(int $ID_JOURNAL) Return the first CommonJournaux filtered by the ID_JOURNAL column
 * @method CommonJournaux findOneByOrganisme(string $ORGANISME) Return the first CommonJournaux filtered by the ORGANISME column
 * @method CommonJournaux findOneByIdCentrale(int $ID_CENTRALE) Return the first CommonJournaux filtered by the ID_CENTRALE column
 * @method CommonJournaux findOneByNomJournal(string $NOM_JOURNAL) Return the first CommonJournaux filtered by the NOM_JOURNAL column
 *
 * @method array findByIdJournal(int $ID_JOURNAL) Return CommonJournaux objects filtered by the ID_JOURNAL column
 * @method array findByOrganisme(string $ORGANISME) Return CommonJournaux objects filtered by the ORGANISME column
 * @method array findByIdCentrale(int $ID_CENTRALE) Return CommonJournaux objects filtered by the ID_CENTRALE column
 * @method array findByNomJournal(string $NOM_JOURNAL) Return CommonJournaux objects filtered by the NOM_JOURNAL column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonJournauxQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonJournauxQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonJournaux', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonJournauxQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonJournauxQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonJournauxQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonJournauxQuery) {
            return $criteria;
        }
        $query = new CommonJournauxQuery();
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
                         A Primary key composition: [$ID_JOURNAL, $ORGANISME]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonJournaux|CommonJournaux[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonJournauxPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonJournauxPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonJournaux A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_JOURNAL`, `ORGANISME`, `ID_CENTRALE`, `NOM_JOURNAL` FROM `Journaux` WHERE `ID_JOURNAL` = :p0 AND `ORGANISME` = :p1';
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
            $obj = new CommonJournaux();
            $obj->hydrate($row);
            CommonJournauxPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonJournaux|CommonJournaux[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonJournaux[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonJournauxQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonJournauxPeer::ID_JOURNAL, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonJournauxPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonJournauxQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonJournauxPeer::ID_JOURNAL, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonJournauxPeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the ID_JOURNAL column
     *
     * Example usage:
     * <code>
     * $query->filterByIdJournal(1234); // WHERE ID_JOURNAL = 1234
     * $query->filterByIdJournal(array(12, 34)); // WHERE ID_JOURNAL IN (12, 34)
     * $query->filterByIdJournal(array('min' => 12)); // WHERE ID_JOURNAL >= 12
     * $query->filterByIdJournal(array('max' => 12)); // WHERE ID_JOURNAL <= 12
     * </code>
     *
     * @param     mixed $idJournal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonJournauxQuery The current query, for fluid interface
     */
    public function filterByIdJournal($idJournal = null, $comparison = null)
    {
        if (is_array($idJournal)) {
            $useMinMax = false;
            if (isset($idJournal['min'])) {
                $this->addUsingAlias(CommonJournauxPeer::ID_JOURNAL, $idJournal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idJournal['max'])) {
                $this->addUsingAlias(CommonJournauxPeer::ID_JOURNAL, $idJournal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonJournauxPeer::ID_JOURNAL, $idJournal, $comparison);
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
     * @return CommonJournauxQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonJournauxPeer::ORGANISME, $organisme, $comparison);
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
     * @return CommonJournauxQuery The current query, for fluid interface
     */
    public function filterByIdCentrale($idCentrale = null, $comparison = null)
    {
        if (is_array($idCentrale)) {
            $useMinMax = false;
            if (isset($idCentrale['min'])) {
                $this->addUsingAlias(CommonJournauxPeer::ID_CENTRALE, $idCentrale['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCentrale['max'])) {
                $this->addUsingAlias(CommonJournauxPeer::ID_CENTRALE, $idCentrale['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonJournauxPeer::ID_CENTRALE, $idCentrale, $comparison);
    }

    /**
     * Filter the query on the NOM_JOURNAL column
     *
     * Example usage:
     * <code>
     * $query->filterByNomJournal('fooValue');   // WHERE NOM_JOURNAL = 'fooValue'
     * $query->filterByNomJournal('%fooValue%'); // WHERE NOM_JOURNAL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomJournal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonJournauxQuery The current query, for fluid interface
     */
    public function filterByNomJournal($nomJournal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomJournal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomJournal)) {
                $nomJournal = str_replace('*', '%', $nomJournal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonJournauxPeer::NOM_JOURNAL, $nomJournal, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonJournaux $commonJournaux Object to remove from the list of results
     *
     * @return CommonJournauxQuery The current query, for fluid interface
     */
    public function prune($commonJournaux = null)
    {
        if ($commonJournaux) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonJournauxPeer::ID_JOURNAL), $commonJournaux->getIdJournal(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonJournauxPeer::ORGANISME), $commonJournaux->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
