<?php


/**
 * Base class that represents a query for the 'comptes_agents_associes' table.
 *
 * 
 *
 * @method CommonComptesAgentsAssociesQuery orderByComptePrincipal($order = Criteria::ASC) Order by the compte_principal column
 * @method CommonComptesAgentsAssociesQuery orderByCompteSecondaire($order = Criteria::ASC) Order by the compte_secondaire column
 * @method CommonComptesAgentsAssociesQuery orderByStatutActivationCompteSecondaire($order = Criteria::ASC) Order by the statut_activation_compte_secondaire column
 * @method CommonComptesAgentsAssociesQuery orderByUidEchange($order = Criteria::ASC) Order by the UID_ECHANGE column
 *
 * @method CommonComptesAgentsAssociesQuery groupByComptePrincipal() Group by the compte_principal column
 * @method CommonComptesAgentsAssociesQuery groupByCompteSecondaire() Group by the compte_secondaire column
 * @method CommonComptesAgentsAssociesQuery groupByStatutActivationCompteSecondaire() Group by the statut_activation_compte_secondaire column
 * @method CommonComptesAgentsAssociesQuery groupByUidEchange() Group by the UID_ECHANGE column
 *
 * @method CommonComptesAgentsAssociesQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonComptesAgentsAssociesQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonComptesAgentsAssociesQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonComptesAgentsAssocies findOne(PropelPDO $con = null) Return the first CommonComptesAgentsAssocies matching the query
 * @method CommonComptesAgentsAssocies findOneOrCreate(PropelPDO $con = null) Return the first CommonComptesAgentsAssocies matching the query, or a new CommonComptesAgentsAssocies object populated from the query conditions when no match is found
 *
 * @method CommonComptesAgentsAssocies findOneByComptePrincipal(int $compte_principal) Return the first CommonComptesAgentsAssocies filtered by the compte_principal column
 * @method CommonComptesAgentsAssocies findOneByCompteSecondaire(int $compte_secondaire) Return the first CommonComptesAgentsAssocies filtered by the compte_secondaire column
 * @method CommonComptesAgentsAssocies findOneByStatutActivationCompteSecondaire(string $statut_activation_compte_secondaire) Return the first CommonComptesAgentsAssocies filtered by the statut_activation_compte_secondaire column
 * @method CommonComptesAgentsAssocies findOneByUidEchange(string $UID_ECHANGE) Return the first CommonComptesAgentsAssocies filtered by the UID_ECHANGE column
 *
 * @method array findByComptePrincipal(int $compte_principal) Return CommonComptesAgentsAssocies objects filtered by the compte_principal column
 * @method array findByCompteSecondaire(int $compte_secondaire) Return CommonComptesAgentsAssocies objects filtered by the compte_secondaire column
 * @method array findByStatutActivationCompteSecondaire(string $statut_activation_compte_secondaire) Return CommonComptesAgentsAssocies objects filtered by the statut_activation_compte_secondaire column
 * @method array findByUidEchange(string $UID_ECHANGE) Return CommonComptesAgentsAssocies objects filtered by the UID_ECHANGE column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonComptesAgentsAssociesQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonComptesAgentsAssociesQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonComptesAgentsAssocies', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonComptesAgentsAssociesQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonComptesAgentsAssociesQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonComptesAgentsAssociesQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonComptesAgentsAssociesQuery) {
            return $criteria;
        }
        $query = new CommonComptesAgentsAssociesQuery();
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
                         A Primary key composition: [$compte_principal, $compte_secondaire]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonComptesAgentsAssocies|CommonComptesAgentsAssocies[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonComptesAgentsAssociesPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonComptesAgentsAssociesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonComptesAgentsAssocies A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `compte_principal`, `compte_secondaire`, `statut_activation_compte_secondaire`, `UID_ECHANGE` FROM `comptes_agents_associes` WHERE `compte_principal` = :p0 AND `compte_secondaire` = :p1';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonComptesAgentsAssocies();
            $obj->hydrate($row);
            CommonComptesAgentsAssociesPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1])));
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
     * @return CommonComptesAgentsAssocies|CommonComptesAgentsAssocies[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonComptesAgentsAssocies[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonComptesAgentsAssociesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonComptesAgentsAssociesPeer::COMPTE_PRINCIPAL, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonComptesAgentsAssociesPeer::COMPTE_SECONDAIRE, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonComptesAgentsAssociesQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonComptesAgentsAssociesPeer::COMPTE_PRINCIPAL, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonComptesAgentsAssociesPeer::COMPTE_SECONDAIRE, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the compte_principal column
     *
     * Example usage:
     * <code>
     * $query->filterByComptePrincipal(1234); // WHERE compte_principal = 1234
     * $query->filterByComptePrincipal(array(12, 34)); // WHERE compte_principal IN (12, 34)
     * $query->filterByComptePrincipal(array('min' => 12)); // WHERE compte_principal >= 12
     * $query->filterByComptePrincipal(array('max' => 12)); // WHERE compte_principal <= 12
     * </code>
     *
     * @param     mixed $comptePrincipal The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonComptesAgentsAssociesQuery The current query, for fluid interface
     */
    public function filterByComptePrincipal($comptePrincipal = null, $comparison = null)
    {
        if (is_array($comptePrincipal)) {
            $useMinMax = false;
            if (isset($comptePrincipal['min'])) {
                $this->addUsingAlias(CommonComptesAgentsAssociesPeer::COMPTE_PRINCIPAL, $comptePrincipal['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($comptePrincipal['max'])) {
                $this->addUsingAlias(CommonComptesAgentsAssociesPeer::COMPTE_PRINCIPAL, $comptePrincipal['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonComptesAgentsAssociesPeer::COMPTE_PRINCIPAL, $comptePrincipal, $comparison);
    }

    /**
     * Filter the query on the compte_secondaire column
     *
     * Example usage:
     * <code>
     * $query->filterByCompteSecondaire(1234); // WHERE compte_secondaire = 1234
     * $query->filterByCompteSecondaire(array(12, 34)); // WHERE compte_secondaire IN (12, 34)
     * $query->filterByCompteSecondaire(array('min' => 12)); // WHERE compte_secondaire >= 12
     * $query->filterByCompteSecondaire(array('max' => 12)); // WHERE compte_secondaire <= 12
     * </code>
     *
     * @param     mixed $compteSecondaire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonComptesAgentsAssociesQuery The current query, for fluid interface
     */
    public function filterByCompteSecondaire($compteSecondaire = null, $comparison = null)
    {
        if (is_array($compteSecondaire)) {
            $useMinMax = false;
            if (isset($compteSecondaire['min'])) {
                $this->addUsingAlias(CommonComptesAgentsAssociesPeer::COMPTE_SECONDAIRE, $compteSecondaire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($compteSecondaire['max'])) {
                $this->addUsingAlias(CommonComptesAgentsAssociesPeer::COMPTE_SECONDAIRE, $compteSecondaire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonComptesAgentsAssociesPeer::COMPTE_SECONDAIRE, $compteSecondaire, $comparison);
    }

    /**
     * Filter the query on the statut_activation_compte_secondaire column
     *
     * Example usage:
     * <code>
     * $query->filterByStatutActivationCompteSecondaire('fooValue');   // WHERE statut_activation_compte_secondaire = 'fooValue'
     * $query->filterByStatutActivationCompteSecondaire('%fooValue%'); // WHERE statut_activation_compte_secondaire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $statutActivationCompteSecondaire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonComptesAgentsAssociesQuery The current query, for fluid interface
     */
    public function filterByStatutActivationCompteSecondaire($statutActivationCompteSecondaire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($statutActivationCompteSecondaire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $statutActivationCompteSecondaire)) {
                $statutActivationCompteSecondaire = str_replace('*', '%', $statutActivationCompteSecondaire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonComptesAgentsAssociesPeer::STATUT_ACTIVATION_COMPTE_SECONDAIRE, $statutActivationCompteSecondaire, $comparison);
    }

    /**
     * Filter the query on the UID_ECHANGE column
     *
     * Example usage:
     * <code>
     * $query->filterByUidEchange('fooValue');   // WHERE UID_ECHANGE = 'fooValue'
     * $query->filterByUidEchange('%fooValue%'); // WHERE UID_ECHANGE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $uidEchange The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonComptesAgentsAssociesQuery The current query, for fluid interface
     */
    public function filterByUidEchange($uidEchange = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($uidEchange)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $uidEchange)) {
                $uidEchange = str_replace('*', '%', $uidEchange);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonComptesAgentsAssociesPeer::UID_ECHANGE, $uidEchange, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonComptesAgentsAssocies $commonComptesAgentsAssocies Object to remove from the list of results
     *
     * @return CommonComptesAgentsAssociesQuery The current query, for fluid interface
     */
    public function prune($commonComptesAgentsAssocies = null)
    {
        if ($commonComptesAgentsAssocies) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonComptesAgentsAssociesPeer::COMPTE_PRINCIPAL), $commonComptesAgentsAssocies->getComptePrincipal(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonComptesAgentsAssociesPeer::COMPTE_SECONDAIRE), $commonComptesAgentsAssocies->getCompteSecondaire(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
