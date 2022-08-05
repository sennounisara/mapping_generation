<?php


/**
 * Base class that represents a query for the 'notification_web_service' table.
 *
 * 
 *
 * @method NotificationWebServiceQuery orderByIdNotificationWebService($order = Criteria::ASC) Order by the ID_NOTIFICATION_WEB_SERVICE column
 * @method NotificationWebServiceQuery orderByIdDemande($order = Criteria::ASC) Order by the ID_DEMANDE column
 * @method NotificationWebServiceQuery orderByIdStatut($order = Criteria::ASC) Order by the ID_STATUT column
 * @method NotificationWebServiceQuery orderByLibelleStatut($order = Criteria::ASC) Order by the LIBELLE_STATUT column
 * @method NotificationWebServiceQuery orderByLibelleStatutAr($order = Criteria::ASC) Order by the LIBELLE_STATUT_AR column
 * @method NotificationWebServiceQuery orderByDateStatut($order = Criteria::ASC) Order by the DATE_STATUT column
 * @method NotificationWebServiceQuery orderByDate($order = Criteria::ASC) Order by the DATE column
 * @method NotificationWebServiceQuery orderByIdOrganisme($order = Criteria::ASC) Order by the ID_ORGANISME column
 * @method NotificationWebServiceQuery orderByIdUtilisateur($order = Criteria::ASC) Order by the ID_UTILISATEUR column
 * @method NotificationWebServiceQuery orderByEtatNotification($order = Criteria::ASC) Order by the ETAT_NOTIFICATION column
 * @method NotificationWebServiceQuery orderByEtatAcquittement($order = Criteria::ASC) Order by the ETAT_ACQUITTEMENT column
 * @method NotificationWebServiceQuery orderByDateAcquittement($order = Criteria::ASC) Order by the DATE_ACQUITTEMENT column
 *
 * @method NotificationWebServiceQuery groupByIdNotificationWebService() Group by the ID_NOTIFICATION_WEB_SERVICE column
 * @method NotificationWebServiceQuery groupByIdDemande() Group by the ID_DEMANDE column
 * @method NotificationWebServiceQuery groupByIdStatut() Group by the ID_STATUT column
 * @method NotificationWebServiceQuery groupByLibelleStatut() Group by the LIBELLE_STATUT column
 * @method NotificationWebServiceQuery groupByLibelleStatutAr() Group by the LIBELLE_STATUT_AR column
 * @method NotificationWebServiceQuery groupByDateStatut() Group by the DATE_STATUT column
 * @method NotificationWebServiceQuery groupByDate() Group by the DATE column
 * @method NotificationWebServiceQuery groupByIdOrganisme() Group by the ID_ORGANISME column
 * @method NotificationWebServiceQuery groupByIdUtilisateur() Group by the ID_UTILISATEUR column
 * @method NotificationWebServiceQuery groupByEtatNotification() Group by the ETAT_NOTIFICATION column
 * @method NotificationWebServiceQuery groupByEtatAcquittement() Group by the ETAT_ACQUITTEMENT column
 * @method NotificationWebServiceQuery groupByDateAcquittement() Group by the DATE_ACQUITTEMENT column
 *
 * @method NotificationWebServiceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method NotificationWebServiceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method NotificationWebServiceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method NotificationWebService findOne(PropelPDO $con = null) Return the first NotificationWebService matching the query
 * @method NotificationWebService findOneOrCreate(PropelPDO $con = null) Return the first NotificationWebService matching the query, or a new NotificationWebService object populated from the query conditions when no match is found
 *
 * @method NotificationWebService findOneByIdDemande(int $ID_DEMANDE) Return the first NotificationWebService filtered by the ID_DEMANDE column
 * @method NotificationWebService findOneByIdStatut(int $ID_STATUT) Return the first NotificationWebService filtered by the ID_STATUT column
 * @method NotificationWebService findOneByLibelleStatut(string $LIBELLE_STATUT) Return the first NotificationWebService filtered by the LIBELLE_STATUT column
 * @method NotificationWebService findOneByLibelleStatutAr(string $LIBELLE_STATUT_AR) Return the first NotificationWebService filtered by the LIBELLE_STATUT_AR column
 * @method NotificationWebService findOneByDateStatut(string $DATE_STATUT) Return the first NotificationWebService filtered by the DATE_STATUT column
 * @method NotificationWebService findOneByDate(string $DATE) Return the first NotificationWebService filtered by the DATE column
 * @method NotificationWebService findOneByIdOrganisme(int $ID_ORGANISME) Return the first NotificationWebService filtered by the ID_ORGANISME column
 * @method NotificationWebService findOneByIdUtilisateur(int $ID_UTILISATEUR) Return the first NotificationWebService filtered by the ID_UTILISATEUR column
 * @method NotificationWebService findOneByEtatNotification(string $ETAT_NOTIFICATION) Return the first NotificationWebService filtered by the ETAT_NOTIFICATION column
 * @method NotificationWebService findOneByEtatAcquittement(string $ETAT_ACQUITTEMENT) Return the first NotificationWebService filtered by the ETAT_ACQUITTEMENT column
 * @method NotificationWebService findOneByDateAcquittement(string $DATE_ACQUITTEMENT) Return the first NotificationWebService filtered by the DATE_ACQUITTEMENT column
 *
 * @method array findByIdNotificationWebService(int $ID_NOTIFICATION_WEB_SERVICE) Return NotificationWebService objects filtered by the ID_NOTIFICATION_WEB_SERVICE column
 * @method array findByIdDemande(int $ID_DEMANDE) Return NotificationWebService objects filtered by the ID_DEMANDE column
 * @method array findByIdStatut(int $ID_STATUT) Return NotificationWebService objects filtered by the ID_STATUT column
 * @method array findByLibelleStatut(string $LIBELLE_STATUT) Return NotificationWebService objects filtered by the LIBELLE_STATUT column
 * @method array findByLibelleStatutAr(string $LIBELLE_STATUT_AR) Return NotificationWebService objects filtered by the LIBELLE_STATUT_AR column
 * @method array findByDateStatut(string $DATE_STATUT) Return NotificationWebService objects filtered by the DATE_STATUT column
 * @method array findByDate(string $DATE) Return NotificationWebService objects filtered by the DATE column
 * @method array findByIdOrganisme(int $ID_ORGANISME) Return NotificationWebService objects filtered by the ID_ORGANISME column
 * @method array findByIdUtilisateur(int $ID_UTILISATEUR) Return NotificationWebService objects filtered by the ID_UTILISATEUR column
 * @method array findByEtatNotification(string $ETAT_NOTIFICATION) Return NotificationWebService objects filtered by the ETAT_NOTIFICATION column
 * @method array findByEtatAcquittement(string $ETAT_ACQUITTEMENT) Return NotificationWebService objects filtered by the ETAT_ACQUITTEMENT column
 * @method array findByDateAcquittement(string $DATE_ACQUITTEMENT) Return NotificationWebService objects filtered by the DATE_ACQUITTEMENT column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseNotificationWebServiceQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseNotificationWebServiceQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'NotificationWebService', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new NotificationWebServiceQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   NotificationWebServiceQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return NotificationWebServiceQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof NotificationWebServiceQuery) {
            return $criteria;
        }
        $query = new NotificationWebServiceQuery();
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
     * @return   NotificationWebService|NotificationWebService[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = NotificationWebServicePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(NotificationWebServicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 NotificationWebService A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdNotificationWebService($key, $con = null)
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
     * @return                 NotificationWebService A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_NOTIFICATION_WEB_SERVICE`, `ID_DEMANDE`, `ID_STATUT`, `LIBELLE_STATUT`, `LIBELLE_STATUT_AR`, `DATE_STATUT`, `DATE`, `ID_ORGANISME`, `ID_UTILISATEUR`, `ETAT_NOTIFICATION`, `ETAT_ACQUITTEMENT`, `DATE_ACQUITTEMENT` FROM `notification_web_service` WHERE `ID_NOTIFICATION_WEB_SERVICE` = :p0';
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
            $obj = new NotificationWebService();
            $obj->hydrate($row);
            NotificationWebServicePeer::addInstanceToPool($obj, (string) $key);
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
     * @return NotificationWebService|NotificationWebService[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|NotificationWebService[]|mixed the list of results, formatted by the current formatter
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
     * @return NotificationWebServiceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(NotificationWebServicePeer::ID_NOTIFICATION_WEB_SERVICE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return NotificationWebServiceQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(NotificationWebServicePeer::ID_NOTIFICATION_WEB_SERVICE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID_NOTIFICATION_WEB_SERVICE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdNotificationWebService(1234); // WHERE ID_NOTIFICATION_WEB_SERVICE = 1234
     * $query->filterByIdNotificationWebService(array(12, 34)); // WHERE ID_NOTIFICATION_WEB_SERVICE IN (12, 34)
     * $query->filterByIdNotificationWebService(array('min' => 12)); // WHERE ID_NOTIFICATION_WEB_SERVICE >= 12
     * $query->filterByIdNotificationWebService(array('max' => 12)); // WHERE ID_NOTIFICATION_WEB_SERVICE <= 12
     * </code>
     *
     * @param     mixed $idNotificationWebService The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NotificationWebServiceQuery The current query, for fluid interface
     */
    public function filterByIdNotificationWebService($idNotificationWebService = null, $comparison = null)
    {
        if (is_array($idNotificationWebService)) {
            $useMinMax = false;
            if (isset($idNotificationWebService['min'])) {
                $this->addUsingAlias(NotificationWebServicePeer::ID_NOTIFICATION_WEB_SERVICE, $idNotificationWebService['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idNotificationWebService['max'])) {
                $this->addUsingAlias(NotificationWebServicePeer::ID_NOTIFICATION_WEB_SERVICE, $idNotificationWebService['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NotificationWebServicePeer::ID_NOTIFICATION_WEB_SERVICE, $idNotificationWebService, $comparison);
    }

    /**
     * Filter the query on the ID_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDemande(1234); // WHERE ID_DEMANDE = 1234
     * $query->filterByIdDemande(array(12, 34)); // WHERE ID_DEMANDE IN (12, 34)
     * $query->filterByIdDemande(array('min' => 12)); // WHERE ID_DEMANDE >= 12
     * $query->filterByIdDemande(array('max' => 12)); // WHERE ID_DEMANDE <= 12
     * </code>
     *
     * @param     mixed $idDemande The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NotificationWebServiceQuery The current query, for fluid interface
     */
    public function filterByIdDemande($idDemande = null, $comparison = null)
    {
        if (is_array($idDemande)) {
            $useMinMax = false;
            if (isset($idDemande['min'])) {
                $this->addUsingAlias(NotificationWebServicePeer::ID_DEMANDE, $idDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDemande['max'])) {
                $this->addUsingAlias(NotificationWebServicePeer::ID_DEMANDE, $idDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NotificationWebServicePeer::ID_DEMANDE, $idDemande, $comparison);
    }

    /**
     * Filter the query on the ID_STATUT column
     *
     * Example usage:
     * <code>
     * $query->filterByIdStatut(1234); // WHERE ID_STATUT = 1234
     * $query->filterByIdStatut(array(12, 34)); // WHERE ID_STATUT IN (12, 34)
     * $query->filterByIdStatut(array('min' => 12)); // WHERE ID_STATUT >= 12
     * $query->filterByIdStatut(array('max' => 12)); // WHERE ID_STATUT <= 12
     * </code>
     *
     * @param     mixed $idStatut The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NotificationWebServiceQuery The current query, for fluid interface
     */
    public function filterByIdStatut($idStatut = null, $comparison = null)
    {
        if (is_array($idStatut)) {
            $useMinMax = false;
            if (isset($idStatut['min'])) {
                $this->addUsingAlias(NotificationWebServicePeer::ID_STATUT, $idStatut['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idStatut['max'])) {
                $this->addUsingAlias(NotificationWebServicePeer::ID_STATUT, $idStatut['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NotificationWebServicePeer::ID_STATUT, $idStatut, $comparison);
    }

    /**
     * Filter the query on the LIBELLE_STATUT column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleStatut('fooValue');   // WHERE LIBELLE_STATUT = 'fooValue'
     * $query->filterByLibelleStatut('%fooValue%'); // WHERE LIBELLE_STATUT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleStatut The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NotificationWebServiceQuery The current query, for fluid interface
     */
    public function filterByLibelleStatut($libelleStatut = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleStatut)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleStatut)) {
                $libelleStatut = str_replace('*', '%', $libelleStatut);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(NotificationWebServicePeer::LIBELLE_STATUT, $libelleStatut, $comparison);
    }

    /**
     * Filter the query on the LIBELLE_STATUT_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByLibelleStatutAr('fooValue');   // WHERE LIBELLE_STATUT_AR = 'fooValue'
     * $query->filterByLibelleStatutAr('%fooValue%'); // WHERE LIBELLE_STATUT_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $libelleStatutAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NotificationWebServiceQuery The current query, for fluid interface
     */
    public function filterByLibelleStatutAr($libelleStatutAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($libelleStatutAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $libelleStatutAr)) {
                $libelleStatutAr = str_replace('*', '%', $libelleStatutAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(NotificationWebServicePeer::LIBELLE_STATUT_AR, $libelleStatutAr, $comparison);
    }

    /**
     * Filter the query on the DATE_STATUT column
     *
     * Example usage:
     * <code>
     * $query->filterByDateStatut('2011-03-14'); // WHERE DATE_STATUT = '2011-03-14'
     * $query->filterByDateStatut('now'); // WHERE DATE_STATUT = '2011-03-14'
     * $query->filterByDateStatut(array('max' => 'yesterday')); // WHERE DATE_STATUT > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateStatut The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NotificationWebServiceQuery The current query, for fluid interface
     */
    public function filterByDateStatut($dateStatut = null, $comparison = null)
    {
        if (is_array($dateStatut)) {
            $useMinMax = false;
            if (isset($dateStatut['min'])) {
                $this->addUsingAlias(NotificationWebServicePeer::DATE_STATUT, $dateStatut['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateStatut['max'])) {
                $this->addUsingAlias(NotificationWebServicePeer::DATE_STATUT, $dateStatut['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NotificationWebServicePeer::DATE_STATUT, $dateStatut, $comparison);
    }

    /**
     * Filter the query on the DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByDate('2011-03-14'); // WHERE DATE = '2011-03-14'
     * $query->filterByDate('now'); // WHERE DATE = '2011-03-14'
     * $query->filterByDate(array('max' => 'yesterday')); // WHERE DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $date The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NotificationWebServiceQuery The current query, for fluid interface
     */
    public function filterByDate($date = null, $comparison = null)
    {
        if (is_array($date)) {
            $useMinMax = false;
            if (isset($date['min'])) {
                $this->addUsingAlias(NotificationWebServicePeer::DATE, $date['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($date['max'])) {
                $this->addUsingAlias(NotificationWebServicePeer::DATE, $date['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NotificationWebServicePeer::DATE, $date, $comparison);
    }

    /**
     * Filter the query on the ID_ORGANISME column
     *
     * Example usage:
     * <code>
     * $query->filterByIdOrganisme(1234); // WHERE ID_ORGANISME = 1234
     * $query->filterByIdOrganisme(array(12, 34)); // WHERE ID_ORGANISME IN (12, 34)
     * $query->filterByIdOrganisme(array('min' => 12)); // WHERE ID_ORGANISME >= 12
     * $query->filterByIdOrganisme(array('max' => 12)); // WHERE ID_ORGANISME <= 12
     * </code>
     *
     * @param     mixed $idOrganisme The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NotificationWebServiceQuery The current query, for fluid interface
     */
    public function filterByIdOrganisme($idOrganisme = null, $comparison = null)
    {
        if (is_array($idOrganisme)) {
            $useMinMax = false;
            if (isset($idOrganisme['min'])) {
                $this->addUsingAlias(NotificationWebServicePeer::ID_ORGANISME, $idOrganisme['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idOrganisme['max'])) {
                $this->addUsingAlias(NotificationWebServicePeer::ID_ORGANISME, $idOrganisme['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NotificationWebServicePeer::ID_ORGANISME, $idOrganisme, $comparison);
    }

    /**
     * Filter the query on the ID_UTILISATEUR column
     *
     * Example usage:
     * <code>
     * $query->filterByIdUtilisateur(1234); // WHERE ID_UTILISATEUR = 1234
     * $query->filterByIdUtilisateur(array(12, 34)); // WHERE ID_UTILISATEUR IN (12, 34)
     * $query->filterByIdUtilisateur(array('min' => 12)); // WHERE ID_UTILISATEUR >= 12
     * $query->filterByIdUtilisateur(array('max' => 12)); // WHERE ID_UTILISATEUR <= 12
     * </code>
     *
     * @param     mixed $idUtilisateur The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NotificationWebServiceQuery The current query, for fluid interface
     */
    public function filterByIdUtilisateur($idUtilisateur = null, $comparison = null)
    {
        if (is_array($idUtilisateur)) {
            $useMinMax = false;
            if (isset($idUtilisateur['min'])) {
                $this->addUsingAlias(NotificationWebServicePeer::ID_UTILISATEUR, $idUtilisateur['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idUtilisateur['max'])) {
                $this->addUsingAlias(NotificationWebServicePeer::ID_UTILISATEUR, $idUtilisateur['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NotificationWebServicePeer::ID_UTILISATEUR, $idUtilisateur, $comparison);
    }

    /**
     * Filter the query on the ETAT_NOTIFICATION column
     *
     * Example usage:
     * <code>
     * $query->filterByEtatNotification('fooValue');   // WHERE ETAT_NOTIFICATION = 'fooValue'
     * $query->filterByEtatNotification('%fooValue%'); // WHERE ETAT_NOTIFICATION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $etatNotification The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NotificationWebServiceQuery The current query, for fluid interface
     */
    public function filterByEtatNotification($etatNotification = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($etatNotification)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $etatNotification)) {
                $etatNotification = str_replace('*', '%', $etatNotification);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(NotificationWebServicePeer::ETAT_NOTIFICATION, $etatNotification, $comparison);
    }

    /**
     * Filter the query on the ETAT_ACQUITTEMENT column
     *
     * Example usage:
     * <code>
     * $query->filterByEtatAcquittement('fooValue');   // WHERE ETAT_ACQUITTEMENT = 'fooValue'
     * $query->filterByEtatAcquittement('%fooValue%'); // WHERE ETAT_ACQUITTEMENT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $etatAcquittement The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NotificationWebServiceQuery The current query, for fluid interface
     */
    public function filterByEtatAcquittement($etatAcquittement = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($etatAcquittement)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $etatAcquittement)) {
                $etatAcquittement = str_replace('*', '%', $etatAcquittement);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(NotificationWebServicePeer::ETAT_ACQUITTEMENT, $etatAcquittement, $comparison);
    }

    /**
     * Filter the query on the DATE_ACQUITTEMENT column
     *
     * Example usage:
     * <code>
     * $query->filterByDateAcquittement('2011-03-14'); // WHERE DATE_ACQUITTEMENT = '2011-03-14'
     * $query->filterByDateAcquittement('now'); // WHERE DATE_ACQUITTEMENT = '2011-03-14'
     * $query->filterByDateAcquittement(array('max' => 'yesterday')); // WHERE DATE_ACQUITTEMENT > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateAcquittement The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return NotificationWebServiceQuery The current query, for fluid interface
     */
    public function filterByDateAcquittement($dateAcquittement = null, $comparison = null)
    {
        if (is_array($dateAcquittement)) {
            $useMinMax = false;
            if (isset($dateAcquittement['min'])) {
                $this->addUsingAlias(NotificationWebServicePeer::DATE_ACQUITTEMENT, $dateAcquittement['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateAcquittement['max'])) {
                $this->addUsingAlias(NotificationWebServicePeer::DATE_ACQUITTEMENT, $dateAcquittement['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(NotificationWebServicePeer::DATE_ACQUITTEMENT, $dateAcquittement, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   NotificationWebService $notificationWebService Object to remove from the list of results
     *
     * @return NotificationWebServiceQuery The current query, for fluid interface
     */
    public function prune($notificationWebService = null)
    {
        if ($notificationWebService) {
            $this->addUsingAlias(NotificationWebServicePeer::ID_NOTIFICATION_WEB_SERVICE, $notificationWebService->getIdNotificationWebService(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
