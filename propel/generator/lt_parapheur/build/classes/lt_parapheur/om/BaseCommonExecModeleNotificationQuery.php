<?php


/**
 * Base class that represents a query for the 'exec_modele_notification' table.
 *
 * 
 *
 * @method CommonExecModeleNotificationQuery orderById($order = Criteria::ASC) Order by the id column
 * @method CommonExecModeleNotificationQuery orderByLibelle($order = Criteria::ASC) Order by the libelle column
 * @method CommonExecModeleNotificationQuery orderByParam($order = Criteria::ASC) Order by the param column
 * @method CommonExecModeleNotificationQuery orderByType($order = Criteria::ASC) Order by the type column
 * @method CommonExecModeleNotificationQuery orderByEnCopie($order = Criteria::ASC) Order by the en_copie column
 * @method CommonExecModeleNotificationQuery orderByDestinataire($order = Criteria::ASC) Order by the destinataire column
 * @method CommonExecModeleNotificationQuery orderByObjet($order = Criteria::ASC) Order by the objet column
 * @method CommonExecModeleNotificationQuery orderByActif($order = Criteria::ASC) Order by the actif column
 *
 * @method CommonExecModeleNotificationQuery groupById() Group by the id column
 * @method CommonExecModeleNotificationQuery groupByLibelle() Group by the libelle column
 * @method CommonExecModeleNotificationQuery groupByParam() Group by the param column
 * @method CommonExecModeleNotificationQuery groupByType() Group by the type column
 * @method CommonExecModeleNotificationQuery groupByEnCopie() Group by the en_copie column
 * @method CommonExecModeleNotificationQuery groupByDestinataire() Group by the destinataire column
 * @method CommonExecModeleNotificationQuery groupByObjet() Group by the objet column
 * @method CommonExecModeleNotificationQuery groupByActif() Group by the actif column
 *
 * @method CommonExecModeleNotificationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonExecModeleNotificationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonExecModeleNotificationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonExecModeleNotification findOne(PropelPDO $con = null) Return the first CommonExecModeleNotification matching the query
 * @method CommonExecModeleNotification findOneOrCreate(PropelPDO $con = null) Return the first CommonExecModeleNotification matching the query, or a new CommonExecModeleNotification object populated from the query conditions when no match is found
 *
 * @method CommonExecModeleNotification findOneByLibelle(string $libelle) Return the first CommonExecModeleNotification filtered by the libelle column
 * @method CommonExecModeleNotification findOneByParam(string $param) Return the first CommonExecModeleNotification filtered by the param column
 * @method CommonExecModeleNotification findOneByType(string $type) Return the first CommonExecModeleNotification filtered by the type column
 * @method CommonExecModeleNotification findOneByEnCopie(string $en_copie) Return the first CommonExecModeleNotification filtered by the en_copie column
 * @method CommonExecModeleNotification findOneByDestinataire(string $destinataire) Return the first CommonExecModeleNotification filtered by the destinataire column
 * @method CommonExecModeleNotification findOneByObjet(string $objet) Return the first CommonExecModeleNotification filtered by the objet column
 * @method CommonExecModeleNotification findOneByActif(int $actif) Return the first CommonExecModeleNotification filtered by the actif column
 *
 * @method array findById(int $id) Return CommonExecModeleNotification objects filtered by the id column
 * @method array findByLibelle(string $libelle) Return CommonExecModeleNotification objects filtered by the libelle column
 * @method array findByParam(string $param) Return CommonExecModeleNotification objects filtered by the param column
 * @method array findByType(string $type) Return CommonExecModeleNotification objects filtered by the type column
 * @method array findByEnCopie(string $en_copie) Return CommonExecModeleNotification objects filtered by the en_copie column
 * @method array findByDestinataire(string $destinataire) Return CommonExecModeleNotification objects filtered by the destinataire column
 * @method array findByObjet(string $objet) Return CommonExecModeleNotification objects filtered by the objet column
 * @method array findByActif(int $actif) Return CommonExecModeleNotification objects filtered by the actif column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonExecModeleNotificationQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonExecModeleNotificationQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonExecModeleNotification', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonExecModeleNotificationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonExecModeleNotificationQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonExecModeleNotificationQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonExecModeleNotificationQuery) {
            return $criteria;
        }
        $query = new CommonExecModeleNotificationQuery();
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
     * @return   CommonExecModeleNotification|CommonExecModeleNotification[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonExecModeleNotificationPeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonExecModeleNotificationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonExecModeleNotification A model object, or null if the key is not found
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
     * @return                 CommonExecModeleNotification A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `id`, `libelle`, `param`, `type`, `en_copie`, `destinataire`, `objet`, `actif` FROM `exec_modele_notification` WHERE `id` = :p0';
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
            $obj = new CommonExecModeleNotification();
            $obj->hydrate($row);
            CommonExecModeleNotificationPeer::addInstanceToPool($obj, (string) $key);
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
     * @return CommonExecModeleNotification|CommonExecModeleNotification[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|CommonExecModeleNotification[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonExecModeleNotificationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(CommonExecModeleNotificationPeer::ID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonExecModeleNotificationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(CommonExecModeleNotificationPeer::ID, $keys, Criteria::IN);
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
     * @return CommonExecModeleNotificationQuery The current query, for fluid interface
     */
    public function filterById($id = null, $comparison = null)
    {
        if (is_array($id)) {
            $useMinMax = false;
            if (isset($id['min'])) {
                $this->addUsingAlias(CommonExecModeleNotificationPeer::ID, $id['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($id['max'])) {
                $this->addUsingAlias(CommonExecModeleNotificationPeer::ID, $id['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecModeleNotificationPeer::ID, $id, $comparison);
    }

    /**
     * Filter the query on the libelle column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelle('fooValue');   // WHERE libelle = 'fooValue'
     * $query->filterByLibelle('%fooValue%'); // WHERE libelle LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecModeleNotificationQuery The current query, for fluid interface
     */
    public function filterByLibelle($libelle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelle)) {
                $libelle = str_replace('*', '%', $libelle);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecModeleNotificationPeer::LIBELLE, $libelle, $comparison);
    }

    /**
     * Filter the query on the param column
     *
     * Example usage:
     * <code>
     * $query->filterByParam('fooValue');   // WHERE param = 'fooValue'
     * $query->filterByParam('%fooValue%'); // WHERE param LIKE '%fooValue%'
     * </code>
     *
     * @param     string $param The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecModeleNotificationQuery The current query, for fluid interface
     */
    public function filterByParam($param = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($param)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $param)) {
                $param = str_replace('*', '%', $param);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecModeleNotificationPeer::PARAM, $param, $comparison);
    }

    /**
     * Filter the query on the type column
     *
     * Example usage:
     * <code>
     * $query->filterByType('fooValue');   // WHERE type = 'fooValue'
     * $query->filterByType('%fooValue%'); // WHERE type LIKE '%fooValue%'
     * </code>
     *
     * @param     string $type The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecModeleNotificationQuery The current query, for fluid interface
     */
    public function filterByType($type = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($type)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $type)) {
                $type = str_replace('*', '%', $type);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecModeleNotificationPeer::TYPE, $type, $comparison);
    }

    /**
     * Filter the query on the en_copie column
     *
     * Example usage:
     * <code>
     * $query->filterByEnCopie('fooValue');   // WHERE en_copie = 'fooValue'
     * $query->filterByEnCopie('%fooValue%'); // WHERE en_copie LIKE '%fooValue%'
     * </code>
     *
     * @param     string $enCopie The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecModeleNotificationQuery The current query, for fluid interface
     */
    public function filterByEnCopie($enCopie = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($enCopie)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $enCopie)) {
                $enCopie = str_replace('*', '%', $enCopie);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecModeleNotificationPeer::EN_COPIE, $enCopie, $comparison);
    }

    /**
     * Filter the query on the destinataire column
     *
     * Example usage:
     * <code>
     * $query->filterByDestinataire('fooValue');   // WHERE destinataire = 'fooValue'
     * $query->filterByDestinataire('%fooValue%'); // WHERE destinataire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $destinataire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecModeleNotificationQuery The current query, for fluid interface
     */
    public function filterByDestinataire($destinataire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($destinataire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $destinataire)) {
                $destinataire = str_replace('*', '%', $destinataire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecModeleNotificationPeer::DESTINATAIRE, $destinataire, $comparison);
    }

    /**
     * Filter the query on the objet column
     *
     * Example usage:
     * <code>
     * $query->filterByObjet('fooValue');   // WHERE objet = 'fooValue'
     * $query->filterByObjet('%fooValue%'); // WHERE objet LIKE '%fooValue%'
     * </code>
     *
     * @param     string $objet The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecModeleNotificationQuery The current query, for fluid interface
     */
    public function filterByObjet($objet = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($objet)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $objet)) {
                $objet = str_replace('*', '%', $objet);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonExecModeleNotificationPeer::OBJET, $objet, $comparison);
    }

    /**
     * Filter the query on the actif column
     *
     * Example usage:
     * <code>
     * $query->filterByActif(1234); // WHERE actif = 1234
     * $query->filterByActif(array(12, 34)); // WHERE actif IN (12, 34)
     * $query->filterByActif(array('min' => 12)); // WHERE actif >= 12
     * $query->filterByActif(array('max' => 12)); // WHERE actif <= 12
     * </code>
     *
     * @param     mixed $actif The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonExecModeleNotificationQuery The current query, for fluid interface
     */
    public function filterByActif($actif = null, $comparison = null)
    {
        if (is_array($actif)) {
            $useMinMax = false;
            if (isset($actif['min'])) {
                $this->addUsingAlias(CommonExecModeleNotificationPeer::ACTIF, $actif['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($actif['max'])) {
                $this->addUsingAlias(CommonExecModeleNotificationPeer::ACTIF, $actif['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonExecModeleNotificationPeer::ACTIF, $actif, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   CommonExecModeleNotification $commonExecModeleNotification Object to remove from the list of results
     *
     * @return CommonExecModeleNotificationQuery The current query, for fluid interface
     */
    public function prune($commonExecModeleNotification = null)
    {
        if ($commonExecModeleNotification) {
            $this->addUsingAlias(CommonExecModeleNotificationPeer::ID, $commonExecModeleNotification->getId(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
