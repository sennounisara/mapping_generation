<?php


/**
 * Base class that represents a query for the 'Groupe_Moniteur' table.
 *
 * 
 *
 * @method CommonGroupeMoniteurQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonGroupeMoniteurQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonGroupeMoniteurQuery orderByIdService($order = Criteria::ASC) Order by the id_service column
 * @method CommonGroupeMoniteurQuery orderByIdentifiant($order = Criteria::ASC) Order by the Identifiant column
 * @method CommonGroupeMoniteurQuery orderByMdp($order = Criteria::ASC) Order by the Mdp column
 * @method CommonGroupeMoniteurQuery orderByNumAbonnement($order = Criteria::ASC) Order by the Num_Abonnement column
 * @method CommonGroupeMoniteurQuery orderByNumAbonne($order = Criteria::ASC) Order by the Num_Abonne column
 *
 * @method CommonGroupeMoniteurQuery groupById() Group by the id column
 * @method CommonGroupeMoniteurQuery groupByOrganisme() Group by the organisme column
 * @method CommonGroupeMoniteurQuery groupByIdService() Group by the id_service column
 * @method CommonGroupeMoniteurQuery groupByIdentifiant() Group by the Identifiant column
 * @method CommonGroupeMoniteurQuery groupByMdp() Group by the Mdp column
 * @method CommonGroupeMoniteurQuery groupByNumAbonnement() Group by the Num_Abonnement column
 * @method CommonGroupeMoniteurQuery groupByNumAbonne() Group by the Num_Abonne column
 *
 * @method CommonGroupeMoniteurQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonGroupeMoniteurQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonGroupeMoniteurQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonGroupeMoniteur findOne(PropelPDO $con = null) Return the first CommonGroupeMoniteur matching the query
 * @method CommonGroupeMoniteur findOneOrCreate(PropelPDO $con = null) Return the first CommonGroupeMoniteur matching the query, or a new CommonGroupeMoniteur object populated from the query conditions when no match is found
 *
 * @method CommonGroupeMoniteur findOneById(int $id) Return the first CommonGroupeMoniteur filtered by the id column
 * @method CommonGroupeMoniteur findOneByOrganisme(string $organisme) Return the first CommonGroupeMoniteur filtered by the organisme column
 * @method CommonGroupeMoniteur findOneByIdService(int $id_service) Return the first CommonGroupeMoniteur filtered by the id_service column
 * @method CommonGroupeMoniteur findOneByIdentifiant(string $Identifiant) Return the first CommonGroupeMoniteur filtered by the Identifiant column
 * @method CommonGroupeMoniteur findOneByMdp(string $Mdp) Return the first CommonGroupeMoniteur filtered by the Mdp column
 * @method CommonGroupeMoniteur findOneByNumAbonnement(string $Num_Abonnement) Return the first CommonGroupeMoniteur filtered by the Num_Abonnement column
 * @method CommonGroupeMoniteur findOneByNumAbonne(string $Num_Abonne) Return the first CommonGroupeMoniteur filtered by the Num_Abonne column
 *
 * @method array findById(int $id) Return CommonGroupeMoniteur objects filtered by the id column
 * @method array findByOrganisme(string $organisme) Return CommonGroupeMoniteur objects filtered by the organisme column
 * @method array findByIdService(int $id_service) Return CommonGroupeMoniteur objects filtered by the id_service column
 * @method array findByIdentifiant(string $Identifiant) Return CommonGroupeMoniteur objects filtered by the Identifiant column
 * @method array findByMdp(string $Mdp) Return CommonGroupeMoniteur objects filtered by the Mdp column
 * @method array findByNumAbonnement(string $Num_Abonnement) Return CommonGroupeMoniteur objects filtered by the Num_Abonnement column
 * @method array findByNumAbonne(string $Num_Abonne) Return CommonGroupeMoniteur objects filtered by the Num_Abonne column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonGroupeMoniteurQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonGroupeMoniteurQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonGroupeMoniteur', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonGroupeMoniteurQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonGroupeMoniteurQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonGroupeMoniteurQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonGroupeMoniteurQuery) {
            return $criteria;
        }
        $query = new CommonGroupeMoniteurQuery();
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
     * @return   CommonGroupeMoniteur|CommonGroupeMoniteur[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonGroupeMoniteurPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonGroupeMoniteurPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonGroupeMoniteur A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `organisme`, `id_service`, `Identifiant`, `Mdp`, `Num_Abonnement`, `Num_Abonne` FROM `Groupe_Moniteur` WHERE `id` = :p0 AND `organisme` = :p1';
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
            $obj = new CommonGroupeMoniteur();
            $obj->hydrate($row);
            CommonGroupeMoniteurPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonGroupeMoniteur|CommonGroupeMoniteur[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonGroupeMoniteur[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonGroupeMoniteurQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonGroupeMoniteurPeer::ID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonGroupeMoniteurPeer::ORGANISME, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonGroupeMoniteurQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonGroupeMoniteurPeer::ID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonGroupeMoniteurPeer::ORGANISME, $key[1], Criteria::EQUAL);
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
     * @return CommonGroupeMoniteurQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonGroupeMoniteurPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonGroupeMoniteurPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonGroupeMoniteurPeer::ID, $id, $comparison);
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
     * @return CommonGroupeMoniteurQuery The current query, for fluid interface
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

        return $this->addUsingAlias(CommonGroupeMoniteurPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the id_service column
     *
     * Example usage:
     * <code>
     * $query->filterByIdService(1234); // WHERE id_service = 1234
     * $query->filterByIdService(array(12, 34)); // WHERE id_service IN (12, 34)
     * $query->filterByIdService(array('min' => 12)); // WHERE id_service >= 12
     * $query->filterByIdService(array('max' => 12)); // WHERE id_service <= 12
     * </code>
     *
     * @param     mixed $idService The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGroupeMoniteurQuery The current query, for fluid interface
     */
    public function filterByIdService($idService = null, $comparison = null)
    {
        if (is_array($idService)) {
            $useMinMax = false;
            if (isset($idService['min'])) {
                $this->addUsingAlias(CommonGroupeMoniteurPeer::ID_SERVICE, $idService['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idService['max'])) {
                $this->addUsingAlias(CommonGroupeMoniteurPeer::ID_SERVICE, $idService['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonGroupeMoniteurPeer::ID_SERVICE, $idService, $comparison);
    }

    /**
     * Filter the query on the Identifiant column
     *
     * Example usage:
     * <code>
     * $query->filterByIdentifiant('fooValue');   // WHERE Identifiant = 'fooValue'
     * $query->filterByIdentifiant('%fooValue%'); // WHERE Identifiant LIKE '%fooValue%'
     * </code>
     *
     * @param     string $identifiant The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGroupeMoniteurQuery The current query, for fluid interface
     */
    public function filterByIdentifiant($identifiant = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($identifiant)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $identifiant)) {
                $identifiant = str_replace('*', '%', $identifiant);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGroupeMoniteurPeer::IDENTIFIANT, $identifiant, $comparison);
    }

    /**
     * Filter the query on the Mdp column
     *
     * Example usage:
     * <code>
     * $query->filterByMdp('fooValue');   // WHERE Mdp = 'fooValue'
     * $query->filterByMdp('%fooValue%'); // WHERE Mdp LIKE '%fooValue%'
     * </code>
     *
     * @param     string $mdp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGroupeMoniteurQuery The current query, for fluid interface
     */
    public function filterByMdp($mdp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($mdp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $mdp)) {
                $mdp = str_replace('*', '%', $mdp);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGroupeMoniteurPeer::MDP, $mdp, $comparison);
    }

    /**
     * Filter the query on the Num_Abonnement column
     *
     * Example usage:
     * <code>
     * $query->filterByNumAbonnement('fooValue');   // WHERE Num_Abonnement = 'fooValue'
     * $query->filterByNumAbonnement('%fooValue%'); // WHERE Num_Abonnement LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numAbonnement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGroupeMoniteurQuery The current query, for fluid interface
     */
    public function filterByNumAbonnement($numAbonnement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numAbonnement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numAbonnement)) {
                $numAbonnement = str_replace('*', '%', $numAbonnement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGroupeMoniteurPeer::NUM_ABONNEMENT, $numAbonnement, $comparison);
    }

    /**
     * Filter the query on the Num_Abonne column
     *
     * Example usage:
     * <code>
     * $query->filterByNumAbonne('fooValue');   // WHERE Num_Abonne = 'fooValue'
     * $query->filterByNumAbonne('%fooValue%'); // WHERE Num_Abonne LIKE '%fooValue%'
     * </code>
     *
     * @param     string $numAbonne The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonGroupeMoniteurQuery The current query, for fluid interface
     */
    public function filterByNumAbonne($numAbonne = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($numAbonne)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $numAbonne)) {
                $numAbonne = str_replace('*', '%', $numAbonne);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonGroupeMoniteurPeer::NUM_ABONNE, $numAbonne, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonGroupeMoniteur $commonGroupeMoniteur Object to remove from the list of results
     *
     * @return CommonGroupeMoniteurQuery The current query, for fluid interface
     */
    public function prune($commonGroupeMoniteur = null)
    {
        if ($commonGroupeMoniteur) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonGroupeMoniteurPeer::ID), $commonGroupeMoniteur->getId(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonGroupeMoniteurPeer::ORGANISME), $commonGroupeMoniteur->getOrganisme(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
