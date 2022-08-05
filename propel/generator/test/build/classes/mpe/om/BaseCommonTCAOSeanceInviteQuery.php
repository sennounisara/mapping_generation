<?php


/**
 * Base class that represents a query for the 't_CAO_Seance_Invite' table.
 *
 * 
 *
 * @method CommonTCAOSeanceInviteQuery orderByIdSeanceInvite($order = Criteria::ASC) Order by the id_seance_invite column
 * @method CommonTCAOSeanceInviteQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonTCAOSeanceInviteQuery orderByIdOrdreDePassage($order = Criteria::ASC) Order by the id_ordre_de_passage column
 * @method CommonTCAOSeanceInviteQuery orderByIdIntervenantExterne($order = Criteria::ASC) Order by the id_intervenant_externe column
 * @method CommonTCAOSeanceInviteQuery orderByIdAgent($order = Criteria::ASC) Order by the id_agent column
 * @method CommonTCAOSeanceInviteQuery orderByIdRefValTypeVoix($order = Criteria::ASC) Order by the id_ref_val_type_voix column
 *
 * @method CommonTCAOSeanceInviteQuery groupByIdSeanceInvite() Group by the id_seance_invite column
 * @method CommonTCAOSeanceInviteQuery groupByOrganisme() Group by the organisme column
 * @method CommonTCAOSeanceInviteQuery groupByIdOrdreDePassage() Group by the id_ordre_de_passage column
 * @method CommonTCAOSeanceInviteQuery groupByIdIntervenantExterne() Group by the id_intervenant_externe column
 * @method CommonTCAOSeanceInviteQuery groupByIdAgent() Group by the id_agent column
 * @method CommonTCAOSeanceInviteQuery groupByIdRefValTypeVoix() Group by the id_ref_val_type_voix column
 *
 * @method CommonTCAOSeanceInviteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonTCAOSeanceInviteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonTCAOSeanceInviteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonTCAOSeanceInvite findOne(PropelPDO $con = null) Return the first CommonTCAOSeanceInvite matching the query
 * @method CommonTCAOSeanceInvite findOneOrCreate(PropelPDO $con = null) Return the first CommonTCAOSeanceInvite matching the query, or a new CommonTCAOSeanceInvite object populated from the query conditions when no match is found
 *
 * @method CommonTCAOSeanceInvite findOneByIdSeanceInvite(string $id_seance_invite) Return the first CommonTCAOSeanceInvite filtered by the id_seance_invite column
 * @method CommonTCAOSeanceInvite findOneByOrganisme(string $organisme) Return the first CommonTCAOSeanceInvite filtered by the organisme column
 * @method CommonTCAOSeanceInvite findOneByIdOrdreDePassage(string $id_ordre_de_passage) Return the first CommonTCAOSeanceInvite filtered by the id_ordre_de_passage column
 * @method CommonTCAOSeanceInvite findOneByIdIntervenantExterne(string $id_intervenant_externe) Return the first CommonTCAOSeanceInvite filtered by the id_intervenant_externe column
 * @method CommonTCAOSeanceInvite findOneByIdAgent(int $id_agent) Return the first CommonTCAOSeanceInvite filtered by the id_agent column
 * @method CommonTCAOSeanceInvite findOneByIdRefValTypeVoix(int $id_ref_val_type_voix) Return the first CommonTCAOSeanceInvite filtered by the id_ref_val_type_voix column
 *
 * @method array findByIdSeanceInvite(string $id_seance_invite) Return CommonTCAOSeanceInvite objects filtered by the id_seance_invite column
 * @method array findByOrganisme(string $organisme) Return CommonTCAOSeanceInvite objects filtered by the organisme column
 * @method array findByIdOrdreDePassage(string $id_ordre_de_passage) Return CommonTCAOSeanceInvite objects filtered by the id_ordre_de_passage column
 * @method array findByIdIntervenantExterne(string $id_intervenant_externe) Return CommonTCAOSeanceInvite objects filtered by the id_intervenant_externe column
 * @method array findByIdAgent(int $id_agent) Return CommonTCAOSeanceInvite objects filtered by the id_agent column
 * @method array findByIdRefValTypeVoix(int $id_ref_val_type_voix) Return CommonTCAOSeanceInvite objects filtered by the id_ref_val_type_voix column
 *
 * @package    propel.generator.mpe.om
 */
abstract class BaseCommonTCAOSeanceInviteQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonTCAOSeanceInviteQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonTCAOSeanceInvite', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonTCAOSeanceInviteQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonTCAOSeanceInviteQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonTCAOSeanceInviteQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonTCAOSeanceInviteQuery) {
            return $criteria;
        }
        $query = new CommonTCAOSeanceInviteQuery();
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
                         A Primary key composition: [$id_seance_invite, $organisme]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonTCAOSeanceInvite|CommonTCAOSeanceInvite[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonTCAOSeanceInvitePeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonTCAOSeanceInvitePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTCAOSeanceInvite A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id_seance_invite`, `organisme`, `id_ordre_de_passage`, `id_intervenant_externe`, `id_agent`, `id_ref_val_type_voix` FROM `t_CAO_Seance_Invite` WHERE `id_seance_invite` = :p0 AND `organisme` = :p1';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonTCAOSeanceInvite();
            $obj->hydrate($row);
            CommonTCAOSeanceInvitePeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonTCAOSeanceInvite|CommonTCAOSeanceInvite[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonTCAOSeanceInvite[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonTCAOSeanceInviteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonTCAOSeanceInvitePeer::ID_SEANCE_INVITE, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonTCAOSeanceInvitePeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonTCAOSeanceInviteQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonTCAOSeanceInvitePeer::ID_SEANCE_INVITE, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonTCAOSeanceInvitePeer::ORGANISME, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the id_seance_invite column
     *
     * Example usage:
     * <code>
     * $query->filterByIdSeanceInvite(1234); // WHERE id_seance_invite = 1234
     * $query->filterByIdSeanceInvite(array(12, 34)); // WHERE id_seance_invite IN (12, 34)
     * $query->filterByIdSeanceInvite(array('min' => 12)); // WHERE id_seance_invite >= 12
     * $query->filterByIdSeanceInvite(array('max' => 12)); // WHERE id_seance_invite <= 12
     * </code>
     *
     * @param     mixed $idSeanceInvite The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOSeanceInviteQuery The current query, for fluid interface
     */
    public function filterByIdSeanceInvite($idSeanceInvite = null, $comparison = null)
    {
        if (is_array($idSeanceInvite)) {
            $useMinMax = false;
            if (isset($idSeanceInvite['min'])) {
                $this->addUsingAlias(CommonTCAOSeanceInvitePeer::ID_SEANCE_INVITE, $idSeanceInvite['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idSeanceInvite['max'])) {
                $this->addUsingAlias(CommonTCAOSeanceInvitePeer::ID_SEANCE_INVITE, $idSeanceInvite['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOSeanceInvitePeer::ID_SEANCE_INVITE, $idSeanceInvite, $comparison);
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
     * @return CommonTCAOSeanceInviteQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonTCAOSeanceInvitePeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the id_ordre_de_passage column
     *
     * Example usage:
     * <code>
     * $query->filterByIdOrdreDePassage(1234); // WHERE id_ordre_de_passage = 1234
     * $query->filterByIdOrdreDePassage(array(12, 34)); // WHERE id_ordre_de_passage IN (12, 34)
     * $query->filterByIdOrdreDePassage(array('min' => 12)); // WHERE id_ordre_de_passage >= 12
     * $query->filterByIdOrdreDePassage(array('max' => 12)); // WHERE id_ordre_de_passage <= 12
     * </code>
     *
     * @param     mixed $idOrdreDePassage The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOSeanceInviteQuery The current query, for fluid interface
     */
    public function filterByIdOrdreDePassage($idOrdreDePassage = null, $comparison = null)
    {
        if (is_array($idOrdreDePassage)) {
            $useMinMax = false;
            if (isset($idOrdreDePassage['min'])) {
                $this->addUsingAlias(CommonTCAOSeanceInvitePeer::ID_ORDRE_DE_PASSAGE, $idOrdreDePassage['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idOrdreDePassage['max'])) {
                $this->addUsingAlias(CommonTCAOSeanceInvitePeer::ID_ORDRE_DE_PASSAGE, $idOrdreDePassage['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOSeanceInvitePeer::ID_ORDRE_DE_PASSAGE, $idOrdreDePassage, $comparison);
    }

    /**
     * Filter the query on the id_intervenant_externe column
     *
     * Example usage:
     * <code>
     * $query->filterByIdIntervenantExterne(1234); // WHERE id_intervenant_externe = 1234
     * $query->filterByIdIntervenantExterne(array(12, 34)); // WHERE id_intervenant_externe IN (12, 34)
     * $query->filterByIdIntervenantExterne(array('min' => 12)); // WHERE id_intervenant_externe >= 12
     * $query->filterByIdIntervenantExterne(array('max' => 12)); // WHERE id_intervenant_externe <= 12
     * </code>
     *
     * @param     mixed $idIntervenantExterne The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOSeanceInviteQuery The current query, for fluid interface
     */
    public function filterByIdIntervenantExterne($idIntervenantExterne = null, $comparison = null)
    {
        if (is_array($idIntervenantExterne)) {
            $useMinMax = false;
            if (isset($idIntervenantExterne['min'])) {
                $this->addUsingAlias(CommonTCAOSeanceInvitePeer::ID_INTERVENANT_EXTERNE, $idIntervenantExterne['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idIntervenantExterne['max'])) {
                $this->addUsingAlias(CommonTCAOSeanceInvitePeer::ID_INTERVENANT_EXTERNE, $idIntervenantExterne['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOSeanceInvitePeer::ID_INTERVENANT_EXTERNE, $idIntervenantExterne, $comparison);
    }

    /**
     * Filter the query on the id_agent column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgent(1234); // WHERE id_agent = 1234
     * $query->filterByIdAgent(array(12, 34)); // WHERE id_agent IN (12, 34)
     * $query->filterByIdAgent(array('min' => 12)); // WHERE id_agent >= 12
     * $query->filterByIdAgent(array('max' => 12)); // WHERE id_agent <= 12
     * </code>
     *
     * @param     mixed $idAgent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOSeanceInviteQuery The current query, for fluid interface
     */
    public function filterByIdAgent($idAgent = null, $comparison = null)
    {
        if (is_array($idAgent)) {
            $useMinMax = false;
            if (isset($idAgent['min'])) {
                $this->addUsingAlias(CommonTCAOSeanceInvitePeer::ID_AGENT, $idAgent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgent['max'])) {
                $this->addUsingAlias(CommonTCAOSeanceInvitePeer::ID_AGENT, $idAgent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOSeanceInvitePeer::ID_AGENT, $idAgent, $comparison);
    }

    /**
     * Filter the query on the id_ref_val_type_voix column
     *
     * Example usage:
     * <code>
     * $query->filterByIdRefValTypeVoix(1234); // WHERE id_ref_val_type_voix = 1234
     * $query->filterByIdRefValTypeVoix(array(12, 34)); // WHERE id_ref_val_type_voix IN (12, 34)
     * $query->filterByIdRefValTypeVoix(array('min' => 12)); // WHERE id_ref_val_type_voix >= 12
     * $query->filterByIdRefValTypeVoix(array('max' => 12)); // WHERE id_ref_val_type_voix <= 12
     * </code>
     *
     * @param     mixed $idRefValTypeVoix The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonTCAOSeanceInviteQuery The current query, for fluid interface
     */
    public function filterByIdRefValTypeVoix($idRefValTypeVoix = null, $comparison = null)
    {
        if (is_array($idRefValTypeVoix)) {
            $useMinMax = false;
            if (isset($idRefValTypeVoix['min'])) {
                $this->addUsingAlias(CommonTCAOSeanceInvitePeer::ID_REF_VAL_TYPE_VOIX, $idRefValTypeVoix['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idRefValTypeVoix['max'])) {
                $this->addUsingAlias(CommonTCAOSeanceInvitePeer::ID_REF_VAL_TYPE_VOIX, $idRefValTypeVoix['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonTCAOSeanceInvitePeer::ID_REF_VAL_TYPE_VOIX, $idRefValTypeVoix, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonTCAOSeanceInvite $commonTCAOSeanceInvite Object to remove from the list of results
     *
     * @return CommonTCAOSeanceInviteQuery The current query, for fluid interface
     */
    public function prune($commonTCAOSeanceInvite = null)
    {
        if ($commonTCAOSeanceInvite) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonTCAOSeanceInvitePeer::ID_SEANCE_INVITE), $commonTCAOSeanceInvite->getIdSeanceInvite(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonTCAOSeanceInvitePeer::ORGANISME), $commonTCAOSeanceInvite->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
